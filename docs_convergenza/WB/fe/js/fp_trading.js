/* globals $, AmCharts, createSelectRapp, console */
"use strict";

var fixLowPerc = function (dataHash, dataTot, dataArr) {
    var limit1perc = 0,
        limit2perc = 0,
        totAddedPerc = 0,
        percUnit = 1,
        val, perc,
        outputData = [];

    limit1perc = Math.floor((dataTot * percUnit) / 100);
    limit2perc = Math.floor(limit1perc * 2);

    // Controllo se ci sono fette sotto l'1%, e le aumento fino all'1%,
    // memorizzando il totale degli aumenti
    $.each(dataArr, function (index, item) {
        if (item !== null) {
            if (item <= 0) {
                dataArr[index] = 0;
            } else if (item < limit1perc) {
                totAddedPerc += (limit1perc - item);
                dataArr[index] = limit1perc;
            }
        }
    });
    if (totAddedPerc > 0) {
        // Diminuisco le fette sopra al 2%, in proporzione alla loro grandezza
        $.each(dataArr, function (index, item) {
            if (item !== null && item >= limit2perc) {
                dataArr[index] -= (totAddedPerc * item) / dataTot;
            }
        });
    }
    $.each(dataHash, function (index, item) {
        if (item.value !== null) {
            val = parseInt(item.value, 10);
            perc = formattaNumero((val * 100) / dataTot, 2, true);
            if (val > 0) {
                outputData.push({
                    "category": item.category,
                    "description": perc + '% (' + formattaNumero(moveToFloat(item.value), 2, true) + ' EUR)',
                    "value": dataArr[index].toFixed(2)
                });
            }
        }
    });
    return outputData;
};

var createChart = function (chartData) {
    AmCharts.makeChart("chartdiv", {
        "type": "pie",
        "innerRadius": "34%",
        "pullOutRadius": 0,
        "labelsEnabled": false,
        "startDuration": 0,
        "descriptionField": "description",
        "titleField": "category",
        "valueField": "value",
        "allLabels": [],
        "balloonText": "[[title]]:\n[[description]]",
        "balloon": {
            "horizontalPadding": 10,
            "verticalPadding": 8,
            "adjustBorderColor": true,
            "fontSize": 9,
            "color": '#ffffff',
            "fillColor": '#000000',
            "fillAlpha": 1,
            "borderThickness": 0,
            "borderAlpha": 0,
            "cornerRadius": 0
        },
        "titles": [],
        "marginTop": 0,
        "marginRight": 1,
        "marginBottom": 1,
        "marginLeft": 0,
        "colors": ["#6fa3de", "#c1ad9b", "#535150", "#ffd54a", "#8a9d77", "#245e80", "#7be8d1"],
        "dataProvider": chartData
    });
};

var sceltaRapportoFunc = function (option) {
    // Testo selezione: option.text
    // Valore selezione: option.value
    console.log('Hai selezionato: ' + option.text + ' (' + option.value + ')');
};

/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
$(function () {
    var outputData,
        dataArr = [],
        dataTot = 0;

    if ($('#sceltaRapporto').length) {
        createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
    }

    // Memorizzo i valori delle singole fette e calcolo il totale
    $.each(chartData, function (index, item) {
        dataArr.push(item.value);
        if (item.value !== null && item.value > 0) {
            dataTot += item.value;
        }
    });

    if (dataTot) {
        outputData = fixLowPerc(chartData, dataTot, dataArr);
        createChart(outputData);
    } else {
        $('#chartwrap').addClass('empty');
    }
});
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
