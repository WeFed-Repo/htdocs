/*
    POPUP DOC
    per sviluppo, nei commenti sono state usate parole chiave per definire punti importanti:
        . CHECK         controlli sul dato
        . TODO          rivedere o gestire un'intera funzionalità
    
    .   var popup = sdk.popup(DOMElement|Selector, {
            html: function() {                              //ritorna HTML da inserire come contenuto del modale
            
            },
            footer: function() {                            //ritorna HTML da inserire nel footer
            
            },
            title: string,                                  //titolo
            titleIcon: string,                              //scudetto del titolo
            width: number,                                  //larghezza fissa
            height: number,                                 //altezza massima
            minHeight: number,                              //altezza minima
            measure: string,                                //valori possibili: px|em|% - unità con cui esprimere le misure (default: px)

            events: {
                handler: function(type, target, data) {     //funzione per la gestione degli eventi relativi alle operazioni sul modale

                },
                bind: function() {                          //funzione per l'aggiunta del bind di componenti HTML aggiunti dinamicamente con le funzioni html() e footer()
                
                },
            },

            //predicati
            isScrollable: boolean,                          //true: contenuto scrollabile se più grande dell'altezza massima, false: nasconde il contenuto se più grande dell'altezza massima
        })

    . popup.open(object)        //apre il modale
        object = {
            message: string,    //messaggio notifica
            title: string,      //titolo notifica
            type: string        //tipo notifica: error, alert, success
        }
      se object == null allora apre il modale ed il suo contenuto
      se object non null allora apre il modale con la notifica attiva e contenuto nascosto

    . popup.close()             //chiude il popup
    . popup.dispose()           //distrugge il popup e tutto il suo scope
    . popup.element             //restituisce l'elemento che comanda il popup

    . popup.notify              //resituisce l'oggetto che gestisce lo specchietto di notifica (vedi: sdk.notify)
    
      i tipi di evento disponibili sono:
          close                 -> alla chiusura del modale [target: elemento dom, data: null]
          dispose               -> alla distruzione del modale [target: elemento dom, data: null]

*/

var sdk;
var sdkParams;

(function (sdk, $, args) {

    sdk.popup = (function (popup, $, args) {


        var scope = function (element, options) {

            return {

                events: options.events,

                element: $(element),

                //apertura popup
                open: function (message, title, type) {

                    var modal = $('.tm-modal', this.element);

                    //rendiamo visibile il popup
                    modal.css('display', '');

                    //prendiamo il contenuto del popup per trattarlo diversamente in caso di ok o ko.
                    var modalContent = $('.tm-modal-contents', this.element);


                    if (message != undefined && message != '') {

                        //se type non definito, di default è un error
                        if (type == undefined || type == '') {
                            type = 'error';
                        }

                        //in caso di errore: nascondiamo il contenuto del modale e mostriamo la notifica dell'errore
                        modalContent.css('display', 'none');

                        this.notify.fill({ type: type, message: message, title: title });

                    } else {

                        //altrimenti chiudiamo eventuali notifiche aperte e mostriamo il contenuto del modale
                        modalContent.css('display', '');
                        this.notify.close();

                    }
                },

                //chiusura popup
                close: function () {

                    $('div[tm-modal]', this.element).data().events.handler('close', this.element, null);

                    //rendiamo visibile il popup
                    $('.tm-modal', this.element).css('display', 'none');
                },

                //libera le risorse allocate
                dispose: function () {

                    $('div[tm-modal]', this.element).data().events.handler('dispose', this.element, null);

                    //eliminazione del modale
                    $('div[tm-modal]', this.element).remove();
                    $('div.tm-modal-default', this.element).remove();
                },

                //esegue il bind degli eventi
                bind: function () {

                    var close = $('div[tm-modal] div.tm-modal-footer input.modal-close');
                    close.unbind();
                    close.click(function (event) {

                        $(event.target).closest('div[tm-modal]').data().close();
                    });

                    $('div[tm-modal]', this.element).data().events.bind();
                }
            }
        };

        var setDefaultValues = function (options) {

            if (isNullOrInvalid(options.width, 'number')) {
                options.width = 800;
            }

            if (isNullOrInvalid(options.isClosable, 'boolean')) {
                options.isClosable = true;
            }

            if (isNullOrInvalid(options.height, 'number')) {
                options.height = 600;
            }

            if (isNullOrInvalid(options.measure, 'string')) {
                options.measure = 'px';
            }

            if (isNullOrInvalid(options.isScrollable, 'boolean')) {
                options.isScrollable = true;
            }

            if (isNullOrInvalid(options.html, 'function')) {
                options.html = $.noop;
            }

            if (isNullOrInvalid(options.footer, 'function')) {
                options.footer = $.noop;
            }

            if (isNullOrInvalid(options.titleIcon, 'string')) {
                options.titleIcon = '';
            }

            if (isNullOrInvalid(options.events, 'object')) {
                options.events = {};
            }

            if (isNullOrInvalid(options.events.handler, 'function')) {
                options.events.handler = $.noop;
            }

            if (isNullOrInvalid(options.events.bind, 'function')) {
                options.events.bind = $.noop;
            }

            return options;
        };

        var isNullOrInvalid = function (input, typeExpected) {

            if (input == undefined) {
                return true;
            }

            if (typeof input != typeExpected) {
                throw 'ERR. Expected ' + typeExpected + ' but give ' + typeof input;
            }

            return false;
        };

        var _ = {
            creaPopup: function (element, options) {

                element = $(element);

                var modal = $('div[tm-modal]', element);
                modal.remove();

                var html = options.html();
                var footer = options.footer();

                modal = ''
                    + ' <div class="riquadro" tm-modal>'
                    + ''
                    + '     <div class="tm-modal">'
                    + ''
                    + '' //overlay
                    + '         <div class="overlay">&nbsp;</div>'
                    + ''
                    + '' //popup
                    + '         <div class="tm-modal-layer">'
                    + ''
                    + '             <div class="tm-modal-container section tabSelezioneCC">'
                    + ''
                    + '' //header
                    + '                 <div class="riquadro tm-modal-header">'
                    + '                     <div class="clearfix">'
                    + '                         <div class="' + (options.titleIcon == undefined || options.titleIcon == '' ? 'flag riepilogo' : options.titleIcon) + '">&nbsp;</div>'
                    + '                         <h1>' + options.title + '</h1>'
                    + '                     </div>'
                    + '                 </div>'
                    + ''
                    + '' //notify
                    + '                 <div class="tm-modal-notify"></div>'
                    + ''
                    + '' //contents
                    + '                 <div class="tm-modal-contents clearfix">'
                    + '                     <br />'
                    + '                     ' + (html == undefined ? '' : html)
                    + '                 </div>'
                    + ''
                    + '' //footer
                    + '                 <div class="row tm-modal-footer">'
                    + '                     <div class="col-xs-12 text-right margin-top10">'
                    + '                         ' + (footer == undefined ? '' : footer)
                    + '                         ' + (options.isClosable == true ? '<input type="button" class="btn btn-primary modal-close" value="' + sdk.resource.get('sdk.popup.button.chiudi') + '" />' : '')
                    + '                     </div>'
                    + '                 </div>'
                    + ''
                    + '             </div>'
                    + ''
                    + '         </div>'
                    + '     </div>'
                    + ' </div>'
                    + '';

                //aggiungiamo l'HTML al DOM
                element.html(modal);
                
                //gestione specchietto di notifica e registrazione dell'oggetto di notifica nello scope
                var data = scope(element, options);
                data.notify = sdk.notify('div.tm-modal-notify');

                $('div > p', data.notify.element)
                    .css('margin-bottom', '0 !important');

                //aggiungiamo lo stile
                $('.overlay', element)
                    .css('z-index', '9998')
                    .css('position', 'fixed')
                    .css('height', '100%')
                    .css('width', '100%')
                    .css('top', '0')
                    .css('left', '0')
                    .css('background-color', 'rgba(0, 0, 0, 0.4)')
                    .css('overflow-x', 'hidden');

                $('.tm-modal', element)
                    .css('z-index', '9999')
                    .css('display', 'none')
                    .css('position', 'fixed')
                    .css('height', '100%')
                    .css('width', '100%')
                    .css('top', '20px')
                    .css('left', '0')
                    .css('margin', 'auto');

                $('.tm-modal .tm-modal-layer .tm-modal-container', element)
                    .css('z-index', '9999')
                    .css('max-width', options.width + '' + options.measure)
                    .css('margin', 'auto');

                var tmodalContainer = $('.tm-modal .tm-modal-layer .tm-modal-container .tm-modal-contents', element);
                tmodalContainer.css('display', 'none')
                    .css('background', 'none')
                    .css('overflow-y', options.isScrollable ? 'auto' : 'hidden')
                    .css('max-height', options.height + '' + options.measure);

                if (options.minHeight != undefined && typeof options.minHeight != 'string' && options.minHeight > 0) {
                    tmodalContainer.css('min-height', options.minHeight + '' + options.measure);
                }

                $('.riquadro', element)
                    .css('padding', '0')
                    .css('margin', '0')
                    .css('border', 'none')
                    .css('box-shadow', 'none');

                $('.tm-modal-header', element)
                    .css('border-bottom', '1px solid #b7c5b7');


                $('.tm-modal-footer', element)
                    .css('border-top', '1px solid #b7c5b7')
                    .css('display', 'none');

                modal = $('div[tm-modal]', element);

                var _footer = $('.tm-modal div.tm-modal-footer');
                var _footerChildren = _footer.children().children();
                if (_footerChildren != undefined && _footerChildren.length > 0) {
                    _footer.show();
                } 

                //se tutto OK allora aggiungiamo uno scope al DOM per la gestione del modale
                modal.data(data);

                //bind degli eventi
                modal.data().bind();
            }

        };


        return function (DOMElement, options) {

            var DOMElementType = typeof DOMElement;

            try {

                //CHECK: controlliamo l'input
                if (DOMElementType != 'string' && !('jquery' in Object(DOMElement))) {

                    if (DOMElementType == 'object' && !Array.isArray(DOMElement)) {

                        //se non è string allora potrebbe essere object
                        options = DOMElement;
                        DOMElement = undefined;

                    }/* else {

                        //non è string e non è object: exception
                        if (DOMElementType == 'object')
                            DOMElementType = 'array';

                        throw 'ERR. Il parametro DOMElement deve essere tipo string oppure object, invece è di tipo {0}'.format(DOMElementType);
                    }*/
                }

                if (DOMElement == undefined) {
                    DOMElement = '';
                }

                //DEFAULT
                options = setDefaultValues(options);

                //se non è stato passato alcun elemento oppure l'elemento passato è null o vuoto o solo spazi
                //allora creiamo noi un elemento che ospiti il modale
                if (typeof DOMElement != 'string' && DOMElement.length == 0) {
                    DOMElement = '';
                }

                if (typeof DOMElement == 'string') {

                    if (DOMElement == '') {

                        DOMElement = 'tm-modal-default';

                        if ($('.' + DOMElement).length == 0) {

                            $('body').append(''
                                + ' <div class="mainContent ' + DOMElement + '">'
                                + ''
                                + ' </div>'
                                + '');
                        }

                        DOMElement = '.tm-modal-default';
                    }
                }

                //da questo momento in poi DOMElement diventa un oggetto jQuery.
                //in questo modo è possibile trattare sia un selettore di tipo stringa che già un oggetto jQuery.
                DOMElement = $(DOMElement);

                //CHECK: se non è presente alcun elemento allora lanciamo un'eccezione
                if (DOMElement.length < 1) {

                    throw 'ERR. Non è stato trovato alcun elemento su cui creare il popup. Selettore usato: ' + DOMElement.selector;
                }

            } catch (ex) {

                delete DOMElementType;
                throw ex;
            }

            _.creaPopup(DOMElement, options);

            //ritorniamo l'elemento contenente il popup pronto per l'utilizzo
            return $('div[tm-modal]', DOMElement).data();
        };

    })(sdk.popup || {}, $, args || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
