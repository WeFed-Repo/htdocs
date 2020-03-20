/*
      ++++++++++++++++++++++++++++++++++++++++++++++++++++
        DOCUMENTAZIONE
      ------------------
        componente              TM.BSTABLE
        ultimo aggiornamento    17/05/2018
      ++++++++++++++++++++++++++++++++++++++++++++++++++++

        $(selector).bstable({
            bstData,             //array: dati da inserire in tabella, ogni elemento corrisponde ad una riga
            bstNoRetrieve,       //bool: non carica la bootstrap quando inizializzata ma la adorna
            bstShadowFilter,     //object: definisce i shadow filters
            bstElement,          //object: istanza di jQuery che definisce il nodo su cui è chiamato il widget
            bstAction,           //string: definisce l'URL da chiamare per ottenere i dati in tabella
            bstRenderRow,        //function(index, row): definisce il rendering della singola riga
            bstRenderCard,       //function(index, row): definisce il rendering della singola card (per la modalità adattiva)
            bstEventRow,         //function(trElement, row): funzione usata per la definizione di eventi legati alla riga (o al suo contenuto)
            bstIsSelector,       //bool: se è selettore allora mostra il paginatore in alto a destra e nasconde gli altri elementi della paginazione
            bstShowPageSize,     //bool: visualizza il page-size
            bstBreakpointChange, //bool: definisce se la tabella è responsive
            bstLanguage: {       //object: definisce le stringhe da utilizare, contiene default generici definiti nel file tm.resources.js
                totalElements,   //string: stringa che identifica il numero di elementi in tabella
                noRows,          //string: stringa che identifica la mancanza di righe in tabella
                pageList         //string: stringa che 
            }

            ... + options native della bootstrap-table
        });

        sidePagination definisce il tipo di tabella (client|server), il default è 'client'.
            > se server, bstAction definisce l'URL alla quale effettuare la chiamata per scaricare le righe. bstAction OBBLIGATORIO
            > se client, bstActio NON OBBLIGATORIO:
                se specificato sarà bstable a scaricare le righe facendo la chiamata all'URL specificato,
                altrimenti sarà necessario specificare OBBLIGATORIAMENTE la property data e quindi sarà l'utente ad eseguire la chiamata e passare i dati alla griglia.

        tm.bstable accetta come parametro un object contenente le property della libreria bootstrap-table (https://bootstrap-table.com/);
        ulteriori property utilizzabili sono definite nell'esempio sopra e sono in aggiunta a quelle standard del componente esteso.

        DOCUMENTAZIONE COMPONENTE ESTERNO:
            . options: https://bootstrap-table.com/docs/api/table-options/
            . methods: https://bootstrap-table.com/docs/api/methods/
            . events: https://bootstrap-table.com/docs/api/events/ 
*/

$(function () {

    var _VIEWPORT_BREAKPOINT = '';

    var onMediaQueryChanged = function (param) {

        var tables = $('.ybw-bootstrap-table div.bootstrap-table div.fixed-table-container > div.fixed-table-body table');
        tables.each(function () {

            var viewportBreakpoint = $(this).attr('isadaptable');
            var cardView = sdk.utils.viewport.match(viewportBreakpoint);

            $(this).bstable('setOptions', { bstIsMediaQueryChanged: true });
            var options = $(this).bstable('getOptions');

            if (options.bstBreakpointChange && !options.bstIsSelector) {

                options.cardView = cardView;
            }

            options.bstCurrentViewport = sdk.utils.viewport.getCurrent();
            options.bstElement.bootstrapTable('refreshOptions', options);

        });

    };

    var onScrollbarAttached = {

        handler: function ($table) {

            var bstableOptions = $('div.fixed-table-container > div.fixed-table-body table', $table).bstable('getOptions');
            if ($('div.fixed-table-body', $table).get(0).clientWidth < $('div.fixed-table-body', $table).get(0).scrollWidth && bstableOptions.cardView == false) {

                $table.parent().addClass('table-hasScrollbar-wrapper');

            } else {

                $table.parent().removeClass('table-hasScrollbar-wrapper');

            }
        },

        onAllTables: function () {

            var tables = $('.ybw-bootstrap-table div.bootstrap-table');
            tables.each(function (index, item) {

                item = $(item);
                onScrollbarAttached.handler(item);
            });

        }

    };

    $.widget('tm.bstable', {
        options: {
            sidePagination: 'client',
            formatNoMatches: function () {
                var _language = this.bstElement.bstable('getOptions').bstLanguage;
                return _language.noRows;
            },
            pageSize: 50,
            pageList: [10, 20, 50, 100],

            bstData: undefined,
            bstNoRetrieve: false,
            bstShadowFilter: {},
            bstParams: {},
            bstPageNumber: {},
            bstIsSelector: false,
            bstShowPageSize: false,
            bstBreakpointChange: undefined,
            bstHideWhenNoRows: false,
            bstIsMediaQueryChanged: false,
            bstIsOptionsRefreshed: false,
            bstCurrentViewport: undefined,
            bstLanguage: {
                totalElements: sdk.resource.get('bstable.language.totalElements'),
                noRows: sdk.resource.get('bstable.language.noRows'),
                pageList: sdk.resource.get('bstable.language.pageList'),
                error: sdk.resource.get('bstable.language.error'),
            }
        },

        getOptions: function () {
            return this.options;
        },

        setOptions: function (options) {
            this.options = $.extend({}, this.options, options, true);
        },

        getFilter: function () {

            return this.options.bstShadowFilter;
        },

        setFilter: function (shadowfilter) {

            if (typeof shadowfilter == 'string') {
                shadowfilter = JSON.parse(shadowfilter);
            }

            this.options.bstShadowFilter = shadowfilter;
        },

        getCurrentPage: function () {

            return (this.options.bstPageNumber && this.options.bstPageNumber.current != undefined ? this.options.bstPageNumber.current : 1);
        },

        hideColumn: function (field) {
            this.options.bstElement.bootstrapTable('hideColumn', field);
        },

        showColumn: function (field) {
            this.options.bstElement.bootstrapTable('showColumn', field);
        },

        refresh: function () {
            var bstIsOptionsRefreshed = this.options.bstIsOptionsRefreshed;
            if (this.options.sidePagination == 'server') {
                bstIsOptionsRefreshed = true;
            }

            this.options.bstElement.bstable('setOptions', { bstIsMediaQueryChanged: false, bstIsOptionsRefreshed: bstIsOptionsRefreshed, bstPageNumber: { old: 1, current: 1 } });
            this._retrieve(false);
        },

        destroy: function () {
            this.options.bstElement.bootstrapTable('destroy');
        },

        //costruttore del widget
        _create: function () {

            var me = this;
            me.options.bstElement = $(me.element); // estensione delle option aggiungendo l'element jquery su cui l'utente aggancia il widget

            if (me.options.bstBreakpointChange) {

                me.options.bstElement.attr('isadaptable', me.options.bstBreakpointChange);
            }

            var bstBreakpointChange = me.options.bstElement.attr('isadaptable');
            if (bstBreakpointChange) {

                //gestione table tramite change della mediaquery
                me.options.cardView = sdk.utils.viewport.match(me.options.bstBreakpointChange) && !me.options.bstIsSelector;
                me.options.bstBreakpointChange = bstBreakpointChange;
            }

            me.options.bstCurrentViewport = sdk.utils.viewport.getCurrent();

            if (me.options.bstNoRetrieve) {

                // inizializzo lo stesso la tabella facendo eseguire il metodo renderTable per sistemare il layout 
                me._initBstTable(true, {
                    formatNoMatches: me.options.formatNoMatches,
                    onPostBody: me._renderTable,
                    bstElement: me.options.bstElement,
                    cardView: me.options.cardView
                });

            } else {

                me._retrieve(true);

            }
        },


        // metodo interno per gestire il caricamento dei dati
        _retrieve: function (bstInit) {

            var me = this; // mi devo recuperare il riferimento al widget per potere aveve accesso a options e metodi denbtro la funzione success.

            // preparo le option da passare a .bootstrapTable,vado in extend così do la possibilità allo sviluppatore di utilizzare
            // tutti gli eventi messi a dispososizione dalla bootstraptable.
            var options = $.extend({}, me.options, true);
            options.onPostBody = me._renderTable;
            options.search = (options.bstSearchItem != undefined);

            if (me.options.bstParams && me.options.bstParams.size) {
                options.pageSize = me.options.bstParams.size;
            }

            if (options.sidePagination == 'server') {
                // metodo _ajaxcall passato direttamente alla bootstraptable, questo caso necessita per forza della bstAction

                options.ajax = me._ajaxcall;
                options.filter = options.bstShadowFilter;     //TODO: solo server-side? perché?

            } else if (options.sidePagination == 'client' && options.bstAction != undefined) {
                // se ho definito una action ma sto lavorando client side chiamo metodo interno _ajaxcall fatto dal widget per recuperare tutti i dati della action
                // se bstAction è undefined significa che qualcuno ha popolato esternamente bstData

                me._ajaxcall({
                    success: function (json) {
                        // TODO controllare se il commento è coerente
                        // NB: all'interno di questa funzione NON potrei usare il riferimento this per riferirmi alle option perchè
                        // non sarebbero valide, lo scope all'interno di questa funzione non mi consente di vedere le option, per accedere a option DEVO
                        // utilizzare il riferimento a 'me' instanziato all'inizio
                        options.data = json.rows;
                        me._initBstTable(bstInit, options);
                    },
                    data: { options: options }
                });

                return;

            }

            me._initBstTable(bstInit, options);

        },

        _initBstTable: function (bstInit, options) {

            if (bstInit) {
                options.bstElement.bootstrapTable(options);
            } else {
                options.bstIsOptionsRefreshed = true;
                options.bstElement.bootstrapTable('refreshOptions', options);
            }

        },

        _renderTable: function () {

            var widgetOptions = this.bstElement.bstable('getOptions');
            if (!widgetOptions.bstIsOptionsRefreshed) {

                // Questo evento scatta dopo che sono stati renderizzati i dati della bootstrapTable. 
                // Questo metodo non è chiamato dal widget ma dalla BootstrapTable perciò this contiene il riferimento alla bootstrap table non al widget.
                var data = this.bstElement.bootstrapTable('getData');
                if (data && data instanceof jQuery) {
                    data = this.data;
                }

                this.bstElement.removeClass('table-bordered');

                var tableContext = this.bstElement.closest('div.bootstrap-table');

                // campo di ricerca
                var search = {
                    element: $('input', $('div.fixed-table-toolbar', tableContext).hide()),
                    handlers: {
                        keyup: function (event) {

                            event.data.searchElement
                                .val(this.value)
                                .focus()
                                .blur();
                        },
                        keypress: function (event) {

                            if (event.which == 13) {
                                if (event.preventDefault) {

                                    event.preventDefault();
                                } else if (event.stopPropagation) {

                                    event.stopPropagation();
                                }

                                return;
                            }
                        }
                    }
                };

                search.element.off('keypress');
                $(this.bstSearchItem)
                    .addClass('ms-clear')
                    .on('blur', { searchElement: search.element }, search.handlers.keyup)
                    .on('keyup', { searchElement: search.element }, search.handlers.keyup)
                    .on('keypress', search.handlers.keypress);


                //CHECK: tableContext è già wrappato?
                var tableWrapper = tableContext.closest('div.ybw-bootstrap-table-wrapper');

                if (tableWrapper.length == 0) {
                    //se non esiste un wrapper allora creiamolo

                    //se la section esiste, allora al padre aggiungiamo la classe ybw-bootstrap-table
                    //altrimenti wrappiamo la tabella con la struttura .ybw-bootstrap-table > section > div.bordered
                    if (this.bstElement.closest('section').length > 0) {

                        this.bstElement.closest('section').addClass('ybw-bootstrap-table').parent().addClass('ybw-bootstrap-table-wrapper');

                        if (!this.bstIsSelector) {
                            this.bstElement.closest('section').parent().removeClass('mobile-form');
                            this.bstElement.closest('section').addClass('mobile-form');
                        }
                    } else {

                        var isModal = this.bstElement.parents('div.modal').length > 0;

                        this.bstElement.closest('div.bootstrap-table')
                            .wrap('<div class="ybw-bootstrap-table-wrapper"><div class="ybw-bootstrap-table"><section class="' + (isModal ? '' : 'no-margin-section mobile-form') + ' ybw-bootstrap-table-section"><div class="' + (isModal ? '' : 'bordered') + ' pt-0 mb-3"><div class=""></div></div></section></div></div>');
                    }

                }

                tableWrapper = tableContext.closest('div.ybw-bootstrap-table-wrapper');

                //aggiungiamo la riga di azioni-tabella (conterrà le azioni a destra ed il page-sizing a sinistra)
                var pageList = this.pageList;
                var pageSize = this.pageSize;
                $('div.azioni-tabella', tableWrapper).remove();
                if ($('div.azioni-tabella', tableWrapper).length == 0) {

                    tableWrapper.prepend('<div class="azioni-tabella d-flex justify-content-between align-items-center pb-1"></div>');
                    $('div.azioni-tabella', tableWrapper).append(''
                        + ' <div class="colonna1 ybw-bootstrap-table-page-list">'
                        + '     <div class="d-flex justify-content-start">'
                        + '         <div class="mr-3 nowrap">' + widgetOptions.bstLanguage.pageList + '</div>'
                        + '         <ul class="list-inline nowrap page-list">'
                        + '         </ul>'
                        + '     </div>'
                        + ' </div>'
                        + ' <div class="colonna2 ybw-bootstrap-table-action-link">'
                        + '     <div class="d-flex justify-content-end align-items-center">'
                        + '     </div>'
                        + ' </div>'
                        + '');

                    $('div.azioni-tabella ul.page-list', tableWrapper).append(function () {
                        var itemList = '';
                        $.each(pageList, function (index, item) {
                            var isActive = (pageSize == item);
                            var anchor = (isActive ? item : '<a href="#">' + item + '</a>');

                            itemList = itemList + '<li class="list-inline-item ' + (isActive ? 'active' : 'page-list-event') + '" page-size="' + item + '">' + anchor + '</li>';
                        });

                        return itemList;
                    });

                    $('div.azioni-tabella ul.page-list li.list-inline-item.page-list-event', tableWrapper).on('click', function (event) {

                        var $tableElement = $('div.fixed-table-body table', $(this).closest('div.ybw-bootstrap-table-wrapper'));
                        $tableElement.bootstrapTable('refreshOptions', {
                            pageSize: ($(this).attr('page-size') - 0)
                        });
                    });

                    // rimuoviamo dagli anchor del page list, l'attributo href
                    $('div.azioni-tabella ul.page-list li.list-inline-item.page-list-event a', tableWrapper).removeAttr('href');
                }

                if (this.bstActionLink != undefined) {
                    $.each(this.bstActionLink, function (index, item) {

                        var _itemText = '';
                        if (item.text != undefined && item.text != '') {
                            _itemText = '<span class="pl-1 pr-2"> ' + item.text + ' </span>';
                        }

                        $('div.azioni-tabella div.ybw-bootstrap-table-action-link > div', tableWrapper)
                            .append('<a href="#" aria-label="' + item.id + '"><span><img src="' + item.icon + '" />' + _itemText + '</span></a>');

                        $('div.azioni-tabella div.ybw-bootstrap-table-action-link > div > a[aria-label="' + item.id + '"]', tableWrapper)
                            .on('click', item.click);
                    });
                }

                $('div.azioni-tabella > div.ybw-bootstrap-table-page-list', tableWrapper).children().css('display', 'none');

                //PAGINAZIONE
                var _pagesNumber = Math.ceil(this.totalRows / this.pageSize);   //calcoliamo il numero di pagine
                if (_pagesNumber > 1) {                                         //se il numero di pagine è maggiore ad 1 allora costruiamo il paginatore

                    var isModal = tableWrapper.parents('div.modal').length > 0;

                    //creo il nodo che conterrà il paginatore
                    if (this.bstIsSelector) {   //è selettore

                        if (isModal) {          //selettore versione modale

                            var containerbstable = $('div.bootstrap-table', tableWrapper).addClass('pb-2').parent();
                            $('div.ybw-table-pagination', containerbstable).remove();
                            containerbstable.attr('tm-pagination', 'out-form').append(''
                                + ' <div class="ybw-table-pagination row" style="display: none;">'
                                + '     <div class="col-12 ybw-table-itemcount">' + widgetOptions.bstLanguage.totalElements.replace('$TOTAL', this.totalRows) + '</div>'    //numero di elementi totali
                                + '     <div class="col d-flex justify-content-center">'                                                                                    //wrapper paginatore
                                + '         <ul class="pagination is-centered"></ul>'
                                + '     </div>'
                                + ' </div>'
                                + '');

                        } else {                //selettore versione integrale

                            var tableSection = tableContext.closest('section');
                            $('div.form-group.justify-content-end ul.pagination', tableSection).remove();
                            $('div.form-group.justify-content-end', tableSection)
                                .attr('tm-pagination', 'in-form')
                                .append('<div class="ybw-table-pagination" style="display: none;"><ul class="pagination"></ul></div>');

                        }

                    } else {                    //non è selettore
                        $('.ybw-bootstrap-table div.ybw-table-pagination', tableWrapper).remove();
                        $('.ybw-bootstrap-table', tableWrapper).attr('tm-pagination', 'out-form').append(''
                            + ' <div class="ybw-table-pagination row" style="display: none;">'
                            + '     <div class="col-12 ybw-table-itemcount">' + widgetOptions.bstLanguage.totalElements.replace('$TOTAL', this.totalRows) + '</div>'    //numero di elementi totali
                            + '     <div class="col d-flex justify-content-center">'                                                                                    //wrapper paginatore
                            + '         <ul class="pagination is-centered"></ul>'
                            + '     </div>'
                            + ' </div>'
                            + '');
                    }

                    //costruiamo i numeri di pagina
                    var _currentPageNumber = (widgetOptions.sidePagination == 'server' ? widgetOptions.bstPageNumber.current : this.pageNumber);

                    /*
                        LIMIT = 5
                        current page < LIMIT				                    visualizza 1 2 3 4 5 … x
                        current page >= LIMIT && current page < x - CONST		visualizza 1 … (LIMIT - 1) LIMIT (LIMIT + 1) … x
                        current page > x - (LIMIT + 1)				            visualizza 1 … (x -4) (x -3) (x -2) (x -1) x
                    */

                    var _limitPageNumber = 5;
                    var _arrayPagesNumberToView = [];

                    if (_pagesNumber > _limitPageNumber) {
                        if (_currentPageNumber < _limitPageNumber) {
                            for (var i = 1; i <= _limitPageNumber; i++) {
                                _arrayPagesNumberToView.push(i);
                            }

                            _arrayPagesNumberToView.push(-1);
                            _arrayPagesNumberToView.push(_pagesNumber);
                        }

                        else if (_currentPageNumber >= _limitPageNumber && _currentPageNumber <= (_pagesNumber - (_limitPageNumber - 1))) {
                            _arrayPagesNumberToView = [1, -1, (_currentPageNumber - 1), _currentPageNumber, (_currentPageNumber + 1), -1, _pagesNumber];
                        }

                        else {
                            _arrayPagesNumberToView = [1, -1];
                            for (var i = (_pagesNumber - (_limitPageNumber - 1)); i <= _pagesNumber; i++) {
                                _arrayPagesNumberToView.push(i);
                            }
                        }
                    } else {

                        for (var i = 1; i <= _pagesNumber; i++) {
                            _arrayPagesNumberToView.push(i);
                        }

                    }

                    var paginatorItemHTML = '';
                    $.each(_arrayPagesNumberToView, function (index, item) {

                        if (item < 1) {
                            paginatorItemHTML += '<li class="page-item">...</li>';
                        } else {
                            paginatorItemHTML += '<li class="page-item ' + (_currentPageNumber == item ? 'active' : '') + '" tm-bstable-page-index="' + item + '"><a class="page-link">' + item + '</a></li>';
                        }
                    });

                    //aggiungiamo i numeri di pagina
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination', tableWrapper).append(paginatorItemHTML);

                    //aggiungiamo la freccia 'indietro'
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination', tableWrapper).prepend('<li class="page-item page-item-arrow page-item-arrow-pre"><a class="page-link" aria-label="Previous"><i class="icon-arrow_left"></i></a></li>');

                    //aggiungiamo la freccia 'avanti'
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination', tableWrapper).append('<li class="page-item page-item-arrow page-item-arrow-next"><a class="page-link" aria-label="Next"><i class="icon-arrow_right"></i></a></li>');

                    //rimuoviamo gli eventi di click sulle singole pagine e li riaggiungiamo nuovi
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination li.page-item[tm-bstable-page-index]', tableWrapper).off('click');
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination li.page-item[tm-bstable-page-index]:not(.active)', tableWrapper).on('click', { table: this.bstElement }, function (event) {

                        var _pageNumber = { old: _currentPageNumber, current: ($(this).attr('tm-bstable-page-index') - 0) };

                        event.data.table.bstable('setOptions', { bstPageNumber: _pageNumber });
                        event.data.table.bootstrapTable('refreshOptions', { pageNumber: _pageNumber.current, bstPageNumber: _pageNumber });

                        sdk.utils.viewport.scrollTo(event.data.table);
                    });

                    //aggiungiamo gli eventi di click sul link 'indietro'
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination li.page-item.page-item-arrow-pre', tableWrapper).on('click', { table: this.bstElement }, function (event) {

                        var _pageNumber = { old: _currentPageNumber, current: (_currentPageNumber - 1) };

                        event.data.table.bstable('setOptions', { bstPageNumber: _pageNumber });
                        event.data.table.bootstrapTable('refreshOptions', { pageNumber: _pageNumber.current, bstPageNumber: _pageNumber });

                        sdk.utils.viewport.scrollTo(event.data.table);
                    });

                    //aggiungiamo gli eventi di click sul link 'avanti'
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination li.page-item.page-item-arrow-next', tableWrapper).on('click', { table: this.bstElement }, function (event) {

                        var _pageNumber = { old: _currentPageNumber, current: (_currentPageNumber + 1) };

                        event.data.table.bstable('setOptions', { bstPageNumber: _pageNumber });
                        event.data.table.bootstrapTable('refreshOptions', { pageNumber: _pageNumber.current, bstPageNumber: _pageNumber });

                        sdk.utils.viewport.scrollTo(event.data.table);
                    });

                } else {
                    $('[tm-pagination] div.ybw-table-pagination .ybw-table-itemcount', tableWrapper).html(widgetOptions.bstLanguage.totalElements.replace('$TOTAL', this.totalRows));
                    $('[tm-pagination] div.ybw-table-pagination ul.pagination', tableWrapper).remove();
                }

                // se la paginazione è attiva, nascondiamo e visualizziamo ciò che ci serve
                if (this.pagination) {

                    if (this.totalRows && this.totalRows > 0) {
                        $('[tm-pagination] div.ybw-table-pagination', tableWrapper).css('display', '');
                    } else {
                        $('[tm-pagination] div.ybw-table-pagination', tableWrapper).css('display', 'none');
                    }

                    //se ci sono righe ed eccedono il numero di righe per pagina allora mostriamo il paginatore
                    if (this.totalRows > this.pageSize) {

                        //se siamo sulla pagina 1 alloira disabilitiamo la freccia "indietro"
                        if (_currentPageNumber <= 1) {
                            $('ul.pagination li.page-item.page-item-arrow.page-item-arrow-pre', tableWrapper).attr('disabled', '');
                            $('ul.pagination li.page-item.page-item-arrow.page-item-arrow-pre', tableWrapper).off('click');
                        }

                        //se siamo sull'ultima pagina allora disabilitiamo la freccia "avanti"
                        if (_currentPageNumber >= _pagesNumber) {
                            $('ul.pagination li.page-item.page-item-arrow.page-item-arrow-next', tableWrapper).attr('disabled', '');
                            $('ul.pagination li.page-item.page-item-arrow.page-item-arrow-next', tableWrapper).off('click');
                        }
                    }

                    //se bstShowPageSize è a true e ci sono righe in pagina allora visualizziamo la riga delle azioni ed il page-sizer,
                    //altrimenti lo nascondiamo
                    if (this.totalRows && this.totalRows > 0 && this.bstShowPageSize) {
                        $('div.azioni-tabella', tableWrapper).children().css('display', '');
                    } else {
                        $('div.azioni-tabella', tableWrapper).children().css('display', 'none');
                    }
                }

                // inizio di redrawing della tabella
                var index = 0;
                var length = data.length;
                var totalElements = length;

                if (widgetOptions.bstRenderRow) {
                    // se bstRenderRow è stato definito dall'utente allora facciamo la pulizia delle righe ed eseguiamo il bstRenderRow per ridisegnarle

                    if (this.sidePagination == 'client' && this.pagination == true) {
                        //se sidePagination è client e la paginazione è a true, allora dobbiamo gestirla manualmente
                        //perché, purtroppo, la tabella non ci dà i dati relativi solo alla pagina da visualizzare
                        //ma ci dà tutti i dati in tabella (sortati/searchati).
                        index = ((this.pageNumber * this.pageSize) - this.pageSize);
                        length = (index + this.pageSize);

                        if (length > totalElements) {
                            length = totalElements;
                        }
                    }

                    //popolamento della tabella con le righe
                    if (length > 0) {

                        tableWrapper.show();
                        if (this.cardView == true && widgetOptions.bstRenderCard != undefined) {

                            var tbody = document.createElement('div');
                            $(tbody).addClass('mobile-data');

                            for (var i = index; i < length; i++) {
                                var tbodyTemp = document.createElement('div');
                                tbodyTemp.innerHTML = widgetOptions.bstRenderCard(i, data[i]);

                                var divCard = $(tbodyTemp).children();
                                if (widgetOptions.bstEventRow) {
                                    widgetOptions.bstEventRow(divCard, data[i]);
                                }

                                $(tbody).append(divCard);
                            }

                            $(tbody).appendTo($('tbody', widgetOptions.bstElement).html(''));

                        } else {

                            var tbody = $(document.createElement('tbody'));

                            for (var i = index; i < length; i++) {
                                var tbodyTemp = document.createElement('tbody');
                                tbodyTemp.innerHTML = widgetOptions.bstRenderRow(i, data[i]);

                                var tr = $(tbodyTemp).children();
                                if (widgetOptions.bstEventRow) {
                                    widgetOptions.bstEventRow(tr, data[i]);
                                }

                                $(tbody).append(tr);  //appendo ogni singola riga usando la funzione rowBuilder<data, index> che è stata definita dall'utente
                            }

                            $('tr', tbody).appendTo($('tbody', widgetOptions.bstElement).html('')); //cancello tutte le righe contenute nel body della tabella
                        }
                    }

                } else {
                    // se bstRenderRow non è stato fornito dall'utente, potrebbe essere comunque necessario fare delle operazioni sulle righe
                    //$('tbody tr', $element).each(function (index, item) {});
                }

                if (widgetOptions.bstHideWhenNoRows && length == 0) {

                    tableWrapper.hide();
                }

                onScrollbarAttached.handler(tableContext);

            }

            this.bstElement.bstable('setOptions', { bstIsOptionsRefreshed: false });
        },

        // chiamata ajax custom per bootstrap table
        _ajaxcall: function (params) {

            //ATTENZIONE: QUANDO USARE THIS.OPTIONS E QUANDO USARE WIDGETOPTIONS?
            // this.options             -> accede alle property aggiornate della bootstrap-table
            // widgetOptions            -> accede alle property aggiornate del widget tm.bstable
            var widgetOptions = this.options.bstElement.bstable('getOptions');

            //se la property bstIsMediaQueryChanged è settata a false, allora non devo eseguire la chiamata ma devo ottenere i dati dalla precedente chiamata
            if (widgetOptions.bstIsMediaQueryChanged == false || widgetOptions.bstData == undefined) {

                // la funzione _ajaxcall può essere chiamata da due contesti diversi:
                // se lato client è il widget che la chiama, quindi facciamo riferimento a params.data.action.
                // se invece è lato server è la bootstraptable che chiama la _ajaxcall quindi con un altro scope,
                // la action sarà disponibile tramite widgetOptions.bstAction
                var options = (params.data.sidePagination == 'client' ? params.data : widgetOptions);
                var action = options.bstAction;
                var filter = options.bstShadowFilter;

                widgetOptions.bstPageNumber.current = widgetOptions.bstPageNumber.current == undefined ? 1 : widgetOptions.bstPageNumber.current;
                params.data.offset = ((widgetOptions.bstPageNumber.current * params.data.limit) - params.data.limit);

                //SEGMENTS
                var operation = { isChanged: false, type: '', object: '' };
                if (this.options.sidePagination == 'server' && widgetOptions.bstParams) {

                    if ((widgetOptions.bstPageNumber && widgetOptions.bstPageNumber.old) && widgetOptions.bstPageNumber.old != widgetOptions.bstPageNumber.current) {
                        //start diverso = cambio pagina

                        operation.type = 'page';
                        operation.object = '' + widgetOptions.bstPageNumber.current;
                        operation.isChanged = true;
                    }
                    else if (widgetOptions.bstParams.size != params.data.limit) {
                        //limit diverso = cambio numero di elementi visualizzati

                        operation.type = 'size';
                        operation.object = '' + params.data.limit;
                        operation.isChanged = true;

                        params.data.offset = 0;
                    }
                    else if ((widgetOptions.bstParams.order.direction != params.data.order) || (widgetOptions.bstParams.order.field != params.data.sort)) {
                        //sort diverso = cambiata la direzione di ordinamento su una colonna
                        //order diverso = cambiata la colonna di ordinamento

                        operation.type = 'order';
                        operation.object += params.data.order + '|' + params.data.sort;
                        operation.isChanged = true;

                        params.data.offset = 0;
                    }

                    action = (operation.isChanged ? (action + '?type=' + operation.type + '&obj=' + operation.object) : action);
                }

                if (params.data.offset == 0) {
                    widgetOptions.bstPageNumber.current = 1;
                }

                this.options.bstElement.bstable('setOptions', { bstPageNumber: { old: widgetOptions.bstPageNumber.current, current: widgetOptions.bstPageNumber.current } });

                if (this.options.sidePagination == 'server' && !params.data) {

                    params.data = widgetOptions.bstParams;
                }

                var jqDtRequest = {
                    startIndex: params.data.offset,
                    size: params.data.limit,
                    order: [
                        {
                            field: params.data.sort,
                            direction: params.data.order
                        }
                    ],
                    columns: null,
                    search: {
                        value: params.data.search,
                        regex: false
                    },
                    businessFilter: filter
                };

                this.options.bstElement.bstable('setOptions', { bstParams: jqDtRequest });

                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.net.json(action, jqDtRequest, {

                    //se è OK
                    successHandler: function (me, data, jsonResponse, warningObject) {

                        jsonResponse = {
                            total: jsonResponse.recordsTotal,
                            rows: jsonResponse.data
                        };

                        widgetOptions.bstElement.bstable('setOptions', { bstData: jsonResponse, pageSize: params.data.limit });

                        params.success(jsonResponse);
                    },

                    //se è KO, visualizzo il messaggio d'errore
                    errorHandler: function (me, jqXHR, textStatus, errorThrown, errorObject) {

                        jsonResponse = {
                            total: 0,
                            rows: []
                        };

                        widgetOptions.bstElement.bstable('setOptions', { bstData: jsonResponse });
                        params.success(jsonResponse);

                        sdk.utils.pubsub.send('messagePanel.renderError', { Messages: [{ ErrorMessage: widgetOptions.bstLanguage.error }] });
                    }
                });

            } else {
                widgetOptions.bstElement.bstable('setOptions', { bstIsMediaQueryChanged: false });
                params.success(widgetOptions.bstData);
            }

        }

    });

    sdk.utils.viewport.register(onMediaQueryChanged);
    $(window).on('load resize', onScrollbarAttached.onAllTables);
});