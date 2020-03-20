import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import validazione from "./validazione";
import salva from "./salva";

// FORM PRINCIPALE 
class StepForm extends Component {

    /* Eventuali stati "locali" 
    state = {
        "localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
    }
    */

    render() {

        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate;
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini;

        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                <h3>Riepilogo dati {(formstate.field_numintestatari==="2")? ((formstate.field_intestcorrente==="0")? "primo": "secondo") : ""} intestatario</h3>
                    <section className="onboarding-block">
                        
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