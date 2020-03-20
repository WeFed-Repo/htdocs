import React, { PureComponent } from 'react';
import { Form, Button, Col, Row } from 'reactstrap';
import DefaultSelect from "components/parts/DefaultSelect";
import withLoading from 'components/wrappers/withLoading';
import Results from "./Results";
import FieldValidation from "functions/rad/validateField";
import { ambiente } from 'functions/genericVars';
import fetchHandler from 'functions/fetchHandler';
import fakeDelay from 'functions/fakeDelay';
import momentIt from 'functions/rad/momentIt';

/* Estrazione url per le chiamate dai vari "VEDI TUTTI" */
const loadUrl = ambiente.isSviluppo ? window.jsonUrl.customer_documenti_all : "/json_data/customer/documenti_all.json";
const emptyFilters = {
    tipologia: ""
};

class Search extends PureComponent {
    defaultData = [];
    tipologie = [];
    state = {
        conto: '',
        collapseOpened: false,
        filters: {
            values: {
                ...emptyFilters
            },
            errors: {},
            touched: {}
        },
        filteredData: [],
        selectedData: [],
        showModal: 0,
        showConfirmModal: 0
    };

    componentDidMount() {
        this.defaultData = this.props.data;
        this.initFilters();
        this.filterData();
    }

    componentDidUpdate(prevProps, prevState) {
        if (prevProps.data !== this.props.data) {
            this.defaultData = this.props.data;
            this.initFilters();
            this.filterData();
        }
    }

    onChange = event => {
        event.preventDefault();
        const { name, value } = event.target;
        this.customOnChange(name, value);
    };

    customOnChange = (name, value) => {
        let newValues = {
            [name]: value
        };

        this.setState(state => ({
            filters: {
                ...state.filters,
                values: {
                    ...state.filters.values,
                    ...newValues
                }
            }
        }));
    };

    
    handleSelect = (row, isSelect) => {
        this.setState(state => {
            let selectedData;

            if (isSelect) {
                selectedData = state.selectedData.slice();
                // noinspection JSUnresolvedVariable
                selectedData.push(row.idMovimento);
                selectedData.sort();
            } else {
                // noinspection JSUnresolvedVariable
                selectedData = state.selectedData.filter(item => item !== row.idMovimento);
            }

            return {
                selectedData
            }
        });
    };

    /* Filtraggio dati grezzi */
    isToFilter = result => {
        const valoreFiltro = this.state.filters.values["tipologia"];

        return !valoreFiltro || valoreFiltro === result["descrModulo"];
    };

    filterData = () => {
        let filteredData = this.defaultData.filter(this.isToFilter);

        this.setState({
            filteredData: filteredData,
            selectedData: []
        });
    };

    initFilters = () => {
        this.tipologie = this.props.data.reduce((tipologie, result) => {
            if (!tipologie.includes(result.descrModulo)) {
                tipologie.push(result.descrModulo);
            }
            return tipologie;
        }, []).sort();
    };

    resetFilters = () => {
        this.setState(state => ({
            filters: {
                ...state.filters,
                errors: {},
                values: {
                    ...emptyFilters
                }
            }
        }), () => {
            this.filterData();
        });
    };

    render() {
        const options = [{ label: 'Tutti', value: '' }].concat(this.tipologie.map(
            tipologia => ({ label: tipologia, value: tipologia })
        ));
        return (
            <div className='results'>
                <section>
                    <h3>Parametri di ricerca</h3>
                    <Form className="search-form">
                        <Row>
                            <Col sm="12">
                                <DefaultSelect label="Tipologia" onChange={ this.onChange }
                                               name="tipologia" { ...this.state.filters }>
                                    {
                                        options.map(
                                            option => <option key={ option.label }
                                                              value={ option.value }>{ option.label }</option>
                                        )
                                    }
                                </DefaultSelect>
                            </Col>
                        </Row>
                        <div className="btn-console">
                            <Button color="primary" className="right" onClick={ this.filterData }
                                    title="Cerca">Cerca</Button>
                            <Button color="secondary" className="right" onClick={ this.resetFilters }
                                    title="Annulla">Annulla</Button>
                        </div>
                    </Form>
                </section>
                <section>
                    <div className="results-list">
                        <Results tableData={ this.state.filteredData } onSelect={ this.handleSelect }
                                 selected={ this.state.selectedData }/>
                    </div>
                </section>
            </div>
        );
    }
}

const SearchWithLoading = withLoading(Search);

class SearchPage extends PureComponent {
    state = {
        "isLoading": false,
        "error": null,
        "data": []
    };

    componentDidMount() {
        this.loadData();
    }

    makeCall = (url, body) => {
        const delay = ambiente.isSviluppo ? 0 : 1000;

        this.setState({
            "isLoading": true,
            "error": null
        }, () => {
            fakeDelay(delay)
                .then(() => fetchHandler(fetch(url, {
                    headers: new Headers({
                        "Accept": "application/json",
                        "Content-Type": "application/json"
                    }),
                    method: ambiente.isSviluppo ? "POST" : "GET",
                    body: ambiente.isSviluppo ? JSON.stringify(body) : null
                })))
                .then(data => {
                    let index = 0;
                    // noinspection JSUnresolvedVariable
                    this.setState({
                        isLoading: false,
                        data: data.map(result => {
                            result.idDocumento = ++index;
                            return result;
                        })
                    });
                }, error => {
                    this.setState({
                        isLoading: false,
                        error
                    });
                })
        });
    };

    loadData = () => {
        let { contoData } = this.props;

        this.makeCall(loadUrl, {
            "ndg": contoData.ndg,
            "branch": contoData.filiale,
            "accountNumber": contoData.numeroConto,
            "dataDa": momentIt().subtract(2, "M").format("DD/MM/YYYY"),
            "dataA": momentIt().format("DD/MM/YYYY"),
            "tipoRicerca": "DOCUMENTI"
        });
    };

    resetError = () => {
        this.setState({
            "isLoading": false,
            "error": null
        });
    };

    render() {
        return <SearchWithLoading { ...this.state } { ...this.props }
                                  reset={ this.resetError } loadData={ this.loadData }/>
    }
}

export default SearchPage;
