import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import Anagrafica from '../Anagrafica';
import RaccoltaProdotti from '../RaccoltaProdotti';
import AdempimentiNormativi from '../AdempimentiNormativi';
import salva from "./salva";

const FieldOutput = {
    "ANAGRAFICA" : Anagrafica,
    "RACCOLTAPRODOTTI": RaccoltaProdotti,
    "ADEMPIMENTINORMATIVI": AdempimentiNormativi,
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
                <h3>Riepilogo dati</h3>
                    <p>Ecco il riepilogo dei dati inseriti. Verifica che siano tutti corretti: se ci sono variazioni, puoi ancora modificarli.</p>
                    <section className="onboarding-block">
                        <div className="wrapped-item">
                            <h4 className="wrapped-item-title">Dati anagrafici</h4>
                            <FieldOutput.ANAGRAFICA.form {...obformprops} isOutput = { this.state.isOutput } btnConsole={this.btnConsole}></FieldOutput.ANAGRAFICA.form>
                        </div>
                        <div className="wrapped-item">
                            <h4 className="wrapped-item-title">Prodotti</h4>
                            <FieldOutput.RACCOLTAPRODOTTI.form {...obformprops} isOutput = { this.state.isOutput } btnConsole={this.btnConsole}></FieldOutput.RACCOLTAPRODOTTI.form>
                        </div>
                        <div className="wrapped-item">
                            <h4 className="wrapped-item-title">Adempimenti normativi</h4>
                            <FieldOutput.ADEMPIMENTINORMATIVI.form {...obformprops} isOutput = { this.state.isOutput } btnConsole={this.btnConsole}></FieldOutput.ADEMPIMENTINORMATIVI.form>
                        </div>
                    </section>
                    {/*<p>Il sottoscritto, consapevole delle responsabilità penali derivanti da mendaci affermazioni in tal sede, dichiara di aver fornito nel presente modulo tutte le informazioni necessarie ed aggiornate di cui è a conoscenza, anche relativamente al titolare effettivo del rapporto / dell’operazione, garantisce che le stesse sono esatte e veritiere e si impegna a comunicarne ogni futura ed eventuale modifica.</p>*/}
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