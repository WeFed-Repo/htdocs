import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class DatiDomicilio extends Component {

    render() {

        return (
            <DefaultCollapse 
            label="AGGIUNGI INDIRIZZO DI DOMICILIO (SE DIVERSO DALLA RESIDENZA)" 
            startsOpen={false} 
            className="search-collapse"
            hasErrors={
                CheckAccordionErrors(this.props.formstate.errors,
                    [
                        this.props.anagraficaIntestatario  + "tipoindirizzodomicilio",
                        this.props.anagraficaIntestatario  + "indirizzodomicilio",
                        this.props.anagraficaIntestatario  + "numdomicilio",
                        this.props.anagraficaIntestatario  + "provinciadomicilio"
                    ])}>
             
                <section className="onboarding-block">
                    <p>Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verrà inviata la documentazione contrattuale, per tutti gli intestatari del conto.</p>
                    <Row>
                        <Col xs="8">
                            <Row>
                                <Col xs="4">
                                    {this.props.optionResidenza != [] && this.props.optionResidenza != undefined &&
                                        <Form.select
                                            label="Indirizzo Domicilio*"
                                            name={this.props.anagraficaIntestatario + "tipoindirizzodomicilio"}
                                            value={this.props.formstate[this.props.anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                            error={this.props.formstate.errors[this.props.anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                            onChange={this.props.obchange}
                                            options={this.props.optionResidenza}
                                            placeholder="Seleziona"

                                        ></Form.select>
                                    }
                                </Col>
                                <Col xs="8">
                                    <Form.input
                                        label="&nbsp;"
                                        name={this.props.anagraficaIntestatario + "indirizzodomicilio"}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "indirizzodomicilio"]}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "indirizzodomicilio"]}
                                        onChange={this.props.obchange}
                                    ></Form.input>

                                </Col>
                            </Row>
                        </Col>
                        <Col xs="4">
                            <Form.input
                                label="Numero*"
                                name={this.props.anagraficaIntestatario + "numdomicilio"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "numdomicilio"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "numdomicilio"]}
                                onChange={this.props.obchange}
                            ></Form.input>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs="4">
                        <Form.select
                                label="Provincia*"
                                name={this.props.anagraficaIntestatario + "provinciadomicilio"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "provinciadomicilio"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "provinciadomicilio"]}
                                onChange={this.props.obchange}
                                cbchange = {(val) => {
                                    if(val === "") {
                                        this.props.formstate[this.props.anagraficaIntestatario + "comunedomicilio"] = "";
                                        this.props.formstate[this.props.anagraficaIntestatario + "capdomicilio"] = ""
                                    }
                                }}
                                ajaxoptions="province"
                                placeholder="Seleziona"
                            >
                            </Form.select>
                        </Col>
                        
                            {this.props.formstate[this.props.anagraficaIntestatario + "provinciadomicilio"] !== "" && 
                            <>
                            <Col sm="6">
                                <Form.select
                                    label="Comune*"
                                    name={this.props.anagraficaIntestatario + "comunedomicilio"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "comunedomicilio"]}
                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "comunedomicilio"]}
                                    onChange={this.props.obchange}
                                    placeholder="Seleziona..."
                                    ajaxoptions="comuni"
                                    ajaxfilter={this.props.formstate[this.props.anagraficaIntestatario + "provinciadomicilio"]}
                                ></Form.select>
                            </Col>
                            <Col xs="2">
                                <Form.input
                                    label="Cap domicilio*"
                                    name={this.props.anagraficaIntestatario + "capdomicilio"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "capdomicilio"]}
                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "capdomicilio"]}
                                    onChange={this.props.obchange}
                                    placeholder=""
                                    mask="numero"
                                ></Form.input>
                            </Col>
                            </>
                            }
                        
                    </Row>
                </section>
            </DefaultCollapse>
        )
    }
}

export default DatiDomicilio;