import React, { PureComponent } from 'react';
import { Col, Row } from "reactstrap";
import SerialChart from 'components/parts/SerialChart';
import GraphLegenda from 'components/dashboard/commons/GraphLegenda'
import { attribColor, remapData } from 'functions/tableFunctions';


class WidgetRischio extends PureComponent {
  render() {

    let wdgData = [];

    if (this.props.data.results && this.props.data.results.totali) {

      let mappedData = this.props.data.results.totali,
        modalDataKeys = this.props.data.results.risultati;

      Object.keys(mappedData).forEach(function (key) {

        let modalColumns = {
          "MERCATO": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti", "flag_rischio_mercato"],
          "GRAYLIST": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti", "flag_rischio_gray_list"],
          "CREDITO": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti", "flag_rischio_credito"],
          "LIQUIDITA": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti", "flag_rischio_liquidita"],
        }
        wdgData.push({
          "tiporischio": mappedData[key].label,
          "ncli": mappedData[key].records,
          "colore": mappedData[key].colore,
          "modalTitle": "Rischio: " + mappedData[key].label + " (" + mappedData[key].records + ")",
          "modalType": "customers",
          "modalColumns": modalColumns[key],
          "modalData": remapData(modalDataKeys[key], 5),
          "vediTuttiData": {
            categoria: "RISCHI_PORTAFOGLIO",
            tipologia: key
          }
        });
      });

    }


    let dataRischio =
    {
      titleLabel: "Tipo rischio",
      titleField: "tiporischio",
      valueLabel: "N. Cli",
      valueField: "ncli",
      colorField: "colore",
      dataProvider: wdgData,
      idGrafico: "grafico_rischio"
    };

    dataRischio.dataProvider = attribColor(dataRischio.dataProvider);

    let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;

    return (
      <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
        <div className="widget-body"><Row>
          <Col lg="12" xl="5">
            <div className="d-none d-xl-block"><SerialChart dataToShow={dataRischio} rotate="true" hasModalConnected={!this.props.hiddenMode} /></div>
            <div className="d-block d-xl-none"><SerialChart dataToShow={dataRischio} hasModalConnected={!this.props.hiddenMode} /></div>
          </Col>
          <hr className="d-block d-xl-none" />
          <Col lg="12" xl="7">
            <div className="scrollable"><GraphLegenda dataToShow={dataRischio} hiddenMode={this.props.hiddenMode} /></div>
          </Col>
        </Row>
        </div>
        {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
      </div>
    )
  }
}

export default WidgetRischio
