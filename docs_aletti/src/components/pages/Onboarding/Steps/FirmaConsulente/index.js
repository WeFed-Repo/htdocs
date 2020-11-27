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
                    <h3> ATTESTAZIONE DI RICONOSCIMENTO {nomeint} DA PARTE DELL’INTERMEDIARIO </h3>
                   <p>
                        Il cliente, ai sensi D.Lgs. 21 novembre 2007, n. 231 e successive modifiche e integrazioni, attesta,
                        sotto la propria responsabilità, di aver effettuato l’adeguata verifica e
                        aver identificato il soggetto di cui alla presente mediante acquisizione di idoneo documento
                        identificativo e del codice fi scale/partita iva, e che la/e firma/e é/sono stata/e
                        personalmente apposta/e alla propria presenza dal/i citato/i soggetto/i, le cui generalità sono
                        state esattamente riportate.
                    </p>
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