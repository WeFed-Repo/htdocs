    <div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>
    <div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>

    <!-- from waiting panel --->



<div id="response-box">
</div>
<form id="formExport" method="POST"></form>
<script type="text/javascript">
    var popupWidth;

    function onSuccessPopUp(data, isJson) {
        if (!isJson) {
            var popupContent = $('#dialogpopup');

            popupContent.dialog("option", "width", popupWidth);
            popupContent.html(data);

            FormatYouBizDom(popupContent, true);

            popupContent.dialog("open");
        }
    }

    function onSuccess(data, isJson) {
        //debugger;
        if (!isJson) {
            // Fixed Internet Explorer 9 not rendering table cells properly - http://stackoverflow.com/a/14615670
            if (jQuery.browser && jQuery.browser.msie && jQuery.browser.version === '9.0') {
                data = data.replace(/>\s+(?=<\/?(t|c)[hardfob])/gm, '>');
            }

            var dataContent = $("#MainSection");

            dataContent.css('visibility', 'hidden');
            dataContent.html(data);
            FormatYouBizDom(dataContent, false);
            $("html, body").animate({ scrollTop: 0 }, 0);
            dataContent.css('visibility', 'visible');
        }
    }

    function onError(hasErrorMessage, errorMessage, jqXHR, data, textStatus, errorThrown) {
        //debugger;
        var errorHeader = jqXHR.getResponseHeader("ErrorHeader");

        if (!errorHeader) {
            return false;
        }

        errorHeader = $.parseJSON(errorHeader);
        var content = errorHeader.Content;
        var targetType = errorHeader.TargetType;
        var actionType = errorHeader.ActionType;

        // Self
        if (targetType == 0) {
            switch (actionType) {
                // Show
                case 0:
                    $('#dialogerror').html(content);
                    $('#dialogerror').dialog("open");
                    break;

                    // Redirect
                default:
                    $('<iframe />', {
                        id: 'errorPanel',
                        src: content
                    })
                    .prependTo("#dialogerror");
                    $('#dialogerror').dialog("open");
            }
        }

        // Document
        if (targetType == 1) {

            switch (actionType) {
                // Show
                case 0:
                    $('<div />', {
                        id: 'errorPanel',
                        text: content
                    })
                    .prependTo("body");
                    break;
                    // Redirect
                default:
                    document.location.href = content;
            }
        }

        // Alert
        if (targetType == 2) {

            switch (actionType) {
                // Show
                case 0:
                    alert(content);
                    break;

            }
        }

        return true;
    }

    function communicationSendObject(action, objectToSend, onSuccessCall) {
        //debugger;
        $("#dialogmessage").anchisecommunication("connectjson",
            {
                url: action,
                data: objectToSend,
                successHandler: onSuccessCall,
                errorHandler: onError
            });
    }

    function communicationLoad(action, objectToSend, usePopup, popupSize) {
        //debugger;
        popupSize = popupSize || 626;

        popupWidth = popupSize;
        var actionSuccess = onSuccess;
        if (usePopup) {
            actionSuccess = onSuccessPopUp;
        }
        $("#dialogmessage").anchisecommunication("connectjson",
        {
            url: action,
            data: objectToSend,
            successHandler: actionSuccess,
            errorHandler: onError,
            popup: usePopup
        });
    }

    $(document).ready(function () {
        $("#dialogmessage").anchisecommunication(
            {
                dialogClass: "communication-dialog",
                // title: 'YouBusiness Web',
                //spinnerDelay: 0,
                autoOpen: false,
                modal: true,
                width: "auto",
                height: "auto",
                connect: {
                    url: '',
                    successHandler: $.noop,
                    errorHandler: onError
                }
            });

        $("#dialogpopup").dialog(
            {
                dialogClass: "popup-dialog",
                autoOpen: false,
                modal: true,
                resizable: true,
                width: 626, //"auto",
                height: "auto",
                closeOnEscape: true,
                buttons: [{ text: 'Chiudi', click: function () { $(this).dialog("close"); } }]
            });

        $("#dialogerror").dialog(
            {
                title: 'YouBusiness Web',
                spinnerDelay: 0,
                autoOpen: false,
                modal: true,
                resizable: true,
                minHeight: 480,
                minWidth: 640,
                closeOnEscape: true,
                dialogClass: "popupClass",
                buttons: [{ text: 'Chiudi', click: function () { $(this).dialog("close"); } }]
            });
    });
</script>
    

<iframe name="exportFrame" width="1px" height="1px" style="display: none"></iframe>

<script type="text/javascript">
    var rootViewModel = {
        currentSection: '',
        validationRules: [],
        addValidationRule: function (element, validationFunction) {
            validationRules.push(validationFunction);
        },
        clearValidationRules: function () {
            validationRules = [];
        },
        executeValidationRules: function () {
            validationHandler.cumulative(true);
            $(validationRules).each(function (index, fn) {
                fn();
            });
            var isValid = validationHandler.isValid();
            validationHandler.cumulative(false);
            return isValid;
        }
    };

    var validationHandler = {
        isCumulative: false,
        errors: [],
        cumulative: function (isCumulative) {
            validationHandler.isCumulative = isCumulative;
            if (isCumulative) {
                validationHandler.errors = [];
            }
            else {
                var msg = '';
                $(validationHandler.errors).each(function (index, err) {
                    msg += err + '\r\n';
                });
                if (!validationHandler.isValid()) {
                    alert(msg);
                }
            }
        },
        notifyError: function (element, msg) {
            if (!validationHandler.isCumulative) {
                alert(msg);
            } else {
                validationHandler.errors.push(element.id + " - " + msg);
            }
        },
        isValid: function () {
            return validationHandler.errors.length == 0;
        }
    };

    // nota la action viene tenuta per compatibilità o usi futuri ....
    function RegisterViewModel(viewModelName, viewModel, updateCurrentSection) {
        var childViewModel = ko.mapping.fromJS(viewModel);
        rootViewModel[viewModelName] = childViewModel;

        if (updateCurrentSection) {
            rootViewModel.currentSection = viewModelName;
        }
    }

    function UpdateViewModelBinding() {
        rootViewModel.clearValidationRules();
        ko.applyBindings(rootViewModel);
    }

    function KoGoTo(action) {
        if (rootViewModel.executeValidationRules()) {
            KoGoToUsingObject(action, rootViewModel.currentSection);
        }

    }

    function KoExport(action) {
        var objectToSend = null;
        var viewModelName = rootViewModel.currentSection;
        if (viewModelName != undefined) {
            var viewModel = rootViewModel[viewModelName];
            if (viewModel != undefined) {
                objectToSend = ko.mapping.toJS(viewModel);
            }
        }

        var formExport = $("#formExport");
        formExport.empty();

        var formData = null;
        if (objectToSend) {
            formData = $.toJSON(objectToSend);
        }

        //debugger;
        var inputHidden = $('<input>').attr({ type: 'hidden', name: 'json', value: formData });
        formExport.append(inputHidden);
        formExport.attr("action", action);
        formExport.attr("target", "exportFrame");
        formExport.submit();

    }

    function KoExportOn(action, viewModel) {
        var objectToSend = null;
        if (viewModel != undefined) {
            objectToSend = ko.mapping.toJS(viewModel);
        }
        
        var formExport = $("#formExport");
        formExport.empty();

        var formData = null;
        if (objectToSend) {
            formData = $.toJSON(objectToSend);
        }

        //debugger;
        
        var inputHidden = $('<input>').attr({ type: 'hidden', name: 'json', value: formData });
        formExport.append(inputHidden);
        formExport.attr("action", action);
        formExport.attr("target", "exportFrame");
        formExport.submit();

    }

    function KoExportUsingObject(action, viewModelName) {
       
        var viewModel = null;
        if (viewModelName != undefined) {
            viewModel = rootViewModel[viewModelName];
        }

        KoExportOn(action, viewModel);
    }

    function KoGoToUsingObject(action, sectionName, usePopup) {
        communicationSendKoObject(action, sectionName, usePopup);
     }

    function communicationSendKoObject(action, viewModelName, usePopup) {
        var objectToSend = null;

        if (viewModelName != undefined) {
            var viewModel = rootViewModel[viewModelName];
            if (viewModel != undefined) {
                objectToSend = ko.mapping.toJS(viewModel);
            }
        }

        communicationLoad(action, objectToSend, usePopup);
    }  
</script>

    <div class="main-content">
        <table class="main-content old-container">
            <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="MainSection" style="visibility: visible;">

<form action="/anchise.web/DISTINTE/AssegnaConto/Import" enctype="multipart/form-data" method="post">            
                <div class="container"><div class="new-riquadro">
                    <table class="summary" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td colspan="2" class="title page-title"><div class="search-flag"></div><h1>
                                    Assegna Conto Distinte
                                </h1></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="subtitle bg-green-light">
                                <td class="tdleftWrap bg-green-light" colspan="2" style="padding-left: 15px">
                                        <h3 class="new-titleSection">
                                            Dati ordinante
                                        </h3>
                                </td>

                            </tr>
                            <tr class="section">
                                <td style="width: 64%;">
                                    <input data-val="true" data-val-number="The field IdAzienda must be a number." id="idAzienda" name="PiazzaturaAssegnaConto.IdAzienda" type="hidden" value="">
                                    <input id="abiBanca" name="PiazzaturaAssegnaConto.ABIBanca" type="hidden" value="">
                                    <input data-val="true" data-val-number="The field IdRapporto must be a number." id="idRapporto" name="PiazzaturaAssegnaConto.IdRapporto" type="hidden" value="">
                                            
            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                <tbody><tr>
                    <td class="LabelWrap" style="width: 26%;">
                        <span class="alert-text">*&nbsp;</span>Ordinante:
                    </td>
                    <td class="Valore200" style="width: 66%;">
                        <span data-bind="enable: AssegnaContoViewModel.PiazzaturaAssegnaConto.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_IdAzienda" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value=""></option><option value="588536">C.P.C. INOX SPA</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: AssegnaContoViewModel.PiazzaturaAssegnaConto.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_ABIBanca" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca" style="width:350px;" class="new-form-control banca"><option value=""></option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                        </span>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Conto:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: AssegnaContoViewModel.PiazzaturaAssegnaConto.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_IdRapporto" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto" style="width:350px;" class="new-form-control conto"><option value=""></option><option value="2455525">33473-000000011905                                                                                        </option><option value="2538011">01636-EUR700001843</option><option value="2538012">01636-EUR800004456</option><option value="2538010">33473-USD181000600</option></select>
                        </span>
                    </td>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            </tbody></table>
        

                                </td>
                                <td>
                                    <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                        <tbody><tr>
                                            <td class="LabelWrap" style="width:39%">CUC:</td>
                                            <td class="Valore100" style="width:60%"><input data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceCuc" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_CodiceCuc" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceCuc" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                            <td style="width:1%">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="LabelWrap">SIA:</td>
                                            <td class="Valore100"><input data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceSia" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_CodiceSia" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="LabelWrap">IBAN:</td>
                                            <td class="Valore100"><input data-bind="value: AssegnaContoViewModel.PiazzaturaAssegnaConto.IBAN" id="AssegnaContoViewModel_PiazzaturaAssegnaConto_IBAN" name="AssegnaContoViewModel.PiazzaturaAssegnaConto.IBAN" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr style="background-color: #f7fcf7" class="section">
                                <td style="width: 64%">
                                    <table class="subTable old-inputForm" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td class="td1">
                                                <span style="margin-left: 10px"><span class="alert-text">* </span>File</span>
                                            </td>
                                            <td class="td2">
                                                <span>
                                                    <input id="UploadedFile" name="UploadedFile" style="width:400px; background-color: rgba(239, 239, 239, 1);" type="file" value="" class="btn-file">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td1">
                                                &nbsp;
                                            </td>
                                            <td class="td2">
                                                <span>
                                                    <input data-val="true" data-val-required="The CheckTracciatoFileXML field is required." id="CheckTracciatoFileXML" name="CheckTracciatoFileXML" type="checkbox" value="true"><input name="CheckTracciatoFileXML" type="hidden" value="false">
                                                    Tracciato file in XML
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td1">
                                                &nbsp;
                                            </td>
                                            <td class="td2">
                                                <span>
                                                    <input data-val="true" data-val-required="The CheckPiazzatura field is required." id="CheckPiazzatura" name="CheckPiazzatura" type="checkbox" value="true"><input name="CheckPiazzatura" type="hidden" value="false">
                                                    Effettua controllo piazzatura ABI/CAB su pagamenti SEPA e incassi dopo l'importazione
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td1">
                                                &nbsp;
                                            </td>
                                            <td class="td2">
                                                <span>
                                                    <input checked="checked" data-val="true" data-val-required="The ReplaceDatiOrdinante field is required." id="ReplaceDatiOrdinante" name="ReplaceDatiOrdinante" type="checkbox" value="true"><input name="ReplaceDatiOrdinante" type="hidden" value="false">
                                                    Sostituisci Nome e C.F./P.IVA Ordinante (per Incassi e Pagamenti Italia)
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="testoRedSmallBold">
                                                * campi obbligatori
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                                    <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div><div class="new-buttons"></div></div>
                    <div class="new-buttons" style="min-width: 1000px; max-width: 1320px; width: 96%; padding-left: 2%; padding-right: 2%; margin-right: auto; margin-left: auto;">
                        <input type="submit" id="ank-btn-ok" value="Importa" class="btn">
                    </div>
            
</form><script type="text/javascript">
                                            $(function () { RegisterViewModel("AssegnaContoViewModel",{"PiazzaturaAssegnaConto":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"ReplaceDatiOrdinante":true,"CheckPiazzatura":false,"CheckTracciatoFileXML":false,"UploadedFile":null,"TmSessionId":null}, true);
            var root = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto;
            if (root.CodiceSia == undefined) {
                root.CodiceSia = ko.observable('');
            }

            if (root.IdBanca == undefined) {
                root.IdBanca = ko.observable('');
            }

            if (root.CodiceCuc == undefined) {
                root.CodiceCuc = ko.observable('');
            }

            if (root.IBAN == undefined) {
                root.IBAN = ko.observable('');
            }

            // Required for PiazzaturaToolbar
            if (root.HasRapporti == undefined) {
                root.HasRapporti = ko.observable(false);
            }

            if (root.PiazzaturaIdAziendaEnabled == undefined) {
                root.PiazzaturaIdAziendaEnabled = ko.observable(true);
            }

            if (root.PiazzaturaAbiBancaEnabled == undefined) {
                root.PiazzaturaAbiBancaEnabled = ko.observable(true);
            }

            if (root.PiazzaturaIdRapportoEnabled == undefined) {
                root.PiazzaturaIdRapportoEnabled = ko.observable(true);
            }

            initializePiazzatura(
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda(),
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca(),
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto());
        
            var cmbAzienda = $('#AssegnaContoViewModel_PiazzaturaAssegnaConto_IdAzienda');
            var cmbBanca = $('#AssegnaContoViewModel_PiazzaturaAssegnaConto_ABIBanca');
            var cmbRapporto = $('#AssegnaContoViewModel_PiazzaturaAssegnaConto_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda();
                    var selectedBanca = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda();
                    var selectedBanca = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca();
                    var selectedRapporto = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto();

                    initializePiazzatura(selectedAzienda,selectedBanca,selectedRapporto);
                });
            }

            function unregisterChangeCombo() {
                cmbAzienda.unbind('change');
                cmbBanca.unbind('change');
                cmbRapporto.unbind('change');
            }

            /*
            Initialize comboBox
        */

            function initializePiazzatura(selectedAzienda, selectedBanca, selectedRapporto) {
                // alert("Posting selectedAzienda: " + selectedAzienda +  " - selectedBanca: " + selectedBanca + " - selectedRapporto: " + selectedRapporto);
                var piazzatura =
                {
                    IdAzienda: selectedAzienda,
                    ABIBanca: selectedBanca,
                    IdRapporto: selectedRapporto
                };

                communicationSendObject('/anchise.web/DISTINTE/AssegnaConto/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
            }

            function initializeFromPiazzatura(response, isJson, piazzaturaRapporto) {
                unregisterChangeCombo();
                initializeComboBoxFromPiazzaturaRapporto(piazzaturaRapporto);
                registerChangeCombo();
            }

            /*
            Initialize comboBox from piazzatura rapporto
        */
            function initializeComboBoxFromPiazzaturaRapporto(piazzaturaRapporto) {
                var aziende = piazzaturaRapporto.Aziende;
                var rapporti = piazzaturaRapporto.Rapporti;
                var banche = piazzaturaRapporto.Banche;
                var piazzatura = piazzaturaRapporto.Piazzatura;

                // Combo azienda
                cmbAzienda.empty();
                if (aziende.length > 0) {
                    cmbAzienda
                        .append($('<option></option>')
                            .val("")
                            .html(""));
                }

                var emptySIA = '';
                var emptyCUC = '';
                var emptyIdBanca = '';
                var emptyIBAN = '';

                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceSia(emptySIA);
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceCuc(emptyCUC);
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdBanca(emptyIdBanca);
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.CodiceCuc(azienda.CodiceCUC);
                    }
                });

                // bug ie7
                cmbAzienda.removeClass("azienda").addClass("azienda");


                // Combo banca
                cmbBanca.empty();
                if (banche.length > 0) {
                    cmbBanca
                        .append($('<option></option>')
                            .val("")
                            .html(""));
                }

                $.each(banche, function (index, banca) {
                    var description = banca.ABI + " - " + banca.Descrizione;
                    var option = $('<option></option>')
                        .val(banca.ABI)
                        .text(description);
                    cmbBanca.append(option);

                    if (banca.ABI == piazzatura.ABIBanca) {
                        rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdBanca(banca.Id);
                    }
                });
                // bug ie7
                cmbBanca.removeClass("banca").addClass("banca");


                // Combo rapporti
                cmbRapporto.empty();
                if (rapporti.length > 0) {
                    cmbRapporto
                        .append($('<option></option>')
                            .val("")
                            .html(""));
                }
                // bug ie7
                cmbRapporto.removeClass("conto").addClass ("conto");

                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        
                        var IdAziendaProperty = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdAzienda;
                        IdAziendaProperty.subscribe(function(idAzienda) {
                            $("#idAzienda").val(idAzienda);
                        });

                        var abiBancaProperty = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.ABIBanca;
                        abiBancaProperty.subscribe(function(abiBanca) {
                            $("#abiBanca").val(abiBanca);
                        });

                        var idRapportoProperty = rootViewModel.AssegnaContoViewModel.PiazzaturaAssegnaConto.IdRapporto;
                        idRapportoProperty.subscribe(function(idRapporto) {
                            $("#idRapporto").val(idRapporto);
                        });
                    UpdateViewModelBinding();}); </script>
</div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/DISTINTE/AssegnaConto?trk=empty');
    });
</script>
                    </td>
                </tr>
            </tbody>
                <tfoot>
                    <tr>
                        <td style="vertical-align: bottom;">
                            
<div class="divFooter" id="divFooter">
    <div class="container-fluid footer" style="">
        <div class="footer-container" style="color: #003b79;">
            <div class="row" style="padding: 0; margin: 0 auto">
                <div class="col-xs-6" style="padding: 0; margin-top: 0">
                    <div class="col-xs-12">
                        <h4 style="font-size: 14.6px;">
                            Assistenza Clienti
                        </h4>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 6px;line-height: 1.2em;font-size: 1.2em;">
                        <div style="display: inline-block;">
                            <img src="/anchise.web/Contents/00000/it-IT/Images/assistenza-footer.png?v=77">
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            Numero Verde
                            <strong>
                                800.607.227
                            </strong>
                            <br>
                            Dall'estero
                            <strong>
                                +39 02.43371097
                            </strong>
                        </div>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 6px;line-height: 1.2em;font-size: 1.2em;">
                        <div style="display: inline-block;">
                            <img src="/anchise.web/Contents/00000/it-IT/Images/gestore-footer.png?v=77">
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            <span style="white-space: nowrap">
                                Per qualsiasi altra esigenza è a tua disposizione
                            </span>
                            <br>
                            il <strong>Gestore</strong> presso la tua filiale di riferimento
                        </div>
                    </div>
                </div>
                <div class="col-xs-6" style="padding: 0">
                    <div class="footer-logo"><span>Banco Popolare</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 txt_center" style="font-size: 11.06px;">
                    © 2000-2015 - Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
                </div>
            </div>
        </div>
    </div>
</div>

                        </td>
                    </tr>
                </tfoot>
            
        </table>
    </div>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 244.5px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=77">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div>