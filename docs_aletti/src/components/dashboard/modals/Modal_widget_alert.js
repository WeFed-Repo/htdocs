import React, {PureComponent} from 'react';
import withAjax from 'components/wrappers/withAjax';
import DefaultTable from 'components/parts/DefaultTable';
import {Button} from 'reactstrap';
import {NavLink} from 'react-router-dom';
import {riskState,formatNumber} from 'functions/tableFunctions';
import momentIt from 'functions/rad/momentIt'

function tableFormatNumber(val) {
    return (val<0) ? <span className="negativo">{formatNumber(val,2)}</span> : formatNumber(val,2);
}

function formatDate(val) {
    return momentIt(new Date(val)).format("DD/MM/YYYY");
}

function formatCliente(cell,row){
    return(cell);
    /*
    return <NavLink to={"/customer/" + row.id} ><span className="table-link">{row.cognome + " " + row.nome}</span></NavLink>
    */
}

class ModalBody extends PureComponent {
    render() {
        // Modifica i dati per la visualizzazione della tabella
        let tableData = this.props.data.map(function(obj) {
            obj["cliente"] = obj.cognome + " " + obj.nome;

            /* Forzature per demo */
            obj.alertmifid = -1;
            obj.datamifid = momentIt(new Date() - (Math.random()*5));;

            obj.tipodocumento = "Lorem ipsum dolor sit";
            obj.datascadenza = momentIt(new Date()-1);

            obj.adeverrischio = -1;
            obj.titolo = "Anima lorem ipsum dolor sit";
            obj.isin = "CA931928921";

            obj.liquidita = - Math.random() * 100000;

            return(obj);
        });

        /* Set di colonne diverso a seconda dell'id della modale */
        let columns = [{
            text: 'Int',
            dataField: 'cliente',
            sortName: 'cliente',
            sort: true,
            formatter: formatCliente
        },
        {
            text: 'NDG',
            dataField: 'ndg',

        },
        {
            text: 'CONSU',
            dataField: 'tipocontr',
        }];

        switch(this.props.params.mId) {

            case "mifid":
                columns.push({
                    text: 'Scadenza MIFID',
                    dataField: 'datamifid',
                    formatter: formatDate,
                    classes: "right",
                    headerClasses: "right",
                });
                columns.push({
                    text: 'Stato MIFID',
                    dataField: 'alertmifid',
                    formatter: riskState,
                    classes: "center",
                    headerClasses: "center",
                });
            break;

            case "documenti":
                columns.push({
                    text: 'Tipo documento',
                    dataField: 'tipodocumento'
                });
                columns.push({
                    text: 'Data scadenza',
                    dataField: 'datascadenza',
                    formatter: formatDate,
                    classes: "right",
                    headerClasses: "right",
                });

            break;

            case "adever":
                columns.push({
                    text: 'Fascia di rischio',
                    dataField: 'adeverrischio',
                    formatter: riskState,
                    classes: "center",
                    headerClasses: "center",
                });
                columns.push({
                    text: 'Data scadenza',
                    dataField: 'datascadenza',
                    formatter: formatDate,
                    classes: "right",
                    headerClasses: "right",
                });
                columns.push({
                    text: 'Stato Profilo',
                    dataField: 'statoProfilo',
                    classes: "right",
                    headerClasses: "right",
                });

            break;

            case "titoli":
                columns.push({
                    text: 'Titolo',
                    dataField: 'titolo'
                });
                columns.push({
                    text: 'Isin',
                    dataField: 'isin'

                });

                columns.push({
                    text: 'CTV PTF (EUR)',
                    dataField: 'ctvptf',
                    formatter: formatNumber,
                    classes: "right",
                    headerClasses: "right",
                });

                columns.push({
                    text: 'Data scadenza',
                    dataField: 'datascadenza',
                    formatter: formatDate,
                    classes: "right",
                    headerClasses: "right",
                });


            break;

            case "greylist":

                columns.push({
                    text: 'CTV PTF (EUR)',
                    dataField: 'ctvptf',
                    formatter: formatNumber,
                    classes: "right",
                    headerClasses: "right",
                });

                columns.push({
                    text: 'Liquidità',
                    dataField: 'liquidita',
                    formatter: tableFormatNumber,
                    classes: "right",
                    headerClasses: "right",
                });

                columns.push({
                    text: 'Grey list',
                    dataField: 'alertmifid',
                    formatter: riskState,
                    classes: "center",
                    headerClasses: "center",
                });

            break;


            case "liquidita":
                columns.push({
                    text: 'Liquidità',
                    dataField: 'liquidita',
                    formatter: tableFormatNumber,
                    classes: "right",
                    headerClasses: "right",
                });

            break;

            default:

            break;
        }



        return (
            <div className="listaClienti">
                <DefaultTable data={tableData} columns={columns} />
            </div>
        );
    }
}

const ModalTableWithData = withAjax(ModalBody,"dashboard_modal_customers_data");

export default class extends PureComponent {
  render() {

    /* PARAMETRI */
    let mParams = {
        "mType": this.props.modalType,
        "mId":this.props.id
    }

    return (
        <div>
            <ModalTableWithData initialData={[]} initialLoading={true} params={mParams} />
            <NavLink className="widget-title" to={"/customers/alert/" + this.props.desc}><Button className="right" >Vedi tutti</Button></NavLink>
        </div>
    )
  }
}
