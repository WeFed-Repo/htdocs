import React, { Component } from 'react';
import moment from 'moment';

const Functions = {

    /* ##################### Funzioni di conversione ####################### */

    /* Converte un testo in formato GG/MM/AAAA in data */
    textToDate: (testo)=>{
        return (testo)? new Date(testo.split("/").reverse().join("-")) : null;
    },

    /* Converte una data in formato testo GG/MM/AAAA */
    dateToText: (data)=>{
        return (data)? (moment(data).format("DD/MM/YYYY")) : "";
    },

    /* Converte da timestamp a testo */
    timestampToText: (ts)=> {
        return (ts)?  Functions.dateToText(new Date(ts))  : "";
    },

    /* Converte da timestamp a testo */
    textToTimestamp: (text)=> {
        return (text)? Functions.textToDate(text).valueOf()  : "";
    }


    /* ##################### Funzioni di validazione ####################### */

}

export default Functions;