import React, { Component } from 'react';
import validazione from "./validazione";
import salva from "./salva";
import 'moment/locale/it';
import InformativaDatiPersonali from './InformativaDatiPersonali';
import RichiestaAperturaConto from './RichiestaAperturaConto';
import ConsensoPrivacy from './ConsensoPrivacy';
import DatiPersonali from './DatiPersonali'

// FORM PRINCIPALE 
class StepForm extends Component {
    state = {
        "localfield_privacyopen": (this.props.obstate.field_anagraficablob_privacyletta === "true") ? true : false
    }

    componentDidMount() {
        this.props.setObState({
            proseguiEnabled: true,
            field_ordineintestatari: (!this.props.isOutput) ? "" : this.props.obstate.field_ordineintestatari
        })
    }


    render() {
        
        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate,
            // Cattura i domini tramite le props
            obdomini = this.props.obdomini,
            setObState = this.props.setObState,
            //controllo accordion disabilitati per mancata accettazione privacy
            isPrivacyChecked = this.props.obstate.field_anagraficablob_privacyletta === "true" ? true : false;

        //controllo esistenza secondo intestatario
        const isSecondoIntestatario = formstate.field_numintestatari !== "1" ? true : false;


        // Rendering del form semplificato (considerare "formstate" come main container per rivedere eventuali condizioni per gli elementi e per gli errori)
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    {/*{!this.props.isOutput && <RichiestaAperturaConto formstate={formstate} isPrivacyChecked={isPrivacyChecked} obchange={this.props.obchange}></RichiestaAperturaConto> } */}
                    {!this.props.isOutput && <InformativaDatiPersonali formstate={formstate} obchange={this.props.obchange}></InformativaDatiPersonali> }
                    <ConsensoPrivacy isOutput = { this.props.isOutput } indexInt="0" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}></ConsensoPrivacy>
                    {isSecondoIntestatario && <ConsensoPrivacy isOutput = { this.props.isOutput } indexInt="1" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}></ConsensoPrivacy>}
                    {!this.props.isOutput && !this.props.isPrivacyUnChecked && <h2>Inserisci i dati personali </h2> }
                    {!this.props.isOutput && !this.props.isPrivacyUnChecked && <h5>Inserisci i tuoi dati e quelli di tutti i cointestatari</h5> }
                    <DatiPersonali isOutput = { this.props.isOutput } indexInt="0" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}></DatiPersonali>
                    {isSecondoIntestatario && <DatiPersonali isOutput = { this.props.isOutput } indexInt="1" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}></DatiPersonali>}
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