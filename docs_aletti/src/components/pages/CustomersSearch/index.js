import React, {PureComponent} from 'react';
import {Col,Row,Button} from 'reactstrap';
import TableResults from './tableResults';
import RicercaStrumenti from './ricercaStrumenti';
import getData from 'functions/getData';
import {remapData} from 'functions/tableFunctions';
import DefaultCollapse from "components/parts/DefaultCollapse";

import './style.scss';

/* Elenco degli url per le chiamate */
const searchUrl = {
    "TUTTI" : {svil: "/json_data/clienti.json", prod: "/promotori/dashboard/rest/deus/clients"},
    "ASSETCLASS": {svil: "/json_data/dashboard/getAssetClass.json", prod: "/promotori/dashboard/rest/deus/getAssetClass"},
    "PLUS_MINUS": {svil: "/json_data/dashboard/getClientiPlusMinus.json", prod: "/promotori/dashboard/rest/deus/getClientiPlusMinus"},
    "RISCHI_PORTAFOGLIO": {svil: "/json_data/dashboard/getRischioPortafoglio.json", prod: "/promotori/dashboard/rest/deus/getRischioPortafoglio"},
    "CLIENTI_PATRIMONIO": {svil: "/json_data/dashboard/getClientiPatrimonio.json", prod: "/promotori/dashboard/rest/deus/getClientiPatrimonio"},
    "ALERT": {
        "CONSISTENZA_LIQUIDITA" : {svil: "/json_data/alert_consistenza_liquidita.json", prod: "/promotori/dashboard/rest/alert/consistenzaliquidita"},     
        "TITOLI_SCADENZA" : {svil: "/json_data/alert_titoli.json", prod: "/promotori/dashboard/rest/alert/titoliscadenza"},     
        "SCADENZA_MIFID" : {svil: "/json_data/alert_mifid_scadenza.json", prod: "/promotori/dashboard/rest/alert/mifidscadenza"},     
        "SCADENZA_ADVER" : {svil: "/json_data/alert_adever.json", prod: "/promotori/dashboard/rest/alert/adeverscadenza"},     
        "SCADENZA_DOCUMENTI" : {svil: "/json_data/alert_documenti.json", prod: "/promotori/dashboard/rest/alert/documentiscadenza"},     
        "COMPLEANNO" : {svil: "/json_data/alert_compleanni.json", prod: "/promotori/dashboard/rest/alert/compleanni"}    
    }
        
}

class CustomersSearch extends PureComponent {

    constructor(props){
        super(props);
        this.state = {
            loadingDomini : true,
            loadCustomers: true,

            domaindata : {},

            form_tiporicerca: (this.props.searchData && this.props.searchData.strumento && this.props.searchData.strumento !== "") ? "strumenti" : "clienti",

            form_categoria: (this.props.searchData && this.props.searchData.categoria)? this.props.searchData.categoria : "TUTTI",
            form_tipologia: (this.props.searchData && this.props.searchData.tipologia)? this.props.searchData.tipologia : "",
            form_nome: (this.props.searchData && this.props.searchData.nome)?this.props.searchData.nome : "",
            form_ndg: (this.props.searchData && this.props.searchData.ndg)?this.props.searchData.ndg : "",
            form_dettaglio: (this.props.searchData && this.props.searchData.dettaglio)?this.props.searchData.dettaglio : "",
            form_tipocontratto: "",

            form_strumento: (this.props.searchData && this.props.searchData.strumento)? this.props.searchData.strumento : "",
            form_strumento_isin: "",
            form_strumento_emittente: "",
            form_strumento_tipo: "",
            form_strumento_divisa: "",
            form_strumento_evidenza: "",

            table_params: {},
            table_reload: false,
            table_show: false,
            table_loading: false,
            table_data: [],

            accordionOpened: true
            
        };    

        /* Binding*/
        this.tableSearch = this.tableSearch.bind(this)
    }

    changeValue(e,mask){

        let filteredvalue = e.target.value;
            
        // Applica un filtro se necessario
        if(mask) {
            switch(mask){
                case "number":
                    filteredvalue = filteredvalue.replace(/\D/g,'')
                break;
            }
        }
        

        this.setState({
            [e.target.name]: filteredvalue,
            table_show:false
        });
    }

    componentWillMount(){

            /* Chiamata ai domini */
            let that = this;
            this.setState({
                accordionOpened: (this.state.form_categoria === "TUTTI" && this.state.form_nome==="" && this.state.form_ndg===""  && this.state.form_strumento==="")? false : true
            });
            getData({
                url: {"svil": "/json_data/customers_domini.json" ,"prod": "/promotori/dashboard/rest/ricerca/domini"},
                success: function(data) {
                    that.setState({
                        domaindata: data && data.results,
                        loadingDomini : false
                    });
                    // Servizio lanciato all'atterraggio
                    
                    if (that.state.form_categoria !=="") {
                        that.setState({table_reload:true})
                        that.tableSearch();
                    }
                }
            });
    }
    
    resetResults(){
        this.setState({
            table_show:false
        })
    }

    tableRender(){
        this.setState({
            table_show: true,
            table_reload: false,
            table_loading: false,
            table_params: (this.state.form_tiporicerca === "clienti")?  {
                    categoria: this.state.form_categoria,
                    tipologia: this.state.form_tipologia,
                    dettaglio:this.state.form_dettaglio,
                    nome:this.state.form_nome,
                    ndg:this.state.form_ndg,
                    tipocontratto:this.state.form_tipocontratto,
                    data: this.state.table_data
                }:
                {
                    data: this.state.table_data,
                    isin: this.state.form_strumento_isin,
                    strumento:this.state.form_strumento,
                    emittente:this.state.form_strumento_emittente,
                    tipo: this.state.form_strumento_tipo,
                    divisa: this.state.form_strumento_divisa,
                    evidenza: this.state.form_strumento_evidenza
                }
            
        });
    }
    
    tableSearch(){

            /* Richiede i dati da passare al componente di visualizzazione e li aggiorna (se necessario, ovvero se cambia la categoria o la tipologia) */
           
            let that = this;
            if (this.state.table_reload) {
                // console.log("ricarica dati -> " + searchUrl[that.state.form_categoria].svil);
                this.setState({table_loading: true});
                let sUrl, sMethod, sPostData;
                if (this.state.form_tiporicerca ==="clienti" ) {
                    sMethod = "POST";
                    sUrl =  (this.state.form_categoria==="ALERT")? searchUrl[this.state.form_categoria][this.state.form_tipologia] : searchUrl[this.state.form_categoria];
                    sPostData = {classificazione:(that.state.form_categoria !=="ALERT" && that.state.form_categoria !=="TUTTI")? that.state.form_tipologia : "TUTTI"};
                }
                else {
                    sMethod = "GET";
                    sUrl = {svil: "/json_data/strumenti.json", prod: "/promotori/dashboard/rest/deus/getInstruments"};
                }


               
                getData({
                    url: sUrl,
                    method: sMethod,
                    data: sPostData,
                    success: function(data) {
                    
                        // Fornisce i dati alla tabella, valorizzando l'oggetto "data" a seconda del tipo
                        let tData = [];
                        
                        if (data && data.results && (data.results.risultati || data.results.elementi)) {

                            if (that.state.form_tiporicerca ==="clienti") {
                                // Ricerca clienti 
                                if (that.state.form_categoria !=="ALERT") {
                                    if (that.state.form_tipologia !=="") {
                                        tData = data.results.risultati[that.state.form_tipologia] && remapData(data.results.risultati[that.state.form_tipologia]);
                                    }
                                    else
                                    {
                                        tData = data.results.risultati && remapData(data.results.risultati);
                                    }
                                }
                                else
                                {
                                    // Mappa i dati diversamente a seconda del tipo di ALERT
                                    if (that.state.form_tipologia !== "CONSISTENZA_LIQUIDITA") {
                                        tData = data.results.risultati;
                                    }
                                    else
                                    {
                                        tData = [];
                                        // Arricchisce il risultato della colonna per il filtraggio, in modo da non fare altre chiamate
                                        data.results.risultati && Object.keys(data.results.risultati).forEach(key=>{
                                            tData = tData.concat(remapData(data.results.risultati[key]).map((v)=>{
                                                return Object.assign(v,{"consistenza_liquidita":key});
                                            }))
                                        });
                                    }
                                }
                            }
                            else
                            {
                                // Ricerca strumenti 
                                tData =  data.results.elementi;
                            }

                        }
                        else
                        {
                            tData = [];
                        }
                        /* Forzatura per nodi inesistenti nei risultati */
                        if (!tData) tData = [];

                        that.setState({table_data: tData});
                        that.tableRender();
                    }
                
                });
            }
            else {
                this.tableRender();
                console.log("NON ricarica dati");                
            }

    }
    
    render(){

        return(<div>
            <h1>Portafoglio clienti</h1>
            <DefaultCollapse label="RICERCA AVANZATA" startsOpen={this.state.accordionOpened}>
                <form className={(this.state.loadingDomini || this.state.table_loading)? "loading" : ""} >
                    <Row>
                        <Col lg="3">
                            <div className="form-group">
                                <label>Tipo ricerca</label>
                                <select value={this.state.form_tiporicerca} className="form-control" onChange={(e)=>{this.changeValue(e);this.setState({form_categoria: "", form_tipologia: "",form_dettaglio: "",table_reload: true,form_tipocontratto:""})}} name="form_tiporicerca">
                                    <option value="">Seleziona...</option>
                                    <option value="clienti">Clienti</option>
                                    <option value="strumenti">Strumenti</option>
                                </select>
                            </div>
                        </Col>
                        <Col lg="3" style={{display: (this.state.form_tiporicerca === "clienti")?"" : "none"}}>
                            <div className="form-group">
                                <label>Categoria</label>
                                <select value={this.state.form_categoria} className="form-control" onChange={(e)=>{this.changeValue(e);this.setState({form_tipologia: "",form_dettaglio: "",table_reload: true,form_tipocontratto:""})}} name="form_categoria">
                                    <option value="">Seleziona...</option>
                                    <option value="TUTTI">Tutti</option>
                                    <option value="ALERT">Alert</option>
                                    <option value="ASSETCLASS">Categorie di Investimento</option>
                                    <option value="CLIENTI_PATRIMONIO">Per patrimonio</option>
                                    <option value="PLUS_MINUS">Plus/Minusvalenza</option>
                                    <option value="RISCHI_PORTAFOGLIO">Rischi in portafoglio</option>
                                </select>
                            </div>
                        </Col>
                        <Col lg="3" style={{display:(this.state.form_categoria !=="TUTTI" && this.state.form_categoria !=="")? "inline-block": "none" }}>
                            <div className="form-group">
                                <label>Tipologia</label>
                                <select value={this.state.form_tipologia} className="form-control" onChange={(e)=>{this.changeValue(e);this.setState({table_reload: true,form_dettaglio: "",form_tipocontratto:""})}} name="form_tipologia">
                                    <option value="">Seleziona...</option>
                                    {this.state.domaindata[this.state.form_categoria] && this.state.domaindata[this.state.form_categoria].map((v,i)=>{
                                        return (<option value={v.codice} key={i}>{v.descrizione}</option>)
                                    })}
                                </select>
                            </div>
                        </Col>
                        <Col lg="3" style={{display:(this.state.form_categoria ==="ALERT" && this.state.form_tipologia ==="CONSISTENZA_LIQUIDITA")? "inline-block":"none" }}>
                            <div className="form-group">
                                <label>Dettaglio</label>
                                <select value={this.state.form_dettaglio} className="form-control" onChange={(e)=>{this.changeValue(e)}} name="form_dettaglio">
                                    <option value="">Seleziona...</option>
                                    <option value={"ROSSO"} key={0}>ROSSO</option>
                                    <option value={"GIALLO"} key={1}>GIALLO</option>
                                    <option value={"VERDE"} key={2}>VERDE</option>
                                </select>
                            </div>
                        </Col>
                    </Row>
                    <div style={{display: (this.state.form_tiporicerca==="clienti")? "" : "none"}}>
                    <Row>
                        <Col lg="3">
                            <div className="form-group">
                                <label className="control-label">Nome cliente</label>
                                <input type="text" maxLength="50" placeholder="Cerca per nome..." className="form-control" value={this.state.form_nome} name="form_nome" onChange={(e)=>this.changeValue(e)}/>
                            </div>
                        </Col>
                        <Col lg="3">
                            <div className="form-group">
                                <label className="control-label">NDG cliente</label>
                                <input type="text" maxLength="20" placeholder="Cerca per ndg..." className="form-control" value={this.state.form_ndg} name="form_ndg" onChange={(e)=>this.changeValue(e,"number")}/>
                            </div>
                        </Col>
                        <Col lg="3" style={{display:(this.state.form_categoria ==="ALERT")?"none":"inline-block"}}>
                            <div className="form-group">
                                <label className="control-label">Tipo contratto</label>
                                <select value={this.state.form_tipocontratto} className="form-control" onChange={(e)=>this.changeValue(e)} name="form_tipocontratto">
                                    <option value="" key={0}>Tutti</option>
                                    <option value="APA" key={1}>APA</option>
                                    <option value="PA" key={2}>PA</option>
                                    <option value="ALTRO" key={3}>Altro</option>
                                </select>
                            </div>
                        </Col>
                    </Row>
                    </div>
                    
                    <div style={{display: (this.state.form_tiporicerca === "strumenti")?"" : "none"}}>
                        <Row>
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Isin</label>
                                    <input type="text" maxLength="20" placeholder="Cerca per isin..." className="form-control" value={this.state.form_strumento_isin} name="form_strumento_isin" onChange={(e)=>this.changeValue(e,"number")}/>
                                </div>
                            </Col>
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Strumento</label>
                                    <input type="text" maxLength="20" placeholder="Cerca per strumento..." className="form-control" value={this.state.form_strumento} name="form_strumento" onChange={(e)=>this.changeValue(e)}/>
                                </div>
                            </Col>
                            
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Tipo strumento</label>
                                    <select value={this.state.form_strumento_tipo} className="form-control" onChange={(e)=>this.changeValue(e)} name="form_strumento_tipo">
                                        <option value="" key={0}>Seleziona...</option>
                                        {this.state.domaindata["TIPI_STRUMENTI"] && this.state.domaindata["TIPI_STRUMENTI"].sort((a,b)=>{return (a.descrizione>b.descrizione)? 1 : -1}).map((v,i)=>{
                                        return (<option value={v.codice} key={i}>{v.descrizione}</option>)
                                    })}
                                    </select>
                                </div>
                            </Col>
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Divisa</label>
                                    <select value={this.state.form_strumento_divisa} className="form-control" onChange={(e)=>this.changeValue(e)} name="form_strumento_divisa">
                                        <option value="" key={0}>Seleziona...</option>
                                        {this.state.domaindata["DIVISE_STRUMENTI"] && this.state.domaindata["DIVISE_STRUMENTI"].sort((a,b)=>{return (a.descrizione>b.descrizione)? 1 : -1}).map((v,i)=>{
                                        return (<option value={v.codice} key={i}>{v.descrizione}</option>)
                                    })}
                                    </select>
                                </div>
                            </Col>
                        </Row>
                        <Row>
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Emittente</label>
                                    <select value={this.state.form_strumento_emittente} className="form-control" onChange={(e)=>this.changeValue(e)} name="form_strumento_emittente">
                                        <option value="" key={0}>Seleziona...</option>
                                        {this.state.domaindata["EMITTENTI_STRUMENTI"] && this.state.domaindata["EMITTENTI_STRUMENTI"].sort((a,b)=>{return (a.descrizione>b.descrizione)? 1 : -1}).map((v,i)=>{
                                        return (<option value={v.codice} key={i}>{v.descrizione}</option>)
                                    })}
                                    </select>
                                </div>
                            </Col>
                            <Col lg="3">
                                <div className="form-group">
                                    <label className="control-label">Titoli in evidenza</label>
                                    <select value={this.state.form_strumento_evidenza} className="form-control" onChange={(e)=>this.changeValue(e)} name="form_strumento_evidenza">
                                        <option value="" key={0}>Seleziona...</option>
                                        {this.state.domaindata["FLAG_SELL_EVIDENZA"] && this.state.domaindata["FLAG_SELL_EVIDENZA"].sort((a,b)=>{return (a.descrizione>b.descrizione)? 1 : -1}).map((v,i)=>{
                                        return (<option value={v.codice} key={i}>{v.descrizione}</option>)})}
                                    </select>
                                </div>
                            </Col>
                        </Row>
                    </div>
                    <div className="button-console" style={{display: ( 
                        /*Condizioni per mostrare il bottone */
                        (this.state.form_categoria ==="TUTTI") || (this.state.form_tiporicerca ==="strumenti")
                        || (this.state.form_categoria !== "ALERT" && this.state.form_tipologia !== "")
                        || (this.state.form_categoria === "ALERT" && (this.state.form_tipologia !== "" && this.state.form_tipologia !== "CONSISTENZA_LIQUIDITA"))
                        || (this.state.form_categoria === "ALERT" && (this.state.form_tipologia === "CONSISTENZA_LIQUIDITA" && this.state.form_dettaglio !==""))
                        ) ? "inline-block":"none"}}>
                        <Button className="btn-primary" onClick={(e)=>{e.preventDefault();this.tableSearch()}}>Esegui</Button>
                    </div>
                </form>
            </DefaultCollapse>
            {this.state.table_show && this.state.form_tiporicerca==="clienti" && <TableResults params={this.state.table_params}></TableResults>}
            {this.state.table_show && this.state.form_tiporicerca==="strumenti" && <RicercaStrumenti params={this.state.table_params}></RicercaStrumenti>}
        </div>)
    }
}

export default CustomersSearch;