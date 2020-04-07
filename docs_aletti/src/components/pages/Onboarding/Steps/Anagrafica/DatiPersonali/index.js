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
import DatiCai from './DatiCai';
import DatiDomicilio from './DatiDomicilio';
import DatiCorrispondenza from './DatiCorrispondenza';
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
    emissioneDoc = ""
    typeDoc = ""
    setTypeDocumento(val) {
        this.typeDoc = val
    }
    setDateEmissione(val) {
        //SWITCH A SECONDA DEL DOCUMENTO SELEZIONATO PER SETTARE LA DATA DI EMISSIONE DALLA QUALE PARTIRE

        let documentTypeSelected = this.typeDoc;
        switch (documentTypeSelected) {
            case "01":
            case "11":
            case "12":
                //CASO CARTA IDENTITA'
                //LA DATA DI PARTENZA NON PU0' ESSERE PIU' INDIETRO DI 10 ANNI
                this.emissioneDoc = moment(new Date()).subtract(10, "year").format('DD/MM/YYYY');
                break;
            case "03":
                //CASO PASSAPORTO 10 anni /il giorno prima
                this.emissioneDoc = moment(new Date()).subtract(10, "year").add(1, "day").format('DD/MM/YYYY');
                break;
            case "02":
            case "13":
            case "14":
                this.emissioneDoc = moment(new Date()).subtract(10, "year").format('DD/MM/YYYY');
                break;
            default:
                break;
        }
    }
    setDateScadenza(val) {
        //SWITCH A SECONDA DEL DOCUMENTO SELEZIONATO E DELLA DATA DI EMISSIONE
        let documentTypeSelected = this.typeDoc,
            scadenzaPlus10 = moment(val, 'DD-MM-YYYY').add(10, "year").format('DD/MM/YYYY'),
            scadenzaPlus5 = moment(val, 'DD-MM-YYYY').add(5, "year").format('DD/MM/YYYY'),
            scadenzaPlus3 = moment(val, 'DD-MM-YYYY').add(3, "year").format('DD/MM/YYYY'),
            //DATA DI NASCITA DELL'INTESTATARIO
            dateBirth = this.props.formstate["field_anagraficablob_intestatari_" + this.props.indexInt + "_nascita"],
            DMbirth = dateBirth.split("/")[0] + "/" + dateBirth.split("/")[1],
            YPlus10 = scadenzaPlus10.split("/")[2],
            YPlus5 = scadenzaPlus5.split("/")[2],
            YPlus3 = scadenzaPlus3.split("/")[2],
            dateBirtToCheck10 = DMbirth + "/" + YPlus10,
            dateBirtToCheck5 = DMbirth + "/" + YPlus5,
            dateBirtToCheck3 = DMbirth + "/" + YPlus3,
            eta = moment.duration(moment(new Date(), 'DD/MM/YYYY').diff(moment(dateBirth, 'DD/MM/YYYY'))).asYears();

        if (dateBirth === "") {
            //alert per indicare di specificare la data di nascita necessaria per fare i controlli sulla data di scadenza
            this.setState({
                isWarningDateVisible: true
            })
        }
        else {
            switch (documentTypeSelected) {
                case "01":
                case "11":
                case "12":
                    //CASO CARTA IDENTITA'

                    //SE DATA DI EMISSIONE E' PRIMA DEL 9 FEBBRAIO LA DATA DI SCADENZA/RINNOVO SARA' 10 ANNI
                    if (getDateDifference("13/05/2011", val) < 0) {
                        this.scadenzaDoc = scadenzaPlus10
                    }

                    //SE DATA DI EMISSIONE E' SUCCESSIVA AL 9 DI FEBBRAIO LA DATA DI SCADENZA SARA' 10 ANNI O IL COMPLEANNO SE QUESTO E' SUCCESSIVO
                    else {

                        if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck10
                        }
                    }

                    this.scadenzaDocPre = moment(val, 'DD/MM/YYYY').format('DD/MM/YYYY');
                    break;
                case "03":
                    //CASO PASSAPORTO 10 anni /il giorno prima
                    this.scadenzaDoc = moment(scadenzaPlus10, 'DD/MM/YYYY').add(1, "day").format('DD/MM/YYYY');
                    this.scadenzaDocPre = moment(val, 'DD/MM/YYYY').format('DD/MM/YYYY');
                    break;
                case "02":
                case "14":
                    //CASO PATENTE NON RINNOVATA; NUOVA EMISSIONE
                    //CASO CLIENTE CON MENO DI 55 ANNI

                    if (eta < 55) {
                        //SE HO MENO DI 55 IL DOC VALE 10 ANNI o FINO AL COMPLEANNO
                        if (getDateDifference("13/05/2011", val) < 0) {
                            this.scadenzaDoc = scadenzaPlus10
                        }
                        else {
                            if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck10
                            }

                        }
                    }
                    else if (eta >= 55) {

                        if (getDateDifference("09/02/2012", val) < 0) {
                            this.scadenzaDoc = scadenzaPlus5
                        }
                        else {

                            if (getDateDifference(scadenzaPlus5, dateBirtToCheck5) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck5, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck5
                            }


                        }
                    }

                    this.scadenzaDocPre = moment(new Date(), 'DD/MM/YYYY').format('DD/MM/YYYY');
                    break;
                case "13":
                    //PATENTE RINNOVATA
                    if (eta < 50) {
                        //SE HO MENO DI 50 IL DOC VALE 10 ANNI o FINO AL COMPLEANNO
                        if (getDateDifference("13/05/2011", val) < 0) {
                            this.scadenzaDoc = scadenzaPlus10
                        }
                        else {

                            if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck10
                            }


                        }
                    }
                    else if (eta < 70 && eta >= 50) {

                        if (getDateDifference("13/05/2011", val) < 0) {
                            this.scadenzaDoc = scadenzaPlus5
                        }
                        else {

                            if (getDateDifference(scadenzaPlus5, dateBirtToCheck5) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck5, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck5
                            }

                        }
                    }
                    else if (eta < 80 && eta >= 70) {
                        if (getDateDifference("13/05/2011", val) < 0) {
                            this.scadenzaDoc = scadenzaPlus3
                        }
                        else {

                            if (getDateDifference(scadenzaPlus3, dateBirtToCheck3) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck3, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck3
                            }

                        }
                    }
                default:
                    break;
            }
        }
    }
    render() {

        const anagraficaIntestatario = `field_anagraficablob_intestatari_${this.props.indexInt}_`;
        //DOMINI
        let optionTipoDocumento = this.props.obdomini["documenti_identita"],
            optionResidenza = this.props.obdomini["qualifica_via"],
            optionStudio = this.props.obdomini["titoli_studio"],
            labelDatiPer = this.props.indexInt === '0' ? "INSERISCI I TUOI DATI PERSONALI" : "INSERISCI I DATI PERSONALI DEL SECONDO INTESTATARIO",
            argHelp = "",
            listaNazioni = this.props.obdomini["nazioni_attive"];
        return (
            <>
                <DefaultModal show={this.state.showModalFatcaDisabled}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia ovvero di sussistenza di indizi di residenza all’estero ti informiamo che non è possibile procedere con l'apertura del rapporto. Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => { if (this.props.formstate[anagraficaIntestatario + "paesenascita"] != "1") this.props.formstate[anagraficaIntestatario + "paesenascita"] = ""; if (this.props.formstate[anagraficaIntestatario + "cittadinanza"] != "1") this.props.formstate[anagraficaIntestatario + "cittadinanza"] = ""; this.setState({ showModalFatcaDisabled: false }) }} title="Close">Close</Button>
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
                    disabled={this.props.isPrivacyUnChecked}
                    label={labelDatiPer}
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
                                anagraficaIntestatario + "imgdocidentita_iddoc",
                                anagraficaIntestatario + "tipoindirizzoresidenza",
                                anagraficaIntestatario + "indirizzoresidenza",
                                anagraficaIntestatario + "numresidenza",
                                anagraficaIntestatario + "provinciaresidenza",
                                anagraficaIntestatario + "comuneresidenza"
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
                                        cbchange={(val) => { if (val !== "86" || !this.state.fatcaEnable) { this.setState({ showModalFatcaDisabled: true }) } }}
                                        ajaxoptions="nazioni"
                                        placeholder="Seleziona"
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
                                        cbchange={(val) => { if (val !== "86" || !this.state.fatcaEnable) { this.setState({ showModalFatcaDisabled: true }) } }}
                                        ajaxoptions="nazioni"
                                        placeholder="Seleziona"
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
                                            {optionTipoDocumento != [] && optionTipoDocumento != undefined && <Form.select
                                                label="Tipo di documento*"
                                                name={anagraficaIntestatario + "codtipodocumento"}
                                                value={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "codtipodocumento"]}
                                                onChange={this.props.obchange}
                                                options={optionTipoDocumento}
                                                placeholder="Seleziona"
                                                cbchange={(val) => {
                                                    if (val != "") {
                                                        this.setState({ isHelpDocVisible: true })
                                                        argHelp = this.props.formstate[anagraficaIntestatario + "codtipodocumento"]
                                                    }
                                                    else {
                                                        this.setState({ isHelpDocVisible: false })
                                                    }

                                                    if (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") {

                                                        this.setTypeDocumento(val);
                                                        this.setDateEmissione(val);
                                                        this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = "";
                                                        this.props.formstate[anagraficaIntestatario + "datascadenza"] = "";
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
                                                mask={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? "alfanumerico" : ""}
                                            >
                                            </Form.input>
                                            {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]} />}
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
                                                        cbchange={(val) => {
                                                            if (this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") {
                                                                this.setDateScadenza(val)
                                                            }
                                                        }
                                                        }
                                                        placeholder=""
                                                        className=""
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                        disabled={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? this.props.formstate[anagraficaIntestatario + "codtipodocumento"] === "" : ""}
                                                        dateTo={moment(new Date(), 'DD/MM/YYYY').subtract(1, "day").format('DD/MM/YYYY')}
                                                        dateFrom={this.emissioneDoc}
                                                    >
                                                    </Form.date>
                                                    {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataRinnovo"} />}
                                                </Col>
                                                <Col xs="6" className="position-help">
                                                    <Form.date
                                                        label="Data di scadenza*"
                                                        name={anagraficaIntestatario + "datascadenza"}
                                                        value={this.props.formstate[anagraficaIntestatario + "datascadenza"]}
                                                        onChange={this.props.obchange}
                                                        placeholder=""
                                                        className=""
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "datascadenza"]}
                                                        disabled={(this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "86" || this.props.formstate[anagraficaIntestatario + "paeserilascio"] === "") ? this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] === "" || this.props.formstate[anagraficaIntestatario + "nascita"] === "" : ""}
                                                        dateTo={this.scadenzaDoc}
                                                        dateFrom={this.scadenzaDocPre}
                                                    >
                                                    </Form.date>
                                                    {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataScadenza"} />}
                                                </Col>
                                            </Row>
                                        </Col>
                                        <Col xs="6" >
                                            {listaNazioni != [] && listaNazioni != undefined && <Form.select
                                                label="Paese di rilascio*"
                                                name={anagraficaIntestatario + "paeserilascio"}
                                                value={this.props.formstate[anagraficaIntestatario + "paeserilascio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "paeserilascio"]}
                                                onChange={this.props.obchange}
                                                options={ listaNazioni }
                                                placeholder="Seleziona"
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

                                            >
                                            </Form.select>
                                        </Col>
                                        }
                                    </Row>
                                    <Row>
                                        {this.props.formstate[anagraficaIntestatario + "provinciarilascio"] !== "" && <Col sm="6">
                                            <Form.select
                                                label="Comune di rilascio*"
                                                name={anagraficaIntestatario + "comunerilascio"}
                                                value={this.props.formstate[anagraficaIntestatario + "comunerilascio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "comunerilascio"]}
                                                onChange={this.props.obchange}
                                                placeholder="Seleziona..."
                                                ajaxoptions="comuni"
                                                ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                disabled={this.props.formstate[anagraficaIntestatario + "paeserilascio"] !== "86"}
                                            ></Form.select>
                                        </Col>
                                        }
                                        <Col xs="6">
                                            <Form.file
                                                label="Carica il documento*"
                                                name={anagraficaIntestatario + "imgdocidentita_iddoc"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "imgdocidentita_iddoc"]}
                                                value={this.props.formstate[anagraficaIntestatario + "imgdocidentita_iddoc"]}
                                                onChange={this.props.obchange}
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
                                                    {optionResidenza != [] && optionResidenza != undefined &&
                                                        <Form.select
                                                            label="Indirizzo di residenza*"
                                                            name={anagraficaIntestatario + "tipoindirizzoresidenza"}
                                                            value={this.props.formstate[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                            onChange={this.props.obchange}
                                                            options={optionResidenza}
                                                            placeholder="Seleziona"

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
                                            >
                                            </Form.select>
                                        </Col>
                                        <Col>
                                            {this.props.formstate[anagraficaIntestatario + "provinciaresidenza"] !== "" && <Col sm="8">
                                                <Form.select
                                                    label="Comune di residenza*"
                                                    name={anagraficaIntestatario + "comuneresidenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "comuneresidenza"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "comuneresidenza"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Seleziona..."
                                                    ajaxoptions="comuni"
                                                    ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciaresidenza"]}
                                                ></Form.select>
                                            </Col>}
                                        </Col>
                                    </Row>
                                </>
                            </section>
                            <div className="inner-wrapper-collapse ">
                                <DatiCai formstate={this.props.formstate} anagraficaIntestatario={anagraficaIntestatario} optionResidenza={optionResidenza} obchange={this.props.obchange}></DatiCai>
                                <DatiDomicilio formstate={this.props.formstate} anagraficaIntestatario={anagraficaIntestatario} optionResidenza={optionResidenza} obchange={this.props.obchange}></DatiDomicilio>
                                {this.props.indexInt === '0' && <DatiCorrispondenza formstate={this.props.formstate} anagraficaIntestatario={anagraficaIntestatario} optionResidenza={optionResidenza} obchange={this.props.obchange}></DatiCorrispondenza>}
                                <AltriRecapiti formstate={this.props.formstate} anagraficaIntestatario={anagraficaIntestatario} obchange={this.props.obchange}></AltriRecapiti>
                                <DefaultCollapse label="INFORMAZIONI AGGIUNTIVE" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <Row>

                                            <Col xs="6">
                                                {optionStudio != [] && optionStudio != undefined && <Form.select
                                                    label="Titolo di studio"
                                                    name={anagraficaIntestatario + "codtitolostudio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "codtitolostudio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "codtitolostudio"]}
                                                    onChange={this.props.obchange}
                                                    options={optionStudio}
                                                    placeholder="Seleziona"
                                                >
                                                </Form.select>
                                                }
                                            </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                            </div>

                        </div>
                    </>
                </DefaultCollapse>





            </>
        )
    }
}

export default DatiPersonali;