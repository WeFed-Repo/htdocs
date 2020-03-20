import React, { PureComponent } from 'react';
import { Button, Row, Col } from "reactstrap";
import getData from 'functions/getData';
import DefaultTable from 'components/parts/DefaultTable';
import BtnPreferito from 'components/parts/BtnPreferito';
import {formatNumber,riskState} from 'functions/tableFunctions';
import { NavLink } from 'react-router-dom';

const formatNumberQta = function(cell) {
     return formatNumber(cell,3)   
}

const pmstatus = function(cell) {
    var revVal = "";
    if (cell<0) {revVal="Y"}
    if (cell>0) {revVal="N"}
    return(riskState(revVal));
}

const customerLink = function (cell, row) {
    let ndg = (row.ndgAletti) ? row.ndgAletti : row.ndgCode;
    if (ndg) {
        return (
        <span className="with-preferito">
            <BtnPreferito preferito={row.preferito} ndg={ndg} />
            <NavLink to={"/customer/" + ndg} title="Vedi scheda cliente"><span className="table-link">{cell}</span></NavLink>
        </span>)
    }
    else
    {
    return (<span className="with-preferito">{cell}</span>)
    }
}
function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{formatNumber(val, 2)}</span> : formatNumber(val, 2);
}

class DettagliStrumento extends PureComponent {
    render() {

        let strumento = this.props.strumento

        return (
            <>
            <hr></hr>
            <Row className="row-wbutton">
                <Col><h2>Strumento selezionato: {strumento.descrizione_strumento}</h2></Col>
                <Col><div className="button-console right"><Button onClick={this.props.backFunction} className="nav-back">Torna a tabella dei risultati</Button></div></Col>
            </Row>
            
            <div className="dettaglio-strumento">
                <Row>
                    <Col><strong>ISIN</strong><br />{strumento.cod_isin_strumento}</Col>
                    <Col><strong>Tipo strumento</strong><br />{strumento.descrizione_tipo_strumento}</Col>
                    <Col><strong>Divisa</strong><br />{strumento.divisa_strumento}</Col>
                    <Col><strong>Micro asset class</strong><br />{strumento.descrizione_micro_asset_class}</Col>
                    <Col><strong>Macro asset class</strong><br />{strumento.descrizione_macro_asset_class}</Col>
                    <Col><strong>Emittente</strong><br />{strumento.descrizione_emittente}</Col>
                    <Col><strong>Prodotto in evidenza</strong><br />{strumento.flag_prodotto_evidenza}</Col>
                </Row>
            </div>
            </>
        )
    }
}

class TabellaClienti extends PureComponent {

    state = {
        isLoading: true,
        tableData: []
    }

    componentDidMount() {
        // Effettua la chiamata e rimuove il loading
        let tthis = this;
        getData({
            url: {"svil": "/json_data/strumenti_clienti.json", prod: "/promotori/dashboard/rest/deus/getPtfByPromotoreFiltered"},
            data: {codAreaFinanza: this.props.strumento.cod_area_finanza},
            success: (data)=>{

                // Rielabora i dati
                let tData = (data.results && data.results.elementi)? data.results.elementi : [];

                tData.forEach((v,i)=> {

                    // Rielaborazione dei dati
                    v["id"] = i;
                });

                tthis.setState({
                    tableData: tData,
                    isLoading: false
                });
            }
        })
    }

    render() {

        let customerColumns = [
            {
                text: "NDG",
                dataField: "ndgAletti",
                sort: true
            },
            {
                text: "Int",
                dataField: "cliente",
                formatter: customerLink,
                sort: true
            },
            {
                text: "Consu",
                dataField: "tipo_contratto",
                sort: true
            },
            {
                text: "Q.Tà",
                classes: "right",
                headerClasses: "right",
                dataField: "quantita",
                formatter: formatNumberQta,
                sort: true
            },
            {
                text: "PMC",
                classes: "right",
                headerClasses: "right",
                dataField: "prezzo_medio_carico",
                formatter: tableFormatNumber,
                sort: true
            },
            {
                text: "CTV",
                classes: "right",
                headerClasses: "right",
                dataField: "controvalore_divisa",
                formatter: tableFormatNumber,
                sort: true
            },
            {
                text: "Divisa",
                dataField: "divisa_strumento",
                sort: true
            },
            {
                text: "Plus/minus",
                classes: "center",
                headerClasses: "center",
                dataField: "var_plus_minus",
                formatter: pmstatus,
                sort: true
            },
        ]

        return (
            <div className={(this.state.isLoading) ? "loading" : ""}>
                <h2>Elenco clienti</h2>
                <DefaultTable data={this.state.tableData} columns={customerColumns} />
            </div>

        )

    }

}


class ClientiPerStrumento extends PureComponent {

    render() {

        return (
            <div>
                <DettagliStrumento {...this.props}></DettagliStrumento>
                <TabellaClienti {...this.props}></TabellaClienti>
            </div>
        )

    }

}

export default ClientiPerStrumento;
