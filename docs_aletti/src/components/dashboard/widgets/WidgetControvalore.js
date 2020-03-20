import React, { PureComponent } from 'react';
import SerialChart from 'components/parts/SerialChart';
import { Col, Row } from "reactstrap";
import GraphLegenda from 'components/dashboard/commons/GraphLegenda';
import { attribColor, formatNumber, remapData } from 'functions/tableFunctions';

function tableFormatNumber(val) {
  return (val < 0) ? <span className="negativo">{formatNumber(val, 2)}</span> : formatNumber(val, 2);
}

class WidgetControvalore extends PureComponent {

  render() {

    // Mappa i risultati come dataProvider
    let widgetDataProvider = [],
      totclienti = (this.props.data.results && this.props.data.results.totale_clienti) ? this.props.data.results.totale_clienti : 0,
      totportafoglio = (this.props.data.results && this.props.data.results.totale_patrimonio) ? this.props.data.results.totale_patrimonio : 0;

    if (this.props.data.results && this.props.data.results.totali) {
      let mappedData = this.props.data.results.totali,
        modalDataKeys = this.props.data.results.risultati;
      Object.keys(mappedData).forEach(function (key) {
        widgetDataProvider.push({
          "patrimonio": mappedData[key].label,
          "tot": mappedData[key].records,
          "modalTitle": "Patrimonio: " + key + " (" + mappedData[key].records + ")",
          "modalType": "customers",
          "colore": mappedData[key].colore,
          "modalColumns": ["int", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti"],
          "modalData": remapData(modalDataKeys[key], 5),
          "vediTuttiData": {
            categoria: "CLIENTI_PATRIMONIO",
            tipologia: key
          }
        });
      });
    }

    let dataControvalore =
    {
      titleLabel: "Patrimonio",
      titleField: "patrimonio",
      valueLabel: "N. CLI",
      valueField: "tot",
      colorField: "colore",
      dataProvider: widgetDataProvider,
      idGrafico: "grafico_controvalore"
    };

    dataControvalore.dataProvider = attribColor(dataControvalore.dataProvider);

    let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;

    return (
      <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
        <div className="widget-body">
          <Row>
            <Col lg="12" xl="5">
              <div className="d-none d-xl-block"><SerialChart dataToShow={dataControvalore} rotate="true" hasModalConnected={!this.props.hiddenMode} /></div>
              <div className="d-block d-xl-none"><SerialChart dataToShow={dataControvalore} hasModalConnected={!this.props.hiddenMode} /></div>
            </Col>
            <hr className="d-block d-xl-none" />
            <Col lg="12" xl="7">
              <div className="scrollable"><GraphLegenda dataToShow={dataControvalore} hiddenMode={this.props.hiddenMode} /></div>
            </Col>
          </Row>{(totclienti > 0) && <div className="totali">
            <div className="totale left">
              <span className="label">Tot. clienti</span>
              <span className="dato">{totclienti}</span>
            </div>
            <div className="totale right">
              <span className="label">Tot. portafoglio</span>
              <span className="dato">{tableFormatNumber(totportafoglio)}</span>
            </div>
          </div>}
        </div>
        {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
      </div>
    )
  }
}

export default WidgetControvalore
