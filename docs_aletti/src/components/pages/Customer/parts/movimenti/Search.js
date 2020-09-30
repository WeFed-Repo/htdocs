import React, { PureComponent, Fragment } from 'react';
import { Form, Button, Col, Row } from 'reactstrap';
import DefaultInput from "components/parts/DefaultInput";
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultDayPicker from "components/parts/DefaultDayPicker";
import DefaultOutput from "components/parts/DefaultOutput";
import Results from "components/pages/Customer/parts/movimenti/Results";
import withLoading from 'components/wrappers/withLoading'
import { periodi } from 'components/pages/Customer/parts/movimenti/config';
import FieldValidation from "functions/rad/validateField";
import { ambiente } from 'functions/genericVars';
import fetchHandler from 'functions/fetchHandler';
import fakeDelay from 'functions/fakeDelay';
import momentIt from "functions/rad/momentIt";
import { formatNumber } from 'functions/tableFunctions';

/* Estrazione url per le chiamate dai vari "VEDI TUTTI" */
const loadUrl = (ambiente.isLocale || ambiente.isLibrerie) ? "/json_data/customer/movimenti_all.json" : "/promotori/dashboard/rest/banking/movimenti";
const emptyFilters = {
    periodo: "30",
    data_da: null,
    data_a: null,
    importo_da: "",
    importo_a: "",
    causale: "",
    categoria: "",
    tipo: ""
};

class Search extends PureComponent {
    defaultData = [];
    categories = {};
    state = {
        conto: this.props.conto,
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

    onChangeConto = event => {
        event.preventDefault();
        const conto = event.target.value;

        this.setState({
            conto
        }, () => this.props.setConto(conto));
    };

    onChange = event => {
        event.preventDefault();
        const { name, value } = event.target;
        this.customOnChange(name, value);
    };

    customOnChange = (name, value) => {
        let newValues = {
            [name]: value
        };

        if (name === 'categoria') {
            newValues.tipo = '';
        } else if (name === 'periodo' && +value) {
            newValues.data_da = null;
            newValues.data_a = null;
        }

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

    getTimeStamp = dateString => {
        const gg = dateString.substr(0, 2) * 1;
        const mm = (dateString.substr(3, 2) * 1) - 1;
        const aaaa = dateString.substr(6, 4) * 1;

        return (new Date(aaaa, mm, gg)).getTime();
    };

    getCurrency = value => !value ? null : parseFloat(value.replace('.', '').replace(',', '.'));

    getPeriod = value => {
        const periodo = value * 1;
        return !periodo ? null : momentIt().startOf('day').subtract(periodo, 'days').valueOf();
    };

    /* Filtraggio dati grezzi */
    filterData = () => {
        // filtro applicato alle righe dei risultati (dataToFilter)
        const isToFilter = result => {
            // cicla sui filtri in state per controllare se i filtri corrispondono ai valori del dato
            return !Object.keys(this.state.filters.values).some(filter => {
                let categoria, valoreResult, valoreFiltro, isOK;

                // recupera il nome della chiave che si vuole controllare della riga
                // data la chiave, recupera sia il valore del parametro in row che quello del filtro
                switch (filter) {
                    case "periodo":
                        valoreResult = this.getTimeStamp(result["dataContabile"]);
                        valoreFiltro = this.getPeriod(this.state.filters.values[filter]);
                        isOK = valoreFiltro === null || valoreResult >= valoreFiltro;
                        break;
                    case "data_da":
                        valoreResult = this.getTimeStamp(result["dataContabile"]);
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = valoreFiltro === null || valoreResult >= valoreFiltro;
                        break;
                    case "data_a":
                        valoreResult = this.getTimeStamp(result["dataContabile"]);
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = valoreFiltro === null || valoreResult <= valoreFiltro;
                        break;
                    case "importo_da":
                        valoreResult = result['importo'];
                        valoreFiltro = this.getCurrency(this.state.filters.values[filter]);
                        isOK = !valoreFiltro || valoreFiltro <= valoreResult;
                        break;
                    case "importo_a":
                        valoreResult = result['importo'];
                        valoreFiltro = this.getCurrency(this.state.filters.values[filter]);
                        isOK = !valoreFiltro || valoreFiltro >= valoreResult;
                        break;
                    case "categoria":
                        valoreResult = result["categoria"];
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = !valoreFiltro || valoreFiltro === valoreResult;
                        break;
                    case "tipo":
                        categoria = result["categoria"];
                        valoreResult = result["descrizione"];
                        valoreFiltro = this.state.filters.values[filter];
                        isOK = !valoreFiltro || valoreFiltro === categoria || valoreFiltro === valoreResult;
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
        if (values['importo_da'] !== "") {
            validateField.field('importo_da').currency();
        }
        if (values['importo_a'] !== "") {
            validateField.field('importo_a').currency();
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

    initFilters = () => {
        this.categories = this.props.data.reduce((categories, result) => {
            if (!categories[result.categoria]) {
                categories[result.categoria] = [];
            }

            // noinspection JSUnresolvedVariable
            if (!categories[result.categoria].includes(result.descrizione)) {
                // noinspection JSUnresolvedVariable
                categories[result.categoria].push(result.descrizione);
            }
            return categories;
        }, {});
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
        const categoriesKeys = Object.keys(this.categories).sort();
        let topCategories = categoriesKeys.length > 1
            ? ['Tutti'].concat(categoriesKeys)
            : categoriesKeys;

        const categoria = this.state.filters.values.categoria;
        let topCategoriesForSub = !categoria || categoria === 'Tutti'
            ? topCategories
            : [categoria];

        const contiKeys = !this.props.conti ? [] : Object.keys(this.props.conti);

        return (
            <div className='results'>
                <section>
                    <h3>Seleziona il conto corrente</h3>
                    <Form className="search-form">
                        <Row>
                            <Col sm="12">
                                {
                                    contiKeys.length < 2
                                        ?
                                        <DefaultOutput label="Conto corrente" output={ this.state.conto }/>
                                        : (!contiKeys.length
                                            ? ""
                                            : <DefaultSelect label="Conto corrente" onChange={ this.onChangeConto }
                                                             value={ this.state.conto } name="conto"
                                                             className="mb-0">
                                                {
                                                    contiKeys.map(key => <option key={ key }
                                                                                 value={ key }>{ key }</option>)
                                                }
                                            </DefaultSelect>
                                        )
                                }
                            </Col>
                        </Row>
                        <Row>
                            <Col sm="6">
                                <DefaultOutput label="Filiale" output={ this.props.info.filiale }
                                               className="mb-0"/>
                            </Col>
                            {
                                this.props.info.saldoContabile && this.props.info.divisa &&
                                <Col sm="6">
                                    <DefaultOutput label="Saldo contabile" output={ formatNumber(this.props.info.saldoContabile, 2) + ' ' + this.props.info.divisa }
                                                   className="mb-0"/>
                                </Col>
                            }
                        </Row>
                    </Form>
                </section>

                <section>
                    <h3>Parametri di ricerca</h3>
                    <Form className="search-form">
                        <Row>
                            <Col sm="6">
                                <DefaultSelect label="Periodo (data contabile)" onChange={ this.onChange }
                                               { ...this.state.filters } name="periodo">
                                    {
                                        periodi.map(option => <option key={ option.value }
                                                                      value={ option.value }>{ option.text }</option>)
                                    }
                                </DefaultSelect>
                            </Col>
                            <Col sm="3">
                                {
                                    this.state.filters.values.periodo === '0' &&
                                    <DefaultDayPicker name="data_da" label="Dal"
                                                      showYearSelect={ true }
                                                      onChange={ this.customOnChange }
                                                      { ...this.state.filters }
                                                      min={ momentIt().subtract(20, 'years').valueOf() }
                                                      max={ momentIt().valueOf() }/>
                                }
                            </Col>
                            <Col sm="3">
                                {
                                    this.state.filters.values.periodo === '0' &&
                                    <DefaultDayPicker name="data_a" label="Al" showYearSelect={ true }
                                                      onChange={ this.customOnChange }
                                                      { ...this.state.filters }
                                                      min={ momentIt().subtract(20, 'years').valueOf() }
                                                      max={ momentIt().valueOf() }/>
                                }
                            </Col>
                            <Col sm="3">
                                <DefaultInput label="Importo da" onChange={ this.onChange } type="text"
                                              { ...this.state.filters } name="importo_da"/>
                            </Col>
                            <Col sm="3">
                                <DefaultInput label="A" onChange={ this.onChange } type="text"
                                              { ...this.state.filters } name="importo_a"/>
                            </Col>
                            <Col sm="3">
                                <DefaultSelect label="Categoria" onChange={ this.onChange }
                                               { ...this.state.filters } name="categoria">
                                    {
                                        topCategories.map(value => {
                                            const optionVal = value === 'Tutti'
                                                ? ""
                                                : value;

                                            return <option key={ optionVal }
                                                           value={ optionVal }>{ value }</option>
                                        })
                                    }
                                </DefaultSelect>
                            </Col>
                            <Col sm="3">
                                <DefaultSelect key={ categoria } label="Tipo di movimento" name="tipo"
                                               onChange={ this.onChange }
                                               { ...this.state.filters }>
                                    {
                                        topCategoriesForSub.map(topCategory => {
                                            let optGroup;
                                            let firstOption;
                                            let firstValue;

                                            if ((/entrat/i).test(topCategory)) {
                                                optGroup = 'Entrate';
                                                firstOption = 'Tutte le entrate';
                                                firstValue = topCategory;
                                            } else {
                                                optGroup = 'Uscite';
                                                firstOption = 'Tutte le uscite';
                                                firstValue = topCategory;
                                            }

                                            return (
                                                <Fragment key={ topCategory }>
                                                    {
                                                        topCategory === 'Tutti'
                                                            ? <option
                                                                value="">{ topCategory }</option>
                                                            : (
                                                                <optgroup label={ optGroup }>
                                                                    <option
                                                                        value={ firstValue }>{ firstOption }</option>
                                                                    {
                                                                        this.categories[topCategory].map(subCategory =>
                                                                            <option key={ subCategory }
                                                                                    value={ subCategory }>{ subCategory }</option>)
                                                                    }
                                                                </optgroup>)
                                                    }
                                                </Fragment>
                                            );
                                        })
                                    }
                                </DefaultSelect>
                            </Col>
                        </Row>
                        <div className="btn-console">
                            <Button color="primary" className="right" onClick={ this.doSearch }
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
        "data": [],
        "conto": this.props.conto,
        "info": {
            "filiale": "",
            "saldoContabile": ""
        }
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
                .then(results => {
                    let index = 0;
                    const movimenti = results.listaMovimenti || [];

                    // noinspection JSUnresolvedVariable
                    this.setState({
                        data: movimenti.map(result => {
                            result.idMovimento = ++index;
                            result.categoria = result.importo > 0 ? "In entrata" : "In uscita";
                            return result;
                        }),
                        info: {
                            filiale: results.filiale,
                            saldoContabile: results.saldoContabile,
                            divisa: results.divisa
                        },
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

    loadData = () => {
        if (this.state.conto) {
            let contoData = this.props.conti[this.state.conto];

            this.makeCall(loadUrl, {
                "ndg": contoData.ndg,
                "branch": contoData.filiale,
                "accountNumber": contoData.numeroConto,
                "dataInizioPeriodo": momentIt().subtract(12, "M").valueOf(),
                "dataFinePeriodo": momentIt().endOf("day").valueOf(),
                "importoMinimo": -999999999,
                "importoMassimo": 999999999
            });
        }
    };

    setConto = conto => {
        this.setState({ conto }, this.loadData)
    };

    resetError = () => {
        this.setState({
            "isLoading": false,
            "error": null
        });
    };

    render() {
        return <>
            {
                this.state.conto
                    ? <SearchWithLoading { ...this.state } reset={ this.resetError }
                                         setConto={ this.setConto } { ...this.props }/>
                    : "Nessun conto selezionato"
            }
        </>
    }
}

export default SearchPage;
