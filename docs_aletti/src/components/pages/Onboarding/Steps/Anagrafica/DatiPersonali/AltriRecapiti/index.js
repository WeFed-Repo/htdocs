import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class AltriRecapiti extends Component {

    render() {
        return (
            <>
                {(!this.props.isOutput || (this.props.isOutput && this.props.formstate[this.props.anagraficaIntestatario + "numerofissocasa"] !== "") || (this.props.isOutput && this.props.formstate[this.props.anagraficaIntestatario + "numerofissoufficio"] !== "")) &&
                    <DefaultCollapse
                        label="AGGIUNGI ALTRI RECAPITI"
                        startsOpen={false}
                        className="search-collapse"
                        hasErrors={
                            CheckAccordionErrors(this.props.formstate.errors,
                                [
                                    this.props.anagraficaIntestatario + "prefissofissocasa",
                                    this.props.anagraficaIntestatarioo + "numerofissocasa",
                                    this.props.anagraficaIntestatario + "prefissofissoufficio",
                                    this.props.anagraficaIntestatario + "numerofissoufficio"
                                ])
                        }>
                        <section className="onboarding-block">
                            <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                            <Row>
                                {(!this.props.isOutput || (this.props.isOutput && this.props.formstate[this.props.anagraficaIntestatario + "numerofissocasa"] !== "")) &&
                                    <Col xs="6">

                                        <Row>
                                            <Col xs="6">
                                                <Form.input
                                                    label="Numero di telefono fisso di casa"
                                                    name={this.props.anagraficaIntestatario + "prefissofissocasa"}
                                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "prefissofissocasa"]}
                                                    value={this.props.formstate[this.props.anagraficaIntestatario + "prefissofissocasa"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="0039"
                                                    maxlength="5"
                                                    mask="telefono"
                                                    output={this.props.isOutput}

                                                >
                                                </Form.input>
                                            </Col>
                                            <Col xs="6">
                                                <Form.input
                                                    label="&nbsp;"
                                                    name={this.props.anagraficaIntestatario + "numerofissocasa"}
                                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "numerofissocasa"]}
                                                    value={this.props.formstate[this.props.anagraficaIntestatario + "numerofissocasa"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Numero"
                                                    mask="telefono"
                                                    output={this.props.isOutput}
                                                >
                                                </Form.input>
                                            </Col>
                                        </Row>

                                    </Col>
                                }
                                {(!this.props.isOutput || (this.props.isOutput && this.props.isOutput && this.props.formstate[this.props.anagraficaIntestatario + "numerofissoufficio"] !== "")) &&
                                    <Col xs="6">
                                        <Row>
                                            <Col xs="6">
                                                <Form.input
                                                    label="Numero di telefono fisso ufficio"
                                                    name={this.props.anagraficaIntestatario + "prefissofissoufficio"}
                                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "prefissofissoufficio"]}
                                                    value={this.props.formstate[this.props.anagraficaIntestatario + "prefissofissoufficio"]}
                                                    placeholder="0039"
                                                    maxlength="5"
                                                    onChange={this.props.obchange}
                                                    mask="telefono"
                                                    output={this.props.isOutput}
                                                >
                                                </Form.input>
                                            </Col>
                                            <Col xs="6">
                                                <Form.input
                                                    label="&nbsp;"
                                                    name={this.props.anagraficaIntestatario + "numerofissoufficio"}
                                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "numerofissoufficio"]}
                                                    value={this.props.formstate[this.props.anagraficaIntestatario + "numerofissoufficio"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Numero"
                                                    mask="telefono"
                                                    output={this.props.isOutput}
                                                >
                                                </Form.input>
                                            </Col>
                                        </Row>

                                    </Col>
                                }
                            </Row>
                        </section>
                    </DefaultCollapse>
                }
            </>
        )
    }
}

export default AltriRecapiti;