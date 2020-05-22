import React, { Component } from 'react';
import getData from "functions/getData";
import Stepper from "./Stepper";
import Notify from 'functions/Notify'

import BtnConsole from "./btnConsole"
import Form from 'components/parts/Forms';

import "./style.scss";

// Strumenti per semplificare lo sviluppo
import ConsoleSviluppo from "./consoleSviluppo"

// Gestione degli stati e dei dati
import {getNextState,getNextInt} from "./common/gestioneStati";
import { defaultFields, fieldsFromJson } from "./common/gestioneDati";

// Importazione di tutti gli steps
import Anagrafica from "./Steps/Anagrafica/";
import RaccoltaProdotti from "./Steps/RaccoltaProdotti/";
import AdempimentiNormativi from "./Steps/AdempimentiNormativi/";
import RiepilogoDati from "./Steps/RiepilogoDati";
import CertificazioneCredenziali from "./Steps/CertificazioneCredenziali";
import IdentificazioneCliente from "./Steps/IdentificazioneCliente";
import FirmaPrecontrattuale from "./Steps/FirmaPrecontrattuale";
import FirmaVessatorie from "./Steps/FirmaVessatorie";
import FirmaInvestimento from "./Steps/FirmaInvestimento";
import FirmaVessatorieInvestimento from "./Steps/FirmaVessatorieInvestimento";
import FirmaConsulente from "./Steps/FirmaConsulente";
import Conclusa from "./Steps/Conclusa";

// Assegnazione di tutti gli step ad un unico oggetto Form
const Step = {
    "BOZZA" : Anagrafica,
    "RACCOLTA_PRODOTTI": RaccoltaProdotti,
    "ADEMPIMENTI_NORMATIVI": AdempimentiNormativi,
    "RIEPILOGO_DATI" : RiepilogoDati,
    "CERTIF_CREDENZIALI": CertificazioneCredenziali,

    "IDENTIF_CLIENTE": IdentificazioneCliente,
    "FIRMA_PRECONTRATTUALE": FirmaPrecontrattuale,
    "FIRMA_VESSATORIE": FirmaVessatorie,
    "FIRMA_INVESTIMENTO": FirmaInvestimento,
    "FIRMA_VESSATORIE_INVESTIMENTO": FirmaVessatorieInvestimento,
    "FIRMA_CONSULENTE": FirmaConsulente,

    "CONCLUSA": Conclusa

}


let getPureStep = (form) => {

    let PureStep = (form.field_stato==="BOZZA")? "BOZZA" : getNextState(form);
    PureStep = PureStep.replace("INT0_","").replace("INT1_","");
    return PureStep;

}

// Variabili "generali"
const urlDomini = { "svil": "/json_data/onboarding/listaDomini.json", "prod": "/promotori/onboarding/rest/domini/lista" };

export default class extends Component {

    // Recupera qui l'id della pratica ed i dati che va a modificare nel percorso
    constructor(props) {
        super(props);
        this.state = {

            // Mette il form in caricamento
            isLoading: true,
        

            // Modali associate alla pulsantiera
            modalEsci: false,
            modalProsegui: false,

            // Moduli particolari, alternativi ai vari form
            questMifid: false,

            // Stati per il controllo della validazione in sviluppo
            svi_obbligatori: true,
            svi_be: true,

            // Campi veri e propri del form
            field_id: (this.props.match.params.id) ? this.props.match.params.id : "",

            // Errori
            errors: {},

            // Domini
            domini: {}
        }
        this.salvaPratica = this.salvaPratica.bind(this);
        this.setObState = this.setObState.bind(this);
    }

    setObState(state){
        this.setState(state);
    }


    // Carica i dati di una pratica (totali)
    getDatiPratica() {

        // Blocco totale dell'interfaccia
        this.setState({ isLoading: true });

        // Determina l'url per recuperare la bozza
        let urlBozza = { "svil": "/json_data/onboarding/getBozzaById_avanzamento.json", "prod": "/promotori/onboarding/rest/bozze/" + this.state.field_id + "/getBozza" };

        let tthis = this;
        getData({
            url: urlBozza,
            method: "GET",
            success: (data) => {

                // Prepara l'oggetto dal nodo "results 0"
                var bdata = fieldsFromJson(data && data.results);

                // Assegna valori di default ai campi che sono stati "appesi" manualmente (es: flag dei documenti) e,magari, dipendono da altri campi
                bdata["field_anagraficablob_fileinformativaaperto"] = (bdata["field_anagraficablob_privacyletta"]) === "true";

                // Calcolo del totale delle residenze FATCA
                bdata["field_anagraficablob_intestatari_0_listresidenzefiscale_length"] = Object.keys(data.results.anagraficaBlob.intestatari["0"]["listResidenzeFiscale"]).length;
                bdata["field_anagraficablob_intestatari_1_listresidenzefiscale_length"] = Object.keys(data.results.anagraficaBlob.intestatari["1"]["listResidenzeFiscale"]).length;

                tthis.setState(bdata);
                tthis.setState({ isLoading: false });
                console.log(this.state);
            }
        });
    }


    // Salvataggio
    salvaPratica(flagvalidazione) {
        if (flagvalidazione) {

            let errori = {};
                

            // Check campi obbligatori (la funzione viene raccolta parametricamente)
            if (this.state.svi_obbligatori) { 
                errori = Object.assign(errori, Step[getPureStep(this.state)].validazione(this.state))
            }

            // Fine dei controlli lato front-end: mostra eventuali errori
            this.setState({
                errors: errori
            })

            // Notifica gli errori da FE
            if (Object.keys(errori).length > 0) {
                Notify.error("La pratica presenta degli errori. Occorre correggerli per proseguire.");
            }
            else {
                // Se non ci sono errori, chiama il BE per appenderne eventuali altri
                getData({
                    url: Step[getPureStep(this.state)].salva.url,
                    data: Step[getPureStep(this.state)].salva.data(this.state,true),
                    success: (data) => {
                        if (this.state.svi_be && data && data.esito && data.esito.type === "E" && data.esito.code === "400") {
                            // Raccoglie gli errori nel form
                            Notify.error("La pratica inviata presenta degli errori. Occorre correggerli per proseguire.");
                            this.setState({
                                errors: data.results
                            })
                        }
                        else {
                            // Salvataggio terminato ed andato a buon fine
                            // Notifica il salvataggio e richiede il nuovo stato della pratica per proseguire
                            Notify.success(<p>Pratica <strong>n.{this.state.field_id}</strong> salvata con successo.</p>);

                            // Promuove il nuovo stato bozza effettivo (bozza validata)
                            // In caso di 2 intestatari ne richiede la selezione per valorizzare field_intestcorrente tramite la modale, 
                            // altrimenti cambia lo stato direttamente
                            if (this.state.field_numintestatari === "2") {
                                if (this.state.field_stato==="BOZZA") {
                                    // Attiva la modale ed attende il cambio di stato dalla modale
                                    this.setState({
                                        modalProsegui: true
                                    });
                                }
                                else
                                {
                                    //Prosegue allo step successivo
                                    this.setState({
                                        field_stato: getNextState(this.state),
                                        field_intestcorrente: getNextInt(this.state)
                                    });
                                }
                                
                            }
                            else {
                                this.setState({
                                    field_intestcorrente: "0",
                                    field_stato: getNextState(this.state).replace("INT0_","").replace("INT1_","")
                                });
                            }
                        }
                    }
                });

            }
        }
        else {
            // Procedi con l'inserimento diretto as-is (il promotore sta uscendo dalla pratica e vuole solo salvare)
            
            getData({
                url: Step[getPureStep(this.state)].salva.url,
                data: Step[getPureStep(this.state)].salva.data(this.state,false),
                success: (data) => {

                    // Salvataggio terminato ed andato a buon fine 
                    // Notifica l'avvenuto salvataggio
                    Notify.success("Pratica <strong>n." + this.state.field_id + "</strong> salvata con successo.");

                    // Riporta il cliente alla gestione bozze
                    window["location"].href = "/gestionebozze";

                }
            });
        }
    }


    // Funzioni all'atterraggio
    componentDidMount() {
        this.setState({
            isLoading: true
        });
        // Inserisce tutti i campi di default nello stato
        this.setState(
            fieldsFromJson(defaultFields)
        );

        // Carica i dati esterni sempre uguali in tutte le schermate, ovvero i "domini"
        getData({
            url: urlDomini,
            method: "GET",
            success: (data) => {

                // Ripulisce i dati ricevuti
                let domini = {};
                if (data && data.results) {
                    Object.keys(data.results).forEach((key) => {
                        if (key !== "ADEVER" && key !== "DISCLAIMER" && key !=="NAZIONI_ATTIVE") {
                            domini[key.toLowerCase()] = data.results[key].map((obj) => {
                                return ({ "value": obj.codice, "text": obj.descrizione })
                            })

                        }
                        else if (key === "ADEVER") {
                            // Rimappatura ADEVER (tutti come adever_..)
                            Object.keys(data.results["ADEVER"]).forEach((v) => {
                                domini["adever_" + v.toLowerCase()] = data.results["ADEVER"][v].map((obj) => {
                                    return ({ "value": obj.id, "text": obj.nome })
                                })
                            })

                        }
                        else if (key === "NAZIONI_ATTIVE") {
                            // Rimappatura ADEVER (tutti come adever_..)
                            domini["nazioni_attive"] = data.results["NAZIONI_ATTIVE"].map((obj) => {
                                return ({ "value": obj.code, "text": obj.description ,"flagTin":obj.flagTin})
                            })
                        }
                        else if (key === "DISCLAIMER") {
                            // Estrazione DISCLAIMER (sono un oggetto codice:valore)
                            domini["disclaimer"] = {};
                            data.results["DISCLAIMER"].forEach((obj => {
                                domini["disclaimer"][obj.codDisclaimer] = obj.testoDisclaimer
                            }));
                        }

                    });
                }
                console.log("--------------------------- DOMINI DISPONIBILI ---------------------------");
                console.log(domini);
                this.setState({
                    domini: domini
                },
                    () => {
                        // A seconda dell'id si comporta in una maniera diversa
                        if (this.state.field_id === "") {
                            // E' un nuovo inserimento, carica solo i campi esterni
                            getData({
                                url: { "svil": "/json_data/onboarding/getNextBozza.json", "prod": "/promotori/onboarding/rest/bozze/inizializzaBozza" },
                                method: "GET",
                                success: (data) => {
                                    if (data && data.results) {
                                        let newData = data.results
                                        this.setState({
                                            // Inizializzazioni
                                            field_stato: "BOZZA",
                                            field_id: newData.nextId,
                                            field_ordineintestatari: "0",
                                            field_promotore: newData.codPromotore,
                                            field_anagraficablob_filiale: newData.filiale,
                                            isLoading: false
                                        })
                                    }
                                }
                            })

                        }
                        else {
                            // E' il completamento di una pratica esistente
                            this.getDatiPratica()
                        }

                    }

                )

            }
        });
    }

    render() {

        // Proprieta' collettive, valide per tutti i form
        let obformprops = {
            obstate: this.state,
            obchange: (e) => Form.change(this, e),
            obsave: this.salvaPratica,
            obdomini: this.state && this.state.domini,
            setObState: this.setObState
        }

        return (<>

            <h3>INSERIMENTO <span style={{ color: "#ccc" }}>(ID pratica: {(this.state.field_id !== "") ? this.state.field_id : "Non assegnato"})</span></h3>
            <ConsoleSviluppo obbligatori={this.state.svi_obbligatori} backend={this.state.svi_be} setObState={this.setObState}></ConsoleSviluppo>
            <div className={"onboarding " + ((this.state.isLoading) ? "loading" : "")}>
            {this.state.field_stato && <Stepper form={this.state}></Stepper> }

                {this.state.field_stato === "BOZZA" && <Step.BOZZA.form {...obformprops} btnConsole={this.btnConsole}></Step.BOZZA.form>}
                
                {getNextState(this.state) === "RACCOLTA_PRODOTTI" && this.state.field_intestcorrente !== "" && <Step.RACCOLTA_PRODOTTI.form {...obformprops} btnConsole={this.btnConsole}></Step.RACCOLTA_PRODOTTI.form>}
                {getNextState(this.state) === "ADEMPIMENTI_NORMATIVI" && this.state.field_intestcorrente !== "" && <Step.ADEMPIMENTI_NORMATIVI.form {...obformprops} btnConsole={this.btnConsole}></Step.ADEMPIMENTI_NORMATIVI.form>}
                
                {getNextState(this.state) === "RIEPILOGO_DATI" && this.state.field_intestcorrente !== "" && <Step.RIEPILOGO_DATI.form {...obformprops} btnConsole={this.btnConsole}></Step.RIEPILOGO_DATI.form>}
                {getNextState(this.state) === "CERTIF_CREDENZIALI" && this.state.field_intestcorrente !== "" && <Step.CERTIF_CREDENZIALI.form {...obformprops} btnConsole={this.btnConsole}></Step.CERTIF_CREDENZIALI.form>}
                {getNextState(this.state) === "IDENTIF_CLIENTE" && this.state.field_intestcorrente !== "" && <Step.IDENTIF_CLIENTE.form {...obformprops} btnConsole={this.btnConsole}></Step.IDENTIF_CLIENTE.form>}
                {getNextState(this.state) === "FIRMA_PRECONTRATTUALE" && this.state.field_intestcorrente !== "" && <Step.FIRMA_PRECONTRATTUALE.form {...obformprops} btnConsole={this.btnConsole}></Step.FIRMA_PRECONTRATTUALE.form>}
                {getNextState(this.state) === "FIRMA_VESSATORIE" && this.state.field_intestcorrente !== "" && <Step.FIRMA_VESSATORIE.form {...obformprops} btnConsole={this.btnConsole}></Step.FIRMA_VESSATORIE.form>}
                {getNextState(this.state) === "FIRMA_INVESTIMENTO" && this.state.field_intestcorrente !== "" && <Step.FIRMA_INVESTIMENTO.form {...obformprops} btnConsole={this.btnConsole}></Step.FIRMA_INVESTIMENTO.form>}
                {getNextState(this.state) === "FIRMA_VESSATORIE_INVESTIMENTO" && this.state.field_intestcorrente !== "" && <Step.FIRMA_VESSATORIE_INVESTIMENTO.form {...obformprops} btnConsole={this.btnConsole}></Step.FIRMA_VESSATORIE_INVESTIMENTO.form>}
                {getNextState(this.state) === "FIRMA_CONSULENTE" && this.state.field_intestcorrente !== "" && <Step.FIRMA_CONSULENTE.form {...obformprops} btnConsole={this.btnConsole}></Step.FIRMA_CONSULENTE.form>}
                
                {getNextState(this.state) === "CONCLUSA" && this.state.field_intestcorrente !== "" && <Step.CONCLUSA.form {...obformprops} btnConsole={this.btnConsole}></Step.CONCLUSA.form>}
                
                <BtnConsole formprops={obformprops}></BtnConsole>
                
            </div>
        </>)
    }
}