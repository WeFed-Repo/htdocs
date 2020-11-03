import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import FirmaInfoCert from '../../common/FirmaInfoCert'
import salva from "./salva";
import validazione from "./validazione";
import { Col, Row, Button } from 'reactstrap';

// FORM PRINCIPALE 
class StepForm extends Component {

    componentDidMount() {
        this.props.setObState({
            // Sblocco e blocco interfaccia (true per Bypass, default a false)
            proseguiEnabled: true
        })
    }


    render() {

        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate;
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini;
        let obformprops = {
            obstate: this.props.obstate,
            obchange: (e) => Form.change(this, e),
            obdomini: this.props.obdomini,
            setObState: this.props.setObState,
        }

        // Eventuale nome intestatario 
        let nomeint;
        if (formstate.field_numintestatari === "2") {
            nomeint = " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_nome"] + " " + formstate["field_anagraficablob_intestatari_" + formstate["field_intestcorrente"] + "_cognome"];
        }

        // Prepara gli step della firma
       
       

        let firmaDocs = <section>
        <p>Elemento autoconsistente per firma finale</p>
        <Row>
            <Col>       
                <ul className="elenco-documenti">
                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                    <li><a><i className="icon icon-file_pdf"></i>Lorem ipsum dolor sit amet</a></li>
                </ul>
            </Col>
        </Row>
        </section>;



        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>Firma TUB - {nomeint}</h3>
                    <FirmaInfoCert {...{ obformprops, firmaDocs }}></FirmaInfoCert>
                </div>
            </div>
        )

    }

}

export default {
    form: StepForm,
    validazione: validazione,
    salva: salva
}