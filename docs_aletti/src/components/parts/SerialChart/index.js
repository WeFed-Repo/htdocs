import 'amcharts3/amcharts/amcharts';
import 'amcharts3/amcharts/serial';
import React, { PureComponent } from 'react';
import AmCharts from '@amcharts/amcharts3-react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'
import './style.css';

const SerialChartBasicConf = {
  type: "serial",
  categoryAxis: {
    labelsEnabled: false,
    ignoreAxisWidth: true,
    autoGridCount: false,
    gridThickness: 0,
    axisThickness:1
  },
  valueAxes: [
    {
      showFirstLabel: false,
      axisFrequency: 1,
      gridCount:1,
      title: "",
      tickLength: 5,
      gridThickness:1,
      axisOffset:0,
      axisThickness:1,
      labelsEnabled:true
    }
  ]

}

class SerialChart extends PureComponent {

    constructor (props) {
        super(props);
        this.state = {
          isModalOpened: false,
          modalParams: null,
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
    }

    openModal (e) {
        let dp = e.item.dataContext;
        this.setState({
          isModalOpened: true,
          modalParams: dp
        })
    }
    closeModal () {
        this.setState({
          isModalOpened: false,
          modalParams: null
        })
    }

    // Inserisce i parametri mancanti nella configurazione "totale"
    render() {

      var serialChartConf = Object.assign({}, SerialChartBasicConf, {
        dataProvider: this.props.dataToShow.dataProvider,
        categoryField: this.props.dataToShow.titleField,
        rotate: (this.props.rotate === "true")? true : false,
        graphs: [{
          "valueField" : this.props.dataToShow.valueField,
          "balloonText": "[[category]]<br><span><b>[[value]]</b></span>",
          "type":"column",
          "colorField": this.props.dataToShow.colorField,
          "fillAlphas": 1,
          "borderAlphas":0,
          "labelsEnabled":false,
          "axesThickness": 1,
          "lineThickness":0,
          "columnWidth":0.8,
          "showHandOnHover": true
        }],
        listeners: [{
          event: "clickGraphItem",
          method: this.openModal
        }]
      });
      if (this.props.dataToShow.dataProvider && this.props.dataToShow.dataProvider.length>0) {

          return (
            <div className="serialchart">
              {(this.props.hasModalConnected) && <DefaultModal show={this.state.isModalOpened} close={this.closeModal} params={this.state.modalParams}><WidgetModalBody {...this.state.modalParams}/></DefaultModal>}
              <AmCharts.React className="serialchart-react" options={serialChartConf}/>
            </div>
        )
      }
      else {
        return (<div className="noDisp"><span>Nessun dato disponibile</span></div>)
      }

    }
}

export default (SerialChart);
