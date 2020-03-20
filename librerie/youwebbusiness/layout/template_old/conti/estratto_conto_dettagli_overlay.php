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
            // popupContent.html(data);

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
        <table class="itemtoolbar" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td width="50%">&nbsp;</td>
                    <td>
    <table class="ipp-toolbar" style="height:15px;vertical-align:bottom;border-collapse: collapse;" cellpadding="0" cellspacing="0">
       <tbody>
           <tr><td colspan="6">&nbsp;</td></tr>
           <tr>
               <td nowrap="nowrap">Movimenti per pagina&nbsp; </td>
               
                           <td class="ipp-current-toolbar">10</td>
                           <td class="ipp-next-toolbar" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetItemsPerPageAndGo('20');}">20</td>
                           <td class="ipp-next-toolbar" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetItemsPerPageAndGo('50');}">50</td>
                           <td class="ipp-next-toolbar" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetItemsPerPageAndGo('100');}">100</td>
               
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
                   <td style="width:20px;cursor:pointer;"><a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExport('/anchise.web/RH/EstrattiContoMovimenti/ExportAsPdf?trk=empty');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></td>
           </tr>
       </tbody>
   </table>
<!-- /div -->

</td>
                    <td width="50%" style="text-align:right;">
<table width="100%" cellpadding="0" cellspacing="0">
    <tbody>
             <tr><td>&nbsp;</td></tr>
             <tr><td style="text-align:right;">
                    
                 </td>
           </tr>
    </tbody>
</table>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#helpButton").click(function (e) {
                e.preventDefault();
                var href = '/ibbweb/newstyle/html/help/AreaInformativa/EstrattiConto/VisualizzaECperiodico.htm';
                window.open(href, "Dettaglio", "toolbar=no,scrollbars=yes,status=no,width=534,height=240");
            });
        });
</script></td>
                </tr>
            </tbody>
        </table>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td>
                        <div class="divgrid">
                            
   <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="head-data"><td><span class="noline"><div class="divgrid">
    <table style="width:100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 20%;"></th>
                <th style="width: 9%;"></th>
                <th style="width: 14%;"></th>
                <th style="width: 7%;"></th>
                <th style="width: 20%;"></th>
                <th style="width: 9%;"></th>
                <th style="width: 14%;"></th>
                <th style="width: 7%;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tdright tdright-force-left"><h1>Rag. Soc./ Intestatario:</h1></td>
                <td colspan="7" class="tdleft">PIEVE S.R.L.</td>
            </tr>
            <tr>
                <td class="tdright tdright-force-left"><h1>Banca</h1></td>
                <td colspan="3" class="tdleft">INTESA SANPAOLO SPA</td>
                <td class="tdright tdright-force-left"><h1>Filiale:</h1></td>
                <td colspan="3" class="tdleft">18465 - VERONA VIA E. FERMI</td>
            </tr>
            <tr>
                <td class="tdright tdright-force-left"><h1>Conto:</h1></td>
                <td colspan="3" class="tdleft">100000001175 - </td>
                <td class="tdright tdright-force-left"><h1>Divisa:</h1></td>
                <td colspan="3" class="tdleft">EUR</td>
            </tr>
            <tr>
                <td class="tdright tdright-force-left"><h1>IBAN:</h1></td>
                <td colspan="7" class="tdleft">IT47Y0306918465100000001175</td>
            </tr>
        </tbody>
    </table>
</div>                </span></td></tr>
            <tr class="head-data"><td><span class="line"><div class="divgrid">
    <table style="width:100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <th style="width: 20%;"></th>
                <th style="width: 9%;"></th>
                <th style="width: 14%;"></th>
                <th style="width: 7%;"></th>
                <th style="width: 20%;"></th>
                <th style="width: 9%;"></th>
                <th style="width: 14%;"></th>
                <th style="width: 7%;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <td class="tdright tdright-force-left">
                        <h1>Saldo iniziale al 30/09/2018:</h1>
                    </td>
                    <td colspan="3" class="tdleft">840,76
</td>

               
                    <td class="tdright tdright-force-left">
                        <h1>Saldo finale al 31/12/2018
                            :</h1>
                    </td>
                    <td colspan="3" class="tdleft">645,66
</td>
            </tr>
        </tbody>
    </table>
</div>  </span></td></tr>
            
            </thead>
    </table>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="columns">
                        <th style="width: 81px;">
                                <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Operazione
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(1, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(1, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                        </th>
                        <th style="width: 81px;">
                                <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Valuta
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(2, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down-active" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(2, 2);}">
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
                <td colspan="2">Importo
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(3, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(3, 2);}">
                            </span>
                        </td>
                </tr>
        </tbody>
    </table>

                        </th>
                        <th style="width: 180px;">
                                <table class="grid-head-cell" style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">Causale
                </td>
            </tr>
                <tr>
                        <td class="right">
                            <span class="ui-icon ank-icon  ank-icon-sort-up" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(4, 1);}">
                            </span>
                        </td>
                        <td class="left">
                            <span class="ui-icon ank-icon  ank-icon-sort-down" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.SetSortData(4, 2);}">
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
                <td colspan="2">Descrizione
                </td>
            </tr>
        </tbody>
    </table>

                        </th>
                    </tr>
        </thead>
       <tbody>
                        <tr class="treven">
                            <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToDettaglio(2177932, 263915734);}">17/12/2018</span>
                            </td>
                            <td>17/12/2018
                            </td>
                            <td class="tdright">                <span class="negative-amount">-121,00</span>


                            </td>
                            <td class="tdleft">19-IMPOSTE E TASSE
                            </td>
                            <td class="tdleftWrap"><label for="" title="DEL.FISCO/INPS/REG - ">DEL.FISCO/INPS/REG - </label>
                            </td>
                        </tr>
                        <tr class="trodd">
                            <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToDettaglio(2177932, 263915730);}">03/10/2018</span>
                            </td>
                            <td>30/09/2018
                            </td>
                            <td class="tdright">                <span class="negative-amount">-3,15</span>


                            </td>
                            <td class="tdleft">66-SPESE
                            </td>
                            <td class="tdleftWrap"><label for="" title="EM.E/C COM.REND. - N. 1 A Euro 2,45 per conto scalare ">EM.E/C COM.REND. - N. 1 A Euro 2,45 per conto scalare </label>
                            </td>
                        </tr>
                        <tr class="treven">
                            <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToDettaglio(2177932, 263915731);}">03/10/2018</span>
                            </td>
                            <td>30/09/2018
                            </td>
                            <td class="tdright">                <span class="negative-amount">-25,20</span>


                            </td>
                            <td class="tdleft">19-IMPOSTE E TASSE
                            </td>
                            <td class="tdleftWrap"><label for="" title="BOLLO E/C REND. - ">BOLLO E/C REND. - </label>
                            </td>
                        </tr>
                        <tr class="trodd">
                            <td><span class="link" data-bind="singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToDettaglio(2177932, 263915732);}">03/10/2018</span>
                            </td>
                            <td>30/09/2018
                            </td>
                            <td class="tdright">                <span class="negative-amount">-45,75</span>


                            </td>
                            <td class="tdleft">18-INTERESSI E COMP.
                            </td>
                            <td class="tdleftWrap"><label for="" title="COMPET CHIUSURA - ">COMPET CHIUSURA - </label>
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
                       <td><a class="ui-icon ank-icon ank-icon-pager-first" title="Prima pagina" data-bind="visible: rootViewModel.EstrattiContoMovimentiViewModel.CanGoToFirst, singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToFirst(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-prev" title="Pagina precente" data-bind="visible: rootViewModel.EstrattiContoMovimentiViewModel.CanGoToPrevious, singleClick: function(){  rootViewModel.EstrattiContoMovimentiViewModel.GoToPrevius();}" style="display: none;"></a></td>
                       <td><input align="right" data-bind="numericrange: EstrattiContoMovimentiViewModel.PaginaRichiesta, minValue: 1, maxValue: 1, fallbackValue : 1" id="EstrattiContoMovimentiViewModel_PaginaRichiesta" maxlength="4" name="EstrattiContoMovimentiViewModel.PaginaRichiesta" size="4" type="text" value="" class="new-form-control"> / 1</td>
                       <td><a class="" title="Vai" data-bind="enable: rootViewModel.EstrattiContoMovimentiViewModel.CanGo, singleClick: function(){rootViewModel.EstrattiContoMovimentiViewModel.GoToPage(); }">Vai</a>&nbsp;&nbsp;</td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-next" title="Pagina successiva" data-bind="visible: rootViewModel.EstrattiContoMovimentiViewModel.CanGoToNext, singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToNext(); }" style="display: none;"></a></td>
                       <td><a class="ui-icon ank-icon ank-icon-pager-last" title="Ultima pagina" data-bind="visible: rootViewModel.EstrattiContoMovimentiViewModel.CanGoToLast, singleClick: function(){ rootViewModel.EstrattiContoMovimentiViewModel.GoToLast(); }" style="display: none;"></a></td>
                   </tr>
               </tbody>
           </table>
       </td>
   </tr>
  </tbody></table>

                            </div>
                        </td>
                    </tr>

                <tr>
                    <td class="tdcenter">
                        <input type="button" class="ank-btn btn small" value="Indietro" data-bind="singleClick: function(){ KoGoToUsingObject('/anchise.web/RH/EstrattiConto/Ricerca?trk=empty', 'EstrattiContoViewModel');}">
                    </td>
                </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"></div></div>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("EstrattiContoMovimentiViewModel",{"PiazzaturaEstrattiConto":{"IdAzienda":633660,"ABIBanca":"03069","IdRapporto":2177932},"IdEstrattiConto":["543159024"],"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":2,"OrdinamentoDirezione":2}, true);
              var root = rootViewModel.EstrattiContoMovimentiViewModel;
              root.SetItemsPerPageAndGo = function(itemsPerPage) {
                  rootViewModel.EstrattiContoMovimentiViewModel.NumeroRighePerPagina(itemsPerPage);
                  rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(1);
                  if ("false" == "true") {
                    // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                    // in quanto quello corrente non è quello corretto
                    KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageSetItemsPerPage?trk=empty', 'EstrattiContoMovimentiViewModel', true);
                  } else {
                    // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                    KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageSetItemsPerPage?trk=empty');
                  }
              };
          
                        var root = rootViewModel.EstrattiContoMovimentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty', 'EstrattiContoMovimentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EstrattiContoMovimentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty', 'EstrattiContoMovimentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EstrattiContoMovimentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty', 'EstrattiContoMovimentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty');
                         }
                        };
                    
                        var root = rootViewModel.EstrattiContoMovimentiViewModel;
                        root.SetSortData = function(colunmIndex, direction) {
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoColonna(colunmIndex);
                         rootViewModel.EstrattiContoMovimentiViewModel.OrdinamentoDirezione(direction);
                         rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(1);
                            

                         if ("false" == "true") {
                             // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                             // in quanto quello corrente non è quello corretto
                             KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty', 'EstrattiContoMovimentiViewModel', true);
                         } else {
                             // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                             KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/SortApply?trk=empty');
                         }
                        };
                    
        var root = rootViewModel.EstrattiContoMovimentiViewModel;
        root.GoToDettaglio = function(idRapporto, idMovimento) {

            var action = '/anchise.web/RH/EstrattiContoDettaglioMovimento/DettaglioFromMovimentiEC?trk=empty';
            
            var filtriRicercaDettaglioMovimento = {
                IdRapporto: idRapporto,
                IdMovimento : idMovimento
            };
            
            communicationLoad(action, filtriRicercaDettaglioMovimento, true);
        };
    
         var root = rootViewModel.EstrattiContoMovimentiViewModel;
        
         root.ResetPaginaRichiesta = function() {
             var originalPaginaRichiesta = 1;
             rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(originalPaginaRichiesta);
         };

         root.CanGoToFirst = ko.computed(
             function() {
                 // var canGoToFirst = rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() != 1;
                 var canGoToFirst = 1 != 1;
                 return canGoToFirst ;
             }
         );
              
         root.CanGoToPrevious = ko.computed(
             function() {
                 // var canGoToPrevious = rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() > 1;
                 var canGoToPrevious = 1 > 1;
                 return canGoToPrevious ;
             }
         );
              
         root.CanGo = ko.computed(
             function() {
                 var canGo = (rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() != 1) && (rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() >= 1) && (rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() <= 1);
                 return canGo ;
             }
         );
              
         root.CanGoToNext = ko.computed(
             function() {
                 // var canGoToNext = rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() < 1;
                 var canGoToNext = 1 < 1;
                 return canGoToNext ;
             }
         );
              
         root.CanGoToLast = ko.computed(
             function() {
                 // var canGoToLast = rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta() != 1;
                 var canGoToLast = 1 != 1;
                 return canGoToLast ;
             }
         );


         root.GoToFirst = function() {
             var firstPage = '1';
             rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(firstPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageGoToFirst?trk=empty', 'EstrattiContoMovimentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageGoToFirst?trk=empty');
             }
         };

          root.GoToLast = function() {
             var lastPage = '1';
             rootViewModel.EstrattiContoMovimentiViewModel.PaginaRichiesta(lastPage);
              
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageGoToLast?trk=empty', 'EstrattiContoMovimentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                 KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageGoToLast?trk=empty');
             }
         };

         root.GoToNext = function() {
             rootViewModel.EstrattiContoMovimentiViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageGoToNext?trk=empty', 'EstrattiContoMovimentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageGoToNext?trk=empty');
             }
         };
         
         root.GoToPrevius = function() {
             rootViewModel.EstrattiContoMovimentiViewModel.ResetPaginaRichiesta(); 
             
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageGoToPrevious?trk=empty', 'EstrattiContoMovimentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageGoToPrevious?trk=empty');
             }
         };
         
         root.GoToPage = function() {
             if ("false" == "true") {
                // Sono in popup..devo usare la KoGoToUsingObject e passare il nome del viewmodel del context, 
                // in quanto quello corrente non è quello corretto
                KoGoToUsingObject('/anchise.web/RH/EstrattiContoMovimenti/PageGoTo?trk=empty', 'EstrattiContoMovimentiViewModel', true);
             } else {
                // Non sono in popup..uso la KoGoTo in quanto il viewmodel corrente è quello corretto
                KoGoTo('/anchise.web/RH/EstrattiContoMovimenti/PageGoTo?trk=empty');
             }
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 273px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=76">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="position: absolute; height: auto; width: 626px; top: 78px; left: 342.5px; display: block; z-index: 101;">

    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle">
        <div id="dialogpopup" style="width: auto; min-height: 91px; max-height: none; height: auto;" class="ui-dialog-content ui-widget-content">

    <table class="details" style="height:23px;" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <td style="width:90%;">
                Dettaglio movimento Estratto Conto
            </td>
            <td style="width:10%;text-align:right;">


<!-- div class="export-toolbar" style="border: chocolate 1px solid;" -->
    
   <table style="border-collapse: collapse;width:100%;text-align:right" cellpadding="0" cellspacing="0">
    <tbody>
     <tr valign="bottom">
   <td width="90%"></td>
          <td>
              <a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExportUsingObject('/anchise.web/RH/EstrattiContoDettaglioMovimento/ExportAsPdf?trk=empty', 'DettaglioMovimentiEstrattoContoViewModel');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
          </td>
     </tr>
    </tbody>
   </table>
<!-- /div -->

</td>
        </tr>
    </thead>
    </table>
    <table class="details" height="100%" cellpadding="0" cellspacing="0">
     <tbody>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td style="width:37%">Rag. Soc./ Intestatario</td>
                <td style="width:1%">:</td>
                <td style="width:62%">PIEVE S.R.L.</td>
            </tr>
            <tr>
                <td>ABI
                </td>
                <td>
                    :
                </td>
                <td>03069
                </td>
            </tr>
            <tr>
                <td>CAB
                </td>
                <td>
                    :
                </td>
                <td>18465
                </td>
            </tr>
            <tr>
                <td>Conto
                </td>
                <td>
                    :
                </td>
                <td>100000001175
                </td>
            </tr>
            <tr>
                <td>IBAN
                </td>
                <td>
                    :
                </td>
                <td>IT47Y0306918465100000001175
                </td>
            </tr>
            <tr>
                <td>Importo
                </td>
                <td>
                    :
                </td>
                <td>                <span class="negative-amount">-3,15</span>


                </td>
            </tr>
            <tr>
                <td>Divisa
                </td>
                <td>
                    :
                </td>
                <td>EUR
                </td>
            </tr>
            <tr>
                <td>Operazione
                </td>
                <td>
                    :
                </td>
                <td>03/10/2018
                </td>
            </tr>
         <tr>
             <td>Valuta
             </td>
             <td>
                 :
             </td>
             <td>30/09/2018
             </td>
         </tr>
         <tr>
                <td>Numero documento
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Causale
                </td>
                <td>
                    :
                </td>
                <td>66-SPESE
                </td>
            </tr>
            <tr>
                <td>Riferimento banca (CRO)
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Riferimento cliente
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Descrizione
                </td>
                <td>
                    :
                </td>
                <td>EM.E/C COM.REND. &nbsp;  N. 1 A Euro 2,45 per conto scalare 
                </td>
            </tr>
            <tr>
                <td>Identificativo univoco messaggio
                    
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Identificativo End to End
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Informazioni di riconciliazione
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    &nbsp;
                </td>
            </tr>
        </tbody>
    </table>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("DettaglioMovimentiEstrattoContoViewModel",{"IdRapporto":2177932,"IdMovimento":263915730,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":-1,"OrdinamentoDirezione":0}, false);UpdateViewModelBinding();}); </script></div>
    <span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div>
    <div id="dialogpopup" style="width: auto; min-height: 91px; max-height: none; height: auto;" class="ui-dialog-content ui-widget-content">

    <table class="details" style="height:23px;" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <td style="width:90%;">
                Dettaglio movimento Estratto Conto
            </td>
            <td style="width:10%;text-align:right;">


<!-- div class="export-toolbar" style="border: chocolate 1px solid;" -->
    
   <table style="border-collapse: collapse;width:100%;text-align:right" cellpadding="0" cellspacing="0">
    <tbody>
     <tr valign="bottom">
   <td width="90%"></td>
          <td>
              <a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExportUsingObject('/anchise.web/RH/EstrattiContoDettaglioMovimento/ExportAsPdf?trk=empty', 'DettaglioMovimentiEstrattoContoViewModel');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a>
          </td>
     </tr>
    </tbody>
   </table>
<!-- /div -->

</td>
        </tr>
    </thead>
    </table>
    <table class="details" height="100%" cellpadding="0" cellspacing="0">
     <tbody>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
                <td style="width:37%">Rag. Soc./ Intestatario</td>
                <td style="width:1%">:</td>
                <td style="width:62%">PIEVE S.R.L.</td>
            </tr>
            <tr>
                <td>ABI
                </td>
                <td>
                    :
                </td>
                <td>03069
                </td>
            </tr>
            <tr>
                <td>CAB
                </td>
                <td>
                    :
                </td>
                <td>18465
                </td>
            </tr>
            <tr>
                <td>Conto
                </td>
                <td>
                    :
                </td>
                <td>100000001175
                </td>
            </tr>
            <tr>
                <td>IBAN
                </td>
                <td>
                    :
                </td>
                <td>IT47Y0306918465100000001175
                </td>
            </tr>
            <tr>
                <td>Importo
                </td>
                <td>
                    :
                </td>
                <td>                <span class="negative-amount">-3,15</span>


                </td>
            </tr>
            <tr>
                <td>Divisa
                </td>
                <td>
                    :
                </td>
                <td>EUR
                </td>
            </tr>
            <tr>
                <td>Operazione
                </td>
                <td>
                    :
                </td>
                <td>03/10/2018
                </td>
            </tr>
         <tr>
             <td>Valuta
             </td>
             <td>
                 :
             </td>
             <td>30/09/2018
             </td>
         </tr>
         <tr>
                <td>Numero documento
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Causale
                </td>
                <td>
                    :
                </td>
                <td>66-SPESE
                </td>
            </tr>
            <tr>
                <td>Riferimento banca (CRO)
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Riferimento cliente
                </td>
                <td>
                    :
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>Descrizione
                </td>
                <td>
                    :
                </td>
                <td>EM.E/C COM.REND. &nbsp;  N. 1 A Euro 2,45 per conto scalare 
                </td>
            </tr>
            <tr>
                <td>Identificativo univoco messaggio
                    
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Identificativo End to End
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Informazioni di riconciliazione
                </td>
                <td>
                    :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    &nbsp;
                </td>
            </tr>
        </tbody>
    </table>
<script type="text/javascript">
                                            $(function () { RegisterViewModel("DettaglioMovimentiEstrattoContoViewModel",{"IdRapporto":2177932,"IdMovimento":263915730,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":-1,"OrdinamentoDirezione":0}, false);UpdateViewModelBinding();}); </script></div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div><div class="ui-widget-overlay ui-front" style="z-index: 100;"></div>