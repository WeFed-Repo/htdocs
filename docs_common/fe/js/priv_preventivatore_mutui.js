/*global $, cgi_script, initUniform, isImprese, revision, formattaNumOutput, formattaNumeriInput,
	setMsgOn, jqAJAXCall, cleanImportInt, isLibrerie, pathLibrerie, pathPreventivatore, setSpinner, initTooltip */
"use strict";
$(function() {
    // Classi widget
    var slider = function(params) {
            // Variabili private
            var updateAll, getStep, getValue, setValue,
                input = null,
                tooltip = null,
                plus = null,
                minus = null,
                trail = null,
                handle = null,
                avg,
                options,
                defaults = {
                    min: 1,
                    max: 100,
                    value: 50,
                    step: 1,
                    increment: 1,
                    update: null,
                    container: null
                };
            options = $.extend(defaults, params);
            avg = Math.round((options.max + options.min) / 2);
            // Funzioni rese pubbliche
            getStep = function() {
                return trail.slider('option', 'step');
            };
            getValue = function() {
                return trail.slider('value');
            };
            setValue = function(value) {
                trail.slider('value', value);
            };
            updateAll = function(value) {
                var valueStr = formattaNumOutput(value).split(',')[0];
                input.val(value);
                if (value > avg) {
                    trail.addClass('last-half');
                } else {
                    trail.removeClass('last-half');
                }
                if (tooltip && tooltip.length) {
                    tooltip.html(valueStr);
                }
                if (options.update) {
                    options.update();
                }
            };
            // Costruttore
            if (options.container && options.container.length) {
                // Inizializzazione degli oggetti
                input = options.container.find('.slider-input');
                plus = options.container.find('.ui-spinner-up');
                minus = options.container.find('.ui-spinner-down');
                trail = options.container.find('.slider-box');
                handle = trail.find('.ui-slider-handle');
                tooltip = trail.find('.slider-tooltip');
                trail.sliderPlus({
                    min: options.min,
                    max: options.max,
                    value: options.value,
                    step: options.increment,
                    create: function() {
                        updateAll(options.value);
                    },
                    change: function(e, ui) {
                        updateAll(ui.value);
                    },
                    slide: function(e, ui) {
                        var snapValue = Math.ceil(ui.value / options.step) * options.step;
                        trail.addClass('start');
                        updateAll(snapValue);
                    },
                    stop: function(e, ui) {
                        var snapValue = Math.ceil(ui.value / options.step) * options.step;
                        trail.removeClass('start');
                        setValue(snapValue);
                    },
                    numberFormat: function(val) {
                        var res = val;
                        if (val >= 1000000) {
                            res = (val / 1000000) + '.000.000';
                        } else if (val >= 1000) {
                            res = (val / 1000) + '.000';
                        }
                        return res;
                    }
                });
                // Gestione eventi
                if (minus && minus.length) {
                    minus.click(function() {
                        setValue(input.val());
                    });
                }
                if (plus && plus.length) {
                    plus.click(function() {
                        // console.log('--- plus.click --- ' + e.target.className);
                        setValue(input.val());
                    });
                }
                if (input && input.length) {
                    input.blur(function() {
                        var newValue = parseInt(input.val(), 10);
                        if (!isNaN(newValue)) {
                            setValue(newValue);
                        } else {
                            input.val(getValue());
                        }
                    });
                }
            }
            // Ritorno variabili da rendere pubbliche
            return {
                getStep: getStep,
                getValue: getValue,
                setValue: setValue,
                updateAll: updateAll
            };
        },
        // Classe effect
        blink = function(params) {
            // Variabili private
            var defaults = {
                    interval: 500,
                    speed: 100,
                    max: 4,
                    element: null
                },
                num = 1,
                options,
                timer = null,
                start, stop;
            options = $.extend(defaults, params);
            start = function() {
                if (!timer) {
                    num = 1;
                    timer = setInterval(function() {
                        if (num <= options.max) {
                            ++num;
                            if (options.element.css('opacity') === '1') {
                                options.element.animate({
                                    'opacity': 0.5
                                }, options.speed);
                            } else {
                                options.element.animate({
                                    'opacity': 1
                                }, options.speed);
                            }
                        } else {
                            stop();
                        }
                    }, options.interval);
                }
            };
            stop = function() {
                if (timer) {
                    clearInterval(timer);
                    timer = null;
                    options.element.css({
                        'opacity': 1
                    });
                }
            };
            // Ritorno variabili da rendere pubbliche
            return {
                start: start,
                stop: stop
            };
        },
        // App
        rate = (function() {
            // Variabili private
            var container,
                importiArr = [],
                maxImporto = 0,
                ltv = 80,
                init, loading, add, error, update, setLtv;
            init = function() {
                container = $("#rata-container");
            }; //
            add = function(rata) {
                /* READING PARAMETER */
                var floorStar = rata.isFloor ? "*" : "",
                    info = "",
                    ltvClass, promoClass, promoText, promoDiv,
                    importo, textHTML,
                    durata_mutuo = $("#mDurata").val(),
                    actionDettaglio = isImprese ? 'WsDettaglioMutuoBPMImprese.do' : 'WsDettaglioMutuoBPM.do',
                    urlDettaglio = cgi_script + '/wbOnetoone/cstPopup' + '/do/wbOnetoone/' + actionDettaglio + '?tabId=nav_priv_wbx_finanziamenti&OBSKEY=nav_priv_wbx_xxb_catalogo&OBSCNT=FNZ_NAV&idProdotto=' + rata.idProdotto + '&convenzioneMutuo=',
                    linkDettaglio = "cstPopup('" + urlDettaglio + "', 'Dettaglio', 900, 0);", // 900, 690
                    actionPiano = isImprese ? 'pdfPdaMutuiImprese.do' : 'pdfPdaMutui.do',
                    linkPiano = cgi_script + '/wbOnetoone/' + actionPiano + '?idProdotto=' + rata.idProdotto + '&convenzione=&importo=' + rata.importoFinanziamento + '&durata=' + rata.durataMesi + '&periodicita=mensile&abi=05584&cf=' + Math.random(),
                    linkFoglio = cgi_script + '/nsf/PDFFoglioInformativo.do?cod=' + rata.codFoglioInformativo + '&cf=' + Math.random();
                ltvClass = (typeof rata.ltv !== 'undefined' && (rata.ltv * 1) !== 80 && rata.ltv >= ltv) ? ' ltv' : '';
                promoClass = (typeof rata.promo !== 'undefined' && rata.promo) ? ' promo' : '';
                ltvClass = (ltvClass === '' && promoClass !== '' && durata_mutuo <= 20) ? ' ltv' : ltvClass;
                promoText = (typeof rata.validitaOfferta !== 'undefined' && rata.validitaOfferta !== '') ? '<div class="rata-promo-text">' + rata.validitaOfferta + '</div>' : '';
                promoDiv = (promoClass === '') ? '' : '<div class="rata-stamp"></div><a href="' + cgi_script + '/wbOnetoone/2l/do/wbOnetoone/schedaPrivata.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_finanziamenti&OBSKEY=Guarda_la_Promozione" class="rata-gift">Scopri la promozione</a>';
                importo = formattaNumeriInput(rata.importoRate);
                importiArr.push(importo);
                maxImporto = Math.max(importo, maxImporto);
                /* DESCRIPTION MUTUO */
                if ($.inArray(rata.idProdotto, ['PMOPESTAND00', 'PMOPESTDUN00']) === -1) {
                    info += "<strong>Indice" + floorStar + ":</strong> " + rata.tipoIndice + ' ' + rata.valoreIndice + "% ";
                    info += ("<span class=\"rata-spread\"><strong>Spread:</strong> " + rata.spreadTasso + "%</span> ");
                }
                info += ("<strong>TAN" + floorStar + ":</strong> " + rata.tan + "% ");
                info += ("<strong>TAEG: " + rata.taeg + "%</strong>");
                textHTML = '' + '<div class="rata-wrap' + ltvClass + promoClass + '" style="display:none;">' + '<h3 class="titGeneric03 txtTransformUpper colorBank">' + rata.nomeProdotto + ' <span class="closeable" data-title="<strong>' + rata.nomeProdotto + '</strong><br>' + rata.descrizione + '" data-toggle="tooltip"><i class="icon-info-sign"></i></span></h3>' + promoText + '<div class="rata-progress"><div class="rata-value"><span class="rata-text">' + rata.importoRate + ' &euro; al mese</span></div><div class="rata-trail trail-bg"></div></div>' + '<div class="rata-info">' + info + '</div>' + '<div class="row">' + '<div class="col-xs-12 col-sm-4"><a href="' + linkPiano + '" class="rata-link btn-icon" target="_blank"><i class="icon-folder-open"></i>&nbsp;Piano di ammortamento</a></div>' + '<div class="col-xs-12 col-sm-4"><a href="#" onclick="' + linkDettaglio + '" class="rata-link btn-icon"><i class="icon-table"></i> Scheda di dettaglio</a></div>' + '<div class="col-xs-12 col-sm-4"><a href="' + linkFoglio + '" class="rata-link btn-icon" target="_blank"><i class="icon-file-alt"></i> Informazioni generali</a></div>' + '</div>' + promoDiv + '</div>';
                container.append(textHTML);
            };
            loading = function() {
                var textHTML;
                textHTML = '' + '<div class="rata-wrap first">' + '<div>Caricamento dati...</div>' + '</div>';
                container.html(textHTML);
            };
            error = function() {
                var textHTML;
                textHTML = '' + '<div class="boxesito negativo">' + '<div class="middle"><span class="imgCont"></span>' + '<div class="text"><p><strong>Errore caricamento dati</strong></p></div>' + '</div>' + '</div>';
                container.html(textHTML);
            };
            update = function(listRate) {
                importiArr.length = 0;
                maxImporto = 0;
                container.empty();
                $.each(listRate, function(index, rata) {
                    add(rata);
                });
                initTooltip();
                container.find('.rata-wrap').each(function(index, item) {
                    var importo = importiArr[index],
                        perc = (importo === maxImporto) ? 100 : (importo / maxImporto) * 100;
                    item = $(item);
                    if (!index) {
                        item.addClass('first');
                    }
                    if (!perc) {
                        item.show().find('.rata-value').addClass('rata-zero').css({
                            width: '100%'
                        });
                    } else {
                        item.show().find('.rata-value').css({
                            width: '30%'
                        }).delay(100).animate({
                            width: perc + '%'
                        }, 750);
                    }
                });
            };
            setLtv = function(newLtv) {
                newLtv = parseInt(newLtv, 10);
                if (!isNaN(newLtv)) {
                    ltv = newLtv;
                }
            };
            // Ritorno variabili da rendere pubbliche
            return {
                init: init,
                update: update,
                loading: loading,
                error: error,
                setLtv: setLtv
            };
        }()),
        preventivatore = (function() {
            var loadHTML, loadHTMLSuccess, loadHTMLFailure,
                loadRate, loadRateSuccess, loadRateFailure,
                testImmobile, testImporto, testDurata, roundNumber,
                warningWrapDurata, warningWrapImporto, warningMax = false,
                sliderError, sliderErrorText,
                handleImporto, sliderImmobile, sliderImporto, sliderDurata,
                testImportoChanging = false,
                testImportoCount = 0,
                soglie, isMobile, hideTooltip, showTooltip,
                maxPerc = isImprese ? 0.5 : 0.8,
                maxPercText = isImprese ? 'il 50%' : 'l\'80%',
                valImmobile = isImprese ? 750000 : 200000,
                valImporto = isImprese ? 225000 : 120000,
                isLoadingRate = false;
            roundNumber = function(value, places) {
                return +(Math.round(value + 'e+' + places) + 'e-' + places);
            };
            isMobile = function() {
                return ($(window).width() < 768);
            };
            hideTooltip = function(warningWrap) {
                if (isMobile()) {
                    sliderError.modal('hide');
                } else {
                    warningWrap.tooltip('hide');
                }
            };
            showTooltip = function(warningWrap, errorText, isError) {
                if (isMobile()) {
                	sliderErrorText.html(errorText);
                    sliderError.modal('show');
                } else {
                    warningWrap.attr('data-title', errorText).tooltip('show');
                }
            };
            testImmobile = function() {
                var newValImmobile, step;
                if (sliderImmobile) {
                	step = sliderImmobile.getStep();
                    newValImmobile = sliderImmobile.getValue() / step;
                    soglie = {
                        "50": isImprese ? 0 : Math.ceil(newValImmobile / 2) * step,
                        "60": isImprese ? 0 : Math.ceil(newValImmobile * 0.6) * step,
                        "max": Math.ceil(newValImmobile * maxPerc) * step,
                        "warningpromo": Math.ceil(newValImmobile * 0.6 * maxPerc) * step
                    };
                    testImporto();
                }
            };
            testImporto = function() {
                var newValImporto, testImportoNum;
                ++testImportoCount;
                testImportoNum = 'ti-' + testImportoCount;
                if (!testImportoChanging && sliderImporto) {
                    testImportoChanging = true;
                    newValImporto = sliderImporto.getValue();
                    rate.setLtv(0);
                    // console.log(testImportoNum + ' ----- testImporto -----');
                    // console.log(testImportoNum + ' - newValImporto: ' + newValImporto);
                    // console.log(testImportoNum + ' - soglie.max: ' + soglie.max);
                    //warningWrapImporto.attr('data-title', 'Tasso agevolato sul prodotto Mutuo promo ottobre 2014');
                    if (newValImporto > soglie.max) {
                        // console.log(testImportoNum + ' - set warningMax true');
                        testImportoChanging = false;
                        sliderImporto.setValue(soglie.max);
                    	showTooltip(warningWrapImporto, 'L\'importo non pu&ograve; superare ' + maxPercText + ' del valore immobile indicato', true);
                        return;
                    } else if (newValImporto === 1000000 || newValImporto === 30000) {
                    	if (!$("#slider-importo .tooltip").length) {
                        	showTooltip(warningWrapImporto, 'Se sei interessato a un importo di finanziamento minore o maggiore rispetto ai valori disponibili,' + ' <strong>fissa un appuntamento in agenzia</strong> tramite <a id="agenziaLink" href="#">apposito form</a>.', false);
                    	}
                    	
                        if (!isImprese) {
                            if (newValImporto <= soglie['50']) {
                                rate.setLtv(50);
                            } else if (newValImporto <= soglie['60']) {
                                rate.setLtv(60);
                            }
                        }
                        // console.log(testImportoNum + ' - vai in agenzia');
                    } else if (newValImporto < soglie.max) {
                		hideTooltip(warningWrapImporto);
                        // TASSO PROMOZIONALE 
                        /*
                        if (newValImporto <= soglie['50']) {
                        	rate.setLtv(50);
                        	// warningWrapImporto.show();
                        	// warningWrapImporto.attr('data-title', 'Offerta importo <= 50%');
                        	// showTooltip = true;
                        	// console.log(testImportoNum + ' - <= 50');
                        } else if (newValImporto <= soglie['60']) {
                        	rate.setLtv(60);
                        	warningWrapImporto.show();
                        	warningWrapImporto.attr('data-title', 'Tasso agevolato sui prodotti Mutuo con Opzione e Mutuo Tasso Fisso');
                        	showTooltip = true;
                        	// console.log(testImportoNum + ' - <= 60');
                        }
                        */
                        if (!isImprese && newValImporto <= soglie['50']) {
                            rate.setLtv(50);
                        }
                    }

                    // console.log(testImportoNum + ' - end');
                    testImportoChanging = false;
                }
                // else {
                // console.log(testImportoNum + ' - skip');
                // }
            };
            testDurata = function() {
                if (!isImprese && sliderDurata) {
                    // console.log('durata: ' + sliderDurata.getValue());
                    if (sliderDurata.getValue() < 21) {
                        showTooltip(warningWrapDurata, 'Tasso agevolato sul prodotto Mutuo con spread a partire da 1,50%', false);
                    } else {
                        if (!isMobile()) {
                            hideTooltip(warningWrapDurata);
                        }
                    }
                }
            };
            loadHTML = function() {
                // Variabili locali
                var revisionNum = (typeof revision === 'undefined') ? Math.random() : revision,
                    templateUrl = "/wscmn/html/mutui_preventivatore_resp.html?a=" + revisionNum;
                $.ajax({
                    url: templateUrl,
                    dataType: "html",
                    success: loadHTMLSuccess,
                    error: loadHTMLFailure
                });
            };
            loadHTMLSuccess = function(html) {
                var lnkAppuntamento, lnkInfo;
                // Rimuove la chiocciola di loading
                prevObj = $(".preventivatore").removeClass("loading").html(html);
                warningWrapImporto = $("#slider-importo .ui-slider-handle").tooltip({
					html: true,
					title: function () {
					    var closeIcoTooltip = '<a href="#!" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>';
					    var titleClose = $(this).attr('data-title') + closeIcoTooltip;
					    return titleClose;
					},
					trigger: 'manual',
					animation: false,
					placement: 'auto',
					container: $("#slider-importo")
				});
                warningWrapDurata = $("#slider-durata .ui-slider-handle").tooltip({
					html: true,
					title: function () {
					    var closeIcoTooltip = '<a href="#!" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>';
					    var titleClose = $(this).attr('data-title') + closeIcoTooltip;
					    return titleClose;
					},
					trigger: 'manual',
					animation: false,
					placement: 'auto',
					container: $("#slider-durata")
				});
				$("#slider-importo, #slider-durata").each(function () {
					var el = $(this);
					el.on('click', '.closeTooltip', function (e) {
						e.preventDefault();
	                    hideTooltip(el.find('.ui-slider-handle'));
					});
				});
                sliderError = $('#sliderError');
                sliderErrorText = $('#sliderErrorText');
                handleImporto = $("#slider-importo .ui-slider-handle");
                initUniform(prevObj);
                btnCalcolaRata = $("#btn-calcola-rata").click(loadRate);
                if (isImprese) {
                    $('#percLtvTooltip').html('al 50%');
                    $('#label-importo .nomefield').html('Importo richiesto (&euro;)');
                    $('#slider-wrap-durata .slider-label-min').html('4 anni');
                    $('#slider-wrap-durata .slider-label-max').html('10 anni');
                } else {
                    $('#slider-wrap-durata .slider-label-min').html('6 anni');
                    $('#slider-wrap-durata .slider-label-max').html('30 anni');
                }
                // Controllo nput campi
                $("#mImmobile").keyup(function(e) {
                    var el = $(this),
                        val;
                    cleanImportInt(e);
                    val = parseInt(el.val(), 10);
                    el.val(isNaN(val) ? '' : Math.min(val, 10000000));
                });
                // Controllo nput campi
                $("#mImporto").keyup(function(e) {
                    var el = $(this),
                        val;
                    cleanImportInt(e);
                    val = parseInt(el.val(), 10);
                    el.val(isNaN(val) ? '' : Math.min(val, 1000000));
                });
                $("#mDurata").keyup(function(e) {
                    var el = $(this),
                        val;
                    cleanImportInt(e);
                    val = parseInt(el.val(), 10);
                    el.val(isNaN(val) ? '' : Math.min(val, 30));
                });
                setSpinner({
                    idInput: '#mImmobile',
                    step: 2000,
                    min: 40000,
                    max: 10000000
                });
                setSpinner({
                    idInput: '#mImporto',
                    step: 2000,
                    min: 30000,
                    max: 1000000
                });
                setSpinner({
                    idInput: '#mDurata',
                    step: 1,
                    min: 6,
                    max: 30
                });
                // Blinking del pulsante calcola rata
                blinkBtnCalcolaRata = blink({
                    element: $('#bpm-btn-wrap')
                });
                // Slider valore immobile
                sliderImmobile = slider({
                    min: 40000,
                    max: 10000000,
                    value: valImmobile,
                    step: 1000,
                    increment: 1000,
                    update: function() {
                        testImmobile();
                        blinkBtnCalcolaRata.start();
                    },
                    container: $("#slider-immobile")
                });
                // Slider importo mutuo
                sliderImporto = slider({
                    min: 30000,
                    max: 1000000,
                    value: valImporto,
                    step: 1000,
                    increment: 1000,
                    update: function() {
                        testImporto();
                        blinkBtnCalcolaRata.start();
                    },
                    container: $("#slider-importo")
                });
                testImmobile();
                // Slider durata in anni
                sliderDurata = slider({
                    min: isImprese ? 4 : 6,
                    max: isImprese ? 10 : 30,
                    value: isImprese ? 10 : 25,
                    step: 1,
                    increment: 1,
                    update: function() {
                        // testDurata();
                        blinkBtnCalcolaRata.start();
                    },
                    container: $("#slider-durata")
                });
                rate.init();
                //loadRate();
                $('#noteField').hide(); //nascondo le note per visualizzarle al caricamento di dati
                // ttSet($('#slider-container'));
                if (isImprese) {
                    lnkAppuntamento = 'http://bpm.it/it-com/contatti/richiesta-appuntamento.html?area=02_piccole-medie-imprese';
                    lnkInfo = cgi_script + '/wbOnetoone/contattaci.do?BV_UseBVCookie=Yes&tabId=nav_priv_iln_gest_fin_servizi&OBS_KEY=nav_priv_iln_help_contatti_agenzie_email';
                } else {
                    lnkAppuntamento = cgi_script + '/wbOnetoone/2l/jsp/wbOnetoone/wbblack/contents/hc/hcAppAgenzia.do?tabId=nav_priv_wbx_helpcenter&OBSKEY=nav_priv_wbx_contatta_agenzia';
                    lnkInfo = cgi_script + '/wbOnetoone/2l/jsp/wbOnetoone/wbblack/contents/hc/email_privati.do?tabId=nav_priv_wbx_helpcenter&OBSKEY=nav_priv_wbx_scrivi';
                }
                $('#lnkAppuntamento1, #lnkAppuntamento2').attr('href', lnkAppuntamento);
                $('#lnkInfo').attr('href', lnkInfo);
                //
                $('#slider-importo .slider-warning-wrap').on('mousedown click', function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    if ($(e.target).attr('id') === 'agenziaLink') {
                        $('#lnkAppuntamento2')[0].click();
                    }
                    return false;
                });
            };
            loadHTMLFailure = function() {
                /* Riattivazione form */
                setMsgOn({
                    wrapper: prevObj,
                    msgText: 'Errore nel caricamento del template',
                    boxClass: 'negativo'
                });
            };
            loadRate = function() {
                if (!isLoadingRate) {
                    isLoadingRate = true;
                    var durata_mutuo = $("#mDurata").val(),
                        immobile = $("#mImmobile").val(),
                        importo = $("#mImporto").val(),
                        periodicita_rate = '01#0#mensile',
                        finalitaPar = $("input[name=finalita]:checked").val(),
                        parameters = {
                            method: 'json',
                            valoreImmobile: immobile,
                            importoFinanziamento: importo,
                            durata: durata_mutuo,
                            periodicita: periodicita_rate,
                            finalita: finalitaPar,
                            cf: Math.random()
                        },
                        url = isImprese ? '/WsConfrontaMutuiBPMImprese.do' : '/WsConfrontaMutuiBPM.do',
                        jqUrl = (typeof isLibrerie === 'undefined' || !isLibrerie) ? cgi_script + '/wbOnetoone' + url : pathLibrerie + pathPreventivatore + url.replace(/\.do(\?)?/i, '.php$1');
                    jqAJAXCall('POST', 'json', jqUrl, loadRateSuccess, loadRateFailure, parameters);
                    /* Disattivazione form per evitare ulteriori chiamate */
                    blinkBtnCalcolaRata.stop();
                    rate.loading();
                    $('#slider-form').addClass('loading');
                }
            };
            loadRateSuccess = function(res) {
                if (res.isEsito === 'true') {
                    rate.update(res.mutui);
                    //visualizzo note
                    $('#noteField').show();
                    /* Riattivazione form */
                    $('#slider-form').removeClass('loading');
                } else {
                    loadRateFailure();
                }
                isLoadingRate = false;
            };
            loadRateFailure = function() {
                /* Riattivazione form */
                $('#slider-form').removeClass('loading');
                rate.error();
                isLoadingRate = false;
            };
            // Ritorno variabili da rendere pubbliche
            return {
                loadHTML: loadHTML,
                loadRate: loadRate
            };
        }()),
        // Oggetto DOM
        prevObj,
        // Istanze widget
        btnCalcolaRata,
        blinkBtnCalcolaRata;
    preventivatore.loadHTML();
});
