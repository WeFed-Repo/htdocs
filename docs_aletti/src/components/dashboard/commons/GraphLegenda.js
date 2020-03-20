import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'
import { formatNumber } from 'functions/tableFunctions';

function tableFormatNumber(val) {
    return (val < 0) ? <span className="negativo">{ formatNumber(val, 2) }</span> : formatNumber(val, 2);
}

class GraphLegenda extends PureComponent {

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
        let dts = this.props. dataToShow,
            rowindex = 0, rowstate;

        return (
            <div>
                <DefaultModal show={ this.state.isModalOpened } close={ this.closeModal }
                              params={ this.state.modalParams }><WidgetModalBody { ...this.state.modalParams }/></DefaultModal>
                <table className="table legenda">
                    <thead>
                        <tr>
                            <th>{ dts.titleLabel }</th>
                            <th className="right">{ dts.valueLabel }</th>
                        </tr>
                    </thead>
                    <tbody>
                        { (this.props.dataToShow.dataProvider.length > 0)
                            ?
                            this.props.dataToShow.dataProvider.map(obj => {
                                rowindex += 1;
                                rowstate = (rowindex % 2 === 1) ? "dispari" : "pari";
                                return (
                                    <tr className={ rowstate } key={ rowindex }>
                                        <td>
                                            { (!this.props.hiddenMode) ?
                                                <span className="table-link has-dot"
                                                      onClick={ () => this.openModal(obj) }><span className="dot"
                                                                                                  style={ { backgroundColor: obj.colore } }/>{ obj[dts.titleField] }</span>
                                                :
                                                <span className="has-dot"><span className="dot"
                                                                                style={ { backgroundColor: obj.colore } }/>{ obj[dts.titleField] }</span>
                                            }
                                        </td>
                                        <td className="right">{ (dts.valueLabel === "%") ? tableFormatNumber(obj[dts.valueField]) : obj[dts.valueField] }</td>
                                    </tr>
                                )
                            })
                            :
                            <tr className="">
                                <td colSpan="2">Nessun dato disponibile</td>
                            </tr>
                        }
                    </tbody>
                </table>
            </div>
        )
    }
}

export default GraphLegenda;
