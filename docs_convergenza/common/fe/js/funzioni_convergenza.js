/* global menuData, banca_utente, param_bancomat, document.forms.simulazioneAlicoStep2, ResizeSensor, wrp_script_direct */

/*** Tracciatura funzioni obsolete ***/
var traceOld = function (obj) {
    var traceText = ">> Funzione obs. -> ", fName = (obj) ? obj.toString() : "";
    console.log(traceText + fName);
};

/*** ESTENSIONE OGGETTO STRINGA ***/
/* Taglia un testo */
String.prototype.cut = function (number) {
    return (this.length > number) ? this.substring(0, number) + "..." : this;
};

/*** ESTENSIONE OGGETTO DATA ***/
Date.prototype.format = function (mask, utc) {
    return dateFormat(this, mask, utc);
};

// Aggiungere giorni mesi anni alla data
Date.prototype.addDays = function (d) {
    this.setDate(this.getDate() + d);

    return this;
};

// noinspection JSUnusedGlobalSymbols
Date.prototype.addWeeks = function (w) {
    this.addDays(w * 7);

    return this;
};

Date.prototype.addMonths = function (m) {
    var d = this.getDate();
    this.setMonth(this.getMonth() + m);

    if (this.getDate() < d) this.setDate(0);

    return this;
};

// noinspection JSUnusedGlobalSymbols
Date.prototype.addYears = function (y) {
    var m = this.getMonth();
    this.setFullYear(this.getFullYear() + y);

    if (m < this.getMonth()) {
        this.setDate(0);
    }

    return this;
};

Date.prototype.setZeroHour = function () {
    this.setHours(0);
    this.setMinutes(0);
    this.setSeconds(0);
    this.setMilliseconds(0);

    return this;
};

/*** FUNZIONE PER DETERMINARE IL VIEWPORT ***/
var isSmallDevice;

/* Verifica se il dispositivo è touchscreen */
var isTouch = ("ontouchstart" in document.documentElement);

/** * FUNZIONE CHECK E CONVERSIONE SOLO L' ID PER JQUERY SE NECESSARIO ** */
var jqc = function (element) {
    traceOld("jqc(element)");
    var returnVal = element;
    if (jQuery.type(element) === "string") {
        // Se non comincia con # o punto mette il #
        returnVal = (element.indexOf("#") !== 0) ? "#" + element : element;
    }
    return returnVal;
};

/* Verifica se si è in librerie */
var isLib = (location.href.indexOf("//convergenza.wefed.local") > 0);

/* Verifica se schermo minore di... */
var viewdim = function () {
    var e, a;

    if (!('innerWidth' in window)) {
        e = document.documentElement || document.body;
        a = 'client';
    } else {
        e = window;
        a = 'inner';
    }

    return { width: e[a + 'Width'], height: e[a + 'Height'] };
};

// noinspection JSUnusedGlobalSymbols
var findSmartDevice = function () {
    isSmallDevice = viewdim().width < 768;
};

// Rileva il massimo z-index in tutto il documento corrente
var getNextHighestZindex = function () {
    var highestIndex = 0;
    $("div").each(function () {
        var zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
        if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) {
            highestIndex = zInd;
        }
    });
    return (highestIndex + 1);
};

/* VARIABILI E CONTROLLI PER DISPOSITIVI */
var resizeModalDevice = function (modalEl) {
    
    //if(isSmallDevice) {
    modalEl.find('.modal-content').css({
        'max-height': viewdim().height * 0.9,
        'overflow-y': 'auto',
        'overflow-x': 'visible'
    });
    modalEl.css('width', viewdim().width);
    modalEl.find('.modal-dialog').css('width', viewdim().width - 40);
    //modalEl.css('overflow','hidden');
    //}
};

/* assegna il maggior z-index al modal */
var setZindexModal = function () {
    var nZindex = getNextHighestZindex();
    $('.modal').on('show.bs.modal', function () {
        $(this).css('z-index', nZindex + 1);
        if (!$(this).hasClass("modal-footer-fixed")) resizeModalDevice($(this));
    })
        .on('shown.bs.modal', function () {
            $('.modal-backdrop').css('z-index', nZindex);
        })
        /*.on('show.bs.modal', function () {
            $(this).appendTo('body');
        })*/
        .on('hide.bs.modal', function () {
            $('body').removeClass('modal-open');
        });
};

var setModalLeft = function (elModal) {
    var isOpenedModal = false;
    $(elModal)
        .on('shown.bs.modal', function () {
            isOpenedModal = true;
            var buttonCloseLeft = $('.close-left'),
                buttonCloseRight = $('.close-right'),
                buttonCloseTop = $('.close-top'),
                positionModalClosed = -($('.modal.in').find('.modal-dialog').innerWidth()) + 'px'; //definisco posizione per chiusura modale a sinistra/destra
            var arrowBack = '';
            // var modalisOpened = $('.modal').hasClass('in');
            /* definisco posizione di partenza delle modali left e right*/
            $('.slide-right').addClass('right').find('.modal-dialog').css('right', -$(this).innerWidth());
            $('.slide-left').addClass('left').find('.modal-dialog').css('left', -$(this).innerWidth());
            //aggiungo classe left a primo overlayer
            elModal.addClass('left');
            buttonCloseLeft.click(function () {
                $('.modal.in.right').removeClass('right').addClass('left');
                $('.modal.left.in').find('.modal-dialog').css('left', positionModalClosed); //animazione verso sinistra
                $('.modal-backdrop').remove(); //tolgo sfondo per preparare animazione successiva
                $('body').addClass('modal-open');
            });
            buttonCloseRight.click(function () {
                $('.modal.in.slide-right.left .modal-dialog').css('left', 'none');
                $('.modal.in.slide-right.left').removeClass('left').addClass('right');
                $('.modal-backdrop').remove();
                $('.modal').animate({ scrollTop: 0 });
            });
            buttonCloseTop.click(function () {
                $('.modal.in.fade.right .modal-dialog').css('right', 'none');
                $('.modal.in.fade.right').removeClass('right');
                $('.modal.fade.left .modal-dialog').css('left', 'none');
                $('.modal.slide-right .modal-dialog').css('left', 'none');
                $('.modal.fade.left').removeClass('left');
            });
            //posizione freccia indietro finestra modale
            $('.slide-right.right')
                .on('show.bs.modal', function () {
                    arrowBack = $(this).find('.close.close-right');
                    setTimeout(function () {
                        arrowBack.css('opacity', 1);
                    }, 500);
                })
                .on('shown.bs.modal', function () {
                    $('body').addClass('modal-open');
                    isOpenedModal = true;
                    arrowBack.css({
                        top: arrowBack.closest('.modal-content').innerHeight() / 2 + 'px'
                    });
                });
            $('.left').on('shown.bs.modal', function () {
                $('body').addClass('modal-open');
            });
        })
        .on('hidden.bs.modal', function () {
            isOpenedModal = false;
        });
    //tap su div di oscuramento, il modale si chiude con effetto di default
    $(document).on('click', function (e) {
        var target = $(e.target),
            modalOpened = target.closest(".modal-content"),
            iconOpBtn = target.closest(".linkVai");
        if (!modalOpened.length && isOpenedModal && !iconOpBtn.length) {
            $('.modal.fade.right .modal-dialog').css('right', 0);
            $('.modal.fade.right').removeClass('right');
            $('.modal.fade.left .modal-dialog').css('left', 0);
            $('.modal.fade.left').removeClass('left');
            $('.modal.slide-right .modal-dialog').css('left', 'none');
        }
    });
};

/* funzione che prende il contenuto icona operativa e lo appende in modale orizzontale*/
var setOverlayerIconaOpertiva = function (contIconaOper) { /* Tolto parametro modalTitle perché non usato */
    //resizeModalDevice(contIconaOper);
    setZindexModal();
    contIconaOper.css("z-index", getNextHighestZindex());
    contIconaOper.modal("show");
    //prepara l'overlayer per diventare uno slider orizzontale
    setModalLeft(contIconaOper);
    contIconaOper.on('hidden.bs.modal', function () {
        $('.linkTooltip.over a').trigger('click');
    });
};

var setLoadingOnObject = function (idobj,idMessLoading, classToAdd) {
    traceOld("setLoadingOnObject()");
    var classToAdd = typeof classToAdd !=='undefined' ? 'loading ' + classToAdd : 'loading';
    $('#' + idobj).addClass(classToAdd);
    
    if(typeof(idMessLoading)!=='undefined') {
        $('#' + idobj).prepend($('#' + idMessLoading)); 
        $('#' + idMessLoading).show();
    }
};

var unsetLoadingOnObject = function (idobj,idMessLoading, classToRemove) {
    traceOld("unsetLoadingOnObject()");
    var classToRemove = typeof classToRemove !=='undefined' ? 'loading ' + classToRemove : 'loading';
    $('#' + idobj).removeClass(classToRemove);
    if(typeof(idMessLoading)!=='undefined') $('#' + idMessLoading).hide();
};

var setStatus = function (xml, _divId, _htmlCode) {
    var d;
    if (xml !== null) {
        if (xml.readyState === 4) {
            if (xml.status === 200) {
                d = _divId !== null ? document.getElementById(_divId) : null;
                if (d !== null) {
                    d.innerHTML = xml.responseText;
                }
            } else {
                alert("Errore durante l'invio dei dati: " + xml.statusText);
            }
        }
    } else {
        d = _divId !== null ? document.getElementById(_divId) : null;
        if (d !== null) {
            d.innerHTML = _htmlCode;
        }
    }
};

/* funzione per oscurare un elemento passandogli id*/
var obscurateElement = function (elementToCover) {
    var objElementToCover = $(elementToCover);
    if (objElementToCover.length > 0) {
        // Crea il layer che oscura l'oggetto
        var objLayer = $('<div class="element-obscurate" id="obscureElement">');
        objElementToCover.wrap('<div class="wrapper-obscurate">');
        objLayer.insertAfter(objElementToCover);
        // Imposta le dimensioni del layer a quelle dell'oggetto da oscurare
        var setStyleObscure = function () {
            var dimensions = { height: objElementToCover.height(), width: objElementToCover.width() },
                zIndexOsc = objElementToCover.css('zIndex') !== 'auto' ? parseInt(objElementToCover.css('z-index')) + 1 : 1;
            objLayer.css({
                width: dimensions.width + 'px',
                height: dimensions.height + 'px',
                zIndex: zIndexOsc
            });
        };
        setStyleObscure();
        $(window).resize(function () {
            setStyleObscure();
        });
    }
};

var unObscurateElement = function (elementCovered) {
    var objElementCovered = $(elementCovered);
    if (objElementCovered.length > 0) {
        objElementCovered.next('#obscureElement').eq(0).remove();
        objElementCovered.unwrap('.wrapper-obscurate');
    }
};

var viewBannerRetention = function (dataA, dataS) {
    var arrA = dataA.split("/"),
        arrS = dataS.split("/"),
        dataObjA = new Date(arrA[2], arrA[1] - 1, arrA[0]),
        dataObjS = new Date(arrS[2], arrS[1] - 1, arrS[0]).addDays(-15),
        todayObj = new Date();

    return (dataObjA <= todayObj && todayObj <= dataObjS);
};

/* gestione ordinamento quantità tabelle responsive*/
// noinspection JSUnusedGlobalSymbols
var fixQuant = function (a, b) {
    if (a === 'n.d.') {
        a = '0';
    }
    if (b === 'n.d.') {
        b = '0';
    }

    a = +a.split(' ')[0].replace(/\./g, '').replace(',', '.').replace('%', '');
    b = +b.split(' ')[0].replace(/\./g, '').replace(',', '.').replace('%', '');

    if (a > b) return 1;
    if (a < b) return -1;

    return 0;
};

// noinspection JSUnusedGlobalSymbols
var fixDate = function (a, b) {
    var day, month, year, ora, minuti, secondi, valueA, valueB;

    day = parseInt(a.substr(0, 2), 10);
    month = parseInt(a.substr(3, 2), 10);
    year = parseInt(a.substr(6, 4), 10);
    ora = parseInt(a.substr(14, 12), 10);
    minuti = parseInt(a.substr(17, 14), 10);
    secondi = parseInt(a.substr(20, 17), 10);

    //valueA = (year * 10000 + (month + 1) * 100 + day);
    if (a.length > 10) {
        valueA = (year * 10000000000 + (month + 1) * 100000000 + day * 1000000 + ora * 10000 + minuti * 100 + secondi);
    } else {
        valueA = (year * 10000 + (month + 1) * 100 + day);
    }

    day = parseInt(b.substr(0, 2), 10);
    month = parseInt(b.substr(3, 2), 10);
    year = parseInt(b.substr(6, 4), 10);
    ora = parseInt(b.substr(14, 12), 10);
    minuti = parseInt(b.substr(17, 14), 10);
    secondi = parseInt(b.substr(20, 17), 10);

    if (a.length > 10) {
        valueB = (year * 10000000000 + (month + 1) * 100000000 + day * 1000000 + ora * 10000 + minuti * 100 + secondi);
    } else {
        valueB = (year * 10000 + (month + 1) * 100 + day);
    }

    return (valueA < valueB) ? -1 : (valueA > valueB) ? 1 : 0;
};

var callJSP = function (path, target, param, context) {
    GPS(path, target, param, 'callJSP', context);
};

var GPS = function (path, target, param, whoami, context) {
    var link = "";
    var pop_up_target = "";
    var pop_up_param = "";
    var larg = "";
    var alt = "";
    var calledURL;

    context = context || wrp_script;

    if (!target) {
        target = "_self"
    }
    if (!param) {
        param = ""
    } else if (param === "num_bca") {
        param = "&num_bca=" + banca_utente
    } else if (param === "param_notes") {
        param = "&param=" + param_bancomat
    }

    switch (whoami) {
        case "callJSP":
            if (param.indexOf("&") === 0)
                param = param.substring(1, param.length);
            link = context + path + "?" + param + "&BV_UseBVCookie=Yes&cf=" + Math.random();
            break;
        case "big_pop_JSP":
            if (path.indexOf(".asp") > -1) {
                link = path + param;
                larg = 800;
                alt = 605;
            } else {
                link = wrp_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
                larg = 450;
                alt = 445;
            }
            target = "_blank";
            pop_up_target = "mainwin";
            pop_up_param = "width=" + larg + ",height=" + alt + ",top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes";
            break;
        case "callNSFSSL":
            link = bpm_mailurl_ssl + path + param;
            break;
        case "callNSF":
            link = bpm_mailurl + path;
            break;
        case "callInfoFIN":
            link = sole_24h + "%3FURL%3D" + cgi_serverurl + wrp_script + "/%26XPID%3D" + tibco_code + param;
            target = "_blank";
            pop_up_target = "infoFIN";
            pop_up_param = "";
            break;
        case "callInfoFINOBS":
            calledURL = sole_24h + "/webankinfo/home.jsp%3FBV_UseBVCookie%3DYes%26URL%3D" + cgi_serverurl + wrp_script + "/%26Code%3D" + tibco_code + param;
            calledURL = sole_24h + "%3FURL%3D" + cgi_serverurl + wrp_script + "/%26XPID%3D" + tibco_code + param;
            link = wrp_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURL;
            target = "_blank";
            pop_up_target = "infoFIN";
            pop_up_param = "";
            break;

        case "callJSP_PF":
            link = cgi_serverurl + wrp_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
            break;
        case "callBANK":
            if (banca_utente === 4) {
                var ident = path.indexOf(".nsf");
                var len = path.length;
                if (ident > -1) {
                    var path_bv = path.substring(ident - 2, ident);
                    if (path_bv === "bv") {
                        path = path.substring(0, ident - 2) + "04" + path.substring(ident, len);
                    } else {
                        path = path.substring(0, ident) + "04" + path.substring(ident, len);
                    }
                    link = bpm_mailurl_ssl + path + param;
                }
            } else {
                link = bpm_mailurl_ssl + path + param;
            }
            break;
        case "callASPADB":
            calledURL = "https://www.frame222.it/" + path + "%3Fcod%3D" + ftCode;
            link = wrp_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURL + param;
            if (target === "yes") {
                link = link + "&UserId=" + cryp_adb;
            }
            target = "_blank";
            pop_up_target = "mainADB";
            pop_up_param = "top=1,left=1,status=yes,toolbar=yes,menubar=yes,resizable=yes,scrollbars=yes";
            break;
        case "callPFV_XP":
            calledURL = wrp_script + path + "%3FBV_UseBVCookie%3DYes" + param;
            link = wrp_script + "/wbOnetoone/ExtUrl.jsp?BV_UseBVCookie=Yes&cf=" + Math.random() + "&calledURL=" + calledURL;
            target = "_blank";
            pop_up_target = "pvfWindow";
            pop_up_param = "scrollbars=yes,status=yes,width=600,height=480";
            break;
        default:
            link = wrp_script + path + "?BV_UseBVCookie=Yes&cf=" + Math.random() + param;
            break;
    }

    if (target === "_self") {
        var ifr = $("#funzione");
        if (ifr.length) {
            ifr.attr('src', link);
        } else {
            window.location.href = link;
        }
    } else if (target === "_monoFrame") {
        window.location.href = link;
    }
    if (target === "_blank" && pop_up_param === "" && pop_up_target === "") {
        window.open(link);
    } else if (target === "_blank" && (pop_up_param !== "" || pop_up_target !== "")) {
        window.open(link, pop_up_target, pop_up_param)
    }
    if (target === "_top") {
        parent.top.location = link;
    }
};

var getAjaxRequest = function () {
    var ajax_request, i;

    if (window.ActiveXObject) {
        var mSoftVersions = [
            'MSXML2.DOMDocument.5.0', 'MSXML2.DOMDocument.4.0',
            'MSXML2.DOMDocument.3.0', 'MSXML2.DOMDocument.2.0',
            'MSXML2.DOMDocument', 'Microsoft.XmlDom',
            'Msxml2.XMLHTTP', 'Microsoft.XMLHTTP'
        ];

        for (i = 0; i < mSoftVersions.length; i++) {
            try {
                ajax_request = new ActiveXObject(mSoftVersions[i]);
            } catch (e) {
            }
        }
    } else if (!ajax_request &&
        typeof XMLHttpRequest !== 'undefined') {
        try {
            ajax_request = new XMLHttpRequest;
        } catch (e) {
        }
    } else {
        // noinspection JSUnresolvedVariable
        if (!ajax_request && window.createRequest) {
            try {
                ajax_request = window.createRequest;
            } catch (e) {
            }
        } else {
            ajax_request = false;
        }
    }

    return ajax_request;
};

var sendRequestxx = function (_divId, _sendTo, _params, _stateFunction, _waitHtml, xml) {
    // default
    if (_stateFunction === null)
        _stateFunction = function () {
            setStatus(xml, _divId, null);
        };

    if (!xml) {
        alert('Funzione non supportata.');
        return false;
    }

    if (_sendTo.length > 0) {
        // Chiamata asincrona
        xml.open('POST', _sendTo, true);
        xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xml.onreadystatechange = _stateFunction;
        setStatus(null, _divId, _waitHtml);
        xml.send(_params);
    }
};

var sendRequest = function (_divId, _sendTo, _params, _stateFunction, _waitHtml) {
    var myReq = getAjaxRequest();
    sendRequestxx(_divId, _sendTo, _params, _stateFunction, _waitHtml, myReq);
};

/** * LOG - Funzione per scrivere log sulla console del browser ** */
var printLog = function (msg) {
    if (typeof console !== 'undefined' && console.log) {
        console.log(msg);
    }
};

var impostaValoreSelect = function (idSelect, valore) {
    var el = $('#' + idSelect);
    if (el.length) {
        el.val(valore);
    }
};

/*** FRAMEWORK GESTIONE ERRORI ***/
/* Setta gli errori in un wrapper, una volta fornita una matrice */

/* Formato della matrice:
    field: "id" o oggetto direttamente
    text: "testo HTML dell'errore "
*/
var setHasErrors = function (errorMatrix, wrapper, classToAppend) {
    wrapper = $(wrapper);
    resetHasErrors(wrapper);
    if (errorMatrix.length) {
        $.each(errorMatrix, function (index, error) {
            setHasError(error.field, error.text, wrapper, classToAppend);
        });
    }
};

/* resetta tutti gli errori in un wrapper */
var resetHasErrors = function (wrapper) {
    wrapper = $(wrapper);
    wrapper.find(".requiredField, div[class*=\"col-\"]").removeClass('has-error');
    wrapper.find(".requiredField, div[class*=\"col-\"]").removeClass('has-alert');
    wrapper.find(".help-block.with-errors").remove();
};

/* Setta l'errore su di un singolo oggetto (campo o altro, risalendo al suo fieldset)*/
var setHasError = function (field, errortext, wrapper, classToAppend) {
    field = $(field);
    // Trova il primo parent contenente un etichetta
    var errorWrapper = $(field).closest(".requiredField", wrapper);
    var classToAppended = (typeof classToAppend == "undefined") ? 'has-error' : classToAppend;

    if (!errorWrapper.length) errorWrapper = $(field).closest("div:not(#contenuti)[class*=\"col-\"]", wrapper);

    errorWrapper.addClass(classToAppended);

    if (field.closest('.' + classToAppended).find('.with-errors').length === 0) {
        field.closest('.' + classToAppended).append('<span class="help-block with-errors">' + errortext + '</span>');
    }

    var htmlBody = $("html, body");
    var classToAppendedEl = $('.' + classToAppended);
    htmlBody.addClass('scrollableElement');
    if (classToAppendedEl.length > 0) {
        if ($('.webview').length > 0 || $('.porting').length > 0) {
            classToAppendedEl.eq(0).find('input').eq(0).trigger('focus');
        } else {
            htmlBody.stop().animate({ scrollTop: classToAppendedEl.eq(0).offset().top - $('.headerMobile').height() + 'px' }, "300", function () {
                classToAppendedEl.eq(0).find('input').eq(0).trigger('focus');
            });
        }
    }
};

/* Versioni vecchie messe per compatibilità */
var setErrors = function (errorMatrix, wrapper) {
    traceOld("setErrors()");
    setHasErrors(errorMatrix, wrapper);
};

var resetErrors = function (wrapper) {
    traceOld("resetErrors()");
    resetHasErrors(wrapper);
};

// noinspection JSUnusedGlobalSymbols
var setError = function (field, errortext, wrapper) {
    setHasError(field, errortext, wrapper);
};

// Attiva un pulsante e gli passa la funzione per l'onClick
var activeBtn = function (btn, func) {
    if (btn.hasClass('bottdis')) {
        var btnImgArr = btn.find('img');
        btnImgArr[0].src = '/WB/fe/img/btn_left_ar.gif';
        btnImgArr[1].src = '/WB/fe/img/btn_right_ar.gif';
        btn.removeClass('bottdis').find('a:first').click(func);
        btn.attr('title', '');
    }
};

// Attiva un pulsante e gli passa la funzione per l'onClick
// noinspection JSUnusedGlobalSymbols
var disactiveBtn = function (btn, title) {
    if (!btn.hasClass('bottdis')) {
        var btnImgArr = btn.find('img');
        btnImgArr[0].src = '/WB/fe/img/btndis_left.gif';
        btnImgArr[1].src = '/WB/fe/img/btndis_right.gif';
        btn.addClass('bottdis').find('a:first').off('click');
        btn.attr('title', title);
    }
};

// noinspection JSUnusedGlobalSymbols
var enableInput = function (container) {
    container = $(jqc(container));
    $("#" + container.attr('id') + " input:not([type=hidden])").prop('disabled', false).prev('.hovfin').hide();
};

var disableInput = function (container) {
    container = $(jqc(container));
    $("#" + container.attr('id') + " input:not([type=hidden])").prop('disabled', true);
};

// noinspection JSUnusedGlobalSymbols
var disableForm = function (form) {
    var cartimprontaListaArr = $('.cartimpronta_lista');
    disableInput(form);
    cartimprontaListaArr.each(function (index, item) {
        item = $(item);
        if (index === 0) activeAccBox(item, true);
        else activeAccBox(item, false);
    });
    activeBtn($('#questNext'), function () {
        $('form[name=simulazioneAlicoStep2]')[0].submit();
    });
};

/*funzione per fare il clear nei campi text dei form */
var clearInputText = function () {
    var inputClearable = $('input.clear-x[type="text"], input.clear-x[type="number"], input.clear-x[type="email"]');
    inputClearable.wrap('<div class="editable-input">');
    $('.editable-input').append('<span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i ></span>');
    var btnClearField = $('.editable-clear-x');
    btnClearField.each(function () {
        $(this).click(function () {
            $(this).closest('.editable-input').find('input').val('').focus();
        });
    });
    inputClearable.each(function () {
        $(this).focusin(function () {
            $('.editable-clear-x').hide();
            $(this).siblings('.editable-clear-x').show();
        });
    });
    ttinputOuterTap();
};

// Filtro input per numeri con due decimali dopo la virgola
var cleanImport = function (e) {
    var el = $(e.target),
        val = el.val(),
        key = e.which,
        isOK = true,
        varArr;
    if (!(/^\d*(,\d?)?$/).test(val)) {
        val = val.replace('.', ','); //sostituisco il punto con la virgola
        if (!(/^\d*(,\d?\d?)?$/).test(val)) {
            if ((/^\d*,\d+$/).test(val)) {
                varArr = val.split(',');
                el.val(varArr[0] + ',' + varArr[1].substr(0, 2));
            } else {
                el.val('');
            }
        } else {
            el.val(val);
        }
    }

    if (($.inArray(key, [0, 8, 44]) === -1 && ((key < 48 || key > 57) && (key < 96 || key > 105)) && key !== 46) || //controllo che non sia un punto
        (key === 44 && !(/^\d+$/).test(val)) ||
        ((key > 47 && key < 58) && !(/^\d*(,\d?)?$/).test(val))) {
        e.preventDefault();
        isOK = false;
    }
    return isOK;
};

// Filtro input per numeri interi
var cleanImportInt = function (e) {
    var el = $(e.target),
        val = el.val(),
        key = e.which,
        isOK = true;
    if (!(/^\d*$/).test(val)) {
        val = val.replace('.', '').replace(',', '');
        if (!(/^\d*$/).test(val)) {
            el.val('');
        } else {
            el.val(val);
        }
    }
    if (($.inArray(key, [0, 8, 44]) === -1 && ((key < 48 || key > 57) && (key < 96 || key > 105))) ||
        (key === 44 && !(/^\d+$/).test(val)) ||
        ((key > 47 && key < 58) && !(/^\d*$/).test(val))) {
        e.preventDefault();
        isOK = false;
    }
    return isOK;
};

var cleanCurrency = function (idImporto, limit) {
    // Toglie tutto cio' che non sono cifre
    var valore,
        el = $('#' + idImporto),
        valoreString = el.val();
    if (/^\d+$/.test(valoreString)) {
        valore = parseFloat(valoreString);
        if (typeof limit !== 'undefined' && valore > limit) {
            valore = limit;
        }
    } else {
        valore = -1;
    }
    if (valore <= 0) {
        el.val('');
    } else {
        el.val(valore);
    }
    return valore;
};

var ttinputOuterTap = function () {
    $(document).on('click touchstart', function (e) {
        var inputFocused = $(e.target).closest(".editable-input");
        if (!inputFocused.length) {
            $('.editable-clear-x').hide();
        }
    });
};

// funzione generalizzata per l'attivazione dei campi o la disattivazione degli stessi in pagina
//funzione genralizzata per l'attivazione dei campi o la disattivazione degli stessi in pagina
/*var checkFocusOutToAble = function (nameForm, funcToAct) {
    var formWrapper = $('#' + nameForm);
    var inputToActivate = formWrapper.find('.input-required');
    var inputActivated = [],
        isChecked,
        isNotEmpty,
        isSelected,
        isFilledHidden = true,
        btnHidden,
        isTabWrapped = false;
    /* btnTab = formWrapper.find('.tab-data-btn a')

    inputToActivate.each(function () {

        if ($(this).val() !== '') {
            inputActivated.push($(this).attr('name'));
        }
    });

    //se c'è la classe da wrappare parte la funzione specifica
    if (formWrapper.find('.overlayer-tab-toWrapper').length > 0 && formWrapper.find('.overlayer-layer').length === 0) {
       setLayerObject(formWrapper);
    }
    if (formWrapper.find('.overlayer-tab-toWrapper').length > 0) {
        isTabWrapped = true;
    }

    /*btnTab.on('click', function () {
        formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
    });

    formWrapper.find('.hidden-wrapper').each(function () {
        btnHidden = $(this).find('.input-toggle-hidden,.btn-show,.btn-hide');
        btnHidden.off().on('click', function () {
            var countHiddenInputFilled = [];
            var bonificoInputVal;

            formWrapper.find('.overlayer-layer').length > 0 ? isTabWrapped = true : isTabWrapped = false;
            var hiddenDiv = $(this).closest('.hidden-wrapper').find('.input-hidden'),
                hiddenInput = hiddenDiv.find('input');

            if ($(this).hasClass('btn-hide')) {
                hiddenDiv.hide()
            } else if ($(this).hasClass('btn-show')) {
                hiddenDiv.show();
            } else {
                hiddenDiv.toggle();
                bonificoInputVal = $('#autocompletamentoBonificoInput').val();
                hiddenInput.val(bonificoInputVal.substring(0, Math.min(bonificoInputVal.length, 20)));
            }

            if (hiddenDiv.is(':visible') && (hiddenDiv.find('.prefilled').val() === '' || hiddenDiv.find('.prefilled').length === 0)) {
                isFilledHidden = false;
                formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
            } else {
                isFilledHidden = true;

                if (inputActivated.length === inputToActivate.length) {
                    formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
                    //se c'è il div da wrappare ed è chiuso...
                    if (formWrapper.find('.tabber-wrapper').length > 0 && !formWrapper.find('.tabber-wrapper').hasClass('active')) {
                        formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
                    }
                }

                hiddenInput.not('.prefilled').val('');
            }

            hiddenInput.on('keyup', function () {
                var pos = countHiddenInputFilled.indexOf($(this).context.name);

                if ($(this).val() !== '') {
                    pos === -1 && countHiddenInputFilled.push($(this).context.name);
                } else {
                    pos > -1 && countHiddenInputFilled.splice(pos, 1);
                }

                if (countHiddenInputFilled.length === hiddenInput.length) {
                    isFilledHidden = true;

                    if (inputActivated.length >= inputToActivate.length && !isTabWrapped) {
                        formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
                        if (formWrapper.find('.tabber-wrapper').length > 0 && !formWrapper.find('.tabber-wrapper').hasClass('active')) {
                            formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
                        }
                    }
                } else {
                    isFilledHidden = false;
                    formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');

                }
            })
        })
    });

    $.each(inputToActivate, function (index, value) {
        var field = '#' + $(value).attr('name'),
            fieldType = $(field).attr('type');

        if ($(this).context.nodeName === 'INPUT' && fieldType === 'text' || $(this).context.nodeName === 'TEXTAREA') {
            $(this).on('keyup focus', function () {
                var pos = inputActivated.indexOf($(this).context.name);

                if ($(this).val() !== '') {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else if ($(this).val() === '') {
                    pos > -1 && inputActivated.splice(pos, 1);
                } else {
                    return;
                }
                inputActivated.length === inputToActivate.length ? isNotEmpty = true : isNotEmpty = false;
                //console.log(inputActivated.length);
                //console.log(inputToActivate.length);
                funcToAct(isNotEmpty, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
        if ($(this).context.nodeName === 'SELECT') {
            $(this).on('change', function () {
                var pos = inputActivated.indexOf($(this).context.name);
                if ($(this).context.selectedIndex !== 0) {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else {
                    pos > -1 && inputActivated.splice(pos, 1);
                }
                inputActivated.length === inputToActivate.length ? isSelected = true : isSelected = false;
                funcToAct(isSelected, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
        if ($(this).context.nodeName === 'INPUT' && fieldType === 'checkbox') {
            $(this).on('click', function () {
                var pos = inputActivated.indexOf($(this).context.name);
                if ($(this).is(':checked')) {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else {
                    pos > -1 && inputActivated.splice(pos, 1);
                }

                inputActivated.length === inputToActivate.length ? isChecked = true : isChecked = false;
                funcToAct(isChecked, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
    });
};
*/
/*var ableButton = function (isFilledVisible, isFilledHidden, isTabWrapped, elWrapper) {
    $(elWrapper).find('.overlayer-layer').length > 0 ? isTabWrapped = true : isTabWrapped = false;

    if (isFilledVisible && isFilledHidden) {
        if (!isTabWrapped) {
            if (!$(elWrapper).find('.tabber-wrapper').length) {
                $(elWrapper).find('.to-able').attr('disabled', false).removeClass('disabled');
            }

        } else {
            unsetLayerObject(elWrapper);

        }
    } else {
        $(elWrapper).find('.to-able').attr('disabled', true).addClass('disabled');
        if ($('.overlayer-tab-toWrapper').length > 0 && elWrapper.find('.overlayer-layer').length === 0) {
            if ($(elWrapper).find('.overlayer-layer').length === 0) {
                setLayerObject(elWrapper);
                $(elWrapper).find('.tab-data-btn').removeClass('selected');
                $(elWrapper).find('.tabber-wrapper').removeClass('active');
                $(elWrapper).find('.tab-data-content').hide();
            }
        }
        else if($(elWrapper).find('.warning-tab-toWrapper').length > 0 && $(elWrapper).find('.tab-data-btn.selected').length > 0) {
          $(elWrapper).find('.tab-data-btn').removeClass('selected');
          $(elWrapper).find('.tabber-wrapper').removeClass('active');
          $(elWrapper).find('.tab-data-content').hide();
        }
    }
};

var setLayerObject = function (el) {
    var elToWrap = $(el).find('.overlayer-tab-toWrapper');
    elToWrap.wrap('<div class="overlayer-obj-Wrapper">');
    $('<div class="overlayer-layer">').insertAfter(elToWrap);
};

var unsetLayerObject = function (el) {
    var elToUnWrap = el.find('.overlayer-tab-toWrapper');
    elToUnWrap.unwrap('<div class="overlayer-obj-Wrapper">');
    el.find('.overlayer-layer').remove();
};

var tabber = function () {

    var tabberWrapper = $('.tabber-wrapper');

    tabberWrapper.each(function () {
        var btnTab = tabberWrapper.find('.tab-data-btn a');
        btnTab.each(function () {
            $(this).click(function () {
                var wrapperForm = $(this).closest('form');
                        var inputToFullfill = wrapperForm.find('.input-required');
                        var inputFullFilled= [];

                        inputToFullfill.each(function(index){
                           inputFullFilled.push($(this).val())
                        })
                        function isNotEmpty(value) {
                            if(value != '') return value;
                        }
                        var fieldNotEmpty = inputFullFilled.filter(isNotEmpty);
                          if(inputToFullfill.length>fieldNotEmpty.length) {
                              errorFields(wrapperForm);
                          }

                          else {
                            removeErrorFields(wrapperForm);
                            if ($(this).attr("id") === "hoFretta") {
                                     verificaBonificoIstantaneoUrgente()
                                 } else if ($(this).attr("id") === "scegliData") {
                                      verificaBonificoOrdinarioEstero();
                                }
                          }

            });
        });
    });

};
var errorFields = function(wrapperForm){
      if($('.error-box-fields').length===0){
         $('#error-box-fields').html('<div class="error-box-fields"><strong>ATTENZIONE</strong><br> Verifica che tutti i campi siano compilati prima di selezionare il tipo di bonifico.</div>')
         $("html, body").animate({scrollTop: $('#error-box-fields').offset().top -30},500)
 }
  }
var removeErrorFields = function(wrapperForm) {
       $('#error-box-fields').html('');
 }

*/
var activateTab = function () {
    $('.navContFirstLev,.navfrontPage').not('.disableJs').each(function () {
        var navContFirstLev = $(this),
            tabContentGroup = navContFirstLev.children('.tab-content-group'),
            innerTab = navContFirstLev.find('.innerTab'),
            focusLeftTab = innerTab.find('li.on').offset().left - 35,
            tabArr,
            tabContentArr;
        // Controllo se ai tab sono associati dei contenuti da mostrare,
        // altrimenti sono soltanto dei link e non li gestisco
        $(this).find('.innerTab').scrollLeft(focusLeftTab);
        innerTab.find('li.on').prev().addClass('borderNoTab');
        navContFirstLev.children('.separator').css('min-width', innerTab.children('ul').innerWidth());
        if (tabContentGroup.length) {
            addBorderTab();
            tabArr = innerTab.find('li');
            tabContentArr = tabContentGroup.find('.tab-content');
            tabArr.click(function () {
                var tab = $(this),
                    href = tab.find('a').attr('href');
                if (!tab.hasClass('on') && href.charAt(0) === '#') {
                    tabArr.removeClass('on');
                    tab.addClass('on');
                    tabContentArr.hide().filter(href).show();
                }
                return false;
            });
        }
        
    });
};

var addBorderTab = function () {
    //vengono appese le classi per gestire i bordi dei tab in display table
    $('.navContFirstLev,.navfrontPage .innerTab').each(function () {
        $(this).find('li.on').prev().addClass('borderNoTab');
        $(this).find('li').click(function () {
            $(this).siblings('li').removeClass('borderNoTab');
            $(this).removeClass('borderNoTab').prev().addClass('borderNoTab');
        });
    });
};

/*var verificaBonificoIstantaneoUrgente = function () {
    // doNothing, fare override specifico
};

var verificaBonificoOrdinarioEstero = function () {
    // doNothing, fare override specifico
};
*/
// noinspection JSUnusedGlobalSymbols
var getCodeOf = function (el) {
    if (typeof el === "undefined") el = "";
    document.write(el);
};

/*** FORMATTAZIONE NUMERI ***/
//Controllo campi numerici
var isNumber = function (value) {
    var importo = value.replace(',', '.'),
        ret = false;
    if (!isNaN(importo) && $.trim(importo) !== '') {
        ret = true;
    }
    return ret;
};

var isZero = function (value) {
    return /^0+$/.test(value);
};

var formattaNumero = function (nStr, decimali, isEng) {
    // Modifica doppio decimale - Paolo Moretti

    if (!isEng) {
        nStr = nStr.toString().replace(',', '.');
    }
    nStr = Math.round(nStr * 100) / 100;
    nStr = nStr.toString().replace('.', ',');

    return decimali ? formattaDecimali(nStr, decimali) : formattaDecimali(nStr, 2);
};

var formattaDecimali = function (nStr, numDec) {
    var x = nStr.split(',');
    var x1 = x[0];
    var x2; /* var x2 = x.length > 1 ? ',' + x[1] : ',00';*/
    var addZero = 0;

    // Gestisce anche uno zero dopo il primo decimale - Paolo Tonon
    if (x.length > 1) {
        x2 = ',' + x[1];

        if (x[1].length < numDec)
            for (addZero = x[1].length; addZero < numDec; ++addZero) {
                x2 += '0';
            }
    } else {
        x2 = ',';

        for (addZero = 0; addZero < numDec; ++addZero) {
            x2 += '0';
        }
    }

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) x1 = x1.replace(rgx, '$1' + '.' + '$2');

    return x1 + x2;
};

var formattaNumOutput = function (importo) {
    //DANIELA
    var b = Math.round(parseFloat(importo.toString().replace(',', '.')) * 100) / 100;
    return formattaNumero(b.toString().replace('.', ','));
};

var formatEuro = function (value, addDec) {
    return formattaNumero(value.toString(), addDec ? 2 : 0, true);
};

// Tenuta per compatibilità con codice vecchio
var formattaNumeriOutput = function (numero) {
    return formattaNumOutput(numero);
};

var formattaNumeriInput = function (importo) {
    try {
        importo = importo.toString();
        if ((/^\d+(\.?\d{3})*(,\d+)?$/).test(importo)) {
            importo = importo.replace(/\./g, '');
        }
        importo = importo.replace(/,/g, '.');
        // Toglie gli zero davanti ai numeri
        importo = importo.replace(/^0+(\d+(\.\d+)?)$/, "$1");
    } catch (e) {
        importo = "";
    }
    return importo;
};

var moveToInteger = function (value) {
    return Math.round(value * 100);
};

var moveToFloat = function (value) {
    return (value / 100).toFixed(2);
};

// oscura tutto
var obscurateAll = function () {
    var layerpop = document.createElement('DIV');
    layerpop.id = 'layerpop';
    document.body.appendChild(layerpop);
    layerpop = document.getElementById('layerpop');
    //imposta l'altezza di layerpop a tutto schermo e appende le funzioni di scrolling e resizing all'oscuratore
    if (navigator.appName !== "Microsoft Internet Explorer") {
        layerpop.style.height = window.height + 'px';
        layerpop.style.marginTop = window.pageYOffset + 'px';
        window.onscroll = function () {
            layerpop.style.marginTop = window.pageYOffset + 'px';
        };
        window.onresize = function () {
            layerpop.style.height = window.height + 'px';
        };
    } else {
        layerpop.style.height = getPageHeight() + 'px';
        layerpop.style.marginTop = document.documentElement.scrollTop + 'px';
        window.onscroll = function () {
            layerpop.style.marginTop = document.documentElement.scrollTop + 'px';
        };
        window.onresize = function () {
            layerpop.style.height = getPageHeight() + 'px';
        };
    }
    //imposta l'oscuratore layerpop al massimo dei livelli
    layerpop.style.zIndex = getNextHighestZindex();
};

var unobscurateAll = function () {
    document.body.removeChild(document.getElementById('layerpop'));
};

//funzione che rende invisibili le tendine tranne quelle contenute nel div che risulta essere attivo (e nei suoi figli)
var arrangeSelect = function (idElement) {
    var i, x, y;
    if (idElement) {
        x = document.getElementsByTagName("select");
        // noinspection StatementWithEmptyBodyJS
        for (i = x.length; i; x[--i].style.visibility = 'hidden') ;
        y = document.getElementById(idElement).getElementsByTagName('select');
        // noinspection StatementWithEmptyBodyJS
        for (i = y.length; i; x[--i].style.visibility = 'visible') ;
    } else {
        x = document.getElementsByTagName("select");
        // noinspection StatementWithEmptyBodyJS
        for (i = x.length; i; x[--i].style.visibility = 'visible') ;
    }
};

//funzione che apre un popup con overlayer
// mode = 'fixed' overlayer con margin-top fisso da css
// mode = 'floating' overlayer sempre centrato nella pagina
var openPopOverLayer = function (idElement, mode) {
    traceOld("openPopOverLayer(idElement, mode)");
    var element = document.getElementById(idElement);
    obscurateAll();
    document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
    element.style.display = 'block';
    //controlla se deve fissare la X o renderla dinamica
    if (mode === 'fixed') {
        element.style.marginLeft = Math.round((getPageWidth() - element.offsetWidth) / 2) + 'px';

        //riallinea l'oggetto orizzontalmente sul resize
        window.addEventListener("resize", function () {
            element.style.marginLeft = Math.round((getPageWidth() - element.offsetWidth) / 2) + 'px';
        }, false);
    } else {
        element.style.marginLeft = Math.round((getPageWidth() - element.offsetWidth) / 2) + 'px';
        element.style.marginTop = getScrollY() + Math.round((getPageHeight() - element.offsetHeight) / 2) + 'px';

        //riallinea l'oggetto sia verticalmente che orizzontalmente
        window.addEventListener("resize", function () {
            element.style.marginLeft = Math.round((getPageWidth() - element.offsetWidth) / 2) + 'px';
            element.style.marginTop = getScrollY() + Math.round((getPageHeight() - element.offsetHeight) / 2) + 'px';
        }, false);
        window.addEventListener("scroll", function () {
            element.style.marginTop = getScrollY() + Math.round((getPageHeight() - element.offsetHeight) / 2) + 'px';
        }, false);
    }
    arrangeSelect(idElement);
    element.style.zIndex = getNextHighestZindex();
};

//chiude l'overlayer + l'oscuratore
var closePopOverLayer = function (idElement) {
    traceOld("closePopOverLayer(idElement)");
    document.getElementById(idElement).style.display = 'none';
    arrangeSelect();
    unobscurateAll();
};

// apre una popup fissa da css o style nella pagina
// elemento ancora opzionale e serve per agganciare il layer ad un altro elemento di qualsiasi natura (i parametri TOP e LEFT sono configurabili nello
// stile per posizionare l'elemento rispetto a questo)

// apre una popup sempre centrata nella pagina
var openAlert = function (idElement, mode, anchorElement) {
    traceOld("openAlert(idElement, mode, anchorElement)");
    var idOl = jqc(idElement);
    var idAnchorElement, fixedalertresize, tooltipscroll, alertresize, alertscroll, anchoralertresize;
    var ttBox;
    var overlayer = $(idOl),
        // Detect handle draggable
        overdrag = overlayer.find(".handle"),
        overflow = overlayer.find('.overflow'),
        overClose = overlayer.find('.close'),
        //heightLimit = Math.round($(window).height() * 0.6666666667);
        heightLimit = $(window).height();
    if (!(overlayer.is($("body > header")))) {
        //$("body > div:first-child").before(overlayer);
        $("body").prepend(overlayer);
    }
    /*if (!(overlayer.is($("body > div:first-child")))) {
    	//$("body > div:first-child").before(overlayer);
    	$("body > div:first-child").before(overlayer);
    }*/
    // Resetta top e left
    overlayer.css({ "margin-top": 0, "margin-left": 0, "left": 0, "top": 0 });
    overlayer.show();

    // Close button
    if (overClose.length) {
        overClose.click(function () {
            closePopOverLayer(idOl);
        });
    }

    // FIX PER DRAGGABLE PROTOTYPE DA DISMETTERE
    if (overdrag.length) {
        if (overdrag.attr("onmouseover")) {
            if (overdrag.attr("onmouseover").indexOf("Draggable") > 0) {
                overdrag.attr("onmouseover", "");
            }
        }
        overdrag.css("cursor", "move");
        overdrag.off('mousedown').mousedown(ttHide);
        // noinspection JSValidateTypes
        overlayer.draggable({ handle: ".handle", scroll: "window" });
    }

    // Toglie il wrapper "overflow" prima di calcolare l'altezza dell'overlayer
    if (overflow.length) {
        overlayer.find('.tithelp:first').unwrap();
    }

    // Quando l'altezza del layer e' > di quella della finestra,
    // fissa altezza max dell'overlayer in percentuale della risoluzione dello schermo, usando il wrapper "overflow"

    if (overlayer.outerHeight() > heightLimit) {

        if (overlayer.find('.overflow').length === 0) {

            overlayer.find('.body').wrapInner('<div class="overflow" />');
            overlayer.find('.overflow').css({
                'height': (heightLimit - 50) + 'px',
                'overflow-y': 'auto',
                'width': '100%'
            });
        }
    }
    if (anchorElement) {
        idAnchorElement = jqc(anchorElement);
        anchoralertresize = new Function("$('" + idOl + "').css({'margin-left': $('" + idAnchorElement + "').offset().left + 'px', 'margin-top': $('" + idAnchorElement + "').offset().top + 'px'})");
        $(window).on("resize", anchoralertresize);
        anchoralertresize();
    } else if (mode === "fixed" || (overlayer.height() > $(window).height())) {
        fixedalertresize = new Function("$('" + idOl + "').css({'margin-left': Math.round(($(window).width() - $('" + idOl + "').width())/2) + 'px'})");
        $(window).on("resize", fixedalertresize);
        fixedalertresize();
    } else {
        ttBox = $('#ttBox');
        tooltipscroll = function () {
            if (ttBox.length > 0 && ttBox.is(':visible') && overlayer.is(':visible')) {
                ttHide();
            }
        };
        alertresize = new Function("$('" + idOl + "').css({'margin-left': Math.round(($(window).width() - $('" + idOl + "').width())/2) + 'px', 'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('" + idOl + "').height())/2) + 'px'})");
        alertscroll = new Function("$('" + idOl + "').css({'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('" + idOl + "').height())/2) + 'px'})");
        $(window).on("resize", alertresize);
        $(window).on("scroll", alertscroll);
        $(window).on("scroll", tooltipscroll);
        alertresize();
    }

    /* Se l'overlay e' fuori dallo schermo , scolla fino al suo top */
    if (overlayer.offset().top < $(document).scrollTop()) $(document).scrollTop(overlayer.offset().top);

    arrangeSelect(idElement);
    overlayer.css("z-index", getNextHighestZindex());
    /* Fine openalert */
    ttSet(overlayer);
};

// noinspection JSUnusedGlobalSymbols
var openFixedAlert = function (idElement, anchorElement) {
    traceOld("openFixedAlert(idElement, anchorElement)");
    openAlert(idElement, "fixed", anchorElement);
};

// chiude un alert qualsiasi (occorre indicarlo se esiste un overlayer o un padre altrimenti si puo' omettere e saranno riabilitate tutte le select
// nella pagina)
var closeAlert = function (idElement, idFather) {
    traceOld("closeAlert(idElement, idFather)");
    idElement = jqc(idElement);
    if ($(idElement).length) {
        /* Rimuove tutti gli eventi */
        if (window.alertscroll) $(window).off("scroll", alertscroll);
        if (window.alertresize) $(window).off("resize", alertresize);
        if (window.fixedalertresize) $(window).off("resize", fixedalertresize);
        if (window.anchoralertresize) $(window).off("resize", anchoralertresize);
        ttHide();
        $(idElement).hide();
        arrangeSelect(idFather)
    }
};

// chiude tutti gli alert aperti
// noinspection JSUnusedGlobalSymbols
var closeAllAlert = function () {
    $(".layeralert").hide();
};

/** * FORMATTAZIONE DATE ** */
/*
 * Date Format 1.2.3 (c) 2007-2009 Steven Levithan <stevenlevithan.com> MIT license
 *
 * Includes enhancements by Scott Trenda <scott.trenda.net> and Kris Kowal <cixar.com/~kris.kowal/>
 *
 * Accepts a date, a mask, or a date and a mask. Returns a formatted version of the given date. The date defaults to the current date/time. The mask
 * defaults to dateFormat.masks.default.
 */

var dateFormat = function () {
    var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g,
        timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
        timezoneClip = /[^-+\dA-Z]/g,
        pad = function (val, len) {
            val = String(val);
            len = len || 2;
            while (val.length < len) val = "0" + val;
            return val;
        };

    // Regexes and supporting functions are cached through closure
    return function (date, mask, utc) {
        var dF = dateFormat;

        // You can't provide utc if you skip other args (use the "UTC:" mask prefix)
        if (arguments.length === 1 && Object.prototype.toString.call(date) === "[object String]" && !/\d/.test(date)) {
            mask = date;
            date = undefined;
        }

        // Passing date through Date applies Date.parse, if necessary
        date = date ? new Date(date) : new Date;
        if (isNaN(date)) return; //throw console.debug("invalid date");

        mask = String(dF.masks[mask] || mask || dF.masks["default"]);

        // Allow setting the utc argument via the mask
        if (mask.slice(0, 4) === "UTC:") {
            mask = mask.slice(4);
            utc = true;
        }

        var _ = utc ? "getUTC" : "get",
            d = date[_ + "Date"](),
            D = date[_ + "Day"](),
            m = date[_ + "Month"](),
            y = date[_ + "FullYear"](),
            H = date[_ + "Hours"](),
            M = date[_ + "Minutes"](),
            s = date[_ + "Seconds"](),
            L = date[_ + "Milliseconds"](),
            o = utc ? 0 : date.getTimezoneOffset(),
            flags = {
                d: d,
                dd: pad(d),
                ddd: dF.i18n.dayNames[D],
                dddd: dF.i18n.dayNames[D + 7],
                m: m + 1,
                mm: pad(m + 1),
                mmm: dF.i18n.monthNames[m],
                mmmm: dF.i18n.monthNames[m + 12],
                yy: String(y).slice(2),
                yyyy: y,
                h: H % 12 || 12,
                hh: pad(H % 12 || 12),
                H: H,
                HH: pad(H),
                M: M,
                MM: pad(M),
                s: s,
                ss: pad(s),
                l: pad(L, 3),
                L: pad(L > 99 ? Math.round(L / 10) : L),
                t: H < 12 ? "a" : "p",
                tt: H < 12 ? "am" : "pm",
                T: H < 12 ? "A" : "P",
                TT: H < 12 ? "AM" : "PM",
                Z: utc ? "UTC" : (String(date).match(timezone) || [""]).pop().replace(timezoneClip, ""),
                o: (o > 0 ? "-" : "+") + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
                S: ["th", "st", "nd", "rd"][d % 10 > 3 ? 0 : (d % 100 - d % 10 !== 10) * d % 10]
            };

        return mask.replace(token, function ($0) {
            return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
        });
    };
}();

// Some common format strings
dateFormat.masks = {
    "default": "ddd mmm dd yyyy HH:MM:ss",
    shortDate: "m/d/yy",
    mediumDate: "mmm d, yyyy",
    longDate: "mmmm d, yyyy",
    fullDate: "dddd, mmmm d, yyyy",
    shortTime: "h:MM TT",
    mediumTime: "h:MM:ss TT",
    longTime: "h:MM:ss TT Z",
    isoDate: "yyyy-mm-dd",
    isoTime: "HH:MM:ss",
    isoDateTime: "yyyy-mm-dd'T'HH:MM:ss",
    isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
};

// Internationalization strings
dateFormat.i18n = {
    dayNames: ["Dom", "Lun", "Mar", "Mer", "Gio", "Ven", "Sab", "Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"],
    monthNames: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic", "Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"]
};

// Controlla la validita' di una data sia per il formato sia per l'esistenza
isValidDate = function (stringa) {
    var espressione = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;

    if (!espressione.test(stringa)) {
        return false;
    } else {
        var anno = parseInt(stringa.substr(6), 10);
        var mese = parseInt(stringa.substr(3, 2), 10);
        var giorno = parseInt(stringa.substr(0, 2), 10);

        var data = new Date(anno, mese - 1, giorno);

        return data.getFullYear() === anno && data.getMonth() + 1 === mese && data.getDate() === giorno;
    }
};

var getDateFromString = function (dateStr) {
    var dateObj = null,
        dateArr;
    if (typeof dateStr === 'string' && isValidDate(dateStr)) {
        dateArr = dateStr.split('/').reverse();
        dateObj = new Date(parseInt(dateArr[0], 10), parseInt(dateArr[1], 10) - 1, parseInt(dateArr[2], 10));
    }
    return dateObj;
};

var holidays = {};

var getHolidays = function (year) {
    var easterDay;
    if (typeof holidays[year] === 'undefined') {
        easterDay = getEasterDay(year);
        holidays[year] = [
            year + '-01-01',
            year + '-01-06',
            easterDay.format('isoDate'),
            easterDay.addDays(1).format('isoDate'),
            year + '-04-25',
            year + '-05-01',
            year + '-06-02',
            year + '-08-15',
            year + '-11-01',
            year + '-12-08',
            year + '-12-25',
            year + '-12-26'
        ];
    }
    return holidays[year];
};

var getEasterDay = function (year) {
    var M = 24,
        N = 5,
        a = year % 19,
        b = year % 4,
        c = year % 7,
        d = ((19 * a) + M) % 30,
        e = ((2 * b) + (4 * c) + (6 * d) + N) % 7,
        day, month;
    if (d + e < 10) {
        day = d + e + 22;
        month = 3;
    } else {
        day = d + e - 9;
        month = 4;
    }
    if (day === 26 && month === 4) {
        day = 19;
        month = 4;
    }
    if (day === 25 && month === 4 && d === 28 && e === 6 && a > 10) {
        day = 18;
        month = 4;
    }
    return new Date(year, month - 1, day);
};

// Restituisce TRUE se "date" NON è festivo
var noHolidays = function (date) {
    var resultArr = $.datepicker.noWeekends(date);
    if (resultArr[0]) {
        resultArr[0] = ($.inArray(date.format('isoDate'), getHolidays(date.getFullYear())) === -1);
        if (resultArr[0] === false) {
            resultArr[1] = 'ui-datepicker-festivo'
        }
    }

    return resultArr;

};

var highlightDays = function (date) {
    var eventDates = getHolidays(date.getFullYear());
    for (var i = 0; i < (eventDates.length); i++) {

        if (eventDates[i] === date.format('isoDate')) {
            return [true, 'ui-datepicker-festivo'];
        }
    }
    return [true, ''];
};

var _MS_PER_DAY = 1000 * 60 * 60 * 24;

// a and b are javascript Date objects
var dateDiffInDays = function (a, b) {
    // Discard the time and time-zone information.
    var utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
    var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

    return Math.floor((utc2 - utc1) / _MS_PER_DAY);
};

/*** CREA E CARICA UNA MODALE ***/
/*
    es: getModal({
        id:"idmodale",
        titolo:"Titolo modale",
        body: $(contmodale)
        });
*/
var getModal = function (obj) {
    var modId = (obj.id) ? obj.id : "modal" + Math.random(),
        modalOl = $("#" + modId);
    if (!modalOl.length) {
        modalOl = $("<div>").addClass("modal fade").attr({
            "id": modId,
            "tabindex": -1,
            "role": "dialog",
            "aria-labelledby": modId + "Label"
        });
        var modalHeader = $("<div>").addClass("modal-header").append($("<a>").addClass("close btn-icon").attr({
            "data-dismiss": "modal",
            "aria-label": "close"
        }).append($("<i>").addClass("icon icon-alert_error_fill icon-2x")), $("<h2>").addClass("modal-title").attr("id", modId + "Label").html(obj.titolo));
        var modalBodyCont = (typeof obj.body === "object") ? obj.body : "";
        var modalBody = $("<div>").addClass("modal-body").append($("<div>").addClass("container-fluid").append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append(modalBodyCont))));
        $("body").prepend(modalOl.append($("<div>").addClass("modal-dialog").append($("<div>").addClass("modal-content").append(modalHeader, modalBody))));
    }
    return (modalOl);
};

/* Innesca modali dinamiche che restituiscono un HTML */
/*
es: getAjaxModal({

    // Crea la modale coi parametri previsti
    title: "Titolo della modale", <-- Titolo della modale
    id: "idmodale", <!-- Id della modale [opzionale],
    class: "classecss". <!-- Classi addittive per la modale [opzionali]
    url : "path/url.html", <- Url di destinazione 
    data: { par1: "aaaa"}, <!-- Parametri da passare [opzionali]
    method: "POST", <!-- Metodo per il passaggio dei dati [default = get],
    callback: function() {} <!-- Funzione che viene invocata a valle del caricamento [opzionale]
})
*/
var getAjaxModal = function(params) {

    var modalobj = {
        class : "modal fade " + (params.class? " "+ params.class: ""),
        id: (params.id) ? params.id : "modalajax_"+ parseInt(Math.random()*9999999999),
        ajaxmethod: params.method? params.method : "GET",
        ajaxdata: params.data? params.data : {}
    };
    var modalHeader = $("<div>").addClass("modal-header").append(
        $("<a>").addClass("close btn-icon").attr({
            "data-dismiss": "modal",
            "aria-label": "close"
        }).append($("<i>").addClass("icon icon-alert_error_fill icon-2x")), $("<h2>").addClass("modal-title").attr("id", modalobj.id + "Label").html(params.title? params.title : ""));;
    var modalCont = $("<div>").addClass("loading").css("minHeight","150px");

    var modalToOpen = $("<div>").addClass(modalobj.class).attr({
        "id": modalobj.id,
        "tabindex": -1,
        "role": "dialog",
        "aria-labelledby": modalobj.id + "Label"
    }).append(
        $("<div>").addClass("modal-dialog").append(
            $("<div>").addClass("modal-content").append(modalHeader, modalCont)
        )
    );

    $.ajax({
        url: params.url,
        method: modalobj.ajaxmethod,
        dataType: "html",
        data: modalobj.ajaxdata,
        success: function(html) {
            // Dati recuperati
            modalCont.replaceWith(html);
            if (params.callback) params.callback();
            modalCont.removeClass("loading")
        },
        error: function(){
            // Messaggio di errore nel recupero dati
            modalCont.html(
                "<h3>Attenzione!</h3>"+
                "<p>Si e' verificato un errore in fase di recupero del messaggio.<br>Chiudere la finestra e riprovare.</p>"
            ).removeClass("loading").addClass("modalajax-error");
        }
    })
    modalToOpen.modal("show").on("hidden.bs.modal",function(){$(this).remove()})
}


// Funzione che apre un iframe in modale
var getModalIframe = function(obj){

    // Assembla l'iframe con l'url
    var iframe = $("<iframe>").addClass("iframe-modal").attr("src",obj.url);
    var modalIfr = getModal({
        titolo: (obj.title)? obj.title : "",
        body: iframe
    }).addClass("modal-iframe");
    modalIfr.modal("show").on("hidden.bs.modal",function(){$(this).remove()})
}

/* Lettura e scrittura localstorage o cookies */
// Scrittura/lettura dati su localStorage o cookie statico
var wStore = (function () {
    // true se il browser non utilizza localHost (lo inizializza una volta sola)
    var checkStorage = (("localStorage" in window) && window["localStorage"] !== null);

    var write = function (key, value, expdays) {
        if (checkStorage) {
            // utilizza localStorage
            localStorage.setItem(key, value);
        } else {
            // Scrive nel cookie
            var expdate = new Date();
            if (typeof expdays == "undefined") {
                expdays = 365;
            }
            expdate.setDate(expdate.getDate() + expdays);
            document.cookie = key + "=" + encodeURIComponent(value) + "; expires=" + expdate.toUTCString();
        }
    };

    var read = function (key) {
        if (checkStorage) {
            // legge da localStorage
            return localStorage.getItem(key);
        } else {
            // Legge dal cookie
            var valToReturn = null;
            $.each(document.cookie.split(";"), function (i, v) {
                if (v.split("=")[0] === key) {
                    valToReturn = unescape(v.split("=")[1]);
                }
            });
            return valToReturn;
        }
    };

    var session = function (key, value) {
        var hasSS = (("localStorage" in window) && window["localStorage"] !== null);
        if (hasSS) {
            if (typeof value != "undefined") {
                // Scrive
                sessionStorage[key] = value;
            }
            return sessionStorage[key];
        } else {
            // Scrive un cookie
            var valToReturn = null;
            if (typeof value != "undefined") {
                var expdate = new Date();
                expdate.setDate(expdate.getDate() + 1);
                document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
            }
            $.each(document.cookie.split(";"), function (i, v) {
                if (v.split("=")[0] === key) {
                    valToReturn = unescape(v.split("=")[1]);
                }
            });
            return valToReturn;
        }
    };

    return { write: write, read: read, session: session }
}());

/*** TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE ***/
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load
var resizeTab = function (idTab, indexTabOpened) {
    
    //definizioni di variabili
    var tabContainer = $('#' + idTab);
    indexTabOpened = (typeof indexTabOpened === "undefined") ? 0 : indexTabOpened;
    tabContainer.each(function () {
        var el = $(this),
            tabLi = el.find('.tabWrapper:first li'),
            aAccordion = el.find('.panel-group:first > .panel > .panel-heading.visible-xs .panel-title a[data-toggle="collapse"]'),
            panelAccordion = el.find('.panel-group:first > .panel:not(.panel-accordion) > .panel-collapse');
        //inizializza il tab che deve essere aperto
        tabLi.eq(indexTabOpened).addClass('on');
        tabLi.eq(indexTabOpened).prev().addClass('borderNoTab');
        aAccordion.eq(indexTabOpened).attr('aria-expanded', 'true').removeClass('collapsed');
        panelAccordion.eq(indexTabOpened).addClass('in').css('height', 'auto');
        tabLi.each(function (index) {
            $(this).click(function (e) {
                e.preventDefault();
                ttHide();
                $(this).siblings('li').removeClass('borderNoTab');
                $(this).addClass('on').removeClass('borderNoTab').prev().addClass('borderNoTab');
                $(this).siblings('li').removeClass('on');
                aAccordion.attr('aria-expanded', 'false').addClass('collapsed');
                panelAccordion.removeClass('in');
                aAccordion.eq(index).attr('aria-expanded', 'true').removeClass('collapsed');
                panelAccordion.eq(index).addClass('in').css('height', 'auto');
                $("table.has-fixed-cols").trigger("post-body.bs.table");
                return false;
            });
        });
        aAccordion.each(function (index) {
            $(this).click(function () {
                tabLi.removeClass('on');
                tabLi.eq(index).addClass('on');
                setTimeout(function(){$("table.has-fixed-cols").trigger("post-body.bs.table")},200);
            });
        });
    });
};

/*** DATE PICKER ***/
var renderPickDateMobile = function (input, inst) {
    var body = $('body');
    $('.ui-datepicker-title').hide();
    if (isSmallDevice || body.hasClass('webview')) {
        var modalWrapperPicker = '<div class="modal" id="datePickerWrapper" tabindex="-1" role="dialog"><div class="modal-dialog modal-sm" role="document"><div class="modal-content"><div class="modal-body"></div></div></div></div>';
        var datePickerWrapper = $('#datePickerWrapper');
        if (!datePickerWrapper.length) {
            $(modalWrapperPicker).appendTo('#main');
        }
        setZindexModal();
        inst.dpDiv.appendTo('#datePickerWrapper .modal-body');
        datePickerWrapper.modal('show');
        body.addClass('modal-open');
        setTimeout(function () {
            inst.dpDiv.css({
                left: 0,
                top: 0,
                position: 'relative'
            });
        }, 0);
        $(document).on('click touchstart', function (e) {
            var calendarOpenedTarget = $(e.target);
            if (calendarOpenedTarget.hasClass('modal-backdrop')) {
                $('.modal').modal('hide');
            }
        });
    }
};

var appendDatePickerIcon = function (idElement) {
    var element = $("#" + idElement),
        icoDate = element.datepicker().next('.ui-datepicker-trigger'),
        AddOnDate = element.datepicker().closest('.editable-input').siblings('.input-group-addon.date');

    icoDate.appendTo(AddOnDate);

    //la maschera alle date si applica solo se compatibile
    //se non è android
    if (!/android/i.test(navigator.userAgent)) {
        element.mask("99/99/9999");
    } else {//se è android
        element.unmask();
        element.attr('maxlength', 10);
        element.on('keyup', function (event) {
            var valueInputDate,
                keyCode = event.keyCode;

            valueInputDate = element.val();

            if (valueInputDate.length === 2 && keyCode !== 8) {
                element.val(valueInputDate + '/');
            } else if (valueInputDate.length === 5 && keyCode !== 8) {
                element.val(valueInputDate + '/');
            }
        });
    }
};

/*** UTILITY PER FARE CHIAMATE AJAX ***/
var parseJSON = function (json) {
    var data = null;

    try {
        data = json.evalJSON();
    } catch (e) {
        data = null;
    }

    return data;
};

/* WRAPPER PER EX Generic Call */
// noinspection JSUnusedGlobalSymbols
var AJAXGenericCall = function (method, url, successFunc, failureFunc, parameters, type) {
    traceOld("AJAXGenericCall(method, url, successFunc, failureFunc, parameters, type)");
    if (!type) type = "json";

    jqAJAXCall(method, type, url, successFunc, failureFunc, parameters);
};

var jqAJAXCall = function (method, type, url, successFunc, failureFunc, parameters) {
    traceOld("jqAJAXCall(method, type, url, successFunc, failureFunc, parameters)");
    var ajaxOptions = { type: method, url: url };

    // 'json', 'xml', 'html'
    if (type) {
        ajaxOptions.dataType = type;
    }
    if (successFunc) {
        ajaxOptions.success = successFunc;
    }
    if (failureFunc) {
        ajaxOptions.error = failureFunc;
    }
    if (parameters) {
        ajaxOptions.data = parameters
    }

    return $.ajax(ajaxOptions);
};

/**
 * function mailAddressValidator( aMail )
 * @param aMail a string containg a mail address to validate
 * @return boolean if aMail is compliant (https://html.spec.whatwg.org/multipage/forms.html#valid-e-mail-address).
 * by Gianni D'Elia (regex) and Andrea Grassi (regex js dialect)
 * modified by Andrea Colanicchia (updated regex based on new specs)
 */
var mailAddressValidator = function (aMail) {
    var re = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/;

    return re.test(aMail);
};

// noinspection JSUnusedGlobalSymbols
var checkMailFormat = function (emails) {
    return emails.split(",").every(function (email) {
        return mailAddressValidator(email.replace(/^\s*/, "").replace(/\s*$/, ""));
    });
};

/*** INVIO COORDINATE BANCARIE ***/
/*
 * Interrogazione remota asincrona alla action _actionUrl con parametri _actionParams che restituisce un stringa/oggetto json transport e chiama una
 * funzione _callBack
 */
var ajaxFormSubmitAsynch = function (_formID, _actionParams, _callBack) {
    traceOld("ajaxFormSubmitAsynch(_formID, _actionParams, _callBack)");
    var form = $(jqc(_formID)),
        formJSON, successFunc, failureFunc;

    if (form.length) {
        if (_actionParams === null || _actionParams === '') {
            _actionParams = { cf: Math.random() }
        } else if ($.type(_actionParams) === 'object') {
            if (typeof _actionParams.cf === 'undefined') {
                _actionParams['cf'] = Math.random();
            }
        }

        form.addClass('loading');
        formJSON = {};
        successFunc = function (data, textStatus, jqXHR) {
            form.removeClass('loading');
            _callBack(data, jqXHR);
        };
        failureFunc = function () {
            form.removeClass('loading');
            $('#confermaContentEmail').hide();
            $('#confermaResponseEmail').show();
            $('#invioMailWarng').html("Sì è verificato un errore tecnico durante l'invio dell'email, ti invitiamo a riprovare più tardi.");
            $('#mailEsitoKO').show();
            $('#mailEsitoOK').hide();
        };
        $.map(form.serializeArray(), function (n) {
            formJSON[n.name] = n.value;
        });
        jqAJAXCall("POST", 'json', form.attr('action'), successFunc, failureFunc, $.extend(formJSON, _actionParams));
    }
};

var checkMailCoordBank = function () {
    var errors = [],
        homeMailCBFdest = $("#homeMailCBFdest"),
        emails = homeMailCBFdest.val().replace(/\s+/g, ''),
        checkEmail = true;

    if (emails === '') {
        checkEmail = false;
    } else {
        checkEmail = emails.replace(/\s+/g, '').split(',').every(mailAddressValidator);
    }

    if (!checkEmail) {
        errors.push({ field: homeMailCBFdest, text: "Occorre inserire almeno un'email valida" });
    } else {
        homeMailCBFdest.val(emails);
    }

    setHasErrors(errors, $("#homeMailCoordBankForm"));

    return (!errors.length);
};

var inviaMailCoordBankSimple = function () {
    var param = {
        idx: $('#selectConti').val(),
        cf: Math.random()
    };

    ajaxFormSubmitAsynch('#homeMailCoordBankForm', param, handleMailCoordBankSimple);
};

var handleMailCoordBankSimple =
    /***
     * @param jsonResponse
     * @param jsonResponse.warningMessage
     */
    function (jsonResponse) {
        $('#confermaContentEmail').hide();
        $('#confermaResponseEmail').show();

        if (jsonResponse.OK) {
            $('#mailEsitoKO').hide();
            $('#mailEsitoOK').show();
        } else {
            if (jsonResponse.warningMessage && jsonResponse.warningMessage !== "") {
                $('#invioMailWarng').html(jsonResponse.warningMessage);
            }
            $('#mailEsitoKO').show();
            $('#mailEsitoOK').hide();
        }
    };

// noinspection JSUnusedGlobalSymbols
var openPdf = function (path, param, isStatico) {
    var link = "";
    if (param === null) {
        param = ""
    }
    if (param.indexOf("&") === 0) {
        param = param.substring(1, param.length);
    }

    if (!isStatico) {
        link = wrp_script + path + "?" + param;
    } else {
        link = path + "?";
    }

    //richiesto per Tablet
    link += (param.trim().length > 0) ? "&isPDF=true" : "isPDF=true";

    window.open(link);
};

/*****************************************************************************************************************************************************
 * FRAMEWORK STILIZZAZIONE FORM *
 *
 * @author Andrea Colanicchia
 */
// Variabile usata per controllare se chiudere la select o no
var closeOnBlur = [];
var hiddenIds = {};

/* Z-INDEX - Classe per lo z-index */

// Mette una classe che aumenta lo z-index
var riseZIndex = function (el) {
    if (el.length) {
        el.removeClass('lowZ').addClass('highZ');
    }
};

// Mette una classe che abbassa lo z-index
var lowerZIndex = function (el) {
    if (el.length) {
        el.removeClass('highZ').addClass('lowZ');
    }
};

// Funzione che scrolla con effetto sull'elemento passato
var setElementonView = function (elToancor) {
    $("html, body").animate({ scrollTop: elToancor.offset().top + 'px' }, 'slow');
};

/* |FINE| Z-INDEX - Classe per lo z-index */

/* CREAZIONE - Select fittizia stilizzata */
// Chiude la tendina
var closeSelectRapp = function (selectRapp) {
    
    selectRapp.find('.selector:first').hide();
    selectRapp.find('.selectorSpacer:first').hide();
    lowerZIndex(selectRapp);
    
};

/* HOVER - Classe per l'hover */

// Imposta la classe per l'hover sulle option
var setOverOption = function (optionEl) {
    optionEl.addClass('optionOver');
};

// Toglie la classe per l'hover sulle option
var unSetOverOption = function (optionEl) {
    optionEl.removeClass('optionOver');
};

// Imposta la classe per l'hover sulla select
var setOverSelectRapp = function (selectRapp) {
    selectRapp.addClass('selectOver');
};

// Toglie la classe per l'hover sulla select
var unSetOverSelectRapp = function (selectRapp) {
    selectRapp.removeClass('selectOver');
};

/* |FINE| HOVER - Classe per l'hover */

/* FOCUS - Sposta il focus sui vari oggetti */
var focusOptionRapp = function (selectRapp) {
    // Mette il focus sulla prima option
    selectRapp.find('.inputOption:first').trigger('focus');
};

var focusOptionDownRapp = function (selectRapp,hasPlaceholder) {
    
    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    if (selector.css('display') === 'none') toggleSelectRapp(selectRapp,hasPlaceholder);

    // Lista option selezionabili non nascoste
    var selectorOptions = selector.find('.selectorOptions'),
        position = $.inArray($(this), selectorOptions);

    if (position === -1) {
        selectorOptions.first().trigger('focus');
    } else if (position < (selectorOptions.length - 1)) {
        selectorOptions.eq(position + 1).trigger('focus');
    }
};

var focusOptionUpRapp = function (selectRapp,hasPlaceholder) {
    
    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    if (selector.css('display') === 'none') toggleSelectRapp(selectRapp,hasPlaceholder);

    // Lista option selezionabili non nascoste
    var selectorOptions = selector.find('.selectorOptions');
    var position = $.inArray($(this), selectorOptions);

    if (position <= 0) {
        focusOptionRapp(selectRapp);
    } else {
        selectorOptions.eq(position - 1).trigger('focus');
    }
};

var setValueSelectRapp = function (funcSelect, selectedOption, selectRapp, idHidden) {
   
    var hiddenField = $(jqc(idHidden));
    selectedOption = $(jqc(selectedOption));
    selectRapp = $(jqc(selectRapp));

    // Valore selezionato
    var valueOption = selectedOption.attr('value');
    
    var titleOption = selectedOption.find('strong:first').html();
    var textOption = selectedOption.html();
    var inputOption = selectRapp.find('.inputOption:first');
    var prevSelectedOption = selectRapp.find('.selected:first');
    var isBookPopup = $('body:first').hasClass('book');

    // Aggiorna il tooltip degli intestatari
    if (isBookPopup) {
        selectedOption.closest('table').find('.uniqTooltipInnerHTML:first').html(selectedOption.find('.intestatari:first').html());
    }

    // Aggiorna il valore selezionato
    hiddenField.val(valueOption);
    inputOption.find('.input:first').html(titleOption);

    try {
        if (inputOption.next('.selector').css('display') === 'block') inputOption.trigger('focus');
    } catch (ex) {
    }

    // Rimuove la classe "selected" dall'opzione selezionata precedentemente
    if (prevSelectedOption.length) {
        prevSelectedOption.removeClass('selected');
        prevSelectedOption.closest('.group').removeClass('selected');
    }

    // Aggiunge la classe "selected" dall'opzione selezionata correntemente
    selectedOption.addClass('selected');
    // Aggiunge la classe "selected" al gruppo dell'opzione selezionata correntemente
    selectedOption.closest('.group').addClass('selected');
    if ($.type(funcSelect) === "function") funcSelect({ text: textOption, value: valueOption });
    //se ha classe placeholder la rimuove
    if(selectRapp.find(".input").hasClass("selettore-placeholder")) { selectRapp.find(".input").removeClass("selettore-placeholder");}
   
};

var observeOptionEvents = function (optionEl, inputOption, selectRapp, idHidden, funcSelect) {
    optionEl
        .mouseover(function (e) {
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
        })
        .click(function (e) {
            e.stopPropagation();

            // Chiude la tendina
            closeSelectRapp(selectRapp);

            // Aggiorna il valore selezinato
            setValueSelectRapp(funcSelect, $(this), selectRapp, idHidden);
        })
        .hideFocus = true;
};

var observeSelectRappEvents = function (inputOption, selectRapp, selector,hasPlaceholder,selectPlaceholder) {
    selectRapp.find('.inputSx:first')
        .mouseover(function () {
            inputOption.trigger('focus');
        })
        .mouseout(function () {
            if (selector.css('display') === 'none') {
                inputOption.trigger('blur');
            }
        })
        // Apre la tendina sul click sulla select
        .click(function () {
            //caso in cui vi è un placeholder all'apertura della select
            if(hasPlaceholder) {
                selectRapp.find(".input").addClass("selettore-placeholder").html(selectPlaceholder);
            }
            toggleSelectRapp(selectRapp,hasPlaceholder);
        });
    inputOption
        .focus(function () {
            setOverSelectRapp(selectRapp);
        })
        .blur(function () {
            if (selector.css('display') === 'none') {
                unSetOverSelectRapp(selectRapp);
            }
        })
        .hideFocus = true;
};

var toggleStepRichiesta = function (el) {
    //el.addClass('initToogle');
    el.closest('.steprichiesta').find('.steprichiestatit').addClass('initToogle');
    var btnToogle = el.closest('.steprichiesta.on').find('.stepToggle');
    if (btnToogle.length > 0) {
        btnToogle.closest('.steprichiesta').find('.steprichiestatit')
            .on('mouseover', function () {
                $(this).closest('.steprichiesta').css('cursor', 'pointer');
            })
            .on('click', function () {
                var stepRichiesta = $(this).closest('.steprichiesta');
                var modificaVisible = $(this).find('.modifica:visible');
                var nextStep, checkToDis, closeToDis;
                stepRichiesta.find('.stepToggle').eq(0).toggle();
                if (modificaVisible.length) {
                    modificaVisible.closest('span').hide();
                    stepRichiesta($(this).find('.modifica'));
                    nextStep = stepRichiesta.next('.steprichiesta');
                    checkToDis = nextStep.find('input[type="checkbox"]');
                    closeToDis = nextStep.find('.closePdfEmbedd');
                    checkToDis.attr('checked', false).attr('disabled', true);
                    checkToDis.prev('.hovfin').show();
                    closeToDis.trigger('click');
                }
            });
    }

};

var stepRichiesta = function (el, rimuoviel, idToHide) {
    el = $(el);
    var contbutton = el.closest('.steprichiesta');
    var contbuttonNext = $(contbutton).next('.steprichiesta');
    var contbuttonPrev = $(contbutton).prev('.steprichiesta');
    var icospunta = $(contbutton).find('.steprichiestatit span');
    var imgOn = $(contbuttonNext).find('.steprichiestatit img');

    //funzione che chiude i tooltip quando lo step perde il focus
    var tooltipOpened = contbutton.find('.uniqTooltip');
    if (tooltipOpened.length) {
        tooltipOpened.closest('span').attr('class', 'closed');
        tooltipOpened.remove();
    }

    //aggiunge classe elemento successivo
    if (el.hasClass('nextstep')) {
        if (contbuttonNext.length) {

            $(contbuttonNext).addClass('on').removeClass('off');
            //scrolla fino all'elemento
            setElementonView(contbuttonNext);
            //espande il contenuto successivo aggiungendo una fix per IE7/necessario il position
            $(contbuttonNext).find('.steprichiestacont div').eq(0).slideDown(300, function () {
                $(this).css("position", "static");

            });

            //cambia immagine elemento successivo
            if (imgOn.length) {
                var imgOnSrc = $(imgOn).attr('src').replace('off', 'on');
                $(contbuttonNext).find('.steprichiestatit img').eq(0).attr('src', imgOnSrc);
            }
        }
        //visualizza icona spunta
        $(icospunta).show();
        if (rimuoviel) {
            $(contbuttonPrev).find('.btnc,.backstep').remove();
            el.closest('.btnc').remove();
        }
        //se c'� la classe stepToogle
        el.closest('.steprichiesta.on').find('.stepToggle').hide();
    } else if (el.hasClass('backstep')) {
        $(contbutton).addClass('on').removeClass('off');
        $(contbuttonNext).removeClass('on').addClass('off');
        setElementonView(contbutton);
        $(contbuttonNext).find('.steprichiestacont div').eq(0).slideUp(300, function () {
            $(this).css("position", "relative");
        });
        if (imgOn.length) {
            var imgOffSrc = $(imgOn).attr('src').replace('on', 'off');
            $(contbuttonNext).find('.steprichiestatit img').eq(0).attr('src', imgOffSrc);
        }
        $(icospunta).hide();
    }

    if (idToHide) {
        idToHide = $(idToHide);
        idToHide.hide()
    }

    if (!(el.closest('.steprichiesta').find('.steprichiestatit').hasClass('initToogle'))) {
        toggleStepRichiesta(el);
    }

};

/* |FINE| FOCUS - Sposta il focus sui vari oggetti */

// Ritorna una oggetto per la option selezionata con 2 proprieta', "value" e "text"
// noinspection JSUnusedGlobalSymbols
var getSelectedOption = function (idSelect) {
    var selectedOption = $(jqc(idSelect)).find('.selected:first');
    return (selectedOption) ? { text: selectedOption.innerHTML, value: selectedOption.attr('value') } : null;
};

var preventClosingSelector = function (selectRapp) {
    var idRapp = selectRapp.attr('id');
    if (idRapp in closeOnBlur) clearTimeout(closeOnBlur[idRapp]);
};

// noinspection JSUnusedGlobalSymbols
var timeoutClosingSelector = function (selectRapp) {
    closeOnBlur[selectRapp.attr('id')] = setTimeout(function () {
        closeSelectRapp(selectRapp);
    }, 100);
};
/* |FINE| CREAZIONE - Select fittizia stilizzata */

/* APERTURA - Options della select fittizia */
var toggleSelectRapp = function (selectRapp, hasPlaceholder) {
    
    preventClosingSelector(selectRapp);

    var idHidden = hiddenIds[selectRapp.attr('id')];

    // Option selezionata
    var inputOption = selectRapp.find('.inputOption:first');

    // Div che contiene le option selezionabili
    var selector = selectRapp.find('.selector:first');

    // Chiude/apre la tendina
    if (selector.css('display') !== 'none') {
        // Chiude la tendina
        //se ho la versione placeholder quando chiudo la tendina ricompilo il selected
        if(hasPlaceholder) {
            selectRapp.find(".input").removeClass("selettore-placeholder").html(selectRapp.find("input[type='hidden']").val());
            
        }
        closeSelectRapp(selectRapp);
    } else {
        // Prima di aprire la tendina, chiude altre tendine eventualmente aperte
        $('.selectRapp').each(function (index, item) {
            item = $(item);
            closeSelectRapp(item);
            unSetOverSelectRapp(item);
        });

        riseZIndex(selectRapp);
        setOverSelectRapp(selectRapp);

        // Lista option selezionabili, piu' i divisori
        var selectorItems = selector.find('.selectorOptions');

        // Valore selezionato
        var selectedValue = $('#' + idHidden).val();

        selectorItems.each(function (index, item) {
            // Rimuove la classe over che potrebbe essere rimasta sull'oggetto nascosto
            item = $(item);
            item.removeClass('over');

            // Toglie l'elemento doppione
            if (selectedValue === item.attr('value')) {
                item.addClass('selected');
            } else {
                item.removeClass('selected');
            }
        });

        // Spacer tra tendina e select
        var selectorSpacer = selectRapp.find('.selectorSpacer:first');

        // Imposta l'altezza della tendina
        selector.css('height', 'auto');

        var selectorHeight = selector.height(),
            maxHeight = 218;

        selector.css({
            height: (selectorHeight > maxHeight) ? maxHeight + 'px' : selectorHeight + 'px',
            scrollTop: 0
        }).show();
        selectorSpacer.show();
        inputOption.trigger('focus');
    }
};

// Cerca le select da dinamicizzare e associa i gestori di eventi e le classi agli elementi della select
var createSelectRapp = function (idSelect, idHidden, funcSelect) {
    // Valorizzo gli oggetti globali
    var selectRapp = $(jqc(idSelect));
    //caso in cui vi è un placeholder all'apertura della select e debba essere popolato con tale placeholder
    var selectPlaceholder = selectRapp.attr("data-placeholder"),
        hasPlaceholder;
    typeof selectPlaceholder!=="undefined" ? hasPlaceholder = true : hasPlaceholder = false;

    
    if (selectRapp.length) {
        // Memorizza l'id del campo hidden
        hiddenIds[idSelect] = idHidden;

        // Div che contiene le option selezionabili
        var selector = selectRapp.find('.selector:first');

        // Option da impostare come selezionata
        var inputOption = selectRapp.find('.inputOption:first');

        // Lista option selezionabili
        var selectorOptions = selectRapp.find('.selectorOptions');

        // Lista option selezionabili
        var selectedOption = selectRapp.find('.selected:first');
       

        if (!selectedOption.length) {
            selectedOption = selectorOptions.first();
        }
        
        // Imposta il valore selezionato di default
        setValueSelectRapp(funcSelect, selectedOption, selectRapp, idHidden);

        /* SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */
        // Associa gli handler agli eventi della option
        observeSelectRappEvents(inputOption, selectRapp, selector,hasPlaceholder,selectPlaceholder);

        selectorOptions.each(function (index, item) {
            observeOptionEvents($(item), inputOption, selectRapp, idHidden, funcSelect);
        });
        /* |FINE| SELEZIONE - Gestione del click, mouseover, mouseout, focus e blur */

        /* NAVIGAZIONE - Da tastiera */
        // Spostamento con i 'tab' e le frecce su (38) e giu' (40)
        inputOption.keydown(function (e) {
            if (e.which === 38) {
                e.stopPropagation();
            } else if (e.which === 40) {
                e.stopPropagation();
                setTimeout(function () {
                    focusOptionDownRapp.call($(this), selectRapp,hasPlaceholder);
                }, 0);
            }
        });

        selectorOptions.keydown(function (e) {
            var optionSel = $(this);
            if (e.which === 38) {
                e.stopPropagation();
                setTimeout(function () {
                    focusOptionUpRapp.call(optionSel, selectRapp,hasPlaceholder);
                }, 0);
            } else if (e.which === 40) {
                e.stopPropagation();
                setTimeout(function () {
                    focusOptionDownRapp.call(optionSel, selectRapp,hasPlaceholder);
                }, 0);
            }
        });
        /* |FINE| NAVIGAZIONE - Da tastiera */
    }
};

/* |FINE| APERTURA - Options della select fittizia */

/** * |FINE| FRAMEWORK STILIZZAZIONE FORM ** */

/*** PLUGIN JQUERY ***/
(function ($) {
    /* Inizializzazione carousel "spalla" (wdg-ban)*/
    $.fn.initCarouselSpalla = function () {
        var carEl = this, carElId;

        if (carEl.length) {
            if (carEl.attr("id"))
                carElId = carEl.attr("id");
            else {
                carElId = "wdgCarousel_" + Math.floor(Math.random() * 99999999);
                carEl.attr("id", carElId);
            }
            var carItems = carEl.find(">*"), carItemWrap = $("<div>").addClass("carousel-inner"),
                carIndWrap = $("<ol>").addClass("carousel-indicators");

            $.each(carItems, function (i, item) {
                carItemWrap.append($(item).addClass("item carousel-item" + ((i === 0) ? " active" : "")));
                carIndWrap.append($("<li>").attr({
                    "data-slide-to": i,
                    "data-target": "#" + carElId
                }).addClass((i === 0) ? " active" : ""));
            });
            var carElClasses = "carousel slide";
            if (carItems.length <= 1) carElClasses += " no-indicators";
            carEl.addClass(carElClasses).empty().append(carIndWrap, carItemWrap).carousel({
                interval: 5000,
                ride: "carousel"
            }).removeClass("loading");
        }
    };

    /* CAROUSEL PLUS => WIDGET_030_CAROUSELPLUS */
    $.fn.carouselPlus = function (arg1, arg2) {
        return this.each(function () {
            var $carouselPlus = $(this),
                $pagesBox = $carouselPlus.find('.carouselPlusPages'),
                $pagesArr = $carouselPlus.find('.carouselPlusPage'),
                $carouselPlusNav = $carouselPlus.find('.carouselPlusNav'),
                $btnsArr = $carouselPlus.find('.carouselPlusBtn'),
                $arrowSx = $carouselPlus.find('.carouselPlusArrowSx'),
                $arrowDx = $carouselPlus.find('.carouselPlusArrowDx'),
                $btnTop = $carouselPlus.find('.carouselPlusBtnTop'),
                settings = {
                    loop: false,
                    interval: 3000,
                    currentPage: 0,
                    stopOnOver: true,
                    variableHeight: false,
                    vertical: false
                },
                animationDuration = 500,
                setDimensions, setPage, movePageAndButton,
                initData, setData, getData,
                startLoop, stopLoop, refresh, isSet;
            initData = function (key, type) {
                var val = getData(key, type);
                if (typeof val !== 'undefined') {
                    setData(key, val);
                } else {
                    setData(key, settings[key]);
                }
            };
            setData = function (key, val) {
                if (typeof val !== 'undefined') {
                    $carouselPlus.attr('data-' + key, val);
                } else {
                    $carouselPlus.removeAttr('data-' + key);
                }
            };
            getData = function (key, type) {
                var res = $carouselPlus.attr('data-' + key);
                if (typeof res !== 'undefined') {
                    switch (type) {
                        case 'numeric':
                            res = 1 * res;
                            break;
                        case 'boolean':
                            res = (res === 'true');
                            break;
                    }
                }
                return res;
            };
            
            setDimensions = function () {
                var width = $carouselPlus.width(),
                    height = 100,
                    variableHeight = getData('variableHeight', 'boolean'),
                    vertical = getData('vertical', 'boolean'),
                    currentPage = getData('currentPage', 'numeric');
                if (variableHeight && !vertical) {
                    height = $pagesArr.eq(currentPage).outerHeight();
                } else {
                    $pagesArr.each(function () {
                        var pageHeight = $(this).outerHeight();
                        if (height < pageHeight) {
                            height = pageHeight;
                        }
                    });
                }
                $pagesArr.width(width);
                if (vertical) {
                    $pagesArr.outerHeight(height);
                    $pagesBox.width(width).outerHeight($pagesArr.length * (height + 30));
                    $carouselPlus.addClass('vertical').outerHeight(height + $carouselPlusNav.outerHeight());
                } else {
                    $pagesBox.width($pagesArr.length * (width + 30)).outerHeight(height);
                }
                movePageAndButton();
            };
            setPage = function (index) {
                var loop = getData('loop', 'boolean');
                if (loop) {
                    stopLoop();
                }
                setData('currentPage', index);
                setDimensions();
                if (loop) {
                    startLoop();
                }
            };
            movePageAndButton = function () {
                var width = $carouselPlus.width(),
                    height = $carouselPlus.outerHeight(),
                    variableHeight = getData('variableHeight', 'boolean'),
                    currentPage = getData('currentPage', 'numeric'),
                    vertical = getData('vertical', 'boolean'),
                    $setBtn,
                    delay = 0;
                /* Navigazione */
                if ($carouselPlusNav.length) {
                    if ($btnsArr.length) {
                        $setBtn = $btnsArr.eq(currentPage);
                        $btnsArr.not(currentPage).removeClass('on');
                        $setBtn.addClass('on');
                    }
                    if ($arrowSx.length) {
                        if (!currentPage) {
                            $arrowSx.removeClass('off');
                        } else {
                            $arrowSx.addClass('off');
                        }
                    }
                    if ($arrowDx.length) {
                        if (currentPage === ($pagesArr.length - 1)) {
                            $arrowDx.removeClass('off');
                        } else {
                            $arrowDx.addClass('off');
                        }
                    }
                }
                /* Slide */
                $pagesArr.not(currentPage).css('opacity', 0).removeClass('on');
                $pagesArr.eq(currentPage).css('opacity', 1).addClass('on');
                if (variableHeight && !vertical) {
                    $pagesBox.outerHeight($pagesArr.eq(currentPage).outerHeight());
                    delay = animationDuration;
                } else if (vertical) {
                    height = $pagesArr.eq(currentPage).outerHeight();
                }
                setTimeout(function () {
                    if ($btnTop.length) {
                        $btnTop.css({
                            'left': $setBtn.position().left,
                            'width': $setBtn.width()
                        });
                    }
                    if (vertical) {
                        $pagesBox.css({
                            'margin-top': -currentPage * height + -(currentPage + 1) * 30 + 'px'
                        });
                    } else {
                        $pagesBox.css({
                            'margin-left': -currentPage * width + -(currentPage + 1) * 30 + 'px'
                        });
                    }
                }, delay);
            };
            startLoop = function () {
                var loopId;
                stopLoop();
                loopId = setInterval(function () {
                    var currentPage = getData('currentPage', 'numeric');
                    currentPage = ++currentPage % $pagesArr.length;
                    setPage(currentPage);
                }, getData('interval', 'numeric'));
                setData('loopId', loopId);
            };
            stopLoop = function () {
                var loopId = getData('loopId', 'numeric');
                if (typeof loopId !== 'undefined') {
                    loopId = clearInterval(loopId);
                    setData('loopId', loopId);
                }
            };
            refresh = function () {
                setDimensions();
                setPage(getData('currentPage', 'numeric'));
            };
            isSet = getData('isSet', 'boolean');
            if ($btnTop.length) {
                $btnTop.css('transition', '0s');
            }
            $pagesBox.css('transition', '0s');
            if (!isSet) {
                initData('currentPage', 'numeric');
                initData('interval', 'numeric');
                initData('loop', 'boolean');
                initData('stopOnOver', 'boolean');
                initData('variableHeight', 'boolean');
                initData('vertical', 'boolean');
                setData('isSet', true);
                if (settings.loop) {
                    startLoop();
                }
                $pagesBox.mouseover(function () {
                    var stopOnOver = getData('stopOnOver', 'boolean'),
                        loop = getData('loop', 'boolean');
                    if (stopOnOver && loop) {
                        stopLoop();
                    }
                }).mouseout(function () {
                    var stopOnOver = getData('stopOnOver', 'boolean'),
                        loop = getData('loop', 'boolean');
                    if (stopOnOver && loop) {
                        startLoop();
                    }
                }).on('cp-page-resized', '.carouselPlusPage.on', function () {
                   setDimensions();
                   
                });
                $pagesArr.each(function (index, page) {
                    if (typeof ResizeSensor !== 'undefined') {
                        new ResizeSensor(page, function () {
                            var isSet = getData('isSet', 'boolean');
                            if (isSet) {
                                $(page).trigger('cp-page-resized');
                            }
                        });
                    }
                });
                $btnsArr.each(function (index, btn) {
                    $(btn).click(function () {
                        setPage(index);
                    });
                });
                $arrowSx.click(function () {
                    var currentPage = getData('currentPage', 'numeric');
                    if (currentPage) {
                        setPage(currentPage - 1);
                    }
                });
                $arrowDx.click(function () {
                    var currentPage = getData('currentPage', 'numeric');
                    if (currentPage < ($pagesArr.length - 1)) {
                        setPage(currentPage + 1);
                    }
                });
                $(window).resize(function () {
                    refresh();
                    setTimeout(refresh,200);

                });
                $("#spallaswitch").click(function () {
                    setTimeout(setDimensions,100);
                    setTimeout(setDimensions,200);
                    setTimeout(setDimensions,300);
                })
                $('.slider-in-page li').click(function () {
                    setDimensions();
                });
                $pagesBox.css('visibility', 'visible');

                setTimeout(function () {
                    $(window).resize();
                }, 100);

            } else if (typeof arg1 === 'string') {
                if (typeof arg2 !== 'undefined') {
                    switch (arg1) {
                        case 'currentPage':
                            setPage(arg2);
                            break;
                        case 'interval':
                            setData('interval', arg2);
                            break;
                        case 'stopOnOver':
                            setData('stopOnOver', arg2);
                            break;
                    }
                } else {
                    switch (arg1) {
                        case 'startLoop':
                            setData('loop', true);
                            startLoop();
                            break;
                        case 'stopLoop':
                            setData('loop', false);
                            stopLoop();
                            break;
                    }
                }
            } else {
                refresh();
            }
            if ($btnTop.length) {
                $btnTop.css('transition', (animationDuration / 1000) + 's');
            }
            $pagesBox.css('transition', (animationDuration / 1000) + 's');
        });
    };

    /* TOOLTIP PLUS => TEXT_010, TEXT_011, TEXT_012 */
    $.fn.tooltipPlus = function (arg1, arg2) {
        // Viene eseguito su ogni elemento catturato dal selettore jQuery
        this.each(function () {
            var $tooltipPlus = $(this),
                hasOptions = $.isPlainObject(arg1),
                // Icona di chiusura
                isCloseable = $tooltipPlus.hasClass('closeable'),
                ajaxUrl, settings,
                addIcon, setTitle, updateText, setOpenHandlers, setCloseHandlers;
            updateText = function (newTitle) {
                if (newTitle) {
                    $tooltipPlus.attr('data-original-title', addIcon(newTitle));
                    $tooltipPlus.attr('data-title', addIcon(newTitle));
                }
                $tooltipPlus.tooltip('show');
            };
            setTitle = function () {
                return addIcon($(this).attr('data-title'));
            };
            addIcon = function (title) {
                var closeIcoTooltip = !(isCloseable) ? ' ' : '<a href="javascript:" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>';
                return title + closeIcoTooltip;
            };
            setOpenHandlers = function () {
                $tooltipPlus.on('click focusin', function (e) {
                    e.stopPropagation();
                    var openedTooltips = $(".tooltip.in");
                    // Chiude gli altri tooltip aperti
                    openedTooltips.tooltip('hide');
                    //hack per i tooltip contenenti immagini
                    $tooltipPlus.tooltip('show');
                    //se non serve il riposizionamento in modale aggiungere la calsse no-rendering-position al target dell'evento
                    if ($tooltipPlus.closest('.modal').length > 0 && !$tooltipPlus.hasClass('no-rendering-position')) {
                        openedTooltips.css('left', 0);
                        openedTooltips.find('.tooltip-arrow').css('left', '30%');
                        $('.webview').find('.tooltip.in').closest('.fixed-table-body').removeClass('fixed-table-body').addClass('fixed-table-body-static');
                    }
                    // Testo caricato da AJAX
                    ajaxUrl = $tooltipPlus.attr('data-url') || null;
                    if (ajaxUrl) {
                        $tooltipPlus.removeAttr('data-url');
                        $.ajax({
                            url: ajaxUrl,
                            dataType: 'html',
                            method: 'GET'
                        }).done(function (data) {
                            updateText(data);
                        }).fail(function () {
                            updateText('Errore caricamento dati');
                        });
                    }
                });
            };
            setCloseHandlers = function () {
                if (isCloseable) {
                    $tooltipPlus.find(".closeTooltip").on('click', function () {
                        if ($(this).closest('.modal').length > 0) {
                            $('.webview').find('.tooltip.in').closest('.fixed-table-body-static').removeClass('fixed-table-body-static').addClass('fixed-table-body');
                        }
                        $tooltipPlus.tooltip('hide');
                    });
                }
                $tooltipPlus.on('focusout', function () {
                    $tooltipPlus.tooltip('hide');
                });
            };
            if (hasOptions || !arg1) {
                // Inizializzazione tooltip
                settings = $.extend({
                    html: true,
                    title: setTitle,
                    trigger: 'manual',
                    animation: false,
                    placement: function (tip, element) {
                        if ($(element).closest('.modal').length > 0) {
                            return 'auto';
                        } else {
                            return 'auto';
                        }
                    }
                }, hasOptions ? arg1 : {});
                $tooltipPlus.tooltip(settings);
                setOpenHandlers();
                setCloseHandlers();
            } else if (arg1 !== 'update') {
                $tooltipPlus.tooltip(arg1);
            } else if (arg1 === 'update') {
                updateText(arg2);
            }
        });
        return this;
    };

    /* COMBOBOX PLUS => FORM_014 */
    $.fn.comboboxPlus = function (option, option2) {
        var that = this,
            $this = $(this),
            data,
            ops = ['isSelected', 'getSelection', 'getQuery', 'clear', 'onChange', 'getValue'],
            oldIsSelected, oldQuery, changeHandler,
            createChangeHandler = function (changeFunc) {
                oldIsSelected = null;
                oldQuery = null;
                return function () {
                    var func = function () {
                        var isSelected = data.selected,
                            query = data.query;

                        if (typeof isSelected == 'undefined' || isSelected !== oldIsSelected || query !== oldQuery) {
                            changeFunc.call(that);
                            oldIsSelected = isSelected;
                            oldQuery = query;
                        }
                    };
                    setTimeout(func, 10);
                };
            },
            getQuery = function () {
                return typeof data.query !== 'undefined' ? data.query : '';
            };
        if (typeof option == 'string' && ~ops.indexOf(option)) {
            $this = $this.eq(0);
            data = $this.data('combobox');
            if (data) {
                if (option === 'isSelected') {
                    return data.selected;
                } else if (option === 'getSelection') {
                    return data.$source.val();
                } else if (option === 'getQuery') {
                    return getQuery();
                } else if (option === 'getValue') {
                    return data.selected ? data.$source.val() : getQuery();
                } else if (option === 'clear') {
                    data.clearTarget();
                    data.triggerChange();
                    data.clearElement();
                    data.query = data.$element.val();
                    return $this;
                } else if (option === 'onChange') {
                    if (typeof option2 == "function") {
                        changeHandler = createChangeHandler(option2);
                        data.$element.on('keyup focus blur', changeHandler);
                        changeHandler();
                        return $this;
                    } else if (!option2 && (typeof option2 == 'undefined' || typeof option2 == 'object')) {
                        if (changeHandler) {
                            data.$element.off('keyup focus blur', changeHandler);
                            changeHandler = null;
                        }
                        return $this;
                    }
                }
            }
        }
        return $this.combobox(option);
    };

    /* MODAL PLUS */
    $.fn.modalPlus = function (arg1, arg2) {
        var $modal = this,
            settings = {
                backdrop: 'static',
                keyboard: false,
                show: true
            },
            hasOptions = $.isPlainObject(arg1),
            hideAll, showLoading, removeLoading,
            showContent, showMessage, showError;
        // Funzioni private
        hideAll = function () {
            removeLoading();
            $modal.find('.confermaContent').removeClass('loading').hide();
            $modal.find('.confermaResponse, .boxesito').hide();
        };
        // Funzioni pubbliche
        showLoading = function () {
            $modal.find('.confermaContent').addClass('loading');
        };
        removeLoading = function () {
            $modal.find('.confermaContent').removeClass('loading');
        };
        showContent = function () {
            hideAll();
            $modal.find('.confermaContent').show();
        };
        showMessage = function (message) {
            hideAll();
            $modal.find('.boxesito.positivo .messageResponse').html(message);
            $modal.find('.confermaResponse, .boxesito.positivo').show();
        };
        showError = function (error) {
            hideAll();
            $modal.find('.boxesito.negativo .messageResponse').html(error);
            $modal.find('.confermaResponse, .boxesito.negativo').show();
        };
        if (typeof arg1 === 'undefined' || hasOptions) {
            $.extend(settings, arg1);
            $modal.modal(settings);
        } else if (typeof arg1 === "string" && (typeof arg2 === "undefined" || typeof arg2 === "string")) {
            switch (arg1) {
                case "toggle":
                case "show":
                case "hide":
                case "handleUpdate":
                    this.modal(arg1);
                    break;
                case "showLoading":
                    showLoading();
                    break;
                case "removeLoading":
                    removeLoading();
                    break;
                case "showContent":
                    showContent();
                    break;
                case "showMessage":
                    showMessage(arg2);
                    break;
                case "showError":
                    showError(arg2);
                    break;
            }
        }
        return this;
    };

    /* SLIDER PLUS => FORM_190-1-2 */
    $.fn.sliderPlus = function (options) {
        var prevenSlider = this,
            prevenSliderAlt = prevenSlider.nextAll('.slider-alt'),
            sliderText = prevenSlider.find('.sliderText'),
            sliderTicks = prevenSlider.find('.sliderTicks'),
            sliderTick, totTicks, tickInterval, prevenSliderWrap, prevenSliderSpinnerMore,
            settings = {
                min: 1,
                max: 10,
                step: 1,
                value: 1
            },
            n,
            i,
            cur,
            highlightTick,
            setText;
        settings.hasText = sliderText.length;
        settings.tick = options.tick ? options.tick : options.step;
        settings.value = options.value ? options.value : options.min;
        settings.milestone = options.milestone ? options.milestone : 0;
        settings.range = 0;
        settings.hasTicks = sliderTicks.length;
        settings.hasMidTicks = !prevenSlider.hasClass('sliderNoMidTicks');
        settings.hasHighlight = sliderTicks.hasClass('sliderTicksHighlight');
        settings.custom = options.custom ? options.custom : false;
        settings.range = options.range ? options.range : false;
        if (settings.custom) {
            settings.min = 0;
            settings.max = settings.custom.length - 1;
            settings.step = 1;
        } else {
            settings.min = options.min ? options.min : 0;
            settings.max = options.max ? options.max : 10;
            settings.step = options.step ? options.step : 1;
        }
        highlightTick = function (value) {
            var current = (settings.custom) ? value : (Math.round((value - settings.min) / settings.milestone));
            if (settings.hasHighlight) {
                prevenSlider.find('.sliderTicks .sliderTickMilestone').removeClass('sliderTickOn');
                if (value === settings.min) {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').first().addClass('sliderTickOn');
                } else if (value === settings.max) {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').last().addClass('sliderTickOn');
                } else {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').eq(current).addClass('sliderTickOn');
                }
            }
        };
        setText = function (value) {
            if (settings.hasText) {
                var v = value;
                if (settings.custom && (!isNaN(settings.custom[v].value))) {
                    v = settings.custom[v].value;
                }
                sliderText.html(v);
            }
        };
        settings.slide = function (event, ui) {
            highlightTick(ui.value);
            setText(ui.value);
            if ($.isFunction(options.slide)) {
                options.slide(event, ui);
            }
        };
        settings.change = function (event, ui) {
            highlightTick(ui.value);
            setText(ui.value);
            prevenSliderAlt.val(ui.value);
            if ($.isFunction(options.change)) {
                options.change(event, ui);
            }
        };
        settings.start = function (event, ui) {
            $(ui.handle).addClass("start");
            if ($.isFunction(options.start)) {
                options.start(event, ui);
            }
        };
        settings.stop = function (event, ui) {
            $(ui.handle).removeClass("start");
            if ($.isFunction(options.stop)) {
                options.stop(event, ui);
            }
        };
        settings.create = function (event, ui) {
            if ($.isFunction(options.create)) {
                options.create(event, ui);
            }

        };
        settings.numberFormat = function (val) {
            var res = val;
            if ($.isFunction(options.numberFormat)) {
                res = options.numberFormat(val);
            }
            return res;
        };
        // Inizializzazione spinners (se l'opzione e' presente ed e' true)
        if (options.spinners) {
            // Wrappa lo slider e la select
            prevenSliderWrap = $("<div>").addClass("slider-spinners");
            prevenSlider.wrap(prevenSliderWrap);
            var prevenSliderSpinner = $("<a>").addClass("slider-spin").click(function () {
                // La funzione e' scritta per reperire sempre i valori dello slider aggiornati in totale autonomia
                var spn = $(this),
                    spnk = (spn.hasClass("slider-spin-more")) ? 1 : -1,
                    slid = spn.parent().find(".slider-box").slider(),
                    slidval = slid.slider("value"),
                    slidmin = slid.slider().min,
                    slidmax = slid.slider("option", "max"),
                    slidstep = slid.slider("option", "step"),
                    newval = slidval + (slidstep * spnk);
                if (!(newval < slidmin || newval > slidmax)) {
                    slid.slider("value", newval).change();
                }
            });
            prevenSliderSpinnerMore = prevenSliderSpinner.clone(true, true).addClass("slider-spin-more");
            prevenSlider.after(prevenSliderSpinner.append($("<i>").addClass("icon icon-spinner_less")).append($("<i>").addClass("icon icon-meno")), prevenSliderSpinnerMore.append($("<i>").addClass("icon icon-spinner_more")).append($("<i>").addClass("icon icon-piu")));
        }
        // Slider versione tablet e desktop
        // Se le options sono un comando di qualche tipo, lo filtra, altrimenti
        prevenSlider.slider(settings);
        // Slider versione smartphone
        prevenSliderAlt.empty();

        if (settings.custom) {
            for (i = 0; i < settings.custom.length; i++) {
                cur = settings.custom[i];
                var value = (cur.value) ? cur.value : i + 1;
                prevenSliderAlt.append($('<option>').text(cur.name).val(settings.numberFormat(value)));
            }
        } else {
            for (i = settings.min; i <= settings.max; i += settings.step) {
                prevenSliderAlt.append($('<option>').text(settings.numberFormat(i)).val(i));
            }
        }

        prevenSliderAlt.val(settings.value);
        prevenSliderAlt.change(function () {
            prevenSlider.slider("option", "value", 1 * prevenSliderAlt.val());
        });
        // Aggiungo le tacche verticali allo slider
        totTicks = Math.floor((settings.max - settings.min) / settings.tick) + 1;
        if (settings.hasTicks) {
            sliderTicks.empty();
            i = 0;
            if (settings.custom) {
                tickInterval = 100 / (settings.custom.length - 1);
                for (n = 0; n < settings.custom.length; n++) {
                    cur = settings.custom[n];
                    sliderTick = $('<div>').addClass('sliderTick').css('left', tickInterval * i + '%');
                    sliderTicks.append(sliderTick);
                    sliderTick.addClass("sliderTickHigh").append($("<span>").addClass("sliderTickMilestone").html(cur.name));
                    ++i;
                }
            } else {
                tickInterval = 100 / (totTicks - 1);
                for (n = settings.min; n <= settings.max; n += settings.tick) {
                    if (settings.hasMidTicks || n === settings.min || n === settings.max) {
                        sliderTick = $('<div>').addClass('sliderTick').css('left', tickInterval * i + '%');
                        sliderTicks.append(sliderTick);
                        if ((settings.milestone && (n % settings.milestone) === 0) || (n === settings.min || n === settings.max)) {
                            sliderTick.addClass("sliderTickHigh").append($("<span>").addClass("sliderTickMilestone").html(settings.numberFormat(n)));
                        }
                    }
                    ++i;
                }
            }
            highlightTick(settings.value);
        }
        setText(settings.value);
        return this;
    };
    /* Inizializzazione multi-selector */

    /* SLIDER RANGE */
    $.fn.sliderRange = function (params) {
        var sliderEl = this;
        var sliderWrap = this.parent(".sliderRange");
        // Parametri di default
        params.range = true;
        // Inizializza lo slider (passandogli tutti i Parametri)
        sliderEl.slider(params);
        // Appende il container delle milestones
        if (params.milestones) {
            var divMilestones = $("<div>").addClass("slider-milestones"),
                tickwidth = 100 / (params.milestones - 1),
                tickprogress = 0,
                tickVal = 0,
                x,
                tickunit = (params.unit) ? params.unit : "";
            if (params.min && params.max) {
                // Calcola la base per inserire i numeri
                tickprogress = (params.max - params.min) / (params.milestones - 1);
                tickVal = params.min;
            }
            for (x = 0; x < params.milestones; x++) {
                divMilestones.append($("<div>").addClass("milestone").css("left", (x * tickwidth) + "%").append($("<div>").addClass("thick"), $("<div>").addClass("number").html(Math.round(tickVal * 100) / 100 + tickunit)));
                tickVal += tickprogress;
            }
            sliderWrap.append(divMilestones);
        }
        return this;
    };

    /* UTILIZZO
        $(el).multiselector() = inizializza un multiselettore.

        I parametri sono specificati nel wrapper del multiselettore stesso e sono:
        class="multi-selector"  <-- discriminante per l'auto-inizializzazione
        data-input="id" <-- id dell'input interno al multiselettore
        data-overlay-input="id-overlay-input" <-- id dell'input hidden contenuto nella modale e relativo al multi-selettore

        $(el).multiselector("value","XYZ") <-- Setta il valore per il multiselettore (e campo di input associato),

            reperisce i dati dalla modale associata.
            In alternativa e' possibile utilizzare un parametro con la matrice per il reperimento dei dati es:
            $(el).multiselector({"value":"XYZ","valuearray" : obj)
            laddove
            obj = [
                "01" : "Uno", "02" : "Due", "03" : "Tre"
            ]
    */
    $.fn.multiselector =
        /***
         *
         * @param action
         * @param params
         * @param params.valuearray
         */
        function (action, params) {
            var multiselector = $(this);
            var defaultLabel = "Seleziona...";
            var msReset;
            if (!action) {
                if (multiselector.length) {
                    /* Appende i controlli */
                    // Funzione open associata ad una modale e ad un campo pilota (le azioni sono specificate per la modale stessa)
                    var msOpen = $("<a>").addClass("open").html(defaultLabel).click(function () {
                        var ms = $(this).parents(".multi-selector");
                        var layerInput = $("input[name=" + ms.attr("data-overlay-input") + "]");
                        var layer = layerInput.parents(".modal");
                        // Carica i dati ed attiva le selezioni nella modale
                        layerInput.parents(".selector-wrap").find(".selector-box").removeClass("selected");
                        var selections = ms.find("input[name=" + ms.attr("data-input") + "]").val();
                        $.each(selections.split(","), function (i, v) {
                            layer.find(".selector-box[data-value=" + v + "]").addClass("selected");
                        });
                        layerInput.val(selections);
                        layer.modal("show");
                    });
                    // Funzione reset con semplice svuotamento del campo
                    var msResetFunc = function () {
                        var ms = $(this).parents(".multi-selector");
                        ms.find(".open").html(defaultLabel);
                        ms.find("input[name=" + ms.attr("data-input") + "]").val("");
                        $(this).hide();
                    };
                    msReset = $("<a>").addClass("reset").hide().append($("<i>").addClass("icon icon-alert_error_fill")).click(msResetFunc);
                    multiselector.append(msOpen, msReset);
                    multiselector.multiselector("value", multiselector.find("input[name=" + multiselector.attr("data-input") + "]").val());
                }
            } else {
                // Richiesta di un azione specifica sull'oggetto
                if (action === "value") {
                    var msField = multiselector.find("input[name=" + multiselector.attr("data-input") + "]");
                    var mOlField = $("input[name=" + multiselector.attr("data-overlay-input") + "]");
                    var mOlData = {};
                    msReset = multiselector.find(".reset").hide();
                    if (mOlField.length) {
                        // Considera il campo come base di partenza
                        $.each(mOlField.parents(".selector-wrap").find(".selector-box"), function (i, v) {
                            v = $(v);
                            mOlData[v.attr("data-value").toString()] = v.attr("data-name");
                        });
                    }
                    var msFv = "";
                    if (typeof params == "string") {
                        msFv = params;
                    } else {
                        // Verifica l'esistenza di un oggetto associato da sfogliare dove
                        // Il primo valore e' la chiave ed il secondo e' l'etichetta
                        if (params.valuearray) {
                            msFv = params.value;
                            mOlData = params.valuearray;
                        }
                    }
                    msField.val(msFv);
                    var textEti = defaultLabel;
                    if (msFv.length > 0) {
                        var valcount = msFv.split(",").length;
                        if (valcount === 1) {
                            // Ricopia il nome dal data-name
                            textEti = mOlData[msFv];
                        }
                        if (valcount > 1) {
                            textEti = valcount + " elementi selezionati";
                        }
                        msReset.fadeIn(500);
                    }
                    multiselector.find(".open").html(textEti);
                }
            }
        };

    /* GESTIONE AUTOCOMPLETE OPTIONS
            selectable = boleano, se presente o meno la select nell'autocomplete
            clearable = boleano, se presente o meno la X di clear nell'autocomplete
            nRis = numero risultati da mostrare per volta
            beginning = pesca solo l'inizio delle parole
        */
    $.fn.autoComplete = function (elenco, params) {
        "use strict";
        var x, defaults, options;
        if (elenco) {
            defaults = {
                selectable: true,
                clearable: false,
                numResults: 10,
                minLength: 0,
                filter: 'all', // 'beginning', 'all' or function
                renderItem: null,
                renderMenu: null,
                resizeMenu: null
            };

            options = $.extend({}, defaults, params);
            // Filtra in base alla stringa di ricerca
            if (typeof options.filter === 'function') {
                this.autocomplete({
                    source: options.filter,
                    minLength: options.minLength
                });
            } else if (options.filter === 'beginning') {
                this.autocomplete({
                    source: function (req, responseFn) {
                        var re, matcherIn, a;
                        re = $.ui.autocomplete.escapeRegex(req.term);
                        matcherIn = new RegExp('\\b' + re, 'i');
                        a = $.grep(elenco, function (value) {
                            return matcherIn.test(value);
                        });
                        responseFn(a);
                    },
                    minLength: Math.max(1, options.minLength)
                });

            } else {
                this.autocomplete({
                    source: function (req, responseFn) {
                        var re, matcherIn, a;
                        re = $.ui.autocomplete.escapeRegex(req.term);
                        matcherIn = new RegExp(re, 'i');
                        a = $.grep(elenco, function (value) {
                            return matcherIn.test(value);
                        });
                        responseFn(a);
                    },
                    minLength: options.minLength
                });
            }
            // Classe per form vecchi
            if (this.parents(".form01").length) {
                this.autocomplete("widget").addClass("oldform");
            }
            // Personalizzazione con select
            if (options.selectable) {
                // Crea il pulsantino che emula la select
                var sb = $("<a>").addClass("autoSelButt").append('<i class="icon icon-arrow_down">');
                this.after(sb);
                sb.click(function () {
                    var acf = $(this).parent().find(".ui-autocomplete-input:first");
                    if (acf.autocomplete("widget").css("display") === "none") {
                        acf.autocomplete("search", "");
                    } else {
                        acf.autocomplete("close");
                    }
                });
            }
            // Personalizzazione con tasto di clear
            if (options.clearable) {
                // Crea il pulsantino che emula la select
                var sc = $("<a>").addClass("autoClearButt"),
                    wrapperInput = $("<div>").addClass("autoClearWrapper esteso");
                this.wrap(wrapperInput);
                this.after(sc);
                sc.hide();
                this.keyup(function () {
                    if ($(this).val() !== '') {
                        sc.show();
                        sc.closest('.autoClearWrapper').removeClass('esteso');
                    } else {
                        sc.hide();
                        sc.closest('.autoClearWrapper').addClass('esteso');
                    }
                });
                sc.click(function () {
                    $(this).prev('input').val('');
                    sc.closest('.autoClearWrapper').addClass('esteso');
                    sc.hide();
                });

            }
            // Numero max elementi visibili
            if (options.numResults > 0) {
                var listaLi;
                this.autocomplete({
                    open: function () {
                        listaLi = $(this).data("uiAutocomplete").menu.element.find('li');
                        if (listaLi.length > options.numResults) {
                            for (x = options.numResults; x < listaLi.length; x++) {
                                $(listaLi[x]).remove();
                            }
                        }
                    }
                });
            }

            // Render e resize
            if (options.renderItem) {
                this.autocomplete().data("ui-autocomplete")._renderItem = options.renderItem;
            }
            if (options.renderMenu) {
                this.autocomplete().data("ui-autocomplete")._renderMenu = options.renderMenu;
            }
            if (options.resizeMenu) {
                this.autocomplete().data("ui-autocomplete")._resizeMenu = options.resizeMenu;
            }
            if (options.select) {
                this.autocomplete("option", "select", options.select);
            }
            if (options.close) {
                this.autocomplete("option", "close", options.close);
            }
        }
        return this;
    };
}(jQuery));

var initCarouselPlus = function () {
    $('.carouselPlus').carouselPlus();
};

var initModalPlus = function () {
    $('.modalPlus').each(function () {
        var $modal = $(this);
        $modal.on('show.bs.modal', function () {
            $modal.modalPlus('showContent');
        });
        $modal.find('.modalPlusAnnulla').click(function () {
            $modal.modalPlus('hide');
        });
        $modal.find('.modalPlusConferma').click(function () {
            $modal.modalPlus('showLoading');
        });
    });
};

var initTooltip = function (wrapper) {
    var $wrapper = $(wrapper || 'body');
    $wrapper.find("[data-toggle='tooltip']").not(".inited").tooltipPlus().addClass("inited").on('shown.bs.tooltip', function () {
        $('.tooltip').css('z-index', getNextHighestZindex());
        if (feBank==="youweb")  $('.tooltip').css('margin-left', "5px");
    });

    // html complesso per i tooltip con ID indicato
    $.each($wrapper.find("[data-htmlid]"), function (i, v) {
        var ttHtml = $($(v).attr("data-htmlid")).addClass("inited");
        $(v).attr("data-title", ttHtml.html());
    });
    // Se l'id del tooltip non e' specificato...
    $.each($wrapper.find(".htmlTooltip").not(".inited"), function (i, v) {
        var ttHtml = $(v).addClass("inited");
        ttHtml.prev("[data-toggle='tooltip']").attr('data-title', ttHtml.html());
    });

    // Click fuori dal tooltip per chiuderlo
    var bodyEl = $('body');
    if (!bodyEl.hasClass('ttInited')) {
        bodyEl.addClass('ttInited').on('click touchstart', function (e) {
            var target = $(e.target),
                openedTooltip = $(".tooltip.in"),
                isNotTooltip = target.attr('data-toggle') !== "tooltip",
                clickedOnCloseable = target.closest(".closeTooltip").length,
                clickedOutsideNotCloseable = !openedTooltip.find('.closeTooltip').length && !target.closest(".tooltip.in").length;
            if (isNotTooltip && (clickedOnCloseable || clickedOutsideNotCloseable)) {
                openedTooltip.tooltip('hide');
            }
        });
    }
};

/* Gestione ed inizializzazione selector box */
var selectorBoxInit = function () {
    /* Inizializza tutto partendo dal valore del campo */
    $.each($(".selector-wrap"), function (k, v) {
        var sw = $(v);
        var impVal = sw.find("input[name=" + sw.attr("data-input-name") + "]").val();
        if (impVal.length > 0) {
            $.each(impVal.split(","), function (ind, val) {
                sw.find(".selector-box[data-value=" + val + "]").addClass("selected");
            });
        }
    });
    /* Comportamenti con emulazione sul click */
    $(".selector-wrap .selector-box").click(function () {
        var el = $(this);
        if (!el.hasClass("disabled")) {
            var elPar = el.parents(".selector-wrap");
            if (elPar.attr("data-input-type") === "radio") {
                // Replica il comportamento esclusivo dei radio button
                elPar.find(".selector-box").not(".disabled").removeClass("selected");
                el.addClass("selected");
            } else {
                // Replica il comportamento di un checkbox (attiva o disattiva )
                el.toggleClass("selected");
            }
            var impField = elPar.find("input[name=" + elPar.attr("data-input-name") + "]");
            var impVal = [];
            $.each(elPar.find(".selector-box.selected"), function () {
                impVal.push($(this).attr("data-value"));
            });
            impField.val(impVal);
        }
    });
};

/*** FRAMEWORK TOOLTIP ****/

/* Nasconde il tooltip*/
// Setting dei tooltip a livello globale
var ttSet = function () {
    traceOld("ttSet()");
    initTooltip();
};

//Inizializzazione dell'oggetto tooltip
// noinspection JSUnusedGlobalSymbols
var ttInit = function () {
    traceOld("ttInit()");
    initTooltip();
};

/* Mostra il tooltip relativo all'oggetto */
var ttShow = function (e, ttEl) {
    $(ttEl || this).tooltip('show');
};

/* Nasconde il tooltip*/
var ttHide = function () {
    $(".tooltip.in").tooltip('hide');
};

var addEvent = function (o, n, h) {
    $(o).on(n, h);
    traceOld("addEvent()");
};

var removeEvent = function (o, n, h) {
    $(o).off(n, h);
    traceOld("removeEvent()");
};

// funzione di styling dell'autocomplete per evidenziare le lettere cercate
var stylingResults = function (ul, item) {
    "use strict";
    var resultItem,
        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
    resultItem = item.label.replace(x, function (Match) {
        return '<strong>' + Match + '</strong>';
    });
    return $("<li></li>")
        .data("item.autocomplete", item)
        .append("<a class='autocomplete_link'>" + resultItem + "</a>")
        .appendTo(ul);
};

// funzione per aggiungere e rimuovere campi
// noinspection JSUnusedGlobalSymbols
var maskTin = function (el, condition) {
    var elToMask = $(el);
    elToMask.each(function () {
        //if($(this).val() =='' && condition == true )
        if (condition === true) {
            $(this).val('').mask("999-99-9999", {
                "placeholder": "_________"
            }).focus();
        } else {
            $(this).unmask();
            if ($(this).val() !== 'Non previsto') {
                $(this).val('')
            }
        }

    })
};

var iconMultilayer = function () {
    $.each($(".glyph").not(".layered"), function (ind, val) {
        var el = $(val),
            i;
        for (i = 1; i <= 13; i++) {
            el.append($("<span>").addClass("path" + i));
        }
        el.addClass("layered");
    });
};

/* gestione accordion tabelle responsive*/
// noinspection JSUnusedGlobalSymbols
var fixCols = function () {
    $('.detail-icon').on('click', function () {
        $(this).closest('tr').next('.detail-view').find('td').attr('colspan', $(this).closest('table').find('th:visible').length);
    });
};

//stilizzazione tabelle sortable
var styleSortTable = function () {
    $('table.sortableTable').each(function () {
        $(this).on('post-body.bs.table', function () {
            var $table = $(this);
            $table.find('.sortable').closest('th').addClass('sortableTh');
            $table.find('.sortable.both').closest('th').removeClass('sortedTh');
            $table.find('.sortable.desc,.sortable.asc').closest('th').addClass('sortedTh');
            $table.find('*[data-toggle=tooltip].inited').removeClass("inited");
            initTooltip();
        });
    });
};

// Colonne fixed nelle tabelle (ora funzione inizializzata a livello di radice)
var  columnBsFixedResize = function() {
    $("table.has-fixed-cols").each(function(){
        var tb = $(this);
        var tbw = tb.outerWidth();
        tb.parents(".bootstrap-table").find(".fixed-columns table").css("width",tbw + "px")
    });
}

var columnBsFixed = function(){

    var tbHfc =  $("table.has-fixed-cols");
    
    if (tbHfc.length>0) {
       
        // Handler per il resize
        $(window).resize(function(){columnBsFixedResize(); if(feBank && feBank=="youweb"){setTimeout(columnBsFixedResize,300)}});

        tbHfc.each(function(){

            $(this).on('post-body.bs.table', function () {

                // Clona l'intera tabella
                var tbs = $(this);
                var fixedColumns= parseFloat(tbs.attr("data-fixed-cols"));

                var tbbsTab = tbs.parents(".bootstrap-table");
                tbbsTab.find("div.fixed-columns").remove();

                // calcolo della larghezza delle colonne scelte
                var fixWidth = 0;
                for(x=0;x<fixedColumns;x++) {
                    fixWidth += tbs.find("th").eq(x).outerWidth()
                }

                var tbfix = tbs.clone(true).attr("id",tbs.attr("id")+"_columnsort").css("width", tbs.outerWidth() + "px");

                // Regole per il controllo dei "sortable"
                tbfix.find('.sortable').closest('th').addClass('sortableTh');
                tbfix.find('.sortable.both').closest('th').removeClass('sortedTh');
                tbfix.find('.sortable.desc,.sortable.asc').closest('th').addClass('sortedTh');

                tbbsTab.prepend(
                    $("<div>").addClass("fixed-columns").append(tbfix).css({"width": fixWidth + 1 + "px"})
                );

                // Reinizializzazione dei tooltip
                tbfix.find("*[data-toggle=tooltip]").each(function(){
                  var el = $(this);
                  el.removeClass("inited").unbind();
                  var clone = el.clone();
                  elPr = el.parent();
                  el.remove();
                  elPr.append(clone);
                });
                initTooltip();
            });


    });




    }

}

/* GESTIONE SPINNER
    options.idInput = elemento da spinnare
    options.step =  quanto deve aumentare e diminuire
    options.min =  limite minimo
    options.max =  limite massimo
    options.culture = paese di riferimento,
    options.numberFormat = formato numerico,
    options.spin = funzione che parte allo spin
 */
var setSpinner = function (options) {
    options.idInput = $(options.idInput);
    options.idInput.spinner({
        icons: {
            down: "icon " + ((feBank==="webank")? "icon-spinner_less":"icon-meno"),
            up: "icon " + ((feBank==="webank")? "icon-spinner_more": "icon-piu")
        },
        min: options.min,
        max: options.max,
        step: options.step,
        culture: options.culture,
        numberFormat: options.numberFormat,
        spin: options.spin,
        stepUp: options.stepUp,
        stepDown: options.stepDown,
        start: options.start,
        stop: options.stop,
        change: options.change
    });
};

/*****************************************************************************************************************************************************
 * AZIONI - Overlayer icona operativa *
 *
 * @author Andrea Colanicchia
 */
// Array che registra se un overlayer e' visualizzato/nascosto
var multiLinksFlag = {};

// Visualizza/nasconde un overlayer
var multiLinks = function (nomeFile, dir, link, toggleArray, modaltitle) {
    var idLayerMenu = nomeFile.replace('.', '_'),
        $link = $(link).first(),
        linkId = $link.attr('id'),
        // Div container con position relative
        container = $link.closest('.linkTooltip'),
        // Div del tooltip
        tooltip = $('#' + idLayerMenu).first(),
        openMenuIcona = function () {
            // Nasconde gli altri overlayer eventualmente visualizzati
            $('.condiz2 .over').each(function (index, linkTooltip) {
                linkTooltip = $(linkTooltip);
                linkTooltip.removeClass('over');
                var item = linkTooltip.find('.sezioneLinks2:first'),
                    linkVaiID = linkTooltip.find('.linkVai:first').attr('id');
                if (item.length) {
                    var itemKey = item.attr('id');
                    // Controlla se c'e' un tooltip, con un ID diverso da quello che stiamo aprendo,
                    // che era rimasto aperto
                    if ((itemKey !== idLayerMenu) && ((linkVaiID in multiLinksFlag) && (multiLinksFlag[linkVaiID] === 1))) {
                        multiLinksFlag[linkVaiID] = 0;
                        item.hide();
                    }
                }
            });

            multiLinksFlag[linkId] = 1;
            container.addClass('over');

            var onLinks = tooltip.find('.linkOn'),
                offLinks = tooltip.find('.linkOff');
            onLinks.each(function (index) {
                var toggleItem = toggleArray[index];
                if (toggleItem === '*#*ND') {
                    onLinks.eq(index).hide();
                    offLinks.eq(index).hide();
                } else if (toggleItem === null) {
                    onLinks.eq(index).hide();
                    offLinks.eq(index).show();
                } else {
                    var regexJS = /^javascript:/i;
                    onLinks.eq(index).show();
                    offLinks.eq(index).hide();
                    if (toggleItem !== '') {
                        var linkEl = onLinks.eq(index).find('a:first'),
                            linkElHref = linkEl.attr('href');
                        if (!regexJS.test(toggleItem)) {
                            var regexQS = /\?/;
                            linkEl.attr('href', linkElHref + ((regexQS.test(linkElHref)) ? '&' : '?') + toggleItem);
                        } else { // Caso "javascript:"
                            linkEl.attr('href', toggleArray[index]);
                        }
                    }
                }
            });
            // Immagine per aprire il tooltip
            var linkDimensions = { height: $link.height(), width: $link.width() };
            //AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE IN TPL RESPONSIVE
            if (container.attr('data-toggle') === 'modal') {
                if (typeof modaltitle == "undefined") modaltitle = "";
                tooltip.find(".modal-title").html(modaltitle);
                setOverlayerIconaOpertiva(tooltip)
            } else
            //COMPORTAMENTO AS IS
            {
                tooltip.css({
                    left: linkDimensions.width - tooltip.width() + 'px',
                    top: '0px',
                    display: 'block'
                });
            }
            //FINE AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE
        },
        readTooltip = function (data) {
            container.append(data);
            tooltip = container.find('#' + idLayerMenu).first();
            openMenuIcona();
        };

    if (tooltip.length) {
        // Se ho cliccato sulla stessa icona col tooltip aperto, lo chiudo
        if (((linkId in multiLinksFlag) && (multiLinksFlag[linkId] === 1))) {
            multiLinksFlag[linkId] = 0;
            container.removeClass('over');
            tooltip.hide();
        } else {

            tooltip = tooltip.remove();
            container.append(tooltip);
            openMenuIcona();
        }
    } else {
        // onLine
        jqAJAXCall('get', 'html', wrp_script + '/FMP/html/' + nomeFile, readTooltip, null, {});
        // locale
        // jqAJAXCall('get', 'text', nomeFile, readTooltip, null, {});
    }
    return true;
};

// Mette lo stile di over sulle opzioni dell'overlayer
// noinspection JSUnusedGlobalSymbols
var azioneOver = function (el) {
    $(el).addClass('over');
};

// Toglie lo stile di over sulle opzioni dell'overlayer
// noinspection JSUnusedGlobalSymbols
var azioneOut = function (el) {
    $(el).removeClass('over');
};

/** * |FINE| AZIONI - Overlayer icona operativa ** */

/*FUNZIONE DEPOSITO */
//funzioni per la richiesta carte e deposito
var parentPanel, nextPanel, nextPanelTitle;

var initVariabiliStep = function (el) {
    parentPanel = el.closest('.panel-step');
    nextPanel = parentPanel.next('.panel-step');
    nextPanelTitle = nextPanel.find('.panel-title a').eq(0);
};

var ableinput = function (el, id, at, nDocrichiesti) {
    var $elById = $('#' + id);

    if (el !== '') {
        var inputToable = $(el).closest('div.disabledField,fieldset,label').find('input'); //abilita tutti i campi nello stesso fieldset
        //console.log(inputToable);
        if (inputToable.prop("disabled", true)) {
            inputToable.removeAttr('disabled');
            inputToable.prev('.hovfin').hide();
        }
    }
    //abilita un particolare ID
    if (id && !at) {
        if ($elById.hasClass('printDoc')) {
            $elById.toggleClass('disabled')
        }
        $elById.removeAttr('disabled');
        $elById.prev('.hovfin').hide();
    }
    //abilita solo dopo aver aperto un certo numero di documenti passati come parametro
    if (at) {
        $(at).addClass('docOpened');
        var docAperti = $(at).closest('span').find('.docOpened');
        if (docAperti.length === nDocrichiesti) {
            $elById.removeAttr('disabled');
            $elById.prev('.hovfin').hide();
        }
    }
    if ($(el).next().attr('class', 'visitedImg')) {
        $('.visitedImg').eq(0).show()
    }
};

var openPdfEmbed = function () {
    if ($('.pdfEmbedded').length > 0) {
        $('.openPdfEmbedd').click(function () {
            $(this).closest('.pdfEmbedded').find('.pdfToOpen').slideDown();
            $(this).closest('.pdfEmbedded').find('.closePdfEmbedd').show();
        });
        $('.closePdfEmbedd').click(function () {
            $(this).closest('.pdfEmbedded').find('.pdfToOpen').slideUp();
            $(this).hide();
        })
    }
};

var proseguiStep = function (el) {
    initVariabiliStep(el);
    if (parentPanel.find('.editButton').length > 0) {
        parentPanel.removeClass('unclosable').addClass('editable');
        parentPanel.find('input, textarea, select').prop("disabled", true);
    } else {
        parentPanel.removeClass('unclosable').addClass('done');
    }
    if (parentPanel.find('.stepToggle').length > 0) {
        parentPanel.find('.stepToggle').removeClass('in');
    }
    parentPanel.prev('.panel-step').removeClass('editable').removeClass('unclosable').addClass('done');
    //simula apertura accordion ma poi lo rende di nuovo bloccato
    nextPanel.removeClass('disabled').addClass('unclosable');
    nextPanelTitle.attr('data-toggle', 'collapse');
    nextPanelTitle.trigger('click');
    nextPanelTitle.attr('data-toggle', '');
};

var modificaStep = function (el) {
    initVariabiliStep(el);
    if (parentPanel.find('.stepToggle').length > 0) {
        parentPanel.find('.panel-title a').eq(0).attr('data-toggle', 'collapse');
        parentPanel.find('.panel-title a').trigger('click');
    }
    parentPanel.removeClass('editable').addClass('unclosable');
    $("#idModifica").hide();
    //parentPanel.find('input, textarea,select').prop("disabled", false);
    parentPanel.find('input:not("#adever input"), textarea:not("#adever textarea"), select:not("#adever select")').prop("disabled", false);
    $("#adever textarea").each(function() {
        if($(this).val()!=="") $(this).prop({"disabled": false});
    });
    nextPanel.removeClass('unclosable').addClass('disabled');
    nextPanelTitle.attr('data-toggle', 'collapse');
    nextPanelTitle.trigger('click');
    nextPanelTitle.attr('data-toggle', '');
};

var abilitaBtnField = function () {
    $('.fatcaintestatario').each(function () {
        var el = $(this),
            blocchiCampi = el.find('.fatcaFieldWrapper .fatcaField'),
            bloccoBtn = el.find('.fatcaFieldButton'),
            blocchiCampiLast = blocchiCampi.eq(blocchiCampi.length - 1), //ultimo campo aggiunto
            blocchiCampiLastSelect = blocchiCampiLast.find('select'),
            blocchiCampiLastInput = blocchiCampiLast.find('input');

        function abilitaBtn() {
            var requiredValue = blocchiCampiLastSelect.find('option:selected').val().split('|')[2];
            if (blocchiCampiLastSelect.find('option:selected').text().indexOf('seleziona') === -1) {
                if (requiredValue === 'N') {
                    blocchiCampiLastSelect.addClass('requiredValue');
                    blocchiCampiLastInput.attr('disabled', true).addClass('disabled').val('Non previsto');
                } else {
                    blocchiCampiLastSelect.removeClass('requiredValue');
                    blocchiCampiLastInput.attr('disabled', false).removeClass('disabled').val('');
                }
                bloccoBtn.find('.fieldButton.add').removeClass('disabled');
            } else {
                bloccoBtn.find('.fieldButton.add').addClass('disabled');
                blocchiCampiLastInput.attr('disabled', true).addClass('disabled');
                blocchiCampiLastSelect.removeClass('requiredValue');
            }
        }

        blocchiCampiLastSelect.bind('change', function () {
            abilitaBtn();
            if (blocchiCampiLastSelect.find('option:selected').text().indexOf('STATI UNITI') !== -1) {
                maskTin(blocchiCampiLastInput, true);
            } else {
                maskTin(blocchiCampiLastInput, false);
            }
        })
    })
};

var returnSelectedOptions = function (e) {
    var prevSelectedOptions = [];
    var prevSelect = $(e.target).closest('.fatcaintestatario').find('select');
    prevSelect.each(function () {
        prevSelectedOptions.push($(this).find('option:selected').text());
    });
    return prevSelectedOptions;
};

var addRemoveField = function () {
    var labelCounter = ["Secondo", "Terzo", "Quarto"];
    var labelCounterElimina = ["seconda", "terza", "quarta"];
    var numBlockField = [1, 1, 1];
    var prevSelectedOptions;

    $('.fatcaintestatario').each(function (index) {

        var wrapperIntestatario = $(this);
        wrapperIntestatario.find('.fatcaField input').attr('disabled', true).addClass('disabled');
        wrapperIntestatario.find('.fieldButton').bind('click', function (event) {
            var targetBtn = $(event.target).closest('a'),
                wrapperEl = (wrapperIntestatario.prop('tagName') !== 'TR') ? '<div class="fatcaField">' : '<tr class="fatcaField">',
                wrapperElC = (wrapperIntestatario.prop('tagName') !== 'TR') ? '</div>' : '</tr>',
                elHid = (wrapperIntestatario.prop('tagName') !== 'TR') ? 'div' : 'td',
                el;

            //prima controllo che il bottone sia abilitato
            if (!targetBtn.hasClass('disabled') && targetBtn.hasClass('add')) {
                var numBlockFieldSucc = numBlockField[index] + 1,
                    rowFatca = wrapperIntestatario.find('.fatcaField'),
                    nameSelect = wrapperIntestatario.find('select').eq(0).attr('name'),
                    nameSelectSucc = nameSelect.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString()),
                    nameTin = wrapperIntestatario.find('input').eq(0).attr('name'),
                    nameTinSucc = nameTin.replace('TIN2', 'TIN' + (numBlockField[index] + 2).toString());
                if (wrapperIntestatario.find('input[type=\'hidden\']').eq(0).length > 0) {
                    var nameSelectInputHidden = wrapperIntestatario.find('input[type=\'hidden\']').eq(0).attr('name'),
                        nameSelectInputHiddenSucc = nameSelectInputHidden.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString()),
                        idSelectInputHidden = wrapperIntestatario.find('input[type=\'hidden\']').attr('id'),
                        idSelectInputHiddenSucc = nameSelectInputHidden.replace('residenzaFiscale2', 'residenzaFiscale' + (numBlockField[index] + 2).toString());
                }
                var contenuto = wrapperEl +
                    wrapperIntestatario.find('.fatcaField').eq(0).html()
                        .replace(/_id1/g, '_id' + numBlockFieldSucc.toString())
                        .replace('Secondo', labelCounter[numBlockField[index]])
                        .replace(nameSelect, nameSelectSucc)
                        .replace(nameSelectInputHidden, nameSelectInputHiddenSucc)
                        .replace(idSelectInputHidden, idSelectInputHiddenSucc)
                        .replace(nameTin, nameTinSucc)
                        .replace('inited', '') +
                    wrapperElC;
                if (numBlockFieldSucc.toString() <= '3' && numBlockField[index].toString() > '0') {
                    wrapperIntestatario.find('.fatcaField:last-child select').attr('disabled', true);
                    // wrapperIntestatario.find('.fatcaField:last-child input').attr('disabled',true).addClass('disabled');
                    prevSelectedOptions = returnSelectedOptions(event);
                    wrapperIntestatario.find('.fatcaFieldWrapper').append(contenuto);
                    //funzione per eliminare options gia' selezionate
                    $.each(prevSelectedOptions, function (i, val) {
                        wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('select option').each(function () {
                            if ($(this).text() === val) {
                                $(this).remove();
                            }
                        });
                    });
                    el = wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('input');
                    el.unmask().val('').attr('disabled', true).addClass('disabled').attr('data-error', '').val('');
                    el.closest('div.errore').removeClass('errore');
                    el.closest('div.has-error').removeClass('has-error');
                    el.next('.with-errors').remove();
                    wrapperIntestatario.find('.fatcaField').eq(rowFatca.length).find('select').prop('selectedIndex', 0).attr('disabled', false).removeClass('requiredValue');

                    if (numBlockFieldSucc.toString() === '3') {
                        wrapperIntestatario.find('.fieldButton.add').closest(elHid).hide();
                    }
                } else {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField').show();
                    wrapperIntestatario.find('.fieldButton.remove').closest(elHid).show();
                }

                wrapperIntestatario.find('.fieldButton.add').addClass('disabled');
                abilitaBtnField();
                ttSet('body');
                initTooltip();
                wrapperIntestatario.find('.labelCounterMeno').html(labelCounterElimina[numBlockField[index]]);
                numBlockField[index]++;
                wrapperIntestatario.find('.labelCounterPiu').html(labelCounterElimina[numBlockField[index]]);
            } else if (!targetBtn.hasClass('disabled') && targetBtn.hasClass('remove')) {
                if (numBlockField[index].toString() > '1') {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField:last-child').remove();
                    wrapperIntestatario.find('.fieldButton.add').closest(elHid).show();
                    wrapperIntestatario.find('.fatcaField:last-child select').attr('disabled', false);
                    if (!wrapperIntestatario.find('.fatcaField:last-child select').hasClass('requiredValue')) {
                        wrapperIntestatario.find('.fatcaField:last-child input').attr('disabled', false).removeClass('disabled');
                    }
                } else {
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').unmask().val('').addClass('disabled').attr('disabled', true).attr('data-error', '').val('');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').closest('div.errore').removeClass('errore');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').closest('div.has-error').removeClass('has-error');
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField input').next('.with-errors').remove();
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField select').prop('selectedIndex', 0);
                    wrapperIntestatario.find('.fatcaFieldWrapper .fatcaField').hide();
                    wrapperIntestatario.find('.fieldButton.remove').closest(elHid).hide();
                }
                wrapperIntestatario.find('.fieldButton.add').removeClass('disabled');
                numBlockField[index]--;
                wrapperIntestatario.find('.labelCounterMeno').html(labelCounterElimina[numBlockField[index] - 1]);
                wrapperIntestatario.find('.labelCounterPiu').html(labelCounterElimina[numBlockField[index]]);
            } else {
                return false;
            }

        })
    })
};

// noinspection JSUnusedGlobalSymbols
var closeLoading = function () {
    var $loadinglayer = $("#loadinglayer");
    if ($loadinglayer.length) {
        unobscurateAll();
        closeAlert("loadinglayer");
        $loadinglayer.remove();
    }
};

// noinspection JSUnusedGlobalSymbols
var populatePageElementsByJson = function (_jsonData) {
    var el;
    for (var elementId in _jsonData) {
        if (_jsonData.hasOwnProperty(elementId)) {
            el = $('#' + elementId);
            if (el.length) {
                var formElementValue = _jsonData[elementId];
                if (el.prop('tagName').toUpperCase() === 'SELECT') {
                    formElementValue = formElementValue.toString();
                    for (var i = 0, j = el.prop('options').length; i < j; i++) {
                        if (el.prop('options')[i].value === formElementValue) {
                            el.prop('selectedIndex', i);
                            break;
                        }
                    }
                } else if (el.prop('tagName').toUpperCase() === 'INPUT' && el.attr('type') === 'radio') {
                    // *** modificata gestione dei radio button per includere il caso di valori non numerici ***
                    // document.getElementsByName(elementId)[formElementValue].checked = true;
                    formElementValue = formElementValue.toString();
                    var radioEls = document.getElementsByName(elementId),
                        length = radioEls.length;
                    for (var index = 0; index < length; index++) {
                        if (radioEls[index].value === formElementValue) {
                            radioEls[index].checked = true;
                            index = length;
                        }
                    }
                } else {
                    if (typeof formElementValue === 'boolean') {
                        el.prop('checked', formElementValue);
                    } else {
                        el.val(formElementValue);
                    }
                }
            }
        }
    }
};

/* SELETTORE TIPO GRAFICO (ES: TRADING OVERVIEW ITALIA) */
$.fn.selAdv = function (params) {

    var selAdvInitialText = "Seleziona un elemento...",
        selAdvEl = this;

    var selAdvCbfunction = function () {
        var clickEl = $(this),
            clickElVal = clickEl.attr("data-value"),
            clickTopEl;
        clickTopEl = clickEl.closest(".sel-adv");
        clickTopEl.find("input[type=hidden]").val(clickElVal).trigger("change");
        clickTopEl.find(".sel-adv-selector").empty().html(clickEl.html());
        /* Toglie il data-selected dalle altre voci e lo mette alla "corrente" */
        clickTopEl.find("*[data-selected=true]").removeAttr("data-selected");
        clickEl.attr("data-selected", "true");

        $(".modal").modal("hide");
    };
    // Lista di opzioni
    var selAdvVoices = $("<div>").addClass("sel-adv-options").append(selAdvEl.find(".sel-adv-voice").click(selAdvCbfunction));
    // Modale e lista di opzioni esclusive per il mobile
    var selAdvModal = getModal({
        id: this.attr("id") + "_modal_mobile",
        titolo: selAdvInitialText,
        body: selAdvVoices.clone(true)
    });
    // Input associato
    var selAdvInput = selAdvEl.find("input[type=hidden]").eq(0);

    if (params.callback) selAdvInput.change(params.callback);

    // elemento selezionato
    var selAdvSelector = $("<div>").addClass("sel-adv-selector").append($("<p>").addClass("initial-text").html(selAdvInitialText)).click(function () {
        // Apre il "selettore" o la modale a seconda della risoluzione
        if ($(window).width() > 767) {
            $(this).parents(".sel-adv").toggleClass("opened");
        } else {
            selAdvModal.modal("show");
        }
    });
    // Aggiunge il clickout
    $(window).click(function (e) {
        if ($(e.target).closest(".sel-adv-selector").length === 0) {
            $(".sel-adv").removeClass("opened");
        }
    });

    // Inserisce tutti gli elementi
    selAdvEl.append(selAdvSelector, selAdvVoices, selAdvModal);

    // Addiziona l'eventuale callback

    selAdvEl.removeClass("loading").find(".sel-adv-voice[data-selected='true']").eq(0).click();
    return selAdvEl;
};

//funzione per la gestione degli accordion tra i preferiti
function selectPreferred() {
    var accClosed = $('a[data-toggle = collapse].collapsed'),
        checkMenu = $('.panel-body input[type=checkbox]'),
        wrapperCheckbox = $('.panel-body');
    $('#openAll').click(function () {
        accClosed.trigger('click');
    });
    $('#closeAll').click(function () {
        $('a[data-toggle = collapse]').not('.collapsed').trigger('click');
    });
    $('#openSel').click(function () {
        wrapperCheckbox.each(function () {
            if ($(this).find(checkMenu).is(":checked")) {
                $(this).closest('.panel').find('.collapsed').trigger('click');
            } else {
                $(this).closest('.panel').find('a[data-toggle = collapse]').not('.collapsed').trigger('click');
            }
        });
    });
    $('#clearSel').click(function () {
        checkMenu.attr('checked', false);
    });
}

/* *** VIDEOPLAYER *** */
/* UTILIZZO */
/*
getVideo({
    wrapper: "#splayer",
    videopath : "/wscmn/swf/video_prova.mp4",
    autoplay: false,
    initialVolume: 0.8
});
*/

var vidRepos;
var getVideo = function (obj) {
    // Funzioni ed assemblaggio della console
    var wrapper = $(obj.wrapper);
    var wr = $("<div>").addClass("videoPlayer").addClass("loading").attr({
        "fullScreenEnabled": true,
        "inited": false
    });
    var vtag = $("<video>").attr({ "autoplay": obj.autoplay, "poster": obj.videopath.replace(".mp4", ".jpg") });
    var vtagSrc = $("<source>").attr({ "src": obj.videopath, "type": "video/mp4" });
    /* Codice embedding per chi non legge l'html (SWF videoplayer )*/
    var altVideo = $("<object type=\"application/x-shockwave-flash\">"
        + "<param name=\"movie\" value=\"/swf/videoplayer_big.swf\">"
        + "<param name=\"allowfullscreen\" value=\"true\">"
        + "<param name=\"flashVars\" value =\"videoLink=" + obj.videopath + "\">"
        + "</object>").css({
        "visibility": "visible",
        "width": wrapper.width() + "px",
        "height": wrapper.height() + 2 + "px",
        "padding": 0,
        "margin": 0
    });

    vtag.append(vtagSrc, altVideo);
    wr.append(vtag);
    // wr.append(altVideo);
    wrapper.empty().append(wr);
    // Se il tag "video" è supportato

    if (!!document.createElement('video').canPlayType) {

        // Quando il video può partire lo inizializza

        vtag.on("loadedmetadata", function () {

            // Se il video non e' stato inizializzato lo inizializza
            if (wr.attr("inited") === "false") {

                /* CONSOLE */
                var vidConsole = $("<div>").addClass("console");

                // Pulsante play grande
                var pPlay = $("<a>").addClass("playBig");
                pPlay.click(function () {
                    playBut.trigger("click")
                });
                wr.prepend(pPlay);

                //Play/pause
                var playBut = $("<a>").attr({ "href": "javascript:;" }).addClass("vidBtn play");
                if (obj.autoplay) wr.addClass("pause");

                playBut.click(function () {
                    var v = $(this).parents(".videoPlayer").find("video")[0];
                    var vcont = $(this).parents(".videoPlayer").eq(0);
                    if (v.paused) {
                        v.play();
                        vcont.addClass("pause");
                    } else {
                        v.pause();
                        vcont.removeClass("pause");
                    }
                    //in generale se si chiude un overlayer si mette in pausa il video...
                    $(".videoPlayer").closest('.modal').on('hidden.bs.modal', function () {
                        v.pause();
                        vcont.removeClass("pause");
                    })

                });

                //Timeline
                var timeLineCont = $("<div>").addClass("vidBox timeLine");
                var timeLine = $("<div>").addClass("bar");
                timeLine.width(0);
                timeLineCont.append(timeLine);
                timeLine.slider({
                    range: "min",
                    min: 0,
                    max: 0,
                    value: 0,
                    step: 0.5,
                    slide: function (event, ui) {
                        vtag = $(this).parents(".videoPlayer").find("video");
                        var vcont = $(this).parents(".videoPlayer");
                        vtag[0].currentTime = ui.value;
                        vtag[0].play();
                        vcont.addClass("pause");
                    }
                });

                vtag.on("timeupdate", function () {
                    timeLine.slider("value", vtag[0].currentTime)
                });

                // Controllo volume
                vtag[0].volume = (obj.initialVolume) ? obj.initialVolume : 0.5;
                var volumeContCont = $("<div>").addClass("vidBox volume");
                var volumeIco = $("<span>").addClass("volIcon");
                var volumeCont = $("<div>").addClass("bar");
                volumeContCont.append(volumeIco, volumeCont);

                volumeCont.slider({
                    range: "min",
                    min: 0,
                    max: 1,
                    step: 0.1,
                    value: vtag[0].volume,
                    slide: function (event, ui) {
                        var vtag = $(this).parents(".videoPlayer").find("video");
                        vtag[0].volume = ui.value;
                    }
                });

                vtag.on("timeupdate progress", function () {
                    // Cambia i parametri della barra
                    var tlBar = $(this).parent(".videoPlayer").find(".timeLine .bar");
                    tlBar.slider({ "max": this.buffered.end(0) });
                    tlBar.css("width", (100 / this.duration * this.buffered.end(0)) + "%");
                });

                vtag.on("ended", function () {
                    this.pause()
                });

                // Full screen (Se supportato)
                if (document["fullscreenEnabled"] || document["webkitFullscreenEnabled"] || document["mozFullScreenEnabled"] || document["msFullscreenEnabled"]) {
                    var fullScreen = $("<a>").addClass("vidBtn fullscreen").attr({ "href": "javascript:;" });
                    fullScreen.click(function () {
                        var vCont = $(this).parents(".videoPlayer")[0];
                        if ($(vCont).hasClass("fs")) {
                            if (document["cancelFullScreen"]) {
                                document["cancelFullScreen"]();
                            } else if (document["mozCancelFullScreen"]) {
                                document["mozCancelFullScreen"]();
                            } else if (document["webkitCancelFullScreen"]) {
                                document["webkitCancelFullScreen"]();
                            } else if (document["msCancelFullscreen"]) {
                                document["msCancelFullscreen"]();
                            } else if (document.exitFullscreen) {
                                // noinspection JSIgnoredPromiseFromCall
                                document.exitFullscreen();
                            }
                            $(vCont).removeClass("fs");
                        } else {
                            var fs = vCont["requestFullScreen"] || vCont["webkitRequestFullScreen"] || vCont["mozRequestFullScreen"] || vCont["msRequestFullscreen"];
                            fs.call(vCont);
                            $(vCont).addClass("fs");
                        }
                    });
                } else {
                    // Full screen non supportato
                    wr.addClass("nofullscreen");
                }

                // Evento generico fullscreen
                // Modifiche di layout associate all'evento fullscreen
                $(document).bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function () {
                    var vWrap = $(".videoPlayer").eq(0);
                    if (vWrap.height() === 0) {
                        vWrap.removeClass("fs");
                        vidRepos();
                    }
                });

                // Eventi del video
                vtag.on("ended", function () {
                    var vTag = $(this)[0];
                    vTag.currentTime = 0;
                    $(vTag).parents(".videoPlayer").removeClass("pause");
                });

                // Funzione che riposiziona alcuni oggetti - pulsante play e video stesso (si attiva se non e' ancora definita per tutti gli overlay)
                if (typeof vidRepos == "undefined") {
                    vidRepos = function () {
                        $.each($(".videoPlayer"), function (i, v) {
                            var vCont = $(v);
                            var vTag = vCont.find("video");
                            vTag.css("margin", 0);

                            // Controllo altezza contenitore rispetto al video con eventuale inserimento del margine
                            var vConsole = vCont.find(".console");
                            var vMargin = vCont.height() - vTag.height() - vConsole.height();
                            if (vMargin > 0) {
                                vTag.css({ "margin-top": vMargin / 2 + "px", "margin-bottom": vMargin / 2 + "px" })
                            }
                            // Riposizionamento pulsante Play
                            vCont.find(".playBig").css({
                                "width": vTag.width() + "px",
                                "height": vTag.height() + "px"
                            });
                        });
                    }
                }
                vidRepos();
                $(window).on("resize", function () {
                    vidRepos();
                });

                vidConsole.append(playBut, timeLineCont, volumeContCont, fullScreen);
                wr.append(vidConsole);

                // Video inizializzato
                wr.removeClass("loading").attr("inited", true);

            }
        });
    } else {
        // Tag video non supportato
    }
};

/* Inizializzazione degli url */
$(function () {

    // Vecchio video embedding
    /*
    $("*[data-toggle='video-overlay']").click(function () {
        var url = $(this).attr("data-video-url");
        openVideo(url);
    });
    */

    // Nuovo video embedding VIMEO (05/02/2021)
    $("*[data-video-id]").click(function () {
        var id = $(this).attr("data-video-id");
        showVideo(id);
    });

});

/* *** FINE VIDEOPLAYER *** */

// Paragrafi espandibili (funzione molto vecchia, da rivedere)
// noinspection JSUnusedGlobalSymbols
var expandArgument = function (title, img, imgOff) {
    // noinspection JSUnresolvedFunction
    if (title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display !== 'none') {
        // noinspection JSUnresolvedFunction
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = 'none';
        title.firstChild.src = '/WB/fe/img/ico/ico1gr_indchiuso.gif';
        if (img) {
            title.firstChild.src = img;
        }
    } else {
        // noinspection JSUnresolvedFunction
        title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = '';
        title.firstChild.src = '/WB/fe/img/ico/ico1gr_indaperto.gif';
        if (imgOff) {
            title.firstChild.src = imgOff;
        }
    }
    if ($(title).parents('.layeralert3').length > 0) {
        var overlayerInAccordion = $(title).parents('.layeralert3'),
            heightLimit = $(window).height();
        if (overlayerInAccordion.outerHeight() > heightLimit) {
            overlayerInAccordion.find('.body').wrapInner('<div class="overflow" />');
            overlayerInAccordion.find('.overflow').css({
                'height': (heightLimit - 50) + 'px',
                'overflow-y': 'auto',
                'width': '100%'
            });
            $('.overflow').on("scroll", function () {
                ttHide()
            });
        } else {
            overlayerInAccordion.find('.overflow').css('height', 'auto');
        }
    }
};

/* Text accordion */
var textAccordionInit = function () {
    $(".text-accordion .text-term").not("[data-inited=true]").attr("data-inited", "true").click(function () {
        $(this).parents(".text-accordion").toggleClass("opened")
    })
};

/* Determina le librerie di provenienza */
var libSite = function () {
    return (location.href.indexOf("/strutt_webank.php") > 0) ? "webank" : "youweb";
}();

/* OGGETTO SELECT "SPECIALE" */
$.fn.spSel = function (callback, clickfunction) {
    var sp = $(this),
        spin = sp.find("input[type=hidden]").eq(0),
        spCb = callback,
        spDefaultText = sp.attr("placeholder") ? sp.attr("placeholder") : "Seleziona...";

    // Appende il placeholder
    sp.prepend($("<div>").addClass("spsel-option spsel-selected").append($("<a>").addClass("spsel-option-el").html(spDefaultText)));

    // Funzione di default al click sull'elemento portante della "select" (apertura tendina)
    var defaultCf = function () {
        var sps = $(this).parents(".spsel");
        $(".spsel").not(sps).removeClass("opened");
        sps.toggleClass("opened");
    };

    var spCf = (clickfunction) ? clickfunction : defaultCf;

    if (!sp.hasClass("output") && !sp.hasClass("custom")) {

        // Mette un listener sul "clickout"
        $(window).click(function (e) {
            if ($(e.target).closest(".spsel").length === 0) $(".spsel").removeClass("opened");
        });

        // Assegna il valore al click
        sp.find(".spsel-options .spsel-option").click(function () {

            var spel = $(this),
                sp = spel.parents(".spsel");

            // Se non è custom
            if (!spel.hasClass("spsel-custom")){

                // Caso select normale
                if (!sp.hasClass("spsel-check")) {
                    // Clona l'opzione con le relative parti
                    sp.find(".spsel-selected").empty().append(
                        spel.find(">*").not(".spsel-option-el").clone(true),
                        spel.find(".spsel-option-el").clone().click(spCf)
                    );

                    // Assegna il valore all'input
                    sp.find("input[type=hidden]").eq(0).val(spel.attr("data-value"));

                    // Chiude la select
                    sp.removeClass("opened nosel");
                } else {
                    // Caso checkbox
                    var spopener = sp.find(".spsel-selected .spsel-option-el"),
                        cbsel = sp.find("input[type=checkbox]:checked");
                    var cbval = [];
                    $.each(cbsel, function (i, v) {
                        cbval.push($(v).val());
                    });
                    spin.val(cbval.join(","));
                    if (spin.val() !== "") {
                        sp.removeClass("nosel");
                        var sinplu = (cbval.length > 1) ? ["i", "i"] : ["e", "o"];
                        spopener.html(cbval.length + " valor" + sinplu[0] + " selezionat" + sinplu[1]);
                    } else {
                        // Reset del placeholder
                        sp.addClass("nosel");
                        spopener.html(spDefaultText);
                    }
                }
            }

            // Esegue l'eventuale callback sempre e comunque
            if (spCb) spCb();
        });

        sp.find(".spsel-selected .spsel-option-el").click(spCf);

        if (spin.val()) {
            if (!sp.hasClass("spsel-check")) {
                // Cerca il valore e lo "clicca" (cosi' da effettuare anche le callback associate)
                sp.find(".spsel-option[data-value=" + spin.val() + "]").trigger("click");
            } else
            // caso checkbox
            {
                // Check dei valori associati
                $.each(spin.val().split(","), function () {
                    sp.find(".spsel-option input[value=4]");
                });
            }
        }

        sp.removeClass("loading");
    }
};

/* Ridimensiona un iFrame in base al suo contenuto */
var resizeIframe = function () {

    $.each($(".resp-iframe").not(".fixed-height"), function (i, iframe) {
        var ifr = $(iframe).css("height", 0),
            ifrch = ifr.contents().find("html"),
            ifrcb = ifrch.find("body");
        var ifrh = (ifrch.height() > ifrcb.height()) ? ifrch.height() : ifrcb.height() + 30;
        ifr.css("height", ifrh + "px");
    });

};

/* Embed video Vimeo */
var showVideo = function(vimeoid) {

        $.getScript("https://player.vimeo.com/api/player.js",function(){
            var vimeoIframe = $("<iframe>").attr({
                src: "https://player.vimeo.com/video/"+ vimeoid,
                frameborder:"0", 
                allow:'autoplay; fullscreen; picture-in-picture', 
                allowfullscreen: true
            }).css({background: "transparent url(/common/fe/img/gen_preloader.gif) no-repeat center center",position:"absolute",top:"0",left:"0",width:"100%",height:"100%"})
            var mdVimeo = getModal({body: $("<div>").css({padding:"56.25% 0 0 0",position:"relative", minHeight:"200px"}).append(vimeoIframe)});
            mdVimeo.modal("show");
            mdVimeo.on("hide.bs.modal",function(e){
                $(e.target).remove();
            });
        })

}
/*FUNZIONE GENERICA PER LEGGERE I PARAMETRI DELL'URL PASSATO */
 var getUrlParameter = function(urlToCheck) {
    parUrlArray = new Array()
    var url = urlToCheck,
        urlSplit = url.split('?');
    for (arg in urlSplit) {
        var parts = urlSplit[arg].split('=');
        parUrlArray[unescape(parts[0])] = unescape(parts[1])
    }
    console.log(parUrlArray);
    return parUrlArray;
}
/* FUNZIONE GENERICA PER SCROLLARE LA PAGINA IN BASE AL PARAMETRO ancorTo*/
var scrollToAnchor = function() {
    getUrlParameter(location.href);
    if(typeof parUrlArray.ancorTo !== 'undefined') {
    var target = $('#' + parUrlArray.ancorTo),
            targetOffset = target.offset().top;
            $('html, body').animate({
                scrollTop: targetOffset
        }, 500);
    }
}

/*FUNZIONE PER FISSARE IL FOOTER DEGLI OVERLAYER IN MOBILE */
/*
var renderOverlayerFooterFixed = function() {
   var modalToResize = $('.modal-footer-fixed');
   if(modalToResize.length>0) {
        $(modalToResize).each(function() { 
            var el = $(this);
            el.on('shown.bs.modal', function(){
                if(isSmallDevice) {
                setDinHeightOverlayer($(this))
                }
            });
            $(window).resize(function() {
                if(el.hasClass('in')) {
                    resizeModalDevice(el);
                    findSmartDevice();
                    if(isSmallDevice) {
                        
                        setDinHeightOverlayer(el);
                    }
                    else {
                        el.find('.modal-content').css({"maxHeight":'auto'});
                    }
                }
            })
        });
        var setDinHeightOverlayer = function(el) {
            var displayHeight = viewdim().height,
                modalFooterHeight = $(el).find('.modal-footer').innerHeight(),
                maxOvHeight = displayHeight-modalFooterHeight;
                el.find('.modal-content').css({"maxHeight":maxOvHeight +'px'});
               
        }
    }
}
*/

// Embed documenti in overlayer Solo su Mobile
var showMobilePdf = function(url){
    var wwitdh = $(window).width();
    var minwidth = 1024;
    if (wwitdh>=minwidth) {
        getModal({titolo: "Attenzione!", body: $("<p>").html("Questo tipo di visualizzazione &egrave; riservato a risoluzioni orizzontali inferiori a <strong>"+  minwidth + "</strong> px.</p>")}).modal("show");
    }
    else{
        // Overlay documento
        var fhwORemove = function(){
            $("body").removeClass("fhw-opened");
            $(this).parents(".fhw-mobile-overlay").remove();
        }
        var  fhwOPdfCont = $("<div>").addClass("pdf-container loading");
        var fhwO = $("<div>").addClass("fhw-mobile-overlay").hide().append(
            // Header
            $("<div>").addClass("fhw-mobile-overlay-header").append(
                $("<a>").addClass("closer fhw-close").append($("<i>").addClass("icon icon-close_inverted_fill")).click(fhwORemove).attr({title: "Chiudi"})
            ),
            $("<div>").addClass("fhw-mobile-overlay-content").append(fhwOPdfCont),
            $("<div>").addClass("fhw-mobile-overlay-footer").append(
                $("<div>").addClass("form-group btnWrapper clearfix").append(
                    $("<div>").addClass("btn-align-right").append($("<a>").addClass("btn btn-primary fhw-close").click(fhwORemove).html("chiudi").attr({title: "Chiudi"}))
                )
            )
        )

        $("body").append($(fhwO).show()).addClass("fhw-opened");
        fhwOPdfCont.pdf({url:url});
    }
}



// Estensioni di jquery
$.fn.extend({

    // PDF
    pdf: function(par){
        var pdfCont = $(this).empty();
        var pdfViewerBase = "/common/fe/assets/pdf/web/viewer.html?file=";
        pdfIframe = $("<iframe>").attr({src: pdfViewerBase + par.url + (par.url.indexOf("#")>0 ? "": "#page=1")});
        pdfCont.append(pdfIframe);
        pdfCont["goto"] = function(anchor) {
            this.addClass("loading").pdf({url: pdfIframe.attr("src").replace("/common/fe/assets/pdf/web/viewer.html?file=","").split("#")[0] + anchor});
        }
        return pdfCont.removeClass("loading");
    },

    // Bootstrap tables riparametrizzate
    bst: function(params){
        var tb = $(this),
        defaultcwwidth = (params.mobileCardWidth)? params.mobileCardWidth : 767;


        // Componenti oggetto di default (vanno ad integrare o ad essere sovrascritte con params)
        var conf = {
            pagination: true,
            pageSize: 50,
            paginationPreText: "<i class='icon icon-arrow_left'></i>",
            paginationNextText: "<i class='icon icon-arrow_right'></i>",
            cardView:  params.mobileCardView && $(window).width()<defaultcwwidth,
            rowStyle: function(r,i) {
                return {classes: (i%2==0)? "odd":"even"}
            }
        }

        $.extend(conf,params);

        // Modifiche alla paginazione per UX
        if (conf.pagination) {
            tb.on("post-body.bs.table",function(){
                // Totale pagine
                var ptotal = $("<li>").addClass("page-total").html("di <span class='tot'>" + Math.ceil(conf.data.length / conf.pageSize) + "</span>")
                var pcont = tb.parents(".bootstrap-table").find(".fixed-table-pagination").addClass("bst-pagination").find("ul.pagination");
                pcont.find(".page-total").remove();
                pcont.find(".page-next").before(ptotal)

                // Al click sugli elementi di paginazione non disabilitati riconduce in alto
                pcont.find(".page-pre:not(.disabled) a , .page-next:not(.disabled) a").click(function(){
                    $('html, body').scrollTop(tb.offset().top - 110);
                })
            })
        }
        
        // Se e' richiesta la visualizzazione in "cards"
        if (conf.mobileCardView) {
            // Evento resize
            $(window).on("resize",function(){
                var cvval = $(window).width()<(defaultcwwidth);
                var tbo = tb.bootstrapTable("getOptions");
                if (tbo.cardView != cvval) {
                    tb.bootstrapTable("toggleView");
                    
                }
            })

            // Formatter per cardView
            tb.on("post-body.bs.table",function(){
                if (tb.bootstrapTable("getOptions")["cardView"] || conf.mobileCardView && $(window).width()<defaultcwwidth) {
                    // Riassembla le colonne in modo da poter rivedere come formattare tutto nella cardview
                    tb.addClass("is-card-view");
                    $.each(conf.columns, function(i,c) {
                        if (c.cardClass) {
                            tb.find(".card-view:nth-child("+ (i+1) +")").addClass(c.cardClass)
                        }
                    })
                }
                else
                {
                    tb.removeClass("is-card-view")
                }
            })

        }
        
        // Render della tabella
        tb.bootstrapTable("destroy");
        tb.bootstrapTable(conf);
        return tb.removeClass("loading").addClass("bst " + ($(window).width()<(defaultcwwidth)? "is-card-view" : ""));
    }
});

// Inserisce i pdf inline tramite l'apposita funzione
// es: <div class="pdf-container loading" data-url="/././pdfdocument.pdf#ancora"></div>
var setPdfInline= function(){
    $.each($(".pdf-container[data-url]"),function(){
        var pdfC = $(this);
        pdfC.pdf({url: pdfC.attr("data-url")})
    });
}

// Inizializzazione campi password
var setPwdFields = function() {
    $(".password-toggle .toggle-pwd").not(".password-inited").empty().append(
        $("<i>").addClass("icon icon-show"),
        $("<i>").addClass("icon icon-hide")
    ).click(function(){
            var wrapper = $(this).parents(".password-toggle");
            var input = wrapper.find("input");
            var status = input.attr("type");
            // Switch
            input.attr("type", (status =="password"? "text" : "password"));
            wrapper.toggleClass("password-hide", function(){return status === "password";});
    }).parents(".password-toggle").addClass("password-inited");
}

// Switchable toggler
var mobileSwitchable = function() {
    $(".mobile-switchable-toggler").click(function(){
        $(this).parents(".mobile-switchable").toggleClass("opened")
    })
}

//inizializzazioni al load della pagina
$(function () {
    // renderOverlayerFooterFixed();
    setZindexModal();
    findSmartDevice();
    iconMultilayer();
    clearInputText();
    //tabber();
    activateTab();
    initTooltip();

    // Evita che parta nella FP dello sportello
    if (!$('#accordionOpsWrap').length) {
        initCarouselPlus();
    }

    initModalPlus();
    selectPreferred();
    textAccordionInit();

    // Calcola automaticamente l'altezza degli iframe
    if ($('.resp-iframe').not(".fixed-height").length > 0) {
        $(".resp-iframe").not(".fixed-height").load(resizeIframe);
        $(window).resize(resizeIframe);
    }

    // Attivazione webview
    var $body = $("body");
    if ($body.hasClass("webview") && !$body.hasClass("webapp")) {
        $body.removeClass("loading").fadeIn(300);
    }

    selectorBoxInit();
    $(".multi-selector").multiselector();

    // Inizializzazione carousel spalla destra
    $(".wdg-carousel").initCarouselSpalla();
    styleSortTable();

    // Funzione per colonne fixed delle tabelle
    columnBsFixed();

    // Switchable toggler
    mobileSwitchable();

    abilitaBtnField();
    addRemoveField();
    openPdfEmbed();
    setPwdFields();
    
    setPdfInline();
});
