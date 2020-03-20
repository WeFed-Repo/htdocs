/* globals $:false, checkForm:false */
"use strict";

$(function() {
    // Abilita/disabilita i controlli in pagina
    var fHaconto = $("input[name=hasContoIdentificazioneFdr]"),
        fHacontoWrap = $(".fieldwrapped .radio-btnstyle-wrap");

    $(".fieldwrapped>.radio>input[type=radio]").change(function() {
        var f = $(this);

        $(".fieldwrapped").removeClass("selected");
        fHaconto.attr("disabled", true);
        f.parents(".fieldwrapped").addClass("selected");

        // Se e' il caso "FDR" abilita il pannello per il conto
        if (f.is("#dist_webcam")) {
            fHaconto.attr({
                "disabled": false,
                "checked": false
            });
        } else {
            fHaconto.attr({
                "disabled": true,
                "checked": false
            });
            fHacontoWrap.removeClass("selected");
        }

    });

    if (!$('#dist_webcam').prop('checked')) {
        $('#haconto_si, #haconto_no').prop('disabled', true);
    }

    fHaconto.change(function() {
        fHacontoWrap.removeClass("selected");
        $(this).parents(".radio-btnstyle-wrap").addClass("selected");
    });

    // Validazione form
    var formEl = $('#aolStep4');
    formEl.validate({
        "rules": {
            "modalita_riconoscimento": "required",
            "hasContoIdentificazioneFdr": {
                "required": {
                    depends: function() {
                        return $("#dist_webcam").is(":checked");
                    }
                }
            }
        },
        "messages": {
            "modalita_riconoscimento": "Seleziona",
            "hasContoIdentificazioneFdr": "Seleziona"
        },

        "errorPlacement": function(error, element) {
            if (element.attr('name') === 'modalita_riconoscimento' && error.text() !== '') {
                $('#overlaySelezionaModo').modal();
            } else {
                element.closest('.radio').after(error);
            }
        }
    });

    $('#btnSubmit').click(function() {
        checkForm(formEl);
    });
});
