
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

    // nota la action viene tenuta per compatibilit� o usi futuri ....
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
    <div class="container"><div class="new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Esiti Allineamento Rid</h1></td>
                </tr>
            </thead>
            <tbody>
                <tr style="height: 1px;">
                    <td style="width: 66%;">
                        &nbsp;
                    </td>
                    <td style="width: 34%;">
                        &nbsp;
                    </td>
                </tr>
                    <tr class="section">
                        <td>        
            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                <tbody><tr>
                    <td class="LabelWrap" style="width: 26%;">
                        <span class="alert-text">*&nbsp;</span>Rag. Soc./ Intestatario:
                    </td>
                    <td class="Valore200" style="width: 66%;">
                        <span data-bind="enable: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda" id="EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_IdAzienda" name="EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca" id="EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_ABIBanca" name="EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca" style="width:350px;" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
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
                        <span data-bind="enable: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdRapporto" id="EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_IdRapporto" name="EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdRapporto" style="width:350px;" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
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
                                    <td class="LabelWrap" style="width: 39%;"><label for="SIA">SIA</label>:</td>
                                    <td class="Valore100" style="width: 60%;"><input data-bind="value: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceSia" id="EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_CodiceSia" name="EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                    <td width="1%;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina</td>
                                    <td class="Valore100"><select data-bind="value: EsitiAllineamentiArchiviViewModel.NumeroRighePerPagina" id="EsitiAllineamentiArchiviViewModel_NumeroRighePerPagina" name="EsitiAllineamentiArchiviViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="100">100</option>
</select></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="Valore" colspan="3">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr class="section">
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="LabelWrap" style="width: 26%;">Causale:</td>
                                    <td class="Valore200" style="width: 66%;"><select data-bind="value: EsitiAllineamentiArchiviViewModel.IdCausale" id="EsitiAllineamentiArchiviViewModel_IdCausale" name="EsitiAllineamentiArchiviViewModel.IdCausale" class="new-form-control"><option value="">TUTTI</option>
<option value="I">Tutte le causali informative</option>
<option value="90210">90210 - Comunicazione autorizzazione addebito dalla banca</option>
<option value="90212">90212 - Accettazione richiesta autoriz addebito in conto</option>
<option value="90311">90311 - Diniego rich autoriz addebito dall'azienda cliente</option>
<option value="90312">90312 - Diniego richiesta autoriz addebito per cab errato</option>
<option value="90313">90313 - Diniego rich autoriz addebito per conto errato</option>
<option value="90314">90314 - Diniego rich autoriz addebito per conto inutilizzabile</option>
<option value="90315">90315 - Diniego rich autoriz addebito per flag non accettabile</option>
<option value="90316">90316 - Storno rich autoriz addebito in quanto gia' presente</option>
<option value="90318">90318 - Storno revoca su iniziativa del sottoscrittore</option>
<option value="90319">90319 - Storno proposta di revoca dall'azienda cliente</option>
<option value="90420">90420 - Revoca autorizzazione addebito dall'intestatario conto</option>
<option value="90421">90421 - Revoca autorizzazione addebito dalla banca</option>
<option value="90430">90430 - Variazione coordinate bancarie di addebito</option>
<option value="90540">90540 - Storno richiesta variazione coordinate azienda</option>
<option value="90550">90550 - Storno proposta di revoca per cessazione contratto</option>
<option value="90560">90560 - Storno richiesta revoca per trasferimento deleghe</option>
<option value="90830">90830 - Variazione coordinate a seguito della trasferibilita'</option>
<option value="90840">90840 - Storno richiesta variazione coordinate per trasferimento</option>
<option value="91210">91210 - Comunicazione info per migrazione Sepa Direct Debit</option>
<option value="91311">91311 - Diniego comunicazione info migrazione Sepa Direct Debit</option>
<option value="99999">99999 - Diniego rich conversione SEDA da Banca Allineamento/Passiva</option>
<option value="D">Tutte le causali dispositive</option>
<option value="90211">90211 - Richiesta autorizzazione addebito in conto</option>
<option value="90218">90218 - Revoca autorizzazione addebito dal sottoscrittore</option>
<option value="90219">90219 - Proposta revoca autorizzazione addebito dall'azienda</option>
<option value="90309">90309 - Storno comunicazione autoriz. per flag storno non accettabile</option>
<option value="90310">90310 - Storno comunicazione autorizzazione dalla banca</option>
<option value="90440">90440 - Variazione coordinate azienda</option>
<option value="90450">90450 - Proposta revoca autoriz addebito chiusura contratto</option>
<option value="90520">90520 - Storno della revoca</option>
<option value="90530">90530 - Storno variazione coordinate bancarie</option>
<option value="91211">91211 - Richiesta informazioni per migrazione a Sepa Direct Debit</option>
</select></td>
                                    <td style="width: 8%"></td>
                                </tr>
                            </tbody></table>
                        </td>
                         <td>&nbsp;</td>
                    </tr>
                    <tr class="section">
                        <td>&nbsp;</td>
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="Label" style="width:60%"> 
                                        <input id="ank-btn-FiltriAvanzati" type="button" value="<< Avanzate" class="btn small">
                                    </td>
                                    <td style="width: 40%;"></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr style="height:1pt;"><td colspan="2"></td></tr>
                    <!--  FILTRI AVANZATI -->
                    <tr id="FiltriAvanzati1" style="border: 0px; display: table-row;" class="section">
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="LabelWrap" style="width: 26%">
                                         Codice Fiscale/Partita IVA:
                                      
                                    </td>
                                    <td class="Valore300" style="width: 25%">
                                        <input data-bind="value: EsitiAllineamentiArchiviViewModel.CFiscPiva" id="EsitiAllineamentiArchiviViewModel_CFiscPiva" name="EsitiAllineamentiArchiviViewModel.CFiscPiva" type="text" value="" class="new-form-control">
                                    </td>
                                    <td style="width: 16%;">
                                        Codice individuale:
                                    </td>
                                    <td class="Valore300" style="width: 25%">
                                       <input data-bind="value: EsitiAllineamentiArchiviViewModel.CodiceIndividuale" id="EsitiAllineamentiArchiviViewModel_CodiceIndividuale" name="EsitiAllineamentiArchiviViewModel.CodiceIndividuale" type="text" value="" class="new-form-control">
                                    </td>
                                    <td style="width: 8%">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody></table>        
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr id="FiltriAvanzati" style="border: 0px; display: table-row;" class="section">
                        <td>
                            <table cellpadding="0" cellspacing="0">
                                <tbody><tr class="section">
                                    <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">
                    <tbody><tr>
                        <td style="width: 26%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            Da:
                        </td>
                        <td style="width: 16%">
                            &nbsp;
                        </td>
                        <td class="LabelOnLeft" style="width: 25%">
                            A:
                        </td>
                        <td style="width: 8%">
                            &nbsp;
                        </td>
                    </tr>

        <tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_creazione">Data creazione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviViewModel.DataCreazione.From" id="EsitiAllineamentiArchiviViewModel_DataCreazione_From" name="EsitiAllineamentiArchiviViewModel.DataCreazione.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviViewModel_DataCreazione_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiAllineamentiArchiviViewModel_DataCreazione_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviViewModel_DataCreazione_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviViewModel_DataCreazione_From_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviViewModel_DataCreazione_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviViewModel.DataCreazione.To" id="EsitiAllineamentiArchiviViewModel_DataCreazione_To" name="EsitiAllineamentiArchiviViewModel.DataCreazione.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviViewModel_DataCreazione_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiAllineamentiArchiviViewModel_DataCreazione_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviViewModel_DataCreazione_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviViewModel_DataCreazione_To_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviViewModel_DataCreazione_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                    </td>
                                </tr>
                                <tr class="section">
                                    <td>
    <table cellpadding="0" cellspacing="0" class="old-inputForm">

        <tbody><tr>
            <td class="LabelWrap" style="width: 26%">
                
                    <label for="Data_ricezione">Data ricezione</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviViewModel.DataRicezione.From" id="EsitiAllineamentiArchiviViewModel_DataRicezione_From" name="EsitiAllineamentiArchiviViewModel.DataRicezione.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviViewModel_DataRicezione_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiAllineamentiArchiviViewModel_DataRicezione_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviViewModel_DataRicezione_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviViewModel_DataRicezione_From_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviViewModel_DataRicezione_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EsitiAllineamentiArchiviViewModel.DataRicezione.To" id="EsitiAllineamentiArchiviViewModel_DataRicezione_To" name="EsitiAllineamentiArchiviViewModel.DataRicezione.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EsitiAllineamentiArchiviViewModel_DataRicezione_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
<script type="text/javascript">
            $.datepicker.regional['it'] = {
                closeText: 'Chiudi',
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.regional['en'] = {
                closeText: 'Close',
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Today',
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
                dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
                dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                maxDate: '+1Y'
            };
            $.datepicker.setDefaults($.datepicker.regional['it']);
            $(document).ready(function () {
                $("#EsitiAllineamentiArchiviViewModel_DataRicezione_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EsitiAllineamentiArchiviViewModel_DataRicezione_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EsitiAllineamentiArchiviViewModel_DataRicezione_To_imgcalendar").click(function(){
                    $("#EsitiAllineamentiArchiviViewModel_DataRicezione_To").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 8%">
                &nbsp;
            </td>
        </tr>
    </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>  
                    <tr class="LinkedToFiltriAvanzati" style="height: 1pt; display: table-row;">
                        <td colspan="2"></td>
                    </tr>         
                    <tr style="height:12px;">
                        <td colspan="2" class="testoRedSmallBold">
                            * campi obbligatori
                        </td>
                    </tr>
                    <tr>
                        <td class="Comandi" colspan="2">
                            
                        </td>
                    </tr>
                    <tr style="height:5px;"><td>&nbsp;</td></tr>
            </tbody>
        </table>
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="enable: EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.HasRapporti, singleClick: function(){ KoGoTo('/anchise.web/ESITI/EsitiAL/Ricerca?trk=empty');}" class="btn"></div></div>
      <script type="text/javascript">
          $(document).ready(function () {
              var mustExpand = "False".toLowerCase() == "true";
              if (mustExpand) {
                  showFilter();
              } else {
                  hideFilter();
              }

              $("#ank-btn-FiltriAvanzati").click(function (e) {
                  e.preventDefault();

                  if ($("#FiltriAvanzati").is(":hidden")) {
                      showFilter();
                  }
                  else {
                      hideFilter();
                  } 
              }
        );

              function hideFilter() {
                  $("#ank-btn-FiltriAvanzati").attr('value', '>> Avanzate');
                  $("#FiltriAvanzati").hide();
                  $("#FiltriAvanzati1").hide();
                  $(".LinkedToFiltriAvanzati").hide();
              }

              function showFilter() {
                  $("#ank-btn-FiltriAvanzati").attr("value", '<< Avanzate');
                  $("#FiltriAvanzati").show();
                  $("#FiltriAvanzati1").show();
                  $(".LinkedToFiltriAvanzati").show();
              }

          });
    </script>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EsitiAllineamentiArchiviViewModel",{"PiazzaturaAllinementoArchivi":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"IdCausale":null,"CodiceIndividuale":null,"CFiscPiva":null,"DataCreazione":{"From":null,"To":null},"DataRicezione":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":5,"OrdinamentoDirezione":2}, true);
            var root = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi;
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
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda(),
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca(),
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdRapporto());
        
            var cmbAzienda = $('#EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_IdAzienda');
            var cmbBanca = $('#EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_ABIBanca');
            var cmbRapporto = $('#EsitiAllineamentiArchiviViewModel_PiazzaturaAllinementoArchivi_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca();
                    var selectedRapporto = rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdRapporto();

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

                communicationSendObject('/anchise.web/ESITI/EsitiAL/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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

                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceSia(emptySIA);
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceCuc(emptyCUC);
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdBanca(emptyIdBanca);
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.CodiceCuc(azienda.CodiceCUC);
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
                        rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdBanca(banca.Id);
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

                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EsitiAllineamentiArchiviViewModel.PiazzaturaAllinementoArchivi.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/ESITI/EsitiAL?trk=empty');
    });
</script>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="vertical-align: bottom;">
                        


                    </td>
                </tr>
            </tfoot>
        </table>
    </div>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 399.5px; left: 920px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=75">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
