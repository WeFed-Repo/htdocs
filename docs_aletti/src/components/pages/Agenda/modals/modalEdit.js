import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal';
import {Button,Row,Col} from "reactstrap";
import {FormInput,FormOutput,FormVisualRadio,FormDayPicker,FormSelect} from "components/parts/BasicForm";
import moment from "moment";
import 'moment/locale/it';
import Notify from 'functions/Notify'
import getData from 'functions/getData'
import "./style.scss";

let dayTimes = function() {
    let dtr = [];
    let dt;
    for(dt=0;dt<48;dt++){
        var dtstamp = dt * 1000*60*30;
        dtr.push({value:dtstamp, label: moment(new Date(1970,0,1).valueOf() + dtstamp).format("HH:mm") })
    }
    return dtr;
}();


let getTs = function(fDate, tstime=0) {
    let rts = "";
    let fDateParts = fDate.split("-");
    if (fDateParts.length===3) {
        rts = new Date(Number(fDateParts[2]),Number(fDateParts[1])-1,Number(fDateParts[0])).valueOf()+Number(tstime);
    }
    return rts;
}

let extractTimeTs = function(dateTs) {
    
    let pureDate = new Date(dateTs),
    tsMidnight = new Date(pureDate.getFullYear(),pureDate.getMonth(),pureDate.getDate()).valueOf();
    return dateTs - tsMidnight;
}

class ModalEdit extends PureComponent {

    
    constructor(props){
        super(props);

        this.state={
            formErrors: {},
            tipoApp: "",
            isLoading: false
        };
        
        /* Stati dei campi del form */
        this.form_subject = React.createRef();
        this.form_itemId = React.createRef();
        this.form_tipoAppuntamento = React.createRef();
        this.form_body = React.createRef();
        this.form_to = React.createRef();
        this.form_status = React.createRef();
        this.form_priority = React.createRef();
        this.form_location = React.createRef();
        this.form_data = React.createRef();
        this.form_timefrom = React.createRef();
        this.form_timeto = React.createRef();

        /* Binding */
        this.changeTipoApp = this.changeTipoApp.bind(this);
    }
    
    saveModalEdit() {

        // Crea l'oggetto per il post (riassembla eventuali dati esplosi per i controlli locali)
        let fPost = {
            subject: this.form_subject.current.value,
            itemId: this.form_itemId.current.value,
            tipoAppuntamento: this.form_tipoAppuntamento.current.value,
            body: this.form_body.current.value,
            startDate: getTs(this.form_data.current.value,this.form_timefrom.current.value ),
            start: getTs(this.form_data.current.value,this.form_timefrom.current.value ),
            endDate: getTs(this.form_data.current.value, this.form_timeto.current.value )
        };
        
        // Aggiunge valori diversi a seconda del tipo di appuntamento
        if (this.form_tipoAppuntamento.current.value === "Appointment"){
            fPost["location"] = this.form_location.current.value;
        }
        if (this.form_tipoAppuntamento.current.value === "Meeting"){
            fPost["to"] = this.form_to.current.value;
            fPost["requiredAttendees"] = {"attendees": [{"mailAddress": this.form_to.current.value}]}; 
        }
        if (this.form_tipoAppuntamento.current.value === "Task"){
            fPost["status"] = this.form_status.current.value;
            fPost["priority"] = this.form_priority.current.value;
        }
        
        /* Integra i dati */
        fPost = Object.assign((this.props.params.data)?this.props.params.data:{}, fPost);
        
        /* Determina se e' un inserimento o una modifica */
        let isInsert = ((this.props.params.data)? false: true)
        
        let Errors = {},hasErrors=false;

        // Check dei dati
        // Errori generici
        if (!fPost.subject.length) {
            Errors["subject"] = "Occorre specificare un subject";
            hasErrors=true;
        }
        if (!fPost.tipoAppuntamento.length) {
            Errors["tipoAppuntamento"] = "Occorre selezionare un tipo appuntamento";
            hasErrors=true;
        }
        if (fPost.startDate>fPost.endDate) {
            Errors["form_timeto"] = "L'ora di fine e' precedente a quella di inizio";
            hasErrors=true;
        }
        // Errori correlati ad altri valori
       
        if (fPost.tipoAppuntamento.length && fPost.tipoAppuntamento === "Task") {
            // Tipo appuntamento = Task
            if (fPost["status"] === ""){
                Errors["status"] = "Occorre selezionare uno status";
                hasErrors=true;
            }
            if (fPost["priority"] === ""){
                Errors["priority"] = "Occorre selezionare una priority";
                hasErrors=true;
            }
        }

        if (fPost.tipoAppuntamento.length && fPost.tipoAppuntamento === "Meeting") {
            // Tipo appuntamento = Task
            if (fPost["to"] === ""){
                Errors["to"] = "Occorre inserire la mail di un partecipante";
                hasErrors=true;
            }
            else
            {
                // Se non e' un e-mail valido
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(fPost["to"])))
                {
                    Errors["to"] = "Occorre specificare un indirizzo e-mail valido";
                    hasErrors=true;
                }
                
            }
        }

        this.setState({formErrors:Errors});

        if (!hasErrors) {
        
            this.setState({isLoading:true});
            /* INSERIRE QUI LA CHIAMATA AL SERVIZIO DI SALVATAGGIO/MODIFICA */
            /* Determina l'url del servizio a seconda del tipo */
            var urls = {
                "inserimento" : {
                    "Appointment": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/createAppointment"},
                    "Task": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/task/createTask"},
                    "Meeting": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/createAppointment"}
                },
                "modifica" : {
                    "Appointment": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/updateAppointment"},
                    "Task": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/task/updateTask"},
                    "Meeting": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/updateAppointment"}
                }
            }
            


            getData({
               url: urls[(isInsert)? "inserimento" : "modifica"][fPost.tipoAppuntamento],
               data:{
                   [(fPost.tipoAppuntamento==="Task")? "task" : "appointment"] : fPost
               },
               success: data=>{
                   /* ESITO INSERIMENTO IN TOAST E CHIUSURA */
                   this.props.closeFunction();
                   if(data.esito.type ==="OK") {
                        Notify.success("Evento " + ((isInsert)? "inserito" : "modificato") + " con successo.");
                        
                   }
                   else
                   {
                    Notify.error("Errore: evento non " + ((isInsert)? "inserito" : "modificato") + ".Errore in fase di salvataggio.");
                   }
                   this.setState({
                        isLoading:false
                    })
                   this.props.afterSave()
                }
            })
        
        }

    }

    changeTipoApp(val) {
        
        this.setState(
            {tipoApp:val}
        )
    }

    render() {

        let modalParams = {
            modalTitle: ((this.props.params.data)? "Modifica":"Nuovo") + " evento"
        }

        /* Inizializzazione oggetto di base */
        let defaultAppData = {};
        
        /* Estensione dell'oggetto per integrazione eventuali dati esterni e frammentazione con dati "locali"*/
        let appData = Object.assign(defaultAppData, this.props.params.data, {
            data: (this.props.params.data)? moment(new Date(this.props.params.data.startDate)).format("DD-MM-YYYY"): this.props.params.date,
            data_timefrom: (this.props.params.data)? extractTimeTs(this.props.params.data.startDate) : extractTimeTs(Math.round(new Date().valueOf()/(30*60*1000))*(30*60*1000) ),
            data_timeto: (this.props.params.data)? extractTimeTs(this.props.params.data.endDate):  extractTimeTs(Math.round(new Date().valueOf()/(30*60*1000) + 1)*(30*60*1000)),
        });

        let appuType = (this.props.params.data) ? this.props.params.data.tipoAppuntamento : this.state.tipoApp;

        return (
            <DefaultModal show={this.props.params.opened} close={this.props.closeFunction} params={modalParams}>
            <form className={"form" + ((this.state.isLoading)? " loading":"")}>
            <input type="hidden" name="itemId" value={appData.itemId}  ref={this.form_itemId}/>
            <FormInput params={{
                label:"Subject",
                defaultValue:appData.subject,
                ref: this.form_subject,
                placeholder: "Inserisci titolo",
                type: "text",
                error: this.state.formErrors["subject"]
            }}/>
            {this.props.params.data &&
                <FormOutput params={{
                    label:"Type",
                    defaultValue: appData.tipoAppuntamento,
                    ref: this.form_tipoAppuntamento
                }} />
            }
            {!this.props.params.data &&
                <FormVisualRadio params={{
                    label:"Type",
                    defaultValue: appData.tipoAppuntamento,
                    values: [{value:"Appointment",label:"Appointment"},{value:"Meeting",label:"Meeting"},{value:"Task",label:"Task"}],
                    ref: this.form_tipoAppuntamento,
                    changeFunction: this.changeTipoApp,
                    error: this.state.formErrors["tipoAppuntamento"]
                }} />
            }
            {appuType === "Meeting" && <FormInput params={{
                label:"To",
                defaultValue:appData.to,
                ref: this.form_to,
                placeholder: "Inserisci la mail di un partecipante",
                type: "text",
                maxLength: 60,
                error: this.state.formErrors["to"]
            }}/>}
            {appuType === "Task" && <div>
            <FormSelect params={{
                label: "Status",
                defaultValue: appData.status,
                values: [{value: "Completed",label:"Completed"},{value: "Deferred",label:"Deferred"},{value: "InProgress",label:"In progress"},{value: "NotStarted",label:"Not started"},{value: "WaitingOthers",label:"Waiting others"}],
                ref: this.form_status,
                placeholder: "Seleziona uno status...",
                error: this.state.formErrors["status"]
            }}/>
            <FormSelect params={{
                label: "Priority",
                defaultValue: appData.priority,
                values: [{value: "High",label:"High"},{value: "Normal",label:"Normal"},{value: "Low",label:"Low"}],
                ref: this.form_priority,
                placeholder: "Seleziona una priority...",
                error: this.state.formErrors["priority"]
            }} />
            </div>}
            {appuType=== "Appointment" && 
            <FormInput params={{
                label:"Location",
                defaultValue:appData.location,
                ref: this.form_location,
                placeholder: "Inserire la location",
                type: "text",
                maxLength: 100
            }}/>}
            <Row>
                <Col sm="4">
                    <FormDayPicker params={{
                    label: "Date",
                    defaultValue: appData.data,
                    ref: this.form_data
                    }} />
                </Col>
                <Col sm="4">
                    <FormSelect params={{
                        label: "Dalle",
                        defaultValue: appData.data_timefrom,
                        values: dayTimes,
                        ref: this.form_timefrom
                    }} />
                </Col>
                <Col sm="4">
                    <FormSelect params={{
                    label: "Alle",
                    defaultValue: appData.data_timeto,
                    values: dayTimes,
                    ref: this.form_timeto,
                    error: this.state.formErrors["form_timeto"]
                }} />
                </Col>
            </Row>
            <FormInput params={{
                label:"Note",
                defaultValue:appData.body,
                ref: this.form_body,
                placeholder: "Inserire note",
                type: "text",
                maxLength: 200
            }}/>
            <div className="btn-console">
            <Button onClick={()=>this.saveModalEdit()}>Salva</Button>
            </div>
            </form>
            </DefaultModal>
            );
        }
    }
    
    export default ModalEdit;