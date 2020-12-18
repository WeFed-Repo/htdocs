import React, { Component } from 'react';
import getData from "functions/getData";
import Form from "components/parts/Forms";
import { Row, Col, Button } from "reactstrap";
import {NavLink} from "react-router-dom";
import Notify from 'functions/Notify'
import "../Onboarding/style.scss";

export default class extends Component {

    constructor(props) {
        super(props);
        this.state = {
            loading: true,
            bozzaData: {},
            comportamenti: [],
            sentData: false,


            // Campi del form
            field_int0_comportamentorisp: "",
            field_int0_notacomportamento: "",
            field_int1_comportamentorisp: "",
            field_int1_notacomportamento: "",

            // Gestione errori
            errors: {}
        }
        this.generalOnChange = this.generalOnChange.bind(this);
        this.salvaComportamento = this.salvaComportamento.bind(this);
    }

    generalOnChange(e) {
        Form.change(this, e);
    }

    componentDidMount() {


        let idpratica = this.props.match.params && this.props.match.params.id;
        if (!idpratica) {
            window.location.href = "/gestionebozze"
        }
        else {
            // Acquisisce i dati della pratica in base all'id
            getData({
                url: { "svil": "/json_data/onboarding/getBozzaById_svil.json", "prod": "/promotori/onboarding/rest/bozze/" + idpratica + "/getBozza" },
                success: (data) => {
                    if (data && data.results) this.setState({
                        bozzaData: data.results
                    });
                    // Carica i dati dai domini per avere i comportamenti
                    getData({
                        url: { "svil": "/json_data/onboarding/listaDomini.json", "prod": "/promotori/onboarding/rest/domini/lista" },
                        success: (ddata) => {
                            if (ddata && ddata.results && ddata.results["RILEV_COMPORTAMENTO"]) {
                                this.setState({
                                    loading: false,
                                    comportamenti: ddata.results["RILEV_COMPORTAMENTO"].map((el) => { return ({ "value": el.codice, "text": el.descrizione }) })
                                })
                            }
                            else {
                                alert("Nei dati dei domini non è presente il nodo \"RILEV_COMPORTAMENTO\"");
                            }
                        },
                        error: () => {
                            alert("Si sono verificati errori durante il recupero dei dati dei domini");
                        }
                    })
                },
                error: () => {
                    alert("I dati relativi alla pratica non possono essere recuperati.")
                }
            })
        }

    }

    // Check e salvataggio
    salvaComportamento() {

        // Effettua i test
        let errori = {};

        // In caso non vi siano errori procede
        let form = this.state;
        if (form.field_int0_comportamentorisp===""){
            errori["field_int0_comportamentorisp"] = "Occorre indicare un comportamento";
        }
        if (form.bozzaData.numIntestatari===2 && form.field_int1_comportamentorisp==="") {
            errori["field_int1_comportamentorisp"] = "Occorre indicare un comportamento";
        }
        
        if (Object.keys(errori).length>0) {
            Notify.error("La rilevazione non e' completa. Verificare i dati mancanti.");
            this.setState({
                errors:errori
            });
        }
        else
        {
                this.setState({
                    loading:true
                });   

                let compMap = {
                };
                this.state.comportamenti.forEach(v=>{
                    compMap[v.value] = v.text
                })
            

                // Assembla l'oggetto per gli intestatari
                var intfirme = {
                    "0":
                        {
                            "notaComportamento":this.state.field_int0_notacomportamento,
                            "comportamentoRisp": {
                                "id": this.state.field_int0_comportamentorisp,
                                "label":compMap[this.state.field_int0_comportamentorisp]
                            }
                        }
                    
                }
                if (this.state.bozzaData.numIntestatari===2) {

                    intfirme["1"] =   {
                            "notaComportamento":this.state.field_int1_notacomportamento,
                            "comportamentoRisp": {
                                "id": this.state.field_int1_comportamentorisp,
                                "label":compMap[this.state.field_int1_comportamentorisp]
                            }
                        
                    }
                }


               getData({
                url: { "svil": "/json_data/simpleEsitoOk.json", "prod": "/promotori/onboarding/rest/bozze/salvaBozzaFirme" },
                method: "POST",
                data: {
                    "id":this.state.bozzaData.field_id,
                    "firme":{
                        "intestatariFirme": intfirme
                    },
                    "stato":"RILEVAMENTO_COMPORTAMENTO"
                },
                success: (data) => {
                    this.setState({
                        loading:false,
                        sentData:true
                    });
                },
                error: ()=>{
                    this.setState({
                        loading:false
                    });
                    Notify.error("Si sono verificati errori in fase di scambio dei dati. Riprovare.");
                }
            })
        }

      

    }


    render() {

        let anagdata = this.state.bozzaData,
            nominativo_1 = anagdata.anagraficaBlob && (anagdata.anagraficaBlob.intestatari[0].nome + " " + anagdata.anagraficaBlob.intestatari[0].cognome),
            nominativo_2 = "";

        if (anagdata.numIntestatari === 2) {
            nominativo_2 = anagdata.anagraficaBlob && anagdata.anagraficaBlob.intestatari[1] && (anagdata.anagraficaBlob.intestatari[1].nome + " " + anagdata.anagraficaBlob.intestatari[1].cognome);
        }

        return (
            <div className="onboarding">
                <div className="onboarding-wrapper">
                    <h3>Rilevazione comportamento</h3>
                    {!this.state.sentData && <div className="onboarding-form">
                        <div className={(this.state.loading ? "loading" : "")} key={(this.state.loading ? "0" : "1")}>
                            <>
                                <hr />
                                <h4>Intestatario{(anagdata.numIntestatari === 2) ? " 1" : ""} - {nominativo_1} </h4>
                                <Row>
                                    <Col>
                                        <Form.select
                                            name="field_int0_comportamentorisp"
                                            value={this.state.field_int0_comportamentorisp}
                                            label="Descrizione del comportamento tenuto dal cliente"
                                            error={this.state.errors["field_int0_comportamentorisp"]}
                                            onChange={this.generalOnChange}
                                            placeholder="Seleziona..."
                                            options={this.state.comportamenti}
                                        ></Form.select>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <Form.textarea
                                            name="field_int0_notacomportamento"
                                            value={this.state.field_int0_notacomportamento}
                                            label="Note"
                                            maxlength="250"
                                            onChange={this.generalOnChange}
                                        ></Form.textarea>
                                    </Col>
                                </Row>

                            </>

                            {anagdata.numIntestatari === 2 && <>
                                <hr />
                                <h4>Intestatario{(anagdata.numIntestatari === 2) ? " 1" : ""} - {nominativo_2}</h4>
                                <Row>
                                    <Col>
                                        <Form.select
                                            name="field_int1_comportamentorisp"
                                            value={this.state.field_int1_comportamentorisp}
                                            label="Descrizione del comportamento tenuto dal cliente"
                                            error={this.state.errors["field_int1_comportamentorisp"]}
                                            onChange={this.generalOnChange}
                                            placeholder="Seleziona..."
                                            options={this.state.comportamenti}
                                        ></Form.select>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col>
                                        <Form.textarea
                                            name="field_int1_notacomportamento"
                                            value={this.state.field_int1_notacomportamento}
                                            label="Note"
                                            maxlength="250"
                                            onChange={this.generalOnChange}
                                        ></Form.textarea>
                                    </Col>
                                </Row>
                            </>
                            }

                        </div>
                    </div>}

                    {
                        this.state.sentData && <div className="onboarding-form">
                            <p className="feedback-end"><span className="big">La richiesta è stata inserita correttamente.</span></p>
                        </div>
                    }
                </div>
                <div className="onboarding-pulsantiera">
                    <div className="btn-console">
                        <div className="btn-console-left">
                            {!this.state.sentData && 
                                 <NavLink to="/gestionebozze"><Button color="secondary" onClick={this.salvaComportamento}>Esci</Button></NavLink>
                            }
                        </div>
                        <div className="btn-console-right">
                            {!this.state.sentData && 
                                <Button color="primary" onClick={this.salvaComportamento}>Chiudi</Button>
                            }
                            {this.state.sentData &&
                                <NavLink to="/gestionebozze"><Button color="primary">Chiudi</Button></NavLink>
                            }
                        </div>
                    </div>
                </div>
            </div>
        )

    }

}