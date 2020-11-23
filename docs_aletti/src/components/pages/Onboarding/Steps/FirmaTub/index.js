import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import FirmaDocs from "../../common/FirmaDocs/firmaDocs";
import getData from "functions/getData";

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
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: true
        })
    }

    // Invio materiale precontrattuale
    inviaPrecontrattuale() {
        // Servizio di invio precontrattuale
        this.setState({
            abilitaPrecontrattuale: false
        });
        getData({
            url: {"prod":"","svil":""},
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

        // BLOCCHI CON STEP FIRMA AUTOCONSISTENTE (gli stati sono locali)
        // PRECONTRATTUALE
        let docprecont = {
            "accordions": [
                {
                    "title": <>Documentazione informativa <strong>Privacy</strong></>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    }]
                },
                {
                    "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    },
                    {
                        "name": "Informativa Privacy",
                        "url": "####"
                    }]
                }]
            ,
            "checkgroup": [
                <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</>,
                <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
            ]

        }

        // MODULI
        let docobj = {
            "accordions": [
                {
                    "title": <>Documentazione informativa <strong>Privacy</strong></>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url": "####",
                        "checkgroup": [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</>,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
                    }]
                },
                {
                    "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url": "####",
                        "checkgroup": [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</>,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
                    }]
                }]
            ,
            "checkgroup": [
                <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</>,
                <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
            ]

        }

        // Caso "doppio step"
        let firmaDocs = <>
            {!this.state.sendPrecontrattuale && <FirmaDocs docobj={docprecont} validFunction={() => this.setState({ abilitaPrecontrattuale: true })} invalidFunction={() => this.setState({ abilitaPrecontrattuale: false })}></FirmaDocs>}
            {this.state.sendPrecontrattuale && <FirmaDocs docobj={docobj} validFunction={() => this.setState({ firmaDocsValid: true })} invalidFunction={() => this.setState({ firmaDocsValid: false })}></FirmaDocs>}
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