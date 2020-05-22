import React, { Component } from 'react';
import "./style.scss";
import {ambiente} from "functions/genericVars";

/*

URL IFRAME MIFID: "/promotori/dashboard/goToMifidQuest"

*/

export default class extends Component {

    componentDidMount() {
        window.setMifid = function(obj){
                alert("Oggetto ricevuto: verra' mostrato in console");
                console.log("-------- OGGETTO RICEVUTO --------");
                console.log(obj);
                console.log("----- FINE OGGETTO RICEVUTO ------");
        }
     
    }

    render(){
        // Associa un src differente a seconda di dove si invoca l'iframe
        let iframeSrc = (ambiente.name==="locale")? "/_iframe_testing.htm" : "/promotori/dashboard/goToMifidQuest";

        return(
            <iframe className="iframe-resp" name="iframe_mifid" src={iframeSrc}></iframe>
        )
    }
}