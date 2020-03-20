import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
import DonutChart from 'components/parts/DonutChart';
import { formatNumber } from 'functions/tableFunctions';

export default class extends PureComponent {
    render() {
        let patrimonioTotale = this.props.data,
            graphData;

        if (patrimonioTotale) {
            graphData = [
                {
                    "nome": "Saldo contabile",
                    "valore": patrimonioTotale.saldoContabile,
                    "color": "#fdd400"
                },
                {
                    "nome": "Titoli in portafoglio",
                    "valore": patrimonioTotale.titoliInPortafoglio,
                    "color": "#67b7dc"
                }
            ];

            patrimonioTotale.dataProviderPatrimonioTotale = patrimonioTotale.saldoContabile + patrimonioTotale.titoliInPortafoglio;
        }

        let dataProviderPatrimonio =
            {
                titleLabel: "Tipologia",
                titleField: "nome",
                valueLabel: "valore",
                valueField: "valore",
                colorField: "color",
                dataProvider: graphData,
                balloonText: "[[title]]: <strong>[[percents]]%</strong>",
                idGrafico: "grafico_patrimonio"
            };

        return (
            <div className="bordered-block user-widget">
                <h2>Patrimonio totale</h2>
                <Row>
                    <Col lg="4"><DonutChart dataToShow={ dataProviderPatrimonio }/></Col>
                    <Col lg="8">
                        <div className="react-bootstrap-table horizontal-scroller">
                            <table className="table table-bordered legenda">
                                <thead>
                                    <tr>
                                        <th/>
                                        <th className="right">Importo (EUR)</th>
                                        <th className="right">%</th>
                                    </tr>
                                </thead>
                                { patrimonioTotale && <tbody>
                                    <tr>
                                        <td><span className="has-dot"><span className="dot"
                                                                            style={ { backgroundColor: "#fdd400" } }/><span>Saldo contabile</span>{/* <span className="date">al 01/05/2019</span> */ }</span>
                                        </td>
                                        <td className="right">{ formatNumber(patrimonioTotale.saldoContabile, 2) }</td>
                                        <td className="right">{ formatNumber(patrimonioTotale.saldoContabile / patrimonioTotale.dataProviderPatrimonioTotale * 100, 2) }</td>
                                    </tr>
                                    <tr>
                                        <td>
                                                <span className="has-dot"><span className="dot"
                                                                                style={ { backgroundColor: "#67b7dc" } }/><span>Titoli in portafoglio</span>{/* <span className="date">al 01/05/2019</span> */ }</span>
                                        </td>
                                        <td className="right">{ formatNumber(patrimonioTotale.titoliInPortafoglio, 2) }</td>
                                        <td className="right">{ formatNumber(patrimonioTotale.titoliInPortafoglio / patrimonioTotale.dataProviderPatrimonioTotale * 100, 2) }</td>
                                    </tr>
                                    <tr className="totale">
                                        <td><strong>Totale</strong></td>
                                        <td className="right">
                                            <strong>{ formatNumber(patrimonioTotale.dataProviderPatrimonioTotale, 2) }</strong>
                                        </td>
                                        <td/>
                                    </tr>
                                </tbody>
                                }
                            </table>
                        </div>
                    </Col>
                </Row>
            </div>
        )
    }
}
