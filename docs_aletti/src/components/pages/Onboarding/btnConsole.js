import React, { Component } from 'react';
import { Button, Modal, ModalHeader, ModalBody } from "reactstrap";
import { NavLink } from "react-router-dom";
import getData from "functions/getData";
import { getNextState, getPrevState, getPrevInt } from "./common/gestioneStati";
/* 

ANNULLA -> SI (RIEPILOGO DATI) ->BOX : 
- NON PIU' INTERESSATO (CHIAMATA CON ESITO ANNULLA_NON_INTERESSATO e OUT su gestione pratiche)
- DATI ERRATI -> DOMANDA, VUOI CONTINUARE CON GLI STESSI DATI?
-    SI -> ANNULLA DATI ERRATI MA REDIRECT SU ESITO CHIAMATA
-    NO -> ANNULLA_DATI_ERRATI MA GESTIONE PRATICHE

*/
export default class extends Component {

    state = {
        modalAnnullamento: false,

        annullamentoRiepilogo: false,
        annullamentoRiepilogoStep: 0,
        annullamentoRiepilogoLoading: false,

        modalBack: false
    }

    // Funzione per annullamento
    annullamentoRiepilogoFunction = (param, nuovapratica) => {
        this.setState({ annullamentoRiepilogoLoading: true });

        // Determina i parametri a seconda della richiesta pervenuta
        let urlRequest = "annullaNonInteressato";
        if (param === "ANNULLA_DATI_ERRATI") urlRequest = "annullaDatiErrati";
        if (nuovapratica && nuovapratica === true) urlRequest += "Duplica";

        let url = {
            "svil": "/json_data/onboarding/annullamentoBozza.json",
            "prod": "/promotori/onboarding/rest/bozze/bozze/" + this.props.formprops.obstate.field_id + "/" + urlRequest
        }

        getData({
            url: url,
            method: "GET",
            success: (data) => {
                //redirect finale a valle della chiamata (se nuova pratica è attivo posiziona sulla nuova pratica, altrimenti rimanda alle varie bozze)
                let redirectLocation = "/gestionebozze";
                if (nuovapratica && nuovapratica === true) {
                    let pratica = data && data.results;
                    redirectLocation = "/onboarding/" + pratica;
                }
                window.location.href = redirectLocation;
            },
            error: () => {
                alert("Si e' verificato un errore bloccante.")
            }
        })

    }


    render() {

        let formprops = this.props.formprops,
            formfields = formprops.obstate;

        // Declinazione per stati "particolari"
        let proseguiTxt = "Prosegui";
        if (formfields.field_stato === "ADEMPIMENTI_NORMATIVI") {
            proseguiTxt = "Conferma dati";
        }

        return (

            <div className="onboarding-pulsantiera">
                <div className="btn-console">
                    <div className="btn-console-left">
                        {formfields.field_stato !== "BOZZA" &&
                            <>
                                <Modal isOpen={this.state.modalBack}>
                                    <ModalHeader>Torna indietro</ModalHeader>
                                    <ModalBody>
                                        <p>Se torni indietro ora, perderai le tue modifiche.</p>
                                        <div className="btn-console">
                                            <div className="btn-console-left"><Button onClick={() => this.setState({ modalBack: false })}>Annulla</Button></div>
                                            <div className="btn-console-right"><Button color="primary" onClick={() => { formprops.setObState({ field_stato: getPrevState(formfields), field_intestcorrente: getPrevInt(formfields) }); this.setState({ modalBack: false }) }}>Torna indietro</Button></div>
                                        </div>
                                    </ModalBody>
                                </Modal>
                                <Button onClick={() => this.setState({ modalBack: true })}>Indietro</Button>
                            </>
                        }
                        {window.localStorage.debugstate && window.localStorage.debugstate === "attivo" && <span className="svi-btn" onClick={() => console.log(formfields)}>Mostra stato onboarding</span>}
                    </div>
                    {formfields.field_stato !== "CONCLUSA" && formfields.field_stato !== "INSERITA_DA_INVIARE" && getNextState(formfields) !== "INSERITA_DA_INVIARE" &&
                        <div className="btn-console-right">
                            {formfields.field_anagraficablob_privacyletta === "true" && <>
                                <Modal isOpen={formfields.modalEsci}>
                                    <ModalHeader>Esci</ModalHeader>
                                    <ModalBody>
                                        <p>Stai <strong>abbandonando</strong> la procedura di apertura conto.<br /> {
                                            /* Frase per stati non salvabili */
                                            !(formfields.field_stato === "BOZZA" || formfields.field_stato === "BOZZA_VALIDATA" || formfields.field_stato === "ADEMPIMENTI_NORMATIVI" || formfields.field_stato === "ATTESA_FIRMA_CONSULENTE") &&
                                            <>
                                                Il mancato completamento riporterà la pratica all'ultimo stato salvato.
                                            </>
                                        } Cosa vuoi fare?</p>
                                        <div className="btn-console">
                                            <div className="btn-console-left"><Button color="secondary" onClick={() => { this.props.formprops.setObState({ modalEsci: false }) }}>Annulla</Button></div>
                                            <div className="btn-console-right">
                                                <NavLink to="/"><Button color="primary">Esci <strong>senza salvare</strong></Button></NavLink>
                                                {
                                                    (formfields.field_stato === "BOZZA" || formfields.field_stato === "BOZZA_VALIDATA" || formfields.field_stato === "ADEMPIMENTI_NORMATIVI" || formfields.field_stato === "ATTESA_FIRMA_CONSULENTE") &&
                                                    // Solo negli stati dove e' possibile
                                                    <Button color="primary" onClick={() => formprops.obsave(false)}><strong>Salva</strong> ed esci</Button>
                                                }

                                            </div>
                                        </div>
                                    </ModalBody>
                                </Modal>
                                <Button color="primary" onClick={() => formprops.setObState({ modalEsci: true })}>Esci</Button>
                            </>
                            }
                            {
                                // Blocco di annullamento pratica (stato Raccolta Prodotti)
                                formfields.field_stato === "ADEMPIMENTI_NORMATIVI" &&
                                <>
                                    <Modal isOpen={this.state.annullamentoRiepilogo}>
                                        <ModalHeader>Annullamento pratica</ModalHeader>
                                        <div className={(this.state.annullamentoRiepilogoLoading === true ? "loading" : "")}>
                                            {this.state.annullamentoRiepilogoStep === 0 &&
                                                // STEP 1 
                                                <ModalBody>
                                                    <p>Vuoi <strong>annullare</strong> la pratica?</p>
                                                    <div className="btn-console">
                                                        <div className="btn-console-left">
                                                            <Button color="secondary" onClick={() => this.setState({ annullamentoRiepilogo: false })} >No</Button>
                                                        </div>
                                                        <div className="btn-console-right">
                                                            <Button color="primary" onClick={() => this.setState({ annullamentoRiepilogoStep: 1 })}>Sì</Button>
                                                        </div>
                                                    </div>
                                                </ModalBody>
                                            }
                                            {this.state.annullamentoRiepilogoStep === 1 &&
                                                // STEP 1 
                                                <ModalBody>
                                                    <p>Indicare il motivo dell'annullamento</p>
                                                    <div className="btn-console">
                                                        <div className="btn-console-left">
                                                            <Button color="primary" onClick={() => this.annullamentoRiepilogoFunction("ANNULLA_NON_INTERESSATO")} >Non più interessato</Button>
                                                        </div>
                                                        <div className="btn-console-right">
                                                            <Button color="primary" onClick={() => this.setState({ annullamentoRiepilogoStep: 2 })}>Dati errati</Button>
                                                        </div>
                                                    </div>
                                                </ModalBody>
                                            }
                                            {this.state.annullamentoRiepilogoStep === 2 &&
                                                // STEP 2 
                                                <ModalBody>
                                                    <p>Vuoi continuare con gli stessi dati?</p>
                                                    <div className="btn-console">
                                                        <div className="btn-console-left">
                                                            <Button color="primary" onClick={() => this.annullamentoRiepilogoFunction("ANNULLA_DATI_ERRATI")} >No</Button>
                                                        </div>
                                                        <div className="btn-console-right">
                                                            <Button color="primary" onClick={() => this.annullamentoRiepilogoFunction("ANNULLA_DATI_ERRATI", true)}>Sì</Button>
                                                        </div>
                                                    </div>
                                                </ModalBody>
                                            }
                                        </div>
                                    </Modal>
                                    <Button color="primary" onClick={() => this.setState({ annullamentoRiepilogo: true, annullamentoRiepilogoStep: 0 })}>Annulla</Button>
                                </>

                            }
                            {
                                // MIFID (STATO RACCOLTA PRODOTTI)
                                formfields.field_sessionfirmeblob_depositoincluso === "true" &&
                                formfields.field_stato === "BOZZA_VALIDATA" &&
                                formfields.field_sessionfirmeblob_idmifid === "" &&
                                !formfields.questMifid &&
                                <Button color="primary" onClick={() => formprops.setObState({ questMifid: true })}>Questionario MIFID</Button>
                            }
                            {((formfields.field_sessionfirmeblob_depositoincluso === "" &&
                                formfields.field_stato === "BOZZA_VALIDATA") || (formfields.field_sessionfirmeblob_depositoincluso === "true" && formfields.field_sessionfirmeblob_idmifid !== "") || formfields.field_stato !== "BOZZA_VALIDATA") &&
                                <>
                                    <Modal isOpen={formfields.modalProsegui}>
                                        <ModalHeader>Scegli intestatario</ModalHeader>
                                        <ModalBody>
                                            <p>Da quale intestatario vuoi iniziare?</p>
                                            <div className="btn-console">
                                                <div className="btn-console-right">
                                                    <Button color="primary" onClick={() => {
                                                        formprops.setObState({
                                                            field_intestcorrente: "0",
                                                            field_ordineintestatari: "01",
                                                            modalProsegui: false
                                                        }, () => formprops.obsave(true));

                                                    }}>Sessione con 1° intestatario</Button>
                                                    <Button color="primary" onClick={() => {
                                                        formprops.setObState({
                                                            field_intestcorrente: "1",
                                                            field_ordineintestatari: "10",
                                                            modalProsegui: false
                                                        }, () => formprops.obsave(true));
                                                    }}>Sessione con 2° intestatario</Button>
                                                </div>
                                            </div>
                                        </ModalBody>
                                    </Modal>
                                    {
                                        // Bottone per "uscite con annullamento da identificazione"
                                        (getNextState(formfields) === "IDENTIF_CLIENTE" && (
                                            formfields["field_sessionfirmeblob_intestatarifirme_" + formfields["field_intestcorrente"] + "_identitaaccertata"] === "false"
                                        )) ?
                                            <>
                                                <Modal isOpen={this.state.modalAnnullamento}>
                                                    <ModalHeader>Conferma abbandono pratica</ModalHeader>
                                                    <ModalBody>
                                                        <p>Procedendo senza l'identificazione la pratica verrà annullata.<br />
                                                        Proseguire?</p>
                                                        <div className="btn-console">
                                                            <div className="btn-console-left">
                                                                <Button color="secondary" onClick={() => {
                                                                    this.setState({
                                                                        modalAnnullamento: false
                                                                    });
                                                                }}>Annulla</Button>
                                                            </div>
                                                            <div className="btn-console-right">
                                                                <Button color="primary" onClick={() => {
                                                                    formprops.setObState({
                                                                        field_stato: "IDENTITA_NON_ACCERTATA"
                                                                    });
                                                                    this.setState({ modalAnnullamento: false })
                                                                    formprops.obsave(true);
                                                                }}>Conferma</Button>
                                                            </div>
                                                        </div>
                                                    </ModalBody>
                                                </Modal>
                                                <Button color="primary" onClick={() => this.setState({ modalAnnullamento: true })}>{proseguiTxt}</Button>

                                            </>
                                            :
                                            // Bottone standard
                                            <Button color="primary" disabled={!formprops.obstate.proseguiEnabled} onClick={() => formprops.obsave(true)}>{proseguiTxt}</Button>
                                    }

                                </>
                            }

                        </div>
                    }
                    {
                        (formfields.field_stato === "INSERITA_DA_INVIARE" || formfields.field_stato === "CONCLUSA" || getNextState(formfields) === "INSERITA_DA_INVIARE") &&
                        <div className="btn-console-right">
                            <Button color="primary" onClick={() => window.location.href = "/gestionebozze"}>Esci</Button>
                            <Button color="primary" onClick={() => window.location.href = "/comportamento/" + formfields.field_id}>Rilevazione comportamento</Button>
                        </div>
                    }

                </div>
            </div>
        )
    }
}