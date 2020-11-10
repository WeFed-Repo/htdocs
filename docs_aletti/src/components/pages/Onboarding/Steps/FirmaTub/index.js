import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import FirmaDocs from "../../common/FirmaDocs/firmaDocs";

// FORM PRINCIPALE 
class StepForm extends Component {

    state= {
        // Stati riservati al TUB
        sendPrecontrattuale: false,
        abilitaPrecontrattuale: false,
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

        // BLOCCHI CON STEP FIRMA AUTOCONSISTENTE (gli stati sono locali)
        let docobj1 = {
            "accordions": [
                {
                    "title": <>Documentazione informativa <strong>Privacy</strong></>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                        "checkgroup" : [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
                    }]
                },
                {
                    "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                        "checkgroup" : [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
                    }]
                }]
            ,
            "checkgroup" : [
                    <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                    <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                ]
            
            }

        // Caso "doppio step"
        let firmaDocs = <>
                {!this.state.sendPrecontrattuale && <FirmaDocs docobj={docobj1} validFunction={()=>this.setState({abilitaPrecontrattuale:true})} invalidFunction={()=>this.setState({abilitaPrecontrattuale:false})}></FirmaDocs>}
                {this.state.sendPrecontrattuale && <FirmaDocs docobj={docobj1} validFunction={()=>this.setState({firmaDocsValid:true})} invalidFunction={()=>this.setState({firmaDocsValid:false})}></FirmaDocs>}
            </>

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