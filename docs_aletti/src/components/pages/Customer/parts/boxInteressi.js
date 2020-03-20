import React, { Component } from 'react';
import getData from "functions/getData";
import DefaultModal from "components/parts/DefaultModal";
import { Button } from "reactstrap";

class BoxInteressiConfig extends Component {
    state = {
        allint: [],
        checkedint: this.props.interessi.join("|")
    };

    checkBtn(val) {
        let arrinp = this.state.checkedint ? this.state.checkedint.split("|") : [];
        var index = arrinp.indexOf(val);
        if (index >= 0) {
            arrinp.splice(index, 1);
        } else {
            arrinp.push(val);
        }
        this.setState({
            checkedint: arrinp.join("|")
        })
    }

    saveStatus() {
        const params = {
            ndgCliente: this.props.ndg
        };
        let prodUrl = "/promotori/dashboard/rest/schedacliente/interessi/delete";

        if (this.state.checkedint) {
            params.codice = this.state.checkedint;
            prodUrl = "/promotori/dashboard/rest/schedacliente/interessi/upsert";
        }

        getData({
            url: {
                "prod": prodUrl,
                "svil": "/json_data/simpleEsitoOk.json"
            },
            data: params,
            success: () => {
                this.props.closemodal();
                this.props.reloadfunction();
            }
        });
    }

    componentDidMount() {
        const that = this;

        getData({
            url: {
                "prod": "/promotori/dashboard/rest/schedacliente/interessi/domini",
                "svil": "/json_data/customer/interessi/domini.json"
            },
            data: { ndgCliente: this.props.ndg },
            success: (data) => {
                that.setState({
                    isLoading: false,
                    allint: data.results && data.results.DOMINI_INTERESSI
                });
            }
        });
    }

    render() {
        const checkedintarr = this.state.checkedint.split("|");
        return (
            <div className={ ((this.state.isLoading) ? "loading" : "") }>
                <div className={ "cloud-config-wrap" }>
                    {
                        this.state.allint.sort(function(a,b){
                            return (a.descrizione<=b.descrizione)? -1: 1;
                        }).map((obj, i) => (
                                <span
                                    className={ "cloud-radio-selector" + ((checkedintarr.indexOf(obj.codice) >= 0) ? " selected" : "") }
                                    key={ i } onClick={ () => {
                                    this.checkBtn(obj.codice)
                                } }>{ obj.descrizione }</span>
                            )
                        )
                    }
                </div>
                <div className="btn-console">
                    <Button className="btn-primary right" onClick={ () => {
                        this.saveStatus()
                    } }>Salva</Button>
                </div>
            </div>
        )
    }
}

class BoxInteressi extends Component {
    state = {
        interessi: [],
        isLoading: true,
        isOpenedModal: false
    };

    loadInteressi = () => {
        const that = this;
        getData({
            url: {
                "prod": "/promotori/dashboard/rest/schedacliente/interessi/list",
                "svil": "/json_data/customer/interessi/interessi.json"
            },
            data: { ndgCliente: this.props.ndg },
            success: (data) => {
                that.setState({
                    isLoading: false,
                    interessi: data.results || null
                });
            }
        });
    };

    componentDidMount() {
        this.loadInteressi();
    }

    render() {
        const interessi = this.state.interessi;

        return (
            <div className="bordered-block">
                <h2>Interessi</h2>
                <DefaultModal show={ this.state.isOpenedModal } close={ () => {
                    this.setState({ isOpenedModal: false })
                } } params={ { modalTitle: "Gestisci interessi" } }>
                    <BoxInteressiConfig ndg={ this.props.ndg } interessi={ this.state.interessi.map(v => v.codice) }
                                        reloadfunction={ this.loadInteressi } closemodal={ () => {
                        this.setState({ isOpenedModal: false })
                    } }/>
                </DefaultModal>
                <div className={ "cloud-box" + ((this.state.isLoading) ? " loading" : "") }>
                    {
                        this.state.interessi && this.state.interessi.length > 0 && interessi.sort(function(a,b){
                            return (a.descrizione<=b.descrizione)? -1: 1;
                        }).map(function (obj, i) {
                            return (<div className="cloud-arg" key={ i } title={ obj.nota }>{ obj.descrizione }</div>)
                        })
                    }
                    {
                        this.state.interessi && this.state.interessi.length === 0 &&
                        <p className="cloud-void">Non sono configurati interessi</p>
                    }
                    <span className="cloud-insert" onClick={ () => {
                        this.setState({ isOpenedModal: true })
                    } }/>
                </div>
            </div>
        )
    }
}

export default BoxInteressi;
