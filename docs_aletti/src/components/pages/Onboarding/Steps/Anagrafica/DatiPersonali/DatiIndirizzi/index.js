import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"

class DatiIndirizzi extends Component {
    render() {
        const tpyeIndirizzo = this.props.tpyeIndirizzo;
        let paragrafo = "";
        switch (tpyeIndirizzo) {
            case "cai":
                paragrafo = "Aggiungi l'indirizzo se diverso da quello di residenza. A questo indirizzo verranno inviate eventuali segnalazioni da parte della CAI sull'uso irregolare di assegni e carte di pagamento."
                break;
            case "domicilio":
                paragrafo = "Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verrà inviata la documentazione contrattuale, per tutti gli intestatari del conto."
                break;
            case "corrisp":
                paragrafo = "Se preferisci ricevere la nostra corrispondenza a un indirizzo diverso dalla tua residenza, inseriscilo di seguito. A questo indirizzo invieremo, per tutti gli intestatari del conto, tutte le comunicazioni cartacee."
                break;
            default:

                break;
        }

        return (
            <DefaultCollapse
                label={this.props.labelIndirizzi}
                startsOpen={false}
                className="search-collapse"
                hasErrors={
                    CheckAccordionErrors(this.props.formstate.errors,
                        [
                            this.props.anagraficaIntestatario + "tipoindirizzo" + tpyeIndirizzo,
                            this.props.anagraficaIntestatario + "indirizzo" + tpyeIndirizzo,
                            this.props.anagraficaIntestatario + "num" + tpyeIndirizzo,
                            this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo,
                            this.props.anagraficaIntestatario + "comune" + tpyeIndirizzo,
                            this.props.anagraficaIntestatario + "cap" + tpyeIndirizzo
                        ])}>

                <section className="onboarding-block">
                    <p>{paragrafo}</p>
                    <Row>
                        <Col xs="8">
                            <Row>
                                <Col xs="4">
                                    {this.props.optionResidenza != [] && this.props.optionResidenza != undefined &&
                                        <Form.select
                                            label={"Indirizzo " + tpyeIndirizzo + "*"}
                                            name={this.props.anagraficaIntestatario + "tipoindirizzo" + tpyeIndirizzo}
                                            value={this.props.formstate[this.props.anagraficaIntestatario + "tipoindirizzo" + tpyeIndirizzo]}
                                            error={this.props.formstate.errors[this.props.anagraficaIntestatario + "tipoindirizzo" + tpyeIndirizzo]}
                                            onChange={this.props.obchange}
                                            options={this.props.optionResidenza}
                                            placeholder="Seleziona"

                                        ></Form.select>
                                    }
                                </Col>
                                <Col xs="8">
                                    <Form.input
                                        label="&nbsp;"
                                        name={this.props.anagraficaIntestatario + "indirizzo" + tpyeIndirizzo}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "indirizzo" + tpyeIndirizzo]}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "indirizzo" + tpyeIndirizzo]}
                                        onChange={this.props.obchange}
                                    ></Form.input>

                                </Col>
                            </Row>
                        </Col>
                        <Col xs="4">
                            <Form.input
                                label="Numero*"
                                name={this.props.anagraficaIntestatario + "num" + tpyeIndirizzo}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "num" + tpyeIndirizzo]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "num" + tpyeIndirizzo]}
                                onChange={this.props.obchange}
                                placeholder="Seleziona"

                            ></Form.input>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs="4">
                            <Form.select
                                label="Provincia*"
                                name={this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo]}
                                onChange={this.props.obchange}
                                cbchange={(val) => {
                                    if (val === "") {
                                        this.props.formstate[this.props.anagraficaIntestatario + "comune" + tpyeIndirizzo] = "";
                                        this.props.formstate[this.props.anagraficaIntestatario + "cap" + tpyeIndirizzo] = ""
                                    }
                                }}
                                ajaxoptions="province"
                                placeholder="Seleziona"
                            >
                            </Form.select>
                        </Col>

                        {this.props.formstate[this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo] !== "" &&
                            <>
                                <Col sm="6">
                                    <Form.select
                                        label="Comune*"
                                        name={this.props.anagraficaIntestatario + "comune" + tpyeIndirizzo}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "comune" + tpyeIndirizzo]}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "comune" + tpyeIndirizzo]}
                                        onChange={this.props.obchange}
                                        placeholder="Seleziona..."
                                        ajaxoptions="comuni"
                                        ajaxfilter={this.props.formstate[this.props.anagraficaIntestatario + "provincia" + tpyeIndirizzo]}
                                    ></Form.select>
                                </Col>
                                <Col xs="2">
                                    <Form.input
                                        label="Cap cai*"
                                        name={this.props.anagraficaIntestatario + "cap" + tpyeIndirizzo}
                                        value={this.props.formstate[this.props.anagraficaIntestatario + "cap" + tpyeIndirizzo]}
                                        error={this.props.formstate.errors[this.props.anagraficaIntestatario + "cap" + tpyeIndirizzo]}
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

export default DatiIndirizzi