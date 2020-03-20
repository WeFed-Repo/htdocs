/* jshint strict:false */
/* globals $, AJAXCallPost, dashboardData, isMissingData, isCallFailed,
    showError, isNumber, openPopOverLayerRIA, setHasErrors, formattaNumeriInput, valutaHTML, formattaNumero,
    graficoConti1:true, graficoConti2:true, riepilogoVincoli,
    creaJsonGraficoRipartizione, resetCCCDdiventa, resetCCCDdiventaTr, resetCCDerDiventa,
    AmCharts, formattaNumOutput, aggiornaSaldiEMargini, closePopOverLayerRIA, resetConferma,
    convertDateEuroFormat, trasferimenti, readRadio, isValidDate, isFutureDate, formattaNumeriOutput,
    resetErrorDiv, andamenti, verificaDecimali, vincoli, pulisciMigliaia,
    noHolidays, getDateFromString, calcolaGuadagnoNetto, extraMoneyOnOff,
	createAJAXUrl, viewBannerRetention, resetHasErrors,
	caricaListaTRic, showResponse, addDateDay, addDateMonth, cleanCurrency, openPopUp, cgi_script,
	dashboardData, escape, convertDateIsoFormat, toggleTab,
	links, caricaListaLineeVincolate, caricaContentLV, enableButton, disableButton,	setTimerGraficoProiezioneTRic */

/* exported openConfermaTrasferimentoCD, openConfermaTrasferimentoCC, openConfermaTrasferimentoCDER, openConfermaTrasferimentoCC2,
	checkTrasferimentoObiettivo, disponiAutorizzaObiettivo, openEliminaTrasferimento,
	aggiornaValoriCP, aggiornaDataScadenzaTR, cancellaDataScadenzaTR,
	aggiornaGuadagnoLV, aggiornaGuadagnoEM, popolaTabLV, popolaTabellaTS,
	animazioneCCCDdiventaTr, animazioneCDdiventaLV,
	animazioneCCDerDiventa, animazioneCCCDdiventa, popolaSelectLineeVincolate, resetFocus, getFocus,
	popolaElencoObiettivi, toggleLVcp, openNuovaEM, initEventiDispositive,
	openEliminaLV, riduciMaxMin, aumentaMaxMin, openTrasferimentoRicorrente */

/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

/*********************/
/*  GESTIONE EVENTI  */
/*********************/

var initEventiDispositive = function () {
    /*** TRASFERIMENTI SINGOLI ***/
    $('#disponiCD1').click(function () {
        var disponiCD1 = $(this);
        if (!disponiCD1.hasClass('btn-disabled')) {
            disableButton(disponiCD1);
            disponiTrasferimentoCD(disponiCD1.attr('data-input'));
        }
    });
    $('#annullaCD1').click(function () {
        closePopOverLayerRIA('#lbConferma1');
    });

    $('#disponiCC2').click(function () {
        var disponiCC2 = $(this);
        if (!disponiCC2.hasClass('btn-disabled')) {
            disableButton(disponiCC2);
            disponiTrasferimentoCC(disponiCC2.attr('data-input'));
        }
    });
    $('#annullaCC2').click(function () {
        closePopOverLayerRIA('#lbConferma2');
    });

    $('#disponiCDER1').click(function () {
        var disponiCDER1 = $(this);
        if (!disponiCDER1.hasClass('btn-disabled')) {
            disableButton(disponiCDER1);
            disponiTrasferimentoCDER();
        }
    });
    $('#annullaCDER1').click(function () {
        closePopOverLayerRIA('#lbConferma1a');
    });

    $('#disponiCC2a').click(function () {
        var disponiCC2a = $(this);
        if (!disponiCC2a.hasClass('btn-disabled')) {
            disableButton(disponiCC2a);
            disponiTrasferimentoCC2();
        }
    });
    $('#annullaCC2a').click(function () {
        closePopOverLayerRIA('#lbConferma2a');
    });

    /*** TRASFERIMENTI PERIODICI ***/
    $('#disponi4').show().click(function () {
        var disponi4 = $(this);
        if (!disponi4.hasClass('btn-disabled')) {
            disableButton(disponi4);
            disponiTrasferimentoRicorrente();
        }
    });
    $('#annulla4').click(function () {
        closePopOverLayerRIA('#lbConferma4');
    });
    $('#disponi3').click(function () {
        var disponi3 = $(this);
        if (!disponi3.hasClass('btn-disabled')) {
            disableButton(disponi3);
            disponiEliminaTrasferimento();
        }
    });
    $('#annulla3').click(function () {
        closePopOverLayerRIA('#lbConferma3');
    });

    // Eliminazione trasferimento ricorrente
    $('#bodyTableTS').on('click', '.eliminaTrasferimento', function () {
        openEliminaTrasferimento($(this).attr('data-index'));
    });

    /*** LINEE ATTIVE ***/
    $('#disponi6').show().click(function () {
        var disponi6 = $(this);
        if (!disponi6.hasClass('btn-disabled')) {
            disableButton(disponi6);
            disponiEliminaLV();
        }
    });
    $('#annulla6').click(function () {
        closePopOverLayerRIA('#lbConferma6');
    });
    $('#parteLV').val('').on('keyup input', function () {
        checkSvincoloInput();
    });

    /*** APRI NUOVA LINEA ***/
    $('#disponi7').click(function () {
        var disponi7 = $(this);
        if (!disponi7.hasClass('btn-disabled')) {
            disableButton(disponi7);
            disponiNuovaLV();
        }
    });
    $('#annulla7').click(function () {
        closePopOverLayerRIA('#lbConferma7');
    });
    $('#boxTabLineeVincolate').on('click', '.btnLV', function () {
        var lvEl = $(this);
        openNuovaLV(lvEl.attr('data-id'), lvEl.attr('data-nonsvinc'), lvEl.attr('data-minvinc'), lvEl.attr('data-nomenonsvinc'));
    });

    /*** ETRA MONEY ***/
    $('#nuovaEM').click(function () {
        if (!$(this).hasClass('noEM')) {
            openNuovaEM();
        }
    });
};

// id trasferimento ricorrente
var idTrasferimento = '',
    tettoMassimo = 500000;


/***************************/
/*  TRASFERIMENTO SINGOLO  */
/***************************/

var checkTrasferimento = function (campoForm) {
    var errors = [],
        wrapperToCheck = campoForm.closest('.riaTrasf, .wrapDispDep');
    if (!isNumber(campoForm.val())) {
        errors.push({ field: campoForm, text: 'Compilare il campo Importo' });
    }
    setHasErrors(errors, wrapperToCheck);
    return !errors.length;
};

// Conferma Trasferimento Conto Deposito
var openConfermaTrasferimentoCD = function (idCampoForm) {
    var isOK = checkTrasferimento($(idCampoForm));
    if (isOK) {
        $('#disponiCD1').attr('data-input', idCampoForm);
        loadConfermaTrasferimentoCD();
        openPopOverLayerRIA('#lbConferma1', 'fixed');
    }
    return isOK;
};

var openConfermaTrasferimentoCC = function (idCampoForm) {
    var isOK = checkTrasferimento($(idCampoForm));
    if (isOK) {
        $('#disponiCC2').attr('data-input', idCampoForm);
        loadConfermaTrasferimentoCC();
        openPopOverLayerRIA('#lbConferma2', 'fixed');
    }
    return isOK;
};

var openConfermaTrasferimentoCDER = function () {
    var isOK = checkTrasferimento($('#importoCDER'));
    if (isOK) {
        loadConfermaTrasferimentoCDER();
        openPopOverLayerRIA('#lbConferma1a', 'fixed');
    }
    return isOK;
};

var openConfermaTrasferimentoCC2 = function () {
    var isOK = checkTrasferimento($('#importoCC2'));
    if (isOK) {
        loadConfermaTrasferimentoCC2();
        openPopOverLayerRIA('#lbConferma2a', 'fixed');
    }
    return isOK;
};

var resetAnimazioniTrasf = function () {
    var json = creaJsonGraficoRipartizione();

    if (dashboardData.tipoRapporto === 1) {
        resetCCDerDiventa();
    }

    resetCCCDdiventa();
    resetCCCDdiventaTr();

    if (dashboardData.tipoRapporto <= 2) {
        // PIE CHART 1
        graficoConti1.clear();
        graficoConti1 = AmCharts.makeChart(
            "graficoContiDiv",
            json[0]
        );

        // PIE CHART 2
        graficoConti2.clear();
        graficoConti2 = AmCharts.makeChart(
            "graficoContiDivInner",
            json[1]
        );

        // PIE CHART 1 MOBILE
        graficoConti1Mobile.clear();
        graficoConti1Mobile = AmCharts.makeChart(
            "graficoContiMobileDiv",
            json[0]
        );

        // PIE CHART 2 MOBILE
        graficoConti2Mobile.clear();
        graficoConti2Mobile = AmCharts.makeChart(
            "graficoContiMobileDivInner",
            json[1]
        );
    }

    $('#graficoContiMobileTot .money').html(formattaNumeriOutput(json[2]) + ' &euro;');
};

var resetConfermaFormTrasferimento = function (type, typeBtn) {
    enableButton($('#disponi' + typeBtn));
    $('#confermaContent' + type).show();
    $('#confermaResponse' + type).hide().find('.messageResponse').html('');
};

var resetConfermaTrasferimento = function (type) {
    switch (type) {
        case 'CD':
            resetConfermaFormTrasferimento('1', 'CD1');
            break;
        case 'CC':
            resetConfermaFormTrasferimento('2', 'CC2');
            break;
        case 'CDER':
            resetConfermaFormTrasferimento('1a', 'CDER1');
            break;
        case 'CC2':
            resetConfermaFormTrasferimento('2a', 'CC2a');
            break;
    }
};

var loadConfermaTrasferimentoCD = function () {
    var idCampoForm = $('#disponiCD1').attr('data-input'),
        data = (idCampoForm === 'importoCDversamenti') ? $('#dataCDversamenti').val() : $('#dataDisposizione').val();
    resetConfermaTrasferimento('CD');
    $('#importoDaVersareCD').html(formattaNumOutput($(idCampoForm).val()));
    $('#dataCD').html(convertDateEuroFormat(data));
};

var loadConfermaTrasferimentoCC = function () {
    var idCampoForm = $('#disponiCC2').attr('data-input'),
        data = (idCampoForm === 'importoCCversamenti') ? $('#dataCCversamenti').val() : $('#dataDisposizione').val();
    resetConfermaTrasferimento('CC');
    $('#importoDaVersareCC').html(formattaNumOutput($(idCampoForm).val()));
    $('#dataCC').html(convertDateEuroFormat(data));
};

var loadConfermaTrasferimentoCDER = function () {
    resetConfermaTrasferimento('CDER');
    $('#importoDaVersareCDER').html(formattaNumOutput($('#importoCDER').val()));
    $('#dataCDER').html(convertDateEuroFormat($('#dataDisposizione').val()));
};

var loadConfermaTrasferimentoCC2 = function () {
    resetConfermaTrasferimento('CC2');
    $('#importoDaVersareCC2').html(formattaNumOutput($('#importoCC2').val()));
    $('#dataCC2').html(convertDateEuroFormat($('#dataDisposizione').val()));
};

// Conferma Trasferimento Conto Corrente
var disponiTrasferimentoCD = function (idCampoForm) {
    var importo, data;
    importo = formattaNumeriInput($(idCampoForm).val());
    data = (idCampoForm === 'importoCDversamenti') ? $('#dataCDversamenti').val() : $('#dataDisposizione').val();
    var parameters = {
        importo: importo,
        cdebito: dashboardData.cc,
        ccredito: dashboardData.cd,
        data: data
    };
    AJAXCallPost(links.trasferimentoManuale, disponiTrasferimentoCDSuccess, disponiTrasferimentoCDFailure, parameters);
};

var disponiTrasferimentoCDSuccess = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
        resetCCCDdiventa();
    } else {
        aggiornaConti(data, false);
        aggiornaSaldiEMargini();
        resetAnimazioniTrasf();
    }
    showResponse(response, data.errore, 'confermaContent1', 'confermaResponse1');
};

var disponiTrasferimentoCDFailure = function () {
    resetCCCDdiventa();
    showResponse(false, 'Operazione non riuscita!', 'confermaContent1', 'confermaResponse1');
};

var disponiTrasferimentoCC = function (idCampoForm) {
    var importo, data;
    importo = formattaNumeriInput($(idCampoForm).val());
    data = (idCampoForm === 'importoCCversamenti') ? $('#dataCCversamenti').val() : $('#dataDisposizione').val();
    var parameters = {
        importo: importo,
        cdebito: dashboardData.cd,
        ccredito: dashboardData.cc,
        data: data
    };
    AJAXCallPost(links.trasferimentoManuale, disponiTrasferimentoCCSuccess, disponiTrasferimentoCCFailure, parameters);
};

var disponiTrasferimentoCCSuccess = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
        resetCCCDdiventa();
    } else {
        aggiornaConti(data, false);
        aggiornaSaldiEMargini();
        resetAnimazioniTrasf();
    }
    showResponse(response, data.errore, 'confermaContent2', 'confermaResponse2');
};

var disponiTrasferimentoCCFailure = function () {
    resetCCCDdiventa();
    showResponse(false, 'Operazione non riuscita!', 'confermaContent2', 'confermaResponse2');
};

var disponiTrasferimentoCDER = function () {
    disableButton($('#disponiCDER1'));
    var importo = formattaNumeriInput($('#importoCDER').val()),
        data = $('#dataDisposizione').val(),
        parameters = {
            importo: importo,
            cdebito: dashboardData.cc,
            ccredito: dashboardData.cder,
            data: data
        };
    AJAXCallPost(links.trasferimentoManuale, disponiTrasferimentoCDERSuccess, disponiTrasferimentoCDERFailure, parameters);
};

var disponiTrasferimentoCDERSuccess = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
    } else {
        aggiornaConti(data, true);
        aggiornaSaldiEMargini();
        resetAnimazioniTrasf();
    }
    showResponse(response, data.errore, 'confermaContent1a', 'confermaResponse1a');
};

var disponiTrasferimentoCDERFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent1a', 'confermaResponse1a');
};

var disponiTrasferimentoCC2 = function () {
    var importo = formattaNumeriInput($('#importoCC2').val()),
        data = $('#dataDisposizione').val();
    var parameters = {
        importo: importo,
        cdebito: dashboardData.cder,
        ccredito: dashboardData.cc,
        data: data
    };
    AJAXCallPost(links.trasferimentoManuale, disponiTrasferimentoCC2Success, disponiTrasferimentoCC2Failure, parameters);
};

var disponiTrasferimentoCC2Success = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
    } else {
        aggiornaConti(data, true);
        aggiornaSaldiEMargini();
        resetAnimazioniTrasf();
    }
    showResponse(response, data.errore, 'confermaContent2a', 'confermaResponse2a');
};

var disponiTrasferimentoCC2Failure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent2a', 'confermaResponse2a');
};

// Effetti su focus nei trasferimenti manuali
var getFocus = function (sezioneIn, sezioneOut) {
    $('#boxOut' + sezioneIn).addClass('boxGreyOut').removeClass('boxWhiteOut');
    $('#boxCont' + sezioneIn).addClass('boxGreyCont').removeClass('boxWhiteCont');
    $('#boxMain' + sezioneIn).addClass('boxGreyMain').removeClass('boxWhiteMain');

    $('#boxOut' + sezioneOut).removeClass('boxGreyOut').addClass('boxWhiteOut');
    $('#boxCont' + sezioneOut).removeClass('boxGreyCont').addClass('boxWhiteCont');
    $('#boxMain' + sezioneOut).removeClass('boxGreyMain').addClass('boxWhiteMain');
};

var resetFocus = function (sezioneOut) {
    $('#boxOut' + sezioneOut).removeClass('boxGreyOut').addClass('boxWhiteOut');
    $('#boxCont' + sezioneOut).removeClass('boxGreyCont').addClass('boxWhiteCont');
    $('#boxMain' + sezioneOut).removeClass('boxGreyMain').addClass('boxWhiteMain');
};

// animazione CC CD diventa dashboard
var animazioneCCCDdiventa = function (tipo) {
    var importoCD = $('#importoCD'),
        importoCC = $('#importoCC'),
        importoCDVal, importoCCVal,
        margineCC = Math.max(parseFloat(dashboardData.contoCorrente.margineTrasf), 0),
        margineCD = Math.max(parseFloat(dashboardData.contoDeposito.margine), 0);
    if (tipo === 'CD') {
        importoCDVal = importoCD.val();
        importoCDVal = (importoCDVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCDVal));
        if (margineCC < importoCDVal) {
            importoCD.val(margineCC.toString().replace('.', ','));
        }
    } else if (tipo === 'CC') {
        importoCCVal = importoCC.val();
        importoCCVal = (importoCCVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCCVal));
        if (margineCD < importoCCVal) {
            importoCC.val(margineCD.toString().replace('.', ','));
        }
    }
};

// animazione CC CD diventa dashboard
var animazioneCCDerDiventa = function (tipo) {
    var importoCDER = $('#importoCDER'),
        importoCC2 = $('#importoCC2'),
        importoCDERVal, importoCC2Val,
        margineCC2 = Math.max(parseFloat(dashboardData.contoCorrente.margineTrasf), 0),
        margineCDER = Math.max(parseFloat(dashboardData.contoDerivati.margine), 0);
    if (tipo === 'CDER') {
        importoCDERVal = importoCDER.val();
        importoCDERVal = (importoCDERVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCDERVal));
        if (margineCC2 < importoCDERVal) {
            importoCDER.val(margineCC2.toString().replace('.', ','));
        }
    } else if (tipo === 'CC2') {
        importoCC2Val = importoCC2.val();
        importoCC2Val = (importoCC2Val === '') ? 0 : parseFloat(formattaNumeriInput(importoCC2Val));
        if (margineCDER < importoCC2Val) {
            importoCC2.val(margineCDER.toString().replace('.', ','));
        }
    }
};

// animazione CC CD diventa trasferimenti
var animazioneCCCDdiventaTr = function (tipo) {
    var importoCDversamenti = $('#importoCDversamenti'),
        importoCCversamenti = $('#importoCCversamenti'),
        importoCDVal, importoCCVal,
        margineCC = Math.max(parseFloat(dashboardData.contoCorrente.margineTrasf), 0),
        margineCD = Math.max(parseFloat(dashboardData.contoDeposito.margine), 0),
        diventaCC = margineCC,
        diventaCD = margineCD;
    if (tipo === 'CD') {
        importoCDVal = importoCDversamenti.val();
        importoCDVal = (importoCDVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCDVal));
        if (margineCC < importoCDVal) {
            importoCDversamenti.val(margineCC.toString().replace('.', ','));
            importoCDVal = margineCC;
        }
        diventaCC = margineCC - importoCDVal;
        diventaCD = margineCD + importoCDVal;
    } else if (tipo === 'CC') {
        importoCCVal = importoCCversamenti.val();
        importoCCVal = (importoCCVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCCVal));
        if (margineCD < importoCCVal) {
            importoCCversamenti.val(margineCD.toString().replace('.', ','));
            importoCCVal = margineCD;
        }
        diventaCC = margineCC + importoCCVal;
        diventaCD = margineCD - importoCCVal;
    }
    $('.diventaCCTr').html(formattaNumOutput(diventaCC));
    $('.diventaCDTr').html(formattaNumOutput(diventaCD));
};

// animazione CC CD diventa trasferimenti
var animazioneCDdiventaLV = function () {
    var importoCDVal,
        importoCDLV = $('#importoCDLV'),
        margineCC = Math.max(parseFloat(dashboardData.contoCorrente.margineTrasf), 0),
        margineCD = Math.max(parseFloat(dashboardData.contoDeposito.margine), 0),
        diventaCD;
    importoCDVal = importoCDLV.val();
    importoCDVal = (importoCDVal === '') ? 0 : parseFloat(formattaNumeriInput(importoCDVal));
    if (margineCC < importoCDVal) {
        importoCDLV.val(margineCC.toString().replace('.', ','));
        importoCDVal = margineCC;
    }
    diventaCD = margineCD + importoCDVal;
    $('#diventaCDLV').html(formattaNumOutput(diventaCD));
};


/******************************/
/*  TRASFERIMENTO RICORRENTE  */
/******************************/

// Conferma Eliminazione trasferimento ricorrente
var openEliminaTrasferimento = function (index) {
    resetConferma(3);
    $('#disponi3').attr('data-index', index);
    loadEliminaTrasferimento();
    openPopOverLayerRIA('#lbConferma3', 'fixed');
    return false;
};

var loadEliminaTrasferimento = function () {
    var index = $('#disponi3').attr('data-index');
    $('#importoDaEliminare').html(formattaNumero(trasferimenti.lista[index][1]));
    $('#aPartireDa').html(trasferimenti.lista[index][3]);
    $('#frequenza').html(trasferimenti.lista[index][2]);
    $('#scadenza').html(trasferimenti.lista[index][4]);
};

var checkTrasfList = function () {
    $('#contentTrasf2').off('content:caricaListaTRicComplete');
    $('#contentTrasf6').off('content:caricaListaTRicComplete');
    if (!trasferimenti.lista.length) {
        resetNuovoTrasferimentoRic(true);
    }
};

var disponiEliminaTrasferimento = function () {
    var disponi3 = $('#disponi3'),
        index = disponi3.attr('data-index'),
        parameters = {
            cd: dashboardData.cd,
            id: trasferimenti.lista[index][0]
        };
    AJAXCallPost(links.eliminaTRic, disponiEliminaTrasferimentoSuccess, disponiEliminaTrasferimentoFailure, parameters);
    disableButton(disponi3);
};

var disponiEliminaTrasferimentoSuccess = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
    } else {
        $('#contentTrasf2').on('content:caricaListaTRicComplete', checkTrasfList);
        caricaListaTRic();
    }
    showResponse(response, data.errore, 'confermaContent3', 'confermaResponse3');
};

var disponiEliminaTrasferimentoFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent3', 'confermaResponse3');
};

// Conferma creazione Trasferimento Ricorrente Fondi
var openTrasferimentoRicorrente = function () {
    resetErrorDiv('errorDiv3', ['labelImportoTR', 'labelApartireDaTR', 'labelNumeroTR']);
    var $importoTRf = $('#importoTRf'),
        $aPartireDaTRf = $('#aPartireDaTRf'),
        $numeroTRf = $('#numeroTRf'),
        $ricorrentiForm = $('#ricorrentiForm'),
        importo = $importoTRf.val(),
        aPartireDa = $aPartireDaTRf.val(),
        scadenza = readRadio('ricorrentiForm', 'scadenzaTRf'),
        numero = $numeroTRf.val(),
        checkImporto = isNumber(importo) && !isZero(importo),
        checkData = (isValidDate(aPartireDa)),
        checkMinDate = (checkData && ((parsaDataConSlash(trasferimenti.primaDataDispTRic)).getTime() <= (parsaDataConSlash(aPartireDa)).getTime())),
        checkHolidays = (checkData && checkMinDate && noHolidays(getDateFromString(aPartireDa))[0]),
        checkNumero = true,
        errors = [];
    if (scadenza === 'dopo') {
        checkNumero = isNumber(numero) && parseFloat(numero) > 0;
    } else {
        numero = '0';
    }
    if (checkImporto && checkData && checkHolidays && checkNumero) {
        $numeroTRf.val(numero);
        $('#scadenzaTRfOK').val(scadenza);
        resetConferma(4);
        resetHasErrors($ricorrentiForm);
        loadTrasferimentoRicorrente();
        openPopOverLayerRIA('#lbConferma4', 'fixed');
        return false;
    } else {
        if (!checkImporto) {
            errors.push({ field: $importoTRf, text: 'Formato importo non numerico' });
        }
        if (!checkData) {
            errors.push({ field: $aPartireDaTRf, text: 'Data non valida (gg/mm/aaaa)' });
        } else if (!checkMinDate) {
            errors.push({
                field: $aPartireDaTRf,
                text: 'La data inserita non deve essere inferiore al ' + trasferimenti.primaDataDispTRic
            });
        } else if (!checkHolidays) {
            errors.push({
                field: $aPartireDaTRf,
                text: 'Non &egrave; possibile indicare la data odierna o un giorno festivo'
            });
        }
        if (!checkNumero) {
            errors.push({ field: $numeroTRf, text: 'Formato N&deg; non numerico' });
        }
    }
    setHasErrors(errors, $ricorrentiForm);
    return (!errors.length);
};

var loadTrasferimentoRicorrente = function () {
    var frequenzaTRf = $('#frequenzaTRf');
    var scadenza = $('#scadenzaTRfOK').val();
    if (scadenza === 'dopo') {
        scadenza += ' ' + $('#numeroTRf').val() + ' versamenti';
    } else {
        scadenza = 'su richiesta';
    }
    $('#importoTR').html(formattaNumOutput($('#importoTRf').val()));
    $('#aPartireDaTR').html($('#aPartireDaTRf').val());
    $('#frequenzaTR').html(frequenzaTRf.prop('options')[frequenzaTRf.prop('selectedIndex')].text);
    $('#scadenzaTR').html(scadenza);
    $('#confermaContent4').show();
};

var disponiTrasferimentoRicorrente = function () {
    var importo = $('#importoTRf').val(),
        aPartireDa = $('#aPartireDaTRf').val(),
        frequenza = $('#frequenzaTRf').val(),
        numero = $('#numeroTRf').val();
    aPartireDa = convertDateIsoFormat(aPartireDa);
    var parameters = {
        cc: dashboardData.cc,
        cd: dashboardData.cd,
        importo: formattaNumeriInput(importo),
        freq: frequenza,
        data: aPartireDa,
        numVers: numero
    };

    // caso modifica
    if (idTrasferimento !== '') parameters = {
        cc: dashboardData.cc,
        cd: dashboardData.cd,
        importo: formattaNumeriInput(importo),
        freq: frequenza,
        data: aPartireDa,
        numVers: numero,
        id: idTrasferimento
    };
    AJAXCallPost(links.trasferimentoRicorrente, disponiTrasferimentoRicorrenteSuccess, disponiTrasferimentoRicorrenteFailure, parameters);
};

var disponiTrasferimentoRicorrenteSuccess = function (data) {
    var response = true;
    if (data === null || data.errore !== "") {
        response = false;
    }
    showResponse(response, data.errore, 'confermaContent4', 'confermaResponse4');

    if (response) {
        caricaListaTRic();
        toggleTab('', 'TrasfRicorr', 1, 'slide');
    }
};

var disponiTrasferimentoRicorrenteFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent4', 'confermaResponse4');
};

// gestione trasferimenti periodici
var popolaTabellaTS = function () {
    var bodyTableTS = $('#bodyTableTS');
    bodyTableTS.empty();

    var classTR = 'b';
    var classTD = 'v';

    $.each(trasferimenti.lista, function (index, objConto) {
        var classTR2 = classTR + (index % 2 ? ' pari' : ' dispari');

        var htmlTD = '<tr class="' + classTR2 + ' bb classeFalsa">' +
            '<td class="left">' + formattaNumero(objConto[1]) + ' ' + valutaHTML + '</td>' +
            '<td class="left">' + objConto[2] + '</td>' +
            '<td class="center">' + objConto[3] + '</td>' +
            '<td class="center">' + objConto[4] + '</td>' +
            '<td class="center ' + classTR + '"><a href="javascript:" class="btn-icon eliminaTrasferimento" data-index="' + index + '"><i class="icon icon-delete_table"></i></a></td>' +
            '</tr>';

        bodyTableTS.append(htmlTD);

        if (classTR === 'b') {
            classTR = 'c';
            classTD = 'r';
        } else {
            classTR = 'b';
            classTD = 'v';
        }
    });
};

var resetNuovoTrasferimentoRic = function (tab) {
    var frequenzaTRf = $('#frequenzaTRf');

    $('#importoTRf').val('');
    $('#aPartireDaTRf').val(trasferimenti.primaDataDispTRic);
    $('#revoca')[0].checked = true;
    $('#scadenzaTRfLAB').html('');
    $('#numeroTRf').val('').attr('disabled', true).addClass('disabled');
    $('#numeroTRfDiv').hide();

    for (var i = 0; i < frequenzaTRf.prop('options').length; i++) {
        if (frequenzaTRf.prop('options')[i].value === '1m') {
            frequenzaTRf.prop('options')[i].selected = true;
        }
    }

    idTrasferimento = '';

    if (tab) toggleTab(window, 'TrasfRicorr', 2, 'slide');
};

// funzione per calcolare la data di scadenza trasferimenti ricorrenti
var cancellaDataScadenzaTR = function () {
    var aPartireDaTRf = $('#aPartireDaTRf');

    if (aPartireDaTRf.val() === 'gg/mm/aaaa') aPartireDaTRf.val('');
};

var aggiornaDataScadenzaTR = function () {
    var data = $('#aPartireDaTRf').val(),
        $numeroTRf = $('#numeroTRf'),
        $numeroTRfDiv = $('#numeroTRfDiv'),
        numeroVers = $numeroTRf.val(),
        frequenza = $('#frequenzaTRf').val(),
        $dopoN = $('#dopoN'),
        frequenzaValore = frequenza.substr(0, frequenza.length - 1),
        scarto = 0;

    if ($dopoN.is(':checked')) {
        $numeroTRf.attr('disabled', false).removeClass('disabled');
        $numeroTRfDiv.show();
    } else {
        $numeroTRf.val('').attr('disabled', true).addClass('disabled');
        resetHasErrors($numeroTRfDiv.closest('.row'));
        $numeroTRfDiv.hide();
    }

    if (isValidDate(data) && isNumber(numeroVers) && isFutureDate(data)) {
        if (parseFloat(numeroVers) > 0) {
            scarto = (parseFloat(numeroVers) - 1) * parseFloat(frequenzaValore);
        }
        if ($dopoN.checked) {
            var dataScadenza = '',
                aaaa = data.substr(6),
                mm = data.substr(3, 2),
                gg = data.substr(0, 2),
                dataDate = new Date(parseFloat(aaaa), parseFloat(mm) - 1, parseFloat(gg));
            if (frequenza.indexOf('g') !== -1) {
                dataScadenza = addDateDay(scarto, true, dataDate);
            }
            if (frequenza.indexOf('m') !== -1) {
                dataScadenza = addDateMonth(scarto, true, dataDate);
            }
            $('#scadenzaTRfLAB').html('Scadr&agrave; il <strong>' + dataScadenza + '</strong>');

        } else {
            $('#scadenzaTRfLAB').html('');
        }
    }
    controlloImportoTric();
};

var controlloImportoTric = function () {
    var importoTRf = $('#importoTRf');
    var importo = importoTRf.val();
    if (isNumber(importo)) {
        importo = parseFloat(formattaNumeriInput(importo));

        if (importo > 999999) {
            importoTRf.val(tettoMassimo);
        }

        setTimerGraficoProiezioneTRic();
    } else {
        importoTRf.val('');
    }
};


/******************/
/*  LINEE ATTIVE  */
/******************/

// Conferma Eliminazione linea vincolata
var openEliminaLV = function (index) {
    resetConferma(6);
    $('#disponi6').attr('data-index', index);
    loadEliminaLV();

    openPopOverLayerRIA('#lbConferma6', 'fixed');

    return false;
};

var loadEliminaLV = function () {
    var index = $('#disponi6').attr('data-index'),
        vincolo = riepilogoVincoli.lista[index],
        descLV6 = $('#descLV6'),
        descLV6Box = descLV6.closest('.full');

    $('#boxRetentionLV').empty().hide();

    $('#numLV6').html(vincolo[0]);
    $('#dataSLV6').html(vincolo[1]);
    $('#dataALV6').html(vincolo[7]);
    $('#valoreVincolatoLV6').html(formattaNumero(vincolo[4]));

    if (isMissingData(vincolo[8])) {
        descLV6Box.hide();
    } else {
        descLV6Box.css({ zoom: 1 }).show();
        descLV6.html(vincolo[8]);
    }

    $('#confermaContent6').show();
};

var disponiEliminaLV = function () {
    var importo = $('#parteLV').val(),
        disponi6 = $('#disponi6'),
        index = disponi6.attr('data-index');

    if (importo === '') {
        importo = riepilogoVincoli.lista[index][4];
    }

    var parameters = {
        cd: dashboardData.cd,
        id: riepilogoVincoli.lista[index][0],
        importo: formattaNumeriInput(importo),
        importoTot: riepilogoVincoli.lista[index][4],
        dataA: riepilogoVincoli.lista[index][7],
        dataS: riepilogoVincoli.lista[index][1],
        tasso: riepilogoVincoli.lista[index][2]
    };
    AJAXCallPost(links.eliminaLVinc, disponiEliminaLVSuccess, disponiEliminaLVFailure, parameters);
};

var disponiEliminaLVSuccess = function (data) {
    var response = true;

    if (isCallFailed(data)) response = false;
    else {
        aggiornaMarginiLV(data);
        caricaListaLineeVincolate(false, false);
    }

    showResponse(response, data.errore, 'confermaContent6', 'confermaResponse6');
};

var disponiEliminaLVFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent6', 'confermaResponse6');
};

var checkSvincoloInput = function () {
    // Elimino eventuali lettere
    var totVincolato = ($("#valoreInizialLV").html()?  $.trim($('#valoreInizialeLV').html()) : $.trim($('#valoreVincolatoLV6').html())),
        el = $('#parteLV');

    if (totVincolato.lastIndexOf(',') === (totVincolato.length - 3) || totVincolato.lastIndexOf('.') === (totVincolato.length - 3)) {
        totVincolato = totVincolato.substr(0, totVincolato.length - 3);
    }
    totVincolato = totVincolato.replace(/\./g, '');
    totVincolato = parseInt(totVincolato.replace(/,/g, ''), 10);
    el.val(el.val().split(',').join('.'));
    var valDaSvincolare = el.val();
    //	if (valDaSvincolare.lastIndexOf(',') === (valDaSvincolare.length - 3) || valDaSvincolare.lastIndexOf('.') === (valDaSvincolare.length - 3)  ){
    //		valDaSvincolare = valDaSvincolare.substr(0, valDaSvincolare.length - 3)
    //	}	
    //	valDaSvincolare = valDaSvincolare.replace(/\./g,'');
    //	valDaSvincolare = new Number(valDaSvincolare.replace(/,/g,''));
    if (isNaN(valDaSvincolare) || valDaSvincolare.lastIndexOf('.') > 0 || valDaSvincolare.lastIndexOf(',') > 0) {
        el.val('');
    } // el.val().truncate(valDaSvincolare.length-1, '')
    // Se e' maggiore del totale vincolato, setto = al totale vincolato
    if (valDaSvincolare > totVincolato) {
        el.val(totVincolato);
    }
};


/**********************/
/*  APRI NUOVA LINEA  */
/**********************/

// Conferma nuova linea vincolata
var openNuovaLV = function (id, isNonSvinc, minVinc, nomeNonSvinc) {
    var importoNuovaLV = $('#importoNuovaLV'),
        valore = pulisciMigliaia(importoNuovaLV.val()),
        errors = [],
        wrapperToCheck = importoNuovaLV.closest('.requiredField');
    resetLVinput();
    if (isNumber(valore)) {
        var valoreFloat = parseFloat(formattaNumeriInput(valore));

        // Non permetto che si possa vincolare un importo maggiore della disponibilita' in CD
        if (isNonSvinc && minVinc > valoreFloat) {
            errors.push({ field: importoNuovaLV, text: '' });
            setHasErrors(errors, wrapperToCheck);
            showError('errorDiv5', 'errorContent5', 'Per attivare la linea ' + nomeNonSvinc + ' l\'importo minimo &egrave; di ' + formattaNumero(minVinc) + ' ' + valutaHTML + '.', ['labelImportoNuovaLV']);
        } else {
            resetHasErrors(wrapperToCheck);
            resetConferma(7);
            $('#disponi7')
                .attr('data-id', id)
                .attr('data-valore', valore)
                .attr('data-nonsvinc', isNonSvinc)
                .attr('data-nomenonsvinc', nomeNonSvinc);
            loadNuovaLV(id, valore, isNonSvinc, nomeNonSvinc);
            openPopOverLayerRIA('#lbConferma7', 'fixed');
            return false;
        }
    } else {
        errors.push({ field: importoNuovaLV, text: '' });
        setHasErrors(errors, wrapperToCheck);
        showError('errorDiv5', 'errorContent5', 'Verifica importo', ['labelImportoNuovaLV']);
        importoNuovaLV.addClass('inputError');
    }
};

var loadNuovaLV = function () {
    var vincolo = 0,
        vincoloInd = -1,
        id = 1 * $('#disponi7').attr('data-id');
    $.each(vincoli, function (key, val) {
        vincoloInd += 1;
        if (vincoloInd === id) {
            vincolo = val;
        }
    });
    fillFormNuovaLV(vincolo);
};

var fillFormNuovaLV = function (vincolo) {
    var tasso = vincolo.std,
        disponi7 = $('#disponi7');
    if (vincolo.plus !== '0') {
        tasso = vincolo.plus;
    }
    var durata = vincolo.durataVinc,
        valore = disponi7.attr('data-valore');
    disponi7.attr('data-codice', vincolo.codice);
    disponi7.attr('data-durata', vincolo.durataVinc);
    $('#numeroLV').html(vincolo.dataa);
    $('#tassoLV').html(tasso + "%");
    $('#valoreVincolatoLV').html(formattaNumOutput(valore));
    $('#durataLV').html(durata + " mesi");
    var confermaContent7 = $('#confermaContent7').show(),
        box = confermaContent7.find('.box7:first'),
        descLVinputDiv = confermaContent7.find('.descLVinput:first'),
        descLVmess = confermaContent7.find('.descLVmess:first'),
        descLVtext = confermaContent7.find('.descLVtext:first');
    if (disponi7.attr('data-nonsvinc') === 'true') {
        descLVinputDiv.hide();
        descLVmess.hide();
        descLVtext.html(disponi7.attr('data-nomenonsvinc')).show();
        $('#inputX7').attr('disabled', 'disabled').val(disponi7.attr('data-nomenonsvinc'));
        $('#lblNonSvinc1').show();
        if (!box.hasClass('boxNS')) {
            box.addClass('boxNS');
        }
    } else {
        descLVinputDiv.show();
        descLVmess.show();
        descLVtext.hide();
        $('#inputX7').val('').removeAttr('disabled');
        $('#lblNonSvinc1').hide();
        box.removeClass('boxNS');
    }
    disponi7.show();
};

var disponiNuovaLV = function () {
    var disponi7 = $('#disponi7'),
        nome = $('#inputX7').val(),
        parameters = {
            importo: formattaNumeriInput(disponi7.attr('data-valore')),
            durata: disponi7.attr('data-durata'),
            nome: nome,
            cd: dashboardData.cd,
            codice: disponi7.attr('data-codice')
        };
    AJAXCallPost(links.creaLVinc, disponiNuovaLVSuccess, disponiNuovaLVFailure, parameters);
};

var disponiNuovaLVSuccess = function (data) {
    var response = true,
        message = '';

    if (isCallFailed(data)) {
        response = false;
        message = data.errore;
    } else {
        aggiornaMarginiLV(data);
        caricaListaLineeVincolate(false, true);
        caricaContentLV();
        azzeraGuadagnoLV('');

        if (!data.isActive) {
            message = 'Attiveremo la nuova linea vincolata il primo giorno lavorativo utile, ' +
                'dopo aver verificato la disponibilit&agrave; dell\'importo sul deposito libero.<br>' +
                'In caso di indisponibilit&agrave; dell\'importo la linea non sar&agrave; attivata.<br>' +
                'Ti informeremo via email dell\'esito dell\'operazione.';
            response = 'warning';
        } else if (data.isDescrSaved) {
            message = 'La nuova linea vincolata &egrave; stata attivata. Ti abbiamo inviato una email con il dettaglio dell\'operazione.';
        } else {
            message = 'Per motivi tecnici, non &egrave; stato possibile memorizzare il nome della linea.<br/>Riprova pi&ugrave; tardi.';
        }
    }

    showResponse(response, message, 'confermaContent7', 'confermaResponse7');
};

var disponiNuovaLVFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent7', 'confermaResponse7');
};

var resetLVinput = function () {
    resetErrorDiv('errorDiv5', ['labelImportoNuovaLV']);
    resetHasErrors($('#importoNuovaLVwrap'));
    resetHasErrors($('#boxExtraMoneyInner'));
};

var openNuovaEM = function () {
    var importoNuovaEM = $('#importoNuovaEM'),
        valore = pulisciMigliaia(importoNuovaEM.val()),
        errors = [],
        wrapperToCheck = $('#boxExtraMoneyInner');
    resetLVinput();
    if (isNumber(valore)) {
        resetHasErrors(wrapperToCheck);
        resetConferma(7);
        $('#disponi7')
            .attr('data-valore', valore)
            .attr('data-nonsvinc', false)
            .attr('data-nomenonsvinc', "");
        loadNuovaEM(99, valore);
        openPopOverLayerRIA('#lbConferma7', 'fixed');
    } else {
        errors.push({ field: importoNuovaEM, text: '' });
        setHasErrors(errors, wrapperToCheck);
    }
};

var loadNuovaEM = function () {
    var vincolo = '';
    $.each(vincoli, function (key, val) {
        if (val.isFresh === "S") {
            vincolo = val;
        }
    });
    fillFormNuovaLV(vincolo);
};

// funzione per aggiornamento saldi e margini dei conti
var aggiornaConti = function (data, trasfDer) {
    dashboardData.contoCorrente.saldo = data.contoCorrente.saldo;
    dashboardData.contoCorrente.margine = data.contoCorrente.margine;
    dashboardData.contoCorrente.margineTrasf = data.contoCorrente.margineTrasf;

    if (trasfDer) {
        dashboardData.contoDerivati = data.contoDerivati;
    } else {
        dashboardData.contoDeposito.saldo = data.contoDeposito.saldo;
        dashboardData.contoDeposito.margine = data.contoDeposito.margine;
        // Salvataggio margine CD al netto anche dei preavvisi da visualizzare nella funzione di apertura vincolo
        dashboardData.contoDeposito.margineNoPreav = data.contoDeposito.margineNoPreav;
        // alert("aggiorna conti dashboardData.contoDeposito.margineNoPreav=" + dashboardData.contoDeposito.margineNoPreav);
    }
};

var aggiornaMarginiLV = function (data) {
    dashboardData.contoCorrente.saldo = data.contoCorrente.saldo;
    dashboardData.contoCorrente.margine = data.contoCorrente.margine;
    dashboardData.contoDeposito.saldo = data.contoDeposito.saldo;
    dashboardData.contoDeposito.margine = data.contoDeposito.margine;
    dashboardData.contoDeposito.margineNoPreav = data.contoDeposito.margineNoPreav;

    var margineNoPreav = formattaNumOutput(dashboardData.contoDeposito.margineNoPreav),
        margineCDValue = parseFloat(dashboardData.contoDeposito.margine),
        margineCDValuePos = (margineCDValue < 0) ? 0 : margineCDValue;

    $('#dispTrasfEM').html(margineNoPreav);

    if (!isMissingData(data.contoDeposito.saldoFresh)) {
        extraMoneyOnOff(parseFloat(data.contoDeposito.saldoFresh));
    }

    $('#massimoImpCCLink').html(formattaNumero(margineCDValuePos));


    aggiornaSaldiEMargini();
};

// funzione popolamento tab offerte linee vincolate
var popolaTabLV = function () {
    var sectionEM = $('.sectionEM, #contentExtraMoney'),
        nonSvincText = $('#nonSvincText'),
        svincText = $('#svincText'),
        helpEM = $('#helpEM'),
        mettiPopup = false,
        boxTabLineeVincolate = $('#boxTabLineeVincolate');
    boxTabLineeVincolate.empty();
    sectionEM.hide();
    nonSvincText.hide();
    svincText.show();
    helpEM.off('click');

    var vincoliInd = -1;
    $.each(vincoli, function (key, val) {
        vincoliInd += 1;
        var div = 'offertaLV',
            barrato = '',
            barratoTesto = '',
            tasso = val.std,
            offerta = '<div class="vincolo">Vincolo<br>a <span id="mesiLV' + vincoliInd + '">' + val.durataVinc + '</span> mesi</div>',
            promozione = '',
            tasto = '',
            tassoTooltip = '',
            isBase = (val.isPlus === 'N' && val.isNonSvinc === 'N' && val.isFresh === 'N'),
            promo = '',
            html_tab,
            hasTooltip = fase,
            isNonSvinc, nomeNonSvinc, minVinc, vincTitle;

        if (val.isFresh === 'S') {
            var saldoFresh = parseFloat(val.saldoFresh);
            var linkExtraMoney = links.extraMoney + '&accountId=' + encodeURIComponent(dashboardData.cc);
            sectionEM.show();
            mettiPopup = true;

            $('#extraMoneyLink').attr('href', linkExtraMoney);
            $('#parcentualeEM').html(tasso + '<span class="percentEM">&#37;</span>');
            $('.percentualeEMtext').html(tasso);
            $('.mesiEM').html(val.durataVinc);
            $('#scadenzaEM').html(val.dataSpromo);
            // will
            extraMoneyOnOff(saldoFresh);
        } else {
            if (val.isNonSvinc === 'S') {
                isNonSvinc = true;
                nomeNonSvinc = val.nomeNonSvinc;
                minVinc = val.minVinc;
                vincTitle = val.testTooltip;
            } else {
                isNonSvinc = false;
                nomeNonSvinc = '';
                minVinc = '';
                vincTitle = '';
            }

            barrato = '<hr class="sepLV1">';
            if (val.isNonSvinc === 'S') {
                div = 'offertaPromoLV';
                promo = '<div class="promoLV"><i class="icon icon-buono_promo"></i></div>';
            } else if (val.isPlus === 'S') {
                div = 'offertaVerdeLV';
                barratoTesto = 'Anzich&egrave; <span>' + val.std + '&#37;</span>';
                barrato = '<div class="diff" id="parcentualeBarrataLV' + vincoliInd + '">' + barratoTesto + '</div>';
                tasso = val.plus;
                promozione = '<a href="' + (val.link !== null ? val.link : '#') + '" class="promozioneLV" title="' + val.testTooltip + '">&nbsp;</a>';
            }

            tasto = '<div class="vincolaLV">' + promo + '<span data-id="' + vincoliInd + '" data-nonsvinc="' + isNonSvinc + '" data-nomenonsvinc="' + nomeNonSvinc + '" data-minvinc="' + minVinc + '" class="btnLV">IMPOSTA LINEA</span></div>';

            tassoTooltip = tasso + '&#37';

            if (isBase && !isMissingData(val.testTooltip)) {
                hasTooltip = true;
                tassoTooltip = '<span class="txthelp"><span class="closeable" data-toggle="tooltip" data-title="' + val.testTooltip + '">' + tasso + '&#37;<span></span>';
            }

            html_tab = '<div id="boxLargeLV' + vincoliInd + '" class="' + div + '" title="' + vincTitle + '">' +
                '<div class="infoLV">' +
                promozione +
                offerta +
                '<div class="percentuale" id="parcentualeLV' + vincoliInd + '">' + tassoTooltip + '</div>' +
                barrato +
                '<div class="tasso">Tasso valido fino al<br><span id="scadenzaLV' + vincoliInd + '">' + val.dataSpromo + '</span></div>' +
                '<hr class="sepLV2">' +
                '<div class="interessi">Interessi netti</div>' +
                '<div class="guadagni"><span id="guadagnoLVint' + vincoliInd + '">0</span>,<span class="decimali" id="guadagnoLVdec' + vincoliInd + '">00</span> ' + valutaHTML + '</div>' +
                '</div>' +
                tasto +
                '</div>';

            boxTabLineeVincolate.append(html_tab);

            if (hasTooltip) {
                initTooltip();
            }
        }
    });

    if (sectionEM.css('display') !== 'none') {
        helpEM.click(function () {
            getEmModal(dashboardData.cd);
        });
    }

    //$('#boxTabLineeVincolate' + suffix).append('<div class="clear"></div>');
};

var aggiornaGuadagnoEM = function (idImporto) {
    var saldoEM = parseInt(formattaNumeriInput(pulisciMigliaia($('#saldoEM').html())), 10),
        max = Math.min(saldoEM, 1000000),
        valore = cleanCurrency(idImporto, max);
    $.each(vincoli, function (key, val) {
        if (val.isFresh === 'S') {
            if (valore > 0) {
                var guadagno = calcolaGuadagnoNetto(valore, val.moltiplicatore)[0];
                var guadagnoLen = guadagno.length;

                $('#guadagnoEMint').html(guadagno.substring(0, guadagnoLen - 3));
                $('#guadagnoEMdec').html(guadagno.substring(guadagnoLen, guadagnoLen - 2));
            } else {
                $('#guadagnoEMint').html('0');
                $('#guadagnoEMdec').html('00');
                $('#' + idImporto).val('');
            }
        }
    });
};

var aggiornaGuadagnoLV = function (idImporto) {
    var margineCD = parseInt(formattaNumeriInput(dashboardData.contoDeposito.margineNoPreav), 10),
        max = Math.min(margineCD, 1000000),
        valore = cleanCurrency(idImporto, max),
        indexLV = -1;
    $.each(vincoli, function (key, val) {
        ++indexLV;
        if (val.isFresh === 'N') {
            var guadagnoLVint = $('#guadagnoLVint' + indexLV), guadagno, guadagnoLen;
            if (guadagnoLVint) {
                if (valore > 0) {
                    guadagno = calcolaGuadagnoNetto(valore, val.moltiplicatore)[0];
                    guadagnoLen = guadagno.length;
                    guadagnoLVint.html(guadagno.substring(0, guadagnoLen - 3));
                    $('#guadagnoLVdec' + indexLV).html(guadagno.substring(guadagnoLen, guadagnoLen - 2));
                } else {
                    guadagnoLVint.html('0');
                    $('#guadagnoLVdec' + indexLV).html('00');
                    $('#' + idImporto).val('');
                }
            }
        }
    });
};

var azzeraGuadagnoLV = function () {
    $('#importoNuovaLV').removeClass('inputError').val('');
    $('#importoNuovaEM').removeClass('inputError').val('');
    $('#guadagnoEMint').html('0');
    $('#guadagnoEMdec').html('00');
    var vincoliInd = -1;
    if (vincoli) {
        $.each(vincoli, function () {
            vincoliInd += 1;
            var guadagnoLVint = $('#guadagnoLVint' + vincoliInd);
            if (guadagnoLVint) {
                guadagnoLVint.html('0');
                $('#guadagnoLVdec' + vincoliInd).html('00');
            }
        });
    }
};
