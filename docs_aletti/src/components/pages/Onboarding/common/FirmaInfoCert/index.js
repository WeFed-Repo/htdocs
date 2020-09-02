import React, { Component } from "react";
import { Col, Row, Button } from 'reactstrap';
import getData from "functions/getData";
import Form from 'components/parts/Forms';
import { getNextState, getNextInt } from "../gestioneStati";

export default class extends Component {

    /*
        STEP PER FIRMA: 

        -> ZERO 
        - Esposizione documenti e testi introduttivi
        - Pulsante RICHIEDI FIRMA -> Avvio richiesta firma infocert e chiamata INIT (raccoglie le clausole):
            JSON DA SPEDIRE: 
                {
                "id":61, <- Pratica
                "stato":"FIRMA_XXX", <- ES: FIRMA_PRECONTRATTUALE
                "intestatarioCorrente":0, <- INTCORRENTE
                “stepFirma”:”INIT” <- Step richiesto
                }

        
        -> INIT (avvia la sessione di firma)
        - Espone documenti in maniera statica
        - Raccoglie ed espone le clausole personalizzate dinamiche (i parametri sono all'interno)
        - Spedisce tutto ad ACCETTAZIONE_INFOCERT (in questa occasione viene spedito anche l'otp via SMS)
        - In basso c'è un pulsante di invio precontrattuale via e-mail

        -> MESSAGGIO_CONFERMA (Step "locale" per dare messaggio di conferma)

        -> ACCETTAZ_INFOCERT
        - Espone una tonnellata di documenti che vengono raccolti dal JSON ed il campo dell'OTP che, tuttavia, non e' come gli altri (occorre anche prevedere un "resend" dell'otp)
        - Invia l'otp a FirmaDoc
        - Alla pressione di "Firma il contratto" viene restituito il feedback ed il cliente può avanzare con il "prosegui"
        -> PASSA ALLO STEP "GLOBALE" successivo (attendere conferma di Caimi per sapere se c'è da fare la chiamata oppure no)

        Controllare ATTESA FIRMA CONSULENTE
    */
    constructor(props) {
        super(props);
        this.state = {
            step: "INIT",
            loading: false,

            flagAccInfocert: false,
            flagFirma: false,

            // Blocchi dati da chiamate
            initData: null,


            proseguiEnabled: true
        }
        this.sendInit = this.sendInit.bind(this);
        this.firmaDoc = this.firmaDoc.bind(this);
    }

    /* AZIONE INIT */ 
    sendInit() {
        let obform =  this.props.obformprops.obstate;
        this.setState({ loading: true });
        getData({
            url: {"svil":"/json_data/onboarding/firma_init.json","prod":""},
           
            data: {
                "id":obform.field_id, 
                "stato":getNextState(obform), 
                "intestatarioCorrente":getNextInt(obform),
                "stepFirma":"INIT"
            },
                
            success: (data) => {
                // Preparazione del form di accettazione

                this.setState({
                    step: "ACCETTAZ_INFOCERT",
                    proseguiEnabled:false,
                    initData: data.results,
                    loading: false
                });
            }
        })


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

    render() {

        return (
            <>
                {/* <h4>STEP: {this.state.step}</h4> */ }
                <div className={this.state.loading ? "loading" : ""}>
                    {this.state.step === "INIT" &&
                        <>
                            {this.props.preDocs}

                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" className="sub-buttons" onClick={this.sendInit}>Richiedi certificato</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                    {this.state.step === "ACCETTAZ_INFOCERT" &&
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