/* jshint strict:false */
/* globals $, librerie, AJAXCallGet, dashboardData, isMissingData, isCallFailed, hasCarte,
    andamenti, showError, conti:true, fase:true, showRia:true,
    initEventi, initLinkStatici, initNavigazioneRIA, initRIA, formattaNumero, resetCCCDdiventa, resetCCDerDiventa,
    loadContentRia1Callback, disableButton,
    accordionContentLoaded, loadContentAccordion1Callback, loadContentAccordion2Callback,
    vincoli:true, promozioneLV:true, valutaHTML, popolaTabLV,
    loadContentAccordion3Callback, formattaNumeriOutput, pair2, formattaDataString, links, escape,
    fireEventOnContent, popolaTabellaTS, trasferimenti,
    riepilogoVincoli, toggleTab, loadContentLiquidita2Callback,
    lineeVincolateConf, dettagliMov, resetErrorDiv,
    AmCharts, isValidDate, extraMoneyOnOff,
    AJAXCallPost, arrayColori, isNumberLimited, parsaDataConSlash, isFutureDate, formattaMese, parsaDataConSlash,
    isNumberLimited, closePopOverLayerRIA, margineCCTrasfValue:true, formattaNumeriInput,
    calcolaDataScadenzaTR, loadContentAccordion4Callback,
    convertDateIsoFormat, showResponse, resetConferma, nascondiRigheMov,
    hideLoadingRigheMov, showLoadingRigheMov, openPopOverLayerRIA, azzeraGuadagnoLV */
/* exported caricaListaConti, removeEstrattiConto, filtroLV, openMovimentiConto, creaJsonGraficoRipartizione,
    disponiAggiornaDescLV,
    changeHighlighted, selectSaldoDett, selectSaldoMacro,
    setTimerGraficoProiezioneTRic, caricaDettMovimento, caricaListaLineeVincolate, caricaListaTRic,
    caricaAndamenti, caricaSingolaDataValuta, caricaDateValute, caricaContentCDER,
    caricaContentLV, caricaContentCD, caricaContentCC, caricaSessioneCarte, caricaDashboard, trasfPageType */

/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

// ********** Array per dati di configurazione **********
var arrayMesi = [
        "gen", "feb", "mar", "apr", "mag", "giu", "lug", "ago", "set", "ott", "nov", "dic"
    ],
    // Lista dettaglio saldi conti
    dettaglioSaldiConti = null,
    loadCarte = false;

/*** Chiamate AJAX ***/
var caricaListaConti = function () {
    var parameters = {};

    AJAXCallGet(links.listaConti, caricaListaContiSuccess, function (e) {
        caricaDatiFailure(e, 0);
    }, parameters);
};

var caricaDashboard = function () {
    var parameters = {};

    $('#conto1, #riamobile').addClass('loading');

    switch (dashboardData.tipoRapporto) {
        //-- Senza C/T --//
        case 1:
            parameters.cder = dashboardData.cder;
        /* falls through */
        case 2:
            parameters.cd = dashboardData.cd;
            parameters.cc = dashboardData.cc;
            break;
        case 3:
            parameters.cder = dashboardData.cder;
            parameters.cc = dashboardData.cc;
            break;
        case 4:
            parameters.dett = 2;
            parameters.cc = dashboardData.cc;
            break;

        //-- Con C/T --//
        case 5:
            parameters.cder = dashboardData.cder;
        /* falls through */
        case 6:
            parameters.ct = dashboardData.ct;
            break;
    }

    AJAXCallGet(links.situazioneContiVerona, caricaDashboardSuccess, function (e) {
        caricaDatiFailure(e, 0);
        $('#conto1, #riamobile').removeClass('loading');
    }, parameters);
};

var caricaContentCC = function (suffix, index) {
    var parameters = {
        cc: dashboardData.cc,
        dett: 1
    };

    if (dashboardData.tipoRapporto === 3) {
        parameters.dett = 2;
    }

    AJAXCallGet(links.situazioneContiVerona, function (e) {
        caricaContentCCSuccess(e, suffix, index);
    }, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

var caricaContentCD = function (suffix, index) {
    var parameters = {
        cd: dashboardData.cd,
        dett: 1
    };

    AJAXCallGet(links.situazioneContiVerona, function (e) {
        caricaContentCDSuccess(e, suffix, index);
    }, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

var caricaContentLV = function (suffix, index) {
    var parameters = {
        cd: dashboardData.cd,
        lv: "true",
        dett: 1
    };

    AJAXCallGet(links.situazioneContiVerona, function (e) {
        caricaContentLVSuccess(e, suffix, index);
    }, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

var caricaContentCDER = function (suffix, index) {
    var parameters = {
        cder: dashboardData.cder,
        dett: 1
    };

    AJAXCallGet(links.situazioneContiMilano, function (e) {
        caricaContentCDERSuccess(e, suffix, index);
    }, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

// Chiamata lista date valute
// noinspection JSUnusedGlobalSymbols
var caricaDateValute = function () {
    var parameters = {};

    AJAXCallGet(links.listaDateValute, caricaDateValuteSuccess, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

// Chiamata caricamento singola data valuta
var caricaSingolaDataValuta = function () {
    var parameters = {};

    AJAXCallGet(links.dataValuta, caricaSingolaDataValutaSuccess, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

// Chiamata andamenti medi conti
var caricaAndamenti = function (suffix, index) {
    var parameters = {
        cc: dashboardData.cc,
        cd: dashboardData.cd
    };

    AJAXCallGet(links.andamentoConti, function (e) {
        caricaAndamentiSuccess(e, suffix, index);
    }, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);
};

// Chiamata andamenti medi conti
var caricaListaTRic = function () {
    var parameters = {
        cc: dashboardData.cc,
        cd: dashboardData.cd,
        andamento: (!andamenti.contoCorrente.length || !andamenti.contoDeposito.length)
    };

    AJAXCallGet(links.listaTRic, caricaListaTRicSuccess, function (e) {
        caricaDatiFailure(e, 1);
    }, parameters);

};

var caricaListaLineeVincolate = function (tab, nuovaLV) {
    var parameters = {
        cd: dashboardData.cd
    };

    AJAXCallGet(links.listaLVinc, function (e) {
        caricaListaLineeVincolateSuccess(e, tab, nuovaLV);
    }, function (e) {
        caricaDatiFailure(e, 0);
    }, parameters);
};

var caricaDettMovimento = function (index) {
    var parameters = {
        requestIdInPage: 1337850525046,
        accountId: dashboardData.cc,
        ids: index
    };

    AJAXCallGet(links.WsMovementsDetail, function (e) {
        caricaDettMovimentoSuccess(e, index);
    }, function (e) {
        caricaDatiFailure(e, 0);
    }, parameters);
};
/*** |FINE| Chiamate AJAX ***/


/*** Callback chiamate AJAX ***/
var caricaDatiFailure = function (objWindow, num, errore) {
    num = 0;
    if (errore === undefined) errore = 'Caricamento dei dati non riuscito!';

    showError('errorDiv' + num, 'errorContent' + num, errore, []);
};

var caricaListaContiSuccess = function (data) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 0, data.errore);
        else caricaDatiFailure(window, 0);
    } else {
        var selectConti = $('#selectConti');
        var idConto = selectConti.val();
        var brHead_EMico = $('#brHead_EMico');
        $('.contoUnico').empty();
        selectConti.show();

        $('#ctnboxtable').show();

        // Memorizzo la lista dei conti
        conti = data.conti;

        dashboardData.reset();
        dashboardData.ct = conti[0].ct;
        dashboardData.cc = conti[0].cc;
        dashboardData.cd = conti[0].cd;
        dashboardData.cder = conti[0].cder;

        dashboardData.estero = !isMissingData(conti[0].cc) && idConto.substr(0, 5) === '00399';

        if (isMissingData(conti[0].carta)) dashboardData.carta = null;
        else dashboardData.carta = (conti[0].carta === "true");

        if (isMissingData(conti[0].valuta)) dashboardData.valuta = 'EUR';
        else dashboardData.valuta = conti[0].valuta;

        dashboardData.testPromo(conti[0]);

        if (dashboardData.promo || dashboardData.hasNonSvinc) {
            brHead_EMico.show();
        } else {
            brHead_EMico.hide();
        }

        dettaglioSaldiConti = {};

        for (var i = 0; i < conti.length; ++i) {
            if (!isMissingData(conti[i].ct)) dettaglioSaldiConti[conti[i].ct] = false;
            else dettaglioSaldiConti[conti[i].cc] = false;

            if (!loadCarte && isMissingData(conti[i].ct)) {
                loadCarte = true;
            }

            if (conti[i].cc === idConto || conti[i].ct === idConto) {
                dashboardData.reset();
                dashboardData.ct = conti[i].ct;
                dashboardData.cc = conti[i].cc;
                dashboardData.cd = conti[i].cd;
                dashboardData.cder = conti[i].cder;

                dashboardData.estero = !isMissingData(conti[i].cc) && idConto.substr(0, 5) === '00399';

                if (isMissingData(conti[i].carta)) dashboardData.carta = null;
                else dashboardData.carta = (conti[i].carta === "true");

                if (isMissingData(conti[i].valuta)) dashboardData.valuta = 'EUR';
                else dashboardData.valuta = conti[i].valuta;

                dashboardData.testPromo(conti[i]);

                if (dashboardData.promo || dashboardData.hasNonSvinc) {
                    brHead_EMico.show();
                } else {
                    brHead_EMico.hide();
                }
            }
        }
        dashboardData.calcolaTipoRapporto();

        // Seleziono la fase
        fase = data.fase;

        if (!data.showRia) showRia = true;
        else showRia = (data.showRia === "true");

        // Apre la RIA sul primo conto
        initEventi();
        initLinkStatici();
        initNavigazioneRIA();
        initRIA();
    }
};

var caricaDashboardSuccess = function (data) {
    $('#conto1, #riamobile').removeClass('loading');
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 0, data.errore);
        else caricaDatiFailure(window, 0);
    } else {
        dashboardData.dataDisposizione = data.dataBonifico;
        switch (dashboardData.tipoRapporto) {
            //-- Senza C/T --//
            case 1:
                dashboardData.contoDerivati = data.contoDerivati;
            /* falls through */
            case 2:
                dashboardData.contoDeposito = data.contoDeposito;
                dashboardData.contoCorrente = data.contoCorrente;
                dashboardData.lineeVincolate = data.lineeVincolate;
                // Salvataggio margine CD al netto anche dei preavvisi da visualizzare nella funzione di apertura vincolo
                dashboardData.contoDeposito.margineNoPreav = data.contoDeposito.margineNoPreav;
                var LVTot = isMissingData(data.lineeVincolate.totale) ? 'ND' : formattaNumero(data.lineeVincolate.totale);
                var nessunaLV = isMissingData(data.lineeVincolate.inScadenza),
                    interessi = nessunaLV ? '' : ((Math.round(data.lineeVincolate.inScadenza.rendimento * 1000) - Math.round(data.lineeVincolate.inScadenza.valore * 1000)) / 1000);

                // Sostituisco i dati

                $('#totaleLVSintesi').html(LVTot);
                $('#totaleLV, #totaleLVMobile').html(LVTot);
                $('#scadenzaProssimaLV, #scadenzaProssimaLVMobile').html(isMissingData(data.lineeVincolate.inScadenza) ? 'Nessuna' : data.lineeVincolate.inScadenza.data);
                $('#valoreProssimaLV, #valoreProssimaLVMobile').html(nessunaLV ? 'ND' : formattaNumero(data.lineeVincolate.inScadenza.valore));
                $('#rendimentoProssimaLV, #rendimentoProssimaLVMobile').html(nessunaLV ? 'ND' : formattaNumero(interessi));
                break;
            case 3:
                dashboardData.contoDerivati = data.contoDerivati;
                dashboardData.contoCorrente = data.contoCorrente;
                break;
            case 4:
                dashboardData.contoCorrente = {
                    iban: data.iban,
                    fido: data.fido,
                    lv: data.lv,
                    margine: data.margine,
                    saldo: data.saldo,
                    dataMargine: data.dataMargine,
                    custodiaTitoli: data.custodiaTitoli
                };
                dashboardData.colUtente = data.colUtente ? data.colUtente : null;
                dashboardData.colConto = data.colConto ? data.colConto : null;
                break;
            //-- Con C/T --//
            case 5:
                dashboardData.contoDerivati = data.contoDerivati;
            /* falls through */
            case 6:
                dashboardData.contoTecnico = data.contoTecnico;
            /* falls through */
            case 7:
                dashboardData.contoCorrente = {
                    fido: data.fido,
                    lv: data.lv,
                    margine: data.margine,
                    saldo: data.saldo,
                    dataMargine: data.dataMargine,
                    intestatario: data.intestatario,
                    numero: data.numero,
                    iban: data.iban,
                    testo: data.testo,
                    custodiaTitoli: data.custodiaTitoli
                };
                dashboardData.colUtente = data.colUtente ? data.colUtente : null;
                dashboardData.colConto = data.colConto ? data.colConto : null;
                break;
        }

        if (!isMissingData(dashboardData.contoCorrente)) {
            if (!isMissingData(dashboardData.contoCorrente.fido) && parseFloat(dashboardData.contoCorrente.fido) > 0) {
                $('#fidoCCDiv, #fidoCCDivMobile, #fidoCCIco').show();
                $('.legFido').show();
            } else {
                $('#fidoCCDiv, #fidoCCDivMobile, #fidoCCIco').hide();
                $('.legFido').hide();
            }
        }

        if (!isMissingData(dashboardData.contoDeposito)) {
            if (dashboardData.lineeVincolate.totale) {
                $('.legLinee').show();
            } else {
                $('.legLinee').hide();
            }
        }

        // Sostituisco i dati
        aggiornaSaldiEMargini();
        if (dashboardData.tipoRapporto === 3 || dashboardData.tipoRapporto === 4 || dashboardData.tipoRapporto === 7) {
            scriviDettagliCC(data, 'Ria', 1);
        }
        var tabRia3 = $('#tabRia3');
        if (dashboardData.tipoRapporto < 5) { // Webank con conto deposito
            $('#ibanCCEst, #ibanCCEstMobile').html(dashboardData.contoCorrente.iban);
            $('#showIban, #showIbanMobile').show();
        } else {
            $('#showIban, #showIbanMobile').hide();
        }
        if (dashboardData.tipoRapporto <= 2) {
            resetCCCDdiventa();
        }
        if (dashboardData.tipoRapporto === 1) {
            resetCCDerDiventa();
        }
        if (tabRia3.length) {
            if (dashboardData.tipoRapporto <= 2) {
                tabRia3.show();
            } else {
                tabRia3.hide();
            }
        }
        // Apre la RIA sulla prima tab
        loadContentRia1Callback();
    }
};

var caricaContentCCSuccess = function (data, suffix, index) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        if (dashboardData.tipoRapporto === 3) {
            dashboardData.contoCorrente = {
                fido: data.fido,
                margine: data.margine,
                saldo: data.saldo,
                dataMargine: data.dataMargine,
                custodiaTitoli: data.custodiaTitoli
            };
        }
        scriviDettagliCC(data, suffix, index);
    }
};

var scriviDettagliCC = function (data, suffix, index) {
    // Sostituisco i dati	
    if (!isMissingData(dashboardData.contoCorrente.fido)) {
        $('#fidoCC').html(formattaNumero(dashboardData.contoCorrente.fido));
    }
    $('#intestazioneCC, #intestazioneCCMobile').html(data.intestatario);
    $('#numeroCC').html(data.numero);
    $('#ibanCC').html(data.iban);
    if (dashboardData.tipoRapporto === 3 || dashboardData.tipoRapporto === 4) { // C/C o C/C +DER
        $('#CCdataT0').html(dashboardData.contoCorrente.dataMargine);
    }
    // Apre il primo l'item dell'accordion
    accordionContentLoaded.contentCC = true;
    loadContentAccordion1Callback(suffix, index);
};

var caricaContentCDSuccess = function (data, suffix, index) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        // Sostituisco i dati
        $('#intestazioneCD, #intestazioneCDMobile').html(data.intestatario);
        //$('#ibanCD').html(data.iban);
        $('#guadagnoNettoCD, #guadagnoNettoCDMobile').html(formattaNumero(data.guadagnoNetto));

        var hashTassiKeys = [],
            hashTassiLength = 0,
            tassoCD;
        $.each(data.tassi, function (key) {
            hashTassiLength += 1;
            hashTassiKeys.push(key);
        });
        tassoCD = Math.floor(parseFloat(hashTassiKeys[0].replace(',', '.')) * 100) / 100;
        $('#numeroCD, #numeroCDMobile').html(data.numero);
        $('#condizioniCD').html(data.testo);
        $('#tassoCD, #tassoCDMobile').html(tassoCD.toFixed(2).replace('.', ',') + '&#37');

        // Apre il secondo l'item dell'accordion
        accordionContentLoaded.contentCD = true;
        loadContentAccordion2Callback(suffix, index);
    }
};

var caricaContentLVSuccess = function (data, suffix, index) {
    var boxLV, indice = 1;

    while ((boxLV = $('#boxLV' + indice)).length) {
        boxLV.hide();
        indice++;
    }

    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        var nessunaLV = isMissingData(data.inScadenza),
            interessi = nessunaLV ? '' : ((Math.round(data.inScadenza.rendimento * 1000) - Math.round(data.inScadenza.valore * 1000)) / 1000);

        vincoli = data.vincoli;

        $('#scadenzaProssimaLVMobile').closest('.value').find('.valuta').empty();

        // Sostituisco i dati
        if (nessunaLV) {
            $('#scadenzaProssimaLV, #scadenzaProssimaLVMobile').html('Nessuna');
            $('#valoreProssimaLV').html('ND').closest('.saldoVal').find('.valuta').empty();
            $('#valoreProssimaLVMobile').html('ND').closest('.value').find('.valuta').empty();
            $('#rendimentoProssimaLV').html('ND').closest('.saldoVal').find('.valuta').empty();
            $('#rendimentoProssimaLVMobile').html('ND').closest('.value').find('.valuta').empty();
        } else {
            $('#scadenzaProssimaLV, #scadenzaProssimaLVMobile').html(data.inScadenza.data);
            $('#valoreProssimaLV').html(formattaNumero(data.inScadenza.valore)).closest('.saldoVal').find('.valuta').html('&euro;');
            $('#valoreProssimaLVMobile').html(formattaNumero(data.inScadenza.valore)).closest('.value').find('.valuta').html('&euro;');
            $('#rendimentoProssimaLV').html(formattaNumero(interessi)).closest('.saldoVal').find('.valuta').html('&euro;');
            $('#rendimentoProssimaLVMobile').html(formattaNumero(interessi)).closest('.value').find('.valuta').html('&euro;');
        }

        // Link alle linee vincolate
        $('#linkVediTutteLV').show();
        $('#altTextVediTutteLV').hide();

        var indBase = 1, indPromo = 5;

        $('#infoRichieste3 .Tasso:first').className = 'Tasso';

        var numNS = 0, numLV = 0;

        if (dashboardData.hasNonSvinc) {
            var hasNonSvinc = false;
            // Gestione LNS ed EM
            $.each(data.vincoli, function (key, val) {
                if (val.isNonSvinc === 'S') {
                    hasNonSvinc = true;
                    return false;
                }
            });
            dashboardData.hasNonSvinc = hasNonSvinc;
        }

        if (dashboardData.promo || dashboardData.hasNonSvinc) {
            $('#brHead_EMico').show();
        } else {
            $('#brHead_EMico').hide();
        }

        $.each(data.vincoli, function (key, val) {
            if (numNS > 1 && val.isFresh === 'S') return;
            else numLV += 1;

            if (numLV <= 6) {
                var indexLV, boxLV;

                if (val.isNonSvinc !== 'S' || val.isFresh !== 'S') {
                    indexLV = indBase++;
                } else {
                    indPromo++;
                    indexLV = val.isNonSvinc === 'S' ? 5 : 6;
                }

                boxLV = $('#boxLV' + indexLV);

                if (!boxLV) return;

                boxLV.show();
                boxLV.attr('title', '');

                var testoTassoLordo = $('#testoTassoLordo' + indexLV),
                    tassoMesi = $('#tassoMesi' + indexLV),
                    testoTassoB = $('#testoTassoB' + indexLV),
                    tassoB = $('#tassoB' + indexLV),
                    promozioneLV = $('#promozioneLV' + indexLV);

                boxLV.attr('href', 'javascript:').click(function () {
                    return false;
                });
                boxLV.unbind('click');
                promozioneLV.hide();

                tassoMesi.html(val.durataVinc);

                testoTassoLordo.show();
                testoTassoB.show();

                // LV Base
                if (val.isPlus !== 'S' && val.isNonSvinc !== 'S' && val.isFresh !== 'S') {
                    tassoB.html(val.std);

                    // Tasso standard
                    testoTassoLordo.removeClass('green');

                    boxLV.removeClass('boxTassoBox2').removeClass('boxTassoEM').removeClass('boxTassoPromo').removeClass('EMoff');

                    if (!boxLV.hasClass('boxTassoBox1')) {
                        boxLV.addClass('boxTassoBox1');
                    }
                } else if (val.isPlus === 'S') { // LV Plus
                    boxLV.attr('href', (!isMissingData(val.link) ? val.link : '#')).click(function () {
                        return false;
                    });
                    promozioneLV.show();

                    if (val.isNonSvinc !== 'S') tassoB.html(val.plus);
                    else tassoB.html(pair2.value.std);

                    // Tasso plus
                    if (!testoTassoLordo.hasClass('green')) testoTassoLordo.addClass('green');

                    boxLV.removeClass('boxTassoBox1').removeClass('boxTassoEM').removeClass('boxTassoPromo').removeClass('EMoff');

                    if (!boxLV.hasClass('boxTassoBox2')) {
                        boxLV.addClass('boxTassoBox2');
                    }
                } else if (val.isFresh === 'S') { // LV ExtraMoney
                    var saldoFresh = parseFloat(val.saldoFresh);

                    // Versione alternativa
                    boxLV.attr('href', links.extraMoney + '&accountId=' + encodeURIComponent(dashboardData.cc));
                    promozioneLV.show();

                    tassoB.html(val.std);

                    // Tasso plus
                    if (!testoTassoLordo.hasClass('green')) testoTassoLordo.addClass('green');

                    if (!boxLV.hasClass('boxTassoEM')) boxLV.addClass('boxTassoEM');

                    extraMoneyOnOff(saldoFresh);
                } else { // LV Promo (nonSvinc)
                    boxLV.attr('title', val.testTooltip);

                    tassoB.html(val.std);

                    // testoTassoLordo.hide();
                    // testoTassoB.hide();

                    boxLV.removeClass('boxTassoEM').removeClass('EMoff').addClass('boxTassoPromo');
                }
            }
        });

        var casoLV = (indPromo > 6) ? '' : (indPromo === 6) ? 'casoB' : (indBase > 4) ? 'casoC' : 'casoD';

        $('#infoRichieste3').find('.Tasso:first').removeClass('casoB').removeClass('casoC').removeClass('casoD')
            .addClass(casoLV);

        // Popolo la tab linee vincolate
        popolaTabLV();

        if (typeof suffix !== 'undefined') {
            // Apre il terzo item dell'accordion
            accordionContentLoaded.contentLV = true;
            loadContentAccordion3Callback(suffix, index);
        }
    }
};

var caricaContentCDERSuccess = function (data, suffix, index) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        var profitLossCDVValue = isMissingData(data.profitLoss) ? 0 : data.profitLoss;
        var guadagnoNettoCDVValue = isMissingData(data.margineImpegnato) ? 0 : data.margineImpegnato;

        // Sostituisco i dati
        $('.profitLossCDV').html(formattaNumero(profitLossCDVValue));
        $('.guadagnoNettoCDV').html(formattaNumero(guadagnoNettoCDVValue));

        // Apre il secondo l'item dell'accordion
        accordionContentLoaded.contentCDER = true;
        loadContentAccordion4Callback(suffix, index);
    }
};

// Callback carica date valute
var caricaDateValuteSuccess = function (data) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 0, data.errore);
        else caricaDatiFailure(window, 0);
    } else {
        var selectDateCC = $('#dataCCversamenti');
        var selectDateCD = $('#dataCDversamenti');

        selectDateCC.find('option').remove();
        selectDateCD.find('option').remove();

        // Aggiungo le nuove option
        $.each(data.lista, function (key, val) {
            selectDateCC.prop('options')[selectDateCC.prop('options').length] = new Option(val.nome, key);
            selectDateCD.prop('options')[selectDateCD.prop('options').length] = new Option(val.nome, key);
            if (val.selected === 'true') {
                selectDateCC.prop('options')[selectDateCC.prop('options').length - 1].selected = true;
                selectDateCD.prop('options')[selectDateCD.prop('options').length - 1].selected = true;
            }
        });
    }
};

// Carica singola data valuta
var caricaSingolaDataValutaSuccess = function (data) {
    var selectDateCC, selectDateCD;

    if (isCallFailed(data)) {
        if (data.errore !== '') {
            caricaDatiFailure(window, 0, data.errore);
        } else {
            caricaDatiFailure(window, 0);
        }
    } else {
        selectDateCC = $('#dataCCversamenti');
        selectDateCD = $('#dataCDversamenti');

        if (data.data !== '') {
            selectDateCC.val(data.data);
            selectDateCD.val(data.data);
        }

    }
};

// Callback carica andamenti medi conti
var caricaAndamentiSuccess = function (data, suffix, index) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        andamenti.contoCorrente = data.contoCorrente;
        andamenti.contoDeposito = data.contoDeposito;

        loadContentLiquidita2Callback(suffix, index);
    }
};

var caricaListaTRicSuccess = function (data) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 0, data.errore);
        else caricaDatiFailure(window, 0);
    } else {
        trasferimenti.lista = (data.lista);
        trasferimenti.frequenze = data.frequenze;
        trasferimenti.primaDataDispTRic = data.primaDataDispTRic;

        $("#aPartireDaTRf").datepicker({
            minDate: parsaDataConSlash(trasferimenti.primaDataDispTRic),
            showOtherMonths: true,
            showOn: "button",
            prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
            buttonImage: "/WB/fe/img/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShow: renderPickDateMobile, // funzione per far si che si apra come overlayer su mobile
            onClose: function () {
                $('#datePickerWrapper').modal('hide');
            }
        }).mask("99/99/9999");
        appendDatePickerIcon('aPartireDaTRf');

        andamenti.contoCorrente = (data.contoCorrente) ? data.contoCorrente : {};
        andamenti.contoDeposito = (data.contoDeposito) ? data.contoDeposito : {};

        $('#errorDiv3').hide();
        if (!trasferimenti.lista.length) {
            $('#nuovoTrasf').hide();
            toggleTab('', 'TrasfRicorr', 2, '');
        } else if (trasferimenti.lista.length < 5) {
            $('#nuovoTrasf').show();
            toggleTab('', 'TrasfRicorr', 1, '');
        } else {
            showError('errorDiv3', 'errorContent3', '&Egrave; stato raggiunto il numero massimo di trasferimenti periodici impostati, non &egrave; possibile aggiungerne altri.', []);
            $('#nuovoTrasf').hide();
            toggleTab('', 'TrasfRicorr', 1, '');
        }

        popolaTabellaTS();
        popolaSelectFrequenzaTr('frequenzaTRf', data);

        fireEventOnContent('caricaListaTRicComplete', 'Trasf', 2);
        fireEventOnContent('caricaListaTRicComplete', 'Trasf', 6);
    }
};

var popolaSelectFrequenzaTr = function (selectID, data) {
    var selectFrequenze = $('#' + selectID);

    // Svuoto la 
    selectFrequenze.find('option').remove();

    // Aggiungo le nuove option
    $.each(data.frequenze, function (key, val) {
        selectFrequenze.prop('options')[selectFrequenze.prop('options').length] = new Option(val, key);

        var lastOption = selectFrequenze.prop('options')[selectFrequenze.prop('options').length - 1];

        if (lastOption.value === '1m') lastOption.selected = true;
    });
};

var caricaListaLineeVincolateSuccess = function (data, tab, nuovaLV) {
    if (isCallFailed(data)) {
        if (data.errore !== '') caricaDatiFailure(window, 1, data.errore);
        else caricaDatiFailure(window, 1);
    } else {
        riepilogoVincoli.lista = (data.lista) ? data.lista : {};

        if (lineeVincolateConf.indexTab === null) lineeVincolateConf.indexTab = 1;

        popolaSelectRiepilogoLineeVincolate();
        inizializzaTabLV();

        if (tab) toggleTab(window, 'Ria', 3, 'slide');

        if (nuovaLV) toggleTab(window, 'Vinc', 1, 'slide');
    }
};

var caricaDettMovimentoSuccess = function (data, index) {
    var el = $('#popUpMovimenti2 .vedidett a').eq(index);
    var div = el.closest('.left').find('.dettaglio:first');
    var contoSelezionato = encodeURIComponent($('#selectConti').val());
    var dettText = data.descExt[0].descE;

    dettagliMov[contoSelezionato + index] = dettText;

    if (data.info.esito.toUpperCase() === 'OK') {
        div.html(dettText).show();
    }
};
/*** |FINE| Callback chiamate AJAX ***/


/*** Timer ***/
var timerGraficoProiezioneTRic = null;

var setTimerGraficoProiezioneTRic = function (timeout) {
    timeout = (typeof timeout === 'undefined') ? 700 : timeout;
    clearTimeout(timerGraficoProiezioneTRic);
    timerGraficoProiezioneTRic = setTimeout(function () {
        creaGraficoProiezioneTRic();
    }, timeout);
};
/*** |FINE| Timer ***/


/*** Crea Grafici ***/
var creaGraficoProiezioneTRic = function () {
    $('#graficoProiezioneTRicDiv').empty();

    AmCharts.makeChart("graficoProiezioneTRicDiv",
        {
            "type": "serial",
            "categoryField": "category",
            "marginRight": 0,
            "marginBottom": 15,
            "colors": [
                "#4990E2",
                "#8CC2FF"
            ],
            "numberFormatter": {
                "decimalSeparator": ',',
                "thousandsSeparator": '.'
            },
            "sequencedAnimation": false,
            "color": "#999999",
            "theme": "default",
            "categoryAxis": {
                "autoRotateAngle": 0,
                "gridPosition": "start",
                "tickPosition": "start",
                "autoGridCount": false,
                "axisColor": "#E3E3E3",
                "gridAlpha": 1,
                "gridColor": "#E3E3E3",
                "gridCount": 1,
                "ignoreAxisWidth": true,
                "labelsEnabled": false,
                "tickLength": 0
            },
            "trendLines": [],
            "graphs": [
                {
                    "accessibleLabel": "[[category]]",
                    "balloonText": "[[balloonBase]]",
                    "connect": false,
                    "fillAlphas": 1,
                    "fillColors": "",
                    "id": "Deposito",
                    "lineThickness": 0,
                    "showBalloon": true,
                    "title": "graph 1",
                    "type": "column",
                    "valueField": "base"
                },
                {
                    "accessibleLabel": "[[category]]",
                    "balloonText": "[[balloonDiff]]",
                    "bulletBorderThickness": 0,
                    "bulletSize": 0,
                    "color": "#999999",
                    "fillAlphas": 1,
                    "fillColors": "",
                    "fontSize": 11,
                    "id": "Incremento",
                    "labelAnchor": "middle",
                    "labelOffset": -35,
                    "labelPosition": "bottom",
                    "labelText": "[[category]]",
                    "lineThickness": 0,
                    "showAllValueLabels": true,
                    "showBalloon": true,
                    "type": "column",
                    "valueField": "diff"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "Euro",
                    "precision": 0,
                    "radarCategoriesEnabled": false,
                    "stackType": "regular",
                    "unit": " EUR",
                    "autoGridCount": false,
                    "axisColor": "#E3E3E3",
                    "fillColor": "#999999",
                    "fontSize": 11,
                    "gridAlpha": 1,
                    "gridColor": "#E3E3E3",
                    "labelFrequency": 4,
                    "title": ""
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": creaJsonGraficoProiezioneTRic()
        }
    );
};
/*** |FINE| Crea Grafici ***/

/*** JSON grafici ***/
var creaJsonGraficoProiezioneTRic = function () {
    var aPartireDa = $('#aPartireDaTRf').val(),
        dataInizio = null,
        totaleMesi = parseFloat(dashboardData.contoDeposito.margine),
        datiMesi = {},
        incrMesi = {},
        catMesi = {},
        balMesi = {},
        jsonStr = [];

    if (isValidDate(aPartireDa) && isFutureDate(aPartireDa)) {
        var aaaa = aPartireDa.substr(6),
            mm = aPartireDa.substr(3, 2),
            gg = aPartireDa.substr(0, 2);

        dataInizio = new Date(parseInt(aaaa, 10), parseInt(mm, 10) - 1, parseInt(gg, 10));
    } else {
        dataInizio = new Date();
        dataInizio.setZeroHour();
    }

    var inizioRange = new Date(dataInizio.getFullYear(), dataInizio.getMonth(), dataInizio.getDate()),
        meseFuoriRange = new Date(dataInizio.getFullYear(), dataInizio.getMonth(), dataInizio.getDate()),
        meseCurr = new Date(dataInizio.getFullYear(), dataInizio.getMonth(), dataInizio.getDate());

    // Fissa il range
    meseFuoriRange = meseFuoriRange.addMonths(12);
    meseFuoriRange.setDate(1);
    meseFuoriRange.setZeroHour();
    inizioRange.setDate(1);
    inizioRange.setZeroHour();

    for (var meseInd = 0; meseInd < 12; ++meseInd) {
        if (meseInd !== 0) meseCurr = meseCurr.addMonths(1);

        var mese = formattaMese(meseCurr),
            anno = meseCurr.getFullYear().toString(),
            anno2 = anno.substring(2),
            meseStr = arrayMesi[meseCurr.getMonth()];
        meseStr = meseStr.substr(0, 1).toUpperCase() + meseStr.substr(1);

        datiMesi[mese + '-' + anno2] = 0;
        incrMesi[mese + '-' + anno2] = 0;
        catMesi[mese + '-' + anno2] = meseStr + " " + anno2;
        balMesi[mese + '-' + anno2] = meseStr + " " + anno;
    }

    $.each(riepilogoVincoli.lista, function (index, item) {
        var dataVincolo = parsaDataConSlash(item[1]);

        if (dataVincolo >= inizioRange && dataVincolo < meseFuoriRange) {
            var valoreVincolo = parseFloat(item[5].replace(/,/, "."));
            var meseAnnoVincolo = formattaMese(dataVincolo) + '-' + dataVincolo.getFullYear().toString().substring(2);

            datiMesi[meseAnnoVincolo] += valoreVincolo;
        }
    });

    var importo = $('#importoTRf').val();
    importo = (importo === '') ? '0' : formattaNumeriInput(importo);
    if (isNumberLimited(importo)) {
        var frequenza = $('#frequenzaTRf').val(),
            dataScadenza = calcolaDataScadenzaTR(),
            frequenzaValore = parseInt(frequenza.substr(0, frequenza.length - 1), 10),
            frequenzaUM = (frequenza.indexOf('g') !== -1) ? 'g' : 'm',
            dataVersamento = new Date(dataInizio.getFullYear(), dataInizio.getMonth(), dataInizio.getDate());

        importo = parseFloat(importo);

        if (dataScadenza === null) dataScadenza = new Date(meseFuoriRange.getFullYear(), meseFuoriRange.getMonth(), meseFuoriRange.getDate());

        var meseVersamento = dataVersamento.getMonth(),
            annoVersamento = dataVersamento.getFullYear(),
            meseAnnoVersamento = formattaMese(dataVersamento) + '-' + dataVersamento.getFullYear().toString().substring(2);

        while (dataVersamento < dataScadenza) {
            if (dataVersamento.getMonth() !== meseVersamento || dataVersamento.getFullYear() !== annoVersamento) {
                meseVersamento = dataVersamento.getMonth();
                annoVersamento = dataVersamento.getFullYear();
                meseAnnoVersamento = formattaMese(dataVersamento) + '-' + dataVersamento.getFullYear().toString().substring(2);
            }

            incrMesi[meseAnnoVersamento] += importo;

            if (frequenzaUM === 'm') dataVersamento = dataVersamento.addMonths(frequenzaValore);
            else dataVersamento = dataVersamento.addDays(frequenzaValore);
        }
    }

    $.each(trasferimenti.lista, function (ind, trasferimento) {
        var frequenza = null,
            importo = parseFloat(trasferimento[1]),
            dataInizioTR = parsaDataConSlash(trasferimento[3]),
            dataScadenzaTR = null,
            numTrasfTR = trasferimento[5],
            frequenzaValore, frequenzaUM;
        if (dataInizioTR === null || dataInizioTR < dataInizio) {
            dataInizioTR = new Date(dataInizio.getFullYear(), dataInizio.getMonth(), dataInizio.getDate());
        }
        $.each(trasferimenti.frequenze, function (key, val) {
            if (val === trasferimento[2]) {
                frequenza = key;
            }
        });
        if (numTrasfTR !== 0) {
            dataScadenzaTR = parsaDataConSlash(trasferimento[4]);
        } else {
            dataScadenzaTR = new Date(meseFuoriRange.getFullYear(), meseFuoriRange.getMonth(), meseFuoriRange.getDate());
        }
        if (frequenza !== null) {
            frequenzaValore = parseInt(frequenza.substr(0, frequenza.length - 1), 10);
            frequenzaUM = (frequenza.indexOf('g') !== -1) ? 'g' : 'm';

            var dataVersamento = new Date(dataInizioTR.getFullYear(), dataInizioTR.getMonth(), dataInizioTR.getDate()),
                meseVersamento = dataVersamento.getMonth(),
                annoVersamento = dataVersamento.getFullYear(),
                meseAnnoVersamento = formattaMese(dataVersamento) + '-' + dataVersamento.getFullYear().toString().substring(2);
            while (dataVersamento < dataScadenzaTR) {
                if (dataVersamento.getMonth() !== meseVersamento || dataVersamento.getFullYear() !== annoVersamento) {
                    meseVersamento = dataVersamento.getMonth();
                    annoVersamento = dataVersamento.getFullYear();
                    meseAnnoVersamento = formattaMese(dataVersamento) + '-' + dataVersamento.getFullYear().toString().substring(2);
                }
                datiMesi[meseAnnoVersamento] += importo;
                if (frequenzaUM === 'm') {
                    dataVersamento = dataVersamento.addMonths(frequenzaValore);
                } else {
                    dataVersamento = dataVersamento.addDays(frequenzaValore);
                }
            }
        }
    });
    $.each(datiMesi, function (key, val) {
        var totBase = totaleMesi + val;
        jsonStr.push({
            "base": totBase,
            "diff": incrMesi[key],
            "category": catMesi[key].replace(' ', '\n'),
            "balloonBase": formattaNumeriOutput(totBase) + ' € - ' + balMesi[key],
            "balloonDiff": formattaNumeriOutput(incrMesi[key]) + ' € - ' + balMesi[key]
        });
        totaleMesi += val + incrMesi[key];
    });
    return jsonStr;
};

var creaJsonGraficoRipartizione = function () {
    var margineCT = 0,
        margineCC = 0,
        margineCCPos = 0,
        fidoValue = 0,
        margineCD = 0,
        lineeVincolate = 0,
        risparmio = 0,
        margineCDER = 0,
        margineCDERPos = 0,
        liquidita,
        liquiditaPos,
        tot,
        jsonOptions = {
            "type": "pie",
            "balloonText": "",
            "labelText": "",
            "pullOutRadius": 0,
            "startAngle": 90,
            "accessibleLabel": "",
            "colorField": "color",
            "colors": [],
            "labelColorField": "",
            "labelsEnabled": false,
            "labelTickColor": "",
            "marginBottom": 2,
            "marginLeft": 2,
            "marginRight": 2,
            "marginTop": 2,
            "outlineColor": "",
            "startDuration": 0,
            "titleField": "country",
            "valueField": "value",
            "accessible": false,
            "autoResize": false,
            "backgroundColor": "",
            "borderColor": "",
            "color": "",
            "fontFamily": "",
            "tapToActivate": false,
            "theme": "default",
            "allLabels": [],
            "balloon": {},
            "titles": []
        };

    if (isMissingData(dashboardData.contoTecnico)) {
        if (!isMissingData(dashboardData.contoCorrente)) {
            margineCC = parseFloat(dashboardData.contoCorrente.margine);
            margineCCPos = Math.max(0, margineCC);
            fidoValue = parseFloat(dashboardData.contoCorrente.fido);
        }
        if (!isMissingData(dashboardData.contoDeposito)) {
            margineCD = parseFloat(dashboardData.contoDeposito.margine);
            lineeVincolate = parseFloat(dashboardData.lineeVincolate.totale);
            risparmio = lineeVincolate + margineCD;
        }
        if (!isMissingData(dashboardData.contoDerivati)) {
            margineCDER = parseFloat(dashboardData.contoDerivati.margine);
            margineCDERPos = Math.max(0, margineCDER);
        }
        liquidita = margineCC + fidoValue + margineCDER;
        liquiditaPos = margineCCPos + fidoValue + margineCDERPos;
        tot = risparmio + liquidita;
    } else {
        margineCT = parseFloat(dashboardData.contoTecnico.margine);
        if (!isMissingData(dashboardData.contoDerivati)) {
            margineCDER = parseFloat(dashboardData.contoDerivati.margine);
        }
        tot = margineCT + margineCDER;
    }
    return [
        $.extend({}, jsonOptions, {
            "dataProvider": [{
                "value": risparmio,
                "color": '#719100'
            }, {
                "value": liquiditaPos,
                "color": '#000000'
            }
            ]
        }),
        $.extend({}, jsonOptions, {
            "dataProvider": [{
                "value": margineCD,
                "color": '#9CBF00'
            }, {
                "value": lineeVincolate,
                "color": '#CDE17B'
            }, {
                "value": margineCCPos,
                "color": '#262626'
            }, {
                "value": fidoValue,
                "color": '#B0B0B0'
            }, {
                "value": margineCDERPos,
                "color": '#DEDEDE'
            }
            ]
        })
        , tot
    ];
};
/*** |FINE| JSON grafici ***/


// Lista movimenti Conto Deposito
var openMovimentiConto = function () {
    var tipo = arguments[1];
    showLoadingRigheMov();
    if (!tipo) {
        popolaEstrattiConto();
        openPopOverLayerRIA('#popUpMovimenti3', 'fixed');
        loadEstrattiConto();
    } else {
        popolaListaTrasferimenti(tipo);
        openPopOverLayerRIA('#popUpMovimenti' + tipo, 'fixed');
        loadListaTrasferimenti(tipo);
    }
    return false;
};

var popolaListaTrasferimenti = function (tipo) {
    var parameters;
    switch (tipo) {
        case 1:
            parameters = {
                ct: dashboardData.ct
            };
            break;
        case 2:
            parameters = {
                cc: dashboardData.cc
            };
            break;
        case 3:
            parameters = {
                cd: dashboardData.cd
            };
            break;
        case 4:
            parameters = {
                cder: dashboardData.cder
            };
            break;
    }
    AJAXCallPost(links.movimentiConto, function (data) {
        popolaListaTrasferimentiSuccess(data, tipo);
    }, function (data) {
        caricaDatiFailure(data, 0);
    }, parameters);
};

var popolaListaTrasferimentiSuccess = function (data, tipo) {
    var lista;
    if (data === null) {
        caricaDatiFailure(window, 0);
    } else {
        var codTipo = null;
        switch (tipo) {
            case 1:
                codTipo = 'CT';
                break;
            case 2:
                codTipo = 'CC';
                break;
            case 3:
                codTipo = 'CD';
                break;
            case 4:
                codTipo = 'CDER';
                break;
        }
        lista = data.lista;
        // Nasconde tutte le righe
        nascondiRigheMov();
        hideLoadingRigheMov();
        if (lista.length === 0) {
            // Mostra la riga nessun risultato
            $('#nessuno' + codTipo).show();
        } else {
            var contoSelezionato = encodeURIComponent($('#selectConti').val());
            // Mostra una riga per risultato, fino a 10
            $.each(lista, function (index, objConto) {
                var dataC, VTa, descB, val, dett, vediDett,
                    riga = $('#riga' + codTipo + index).show(),
                    dettaglio_1 = $('#dettaglio' + codTipo + index + '_1'),
                    dettaglio_2 = $('#dettaglio' + codTipo + index + '_2');
                dataC = objConto[0];
                VTa = objConto[1];
                descB = objConto[2];
                val = objConto[4];
                dett = objConto[3];
                vediDett = objConto[6];
                $('#dataContabile' + codTipo + index).html(dataC);
                $('#dataValuta' + codTipo + index).html(VTa);
                if (descB === '') {
                    dettaglio_1.hide();
                } else {
                    dettaglio_1.html(descB);
                }
                dettaglio_2.hide();
                var tdEntrata = $('#tdEntrata' + codTipo + index).html('&nbsp;'),
                    tdUscita = $('#tdUscita' + codTipo + index).html('&nbsp;');
                // Controllo se l'importo e' negativo per applicare classe nega
                if (val < 0) {
                    tdUscita.html(formattaNumero(val)).addClass('nega');
                } else {
                    tdEntrata.html(formattaNumero(val));
                }
                var vediDettLnk = riga.find('.vedidett a:first').html('Vedi dettagli').hide();
                riga.find('.dettaglio:first').hide();
                if (codTipo === 'CC') {
                    if (isMissingData(vediDett)) {
                        vediDettLnk.hide();
                    } else {
                        dettagliMov[contoSelezionato + index] = dett;
                        vediDettLnk.show();
                    }
                }
            });
        }
    }
};

var loadListaTrasferimenti = function (tipo) {
    $('#popUpMovimenti' + tipo + ' .head img:first').click(function () {
        removeListaTrasferimenti(tipo);
        closePopOverLayerRIA('#popUpMovimenti' + tipo);
    });
};

var removeListaTrasferimenti = function (tipo) {
    $('#popUpMovimenti' + tipo + ' .head img:first').unbind('click');
};

// popola select linee vincolate sezione riepilogo
var popolaSelectRiepilogoLineeVincolate = function () {
    var mesiLVfiltroOptions = $('#mesiLVfiltro').prop('options'),
        tassoLVfiltroOptions = $('#tassoLVfiltro').prop('options');
    mesiLVfiltroOptions.length = 1;
    tassoLVfiltroOptions.length = 1;
    $.each(riepilogoVincoli.lista, function (index, val) {
        var mese = val[3],
            presenteM = false,
            i;
        for (i = 0; i < mesiLVfiltroOptions.length; i++) {
            if (mese === mesiLVfiltroOptions[i].value) {
                presenteM = true;
                break;
            }
        }
        if (!presenteM) {
            mesiLVfiltroOptions[mesiLVfiltroOptions.length] = new Option(mese + ' mesi', mese);
        }

        var tasso = val[2];
        var presenteT = false;
        for (i = 0; i < tassoLVfiltroOptions.length; i++) {
            if (tasso === tassoLVfiltroOptions[i].value) {
                presenteT = true;
                break;
            }
        }
        if (!presenteT) tassoLVfiltroOptions[tassoLVfiltroOptions.length] = new Option(tasso + '%', tasso);
    });
};

// popola tabella del riepilogo linee vincolate
var popolaTabellaLV = function () {
    var bodyTableLV = $('#bodyTableLV').empty(),
        footTableLV = $('#footTableLV').empty();

    var classTR = 'b';
    var classTD = 'v';

    if (riepilogoVincoli.lista.length > 5) {
        $('#tabellaLV').removeClass('totale');
    } else {
        $('#tabellaLV').addClass('totale');
    }

    $.each(riepilogoVincoli.lista, function (index, objConto) {
        var isNonSvinc, isActive, hasPrenotate = false, descObj, descLV, altTextSvincola, valore_iniziale, valore_finale, linkSvincola, dataTitle, classDesc;
        if (!objConto.hidden) {
            isNonSvinc = (objConto[9] === '1');
            isActive = (objConto[10] === '1');
            descObj = impostaNomeLV(objConto[8], index, isNonSvinc);
            descLV = descObj.descLV;
            altTextSvincola = (!isNonSvinc) ? 'Svincola' : 'Questa &egrave; la linea &quot;' + objConto[8] + '&quot;, non svincolabile, che hai attivato per ricevere il premio.';
            valore_iniziale = parseFloat(objConto[4]);
            valore_finale = parseFloat(objConto[5]);
            classDesc = descObj.classDesc;

            if (!isActive) {
                hasPrenotate = true;
                dataTitle = 'Linea vincolata in attesa di attivazione.<br>L\'importo finale comprensivo degli interessi sar&agrave; visualizzato al momento dell\'attivazione.';
                linkSvincola = '<span class="txthelp"><i class="icon icon-2x icon-clessidra_fill closeable" data-toggle="tooltip" data-title="' + dataTitle + '"></i></span>';
            } else {
                linkSvincola = '<i class="icon icon-2x icon-unlock_table" title="' + altTextSvincola + '"></i>';

                if (isNonSvinc) {
                    linkSvincola = '<a href="javascript:" class="no-underline btn-icon btn-disabled svincolaLV">' + linkSvincola + '</a>';
                } else {
                    linkSvincola = '<a href="javascript:" class="no-underline btn-icon svincolaLV">' + linkSvincola + '</a>';
                }
            }

            classTR += (index % 2) ? ' dispari' : ' pari';
            var htmlTD = '<tr class="' + classTR + ' bb classeFalsa" data-index="' + index + '" data-nonsvinc="' + isNonSvinc + '">' +
                '<td class="right LVnum">' + objConto[0] + '</td>' +
                '<td class="left LVdesc ' + classDesc + '"><div class="LVdescText">' + descLV + '</div></td>' +
                '<td class="right LVtasso">' + objConto[2] + ' %</td>' +
                '<td class="right LVdurata">' + objConto[3] + ' mesi</td>' +
                '<td class="center LVscad"><span class="lighText">' + objConto[7] + '</span><br/>' + objConto[1] + '</td>' +
                '<td class="right LVimp"><span class="lighText">' + formattaNumeriOutput(valore_iniziale) + ' ' + valutaHTML + '</span><br/>' + (isActive ? formattaNumeriOutput(valore_finale) + ' ' + valutaHTML : 'N.D.') + '</td>' +
                '<td class="center LVico ' + classTR + '">' + linkSvincola + '</td>' +
                '</tr>';
            bodyTableLV.append(htmlTD);
            if (classTR === 'b') {
                classTR = 'c';
                classTD = 'r';
            } else {
                classTR = 'b';
                classTD = 'v';
            }

            if (hasPrenotate) {
                initTooltip(bodyTableLV);
            }
        }
    });

    var totaleVincolato = totaliLV(4),
        totaleGuadagno = totaliLV(5);

    var html_totale = '<tr class="totali b classeFalsa">' +
        '<td colspan="5"><strong><span class="lighText">Totale iniziale vincoli attivi</span></strong></td>' +
        '<td class="right bgWhite"><span class="lighText">' + formattaNumeriOutput(totaleVincolato) + ' ' + valutaHTML + '</span></td>' +
        '<td class="bgWhite brdWhite"></td>' +
        '</tr>' +
        '<tr class="totali b classeFalsa">' +
        '<td colspan="5"><strong>Totale finale vincoli attivi</strong></td>' +
        '<td class="right bgWhite">' + formattaNumeriOutput(totaleGuadagno) + ' ' + valutaHTML + '</td>' +
        '<td class="bgWhite brdWhite"></td>' +
        '</tr>';
    footTableLV.append(html_totale);
};

var impostaNomeLV = function (nome, index, isNonSvinc) {
    var descLV,
        classDesc = 'missingDesc';
    if (isNonSvinc) {
        descLV = nome;
    } else if (!isMissingData(nome)) {
        descLV = '<a class="linkDettLV" title="Modifica il nome della linea">' + nome + '</a>';
    } else {
        descLV = '<a class="linkDettLV" title="Clicca per assegnare un nome alla linea">Dai un nome alla linea</a>';
    }
    return { "descLV": descLV, "classDesc": classDesc };
};

// filtro tabella linee vincolate
var filtroLV = function () {
    var dataDa = $('#scadenzaLvDa').val(),
        dataA = $('#scadenzaLvA').val(),
        vincolo = $('#mesiLVfiltro').val(),
        tasso = $('#tassoLVfiltro').val();

    $.each(riepilogoVincoli.lista, function (index, objConto) {
        var dataDaOK = !(isValidDate(dataDa) && convertDateIsoFormat(dataDa) > convertDateIsoFormat(objConto[7])),
            dataAOK = !(isValidDate(dataA) && convertDateIsoFormat(dataA) < convertDateIsoFormat(objConto[1])),
            vincoloOK = !(vincolo !== '' && vincolo !== objConto[3]),
            tassoOK = !(tasso !== '' && tasso !== objConto[2]);
        objConto.hidden = !(dataDaOK && dataAOK && vincoloOK && tassoOK);
    });
    popolaTabellaLV();
};

// Calcola totali linee vincolate
var totaliLV = function (indice) {
    var totale = 0;
    $.each(riepilogoVincoli.lista, function (index, objConto) {
        var valore;
        if (!objConto.hidden && objConto[10] === '1') {
            valore = (indice === 5) ? parseFloat(objConto[5]) : objConto[indice];
            totale += parseFloat(valore);
        }
    });
    return totale;
};

// gestione lista linee vincolate
var inizializzaTabLV = function () {
    azzeraGuadagnoLV('');

    // Resetta il valore guadagno sui box dei tassi - Paolo Tonon
    var contatoreGuadagno = 7, i;
    var guadagnoLVItem;
    for (i = 0; i < contatoreGuadagno; i++) {
        guadagnoLVItem = $('#guadagnoLV' + i);
        if (guadagnoLVItem.length) {
            guadagnoLVItem.html("0");
        }
    }

    var totaleInvestimento = totaliLV(4);
    var totaleGuadagno = totaliLV(5);
    var dataUltima = '';
    var impLV = Math.round((totaleGuadagno - totaleInvestimento) * 100) / 100;

    if (riepilogoVincoli.lista.length) {
        dataUltima = riepilogoVincoli.lista[riepilogoVincoli.lista.length - 1][1];
    }

    $('#totaleInvestito').html(formattaNumeriOutput(totaleInvestimento));
    $('#dataRendimento').html(dataUltima);
    $('#totaleRendimento').html(formattaNumeriOutput(impLV));

    $('#scadenzaLvDa').val('gg/mm/aaaa');
    $('#scadenzaLvA').val('gg/mm/aaaa');
    $('#mesiLVfiltro').prop('options')[0].selected = true;
    $('#tassoLVfiltro').prop('options')[0].selected = true;

    popolaTabellaLV();
};

var popolaEstrattiConto = function () {
    var parameters = {
        cc: dashboardData.cc,
        cd: dashboardData.cd
    };
    AJAXCallPost(links.estrattiConto, popolaEstrattiContoSuccess, function (e) {
        caricaDatiFailure(e, 0);
    }, parameters);
};

var popolaEstrattiContoSuccess = function (data) {
    if (data === null) {
        caricaDatiFailure(window, 0);
    }
    if (fase < 2) {
        $('#thLinkE').addClass('hidden');
    }
    $.each(data.lista, function (index, objConto) {
        $('#dataE' + index).html(objConto[0]);
        $('#dettaglioE' + index).html(objConto[1]);
        $('#linkE' + index).attr('href', objConto[2]);

        if (fase < 2) {
            $('#tdLinkE' + index).hide();
        }
    });
};

var loadEstrattiConto = function () {
    //$('#chiudiPopUpEC').click(hideObserver);
};

// noinspection JSUnusedGlobalSymbols
var removeEstrattiConto = function () {
    //$('#chiudiPopUpEC').unbind('click', hideObserver);
};


/*** Funzioni sul DOM ***/
var aggiornaSaldiEMargini = function () {
    var margineCTValue = 0;
    var margineCCValue = 0;
    var margineCDValue = 0;
    var margineCCTrasfValue;
    var lineeVincolateValue = 0;
    var margineCDVValue = 0;

    if (!isMissingData(dashboardData.ct)) dettaglioSaldiConti[dashboardData.ct] = false;
    else dettaglioSaldiConti[dashboardData.cc] = false;

    if (!isMissingData(dashboardData.ct)) {
        margineCTValue = parseFloat(dashboardData.contoTecnico.margine);
        $('#saldoCT, #saldoCTMobile').html(formattaNumero(dashboardData.contoTecnico.saldo));
        $('#margineCT, #margineCTMobile').html(formattaNumero(dashboardData.contoTecnico.margine));
        $('#intestazioneCT, #intestazioneCTMobile').html(dashboardData.contoTecnico.intestatario);

        $('#CTdataT0').html(dashboardData.contoTecnico.dataMargine);

        $('#CTsaldiLoading').show();
        $('#CTsaldiT').hide();
    }
    if (!isMissingData(dashboardData.cc)) {
        margineCCValue = parseFloat(dashboardData.contoCorrente.margine);
        margineCCTrasfValue = parseFloat(dashboardData.contoCorrente.margineTrasf);
        // Sostituisco i dati
        if (!isMissingData(dashboardData.contoCorrente.fido)) {
            $('#fidoCC, #fidoCCMobile').html(formattaNumero(dashboardData.contoCorrente.fido));
        }
        $('#saldoCCSintesi').html(formattaNumero(dashboardData.contoCorrente.saldo));
        $('#saldoGrafVal, #saldoCC, #saldoCCMobile').html(formattaNumero(dashboardData.contoCorrente.saldo));
        var margineCC = $('#margineCC, #margineCCMobile');
        var margineCCValute = margineCC.closest('.BoxSaldoValoreBlack').find('.valuta');
        margineCC.html(formattaNumero(dashboardData.contoCorrente.margine));
        margineCCValute.show();
        $('#CCdataT0').html(dashboardData.contoCorrente.dataMargine);
        $('#CCdataGestione').html(dashboardData.contoCorrente.dataMargine);
        $('#CCsaldiLoading').show();
        $('#CCsaldiT').hide();
        if (dashboardData.tipoRapporto <= 2) {
            var margineCCTrasfValuePos = (margineCCTrasfValue < 0) ? 0 : margineCCTrasfValue;

            $('.dispTrasfCDLink .dispImp').html(formattaNumero(margineCCTrasfValuePos));
            $('#massimoImpCDLink').html(formattaNumero(margineCCTrasfValuePos));

            if ((dashboardData.tipoRapporto === 1)) {
                $('.dispTrasfCDERLink .dispImp').html(formattaNumero(margineCCTrasfValuePos));
            }
        }
    }

    if (!isMissingData(dashboardData.cd)) {
        margineCDValue = parseFloat(dashboardData.contoDeposito.margine);
        lineeVincolateValue = isMissingData(dashboardData.lineeVincolate.totale) ? 0 : parseFloat(dashboardData.lineeVincolate.totale);

        $('#saldoCDSintesi').html(formattaNumero(dashboardData.contoDeposito.saldo));
        $('#saldoCD, #saldoCDMobile').html(formattaNumero(dashboardData.contoDeposito.saldo));
        $('#margineCD, #margineCDMobile, #massimoLV').html(formattaNumero(dashboardData.contoDeposito.margine));

        if (dashboardData.tipoRapporto <= 2) {
            var margineCDValuePos = (margineCDValue < 0) ? 0 : margineCDValue;

            $('.dispTrasfCCLink .dispImp').html(formattaNumero(margineCDValuePos));
            $('.boxDispDep .dispImp').html(formattaNumero(margineCDValuePos));
            $('#massimoImpCCLink').html(formattaNumero(margineCDValuePos));
        }
    }

    if (!isMissingData(dashboardData.cder)) {
        margineCDVValue = parseFloat(dashboardData.contoDerivati.margine);

        $('.saldoCDV').html(formattaNumero(dashboardData.contoDerivati.saldo));
        $('.margineCDV').html(formattaNumero(dashboardData.contoDerivati.margine));

        if (dashboardData.tipoRapporto === 1) {
            var margineCDVValuePos = (margineCDVValue < 0) ? 0 : margineCDVValue;

            $('.dispTrasfCC2Link .dispImp').html(formattaNumero(margineCDVValuePos));
        }
    }

    var tot = formattaNumero(margineCTValue + margineCCValue + margineCDValue + lineeVincolateValue + margineCDVValue);

    $('.totaleRipartizione').html(tot);

    $('#dataDisposizione').val(dashboardData.dataDisposizione);
};
/*** |FINE| Funzioni sul DOM ***/


/*** Popup sia dispositiva che non ***/
// Visualizza/aggiorna dettagli linea vincolata
var openDettagliLV = function (index, isNonSvinc) {
    var inputcont = $('#confermaContent13').find('.inputcont:first'),
        nome = (inputcont.hasClass('Active')) ? $(inputcont.find('input:first')).val() : '';

    resetConferma(13);
    $('#disponi13').attr('data-index', index).attr('data-nonsvinc', isNonSvinc).attr('data-nome', nome);
    loadDettagliLV(index, isNonSvinc);
    openPopOverLayerRIA('#lbConferma13', 'fixed');
};

var loadDettagliLV = function () {
    var disponi13 = $('#disponi13'),
        index = disponi13.attr('data-index'),
        isNonSvinc = (disponi13.attr('data-nonsvinc') === 'true'),
        vincolo = riepilogoVincoli.lista[index],
        confermaContent13 = $('#confermaContent13'),
        box = confermaContent13.find('.box13:first'),
        descLVinputDiv = confermaContent13.find('.descLVinput:first'),
        descLVmess = confermaContent13.find('.descLVmess:first'),
        descLVtext = confermaContent13.find('.descLVtext:first');

    $('#numeroLV13').html(vincolo[0]);
    $('#tassoLV13').html(vincolo[2]);
    $('#durataLV13').html(vincolo[3]);
    $('#dataAperturaLV13').html(vincolo[7]);
    $('#dataScadenzaLV13').html(vincolo[1]);
    $('#valoreVincolatoLV13').html(formattaNumero(vincolo[4]));
    $('#valoreFinaleLV13').html(formattaNumero(vincolo[5]));

    if (isNonSvinc) {
        descLVinputDiv.hide();
        descLVmess.hide();
        descLVtext.html(vincolo[8]).show();
        $('#inputX13').attr('disabled', 'disabled').val(vincolo[8]);
        $('#lblNonSvinc2').show();
        $('#annulla13').hide();
        disponi13.hide();
        confermaContent13.find('.lineSep:first').hide();

        if (!box.hasClass('boxNS')) {
            box.addClass('boxNS');
        }
    } else {
        if (!isMissingData(vincolo[8])) {
            $('#inputX13').removeAttr('disabled').val(vincolo[8]);
        } else {
            $('#inputX13').removeAttr('disabled').val('');
        }
        descLVinputDiv.show();
        descLVmess.show();
        descLVtext.hide();
        $('#lblNonSvinc2').hide();
        $('#annulla13').show();
        disponi13.show();
        confermaContent13.find('.lineSep:first').show();
        box.removeClass('boxNS');
    }
    confermaContent13.show();
};

var disponiAggiornaDescLV = function () {
    var disponi13 = $('#disponi13'),
        index = disponi13.attr('data-index'),
        nome = $('#inputX13').val(),
        parameters = {
            cd: dashboardData.cd,
            id: riepilogoVincoli.lista[index][0],
            nome: nome,
            dataS: riepilogoVincoli.lista[index][1]
        };
    disponi13.attr('data-nome', nome);
    AJAXCallPost(links.aggiornaDescLVinc, disponiAggiornaDescLVSuccess, disponiAggiornaDescLVFailure, parameters);
};

var disponiAggiornaDescLVSuccess = function (data) {
    var disponi13 = $('#disponi13'),
        index = disponi13.attr('data-index'),
        nome = disponi13.attr('data-nome'),
        isNonSvinc = (disponi13.attr('data-nonsvinc') === 'true'),
        response = true,
        cleanNome, lvObj;

    if (isCallFailed(data)) {
        response = false;
    } else {
        cleanNome = ($.trim(nome) === '') ? '*#*ND' : $.trim(nome);
        lvObj = impostaNomeLV(cleanNome, index, isNonSvinc);
        $('#bodyTableLV tr[data-index=' + index + '] .LVdescText').html(lvObj.descLV);
        riepilogoVincoli.lista[index][8] = cleanNome;
    }

    showResponse(response, data.errore, 'confermaContent13', 'confermaResponse13');
};

var disponiAggiornaDescLVFailure = function () {
    showResponse(false, 'Operazione non riuscita!', 'confermaContent13', 'confermaResponse13');
};
/*** |FINE| Popup sia dispositiva che non ***/
