import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import FirmaDocs from "../../common/FirmaDocs/firmaDocs";

// FORM PRINCIPALE 
class StepForm extends Component {

    state = {
        // Stati riservati al TUB
        loading: false,
        firmaDocsValid: false
    }

    componentDidMount() {
        
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: false            
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

        // MODULI
        let docobj = {
            "accordions": [
                {
                    "title": <>Documentazione MIFID</>,
                    "files": [
                        {
                            "name": "Questionario Mifid",
                            "id": "J400031_000319_OFS_MF",
                            "checkgroup": [
                                <>
                                   Il cliente sottoscrive il questionario MIFID
                                </>
                            ]
                        },
                        {
                            "name": "Lettera di classificazione",
                            "id": "J220023_000319_OFS_LC",
                            "checkgroup": [
                                <>
                                   Il cliente sottoscrive la lettera di classificazione
                                </>
                            ]
                        }
                    ]
                },
                {
                    "title": <>Documentazione contrattuale sui servizi investimento</>,
                    "files": [
                        {
                            "name": "Informativa preliminare alla clientela",
                            "id": "J700000_000319_OFS_IPC",
                            "checkgroup": [
                                <>
                                   Il cliente ha letto e sottoscritto integralmente il contenuto dell’informativa preliminare alla clientela
                                </>
                            ]
                        },
                        {
                            "name": "Condizioni economiche e contrattuali dei servizi di investimento",
                            "id": "J700000_000319_OFS_SI",
                            "checkgroup": [
                                <>
                                   Il cliente ha letto e approvato integralmente il contenuto delle condizioni economiche e contrattuali del contratto sui servizi di Investimento.
                                </>
                            ]
                        }
                    ]
                }
            ]

        };


        let firmaDocs = <FirmaDocs docobj={docobj} validFunction={() => this.setState({ firmaDocsValid: true })} invalidFunction={() => this.setState({ firmaDocsValid: false })}></FirmaDocs>

        let firmatype = "FIRMA_TUB";

        return (
            <div className="onboarding-wrapper">
                <div className={"onboarding-form " + (this.state.loading?"loading":"")}>
                    <h3>FIRMA TUF</h3>
                    <FirmaInfoCert {...{ obformprops, firmaDocs, firmatype }}
                        firmaDocsValid={this.state.firmaDocsValid}
                    >
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