import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'
import { remapData } from 'functions/tableFunctions';

class WidgetMp extends PureComponent {

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



    // arricchisce e rimappa l'oggetto mpData
    let mpData = (this.props.data && this.props.data.results && this.props.data.results.totali) ? this.props.data.results.totali : [];

    let widgetAggDate = this.props.data && this.props.data.results && this.props.data.results.dataAggiornamento;


    // Mappa i dati per la modale
    return (
      <div className={"widget-content-wrapper" + ((widgetAggDate) ? " has-date" : "")}>
        <div className="widget-body">
          <DefaultModal show={this.state.isModalOpened} close={this.closeModal} params={this.state.modalParams}><WidgetModalBody {...this.state.modalParams} /></DefaultModal>
          {
            (mpData.MINUS || mpData.PLUS) &&
            <div className="mp-box-wrap">
              {
                (mpData.MINUS) &&

                <div className="mp-left">
                  <div className="mp-box minus" onClick={() => { if (!this.props.hiddenMode) this.openModal({ "type": "minus", "modalType": "customers", "modalTitle": "Minusvalenza gestionale (" + mpData.MINUS.records + ")", "modalData": remapData(this.props.data.results.risultati.MINUS, 5), vediTuttiData: { categoria: "PLUS_MINUS", tipologia: "MINUS" }, modalColumns: ["int", "tipo_contratto", "controvalore_contratto", "plus_minus_contratto", "v_plus_minus"] }) }}>
                    <span className="mp-desc">Minusvalenze</span>
                    <span className="mp-number">{mpData.MINUS.records}</span>
                  </div>
                </div>
              }
              {
                (mpData.PLUS) &&
                <div className="mp-right">
                  <div className="mp-box plus" onClick={() => { if (!this.props.hiddenMode) this.openModal({ "type": "plus", "modalType": "customers", "modalTitle": "Plusvalenza gestionale (" + mpData.PLUS.records + ")", "modalData": remapData(this.props.data.results.risultati.PLUS, 5), vediTuttiData: { categoria: "PLUS_MINUS", tipologia: "PLUS" }, modalColumns: ["int", "tipo_contratto", "controvalore_contratto", "plus_minus_contratto", "v_plus_minus"] }) }}>
                    <span className="mp-desc">Plusvalenze</span>
                    <span className="mp-number">{mpData.PLUS.records}</span>
                  </div>
                </div>
              }
            </div>
          }

          {
            !(mpData.MINUS || mpData.PLUS) && <div className="noDisp"><span>Nessun dato disponibile</span></div>
          }
        </div>
        {widgetAggDate && <div className="agg-date">Dati aggiornati al {widgetAggDate}</div>}
      </div>
    )
  }
}

export default WidgetMp;

