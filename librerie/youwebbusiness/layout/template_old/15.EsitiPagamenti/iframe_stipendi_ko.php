<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
</head>
<body class="sfondo normal-text">
    <div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>
    <div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>

    <!-- from waiting panel -->



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
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Stipendi Italia
    </h1>
</div>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td width="50%">&nbsp;</td>
                        <td>        <table class="piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>
                    Rag. Soc./ Intestatario
                </td>
                <td>
                    Banca
                </td>
                <td>
                    Conto
                </td>
            </tr>
            <tr>
                <td class="azienda">
                    <span data-bind="enable: EsitiStipendiViewModel.PiazzaturaStipendio.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda" id="EsitiStipendiViewModel_PiazzaturaStipendio_IdAzienda" name="EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiStipendiViewModel.PiazzaturaStipendio.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca" id="EsitiStipendiViewModel_PiazzaturaStipendio_ABIBanca" name="EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EsitiStipendiViewModel.PiazzaturaStipendio.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto" id="EsitiStipendiViewModel_PiazzaturaStipendio_IdRapporto" name="EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
                    </span>
                </td>
            </tr>
        </tbody></table>
</td>
                        <td>


 <table class="filter-toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
     <tbody>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
         </tr>
         <tr>
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.FilterRefresh(); }, css:{ inactive: EsitiStipendiViewModel.PiazzaturaStipendio.piazzaturaUnChanged}, enable: EsitiStipendiViewModel.PiazzaturaStipendio.piazzaturaChanged"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.isFilterAdvanceSet}"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.FilterReset(); }"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
                            
                        
                        <table class="export-toolbar" style="border-collapse: collapse; border: 0px;" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td>
                                            <span class="export-toolbar" data-bind="singleClick: function(){ rootViewModel.EsitiStipendiViewModel.GoToRicercaPerPDF();}">
                                                <a title="Stampa" class="ank-icon-export-Pdf"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
                                            </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="50%">&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td>
                            <table id="EmptyGridPanel" height="50" border="0" cellspacing="0" cellpadding="0" align="center" valig="top">
    <tbody>
            <tr>
                <td>
                    <div class="messagePanel alert" style="display: block;">
                        <h3 class="titleSection">Attenzione</h3>
                        <p>
                            <strong>Non risulta alcun dato per i parametri di ricerca immessi</strong>
                        </p>
                    </div>
                </td>
            </tr>
    </tbody>
</table>

                        </td>
                    </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EsitiStipendiViewModel",{"PiazzaturaStipendio":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataInvio":{"From":null,"To":null},"DataEsecuzione":{"From":null,"To":null},"Importo":{"From":null,"To":null},"TipoDato":null,"EsitoNonIncrociato":false,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":4,"OrdinamentoDirezione":2}, true);
            var root = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio;
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
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda(),
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca(),
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto());
        
            var cmbAzienda = $('#EsitiStipendiViewModel_PiazzaturaStipendio_IdAzienda');
            var cmbBanca = $('#EsitiStipendiViewModel_PiazzaturaStipendio_ABIBanca');
            var cmbRapporto = $('#EsitiStipendiViewModel_PiazzaturaStipendio_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca();
                    var selectedRapporto = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto();

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

                communicationSendObject('/anchise.web/ESITI/EsitiST/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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
                            .html("TUTTI"));
                }

                var emptySIA = '';
                var emptyCUC = '';
                var emptyIdBanca = '';
                var emptyIBAN = '';

                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.CodiceSia(emptySIA);
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.CodiceCuc(emptyCUC);
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdBanca(emptyIdBanca);
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.CodiceCuc(azienda.CodiceCUC);
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
                            .html("TUTTI"));
                }

                $.each(banche, function (index, banca) {
                    var description = banca.ABI + " - " + banca.Descrizione;
                    var option = $('<option></option>')
                        .val(banca.ABI)
                        .text(description);
                    cmbBanca.append(option);

                    if (banca.ABI == piazzatura.ABIBanca) {
                        rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdBanca(banca.Id);
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
                            .html("TUTTI"));
                }
                // bug ie7
                cmbRapporto.removeClass("conto").addClass ("conto");

                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        
                             //debugger;
                             var piazz = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda() == '' &&
                                         rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca() == '' &&
                                         rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.HasRapporti() && (rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdAzienda() != '' ||
                                         rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.ABIBanca() != '' ||
                                         rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio.IdRapporto() != '');
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiST/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiST/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiST/FilterReset?trk=empty');
                             };
                         
                             var piazz = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
                            var piazzaturaViewModel = rootViewModel.EsitiStipendiViewModel.PiazzaturaStipendio;
                            piazzaturaViewModel.PiazzaturaIdRapportoEnabled = ko.computed(
                                function() {
                                    var esitoNonIncrociato = rootViewModel.EsitiStipendiViewModel.EsitoNonIncrociato();
                                    return !esitoNonIncrociato;
                                }
                            );
                        
            var root = rootViewModel.EsitiStipendiViewModel;
            root.GoToRicercaPerPDF = function() {
                var action = '/anchise.web/ESITI/EsitiST/GoToIndexPDF?trk=empty';
                var objectToSend = ko.mapping.toJS(root);
                communicationLoad(action, objectToSend, true);
            };
        UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/ESITI/EsitiST?trk=empty');
    });
</script>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 204.5px; left: 920px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=75">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>