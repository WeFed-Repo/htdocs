/* globals $:false, setFormGroupDate:false, emptyFields:false, checkForm */
"use strict";
$(function() {
    var isMono = !$('.panel-body').length,
        formEl = $('#aolStep4_bonifico'),
        formRules = {
            "rules": {},
            "messages": {}
        },
        formValidator, i,
        formShowPanelError = false,

        checkDocumentOK = function(i) {
            return function() {
                return $("#secondosi_int" + i).is(":checked");
            };
        },

        checkDocumentKO = function(i) {
            return function() {
                return $("#secondono_int" + i).is(":checked");
            };
        };

    // Controllo radiobutton condizionali
    $(".radiosecondodoc input[type=radio]").click(function() {
        var rb = $(this),
            container = isMono ? rb.closest('form') : rb.closest('.panel-body'),
            rbcontsi = container.find(".sidocumento").hide(),
            rbcontno = container.find(".nodocumento").hide();
        if (rb.val() === "si") {
            rbcontsi.show();
            emptyFields(rbcontno);
        } else {
            rbcontno.show();
            emptyFields(rbcontsi);
        }
    });

    // Rules
    for (i = 1; i < 4; ++i) {
        /** * RULES ** */

        /* 1. Inserisci le tue informazioni personali */
        formRules.rules["ibanclientebon_int" + i] = {
            "required": true,
            "minlength": 27,
            //"iban": true,
            "validaIban": true,
            "validaIbanNoImel": true
        };

        formRules.rules["secondodoc_int" + i] = "required";

        formRules.rules["altroDoc_int" + i] = {
            "required": {
                depends: checkDocumentKO(i)
            }
        };

        formRules.rules["tipo_doc2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            }
        };
        formRules.rules["numero_doc2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            },
            "docNum": ["#tipo_doc2_int" + i, "#stato_emissione2_int" + i, "#emissione2_int" + i]
        };
        formRules.rules["emissione2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            },
            "dateITA": true,
            "docStartDate": ["#stato_emissione2_int" + i, "#tipo_doc2_int" + i, "#nascita2_int" + i]
        };
        formRules.rules["scadenza2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            },
            "dateITA": true,
            "docEndDate": ["#stato_emissione2_int" + i, "#tipo_doc2_int" + i, "#emissione2_int" + i, "#nascita2_int" + i]
        };
        formRules.rules["stato_emissione2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            }
        };
        formRules.rules["provincia_emissione2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            }
        };
        formRules.rules["comune_emissione2_int" + i] = {
            "required": {
                depends: checkDocumentOK(i)
            }
        };

        /** * MESSAGES ** */

        /* 1. Inserisci le tue informazioni personali */
        formRules.messages["ibanclientebon_int" + i] = {
            "required": "Compila",
            "minlength": "Verifica"
        };
        formRules.messages["secondodoc_int" + i] = "Seleziona";
        formRules.messages["altroDoc_int" + i] = "Seleziona";
        formRules.messages["tipo_doc2_int" + i] = "Seleziona";
        formRules.messages["numero_doc2_int" + i] = {
            "required": "Compila",
            "docNum": "Verifica"
        };
        formRules.messages["emissione2_int" + i] = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages["scadenza2_int" + i] = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages["stato_emissione2_int" + i] = "Seleziona";
        formRules.messages["provincia_emissione2_int" + i] = "Seleziona";
        formRules.messages["comune_emissione2_int" + i] = "Seleziona";
    }

    formRules.invalidHandler = function() {
        // Al submit in caso di errori fa espandere i panel che li contengono
        formShowPanelError = true;
    };

    formRules.showErrors = function() {
        // Mostra gli errori
        this.defaultShowErrors();

        if (formShowPanelError) {
            formShowPanelError = false;
            // Apre i panel che contengono errori
            formEl.find('.panel-collapse').not('.in').each(function() {
                var panel = $(this);
                if (panel.find('.error').not('label').length) {
                    panel.collapse('show');
                }
            });
        }
    };

    formValidator = formEl.validate(formRules);

    setFormGroupDate(formEl, formValidator);

    $('#btnSubmit').click(function () {
        checkForm(formEl);
    });
});
