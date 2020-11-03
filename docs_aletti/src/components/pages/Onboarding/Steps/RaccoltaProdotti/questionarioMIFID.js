import React, { Component } from 'react';
import {ambiente} from "functions/genericVars";

export default class extends Component {

    componentDidMount() {
        let tthis = this;
        window.setMifid = function(obj){
            tthis.props.setObState({field_sessionfirmeblob_idmifid: obj.idQuestionario, questMifid: false})
        }
     }
 

    render() {

        console.log(ambiente)
     
        let iframeSrc = (ambiente.name==="locale" || ambiente.name==="librerie")? "/_iframe_testing.htm" : "/promotori/dashboard/goToMifidQuest";

        return(<div style={{position:"relative"}}>
                <button onClick={()=>window.setMifid({idQuestionario:Math.random()})} style={
                    {    fontSize: "10px",
                        borderRadius: "13px",
                        textTransform: "uppercase",
                        position: "absolute",
                        height: "25px",
                        right: "10px",
                        top: "-13px",
                        border: "0",
                        background: "#060",
                        zIndex:10,
                        color: "#fff",
                        cursor: "pointer"}
                }>Simula termine compilazione</button>
                <iframe className="iframe-resp" name="iframe_mifid" src={iframeSrc}></iframe>
            </div>
        )

    }

}