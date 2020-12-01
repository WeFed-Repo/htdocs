import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import FirmaDocs from "../../common/FirmaDocs/firmaDocs";
import getData from "functions/getData";

import docobj from "./docobj.js"
import docprecont from "./docprecont.js"

// FORM PRINCIPALE 
class StepForm extends Component {

    state = {
        // Stati riservati al TUB
        sendPrecontrattuale: false,
        abilitaPrecontrattuale: false,
        precontSent: false,
        loading: false,
        firmaDocsValid: false
    }

    componentDidMount() {
        
        let fstate = this.props.obstate;
        this.setState({
            // Determina se ha gia' inviato la precontrattuale
            sendPrecontrattuale:(fstate.field_numintestatari === "2" && (fstate.field_intestcorrente.toString()!==fstate.field_ordineintestatari.split("")[0])) 
        });
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: false,
            
        })
    }

    // Invio materiale precontrattuale
    inviaPrecontrattuale() {
        // Servizio di invio precontrattuale
        this.setState({
            abilitaPrecontrattuale: false
        });
        getData({
            url: {"prod":"/promotori/onboarding/rest/documentale/sendDocPrecontrattuale","svil":"/json_data/simpleEsitoOk.json"},
            success: (data)=>{
                this.setState({
                    sendPrecontrattuale: true
                });
            },
            error: ()=>{
                alert("Si sono verificati errori durante l'invio della precontrattuale");
                this.setState({
                    abilitaPrecontrattuale: true
                });
            }
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

        let firmaDocs = <>
            {!this.state.sendPrecontrattuale && <FirmaDocs docobj={docprecont(formstate["field_sessionfirmeblob_depositoincluso"])} validFunction={() => this.setState({ abilitaPrecontrattuale: true })} invalidFunction={() => this.setState({ abilitaPrecontrattuale: false })}></FirmaDocs>}
            {this.state.sendPrecontrattuale && <FirmaDocs docobj={docobj(formstate["field_sessionfirmeblob_depositoincluso"])} validFunction={() => this.setState({ firmaDocsValid: true })} invalidFunction={() => this.setState({ firmaDocsValid: false })}></FirmaDocs>}
        </>

        let firmatype = "FIRMA_TUB";

        return (
            <div className="onboarding-wrapper">
                <div className={"onboarding-form " + (this.state.loading?"loading":"")}>
                    <h3>FIRMA TUB</h3>
                    <FirmaInfoCert {...{ obformprops, firmaDocs, firmatype }}
                        firmaDocsValid={this.state.firmaDocsValid}
                        functionPrecontrattuale={() => this.inviaPrecontrattuale()}
                        precontEnabled={this.state.abilitaPrecontrattuale}
                        precontSent={this.state.sendPrecontrattuale}>
                    </FirmaInfoCert>
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