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
    <div class="container"><div class="search new-riquadro">
        

<div class="page-title">
    <div class="search-flag">
    </div>
    <h1>
        Esiti Allineamento Rid
    </h1>
</div>
        <table class="toolbar" cellpadding="0" cellspacing="0">
            <tbody>
                    <tr>
                        <td width="50%">&nbsp;</td>
                        <td>         <table class="piazzaturainline old-inputForm" cellpadding="0" cellspacing="0">
            <tbody><tr>
                <td>Rag. Soc./ Intestatario</td>
                <td>Banca</td>
               
            </tr>
            <tr>
                <td class="azienda">
                    <span data-bind="enable: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.PiazzaturaIdAziendaEnabled">
<select data-bind="value: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda" id="EstrazioneALViewModel_PiazzaturaEstrazioneAllinementoArchivi_IdAzienda" name="EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda" style="width: 350px" class="new-form-control azienda"><option value="">TUTTI</option><option value="588536">C.P.C. INOX SPA</option></select>                    </span>
                </td>
                <td class="banca">
                    <span data-bind="enable: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.PiazzaturaAbiBancaEnabled">
<select data-bind="value: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca" id="EstrazioneALViewModel_PiazzaturaEstrazioneAllinementoArchivi_ABIBanca" name="EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca" style="width: 350px" class="new-form-control banca"><option value="">TUTTI</option><option value="05584">05584 - BANCA POPOLARE DI MILANO S.P.A.</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>                    </span>
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
             <td><a id="tool-refresh" class="ank-icon-filter-apply inactive" title="Applica Filtro Rapido" data-bind="singleClick: function() { rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.FilterRefresh(); }, css:{ inactive: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.piazzaturaUnChanged}, enable: EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.piazzaturaChanged"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_quick-filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-goto" class="ank-icon-filter-go" title="Filtri" data-bind="singleClick: function(){ rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.FilterGoTo(); }, css:{ advanced: rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.isFilterAdvanceSet}"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_filter.png" border="0" width="20" height="20"></a></td>
             <td><a id="tool-reset" class="ank-icon-filter-reset" title="Azzera filtri" data-bind="singleClick: function(){ rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.FilterReset(); }"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_remove-filter.png" border="0" width="20" height="20"></a></td>
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
                   <td style="width:20px;cursor:pointer;"><a title="Stampa" class="ank-icon-export-Pdf" onclick="javascript:KoExport('/anchise.web/ESITI/EstrazioneAL/ExportAsPdf?trk=empty');"><img src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/i_pdf.png" border="0" width="20" height="20"></a></td>
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
                                            $(function () { RegisterViewModel("EstrazioneALViewModel",{"PiazzaturaEstrazioneAllinementoArchivi":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"DataCreazione":{"From":"2015-09-01T00:00:00+02:00","To":"2019-09-30T00:00:00+02:00"},"DataRicezione":{"From":null,"To":null},"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":3,"OrdinamentoDirezione":2}, true);
             var root = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi; 
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
                rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda(),
                rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca(),
                rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdRapporto());
    
             var cmbAzienda = $('#EstrazioneALViewModel_PiazzaturaEstrazioneAllinementoArchivi_IdAzienda');
             var cmbBanca = $('#EstrazioneALViewModel_PiazzaturaEstrazioneAllinementoArchivi_ABIBanca');
            
             /*
              Change combo
             */
             function registerChangeCombo() {
                 cmbAzienda.change(function () {
                     var selectedAzienda = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda();
                
                     initializePiazzatura(selectedAzienda,"","");
                 });
        
                 cmbBanca.change(function () {
                     var selectedAzienda = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda();
                     var selectedBanca = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca();
                   
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

                 communicationSendObject('/anchise.web/ESITI/EstrazioneAL/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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
                 rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.CodiceSia(emptySIA);
                 rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdBanca(emptyIdBanca);
            
                 $.each(aziende, function (index, azienda) {
                     var option = $('<option></option>')
                         .val(azienda.IdAzienda)
                         .text(azienda.RagioneSociale);
                     cmbAzienda.append(option);
                
                     if (azienda.IdAzienda == piazzatura.IdAzienda) {
                         rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.CodiceSia(azienda.CodiceSIA);
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
                        rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdBanca(banca.Id);
                    }
                 });
                 // bug ie7
                 cmbBanca.removeClass("banca").addClass("banca");
            
                 rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda(piazzatura.IdAzienda);
                 rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca(piazzatura.ABIBanca);
                 rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdRapporto(piazzatura.IdRapporto);
                
                 UpdateViewModelBinding();
             }
         
        var piazz = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi;
        piazz.piazzaturaUnChanged = ko.computed(
            function() {
                return rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda() == '' &&
                    rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca() == '';
            }
        );
                             
        piazz.piazzaturaChanged = ko.computed(
            function() {
                return rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.IdAzienda() != '' ||
                    rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi.ABIBanca() != '';
            }
        );

        piazz.FilterRefresh = function() {
            KoGoTo('/anchise.web/ESITI/EstrazioneAL/FilterApply?trk=empty');
        };
        
        piazz.FilterGoTo = function() {
            KoGoTo('/anchise.web/ESITI/EstrazioneAL/FilterGoTo?trk=empty');
        };
        
        piazz.FilterReset = function() {
            KoGoTo('/anchise.web/ESITI/EstrazioneAL/FilterReset?trk=empty');
        };
    
                             var piazz = rootViewModel.EstrazioneALViewModel.PiazzaturaEstrazioneAllinementoArchivi;
                             piazz.isFilterAdvanceSet = ko.computed(
                                 function() {
                                     return false;
                                 }
                             );
                         UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/ESITI/EstrazioneAL?trk=empty');
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
                                Per qualsiasi altra esigenza � a tua disposizione
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
                    � 2000-2015 - Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
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
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="position: absolute; top: 287px; left: 582.75px; z-index: 1; display: none;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="<Prec"><span class="ui-icon ui-icon-circle-triangle-w">&lt;Prec</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Succ>"><span class="ui-icon ui-icon-circle-triangle-e">Succ&gt;</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">Settembre</span>&nbsp;<span class="ui-datepicker-year">2019</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col"><span title="Luned�">Lu</span></th><th scope="col"><span title="Marted�">Ma</span></th><th scope="col"><span title="Mercoled�">Me</span></th><th scope="col"><span title="Gioved�">Gi</span></th><th scope="col"><span title="Venerd�">Ve</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Sabato">Sa</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Domenica">Do</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default ui-state-highlight" href="#">27</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2019"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div>