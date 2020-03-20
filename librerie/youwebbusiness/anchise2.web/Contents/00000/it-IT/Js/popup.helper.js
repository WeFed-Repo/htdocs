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

****** I seguenti parametri sono stati inseriti per rendere il componente più generico e permettere la visualizzazione di più popup in una pagina (vedi esiti SDD)
****** Se non ci sono questi 2 parametri il popup verrà iniettato sotto il primo elemento con classe ".icon-help" come è sempre avvenuto.
- idElement: id che si vuole dare al popup.
- idDraggable: id dell'elemento sotto cui si vuole iniettare l'html del popup.

Funzionamento:
1) Al primo click sull'icona di help viene iniettato nella pagina l'html dell'helper.
2) Se l'helper corrispondente al functionId non è già stato caricato chiama il controller e se lo fa restituire.
3) Mette il testo dell'helper dentro al popup.
4) Visualizza il popup.
5) In caso di anchorId scrolla il testo fino all'ancora.
*/


var helperDictionary = {};
var titleDictionary = {};
var idPopupModal = 'idPopupHelperModalDiv';
var idPopup = 'idPopupHelperDraggableDiv';
var idDraggableSection = 'idPopupHelperDraggableDiv';

function showPopupHelp(searchUrl, labelButtonChiudi, functionId, anchorId, isModal, idElement, idDraggable) {
    if (idElement) {
        idPopup = idElement;
        idDraggableSection = idDraggable;
    } else {
        idPopup = 'idPopupHelperDraggableDiv';
        idDraggableSection = 'idPopupHelperDraggableDiv';
    }

    addPopupToPage(labelButtonChiudi);
    
    if (helperDictionary[functionId] == null) {
        //console.log('calling server');
        Http.Post(searchUrl, JSON.stringify({ funzioneId: functionId }))
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

                $("#" + idPopup).find("#popupTitolo").html(titleDictionary[functionId]);
                $("#" + idPopup).find("#popupContenuto").html(helperDictionary[functionId]);
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
    if (($(".icon-help").length && !$("#" + idPopup).length)) {

        var htmlModal = '<div class="modal-layer" style="display: none;" id="' + idPopupModal + '"></div>';

        var htmlPopup = '<div class="popup-container section" id="' + idPopup + '">\
                            <div id="popup-title" class="row popup-riquadro popup-riquadro-top">\
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
                            <div class="row popup-footer popup-riquadro popup-riquadro-bottom text-right">\
                                    <input type="button" class="btn" value="' + labelButtonChiudi + '" onclick="javascript: closePopupHelp();" />\
                            </div>\
                        </div>';

        // se è presente il parametro di input "idDraggable" l'html del popup viene iniettato sotto l'elemento indicato
        if ($("#" + idDraggableSection).length == 0) {
            $(".icon-help").first().after(htmlModal);
            $(".icon-help").first().after(htmlPopup);
        } else {
            $("#" + idDraggableSection).after(htmlModal);
            $("#" + idDraggableSection).after(htmlPopup);
        }

        $("#" + idPopup).draggable({ handle: ".popup-riquadro" });
    }
}

