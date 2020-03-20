import React, { PureComponent } from 'react';
import DayPicker from "react-day-picker";
import { CustomInput } from 'reactstrap';
import moment from "moment";
import 'moment/locale/it';
import MomentLocaleUtils from "react-day-picker/moment";
import ModalDetail from "./modals/modalDetail";
import ModalEdit from "./modals/modalEdit";
import ModalDelete from "./modals/modalDelete";
import 'react-day-picker/lib/style.css';
import './style.scss';
import {each} from 'lodash-es';
import getData from 'functions/getData';

function YearMonthForm({ date, fromMonth, toMonth, localeUtils, onChange }) {

    const years = [];
    for (let i = fromMonth.getFullYear(); i <= toMonth.getFullYear(); i += 1) {
        years.push(i);
    }

    /* Push dei valori di mese selezionabili a seconda dell'anno*/
    const months = localeUtils.getMonths("it");

    const handleChange = function handleChange(e) {
        const { year, month } = e.target.form;

        /* Forza eventuali date massime e minime */
        var mDate = new Date(year.value, month.value);
        if (mDate<fromMonth) mDate = fromMonth;
        if (mDate>toMonth) mDate = toMonth;


        onChange(mDate);

    };

    return (
        <form className="DayPicker-Caption">
            <CustomInput type="select" id="month" name="month" onChange={ handleChange } value={ date.getMonth() }>
                { months.map(function(month, i) {
                    var mDate = new Date(date.getFullYear(), i);
                    if (mDate >= fromMonth && mDate <= toMonth) {
                        return (
                            <option key={ month } value={ i }>
                                { month }
                            </option>
                        )
                        }
                        else return ""
                    }

                )}
            </CustomInput>
            <CustomInput type="select" id="year" name="year" onChange={ handleChange } value={ date.getFullYear() }>
                { years.map(year => (
                    <option key={ year } value={ year }>
                        { year }
                    </option>
                )) }
            </CustomInput>
        </form>
    );
}

class TypeControl extends PureComponent {

    render(){
        return(
        <div className="type-control">
            <div className={"ctrl Appointment " + this.props.types["Appointment"]} onClick={()=>this.props.chf("Appointment")}><span className="check"></span>Appuntamenti</div>
            <div className={"ctrl Meeting " + this.props.types["Meeting"]} onClick={()=>this.props.chf("Meeting")}><span className="check"></span>Meeting</div>
            <div className={"ctrl Task " + this.props.types["Task"]} onClick={()=>this.props.chf("Task")}><span className="check"></span>Task</div>
        </div>
        )
    }
}


class Agenda extends PureComponent {

    constructor(props){
        super(props);
        this.state = {
            currentmonth: moment().startOf("month").toDate(),
            modalDetailParams: {opened: false},
            modalEditParams: {opened: false},
            modalDeleteParams: {opened: false},
            agendaData: [],
            isLoading: true,
            viewData: {},
            refreshDp: 1,
            viewTypes: {"Appointment":"on","Meeting":"on","Task":"on"}
        }
        this.handleYearMonthChange=this.handleYearMonthChange.bind(this);
        this.getAgendaData=this.getAgendaData.bind(this);
        this.buildAgendaDay=this.buildAgendaDay.bind(this);
        this.loadModalEdit=this.loadModalEdit.bind(this);
        this.loadModalDelete=this.loadModalDelete.bind(this);
        this.refreshAgendaData=this.refreshAgendaData.bind(this);
        this.toggleViewTypes=this.toggleViewTypes.bind(this);
    }


     /* Refresh del calendario con i dati */
     refreshAgendaData() {

        // Filtra i dati per tipo
        let filteredData = {},
        tstate = this;

        this.state.agendaData && this.state.agendaData.appointments && each(this.state.agendaData.appointments,function(v,k) {
            let evalNode = []
            each(v,function(val,key){
                each(["Appointment","Meeting","Task"],function(apptype){
                    if (tstate.state.viewTypes[apptype] === "on" && val.tipoAppuntamento===apptype) evalNode.push(val);
                });
            });
            if (evalNode[0]) filteredData[k.split("/").join("")]=evalNode;
            
        });
        // Ripulisce l'oggetto per eventuali problemi di codifica della "/"
        this.setState(
            {viewData: filteredData}
        );
     }

     /* Chiamata dati "grezzi" da url prefissato */
     getAgendaData() {

        console.log(this.state.currentmonth)

        this.setState({isLoading: true})
        let tthis = this;
        getData({
            url: {"svil": "/json_data/appointment/getAppointments.json", "prod": "/promotori/dashboard/rest/appointment/getFullAppointments"},
            data: {
                searchDateBegin: moment(tthis.state.currentmonth).startOf("month").valueOf(),
                searchDateEnd:  moment(tthis.state.currentmonth).endOf("month").valueOf(),
            },
            success: (data)=> {
                tthis.setState({
                    isLoading: false,
                    agendaData: data,
                    refreshDp: tthis.state.refreshDp + 1
                });
                // Applica eventuali filtri
                tthis.refreshAgendaData();
            }
        });

    }


    handleYearMonthChange(month){
        console.log(month)
        this.setState({currentmonth : month}, this.getAgendaData);
    }

    loadModalEdit(date,appointment) {
      this.setState({
            modalEditParams: {
                opened: true,
                data:appointment,
                date: date
            },
            modalDetailParams: {
                opened: false,
                data:appointment,
                date: date
            }
        })
    }

    loadModalDelete(appointment) {
        this.setState({
              modalDeleteParams: {
                  opened: true,
                  data:appointment
              },
              modalDetailParams: {
                  opened: false
              }
          })
      }

    loadModalDetail(appointment,date) {
        this.setState({
            modalDetailParams: {
                opened: true,
                data:appointment,
                modalTitle: "Prova",
                date: date
            }
        })
    }

    buildAgendaDay(day) {

        // Controllo del giorno per l'assegnazione delle variabili
        let datetocheck = (day.getFullYear()*10000 + (day.getMonth()+ 1)*100 + day.getDate()).toString();
        let tthis = this;

               return (
            <div>
                <div className="giorno">{day.getDate()}</div>
                <div className="add" onClick={()=> {tthis.loadModalEdit(day)}}>+</div>
                {this.state.viewData && this.state.viewData[datetocheck.toString()] &&
                    <div className="dateitems">
                    {
                        this.state.viewData[datetocheck.toString()].map(function(v,i){
                            return(<div className={"item " + v.tipoAppuntamento} key={i} onClick={()=>tthis.loadModalDetail(v,day)}>
                                <span className="dot"></span>
                                <span className="title">{v.subject}</span>
                                <span className="time">{moment(v.startDate).format("HH:mm")} - {moment(v.endDate).format("HH:mm")}</span>
                            </div>);
                        })
                    }
                    </div>
                }
                
            </div>
        )
    }

    toggleViewTypes(type) { 

        var cvtState = this.state.viewTypes;
        cvtState[type] = (cvtState[type]==="on")? "off" : "on";
        this.setState({
            viewTypes: {
                "Appointment" : cvtState["Appointment"],
                "Meeting" : cvtState["Meeting"],
                "Task" : cvtState["Task"]
            }
        });
        this.refreshAgendaData(); 
    }

    componentDidMount(){
        this.getAgendaData();
    }

    render() {

        // Parametri di configurazione "generale" del datePicker
        let dpParams = {
            canChangeMonth: true,
            localeUtils: MomentLocaleUtils,
            locale: "it",
            month: this.state.currentmonth,
            fromMonth: moment().subtract(11,"months").startOf("month").toDate(),
            toMonth: moment().add(11,"months").startOf("month").toDate(),
            renderDay: this.buildAgendaDay,
            viewData: this.state.viewData,
            onMonthChange: this.handleYearMonthChange
            
        }

        dpParams.captionElement = ({ date }) => (
            <YearMonthForm
                date= {date}
                localeUtils={ MomentLocaleUtils }
                fromMonth={ dpParams.fromMonth }
                toMonth={ dpParams.toMonth }
                onChange={this.handleYearMonthChange}
            />
        );

        return (
            <div className='agenda fullpage'>
                <h1>Agenda</h1>
                    <ModalDetail params={this.state.modalDetailParams} closeFunction={()=>{this.setState({modalDetailParams: {opened:false}})}} openEditFunction={this.loadModalEdit}  openDeleteFunction={this.loadModalDelete}></ModalDetail>
                    <ModalEdit params={this.state.modalEditParams} closeFunction={()=>{this.setState({modalEditParams: {opened:false}})}} afterSave={this.getAgendaData}></ModalEdit>
                    <ModalDelete params={this.state.modalDeleteParams} closeFunction={()=>{this.setState({modalDeleteParams: {opened:false}})}} afterSave={this.getAgendaData}></ModalDelete>
                    <div className={(this.state.isLoading)? "loading" : ""} key={this.state.refreshDp}>
                        <TypeControl types={this.state.viewTypes} chf={this.toggleViewTypes}></TypeControl>
                        <DayPicker {...dpParams}/>
                    </div>
            </div>
        );
    }
}



export default Agenda;
