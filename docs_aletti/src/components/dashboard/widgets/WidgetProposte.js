import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'

class WidgetProposte extends PureComponent {

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
    var widgetDataProvider = [];

    if (this.props.data && this.props.data.results && this.props.data.results.totali) {
      let mappedData = this.props.data.results.totali,
        modalDataKeys = this.props.data.results.risultati;

      Object.keys(mappedData).forEach(function (key) {

        // A seconda della key seleziona colonne differenti per ogni alert
        widgetDataProvider.push({
          "alerttype": key,
          "modalTitle": "Proposte investimento: " + key + " - " + (mappedData[key].label) + " (" + mappedData[key].records + ")",
          "modalType": "proposte",
          "colore": mappedData[key].colore,
          "modalData": modalDataKeys[key],
          "key": key,
          "label": mappedData[key].label,
          "records": mappedData[key].records
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
              widgetDataProvider.map(proposta => {

                boxindex += 1;
                boxstate = (boxindex % 2 === 1) ? "left" : "right";
                rowindex += 1;
                rowstate = (rowindex % 4 === 1 || rowindex % 4 === 2) ? "base" : "alternato";

                return (
                  <div className={"proposte-box " + boxstate + " " + rowstate} key={rowindex}>
                    <div className="el-box" onClick={() => this.openModal(proposta)}>
                      <span className="proposta-numero">{proposta.records}</span>
                      <span className="proposta-desc">{proposta.label}</span>
                    </div>
                  </div>
                )
              })

            }
            {
              !(widgetDataProvider.length > 0) && <div className="noDisp"><span>Nessun dato disponibile</span></div>
            }
          </div>
        </div>
        {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
      </div>
    )
  }
}


export default WidgetProposte;
