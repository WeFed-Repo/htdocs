var printLog = function (msg) {
        if (typeof console !== 'undefined' && console.log) {
            console.log.apply(null, arguments);
        }
    },
    printError = function (msg) {
        if (typeof console !== 'undefined' && console.error) {
            console.error.apply(null, arguments);
        }
    },
    printObject = function (obj) {
        if (typeof console !== 'undefined' && console.dir) {
            console.dir(obj);
        }
    },
    sportello = (function () {
        "use strict";

        // region DICHIARAZIONE VARIABILI
        /**
         * @typedef {Object} Contatto
         * @property {Object} operatore
         * @property {string} operatore.prefisso
         * @property {string} operatore.numero
         * @property {string} operatore.host_name
         * @property {Object} anagrafica
         * @property {string} anagrafica.nome
         * @property {string} anagrafica.cognome_rag_soc
         * @property {string} anagrafica.id
         * @property {string} anagrafica.avatar_file
         * @property {string} anagrafica.flg_rapporto
         * @property {string} anagrafica.flg_telefono
         * @property {string} anagrafica.flg_carta
         * @property {string} numero
         * @property {string} note
         * @property {string} tipoCarta
         * @property {string} carta
         */

        /**
         * @typedef {Object} Bollo
         * @property scadenza
         * @property regione
         * @property provincia
         * @property tassa
         * @property commissioni
         * @property sanzioni
         * @property interessi
         * @property totale
         */

        /**
         * @typedef {Object} Conto
         * @property cc
         * @property ct
         * @property cd
         * @property cder
         * @property hasEvo
         * @property hasNonSvinc
         * @property hasFresh
         * @property promo
         * @property valuta
         * @property carta
         */
            // Metodi
        var dispId, setLinks, init, initMovDispo, handleClick, hasWebankIban, load, checkLoad, getCallSettings,
            getBonificoDate, isNewJsonCallFailed, showCallError, showWarningQuestion,
            printFailureData, getPageInfo, getOpSettings,
            loadDatiIniziali, loadRubriche, loadNazioni, loadMov, loadDispo, loadDispoDetail, loadTagliTel,
            loadAuto, loadMovDispo, loadContatti, initCellette,
            initDatiIniziali, initDatePickersBonifico, initDatePickersBollettino, initDatePickersMavRav, updateAuthCode,
            updateNazioni,
            updateRubriche, updateTabMov, updateTabDispo, updateDispoDetail, completeMovDispo,
            updateDettBonifico, updateDettPrepagata, updateDettCellulare, updateDettBollettino,
            updateContatti, updateAtm, updateDettAtm, updateBollo, updateDettMavRav,
            addMovDetail, addDispoDetail, showDetail, hideDetail, changePage, goToPrevPage, goToNextPage, goToAuthPage,
            goToRetryPage,
            resetCarousel, getCarousel, getAuthPage,
            getBen, getInputPrepagata, getBenCell, getNumCell, getInputCell, getContoSelezionato,
            getPrimaDataBollettino,
            getPrimaDataMavRav, getContattoInfo, getInputAtm, getInputAtmBis, getInputMavRav, getIBAN,
            getDataAccredito, getImpBollo, pollingSlideId, pollingSlideClass, resetForms,
            setAuthParameters, setContatto, checkDateBonifico, getStaticLink, goToOkPage, goToKoPage,
            checkDateMavRav, updateTagliTel, updateBollettino,
            updateBollettinoBis, resetSemVars,
            sendSMS, tagliTelRequest, checkRequest, checkCartaRequest, checkBonificoRequest, checkCellulareRequest,
            checkAtmRequest,
            sendBonifico, sendPrepagata, sendCellulare, sendBollettino, handleDispoKO, handleDispoOK,
            sendMavRav, checkBollettino, sendAtm, updateDettBollo, checkBolloCommissioni, sendBollo,
            sendSMSOK, tagliTelOK, checkOK, checkCartaOK, checkBonificoOK, checkCellulareOK, checkAtmOK, bonificoOK,
            prepagataOK, cellulareOK, bollettinoOK,
            checkBollettinoOK,
            checkTagli, checkTagliOK, atmOK, bolloOK, checkMavRav, checkMavRavOK, mavRavOK,
            deleteContatto, addContatto, loadContatto, sendImportoPreferito, sendImportoPreferitoOK,
            deleteContattoOK, addContattoOK, updateContatto, updateAuthPage, collapseAccordion, closeContatti,
            /**
             * @property {Bollo} dettBollo
             */
            dettBollo,
            saldoExpand, saldoCollapse,
            saChangePush, saVerifyPush, saCreatePush, saCheckPush, saStartPolling, saStopPolling, pushPoll,
            saIsPolling = false,
            showPollingSlide, hidePollingSlide, setPollingSlide, showOTP, showSMS,
            showMsgOnPage, hideMsgOnPage, showLoadingOnPage, hideLoadingOnPage,
            // Proprieta'
            loadKO = false,
            checkLoadObj = {
                'datiIniziali': false,
                'nazioni': false,
                'rubriche': false
            },
            ajaxCalling, debugLoading = false, debugPolling = false,
            webankIban = false,
            defaultError = 'Si sono verificati dei problemi tecnici',
            intestCJ, isApp,
            requestIdInPage, authCode1, authCode2, authCodeNum, contoSelezionato, contattoSelezionato, $contattoPage,
            ctrlOTP, primaDataBollettino, primaDataMavRav, bolloDatiTrans, bolloForzaAddebito = false,
            bolloTot,
            rubricaIban = [],
            rubricaCarte = [],
            rubricaCell = [],
            rubricaTesATM = [],
            rubricaContatti = [],
            rubricaAllContatti = [],
            newContactNum = 0,
            movDetailArr, dispoDetailArr, tagliTelArr = [],
            ibanArr = {},
            estrattoContoArr = {},
            carteArr = {},
            fadeDuration = 200,
            slideDuration = 400,
            forceBollettino = false,
            forceAtm = false,
            isBollettinoPre = false,
            isCkeckTagliSent = false,
            isLoadingMovData = false,
            isLoadingDispoData = false,
            isLoadingTagliTel = false,
            reloadTagliTel = false,
            isMovDispoOK = false,
            bonificoDateArr = [],
            mavravDateArr = [],
            strongAuth = false,
            strongAuthData = {},
            bollIntestatario = "",
            rubricheOK = {},
            /**
             * @property {Conto[]} conti
             */
            dynamicLinks, staticLinks, dataLinks, dispoLinks, hashOtp;
        //endregion

        //region INIT, METODI UTILI1
        setLinks = function (links) {
            dynamicLinks = links.dynamicLinks;
            staticLinks = links.staticLinks;
            dataLinks = links.dataLinks;
            dispoLinks = links.dispoLinks;
        };
        init = function () {
            $('#accordionOpsLoading').addClass('loading');
            $('#fpData').addClass('loaded');

            resetSemVars();
            initCellette();
            initMovDispo();
            load();

            $('#fpLoading').hide();
        };
        initCellette = function () {
            // CELLETTE
            $('#spPromoCarousel').carouselPlus();
        };
        initMovDispo = function () {
            // *** Movimenti e disposizioni ***
            $('#movContent table').on('click', '.linkDetail a', function (event) {
                var $link = handleClick(event, this),
                    detailId = $link.attr('data-id'),
                    $tr = $link.closest('tr');
                if ($tr.hasClass('master')) {
                    hideDetail('#movDetail' + detailId);
                } else {
                    showDetail('#movDetail' + detailId);
                }
            });

            $('#dispoContent table').on('click', '.linkDetail a', function (event) {
                var $link = handleClick(event, this),
                    detailId = $link.attr('data-id'),
                    detailInfo = $link.attr('data-info'),
                    $tr = handleClick(event, this).closest('tr');
                if ($tr.hasClass('master')) {
                    hideDetail('#dispoDetail' + detailId);
                } else {
                    if (typeof dispoDetailArr[detailId] === 'undefined') {
                        if (detailInfo !== '') {
                            loadDispoDetail(detailId, detailInfo);
                        } else {
                            addDispoDetail(detailId, dispoDetailArr[detailId]);
                        }
                    } else {
                        showDetail('#dispoDetail' + detailId);
                    }
                }
            });
        };
        load = function () {
            // Loading Operazioni veloci
            // showLoadingOnPage("#buttonBox");
            isMovDispoOK = true;
            $('#movDispoExp').show();

            // Imposto i link
            $.each(staticLinks, function (key, value) {
                var $el = $('#' + key);
                if ($el.length) {
                    $el.attr('href', value);
                }
            });

            requestIdInPage = $('#requestIdInPage').val();

            loadDatiIniziali();
            loadNazioni();
            loadRubriche();
            loadContatti();
        };
        checkLoad = function (key, value) {
            var check;
            if (!loadKO) {
                if (!value) {
                    loadKO = true;
                    $('#fpLoading').removeClass('loading');
                } else {
                    checkLoadObj[key] = value;

                    // Controllo se tutti i valori sono impostati a true,
                    // ovvero se tutte le chiamate hanno avuto successo
                    check = Object.getOwnPropertyNames(checkLoadObj).every(function (property) {
                        return checkLoadObj[property];
                    });
                    if (check) {
                        $('#accordionOpsLoading').removeClass('loading');
                    }
                }
            }
        };
        handleClick = function (event, $element) {
            event.stopPropagation();
            return $($element).trigger('blur');
        };
        checkDateBonifico = function (date) {
            return [($.inArray(date.format('dd/mm/yyyy'), bonificoDateArr) > -1), '', ''];
        };
        checkDateMavRav = function (date) {
            return [($.inArray(date.format('dd/mm/yyyy'), mavravDateArr) > -1), '', ''];
        };
        getPageInfo = function ($page) {
            var pageInfo = $page.attr('id');
            if (!pageInfo || $page === '') {
                pageInfo = $page.attr('class');
                if (!pageInfo || $page === '') {
                    pageInfo = '';
                }
            }
            return pageInfo;
        };
        setContatto = function ($page) {
            var contattoInd = parseInt($page.closest('.spPersonCol').attr('data-person-num'), 10);
            $contattoPage = $page;
            contattoSelezionato = rubricaContatti[contattoInd];
        };
        getImpBollo = function () {
            return bolloTot;
        };
        getBonificoDate = function () {
            return bonificoDateArr;
        };
        getDataAccredito = function (dataInput) {
            var dataInserita = getDateFromString(dataInput),
                dataMin = getDateFromString(primaDataBollettino);
            return (!dataInserita || dataMin > dataInserita) ? dataMin : dataInserita;
        };
        getPrimaDataBollettino = function () {
            return primaDataBollettino;
        };
        getPrimaDataMavRav = function () {
            return primaDataMavRav;
        };
        /**
         * @param tipo
         * @returns {Contatto}
         */
        getContattoInfo = function (tipo) {
            var info = null;
            if (typeof contattoSelezionato[tipo] !== 'undefined') {
                // Cerco il preferito
                $.each(contattoSelezionato[tipo], function () {
                    if (this.preferito) {
                        info = this;
                        return false;
                    }
                });
                // Se non c'è nemmeno un preferito, prendo il primo
                if (!info && contattoSelezionato[tipo].length) {
                    info = contattoSelezionato[tipo][0];
                }
            }
            return info;
        };
        /**
         * @param key
         * @returns {string}
         */
        getStaticLink = function (key) {
            return staticLinks[key];
        };
        getOpSettings = function (prefix) {
            var opSettings = {
                suffix: ''
            };
            switch (prefix) {
                case '#bonifico':
                    opSettings.otpType = opSettings.pollingType = "SEP";
                    opSettings.sendFunc = sportello.sendBonifico;
                    break;
                case '#prepagata':
                    opSettings.otpType = opSettings.pollingType = "RPR";
                    opSettings.sendFunc = sportello.sendPrepagata;
                    break;
                case '#cellulare':
                    opSettings.otpType = opSettings.pollingType = "CEL";
                    opSettings.sendFunc = sportello.sendCellulare;
                    break;
                case '#bollettino':
                    opSettings.otpType = opSettings.pollingType = "BFB";
                    opSettings.sendFunc = sportello.sendBollettino;
                    opSettings.suffix = 'Bis';
                    break;
                case "#bollo":
                    opSettings.otpType = opSettings.pollingType = "ACI";
                    opSettings.sendFunc = sportello.sendBollo;
                    break;
                case "#atm":
                    opSettings.otpType = opSettings.pollingType = "ATM";
                    opSettings.sendFunc = sportello.sendAtm;
                    opSettings.suffix = 'Bis';
                    break;
                case "#mavrav":
                    opSettings.otpType = opSettings.pollingType = $('#selectMavrav').val().toUpperCase();
                    opSettings.sendFunc = sportello.sendMavRav;
                    break;
            }
            return opSettings;
        };
        hasWebankIban = function () {
            return webankIban;
        };
        isApp = function () {
            return (strongAuthData.type === "A");
        };
        /**
         * @param data
         * @param data.esito
         * @returns {*[]}
         */
        isNewJsonCallFailed = function (data) {
            var failed = !data,
                errMsg = defaultError,
                isAlertCode = false;

            if (!failed) {
                failed = $.inArray(data.esito.codice, ["0", "GENERATE_PASSWORD", "SMASH_RISK_RED", "OTP_KO"]) < 0;

                if (failed || data.esito.codice === "SMASH_RISK_RED" || data.esito.codice === "OTP_KO") {
                    errMsg = data.esito.descrizione;
                }

                isAlertCode = (failed && data.esito.codice === "2");
            }
            return [failed, errMsg, isAlertCode];
        };
        showLoadingOnPage = function ($page) {
            hideLoadingOnPage($page);
            $page.append('<div class="loadingOnPage loading"></div>');
        };
        hideLoadingOnPage = function ($page) {
            $page.find('.loadingOnPage').remove();
        };
        /**
         * @param options
         * @param options.wrapper
         * @param options.boxClass
         * @param options.msgText
         * @param options.okbutton
         * @param options.okfunction
         * @param options.kobutton
         * @param options.kofunction
         * @param options.closeable
         * @param options.kolink
         * @param options.iscontatto
         * @returns {*[]}
         */
        showMsgOnPage = function (options) {
            var koButtonHTML = '',
                koButtonText,
                okButtonHTML = '',
                colWidth, colOffset;
            hideMsgOnPage(options.wrapper);
            if (options.iscontatto && options.iscontatto === true) {
                colWidth = 'col-xs-6';
                colOffset = '';
            } else {
                colWidth = 'col-xs-4';
                colOffset = 'col-xs-offset-4';
            }
            if (!options.closeable || options.closeable === true) {
                if (typeof options.kolink === 'undefined') {
                    koButtonText = typeof options.kobutton === 'undefined' ? 'Indietro' : options.kobutton;
                    koButtonHTML = '<div class="' + colWidth + '"><a type="button" class="btn btn-default btn-full btnQuestionAnnulla" href="javascript:">' + koButtonText + '</a></div>';
                } else {
                    koButtonHTML = '<div class="' + colWidth + '"><a class="btnQuestionAnnulla" href="javascript:;">' + options.kolink + '</a></div>';
                }
            }
            if (typeof options.okbutton !== 'undefined') {
                okButtonHTML = '<div class="' + colWidth + ' ' + colOffset + '"><a type="button" class="btn btn-primary btn-full btnQuestionProsegui" href="javascript:">' + options.okbutton + '</a></div>';
            }
            options.wrapper.append('<div class="msgOnPage">' + '<div class="msgOnPageWrap" style="opacity: 0">' + '<section class="boxesitoWrap">' + '<div class="boxesito ' + options.boxClass + '">' + '<div class="text">' + '<div class="row">' + '<div class="col-xs-12">' + '<p class="note">' + options.msgText + '</p>' + '</div>' + '</div>' + '</div>' + '</div>' + '</section>' + '<div class="row">' + koButtonHTML + okButtonHTML + '</a></div></div>' + '</div>' + '</div>');
            // Funzioni associate ai bottoni
            if (typeof options.kofunction !== 'undefined') {
                options.wrapper.find(".btnQuestionAnnulla").click(options.kofunction);
            }
            if (typeof options.okfunction !== 'undefined') {
                options.wrapper.find(".btnQuestionProsegui").click(options.okfunction);
            }
            options.wrapper.find('.msgOnPageWrap').animate({ opacity: 1 }, 500);
        };
        hideMsgOnPage = function ($page) {
            $page.find('.msgOnPage').remove();
        };
        showCallError = function (errMsg, $page) {
            showMsgOnPage({
                wrapper: $page,
                msgText: errMsg,
                boxClass: 'negativo'
            });
        };
        /**
         * @param params
         * @param params.wrapper
         * @param params.question
         * @param params.okbutton
         * @param params.okfunction
         * @param params.kobutton
         * @param params.kofunction
         * @returns {*[]}
         */
        showWarningQuestion = function (params) {
            showMsgOnPage($.extend({
                msgText: params.question,
                boxClass: "attenzione"
            }, params));
        };
        //endregion

        //region ANIMAZIONI
        getCarousel = function (prefix, isContatto) {
            var classPrefix, $opsBox, $carousel;
            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $carousel = $opsBox.find(classPrefix + 'Carousel');
            } else {
                $carousel = $(prefix + 'Carousel');
            }
            return $carousel;
        };
        getAuthPage = function (prefix, isContatto) {
            var $carousel = getCarousel(prefix, isContatto),
                $page, classPrefix;

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $page = $carousel.find(classPrefix + 'Page2');
            } else {
                $page = $(prefix + 'Page2');
            }

            return $page;
        };
        changePage = function ($carousel, nextIndex) {
            var $pages, $currPage, $nextPage;

            $pages = $carousel.find('.carouselPlusPage');
            $currPage = $pages.filter('.carouselPlusPage.on');
            $nextPage = $pages.eq(nextIndex);

            $currPage.trigger('closing');
            $nextPage.trigger('opening');
            $carousel.carouselPlus();
            $carousel.carouselPlus('currentPage', nextIndex);
            $currPage.trigger('closed');
            $nextPage.trigger('opened');
        };
        goToRetryPage = function ($carousel) {
            var $pages = $carousel.find('.carouselPlusPage'),
                $currPage = $pages.filter('.carouselPlusPage.on'),
                currIndex = $pages.index($currPage);

            changePage($carousel, currIndex - 2);
        };
        goToPrevPage = function ($carousel) {
            var $pages = $carousel.find('.carouselPlusPage'),
                $currPage = $pages.filter('.carouselPlusPage.on'),
                currIndex = $pages.index($currPage);

            changePage($carousel, currIndex - 1);
        };
        goToNextPage = function ($carousel) {
            var $pages = $carousel.find('.carouselPlusPage'),
                $currPage = $pages.filter('.carouselPlusPage.on'),
                currIndex = $pages.index($currPage);

            changePage($carousel, currIndex + 1);
        };
        goToAuthPage = function (prefix, otpType, pollingType, isContatto) {
            var formOK = true;

            isContatto = typeof isContatto === 'undefined' ? false : isContatto;

            if (!isContatto && prefix === '#bonifico' && formOK && !check.isSepa(getIBAN())) {
                this.showCallError('Non è possibile inserire in questa sezione bonifici verso Paesi non aderenti all\'area Sepa<br/><br/>' + '<a href="' + staticLinks.linkBonifico + Math.random() + '">Clicca per accedere alla funzione</a>', $('#bonificoPage1'));
                formOK = false;
            }
            if (formOK) {
                updateAuthPage(prefix, pollingType, isContatto);
            }

            return false;
        };
        updateAuthPage = function (prefix, pollingType, isContatto) {
            var $page, $carousel, classPrefix, updateFunc, type;

            if (isApp()) {
                saStartPolling(pollingType, isContatto);
                type = 'App';
            } else {
                type = 'Token';
            }

            $carousel = getCarousel(prefix, isContatto);
            $page = getAuthPage(prefix, isContatto);

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $page.find('.spBottBox form').hide();
                $page.find(classPrefix + 'Page2Form' + type).show();

                if (type === 'App') {
                    $page.find('.spTopWrap').hide();
                    showPollingSlide(pollingType, true);
                } else {
                    $page.find('.spTopWrap').show();
                    hidePollingSlide(pollingType, true);
                }
            } else {
                $page.find('.spBottBox form').hide();
                $(prefix + 'Page2Form' + type).show();

                if (type === 'App') {
                    $(prefix + 'Page2FormAppOK').show();
                    $(prefix + 'Page2FormAppKO').hide();
                    showPollingSlide(pollingType, false);
                } else {
                    hidePollingSlide(pollingType, false);
                }
            }

            switch (prefix) {
                case "#bonifico":
                    updateFunc = updateDettBonifico;
                    break;
                case "#prepagata":
                    updateFunc = updateDettPrepagata;
                    break;
                case "#cellulare":
                    updateFunc = updateDettCellulare;
                    break;
                case "#bollettino":
                    updateFunc = updateDettBollettino;
                    break;
                case "#bollo":
                    updateFunc = updateDettBollo;
                    break;
                case "#atm":
                    updateFunc = updateDettAtm;
                    break;
                case "#mavrav":
                    updateFunc = updateDettMavRav;
                    break;
            }

            updateFunc($page, isContatto);
            goToNextPage($carousel);
        };
        goToOkPage = function (prefix, isContatto) {
            var classPrefix, $nextPage, $carousel, $opsBox;

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $nextPage = $opsBox.find(classPrefix + 'Page3');
                $carousel = $opsBox.find(classPrefix + 'Carousel');
            } else {
                $nextPage = $(prefix + 'Page3');
                $carousel = $(prefix + 'Carousel');
                loadContatti();
            }

            $nextPage.find('.esitoKO').hide();
            $nextPage.find('.esitoOK').show();
            goToNextPage($carousel);
            loadMovDispo();
            loadRubriche();
        };
        goToKoPage = function (prefix, isContatto, errorMsg, reset) {
            var classPrefix, $nextPage, $carousel, $opsBox, $esitoKO;

            errorMsg = errorMsg || "Non è stato possibile eseguire l'operazione.";

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $nextPage = $opsBox.find(classPrefix + 'Page3');
                $carousel = $opsBox.find(classPrefix + 'Carousel');
            } else {
                $nextPage = $(prefix + 'Page3');
                $carousel = $(prefix + 'Carousel');
            }

            $nextPage.find('.esitoOK').hide();
            $esitoKO = $nextPage.find('.esitoKO').show();
            $esitoKO.find('.text').html('<p><strong>' + errorMsg + '</strong></p>');

            if (!reset) {
                $esitoKO.find('.spRetry').show();
                $esitoKO.find('.spReset').hide();
            } else {
                $esitoKO.find('.spRetry').hide();
                $esitoKO.find('.spReset').show();
            }

            goToNextPage($carousel);
        };
        resetCarousel = function ($carousel, doResetForm, isContatto) {
            var $pagesArr = $carousel.find('.carouselPlusPage');

            doResetForm = (typeof doResetForm === 'undefined' || doResetForm);
            isContatto = (typeof isContatto !== 'undefined' && isContatto);

            if (doResetForm) {
                resetForms($carousel.find('.sectioncont form'), isContatto);
            }

            hideLoadingOnPage($pagesArr);
            hideMsgOnPage($pagesArr);
            changePage($carousel, 0);
        };
        resetForms = function ($forms, isContatto) {
            $forms.each(function () {
                var $form = $(this),
                    formId, rapporto, carta;
                resetSemVars();
                resetForm($form);
                if (isContatto) {
                    if ($form.hasClass('bonificoContattoForm')) {
                        rapporto = getContattoInfo('rapporto');
                        if (rapporto.importoPreferito !== '' && rapporto.importoPreferito) {
                            $form.find('.inputImportoContatto').val(rapporto.importoPreferito);
                            $form.find('.icon-star_fill').removeClass('disabled');
                        } else {
                            $form.find('.inputImportoContatto').val('');
                            $form.find('.icon-star_fill').addClass('disabled');
                        }
                    } else if ($form.hasClass('cellulareContattoForm')) {
                        loadTagliTel(true);
                    } else if ($form.hasClass('prepagataContattoForm')) {
                        carta = getContattoInfo('carta');
                        $form.find('.inputBenCjContatto').html(carta.numero);
                    }
                } else {
                    formId = $form.attr('id');
                    if (formId === 'bonificoForm') {
                        $('#inputBen').comboboxPlus('clear');
                        $("#datepickerBonifico").val(getBonificoDate()[0]);
                        $('#inputIBAN').val('').show();
                        $('#outputIBAN').empty().hide();
                        $('#inputNazione').val('86');
                    } else if (formId === 'prepagataForm') {
                        $('#inputBenPrepagata').comboboxPlus('clear');
                        $('#inputTypePrepagata').val('').show();
                        $('#outputTypePrepagata').empty().hide();
                        $('#boxIntestPrepagata').hide();
                    } else if (formId === 'cellulareForm') {
                        $('#inputBenCellulare').comboboxPlus('clear');
                        $('#inputImportoCellulare').attr('disabled', 'disabled').val('0');
                        $('#inputOperCellulare').attr('disabled', false).val('');
                    } else if (formId === 'bollettinoForm') {
                        $('#boxBollettino').hide();
                        $("#datepickerBollettino").val(primaDataBollettino);
                    } else if (formId === 'bollettinoFormBis') {
                    } else if (formId === 'bolloForm') {
                    } else if (formId === 'atmForm') {
                        $('#inputBenAtm').comboboxPlus('clear');
                    } else if (formId === 'atmFormBis') {
                    } else if (formId === 'mavravForm') {
                    }
                }
            });
        };
        resetSemVars = function () {
            ajaxCalling = {
                // Richieste dati
                "req-sms": false,
                "req-otp": false,
                "req-tel": false,
                // Controllo dati
                "chk-bon": false,
                "chk-car": false,
                "chk-cell": false,
                "chk-atm": false,
                "chk-blt": false,
                "chk-bol": false,
                "chk-tgl": false,
                "chk-com": false,
                "chk-mrv": false,
                // Dispositive
                "snd-bon": false,
                "snd-imp": false,
                "snd-cjs": false,
                "snd-cel": false,
                "snd-blt": false,
                "snd-gir": false,
                "snd-atm": false,
                "snd-mrv": false,
                "add-con": false,
                "del-con": false
            };
        };
        saldoExpand = function ($spDB) {
            $spDB.find('.spDashboardBox').animate({ height: '150px' }, 1000, function () {
                $spDB.find('.spDetail').addClass('open').text('Chiudi').show();
            });
        };
        saldoCollapse = function ($spDB) {
            $spDB.find('.spDashboardBox').animate({ height: '36px' }, 1000, function () {
                $spDB.find('.spDetail').removeClass('open').text('Dettagli').show();
            });
        };
        collapseAccordion = function () {
            var $accordionOpsLoading = $('#accordionOpsLoading').addClass('loading');
            $('#accordionOps .panel-selected .panel-title a').click();
            setTimeout(function () {
                $accordionOpsLoading.removeClass('loading');
            }, 500);
        };
        closeContatti = function () {
            var $boxContactLoading = $('#boxContactLoading').addClass('loading');
            $('.spPersonOpsBox.open .spPersonOpsClose').click();
            setTimeout(function () {
                $boxContactLoading.removeClass('loading');
            }, 500);
        };
        //endregion

        //region CHIAMATE AJAX DATI
        printFailureData = function (jqXHR, textStatus, errorThrown) {
            var code = (typeof jqXHR !== 'undefined') ? jqXHR.statusCode() : '',
                text = (typeof textStatus !== 'undefined') ? textStatus : '',
                error = (typeof errorThrown !== 'undefined') ? errorThrown : '';
            printLog('*** printFailureData: status: ' + text + "\nError: " + error + "\nstatusCode: " + code);
        };
        loadDatiIniziali = function () {
            var parameters = {
                "prepagate": "yes",
                "cf": Math.random()
            };
            jqAJAXCall('post', 'json', dataLinks.init, initDatiIniziali, function (jqXHR, textStatus, errorThrown) {
                printFailureData(jqXHR, textStatus, errorThrown);
                checkLoad('datiIniziali', false);
            }, parameters);
        };
        loadNazioni = function () {
            var parameters = {
                "service": "WEBANK",
                "cf": Math.random()
            };
            jqAJAXCall('post', 'json', dataLinks.nazioni, updateNazioni, function (jqXHR, textStatus, errorThrown) {
                printFailureData(jqXHR, textStatus, errorThrown);
                checkLoad('nazioni', false);
            }, parameters);
        };
        loadRubriche = function () {
            var parameters = {
                "service": "WEBANK",
                "rub_telefonica": true,
                "rub_tv": false,
                "rub_benef": true,
                "rub_prepagate": "all",
                "cf": Math.random()
            };
            jqAJAXCall('post', 'json', dataLinks.rubriche, updateRubriche, function (jqXHR, textStatus, errorThrown) {
                printFailureData(jqXHR, textStatus, errorThrown);
                checkLoad('rubriche', false);
            }, parameters);
        };
        loadContatti = function () {
            var parameters = {
                    "cf": Math.random()
                },
                $boxContactLoading;
            $('.spPersonOpsBox').removeClass('open');
            $boxContactLoading = $('#boxContactLoading').addClass('loading');
            jqAJAXCall('get', 'json', dataLinks.contattiVeloci, function (data, textStatus, jqXHR) {
                    updateContatti(data, textStatus, jqXHR);
                    $boxContactLoading.removeClass('loading');
                }, function (jqXHR, textStatus, errorThrown) {
                    printFailureData(jqXHR, textStatus, errorThrown);
                    $boxContactLoading.removeClass('loading');
                }, parameters
            );
        };
        loadContatto = function (id) {
            var parameters = {
                "id": id,
                "cf": Math.random()
            };
            showLoadingOnPage($('.spPersonAdd').find('.spPersonWrap'));
            jqAJAXCall('get', 'json', dispoLinks.detailContatto, updateContatto, function (jqXHR, textStatus, errorThrown) {
                printFailureData(jqXHR, textStatus, errorThrown);
            }, parameters);
        };
        loadMovDispo = function () {
            if (isMovDispoOK && !isLoadingMovData && !isLoadingDispoData) {
                showLoadingOnPage($('#movDispoExp'));
                loadMov();
                loadDispo();
                // *** |FINE| Movimenti e disposizioni ***
            }
        };
        loadMov = function () {
            if (!isLoadingMovData) {
                isLoadingMovData = true;
                if (debugLoading) {
                    printLog('*** loadMov: showLoadingOnPage movBox');
                }
                var parameters = {
                    "requestIdInPage": requestIdInPage,
                    "period": 15,
                    "numberToShow": 15,
                    "accountId": contoSelezionato,
                    "cf": Math.random()
                };
                jqAJAXCall('post', 'json', dataLinks.movimenti, updateTabMov, function (jqXHR, textStatus, errorThrown) {
                    $('#errMovMsg').show();
                    $('#noMovMsg').hide();
                    $('#movBox').hide();
                    $('#movContent .spBar').hide();
                    if (debugLoading) {
                        printLog('*** loadMovFailure: hideLoadingOnPage movBox');
                    }
                    isLoadingMovData = false;
                    printFailureData(jqXHR, textStatus, errorThrown);
                    completeMovDispo();
                }, parameters);
            }
        };
        loadDispo = function () {
            if (!isLoadingDispoData) {
                isLoadingDispoData = true;
                if (debugLoading) {
                    printLog('*** loadDispo: showLoadingOnPage dispoBox');
                }
                var parameters = {
                    "keep": 'yes',
                    "ultime": '15',
                    "idconto": contoSelezionato,
                    "cf": Math.random()
                };
                jqAJAXCall('post', 'json', dataLinks.disposizioni, updateTabDispo, function (jqXHR, textStatus, errorThrown) {
                    $('#errDispoMsg').show();
                    $('#noDispoMsg').hide();
                    $('#dispoBox').hide();
                    $('#dispoContent .spBar').hide();
                    if (debugLoading) {
                        printLog('*** loadDispoFailure: hideLoadingOnPage dispoBox');
                    }
                    isLoadingDispoData = false;
                    printFailureData(jqXHR, textStatus, errorThrown);
                }, parameters);
            }
        };
        loadDispoDetail = function (id, dataInfo) {
            if (!isLoadingDispoData) {
                isLoadingDispoData = true;
                var parameters = {
                    "cf": Math.random()
                };
                jqAJAXCall('post', 'json', dataLinks.disposizioniDetail + dataInfo, function (data, textStatus, jqXHR) {
                    updateDispoDetail(data, textStatus, jqXHR, id);
                }, function (jqXHR, textStatus, errorThrown) {
                    isLoadingDispoData = false;
                    printFailureData(jqXHR, textStatus, errorThrown);
                }, parameters);
            }
        };
        loadTagliTel = function (isContatto) {
            var numero, operatore, telefono,
                $tagliSelect = !isContatto ? $('#inputImportoCellulare') : $contattoPage.find('.inputImportoCellContatto');
            if (!isLoadingTagliTel) {
                $tagliSelect.val('').prop('disabled', true);
                if (!isContatto) {
                    numero = $('#inputBenCellulare').comboboxPlus('getValue');
                    operatore = $('#inputOperCellulare').val();
                    if (check.numeroTel() && operatore !== '') {
                        tagliTelRequest(operatore, numero.substr(0, 3), numero.substr(3));
                    }
                } else {
                    telefono = getContattoInfo('telefono');
                    $contattoPage.find('.inputBenCellContatto').html(telefono.prefisso + ' ' + telefono.numero);
                    tagliTelRequest(telefono.operatore.host_name, telefono.prefisso, telefono.numero, true);
                }
            } else {
                reloadTagliTel = true;
            }
        };
        // Dati bollo auto
        loadAuto = function (datiAuto) {
            // Tipo veicolo
            var $bolloVeicolo = $("#inputVeicolo");
            $bolloVeicolo.empty().append($("<option>").attr("value", "").html("Seleziona"));
            datiAuto.tipoVeicolo.forEach(function (tipoVeicolo) {
                $bolloVeicolo.append($("<option>").attr("value", tipoVeicolo.codice).html(tipoVeicolo.descrizione));
            });
            // Regione di riferimento
            var $bolloRegione = $("#inputRegione");
            $bolloRegione.empty().append($("<option>").attr("value", "").html("Seleziona"));
            datiAuto.regione.forEach(function (regione) {
                $bolloRegione.append($("<option>").attr("value", regione).html(regione));
            });
        };
        //endregion

        //region CHIAMATE AJAX DISPOSITIVE
        getCallSettings = function (isContatto, prefix, pagNum) {
            var parameters = {},
                $salvaContatto, $page, $opsBox, classPrefix, rapporto,
                telefono, intestazione, inputArr, tmpArr,
                carta, valore, inputPrepagataValArr,
                inputArrAtm, inputArrAtmStep2,
                numeroTessera, titolareTessera, sceltaTaglio, idTransazione,
                $boxTesEsistente;
            switch (prefix) {
                case '#bonifico':
                    parameters = {
                        "conto": contoSelezionato,
                        "emailben": "",
                        "cf": Math.random()
                    };

                    if (isContatto) {
                        classPrefix = getClassPrefix(prefix);
                        $opsBox = getOpsBox();
                        $page = $opsBox.find(classPrefix + 'Page' + pagNum);
                        rapporto = getContattoInfo('rapporto');
                        parameters.importo = $opsBox.find('.inputImportoContatto').val();
                        parameters.causale = $opsBox.find('.inputCausaleContatto').val();
                        parameters.salvainrubrica = false;
                        parameters.nomeben = rapporto.beneficiario;
                        parameters.ibanben = rapporto.iban;
                        parameters.dataaccredito = bonificoDateArr[0];
                        parameters.nazione = contattoSelezionato.anagrafica.nazione;
                    } else {
                        $page = $(prefix + 'Page' + pagNum);
                        $salvaContatto = $('#salvaContatto');
                        parameters.importo = $('#inputImporto').val();
                        parameters.causale = $('#inputCausale').val();
                        parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                        parameters.nomeben = getBen();
                        parameters.ibanben = getIBAN();
                        parameters.dataaccredito = $('#datepickerBonifico').val();
                        parameters.nazione = $('#inputNazione').val();
                    }
                    break;
                case '#prepagata':
                    parameters = {
                        "service": "WEBANK",
                        "debitAccount": contoSelezionato,
                        cf: Math.random()
                    };

                    if (isContatto) {
                        classPrefix = getClassPrefix(prefix);
                        $opsBox = getOpsBox();
                        $page = $opsBox.find(classPrefix + 'Page' + pagNum);
                        carta = getContattoInfo('carta');
                        valore = $opsBox.find('.inputImportoCjContatto').val().split(",");
                        parameters.intAmount = valore[0];
                        parameters.decAmount = valore[1];
                        parameters.cardType = carta.tipoCarta;
                        parameters.numeroCarta = carta.numero;
                        parameters.intestatario = $.trim(contattoSelezionato.anagrafica.nome + ' ' + contattoSelezionato.anagrafica.cognome_rag_soc);
                        parameters.salvainrubrica = false;
                    } else {
                        $page = $(prefix + 'Page' + pagNum);
                        $salvaContatto = $('#salvaContattoPrepagata');
                        valore = $('#inputImportoPrepagata').val().split(",");
                        parameters.intAmount = valore[0];
                        parameters.decAmount = valore[1];
                        parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                        inputPrepagataValArr = getInputPrepagata();
                        parameters.numeroCarta = inputPrepagataValArr[0];
                        parameters.intestatario = inputPrepagataValArr[1];
                        parameters.cardType = inputPrepagataValArr[2];
                    }
                    break;
                case '#cellulare':
                    parameters = {
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "cf": Math.random()
                    };
                    if (isContatto) {
                        classPrefix = getClassPrefix('#cellulare');
                        $opsBox = getOpsBox();
                        $page = $opsBox.find(classPrefix + 'Page' + pagNum);
                        tmpArr = $opsBox.find('.inputImportoCellContatto').val().split('|');
                        intestazione = contattoSelezionato.anagrafica.nome;
                        intestazione += $.trim(contattoSelezionato.anagrafica.cognome_rag_soc) !== '' ? ' ' + contattoSelezionato.anagrafica.cognome_rag_soc : '';
                        telefono = getContattoInfo('telefono');
                        parameters.operatore = telefono.operatore.host_name;
                        parameters.prefisso = telefono.prefisso;
                        parameters.numeroTelefono = telefono.numero;
                        parameters.intestazione = intestazione;
                        parameters.salvainrubrica = false;
                        parameters.valore = tmpArr[2];
                    } else {
                        $page = $(prefix + 'Page' + pagNum);
                        $salvaContatto = $('#salvaContattoCellulare');
                        inputArr = getInputCell();
                        parameters.intestazione = getBenCell();
                        parameters.prefisso = inputArr[0];
                        parameters.numeroTelefono = inputArr[1];
                        parameters.operatore = inputArr[2];
                        parameters.valore = inputArr[3].split('|')[2];
                        parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                    }
                    break;
                case '#atm':
                    inputArrAtm = getInputAtm();
                    inputArrAtmStep2 = getInputAtmBis();
                    numeroTessera = inputArrAtm[0];
                    titolareTessera = inputArrAtm[1];
                    sceltaTaglio = inputArrAtmStep2[3];
                    idTransazione = inputArrAtmStep2[4];
                    parameters = {
                        "service": "WEBANK",
                        "selectedAccount": contoSelezionato,
                        "numeroTessera": numeroTessera,
                        "titolareTessera": titolareTessera,
                        "sceltaTaglio": sceltaTaglio,
                        "idTransazione": idTransazione,
                        "cf": Math.random()
                    };
                    $salvaContatto = $('#salvaContattoAtm');
                    $page = $(prefix + 'Page' + pagNum);
                    $boxTesEsistente = $('#boxTesEsistente');
                    parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                    if (ctrlOTP && $boxTesEsistente.css('display') === 'none') {
                        parameters.fromRubrica = 'false';
                    } else {
                        if (!ctrlOTP) {
                            parameters.fromRubrica = 'false';
                        } else {
                            parameters.fromRubrica = 'true';
                        }
                    }
                    if (forceAtm) {
                        parameters.forzaAddebito = "true";
                    }
                    break;
            }
            return {
                page: $page,
                parameters: parameters
            };
        };
        setAuthParameters = function (parameters, prefix, authType, isContatto) {
            var opsBox;

            if (dispId) {
                parameters.dispId = dispId;
            }

            if (hashOtp) {
                parameters.hashOtp = hashOtp;
            }

            if (isContatto) {
                opsBox = getOpsBox();
                prefix = getClassPrefix(prefix);

                if (authType === 'Smash') {
                    parameters.codiceOTPConSMS = opsBox.find(prefix + 'Page2InputSmash').val();
                } else {
                    parameters.codiceOTP = opsBox.find(prefix + 'Page2Input' + authType).val();
                }
            } else {
                if (authType === 'Smash') {
                    parameters.codiceOTPConSMS = $(prefix + 'Page2InputSmash').val();
                } else {
                    parameters.codiceOTP = $(prefix + 'Page2Input' + authType).val();
                }
            }
        };
        handleDispoKO = function (jqXHR, textStatus, errorThrown, callKey, $page, callBack) {
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** otpFailure: hideLoadingOnPage ' + getPageInfo($page));
            }
            showMsgOnPage({
                wrapper: $page,
                msgText: defaultError,
                boxClass: 'negativo'
            });
            printFailureData(jqXHR, textStatus, errorThrown);
            if (callBack) {
                callBack();
            }
            ajaxCalling[callKey] = false;
        };
        sendSMS = function (prefix, isContatto) {
            if (!ajaxCalling["req-sms"]) {
                ajaxCalling["req-sms"] = true;
                var pagePrefix, $page;

                pagePrefix = isContatto ? getClassPrefix(prefix) : prefix;
                $page = $(pagePrefix + 'Page2');
                showLoadingOnPage($page);

                if (debugLoading) {
                    printLog('*** sendSMS: showLoadingOnPage ' + getPageInfo($page));
                }

                jqAJAXCall('post', 'json', dispoLinks.richiestaOTPSms, function (data, textStatus, jqXHR) {
                    sendSMSOK(data, textStatus, jqXHR, prefix, isContatto);
                    ajaxCalling["req-sms"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "req-sms", $page);
                }, {
                    "tipo": getOpSettings(prefix).pollingType
                });
            }
        };
        tagliTelRequest = function (operatore, prefisso, numTel, isContatto) {
            if (!ajaxCalling["req-tel"]) {
                ajaxCalling["req-tel"] = true;
                var parameters = {
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "prefisso": prefisso,
                        "numeroTelefono": numTel,
                        cf: Math.random()
                    },
                    $page;
                isLoadingTagliTel = true;
                $page = !isContatto ? $('#cellularePage1') : $contattoPage;
                parameters.operatore = (operatore === 'VODAF') ? 'VODAFONE' : operatore;
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** tagliTelRequest: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', dispoLinks.tagliTelefonica, function (data, textStatus, errorThrown) {
                    tagliTelOK(data, textStatus, errorThrown, isContatto);
                    ajaxCalling["req-tel"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "req-tel", $page, function () {
                        isLoadingTagliTel = false;
                        if (reloadTagliTel) {
                            reloadTagliTel = false;
                            loadTagliTel(isContatto);
                        }
                    });
                }, parameters);
            }
        };
        checkRequest = function (isContatto, prefix, callKey, callName, callBack, url) {
            var settings;
            if (!ajaxCalling[callKey]) {
                ajaxCalling[callKey] = true;
                settings = getCallSettings(isContatto, prefix, 1);
                showLoadingOnPage(settings.page);

                if (debugLoading) {
                    printLog('*** ' + callName + ': showLoadingOnPage ' + getPageInfo(settings.page));
                }

                jqAJAXCall('post', 'json', url, function (data, textStatus, errorThrown) {
                    callBack(data, textStatus, errorThrown, isContatto);
                    ajaxCalling[callKey] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, callKey, settings.page);
                }, settings.parameters);
            }
        };
        checkBonificoRequest = function (isContatto) {
            checkRequest(isContatto, '#bonifico', "chk-bon", "checkBonificoRequest", checkBonificoOK, dispoLinks.checkBonifico);
        };
        checkCartaRequest = function (isContatto) {
            checkRequest(isContatto, '#prepagata', "chk-car", "checkCartaRequest", checkCartaOK, dispoLinks.checkCartaRequest);
        };
        checkCellulareRequest = function (isContatto) {
            checkRequest(isContatto, '#cellulare', "chk-cel", "checkCellulareRequest", checkCellulareOK, dispoLinks.checkCellulare);
        };
        checkAtmRequest = function () {
            checkRequest(false, '#atm', "chk-atm", "checkAtmRequest", checkAtmOK, dispoLinks.checkAtm);
        };
        checkBollettino = function () {
            if (!ajaxCalling["chk-blt"]) {
                ajaxCalling["chk-blt"] = true;
                var parameters = {
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "eseguitoda": $('#inputNuovoEseBollettino').val(),
                        "residentein": $('#residenzaEsecutore').val(),
                        "localita": $('#localitaEsecutore').val(),
                        "provincia": $('#provinciaEsecutore option:selected').text(),
                        "cap": $('#capEsecutore').val(),
                        "ccpostale": $('#inputBenBollettino').val(),
                        "keep": true,
                        cf: Math.random()
                    },
                    $page = $('#bollettinoPage1Bis'),
                    dataInserita, dataEsecuzione, dataMin;
                dataMin = getDateFromString(primaDataBollettino);
                dataInserita = getDateFromString($('#datepickerBollettino').val());
                dataEsecuzione = (!dataInserita || dataMin > dataInserita) ? dataMin : dataInserita;
                parameters.importo = $('#inputImportoBollettino').val().replace('.', ',');
                parameters.dataEsecuzione = dataEsecuzione.format('dd/mm/yyyy');
                //parameters.premarked =  isBollettinoPre ? true : false;
                if (!isBollettinoPre) {
                    parameters.tipoBol = "BIA";
                    parameters.nomeben = $('#benBollettino').val();
                    parameters.causale = $('#causaleBollettino').val();
                    parameters.tipoDocumento = "123";
                } else {
                    parameters.tipoBol = "PRE";
                    parameters.nomeben = ' ';
                    parameters.tipoDocumento = $('#tipoBoll option:selected').val();
                    parameters.numeroBollettino = $('#codiceBoll').val();
                }
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** checkBollettino: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', dispoLinks.checkBollettino, function (data, textStatus, errorThrown) {
                    checkBollettinoOK(data, textStatus, errorThrown);
                    ajaxCalling["chk-blt"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "chk-blt", $page);
                }, parameters);
            }
        };
        checkBolloCommissioni = function () {
            var $page = $("#bolloPage1");
            if (!ajaxCalling["chk-com"]) {
                ajaxCalling["chk-com"] = true;
                hideLoadingOnPage($page);
                var params = {
                    "accountId": contoSelezionato,
                    "targa": $("#inputTarga").val(),
                    "regione": $("#inputRegione").val(),
                    "tipoVeicolo": $("#inputVeicolo").val()
                };
                if (debugLoading) {
                    printLog('*** checkBolloCommissioni: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                jqAJAXCall('post', 'json', dispoLinks.checkBolloCommissioni, function (data, textStatus, jqXHR) {
                    hideLoadingOnPage($page);
                    var testData = isNewJsonCallFailed(data);
                    if (testData[0]) {
                        hideLoadingOnPage($page);
                        showCallError(testData[1], $page);
                        printFailureData(jqXHR, textStatus, testData[1]);
                    } else {
                        showWarningQuestion({
                            wrapper: $page,
                            question: "<p>Il costo del servizio di riscossione &egrave; determinato dalle leggi vigenti (D.P.C.M. del 12 novembre 2009 n. 186) ed &egrave; posto interamente a carico del contribuente.<br> Tale costo &egrave; pari a <b>" + data.commissioni + "</b> &euro; per ogni singola operazione.</p>",
                            okbutton: "prosegui",
                            okfunction: function () {
                                updateBollo();
                            }
                        });
                    }
                    ajaxCalling["chk-com"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "chk-com", $page);
                }, params);
            }
        };
        // funzione di controllo tagli e restituzione abbonamenti ATM
        checkTagli = function () {
            if (!ajaxCalling["chk-tgl"]) {
                ajaxCalling["chk-tgl"] = true;
                var inputArrAtm = getInputAtm(),
                    numeroTessera = inputArrAtm[0],
                    titolareTessera = inputArrAtm[1],
                    parameters = {
                        "service": "WEBANK",
                        "selectedAccount": contoSelezionato,
                        "numeroTessera": numeroTessera,
                        "titolareTessera": titolareTessera,
                        "cf": Math.random()
                    },
                    $page = $('#atmPage1');
                if (debugLoading) {
                    printLog('*** checkTagli: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                jqAJAXCall('post', 'json', dispoLinks.checkTagli, function (data, textStatus, errorThrown) {
                    checkTagliOK(data, textStatus, errorThrown, $page);
                    ajaxCalling["chk-tgl"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "chk-tgl", $page);
                }, parameters);
            }
        };
        // funzione di controllo dati MAV E RAV
        checkMavRav = function () {
            if (!ajaxCalling["chk-mrv"]) {
                ajaxCalling["chk-mrv"] = true;
                var inputArrMavRav = getInputMavRav(),
                    numeroCodice = inputArrMavRav[0],
                    importoIntMavRav = inputArrMavRav[1],
                    importoDecMavRav = inputArrMavRav[2],
                    typeMavRav = inputArrMavRav[3],
                    dateMavRav = inputArrMavRav[4],
                    $wrapper = $('#mavravPage1'),
                    parameters = {
                        "service": "WEBANK",
                        "idconto": contoSelezionato,
                        "num_eff": numeroCodice,
                        "importo_val_int": importoIntMavRav,
                        "importo_val_dec": importoDecMavRav,
                        "sel_effetti": typeMavRav,
                        "keep": 'true',
                        "data_emi": dateMavRav,
                        "cf": Math.random()
                    };
                if (debugLoading) {
                    printLog('*** checkMavRav: showLoadingOnPage ' + $wrapper.attr('id'));
                }
                showLoadingOnPage($wrapper);
                jqAJAXCall('post', 'json', dispoLinks.checkMavrav, function (data, textStatus, jqXHR) {
                    checkMavRavOK(data, typeMavRav.toUpperCase(), textStatus, jqXHR, $wrapper);
                    ajaxCalling["chk-mrv"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "chk-mrv", $wrapper);
                }, parameters);
            }
        };
        // noinspection JSUnusedAssignment
        sendImportoPreferito = function () {
            var rapporto;
            if (!ajaxCalling["snd-imp"]) {
                ajaxCalling["snd-imp"] = true;
                rapporto = getContattoInfo('rapporto');

                var parameters = {
                        "id_anagrafica": rapporto.id_anagrafica,
                        "id_rapporto": rapporto.id,
                        "cf": Math.random()
                    },
                    $page, $opsBox, classPrefix, importo;

                classPrefix = getClassPrefix('#bonifico');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
                importo = $contattoPage.find('.inputImportoContatto').val();
                parameters.importo = importo;

                if (debugLoading) {
                    printLog('*** sendImportoPreferito: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', dispoLinks.sendImportoPreferito, function (data, textStatus, errorThrown) {
                    sendImportoPreferitoOK(data, textStatus, errorThrown, importo);
                    ajaxCalling["snd-imp"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-imp", $page);
                }, parameters);
            }
        };
        sendBonifico = function (authType, isContatto) {
            var settings;
            if (!ajaxCalling["snd-bon"]) {
                ajaxCalling["snd-bon"] = true;
                settings = getCallSettings(isContatto, '#bonifico', 2);
                if (debugLoading) {
                    printLog('*** sendBonifico: showLoadingOnPage ' + getPageInfo(settings.page));
                }
                showLoadingOnPage(settings.page);
                setAuthParameters(settings.parameters, '#bonifico', authType, isContatto);
                jqAJAXCall('post', 'json', dispoLinks.sendBonifico, function (data, textStatus, errorThrown) {
                    bonificoOK(data, textStatus, errorThrown, isContatto);
                    ajaxCalling["snd-bon"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-bon", settings.page);
                }, settings.parameters);
            }
        };
        sendPrepagata = function (authType, isContatto) {
            var settings;
            if (!ajaxCalling["snd-cjs"]) {
                ajaxCalling["snd-cjs"] = true;
                settings = getCallSettings(isContatto, '#prepagata', 2);
                if (debugLoading) {
                    printLog('*** sendPrepagata: showLoadingOnPage ' + getPageInfo(settings.page));
                }
                showLoadingOnPage(settings.page);
                setAuthParameters(settings.parameters, '#prepagata', authType, isContatto);
                jqAJAXCall('post', 'json', dispoLinks.sendPrepagata, function (data, textStatus, errorThrown) {
                    prepagataOK(data, textStatus, errorThrown, isContatto);
                    ajaxCalling["snd-cjs"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-cjs", settings.page);
                }, settings.parameters);
            }
        };
        sendCellulare = function (authType, isContatto) {
            var settings;
            if (!ajaxCalling["snd-cel"]) {
                ajaxCalling["snd-cel"] = true;
                settings = getCallSettings(isContatto, '#cellulare', 2);
                if (debugLoading) {
                    printLog('*** sendCellulare: showLoadingOnPage ' + getPageInfo(settings.page));
                }
                showLoadingOnPage(settings.page);
                setAuthParameters(settings.parameters, '#cellulare', authType, isContatto);
                jqAJAXCall('post', 'json', dispoLinks.sendCellulare, function (data, textStatus, errorThrown) {
                    cellulareOK(data, textStatus, errorThrown, isContatto);
                    ajaxCalling["snd-cel"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-cel", settings.page);
                }, settings.parameters);
            }
        };
        sendBollettino = function (authType) {
            if (!ajaxCalling["snd-blt"]) {
                ajaxCalling["snd-blt"] = true;
                var dataAccredito = getDataAccredito($('#datepickerBollettino').val()),
                    tipo = (check.isHidden($('#boxBollettinoPre'))) ? "BIA" : "PRE",
                    $page = $('#bollettinoPage2'),
                    parameters = {
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "tipoBol": tipo,
                        "ccpostale": $('#inputBenBollettino').val(),
                        "importo": $('#inputImportoBollettino').val(),
                        "nomeben": bollIntestatario,
                        "dataEsecuzione": dataAccredito.format('dd/mm/yyyy'),
                        "causale": $('#causaleBollettino').val(),
                        "eseguitoda": $('#inputNuovoEseBollettino').val(),
                        "residentein": $('#residenzaEsecutore').val(),
                        "localita": $('#localitaEsecutore').val(),
                        "provincia": $('#provinciaEsecutore option:selected').text(),
                        "cap": $('#capEsecutore').val(),
                        "cf": Math.random()
                    };
                setAuthParameters(parameters, '#bollettino', authType, false);
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** sendBollettino: showLoadingOnPage ' + getPageInfo($page));
                }
                if (forceBollettino) {
                    parameters.force = "1";
                }
                parameters.tipoDocumento = "123";
                if (tipo !== 'BIA') {
                    parameters.numeroBollettino = $('#codiceBoll').val();
                    parameters.tipoDocumento = $('#tipoBoll option:selected').val();
                }
                jqAJAXCall('post', 'json', dispoLinks.sendBollettino, function (data, textStatus, errorThrown) {
                    bollettinoOK(data, textStatus, errorThrown);
                    ajaxCalling["snd-blt"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-blt", $page);
                }, parameters);
            }
        };
        sendBollo = function (authType) {
            if (!ajaxCalling["chk-bol"]) {
                ajaxCalling["chk-bol"] = true;
                var parameters = {
                        "accountId": contoSelezionato,
                        "targa": $("#inputTarga").val(),
                        "regione": $("#inputRegione").val(),
                        "idTransazione": bolloDatiTrans,
                        "forzaAddebito": bolloForzaAddebito,
                        "tipoVeicolo": $("#inputVeicolo").val()
                    },
                    $page = $('#bolloPage2');
                setAuthParameters(parameters, '#bollo', authType, false);
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** sendBollo: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', dispoLinks.sendBollo, function (data, textStatus, errorThrown) {
                    bolloOK(data, textStatus, errorThrown);
                    ajaxCalling["chk-bol"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-bol", $page);
                }, parameters);
            }
        };
        sendAtm = function (authType) {
            var settings;
            if (!ajaxCalling["snd-atm"]) {
                ajaxCalling["snd-atm"] = true;
                settings = getCallSettings(false, '#atm', 2);
                if (debugLoading) {
                    printLog('*** sendAtm: showLoadingOnPage ' + getPageInfo(settings.page));
                }
                showLoadingOnPage(settings.page);
                setAuthParameters(settings.parameters, '#atm', authType, false);
                jqAJAXCall('post', 'json', dispoLinks.sendAtm, function (data, textStatus, errorThrown) {
                    atmOK(data, textStatus, errorThrown);
                    ajaxCalling["snd-atm"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-atm", settings.page);
                }, settings.parameters);
            }
        };
        sendMavRav = function (authType) {
            if (!ajaxCalling["snd-mrv"]) {
                ajaxCalling["snd-mrv"] = true;
                var inputArrMavRav = getInputMavRav(),
                    numeroCodice = inputArrMavRav[0],
                    importoIntMavRav = inputArrMavRav[1],
                    importoDecMavRav = inputArrMavRav[2],
                    typeMavRav = inputArrMavRav[3],
                    dateMavRav = inputArrMavRav[4],
                    parameters = {
                        "service": "WEBANK",
                        "idconto": contoSelezionato,
                        "num_eff": numeroCodice,
                        "importo_val_int": importoIntMavRav,
                        "importo_val_dec": importoDecMavRav,
                        "sel_effetti": typeMavRav,
                        "keep": 'true',
                        "data_emi": dateMavRav,
                        "cf": Math.random()
                    },
                    $page = $('#mavravPage2');
                setAuthParameters(parameters, '#mavrav', authType, false);
                if (debugLoading) {
                    printLog('*** sendMavRav: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                jqAJAXCall('post', 'json', dispoLinks.sendMavrav, function (data, textStatus, errorThrown) {
                    mavRavOK(data, textStatus, errorThrown);
                    ajaxCalling["snd-mrv"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "snd-mrv", $page);
                }, parameters);
            }
        };
        addContatto = function () {
            if (!ajaxCalling["add-con"]) {
                ajaxCalling["add-con"] = true;
                var parameters = {
                        "id": $('#selectAddContatto').val(),
                        cf: Math.random()
                    },
                    $wrapper = $('.spPersonAdd .spPersonWrap');
                showLoadingOnPage($wrapper);
                if (debugLoading) {
                    printLog('*** addContatto: showLoadingOnPage ' + $wrapper.attr('id'));
                }
                jqAJAXCall('post', 'json', dispoLinks.addContatto, function (data, textStatus, errorThrown) {
                    addContattoOK(data, textStatus, errorThrown);
                    ajaxCalling["add-con"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    handleDispoKO(jqXHR, textStatus, errorThrown, "add-con", $wrapper);
                }, parameters);
            }
        };
        deleteContatto = function () {
            if (!ajaxCalling["del-con"]) {
                ajaxCalling["del-con"] = true;
                var parameters = {
                    "id": contattoSelezionato.anagrafica.id,
                    cf: Math.random()
                };
                showLoadingOnPage($contattoPage);
                if (debugLoading) {
                    printLog('*** deleteContatto: showLoadingOnPage ' + $contattoPage.attr('id'));
                }
                jqAJAXCall('post', 'json', dispoLinks.deleteContatto, function (data, textStatus, errorThrown) {
                    deleteContattoOK(data, textStatus, errorThrown);
                    ajaxCalling["del-con"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    hideLoadingOnPage($contattoPage);
                    if (debugLoading) {
                        printLog('*** deleteContattoFailure: hideLoadingOnPage ' + $contattoPage.attr('id'));
                    }
                    showMsgOnPage({
                        wrapper: $contattoPage,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    printFailureData(jqXHR, textStatus, errorThrown);
                    ajaxCalling["del-con"] = false;
                    handleDispoKO(jqXHR, textStatus, errorThrown, "del-con", $contattoPage);
                }, parameters);
            }
        };
        //endregion

        //region CALLBACK AJAX DISPOSITIVE
        handleDispoOK = function (data, textStatus, jqXHR, isContatto, testData, prefix, $page, callBackKO, callBackOK) {
            if (testData[0]) {
                if (callBackKO) {
                    callBackKO($(data));
                }

                goToKoPage(prefix, isContatto, testData[1]);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else if (data.esito.codice === "GENERATE_PASSWORD") {
                hideLoadingOnPage($page);
                showSMS(prefix, isContatto);
            } else if (data.esito.codice === "SMASH_RISK_RED") {
                hideLoadingOnPage($page);
                goToKoPage(prefix, isContatto, testData[1], true);
            } else if (data.esito.codice === "OTP_KO") {
                hideLoadingOnPage($page);
                showMsgOnPage({
                    wrapper: $page,
                    msgText: testData[1],
                    boxClass: 'negativo'
                });
            } else {
                if (callBackOK) {
                    callBackOK($(data));
                }

                goToOkPage(prefix, isContatto);
            }
        };
        sendSMSOK = function (data, textStatus, jqXHR, prefix, isContatto) {
            var testData = isNewJsonCallFailed(data),
                pagePrefix, $page;

            pagePrefix = isContatto ? getClassPrefix(prefix) : prefix;
            $page = $(pagePrefix + 'Page2');

            hideLoadingOnPage($page);

            if (debugLoading) {
                printLog('*** otpOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                showOTP(prefix, isContatto);
            }
        };
        sendImportoPreferitoOK = function (data, textStatus, jqXHR, importo) {
            var testData = isNewJsonCallFailed(data),
                $opsBox, $currPage, $nextPage, $carousel, classPrefix, rapporto;

            classPrefix = getClassPrefix('#bonifico');
            $opsBox = getOpsBox();
            $currPage = $opsBox.find(classPrefix + 'Page2');
            $nextPage = $opsBox.find(classPrefix + 'Page3');
            $carousel = $opsBox.find(classPrefix + 'Carousel');

            hideLoadingOnPage($currPage);
            if (debugLoading) {
                printLog('*** sendImportoPreferitoOK: hideLoadingOnPage ' + $currPage.attr('id'));
            }
            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
                showCallError(testData[1], $currPage);
            } else {
                rapporto = getContattoInfo('rapporto');
                rapporto.importoPreferito = importo;
                $nextPage.find('.esitoKO').hide();
                $nextPage.find('.esitoOK').show();
                goToNextPage($carousel);
                loadMovDispo();
                loadRubriche();
            }
        };
        /**
         * @param data
         * @param data.cartaRicaricabile
         * @param data.cartaRicaricabile.intestatario
         * @param data.esito
         * @param data.force
         * @param data.dispId
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         * @param isContatto
         * @param $page
         * @param prefix
         * @param type
         * @param callName
         * @param callBack
         */
        checkOK = function (data, textStatus, jqXHR, isContatto, $page, prefix, type, callName, callBack) {
            var testData = isNewJsonCallFailed(data);
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** ' + callName + ': hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                dispId = data.dispId;

                if (callBack) {
                    callBack();
                }

                goToAuthPage(prefix, type, type, isContatto);
            }
        };
        checkBonificoOK = function (data, textStatus, jqXHR, isContatto) {
            var $page = !isContatto ? $('#bonificoPage1') : $contattoPage;
            checkOK(data, textStatus, jqXHR, isContatto, $page, '#bonifico', "SEP", "checkBonificoOK");
        };
        checkCartaOK = function (data, textStatus, jqXHR, isContatto) {
            var $page = !isContatto ? $('#prepagataPage1') : $contattoPage;
            checkOK(data, textStatus, jqXHR, isContatto, $page, '#prepagata', "RPR", "checkCartaOK", function () {
                intestCJ = data.cartaRicaricabile.intestatario;
            });
        };
        checkCellulareOK = function (data, textStatus, jqXHR, isContatto) {
            var $page = !isContatto ? $('#cellularePage1') : $contattoPage;
            checkOK(data, textStatus, jqXHR, isContatto, $page, '#cellulare', "CEL", "checkCellulareOK");
        };
        checkAtmOK = function (data, textStatus, jqXHR) {
            var $page = $('#atmPage1');
            checkOK(data, textStatus, jqXHR, false, $page, '#atm', "ATM", "checkAtmOK");
        };
        /***
         *
         * @param data
         * @param data.tagli
         * @param textStatus
         * @param jqXHR
         * @param isContatto
         */
        tagliTelOK = function (data, textStatus, jqXHR, isContatto) {
            var $page = !isContatto ? $('#cellularePage1') : $contattoPage,
                testData = isNewJsonCallFailed(data);
            hideLoadingOnPage($page);
            if (testData[0]) {
                showMsgOnPage({
                    wrapper: $page,
                    msgText: testData[1],
                    boxClass: 'negativo'
                });
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                tagliTelArr = [];
                data.tagli.forEach(function (taglio, index) {
                    tagliTelArr.push(taglio.valore + '|' + taglio.commissione + '|' + (index + 1));
                });
                updateTagliTel(tagliTelArr, isContatto);
            }
            if (debugLoading) {
                printLog('*** tagliTelOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            isLoadingTagliTel = false;
            if (reloadTagliTel) {
                reloadTagliTel = false;
                loadTagliTel();
            }
        };
        checkBollettinoOK = function (data, textStatus, jqXHR) {
            var testData = isNewJsonCallFailed(data),
                $currPage = $('#bollettinoPage1Bis'),
                $nextPage = $('#bollettinoPage2');
            hideLoadingOnPage($currPage);
            if (debugLoading) {
                printLog('*** checkBollettinoOK: hideLoadingOnPage ' + $currPage.attr('id'));
            }
            if (testData[0]) {
                bollIntestatario = "";
                showCallError(testData[1], $currPage);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                bollIntestatario = data.intestatario;
                if (data.testoContoTerzi) {
                    showWarningQuestion({
                        wrapper: $currPage,
                        question: '<p id="">' + data.testoContoTerzi + '</p>',
                        okbutton: "prosegui",
                        okfunction: function () {
                            $nextPage.find('.saldoVal').eq(3).html(data.intestatario);
                            goToAuthPage('#bollettino', "BFB", "BFB", false);
                        }
                    });
                } else {
                    $nextPage.find('.saldoVal').eq(3).html(data.intestatario);
                    goToAuthPage('#bollettino', "BFB", "BFB", false);
                }
            }
        };
        /**
         *
         * @param data
         * @param data.ListaTagli
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         * @param $page
         */
        checkTagliOK = function (data, textStatus, jqXHR, $page) {
            var testData = isNewJsonCallFailed(data);
            if (debugLoading) {
                printLog('*** checkTagliOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            hideLoadingOnPage($page);
            if (testData[0]) {
                showCallError(testData[1], $page);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                if (data.ListaTagli === "NO") {
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: 'Al momento non ci sono abbonamenti disponibili all\'acquisto per la tessera selezionata.Per maggiori informazioni sui tempi di ricarica dell\'abbonamento consulta il sito atm.it.',
                        boxClass: 'attenzione'
                    });
                } else {
                    isCkeckTagliSent = true;
                    updateAtm(data);
                    goToNextPage($('#atmCarousel'));
                }
            }
        };
        /**
         * @param data
         * @param data.testoContoTerzi
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param type
         * @param textStatus
         * @param jqXHR
         * @param $wrapper
         */
        checkMavRavOK = function (data, type, textStatus, jqXHR, $wrapper) {
            var testData = isNewJsonCallFailed(data);
            hideLoadingOnPage($wrapper);
            if (testData[0]) {
                showCallError(testData[1], $wrapper);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                goToAuthPage('#mavrav', type, type, false);
            }
        };
        bonificoOK = function (data, textStatus, jqXHR, isContatto) {
            var classPrefix, $opsBox, $page,
                testData = isNewJsonCallFailed(data),
                sendImporto = false;
            if (isContatto) {
                classPrefix = getClassPrefix('#bonifico');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
                sendImporto = !$contattoPage.find('.icon-star_fill').hasClass('disabled');
            } else {
                $page = $('#bonificoPage2');
            }
            if (debugLoading) {
                printLog('*** bonificoOK: hideLoadingOnPage ' + getPageInfo($page));
            }

            handleDispoOK(data, textStatus, jqXHR, isContatto, testData, '#bonifico', $page, function () {
                if (sendImporto) {
                    hideLoadingOnPage($page);
                }
            }, function ($data) {
                if (!sendImporto) {
                    hideLoadingOnPage($page);
                }

                $('#saldo').html($data.find('saldo').attr('margineUtilizzabile'));
            });
        };
        prepagataOK = function (data, textStatus, jqXHR, isContatto) {
            var classPrefix, $opsBox, $page,
                testData = isNewJsonCallFailed(data);
            if (isContatto) {
                classPrefix = getClassPrefix('#prepagata');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
            } else {
                $page = $('#prepagataPage2');
            }
            handleDispoOK(data, textStatus, jqXHR, isContatto, testData, '#prepagata', $page);
        };
        cellulareOK = function (data, textStatus, jqXHR, isContatto) {
            var classPrefix, $opsBox, $page,
                testData = isNewJsonCallFailed(data);
            if (isContatto) {
                classPrefix = getClassPrefix('#cellulare');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
            } else {
                $page = $('#cellularePage2');
            }
            handleDispoOK(data, textStatus, jqXHR, isContatto, testData, '#cellulare', $page);
        };
        bollettinoOK = function (data, textStatus, jqXHR) {
            var $page = $('#bollettinoPage2'),
                testData = isNewJsonCallFailed(data);
            if (debugLoading) {
                printLog('*** bollettinoOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            hideLoadingOnPage($page);
            if (testData[0]) {
                goToKoPage('#bollettino', false, testData[1]);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else if (data.esito.codice === "GENERATE_PASSWORD") {
                showSMS('#bollettino', false);
            } else if (data.esito.codice === "OTP_KO") {
                showMsgOnPage({
                    wrapper: $page,
                    msgText: testData[1],
                    boxClass: 'negativo'
                });
            } else {
                goToOkPage('#bollettino', false);
            }
        };
        /**
         * @param data
         * @param data.cro
         * @param data.tipoDisposizione
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         */
        bolloOK = function (data, textStatus, jqXHR) {
            var $page = $('#bolloPage2'),
                testData = isNewJsonCallFailed(data),
                linkRicevutaInfo;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** bolloOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                goToKoPage('#bollo', false, testData[1]);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else if (data.esito.codice === "OTP_KO") {
                showMsgOnPage({
                    wrapper: $page,
                    msgText: testData[1],
                    boxClass: 'negativo'
                });
            } else {
                linkRicevutaInfo = dynamicLinks.linkPdfBollo;
                $('#bolloRicevuta').click(function (e) {
                    e.preventDefault();
                    window.open(linkRicevutaInfo, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=400, height=400");
                }).attr("href", dynamicLinks.linkDisposizioni);
                goToOkPage('#bollo', false);
            }
        };
        atmOK = function (data, textStatus, jqXHR) {
            var $page = $('#atmPage2'),
                testData = isNewJsonCallFailed(data),
                linkRicevutaInfo;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** atmOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            handleDispoOK(data, textStatus, jqXHR, false, testData, '#atm', $page, null, function () {
                linkRicevutaInfo = dynamicLinks.linkRicevutaAtm;
                $('#dispoDetailLinkATMb').attr("href", dynamicLinks.linkDisposizioni);
                $('#ricevutaLinkATMb').attr("href", linkRicevutaInfo).attr("target", '_blank');
                isCkeckTagliSent = false;
            });
        };
        /**
         *
         * @param data
         * @param data.feedback
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         */
        mavRavOK = function (data, textStatus, jqXHR) {
            var $page = $('#mavravPage2'),
                testData = isNewJsonCallFailed(data),
                testoEsitoPos;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** mavRavOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                goToKoPage('#mavrav', false, testData[1]);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else if (data.esito.codice === "OTP_KO") {
                showMsgOnPage({
                    wrapper: $page,
                    msgText: testData[1],
                    boxClass: 'negativo'
                });
            } else {
                testoEsitoPos = '<strong>Operazione completata correttamente</strong><br>Riceverai un\'email di conferma del pagamento del bollettino.';
                if (data.feedback && data.feedback.length) {
                    testoEsitoPos += '<br><br>' + data.feedback;
                }
                $('#mavravEsito').html(testoEsitoPos);
                goToOkPage('#mavrav', false);
            }
        };
        addContattoOK = function (data, textStatus, jqXHR) {
            var testData = isNewJsonCallFailed(data),
                $wrapper = $('.spPersonAdd .spPersonWrap');
            hideLoadingOnPage($wrapper);
            if (debugLoading) {
                printLog('*** addContattoOK: hideLoadingOnPage ' + $wrapper.attr('id'));
            }
            if (testData[0]) {
                showCallError(testData[1], $wrapper);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                loadContatti();
            }
        };
        deleteContattoOK = function (data, textStatus, jqXHR) {
            var testData = isNewJsonCallFailed(data);
            hideLoadingOnPage($contattoPage);
            if (debugLoading) {
                printLog('*** deleteContattoOK: hideLoadingOnPage ' + $contattoPage.attr('id'));
            }
            if (testData[0]) {
                showCallError(testData[1], $contattoPage);
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                loadContatti();
            }
        };
        //endregion

        //region STRONG AUTHENTICATION
        saChangePush = function (prefix, settings, isContatto) {
            var changePushParams = {
                    hashOtp: hashOtp
                }, checkPushParams = {
                    hashOtp: hashOtp
                },
                deferred = $.Deferred(),
                defaultError = 'Errore tecnico';

            saStopPolling();

            setAuthParameters(changePushParams, prefix, 'App', isContatto);

            if (debugPolling) {
                printLog('*** saChangePush');
                printLog('changePushParams');
                printObject(changePushParams);
            }

            $.ajax(dispoLinks.changePush, {
                method: "post",
                dataType: "json",
                data: changePushParams
            }).then(function (data) {
                if (debugPolling) {
                    printLog('*** saChangePush');
                    printLog('data.esito', data.esito);
                }

                if (!data.esito || data.esito.toUpperCase() === 'KO') {
                    return deferred.reject(defaultError);
                } else {
                    return $.ajax(dispoLinks.checkPush, {
                        method: "post",
                        dataType: "json",
                        data: checkPushParams
                    });
                }
            }, function () {
                return deferred.reject(defaultError);
            }).then(function (data) {
                if (debugPolling) {
                    printLog('*** saChangePush - done');
                    printLog('data.esito', data.esito);
                }

                if (!data.esito || data.esito.toUpperCase() === 'KO') {
                    return deferred.reject(error);
                } else {
                    return deferred.resolve();
                }
            }, function () {
                return deferred.reject(defaultError);
            }).then(function () {
                if (debugPolling) {
                    printLog('*** saChangePush - OK');
                }

                hidePollingSlide(settings.pollingType, isContatto);
            }, function () {
                if (debugPolling) {
                    printLog('*** saChangePush - KO');
                    printError('error', error || defaultError);
                }

                goToKoPage(prefix, isContatto, error);
            });
        };
        saVerifyPush = function (prefix, settings, isContatto) {
            var verifyPushParams = {
                    hashOtp: hashOtp
                }, checkPushParams = {
                    hashOtp: hashOtp
                },
                deferred = $.Deferred(),
                defaultError = 'Errore esecuzione dispositiva';

            setAuthParameters(verifyPushParams, prefix, 'App', isContatto);

            if (debugPolling) {
                printLog('*** saVerifyPush');
                printLog('verifyPushParams');
                printObject(verifyPushParams);
            }

            $.ajax(dispoLinks.verifyPush, {
                method: "post",
                dataType: "json",
                data: verifyPushParams
            }).then(function (data) {
                var error;

                if (debugPolling) {
                    printLog('*** saVerifyPush - done');
                    printLog('data.esito', data.esito);
                }

                if (!data.esito || data.esito.toUpperCase() === 'KO') {
                    // noinspection JSUnresolvedVariable
                    error = data.erroreRimappato && data.erroreRimappato.descrizioneErrore ? data.erroreRimappato.descrizioneErrore : defaultError;
                    return deferred.reject(error);
                } else {
                    if (debugPolling) {
                        printLog('*** checkPush');
                        printLog('checkPushParams');
                        printObject(checkPushParams);
                    }

                    return $.ajax(dispoLinks.checkPush, {
                        method: "post",
                        dataType: "json",
                        data: checkPushParams
                    });
                }
            }).done(function (data) {
                if (debugPolling) {
                    printLog('*** checkPush - done');
                    printLog('data.esito', data.esito);
                }

                if (!data.esito || data.esito.toUpperCase() === 'KO') {
                    return deferred.reject(defaultError);
                } else {
                    return deferred.resolve();
                }
            }).then(function () {
                if (debugPolling) {
                    printLog('*** verifyPush/checkPush - OK');
                }

                settings.sendFunc('App', isContatto);
            }, function (error) {
                if (debugPolling) {
                    printLog('*** verifyPush/checkPush - KO');
                    printError('error || defaultError', error || defaultError);
                }

                showMsgOnPage({
                    wrapper: getAuthPage(prefix, isContatto),
                    msgText: error || defaultError,
                    boxClass: 'negativo'
                });
            });
        };
        saCreatePush = function (pollingType, isContatto, parameters) {
            var createDeferred = $.Deferred();

            if (debugPolling) {
                printLog('*** createPush');
                printLog('parameters');
                printObject(parameters);
            }

            $.ajax(dispoLinks.createPush, {
                method: "post",
                dataType: "json",
                data: parameters
            }).done(
                /**
                 * @param data
                 * @param data.esito
                 * @param data.statoOperazione
                 * @param data.hashOtp
                 */
                function (data) {
                    if (debugPolling) {
                        printLog('*** saCreatePush - done');
                        printLog('data.esito', data.esito);
                    }

                    if (data.esito === "OK") {
                        hashOtp = data.hashOtp;
                        if (data.statoOperazione === 'VM') {
                            hidePollingSlide(pollingType, isContatto);
                            return createDeferred.resolve();
                        } else if (data.statoOperazione === 'RI') {
                            return createDeferred.resolve(data.hashOtp);
                        } else {
                            return createDeferred.reject();
                        }
                    } else {
                        return createDeferred.reject();
                    }
                });

            return createDeferred.promise();
        };
        saCheckPush = function (pollingType, isContatto, hashOtp, doneFunc, failFunc) {
            var checkDeferred = $.Deferred(),
                pushPollFunc = function () {
                    saIsPolling = true;

                    $.ajax(dispoLinks.checkPush, {
                        method: "post",
                        dataType: "json",
                        data: {
                            "hashOtp": hashOtp
                        }
                    }).done(
                        /**
                         * @param data
                         * @param data.esito
                         */
                        function (data) {
                            saIsPolling = false;

                            if (data.esito === "VM") {
                                saStopPolling();
                                hidePollingSlide(pollingType, isContatto);
                                checkDeferred.resolve();
                            } else if (data.esito === "VP") {
                                saStopPolling();
                                doneFunc();
                                checkDeferred.resolve();
                            } else if (data.esito !== "RI") {
                                checkDeferred.reject();
                            }
                        }
                    );
                };

            window.setTimeout(function () {
                pushPollFunc();
                pushPoll = window.setInterval(pushPollFunc, strongAuthData.interval);
            }, 10);

            return checkDeferred.promise().fail(failFunc);
        };
        saStartPolling = function (pollingType, isContatto) {
            var settings, paramArr, doneFunc, failFunc,
                parameters = {
                    tipo: pollingType,
                    conto: contoSelezionato
                },
                prefix;

            if (debugPolling) {
                printLog('*** saStartPolling - setting parameters');
            }

            switch (pollingType) {
                case "SEP": // Bonifico
                    prefix = '#bonifico';
                    settings = getCallSettings(isContatto, prefix, 1);
                    Object.assign(parameters, settings.parameters);
                    doneFunc = function () {
                        sendBonifico('App', isContatto);
                    };
                    break;
                case "RPR": // Ricarica prepagata
                    prefix = '#prepagata';
                    settings = getCallSettings(isContatto, prefix, 1);
                    Object.assign(parameters, settings.parameters);
                    doneFunc = function () {
                        sendPrepagata('App', isContatto);
                    };
                    break;
                case "CEL": // Ricarica cellulare
                    prefix = '#cellulare';
                    settings = getCallSettings(isContatto, prefix, 1);
                    Object.assign(parameters, settings.parameters);
                    doneFunc = function () {
                        sendCellulare('App', isContatto);
                    };
                    break;
                case "BFB": // Bollettino postale
                    prefix = '#bollettino';
                    parameters.importo = $('#inputImportoBollettino').val();
                    parameters.ccpbeneficiario = $('#inputBenBollettino').val();
                    parameters.dataaccredito = (getDataAccredito($('#datepickerBollettino').val())).format('dd/mm/yyyy');
                    doneFunc = function () {
                        sendBollettino('App', false);
                    };
                    break;
                case "ACI": // Bollo auto
                    prefix = '#bollo';
                    parameters.importo = getImpBollo();
                    parameters.targa = $("#inputTarga").val();
                    parameters.regione = $("#inputRegione").val();
                    doneFunc = function () {
                        sendBollo();
                    };
                    break;
                case "ATM": // Ricarica ATM
                    prefix = '#atm';
                    paramArr = getInputAtm();
                    parameters.numeroTessera = paramArr[0];
                    paramArr = getInputAtmBis();
                    parameters.importo = paramArr[2].replace(/\s+(\d+,\d\d).*/, "$1");
                    doneFunc = function () {
                        sendAtm('App', false);
                    };
                    break;
                case "RAV": // Mav/Rav
                case "MAV": // Mav/Rav
                    prefix = '#mavrav';
                    paramArr = getInputMavRav();
                    parameters.num_eff = paramArr[0];
                    parameters.importo = paramArr[1] + "," + paramArr[2];
                    parameters.data_emi = paramArr[4];
                    doneFunc = function () {
                        sendMavRav('App', false);
                    };
                    break;
            }

            failFunc = function (jqXHR, textStatus, errorThrown) {
                saStopPolling();
                goToKoPage(prefix, isContatto);

                if (debugPolling) {
                    printLog('*** saCreatePushCall - fail');
                    printError('textStatus', textStatus);
                    printError('errorThrown', errorThrown);
                }

                printFailureData(jqXHR, textStatus, errorThrown);
            };

            saStopPolling();
            showPollingSlide(pollingType, isContatto);

            saCreatePush(pollingType, isContatto, parameters).done(function (hashOtp) {
                if (debugPolling) {
                    printLog('*** saCreatePush - done');
                    printLog('hashOtp', hashOtp);
                }

                if (typeof hashOtp !== 'undefined') {
                    return saCheckPush(pollingType, isContatto, hashOtp, doneFunc, failFunc);
                }
            }).fail(failFunc);
        };
        saStopPolling = function () {
            if (debugPolling) {
                printLog('*** stopPolling - clearInterval');
                printLog('pushPoll', pushPoll);
            }
            saIsPolling = false;
            if (pushPoll) {
                clearInterval(pushPoll);
            }
        };
        setPollingSlide = function (pollingType, isContatto) {
            var slideId;
            switch (pollingType) {
                case "SEP": // Bonifico
                    slideId = "#bonifico";
                    break;
                case "RPR": // Ricarica prepagata
                    slideId = "#prepagata";
                    break;
                case "CEL": // Ricarica cellulare
                    slideId = "#cellulare";
                    break;
                case "BFB": // Bollettino postale
                    slideId = "#bollettino";
                    break;
                case "ACI": // Bollo auto
                    slideId = "#bollo";
                    break;
                case "ATM": // Ricarica ATM
                    slideId = "#atm";
                    break;
                case "RAV":
                case "MAV": // Mav/Rav
                    slideId = "#mavrav";
                    break;
            }
            if (isContatto) {
                pollingSlideClass = getClassPrefix(slideId);
            } else {
                pollingSlideId = slideId + 'Page2Form';
            }
        };
        // Strong Authentication
        showPollingSlide = function (pollingType, isContatto) {
            var opsBox;
            setPollingSlide(pollingType, isContatto);
            if (isContatto) {
                opsBox = getOpsBox();
                opsBox.find(pollingSlideClass + "Page2FormAppOK").show();
                opsBox.find(pollingSlideClass + "Page2FormAppKO").hide();
            } else {
                $(pollingSlideId + "AppOK").show();
                $(pollingSlideId + "AppKO").hide();
            }

            $(window).trigger('resize');
        };
        hidePollingSlide = function (pollingType, isContatto) {
            var opsBox;
            setPollingSlide(pollingType, isContatto);
            if (isContatto) {
                opsBox = getOpsBox();
                opsBox.find(pollingSlideClass + "Page2InputApp").val('');
                opsBox.find(pollingSlideClass + "Page2FormAppOK").hide();
                opsBox.find(pollingSlideClass + "Page2FormAppKO").show();
            } else {
                $(pollingSlideId + "AppOK").hide();
                $(pollingSlideId + "AppKO").show();
            }

            $(window).trigger('resize');
        };
        showSMS = function (prefix, isContatto) {
            var $page;

            if (isContatto) {
                prefix = getClassPrefix(prefix);
            }

            $page = $(prefix + 'Page2');

            if (isContatto) {
                $page.find('.spTopWrap').hide();
            }

            $page.find('.spBottBox form').hide();
            $(prefix + 'Page2FormSmashSMS').show();

            $(window).trigger('resize');
        };
        showOTP = function (prefix, isContatto) {
            var $page;

            if (isContatto) {
                prefix = getClassPrefix(prefix);
            }

            $page = $(prefix + 'Page2');

            if (isContatto) {
                $page.find('.spTopWrap').show();
            }

            $page.find('.spBottBox form').hide();
            $(prefix + 'Page2FormSmash').show();

            $(window).trigger('resize');
        };
        //endregion

        //region CREAZIONE/MODIFICA OGGETTI DOM
        updateDettBonifico = function ($page, isContatto) {
            var outputArr = $page.find('.saldoVal'), rapporto;
            if (isContatto) {
                rapporto = getContattoInfo('rapporto');
                outputArr.eq(0).html(rapporto.iban);
                outputArr.eq(1).html(formattaNumeriOutput($contattoPage.find('.inputImportoContatto').val().replace(',', '.')));
            } else {
                outputArr.eq(0).html(getBen());
                outputArr.eq(1).html(formattaNumeriOutput($('#inputImporto').val().replace(',', '.')));
                outputArr.eq(2).html(getIBAN());
                outputArr.eq(3).html($('#datepickerBonifico').val());
                outputArr.eq(4).html($('#inputNazione option:selected').text());
                outputArr.eq(5).html($('#inputCausale').val());
            }
        };
        updateDettPrepagata = function ($page, isContatto) {
            var outputArr = $page.find('.saldoVal'), inputArr, carta;
            if (isContatto) {
                carta = getContattoInfo('carta');
                outputArr.eq(0).html(carta.numero);
                outputArr.eq(1).html(formattaNumeriOutput($contattoPage.find('.inputImportoCjContatto').val().replace(',', '.')));
            } else {
                inputArr = getInputPrepagata();
                outputArr.eq(0).html(inputArr[1]);
                outputArr.eq(1).html(inputArr[0]);
                outputArr.eq(2).html(inputArr[2] === 'CJEAN' ? 'Carta Je@ns' : 'Carta Kje@ns');
                outputArr.eq(3).html(formattaNumeriOutput($('#inputImportoPrepagata').val().replace(',', '.')));
            }
        };
        updateDettCellulare = function ($page, isContatto) {
            var outputArr = $page.find('.saldoVal'),
                slideType, telefono;
            if (isContatto) {
                telefono = getContattoInfo('telefono');
                outputArr.eq(0).html(telefono.prefisso + ' ' + telefono.numero);
                outputArr.eq(1).html($contattoPage.find('.inputImportoCellContatto').val().split('|')[0]);
            } else { // 3
                slideType = $page.attr('id').replace('cellulareSlideStep', '');
                if (slideType !== "3") {
                    outputArr.eq(0).html(getBenCell());
                    outputArr.eq(1).html(getNumCell());
                    outputArr.eq(2).html($('#inputOperCellulare option:selected').text());
                    outputArr.eq(3).html($('#inputImportoCellulare').val().split('|')[0]);
                } else {
                    outputArr.eq(0).html(getBenCell());
                    outputArr.eq(1).html(getNumCell());
                    outputArr.eq(2).html($('#inputImportoCellulare').val().split('|')[0]);
                }
            }
        };
        updateDettBollettino = function ($page) {
            var outputArr = $page.find('.saldoVal');
            outputArr.eq(0).html(contoSelezionato);
            outputArr.eq(1).html(formattaNumeriOutput($('#inputImportoBollettino').val().replace(',', '.')));
            outputArr.eq(2).html($('#inputBenBollettino').val());
            outputArr.eq(4).html($('#inputNuovoEseBollettino').val());
        };
        updateDettBollo = function ($page) {
            var outputArr = $page.find('.saldoVal');
            // Popola i dati per la conferma prima del pagamento del bollo auto
            outputArr.eq(0).html($("#inputVeicolo").val().toUpperCase());
            outputArr.eq(1).html($("#inputTarga").val().toUpperCase());
            outputArr.eq(2).html(dettBollo.scadenza);
            outputArr.eq(3).html(dettBollo.regione + " - " + dettBollo.provincia);
            outputArr.eq(4).html(dettBollo.tassa + " &euro;");
            outputArr.eq(5).html(dettBollo.commissioni + " &euro;");
            outputArr.eq(6).html(dettBollo.sanzioni + " &euro;");
            outputArr.eq(7).html(dettBollo.interessi + " &euro;");
            outputArr.eq(8).html(dettBollo.totale + " &euro;");
            bolloTot = dettBollo.totale;
            bolloDatiTrans = dettBollo.idTransazione;
            // Default prima della spedizione dei dati
            bolloForzaAddebito = false;
        };
        updateDettAtm = function ($page) {
            var outputArr = $page.find('.saldoVal'),
                inputArrAtm = getInputAtm(),
                inputArrAtmStep2 = getInputAtmBis();
            outputArr.eq(0).html(inputArrAtm[0]);
            outputArr.eq(1).html(inputArrAtm[1]);
            outputArr.eq(2).html(inputArrAtmStep2[0] + ' ' + '<br>Validit&agrave; dal' + ' ' + inputArrAtmStep2[1]);
            outputArr.eq(3).html(inputArrAtmStep2[2]);
        };
        updateDettMavRav = function ($page) {
            var outputArr = $page.find('.saldoVal');
            outputArr.eq(0).html($('#selectMavrav').val());
            outputArr.eq(1).html($('#codiceMavrav').val());
            outputArr.eq(2).html(formattaNumeriOutput($('#inputImportoMavrav').val().replace(',', '.')));
            outputArr.eq(3).html($('#datepickerMavRav').val());
        };
        updateTagliTel = function (tagliArr, isContatto) {
            var $tagliSelect = !isContatto ? $('#inputImportoCellulare') : $contattoPage.find('.inputImportoCellContatto');
            $tagliSelect[0].options.length = 1;
            $.each(tagliArr, function (index, value) {
                $tagliSelect.append($('<option>').text(value.split('|')[0]).val(value));
            });
            $tagliSelect.prop('disabled', false);
            //$(window).resize();
        };
        updateBollettino = function () {
            isBollettinoPre = $('#inputBollettinoPre').is(':checked');
            $('#bollettinoForm label').removeClass('active');
        };
        updateBollettinoBis = function () {
            if (!isBollettinoPre) { // BIA
                $('#boxBollettinoPre').hide();
            } else { // PRE
                $('#boxBollettinoPre').show();
            }
            $('#inputNuovoEseBollettino').val(datiUtente.eseguitoDa);
            $('#residenzaEsecutore').val(datiUtente.residenteIn);
            $('#provinciaEsecutore').val(datiUtente.provincia);
            $('#capEsecutore').val(datiUtente.cap);
            $('#localitaEsecutore').val(datiUtente.localita);
        };
        /**
         * @param data
         * @param data.ListaTagli
         * @param data.ListaTagli.descriz
         * @param data.ListaTagli.dataval
         * @param data.ListaTagli.importo
         * @param data.idTransazione
         */
        updateAtm = function (data) {
            var htmlItem = '<div class="saldoGroup"><div class="row"><div class="col-xs-5"><div class="radio inline"><label class="textWrapper"><input type="radio" name="abbonamento"><span class="text saldoLabel"></span><br><em class="saldoDate"></em></label></div></div><div class="col-xs-7"><span class="saldoVal"></span></div></div></div>',
                $item,
                $wrapperInnerAbbATM = $('#WrapperInnerAbbATM'),
                inputArrAtm = getInputAtm(),
                numeroTessera = inputArrAtm[0],
                titolareTessera = inputArrAtm[1],
                $atmInfoArr = $('#atmInfo').find('.saldoVal');

            $atmInfoArr.eq(0).html(numeroTessera);
            $atmInfoArr.eq(1).html(titolareTessera);

            $wrapperInnerAbbATM.html('');

            $(data.ListaTagli).each(function (index) {
                $item = $(htmlItem);
                $item.find('.saldoLabel').html(data.ListaTagli[index].descriz);
                $item.find('.saldoVal').html(' ' + data.ListaTagli[index].importo + ' ' + '&euro;');
                $item.find('.saldoDate').html(data.ListaTagli[index].dataval);
                $item.find('input[type=radio]').val(index);
                $wrapperInnerAbbATM.append($item);
            });

            $('#WrapperAbbATM').attr('id', data.idTransazione);
        };
        updateBollo = function () {
            // Chiamata per controllo e update
            // Assembla i parametri per la richiesta
            var parameters = {
                    "accountId": contoSelezionato,
                    "targa": $("#inputTarga").val(),
                    "regione": $("#inputRegione").val(),
                    "tipoVeicolo": $("#inputVeicolo").val(),
                    "presaVisione": "true"
                },
                $page = $('#bolloPage1');
            if (debugLoading) {
                printLog('*** updateBollo: showLoadingOnPage ' + getPageInfo($page));
            }
            showLoadingOnPage($page);
            jqAJAXCall('post', 'json', dispoLinks.updateBollo, function (data, textStatus, jqXHR) {
                // Riceve e popola i dati del riepilogo per il pagamento bollo auto
                var testData = isNewJsonCallFailed(data);
                hideLoadingOnPage($page);
                if (testData[0]) {
                    showCallError(testData[1], $page);
                    printFailureData(jqXHR, textStatus, testData[1]);
                } else {
                    dettBollo = data;
                    goToAuthPage('#bollo', "ACI", "ACI", false);
                }
            }, function (jqXHR, textStatus, errorThrown) {
                hideLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** updateBolloFailure: hideLoadingOnPage ' + getPageInfo($page));
                }
                showMsgOnPage({
                    wrapper: $page,
                    msgText: defaultError,
                    boxClass: 'negativo'
                });
                printFailureData(jqXHR, textStatus, errorThrown);
            }, parameters);
        };
        getBen = function () {
            var $inputBen = $('#inputBen');
            return $inputBen.comboboxPlus('isSelected') ? $inputBen.comboboxPlus('getSelection').split('|')[2] : $inputBen.comboboxPlus('getQuery');
        };
        getIBAN = function () {
            var $inputIBAN = $('#inputIBAN');
            return ($inputIBAN.is(':visible')) ? $inputIBAN.val() : $.trim($('#outputIBAN').text());
        };
        getInputPrepagata = function () {
            var result = [],
                $selectCartaVal = $('#inputBenPrepagata').val();
            if ($selectCartaVal !== '') {
                result = ($selectCartaVal.split('|'));
                result.push($('#inputBenPrepagata option:selected').attr('data-tipo'));
            } else {
                result = [$('#inputBenPrepagataInput').val(), intestCJ, $('#inputTypePrepagata').val()];
            }
            return result;
        };
        getNumCell = function () {
            var $inputBenCellulare = $('#inputBenCellulare');
            return $inputBenCellulare.comboboxPlus('isSelected') ? $.trim($inputBenCellulare.comboboxPlus('getSelection').split('|')[1] + $inputBenCellulare.comboboxPlus('getSelection').split('|')[2]) : $inputBenCellulare.comboboxPlus('getQuery');
        };
        getBenCell = function () {
            var $inputBenCellulare = $('#inputBenCellulare');
            return $inputBenCellulare.comboboxPlus('isSelected') ? $.trim($inputBenCellulare.comboboxPlus('getSelection').split('|')[3]) : $('#inputIntestCellulare').val();
        };
        getInputCell = function () {
            var $inputBenCellulare = $('#inputBenCellulare'),
                $inputBenCellulareVal = $inputBenCellulare.comboboxPlus('getValue').split('|'),
                inputArr = [],
                prefisso, numTelefonico;
            if ($inputBenCellulareVal.length === 1) {
                prefisso = $inputBenCellulareVal[0].substring(0, 3);
                numTelefonico = $inputBenCellulareVal[0].substring(3);
            } else {
                prefisso = $inputBenCellulareVal[1];
                numTelefonico = $inputBenCellulareVal[2];
            }
            inputArr.push(prefisso);
            inputArr.push(numTelefonico);
            inputArr.push($('#inputOperCellulare').val());
            inputArr.push($('#inputImportoCellulare').val());
            return inputArr;
        };
        getInputAtm = function () {
            var $inputBenAtm = $('#inputBenAtm'),
                inputBenAtmVal = $inputBenAtm.comboboxPlus('getValue'),
                tmpArr, inputArrAtm;
            if ($inputBenAtm.comboboxPlus('isSelected')) {
                tmpArr = inputBenAtmVal.split('|');
                inputArrAtm = [tmpArr[0], tmpArr[1]];
            } else {
                inputArrAtm = [inputBenAtmVal, $('#inputIntestAtm').val()];
            }
            return inputArrAtm;
        };
        getInputAtmBis = function () {
            var inputArrAtmStep2,
                $selectedRadioStep2 = $("#WrapperInnerAbbATM input[name=abbonamento]:checked"),
                selectedTipo = $selectedRadioStep2.closest('label').find('.saldoLabel').html(),
                selectedVal = $selectedRadioStep2.closest('label').find('.saldoDate').html(),
                selectedImporto = $selectedRadioStep2.closest('.saldoGroup').find('.saldoVal').html(),
                selectedIndex = $selectedRadioStep2.index('input[name=abbonamento]'),
                idTransazione = $('#WrapperAbbATM').attr('id');
            inputArrAtmStep2 = [selectedTipo, selectedVal, selectedImporto, selectedIndex, idTransazione];
            return inputArrAtmStep2;
        };
        getInputMavRav = function () {
            var inputArrMavRav, valImp, valDec;
            valImp = $('#inputImportoMavrav').val();
            valDec = valImp.split(',')[1];
            if (valImp.indexOf(',') === -1) {
                valDec = '00';
            } else if (valImp.indexOf(',') !== -1 && valDec.toString().length === 1) {
                valDec += '0';
            }
            inputArrMavRav = [$('#codiceMavrav').val(), valImp.split(',')[0], valDec, $('#selectMavrav').val().toUpperCase(), $('#datepickerMavRav').val()];
            return inputArrMavRav;
        };
        getContoSelezionato = function () {
            return contoSelezionato;
        };
        /***
         *
         * @param data
         * @param data.esito
         * @param data.authCode
         * @param data.strongAuth
         * @param data.ctrlOtp
         * @param data.conto
         * @param data.auto
         * @param data.mavRav
         * @param data.bonifico
         * @param data.prepagata
         * @param data.bollettino
         * @param data.bollettino.primaData
         * @param textStatus
         * @param jqXHR
         */
        initDatiIniziali = function (data, textStatus, jqXHR) {
            var testData = isNewJsonCallFailed(data),
                $selectConti, codCCQueryParam;
            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
                checkLoad('datiIniziali', false);
            } else {
                checkLoad('datiIniziali', true);
                updateAuthCode(data.authCode, true);

                // Strong Authentication
                if (!datiUtente.auth) {
                    if (data.strongAuth === 'F' || data.strongAuth === 'A') {
                        strongAuthData.type = data.strongAuth;
                        strongAuthData.interval = 6000;
                    }
                    $('#selectAuth').prop('disabled', false).val(strongAuthData.type.toLowerCase());
                } else {
                    if (datiUtente.auth !== 'n') {
                        strongAuthData.type = datiUtente.auth.toUpperCase();
                        strongAuthData.interval = 6000;
                    }
                }
                if (typeof strongAuthData.type !== "undefined") {
                    strongAuth = true;
                }
                if (strongAuth) {
                    $('.strongAuthKO').remove();
                } else {
                    $('.strongAuthOK').remove();
                }
                ctrlOTP = data.ctrlOtp;
                data.conto.forEach(
                    /**
                     * @param conto
                     * @param conto.estrattoConto
                     * @param conto.numero
                     * @param conto.iban
                     */
                    function (conto) {
                        ibanArr[conto.numero] = conto.iban;
                        estrattoContoArr[conto.numero] = conto.estrattoConto;
                    }
                );
                $selectConti = $('#conti');
                contoSelezionato = $selectConti.val();
                $('#iban').html(ibanArr[contoSelezionato]);
                $('#estrattoConto').html(estrattoContoArr[contoSelezionato]);
                codCCQueryParam = '?codCC=' + contoSelezionato;
                $('#linkMovimenti').attr('href', dynamicLinks.linkMovimenti + codCCQueryParam);
                $('#linkDisposizioni').attr('href', dynamicLinks.linkDisposizioni + codCCQueryParam);
                $('#linkCoordinate').attr('href', dynamicLinks.linkCoordinate + codCCQueryParam);
                $selectConti.change(function () {
                    var $contoSel = $(this);
                    contoSelezionato = $contoSel.val();
                    codCCQueryParam = '?codCC=' + contoSelezionato;
                    $('#iban').html(ibanArr[contoSelezionato]);
                    $('#estrattoConto').html(estrattoContoArr[contoSelezionato]);
                    $('#linkMovimenti').attr('href', dynamicLinks.linkMovimenti + codCCQueryParam);
                    $('#linkDisposizioni').attr('href', dynamicLinks.linkDisposizioni + codCCQueryParam);
                    $('#linkCoordinate').attr('href', dynamicLinks.linkCoordinate + codCCQueryParam);
                    collapseAccordion();
                    closeContatti();
                    loadMovDispo();
                });
                bonificoDateArr.length = 0; //
                data.bonifico.dataValuta.forEach(function (dataValuta) {
                    var objDataValuta = (new Date(dataValuta)).format('dd/mm/yyyy');
                    bonificoDateArr.push(objDataValuta);
                });
                primaDataBollettino = (new Date(data.bollettino.primaData)).format('dd/mm/yyyy');
                initDatePickersBonifico();
                initDatePickersBollettino();
                initDatePickersMavRav(data.mavRav);
                loadMovDispo();
                // Caricamento dati bollo auto
                loadAuto(data.auto);
                $(window).trigger('resize');
            }
        };
        initDatePickersBonifico = function () {
            // Placeholder calendario con data odierna
            // *** Calendari ***
            $("#datepickerBonifico").mask("99/99/9999").datepicker({
                showOtherMonths: true,
                showOn: "button",
                prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                buttonImage: getPathImagesFe() + "pixel_trasp.gif",
                buttonImageOnly: true,
                minDate: bonificoDateArr[0],
                maxDate: bonificoDateArr[bonificoDateArr.length - 1],
                dateFormat: "dd/mm/yy",
                beforeShowDay: checkDateBonifico
            }).val(bonificoDateArr[0]);
            appendDatePickerIcon('datepickerBonifico');
            // *** |FINE| Calendari ***
        };
        initDatePickersBollettino = function () {
            // Placeholder calendario con data odierna
            // *** Calendari ***
            $("#datepickerBollettino").mask("99/99/9999").datepicker({
                showOtherMonths: true,
                showOn: "button",
                prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                buttonImage: getPathImagesFe() + "pixel_trasp.gif",
                buttonImageOnly: true,
                minDate: primaDataBollettino,
                maxDate: "+1Y-1D",
                dateFormat: "dd/mm/yy",
                beforeShowDay: noWeekendsOrHolidays
            }).attr('readonly', 'readonly').val(primaDataBollettino);
            appendDatePickerIcon('datepickerBollettino');
            // *** |FINE| Calendari ***
        };
        initDatePickersMavRav = function (dataMavRav) {
            if (dataMavRav.dataValuta.length) {
                dataMavRav.dataValuta.forEach(function (dataValuta) {
                    mavravDateArr.push((new Date(dataValuta)).format("dd/mm/yyyy"));
                });
                primaDataMavRav = mavravDateArr[0];
                $("#datepickerMavRav").mask("99/99/9999").datepicker({
                    showOn: "button",
                    prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                    nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                    buttonImage: getPathImagesFe() + "pixel_trasp.gif",
                    buttonImageOnly: true,
                    minDate: primaDataMavRav,
                    maxDate: mavravDateArr[mavravDateArr.length - 1],
                    dateFormat: "dd/mm/yy",
                    beforeShowDay: checkDateMavRav
                }).val(primaDataMavRav);
                appendDatePickerIcon('datepickerMavRav');
            }
        };
        completeMovDispo = function () {
            if (!isLoadingMovData && !isLoadingDispoData) {
                hideLoadingOnPage($('#movDispoExp'));
            }
        };
        /**
         * @param node
         * @param node.cod1
         * @param node.cod2
         * @param node.numCode
         * @param node.find
         * @param isJSON
         */
        updateAuthCode = function (node, isJSON) {
            if (isJSON) {
                authCode1 = node.cod1;
                authCode2 = node.cod2;
                authCodeNum = node.numCode;
            } else {
                authCode1 = node.find('cod1:first').attr('val');
                authCode2 = node.find('cod2:first').attr('val');
                authCodeNum = node.find('numCode:first').attr('val');
            }
            resetPin2(parseInt(authCode1, 10), parseInt(authCode2, 10), parseInt(authCodeNum, 10));
        };
        /**
         * @param data
         * @param data.listaPaesi
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         */
        updateNazioni = function (data, textStatus, jqXHR) {
            var $inputNazione,
                testData = isNewJsonCallFailed(data);
            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
                checkLoad('nazioni', false);
            } else {
                checkLoad('nazioni', true);
                $inputNazione = $('#inputNazione').empty();
                $inputNazione.append($('<option>').val('').text('Seleziona'));
                if (data.listaPaesi.length) {
                    $.each(data.listaPaesi, function (index, pair) {
                        var selected = (pair.key === '86');
                        $inputNazione.append($('<option>').val(pair.key).text(pair.value).prop('selected', selected));
                    });
                }
            }
        };
        /***
         *
         * @param data
         * @param data.rubricaBeneficiari
         * @param data.rubricaPrepagate
         * @param data.rubricaTelefonica
         * @param textStatus
         * @param jqXHR
         */
        updateRubriche = function (data, textStatus, jqXHR) {
            var $inputBen,
                $inputBenPrepagata,
                $inputBenCellulare,
                $inputBenAtm,
                $contatti,
                testData = isNewJsonCallFailed(data);
            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
                checkLoad('rubriche', false);
            } else {
                checkLoad('rubriche', true);
                /* Rubrica bonifico */
                rubricaIban.length = 0;
                $inputBen = $('#inputBen').html('');
                $inputBen.append($('<option selected="selected">').val('').text('digita o scegli da rubrica'));
                $contatti = data.rubricaBeneficiari;
                if ($contatti.length) {
                    rubricheOK.inputBen = true;
                    $contatti.forEach(function (contatto) {
                        var nazione, note, testoOption, noteMaxWidth, iban = contatto.iban;
                        if (check.isSepa(iban)) {
                            nazione = contatto.nazione ? contatto.nazione : '';
                            note = contatto.note ? contatto.note : '';
                            noteMaxWidth = 52 - contatto.nome.length;
                            note = (note !== '') ? ((note.length > noteMaxWidth) ? ' (' + note.substr(0, (noteMaxWidth - 3)) + '...)' : ' (' + note + ')') : '';
                            testoOption = contatto.nome + note;
                            $inputBen.append($('<option>').val(contatto.nome + '|' + iban + '|' + contatto.intestazione).text(testoOption).attr('data-nazione', nazione));
                            rubricaIban.push(iban);
                        }
                    });
                    $inputBen.comboboxPlus('refresh');
                } else {
                    rubricheOK.inputBen = false;
                }
                /* Rubrica carte */
                rubricaCarte.length = 0;
                $inputBenPrepagata = $('#inputBenPrepagata').html('');
                $inputBenPrepagata.append($('<option selected="selected">').val('').text('digita o scegli da rubrica'));
                $contatti = data.rubricaPrepagate.filter(function (contatto) {
                    return contatto.tipo !== 'CATM';
                });
                //contattiRicaricabili = $contatti.attr('tipo','atm');
                if ($contatti.length) {
                    rubricheOK.inputBenPrepagata = true;
                    $contatti.forEach(function (contatto) {
                        var nome = contatto.nome,
                            numeroCarta = contatto.numeroCarta.toString();
                        $inputBenPrepagata.append($('<option>').val(numeroCarta + '|' + nome + '|' + contatto.tipo).text(numeroCarta));
                        rubricaCarte.push(numeroCarta);
                        carteArr[numeroCarta] = {
                            'tipo': contatto.tipo
                        };
                    });
                    $inputBenPrepagata.comboboxPlus('refresh');
                } else {
                    rubricheOK.inputBenPrepagata = false;
                }
                $inputBenPrepagata.combobox('refresh');
                /* Rubrica telefono */
                rubricaCell.length = 0;
                $inputBenCellulare = $('#inputBenCellulare').html('');
                $inputBenCellulare.append($('<option selected="selected">').val('').text('digita o scegli da rubrica'));
                $contatti = data.rubricaTelefonica;
                if ($contatti.length) {
                    rubricheOK.inputBenCellulare = true;
                    $contatti.forEach(function (contatto) {
                        var testoOption = contatto.prefisso + contatto.numero;
                        $inputBenCellulare.append($('<option>').val(contatto.operatore + '|' + contatto.prefisso + '|' + contatto.numero + '|' + contatto.nome).text(testoOption));
                        rubricaCell.push(contatto.prefisso + contatto.numero);
                    });
                    $inputBenCellulare.comboboxPlus('refresh');
                } else {
                    rubricheOK.inputBenCellulare = false;
                }
                $inputBenCellulare.combobox('refresh');
                /*Rubrica tessera ATM */
                rubricaTesATM.length = 0;
                $inputBenAtm = $('#inputBenAtm').html('');
                $inputBenAtm.append($('<option selected="selected">').val('').text('digita o scegli da rubrica'));
                $contatti = data.rubricaPrepagate.filter(function (contatto) {
                    return contatto.tipo === 'CATM';
                });
                if ($contatti.length) {
                    rubricheOK.inputBenAtm = true;
                    $contatti.forEach(function (contatto) {
                        var nome = contatto.nome,
                            numeroTessera = contatto.numeroCarta;
                        $inputBenAtm.append($('<option>').val(numeroTessera + '|' + nome).text(numeroTessera));
                        rubricaTesATM.push(numeroTessera);
                    });
                    $inputBenAtm.comboboxPlus('refresh');
                } else {
                    rubricheOK.inputBenAtm = false;
                }
            }
        };
        /**
         *
         * @param data
         * @param data.webankIban
         * @param data.rubricaAll
         * @param data.rubrica
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         */
        updateContatti = function (data, textStatus, jqXHR) {
            var $spPersonColArr = $('#boxContact .spPersonCol').removeClass('visible'),
                $spPersonAdd = $('.spPersonAdd:first').hide(),
                $selectAddContatto,
                addedContactArr = [],
                testData = isNewJsonCallFailed(data);

            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                $selectAddContatto = $('#selectAddContatto');
                $selectAddContatto[0].options.length = 1;
                webankIban = (typeof data.webankIban !== 'undefined' && data.webankIban === 'true');

                if (data.rubricaAll.length) {
                    rubricaContatti = data.rubrica;

                    if (rubricaContatti.length) {
                        $.each(rubricaContatti,
                            /**
                             * @param index
                             * @param {Contatto} contact
                             */
                            function (index, contact) {
                                var $spPersonCol = $spPersonColArr.eq(index).addClass('visible'),
                                    nome, cognome, linkModContatto, titleModContatto;
                                addedContactArr.push(contact.anagrafica.id);
                                nome = $.trim(contact.anagrafica.nome);
                                cognome = $.trim(contact.anagrafica.cognome_rag_soc);
                                linkModContatto = dynamicLinks.linkModContatto + '&selBeneficiario=' + contact.anagrafica.id;
                                titleModContatto = 'Aggiungi informazioni';
                                $spPersonCol.find('.spPersonFirstName, .spPersonOpsFirstName').html(nome);
                                $spPersonCol.find('.spPersonLastName, .spPersonOpsLastName').html(cognome);
                                $spPersonCol.find('.spPersonMod').attr('href', linkModContatto).attr('title', 'Modifica');
                                if (contact.anagrafica.flg_rapporto) {
                                    $spPersonCol.find('.spPersonOpBonifico').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpBonifico').addClass('disabled');
                                    $spPersonCol.find('.spPersonOpBonifico').find('.spPersonOpAdd').attr('href', linkModContatto + '&addConto=true').attr('title', titleModContatto);
                                }
                                if (contact.anagrafica.flg_telefono) {
                                    $spPersonCol.find('.spPersonOpCellulare').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpCellulare').addClass('disabled');
                                    $spPersonCol.find('.spPersonOpCellulare').find('.spPersonOpAdd').attr('href', linkModContatto + '&addTelefono=true').attr('title', titleModContatto);
                                }
                                if (contact.anagrafica.flg_carta) {
                                    $spPersonCol.find('.spPersonOpPrepagata').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpPrepagata').addClass('disabled');
                                    $spPersonCol.find('.spPersonOpPrepagata').find('.spPersonOpAdd').attr('href', linkModContatto + '&addCarta=true').attr('title', titleModContatto);
                                }
                            }
                        );
                    }

                    rubricaAllContatti = data.rubricaAll;
                    newContactNum = 0;
                    $.each(rubricaAllContatti, function (index, contact) {
                        var name, opArr, ops;
                        if ($.inArray(contact.anagrafica.id, addedContactArr) === -1 && (contact.anagrafica.flg_rapporto || contact.anagrafica.flg_telefono || contact.anagrafica.flg_carta)) {
                            opArr = [];
                            if (contact.anagrafica.flg_rapporto) {
                                opArr.push('Bonifico');
                            }
                            if (contact.anagrafica.flg_telefono) {
                                opArr.push('Cellulare');
                            }
                            if (contact.anagrafica.flg_carta) {
                                opArr.push('Carta prepagata');
                            }
                            ops = opArr.join(', ');
                            ++newContactNum;
                            name = $.trim($.trim(contact.anagrafica.nome) + ' ' + $.trim(contact.anagrafica.cognome_rag_soc));
                            $selectAddContatto.append($('<option>').val(contact.anagrafica.id).text(name + ' (' + ops + ')'));
                        }
                    });
                    // printLog('*** onSliderLoad ' + rubricaContatti.length);

                    if (rubricaContatti.length < 6) {
                        $spPersonAdd.show();
                    }
                } else {
                    $spPersonAdd.show();
                }
                // Forza il ricalcolo dello slider che altrimenti e' troppo alto
                $(window).resize();
            }
        };
        /**
         *
         * @param data
         * @param textStatus
         * @param jqXHR
         */
        updateContatto = function (data, textStatus, jqXHR) {
            var contatto, info, carte, $selectBox, $outputBox, $imgPreferito, noteMaxWidth, optionText, optionId, note,
                $spPersonAdd = $('.spPersonAdd'),
                testData = isNewJsonCallFailed(data);
            hideLoadingOnPage($spPersonAdd.find('.spPersonWrap'));
            $spPersonAdd.find('.spPersonOpsBox').addClass('open');

            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                contatto = data.rubrica[0];
                // IBAN
                info = contatto.rapporto;
                $selectBox = $('#selectSetIbanContatto');
                $outputBox = $('#outputSetIbanContatto');
                $imgPreferito = $('#imgPreferitoIbanContatto');

                if (info.length > 1) {
                    $selectBox.show()[0].options.length = 0;
                    $imgPreferito.attr('src', getPathImagesFe() + 'ico/ico1gr_preferito.gif').show();
                    $outputBox.hide();
                    $.each(info, function () {
                        var $option = $('<option>');
                        if (this.preferito) {
                            $option.addClass('preferito');
                        }
                        note = this.note;
                        noteMaxWidth = 52 - this.iban.length;
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = this.iban + note;
                        $selectBox.append($option.val(this.id).text(optionText));
                    });
                } else {
                    if (info.length) {
                        note = info[0].note;
                        noteMaxWidth = 52 - info[0].iban.length;
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = info[0].iban + note;
                        optionId = info[0].id;
                    } else {
                        optionText = '-&nbsp;-&nbsp;-';
                        optionId = '';
                    }
                    $selectBox.hide();
                    $imgPreferito.hide();
                    $outputBox.show().html(optionText).attr('data-id', optionId);
                }
                // Cellulare
                info = contatto.telefono;
                $selectBox = $('#selectSetCellContatto');
                $outputBox = $('#outputSetCellContatto');
                $imgPreferito = $('#imgPreferitoCellContatto');

                if (info.length > 1) {
                    $selectBox.show()[0].options.length = 0;
                    $imgPreferito.attr('src', getPathImagesFe() + 'ico/ico1gr_preferito.gif').show();
                    $outputBox.hide();
                    $.each(info, function () {
                        var $option = $('<option>');
                        if (this.preferito) {
                            $option.addClass('preferito');
                        }
                        note = this.note;
                        noteMaxWidth = 52 - (this.prefisso.length + this.numero.length + 1);
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = this.prefisso + ' ' + this.numero + note;
                        $selectBox.append($option.val(this.id).text(optionText));
                    });
                } else {
                    if (info.length) {
                        note = info[0].note;
                        noteMaxWidth = 52 - (info[0].prefisso.length + info[0].numero.length + 1);
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = info[0].prefisso + ' ' + info[0].numero + note;
                        optionId = info[0].id;
                    } else {
                        optionText = '-&nbsp;-&nbsp;-';
                        optionId = '';
                    }

                    $selectBox.hide();
                    $imgPreferito.hide();
                    $outputBox.show().html(optionText).attr('data-id', optionId);
                }
                // Carta
                carte = contatto.carta; //
                // noinspection JSPrimitiveTypeWrapperUsage
                info.length = 0;
                $.each(carte, function () {
                    if (this.tipoCarta !== 'poste') {
                        info.push(this);
                    }
                });
                $selectBox = $('#selectSetPrepagataContatto');
                $outputBox = $('#outputSetPrepagataContatto');
                $imgPreferito = $('#imgPreferitoPrepagataContatto');
                if (info.length > 1) {
                    $selectBox.show()[0].options.length = 0;
                    $imgPreferito.attr('src', getPathImagesFe() + 'ico/ico1gr_preferito.gif').show();
                    $outputBox.hide();
                    $.each(info, function () {
                        var $option = $('<option>');
                        if (this.preferito) {
                            $option.addClass('preferito');
                        }
                        note = this.note;
                        noteMaxWidth = 52 - this.numero.length;
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = this.numero + note;
                        $selectBox.append($option.val(this.id).text(optionText));
                    });
                } else {
                    if (info.length) {
                        note = info[0].note;
                        noteMaxWidth = 52 - info[0].numero.length;
                        note = (note !== '') ? ((note.length > noteMaxWidth) ? ' - ' + note.substr(0, (noteMaxWidth - 3)) + '...' : ' - ' + note) : '';
                        optionText = info[0].numero + note;
                        optionId = info[0].id;
                    } else {
                        optionText = '-&nbsp;-&nbsp;-';
                        optionId = '';
                    }
                    $selectBox.hide();
                    $imgPreferito.hide();
                    $outputBox.show().html(optionText).attr('data-id', optionId);
                }
            }
        };
        /**
         *
         * @param data
         * @param data.intest
         * @param data.saldoC
         * @param data.saldoD
         * @param data.lista
         * @param textStatus
         * @param jqXHR
         */
        updateTabMov = function (data, textStatus, jqXHR) {
            var $bxsliderMovBox = $('#bxsliderMovBox'),
                $boxErr = $('#errMovMsg'),
                $boxesito = $('#noMovMsg'),
                $spBar = $('#movContent .spBar'),
                testData = isNewJsonCallFailed(data);
            if (testData[0]) {
                $boxErr.show();
                $boxesito.hide();
                $bxsliderMovBox.hide();
                $spBar.hide();
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                var $tbody = $bxsliderMovBox.find('tbody').empty(),
                    movNum = data.lista.length,
                    $datiGraficiArr = $('#datiGrafici .output');
                movDetailArr = {};
                $('#intestatario').html(data.intest);
                $('#saldo').html(formatEuro(data.saldoD, true) + ' &euro;');
                $datiGraficiArr.eq(0).html(contoSelezionato);
                $datiGraficiArr.eq(1).html(formatEuro(data.saldoC, true) + ' &euro;');
                $datiGraficiArr.eq(2).html(formatEuro(data.saldoD, true) + ' &euro;');
                if (movNum) {
                    $boxErr.hide();
                    $boxesito.hide();
                    $bxsliderMovBox.show();
                    $spBar.show();
                    $.each(data.lista,
                        /**
                         *
                         * @param index
                         * @param mov
                         * @param mov.descB
                         * @param mov.dataC
                         * @param mov.descE
                         * @param mov.val
                         * @param mov.id
                         */
                        function (index, mov) {
                            //if (index > movNum) { return false; }
                            var $tr = $('<tr>'),
                                $tdArr,
                                descB = (mov.descB.length > 30) ? $('<span>', { title: mov.descB }).html(mov.descB.substr(0, 30) + '...') : mov.descB,
                                descBText;

                            $tr.html('<td class="center spNoWrap"></td>' + '<td class="left linkDetail"></td>' + '<td class="right spNoWrap"></td>');
                            $tdArr = $tr.find('td');
                            descBText = (!mov.descE) ? descB : $('<a>', {
                                href: 'javascript:',
                                'id': 'linkMovDetail' + mov.id,
                                'data-id': mov.id
                            }).html(descB);
                            $tdArr.eq(0).html((new Date(mov.dataC)).format('dd/mm/yyyy'));
                            $tdArr.eq(1).html($('<div class="spTdDesc"></div>').append(descBText));
                            $tdArr.eq(2).html(formatEuro(mov.val, true) + ' &euro;');
                            $tbody.append($tr);

                            if (mov.descE) {
                                movDetailArr[mov.id] = mov.descE;
                                addMovDetail(mov.id, mov.descE);
                            }
                        });
                } else {
                    $boxErr.hide();
                    $boxesito.show();
                    $bxsliderMovBox.hide();
                    $spBar.hide();
                }
            }
            isLoadingMovData = false;
            completeMovDispo();
            if (debugLoading) {
                printLog('*** updateTabMov: hideLoadingOnPage movBox');
            }
        };
        /**
         *
         * @param data
         * @param data.esitiRicerca
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param textStatus
         * @param jqXHR
         */
        updateTabDispo = function (data, textStatus, jqXHR) {
            var $bxsliderDispoBox = $('#bxsliderDispoBox'),
                $boxErr = $('#errDispoMsg'),
                $boxesito = $('#noDispoMsg'),
                $spBar = $('#dispoContent .spBar'),
                testData = isNewJsonCallFailed(data);
            if (testData[0]) {
                $boxErr.show();
                $boxesito.hide();
                $bxsliderDispoBox.hide();
                $spBar.hide();
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                var $tbody = $bxsliderDispoBox.find('tbody').empty(),
                    dispoNum = data.esitiRicerca.length;
                dispoDetailArr = {};
                if (dispoNum) {
                    $boxErr.hide();
                    $boxesito.hide();
                    $bxsliderDispoBox.show();
                    $spBar.show();
                    $.each(data.esitiRicerca, function (index, esito) {
                        var $tr = $('<tr>'),
                            $tdArr,
                            $descBText,
                            dettLink = esito.dettaglio.replace('&#160;', '');
                        $tr.html('<td class="center spNoWrap"></td>' + '<td class="left linkDetail"></td>' + '<td class="left spNoWrap"></td>' + '<td class="right spNoWrap"></td>');
                        $tdArr = $tr.find('td');
                        if (!consultare) {
                            // noinspection JSCheckFunctionSignatures
                            dettLink = ($.trim(dettLink) !== '') ? $(dettLink).filter('a:first').attr('href') : '';
                            // Correzione link bonifico estero
                            if (dettLink.indexOf('WsSepaBoeApp') !== -1) {
                                dettLink = dettLink.replace('tabId=&', 'tabId=nav_priv_wbx_sportello&').replace('OBSKEY=&', 'OBSKEY=nav_priv_wbx_esito_disp_on_line_new&');
                            }
                        }
                        $descBText = $('<a>', {
                            href: 'javascript:',
                            'id': 'linkDispoDetail' + index,
                            'data-id': index,
                            'data-link': dettLink,
                            'data-desc': esito.desc.replace('&#160;', ''),
                            'data-info': esito.info
                        }).html(esito.tipo);
                        $tdArr.eq(0).html((new Date(esito['dataE'])).format('dd/mm/yyyy'));
                        $tdArr.eq(1).html($('<div class="spTdDesc"></div>').append($descBText));
                        $tdArr.eq(2).html(esito.stato.replace('&#160;', ''));
                        $tdArr.eq(3).html(formatEuro(esito.importo, true) + ' &euro;');
                        $tbody.append($tr);
                    });
                } else {
                    $boxErr.hide();
                    $boxesito.show();
                    $bxsliderDispoBox.hide();
                    $spBar.hide();
                }
                $(window).trigger("resize");
            }
            isLoadingDispoData = false;
            completeMovDispo();
            if (debugLoading) {
                printLog('*** updateTabDispo: hideLoadingOnPage dispoBox');
            }
        };
        updateDispoDetail = function (data, textStatus, jqXHR, id) {
            var $link,
                dettDesc = '',
                dettLink,
                testData = isNewJsonCallFailed(data);
            if (testData[0]) {
                printFailureData(jqXHR, textStatus, testData[1]);
            } else {
                $link = $('#linkDispoDetail' + id);
                dettLink = $link.attr('data-link');
                $.each(data.dettaglio, function (key, value) {
                    dettDesc += key + ': ' + value + '<br/>';
                });
                if (dettLink !== '') {
                    dettDesc += '<a href="' + dettLink + '">Dettagli</a>';
                }
                dispoDetailArr[id] = dettDesc;
                addDispoDetail(id, dettDesc);
            }
            isLoadingDispoData = false;
        };
        addMovDetail = function (id, dettDesc) {
            $('#linkMovDetail' + id).closest('tr').after($('<tr>', {
                id: 'movDetail' + id,
                'class': 'detail'
            }).append($('<td>', {
                'colspan': 3
            }).html(dettDesc)).hide());
        };
        addDispoDetail = function (id, dettDesc) {
            $('#linkDispoDetail' + id).closest('tr').addClass('master').after($('<tr>', {
                id: 'dispoDetail' + id,
                'class': 'detail'
            }).append($('<td>', {
                'colspan': 4
            }).html(dettDesc)));
        };
        showDetail = function (detailId) {
            var $detail = $(detailId);
            $detail.show();
            $detail.prevAll('tr').first().addClass('master');
        };
        hideDetail = function (detailId) {
            var $detail = $(detailId);
            $detail.hide();
            $detail.prevAll('tr').first().removeClass('master');
        };
        //endregion

        //region OGGETTO RESTITUITO
        return {
            // Proprieta'
            'fadeDuration': fadeDuration,
            'slideDuration': slideDuration,
            'rubricaIban': rubricaIban,
            'rubricaCarte': rubricaCarte,
            'rubricaCell': rubricaCell,
            'rubricaTesATM': rubricaTesATM,
            'isApp': isApp,
            // Metodi
            'setLinks': setLinks,
            'init': init,
            'hasWebankIban': hasWebankIban,
            'getCarousel': getCarousel,
            'changePage': changePage,
            'goToPrevPage': goToPrevPage,
            'goToNextPage': goToNextPage,
            'goToAuthPage': goToAuthPage,
            'goToRetryPage': goToRetryPage,
            'resetCarousel': resetCarousel,
            'saldoExpand': saldoExpand,
            'saldoCollapse': saldoCollapse,
            'showMsgOnPage': showMsgOnPage,
            'hideMsgOnPage': hideMsgOnPage,
            'showLoadingOnPage': showLoadingOnPage,
            'hideLoadingOnPage': hideLoadingOnPage,
            'showCallError': showCallError,
            'loadTagliTel': loadTagliTel,
            'sendSMS': sendSMS,
            'tagliTelRequest': tagliTelRequest,
            'checkBonificoRequest': checkBonificoRequest,
            'checkCartaRequest': checkCartaRequest,
            'checkCellulareRequest': checkCellulareRequest,
            'checkAtmRequest': checkAtmRequest,
            'checkBollettino': checkBollettino,
            'sendBonifico': sendBonifico,
            'sendPrepagata': sendPrepagata,
            'sendCellulare': sendCellulare,
            'sendBollettino': sendBollettino,
            'sendBollo': sendBollo,
            'sendAtm': sendAtm,
            'sendMavRav': sendMavRav,
            'loadContatto': loadContatto,
            'addContatto': addContatto,
            'deleteContatto': deleteContatto,
            'updateDettBonifico': updateDettBonifico,
            'updateDettPrepagata': updateDettPrepagata,
            'updateDettCellulare': updateDettCellulare,
            'updateDettBollettino': updateDettBollettino,
            'updateDettAtm': updateDettAtm,
            'updateBollettino': updateBollettino,
            'updateBollettinoBis': updateBollettinoBis,
            'resetForms': resetForms,
            'getPrimaDataBollettino': getPrimaDataBollettino,
            'getPrimaDataMavRav': getPrimaDataMavRav,
            'getBonificoDate': getBonificoDate,
            'getContoSelezionato': getContoSelezionato,
            'getContattoInfo': getContattoInfo,
            'setContatto': setContatto,
            'getIBAN': getIBAN,
            'getInputPrepagata': getInputPrepagata,
            'getOpSettings': getOpSettings,
            'checkTagli': checkTagli,
            'checkMavRav': checkMavRav,
            'updateDettMavRav': updateDettMavRav,
            'updateDettBollo': updateDettBollo,
            'checkBolloCommissioni': checkBolloCommissioni,
            'showWarningQuestion': showWarningQuestion,
            'getStaticLink': getStaticLink,
            'updateBollo': updateBollo,
            'saChangePush': saChangePush,
            'saVerifyPush': saVerifyPush,
            'saStartPolling': saStartPolling,
            'saStopPolling': saStopPolling,
            'showPollingSlide': showPollingSlide,
            'hidePollingSlide': hidePollingSlide,
            'closeContatti': closeContatti,
            'collapseAccordion': collapseAccordion
        };
        //endregion
    }()),
    tabber = function (idTabber) {
        "use strict";

        //region DICHIARAZIONE VARIABILI
        var $tabber = $('#' + idTabber),
            $spTabArr = $tabber.find('.spTab li'),
            $tabCont = $tabber.find('.tabCont');
        //endregion

        //region GESTIONE TAB
        $spTabArr.each(function (index) {
            $(this).bind('click', function () {
                $spTabArr.removeClass('tabAttivo');
                $(this).addClass('tabAttivo');
                $tabCont.find('.spBox').hide().eq(index).show();
            });
        });
        //endregion
    };

$(function () {
    "use strict";

    //region DICHIARAZIONE VARIABILI
    var // properties
        cellTimeout = null,
        $inputBen = $('#inputBen').comboboxPlus({ appendId: 'Input' }),
        $inputBenPrepagata = $('#inputBenPrepagata').comboboxPlus({ appendId: 'Input' }),
        $inputBenCellulare = $('#inputBenCellulare').comboboxPlus({ appendId: 'Input' }),
        $inputBenAtm = $('#inputBenAtm').comboboxPlus({ appendId: 'Input' }),
        rubricaWarning = '<strong>Aggiorna l\'Iban dei conti correnti Webank salvati in rubrica.</strong><br><br>' + 'Vai alla pagina &laquo;rubrica&raquo;: puoi aggiornare <strong>automaticamente</strong> gli ' + '<strong>Iban</strong> dei contatti con conto corrente Webank con quello <strong>nuovo</strong> da utilizzare.<br><br>',
        // Metodi
        handleClick = function (event, element) {
            event.stopPropagation();
            return $(element).trigger('blur');
        };
    //endregion

    //region SELECT RUBRICHE
    $inputBen.comboboxPlus('onChange', function () {
        var $el = $(this),
            $option, val,
            nazione, iban,
            $inputIBAN = $('#inputIBAN');

        if ($el.comboboxPlus('isSelected')) {
            $option = $('#inputBen option:selected');
            val = $option.val();
            nazione = $option.attr('data-nazione');
            iban = val.split('|')[1];
            $('#inputNazione').val(nazione);
            $inputIBAN.val('').hide();
            $('#outputIBAN').html(iban).show();
            $('#salvaContatto').prop('checked', false).prop('disabled', true);
        } else {
            if (!$inputIBAN.is(':visible')) {
                $inputIBAN.val('').show();
                $('#outputIBAN').empty().hide();
                $('#inputNazione').val('');
            }
            $('#salvaContatto').prop('disabled', false);
        }
    });
    $inputBenPrepagata.comboboxPlus('onChange', function () {
        var $el = $(this),
            val, valArr, tipo, tipoHTML,
            $inputTypePrepagata = $('#inputTypePrepagata');
        if ($el.comboboxPlus('isSelected')) {
            val = $el.comboboxPlus('getValue');
            valArr = val.split('|');
            tipo = valArr[2];
            tipoHTML = tipo === 'CJEAN' ? 'Carta Je@ns' : 'Carta Kje@ns';
            $inputTypePrepagata.val('').hide();
            $('#outputTypePrepagata').attr('data-tipo', tipo).html(tipoHTML).show();
            $('#boxIntestPrepagata').show();
            $('#outputIntestPrepagata').html(valArr[1]);
            $('#salvaContattoPrepagata').prop('checked', false).prop('disabled', true);
        } else {
            if (!$inputTypePrepagata.is(':visible')) {
                $inputTypePrepagata.val('').show();
                $('#outputTypePrepagata').attr('data-tipo', '').empty().hide();
                $('#boxIntestPrepagata').hide();
                $('#outputIntestPrepagata').empty();
            }
            tipo = $inputTypePrepagata.val();
            $('#salvaContattoPrepagata').prop('disabled', false);
        }
        setImportoPrepagata(tipo);
        setTimeout(function () {
            $(window).resize();
        }, 0);
    });
    $inputBenCellulare.comboboxPlus('onChange', function () {
        var $el = $(this),
            $inputIntestCellulare = $('#inputIntestCellulare'),
            val = $el.comboboxPlus('getValue'),
            valArr;
        $('#inputImportoCellulare').val('0').prop('disabled', true);
        if ($el.comboboxPlus('isSelected')) {
            valArr = val.split('|');
            $inputIntestCellulare.val('').hide();
            $('#outputIntestCellulare').html(valArr[3]).show();
            $('#inputOperCellulare').val(valArr[0]).prop('disabled', true);
            sportello.tagliTelRequest(valArr[0], valArr[1], valArr[2]);
            $('#salvaContattoCellulare').prop('checked', false).prop('disabled', true);
        } else {
            if (!$inputIntestCellulare.is(':visible')) {
                $inputIntestCellulare.val('').show();
                $('#outputIntestCellulare').empty().hide();
                $('#inputNazione').val('');
            }
            $('#inputOperCellulare').val('0').prop('disabled', false);
            $('#salvaContattoCellulare').prop('disabled', false);
        }
    });
    $inputBenAtm.comboboxPlus('onChange', function () {
        var $el = $(this),
            $inputIntestAtm = $('#inputIntestAtm'),
            val = $el.comboboxPlus('getValue'),
            valArr;
        if ($el.comboboxPlus('isSelected')) {
            valArr = val.split('|');
            $inputIntestAtm.val('').hide();
            $('#outputIntestAtm').html(valArr[1]).show();
            $('#salvaContattoAtm').prop('checked', false).prop('disabled', true);
        } else {
            if (!$inputIntestAtm.is(':visible')) {
                $inputIntestAtm.val('').show();
                $('#outputIntestAtm').empty().hide();
            }
            $('#salvaContattoAtm').prop('disabled', false);
        }
    });
    //endregion

    //region CONFIGURATORE
    if (consultare) {
        if (contabiliOK) {
            $('#linkEstrattoContab').removeAttr("href").addClass('disabled').attr('data-tooltip', 'Per modificare la modalit&agrave; di ricezione delle contabili accedi col profilo &quot;Consultare e Disporre&quot;');
        }
    }

    if (librerie) {
        $('#spConfigWrap .icon').click(function () {
            var $spConfig = $('#spConfig');
            if ($spConfig.hasClass('open')) {
                $spConfig.removeClass('open');
            } else {
                $spConfig.addClass('open');
            }
        });
        $('#selectCons').val(datiUtente.cons).change(function () {
            var cons = $(this).val();
            window.location.assign(window.location.href.replace(/(#.*)$/, '').replace(/&cons=[^&]*/, '') + '&cons=' + cons);
        });
        $('#selectAuth').prop('disabled', (datiUtente.auth === false)).val(datiUtente.auth ? datiUtente.auth : 'n').change(function () {
            var auth = $(this).val();
            window.location.assign(window.location.href.replace(/(#.*)$/, '').replace(/&auth=[^&]*/, '') + '&auth=' + auth);
        });
    }
    //endregion

    //region EVENTI PAGE
    $('#accordionOps').on('click', '.msgOnPage .btn', function () {
        $(this).closest('.msgOnPage').remove();
    });
    $('#accordionOps .spBack, #boxContact .spBack').each(function () {
        $(this).click(function (event) {
            var $el = handleClick(event, this);
            if (!$el.hasClass('disabled')) {
                sportello.goToPrevPage($el.closest('.carouselPlus'));
            }
            return false;
        });
    });
    $('#accordionOps .spReset, #boxContact .spReset').click(function (event) {
        var $el = handleClick(event, this);
        if (!$el.hasClass('disabled')) {
            sportello.resetCarousel($el.closest('.carouselPlus'), true, false);
        }
        return false;
    });

    $('#bonificoPage1').on('opened', function (event) {
        var $el = handleClick(event, this),
            id = $el.attr('id');
        if (id === 'bonificoPage1') {
            if (sportello.hasWebankIban()) {
                sportello.showWarningQuestion({
                    wrapper: $el,
                    question: rubricaWarning,
                    kobutton: 'Aggiorna in seguito',
                    okbutton: 'Vai alla rubrica',
                    okfunction: function () {
                        location.assign(sportello.getStaticLink('linkRubrica'));
                    }
                });
            }
        }
    });
    $('#bollettinoPage1Bis').on('opened', function () {
        sportello.updateBollettinoBis();
    });

    // Contatti veloci
    $('.bonificoContattoPage1').on('opened', function (event) {
        var $page = handleClick(event, this);
        if (sportello.hasWebankIban()) {
            sportello.showWarningQuestion({
                wrapper: $page.closest('.spContactBox'),
                question: rubricaWarning,
                kobutton: 'Aggiorna in seguito',
                okbutton: 'Vai alla rubrica',
                okfunction: function () {
                    location.assign(sportello.getStaticLink('linkRubrica'));
                }
            });
        }
        return false;
    });
    $('#slideDeleteContatto').on('opening', function () {
        $('#spContactDel').show().parent().find('.spContactData:first').find('.spMinus:first').hide();
    })
        .on('closed', function () {
            $('#spContactDel').hide().parent().find('.spContactData:first').find('.spMinus:first').show();
        });
    $('#slideSetContatto').on('opened', function () {
        $('#selectSetIbanContatto').find('option.preferito').prop('selected', true);
        $('#selectSetCellContatto').find('option.preferito').prop('selected', true);
        $('#selectSetPrepagataContatto').find('option.preferito').prop('selected', true);
    }).on('closed', function () {
        $('#slideAddContatto').show().closest('.spCover').show();
        $('#selectAddContatto').prop('selectedIndex', 0);
    });
    //endregion

    //region EVENTI PULSANTI
    var opPrefixes = ['#bonifico', '#prepagata', '#cellulare', '#bollettino', '#bollo', '#atm', '#mavrav'];

    // OVERLAY TITOLARE EFFETTIVO
    var $titolareEffettivo = $('#titolareEffettivo');

    $titolareEffettivo.on('hidden.bs.modal', function () {
        $(window).resize();
    });

    $('#titolareEffettivoSubmit').click(function () {
        var isContatto = $(this).closest('.modal').attr('data-contatto') === 'true';
        sportello.checkBonificoRequest(isContatto);
    });

    function checkForm(prefix, isContatto) {
        var formOK;
        switch (prefix) {
            case '#bonifico':
                formOK = check.bonifico(isContatto);
                break;
            case '#prepagata':
                formOK = check.prepagata(isContatto);
                break;
            case '#cellulare':
                formOK = check.cellulare(isContatto);
                break;
            case '#bollettino':
                formOK = check.bollettinoBis();
                break;
            case "#bollo":
                formOK = check.bollo();
                break;
            case "#atm":
                formOK = check.atmBis();
                break;
            case "#mavrav":
                formOK = check.mavrav();
                break;
        }
        return formOK;
    }

    $.each(opPrefixes, function (index, prefix) {
        var settings, $submitBtn;

        settings = sportello.getOpSettings(prefix);
        $submitBtn = $(prefix + 'Page1' + settings.suffix + 'Submit, ' + prefix + 'Page3 .spRetry');

        $submitBtn.click(function (event) {
            var $btn = handleClick(event, this);

            if (checkForm(prefix, false)) {
                if ($btn.hasClass('spRetry')) {
                    sportello.goToRetryPage(sportello.getCarousel(prefix, false));
                }

                if (prefix === '#bonifico') {
                    if (!$btn.hasClass('spRetry') && check.bonificoTitolare(false)) {
                        $titolareEffettivo.attr('data-contatto', 'false').modal('show');
                    } else {
                        sportello.checkBonificoRequest(false);
                    }
                } else if (prefix === '#prepagata') {
                    sportello.checkCartaRequest(false);
                } else if (prefix === '#cellulare') {
                    sportello.checkCellulareRequest(false);
                } else if (prefix === '#atm') {
                    sportello.checkAtmRequest();
                } else if (prefix === '#bollettino') {
                    sportello.checkBollettino();
                } else if (prefix === '#bollo') {
                    sportello.checkBolloCommissioni();
                } else if (prefix === '#mavrav') {
                    sportello.checkMavRav();
                } else {
                    sportello.goToAuthPage(prefix, settings.otpType, settings.pollingType, false);
                }
            }
        });

        $(prefix + 'Page3' + settings.suffix + ' .spBack').click(function (event) {
            handleClick(event, this);
            sportello.goToAuthPage(prefix, settings.otpType, settings.pollingType, false);
        });

        // SMASH SMS
        $(prefix + 'Page2SubmitSmashSMS').click(function (event) {
            handleClick(event, this);
            sportello.sendSMS(prefix, false);
            return false;
        });

        // SMASH OTP
        $(prefix + 'Page2SubmitSmash').click(function (event) {
            handleClick(event, this);
            if (check.smash(prefix, false)) {
                settings.sendFunc('Smash', false);
            }
            return false;
        });

        // STRONG
        $(prefix + 'Page2SubmitToken, ' + prefix + 'Page2SubmitAppKO').click(function (event) {
            var $btn = handleClick(event, this);
            if (check.token(prefix)) {
                if ($btn.attr('id') === prefix.substr(1) + 'Page2SubmitAppKO') {
                    sportello.saVerifyPush(prefix, settings, false);
                } else {
                    settings.sendFunc('Token', false);
                }
            }
            return false;
        });
        $(prefix + 'Page2SubmitChange').click(function (event) {
            handleClick(event, this);
            sportello.saChangePush(prefix, settings, false);
            return false;
        });
        $(prefix + 'Page2BackToAppOK').click(function (event) {
            handleClick(event, this);
            sportello.saStartPolling(settings.pollingType, false);
            sportello.showPollingSlide(settings.pollingType, false);
        });
        $(prefix + 'Page2').on('closing', function () {
            sportello.saStopPolling();
        });
    });

    // Operazioni veloci - Bollettino postale
    $('#bollettinoPage1Submit').click(function (event) {
        handleClick(event, this);
        var oggi;
        if (check.bollettino()) {
            oggi = new Date();
            if (oggi.format('dd/mm/yyyy') === $('#datepickerBollettino').val()) {
                sportello.showWarningQuestion({
                    wrapper: $('#bollettinoPage1'),
                    question: "Bollettino non annullabile.<br>Controlla bene i dati.",
                    okbutton: "Prosegui",
                    okfunction: function () {
                        sportello.goToNextPage($('#bollettinoCarousel'));
                    }
                });
            } else {
                sportello.goToNextPage($('#bollettinoCarousel'));
            }
        }
        return false;
    });
    $('#atmPage1Submit').click(function (event) {
        handleClick(event, this);
        if (check.atm()) {
            sportello.checkTagli();
        }
        return false;
    });

    // CONTATTI VELOCI
    var $personOpsBoxArr = $('.spPersonOpsBox'),
        $wrapArr = $('.spPersonWrap'),
        isMoving = false;

    $wrapArr.each(function () {
        var $wrap = $(this),
            $opBtnArr = $wrap.find('.spPersonOpBtn'),
            $opBoxArr = $wrap.find('.spPersonOpBox'),
            $opIconArr = $wrap.find('.spPersonOpsIcon .icon'),
            $opsBox = $wrap.find('.spPersonOpsBox');

        $opBtnArr.click(function () {
            var $opBtn = $(this),
                index, $carousel;
            if (!$opBtn.closest('.spPersonOp').hasClass('disabled')) {
                $personOpsBoxArr.removeClass('open');
                index = $opBtnArr.index($opBtn);
                $opBoxArr.eq(index).addClass('active');
                $carousel = $opBoxArr.filter('.active').find('.carouselPlus').carouselPlus();
                sportello.setContatto($carousel.find('.carouselPlusPage:first'));
                sportello.resetCarousel($carousel, true, true);
                sportello.collapseAccordion();
                $opIconArr.hide().eq(index).show();
                $opsBox.addClass('open');
            }
        });
        $wrap.find('.spPersonOpsClose').click(function () {
            sportello.resetCarousel($(this).closest('.spPersonOpsBox').find('.spPersonOpBox.active .carouselPlus'), false, true);
            $opsBox.removeClass('open');
            $opBoxArr.removeClass('active');
            isMoving = false;
        });
        $wrap.find('.icon-minus').attr('title', 'Elimina').click(function () {
            sportello.hideMsgOnPage($wrapArr);
            sportello.showMsgOnPage({
                wrapper: $wrap,
                msgText: 'Vuoi eliminare questo contatto dai Veloci ?',
                okbutton: 'Procedi',
                okfunction: function () {
                    sportello.hideMsgOnPage($wrap);
                    sportello.setContatto($wrap);
                    sportello.deleteContatto();
                },
                kobutton: 'Annulla',
                closeable: true,
                boxClass: 'attenzione',
                iscontatto: true
            });
        });
        $wrap.on('click', '.btnQuestionAnnulla', function () {
            sportello.hideMsgOnPage($wrap);
        });
    });

    // Contatti - Aggiungi
    $('#proseguiAddContatto').click(function (event) {
        handleClick(event, this);
        if (check.addContatto()) {
            sportello.closeContatti();
            sportello.collapseAccordion();
            sportello.loadContatto($('#selectAddContatto').val());
        }
    });
    $('#proseguiSetContatto').click(function (event) {
        handleClick(event, this);
        sportello.addContatto();
    });

    $.each(opPrefixes.slice(0, 3), function (index, prefix) {
        var settings, $submitBtn,
            classPrefix = getClassPrefix(prefix);

        settings = sportello.getOpSettings(prefix);
        $submitBtn = $(classPrefix + 'Page1' + settings.suffix + 'Submit, ' + classPrefix + 'Page3 .spRetry');

        $submitBtn.click(function (event) {
            var $btn = handleClick(event, this),
                timeout = 250;

            if (checkForm(prefix, true) && !isMoving) {
                isMoving = true;

                if ($btn.hasClass('spRetry')) {
                    timeout += 250;
                    sportello.goToRetryPage(sportello.getCarousel(prefix, true));
                }

                if (prefix === '#bonifico') {
                    if (!$btn.hasClass('spRetry') && check.bonificoTitolare(true)) {
                        $titolareEffettivo.attr('data-contatto', 'true').modal('show');
                    } else {
                        sportello.checkBonificoRequest(true);
                    }
                } else if (prefix === '#prepagata') {
                    sportello.checkCartaRequest(true);
                } else if (prefix === '#cellulare') {
                    sportello.checkCellulareRequest(true);
                } else {
                    sportello.goToAuthPage(prefix, settings.otpType, settings.pollingType, true);
                }
                setTimeout(function () {
                    isMoving = false;
                }, timeout);
            }
        });

        $(classPrefix + 'Page3' + settings.suffix + ' .spBack').click(function (event) {
            handleClick(event, this);
            sportello.goToAuthPage(prefix, settings.otpType, settings.pollingType, true);
        });

        // SMASH SMS
        $(classPrefix + 'Page2SubmitSmashSMS').click(function (event) {
            handleClick(event, this);
            sportello.sendSMS(prefix, true);
            return false;
        });

        // SMASH OTP
        $(classPrefix + 'Page2SubmitSmash').click(function (event) {
            handleClick(event, this);
            if (check.smash(prefix, true)) {
                settings.sendFunc('Smash', true);
            }
            return false;
        });

        // STRONG
        $(classPrefix + 'Page2SubmitToken, ' + classPrefix + 'Page2SubmitAppKO').click(function (event) {
            var $btn = handleClick(event, this);
            if (check.token(prefix, true)) {
                if ($btn.hasClass(classPrefix.substr(1) + 'Page2SubmitAppKO')) {
                    sportello.saVerifyPush(prefix, settings, true);
                } else {
                    settings.sendFunc('Token', true);
                }
            }
            return false;
        });
        $(classPrefix + 'Page2SubmitChange').click(function (event) {
            handleClick(event, this);
            sportello.saChangePush(prefix, settings, true);
            return false;
        });
        $(classPrefix + 'Page2BackToAppOK').click(function (event) {
            handleClick(event, this);
            sportello.saStartPolling(settings.pollingType, true);
            sportello.showPollingSlide(settings.pollingType, true);
        });
        $(classPrefix + 'Page2').on('closing', function () {
            sportello.saStopPolling();
        });
    });
    //endregion

    //region ALTRI EVENTI
    $('#inputImporto, #inputImportoPrepagata, #inputImportoBollettino, #inputImportoGiro' +
        ', .inputImportoContatto, .inputImportoCjContatto, #inputImportoMavrav').keypress(cleanImport);

    function setImportoPrepagata(tipo) {
        var $inputImportoPrepagata = $('#inputImportoPrepagata');
        if (tipo !== '') {
            $inputImportoPrepagata.attr('disabled', false);
        } else {
            $inputImportoPrepagata.attr('disabled', true);
        }
    }

    $('#inputTypePrepagata').change(function () {
        setImportoPrepagata($(this).val());
    });
    $('#inputOperCellulare').change(function () {
        sportello.loadTagliTel();
    });
    $('#inputNuovoBenCell').keyup(function () {
        var $el = $(this),
            val = $el.val();
        if ((/^\d{9,}$/).test(val)) {
            if (!cellTimeout) {
                cellTimeout = setTimeout(function () {
                    cellTimeout = null;
                    sportello.loadTagliTel();
                }, 1000);
            }
        }
    });
    $('#inputBollettinoPre').bind("click", function () {
        sportello.updateBollettino();
        $('#boxBollettino, #boxBollettinoPre').show();
        $('#boxBollettinoWhite').hide();
        $(window).trigger('resize');
    });
    $('#inputBollettinoWhite').bind("click", function () {
        sportello.updateBollettino();
        $('#boxBollettino, #boxBollettinoWhite').show();
        $('#boxBollettinoPre').hide();
        $(window).trigger('resize');
    });
    $('input:radio[name=inputTipoBollettino]').bind("click", function () {
        var $inputBollettino = $('input:radio[name=inputTipoBollettino]');
        if ($(this).is(':checked')) {
            $inputBollettino.closest('label').removeClass('active');
            $(this).closest('label').addClass('active');
        }
    });
    $('#selectSetIbanContatto, #selectSetCellContatto, #selectSetPrepagataContatto').change(function () {
        var $el = $(this),
            tipo;
        if ($el.is(':visible')) {
            tipo = $el.attr('id').replace('selectSet', '').replace('Contatto', '');
            if ($el.find('option.preferito').prop('selected')) {
                $('#imgPreferito' + tipo + 'Contatto').attr('src', getPathImagesFe() + 'ico/ico1gr_preferito.gif');
            } else {
                $('#imgPreferito' + tipo + 'Contatto').attr('src', getPathImagesFe() + 'ico/ico1gr_preferitoOff.gif');
            }
        }
    });
    $('#buttonBox input').keypress(function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            return false;
        }
    });
    $('.bonificoContattoPage1 .input-group-addon').click(function (event) {
        var $icon = handleClick(event, this).find('.icon-star_fill');
        if ($icon.hasClass('disabled')) {
            $icon.removeClass('disabled');
        } else {
            $icon.addClass('disabled');
        }
        return false;
    });
    //endregion

    //region INIZIALIZZAZIONE WIDGET
    /* Disabilitazione temporanea inserimento carta prepagata */
    $('#inputBenPrepagataInput').prop('readonly', true);

    // ATM
    $('#inputBenAtmInput').attr('maxlength', '16');

    // TAB
    tabber('movDispoTab');

    // CAROUSEL
    // Inizializzo i carousel
    // INIZIO MODIFICA TEMPORANEA PER TOGLIERE FUNZIONI ATM E BOLLO AUTO
    //$("#funzAtm").parent(".span6").remove();
    //$("#funzBollo").parent(".span6").removeClass("flRight");
    //$("#buttonContent .item").eq(1).remove();
    // FINE MODIFICA TEMPORANEA PER TOGLIERE FUNZIONI ATM E BOLLO AUTO
    // INIZIO MODIFICA TEMPORANEA PER TOGLIERE FUNZIONI MAV e RAV
    //$("#funzMavrav").parent(".span6").remove();
    $('#accordionOps .collapse').on('show.bs.collapse', function () {
        var $carousel = $(this).find('.carouselPlus');
        sportello.resetCarousel($carousel, true, false);
        sportello.closeContatti();
    }).on('shown.bs.collapse', function () {
        setTimeout(function () {
            $(window).resize();
        }, 10);
    });
    //endregion
});
