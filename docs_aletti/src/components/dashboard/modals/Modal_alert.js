import React, { PureComponent } from 'react';
import DefaultTable from 'components/parts/DefaultTable';
import { Button, UncontrolledCollapse } from 'reactstrap';
import { NavLink } from 'react-router-dom';
import { formatNumber } from 'functions/tableFunctions';
import DbContext from 'components/dashboard/DbContext';

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{formatNumber(val, 2)}</span> : formatNumber(val, 2);
}

function formatPm(val) {
    let indicatore = "neutro";
    if (val > 0) indicatore = "positivo";
    if (val < 0) indicatore = "negativo";
    return <div className={"indicatore " + indicatore} />
}

function formatData(val) {
    if (val && val.length === 8) {
        return (val.substring(6, 8) + "/" + val.substring(4, 6) + "/" + val.substring(0, 4))
    }
    else {
        return ("")
    }
}

function formatCliente_int(cell, row) {
    if (row.ndgCode) {
        return (
            <span>
                <NavLink to={"/customer/" + row.ndgCode} ><span className="table-link">{row.intestazRidottaDes}</span></NavLink>
            </span>
        )
    }
    else {
        return (<span>{row.intestazRidottaDes}</span>)
    }

}

function formatCliente_int_cliente(cell, row) {
    if (row.ndgAletti) {

        return (
            <span>
                <NavLink to={"/customer/" + row.ndgAletti} ><span className="table-link">{row.cliente}</span></NavLink>
            </span>
        )
    }
    else {
        return (<span>{row.cliente}</span>);
    }

}

const alertColumns = {

    "int": { text: 'Int', dataField: 'int', description: "Nominativo intestatario/i del rapporto", sort: true, formatter: formatCliente_int },
    "int_cliente": { text: 'Int', dataField: 'int_cliente', description: "Nominativo intestatario/i del rapporto", sort: true, formatter: formatCliente_int_cliente },

    "ndgCode": { text: "NDG", dataField: "ndgCode", description: "Numero Direzione Generale. Identifica in modo univoco il cliente." },
    "ndgAletti": { text: "NDG", dataField: "ndgAletti", description: "Numero Direzione Generale. Identifica in modo univoco il cliente." },
    "nascitaDate": { text: "Data di nascita", dataField: "nascitaDate", description: "Data di nascita" },
    "fasciaRischio": { text: "Fascia di rischio", dataField: "fasciaRischio", description: "Profilo di rischio del cliente. I profili possono essere: Irrilevante, basso, medio, alto", classes: "center", headerClasses: "center" },
    "scadenzaAdverDate": { text: "Data di scadenza ADVER", dataField: "scadenzaAdverDate", description: "Data di scadenza Adeguata Verifica" },
    "statoProfilo": { text: "Stato profilo", dataField: "statoProfilo", description: "Stato del questionario ADV. Può essere scaduta o mancante" },
    "documIdentificType": { text: "Tipologia documento", dataField: "documIdentificType", description: "Tipologia documento rilasciato alla banca", classes: "center", headerClasses: "center" },
    "scadDocumDate": { text: "Data Scadenza", dataField: "scadDocumDate", description: "Data scadenza del documento" },
    "scadenzaMifidDate": { text: "Data Scad. MIFID", dataField: "scadenzaMifidDate", description: "Data Scadenza del questionario MIFID" },
    "tipoClienteDes": { text: "Classificazione cliente", dataField: "tipoClienteDes", description: "Classificazione cliente" },
    "codEsperienzaDes": { text: "Esperienza/Conoscenza", dataField: "codEsperienzaDes", description: "Livello di esperienza e conoscenza dichiarato dal cliente sul questionario mifid" },
    "rischioGrayAmm": { text: "R GREY AMM", dataField: "rischioGrayAmm", classes: "right", headerClasses: "right", description: "Rischio ammissibile Grey List" },
    "rischioCreditoAmm": { text: "R CR AMM", dataField: "rischioCreditoAmm", classes: "right", headerClasses: "right", description: "Rischio di credito ammissibile" },
    "rischioMercatoAmm": { text: "R MKT AMM", dataField: "rischioMercatoAmm", classes: "right", headerClasses: "right", description: "Rischio di mercato ammissibile" },
    "tipo_contratto": { text: "CONSU", dataField: "tipo_contratto", description: "Tipologia Contratto di Consulenza in essere", "classes": "center", headerClasses: "center" },
    "titolo": { text: "Titolo", dataField: "titolo", description: "Descrizione titolo in scadenza" },
    "controvalore_eur": { text: "CTV att.", dataField: "controvalore_eur", classes: "right", headerClasses: "right", description: "Controvalore attuale del titolo in scadenza", formatter: tableFormatNumber },
    "quantita": { text: "Q.tà", dataField: "quantita", classes: "right", headerClasses: "right", description: "Quantità" },
    "prezzo_medio_carico": { text: "PMC", dataField: "prezzo_medio_carico", classes: "right", headerClasses: "right", description: "Prezzo medio di carico", formatter: tableFormatNumber },
    "controvaloreCarico": { text: "CTV di carico", dataField: "controvaloreCarico", classes: "right", headerClasses: "right", description: "Controvalore di carico", formatter: tableFormatNumber },
    "divisa_strumento": { text: "Divisa", dataField: "divisa_strumento", classes: "center", headerClasses: "center", description: "Divisa" },
    "data_scadenza": { text: "Data Scadenza", dataField: "data_scadenza", classes: "right", headerClasses: "right", description: "Data Scadenza del Titolo;", formatter: formatData },
    "var_plus_minus": { text: " V. Plus/Minus", dataField: "var_plus_minus", classes: "center", headerClasses: "center", description: " V. Plus/Minus", formatter: formatPm },
    "controvalore_contratto": { text: "CTV PTF €", classes: "right", headerClasses: "right", dataField: "controvalore_contratto", description: "Controvalore del Portafoglio espresso in Euro", formatter: tableFormatNumber },
    "saldo_conti_correnti": { text: "Liq.", dataField: "saldo_conti_correnti", classes: "right", headerClasses: "right", description: "Saldo dei conti correnti aperti del cliente su Aletti + eventuale liquidità detenuta fuori consulenza", formatter: tableFormatNumber },
    "trend": { text: "Trend", dataField: "trend", description: "L'alert monitora la situazione contabile del cliente se si è superata o no una determinata soglia.", headerClasses: "center", classes: "center", formatter: formatPm }

}

class ModalBody extends PureComponent {
    render() {

        // Arricchisce i dati per la visualizzazione della tabella e popola eventuali campi calcolati
        let tableData = this.props.params.modalData.map(function (obj, i) {
            obj["id"] = i;
            obj["int"] = obj.intestazRidottaDes;
            obj["int_cliente"] = obj.cliente;
            return (obj);
        });


        return (
            <div className="listaClienti">
                <DefaultTable data={tableData} columns={this.props.params.modalColumns.map(function (obj) { return alertColumns[obj] })} />
            </div>
        );
    }
}

class LegendaAcronimi extends PureComponent {
    render() {

        return (
            <div className="legenda-acronimi">
                <Button className="btn-secondary" id="btnLegenda">Legenda</Button>
                <UncontrolledCollapse toggler="#btnLegenda">
                    <ul className="legenda">
                        {this.props.acronimi.map(function (obj) {
                            return (
                                <li key={obj}><strong>{alertColumns[obj].text}</strong>: {alertColumns[obj].description}</li>
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
            "modalColumns": (this.props.modalColumns) ? this.props.modalColumns : ["int", "ndgAletti", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti"],
            "modalFilter": (this.props.modalFilter) ? (this.props.modalFilter) : "customers"
        }

        return (
            <div>
                <ModalBody params={mParams} />
                <DbContext.Consumer>
                    {(value) => <NavLink className="widget-title" to="/customerssearch" onClick={() => value.goToCustomersSearch(this.props.vediTuttiData)}><Button className="right btn-primary" >Vedi tutti</Button></NavLink>}
                </DbContext.Consumer>
                <LegendaAcronimi acronimi={this.props.modalColumns} />
            </div>
        )
    }
}
