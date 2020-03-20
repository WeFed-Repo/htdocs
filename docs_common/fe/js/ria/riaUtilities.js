/* jshint strict:false */
/* global $, jqc, formattaNumeriInput, calcolaInteressiLV, formattaDecimali, isValidDate, isNumber,
    tettoMassimo */
/* exported pulisciMigliaia, calcolaGuadagnoNetto, readRadio, readCheckbox, hideLightBox, showError, showResponse,
    verificaDecimali, resetErrorDiv, convertDateEuroFormat, convertDateEuroFormatFromDate, addDateMonth, addDateMonth2,
    formattaData, formattaDataString, formattaTruncNumero, parsaDataConSlash, formattaMese, isError, isMissingData,
    isCallFailed, isNumberLimited, calcolaDataScadenzaTR, setMaxY, removeUniqTooltipRIA, strMeseAnno, unescapeHTMLEntities,
    resetConferma, openPopOverLayerRIA, closePopOverLayerRIA, enableButton, disableButton */
/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

// funzioni per la formattazione di input e output

// toglie il punto delle migliaia
var pulisciMigliaia = function (importo) {
    return importo.replace(/\./g, '');
};

// funzione per il calcolo del guadagno netto della linea vincolata
var calcolaGuadagnoNetto = function (importoLVInput, moltiplicatore) {
    var importoLV = parseFloat(formattaNumeriInput(importoLVInput));
    return calcolaInteressiLV(importoLV, moltiplicatore);
};

// funzione che restituisce il valore della radio selezionata
var readRadio = function (form, radios) {
    return $('#' + form + ' input[type=radio][name=' + radios + ']:checked').val();
};

// funzione che restituisce true se la check e' checkata
var readCheckbox = function (inputName) {
    return ($(jqc(inputName)).val() === 'on');
};

// Nasconde tutte le lightbox
var hideLightBox = function (className) {
    $('.riacontainer .' + className).hide();
};


// Gestione errori form
var showError = function (errorDiv, contentDiv, messages, labelsForm) {
    $('#' + errorDiv).show();
    for (var i = 0; i < labelsForm.length; i++) {
        if ($(labelsForm[i]).length) $(labelsForm[i]).addClass('errorFont');
    }
    $('#' + contentDiv).html(messages);
};

var showResponse = function (response, message, confermaContent, confermaResponse) {
    var errorHead, confirmHead;
    confermaContent = $('#' + confermaContent);
    confermaResponse = $('#' + confermaResponse);
    errorHead = confermaResponse.find('.errorHead:first').hide();
    confirmHead = confermaResponse.find('.confirmHead:first').hide();
    if (confermaContent.length) {
        confermaContent.hide();
    }
    if (!response) {
        errorHead.show();
        if (message) {
            errorHead.find('.messageResponse:first').html(message);
        }
    } else {
        confirmHead.show();
        if (message) {
            confirmHead.find('.messageResponse:first').html(message);
        }
    }
    confermaResponse.show();
};


// Controllo esistenza del carattere . o ,
var verificaDecimali = function (value) {
    // var importo = value.replace(',','.');
    var importo = value,
        pos_decimali = importo.indexOf(',');
    // alert("pos_decimali="+pos_decimali);
    return pos_decimali !== -1;
};

var resetErrorDiv = function (errorDiv, labelsForm) {
    $('#' + errorDiv).hide();
    for (var i = 0; i < labelsForm.length; i++) {
        $('#' + labelsForm[i]).removeClass('errorFont');
    }
};

// converte una data in input in una data in formato ISO aaaammgg
var isFutureDate = function (stringa) {
    var isoDate = convertDateIsoFormat(stringa);
    var now = new Date().format('yyyymmdd');
    return parseFloat(isoDate) > parseFloat(now);
};

// converte una data in input in una data in formato ISO aaaammgg
var convertDateIsoFormat = function (stringa) {
    var data = '',
        gg, mm, aaaa;
    if (stringa === 'Oggi') {
        data = getDataAttuale(true);
    } else if (stringa === 'Domani') {
        var oggi = new Date();
        data = convertDateIsoFormat(addDateDay(1, true, oggi));
    } else {
        aaaa = stringa.substr(6);
        mm = stringa.substr(3, 2);
        gg = stringa.substr(0, 2);
        data = aaaa + mm + gg;
    }
    return data;
};

// converte una data in input in una data in formato euro gg/mm/aaaa
var convertDateEuroFormat = function (stringa) {
    var data = stringa,
        gg, mm, aaaa;
    if (data.indexOf('/') < 0) {
        aaaa = stringa.substr(0, 4);
        mm = stringa.substr(4, 2);
        gg = stringa.substr(6);
        data = gg + '/' + mm + '/' + aaaa;
    }
    return data;
};

var convertDateEuroFormatFromDate = function (date) {
    var gg = date.getDate();
    if (parseFloat(gg) < 10) {
        gg = "0" + gg;
    }
    var mm = date.getMonth() + 1;
    if (parseFloat(mm) < 10) {
        mm = "0" + mm;
    }
    var aaaa = date.getFullYear();
    return gg + "/" + mm + "/" + aaaa;
};

var addDateDay = function (giorni, full, data) {
    var nextData = data.addDays(giorni);

    var gg = nextData.getDate();
    if (parseFloat(gg) < 10) {
        gg = "0" + gg;
    }
    var mm = nextData.getMonth() + 1;
    if (parseFloat(mm) < 10) {
        mm = "0" + mm;
    }
    var aaaa = nextData.getFullYear();
    if (!full) aaaa = aaaa.toString().substring(2);

    return gg + "/" + mm + "/" + aaaa;
};

var addDateMonth = function (mesi, full, data) {

    var nextData = data.addMonths(mesi);


    var gg = nextData.getDate();
    if (parseFloat(gg) < 10) {
        gg = "0" + gg;
    }
    var mm = nextData.getMonth() + 1;
    if (parseFloat(mm) < 10) {
        mm = "0" + mm;
    }
    var aaaa = nextData.getFullYear();
    if (!full) aaaa = aaaa.toString().substring(2);

    return gg + "/" + mm + "/" + aaaa;
};

/*La addDateMonth = function genera bug in "Apri nuova linea vincolata" la duplico per non influenzare altre funzioni - Paolo Tonon */

var addDateMonth2 = function (mesi, full) {

    /* var nextData = data.addMonths(mesi); */

    var nextData = new Date();
    nextData = nextData.addMonths(mesi);

    var gg = nextData.getDate();

    /* Fix per togliere un giorno alla data secondo specifiche - Paolo Moretti */
    if (gg === 1) {
        nextData = new Date(nextData.getMilliseconds() - 24 * 60 * 60 * 1000);
        gg = nextData.getDate();
    } else
        gg--;

    if (parseFloat(gg.toString()) < 10) {
        gg = "0" + gg;
    }
    var mm = nextData.getMonth() + 1;
    if (parseFloat(mm) < 10) {
        mm = "0" + mm;
    }
    var aaaa = nextData.getFullYear();
    if (!full) aaaa = aaaa.substring(2);


    return gg + "/" + mm + "/" + aaaa;
};

// Formattazione Data Attuale


var getDataAttuale = function (ajax) {
    var current_date = new Date();
    var data = new Date();
    var gg, mm, aaaa;
    var giorno_settimana = current_date.getDay();

    //* gg=0 domenica aumento di 1 giorni la data */
    if (giorno_settimana === 0) {
        data.setDate(current_date.getDate() + 1);
    }
    //* gg= 6 sabato aumento di 2 giorno la data*/
    else if (giorno_settimana === 6) {
        data.setDate(current_date.getDate() + 2);
    } else {
        data.setDate(current_date.getDate());
    }

    gg = data.getDate();
    if (parseFloat(gg) < 10) {
        gg = "0" + gg;
    } else
        gg = "" + gg;
    mm = data.getMonth() + 1;
    if (parseFloat(mm) < 10) {
        mm = "0" + mm;
    } else
        mm = "" + mm;

    aaaa = data.getFullYear();
    aaaa = "" + aaaa;

    if (!ajax) {
        return gg + "/" + mm + "/" + aaaa;
    } else {
        return aaaa + mm + gg;
    }
};

var formattaData = function (data) {
    var gg = data.getDate();
    var mm = data.getMonth() + 1;
    var aaaa = '' + data.getFullYear();

    if (parseFloat(gg) < 10) gg = '0' + gg;
    else gg = '' + gg;

    if (parseFloat(mm) < 10) mm = '0' + mm;
    else mm = '' + mm;

    return gg + '/' + mm + '/' + aaaa;
};

var formattaDataString = function (data) {
    var gg = data.substr(0, 2);
    var mm = data.substr(2, 2);
    var aaaa = data.substr(4, 4);

    return gg + '/' + mm + '/' + aaaa;
};

var formattaTruncNumero = function (nStr) {
    nStr = nStr.toString().replace(',', '.');
    nStr = Math.floor(nStr * 100) / 100;
    nStr = nStr.toString().replace('.', ',');

    return formattaDecimali(nStr, 2);
};

var parsaDataConSlash = function (stringa) {
    var data = null;

    if (!isValidDate(stringa)) return data;

    try {
        var anno = parseInt(stringa.substr(6), 10);
        var mese = parseInt(stringa.substr(3, 2), 10);
        var giorno = parseInt(stringa.substr(0, 2), 10);

        data = new Date(anno, mese - 1, giorno);
    } catch (ex) {
        data = null;
    }

    return data;
};

var formattaMese = function (data) {
    var mm = data.getMonth() + 1;

    if (parseInt(mm, 10) < 10) {
        mm = "0" + mm;
    }

    return mm.toString();
};

var isError = function (obj) {
    return ($.type(obj) === "string" && obj.substr(0, 3) === '*#*');
};

var isMissingData = function (obj) {
    return (typeof obj === 'undefined' || obj === null || ($.type(obj) === "string" && obj === '*#*ND'));
};

var isCallFailed = function (data) {
    return data === null ||
        ((typeof data.errore !== 'undefined') && (data.errore !== '')) ||
        ((typeof data.esito !== 'undefined') && (data.esito !== 'ok'));
};

var isNumberLimited = function (num) {
    return (isNumber(num) && num <= tettoMassimo);
};

var calcolaDataScadenzaTR = function () {
    var data = $('#aPartireDaTRf').val();
    var numeroVers = $('#numeroTRf').val();
    var frequenza = $('#frequenzaTRf').val();
    var frequenzaValore = frequenza.substr(0, frequenza.length - 1);
    var scarto = parseFloat(numeroVers) * parseFloat(frequenzaValore);
    var aaaa, mm, gg;

    if (isValidDate(data) && isNumber(numeroVers) && isFutureDate(data) && $('#dopoN').is(':checked')) {
        aaaa = data.substr(6);
        mm = data.substr(3, 2);
        gg = data.substr(0, 2);

        var dataScadenza = new Date(aaaa, parseFloat(mm) - 1, gg);

        if (frequenza.indexOf('g') !== -1) {
            dataScadenza = dataScadenza.addDays(scarto);
        }
        if (frequenza.indexOf('m') !== -1) {
            dataScadenza = dataScadenza.addMonths(scarto);
        }

        return dataScadenza;
    } else {
        return null;
    }
};

var setMaxY = function (value) {
    return Math.ceil(((value * 1.1) / 1000)) * 1000;
};

var strMeseAnno = function (data) {
    var mese = '';

    switch (data.getMonth() + 1) {
        case 1:
            mese = 'gennaio';
            break;
        case 2:
            mese = 'febbraio';
            break;
        case 3:
            mese = 'marzo';
            break;
        case 4:
            mese = 'aprile';
            break;
        case 5:
            mese = 'maggio';
            break;
        case 6:
            mese = 'giugno';
            break;
        case 7:
            mese = 'luglio';
            break;
        case 8:
            mese = 'agosto';
            break;
        case 9:
            mese = 'settembre';
            break;
        case 10:
            mese = 'ottobre';
            break;
        case 11:
            mese = 'novembre';
            break;
        case 12:
            mese = 'dicembre';
            break;
    }

    return mese + ' ' + data.getFullYear();
};

var unescapeHTMLEntities = function (txt) {
    var entities = txt.match(/&[^;]+;/gi);

    if (entities) {
        $.each(entities, function (index, entity) {
            var retVal = '';
            switch (entity) {
                // Lowercase
                case '&agrave;':
                    retVal = 'à';
                    break;
                case '&egrave;':
                    retVal = 'è';
                    break;
                case '&eacute;':
                    retVal = 'é';
                    break;
                case '&igrave;':
                    retVal = 'ì';
                    break;
                case '&ograve;':
                    retVal = 'ò';
                    break;
                case '&ugrave;':
                    retVal = 'ù';
                    break;
                // Uppercase
                case '&Agrave;':
                    retVal = 'À';
                    break;
                case '&Egrave;':
                    retVal = 'È';
                    break;
                case '&Eacute;':
                    retVal = 'É';
                    break;
                case '&Igrave;':
                    retVal = 'Ì';
                    break;
                case '&Ograve;':
                    retVal = 'Ò';
                    break;
                case '&Ugrave;':
                    retVal = 'Ù';
                    break;
                // Symbol
                case '&euro;':
                    retVal = '¤';
                    break;
            }
            if (retVal !== '') {
                txt = txt.replace(entity, retVal);
            }
        });
    }
    return txt;
};

var resetConfermaForm = function (type) {
    $('#confermaContent' + type).show();
    enableButton($('#disponi' + type));
    $('#confermaResponse' + type).hide().find('.messageResponse').empty();
};

// Funzione che resetta la visualizzazione dei layer per la conferma
var resetConferma = function (type) {
    switch (type) {
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
            resetConfermaForm(type);
            break;
        case 9:
            $('#confermaContent9, #linkStampaCoordinate').show();
            break;
        case 10:
            $('#confermaContent10, #linkInviaCoordinate').show();
            break;
        case 12:
        case 13:
        case "Email":
            resetConfermaForm(type);
            break;
    }
};

var openPopOverLayerRIA = function (idElement) {
    $(idElement).modal('show');
};

var closePopOverLayerRIA = function (idElement) {
    $(idElement).modal('hide');
};

var enableButton = function (button) {
    button.removeClass('btn-disabled').removeAttr('disabled');
};

var disableButton = function (button) {
    button.addClass('btn-disabled').attr('disabled', 'disabled');
};