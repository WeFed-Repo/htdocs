import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';

export default class extends Component {

    constructor(props) {
        super(props);
        this.state = {
            allDisabled: undefined,

            /* Allestimento degli errori  */
            errors: {},

            /* Esempi di campo e relative inizializzazioni */
            esempio_campo_input: "",
            esempio_campo_input_numero: "",
            esempio_campo_input_telefono: "",
            esempio_campo_input_alfanumerico: "",
            esempio_campo_select: "",
            esempio_campo_select_url: "",
            esempio_campo_select_url_collegato: "",
            esempio_campo_data: "",
            esempio_campo_data_callback: "",
            esempio_campo_checkgroup: "",
            esempio_campo_checkgroup_verticale: "",
            esempio_campo_radiogroup: "",
            esempio_campo_radiogroup_verticale: "",
            esempio_campo_check: "",
            esempio_campo_checkfile: "",

            esempio_campo_file: [],
            esempio_campo_file_fr: []
        }
        this.generalOnChange=this.generalOnChange.bind(this);
        this.setAllErrors = this.setAllErrors.bind(this);
    }


    /* 
    Setting dell'onchange "locale": si aggancia il form ai singoli campi tramite il componente apposito in Forms 
    L'unico scopo di avere una funzione wrapper è quella di passare il "this" alla funzione Form.change che contiene lo stato dei campi da cambiare runtime
    */
    generalOnChange(e) {
        Form.change(this,e);            
    }        


    /* Funzione che mette un errore su tutti i campi */
    setAllErrors() {

        // Carica tutti i nomi di campo
        let errors = {};
        Object.keys(this.state).forEach((val)=>{
            if(val.indexOf("esempio_campo")>=0) 
                errors[val] = "Esempio di errore sul campo '"+val+"'";
        });
        this.setState({
            errors: errors
        })

    }

    render() {

        /* Stati dei campi del form (e' possibile utilizzare direttamente this.state, ovviamente) */
        let formstate = this.state;

        // Rendering del form semplificato (considerare "formstate" come main container per rivedere eventuali condizioni per gli elementi e per gli errori)
        return (
            <div className="onboarding-wrapper">

                <div className="onboarding-form">
                    <h2>File upload</h2>

                    <Row>
                        <Col sm="3">
                            <Form.file
                                label="Upload file (unico o f/r)"
                                name="esempio_campo_file"
                                value={formstate.esempio_campo_file}
                                disabled={this.state.allDisabled}
                                error={formstate.errors["esempio_campo_file"]}
                                onChange={this.generalOnChange}
                                tipo="fr"
                                idBozza="99999999"
                                >
                                ></Form.file>
                        </Col>
                        <Col sm="3">
                            <Form.file
                                label="Upload file (unico)"
                                name="esempio_campo_file_fr"
                                value={formstate.esempio_campo_file_fr}
                                disabled={this.state.allDisabled}
                                error={formstate.errors["esempio_campo_file_fr"]}
                                onChange={this.generalOnChange}
                                idBozza="999999999"
                                >
                                ></Form.file>
                        </Col>
                    </Row>

                    <h2>Input</h2>
                    <Row>
                        <Col>
                            <Form.input
                                name="esempio_campo_input"
                                value={formstate.esempio_campo_input}
                                label="Input di esempio"
                                error={formstate.errors["esempio_campo_input"]}
                                onChange={this.generalOnChange}
                                placeholder="Inserisci un valore"
                                disabled={this.state.allDisabled}
                            ></Form.input>
                        </Col>
                        <Col>
                            <Form.input
                                name="esempio_campo_input_numero"
                                value={formstate.esempio_campo_input_numero}
                                label="Input di esempio (numero)"
                                error={formstate.errors["esempio_campo_input_numero"]}
                                onChange={this.generalOnChange}
                                placeholder="Inserisci un numero"
                                mask="numero"
                                disabled={this.state.allDisabled}
                            ></Form.input>
                        </Col>
                        <Col>
                            <Form.input
                                name="esempio_campo_input_telefono"
                                value={formstate.esempio_campo_input_telefono}
                                label="Input di esempio (telefono)"
                                error={formstate.errors["esempio_campo_input_telefono"]}
                                onChange={this.generalOnChange}
                                mask="telefono"
                                placeholder="Inserisci un numero telefonico"
                                disabled={this.state.allDisabled}
                            ></Form.input>
                        </Col>
                        <Col>
                            <Form.input
                                name="esempio_campo_input_alfanumerico"
                                value={formstate.esempio_campo_input_alfanumerico}
                                label="Input di esempio (alfanumerico)"
                                error={formstate.errors["esempio_campo_input_alfanumerico"]}
                                onChange={this.generalOnChange}
                                mask="alfanumerico"
                                placeholder="Inserisci un valore"
                                disabled={this.state.allDisabled}
                            ></Form.input>
                        </Col>
                    </Row>


                    <h2>Date</h2>
                    <Row>
                       <Col sm="3">
                            <Form.date
                                name="esempio_campo_data"
                                value={formstate.esempio_campo_data}
                                label="Data di esempio"
                                error={formstate.errors["esempio_campo_data"]}
                                placeholder="Seleziona una data..."
                                onChange={this.generalOnChange}
                                dateFrom={"07/12/1990"}
                                dateTo={"01/03/1991"}
                                disabled={this.state.allDisabled}
                            ></Form.date>
                        </Col>
                        <Col sm="3">
                            <Form.date
                                name="esempio_campo_data_callback"
                                value={formstate.esempio_campo_data_callback}
                                label="Data di esempio con callback"
                                error={formstate.errors["esempio_campo_data_callback"]}
                                placeholder="Seleziona una data..."
                                onChange={this.generalOnChange}
                                cbchange={(val)=>{alert("La data selezionata è "+ val)}}
                                disabled={this.state.allDisabled}
                            ></Form.date>
                        </Col>
                    </Row>


                    <h2>Select</h2>
                    <Row>
                        <Col sm="4">
                            <Form.select
                                name="esempio_campo_select"
                                value={formstate.esempio_campo_select}
                                label="Select di esempio"
                                error={formstate.errors["esempio_campo_select"]}
                                onChange={this.generalOnChange}
                                placeholder="Seleziona..."
                                disabled={this.state.allDisabled}
                                options={[
                                    { "value": "val1", "text": "Selezione valore 1" },
                                    { "value": "val2", "text": "Selezione valore 2" },
                                    { "value": "val3", "text": "Selezione valore 3" }
                                ]}
                                cbchange={(newvalue)=>alert("Attivata callback onchange per valore \""+ newvalue + "\"")}
                            ></Form.select>
                        </Col>
                        <Col sm="4">
                            <Form.select
                                name="esempio_campo_select_url"
                                value={formstate.esempio_campo_select_url}
                                label="Select di esempio (dato da url)"
                                error={formstate.errors["esempio_campo_select_url"]}
                                onChange={this.generalOnChange}
                                placeholder="Seleziona..."
                                disabled={this.state.allDisabled}
                                ajaxoptions="province"
                            ></Form.select>
                        </Col>
                        {formstate.esempio_campo_select_url!=="" && <Col sm="4">
                            <Form.select
                                name="esempio_campo_select_url_collegato"
                                value={formstate.esempio_campo_select_url_collegato}
                                label="Select con url collegato dipendente da altra select"
                                error={formstate.errors["esempio_campo_select_url_collegato"]}
                                onChange={this.generalOnChange}
                                placeholder="Seleziona..."
                                disabled={this.state.allDisabled}
                                ajaxoptions="comuni"
                                ajaxfilter={formstate.esempio_campo_select_url}
                            ></Form.select>
                        </Col>}
                       
                    </Row>

                    <h2>Check & radio</h2>

                    <Row>
                        <Col>
                            <Form.checkgroup
                                name="esempio_campo_checkgroup"
                                value={formstate.esempio_campo_checkgroup}
                                label="Checkgroup di esempio"
                                error={formstate.errors["esempio_campo_checkgroup"]}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                options={[
                                    { "value": "v1", "text": "Checkbox valore 1" },
                                    { "value": "v2", "text": "Checkbox valore 2" },
                                    { "value": "v3", "text": "Checkbox valore 3" }
                                ]}
                            >
                                ></Form.checkgroup>
                        </Col>
                        <Col>
                            <Form.radiogroup
                                name="esempio_campo_radiogroup"
                                value={formstate.esempio_campo_radiogroup}
                                label="Radio di esempio"
                                error={formstate.errors["esempio_campo_radiogroup"]}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                options={[
                                    { "value": "radio_v1", "text": "Radio valore 1" },
                                    { "value": "radio_v2", "text": "Radio valore 2" },
                                    { "value": "radio_v3", "text": "Radio valore 3" }
                                ]}
                            >
                                ></Form.radiogroup>
                        </Col>
                    </Row>
                    <Row>
                        <Col>
                            <Form.checkgroup
                                name="esempio_campo_checkgroup_verticale"
                                orientation="vertical"
                                value={formstate.esempio_campo_checkgroup_verticale}
                                label="Checkgroup di esempio"
                                error={formstate.errors["esempio_campo_checkgroup_verticale"]}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                options={[
                                    { "value": "v1", "text": "Checkbox valore 1" },
                                    { "value": "v2", "text": "Checkbox valore 2" },
                                    { "value": "v3", "text": "Checkbox valore 3" }
                                ]}
                            >
                                ></Form.checkgroup>
                        </Col>
                        <Col>
                            <Form.radiogroup
                                name="esempio_campo_radiogroup_verticale"
                                orientation="vertical"
                                value={formstate.esempio_campo_radiogroup_verticale}
                                label="Radio di esempio"
                                error={formstate.errors["esempio_campo_radiogroup_verticale"]}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                options={[
                                    { "value": "radio_v1", "text": "Radio valore 1" },
                                    { "value": "radio_v2", "text": "Radio valore 2" },
                                    { "value": "radio_v3", "text": "Radio valore 3" }
                                ]}
                            >
                                ></Form.radiogroup>
                        </Col>
                    </Row>
                    <Row>
                        <Col>
                            <p><strong>Disclaimer:</strong><br />
                                Il seguente campo è solo un piccolo flag di accettazione obbligatorio di esempio.</p>
                            <Form.checkgroup className="no-label"
                                name="esempio_campo_check"
                                value={formstate.esempio_campo_check}
                                error={formstate.errors["esempio_campo_check"]}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                options={[{ "value": "checcato", "text": "Autorizzo il checkbox ad attivarsi ai sensi di quanto scritto qui sopra" }]}
                            >
                                ></Form.checkgroup>
                        </Col>
                        <Col>
                            <p><strong>Presa visione:</strong><br />
                                Qui sotto viene esposto un campo di "presa visione" ovvero un flag valorizzato con il valore "true" una volta che il documento viene aperto in una nuova finestra.</p>
                            <Form.checkfile className="no-label"
                                name="esempio_campo_checkfile"
                                value={formstate.esempio_campo_checkfile}
                                onChange={this.generalOnChange}
                                disabled={this.state.allDisabled}
                                error={formstate.errors["esempio_campo_checkfile"]}
                                filedescription="Contratti per la prestazione di Servizi ed Attività d'Investimento e Servizi Accessori"
                                fileurl="http://www.google.it"
                                filetype="pdf"
                            >
                                ></Form.checkfile>
                        </Col>
                    </Row>


                    
                </div>

                <div className="onboarding-pulsantiera">
                    <Button onClick={()=>console.log(this.state)}>Mostra stato form in console</Button>
                    <Button onClick={this.setAllErrors} style={{ marginLeft: "10px" }}>Setta errori su tutti i campi</Button>
                    <Button onClick={() => this.setState({errors: {}})} style={{ marginLeft: "10px" }}>Resetta errori</Button>
                    <Button onClick={() => this.setState({ allDisabled: true })} style={{ marginLeft: "10px" }}>Disabilita tutti</Button>
                </div>

            </div>
        )
    }

}