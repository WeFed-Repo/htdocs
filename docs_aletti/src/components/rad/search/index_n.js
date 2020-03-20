import React, { PureComponent } from 'react';
import { NavLink } from "react-router-dom";
import { Form, Button, Col, Row } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultInput from "components/parts/DefaultInput";
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultDayPicker from "components/parts/DefaultDayPicker";
import DefaultModal from "components/parts/DefaultModal";
import FieldValidation from "functions/rad/validateField";
import {stati} from 'components/rad/search/config';
import ResultsTable from "components/rad/search/parts/ResultsTable";
import withLoading from 'components/wrappers/withLoading'
import { ambiente } from 'functions/genericVars';
import fetchHandler from 'functions/fetchHandler';
import fakeDelay from 'functions/fakeDelay';
import momentIt from "functions/rad/momentIt";
import './style.css';

/* Estrazione url per le chiamate dai vari "VEDI TUTTI" */
const loadUrl = ambiente.isSviluppo ? "" : "/json_data/rad/bozze/listBozze.json";
const deleteUrl = loadUrl;
const duplicateUrl = loadUrl;
const emptyFilters = {
    tipo: "0",
    nominativo: "",
    stato: "0",
    codice: "",
    data_da: null,
    data_a: null
};

class Search extends PureComponent {
    constructor(props) {
        super(props);

        // Inizializza var default dei dati
        this.defaultData = [];
        this.state = {
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
    }

    componentDidMount() {
        this.defaultData = this.props.data;
        this.filterData();
    }

    componentDidUpdate(prevProps) {
        if (prevProps.data !== this.props.data) {
            this.defaultData = this.props.data;
            this.filterData();
        }
    }

    onChange = event => {
        event.preventDefault();
        const { name, value } = event.target;
        this.customOnChange(name, value);
    };

    customOnChange = (name, value) => {
        this.setState(state => ({
            filters: {
                ...state.filters,
                values: {
                    ...state.filters.values,
                    [name]: value
                }
            }
        }));
    };

    /* Filtraggio dati grezzi */
    filterData = () => {
        // filtro applicato alle righe dei risultati (dataToFilter)
        const isToFilter = bozza => {
            // cicla sui filtri in state per controllare se i filtri corrispondono ai valori del dato
            return !Object.keys(this.state.filters.values).some(filter => {
                let valoreBozza, valoreFiltro, isOK;
                // recupera il nome della chiave che si vuole controllare della riga
                // data la chiave, recupera sia il valore del parametro in row che quello del filtro
                switch (filter) {
                    case "data_da":
                        valoreBozza = bozza["dataInserimento"];
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = valoreFiltro === null || valoreBozza >= valoreFiltro;
                        break;
                    case "data_a":
                        valoreBozza = bozza["dataInserimento"];
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = valoreFiltro === null || valoreBozza <= valoreFiltro;
                        break;
                    case "stato":
                    case "codice":
                        valoreBozza = bozza["id"].toString();
                        valoreFiltro = this.state.filters.values[filter].toString();
                        isOK = valoreFiltro.length < 3 || ~valoreBozza.indexOf(valoreFiltro);
                        break;
                    case "nominativo":
                        valoreBozza = bozza["anagraficaBlob"].intestatari[0].nome.toString().toLowerCase() + " " + bozza["anagraficaBlob"].intestatari[0].cognome.toString().toLowerCase();
                        valoreFiltro = this.state.filters.values[filter].toString().toLowerCase();
                        isOK = valoreFiltro.length < 3 || ~valoreBozza.indexOf(valoreFiltro);
                        break;
                    default:
                        isOK = true;
                }

                return !isOK;
            });
        };

        let filteredData = this.defaultData.filter(isToFilter);
        this.setState({
            filteredData: filteredData,
            selectedData: []
        });
    };

    doSearch = () => {
        const { values } = this.state.filters;
        let touched = {};
        let errors = {};
        let validateField = new FieldValidation(errors, values);

        if (values['data_da']) {
            validateField.field('data_da').dateTillToday(false);
        }
        if (values['data_a']) {
            touched['data_a'] = true;
            validateField.field('data_a').dateTillToday(false);
        }
        if (values['codice'] !== "") {
            validateField.field('codice').minLength(3);
        }
        if (values['nominativo'] !== "") {
            validateField.field('nominativo').minLength(3).alpha();
        }

        // Imposto touched = true sui campi con errore, per far comparire il messaggio relativo
        Object.keys(errors).reduce((obj, key) => {
            obj[key] = true;
            return obj;
        }, touched);

        this.setState(state => ({
            filters: {
                ...state.filters,
                touched: touched,
                errors: errors
            }
        }), () => {
            this.filterData();
        });
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

    selectBozza = (row, isSelect) => {
        this.setState(state => {
            let selectedData;
            if (isSelect) {
                selectedData = state.selectedData.slice();
                selectedData.push(row.id);
                selectedData.sort();
            } else {
                selectedData = state.selectedData.filter(item => item !== row.id);
            }

            return {
                selectedData
            }
        });
    };

    deleteBozza = () => {
        if (!this.state.selectedData.length) {
            this.setState({
                showModal: 1
            });
        } else {
            this.setState({
                showConfirmModal: 1
            });
        }
    };

    duplicateBozza = () => {
        if (!this.state.selectedData.length) {
            this.setState({
                showModal: 1
            });
        } else if (this.state.selectedData.length > 1) {
            this.setState({
                showModal: 2
            });
        } else {
            this.setState({
                showConfirmModal: 2
            });
        }
    };

    closeModal = () => {
        this.setState(state => {
            if (state.selectedData.length > 1) {
                return {
                    showModal: 0,
                    selectedData: state.selectedData.slice(0, 1)
                }
            } else {
                return {
                    showModal: 0
                }
            }
        });
    };

    closeConfirmModal = () => {
        this.setState({
            showConfirmModal: 0
        });
    };

    submitConfirmModal = () => {
        if (this.state.showConfirmModal === 1) {
            this.props.deleteBozza(this.state.selectedData);
        } else {
            this.props.duplicateBozza(this.state.selectedData[0]);
        }

        this.closeConfirmModal();
    };

    render() {
        return (
            <div className='results'>
                <h1>Ricerca bozze</h1>

                <section>
                    <div className="results-list">
                        <DefaultCollapse label="RICERCA AVANZATA" startsOpen={ this.state.collapseOpened }
                                         className="search-collapse">
                            <Form className="search-form">
                                <Row>
                                 <Col sm="6">
                                        <DefaultInput label="Nominativo" onChange={ this.onChange } type="text"
                                                      { ...this.state.filters } name="nominativo"/>
                                    </Col>
                                   <Col sm="6">
                                        <DefaultSelect label="Stato" name="stato" onChange={ this.onChange }
                                                       { ...this.state.filters }>
                                            {
                                                stati.map(option => <option key={ option.value }
                                                                            value={ option.value }>{ option.text }</option>)
                                            }
                                        </DefaultSelect>
                                    </Col>
                                   
                                </Row>
                                <Row>
                                <Col sm="6">
                                        <DefaultDayPicker name="data_da" label="Data inserimento da"
                                                          showYearSelect={ true }
                                                          onChange={ this.customOnChange }
                                                          { ...this.state.filters }
                                                          min={ momentIt().subtract(20, 'years').valueOf() }
                                                          max={ momentIt().valueOf() }/>
                                    </Col>
                                <Col sm="6">
                                        <DefaultDayPicker name="data_a" label="A" showYearSelect={ true }
                                                          onChange={ this.customOnChange }
                                                          { ...this.state.filters }
                                                          min={ momentIt().subtract(20, 'years').valueOf() }
                                                          max={ momentIt().valueOf() }/>
                                    </Col>    
                                </Row>
                                <div className="btn-console">
                                    <Button color="primary" className="right" onClick={ this.doSearch }
                                            title="Ricerca pratiche">Cerca</Button>
                                    <Button color="primary" className="right" onClick={ this.resetFilters }
                                            title="Annulla">Annulla</Button>
                                </div>
                            </Form>
                        </DefaultCollapse>
                        
                       <ResultsTable tableData={ this.state.filteredData } onSelect={ this.selectBozza }
                                      selected={ this.state.selectedData }/>
                                    
                        <div className="btn-console">
                            <Button color="primary" className="right" onClick={ this.deleteBozza }
                                    title="Elimina">Elimina</Button>
                            <Button color="primary" className="right" onClick={ this.duplicateBozza }
                                    title="Duplica">Duplica</Button>
                        </div>
                    </div>

                    <DefaultModal show={ !!this.state.showModal }
                                  close={ this.closeModal }
                                  params={ { "modalTitle": 'Attenzione' } }>
                        <p>{
                            this.state.showModal === 1
                                ? "Seleziona almeno una pratica"
                                : "Hai selezionato più pratiche insieme"
                        }</p>

                        <div className="btn-console">
                            <Button color="primary" className="center" onClick={ this.closeModal }
                                    title="OK">OK</Button>
                        </div>
                    </DefaultModal>

                    <DefaultModal show={ !!this.state.showConfirmModal }
                                  close={ this.closeConfirmModal }
                                  params={ { "modalTitle": 'Attenzione' } }>
                        <p>{
                            this.state.showConfirmModal === 1
                                ? "Confermi l'eliminazione delle bozze selezionate?"
                                : "Confermi la duplicazione della bozza selezionata?"
                        }</p>

                        <div className="btn-console">
                            <Button color="primary" className="center" onClick={ this.submitConfirmModal }
                                    title="Sì">Sì</Button>
                        </div>
                    </DefaultModal>
                </section>

                <hr/>

                <section>
                    <div className="btn-console">
                        <NavLink className='btn btn-primary right' to="/onboarding/inserimento"
                                 title="Inserisci nuova richiesta conto">Inserisci nuova Richiesta digitale conto +
                            DT</NavLink>
                    </div>
                </section>
            </div>
        );
    }
}

const SearchWithLoading = withLoading(Search);

class SearchPage extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            "isLoading": false,
            "error": null,
            "data": []
        };
    }

    componentDidMount() {
        this.loadBozze();
    }

    makeCall = (url, body) => {
        this.setState({
            "isLoading": true,
            "error": null
        }, () => {
            fakeDelay(1000)
                .then(() => fetchHandler(fetch(url, {
                    headers: new Headers({
                        "Accept": "application/json",
                        "Content-Type": "application/json"
                    }),
                    method: ambiente.isSviluppo ? "POST" : "GET",
                    body: ambiente.isSviluppo ? JSON.stringify(body) : null
                })))
                .then(bozzePromotori => {
                    this.setState({
                        data: bozzePromotori,
                        isLoading: false
                    });
                }, error => {
                    this.setState({
                        isLoading: false,
                        error
                    });
                })
        });
    };

    loadBozze = () => {
        this.makeCall(loadUrl, null);
    };

    deleteBozza = (ids) => {
        this.makeCall(deleteUrl, { ids });
    };

    duplicateBozza = (id) => {
        this.makeCall(duplicateUrl, { id });
    };

    resetError = () => {
        this.setState({
            "isLoading": false,
            "error": null
        });
    };

    render() {
        return <SearchWithLoading { ...this.state } reset={ this.resetError }
                                  deleteBozza={ this.deleteBozza }
                                  duplicateBozza={ this.duplicateBozza }/>
    }
}

export default SearchPage;
