import React, { Component } from 'react';
import { Button, Modal, ModalHeader, ModalBody } from "reactstrap";
import { NavLink } from "react-router-dom";
import {getNextState,getPrevState, getPrevInt} from "./common/gestioneStati";

export default class extends Component {

    state= {
        modalAnnullamento: false
    }

    render() {

        let formprops = this.props.formprops,
            formfields = formprops.obstate;

        // Declinazione per stati "particolari"
        let proseguiTxt = "Prosegui";
        if (formfields.field_stato==="ADEMPIMENTI_NORMATIVI") {
            proseguiTxt = "Conferma dati";
        }

        return (

            <div className="onboarding-pulsantiera">
                <div className="btn-console">
                    <div className="btn-console-left">
                        {formfields.field_stato !=="BOZZA" && 
                            <Button onClick={()=>formprops.setObState({field_stato:getPrevState(formfields), field_intestcorrente: getPrevInt(formfields)})}>Indietro</Button>
                        }
                        <span className="svi-btn" onClick= {()=>console.log(formfields)}>Mostra stato onboarding</span>
                    </div>
                    {getNextState(formfields)!=="CONCLUSA" &&
                        <div className="btn-console-right">
                        {formfields.field_anagraficablob_privacyletta === "true" && <>
                            <Modal isOpen={formfields.modalEsci}>
                                <ModalHeader>Esci</ModalHeader>
                                <ModalBody>
                                    <p>Stai abbandonando la procedura di apertura conto. Cosa vuoi fare?</p>
                                    <div className="btn-console">
                                        <div className="btn-console-left"><NavLink to="/"><Button>Esci senza salvare</Button></NavLink></div>
                                        <div className="btn-console-right"><Button color="primary" onClick={() => formprops.obsave(false)}>Salva ed esci</Button></div>
                                    </div>
                                </ModalBody>
                            </Modal>
                            <Button color="primary" onClick={() => formprops.setObState({ modalEsci: true })}>Esci</Button>
                        </>
                        }
                        {
                            // MIFID (STATO RACCOLTA PRODOTTI)
                            formfields.field_sessionfirmeblob_depositoincluso==="true" &&
                            formfields.field_stato === "BOZZA_VALIDATA" &&
                            formfields.field_sessionfirmeblob_idmifid === "" &&
                            !formfields.questMifid &&
                            <Button color="primary" onClick={()=>formprops.setObState({ questMifid: true })}>Questionario MIFID</Button>
                        }
                        {((formfields.field_sessionfirmeblob_depositoincluso === "" && 
                            formfields.field_stato === "BOZZA_VALIDATA") || (formfields.field_sessionfirmeblob_depositoincluso === "true" &&  formfields.field_sessionfirmeblob_idmifid !== "") || formfields.field_stato !== "BOZZA_VALIDATA") && 
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
                                                    });
                                                    formprops.obsave(true);
                                                }}>Sessione con 1° intestatario</Button>
                                                <Button color="primary" onClick={() => {formprops.setObState({
                                                        field_intestcorrente: "1",
                                                        field_ordineintestatari: "10",
                                                        modalProsegui: false
                                                    });
                                                    formprops.obsave(true);
                                                }}>Sessione con 2° intestatario</Button>
                                            </div>
                                        </div>
                                    </ModalBody>
                                </Modal>
                                {
                                    // Bottone per "uscite con annullamento da identificazione"
                                    (getNextState(formfields)==="IDENTIF_CLIENTE" && (
                                        formfields["field_sessionfirmeblob_intestatarifirme_"+formfields["field_intestcorrente"]+ "_identitaaccertata"] === "false"
                                    )) ? 
                                    <>
                                    <Modal isOpen={this.state.modalAnnullamento}>
                                        <ModalHeader>Conferma abbandono pratica</ModalHeader>
                                        <ModalBody>
                                            <p>Procedendo senza l'identificazione la pratica verrà annullata.<br />
                                            Proseguire?</p>
                                            <div className="btn-console">
                                                <div className="btn-console-left">
                                                    <Button color="secondary" onClick={() => {this.setState({
                                                           modalAnnullamento: false
                                                        });
                                                    }}>Annulla</Button>
                                                </div>
                                                <div className="btn-console-right">
                                                    <Button color="primary" onClick={() => {
                                                        formprops.setObState({
                                                            field_stato: "IDENTITA_NON_ACCERTATA"
                                                        });
                                                        this.setState({modalAnnullamento: false})
                                                        formprops.obsave(true);
                                                    }}>Conferma</Button>
                                                </div>
                                            </div>
                                        </ModalBody>
                                    </Modal>
                                    <Button color="primary" onClick={() => this.setState({modalAnnullamento:true})}>{proseguiTxt}</Button>

                                    </>
                                    :
                                    // Bottone standard
                                    <Button color="primary" onClick={() => formprops.obsave(true)}>{proseguiTxt}</Button>
                                }
                                
                            </>
                        }

                    </div>
                    }
                    {
                        getNextState(formfields)==="CONCLUSA" && 
                        <div className="btn-console-right">
                            <Button color="primary" onClick={()=>window.location.href="/gestionebozze"}>Fine</Button>
                        </div>
                    }
                    
                </div>
            </div>


        )

    }

}