/* globals $:false */
"use strict";
$(function() {
    var formEl = $('#aolStep3');
    
    formEl.validate({
        "rules": {
            "strongtokencons": {
                "required": {
                    depends: function() {
                        return $("#strongdispo2").is(":checked");
                    }
                }
            }
        },
        "messages": {
            "strongtokencons": {
                "required": "Seleziona"
            }
        }
    });

    $('#btnSubmit').click(function () {
        if (formEl.valid()) {
            formEl.submit();
        }
    });
});
