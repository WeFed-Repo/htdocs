import 'amcharts3/amcharts/amcharts';
import 'amcharts3/amcharts/pie';
import React, { PureComponent } from 'react';
import AmCharts from '@amcharts/amcharts3-react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'

import './style.css';

const DonutChartBasicConf = {
    type: "pie",
    balloonText: "[[title]]<br><span><b>[[value]]</b> ([[percents]]%)</span>",
    labelText: "",
    pullOutRadius: "0%",
    percentFormatter: { precision: 2, decimalSeparator: ",", thousandSeparator: "." },
    labelsEnabled: false,
    pullOutDuration: 0,
    startDuration: 0,
    innerRadius: "75%",
    fontSize: 14,
    processTimeout: 4,
    theme: "default",
    addClassNames: true
};

// Predispone la modale qualora fosse necessaria

class DonutChart extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            isModalOpened: false,
            modalParams: null,
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
        this.openModal = this.openModal.bind(this);
    }

    closeModal() {
        this.setState({
            isModalOpened: false,
            modalParams: null
        })
    }

    openModal(e) {
        let dp = e.dataItem.dataContext;
        this.setState({
            isModalOpened: true,
            modalParams: dp
        })
    }

    // Inserisce i parametri mancanti nella configurazione "totale"
    render() {
        var donutChartConf = Object.assign({}, DonutChartBasicConf, {
            dataProvider: this.props.dataToShow.dataProvider,
            titleField: this.props.dataToShow.titleField,
            valueField: this.props.dataToShow.valueField,
            colorField: this.props.dataToShow.colorField,
            balloonText: this.props.dataToShow.balloonText,
            listeners: [{
                event: "clickSlice",
                method: this.openModal
            }]
        });
        if (this.props.dataToShow.dataProvider && this.props.dataToShow.dataProvider.length > 0) {
            return (
                <div className="donutchart">
                    { (this.props.hasModalConnected) &&
                    <DefaultModal show={ this.state.isModalOpened } close={ this.closeModal }
                                  params={ this.state.modalParams }><WidgetModalBody { ...this.state.modalParams }/></DefaultModal> }
                    <AmCharts.React className="donutchart-react" options={ donutChartConf }/>
                </div>
            )
        } else {
            return (<div className="noDisp"><span>Nessun dato disponibile</span></div>)
        }

    }
}

export default (DonutChart);
