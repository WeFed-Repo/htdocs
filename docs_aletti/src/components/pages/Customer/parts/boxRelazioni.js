import React, { Component } from 'react';
import getData from "functions/getData";
import DefaultModal from "components/parts/DefaultModal";
import { Button, Alert } from "reactstrap";

class BoxRelazioniEdit extends Component {

    state = {
        descrizione: "",
        isLoading: false,
        hasError: false
    }

    componentDidMount() {
        if (this.props.modalParams && this.props.modalParams.descrizione) {
            this.setState({ descrizione: this.props.modalParams.descrizione })
        }
    }

    changeValue = (e) => {
        this.setState({ descrizione: e.target.value });
    }

    saveRelazione() {

        this.setState({ isLoading: true });
        let that = this;
        getData({
            url: { "svil": "/json_data/simpleEsitoOk.json", "prod": "/promotori/dashboard/rest/schedacliente/relazioni/upsert" },
            data: {
                "ndg": this.props.modalParams.ndg,
                "id": (this.props.modalParams.id) ? (this.props.modalParams.id) : "",
                "descrizione": this.state.descrizione
            },
            success: (data) => {
                that.setState(
                    {
                        isLoading: false
                    }
                );
                this.props.closemodal();
                this.props.loadRelazioni();

            },
            error: () => {
                that.setState({
                    isLoading: false,
                    hasError: true
                });
            }
        })



    }

    deleteRelazione() {
        this.setState({ isLoading: true });
        let that = this;
        getData({
            url: { "svil": "/json_data/simpleEsitoOk.json", "prod": "/promotori/dashboard/rest/schedacliente/relazioni/delete" },
            data: {
                "ndg": this.props.modalParams.ndg,
                "id": (this.props.modalParams.id) ? (this.props.modalParams.id) : ""
            },
            success: (data) => {
                that.setState(
                    {
                        isLoading: false
                    }
                );
                this.props.closemodal();
                this.props.loadRelazioni();
            },
            error: () => {
                that.setState({
                    isLoading: false,
                    hasError: true
                });
            }
        });
    }


    render() {

        return (
            <div>
                <div className={(this.state.isLoading) ? "loading" : ""} style={{ display: (this.state.hasError) ? "none" : "" }}>
                    <div className="form-group">
                        <input className="form-control" placeholder="Inserisci relazione" type="text" value={this.state.descrizione} maxLength="100" onChange={(e) => this.changeValue(e)}></input>
                    </div>
                    <div className="button-console">
                        <Button className="btn-secondary left" style={{ display: (this.props.modalParams.id) ? "" : "none" }} onClick={() => this.deleteRelazione()}>Elimina relazione</Button>
                        <Button className="btn-primary right" style={{ display: (this.state.descrizione.length > 0) ? "" : "none" }} onClick={() => this.saveRelazione()}>Salva relazione</Button>
                    </div>
                </div>
                {this.state.hasError && <Alert color="warning"><p className="mb-0">Si &egrave; verificato un errore.<br /> riprova pi&ugrave; tardi.</p></Alert>}
            </div>
        )

    }

}


class BoxRelazioni extends Component {

    constructor(props) {
        super(props);
        this.openModal = this.openModal.bind(this);
    }

    state = {
        relazioni: [],
        isLoading: true,
        isOpenedModal: false,
        modalParams: {}
    };

    loadRelazioni = () => {
        const that = this;
        getData({
            url: {
                "prod": "/promotori/dashboard/rest/schedacliente/relazioni/list",
                "svil": "/json_data/customer/relazioni/relazioni.json"
            },
            data: { ndgCliente: this.props.ndg },
            success: (data) => {
                that.setState({
                    isLoading: false,
                    relazioni: data.results || null
                });
            }
        });
    };

    openModal = (modalParams) => {
        this.setState({
            modalParams: modalParams,
            isOpenedModal: true
        })


    }

    componentDidMount() {
        this.loadRelazioni();
    }

    render() {
        const relazioni = this.state.relazioni;

        return (
            <div className="bordered-block">
                <h2>Relazioni</h2>
                <DefaultModal show={this.state.isOpenedModal} close={() => {
                    this.setState({ isOpenedModal: false })
                }} params={this.state.modalParams}>
                    <BoxRelazioniEdit loadRelazioni={this.loadRelazioni} modalParams={this.state.modalParams} closemodal={() => {
                        this.setState({ isOpenedModal: false })
                    }} />
                </DefaultModal>

                <div className={"cloud-box" + ((this.state.isLoading) ? " loading" : "")}>
                    {
                        this.state.relazioni && this.state.relazioni.length > 0 && relazioni.map((obj, i) => {
                            return (<div className="cloud-arg editable" key={i} title={obj.descrizione} onClick={() => this.openModal({
                                modalTitle: "Modifica relazione",
                                descrizione: obj.descrizione,
                                id: obj.id,
                                ndg: this.props.ndg
                            })}>{obj.descrizione}</div>)
                        })
                    }
                    {
                        this.state.relazioni && this.state.relazioni.length === 0 &&
                        <p className="cloud-void">Non sono configurate relazioni</p>
                    }
                    <span className="cloud-insert" title="Aggiungi relazione" onClick={() => this.openModal({
                        modalTitle: "Aggiungi relazione",
                        ndg: this.props.ndg
                    })} />
                </div>
            </div>
        )
    }
}

export default BoxRelazioni;
