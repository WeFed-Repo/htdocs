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
        isOutput: "true"
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
        nomeint = " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_nome"] + " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_cognome"];
        let defint = "intestatario"
        if (formstate.field_numintestatari === "2") {
            defint = ((formstate["field_intestcorrente"] === "0") ? "1°" : "2°") + "intestatario"
        }
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>Identificazione cliente</h3>
                    <p>Il sottoscritto, ai sensi D.Lgs. 21 novembre 2007, n. 231 e successive modifiche e integrazioni,
                    attesta, sotto la propria responsabilità, di aver effettuato l’adeguata verifica e aver identificato il
                    soggetto di cui alla presente mediante acquisizione di idoneo documento identificativo e del codice
                    fiscale/partita iva, e che la/e firma/e é/sono stata/e personalmente apposta/e alla propria presenza
                    dal/i citato/i soggetto/i, le cui generalità sono state esattamente riportate.<br />
                        <strong>
                            L'identificazione compiuta sarà propedeutica per il rilascio del certificato della FEQ One Shot e della
casella di posta certificata presso InfoCert.</strong></p>
                    <h3>Identificazione {defint} - <strong>{nomeint}</strong></h3>
                    <Row>
                        <Col sm="4">
                            <Form.radiogroup
                                label="Identità accertata"
                                name={"field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente +"_identitaaccertata"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente +"_identitaaccertata"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + formstate.field_intestcorrente +"_identitaaccertata"]}
                                onChange={this.props.obchange}
                                options={[
                                    { "value": "true", "text": "Sì" },
                                    { "value": "false", "text": "No" }
                                ]}
                            >
                            </Form.radiogroup>
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