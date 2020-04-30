import React, { Component } from 'react';
import "./style.scss";

export default class extends Component {

    // Url per testing remoto
    /* 
        INNESCO (login): /tiQuestionario/Innesco.htm
        POST TO: /tiQuestionario/Innesco




    */

    render()  {

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

        return(
            <>
                <form action="/tiQuestionario/pippo.php" method="post" target="iframe_mifid">
                    <input type="hidden" name="xml" value={xmlData}></input>
                    <input type="submit" value="Avvia questionario MIFID"></input>
                </form>
                <iframe className="iframe-resp" name="iframe_mifid" src="_innesco.htm"></iframe>
            </>
        )

    }

}