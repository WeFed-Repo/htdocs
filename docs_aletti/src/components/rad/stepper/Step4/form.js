import React, { PureComponent } from 'react';
import { Form, Button, Row, Col } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultCheck from "components/parts/DefaultCheck";
import DefaultRadioGroup from "components/parts/DefaultRadioGroup";
import DefaultInput from "components/parts/DefaultInput";
import DefaultModal from "components/parts/DefaultModal";
import getLoadingField from "containers/rad/loadingFields/getLoadingField";
import SelectStati from "containers/rad/loadingFields/selectStatiLoader";
import SelectProvince from "containers/rad/loadingFields/selectProvinceLoader";
import isEmptyObject from "functions/isEmptyObject";
import _ from "lodash-es/lodash.default";

const ScopoRapportoCC = getLoadingField('scopo_rapporto_cc');
const ScopoRapportoDT = getLoadingField('scopo_rapporto_dt');
const Professione = getLoadingField('professione');
const TipoAttivitaEconomica = getLoadingField('tipo_attivita_economica');
const OriginePatrimonio = getLoadingField('origine_patrimonio');
const PatrimonioNetto = getLoadingField('patrimonio_netto');
const RedditoAnnuoNetto = getLoadingField('reddito_annuo');

class IntestatarioForm extends PureComponent {
    render() {
        const { index, hasDt, setFieldValue, openPoliticoModal, ...inputPros } = this.props;
        const { values } = inputPros;
        const prefix = "intestatari[" + index + "].";
        const patrimonioNetto = _.get(values, prefix + "patrimonio_netto").split('|')[0];
        const redditoAnnuo = _.get(values, prefix + "reddito_annuo").split('|')[0];

        return (
            <>
                <p>Ai sensi della normativa antiriciclaggio (D.Lgs. 231/07 e successive integrazioni e modifiche) sei
                    tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali.<br/>
                    Ti ricordiamo che il rilascio di false informazioni oppure omissioni può comportare conseguenze
                    anche di natura penale.</p>

                <DefaultCheck { ...inputPros } label="Titolare effettivo*" name={ prefix + "titolare" }
                              note="Dichiaro di essere il titolare effettivo del conto e di agire esclusivamente per conto mio"/>

                <DefaultRadioGroup { ...inputPros } name={ prefix + "politicamente_esposto" }
                                   label="Sei una persona politicamente esposta?*"
                                   onChange={ setFieldValue }
                                   buttons={ [
                                       { label: "Sì", value: "1" },
                                       { label: "No", value: "0" }
                                   ] }
                                   note={
                                       <span><strong>Importante</strong>: prima di rispondere leggi la definizione <span
                                           onClick={ openPoliticoModal }><strong>qui</strong></span></span> }
                />

                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <ScopoRapportoCC { ...inputPros } name={ prefix + "scopo_rapporto_cc" }
                                         label="Scopo del rapporto di Conto Corrente*"
                                         loadActive={ true } customOnChange={ setFieldValue }
                                         valueAndText={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        {
                            hasDt &&
                            <ScopoRapportoDT { ...inputPros } name={ prefix + "scopo_rapporto_dt" }
                                             label="Scopo del rapporto di Custodia Titoli*"
                                             loadActive={ true } customOnChange={ setFieldValue }
                                             valueAndText={ true }/>
                        }
                    </Col>
                </Row>

                <h4>Informazioni professionali e situazione patrimoniale</h4>
                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <Professione { ...inputPros } name={ prefix + "professione" }
                                     label="Professione*"
                                     loadActive={ true } customOnChange={ setFieldValue }
                                     valueAndText={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <TipoAttivitaEconomica { ...inputPros } name={ prefix + "tipo_attivita_economica" }
                                               label="Tipo attività economica*"
                                               loadActive={ true } customOnChange={ setFieldValue }
                                               valueAndText={ true }/>
                    </Col>
                </Row>
                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <SelectStati { ...inputPros } customOnChange={ setFieldValue }
                                     name={ prefix + "stato_svolgimento" }
                                     label="Stato svolgimento" loadActive={ true }
                                     valueAndText={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <SelectProvince { ...inputPros } customOnChange={ setFieldValue }
                                        name={ prefix + "provincia_svolgimento" } label="Provincia svolgimento"
                                        loadActive={ _.get(values, prefix + "stato_svolgimento").split('|')[0] === "86" }/>
                    </Col>
                </Row>
                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <PatrimonioNetto { ...inputPros } customOnChange={ setFieldValue }
                                         name={ prefix + "patrimonio_netto" }
                                         label="Patrimonio*" loadActive={ true }
                                         valueAndText={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <DefaultInput { ...inputPros }
                                      name={ prefix + "note_patrimonio" } label="Note al patrimonio"
                                      disabled={ patrimonioNetto !== '0' }/>
                    </Col>
                </Row>
                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <RedditoAnnuoNetto { ...inputPros } customOnChange={ setFieldValue }
                                           name={ prefix + "reddito_annuo" }
                                           label="Reddito annuo*" loadActive={ true }
                                           valueAndText={ true }/>
                    </Col>
                    <Col xs={ 12 } sm={ 6 }>
                        <DefaultInput { ...inputPros }
                                      name={ prefix + "note_reddito" } label="Note al reddito"
                                      disabled={ redditoAnnuo !== '0' }/>
                    </Col>
                </Row>
                <Row>
                    <Col xs={ 12 } sm={ 6 }>
                        <SelectStati { ...inputPros } customOnChange={ setFieldValue }
                                     name={ prefix + "seconda_cittadinanza" }
                                     label="Seconda cittadinanza" loadActive={ true }
                                     valueAndText={ true }/>
                    </Col>
                </Row>
            </>
        );
    }
}

class StepForm extends PureComponent {
    constructor(props) {
        super(props);

        this.state = {
            politicoModal: false
        };
    }

    checkIntestatarioErrors = index => {
        const intestatariErrors = this.props.errors.intestatari;
        return !!intestatariErrors && index <= (intestatariErrors.length - 1) && !isEmptyObject(intestatariErrors[index]);
    };

    checkEstero = (paese) => {
        return paese !== '' && paese.split('|')[0] !== '86';
    };

    handleValidation = () => {
        const { values, submitForm, openResidenzaEsteraModal } = this.props;
        const intestatariIndices = this.props.int2disabled ? [0] : [0, 1];
        const isResidenteEstero = intestatariIndices.reduce((result, index) => {
            return result || this.checkEstero(values.intestatari[index].seconda_cittadinanza);
        }, false);

        if (isResidenteEstero) {
            openResidenzaEsteraModal();
        } else {
            submitForm();
        }
    };

    openPoliticoModal = () => this.setState({ "politicoModal": true });
    closePoliticoModal = () => this.setState({ "politicoModal": false });

    render() {
        const { values, touched, errors, int2disabled, isSubmitting, handleChange, setFieldValue, moveToPrevStep, openStepModal, getStepField } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            setFieldValue,
            values,
            errors,
            touched,
            openPoliticoModal: this.openPoliticoModal
        };
        const hasDt = !!getStepField(2, "deposito_titoli");
        const nominativi = (int2disabled ? [0] : [0, 1]).reduce((arr, index) => {
            const nome = getStepField(0, "intestatari[" + index + "].nome");
            const cognome = getStepField(0, "intestatari[" + index + "].cognome");

            arr.push(nome.toUpperCase() + ' ' + cognome.toUpperCase());

            return arr;
        }, []);
        return (
            <Form autoComplete="off">
                <h2>Adempimenti normativi</h2>

                <DefaultCollapse label="AUTORIZZAZIONE ALLA CAPITALIZZAZIONE PERIODICA DEGLI INTERESSI"
                                 startsOpen={ true }
                                 hasErrors={ !!_.get(errors, 'autorizzazione_anatocismo') }>
                    <p>In conformità all'art. 4, comma 5 del Decreto del CICR, n. 343/16, è prevista la facoltà del
                        Cliente di
                        autorizzare la capitalizzazione periodica degli interessi. Per effetto dell'autorizzazione in
                        parola, le
                        somme di denaro dovute dal Cliente alla Banca a titolo di interessi debitori vengono sommate,
                        dal
                        momento in cui divengono esigibili, a quelle dovute dal Cliente alla Banca a titolo di capitale
                        (così
                        detta "capitalizzazione degli interessi" o "anatocismo"). I predetti interessi debitori
                        divengono, così,
                        ad ogni effetto capitale, e quindi somme dovute alla Banca a titolo di capitale. Ne discende
                        che, nel
                        successivo periodo annuale di calcolo degli interessi debitori, la base di riferimento per il
                        calcolo
                        risulterà incrementata per una somma pari agli interessi capitalizzati.</p>

                    <p>Compilando l'opzione sottostante, puoi scegliere in piena autonomia se rilasciare o meno
                        l'autorizzazione in parola. Inoltre, hai facoltà di revocare in ogni momento l'autorizzazione
                        mediante
                        comunicazione in forma scritta a mezzo raccomandata a./r. ovvero mediante utilizzo di sistemi di
                        comunicazione a distanza secondo le modalità e i termini tempo per tempo in essere con la
                        Banca.</p>

                    <DefaultRadioGroup { ...inputPros } name="autorizzazione_anatocismo"
                                       label="Perfettamente consapevole di quanto sopra, selezionando l'opzione desiderata, scegli espressamente di:"
                                       onChange={ setFieldValue }
                                       buttons={ [
                                           { label: "Autorizzare in via preventiva", value: "1" },
                                           { label: "Non autorizzare", value: "0" }
                                       ] }/>

                    <p>la capitalizzazione periodica degli interessi debitori maturati al 31 dicembre di ogni anno.
                        L'addebito
                        in conto delle somme periodicamente dovute a titolo di interessi verrà effettuato dalla Banca al
                        1° marzo di ciascun anno.</p>
                </DefaultCollapse>

                <DefaultCollapse label={ "NORMATIVA ANTIRICICLAGGIO" } nominativo={ nominativi[0] }
                                 startsOpen={ true } hasErrors={ this.checkIntestatarioErrors(0) }>
                    <IntestatarioForm index={ 0 } { ...inputPros } hasDt={ hasDt }/>
                </DefaultCollapse>

                {
                    !int2disabled &&
                    <DefaultCollapse label={ "NORMATIVA ANTIRICICLAGGIO" } nominativo={ nominativi[1] }
                                     startsOpen={ false } hasErrors={ this.checkIntestatarioErrors(1) }>
                        <IntestatarioForm index={ 1 } { ...inputPros } hasDt={ hasDt }/>
                    </DefaultCollapse>
                }

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
                                    onClick={ this.handleValidation }>Prosegui</Button>
                        </div>
                    </div>
                </div>

                <DefaultModal show={ this.state.politicoModal }
                              close={ this.closePoliticoModal }
                              params={ { "modalTitle": 'Persona politicamente esposta' } }>
                    <div>
                        <strong>Art. 1 comma 2 lettera dd) del D.lgs. 231/2007 e s.m.i.</strong><br/>
                        dd) persone
                        politicamente esposte: le persone fisiche che occupano o hanno cessato di occupare da meno di un
                        anno importanti
                        cariche pubbliche, nonché i loro familiari e coloro che con i predetti soggetti intrattengono
                        notoriamente stretti
                        legami, come di seguito elencate:<br/>
                        1. sono persone fisiche che occupano o hanno occupato importanti cariche
                        pubbliche coloro che ricoprono o hanno ricoperto la carica di:<br/>
                        1.1 Presidente della Repubblica, Presidente del
                        Consiglio, Ministro, Vice-Ministro e Sottosegretario, Presidente di Regione, assessore
                        regionale, Sindaco di
                        capoluogo di provincia o città metropolitana, Sindaco di comune con popolazione non inferiore a
                        15.000 abitanti
                        nonché cariche analoghe in Stati esteri;<br/>
                        1.2 deputato, senatore, parlamentare europeo, consigliere regionale
                        nonché cariche analoghe in Stati esteri;<br/>
                        1.3 membro degli organi direttivi centrali di partiti politici;<br/>
                        1.4
                        giudice della Corte Costituzionale, magistrato della Corte di Cassazione o della Corte dei
                        conti, consigliere di
                        Stato e altri componenti del Consiglio di Giustizia Amministrativa per la Regione siciliana
                        nonché cariche analoghe
                        in Stati esteri;<br/>
                        1.5 membro degli organi direttivi delle banche centrali e delle autorità indipendenti;<br/>
                        1.6
                        ambasciatore, incaricato d'affari ovvero cariche equivalenti in Stati esteri, ufficiale di grado
                        apicale delle forze
                        armate ovvero cariche analoghe in Stati esteri;<br/>
                        1.7 componente degli organi di amministrazione, direzione o
                        controllo delle imprese controllate, anche indirettamente, dallo Stato italiano o da uno Stato
                        estero ovvero
                        partecipate, in misura prevalente o totalitaria, dalle Regioni, da comuni capoluoghi di
                        provincia e città
                        metropolitane e da comuni con popolazione complessivamente non inferiore a 15.000 abitanti;<br/>
                        1.8 direttore
                        generale di ASL e di azienda ospedaliera, di azienda ospedaliera universitaria e degli altri
                        enti del servizio
                        sanitario nazionale.<br/>
                        1.9 direttore, vicedirettore e membro dell'organo di gestione o soggetto svolgenti
                        funzioni equivalenti in organizzazioni internazionali;<br/>
                        <br/>
                        2. Sono familiari di persone politicamente esposte: i
                        genitori, il coniuge o la persona legata in unione civile o convivenza di fatto o istituti
                        assimilabili alla persona
                        politicamente esposta, i figli e i loro coniugi nonché le persone legate ai figli in unione
                        civile o convivenza di
                        fatto o istituti assimilabili;<br/>
                        <br/>
                        3. Sono soggetti con i quali le persone politicamente esposte intrattengono
                        notoriamente stretti legami:<br/>
                        3.1 le persone fisiche legate alla persona politicamente esposta per via della
                        titolarità effettiva congiunta di enti giuridici o di altro stretto rapporto di affari;<br/>
                        3.2 le persone fisiche
                        che detengono solo formalmente il controllo totalitario di un'entità notoriamente costituita, di
                        fatto,
                        nell'interesse e a beneficio di una persona politicamente esposta;<br/>
                        <br/>
                        <strong>Art. 24 comma 6 del D.lgs.231/2007 e s.m.i.</strong><br/>
                        6. I soggetti obbligati, in presenza di un elevato rischio di riciclaggio o di
                        finanziamento del terrorismo applicano misure di adeguata verifica rafforzata di clienti che,
                        originariamente
                        individuati come persone politicamente esposte, abbiano cessato di rivestire le relative cariche
                        pubbliche da più di
                        un anno. La medesima disposizione si applica anche nelle ipotesi in cui il beneficiario della
                        prestazione
                        assicurativa o il titolare effettivo del beneficiario siano state persone politicamente esposte.
                    </div>
                </DefaultModal>
            </Form>
        )
    }
}

export default StepForm;
