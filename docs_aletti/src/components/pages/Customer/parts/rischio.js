import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
// import DefaultOutput from "components/parts/DefaultOutput";
import { deNull, formatNumber } from 'functions/tableFunctions';
import HelpBtn from 'components/parts/Help';

export default class extends PureComponent {

    render() {

        let rischioData = this.props.data;

        // Scomposizione dei valori del rischio
        if (rischioData) {

            /*
                rischioAmmissibileLiquidita: "0 - 12 mesi: 0%; 1 - 3 anni: 0%; 3 - 5 anni: 10%; 5 - 10 anni: 40%; Oltre 10 anni: 50%"

                rischioAttualeLiquidita: "0 - 12 mesi: 97.5925%; 1 - 3 anni: 0%; 3 - 5 anni: 0%; 5 - 10 anni: 2.4075%; Oltre 10 anni: 0%"

            */

            /* Scomposizione del rischio di liquidita */
            let rischioLiquiditaAmmissibile = (rischioData.rischioAmmissibileLiquidita) ? rischioData.rischioAmmissibileLiquidita.split(";") : [],
                rischioLiquiditaAttuale = (rischioData.rischioAttualeLiquidita) ? rischioData.rischioAttualeLiquidita.split(";") : [];

            return (
                <Row>
                    <Col xs="12">
                        <div className="with-help">
                            <HelpBtn arg="rischioport"/>
                            <h2 className="table-title">Rischi in portafoglio</h2>
                            <div className="react-bootstrap-table horizontal-scroller mb-3">
                                <table className="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colSpan="2"/>
                                            <th className="right">Rischio attuale</th>
                                            <th className="right">Rischio ammissibile</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td colSpan="2">Rischio di mercato</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAttualeMercato, 2)) }</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAmmissibileMercato, 2)) }</td>
                                        </tr>

                                        <tr>
                                            <td colSpan="2">Rischio di credito</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAttualeCredito, 2)) }</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAmmissibileCredito, 2)) }</td>
                                        </tr>

                                        <tr>
                                            <td colSpan="2">Rischio greylist</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAttualeGrayList, 2)) }</td>
                                            <td className="right">{ deNull(formatNumber(rischioData.rischioAmmissibileGrayList, 2)) }</td>
                                        </tr>

                                        { rischioLiquiditaAmmissibile.length > 0 &&
                                        <tr>
                                            <td rowSpan={ rischioLiquiditaAmmissibile.length + 1 }>Rischio di
                                                liquidità
                                            </td>
                                        </tr>
                                        }
                                        {
                                            rischioLiquiditaAmmissibile.map(function (obj, i) {
                                                let ramm = obj.split(": ");
                                                let ratt = rischioLiquiditaAttuale[i].split(": ");
                                                return (
                                                    <tr key={ i }>
                                                        <td>{ ramm[0] }</td>
                                                        <td className="right">{ ramm[1] }</td>
                                                        <td className="right">{ ratt[1] }</td>
                                                    </tr>
                                                )
                                            })
                                        }
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </Col>
                </Row>
            )
        } else {
            return ("Dati rischio non pervenuti")
        }
    }
}
