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
    },


    /* ##################### Funzioni di validazione ####################### */
    /* Validazione di un campo file */
    getFileErrors(filefields,formstate) {
        // Messaggi per i file
        let errorMsg={
            "vuoto" : "Occorre caricare un file",
            "fronte" : "Fronte documento mancante",
            "retro" : "Retro documento mancante"
        }

        // Uniforma il dato ricevuto
        if (typeof filefields === "string") {
            filefields = [filefields]
        }

        var errors =  {};
       
        filefields.forEach((v,i)=>{
            let name = v;
            if (formstate[v].length === 0) {
                //Oggetto file completamente vuoto
                errors[v] = errorMsg["vuoto"];
            }
            else
            {
                let fileObj = {}
                formstate[v].forEach((x)=>{
                    fileObj[x.tipo] = x; 
                });
                // Se non c'è "UNICA" occorre controllare che vi siano fronte e retro
                if(!fileObj["UNICA"]){
                    // Manca il fronte
                    if (!fileObj["FRONTE"]) {
                        errors[v] = errorMsg["fronte"];
                    }
                    // Manca il retro
                    if (!fileObj["RETRO"]) {
                        errors[v] = errorMsg["retro"];
                    }

                }
            }

        })
        

        return errors;

    }

}

export default Functions;