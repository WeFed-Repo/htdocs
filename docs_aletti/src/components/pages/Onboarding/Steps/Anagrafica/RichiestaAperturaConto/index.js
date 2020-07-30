import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class RichiestaAperturaConto extends Component {
    
    render() {
        
        //SEZIONE INFORMATIVA PRIVACY COMUNE PER ENTAMBI GLI INTESTATARI
        return (
            <>
            <DefaultCollapse
            label="RICHIESTA APERTURA CONTO"
            startsOpen={ true }
            className="search-collapse"
            hasErrors={ CheckAccordionErrors(this.props.formstate.errors, ["field_numintestatari"])}>
            <section className="onboarding-block">
                <Row>
                    <Col xs="12">
                        <Form.input
                            label="Codice promotore"
                            value={this.props.formstate.field_promotore}
                            output="true"
                            className=""
                        >
                        </Form.input>
                    </Col>
                </Row>
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
           
            </>
        )
    }
}

export default RichiestaAperturaConto;