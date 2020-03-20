import React, { PureComponent } from 'react';
import { Button} from "reactstrap";
import withAjax from 'components/wrappers/withAjax';
import DefaultModal from "components/parts/DefaultModal";
import SearchMovimenti from "./Search";
import { formatNumber } from 'functions/tableFunctions';
import momentIt from 'functions/rad/momentIt'

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{ formatNumber(val, 2) }</span> : formatNumber(val, 2);
}

class Movimenti extends PureComponent {
    state = {
        ricercaModal: false
    };

    openRicercaModal = () => this.setState({ ricercaModal: true });

    closeRicercaModal = () => this.setState({ ricercaModal: false });

    render() {
        /* Lista dei movimenti */
        if (this.props.data && this.props.data.results && this.props.data.results.listaMovimenti && this.props.data.results.listaMovimenti.length > 0) {
            return (
                <>
                    <div className="react-bootstrap-table horizontal-scroller mb-3">
                        <table className="table table-bordered">
                            <thead>
                                <tr>
                                    <th className="right">Data contabile</th>
                                    <th className="right">Data valuta</th>
                                    <th className="right">Importo</th>
                                    <th className="left">Divisa</th>
                                    <th>Causale</th>
                                </tr>
                            </thead>
                            <tbody>
                                { this.props.data.results.listaMovimenti.map(function (obj, i) {
                                    return (
                                        <tr key={ i }>
                                            <td className="right">{ obj.dataContabile }</td>
                                            <td className="right">{ obj.dataValuta }</td>
                                            <td className="right">{ tableFormatNumber(obj.importo) }</td>
                                            <td className="left">{ obj.divisa }</td>
                                            <td>{ obj.descrizione }</td>
                                        </tr>
                                    )
                                }) }
                            </tbody>
                        </table>
                    </div>

                    <div className="btn-console" style={ { "display": "block" } }>
                        <Button className="right" onClick={ this.openRicercaModal }>Visualizza movimenti</Button>
                    </div>

                    <DefaultModal show={ this.state.ricercaModal }
                                  close={ this.closeRicercaModal }
                                  params={ { "modalTitle": this.props.intestazione } }>

                        <SearchMovimenti conti={ this.props.conti } conto={ this.props.conto } />
                    </DefaultModal>
                </>
            )
        } else {
            return "Non ci sono movimenti per il conto selezionato"
        }

    }
}

const MovimentiWithAjax = withAjax(Movimenti, "customer_movimenti");

export default class extends PureComponent {
    render() {
        let contoData = this.props.conti[this.props.conto];

        if (contoData) {
            let params = {
                "ndg": contoData.ndg,
                "branch": contoData.filiale,
                "accountNumber": contoData.numeroConto,
                "dataInizioPeriodo": momentIt().subtract(2, "M").valueOf(),
                "dataFinePeriodo": momentIt().endOf("day").valueOf(),
                "importoMinimo": 0,
                "importoMassimo": 999999999,
                "numeroMassimoRecordDesiderati": 10
            };

            return <MovimentiWithAjax initialData={ [] } initialLoading={ true } params={ params }
                                      conti={ this.props.conti } conto={ this.props.conto }
                                      intestazione={ this.props.intestazione }/>
        } else {
            return "Nessun conto selezionato"
        }
    }
}
