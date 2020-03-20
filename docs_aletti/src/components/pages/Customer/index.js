import React, { PureComponent } from 'react';
import { Row, Col, Button } from 'reactstrap';
/* import withAjax from 'components/wrappers/withAjax'; */
/* Parti della scheda cliente */
import { formatNumber } from 'functions/tableFunctions';
import BtnPreferito from 'components/parts/BtnPreferito';
import DatiAnagrafici from './parts/datiAnagrafici';
import AssetClass from './parts/assetClass';
import PatrimonioTotale from './parts/patrimonioTotale';
import Mifid from './parts/mifid';
import Consu from './parts/consu';
/* import Documenti from './parts/documenti'; */
/* import Spalla from './parts/spalla';*/
import BoxAlert from './parts/boxAlert';
import BoxCompleanno from './parts/boxCompleanno';
import BoxInteressi from './parts/boxInteressi';
import BoxRelazioni from './parts/boxRelazioni';
import getData from 'functions/getData';

import "./style.scss"

class Customer extends PureComponent {
    render() {

        let customerData = (this.props.data && this.props.data.results) ? this.props.data.results : {};

        // Rielaborazione ed "arricchimento" dei dati ricevuti
        customerData.genericNum = formatNumber(Math.random() * 10000000, 2);

        // Dati per grafici e legende
        customerData.assetClassData = [];
        if (customerData.assetClass) {
            Object.keys(customerData.assetClass).forEach(function (obj) {
                customerData.assetClassData.push({
                    tipologia: obj,
                    perc: parseFloat(customerData.assetClass[obj]),
                    colore: "da definire"
                })
            });
        }

        // ASSET CLASS
        customerData.dataProviderAsset = {
            titleLabel: "Tipologia",
            titleField: "tipologia",
            valueLabel: "%",
            valueField: "perc",
            colorField: "colore",
            balloonText: "[[title]]: <strong>[[percents]]%</strong>",
            dataProvider: customerData.assetClassData,
            idGrafico: "grafico_asset"
        };

        const intestazione = "Cliente " + customerData.anagraficaRidotta + " - NDG: " + this.props.ndg;

        return (
            <div>
                <h1><BtnPreferito preferito={customerData.preferito} ndg={this.props.ndg}/> Cliente <span
                    className="customer-name">{ customerData.anagraficaRidotta } - NDG: { this.props.ndg } </span></h1>
               
                    <div>
                        <DatiAnagrafici data={ customerData }/>
                        <Row>
                            <Col lg="12" xl="8">
                                <Row>
                                    <Col lg="12" xl="6">
                                        <PatrimonioTotale data={ customerData.patrimonioTotale }/>
                                    </Col>
                                    <Col lg="12" xl="6">
                                        <AssetClass data={ customerData }/>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Mifid data={ customerData }/>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col lg="12">
                                        { customerData.rischioPortafoglio && (Object.keys(customerData.rischioPortafoglio).length>0) &&
                                        <Consu data={ customerData.rischioPortafoglio } ndg={ this.props.ndg }
                                               intestazione={ intestazione }/> }
                                    </Col>
                                </Row>
                                <div className="btn-console" style={ { display: "none" } }>
                                    <Button className="right">Vai a R-Evolution</Button>
                                </div>
                            </Col>
                            <Col lg="12" xl="4">
                                <div className="relazioni">
                                    {/* <Spalla data={customerData} params={this.props.params}/>*/ }
                                    <BoxAlert alert={ customerData.alert }></BoxAlert>
                                    <BoxCompleanno dataCompleanno={ customerData.dataCompleanno }
                                                   namecliente={ customerData.anagraficaRidotta }
                                                   mailCliente={ customerData.email }/>
                                    <BoxInteressi ndg={ this.props.ndg }/>
                                    <BoxRelazioni ndg={ this.props.ndg }/>
                                </div>
                            </Col>

                        </Row>
                    </div>
                

            </div>)
    }
}

/* const CustomerWithAjax = withAjax(Customer, "customer"); */

export default class extends PureComponent {
    state = {
        isLoading: true,
        data: []
    };

    componentDidMount() {
        getData({
            url: {
                "svil": "/json_data/customer/datibase.json",
                "prod": "/promotori/dashboard/rest/schedacliente/datibase"
            },
            data: { ndg: this.props.match.params.ndg },
            success: (dati) => {
                this.setState({
                    isLoading: false,
                    data: dati
                })
            }
        })
    }

    render() {

        /*
        let params = {
            ndg: this.props.match.params.ndg
        }
        */
        /* return <CustomerWithAjax initialData={[]} initialLoading={true} params={params} /> */
        return (<Customer data={ this.state.data } ndg={ this.props.match.params.ndg }
                          className={ this.state.isLoading && "loading" }/>)
    }
}
