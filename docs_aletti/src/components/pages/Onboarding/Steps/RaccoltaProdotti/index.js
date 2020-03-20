import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import QuestMifid from "./questionarioMIFID";
import validazione from "./validazione";
import salva from "./salva";

// FORM PRINCIPALE
class StepForm extends Component {

    state = {
        "localfield_privacyopen": (this.props.obstate.field_sessionfirmeblob_informativamifid === "true") ? true : false
    }

    render() {

        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate;
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini;

        return (<>
            {
                !formstate.questMifid &&

                <div className="onboarding-wrapper">
                    <div className="onboarding-form">
                        <section className="onboarding-block">
                            <Form.input
                                label="Offerta Aletti"
                                output={true}
                                value={<strong>CONTO CORRENTE</strong>}
                            >
                            </Form.input>
                        </section>
                        <section className="onboarding-block">
                            <h3>Servizi da aggiungere</h3>
                            <Form.checkgroup className="no-label"
                                name="field_sessionfirmeblob_depositoincluso"
                                value={formstate.field_sessionfirmeblob_depositoincluso}
                                error={formstate.errors["field_sessionfirmeblob_depositoincluso"]}
                                onChange={this.props.obchange}
                                options={[{ "value": "true", "text": "DEPOSITO TITOLI A CUSTODIA ED AMMINISTRAZIONE" }]}
                            >
                                ></Form.checkgroup>
                            <Row>
                                <Col sm="3">
                                    <Form.input
                                        label="Regime fiscale applicato"
                                        output={true}
                                        value="Amministrativo"
                                    >
                                    </Form.input>
                                </Col>
                                <Col sm="3">
                                    <Form.input
                                        label="Tipo di commissione"
                                        output={true}
                                        value="Profilo variabile"
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                        </section>
                        <section className="onboarding-block">
                            <h4>Prestazione di servizi di investimento</h4>
                            <Form.checkfile className="no-label no-margin-bottom"
                                name="field_anagraficablob_fileinformativaaperto"
                                value={this.state.localfield_privacyopen}
                                onChange={() => this.setState({ localfield_privacyopen: true })}
                                error={formstate.errors["field_anagraficablob_fileinformativaaperto"]}
                                filedescription="Contratti per la prestazione di Servizi ed Attività d'Investimento e Servizi AccessoriInformativa sul trattamento dei dati personali"
                                fileurl="http://www.google.it"
                                filetype="pdf"
                            ></Form.checkfile>
                            <Form.checkgroup className="no-label"
                                name="field_sessionfirmeblob_informativamifid"
                                value={formstate.field_sessionfirmeblob_informativamifid}
                                error={formstate.errors["field_sessionfirmeblob_informativamifid"]}
                                disabled={!this.state.localfield_privacyopen}
                                onChange={this.props.obchange}
                                options={[{ "value": "true", "text": "Dichiaro di aver preso visione dell’informativa MIFID" }]}
                            >
                            </Form.checkgroup>
                        </section>
                        {formstate.field_sessionfirmeblob_idmifid !=="" &&
                            <section className="onboarding-block">
                                <p>Questionario MIFID già <strong>compilato</strong>.</p>
                                <Button className="form-inline-request" onClick={()=>this.props.setObState({field_sessionfirmeblob_idmifid: "", questMifid: true})}>Ricompila il questionario MIFID</Button>
                            </section>
                        }
                        </div>
                </div>
            }
            {formstate.questMifid && <QuestMifid setObState={this.props.setObState}></QuestMifid>}
        </>)

    }

}

export default {
    form : StepForm,
    validazione: validazione,
    salva: salva
}