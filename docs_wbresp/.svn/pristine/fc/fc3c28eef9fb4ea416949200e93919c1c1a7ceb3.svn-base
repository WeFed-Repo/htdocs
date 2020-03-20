/* globals $:false, setFormGroupDate:false, checkForm:false */
"use strict";
$(function() {
    var formEl = $('#aolStep4_webcam'),
        formRules = {
            "rules": {},
            "messages": {}
        },
        formValidator;

    if ($("#ibanclientebon_int1").length) {
        /** * RULES ** */
        formRules.rules.ibanclientebon_int1 = {
            "required": true,
            //"iban": true,
            "validaIban": true,
            "validaIbanNoImel": true
        };

        /** * MESSAGES ** */
        formRules.messages.ibanclientebon_int1 = {
            "required": "Compila"
        };
    } else {
        /** * RULES ** */
        formRules.rules.tipo_doc2_int1 = "required";
        formRules.rules.numero_doc2_int1 = {
            "required": true,
            "docNum": ["#tipo_doc2_int1", "#stato_emissione2_int1", "#emissione2_int1"]
        };
        formRules.rules.emissione2_int1 = {
            "required": true,
            "dateITA": true,
            "docStartDate": ["#stato_emissione2_int1", "#tipo_doc2_int1", "#nascita2_int1"]
        };
        formRules.rules.scadenza2_int1 = {
            "required": true,
            "dateITA": true,
            "docEndDate": ["#stato_emissione2_int1", "#tipo_doc2_int1", "#emissione2_int1", "#nascita2_int1"]
        };
        formRules.rules.stato_emissione2_int1 = "required";
        formRules.rules.provincia_emissione2_int1 = "required";
        formRules.rules.comune_emissione2_int1 = "required";
        formRules.rules.file_upload = {
            "accept": "image/png,image/jpeg,application/pdf"
        };

        /** * MESSAGES ** */
        formRules.messages.tipo_doc2_int1 = "Seleziona";
        formRules.messages.numero_doc2_int1 = {
            "required": "Compila",
            "docNum": "Verifica"
        };
        formRules.messages.emissione2_int1 = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages.scadenza2_int1 = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages.stato_emissione2_int1 = "Seleziona";
        formRules.messages.provincia_emissione2_int1 = "Seleziona";
        formRules.messages.comune_emissione2_int1 = "Seleziona";
        formRules.messages.file_upload = {
            "accept": "Tipo file non valido. Verifica il formato e riprova."
        };
    }

    formValidator = formEl.validate(formRules);

    setFormGroupDate(formEl, formValidator);

    $('#btnSubmit').click(function () {
        checkForm(formEl);
    });
});
