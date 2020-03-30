import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import moment from "moment";
import 'moment/locale/it';
import getDateDifference from 'functions/getDateDifference';
import DefaultModal from "components/parts/DefaultModal";
import HelpBtn from 'components/parts/Help';
import DatiFatca  from './DatiFatca'

class DatiPersonali extends Component {
    indexIntText = this.props.indexInt === '0' ? "PRIMO" : "SECONDO"
    constructor(props) {
        super(props);
        let listaTinRequested = this.props.obdomini["nazioni_attive"].filter((el) => { return el.flagTin === "S" }).map((obj) => {
            return obj.value;
        });
        this.state = {
            //IN UN PRIMO MOMENTO NON SARA' POSSIBILE CARICARE UNA SECONDA RESIDENZA FISCALE, VI SARA' UN OVERLAYER //settare true per emulare la presenza di fatca
            fatcaEnable: false,
            showModalFatcaDisabled: false,
            //STATO RELATIVO ALLA VISIBILITA' DEGLI HELP DOCUMENTI
            isHelpDocVisible: false,
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
            scadenzaPlus2 = moment(val, 'DD-MM-YYYY').add(2, "year").format('DD/MM/YYYY'),
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
                    if (dateBirth != "") {
                        if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck10
                        }
                    }
                    else {
                        alert("data di nascita non specificata");

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
                        if (dateBirth != "") {
                            if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck10
                            }
                        }
                        else {
                            alert("data di nascita non specificata");

                        }
                    }
                }
                else if (eta >= 55 ) {

                    if (getDateDifference("09/02/2012", val) < 0) {
                        this.scadenzaDoc = scadenzaPlus5
                    }
                    else {
                        if (dateBirth != "") {
                            if (getDateDifference(scadenzaPlus5, dateBirtToCheck5) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck5, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck5
                            }
                        }
                        else {
                            alert("data di nascita non specificata");

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
                        if (dateBirth != "") {
                            if (getDateDifference(scadenzaPlus10, dateBirtToCheck10) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck10, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck10
                            }
                        }
                        else {
                            alert("data di nascita non specificata");

                        }
                    }
                }
                else if (eta < 70 && eta >= 50) {

                    if (getDateDifference("13/05/2011", val) < 0) {
                        this.scadenzaDoc = scadenzaPlus5
                    }
                    else {
                        if (dateBirth != "") {
                            if (getDateDifference(scadenzaPlus5, dateBirtToCheck5) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck5, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck5
                            }
                        }
                        else {
                            alert("data di nascita non specificata");

                        }
                    }
                }
                else if (eta < 80 && eta >= 70) {
                    if (getDateDifference("13/05/2011", val) < 0) {
                        this.scadenzaDoc = scadenzaPlus3
                    }
                    else {
                        if (dateBirth != "") {
                            if (getDateDifference(scadenzaPlus3, dateBirtToCheck3) < 0) {
                                //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                                this.scadenzaDoc = moment(dateBirtToCheck3, 'DD/MM/YYYY').add(1, "year").format('DD/MM/YYYY');
                            }
                            else {
                                this.scadenzaDoc = dateBirtToCheck3
                            }
                        }
                        else {
                            alert("data di nascita non specificata");

                        }
                    }
                }
            default:
                break;
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
                <DefaultModal show={this.state.showModalFatcaDisabled} close={!this.state.showModalFatcaDisabled}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia ovvero di sussistenza di indizi di residenza all’estero ti informiamo che non è possibile procedere con l'apertura del rapporto. Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => this.setState({ showModalFatcaDisabled: false })} title="Close">Close</Button>
                        </div>
                    </div>
                </DefaultModal>
                <DefaultCollapse disabled={this.props.isPrivacyUnChecked} label={labelDatiPer} startsOpen={false} className="search-collapse">
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
                                            ajaxoptions="nazioni"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>

                                    </Col>

                                    <Col xs="6">
                                        {this.state.fatcaEnable && <Form.select
                                            label="Cittadinanza*"
                                            name={anagraficaIntestatario + "cittadinanza"}
                                            value={this.props.formstate[anagraficaIntestatario + "cittadinanza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "cittadinanza"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="nazioni"
                                            placeholder=""
                                        >
                                        </Form.select>
                                        }
                                        {!this.state.fatcaEnable && <Form.select
                                            label="Cittadinanza*"
                                            name={anagraficaIntestatario + "cittadinanza"}
                                            value={this.props.formstate[anagraficaIntestatario + "cittadinanza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "cittadinanza"]}
                                            onChange={() => { this.setState({ showModalFatcaDisabled: true }) }}
                                            ajaxoptions="nazioni"
                                            placeholder="Italia"
                                        >
                                        </Form.select>
                                        }
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
                                
                                <DatiFatca setObState = {this.props.setObState} obdomini = {this.props.obdomini} formstate = {this.props.formstate} indexInt= {this.props.indexInt} fatcaEnable= {this.state.fatcaEnable} anagraficaIntestatario = { anagraficaIntestatario } obchange = {this.props.obchange}></DatiFatca>
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
                                                        this.setTypeDocumento(val);
                                                        this.setDateEmissione(val);
                                                        this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = "";
                                                        this.props.formstate[anagraficaIntestatario + "datascadenza"] = "";
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
                                                >
                                                </Form.input>
                                                {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]} />}
                                            </Col>
                                        </Row>

                                        <Row>
                                            <Col xs="6" className="position-help">
                                                <Form.date
                                                    label="Data di rilascio/rinnovo*"
                                                    name={anagraficaIntestatario + "datarilasciorinnovo"}
                                                    value={this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                    onChange={this.props.obchange}
                                                    cbchange={(val) => this.setDateScadenza(val)}
                                                    placeholder=""
                                                    className=""
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                    disabled={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] === ""}
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
                                                    disabled={this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] === "" || this.props.formstate[anagraficaIntestatario + "nascita"] === ""}
                                                    dateTo={this.scadenzaDoc}
                                                    dateFrom={this.scadenzaDocPre}
                                                >
                                                </Form.date>
                                                {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataScadenza"} />}
                                            </Col>
                                        </Row>
                                        <Row>
                                            <Col xs="6" >
                                                {listaNazioni != [] && listaNazioni != undefined && <Form.select
                                                    label="Paese di rilascio*"
                                                    name={anagraficaIntestatario + "paeserilascio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "paeserilascio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "paeserilascio"]}
                                                    onChange={this.props.obchange}
                                                    options={listaNazioni}
                                                    placeholder="Seleziona"
                                                >
                                                </Form.select>
                                                }
                                            </Col>
                                            <Col xs="6" >
                                                <Form.select
                                                    label="Provincia di rilascio*"
                                                    name={anagraficaIntestatario + "provinciarilascio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "provinciarilascio"]}
                                                    onChange={this.props.obchange}
                                                    ajaxoptions="province"
                                                    placeholder="Seleziona"
                                                    disabled={this.props.formstate[anagraficaIntestatario + "paeserilascio"] !== "86"}
                                                >
                                                </Form.select>
                                            </Col>
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
                                            <Col xs="6">
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
                                                {this.props.formstate[anagraficaIntestatario + "provinciaresidenza"] !== "" && <Col sm="6">
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
                                    <DefaultCollapse label="AGGIUNGI UN INDIRIZZO PER LA CENTRALE D'ALLARME INTERBANCARIA (CAI)" startsOpen={false} className="search-collapse">
                                        <section className="onboarding-block">
                                            <p>Aggiungi l'indirizzo se diverso da quello di residenza. A questo indirizzo verranno inviate eventuali segnalazioni da parte della CAI sull'uso irregolare di assegni e carte di pagamento.</p>
                                            <Row>
                                                <Col xs="8">
                                                    <Row>
                                                        <Col xs="4">
                                                            {optionResidenza != [] && optionResidenza != undefined &&
                                                                <Form.select
                                                                    label="Indirizzo Cai*"
                                                                    name={anagraficaIntestatario + "tipoindirizzocai"}
                                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzocai"]}
                                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzocai"]}
                                                                    onChange={this.props.obchange}
                                                                    options={optionResidenza}
                                                                    placeholder="Seleziona"

                                                                ></Form.select>
                                                            }
                                                        </Col>
                                                        <Col xs="8">
                                                            <Form.input
                                                                label="&nbsp;"
                                                                name={anagraficaIntestatario + "indirizzocai"}
                                                                value={this.props.formstate[anagraficaIntestatario + "indirizzocai"]}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "indirizzocai"]}
                                                                onChange={this.props.obchange}
                                                            ></Form.input>

                                                        </Col>
                                                    </Row>
                                                </Col>
                                                <Col xs="4">
                                                    <Form.input
                                                        label="Numero*"
                                                        name={anagraficaIntestatario + "numcai"}
                                                        value={this.props.formstate[anagraficaIntestatario + "numcai"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "numcai"]}
                                                        onChange={this.props.obchange}
                                                        placeholder="Seleziona"

                                                    ></Form.input>
                                                </Col>
                                            </Row>
                                            <Row>
                                                <Col xs="6">
                                                    <Form.select
                                                        label="Provincia*"
                                                        name={anagraficaIntestatario + "provinciacai"}
                                                        value={this.props.formstate[anagraficaIntestatario + "provinciacai"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "provinciacai"]}
                                                        onChange={this.props.obchange}
                                                        ajaxoptions="province"
                                                        placeholder="Seleziona"
                                                    >
                                                    </Form.select>
                                                </Col>
                                                <Col>
                                                    {this.props.formstate[anagraficaIntestatario + "provinciacai"] !== "" && <Col sm="6">
                                                        <Form.select
                                                            label="Comune*"
                                                            name={anagraficaIntestatario + "comunecai"}
                                                            value={this.props.formstate[anagraficaIntestatario + "comunecai"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunecai"]}
                                                            onChange={this.props.obchange}
                                                            placeholder="Seleziona..."
                                                            ajaxoptions="comuni"
                                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciacai"]}
                                                        ></Form.select>
                                                    </Col>}
                                                </Col>
                                            </Row>
                                        </section>
                                    </DefaultCollapse>
                                    <DefaultCollapse label="AGGIUNGI INDIRIZZO DI DOMICILIO (SE DIVERSO DALLA RESIDENZA)" startsOpen={false} className="search-collapse">
                                        <section className="onboarding-block">
                                            <p>Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verrà inviata la documentazione contrattuale, per tutti gli intestatari del conto.</p>
                                            <Row>
                                                <Col xs="8">
                                                    <Row>
                                                        <Col xs="4">
                                                            {optionResidenza != [] && optionResidenza != undefined &&
                                                                <Form.select
                                                                    label="Indirizzo Domicilio*"
                                                                    name={anagraficaIntestatario + "tipoindirizzodomicilio"}
                                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                                                    onChange={this.props.obchange}
                                                                    options={optionResidenza}
                                                                    placeholder="Seleziona"

                                                                ></Form.select>
                                                            }
                                                        </Col>
                                                        <Col xs="8">
                                                            <Form.input
                                                                label="&nbsp;"
                                                                name={anagraficaIntestatario + "indirizzodomicilio"}
                                                                value={this.props.formstate[anagraficaIntestatario + "indirizzodomicilio"]}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "indirizzodomicilio"]}
                                                                onChange={this.props.obchange}
                                                            ></Form.input>

                                                        </Col>
                                                    </Row>
                                                </Col>
                                                <Col xs="4">
                                                    <Form.input
                                                        label="Numero*"
                                                        name={anagraficaIntestatario + "numdomicilio"}
                                                        value={this.props.formstate[anagraficaIntestatario + "numdomicilio"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "numdomicilio"]}
                                                        onChange={this.props.obchange}
                                                    ></Form.input>
                                                </Col>
                                            </Row>
                                            <Row>
                                                <Col xs="6">
                                                    <Form.select
                                                        label="Provincia*"
                                                        name={anagraficaIntestatario + "provinciadomicilio"}
                                                        value={this.props.formstate[anagraficaIntestatario + "provinciadomicilio"]}
                                                        error={this.props.formstate.errors[anagraficaIntestatario + "provinciadomicilio"]}
                                                        onChange={this.props.obchange}
                                                        ajaxoptions="province"
                                                        placeholder="Seleziona"
                                                    >
                                                    </Form.select>
                                                </Col>
                                                <Col>
                                                    {this.props.formstate[anagraficaIntestatario + "provinciadomicilio"] !== "" && <Col sm="6">
                                                        <Form.select
                                                            label="Comune*"
                                                            name={anagraficaIntestatario + "comunedomicilio"}
                                                            value={this.props.formstate[anagraficaIntestatario + "comunedomicilio"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunedomicilio"]}
                                                            onChange={this.props.obchange}
                                                            placeholder="Seleziona..."
                                                            ajaxoptions="comuni"
                                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciadomicilio"]}
                                                        ></Form.select>
                                                    </Col>}
                                                </Col>
                                            </Row>
                                        </section>
                                    </DefaultCollapse>

                                    {this.props.indexInt === '0' &&
                                        <DefaultCollapse label="AGGIUNGI INDIRIZZO DI CORRISPONDENZA (SE DIVERSO DAI PRECEDENTI)" startsOpen={false} className="search-collapse">
                                            <section className="onboarding-block">
                                                <p>Se preferisci ricevere la nostra corrispondenza a un indirizzo diverso dalla tua residenza, inseriscilo di seguito. A questo indirizzo invieremo, per tutti gli intestatari del conto, tutte le comunicazioni cartacee. </p>
                                                <Row>
                                                    <Col xs="8">
                                                        <Row>
                                                            <Col xs="4">
                                                                {optionResidenza != [] && optionResidenza != undefined &&
                                                                    <Form.select
                                                                        label="Indirizzo Corrispondenza"
                                                                        name={anagraficaIntestatario + "tipoindirizzocorrisp"}
                                                                        value={this.props.formstate[anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                                        error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                                        onChange={this.props.obchange}
                                                                        options={optionResidenza}
                                                                        placeholder="Seleziona"

                                                                    ></Form.select>
                                                                }
                                                            </Col>
                                                            <Col xs="8">
                                                                <Form.input
                                                                    label="&nbsp;"
                                                                    name={anagraficaIntestatario + "indirizzocorrisp"}
                                                                    value={this.props.formstate[anagraficaIntestatario + "indirizzocorrisp"]}
                                                                    error={this.props.formstate.errors[anagraficaIntestatario + "indirizzocorrisp"]}
                                                                    onChange={this.props.obchange}
                                                                ></Form.input>

                                                            </Col>
                                                        </Row>
                                                    </Col>
                                                    <Col xs="4">
                                                        <Form.input
                                                            label="Numero*"
                                                            name={anagraficaIntestatario + "numcorrisp"}
                                                            value={this.props.formstate[anagraficaIntestatario + "numcorrisp"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "numcorrisp"]}
                                                            onChange={this.props.obchange}
                                                        ></Form.input>
                                                    </Col>
                                                </Row>
                                                <Row>
                                                    <Col xs="6">
                                                        <Form.select
                                                            label="Provincia*"
                                                            name={anagraficaIntestatario + "provinciacorrisp"}
                                                            value={this.props.formstate[anagraficaIntestatario + "provinciacorrisp"]}
                                                            error={this.props.formstate.errors[anagraficaIntestatario + "provinciacorrisp"]}
                                                            onChange={this.props.obchange}
                                                            ajaxoptions="province"
                                                            placeholder="Seleziona"
                                                        >
                                                        </Form.select>
                                                    </Col>
                                                    <Col>
                                                        {this.props.formstate[anagraficaIntestatario + "pprovinciacorrisp"] !== "" && <Col sm="6">
                                                            <Form.select
                                                                label="Comune*"
                                                                name={anagraficaIntestatario + "comunecorrisp"}
                                                                value={this.props.formstate[anagraficaIntestatario + "comunecorrisp"]}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "comunecorrisp"]}
                                                                onChange={this.props.obchange}
                                                                placeholder="Seleziona..."
                                                                ajaxoptions="comuni"
                                                                ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciacorrisp"]}
                                                            ></Form.select>
                                                        </Col>}
                                                    </Col>
                                                </Row>
                                            </section>
                                        </DefaultCollapse>
                                    }
                                    <DefaultCollapse label="AGGIUNGI ALTRI RECAPITI" startsOpen={false} className="search-collapse">
                                        <section className="onboarding-block">
                                            <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                                            <Row>
                                                <Col xs="6">
                                                    <Row>
                                                        <Col xs="6">
                                                            <Form.input
                                                                label="Numero di telefono fisso di casa"
                                                                name={anagraficaIntestatario + "prefissofissocasa"}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "prefissofissocasa"]}
                                                                value={this.props.formstate[anagraficaIntestatario + "prefissofissocasa"]}
                                                                onChange={this.props.obchange}
                                                                placeholder=""
                                                            >
                                                            </Form.input>
                                                        </Col>
                                                        <Col xs="6">
                                                            <Form.input
                                                                label="&nbsp;"
                                                                name={anagraficaIntestatario + "numerofissocasa"}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "numerofissocasa"]}
                                                                value={this.props.formstate[anagraficaIntestatario + "numerofissocasa"]}
                                                                onChange={this.props.obchange}
                                                                placeholder=""
                                                            >
                                                            </Form.input>
                                                        </Col>
                                                    </Row>
                                                </Col>
                                                <Col xs="6">
                                                    <Row>
                                                        <Col xs="6">
                                                            <Form.input
                                                                label="Numero di telefono fisso ufficio"
                                                                name={anagraficaIntestatario + "prefissofissoufficio"}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "prefissofissoufficio"]}
                                                                value={this.props.formstate[anagraficaIntestatario + "prefissofissoufficio"]}
                                                                onChange={this.props.obchange}
                                                                placeholder=""
                                                            >
                                                            </Form.input>
                                                        </Col>
                                                        <Col xs="6">
                                                            <Form.input
                                                                label="&nbsp;"
                                                                name={anagraficaIntestatario + "numerofissoufficio"}
                                                                error={this.props.formstate.errors[anagraficaIntestatario + "numerofissoufficio"]}
                                                                value={this.props.formstate[anagraficaIntestatario + "numerofissoufficio"]}
                                                                onChange={this.props.obchange}
                                                                placeholder=""
                                                            >
                                                            </Form.input>
                                                        </Col>
                                                    </Row>
                                                </Col>
                                            </Row>
                                        </section>
                                    </DefaultCollapse>
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