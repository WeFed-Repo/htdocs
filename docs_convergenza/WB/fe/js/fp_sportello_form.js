/* globals $, cleanImportInt, ttSet, sportello, setHasErrors, resetHasErrors, getDateFromString, dateDiffInDays */
/* exported resetPin2, resetForm, check */

/* Funzione reset Pin 2 */
var resetPin2 = function (pos1, pos2, numcod) {
        "use strict";

        //region DICHIARAZIONE VARIABILI
        var x,
            //Raccoglie tutti i pin2
            allP2 = $(".formGeneric.pin2"),
            // Assembla il pin2
            pinInp = allP2.find(".pinInput").html("");
        //endregion

        //region OPERAZIONI SUL PIN32
        allP2.each(function () {
            var p2Item = $(this);
            if (p2Item.hasClass('contatto')) {
                p2Item.find(".col-sm-12:first").html("Inserisci la <strong>" + pos1 + "&deg;</strong> e la <strong>" + pos2 + "&deg;</strong> cifra del <strong>codice " + numcod + "</strong>");
            } else {
                p2Item.find(".col-sm-12:first").html("Inserisci la <strong>" + pos1 + "&deg;</strong> e la <strong>" + pos2 + "&deg;</strong> cifra del <strong>codice " + numcod + "</strong>");
            }
        });

        for (x = 1; x <= 4; x++) {
            if (x === pos1 || x === pos2) {
                pinInp.append($("<input type=\"password\" maxlength=\"1\">").attr({ "name": x.toString() }).addClass("inppass2").keyup(cleanImportInt));
            } else {
                pinInp.append($("<div>").addClass("asterisco"));
            }
        }

        $('.inppass2').keyup(function () {
            if ($(this).val().length === 1) {
                $(this).nextAll('.inppass2').focus();
            }
        });
        ttSet(pinInp);
        //endregion
    },
    // Svuota tutti i campi e resetta gli errori, formArr e' un array jQuery di form
    resetForm = function (formArr) {
        "use strict";

        //region DICHIARAZIONE VARIABILI
        var cbxArr = formArr.find('input[type=checkbox]').removeAttr('checked'),
            radioArr = formArr.find('input[type=radio]').removeAttr('checked');
        //endregion

        //region SVUOTAMENTO DEI CAMPI
        formArr.find('input').not(cbxArr).not(radioArr).val('');
        formArr.find('textarea').html('');
        formArr.find('select').prop('selectedIndex', 0);
        formArr.each(function () {
            resetHasErrors($(this));
            $(window).trigger('resize');
        });
        //endregion
    },
    getClassPrefix = function (prefix) {
        return prefix.replace('#', '.') + 'Contatto';
    },
    getOpsBox = function () {
        return $('.spPersonOpsBox.open');
    },
    setErrorsWithResize = function (errors, $form) {
        setHasErrors(errors, $form);
        setTimeout(function () {
            $(window).trigger('resize');
        }, 50);
    },
    /* CHECKING ERRORI */
    check = {
        //region MESSAGGI DI ERRORE
        msgArr: {
            invalidImport: 'Inserire solo cifre e virgola per i decimali'
        },
        //endregion

        //region CONTROLLI SUI CAMPI
        isHidden: function (el) {
            "use strict";

            return (el.css("display") === "none");
        },
        isEmpty: function (el) {
            "use strict";

            return ($.trim(el.val()) === "");
        },
        isDefaultMsg: function (el, defaultMsg) {
            "use strict";

            return (el.val() === defaultMsg);
        },
        isNotaNumber: function (el) {
            "use strict";

            return isNaN(el);
        },
        isValidImport: function (val) {
            "use strict";

            return (/^\d+(,\d+)?$/).test(val);
        },
        isSepa: function (iban) {
            "use strict";

            var paesiSepa = ["AT", "BE", "BG", "CY", "DK", "IE", "EE", "FI", "FR", "DE", "HR", "GI", "GR", "IS", "IT", "LV", "LI", "LT", "LU", "MT", "MC", "NO", "NL", "PL", "PT", "GB", "CZ", "RO", "SK", "SI", "SM", "ES", "SE", "CH", "HU"];
            return ($.inArray(iban.substr(0, 2).toUpperCase(), paesiSepa) !== -1);
        },
        numeroTel: function () {
            "use strict";

            var errors = [],
                $cellulareForm = $('#cellulareForm');

            if (this.isEmpty($("#inputBenCellulare")) && this.isEmpty($("#inputBenCellulareInput"))) {
                errors.push({ field: "#inputBenCellulareInput", text: "Occorre inserire il numero del cellulare" });
            }

            setErrorsWithResize(errors, $cellulareForm);
            return (!errors.length);
        },
        smash: function (prefix, isContatto) {
            "use strict";

            var errors = [],
                classPrefix, $opsBox, $form2input, $form;

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $form2input = $opsBox.find(classPrefix + 'Page2InputSmash').eq(0);
                $form = $opsBox.find(classPrefix + 'Page2FormSmash');
            } else {
                $form2input = $(prefix + 'Page2InputSmash').eq(0);
                $form = $(prefix + 'Page2FormSmash');
            }

            if (this.isEmpty($form2input) || $form2input.val().length !== 6) {
                errors.push({ field: $form2input, text: "Codice OTP non valido" });
            }
            setErrorsWithResize(errors, $form);
            return (!errors.length);
        },
        token: function (prefix, isContatto) {
            "use strict";

            var errors = [],
                appSuffix = sportello.isApp() ? 'App' : 'Token',
                classPrefix, $opsBox, $form2input, $form;

            if (isContatto) {
                classPrefix = getClassPrefix(prefix);
                $opsBox = getOpsBox();
                $form2input = $opsBox.find(classPrefix + 'Page2Input' + appSuffix).eq(0);
                $form = $opsBox.find(classPrefix + 'Page2Form' + appSuffix);
            } else {
                $form2input = $(prefix + 'Page2Input' + appSuffix).eq(0);
                $form = $(prefix + 'Page2Form' + appSuffix);
            }
            if (this.isEmpty($form2input) || $form2input.val().length !== 6) {
                errors.push({ field: $form2input, text: "Codice OTP non valido" });
            }
            setErrorsWithResize(errors, $form);
            return (!errors.length);
        },
        bonifico: function (isContatto) {
            "use strict";

            // Check bonifico
            var errors = [],
                iban = sportello.getIBAN(),
                importo, inputIban, $opsBox, $bonificoForm, $inputImporto, $inputCausale;

            if (!isContatto) {
                $bonificoForm = $('#bonificoForm');
                $inputImporto = $('#inputImporto');
                $inputCausale = $('#inputCausale');
                if (this.isEmpty($("#inputBen")) && this.isEmpty($("#inputBenInput"))) {
                    errors.push({ field: "#inputBenInput", text: "occorre specificare un beneficiario" });
                }
                inputIban = $('#inputIBAN');
                inputIban = inputIban.is(':visible') ? inputIban : $('#outputIBAN');
                if (iban === '' || (iban.substr(0, 2) === 'IT' && iban.length !== 27)) {
                    errors.push({ field: inputIban, text: "occorre specificare un codice IBAN valido" });
                } else if (iban.substr(0, 2) === 'IT' && iban.substr(5, 5) === '03402') {
                    errors.push({
                        field: inputIban,
                        text: "ATTENZIONE:<br>" + "A seguito della fusione per incorporazione di Webank in Banca Popolare di Milano, il codice Iban &egrave; cambiato.<br>" + "Verifica e inserisci il nuovo Iban."
                    });
                }
                if (this.isEmpty($("#inputNazione"))) {
                    errors.push({ field: "#inputNazione", text: "occorre specificare una residenza" });
                }
                if (this.isEmpty($("#datepickerBonifico"))) {
                    errors.push({ field: "#datepickerBonifico", text: "occorre specificare una data valida" });
                }
            } else {
                $opsBox = getOpsBox();
                $bonificoForm = $opsBox.find('.bonificoContattoForm');
                $inputImporto = $bonificoForm.find('.inputImportoContatto');
                $inputCausale = $bonificoForm.find('.inputCausaleContatto');
            }
            importo = $inputImporto.val();
            if (!this.isValidImport(importo)) {
                errors.push({ field: $inputImporto, text: this.msgArr.invalidImport });
            }
            if (this.isEmpty($inputCausale)) {
                errors.push({ field: $inputCausale, text: "occorre specificare una causale" });
            }
            setErrorsWithResize(errors, $bonificoForm);
            if (isContatto && errors.length) {
                $(errors[0].field).trigger('focus');
            }
            return (!errors.length);
        },
        bonificoTitolare: function (isContatto) {
            "use strict";

            // Check bonifico
            var importo, $opsBox, $bonificoForm, $inputImporto,
                res = false;

            if ($('#titolareEffettivo').length) {
                if (!isContatto) {
                    $inputImporto = $('#inputImporto');
                } else {
                    $opsBox = getOpsBox();
                    $bonificoForm = $opsBox.find('.bonificoContattoForm');
                    $inputImporto = $bonificoForm.find('.inputImportoContatto');
                }
                importo = $inputImporto.val().replace(',', '.') * 1;
                res = (importo >= 5000);
            }

            return res;
        },
        prepagata: function (isContatto) {
            "use strict";

            // Check ricarica carta jeans
            var errors = [],
                importo,
                numeroCarta = sportello.getInputPrepagata()[0],
                $opsBox, $inputTypePrepagata, $prepagataForm, $inputImporto;
            if (!isContatto) {
                $prepagataForm = $('#prepagataForm');
                $inputImporto = $prepagataForm.find('#inputImportoPrepagata');
                if (this.isEmpty($("#inputBenPrepagata")) && this.isEmpty($("#inputBenPrepagataInput"))) {
                    errors.push({ field: "#inputBenPrepagataInput", text: "Occorre inserire un numero di carta" });
                } else {
                    if (isNaN(numeroCarta)) {
                        errors.push({
                            field: "#inputNuovoBenPrepagata",
                            text: "Inserire un numero nel campo Numero carta"
                        });
                    } else if (!isNaN(numeroCarta) && numeroCarta.length !== 16) {
                        errors.push({
                            field: "#inputNuovoBenPrepagata",
                            text: "Il campo 'Numero carta' deve essere di 16 caratteri"
                        });
                    }
                }
                $inputTypePrepagata = $('#inputTypePrepagata');
                if ($inputTypePrepagata.is(':visible') && $inputTypePrepagata.val() === '') {
                    errors.push({ field: "#inputTypePrepagata", text: "Occorre scegliere il tipo di carta" });
                }
            } else {
                $opsBox = getOpsBox();
                $prepagataForm = $opsBox.find('.prepagataContattoForm');
                $inputImporto = $prepagataForm.find('.inputImportoCjContatto');
            }
            importo = $inputImporto.val();
            if (!this.isValidImport(importo)) {
                errors.push({ field: $inputImporto, text: this.msgArr.invalidImport });
            }
            setErrorsWithResize(errors, $prepagataForm);
            if (isContatto && errors.length) {
                $(errors[0].field).trigger('focus');
            }
            return (!errors.length);
        },
        cellulare: function (isContatto) {
            "use strict";

            var errors = [],
                $opsBox, $inputOperCellulare, $cellulareForm, $inputImporto;

            if (!isContatto) {
                $cellulareForm = $('#cellulareForm');
                $inputImporto = $cellulareForm.find('#inputImportoCellulare');
                if (this.isEmpty($("#inputBenCellulare")) && this.isEmpty($("#inputBenCellulareInput"))) {
                    errors.push({ field: "#inputBenCellulareInput", text: "Occorre inserire il numero del cellulare" });
                }
                if ($inputImporto.prop('disabled') || $inputImporto.val() === '0') {
                    errors.push({ field: $inputImporto, text: "Occorre scegliere un importo" });
                }
                $inputOperCellulare = $('#inputOperCellulare');
                if (!$inputOperCellulare.prop('disabled') && !$inputOperCellulare.val()) {
                    errors.push({ field: $inputOperCellulare, text: "Occorre scegliere un operatore" });
                }
            } else {
                $opsBox = getOpsBox();
                $cellulareForm = $opsBox.find('.cellulareContattoForm');
                $inputImporto = $cellulareForm.find('.inputImportoCellContatto');
            }
            if (this.isDefaultMsg($inputImporto, "")) {
                errors.push({ field: $inputImporto, text: "Occorre scegliere un importo" });
            }
            setErrorsWithResize(errors, $cellulareForm);
            return (!errors.length);
        },
        bollettino: function () {
            "use strict";

            var errors = [],
                $inputBenBollettino = $("#inputBenBollettino"),
                contoAccredito = $inputBenBollettino.val(),
                importo = $("#inputImportoBollettino").val(),
                causaleBollettino = $("#causaleBollettino"),
                dataInserita = getDateFromString($('#datepickerBollettino').val()),
                codiceBoll = $("#codiceBoll"),
                diff;
            if (this.isEmpty($inputBenBollettino)) {
                errors.push({ field: "#inputBenBollettino", text: "inserire il conto corrente di accredito" });
            }
            if (!this.isEmpty($inputBenBollettino)) {
                if (isNaN(contoAccredito) || contoAccredito.length < 4) {
                    errors.push({
                        field: "#inputBenBollettino",
                        text: "Il campo 'C/C POSTALE DI ACCREDITO' deve contenere almeno 4 caratteri numerici"
                    });
                }
            }
            if (this.isValidImport(importo)) {
                importo = parseFloat(importo.replace(',', '.'));
                if (this.isNotaNumber(importo) || importo < 0) {
                    errors.push({
                        field: "#inputImportoBollettino",
                        text: "occorre specificare un importo bollettino valido"
                    });
                }
            } else {
                errors.push({ field: "#inputImportoBollettino", text: this.msgArr.invalidImport });
            }
            if (!dataInserita) {
                errors.push({ field: "#datepickerBollettino", text: "occorre specificare una data valida" });
            } else {
                diff = dateDiffInDays(new Date(), dataInserita);
                if (diff < 0) {
                    errors.push({
                        field: "#datepickerBollettino",
                        text: "la data non pu&ograve; essere precedente ad oggi"
                    });
                } else if (diff > 364) {
                    errors.push({
                        field: "#datepickerBollettino",
                        text: "la data non pu&ograve; essere oltre un anno da oggi"
                    });
                }
            }
            if (!this.isHidden($('#boxBollettinoPre'))) {
                if (codiceBoll.val().length !== 18) {
                    errors.push({ field: "#codiceBoll", text: "il codice bollettino deve essere di 18 caratteri" });
                }
            }
            if (!this.isHidden($('#boxBollettinoWhite'))) {
                if (this.isEmpty($("#benBollettino"))) {
                    errors.push({ field: "#benBollettino", text: "occorre inserire l'intestatario" });
                }
                if (!causaleBollettino.prop('disabled') && this.isEmpty(causaleBollettino)) {
                    errors.push({ field: "#causaleBollettino", text: "occorre inserire la causale" });
                }
            }
            setErrorsWithResize(errors, "#bollettinoForm");
            return (!errors.length);
        },
        bollettinoBis: function () {
            "use strict";

            var errors = [],
                capEsecutore = $("#capEsecutore"),
                provinciaEsecutore = $("#provinciaEsecutore");
            if (this.isEmpty($("#inputNuovoEseBollettino"))) {
                errors.push({ field: "#inputNuovoEseBollettino", text: "occorre inserire l'esecutore del pagamento" });
            }
            if (this.isEmpty($("#residenzaEsecutore"))) {
                errors.push({ field: "#residenzaEsecutore", text: "occorre inserire l'indirizzo di residenza" });
            }
            if (this.isEmpty($("#localitaEsecutore"))) {
                errors.push({ field: "#localitaEsecutore", text: "occorre inserire la localit&agrave;" });
            }
            if (provinciaEsecutore.val() === '0') {
                errors.push({ field: "#provinciaEsecutore", text: "occorre scegliere la provincia" });
            }
            if (this.isEmpty(capEsecutore)) {
                errors.push({ field: "#capEsecutore", text: "inserire il cap" });
            } else {
                if (isNaN(capEsecutore.val()) || capEsecutore.val().length !== 5) {
                    errors.push({ field: "#capEsecutore", text: "inserire un cap valido" });
                }
            }
            setErrorsWithResize(errors, "#bollettinoFormBis");
            return (!errors.length);
        },
        bollo: function () {
            "use strict";

            // Check bollo auto
            var errors = [];
            // Tipo veicolo
            if ($("#inputVeicolo").val() === "") {
                errors.push({ field: "#inputVeicolo", text: "Selezionare il tipo di veicolo" });
            }
            // Regione
            if ($("#inputRegione").val() === "") {
                errors.push({ field: "#inputRegione", text: "Selezionare la regione" });
            }
            // Targa
            if ($("#inputTarga").val() === "") {
                errors.push({ field: "#inputTarga", text: "Inserire il numero di targa" });
            }
            setErrorsWithResize(errors, "#bolloForm");
            return (!errors.length);
        },
        atm: function () {
            "use strict";

            // Check ricarica ATM
            var errors = [],
                inputBenAtm = $('#inputBenAtm'),
                inputBenAtmInput = $('#inputBenAtmInput'),
                inputIntestAtm = $('#inputIntestAtm'),
                attTotemReadInput = $('#attTotemReadInput'),
                isSelected = inputBenAtm.comboboxPlus('isSelected');

            if (!isSelected) {
                if (this.isEmpty(inputBenAtmInput)) {
                    errors.push({ field: inputBenAtm, text: "Occorre inserire il numero di tessera da ricaricare" });
                }
                if (isNaN(inputBenAtmInput.val())) {
                    errors.push({ field: inputBenAtm, text: "Inserire un numero nel campo Numero tessera" });
                }
                if (this.isEmpty(inputIntestAtm)) {
                    errors.push({ field: inputIntestAtm, text: "Occorre inserire l'intestatario" });
                }
            }

            if (!attTotemReadInput.is(':checked')) {
                errors.push({ field: attTotemReadInput, text: "Occorre confermare" });
            }
            setErrorsWithResize(errors, "#atmForm");
            return (!errors.length);
        },
        atmBis: function () {
            "use strict";

            // Check ricarica ATM
            var errors = [];
            if ($("#WrapperInnerAbbATM input[name=abbonamento]:checked").length === 0) {
                errors.push({ field: "#WrapperInnerAbbATM", text: "Seleziona un tipo di abbonamento" });
            }
            setErrorsWithResize(errors, "#WrapperInnerAbbATM");
            $('#WrapperInnerAbbATM').trigger('click');
            return (!errors.length);
        },
        mavrav: function () {
            "use strict";

            // Check MAV e RAV
            var errors = [],
                codiceMavrav = $('#codiceMavrav'),
                codiceMavravVal = codiceMavrav.val(),
                importoMavravVal = $('#inputImportoMavrav').val(),
                dataInseritaMavrav = getDateFromString($('#datepickerMavRav').val()),
                dataMinMavrav = getDateFromString(sportello.getPrimaDataMavRav());
            //codice mav e rav
            if (isNaN(codiceMavravVal) || codiceMavravVal.length < 17) {
                errors.push({
                    field: "#codiceMavrav",
                    text: "Inserisci il codice identificativo di 17 cifre, senza lo 0 iniziale,  che trovi sul bollettino."
                });
            }
            //importo
            if (this.isValidImport(importoMavravVal)) {
                importoMavravVal = parseFloat(importoMavravVal.replace(',', '.'));
                if (this.isNotaNumber(importoMavravVal) || importoMavravVal <= 0) {
                    errors.push({ field: '#inputImportoMavrav', text: "occorre specificare un importo valido" });
                }
            } else {
                errors.push({ field: '#inputImportoMavrav', text: "Inserisci l'importo" });
            }
            //data inserita
            if (!dataInseritaMavrav) {
                errors.push({ field: "#datepickerMavRav", text: "occorre specificare una data valida" });
            } else if (dataMinMavrav && dataMinMavrav > dataInseritaMavrav) {
                errors.push({
                    field: "#datepickerMavRav",
                    text: "la data non può essere precedente al " + dataMinMavrav.format('dd/mm/yyyy')
                });
            }
            setErrorsWithResize(errors, "#mavravForm");
            return (!errors.length);
        },
        giroconto: function () {
            "use strict";

            // Check giroconto
            var errors = [],
                importo = $("#inputImportoGiro").val();
            if (this.isValidImport(importo)) {
                importo = parseFloat(importo.replace(',', '.'));
                if (this.isNotaNumber(importo)) {
                    errors.push({ field: "#inputImportoGiro", text: "occorre specificare un importo valido" });
                }
            } else {
                errors.push({ field: "#inputImportoGiro", text: this.msgArr.invalidImport });
            }
            if (this.isEmpty($("#inputCausaleGiro"))) {
                errors.push({ field: "#inputCausaleGiro", text: "occorre specificare una causale" });
            }
            setErrorsWithResize(errors, "#girocontoForm");
            return (!errors.length);
        },
        addContatto: function () {
            "use strict";
            // Check giroconto
            var errors = [];
            if ($("#selectAddContatto").val() === '') {
                errors.push({ field: "#selectAddContatto", text: "Occorre selezionare un contatto" });
            }
            setErrorsWithResize(errors, "#formAddContatto");
            return (!errors.length);
        }
        //endregion
    };