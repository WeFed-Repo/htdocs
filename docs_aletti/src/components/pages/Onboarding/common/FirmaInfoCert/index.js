import React, { Component } from "react";
import { Col, Row, Button } from 'reactstrap';
import getData from "functions/getData";
import Form from 'components/parts/Forms';
import "./firmaInfoCert.scss";

export default class extends Component {

    /*
        STEP PER FIRMA: 

        url: http://promotorisvi7web.webank.local/promotori/onboarding/rest/infocert/firmaOneShot

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
            // step: "INIT", <!-- STEP DI START
            step: "FIRMADOC",
            loading: true,

            flagAccInfocert: false,
            flagFirma: false,

            // Blocchi dati da chiamate
            initData: null,

            clausoleData: null,
            clausoleCheckEnabled: false,
            clausoleChecks: "",

            firmaOtp:"",
            otpLoading: false,
            otpDisabled: true,
            otpState: "TEST",
            callOtpText: "Richiedi codice OTP",

            proseguiEnabled: true
        }
        this.sendClausole = this.sendClausole.bind(this);
        this.firmaDoc = this.firmaDoc.bind(this);
        this.generalOnChange = this.generalOnChange.bind(this);
    }

    // OnChange dei check
    generalOnChange(e) {
        Form.change(this,e);         
    }  

    allChecked(checkvalue,checkarray) {
        var checkall = (checkvalue.split(",").sort().join(",") === checkarray.sort().join(","));
        return checkall;
    }

    // Richiede un codice OTP
    callOtp(){
        this.setState({
            otpLoading: true
        });
        getData({
            url: {"svil": "/json_data/simpleEsitoOk.json","prod": "/promotori/onboarding/rest/infocert/"+ this.props.obformprops.obstate.field_id + "/"+this.props.obformprops.obstate.field_intestcorrente+"/reSendOtpFirma"},
            success: ()=>{
                this.setState({
                    callOtpText: "Invia nuovo codice",
                    otpDisabled:false,
                    otpLoading:false,
                    firmaOtp:""
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
                    clausoleData: data.results,
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
                <div className="icLogo"></div>
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
                            <h4>Dichiarazioni</h4>
                            <section>
                                <ul className="elenco-documenti">
                                   <li><a href={this.state.clausoleData.url} target="_blank" onClick={()=>this.setState({clausoleCheckEnabled: true})}><i className="icon icon-file_pdf"></i>{this.state.clausoleData.name}</a></li>
                                </ul>
                            </section>
                            <p><strong>Il titolare</strong></p>
                            <section className="clauses">
                                <Form.checkgroup
                                    onChange={this.generalOnChange} 
                                    name="clausoleChecks"
                                    className="no-label" 
                                    value={this.state.clausoleChecks} 
                                    options={this.state.clausoleData.clauses.map((v)=>{return {"value": v.id,"text": v.text}})} 
                                    orientation="vertical" 
                                    disabled={!this.state.clausoleCheckEnabled}
                                    cbchange={(val)=>this.setState({proseguiEnabled : this.allChecked(val, this.state.clausoleData.clauses.map((v)=>{return v.id}))})}
                                    >
                                </Form.checkgroup>
                            </section>
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            <Button color="primary" disabled={!this.state.proseguiEnabled} className="sub-buttons" onClick={() => this.setState({ step: "FIRMADOC" ,proseguiEnabled:false})}>Prosegui</Button>
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
                            {this.props.firmaDocsValid &&
                                <div className="otp">
                                    <p>Il cliente può ora apporre la sua firma digitale sui contratti richiedendo l'invio del codice OTP via SMS sul proprio cellulare ed inserendolo nello spazio sottostante.</p>
                                    <div className={"otp-block " + (this.state.otpLoading? "loading":"")}>
                                        <label>Il cliente Inserisce il codice OTP</label>
                                        <input type="text" maxLength="6" disabled={this.state.otpDisabled} value={this.state.firmaOtp} onChange={(e)=>this.setState({firmaOtp: e.target.value})}></input>
                                        <span onClick={()=>this.callOtp()} className="otp-sender" placeholder="******">{this.state.callOtpText}</span>
                                    </div>
                                </div>
                            }
                            <Row>
                                <Col>
                                    <div className="btn-console btn-console-sub">
                                        <div className="btn-console-right">
                                            {this.props.functionPrecontrattuale && 
                                                <Button color="primary" disabled={!this.props.precontEnabled} className="sub-buttons" onClick={this.props.functionPrecontrattuale}>Invia precontrattuale</Button>
                                            }
                                            {!this.props.functionPrecontrattuale && <Button color="primary" disabled={this.state.firmaOtp.length<6} className="sub-buttons" onClick={this.firmaDoc}>Firma il contratto</Button>}
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