import React, {PureComponent} from 'react';
import {Col, Row} from "reactstrap";
import formatDate from 'functions/rad/formatDate';
import _, { forEach } from "lodash-es";
import moment from "moment";
import {DayPickerIt} from 'components/parts/DayPickerIt';
import DefaultModal from 'components/parts/DefaultModal'
import WidgetModalBody from 'components/dashboard/modals'


class WidgetAgenda extends PureComponent {

  constructor (props) {
      super(props);
      this.state = {
        isModalOpened: false,
        modalParams: null,
      };
      this.openModal = this.openModal.bind(this);
      this.closeModal = this.closeModal.bind(this);
  }

  openModal (modifiers,parameters) {

      if (modifiers["Appointment"] || modifiers["Task"] || modifiers["Meeting"]) {

          // Assembla i parametri per la modale
          let mParams = {
              modalTitle: "Appuntamenti del " + formatDate(parameters.day),
              modalType: "widget_agenda",
              day: parameters.day,
              appointments: parameters.appointments
          }

          this.setState({
            isModalOpened: true,
            modalParams: mParams
          })
      }
  }

  closeModal () {
      this.setState({
        isModalOpened: false,
        modalParams: null
      })
  }

  addDots(day) {
    const date = day.getDate();
    return (<div>{date}<div className="day-app">
      <div className="dot dot-Appointment" />
      <div className="dot dot-Meeting" />
      <div className="dot dot-Task" /></div>
      </div>)
  }

  render () {
    
    // Prossimi appuntamenti/task/meeting
    let nextApp = [],
        nextAppLimit = 5;

    const dotsModifiers = {
      "Appointment": [],
      "Meeting": [],
      "Task": []
    };

    // cicla le date per fare le varie elaborazioni
    if (this.props.data && this.props.data.appointments) {
      forEach(this.props.data.appointments,function(v,k){
          var dateToArr = k.split( "/" );
          var dateToInsert = new Date(dateToArr[0],dateToArr[1]-1,dateToArr[2]);
          forEach(v,function(val){
              dotsModifiers[val.tipoAppuntamento].push(dateToInsert);
              // Se disponibile, inserisce il prossimo appuntamento
              if (dateToInsert>=new Date() && nextAppLimit>0) {
                nextApp.push(val);
                nextAppLimit --;
              }
          });
          
      })
    }

    let startDate = new Date(this.props.params.searchDateBegin),
        endDate = new Date(this.props.params.searchDateEnd);


    return (
          <div className="widget-body">
            <DefaultModal show={this.state.isModalOpened} close={this.closeModal} params={this.state.modalParams}><WidgetModalBody {...this.state.modalParams}/></DefaultModal>
            <Row>
              <Col lg="12" xl={(!this.props.hiddenMode)? 6 : 12}>
                <DayPickerIt renderDay={this.addDots} canChangeMonth={true} modifiers={dotsModifiers} onDayClick={(day,modifiers) => {this.openModal(modifiers,{day:day, appointments: this.props.data.appointments})}} fromMonth={startDate} toMonth={endDate} />
              </Col>
              <Col lg="12" xl="6" className={(this.props.hiddenMode)? "hidden": ""}>
                <div className="scrollable">
                {
                  (nextApp.length>0) && _.map(nextApp.sort(function(a,b){
                      return (a.startDate<=b.startDate)? -1: 1;
                    }),function(obj,i){
                    return(
                      <div className="el-box" key={obj.itemId + "_" + i}>
                        <span className="el-data"><span className={"agenda-dot " + obj.tipoAppuntamento}></span>{formatDate(obj.startDate,true)}</span>
                        <span className="el-ora">{moment(obj.startDate).format("HH:mm")} - {moment(obj.endDate).format("HH:mm") }</span>
                        <span className="el-titolo">{obj.subject}</span>
                      </div>
                    )
                  })
                }
                {
                  !(nextApp.length>0) && <div className="noDisp"><span>Nessun appuntamento futuro disponibile</span></div>
                }
                </div>

              </Col>
            </Row>
          </div>
        )
      }
}

export default WidgetAgenda
