import React, { Component } from 'react';
import ReactDOM from "react-dom";
import "./style.scss";

/*

URL IFRAME MIFID: "/promotori/dashboard/goToMifidQuest"

*/

export default class extends Component {

    // Url per testing remoto
    /* 
        INNESCO (login): /tiQuestionario/Innesco.htm
        POST TO: /tiQuestionario/Innesco

    */

    
    /*
    componentDidMount () {

        let iframe = ReactDOM.findDOMNode(this.refs.ifr);
        
        // Definisce la funzione di post

        let postXml = ()=>{
       
            var http = new XMLHttpRequest();
            http.open('POST', '/tiQuestionario/Innesco', true);
            http.setRequestHeader('Content-type', 'text/xml');
            http.onreadystatechange = function() {
                if (http.readyState == 4) 
                    if (http.status == 200) {
                        console.log("Post XML");
                        iframe.onload = null;
                        iframe.src="index.jsp"
                        
                    } else {
                        console.log("Failed, http status " + http.status);     
                        console.log(http)
                }
            }
            let xmlData = '<?xml version="1.0" encoding="UTF-8"?>'
            + '<root>'
            + '<parametri>'
            + '<param id="1">'
            + '<paramNome>codiceFiscale</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="2">'
            + '<paramNome>intestazione</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="3">'
            + '<paramNome>dataDiNascita</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>codiceFiscale</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="5">'
            + '<paramNome>intestazione</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="6">'
            + '<paramNome>dataDiNascita</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="7">'
            + '<paramNome>PROMOTORE</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="7">'
            + '<paramNome>NDG</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="3">'
            + '<paramNome>FUORISEDE</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>CABI</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>codiceQuestionario</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>tipoOperazione</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>canale</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>tipoOfferta</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>codicePromotore</paramNome>'
            + '<paramValore>123312</paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>name</paramNome>'
            + '<paramValore>PIPPO</paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>password</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="4">'
            + '<paramNome>branch</paramNome>'
            + '<paramValore></paramValore>'
            + '</param>'
            + '<param id="7">'
            + '<paramNome>debug</paramNome>'
            + '<paramValore<>S</paramValore>'
            + '</param>'         
            + '</parametri>'
            + '</root>';
    
            http.send(xmlData);
    
        }
        
        iframe.onload = ()=>{postXml()};
        iframe.src="about:blank";
      }
      
    */

    render()  {
        
        return(
            <iframe ref="ifr" className="iframe-resp" name="iframe_mifid" src="/promotori/dashboard/goToMifidQuest"></iframe>
        )
    }

}