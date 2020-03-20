import React from 'react';
import numeral from 'functions/rad/numeralIt';

/* FORMATTAZIONE */

/* Restituisce un valore che rappresenta uno stato di rischio */
export function riskState(val) {
    let stato = "neutro",
        definizione = "0";
    if (val === "Y") {
        stato = "positivo";
        definizione = "Y";
    }
    if (val === "N") {
        stato = "negativo";
        definizione = "N";
    }
    return (<div className={ "indicatore " + stato } title={ definizione }/>);
}

export function formatAdeguatezza(val) {
    let stato = "neutro",
        definizione = "0";
    if (val === "Y") {
        stato = "negativo";
        definizione = "Adeguato (Y)";
    }
    if (val === "N") {
        stato = "positivo";
        definizione = "Non adeguato (N)";
    }
    return (<div className={ "indicatore " + stato } title={ definizione }/>);
}

export function formatNumber(val, dec) {
    let decimalsToAdd = "";

    // Sistema il formato in base alle variabili esplicitate
    for (let i = 0; i < dec; ++i) {
        decimalsToAdd += "0";
    }

    return numeral(val).format('0,000.' + decimalsToAdd);
}

export function textCut(text, cutchars) {
    return (text.length > cutchars) ? (text.substring(0, cutchars) + "...") : text;
}

export function formatTrend(val) {
    let trend = "void";
    if (typeof(val) === "number") {
        if (val > 0) {trend = "up";}
        if (val < 0) {trend = "down";}
        if (val === 0) {trend = "equal";}
    }
    return <div className={"icona-trend " + trend} title={formatNumber(val,2)}></div>;
}

export function dataForTable(textdata) {
    let dft = "";
    if (textdata && textdata.length === 8) {
        let dftBl = textdata.match(/.{2}/g);
        dft = <nobr>{ dftBl[3] + "-" + dftBl[2] + "-" + dftBl[0] + dftBl[1] }</nobr>
    }
    return dft;
}

export function deNull(val) {
    if (val) {
        return val;
    } else {
        return "-";
    }
}

// Rimappa i dati per le tabelle
export function remapData(data, limit) {
    /* Rimappa i dati della modale */
    let remappedData = [],
        count = 0;
    
    Object.keys(data).forEach(function (obj) {
        data[obj].forEach(function (el) {
            if (limit) {
                count += 1;
                if (count <= limit) { 
                    remappedData.push(el);
                }
            } else { 
                remappedData.push(el)
            }
        })
    });
    return remappedData;
}

// Per ogni nodo di Obj ritorna l'obj stesso con incluso un campo colore
const graphColorCycle = ["#80b65d", "#f09f58", "#fdd400", "#67b7dc", "#cd82ad", "#cc4748", "#348664", "#8c6ab2", "#7ba9a1", "#a97b7b", "#6c7f9f"];

export function attribColor(obj) {
    obj.forEach(function (node, i) {
        if (node["colore"] === "da definire") {
            node["colore"] = (graphColorCycle[i]) ? graphColorCycle[i] : "#dddddd";
        }
    });
    return (obj);
}
