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
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Bonifici Italia-Richiesta Assegni
    <a id="helpButton" class="helplink"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1>
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
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda" id="EsitiPagEPViewModel_PiazzaturaStipendio_IdAzienda" name="EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca" id="EsitiPagEPViewModel_PiazzaturaStipendio_ABIBanca" name="EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EsitiPagEPViewModel.PiazzaturaStipendio.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto" id="EsitiPagEPViewModel_PiazzaturaStipendio_IdRapporto" name="EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="2582120">11701-000000002407</option><option value="2582121">11701-000000002417</option><option value="2582122">11701-000000002418</option><option value="2582123">11701-000000002419</option><option value="2582124">11701-000000002420</option><option value="2582125">11701-000000002421</option><option value="2582126">11701-000000002422</option><option value="2582127">11701-000000002423</option><option value="2582128">11701-000000002424</option><option value="2582129">11701-000000002425</option><option value="2582130">11701-000000002426</option><option value="2582131">11701-000000002427</option><option value="2582132">11701-000000002428</option><option value="2582133">11701-000000002429</option><option value="812046">12900-000000047658</option><option value="812047">12900-000000047659</option><option value="812048">12900-000000047661</option></select>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterRefresh(); }, css:{ inactive: EsitiPagEPViewModel.PiazzaturaStipendio.piazzaturaUnChanged}, enable: EsitiPagEPViewModel.PiazzaturaStipendio.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterGoTo(); }, css:{ advanced: rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
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
                                        <span class="export-toolbar" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToRicercaPerPDF();}">
                                           <a title="Stampa" class="ank-icon-export-Pdf"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></span>
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
                        <td nowrap="nowrap">
                            <div class="paging">
                                <span class="spacer">&nbsp;</span>
                                
    <span class="rpp">
        Esiti per pagina:
            <span class="rpp-current">10</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetItemsPerPageAndGo('20');}">20</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetItemsPerPageAndGo('50');}">50</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetItemsPerPageAndGo('100');}">100</span>
    </span>

                                
<span class="help">
    
</span>

<script type="text/javascript">
    $(document).ready(function () {
        $("#helpButton").click(function (e) {
            e.preventDefault();
            var href = '/ibbweb/newstyle/html/help/AreaInformativa/EsitiBonifici.htm';
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
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Dato
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(1, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(1, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 220px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Ordinante
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(2, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(2, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th>
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Beneficiario
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(3, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(3, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 75px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Data flusso
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(4, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down-active" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(4, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 110px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Operazione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(5, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(5, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 110px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Importo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(6, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(6, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width:25px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Div
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 100px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Esito
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(7, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(7, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 70px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Esecuzione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(8, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.SetSortData(8, 2);}">
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
                              <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=77" alt="Dispositivo" title="Dispositivo">

                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToDettaglio(2582120, 106609, '0', '345322279');}">
                            01/10/2019
                        </span>
                    </td>
                    <td class="tdleftWrap">

                        
                        <label for="" title="ASSEGNO CIRCOLARE NON TRASFERIBILE - BONIFICI GENERICI  - (48000)">Bonifico</label>
                    </td>
                    <td class="tdright">
                       22,00

                    </td>
                    <td>
                         EUR
                    </td>
                    <td class="tdleftWrap">
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                              <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=77" alt="Dispositivo" title="Dispositivo">

                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToDettaglio(812046, 106609, '0', '345322230');}">
                            18/09/2019
                        </span>
                    </td>
                    <td class="tdleftWrap">

                        
                        <label for="" title="ASSEGNO DI QUIETANZA - BONIFICI GENERICI  - (48000)">Bonifico</label>
                    </td>
                    <td class="tdright">
                       15,00

                    </td>
                    <td>
                         EUR
                    </td>
                    <td class="tdleftWrap">
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr class="treven">
                    <td>
                              <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=77" alt="Dispositivo" title="Dispositivo">

                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToDettaglio(812046, 106609, '0', '345322229');}">
                            18/09/2019
                        </span>
                    </td>
                    <td class="tdleftWrap">

                        
                        <label for="" title="ASSEGNO DI QUIETANZA - BONIFICI GENERICI  - (48000)">Bonifico</label>
                    </td>
                    <td class="tdright">
                       15,00

                    </td>
                    <td>
                         EUR
                    </td>
                    <td class="tdleftWrap">
                        
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr class="trodd">
                    <td>
                              <img src="/anchise.web/Contents/00000/it-IT/Images/tipo_elaborazione_utente.gif?v=77" alt="Dispositivo" title="Dispositivo">

                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td class="tdleftWrap">
                        AUTOMOBILE CLUB MODENA
                    </td>
                    <td>
                        <span class="link" data-bind="singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToDettaglio(812046, 106609, '0', '345322228');}">
                            18/09/2019
                        </span>
                    </td>
                    <td class="tdleftWrap">

                        
                        <label for="" title="ASSEGNO DI QUIETANZA - BONIFICI GENERICI  - (48000)">Bonifico</label>
                    </td>
                    <td class="tdright">
                       36,00

                    </td>
                    <td>
                         EUR
                    </td>
                    <td class="tdleftWrap">
                        
                    </td>
                    <td>
                        
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
           Totale: 4
       </td>
       <td nowrap="nowrap" id="PagerActions" class="right">
           <table cellpadding="0" cellspacing="0" class="old-inputForm">
               <tbody>
                   <tr>
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.EsitiPagEPViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.EsitiPagEPViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.EsitiPagEPViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: EsitiPagEPViewModel.PaginaRichiesta, minValue: 1, maxValue: 1, fallbackValue : 1" id="EsitiPagEPViewModel_PaginaRichiesta" maxlength="4" name="EsitiPagEPViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 1</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.EsitiPagEPViewModel.CanGo, singleClick: function(){rootViewModel.EsitiPagEPViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.EsitiPagEPViewModel.CanGoToNext, singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToNext(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.EsitiPagEPViewModel.CanGoToLast, singleClick: function(){ rootViewModel.EsitiPagEPViewModel.GoToLast(); }" style="display: none;"></a></td>
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
                                            $(function () { RegisterViewModel("EsitiPagEPViewModel",{"PiazzaturaStipendio":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataInvio":{"From":null,"To":null},"DataEsecuzione":{"From":null,"To":null},"Importo":{"From":null,"To":null},"TipoDato":null,"EsitoNonIncrociato":false,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":4,"OrdinamentoDirezione":2}, true);
            var root = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio;
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
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda(),
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca(),
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto());
        
            var cmbAzienda = $('#EsitiPagEPViewModel_PiazzaturaStipendio_IdAzienda');
            var cmbBanca = $('#EsitiPagEPViewModel_PiazzaturaStipendio_ABIBanca');
            var cmbRapporto = $('#EsitiPagEPViewModel_PiazzaturaStipendio_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda();
                    var selectedBanca = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca();
                    var selectedRapporto = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto();

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

                communicationSendObject('/anchise.web/ESITI/EsitiBIT/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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

                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.CodiceSia(emptySIA);
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.CodiceCuc(emptyCUC);
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdBanca(emptyIdBanca);
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.CodiceCuc(azienda.CodiceCUC);
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
                        rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdBanca(banca.Id);
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

                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        
                             //debugger;
                             var piazz = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda() == '' &&
                                         rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca() == '' &&
                                         rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.HasRapporti() && (rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdAzienda() != '' ||
                                         rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.ABIBanca() != '' ||
                                         rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio.IdRapporto() != '');
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBIT/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBIT/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/ESITI/EsitiBIT/FilterReset?trk=empty');
                             };
                         
                             var piazz = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
                             var piazzaturaViewModel = rootViewModel.EsitiPagEPViewModel.PiazzaturaStipendio;
                             piazzaturaViewModel.PiazzaturaIdRapportoEnabled = ko.computed(
                                 function() {
                                     var esitoNonIncrociato = rootViewModel.EsitiPagEPViewModel.EsitoNonIncrociato();
                                     return !esitoNonIncrociato;
                                 }
                             );
                         
              var root = rootViewModel.EsitiPagEPViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.EsitiPagEPViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                  
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageSetItemsPerPage?trk=empty', 'EsitiPagEPViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/anchise.web/ESITI/EsitiBIT/PageSetItemsPerPage?trk=empty');
                  }
              };
    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EsitiPagEPViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EsitiPagEPViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty', 'EsitiPagEPViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/ESITI/EsitiBIT/SortApply?trk=empty');
                         }
                        };
                    
        var root = rootViewModel.EsitiPagEPViewModel;
        root.GoToDettaglio = function(idRapporto, idAzienda, idEsito, idDisposizione) {
            var action = '/anchise.web/ESITI/DettaglioEsitoBIT/DettaglioEsito?trk=empty';
            var FiltriRicercaDettaglioEsitoPagEP = {
                idRapporto: idRapporto,
                idAzienda : idAzienda,
                idEsito: idEsito,
                idDisposizione: idDisposizione
            };

            //alert("idRapporto: " + idRapporto + " - idEsito: " + idEsito + " - idDisposizione:" + idDisposizione);

            communicationLoad(action,  FiltriRicercaDettaglioEsitoPagEP, true);
        };
    
         var root = rootViewModel.EsitiPagEPViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() != 1) && (rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() >= 1) && (rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() <= 1);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() < 1;
                 var canGoToNext = 1 < 1;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.EsitiPagEPViewModel.PaginaRichiesta() != 1;
                 var canGoToLast = 1 != 1;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageGoToFirst?trk=empty', 'EsitiPagEPViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/ESITI/EsitiBIT/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '1';
             rootViewModel.EsitiPagEPViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageGoToLast?trk=empty', 'EsitiPagEPViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/ESITI/EsitiBIT/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.EsitiPagEPViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageGoToNext?trk=empty', 'EsitiPagEPViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiBIT/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.EsitiPagEPViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageGoToPrevious?trk=empty', 'EsitiPagEPViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiBIT/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/ESITI/EsitiBIT/PageGoTo?trk=empty', 'EsitiPagEPViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/ESITI/EsitiBIT/PageGoTo?trk=empty');
             }
         };

     
        var root = rootViewModel.EsitiPagEPViewModel;
            root.GoToRicercaPerPDF = function() {
            var action = '/anchise.web/ESITI/EsitiBIT/GoToIndexPDF?trk=empty';
            var objectToSend = ko.mapping.toJS(root);
            communicationLoad(action, objectToSend, true);
        };
    UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/ESITI/EsitiBIT?trk=empty');
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 282.5px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=77">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>