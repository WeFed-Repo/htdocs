import React, { PureComponent } from 'react';
import DefaultModal from 'components/parts/DefaultModal';
import {Button} from "reactstrap";
import moment from "moment";
import 'moment/locale/it';
import "./style.scss";

class ModalDetail extends PureComponent {
    render() {

        let modalParams = {
           modalTitle: this.props.params.data && <span className={this.props.params.data.tipoAppuntamento}><span className="dot"></span>{this.props.params.data.tipoAppuntamento}</span>
        }

        return (
            <DefaultModal show={this.props.params.opened} close={this.props.closeFunction} params={modalParams}>
                {
                    this.props.params.data && 
                    <div className={"modal-"+ this.props.params.data.tipoAppuntamento}>
                        <b>{this.props.params.data.subject}</b><br />
                        <div><i>Dalle { moment(new Date(this.props.params.data.startDate)).format("HH:mm") } alle { moment(new Date(this.props.params.data.endDate)).format("HH:mm") }</i></div>
                        <p>{this.props.params.data.body}</p>
                        <div className="btn-console">
                            <Button className="left delete" onClick={()=>this.props.openDeleteFunction(this.props.params.data)}>Elimina</Button>
                            <Button className="right" onClick={()=>this.props.openEditFunction(this.props.params.date,this.props.params.data)}>Modifica</Button>
                        </div>    
                    </div>
                }
            </DefaultModal>
        );
    }
}

export default ModalDetail;