import React, { PureComponent } from 'react';
import DonutChart from 'components/parts/DonutChart';
import SerialChart from 'components/parts/SerialChart';
import { Col, Row } from "reactstrap";
import GraphLegenda from 'components/dashboard/commons/GraphLegenda';
import { attribColor, remapData, formatNumber } from 'functions/tableFunctions';

class WidgetRaccolta extends PureComponent {

  render() {

    let wdgData = [];

    if (this.props.data.results && this.props.data.results.totali) {

      let mappedData = this.props.data.results.totali,
        modalDataKeys = this.props.data.results.risultati;


      Object.keys(mappedData).forEach(function (key) {
        wdgData.push({
          "tipologia": mappedData[key].label,
          "perc": mappedData[key].records,
          "colore": mappedData[key].colore,
          "modalTitle": "Tipologia: " + key + " (" + formatNumber(mappedData[key].records, 2) + "%)",
          "modalType": "customers",
          "modalColumns": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti", "flag_rischio"],
          "modalFilter": "/customers/raccolta/" + key,
          "modalData": remapData(modalDataKeys[key], 5),
          "vediTuttiData": {
            categoria: "ASSETCLASS",
            tipologia: key
          }
        });

      });
    }

    let dataRaccolta =
    {
      titleLabel: "Tipologia",
      titleField: "tipologia",
      valueLabel: "%",
      balloonText: "[[title]]: <strong>[[percents]]%</strong>",
      valueField: "perc",
      colorField: "colore",
      dataProvider: wdgData,
      idGrafico: "grafico_raccolta",
    }


    let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;

    dataRaccolta.dataProvider = attribColor(dataRaccolta.dataProvider);

    return (
      <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
        <div className="widget-body">
          <Row>
            <Col lg="12" xl="5">
              <div className="d-none d-xl-block"><DonutChart dataToShow={dataRaccolta} hasModalConnected={!this.props.hiddenMode} /></div>
              <div className="d-block d-xl-none"><SerialChart dataToShow={dataRaccolta} hasModalConnected={!this.props.hiddenMode} /></div>
            </Col>
            <hr className="d-block d-xl-none" />
            <Col lg="12" xl="7">
              <div className="scrollable"><GraphLegenda dataToShow={dataRaccolta} hiddenMode={this.props.hiddenMode} /></div>
            </Col>
          </Row>
        </div>
        {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
      </div>
    )
  }
}

export default WidgetRaccolta
