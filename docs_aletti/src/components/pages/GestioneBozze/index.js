import React, { Component } from 'react';
import getData from "functions/getData";
import ElencoBozze from "./ElencoBozze";
import { NavLink } from 'react-router-dom';
import { Row, Col, Button } from 'reactstrap';
import './style.scss';

// Variabili "generali"
const urlListaBozze = { "svil": "/json_data/onboarding/listaBozze.json", "prod": "/promotori/onboarding/rest/bozze/listBozze" }

const stati_pratica = [
    "BOZZA", 
    "BOZZA_VALIDATA",
    "CONCLUSA"
];

export default class extends Component {

    constructor(props) {
        super(props);
        this.getListaBozze = this.getListaBozze.bind(this)
    }

    state = {
        isLoading: true,
        listaBozzeData: []
    }
    getListaBozze() {
        // CHIAMATA IN GET DELL'ELENCO DELLE BOZZE
        this.setState({ isLoading: true });
        let tthis = this;
        getData({
            url: urlListaBozze,
            method: "GET",
            success: (data) => {
                // Prepara l'oggetto dal nodo "results 0"
                tthis.setState({ listaBozzeData: data.results });
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
                    { (dataTable!== null && dataTable.length !== 0 ) && <ElencoBozze tableData={this.state.listaBozzeData} getListaBozze={this.getListaBozze} statiPratica = {stati_pratica} />}
                    { dataTable === null && (<div><p>Al momento non ci sono bozze</p><NavLink to="/onboarding"><Button className="btn-primary">Inserisci nuovo</Button></NavLink></div>)
 }
                </div>
             </section>
        </>)

    }

}