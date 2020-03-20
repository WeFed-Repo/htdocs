/*global $, jqAJAXCall, librerie, pathLibrerie, pathMovimenti, pathSportello, cgi_script, formatEuro, resetHasErrors, resetForm, showMsgOnPage, printLog, cleanImport,
        check, resetPin2, formattaNumeriOutput, urllinkEstrattoContab, consultare, contabiliOK,
        datiUtente, isWebank, getDateFromString, isResp, appendDatePickerIcon,
        caricaDatiFailure, formattaNumero, formattaTruncNumero */

var sportello = (function () {
        "use strict";

        //region DICHIARAZIONI DI TIPI
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
         * @property {string} anagrafica.flg_poste
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
            //endregion

            // region DICHIARAZIONE VARIABILI
            // Metodi
        var init, initMovDispo, isLibrerie, handleClick, hasWebankIban, load,
            getBonificoDate, isCallFailed, isJsonCallFailed, isXmlCallFailed, showCallError, showWarningQuestion,
            loadDataFailure, testErrLogin, getPageInfo,
            loadDatiIniziali, loadRubriche, loadNazioni, loadMov, loadMovDetail, loadDispo, loadDispoDetail, loadTagliTel,
            loadAuto, loadMovDispo, loadContatti, loadSaldi,
            initDatiIniziali, initDatePickers, initDatePickers2, initDatePickersMavrav, updateAuthCode, updateNazioni,
            updateRubriche, updateTabMov, updateMovDetail, updateTabDispo, updateDispoDetail, completeMovDispo,
            updateDettBonifico, updateDettPrepagata, updateDettCellulare, updateDettBollettino, updateSogliaCarta,
            updateContatti, updateAtm, updateDettAtm, updateBollo, updateDettMavrav,
            addMovDetail, addDispoDetail, showDetail, hideDetail, changePage, goToPrevPage, goToNextPage, goToAuthPage,
            resetCarousel,
            getBen, getInputPrepagata, getBenCell, getNumCell, getInputCell, getContoSelezionato, getPrimaDataBollettino,
            getPrimaDataMavrav, getContattoInfo, getInputAtm, getInputAtmBis, getInputMavrav, getIBAN,
            getDataAccredito, getImpBollo, isBolloPresaVisione, pollingSlideId, pollingSlideClass, resetForms,
            setSubmitType,
            setAuthParameters,
            setContatto, loadDatePickersMavrav, checkDateBonifico, getStaticLink, goToOkPage,
            checkDateMavrav, getMaxImpBonifico, getMaxImpCarte, getIsRespOK, updateTagliTel, updateBollettino,
            updateBollettinoBis, updateSaldi, resetSemVars,
            otpRequest, tagliTelRequest, checkCartaRequest, sendBonifico, sendPrepagata, sendCellulare, sendBollettino,
            sendMavrav, checkBollettino, sendAtm, updateDettBollo, checkBolloCommissioni, sendBollo,
            otpOK, tagliTelOK, checkCartaOK, bonificoOK, prepagataOK, cellulareOK, bollettinoOK, checkBollettinoOK,
            checkTagli, checkTagliOK, atmOK, bolloOK, checkMavrav, checkMavravOK, mavravOK,
            deleteContatto, addContatto, loadContatto, sendImportoPreferito, sendImportoPreferitoOK,
            deleteContattoOK, addContattoOK, updateContatto, updateAuthPage, collapseAccordion, closeContatti,
            /**
             * @property {Bollo} dettBollo
             */
            dettBollo,
            saldoExpand, saldoCollapse, isMissingData,
            loadListaConti, loadContentCT, loadContentCC, loadContentCD, loadContentLV, loadContentCDER,
            updateConti, updateDashboardData, updateContentCC, updateContentCD, updateContentLV, updateContentCDER,
            saCreatePush, saCheckPush, saStartPolling, saStopPolling, pushPoll, saPolling, currAttempt = 0,
            saIsPolling = false,
            showPollingSlide, hidePollingSlide, setPollingSlide,
            showMsgOnPage, hideMsgOnPage, showLoadingOnPage, hideLoadingOnPage,
            // Proprieta'
            ajaxCalling, debugLoading = false,
            isRespOK, webankIban = false,
            defaultError = 'Si sono verificati dei problemi tecnici',
            intestCJ, isStrongAuth, isApp,
            requestIdInPage, authCode1, authCode2, authCodeNum, contoSelezionato, contattoSelezionato, $contattoPage,
            ctrlOTP, primaDataBollettino, primaDataMavrav, bolloDatiTrans, bolloForzaAddebito = false,
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
            bolloPresaVisione = false,
            isMovDispoOK = false,
            bonificoDateArr = [],
            mavravDateArr = [],
            strongAuth = false,
            strongAuthData = {},
            bollIntestatario = "",
            maxImpBonifico, maxImpCarte, limitiCarteArr = {},
            rubricheOK = {},
            /**
             * @property {Conto[]} conti
             */
            conti = [],
            dettaglioSaldiConti = [],
            dashboardData = {
                cc: null,
                cd: null,
                ct: null,
                cder: null,
                contoCorrente: null,
                contoDeposito: null,
                lineeVincolate: null,
                contoTecnico: null,
                contoDerivati: null,
                contoEvo: null,
                dataDisposizione: null,
                tipoRapporto: null,
                isDeposito: null,
                carta: null,
                estero: null,
                promo: null,
                hasNonSvinc: null,
                hasEvo: null,
                hasGraficoEvo: null,
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
                    this.contoEvo = null;
                    this.dataDisposizione = null;
                    this.tipoRapporto = null;
                    this.carta = null;
                    this.estero = null;
                    this.promo = null;
                    this.hasNonSvinc = null;
                    this.hasEvo = null;
                    this.hasGraficoEvo = null;
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

                     //-- BPM --//
                     *** 7: C/C +EVO
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
                        } else if (this.hasEvo) {
                            this.tipoRapporto = 7; //*** C/C +EVO ***
                        } else {
                            this.tipoRapporto = 4; //*** C/C ***
                        }
                    } else if (!isMissingData(this.cder)) {
                        this.tipoRapporto = 5; //*** C/T +DER ***
                    } else {
                        this.tipoRapporto = 6; //*** C/T ***
                    }
                }
            },
            dynamicLinks = {
                "linkMovimenti": cgi_script + "/wbOnetoone/2l/action/banking/WsRiaMovements.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&OBSKEY3=nav_priv_wbx_movimenti&accountId=",
                "linkModContatto": cgi_script + "/wbOnetoone/2l/action/banking/WsRubricaModify.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&id=",
                "linkRicevutaatm": "/pri/banking/WsAtmMiRechargeRicevuta.do",
                "linkPdfBollo": cgi_script + "/banking/vehicleTaxPayment/WsPaymentVehicleTaxQuietanza.do"
            },
            staticLinks = {
                "linkDiposizioni": cgi_script + "/wbOnetoone/2l/action/banking/WsDispositionsState0.action?useXml=true&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_esito_disp_on_line_new&OBSKEY3=nav_priv_wbx_esito_disp_on_line_new",
                "linkModLimite": cgi_script + "/wbOnetoone/3l/do/banking/WsTransChangeMax.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonif_italia&OBSKEY3=nav_priv_wbx_bonif_singolo&OBSCNT=&BV_UseBVCookie=Yes",
                "linkAccredStipendio": cgi_script + "/wbOnetoone/2l/do/banking/WsSalaryCredit0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_accredito_stip",
                "linkRubrica": cgi_script + "/wbOnetoone/2l/action/banking/WsGestioneRubrica.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha"
            };
        //endregion1

        //region INIT, METODI UTILI1
        init = function () {
            resetSemVars();
            isRespOK = (typeof isResp !== 'undefined' && isResp);
            initMovDispo();
            if (!isRespOK) {
                load();
            } else {
                loadListaConti();
            }
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
                    if (typeof movDetailArr[detailId] === 'undefined') {
                        loadMovDetail(detailId);
                    } else {
                        showDetail('#movDetail' + detailId);
                    }
                }
            });
            $('#dispoContent table').on('click', '.linkDetail a', function (event) {
                var $link = handleClick(event, this),
                    detailId = $link.attr('data-id'),
                    detailInfo = $link.attr('data-info'),
                    detailDesc = $link.attr('data-desc'),
                    $tr = handleClick(event, this).closest('tr');
                if ($tr.hasClass('master')) {
                    hideDetail('#dispoDetail' + detailId);
                } else {
                    if (typeof dispoDetailArr[detailId] === 'undefined') {
                        if (detailInfo !== '') {
                            loadDispoDetail(detailId, detailInfo);
                        } else {
                            addMovDetail(detailId, detailDesc);
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
            if (!isRespOK) {
                staticLinks.linkEstrattoContab = cgi_script + urllinkEstrattoContab;
                staticLinks.linkCoordinate = cgi_script + "/wbOnetoone/2l/action/banking/WsCoordinate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_coordin_bancarie";
                staticLinks.linkAlert = cgi_script + "/wbOnetoone/2l/do/wbOnetoone/sms/alertAttivi.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sms_elenco_alert";
                isMovDispoOK = true;
                $('#movDispoExp').show();
            } else {
                $('#linkMovimenti, #linkDiposizioni, #dispoDetailLink').hide();
                $('#movDispoBtn').click(function () {
                    $(this).hide();
                    $('#movDispoExp').slideDown(500, function () {
                        isMovDispoOK = true;
                        loadMovDispo();
                    });
                }).show();
            }
            // Imposto i link
            $.each(staticLinks, function (key, value) {
                var $el = $('#' + key);
                if ($el.length) {
                    $el.attr('href', value + "&cf" + Math.random());
                }
            });
            requestIdInPage = $('#requestIdInPage').val();
            loadDatiIniziali();
            loadNazioni();
            loadRubriche();
            if (!isRespOK) {
                loadContatti();
            }
            // Loading Operazioni veloci
            // hideLoadingOnPage("#buttonBox");
        };
        isLibrerie = function () {
            return (typeof librerie !== 'undefined' && librerie);
        };
        handleClick = function (event, $element) {
            event.stopPropagation();
            return $($element).trigger('blur');
        };
        checkDateBonifico = function (date) {
            return [($.inArray(date.format('dd/mm/yyyy'), bonificoDateArr) > -1), '', ''];
        };
        checkDateMavrav = function (date) {
            return [($.inArray(date.format('dd/mm/yyyy'), mavravDateArr) > -1), '', ''];
        };
        getIsRespOK = function () {
            return isRespOK;
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
        getMaxImpBonifico = function () {
            return maxImpBonifico;
        };
        getMaxImpCarte = function () {
            return maxImpCarte;
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
        getPrimaDataMavrav = function () {
            return primaDataMavrav;
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
        hasWebankIban = function () {
            return webankIban;
        };
        isBolloPresaVisione = function () {
            return bolloPresaVisione;
        };
        isMissingData = function (obj) {
            return (typeof obj === 'undefined' || obj === null || ($.type(obj) === "string" && obj === '*#*ND'));
        };
        isStrongAuth = function () {
            return strongAuth;
        };
        isApp = function () {
            return (strongAuth && strongAuthData.type === "A");
        };
        isCallFailed = function (data) {
            return (data === null || (typeof data.errore !== 'undefined' && data.errore !== ''));
        };
        /**
         * @param data
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param testValuesArr
         * @param alertCode
         * @returns {*[]}
         */
        isJsonCallFailed = function (data, testValuesArr, alertCode) {
            var failed = (data === null),
                errMsg = defaultError,
                isAlertCode = false,
                value;
            if (!failed) {
                value = data.esito.toLowerCase();
                if (typeof testValuesArr === 'undefined') {
                    testValuesArr = ['ok'];
                } else {
                    testValuesArr.push('ok');
                }
                failed = ($.inArray(value, testValuesArr) === -1);
                if (failed && $.inArray(value, ['ko_alert', 'ko_back', 'redirlogin', 'ko_back', 'ko_warn']) !== -1) {
                    errMsg = data.messaggio;
                }
                isAlertCode = (failed && value === 'ko_alert' && data.force === alertCode);
                // Controlla se è stato passato un nuovo pin32
                if (typeof data.stateUpdate !== 'undefined' && typeof data.stateUpdate.nextAuthCode !== 'undefined') {
                    // Aggiorna il pin32
                    updateAuthCode(data.stateUpdate.nextAuthCode, true);
                }
            }
            return [failed, errMsg, isAlertCode];
        };
        isXmlCallFailed = function (data, testValuesArr, alertCode) {
            var failed = (data === null),
                $data, $xmlNode, value, errMsg = defaultError,
                isAlertCode = false;
            if (!failed) {
                $data = $(data);
                $xmlNode = $data;
                failed = !$xmlNode.length;
                if (!failed) {
                    $xmlNode = $xmlNode.find('info esito:first');
                    failed = !$xmlNode.length;
                    if (!failed) {
                        value = $xmlNode.attr('val').toLowerCase();
                        if (typeof testValuesArr === 'undefined') {
                            testValuesArr = ['ok'];
                        } else {
                            testValuesArr.push('ok');
                        }
                        failed = ($.inArray(value, testValuesArr) === -1);
                        if (failed && $.inArray(value, ['ko_alert', 'ko_back', 'redirlogin', 'ko_back', 'ko_warn']) !== -1) {
                            errMsg = $xmlNode.closest('info').find('messaggio').attr('val');
                        }
                        isAlertCode = (failed && value === 'ko_alert' && errMsg.substr(0, 4) === alertCode);
                    }
                    $xmlNode = $data.find('nextAuthCode:first');
                    // Controlla se è stato passato un nuovo pin32
                    if ($xmlNode.length) {
                        // Aggiorna il pin32
                        updateAuthCode($xmlNode, false);
                    }
                }
            }
            return [failed, errMsg, isAlertCode];
        };
        testErrLogin = function (jqXHR) {
            if ((/sessione scaduta/i).test(jqXHR.responseText)) {
                location.href = '/';
            }
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
                    koButtonHTML = '<div class="' + colWidth + '"><a type="button" class="btn btn-default btn-full btnQuestionAnnulla" href="#!">' + koButtonText + '</a></div>';
                } else {
                    koButtonHTML = '<div class="' + colWidth + '"><a class="btnQuestionAnnulla" href="javascript:;">' + options.kolink + '</a></div>';
                }
            }
            if (typeof options.okbutton !== 'undefined') {
                okButtonHTML = '<div class="' + colWidth + ' ' + colOffset + '"><a type="button" class="btn btn-primary btn-full btnQuestionProsegui" href="#!">' + options.okbutton + '</a></div>';
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
        goToAuthPage = function (prefix, type, otpType, pollingType, isContatto) {
            var url,
                formOK = true;
            isContatto = typeof isContatto === 'undefined' ? false : isContatto;
            if (!isContatto && prefix === '#bonifico' && formOK && !check.isSepa(this.getIBAN())) {
                url = cgi_script + "/wbOnetoone/2l/action/banking/WsBonificoSepaInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonifico_ordinario&cf=" + Math.random();
                this.showCallError('Non è possibile inserire in questa sezione bonifici verso Paesi non aderenti all\'area Sepa<br/><br/>' + '<a href="' + url + '">Clicca per accedere alla funzione</a>', $('#bonificoPage1'));
                formOK = false;
            }
            if (formOK) {
                if (type === "Otp") {
                    otpRequest(prefix, otpType);
                } else {
                    updateAuthPage(prefix, type, pollingType, isContatto);
                }
            }
            return false;
        };
        updateAuthPage = function (prefix, type, pollingType, isContatto) {
            var $page, $carousel, $opsBox, classPrefix, updateFunc;
            if (type === "Strong") {
                if (isApp()) {
                    saStartPolling(pollingType, isContatto);
                    type = 'App';
                } else {
                    type = 'Token';
                }
            }
            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $carousel = $opsBox.find(classPrefix + 'Carousel');
                $page = $carousel.find(classPrefix + 'Page2');
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
                $carousel = $(prefix + 'Carousel');
                $page = $(prefix + 'Page2');
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
                    updateFunc = updateDettMavrav;
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
            }
            $nextPage.find('.esitoKO').hide();
            $nextPage.find('.esitoOK').show();
            goToNextPage($carousel);
            loadMovDispo();
            loadRubriche();
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
                    formId, carta, rapporto;
                resetSemVars();
                resetForm($form);
                if (isContatto) {
                    if ($form.hasClass('bonificoContattoForm')) {
                        setSubmitType('.bonificoContatto', true);
                        rapporto = getContattoInfo('rapporto');
                        if (rapporto.importoPreferito !== '' && rapporto.importoPreferito) {
                            $form.find('.inputImportoContatto').val(rapporto.importoPreferito);
                            $form.find('.icon-star_fill').removeClass('disabled');
                        } else {
                            $form.find('.inputImportoContatto').val('');
                            $form.find('.icon-star_fill').addClass('disabled');
                        }
                    } else if ($form.hasClass('cellulareContattoForm')) {
                        setSubmitType('.cellulareContatto', true);
                        loadTagliTel(true);
                    } else if ($form.hasClass('prepagataContattoForm')) {
                        setSubmitType('.prepagataContatto', true);
                        carta = getContattoInfo('carta');
                        $form.find('.inputBenCjContatto').html(carta.numero);
                        updateSogliaCarta(carta.tipoCarta);
                    }
                } else {
                    formId = $form.attr('id');
                    if (formId === 'bonificoForm') {
                        $('#inputBen').comboboxPlus('clear');
                        $("#datepicker").val(getBonificoDate()[0]);
                        $('#inputIBAN').val('').show();
                        $('#outputIBAN').empty().hide();
                        $('#inputNazione').val('IT');
                        setSubmitType('#bonifico');
                    } else if (formId === 'prepagataForm') {
                        $('#inputBenPrepagata').comboboxPlus('clear');
                        $('#inputTypePrepagata').val('').show();
                        $('#outputTypePrepagata').empty().hide();
                        setSubmitType('#prepagata');
                    } else if (formId === 'cellulareForm') {
                        $('#inputBenCellulare').comboboxPlus('clear');
                        $('#inputImportoCellulare').attr('disabled', 'disabled').val('0');
                        $('#inputOperCellulare').attr('disabled', false).val('');
                    } else if (formId === 'bollettinoForm') {
                        $('#boxBollettino').hide();
                        $("#datepicker2").val(primaDataBollettino);
                    } else if (formId === 'bollettinoFormBis') {
                        setSubmitType('#bollettino');
                    } else if (formId === 'bolloForm') {
                        setSubmitType('#bollo');
                    } else if (formId === 'atmForm') {
                        $('#inputBenAtm').comboboxPlus('clear');
                    } else if (formId === 'atmFormBis') {
                        setSubmitType('#atm');
                    } else if (formId === 'mavravForm') {
                        setSubmitType('#mavrav');
                    }
                }
            });
        };
        resetSemVars = function () {
            ajaxCalling = {
                // Richieste dati
                "req-otp": false,
                "req-tel": false,
                // Controllo dati
                "chk-car": false,
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
        setSubmitType = function (prefix, isContatto) {
            var suffix = '',
                $submit;
            isContatto = (typeof isContatto !== 'undefined' && isContatto);

            if (!isContatto) {
                suffix = ('#bollettino' === prefix || '#atm' === prefix) ? 'Bis' : '';
            }

            $submit = $(prefix + 'Page1' + suffix + 'Submit');

            if (sportello.isStrongAuth()) {
                $submit.attr('data-type', 'Strong');
            } else {
                $submit.attr('data-type', 'Pin32');
                $(prefix + 'Form' + suffix + ' .otpMsg').hide();
            }
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

        //region CHIAMATE AJAX
        loadDataFailure = function (jqXHR, textStatus, errorThrown) {
            var code = (typeof jqXHR !== 'undefined') ? jqXHR.statusCode() : '',
                text = (typeof textStatus !== 'undefined') ? textStatus : '',
                error = (typeof errorThrown !== 'undefined') ? errorThrown : '';
            printLog('*** loadDataFailure: status: ' + text + "\nError: " + error + "\nstatusCode: " + code);
        };
        loadDatiIniziali = function () {
            var url = '/Login2Out.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "prepagate": "yes",
                    "cf": Math.random()
                };
            jqAJAXCall('post', 'xml', AjaxUrl, initDatiIniziali, loadDataFailure, parameters);
        };
        loadNazioni = function () {
            var url = '/ListaNazioni.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "call": "ListaNazioni.do",
                    "service": "WEBANK",
                    "nazione": $('#inputNazione').val(),
                    "cf": Math.random()
                };
            jqAJAXCall('post', 'json', AjaxUrl, updateNazioni, loadDataFailure, parameters);
        };
        loadRubriche = function () {
            var url = '/AggiornamentoRubriche.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "call": "AggiornamentoRubriche.do",
                    "service": "WEBANK",
                    "rub_telefonica": true,
                    "rub_tv": false,
                    "rub_benef": true,
                    "rub_prepagate": "all",
                    "cf": Math.random()
                };
            jqAJAXCall('post', 'xml', AjaxUrl, updateRubriche, loadDataFailure, parameters);
        };
        loadContatti = function () {
            var url = '/RubricaContattoVeloce.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "cf": Math.random()
                },
                $boxContactLoading;
            $('.spPersonOpsBox').removeClass('open');
            $boxContactLoading = $('#boxContactLoading').addClass('loading');
            jqAJAXCall('get', 'json', AjaxUrl, function (data) {
                    updateContatti(data);
                    $boxContactLoading.removeClass('loading');
                }, function (jqXHR, textStatus, errorThrown) {
                    loadDataFailure(jqXHR, textStatus, errorThrown);
                    $boxContactLoading.removeClass('loading');
                }, parameters
            );
        };
        loadContatto = function (id) {
            var url = '/RubricaContattoVeloce.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "id": id,
                    "cf": Math.random()
                };
            showLoadingOnPage($('.spPersonAdd').find('.spPersonWrap'));
            jqAJAXCall('get', 'json', AjaxUrl, updateContatto, loadDataFailure, parameters);
        };
        loadMovDispo = function () {
            if (isMovDispoOK && !isLoadingMovData && !isLoadingDispoData) {
                showLoadingOnPage($('#movDispoExp'));
                loadMov();
                loadDispo();
                // *** |FINE| Movimenti e disposizioni ***
            }
            if (isRespOK) {
                loadSaldi();
            }
        };
        loadMov = function () {
            if (!isLoadingMovData) {
                isLoadingMovData = true;
                if (debugLoading) {
                    printLog('*** loadMov: showLoadingOnPage movBox');
                }
                var url = '/WsMovementsSearch.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "requestIdInPage": requestIdInPage,
                        "period": 15,
                        "numberToShow": 15,
                        "accountId": contoSelezionato,
                        "cf": Math.random()
                    };
                jqAJAXCall('post', 'json', AjaxUrl, updateTabMov, function () {
                    $('#errMovMsg').show();
                    $('#noMovMsg').hide();
                    $('#movBox').hide();
                    $('#movContent .spBar').hide();
                    if (debugLoading) {
                        printLog('*** loadMovFailure: hideLoadingOnPage movBox');
                    }
                    isLoadingMovData = false;
                    loadDataFailure();
                    completeMovDispo();
                }, parameters);
            }
        };
        loadMovDetail = function (id) {
            if (!isLoadingMovData) {
                isLoadingMovData = true;
                var url = '/WsMovementsDetail.do?ids=' + id,
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "accountId": contoSelezionato,
                        "requestIdInPage": requestIdInPage,
                        "cf": Math.random()
                    };
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    updateMovDetail(data, id);
                }, function () {
                    isLoadingMovData = false;
                    loadDataFailure();
                }, parameters);
            }
        };
        loadDispo = function () {
            if (!isLoadingDispoData) {
                isLoadingDispoData = true;
                if (debugLoading) {
                    printLog('*** loadDispo: showLoadingOnPage dispoBox');
                }
                var url = '/WsTutteDisposizioni.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "keep": 'yes',
                        "ultime": '15',
                        "idconto": contoSelezionato,
                        "cf": Math.random()
                    };
                jqAJAXCall('post', 'json', AjaxUrl, updateTabDispo, function () {
                    $('#errDispoMsg').show();
                    $('#noDispoMsg').hide();
                    $('#dispoBox').hide();
                    $('#dispoContent .spBar').hide();
                    if (debugLoading) {
                        printLog('*** loadDispoFailure: hideLoadingOnPage dispoBox');
                    }
                    isLoadingDispoData = false;
                    loadDataFailure();
                }, parameters);
            }
        };
        loadDispoDetail = function (id, url) {
            if (!isLoadingDispoData) {
                isLoadingDispoData = true;
                var AjaxUrl = (!isLibrerie()) ? url : pathLibrerie + pathMovimenti + '/WsStatoDispDetailedJson.php',
                    parameters = {
                        "cf": Math.random()
                    };
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    updateDispoDetail(data, id);
                }, function () {
                    isLoadingDispoData = false;
                    loadDataFailure();
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
            $.each(datiAuto.find("tipoVeicolo"), function (i, v) {
                $bolloVeicolo.append($("<option>").attr("value", $(v).attr("codice")).html($(v).attr("valore")));
            });
            // Regione di riferimento
            var $bolloRegione = $("#inputRegione");
            $bolloRegione.empty().append($("<option>").attr("value", "").html("Seleziona"));
            $.each(datiAuto.find("regione"), function (i, v) {
                $bolloRegione.append($("<option>").attr("value", $(v).attr("val")).html($(v).attr("val")));
            });
            bolloPresaVisione = (datiAuto.find("presaVisione").attr("val") !== "false");
        };
        loadDatePickersMavrav = function () {
            var url = '/WsDatiPreliminariPDA.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "call": "WsDatiPreliminariPDA.do",
                    "service": "WEBANK",
                    "days": 60,
                    "function": 'MAV'
                };
            jqAJAXCall('post', 'json', AjaxUrl, initDatePickersMavrav, loadDataFailure, parameters);
        };
        // Chiamate prese dalla RIA
        loadListaConti = function () {
            var url = cgi_script + '/bnkg/listaConti.do',
                parameters = {};
            if (librerie) {
                parameters.webank = isWebank;
            }
            jqAJAXCall('post', 'json', url, updateConti, loadDataFailure, parameters);
        };
        loadSaldi = function () {
            var url = '/situazioneConti.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/bnkg' + url : pathLibrerie + '' + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                parameters = {
                    "cf": Math.random()
                };
            if (!isMissingData(dashboardData.cc)) {
                parameters.cc = dashboardData.cc;
                if (!isMissingData(dashboardData.cd)) {
                    parameters.cd = dashboardData.cd;
                }
            } else {
                parameters.ct = dashboardData.ct;
            }
            if (!isMissingData(dashboardData.cder)) {
                parameters.cder = dashboardData.cder;
            }
            jqAJAXCall('post', 'json', AjaxUrl, updateSaldi, function () {
                loadDataFailure();
            }, parameters);
        };
        loadContentCT = function (spDB) {
            saldoExpand(spDB);
            hideLoadingOnPage("#spDashboard");
        };
        loadContentCC = function (spDB) {
            var url = cgi_script + '/bnkg/situazioneConti.do',
                parameters = {
                    cc: dashboardData.cc,
                    dett: 1,
                    cf: Math.random()
                };
            if (dashboardData.tipoRapporto === 3 || (dashboardData.tipoRapporto === 2 && !isWebank)) {
                parameters.dett = 2;
            }
            jqAJAXCall('post', 'json', url, function (data) {
                updateContentCC(data);
                saldoExpand(spDB);
                hideLoadingOnPage("#spDashboard");
            }, function () {
                saldoCollapse(spDB);
                hideLoadingOnPage("#spDashboard");
            }, parameters);
        };
        loadContentCD = function (spDB) {
            var url = cgi_script + '/bnkg/situazioneConti.do',
                parameters = {
                    cd: dashboardData.cd,
                    dett: 1,
                    cf: Math.random()
                };
            jqAJAXCall('post', 'json', url, function (data) {
                updateContentCD(data);
                saldoExpand(spDB);
                hideLoadingOnPage("#spDashboard");
            }, function () {
                saldoCollapse(spDB);
                hideLoadingOnPage("#spDashboard");
            }, parameters);
        };
        loadContentLV = function (spDB) {
            var url = cgi_script + '/bnkg/situazioneConti.do',
                parameters = {
                    cd: dashboardData.cd,
                    lv: "true",
                    dett: 1,
                    cf: Math.random()
                };
            jqAJAXCall('post', 'json', url, function (data) {
                updateContentLV(data);
                saldoExpand(spDB);
                hideLoadingOnPage("#spDashboard");
            }, function () {
                saldoCollapse(spDB);
                hideLoadingOnPage("#spDashboard");
            }, parameters);
        };
        loadContentCDER = function (spDB) {
            var url = cgi_script + '/bnkg/situazioneConti.do',
                parameters = {
                    cder: dashboardData.cder,
                    dett: 1,
                    cf: Math.random()
                };
            jqAJAXCall('post', 'json', url, function (data) {
                updateContentCDER(data);
                saldoExpand(spDB);
                hideLoadingOnPage("#spDashboard");
            }, function () {
                saldoCollapse(spDB);
                hideLoadingOnPage("#spDashboard");
            }, parameters);
        };
        //endregion

        //region CHIAMATE AJAX DISPOSITIVE
        setAuthParameters = function (parameters, prefix, type, isToken) {
            var $pin2InputArr, pin1, pin2;
            if (strongAuth) {
                if (isApp()) {
                    if (isToken) {
                        parameters.otp = $(prefix + 'Page2InputApp').val();
                    }
                } else {
                    parameters.otp = $(prefix + 'Page2InputToken').val();
                }
            } else if (type === 'Otp') {
                parameters.codiceOTP = $(prefix + 'Page2InputOtp').val();
                parameters.otp = $(prefix + 'Page2InputOtp').val();
            } else {
                $pin2InputArr = $(prefix + 'Page2FormPin32 input.inppass2');
                pin1 = parseInt($pin2InputArr.eq(0).val(), 10);
                pin2 = parseInt($pin2InputArr.eq(1).val(), 10);
                parameters.numcod = authCodeNum;
                parameters.cod1 = pin1;
                parameters.cod2 = pin2;
                parameters.pwd1 = pin1;
                parameters.pwd2 = pin2;
            }
        };
        otpRequest = function (prefix, otpType) {
            if (!ajaxCalling["req-otp"]) {
                ajaxCalling["req-otp"] = true;
                var url = '/RichiestaOTP.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "call": "RichiestaOTP.do",
                        "service": "WEBANK",
                        "function": otpType,
                        cf: Math.random()
                    },
                    $page = $(prefix + 'Page1');
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** otpRequest: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    otpOK(data, otpType, prefix);
                    ajaxCalling["req-otp"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** otpFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["req-otp"] = false;
                }, parameters);
            }
        };
        tagliTelRequest = function (operatore, prefisso, numTel, isContatto) {
            if (!ajaxCalling["req-tel"]) {
                ajaxCalling["req-tel"] = true;
                var url = '/TagliTelefonica.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "call": "TagliTelefonica.do",
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "prefisso": prefisso,
                        "numerotelefono": numTel,
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
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    tagliTelOK(data, isContatto);
                    ajaxCalling["req-tel"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** tagliTelFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    isLoadingTagliTel = false;
                    if (reloadTagliTel) {
                        reloadTagliTel = false;
                        loadTagliTel(isContatto);
                    }
                    ajaxCalling["req-tel"] = false;
                }, parameters);
            }
        };
        checkCartaRequest = function (type, isContatto) {
            if (!ajaxCalling["chk-car"]) {
                ajaxCalling["chk-car"] = true;
                var url = '/WsJsonInquiryRicaricaPrepagata.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking/' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "call": "WsJsonInquiryRicaricaPrepagata.do",
                        "service": "WEBANK",
                        "cardNumber": $('#inputNuovoBenPrepagata').val(),
                        "type": $('#inputTypePrepagata').val(),
                        "intAmount": '0',
                        "decAmount": '01',
                        "debitAccount": contoSelezionato,
                        cf: Math.random()
                    },
                    $page = $('#cartaPage1');
                intestCJ = '';
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** checkCartaRequest: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    checkCartaOK(data, type, isContatto);
                    ajaxCalling["chk-car"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** checkCartaFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-car"] = false;
                }, parameters);
            }
        };
        checkBollettino = function (type) {
            if (!ajaxCalling["chk-blt"]) {
                ajaxCalling["chk-blt"] = true;
                var url = '/WsVerificaBollettinoPDA.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "call": "WsVerificaBollettinoPDA.do",
                        "service": "WEBANK",
                        "idconto": contoSelezionato,
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
                dataInserita = getDateFromString($('#datepicker2').val());
                dataEsecuzione = (!dataInserita || dataMin > dataInserita) ? dataMin : dataInserita;
                parameters.importo = $('#inputImportoBollettino').val().replace('.', ',');
                parameters.dataEsecuzione = dataEsecuzione.format('dd/mm/yyyy');
                //parameters.premarked =  isBollettinoPre ? true : false;
                if (!isBollettinoPre) {
                    parameters.tipoBol = "BIA";
                    parameters.intestatoa = $('#benBollettino').val();
                    parameters.causale = $('#causaleBollettino').val();
                } else {
                    parameters.tipoBol = "PRE";
                    parameters.intestatoa = ' ';
                    parameters.tipoDocumento = $('#tipoBoll option:selected').val();
                    parameters.codeline = $('#codiceBoll').val();
                }
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** checkBollettino: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    checkBollettinoOK(data, type);
                    ajaxCalling["chk-blt"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** checkBollettinoFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-blt"] = false;
                }, parameters);
            }
        };
        checkBolloCommissioni = function (type) {
            var $page = $("#bolloPage1");
            if (!ajaxCalling["chk-com"]) {
                ajaxCalling["chk-com"] = true;
                hideLoadingOnPage($page);
                var url = '/WsPaymentVehicleTaxCommissioniPDA.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    params = {
                        "accountId": contoSelezionato,
                        "keep": "true"
                    };
                if (debugLoading) {
                    printLog('*** checkBolloCommissioni: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    hideLoadingOnPage($page);
                    var testData = isJsonCallFailed(data);
                    if (testData[0]) {
                        hideLoadingOnPage("#bolloSlide");
                        showCallError(testData[1], "#bolloSlide");
                        loadDataFailure();
                    } else {
                        showWarningQuestion({
                            wrapper: $page,
                            question: "<p>Il costo del servizio di riscossione &egrave; determinato dalle leggi vigenti (D.P.C.M. del 12 novembre 2009 n. 186) ed &egrave; posto interamente a carico del contribuente.<br> Tale costo &egrave; pari a <b>" + data.commissioni + "</b> &euro; per ogni singola operazione.</p>",
                            okbutton: "prosegui",
                            okfunction: function () {
                                bolloPresaVisione = true;
                                updateBollo(type);
                            }
                        });
                    }
                    ajaxCalling["chk-com"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** checkBolloCommissioniFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-com"] = false;
                }, params);
            }
        };
        // funzione di controllo tagli e restituzione abbonamenti ATM
        checkTagli = function () {
            if (!ajaxCalling["chk-tgl"]) {
                ajaxCalling["chk-tgl"] = true;
                var url = '/WsAtmMiRechargeTagli.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputArrAtm = getInputAtm(),
                    numeroTessera = inputArrAtm[0],
                    titolareTessera = inputArrAtm[1],
                    parameters = {
                        "call": "WsAtmMiRechargeTagli.do",
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
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    checkTagliOK(data, $page);
                    ajaxCalling["chk-tgl"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** checkTagliFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-tgl"] = false;
                }, parameters);
            }
        };
        // funzione di controllo dati MAV E RAV
        checkMavrav = function () {
            if (!ajaxCalling["chk-mrv"]) {
                ajaxCalling["chk-mrv"] = true;
                var url = '/WsBillsPaymentVerifyPDA.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputArrMavrav = getInputMavrav(),
                    numeroCodice = inputArrMavrav[0],
                    importoIntMavrav = inputArrMavrav[1],
                    importoDecMavrav = inputArrMavrav[2],
                    typeMavrav = inputArrMavrav[3],
                    dateMavrav = inputArrMavrav[4],
                    parameters = {
                        "call": "WsBillsPaymentVerifyPDA.do",
                        "service": "WEBANK",
                        "idconto": contoSelezionato,
                        "num_eff": numeroCodice,
                        "importo_val_int": importoIntMavrav,
                        "importo_val_dec": importoDecMavrav,
                        "sel_effetti": typeMavrav,
                        "keep": 'true',
                        "data_emi": dateMavrav,
                        "cf": Math.random()
                    },
                    $wrapper = $('#mavravSlide');
                if (debugLoading) {
                    printLog('*** checkMavrav: showLoadingOnPage ' + $wrapper.attr('id'));
                }
                showLoadingOnPage($wrapper);
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    checkMavravOK(data, $wrapper);
                    ajaxCalling["chk-mrv"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($wrapper);
                    if (debugLoading) {
                        printLog('*** checkMavravFailure: hideLoadingOnPage ' + $wrapper.attr('id'));
                    }
                    showMsgOnPage({
                        wrapper: $wrapper,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-mrv"] = false;
                }, parameters);
            }
        };
        sendImportoPreferito = function () {
            if (!ajaxCalling["snd-imp"]) {
                ajaxCalling["snd-imp"] = true;
                var url = '/RubricaImportoPreferitoInsert.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    rapporto = getContattoInfo('rapporto'),
                    parameters = {
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
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    sendImportoPreferitoOK(data, importo);
                    ajaxCalling["snd-imp"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** sendImportoPreferitoFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-imp"] = false;
                }, parameters);
            }
        };
        sendBonifico = function (type, isContatto, isToken) {
            if (!ajaxCalling["snd-bon"]) {
                ajaxCalling["snd-bon"] = true;
                var url = '/BonificoItalia.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "call": "BonificoItalia.do",
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "emailben": "",
                        "cf": Math.random()
                    },
                    $salvaContatto, $page, $opsBox, classPrefix, rapporto;
                if (isContatto) {
                    classPrefix = getClassPrefix('#bonifico');
                    $opsBox = getOpsBox();
                    $page = $opsBox.find(classPrefix + 'Page2');
                    rapporto = getContattoInfo('rapporto');
                    parameters.importo = $opsBox.find('.inputImportoContatto').val();
                    parameters.causale = $opsBox.find('.inputCausaleContatto').val();
                    parameters.salvainrubrica = false;
                    parameters.nomeben = rapporto.beneficiario;
                    parameters.ibanben = rapporto.iban;
                    parameters.dataaccredito = bonificoDateArr[0];
                    parameters.nazione = contattoSelezionato.anagrafica.nazione !== '' ? contattoSelezionato.anagrafica.nazione : rapporto.iban.substr(0, 2);
                } else {
                    $page = $('#bonificoPage2');
                    $salvaContatto = $('#salvaContatto');
                    parameters.importo = $('#inputImporto').val();
                    parameters.causale = $('#inputCausale').val();
                    parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                    parameters.nomeben = getBen();
                    parameters.ibanben = getIBAN();
                    parameters.dataaccredito = $('#datepicker').val();
                    parameters.nazione = $('#inputNazione').val();
                }
                if (debugLoading) {
                    printLog('*** sendBonifico: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                setAuthParameters(parameters, '#bonifico', type, isToken);
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    bonificoOK(data, isContatto);
                    ajaxCalling["snd-bon"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** bonificoFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-bon"] = false;
                }, parameters);
            }
        };
        sendPrepagata = function (type, isContatto, isToken) {
            if (!ajaxCalling["snd-cjs"]) {
                ajaxCalling["snd-cjs"] = true;
                var url = '/RicaricaPrepagata.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputPrepagataValArr, carta,
                    parameters = {
                        "call": "RicaricaPrepagata.do",
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "cf": Math.random()
                    },
                    $salvaContatto, $page, $opsBox, classPrefix;
                if (isContatto) {
                    classPrefix = getClassPrefix('#prepagata');
                    $opsBox = getOpsBox();
                    $page = $opsBox.find(classPrefix + 'Page2');
                    carta = getContattoInfo('carta');
                    parameters.valore = $opsBox.find('.inputImportoPrepagataContatto').val();
                    parameters.cardType = carta.tipoCarta;
                    parameters.numerocarta = carta.numero;
                    parameters.intestatario = $.trim(contattoSelezionato.anagrafica.nome + ' ' + contattoSelezionato.anagrafica.cognome_rag_soc);
                    parameters.salvainrubrica = false;
                } else {
                    $page = $('#preapagataPage2');
                    $salvaContatto = $('#salvaContattoPrepagata');
                    parameters.valore = $('#inputImportoPrepagata').val();
                    parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                    inputPrepagataValArr = getInputPrepagata();
                    parameters.numerocarta = inputPrepagataValArr[0];
                    parameters.intestatario = inputPrepagataValArr[1];
                    parameters.cardType = inputPrepagataValArr[2];
                }
                if (debugLoading) {
                    printLog('*** sendPrepagata: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                setAuthParameters(parameters, '#prepagata', type, isToken);
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    prepagataOK(data, isContatto);
                    ajaxCalling["snd-cjs"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** prepagataFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-cjs"] = false;
                }, parameters);
            }
        };
        sendCellulare = function (type, isContatto, isToken) {
            if (!ajaxCalling["snd-cel"]) {
                ajaxCalling["snd-cel"] = true;
                var url = '/RicaricaTelefonica.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputArr, telefono, intestazione, tmpArr,
                    parameters = {
                        "call": "RicaricaTelefonica.do",
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "cf": Math.random()
                    },
                    $salvaContatto, $page, $opsBox, classPrefix;
                if (isContatto) {
                    classPrefix = getClassPrefix('#cellulare');
                    $opsBox = getOpsBox();
                    $page = $opsBox.find(classPrefix + 'Page2');
                    tmpArr = $opsBox.find('.inputImportoCellContatto').val().split('|');
                    intestazione = contattoSelezionato.anagrafica.nome;
                    intestazione += $.trim(contattoSelezionato.anagrafica.cognome_rag_soc) !== '' ? ' ' + contattoSelezionato.anagrafica.cognome_rag_soc : '';
                    telefono = getContattoInfo('telefono');
                    parameters.operatore = telefono.operatore.description;
                    parameters.prefisso = telefono.prefisso;
                    parameters.numerotelefono = telefono.numero;
                    parameters.intestazione = intestazione;
                    parameters.salvainrubrica = false;
                    parameters.valore = tmpArr[0];
                    parameters.commissioni = tmpArr[1];
                } else {
                    $page = $('#cellularePage2');
                    $salvaContatto = $('#salvaContattoCellulare');
                    inputArr = getInputCell();
                    parameters.intestazione = getBenCell();
                    parameters.operatore = inputArr[0];
                    parameters.prefisso = inputArr[1];
                    parameters.numerotelefono = inputArr[2];
                    parameters.valore = inputArr[3];
                    parameters.commissioni = inputArr[4];
                    if (parameters.operatore === 'VODAF') {
                        parameters.operatore = 'VODAFONE';
                    }
                    parameters.salvainrubrica = (!$salvaContatto.prop('disabled') && $salvaContatto.prop('checked'));
                }
                if (debugLoading) {
                    printLog('*** sendCellulare: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                setAuthParameters(parameters, '#cellulare', type, isToken);
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    cellulareOK(data, isContatto);
                    ajaxCalling["snd-cel"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** cellulareFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-cel"] = false;
                }, parameters);
            }
        };
        sendBollettino = function (type, isToken) {
            if (!ajaxCalling["snd-blt"]) {
                ajaxCalling["snd-blt"] = true;
                var url = '/Bollettino.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    dataAccredito = getDataAccredito($('#datepicker2').val()),
                    tipo = (check.isHidden($('#boxBollettinoPre'))) ? "BIA" : "PRE",
                    $page = $('#bollettinoPage2'),
                    parameters = {
                        "call": "Bollettino.do",
                        "service": "WEBANK",
                        "conto": contoSelezionato,
                        "tipo": tipo,
                        "ccpbeneficiario": $('#inputBenBollettino').val(),
                        "importo": $('#inputImportoBollettino').val(),
                        "nomeben": bollIntestatario,
                        "dataaccredito": dataAccredito.format('dd/mm/yyyy'),
                        "causale": $('#causaleBollettino').val(),
                        "nome": $('#inputNuovoEseBollettino').val(),
                        "residentein": $('#residenzaEsecutore').val(),
                        "localita": $('#localitaEsecutore').val(),
                        "provincia": $('#provinciaEsecutore option:selected').text(),
                        "cap": $('#capEsecutore').val(),
                        "cf": Math.random()
                    };
                setAuthParameters(parameters, '#bollettino', type, isToken);
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** sendBollettino: showLoadingOnPage ' + getPageInfo($page));
                }
                if (forceBollettino) {
                    parameters.force = "1";
                }
                if (tipo !== 'BIA') {
                    parameters.codicebollettino = $('#codiceBoll').val();
                    parameters.tipobollettino = $('#tipoBoll option:selected').val();
                }
                jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
                    bollettinoOK(data);
                    ajaxCalling["snd-blt"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** bollettinoFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-blt"] = false;
                }, parameters);
            }
        };
        sendBollo = function (type, isToken) {
            if (!ajaxCalling["chk-bol"]) {
                ajaxCalling["chk-bol"] = true;
                var url = '/WsPaymentVehicleTaxConfirmPDA.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "accountId": contoSelezionato,
                        "targa": $("#inputTarga").val(),
                        "regione": $("#inputRegione").val(),
                        "idTransazione": bolloDatiTrans,
                        "forzaAddebito": bolloForzaAddebito,
                        "tipoVeicolo": $("#inputVeicolo").val()
                    },
                    $page = $('#bolloPage2');
                setAuthParameters(parameters, '#bollettino', type, isToken);
                showLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** sendBollo: showLoadingOnPage ' + getPageInfo($page));
                }
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    bolloOK(data);
                    ajaxCalling["chk-bol"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** sendBolloFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["chk-bol"] = false;
                }, parameters);
            }
        };
        sendAtm = function (type, isToken) {
            if (!ajaxCalling["snd-atm"]) {
                ajaxCalling["snd-atm"] = true;
                var url = '/WsAtmMiRechargeConfirm.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputArrAtm = getInputAtm(),
                    inputArrAtmStep2 = getInputAtmBis(),
                    numeroTessera = inputArrAtm[0],
                    titolareTessera = inputArrAtm[1],
                    sceltaTaglio = inputArrAtmStep2[3],
                    idTransazione = inputArrAtmStep2[4],
                    parameters = {
                        "call": "WsAtmMiRechargeConfirm.do",
                        "service": "WEBANK",
                        "selectedAccount": contoSelezionato,
                        "numeroTessera": numeroTessera,
                        "titolareTessera": titolareTessera,
                        "sceltaTaglio": sceltaTaglio,
                        "idTransazione": idTransazione,
                        "cf": Math.random()
                    },
                    $page = $('#atmPage2'),
                    $boxTesEsistente = $('#boxTesEsistente');
                if (debugLoading) {
                    printLog('*** sendAtm: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                parameters.salvainRubrica = (($boxTesEsistente.css('display') === 'none') && $('#boxNuovaAtm input:checkbox').is(':checked'));
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
                setAuthParameters(parameters, '#atm', type, isToken);
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    atmOK(data);
                    ajaxCalling["snd-atm"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** atmFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-atm"] = false;
                }, parameters);
            }
        };
        sendMavrav = function (type, isToken) {
            if (!ajaxCalling["snd-mrv"]) {
                ajaxCalling["snd-mrv"] = true;
                var url = '/WsBillsPaymentConfirmPDA.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    inputArrMavrav = getInputMavrav(),
                    numeroCodice = inputArrMavrav[0],
                    importoIntMavrav = inputArrMavrav[1],
                    importoDecMavrav = inputArrMavrav[2],
                    typeMavrav = inputArrMavrav[3],
                    dateMavrav = inputArrMavrav[4],
                    parameters = {
                        "call": "WsBillsPaymentConfirmPDA.do",
                        "service": "WEBANK",
                        "idconto": contoSelezionato,
                        "num_eff": numeroCodice,
                        "importo_val_int": importoIntMavrav,
                        "importo_val_dec": importoDecMavrav,
                        "sel_effetti": typeMavrav,
                        "keep": 'true',
                        "data_emi": dateMavrav,
                        "cf": Math.random()
                    },
                    $page = $('#mavravPage2');
                setAuthParameters(parameters, '#mavrav', type, isToken);
                if (debugLoading) {
                    printLog('*** sendMavrav: showLoadingOnPage ' + getPageInfo($page));
                }
                showLoadingOnPage($page);
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    mavravOK(data);
                    ajaxCalling["snd-mrv"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($page);
                    if (debugLoading) {
                        printLog('*** sendMavravFailure: hideLoadingOnPage ' + getPageInfo($page));
                    }
                    showMsgOnPage({
                        wrapper: $page,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["snd-mrv"] = false;
                }, parameters);
            }
        };
        addContatto = function () {
            if (!ajaxCalling["add-con"]) {
                ajaxCalling["add-con"] = true;
                var url = '/RubricaContattoVeloceInsert.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "id": $('#selectAddContatto').val(),
                        "id_tv": '',
                        cf: Math.random()
                    },
                    $wrapper = $('.spPersonAdd .spPersonWrap'),
                    $selectBox;
                showLoadingOnPage($wrapper);
                $selectBox = $('#selectSetIbanContatto');
                parameters.id_rapporto = $selectBox.is(':visible') ? $selectBox.val() : $('#outputSetIbanContatto').attr('data-id');
                $selectBox = $('#selectSetPrepagataContatto');
                parameters.id_carta = $selectBox.is(':visible') ? $selectBox.val() : $('#outputSetPrepagataContatto').attr('data-id');
                $selectBox = $('#selectSetCellContatto');
                parameters.id_telefono = $selectBox.is(':visible') ? $selectBox.val() : $('#outputSetCellContatto').attr('data-id');
                if (debugLoading) {
                    printLog('*** addContatto: showLoadingOnPage ' + $wrapper.attr('id'));
                }
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    addContattoOK(data);
                    ajaxCalling["add-con"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($wrapper);
                    if (debugLoading) {
                        printLog('*** addContattoFailure: hideLoadingOnPage ' + $wrapper.attr('id'));
                    }
                    showMsgOnPage({
                        wrapper: $wrapper,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["add-con"] = false;
                }, parameters);
            }
        };
        deleteContatto = function () {
            if (!ajaxCalling["del-con"]) {
                ajaxCalling["del-con"] = true;
                var url = '/RubricaContattoVeloceDelete.do',
                    AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                    parameters = {
                        "id": contattoSelezionato.anagrafica.id,
                        cf: Math.random()
                    };
                showLoadingOnPage($contattoPage);
                if (debugLoading) {
                    printLog('*** deleteContatto: showLoadingOnPage ' + $contattoPage.attr('id'));
                }
                jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                    deleteContattoOK(data);
                    ajaxCalling["del-con"] = false;
                }, function (jqXHR, textStatus, errorThrown) {
                    testErrLogin(jqXHR, textStatus, errorThrown);
                    hideLoadingOnPage($contattoPage);
                    if (debugLoading) {
                        printLog('*** deleteContattoFailure: hideLoadingOnPage ' + $contattoPage.attr('id'));
                    }
                    showMsgOnPage({
                        wrapper: $contattoPage,
                        msgText: defaultError,
                        boxClass: 'negativo'
                    });
                    loadDataFailure();
                    ajaxCalling["del-con"] = false;
                }, parameters);
            }
        };
        //endregion

        //region CALLBACK AJAX DISPOSITIVE
        otpOK = function (data, otpType, prefix) {
            var testData = isXmlCallFailed(data),
                $page = $(prefix + 'Page1'),
                pollingType;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** otpOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page);
                loadDataFailure();
            } else {
                pollingType = otpType === 'BON' ? 'SEP' : otpType;
                updateAuthPage(prefix, 'Otp', pollingType, false);
            }
        };
        sendImportoPreferitoOK = function (data, importo) {
            var testData = isJsonCallFailed(data),
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
                loadDataFailure();
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
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         * @param type
         * @param isContatto
         */
        checkCartaOK = function (data, type, isContatto) {
            var $page = !isContatto ? $('#prepagataPage1') : $contattoPage,
                testData = isJsonCallFailed(data);
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** checkCartaOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page);
                loadDataFailure();
            } else {
                intestCJ = data.cartaRicaricabile.intestatario;
                goToAuthPage('#prepagata', type, "RPR", "RPR", isContatto);
            }
        };
        tagliTelOK = function (data, isContatto) {
            var $page = !isContatto ? $('#cellularePage1') : $contattoPage,
                testData = isXmlCallFailed(data);
            hideLoadingOnPage($page);
            if (testData[0]) {
                showCallError(testData[1], $page, isContatto ? 'contatto' : null);
                loadDataFailure();
            } else {
                tagliTelArr = [];
                $(data).find('voci taglio').each(function () {
                    tagliTelArr.push($(this).attr('valore') + '|' + $(this).attr('commissione'));
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
        checkBollettinoOK = function (data, type) {
            var testData = isJsonCallFailed(data),
                $currPage = $('#bollettinoPage1Bis'),
                $nextPage = $('#bollettinoPage2');
            hideLoadingOnPage($currPage);
            if (debugLoading) {
                printLog('*** checkBollettinoOK: hideLoadingOnPage ' + $currPage.attr('id'));
            }
            if (testData[0]) {
                bollIntestatario = "";
                showCallError(testData[1], $currPage);
                loadDataFailure();
            } else {
                bollIntestatario = data.intestatario;
                if (data.testoContoTerzi) {
                    showWarningQuestion({
                        wrapper: $currPage,
                        question: '<p id="">' + data.testoContoTerzi + '</p>',
                        okbutton: "prosegui",
                        okfunction: function () {
                            $nextPage.find('.saldoVal').eq(3).html(data.intestatario);
                            goToAuthPage('#bollettino', type, "BFB", "BFB", false);
                        }
                    });
                } else {
                    $nextPage.find('.saldoVal').eq(3).html(data.intestatario);
                    goToAuthPage('#bollettino', type, "BFB", "BFB", false);
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
         * @param $page
         */
        checkTagliOK = function (data, $page) {
            var testData = isJsonCallFailed(data);
            if (debugLoading) {
                printLog('*** checkTagliOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            hideLoadingOnPage($page);
            if (testData[0]) {
                showCallError(testData[1], $page);
                loadDataFailure();
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
         * @param $wrapper
         */
        checkMavravOK = function (data, $wrapper) {
            var slide = strongAuth ? $('#mavravStep2c') : $('#mavravStep2'),
                testData = isJsonCallFailed(data);
            hideLoadingOnPage($wrapper);
            if (testData[0]) {
                showCallError(testData[1], $wrapper);
                loadDataFailure();
            } else {
                if (data.testoContoTerzi) {
                    showWarningQuestion({
                        wrapper: "#mavravSlide",
                        question: '<p id="">' + data.testoContoTerzi + '</p>',
                        okbutton: "prosegui",
                        okfunction: function () {
                            updateDettMavrav(slide);
                        }
                    });
                } else {
                    updateDettMavrav(slide);
                }
            }
        };
        bonificoOK = function (data, isContatto) {
            var classPrefix, $opsBox, $page, $data,
                testData = isXmlCallFailed(data),
                sendImporto = false;
            if (isContatto) {
                classPrefix = getClassPrefix('#bonifico');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
                sendImporto = !$contattoPage.find('.icon-star_fill').hasClass('disabled');
            } else {
                $page = $('#bonificoPage2');
            }
            if (!sendImporto) {
                hideLoadingOnPage($page);
            }
            if (debugLoading) {
                printLog('*** bonificoOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                loadDataFailure();
                if (isContatto) {
                    showCallError(testData[1], $page, 'contatto');
                } else {
                    showCallError(testData[1], $page, '');
                }
                if (sendImporto) {
                    hideLoadingOnPage($page);
                }
            } else {
                $data = $(data);
                $('#saldo').html($data.find('saldo').attr('margineUtilizzabile'));
                if (!sendImporto) {
                    goToOkPage('#bonifico', isContatto);
                } else {
                    sendImportoPreferito();
                }
            }
        };
        prepagataOK = function (data, isContatto) {
            var classPrefix, $opsBox, $page,
                testData = isXmlCallFailed(data);
            if (isContatto) {
                classPrefix = getClassPrefix('#prepagata');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
            } else {
                $page = $('#prepagataPage2');
            }
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** prepagataOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                if (isContatto) {
                    showCallError(testData[1], $page, 'contatto');
                } else {
                    showCallError(testData[1], $page, '');
                }
                loadDataFailure();
            } else {
                goToOkPage('#prepagata', isContatto);
            }
        };
        cellulareOK = function (data, isContatto) {
            var classPrefix, $opsBox, $page,
                testData = isXmlCallFailed(data);
            if (isContatto) {
                classPrefix = getClassPrefix('#cellulare');
                $opsBox = getOpsBox();
                $page = $opsBox.find(classPrefix + 'Page2');
            } else {
                $page = $('#cellularePage2');
            }
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** cellulareOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                if (isContatto) {
                    showCallError(testData[1], $page, 'contatto');
                } else {
                    showCallError(testData[1], $page, '');
                }
                loadDataFailure();
            } else {
                goToOkPage('#cellulare', isContatto);
            }
        };
        bollettinoOK = function (data) {
            var $page = $('#bollettinoPage2'),
                testData = isXmlCallFailed(data, ['ok'], '#01#');
            if (debugLoading) {
                printLog('*** bollettinoOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            hideLoadingOnPage($page);
            if (testData[0]) {
                showCallError(testData[1], $page, '');
                loadDataFailure();
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
         */
        bolloOK = function (data) {
            var $page = $('#bolloPage2'),
                testData = isJsonCallFailed(data, ['ok'], '1'),
                linkRicevutaInfo;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** bolloOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page, '');
                loadDataFailure();
            } else {
                linkRicevutaInfo = dynamicLinks.linkPdfBollo + '?numeroCRO=' + data.cro + '&tipo_disposizione=' + data.tipoDisposizione + '&cf=' + Math.random();
                $('#bolloRicevuta').click(function (e) {
                    e.preventDefault();
                    window.open(linkRicevutaInfo, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=400, height=400");
                }).attr("href", staticLinks.linkDiposizioni);
                goToOkPage('#bollo', false);
            }
        };
        atmOK = function (data) {
            var $page = $('#atmPage2'),
                testData = isJsonCallFailed(data, ['ok'], '1'),
                linkRicevutaInfo;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** atmOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page, '');
                loadDataFailure();
            } else {
                linkRicevutaInfo = dynamicLinks.linkRicevutaatm + "?" + 'tipo_disposizione=ATM' + "&cc=" + contoSelezionato + "&cf=" + Math.random();
                $('#dispoDetailLinkATMb').attr("href", staticLinks.linkDiposizioni);
                $('#ricevutaLinkATMb').attr("href", linkRicevutaInfo).attr("target", '_blank');
                isCkeckTagliSent = false;
                goToOkPage('#atm', false);
            }
        };
        /**
         *
         * @param data
         * @param data.feedback
         * @param data.esito
         * @param data.force
         * @param data.stateUpdate
         * @param data.stateUpdate.nextAuthCode
         */
        mavravOK = function (data) {
            var $page = $('#mavravPage2'),
                testData = isJsonCallFailed(data),
                testoEsitoPos;
            hideLoadingOnPage($page);
            if (debugLoading) {
                printLog('*** mavravOK: hideLoadingOnPage ' + getPageInfo($page));
            }
            if (testData[0]) {
                showCallError(testData[1], $page, '');
                loadDataFailure();
            } else {
                testoEsitoPos = '<strong>Operazione completata correttamente</strong><br>Riceverai un\'email di conferma del pagamento del bollettino.';
                if (data.feedback && data.feedback.length) {
                    testoEsitoPos += '<br><br>' + data.feedback;
                }
                $('#mavravEsito').html(testoEsitoPos);
                goToOkPage('#mavrav', false);
            }
        };
        addContattoOK = function (data) {
            var testData = isJsonCallFailed(data),
                $wrapper = $('.spPersonAdd .spPersonWrap');
            hideLoadingOnPage($wrapper);
            if (debugLoading) {
                printLog('*** addContattoOK: hideLoadingOnPage ' + $wrapper.attr('id'));
            }
            if (testData[0]) {
                showCallError(testData[1], $wrapper);
                loadDataFailure();
            } else {
                loadContatti();
            }
        };
        deleteContattoOK = function (data) {
            var testData = isJsonCallFailed(data);
            hideLoadingOnPage($contattoPage);
            if (debugLoading) {
                printLog('*** deleteContattoOK: hideLoadingOnPage ' + $contattoPage.attr('id'));
            }
            if (testData[0]) {
                showCallError(testData[1], $contattoPage);
                loadDataFailure();
            } else {
                loadContatti();
            }
        };
        //endregion

        //region STRONG AUTHENTICATION
        saCreatePush = function (parameters) {
            var url = '/QuickDispositionCreatePush.action',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathMovimenti + url.replace(/\.(do|action)(\?)?/i, '.php$2');
            return $.ajax(AjaxUrl, { method: "post", dataType: "json", data: parameters });
        };
        saCheckPush = function () {
            var url = '/DispositionCheckPush.action',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/pda' + url : pathLibrerie + pathMovimenti + url.replace(/\.(do|action)(\?)?/i, '.php$2');
            return $.ajax(AjaxUrl, { method: "post", dataType: "json" });
        };
        saPolling = function (parameters, deferredPoll, pollingType, isContatto) {
            var maxAttempts = isLibrerie ? 15 : 300;
            if (debugLoading) {
                printLog('*** saPolling');
            }
            if (currAttempt++ <= maxAttempts) {
                if (debugLoading) {
                    printLog('*** saPolling: attempts OK - currAttempt: ' + currAttempt);
                }
                if (currAttempt > strongAuthData.attempts) {
                    hidePollingSlide(pollingType, isContatto);
                }
                if (!saIsPolling) {
                    saIsPolling = true;
                    saCheckPush().done(
                        /**
                         * @param data
                         * @param data.isValidated
                         */
                        function (data) {
                            if (debugLoading) {
                                printLog('*** saCheckPush: success - currAttempt: ' + currAttempt);
                                printLog('*** saCheckPush: data.isValidated: ' + data.isValidated);
                            }
                            if (data.isValidated === "true") {
                                // Richiede di fermare il loop per successo
                                deferredPoll.resolve();
                            }
                            saIsPolling = false;
                        }).fail(function () {
                        if (debugLoading) {
                            printLog('*** saCheckPush: failure - currAttempt: ' + currAttempt);
                        }
                        saIsPolling = false;
                    });
                }
            } else {
                // Richiede di fermare il loop per fallimento
                deferredPoll.reject();
            }
        };
        saStartPolling = function (pollingType, isContatto) {
            var paramArr, doneFunc,
                parameters = {
                    tipo: pollingType,
                    conto: contoSelezionato
                };
            switch (pollingType) {
                case "SEP": // Bonifico
                    parameters.importo = $('#inputImporto').val();
                    parameters.nomeben = getBen();
                    parameters.dataaccredito = $('#datepicker').val();
                    parameters.causale = $('#inputCausale').val();
                    doneFunc = function () {
                        sendBonifico('App', isContatto);
                    };
                    break;
                case "RPR": // Ricarica prepagata
                    paramArr = getInputPrepagata();
                    parameters.importo = $('#inputImportoPrepagata').val();
                    parameters.numerocarta = paramArr[0];
                    parameters.intestatario = paramArr[1];
                    doneFunc = function () {
                        sendPrepagata('App', isContatto);
                    };
                    break;
                case "CEL": // Ricarica cellulare
                    paramArr = getInputCell();
                    parameters.intestazione = getBenCell();
                    parameters.operatore = paramArr[0];
                    parameters.prefisso = paramArr[1];
                    parameters.numerotelefono = paramArr[2];
                    parameters.importo = paramArr[3];
                    doneFunc = function () {
                        sendCellulare('App', isContatto);
                    };
                    break;
                case "BFB": // Bollettino postale
                    parameters.importo = $('#inputImportoBollettino').val();
                    parameters.ccpbeneficiario = $('#inputBenBollettino').val();
                    parameters.dataaccredito = (getDataAccredito($('#datepicker2').val())).format('dd/mm/yyyy');
                    doneFunc = function () {
                        sendBollettino('App', false);
                    };
                    break;
                case "ATM": // Ricarica ATM
                    paramArr = getInputAtm();
                    parameters.numeroTessera = paramArr[0];
                    paramArr = getInputAtmBis();
                    parameters.importo = paramArr[2].replace(/\s+(\d+,\d\d).*/, "$1");
                    doneFunc = function () {
                        sendAtm('App', false);
                    };
                    break;
                case "ACI": // Bollo auto
                    parameters.importo = getImpBollo();
                    parameters.targa = $("#inputTarga").val();
                    parameters.regione = $("#inputRegione").val();
                    doneFunc = function () {
                        sendBollo();
                    };
                    break;
                case "MAV": // Mav/Rav
                    paramArr = getInputMavrav();
                    parameters.num_eff = paramArr[0];
                    parameters.importo = paramArr[1] + "," + paramArr[2];
                    parameters.data_emi = paramArr[4];
                    doneFunc = function () {
                        sendMavrav('App', false);
                    };
                    break;
            }
            saStopPolling();
            var deferredPoll = $.Deferred();
            saCreatePush(parameters).done(function (data) {
                if (debugLoading) {
                    printLog('*** saCreatePushCall - done');
                }
                if (!data.esito || data.esito === "ok") {
                    pushPoll = window.setInterval(function () {
                        saPolling(parameters, deferredPoll, pollingType, isContatto);
                    }, strongAuthData.interval);
                    deferredPoll.done(function () {
                        if (debugLoading) {
                            printLog('*** saPolling - deferredPoll - done');
                        }
                        doneFunc();
                    }).fail(function () {
                        if (debugLoading) {
                            printLog('*** saPolling - deferredPoll - fail');
                        }
                    }).always(function () {
                        saStopPolling();
                    });
                } else {
                    if (debugLoading) {
                        printLog('*** saCreatePushCall - done - data: ' + data);
                    }
                    loadDataFailure();
                }
            }).fail(function () {
                if (debugLoading) {
                    printLog('*** saCreatePushCall - fail');
                }
                loadDataFailure();
            });
        };
        saStopPolling = function () {
            if (debugLoading) {
                printLog('*** stopPolling - clearInterval');
            }
            currAttempt = 0;
            saIsPolling = false;
            if (pushPoll) {
                clearInterval(pushPoll);
            }
        };
        setPollingSlide = function (type, isContatto) {
            var slideId;
            switch (type) {
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
        showPollingSlide = function (type, isContatto) {
            var opsBox = getOpsBox();
            setPollingSlide(type, isContatto);
            if (isContatto) {
                opsBox.find(pollingSlideClass + "AppOK").show();
                opsBox.find(pollingSlideClass + "AppKO").hide();
            } else {
                $(pollingSlideId + "AppOK").show();
                $(pollingSlideId + "AppKO").hide();
            }
        };
        hidePollingSlide = function (type, isContatto) {
            var opsBox = getOpsBox();
            setPollingSlide(type, isContatto);
            if (isContatto) {
                opsBox.find(pollingSlideClass + "AppOK").hide();
                opsBox.find(pollingSlideClass + "AppKO").show();
            } else {
                $(pollingSlideId + "AppOK").hide();
                $(pollingSlideId + "AppKO").show();
            }
        };
        //endregion

        //region CREAZIONE/MODIFICA OGGETTI DOM
        updateDettBonifico = function ($page, isContatto) {
            var outputArr = $page.find('.saldoVal'),
                rapporto;
            if (isContatto) {
                rapporto = getContattoInfo('rapporto');
                outputArr.eq(0).html(rapporto.iban);
                outputArr.eq(1).html(formattaNumeriOutput($contattoPage.find('.inputImportoContatto').val().replace(',', '.')));
            } else {
                outputArr.eq(0).html(getBen());
                outputArr.eq(1).html(formattaNumeriOutput($('#inputImporto').val().replace(',', '.')));
                outputArr.eq(2).html(getIBAN());
                outputArr.eq(3).html($('#datepicker').val());
                outputArr.eq(4).html($('#inputNazione option:selected').text());
                outputArr.eq(5).html($('#inputCausale').val());
            }
        };
        updateDettPrepagata = function ($page, isContatto) {
            var outputArr = $page.find('.saldoVal'),
                carta, inputArr;
            if (isContatto) {
                carta = getContattoInfo('carta');
                outputArr.eq(0).html(carta.numero);
                outputArr.eq(1).html(formattaNumeriOutput($contattoPage.find('.inputImportoCjContatto').val().replace(',', '.')));
            } else {
                inputArr = getInputPrepagata();
                outputArr.eq(0).html(inputArr[1]);
                outputArr.eq(1).html(inputArr[0]);
                outputArr.eq(2).html(inputArr[2]);
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
        updateDettMavrav = function ($page) {
            var outputArr = $page.find('.saldoVal');
            outputArr.eq(0).html($('#selectMavrav').val());
            outputArr.eq(1).html($('#codiceMavrav').val());
            outputArr.eq(2).html(formattaNumeriOutput($('#inputImportoMavrav').val().replace(',', '.')));
            outputArr.eq(3).html($('#datepicker3').val());
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
        updateSogliaCarta = function (tipo) {
            var importo = limitiCarteArr[tipo];
            $('#inputImportoPrepagata, #inputImportoPrepagataContatto').attr('data-tooltip', 'importo massimo ' + importo + ' &euro;');
            maxImpCarte = importo;
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
        updateBollo = function (type) {
            // Chiamata per controllo e update
            var url = '/WsPaymentVehicleTaxVerifyPDA.do',
                AjaxUrl = (!isLibrerie()) ? cgi_script + '/banking' + url : pathLibrerie + pathSportello + url.replace(/\.(do|action)(\?)?/i, '.php$2'),
                // Assembla i parametri per la richiesta
                parameters = {
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
            jqAJAXCall('post', 'json', AjaxUrl, function (data) {
                // Riceve e popola i dati del riepilogo per il pagamento bollo auto
                var testData = isJsonCallFailed(data);
                hideLoadingOnPage($page);
                if (testData[0]) {
                    if (testData[1]) {
                        showCallError(testData[1], $page);
                    }
                } else {
                    dettBollo = data;
                    goToAuthPage('#bollo', type, "ACI", "ACI", false);
                }
            }, function (jqXHR, textStatus, errorThrown) {
                testErrLogin(jqXHR, textStatus, errorThrown);
                hideLoadingOnPage($page);
                if (debugLoading) {
                    printLog('*** updateBolloFailure: hideLoadingOnPage ' + getPageInfo($page));
                }
                showMsgOnPage({
                    wrapper: $page,
                    msgText: defaultError,
                    boxClass: 'negativo'
                });
                loadDataFailure();
            }, parameters);
        };
        getBen = function () {
            var $inputBen = $('#inputBen');
            return $inputBen.comboboxPlus('isSelected') ? $inputBen.comboboxPlus('getSelection').split('|')[0] : $inputBen.comboboxPlus('getQuery');
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
                $inputBenCellulareVal = $inputBenCellulare.comboboxPlus('getValue'),
                tmpArr, inputArr;
            if ($('#boxBenEsistenteCell').css('display') !== 'none') {
                tmpArr = $inputBenCellulareVal.split('|');
                inputArr = [tmpArr[0], tmpArr[1], tmpArr[2]];
            } else {
                tmpArr = $inputBenCellulareVal.val();
                inputArr = [$('#inputOperCellulare').val(), tmpArr.substr(0, 3), tmpArr.substr(3)];
            }
            tmpArr = $('#inputImportoCellulare').val().split('|');
            inputArr.push(tmpArr[0]);
            inputArr.push(tmpArr[1]);
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
        getInputMavrav = function () {
            var inputArrMavrav, valImp, valDec;
            valImp = $('#inputImportoMavrav').val();
            valDec = valImp.split(',')[1];
            if (valImp.indexOf(',') === -1) {
                valDec = '00';
            } else if (valImp.indexOf(',') !== -1 && valDec.toString().length === 1) {
                valDec += '0';
            }
            inputArrMavrav = [$('#codiceMavrav').val(), valImp.split(',')[0], valDec, $('#selectMavrav').val().toUpperCase(), $('#datepicker3').val()];
            return inputArrMavrav;
        };
        getContoSelezionato = function () {
            return contoSelezionato;
        };
        initDatiIniziali = function (data) {
            var $data, $xmlNode, $selectConti;
            if (isXmlCallFailed(data)[0]) {
                loadDataFailure();
            } else {
                $data = $(data);
                updateAuthCode($data);
                // Strong Authentication
                if (!isLibrerie || !datiUtente.auth) {
                    $data.find('strongAuth').each(function () {
                        var val = $(this).attr('val');
                        if (val === 'F' || val === 'A') {
                            strongAuthData.type = val;
                            strongAuthData.attempts = isLibrerie ? 10 : 30;
                            strongAuthData.interval = 1000;
                            $data.find('timerPushStrong').each(function () {
                                var attempts = $(this).attr('attempts'),
                                    interval = $(this).attr('interval');
                                if (typeof attempts !== "undefined") {
                                    strongAuthData.attempts = 1 * attempts;
                                }
                                if (typeof interval !== "undefined") {
                                    strongAuthData.interval = 1 * interval;
                                }
                            });
                            return false;
                        }
                    });
                    $('#selectAuth').prop('disabled', false).val(strongAuthData.type.toLowerCase());
                } else {
                    if (datiUtente.auth !== 'n') {
                        strongAuthData.type = datiUtente.auth.toUpperCase();
                        strongAuthData.attempts = isLibrerie ? 10 : 30;
                        strongAuthData.interval = 1000;
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
                ctrlOTP = ($data.find('ctrlOTP').attr('val') === 'true');
                $xmlNode = $data.find('datiCC');
                $xmlNode.each(function () {
                    var $item = $(this);
                    ibanArr[$item.attr('numero')] = $item.attr('iban');
                });
                $selectConti = $('#conti');
                contoSelezionato = $selectConti.val();
                $('#iban').html(ibanArr[contoSelezionato]);
                $('#linkMovimenti').attr('href', dynamicLinks.linkMovimenti + contoSelezionato + "&cf=" + Math.random());
                $selectConti.change(function () {
                    var $contoSel = $(this);
                    contoSelezionato = $contoSel.val();
                    $('#iban').html(ibanArr[contoSelezionato]);
                    $('#linkMovimenti').attr('href', dynamicLinks.linkMovimenti + contoSelezionato + "&cf=" + Math.random());
                    collapseAccordion();
                    closeContatti();
                    updateDashboardData();
                    loadMovDispo();
                });
                bonificoDateArr.length = 0; //
                $data.find('dataValuta bonifico data').each(function () {
                    bonificoDateArr.push($(this).attr('val'));
                });
                primaDataBollettino = $data.find('domainData primaDataBollettino').attr('val');
                $data.find('infoPrepagate>prepagata').each(function () {
                    var $item = $(this);
                    limitiCarteArr[$item.attr('tipo')] = $item.attr('limite');
                });
                maxImpBonifico = $data.find('bonificoIta:first').attr('maxImporto');
                if (isWebank) {
                    $('#inputImporto').attr('data-tooltip', 'importo massimo ' + maxImpBonifico + ' &euro;');
                } else {
                    $('#inputImporto').attr('data-tooltip', 'importo massimo ' + maxImpBonifico + ' &euro;, per modificarlo recati alla tua agenzia');
                }
                initDatePickers();
                initDatePickers2();
                loadDatePickersMavrav();
                loadMovDispo();
                $data.find('dataValuta bonifico data').each(function () {
                    bonificoDateArr.push($(this).attr('val'));
                });
                // Caricamento dati bollo auto
                loadAuto($data.find("auto"));
                $(window).trigger('resize');
            }
        };
        initDatePickers = function () {
            // Placeholder calendario con data odierna
            // *** Calendari ***
            $("#datepicker").mask("99/99/9999").datepicker({
                showOtherMonths: true,
                showOn: "button",
                prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                buttonImage: "/img/ret/pixel_trasp.gif",
                buttonImageOnly: true,
                minDate: bonificoDateArr[0],
                maxDate: bonificoDateArr[bonificoDateArr.length - 1],
                dateFormat: "dd/mm/yy",
                beforeShowDay: checkDateBonifico
            }).val(bonificoDateArr[0]);
            appendDatePickerIcon('datepicker');
            // *** |FINE| Calendari ***
        };
        initDatePickers2 = function () {
            // Placeholder calendario con data odierna
            // *** Calendari ***
            $("#datepicker2").mask("99/99/9999").datepicker({
                showOtherMonths: true,
                showOn: "button",
                prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                buttonImage: "/img/ret/pixel_trasp.gif",
                buttonImageOnly: true,
                minDate: 0,
                maxDate: "+1Y-1D",
                dateFormat: "dd/mm/yy",
                beforeShowDay: checkDateBonifico
            }).attr('readonly', 'readonly').val(primaDataBollettino);
            appendDatePickerIcon('datepicker2');
            // *** |FINE| Calendari ***
        };
        initDatePickersMavrav = function (data) {
            var testData = isJsonCallFailed(data);
            if (testData[0]) {
                loadDataFailure();
                if (testData[1]) {
                    showCallError(testData[1], ".buttonContent");
                }
            } else {
                if (data.date.length) {
                    $.each(data.date, function (index) {
                        mavravDateArr.push(data.date[index].data);
                    });
                    primaDataMavrav = mavravDateArr[0];
                    $("#datepicker3").mask("99/99/9999").datepicker({
                        showOn: "button",
                        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
                        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
                        buttonImage: "/img/ret/pixel_trasp.gif",
                        buttonImageOnly: true,
                        minDate: primaDataMavrav,
                        maxDate: mavravDateArr[mavravDateArr.length - 1],
                        dateFormat: "dd/mm/yy",
                        beforeShowDay: checkDateMavrav
                    }).val(mavravDateArr[0]);
                    appendDatePickerIcon('datepicker3');
                }
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
         */
        updateNazioni = function (data) {
            var $inputNazione;
            if (isJsonCallFailed(data)[0]) {
                loadDataFailure();
            } else {
                $inputNazione = $('#inputNazione').empty();
                $inputNazione.append($('<option>').val('').text('Seleziona'));
                if (data.listaPaesi.length) {
                    $.each(data.listaPaesi, function (index, pair) {
                        var selected = (pair.key.toLowerCase() === 'it');
                        $inputNazione.append($('<option>').val(pair.key).text(pair.value).prop('selected', selected));
                    });
                }
            }
        };
        updateRubriche = function (data) {
            var $inputBen,
                $inputBenPrepagata,
                $inputBenCellulare,
                $inputBenAtm,
                $contatti,
                $data;
            if (isXmlCallFailed(data)[0]) {
                loadDataFailure();
            } else {
                $data = $(data);
                /* Rubrica bonifico */
                rubricaIban.length = 0;
                $inputBen = $('#inputBen').html('');
                $inputBen.append($('<option selected="selected">').val('').text('digita o scegli da rubrica'));
                $contatti = $data.find('rubricaBeneficiari contatto');
                if ($contatti.length) {
                    rubricheOK.inputBen = true;
                    $contatti.each(function () {
                        var $contatto = $(this),
                            nazione, note, testoOption, noteMaxWidth, iban = $contatto.attr('IBAN');
                        if (check.isSepa(iban)) {
                            nazione = $contatto.attr('nazione') ? $contatto.attr('nazione') : '';
                            note = $contatto.attr('note');
                            noteMaxWidth = 52 - $contatto.attr('nome').length;
                            note = (note !== '') ? ((note.length > noteMaxWidth) ? ' (' + note.substr(0, (noteMaxWidth - 3)) + '...)' : ' (' + note + ')') : '';
                            testoOption = $contatto.attr('nome') + note;
                            $inputBen.append($('<option>').val($contatto.attr('nome') + '|' + iban).text(testoOption).attr('data-nazione', nazione));
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
                $contatti = $data.find('rubricaPrepagate contatto').not("[tipo='atm']").not("[tipo='poste']");
                //contattiRicaricabili = $contatti.attr('tipo','atm');
                if ($contatti.length) {
                    rubricheOK.inputBenPrepagata = true;
                    $contatti.each(function () {
                        var $contatto = $(this),
                            nome = $contatto.attr('nome'),
                            numeroCarta = $contatto.attr('numeroCarta');
                        $inputBenPrepagata.append($('<option>').val(numeroCarta + '|' + nome + '|' + $contatto.attr('tipo')).text(numeroCarta));
                        rubricaCarte.push(numeroCarta);
                        carteArr[numeroCarta] = {
                            'tipo': $contatto.attr('tipo')
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
                $contatti = $data.find('rubricaTelefonica contatto');
                if ($contatti.length) {
                    rubricheOK.inputBenCellulare = true;
                    $contatti.each(function () {
                        var $contatto = $(this),
                            testoOption = $contatto.attr('prefisso') + $contatto.attr('numero');
                        $inputBenCellulare.append($('<option>').val($contatto.attr('operatore') + '|' + $contatto.attr('prefisso') + '|' + $contatto.attr('numero') + '|' + $contatto.attr('nome')).text(testoOption));
                        rubricaCell.push($contatto.attr('prefisso') + $contatto.attr('numero'));
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
                $contatti = $data.find("rubricaPrepagate contatto[tipo ='atm']");
                if ($contatti.length) {
                    rubricheOK.inputBenAtm = true;
                    $contatti.each(function () {
                        var $contatto = $(this),
                            nome = $contatto.attr('nome'),
                            numeroTessera = $contatto.attr('numeroCarta');
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
         */
        updateContatti = function (data) {
            var $spPersonColArr = $('#boxContact .spPersonCol').removeClass('visible'),
                $spPersonAdd = $('.spPersonAdd:first').hide(),
                $selectAddContatto,
                addedContactArr = [];

            if (isJsonCallFailed(data)[0]) {
                loadDataFailure();
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
                                    nome, cognome,
                                    hasCartaPrepagata = false;
                                addedContactArr.push(contact.anagrafica.id);
                                if (contact.anagrafica.avatar_file !== '') {
                                    $spPersonCol.find('.spPersonImg, .spPersonOpsImg').css('background-image', 'url("/img/ico1gr_contatto_ico' + contact.anagrafica.avatar_file + '.gif")');
                                } else {
                                    $spPersonCol.find('.spPersonImg, .spPersonOpsImg').css('background-image', 'url("/wscmn/img/ico1gr_contatto_icodef.gif")');
                                }
                                nome = $.trim(contact.anagrafica.nome);
                                cognome = $.trim(contact.anagrafica.cognome_rag_soc);
                                $spPersonCol.find('.spPersonFirstName, .spPersonOpsFirstName').html(nome);
                                $spPersonCol.find('.spPersonLastName, .spPersonOpsLastName').html(cognome);
                                $spPersonCol.find('.spPersonMod').attr('href', dynamicLinks.linkModContatto + contact.anagrafica.id + "&cf=" + Math.random());
                                if (contact.anagrafica.flg_rapporto) {
                                    $spPersonCol.find('.spPersonOpBonifico').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpBonifico').addClass('disabled');
                                }
                                if (contact.anagrafica.flg_telefono) {
                                    $spPersonCol.find('.spPersonOpCellulare').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpCellulare').addClass('disabled');
                                }
                                if (contact.anagrafica.flg_carta) {
                                    $.each(contact.carta, function () {
                                        if (this.tipoCarta !== 'poste') {
                                            hasCartaPrepagata = true;
                                            return false;
                                        }
                                    });
                                }
                                if (hasCartaPrepagata) {
                                    $spPersonCol.find('.spPersonOpPrepagata').removeClass('disabled');
                                } else {
                                    $spPersonCol.find('.spPersonOpPrepagata').addClass('disabled');
                                }
                                $spPersonCol.find('.spPersonOp').not('.disabled').find('.spPersonOpAdd').attr('href', dynamicLinks.linkModContatto + contact.anagrafica.id + "&cf=" + Math.random()).attr('title', 'Aggiungi altre informazioni al contatto per poterlo utilizzare in più operazioni');
                            }
                        );
                    }

                    rubricaAllContatti = data.rubricaAll;
                    newContactNum = 0;
                    $.each(rubricaAllContatti, function (index, contact) {
                        var name, opArr, ops;
                        if ($.inArray(contact.anagrafica.id, addedContactArr) === -1 && (contact.anagrafica.flg_rapporto || contact.anagrafica.flg_telefono || (contact.anagrafica.flg_carta > contact.anagrafica.flg_poste))) {
                            opArr = [];
                            if (contact.anagrafica.flg_rapporto) {
                                opArr.push('Bonifico');
                            }
                            if (contact.anagrafica.flg_telefono) {
                                opArr.push('Cellulare');
                            }
                            if (contact.anagrafica.flg_carta > contact.anagrafica.flg_poste) {
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
         */
        updateContatto = function (data) {
            var contatto, info, carte, $selectBox, $outputBox, $imgPreferito, noteMaxWidth, optionText, optionId, note,
                $spPersonAdd = $('.spPersonAdd');
            hideLoadingOnPage($spPersonAdd.find('.spPersonWrap'));
            $spPersonAdd.find('.spPersonOpsBox').addClass('open');

            if (isJsonCallFailed(data)[0]) {
                loadDataFailure();
            } else {
                contatto = data.rubrica[0];
                // IBAN
                info = contatto.rapporto;
                $selectBox = $('#selectSetIbanContatto');
                $outputBox = $('#outputSetIbanContatto');
                $imgPreferito = $('#imgPreferitoIbanContatto');

                if (info.length > 1) {
                    $selectBox.show()[0].options.length = 0;
                    $imgPreferito.attr('src', '/img/ico1gr_preferito.gif').show();
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
                    $imgPreferito.attr('src', '/img/ico1gr_preferito.gif').show();
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
                    $imgPreferito.attr('src', '/img/ico1gr_preferito.gif').show();
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
        // Chiamate RIA
        updateConti = function (data) {
            if (isCallFailed(data)) {
                if (data.errore !== '') {
                    caricaDatiFailure(window, 0, data.errore);
                } else {
                    caricaDatiFailure(window, 0);
                }
            } else {
                // Memorizzo la lista dei conti
                conti = data.conti;
                updateDashboardData();
                load();
            }
        };
        /**
         * @param data
         * @param data.contoTecnico
         * @param data.contoTecnico.saldo
         * @param data.contoTecnico.margine
         * @param data.contoTecnico.intestatario
         * @param data.contoDerivati
         * @param data.contoDerivati.saldo
         * @param data.contoDerivati.margine
         * @param data.contoCorrente
         * @param data.contoCorrente.saldo
         * @param data.contoCorrente.margine
         * @param data.contoDeposito
         * @param data.contoDeposito.saldo
         * @param data.contoDeposito.margine
         * @param data.lineeVincolate
         * @param data.lineeVincolate.totale
         * @param data.lineeVincolate.inScadenza
         * @param data.lineeVincolate.inScadenza.data
         */
        updateSaldi = function (data) {
            var $outputArr;
            if (!isMissingData(dashboardData.cc)) {
                $outputArr = $('#spDBCC .output');
                $outputArr.eq(0).html(formatEuro(data.contoCorrente.saldo, true) + ' &euro;');
                $outputArr.eq(1).html(formatEuro(data.contoCorrente.margine, true) + ' &euro;');
                if (!isMissingData(dashboardData.cd)) {
                    $outputArr = $('#spDBCD .output');
                    $outputArr.eq(0).html(formatEuro(data.contoDeposito.saldo, true) + ' &euro;');
                    $outputArr.eq(1).html(formatEuro(data.contoDeposito.margine, true) + ' &euro;');
                    $outputArr = $('#spDBLV .output');
                    $outputArr.eq(0).html(formatEuro(data.lineeVincolate.totale, true) + ' &euro;');
                    $outputArr.eq(1).html(data.lineeVincolate.inScadenza.data);
                }
            } else {
                $outputArr = $('#spDBCT .output');
                $outputArr.eq(0).html(formatEuro(data.contoTecnico.saldo, true) + ' &euro;');
                $outputArr.eq(1).html(formatEuro(data.contoTecnico.margine, true) + ' &euro;');
                $outputArr.eq(2).html(data.contoTecnico.intestatario);
            }
            if (!isMissingData(dashboardData.cder)) {
                $outputArr = $('#spDBDER .output');
                $outputArr.eq(0).html(formatEuro(data.contoDerivati.saldo, true) + ' &euro;');
                $outputArr.eq(1).html(formatEuro(data.contoDerivati.margine, true) + ' &euro;');
            }
        };
        updateDashboardData = function () {
            var idConto = $('#conti').val(),
                $spDBCT = $('#spDBCT'),
                $spDBCC = $('#spDBCC'),
                $spDBCDLV = $('#spDBCDLV'),
                $spDBDER = $('#spDBDER');
            dashboardData.reset();
            for (var i = 0; i < conti.length; ++i) {
                if (conti[i].cc === idConto || conti[i].ct === idConto) {
                    dashboardData.reset();
                    dashboardData.ct = conti[i].ct;
                    dashboardData.cc = conti[i].cc;
                    dashboardData.cd = conti[i].cd;
                    dashboardData.cder = conti[i].cder;
                    dashboardData.hasEvo = (!isMissingData(conti[i].hasEvo) && conti[i].hasEvo === 'true');
                    dashboardData.estero = (!isMissingData(conti[i].cc) && idConto.substr(0, 5) === '00399');
                    if (isMissingData(conti[i].carta)) {
                        dashboardData.carta = null;
                    } else {
                        dashboardData.carta = (conti[i].carta === "true");
                    }
                    if (isMissingData(conti[i].valuta)) {
                        dashboardData.valuta = 'EUR';
                    } else {
                        dashboardData.valuta = conti[i].valuta;
                    }
                    if (isMissingData(conti[i].hasFresh) && isMissingData(conti[i].hasNonSvinc)) {
                        dashboardData.hasNonSvinc = 'false';
                        dashboardData.promo = 'false';
                    } else {
                        dashboardData.hasNonSvinc = (conti[i].hasNonSvinc === "true");
                        dashboardData.promo = (conti[i].hasFresh === "true" || conti[i].hasNonSvinc === "true");
                    }
                    if (!isMissingData(conti[i].ct)) {
                        dettaglioSaldiConti[conti[i].ct] = false;
                    } else {
                        dettaglioSaldiConti[conti[i].cc] = false;
                    }
                }
            }
            /*
            -- Senza C/T --
            *** 1: C/C +DEP +DER
            *** 2: C/C +DEP (compreso Be 1)
            *** 3: C/C +DER
            *** 4: C/C
            
            -- Con C/T --
            *** 5: C/T +DER
            *** 6: C/T
            
            -- BPM --
            *** 7: C/C +EVO
            */
            dashboardData.calcolaTipoRapporto();
            switch (dashboardData.tipoRapporto) {
                case 1:
                    $spDBCT.hide();
                    $spDBCC.show();
                    $spDBCDLV.show();
                    $spDBDER.show();
                    break;
                case 2:
                    $spDBCT.hide();
                    $spDBCC.show();
                    $spDBCDLV.show();
                    $spDBDER.hide();
                    break;
                case 3:
                    $spDBCT.hide();
                    $spDBCC.show();
                    $spDBCDLV.hide();
                    $spDBDER.show();
                    break;
                case 5:
                    $spDBCT.show();
                    $spDBCC.hide();
                    $spDBCDLV.hide();
                    $spDBDER.show();
                    break;
                case 6:
                    $spDBCT.show();
                    $spDBCC.hide();
                    $spDBCDLV.show();
                    $spDBDER.show();
                    break;
                case 4:
                case 7:
                    $spDBCT.hide();
                    $spDBCC.show();
                    $spDBCDLV.hide();
                    $spDBDER.hide();
                    break;
            }
        };
        updateContentCC = function (data) {
            var $outputArr;
            if (isCallFailed(data)) {
                if (data.errore !== '') {
                    caricaDatiFailure(window, 1, data.errore);
                } else {
                    caricaDatiFailure(window, 1);
                }
            } else {
                if (dashboardData.tipoRapporto === 3) {
                    dashboardData.contoCorrente = {
                        fido: data.fido,
                        margine: data.margine,
                        saldo: data.saldo,
                        dataMargine: data.dataMargine,
                        custodiaTitoli: data.custodiaTitoli
                    };
                } else if (dashboardData.tipoRapporto === 2 && !isWebank) {
                    dashboardData.contoCorrente.fido = data.fido;
                    if (!isMissingData(data.lv)) {
                        dashboardData.contoCorrente.lv = data.lv;
                    } else {
                        dashboardData.contoCorrente.lv = null;
                    }
                }
                $outputArr = $('#spDBCC .output');
                $outputArr.eq(2).text(data.intestatario);
                $outputArr.eq(3).text(data.numero);
                $outputArr.eq(4).text(data.iban);
            }
        };
        /**
         * @param data
         * @param data.errore
         * @param data.guadagnoNetto
         * @param data.intestatario
         * @param data.numero
         * @param data.tassi
         * @param data.testo
         */
        updateContentCD = function (data) {
            var $outputArr;
            if (isCallFailed(data)) {
                if (data.errore !== '') {
                    caricaDatiFailure(window, 1, data.errore);
                } else {
                    caricaDatiFailure(window, 1);
                }
            } else {
                $outputArr = $('#spDBCD .output');
                $outputArr.eq(2).html(formattaNumeriOutput(data.guadagnoNetto) + ' &euro;');
                $outputArr.eq(3).text(data.intestatario);
                $outputArr.eq(4).text(data.numero);
                var hashTassiKeys = [],
                    hashTassiVals = [],
                    hashTassiLength = 0;
                $.each(data.tassi, function (key, val) {
                    hashTassiLength += 1;
                    hashTassiKeys.push(key);
                    hashTassiVals.push(val);
                });
                if (isWebank) {
                    $('#numeroCD').html(data.numero);
                    $('#condizioniCD').html(data.testo);
                    $('#tassoCD').html(hashTassiKeys[0].replace('.', ','));
                } else {
                    var $boxTassi = $('.boxTassoMultiplo'),
                        $boxTasso;
                    $boxTassi.hide();
                    if (hashTassiLength === 1) {
                        $('.boxTassoMultiploDa, .boxTassoMultiploA').hide();
                        $boxTasso = $boxTassi.eq(0);
                        if (!$boxTasso.hasClass('unico')) {
                            $boxTasso.addClass('unico');
                        }
                        $boxTasso.find('.tassoMultiploCD:first').html(formattaTruncNumero(hashTassiKeys[0]));
                        $boxTasso.show();
                    } else {
                        $boxTasso = $boxTassi.eq(0);
                        var tassoKey = hashTassiKeys[0];
                        var tassoVal = hashTassiVals[0];
                        $('.boxTassoMultiploDa, .boxTassoMultiploA').show();
                        $boxTasso.removeClass('unico');
                        $boxTasso.find('.tassoMultiploCD:first').html(formattaTruncNumero(tassoKey));
                        $boxTasso.find('.boxTassoMultiploAVal:first').html(formattaNumero(tassoVal.a));
                        $boxTasso.show();
                        if (hashTassiLength === 2) {
                            $boxTasso = $boxTassi.eq(2);
                            tassoKey = hashTassiKeys[1];
                            tassoVal = hashTassiVals[1];
                            $boxTasso.find('.tassoMultiploCD:first').html(formattaTruncNumero(tassoKey));
                            $boxTasso.find('.boxTassoMultiploDaVal:first').html(formattaNumero(tassoVal.da));
                            $boxTasso.show();
                        } else {
                            $boxTasso = $boxTassi.eq(1);
                            tassoKey = hashTassiKeys[1];
                            tassoVal = hashTassiVals[1];
                            $boxTasso.find('.tassoMultiploCD:first').html(formattaTruncNumero(tassoKey));
                            $boxTasso.find('.boxTassoMultiploDaVal:first').html(formattaNumero(tassoVal.da));
                            $boxTasso.find('.boxTassoMultiploAVal:first').html(formattaNumero(tassoVal.a));
                            $boxTasso.show();
                            $boxTasso = $boxTassi.eq(2);
                            tassoKey = hashTassiKeys[2];
                            tassoVal = hashTassiVals[2];
                            $boxTasso.find('.tassoMultiploCD:first').html(formattaTruncNumero(tassoKey));
                            $boxTasso.find('.boxTassoMultiploDaVal:first').html(formattaNumero(tassoVal.da));
                            $boxTasso.show();
                        }
                    }
                }
            }
        };
        updateContentLV = function (data) {
            var $outputArr, nessunaLV, interessi;
            if (isCallFailed(data)) {
                if (data.errore !== '') {
                    caricaDatiFailure(window, 1, data.errore);
                } else {
                    caricaDatiFailure(window, 1);
                }
            } else {
                nessunaLV = isMissingData(data.inScadenza);
                interessi = nessunaLV ? '' : ((Math.round(data.inScadenza.rendimento * 1000) - Math.round(data.inScadenza.valore * 1000)) / 1000);
                // Sostituisco i dati
                $outputArr = $('#spDBLV .output');
                $outputArr.eq(2).html(nessunaLV ? 'ND' : formattaNumeriOutput(data.inScadenza.valore) + ' &euro;');
                $outputArr.eq(3).html(nessunaLV ? 'ND' : formattaNumeriOutput(interessi) + ' &euro;');
            }
        };
        /**
         * @param data
         * @param data.errore
         * @param data.margineImpegnato
         * @param data.profitLoss
         */
        updateContentCDER = function (data) {
            var $outputArr;
            if (isCallFailed(data)) {
                if (data.errore !== '') {
                    caricaDatiFailure(window, 1, data.errore);
                } else {
                    caricaDatiFailure(window, 1);
                }
            } else {
                // Sostituisco i dati
                $outputArr = $('#spDBDER .output');
                $outputArr.eq(2).html(formattaNumeriOutput(data.margineImpegnato) + ' &euro;');
                $outputArr.eq(3).html(formattaNumeriOutput(data.profitLoss) + ' &euro;');
            }
        };
        /**
         *
         * @param data
         * @param data.movTab
         * @param data.movTab.intest
         * @param data.movTab.saldoC
         * @param data.movTab.saldoD
         * @param data.movTab.lista
         */
        updateTabMov = function (data) {
            var $bxsliderMovBox = $('#bxsliderMovBox'),
                $boxErr = $('#errMovMsg'),
                $boxesito = $('#noMovMsg'),
                $spBar = $('#movContent .spBar');
            if (isCallFailed(data)) {
                $boxErr.show();
                $boxesito.hide();
                $bxsliderMovBox.hide();
                $spBar.hide();
                loadDataFailure();
            } else {
                var $tbody = $bxsliderMovBox.find('tbody').empty(),
                    movNum = data.movTab.lista.length,
                    $datiGraficiArr = $('#datiGrafici .output');
                movDetailArr = {};
                if (!isRespOK) {
                    $('#intestatario').html(data.movTab.intest);
                    $('#saldo').html(formatEuro(data.movTab.saldoD, true) + ' &euro;');
                }
                $datiGraficiArr.eq(0).html(contoSelezionato);
                $datiGraficiArr.eq(1).html(formatEuro(data.movTab.saldoC, true) + ' &euro;');
                $datiGraficiArr.eq(2).html(formatEuro(data.movTab.saldoD, true) + ' &euro;');
                if (movNum) {
                    $boxErr.hide();
                    $boxesito.hide();
                    $bxsliderMovBox.show();
                    $spBar.show();
                    $.each(data.movTab.lista,
                        /**
                         *
                         * @param index
                         * @param mov
                         * @param mov.descB
                         * @param mov.dataC
                         * @param mov.hasDescE
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
                            descBText = (!mov.hasDescE) ? descB : $('<a>', {
                                href: '#!',
                                'id': 'linkMovDetail' + mov.id,
                                'data-id': mov.id
                            }).html(descB);
                            $tdArr.eq(0).html(mov.dataC.substr(0, 6) + mov.dataC.substr(8));
                            $tdArr.eq(1).html($('<div class="spTdDesc"></div>').append(descBText));
                            $tdArr.eq(2).html(formatEuro(mov.val, true));
                            $tbody.append($tr);
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
         */
        updateTabDispo = function (data) {
            var $bxsliderDispoBox = $('#bxsliderDispoBox'),
                $boxErr = $('#errDispoMsg'),
                $boxesito = $('#noDispoMsg'),
                $spBar = $('#dispoContent .spBar');
            if (isJsonCallFailed(data)[0]) {
                $boxErr.show();
                $boxesito.hide();
                $bxsliderDispoBox.hide();
                $spBar.hide();
                loadDataFailure();
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
                            dettLink = ($.trim(dettLink) !== '') ? $(dettLink).filter('a:first').attr('href') : '';
                            // Correzione link bonifico estero
                            if (dettLink.indexOf('WsSepaBoeApp') !== -1) {
                                dettLink = dettLink.replace('tabId=&', 'tabId=nav_priv_wbx_sportello&').replace('OBSKEY=&', 'OBSKEY=nav_priv_wbx_esito_disp_on_line_new&');
                            }
                        }
                        $descBText = $('<a>', {
                            href: '#!',
                            'id': 'linkDispoDetail' + index,
                            'data-id': index,
                            'data-link': dettLink,
                            'data-desc': esito.desc.replace('&#160;', ''),
                            'data-info': esito.info
                        }).html(esito.tipo);
                        $tdArr.eq(0).html(esito.data.substr(0, 8));
                        $tdArr.eq(1).html($('<div class="spTdDesc"></div>').append($descBText));
                        $tdArr.eq(2).html(esito.stato.replace('&#160;', ''));
                        $tdArr.eq(3).html(formatEuro($.trim(esito.importo.replace('&#160;', '').replace('&euro;', '').replace('.', '').replace(',', '.')), true));
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
        /**
         * @param data
         * @param data.descExt
         * @param data.descE
         * @param id
         */
        updateMovDetail = function (data, id) {
            var dett;
            if (isCallFailed(data)) {
                loadDataFailure();
            } else {
                dett = data.descExt[0];
                movDetailArr[id] = dett.descE;
                addMovDetail(id, dett.descE);
            }
            isLoadingMovData = false;
        };
        updateDispoDetail = function (data, id) {
            var $link,
                dettDesc = '',
                dettLink;
            if (isCallFailed(data)) {
                loadDataFailure();
            } else {
                $link = $('#linkDispoDetail' + id);
                dettLink = $link.attr('data-link');
                $.each(data, function (key, value) {
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
            $('#linkMovDetail' + id).closest('tr').addClass('master').after($('<tr>', {
                id: 'movDetail' + id,
                'class': 'detail'
            }).append($('<td>', {
                'colspan': 3
            }).html(dettDesc)));
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
            'isBolloPresaVisione': isBolloPresaVisione,
            'isStrongAuth': isStrongAuth,
            'isApp': isApp,
            // Metodi
            'init': init,
            'hasWebankIban': hasWebankIban,
            'changePage': changePage,
            'goToPrevPage': goToPrevPage,
            'goToNextPage': goToNextPage,
            'goToAuthPage': goToAuthPage,
            'resetCarousel': resetCarousel,
            'saldoExpand': saldoExpand,
            'saldoCollapse': saldoCollapse,
            'showMsgOnPage': showMsgOnPage,
            'hideMsgOnPage': hideMsgOnPage,
            'showLoadingOnPage': showLoadingOnPage,
            'hideLoadingOnPage': hideLoadingOnPage,
            'showCallError': showCallError,
            'loadTagliTel': loadTagliTel,
            'otpRequest': otpRequest,
            'tagliTelRequest': tagliTelRequest,
            'checkCartaRequest': checkCartaRequest,
            'checkBollettino': checkBollettino,
            'sendBonifico': sendBonifico,
            'sendPrepagata': sendPrepagata,
            'sendCellulare': sendCellulare,
            'sendBollettino': sendBollettino,
            'sendBollo': sendBollo,
            'sendAtm': sendAtm,
            'sendMavrav': sendMavrav,
            'loadContatto': loadContatto,
            'addContatto': addContatto,
            'deleteContatto': deleteContatto,
            'updateDettBonifico': updateDettBonifico,
            'updateDettPrepagata': updateDettPrepagata,
            'updateDettCellulare': updateDettCellulare,
            'updateDettBollettino': updateDettBollettino,
            'updateDettAtm': updateDettAtm,
            'updateSogliaCarta': updateSogliaCarta,
            'updateBollettino': updateBollettino,
            'updateBollettinoBis': updateBollettinoBis,
            'resetForms': resetForms,
            'getIsRespOK': getIsRespOK,
            'getMaxImpCarte': getMaxImpCarte,
            'getMaxImpBonifico': getMaxImpBonifico,
            'getPrimaDataBollettino': getPrimaDataBollettino,
            'getPrimaDataMavrav': getPrimaDataMavrav,
            'getBonificoDate': getBonificoDate,
            'getContoSelezionato': getContoSelezionato,
            'getContattoInfo': getContattoInfo,
            'setContatto': setContatto,
            'getIBAN': getIBAN,
            'checkTagli': checkTagli,
            'checkMavrav': checkMavrav,
            'updateDettMavrav': updateDettMavrav,
            'updateDettBollo': updateDettBollo,
            'checkBolloCommissioni': checkBolloCommissioni,
            'showWarningQuestion': showWarningQuestion,
            'getStaticLink': getStaticLink,
            'updateBollo': updateBollo,
            'loadContentCT': loadContentCT,
            'loadContentCC': loadContentCC,
            'loadContentCD': loadContentCD,
            'loadContentLV': loadContentLV,
            'loadContentCDER': loadContentCDER,
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
        $bxsliderServ = $('#bxsliderServ'),
        $inputBen = $('#inputBen').comboboxPlus({ appendId: 'Input' }),
        $inputBenPrepagata = $('#inputBenPrepagata').comboboxPlus({ appendId: 'Input' }),
        $inputBenCellulare = $('#inputBenCellulare').comboboxPlus({ appendId: 'Input' }),
        $inputBenAtm = $('#inputBenAtm').comboboxPlus({ appendId: 'Input' }),
        numCellette = $bxsliderServ.find(".spbtnPromo").length,
        rubricaWarning = '<strong>Aggiorna l\'Iban dei conti correnti Webank salvati in rubrica.</strong><br><br>' + 'Vai alla pagina &laquo;rubrica&raquo;: puoi aggiornare <strong>automaticamente</strong> gli ' + '<strong>Iban</strong> dei contatti con conto corrente Webank con quello <strong>nuovo</strong> da utilizzare.<br><br>',
        // Metodi
        handleClick = function (event, element) {
            event.stopPropagation();
            return $(element).trigger('blur');
        };
    //endregion

    //region INIT
    // Inizializzo l'oggetto sportello
    sportello.init();
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
            nazione = (nazione !== '') ? nazione : iban.substr(0, 2);
            $('#inputNazione').val(nazione);
            $inputIBAN.val('').hide();
            $('#outputIBAN').html(iban).show();
            $('#salvaContatto').prop('checked', false).prop('disabled', true);
            if (!sportello.isStrongAuth()) {
                $('#bonificoForm .otpMsg').hide();
                $('#bonificoPage1Submit').attr('data-type', 'Pin32');
            } else {
                $('#bonificoPage1Submit').attr('data-type', 'Strong');
            }
        } else {
            if (!$inputIBAN.is(':visible')) {
                $inputIBAN.val('').show();
                $('#outputIBAN').empty().hide();
                $('#inputNazione').val('');
            }
            $('#salvaContatto').prop('disabled', false);
            if (!sportello.isStrongAuth()) {
                $('#bonificoForm .otpMsg').show();
                $('#bonificoPage1Submit').attr('data-type', 'Otp');
            } else {
                $('#bonificoPage1Submit').attr('data-type', 'Strong');
            }
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
            tipoHTML = tipo === 'jeans' ? 'Carta Je@ns' : 'Carta Kje@ns';
            $inputTypePrepagata.val('').hide();
            $('#outputTypePrepagata').attr('data-tipo', tipo).html(tipoHTML).show();
            $('#boxIntestPrepagata').show();
            $('#outputIntestPrepagata').html(valArr[1]);
            $('#salvaContattoPrepagata').prop('checked', false).prop('disabled', true);
            if (!sportello.isStrongAuth()) {
                $('#prepagataForm .otpMsg').hide();
                $('#prepagataPage1Submit').attr('data-type', 'Pin32');
            } else {
                $('#prepagataPage1Submit').attr('data-type', 'Strong');
            }
        } else {
            if (!$inputTypePrepagata.is(':visible')) {
                $inputTypePrepagata.val('').show();
                $('#outputTypePrepagata').attr('data-tipo', '').empty().hide();
                $('#boxIntestPrepagata').hide();
                $('#outputIntestPrepagata').empty();
            }
            tipo = $inputTypePrepagata.val();
            $('#salvaContattoPrepagata').prop('disabled', false);
            if (!sportello.isStrongAuth()) {
                $('#prepagataForm .otpMsg').show();
                $('#prepagataPage1Submit').attr('data-type', 'Otp');
            } else {
                $('#prepagataPage1Submit').attr('data-type', 'Strong');
            }
        }
        setImportoPrepagata(tipo);
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
            if (!sportello.isStrongAuth()) {
                $('#cellulareForm .otpMsg').hide();
                $('#cellularePage1Submit').attr('data-type', 'Pin32');
            } else {
                $('#cellularePage1Submit').attr('data-type', 'Strong');
            }
        } else {
            if (!$inputIntestCellulare.is(':visible')) {
                $inputIntestCellulare.val('').show();
                $('#outputIntestCellulare').empty().hide();
                $('#inputNazione').val('');
            }
            $('#inputOperCellulare').val('0').prop('disabled', false);
            if (!sportello.isStrongAuth()) {
                $('#cellulareForm .otpMsg').show();
                $('#cellularePage1Submit').attr('data-type', 'Otp');
            } else {
                $('#cellularePage1Submit').attr('data-type', 'Strong');
            }
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
            if (!sportello.isStrongAuth()) {
                $('#atmFormBis .otpMsg').hide();
                $('#atmPage1BisSubmit').attr('data-type', 'Pin32');
            } else {
                $('#atmPage1BisSubmit').attr('data-type', 'Strong');
            }
        } else {
            if (!$inputIntestAtm.is(':visible')) {
                $inputIntestAtm.val('').show();
                $('#outputIntestAtm').empty().hide();
            }
            $('#salvaContattoAtm').prop('disabled', false);
            if (!sportello.isStrongAuth()) {
                $('#atmFormBis .otpMsg').show();
                $('#atmPage1BisSubmit').attr('data-type', 'Otp');
            } else {
                $('#atmPage1BisSubmit').attr('data-type', 'Strong');
            }
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

    function getOpSettings(prefix) {
        var opSettings = {
            suffix: ''
        };
        switch (prefix) {
            case '#bonifico':
                opSettings.otpType = "BON";
                opSettings.pollingType = "SEP";
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
                opSettings.otpType = opSettings.pollingType = "MAV";
                opSettings.sendFunc = sportello.sendMavrav;
                break;
        }
        return opSettings;
    }

    function checkForm(prefix, isContatto) {
        var formOK;
        switch (prefix) {
            case '#bonifico':
                formOK = check.bonifico(sportello.getMaxImpBonifico(), isContatto);
                break;
            case '#prepagata':
                formOK = check.prepagata(sportello.getMaxImpCarte(), isContatto);
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
        var settings;
        settings = getOpSettings(prefix);

        $(prefix + 'Page1' + settings.suffix + 'Submit').click(function (event) {
            var $el = handleClick(event, this),
                formOK = checkForm(prefix, false);
            if (formOK) {
                if (prefix === '#prepagata') {
                    sportello.checkCartaRequest($el.attr('data-type'));
                } else if (prefix === '#bollettino') {
                    sportello.checkBollettino($el.attr('data-type'));
                } else if (prefix === '#bollo') {
                    if (!sportello.isBolloPresaVisione()) {
                        sportello.checkBolloCommissioni($el.attr('data-type'));
                    } else {
                        sportello.updateBollo($el.attr('data-type'));
                    }
                } else {
                    sportello.goToAuthPage(prefix, $el.attr('data-type'), settings.otpType, settings.pollingType, false);
                }
            }
        });

        // PIN32
        $(prefix + 'Page2SubmitPin32').click(function (event) {
            handleClick(event, this);
            if (check.pin(prefix)) {
                settings.sendFunc('Pin32');
            }
            return false;
        });

        // OTP
        $(prefix + 'Page2SubmitOtp').click(function (event) {
            handleClick(event, this);
            if (check.otp(prefix)) {
                settings.sendFunc('Otp');
            }
            return false;
        });

        // STRONG
        $(prefix + 'Page2SubmitToken, ' + prefix + 'Page2SubmitAppKO').click(function (event) {
            handleClick(event, this);
            if (check.token(prefix)) {
                if ($(this).attr('id') === prefix + 'Page2SubmitAppKO') {
                    settings.sendFunc('Strong', false, true);
                } else {
                    settings.sendFunc('Strong', false, false);
                }
            }
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
            if (oggi.format('dd/mm/yyyy') === $('#datepicker2').val()) {
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
        var $el = handleClick(event, this);
        if (check.atm()) {
            sportello.checkTagli($el.attr('data-type'));
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
        $wrap.find('.icon-trash_filled').click(function () {
            sportello.hideMsgOnPage($wrapArr);
            sportello.showMsgOnPage({
                wrapper: $wrap,
                msgText: 'Vuoi eliminare questo contatto dalla rubrica?',
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
        var settings,
            classPrefix = getClassPrefix(prefix);
        settings = getOpSettings(prefix);

        $(classPrefix + 'Page1' + settings.suffix + 'Submit').click(function (event) {
            var $el = handleClick(event, this);
            if (checkForm(prefix, true) && !isMoving) {
                isMoving = true;
                if (prefix === '#prepagata') {
                    sportello.checkCartaRequest($el.attr('data-type'), true);
                } else {
                    sportello.goToAuthPage(prefix, $el.attr('data-type'), settings.otpType, settings.pollingType, true);
                }
                setTimeout(function () {
                    isMoving = false;
                }, 250);
            }
        });

        // PIN32
        $(classPrefix + 'Page2SubmitPin32').click(function (event) {
            handleClick(event, this);
            if (check.pin(prefix, true)) {
                settings.sendFunc('Pin32', true);
            }
            return false;
        });

        // STRONG
        $(classPrefix + 'Page2SubmitToken, ' + prefix + 'Page2SubmitAppKO').click(function (event) {
            handleClick(event, this);
            if (check.token(prefix, true)) {
                if ($(this).attr('id') === prefix + 'Page2SubmitAppKO') {
                    settings.sendFunc('Strong', true, true);
                } else {
                    settings.sendFunc('Strong', true, false);
                }
            }
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
    $('#inputImporto, #inputImportoPrepagata, #inputImportoBollettino, #inputImportoGiro, #inputImportoPrepagataContatto, #inputImportoContatto, #inputImportoMavrav').keypress(cleanImport);

    function setImportoPrepagata(tipo) {
        var $inputImportoPrepagata = $('#inputImportoPrepagata');
        if (tipo !== '') {
            sportello.updateSogliaCarta(tipo);
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
    });
    $('#inputBollettinoWhite').bind("click", function () {
        sportello.updateBollettino();
        $('#boxBollettino, #boxBollettinoWhite').show();
        $('#boxBollettinoPre').hide();
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
                $('#imgPreferito' + tipo + 'Contatto').attr('src', '/img/ico1gr_preferito.gif');
            } else {
                $('#imgPreferito' + tipo + 'Contatto').attr('src', '/img/ico1gr_preferitoOff.gif');
            }
        }
    });
    $('#spDashboard .spDetail').click(function (event) {
        var $el = handleClick(event, this),
            text = $el.text(),
            spDB = $el.closest('.spDB'),
            spDBId;
        if (text === 'Dettagli') {
            $el.hide();
            sportello.showLoadingOnPage($('#spDashboard'));
            spDBId = spDB.attr('id');
            switch (spDBId) {
                case 'spDBCD':
                    sportello.loadContentCD(spDB);
                    break;
                case 'spDBLV':
                    sportello.loadContentLV(spDB);
                    break;
                case 'spDBCC':
                    sportello.loadContentCC(spDB);
                    break;
                case 'spDBCT':
                    sportello.loadContentCT(spDB);
                    break;
                case 'spDBDER':
                    sportello.loadContentCDER(spDB);
                    break;
            }
        } else {
            $el.hide();
            sportello.saldoCollapse(spDB);
        }
        return false;
    });
    $('#buttonBox input').keypress(function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            return false;
        }
    });
    $('.bonificoContattoPage1 .input-group-addon').click(function () {
        var $icon = handleClick(event, this).find('.icon-star_fill');
        if ($icon.hasClass('disabled')) {
            $icon.removeClass('disabled');
        } else {
            $icon.addClass('disabled');
        }
        return false;
    });
    if (sportello.getIsRespOK()) {
        // Layer op veloci
        $('#closeLayerOpVeloci').click(function () {
            $('#layerOpVeloci').hide();
            $('body').css('overflow', 'auto').trigger('resize');
        });
    }
    //endregion

    //region INIZIALIZZAZIONE WIDGET
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

    // CELLETTE
    if (numCellette > 0) {
        if (numCellette > 1) {
            $bxsliderServ.bxSlider({
                adaptiveHeight: true,
                infiniteLoop: false,
                touchEnabled: true,
                controls: false,
                useCSS: true,
                pagerSelector: $bxsliderServ,
                speed: 200
            });
        }
    } else {
        $bxsliderServ.append($("<div>").addClass("msg").html("<p>Al momento non ci sono promozioni attive</p>"));
    }
    //endregion
});
