import React, { Component } from 'react';
import getData from "functions/getData";
import ElencoBozze from "./ElencoBozze";
import { NavLink } from 'react-router-dom';
import { Row, Col, Button } from 'reactstrap';
import './style.scss';

// Variabili "generali"
const urlListaBozze = { "svil": "/json_data/onboarding/listaBozze.json", "prod": "/promotori/onboarding/rest/bozze/listBozze" }

export default class extends Component {

    constructor(props) {
        super(props);
        this.getListaBozze = this.getListaBozze.bind(this)
    }

    state = {
        isLoading: true,
        listaBozzeData: []
    }

    // Stati della pratica da mostrare
    stati_pratica = [
        { "value": "", "text": "Tutti gli stati" },
        { "value": "ATTESA_FIRMA_CONSULENTE", "text": "Attesa firma consulente" , "status":"avanzamento"},
        { "value": "BOZZA", "text": "Bozza" , "status":"avanzamento"},
        { "value": "BOZZA_DA_COMPLETARE", "text": "Bozza da completare" , "status":"avanzamento"},
        { "value": "BOZZA_VALIDATA", "text": "Bozza validata" , "status":"avanzamento"},

        { "value": "INSERITA_DA_INVIARE", "text": "Inserita da inviare" , "status":"comportamento"},

        { "value": "ANNULLA_NON_INTERESSATO", "text": "Annulla: non interessato" , "status":"annullata"},
        { "value": "ANNULLA_DATI_ERRATI", "text": "Annulla: dati errati" , "status":"annullata"},
        { "value": "IDENTITA_NON_ACCERTATA", "text": "Identità non accertata" , "status":"annullata"},
        { "value": "SCADUTA", "text": "Scaduta" , "status":"annullata"},

        { "value": "CONCLUSA", "text": "Conclusa" , "status":"conclusa"}
        
    ]

    status = (()=>{
        var statusmap = {};
        this.stati_pratica.forEach((v)=>{
            if(v!=="") {
                let obj = {
                    status: v.status,
                    statodesc: v.text
                }
                statusmap[v.value] = obj} 
        })
        return statusmap})();


    getListaBozze() {
        // CHIAMATA IN GET DELL'ELENCO DELLE BOZZE
        this.setState({ isLoading: true });
        let tthis = this;
        getData({
            url: urlListaBozze,
            method: "GET",
            success: (data) => {
                // Prepara l'oggetto dal nodo "results 0"
                tthis.setState({ listaBozzeData: data.results && data.results.map((row)=>{
                    row["status"] = this.status[row["stato"]].status;
                    row["stato"] = this.status[row["stato"]].statodesc;
                    return row;

                }) });
                tthis.setState({ isLoading: false });
                //console.log(data.results);
            }

        })
    }
   
    componentDidMount() {
        // Carica i dati esterni per la tabella
        this.setState({
            isLoading: true
        });
        this.getListaBozze();
    }

    render() {
        let dataTable = this.state.listaBozzeData;
        return (<>
            <h2>Gestione bozze</h2>
            <section>
                <div className={(this.state.isLoading) ? "loading" : ""}>
                    { (dataTable!== null && dataTable.length !== 0 ) && <ElencoBozze tableData={this.state.listaBozzeData} getListaBozze={this.getListaBozze} statiPratica={this.stati_pratica}/>}
                    { dataTable === null && (<div><p>Al momento non ci sono bozze</p><NavLink to="/onboarding"><Button className="btn-primary">Inserisci nuovo</Button></NavLink></div>)
 }
                </div>
             </section>
        </>)

    }

}