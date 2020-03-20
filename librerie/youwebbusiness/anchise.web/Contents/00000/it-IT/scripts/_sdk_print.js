/*
    DOCUMENTS DOCS
      sdk.print('.stampe').create({
        docs: object,
        eventHandler: function(eventType, target, data) {
            ...
        }
        ...
      });

      docs' map:
        [
            {
                id: 'all-1',
                type: 'pdf',
                iconClass: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/zip-icon.png',
                label: '',
                title: '',
                target: '',
                items: [
                    {
                        label: 'Movimenti di Conto Corrente (1/2)',
                        title: '',
                        iconClass: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/pdf-icon.png',
                        resourceForm: {
                            action: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/prova.pdf',
                            parameter: {

                            },
                            serialization: {
                                fieldName: '',
                                mode: '',
                            }
                        }
                    }, {
                        label: 'Movimenti di Conto Corrente (2/2)',
                        iconClass: undefined,
                        resourceForm: {
                            action: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/prova.docx',
                            parameter: {

                            },
                            serialization: {
                                fieldName: '',
                                mode: '',
                            }
                        }
                    }
                ],
                saveAll: {
                    label: 'Scarica tutti i PDF',
                    resourceForm: {
                        action: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/prova_pdf.zip',
                        parameter: {

                        }
                    }
                }
            }, {
                id: 'doc-1',
                type: 'doc',
                iconClass: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/doc-icon.png',
                items: [
                    {
                        label: 'Movimenti di Conto Corrente',
                        iconClass: undefined,
                        resourceForm: {
                            action: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/prova.docx',
                            parameter: {

                            },
                            serialization: {
                                fieldName: '',
                                mode: '',
                            }
                        }
                    }
                ],
                saveAll: {
                    label: 'Scarica tutti i PDF',
                    resourceForm: {
                        action: 'http://localhost/Sdk.Web.Sample/Contents/00000/it-IT/css/stampa/prova_pdf.zip',
                        parameter: {

                        }
                    }
                }
            }
        ]
        
      i tipi di evento disponibili sono:
          change             -> scatenato al click sul tipo documento (menu) [target: elemento dom, data: oggetto contenente il tipo documento e la lista dei documenti]
          downloadAll        -> scatenato al click sul save-all [target: elemento dom, data: oggetto contenente il tipo documento e la lista dei documenti]
          download           -> scatenato al click sul salvataggio di un singolo documento [target: elemento dom, data: oggetto del documento in download]

        + eventi ereditati dal popup:
          close
          dispose

*/

var sdk;
var sdkParams;

(function (sdk, $, args) {

    sdk.print = (function (print, $, args) {

        var _print = function (element) {

            var _jqElement = $(element);

            //CHECK: input
            if (_jqElement == undefined || (_jqElement != undefined && _jqElement.length < 1)) {

                //THROW: element non è definito oppure non produce un oggetto jquery 
                throw sdk.resource.get('print.element.notExistsOrBadValue');
            }

            return {
                element: _jqElement,

                create: function (options) {
                    var _scope = this;

                    try {

                        //step1: check dei campi obbligatori.
                        //se qualcosa va in errore a questo livello: si manda in eccezione lo script js

                        //CHECK: input
                        if (options == undefined) {

                            //THROW: options non è definito
                            throw sdk.resource.get('print.options.notExists');
                        }

                        if (Array.isArray(options.docs) == false) {

                            //THROW: docs non definito o non formato corretto
                            throw sdk.resource.get('print.options.docs.notExistsOrBadValue');
                        }

                        if (options.eventHandler != undefined) {
                            if (typeof options.eventHandler != 'function') {

                                //THROW: eventHandler non definito o non formato corretto
                                throw sdk.resource.get('print.options.eventHandler.notExistsOrBadValue');
                            }
                        } else {
                            options.eventHandler = $.noop;
                        }

                        var popupOptions = {
                            title: sdk.resource.get('sdk.print.title'),
                            titleIcon: 'flag riepilogo',
                            width: 800,
                            height: 600,
                            measure: 'px'
                        };


                        //BODY: creazione del widget di stampa

                        //aggiungiamo le options allo scope (lo aggiungiamo anche allo scope dell'elemento, così da poterlo avere sempre a dispozione)
                        _scope.options = options;

                        if (options.popupOptions == undefined) {
                            _scope.options.popupOptions = popupOptions;
                        }

                        _scope.options.popupOptions = $.extend(popupOptions, _scope.options.popupOptions);

                        _scope._inner = {
                            popupOptions: {
                                html: function () {
                                    return ''
                                        + ' <div class="tm-modal-filters" style="display: none;">'
                                        + '     <div class="row">'
                                        + '         <div class="col col-xs-2" style="font-weight: 800;">' + sdk.resource.get('sdk.print.menu.title') + '</div>'
                                        + '         <div class="col col-xs-10 header-buttons"></div>'
                                        + '     </div>'
                                        + '     <hr style="width: 80%; margin: auto; margin-top: 5px; border: 1px solid #e7e7e7; border-top: 0; border-right: 0; border-left: 0;" />'
                                        + ' </div>'
                                        + ' <div class="row print-list" style="overflow: auto; max-height: 200px; width: 100%;"></div>';
                                },
                                footer: function () {
                                    return '<a role="button" class="btn btn-primary saveAll" style="display: none;">' + sdk.resource.get('sdk.print.button.saveAll') + '</a>';
                                },
                                title: _scope.options.popupOptions.title,
                                titleIcon: _scope.options.popupOptions.titleIcon,
                                width: _scope.options.popupOptions.width,
                                height: _scope.options.popupOptions.height,
                                minHeight: _scope.options.popupOptions.minHeight,
                                measure: _scope.options.popupOptions.measure,
                                isScrollable: true,
                                events: {
                                    handler: $.noop,
                                    bind: $.noop
                                }
                            }
                        };

                        _scope.element.data(_scope.options);

                        if (_scope.element.prop('tagName') != 'DIV' && _scope.element.prop('tagName') != 'SPAN') {
                            //apriamo il modale se il tag è != div e != span

                            _scope.element.click(function () {

                                //1 - generazione del popup
                                var popup = sdk.popup(undefined, _scope._inner.popupOptions);
                                _scope.element.data('popup', popup);

                                //2 - se docs contiene documenti
                                if (_scope.options.docs.length > 0) {


                                    //2.1 - cicliamo sui documenti per creare la testata
                                    $.each(_scope.options.docs, function (index, doc) {

                                        if (doc.items != undefined) {
                                            if (doc.items.length > 0) {

                                                var menuIconClass = (doc.type != undefined) ? 'icon-' + (doc.type.toLowerCase() == 'pdf' ? 'pdf-x' : doc.type.toLowerCase()) : undefined;
                                                if (doc.iconClass != undefined && doc.iconClass != '') {

                                                    menuIconClass = doc.iconClass;
                                                }

                                                //...popoliamo il menu con le testate dei documenti...
                                                $('.tm-modal-filters').show();
                                                $('.tm-modal-filters .row .header-buttons', popup.element).append(''
                                                    + ' <a class="tm-modal-link-button ' + menuIconClass + '-' + index + '" style="text-decoration: none !important; cursor: pointer;">'
                                                    + '     <div class="icon ' + menuIconClass + ' x2"></div>'
                                                    + ' </a>'
                                                    + '');

                                                //...aggiungiamo nello scope di ogni elementi del menu l'oggetto che identifica il menu stesso
                                                //e poi bindiamo l'evento di click per la modifica del contenuto dinamico...
                                                $('.tm-modal-filters .row a.' + menuIconClass + '-' + index, popup.element).data(doc)
                                                    .click(function (event) {

                                                        //al click di una testata di menu, togliamo bordi e background di selezione a tutte le testate presenti...
                                                        $('.tm-modal-filters .row a div.icon', popup.element)
                                                            .css('border', '1px solid transparent')
                                                            .css('background-color', '');

                                                        //...per la sola testata selezionata aggiungiamo bordo e background colorati per dare feedback sulla selezione...
                                                        $('div.icon', this)
                                                            .css('border', '1px solid #e7e7e7')
                                                            .css('background-color', '#e7e7e7');

                                                        //..prendiamo data (dalla stessa testata)...
                                                        var data = $(this).data();

                                                        //...prendiamo l'elemento che conterrà la lista dei documenti...
                                                        var content = $('div.print-list', popup.element);

                                                        //...se c'è più di 1 documento allora visualiziamo il link per il salvataggio massivo, altrimenti lo si nasconde...
                                                        _saveAll(popup.element, data, _scope.options.eventHandler);

                                                        //...costruiamo la nostra lista di documenti...
                                                        _popupFilling(content, data, menuIconClass, _scope.options.eventHandler);
                                                    });
                                            }
                                        }
                                    });

                                    //2.2 - dal menu prendiamo il primo elemento (se esiste almeno un elemento nel menu) e simuliamo il click...
                                    var menu = $('.tm-modal-filters .row a', popup.element);
                                    if (menu != undefined && menu.length > 0) {
                                        menu[0].click();
                                    }
                                }

                                //3 - apriamo il popup.
                                popup.open();
                            });

                        } else {
                            //altrimenti disegnamo una select

                            var __element = _scope.element;
                            var __context = _scope.options;

                            //1 - creiamo la select
                            __element.append(''
                                + ' <div class="tm-print">'
                                + '     <div class="btn-group ' + __element.attr('class') + '">'
                                + '         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                                + '             ' + __element.attr('value') + ' <span class="caret" style="margin-left: 12px;"></span>'
                                + '         </button>'
                                + '         <ul class="dropdown-menu">'
                                + '         </ul>'
                                + '     </div>'
                                + '     <div class="print-popup"></div>'
                                + ' </div>');

                            //2 - cicliamo sui documenti
                            $.each(__context.docs, function (index, doc) {

                                //index     indice
                                //doc       documento

                                //2.1 - se ci sono documenti allora procedo a disegnare il contenuto della select
                                //if (doc.items.length > 0) {

                                //2.1.1 - per problemi di classi css, se il doc type è di tipo PDF allora lo modifichiamo lievemente per non collidere con classi già esistenti
                                var menuIconClass = (doc.type != undefined) ? 'icon-' + (doc.type.toLowerCase() == 'pdf' ? 'pdf-x' : doc.type.toLowerCase()) : undefined;
                                if (doc.iconClass != undefined && doc.iconClass != '') {

                                    menuIconClass = doc.iconClass;
                                }

                                //2.1.2 - creazione del contenuto della select
                                var listGroup = $('div.btn-group ul.dropdown-menu', __element);
                                listGroup.append(''
                                    + '             <li>'
                                    + '                 <a class="link-button ' + doc.type + '-' + index + '" ' + (doc.title != undefined && doc.title != '' ? ('title="' + doc.title + '"') : '') + ' style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">'
                                    + '                     <div class="icon ' + menuIconClass + '"></div>'
                                    + '                     <span style="margin-left: 12px;">' + (doc.label != undefined && doc.label != '' && doc.label != 'null' ? doc.label : doc.type) + '</span>'
                                    + '                 </a>'
                                    + '             </li>');

                                //2.1.3 - unbind e bind dell'evento click sui singoli link della select (l'unbind serve per non appendere molteplici bind di click sullo stesso elemento)
                                //inoltre aggiungiamo il singolo documento nello scope del relativo link, così da essere accessibile al click
                                $('a.link-button.' + doc.type + '-' + index, listGroup).unbind();
                                $('a.link-button.' + doc.type + '-' + index, listGroup)
                                    .data(doc)
                                    .click(function (event) {

                                        //$('.btn-group button', _scope.element).click();

                                        /*se esistono items allora procediamo alla generazione del popup e del suo contenuto...
                                        if (doc.items.length > 1) {

                                            //se la property saveAll non è stata definita allora generiamo il popup con la lista degli elementi
                                            //altrimenti viene eseguito il saveAll per il download diretto
                                            if (doc.saveAll == undefined) {
                                                if (_scope.options.infoOptions != undefined) {
                                                    //...generazione del popup informativo
                                                    var popup = sdk.popup($('div.print-popup', _scope.element), {
                                                        html: function () {
                                                            return ' <div class="row">'
                                                                + '    <div class="col-sm-12">'
                                                                + '    ' + sdk.resource.get('sdk.print.information.description').format(doc.items.length)
                                                                + '    </div>'
                                                                + ' </div>';
                                                        },
                                                        footer: function () {
                                                            return '<a role="button" class="btn btn-primary tm-print-ok">' + sdk.resource.get('sdk.print.button.ok') + '</a>';
                                                        },
                                                        title: _scope.options.infoOptions.title,
                                                        titleIcon: _scope.options.infoOptions.titleIcon,
                                                        width: _scope.options.infoOptions.width,
                                                        height: _scope.options.infoOptions.height,
                                                        minHeight: _scope.options.infoOptions.minHeight,
                                                        measure: _scope.options.infoOptions.measure,
                                                        isScrollable: true,
                                                        isClosable: false,
                                                        events: {
                                                            handler: $.noop,
                                                            bind: $.noop
                                                        }
                                                    });

                                                    $('a[role="button"].tm-print-ok', popup.element).data(doc);
                                                    $('a[role="button"].tm-print-ok', popup.element).click(function () {

                                                        _openPopup(this, _scope, menuIconClass);
                                                    });

                                                    popup.open();
                                                } else {

                                                    _openPopup(this, _scope, menuIconClass);
                                                }

                                            } else {

                                                _download(doc.saveAll, _scope.options.eventHandler, this, 'saveAll');
                                            }
                                        } else if (doc.items.length == 1) {

                                            //se invece c'è un elemento solo, allora procediamo al suo download.
                                            _download(doc.items[0], _scope.options.eventHandler, this);
                                        }*/

                                        if (doc.items != undefined && doc.items.length == 1) {

                                            //se esiste un solo elemento allora scarichiamo quell'elemento
                                            _download(doc.items[0], _scope.options.eventHandler, this, 'download');
                                        } else if (doc.saveAll != undefined) {

                                            //se non esiste alcun elemento oppure esiste più di un elemento, allora se esiste il saveAll scarichiamo lo zip
                                            _download(doc.saveAll, _scope.options.eventHandler, this, 'downloadAll');
                                        } else {

                                            //altrimenti andiamo in errore
                                            _scope.options.eventHandler('error', this, 'fileNotFound');
                                        }

                                    });
                                //}

                            });

                        }

                    } catch (ex) {

                        throw ex;
                    }

                    return _scope;
                }
            };
        }

        var _openPopup = function (element, scope, menuIconClass) {

            //...prendiamo il data del documento dall'elemento di link...
            var data = $(element).data();

            //...generazione del popup ed inserimento dello stesso nello scope dell'element
            popup = sdk.popup($('div.print-popup', scope.element), scope._inner.popupOptions);
            scope.element.data('popup', popup);

            //...prendiamo l'elemento che conterrà la lista dei documenti...
            var content = $('div.print-list', popup.element);

            //...costruiamo la nostra lista di documenti...
            _popupFilling(content, data, menuIconClass, scope.options.eventHandler);

            //...unbind e bind del pulsante saveAll, se items > 1 e saveAll definito allora show, altrimenti hide...
            _saveAll(popup.element, data, scope.options.eventHandler);

            //...apriamo il popup.
            popup.open();
        }

        var _popupFilling = function (popupContent, data, menuIconClass, eventHandler) {

            //se eventHandler è null oppure è un json, allora gli assegnamo una funziona vuota, così da non spaccare
            if (eventHandler == undefined || typeof eventHandler != 'function') {
                eventHandler = $.noop;
            }

            popupContent.html('<ul class="list-group"></ul>');
            $.each(data.items, function (index, doc) {

                var iconClass = menuIconClass;
                if (doc.iconClass != undefined && doc.iconClass != '') {

                    iconClass = doc.iconClass;
                }

                $('.list-group', popupContent).append(''
                    + ' <li class="list-group-item" style="border: 0 !important; background: none;">'
                    + '     <div class="icon ' + iconClass + '"></div>'
                    + '     &nbsp;<a href="#" class="item-' + index + '" ' + (doc.title != undefined && doc.title != '' ? ('title="' + doc.title + '"') : '') + '>' + doc.label + '</a>'
                    + ' </li>'
                    + '');

                $('.list-group li a.item-' + index, popupContent).unbind();
                $('.list-group li a.item-' + index, popupContent).click(function (event) {

                    _download(doc, eventHandler, this);
                });
            });

            eventHandler('change', this, data);
        };

        var _saveAll = function (element, data, eventHandler) {

            //se eventHandler è null oppure è un json, allora gli assegnamo una funziona vuota, così da non spaccare
            if (eventHandler == undefined || typeof eventHandler != 'function') {
                eventHandler = $.noop;
            }

            $('.saveAll', element).unbind();
            if (data.items.length > 1 && data.saveAll != undefined) {
                if (data.saveAll.resourceForm != undefined) {

                    $('.saveAll', element).css('display', '');
                    $('.saveAll', element).data(data.saveAll);

                    $('.saveAll', element).click(
                        function (event) {

                            _download($(event.target).data(), eventHandler, this, 'downloadAll');
                        });
                }
            } else {

                $('.saveAll', element).css('display', 'none');
            }
        };

        var _download = function (data, eventHandler, element, eventType) {

            //se eventHandler è null oppure è un json, allora gli assegnamo una funziona vuota, così da non spaccare
            if (eventHandler == undefined || typeof eventHandler != 'function') {
                eventHandler = $.noop;
            }

            //se l'event type non è definito, viene definito di default
            if (eventType == undefined || eventType == '') {
                eventType = 'download';
            }

            if (data.resourceForm.target == undefined || typeof data.resourceForm.target != 'string') {
                data.resourceForm.target = '_blank';
            }

            if (data.resourceForm.serialization == undefined) {
                data.resourceForm.serialization = {};
            }

            if (data.resourceForm.serialization.fieldName != undefined) {
                data.resourceForm.serialization.fieldName = data.resourceForm.serialization.fieldName.replace(/\s/g, '');

                if (data.resourceForm.serialization.fieldName == '' || typeof data.resourceForm.serialization.fieldName != 'string') {
                    data.resourceForm.serialization.fieldName = 'content';
                }
            }

            if (data.resourceForm.serialization.mode == undefined || typeof data.resourceForm.serialization.mode != 'boolean') {
                data.resourceForm.serialization.mode = true;
            }

            //download
            sdk.utils.navigateFormByParam({
                method: 'post',
                target: data.resourceForm.target,
                action: data.resourceForm.action,
                parameters: data.resourceForm.parameter,
                jsonAsFormFields: data.resourceForm.serialization.mode,
                fieldName: data.resourceForm.serialization.fieldName
            });

            //gestione dell'evento post-download
            eventHandler(eventType, element, data);
        };

        //export
        print = _print;

        return print;

    })(sdk.print || {}, $, args || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
