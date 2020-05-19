import React, { Component } from 'react';
import {ambiente} from "functions/genericVars";
import "./style.scss";

/*

URL IFRAME MIFID: "/promotori/dashboard/goToMifidQuest"

*/

export default class extends Component {

    componentDidMount() {

       window.setMifid = function(obj){
           console.log(obj)
       }

    }

    // Associa un src differente a seconda di dove si invoca l'iframe
    render()  {
        let iframeSrc = (ambiente.name==="locale")? "/_iframe_testing.htm" : "/promotori/dashboard/goToMifidQuest";
        return(
            <iframe className="iframe-resp" name="iframe_mifid" src={iframeSrc}></iframe>
        )
    }

}