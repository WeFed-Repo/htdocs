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

    <div class="container"><div class="new-riquadro">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td colspan="2" class="page-title"><div class="search-flag"></div><h1>Estratto Conto Periodico</h1></td>
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
                        <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaIdAziendaEnabled">
                            <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_IdAzienda" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.IdAzienda" style="width:350px;" class="new-form-control azienda"><option value="">TUTTI</option><option value="12">CONSORZIO P.R.U. STADIO CONEGL</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select>
                        </span>
                    </td>
                    <td style="width: 8%;">&nbsp;</td>
                </tr>
                <tr>
                    <td class="LabelWrap">
                        <span class="alert-text">*&nbsp;</span>Banca:
                    </td>
                    <td class="Valore200">
                        <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaAbiBancaEnabled">
                            <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_ABIBanca" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.ABIBanca" style="width:350px;" class="new-form-control banca"><option value="">TUTTI</option><option value="01030">01030 - BANCA MONTE DEI PASCHI DI SIENA S.P.A.</option><option value="01005">01005 - BANCA NAZIONALE DEL LAVORO SPA</option><option value="05034">05034 - BANCO BPM S.P.A.</option><option value="05387">05387 - BPER BANCA S.P.A.</option><option value="03069">03069 - INTESA SANPAOLO SPA</option><option value="02008">02008 - UNICREDIT SPA</option></select>
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
                        <span data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.PiazzaturaIdRapportoEnabled">
                            <select data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_IdRapporto" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.IdRapporto" style="width:350px;" class="new-form-control conto"><option value="">TUTTI</option><option value="1163764">11751-000000000342</option><option value="1338135">11701-000000000626</option><option value="1338134">11700-alias</option><option value="1654446">11702-000000002013</option><option value="2556607">11702-pippo</option><option value="812850">61620-000000004263</option><option value="9055">11700-000000012648</option><option value="1272207">11702-000000036186</option><option value="1272210">11702-alias</option><option value="1276558">11702-000000122821</option><option value="1306091">11751-alias conto 000000365990</option><option value="11493">11701-000000386065</option><option value="11494">11701-000000598345</option><option value="2156215">11701-000000815942</option><option value="1598381">11702-000002366573</option><option value="2563167">11702-000003016271</option><option value="2149560">11758-000104866179</option><option value="2538955">05364-000104866179</option><option value="2149559">11758-000104961280</option><option value="2538954">05364-000104961280</option><option value="2177949">18465-100000001022</option><option value="2177932">18465-100000001175</option><option value="2177539">18465-100000001579</option></select>
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
                                    <td class="LabelWrap" style="width: 39%"><label for="SIA">SIA</label>:</td>
                                    <td class="Valore100" style="width: 60%"><input data-bind="value: EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceSia" id="EstrattiContoViewModel_PiazzaturaEstrattiConto_CodiceSia" name="EstrattiContoViewModel.PiazzaturaEstrattiConto.CodiceSia" readonly="readonly" type="text" value="" class="new-form-control"></td>
                                    <td style="width: 1%">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="LabelWrap">Righe per pagina:</td>
                                    <td class="Valore100"><select data-bind="value: EstrattiContoViewModel.NumeroRighePerPagina" id="EstrattiContoViewModel_NumeroRighePerPagina" name="EstrattiContoViewModel.NumeroRighePerPagina" class="new-form-control"><option value="10">10</option>
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
                        <td>&nbsp;</td>
                        <td>
                            <table cellpadding="0" cellspacing="0" class="old-inputForm">
                                <tbody><tr>
                                    <td class="Label" style="width:60%"> 
                                        <input id="ank-btn-FiltriAvanzati" type="button" value=">> Avanzate" class="btn small">
                                    </td>
                                    <td style="width: 40%;"></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                   <tr style="height:1pt;"><td colspan="2"></td></tr>
                    <!--  FILTRI AVANZATI -->
                    <tr id="FiltriAvanzati" style="border: 0px; display: none;" class="section">
                      <td>
                      <table cellpadding="0" cellspacing="0">
                          <!-- data range -->
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
                
                    <label for="Inizio_periodo">Inizio periodo</label>:
            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EstrattiContoViewModel.DataInizioEstratto.From" id="EstrattiContoViewModel_DataInizioEstratto_From" name="EstrattiContoViewModel.DataInizioEstratto.From" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EstrattiContoViewModel_DataInizioEstratto_From_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EstrattiContoViewModel_DataInizioEstratto_From").datepicker({
                    onSelect: function (dateText) {
                        $("#EstrattiContoViewModel_DataInizioEstratto_From").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EstrattiContoViewModel_DataInizioEstratto_From_imgcalendar").click(function(){
                    $("#EstrattiContoViewModel_DataInizioEstratto_From").datepicker('show');
                });

            });
        </script>
            </td>
            <td style="width: 16%;text-align:right">

            </td>
            <td class="Valore200" style="width: 25%">
<input data-bind="datetime: EstrattiContoViewModel.DataInizioEstratto.To" id="EstrattiContoViewModel_DataInizioEstratto_To" name="EstrattiContoViewModel.DataInizioEstratto.To" type="text" value="" class="hasDatepicker new-form-control">    <img style="position:relative;top:3px;cursor:pointer;" id="EstrattiContoViewModel_DataInizioEstratto_To_imgcalendar" src="/anchise.web/Contents/00000/it-IT/alten-anchise-images/calendar.png" alt="Apri calendario" title="Apri calendario" border="0" height="20" width="20">
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
                $("#EstrattiContoViewModel_DataInizioEstratto_To").datepicker({
                    onSelect: function (dateText) {
                        $("#EstrattiContoViewModel_DataInizioEstratto_To").datepicker('hide');


                        if ($('#dialogpopup')) {
                            $('#dialogpopup').focus()
                        }

                        $(this).change();
                    }
                });

                $("#EstrattiContoViewModel_DataInizioEstratto_To_imgcalendar").click(function(){
                    $("#EstrattiContoViewModel_DataInizioEstratto_To").datepicker('show');
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
                      <td>&nbsp;</td>
                    </tr>
                    <!--fine-->
                    <tr class="LinkedToFiltriAvanzati" style="height: 1pt; display: none;">
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
    </div><div class="new-buttons"><input id="ank-btn-search" type="button" value="Visualizza" data-bind="enable: EstrattiContoViewModel.PiazzaturaEstrattiConto.HasRapporti, singleClick: function(){ KoGoTo('/anchise.web/RH/EstrattiConto/Ricerca?trk=empty');}" class="btn"></div></div>
    <script type="text/javascript">
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
            $(".LinkedToFiltriAvanzati").hide();
        };

        function showFilter() {
            $("#ank-btn-FiltriAvanzati").attr("value", "<< Avanzate");
            $("#FiltriAvanzati").show();
            $(".LinkedToFiltriAvanzati").show();
        };

        });
    </script>
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


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialogmessage" aria-labelledby="ui-id-1" style="height: auto; width: auto; top: 195px; left: 623.5px; display: none; z-index: 101;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogmessage" style="opacity: 0; width: auto; min-height: 150px; max-height: 300px; height: auto;" class="ui-dialog-content ui-widget-content">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=76">
</div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popup-dialog ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogpopup" aria-labelledby="ui-id-2" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogpopup" style="" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front popupClass ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogerror" aria-labelledby="ui-id-3" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-3" class="ui-dialog-title">YouBusiness Web</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div id="dialogerror" class="ui-dialog-content ui-widget-content">
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">Chiudi</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>