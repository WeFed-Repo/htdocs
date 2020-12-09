import React, { Component } from 'react';
import "./style.scss";

export default class extends Component {

    state = {
        debugstate: (window.localStorage["debugstate"] && window.localStorage["debugstate"] === "attivo") ? "attivo" : "disattivo"
    }

    switchDebug(){
        //attiva o disattiva il debug
        let newstate = (this.state.debugstate==="attivo")? "disattivo" : "attivo";
        window.localStorage.setItem('debugstate', newstate);
        this.setState({
            debugstate : newstate
        })
    }


    render(){

        return(
            <>
                <h2>Strumenti di debug</h2>
                <div className="debug-console">
                    <p>Stato degli strumenti di debug:</p>
                    <span className={"debugstate " + this.state.debugstate}>{this.state.debugstate}</span>
                    <button className={"debugbutton"} onClick={()=>this.switchDebug()}>{(this.state.debugstate==="attivo"? "dis":"")+"attiva"} gli strumenti di debug</button>
                </div>
            </>
        )
    }
}