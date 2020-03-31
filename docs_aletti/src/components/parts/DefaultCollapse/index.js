import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import './style.css';
import { Card, CardHeader, Collapse } from "reactstrap";

class DefaultCollapse extends PureComponent {
    constructor(props) {
        super(props);
        const startsOpen = this.props.hasOwnProperty('startsOpen') ? this.props.startsOpen : false;
        this.state = {
            isOpen: startsOpen
        };
        this.toggleCollapse = this.toggleCollapse.bind(this);
    }

    toggleCollapse() {
        if (!this.props.hasOwnProperty('disabled') || !this.props.disabled) {
            this.setState({
                isOpen: !this.state.isOpen
            });
        }
    }

    render() {
        const { disabled, hasErrors, label, nominativo, children, className } = this.props;
        const isOpen = !disabled && this.state.isOpen;
        const nominativoLabel = nominativo ? <span className="nominativo">{ nominativo }</span> : '';
        const errorMessage = (!disabled && hasErrors && !isOpen) ? <span class="error-message"> Apri per Compilare</span> : ''

        // Verifica se nei vari "figli c'è un errore" e setta "hasErrors automaticamente qualora non fosse specificato dall'esterno
        
        
        let cardProps = {
            className: "default-collapse"
        };
        let tag = 'h4';

        if (this.props.isParent) {
            cardProps.className += ' parent';
            tag = 'h3';
        }

        if (this.props.className) {
            cardProps.className += ' ' + className;
        }

        if (disabled) {
            cardProps.className += " default-collapse-disabled"
        } else {
            if (this.state.isOpen) {
                cardProps.className += " default-collapse-open"
            }
            if (hasErrors) {
                cardProps.className += " default-collapse-errors"
            }
        }

        return (
            <Card { ...cardProps }>
                {errorMessage}
                <CardHeader tag={ tag } onClick={ this.toggleCollapse }><i
                    className="icon icon-accordion_down icon-2x"/><i className="icon icon-accordion_up icon-2x"/><span
                    className="default-collapse-label">{ label }{ nominativoLabel }
                    </span>

                    <div className="no-select"/>
                   
                </CardHeader>
                <Collapse isOpen={ isOpen }>
                    <div className="default-collapse-wrap">
                        { children }
                    </div>
                </Collapse>
            </Card>
        )
    }
}

DefaultCollapse.propTypes = {
    label: PropTypes.string.isRequired,
    disabled: PropTypes.bool,
    startsOpen: PropTypes.bool,
    isParent: PropTypes.bool,
};

export default DefaultCollapse;
