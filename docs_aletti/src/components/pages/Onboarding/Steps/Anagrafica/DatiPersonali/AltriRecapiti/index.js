import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class AltriRecapiti extends Component {

    render() {

        return (
            <DefaultCollapse label="AGGIUNGI ALTRI RECAPITI" startsOpen={false} className="search-collapse">
                <section className="onboarding-block">
                    <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                    <Row>
                        <Col xs="6">
                            <Row>
                                <Col xs="3">
                                    <Form.input
                                        label="Numero di telefono fisso di casa"
                                        name={this.props.anagraficaIntestatario + "prefissofissocasa"}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "prefissofissocasa"]}
                                        value={ this.props.formstate[this.props.anagraficaIntestatario + "prefissofissocasa"] }
                                        onChange={this.props.obchange}
                                        placeholder="0039"
                                        maxlength = "5"
                                        mask ="telefono"

                                    >
                                    </Form.input>
                                </Col>
                                <Col xs="5">
                                    <Form.input
                                        label="&nbsp;"
                                        name= {this.props.anagraficaIntestatario + "numerofissocasa"}
                                        error= {this.props.formstate.errors[this.props.anagraficaIntestatario + "numerofissocasa"]}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "numerofissocasa"] !="" ? this.props.formstate[this.props.anagraficaIntestatario + "numerofissocasa"] : "+39"}
                                        onChange={this.props.obchange}
                                        placeholder=""
                                        mask ="telefono"
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
                                        name={this.props.anagraficaIntestatario + "prefissofissoufficio"}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "prefissofissoufficio"]}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "prefissofissoufficio"]}
                                        placeholder="0039"
                                        maxlength = "5"
                                        onChange={this.props.obchange}
                                        placeholder=""
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
                                        placeholder=""
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                        </Col>
                    </Row>
                </section>
            </DefaultCollapse>
        )
    }
}

export default AltriRecapiti;