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
        if (formstate.field_numintestatari==="2") {
            nomeint= " " + formstate["field_anagraficablob_intestatari_"+ formstate["field_intestcorrente"] +"_nome"] +" " + formstate["field_anagraficablob_intestatari_"+ formstate["field_intestcorrente"] +"_cognome"] ;
        }
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>Certificazione credenziali{nomeint}</h3>
                    Verifica numero di cellulare
                    Output: numero di cellulare.
                    Test OTP

                    Verifica indirizzo E-mail
                    Output: Email
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