import React, {PureComponent} from 'react';
import DefaultTable from 'components/parts/DefaultTable';
import {Button,UncontrolledCollapse} from 'reactstrap';
import {NavLink} from 'react-router-dom';
import momentIt from 'functions/rad/momentIt';

function dateFormatterTable (val) {

    let dateFormatted;
    if (val) {
        dateFormatted = momentIt(val).format("DD-MM-YYYY");
    }

    return (dateFormatted)
}

const customerColumns = [
    {text: 'ID Proposta', dataField: 'cod_proposta', description: "Id Proposta"},
    {text: 'Data creazione', dataField: 'data_creazione', description: "Data creazione", formatter: dateFormatterTable},
    {text: 'Data scadenza', dataField: 'data_scadenza', description: "Data scadenza", formatter: dateFormatterTable},
    {text: "NDG", dataField: "ndgAletti", description: "Numero Direzione Generale. Identifica in modo univoco il cliente."},
    {text: 'Int', dataField: 'int',description: "Nominativo intestatario/i del rapporto"},
     /* {text: "NDG DUO", dataField: "ndgDuo", description: "NDG del Duo"},
    {text: "Int. DUO", dataField: "nominativo_duo", description: "Nominativo Duo"}, */
    {text: "Stato proposta", dataField: "codice_stato", description: "Sottostato della proposta d'investimento"}
    /* {text: 'Data accettazione', dataField: 'data_accettazione', description: "Data accettazione", formatter: dateFormatterTable},
    {text: "CONSU", dataField: "tipo_contratto", description: "Tipologia Contratto di Consulenza in essere","classes":"center",headerClasses:"center"} */
    ]

class ModalBody extends PureComponent {
    render() {

        // Arricchisce i dati per la visualizzazione della tabella e popola eventuali campi calcolati
        let tableData = this.props.params.modalData.map(function(obj,val) {

            obj["int"] = <span>{(obj.preferito)? <i className="icon icon-star_fill"></i> :""}<NavLink to={"/customer/" + obj.ndgAletti} ><span className="table-link">{obj.cliente}</span></NavLink></span>;
            obj["v_plus_minus"] = ((obj.plus_minus_contratto - obj.plus_minus_contratto_prec)>0) ? "Y" : "N";
            obj["id"] = val;

            return(obj);
        });


        return (
            <div className="listaClienti">
                <DefaultTable data={tableData} columns={customerColumns} />
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
                        {this.props.acronimi.map(function(obj,i){
                            return(
                                <li key={i}><strong>{obj.text}</strong>: { obj.description }</li>
                            )
                        }) }
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
        "modalFilter": (this.props.modalFilter) ? (this.props.modalFilter) : "customers"
    }

    return (
        <div>
            <ModalBody params={mParams} />
            {/* <NavLink className="widget-title" to={mParams.modalFilter}><Button className="right btn-primary" >Vedi tutti</Button></NavLink> */}
            <LegendaAcronimi acronimi={customerColumns} />
        </div>
    )
  }
}
