/* globals $:false, setFormGroupCell:false, setFormGroupDate:false, getTodayDateITA:false, checkForm:false */
"use strict";
$(function() {
    var setOverlayerCovid = function() {
        var initCovid = isCovid === true ? dateCovidIni : "",
        endCovid = isCovid === true ? dateCovidEnd : "",
        htmlOverlayCovid = "<p>Documento scaduto? Nessun problema: in virt&ugrave; del DECRETO-LEGGE Cura Italia del 17 marzo 2020, tutti i documenti d&#39;identit&agrave; scaduti a partire dal <strong> " + initCovid + " </strong> mantengono la loro validit&agrave; fino al <strong>" +  endCovid + "</strong>.</p><p>Puoi procedere con l&#39;apertura del conto on line.</p>",
        overlayCovid = '<div class="modal fade" id="covidOverlay" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">PROROGA SCADENZA DOCUMENTI</h4></div><div class="modal-body feedback"><div class="col-md-12 col-sm-12"><div class="title-content">'+ htmlOverlayCovid +'</div></div></div><div class="modal-footer"><div class="row"><div class="col-sm-12"><button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB" data-dismiss="modal">CONTINUA</button></div></div></div></div></div></div>';
        $("body").append(overlayCovid); 
    }
    
    if(typeof isCovid !== "undefined" && isCovid=== true) {
            setOverlayerCovid();
    }
    // Tooltip del campo
    // $("#ttNome, #ttCognome, #ttCellulare").tooltip();
    
    
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
                }
				/*,

                "consDatiPersonali": {
                    "required": true
                },

                "cons_5": {
                    "required": true
                },

                "cons_6": {
                    "required": true
                }*/
                ,
                "consGruppo": {
                    "required": true
                },
                "consProf": {
                    "required": true
                },
                 "consCommTerz": {
                    "required": true
                },
                "consDatiTerz": {
                    "required": true
                },
                "consDatiSens": {
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

                /*"consDatiPersonali": {
                    "required": "Seleziona"
                },

                "cons_5": {
                    "required": "Seleziona"
                },

                "cons_6": {
                    "required": "Seleziona"
                }*/
				"consGruppo": {
                    "required": "Seleziona"
                },

                "consProf": {
                    "required": "Seleziona"
                },
				
				"consCommTerz": {
                    "required": "Seleziona"
                },

                "consDatiTerz": {
                    "required": "Seleziona"
                },

                "consDatiSens": {
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
