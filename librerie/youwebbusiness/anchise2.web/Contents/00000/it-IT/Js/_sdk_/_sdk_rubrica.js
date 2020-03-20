var sdk;
var sdkParams;

//TODO: gestire il controllo sull'idazienda
//TODO: creare la stored procedure per il dettaglio di una anagrafica + creazione oggetti specifici di anagrafica (FO, FE, CL, DI, CE, DE)
//TODO: _sdk_net.js va in errore in quanto va in errore la lib _sdk_log.js, sistemare se necessario
//TODO:

(function (sdk, $, args) {

    sdk.rubrica = (function (rubrica, $, args) {

        var create = function (element) {

            if (element == undefined || element == '') {

                //se non viene passato alcun elemento, allora lo creiamo
                $('body').append(''
                    + ' <div class="mainContent">'
                    + '     <div class="tm-modal-default"></div>'
                    + ' </div>'
                    + '');

                element = '.tm-modal-default';
            }

            var modal = $('.tm-modal');

            //esegue la ricerca con i filtri indicati
            var search = function (filters) {

                var table = $('#itemSelectorTable').data();
                if (table) {

                    for (var filter in filters) {

                        if (filters[filter][0].tagName.toLowerCase() == 'input') {
                            table.setFilter(filter, filters[filter].val());
                        }

                    }

                    table.read();
                }
            };

            //svuota i filtri indicati
            var clearFilters = function (filters) {

                for (var filter in filters) {

                    if (filters[filter][0].tagName.toLowerCase() == 'input') {
                        filters[filter].val('');
                    }

                }
            };

            //se il modale non esiste già all'interno del DOM allora lo andiamo ad aggiungere
            if (modal == undefined || (modal.length == 0)) {
                modal = ''
                    + ' <div class="riquadro" style="border: none; box-shadow: none;">'
                    + '     <div class="tm-modal" style="display: none;">'
                    + '         <div class="tm-modal-layer">'
                    + ''
                    + ''            //overlay sullo sfondo
                    + '             <div class="overlay">&nbsp;</div>'
                    + ''
                    + ''            //contenuto del modale
                    + '             <div class="tm-modal-container section tabSelezioneCC">'
                    + ''
                    + ''                //titolo
                    + '                 <div class="riquadro">'
                    + '                     <div class="clearfix">'
                    + '                         <div class="flag associaUtente">&nbsp;</div>'
                    + '                         <h1>Ricerca <span class="modal-title"></span></h1>'
                    + '                     </div>'
                    + '                 </div>'
                    + ''
                    + ''                //area di notifica
                    + '                 <div class="notify-message"></div>'
                    + ''
                    + ''                //lista dei risultati
                    + '                 <div class="list" style="display: none;">'
                    + '                     <div class="tm-modal-filters">'
                    + '                         <div class="row">'
                    + '                             <div class="col-sm-4 col-xs-12">'
                    + '                               <label id="ragione-sociale">Ragione Sociale</label>'
                    + '                               <input type="text" class="form-control" for="ragione-sociale" />'
                    + '                             </div>'
                    + '                             <div class="col-sm-4 col-xs-12">'
                    + '                                 <label id="codice">Codice</label>'
                    + '                                 <input type="text" class="form-control" for="codice" />'
                    + '                             </div>'
                    + '                             <div class="col-sm-4 col-xs-12">'
                    + '                                 <label id="iban">Iban</label>'
                    + '                                 <input type="text" class="form-control" for="iban" />'
                    + '                             </div>'
                    + '                         </div>'
                    + '                         <div class="row">'
                    + '                             <div class="col-xs-12 text-right margin-top10">'
                    + '                             <input type="button" class="btn btn-primary search-filters" value="Cerca" />'
                    + '                             <input type="button" class="btn btn-primary empty-filters" value="Svuota" />'
                    + '                         </div>'
                    + '                     </div>'
                    + '                     <div class="row">'
                    + '                         <table id="itemSelectorTable" class="dataTable table table-striped"></table>'
                    + '                     </div>'
                    + '                 </div>'
                    + '             </div>'
                    + ''
                    + ''            //pulsante di chiusura del modale
                    + '             <div class="row">'
                    + '                 <div class="col-xs-12 text-right margin-top10">'
                    + '                     <input type="button" class="btn btn-primary modal-close" value="Chiudi" />'
                    + '                 </div>'
                    + '             </div>'
                    + ''
                    + '         </div>'
                    + '     </div>'
                    + ' </div>'
                    + '';

                //aggiunge il nodo html che rappresenta il modale e viene creato lo specchietto di notifica
                $(element).html(modal);
                sdk.notify.create('div.notify-message');

                //definizione degli oggetti di filtro
                var filters = {
                    denominazione: $('.tm-modal .tm-modal-filters input[for="ragione-sociale"]'),
                    codice: $('.tm-modal .tm-modal-filters input[for="codice"]'),
                    iban: $('.tm-modal .tm-modal-filters input[for="iban"]')
                };

                var close = _internal.close;

                //chiusura del modale
                $('.tm-modal input[type="button"].modal-close', $(element)).click(function () {

                    close();
                });

                //ricerca
                $('.tm-modal .tm-modal-filters input[type="button"].search-filters', $(element)).click(function () {

                    search(filters);
                });

                //sbiancamento dei filtri e ricerca
                $('.tm-modal .tm-modal-filters input[type="button"].empty-filters', $(element)).click(function () {

                    clearFilters(filters);
                    search(filters);

                });
            }

            delete modal;
            delete search;

            return {
                fornitore: _internal.initialize('fornitore', 'Fornitore'),
                fornitoreEstero: _internal.initialize('fornitoreEstero', 'Fornitore Estero'),
                cliente: _internal.initialize('cliente', 'Cliente'),
                clienteEstero: _internal.initialize('clienteEstero', 'Cliente Estero'),
                debitoreEstero: _internal.initialize('debitoreEstero', 'Debitore Estero'),
                dipendente: _internal.initialize('dipendente', 'Dipendente')
            }
        };

        var _internal = {
            initialize: function (type, description) {

                var me = this;

                return {
                    list: function (options) {
                        return me.list(type, description, options);
                    }
                };
            },

            //gestisce l'apertura del modale
            open: function (error) {

                var modal = $('.tm-modal');
                var listContent = $('.tm-modal-container .list', modal);

                modal.css('display', '');

                if (error != undefined && error != '') {

                    listContent.css('display', 'none');
                    sdk.notify.error(error, 'error');
                } else {

                    sdk.notify.close();
                    listContent.css('display', '');

                    $('.tm-modal-filters input, .tm-modal-filters select, .tm-modal-filters textarea', modal).first().focus();
                }

            },

            //gestisce la chiusura del modale
            close: function () {

                var modal = $('.tm-modal');
                var listContent = $('.tm-modal-container .list', modal);

                modal.css('display', 'none');
                listContent.css('display', 'none');
                $(document).keypress($.noop);

                sdk.notify.close();
            },

            //gestisce la ricerca tramite filtri
            list: function (type, description, options) {

                var me = this;
                try {

                    //completiamo il titolo del modale riportando il tipo di ricerca che stiamo effettuando
                    $('span.modal-title').text(description);

                    //normaliziamo i parametri di input
                    if (options.callback == null) {
                        throw 'ERROR (' + type + '.list function): funzione callback non definita';
                    }

                    if (options.handleError == null) {
                        options.handleError = $.noop;
                    }

                    var filters = options.filters;

                    //definiamo la jquery.datatable
                    $('#itemSelectorTable').dataTableExt({
                        param: {
                            columns: [
                                {
                                    data: 'TipologiaAnagrafica',
                                    orderable: false,
                                    title: 'Tipo'
                                },
                                {
                                    data: 'Codice',
                                    orderable: true,
                                    title: 'Codice'
                                },
                                {
                                    data: 'Denominazione',
                                    orderable: true,
                                    title: 'Ragione Sociale'
                                }
                            ],
                            lengthMenu: [],
                            isOrderable: true,
                            dataObjectFilter: filters,
                            itemsPerPage: 10,
                            initialItemSelector: function (index, item) {
                                return false;
                            },
                            selectFirst: true,
                            onDraw: function (element) {

                                $('tbody > tr', element).click(function () {

                                    var selectedItem = $(this).data();
                                    if (selectedItem.Identifier) {

                                        var identity = selectedItem.Identifier;
                                        var request = {
                                            Id: identity.Id.Id,
                                            IdAzienda: identity.Id.IdAzienda
                                        };

                                        sdk.net.call('/Sdk.Web.Sample/Rubrica/' + type + '/Get', request, {

                                            //se è OK
                                            successHandler: function (me, data, jsonResponse, warningObject) {

                                                data = JSON.parse(data);

                                                sdk.notify.close();
                                                options.callback(data);

                                            },

                                            //se è KO, visualizzo il messaggio d'errore
                                            errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {

                                                sdk.notify.error('Non è stato possibile ottenere le informazioni sul dettaglio.', selectedItem.Codice + ' - ' + selectedItem.Denominazione);
                                                options.handleError(JSON.parse(jqXHR.responseJSON));
                                            }
                                        });

                                    }

                                });

                            },
                            ajaxUrl: '/Sdk.Web.Sample/Rubrica/' + type + '/List',
                            ajaxComplete: function (data) {

                                me.open();
                            },
                            ajaxError: function (status, data) {

                                me.open();
                            }
                        }
                    });
                } catch (ex) {

                    me.open(ex);
                }
            }

        };

        //export
        rubrica['create'] = create;

        return rubrica;

    })(sdk.rubrica || {}, $, args.rubrica || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
