import React,{Component} from "react";
import { Col, Row, Button } from 'reactstrap';

export default class extends Component {

    /*
        STEP PER FIRMA: INIT -> ACCETTAZ_INFOCERT -> FIRMADOC
    */

    state = {
        step:"INIT",

        flagAccInfocert: false,

        flagFirma: false
    }

    render() {

        return(
            <>
                <h4>STEP: {this.state.step}</h4>
                {this.state.step==="INIT" &&
                <>
                    <section>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                        <Row>
                            <Col>
                                <ul className="elenco-documenti">
                                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
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
                                    <Button color="primary" className="sub-buttons" onClick={()=>this.setState({step: "ACCETTAZ_INFOCERT"})}>Richiedi certificato</Button>            
                                </div>
                            </div>
                        </Col>
                    </Row>
                </>
                }
                 {this.state.step==="ACCETTAZ_INFOCERT" &&
                 // Inizializzazione
                 <>
                 <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    <Row>
                        <Col>
                            <ul className="elenco-documenti">
                                <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                                <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
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
                                <Button color="primary" disabled={!this.state.flagAccInfocert} className="sub-buttons" onClick={()=>this.setState({step: "FIRMADOC"})}>Prosegui</Button>            
                            </div>
                        </div>
                    </Col>
                </Row>
                </>
                }
                {this.state.step==="FIRMADOC" &&
                 // Inizializzazione
                <>
                    firma
                    Firma il contratto (attiva il "prosegui totale")
                </>
                }
            </>
        )

    }

}