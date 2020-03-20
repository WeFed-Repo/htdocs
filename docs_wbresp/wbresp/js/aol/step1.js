/* globals $:false, setFormGroupCell:false, setFormGroupDate:false, arePartiallyCompiled:false,
    initTooltip:false, setFormGroupAddress: false, btnFileLoadFunc:false, ProvCom:false, checkForm:false, getTodayDateITA:false, resetElementError:false; */
"use strict";

$(function() {
    var formEl = $('#aolStep1'),
        formShowPanelError = false,
        formRules = {
            "rules": {},
            "messages": {}
        },
        formValidator, i,
        numPanel = $('.accordion-group > .panel').length,
        mono = !numPanel,
        numInt = mono ? 1 : numPanel,
        checkPanelCorrispondenza = function(i) {
            return arePartiallyCompiled([
                "#provincia_recapito_int" + i,
                "#comune_recapito_int" + i,
                "#cap_recapito_int" + i,
                "#ind_recapito_int" + i,
                "#civico_recapito_int" + i
            ]);
        },
        checkPanelIndirizzoCAI = function(i) {
            return arePartiallyCompiled([
                "#provincia_domicilioCAI_int" + i,
                "#comune_domicilioCAI_int" + i,
                "#cap_domicilioCAI_int" + i,
                "#ind_domicilioCAI_int" + i,
                "#civico_domicilioCAI_int" + i
            ]);
        },
        checkPanelAltriRecapiti = function(i) {
            return arePartiallyCompiled([
                "#stato_FATCA_int" + i,
                "#ind_FATCA_int" + i,
                "#civico_FATCA_int" + i,
                "#provincia_FATCA_int" + i,
                "#comune_FATCA_int" + i,
                "#cap_FATCA_int" + i
            ]);
        },
        checkPanelAltriRecapiti2 = function(i) {
            return /italia/.test($("#stato_FATCA_int" + i).val().toLowerCase()) && checkPanelAltriRecapiti(i);
        },
        checkObbligoTin = function (i, r) {
            return function () {
                return (function (i, r) {
                  var resFiscEl = $('#residenzaFiscale' + r + '_int' + i),
                        resFiscVal = resFiscEl.val();
                        
                    if (resFiscVal !== '') {
                        resFiscVal = resFiscVal.split('|')[2];
                    }
                    return (resFiscVal === 'S');
               })(i, r);
            };
            
        },
        makeCheckPanelFunction = function (func, i) {
            return function () {
                return func(i);
            };
        },
        getFieldArray = function (intestatario, prefix) {
            var i,
                fieldArray = [];
            for (i = 1; i < intestatario; ++i) {
                fieldArray.push(prefix + i);
            }
            return fieldArray;
        };

    // Rules
    for (i = 1; i <= numInt; ++i) {
        /** * RULES ** */

        /* 1. Inserisci le tue informazioni personali */
        if (i > 1) {
            formRules.rules["nome_int" + i] = {
                "required": true,
                "noNumeric": true
            };
            formRules.rules["cognome_int" + i] = {
                "required": true,
                "noNumeric": true
            };
            formRules.rules["nascita_int" + i] = {
                "required": true,
                "dateITA": true,
                "dateminITA": ['01/01/1900'],
                "datemaxITA": [getTodayDateITA()],
                "maggiorenneITA": true
            };
            formRules.rules["sesso_int" + i] = {
                "required": true
            };
            formRules.rules["cod_fiscale_int" + i] = {
                "required": true,
                "minlength": 16,
                "codicefiscale": ['cognome_int' + i, 'nome_int' + i, 'nascita_int' + i, 'sesso_int' + i],
                "unico": getFieldArray(i, "#cod_fiscale_int")
            };
            formRules.rules["mail_int" + i] = {
                "required": true,
                "email": true,
                "unico": getFieldArray(i, "#mail_int")
            };
            formRules.rules["tel_3_int" + i] = {
                "required": true,
                "prefissoPaese": ['pref_intern_3_int' + i],
                "numeroCellulare": ['telefono_3_int' + i],
                "unico": getFieldArray(i, "#tel_3_int")
            };
            formRules.rules["operatore_int" + i] = "required";
        }

        formRules.rules["cittadinanza_int" + i] = "required";
        // formRules.rules["stato_nascita_int" + i] = "required";
        formRules.rules["stato_nascita_int" + i] = {
                "required": true,
                "validaPaese":  ['#cod_fiscale_int' + i]
            };
        formRules.rules["provincia_nascita_int" + i] = "required";
        // formRules.rules["comune_nascita_int" + i] = "required";
        formRules.rules["comune_nascita_int" + i] = {
                "required": true,
                "validaComune": ['#cod_fiscale_int' + i, '#provincia_nascita_int'+ i]
            };
        /* Altre residenza fiscali */
        formRules.rules["TIN2_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 2)
            },
            "tin": true
        };
        formRules.rules["TIN3_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 3)
            },
            "tin": true
        };
        formRules.rules["TIN4_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 4)
            },
            "tin": true
        };
        formRules.rules["TIN5_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 5)
            },
            "tin": true
        };
        formRules.rules["TIN6_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 6)
            },
            "tin": true
        };
        formRules.rules["TIN7_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 7)
            },
            "tin": true
        };
        formRules.rules["TIN8_int" + i] = {
            "required": {
                "depends": checkObbligoTin(i, 8)
            },
            "tin": true
        };

        /* 2. Inserisci i dati del tuo documento di identita' */
        formRules.rules["tipo_doc_int" + i] = "required";
        formRules.rules["numero_doc_int" + i] = {
            "required": true,
            "docNum": ["#tipo_doc_int" + i, "#stato_emissione_int" + i, "#emissione_int" + i]
        };
        formRules.rules["emissione_int" + i] = {
            "required": true,
            "dateITA": true,
            "docStartDate": ["#stato_emissione_int" + i, "#tipo_doc_int" + i, "#nascita_int" + i]
        };
        formRules.rules["scadenza_int" + i] = {
            "required": true,
            "dateITA": true,
            "docEndDate": ["#stato_emissione_int" + i, "#tipo_doc_int" + i, "#emissione_int" + i, "#nascita_int" + i]
        };
        formRules.rules["stato_emissione_int" + i] = "required";
        formRules.rules["provincia_emissione_int" + i] = "required";
        formRules.rules["comune_emissione_int" + i] = "required";

        /* 3. Indica i recapiti */
        formRules.rules["provincia_int" + i] = "required";
        formRules.rules["comune_int" + i] = "required";
        formRules.rules["cap_int" + i] = {
            "required": true,
            "minlength": 5,
            "maxlength": 5
        };
        formRules.rules["ind_int" + i] = "required";
        formRules.rules["civico_int" + i] = "required";

        /* Recapito corrispondenza */
        formRules.rules["provincia_recapito_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelCorrispondenza, i)
            }
        };
        formRules.rules["comune_recapito_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelCorrispondenza, i)
            }
        };
        formRules.rules["cap_recapito_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelCorrispondenza, i)
            },
            "minlength": 5,
            "maxlength": 5
        };
        formRules.rules["ind_recapito_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelCorrispondenza, i)
            }
        };
        formRules.rules["civico_recapito_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelCorrispondenza, i)
            }
        };

        /* Recapito CAI */
        formRules.rules["provincia_domicilioCAI_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelIndirizzoCAI, i)
            }
        };
        formRules.rules["comune_domicilioCAI_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelIndirizzoCAI, i)
            }
        };
        formRules.rules["cap_domicilioCAI_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelIndirizzoCAI, i)
            },
            "minlength": 5,
            "maxlength": 5
        };
        formRules.rules["ind_domicilioCAI_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelIndirizzoCAI, i)
            }
        };
        formRules.rules["civico_domicilioCAI_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelIndirizzoCAI, i)
            }
        };

        /* Altri recapiti */
        formRules.rules["stato_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti, i)
            }
        };
        formRules.rules["ind_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti, i)
            }
        };
        formRules.rules["civico_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti, i)
            }
        };
        formRules.rules["provincia_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti2, i)
            }
        };
        formRules.rules["comune_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti, i)
            }
        };
        formRules.rules["cap_FATCA_int" + i] = {
            "required": {
                "depends": makeCheckPanelFunction(checkPanelAltriRecapiti2, i)
            },
            "minlength": 5,
            "maxlength": 5
        };
        formRules.rules["tel_int" + i] = {
            "prefissoPaese": ['prefisso_int' + i],
            "numeroNazionale": ['telefono_int' + i]
        };
        formRules.rules["tel_2_int" + i] = {
            "prefissoPaese": ['prefisso_2_int' + i],
            "numeroNazionale": ['telefono_2_int' + i]
        };

        /* 4. Sei gia' un cliente BPM? */
        formRules.rules["isbpmcliente_int" + i] = "required";

        /* 5. Informazioni aggiuntive */
        formRules.rules["come_conosciuto_int" + i] = "required";


        /** * MESSAGES ** */

        /* 1. Inserisci le tue informazioni personali */
        if (i > 1) {
            formRules.messages["nome_int" + i] = {
                "required": "Compila",
                "noNumeric": "Non &egrave; consentito utilizzare numeri"
            };
            formRules.messages["cognome_int" + i] = {
                "required": "Compila",
                "noNumeric": "Non &egrave; consentito utilizzare numeri"
            };
            formRules.messages["nascita_int" + i] = {
                "required": "Compila",
                "dateITA": "Verifica",
                "dateminITA": "Verifica",
                "datemaxITA": "La data &egrave; successiva ad oggi",
                "maggiorenneITA": "L'intestatario deve essere maggiorenne"
            };
            formRules.messages["sesso_int" + i] = {
                "required": "Seleziona"
            };
            formRules.messages["cod_fiscale_int" + i] = {
                "required": "Compila",
                "minlength": "Il codice fiscale non &egrave; corretto",
                "codicefiscale": "Il codice fiscale non &egrave; corretto",
                "unico": "Indica un codice fiscale diverso dagli altri intestatari"
            };
            formRules.messages["mail_int" + i] = {
                "required": "Compila",
                "email": "Verifica",
                "unico": "Indica un indirizzo email diverso dagli altri intestatari"
            };
            formRules.messages["tel_3_int" + i] = {
                "required": "Compila",
                "prefissoPaese": "Verifica",
                "numeroCellulare": "Verifica",
                "unico": "Indica un numero cellulare diverso dagli altri intestatari"
            };
            formRules.messages["operatore_int" + i] = "Seleziona";
        }

        formRules.messages["cittadinanza_int" + i] = "Seleziona";
        //formRules.messages["stato_nascita_int" + i] = "Seleziona";
        formRules.messages["stato_nascita_int" + i] = {
                "required": "Seleziona",
                "validaPaese": "Verifica"
            };
        formRules.messages["provincia_nascita_int" + i] = "Seleziona";
        //formRules.messages["comune_nascita_int" + i] = "Seleziona";
        formRules.messages["comune_nascita_int" + i] = {
                "required": "Seleziona",
                "validaComune": "Verifica"
            };
        
        /* Altre residenza fiscali */
        formRules.messages["TIN2_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN3_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN4_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN5_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN6_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN7_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };
        formRules.messages["TIN8_int" + i] = {
            "required": "Compila",
            "tin": "Verifica"
        };

        /* 2. Inserisci i dati del tuo documento di identita' */
        formRules.messages["tipo_doc_int" + i] = "Seleziona";
        formRules.messages["numero_doc_int" + i] = {
            "required": "Compila"
        };
        formRules.messages["emissione_int" + i] = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages["scadenza_int" + i] = {
            "required": "Compila",
            "dateITA": "Verifica"
        };
        formRules.messages["stato_emissione_int" + i] = "Seleziona";
        formRules.messages["provincia_emissione_int" + i] = "Seleziona";
        formRules.messages["comune_emissione_int" + i] = "Seleziona";

        /* 3. Indica i recapiti */
        formRules.messages["provincia_int" + i] = "Seleziona";
        formRules.messages["comune_int" + i] = "Seleziona";
        formRules.messages["cap_int" + i] = {
            "required": "Compila",
            "minlength": "Verifica",
            "maxlength": "Verifica"
        };
        formRules.messages["ind_int" + i] = "Compila";
        formRules.messages["civico_int" + i] = "Compila";

        /* Recapito corrispondenza */
        formRules.messages["provincia_recapito_int" + i] = "Seleziona";
        formRules.messages["comune_recapito_int" + i] = "Seleziona";
        formRules.messages["cap_recapito_int" + i] = {
            "required": "Compila",
            "minlength": "Verifica",
            "maxlength": "Verifica"
        };
        formRules.messages["ind_recapito_int" + i] = "Compila";
        formRules.messages["civico_recapito_int" + i] = "Compila";

        /* Recapito CAI */
        formRules.messages["provincia_domicilioCAI_int" + i] = "Seleziona";
        formRules.messages["comune_domicilioCAI_int" + i] = "Seleziona";
        formRules.messages["cap_domicilioCAI_int" + i] = {
            "required": "Compila",
            "minlength": "Verifica",
            "maxlength": "Verifica"
        };
        formRules.messages["ind_domicilioCAI_int" + i] = "Compila";
        formRules.messages["civico_domicilioCAI_int" + i] = "Compila";

        /* Altri recapiti */
        formRules.messages["stato_FATCA_int" + i] = "Seleziona";
        formRules.messages["ind_FATCA_int" + i] = "Compila";
        formRules.messages["civico_FATCA_int" + i] = "Compila";
        formRules.messages["provincia_FATCA_int" + i] = "Seleziona";
        formRules.messages["comune_FATCA_int" + i] = "Seleziona";
        formRules.messages["cap_FATCA_int" + i] = {
            "required": "Compila",
            "minlength": "Verifica",
            "maxlength": "Verifica"
        };
        formRules.messages["tel_int" + i] = {
            "prefissoPaese": "Verifica",
            "numeroNazionale": "Verifica"
        };
        formRules.messages["tel_2_int" + i] = {
            "prefissoPaese": "Verifica",
            "numeroNazionale": "Verifica"
        };

        /* 4. Sei gia' un cliente BPM? */
        formRules.messages["isbpmcliente_int" + i] = "Seleziona";

        /* 5. Informazioni aggiuntive */
        formRules.messages["come_conosciuto_int" + i] = "Seleziona";

        // disableSelectByNation(["#stato_nascita_int" + i, "#provincia_nascita_int" + i, "#comune_nascita_int" + i]);
    }

    if (!mono) {
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
    }

    formValidator = formEl.validate(formRules);

    // FATCA
    var template = $.validator.format($.trim($("#templateFatca").val())),
        numArr = ["seconda", "terza", "quarta"],
        resArr = [];

    $('#sel_residenzaFiscale2_int1 option').each(function() {
        var val = $(this).val();
        if (val !== '') {
            resArr.push(val);
        }
    });

    function addFatcaRow(numTit, numRes, fatcaContainer) {
        var fatcaRow = $(template(numTit, numRes)),
            selectedCountries = fatcaContainer.find('.fatcaFieldButton select').map(function() {
                return $(this).val();
            }).not([""]),
            lblTooltip, selectEl;
        lblTooltip = numArr[numRes - 2].replace(/a$/, "o");
        lblTooltip = lblTooltip[0].toUpperCase() + lblTooltip.slice(1);
        lblTooltip += " paese di residenza fiscale*";
        // non si possono aggiungere altre residenze oltre la quarta
        if (numRes === 4) {
            fatcaRow.find('.add').closest('.form-group').remove();
        }
        fatcaRow.find('.labelTooltip').text(lblTooltip);
        fatcaRow.find('.labelCounterMeno').text(numArr[numRes - 2]);
        fatcaRow.find('.labelCounterPiu').text(numArr[numRes - 1]);
        selectEl = fatcaRow.find('.fatcaFieldButton select');
        $.each($(resArr).not(selectedCountries), function(index, item) {
            var valArr = item.split('|');
            selectEl.append($('<option>').val(item).text(valArr[1]));
        });
        fatcaRow.appendTo(fatcaContainer);
        initTooltip();
    }

    setFormGroupCell(formEl, formValidator);
    setFormGroupDate(formEl, formValidator);
    setFormGroupAddress(formEl, formValidator);

    $('#cod_fiscale_int2, #cod_fiscale_int3').on('change focus blur', function () {
        var cfEl = $(this);
        cfEl.val(cfEl.val().toUpperCase());
    }).change();
    $('#cod_fiscale_int2, #nome_int2, #cognome_int2, #cod_fiscale_int3, #nome_int3, #cognome_int3').addClass('ucl')
    .on('change focus blur', function () {
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

    $('.fatcaContainer').each(function() {
        var fatcaContainer = $(this),
            numTit = 1 * fatcaContainer.attr('data-tit');

        fatcaContainer.on('click', '.add', function() {
            var el = $(this),
                nextNumRes, fatcaBox,
                nextFatcaBox, fatcaFormGroup;
            if (!el.hasClass('disabled')) {
                fatcaBox = el.closest('.fatcaBox');
                nextNumRes = 1 + parseInt(fatcaBox.attr('data-res'), 10);
                if (nextNumRes === 2) {
                    fatcaBox.hide();
                    nextFatcaBox = fatcaBox.nextAll('.fatcaBox').first();
                    nextFatcaBox.find('select').val('').prop('disabled', false);
                    fatcaFormGroup = nextFatcaBox.find('.textinput').closest('.form-group');
                    nextFatcaBox.find('.textinput').remove();
                    fatcaFormGroup.append('<input type="text" name="TIN2_int' + numTit + '" id="TIN2_int' + numTit + '" class="textinput form-control" maxlength="20">').val('').prop('disabled', true);
                    nextFatcaBox.find('select').prop('disabled', false);
                    nextFatcaBox.show();
                } else {
                    fatcaBox.find('select').prop('disabled', true);
                    fatcaBox.find('.fatcaLinkButton').hide();
                    addFatcaRow(numTit, nextNumRes, fatcaContainer);
                }
            }
        });

        fatcaContainer.on('click', '.remove', function() {
            var el = $(this),
                numRes,
                fatcaBox = el.closest('.fatcaBox'),
                prevFatcaBox = fatcaBox.prevAll('.fatcaBox').first();
            numRes = parseInt(fatcaBox.attr('data-res'), 10);
            
            if (numRes === 2) {
                fatcaBox.hide();
                $('#TIN2_int' + numTit).unmask().val('').attr('placeholder', '').prop('disabled', true);
                $('#sel_residenzaFiscale2_int' + numTit).val('').prop('disabled', true);
                $('#residenzaFiscale2_int' + numTit).val('');
                prevFatcaBox.show();
            } else {
                prevFatcaBox.find('.fatcaLinkButton').show();
                prevFatcaBox.find('select').prop('disabled', false);
                fatcaBox.remove();
            }
        });

        fatcaContainer.on('change', 'select', function() {
            var el = $(this),
                val = el.val(),
                tinInput = $('#TIN' + el.attr('id').replace('sel_residenzaFiscale', '')),
                addBtn = el.closest('.fatcaBox').find('.add'),
                valArr;
            $('#' + el.attr('id').replace('sel_', '')).val(val);
            if (typeof val !== 'string' || val === '') {
                tinInput.unmask().val('').attr('placeholder', '').prop('disabled', true).removeClass('tinUsa');
                addBtn.addClass('disabled');
            } else {
                valArr = val.split('|');
                if (valArr[2] === 'N') {
                    tinInput.unmask().val('Non previsto').attr('placeholder', '').prop('disabled', true).removeClass('tinUsa');
                } else if (valArr[0] === '69' || valArr[0] === '701') {
                    // definisco tutti i caratteri alfanumerici e simboli della tastiera
                    tinInput.mask("000-00-0000", {
                        "placeholder": "_________"
                    }).val('').prop('disabled', false).addClass('tinUsa');
                } else {
                    tinInput.unmask().val('').attr('placeholder', '').prop('disabled', false).removeClass('tinUsa');
                }
                addBtn.removeClass('disabled');
            }
            if (tinInput.hasClass('valid') || tinInput.hasClass('error')) {
                formValidator.element(tinInput);
            }
        });

        fatcaContainer.on('click', '.lbl-file-group', function() {
            var fileGroup = $(this).closest('.form-group').find('.btn-file-group');
            if (fileGroup.is(':visible')) {
                fileGroup.find('input').val('');
                fileGroup.hide();
            } else {
                fileGroup.show();
            }
        });

        fatcaContainer.on('change', '.btn-file :file', btnFileLoadFunc);
    });

    function recapUpdate (recapBox, suffix, hasCap, isFATCA) {
        if (isFATCA) {
            recapBox.on('change', 'select.indStato', function() {
                ProvCom.checkStatoFATCA('stato' + suffix, 'provincia' + suffix, 'comune' + suffix, 'cap' + suffix);
                resetElementError('#provincia' + suffix);
                resetElementError('#comune' + suffix);
                resetElementError('#cap' + suffix);
            });
        } else {
            recapBox.on('change', 'select.indStato', function() {
                if (hasCap) {
                    ProvCom.checkStato('stato' + suffix, 'provincia' + suffix, 'comune' + suffix, 'cap' + suffix);
                    resetElementError('#cap' + suffix);
                } else {
                    ProvCom.checkStato('stato' + suffix, 'provincia' + suffix, 'comune' + suffix);
                }
                resetElementError('#provincia' + suffix);
                resetElementError('#comune' + suffix);
            });
        }
        recapBox.on('change', 'select.indProv', function() {
            if (hasCap) {
                ProvCom.updateComuni('comune' + suffix, 'provincia' + suffix, 'cap' + suffix);
                resetElementError('#cap' + suffix);
            } else {
                ProvCom.updateComuni('comune' + suffix, 'provincia' + suffix);
            }
            resetElementError('#comune' + suffix);
        });
        if (hasCap) {
            recapBox.on('change', 'select.indCom', function() {
                ProvCom.updateCap('cap' + suffix, 'comune' + suffix);
                resetElementError('#cap' + suffix);
            });
        }
    }

    $('.recapPrinc').each(function() {
        var recapBox = $(this),
            suffix = '_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, true, false);
    });

    $('.recapNascita').each(function() {
        var recapBox = $(this),
            suffix = '_nascita_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, false, false);
    });

    $('.recapRilascio').each(function() {
        var recapBox = $(this),
            suffix = '_emissione_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, false, false);
    });

    $('.recapCorr').each(function() {
        var recapBox = $(this),
            suffix = '_recapito_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, true, false);
    });

    $('.recapDom').each(function() {
        var recapBox = $(this),
            suffix = '_domicilioCAI_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, true, false);
    });

    $('.recapAltro').each(function() {
        var recapBox = $(this),
            suffix = '_FATCA_int' + recapBox.attr('data-tit');
        recapUpdate(recapBox, suffix, true, true);
    });
});
