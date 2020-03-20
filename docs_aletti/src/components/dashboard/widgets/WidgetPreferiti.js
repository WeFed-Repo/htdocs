import React, { PureComponent } from 'react';
import { Col, Row, Button } from "reactstrap";
import { NavLink } from 'react-router-dom';
import BtnPreferito from "components/parts/BtnPreferito"
import { riskState, formatNumber, remapData } from 'functions/tableFunctions';

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{formatNumber(val, 2)}</span> : formatNumber(val, 2);
}

class WidgetPreferiti extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {
            isModalOpened: false,
            modalParams: null,
            dataPreferiti: []
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
    }

    openModal(params) {
        this.setState({
            isModalOpened: true,
            modalParams: params
        })
    }

    closeModal() {
        this.setState({
            isModalOpened: false,
            modalParams: null
        })
    }

    render() {
        let dataPreferiti = [];
        
        if (this.props.data && this.props.data.results && this.props.data.results.risultati) { 
            dataPreferiti = remapData(this.props.data.results.risultati).filter(function(v){return v.preferito}).slice(0,5);
        }

        let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;


        return (
            <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
                <div className="widget-body">
                    <div className="scrollable">
                        <Row>
                            <Col xs="12">
                                {
                                    dataPreferiti && dataPreferiti.length > 0 && 
                                        <table className="table">
                                        <thead>
                                            <tr>
                                                <th>Int</th>
                                                <th>Consu.</th>
                                                <th className="right">CTV PTF (eur)</th>
                                                <th className="right">Liq</th>
                                                <th className="center" style={{ display: "none" }}>Alert</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {
                                                dataPreferiti.map((cliente, i) => {
                                                    if (i < 5) {
                                                        cliente.modalTitle = "Cliente: " + cliente.cliente;
                                                        cliente.modalType = "widget_preferiti";
                                                        return (
                                                            <tr key={i}>
                                                                <td><span className="with-preferito">
                                                                    <BtnPreferito ndg={cliente.ndgAletti} callback={this.props.refreshFunction} preferito={cliente.preferito}/><NavLink
                                                                        to={"/customer/" + cliente.ndgAletti}><span
                                                                        className="table-link">{cliente.cliente}</span></NavLink>
                                                                    </span>
                                                                </td>
                                                                <td>{cliente.tipo_contratto}</td>
                                                                <td className="right">{tableFormatNumber(cliente.controvalore_contratto)}</td>
                                                                <td className="right">{tableFormatNumber(cliente.saldo_conti_correnti)}</td>
                                                                <td className="center"
                                                                    style={{ display: "none" }}>{riskState(cliente.alert)}</td>
                                                            </tr>)
                                                    }
                                                })
                                            }
                                        </tbody>
                                    </table>
                                }
                                {
                                (!dataPreferiti || dataPreferiti.length === 0) &&

                                <div className="imposta-widget">
                                    <p>Nessun preferito selezionato</p>
                                    <NavLink to="/customerssearch"><Button className="btn-primary">Imposta preferiti</Button></NavLink>
                                </div>                                                                
                                }

                                
                            </Col>
                        </Row>
                    </div>
                </div>
                {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
            </div>

        );

    }

}

export default WidgetPreferiti;
