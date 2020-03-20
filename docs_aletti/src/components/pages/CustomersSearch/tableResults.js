import React, { PureComponent } from 'react';
import { NavLink } from 'react-router-dom';
import { Alert } from 'reactstrap';
import BtnPreferito from 'components/parts/BtnPreferito';
import { riskState, formatNumber, dataForTable, formatTrend, formatAdeguatezza } from 'functions/tableFunctions';


/* Gestori per la formattazione della tabella */
const customerLink = function (cell, row,callBack) {
    let ndg = (row.ndgAletti) ? row.ndgAletti : row.ndgCode;
    if (ndg) {
        return (
        <span className="with-preferito">
            <BtnPreferito preferito={row.preferito} ndg={ndg} callback={callBack}/>
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

/* Tutte le colonne possibili delle tabelle */
const customerColumns = {
    "int": {
        text: "Int",
        classes: "left",
        field: "cliente",
        formatter: customerLink,
        sortable: true
    },
    "intestazione": {
        text: "Int",
        classes: "left",
        field: "intestazRidottaDes",
        formatter: customerLink,
        sortable: true
    },
    "ndg": {
        text: "NDG",
        classes: "left",
        field: "ndgAletti"
    },
    "ndgCode": {
        text: "NDG",
        classes: "left",
        field: "ndgCode"
    },
    "consu": {
        text: "CONSU",
        classes: "right",
        field: "tipo_contratto"
    },
    "controvalore_contratto": {
        text: "CTV PTF €",
        classes: "right",
        sortable: true,
        formatter: tableFormatNumber,
        field: "controvalore_contratto"
    },
    "saldo_conti_correnti": {
        text: "Liq.",
        classes: "right",
        sortable: true,
        formatter: tableFormatNumber,
        field: "saldo_conti_correnti"
    },
    "esperienza_mifid": {
        text: "Esperienza/Conoscenza",
        field: "esperienza_mifid"
    },
    "flag_rischio": {
        text: "Risk Analysis",
        classes: "center",
        formatter: formatAdeguatezza,
        field: "flag_rischio"
    },
    "flag_rischio_credito": {
        text: "R CR",
        classes: "center",
        formatter: formatAdeguatezza,
        field: "flag_rischio_credito"
    },
    "flag_rischio_gray_list": {
        text: "R GREY",
        classes: "center",
        formatter: formatAdeguatezza,
        field: "flag_rischio_gray_list"
    },
    "flag_rischio_mercato": {
        text: "R MKT",
        classes: "center",
        formatter: formatAdeguatezza,
        field: "flag_rischio_mercato"
    },
    "flag_rischio_liquidita": {
        text: "R LIQ",
        classes: "center",
        formatter: formatAdeguatezza,
        field: "flag_rischio_liquidita"
    },
    "flag_titoli_scad_10gg": {
        text: "Titoli in scad.",
        classes: "center",
        formatter: riskState,
        field: "flag_titoli_scad_10gg"
    },
    "rischio_credito": {
        text: "R CR ATT",
        classes: "right",
        group: "group_rischio_credito",
        sortable: true,
        formatter: tableFormatNumber,
        field: "rischio_credito"
    },
    "rischio_credito_ammissibile": {
        text: "R CR AMM",
        classes: "right",
        group: "group_rischio_credito",
        sortable: true,
        formatter: tableFormatNumber,
        field: "rischio_credito_ammissibile"
    },
    "data_rischio_credito": {
        text: "Dal (R CR)",
        classes: "center",
        group: "group_rischio_credito",
        formatter: dataForTable,
        field: "data_rischio_credito"
    },

    "gray_list": {
        text: "R GREY ATT",
        field: "gray_list",
        group: "group_rischio_gray_list",
        description: "Gray List",
        formatter: tableFormatNumber
    },
    "soglia_gray_list": { text: "R GREY AMM", group: "group_rischio_gray_list", field: "soglia_gray_list", description: "Soglia Gray list" },
    "data_rischio_gray_list": {
        text: "Dal (R GREY)",
        classes: "center",
        group: "group_rischio_gray_list",
        formatter: dataForTable,
        field: "data_rischio_gray_list"
    },
    "rischio_mercato_portafoglio": {
        text: "R MKT ATT",
        classes: "right",
        group: "group_rischio_mercato",
        formatter: tableFormatNumber,
        field: "rischio_mercato_portafoglio",
        description: "Cvar"
    },
    "rischio_mercato_ammissibile": {
        text: "R MKT AMM",
        classes: "right",
        group: "group_rischio_mercato",
        formatter: tableFormatNumber,
        field: "rischio_mercato_ammissibile"
    },
    "data_rischio_mercato": {
        text: "Dal (R MKT)",
        classes: "center",
        group: "group_rischio_mercato",
        formatter: dataForTable,
        field: "data_rischio_mercato"
    },
    "data_rischio_liquidita": {
        text: "Dal (R LIQ)",
        classes: "center",
        group: "group_liq",
        formatter: dataForTable,
        field: "data_rischio_liquidita"
    },
    "data_rischio": {
        text: "Dal (R ANALYSIS)",
        classes: "right",
        formatter: dataForTable,
        field: "data_rischio"
    },
    "data_scadenza_mifid": {
        text: "Data Scadenza MIFID",
        classes: "center",
        formatter: dataForTable,
        field: "data_scadenza_mifid"
    },
    "data_ultima_proposta": {
        text: "Ult. Cons.",
        classes: "center",
        formatter: dataForTable,
        field: "data_ultima_proposta"
    },
    "nascitaDate": {
        field: "nascitaDate",
        text: "Data di nascita",
        classes: "left"
    },
    "scadenzaMifidDate": {
        text: "Data Scadenza MIFID",
        classes: "center",
        headerClasses: "center",
        field: "scadenzaMifidDate"
    },
    "tipoClienteDes": {
        text: "Classificazione cliente",
        field: "tipoClienteDes"
    },
    "codEsperienzaDes": {
        text: "Esperienza",
        field: "codEsperienzaDes"
    },
    "rischioGrayAmm": {
        text: "R GREY AMM",
        field: "rischioGrayAmm"
    },
    "rischioCreditoAmm": {
        text: "R CR AMM",
        field: "rischioCreditoAmm"
    },
    "rischioMercatoAmm": {
        text: "R MKT AMM",
        field: "rischioMercatoAmm"
    },
    "titolo": {
        text: "Titolo",
        field: "titolo"
    },
    "controvalore_eur": {
        text: "CTV att.",
        field: "controvalore_eur",
        formatter: tableFormatNumber,
    },
    "quantita": {
        text: "Q.tà",
        field: "quantita",
        formatter: tableFormatNumber,
    },
    "prezzo_medio_carico": {
        text: "PMC",
        field: "prezzo_medio_carico",
        formatter: tableFormatNumber
    },
    "controvaloreCarico": {
        text: "CTV di carico",
        field: "controvaloreCarico",
        formatter: tableFormatNumber
    },
    "divisa_strumento": {
        text: "Divisa",
        field: "divisa_strumento",
        classes: "right"
    },
    "data_scadenza": {
        text: "Data scadenza",
        field: "data_scadenza",
        formatter: dataForTable
    },
    "trend": {
        text: "Trend",
        field: "trend",
        classes: "center",
        formatter: formatTrend
    },
    "scadenzaAdverDate": {
        text: "Data scadenza",
        field: "scadenzaAdverDate"
    },
    "fasciaRischio": {
        text: "Fascia di rischio",
        field: "fasciaRischio"
    },
    "statoProfilo": {
        text: "Stato profilo",
        field: "statoProfilo"
    },
    "documIdentificType": {
        text: "Tipologia documento",
        field: "documIdentificType"
    },
    "scadDocumDate": {
        text: "Data Scadenza",
        field: "scadDocumDate"
    },
    "plus_minus_contratto": {
        text: "Plus/Minus",
        classes: "right",
        field: "plus_minus_contratto",
        formatter: tableFormatNumber
    },
    "v_plus_minus": {
        text: "V Plus/Minus",
        field: "v_plus_minus",
        classes: "center",
        group: "group_plus_minus",
        formatter: riskState
    },

    "v_rischio_credito": {
        text: "V CR",
        classes: "center",
        group: "group_rischio_credito",
        field: "v_rischio_credito",
        formatter: riskState
    },
    "v_rischio_gray_list": {
        text: "V GREY",
        classes: "center",
        group: "group_rischio_gray_list",
        field: "v_rischio_gray_list",
        formatter: riskState
    },
    "v_rischio_mercato": {
        text: "V MKT",
        classes: "center",
        group: "group_rischio_mercato",
        field: "v_rischio_mercato",
        formatter: riskState
    }
}

class TableHeader extends PureComponent {

    render() {

        if (this.props.tableparams.categoria !== "TUTTI" && this.props.tableparams.categoria !== "RISCHI_PORTAFOGLIO")
            return (<thead><tr>
                {this.props.columns.map((v, i) => {
                   if(customerColumns[v].sortable) {
                       return <th key={i} className={(customerColumns[v].classes) ? customerColumns[v].classes : ""}><span className={"sortable " + ((this.props.state.order_field === v) ? this.props.state.order_direction : "")} onClick={() => this.props.setOrder(v)}>{customerColumns[v].text}<span className="order-arrows"></span></span></th>
                   }
                   else
                   {
                        return <th key={i} className={(customerColumns[v].classes) ? customerColumns[v].classes : ""}>{customerColumns[v].text}</th>
                   }
                   
                })
                }</tr></thead>

            )
        else {
            return (
                <thead>
                    <tr>
                        <th rowSpan="2"><span className={"sortable " + ((this.props.state.order_field === "int") ? this.props.state.order_direction : "")} onClick={() => this.props.setOrder("int")}>Int<span className="order-arrows"></span></span></th>
                        <th rowSpan="2">NDG</th>
                        <th rowSpan="2"><span className={"sortable " + ((this.props.state.order_field === "controvalore_contratto") ? this.props.state.order_direction : "")} onClick={() => this.props.setOrder("controvalore_contratto")}>CTV PTF €<span className="order-arrows"></span></span></th>
                        <th rowSpan="2" className="right">CONSU</th>
                        <th rowSpan="2" className="right"><span className={"sortable " + ((this.props.state.order_field === "saldo_conti_correnti") ? this.props.state.order_direction : "")} onClick={() => this.props.setOrder("saldo_conti_correnti")}>Liq.<span className="order-arrows"></span></span></th>
                        <th rowSpan="2" className="center">Risk Analysis</th>

                        <th colSpan={(this.props.state.group_rischio_credito) ? 5 : 1} className={"withexp " + ((this.props.state.group_rischio_credito) ? "expanded" : "")}><span onClick={() => this.props.switchGroupState("group_rischio_credito")} className="opener"></span></th>
                        <th colSpan={(this.props.state.group_rischio_gray_list) ? 5 : 1} className={"withexp " + ((this.props.state.group_rischio_gray_list) ? "expanded" : "")}><span onClick={() => this.props.switchGroupState("group_rischio_gray_list")} className="opener"></span></th>
                        <th colSpan={(this.props.state.group_rischio_mercato) ? 5 : 1} className={"withexp " + ((this.props.state.group_rischio_mercato) ? "expanded" : "")}><span onClick={() => this.props.switchGroupState("group_rischio_mercato")} className="opener"></span></th>
                        <th colSpan={(this.props.state.group_liq) ? 2 : 1} className={"withexp " + ((this.props.state.group_liq) ? "expanded" : "")}><span onClick={() => this.props.switchGroupState("group_liq")} className="opener"></span></th>

                        {(this.props.tableparams.categoria === "TUTTI") && <th rowSpan="2" className="center">Titoli in scad.</th>}
                        {(this.props.tableparams.categoria === "TUTTI") && <th rowSpan="2" className="center">Trend</th>}
                        {(this.props.tableparams.categoria === "TUTTI") && <th colSpan={(this.props.state.group_plus_minus) ? 2 : 1} className={"withexp " + ((this.props.state.group_plus_minus) ? "expanded" : "")}><span onClick={() => this.props.switchGroupState("group_plus_minus")} className="opener"></span></th>}

                    </tr>
                    <tr>
                        <th rowSpan="1" className="center">R CR</th>
                        {(this.props.state.group_rischio_credito) && <th rowSpan="1">R CR ATT</th>}
                        {(this.props.state.group_rischio_credito) && <th rowSpan="1">R CR AMM</th>}
                        {(this.props.state.group_rischio_credito) && <th rowSpan="1">Dal (R CR)</th>}
                        {(this.props.state.group_rischio_credito) && <th rowSpan="1">V CR</th>}

                        <th rowSpan="1" className="center">R GREY</th>
                        {(this.props.state.group_rischio_gray_list) && <th rowSpan="1">R GREY ATT</th>}
                        {(this.props.state.group_rischio_gray_list) && <th rowSpan="1">R GREY AMM</th>}
                        {(this.props.state.group_rischio_gray_list) && <th rowSpan="1">Dal (R GREY)</th>}
                        {(this.props.state.group_rischio_gray_list) && <th rowSpan="1">V GREY</th>}

                        <th rowSpan="1" className="center">R MKT</th>
                        {(this.props.state.group_rischio_mercato) && <th rowSpan="1">R MKT ATT</th>}
                        {(this.props.state.group_rischio_mercato) && <th rowSpan="1">R MKT AMM</th>}
                        {(this.props.state.group_rischio_mercato) && <th rowSpan="1">Dal (R MKT)</th>}
                        {(this.props.state.group_rischio_mercato) && <th rowSpan="1">V MKT</th>}

                        <th rowSpan="1" className="center">R LIQ</th>
                        {(this.props.state.group_liq) && <th rowSpan="1">Dal (R LIQ)</th>}

                        {(this.props.tableparams.categoria === "TUTTI") && <th rowSpan="1" className="center">Plus/Minus</th>}
                        {(this.props.tableparams.categoria === "TUTTI") && (this.props.state.group_plus_minus) && <th rowSpan="1" className="center">V Plus/Minus</th>}

                    </tr>
                </thead>
            )
        }
    }
}

class TableResults extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {

            order_field: "",
            order_direction: "",

            "group_rischio_credito": (this.props.params.categoria==="RISCHI_PORTAFOGLIO" && this.props.params.tipologia==="CREDITO")? true : false,
            "group_rischio_gray_list": (this.props.params.categoria==="RISCHI_PORTAFOGLIO" && this.props.params.tipologia==="GRAYLIST")? true : false,
            "group_rischio_mercato": (this.props.params.categoria==="RISCHI_PORTAFOGLIO" && this.props.params.tipologia==="MERCATO")? true : false,
            "group_liq": (this.props.params.categoria==="RISCHI_PORTAFOGLIO" && this.props.params.tipologia==="LIQUIDITA")? true : false,
            "group_plus_minus": false,
            orig_data: [],
            ndgPreferiti: []
        }
        this.switchGroupState = this.switchGroupState.bind(this);
        this.changePreferitoCb = this.changePreferitoCb.bind(this);
        this.setOrder = this.setOrder.bind(this);
    }

    switchGroupState(group) {
        this.setState({
            [group]: !this.state[group]
        })
    }

    setOrder(field) {
        this.setState({
            order_field: field,
            order_direction: (this.state.order_direction === "desc" || this.state.order_direction === "") ? "asc" : "desc"
        })
    }

    componentDidMount() {

        // Assegna lo stato iniziale dei preferiti
        this.setState(
            {   orig_data: this.props.params.data,
                ndgPreferiti:this.props.params.data.map(function(d){
            if (d.preferito) return ((d.ndgAletti)?d.ndgAletti : d.ndgCliente)
        })});

    } 

    changePreferitoCb(ndg) {
        var newPref= this.state.ndgPreferiti;
        if (newPref.indexOf(ndg)>=0)
        {
            // Rimuove il preferito
            newPref.filter(function(val) {return val !== ndg});
        }
        else
        {
            // Aggiunge il preferito
            newPref.push(ndg);
        }
        this.setState({
            ndgPreferiti: newPref
        })
    }

    render() {

        let tableparams = this.props.params,
            tData = [];
        
        
        // Applica in cascata i filtri aggiuntivi ai dati esposti per ogni riga (qualora fossero specificati)
        this.state.orig_data.forEach((row) => {
            
            let putrow = true;

            // filtro nome
            if (putrow && tableparams.nome !== "") {
                if (!(row.cliente.toLowerCase().indexOf(tableparams.nome.toLowerCase()) >= 0)) putrow = false;
            }

            // filtro ndg
            if (putrow && tableparams.ndg !== "") {
                if (!(row.ndgAletti.toLowerCase().indexOf(tableparams.ndg.toLowerCase()) >= 0)) putrow = false;
            }

            // filtro tipo_contratto
            if (putrow && tableparams.tipocontratto !== "") {
                if (!(row.tipo_contratto.toLowerCase().indexOf(tableparams.tipocontratto.toLowerCase()) === 0)) putrow = false;
            }

            // filtro alert liquidita'
            if (putrow && tableparams.dettaglio !== "") {
                if (row.consistenza_liquidita.toLowerCase() !== tableparams.dettaglio.toLowerCase()) putrow = false;
            }


            // Aggiunge, laddove possibile, le colonne calcolate
            /* TREND */
            if (row.saldo_conti_correnti && row.saldo_conti_correnti_prec) {
                row["trend"] = row.saldo_conti_correnti - row.saldo_conti_correnti_prec;
            }
            /* V CR */
            row["v_rischio_credito"] = (row.rischio_credito - row.rischio_credito_prec >= 0) ? "N" : "Y";

            /* V GREY */
            row["v_rischio_gray_list"] = (row.gray_list - row.gray_list_prec >= 0) ? "N" : "Y";

            /* V MKT  */
            row["v_rischio_mercato"] = (row.rischio_mercato_portafoglio - row.rischio_mercato_portafoglio_prec >= 0) ? "N" : "Y";

            /* V Plus/Minus  */
            row["v_plus_minus"] = (row.plus_minus_contratto - row.plus_minus_contratto_prec >= 0) ? "N" : "Y";

            // Rivede i preferiti in base allo stato
            if (row["preferito"] !== undefined) {
                row["preferito"] = (this.state.ndgPreferiti.indexOf((row.ndgAletti)? row.ndgAletti : row.ndgCliente)>=0);
            }

            
            if (putrow) tData.push(row);

        });


        // Applica l'ordinamento se richiesto (eventualmente va bene anche alle colonne calcolate)
        if (this.state.order_field !== "" && this.state.order_direction !== "") {
            tData.sort((a, b) => {
                var dataField = customerColumns[this.state.order_field].field;
                var result = (typeof a[dataField] === "string") ? ((a[dataField].toLowerCase() < b[dataField].toLowerCase()) ? -1 : 1) : ((a[dataField] < b[dataField]) ? -1 : 1)
                return ((this.state.order_direction === "asc") ? result : -result);
            })
        }

        // Filtra le colonne necessarie a seconda della visualizzazione richiesta
        let viewColumns = {
            "TUTTI": [
                "int",
                "ndg",
                "controvalore_contratto",
                "consu",
                "saldo_conti_correnti",
                "flag_rischio",
                "flag_rischio_credito",
                "rischio_credito",
                "rischio_credito_ammissibile",
                "data_rischio_credito",
                "v_rischio_credito",
                "flag_rischio_gray_list",
                "gray_list",
                "soglia_gray_list",
                "data_rischio_gray_list",
                "v_rischio_gray_list",
                "flag_rischio_mercato",
                "rischio_mercato_portafoglio",
                "rischio_mercato_ammissibile",
                "data_rischio_mercato",
                "v_rischio_mercato",
                "flag_rischio_liquidita",
                "data_rischio_liquidita",
                "flag_titoli_scad_10gg",
                "trend",
                "plus_minus_contratto",
                "v_plus_minus"
            ],
            "ASSETCLASS": [
                "int",
                "ndg",
                "controvalore_contratto",
                "consu",
                "saldo_conti_correnti",
                "flag_rischio_credito",
                "v_rischio_credito",
                "flag_rischio_gray_list",
                "v_rischio_gray_list",
                "flag_rischio_mercato",
                "v_rischio_mercato",
                "flag_rischio_liquidita",
                "flag_titoli_scad_10gg",
                "trend",
                "plus_minus_contratto"
            ],
            "RISCHI_PORTAFOGLIO": [
                "int",
                "ndg",
                "controvalore_contratto",
                "consu",
                "saldo_conti_correnti",
                "flag_rischio",
                "flag_rischio_credito",
                "rischio_credito",
                "rischio_credito_ammissibile",
                "data_rischio_credito",
                "v_rischio_credito",
                "flag_rischio_gray_list",
                "gray_list",
                "soglia_gray_list",
                "data_rischio_gray_list",
                "v_rischio_gray_list",
                "flag_rischio_mercato",
                "rischio_mercato_portafoglio",
                "rischio_mercato_ammissibile",
                "data_rischio_mercato",
                "v_rischio_mercato",
                "flag_rischio_liquidita",
                "data_rischio_liquidita"
            ],
            "CLIENTI_PATRIMONIO": [
                "int",
                "ndg",
                "controvalore_contratto",
                "consu",
                "saldo_conti_correnti",
                "flag_rischio_credito",
                "v_rischio_credito",
                "flag_rischio_gray_list",
                "v_rischio_gray_list",
                "flag_rischio_mercato",
                "v_rischio_mercato",
                "flag_rischio_liquidita",
                "flag_titoli_scad_10gg",
                "trend"
            ],
            "PLUS_MINUS": [
                "int",
                "ndg",
                "controvalore_contratto",
                "consu",
                "plus_minus_contratto",
                "v_plus_minus"
            ],
            "ALERT": {
                "CONSISTENZA_LIQUIDITA": [
                    "int",
                    "ndg",
                    "controvalore_contratto",
                    "consu",
                    "saldo_conti_correnti",
                    "trend"
                ],
                "TITOLI_SCADENZA": [
                    "int",
                    "ndg",
                    "consu",
                    "saldo_conti_correnti",
                    "titolo",
                    "controvalore_eur",
                    "quantita",
                    "prezzo_medio_carico",
                    "controvaloreCarico",
                    "divisa_strumento",
                    "data_scadenza"
                ],
                "SCADENZA_MIFID": [
                    "intestazione",
                    "ndgCode",
                    "scadenzaMifidDate",
                    "tipoClienteDes",
                    "codEsperienzaDes",
                    "rischioGrayAmm",
                    "rischioCreditoAmm",
                    "rischioMercatoAmm"
                ],
                "SCADENZA_ADVER": [
                    "intestazione",
                    "ndgCode",
                    "scadenzaAdverDate",
                    "fasciaRischio",
                    "statoProfilo"
                ],
                "SCADENZA_DOCUMENTI": [
                    "intestazione",
                    "ndgCode",
                    "documIdentificType",
                    "scadDocumDate"
                ],
                "COMPLEANNO": [
                    "intestazione",
                    "ndgCode",
                    "nascitaDate"
                ]
            }
        };


        /* Elenco brutale dei dati a disposizione */
        /*  console.log(Object.keys(tData[0]))  */

        // Determina cosa mappare (nel caso di Alert sono parametri differenti)
        let columns = (tableparams.categoria === "ALERT") ? viewColumns[tableparams.categoria][tableparams.tipologia] : viewColumns[tableparams.categoria];

        return (
            <div>
                <h2>Tabella dei risultati</h2>
                {tData.length <= 0 &&
                    // Caso senza dati
                    <Alert color="secondary"><p className="mb-0">La ricerca non ha prodotto risultati.</p></Alert>
                }
                {tData.length > 0 &&

                    // Caso con dati
                    <div className="table-scroller">
                        <table className="table">
                            <TableHeader columns={columns} setOrder={this.setOrder} tableparams={tableparams} switchGroupState={this.switchGroupState} state={this.state}></TableHeader>
                            <tbody>
                                {tData.map((row, i) => {

                                    return (<tr key={i + Math.random()}>
                                        {
                                            columns.map((col, colindex) => {

                                                // Renderizza il dato a seconda degli attributi specificati
                                                let cellcontent = row[customerColumns[col].field];
                                                if (customerColumns[col].formatter) {
                                                    cellcontent = customerColumns[col].formatter(row[customerColumns[col].field], row, ()=>this.changePreferitoCb(row.ndgAletti))
                                                }
                                                // Determina se la colonna deve essere mostrata oppure no a seconda del tipo
                                                let showCol = true;
                                                if ((tableparams.categoria === "TUTTI" || tableparams.categoria === "RISCHI_PORTAFOGLIO") && customerColumns[col].group) {
                                                    showCol = this.state[customerColumns[col].group];
                                                }

                                                return showCol && <td key={colindex} className={customerColumns[col].classes}>{cellcontent}</td>
                                            })
                                        }
                                    </tr>)
                                })}
                            </tbody>
                        </table>
                    </div>
                }
            </div>
        )
    }


}

export default TableResults;