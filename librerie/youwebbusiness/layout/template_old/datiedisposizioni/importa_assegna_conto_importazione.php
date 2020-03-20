
    <div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>
    <div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="position: absolute; top: 0px; left: 0px; visibility: hidden; z-index: 1000;"> </div>

    <!-- from waiting panel --->
<div id="dialogmessage" style="display: none">
    <img src="/anchise.web/Contents/00000/it-IT/Images/preloader.gif?v=77" />
</div>
<div id="dialogpopup" style="display: none">
</div>
<div id="dialogerror">
</div>
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
                        <div id="MainSection"></div>
                        

<style>
    .progress-label {
        position: absolute;
        left: 46%;
        top: 4px;
        font-weight: bold;
    }

    #progressbar{
        position:relative;
    }

    .ui-widget-header{
        background: darkorange;
    }

    .hide {
        display: none;
    }

    .text-center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }

    .traffic-light-cell {
        width: 10%;
        padding-left: 10px;
    }

        .traffic-light-cell img {
            border: 0;
            width: 10px;
            height: 10px;
        }
</style>
<div>
    <div id="divImport" class="FillForm"   style="width: 100%">
        <div id="divMultidistinta" class="hide">
            <table class="main">
                <tr>
                    <td class="title text-center">
                        Importazione n. 
                    <span id="numImportazione">
                        imp-20190927_1150_20_082_0000442463
                    </span>
                </td>
                </tr>
                <tr>
                    <td id="RichiestaPer" class="text-center bold">
                        Richiesta per <span id="initialJobItems"></span>
                         file di <span id=""></span>
                        distinte 
                    </td>
                </tr>
                <tr>
                    <td id="ElaboazioneDati" class="text-center bold">
                        Elaborati: 
                        <span id="jiImported"></span>&nbsp;Importati
                        /<span id="jiModified"></span>&nbsp;In modifica
                        /<span id="jiRejected"></span>&nbsp;Scartato
                    </td>
                </tr>
            </table>
        </div>
        <table class="main"   style="width: 100%; margin: 0">
    <tr>
        <td class="title">Importazione distinta</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table style="width:400px;">
                <tr>
                    <td class="traffic-light-cell"><img title="Upload distinta" src='/anchise.web/Contents/00000/it-IT/Images/semaforo_verde.png?v=77' /></td>
                    <td>Upload distinta.</td>
                </tr>
                <tr>
                    <td class="traffic-light-cell"><img title="Controllo CC" src='/anchise.web/Contents/00000/it-IT/Images/semaforo_verde.png?v=77' /></td>
                    <td>Controllo CC.</td>
                </tr>
                <tr>
                    <td class="traffic-light-cell"><img title="Controllo validità" src='/anchise.web/Contents/00000/it-IT/Images/semaforo_verde.png?v=77' /></td>
                    <td>Controllo validità.</td>
                </tr>
                <tr>
                    <td class="traffic-light-cell"><img title="Importazione distinta" src='/anchise.web/Contents/00000/it-IT/Images/semaforo_giallo.png?v=77' /></td>
                    <td>Importazione distinta.</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td   style="padding: 0 5px">
    <div id="progressbar"   style="width: 100%"><div class="progress-label" style="width: 50px">0%</div></div>
</td>
    </tr>
</table>
    </div>
</div>

<script type="text/javascript">
    var polling;
    var initialJobItems;
    var PROG_DURATION = 350;

    var AsyncStatus = (function(){
        // enum ASYNC$LKStatus
        var INSERITO = 0;
        var INELABORAZIONE = 1;
        var OK = 2;
        var WARNING= 3;
        var KO = 4;
        // method
        var IsDone = function (idStatus){
            return idStatus > 1;
        };

        return {
            INSERITO: INSERITO,
            INELABORAZIONE: INELABORAZIONE,
            OK: OK,
            WARNING: WARNING,
            KO: KO,
            IsDone: IsDone
        }
    }());

    // Stop polling execution and 'redirect' to result page
    var exitFromProgressPage = function (importAndItems){
        clearTimeout(polling);

        $('#numImportazione').text(importAndItems.Job.NumeroImportazione);

        $('.traffic-light-cell').find('img')
                                .attr({"src": "/anchise.web/Contents/00000/it-IT/Images/semaforo_verde.png?v=77" });

        setProgressBar(100, function() {
            var id = 3117292;
            var d = {
                jobId: id
            };

            $("#divImport").hide();
            communicationLoad('/anchise.web/DISTINTE/AssegnaConto/GetImportDetail?trk=empty', d);
        });
    };

    // Set timeout before invoke doPoll function
    var setTimeoutDoPoll = function (){
        polling = setTimeout(doPoll, 500);
    };

    // Set the length and the style of the progressbar
    // percentage in [0,100]
    var setProgressBar = function (percentage, callback){
        var progressbar = $( "#progressbar" );

        progressbar.progressbar("value", parseInt(percentage));

        if (callback && typeof callback == "function") {
            callback();
        }
    };

    // Update panel status job items named 'ElaborazioneDati'
    var updateElaborazioneDati = function (jobAndItems){
        var ji = jobAndItems.JobItems;
        var numImported = 0,
            numModified = 0,
            numRejected = 0;

        for (var i = 0; i < ji.length; i++) {
            switch (ji[i].IdStatus) {
                case AsyncStatus.OK:
                    numImported++;
                    break;
                case AsyncStatus.WARNING:
                    numModified++;
                    break;
                case AsyncStatus.KO:
                    numRejected++;
                    break;
            }
        }

        $('#jiImported').text(numImported);
        $('#jiModified').text(numModified);
        $('#jiRejected').text(numRejected);
    }

    // Polling
    function doPoll() {

        var d = { id: 3117292 };

        $.ajax({
            url: '/anchise.web/DISTINTE/AssegnaConto/GetJobProgress?trk=empty',
            data: d,
            cache: false,
            method: 'GET',
            success: function (res) {

                if(!initialJobItems) {
                    initialJobItems = res.JobItems.length;
                    $('#initialJobItems').text(res.JobItems.length);
                }

                if (initialJobItems > 1) {
                    // Multidistinta
                    $('#divMultidistinta').show();

                    updateElaborazioneDati(res);

                    setProgressBar(res.Job.Percentage);

                    if(res.Job.ExitFromProgressPage){
                        exitFromProgressPage(res);
                    }else{
                        setTimeoutDoPoll();
                    }
                }else{
                    // Singola
                    if(res.Job.ExitFromProgressPage){
                        exitFromProgressPage(res);
                    }else{
                        var progPercentage = (res.JobItems.length > 0) ? res.JobItems[0].Perc : 0;

                        setProgressBar(progPercentage);

                        setTimeoutDoPoll();
                    }
                }

            }
        });
    }

    // Document Ready
    $(document).bind("ready",function() {

        // Restyling
        var mainSectionSelector = '#MainSection';
        var mainSection = $(mainSectionSelector);
        var divImport = $('#divImport').parent();

        divImport.remove();
        mainSection.html(divImport);

        mainSection.css('visibility', 'hidden');
        FormatYouBizDom(mainSection, false);
        mainSection.css('visibility', 'visible');

        // Initialize progressbar
        var progressbar = $( "#progressbar" ),
            progressLabel = $( ".progress-label" );

        progressbar.progressbar({
            value: false,
            change: function() {
                progressLabel.text( progressbar.progressbar( "value" ) + "%" );
            }
        });

        // Polling
        setTimeoutDoPoll();

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
                            <img src='/anchise.web/Contents/00000/it-IT/Images/assistenza-footer.png?v=77' />
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            Numero Verde
                            <strong>
                                800.607.227
                            </strong>
                            <br />
                            Dall'estero
                            <strong>
                                +39 02.43371097
                            </strong>
                        </div>
                    </div>
                    <div class="col-xs-12" style="margin-bottom: 6px;line-height: 1.2em;font-size: 1.2em;">
                        <div style="display: inline-block;">
                            <img src='/anchise.web/Contents/00000/it-IT/Images/gestore-footer.png?v=77' />
                        </div>
                        <div style="display: inline-block; width: 84%; vertical-align: top;font-size: 13.26px;">
                            <span style="white-space: nowrap">
                                Per qualsiasi altra esigenza è a tua disposizione
                            </span>
                            <br />
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
                    &#169; 2000-2015 - Vietata la riproduzione totale o parziale senza l&#39;autorizzazione scritta dei detentori del copyright
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

