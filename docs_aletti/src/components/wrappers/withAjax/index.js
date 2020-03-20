import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { connect } from 'react-redux';
import getDisplayName from 'functions/getDisplayname';
import { loadData } from './actions';
import withLoading from 'components/wrappers/withLoading'

export default function withAjax(WrappedComponent, key, noLoading) {
    const WrappedComponentFinal = noLoading ? WrappedComponent : withLoading(WrappedComponent);

    class WrapperComponent extends Component {
        constructor(props) {
            super(props);
            this.key = key;
            this.loadAjaxData = this.loadAjaxData.bind(this);
        }

        componentDidMount() {
            const { initialLoading } = this.props;
            if (initialLoading) {
                this.loadAjaxData();
            }
        }

        loadAjaxData() {
            const { loadData, params } = this.props;
            loadData(this.key, window.jsonUrl[this.key], params);
        };

        render() {
            const { error, json, initialData, updatedAt, ...passThroughProps } = this.props;

            let childData = typeof initialData !== 'undefined' ? initialData : null;
            let childError = null;
            let childMessage = null;


            if (json) {
                // Controllo esito
                if (json.esito) {
                    if (typeof json.esito === 'undefined' || json.esito === "OK" || json.esito.tipo === "OK" || json.esito.type === "OK") {
                        childData = (json.data) ? json.data : json;
                    } else if (json.esito.tipo === "E" || json.esito.type === "E") {
                        childError = (json.esito.messaggio) ? json.esito.messaggio : ((json.esito.description) ? json.esito.description : "Errore dati generico.");
                    } else if (json.esito.tipo === "W" || json.esito.type === "W") {
                        childMessage = json.esito.messaggio;
                    }
                }
                // Sblocco per JSON senza esito/inizializzazione
                else {
                    childData = (json.data) ? json.data : json;
                }
            } else if (error) {
                childError = error;
            }

            /* BLOCCO CONTROLLI CAMBIATO
             if (json && json.data) {
                 childData = json.data;
             } else if (error || (json && json.esito && json.esito.tipo === "E")) {
                 childError = error ? error : json.esito.messaggio;
             } else if (json && json.esito && json.esito.tipo === "W") {
                 childMessage = json.esito.messaggio;
             }
             */

            return <WrappedComponentFinal
                { ...passThroughProps }
                error={ childError } message={ childMessage } data={ childData } loadData={ this.loadAjaxData }
                key={ updatedAt }
            />
        }
    }

    WrapperComponent.propTypes = {
        initialLoading: PropTypes.bool
    };
    WrapperComponent.displayName = 'withAjax(' + getDisplayName(WrappedComponent) + ')';

    const mapStateToProps = state => {
        let { json, isLoading, error, updatedAt } = state.ajaxData[key];
        error = error !== '' ? new Error(error) : false;

        return { json, isLoading, error, updatedAt };
    };

    const mapDispatchToProps = dispatch => ({
        loadData: (key, url, params) => dispatch(loadData(key, url, params))
    });

    return connect(
        mapStateToProps,
        mapDispatchToProps
    )(WrapperComponent);
};
