import React, { Component } from "react";
import { Col, Row, Button } from 'reactstrap';
import getData from "functions/getData";
import Form from 'components/parts/Forms';
import { getNextState, getNextInt } from "../gestioneStati";

export default class extends Component {

    /*
        STEP PER FIRMA: 

        url: http://promotorisvi7web.webank.local/promotori/onboarding/rest/infocert/firmaOneShot

        -> INIT
        - Esposizione documenti e clausole
        - Invio tramite RICHIEDI FIRMA
        REQUEST:
        {
        "id":61,
        "stato":"FIRMA_XXX",
        "intestatarioCorrente":0,
        “stepFirma”:”INIT”
        } 

        -> CLAUSOLE
        - Esposizione documenti
        - Esposizione clausole di accettazione (da flaggare)
        - Nulla su PROSEGUI ma si abilita solo con l'attivazione delle clausole
        REQUEST:
            {
            "id":61,
            "firme":
            "clauses": [
            {
            "id" : "clause1",
            “value” : true
            },
            {}
            ]
            ,
            "stato":"FIRMA_XXX",
            "intestatarioCorrente":0,
            “stepFirma”:”CLAUSOLE”
            } 


        FIRMADOC -> OTP
        {
            "id":61,
            “otpFirma”: "01135072",
            "stato":"FIRMA_XXX",
            "intestatarioCorrente":0,
            “stepFirma”:”FIRMADOC”
            }


        **** EXTRA: Richiedi o ri-richiedi OTP
        /promotori/onboarding/rest/infocert/[IDBOZZA]/[INTESTATARIOCORRENTE]/reSendOtpFirma


    */
    constructor(props) {
        super(props);
        this.state = {
            step: "INIT",
            loading: true,

            flagAccInfocert: false,
            flagFirma: false,

            // Blocchi dati da chiamate
            initData: null,


            proseguiEnabled: true
        }
        this.sendClausole = this.sendClausole.bind(this);
        this.firmaDoc = this.firmaDoc.bind(this);
    }

    

    firmaDoc() {
        // Invio codice OTP
        let obform =  this.props.obformprops.obstate;
        this.setState({ loading: true });

        this.setState({ loading: false,
            proseguiEnabled: false});
        
        this.props.obformprops.setObState(
            {proseguiEnabled: true}
        )
    }

     // Loading iniziale di una firma (INIT)
    componentDidMount() {
        let obform =  this.props.obformprops.obstate;
        getData({
            method: "POST",
            url: {svil: "/json_data/onboarding/firma_init.json", prod:"/promotori/onboarding/rest/infocert/firmaOneShot"},
            data:  {
                "id":obform.field_id,
                "stato":this.props.firmatype,
                "intestatarioCorrente":obform.field_intestcorrente,
                "stepFirma":"INIT"
            },
            error: ()=>{alert("Si sono verificati errori nella ricezione dei dati.")},
            success: (data)=> {
                this.state.initData = data.results;
                this.setState({
                    loading:false
                })
            }
        })
    }

    /* AZIONE INIT (CLAUSOLE) */ 
    sendClausole() {
        let obform =  this.props.obformprops.obstate;
        this.setState({ loading: true });
        getData({
            url: {"svil":"/json_data/onboarding/firma_clausole.json","prod":""},
            data: {
                "id":obform.field_id,
                "stato":this.props.firmatype,
                "intestatarioCorrente":obform.field_intestcorrente,
                "stepFirma":"CLAUSOLE",
                "clauses": [
                        this.state.initData.clauses.map(val=>{
                            return {
                                "id" : "clause1",
                                "value" : true
                                }
                        })
                ],
            },
            error: ()=>{alert("Si sono verificati errori nella ricezione dei dati.")},    
            success: (data) => {
                // Preparazione del form di accettazione

                this.setState({
                    step: "CLAUSOLE",
                    proseguiEnabled:false,
                    initData: data.results,
                    loading: false
                });
            }
        })


    }

    render() {

        let obform =  this.props.obformprops.obstate;

        return (
            <>
                {/* <h4>STEP: {this.state.step}</h4> */ }
                <div className={this.state.loading ? "loading" : ""}>
                    
                    {this.state.step === "INIT" &&
                        <>
                            <h4>INFORMATIVA PRECONTRATTUALE SERVIZI FIRMA ELETTRONICA QUALIFICATA ONE SHOT E PEC</h4>
                            <p>
                                <strong>Cognome e nome</strong>: {obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_nome"] + " " + obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_cognome"]}<br />
                                <strong>Data di nascita</strong>: {obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_nascita"]}<br />
                                <strong>Luogo di nascita</strong>: {obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_comunenascita"]}<br />
                                <strong>Indirizzo di residenza</strong>: {obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_tipoindirizzoresidenza"] + " "
                                   + obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_indirizzoresidenza"] + " "
                                   + obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_numresidenza"] + " "} – {obform["field_anagraficablob_intestatari_" + obform["field_intestcorrente"] + "_comuneresidenza"]}
                            </p>
                            <p>
                                Per procedere il cliente deve obbligatoriamente aprire i seguenti documenti in formato pdf e confermare la presa visione.
                            </p>
                            <ul className="elenco-documenti">
                                {this.state.initData && this.state.initData.docs.map((doc,i)=>{
                                    return <li key={i}><a href={doc.url} target="_blank"><i className="icon icon-file_pdf"></i>{doc.name}</a></li>
                                })
                                }
                            </ul> 
                            <br />
                            <p>Il cliente cliccando sul tasto <strong>"RICHIEDI IL CERTIFICATO"</strong>:</p>
                            <ul>
                                {this.state.initData && this.state.initData.clauses.map((clause,i)=>{
                                    return <li key={i}>{clause.text}</li>
                                })
                                }
                            </ul>
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" className="sub-buttons" onClick={this.sendClausole}>Richiedi certificato</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }

                    {this.state.step === "CLAUSOLE" &&
                        // Inizializzazione
                        <>
                            <section>
                                <ul className="elenco-documenti">
                                    {this.state.initData.docs.map((v,i)=>{
                                        return <li><a href={v.url} target="_blank"><i className="icon icon-file_pdf"></i>{v.name}</a></li>
                                    })}
                                </ul>
                            </section>
                            <section className="clauses">
                                {this.state.initData.clauses.map((v,i)=>{
                                    return <Form.checkgroup key={i} name={i} onChange={()=>this.setState({proseguiEnabled:true})} options={[{"text": v.text, value: "true"}]}></Form.checkgroup>
                                })}
                            </section>
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" disabled={!this.state.proseguiEnabled} className="sub-buttons" onClick={() => this.setState({ step: "MESSAGGIO_CONFERMA" })}>Prosegui</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                     {this.state.step === "MESSAGGIO_CONFERMA" &&
                        // Inizializzazione
                        <>
                            <div class="alert alert-success" role="alert">
                                La firma è ora attiva!
                            </div>
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" className="sub-buttons" onClick={() => this.setState({ step: "FIRMADOC" })}>Prosegui</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                    {this.state.step === "FIRMADOC" &&
                        // Inizializzazione
                        <>
                            {this.props.firmaDocs}
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" disabled={!this.state.proseguiEnabled} className="sub-buttons" onClick={this.firmaDoc}>Firma il contratto</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                </div>
            </>
        )

    }

}