/* Campi "standard" per i form */
import React, { Component, Children } from 'react';
import {ambiente} from "functions/genericVars";
import Functions from "components/functions";
import DayPickerInput from "react-day-picker/DayPickerInput";
import getData from "functions/getData";
import 'react-day-picker/lib/style.css';
import moment from "moment";
import MomentLocaleUtils, { formatDate } from 'react-day-picker/moment';
import 'moment/locale/it';
import { Row, Col, Button, Modal, ModalHeader, ModalBody, ModalFooter } from "reactstrap";
import "./style.scss";

// Filtraggio in INPUT
const applyMask = (value,mask) => {

    // Stringhe basiche di caratteri consentiti
    let reTest= {
        "numero" : /\d/,
        "telefono": /[0-9+]/,
        "alfanumerico": /\w/,
        "alfabetico" : /[^0-9@]/,
        "codicefiscale" : /[A-za-z0-9]/
    }
   
    value = value.split("").filter((char)=>{ return reTest[mask].test(char)}).join("");

    if (mask==="alfanumerico" || mask==="codicefiscale" ) value = value.toUpperCase()

    return value;
}


// Funzione che gestisce i cambi dei vari campi
let handleChange = function (component, e) {

    let name = e.name ? e.name : e.target.name,
        value = (typeof e.value !== "undefined") ? e.value : e.target.value;

    // Assegna l'eventuale callBack, se possibile, altimenti non fa nulla
    let cbchange = (e.cbchange)? e.cbchange : function(){};

    // Se esiste una maschera filtra il valore a monte
    let mask = e.mask;
    if(mask){
        value = applyMask(value,mask);
    }
    
    // Stato del checkbox
    if (e.target && e.target.type && e.target.type === "checkbox") {
        let currValues = component.state[name].toString().split(",").filter((val) => { return val !== "" });
        if (currValues.indexOf(value) >= 0) {
            currValues = currValues.filter((val) => { return val !== value })
        }
        else {
            currValues.push(value);
        }
        value = currValues.join(",");
    }

    // Appena il campo cambia rimuove il suo errore
    let errors = component.state.errors;
    if (errors[name]) delete errors[name];

    // A seconda del tipo di campo che genera l'evento si comporta in modo differente, in modo da avere sempre l'aggiornamento dello stato corretto
    component.setState(
        {
            [name]: value,
            errors: errors
        }, cbchange(value)
    );
}


// ############################ Input "basici" ##############################
class FormInput extends Component {

    constructor(props) {
        super(props)
    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            type = (this.props.label) ? this.props.label : "text",
            maxlength = (this.props.maxlength) ? this.props.maxlength : "255",
            error = this.props.error,
            output = this.props.output ? true : false,
            value = this.props.value,
            placeholder = this.props.placeholder,
            cbchange = this.props.cbchange,
            mask= this.props.mask;

        return (
            <div className={"form-group " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                {!output && <input disabled={this.props.disabled} type={type} maxLength={maxlength} name={this.props.name} placeholder={placeholder} onChange={(e)=>{e["cbchange"]=cbchange;e["mask"]=mask;this.props.onChange(e)}} value={value} className="form-control" />}
                {output && <span className="output">{value}</span>}
                {error && <span className="error">{error}</span>}
            </div>
        );

    }

}


// ############################ Select ##############################
class FormSelect extends Component {
    
    state={
        isLoading: false,
        options: (this.props.options)? this.props.options: [],
        ajaxfilter: this.props.ajaxfilter
    }
    
    constructor(props) {
       super(props)
       this.getAjaxOptions = this.getAjaxOptions.bind(this);
    }

 
    getAjaxOptions(ajaxoptions, ajaxfilter) {

        // Seleziona l'url per la chiamata
        const selectUrls = {
            "nazioni" : {"svil": "/json_data/onboarding/selectNazioni.json", "prod": "/promotori/onboarding/rest/domini/nazioni/all"},
            "nazioni_attive" : {"svil": "/json_data/onboarding/selectNazioni.json", "prod": "/promotori/onboarding/rest/domini/nazioni/active"},
            "province": { "svil" : "/json_data/onboarding/selectProvince.json", "prod": "/promotori/onboarding/rest/domini/province/all"},
            "province_attive": { "svil" : "/json_data/onboarding/selectProvince.json", "prod": "/promotori/onboarding/rest/domini/province/active"},
            "comuni" : { "svil":"/json_data/onboarding/selectComuni.json?prov="+ ((this.props.ajaxfilter)?this.props.ajaxfilter : ""),  "prod": "/promotori/onboarding/rest/domini/comuni/"+ ((this.props.ajaxfilter)?this.props.ajaxfilter : "") + "/all"},
            "comuni_attivi" : { "svil":"/json_data/onboarding/selectComuni.json?prov="+ ((this.props.ajaxfilter)?this.props.ajaxfilter : ""),  "prod": "/promotori/onboarding/rest/domini/comuni/"+ ((this.props.ajaxfilter)?this.props.ajaxfilter : "") + "/active"}
        }
        
        this.setState({isLoading:true},
            ()=>{
                getData({
                    url: selectUrls[this.props.ajaxoptions],
                    method: "GET",
                    success: (data)=>{
                        // Converte i dati ricevuti tramite un remapping
                        let  options = data.results && data.results.map((obj)=>{
                            if (obj.code) {
                                return({"value":obj.code,"text":obj.description})
                            }
                            else
                            {
                                return({"value":obj,"text":obj})
                            }
                        })

                        this.setState({
                            options:options,
                            isLoading: false
                        });

                       
                    }
                })
            }   
        )

    }

    componentDidMount() {

        // Se devono arrivare opzioni da una chiamata ajax, li raccoglie non appena monta l'oggetto
        if(this.props.ajaxoptions && this.props.ajaxoptions !=="") {
            
            this.setState({isLoading:true},
                ()=> {
                   this.getAjaxOptions(this.props.ajaxoptions)
                }    
                );
        }
        else {
            this.setState({
                options: this.props.options
            })
        }

    }

    componentDidUpdate() {
        if (this.props.ajaxoptions && this.props.ajaxoptions !== "" && this.props.ajaxfilter && this.props.ajaxfilter !=="") {
        
            if (this.state.ajaxfilter !== this.props.ajaxfilter) {
                
                this.setState({
                    ajaxfilter: this.props.ajaxfilter
                },()=>this.getAjaxOptions(this.props.ajaxoptions, this.props.ajaxfilter))
                
            }

           
        }
        
    }


    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            error = this.props.error,
            output = this.props.output ? true : false,
            value = this.props.value,
            placeholder = this.props.placeholder,
            options = this.state.options,
            cbchange = this.props.cbchange;

        return (
            <div className={"form-group " + this.props.className + " " + ((error) ? "error" : "") + (this.state.isLoading? " loading":"")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                {!output && <select disabled={this.props.disabled} name={this.props.name} onChange={(e)=>{e["cbchange"]=cbchange;e["mask"]=null;this.props.onChange(e)}} value={value} className={"form-control"}>
                    {placeholder && <option value="">{placeholder}</option>}
                    {options && options.map(function (val, index) {
                        return <option value={val.value} key={index}>{val.text}</option>
                    })}
                </select>}
                {output && <span className="output">{options && options.map((val)=>{if (value===val.value) return val.text})}</span>}
                {error && <span className="error">{error}</span>}
            </div>
        );
    }
}



// ############################ Checkgroup ##############################
class FormCheckgroup extends Component {
    constructor(props) {
        super(props)
    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            name = this.props.name,
            error = this.props.error,
            output = this.props.output ? true : false,
            value = this.props.value ? this.props.value : "",
            options = this.props.options,
            orientation = (this.props.orientation && this.props.orientation === "vertical") ? "vertical" : "horizontal",
            cbchange = this.props.cbchange;

        // ############################ Classi wrapper per checkgroup e radiogroup #######################
        // A seconda del tipo di orientamento determina il wrapper
        class FieldMainWrapper extends Component { render() { return (orientation === "vertical") ? <>{this.props.children}</> : <Row>{this.props.children}</Row>; } };
        class FieldWrapper extends Component { render() { return (orientation === "vertical") ? <div className="checkgroup-vertical">{this.props.children}</div> : <Col>{this.props.children}</Col>; } };



        return (
            <div className={"form-group checkgroup " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                <FieldMainWrapper>
                    {options && options.map((obj, ind) => {
                        return (<FieldWrapper key={ind}><label className={"checkradio " + (output? "output" : "")}><input disabled={this.props.disabled || output} type="checkbox" name={name} value={obj.value} checked={value.toString().split(",").indexOf(obj["value"]) >= 0} onChange={(e)=>{e["cbchange"]=cbchange;e["mask"]=null;this.props.onChange(e)}}></input><span className="text">{obj.text}</span></label></FieldWrapper>)
                    })}
                </FieldMainWrapper>
                {error && <span className="error">{error}</span>}
            </div>
        );

    }
}


// ############################ Radiogroup ##############################
class FormRadiogroup extends Component {
    constructor(props) {
        super(props)
    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            name = this.props.name,
            error = this.props.error,
            output = this.props.output ? true : false,
            value = this.props.value ? this.props.value : "",
            options = this.props.options,
            orientation = (this.props.orientation && this.props.orientation === "vertical") ? "vertical" : "horizontal",
            cbchange = this.props.cbchange;

        // ############################ Classi wrapper per checkgroup e radiogroup #######################
        // A seconda del tipo di orientamento determina il wrapper
        class FieldMainWrapper extends Component { render() { return (orientation === "vertical") ? <>{this.props.children}</> : <Row>{this.props.children}</Row>; } };
        class FieldWrapper extends Component { render() { return (orientation === "vertical") ? <div className="checkgroup-vertical">{this.props.children}</div> : <Col>{this.props.children}</Col>; } };


        return (
            <div className={"form-group radiogroup " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                <FieldMainWrapper>
                    {options && options.map((obj, ind) => {
                        return (<FieldWrapper key={ind}><label className={"checkradio " + (output? "output":"")}><input disabled={this.props.disabled || output} type="radio" name={name} value={obj.value} checked={obj["value"] === value} onChange={(e)=>{e["cbchange"]=cbchange;e["mask"]=null;this.props.onChange(e)}}></input><span className="text">{obj.text}</span></label></FieldWrapper>)
                    })}
                </FieldMainWrapper>
                {error && <span className="error">{error}</span>}
            </div>
        );

    }
}


// ############################ Checkfile ##############################
class FormCheckfile extends Component {
    constructor(props) {
        super(props)
    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            name = this.props.name,
            error = this.props.error,
            value = this.props.value ? this.props.value : false,
            cbchange = this.props.cbchange;

        return (
            <div className={"form-group " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                {!this.props.disabled && 
                    <a className={"checkfile " + ((value) ? " clicked" : "")} onClick={() => {this.props.onChange({ name: name, value: true, cbchange:cbchange , mask:null})}} href={this.props.fileurl} target="_blank">
                        <i className="icon icon-file_pdf"></i>
                        <span className="text">{this.props.filedescription}</span>
                    </a>
                }
                {this.props.disabled &&
                    <span className={"checkfile " + ((value) ? " clicked" : "")}>
                        <i className="icon icon-file_pdf"></i>
                        <span className="text">{this.props.filedescription}</span>
                    </span>
                }
                {error && <span className="error">{error}</span>}
            </div>
        );

    }
}

// ############################ File ##############################
class FormFile extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
            flag_unico: (this.props.value && this.props.value.filter((el)=>{return (el.tipo==="FRONTE" || el.tipo==="RETRO")}).length>0)? false: true,
            
            modalUploadTitle: "",
            modalUpload: false,
            modalUploadLoading: false,
            modalUploadError: "",
            fileToTransfer: "",
            fileUploadStream: null,
            
            fileLoading: false,
            modalView: false
        }
        this.fileUpload = this.fileUpload.bind(this);
        this.fileView = this.fileView.bind(this);
        this.imageBlock = this.imageBlock.bind(this);
    }

    maxSize = 5.0;

    // Ritorna il componente per la preview
    imageBlock(file) {
        //Assembla l'url dal file
        if (file) {
            getData({
                url: {"svil":"/json_data/onboarding/getAllegato_"+ file.formato.toLowerCase() +".json","prod":"/promotori/onboarding/rest/documentale/"+ file.idImmagine +"/getAllegato"},
                method: "GET",
                success: (data)=> {

                    // A seconda del tipo di file mostra il file oppure un iconcina per scaricarlo/vederlo nel browser
                    if ((["JPG","JPEG","PNG","GIF","BPM"]).indexOf(file.formato)>=0) {
                        // Se puo' visualizzarlo nel browser...
                        this.setState({imageViewComp: <img src={data.results} className={"file-preview"}></img>});
                    }
                    else {
                        // Chiede all'utente di scaricarlo...
                        this.setState({imageViewComp: <a href={data.results} className={"file-link " + file.formato.toLowerCase()} download={"documento_"+file.idImmagine+"."+  file.formato.toLowerCase()}>Scarica {file.formato}</a>});
                    }
                    
                }
            })
        }
        else
        {
            this.setState({imageViewComp: <></>});
        }
        
    }

    // Funzione che fa l'upload di un file (al momento e' emulato in attesa di una chiamata vera e propria)
    fileUpload(tipo,currentFile) {

        // Avvia il salvataggio del file
        let fr = new FileReader();
        this.setState({modalUploadLoading: true})
        fr.onloadend = (e)=> {
            
            // Effettua l'invio del file
            let inputStream = fr.result;

            // Se l'inputStream e' eccessivo (file molto grande) propone un messaggio ed annulla l'operazione
            // La grandezza è in MB (la grandezza originale è il 25% più piccola)
            
            let lengthb64 = (4 * [this.maxSize/3]) * 1024 * 1024; 

            if (inputStream.length<=lengthb64) {

                // Estrae il tipo dall'estensione del file (Maiuscola)
                let extension = this.state.fileToTransfer.split(".").reverse()[0].toUpperCase();

                // Se l'estensione è compatibile 
                if (this.props.formati.map((obj)=>{return obj.value.toLowerCase()}).indexOf(extension.toLowerCase())>=0 ){

                    let dataToSend  ={
                        "idAllegato": (currentFile.idImmagine? currentFile.idImmagine : null),
                        "allegato": (ambiente.isLocale || ambiente.isLibrerie)? "": inputStream,
                        "formatoAllegato": extension,
                        "tipoAllegato" : tipo,
                        "idWorkflowPratica": this.props.idBozza
                    }
                    getData({
                        url: {"svil":"/json_data/onboarding/upsertAllegato.json","prod":"/promotori/onboarding/rest/documentale/upsertAllegato"},
                        data: dataToSend,
                        success: (data)=>{
    
                            // crea il nuovo array locale eliminando eventuale file preesistente
                            let localValue = [];
                            this.props.value.forEach((v,i)=>{
                                    if(v.tipo!==tipo) localValue.push(v);
                            });
                            
                            // Aggiorna il dato locale con il nuovo valore
                            localValue.push ({
                                "idImmagine":data.results,    
                                "formato":extension,    
                                "tipo":tipo 
                            });
    
                            // Chiude la modale e resetta il trasferimento
                            this.setState({
                                fileToTransfer:"",
                                modalUpload:false,
                                modalUploadLoading: false
                            })
    
                            // Cambia il valore nel form
                            this.props.onChange({name:this.props.name,value:localValue})
    
                        },
                        error: ()=>{
                            alert("Si sono verificati degli errori in fase di salvataggio")
                        }
                    })

                }
                else
                {
                    // File eccessivamente grande
                    this.setState({modalUploadLoading: false, modalUploadError: "Il file ha un estensione ("+ extension +") non consentita"})
                }



            }
            else
            {
                // File eccessivamente grande
                this.setState({modalUploadLoading: false, modalUploadError: "Il file selezionato ha una grandezza eccessiva. Max " + this.maxSize+" Mb"})
                
            }
           
            
        }
        fr.readAsDataURL(this.state.fileUploadStream)
    }

    modalUpload(type) {
        this.setState({
            modalUploadTitle: this.props.label + ": carica immagine " + ( type!=="UNICA"? type.toLowerCase(): ""),
            modalUploadError: "",
            modalUpload: true,
            modalUploadType: type,
            fileToTransfer: ""
        })
    }

    
    fileView(file) {
        
        if(file && file.idImmagine) {
            this.setState({
                modalViewTitle: this.props.label + (file.tipo != "UNICA"? ": " + file.tipo.toLowerCase(): ""),
                modalView: true,
                modalViewFile: file
            },()=>this.imageBlock(file))
        }
        

    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            error = this.props.error,
            value = this.props.value,
            tipo = (this.props.tipo) ? this.props.tipo : "",
            output = (this.props.output)? this.props.output : false,
            localformat = (this.props.formati)? this.props.formati.map((obj)=>{return "." + obj.value.toLowerCase()}).join(",") : ".jpg,.jpeg"
                   
        // Oggetto locale per le visualizzazioni
        let fileObject = {"FRONTE":{},"RETRO":{},"UNICA":{}};
       
        this.props.value && this.props.value.forEach((v,i)=>{
               fileObject[v.tipo] = v;
            });


        return (
            <div className={"form-group " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                
                <Modal isOpen={this.state.modalUpload}>
                    <div className={(this.state.modalUploadLoading) ? "loading" : ""}>
                        <ModalHeader>{this.state.modalUploadTitle}</ModalHeader>
                        
                            {this.state.modalUploadError==="" &&
                                <>
                                    <ModalBody>
                                        <div>
                                            <p>{value === "" ? "Seleziona un file da caricare" : "Seleziona un file con il quale sovrascrivere quello già caricato"}:</p>
                                            <input type="file" accept={localformat} value={this.state.fileToTransfer} onChange={(e) => { this.setState({ fileToTransfer: e.target.value ,fileUploadStream:e.target.files[0]}) }}></input>
                                        </div>
                                    </ModalBody>
                                    <ModalFooter>
                                        <div className="btn-console">
                                            <div className="btn-console-left">
                                                <Button onClick={() => this.setState({fileToTransfer:"", modalUpload: false})}>Annulla</Button>
                                            </div>
                                            <div className="btn-console-right">
                                                <Button color="primary" style={{ display: (this.state.fileToTransfer==="") ? "none" : "" }} onClick={()=>this.fileUpload(this.state.modalUploadType, fileObject[this.state.modalUploadType])}>Carica il file</Button>
                                            </div>
                                        </div>
                                    </ModalFooter>
                                </>
                            }
                            {this.state.modalUploadError!=="" &&
                                <>
                                    <ModalBody>
                                        <div>
                                            <p>{this.state.modalUploadError}</p>
                                        </div>
                                    </ModalBody>
                                    <ModalFooter>
                                        <div className="btn-console">
                                            <div className="btn-console-left">
                                                <Button onClick={() => this.setState({fileToTransfer:"", modalUpload: false})}>Annulla</Button>
                                            </div>
                                            <div className="btn-console-right">
                                                <Button color="primary" onClick={()=>this.setState({fileToTransfer:"",modalUploadError: ""})}>Seleziona altro</Button>
                                            </div>
                                        </div>
                                    </ModalFooter>
                                </>

                            }
        
                    </div>
                </Modal>

                <Modal isOpen={this.state.modalView}>
                    <div className={(this.state.fileLoading) ? "loading" : ""}>
                        <ModalHeader>{this.state.modalViewTitle}</ModalHeader>
                        <ModalBody>
                           {this.state.imageViewComp}
                        </ModalBody>
                        <ModalFooter>
                            <div className="btn-console">
                              <div className="btn-console-right">
                                    <Button color="primary" onClick={()=>this.setState({modalView:false})}>chiudi</Button>
                                </div>
                            </div>
                        </ModalFooter>
                    </div>
                </Modal>

                <div className="file-input-wrapper">
                    <div className="fr-selector">
                        {tipo === "fr" && !output &&
                            <label className="file-check-label"><input type="checkbox" value="true" onChange={(e)=>this.setState({
                                flag_unico: !this.state.flag_unico
                            })} checked={this.state.flag_unico}></input><span>Carica il documento fronte-retro in un unico file</span></label>
                        }
                        <div className="file-input-parts">
                            {this.state.flag_unico &&
                                <div className={"document-wrapper " + (fileObject["UNICA"].idImmagine? "ok": "")}>
                                    <div className={"document-thumbnail " + ((tipo==="fr")?"unico" : "solo")}  onClick={()=>this.fileView(fileObject["UNICA"])}></div>
                                    {!output && <Button color="primary" onClick={()=>this.modalUpload("UNICA")}>carica</Button> }
                                </div>
                            }
                            {!this.state.flag_unico && 
                                <>
                                     <div className={"document-wrapper " + (fileObject["FRONTE"].idImmagine? "ok": "")}>
                                        <div className="document-thumbnail fronte" onClick={()=>this.fileView(fileObject["FRONTE"])}></div>
                                        {!output && <Button color="primary" onClick={()=>this.modalUpload("FRONTE")}>carica fronte</Button>}
                                    </div>
                                    <div className={"document-wrapper " + (fileObject["RETRO"].idImmagine? "ok": "")}>
                                        <div className="document-thumbnail retro"  onClick={()=>this.fileView(fileObject["RETRO"])}></div>
                                        {!output && <Button color="primary"  onClick={()=>this.modalUpload("RETRO")}>carica retro</Button>}
                                    </div>
                                   
                                </>
                            }
                        </div>
                    </div>
                </div>
                {error && <span className="error">{error}</span>}
            </div>
        );

    }

}


// ############################ Data (con datepicker e tutte le personalizzazioni dei vari selettori) ##################
// Componente selettore per mese e anno nel day-picker
class FormDateMonthSelector extends Component {

    constructor(props) {
        super(props)
        this.state = {
            sMonth: this.props.month.getMonth(),
            sYear: this.props.month.getFullYear()
        }
        this.changeSel = this.changeSel.bind(this);
    }

    changeSel(e) {

        this.setState({
            [e.target.name]: Number(e.target.value)
        }, () => {
            this.props.changemonth(new Date([this.state.sYear, this.state.sMonth + 1]));
        }
        );
    }

    render() {

        let dateFrom = this.props.datefrom,
            dateTo = this.props.dateto,
            cMonth = this.props.month;

        let arrYears = [];
        for (let year = Functions.textToDate(dateFrom).getFullYear(); year <= Functions.textToDate(dateTo).getFullYear(); year++) {
            arrYears.push(year)
        }

        // Mostra solo i mesi necessari
        let arrMonth = moment.months().map(function (month, index) {
            return ({ text: month, value: index })
        }).filter(function (monthObj) {

            let fromMonth = moment(Functions.textToDate(dateFrom)).startOf("month").toDate();
            let toMonth = moment(Functions.textToDate(dateTo)).endOf("month").toDate();
            var checkMonth = new Date([cMonth.getFullYear(), monthObj.value + 1, 1]); // moment(Functions.textToDate(dateFrom))

            return (checkMonth >= fromMonth && checkMonth <= toMonth);
        });

        return (

            <div className="dayPicker-month-selector" role="heading">
                <select className="mese" name="sMonth" value={this.state.sMonth} onChange={this.changeSel}>
                    {
                        arrMonth.map(function (monthObj) {
                            return (<option value={monthObj.value} key={monthObj.value}>{monthObj.text}</option>)
                        })
                    }
                </select>
                <select className="anno" name="sYear" value={this.state.sYear} onChange={this.changeSel}>
                    {
                        arrYears.map(function (year) {
                            return <option value={year} key={year}>{year}</option>
                        })
                    }
                </select>
            </div>

        )

    }
}
// Componente "campo" vero e proprio
class FormDate extends Component {

    constructor(props) {

        super(props);
        this.state = {
            month: new Date()
        }
        this.changeMonth = this.changeMonth.bind(this);
    };

    componentDidMount() {
        let dFrom = Functions.textToDate(this.props.dateFrom),
            dTo = Functions.textToDate(this.props.dateTo),
            defaultMonth = new Date();

        if (dFrom && dFrom > defaultMonth) defaultMonth = dFrom;
        if (dTo && dTo < defaultMonth) defaultMonth = dTo;
        this.setState({
            month: defaultMonth
        })

    }


    changeMonth(month) {

        this.setState({
            month: month
        })

    }

    render() {

        // parametri del campo: vengono cambiati tramite le sue props
        let label = (this.props.label) ? this.props.label : "",
            error = this.props.error,
            output = this.props.output ? true : false,
            value = this.props.value,
            dateFrom = this.props.dateFrom,
            dateTo = this.props.dateTo,
            placeholder = (this.props.placeholder) ? this.props.placeholder : "GG/MM/AAAA",
            cbchange = this.props.cbchange;

        /* Parametri e forzature addizionali */
        let dFrom = Functions.textToDate(dateFrom),
            dTo = Functions.textToDate(dateTo);

        let defaultMonth = this.state.month;
        if (dFrom && dFrom > defaultMonth) defaultMonth = dFrom;
        if (dTo && dTo < defaultMonth) defaultMonth = dTo;

        let dpProps = {
            month: defaultMonth,
            locale: 'it',
            localeUtils: MomentLocaleUtils,
            selectedDays: value && Functions.textToDate(value),
            onMonthChange: this.changeMonth,
            modifiers: {
                sunday: {
                    daysOfWeek: [0]
                }
            }
        }


        if (dateFrom) {
            dpProps["fromMonth"] = dFrom;
        }
        if (dateTo) {
            dpProps["toMonth"] = dTo;
        }


        // Inserisce i giorni disabilitati
        var disabledDays = [];

        // Mese "da"
        if (dFrom) {
            for (let day = 1; day < dFrom.getDate(); day++) {
                let testDate = new Date([dFrom.getFullYear(), dFrom.getMonth() + 1, day])
                if (testDate < dFrom) disabledDays.push(testDate);
            }
        }
        if (dTo) {
            for (let day = dTo.getDate(); day <= moment(dTo).endOf("month").toDate().getDate(); day++) {
                let testDate = new Date([dTo.getFullYear(), dTo.getMonth() + 1, day])
                if (testDate > dTo) disabledDays.push(testDate)
            }
        }
        dpProps["disabledDays"] = disabledDays;

        /* Crea il pannello di controllo con le select nel datepicker per le date */
        if (dateFrom && dateTo) {
            dpProps["captionElement"] = <FormDateMonthSelector datefrom={dateFrom} dateto={dateTo} key={this.state.month} month={this.state.month} changemonth={this.changeMonth}></FormDateMonthSelector>
        }

        return (

            <div className={"form-group daypicker " + this.props.className + " " + ((error) ? "error" : "")}>
                {label && <label className="form-control-label">{this.props.label}</label>}
                {!output && <div className="daypicker-wrapper">
                    <DayPickerInput
                        value={value}
                        onDayChange={(a, b, input) => {
                            let inp = input.getInput();
                            inp["cbchange"] = cbchange;
                            inp["mask"] = null;
                            this.props.onChange(inp)}
                        }
                        inputProps={{
                            placeholder: placeholder,
                            className: "form-control",
                            name: this.props.name,
                            readOnly: true,
                            disabled: this.props.disabled
                        }}
                        formatDate={formatDate}
                        format="DD/MM/YYYY"
                        dayPickerProps={dpProps}
                    ></DayPickerInput>
                    {value !== "" && <div className="canc" onClick={() => this.props.onChange({ name: this.props.name, value: "" , cbchange: cbchange})}>&#215;</div>}
                </div>
                }
                {output && <span className="output">{value}</span>}
                {error && <span className="error">{error}</span>}
            </div>
        );
    }
}

/* Esportazione degli oggetti */
const Form = {
    input: FormInput,
    select: FormSelect,
    checkgroup: FormCheckgroup,
    radiogroup: FormRadiogroup,
    checkfile: FormCheckfile,
    file: FormFile,
    date: FormDate,

    /* Funzione generica per gestire gli onchange */
    change: handleChange
}
export default Form 