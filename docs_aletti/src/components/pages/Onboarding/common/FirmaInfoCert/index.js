import React, { Component } from "react";
import { Col, Row, Button } from 'reactstrap';
import getData from "functions/getData";
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

        -> MESSAGGIO_CONFERMA (Step "locale" per dare messaggio di conferma)

        -> ACCETTAZ_INFOCERT
        - Espone una tonnellata di documenti che vengono raccolti dal JSON ed il campo dell'OTP che, tuttavia, non e' come gli altri (occorre anche prevedere un "resend" dell'otp)
        - Invia l'otp a FirmaDoc
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

            accettazConsensi: null
        }
        this.sendInit = this.sendInit.bind(this);
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
                    accettazConsensi: data.results && data.results.info && data.results.info.clauses,
                    loading: false
                });
            }
        })


    }

    render() {

        return (
            <>
                <h4>STEP: {this.state.step}</h4>
                <div className={this.state.loading ? "loading" : ""}>
                    {this.state.step === "INIT" &&
                        <>
                            <section>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                <Row>
                                    <Col>
                                        <ul className="elenco-documenti">
                                            <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                            <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                            <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                        </ul>
                                    </Col>
                                </Row>
                            </section>
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
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                <Row>
                                    <Col>
                                        <ul className="elenco-documenti">
                                            <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                            <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                        </ul>
                                    </Col>
                                </Row>
                            </section>
                            <section>
                                
                                {this.state.accettazConsensi.map((v,i)=>{
                                    return <div key={i}>{v.text}</div>
                                })}

                            </section>
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" disabled={!this.state.flagAccInfocert} className="sub-buttons" onClick={() => this.setState({ step: "MESSAGGIO_CONFERMA" })}>Prosegui</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                     {this.state.step === "MESSAGGIO_CONFERMA" &&
                        // Inizializzazione
                        <>
                            firma
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" className="sub-buttons" onClick={() => this.setState({ step: "MESSAGGIO_CONFERMA" })}>Prosegui</Button>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </>
                    }
                    {this.state.step === "FIRMADOC" &&
                        // Inizializzazione
                        <>
                            firma
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" className="sub-buttons" onClick={()=>alert("step successivo!")}>Firma il contratto</Button>
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