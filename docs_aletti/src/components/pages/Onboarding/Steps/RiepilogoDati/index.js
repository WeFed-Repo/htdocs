import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import Anagrafica from '../Anagrafica';
import salva from "./salva";

const FieldOutput = {
    "ANAGRAFICA" : Anagrafica
}
// FORM PRINCIPALE 
class StepForm extends Component {

    // Eventuali stati "locali" 
    state = {
        //"localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
        isOutput : "true",
        
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
                <h3>Riepilogo dati {(formstate.field_numintestatari==="2")? ((formstate.field_intestcorrente==="0")? "primo": "secondo") : ""} intestatario</h3>
                    <p>Ecco il riepilogo dei dati inseriti. Verifica che siano tutti corretti: se ci sono variazioni, puoi ancora modificarli.</p>
                    <section className="onboarding-block">
                            <FieldOutput.ANAGRAFICA.form {...obformprops} isOutput = { this.state.isOutput } btnConsole={this.btnConsole}></FieldOutput.ANAGRAFICA.form>
                    </section>
                    <p>Il sottoscritto, consapevole delle responsabilità penali derivanti da mendaci affermazioni in tal sede, dichiara di aver fornito nel presente modulo tutte le informazioni necessarie ed aggiornate di cui è a conoscenza, anche relativamente al titolare effettivo del rapporto / dell’operazione, garantisce che le stesse sono esatte e veritiere e si impegna a comunicarne ogni futura ed eventuale modifica.</p>
                </div>
            </div>
        )

    }

}

export default {
    form : StepForm,
    validazione: ()=>{return {}},
    salva: salva
}