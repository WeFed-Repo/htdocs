import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class DatiCorrispondenza extends Component {

    render() {

        return (
            <DefaultCollapse 
            label="AGGIUNGI INDIRIZZO DI CORRISPONDENZA (SE DIVERSO DAI PRECEDENTI)" 
            startsOpen={false} 
            className="search-collapse"
            hasErrors={
                CheckAccordionErrors(this.props.formstate.errors,
                    [
                        this.props.anagraficaIntestatario  + "tipoindirizzocorrisp",
                        this.props.anagraficaIntestatario  + "indirizzocorrisp",
                        this.props.anagraficaIntestatario  + "numcorrisp",
                        this.props.anagraficaIntestatario  + "provinciacorrisp"
                    ])}
                    >
             
                                        <section className="onboarding-block">
                                            <p>Se preferisci ricevere la nostra corrispondenza a un indirizzo diverso dalla tua residenza, inseriscilo di seguito. A questo indirizzo invieremo, per tutti gli intestatari del conto, tutte le comunicazioni cartacee. </p>
                                            <Row>
                                                <Col xs="8">
                                                    <Row>
                                                        <Col xs="4">
                                                            {this.props.optionResidenza != [] && this.props.optionResidenza != undefined &&
                                                                <Form.select
                                                                    label="Indirizzo Corrispondenza*"
                                                                    name={this.props.anagraficaIntestatario + "tipoindirizzocorrisp"}
                                                                    value={this.props.formstate[this.props.anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                                    onChange={this.props.obchange}
                                                                    options={this.props.optionResidenza}
                                                                    placeholder="Seleziona"

                                                                ></Form.select>
                                                            }
                                                        </Col>
                                                        <Col xs="8">
                                                            <Form.input
                                                                label="&nbsp;"
                                                                name={this.props.anagraficaIntestatario + "indirizzocorrisp"}
                                                                value={this.props.formstate[this.props.anagraficaIntestatario + "indirizzocorrisp"]}
                                                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "indirizzocorrisp"]}
                                                                onChange={this.props.obchange}
                                                            ></Form.input>

                                                        </Col>
                                                    </Row>
                                                </Col>
                                                <Col xs="4">
                                                    <Form.input
                                                        label="Numero*"
                                                        name={this.props.anagraficaIntestatario + "numcorrisp"}
                                                        value={this.props.formstate[this.props.anagraficaIntestatario + "numcorrisp"]}
                                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "numcorrisp"]}
                                                        onChange={this.props.obchange}
                                                    ></Form.input>
                                                </Col>
                                            </Row>
                                            <Row>
                                                <Col xs="6">
                                                    <Form.select
                                                        label="Provincia*"
                                                        name={this.props.anagraficaIntestatario + "provinciacorrisp"}
                                                        value={this.props.formstate[this.props.anagraficaIntestatario + "provinciacorrisp"]}
                                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "provinciacorrisp"]}
                                                        onChange={this.props.obchange}
                                                        ajaxoptions="province"
                                                        placeholder="Seleziona"
                                                    >
                                                    </Form.select>
                                                </Col>
                                                <Col>
                                                    {this.props.formstate[this.props.anagraficaIntestatario + "provinciacorrisp"] !== "" && <Col sm="6">
                                                        <Form.select
                                                            label="Comune*"
                                                            name={this.props.anagraficaIntestatario + "comunecorrisp"}
                                                            value={this.props.formstate[this.props.anagraficaIntestatario + "comunecorrisp"]}
                                                            error={this.props.formstate.errors[this.props.anagraficaIntestatario + "comunecorrisp"]}
                                                            onChange={this.props.obchange}
                                                            placeholder="Seleziona..."
                                                            ajaxoptions="comuni"
                                                            ajaxfilter={this.props.formstate[this.props.anagraficaIntestatario + "provinciacorrisp"]}
                                                        ></Form.select>
                                                    </Col>}
                                                </Col>
                                            </Row>
                                        </section>
                                    </DefaultCollapse>
        )
    }
}

export default DatiCorrispondenza;