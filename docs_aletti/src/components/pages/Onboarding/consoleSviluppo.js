import React, { Component } from 'react';

export default class extends Component {

    render() {

        return(
            <div className="svi-cons">
                <div className={(this.props.obbligatori)? "on" : "off"} onClick={()=>this.props.setObState({svi_obbligatori: !this.props.obbligatori})}>Obbligatori</div>
                <div className={(this.props.backend)? "on" : "off"}  onClick={()=>this.props.setObState({svi_be: !this.props.backend})}>Val. backend</div>
            </div>
        )
    }
}