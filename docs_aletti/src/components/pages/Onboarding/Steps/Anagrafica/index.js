import React, { Component } from 'react';
import Form from 'components/parts/Forms';
import { Col, Row, Button } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultModal from "components/parts/DefaultModal";
import HelpBtn from 'components/parts/Help';
import validazione from "./validazione";
import salva from "./salva";
import moment from "moment";
import MomentLocaleUtils, { formatDate } from 'react-day-picker/moment';
import 'moment/locale/it';
import getDateDifference from 'functions/getDateDifference';

//componenete parametrico per identificare il blocco privacy
class IntestatarioAnagrafica extends Component {
    indexIntText = this.props.indexInt === '0' ? "PRIMO" : "SECONDO"
    constructor(props) {
        super(props);
        let listaTinRequested = this.props.obdomini["nazioni_attive"].filter((el) => { return el.flagTin === "S" }).map((obj) => {
            return obj.value;
        });
        this.state = {
            //IN UN PRIMO MOMENTO NON SARA' POSSIBILE CARICARE UNA SECONDA RESIDENZA FISCALE, VI SARA' UN OVERLAYER //settare true per emulare la presenza di fatca
            fatcaEnable: false,
            showModalFatcaDisabled: false,
            //STATO RELATIVO ALLA VISIBILITA' DEGLI HELP DOCUMENTI
            isHelpDocVisible: false,
            //STATI PER FATCA //SE NON CHIAMO LA BOZZA DI DEFAULT SI PARTE DA SITUAZIONE 2 RESIDENZE (ITALIA E UNA STRANIERA DA SELEZIONARE)
            local_numero_residenze_fiscali : [this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length!="" ? this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length : 2, this.props.formstate.field_anagraficablob_intestatari_1_listresidenzefiscale_length!="" ? this.props.formstate.field_anagraficablob_intestatari_1_listresidenzefiscale_length : 2],
            isSecondaResidenzaVisible : [true,true],
            isBtnAggiungiActive : this.props.formstate.field_anagraficablob_intestatari_0_listresidenzefiscale_length!="" ? true : false,
            isTinRequested1 : [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic"]) ? true : false,listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic"]) ? true : false],
            isTinRequested2 : [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic"]) ? true : false,listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic"]) ? true : false],
            isTinRequested3 : [listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic"]) ? true : false,listaTinRequested.some(value => value.toString() === this.props.formstate["field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic"]) ? true : false]
        }
        this.rimuoviResidenza = this.rimuoviResidenza.bind(this);
        this.aggiungiResidenza = this.aggiungiResidenza.bind(this);
    }

    rimuoviResidenza() {
        this.setState({isBtnAggiungiActive:true})
        this.setState(function(state, props) {
            
            if(this.props.indexInt==='0' && state.local_numero_residenze_fiscali[0]>2) {
               if(state.local_numero_residenze_fiscali[0]===3) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic:"",
                        field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin: ""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0]  - 1, this.state.local_numero_residenze_fiscali[1]],
                        isTinRequested2: [false,this.state.isTinRequested2[1]]        
                    }
                   
                }
               if(state.local_numero_residenze_fiscali[0]===4) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic:"",
                        field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin:""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0]  - 1, this.state.local_numero_residenze_fiscali[1]],
                        isTinRequested3: [false,this.state.isTinRequested3[1]],
                    }
               }
               
                
            }
            else if(this.props.indexInt==='1' && state.local_numero_residenze_fiscali[1]>2) {
                if(state.local_numero_residenze_fiscali[1]===3) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic:"",
                        field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin:""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1]  - 1],
                        isTinRequested2: [this.state.isTinRequested2[0],false]    
                    }
                }
               if(state.local_numero_residenze_fiscali[1]===4) {
                    this.props.setObState({
                        field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic:"",
                        field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin:""
                    })
                    return {
                        local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1]  - 1],
                        isTinRequested3: [this.state.isTinRequested3[0],false]    
                    }
               }
            }
            else if (this.props.indexInt==='0') {
                this.props.setObState({
                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic:"",
                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin:""
                })
                return {
                    isSecondaResidenzaVisible : [false,state.isSecondaResidenzaVisible[1]],
                    local_numero_residenze_fiscali: [1, this.state.local_numero_residenze_fiscali[1]],
                    isBtnAggiungiActive:true,
                    isTinRequested1: [false,this.state.isTinRequested1[1]]     
                }
               
            }
            else if (this.props.indexInt==='1') {
                this.props.setObState({
                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic:"",
                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin:""
                })
                return {
                    isSecondaResidenzaVisible : [state.isSecondaResidenzaVisible[0],false],
                    local_numero_residenze_fiscali: [this.state.local_numero_residenze_fiscali[0],1],
                    isBtnAggiungiActive:true,
                    isTinRequested1: [this.state.isTinRequested1[0],false]
                }
               
            }
         })
    }
    aggiungiResidenza() {
        if(this.state.fatcaEnable) {
        this.setState(function(state, props) {
            if(this.props.indexInt==='0') {
               return {
                    local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0]  + 1, this.state.local_numero_residenze_fiscali[1]],
                    isSecondaResidenzaVisible : [true,state.isSecondaResidenzaVisible[1]],   
                    isBtnAggiungiActive:false  
                }
            }
            else {
                return {
                    local_numero_residenze_fiscali: [state.local_numero_residenze_fiscali[0], this.state.local_numero_residenze_fiscali[1]  + 1],
                    isSecondaResidenzaVisible : [state.isSecondaResidenzaVisible[0],true],
                    isBtnAggiungiActive:false
                }
            }

        })
        }
        else {
            this.setState({ showModalFatcaDisabled: true })
        }
    }
    //COSTRUZIONE DELLA DATA DI VALIDITA' DEL DOCUMENTO CHE DIPENDE DAL TIPO DOCUMENTO SELEZIONATO E DA FATTORI INCROCIATI 9 febbraio 2012 campbiamento per carta identità
    scadenzaDoc = ""
    scadenzaDocPre = ""
    emissioneDoc = ""
    typeDoc = ""
    setTypeDocumento (val) {
        this.typeDoc = val
    }
    setDateEmissione (val) {
       //SWITCH A SECONDA DEL DOCUMENTO SELEZIONATO PER SETTARE LA DATA DI EMISSIONE DALLA QUALE PARTIRE
        let documentTypeSelected = this.typeDoc;
        switch (documentTypeSelected) {
            case "01":
            case "11":
            case "12":
                //CASO CARTA IDENTITA'
                //LA DATA DI PARTENZA NON PU0' ESSERE PIU' INDIETRO DI 10 ANNI
                this.emissioneDoc = moment(new Date()).subtract(10,"year").format('DD/MM/YYYY');
                break;
            case "03":
                //CASO PASSAPORTO 10 anni /il giorno prima
                this.emissioneDoc = moment(new Date()).subtract(10,"year").add(1,"day").format('DD/MM/YYYY');
                break;
            case "02":
            case "13":
            case "14":
                this.emissioneDoc = moment(new Date()).subtract(10,"year").format('DD/MM/YYYY');
            break;
            default:
            break;
        }
    }
    setDateScadenza (val) {
        //SWITCH A SECONDA DEL DOCUMENTO SELEZIONATO E DELLA DATA DI EMISSIONE
        let documentTypeSelected = this.typeDoc,
            scadenzaPlus10 = moment(val, 'DD-MM-YYYY').add(10,"year").format('DD/MM/YYYY'),
            scadenzaPlus5 = moment(val, 'DD-MM-YYYY').add(5,"year").format('DD/MM/YYYY'),
            scadenzaPlus3 = moment(val, 'DD-MM-YYYY').add(3,"year").format('DD/MM/YYYY'),
            scadenzaPlus2 = moment(val, 'DD-MM-YYYY').add(2,"year").format('DD/MM/YYYY'),
            //DATA DI NASCITA DELL'INTESTATARIO
            dateBirth =  this.props.formstate["field_anagraficablob_intestatari_" + this.props.indexInt +"_nascita"],
            DMbirth = dateBirth.split("/")[0] + "/" + dateBirth.split("/")[1],
            YPlus10 = scadenzaPlus10.split("/")[2],
            YPlus5 = scadenzaPlus5.split("/")[2],
            YPlus3 = scadenzaPlus3.split("/")[2],
            YPlus2 = scadenzaPlus2.split("/")[2],
            dateBirtToCheck10 = DMbirth + "/" + YPlus10,
            dateBirtToCheck5 = DMbirth + "/" + YPlus5,
            dateBirtToCheck3 = DMbirth + "/" + YPlus3,
            dateBirtToCheck2 = DMbirth + "/" + YPlus2
        
        switch (documentTypeSelected) {
            case "01":
            case "11":
            case "12":
                //CASO CARTA IDENTITA'
               
                //SE DATA DI EMISSIONE E' PRIMA DEL 9 FEBBRAIO LA DATA DI SCADENZA/RINNOVO SARA' 10 ANNI
                if(getDateDifference("09/02/2012",val)< 0) {
                    this.scadenzaDoc = scadenzaPlus10
                }
                //SE DATA DI EMISSIONE E' SUCCESSIVA AL 9 DI FEBBRAIO LA DATA DI SCADENZA SARA' 10 ANNI O IL COMPLEANNO SE QUESTO E' SUCCESSIVO
                else {
                    if(dateBirth!="")
                    {
                        if (getDateDifference(scadenzaPlus10, dateBirtToCheck10)<0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck10,'DD/MM/YYYY').add(1,"year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck10
                        }
                    }
                    else {
                        alert("data di nascita non specificata");
                        
                    }
                    
                }
                this.scadenzaDocPre = moment(this.scadenzaDoc,'DD/MM/YYYY').subtract(1,"day").format('DD/MM/YYYY');
                break;
            case "03":
                 //CASO PASSAPORTO 10 anni /il giorno prima
                 this.scadenzaDoc = moment(scadenzaPlus10,'DD/MM/YYYY').subtract(1,"day").format('DD/MM/YYYY');
                 this.scadenzaDocPre =  this.scadenzaDoc

                break;
            case "02":
            case "13":
            case "14":
            //CASO PATENTE:
            //CASO CLIENTE CON MENO DI 55 ANNI
            var eta = moment.duration(moment(val,'DD/MM/YYYY').diff(moment(dateBirth,'DD/MM/YYYY')));
            var eta = eta.asYears();
            
            if(eta < 49.999) {
                //SE HO MENO DI 50 ANNI ALLA DATA DEL RINNOVO IL DOC VALE 10 o FINO AL COMPLEANNO
                if(getDateDifference("09/02/2012",val)< 0) {
                    this.scadenzaDoc = scadenzaPlus10
                }
                else {
                    if(dateBirth!="")
                    {
                        if (getDateDifference(scadenzaPlus10, dateBirtToCheck10)<0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck10,'DD/MM/YYYY').add(1,"year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck10
                        }
                    }
                    else {
                        alert("data di nascita non specificata");
                        
                    }
                }
            }
            else if(eta < 69.999 && eta >= 49.999  ) {
                
                if(getDateDifference("09/02/2012",val)< 0) {
                    this.scadenzaDoc = scadenzaPlus5
                }
                else {
                    if(dateBirth!="")
                    {
                        if (getDateDifference(scadenzaPlus5, dateBirtToCheck5)<0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck5,'DD/MM/YYYY').add(1,"year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck5
                        }
                    }
                    else {
                        alert("data di nascita non specificata");
                        
                    }
                }
            }
            else if(eta < 79.999 && eta >= 69.999  ) {
               if(getDateDifference("09/02/2012",val)< 0) {
                    this.scadenzaDoc = scadenzaPlus3
                }
                else {
                    if(dateBirth!="")
                    {
                        if (getDateDifference(scadenzaPlus3, dateBirtToCheck3)<0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck3,'DD/MM/YYYY').add(1,"year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck3
                        }
                    }
                    else {
                        alert("data di nascita non specificata");
                        
                    }
                }
            }
            else {
                if(getDateDifference("09/02/2012",val)< 0) {
                    this.scadenzaDoc = scadenzaPlus2
                }
                else {
                    if(dateBirth!="")
                    {
                        if (getDateDifference(scadenzaPlus2, dateBirtToCheck2)<0) {
                            //SE IL COMPLEANNO E' GIA' PASSATO VADO ALL'ANNO SUCCESSIVO
                            this.scadenzaDoc = moment(dateBirtToCheck2,'DD/MM/YYYY').add(1,"year").format('DD/MM/YYYY');
                        }
                        else {
                            this.scadenzaDoc = dateBirtToCheck2
                        }
                    }
                    else {
                        alert("data di nascita non specificata");
                        
                    }
                }
            }
            this.scadenzaDocPre =  moment(new Date(),'DD/MM/YYYY').format('DD/MM/YYYY');
           
            break;
            default:
            break;
        }
       
     }
    render() {
        
        const anagraficaIntestatario = `field_anagraficablob_intestatari_${this.props.indexInt}_`;
        //DOMINI
        let optionSesso = this.props.obdomini["sesso"],
            optionOperatori = this.props.obdomini["operatori_telefonici"],
            optionTextDiscalimer = this.props.obdomini.disclaimer,
            optionTipoDocumento = this.props.obdomini["documenti_identita"],
            optionResidenza = this.props.obdomini["qualifica_via"],
            optionStudio = this.props.obdomini["titoli_studio"],
            blockType = this.props.blockType,
            labelDatiPer = this.props.indexInt === '0' ? "INSERISCI I TUOI DATI PERSONALI" : "INSERISCI I DATI PERSONALI DEL SECONDO INTESTATARIO",
            argHelp = "";
        switch (blockType) {
            case "privacy":
                blockType = "privacy"
                break;
            case "datiPersonali":
                blockType = "datiPersonali"
                break;
            default:
                break;
        }
       
        //RIELABORAZIONI PER LE SELECT DEI FATCA
        //variabile per stabire se il campo tin è necessario o meno //dipende dal flag
        
        let listaNazioni = this.props.obdomini["nazioni_attive"],
            //LISTA delle NAZIONI che richiedono il TIN
            listaNazioniTinRequested = listaNazioni.filter((el) => { return el.flagTin === "S" }),
            //lista dei value relativi alle nazioni che richiedono il TIN
            listaTinRequested = listaNazioniTinRequested.map((obj) => {
                return obj.value;
            }),
            //listaNazioni per la prima select (tolgo ITALIA che è la residenza di default)
            listaNazioniResidenza1 = listaNazioni.filter((el) => { return el.text != "ITALIA" }),

            //LISTA DELLE EVENTUALI RESIDENZE ESTERE AGGIUNTIVE
            listaNazioniResidenza2 = [],
            listaNazioniResidenza3 = [];

        //PER OGNI INTESTATARIO RESTITUISCE LA LISTA DELLE NAZIONI AL NETTO DELLA NAZIONE SELEZIONATA IN PARTENZA    
        listaNazioniResidenza2[this.props.indexInt] = listaNazioniResidenza1.filter((el) => { return el.value != this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"] })
        listaNazioniResidenza3[this.props.indexInt] = listaNazioniResidenza1.filter((el) => { return el.value != this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"] }).filter((el) => { return el.value != this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"] })
        
        //COSTRUZIONE DELLA DATA DI NASCITA CHE NON DEVE ESSERE ALMENO 18 ANNI 
        let today = moment(new Date(),'DD/MM/YYYY'),
            dateNascitaTo = today.subtract(18,"year").format('DD/MM/YYYY'); 

       return (
            <>
                <DefaultModal show={this.state.showModalFatcaDisabled} close={!this.state.showModalFatcaDisabled}
                    params={{ "modalTitle": 'Attenzione' }}>
                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia ovvero di sussistenza di indizi di residenza all’estero ti informiamo che non è possibile procedere con l'apertura del rapporto. Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>
                    <div className="btn-console">
                        <div className="btn-console-right">
                            <Button color="primary" className="center" onClick={() => this.setState({ showModalFatcaDisabled: false })} title="Close">Close</Button>
                        </div>
                    </div>
                </DefaultModal>
                {   //componenete parametrico per identificare la privacy
                    blockType === "privacy" &&
                    <DefaultCollapse disabled={this.props.isPrivacyUnChecked} label={`INSERISCI I DATI E I CONSENSI PRIVACY DEL ${this.indexIntText} INTESTATARIO`} startsOpen={false} className="search-collapse">
                        <section className="onboarding-block">
                            <Row>
                                <Col xs="6">
                                    <Form.input
                                        label="Nome"
                                        name={anagraficaIntestatario + "nome"}
                                        value={this.props.formstate[anagraficaIntestatario + "nome"]}
                                        onChange={this.props.obchange}
                                        placeholder="Nome completo (es. Maria Luisa)"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "nome"]}
                                    >
                                    </Form.input>
                                </Col>
                                <Col xs="6">
                                    <Form.input
                                        label="Cognome"
                                        name={anagraficaIntestatario + "cognome"}
                                        value={this.props.formstate[anagraficaIntestatario + "cognome"]}
                                        onChange={this.props.obchange}
                                        placeholder="Cognome completo (es: De luca)"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "cognome"]}
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.date
                                        label="Data di nascita*"
                                        name={anagraficaIntestatario + "nascita"}
                                        value={this.props.formstate[anagraficaIntestatario + "nascita"]}
                                        onChange={this.props.obchange}
                                        cbchange = {()=>{ this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = "" }}
                                        placeholder=""
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "nascita"]}
                                        dateFrom ="01/01/1900"
                                        dateTo = {dateNascitaTo}
                                    >
                                    </Form.date>
                                </Col>
                                <Col xs="6">
                                    {optionSesso != [] && optionSesso != undefined && <Form.radiogroup
                                        label="Sesso"
                                        name={anagraficaIntestatario + "sesso"}
                                        value={this.props.formstate[anagraficaIntestatario + "sesso"]}
                                        onChange={this.props.obchange}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "sesso"]}
                                        options={[optionSesso[0], optionSesso[1]]}
                                        className=""
                                    >
                                    </Form.radiogroup>
                                    }
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.input
                                        label="Codice fiscale"
                                        name={anagraficaIntestatario + "codicefiscale"}
                                        value={this.props.formstate[anagraficaIntestatario + "codicefiscale"]}
                                        onChange={this.props.obchange}
                                        placeholder=""
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "codicefiscale"]}
                                        maxlength="16"
                                    >
                                    </Form.input>
                                </Col>
                                <Col xs="6">
                                    <Form.input
                                        label="Email"
                                        name={anagraficaIntestatario + "email"}
                                        value={this.props.formstate[anagraficaIntestatario + "email"]}
                                        onChange={this.props.obchange}
                                        placeholder="email@esempio.it"
                                        className=""
                                        error={this.props.formstate.errors[anagraficaIntestatario + "email"]}
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Form.file
                                        label="Carica il documento"
                                        name={anagraficaIntestatario + "imgcodfiscale_iddoc"}
                                        error={this.props.formstate.errors[anagraficaIntestatario + "mgcodfiscale_iddoc"]}
                                        value={this.props.formstate[anagraficaIntestatario + "imgcodfiscale_iddoc"]}
                                        onChange={this.props.obchange}
                                    >
                                    </Form.file>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="6">
                                    <Row>
                                        <Col xs="3">
                                            <Form.input
                                                label="Prefisso"
                                                name={anagraficaIntestatario + "prefisso"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "prefisso"]}
                                                value={this.props.formstate[anagraficaIntestatario + "prefisso"]}
                                                onChange={this.props.obchange}
                                                placeholder="0039"
                                            >
                                            </Form.input>
                                        </Col>
                                        <Col xs="5">
                                            <Form.input
                                                label="Numero telefono"
                                                name={anagraficaIntestatario + "telefono"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "telefono"]}
                                                value={this.props.formstate[anagraficaIntestatario + "telefono"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                            >
                                            </Form.input>
                                        </Col>

                                        <Col xs="4">
                                            {optionOperatori != [] && optionOperatori != undefined && <Form.select
                                                label="Operatore"
                                                name={anagraficaIntestatario + "operatore"}
                                                value={this.props.formstate[anagraficaIntestatario + "operatore"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "operatore"]}
                                                onChange={this.props.obchange}
                                                options={optionOperatori}
                                            >
                                            </Form.select>
                                            }
                                        </Col>
                                    </Row>
                                </Col>
                            </Row>
                            {optionTextDiscalimer != [] && optionTextDiscalimer != undefined && <div>

                                <h3>CONSENSI AL TRATTAMENTO DEI DATI PERSONALI*</h3>
                                <p>Tenuto conto dell’Informativa che mi è stata fornita ai sensi del Regolamento EU 2016/679 e messa a disposizione sul sito Internet della Banca, per quanto riguarda: </p>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_CONSENSO_1"]}
                                            name={anagraficaIntestatario + "listprivacy_0_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_0_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_0_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                        >
                                        </Form.radiogroup>

                                    </Col>

                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_CONSENSO_2"]}
                                            name={anagraficaIntestatario + "listprivacy_1_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_1_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_1_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_CONSENSO_3"]}
                                            name={anagraficaIntestatario + "listprivacy_2_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_2_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_2_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_CONSENSO_4"]}
                                            name={anagraficaIntestatario + "listprivacy_3_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_3_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_3_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                                <Row>
                                    <Col xs="12">
                                        <Form.radiogroup
                                            label={optionTextDiscalimer["ALETTI_CONSENSO_5"]}
                                            name={anagraficaIntestatario + "listprivacy_4_consenso"}
                                            value={this.props.formstate[anagraficaIntestatario + "listprivacy_4_consenso"]}
                                            onChange={this.props.obchange}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "listprivacy_4_consenso"]}
                                            options={[{ "value": "true", "text": "do il consenso" }, { "value": "false", "text": "nego il consenso" }]}
                                            className=""
                                        >
                                        </Form.radiogroup>
                                    </Col>
                                </Row>
                            </div>}
                        </section>
                    </DefaultCollapse>
                }

                {   //componenete parametrico per identificare il blocco dati personali
                    blockType === "datiPersonali" &&

                    <DefaultCollapse disabled={this.props.isPrivacyUnChecked} label={labelDatiPer} startsOpen={false} className="search-collapse">
                        <>
                            <section className="onboarding-block">
                                <Row>
                                    <Col xs="6">
                                        <Form.select
                                            label="Paese di nascita*"
                                            name={anagraficaIntestatario + "paesenascita"}
                                            value={this.props.formstate[anagraficaIntestatario + "paesenascita"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "paesenascita"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="nazioni"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>

                                    </Col>

                                    <Col xs="6">
                                        {this.state.fatcaEnable && <Form.select
                                            label="Cittadinanza*"
                                            name={anagraficaIntestatario + "cittadinanza"}
                                            value={this.props.formstate[anagraficaIntestatario + "cittadinanza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "cittadinanza"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="nazioni"
                                            placeholder=""
                                        >
                                        </Form.select>
                                        }
                                        {!this.state.fatcaEnable && <Form.select
                                            label="Cittadinanza*"
                                            name={anagraficaIntestatario + "cittadinanza"}
                                            value={this.props.formstate[anagraficaIntestatario + "cittadinanza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "cittadinanza"]}
                                            onChange={() => { this.setState({ showModalFatcaDisabled: true }) }}
                                            ajaxoptions="nazioni"
                                            placeholder=""
                                        >
                                        </Form.select>
                                        }
                                    </Col>

                                </Row>
                                <Row>
                                    <Col xs="6">
                                        <Form.select
                                            label="Provincia di nascita*"
                                            name={anagraficaIntestatario + "provincianascita"}
                                            value={this.props.formstate[anagraficaIntestatario + "provincianascita"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "provincianascita"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="province"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>

                                    </Col>

                                    {this.props.formstate[anagraficaIntestatario + "provincianascita"] !== "" && <Col sm="6">
                                        <Form.select
                                            label="Comune di nascita*"
                                            name={anagraficaIntestatario + "comunenascita"}
                                            value={this.props.formstate[anagraficaIntestatario + "comunenascita"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunenascita"]}
                                            onChange={this.props.obchange}
                                            placeholder="Seleziona..."
                                            ajaxoptions="comuni"
                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provincianascita"]}
                                        ></Form.select>
                                    </Col>}

                                </Row>
                                <Row>
                                    <Col xs="6">
                                        <Form.input
                                            label="Paese di residenza fiscale*"
                                            output="true"
                                            value="Italia"
                                        >
                                        </Form.input>
                                    </Col>
                                </Row>

                            </section>

                            <div className="inner-wrapper-collapse ">
                                <DefaultCollapse label="ALTRI DATI FATCA E CRS" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <p>Con l'entrata in vigore delle normative FATCA (Foreign Account Tax Compliance Act) e CRS (Common
                                           Reporting Standard,) il Governo italiano si è impegnato a garantire la compliance fiscale
                                           internazionale mediante l'adesione allo scambio automatico di informazioni fra le
                        amministrazioni tributarie dei rispettivi Paesi aderenti.</p>
                                        <h4>Residenza fiscale estera</h4>
                                    </section>

                                    
                                    {this.state.isSecondaResidenzaVisible[this.props.indexInt] && <Row>
                                        <Col xs="6">
                                            {this.state.fatcaEnable && listaNazioniResidenza1 != [] && listaNazioniResidenza1 != undefined && <Form.select
                                                label="Secondo paese di residenza fiscale"
                                                name={anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                onChange={this.props.obchange}
                                                cbchange = {() =>{
                                                    if(this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]==="") {
                                                        
                                                        this.setState ({isBtnAggiungiActive:false})
                                                    }
                                                    else {
                                                        this.setState ({isBtnAggiungiActive:true})
                                                    }
                                                     //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag
                                                    if (listaTinRequested.some(value => value.toString() === this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"])) {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                            return {
                                                                    isTinRequested1: [true,state.isTinRequested1[1]]
                                                                }
                                                            }
                                                            else {
                                                                return {
                                                                    isTinRequested1: [state.isTinRequested1[0],true]
                                                                }
                                                            }
                                                
                                                        })
                                                    }
                                                    else {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin:"",
                                                                })
                                                            return {
                                                                    isTinRequested1: [false,state.isTinRequested1[1]]
                                                                }
                                                            }
                                                            else {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin:"",
                                                                })
                                                                return {
                                                                    isTinRequested1: [state.isTinRequested1[0],false]
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
                                                !this.state.fatcaEnable && <Form.select
                                                    label="Secondo paese di residenza fiscale"
                                                    name={anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"}
                                                    value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                    onChange={() => { this.setState({ showModalFatcaDisabled: true }) }}
                                                    placeholder="Seleziona"
                                                    options={listaNazioniResidenza1}
                                                >
                                                </Form.select>
                                            }
                                        </Col>
                                        {this.state.isTinRequested1[this.props.indexInt] && <Col xs="6">
                                            <Form.input
                                                label="Codice fiscale estero"
                                                name={anagraficaIntestatario + "listresidenzefiscale_1_tin"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_tin"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_1_tin"]}
                                                onChange={this.props.obchange}
                                                placeholder="inserisci tin"
                                            >
                                            </Form.input>

                                        </Col>
                                        }
                                    </Row>
                                    }
                                    {this.state.local_numero_residenze_fiscali[this.props.indexInt] > 2 && listaNazioniResidenza2[this.props.indexInt] != [] && listaNazioniResidenza2[this.props.indexInt] != undefined && 
                                    <Row>
                                        <Col xs="6">
                                           <Form.select
                                                label="Terzo paese di residenza fiscale"
                                                name={anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                                onChange={this.props.obchange}
                                                cbchange = {() =>{
                                                    if(this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]==="") {
                                                        
                                                        this.setState ({isBtnAggiungiActive:false})
                                                    }
                                                    else {
                                                        this.setState ({isBtnAggiungiActive:true})
                                                    }
                                                     //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag
                                                    if (listaTinRequested.some(value => value.toString() === this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"])) {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                            return {
                                                                    isTinRequested2: [true,state.isTinRequested2[1]]
                                                                }
                                                            }
                                                            else {
                                                                return {
                                                                    isTinRequested2: [state.isTinRequested2[0],true]
                                                                }
                                                            }
                                                
                                                        })
                                                    }
                                                    else {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin:"",
                                                                })
                                                            return {
                                                                    isTinRequested2: [false,state.isTinRequested2[1]]
                                                                }
                                                            }
                                                            else {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin:"",
                                                                })
                                                                return {
                                                                    isTinRequested2: [state.isTinRequested2[0],false]
                                                                }
                                                            }
                                                
                                                        })
                                                    }
                                                    
                                                
                                                
                                                }}
                                                placeholder="Seleziona"
                                                options={listaNazioniResidenza2[this.props.indexInt]}
                                                disabled={this.state.local_numero_residenze_fiscali[this.props.indexInt]  > 3}
                                            >
                                            </Form.select>
                                            
                                        </Col>
                                        {this.state.isTinRequested2[this.props.indexInt] && <Col xs="6"> 
                                            <Form.input
                                                label="Codice fiscale estero"
                                                name={anagraficaIntestatario + "listresidenzefiscale_2_tin"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_tin"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_2_tin"]}
                                                onChange={this.props.obchange}
                                                placeholder="inserisci tin"
                                            >
                                            </Form.input>

                                        </Col>
                                        }
                                    </Row>
                                    }
                                    {this.state.local_numero_residenze_fiscali[this.props.indexInt] > 3 && listaNazioniResidenza3[this.props.indexInt] != [] && listaNazioniResidenza3[this.props.indexInt] != undefined && <Row>
                                        <Col xs="6">
                                            <Form.select
                                                label="Quarto paese di residenza fiscale"
                                                name={anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"]}
                                                onChange={this.props.obchange}
                                                cbchange = {() =>{
                                                    if(this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"]==="") {
                                                        
                                                        this.setState ({isBtnAggiungiActive:false})
                                                    }
                                                    else {
                                                        this.setState ({isBtnAggiungiActive:true})
                                                    }
                                                     //setta la variabile per stabire se il campo tin è necessario o meno //dipende dal flag
                                                    if (listaTinRequested.some(value => value.toString() === this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_3_codiceuic"])) {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                            return {
                                                                    isTinRequested3: [true,state.isTinRequested3[1]]
                                                                }
                                                            }
                                                            else {
                                                                return {
                                                                    isTinRequested3: [state.isTinRequested3[0],true]
                                                                }
                                                            }
                                                
                                                        })
                                                    }
                                                    else {
                                                        this.setState(function(state, props) {
                                                            if(this.props.indexInt==='0') {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin:"",
                                                                })
                                                            return {
                                                                    isTinRequested3: [false,state.isTinRequested3[1]]
                                                                }
                                                            }
                                                            else {
                                                                this.props.setObState({
                                                                    field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin:"",
                                                                })
                                                                return {
                                                                    isTinRequested3: [state.isTinRequested3[0],false]
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
                                        {this.state.isTinRequested3[this.props.indexInt] && <Col xs="6"> 
                                            <Form.input
                                                label="Codice fiscale estero"
                                                name={anagraficaIntestatario + "listresidenzefiscale_3_tin"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_3_tin"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_3_tin"]}
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
                                    {/*
                                    <Row>
                                        <Col xs="6">
                                            {this.state.numResidenzeEstere_0 > 1 && listaNazioniResidenza2[this.props.indexInt] != [] && listaNazioniResidenza2[this.props.indexInt] != undefined && <Form.select
                                                label="Terzo paese di residenza fiscale"
                                                name={anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_1_codiceuic"]}
                                                onChange={this.props.obchange}
                                                placeholder="Seleziona"
                                                options={listaNazioniResidenza2[this.props.indexInt]}
                                                disabled={this.state.numResidenzeEstere_0 > 2}
                                            >
                                            </Form.select>
                                            }
                                        </Col>
                                        <Col xs="6">

                                        </Col>
                                    </Row>
                                    <Row>
                                        <Col xs="6">
                                            {this.state.numResidenzeEstere_0 > 2 && listaNazioniResidenza3[this.props.indexInt] != [] && listaNazioniResidenza3[this.props.indexInt] != undefined && <Form.select
                                                label="Quarto paese di residenza fiscale"
                                                name={anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"}
                                                value={this.props.formstate[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "listresidenzefiscale_2_codiceuic"]}
                                                onChange={this.props.obchange}
                                                placeholder="Seleziona"
                                                options={listaNazioniResidenza3[this.props.indexInt]}
                                            >
                                            </Form.select>
                                            }
                                        </Col>
                                        <Col xs="6">

                                        </Col>
                                    </Row>
                                    <Row >
                                        <Col xs="6">
                                            <Button color="primary" onClick={() => this.setState({ numResidenzeEstere_0: this.state.numResidenzeEstere_0 - 1 })}>Rimuovi residenza fiscale</Button>
                                        </Col>
                                        <Col xs="6">
                                            <Button disabled={this.state.numResidenzeEstere_0 == 3 || this.state.numResidenzeEstere_0 < 1} color="primary" onClick={() => this.setState({ numResidenzeEstere_0: this.state.numResidenzeEstere_0 + 1 })}>Aggiungi residenza fiscale</Button>
                                        </Col>

                                    </Row>
                                */}
                                </DefaultCollapse>
                                <section className="onboarding-block">
                                    <>
                                        <h4>Inserisci i dati del tuo documento di identità</h4>
                                        <Row>
                                            <Col xs="6">
                                                {optionTipoDocumento != [] && optionTipoDocumento != undefined && <Form.select
                                                    label="Tipo di documento*"
                                                    name={anagraficaIntestatario + "codtipodocumento"}
                                                    value={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "codtipodocumento"]}
                                                    onChange={this.props.obchange}
                                                    options={optionTipoDocumento}
                                                    placeholder="Seleziona"
                                                    cbchange={(val) => {
                                                        if (val != "") {
                                                            this.setState({ isHelpDocVisible: true})
                                                            argHelp = this.props.formstate[anagraficaIntestatario + "codtipodocumento"]
                                                        }
                                                        else {
                                                            this.setState({ isHelpDocVisible: false})
                                                        }
                                                        this.setTypeDocumento(val);
                                                        this.setDateEmissione(val);
                                                        this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] = "";
                                                        this.props.formstate[anagraficaIntestatario + "datascadenza"] = "";
                                                    }
                                                    }
                                                >
                                                </Form.select>
                                                }
                                            </Col>
                                            <Col xs="6" className="position-help">
                                                <Form.input
                                                    label="Numero documento*"
                                                    name={anagraficaIntestatario + "numdocumento"}
                                                    value={this.props.formstate[anagraficaIntestatario + "numdocumento"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "numdocumento"]}
                                                    onChange={this.props.obchange}
                                                >
                                                </Form.input>
                                                {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"]} />}
                                            </Col>
                                        </Row>

                                        <Row>
                                            <Col xs="6" className="position-help">
                                                <Form.date
                                                    label="Data di rilascio/rinnovo*"
                                                    name={anagraficaIntestatario + "datarilasciorinnovo"}
                                                    value={this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                    onChange={this.props.obchange}
                                                    cbchange = {(val)=> this.setDateScadenza(val)}
                                                    placeholder=""
                                                    className=""
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "datarilasciorinnovo"]}
                                                    disabled = { this.props.formstate[anagraficaIntestatario + "codtipodocumento"] === "" }
                                                    dateTo = {moment(new Date(),'DD/MM/YYYY').subtract(1,"day").format('DD/MM/YYYY')}
                                                    dateFrom = {this.emissioneDoc}
                                                >
                                                </Form.date>
                                                {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataRinnovo"} />}
                                            </Col>

                                            <Col xs="6" className="position-help">
                                                <Form.date
                                                    label="Data di scadenza*"
                                                    name={anagraficaIntestatario + "datascadenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "datascadenza"]}
                                                    onChange={this.props.obchange}
                                                    placeholder=""
                                                    className=""
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "datascadenza"]}
                                                    disabled = {this.props.formstate[anagraficaIntestatario + "datarilasciorinnovo"] === "" || this.props.formstate[anagraficaIntestatario + "nascita"] ==="" }
                                                    dateTo = {this.scadenzaDoc }
                                                    dateFrom = {this.scadenzaDocPre }
                                                >
                                                </Form.date>
                                                {(this.state.isHelpDocVisible || this.props.formstate[anagraficaIntestatario + "codtipodocumento"] != "") && <HelpBtn arg={this.props.formstate[anagraficaIntestatario + "codtipodocumento"] + "_dataScadenza"} />}
                                            </Col>
                                        </Row>
                                        <Row>
                                            <Col xs="6" >
                                                {listaNazioni != [] && listaNazioni != undefined && <Form.select
                                                    label="Paese di rilascio*"
                                                    name={anagraficaIntestatario + "paeserilascio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "paeserilascio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "paeserilascio"]}
                                                    onChange={this.props.obchange}
                                                    options={listaNazioni}
                                                    placeholder="Seleziona"
                                                >
                                                </Form.select>
                                                }
                                            </Col>
                                            <Col xs="6" >
                                                <Form.select
                                                    label="Provincia di rilascio*"
                                                    name={anagraficaIntestatario + "provinciarilascio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "provinciarilascio"]}
                                                    onChange={this.props.obchange}
                                                    ajaxoptions="province"
                                                    placeholder="Seleziona"
                                                    disabled = {this.props.formstate[anagraficaIntestatario + "paeserilascio"]!=="86"}
                                                >
                                                </Form.select>
                                            </Col>
                                        </Row>
                                        <Row>
                                            {this.props.formstate[anagraficaIntestatario + "provinciarilascio"] !== "" && <Col sm="6">
                                                <Form.select
                                                    label="Comune di rilascio*"
                                                    name={anagraficaIntestatario + "comunerilascio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "comunerilascio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "comunerilascio"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Seleziona..."
                                                    ajaxoptions="comuni"
                                                    ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciarilascio"]}
                                                    disabled = {this.props.formstate[anagraficaIntestatario + "paeserilascio"]!=="86"}
                                                ></Form.select>
                                            </Col>
                                            }
                                            <Col xs="6">
                                                <Form.file
                                                    label="Carica il documento*"
                                                    name={anagraficaIntestatario + "imgdocidentita_iddoc"}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "imgdocidentita_iddoc"]}
                                                    value={this.props.formstate[anagraficaIntestatario + "imgdocidentita_iddoc"]}
                                                    onChange={this.props.obchange}
                                                >
                                                </Form.file>
                                            </Col>

                                        </Row> 
                                    </>
                                </section>

                                <section className="onboarding-block">
                                    <>
                                        <h4>Indica i recapiti</h4>
                                        <Row>
                                            <Col xs="8">
                                            <Row>
                                            <Col xs="4">
                                               {optionResidenza != [] && optionResidenza != undefined && 
                                               <Form.select
                                                    label="Indirizzo di residenza*"
                                                    name={anagraficaIntestatario + "tipoindirizzoresidenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzoresidenza"]}
                                                    onChange={this.props.obchange}
                                                    options={optionResidenza}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.select>
                                               }
                                            </Col>
                                            <Col xs="8">
                                               <Form.input
                                                    label="&nbsp;"
                                                    name={anagraficaIntestatario + "indirizzoresidenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "indirizzoresidenza"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "indirizzoresidenza"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.input>
                                               
                                            </Col>
                                            </Row>
                                            </Col>
                                            <Col xs="4">
                                              <Form.input
                                                    label="Numero*"
                                                    name={anagraficaIntestatario + "numresidenza"}
                                                    value={this.props.formstate[anagraficaIntestatario + "numresidenza"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "numresidenza"]}
                                                    onChange={this.props.obchange}
                                               ></Form.input>
                                            </Col>
                                        </Row>
                                        <Row>
                                           <Col xs="6">
                                           <Form.select
                                            label="Provincia di residenza*"
                                            name={anagraficaIntestatario + "provinciaresidenza"}
                                            value={this.props.formstate[anagraficaIntestatario + "provinciaresidenza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "provinciaresidenza"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="province"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>
                                           </Col>
                                           <Col>
                                           {this.props.formstate[anagraficaIntestatario + "provinciaresidenza"] !== "" && <Col sm="6">
                                        <Form.select
                                            label="Comune di residenza*"
                                            name={anagraficaIntestatario + "comuneresidenza"}
                                            value={this.props.formstate[anagraficaIntestatario + "comuneresidenza"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "comuneresidenza"]}
                                            onChange={this.props.obchange}
                                            placeholder="Seleziona..."
                                            ajaxoptions="comuni"
                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciaresidenza"]}
                                        ></Form.select>
                                    </Col>}
                                           </Col>
                                        </Row>
                                    </>
                                </section>
                                <div className="inner-wrapper-collapse ">
                                <DefaultCollapse label="AGGIUNGI UN INDIRIZZO PER LA CENTRALE D'ALLARME INTERBANCARIA (CAI)" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <p>Aggiungi l'indirizzo se diverso da quello di residenza. A questo indirizzo verranno inviate eventuali segnalazioni da parte della CAI sull'uso irregolare di assegni e carte di pagamento.</p>
                                        <Row>
                                            <Col xs="8">
                                            <Row>
                                            <Col xs="4">
                                               {optionResidenza != [] && optionResidenza != undefined && 
                                               <Form.select
                                                    label="Indirizzo Cai*"
                                                    name={anagraficaIntestatario + "tipoindirizzocai"}
                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzocai"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzocai"]}
                                                    onChange={this.props.obchange}
                                                    options={optionResidenza}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.select>
                                               }
                                            </Col>
                                            <Col xs="8">
                                               <Form.input
                                                    label="&nbsp;"
                                                    name={anagraficaIntestatario + "indirizzocai"}
                                                    value={this.props.formstate[anagraficaIntestatario + "indirizzocai"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "indirizzocai"]}
                                                    onChange={this.props.obchange}
                                                ></Form.input>
                                               
                                            </Col>
                                            </Row>
                                            </Col>
                                            <Col xs="4">
                                              <Form.input
                                                    label="Numero*"
                                                    name={anagraficaIntestatario + "numcai"}
                                                    value={this.props.formstate[anagraficaIntestatario + "numcai"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "numcai"]}
                                                    onChange={this.props.obchange}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.input>
                                            </Col>
                                        </Row>
                                        <Row>
                                           <Col xs="6">
                                           <Form.select
                                            label="Provincia*"
                                            name={anagraficaIntestatario + "provinciacai"}
                                            value={this.props.formstate[anagraficaIntestatario + "provinciacai"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "provinciacai"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="province"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>
                                           </Col>
                                           <Col>
                                           {this.props.formstate[anagraficaIntestatario + "provinciacai"] !== "" && <Col sm="6">
                                        <Form.select
                                            label="Comune*"
                                            name={anagraficaIntestatario + "comunecai"}
                                            value={this.props.formstate[anagraficaIntestatario + "comunecai"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunecai"]}
                                            onChange={this.props.obchange}
                                            placeholder="Seleziona..."
                                            ajaxoptions="comuni"
                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciacai"]}
                                        ></Form.select>
                                    </Col>}
                                           </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                                <DefaultCollapse label="AGGIUNGI INDIRIZZO DI DOMICILIO (SE DIVERSO DALLA RESIDENZA)" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <p>Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verrà inviata la documentazione contrattuale, per tutti gli intestatari del conto.</p>
                                        <Row>
                                            <Col xs="8">
                                            <Row>
                                            <Col xs="4">
                                               {optionResidenza != [] && optionResidenza != undefined && 
                                               <Form.select
                                                    label="Indirizzo Domicilio*"
                                                    name={anagraficaIntestatario + "tipoindirizzodomicilio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzodomicilio"]}
                                                    onChange={this.props.obchange}
                                                    options={optionResidenza}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.select>
                                               }
                                            </Col>
                                            <Col xs="8">
                                               <Form.input
                                                    label="&nbsp;"
                                                    name={anagraficaIntestatario + "indirizzodomicilio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "indirizzodomicilio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "indirizzodomicilio"]}
                                                    onChange={this.props.obchange}
                                                ></Form.input>
                                               
                                            </Col>
                                            </Row>
                                            </Col>
                                            <Col xs="4">
                                              <Form.input
                                                    label="Numero*"
                                                    name={anagraficaIntestatario + "numdomicilio"}
                                                    value={this.props.formstate[anagraficaIntestatario + "numdomicilio"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "numdomicilio"]}
                                                    onChange={this.props.obchange}
                                               ></Form.input>
                                            </Col>
                                        </Row>
                                        <Row>
                                           <Col xs="6">
                                           <Form.select
                                            label="Provincia*"
                                            name={anagraficaIntestatario + "provinciadomicilio"}
                                            value={this.props.formstate[anagraficaIntestatario + "provinciadomicilio"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "provinciadomicilio"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="province"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>
                                           </Col>
                                           <Col>
                                           {this.props.formstate[anagraficaIntestatario + "provinciadomicilio"] !== "" && <Col sm="6">
                                        <Form.select
                                            label="Comune*"
                                            name={anagraficaIntestatario + "comunedomicilio"}
                                            value={this.props.formstate[anagraficaIntestatario + "comunedomicilio"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunedomicilio"]}
                                            onChange={this.props.obchange}
                                            placeholder="Seleziona..."
                                            ajaxoptions="comuni"
                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciadomicilio"]}
                                        ></Form.select>
                                    </Col>}
                                           </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                                
                                {this.props.indexInt === '0' &&
                                <DefaultCollapse label="AGGIUNGI INDIRIZZO DI CORRISPONDENZA (SE DIVERSO DAI PRECEDENTI)" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <p>Se preferisci ricevere la nostra corrispondenza a un indirizzo diverso dalla tua residenza, inseriscilo di seguito. A questo indirizzo invieremo, per tutti gli intestatari del conto, tutte le comunicazioni cartacee. </p>
                                        <Row>
                                            <Col xs="8">
                                            <Row>
                                            <Col xs="4">
                                               {optionResidenza != [] && optionResidenza != undefined && 
                                               <Form.select
                                                    label="Indirizzo Corrispondenza"
                                                    name={anagraficaIntestatario + "tipoindirizzocorrisp"}
                                                    value={this.props.formstate[anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "tipoindirizzocorrisp"]}
                                                    onChange={this.props.obchange}
                                                    options={optionResidenza}
                                                    placeholder="Seleziona"
                                               
                                               ></Form.select>
                                               }
                                            </Col>
                                            <Col xs="8">
                                               <Form.input
                                                    label="&nbsp;"
                                                    name={anagraficaIntestatario + "indirizzocorrisp"}
                                                    value={this.props.formstate[anagraficaIntestatario + "indirizzocorrisp"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "indirizzocorrisp"]}
                                                    onChange={this.props.obchange}
                                                ></Form.input>
                                               
                                            </Col>
                                            </Row>
                                            </Col>
                                            <Col xs="4">
                                              <Form.input
                                                    label="Numero*"
                                                    name={anagraficaIntestatario + "numcorrisp"}
                                                    value={this.props.formstate[anagraficaIntestatario + "numcorrisp"]}
                                                    error={this.props.formstate.errors[anagraficaIntestatario + "numcorrisp"]}
                                                    onChange={this.props.obchange}
                                               ></Form.input>
                                            </Col>
                                        </Row>
                                        <Row>
                                           <Col xs="6">
                                           <Form.select
                                            label="Provincia*"
                                            name={anagraficaIntestatario + "provinciacorrisp"}
                                            value={this.props.formstate[anagraficaIntestatario + "provinciacorrisp"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "provinciacorrisp"]}
                                            onChange={this.props.obchange}
                                            ajaxoptions="province"
                                            placeholder="Seleziona"
                                        >
                                        </Form.select>
                                           </Col>
                                           <Col>
                                           {this.props.formstate[anagraficaIntestatario + "pprovinciacorrisp"] !== "" && <Col sm="6">
                                        <Form.select
                                            label="Comune*"
                                            name={anagraficaIntestatario + "comunecorrisp"}
                                            value={this.props.formstate[anagraficaIntestatario + "comunecorrisp"]}
                                            error={this.props.formstate.errors[anagraficaIntestatario + "comunecorrisp"]}
                                            onChange={this.props.obchange}
                                            placeholder="Seleziona..."
                                            ajaxoptions="comuni"
                                            ajaxfilter={this.props.formstate[anagraficaIntestatario + "provinciacorrisp"]}
                                        ></Form.select>
                                    </Col>}
                                           </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                                }
                                <DefaultCollapse label="AGGIUNGI ALTRI RECAPITI" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                                        <Row>
                                        <Col xs="6">
                                           <Row>
                                             <Col xs="6">
                                            <Form.input
                                                label="Numero di telefono fisso di casa"
                                                name={anagraficaIntestatario + "prefissofissocasa"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "prefissofissocasa"]}
                                                value={this.props.formstate[anagraficaIntestatario + "prefissofissocasa"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                            >
                                            </Form.input>
                                          </Col>
                                        <Col xs="6">
                                            <Form.input
                                                label="&nbsp;"
                                                name={anagraficaIntestatario + "numerofissocasa"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "numerofissocasa"]}
                                                value={this.props.formstate[anagraficaIntestatario + "numerofissocasa"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                            >
                                            </Form.input>
                                        </Col>
                                        </Row>
                                        </Col>
                                        <Col xs="6">
                                           <Row>
                                             <Col xs="6">
                                            <Form.input
                                                label="Numero di telefono fisso ufficio"
                                                name={anagraficaIntestatario + "prefissofissoufficio"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "prefissofissoufficio"]}
                                                value={this.props.formstate[anagraficaIntestatario + "prefissofissoufficio"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                            >
                                            </Form.input>
                                          </Col>
                                        <Col xs="6">
                                            <Form.input
                                                label="&nbsp;"
                                                name={anagraficaIntestatario + "numerofissoufficio"}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "numerofissoufficio"]}
                                                value={this.props.formstate[anagraficaIntestatario + "numerofissoufficio"]}
                                                onChange={this.props.obchange}
                                                placeholder=""
                                            >
                                            </Form.input>
                                        </Col>
                                        </Row>
                                        </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                                <DefaultCollapse label="INFORMAZIONI AGGIUNTIVE" startsOpen={false} className="search-collapse">
                                    <section className="onboarding-block">
                                        <Row>
                                      
                                        <Col xs="6">
                                            {optionStudio != [] && optionStudio != undefined && <Form.select
                                                label="Titolo di studio"
                                                name={anagraficaIntestatario + "codtitolostudio"}
                                                value={this.props.formstate[anagraficaIntestatario + "codtitolostudio"]}
                                                error={this.props.formstate.errors[anagraficaIntestatario + "codtitolostudio"]}
                                                onChange={this.props.obchange}
                                                options={optionStudio}
                                                placeholder="Seleziona"
                                            >
                                            </Form.select>
                                            }
                                        </Col>
                                        </Row>
                                    </section>
                                </DefaultCollapse>
                                </div>
                            
                            </div>
                        </>
                    </DefaultCollapse>


                }


            </>
        )
    }
}



// FORM PRINCIPALE 
class StepForm extends Component {
    state = {
        "localfield_privacyopen": (this.props.obstate.field_anagraficablob_privacyletta === "true") ? true : false
    }

    render() {

        // Cattura lo stato del form (inclusivo di errori, ecc) tramite le props
        let formstate = this.props.obstate
        // Cattura i domini tramite le props
        let obdomini = this.props.obdomini
        let setObState = this.props.setObState

        //controllo accordion disabilitati per mancata accettazione privacy
        //localfield_privacyopen
        let isPrivacyChecked = this.props.obstate.field_anagraficablob_privacyletta === "true" ? true : false;



        //constrollo esistenza secondo intestatario
        const isSecondoIntestatario = formstate.field_numintestatari !== "1" ? true : false;

        // Rendering del form semplificato (considerare "formstate" come main container per rivedere eventuali condizioni per gli elementi e per gli errori)
        return (
            <div className="onboarding-wrapper">
                <div className="onboarding-form">
                    <DefaultCollapse
                        label="LEGGI L'INFORMATIVA SUL TRATTAMENTO DEI DATI PERSONALI"
                        startsOpen={true}
                        className="search-collapse"
                    >
                        <section className="onboarding-block">
                            <Row>
                                <Col xs="12">
                                    <p>Per procedere occorre presentare il documento al cliente.</p>
                                    <Form.checkfile className="no-label no-margin-bottom"
                                        name="field_anagraficablob_fileinformativaaperto"
                                        value={this.state.localfield_privacyopen}
                                        onChange={() => this.setState({ localfield_privacyopen: true })}
                                        error={formstate.errors["field_anagraficablob_fileinformativaaperto"]}
                                        filedescription="Informativa sul trattamento dei dati personali*"
                                        fileurl="http://www.google.it"
                                        filetype="pdf"
                                    ></Form.checkfile>
                                    <Form.checkgroup className="no-label"
                                        name="field_anagraficablob_privacyletta"
                                        value={formstate["field_anagraficablob_privacyletta"]}
                                        error={formstate.errors["field_anagraficablob_privacyletta"]}
                                        disabled={!this.state.localfield_privacyopen}
                                        onChange={this.props.obchange}
                                        options={[{ "value": "true", "text": "Dichiaro di aver letto e visionato l’informativa privacy" }]}
                                    >
                                    </Form.checkgroup>
                                </Col>
                            </Row>
                        </section>
                    </DefaultCollapse>
                    <DefaultCollapse
                        label="RICHIESTA APERTURA CONTO"
                        startsOpen={false}
                        className="search-collapse"
                        disabled={!isPrivacyChecked}
                    >
                        <section className="onboarding-block">
                            <Row>
                                <Col xs="12">
                                    <Form.input
                                        label="Codice promotore"
                                        value={formstate.field_promotore}
                                        output="true"
                                        className=""
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                            <Row>
                                <Col xs="12">
                                    <Form.radiogroup
                                        label="A chi vuoi intestare il conto"
                                        name="field_numintestatari"
                                        value={formstate["field_numintestatari"]}
                                        onChange={this.props.obchange}
                                        error={formstate.errors["field_numintestatari"]}
                                        options={[{ "value": "1", "text": "un intestataro" }, { "value": "2", "text": "due intestatari" }]}
                                        className=""
                                    >
                                    </Form.radiogroup>
                                </Col>
                            </Row>

                            {formstate.field_convenzione != undefined && formstate.field_convenzione != "" &&
                                <Row>
                                    <Col xs="6">
                                        <Form.input
                                            label="Codice convenzione"
                                            name="field_convenzione"
                                            value={formstate.field_convenzione}
                                            onChange={this.props.obchange}
                                            placeholder="inserisci codice convenzione"
                                            className=""
                                        >
                                        </Form.input>
                                    </Col>
                                    <Col xs="6">
                                        <Form.input
                                            label="Codice promozione"
                                            name="field_promozione"
                                            value={formstate.field_promozione}
                                            onChange={this.props.obchange}
                                            placeholder="inserisci codice promozione"
                                            className=""
                                        >
                                        </Form.input>
                                    </Col>

                                </Row>
                            }
                            <Row>
                                <Col xs="12">
                                    <Form.input
                                        label="Filiale di riferimento"
                                        name="field_anagraficablob_filiale"
                                        value={formstate.field_anagraficablob_filiale}
                                        output="true"
                                        className=""
                                    >
                                    </Form.input>
                                </Col>
                            </Row>
                        </section>
                    </DefaultCollapse>
                    <IntestatarioAnagrafica blockType="privacy" indexInt="0" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}> </IntestatarioAnagrafica>
                    {isSecondoIntestatario && <IntestatarioAnagrafica blockType="privacy" indexInt="1" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}> </IntestatarioAnagrafica>}
                    <h2>Inserisci i dati personali </h2>
                    <h5>Inserisci i tuoi dati e quelli di tutti i cointestatari</h5>
                    <IntestatarioAnagrafica blockType="datiPersonali" indexInt="0" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}></IntestatarioAnagrafica>
                    {isSecondoIntestatario && <IntestatarioAnagrafica blockType="datiPersonali" indexInt="1" setObState={setObState} formstate={formstate} obdomini={obdomini} obchange={this.props.obchange} isPrivacyUnChecked={!isPrivacyChecked}> </IntestatarioAnagrafica>}

                    {/* 
                   
                  


                    { /* Estrae tutti i campi in formato "testo" 
                        DA UTILIZZARE SOLO PER CREARE DEI CAMPI "BOZZA"
                        Object.keys(formstate).filter((v) => {
                            return v.indexOf("field_") >= 0
                        }).map((val, ind) => {
                            return (<>
                                <span style={{display:"block"}}>{"<Row>"}</span>
                                <span style={{display:"block"}}>{"   <Col>"}</span>
                                <span style={{display:"block"}}>{"       <Form.input"}</span>
                                <span style={{display:"block"}}>{"           name=\"" + val + "\""}</span>
                                <span style={{display:"block"}}>{"           value={formstate[\"" + val + "\"]}"}</span>
                                <span style={{display:"block"}}>{"           label={\"Label del campo " + val + " \"}"}</span>
                                <span style={{display:"block"}}>{"           error={formstate.errors[\"" + val + "\"]}"}</span>
                                <span style={{display:"block"}}>{"           onChange={this.props.obchange}"}</span>
                                <span style={{display:"block"}}>{"           placeholder=\"Inserisci un valore per il campo\""}</span>
                                <span style={{display:"block"}}>{"       ></Form.input>"}</span>
                                <span style={{display:"block"}}>{"   </Col>"}</span>
                                <span style={{display:"block"}}>{"</Row>"}</span>
                                </>
                            )
                        })
                        */
                    }



                </div>



            </div>
        )
    }

}


export default {
    form : StepForm,
    validazione: validazione,
    salva: salva
}