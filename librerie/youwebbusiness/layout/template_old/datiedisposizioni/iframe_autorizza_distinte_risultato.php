<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head></head>
<body>      
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
        Autorizza Distinte
    <a id="helpButton" class="helplink"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1>
</div>

            <table class="toolbar" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                <tbody>
                        <tr>
                            <td width="50%">
                                &nbsp;
                            </td>
                            <td>
                                         <table class="piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>Rag. Soc./ Intestatario</td>
                <td>Banca</td>
               
            </tr>
            <tr>
                <td class="azienda">
                    <span data-bind="enable: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.PiazzaturaIdAziendaEnabled">
<select data-bind="value: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda" id="RicercaFirmaDistintaViewModel_PiazzaturaRicercaDistinta_IdAzienda" name="RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda" style="width: 350px" class="new-form-control azienda"><option value="">TUTTI</option><option value="588536">C.P.C. INOX SPA</option></select>                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.PiazzaturaAbiBancaEnabled">
<select data-bind="value: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca" id="RicercaFirmaDistintaViewModel_PiazzaturaRicercaDistinta_ABIBanca" name="RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca" style="width: 350px" class="new-form-control banca"><option value="">TUTTI</option><option value="05584">05584 - BANCA POPOLARE DI MILANO S.P.A.</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>                    </span>
                </td>
               
            </tr>
        </tbody></table>

                            </td>
                            <td>
                                <table class="filter-toolbar piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="font-weight: bold;">
                                                Stato
                                            </td>
                                            <td style="font-weight: bold;">
                                                Tipo dispositivo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="middle">
                                                <select data-bind="value: RicercaFirmaDistintaViewModel.IdStatoDistinta" id="RicercaFirmaDistintaViewModel_IdStatoDistinta" name="RicercaFirmaDistintaViewModel.IdStatoDistinta" class="new-form-control"><option value="">TUTTI</option>
<option value="1">Da autorizzare</option>
<option value="2">Autorizzata</option>
<option value="3">Confermata</option>
<option value="5">Parzialmente autorizzata</option>
</select>
                                            </td>
                                            <td valign="middle">
                                                <select data-bind="value: RicercaFirmaDistintaViewModel.IdTipoDispositivo" id="RicercaFirmaDistintaViewModel_IdTipoDispositivo" name="RicercaFirmaDistintaViewModel.IdTipoDispositivo" class="new-form-control"><option value="">TUTTI</option>
<option value="10">Allineamento Archivi</option>
<option value="11">Allineamento Archivi IBAN</option>
<option value="174">Allineamento SEDA</option>
<option value="201">Assegni Circolari</option>
<option value="202">Assegni di Quietanza</option>
<option value="100">Bollettino Bancario</option>
<option value="151">Bonifici SEPA</option>
<option value="103">Bonifico Estero</option>
<option value="42">Effetti Impagati</option>
<option value="207">Elcos/Ribes</option>
<option value="208">Euroincassi</option>
<option value="171">Incassi Direct Debit</option>
<option value="205">Incassi Estero</option>
<option value="4">M.Av</option>
<option value="209">MT101 Request for Transfer</option>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.FilterRefresh(); }, css:{ inactive: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.piazzaturaUnChanged}, enable: RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.piazzaturaChanged"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.FilterGoTo(); }, css:{ advanced: rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.isFilterAdvanceSet}"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.FilterReset(); }"><img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
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
                   <td style="width:20px;cursor:pointer;"><a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExport('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/ExportAsPdf?trk=empty');"><img src="/librerie/youwebbusiness/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></td>
                  
           </tr>
       </tbody>
   </table>
<!-- /div -->


                            </td>
                            <td width="50%">
                                &nbsp;
                            </td>
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
        Distinte per pagina:
            <span class="rpp-current">10</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetItemsPerPageAndGo('20');}">20</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetItemsPerPageAndGo('50');}">50</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetItemsPerPageAndGo('100');}">100</span>
    </span>

                                    
<span class="help">
    
</span>

<script type="text/javascript">
    $(document).ready(function () {
        $("#helpButton").click(function (e) {
            e.preventDefault();
            var href = '/ibbweb2/newstyle/static/help/it/firma/ElencoDistinte.htm';
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
                    <th style="width: 210px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Rag. Soc./Intestatario
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(1, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(1, 2);}">
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
                <td colspan="2">Tipo dispositivo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(2, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(2, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 80px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Creata il
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(3, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down-active" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(3, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 50px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Ordini
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(4, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(4, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 120px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Importo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(5, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.SetSortData(5, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 30px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Divisa
                </td>
            </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 40px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">ABI
                </td>
            </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 40px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">CAB
                </td>
            </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 100px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Conto
                </td>
            </tr>
        </tbody>
    </table>

                    </th>
                    <th style="width: 90px;">
                            <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Stato
                </td>
            </tr>
        </tbody>
    </table>

                    </th>
                    
                    <th style="width: 80px;">
                        Autorizza
                        <br>
                        <input type="checkbox" id="selezioneMultipla">
                    </th>
                </tr>
            </thead>
            <tbody>
                        <tr class="treven">
                            <td class="tdleftWrap">
                                C.P.C. INOX SPA
                            </td>
                            <td class="tdleftWrap">
                                Bonifici SEPA
                            </td>
                                <td>
                                    <span class="link" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.NavigateTo(151, 588536, 33586852, 124776857, 'XBN', 1, 499502178);}">
                                        25/10/2017
                                    </span>
                                </td>
                            <td>
                                3
                            </td>
                            <td class="tdright">
                                600,00
                            </td>
                            <td>
                                EUR
                            </td>
                            <td>
                                05034
                            </td>
                            <td>
                                33473
                            </td>
                            <td>
                                000000011905                                      
                            </td>
                            <td>Da autorizzare</td>
                            
                            <td>
                                    <input type="checkbox" name="IdDistintaDaFirmare" value="33586852" data-segnalazione="" data-msgsegnalazione="Missing resource: [MSG_DB_SEGNALAZIONI_UTENTE_DESC_ - Default]" data-checkboxgroup="chkgroup_33586852" data-fullpropertyname="rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaFirmare" data-bind="checked: RicercaFirmaDistintaViewModel.IdDistinteDaFirmare">
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
<form id="formLegacy" method="POST" action=""></form>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tdcenter Comandi">
                                
                            </td>
                        </tr>
                        <tr>
                            <td nowrap="nowrap">
                                <div class="paging">
                                        <table class="pager" cellpadding="0" cellspacing="0">
   <tbody><tr style="height: 16px;">
       <td id="PagerTotal">
           Totale: 1
       </td>
       <td nowrap="nowrap" id="PagerActions" class="right">
           <table cellpadding="0" cellspacing="0" class="old-inputForm">
               <tbody>
                   <tr>
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.RicercaFirmaDistintaViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.RicercaFirmaDistintaViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.RicercaFirmaDistintaViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: RicercaFirmaDistintaViewModel.PaginaRichiesta, minValue: 1, maxValue: 1, fallbackValue : 1" id="RicercaFirmaDistintaViewModel_PaginaRichiesta" maxlength="4" name="RicercaFirmaDistintaViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 1</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.RicercaFirmaDistintaViewModel.CanGo, singleClick: function(){rootViewModel.RicercaFirmaDistintaViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.RicercaFirmaDistintaViewModel.CanGoToNext, singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.GoToNext(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.RicercaFirmaDistintaViewModel.CanGoToLast, singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.GoToLast(); }" style="display: none;"></a></td>
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
        </div><div class="new-buttons"><input type="button" class="ank-btn btn" id="btnEliminaDistinta" value="Conferma" data-bind="singleClick: function(){ rootViewModel.RicercaFirmaDistintaViewModel.Confirm(); }"></div></div>
        <!-- Feedback ELIMINA completed-->
        <div id="eliminazioneCompleted" class="container new-riquadro" style="display: none;">
        </div>
        <!-- Feedback FIRMA completed-->
        <div id="firmaCompleted" style="display: none;">
            <div class="confirmed">
                <table cellpadding="0" cellspacing="0" class="old-inputForm">
                    <thead>
                        <tr class="head-title">
                            <td>
                                Missing resource: [RicercaFirmaDistinta.FirmaCompleted.Header - Default]
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Missing resource: [RicercaFirmaDistinta.FirmaCompleted.Description - Default]
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input id="ank-btn-ok" type="button" value="Missing resource: [RicercaFirmaDistinta.FirmaCompleted.OK - Default]" data-bind="singleClick: function(){ KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaDistinte/Ricerca');}" class="btn">
                                <input id="ank-btn-sign" type="button" value="Missing resource: [RicercaFirmaDistinta.FirmaCompleted.Sign - Default]" data-bind="singleClick: function(){ KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaDistinte/Ricerca');}" class="btn">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form id="formLegacy" method="POST" action=""></form>
    
<script type="text/javascript">
                                            $(function () { RegisterViewModel("RicercaFirmaDistintaViewModel",{"PiazzaturaRicercaDistinta":{"IdAzienda":588536,"ABIBanca":null,"IdRapporto":null},"IdTipoDispositivo":null,"Importo":{"From":null,"To":null},"DataCreazione":{"From":null,"To":null},"CheckValidita":0,"IdStatoDistinta":1,"ListaStatiDistinta":null,"IdDistinteDaDisaggregare":[],"IdDistinteDaCopiare":[],"IdDistinteDaEliminare":[],"IdDistinteDaFirmare":[],"IdAziendaSelected":0,"LegacyParameters":null,"LegacyCodiceSIA":null,"LegacyIdBanca":null,"LegacyFirst_item_count":null,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":3,"OrdinamentoDirezione":2}, true);
             var root = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta; 
             if (root.CodiceSia == undefined) { 
                root.CodiceSia = ko.observable('');
             }
             
             if (root.IdBanca == undefined) { 
                root.IdBanca = ko.observable('');
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
                rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda(),
                rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca(),
                rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdRapporto());
    
             var cmbAzienda = $('#RicercaFirmaDistintaViewModel_PiazzaturaRicercaDistinta_IdAzienda');
             var cmbBanca = $('#RicercaFirmaDistintaViewModel_PiazzaturaRicercaDistinta_ABIBanca');
            
             /*
              Change combo
             */
             function registerChangeCombo() {
                 cmbAzienda.change(function () {
                     var selectedAzienda = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda();
                
                     initializePiazzatura(selectedAzienda,"","");
                 });
        
                 cmbBanca.change(function () {
                     var selectedAzienda = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda();
                     var selectedBanca = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca();
                   
                     initializePiazzatura(selectedAzienda,selectedBanca,"");
                 });
             }
            
             function unregisterChangeCombo() {
                 cmbAzienda.unbind('change');
                 cmbBanca.unbind('change');
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

                 communicationSendObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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
                 var emptyIdBanca = '';
                 rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.CodiceSia(emptySIA);
                 rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdBanca(emptyIdBanca);
            
                 $.each(aziende, function (index, azienda) {
                     var option = $('<option></option>')
                         .val(azienda.IdAzienda)
                         .text(azienda.RagioneSociale);
                     cmbAzienda.append(option);
                
                     if (azienda.IdAzienda == piazzatura.IdAzienda) {
                         rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.CodiceSia(azienda.CodiceSIA);
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
                        rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdBanca(banca.Id);
                    }
                 });
                 // bug ie7
                 cmbBanca.removeClass("banca").addClass("banca");
            
                 rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda(piazzatura.IdAzienda);
                 rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca(piazzatura.ABIBanca);
                 rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdRapporto(piazzatura.IdRapporto);
                
                 UpdateViewModelBinding();
             }
         
        var piazz = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta;
        piazz.piazzaturaUnChanged = ko.computed(
            function() {
                return rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda() == '588536' &&
                    rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca() == '';
            }
        );
                             
        piazz.piazzaturaChanged = ko.computed(
            function() {
                return rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda() != '588536' ||
                    rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca() != '';
            }
        );

        piazz.FilterRefresh = function() {
            KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/FilterApply?trk=empty');
        };
        
        piazz.FilterGoTo = function() {
            KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/FilterGoTo?trk=empty');
        };
        
        piazz.FilterReset = function() {
            KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/FilterReset?trk=empty');
        };
    
                             var piazz = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
                              var piazz = rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta;
                              piazz.piazzaturaUnChanged = ko.computed(
                                  function() {
                                      return rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda() == '588536' &&
                                             rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca() == '' &&
                                             rootViewModel.RicercaFirmaDistintaViewModel.IdTipoDispositivo() == '' &&
                                             rootViewModel.RicercaFirmaDistintaViewModel.IdStatoDistinta() == '1';
                                  }
                              );

                              piazz.piazzaturaChanged = ko.computed(
                                  function() {
                                       return rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.IdAzienda() != '588536' ||
                                           rootViewModel.RicercaFirmaDistintaViewModel.PiazzaturaRicercaDistinta.ABIBanca() != '' ||
                                           rootViewModel.RicercaFirmaDistintaViewModel.IdTipoDispositivo() != '' ||
                                           rootViewModel.RicercaFirmaDistintaViewModel.IdStatoDistinta() != '1';
                                  }
                              );
                              
                               piazz.FilterRefresh = function() {
                                   if (rootViewModel.RicercaFirmaDistintaViewModel.IdStatoDistinta() == '') {
                                       KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/SommarioAutorizzaDistinte/Ricerca?trk=empty');
                                   } else {
                                       KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/FilterApply?trk=empty');
                                   }
                               };
        
              var root = rootViewModel.RicercaFirmaDistintaViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.RicercaFirmaDistintaViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                  
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageSetItemsPerPage?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageSetItemsPerPage?trk=empty');
                  }
              };
    
                        var root = rootViewModel.RicercaFirmaDistintaViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.RicercaFirmaDistintaViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.RicercaFirmaDistintaViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.RicercaFirmaDistintaViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.RicercaFirmaDistintaViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.RicercaFirmaDistintaViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty', 'RicercaFirmaDistintaViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/SortApply?trk=empty');
                         }
                        };
                    
                    $(document).ready(function() {

                        var root = rootViewModel.RicercaFirmaDistintaViewModel;

                        var navigationUrls = [];

                            navigationUrls["2"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["3"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["4"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["5"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["6"] = { Url: "/ibbweb/dettagliodistintarid", IsLocal: false}; 
                            navigationUrls["7"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["8"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["10"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["11"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["28"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["42"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["63"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["100"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["103"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["104"] = { Url: "/ibbweb/dettdistf24", IsLocal: false}; 
                            navigationUrls["105"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["106"] = { Url: "/ibbweb/dettdistf24", IsLocal: false}; 
                            navigationUrls["151"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["152"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["171"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["174"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["175"] = { Url: "/Anchise2.Web/Autorizzazione/DetailDistintaBridge/Index", IsLocal: true}; 
                            navigationUrls["200"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["201"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["202"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["205"] = { Url: "", IsLocal: false}; 
                            navigationUrls["206"] = { Url: "/ibbweb/dettagliodistintaSL", IsLocal: false}; 
                            navigationUrls["207"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["208"] = { Url: "/ibbweb/dettagliodistinta", IsLocal: false}; 
                            navigationUrls["209"] = { Url: "", IsLocal: false}; 

                        root.NavigateTo = function(tipoDispositivo, intestatario, idSupporto, idSupportoVR2, classeServizio, statoElencoDistinte, rowVersion) {

                            var navigationUrl = navigationUrls[tipoDispositivo].Url;
                            var isLocal = navigationUrls[tipoDispositivo].IsLocal;
                            if (isLocal) {

                                // GoTo Anchise2
                                var detailParameter = {
                                    id: idSupporto,
                                    rowVersion: rowVersion
                                };
                                window.top.location.href = navigationUrl + '?' + $.param(detailParameter, true);
                            } else {
                                var destintationURL = navigationUrl;
                                var paginaBack = '/ibbweb2/firma/dispatchFirmaDistinte.action';

                                var formLegacy = $("#formLegacy");
                                formLegacy.empty();

                                var paginaHidden = $('<input>').attr({ type: 'hidden', name: "pagina", value: paginaBack}); //'/ibbweb2/firma/dispatchFirmaDistinte.action' });
                                formLegacy.append(paginaHidden);

                                var origHidden = $('<input>').attr({ type: 'hidden', name: "orig", value: 2800 });
                                formLegacy.append(origHidden);

                                var idFuncHidden = $('<input>').attr({ type: 'hidden', name: "id_Func_Action", value: '2800' });
                                formLegacy.append(idFuncHidden);



                                var tipoHidden = $('<input>').attr({ type: 'hidden', name: "TIPO", value: tipoDispositivo });
                                formLegacy.append(tipoHidden);

                                var bancaHidden = $('<input>').attr({ type: 'hidden', name: "banca", value: '*' });
                                formLegacy.append(bancaHidden);

                                var intestatarioHidden = $('<input>').attr({ type: 'hidden', name: "intestatario", value: intestatario });
                                formLegacy.append(intestatarioHidden);

                                var firstItemHidden = $('<input>').attr({ type: 'hidden', name: "first_item_count", value: 1 });
                                formLegacy.append(firstItemHidden);

                                var supportoHidden = $('<input>').attr({ type: 'hidden', name: "id_supporto_disp", value: idSupportoVR2 });
                                formLegacy.append(supportoHidden);

                                var idHidden = $('<input>').attr({ type: 'hidden', name: "id", value: idSupporto });
                                formLegacy.append(idHidden);

                                var maxItemsHidden = $('<input>').attr({ type: 'hidden', name: "max_items_number", value: '' });
                                formLegacy.append(maxItemsHidden);

                                var orderByHidden = $('<input>').attr({ type: 'hidden', name: "order_by_option", value: 'importo=asc' });
                                formLegacy.append(orderByHidden);


                                var statoElencoHidden = $('<input>').attr({ type: 'hidden', name: "stato_elenco_distinte", value: statoElencoDistinte });
                                formLegacy.append(statoElencoHidden);


                                var siaHidden = $('<input>').attr({ type: 'hidden', name: "sia", value: '' });
                                formLegacy.append(siaHidden);

                                var filtroBancaHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.banca", value: '' });
                                formLegacy.append(filtroBancaHidden);

                                var filtroAbiHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.abiPass", value: '' });
                                formLegacy.append(filtroAbiHidden);

                                var filtroComboHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.idComboBanca", value: '' });
                                formLegacy.append(filtroComboHidden);

                                var filtroStatoHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.statoDistinta", value: '' });
                                formLegacy.append(filtroStatoHidden);

                                var filtroAvanzateHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.statoAvanzate", value: '' });
                                formLegacy.append(filtroAvanzateHidden);


                                var firmaDistinteHidden = $('<input>').attr({ type: 'hidden', name: "listaFirmaDistinte.action", value: 'Visualizza' });
                                formLegacy.append(firmaDistinteHidden);

                                var esitiPageSizeHidden = $('<input>').attr({ type: 'hidden', name: "esitiPageSize", value: '10' });
                                formLegacy.append(esitiPageSizeHidden);

                                var esitiOffsetHidden = $('<input>').attr({ type: 'hidden', name: "esitiOffset", value: '0' });
                                formLegacy.append(esitiOffsetHidden);

                                var filtroFirmaAziendaHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.idAzienda", value: '' });
                                formLegacy.append(filtroFirmaAziendaHidden);

                                var filtroFirmSortaHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.sort", value: 'DCREDST' });
                                formLegacy.append(filtroFirmSortaHidden);

                                var filtroClasseServizioHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.classeServizio", value: classeServizio });
                                formLegacy.append(filtroClasseServizioHidden);

                                var importoDa = rootViewModel.RicercaFirmaDistintaViewModel.Importo.From();
                                if (importoDa == null) {
                                    importoDa = '';
                                }

                                var importoDaHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.importoDa", value: importoDa });
                                formLegacy.append(importoDaHidden);

                                var importoA = rootViewModel.RicercaFirmaDistintaViewModel.Importo.To();
                                if (importoA == null) {
                                    importoA = '';
                                }

                                var importoAHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.importoA", value: importoA });
                                formLegacy.append(importoAHidden);

                                var dataCreazioneDaHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.dataCreazioneDa", value: '' });
                                formLegacy.append(dataCreazioneDaHidden);

                                var dataCreazioneAHidden = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.dataCreazioneA", value: '' });
                                formLegacy.append(dataCreazioneAHidden);

                                var firmaPageNumberNameHidden = $('<input>').attr({ type: 'hidden', name: "firmaPageNumberName", value: 'd-148278-p' });
                                formLegacy.append(firmaPageNumberNameHidden);

                                var firmaPageNumberValueHidden = $('<input>').attr({ type: 'hidden', name: "firmaPageNumberValue", value: '1' });
                                formLegacy.append(firmaPageNumberValueHidden);

                                var firmaSortColumnNameHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortColumnName", value: 'd-148278-s' });
                                formLegacy.append(firmaSortColumnNameHidden);

                                var firmaSortColumnValueHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortColumnValue", value: 'DCREDST' });
                                formLegacy.append(firmaSortColumnValueHidden);

                                var firmaSortModeParamNameHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortModeParamName", value: 'd-148278-n' });
                                formLegacy.append(firmaSortModeParamNameHidden);

                                var firmaSortModeParamValueHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortModeParamValue", value: '1' });
                                formLegacy.append(firmaSortModeParamValueHidden);

                                var firmaSortOrderNameHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortOrderName", value: 'd-148278-o' });
                                formLegacy.append(firmaSortOrderNameHidden);

                                var firmaSortOrderValueHidden = $('<input>').attr({ type: 'hidden', name: "firmaSortOrderValue", value: '1' });
                                formLegacy.append(firmaSortOrderValueHidden);

                                formLegacy.attr("action", destintationURL);
                                formLegacy.submit();
                            }
                        };
                    });
                
                                 $('[name="IdDistintaDaFirmare"]').click(function () {

                                     var isChecked = $(this).prop("checked");
                                     if (isChecked) {
                                         // debugger;
                                         var segnalazione = $(this).data("segnalazione");
                                         var msgSegnalazione = $(this).data("msgsegnalazione");
                                         var canProceed = true;
                                         if (isError(segnalazione)) {
                                             // errore
                                             alert(msgSegnalazione);
                                             canProceed = false;
                                         }

                                         if (isWarning(segnalazione)) {
                                             // warning
                                             if (!confirm(msgSegnalazione)) {
                                                 canProceed = false;
                                             }
                                         }

                                         if (!canProceed) {
                                             // debugger;
                                             $(this).prop("checked", false);
                                             var idDisposizione = $(this)[0].value;
                                             var fullpropertyname = $(this).data("fullpropertyname");
                                             var propertiesArray = eval(fullpropertyname);
                                             removeFromArray(idDisposizione, propertiesArray);
                                         }
                                     }
                                 });

                                 function isError(segnalazione) {
                                     return segnalazione.toLowerCase().indexOf("kr") > -1;
                                 }

                                 function isWarning(segnalazione) {
                                     return segnalazione.toLowerCase().indexOf("wc") > -1 || segnalazione.toLowerCase().indexOf("wr") > -1;
                                 }

                                 $("input[data-checkboxgroup]").click(function () {
                                     var groupName = $(this).data("checkboxgroup");
                                     var selector = $('input[data-checkboxgroup="' + groupName + '"]');
                                     enforceMutualExcludedCheckBox($(this), selector);
                                 });

                                 $('#selezioneMultipla').click(function () {

                                     var fnAddIfNotPresent = function (value, list) {
                                         if (list == null)
                                             return;
                                         if (list.indexOf(value) === -1)
                                             list.push(value);
                                     };


                                     var toRet = true;
                                     var selectAll = $(this).prop("checked");
                                     if (selectAll) {
                                         var toRet = checkSelectAll();
                                         var msg = '';
                                         if (toRet.errors != 0) {
                                             msg = msg + 'Attenzione! La selezione comprende una o più distinte con data esecuzione precedente alla data odierna. Per la loro tipologia, tali distinte non saranno selezionate perché non è possibile inviarle senza aver modificato la data.';
                                         }
                                         if (toRet.warnings != 0) {
                                             if (msg != '')
                                                 msg = msg + "\n\n";
                                             msg = msg + 'Attenzione! La selezione comprende anche una o più distinte con data esecuzione precedente alla data odierna. Per la loro tipologia, tali distinte possono essere comunque autorizzate. Si desidera procedere mantenendone la selezione?';
                                         }

                                         if (msg != '') {
                                             if (toRet.warnings != 0) {
                                                 toRet = confirm(msg);
                                                 selectAll = toRet;
                                             }
                                             else
                                                 alert(msg);
                                         }
                                     }

                                     var propertiesArray = null;
                                     if (selectAll) {
                                         // seleziono i "non selezionati" senza errore
                                         $('[name="IdDistintaDaFirmare"]').each(function (index, item) {
                                             var tmpItem = $(item);
                                             var isChecked = tmpItem.prop("checked");
                                             if (!isChecked) {
                                                 var segnalazione = tmpItem.data("segnalazione");
                                                 if (!isError(segnalazione)) {
                                                     tmpItem.prop('checked', 'checked');
                                                     var idDisposizione = tmpItem[0].value;
                                                     if (!propertiesArray) {
                                                         var fullpropertyname = tmpItem.data("fullpropertyname");
                                                         propertiesArray = eval(fullpropertyname);
                                                     }
                                                     fnAddIfNotPresent(idDisposizione, propertiesArray);
                                                 }

                                             }
                                         });

                                     } else {
                                         // deseleziona tutto
                                         $('[name="IdDistintaDaFirmare"]').each(function (index, itemEach) {
                                             var item = $(itemEach);
                                             item.prop("checked", false);
                                             var idDisposizione = item[0].value;
                                             if (!propertiesArray) {
                                                 var fullpropertyname = item.data("fullpropertyname");
                                                 propertiesArray = eval(fullpropertyname);
                                             }
                                             removeFromArray(idDisposizione, propertiesArray);
                                         });

                                     }
                                     return toRet;
                                 });

                                 function checkSelectAll() {
                                     var toRet = {
                                         warnings: 0,
                                         errors: 0
                                     };

                                     $('[name="IdDistintaDaFirmare"]').each(function (index, item) {
                                         var tmpItem = $(item);
                                         var isChecked = tmpItem.prop("checked");
                                         if (!isChecked) {
                                             var segnalazione = tmpItem.data("segnalazione");
                                             if (isError(segnalazione))
                                                 toRet.errors++;
                                             if (isWarning(segnalazione))
                                                 toRet.warnings++;
                                         }
                                     });

                                     return toRet;
                                 }


         var root = rootViewModel.RicercaFirmaDistintaViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() != 1) && (rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() >= 1) && (rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() <= 1);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() < 1;
                 var canGoToNext = 1 < 1;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta() != 1;
                 var canGoToLast = 1 != 1;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToFirst?trk=empty', 'RicercaFirmaDistintaViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '1';
             rootViewModel.RicercaFirmaDistintaViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToLast?trk=empty', 'RicercaFirmaDistintaViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.RicercaFirmaDistintaViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToNext?trk=empty', 'RicercaFirmaDistintaViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.RicercaFirmaDistintaViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToPrevious?trk=empty', 'RicercaFirmaDistintaViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoTo?trk=empty', 'RicercaFirmaDistintaViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte/PageGoTo?trk=empty');
             }
         };

     
    $(document).ready(function() {
        $("#eliminazioneCompleted").hide();
        $("#firmaCompleted").hide();

        var root = rootViewModel.RicercaFirmaDistintaViewModel;

        var distinte = {};
                    
        var distintaObj = {
            IdTipologiaDisposizione: '151',
            NumeroDisposizioni: 3,
            CodiceAbi: '05034',
            IdStato: 1,
            NumeroConto: '000000011905                                      ',
            Id: '33586852',
            IDSupportoVR2: '124776857'
        }

        distinte["33586852"] = distintaObj; //{"Id":33586852,"RowVersion":499502178,"IDSupportoVR2":124776857,"DataCreazione":"2017-10-25T09:53:54.263","DataSpedizione":null,"DataConferma":null,"OraConferma":null,"OraSpedizione":null,"Firmatari":null,"Importo":{"Valore":600.00,"CodiceDivisa":"EUR","CodiceSegno":1},"CoordinateCC":{"CodiceAbi":"05034","CodiceCab":"33473","NumeroConto":"000000011905                                      ","NickName":""},"IdAzienda":588536.0,"RagioneSociale":"C.P.C. INOX SPA","NumeroDisposizioni":3,"TipoDispositivo":{"IdTipologiaDisposizione":151,"IdRes":"MSG_DB_DISPOSIZIONE_TIPOLOGIA_DESC_151","FunctionId":0},"StatoDistinta":{"IdStato":1,"IdRes":"MSG_DB_STATI_DISTINTA_DESC_1"},"FlagIBAN":null,"Check":null,"CodSIAMittente":null,"NomeSupporto":null,"IdDisposizioni":null,"Flusso":null,"DescrizioneBanca":null,"AbilitazioneFirma":true,"AbilitazioneVisualizzaDettaglio":true,"SegnalazioneUtenteDesc":null,"StatoDistintaDesc":null,"TipoDispositivoDesc":null,"SegnalazioniUtenteId":"","SegnalazioniUtenteIdRes":"MSG_DB_SEGNALAZIONI_UTENTE_DESC_"};
        

        root.Confirm = function() {
            var idDistinteDaEliminare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaEliminare();
            var idDistinteDaFirmare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaFirmare();

            if (idDistinteDaEliminare.length > 0 && idDistinteDaFirmare.length > 0) {
                alert('Selezionare solo operazioni dello stesso tipo');
            } else {
                var wf = jsWorklow({
                    steps: [
                        { method: eliminaDistinte, onSuccess: { method: onEliminazioneDistinteSuccess, priority: 1 } },
                        { method: firmaDistinte, onSuccess: { method: onFirmaDistinteSuccess, priority: 2 } }],
                    compensation: function() {
                        onCompensation();
                    }});

                wf.start();
            }

        };

        function eliminaDistinte(wfCtx, index, stepCtx) {
            var idDistinteDaEliminare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaEliminare();
            if (idDistinteDaEliminare.length == 0) {
                wfCtx.next(false);
            }
            else {
                if (confirm('Confermi l eliminazione degli elementi selezionati?')) {
                    communicationSendObject('/librerie/youwebbusiness/anchise.web/DISTINTE/ListDistinteOperation/EliminaDistinte?trk=empty', ko.mapping.toJS(root), function(data) { onEliminazioneDistinte(wfCtx, data); });
                } else {
                    wfCtx.end();
                }
            }
        }

        function onEliminazioneDistinte(wfCtx, data) {
            $("#eliminazioneCompleted").html(data);
            var idDistinteDaEliminareProperty = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaEliminare;
            idDistinteDaEliminareProperty.removeAll();
            wfCtx.next(true);
        }


        function onEliminazioneDistinteSuccess(wfContext) {
            $("#search").hide();
            $('#btnEliminaDistinta').hide();
            $("#eliminazioneCompleted").show();
        }

        function firmaDistinte(wfCtx, index, stepCtx) {
            var idDistinteDaFirmare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaFirmare();
            if (idDistinteDaFirmare.length == 0) {
                wfCtx.next(false);
            }
            else {

                var maxNum = '20';
                var maxDispo = '23000';
                if (idDistinteDaFirmare.length > maxNum) {
                    var msg = 'Attenzione!E\&#39; possibile autorizzare fino a %N% distinte contemporaneamente';
                    alert(msg.replace('%N%', maxNum));
                    wfCtx.next(false);
                    return;
                }
                var numDisposizioni = 0;
                //debugger;
                var idTipo = rootViewModel.RicercaFirmaDistintaViewModel.IdTipoDispositivo();

                var href = "/ibbweb/insertcarnet?urlFrom=autorizza&fromNew=1&TIPO=" + idTipo + "&firmaPageNumberName=d-148278-p&firmaPageNumberValue=1&firmaSortColumnName=d-148278-s&firmaSortColumnValue=DCREDST&firmaSortModeParamName=d-148278-n&firmaSortModeParamValue=1&firmaSortOrderName=d-148278-o&firmaSortOrderValue=1&firmaEsitiPageSize=10";
                var formLegacy = $("#formLegacy");
                formLegacy.empty();

                var elencoId = '';
                var elencoTypeid = '';
                idDistinteDaFirmare.forEach(function(idDistinta) {
                    // debugger;
                    var distintaDaFirmare = distinte[idDistinta];
                    var idSupporto = distintaDaFirmare.IDSupportoVR2;

                    elencoId = elencoId + idSupporto + '|';
                    elencoTypeid = elencoTypeid + idSupporto + ':' + distintaDaFirmare.IdTipologiaDisposizione + '|';

                    var fHidden43 = $('<input>').attr({ type: 'hidden', name: idSupporto, value: 'firm' });
                    formLegacy.append(fHidden43);

                    var fHidden44 = $('<input>').attr({ type: 'hidden', name: 'dispo_' + idSupporto, value: distintaDaFirmare.NumeroDisposizioni });
                    formLegacy.append(fHidden44);

                    var fHidden45 = $('<input>').attr({ type: 'hidden', name: 'row_abi_' + idSupporto, value: distintaDaFirmare.CodiceAbi });
                    formLegacy.append(fHidden45);

                    var fHidden46 = $('<input>').attr({ type: 'hidden', name: 'stato_' + idSupporto, value: distintaDaFirmare.IdStato });
                    formLegacy.append(fHidden46);

                    var fHidden47 = $('<input>').attr({ type: 'hidden', name: 'multiconto_' + idSupporto, value: distintaDaFirmare.NumeroConto });
                    formLegacy.append(fHidden47);

                    var fHidden48 = $('<input>').attr({ type: 'hidden', name: 'codtipodisp_' + idSupporto, value: distintaDaFirmare.IdTipologiaDisposizione });
                    formLegacy.append(fHidden48);
                    numDisposizioni += distintaDaFirmare.NumeroDisposizioni;
                });
                if (numDisposizioni > maxDispo) {
                    var msg = 'Attenzione! E&#39; possibile autorizzare contemporaneamente fino a %N% disposizioni. Diminuire il numero di distinte da autorizzare contemporaneamente.';

                    alert(msg.replace('%N%', maxDispo));
                    wfCtx.next(false);
                    return;
                }
                elencoId = elencoId.substring(0, elencoId.length - 1);
                elencoTypeid = elencoTypeid.substring(0, elencoTypeid.length - 1);

                var fHidden1 = $('<input>').attr({ type: 'hidden', name: "id", value: elencoId });
                formLegacy.append(fHidden1);

                var fHidden2 = $('<input>').attr({ type: 'hidden', name: "typeids", value: elencoTypeid });
                formLegacy.append(fHidden2);

                var fHidden3 = $('<input>').attr({ type: 'hidden', name: "paginaDiProvenienza", value: '/ibbweb2/dispatchFirmaDistinte.action' });
                formLegacy.append(fHidden3);

                var fHidden4 = $('<input>').attr({ type: 'hidden', name: "orig", value: '2800' });
                formLegacy.append(fHidden4);

                var fHidden5 = $('<input>').attr({ type: 'hidden', name: "banca", value: '' });
                formLegacy.append(fHidden5);

                var fHidden6 = $('<input>').attr({ type: 'hidden', name: "rapporto", value: '' });
                formLegacy.append(fHidden6);

                var fHidden7 = $('<input>').attr({ type: 'hidden', name: "title", value: '' });
                formLegacy.append(fHidden7);

                var fHidden8 = $('<input>').attr({ type: 'hidden', name: "abi", value: '' });
                formLegacy.append(fHidden8);

                var fHidden9 = $('<input>').attr({ type: 'hidden', name: "filter_defined", value: 'false' });
                formLegacy.append(fHidden9);

                var fHidden10 = $('<input>').attr({ type: 'hidden', name: "fromElencoDistinte", value: '' });
                formLegacy.append(fHidden10);

                var fHidden11 = $('<input>').attr({ type: 'hidden', name: "stipendi", value: '' });
                formLegacy.append(fHidden11);

                var fHidden12 = $('<input>').attr({ type: 'hidden', name: "next_option", value: '' });
                formLegacy.append(fHidden12);

                var fHidden13 = $('<input>').attr({ type: 'hidden', name: "previous_option", value: '' });
                formLegacy.append(fHidden13);

                var fHidden14 = $('<input>').attr({ type: 'hidden', name: "esitiPageSize", value: '10' });
                formLegacy.append(fHidden14);

                var fHidden15 = $('<input>').attr({ type: 'hidden', name: "sia", value: '' });
                formLegacy.append(fHidden15);

                var fHidden16 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.importoDa", value: '' });
                formLegacy.append(fHidden16);

                var fHidden17 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.importoA", value: '' });
                formLegacy.append(fHidden17);

                var fHidden18 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.dataCreazioneDa", value: '' });
                formLegacy.append(fHidden18);

                var fHidden19 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ricercaDistinta.dataCreazioneA", value: '' });
                formLegacy.append(fHidden19);

                var fHidden20 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.tipoEsito", value: '' });
                formLegacy.append(fHidden20);

                var fHidden21 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.idAzienda", value: '' });
                formLegacy.append(fHidden21);

                var fHidden22 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.banca", value: '' });
                formLegacy.append(fHidden22);

                var fHidden23 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.abiPass", value: '' });
                formLegacy.append(fHidden23);

                var fHidden24 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.idComboBanca", value: '' });
                formLegacy.append(fHidden24);

                var fHidden25 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.statoDistinta", value: '' });
                formLegacy.append(fHidden25);

                var fHidden26 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.classeServizio", value: '' });
                formLegacy.append(fHidden26);

                var fHidden27 = $('<input>').attr({ type: 'hidden', name: "previous_option", value: '' });
                formLegacy.append(fHidden27);

                var fHidden28 = $('<input>').attr({ type: 'hidden', name: "next_option", value: '' });
                formLegacy.append(fHidden28);

                var fHidden29 = $('<input>').attr({ type: 'hidden', name: "first_item_count", value: '1' });
                formLegacy.append(fHidden29);

                var fHidden30 = $('<input>').attr({ type: 'hidden', name: "nomeCampoPagina", value: 'd-148278-p' });
                formLegacy.append(fHidden30);

                var fHidden31 = $('<input>').attr({ type: 'hidden', name: "dtSort", value: 'd-148278-s' });
                formLegacy.append(fHidden31);

                var fHidden32 = $('<input>').attr({ type: 'hidden', name: "d-148278-n", value: '1' });
                formLegacy.append(fHidden32);

                var fHidden33 = $('<input>').attr({ type: 'hidden', name: "d-148278-s", value: 'DCREDST' });
                formLegacy.append(fHidden33);

                var fHidden34 = $('<input>').attr({ type: 'hidden', name: "d-148278-o", value: '1' });
                formLegacy.append(fHidden34);

                var fHidden35 = $('<input>').attr({ type: 'hidden', name: "numrecord", value: '' });
                formLegacy.append(fHidden35);

                var fHidden36 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.ord", value: '' });
                formLegacy.append(fHidden36);

                var fHidden37 = $('<input>').attr({ type: 'hidden', name: "filtroFirma.sort", value: 'DCREDST' });
                formLegacy.append(fHidden37);

                var fHidden38 = $('<input>').attr({ type: 'hidden', name: "esitiListSize", value: '' });
                formLegacy.append(fHidden38);

                var fHidden39 = $('<input>').attr({ type: 'hidden', name: "esitiOffset", value: '0' });
                formLegacy.append(fHidden39);

                var fHidden40 = $('<input>').attr({ type: 'hidden', name: "pagesize", value: '10' });
                formLegacy.append(fHidden40);

                var fHidden41 = $('<input>').attr({ type: 'hidden', name: "tipodispo", value: 'null' });
                formLegacy.append(fHidden41);

                var fHidden42 = $('<input>').attr({ type: 'hidden', name: "s_action", value: 'listaFirmaDistinte.action' });
                formLegacy.append(fHidden42);

                formLegacy.attr("action", href);
                formLegacy.submit();

                //communicationSendObject('/librerie/youwebbusiness/anchise.web/DISTINTE/ListDistinteOperation/FirmaDistinteCarrello?trk=empty', ko.mapping.toJS(root),  function(data) { onFirmaDistinte(wfCtx, data); });
            }
        }

        function onFirmaDistinte(wfCtx, data) {
            $('#firmaCompleted').html(data);
            var idDistinteDaFirmareProperty = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaFirmare;
            idDistinteDaFirmareProperty.removeAll();
            wfCtx.next(true);
        }

        function onFirmaDistinteSuccess(wfCtx) {
            $("#search").hide();
            $("#firmaCompleted").show();
        }

        function onCompensation() {
            var idDistinteDaFirmare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaFirmare();
            var idDistinteDaEliminare = rootViewModel.RicercaFirmaDistintaViewModel.IdDistinteDaEliminare();
            if (idDistinteDaFirmare.length == 0 && idDistinteDaEliminare.length == 0) {
                alert('Nessuna occorrenza selezionata');
            }
        }

        $(document).ready(function() {
            var $window = $(window);

            function checkWidth() {
                var windowsize = $window.width();
                if (windowsize < 1320) {
                    $("body").css({"overflow-x":"visible"});
                } else {
                    $("body").css({"overflow-x":"hidden"});
                }
            }
            checkWidth();
            $(window).resize(checkWidth);
        });
        
    });
        UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/librerie/youwebbusiness/anchise.web/DISTINTE/RicercaAutorizzaDistinte?trk=empty');
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
                            <img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/Images/assistenza-footer.png?v=77">
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
                            <img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/Images/gestore-footer.png?v=77">
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 234px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/librerie/youwebbusiness/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=77">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>