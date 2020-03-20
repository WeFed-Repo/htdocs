/* globals $, AmCharts, createSelectRapp, console */
"use strict";

/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
$(function() {
    function sceltaRapportoFunc(option) {
        // Testo selezione: option.text
        // Valore selezione: option.value
        console.log('Hai selezionato: ' + option.text + ' (' + option.value + ')');
    }

    if ($('#sceltaRapporto').length) {
        createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
    }
});
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */

AmCharts.makeChart("chartdiv", {
    "type": "pie",
    "balloonText": "",
    "innerRadius": "34%",
    "pullOutRadius": 0,
    "labelsEnabled": false,
    "startDuration": 0,
    "titleField": "category",
    "valueField": "value",
    "allLabels": [],
    "balloon": {},
    "titles": [],
    "marginTop": 0,
    "marginRight": 1,
    "marginBottom": 1,
    "marginLeft": 0,
    "colors": ["#6fa3de", "#c1ad9b", "#535150", "#ffd54a", "#8a9d77", "#245e80", "#7be8d1"],
    "dataProvider": [{
        "category": "Azioni Italia",
        "value": 8
    }, {
        "category": "Azioni estere",
        "value": 6
    }, {
        "category": "Obbligazioni",
        "value": 2
    }, {
        "category": "Derivati",
        "value": 3
    }, {
        "category": "Covered warrant / Certificates",
        "value": 4
    }, {
        "category": "ETF",
        "value": 7
    }, {
        "category": "Marginazione",
        "value": 9
    }]
});