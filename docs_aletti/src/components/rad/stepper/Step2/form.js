import React, { PureComponent } from 'react';
import { Form, Button, Row, Col, Alert } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultOutput from "components/parts/DefaultOutput";
import DefaultInput from "components/parts/DefaultInput";
import DefaultInputFile from "components/parts/DefaultInputFile";
import DefaultAddress from "components/parts/DefaultAddress";
import DefaultPhoneNumber from "components/parts/DefaultPhoneNumber";
import DefaultDayPicker from "components/parts/DefaultDayPicker";
import DefaultRadioGroup from "components/parts/DefaultRadioGroup";
import SelectStati from "containers/rad/loadingFields/selectStatiLoader";
import SelectProvince from "containers/rad/loadingFields/selectProvinceLoader";
import SelectComuni from "containers/rad/loadingFields/selectComuniLoader";
import SelectCap from "containers/rad/loadingFields/selectCapLoader";
import { residenzeValues } from 'components/rad/stepper/Step2/values';
import validationSettings from "functions/rad/validationSettings";
import isEmptyObject from "functions/isEmptyObject";
import _ from "lodash-es/lodash.default";

class IntestatarioForm extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            numResidenzeEstere: 1
        };
    }

    aggiungiResidenzaEstera = () => {
        if (this.state.numResidenzeEstere < 4) {
            this.setState({
                numResidenzeEstere: this.state.numResidenzeEstere + 1
            });
        }
    };

    rimuoviResidenzaEstera = () => {
        if (this.state.numResidenzeEstere > 1) {
            this.setState({
                numResidenzeEstere: this.state.numResidenzeEstere - 1
            });
        }
    };

    // noinspection JSMethodCanBeStatic
    getHelp = () => {
        // noinspection CheckImageSize
        return (<p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br/>
            <br/>
            <img alt="placeholder" width="100%" height="100"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="/></p>)
    };

    checkFieldsErrors = (fields) => {
        const intestatariErrors = this.props.errors.intestatari && this.props.errors.intestatari[this.props.index];
        return intestatariErrors && fields.some(field => {
            return !!intestatariErrors[field];
        });
    };

    render() {
        const { index, customOnChange, ...inputPros } = this.props;
        const { values } = inputPros;
        let residenze1Values = residenzeValues.slice(0);
        let residenze2Values;
        let residenze3Values;
        let tin1disabled = true;
        let tin2disabled = true;
        let tin3disabled = true;
        const prefix = "intestatari[" + index + "].";
        const numImmaginiTin = _.get(values, prefix + "num_immagini_tin");
        const numImmaginiDocumento = _.get(values, prefix + "num_immagini_documento");

        if (_.get(values, prefix + "residenza_1") !== '') {
            residenze2Values = residenzeValues.filter(option => option.value !== _.get(values, prefix + "residenza_1"));
            tin1disabled = false;
        } else {
            residenze2Values = [];
        }

        if (_.get(values, prefix + "residenza_2") !== '') {
            residenze3Values = residenzeValues.filter(option => option.value !== _.get(values, prefix + "residenza_1") && option.value !== _.get(values, prefix + "residenza_2"));
            tin2disabled = false;
        } else {
            residenze3Values = [];
        }

        if (_.get(values, prefix + "residenza_3") !== '') {
            tin3disabled = false;
        }

        inputPros.customOnChange = customOnChange;

        return (
            <React.Fragment>
                <h4>INSERISCI I DATI PERSONALI DEL PRIMO INTESTATARIO</h4>

                <Row>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectStati { ...inputPros }
                                     name={ prefix + "cittadinanza" } valueAndText={ true }
                                     label="Cittadinanza" loadActive={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectStati { ...inputPros }
                                     name={ prefix + "paese_nascita" } valueAndText={ true }
                                     label="Paese di nascita" loadActive={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectProvince { ...inputPros }
                                        name={ prefix + "provincia_nascita" }
                                        label="Provincia di nascita"
                                        loadActive={ _.get(values, prefix + "paese_nascita").split('|')[0] === "86" }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectComuni { ...inputPros }
                                      name={ prefix + "comune_nascita" }
                                      loadActive={ _.get(values, prefix + "provincia_nascita") !== "" }
                                      label="Comune di nascita"
                                      parentValue={ _.get(values, prefix + "provincia_nascita") }/>
                    </Col>
                </Row>

                <Row>
                    <Col xs={ 3 }>
                        <DefaultOutput label="Paese di residenza fiscale" output="Italia"/>
                    </Col>
                </Row>

                <DefaultCollapse label="ALTRI DATI FATCA E CRS" startsOpen={ false }
                                 hasErrors={ this.checkFieldsErrors([
                                     "residenza_1",
                                     "tin_1",
                                     "residenza_2",
                                     "tin_2",
                                     "residenza_3",
                                     "tin_3",
                                     "green_card",
                                     "soggiorno_usa"
                                 ]) }>
                    <p>Con l'entrata in vigore delle normative FATCA (Foreign Account Tax Compliance Act) e CRS (Common
                        Reporting Standard,) il Governo italiano si è impegnato a garantire la compliance fiscale
                        internazionale mediante l'adesione allo scambio automatico di informazioni fra le
                        amministrazioni tributarie dei rispettivi Paesi aderenti.</p>

                    <h4>Residenza fiscale estera</h4>

                    <Row>
                        <Col xs="12" sm="6">
                            <DefaultSelect { ...inputPros } name={ prefix + "residenza_1" }
                                           label="Secondo paese di residenza fiscale"
                                           onChange={ customOnChange }
                                           valueAndText={ true }>
                                { residenze1Values.map(residenza => <option key={ residenza.value }
                                                                            value={ residenza.value }>{ residenza.text }</option>) }
                            </DefaultSelect>
                        </Col>
                        <Col xs="12" sm="6">
                            <DefaultInput { ...inputPros } name={ prefix + "tin_1" }
                                          label="Codice fiscale estero"
                                          disabled={ tin1disabled }/>
                        </Col>
                    </Row>
                    <Row style={ {
                        display: this.state.numResidenzeEstere > 1 ? 'flex' : 'none'
                    } }>
                        <Col xs="12" sm="6">
                            <DefaultSelect { ...inputPros } name={ prefix + "residenza_2" }
                                           label="Terzo paese di residenza fiscale"
                                           onChange={ customOnChange }
                                           valueAndText={ true }>
                                { residenze2Values.map(residenza => {
                                    return <option key={ residenza.value }
                                                   value={ residenza.value }>{ residenza.text }</option>;
                                }) }
                            </DefaultSelect>
                        </Col>
                        <Col xs="12" sm="6">
                            <DefaultInput { ...inputPros } name={ prefix + "tin_2" }
                                          label="Codice fiscale estero"
                                          disabled={ tin2disabled }/>
                        </Col>
                    </Row>
                    <Row style={ {
                        display: this.state.numResidenzeEstere > 2 ? 'flex' : 'none'
                    } }>
                        <Col xs="12" sm="6">
                            <DefaultSelect { ...inputPros } name={ prefix + "residenza_3" }
                                           label="Quarto paese di residenza fiscale"

                                           valueAndText={ true }>
                                { residenze3Values.map(residenza => <option key={ residenza.value }
                                                                            value={ residenza.value }>{ residenza.text }</option>) }
                            </DefaultSelect>
                        </Col>
                        <Col xs="12" sm="6">
                            <DefaultInput { ...inputPros } name={ prefix + "tin_3" }
                                          label="Codice fiscale estero"
                                          disabled={ tin3disabled }/>
                        </Col>
                    </Row>

                    <Row className="mb-5">
                        <Col xs="12" sm="6" className="text-right">
                            <Button outline={ true } color="primary" disabled={ this.state.numResidenzeEstere < 2 }
                                    onClick={ this.rimuoviResidenzaEstera }>Rimuovi residenza fiscale</Button>
                        </Col>
                        <Col xs="12" sm="6" className="text-left">
                            <Button outline={ true } color="primary" disabled={ this.state.numResidenzeEstere > 2 }
                                    onClick={ this.aggiungiResidenzaEstera }>Aggiungi residenza fiscale</Button>
                        </Col>
                    </Row>

                    <Row>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultRadioGroup { ...inputPros } name={ prefix + "num_immagini_tin" }
                                               label="Carica le immagini del fronte e retro del codice TIN"
                                               onChange={ customOnChange } buttons={ [
                                { label: "insieme", value: "1" },
                                { label: "separatamente", value: "2" }
                            ] }/>
                        </Col>
                        {
                            numImmaginiTin === '1' &&

                            <Col xs={ 12 } sm={ 6 }>
                                <DefaultInputFile { ...inputPros } name={ prefix + "immagine_tin" }
                                                  label="Carica l'immagine del fronte e retro del codice TIN"
                                                  onChange={ customOnChange }/>
                            </Col>
                        }
                        {
                            numImmaginiTin === '2' &&
                            <>
                                <Col xs={ 12 } sm={ 6 }>
                                    <DefaultInputFile { ...inputPros } name={ prefix + "immagine_tin_fronte" }
                                                      label="Carica l'immagine del fronte del codice TIN"
                                                      onChange={ customOnChange }/>
                                </Col>
                                <Col xs={ 12 } sm={ 6 }>
                                    <DefaultInputFile { ...inputPros } name={ prefix + "immagine_tin_retro" }
                                                      label="Carica l'immagine del retro del codice TIN"
                                                      onChange={ customOnChange }/>
                                </Col>
                            </>
                        }
                    </Row>

                    <Row>
                        <Col xs="12">
                            <DefaultRadioGroup { ...inputPros } name={ prefix + "green_card" }
                                               onChange={ customOnChange }
                                               label="Possiedi un Green Card?" buttons={ [
                                { label: "SÌ", value: "1" },
                                { label: "NO", value: "0" }
                            ] }/>
                        </Col>
                        <Col xs="12">
                            <p>Hai soggiornato negli USA almeno 31 giorni nell’anno di riferimento e 183 giorni
                                nell’arco temporale di un triennio (calcolati computando interamente i giorni di
                                presenza nell’anno di riferimento; un terzo dei giorni di presenza dell’anno precedente;
                                un sesto dei giorni di presenza per il secondo anno precedente)?</p>
                            <DefaultRadioGroup { ...inputPros } name={ prefix + "soggiorno_usa" }
                                               onChange={ customOnChange }
                                               label="" buttons={ [
                                { label: "SÌ", value: "1" },
                                { label: "NO", value: "0" }
                            ] }/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <h4>INSERISCI I DATI DEL TUO DOCUMENTO DI IDENTIT&Agrave;</h4>

                <Row>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultSelect { ...inputPros } name={ prefix + "tipo_documento" }
                                       label="Tipo di documento"
                                       onChange={ customOnChange }
                                       valueAndText={ true }>
                            <option value=""/>
                            <option value="01">Carta d'identità (cartacea, elettronica, rinnovata)</option>
                            <option value="02">Patente (cartacea, digitale, rinnovata)</option>
                            <option value="03">Passaporto</option>
                        </DefaultSelect>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultInput { ...inputPros } name={ prefix + "numero_documento" }
                                      label="Numero di documento"
                                      hasHelp={ true }
                                      helpTitle="Numero di documento"
                                      helpContent={ this.getHelp() }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultDayPicker { ...inputPros } name={ prefix + "data_rilascio" }
                                          label="Data di rilascio/rinnovo*"
                                          min={ validationSettings.nascitaMin }
                                          max={ validationSettings.nascitaMax }
                                          showYearSelect={ true }
                                          onChange={ customOnChange }
                                          hasHelp={ true }
                                          helpTitle="Data di rilascio/rinnovo"
                                          helpContent={ this.getHelp() }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultDayPicker { ...inputPros } name={ prefix + "data_scadenza" }
                                          label="Data di scadenza"
                                          min={ validationSettings.nascitaMin }
                                          max={ validationSettings.nascitaMax }
                                          showYearSelect={ true }
                                          onChange={ customOnChange }
                                          hasHelp={ true }
                                          helpTitle="Data di scadenza"
                                          helpContent={ this.getHelp() }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectStati { ...inputPros } onChange={ customOnChange }
                                     name={ prefix + "paese_rilascio" }
                                     valueAndText={ true }
                                     label="Paese di rilascio" loadActive={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectProvince { ...inputPros } onChange={ customOnChange }
                                        name={ prefix + "provincia_rilascio" }
                                        label="Provincia di rilascio"
                                        loadActive={ (_.get(values, prefix + "paese_rilascio").split('|')[0] === "86") }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectComuni { ...inputPros } onChange={ customOnChange }
                                      name={ prefix + "comune_rilascio" }
                                      label="Comune di rilascio"
                                      parentValue={ _.get(values, prefix + "provincia_rilascio") }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <DefaultInputFile { ...inputPros } name={ prefix + "immagine_firma" }
                                          label="Carica immagine firma"
                                          onChange={ customOnChange }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <DefaultRadioGroup { ...inputPros } name={ prefix + "num_immagini_documento" }
                                           label="Carica le immagini del fronte e retro del documento"
                                           onChange={ customOnChange } buttons={ [
                            { label: "insieme", value: "1" },
                            { label: "separatamente", value: "2" }
                        ] }/>
                    </Col>
                    {
                        numImmaginiDocumento === '1' &&

                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultInputFile { ...inputPros } name={ prefix + "immagine_documento" }
                                              label="Carica l'immagine del fronte e retro del documento"
                                              onChange={ customOnChange }/>
                        </Col>
                    }
                    {
                        numImmaginiDocumento === '2' &&
                        <>
                            <Col xs={ 12 } sm={ 6 }>
                                <DefaultInputFile { ...inputPros } name={ prefix + "immagine_documento_fronte" }
                                                  label="Carica l'immagine del fronte del documento"
                                                  onChange={ customOnChange }/>
                            </Col>
                            <Col xs={ 12 } sm={ 6 }>
                                <DefaultInputFile { ...inputPros } name={ prefix + "immagine_documento_retro" }
                                                  label="Carica l'immagine del retro del documento"
                                                  onChange={ customOnChange }/>
                            </Col>
                        </>
                    }
                </Row>

                <h4>INDICA I RECAPITI</h4>

                <Row>
                    <Col xs={ 12 }>
                        <DefaultAddress { ...inputPros }
                                        streetLabel="Indirizzo di residenza*"
                                        numberLabel="Numero"
                                        streetType={ prefix + "tipo_indirizzo_residenza" }
                                        streetName={ prefix + "nome_indirizzo_residenza" }
                                        streetNumber={ prefix + "numero_indirizzo_residenza" }/>
                    </Col>
                </Row>

                <Row>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectProvince { ...inputPros } onChange={ customOnChange }
                                        name={ prefix + "provincia_residenza" }
                                        label="Provincia di residenza*"
                                        loadActive={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectComuni { ...inputPros } onChange={ customOnChange }
                                      name={ prefix + "comune_residenza" }
                                      label="Comune di residenza*"
                                      parentValue={ _.get(values, prefix + "provincia_residenza") }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                        <SelectCap { ...inputPros } onChange={ customOnChange }
                                   name={ prefix + "cap_residenza" }
                                   label="CAP di residenza*"
                                   parentValue={ _.get(values, prefix + "comune_residenza") }/>
                    </Col>
                </Row>

                <DefaultCollapse label="AGGIUNGI UN INDIRIZZO DI DOMICILIO" startsOpen={ false }
                                 hasErrors={ this.checkFieldsErrors([
                                     "tipo_indirizzo_domicilio",
                                     "nome_indirizzo_domicilio",
                                     "numero_indirizzo_domicilio",
                                     "provincia_domicilio",
                                     "comune_domicilio",
                                     "cap_domicilio",
                                 ]) }>
                    <Row>
                        <Col xs={ 12 }>
                            <Alert color="primary">
                                <p className="mb-0">Aggiungi un indirizzo di domicilio (<strong>se diverso dalla
                                    residenza</strong>).</p></Alert>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={ 12 }>
                            <DefaultAddress { ...inputPros }
                                            streetLabel="Indirizzo di domicilio"
                                            numberLabel="Numero"
                                            streetType={ prefix + "tipo_indirizzo_domicilio" }
                                            streetName={ prefix + "nome_indirizzo_domicilio" }
                                            streetNumber={ prefix + "numero_indirizzo_domicilio" }/>
                        </Col>
                    </Row>

                    <Row>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectProvince { ...inputPros } onChange={ customOnChange }
                                            name={ prefix + "provincia_domicilio" }
                                            label="Provincia"
                                            loadActive={ true }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectComuni { ...inputPros } onChange={ customOnChange }
                                          name={ prefix + "comune_domicilio" }
                                          label="Comune"
                                          parentValue={ _.get(values, prefix + "provincia_domicilio") }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectCap { ...inputPros } onChange={ customOnChange }
                                       name={ prefix + "cap_domicilio" }
                                       label="CAP"
                                       parentValue={ _.get(values, prefix + "comune_domicilio") }/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <DefaultCollapse label="AGGIUNGI UN INDIRIZZO DI CORRISPONDENZA" startsOpen={ false }
                                 hasErrors={ this.checkFieldsErrors([
                                     "tipo_indirizzo_corrispondenza",
                                     "nome_indirizzo_corrispondenza",
                                     "numero_indirizzo_corrispondenza",
                                     "provincia_corrispondenza",
                                     "comune_corrispondenza",
                                     "cap_corrispondenza",
                                 ]) }>
                    <Row>
                        <Col xs={ 12 }>
                            <Alert color="primary">
                                <p>Se preferisci ricevere la nostra corrispondenza a un indirizzo <strong>diverso dalla
                                    tua
                                    residenza</strong>, inseriscilo di seguito.</p>
                                <hr/>
                                <p className="mb-0">A questo indirizzo invieremo, per tutti gli
                                    intestatari del conto, tutte le comunicazioni cartacee.</p></Alert>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={ 12 }>
                            <DefaultAddress { ...inputPros }
                                            streetLabel="Indirizzo di corrispondenza"
                                            numberLabel="Numero"
                                            streetType={ prefix + "tipo_indirizzo_corrispondenza" }
                                            streetName={ prefix + "nome_indirizzo_corrispondenza" }
                                            streetNumber={ prefix + "numero_indirizzo_corrispondenza" }/>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectProvince { ...inputPros } onChange={ customOnChange }
                                            name={ prefix + "provincia_corrispondenza" }
                                            label="Provincia"
                                            loadActive={ true }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectComuni { ...inputPros } onChange={ customOnChange }
                                          name={ prefix + "comune_corrispondenza" }
                                          label="Comune"
                                          parentValue={ _.get(values, prefix + "provincia_corrispondenza") }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectCap { ...inputPros } onChange={ customOnChange }
                                       name={ prefix + "cap_corrispondenza" }
                                       label="CAP"
                                       parentValue={ _.get(values, prefix + "comune_corrispondenza") }/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <DefaultCollapse label="AGGIUNGI UN INDIRIZZO PER LA CENTRALE D'ALLARME INTERBANCARIA (CAI)"
                                 startsOpen={ false }
                                 hasErrors={ this.checkFieldsErrors([
                                     "tipo_indirizzo_cai",
                                     "nome_indirizzo_cai",
                                     "numero_indirizzo_cai",
                                     "provincia_cai",
                                     "comune_cai",
                                     "cap_cai",
                                 ]) }>
                    <Row>
                        <Col xs={ 12 }>
                            <Alert color="primary">
                                <p>Aggiungi l'indirizzo se <strong>diverso da quello di residenza</strong>.</p>
                                <hr/>
                                <p className="mb-0"> A questo indirizzo verranno inviate eventuali segnalazioni da parte
                                    della CAI sull'uso irregolare di assegni e carte di pagamento.</p></Alert>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={ 12 }>
                            <DefaultAddress { ...inputPros }
                                            streetLabel="Indirizzo CAI"
                                            numberLabel="Numero"
                                            streetType={ prefix + "tipo_indirizzo_cai" }
                                            streetName={ prefix + "nome_indirizzo_cai" }
                                            streetNumber={ prefix + "numero_indirizzo_cai" }/>
                        </Col>
                    </Row>
                    <Row>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectProvince { ...inputPros } onChange={ customOnChange }
                                            name={ prefix + "provincia_cai" }
                                            label="Provincia" loadActive={ true }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectComuni { ...inputPros } onChange={ customOnChange }
                                          name={ prefix + "comune_cai" }
                                          label="Comune"
                                          parentValue={ _.get(values, prefix + "provincia_cai") }/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 } lg={ 3 }>
                            <SelectCap { ...inputPros } onChange={ customOnChange }
                                       name={ prefix + "cap_cai" }
                                       label="CAP"
                                       parentValue={ _.get(values, prefix + "comune_cai") }/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <DefaultCollapse label="AGGIUNGI ALTRI RECAPITI" startsOpen={ false }
                                 hasErrors={ this.checkFieldsErrors([
                                     "prefisso_casa",
                                     "numero_casa",
                                     "prefisso_ufficio",
                                     "numero_ufficio"
                                 ]) }>
                    <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                    <Row>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultPhoneNumber { ...inputPros }
                                                prefixName={ prefix + "prefisso_casa" }
                                                numberName={ prefix + "numero_casa" }
                                                label="Numero di telefono fisso di casa"/>
                        </Col>
                        <Col xs={ 12 } sm={ 6 }>
                            <DefaultPhoneNumber { ...inputPros }
                                                prefixName={ prefix + "prefisso_ufficio" }
                                                numberName={ prefix + "numero_ufficio" }
                                                label="Numero di telefono fisso dell'ufficio"/>
                        </Col>
                    </Row>
                </DefaultCollapse>

                <h4>4. INFORMAZIONI AGGIUNTIVE</h4>

                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <DefaultSelect { ...inputPros } name={ prefix + "titolo_studio" }
                                       label="Titolo di studio"
                                       onChange={ customOnChange }
                                       valueAndText={ true }>
                            <option value=""/>
                            <option value="nessuno">Nessuno</option>
                            <option value="licenza_elementare">Licenza elementare</option>
                            <option value="licenza_media">Licenza media</option>
                            <option value="diploma">Diploma</option>
                            <option value="laurea">Laurea</option>
                            <option value="laurea_economia">Laurea in discipline economiche</option>
                        </DefaultSelect>
                    </Col>
                </Row>

            </React.Fragment>
        );
    }
}

class StepForm extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            numResidenzeEstere: 1
        };
    }

    handleValidation = (intNum) => {
        const { values, submitForm, openResidenzaEsteraModal, startSession } = this.props;
        const isResidenteEstero = (this.props.int2disabled ? values.intestatari.slice(0, 1) : values.intestatari)
            .some(intestatario => {
                return this.checkEstero(intestatario.cittadinanza) ||
                    this.checkEstero(intestatario.residenza_1) ||
                    this.checkEstero(intestatario.residenza_2) ||
                    this.checkEstero(intestatario.residenza_3) ||
                    intestatario.green_card === '1' ||
                    intestatario.soggiorno_usa === '1' ||
                    intestatario.prefisso_casa !== '0039' ||
                    intestatario.prefisso_ufficio !== '0039';
            });

        if (isResidenteEstero) {
            openResidenzaEsteraModal();
        } else {
            startSession(intNum);
            submitForm();
        }
    };

    startSessionInt1 = () => {
        this.handleValidation(0);
    };

    startSessionInt2 = () => {
        this.handleValidation(1);
    };

    checkEstero = (paese) => {
        return paese !== '' && paese.split('|')[0] !== '86';
    };

    checkIntestatarioErrors = (index) => {
        const intestatariErrors = this.props.errors.intestatari;
        return !!intestatariErrors && index <= (intestatariErrors.length - 1) && !isEmptyObject(intestatariErrors[index]);
    };

    render() {
        const { values, touched, errors, int2disabled, isSubmitting, handleChange, setFieldValue, openStepModal, moveToPrevStep } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };

        return (
            <Form autoComplete="off">
                <h2>Inserisci i dati personali</h2>
                <p className="h2-sub">Inserisci i tuoi dati e quelli di tutti i cointestatari</p>

                <DefaultCollapse label="INSERISCI I TUOI DATI PERSONALI" startsOpen={ true } isParent={ true }
                                 hasErrors={ this.checkIntestatarioErrors(0) }>
                    <IntestatarioForm index={ 0 } customOnChange={ setFieldValue } { ...inputPros }/>
                </DefaultCollapse>

                <DefaultCollapse label="INSERISCI I DATI DEL SECONDO INTESTATARIO" startsOpen={ false }
                                 hasErrors={ this.checkIntestatarioErrors(1) }
                                 disabled={ int2disabled } isParent={ true }>
                    <IntestatarioForm index={ 1 } customOnChange={ setFieldValue } { ...inputPros }/>
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
                            <Button type="button" color="primary" disabled={ isSubmitting } className="mr-3"
                                    onClick={ this.startSessionInt1 } title="Avanti">Avvia sessione int. 1</Button>
                            <Button type="button" color="primary" disabled={ isSubmitting }
                                    onClick={ this.startSessionInt2 } title="Avanti">Avvia sessione int. 2</Button>
                        </div>
                    </div>
                </div>
            </Form>
        )
    }
}

export default StepForm;
