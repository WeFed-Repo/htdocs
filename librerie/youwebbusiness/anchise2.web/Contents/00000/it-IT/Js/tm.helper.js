﻿/////*
////* *********************************************
////* tm.helper - Client-side
////* Version 1.0
////* @requires jquery-jquery-1.11.3.min.js
////* Copyright (c) 2016 David Passilongo
////* *********************************************
////*/
/*
README:
Gestione visualizzazione pagine statiche in popup o in pagina.

var parameter = {};
parameter.isPopup = true o false per la visualizzazione in popup;
parameter.searchUrl = per sapere quale controller e quale metodo invocare;
parameter.functionId = l'id che il controller userà per identificare il testo dell'helper da ritornare;
parameter.isModal = true per non rendere editabile la pagina con l'helper visualizzato.
parameter.anchorId = eventuale ancora per scrollare il testo al punto voluto una volta aperto l'helper, altrimenti mettere a null;

showHelp(parameter, jPanel)

Note: in modalità popup se chiamato nel onload della pagina non visualizza nulla
      funziona solo su evento agganciato ad un controller della pagina già caricata

Per il popup:
            var jPanel = $('#@name');
            var parameter = {};
            parameter.isPopup = true;
            parameter.searchUrl = '@Url.Action("GetHelp", "Help", new { Area = "Help" })';
            parameter.functionId = 'help_CBILL';
            parameter.isModal = true;
            parameter.anchorId = null;
            showHelp(parameter, jPanel);

Esempio in pagina:
            var jPanel = $('#@name');
            var parameter = {};
            parameter.isPopup = false;
            parameter.searchUrl = '@Url.Action("GetHelp", "Help", new { Area = "Help" })';
            parameter.functionId = 'UI45XCSHTML';
            showHelp(parameter, jPanel);
*/

var helperDictionary = {};
var titleDictionary = {};
var idPopupModal = 'idPopupHelperModalDiv';
var idPopup = 'idPopupHelperDraggableDiv';
var idDraggableSection = 'idPopupHelperDraggableDiv';
var getContextParameter = {};

function showHelp(parameter, jTarget) {
    //Logger.debugMessage('tm.helper - start showHelp(parameter:' + parameter + ' - jTarget:' + jTarget + ')');
    sdk.utils.log.debugMessage('tm.helper - start showHelp(parameter:' + parameter + ' - jTarget:' + jTarget + ')');
    parameter = this._fixedParameter(parameter);
    // debugger;
    if (parameter.isPopup) {
        //Logger.debugMessage('tm.helper - start showPopup');
        sdk.utils.log.debugMessage('tm.helper - start showPopup');
        showPopup(parameter);
    } else {
        if (jTarget) {
            //Logger.debugMessage('tm.helper - start showPage');
            sdk.utils.log.debugMessage('tm.helper - start showPage');
            showPage(parameter, jTarget);
        } else {
            //Logger.debugMessage('tm.helper - Error: jTarget Not Found');
            sdk.utils.log.debugMessage('tm.helper - Error: jTarget Not Found');
            alert('Error: jTarget Not Found');
        }
    }

}



var _fixedParameter = function (inputParameter) {
    var toretparameter = {};
    toretparameter.searchUrl = null;
    toretparameter.isPopup = null;
    toretparameter.isModal = null;
    toretparameter.anchorId = null;
    toretparameter.functionId = null;
    //debugger;
    //Inizializzo parametri
    if (inputParameter) {
        if (inputParameter.searchUrl == undefined) {
            toretparameter.searchUrl = '/YouBiz.Sdk/Help/Help/GetHelp';
            //Logger.debugMessage('tm.helper - fixed inputParameter.searchUrl = ' + toretparameter.searchUrl + ' (original inputParameter.searchUrl = null)');
            sdk.utils.log.debugMessage('tm.helper - fixed inputParameter.searchUrl = ' + toretparameter.searchUrl + ' (original inputParameter.searchUrl = null)');
        } else {
            toretparameter.searchUrl = inputParameter.searchUrl;
        }
        if (inputParameter.functionId == undefined) {
            toretparameter.functionId = 'help_notFound';
            //Logger.debugMessage('tm.helper - fixed inputParameter.functionId = ' + toretparameter.functionId + ' (original inputParameter.functionId = null)');
            sdk.utils.log.debugMessage('tm.helper - fixed inputParameter.functionId = ' + toretparameter.functionId + ' (original inputParameter.functionId = null)');
        } else {
            toretparameter.functionId = inputParameter.functionId;
        }
        if (inputParameter.isPopup == undefined) {
            toretparameter.isPopup = true;
            //Logger.debugMessage('tm.helper - fixed inputParameter.isPopup = ' + toretparameter.isPopup + ' (original inputParameter.isPopup = null)');
            sdk.utils.log.debugMessage('tm.helper - fixed inputParameter.isPopup = ' + toretparameter.isPopup + ' (original inputParameter.isPopup = null)');
        } else {
            toretparameter.isPopup = inputParameter.isPopup;
        }
        if (inputParameter.isModal == undefined) {
            toretparameter.isModal = true;
            //Logger.debugMessage('tm.helper - fixed inputParameter.isModal = ' + toretparameter.isModal + ' (original inputParameter.isModal = null)');
            sdk.utils.log.debugMessage('tm.helper - fixed inputParameter.isModal = ' + toretparameter.isModal + ' (original inputParameter.isModal = null)');
        } else {
            toretparameter.isModal = inputParameter.isModal;
        }
        if (inputParameter.anchorId == undefined) {
            toretparameter.anchorId = true;
            //Logger.debugMessage('tm.helper - fixed inputParameter.anchorId = ' + toretparameter.anchorId + ' (original inputParameter.anchorId = null)');
            sdk.utils.log.debugMessage('tm.helper - fixed inputParameter.anchorId = ' + toretparameter.anchorId + ' (original inputParameter.anchorId = null)');
        } else {
            toretparameter.anchorId = inputParameter.anchorId;
        }

    } else {

        toretparameter.searchUrl = '/YouBiz.Sdk/Help/Help/GetHelp';
        toretparameter.isPopup = true;
        toretparameter.isModal = true;
        toretparameter.anchorId = null;
        toretparameter.functionId = 'help_notFound';

        sdk.utils.log.debugMessage('tm.helper - inputParameter = null');
        sdk.utils.log.debugMessage('tm.helper - start fixed value default inputParameter');
        sdk.utils.log.debugMessage('tm.helper - inputParameter.searchUrl: ' + toretparameter.searchUrl);
        sdk.utils.log.debugMessage('tm.helper - inputParameter.isPopup: ' + toretparameter.isPopup);
        sdk.utils.log.debugMessage('tm.helper - inputParameter.isModal: ' + toretparameter.isModal);
        sdk.utils.log.debugMessage('tm.helper - inputParameter.anchorId: ' + toretparameter.anchorId);
        sdk.utils.log.debugMessage('tm.helper - inputParameter.functionId: ' + toretparameter.functionId);
        sdk.utils.log.debugMessage('tm.helper - stop fixed value default inputParameter');

    }

    sdk.utils.log.debugMessage('tm.helper - outputParameter.searchUrl: ' + toretparameter.searchUrl);
    sdk.utils.log.debugMessage('tm.helper - outputParameter.isPopup: ' + toretparameter.isPopup);
    sdk.utils.log.debugMessage('tm.helper - outputParameter.isModal: ' + toretparameter.isModal);
    sdk.utils.log.debugMessage('tm.helper - outputParameter.anchorId: ' + toretparameter.anchorId);
    sdk.utils.log.debugMessage('tm.helper - outputParameter.functionId: ' + toretparameter.functionId);

    return toretparameter;
}

/*Chiamata ajax*/
var _ajaxPost = function (optionParameter, content) {
    //debugger;
    sdk.utils.log.debugMessage('tm.helper - start call ajax');
    
    return $.ajax({
        contentType: 'application/json',
        url: optionParameter.searchUrl,
        method: "POST",
        data: JSON.stringify({ funzioneId: optionParameter.functionId }),
        beforeSend: function (xhr) {
            //uiHelper.ShowLoader();
        },
        error: function (jqXhr, textStatus, errorThrown, val) {
            sdk.utils.log.debugMessage('tm.helper - error call ajax: ' + jqXhr.statusText);
            var bodyErrorPopup = '<div class="messagePanel error" style="display: block;margin-bottom: 0;margin-top: 0;">\
                			<h3 class="titleSection">' + sdk.resource.get('help.error.title') + '</h3><p><strong>' + sdk.resource.get('help.error.body') + jqXhr.statusText + '</strong></p>\
                			</div>';
            content.html(bodyErrorPopup);
        }

    });
}
/*Chiamata ajax*/

/*Area Page*/
function showPage(parameter, tmpjTarget) {
    //debugger;
    var internalFunctionId = parameter.functionId;
    if (helperDictionary[internalFunctionId] == null) {
        _ajaxPost(parameter, tmpjTarget)
            .success(function (html) {
                var htmlObject = $('<div/>').html(html).contents();
                tmpjTarget.html(htmlObject);
                sdk.utils.log.debugMessage('tm.helper - success call ajax');
            });
    } else {
        tmpjTarget.html(helperDictionary[internalFunctionId]);
    }
}
/*Area Page*/

/*Area Popup*/
function showPopup(parameter) {
    //debugger;
    addPopupToPage();
    if (helperDictionary[parameter.functionId] == null) {
        //console.log('calling server');
        _ajaxPost(parameter, $("#popupContenuto"))
            .success(function (html) {
                var titolo = '';
                var testoHtml = '';
                var htmlObject = $('<div/>').html(html).contents();
                $.each(htmlObject, function (index, value) {
                    if (value.nodeName === 'H1') {
                        titolo = value.innerHTML;
                    } else {
                        if (value.outerHTML != null)
                            testoHtml += value.outerHTML;
                    }
                });
                titleDictionary[parameter.functionId] = titolo;
                helperDictionary[parameter.functionId] = testoHtml;

                $("#popupTitolo").html(titleDictionary[parameter.functionId]);
                $("#popupContenuto").html(helperDictionary[parameter.functionId]);
                sdk.utils.log.debugMessage('tm.helper - success call ajax');
            });
    } else {
        $("#popupTitolo").html(titleDictionary[parameter.functionId]);
        $("#popupContenuto").html(helperDictionary[parameter.functionId]);
    }

    if (parameter.isModal) {
        $("#" + idPopupModal).show(0);
    }
    setTimeout(function () { $("#" + idPopup).show(0, function () { helperScrollText(parameter.anchorId); }); }, 100);

}

function helperScrollText(anchorId) {
    if (anchorId != null && document.getElementById(anchorId) != null) {
        var scrollPosition = [];
        if (window.chrome != null) {
            //solo per chrome c'è il problema che scrollando il testo del popup scrolla pure la pagina. In questo modo riporto la pagina alla posizione di partenza
            scrollPosition = [window.pageXOffset, window.pageYOffset];
        }
        //document.getElementById(anchorId).scrollIntoView(true);
        location.hash = "#" + anchorId;
        if (window.chrome != null) {
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }
    }
    else {
        $(".popup-scroller").scrollTop(0);
    }
}

function closePopupHelp() {
    $("#" + idPopupModal).hide(0);
    $("#" + idPopup).hide(0);
}

function addPopupToPage() {
    //se c'è l'icona di help e non c'è ancora il popup nella pagina
    if ($(".icon-help").length && !$("#" + idDraggableSection).length) {
        //console.log('injecting html');
        var htmlModal = '<div class="modal-layer" style="display: none;" id="' + idPopupModal + '"></div>';
        $(".icon-help").first().after(htmlModal);

        var htmlPopup = '<div class="popup-container section ui-draggable" id="' + idDraggableSection + '">\
                            <div id="popup-title" class="row popup-riquadro popup-riquadro-top ui-draggable-handle">\
                                <div class="clearfix">\
                                    <div class="flag info">&nbsp;</div>\
                                    <span>\
                                        <h1 id="popupTitolo">Help</h1>\
                                    </span>\
                                    <span class="popup-close-icon">\
                                        <a class="icon-replace icon-close active link" onclick="javascript: closePopupHelp();">Close</a>\
                                    </span>\
                                </div>\
                            </div>\
                            <div class="row popup-scroller">\
                                <div class="popup-inner-scroller">\
                                    <p id="popupContenuto"></p>\
                                </div>\
                            </div>\
                            <div class="row popup-footer popup-riquadro popup-riquadro-bottom text-right ui-draggable-handle">\
                                    <input type="button" class="btn" value="' + sdk.resource.get('help.button.close.value') + '" onclick="javascript: closePopupHelp();" />\
                            </div>\
                        </div>';

        $(".icon-help").first().after(htmlPopup);
        $("#" + idDraggableSection).draggable({ handle: ".popup-riquadro" });
    }
}
/*Area Popup*/























