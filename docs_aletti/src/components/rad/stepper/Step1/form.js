import React, { PureComponent } from 'react';
import { Form, Button, Row, Col } from 'reactstrap';
import DefaultOutput from "components/parts/DefaultOutput";
import DefaultOutputWithModify from "components/parts/DefaultOutputWithModify";
import DefaultInput from "components/parts/DefaultInput";
import DefaultInputFile from "components/parts/DefaultInputFile";
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultCheckGroup from "components/parts/DefaultCheckGroup";
import DefaultPhoneNumber from "components/parts/DefaultPhoneNumber";
import DefaultDayPicker from "components/parts/DefaultDayPicker";
import DefaultRadioGroup from "components/parts/DefaultRadioGroup";
import DefaultCollapse from "components/parts/DefaultCollapse";
import FileLink from "components/rad/common/FileLink";
import validationSettings from "functions/rad/validationSettings";
import isEmptyObject from "functions/isEmptyObject";
import _ from 'lodash-es';

class InstestatarioForm extends PureComponent {
    unlockEmail = () => {
        this.props.setStepField(4, "intestatari[" + this.props.index + "].verifica_email", false);
        this.forceUpdate();
    };

    unlockPhone = () => {
        this.props.setStepField(4, "intestatari[" + this.props.index + "].verifica_cellulare", false);
        this.forceUpdate();
    };

    render() {
        const { index, customOnChange, getStepField, ...inputPros } = this.props;
        const { values } = inputPros;
        const numImmaginiCf = _.get(values, "intestatari[" + index + "].num_immagini_cf");
        const verifiedEmail = getStepField(4, "intestatari[" + index + "].verifica_email");
        const verifiedPhone = getStepField(4, "intestatari[" + index + "].verifica_cellulare");
        return (
            <React.Fragment>
                <Row>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultInput { ...inputPros } name={ "intestatari[" + index + "].nome" } label="Nome*"
                                      placeholder="Completo (es. Maria Luisa)"
                                      hasHelp={ true }
                                      helpTitle="Nome"
                                      helpContent="Nome completo (es: Maria Luisa Chiara)"
                                      disabled={ !values.privacy_consegnata }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultInput { ...inputPros } name={ "intestatari[" + index + "].cognome" } label="Cognome*"
                                      placeholder="Completo (es. De Luca)"
                                      hasHelp={ true }
                                      helpTitle="Cognome"
                                      helpContent="Cognome completo (es: De luca)"
                                      disabled={ !values.privacy_consegnata }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultDayPicker { ...inputPros } name={ "intestatari[" + index + "].data_nascita" }
                                          label="Data di nascita*"
                                          min={ validationSettings.nascitaMin } max={ validationSettings.nascitaMax }
                                          showYearSelect={ true }
                                          disabled={ !values.privacy_consegnata }
                                          onChange={ customOnChange }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].sesso" } label="Sesso*"
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "M", value: "M" },
                                               { label: "F", value: "F" }
                                           ] }/>
                    </Col>
                </Row>
                <Row>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultInput { ...inputPros } name={ "intestatari[" + index + "].codice_fiscale" }
                                      label="Codice fiscale*"
                                      maxLength="16"
                                      disabled={ !values.privacy_consegnata }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        {
                            verifiedEmail
                                ? <DefaultOutputWithModify label="Email*"
                                                           output={ _.get(values, "intestatari[" + index + "].email") }
                                                           handleModify={ this.unlockEmail }/>
                                : <DefaultInput { ...inputPros } name={ "intestatari[" + index + "].email" }
                                                label="Email*"
                                                maxLength="128"
                                                disabled={ !values.privacy_consegnata }/>
                        }
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        {
                            verifiedPhone
                                ? <DefaultOutputWithModify label="Numero di cellulare*"
                                                           output={ _.get(values, "intestatari[" + index + "].prefisso") + _.get(values, "intestatari[" + index + "].numero") }
                                                           handleModify={ this.unlockPhone }/>
                                : <DefaultPhoneNumber { ...inputPros }
                                                      prefixName={ "intestatari[" + index + "].prefisso" }
                                                      numberName={ "intestatari[" + index + "].numero" }
                                                      label="Numero di cellulare*"
                                                      disabled={ !values.privacy_consegnata }/>
                        }
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        {
                            verifiedPhone
                                ? <DefaultOutputWithModify label="Operatore*"
                                                           output={ _.get(values, "intestatari[" + index + "].operatore") }
                                                           handleModify={ this.unlockPhone }/>
                                :
                                <DefaultSelect { ...inputPros } name={ "intestatari[" + index + "].operatore" }
                                               label="Operatore*"
                                               disabled={ !values.privacy_consegnata }>
                                    <option value=""/>
                                    <option value="WIND">Wind</option>
                                    <option value="VODAF">Vodafone</option>
                                    <option value="TRE">Tre</option>
                                    <option value="TIM">Tim</option>
                                    <option value="POSTE">Poste Mobile</option>
                                    <option value="COOP">Coop Voce</option>
                                    <option value="UNO">Uno Mobile</option>
                                    <option value="TELEPASS">Telepass Mobile</option>
                                    <option value="MTV">Mtv Mobile</option>
                                    <option value="FASTWEB">Fastweb Mobile</option>
                                    <option value="DAILY">Daily Telecom Mobile</option>
                                    <option value="CONAD">Conad Insim</option>
                                    <option value="BT">BT Mobile</option>
                                    <option value="AMOBILE">A-Mobile</option>
                                    <option value="ALTRO">Altro...</option>
                                </DefaultSelect>
                        }
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <DefaultRadioGroup { ...inputPros }
                                           name={ "intestatari[" + index + "].num_immagini_cf" }
                                           label="Carica le immagini del fronte e retro del codice fiscale"
                                           onChange={ customOnChange } buttons={ [
                            { label: "insieme", value: "1" },
                            { label: "separatamente", value: "2" }
                        ] }/>
                    </Col>
                    {
                        numImmaginiCf === '1' &&

                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultInputFile { ...inputPros } name={ "intestatari[" + index + "].immagine_cf" }
                                              label="Carica l'immagine del fronte e retro del codice fiscale"
                                              onChange={ customOnChange }
                                              disabled={ !values.privacy_consegnata }/>
                        </Col>
                    }
                    {
                        numImmaginiCf === '2' &&
                        <>
                            <Col xs={ 12 } sm={ 6 }>
                                <DefaultInputFile { ...inputPros }
                                                  name={ "intestatari[" + index + "].immagine_cf_fronte" }
                                                  label="Carica l'immagine del fronte del codice fiscale"
                                                  onChange={ customOnChange }
                                                  disabled={ !values.privacy_consegnata }/>
                            </Col>
                            <Col xs={ 12 } sm={ 6 }>
                                <DefaultInputFile { ...inputPros }
                                                  name={ "intestatari[" + index + "].immagine_cf_retro" }
                                                  label="Carica l'immagine del retro del codice fiscale"
                                                  onChange={ customOnChange }
                                                  disabled={ !values.privacy_consegnata }/>
                            </Col>
                        </>
                    }
                </Row>
                <h4>Inserisci i dati privacy</h4>
                <p>
                    Tenuto conto dell’Informativa che mi è stata fornita ai sensi del Regolamento EU 2016/679 e messa a
                    disposizione sul sito Internet della Banca, per quanto riguarda:</p>
                <ul>
                    <li>
                        il trattamento, da parte della Banca, dei miei dati a fini di rilevazione della qualità dei
                        servizi erogati dalla Banca e/o dal Gruppo Banco BPM o la loro comunicazione, per le medesime
                        finalità, a società terze;<br/>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].privacy_1" } label=""
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "(B1) do il consenso", value: "1" },
                                               { label: "(B2) nego il consenso", value: "0" }
                                           ] }/>
                    </li>
                    <li>
                        il trattamento, da parte della Banca, dei miei dati a fini di informazione commerciale, ricerche
                        di mercato, offerte dirette di prodotti o servizi della Banca e/o del Gruppo Banco BPM;<br/>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].privacy_2" } label=""
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "(B3) do il consenso", value: "1" },
                                               { label: "(B4) nego il consenso", value: "0" }
                                           ] }/>
                    </li>
                    <li>
                        il trattamento, da parte della Banca, dei miei dati a fini di informazione commerciale, ricerche
                        di mercato, offerte dirette di prodotti o servizi di società terze;<br/>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].privacy_3" } label=""
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "(B5) do il consenso", value: "1" },
                                               { label: "(B6) nego il consenso", value: "0" }
                                           ] }/>
                    </li>
                    <li>
                        la comunicazione, da parte della Banca, dei miei dati a società terze a fini di informazione
                        commerciale, ricerche di mercato, offerte dirette di loro prodotti o servizi;<br/>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].privacy_4" } label=""
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "(B7) do il consenso", value: "1" },
                                               { label: "(B8) nego il consenso", value: "0" }
                                           ] }/>
                    </li>
                    <li>
                        Infine, per quanto riguarda il trattamento di categorie particolari di dati, (es. iscrizione a
                        sindacati, partiti o altre associazioni, dati relativi alla salute), che potrebbero essere
                        acquisiti dalla Banca per l’esecuzione di operazioni o di contratti;<br/>
                        <DefaultRadioGroup { ...inputPros } name={ "intestatari[" + index + "].privacy_5" } label=""
                                           onChange={ customOnChange }
                                           disabled={ !values.privacy_consegnata }
                                           buttons={ [
                                               { label: "(C1) do il consenso", value: "1" },
                                               { label: "(C2) nego il consenso", value: "0" }
                                           ] }/>
                    </li>
                </ul>
            </React.Fragment>
        );
    }
}

class StepForm extends PureComponent {
    checkIntestatarioErrors = (index) => {
        const intestatariErrors = this.props.errors.intestatari;
        return !!intestatariErrors && index <= (intestatariErrors.length - 1) && !isEmptyObject(intestatariErrors[index]);
    };

    render() {
        const { values, touched, errors, int2disabled, isSubmitting, handleChange, getStepField, setStepField, setFieldValue, intestatariOnChange, submitForm, openStepModal } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };
        const intestatarioProps = {
            customOnChange: setFieldValue,
            getStepField: getStepField,
            setStepField: setStepField,
            ...inputPros
        };

        return (
            <Form autoComplete="off">
                <DefaultCollapse label="LEGGI L'INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI" startsOpen={ true }
                                 hasErrors={ !!_.get(this.props.errors, 'privacy_consegnata') }>
                    <FileLink label="Per procedere occorre presentare il documento al cliente."
                              link="/docs/Conto Corrente OFS.pdf"
                              title="Privacy">
                        <DefaultCheckGroup { ...inputPros } checks={ [
                            {
                                name: "privacy_consegnata",
                                label: 'Dichiaro di aver consegnato l\'informativa privacy al cliente'
                            }
                        ] }/>
                    </FileLink>
                </DefaultCollapse>

                <DefaultCollapse label="RICHIESTA APERTURA CONTO" startsOpen={ false }>
                    <p>Per aprire Conto Aletti devi avere residenza in Italia ed essere maggiorenne</p>
                    <Row>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultOutput label="Codice promotore" output={ values.promotore }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultOutput label="Filiale di riferimento" output={ values.filiale }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultRadioGroup name="num_intestatari"
                                               label="A chi vuoi intestare il conto"
                                               disabled={ !values.privacy_consegnata }
                                               value={ int2disabled ? "1" : "2" }
                                               onChange={ intestatariOnChange } buttons={ [
                                { label: "Solo a me", value: "1" },
                                { label: "A me e ad un'altra persona", value: "2" }
                            ] }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <DefaultInput { ...inputPros } name="promozione" label="Codice promozione"
                                          disabled={ !values.privacy_consegnata }/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <DefaultCollapse label="INSERISCI I DATI E I CONSENSI PRIVACY DEL PRIMO INTESTATARIO*"
                                 startsOpen={ false }
                                 hasErrors={ this.checkIntestatarioErrors(0) }>
                    {/* qui viene creata la form dell'intestatario con index 0 */ }
                    <InstestatarioForm index={ 0 } { ...intestatarioProps }/>
                </DefaultCollapse>

                <DefaultCollapse label="INSERISCI I DATI E I CONSENSI PRIVACY DEL SECONDO INTESTATARIO*"
                                 startsOpen={ false }
                                 hasErrors={ this.checkIntestatarioErrors(1) }
                                 disabled={ int2disabled }>
                    {/* qui viene creata la form dell'intestatario con index 1, per non sovrascrivere i dati sopra */ }
                    <InstestatarioForm index={ 1 } { ...intestatarioProps }/>
                </DefaultCollapse>

                <div className="form-footer-wrap">
                    <div className="form-footer">
                        <div className="d-flex justify-content-end">
                            <Button type="button" color="primary" disabled={ isSubmitting } className="mr-3"
                                    onClick={ openStepModal } title="Chiudi scheda">Chiudi</Button>
                            <Button type="button" color="primary" disabled={ isSubmitting }
                                    onClick={ submitForm } title="Avanti">Salva e prosegui</Button>
                        </div>
                    </div>
                </div>
            </Form>
        )
    }
}

export default StepForm;
