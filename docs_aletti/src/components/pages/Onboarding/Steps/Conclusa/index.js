import React, { Component } from 'react';
import Form from 'components/parts/Forms';

// FORM PRINCIPALE 
class StepForm extends Component {

    // Eventuali stati "locali" 
    state = {
        //"localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
        isOutput: "true"
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

        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>TERMINE ATTIVIT&Agrave; CON IL CLIENTE</h3>
                    <p className="feedback-end"><span className="big">La richiesta è stata salvata correttamente.</span><br />
A breve sarà inviata una mail di conferma sulla casella di posta personale e sulla
casella PEC del cliente.</p>

                </div>
            </div>
        )
    }
}

export default {
    form: StepForm
}