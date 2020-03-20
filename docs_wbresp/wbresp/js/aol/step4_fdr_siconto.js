/* globals $:false */
"use strict";
$(function() {
    // Validazione form
    var formEl = $('#aolStep4_siconto');
    formEl.validate({
        "rules": {
            "iban": {
                "required": true,
                "iban": true
            }
        },
        "messages": {
            "iban": {
                "required": "Compila",
                "iban": "Verifica IBAN"
            }
        }
    });

    $('#btnSubmit').click(function () {
        checkForm(formEl);
    });
});
