/* jshint strict: false */
/* global $, AmCharts, escape, printLog, lowerZIndex, riseZIndex,
	setOverOption, unSetOverOption, updateStar, focusOptionDownRapp, focusOptionUpRapp, jqc,
	moveToInteger, format2DecNum, setOverSelectRapp, unSetOverSelectRapp	*/
/* exported oroDelCapitano */

// noinspection JSUnusedGlobalSymbols
var oroDelCapitano = (function () {
    /*** GRAFICO POSIZIONE FINANZIARIA INTEGRATA - ORO DEL CAPITANO  ***
     *
     * @author      Andrea Colanicchia
     */
    "use strict";
    /* GRAFICO - Variabili globali */
    var debugOroCapitano = false,
        chartIsBuilding = false,
        chart2IsBuilding = false,
        legendaFxIsRunning = false,
        legenda2FxIsRunning = false,
        jsonData = {},
        colorsHash = {},
        favAccount = null,
        ctAccounts = [],
        forcePerc = true,
        colorsArr = [],
        chartPatrimonio = '#chartPatrimonio',
        subChartPatrimonio = '#subChartPatrimonio',
        sliceOvered = { '#chartPatrimonio': -1, '#subChartPatrimonio': -1 },
        htmlClick = false,
        htmlOver = false,
        htmlOut = false,
        flashChart = { '#chartPatrimonio': null, '#subChartPatrimonio': null },
        jsChart = { '#chartPatrimonio': null, '#subChartPatrimonio': null },
        eventHandlerLoaded = false,
        subChartLoaded = -1,
        isChartLoaded = false,
        isSubChartLoaded = false,
        reloadChart = 0,
        reloadSubChart = 0,
        expandableLabel = {
            '1': false,
            '4': false,
            '5': false
        },
        coveringDiv = null,
        coveringDiv2 = null,
        labelActiveEls = null,
        subLabelActiveEls = null,
        link_fp_investimenti = null,
        ombraSubGrafBottom, noChartTitle, jsChartPrintClass,
        sceltaRapportoFP, sceltaRapportoValFP, parameters, conto, closeOnBlur2, hiddenIds2,
        // Metodi
        sceltaRapportoFuncFP, removeBoxTesto, removeBoxTestoSuccess, loadFailure,
        resetChart, initStaticLinks, initDinamicLinks, initEventHandler, initSubEventHandler,
        initChart, initSubChart, labelSubLegendaClick, labelLegendaClick, subLegendaLVLoad, subLegendaOpen,
        createLabelActiveEls, findLegendaEl, findChartInd, findElNum, preventOtherHandlers,
        jsSliceClick, jsRollOverSlice, jsRollOutSlice, jsSubSliceClick, jsSubRollOverSlice, jsSubRollOutSlice,
        doSliceClick, doSliceOver, doSliceOut, amChartInited, loadChartData, parseChartData, parseLVData, readData,
        readSettings, reloadAll,
        createSelectRapp2, preventClosingSelector2, setValueSelectRapp2,
        observeOptionEvents2, observeSelectRappEvents2, toggleSelectRapp2, closeSelectRapp2, init;
    /* |FINE| GRAFICO - Variabili globali */


    /* GRAFICO - Dati di configurazione */
    jsonData['0'] = {
        "1": { "value": null, "title": "Saldo disponibile del cc" },
        "2": { "value": null, "title": "Saldo deposito libero" },
        "3": { "value": null, "title": "Saldo linee vincolate" },
        "4": { "value": null, "title": "Saldo disponibile derivati" },
        "5": { "value": null, "title": "Portafoglio titoli" },
        "6": { "value": null, "title": "Portafoglio fondi e sicav" },
        "7": { "value": null, "title": "Totale Pronti contro termine" }
    };
    jsonData['1'] = {
        "1": { "value": null, "title": "Saldo contabile" },
        "2": { "value": null, "title": "Totale impegni banking" },
        "3": { "value": null, "title": "Totale impegni trading" },
        "4": { "value": null, "title": "Totale preavvisi trading" },
        "5": { "value": null, "title": "Totale impegni fondi" },
        "6": { "value": null, "title": "Totale preavvisi fondi" }
    };
    jsonData['3'] = null;
    jsonData['4'] = {
        "1": { "value": null, "title": "Liquidità impegnata per operatività intraday" },
        "2": { "value": null, "title": "Margini iniziali derivati (Idem, Eurex, CME, LIFFE)" }
    };
    jsonData['5'] = {
        "1": { "value": null, "title": "Azioni Italia" },
        "2": { "value": null, "title": "Azioni estero" },
        "3": { "value": null, "title": "Obbligazioni" },
        "4": { "value": null, "title": "Derivati" },
        "5": { "value": null, "title": "CW / Certificates" },
        "6": { "value": null, "title": "Etf" },
        "7": { "value": null, "title": "Marginazione" }
    };
    colorsHash['0'] = {
        "1": "#00331d",
        "2": "#016725",
        "3": "#7e9732",
        "4": "#ced786",
        "5": "#102943",
        "6": "#5cbce2",
        "7": "#aed9ea"
    };
    colorsHash['1'] = {
        "1": "#00561e",
        "2": "#00782a",
        "3": "#009a35",
        "4": "#00bc41",
        "5": "#00de4d",
        "6": "#01ff59"
    };
    colorsHash['3'] = {
        "1": "#a4c857",
        "2": "#b2d170",
        "3": "#c0d98a",
        "4": "#cee1a4"
    };
    colorsHash['4'] = {
        "1": "#d6df9e",
        "2": "#e1e7b7"
    };
    colorsHash['5'] = {
        "1": "#1a426c",
        "2": "#245b95",
        "3": "#2d75be",
        "4": "#5997d7",
        "5": "#82b0e1",
        "6": "#b8d3ee",
        "7": "#e2edf8"
    };
    /* |FINE| GRAFICO - Dati di configurazione */

    /* GRAFICO - Inizializzazione */
    init = function () {
        var grafPatrimonio = $('#grafPatrimonio'),
            boxTesto = $('#boxTesto'),
            noChartText = $('#noChartText'),
            topPx = '25px',
            topPx2 = '37px';

        if (grafPatrimonio.hasClass('visibleText') && boxTesto) {
            topPx = '90px';
            topPx2 = '82px';
            noChartText.click(function (e) {
                preventOtherHandlers(e);
                removeBoxTesto();
            });
        }

        ombraSubGrafBottom = $('#ombraSubGrafBottom');

        noChartTitle = 'Impossibile visualizzare il grafico se sono presenti soltanto voci con importo negativo o pari a 0 ';
        coveringDiv = $('<div>', { id: 'coveringDiv' }).css({
            position: 'absolute',
            top: topPx,
            left: '22px',
            height: '278px',
            width: '380px',
            backgroundColor: 'transparent',
            display: 'none',
            zIndex: 50
        }).append($('<a>', { href: '#!', title: noChartTitle }).css({
            display: 'block',
            margin: 0,
            padding: 0,
            border: '0 none',
            height: '278px',
            width: '380px'
        }));
        coveringDiv2 = $('<div>', { id: 'coveringDiv2' }).css({
            position: 'absolute',
            top: topPx2,
            left: '75px',
            height: '200px',
            width: '240px',
            backgroundColor: '#ffffff',
            display: 'none',
            zIndex: 50
        }).append($('<a>', { href: '#!', 'title': noChartTitle }).css({
            display: 'block',
            margin: 0,
            padding: 0,
            border: '0 none',
            height: '200px',
            width: '240px'
        }));

        grafPatrimonio.append(coveringDiv);
        ombraSubGrafBottom.append(coveringDiv2);

        jsChartPrintClass = '';

        if (jsChartPrintClass !== '') {
            $(chartPatrimonio).addClass(jsChartPrintClass);
            $(subChartPatrimonio).addClass(jsChartPrintClass);
        }

        // Creazione della select multipla dei conti
        sceltaRapportoFP = $('#sceltaRapportoFP');
        sceltaRapportoValFP = $('#sceltaRapportoValFP').val();
        parameters = {
            "accounts": sceltaRapportoValFP,
            "cf": Math.random()
        };

        if (sceltaRapportoFP.length) {
            createSelectRapp2('#sceltaRapportoFP', '#sceltaRapportoValFP', sceltaRapportoFuncFP);

            sceltaRapportoFP.find('.selectorOptions').each(function (index, item) {
                item = $(item);
                var value = item.val();
                if (item.hasClass('favorite')) {
                    favAccount = value;
                }
                if (item.hasClass('technical')) {
                    ctAccounts.push(value);
                }
            });
        } else {
            conto = $.trim($('.selectRappOut:first').html());
            if (conto.substr(0, 2) === 'CT') {
                ctAccounts.push(sceltaRapportoValFP);
            }
        }

        initStaticLinks();

        // Caricamento dei dati in legenda e creazione del grafico
        loadChartData(parameters);
    };

    loadFailure = function (jqXHR, textStatus, errorThrow) {
        console.log('textStatus: ' + textStatus + ' - errorThrow: ' + errorThrow)
    };

    sceltaRapportoFuncFP = function (option) {
        // Testo selezione: option.text
        // Valore selezione: option.value
        // alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
        // valorizzo in modo corretto il link per export in excel
        var linkExportXls = $('#exportXls'),
            urlExportXls = "/webankpri/goToTradDirect/trading/posizioneFinanziaria.action?format=xls&accounts=" + encodeURIComponent(option.value),
            parameters = {
                "accounts": option.value,
                "cf": Math.random()
            };
        if (linkExportXls.length) {
            linkExportXls.href = urlExportXls;
        }
        linkExportXls = $('#exportXlsIco');
        if (linkExportXls.length) {
            linkExportXls.href = urlExportXls;
        }
        resetChart();
        loadChartData(parameters);
    };

    removeBoxTesto = function () {
        $.ajax({
            "type": "post",
            "dataType": "json",
            "url": mioPatrimonioLinks.dispoLinks.removeBoxTesto,
            "success": removeBoxTestoSuccess,
            "error": loadFailure
        });
    };

    removeBoxTestoSuccess = function () {
        $('#grafPatrimonio').removeClass('visibleText');
        $('#coveringDiv').css({ top: '25px' });
        $('#coveringDiv2').css({ top: '37px' });
    };

    resetChart = function () {
        var $legendaBody = $('#legendaBody');
        //var queue = Effect.Queues.get('chart');
        // Blocco tutte le animazioni
        //queue.each(function (effect) { effect.cancel(); });
        isChartLoaded = isSubChartLoaded = false;
        subChartLoaded = -1;
        // Svuoto le sottovoci delle linee vincolate
        jsonData['3'] = null;
        $legendaBody.find('.panel-collapse').collapse('hide');
        $legendaBody.find('.grafLegenda>.panel-default').each(function (index, item) {
            item = $(item);
            if (item.hasClass('btnBgPort')) {
                item.hide();
            } else {
                item.removeClass('disabled').removeClass('selected');
            }
        });
        $legendaBody.find('.subLegenda>.saldoRow').removeClass('disabled selected');
        $('#coveringDiv').removeClass('empty').hide();
        $('#coveringDiv2').removeClass('empty').hide();
        $('#subGrafPatrimonio').css('opacity', 0);
        $('#subChartPatrimonio').html('');
    };

    initStaticLinks = function () {
        var cf = Math.random(),
            selAccounts = $('#sceltaRapportoValFP').val().split(','),
            hasCT = false;
        $.each(selAccounts, function (index, account) {
            if ($.inArray(account, ctAccounts) !== -1) {
                hasCT = true;
            }
        });
        if (hasCT) {
            $('#boxContoDeposito').find(' a').attr('href', mioPatrimonioLinks.staticLinks.cdDetail + '&cf=' + cf);
        } else {
            $('#boxContoDeposito').find('a').attr('href', mioPatrimonioLinks.staticLinks.cdPromo + '&cf=' + cf);
        }
    };

    initDinamicLinks = function () {
        var cf = Math.random(),
            selAccounts = $('#sceltaRapportoValFP').val().split(','),
            hasCT = false,
            linkDett1 = null,
            linkDett2 = null,
            linkDett3 = null,
            account;
        $.each(selAccounts, function (index, account) {
            if ($.inArray(account, ctAccounts) !== -1) {
                hasCT = true;
            }
        });

        //*** LIQUIDITA' ***
        if (!hasCT) {
            // Link CC, CD e DER senza CT
            if (selAccounts.length > 1) {
                linkDett1 = mioPatrimonioLinks.dynamicLinks.dett1CCMulti + '&cf=' + cf;
                linkDett2 = linkDett1;
                linkDett3 = linkDett1;
            } else {
                linkDett1 = mioPatrimonioLinks.dynamicLinks.dett1CCSingle + '&cf=' + cf + '&CC=' + encodeURIComponent(selAccounts[0]);
                linkDett2 = mioPatrimonioLinks.dynamicLinks.dett2CCSingle + '&cf=' + cf + '&accountId=' + encodeURIComponent($('#contodep').val());
                linkDett3 = mioPatrimonioLinks.dynamicLinks.dett3CCSingle + '&cf=' + cf + '&DER=' + encodeURIComponent($('#contoder').val());
            }
        } else {
            // Link CC, CD e DER con CT
            if (selAccounts.length > 1) {
                linkDett1 = mioPatrimonioLinks.dynamicLinks.dett1CTMulti + '&cf=' + cf;
                linkDett2 = linkDett1;
                linkDett3 = linkDett1;
            } else {
                linkDett1 = mioPatrimonioLinks.dynamicLinks.dett1CTSingle + '&cf=' + cf + '&CC=' + encodeURIComponent(selAccounts[0]);
                linkDett2 = mioPatrimonioLinks.dynamicLinks.dett2CTSingle + '&cf=' + cf + '&accountId=' + encodeURIComponent($('#contodep').val());
                linkDett3 = mioPatrimonioLinks.dynamicLinks.dett3CTSingle + '&cf=' + cf + '&DER=' + encodeURIComponent($('#contoder').val());
            }
        }
        $('#valLegenda1').attr('data-href', linkDett1);
        $('#valLegenda2').attr('data-href', linkDett2);
        $('#valLegenda4').attr('data-href', linkDett3);

        account = null;

        if (favAccount && $.inArray(favAccount, selAccounts) !== -1) {
            account = favAccount;
        } else {
            account = selAccounts[0];
        }

        // Link alle linee vincolate
        $('#valLegenda3').attr('data-href', mioPatrimonioLinks.dynamicLinks.legenda3 + encodeURIComponent(account) + '&cf=' + cf);
        $('#valLegenda5').attr('data-href', mioPatrimonioLinks.dynamicLinks.legenda5 + encodeURIComponent(account) + '&cf=' + cf);
        $('#valLegenda6').attr('data-href', mioPatrimonioLinks.dynamicLinks.legenda6 + encodeURIComponent(account) + '&cf=' + cf);
        $('#valLegenda7').attr('data-href', mioPatrimonioLinks.dynamicLinks.legenda7 + encodeURIComponent(account) + '&cf=' + cf);
    };

    initEventHandler = function () {
        var legendaBody = $('#legendaBody');

        if (debugOroCapitano) {
            printLog('initEventHandler');
        }

        eventHandlerLoaded = true;

        legendaBody.find('.grafLegenda>.panel-default>.panel-heading a').off('click');
        legendaBody.on('click', '.grafLegenda .panel-heading .icon-arrow_down, .grafLegenda .panel-heading .icon-arrow_up', function (e) {
            var $el = $(this).closest('a'),
                $target = $(e.target),
                $collapse, chartInd,
                $panelDefault = $el.closest('.panel-default');
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning &&
                !$target.hasClass('icoLegenda') && !$target.hasClass('icon-small-attivo') &&
                $panelDefault.hasClass('active')) {
                preventOtherHandlers(e);
                // Trova l'indice della fetta del grafico
                chartInd = findChartInd(chartPatrimonio, $panelDefault);
                labelLegendaClick($el.find('.labelLegenda'), $panelDefault, chartInd, 'html');
                $collapse = $($el.attr('href'));
                $collapse.collapse('toggle');
                legendaBody.find('.panel-collapse').not($collapse).collapse('hide');
            }
        }).on('mouseover', '.grafLegenda .panel-heading .icoLegenda', function (event) {
            preventOtherHandlers(event);
            // Applica lo stile over alla voce della legenda
            var panelDefault = $(event.target).closest('.panel-default').addClass('over'),
                // Trova l'indice della voce della legenda
                elNum = findElNum(panelDefault), chartInd;

            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce abbia valore positivo
            // - la voce sia espandibile
            // - la voce non sia disabilitata
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && elNum > 0 && jsonData[0][elNum].value > 0 && panelDefault.hasClass('active') && !panelDefault.hasClass('disabled')) {
                // Trova l'indice della fetta del grafico
                chartInd = findChartInd(chartPatrimonio, panelDefault);

                // Imposta che l'evento è partito da un elemento HTML e non dal grafico
                htmlOver = true;

                // Lancia l'evento di mouseover dalla fetta del grafico, mostra il tooltip
                jsChart[chartPatrimonio].rollOverSlice(chartInd);
            }
        }).on('mouseout', '.grafLegenda .panel-heading .icoLegenda', function (event) {
            preventOtherHandlers(event);
            // Toglie lo stile over alla voce della legenda
            var panelDefault = $(event.target).closest('.panel-default').removeClass('over'), elNum, chartInd;

            // Trova l'indice della voce della legenda
            elNum = findElNum(panelDefault);

            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce abbia valore positivo
            // - la voce sia espandibile
            // - la voce non sia disabilitata
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && elNum > 0 && jsonData[0][elNum].value > 0 && panelDefault.hasClass('active') && !panelDefault.hasClass('disabled')) {
                // Trova l'indice della fetta del grafico
                chartInd = findChartInd(chartPatrimonio, panelDefault);

                // Imposta che l'evento è partito da un elemento HTML, e non dal grafico
                htmlOut = true;

                // Lancia l'evento di mouseout dalla fetta del grafico, nasconde il tooltip
                jsChart[chartPatrimonio].rollOutSlice(chartInd);
            }
        }).on('click', '.grafLegenda .panel-heading .icoLegenda', function (event) {
            var el, panelDefault, elNum, subLegenda, func;
            preventOtherHandlers(event);
            if (debugOroCapitano) {
                printLog('CLICK test: chartIsBuilding:' + chartIsBuilding.toString());
                printLog('CLICK test: chart2IsBuilding:' + chartIsBuilding.toString());
            }
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning) {
                chartIsBuilding = true;
                if (debugOroCapitano) {
                    printLog('CLICK: chartIsBuilding = true');
                }
                el = $(event.target);
                panelDefault = el.closest('.panel-default');
                // Controlla che la voce sia espandibile
                if (panelDefault.hasClass('active')) {
                    elNum = findElNum(panelDefault);
                    subLegenda = $('#subLegenda' + elNum);
                    // Controlla che la voce non sia disabilitata
                    if (!panelDefault.hasClass('disabled')) {
                        // Disabilita la voce
                        panelDefault.removeClass('selected').addClass('disabled');
                        // Se è espandibile, e le sottovoci sono visibili, le nasconde
                        if (expandableLabel[elNum] && subLegenda.length && subLegenda.is(':visible')) {
                            // Imposta: un'animazione in esecuzione
                            legendaFxIsRunning = true;
                            // Mostra il div che copre il grafico, per prevenire click durante l'animazione
                            $('#coveringDiv').show();
                            // Nasconde la sottotorta
                            if (elNum !== '1') {
                                $('#subGrafPatrimonio').animate({ opacity: 0 }, function () {
                                    $('#subChartPatrimonio').html('');
                                });
                            }
                            // Nasconde le sottovoci
                            subLegenda.collapse('hide');
                            func = function () {
                                // Alla fine dell'animazione per il nascondimento delle sottovoci
                                var coveringDiv = $('#coveringDiv');
                                // Nasconde il div che preveniva click sul grafico
                                if (!coveringDiv.hasClass('empty')) {
                                    coveringDiv.hide();
                                }
                                // Nasconde le sottovoci
                                subLegenda.hide();
                                // Allontana il box della legenda, per la stampa
                                $('#contenuti').find('.expandable:first').removeClass('near');
                                // Imposta: nessuna animazione in esecuzione
                                legendaFxIsRunning = false;
                                // Imposta: nessun sottografico caricato
                                isSubChartLoaded = false;
                            };
                            setTimeout(func, 500);
                        }
                    }
                    // Altrimenti, la riabilita
                    else {
                        // Riabilita la voce
                        panelDefault.removeClass('disabled');
                    }
                    // Ricalcola il grafico dopo aver abilitato/disabilitato la fetta
                    reloadAll(0);
                } else {
                    // Abilita/disabilita la fetta
                    if (!panelDefault.hasClass('disabled')) {
                        panelDefault.addClass('disabled');
                    } else {
                        panelDefault.removeClass('disabled');
                    }
                    // Ricalcola il grafico dopo aver abilitato/disabilitato la fetta
                    reloadAll(0);
                }
            }
        }).on('mouseover', '.grafLegenda .panel-heading .labelLegenda', function (event) {
            var el = $(event.target),
                panelDefault = el.closest('.panel-default'),
                // Trova l'indice della voce della legenda
                elNum = findElNum(panelDefault),
                chartInd;
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce abbia valore positivo
            // - la voce sia espandibile
            // - la voce non sia disabilitata
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && elNum > -1 && jsonData[0][elNum].value > 0 && panelDefault.hasClass('active') && !panelDefault.hasClass('disabled')) {
                // Trova l'indice della fetta del grafico
                chartInd = findChartInd(chartPatrimonio, panelDefault);
                // Imposta che l'evento è partito da un elemento HTML, e non dal grafico
                htmlOver = true;
                // Lancia l'evento di mouseover dalla fetta del grafico, nasconde il tooltip
                jsChart[chartPatrimonio].rollOverSlice(chartInd);
            }
        }).on('mouseout', '.grafLegenda .panel-heading .labelLegenda', function (event) {
            var el = $(event.target),
                panelDefault = el.closest('.panel-default'),
                // Trova l'indice della voce della legenda
                elNum = findElNum(panelDefault), chartInd;
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce abbia valore positivo
            // - la voce sia attiva
            // - la voce non sia disabilitata
            if (!chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && elNum > -1 && jsonData[0][elNum].value > 0 && panelDefault.hasClass('active') && !panelDefault.hasClass('disabled')) {
                // Trova l'indice della fetta del grafico
                chartInd = findChartInd(chartPatrimonio, panelDefault);
                // Imposta che l'evento è partito da un elemento HTML, e non dal grafico
                htmlOut = true;
                // Lancia l'evento di mouseout dalla fetta del grafico, nasconde il tooltip
                jsChart[chartPatrimonio].rollOutSlice(chartInd);
            }
        }).on('click', '.grafLegenda .panel-heading .valLegenda', function () {
            var href = $(this).attr('data-href');
            if (href && href !== '' && href !== '#!') {
                document.location.assign(href);
            }
        });

        initSubEventHandler(legendaBody);
    };

    initSubEventHandler = function (parentEl) {
        parentEl.on('mouseover', '.subLegenda>.saldoRow .saldoColorBox', function (event) {
            // Applica lo stile over alla voce della legenda
            // Toglie lo stile over alla voce della legenda
            var legendEl = $(event.target).closest('.saldoRow').addClass('over'),
                chartInd = findChartInd(subChartPatrimonio, legendEl);
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce non sia disabilitata
            if (subChartLoaded !== -1 && !chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && !legenda2FxIsRunning && !legendEl.hasClass('disabled')) {
                if (chartInd > -1) {
                    // Imposta che l'evento è partito da un elemento HTML, e non dal sottografico
                    htmlOver = true;
                    // Lancia l'evento di mouseover dalla fetta del sottografico, nasconde il tooltip
                    jsChart[subChartPatrimonio].rollOverSlice(chartInd);
                }
            }
        }).on('mouseout', '.subLegenda>.saldoRow .saldoColorBox', function (event) {
            // Toglie lo stile over alla voce della legenda
            var legendEl = $(event.target).closest('.saldoRow').removeClass('over'),
                chartInd = findChartInd(subChartPatrimonio, legendEl);
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce non sia disabilitata
            if (subChartLoaded !== -1 && !chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && !legenda2FxIsRunning && !legendEl.hasClass('disabled')) {
                if (chartInd > -1) {
                    // Imposta che l'evento è partito da un elemento HTML, e non dal sottografico
                    htmlOut = true;
                    // Lancia l'evento di mouseout dalla fetta del sottografico, nasconde il tooltip
                    jsChart[subChartPatrimonio].rollOutSlice(chartInd);
                }
            }
        }).on('mouseover', '.subLegenda>.saldoRow>.saldoLabel', function (event) {
            var legendEl = $(event.target).closest('.saldoRow'),
                chartInd = findChartInd(subChartPatrimonio, legendEl);
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce non sia disabilitata
            if (subChartLoaded !== -1 && !chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && !legenda2FxIsRunning && !legendEl.hasClass('disabled')) {
                if (chartInd > -1) {
                    // Imposta che l'evento è partito da un elemento HTML, e non dal sottografico
                    htmlOver = true;
                    // Lancia l'evento di mouseover dalla fetta del sottografico, nasconde il tooltip
                    jsChart[subChartPatrimonio].rollOverSlice(chartInd);
                }
            }
            //mouseover
        }).on('mouseout', '.subLegenda>.saldoRow>.saldoLabel', function (event) {
            var legendEl = $(event.target).closest('.saldoRow'),
                chartInd = findChartInd(subChartPatrimonio, legendEl);
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            // - la voce non sia disabilitata
            if (subChartLoaded !== -1 && !chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && !legenda2FxIsRunning && !legendEl.hasClass('disabled')) {
                // Trova l'indice della fetta del grafico
                if (chartInd > -1) {
                    // Imposta che l'evento è partito da un elemento HTML, e non dal sottografico
                    htmlOut = true;
                    // Lancia l'evento di mouseout dalla fetta del sottografico, nasconde il tooltip
                    jsChart[subChartPatrimonio].rollOutSlice(chartInd);
                }
            }
            //mouseover
        }).on('click', '.subLegenda>.saldoRow>.saldoLabel', function (event) {
            preventOtherHandlers(event);
            var el = $(event.target),
                index = findChartInd(subChartPatrimonio, el.closest('.saldoRow'));
            // Controlla che:
            // - non stia ricaricando il grafico
            // - non ci siano animazioni in esecuzione
            if (subChartLoaded !== -1 && !chart2IsBuilding && !chartIsBuilding && !legendaFxIsRunning && !legenda2FxIsRunning) {
                labelSubLegendaClick(el, el.closest('.panel-default'), index, 'html');
            }
        });
    };

    initChart = function () {
        if (debugOroCapitano) {
            printLog('initChart');
        }
        if (typeof jsChart[chartPatrimonio] !== 'undefined') {
            $(chartPatrimonio).html('');
            jsChart[chartPatrimonio] = null;
        }
        chartIsBuilding = true;
        reloadChart = 1;
        createLabelActiveEls();
        if (labelActiveEls.length > 0) {
            jsChart[chartPatrimonio] = new AmCharts.AmPieChart();
            jsChart[chartPatrimonio].dataProvider = readData(0, 'js');
            jsChart[chartPatrimonio].numberFormatter = { precision: 2, decimalSeparator: ',', thousandsSeparator: '.' };
            jsChart[chartPatrimonio].percentFormatter = {
                precision: 1,
                decimalSeparator: ',',
                thousandsSeparator: '.'
            };
            jsChart[chartPatrimonio].colors = colorsArr;
            jsChart[chartPatrimonio].descriptionField = "description";
            jsChart[chartPatrimonio].titleField = "title";
            jsChart[chartPatrimonio].valueField = "value";
            jsChart[chartPatrimonio].balloonText = "[[title]]:\n[[description]]";
            jsChart[chartPatrimonio].pullOutOnlyOne = true;
            jsChart[chartPatrimonio].pullOutRadius = '10%';
            jsChart[chartPatrimonio].pullOutDuration = 0.5;
            jsChart[chartPatrimonio].labelsEnabled = false;
            jsChart[chartPatrimonio].startDuration = 0;
            jsChart[chartPatrimonio].outlineColor = "#FFFFFF";
            jsChart[chartPatrimonio].outlineAlpha = 0.5;
            jsChart[chartPatrimonio].outlineThickness = 1;
            jsChart[chartPatrimonio].depth3D = 20;
            jsChart[chartPatrimonio].angle = 20;
            jsChart[chartPatrimonio].radius = "40%";
            jsChart[chartPatrimonio].innerRadius = "16%";
            // Listeners
            jsChart[chartPatrimonio].addListener('clickSlice', jsSliceClick);
            jsChart[chartPatrimonio].addListener('rollOutSlice', jsRollOverSlice);
            jsChart[chartPatrimonio].addListener('rollOverSlice', jsRollOutSlice);
            // Tooltip
            var balloon = jsChart[chartPatrimonio].balloon;
            balloon.horizontalPadding = 4;
            balloon.verticalPadding = 6;
            balloon.adjustBorderColor = true;
            balloon.color = '#ffffff';
            balloon.fillColor = '#000000';
            balloon.fontSize = 9;
            balloon.cornerRadius = 0;
            balloon.borderThickness = 0;
            balloon.borderAlpha = 0;
            // WRITE
            jsChart[chartPatrimonio].write(chartPatrimonio.replace('#', ''));
            if (!eventHandlerLoaded) {
                initEventHandler();
            }
            if (debugOroCapitano) {
                printLog('chart done');
            }
            $('#coveringDiv').removeClass('empty').hide();
            isChartLoaded = true;
        } else {
            $('#coveringDiv').addClass('empty').show();
        }
        chartIsBuilding = false;
    };

    initSubChart = function (num) {
        if (debugOroCapitano) {
            printLog('initSubChart - num: ' + num);
        }
        if (typeof jsChart[subChartPatrimonio] !== 'undefined') {
            $(subChartPatrimonio).html('');
            jsChart[subChartPatrimonio] = null;
        }
        chart2IsBuilding = true;
        reloadSubChart = 1;
        subLabelActiveEls = $('#subLegenda' + num).find('.saldoRow.active:not(.disabled)');
        if (subLabelActiveEls && subLabelActiveEls.length > 0) {
            jsChart[subChartPatrimonio] = new AmCharts.AmPieChart();
            jsChart[subChartPatrimonio].dataProvider = readData(num, 'js');
            jsChart[subChartPatrimonio].numberFormatter = {
                precision: 2,
                decimalSeparator: ',',
                thousandsSeparator: '.'
            };
            jsChart[subChartPatrimonio].percentFormatter = {
                precision: 1,
                decimalSeparator: ',',
                thousandsSeparator: '.'
            };
            jsChart[subChartPatrimonio].colors = colorsArr;
            jsChart[subChartPatrimonio].descriptionField = "description";
            jsChart[subChartPatrimonio].titleField = "title";
            jsChart[subChartPatrimonio].valueField = "value";
            jsChart[subChartPatrimonio].balloonText = "[[title]]:\n[[description]]";
            jsChart[subChartPatrimonio].pullOutOnlyOne = true;
            jsChart[subChartPatrimonio].pullOutRadius = '14%';
            jsChart[subChartPatrimonio].pullOutDuration = 0.5;
            jsChart[subChartPatrimonio].labelsEnabled = false;
            jsChart[subChartPatrimonio].startDuration = 0;
            jsChart[subChartPatrimonio].outlineColor = "#FFFFFF";
            jsChart[subChartPatrimonio].outlineAlpha = 0.5;
            jsChart[subChartPatrimonio].outlineThickness = 1;
            jsChart[subChartPatrimonio].depth3D = 15;
            jsChart[subChartPatrimonio].angle = 20;
            jsChart[subChartPatrimonio].radius = "30%";
            jsChart[subChartPatrimonio].innerRadius = "15%";
            // Listeners
            jsChart[subChartPatrimonio].addListener('clickSlice', jsSubSliceClick);
            jsChart[subChartPatrimonio].addListener('rollOutSlice', jsSubRollOverSlice);
            jsChart[subChartPatrimonio].addListener('rollOverSlice', jsSubRollOutSlice);
            // Tooltip
            var balloon = jsChart[subChartPatrimonio].balloon;
            balloon.horizontalPadding = 4;
            balloon.verticalPadding = 6;
            balloon.adjustBorderColor = true;
            balloon.color = '#ffffff';
            balloon.fillColor = '#000000';
            balloon.fontSize = 9;
            balloon.cornerRadius = 0;
            balloon.borderThickness = 0;
            balloon.borderAlpha = 0;
            // WRITE
            jsChart[subChartPatrimonio].write(subChartPatrimonio.replace('#', ''));
            $('#coveringDiv2').removeClass('empty').hide();
            isSubChartLoaded = true;
        } else {
            $('#coveringDiv2').addClass('empty').show();
        }
        chart2IsBuilding = false;
    };

    labelSubLegendaClick = function (el, saldoRow, index, source) {
        if (debugOroCapitano) {
            printLog('labelLegendaClick - source: ' + source);
        }
        if (!legendaFxIsRunning && !saldoRow.hasClass('disabled')) {
            if (source === 'html') {
                var chartInd = findChartInd(subChartPatrimonio, saldoRow);
                htmlClick = true;
                jsChart[subChartPatrimonio].clickSlice(chartInd);
            }
            if (!saldoRow.hasClass('selected')) {
                $('#subLegenda' + subChartLoaded).find('.saldoRow').each(function (index, item) {
                    item = $(item);
                    if (item.hasClass('selected')) {
                        item.removeClass('selected');
                    }
                });
                saldoRow.addClass('selected');
            } else {
                saldoRow.removeClass('selected');
            }
        }
    };

    labelLegendaClick = function (el, panelDefault, index, source) {
        if (debugOroCapitano) {
            printLog('labelLegendaClick - source: ' + source);
        }
        if (!legendaFxIsRunning && !panelDefault.hasClass('disabled')) {
            var idEl = el.attr('id'),
                numEl = parseInt(idEl.substr(idEl.length - 1), 10),
                chartInd = findChartInd(chartPatrimonio, panelDefault),
                subLegenda = $('#subLegenda' + numEl),
                durationTime = 800,
                createSubChart, subChartExists, func;
            if (source === 'html' && jsonData[0][numEl].value > 0) {
                htmlClick = true;
                jsChart[chartPatrimonio].clickSlice(chartInd);
            }
            // Controlla che non ho cliccato su un elemento già selezionato
            if (!panelDefault.hasClass('selected')) {
                if (debugOroCapitano) {
                    printLog('labelLegendaClick - selected: ' + false);
                }
                // In questo caso cerca un altro elemento selezionato, ed eventualmente aperto, da chiudere
                $('.grafLegenda>.panel-default:not(.btnBgPort)').each(function (index, item) {
                    var func, oldSubChartExists, subLegenda,
                        oldNum = index + 1;
                    item = $(item);
                    if (item.hasClass('selected')) {
                        item.removeClass('selected');
                        if (expandableLabel[oldNum]) {
                            oldSubChartExists = true;
                            switch (oldNum) {
                                case 1:
                                    oldSubChartExists = false;
                                /* falls through */
                                case 3:
                                case 4:
                                case 5:
                                    subLegenda = $('#subLegenda' + oldNum);
                                    legendaFxIsRunning = true;
                                    if (debugOroCapitano) {
                                        printLog('labelLegendaClick - legendaFxIsRunning: ' + true);
                                    }
                                    subLegenda.show();
                                    $('#coveringDiv').show();
                                    // Nasconde il sottografico, se esiste, ovvero sempre, tranne nel caso del saldo disponibile in c/c

                                    if (debugOroCapitano) {
                                        printLog('labelLegendaClick - oldSubChartExists: ' + oldSubChartExists);
                                    }

                                    // Se la nuova fetta non ha il grafico, allora lo nasconde
                                    if ($.inArray(numEl, [3, 4, 5]) === -1) {
                                        if (debugOroCapitano) {
                                            printLog('labelLegendaClick - clickTriggered: ' + false);
                                        }
                                        $('#subGrafPatrimonio').animate({ opacity: 0 }, durationTime, function () {
                                            $('#subChartPatrimonio').html('');
                                        });
                                    }
                                    // Collassa l'elemento e nasconde le relative sottovoci
                                    func = function () {
                                        subLegenda.hide();
                                        if (!legenda2FxIsRunning) {
                                            var coveringDiv = $('#coveringDiv');
                                            legendaFxIsRunning = false;
                                            if (debugOroCapitano) {
                                                printLog('labelLegendaClick - legendaFxIsRunning: ' + false);
                                            }

                                            if (!coveringDiv.hasClass('empty')) {
                                                coveringDiv.hide();
                                            }
                                            if (subLabelActiveEls && subLabelActiveEls.length > 0) {
                                                $('#coveringDiv2').removeClass('empty').hide();
                                            }
                                        }
                                        if (debugOroCapitano) {
                                            printLog('labelLegendaClick - isSubChartLoaded: ' + false);
                                        }
                                    };

                                    item.find('.panel-title a').addClass('collapsed');
                                    subLegenda.collapse('hide');

                                    isSubChartLoaded = false;
                                    setTimeout(func, durationTime);
                            }
                        }
                        // Interrompe il ciclo, se trova l'elemento da chiudere
                    }
                });
                panelDefault.addClass('selected');
                createSubChart = true;
                // Se l'elemento cliccato è espandibile, lo espande

                if (debugOroCapitano) {
                    printLog('labelLegendaClick - expandableLabel: ' + expandableLabel[numEl]);
                }
                if (expandableLabel[numEl]) {
                    switch (numEl) {
                        case 1:
                            createSubChart = false;
                        /* falls through */
                        case 4:
                        case 5:
                            // Carica la sottolegenda con le relative sottovoci
                            subLegendaOpen(numEl, createSubChart, durationTime);
                            break;
                        case 3: // Linee vincolate
                            // Esegue una chiamata AJAX per caricare le linee vincolate
                            subLegendaLVLoad(durationTime);
                            break;
                        default:
                            legendaFxIsRunning = legenda2FxIsRunning = false;
                            if (debugOroCapitano) {
                                printLog('labelLegendaClick - legendaFxIsRunning: ' + true);
                            }
                    }
                }
            }
            // Altrimenti, deseleziona l'elemento aperto
            else {
                if (debugOroCapitano) {
                    printLog('labelLegendaClick - selected: ' + true);
                }
                panelDefault.removeClass('selected');
                // Se l'elemento cliccato è espandibile, lo collassa
                if (expandableLabel[numEl]) {
                    subChartExists = true;
                    switch (parseInt(numEl.toString(), 10)) {
                        case 1:
                            subChartExists = false;
                        /* falls through */
                        case 3:
                        case 4:
                        case 5:
                            legendaFxIsRunning = true;
                            $('#coveringDiv').show();
                            if (subChartExists) {
                                $('#subGrafPatrimonio').animate({ opacity: 0 }, function () {
                                    $('#subChartPatrimonio').html('');
                                });
                            }
                            func = function () {
                                var coveringDiv = $('#coveringDiv');

                                if (!coveringDiv.hasClass('empty')) {
                                    coveringDiv.hide();
                                }
                                if (subLabelActiveEls && subLabelActiveEls.length > 0) {
                                    $('#coveringDiv2').removeClass('empty').hide();
                                }

                                subLegenda.hide();

                                // Allontana il box della legenda, per la stampa
                                $('#contenuti').find('.expandable:first').removeClass('near');

                                legendaFxIsRunning = false;
                                isSubChartLoaded = false;
                            };

                            panelDefault.find('.panel-title a').addClass('collapsed');
                            subLegenda.collapse('hide');
                            setTimeout(func, 500);
                            break;
                    }
                }
            }
        }
    };

    subLegendaLVLoad = function (durationTime) {
        legenda2FxIsRunning = true;
        if (jsonData['3'] === null) {
            var parameters = {
                "method": "group",
                "accounts": $('#sceltaRapportoValFP').val(),
                "cf": Math.random()
            };

            $.ajax({
                "type": "post",
                "dataType": "json",
                "url": mioPatrimonioLinks.dataLinks.listaLVinc,
                "data": parameters,
                "success": function (data) {
                    parseLVData.call(window, data, durationTime);
                },
                "error": loadFailure
            });
        } else {
            subLegendaOpen("3", true, durationTime);
        }
    };

    subLegendaOpen = function (numEl, createSubChart, durationTime) {
        var subLegenda = $('#subLegenda' + numEl),
            func;
        legenda2FxIsRunning = true;
        if (debugOroCapitano) {
            printLog('labelLegendaClick - legenda2FxIsRunning: ' + true);
        }
        if (!legendaFxIsRunning) {
            legendaFxIsRunning = true;
            if (debugOroCapitano) {
                printLog('labelLegendaClick - legendaFxIsRunning: ' + true);
            }
            $('#coveringDiv').show();
        }
        subLegenda.show();
        // Crea il sottografico
        if (createSubChart) {
            if (numEl !== subChartLoaded) {
                subChartLoaded = numEl;
            }
            if (debugOroCapitano) {
                printLog('** subLegendaOpen - subChartLoaded: ' + subChartLoaded);
            }
            reloadAll(numEl);
            $('#subGrafPatrimonio').delay(100).animate({ opacity: 1 }, durationTime);
        }
        // Non crea il sottografico per il saldo disponibile in c/c
        else {
            subChartLoaded = -1;
            subLabelActiveEls = subLegenda.find('.saldoRow.active:not(.disabled)');
            if (debugOroCapitano) {
                printLog('** subLegendaOpen - subChartLoaded: ' + subChartLoaded);
            }
        }
        // Espande l'elemento e mostra le relative sottovoci
        func = function () {
            var coveringDiv = $('#coveringDiv');

            if (!coveringDiv.hasClass('empty')) {
                coveringDiv.hide();
            }

            // Avvicina il box della legenda, per la stampa
            $('#contenuti').find('.expandable:first').addClass('near');

            legendaFxIsRunning = legenda2FxIsRunning = false;

            if (debugOroCapitano) {
                printLog('labelLegendaClick - legendaFxIsRunning: ' + false);
            }
            if (debugOroCapitano) {
                printLog('labelLegendaClick - legenda2FxIsRunning: ' + false);
            }
        };
        subLegenda.closest('.panel-default').find('.panel-title a').removeClass('collapsed');
        subLegenda.collapse('show');
        setTimeout(func, 500);
    };
    /* |FINE| GRAFICO - Inizializzazione */


    /* GRAFICO - Funzioni di utilità */
    // Crea l'array delle label attive e non disabilitate
    createLabelActiveEls = function () {
        var labelActiveElsTmp = [];
        $('#legendaBody').find('.grafLegenda>.panel-default.active:not(.disabled)').each(function (index, item) {
            item = $(item);
            var elNum = findElNum(item);
            if (jsonData[0][elNum].value > 0) {
                labelActiveElsTmp.push(item[0]);
            }
        });
        labelActiveEls = $(labelActiveElsTmp);
    };

    // Trova l'elemento della legenda, a aprtire dall'indice della fetta del grafico/sottografico
    findLegendaEl = function (chart_id, index, isLi) {
        var el = null;
        if (chart_id === chartPatrimonio) {
            if (isLi) {
                el = labelActiveEls.eq(index);
            } else {
                el = labelActiveEls.eq(index).find('.labelLegenda:first');
            }
        } else {
            if (isLi) {
                el = $('#subLegenda' + subChartLoaded).find('.saldoRow.active:not(.disabled)').eq(index);
            } else {
                el = $('#subLegenda' + subChartLoaded).find('.saldoRow.active:not(.disabled)').eq(index).find('.labelLegenda:first');
            }
        }
        return el;
    };

    // Trova l'indice della fetta del grafico/sottografico
    findChartInd = function (chart_id, legendEl) {
        var elIndex;
        if (chart_id === chartPatrimonio) {
            elIndex = labelActiveEls.index(legendEl);
        } else {
            elIndex = subLabelActiveEls.index(legendEl);
        }
        return elIndex;
    };

    // Trova l'indice della voce della legenda
    findElNum = function (panelDefault) {
        var elId, labelLegenda;
        labelLegenda = panelDefault.find('.labelLegenda:first');
        elId = labelLegenda.attr('id');
        return elId.substr(elId.length - 1);
    };
    /* |FINE| GRAFICO - Funzioni di utilità */


    /* GRAFICO JAVASCRIPT - Handler eventi */
    jsSliceClick = function (event) {
        if (debugOroCapitano) {
            printLog('jsSliceClick');
        }
        var dataItem = event.dataItem;
        doSliceClick(chartPatrimonio, dataItem.index, dataItem.title, dataItem.value, dataItem.percents, dataItem.color, dataItem.description);
    };

    jsRollOverSlice = function (event) {
        var dataItem = event.dataItem;
        doSliceOver(chartPatrimonio, dataItem.index, dataItem.title, dataItem.value, dataItem.percents, dataItem.color, dataItem.description);
    };

    jsRollOutSlice = function () {
        doSliceOut(chartPatrimonio);
    };
    /* |FINE| GRAFICO JAVASCRIPT - Handler eventi */


    /* SOTTOGRAFICO JAVASCRIPT - Handler eventi */
    jsSubSliceClick = function (event) {
        if (debugOroCapitano) {
            printLog('jsSubSliceClick');
        }
        var dataItem = event.dataItem;
        doSliceClick(subChartPatrimonio, dataItem.index, dataItem.title, dataItem.value, dataItem.percents, dataItem.color, dataItem.description);
    };

    jsSubRollOverSlice = function (event) {
        if (debugOroCapitano) {
            printLog('jsSubRollOverSlice');
        }
        var dataItem = event.dataItem;
        doSliceOver(subChartPatrimonio, dataItem.index, dataItem.title, dataItem.value, dataItem.percents, dataItem.color, dataItem.description);
    };

    jsSubRollOutSlice = function () {
        if (debugOroCapitano) {
            printLog('jsSubRollOutSlice');
        }
        //var dataItem = event.dataItem;
        doSliceOut(subChartPatrimonio);
    };
    /* |FINE| SOTTOGRAFICO JAVASCRIPT - Handler eventi */


    /* GRAFICO/SOTTOGRAFICO FLASH - Handler eventi */
    doSliceClick = function (chart_id, index) {
        if (debugOroCapitano) {
            printLog('doSliceClick - chart_id: ' + chart_id);
        }
        var isChartPatrimonio = (chart_id === chartPatrimonio),
            el = findLegendaEl(chart_id, index, false);
        if (htmlClick) {
            htmlClick = false;
        } else if (isChartPatrimonio) {
            labelLegendaClick(el, el.closest('.panel-default'), index, 'grafico');
        } else {
            labelSubLegendaClick(el, el.closest('.saldoRow'), index, 'grafico');
        }
    };

    doSliceOver = function (chart_id, index) {
        var panelDefault = findLegendaEl(chart_id, index, true);
        if (htmlOver) {
            htmlOver = false;
        } else if (sliceOvered[chart_id] !== index) {
            sliceOvered[chart_id] = index;
            if (panelDefault && panelDefault.length) {
                panelDefault.addClass('over');
            }
        }
    };

    doSliceOut = function (chart_id) {
        var panelDefault = findLegendaEl(chart_id, sliceOvered[chart_id], true);
        sliceOvered[chart_id] = -1;
        if (htmlOut) {
            htmlOut = false;
        } else if (panelDefault && panelDefault.length) {
            panelDefault.removeClass('over');
        }
    };

    amChartInited = function (chart_id) {
        var reloadSubFunc, reloadFunc,
            iePrintChartId = (chart_id === chartPatrimonio) ? 'iePrintChart' : 'iePrintSubChart';
        if (debugOroCapitano) {
            printLog('amChartInited - chart_id: ' + chart_id);
        }
        // Get the flash object into "flashChart" variable
        flashChart[chart_id] = $(iePrintChartId);
        if (chart_id === chartPatrimonio) {
            if (reloadChart > 0) {
                reloadFunc = function () {
                    if (flashChart[chart_id].setData) {
                        flashChart[chart_id].setData(readData(0), false);
                        // noinspection JSUnresolvedFunction
                        flashChart[chart_id].setSettings(readSettings(0), true);
                        flashChart[chart_id].rebuild();
                        isChartLoaded = true;
                    }
                };
                reloadChart = 0;
                setTimeout(reloadFunc, 250);
                return;
            }
        } else {
            isSubChartLoaded = true;
            if (reloadSubChart > 0) {
                reloadSubFunc = function () {
                    if (flashChart[chart_id].setData) {
                        flashChart[chart_id].setData(readData(subChartLoaded), false);
                        // noinspection JSUnresolvedFunction
                        flashChart[chart_id].setSettings(readSettings(subChartLoaded), true);
                        flashChart[chart_id].rebuild();
                        isSubChartLoaded = true;
                    }
                };
                reloadSubChart = 0;
                setTimeout(reloadSubFunc, 250);
                return;
            }
        }
        if (chart_id === chartPatrimonio) {
            isChartLoaded = true;
        } else {
            isSubChartLoaded = true;
        }
        if (!eventHandlerLoaded) {
            initEventHandler();
        }
    };
    /* |FINE| GRAFICO/SOTTOGRAFICO FLASH - Handler eventi */


    /* GRAFICO/SOTTOGRAFICO - Caricamento dati/impostazioni */
    loadChartData = function (parameters) {
        $('#grafPatrimonioBox').addClass('loading');
        $.ajax({
            "type": "get",
            "dataType": "json",
            "url": mioPatrimonioLinks.dataLinks.chart,
            "data": parameters,
            "success": parseChartData,
            "error": loadFailure
        });
        initDinamicLinks();
    };

    parseChartData = function (data) {
        /** @namespace data.posizioneFinanziaria */
        var totale = moveToInteger(data.posizioneFinanziaria.totale),
            liquidita = data.posizioneFinanziaria.liquidita,
            contoCorrente = liquidita.contoCorrente,
            contoCorrenteTot = moveToInteger(contoCorrente.saldoDisponibile),
            contoCorrenteArr, indCC, valore, contoDeposito, lineeVincolate,
            contoDerivati, contoDerivatiTot, contoDerivatiArr, indDER,
            portafoglio, depositoAmministrato, depositoAmministratoTot, depositoAmministratoArr, indDA,
            depositoGestito, pct;
        $('#liquiditaTotale').html(formattaNumero(liquidita.totale, 2, true));
        $('#legendaTotale').html(formattaNumero(moveToFloat(totale), 2, true));
        $('#titTotale').html(formattaNumero(moveToFloat(totale), 2, true));
        expandableLabel['1'] = false;
        // --- LIQUIDITA ---
        // Saldo CC
        $('#subLegenda1').collapse('hide');
        if (contoCorrenteTot !== 0) {
            $('#numLegenda1').html(formattaNumero(moveToFloat(contoCorrenteTot), 2, true)).closest('.panel-default').addClass('active');
            jsonData['0']['1'].value = contoCorrenteTot;
            contoCorrenteArr = [];
            contoCorrenteArr[1] = moveToInteger(contoCorrente.saldoContabile);
            /** @namespace contoCorrente.impegniBanking */
            contoCorrenteArr[2] = moveToInteger(contoCorrente.impegniBanking);
            /** @namespace contoCorrente.impegniTrading */
            contoCorrenteArr[3] = moveToInteger(contoCorrente.impegniTrading);
            /** @namespace contoCorrente.preavvisiTrading */
            contoCorrenteArr[4] = moveToInteger(contoCorrente.preavvisiTrading);
            /** @namespace contoCorrente.impegniFondi */
            contoCorrenteArr[5] = moveToInteger(contoCorrente.impegniFondi);
            /** @namespace contoCorrente.preavvisiFondi */
            contoCorrenteArr[6] = moveToInteger(contoCorrente.preavvisiFondi);
            for (indCC = 1; indCC <= 6; indCC += 1) {
                valore = (parseInt(contoCorrenteArr[indCC], 10) !== 0) ? contoCorrenteArr[indCC] : 0;
                if (valore !== 0) {
                    expandableLabel['1'] = true;
                }
                if (valore !== 0) {
                    $('#numLegenda1_' + indCC).html(formattaNumero(moveToFloat(valore), 2, true)).closest('.saldoRow').removeClass('hidden').addClass('active');
                } else {
                    $('#numLegenda1_' + indCC).html(formattaNumero(0, 2)).closest('.saldoRow').removeClass('active').addClass('hidden');
                }
                jsonData['1'][indCC.toString()].value = valore;
            }
        } else {
            $('#numLegenda1').html(formattaNumero(moveToFloat(contoCorrenteTot), 2, true)).closest('.panel-default').removeClass('active');
            jsonData['0']['1'].value = contoCorrenteTot;
        }
        // Saldo CD e LV
        // Se ha il conto deposito
        if (liquidita.contoDeposito) {
            contoDeposito = moveToInteger(liquidita.contoDeposito);
            lineeVincolate = moveToInteger(liquidita.lineeVincolate);
            $('#boxContoDeposito').hide();
            if (contoDeposito > 0) {
                $('#numLegenda2').html(formattaNumero(moveToFloat(contoDeposito), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                jsonData['0']['2'].value = contoDeposito;
            } else {
                $('#numLegenda2').html(formattaNumero(moveToFloat(contoDeposito), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                jsonData['0']['2'].value = contoDeposito;
            }
            expandableLabel['3'] = (lineeVincolate > 0);
            if (lineeVincolate > 0) {
                $('#numLegenda3').html(formattaNumero(moveToFloat(lineeVincolate), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                $('#labelLegenda3').html('Saldo linee vincolate').attr('href', '#!');
                jsonData['0']['3'].value = lineeVincolate;
            } else {
                $('#numLegenda3').html(formattaNumero(moveToFloat(lineeVincolate), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                $('#labelLegenda3').html('Per un tasso pi&ugrave; alto apri una linea vincolata!').attr('href', mioPatrimonioLinks.staticLinks.lvPromo + '&cf=' + Math.random());
                $('#valLegenda3').attr('data-href', mioPatrimonioLinks.staticLinks.lvPromo + '&cf=' + Math.random());
                jsonData['0']['3'].value = lineeVincolate;
            }
        } else {
            $('#numLegenda2').closest('.panel-default').addClass('hidden').addClass('active');
            $('#numLegenda3').closest('.panel-default').addClass('hidden').addClass('active');
            $('#boxContoDeposito').show();
            jsonData['0']['2'].value = null;
            jsonData['0']['3'].value = null;
        }
        expandableLabel['4'] = false;
        // Saldo DER
        // Se ha il servizio derivati attivo
        if (liquidita.contoDerivati) {
            contoDerivati = liquidita.contoDerivati;
            contoDerivatiTot = moveToInteger(contoDerivati.saldoDisponibile);
            if (contoDerivatiTot !== 0) {
                $('#numLegenda4').html(formattaNumero(moveToFloat(contoDerivatiTot), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                jsonData['0']['4'].value = contoDerivatiTot;
                contoDerivatiArr = [];
                /** @namespace contoDerivati.liqImpegnataIntraday */
                contoDerivatiArr[1] = moveToInteger(contoDerivati.liqImpegnataIntraday);
                /** @namespace contoDerivati.marginiDerivati */
                contoDerivatiArr[2] = moveToInteger(contoDerivati.marginiDerivati);
                for (indDER = 1; indDER <= 2; indDER += 1) {
                    valore = (parseInt(contoDerivatiArr[indDER], 10) !== 0) ? contoDerivatiArr[indDER] : 0;
                    if (valore > 0) {
                        expandableLabel['4'] = true;
                    }
                    if (valore !== 0) {
                        $('#numLegenda4_' + indDER).html(formattaNumero(moveToFloat(valore), 2, true)).closest('.saldoRow').addClass('active');
                    } else {
                        $('#numLegenda4_' + indDER).html(formattaNumero(moveToFloat(valore), 2, true)).closest('.saldoRow').removeClass('active');
                    }
                    jsonData['4'][indDER.toString()].value = valore;
                }
            } else {
                $('#numLegenda4').html(formattaNumero(moveToFloat(contoDerivatiTot), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                jsonData['0']['4'].value = contoDerivatiTot;
            }
        } else {
            $('#numLegenda4').closest('.panel-default').addClass('hidden').removeClass('active');
            jsonData['0']['4'].value = null;
        }
        // --- |FINE| LIQUIDITA ---


        // --- PORTAFOGLIO ---
        expandableLabel['5'] = false;

        if (data.posizioneFinanziaria.portafoglio) {
            portafoglio = data.posizioneFinanziaria.portafoglio;
            depositoAmministrato = portafoglio.depositoAmministrato;
            depositoAmministratoTot = moveToInteger(depositoAmministrato.totale);
            $('#portafoglioTotale').html(formattaNumero(moveToFloat(moveToInteger(portafoglio.totale), 2, true)));

            // Portafoglio titoli
            if (depositoAmministratoTot !== 0) {
                $('#numLegenda5').html(formattaNumero(moveToFloat(depositoAmministratoTot), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                jsonData['0']['5'].value = depositoAmministratoTot;
                depositoAmministratoArr = [];
                /** @namespace depositoAmministrato.azioniItalia */
                depositoAmministratoArr[1] = moveToInteger(depositoAmministrato.azioniItalia);
                /** @namespace depositoAmministrato.azioniEstero */
                depositoAmministratoArr[2] = moveToInteger(depositoAmministrato.azioniEstero);
                /** @namespace depositoAmministrato.obbligazioni */
                depositoAmministratoArr[3] = moveToInteger(depositoAmministrato.obbligazioni);
                /** @namespace depositoAmministrato.derivati */
                depositoAmministratoArr[4] = moveToInteger(depositoAmministrato.derivati);
                depositoAmministratoArr[5] = moveToInteger(depositoAmministrato.cw);
                /** @namespace depositoAmministrato.etf */
                depositoAmministratoArr[6] = moveToInteger(depositoAmministrato.etf);
                /** @namespace depositoAmministrato.marginate */
                depositoAmministratoArr[7] = moveToInteger(depositoAmministrato.marginate);
                for (indDA = 1; indDA <= 7; indDA += 1) {
                    valore = (parseInt(depositoAmministratoArr[indDA], 10) !== 0) ? depositoAmministratoArr[indDA] : 0;
                    if (valore !== 0) {
                        expandableLabel['5'] = true;
                    }
                    if (valore > 0) {
                        $('#numLegenda5_' + indDA).html(formattaNumero(moveToFloat(valore), 2, true)).closest('.saldoRow').removeClass('hidden').addClass('active');
                    } else {
                        $('#numLegenda5_' + indDA).html(formattaNumero(moveToFloat(valore), 2, true)).closest('.saldoRow').addClass('hidden').removeClass('active');
                    }
                    jsonData['5'][indDA.toString()].value = valore;
                }
            } else {
                $('#numLegenda5').html(formattaNumero(moveToFloat(depositoAmministratoTot), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                jsonData['0']['5'].value = depositoAmministratoTot;
            }
            // Portafoglio fondi e sicav
            depositoGestito = moveToInteger(portafoglio.depositoGestito);
            /** @namespace portafoglio.PCT */
            pct = moveToInteger(portafoglio.PCT);
            $('#titValPortafoglio').show();
            $('#boxPortafoglio').hide();
            if (depositoGestito > 0) {
                $('#numLegenda6').html(formattaNumero(moveToFloat(depositoGestito), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                $('#labelLegenda6').html('Portafoglio fondi e sicav').attr('data-href', '#!');
                jsonData['0']['6'].value = depositoGestito;
            } else {
                $('#numLegenda6').html(formattaNumero(moveToFloat(depositoGestito), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                //nuovo link a fp investimenti, va bene per tutti i profili
                link_fp_investimenti = $('#link_fp_investimenti').val();
                $('#labelLegenda6').html('Fondi: scopri l\'offerta').attr('data-href', link_fp_investimenti);
                $('#valLegenda6').attr('data-href', link_fp_investimenti);
                jsonData['0']['6'].value = depositoGestito;
            }
            // Portafoglio pct
            if (portafoglio.PCT) {
                pct = moveToInteger(portafoglio.PCT);
                if (pct > 0) {
                    $('#numLegenda7').html(formattaNumero(moveToFloat(pct), 2, true)).closest('.panel-default').removeClass('hidden').addClass('active');
                    jsonData['0']['7'].value = pct;
                } else {
                    $('#numLegenda7').html(formattaNumero(moveToFloat(pct), 2, true)).closest('.panel-default').removeClass('hidden').removeClass('active');
                    jsonData['0']['7'].value = pct;
                }
            } else {
                $('#numLegenda7').closest('.panel-default').addClass('hidden').removeClass('active');
                jsonData['0']['7'].value = null;
            }
        } else {
            $('#numLegenda5').closest('.panel-default').addClass('hidden').removeClass('active');
            $('#numLegenda6').closest('.panel-default').addClass('hidden').removeClass('active');
            $('#numLegenda7').closest('.panel-default').addClass('hidden').removeClass('active');
            jsonData['0']['5'].value = null;
            jsonData['0']['6'].value = null;
            jsonData['0']['7'].value = null;
            $('#titValPortafoglio').hide();
            $('#boxPortafoglio').show();
        }
        // --- |FINE| PORTAFOGLIO ---

        initChart();
        if (debugOroCapitano) {
            printLog('initChart finished');
        }
        $('#grafPatrimonioBox').removeClass('loading');
        if (debugOroCapitano) {
            printLog('unsetLoadingOnObject');
        }
    };

    parseLVData = function (data, durationTime) {
        var subLegenda3 = $('#subLegenda3'),
            subLegendaLV = subLegenda3.find('.subLegenda:first'),
            index = -1;
        jsonData['3'] = {};
        subLegendaLV.html('');
        $.each(data.lineeVincolate, function (key, value) {
            index += 1;
            var num = (index + 1).toString(),
                classNames = (index === 0) ? 'first active' : 'active';

            jsonData['3'][num] = { "value": moveToInteger(value), "title": key + ' mesi' };
            subLegendaLV.append('<div class="saldoRow ' + classNames + '">' +
                '<div class="saldoColor"><div id="icoLegenda3_' + num + '" class="saldoColorBox boxBgIcon03_' + num + '"></div></div>' +
                '<div id="labelLegenda3_' + num + '" class="saldoLabel labelLegenda">' + key + ' mesi' + '</div>' +
                '<div id="valLegenda3_' + num + '" class="saldoVal valLegenda"><span id="numLegenda3_' + num + '">' + formattaNumero(moveToFloat(moveToInteger(value), 2, true)) + '</span>&nbsp;&euro;</div>' +
                '</div>');
        });
        subLegendaOpen("3", true, durationTime);
    };

    readData = function (num, type) {
        if (debugOroCapitano) {
            printLog('readData - num: ' + num);
        }
        var outputData = (type === 'js') ? [] : '<pie>',
            legendaItems = (num === 0) ? $('#legendaBody').find('.grafLegenda>.panel-default:not(.btnBgPort)') : $('#subLegenda' + num).find('.subLegenda>.saldoRow'),
            tot = 0,
            totLiquidita = 0,
            totPortafoglio = 0,
            intNum = parseInt(num, 10),
            calcolaTot = (intNum === 0 || intNum === 5),
            dataHash = jsonData[num],
            dataArr = [],
            dataTot = 0,
            limit1perc = 0,
            limit2perc = 0,
            totAddedPerc = 0,
            percUnit = 1,
            index = -1,
            val, perc, elNum, dettTip, panelDefault;
        // Memorizzo i valori delle singole fette e calcolo il totale
        $.each(dataHash, function (key, value) {
            index += 1;
            var panelDefault = legendaItems.eq(index);
            dataArr.push(value.value);
            if (!panelDefault.hasClass('disabled') && value.value !== null && value.value > 0) {
                dataTot += value.value;
            }
        });
        if (forcePerc) {
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
        }
        colorsArr.length = 0;
        index = -1;
        $.each(dataHash, function (key, value) {
            index += 1;
            panelDefault = legendaItems.eq(index);
            if (!panelDefault.hasClass('disabled') && value.value !== null) {
                val = parseInt(value.value, 10);
                perc = formattaNumero((val * 100) / dataTot, 2, true);
                elNum = findElNum(panelDefault);
                dettTip = (num === 0 && expandableLabel[elNum] === true) ? '\nClicca per visualizzare i dettagli' : '';
                if (val > 0) {
                    colorsArr.push(colorsHash[num][key]);
                    // %26%23x20AC%3b
                    if (type === 'js') {
                        outputData.push({
                            "title": value.title,
                            "description": perc + '% (' + formattaNumero(moveToFloat(value.value), 2, true) + ' EUR)' + dettTip,
                            "value": dataArr[index].toFixed(2)
                        });
                    } else {
                        outputData += '<slice title=\'' + value.title + '\' description=\'' + perc + '% (' + formattaNumero(moveToFloat(value.value), 2, true) + ' EUR)' + dettTip + '\'>' + dataArr[index].toFixed(2) + '</slice>';
                    }
                }
                if (calcolaTot) {
                    tot += val;
                    if (intNum === 0) {
                        switch (index + 1) {
                            case 1:
                            case 2:
                            case 3:
                            case 4:
                                totLiquidita += value.value;
                                break;
                            case 5:
                            case 6:
                            case 7:
                                totPortafoglio += value.value;
                                break;
                        }
                    }
                }
            }
        });
        if (intNum === 0) {
            $('#liquiditaTotale').html(formattaNumero(moveToFloat(totLiquidita), 2, true));
            $('#portafoglioTotale').html(formattaNumero(moveToFloat(totPortafoglio), 2, true));
            $('#legendaTotale').html(formattaNumero(moveToFloat(tot), 2, true));
            $('#titTotale').html(formattaNumero(moveToFloat(tot), 2, true));
        } else if (intNum === 5) {
            jsonData[0][num].value = tot;

            $('#numLegenda' + num).html(formattaNumero(moveToFloat(tot), 2, true));
        }
        // Corregge un bug del grafico in Flash quando c'è un colore solamente
        colorsArr.push('#000000');
        return (type === 'js') ? outputData : outputData + '</pie>';
    };

    readSettings = function (num) {
        if (debugOroCapitano) {
            printLog('readSettings - num: ' + num);
        }
        if (num === 0) {
            return {
                "type": "pie",
                "angle": 20,
                "balloonText": "[[title]]:<br>[[description]]",
                "depth3D": 20,
                "innerRadius": "10%",
                "pullOutRadius": "10%",
                "radius": "50%",
                "colors": colorsArr,
                "descriptionField": "description",
                "labelsEnabled": false,
                "outlineThickness": 10,
                "pullOutEffect": "easeOutSine",
                "pullOutOnlyOne": true,
                "sequencedAnimation": false,
                "startDuration": 0,
                "titleField": "country",
                "valueField": "litres",
                "fontSize": 11,
                "theme": "default",
                "allLabels": [],
                "balloon": {
                    "borderThickness": 0,
                    "horizontalPadding": 10,
                    "maxWidth": 200,
                    "verticalPadding": 10
                },
                "titles": []
            };
        }
        return {
            "type": "pie",
            "angle": 20,
            "balloonText": "[[title]]:<br>[[description]]",
            "depth3D": 20,
            "innerRadius": "10%",
            "pullOutRadius": "10%",
            "radius": "50%",
            "colors": colorsArr,
            "descriptionField": "description",
            "labelsEnabled": false,
            "outlineThickness": 10,
            "pullOutEffect": "easeOutSine",
            "pullOutOnlyOne": true,
            "sequencedAnimation": false,
            "startDuration": 0,
            "titleField": "country",
            "valueField": "litres",
            "fontSize": 11,
            "theme": "default",
            "allLabels": [],
            "balloon": {
                "borderThickness": 0,
                "horizontalPadding": 10,
                "maxWidth": 200,
                "verticalPadding": 10
            },
            "titles": []
        };
    };

    reloadAll = function (num) {
        if (num === 0) {
            chartIsBuilding = true;
        } else {
            chart2IsBuilding = true;
        }
        if (debugOroCapitano) {
            printLog('reloadAll - num: ' + num);
            printLog('RELOADALL: chartIsBuilding = true');
        }
        var visualizzaGrafico = false,
            flash = null, settings, coveringDiv, coveringDiv2;

        if (num === 0) {
            if (!isChartLoaded) {
                initChart();
                return;
            }
            flash = flashChart[chartPatrimonio];
            createLabelActiveEls();
            if (labelActiveEls.length > 0) {
                visualizzaGrafico = true;
            }
        } else {
            if (!isSubChartLoaded) {
                initSubChart(num);
                return;
            }

            flash = flashChart[subChartPatrimonio];
            subLabelActiveEls = $('#subLegenda' + subChartLoaded).find('.saldoRow.active:not(.disabled)');

            if (subLabelActiveEls && subLabelActiveEls.length > 0) {
                visualizzaGrafico = true;
            }
        }

        if (visualizzaGrafico) {
            settings = readSettings(num);
            if (debugOroCapitano) {
                printLog('settings: ' + settings);
            }
            if (num === 0) {
                coveringDiv = $('#coveringDiv');
                if (coveringDiv.hasClass('empty')) {
                    coveringDiv.removeClass('empty').hide();
                }
                createLabelActiveEls();
            } else {
                coveringDiv2 = $('#coveringDiv2');
                if (coveringDiv2.hasClass('empty')) {
                    coveringDiv2.removeClass('empty').hide();
                }
                subLabelActiveEls = $('#subLegenda' + subChartLoaded).find('.saldoRow.active:not(.disabled)');
            }
            if (debugOroCapitano) {
                printLog('flash: ' + flash);
            }
            if (num === 0) {
                initChart();
            } else {
                initSubChart();
            }
        } else {
            if (num === 0) {
                initChart();
                $('#coveringDiv').addClass('empty').show();
            } else {
                initSubChart();
                $('#coveringDiv2').addClass('empty').show();
            }
        }

        if (debugOroCapitano) {
            printLog('RELOADALL: setTimeout');
        }

        // Aspetto che il grafico abbia terminato di ricaricarsi
        setTimeout(function () {
            if (num === 0) {
                chartIsBuilding = false;
            } else {
                chart2IsBuilding = false;
            }
            if (debugOroCapitano) {
                printLog('RELOADALL: chartIsBuilding = false');
            }
        }, 350);
    };
    /* |FINE| GRAFICO/SOTTOGRAFICO - Caricamento dati/impostazioni */
    /*** |FINE| GRAFICO POSIZIONE FINANZIARIA INTEGRATA - ORO DEL CAPITANO  ***/


    /*** FRAMEWORK STILIZZAZIONE FORM  ***
     *
     * @author      Andrea Colanicchia
     */
    /* SELECT STILIZZATA - Variabili globali */
    // Variabile usata per controllare se chiudere la select o no
    closeOnBlur2 = [];
    hiddenIds2 = {};
    /* |FINE| SELECT STILIZZATA - Variabili globali */


    /* SELECT STILIZZATA - Inizializzazione */
    // Cerca le select da dinamicizzare e associa i gestori di eventi e le classi agli elementi della select
    createSelectRapp2 = function (idSelect, idHidden, funcSelect) {
        // Valorizzo gli oggetti globali
        var selectRapp = $(idSelect), selector, inputOption, selectorOptions;

        if (selectRapp.length) {
            // Memorizza l'id del campo hidden
            hiddenIds2[idSelect] = idHidden;
            // Div che contiene le option selezionabili
            selector = selectRapp.find('.selector:first');
            // Option da impostare come selezionata
            inputOption = selectRapp.find('.inputOption:first');
            // Lista option selezionabili
            selectorOptions = selectRapp.find('.selectorOptions');
            // Imposta il valore selezionato di default
            setValueSelectRapp2(funcSelect, selectRapp, idHidden);

            /* SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */
            // Associa gli handler agli eventi della option
            observeSelectRappEvents2(inputOption, selectRapp, selector);

            // Gestisce il click sul conferma
            selectRapp.find('.selectorConfirm .btn').click(function (e) {
                preventOtherHandlers(e);
                // Aggiorna il valore selezionato
                if (setValueSelectRapp2(funcSelect, selectRapp, idHidden)) {
                    // Chiude la tendina
                    closeSelectRapp2(selectRapp);
                }
            });

            // Gestisce il click sul seleziona tutti
            $('#selTuttiCB').click(function (e) {
                var inputOption = selectRapp.find('.inputOption:first'),
                    el = $(e.target),
                    listAccount = $('#contenuti').find('.listaConti'),
                    account_star_el = $('#account_star_el'), textOption, valueOption, conto, valuesArray;

                if (el.prop('checked')) {
                    valuesArray = [];

                    selectRapp.find('.selectorOptions').each(function (index, item) {
                        valuesArray.push($(item).attr('value'));
                    });

                    textOption = valuesArray.length + ' conti selezionati';
                    valueOption = valuesArray.join(',');
                    listAccount.css('display', 'inline-block');

                    if (account_star_el.length) {
                        account_star_el.hide();
                    }
                } else {
                    conto = selectRapp.find('.selectorOptions.favorite:first');
                    if (!conto.length) {
                        conto = selectRapp.find('.selectorOptions:first');
                    }
                    textOption = conto.find('span:first').html();
                    valueOption = conto.attr('value');
                    listAccount.hide();
                    if (account_star_el.length) {
                        account_star_el.show();
                        updateStar(valueOption, textOption, 'account_star');
                    }
                }

                $(idHidden).val(valueOption);
                inputOption.find('.input:first').html(textOption);

                closeSelectRapp2(selectRapp);

                if ($.isFunction(funcSelect)) {
                    funcSelect({ text: textOption, value: valueOption });
                }
            });

            selectRapp.find('.selectorOptions').each(function (index, item) {
                $(item).click(function (e) {
                    var el = $(e.target),
                        selectorOptions = el.closest('.selectorOptions'),
                        cb = selectorOptions.find('input:first');
                    if (el[0].nodeName.toUpperCase() !== 'INPUT') {
                        cb.prop('checked', !cb.prop('checked'));
                    }
                    if (cb.prop('checked') === true) {
                        selectorOptions.addClass('selected');
                    } else {
                        selectorOptions.removeClass('selected');
                    }
                });
            });
            selectorOptions.each(function (index, item) {
                observeOptionEvents2($(item), inputOption, selectRapp, idHidden, funcSelect);
            });
            /* |FINE| SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */


            /* NAVIGAZIONE - Da tastiera */
            // Spostamento con i 'tab' e le frecce su e giu'
            inputOption.keydown(function (e) {
                if (e.which === 38) {
                    e.stopPropagation();
                } else if (e.which === 40) {
                    var delayFunc = function () {
                        focusOptionDownRapp.call(this, selectRapp);
                    };

                    e.stopPropagation();
                    setTimeout(delayFunc, 0);
                }
            });

            selectorOptions.each(function (index, item) {
                item = $(item);
                item.keydown(function (e) {
                    var optionSel = item, delayFunc;
                    if (e.which === 38) {
                        delayFunc = function () {
                            focusOptionUpRapp.call(optionSel, selectRapp);
                        };
                        e.stopPropagation();
                        setTimeout(delayFunc, 0);
                    } else if (e.which === 40) {
                        delayFunc = function () {
                            focusOptionDownRapp.call(optionSel, selectRapp);
                        };
                        e.stopPropagation();
                        setTimeout(delayFunc, 0);
                    }
                });
            });
            /* |FINE| NAVIGAZIONE - Da tastiera */
        }
    };

    // Ritorna una oggetto per la option selezionata con 2 proprieta', "value" e "text"
    preventClosingSelector2 = function () {
        // var idRapp = selectRapp.attr('id');
        $.each(closeOnBlur2, function (key, value) {
            clearTimeout(value);
        });
    };

    setValueSelectRapp2 = function (funcSelect, selectRapp, idHidden) {
        // Valore selezionato
        var inputOption = selectRapp.find('.inputOption:first'),
            selectorOptions = selectRapp.find('.selectorOptions'),
            listOption = selectRapp.find('.selectorOptions input[type=checkbox]:checked'),
            listAccount = $('#contenuti').find('.listaConti'),
            valuesArray = [],
            valuesDepArray = [],
            valuesDerArray = [],
            valueOption = '',
            textOption = '',
            selTuttiCB = $('#selTuttiCB'),
            account_star_el = $('#account_star_el'),
            valueDepOption, valueDerOption, anchor;
        if (listAccount.length) {
            listAccount.hide();
        }
        if (selTuttiCB.length) {
            selTuttiCB.prop('checked', (selectorOptions.length === listOption.length));
        }
        if (!listOption.length) {
            return false;
        }
        if (listOption.length === 1) {
            anchor = listOption.eq(0).closest('a');
            textOption = anchor.find('span:first').html();
            valueOption = anchor.attr('value');
            valueDepOption = anchor.attr('contodep');
            valueDerOption = anchor.attr('contoder');
            if (account_star_el.length) {
                account_star_el.show();
                updateStar(valueOption, textOption, 'account_star');
            }
        } else {
            listOption.each(function (index, item) {
                var option = $(item).closest('.selectorOptions');
                valuesArray.push(option.attr('value'));
                valuesDepArray.push(option.attr('contodep'));
                valuesDerArray.push(option.attr('contoder'));
                listAccount.eq(selectorOptions.index(option)).css('display', 'inline-block');
            });
            if (account_star_el.length) {
                account_star_el.hide();
            }
            textOption = valuesArray.length + ' conti selezionati';
            valueOption = valuesArray.join(',');
            valueDepOption = valuesDepArray.join(',');
            valueDerOption = valuesDerArray.join(',');
        }
        $(idHidden).val(valueOption);
        $('#contodep').val(valueDepOption);
        $('#contoder').val(valueDerOption);
        inputOption.find('.input:first').html(textOption);
        if ($.isFunction(funcSelect)) {
            funcSelect({ text: textOption, value: valueOption });
        }
        return true;
    };

    observeOptionEvents2 = function (optionEl, inputOption, selectRapp) {
        optionEl.hideFocus = true;
        optionEl.mouseover(function (e) {
            e.stopPropagation();
            $(this).trigger('focus');
        })
            .mouseout(function (e) {
                e.stopPropagation();
            })
            .focus(function () {
                setOverOption(optionEl, selectRapp);
            })
            .blur(function () {
                unSetOverOption(optionEl, selectRapp);
            });
    };

    observeSelectRappEvents2 = function (inputOption, selectRapp, selector) {
        var inputSx = selectRapp.find('.inputSx:first');
        inputOption.hideFocus = true;
        inputSx.mouseover(function () {
            inputOption.trigger('focus');
        })
            .mouseout(function () {
                if (selector[0].style.display === 'none') {
                    inputOption.trigger('blur');
                }
            })
            // Apre la tendina sul click sulla select
            .click(function (e) {
                preventOtherHandlers(e);
                toggleSelectRapp2(selectRapp);
            });
        inputOption.focus(function () {
            setOverSelectRapp(selectRapp);
        })
            .blur(function () {
                if (selector[0].style.display === 'none') {
                    unSetOverSelectRapp(selectRapp);
                }
            });
    };
    /* |FINE| SELECT STILIZZATA - Inizializzazione */


    /* SELECT STILIZZATA - Apertura/chiusura */
    // Chiude/apre la select
    toggleSelectRapp2 = function (selectRapp) {
        preventClosingSelector2(selectRapp);

        var idHidden = hiddenIds2['#' + selectRapp.attr('id')],
            // Option selezionata
            inputOption = selectRapp.find('.inputOption:first'),
            // Div che contiene le option selezionabili
            selector = selectRapp.find('.selector:first'),
            selectorItems, selectorSpacer, selectorHeight, selectorConfirm, selectedValues, maxHeight;

        // Chiude/apre la tendina
        if (selector[0].style.display !== 'none') {
            // Chiude la tendina
            closeSelectRapp2(selectRapp);
        } else {
            // Prima di aprire la tendina, chiude altre tendine eventualmente aperte
            $('.selectRapp').each(function (index, item) {
                item = $(item);
                closeSelectRapp2(item);
                unSetOverSelectRapp(item);
            });
            riseZIndex(selectRapp);
            setOverSelectRapp(selectRapp);
            // Lista option selezionabili, piu' i divisori
            selectorItems = selector.find('.selectorOptions');
            // Valore selezionato
            selectedValues = $(idHidden).val().split(',');
            selectorItems.each(function (index, item) {
                item = $(item);
                var cb = item.find('input[type=checkbox]:first');
                // Rimuove la classe over che potrebbe essere rimasta sull'oggetto nascosto
                item.removeClass('over');
                // Toglie l'elemento doppione
                if ($.inArray(item.attr('value'), selectedValues) !== -1) {
                    if (!item.hasClass('selected')) {
                        item.addClass('selected');
                    }
                    cb.prop('checked', true);
                } else {
                    item.removeClass('selected');
                    cb.prop('checked', false);
                }
            });
            // Spacer tra tendina e select
            selectorSpacer = selectRapp.find('.selectorSpacer:first');
            // Pulsante conferma
            selectorConfirm = selectRapp.find('.selectorConfirm:first');
            // Imposta l'altezza della tendina
            selector[0].style.height = 'auto';
            selectorHeight = selector.height();
            // Modifica per IE6
            maxHeight = 218;
            selector[0].style.height = (selectorHeight > maxHeight) ? maxHeight + 'px' : selectorHeight + 'px';
            selector.scrollTop = 0;
            selector.show();
            selectorSpacer.show();
            selectorConfirm.css({ top: (selector.height() + 36) + 'px' }).show();
            inputOption.trigger('focus');
        }
    };

    // Chiude la tendina
    closeSelectRapp2 = function (selectRapp) {
        selectRapp.find('.selector:first').hide();
        selectRapp.find('.selectorSpacer:first').hide();
        selectRapp.find('.selectorConfirm:first').hide();
        lowerZIndex(selectRapp);
    };
    /* |FINE| SELECT STILIZZATA - Apertura/chiusura */
    /*** |FINE| FRAMEWORK STILIZZAZIONE FORM  ***/


    /*** UTILITY FUNCTIONS ***/
    preventOtherHandlers = function (e) {
        e.preventDefault();
        e.stopPropagation();
    };
    /*** |FINE| UTILITY FUNCTIONS ***/


    $(init);

    return {
        "init": init,
        "amChartInited": amChartInited
    };
}());
