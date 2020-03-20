
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
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Creazione Distinte
                    </h1></td>
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
                    <!--filtri semplici generici-->
                    <tr class="section">
                        <td>
                                     <table cellpadding="0" cellspacing="0" class="old-inputForm">
                <tbody><tr>
                    <td class="LabelWrap" style="width: 26%;">
                        <span class="alert-text">*&nbsp;</span>Rag. Soc./ Intestatario:
                    </td>
                    <td class="Valore200" style="width: 66%;">
                        <span data-bind="enable: RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.PiazzaturaIdAziendaEnabled">
<select data-bind="value: RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda" id="RicercaDisposizioneViewModel_PiazzaturaRicercaDisposizione_IdAzienda" name="RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda" style="width: 350px" class="new-form-control azienda"><option value="">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select>                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.PiazzaturaAbiBancaEnabled">
<select data-bind="value: RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca" id="RicercaDisposizioneViewModel_PiazzaturaRicercaDisposizione_ABIBanca" name="RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca" style="width: 350px" class="new-form-control banca"><option value="">TUTTI</option><option value="05188">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="05034">05034 - BANCO BPM S.P.A.</option></select>                        </span>
                    </td>
                </tr>
                
          </tbody></table> 

                        </td>
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="LabelWrap" style="width: 39%"><label for="SIA">SIA</label>:
                                    </td>
                                    <td class="Valore100" style="width: 60%"><input data-bind="value: RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.CodiceSia" id="RicercaDisposizioneViewModel_PiazzaturaRicercaDisposizione_CodiceSia" name="RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control">
                                    </td>
                                    <td style="width: 1%">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina:
                                    </td>
                                    <td class="Valore100"><select data-bind="value: RicercaDisposizioneViewModel.NumeroRighePerPagina" id="RicercaDisposizioneViewModel_NumeroRighePerPagina" name="RicercaDisposizioneViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
<option value="20">20</option>
<option value="50">50</option>
<option value="100">100</option>
</select>
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                
                            </tbody></table>
                        </td>
                    </tr>
                    <tr class="section">
                        <td><table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="LabelWrap" style="width: 26%;">
                                        <span class="alert-text">*&nbsp;</span>Tipo dispositivo:
                                    </td>
                                    <td class="Valore200" style="width: 66%;">
<select data-bind="value: RicercaDisposizioneViewModel.IdTipologiaDisposizione" id="RicercaDisposizioneViewModel_IdTipologiaDisposizione" name="RicercaDisposizioneViewModel.IdTipologiaDisposizione" style="width: 350px" class="new-form-control"><option value="">TUTTI</option>
<option value="10">Allineamento Archivi</option>
<option value="11">Allineamento Archivi IBAN</option>
<option value="174">Allineamento SEDA</option>
<option value="201">Assegni Circolari</option>
<option value="202">Assegni di Quietanza</option>
<option value="100">Bollettino Bancario</option>
<option value="63">Bonifici Italia</option>
<option value="151">Bonifici SEPA</option>
<option value="103">Bonifico Estero</option>
<option value="42">Effetti Impagati</option>
<option value="207">Elcos/Ribes</option>
<option value="208">Euroincassi</option>
<option value="171">Incassi Direct Debit</option>
<option value="4">M.Av</option>
<option value="104">Pagamento Deleghe F24</option>
<option value="106">Pagamento F24 Elementi Identificativi</option>
<option value="6">R.I.D</option>
<option value="105">Revoche F24</option>
<option value="2">Ri.Ba.</option>
<option value="175">Richiesta rendiconto mandati SEDA</option>
<option value="28">Ritiro Effetti (Pagamento Riba)</option>
<option value="200">Stipendi Italia</option>
<option value="152">Stipendi SEPA</option>
<option value="8">Variazioni Coordinate RID</option>
</select>                                    </td>
                                    <td style="width: 8%;">&nbsp;</td>
                                </tr>
                               
                                       
                                   
                                     
                                   
                
                            </tbody></table>
                             </td>
                        <td></td>
                    </tr>
                     <tr class="section">
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="Label" style="width: 60%">
                                        <input id="ank-btn-FiltriAvanzati" type="button" value="<< Avanzate" class="btn small">
                                    </td>
                                    <td style="width: 40%;">
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr style="height: 1pt;">
                        <td colspan="2">
                            
                        </td>
                    </tr>
                    <!--  FILTRI AVANZATI -->
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
            <td class="LabelWrap" style="width: 26%;">
                    <label for="Importo">Importo</label>:
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: RicercaDisposizioneViewModel.Importo.From" id="RicercaDisposizioneViewModel_Importo_From" name="RicercaDisposizioneViewModel.Importo.From" type="text" value="" class="new-form-control">            </td>
            <td style="width: 16%;">
                &nbsp;
            </td>
            <td class="Valore200" style="width: 25%;">
<input data-bind="numeric: RicercaDisposizioneViewModel.Importo.To" id="RicercaDisposizioneViewModel_Importo_To" name="RicercaDisposizioneViewModel.Importo.To" type="text" value="" class="new-form-control">            </td>
            <td style="width: 8%;">
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
                    <tr id="FiltriAvanzati1" style="height: 1pt; display: table-row;" class="section">
                        <td colspan="2">
                            
                        </td>
                    </tr>
                    <tr style="height: 12px;">
                        <td colspan="2" class="testoRedSmallBold">
                            * campi obbligatori
                        </td>
                    </tr>                    
                    <tr>
                        <td class="Comandi" colspan="2">
                            
                        </td>
                    </tr>
                    <tr style="height: 5px;">
                        <td>
                            &nbsp;
                        </td>
                    </tr>
            </tbody>
        </table>
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="singleClick: function(){ 
                                var idTipoDispositivo = rootViewModel.RicercaDisposizioneViewModel.IdTipologiaDisposizione(); 
                                var idAzienda = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda();
                                rootViewModel.RicercaDisposizioneViewModel.NavigateTo(idTipoDispositivo, idAzienda);}" class="btn"></div></div>

<form id="formLegacy" method="POST" action=""></form>

<script type="text/javascript">
                                            $(function () { RegisterViewModel("RicercaDisposizioneViewModel",{"PiazzaturaRicercaDisposizione":{"IdAzienda":null,"ABIBanca":null,"IdRapporto":null},"IdTipologiaDisposizione":null,"Importo":{"From":null,"To":null},"IdDisposizioniDaAggregare":[],"IdDisposizioniDaEliminare":[],"LegacyParameters":null,"LegacyCodiceSIA":null,"LegacyIdBanca":null,"LegacyFirst_item_count":null,"PaginaRichiesta":1,"NumeroRighePerPagina":10,"OrdinamentoColonna":1,"OrdinamentoDirezione":1}, true);
             var root = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione; 
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
                rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda(),
                rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca(),
                rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdRapporto());
    
             var cmbAzienda = $('#RicercaDisposizioneViewModel_PiazzaturaRicercaDisposizione_IdAzienda');
             var cmbBanca = $('#RicercaDisposizioneViewModel_PiazzaturaRicercaDisposizione_ABIBanca');
            
             /*
              Change combo
             */
             function registerChangeCombo() {
                 cmbAzienda.change(function () {
                     var selectedAzienda = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda();
                
                     initializePiazzatura(selectedAzienda,"","");
                 });
        
                 cmbBanca.change(function () {
                     var selectedAzienda = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda();
                     var selectedBanca = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca();
                   
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

                 communicationSendObject('/anchise.web/DISPOSIZIONI/RicercaDisposizioni/InitializeByPiazzatura?trk=empty', piazzatura, initializeFromPiazzatura);
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
                 rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.CodiceSia(emptySIA);
                 rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdBanca(emptyIdBanca);
            
                 $.each(aziende, function (index, azienda) {
                     var option = $('<option></option>')
                         .val(azienda.IdAzienda)
                         .text(azienda.RagioneSociale);
                     cmbAzienda.append(option);
                
                     if (azienda.IdAzienda == piazzatura.IdAzienda) {
                         rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.CodiceSia(azienda.CodiceSIA);
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
                        rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdBanca(banca.Id);
                    }
                 });
                 // bug ie7
                 cmbBanca.removeClass("banca").addClass("banca");
            
                 rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda(piazzatura.IdAzienda);
                 rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca(piazzatura.ABIBanca);
                 rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdRapporto(piazzatura.IdRapporto);
                
                 UpdateViewModelBinding();
             }
         
                $(document).ready(function() {
                    var root = rootViewModel.RicercaDisposizioneViewModel;
                    var navigationUrls = [];

                        navigationUrls[""] = { Url: " /Anchise.Web/DISPOSIZIONI/RicercaDisposizioni/Ricerca", IsLocal: true}; 
                        navigationUrls["2"] = { Url: "/Anchise2.Web/IncassiRiba/CreaDistintaIncassoRiba/Index", IsLocal: true}; 
                        navigationUrls["3"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["4"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["5"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["6"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["7"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["8"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["10"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["11"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["28"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["42"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["63"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["100"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["103"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["104"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["105"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["106"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["151"] = { Url: "/Anchise2.Web/BonificoSct/SearchDisposizioni/Index", IsLocal: true}; 
                        navigationUrls["152"] = { Url: "/Anchise2.Web/StipendioSct/SearchDisposizioni/Index", IsLocal: true}; 
                        navigationUrls["171"] = { Url: "/Anchise2.Web/Sdd/SearchDisposizioni/Index", IsLocal: true}; 
                        navigationUrls["174"] = { Url: "/Anchise2.Web/Seda/SearchAllineamentiSeda/Index", IsLocal: true}; 
                        navigationUrls["175"] = { Url: "/Anchise2.Web/Seda/SearchRemunerationDisposizioni/Index", IsLocal: true}; 
                        navigationUrls["200"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["201"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["202"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["205"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["206"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["207"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["208"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 
                        navigationUrls["209"] = { Url: "/ibbweb/creadistinte_old", IsLocal: false}; 

                    root.NavigateTo = function(idTipologiaDisposizione, idAzienda) {
                        var navigationUrl = navigationUrls[idTipologiaDisposizione];
                        
                        rootViewModel.RicercaDisposizioneViewModel.IdTipologiaDisposizione(idTipologiaDisposizione);
                        rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda(idAzienda);

                        var goToSummary = (idAzienda == null || idAzienda == '') || (idTipologiaDisposizione == null || idTipologiaDisposizione == '');
                        
                        if (goToSummary) {
                            KoGoTo(navigationUrls[""].Url);
                        }else {
                            var numeroRighePerPagina = rootViewModel.RicercaDisposizioneViewModel.NumeroRighePerPagina();
                            var importoDa = rootViewModel.RicercaDisposizioneViewModel.Importo.From();
                            var importoA = rootViewModel.RicercaDisposizioneViewModel.Importo.To();

                            if (importoDa == null) {
                                importoDa = '';
                            }

                            if (importoA == null) {
                                importoA = '';
                            }

                            var filtroVisibilita = importoDa != '' || importoA != '';

                            var sia = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.CodiceSia();
                            if (sia == null || sia == '') {
                                sia = rootViewModel.RicercaDisposizioneViewModel.LegacyCodiceSIA();
                            }
                            if (sia == null) {
                                sia = '';
                            }

                            //idAzienda = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdAzienda();
                            if (idAzienda == null || idAzienda == '') {
                                idAzienda = '*';
                                sia = '';
                            }

                            var banca = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.IdBanca();
                            if (banca == null || banca == '') {
                                banca = rootViewModel.RicercaDisposizioneViewModel.LegacyIdBanca();
                            }

                            var abi = rootViewModel.RicercaDisposizioneViewModel.PiazzaturaRicercaDisposizione.ABIBanca();
                            if (abi == null || abi == '' ) {
                                abi = '';
                                banca = '*';
                            }

                            var first_item_count1 = rootViewModel.RicercaDisposizioneViewModel.LegacyFirst_item_count();
                            if (first_item_count1 == null || first_item_count1 == '') {
                                first_item_count1 = '1';
                            }

                            var queryString = { numRows: numeroRighePerPagina, max_items_number: numeroRighePerPagina, first_item_count: first_item_count1, filtroVisibilita: filtroVisibilita, intestatario: idAzienda, sia: sia, banca: banca, abi: abi, rapporto: '', TIPO: idTipologiaDisposizione, DA_IMPORTO: importoDa, A_IMPORTO: importoA };
                            

                            if (navigationUrl.IsLocal) {
                                $.post('/anchise.web/DISPOSIZIONI/Home/SetCookie' + '?' + $.param(queryString, true)).success(function (data) {
                                    window.top.location.href = navigationUrl.Url;
                                });
                            }else {
                                var href = navigationUrl.Url + '?' + $.param(queryString, true);

                                var formLegacy = $("#formLegacy");
                                formLegacy.empty();
                                var legacyParameters = rootViewModel.RicercaDisposizioneViewModel.LegacyParameters();
                                var params = $.parseJSON(legacyParameters);
                                if (params != null) {
                                    $.each( params, function( pkey, pvalue ) {
                                        var inputHidden = $('<input>').attr({ type: 'hidden', name: pkey, value: pvalue });
                                        formLegacy.append(inputHidden);
                                    });
                                }

                                formLegacy.attr("action", href);
                                formLegacy.submit();
                            }
                        }
                    };
                });
            
        $(document).ready(function() {
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
                }}
            );
        
            function hideFilter() {
                $("#ank-btn-FiltriAvanzati").attr('value', ">> Avanzate");
                $("#FiltriAvanzati").hide();
                $("#FiltriAvanzati1").hide();
            };

            function showFilter() {
                $("#ank-btn-FiltriAvanzati").attr("value", "<< Avanzate");
                $("#FiltriAvanzati").show();
                $("#FiltriAvanzati1").show();
            };

        });
    UpdateViewModelBinding();}); </script></div>
                        <script type="text/javascript">
    $(document).ready(function () {
        communicationLoad('/anchise.web/DISPOSIZIONI/RicercaDisposizioni?trk=empty');
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
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div>
