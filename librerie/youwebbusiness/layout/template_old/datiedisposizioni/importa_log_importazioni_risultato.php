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

    <div class="container"><div id="search" class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Log Importazioni
    <a id="helpButton" class="helplink"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1>
</div>

        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                   <tr>
                        <td width="50%">&nbsp;</td>
                        <td></td>
                        <td>
                            <table class="filter-toolbar piazzaturainline old-inputForm" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;">
                                            Esito Importazione
                                        </td>
                                        <td style="font-weight: bold;">
                                            Tipologia
                                        </td>
                                    </tr>
                                    <tr valign="bottom">
                                        <td>
                                            <select data-bind="value: LogImportazioniViewModel.IdEsitoImportazione" id="LogImportazioniViewModel_IdEsitoImportazione" name="LogImportazioniViewModel.IdEsitoImportazione" class="new-form-control"><option value="">Tutti</option>
<option value="IM">Importato</option>
<option value="IW">Importato con Warning</option>
<option value="NI">Non Importato</option>
</select>
                                        </td>
                                        <td>
                                            <select data-bind="value: LogImportazioniViewModel.IdTipoDispositivo" id="LogImportazioniViewModel_IdTipoDispositivo" name="LogImportazioniViewModel.IdTipoDispositivo" class="new-form-control"><option value="">Tutti</option>
<option value="11">Allineamento Archivi IBAN</option>
<option value="201">Assegni Circolari</option>
<option value="202">Assegni di Quietanza</option>
<option value="100">Bollettino Bancario</option>
<option value="151">Bonifici SEPA</option>
<option value="103">Bonifico Estero</option>
<option value="42">Effetti Impagati</option>
<option value="171">Incassi Direct Debit</option>
<option value="205">Incassi Estero</option>
<option value="4">M.Av</option>
<option value="104">Pagamento Deleghe F24</option>
<option value="106">Pagamento F24 Elementi Identificativi</option>
<option value="6">R.I.D</option>
<option value="105">Revoche F24</option>
<option value="2">Ri.Ba.</option>
<option value="5">Richiamo M.Av</option>
<option value="7">Richiamo R.I.D</option>
<option value="3">Richiamo Ri.Ba.</option>
<option value="175">Richiesta rendiconto mandati SEDA</option>
<option value="28">Ritiro Effetti (Pagamento Riba)</option>
<option value="152">Stipendi SEPA</option>
<option value="206">Strutture Libere</option>
<option value="8">Variazioni Coordinate RID</option>
</select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.LogImportazioniViewModel.FilterRefresh(); }, css:{ inactive: LogImportazioniViewModel.piazzaturaUnChanged}, enable: LogImportazioniViewModel.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.FilterGoTo(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
<!-- div class="export-toolbar" style="border: chocolate 1px solid;" -->
    
   <table class="export-toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
       <tbody>
           <tr><td>&nbsp;</td></tr>
           <tr>
                   <td style="width:20px;cursor:pointer;"><a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExport('/anchise.web/DISTINTE/LogImportazioni/ExportAsPdf?trk=empty');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></td>
           </tr>
       </tbody>
   </table>
<!-- /div -->

</td>
                       
                        <td width="50%">&nbsp;</td>
                    </tr>
            </tbody>
        </table>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td nowrap="nowrap">
                            <div class="paging">
                                <span class="spacer">&nbsp;</span>
                                
    <span class="rpp">
        Importazioni per pagina:
            <span class="rpp-current">10</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetItemsPerPageAndGo('20');}">20</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetItemsPerPageAndGo('50');}">50</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetItemsPerPageAndGo('100');}">100</span>
    </span>

                                
<span class="help">
    
</span>

<script type="text/javascript">
    $(document).ready(function () {
        $("#helpButton").click(function (e) {
            e.preventDefault();
            var href = '/ibbweb2/newstyle/static/help/it/importazioni/LogImportazioni.htm';
            window.open(href, "Dettaglio", "toolbar=no,scrollbars=yes,status=no,width=534,height=240");
        });
    });
</script>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="divgrid">
                                
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            
            <tr class="columns">
                <th style="width: 41px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Data importazione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(1, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down-active" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(1, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 41px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Ora importazione
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 91px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Nome utente
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(3, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(3, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 200px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Nome file
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 150px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Descr. importazione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(5, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(5, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 150px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Tipologia
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(6, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(6, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 130px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(7, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.SetSortData(7, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
            </tr>
        </thead>
        <tbody>
                <tr class="treven">
                    <td>
                        27/09/2019
                    </td>
                    <td>
                        11:50
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        podsaiposd.txt
                    </td>
                    <td class="tdleftWrap">
                        Assegna Conto
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402564);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        27/09/2019
                    </td>
                    <td>
                        11:48
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        podsaiposd.txt
                    </td>
                    <td class="tdleftWrap">
                        Assegna Conto
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402563);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        27/09/2019
                    </td>
                    <td>
                        11:43
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        podsaiposd.txt
                    </td>
                    <td class="tdleftWrap">
                        Assegna Conto
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402562);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        02/08/2019
                    </td>
                    <td>
                        15:30
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        StoreIDMap.xml
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402538);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        02/08/2019
                    </td>
                    <td>
                        15:30
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        StoreIDMap.xml
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402537);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        02/08/2019
                    </td>
                    <td>
                        15:28
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        01cambio-pin.html
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402536);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        30/07/2019
                    </td>
                    <td>
                        16:49
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        05034_73586_2019-07-30_XBN00588536-171025-00033586852_000001.XML
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Bonifici SEPA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(-2146254393);}">
                            Importato con Warning
                        </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        30/07/2019
                    </td>
                    <td>
                        16:47
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        05034_73586_2019-07-30_XBN00588536-171025-00033586852_000001.CSV
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402533);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                        30/07/2019
                    </td>
                    <td>
                        16:47
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        05034_73586_2019-07-30_XBN00588536-171025-00033586852_000001.CSV
                    </td>
                    <td class="tdleftWrap">
                        Importa Distinte
                    </td>
                    <td class="tdleftWrap">
                        Tipologia non identificata
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(5402532);}">
                            Non Importato
                        </span>
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                        30/07/2019
                    </td>
                    <td>
                        16:44
                    </td>
                    <td class="tdleftWrap">
                        0655936
                    </td>
                    <td class="tdleftWrap">
                        05034_AYRLG_2017-10-25_XBN00000012-171025-00011103523_000001.XML
                    </td>
                    <td class="tdleftWrap">
                        Assegna Conto
                    </td>
                    <td class="tdleftWrap">
                        Bonifici SEPA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToDettaglio(-2146254394);}">
                            Importato
                        </span>
                    </td>
                </tr>
        </tbody>
    </table>
<script language="javascript">
    $(function () {
        $('table.grid>tbody>tr:odd').addClass('trodd');
        $('table.grid>tbody>tr:even').addClass('treven');

        $('table.summary>tbody>tr.alternacolor:odd').addClass('trodd');
        $('table.summary>tbody>tr.alternacolor:even').addClass('treven');
    });
 </script>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">
                            <div class="paging">
                                    <table class="pager" cellpadding="0" cellspacing="0">
   <tbody><tr style="height: 16px;">
       <td id="PagerTotal">
           Totale: 15
       </td>
       <td nowrap="nowrap" id="PagerActions" class="right">
           <table cellpadding="0" cellspacing="0" class="old-inputForm">
               <tbody>
                   <tr>
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.LogImportazioniViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.LogImportazioniViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.LogImportazioniViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: LogImportazioniViewModel.PaginaRichiesta, minValue: 1, maxValue: 2, fallbackValue : 1" id="LogImportazioniViewModel_PaginaRichiesta" maxlength="4" name="LogImportazioniViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 2</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.LogImportazioniViewModel.CanGo, singleClick: function(){rootViewModel.LogImportazioniViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.LogImportazioniViewModel.CanGoToNext, singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToNext(); }"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.LogImportazioniViewModel.CanGoToLast, singleClick: function(){ rootViewModel.LogImportazioniViewModel.GoToLast(); }"></a></td>
                   </tr>
               </tbody>
           </table>
       </td>
   </tr>
  </tbody></table>

                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("LogImportazioniViewModel",{"IdEsitoImportazione":null,"IdTipoDispositivo":null,"DataImportazione":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":1,"OrdinamentoDirezione":2}, true);
                             //debugger;
                             var piazz = rootViewModel.LogImportazioniViewModel;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.LogImportazioniViewModel.IdEsitoImportazione() == '' &&
                                         rootViewModel.LogImportazioniViewModel.IdTipoDispositivo() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.LogImportazioniViewModel.IdEsitoImportazione() != '' ||
                                         rootViewModel.LogImportazioniViewModel.IdTipoDispositivo() != '';
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/FilterReset?trk=empty');
                             };
                         
              var root = rootViewModel.LogImportazioniViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.LogImportazioniViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                  
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageSetItemsPerPage?trk=empty', 'LogImportazioniViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageSetItemsPerPage?trk=empty');
                  }
              };
    
                        var root = rootViewModel.LogImportazioniViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.LogImportazioniViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.LogImportazioniViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty', 'LogImportazioniViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.LogImportazioniViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.LogImportazioniViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.LogImportazioniViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty', 'LogImportazioniViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.LogImportazioniViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.LogImportazioniViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.LogImportazioniViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty', 'LogImportazioniViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.LogImportazioniViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.LogImportazioniViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.LogImportazioniViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty', 'LogImportazioniViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.LogImportazioniViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.LogImportazioniViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.LogImportazioniViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.LogImportazioniViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty', 'LogImportazioniViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/DISTINTE/LogImportazioni/SortApply?trk=empty');
                         }
                        };
                    
            var root = rootViewModel.LogImportazioniViewModel;
            root.GoToDettaglio = function(idLog) {
                var action = '/anchise.web/DISTINTE/LogImportazioniDettaglio/DettaglioFromLogImportazione?trk=empty';
                var filtriRicercaLogImportazioniDettaglio = {
                    IdLogImportazioneFlusso: idLog
                };
                communicationLoad(action, filtriRicercaLogImportazioniDettaglio, true, 880);
            };
        
         var root = rootViewModel.LogImportazioniViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.LogImportazioniViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.LogImportazioniViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.LogImportazioniViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.LogImportazioniViewModel.PaginaRichiesta() != 1) && (rootViewModel.LogImportazioniViewModel.PaginaRichiesta() >= 1) && (rootViewModel.LogImportazioniViewModel.PaginaRichiesta() <= 2);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.LogImportazioniViewModel.PaginaRichiesta() < 2;
                 var canGoToNext = 1 < 2;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.LogImportazioniViewModel.PaginaRichiesta() != 2;
                 var canGoToLast = 1 != 2;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.LogImportazioniViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageGoToFirst?trk=empty', 'LogImportazioniViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '2';
             rootViewModel.LogImportazioniViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageGoToLast?trk=empty', 'LogImportazioniViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.LogImportazioniViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageGoToNext?trk=empty', 'LogImportazioniViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.LogImportazioniViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageGoToPrevious?trk=empty', 'LogImportazioniViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/DISTINTE/LogImportazioni/PageGoTo?trk=empty', 'LogImportazioniViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/DISTINTE/LogImportazioni/PageGoTo?trk=empty');
             }
         };

     UpdateViewModelBinding();}); </script>

    </div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/DISTINTE/LogImportazioni?trk=empty');
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 219px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=77">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>