/* globals $:false, setFormGroupCell:false, setFormGroupDate:false, getTodayDateITA:false, checkForm:false */
"use strict";
$(function() {

    // Tooltip del campo
    // $("#ttNome, #ttCognome, #ttCellulare").tooltip();
    // $('#tplOverlayer').modal('show');
    
    var formEl = $('#aolStep0'),
        formValidator = formEl.validate({
            "rules": {

                "num_intestatari": {
                    "required": true
                },

                "nome_int1": {
                    "required": true,
                    "noNumeric": true
                },

                "cognome_int1": {
                    "required": true,
                    "noNumeric": true
                },

                "nascita_int1": {
                    "required": true,
                    "dateITA": true,
                    "dateminITA": ['01/01/1900'],
                    "datemaxITA": [getTodayDateITA()],
                    "maggiorenneITA": true
                },

                "sesso_int1": {
                    "required": true
                },

                "cod_fiscale_int1": {
                    "required": true,
                    "minlength": 16,
                    "codicefiscale": ['cognome_int1', 'nome_int1', 'nascita_int1', 'sesso_int1']
                },

                "mail_int1": {
                    "required": true,
                    "email": true
                },

                "tel_3_int1": {
                    "required": true,
                    "prefissoPaese": ['pref_intern_3_int1'],
                    "numeroCellulare": ['telefono_3_int1']
                },

                "operatore_int1": {
                    "required": true
                },

                "cod_prom_conv": {
                    "validaConvenzione": true,
                    "requiredConvenzione": ['cod_presentatore'],
                },

                "cod_promotore": {
                    "validaPromotore": true,
                },

                "cod_presentatore": {
                	"requiredPresentatore" : ['cod_prom_conv'],
                    "validaPresentatore": true,
                },

                "informativaPrivacy": {
                    "required": true
                },

                "informativaKO": {
                    "required": true
                },

                "consDatiPersonali": {
                    "required": true
                },

                "cons_5": {
                    "required": true
                },

                "cons_6": {
                    "required": true
                }
            },
            "messages": {
                "num_intestatari": "Seleziona",

                "nome_int1": {
                    "required": "Compila",
                    "noNumeric": "Non &egrave; consentito utilizzare numeri"
                },

                "cognome_int1": {
                    "required": "Compila",
                    "noNumeric": "Non &egrave; consentito utilizzare numeri"
                },

                "nascita_int1": {
                    "required": "Compila",
                    "dateITA": "Verifica",
                    "dateminITA": "Verifica",
                    "datemaxITA": "La data &egrave; successiva ad oggi",
                    "maggiorenneITA": "L'intestatario deve essere maggiorenne"
                },

                "sesso_int1": "Seleziona",

                "cod_fiscale_int1": {
                    "required": "Compila",
                    "minlength": "Il codice fiscale non &egrave; corretto",
                    "codicefiscale": "Il codice fiscale non &egrave; corretto"
                },

                "mail_int1": {
                    "required": "Compila",
                    "email": "Verifica"
                },

                "tel_3_int1": {
                    "required": "Compila",
                    "prefissoPaese": "Verifica",
                    "numeroCellulare": "Verifica"
                },
                "operatore_int1": {
                    "required": "Seleziona"
                },

                "informativaPrivacy": {
                    "required": "Seleziona"
                },

                "informativaKO": {
                    "required": "Clicca sul link per aprire l'informativa"
                },

                "consDatiPersonali": {
                    "required": "Seleziona"
                },

                "cons_5": {
                    "required": "Seleziona"
                },

                "cons_6": {
                    "required": "Seleziona"
                }
            }
        });

    setFormGroupCell(formEl, formValidator);
    setFormGroupDate(formEl, formValidator);

    $('#cod_fiscale_int1, #nome_int1, #cognome_int1').addClass('ucl').on('change focus blur', function () {
        var el = $(this);
        el.val(el.val().toUpperCase());
    }).change();

    $('#btnSubmit').click(function () {
        $('.ucl').each(function () {
            var el = $(this);
            el.val(el.val().toUpperCase());
        });
        checkForm(formEl);
    });

    $('#lnkInformativa').click(function() {
        var informativaDis = $('#informativaDis'),
            informativaKO;
        if (informativaDis.length) {
            informativaDis.remove();
            informativaKO = $('#informativaKO');
            informativaKO.prop('checked', true);
            formValidator.element('#informativaKO');
            informativaKO.remove();
            $('#informativaOK').removeClass('ignore').removeClass('hidden-input');
            $('#informativaOK').val("1");
        }
    });
    $('#informativaOK').click(function() {
        if ($('#informativaDis').length) {
            return false;
        }
    });
});
