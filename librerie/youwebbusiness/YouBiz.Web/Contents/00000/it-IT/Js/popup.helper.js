/*
README:
Popup per la visualizzazione di help

Una volta incluso nella mainpage il presente file basta inserire in una pagina o in un componente un link del tipo
<a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('@Url.ActionCrypted("GetHelper", "DataEntry")', '@Html.LocalizedResource("AnagraficaSearch.Chiudi")', 'Bonifici', 'ancoraGlossario', true);">Help On Line</a>
Il metodo showPopupHelp(searchUrl, labelButtonChiudi, functionId, anchorId, isModal) vuole i seguenti parametri:
- searchUrl: per sapere quale controller e quale metodo invocare;
- labelButtonChiudi: finchè c'è il bottone chiudi serve l'etichetta internazionalizzata;
- functionId: l'id che il controller userà per identificare il testo dell'helper da ritornare;
- anchorId: eventuale ancora per scrollare il testo al punto voluto una volta aperto l'helper, altrimenti mettere a null;
- isModal: true per non rendere editabile la pagina con l'helper visualizzato.

Funzionamento:
1) Al primo click sull'icona di help viene iniettato nella pagina l'html dell'helper.
2) Se l'helper corrispondente al functionId non è già stato caricato chiama il controller e se lo fa restituire.
3) Mette il testo dell'helper dentro al popup.
4) Visualizza il popup.
5) In caso di anchorId scrolla il testo fino all'ancora.
*/


var helperDictionary = {};
var titleDictionary = {};
//var idPopup = 'idPopupHelperDiv';
var idPopupModal = 'idPopupHelperModalDiv';
var idPopup = 'idPopupHelperDraggableDiv';
var idDraggableSection = 'idPopupHelperDraggableDiv';
var _ajaxPost = function (url, json) {
    return $.ajax({
        contentType: 'application/json',
        url: url,
        method: "POST",
        data: json,
        beforeSend: function (xhr) {
            //uiHelper.ShowLoader();
        },
        error: function (jqXhr, textStatus, errorThrown, val) {
            //debugger;
            alert("Chiamata fallita in popupjs!!!");
       }

    });
}
/*Area Popup*/
function showPopupHelp(searchUrl, labelButtonChiudi, functionId, anchorId, isModal) {
        addPopupToPage(labelButtonChiudi);
        if (helperDictionary[functionId] == null) {
        //console.log('calling server');
            _ajaxPost(searchUrl, JSON.stringify({ funzioneId: functionId }))
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
                titleDictionary[functionId] = titolo;
                helperDictionary[functionId] = testoHtml;

                $("#popupTitolo").html(titleDictionary[functionId]);
                $("#popupContenuto").html(helperDictionary[functionId]);
            });
    } else {
            $("#popupTitolo").html(titleDictionary[functionId]);
            $("#popupContenuto").html(helperDictionary[functionId]);
    }

    if (isModal) {
        $("#" + idPopupModal).show(0);
    }
    setTimeout(function () { $("#" + idPopup).show(0, function () { helperScrollText(anchorId); }); }, 100);

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

function addPopupToPage(labelButtonChiudi) {
    //se c'è l'icona di help e non c'è ancora il popup nella pagina
    if ($(".icon-help").length && !$("#" + idDraggableSection).length) {
        //console.log('injecting html');
        var htmlModal = '<div class="modal-layer" style="display: none;" id="' + idPopupModal + '"></div>';
        $(".icon-help").first().after(htmlModal);

        var htmlPopup = '<div class="popup-container section" id="' + idDraggableSection + '">\
                            <div id="popup-title" class="row popup-riquadro">\
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
                            <div class="row popup-footer popup-riquadro text-right">\
                                    <input type="button" class="btn" value="' + labelButtonChiudi + '" onclick="javascript: closePopupHelp();" />\
                            </div>\
                        </div>';

        $(".icon-help").first().after(htmlPopup);
        $("#" + idDraggableSection).draggable({ handle: ".popup-riquadro" });
    }
}
/*Area Popup*/


