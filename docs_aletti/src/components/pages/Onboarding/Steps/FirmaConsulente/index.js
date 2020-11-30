import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import salva from "./salva";
import validazione from "./validazione";
import getData from "functions/getData";

// FORM PRINCIPALE 
class StepForm extends Component {

    constructor(props) {
        super(props);
        this.state = {
            //"localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
            isOutput: "true",
            loading: false
        };
        this.newOtp = this.newOtp.bind(this);

    }

    // Eventuali stati "locali" 


    componentDidMount() {

        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: false,
            ["field_sessionfirmeblob_intestatarifirme_" + this.props.obstate.field_intestcorrente + "_otpcons"]: ""
        });

    }

    newOtp() {
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: false,
            ["field_sessionfirmeblob_intestatarifirme_" + this.props.obstate.field_intestcorrente + "_otpcons"]: ""
        })
        this.setState({ loading: true });
        getData({
            url: { "svil": "/json_data/simpleEsitoOk.json", "prod": "" /* OTP a consulente mancante :-( */ },
            success: () => {
                this.setState({
                    loading: false
                });
            }
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
        if (formstate.field_numintestatari === "2") {
            nomeint = " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_nome"] + " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_cognome"];
        }
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3> ATTESTAZIONE DI RICONOSCIMENTO {nomeint} DA PARTE DELL’INTERMEDIARIO </h3>
                    <p>
                        Il cliente, ai sensi D.Lgs. 21 novembre 2007, n. 231 e successive modifiche e integrazioni, attesta,
                        sotto la propria responsabilità, di aver effettuato l’adeguata verifica e
                        aver identificato il soggetto di cui alla presente mediante acquisizione di idoneo documento
                        identificativo e del codice fi scale/partita iva, e che la/e firma/e é/sono stata/e
                        personalmente apposta/e alla propria presenza dal/i citato/i soggetto/i, le cui generalità sono
                        state esattamente riportate.
                    </p>
                    <Row>
                        <Col sm="3">
                            <Form.input
                                label="Inserisci il PIN di firma"
                                name={"field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_pincons"}
                                maxlength="6"
                                mask="numero"
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_pincons"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_pincons"]}
                                cbchange={(val) => { this.props.setObState({ proseguiEnabled: (val.length >= 6 && formstate["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"].length >= 6) }) }}
                                onChange={this.props.obchange}
                            >
                            </Form.input>
                        </Col>
                        <Col sm="5">
                            <div className={(this.state.loading) ? "loading" : ""}>
                                <Row>
                                    <Col xs="8">
                                        <div className={"form-group" + ((formstate.errors["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"] && formstate.errors["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"].length > 0) ? "error" : "")}>
                                            <label className="form-control-label">Inserisci codice OTP</label>
                                            <Form.input
                                                className="no-label"
                                                name={"field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"}
                                                maxlength="6"
                                                mask="numero"
                                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"]}
                                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_otpcons"]}
                                                cbchange={(val) => { this.props.setObState({ proseguiEnabled: (val.length >= 6 && formstate["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente + "_pincons"].length >= 6) }) }}
                                                onChange={this.props.obchange}
                                            >
                                            </Form.input>
                                        </div>
                                    </Col>
                                    <Col xs="4">
                                        <button onClick={() => this.newOtp()} className="otp-new-code">Richiedi nuovo codice OTP</button>
                                    </Col>
                                </Row>
                            </div>
                        </Col>

                    </Row>
                </div>
            </div>
        )

    }

}

export default {
    form: StepForm,
    validazione: validazione,
    salva: salva
}