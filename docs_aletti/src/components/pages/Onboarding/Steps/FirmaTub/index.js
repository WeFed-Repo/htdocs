import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import FirmaDocs from "./firmaDocs";

// FORM PRINCIPALE 
class StepForm extends Component {

    state= {
        firmaDocsValid:false
    }

    componentDidMount() {
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
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
        if (formstate.field_numintestatari === "2") {
            nomeint = " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_nome"] + " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_cognome"];
        }

        // BLOCCO CON STEP FIRMA AUTOCONSISTENTE (gli stati sono locali)
        let firmaDocs = <FirmaDocs validFunction={()=>this.setState({firmaDocsValid:true})}></FirmaDocs>
      


        let firmatype = "FIRMA_TUB";


        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>FIRMA TUB</h3>
                    <FirmaInfoCert {...{ obformprops, firmaDocs, firmatype }} firmaDocsValid={this.state.firmaDocsValid}></FirmaInfoCert>
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