import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import DefaultCollapse from "components/parts/DefaultCollapse";
import { Col, Row, Button } from 'reactstrap';
import validazione from "./validazione";
import salva from "./salva";

class Adever extends Component {

    render() {

        let int = this.props.int,
            formstate = this.props.obstate,
            obchange = this.props.obchange;

        // Calcolo variabili "locali"
        let nomeintestatario = formstate["field_anagraficablob_intestatari_" + int + "_nome"] + " " + formstate["field_anagraficablob_intestatari_" + int + "_cognome"]

        return (
            <DefaultCollapse
                label={"Normativa antiricilaggio " + nomeintestatario}
                startsOpen={int === "0"}
                className="search-collapse"
                disabled={false}
            >
                <section className="onboarding-block">
                    <Row>
                        <Col>
                            <p>Ai sensi della normativa antiriciclaggio (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali. Ti ricordiamo che il rilascio di false informazioni oppure omissioni può comportare conseguenze anche di natura penale.</p>
                            <Form.checkgroup
                                label="Titolare effettivo"
                                name={"field_sessionfirmeblob_intestatarifirme_"+int+"_titolareeffettivo"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_"+int+"_titolareeffettivo"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_"+int+"_titolareeffettivo"]}
                                onChange={obchange}
                                options={[{ "value": "true", "text": "Dichiaro di essere titolare effettivo del conto e di agire esclusivamente per conto mio." }]}
                            ></Form.checkgroup>
                        </Col>
                    </Row>
                </section>
                <section className="onboarding-block">
                    <Row>
                        <Col sm="6">
                            <Form.radiogroup
                                label="Sei una persona politicamente esposta?"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_personaesposta"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_personaesposta"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_personaesposta"]}
                                onChange={this.props.obchange}
                                options={[{ "value": "true", "text": "Sì" }, { "value": "false", "text": "No" }]}
                            ></Form.radiogroup>
                        </Col>
                    </Row>
                    <h4>Informazioni professionali e situazione patrimoniale</h4>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Professione"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_professione_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_professione_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_professione_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_professione"]}
                            ></Form.select>
                        </Col>
                        <Col sm="6">
                            <Form.select
                                label="Tipo attività economica"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_taesettore_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_taesettore_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_taesettore_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_taesettore"]}
                            ></Form.select>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Stato svolgimento"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_nazionalita_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_nazionalita_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_nazionalita_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_nazionalita"]}
                            ></Form.select>
                        </Col>
                        {
                            formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_nazionalita_0_id"] === "86" && 
                            <Col sm="6">
                                <Form.select
                                    label="Provincia svolgimento"
                                    name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_provincia_0_id"}
                                    value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_provincia_0_id"]}
                                    error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_provincia_0_id"]}
                                    onChange={obchange}
                                    disabled={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_nazionalita_0_id"] !== "86"}
                                    placeholder="Seleziona..."
                                    options={this.props.obdomini["adever_provincia"]}
                                ></Form.select>
                            </Col>
                        }
                        
                    </Row>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Reddito annuo"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciareddito_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciareddito_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciareddito_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_fasciareddito"]}
                            ></Form.select>
                        </Col>
                        <Col sm="6">
                            <Form.input
                                label="Note reddito annuo"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_fasciaredditonote"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_fasciaredditonote"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_fasciaredditonote"]}
                                onChange={obchange}
                                placeholder="Note..."
                            ></Form.input>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Origine del reddito"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originereddito_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originereddito_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originereddito_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_originereddito"]}
                            ></Form.select>
                        </Col>
                        <Col sm="6">
                        <Form.input
                                label="Note origine reddito"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_origineredditonote"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_origineredditonote"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_origineredditonote"]}
                                onChange={obchange}
                                placeholder="Note..."
                            ></Form.input>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Patrimonio"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciapatrimonio_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciapatrimonio_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciapatrimonio_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_fasciapatrimonio"]}
                            ></Form.select>
                        </Col>
                       
                            {
                                formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_fasciapatrimonio_0_id"] === "4" &&
                               
                                <Col sm="6">
                                    <Form.input
                                    label="Note patrimonio"
                                    name={"field_sessionfirmeblob_intestatarifirme_" + int + "_fasciapatrimonionote"}
                                    value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_fasciapatrimonionote"]}
                                    error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_fasciapatrimonionote"]}
                                    onChange={obchange}
                                    placeholder="Note..."
                                ></Form.input>
                                </Col>
                            }
                            
                        
                    </Row>
                    <Row>
                        <Col sm="6">
                            <Form.select
                                label="Origine del patrimonio"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originefondi_0_id"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originefondi_0_id"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originefondi_0_id"]}
                                onChange={obchange}
                                placeholder="Seleziona..."
                                options={this.props.obdomini["adever_originefondi"]}
                            ></Form.select>
                        </Col>
                        {formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_listrispadever_originefondi_0_id"]==="7" &&
                        <Col sm="6">
                        <Form.input
                                label="Note origine del patrimonio"
                                name={"field_sessionfirmeblob_intestatarifirme_" + int + "_originefondinote"}
                                value={formstate["field_sessionfirmeblob_intestatarifirme_" + int + "_originefondinote"]}
                                error={formstate.errors["field_sessionfirmeblob_intestatarifirme_" + int + "_originefondinote"]}
                                onChange={obchange}
                                placeholder="Note..."
                            ></Form.input>
                        </Col>
                        
                        
                        }
                        
                    </Row>
                </section>
            </DefaultCollapse>
        )
    }

}


// FORM PRINCIPALE 
class StepForm extends Component {

    /* Eventuali stati "locali" 
    state = {
        "localfield_xxxx": (this.props.obstate.field_campo_collegato === "true") ? true : false
    }
    */

    render() {

        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate;
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini;

        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <h3>Adempimenti normativi</h3>
                    <section className="onboarding-block">
                        <p>Paragrafo introduttivo lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing lorem ipsum dolor sit amet consectetur adipiscing.</p>
                        <Row>
                            <Col sm="6">
                                <Form.select
                                    name={"field_sessionfirmeblob_naturascopo_0_id"}
                                    value={formstate["field_sessionfirmeblob_naturascopo_0_id"]}
                                    label="Scopo del rapporto di CC"
                                    error={formstate.errors["field_sessionfirmeblob_naturascopo_0_id"]}
                                    onChange={this.props.obchange}
                                    placeholder="Seleziona..."
                                    options={this.props.obdomini["adever_naturascopo"]}
                                ></Form.select>
                            </Col>
                            { formstate["field_sessionfirmeblob_depositoincluso"]==="true" && 
                            <Col sm="6">
                                <Form.select
                                    name={"field_sessionfirmeblob_naturascopodeposito_0_id"}
                                    value={formstate["field_sessionfirmeblob_naturascopodeposito_0_id"]}
                                    label="Scopo del rapporto di custodia titoli"
                                    error={formstate.errors["field_sessionfirmeblob_naturascopodeposito_0_id"]}
                                    onChange={this.props.obchange}
                                    placeholder="Seleziona..."
                                    options={this.props.obdomini["adever_naturascopodeposito"]}
                                ></Form.select>
                            </Col>
                            }
                        </Row>
                    </section>
                    <section className="onboarding-block">
                        <Adever int="0" {...this.props}></Adever>
                    </section>
                    {
                        formstate.field_numintestatari === "2" &&
                        <section className="onboarding-block">
                            <Adever int="1" {...this.props}></Adever>
                        </section>
                    }
                    <section className="onboarding-block">
                        <h3>Autorizzazione alla capitalizzazione periodica degli interessi</h3>
                        <p dangerouslySetInnerHTML={{__html: this.props.obdomini.disclaimer["ALETTI_CAP_PERIODICA"]}}></p>
                        <Form.radiogroup
                            className="no-label"
                            name={"field_sessionfirmeblob_capitalizzazioneperiodica_consenso"}
                            value={formstate["field_sessionfirmeblob_capitalizzazioneperiodica_consenso"]}
                            error={formstate.errors["field_sessionfirmeblob_capitalizzazioneperiodica_consenso"]}
                            onChange={this.props.obchange}
                            options={[{ "value": "true", "text": "Acconsento" }, { "value": "false", "text": "Non acconsento" }]}
                        ></Form.radiogroup>

                    </section>
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