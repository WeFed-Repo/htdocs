/* globals $:false, setFormGroupDate:false, disableSelectByNation:false, checkForm:false */
"use strict";
$(function() {
    var formEl = $('#aolStep4_noconto'),
        formValidator;

    // Validazione form
    formValidator = formEl.validate({
        "rules": {
            "tipo_doc_int1": "required",
            "numero_doc_int1": {
                "required": true,
                "docNum": ["#tipo_doc_int1", "#stato_emissione_int1", "#emissione_int1"]
            },
            "emissione_int1": {
                "required": true,
                "dateITA": true,
                "docStartDate": [true]
            },
            "scadenza_int1": {
                "required": true,
                "dateITA": true,
                "docEndDate": ["#stato_emissione_int1", "#tipo_doc_int1", "#emissione_int1"]
            },
            "stato_emissione_int1": "required",
            "provincia_emissione_int1": "required",
            "comune_emissione_int1": "required",
            "file_name_int1": {
                "required": true,
                "accept": "image/png,image/jpeg,application/pdf"
            }
        },
        "messages": {
            "tipo_doc_int1": "Seleziona",
            "numero_doc_int1": {
                "required": "Compila",
                "docNum": "Verifica"
            },
            "emissione_int1": {
                "required": "Compila",
                "dateITA": "Verifica"
            },
            "scadenza_int1": {
                "required": "Compila",
                "dateITA": "Verifica"
            },
            "stato_emissione_int1": "Seleziona",
            "provincia_emissione_int1": "Seleziona",
            "comune_emissione_int1": "Seleziona",
            "file_name_int1": {
                "required": "Carica",
                "accept": "Tipo file non valido. Verifica il formato e riprova."
            }
        }
    });

    $('#btnSubmit').click(function () {
        checkForm(formEl);
    });

    setFormGroupDate(formEl, formValidator);
    disableSelectByNation(["#stato_emissione_int1", "#provincia_emissione_int1", "#comune_emissione_int1"]);
});
