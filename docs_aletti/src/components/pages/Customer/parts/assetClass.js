import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
import DonutChart from 'components/parts/DonutChart';
import { attribColor, formatNumber } from 'functions/tableFunctions';
import HelpBtn from 'components/parts/Help';

export default class extends PureComponent {

    render() {

        let customerData = this.props.data,
            rowindex = 0

        if (customerData.dataProviderAsset.dataProvider) customerData.dataProviderAsset.dataProvider = attribColor(customerData.dataProviderAsset.dataProvider);

        return (
            <div className="bordered-block user-widget with-help">
                <HelpBtn arg="categorieinvest" />
                <h2>Categorie di investimento</h2>
                <Row>
                    <Col lg="4"><DonutChart dataToShow={customerData.dataProviderAsset} hasModalConnected={false} /></Col>
                    <Col lg="8">
                        <div className="react-bootstrap-table horizontal-scroller">
                            <table className="table table-bordered legenda">
                                <thead>
                                    <tr>
                                        <th>Tipologia</th>
                                        <th className="right">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {(customerData.dataProviderAsset.dataProvider && customerData.dataProviderAsset.dataProvider.length > 0)
                                        ?
                                        customerData.dataProviderAsset.dataProvider.map(obj => {
                                            rowindex += 1;
                                            return (
                                                <tr key={rowindex}>
                                                    <td><span className="has-dot"><span className="dot"
                                                        style={{ backgroundColor: obj.colore }} />{obj.tipologia}</span>
                                                    </td>
                                                    <td className="right">{formatNumber(obj.perc, 2)}</td>
                                                </tr>
                                            )
                                        })
                                        :
                                        <tr className="">
                                            <td colSpan="2">Nessun dato disponibile</td>
                                        </tr>
                                    }
                                </tbody>
                            </table>
                        </div>
                    </Col>
                </Row>
            </div>
        )
    }
}
