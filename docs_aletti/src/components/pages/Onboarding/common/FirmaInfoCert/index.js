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

        -> MESSAGGIO DI CONFERMA (Capire se deve essere un vero e proprio STEP oppure no)

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
            flagFirma: false
        }
        this.sendInit = this.sendInit.bind(this);
    }

    /* AZIONE INIT */ 
    sendInit() {
        let obform =  this.props.obformprops.obstate;
        this.setState({ loading: true });
        getData({
            url: {"svil":"","prod":""},
           
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
                                    <div class="btn-console btn-console-sub">
                                        <div class="btn-console-right">
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
                                CONSENSI
                </section>
                            <Row>
                                <Col>
                                    <div class="btn-console btn-console-sub">
                                        <div class="btn-console-right">
                                            <Button color="primary" disabled={!this.state.flagAccInfocert} className="sub-buttons" onClick={() => this.setState({ step: "FIRMADOC" })}>Prosegui</Button>
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
                            Firma il contratto (attiva il "prosegui totale")
                </>
                    }
                </div>
            </>
        )

    }

}