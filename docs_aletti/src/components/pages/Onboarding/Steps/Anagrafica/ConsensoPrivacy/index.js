import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultModal from "components/parts/DefaultModal";
import moment from "moment";
import 'moment/locale/it';
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class ConsensoPrivacy extends Component {
    constructor(props){
        super(props)
        this.state = {
            isConsensoPrivacyModalOpen : false
        }
    }
    indexIntText = this.props.indexInt === '0' ? "PRIMO" : "SECONDO"
   
    render() {
        
        const anagraficaIntestatario = `field_anagraficablob_intestatari_${this.props.indexInt}_`;
        let today = moment(new Date(), 'DD/MM/YYYY'),
            dateNascitaTo = today.subtract(18, "year").format('DD/MM/YYYY'),
            optionSesso = this.props.obdomini["sesso"],
            optionTextDiscalimer = this.props.obdomini.disclaimer
        
        //SEZIONE INFORMATIVA PRIVACY COMUNE PER ENTAMBI GLI INTESTATARI
        return (
            <DefaultCollapse 
                disabled={this.props.isPrivacyUnChecked && !this.props.isOutput } 
                label={!this.props.isOutput ? `INSERISCI I DATI E I CONSENSI PRIVACY DEL ${this.indexIntText} INTESTATARIO`: `RIEPILOGO DATI E CONSENSI PRIVACY DEL ${this.indexIntText} INTESTATARIO` } 
                startsOpen={false} 
                className="search-collapse"
                hasErrors={ 
                        CheckAccordionErrors(this.props.formstate.errors, 
                        [
                        anagraficaIntestatario + "nome", 
                        anagraficaIntestatario + "cognome", 
                        anagraficaIntestatario + "nascita",
                        anagraficaIntestatario + "sesso",
                        anagraficaIntestatario + "codicefiscale",
                        anagraficaIntestatario + "email",
                        anagraficaIntestatario + "imgcodfiscale",
                        anagraficaIntestatario + "prefisso",
                        anagraficaIntestatario + "telefono",
                        anagraficaIntestatario + "listprivacy_0_consenso",
                        anagraficaIntestatario + "listprivacy_1_consenso",
                        anagraficaIntestatario + "listprivacy_2_consenso",
                        anagraficaIntestatario + "listprivacy_3_consenso",
                        anagraficaIntestatario + "listprivacy_4_consenso"
                        ])}>
                        <section className="onboarding-block">
                            <Row>
                                <Col xs="6">
                                    <Form.input
                                        label="Nome*"
                                        name={anagraficaIntestatario + "nome"}
                                        value={this.props.formstate[anagraficaIntestatario + "nome"]}
                                        onChange={this.props.obchange}
                                        placeholder="Nome completo (es. Maria Luisa)"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "nome"]}
                                        mask = "alfabetico"
                                        output = {this.props.isOutput}
                                    >
                                    </Form.input>
                                </Col>
                                <Col xs="6">
                                    <Form.input
                                        label="Cognome*"
                                        name={anagraficaIntestatario + "cognome"}
                                        value={this.props.formstate[anagraficaIntestatario + "cognome"]}
                                        onChange={this.props.obchange}
                                        placeholder="Cognome completo (es: De luca)"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "cognome"]}
                                        output = {this.props.isOutput}
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.date
                                        label="Data di nascita*"
                                        name={anagraficaIntestatario + "nascita"}
                                        value={this.props.formstate[anagraficaIntestatario + "nascita"]}
                                        onChange={this.props.obchange}
                                        cbchange={() => { this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = "" }}
                                        placeholder=""
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "nascita"]}
                                        dateFrom="01/01/1900"
                                        dateTo= { dateNascitaTo }
                                        output = {this.props.isOutput}
                                    >
                                    </Form.date>
                                </Col>
                                <Col xs="6">
                                    {optionSesso !== [] && optionSesso !== undefined && <Form.radiogroup
                                        label="Sesso*"
                                        name={anagraficaIntestatario + "sesso"}
                                        value={this.props.formstate[anagraficaIntestatario + "sesso"]}
                                        onChange={this.props.obchange}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "sesso"]}
                                        options={[optionSesso[0], optionSesso[1]]}
                                        className=""
                                        output = {this.props.isOutput}
                                    >
                                    </Form.radiogroup>
                                    }
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.input
                                        label="Codice fiscale*"
                                        name={anagraficaIntestatario + "codicefiscale"}
                                        value={this.props.formstate[anagraficaIntestatario + "codicefiscale"]}
                                        onChange={this.props.obchange}
                                        placeholder=""
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "codicefiscale"]}
                                        maxlength="16"
                                        minlength="16"
                                        mask = "codicefiscale"
                                        output = {this.props.isOutput}
                                    >
                                    </Form.input>
                                </Col>
                                <Col xs="6">
                                    <Form.input
                                        label="Email"
                                        name={anagraficaIntestatario + "email"}
                                        value={this.props.formstate[anagraficaIntestatario + "email"]}
                                        onChange={this.props.obchange}
                                        placeholder="email@esempio.it"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "email"]}
                                        output = {this.props.isOutput}
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.file
                                        label="Carica il documento*"
                                        name={anagraficaIntestatario + "imgcodfiscale"}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "imgcodfiscale"]}
                                        value={this.props.formstate[anagraficaIntestatario + "imgcodfiscale"]}
                                        onChange={this.props.obchange}
                                        output = {this.props.isOutput}
                                        tipo="fr"
                                        idBozza={this.props.formstate["field_id"]}
                                        formati={this.props.obdomini["formato_immagine"]}
                                    >
                                    </Form.file>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Row>
                                        <Col xs="3">
                                            <Form.input
                                                label="Prefisso*"
                                                name={anagraficaIntestatario + "prefisso"}
                                                value={ this.props.formstate[anagraficaIntestatario + "prefisso"] }
                                                error= {this.props.formstate.errors[anagraficaIntestatario + "prefisso"]}
                                                onChange={ this.props.obchange }
                                                placeholder="0039"
                                                maxlength = "5"
                                                mask ="telefono"
                                                output = {this.props.isOutput}
                                               
                                            >
                                            </Form.input>
                                        </Col>
                                        <Col xs="5">
                                            <Form.input
                                                label="Numero telefono*"
                                                name={anagraficaIntestatario + "telefono"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "telefono"]}
                                                value={this.props.formstate[anagraficaIntestatario + "telefono"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                                maxlength = "10"
                                                mask ="telefono"
                                                output = {this.props.isOutput}
                                                
                                            >
                                            </Form.input>
                                        </Col>

                                    </Row>
                                </Col>
                            </Row>
                            {optionTextDiscalimer !== [] && optionTextDiscalimer !== undefined && <div>

                                <h3>CONSENSI AL TRATTAMENTO DEI DATI PERSONALI*</h3>
                                <p>Tenuto conto dell’Informativa che mi è stata fornita ai sensi del Regolamento EU 2016/679 e messa a disposizione sul sito Internet della Banca, per quanto riguarda: </p>
                                <Row>
                                    <Col xs="12">
                                        <DefaultModal show={this.state.isConsensoPrivacyModalOpen === true }
                                            params={{ "modalTitle": 'Attenzione' }}>
                                            <p> Se non presti il consenso non sarai aggiornato sulle offerte riservate ai nostri clienti</p>
                                            <div className="btn-console">
                                                <div className="btn-console-right">
                                                    <Button color="primary" className="center" onClick={() => this.setState({ isConsensoPrivacyModalOpen: false })} title="Close">Close</Button>
                                                </div>
                                            </div>
                                        </DefaultModal>
                                         <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_ANAG_CONS_1"]}
                                            name={anagraficaIntestatario + "listprivacy_0_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_0_consenso"]}
                                            onChange={this.props.obchange}
                                            cbchange = {(val) => {if(val === "false") this.setState({ isConsensoPrivacyModalOpen : true })} }
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_0_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                            output = {this.props.isOutput}
                                        >
                                        </Form.radiogroup>

                                    </Col>

                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_ANAG_CONS_2"]}
                                            name={anagraficaIntestatario + "listprivacy_1_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_1_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_1_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                            output = {this.props.isOutput}
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_ANAG_CONS_3"]}
                                            name={anagraficaIntestatario + "listprivacy_2_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_2_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_2_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                            output = {this.props.isOutput}
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_ANAG_CONS_4"]}
                                            name={anagraficaIntestatario + "listprivacy_3_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_3_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_3_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                            output = {this.props.isOutput}
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_ANAG_CONS_5"]}
                                            name={anagraficaIntestatario + "listprivacy_4_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_4_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_4_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                            output = {this.props.isOutput}
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                            </div>}
                        </section>
                    </DefaultCollapse>
        )
    }
}

export default ConsensoPrivacy;