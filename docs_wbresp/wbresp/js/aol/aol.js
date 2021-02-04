/* globals $:false, loadModal:false, moveToElement:false, initTooltip */
/* exported setFormGroupCell, setFormGroupDate, setFormGroupAddress, disableSelectByNation, emptyFields, arePartiallyCompiled, checkForm */
"use strict";
// validazione del cellulare
var setFormGroupCell = function(formEl, formValidator) {
    formEl.find(".input-tel").each(function() {
        var inputTelDiv = $(this),
            inputTelSubArr = inputTelDiv.find('input'),
            inputTelGenId = '#tel_' + inputTelSubArr.first().attr('id').replace('pref_intern_', '').replace('prefisso_', ''),
            inputTelGen = $(inputTelGenId);
        inputTelSubArr.not(inputTelGen).on("focusout keyup", function() {
            var valueNum = inputTelSubArr.eq(1).val(),
                valuePref = inputTelSubArr.eq(0).val(),
                value;
            value = (valueNum === "") ? "" : valuePref + valueNum;
            inputTelGen.val(value);
            if (inputTelGen.hasClass('valid') || inputTelGen.hasClass('error')) {
                formValidator.element(inputTelGenId);
            }
        });
        inputTelSubArr.eq(0).on("keyup", function() {
            nextFocus(this, inputTelSubArr.eq(1), 5);
        });
    });
};
// validazione delle date
var setFormGroupDate = function(formEl, formValidator) {
    formEl.find(".input-date").each(function() {
        var inputDateDiv = $(this),
            inputDateSubArr = inputDateDiv.find('input'),
            inputDateGenId = '#' + inputDateSubArr.first().attr('id').replace('gg_', ''),
            inputDateGen = $(inputDateGenId);
        inputDateSubArr.not(inputDateGen).on("focusout keyup", function() {
            var gg = inputDateSubArr.eq(0).val(),
                mm = inputDateSubArr.eq(1).val(),
                aaaa = inputDateSubArr.eq(2).val(),
                value;
            gg = (gg.length === 2) ? gg : ((gg !== '') ? '0' : '');
            mm = (mm.length === 2) ? mm : ((mm !== '') ? '0' : '');
            aaaa = (aaaa.length === 4) ? aaaa : ((aaaa !== '') ? '0' : '');
            value = gg + '/' + mm + '/' + aaaa;
            value = (value !== '//') ? value : '';
            inputDateGen.val(value);
            if (inputDateGen.hasClass('valid') || inputDateGen.hasClass('error')) {
                formValidator.element(inputDateGenId);
            }
        });
        inputDateSubArr.eq(0).on("keyup", function() {
            nextFocus(this, inputDateSubArr.eq(1), 2);
        });
        inputDateSubArr.eq(1).on("keyup", function() {
            nextFocus(this, inputDateSubArr.eq(2), 2);
        });
    });
};
// validazione dell'indirizzo
var setFormGroupAddress = function(formEl, formValidator) {
    formEl.find(".input-address").each(function() {
        var inputAddressDiv = $(this),
            inputAddressSubArr = inputAddressDiv.find('select, input'),
            inputAddressGenId = '#ind_' + inputAddressSubArr.first().attr('id').replace('qualif_', ''),
            inputAddressGen = $(inputAddressGenId),
            joinFields = function() {
                var valueQualif = inputAddressSubArr.eq(0).val(),
                    valueVia = inputAddressSubArr.eq(1).val(),
                    value;
                value = (valueQualif === '' || valueVia === '') ? '' : valueQualif + valueVia;
                inputAddressGen.val(value);
                if (inputAddressGen.hasClass('valid') || inputAddressGen.hasClass('error')) {
                    formValidator.element(inputAddressGenId);
                }
            };
        inputAddressSubArr.eq(0).on("focusout change", function() {
            joinFields();
        });
        inputAddressSubArr.eq(1).on("focusout keyup", function() {
            joinFields();
        });
    });
};
// disabilita provincia e comune se lo stato non e' ITALIA
var disableSelectByNation = function(fields) {
    var i,
        fieldsLen = fields.length;
    $(fields[0]).change(function() {
        var disabled = ($(this).val() !== "ITALIA");
        for (i = 1; i < fieldsLen; ++i) {
            $(fields[i]).prop("disabled", disabled);
        }
    });
};
// Svuota i campi all'interno di un contenitore
var emptyFields = function(containerEl) {
    containerEl.find('select, input, textarea').each(function() {
        var fieldEl = $(this),
            tagName = fieldEl.prop('tagName').toUpperCase();
        if (tagName === 'SELECT' || tagName === 'TEXTAREA') {
            fieldEl.val('');
        } else { // INPUT
            if (fieldEl.attr('type') === 'radio' || fieldEl.attr('type') === 'checkbox') {
                fieldEl.prop('checked', false);
            } else { // TEST, EMAIL, PASSWORD, ECC.
                fieldEl.val('');
            }
        }
    });
};
// Assistente virtuale
var loadVirtass = function() {
    // Se ci sono parametri al caricamento apre l'assistente
    // Associa le funzioni al pulsante
    $("#toolVirtassButton").click(function() {
        $.getScript("/wbresp/js/tool_va.js");
    });
    /*
     * if (false) { // Apre l'assistente con i parametri indicati $("#toolVirtassButton").trigger("click"); }
     */
};

/*var initTooltip = function() {
    // Tooltip
    var ttel = $("*[data-toggle=tooltip]").not(".ttInited");
    // Inizializzazioni al click
    ttel.click(function(event) {
        // Chiusura di tutti i tooltip aperti
        if (!$(this).is(".radio-inline")) event.preventDefault();
        $(".tooltip").remove();
        $(this).tooltip("show");
        //Chiusura del tooltip
        $("#" + $(this).attr("aria-describedby") + " .tooltip-close").click(function(event) {
            event.preventDefault();
            $(this).parents(".tooltip").remove();
        });
    }).addClass("ttInited");
    // Tooltip template base (al click)
    ttel.tooltip({
        trigger: "manual",
        html: true,
        template: '<div class="tooltip" role="tooltip"><span class="tooltip-close">&nbsp;</span><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
    });
    // Avvia il precaricamento di tutte le immagini eventualmente presenti nei vari tooltip
    $.each(ttel, function(i, v) {
        var ttCode = $(v).attr("data-original-title");
        if (ttCode.indexOf("<img") >= 0) {
            if (typeof imgttpreload == "undefined") {
                imgttpreload = $("<div>").css("display", "none").attr("id", "imgttpreloader");
                $("body").prepend(imgttpreload);
            }
            $.each($.parseHTML(ttCode), function(i, v) {
                var ele = $(v);
                if (ele.is("img")) imgttpreload.append(ele);
            });
        }
    });
};*/
// Controlla che almeno un campo non sia vuoto
var arePartiallyCompiled = function(filedsArr) {
    return ($(filedsArr.join(", ")).filter(function() {
        return ($(this).val() !== "");
    }).length);
};
// Tooltip dinamici per documenti
var ttModuloDoc = function() {
    var ttModuloDocSelect = $(".modulo-doc select[data-modulo-doc=tipo-documento]"),
        ttModuloDocpart, ttModulo;
    if (ttModuloDocSelect.length) {
        // Oggetto con la definizione delle varie parti dei documenti
        ttModuloDocpart = {
            "doc-numero": { "definizione": "Numero del documento" },
            "doc-rilascio": { "definizione": "Data emissione documento" },
            "doc-scadenza": { "definizione": "Data di scadenza" },
            "doc-comune": { "definizione": "Comune di rilascio" }
        };
        // Oggetto con i contenuti dei vari tooltip (valori della select)
        ttModulo = {
            "01": { "testo": "Carta d'identit&agrave; elettronica" },
            "12": { "testo": "Carta d'identit&agrave; rinnovata" },
            "11": { "testo": "Carta d'identit&agrave; cartacea" },
            "03": { "testo": "Passaporto" },
            "02": { "testo": "Patente elettronica" },
            "14": { "testo": "Patente rinnovata" },
            "13": { "testo": "Patente cartacea" }
        };
        // Fill delle opzioni delle select, se non sono specificate opzioni
        $.each(ttModuloDocSelect, function(i, ttMsel) {
            ttMsel = $(ttMsel);
            var ttModuloDocSelectCompile = (ttMsel.find("option").length <= 1);
            if (ttModuloDocSelectCompile) {
                var ttModuloNoDocs = (ttMsel.attr("data-nodocs")) ? ttMsel.attr("data-nodocs").split("|") : "";
                $.each(ttModulo, function(k) {
                    if ($.inArray(k, ttModuloNoDocs) < 0) ttMsel.append($("<option>").attr("value", k).html(ttModulo[k].testo));
                });
            }
        });
        // Prepara tutti i tooltip
        $.each(ttModuloDocSelect.parents(".modulo-doc").find("label[data-modulo]"), function() {
            var ttIcon = $("<a>").addClass("icoinfo").attr({ "data-toggle": "tooltip", "data-modulo-label": $(this).attr("data-modulo"), "title": "" }).hide();
            $(this).addClass("labelTooltip").after(ttIcon);
        });
        initTooltip();
        // Inserisce la funzione sulla select per l'aggiornamento/creazione di tutti i tooltip
        var ttModuloDocSelectChange = function() {
            var thisModulo = $(this).parents(".modulo-doc"),
                sVal = $(this).val();
            thisModulo.find('div.tooltip').remove();
            if (sVal !== "") {
                // Aggiorna il contenuto di tutti i toolip associati alla select
                $.each(ttModuloDocpart, function(key) {
                    // Precarica le immagini associate al modulo
                    var imgttprel = $("#imgttpreloader");
                    if (!imgttprel.length) {
                        imgttprel = $("<div>").css("display", "none").attr("id", "imgttpreloader");
                        $("body").prepend(imgttprel);
                    }
                    var imtoload = "/wbresp/img/aol/" + sVal + key.replace("doc-", "-") + ".gif";
                    if (imgttprel.find("img[src='" + imtoload + "']").length <= 0) imgttprel.append($("<img>").attr("src", imtoload));
                    // Riempie il tooltip relativo (inizializzandolo se non esiste)
                    thisModulo.find(".icoinfo[data-modulo-label=" + key + "]").attr("data-original-title", "<div class='centeredimage'><img src='" + imtoload + "'></div>");
                });
                thisModulo.find("a.icoinfo").show();
            } else {
                // nasconde i tooltip
                thisModulo.find("a.icoinfo").hide();
            }
        };
        $(".modulo-doc select[data-modulo-doc=tipo-documento]").change(ttModuloDocSelectChange).trigger("change");
    }
};
/* Campi per caricamento file */
var btnFileLoadFunc = function() {
        var filename = $(this).val().replace(/\\/g, '/').replace(/.*\//, '');
        if (filename !== "") {
            /* alert sul tipo di file (sicurezza per IE) */
            var accTypes = $(this).attr("accept").replace(" ", "").split(",");
            var typeOk = false;
            $.each(accTypes, function(i, v) {
                if (filename.match(v + "$")) typeOk = true; 
            });
            if (!typeOk) loadModal("Hai scelto di caricare un <strong>tipo di file non valido</strong>.<br>Se continui potrebbero esserci errori. Ti chiediamo di controllare che il tipo del file che hai scelto sia indicato tra quelli corretti (" + accTypes.join(",") + ").", "Tipo di file non valido");
        }
        $(this).closest(".input-group").find(".btn-file-name").val(filename);
        $(this).focusout();
    },
    btnFileLoad = function() {
        $('.btn-file :file').on('change', btnFileLoadFunc);
    };
var nextFocus = function(el, nextEl, length) {
    if ($(el).val().length == length) {
        $(nextEl).focus();
    }
};
/* Inizializza il menu dei tool in Aol */
var initAolTools = function() {
    $(".console-aiuto .aol-tools-opener").click(function() {
        $(this).parents(".console-aiuto").toggleClass("opened");
    });
};
/* Maschere d'inserimento e controllo su submit senza validazione */
var initAolForms = function() {
    $('input[name^="cod_fisc"]').mask('SSSSSS00S00S000S');
    $('input[id^="cap_"]').attr('maxlength', "5").mask('00000');
    $('.nascGg').mask('00');
    $('.nascAn').mask('0000');
    $('.numPref').mask('ZZ099', {
        "translation": {
            "Z": {
                "pattern": /0/
            }
        }
    });
    $('.numCell').mask('0000000009');
    $('.numNaz').mask('000000099999999');
    $('.soloNome').mask('N', {
        "translation": {
            "N": {
                "pattern": /[A-Za-z\'\- ]/,
                "optional": true,
                "recursive": true
            }
        }
    });
    $('form').submit(function(e) {
        if (!$(this).valid()) {
            e.preventDefault();
        }
    });
};
var checkForm = function(formEl,isTinReq) {
    var isTinReq = typeof(isTinReq) ==="undefined" ? false : isTinReq;
    // Tolgo l'errore dai campi composti
    formEl.find('.input-date, .input-tel, .input-address, .btn-file-group').find('.ignore, .btn-file-name').removeClass('error');
    // Testo che il form sia valido prima di fare il submit
    if (formEl.valid()&& !isTinReq ) {
        //controlli americanita se la cittadinanza + disabilitata la riabilito
        var fieldCittadinanzaAmericanaDis = $(".cittadinanza-americana-disabled");
        if(fieldCittadinanzaAmericanaDis.length>0)
         {
            fieldCittadinanzaAmericanaDis.attr("disabled",false);
         }
        //fine controlli americanita se la cittadinanza + disabilitata la riabilito
        formEl.submit();
        setTimeout(openWaitOverlay, 2000);
    } else {
        // Mi sposto sul primo errore
        moveToElement(formEl.find('label.error').filter(function() {
            return ($.trim($(this).text()) !== '');
        }).first().closest('.row'));
    }
};
var openWaitOverlay = function () {
    var waitOverlay = $('#waitOverlay');
    if (!waitOverlay.length) {
        waitOverlay = $(
            '<div class="modal" id="identificazionecompletata" role="dialog">' +
                '<div class="modal-dialog">' +
                    '<div class="modal-content">' +
                        '<div class="modal-header">' +
                            '<h4 class="modal-title">CARICAMENTO PROSSIMO STEP</h4>' +
                        '</div>' +
                        '<div class="modal-body">' +
                            'Attendere. Caricamento pagina in corso.' +
                        '</div>' +
                        '<div class="modal-footer"></div>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );
        $('body').append(waitOverlay);
    }
    waitOverlay.modal({
        "backdrop": "static",
        "keyboard": false,
        "show": true
    });
};

$.validator.setDefaults({
    "ignore": ".ignore",
    "errorPlacement": function(error, element) {
        var elType = element.attr("type"),
            rowEl, lastRowEl, errorPlace = element,
            errorWrap = false;
        if (elType === "radio") {
            rowEl = element.closest('.radio-inline');
            lastRowEl = rowEl.nextAll('.radio-inline');
            errorPlace = (lastRowEl.length) ? lastRowEl : rowEl;
        } else if (elType === "checkbox") {
            rowEl = element.closest('.check-inline');
            lastRowEl = rowEl.nextAll('.check-inline');
            errorPlace = (lastRowEl.length) ? lastRowEl : rowEl;
        } else if (element.closest('.input-date').length) {
            errorWrap = element.closest('.input-date');
        } else if (element.closest('.input-tel').length) {
            errorWrap = element.closest('.input-tel');
        } else if (element.closest('.input-address').length) {
            errorWrap = element.closest('.input-address');
        } else if (element.closest('.btn-file-group').length) {
            errorWrap = element.closest('.btn-file-group');
            errorPlace = errorWrap;
        }
        if (errorWrap) {
            if ($.trim(error.text()) !== '') {
                errorWrap.find('.ignore, .btn-file-name').addClass('error');
            }
            error.css('clear', 'both');
        }
        error.insertAfter(errorPlace);
    },
    "success": function(element) {
        if (element[0].tagName.toLowerCase() === 'label' && element.prevAll('.btn-file-group').length) {
            element.closest('.form-group').find('.btn-file-name').removeClass('error');
        } else {
            if (element.closest('.input-date').length) {
                element.closest('.input-date').find('.ignore').removeClass('error');
            } else if (element.closest('.input-tel').length) {
                element.closest('.input-tel').find('.ignore').removeClass('error');
            } else if (element.closest('.input-address').length) {
                element.closest('.input-address').find('.ignore').removeClass('error');
            } else if (element.closest('.btn-file-group').length) {
                element.closest('.btn-file-group').find('.btn-file-name').removeClass('error');
            }
        }
    },
    "onfocusout": function(element) {
        element = $(element);
        if (!element.is("input:radio") && !element.is("input:checkbox") && (element.hasClass('valid') || element.hasClass('error'))) {
            element.valid();
        } else if (element.attr('type') === 'file' && element.val() !== '') {
            element.valid();
        }
    },
    /*
    "onkeyup": function(element) {
        element = $(element);
        if (!element.hasClass('valid') && !element.hasClass('error')) {
            element.valid();
        }
    }
    */
});
// Funzioni onload ed inizializzazioni
$(function() {
    /* Correzione richiesta da Daniela Bianchi */
    $(".aol-stepper .stepname").each(function() {
        var el = $(this);
        if (el.text().toUpperCase() === "ADEMPIMENTI LEGALI") {
            el.text("ADEMPIMENTI NORMATIVI");
        }
    });

    /* STRUTTURALI (PRIORITA' 1) */
    initAolTools();
    initAolForms();
    // Tooltip
    //initTooltip();
    // Caricamento file
    btnFileLoad();
    // Tooltip: modulo documenti
    ttModuloDoc();
    /* FUNZIONI ADDIZIONALI (PRIORITA' 2) */
    // Assistente virtuale
    loadVirtass();
    if(typeof isCovid !== "undefined" && isCovid=== true) {
        $("#covidOverlay").modal("show");
    }
    
});
