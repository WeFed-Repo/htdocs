/* jshint strict:false */
/* global $, AmCharts, isMissingData, pDis, cgi_script, console, pathLibrerie, links,
	resetErrorDiv, toggleTab, caricaListaConti, selectTabVincoli,
	gotoLineeAttive, changeItemAccordion, openDettagliLV,
	openMovimentiConto, openConfermaTrasferimentoCC, openConfermaTrasferimentoCD,
	cleanImport, openConfermaTrasferimentoCC2, openConfermaTrasferimentoCDER,
	openTrasferimentoRicorrente, controlloImportoTric, aggiornaDataScadenzaTR, resetNuovoTrasferimentoRic,
	cancellaDataScadenzaTR, getFocus, animazioneCCCDdiventa, animazioneCCDerDiventa, animazioneCDdiventaLV,
	filtroLV, aggiornaGuadagnoLV, resetHasErrors, aggiornaGuadagnoEM, animazioneCCCDdiventaTr,
	openLBcoord, setTimerGraficoProiezioneTRic, disponiAggiornaDescLV, closePopOverLayerRIA,
	hideTabs, toggleTabConf, hideLightBox, nascondiRigheMov, showLoadingRigheMov, associaLinkMov, toggleTabLoadCallback,
	hideLightBox, nascondiRigheMov, showLoadingRigheMov, associaLinkMov, toggleTabLoadCallback,
	getContentClass, caricaDashboard, caricaSessioneCarte, changeItemAccordionConf, abilOroCap, selectTab,
	caricaContentCC, caricaContentCD, caricaContentLV, caricaContentCDER, setHasErrors,
	creaJsonGraficoRipartizione, caricaAndamenti, caricaSingolaDataValuta, resetFocus, checkTrasferimento,
	caricaListaLineeVincolate, caricaListaTRic, showError, formattaNumero, initEventiDispositive,
	creaGraficoProiezioneTRic, popolaTabellaTS, openEliminaLV,
	formattaNumOutput, caricaDettMovimento, renderPickDateMobile, appendDatePickerIcon */
/* exported AJAXCallPost, AJAXCallGet, initLinkStatici, initEventi, loadContentRia1, loadContentRia1Callback,
	afterLoadContentRia1, unloadContentRia1, loadContentRia1, afterLoadContentRia2, unloadContentRia2, loadContentRia2,
	afterLoadContentRia3, unloadContentRia3, loadContentRia3,
	loadContentAccordion1, afterLoadContentAccordion1, unloadContentAccordion1,
	loadContentAccordion2, afterLoadContentAccordion2, unloadContentAccordion2,
	loadContentAccordion3, afterLoadContentAccordion3, unloadContentAccordion3,
	loadContentAccordion4, afterLoadContentAccordion4, unloadContentAccordion4,
	afterLoadContentLiquidita1, unloadContentLiquidita1, loadContentLiquidita1,
	afterLoadContentLiquidita2, unloadContentLiquidita2, loadContentLiquidita2,
	afterLoadContentTrasferimento1, unloadContentTrasferimento1, loadContentTrasferimento1,
	afterLoadContentTrasferimento2, unloadContentTrasferimento2, loadContentTrasferimento2,
	afterLoadContentTrasf1, unloadContentTrasf1, loadContentTrasf1,
	afterLoadContentTrasf2, unloadContentTrasf2, loadContentTrasf2,
	afterLoadContentTrasfRicorr2,
	afterLoadContentVinc1, unloadContentVinc1, loadContentVinc1,
	afterLoadContentVinc2, unloadContentVinc2, loadContentVinc2,
	openTutorial, resetTAB, extraMoneyOnOff, cambiaConto */
/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */
// ********** Variabili globali **********
// Attiva il debug
var debugEnabled = false,
    librerie = false;
// Controlla se � IE6
var isIE6 = false;
// Oggetto tipi di log
var logType = {
    log: 0,
    info: 1,
    warn: 2,
    error: 3
};
// variabile per importo massimo nei campi numerici
var valutaHTML = '&euro;',
    valutaFlash = '&#128;';
// Attiva i componenti di fase 2
var fase = '';
// Discrimina se mostrare la RIA con i conti @me
var showRia = true;
// Lista dei conti
var conti = null;
// Lista deli trasferimenti ricorrenti
var trasferimenti = {
    lista: {},
    frequenze: null,
    storico: null,
    reset: function () {
        this.lista = {};
        this.frequenze = null;
        this.storico = null;
    }
};
// Lista delle linee vincolate proposte
var vincoli = null;
// Lista delle linee vincolate gi� presenti
var riepilogoVincoli = {
    lista: {},
    reset: function () {
        this.lista = {};
    }
};
// Lista delle linee vincolate
var andamenti = {
    contoCorrente: {},
    contoDeposito: {},
    reset: function () {
        this.contoCorrente = {};
        this.contoDeposito = {};
    }
};
// XML per i grafici
var xmlGraficoRipartizione = '',
    xmlGraficoAndamenti = '';
// Oggetti per gestire l'avanzamento del caricamento di contenuti complessi
var contentProgressRia1 = {
    prefix: '',
    suffix: 'Ria',
    index: 1,
    liquidita: false,
    reset: function () {
        this.prefix = '';
        this.liquidita = false;
    },
    test: function () {
        return (this.liquidita);
    }
};
var contentProgressRia2 = {
    prefix: '',
    suffix: 'Ria',
    index: 2,
    trasf: false,
    reset: function () {
        this.prefix = '';
        this.trasf = false;
    },
    test: function () {
        return (this.trasf);
    }
};
var contentProgressRia3 = {
    prefix: '',
    suffix: 'Ria',
    index: 3,
    vinc: false,
    reset: function () {
        this.prefix = '';
        this.vinc = false;
    },
    test: function () {
        return (this.vinc);
    }
};
// Oggetti per gestire dati da passare a seguito di un'azione
var accordionContentLoaded = {
    contentCC: false,
    contentCD: false,
    contentLV: false,
    contentCDER: false,
    reset: function () {
        this.contentCC = false;
        this.contentCD = false;
        this.contentLV = false;
        this.contentCDER = false;
    }
};
// Oggetti per gestire dati da passare a seguito di un'azione
var lineeVincolateConf = {
    indexTab: null,
    reset: function () {
        this.indexTab = null;
    }
};
// ********** Oggetti per salvare dati utili **********
var dashboardData = {
    cc: null,
    cd: null,
    ct: null,
    cder: null,
    contoCorrente: null,
    contoDeposito: null,
    lineeVincolate: null,
    contoTecnico: null,
    contoDerivati: null,
    dataDisposizione: null,
    tipoRapporto: null,
    isDeposito: null,
    carta: null,
    estero: null,
    promo: null,
    hasNonSvinc: null,
    reset: function () {
        this.cc = null;
        this.cd = null;
        this.ct = null;
        this.cder = null;
        this.contoCorrente = null;
        this.contoDeposito = null;
        this.lineeVincolate = null;
        this.contoTecnico = null;
        this.contoDerivati = null;
        this.dataDisposizione = null;
        this.tipoRapporto = null;
        this.carta = null;
        this.estero = null;
        this.promo = null;
        this.hasNonSvinc = null;
    },
    calcolaTipoRapporto: function () {
        /***** Determina il tipo di rapporto in base alle voci non nulle passate dalla chiamata AJAX
         //-- Senza C/T --//
         *** 1: C/C +DEP +DER
         *** 2: C/C +DEP (compreso Be 1)
         *** 3: C/C +DER
         *** 4: C/C

         //-- Con C/T --//
         *** 5: C/T +DER
         *** 6: C/T
         *****/
        this.isDeposito = !isMissingData(this.cd);
        if (isMissingData(this.ct)) {
            if (this.isDeposito) {
                if (!isMissingData(this.cder)) {
                    this.tipoRapporto = 1; //*** C/C +DEP +DER ***
                } else {
                    this.tipoRapporto = 2; //*** C/C +DEP ***
                }
            } else if (!isMissingData(this.cder)) {
                this.tipoRapporto = 3; //*** C/C +DER ***
            } else {
                this.tipoRapporto = 4; //*** C/C ***
            }
        } else if (!isMissingData(this.cder)) {
            this.tipoRapporto = 5; //*** C/T +DER ***
        } else {
            this.tipoRapporto = 6; //*** C/T ***
        }
    },
    testPromo: function (conto) {
        if (isMissingData(conto.hasFresh) && isMissingData(conto.hasRetention) && isMissingData(conto.hasNonSvinc)) {
            dashboardData.hasNonSvinc = false;
            dashboardData.promo = false;
        } else {
            dashboardData.hasNonSvinc = (!isMissingData(conto.hasNonSvinc) && conto.hasNonSvinc === "true");
            dashboardData.promo = ((!isMissingData(conto.hasFresh) && conto.hasFresh === "true") || (!isMissingData(conto.hasRetention) && conto.hasRetention === "true"));
        }
    }
};
// ********** Array per dati di configurazione **********
var arrayColori = [];
arrayColori[0] = "6F8F0A";
arrayColori[1] = "89AD17";
arrayColori[2] = "ACD038";
arrayColori[3] = "D8F86F";
arrayColori[4] = "9900FF";
arrayColori[5] = "C062FF";
arrayColori[6] = "E8C6FF";
arrayColori[7] = "FED008";
arrayColori[8] = "FFE85A";
arrayColori[9] = "FFF4C0";
arrayColori[10] = "FF061F";
arrayColori[11] = "FF8894";
arrayColori[12] = "FFCACF";
arrayColori[13] = "071AFE";
arrayColori[14] = "989FFE";
arrayColori[15] = "E6E8FF";
arrayColori[16] = "444444";
arrayColori[17] = "8C8C8C";
arrayColori[18] = "C4C4C4";
arrayColori[19] = "E2E2E2";
arrayColori[20] = "E600FF";
arrayColori[21] = "F06CFF";
arrayColori[22] = "FACCFF";
arrayColori[23] = "990000";
arrayColori[24] = "FF3535";
arrayColori[25] = "FFF4F4";
arrayColori[26] = "66CC00";
arrayColori[27] = "06DAFF";
arrayColori[28] = "ecfcff";
arrayColori[29] = "013E98";
arrayColori[30] = "237AFE";
arrayColori[31] = "CADFFF";
// ********** variabili per i grafici **********
var graficoConti1, graficoConti2;
// ********** Utility AJAX **********
var AJAXCallPost = function (url, successFunc, failureFunc, parameters, urlPrefix) {
    parameters.BV_UseBVCookie = 'Yes';
    AJAXCall('post', url + '?cf=' + Math.random(), successFunc, failureFunc, parameters, urlPrefix);
};
var AJAXCallGet = function (url, successFunc, failureFunc, parameters, urlPrefix) {
    parameters.cf = Math.random();
    parameters.BV_UseBVCookie = 'Yes';
    AJAXCall('get', url, successFunc, failureFunc, parameters, urlPrefix);
};
var AJAXCall = function (method, url, successFunc, failureFunc, parameters, urlPrefix) {
    urlPrefix = urlPrefix || '/bnkg';
    var AjaxUrl = createAJAXUrl(url, urlPrefix);
    $.ajax({
        type: method,
        dataType: 'json',
        url: AjaxUrl,
        data: parameters,
        success: successFunc,
        error: failureFunc
    });
};
var createAJAXUrl = function (url, prefix) {
    return (!librerie) ? cgi_script + prefix + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1').replace(/\.jsp(\?)?/i, '.php$1');
};
//********** Utility Debug **********
var logMessage = function (type, message) {
    if (debugEnabled && console) {
        var typeLog = (type === null) ? 0 : type;
        switch (typeLog) {
            case 3:
                console.error(message);
                break;
            case 2:
                console.warn(message);
                break;
            case 1:
                console.info(message);
                break;
            case 0:
            /*falls through*/
            default:
                console.log(message);
                break;
        }
    }
};
// Fa il log a console degli errori
/*
Ajax.Responders.register({
    onException: function (data, ex) {
        logMessage(3, ex);
    }
});
*/
// ********** Inizializzazioni **********
// Avvia l'inizializzazine della RIA appena il browser ha caricato il DOM
$(function () {
    // Inizializza la RIA e le navigazioni interne 
    isIE6 = (($.browser.msie !== undefined) && typeof $(document.body).css('maxHeight') === "undefined");
    $('#contenuti545').hide();
    $('#ctnboxtable').hide();
    caricaListaConti();
    resetErrorDiv('errorDiv0', []);
});
var initLinkStatici = function () {
    var contoSelezionato = encodeURIComponent($('#selectConti').val()),
        mioPatrimonio = $('.mioPatrimonio'),
        linkOroCapitano = librerie ? "/connect.php?page=strutt_priv.php&tpl=tpl_priv_mio_patrimonio.php&responsive=y&liv0=0" : links.oroCapitano;

    initLinkDinamici(contoSelezionato);

    if (mioPatrimonio.length) {
        mioPatrimonio.attr('href', linkOroCapitano);
    }

    //$('#linkInviaCoordinate').attr('href', links.inviaCoordinate);
    $('#linkStampaCoordinate').attr('href', links.stampaCoordinate);
    $('#linkCondizioniCD').attr('href', links.condizioniCD);
    $('#aumentaRendimento').attr('href', links.fpInvestimenti);
};
var initLinkDinamici = function (contoSelezionato) {
    var dettCDERLink, dettCCLink, dettCTLink;
    $('#linkDettagliCoordinate, #LBlinkDettagliCoordinateEst').attr('href', links.dettaglioCoordinate + "&contoNum=" + contoSelezionato);
    $('#LBlinkStampaCoordinate, #LBlinkStampaCoordinateEst').attr('href', links.stampaCoordinate + '&contoNum=' + contoSelezionato);
    if (!isMissingData(dashboardData.cd)) {
        $('#boxExcelLV a:first-child').attr('href', links.excelLV + '&contoSelVincolo=' + dashboardData.cd);
    }
    if (!isMissingData(dashboardData.ct)) {
        dettCTLink = links.dettLiquiditaCT + "&CC=" + contoSelezionato;
        $('#dettaglioCTLink').attr('href', dettCTLink);
        if (!isMissingData(dashboardData.cder)) {
            dettCDERLink = links.dettLiquiditaCTDER + "&DER=" + encodeURIComponent(dashboardData.cder);
            if (pDis) $('.dispTrasfCDERLink').attr('href', dettCDERLink);
            $('#dettaglioCDERLink').attr('href', dettCDERLink);
        }
    } else {
        if (!isMissingData(dashboardData.cder)) {
            dettCCLink = links.dettLiquiditaCC + "&CC=" + contoSelezionato;
            dettCDERLink = links.dettLiquiditaCCDER + "&DER=" + encodeURIComponent(dashboardData.cder);
            if (pDis) {
                $('.dispTrasfCDERLink').attr('href', dettCCLink);
                $('.dispTrasfCC2Link').attr('href', dettCDERLink);
            }
            $('.dettaglioCDERLink').attr('href', dettCDERLink);
        }
    }
    if (!isMissingData(dashboardData.cc)) {
        dettCCLink = links.dettLiquiditaCC + "&CC=" + contoSelezionato;
        if (pDis) {
            $('.dispTrasfCDLink').attr('href', dettCCLink);
            $('#massimoImpCDLink').attr('href', dettCCLink);
        }
        $('#dettaglioCCLink').attr('href', dettCCLink);
        if (!isMissingData(dashboardData.cd)) {
            var dettCDLink = links.dettLiquiditaCD + "&accountId=" + encodeURIComponent(dashboardData.cd);
            if (pDis) {
                $('.dispTrasfCCLink').attr('href', dettCDLink);
                $('#massimoImpCCLink').attr('href', dettCDLink);
            }
            $('#dettaglioCDLink').attr('href', dettCDLink);
        }
    }
};
// Inizializza i gestori di eventi 
var initEventi = function () {
    var tabellaLV;
    // Gestisce il click sulle tab di primo livello
    $('#tabRia1').click(function (e) {
        return toggleTab(e, 'Ria', 1, 'slide');
    });
    // Permetti dispositive
    if (pDis) {
        $('#tabRia2').click(function (e) {
            return toggleTab(e, 'Ria', 2, 'slide');
        });
        // $('#tabRia5').click(function (e) { return toggleTab(e, 'Ria', 5, 'slide'); });
        $('#trasferisciDaCC').click(function (e) {
            return toggleTab(e, 'Ria', 2, 'slide');
        });
    }
    $('#tabRia3').click(selectTabVincoli);
    // Gestisce il click sulle tab di secondo livello della liquidit�  disponibile
    $('#tabLiquidita1').click(function (e) {
        return toggleTab(e, 'Liquidita', 1, 'appear');
    });
    if (fase >= 2) {
        $('#tabLiquidita2').click(function (e) {
            return toggleTab(e, 'Liquidita', 2, 'appear');
        });
    } else {
        $('#tabLiquidita2').hide();
    }
    $('#tabTrasferimento1').click(function (e) {
        return toggleTab(e, 'Trasferimento', 1, 'appear');
    });
    $('#tabTrasferimento2').click(function (e) {
        return toggleTab(e, 'Trasferimento', 2, 'appear');
    });
    if (pDis) { // Permetti dispositive
        // Gestisce il click sulle tab di secondo livello dei trasferimenti
        $('#tabTrasf1').click(function (e) {
            return toggleTab(e, 'Trasf', 1, 'slide');
        });
        $('#tabTrasf2').click(function (e) {
            return toggleTab(e, 'Trasf', 2, 'slide');
        });
        $('#tabTrasf4').click(function (e) {
            return toggleTab(e, 'Trasf', 4, 'slide');
        });
        $('#tabTrasf5').click(function (e) {
            return toggleTab(e, 'Trasf', 5, 'slide');
        });
        $('#tabTrasf6').click(function (e) {
            return toggleTab(e, 'Trasf', 6, 'slide');
        });
        $('#tabTrasf7').click(function (e) {
            return toggleTab(e, 'Trasf', 7, 'slide');
        });
        $('#tabVinc2').click(function (e) {
            return toggleTab(e, 'Vinc', 2, 'slide');
        });
        $('#prossimaLV').click(function (e) {
            return openDettagliLV(e, 0, null, true);
        });
        $('#apriLineaVincolata').click(function (e) {
            return toggleTab(e, 'Vinc', 2, 'slide');
        });
        $('#linkVediTutteLVBis').click(function (e) {
            return gotoLineeAttive(e, 2);
        });
        $('#altTextVediTutteLVBis').hide();
    } else {
        $('#linkVediTutteLVBis').hide();
    }
    $('#linkVediTutteLV').click(function (e) {
        return gotoLineeAttive(e, 1);
    });
    // Gestisce il click sulle tab di secondo livello delle linee vincolate
    $('#tabVinc1').click(function (e) {
        return toggleTab(e, 'Vinc', 1, 'slide');
    });
    $('.boxSaldoCC .collapse-bottom').on('show.bs.collapse', function (e) {
        changeItemAccordion(e, 1, 'load');
    });
    $('.boxSaldoCD .collapse-bottom').on('show.bs.collapse', function (e) {
        changeItemAccordion(e, 2, 'load');
    });
    $('.boxSaldoLV .collapse-bottom').on('show.bs.collapse', function (e) {
        changeItemAccordion(e, 3, 'load');
    });
    $('.boxSaldoCDER .collapse-bottom').on('show.bs.collapse', function (e) {
        changeItemAccordion(e, 4, 'load');
    });
    $('#apriOggi').click(function (e) {
        changeItemAccordion(e, 3);
    });
    // Eventi per le popup di lista movimenti conti
    //$('#estrattiConto').click(function (e) { openMovimentiConto(e, 0); });
    $('#movimentiCT').click(function (e) {
        openMovimentiConto(e, 1);
    });
    $('#movimentiCC').click(function (e) {
        openMovimentiConto(e, 2);
    });
    $('#movimentiCD').click(function (e) {
        openMovimentiConto(e, 3);
    });
    $('.movimentiCDER').click(function (e) {
        openMovimentiConto(e, 4);
    });
    if (pDis) {
        // Permetti dispositive
        // Eventi per le popup di conferma dei trasferimenti
        initEventiDispositive();
        // Eventi per le dispositive di trasferimenti manuali
        $('#aggiungiCDversamenti').click(function () {
            openConfermaTrasferimentoCD('#importoCDversamenti');
        });
        $('#aggiungiCCversamenti').click(function () {
            openConfermaTrasferimentoCC('#importoCCversamenti');
        });
        // Eventi per le dispositive di trasferimenti rapidi
        $('#aggiungiCD').click(function () {
            openConfermaTrasferimentoCD('#importoCD');
        });
        $('#aggiungiCC').click(function () {
            openConfermaTrasferimentoCC('#importoCC');
        });
        $('#aggiungiCDER').click(function () {
            openConfermaTrasferimentoCDER();
        });
        $('#aggiungiCC2').click(function () {
            openConfermaTrasferimentoCC2();
        });
        // Eventi per le dispositive di creazione nuovo trasferimento ricorrente
        $('#ImpostaTrasRicorrente').click(function (e) {
            openTrasferimentoRicorrente(e);
        });
        $('#importoTRf').on('keyup input', function (e) {
            cleanImport(e);
            controlloImportoTric(e);
        });
        $('#aPartireDaTRf').on('keyup input', aggiornaDataScadenzaTR).click(cancellaDataScadenzaTR);
        $('#numeroTRf').on('keyup input', aggiornaDataScadenzaTR);
        $('#dopoN').click(aggiornaDataScadenzaTR);
        $('#revoca').click(aggiornaDataScadenzaTR);
        $('#frequenzaTRf').change(aggiornaDataScadenzaTR);
        // Eventi per la navigazione in un nuovo trasferimento ricorrente
        $('#nuovoTrasf').click(function () {
            $('#contentTrasfRicorr1').removeClass('in');
            $('#contentTrasfRicorr2').addClass('in');
            resetNuovoTrasferimentoRic(false);
        });
        // Eventi per focus textarea trasferimenti manuali
        // eventi animazioni trasferimenti nella tab trasferimenti
        $('#importoCDversamenti').click(function () {
            getFocus('CD', 'CC');
        }).on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCCDdiventaTr('CD');
            checkTrasferimento($(this));
        }).click(resetCCCDdiventaTr);
        $('#importoCCversamenti').click(function () {
            getFocus('CC', 'CD');
        }).on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCCDdiventaTr('CC');
            checkTrasferimento($(this));
        }).click(resetCCCDdiventaTr);
        // Eventi animazioni trasferimenti nella dashboard
        $('#importoCD').on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCCDdiventa('CD');
            checkTrasferimento($(this));
        }).click(resetCCCDdiventa);
        $('#importoCC').on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCCDdiventa('CC');
            checkTrasferimento($(this));
        }).click(resetCCCDdiventa);
        $('#importoCDER').on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCDerDiventa('CDER');
            checkTrasferimento($(this));
        }).click(resetCCDerDiventa);
        $('#importoCC2').on('keyup input', function (e) {
            cleanImport(e);
            animazioneCCDerDiventa('CC2');
            checkTrasferimento($(this));
        }).click(resetCCDerDiventa);
    }
    // Eventi icone dashboard
    $('#LBlinkInviaCoordinate, #LBlinkInviaCoordinateEst').click(openLBcoord);
    // Eventi per filtro elenco linee vincolate
    $("#scadenzaLvDa, #scadenzaLvA").mask("99/99/9999");
    $("#scadenzaLvDa").datepicker({
        minDate: "-2y",
        maxDate: "2y",
        showOtherMonths: true,
        showOn: "button",
        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
        buttonImage: "/img/ret/pixel_trasp.gif",
        buttonImageOnly: true,
        beforeShow: renderPickDateMobile, // funzione per far si che si apra come overlayer su mobile
        onClose: function () {
            $('#datePickerWrapper').modal('hide');
        }
    });
    $("#scadenzaLvA").datepicker({
        minDate: 0,
        maxDate: "2y",
        showOtherMonths: true,
        showOn: "button",
        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
        buttonImage: "/img/ret/pixel_trasp.gif",
        buttonImageOnly: true,
        beforeShow: renderPickDateMobile, // funzione per far si che si apra come overlayer su mobile
        onClose: function () {
            $('#datePickerWrapper').modal('hide');
        }
    });
    appendDatePickerIcon('scadenzaLvDa');
    appendDatePickerIcon('scadenzaLvA');
    $('#filtraLV').click(filtroLV);
    // Eventi dettaglio linea vincolata
    $('#disponi13').click(function () {
        disponiAggiornaDescLV();
    });
    $('#annulla13').click(function () {
        closePopOverLayerRIA('#lbConferma13');
    });
    if (pDis) { // Permetti dispositive
        tabellaLV = $('#tabellaLV');
        // Eventi linee attive
        tabellaLV.on('click', '.svincolaLV', function (e) {
            var el;
            e.preventDefault();
            el = $(this).closest('tr');
            if (el.attr('data-nonsvinc') !== 'true') {
                openEliminaLV(el.attr('data-index'));
            }
            return false;
        });
        tabellaLV.on('click', '.linkDettLV', function (e) {
            var el;
            e.preventDefault();
            el = $(this).closest('tr');
            if (el.attr('data-nonsvinc') !== 'true') {
                openDettagliLV(el.attr('data-index'), false);
            }
            return false;
        });
        tabellaLV.on('click', '.dettaglioLV', function (e) {
            var el;
            e.preventDefault();
            el = $(this).closest('tr');
            openDettagliLV(el.attr('data-index'), el.attr('data-nonsvinc'));
            return false;
        });
        // Eventi aumenta deposito
        $('#importoCDLV').on('keyup input', function (e) {
            cleanImport(e);
            animazioneCDdiventaLV();
            checkTrasferimento($(this));
        });
        $('#aggiungiCDLV').click(function () {
            openConfermaTrasferimentoCD('#importoCDLV');
        });
        // Eventi creazione nuova linea vincolata
        $('#collapseDispDep').on('show.bs.collapse', function () {
            $('#diventaCDLV').html($('#massimoLV').html());
            $('#importoCDLV').val('');
            $('#btnDispDep').html('Chiudi').removeClass('btn-primary').addClass('btn-default').blur();
        }).on('hide.bs.collapse', function () {
            $('#btnDispDep').html('Aumenta').removeClass('btn-default').addClass('btn-primary').blur();
        });
        $('#importoNuovaLV').on('keyup input', function () {
            aggiornaGuadagnoLV('importoNuovaLV', '');
        });
        $('#importoNuovaEM').on('keyup input', function () {
            aggiornaGuadagnoEM('importoNuovaEM', '');
        });
    }
    // Mostra dettagli movimenti c/c
    var vediDett = $('#popUpMovimenti2 .vedidett a');
    if (vediDett.length) {
        vediDett.each(function (index, item) {
            $(item).click(function (e) {
                showVediDettaglio(e, index);
            });
        });
    }
    $(window).resize(function () {
        if (graficoConti1 && graficoConti1.invalidateSize) {
            graficoConti1.invalidateSize();
        }
        if (graficoConti2 && graficoConti2.invalidateSize) {
            graficoConti2.invalidateSize();
        }
    });
};
var cambiaConto = function () {
    // Reset della RIA per caricare il conto nuovo
    resetRIA();
    // Memorizzo il conto selezionato
    var contoSelezionato = $('#selectConti').val(),
        conto = '',
        i;
    for (i = 0; i < conti.length; i++) {
        if (contoSelezionato === conti[i].cc || contoSelezionato === conti[i].ct) {
            conto = conti[i];
        }
    }
    // visualizzo i dati del conto solo se la checkbox 'nascondi' non � selezionata
    dashboardData.ct = conto.ct;
    dashboardData.cc = conto.cc;
    dashboardData.cd = conto.cd;
    dashboardData.cder = conto.cder;
    if (isMissingData(conto.carta)) {
        dashboardData.carta = null;
    } else {
        dashboardData.carta = (conto.carta === "true");
    }
    if (isMissingData(conto.valuta)) {
        dashboardData.valuta = 'EUR';
    } else {
        dashboardData.valuta = conto.valuta;
    }
    dashboardData.estero = (!isMissingData(conto.cc) && contoSelezionato.substr(0, 5) === '00399');
    dashboardData.testPromo(conto);
    dashboardData.calcolaTipoRapporto();
    if (dashboardData.promo || dashboardData.hasNonSvinc) {
        $('#brHead_EMico').show();
    } else {
        $('#brHead_EMico').hide();
    }
    if ((dashboardData.tipoRapporto === 3 || dashboardData.tipoRapporto === 4) && !showRia) {
        location.href = links.linkRiaMista;
    }
    // Apre la RIA sul conto nuovo
    initNavigazioneRIA();
    initRIA();
    initLinkDinamici(contoSelezionato);
};
var resetRIA = function () {
    $('#contenuti545').hide();
    resetErrorDiv('errorDiv0', []);
    // Reset dati dashboard
    dashboardData.reset();
    // Reset lista dei trasferimenti
    trasferimenti.reset();
    // Reset lista delle linee vincolate
    vincoli = null;
    riepilogoVincoli.reset();
    // Reset lista delle linee vincolate
    andamenti.reset();
    // Reset lista oggetti flash
    xmlGraficoAndamenti = '';
    xmlGraficoRipartizione = '';
    resetHasErrors('#contenuti545');
};
// Inizializza la navigazione di primo livello 
var initNavigazioneRIA = function () {
    var tabRia2 = $('#tabRia2'),
        tabRia3 = $('#tabRia3');
    // Nasconde tutte le tab
    hideTabs('Ria');
    hideLightBox('conferma');
    hideLightBox('popUpMovimenti');
    if (dashboardData.tipoRapporto > 2) {
        if (tabRia2.length) {
            tabRia2.hide();
        }
        if (tabRia3.length) {
            tabRia3.hide();
        }
    } else {
        if (tabRia2.length) {
            tabRia2.show();
        }
    }
    var staticBoxRisp = $('#staticBoxRisp'),
        dynamicBoxRisp = $('#dynamicBoxRisp');
    $('#tassoUnico').show();
    $('#numDep').show();
    $('#tassiMultipli').hide();
    $('#infoRichieste2').removeClass('tassiMultipli');
    if (dashboardData.tipoRapporto === 2) { // Webank o Be 1
        staticBoxRisp.hide();
        dynamicBoxRisp.show();
    }
};
// Inizializza la RIA e le navigazioni interne 
var initRIA = function () {
    if (!isMissingData(dashboardData.carta) && dashboardData.carta) {
        $('#nascondi-div').hide();
    } else {
        $('#nascondi-div').show();
    }
    var contenuti545 = $('#contenuti545');
    contenuti545.show();
    $('#layerBianco').hide();
    // Nasconde le liste movimenti
    nascondiRigheMov();
    showLoadingRigheMov();
    associaLinkMov();
    switch (dashboardData.valuta) {
        case 'EUR':
            valutaHTML = '&euro;';
            valutaFlash = '&#128;';
            break;
        case 'USD':
            valutaHTML = '&#36;';
            valutaFlash = '&#36;';
            break;
        case 'JPY':
            valutaHTML = '&#165;';
            valutaFlash = '&#165;';
            break;
        case 'GBP':
            valutaHTML = '&#163;';
            valutaFlash = '&#163;';
            break;
        default:
            valutaHTML = dashboardData.valuta;
            valutaFlash = dashboardData.valuta;
    }
    contenuti545.add('.modal').find('.valuta').html(valutaHTML);
    contenuti545.find('.disclaimer').hide();
    initContentRia1();
};
// Inizializza la navigazione di primo livello
var initContentRia1 = function () {
    var content = $('#contentRia1');
    toggleTabConf.reset();
    toggleTabConf.suffix = 'Ria';
    toggleTabConf.num = 1;
    toggleTabConf.numElems = 5;
    toggleTabConf.effectName = 'slide';
    toggleTabConf.hasEffects = true;
    // Mostra la tab dopo che sono stati caricati i dati
    content.addClass('tab-content-on');
    content.on('content:loadComplete', toggleTabLoadCallback);
    loadContent('Ria', 1);
};
// ********** Eventi contenuto **********
var loadContent = function (suffix, index) {
    logMessage(logType.log, 'load' + suffix + index);
    functionOnContent('load', suffix, index);
};
var afterLoadContent = function (suffix, index) {
    logMessage(logType.log, 'afterLoad' + suffix + index);
    functionOnContent('afterLoad', suffix, index);
};
var unloadContent = function (suffix, index) {
    logMessage(logType.log, 'unload' + suffix + index);
    functionOnContent('unload', suffix, index);
};
var functionOnContent = function (prefix, suffix, index) {
    var contentFunction = prefix + 'Content' + suffix + index;
    // if (typeof console !== 'undefined') { console.log(prefix + 'Content' + suffix + index); }
    if (typeof window[contentFunction] === 'function') window[contentFunction].call(window, null, suffix, index);
    else fireEventOnContent(prefix + 'Complete', suffix, index);
};
var fireEventOnContent = function (prefix, suffix, index) {
    $('#content' + suffix + index).trigger("content:" + prefix, [suffix, index]);
};
var stopObservingEventOnContent = function (prefix, suffix, index) {
    $('#content' + suffix + index).unbind('content:' + prefix + 'Complete');
};
// Controlla che tutte le parti della dashboard siano caricate
var contentProgressCallBack = function (event) {
    var data = arguments;
    var prefix = data[1];
    var suffix = data[2];
    var index = data[3];
    var contentToLoad = data[4];
    var task = data[5];
    contentToLoad[task] = true;
    stopObservingEventOnContent(prefix, suffix, index);
    event.stopPropagation();
    if (contentToLoad.test()) {
        fireEventOnContent(contentToLoad.prefix + 'Complete', contentToLoad.suffix, contentToLoad.index);
    }
};
var checkProgressContent = function (prefix, suffix, index, contentProgress, task) {
    $('#content' + suffix + index).on('content:' + prefix + 'Complete', function (e) {
        contentProgressCallBack(e, prefix, suffix, index, contentProgress, task);
    });
};
var selectedContent = function (suffix) {
    var i = 0;
    while ($('#content' + suffix + (++i)).length) {
        var content = $('#content' + suffix + i),
            contentClass = getContentClass(suffix);
        // Chiude il contenuto
        if (content.hasClass(contentClass)) {
            return i;
        }
    }
};
var loadContentParams = function (data) {
    return {
        suffix: data[1],
        index: data[2]
    };
};
// ********** Gestori eventi contenuto **********
// Carica la dashboard
var loadContentRia1 = function () {
    /* Imposta altezza dashboard */
    var contentRia1 = $('#contentRia1');
    var apriOggi = $('#apriOggi');
    if ((dashboardData.promo || dashboardData.hasNonSvinc) && dashboardData.tipoRapporto <= 2) {
        if (dashboardData.tipoRapporto === 2) {
            apriOggi.addClass('em3box').show();
        } else {
            apriOggi.removeClass('em3box').show();
        }
        apriOggi.show().css({
            cursor: 'pointer'
        }).unbind('click').click(function (e) {
            changeItemAccordion(e, 3);
        });
    } else {
        apriOggi.hide();
    }
    // Imposta l'altezza del div della dashboard per migliorare, a livello visuale, l'effetto di transizione
    contentRia1.css({
        // height: divHeight + 'px',
        overflow: 'hidden'
    }); /* |FINE| Imposta altezza dashboard */
    caricaDashboard();
    caricaSessioneCarte();
};
var loadContentRia1Callback = function () {
    var prefix = 'load',
        indexLiquidita = 1,
        accordionSaldi = $('#accordionSaldi');
    if (pDis) resetErrorDiv('errorDiv1', ['etichettaCD', 'etichettaCC']);
    else resetErrorDiv('errorDiv1', []);
    // Chiude gli accordion
    accordionSaldi.find('.panel-accordion').removeClass('panel-selected').find('h4 a').addClass('collapsed').attr('aria-expanded', 'false');
    accordionSaldi.find('.panel-collapse').removeClass('in').attr('aria-expanded', 'false').css('height', 0);
    /* Configura l'accordion della dashboard */
    var boxSaldoCT = $('.boxSaldoCT'), // 0
        boxSaldoCC = $('.boxSaldoCC'), // 1
        boxSaldoCD = $('.boxSaldoCD'), // 2
        boxSaldoLV = $('.boxSaldoLV'), // 3
        boxSaldoDer = $('.boxSaldoCDER'), // 4	
        lastBox = null;
    boxSaldoCT.show();
    boxSaldoCC.show();
    boxSaldoCD.show();
    boxSaldoLV.show();
    boxSaldoDer.show();
    // alert(dashboardData.tipoRapporto);
    switch (dashboardData.tipoRapporto) {
        //-- Senza C/T --//
        case 4:
            boxSaldoCD.hide();
            boxSaldoLV.hide();
        /*falls through*/
        case 2:
            boxSaldoDer.hide();
        /*falls through*/
        case 1:
            boxSaldoCT.hide();
            break;
        case 3:
            boxSaldoCT.hide();
            boxSaldoCD.hide();
            boxSaldoLV.hide();
            break;
        //-- Con C/T --//
        case 6:
            boxSaldoDer.hide();
        /*falls through*/
        case 5:
            boxSaldoCC.hide();
            boxSaldoCD.hide();
            boxSaldoLV.hide();
            break;
    }
    switch (dashboardData.tipoRapporto) {
        case 1:
        case 3:
        case 5:
            lastBox = boxSaldoDer;
            break;
        case 2:
            lastBox = boxSaldoLV;
            break;
        case 4:
            lastBox = boxSaldoCC;
            break;
        case 6:
            lastBox = boxSaldoCT;
            break;
    }
    lastBox.addClass('boxSaldoLast');
    var contentBox = null,
        // Box grafico ripartizione
        titleTuoiSoldi = $('#titleTuoiSoldi'),
        tabLiquidita = $('#tabLiquidita'),
        ripartizioneLeft = $('#ripartizioneLeft'),
        // Box liquidit�  totale
        totLiquidita = $('#totLiquidita'),
        // Box banner incentivo bancarizzazione
        dashboardBanner = $('#dashboardBanner'),
        // Box trasferimenti veloci
        titleTrasferimento = $('#titleTrasferimento'),
        tabTrasferimento = $('#tabTrasferimento'),
        TrasferimentoLeft = $('#TrasferimentoLeft');
    $('#saldoDispCarta').hide();
    if (dashboardData.tipoRapporto <= 2) {
        accordionSaldi.find('.boxSaldo').each(function (index, item) {
            item = $(item);
            if (index > 0 && item.css('display') !== 'none') {
                contentBox = item.find('.brContent:first');
                contentBox.css('height', Math.round(changeItemAccordionConf['expandendHeight' + index] * changeItemAccordionConf['compactPercent' + index]) + 'px');
            }
        });
        accordionSaldi.removeClass('shortCol');
        titleTuoiSoldi.css('display', '');
        titleTrasferimento.show();
        tabTrasferimento.show();
        TrasferimentoLeft.show();
        $('#accordionPuls1').show();
        totLiquidita.hide();
        dashboardBanner.hide();
        var tabTrasferimento2 = $('#tabTrasferimento2');
        var legDerDiv = $('#legDerDiv');
        if (dashboardData.tipoRapporto === 2) {
            tabTrasferimento2.hide();
            legDerDiv.hide();
        } else {
            tabTrasferimento2.show();
            legDerDiv.show();
        }
        tabLiquidita.show();
        ripartizioneLeft.show();
        totLiquidita.hide();
        titleTuoiSoldi.removeClass('totSoldi');
    } else {
        if (dashboardData.tipoRapporto <= 4) {
            contentBox = $('#contentAccordion1');
            contentBox.css('height', changeItemAccordionConf.expandendHeight1 + 'px');
            contentBox.find('.infoRichieste:first').show();
            if (pDis) dashboardBanner.find('a:first').attr('href', links.linkBannerCC).attr('title', '').css({
                cursor: 'pointer'
            });
            else dashboardBanner.find('a:first').attr('href', '#').click(function () {
                return false;
            }).attr('title', 'Questa funzione non � disponibile nel profilo "Consultare".').css({
                cursor: 'default'
            });
            dashboardBanner[0].className = 'CCban';
            if (abilOroCap)
                if (dashboardData.tipoRapporto === 4) dashboardBanner.addClass('btnPatr');
                else dashboardBanner.addClass('btnPatr2');
        } else {
            $('#contentAccordion1').find('.infoRichieste:first').hide();
            if (pDis) dashboardBanner.find('a:first').attr('href', links.linkBannerCT).attr('title', '').css({
                cursor: 'pointer'
            });
            else dashboardBanner.find('a:first').attr('title', 'Questa funzione non � disponibile nel profilo "Consultare".').attr('href', '#').click(function () {
                return false;
            }).css({
                cursor: 'default'
            });
            dashboardBanner[0].className = 'CTbanS';
            if (abilOroCap)
                if (dashboardData.tipoRapporto === 6) dashboardBanner.addClass('btnPatr');
                else dashboardBanner.addClass('btnPatr2');
        }
        dashboardBanner.show();
        if (!accordionSaldi.hasClass('shortCol')) accordionSaldi.addClass('shortCol');
        tabLiquidita.hide();
        ripartizioneLeft.hide();
        titleTrasferimento.hide();
        tabTrasferimento.hide();
        TrasferimentoLeft.hide();
        if (dashboardData.tipoRapporto === 3) $('#accordionPuls1').show();
        else $('#accordionPuls1').hide();
        if (dashboardData.tipoRapporto === 3 || dashboardData.tipoRapporto === 5) {
            totLiquidita.show();
            titleTuoiSoldi.css('display', '');
            if (!titleTuoiSoldi.hasClass('totSoldi')) titleTuoiSoldi.addClass('totSoldi');
        } else {
            titleTuoiSoldi.hide();
            totLiquidita.hide();
        }
        var coordinateSep4 = $('#coordinateSep4');
        if (dashboardData.tipoRapporto !== 5) coordinateSep4.removeClass('lineSep2');
        else if (!coordinateSep4.hasClass('lineSep2')) coordinateSep4.addClass('lineSep2');
    } /* |FINE| Configura l'accordion della dashboard */
    // Rimette ad auto l'altezza in modo che, se necessario, possa espandersi
    $('#contentRia1').css({
        height: 'auto',
        overflow: 'visible'
    });
    accordionContentLoaded.reset();
    changeItemAccordionConf.reset();
    // Carica i sotto contenuti	
    contentProgressRia1.reset();
    contentProgressRia1.prefix = prefix;
    checkProgressContent(prefix, 'Liquidita', indexLiquidita, contentProgressRia1, 'liquidita');
    selectTab('Liquidita', indexLiquidita);
    selectTab('Trasferimento', 1);
};
// Modifica la dashboard dopo il caricamento completo
var afterLoadContentRia1 = function () {
    var prefix = 'afterLoad',
        indexLiquidita = 1;
    // Modifica i sotto contenuti
    contentProgressRia1.reset();
    contentProgressRia1.prefix = prefix;
    checkProgressContent(prefix, 'Liquidita', indexLiquidita, contentProgressRia1, 'liquidita');
    afterLoadContent('Liquidita', indexLiquidita);
    if (dashboardData.tipoRapporto === 3) {
        changeItemAccordion.call(window, null, 1);
    }
};
// Scarica la dashboard
var unloadContentRia1 = function () {
    var prefix = 'unload',
        indexLiquidita = selectedContent('Liquidita');
    // Modifica i sotto contenuti	
    contentProgressRia1.reset();
    contentProgressRia1.prefix = prefix;
    checkProgressContent(prefix, 'Liquidita', indexLiquidita, contentProgressRia1, 'liquidita');
    unloadContent('Liquidita', indexLiquidita);
};
// Carica i trasferimenti
var loadContentRia2 = function () {
    var prefix = 'load';
    var indexTrasf = 1;
    // Carica i sotto contenuti	
    contentProgressRia2.reset();
    contentProgressRia2.prefix = prefix;
    checkProgressContent(prefix, 'Trasf', indexTrasf, contentProgressRia2, 'trasf');
    selectTab('Trasf', indexTrasf);
};
var afterLoadContentRia2 = function () {
    var prefix = 'afterLoad';
    var indexTrasf = 1;
    // Modifica i sotto contenuti	
    contentProgressRia2.reset();
    contentProgressRia2.prefix = prefix;
    checkProgressContent(prefix, 'Trasf', indexTrasf, contentProgressRia2, 'trasf');
    afterLoadContent('Trasf', indexTrasf);
};
// Scarica i trasferimenti
var unloadContentRia2 = function () {
    var prefix = 'unload';
    var indexTrasf = selectedContent('Liquidita');
    // Modifica i sotto contenuti	
    contentProgressRia2.reset();
    contentProgressRia2.prefix = prefix;
    checkProgressContent(prefix, 'Trasf', indexTrasf, contentProgressRia2, 'trasf');
    unloadContent('Trasf', indexTrasf);
};
// Carica le linee vincolate 
var loadContentRia3 = function () {
    var prefix = 'load';
    // Carica i sotto contenuti	
    contentProgressRia3.reset();
    contentProgressRia3.prefix = prefix;
    var indexVinc = (lineeVincolateConf.indexTab === null) ? 1 : lineeVincolateConf.indexTab;
    checkProgressContent(prefix, 'Vinc', indexVinc, contentProgressRia3, 'vinc');
    selectTab('Vinc', indexVinc);
};
var afterLoadContentRia3 = function () {
    var prefix = 'afterLoad';
    var indexVinc = (lineeVincolateConf.indexTab === null) ? 1 : lineeVincolateConf.indexTab;
    // Modifica i sotto contenuti	
    contentProgressRia3.reset();
    contentProgressRia3.prefix = prefix;
    checkProgressContent(prefix, 'Vinc', indexVinc, contentProgressRia3, 'vinc');
    afterLoadContent('Vinc', indexVinc);
};
// Scarica le linee vincolate 
var unloadContentRia3 = function () {
    var indexVinc = selectedContent('Vinc');
    var prefix = 'unload';
    // Modifica i sotto contenuti	
    contentProgressRia3.reset();
    contentProgressRia3.prefix = prefix;
    checkProgressContent(prefix, 'Vinc', indexVinc, contentProgressRia3, 'vinc');
    unloadContent('Vinc', indexVinc);
};
// Carica
var loadContentAccordion1 = function () {
    var params = loadContentParams(arguments);
    // Evita di ricaricare i dati ogni volta che apri un item
    if (!accordionContentLoaded.contentCC) caricaContentCC(params.suffix, params.index);
    else loadContentAccordion1Callback(params.suffix, params.index);
};
var loadContentAccordion1Callback = function (suffix, index) {
    fireEventOnContent('loadComplete', suffix, index);
};
// Modifica
var afterLoadContentAccordion1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentAccordion1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentAccordion2 = function () {
    var params = loadContentParams(arguments);
    // Evita di ricaricare i dati ogni volta che apri un item
    if (!accordionContentLoaded.contentCD) caricaContentCD(params.suffix, params.index);
    else loadContentAccordion2Callback(params.suffix, params.index);
};
var loadContentAccordion2Callback = function (suffix, index) {
    fireEventOnContent('loadComplete', suffix, index);
};
// Modifica
var afterLoadContentAccordion2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentAccordion2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentAccordion3 = function () {
    var params = loadContentParams(arguments);
    if (dashboardData.promo || dashboardData.hasNonSvinc) $('#apriOggi').hide().css({
        cursor: 'default'
    }).unbind('click');
    // Evita di ricaricare i dati ogni volta che apri un item
    if (!accordionContentLoaded.contentLV || dashboardData.hasNonSvinc) {
        caricaContentLV(params.suffix, params.index);
    } else loadContentAccordion3Callback(params.suffix, params.index);
};
var loadContentAccordion3Callback = function (suffix, index) {
    fireEventOnContent('loadComplete', suffix, index);
};
// Modifica
var afterLoadContentAccordion3 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentAccordion3 = function () {
    var params = loadContentParams(arguments);
    if (dashboardData.promo || dashboardData.hasNonSvinc) {
        $('#apriOggi').show().css({
            cursor: 'pointer'
        }).click(function (e) {
            changeItemAccordion(e, 3);
        });
    }
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentAccordion4 = function () {
    var params = loadContentParams(arguments);
    if (dashboardData.tipoRapporto === 5) {
        var dashboardBanner = $('#dashboardBanner');
        dashboardBanner[0].className = 'CTbanB';
        if (abilOroCap) {
            dashboardBanner.addClass('btnPatr');
        }
    }
    // Evita di ricaricare i dati ogni volta che apri un item
    if (!accordionContentLoaded.contentCDER) {
        caricaContentCDER(params.suffix, params.index);
    } else {
        loadContentAccordion4Callback(params.suffix, params.index);
    }
};
var loadContentAccordion4Callback = function (suffix, index) {
    fireEventOnContent('loadComplete', suffix, index);
};
// Modifica
var afterLoadContentAccordion4 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentAccordion4 = function () {
    var params = loadContentParams(arguments);
    if (dashboardData.tipoRapporto === 5) {
        var dashboardBanner = $('#dashboardBanner');
        dashboardBanner[0].className = 'CTbanS';
        if (abilOroCap) {
            dashboardBanner.addClass('btnPatr');
        }
    }
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica la ripartizione della liquidita'
var loadContentLiquidita1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica la ripartizione della liquidita' dopo il caricamento completo
var afterLoadContentLiquidita1 = function () {
    var params = loadContentParams(arguments),
        json = creaJsonGraficoRipartizione();
    // PIE CHART
    graficoConti1 = AmCharts.makeChart("graficoContiDiv", json[0]);
    // PIE CHART 2
    graficoConti2 = AmCharts.makeChart("graficoContiDivInner", json[1]);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica la ripartizione della liquidita'
var unloadContentLiquidita1 = function () {
    var params = loadContentParams(arguments);
    graficoConti1.clear();
    graficoConti2.clear();
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica la ripartizione della liquidita'
var loadContentLiquidita2 = function () {
    var params = loadContentParams(arguments);
    if (andamenti.contoCorrente.length || andamenti.contoDeposito.length) {
        caricaAndamenti(params.suffix, params.index);
    } else {
        loadContentLiquidita2Callback(params.suffix, params.index);
    }
};
var loadContentLiquidita2Callback = function (suffix, index) {
    fireEventOnContent('loadComplete', suffix, index);
};
// Modifica la ripartizione della liquidita' dopo il caricamento completo
var afterLoadContentLiquidita2 = function () {
    var params = loadContentParams(arguments);
    var graficoAndamentiObj = $('#graficoAndamenti');
    if (graficoAndamentiObj.length) {
        graficoAndamentiObj.show();
    }
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica la ripartizione della liquidita'
var unloadContentLiquidita2 = function () {
    var params = loadContentParams(arguments);
    var graficoAndamentiObj = $('#graficoAndamenti');
    if (graficoAndamentiObj.length) {
        graficoAndamentiObj.hide();
    }
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica la ripartizione della liquidita'
var loadContentTrasferimento1 = function () {
    var params = loadContentParams(arguments);
    if (pDis) {
        resetCCCDdiventa();
    }
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica la ripartizione della liquidita' dopo il caricamento completo
var afterLoadContentTrasferimento1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica la ripartizione della liquidita'
// noinspection JSUnusedGlobalSymbols
var unloadContentTrasferimento1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica la ripartizione della liquidita'
var loadContentTrasferimento2 = function () {
    var params = loadContentParams(arguments);
    resetCCDerDiventa();
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica la ripartizione della liquidita' dopo il caricamento completo
// noinspection JSUnusedGlobalSymbols
var afterLoadContentTrasferimento2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica la ripartizione della liquidita'
// noinspection JSUnusedGlobalSymbols
var unloadContentTrasferimento2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentTrasf1 = function () {
    var params = loadContentParams(arguments);
    // Nasconde div per errori
    resetErrorDiv('errorDiv2', ['etichettaCDversamenti', 'etichettaCCversamenti']);
    // Carica la data da usare nei trasferimenti
    caricaSingolaDataValuta();
    // reset trasferimenti
    resetCCCDdiventaTr();
    resetFocus('CC');
    resetFocus('CD');
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica
var afterLoadContentTrasf1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentTrasf1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentTrasf2 = function () {
    var params = loadContentParams(arguments);
    resetNuovoTrasferimentoRic(false);
    if (!riepilogoVincoli.lista.length) {
        caricaListaLineeVincolate();
    }
    $("#aPartireDaTRf").datepicker({
        minDate: 1,
        showOtherMonths: true,
        showOn: "button",
        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
        buttonImage: "/img/ret/pixel_trasp.gif",
        buttonImageOnly: true,
        beforeShow: renderPickDateMobile, // funzione per far si che si apra come overlayer su mobile
        onClose: function () {
            $('#datePickerWrapper').modal('hide');
        }
    }).mask("99/99/9999");
    appendDatePickerIcon('aPartireDaTRf');
    $('#contentTrasf2').on('content:caricaListaTRicComplete', loadContentTrasf2Callback);
    if (!trasferimenti.lista.length) {
        caricaListaTRic();
    } else {
        fireEventOnContent('caricaListaTRicComplete', params.suffix, params.index);
    }
};
// Carica
var loadContentTrasf2Callback = function () {
    $('#contentTrasf2').unbind('content:caricaListaTRicComplete');
    var show = '1',
        hide = '2';
    if (!trasferimenti.lista.length) {
        show = '2';
        hide = '1';
    }
    $('#contentTrasfRicorr' + show).addClass('in');
    $('#contentTrasfRicorr' + hide).removeClass('in');
    resetErrorDiv('errorDiv3', ['labelImportoTR', 'labelApartireDaTR', 'labelNumeroTR']);
    fireEventOnContent('loadComplete', 'Trasf', 2);
};
// Modifica
var afterLoadContentTrasf2 = function () {
    var params = loadContentParams(arguments);
    popolaTabellaTS();
    // WRITE
    setTimerGraficoProiezioneTRic(0);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentTrasf2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentVinc1 = function () {
    var params = loadContentParams(arguments),
        el = $('#contentVinc1').find('.boxExp');
    el.find('.boxExpBottom').hide().attr('data-status', 'close');
    el.find('.expTextIco').removeClass('open');
    $('#collapseLVNote').collapse('hide');
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica
var afterLoadContentVinc1 = function () {
    $('#contentVinc1').css('overflow', "hidden");
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentVinc1 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Carica
var loadContentVinc2 = function () {
    var params = loadContentParams(arguments),
        el = $('#contentVinc2').find('.boxExp');
    el.find('.boxExpBottom').hide().attr('data-status', 'close');
    el.find('.expTextIco').removeClass('open');
    $('#collapseLVNote2').collapse('hide');
    resetErrorDiv('errorDiv5', ['labelImportoNuovaLV']);
    // il margine da visualizzare deve essere quello al netto dei preavvisi
    if (vincoli === null || dashboardData.hasNonSvinc) {
        caricaContentLV();
    }
    var margineNoPreav = formattaNumOutput(dashboardData.contoDeposito.margineNoPreav);
    $('#dispTrasfEM').html(margineNoPreav);
    $('#collapseDispDep').collapse('hide');
    $('#importoCDLV, #importoNuovaLV, #importoNuovaEM').val('');
    $('#guadagnoEMint').html('0');
    $('#guadagnoEMdec').html('00');
    fireEventOnContent('loadComplete', params.suffix, params.index);
};
// Modifica
var afterLoadContentVinc2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
// Scarica
var unloadContentVinc2 = function () {
    var params = loadContentParams(arguments);
    fireEventOnContent('unloadComplete', params.suffix, params.index);
};
// Modifica
var afterLoadContentTrasfRicorr2 = function () {
    var params = loadContentParams(arguments);
    creaGraficoProiezioneTRic();
    fireEventOnContent('afterLoadComplete', params.suffix, params.index);
};
var openTutorial = function () {
    var i, selectedTab, popupTutorial, tabRiaItem;
    selectedTab = 0;
    // Calcolo del tab selezionato
    for (i = 1; i <= 4; i++) {
        tabRiaItem = $('#tabRia' + i);
        if (tabRiaItem.length) {
            if (tabRiaItem.hasClass('on')) selectedTab = i;
        }
    }
    // Se la finestra � gia aperta, la ricarica
    popupTutorial = window.open('/webankpub/wb/tutorial.jsp?section=' + selectedTab, 'Tutorial', 'height=500,width=850');
    if (window.focus) popupTutorial.focus();
    return false;
};
var resetTAB = function () {
    resetHasErrors('#contenuti545');
};
var extraMoneyOnOff = function (saldoFresh) {
    var boxEM = $('#infoRichieste3 .extraMoney:first');
    var contentExtraMoney = $('#contentExtraMoney');
    var nuovaEM = $('#nuovaEM');
    var importoNuovaEM = $('#importoNuovaEM');
    if (saldoFresh > 0) {
        if (pDis) {
            $('#apriOraEM').attr('src', '/img/ret/ria_btn_apriora.gif');
            $('#saldoEM').html(formattaNumero(saldoFresh));
            contentExtraMoney.removeClass('off');
            nuovaEM.removeClass('noEM');
            importoNuovaEM.removeClass('disabled').removeAttr('disabled');
        }
        if (boxEM.length) {
            boxEM.removeClass('EMoff');
        }
    } else {
        if (pDis) {
            $('#apriOraEM').attr('src', '/img/ret/ria_btn_apriora_emoff.gif');
            $('#saldoEM').html(formattaNumero(0));
            importoNuovaEM.attr('disabled', true);
            nuovaEM.addClass('noEM').unbind('click');
            if (!contentExtraMoney.hasClass('off')) {
                contentExtraMoney.addClass('off');
            }
            if (!importoNuovaEM.hasClass('disabled')) {
                importoNuovaEM.addClass('disabled');
            }
        }
        if (boxEM.length && !boxEM.hasClass('EMoff')) {
            boxEM.addClass('EMoff');
        }
    }
};
var dettagliMov = {};
// Mostra dettagli movimenti c/c
var showVediDettaglio = function (e, index) {
    var el = $(e.target);
    var div = el.closest('.sx').find('.dettaglio:first');
    var contoSelezionato = encodeURIComponent($('#selectConti').val());
    if (div.is(':visible')) {
        div.hide();
        el.html('Vedi dettagli');
    } else {
        if (dettagliMov[contoSelezionato + index]) div.html(dettagliMov[contoSelezionato + index]).show();
        else caricaDettMovimento(index);
        el.html('Nascondi dettagli');
    }
};
// Funzione per il reset dell'animazione trasferimenti cc cd dashboard
var resetCCCDdiventa = function () {
    $('#importoCC').val('');
    $('#importoCD').val('');
    setHasErrors([], $('#trasferimentiBox1'));
};
// Funzione per il reset dell'animazione trasferimenti cc der dashboard
var resetCCDerDiventa = function () {
    $('#importoCC2').val('');
    $('#importoCDER').val('');
    setHasErrors([], $('#trasferimentiBox2'));
};
// Funzione per il reset dell'animazione trasferimenti cc cd trasferimenti
var resetCCCDdiventaTr = function () {
    $('.diventaCCTr').html(formattaNumero(dashboardData.contoCorrente.margine));
    $('.diventaCDTr').html(formattaNumero(dashboardData.contoDeposito.margine));
    $('#importoCCversamenti').val('');
    $('#importoCDversamenti').val('');
    setHasErrors([], $('#trasferimentiBox3'));
};
