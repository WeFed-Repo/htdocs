import React, { PureComponent } from 'react';
import { Button } from 'reactstrap';
import DefaultModal from "components/parts/DefaultModal";
import withAjax from 'components/wrappers/withAjax';
import SearchDocumenti from "./Search";
import { formatNumber } from 'functions/tableFunctions';
import momentIt from 'functions/rad/momentIt';

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{ formatNumber(val, 2) }</span> : formatNumber(val, 2);
}

class Documenti extends PureComponent {
    state = {
        ricercaModal: false
    };

    openRicercaModal = () => this.setState({ ricercaModal: true });

    closeRicercaModal = () => this.setState({ ricercaModal: false });

    render() {
        /* Lista dei movimenti */
        if (this.props.data && this.props.data.results && this.props.data.results && this.props.data.results.length > 0) {
            return (
                <>
                    <div className="react-bootstrap-table horizontal-scroller mb-3">
                        <table className="table table-bordered">
                            <thead>
                                <tr>
                                    <th className="withIco"/>
                                    <th className="right">Data riferimento</th>
                                    <th>Tipo documento</th>
                                    <th className="right">Importo (EUR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                { this.props.data.results.map(function (obj, i) {
                                    return (
                                        <tr key={ i }>
                                            {<td className="withIco"><span className="btn-ico"><a href={ obj.linkPdf }
                                                                                                 target="_blank"
                                                                                                 rel="noopener noreferrer"><i
                                                className="icon icon-pdf_circle_filled"/></a></span></td>}
                                            <td className="right">{ obj.dataRiferimento }</td>
                                            <td>{ obj.descrModulo }</td>
                                            <td className="right">{ (obj.importo) ? tableFormatNumber(obj.importo) : "" }</td>
                                        </tr>
                                    )
                                }) }
                            </tbody>
                        </table>
                    </div>
                    <div className="btn-console">
                        <Button className="right" onClick={ this.openRicercaModal }>Visualizza documenti</Button>
                    </div>

                    <DefaultModal show={ this.state.ricercaModal }
                                  close={ this.closeRicercaModal }
                                  params={ { "modalTitle": this.props.intestazione } }>

                        <SearchDocumenti contoData={ this.props.contoData }/>
                    </DefaultModal>
                </>
            )
        } else {
            return <div className="no-data">Non ci sono documenti per il conto selezionato</div>
        }

    }
}

const DocumentiWithAjax = withAjax(Documenti, "customer_documenti");

export default class extends PureComponent {
    render() {
        let { contoData } = this.props;

        if (contoData) {
            let params = {
                "size": 10,
                "ndg": contoData.ndg,
                "branch": contoData.filiale,
                "accountNumber": contoData.numeroConto,
                "dataDa": momentIt().subtract(2, "M").format("DD/MM/YYYY"),
                "dataA": momentIt().format("DD/MM/YYYY"),
                "tipoRicerca": "DOCUMENTI"
            };

            return <DocumentiWithAjax initialData={ [] } initialLoading={ true } params={ params }
                                      contoData={ this.props.contoData }
                                      intestazione={ this.props.intestazione }/>
        } else {
            return "Nessun conto selezionato"
        }
    }
}
