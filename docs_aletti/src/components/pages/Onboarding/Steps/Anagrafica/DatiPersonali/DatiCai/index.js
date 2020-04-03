import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row} from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class DatiCai extends Component {
    render() {
        return (
            <DefaultCollapse
                label="AGGIUNGI UN INDIRIZZO PER LA CENTRALE D'ALLARME INTERBANCARIA (CAI)"
                startsOpen={false}
                className="search-collapse"
                hasErrors={
                    CheckAccordionErrors(this.props.formstate.errors,
                        [
                            this.props.anagraficaIntestatario  + "tipoindirizzocai",
                            this.props.anagraficaIntestatario  + "indirizzocai",
                            this.props.anagraficaIntestatario  + "numcai",
                            this.props.anagraficaIntestatario  + "provinciacai"
                        ])}>
            
                <section className="onboarding-block">
                    <p>Aggiungi l'indirizzo se diverso da quello di residenza. A questo indirizzo verranno inviate eventuali segnalazioni da parte della CAI sull'uso irregolare di assegni e carte di pagamento.</p>
                    <Row>
                        <Col xs="8">
                            <Row>
                                <Col xs="4">
                                    {this.props.optionResidenza != [] && this.props.optionResidenza != undefined &&
                                        <Form.select
                                            label="Indirizzo Cai*"
                                            name={this.props.anagraficaIntestatario + "tipoindirizzocai"}
                                            value={this.props.formstate[this.props.anagraficaIntestatario + "tipoindirizzocai"]}
                                            error={this.props.formstate.errors[this.props.anagraficaIntestatario + "tipoindirizzocai"]}
                                            onChange={this.props.obchange}
                                            options={this.props.optionResidenza}
                                            placeholder="Seleziona"

                                        ></Form.select>
                                    }
                                </Col>
                                <Col xs="8">
                                    <Form.input
                                        label="&nbsp;"
                                        name={this.props.anagraficaIntestatario + "indirizzocai"}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "indirizzocai"]}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "indirizzocai"]}
                                        onChange={this.props.obchange}
                                    ></Form.input>

                                </Col>
                            </Row>
                        </Col>
                        <Col xs="4">
                            <Form.input
                                label="Numero*"
                                name={this.props.anagraficaIntestatario + "numcai"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "numcai"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "numcai"]}
                                onChange={this.props.obchange}
                                placeholder="Seleziona"

                            ></Form.input>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs="6">
                            <Form.select
                                label="Provincia*"
                                name={this.props.anagraficaIntestatario + "provinciacai"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "provinciacai"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "provinciacai"]}
                                onChange={this.props.obchange}
                                ajaxoptions="province"
                                placeholder="Seleziona"
                            >
                            </Form.select>
                        </Col>
                        <Col>
                            {this.props.formstate[this.props.anagraficaIntestatario + "provinciacai"] !== "" && <Col sm="6">
                                <Form.select
                                    label="Comune*"
                                    name={this.props.anagraficaIntestatario + "comunecai"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "comunecai"]}
                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "comunecai"]}
                                    onChange={this.props.obchange}
                                    placeholder="Seleziona..."
                                    ajaxoptions="comuni"
                                    ajaxfilter={this.props.formstate[this.props.anagraficaIntestatario + "provinciacai"]}
                                ></Form.select>
                            </Col>}
                        </Col>
                    </Row>
                </section>
            </DefaultCollapse>
        )
    }
}

export default DatiCai

