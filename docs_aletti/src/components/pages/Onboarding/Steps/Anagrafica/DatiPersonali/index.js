import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import moment from "moment";
import 'moment/locale/it';
import getDateDifference from 'functions/getDateDifference';
import DefaultModal from "components/parts/DefaultModal";
import HelpBtn from 'components/parts/Help';
import DatiFatca from './DatiFatca';
import DatiIndirizzi from './DatiIndirizzi';
import AltriRecapiti from './AltriRecapiti';
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class DatiPersonali extends Component {
    indexIntText = this.props.indexInt === '0' ? "PRIMO" : "SECONDO"
    constructor(props) {
        super(props);
        this.state = {
            //IN UN PRIMO MOMENTO NON SARA' POSSIBILE CARICARE UNA SECONDA RESIDENZA FISCALE, VI SARA' UN OVERLAYER //settare true per emulare la presenza di fatca
            fatcaEnable: false,
            showModalFatcaDisabled: false,
            //STATO RELATIVO ALLA VISIBILITA' DEGLI HELP DOCUMENTI
            isHelpDocVisible: false,
            isWarningDateVisible: false
        }
    }


    //COSTRUZIONE DELLA DATA DI VALIDITA' DEL DOCUMENTO CHE DIPENDE DAL TIPO DOCUMENTO SELEZIONATO E DA FATTORI INCROCIATI 9 febbraio 2012 campbiamento per carta identità
    scadenzaDoc = ""
    scadenzaDocPre = ""
    today = moment().format('DD/MM/YYYY')
    //SE E' PERIODO COVIT 

    dateToStart = this.getRangeCovid(this.today) ? moment("01/03/2020", 'DD/MM/YYYY') : this.today
    emissioneDoc = ""
    typeDoc = ""
    setTypeDocumento(val) {
        this.typeDoc = val
    }


    setDateScadenza(documentTypeSelected, val, dateType) {
        let dtReturn = "";

        let birthDate = this.props.formstate["field_anagraficablob_intestatari_" + this.props.indexInt + "_nascita"]
        if (typeof val !== "undefined" && val !== "" && birthDate !== "") {
            //DATE IN CUI SONO CAMBIATE LE NORME PER I DOCUMENTI
            let identityCardChangeDate = moment("10/02/2012", 'DD/MM/YYYY').format('DD/MM/YYYY'),
                drivingLicenseChangeDate = moment("17/11/2012", 'DD/MM/YYYY').format('DD/MM/YYYY'),
                //NUMERO DI ANNI DA AGGIUNGERE
                yearsToAdd = 10,
                //CAPIRE SE MI SERVE LA DATA DI NASCITA DEL SOGGETTO
                useBirthDate = false,
                eta = moment.duration(moment(new Date(), 'DD/MM/YYYY').diff(moment(birthDate, 'DD/MM/YYYY'))).asYears();
            //IL NUMERO DA AGGIUNGERE DIPENDE ANCHE DAL DOCUMENTO SELEZIONATO (CONTROLLI SULLA PATENTE !??)
            //SE E' UNA PATENTE RINNOVATA IL LIMITE E' 50 ANNI DI ETA'
            if (documentTypeSelected == '14' && eta >= 50) {
                if (eta < 70 && eta >= 50) {
                    yearsToAdd = 5;
                }
                else if (eta < 80 && eta >= 70) {
                    yearsToAdd = 3;
                }
                else {
                    yearsToAdd = 2;
                }
            }
            //SE LA LA PATENTE NON E' RINNOVATA iL LIMITE E' 55
            if (/^(02|13)$/.test(documentTypeSelected) && eta >= 55) {
                yearsToAdd = 5;
            }
            if (birthDate === "") {
                //alert per indicare di specificare la data di nascita necessaria per fare i controlli sulla data di scadenza
                this.setState({
                    isWarningDateVisible: true
                })
            }
            else {
                //SE E' CARTA IDENTITA'..
                if (/^(01|11|12)$/.test(documentTypeSelected)) {
                    // Carta di identita'
                    useBirthDate = getDateDifference(identityCardChangeDate, val) >= 0;
                }
                else if (/^(02|13|14)$/.test(documentTypeSelected)) {
                    // Patente
                    useBirthDate = getDateDifference(drivingLicenseChangeDate, val) >= 0;
                }
                //SE CONSIDERO LA DATA DI NASCITA
                if (useBirthDate) {
                    //CARTA IDENTITA'
                    if ((moment(birthDate, "DD/MM/YYYY").month() < moment(val, "DD/MM/YYYY").month()) || (moment(birthDate, "DD/MM/YYYY").month() == moment(val, "DD/MM/YYYY").month() && moment(birthDate, "DD/MM/YYYY").date() < moment(val, "DD/MM/YYYY").date())) {
                        ++yearsToAdd;
                    }
                    this.scadenzaDoc = moment(new Date(Date.UTC(moment(val, "DD/MM/YYYY").year() + yearsToAdd, moment(birthDate, "DD/MM/YYYY").month(), moment(birthDate, "DD/MM/YYYY").date(), 12, 0, 0, 0)).getTime()).format("DD/MM/YYYY");

                }
                //SE NON CONSIDERO LA DATA DI NASCITA
                else {
                    this.scadenzaDoc = moment(new Date(Date.UTC(moment(val, "DD/MM/YYYY").year() + yearsToAdd, moment(val, "DD/MM/YYYY").month(), moment(val, "DD/MM/YYYY").date(), 12, 0, 0, 0)).getTime()).format("DD/MM/YYYY");
                    //SE PASSAPORTO LA SCADENZA E' IL GIORNO PRIMA:
                    if (documentTypeSelected == '03') {
                        this.scadenzaDoc = moment(this.scadenzaDoc, 'DD/MM/YYYY').subtract(1, "day").format('DD/MM/YYYY');
                        this.scadenzaDocPre = this.scadenzaDoc
                    }
                }
                //LIMITE PRE
                //SE E' CARTA IDENTITA' O LA SCADENZA HO IL GIORNO PRIMA:
                if (/^(01|11|12)$/.test(documentTypeSelected)) {
                    this.scadenzaDocPre = moment(this.scadenzaDoc, 'DD/MM/YYYY').subtract(1, "day").format('DD/MM/YYYY');
                }
            }
            if (dateType === "dateTo") {

                dtReturn = this.scadenzaDoc
            }
            if (dateType === "dateFrom") {
                dtReturn = this.scadenzaDocPre
            }

        }

        return dtReturn;

    }


    //calcolo del range per COVID:
    getRangeCovid(datetoCheck) {
        var initCovid = new Date(2020, 2, 1),
            endCovid = new Date(2020, 7, 31)
        datetoCheck = new Date(moment(datetoCheck, "DD/MM/YYYY"));
        if ((datetoCheck.getTime() >= initCovid.getTime() && datetoCheck.getTime() <= endCovid.getTime())) {
            return true
        }
        else {
            return false
        }
    }
    componentDidMount() {
        //alert(this.dateToStart);
        //alert (moment( this.dateToStart, 'DD/MM/YYYY' ).subtract(10, "year").format('DD/MM/YYYY'))
    }
    render() {

        const anagraficaIntestatario = `field_anagraficablob_intestatari_${this.props.indexInt}_`;
        //DOMINI
        let optionTipoDocumento = this.props.obdomini["documenti_identita"],
            optionResidenza = this.props.obdomini["qualifica_via"],
            optionStudio = this.props.obdomini["titoli_studio"],
            labelDatiPer = this.props.indexInt === '0' ? "INSERISCI I TUOI DATI PERSONALI" : "INSERISCI I DATI PERSONALI DEL SECONDO INTESTATARIO",
            labelDatiPerOutput = `RIEPILOGO DATI PERSONALI DEL ${this.indexIntText} INTESTATARIO`,
            argHelp = "",
            listaNazioni = this.props.obdomini["nazioni_attive"];
        return (
            <>
                <DefaultModal show={this.state.showModalFatcaDisabled}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia ovvero di sussistenza di indizi di residenza all’estero ti informiamo che non è possibile procedere con l'apertura del rapporto. Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => { if (this.props.formstate[anagraficaIntestatario + "paesenascita"] !== "86") this.props.formstate[anagraficaIntestatario + "paesenascita"] = ""; if (this.props.formstate[anagraficaIntestatario + "cittadinanza"] !== "86") this.props.formstate[anagraficaIntestatario + "cittadinanza"] = ""; this.setState({ showModalFatcaDisabled: false }) }} title="Close">Close</Button>
                        </div>
                    </div>
                </DefaultModal>

                <DefaultModal show={this.state.isWarningDateVisible}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>Specificare la data di nascita per proseguire con la selezione della data di emisisone e scadenza dei documenti</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => { this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = ""; this.setState({ isWarningDateVisible: false }) }} title="Close">Close</Button>
                        </div>
                    </div>
                </DefaultModal>
                <DefaultCollapse
                    disabled={this.props.isPrivacyUnChecked && !this.props.isOutput}
                    label={!this.props.isOutput ? labelDatiPer : labelDatiPerOutput}
                    startsOpen={false}
                    className="search-collapse"
                    hasErrors={
                        CheckAccordionErrors(this.props.formstate.errors,
                            [
                                anagraficaIntestatario + "paesenascita",
                                anagraficaIntestatario + "cittadinanza",
                                anagraficaIntestatario + "provincianascita",
                                anagraficaIntestatario + "comunenascita",
                                anagraficaIntestatario + "codtipodocumento",
                                anagraficaIntestatario + "numdocumento",
                                anagraficaIntestatario + "datarilasciorinnovo",
                                anagraficaIntestatario + "datascadenza",
                                anagraficaIntestatario + "paeserilascio",
                                anagraficaIntestatario + "provinciarilascio",
                                anagraficaIntestatario + "comunerilascio",
                                anagraficaIntestatario + "imgdocidentita",
                                anagraficaIntestatario + "tipoindirizzoresidenza",
                                anagraficaIntestatario + "indirizzoresidenza",
                                anagraficaIntestatario + "numresidenza",
                                anagraficaIntestatario + "provinciaresidenza",
                                anagraficaIntestatario + "comuneresidenza",
                                anagraficaIntestatario + "capresidenza"
                            ])}>
                    <>
                        <section className="onboarding-block">
                            <Row>
                                <Col xs="6">
                                    <Form.select
                                        label="Paese di nascita*"
                                        name={anagraficaIntestatario + "paesenascita"}
                                        value={this.props.formstate[anagraficaIntestatario + "paesenascita"]}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "paesenascita"]}
                                        onChange={this.props.obchange}
                                        cbchange={(val) => {
                                            if (val !== "86" && !this.state.fatcaEnable) { this.setState({ showModalFatcaDisabled: true }) }
                                            if (val !== "86" && this.state.fatcaEnable) { this.props.formstate[anagraficaIntestatario + "provincianascita"] = "" }
                                        }}
                                        ajaxoptions="nazioni"
                                        placeholder="Seleziona"
                                        output={this.props.isOutput}
                                    >
                                    </Form.select>

                                </Col>

                                <Col xs="6">
                                    <Form.select
                                        label="Cittadinanza*"
                                        name={anagraficaIntestatario + "cittadinanza"}
                                        value={this.props.formstate[anagraficaIntestatario + "cittadinanza"]}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "cittadinanza"]}
                                        onChange={this.props.obchange}
                                        cbchange={(val) => { if (val !== "86" && !this.state.fatcaEnable) { this.setState({ showModalFatcaDisabled: true }) } }}
                                        ajaxoptions="nazioni"
                                        placeholder="Seleziona"
                                        output={this.props.isOutput}
                                    >
                                    </Form.select>
                                </Col>

                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.select
                                        label="Provincia di nascita*"
                                        name={anagraficaIntestatario + "provincianascita"}
                                        value={this.props.formstate[anagraficaIntestatario + "provincianascita"]}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "provincianascita"]}
                                        onChange={this.props.obchange}
                                        ajaxoptions="province"
                                        placeholder="Seleziona"
                                        disabled={this.props.formstate[anagraficaIntestatario + "paesenascita"] !== "" && this.props.formstate[anagraficaIntestatario + "paesenascita"] !== "86"}
                                        output={this.props.isOutput}
                                    >
                                    </Form.select>

                                </Col>

                                {this.props.formstate[anagraficaIntestatario + "provincianascita"] !== "" && <Col sm="6">
                                    <Form.select
                                        label="Comune di nascita*"
                                        name={anagraficaIntestatario + "comunenascita"}
                                        value={this.props.formstate[anagraficaIntestatario + "comunenascita"]}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "comunenascita"]}
                                        onChange={this.props.obchange}
                                        placeholder="Seleziona..."
                                        ajaxoptions="comuni"
                                        ajaxfilter={this.props.formstate[anagraficaIntestatario + "provincianascita"]}
                                        output={this.props.isOutput}
                                    ></Form.select>
                                </Col>}

                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.input
                                        label="Paese di residenza fiscale*"
                                        output="true"
                                        value="Italia"
                                    >
                                    </Form.input>
                                </Col>
                            </Row>

                        </section>

                        <div className="inner-wrapper-collapse ">

                            <DatiFatca setObState={this.props.setObState} obdomini={this.props.obdomini} formstate={this.props.formstate} indexInt={this.props.indexInt} fatcaEnable={this.state.fatcaEnable} anagraficaIntestatario={anagraficaIntestatario} obchange={this.props.obchange}></DatiFatca>
                            <section className="onboarding-block">
                                <>
                                    <h4>Inserisci i dati del tuo documento di identità</h4>
                                    <Row>
                                        <Col xs="6">
                                            {optionTipoDocumento !== [] && optionTipoDocumento !== undefined && <Form.select
                                                label="Tipo di documento*"
                                                name={anagraficaIntestatario + "codtipodocumento"}
                                                value={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "codtipodocumento"]}
                                                onChange={this.props.obchange}
                                                options={optionTipoDocumento}
                                                placeholder="Seleziona"
                                                output={this.props.isOutput}
                                                cbchange={(val) => {
                                                    if (val !== "") {
                                                        this.setState({ isHelpDocVisible: true })
                                                        argHelp = this.props.formstate[anagraficaIntestatario + "codtipodocumento"]
                                                    }
                                                    else {
                                                        this.setState({ isHelpDocVisible: false })
                                                    }

                                                    if (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") {

                                                        this.setTypeDocumento(val);
                                                        // Reset campi date rilascio e scadenza
                                                        this.props.setObState({
                                                            [anagraficaIntestatario + "datarilasciorinnovo"]: "",
                                                            [anagraficaIntestatario + "datascadenza"]: ""
                                                        });
                                                    }
                                                }

                                                }

                                            >
                                            </Form.select>
                                            }
                                        </Col>
                                        <Col xs="6" className="position-help">
                                            <Form.input
                                                label="Numero documento*"
                                                name={anagraficaIntestatario + "numdocumento"}
                                                value={this.props.formstate[anagraficaIntestatario + "numdocumento"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "numdocumento"]}
                                                onChange={this.props.obchange}
                                                output={this.props.isOutput}
                                                mask={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? "alfanumerico" : ""}
                                            >
                                            </Form.input>
                                            {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] !== "") && <HelpBtn className="modal-sm" arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_numero"} />}
                                        </Col>
                                    </Row>

                                    <Row>
                                        <Col xs="6">
                                            <Row>
                                                <Col xs="6" className="position-help">
                                                    <Form.date
                                                        label="Data di rilascio/rinnovo*"
                                                        name={anagraficaIntestatario + "datarilasciorinnovo"}
                                                        value={this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                        onChange={this.props.obchange}
                                                        cbchange={() => {
                                                            if (this.props.formstate[anagraficaIntestatario + "nascita"] === "") {
                                                                this.setState({
                                                                    isWarningDateVisible: true
                                                                })
                                                                this.props.setObState({
                                                                    [anagraficaIntestatario + "datarilasciorinnovo"]: "",
                                                                    [anagraficaIntestatario + "datascadenza"]: ""
                                                                });
                                                            }
                                                            else {
                                                                this.props.setObState({ [anagraficaIntestatario + "datascadenza"]: "" })
                                                            }
                                                        }}
                                                        placeholder=""
                                                        className=""
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                        disabled={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? this.props.formstate[anagraficaIntestatario + "codtipodocumento"] === "" : ""}
                                                        dateTo={moment(new Date(), 'DD/MM/YYYY').subtract(1, "day").format('DD/MM/YYYY')}
                                                        dateFrom={(this.props.formstate[anagraficaIntestatario + "nascita"] !== "" && (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "")) ? this.props.formstate[anagraficaIntestatario + "codtipodocumento"] === '03' ? moment(this.dateToStart, 'DD/MM/YYYY').subtract(10, "year").add(1, "day").format('DD/MM/YYYY') : moment(this.dateToStart, 'DD/MM/YYYY').subtract(10, "year").format('DD/MM/YYYY') : ""}
                                                        output={this.props.isOutput}
                                                    >
                                                    </Form.date>
                                                    {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] !== "") && <HelpBtn className="modal-sm" arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataRinnovo"} />}
                                                </Col>
                                                <Col xs="6" className="position-help">
                                                    <Form.date key={this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                        label="Data di scadenza*"
                                                        name={anagraficaIntestatario + "datascadenza"}
                                                        value={this.props.formstate[anagraficaIntestatario + "datascadenza"]}
                                                        onChange={this.props.obchange}
                                                        placeholder=""
                                                        className=""
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "datascadenza"]}
                                                        disabled={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] === "" || this.props.formstate[anagraficaIntestatario + "nascita"] === "" : ""}
                                                        dateTo={(this.props.formstate[anagraficaIntestatario + "nascita"] !== "" && (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "")) ? this.setDateScadenza(this.props.formstate[anagraficaIntestatario + "codtipodocumento"], this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"], "dateTo") : ""}
                                                        dateFrom={(this.props.formstate[anagraficaIntestatario + "nascita"] !== "" && (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "")) ? this.setDateScadenza(this.props.formstate[anagraficaIntestatario + "codtipodocumento"], this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"], "dateFrom") : ""}
                                                        output={this.props.isOutput}
                                                    >
                                                    </Form.date>
                                                    {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] !== "") && <HelpBtn className="modal-sm" arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataScadenza"} />}
                                                </Col>
                                            </Row>
                                        </Col>
                                        <Col xs="6" >
                                            {listaNazioni !== [] && listaNazioni !== undefined && <Form.select
                                                label="Paese di rilascio*"
                                                name={anagraficaIntestatario + "paeserilascio"}
                                                value={this.props.formstate[anagraficaIntestatario + "paeserilascio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "paeserilascio"]}
                                                onChange={this.props.obchange}
                                                options={listaNazioni}
                                                placeholder="Seleziona"
                                                output={this.props.isOutput}
                                            >
                                            </Form.select>
                                            }
                                        </Col>

                                    </Row>
                                    <Row>
                                        {(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") && <Col sm="6">
                                            <Form.select
                                                label="Provincia di rilascio*"
                                                name={anagraficaIntestatario + "provinciarilascio"}
                                                value={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "provinciarilascio"]}
                                                onChange={this.props.obchange}
                                                ajaxoptions="province"
                                                placeholder="Seleziona"
                                                output={this.props.isOutput}
                                            >
                                            </Form.select>
                                        </Col>
                                        }
                                        {this.props.formstate[anagraficaIntestatario + "provinciarilascio"] !== "" && <Col sm="6">
                                            <Form.select
                                                label="Comune di rilascio*"
                                                name={anagraficaIntestatario + "comunerilascio"}
                                                value={this.props.formstate[anagraficaIntestatario + "comunerilascio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "comunerilascio"]}
                                                onChange={this.props.obchange}
                                                ajaxoptions="comuni"
                                                ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                placeholder="Seleziona.."
                                                output={this.props.isOutput}

                                            >
                                            </Form.select>
                                        </Col>
                                        }
                                    </Row>
                                    <Row>
                                        <Col xs="6">
                                            <Form.file
                                                label="Carica il documento*"
                                                name={anagraficaIntestatario + "imgdocidentita"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "imgdocidentita"]}
                                                value={this.props.formstate[anagraficaIntestatario + "imgdocidentita"]}
                                                onChange={this.props.obchange}
                                                tipo="fr"
                                                idBozza={this.props.formstate["field_id"]}
                                                formati={this.props.obdomini["formato_immagine"]}
                                                output={this.props.isOutput}
                                            >
                                            </Form.file>
                                        </Col>

                                    </Row>
                                </>
                            </section>

                            <section className="onboarding-block">
                                <>
                                    <h4>Indica i recapiti</h4>
                                    <Row>
                                        <Col xs="8">
                                            <Row>
                                                <Col xs="4">
                                                    {optionResidenza !== [] && optionResidenza !== undefined &&
                                                        <Form.select
                                                            label="Indirizzo di residenza*"
                                                            name={anagraficaIntestatario + "tipoindirizzoresidenza"}
                                                            value={this.props.formstate[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                            onChange={this.props.obchange}
                                                            options={optionResidenza}
                                                            placeholder="Seleziona"
                                                            output={this.props.isOutput}

                                                        ></Form.select>
                                                    }
                                                </Col>
                                                <Col xs="8">
                                                    <Form.input
                                                        label="&nbsp;"
                                                        name={anagraficaIntestatario + "indirizzoresidenza"}
                                                        value={this.props.formstate[anagraficaIntestatario + "indirizzoresidenza"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "indirizzoresidenza"]}
                                                        onChange={this.props.obchange}
                                                        placeholder="Seleziona"
                                                        output={this.props.isOutput}

                                                    ></Form.input>

                                                </Col>
                                            </Row>
                                        </Col>
                                        <Col xs="4">
                                            <Form.input
                                                label="Numero*"
                                                name={anagraficaIntestatario + "numresidenza"}
                                                value={this.props.formstate[anagraficaIntestatario + "numresidenza"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "numresidenza"]}
                                                onChange={this.props.obchange}
                                                output={this.props.isOutput}
                                            ></Form.input>
                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col xs="4">
                                            <Form.select
                                                label="Provincia di residenza*"
                                                name={anagraficaIntestatario + "provinciaresidenza"}
                                                value={this.props.formstate[anagraficaIntestatario + "provinciaresidenza"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "provinciaresidenza"]}
                                                onChange={this.props.obchange}
                                                ajaxoptions="province"
                                                placeholder="Seleziona"
                                                output={this.props.isOutput}
                                            >
                                            </Form.select>
                                        </Col>
                                        {this.props.formstate[anagraficaIntestatario + "provinciaresidenza"] !== "" &&
                                            <><Col xs="6">
                                                <Form.select
                                                    label="Comune di residenza*"
                                                    name={anagraficaIntestatario + "comuneresidenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "comuneresidenza"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "comuneresidenza"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Seleziona..."
                                                    ajaxoptions="comuni"
                                                    ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciaresidenza"]}
                                                    output={this.props.isOutput}
                                                ></Form.select>
                                            </Col>
                                                <Col xs="2">
                                                    <Form.input
                                                        label="Cap di residenza*"
                                                        name={anagraficaIntestatario + "capresidenza"}
                                                        value={this.props.formstate[anagraficaIntestatario + "capresidenza"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "capresidenza"]}
                                                        onChange={this.props.obchange}
                                                        placeholder=""
                                                        mask="numero"
                                                        output={this.props.isOutput}
                                                    ></Form.input>
                                                </Col>
                                            </>
                                        }

                                    </Row>
                                </>
                            </section>
                            <div className="inner-wrapper-collapse ">
                                <DatiIndirizzi
                                    formstate={this.props.formstate}
                                    anagraficaIntestatario={anagraficaIntestatario}
                                    optionResidenza={optionResidenza}
                                    obchange={this.props.obchange}
                                    labelIndirizzi="AGGIUNGI UN INDIRIZZO PER LA CENTRALE D'ALLARME INTERBANCARIA (CAI)"
                                    tpyeIndirizzo="cai"
                                    isOutput={this.props.isOutput}
                                >
                                </DatiIndirizzi>
                                <DatiIndirizzi
                                    formstate={this.props.formstate}
                                    anagraficaIntestatario={anagraficaIntestatario}
                                    optionResidenza={optionResidenza}
                                    obchange={this.props.obchange}
                                    labelIndirizzi="AGGIUNGI INDIRIZZO DI DOMICILIO (SE DIVERSO DALLA RESIDENZA)"
                                    tpyeIndirizzo="domicilio"
                                    isOutput={this.props.isOutput}
                                >
                                </DatiIndirizzi>
                                {this.props.indexInt === '0' &&
                                    <DatiIndirizzi
                                        formstate={this.props.formstate}
                                        anagraficaIntestatario={anagraficaIntestatario}
                                        optionResidenza={optionResidenza}
                                        obchange={this.props.obchange}
                                        labelIndirizzi="AGGIUNGI INDIRIZZO DI CORRISPONDENZA (SE DIVERSO DAI PRECEDENTI)"
                                        tpyeIndirizzo="corrisp"
                                        isOutput={this.props.isOutput}
                                    >
                                    </DatiIndirizzi>
                                }
                                <AltriRecapiti
                                    formstate={this.props.formstate}
                                    anagraficaIntestatario={anagraficaIntestatario}
                                    obchange={this.props.obchange}
                                    isOutput={this.props.isOutput}
                                >

                                </AltriRecapiti>
                                {(!this.props.isOutput || (this.props.isOutput && this.props.formstate[anagraficaIntestatario + "codtitolostudio"] !== "")) &&
                                    <DefaultCollapse label="INFORMAZIONI AGGIUNTIVE" startsOpen={false} className="search-collapse">
                                        <section className="onboarding-block">
                                            <Row>

                                                <Col xs="6">
                                                    {optionStudio !== [] && optionStudio !== undefined && <Form.select
                                                        label="Titolo di studio"
                                                        name={anagraficaIntestatario + "codtitolostudio"}
                                                        value={this.props.formstate[anagraficaIntestatario + "codtitolostudio"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "codtitolostudio"]}
                                                        onChange={this.props.obchange}
                                                        options={optionStudio}
                                                        placeholder="Seleziona"
                                                        output={this.props.isOutput}
                                                    >
                                                    </Form.select>
                                                    }
                                                </Col>
                                            </Row>
                                        </section>
                                    </DefaultCollapse>
                                }
                            </div>

                        </div>
                    </>
                </DefaultCollapse>





            </>
        )
    }
}

export default DatiPersonali;