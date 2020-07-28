import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"


class InformativaDatiPersonali extends Component {
    state = {
        "localfield_privacyopen": (this.props.formstate.field_anagraficablob_privacyletta === "true") ? true : false
    }
   
    
    render() {
        
        //SEZIONE INFORMATIVA PRIVACY COMUNE PER ENTAMBI GLI INTESTATARI
        
        return (
            <DefaultCollapse
                label="LEGGI L'INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI"
                startsOpen={ true }
                className="search-collapse"
                hasErrors={ CheckAccordionErrors (this.props.formstate.errors, ["field_anagraficablob_privacyletta","field_numintestatari"]) }>
                <section className="onboarding-block">
                    <Row>
                        <Col xs="12">
                            <Form.radiogroup
                            label="A chi vuoi intestare il conto"
                            name="field_numintestatari"
                            value={this.props.formstate["field_numintestatari"]}
                            onChange={this.props.obchange}
                            error={this.props.formstate.errors["field_numintestatari"]}
                            options={[{ "value": "1", "text": "un intestatario" }, { "value": "2", "text": "due intestatari" }]}
                            className=""
                            >
                            </Form.radiogroup>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs="12">
                            <p>Per procedere occorre presentare il documento al cliente.</p>
                            <Form.checkfile className="no-label no-margin-bottom"
                                name="field_anagraficablob_fileinformativaaperto"
                                value={this.state.localfield_privacyopen}
                                onChange={() => this.setState({ localfield_privacyopen: true })}
                                error={this.props.formstate.errors["field_anagraficablob_fileinformativaaperto"]}
                                filedescription="Informativa sul trattamento dei dati personali*"
                                fileurl="http://www.google.it"
                                filetype="pdf"
                               
                            ></Form.checkfile>
                            <Form.checkgroup className="no-label"
                                name="field_anagraficablob_privacyletta"
                                value={this.props.formstate["field_anagraficablob_privacyletta"]}
                                error={this.props.formstate.errors["field_anagraficablob_privacyletta"]}
                                disabled={!this.state.localfield_privacyopen}
                                onChange={this.props.obchange}
                                options={[{ "value": "true", "text": "Il cliente dichiara di aver letto e visionato l’informativa privacy" }]}
                               
                            >
                            </Form.checkgroup>
                        </Col>
                    </Row>
                    {this.props.formstate.field_convenzione != undefined && this.props.formstate.field_convenzione != "" &&
                    <Row>
                        <Col xs="6">
                            <Form.input
                                label="Codice convenzione"
                                name="field_convenzione"
                                value={this.props.formstate.field_convenzione}
                                onChange={this.props.obchange}
                                placeholder="inserisci codice convenzione"
                                className=""
                            >
                            </Form.input>
                        </Col>
                        <Col xs="6">
                            <Form.input
                                label="Codice promozione"
                                name="field_promozione"
                                value={this.props.formstate.field_promozione}
                                onChange={this.props.obchange}
                                placeholder="inserisci codice promozione"
                                className=""
                            >
                            </Form.input>
                        </Col>

                    </Row>
                }
                <Row>
                    <Col xs="12">
                        <Form.input
                            label="Filiale di riferimento"
                            name="field_anagraficablob_filiale"
                            value={this.props.formstate.field_anagraficablob_filiale}
                            output="true"
                            className=""
                        >
                        </Form.input>
                    </Col>
                </Row>

                </section>
            </DefaultCollapse>
        )
    }
}

export default InformativaDatiPersonali;