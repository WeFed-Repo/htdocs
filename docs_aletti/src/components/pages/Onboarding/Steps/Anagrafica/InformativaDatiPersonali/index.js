import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";

class InformativaDatiPersonali extends Component {
    state = {
        "localfield_privacyopen": (this.props.formstate.field_anagraficablob_privacyletta === "true") ? true : false
    }
    render() {
        
        //SEZIONE INFORMATIVA PRIVACY COMUNE PER ENTAMBI GLI INTESTATARI
        return (
            <DefaultCollapse
                label="LEGGI L'INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI"
                startsOpen={true}
                className="search-collapse"
            >
                <section className="onboarding-block">
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
                                options={[{ "value": "true", "text": "Dichiaro di aver letto e visionato l’informativa privacy" }]}
                            >
                            </Form.checkgroup>
                        </Col>
                    </Row>
                </section>
            </DefaultCollapse>
        )
    }
}

export default InformativaDatiPersonali;