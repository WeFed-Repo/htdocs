import React, { PureComponent } from 'react';
import { Form, Button, Row, Col } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultOutput from "components/parts/DefaultOutput";
import getNominativi from "functions/rad/getNominativi";
import moment from 'moment';

class DatiPersonali extends PureComponent {
    render() {
        const { nominativo, step0, step1, gt } = this.props;
        return (
            <DefaultCollapse label="DATI PERSONALI" nominativo={ nominativo } startsOpen={ false }>
                <Row>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Nome" output={ step0.nome }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Cognome" output={ step0.cognome }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Data di nascita"
                                       output={ moment(step0.data_nascita).format('DD-MM-YYYY') }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Sesso" output={ step0.sesso }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Codice fiscale" output={ step0.codice_fiscale }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Email" output={ step0.email }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Numero di telefono"
                                       output={ step0.prefisso + " " + step0.numero }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Operatore" output={ step0.operatore }/>
                    </Col>
                </Row>
                <hr className="mb-5"/>
                <Row>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Cittadinanza" output={ gt(step1.cittadinanza) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Paese di nascita"
                                       output={ gt(step1.paese_nascita) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Provincia di nascita" output={ step1.provincia_nascita }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Comune di nascita" output={ step1.comune_nascita }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Tipo di documento"
                                       output={ gt(step1.tipo_documento) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Numero documento" output={ step1.numero_documento }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Paese di rilascio"
                                       output={ gt(step1.paese_rilascio) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Provincia di rilascio"
                                       output={ step1.provincia_rilascio }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Comune di rilascio" output={ step1.comune_rilascio }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Data di rilascio"
                                       output={ moment(step1.data_rilascio).format('DD-MM-YYYY') }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Data di scadenza"
                                       output={ moment(step1.data_scadenza).format('DD-MM-YYYY') }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Indirizzo di residenza" output={
                            step1.tipo_indirizzo_residenza + " " +
                            step1.nome_indirizzo_residenza + " " +
                            step1.numero_indirizzo_residenza
                        }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Provincia di residenza"
                                       output={ step1.provincia_residenza }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="Comune di residenza" output={ step1.comune_residenza }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 4 }>
                        <DefaultOutput label="CAP di residenza" output={ step1.cap_residenza }/>
                    </Col>
                    {
                        step1.tipo_indirizzo_domicilio &&
                        <>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Indirizzo di domicilio" output={
                                    step1.tipo_indirizzo_domicilio + " " +
                                    step1.nome_indirizzo_domicilio + " " +
                                    step1.numero_indirizzo_domicilio
                                }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Provincia"
                                               output={ step1.provincia_domicilio }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Comune"
                                               output={ step1.comune_domicilio }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="CAP" output={ step1.cap_domicilio }/>
                            </Col>
                        </>
                    }
                    {
                        step1.tipo_indirizzo_corrispondenza &&
                        <>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Indirizzo di corrispondenza" output={
                                    step1.tipo_indirizzo_corrispondenza + " " +
                                    step1.nome_indirizzo_corrispondenza + " " +
                                    step1.numero_indirizzo_corrispondenza
                                }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Provincia"
                                               output={ step1.provincia_corrispondenza }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Comune"
                                               output={ step1.comune_corrispondenza }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="CAP" output={ step1.cap_corrispondenza }/>
                            </Col>
                        </>
                    }
                    {
                        step1.tipo_indirizzo_cai &&
                        <>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Indirizzo CAI" output={
                                    step1.tipo_indirizzo_cai + " " +
                                    step1.nome_indirizzo_cai + " " +
                                    step1.numero_indirizzo_cai
                                }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Provincia CAI"
                                               output={ step1.provincia_cai }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="Comune CAI"
                                               output={ step1.comune_cai }/>
                            </Col>
                            <Col xs="12" sm="6" lg={ 4 }>
                                <DefaultOutput label="CAP CAI" output={ step1.cap_cai }/>
                            </Col>
                        </>
                    }
                    {
                        step1.numero_casa &&
                        <Col xs="12" sm="6" lg={ 4 }>
                            <DefaultOutput label="Numero di telefono fisso di casa"
                                           output={ step1.prefisso_casa + " " + step1.numero_casa }/>
                        </Col>
                    }
                    {
                        step1.numero_ufficio &&
                        <Col xs="12" sm="6" lg={ 4 }>
                            <DefaultOutput label="Numero di telefono fisso dell'ufficio"
                                           output={ step1.prefisso_ufficio + " " + step1.numero_ufficio }/>
                        </Col>
                    }
                    {
                        step1.titolo_studio &&
                        <Col xs="12" sm="6" lg={ 4 }>
                            <DefaultOutput label="Titolo di studio"
                                           output={ gt(step1.titolo_studio) }/>
                        </Col>
                    }
                </Row>
            </DefaultCollapse>
        )
    }
}

class NormativaAntiriciclaggio extends PureComponent {
    render() {
        const { nominativo, step3, gt } = this.props;
        return (
            <DefaultCollapse label={ "NORMATIVA ANTIRICICLAGGIO" } nominativo={ nominativo }>
                <Row>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Titolare effettivo"
                                       output={ step3.titolare ? "Sì" : "No" }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Persona politicamente esposta"
                                       output={ step3["politicamente_esposto"] ? "Sì" : "No" }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Scopo del rapporto di CC"
                                       output={ gt(step3["scopo_rapporto_cc"]) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Scopo del rapporto di custodia titoli"
                                       output={ gt(step3["scopo_rapporto_dt"]) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Professione" output={ gt(step3.professione) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Tipo di attività economica"
                                       output={ gt(step3["tipo_attivita_economica"]) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Stato di svolgimento"
                                       output={ gt(step3["stato_svolgimento"]) }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Provincia di svolgimento"
                                       output={ step3["provincia_svolgimento"] }/>
                    </Col>
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Patrimonio"
                                       output={ gt(step3["patrimonio_netto"]) }/>
                    </Col>
                    {
                        step3["patrimonio_netto"] === '0' &&
                        <Col xs="12" sm="6" lg={ 6 }>
                            <DefaultOutput label="Note al patrimonio"
                                           output={ step3["note_patrimonio"] }/>
                        </Col>
                    }
                    <Col xs="12" sm="6" lg={ 6 }>
                        <DefaultOutput label="Reddito annuo"
                                       output={ gt(step3["reddito_annuo"]) }/>
                    </Col>
                    {
                        step3["reddito_annuo"] === '0' &&
                        <Col xs="12" sm="6" lg={ 6 }>
                            <DefaultOutput label="Note al reddito"
                                           output={ step3["note_reddito"] }/>
                        </Col>
                    }
                    {
                        step3["seconda_cittadinanza"] &&
                        <Col xs="12" sm="6" lg={ 6 }>
                            <DefaultOutput label="Seconda cittadinanza"
                                           output={ step3["seconda_cittadinanza"] }/>
                        </Col>
                    }
                </Row>
            </DefaultCollapse>
        );
    }
}

class StepForm extends PureComponent {
    gt = value => value.split('|')[1];

    render() {
        const { int2disabled, isSubmitting, getSteps, getStepField, moveToPrevStep, openStepModal, submitForm } = this.props;
        const nominativi = getNominativi(int2disabled, getStepField);
        const steps = getSteps();
        const step2 = steps[2];
        const step3 = steps[3].intestatari[0];
        return (
            <Form autoComplete="off">
                <div id="riepilogo">
                    <h2>Dati generali</h2>

                    <p>Ecco il riepilogo dei dati inseriti. Verifica che siano tutti corretti: se ci sono
                        variazioni, puoi ancora
                        modificarli.</p>

                    <DatiPersonali nominativo={ nominativi[0] } step0={ steps[0].intestatari[0] }
                                   step1={ steps[1].intestatari[0] } gt={ this.gt }/>

                    {
                        !int2disabled &&
                        <DatiPersonali nominativo={ nominativi[1] } step0={ steps[0].intestatari[1] }
                                       step1={ steps[1].intestatari[1] } gt={ this.gt }/>
                    }

                    <DefaultCollapse label="PRODOTTI E SERVIZI SCELTI" startsOpen={ false }>
                        <h4>- Conto corrente</h4>
                        {
                            step2.deposito_titoli &&
                            <>
                                <h4>- Deposito titoli</h4>
                                <Row>
                                    <Col xs="12" sm="6" lg={ 6 }>
                                        <DefaultOutput label="Regime fiscale"
                                                       output={ (step2["regime_fiscale"] === 'amministrativo' ? "Amministrativo" : "Dichiarativo") }/>
                                    </Col>
                                    <Col xs="12" sm="6" lg={ 6 }>
                                        <DefaultOutput label="Tipo commissioni"
                                                       output={ (step2["tipo_commissioni"] === 'variabile' ? "Variabile" : "Fisso") }/>
                                    </Col>
                                </Row>
                            </>
                        }
                    </DefaultCollapse>

                    <DefaultCollapse label="ADEMPIMENTI NORMATIVI" startsOpen={ false } isParent={ true }>
                        <h3>Autorizzazione alla capitalizzazione periodica degli interessi</h3>
                        <Row>
                            <Col xs="12" sm="6" lg={ 6 }>
                                <DefaultOutput label="Ha scelto espressamente di:"
                                               output={ (step3["autorizzazione_anatocismo"] === '1' ? "Autorizzare in via preventiva" : "Non autorizzare") }/>
                            </Col>
                        </Row>

                        <NormativaAntiriciclaggio nominativo={ nominativi[0] } step3={ steps[3].intestatari[0] }
                                                  gt={ this.gt }/>

                        {
                            !int2disabled &&
                            <NormativaAntiriciclaggio nominativo={ nominativi[1] }
                                                      step3={ steps[3].intestatari[1] } gt={ this.gt }/>
                        }
                    </DefaultCollapse>

                    <div className="form-footer-wrap">
                        <div className="form-footer d-flex justify-content-between">
                            <div className="d-flex justify-content-start">
                                <Button type="button" color="secondary" disabled={ isSubmitting }
                                        onClick={ moveToPrevStep } title="Indietro">Indietro</Button>
                            </div>
                            <div className="d-flex justify-content-end">
                                <Button type="button" color="primary" disabled={ isSubmitting } className="mr-3"
                                        onClick={ openStepModal } title="Chiudi scheda">Chiudi</Button>
                                <Button type="button" color="primary" disabled={ isSubmitting }
                                        onClick={ submitForm }>Prosegui</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </Form>
        )
    }
}

export default StepForm;
