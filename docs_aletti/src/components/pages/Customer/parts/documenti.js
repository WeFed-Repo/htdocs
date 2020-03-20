import React, {PureComponent} from 'react';
import withAjax from 'components/wrappers/withAjax';
import {formatNumber} from 'functions/tableFunctions';
import momentIt from 'functions/rad/momentIt'

function tableFormatNumber(val) {
    return (val<0) ? <span className="negativo">{formatNumber(val,2)}</span> : formatNumber(val,2);
}

class DocumentiCliente extends PureComponent {
    render() {
        /* Lista dei movimenti */
        if (this.props.data && this.props.data.results && this.props.data.results && this.props.data.results.length>0) {
            return(
                <div className="bordered-block">
                    <h2 className="bordered-block-title">Documenti</h2>
                        <table className="margin-bottom-20">
                            <thead>
                                <tr>
                                    <th className="withIco"></th>
                                    <th>Data contabile</th>
                                    <th>Riferimento</th>
                                    <th className="right">Importo (EUR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.props.data.results.map(function(obj,i){
                                    return(
                                        <tr key={i}>
                                            <td className="withIco"><span className="btn-ico"><a href={obj.linkPdf} target="_blank" rel="noopener noreferrer"><i className="icon icon-pdf_circle_filled" /></a></span></td>
                                            <td>{obj.dataRiferimento}</td>
                                            <td>{obj.tipologia}</td>
                                            <td className="right">{(obj.importo) ? tableFormatNumber(obj.importo) : ""}</td>
                                        </tr>
                                    )
                                })}

                            </tbody>
                        </table>
                </div>

            )
        }
        else {
            return ""
        }
    }
}

const DocumentiClienteWithAjax = withAjax(DocumentiCliente, "customer_documenti");

export default class extends PureComponent {

    render() {

        let ndg = this.props.ndg;

        let params = {
                "size":10,
                "ndg": ndg,
                "dataDa":momentIt().subtract(2,"M").format("DD/MM/YYYY"),
                "dataA":momentIt().format("DD/MM/YYYY"),
                "tipoRicerca":"DOCUMENTI"
            }

        return <DocumentiClienteWithAjax initialData={[]} initialLoading={true} params={params} />

    }
}
