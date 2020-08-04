import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import salva from "./salva";
import validazione from "./validazione";

// FORM PRINCIPALE 
class StepForm extends Component {

    // Eventuali stati "locali" 
    state = {
        //"localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
        isOutput : "true"        
    }
    
    componentDidMount() {
        this.props.setObState({
            proseguiEnabled: true
        })
    }


    render() {
        
        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate;
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini;
        let obformprops = {
            obstate: this.props.obstate,
            obchange: (e) => Form.change(this, e),
            obdomini: this.props.obdomini,
            setObState: this.props.setObState,
        }

        // Eventuale nome intestatario 
        let nomeint;
        nomeint= " " + formstate["field_anagraficablob_intestatari_"+ formstate["field_intestcorrente"] +"_nome"] +" " + formstate["field_anagraficablob_intestatari_"+ formstate["field_intestcorrente"] +"_cognome"] ;
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>Certificazione credenziali{nomeint}</h3>

                    <section>
                        <h4>Verifica numero di cellulare</h4>
                        <Row>
                        <Col sm="1">
                                <Form.input
                                    label="Prefisso"
                                    output={true}
                                    value={formstate["field_anagraficablob_intestatari_"+ formstate.field_intestcorrente +"_prefisso"]}
                                >
                                </Form.input>                                               
                            </Col>
                            <Col sm="3">
                                <Form.input
                                    label="Numero di cellulare"
                                    output={true}
                                    value={formstate["field_anagraficablob_intestatari_"+ formstate.field_intestcorrente +"_telefono"]}
                                >
                                </Form.input>                                               
                            </Col>
                            <Col sm="4">
                                <Form.otp
                                        label="Codice di controllo"
                                        name={"field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_cellcertif"}
                                        value={formstate["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_cellcertif"]}
                                        error={formstate.errors["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_cellcertif"]}
                                        onChange={this.props.obchange}
                                        error={formstate.errors["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_cellcertif"]}
                                        otpType="sms"
                                        idIntestatario={formstate.field_intestcorrente}
                                        btnText="Richiedi il codice di controllo"
                                    >
                                    ></Form.otp>
                            </Col>
                        </Row>
                    </section>

                    <section>
                        <h4>Verifica indirizzo email</h4>
                        <Row>
                            <Col sm="4">
                                <Form.input
                                    label="Indirizzo email"
                                    output={true}
                                    value={formstate["field_anagraficablob_intestatari_"+ formstate.field_intestcorrente +"_email"]}
                                > </Form.input>
                            </Col>
                            <Col sm="4">
                            <Form.otp
                                        label="Codice di controllo"
                                        name={"field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_emailcertif"}
                                        value={formstate["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_emailcertif"]}
                                        error={formstate.errors["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_emailcertif"]}
                                        onChange={this.props.obchange}
                                        error={formstate.errors["field_sessionfirmeblob_intestatarifirme_"+ formstate.field_intestcorrente +"_emailcertif"]}
                                        otpType="email"
                                        idIntestatario={formstate.field_intestcorrente}
                                        btnText="Richiedi il codice di controllo"
                                    >
                                    ></Form.otp>
                            </Col>
                        </Row>
                    </section>
                </div>
            </div>
        )

    }

}

export default {
    form : StepForm,
    validazione: validazione,
    salva: salva
}