import React, {PureComponent} from 'react';
import DefaultTable from 'components/parts/DefaultTable';
import {Button,UncontrolledCollapse} from 'reactstrap';
import {NavLink} from 'react-router-dom';
import {riskState,formatNumber,formatAdeguatezza} from 'functions/tableFunctions';
import BtnPreferito from 'components/parts/BtnPreferito';
import DbContext from 'components/dashboard/DbContext';

function tableFormatNumber(val) {
    return (val<0) ? <span className="negativo">{formatNumber(val,2)}</span> : formatNumber(val,2);
}

function formatCliente(cell,row) {
    let cellbody;
    if (row.ndgAletti) {
        cellbody = <span>
            <NavLink to={"/customer/" + row.ndgAletti} ><span className="table-link">{row.cliente}</span></NavLink></span>
    }
    else
    {
        cellbody = row.cliente
    }

    return (cellbody)
}

const customerColumns = {
    "int": {text: 'Int', dataField: 'cliente', description: "Nominativo intestatario/i del rapporto", sort:true, formatter: formatCliente},
    "breakdown_liquidita": {text: "Bucket temporale", dataField: "breakdown_liquidita", description: "Break down (cluster concatenati in stringa) rischio di liquidità"},
    "breakdown_macro_asset_class": {text: "", dataField: "breakdown_macro_asset_class", description: "Break down macro asset class (cluster concatenati in stringa)"},
    "cliente": {text: "Int", dataField: "cliente", description: "Nominativo Cliente"},
    "codicePF": {text: "CODICE CF", dataField: "codicePF", description: "Codice PF"},
    "controvalore_contratto": {text: "CTV PTF €", classes:"right",headerClasses: "right", dataField: "controvalore_contratto", description: "Controvalore del Portafoglio espresso in Euro",formatter: tableFormatNumber},
    "data_riferimento_dati": {text: "Data ", dataField: "data_riferimento_dati", description: "Data di riferimento dei dati", classes:"center"},
    "data_rischio": {text: "Dal", dataField: "data_rischio", description: "Data di prima inadeguatezza consecutiva", classes:"center"},
    "data_rischio_credito": {text: "Dal (R CR)", dataField: "data_rischio_credito", description: "Data di prima inadeguatezza consecutiva UL"},
    "data_rischio_gray_list": {text: "Dal (R GREY)", dataField: "data_rischio_gray_list", description: "Data di prima inadeguatezza consecutiva Gray"},
    "data_rischio_liquidita": {text: "Dal (R LIQ)", dataField: "data_rischio_liquidita", description: "Data di prima inadeguatezza consucutiva RDL"},
    "data_rischio_mercato": {text: "Dal (R MKT)", dataField: "data_rischio_mercato", description: "Data di prima inadeguatezza consecutiva Cvar"},
    "data_scadenza_mifid": {text: "Data Scadenza MIFID", dataField: "data_scadenza_mifid", description: "Data scadenza questionario Mifid"},
    "data_ultima_proposta": {text: "Ult. Cons.", dataField: "data_ultima_proposta", description: "Data ultima proposta pubblicata"},
    "esperienza_mifid": {text: "Esperienza/Conoscenza", dataField: "esperienza_mifid", description: "Esperienza e conoscenza (descrizione)"},
    
    "flag_rischio": {text: "Risk Analysis", dataField: "flag_rischio", description: "Analisi della rischiosità del portafoglio del cliente. L’icona si attiva se le caratteristiche del portafoglio non sono più coerenti con il profilo MIFID del cliente e si è superata la soglia ammissibile su almeno un parametro tra rischio mercato, rischio credito, rischio liquidità e rischio concentrazione prodotti complessi. Il colore dell’icona è rosso se siamo oltre soglia, verde se tutti i livelli di rischio rientrano nella soglia ammissibile", formatter: formatAdeguatezza, "classes":"center",headerClasses:"center"},
    "flag_rischio_credito": {text: "R CR", dataField: "flag_rischio_credito", description: "Rischio Credito di portafoglio. Viene verificata la congruenza fra il rischio di credito del portafoglio ed il livello di rischio credito massimo ammissibile per il cliente", formatter:formatAdeguatezza, "classes":"center",headerClasses:"center"},
    "flag_rischio_gray_list": {text: "R GREY", dataField: "flag_rischio_gray_list", description: "Rischio concentrazione prodotti complessi in Grey List. Viene confrontata la concentrazione in tali prodotti del portafoglio del Cliente al Dettaglio (PTFOLD e PTFNEW) con la soglia massima associata al suo profilo di conoscenza ed esperienza", formatter:formatAdeguatezza, "classes":"center",headerClasses:"center"},
    "flag_rischio_liquidita": {text: "R LIQ", dataField: "flag_rischio_liquidita", description: "Rischio Liquidità di portafoglio. Viene verificata la congruenza fra i controvalori espressi in termini percentuali dei prodotti illiquidi e le percentuali dichiarate dal cliente nel questionario di profilatura (orizzonti temporali)", formatter:formatAdeguatezza, "classes":"center",headerClasses:"center"},
    "flag_rischio_mercato": {text: "R MKT", dataField: "flag_rischio_mercato", description: "Rischio Mercato di portafoglio. Viene verificata la congruenza fra il rischio mercato del portafoglio ed il livello di rischio mercato massimo ammissibile per il cliente (determinato con il questionario di profilatura)", formatter:formatAdeguatezza, "classes":"center",headerClasses:"center"},
    
    "flag_titoli_scad_10gg": {text: "Titoli in scad.", dataField: "flag_titoli_scad_10gg", description: "Flag (1, 0) indicante titoli in scadenza nei prossimi 10 gg", formatter:riskState, "classes":"center",headerClasses:"center"},
    "gray_list": {text: "R GREY ATT", dataField: "gray_list", description: "Gray List"},
    "gray_list_prec": {text: "", dataField: "gray_list_prec", description: "Gray Lista alla data precedente"},
    "ndgAletti": {text: "NDG", dataField: "ndgAletti", description: "Numero Direzione Generale. Identifica in modo univoco il cliente."},
    "ndgDuo": {text: "NDG DUO", dataField: "ndgDuo", description: "NDG del Duo"},
    "plus_minus_contratto": {text: "Plus/Minus", dataField: "plus_minus_contratto", classes:"right",headerClasses: "right",description: "Valore della plus/minusvalenza gestionale calcolata a livello di portafoglio del cliente",formatter: tableFormatNumber},
    "plus_minus_contratto_prec": {text: "Plus/Minus prec.", dataField: "plus_minus_contratto_prec", classes:"right",headerClasses: "right",description: "Plus / minus totale eur alla data precedente di tutte le posizioni del contratto",formatter: tableFormatNumber},
    "v_plus_minus": {text: "V Plus/Minus" ,dataField: "v_plus_minus",classes: "center",headerClasses: "center", description: "Variazione Plusvalenza/Minusvalenza gestionale a t-1", formatter:riskState},
    "rischio_credito": {text: "R CR ATT", dataField: "rischio_credito",classes:"right",headerClasses: "right", description: "Unexpected loss"},
    "rischio_credito_ammissibile": {text: "R CR AMM", dataField: "rischio_credito_ammissibile", classes:"right",headerClasses: "right",description: "Soglia Unexpected loss"},
    "rischio_credito_prec": {text: "", dataField: "rischio_credito_prec", classes:"right",headerClasses: "right",description: "Unexpected loss alla data precedente"},
    "rischio_mercato_ammissibile": {text: "R MKT AMM", dataField: "rischio_mercato_ammissibile", classes:"right",headerClasses: "right",description: "Soglia Cvar"},
    "rischio_mercato_portafoglio": {text: "R MKT ATT", dataField: "rischio_mercato_portafoglio",classes:"right",headerClasses: "right", description: "Cvar"},
    "rischio_mercato_portafoglio_prec": {text: "", dataField: "rischio_mercato_portafoglio_prec",classes:"right",headerClasses: "right", description: "Cvar alla data precedente"},
    "saldo_conti_correnti": {text: "Liq.", dataField: "saldo_conti_correnti", classes:"right",headerClasses: "right",description: "Saldo dei conti correnti aperti del cliente su Aletti + eventuale liquidità detenuta fuori consulenza",formatter: tableFormatNumber},
    "soglia_breakdown_liquidita": {text: "Bucket temporale Amm.", dataField: "soglia_breakdown_liquidita", description: "Soglie Break down (cluster concatenati in stringa) rischio di liquidità"},
    "soglia_gray_list": {text: "R GREY AMM", dataField: "soglia_gray_list", description: "Soglia Gray list"},
    "tipo_contratto": {text: "CONSU", dataField: "tipo_contratto", description: "Tipologia Contratto di Consulenza in essere","classes":"center",headerClasses:"center"},
    "trend": {text: "Trend",dataField: "trend", description: "L'alert monitora la situazione contabile del cliente se si è superata o no una determinata soglia.", headerClasses: "center",classes:"center", formatter:riskState}
}

class ModalBody extends PureComponent {
    render() {

        // Arricchisce i dati per la visualizzazione della tabella e popola eventuali campi calcolati
        let tableData = this.props.params.modalData.map(function(obj,i) {
            obj["v_plus_minus"] = ((obj.plus_minus_contratto - obj.plus_minus_contratto_prec)>=0) ? "N" : "Y";
            obj["id"] = i;
            obj["ordcliente"] = obj.cliente;
            return(obj);
        });


        return (
            <div className="listaClienti">
                <DefaultTable data={tableData} columns={ this.props.params.modalColumns.map(function(obj){return customerColumns[obj]})} />
            </div>
        );
    }
}

class LegendaAcronimi extends PureComponent {
    render() {

        return(
            <div className="legenda-acronimi">
                <Button className="btn-secondary" id="btnLegenda">Legenda</Button>
                <UncontrolledCollapse toggler="#btnLegenda">
                    <ul className="legenda">
                        {this.props.acronimi.map(function(obj){
                            return(
                                <li key={obj}><strong>{customerColumns[obj].text}</strong>: {customerColumns[obj].description}</li>
                            )
                        })}
                    </ul>
                </UncontrolledCollapse>
            </div>
        )
    }
}


export default class extends PureComponent {
  render() {

    /* PARAMETRI */
    let mParams = {
        "mType": this.props.modalType,
        "modalData": this.props.modalData,
        "modalColumns": (this.props.modalColumns)? this.props.modalColumns : ["int","ndgAletti","tipo_contratto","controvalore_contratto","saldo_conti_correnti"],
        "modalFilter": (this.props.modalFilter) ? (this.props.modalFilter) : "customers"
    }

    return (
        <div>
            <ModalBody params={mParams} />
            <DbContext.Consumer>
                {(value)=><NavLink className="widget-title" to="/customerssearch" onClick={()=>value.goToCustomersSearch(this.props.vediTuttiData)}><Button className="right btn-primary" >Vedi tutti</Button></NavLink>}
            </DbContext.Consumer>
            <LegendaAcronimi acronimi={this.props.modalColumns} />
        </div>
    )
  }
}
