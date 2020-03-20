/*
    RUBRICA DOCS
    . creare una rubrica ed aggiunge l'html relativo al modale:
      var rubrica = sdk.rubrica('.rubrica'); [input: selector string|jQuery object]

    . aprire modale con ricerca:
      rubrica[tipo rubrica].list({
        filters: {
            idAzienda: int
        },
        eventHandler: function(eventType, target, data) {

        }
      });

      es: rubrica.fornitore.list({
              filters: {
                  idAzienda: 1,
                  denominazione: 'test'
              },
              eventHandler: funzion(eventType, target, data) {
                  console.log(data);
              }
          })

      l'oggetto di configurazione da passare al metodo list contiene:
        . filters: object
          filtri con il quale preimpostare la ricerca, unico filtro obbligatorio è idAzienda

        . eventHandler: function
          definisce il comportamento degli eventi scatenati dalla rubrica:
            eventType: string        tipo di evento
            target: object           chiamante dell'evento
            data: object|array       dataset restituito dall'evento

      i tipi di rubrica disponibili sono:
        fornitore                   es. rubrica.fornitore.list(object);
        fornitoreEstero
        cliente
        clienteEstero
        dipendente
        debitoreEstero

      i tipi di evento disponibili sono:
          search:complete
          search:error
          selection:complete
          selection:error
          save:complete
          save:error
          update:complete
          update:error
          delete:complete
          delete:error
          clear

        + eventi ereditati dal popup:
          close
          dispose
*/

var sdk;
var sdkParams;

(function (sdk, $, args) {

    sdk.rubrica = (function (rubrica, $, args) {

        var popup = function () {


            return sdk.rubrica
        };

        var create = function (baseUrl, element) {

            if ($(element).length == 0) {
                element = '';
            }

            if (typeof element == 'string' && element == '') {

                element = 'tm-rubrica-default';

                if ($('.' + element).length == 0) {

                    $('body').append(''
                        + ' <div class="mainContent ' + element + '">'
                        + ''
                        + ' </div>'
                        + '');

                }

                element = '.' + element;
            }

            if (baseUrl == undefined) {
                baseUrl = '';
            }

            if (typeof baseUrl == 'string' && baseUrl == '') {
                throw 'Base URL not provided.';
            }

            //normaliziamo l'URL: ci piace senza slash finali.
            baseUrl = baseUrl.replace(/^|\/+$/gm, '');

            return {
                dipendente: _init(baseUrl, element, 'dipendente', sdk.resource.get('sdk.rubrica.title.dipendente'))
           }
        };

        var _init = function (baseUrl, element, action, description) {

            //creo l'oggetto rubrica
            return {
                list: function (options) {

                    return _list(baseUrl, element, action, options, description);
                },
                update: function (options) {

                    return _update(baseUrl, element, action, options);
                },
                save: function (options) {

                    return _save(baseUrl, element, action, options);
                },
                remove: function (options) {

                    return _delete(baseUrl, element, action, options);
                }
            };
        }

        var _list = function (baseUrl, element, action, options, description) {


            if (action == undefined || action == '') {
                throw '';
            }

            var scope = {

                //_internal è usato per "nascondere" all'utilizzatore le funzionalità essenziali per la gestione della rubrica
                _internal: {

                    //esegue il bind degli eventi sui componenti HTML
                    bind: function (element) {

                        //click: ricerca
                        var actions = scope.getActionElements();
                        for (var actionElement in actions) {
                            var _el = actions[actionElement].element;
                            var _ac = actions[actionElement].action;

                            _el.css('cursor', 'pointer');
                            _el.data('elementSelector', element.selector);
                            _el.data('action', _ac);

                            _el.unbind();

                            if (_el.data() != undefined)
                                _el.click(_el.data().action);
                        }

                        $(element).data('isLoading', false);
                        this.clearUnbindDelayed();
                    },

                    //esegue l'unbind degli eventi sui componenti HTML
                    unbind: function (element) {

                        $(element).data('isLoading', true);

                        //search: annulla evento click

                        var actions = scope.getActionElements();
                        for (var actionElement in actions) {
                            var _el = actions[actionElement].element;

                            _el.unbind();
                        }

                        this.setUnbindDelayed();
                    },

                    //setta un delay per la gestione ritardata dell'unbind
                    setUnbindDelayed: function () {

                        setTimeout(function () {

                            if ($(scope.element).data().isLoading) {

                                var actions = scope.getActionElements();
                                for (var actionElement in actions) {
                                    actions[actionElement].element.addClass('disabled');
                                }
                            }

                        }, 1000);
                    },

                    //ferma il ciclo interval settato con la funzione setUnbindDelayed()
                    clearUnbindDelayed: function () {

                        var actions = scope.getActionElements();
                        for (var actionElement in actions) {
                            actions[actionElement].element.removeClass('disabled');
                        }
                    }
                },

                action: action,
                description: description,
                element: $(element),
                isLoading: undefined,

                //estrae componenti HTML
                getActionElements: function () {
                    return {
                        search: {
                            element: $('div.custom-search span.icon-replace.icon-search.active', this.element),
                            action: function () {
                                scope.search();
                            }
                        },
                        emptyFilters: {
                            element: $('input[type=button].empty-filters', this.element),
                            action: function () {
                                var _filters = scope.getFilters();
                                for (var _filter in _filters) {
                                    _filters[_filter].val(null);
                                }

                                scope.search();
                            }
                        },
                        search2: {
                            element: $('input[type=button].search-filters', this.element),
                            action: function () {
                                scope.search();
                            }
                        }
                    }
                },

                //estrai i componenti HTML che compongono i filtri
                getFilters: function () {
                    return {
                        denominazione: $('.tm-modal-filters input[for="cognome-nome"]'),
                        codice: $('.tm-modal-filters input[for="codicedip"]'),
                        //iban: $('.tm-modal-filters input[for="iban"]')
                    };
                },

                //esegue un search nella griglia
                search: function () {

                    var table = $('table.rubricaListItem', this.element).data();
                    if (table) {

                        var filters = this.getFilters();
                        for (var filter in filters) {

                            if (filters[filter][0].tagName.toLowerCase() == 'input') {
                                table.setFilter(filter, filters[filter].val());
                            }

                        }

                        //deleting vars
                        delete filters;

                        //esecuzione della richiesta di aggiornamento della tabella
                        table.read();
                    }
                },

                close: function (event) {

                    if (this.popup == undefined) {

                        return;
                    }

                    this.popup.close();
                    this.popup.dispose();
                },

                //esegue un clear dei filtri
                clear: function () {

                    var filters = this.getFilters();
                    for (var filter in filters) {

                        if (filters[filter][0].tagName.toLowerCase() == 'input') {
                            filters[filter].val('');
                        }
                    }

                    delete filters;

                    //EVENT HANDLER
                    this.events.handler('clear', $('.tm-modal-filters .empty-filters', this.element), null);
                }
            };

            var popupOptions = {
                html: function () {
                    return ''
                        + ' <div class="tm-modal-filters" style="padding: 0;">'
                        + ''
                        + '     <div class="row">'
                        + ''
                        + '         <div class="col-sm-4 col-xs-12">'
                        + '             <label id="cognome-nome">' + sdk.resource.get('sdk.dipendente.filters.cognomenome') + '</label>'
                        + '             <input type="text" class="form-control popup-filter-denominazione" for="cognome-nome" />'
                        + '         </div>'
                        + ''
                        + '         <div class="col-sm-3 col-xs-12">'
                        + '             <label id="codicedip">' + sdk.resource.get('sdk.dipendente.filters.codicedipendente') + '</label>'
                        + '             <input type="text" class="form-control popup-filter-codice" for="codicedip" />'
                        + '         </div>'
                        + ''
                        /*
                        + '         <div class="col-sm-4 col-xs-12">'
                        + '             <label id="iban">' + sdk.resource.get('sdk.rubrica.filters.iban') + '</label>'
                        + '             <input type="text" class="form-control popup-filter-iban" for="iban" />'
                        + '         </div>'
                        + ''
                        */
                        + '     </div>'
                        + ''
                        + '     <div class="row">'
                        + '         <div class="col-xs-12 text-right margin-top10">'
                        + '             <input type="button" class="btn btn-primary empty-filters" value="' + sdk.resource.get('sdk.rubrica.button.filters.svuota') + '" />'
                        + '             <input type="button" class="btn btn-primary search-filters" value="' + sdk.resource.get('sdk.rubrica.button.filters.ricerca') + '" />'
                        + '         </div>'
                        + '     </div>'
                        + ''
                        + ' </div>'
                        + ''
                        + ' <div class="row" style="padding: 0;">'
                        + '     <table class="dataTable table table-striped rubricaListItem"></table>'
                        + ' </div> ';
                },
                title: sdk.resource.get('sdk.rubrica.title.ricerca') + ' ' + scope.description,
                titleIcon: 'flag riepilogo',
                width: 1000,
                height: 600,
                measure: 'px',
                isScrollable: true,
                events: {
                    handler: $.noop,
                    bind: $.noop
                }
            };


            $(scope.element).data(scope);
            _checkOptionsParameter(options, element);

            /*try {

                if (options == undefined) {
                    throw 'parameter.notFound';
                }

                if (options.eventHandler == undefined) {
                    throw 'parameter.eventHandlerNotFound';
                }

                if (typeof options.eventHandler != 'function') {
                    throw 'parameter.eventHandlerIsNotAFunction';
                }
            } catch (ex) {

                sdk.popup(element, popupOptions)
                    .open(sdk.resource.get('sdk.generic.error.' + ex), sdk.resource.get('sdk.generic.error.title'), 'error');

                throw ex;
            }*/

            //teniamo conto solo dell'idAzienda e non di tutti i filtri passati alla rubrica
            scope.filters = {
                idAzienda: options.filters.idAzienda
            };

            scope.events = {
                handler: options.eventHandler, //eventType, target, data
            };

            //creiamo il popup
            popupOptions.events.handler = scope.events.handler;
            var popup = sdk.popup(scope.element, popupOptions);

            var _filters = scope.getFilters();
            for (var _filter in _filters) {

                if (_filter != undefined) {
                    _filters[_filter.toLowerCase()].val(scope.filters[_filter.toLowerCase()]);
                }
            }
            
            scope.popup = popup;
            $(scope.element).data(scope);

            try {

                //definiamo la jquery.datatable
                var grid = $('table.rubricaListItem', scope.element);
                grid.dataTableExt({
                    param: {
                        columns: [
                            {
                                data: 'Denominazione',
                                orderable: true,
                                width: '50%',
                                title: sdk.resource.get('sdk.dipendente.datatable.column.cognomenome')
                            }, {
                                data: 'Codice',
                                orderable: true,
                                width: '20%',
                                title: sdk.resource.get('sdk.dipendente.datatable.column.codicedipendente')
                            }, {
                                data: 'Telefono',
                                orderable: true,
                                width: '30%',
                                title: sdk.resource.get('sdk.dipendente.datatable.column.gestore')
                            }, {
                                data: 'Telefono',
                                orderable: true,
                                width: '30%',
                                title: sdk.resource.get('sdk.dipendente.datatable.column.telefono')
                            }
                        ],
                        processing: false,
                        isFilterable: false,
                        isOrderable: false,
                        addInfo: false,
                        addLengthMenu: false,
                        lengthMenu: [[8, 24, 32, -1], [8, 24, 32, 'Tutti']],
                        dataObjectFilter: scope.filters,
                        itemsPerPage: 10,
                        initialItemSelector: function (index, item) {
                            return false;
                        },
                        selectFirst: true,
                        onDraw: function (row) {

                            $('tbody > tr', row).click(function (event) {

                                var element = this;

                                //teniamo traccia lo stato del modale
                                var loading = {};
                                loading.isNot = !scope.isLoading;

                                //prima di eseguire la chiamata facciamo l'unbind degli eventi presenti nel modale
                                scope._internal.unbind(scope.element);

                                if (loading.isNot) {

                                    //selezioniamo l'item scelto e chiediamo il dettaglio al backend
                                    var selectedItem = $(this).data();
                                    if (selectedItem.Identifier) {

                                        var identity = selectedItem.Identifier;
                                        
                                        sdk.net.call(baseUrl + '/_wk/Rubrica/' + action + '/Detail', identity, {

                                            //se è OK
                                            successHandler: function (me, data, jsonResponse, warningObject) {

                                                //chiudiamo eventuali notifiche attive
                                                scope.popup.notify.close();

                                                //EVENT HANDLER
                                                scope.events.handler('selection:complete', element, JSON.parse(data));

                                                //rimettiamo gli eventi presenti nel modale
                                                scope._internal.bind(scope.element);

                                                //chiudiamo il modale
                                                scope.close();

                                            },

                                            //se è KO, visualizzo il messaggio d'errore
                                            errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {

                                                scope.popup.notify.error(sdk.resource.get('sdk.rubrica.error.detail.generic'), selectedItem.Codice + ' - ' + selectedItem.Denominazione);

                                                try {

                                                    //EVENT HANDLER
                                                    scope.events.handler('selection:error', element, JSON.parse(jqXHR.responseJSON));
                                                } catch (ex) {

                                                }

                                                //rimettiamo gli eventi presenti nel modale
                                                scope._internal.bind(scope.element);
                                            }
                                        });

                                    }
                                }

                            });

                        },
                        ajaxUrl: baseUrl + '/_wk/Rubrica/' + action + '/List',
                        ajaxData: function (data) {

                            //chiudiamo eventuali notifiche attive
                            scope.popup.notify.close();

                            //prima di eseguire la chiamata facciamo l'unbind degli eventi presenti nel modale
                            $(scope.element).data()._internal.unbind(scope.element);
                        },
                        ajaxComplete: function (data) {

                            //eseguiamo prima l'event handler e poi il bind degli elementi in pagina:
                            //l'event handler potrebbe impiegare molto tempo ed essere propedeutico alla chiamata eseguita
                            //ed il tempo di esecuzione dipende da come l'utente ha implementato la callback.
                            //Tuttavia anche una gestione dell'errore poco curata potrebbe rompere l'esecuzione di javascript impedendo
                            //il re-bind degli elementi, quindi:
                            //  1. prima eseguiamo l'event handler catchando eventuali exception,
                            //  2. salviamo l'errore in una variabile esterna
                            //  3. eseguiamo il re-bind
                            //  4. se exception è valorizzato allora throwniamo l'eccezione generato

                            var exception = undefined;
                            try {

                                //EVENT HANDLER
                                scope.events.handler('search:complete', grid, data);
                            } catch (ex) {

                                exception = ex;
                            }

                            //rimettiamo gli eventi presenti nel modale
                            $(scope.element).data()._internal.bind(scope.element);

                            //notifichiamo l'errore
                            if (exception != undefined && exception != '') {

                                popup.notify.fill({ type: 'error', message: sdk.resource.get('sdk.rubrica.error.' + exception), title: sdk.resource.get('sdk.generic.error.title') });
                            }
                        },
                        ajaxError: function (data, status) {
                            try {

                                data = data.responseJSON;

                                var exception = data.ResourceKey;

                                //EVENT HANDLER
                                scope.events.handler('search:error', grid, data);
                            } catch (ex) {

                                exception = ex;
                            }

                            //rimettiamo gli eventi presenti nel modale
                            $(scope.element).data()._internal.bind(scope.element);

                            //notifichiamo l'errore
                            popup.notify.fill({ type: 'error', message: sdk.resource.get('sdk.rubrica.error.' + exception), title: sdk.resource.get('sdk.generic.error.title') });
                        }
                    }
                });

                popup.open();
                $('.tm-modal-filters input, .tm-modal-filters select, .tm-modal-filters textarea', this.element).first().focus();

            } catch (ex) {

                throw ex;
            }

            //restituzione di un codice sullo stato delle operazioni eseguite
            return 1;
        };

        var _save = function (baseUrl, element, action, options) {

            _checkOptionsParameter(options, element);
            _call(baseUrl, action, 'save', options, element);

        };

        var _update = function (baseUrl, element, action, options) {

            _checkOptionsParameter(options, element);
            _call(baseUrl, action, 'update', options, element);

        };

        var _delete = function (baseUrl, element, action, options) {

            _checkOptionsParameter(options, element);
            _call(baseUrl, action, 'delete', options, element);
            
        };


        var _call = function (baseUrl, action, crudOperation, options, element) {

            $.ajax({
                method: 'POST',
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                url: baseUrl + '/_wk/Rubrica/' + action + '/' + crudOperation,
                data: { JQueryParam: JSON.stringify(options.data) },
                context: { handler: options.eventHandler, element: element, crudOperation: crudOperation },

                success: function (data) {
                    //SUCCESS EVENT HANDLER
                    this.handler(this.crudOperation + ':complete', this.element, data);
                },

                error: function (jqXHR, textStatus, errorThrown) {
                    //ERROR EVENT HANDLER
                    this.handler(this.crudOperation + ':error', this.element, jqXHR.responseJSON);
                }
            });

        };

        var _checkOptionsParameter = function (options, element) {

            try {

                if (options == undefined) {
                    throw 'parameter.notFound';
                }

                if (options.eventHandler == undefined) {
                    throw 'parameter.eventHandlerNotFound';
                }

                if (typeof options.eventHandler != 'function') {
                    throw 'parameter.eventHandlerIsNotAFunction';
                }
            } catch (ex) {

                console.error(sdk.resource.get('sdk.generic.error.' + ex), element);
                throw sdk.resource.get('sdk.generic.error.fatal');
            }

        };

        //export
        rubrica = create;

        return rubrica;

    })(sdk.rubrica || {}, $, args.rubrica || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
