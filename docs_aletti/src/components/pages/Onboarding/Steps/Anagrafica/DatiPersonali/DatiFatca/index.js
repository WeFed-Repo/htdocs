import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import 'moment/locale/it';
import DefaultModal from "components/parts/DefaultModal";
import CheckAccordionErrors from "components/pages/Onboarding/common/checkAccordionErrors"


class DatiFatca extends Component {
    constructor(props) {
        super(props);
        let listaTinRequested = this.props.obdomini["nazioni_attive"].filter((el) => { return el.flagTin === "S" }).map((obj) => {
            return obj.value;
        });
        let listaTinOptional = this.props.obdomini["nazioni_attive"].filter((el) => { return el.flagTin === "X" }).map((obj) => {
            return obj.value;
        });
        this.state = {
            isSecondaResidenzaVisible: [true, true],
            showModalFatcaDisabled: false,
            //STATI PER FATCA //SE NON CHIAMO LA BOZZA DI DEFAULT SI PARTE DA SITUAZIONE 2 RESIDENZE (ITALIA E UNA STRANIERA DA SELEZIONARE)
            local_numero_residenze_fiscali: [this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length !== "" ? this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length : 2, this.props.formstate.field_anagraficablob_intestatari_1_listresidenzefiscale_length !== "" ? this.props.formstate.field_anagraficablob_intestatari_1_listresidenzefiscale_length : 2],
            isBtnAggiungiActive: this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length !== "" ? true : false,
            isTinRequested1: [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic"]) ? true : false, listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic"]) ? true : false],
            isTinRequested2: [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic"]) ? true : false, listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic"]) ? true : false],
            isTinRequested3: [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic"]) ? true : false, listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic"]) ? true : false],
            isTinOptional1: [listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic"]) ? true : false, listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic"]) ? true : false],
            isTinOptional2: [listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic"]) ? true : false, listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic"]) ? true : false],
            isTinOptional3: [listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic"]) ? true : false, listaTinOptional.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic"]) ? true : false]
        }
        this.rimuoviResidenza = this.rimuoviResidenza.bind(this);
        this.aggiungiResidenza = this.aggiungiResidenza.bind(this);
    }
    rimuoviResidenza() {
        this.setState({ isBtnAggiungiActive: true })
        this.setState(function (state, props) {

            if (this.props.indexInt === '0' && state.local_numero_residenze_fiscali[0] > 2) {
                if (state.local_numero_residenze_fiscali[0] === 3) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic: "",
                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin: ""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0] - 1, this.state.local_numero_residenze_fiscali[1]],
                        isTinRequested2: [false, this.state.isTinRequested2[1]],
                        isTinOptional2: [false, this.state.isTinOptional2[1]]
                    }

                }
                if (state.local_numero_residenze_fiscali[0] === 4) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic: "",
                        field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin: ""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0] - 1, this.state.local_numero_residenze_fiscali[1]],
                        isTinRequested3: [false, this.state.isTinRequested3[1]],
                        isTinOptional3: [false, this.state.isTinOptional3[1]],
                    }
                }


            }
            else if (this.props.indexInt === '1' && state.local_numero_residenze_fiscali[1] > 2) {
                if (state.local_numero_residenze_fiscali[1] === 3) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic: "",
                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin: ""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1] - 1],
                        isTinRequested2: [this.state.isTinRequested2[0], false],
                        isTinOptional2: [this.state.isTinOptional2[0], false]
                    }
                }
                if (state.local_numero_residenze_fiscali[1] === 4) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic: "",
                        field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin: ""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1] - 1],
                        isTinRequested3: [this.state.isTinRequested3[0], false],
                        isTinOptional3: [this.state.isTinOptional3[0], false]
                    }
                }
            }
            else if (this.props.indexInt === '0') {
                this.props.setObState({
                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic: "",
                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin: ""
                })
                return {
                    isSecondaResidenzaVisible: [false, state.isSecondaResidenzaVisible[1]],
                    local_numero_residenze_fiscali: [1, this.state.local_numero_residenze_fiscali[1]],
                    isBtnAggiungiActive: true,
                    isTinRequested1: [false, this.state.isTinRequested1[1]],
                    isTinOptional1: [false, this.state.isTinOptional1[1]]
                }

            }
            else if (this.props.indexInt === '1') {
                this.props.setObState({
                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic: "",
                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin: ""
                })
                return {
                    isSecondaResidenzaVisible: [state.isSecondaResidenzaVisible[0], false],
                    local_numero_residenze_fiscali: [this.state.local_numero_residenze_fiscali[0], 1],
                    isBtnAggiungiActive: true,
                    isTinRequested1: [this.state.isTinRequested1[0], false],
                    isTinOptional1: [this.state.isTinOptional1[0], false]
                }

            }
        })
    }
    aggiungiResidenza() {

        if (this.props.fatcaEnable) {
            this.setState(function (state, props) {
                if (this.props.indexInt === '0') {
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0] + 1, this.state.local_numero_residenze_fiscali[1]],
                        isSecondaResidenzaVisible: [true, state.isSecondaResidenzaVisible[1]],
                        isBtnAggiungiActive: false
                    }
                }
                else {
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1] + 1],
                        isSecondaResidenzaVisible: [state.isSecondaResidenzaVisible[0], true],
                        isBtnAggiungiActive: false
                    }
                }

            })
        }
        else {
            this.setState({ showModalFatcaDisabled: true })
        }
    }

    render() {
        let listaNazioni = this.props.obdomini["nazioni_attive"],
            //LISTA delle NAZIONI che richiedono il TIN
            listaNazioniTinRequested = listaNazioni.filter((el) => { return el.flagTin === "S" }),
            listaNazioniTinOptional = listaNazioni.filter((el) => { return el.flagTin === "X" }),
            //lista dei value relativi alle nazioni che richiedono il TIN
            listaTinRequested = listaNazioniTinRequested.map((obj) => {
                return obj.value;
            }),
            listaTinOptional = listaNazioniTinOptional.map((obj) => {
                return obj.value;
            }),
            //listaNazioni per la prima select (tolgo ITALIA che è la residenza di default)
            listaNazioniResidenza1 = listaNazioni.filter((el) => { return el.text !== "ITALIA" }),

            //LISTA DELLE EVENTUALI RESIDENZE ESTERE AGGIUNTIVE
            listaNazioniResidenza2 = [],
            listaNazioniResidenza3 = [];

        //PER OGNI INTESTATARIO RESTITUISCE LA LISTA DELLE NAZIONI AL NETTO DELLA NAZIONE SELEZIONATA IN PARTENZA    
        listaNazioniResidenza2[this.props.indexInt] = listaNazioniResidenza1.filter((el) => { return el.value !== this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"] })
        listaNazioniResidenza3[this.props.indexInt] = listaNazioniResidenza1.filter((el) => { return el.value !== this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"] }).filter((el) => { return el.value !== this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"] })

        //


        return (
            <>
                <DefaultModal
                    show={this.state.showModalFatcaDisabled} close={!this.state.showModalFatcaDisabled}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia ovvero di sussistenza di indizi di residenza all’estero ti informiamo che non è possibile procedere con l'apertura del rapporto. Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => this.setState({ showModalFatcaDisabled: false })} title="Chiudi">Chiudi</Button>
                        </div>
                    </div>
                </DefaultModal>
                <DefaultCollapse
                    label="ALTRI DATI FATCA E CRS"
                    startsOpen={false}
                    className="search-collapse"
                    hasErrors={
                        CheckAccordionErrors(this.props.formstate.errors,
                            [
                                this.props.anagraficaIntestatario + "listresidenzefiscale_1_tin",
                                this.props.anagraficaIntestatario + "listresidenzefiscale_2_tin",
                                this.props.anagraficaIntestatario + "listresidenzefiscale_3_tin"
                            ]
                        )}
                >
                    <section className="onboarding-block">
                        <p>Con l'entrata in vigore delle normative FATCA (Foreign Account Tax Compliance Act) e CRS (Common
                        Reporting Standard,) il Governo italiano si è impegnato a garantire la compliance fiscale
                        internazionale mediante l'adesione allo scambio automatico di informazioni fra le
amministrazioni tributarie dei rispettivi Paesi aderenti.</p>
                        <h4>Residenza fiscale estera</h4>
                    </section>


                    {this.state.isSecondaResidenzaVisible[this.props.indexInt] && <Row>
                        <Col xs="6">
                            {this.props.fatcaEnable && listaNazioniResidenza1 !== [] && listaNazioniResidenza1 !== undefined && <Form.select
                                label="Secondo paese di residenza fiscale"
                                name={this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                onChange={this.props.obchange}
                                cbchange={(val) => {
                                    if (val === "") {
                                        this.setState({ isBtnAggiungiActive: false })
                                    }
                                    else {
                                        this.setState({ isBtnAggiungiActive: true })
                                    }
                                    //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag

                                    if (listaTinRequested.some(value => value.toString() === val)) {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                return {
                                                    isTinRequested1: [true, state.isTinRequested1[1]]
                                                }
                                            }
                                            else {
                                                return {
                                                    isTinRequested1: [state.isTinRequested1[0], true]
                                                }
                                            }

                                        })
                                    }
                                    else {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin: "",
                                                })
                                                return {
                                                    isTinRequested1: [false, state.isTinRequested1[1]]
                                                }
                                            }
                                            else {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin: "",
                                                })
                                                return {
                                                    isTinRequested1: [state.isTinRequested1[0], false]
                                                }
                                            }

                                        })
                                    }

                                    //controllo di tin opzionale
                                    if (listaTinOptional.some(value => value.toString() === val)) {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                return {
                                                    isTinOptional1: [true, state.isTinOptional1[1]]
                                                }
                                            }
                                            else {
                                                return {
                                                    isTinOptional1: [state.isTinOptional1[0], true]
                                                }
                                            }

                                        })
                                    }
                                    else {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin: "",
                                                })
                                                return {
                                                    isTinOptional1: [false, state.isTinOptional1[1]]
                                                }
                                            }
                                            else {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin: "",
                                                })
                                                return {
                                                    isTinOptional1: [state.isTinOptional1[0], false]
                                                }
                                            }

                                        })
                                    }



                                }}
                                placeholder="Seleziona"
                                options={listaNazioniResidenza1}
                                disabled={this.state.local_numero_residenze_fiscali[this.props.indexInt] > 2}
                            >
                            </Form.select>
                            }
                            {
                                !this.props.fatcaEnable && <Form.select
                                    label="Secondo paese di residenza fiscale"
                                    name={this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                    onChange={() => { this.setState({ showModalFatcaDisabled: true }) }}
                                    placeholder="Seleziona"
                                    options={listaNazioniResidenza1}
                                >
                                </Form.select>
                            }
                        </Col>
                        {(this.state.isTinRequested1[this.props.indexInt] || this.state.isTinOptional1[this.props.indexInt]) && <Col xs="6">
                            <Form.input
                                label="Codice fiscale estero"
                                name={this.props.anagraficaIntestatario + "listresidenzefiscale_1_tin"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_1_tin"]}
                                error={!this.state.isTinOptional1[this.props.indexInt] ? this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_1_tin"] : ""}
                                onChange={this.props.obchange}
                                placeholder="inserisci tin"
                            >
                            </Form.input>

                        </Col>
                        }
                    </Row>
                    }
                    {this.state.local_numero_residenze_fiscali[this.props.indexInt] > 2 && listaNazioniResidenza2[this.props.indexInt] !== [] && listaNazioniResidenza2[this.props.indexInt] !== undefined &&
                        <Row>
                            <Col xs="6">
                                <Form.select
                                    label="Terzo paese di residenza fiscale"
                                    name={this.props.anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                    error={this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                    onChange={this.props.obchange}
                                    cbchange={(val) => {
                                        if (val === "") {
                                            this.setState({ isBtnAggiungiActive: false })
                                        }
                                        else {
                                            this.setState({ isBtnAggiungiActive: true })
                                        }
                                        //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag

                                        if (listaTinRequested.some(value => value.toString() === val)) {
                                            this.setState(function (state, props) {
                                                if (this.props.indexInt === '0') {
                                                    return {
                                                        isTinRequested2: [true, state.isTinRequested2[1]]
                                                    }
                                                }
                                                else {
                                                    return {
                                                        isTinRequested2: [state.isTinRequested2[0], true]
                                                    }
                                                }

                                            })
                                        }
                                        else {
                                            this.setState(function (state, props) {
                                                if (this.props.indexInt === '0') {
                                                    this.props.setObState({
                                                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin: "",
                                                    })
                                                    return {
                                                        isTinRequested2: [false, state.isTinRequested2[1]]
                                                    }
                                                }
                                                else {
                                                    this.props.setObState({
                                                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin: "",
                                                    })
                                                    return {
                                                        isTinRequested2: [state.isTinRequested2[0], false]
                                                    }
                                                }

                                            })
                                        }

                                        //controllo di tin opzionale
                                        if (listaTinOptional.some(value => value.toString() === val)) {
                                            this.setState(function (state, props) {
                                                if (this.props.indexInt === '0') {
                                                    return {
                                                        isTinOptional2: [true, state.isTinOptional2[1]]
                                                    }
                                                }
                                                else {
                                                    return {
                                                        isTinOptional2: [state.isTinOptional2[0], true]
                                                    }
                                                }

                                            })
                                        }
                                        else {
                                            this.setState(function (state, props) {
                                                if (this.props.indexInt === '0') {
                                                    this.props.setObState({
                                                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin: "",
                                                    })
                                                    return {
                                                        isTinOptional2: [false, state.isTinOptional2[1]]
                                                    }
                                                }
                                                else {
                                                    this.props.setObState({
                                                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin: "",
                                                    })
                                                    return {
                                                        isTinOptional2: [state.isTinOptional2[0], false]
                                                    }
                                                }

                                            })
                                        }



                                    }}
                                    placeholder="Seleziona"
                                    options={listaNazioniResidenza2[this.props.indexInt]}
                                    disabled={this.state.local_numero_residenze_fiscali[this.props.indexInt] > 3}
                                >
                                </Form.select>

                            </Col>
                            {(this.state.isTinRequested2[this.props.indexInt] || this.state.isTinOptional2[this.props.indexInt]) && <Col xs="6">
                                <Form.input
                                    label="Codice fiscale estero"
                                    name={this.props.anagraficaIntestatario + "listresidenzefiscale_2_tin"}
                                    value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_2_tin"]}
                                    error={!this.state.isTinOptional2[this.props.indexInt] ? this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_2_tin"] : ""}
                                    onChange={this.props.obchange}
                                    placeholder="inserisci tin"
                                >
                                </Form.input>

                            </Col>
                            }
                        </Row>
                    }
                    {this.state.local_numero_residenze_fiscali[this.props.indexInt] > 3 && listaNazioniResidenza3[this.props.indexInt] !== [] && listaNazioniResidenza3[this.props.indexInt] !== undefined && <Row>
                        <Col xs="6">
                            <Form.select
                                label="Quarto paese di residenza fiscale"
                                name={this.props.anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"]}
                                error={this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"]}
                                onChange={this.props.obchange}
                                cbchange={(val) => {
                                    if (val === "") {
                                        this.setState({ isBtnAggiungiActive: false })
                                    }
                                    else {
                                        this.setState({ isBtnAggiungiActive: true })
                                    }
                                    //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag

                                    if (listaTinRequested.some(value => value.toString() === val)) {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                return {
                                                    isTinRequested3: [true, state.isTinRequested3[1]]
                                                }
                                            }
                                            else {
                                                return {
                                                    isTinRequested3: [state.isTinRequested3[0], true]
                                                }
                                            }

                                        })
                                    }
                                    else {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin: "",
                                                })
                                                return {
                                                    isTinRequested3: [false, state.isTinRequested3[1]]
                                                }
                                            }
                                            else {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin: "",
                                                })
                                                return {
                                                    isTinRequested3: [state.isTinRequested3[0], false]
                                                }
                                            }

                                        })
                                    }

                                    //controllo di tin opzionale
                                    if (listaTinOptional.some(value => value.toString() === val)) {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                return {
                                                    isTinOptional3: [true, state.isTinOptional3[1]]
                                                }
                                            }
                                            else {
                                                return {
                                                    isTinOptional3: [state.isTinOptional3[0], true]
                                                }
                                            }

                                        })
                                    }
                                    else {
                                        this.setState(function (state, props) {
                                            if (this.props.indexInt === '0') {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin: "",
                                                })
                                                return {
                                                    isTinOptional3: [false, state.isTinOptional3[1]]
                                                }
                                            }
                                            else {
                                                this.props.setObState({
                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin: "",
                                                })
                                                return {
                                                    isTinOptional3: [state.isTinOptional3[0], false]
                                                }
                                            }

                                        })
                                    }



                                }}
                                placeholder="Seleziona"
                                options={listaNazioniResidenza3[this.props.indexInt]}

                            >
                            </Form.select>

                        </Col>
                        {(this.state.isTinRequested3[this.props.indexInt] || this.state.isTinOptional3[this.props.indexInt]) && <Col xs="6">
                            <Form.input
                                label="Codice fiscale estero"
                                name={this.props.anagraficaIntestatario + "listresidenzefiscale_3_tin"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "listresidenzefiscale_3_tin"]}
                                error={!this.state.isTinOptional3[this.props.indexInt] ? this.props.formstate.errors[this.props.anagraficaIntestatario + "listresidenzefiscale_3_tin"] : ""}
                                onChange={this.props.obchange}
                                placeholder="inserisci tin"
                            >
                            </Form.input>

                        </Col>
                        }
                    </Row>
                    }
                    <Row >
                        {this.state.local_numero_residenze_fiscali[this.props.indexInt] > 0 && this.state.isSecondaResidenzaVisible[this.props.indexInt] &&
                            <Col xs="6">
                                <Button color="primary" onClick={this.rimuoviResidenza}>Rimuovi residenza fiscale</Button>
                            </Col>
                        }
                        <Col xs="6">
                            <Button disabled={this.state.local_numero_residenze_fiscali[this.props.indexInt] === 4 || !this.state.isBtnAggiungiActive} color="primary" onClick={this.aggiungiResidenza}>Aggiungi residenza fiscale</Button>
                        </Col>

                    </Row>
                    <Row>
                        <Col xs="12">
                            <Form.radiogroup
                                label="Possiedi una green card"
                                name={this.props.anagraficaIntestatario + "gcard"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "gcard"]}
                                onChange={this.props.obchange}
                                cbchange = {(val) => { if(val ==="true" && !this.props.fatcaEnable ) {this.setState({ showModalFatcaDisabled: true })}}}
                                options={[{ "value": "true", "text": "sì" }, { "value": "false", "text": "no" }]}
                                className=""
                            >
                            </Form.radiogroup>
                        </Col>
                    </Row>

                    <Row>
                        <Col xs="12">
                            <Form.radiogroup
                                label="Hai soggiornato negli USA almeno 31 giorni nell’anno di riferimento e 183 giorni nell’arco temporale di un triennio (calcolati computando interamente i giorni di presenza nell’anno di riferimento; un terzo dei giorni di presenza dell’anno precedente; un sesto dei giorni di presenza per il secondo anno precedente)?"
                                name={this.props.anagraficaIntestatario + "soggusa"}
                                value={this.props.formstate[this.props.anagraficaIntestatario + "soggusa"]}
                                onChange={this.props.obchange}
                                cbchange = {(val) => { if(val ==="true" && !this.props.fatcaEnable ) {this.setState({ showModalFatcaDisabled: true })}}}
                                options={[{ "value": "true", "text": "sì" }, { "value": "false", "text": "no" }]}
                                className=""
                            >
                            </Form.radiogroup>
                        </Col>
                    </Row>

                </DefaultCollapse>
            </>
        )
    }
}

export default DatiFatca
