import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'
import { remapData } from 'functions/tableFunctions';
class WidgetAlert extends PureComponent {

  constructor(props) {
    super(props);
    this.state = {
      isModalOpened: false,
      modalParams: null,
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

    let boxindex = 0, boxstate, rowindex = 0, rowstate;

    // Legge il blocco dei dati e lo prepara
    let widgetDataProvider = [];

    let alertColumns = {
      "COMPLEANNO": ["ndgCode", "int", "nascitaDate"],
      "SCADENZA_ADVER": ["int", "ndgCode", "fasciaRischio", "scadenzaAdverDate", "statoProfilo"],
      "SCADENZA_DOCUMENTI": ["int", "ndgCode", "documIdentificType", "scadDocumDate"],
      "SCADENZA_MIFID": ["int", "ndgCode", "codEsperienzaDes", "scadenzaMifidDate"],
      "TITOLI_SCADENZA": ["int_cliente", "ndgAletti", "tipo_contratto", "titolo", "controvalore_eur", "data_scadenza"],
      "CONSISTENZA_LIQUIDITA": [],
    }


    if (this.props.data && this.props.data.results && this.props.data.results.totali) {
      let mappedData = this.props.data.results.totali,
        modalDataKeys = this.props.data.results.risultati;

      Object.keys(mappedData).forEach(function (key) {

        // A seconda della key seleziona colonne differenti per ogni alert
        widgetDataProvider.push({
          "alerttype": key,
          "modalTitle": "Alert: " + ((mappedData[key]["label"]) ? mappedData[key]["label"] + " (" + mappedData[key]["records"] + ")" : "Consistenza liquidita'"),
          "modalType": "customers",
          "colore": mappedData[key].colore,
          "modalColumns": alertColumns[key],
          "modalData": modalDataKeys[key],
          "dnode": mappedData[key],
          "vediTuttiData": { categoria: "ALERT", tipologia: key }
        });
      });

    }

    let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;

    return (
      <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
        <div className="widget-body">
          <DefaultModal show={this.state.isModalOpened} close={this.closeModal} params={this.state.modalParams}><WidgetModalBody {...this.state.modalParams} /></DefaultModal>
          <div className="scrollable">
            {
              (widgetDataProvider && widgetDataProvider.length > 0) &&
              widgetDataProvider.map(alert => {

                boxindex += 1;
                boxstate = (boxindex % 2 === 1) ? "left" : "right";
                rowindex += 1;
                rowstate = (rowindex % 4 === 1 || rowindex % 4 === 2) ? "base" : "alternato";

                /* Arricchisce i dati */
                alert.modalType = "alert";

                return (
                  <div className={"alert-box " + boxstate + " " + rowstate} key={rowindex}>
                    <div className="el-box">
                      {
                        /* Caso consistenza liquidita*/
                        (alert.alerttype === "CONSISTENZA_LIQUIDITA") &&
                        <div>
                          {(alert.dnode.GIALLO) && <span className="alert-numero giallo" onClick={() => this.openModal({ "modalTitle": "Alert: Consistenza liquidità - GIALLO (" + alert.dnode.GIALLO.records + ")", "modalType": "alert", "modalColumns": ["int_cliente", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti"], "modalData": remapData(alert.modalData.GIALLO), vediTuttiData: Object.assign(alert.vediTuttiData, { "dettaglio": "GIALLO" }) })}>{alert.dnode.GIALLO.records}</span>}
                          {(alert.dnode.ROSSO) && <span className="alert-numero rosso" onClick={() => this.openModal({ "modalTitle": "Alert: Consistenza liquidità - ROSSO (" + alert.dnode.ROSSO.records + ")", "modalType": "alert", "modalColumns": ["int_cliente", "tipo_contratto", "controvalore_contratto", "saldo_conti_correnti"], "modalData": remapData(alert.modalData.ROSSO), vediTuttiData: Object.assign(alert.vediTuttiData, { "dettaglio": "ROSSO" }) })}>{alert.dnode.ROSSO.records}</span>}
                          <span className="alert-desc">Consistenza liquidità</span>
                        </div>
                      }
                      {
                        /* Altri casi */
                        (alert.alerttype !== "CONSISTENZA_LIQUIDITA") && <div onClick={() => this.openModal(alert)}>
                          <span className="alert-numero">{alert.dnode.records}</span>
                          <span className="alert-desc">{alert.dnode.label}</span>
                        </div>
                      }


                    </div>
                  </div>
                )
              })
            }
            {
              !(widgetDataProvider.length > 0) && <div className="noDisp"><span>Nessun dato disponibile</span></div>
            }
          </div>

          {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
        </div >
      </div>
    )
  }
}


export default WidgetAlert;
