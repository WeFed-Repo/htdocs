import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal';
import {Button} from "reactstrap";
import 'moment/locale/it';
import Notify from 'functions/Notify'
import getData from 'functions/getData'
import "./style.scss";
class ModalDelete extends PureComponent {

    
    constructor(props){
        super(props);

        this.state={
            formErrors: {},
            tipoApp: "",
            isLoading: false
        };
        
    }
    
    deleteEvent() {

            var urls = {
                    "Appointment": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/deleteAppointment"},
                    "Task": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/task/deleteTask"},
                    "Meeting": {"svil": "/json_data/simpleEsitoOk.json","prod":"/promotori/dashboard/rest/appointment/deleteAppointment"}
            }

            let fPost = Object.assign({},this.props.params.data);



            
            getData({
               url: urls[fPost.tipoAppuntamento],
               method: "DELETE",
               data: { 
                   [(fPost.tipoAppuntamento==="Task")? "task" : "appointment"] : fPost 
               },
               success: data=>{
                   /* ESITO INSERIMENTO IN TOAST E CHIUSURA */
                   this.props.closeFunction();
                   if(data.esito.type ==="OK") {
                        Notify.success("Evento eliminato con successo.");
                        this.props.afterSave()
                        this.setState({
                            isLoading: false
                        })
                   }
                   else
                   {
                    Notify.error("Errore: evento non eliminato. Errore in fase di eliminazione.");
                    console.log(data);
                   }
                   
                }
            })
    
    }

    render() {

        let modalParams = {
            modalTitle: "Elimina evento"
        }

        /* Inizializzazione oggetto di base */
        let defaultAppData = {};
        
        /* Estensione dell'oggetto per integrazione eventuali dati esterni e frammentazione con dati "locali"*/
        let appData = Object.assign(defaultAppData, this.props.params.data);

       
        return (
            <DefaultModal show={this.props.params.opened} close={this.props.closeFunction} params={modalParams}>
                <div className="btn-console">
                    <p>Eliminare l'oggetto:<br />
                    <strong>{appData.tipoAppuntamento}- {appData.subject}</strong> </p>
                    <Button className="right" onClick={()=>this.deleteEvent()}>Elimina</Button>
                </div>
            </DefaultModal>
            );
        }
    }
    
    export default ModalDelete;