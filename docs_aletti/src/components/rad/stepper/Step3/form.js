import React, { PureComponent } from 'react';
import { Form, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultCheckCollapse from "components/parts/DefaultCheckCollapse";
import DefaultCheckGroup from "components/parts/DefaultCheckGroup";
import DefaultRadioGroup from "components/parts/DefaultRadioGroup";
import FileLink from "components/rad/common/FileLink";
import _ from "lodash-es/lodash.default";

class StepForm extends PureComponent {
    render() {
        const { values, touched, errors, isSubmitting, handleChange, setFieldValue, submitForm, openStepModal, moveToPrevStep } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };
        const hasDepositoTitoli = _.get(values, "deposito_titoli");

        return (
            <Form autoComplete="off">
                <h2>L'offerta Aletti comprende</h2>
                <h3>Conto corrente</h3>

                <DefaultCheckCollapse { ...inputPros } customChange={ setFieldValue } label="Servizi da aggiungere"
                                      name={ "deposito_titoli" }>
                    <DefaultRadioGroup { ...inputPros } name={ "regime_fiscale" } label="Regime fiscale"
                                       onChange={ setFieldValue }
                                       disabled={ !hasDepositoTitoli }
                                       buttons={ [
                                           { label: "Amministrativo", value: "amministrativo" },
                                           { label: "Dichiarativo", value: "dichiarativo" }
                                       ] }/>
                    <DefaultRadioGroup { ...inputPros } name={ "tipo_commissioni" }
                                       label="Tipo commissioni"
                                       onChange={ setFieldValue }
                                       disabled={ !hasDepositoTitoli }
                                       buttons={ [
                                           { label: "Variabile", value: "variabile" },
                                           { label: "Fisso", value: "fisso" }
                                       ] }/>
                </DefaultCheckCollapse>

                <DefaultCollapse label="Prestazione di servizi di investimento" startsOpen={ true }>
                    <FileLink label="Informativa preliminare alla clientela MIFID" link="/docs/Conto Corrente OFS.pdf"
                              title="Informativa MIFID"/>

                    <p>Il questionario è strutturato in modo tale da indagare il livello di conoscenza ed esperienza in
                        strumenti finanziari posseduto dal cliente, mediante domande che vertono sul funzionamento dei
                        mercati finanziari acquisite evitando la raccolta di risposte autovalutative.</p>

                    <p>Ti invitiamo, pertanto, a porre particolare attenzione alla lettura delle domande e alla
                        formulazione
                        delle risposte, in quanto il livello di conoscenza ed esperienza attribuito ad esito del
                        questionario
                        inciderà sul perimetro su strumenti e prodotti considerati a Lei appropriati, nonché
                        sull'accesso di
                        servizi più evoluti. Le informazioni così raccolte avranno una validità pari a 3 anni.</p>

                    <DefaultCheckGroup { ...inputPros } checks={ [
                        {
                            name: "informativa_mifid_consegnata",
                            label: 'Dichiaro di aver preso visione dell’avvertenza e di voler proseguire nella compilazione del questionario'
                        }
                    ] }/>
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
            </Form>
        )
    }
}

export default StepForm;
