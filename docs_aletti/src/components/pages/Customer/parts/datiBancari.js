import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
import withAjax from 'components/wrappers/withAjax';
import DettaglioConti from "./dettaglioConti";
import { formatNumber } from 'functions/tableFunctions';
import HelpBtn from 'components/parts/Help';

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{ formatNumber(val, 2) }</span> : formatNumber(val, 2);
}

class DatiBancari extends PureComponent {
    render() {
        //Elenco tipologie
        let tipologie = (this.props.data && this.props.data.results) ? Object.keys(this.props.data.results) : [],
            tpresults = (this.props.data && this.props.data.results) ? this.props.data.results : [],
            conti = [], ndg = this.props.params.ndg;

        return (
            <div className="with-help">
                <HelpBtn arg="datibancari"/>
                <h2>Dati bancari</h2>
                <Row>
                    <Col xs="12">
                        <div className="react-bootstrap-table horizontal-scroller mb-3">
                            <table className="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tipologia</th>
                                        <th>Descrizione</th>
                                        <th>Filiale</th>
                                        <th>Iban</th>
                                        <th className="right">Importo</th>
                                        <th>Divisa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                        tipologie.map(function (obj) {
                                            let tpdata = (tpresults[obj]) ? tpresults[obj] : "";
                                            return (
                                                tpdata.map(function (rowdata, x) {
                                                    if (obj === "CCO") conti[rowdata.numeroConto] = {
                                                        "numeroConto": rowdata.numeroConto,
                                                        "ndg": ndg,
                                                        "filiale": rowdata.filiale
                                                    };
                                                    return (
                                                        <tr key={ "rowconto" + x }>
                                                            { x === 0 && <td rowSpan={ tpdata.length }>{ obj }</td> }
                                                            <td>{ rowdata.description }</td>
                                                            <td>{ rowdata.filiale }</td>
                                                            <td>{ rowdata.iban }</td>
                                                            <td className="right">{ tableFormatNumber(rowdata.controvalore) }</td>
                                                            <td>{ rowdata.divisa }</td>
                                                        </tr>
                                                    )
                                                })
                                            )
                                        })
                                    }
                                </tbody>
                            </table>
                        </div>
                    </Col>
                </Row>

                <DettaglioConti conti={ conti } intestazione={ this.props.intestazione }/>
            </div>
        )
    }
}

const DatiBancariWithData = withAjax(DatiBancari, "customer_datibancari");

export default class extends PureComponent {
    render() {
        let ndg = this.props.ndg,
            tipocontratto = this.props.tipocontratto;

        if (ndg && tipocontratto) {
            return <DatiBancariWithData initialData={ [] } initialLoading={ true }
                                        intestazione={ this.props.intestazione }
                                        params={ { "ndg": ndg, "tipologiaContratto": tipocontratto } }/>
        } else {
            return ("Nessun dato disponibile")
        }
    }
}
