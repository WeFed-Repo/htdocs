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
        Estratto Conto Periodico
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
                    <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaIdAziendaEnabled">
                        <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_IdAzienda" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda" class="new-form-control azienda"><option value="">TUTTI</option><option value="12">CONSORZIO P.R.U. STADIO CONEGL</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select>
                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaAbiBancaEnabled">
                        <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_ABIBanca" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca" class="new-form-control banca"><option value="">TUTTI</option><option value="01030">01030 - BANCA MONTE DEI PASCHI DI SIENA S.P.A.</option><option value="01005">01005 - BANCA NAZIONALE DEL LAVORO SPA</option><option value="05034">05034 - BANCO BPM S.P.A.</option><option value="05387">05387 - BPER BANCA S.P.A.</option><option value="03069">03069 - INTESA SANPAOLO SPA</option><option value="02008">02008 - UNICREDIT SPA</option></select>
                    </span>
                </td>
                <td class="conto">
                    <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaIdRapportoEnabled">
                        <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_IdRapporto" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto" class="new-form-control conto"><option value="">TUTTI</option><option value="1163764">11751-000000000342</option><option value="1338135">11701-000000000626</option><option value="1338134">11700-alias</option><option value="1654446">11702-000000002013</option><option value="2556607">11702-pippo</option><option value="812850">61620-000000004263</option><option value="9055">11700-000000012648</option><option value="1272207">11702-000000036186</option><option value="1272210">11702-alias</option><option value="1276558">11702-000000122821</option><option value="1306091">11751-alias conto 000000365990</option><option value="11493">11701-000000386065</option><option value="11494">11701-000000598345</option><option value="2156215">11701-000000815942</option><option value="1598381">11702-000002366573</option><option value="2563167">11702-000003016271</option><option value="2149560">11758-000104866179</option><option value="2538955">05364-000104866179</option><option value="2149559">11758-000104961280</option><option value="2538954">05364-000104961280</option><option value="2177949">18465-100000001022</option><option value="2177932">18465-100000001175</option><option value="2177539">18465-100000001579</option></select>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.FilterRefresh(); }, css:{ inactive: EstrattiContoViewModel.PiazzaturaEstrattiConto.piazzaturaUnChanged}, enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.FilterGoTo(); }, css:{ advanced: rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
         </tr>
     </tbody>
 </table>


</td>
                        <td>
                            
                        <table class="export-toolbar" style="border-collapse: collapse;border:0px;" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="bottom">
                                    <td>
                                            <span class="export-toolbar" data-bind="enable: rootViewModel.EstrattiContoViewModel.IdEstrattiConto().length >
                                                0, singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToExportPDFMovimentiEC(rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda(), rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca(), rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto());}">
                                                <a title="Stampa" class="ank-icon-export-Pdf"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
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
                        <td nowrap="nowrap">
                            <div class="paging">
                                <span class="spacer">&nbsp;</span>
                                
    <span class="rpp">
        Estratti conto per pagina:
            <span class="rpp-current">10</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.SetItemsPerPageAndGo('20');}">20</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.SetItemsPerPageAndGo('50');}">50</span>
            <span class="rpp-next" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.SetItemsPerPageAndGo('100');}">100</span>
    </span>

                                
<span class="help">
    
</span>

<script type="text/javascript">
    $(document).ready(function () {
        $("#helpButton").click(function (e) {
            e.preventDefault();
            var href = '/ibbweb/newstyle/html/help/AreaInformativa/EstrattiConto/ECperiodico.htm';
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
                <th style="width: auto;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Rag. Soc./ Intestatario
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 41px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">ABI
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 41px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">CAB
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 86px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Conto
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 26px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Div
                </td>
            </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 181px;">
                        <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Periodo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up-active" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.SetSortData(6, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.SetSortData(6, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                </th>
                <th style="width: 61px;">
                    Seleziona
                </th>
            </tr>
        </thead>
        <tbody>
                   <tr class="treven">
                       <td class="tdleftWrap">
                           PIEVE S.R.L.
                       </td>
                       <td>03069
                       </td>
                       <td>18465
                       </td>
                       <td>
                           100000001175
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(2177932, 543159024);}">dal 30/09/2018 al 31/12/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="543159024" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="trodd">
                       <td class="tdleftWrap">
                           SAN FERMO 12 S.R.L.
                       </td>
                       <td>03069
                       </td>
                       <td>18465
                       </td>
                       <td>
                           100000001022
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(2177949, 543159055);}">dal 30/09/2018 al 31/12/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="543159055" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="treven">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000386065
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(11493, 531472420);}">dal 01/10/2018 al 31/10/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="531472420" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="trodd">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000598345
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(11494, 531472421);}">dal 01/10/2018 al 31/10/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="531472421" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="treven">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000815942
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(2156215, 531472422);}">dal 01/10/2018 al 31/10/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="531472422" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="trodd">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000386065
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(11493, 537529318);}">dal 01/11/2018 al 30/11/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="537529318" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="treven">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000598345
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(11494, 537529319);}">dal 01/11/2018 al 30/11/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="537529319" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="trodd">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000815942
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(2156215, 537529320);}">dal 01/11/2018 al 30/11/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="537529320" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="treven">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000386065
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(11493, 543168855);}">dal 01/12/2018 al 31/12/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="543168855" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>
                   <tr class="trodd">
                       <td class="tdleftWrap">
                           SAR.MAR. SPA
                       </td>
                       <td>01030
                       </td>
                       <td>11701
                       </td>
                       <td>
                           000000815942
                       </td>
                       <td>
                           EUR
                       </td>
                       <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToRicercaMovimentiEstrattoEC(2156215, 543168856);}">dal 01/12/2018 al 31/12/2018</span>
                       </td>
                       <td>
                           
                           <input type="checkbox" value="543168856" data-bind="checked: EstrattiContoViewModel.IdEstrattiConto">
                           
                       </td>
                   </tr>

        </tbody>
    </table>
    <table class="comandi" cellpadding="0" cellspacing="0">
        <tbody><tr>
                <td class="Comandi">
                    
                        
                    
                </td>
            </tr>
    </tbody></table>
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
           Totale: 10
       </td>
       <td nowrap="nowrap" id="PagerActions" class="right">
           <table cellpadding="0" cellspacing="0" class="old-inputForm">
               <tbody>
                   <tr>
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.EstrattiContoViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.EstrattiContoViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.EstrattiContoViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: EstrattiContoViewModel.PaginaRichiesta, minValue: 1, maxValue: 1, fallbackValue : 1" id="EstrattiContoViewModel_PaginaRichiesta" maxlength="4" name="EstrattiContoViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 1</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.EstrattiContoViewModel.CanGo, singleClick: function(){rootViewModel.EstrattiContoViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.EstrattiContoViewModel.CanGoToNext, singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToNext(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.EstrattiContoViewModel.CanGoToLast, singleClick: function(){ rootViewModel.EstrattiContoViewModel.GoToLast(); }" style="display: none;"></a></td>
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
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Scarica" data-bind="singleClick: function(){ rootViewModel.EstrattiContoViewModel.DownLoadCBI();}" class="btn"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EstrattiContoViewModel",{"PiazzaturaEstrattiConto":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataInizioEstratto":{"From":null,"To":null},"IdEstrattiConto":[],"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":6,"OrdinamentoDirezione":1}, true);
            var root = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto;
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
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda(),
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca(),
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto());
        
            var cmbAzienda = $('#EstrattiContoViewModel_PiazzaturaEstrattiConto_IdAzienda');
            var cmbBanca = $('#EstrattiContoViewModel_PiazzaturaEstrattiConto_ABIBanca');
            var cmbRapporto = $('#EstrattiContoViewModel_PiazzaturaEstrattiConto_IdRapporto');

            /*
             Change combo
            */
            function registerChangeCombo() {
                cmbAzienda.change(function () {
                    var selectedAzienda = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda();

                    initializePiazzatura(selectedAzienda,"","");
                });

                cmbBanca.change(function () {
                    var selectedAzienda = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda();
                    var selectedBanca = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca();

                    initializePiazzatura(selectedAzienda,selectedBanca,"");
                });

                cmbRapporto.change(function () {
                    var selectedAzienda = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda();
                    var selectedBanca = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca();
                    var selectedRapporto = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto();

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

                communicationSendObject('/anchise.web/RH/EstrattiConto/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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

                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceSia(emptySIA);
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceCuc(emptyCUC);
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdBanca(emptyIdBanca);
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IBAN(emptyIBAN);


                $.each(aziende, function (index, azienda) {
                    var option = $('<option></option>')
                        .val(azienda.IdAzienda)
                        .text(azienda.RagioneSociale);
                    cmbAzienda.append(option);

                    if (azienda.IdAzienda == piazzatura.IdAzienda) {
                        rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceSia(azienda.CodiceSIA);
                        rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceCuc(azienda.CodiceCUC);
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
                        rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdBanca(banca.Id);
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

                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.HasRapporti(rapporti.length != 0);

                $.each(rapporti, function (index, rapporto) {
                    var option = $('<option></option>')
                        .val(rapporto.Id)
                        //.text(rapporto.CoordinateCc.RapportoConto);
                        .text(rapporto.AliasConto);
                    cmbRapporto.append(option);

                    if (rapporto.Id == piazzatura.IdRapporto) {
                        rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IBAN(rapporto.CoordinateCC.IBAN);
                    }
                });

                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda(piazzatura.IdAzienda);
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca(piazzatura.ABIBanca);
                rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto(piazzatura.IdRapporto);

                UpdateViewModelBinding();
            }
        
                             //debugger;
                             var piazz = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto;
                             piazz.piazzaturaUnChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda() == '' &&
                                         rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca() == '' &&
                                         rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto() == '';
                                 }
                             );
                             
                             piazz.piazzaturaChanged = ko.computed(
                                 function() {
                                     return rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.HasRapporti() && (rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda() != '' ||
                                         rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca() != '' ||
                                         rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto() != '');
                                 }
                             );
                             
                             piazz.FilterRefresh = function() {
                                KoGoTo('/anchise.web/RH/EstrattiConto/FilterApply?trk=empty');
                             };
        
                             piazz.FilterGoTo = function() {
                                KoGoTo('/anchise.web/RH/EstrattiConto/FilterGoTo?trk=empty');
                             };
        
                             piazz.FilterReset = function() {
                                KoGoTo('/anchise.web/RH/EstrattiConto/FilterReset?trk=empty');
                             };
                         
                             var piazz = rootViewModel.EstrattiContoViewModel.PiazzaturaEstrattiConto;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         
              var root = rootViewModel.EstrattiContoViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.EstrattiContoViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.EstrattiContoViewModel.PaginaRichiesta(1);
                  
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageSetItemsPerPage?trk=empty', 'EstrattiContoViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/anchise.web/RH/EstrattiConto/PageSetItemsPerPage?trk=empty');
                  }
              };
    
                        var root = rootViewModel.EstrattiContoViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EstrattiContoViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EstrattiContoViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EstrattiContoViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/RH/EstrattiConto/SortApply?trk=empty', 'EstrattiContoViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/RH/EstrattiConto/SortApply?trk=empty');
                         }
                        };
                    
             var root = rootViewModel.EstrattiContoViewModel;
             root.GoToRicercaMovimentiEstrattoEC = function(idRapporto, idEstrattoConto) {
               
                 var action = '/anchise.web/RH/EstrattiContoMovimenti/RicercaFromEC?trk=empty';
//                 debugger;
                 var filtriRicercaMovimentiEstrattoConto = {
                     PiazzaturaEstrattiConto: {},
                     IdEstrattiConto: []
                 };
            
                 var selectedEstrattoConto = [];
                 selectedEstrattoConto.push(idEstrattoConto);
                 
                 filtriRicercaMovimentiEstrattoConto.PiazzaturaEstrattiConto.IdRapporto = idRapporto;
                 filtriRicercaMovimentiEstrattoConto.IdEstrattiConto = selectedEstrattoConto;
                 communicationLoad(action, filtriRicercaMovimentiEstrattoConto, false);
             };
    
             var root = rootViewModel.EstrattiContoViewModel;
             root.DownLoadCBI = function() {
                 var idEstrattoConti = rootViewModel.EstrattiContoViewModel.IdEstrattiConto();

                 if (idEstrattoConti.length < 1) {
                     alert('Selezionare almeno un estratto conto');
                     return;
                 }
                 
                 var action = '/anchise.web/RH/EstrattiConto/DownloadCbi?trk=empty';
                 KoExport(action);
             };

             root.GoToVantaggioDownLoadCBI = function() {
                 var idEstrattoConti = rootViewModel.EstrattiContoViewModel.IdEstrattiConto();

                 if (idEstrattoConti.length < 1) {
                     alert('Selezionare almeno un estratto conto');
                     return;
                 }
                 
                 var idRapporti = "";
                 var idEstratti = "";
               
                 for (var i = 0; i < idEstrattoConti.length; i++) {
                     var res = idEstrattoConti[i].split("_");
                     idRapporti = idRapporti + res[0] + ";";
                     idEstratti = idEstratti + res[1] + ";";
                 }
                 

                 var queryString = { command: 'Scarica' , format : 'cbi', 'id_informazioni': idEstratti, 'id_estratti_conto': idRapporti };
                 var href = /ibbweb/ + 'estrazioneestratticonto?' + $.param(queryString, true);
                 window.open(href,"_self");
             };
    
         var root = rootViewModel.EstrattiContoViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.EstrattiContoViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.EstrattiContoViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.EstrattiContoViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.EstrattiContoViewModel.PaginaRichiesta() != 1) && (rootViewModel.EstrattiContoViewModel.PaginaRichiesta() >= 1) && (rootViewModel.EstrattiContoViewModel.PaginaRichiesta() <= 1);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.EstrattiContoViewModel.PaginaRichiesta() < 1;
                 var canGoToNext = 1 < 1;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.EstrattiContoViewModel.PaginaRichiesta() != 1;
                 var canGoToLast = 1 != 1;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.EstrattiContoViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageGoToFirst?trk=empty', 'EstrattiContoViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/RH/EstrattiConto/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '1';
             rootViewModel.EstrattiContoViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageGoToLast?trk=empty', 'EstrattiContoViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/RH/EstrattiConto/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.EstrattiContoViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageGoToNext?trk=empty', 'EstrattiContoViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiConto/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.EstrattiContoViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageGoToPrevious?trk=empty', 'EstrattiContoViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiConto/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiConto/PageGoTo?trk=empty', 'EstrattiContoViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiConto/PageGoTo?trk=empty');
             }
         };

     
            var root = rootViewModel.EstrattiContoViewModel;
            root.GoToExportPDFMovimentiEC = function(idAzienda, abiBanca, idRapporto) {

                var idEstrattoConti = rootViewModel.EstrattiContoViewModel.IdEstrattiConto();


                if (idEstrattoConti.length < 1) {
                    alert('Selezionare almeno un estratto conto');
                    return;
                }

                var action = '/anchise.web/RH/EstrattiContoMovimenti/ExportAsPdf?trk=empty';

                var filtriRicercaMovimentiEstrattoConto = {
                    PiazzaturaEstrattiConto: {},
                    IdEstrattiConto: idEstrattoConti
                };

                filtriRicercaMovimentiEstrattoConto.PiazzaturaEstrattiConto = {
                    idAzienda : idAzienda,
                    abiBanca : abiBanca,
                    idRapporto : idRapporto
                };


                KoExportOn(action, filtriRicercaMovimentiEstrattoConto);

            };

        UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/RH/EstrattiConto?trk=empty');
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 393px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=76">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>