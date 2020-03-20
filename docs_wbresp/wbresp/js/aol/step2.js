/* globals $:false, Cert:false, moveToAnchor:false, setFormGroupCell:false, userVerifiedCell:false, userVerifiedEmail:false, mono:false */
"use strict";
$(function() {
    var i, formEl,
        numPanel = $('.accordion-group > .panel').length,
        numInt = mono ? 1 : numPanel;
    /*************************************************************************************************************************************************
     * ** VALIDAZIONE CONSENSO
     ************************************************************************************************************************************************/
    $('#formConsenso').validate({
        "rules": {
            "consDoc": {
                "required": true
            }
        },
        "messages": {
            "consDoc": {
                "required": "Seleziona"
            }
        }
    });
    /*************************************************************************************************************************************************
     * ** VALIDAZIONE OTP
     ************************************************************************************************************************************************/
    function getVerificaOTPConf(suffixField) {
        var json = {
            "rules": {},
            "messages": {}
        };
        json.rules["otp" + suffixField] = {
            "required": true,
            "minlength": 7,
            "alfanumerico": true
        };
        json.messages["otp" + suffixField] = {
            "required": "Compila",
            "minlength": "Verifica",
            "alfanumerico": "Verifica",
        };
        return json;
    }

    function getBtnOtpInfo(btnEl) {
        var infoArr = btnEl.closest('.boxVer').attr('id').replace('boxVer', '').split('_');
        return [infoArr[0], 1 * infoArr[1].replace('int', '')];
    }
    for (i = 1; i <= numInt; ++i) {
        formEl = $('#formVerificaOTPCell_int' + i);
        if (formEl.length) {
            formEl.validate(getVerificaOTPConf("Cell_int" + i, "Cell"));
        }
        formEl = $('#formVerificaOTPEmail_int' + i);
        if (formEl.length) {
            formEl.validate(getVerificaOTPConf("Email_int" + i, "Email"));
        }
    }
    $('.sendOtp').click(function() {
        var btnEl = $(this),
            boxVer = btnEl.closest('.boxVer'),
            infoArr = getBtnOtpInfo(btnEl),
            btnType = infoArr[0],
            numInt = infoArr[1];
        if (!btnEl.hasClass('disabled')) {
            if (!mono) {
                boxVer.find('.completaDopo' + btnType).show();
            }
            if (btnType === 'Cell') {
                Cert.inviaOtp('SMS', numInt);
            } else if (btnType === 'Email') {
                Cert.inviaOtp('MAIL', numInt);
            }
        }
    });
    $('.boxVer .nota a').click(function() {
        var btnEl = $(this).closest('.boxVer').find('.sendOtp'),
            infoArr = getBtnOtpInfo(btnEl),
            btnType = infoArr[0],
            numInt = infoArr[1];
        if (btnType === 'Cell') {
            Cert.inviaOtp('SMS', numInt);
        } else if (btnType === 'Email') {
            Cert.inviaOtp('MAIL', numInt);
        }
    });
    $('.verOtp').click(function() {
        var btnEl = $(this),
            infoArr = getBtnOtpInfo(btnEl),
            btnType = infoArr[0],
            numInt = infoArr[1];
        if (!btnEl.hasClass('disabled') && btnEl.closest('form').valid()) {
            if (btnType === 'Cell') {
                Cert.validaOtp('SMS', numInt, $('#otpCell_int' + numInt).val());
            } else if (btnType === 'Email') {
                Cert.validaOtp('MAIL', numInt, $('#otpEmail_int' + numInt).val());
            }
        }
    });

    /*************************************************************************************************************************************************
     * ** SALVA E PROSEGUI
     ************************************************************************************************************************************************/
    $('#btnSubmit').click(function(e) {
        var consensoForm = checkConsensoForm(),
            verificaForms = checkVerificaForms();
        e.preventDefault();
        if (!consensoForm) {
            moveToAnchor('#' + $('#formConsenso input.error').first().attr('id'));
        } else {
            if (!verificaForms) {
//                if (!mono) {
//                    $('#overlayVerificaDopo').modal();
//                } else {
//                    moveToAnchor('#' + $('.boxVer input.error').first().closest('form').attr('id'));
//                }
                moveToAnchor('#' + $('.boxVer input.error').first().closest('form').attr('id'));
            } else {
                goToStep3();
            }
        }
        return false;
    });

    function checkConsensoForm() {
        return $('#formConsenso').valid();
    }

    function checkVerificaForms() {
        var valid = true;
        $('.boxVer form').each(function() {
            var formEl = $(this);
            if (!formEl.valid() || !formEl.find('.textinput').prop('disabled')) {
                valid = false;
            }
        });
        return valid;
    }

    function goToStep3() {
        //window.location.assign(step3Url);
        $('#formConsenso').submit();
    }

    function getFieldArray(intestatario, prefix) {
        var i,
            fieldArray = [];
        for (i = 1; i < 4; ++i) {
            if (i !== intestatario) {
                fieldArray.push(prefix + i);
            }
        }
        return fieldArray;
    }

    /*************************************************************************************************************************************************
     * ** VALIDAZIONE FORM OVERLAY
     ************************************************************************************************************************************************/
    // Validazione modifica cellulare
    var formCellEl = $('#formModCell'),
        formCellValidator = formCellEl.validate({
            "rules": {
                "tel": {
                    "required": true,
                    "prefissoPaese": ['prefisso_mod'],
                    "numeroCellulare": ['num_mod']
                },
                "operatore": "required"
            },
            "messages": {
                "tel": {
                    "required": "Compila",
                    "prefissoPaese": "Verifica",
                    "numeroCellulare": "Verifica"
                },
                "operatore": "Seleziona"
            }
        }),
        panelArr = $('#boxCertificazione .panel');
    // Campi multipli cellulare
    setFormGroupCell(formCellEl, formCellValidator);
    // Validazione modifica email
    $('#formModEmail').validate({
        "rules": {
            "email": {
                "required": true,
                "email": true
            }
        },
        "messages": {
            "email": {
                "required": "Compila",
                "email": "Inserisci un'email valida"
            }
        }
    });
    /*************************************************************************************************************************************************
     * ** GESTIONE OVERLAY
     ************************************************************************************************************************************************/
    // Overlay consenso
    $('#acconsento1b').click(function() {
        $('#acconsento1a, #acconsento1b').prop('checked', false);
        $('#overlayConsensoNegato').modal();
    });
    $('#btnConsensoOK').click(function() {
        $('#acconsento1a').prop('checked', true);
        $('#formConsenso').valid();
        $('#overlayConsensoNegato').modal('hide');
    });
    // Overlay modifica cell
    function resetOverlayCell() {
        $('#num_mod, #operatore').val('');
        $('#prefisso_mod, #tel_mod').val('');
        $('#prefisso_mod').val('0039');
    }
    $('#resetModCell').click(function() {
        resetOverlayCell();
        $('#overlayModCell').modal('hide');
    });
    $('.modCell').click(function() {
        if (!$(this).hasClass('disabled')) {
            var modalEl = $('#overlayModCell'),
                numInt = $(this).closest('.row').attr('id').replace('outputCell_int', ''),
                indDaCertificare = mono? 0 : panelArr.index($(this).closest('.panel')),
                tel = $('#tel_mod');
            resetOverlayCell();
            if (!mono) {
                tel.rules("remove", "unico");
                tel.rules("add", {
                    "unico": getFieldArray(parseInt(numInt, 10), "#tel_3_int"),
                    "messages": {
                        "unico": "Indica un numero cellulare diverso dagli altri intestatari"
                    }
                });
            }
            modalEl.find('form').attr('data-num-int', numInt).attr('data-cert-ind', indDaCertificare);
            modalEl.modal();
        }
    });
    $('#submitModCell').click(function() {
        var formEl = $('#formModCell'),
            numInt = formEl.attr('data-num-int'),
            indDaCertificare = 1 * formEl.attr('data-cert-ind');
        if (formEl.valid()) {
            Cert.modifica('SMS', numInt, indDaCertificare);
        }
    });
    // Overlay modifica email
    function resetOverlayEmail() {
        $('#mail').val('');
    }
    $('#resetModEmail').click(function() {
        resetOverlayEmail();
        $('#overlayModEmail').modal('hide');
    });
    $('.modEmail').click(function() {
        if (!$(this).hasClass('disabled')) {
            var modalEl = $('#overlayModEmail'),
                numInt = $(this).closest('.row').attr('id').replace('outputEmail_int', ''),
                indDaCertificare = mono? 0 : panelArr.index($(this).closest('.panel')),
                mail = $('#mail');
            resetOverlayEmail();
            if (!mono) {
                mail.rules("remove", "unico");
                mail.rules("add", {
                    "unico": getFieldArray(parseInt(numInt, 10), "#mail_int"),
                    "messages": {
                        "unico": "Indica un indirizzo email diverso dagli altri intestatari"
                    }
                });
            }
            modalEl.find('form').attr('data-num-int', numInt).attr('data-cert-ind', indDaCertificare);
            modalEl.modal();
        }
    });
    $('#submitModEmail').click(function() {
        var formEl = $('#formModEmail'),
            numInt = formEl.attr('data-num-int'),
            indDaCertificare = 1 * formEl.attr('data-cert-ind');
        if (formEl.valid()) {
            Cert.modifica('MAIL', numInt, indDaCertificare);
        }
    });
    /*************************************************************************************************************************************************
     *** SALTA VERIFICA
     ************************************************************************************************************************************************/
//    if (!mono) {
//        // Mostra per cointestati
//        $('.skipVerifica').show();
//        // Overlay completa dopo
//        $('.completaDopoCell').click(function() {
//            if (!$(this).hasClass('disabled')) {
//                $('#overlayVerificaDopoCell').modal();
//            }
//        });
//        $('.completaDopoEmail').click(function() {
//            if (!$(this).hasClass('disabled')) {
//                $('#overlayVerificaDopoEmail').modal();
//            }
//        });
//        $('.tornaVer').click(function() {
//            var errorArr = $('input.error');
//            errorArr.closest('.panel-collapse').not('.in').collapse('show');
//            $(this).closest('.modal').modal('hide');
//            moveToAnchor('#' + errorArr.first().closest('.boxVer').attr('id'));
//        });
//        $('.skipVerifica').click(function() {
//            var el = $(this);
//            if (!$('#formConsenso').valid()) {
//                $('#accordion .panel-collapse.in').collapse('hide');
//                el.closest('.modal').modal('hide');
//                moveToAnchor('#' + $('#formConsenso input.error').attr('id'));
//            } else {
//                goToStep3();
//            }
//        });
//    }
    /*************************************************************************************************************************************************
     *** DISABILITA BLOCCHI VERIFICA
     ************************************************************************************************************************************************/
    var boxVerArr;
    if (typeof userVerifiedCell !== "undefined" && userVerifiedCell.length && typeof userVerifiedEmail !== "undefined" && userVerifiedEmail.length) {
        boxVerArr = $('.boxVer');
        $.each(userVerifiedCell, function(index, value) {
            if (value) {
                Cert.disableBoxVer(boxVerArr.eq(2 * index));
            }
        });
        $.each(userVerifiedEmail, function(index, value) {
            if (value) {
                Cert.disableBoxVer(boxVerArr.eq(2 * index + 1));
            }
        });
    }
});
