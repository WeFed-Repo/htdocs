$(function () {
    /*
        DOCUMENTAZIONE DI UTILIZZO

        creare nuovo widget:
            $(selector, context).dataTableExt({ param: { }, language: { } });

            .param: l'oggetto per la configurazione di questo parametro è dato dalla funzione _defaultParam che restituisce l'oggetto di default.


        ottenere l'oggetto bindato alla griglia:
            $(selector, context).data();

            return object {
                dataObjectStringSerialize: function (dataObject)                            --> funzione di stringify di un oggetto json: la stringa viene serializzata concatenando tutti i valori dell'oggetto senza caratteri separatori 
                getSelection: function ()                                                   --> restituisce l'oggetto di selezione elementi (server-side)
                resetSelection: function ()                                                 --> azzeramento della selezione (server-side)
                read: function (filter)                                                     --> esegue una ricerca (server-side), se filter == null viene eseguita la ricerca con i filtri impostati precedentemente
                destroy: function ()                                                        --> distrugge la griglia
                setFilter: function (param1, param2)                                        --> imposta i filtri con cui eseguire la futura ricerca, se typeof(param1) == string allora ai filtri viene aggiunto l'oggetto { param1: param2 } altrimenti i filtri vengono sostituiti con param1
                getFilter: function ()                                                      --> restituisce i filtri
                tmDataTableExt: e.widget.e.(anonymous function).(anonymous function)        --> oggetto che riflette il widget jquery
                internal: Object                                                            --> oggetto interno di appoggio per le funzionalità della griglia
            }


        ottenere l'oggetto bindato ad ogni riga
            $(selector + ' tbody > tr', context).data();

    */

    $.widget('tm.dataTableExt', {
        options: {
            dataTableParam: {
                //parametri passati alla dataTable

                //impostazioni di base
                searching: false,
                info: false,
                ordering: true,
                select: true,

                fullTextSearch: {
                    element: undefined,
                    value: undefined
                },

                iDisplayLength: 8,
                pagingType: 'simple_numbers'

            },

            param: {},

            //i18n
            language: {
                lengthMenu: sdk.resource.get('tm.dataTableExt.language.lengthMenu'),
                zeroRecords: sdk.resource.get('tm.dataTableExt.language.zeroRecords'),
                error: sdk.resource.get('tm.dataTableExt.language.error'),
                selection: sdk.resource.get('tm.dataTableExt.language.selection'),
                info: sdk.resource.get('tm.dataTableExt.language.info'),
                infoEmpty: sdk.resource.get('tm.dataTableExt.language.infoEmpty'),
                infoFiltered: '(' + sdk.resource.get('tm.dataTableExt.language.infoFiltered') + ')',
                search: sdk.resource.get('tm.dataTableExt.language.search'),
                paginate: {
                    first: sdk.resource.get('tm.dataTableExt.language.paginate.first'),
                    last: sdk.resource.get('tm.dataTableExt.language.paginate.last'),
                    next: sdk.resource.get('tm.dataTableExt.language.paginate.next'),
                    previous: sdk.resource.get('tm.dataTableExt.language.paginate.previous'),
                },
                aria: {
                    sortAscending: ': ' + sdk.resource.get('tm.dataTableExt.language.aria.sortAscending'),
                    sortDescending: ': ' + sdk.resource.get('tm.dataTableExt.language.aria.sortDescending')
                }
            }
        },

        //inner properties
        _isServerSide: false,

        _defaultParam: function () {
            return {
                selectionSprite: {
                    empty: 'glyphicon glyphicon-unchecked',
                    checked: 'glyphicon glyphicon-check',
                    indeterminate: undefined
                },

                //definizione delle colonne
                columns: undefined,

                //dataSource del DataTable (utilizzato per griglie client-side)
                dataSource: [],

                //impostazioni ajax per griglie server-side
                ajaxUrl: '',
                ajaxData: $.noop,
                ajaxSuccess: $.noop,
                ajaxComplete: $.noop,
                ajaxError: $.noop,
                processing: undefined,          //bool
                customLoader: {
                    class: undefined,
                    text: undefined,
                },

                //funzione per determinare la chiave del dataObject
                dataObjectKey: $.noop,

                //funzione per determinare i filtri con cui filtrare il dataObject
                dataObjectFilter: {},

                //creatore della riga
                rowCreator: $.noop,
                addRowClick: $.noop,
                order: [],

                //impostazioni generali di base
                itemsPerPage: 8,
                maxItems: undefined,
                autoWidth: true,

                //predicati
                isOnHoverEnabled: true,
                isFilterable: false,
                isOrderable: false,
                isSelectable: false,

                //toolbars ed aree esterne alla dataTable
                addInfo: false,
                addLengthMenu: true,
                lengthMenu: [[8, 24, 32, -1], [8, 24, 32, 'Tutti']],

                initialItemSelector: $.noop,
                selectFirst: true,
                updateAccount: $.noop,
                eventClickElement: $.noop,

                //events
                onDraw: $.noop

            };
        },

        //methods
        _init: function () {

            this.options.param = $.extend(this._defaultParam(), this.options.param);

            var _selectionSprite = this.options.param.selectionSprite;
            this.options.param.selectionSprite4CheckAllFlag = _selectionSprite.empty && _selectionSprite.empty != '' && _selectionSprite.checked && _selectionSprite.checked != '' && _selectionSprite.indeterminate && _selectionSprite.indeterminate != '';

            // GESTIONE DELLE PROPERTY DA ESPORRE
            // questa parte è indispensabile perché i widget jquery.ui si comportano come oggetti singleton

            this.element.data(new function () {
                this.internal = {
                    _context: undefined,
                    _selected: { isAllChecked: 0, items: [], total: 0 },
                    _selectionCount: function () {

                        var count = 0;
                        var multipleSelectionMode = !!this._selected.isAllChecked && this._selected.isAllChecked != 0;

                        if (multipleSelectionMode == 0) {

                            count = this._selected.items.length;

                        } else if (multipleSelectionMode == 1) {

                            count = this._selected.total - this._selected.items.length;

                        }

                        if (this._context != undefined && $(this._context).attr('id') != undefined && $(this._context).attr('id') != '') {

                            $('#' + $(this._context).attr('id') + '_length label .selection strong.item').text(count);
                            $('#' + $(this._context).attr('id') + '_length label .selection strong.total').text(this._selected.total);

                        }

                    },
                    _dataObjectFilter: {}
                };

                this.getFilter = function () {
                    return this.internal._dataObjectFilter;
                };

                this.setFilter = function (param1, param2) {

                    //se il primo parametro è una stringa allora la leggiamo come chiave di ingresso per modificare il filtro relativo
                    if (typeof param1 == 'string') {
                        this.internal._dataObjectFilter[param1] = param2;

                        //altrimenti se il parametro 1 è un oggetto diverso da stringa, lo consideriamo come l'oggetto dei filtri da applicare interamente.
                    } else {
                        this.internal._dataObjectFilter = param1;

                    }

                };

                this.getSelection = function () {
                    return this.internal._selected;
                };

                this.resetSelection = function () {

                    //resetto items e flagAll, mantengo inalterato total che viene gestito dalla chiamata ajax
                    this.internal._selected.items = [];
                    this.internal._selected.isAllChecked = 0;

                    //aggiorno i contatori di selezione
                    this.internal._selectionCount();

                    var _contextWidget = this.internal._context.data().tmDataTableExt;
                    $('tbody tr td span.checkFlag', this.internal._context).each(function (index, item) {

                        var _sprites = _contextWidget.options.param.selectionSprite;
                        _contextWidget._check(this, _sprites.checked, _sprites.empty, false);

                    });

                    var checkAllInputValue = $('thead tr th input.checkAll', this.internal._context)[0];
                    if (checkAllInputValue) {
                        checkAllInputValue.indeterminate = false;
                        checkAllInputValue.checked = false;

                        var spriteElement = $(checkAllInputValue).siblings('span.checkAll4Sprite');

                        if (spriteElement && spriteElement.length > 0) {
                            var _sprites = _contextWidget.options.param.selectionSprite;
                            _contextWidget._checkAll4SpriteFlag(spriteElement, _sprites.checked, _sprites.empty, _sprites.indeterminate, checkAllInputValue);
                        }

                    }

                };

                this.dataObjectStringSerialize = function (dataObject) {

                    var str = '';
                    for (var prop in dataObject) {

                        str += dataObject[prop];

                    }

                    return str;

                };

                this.read = function (filter) {
                    var element = this.internal._context;
                    var widget = this;

                    if (filter) {

                        widget.tmDataTableExt.options.param.dataObjectFilter = filter;
                    } else {

                        widget.tmDataTableExt.options.param.dataObjectFilter = widget.internal._dataObjectFilter;
                    }

                    var fullTextSearch = $('input[type="search"]', $(element).siblings('div.dataTables_filter')).val();
                    widget.setFilter('search', fullTextSearch);

                    $.extend(element.data().internal._dataObjectFilter, widget.tmDataTableExt.options.param.dataObjectFilter);
                    element.DataTable().draw();

                    $('input[type="search"]', $(element).siblings('div.dataTables_filter')).val(fullTextSearch);

                    //ogni volta che viene fatto il read dobbiamo anche resettare la selezione
                    if (element.data().resetSelection != undefined) {
                        element.data().resetSelection();
                    }

                };

                this.destroy = function () {

                    try {

                        var element = this.internal._context;
                        var widget = this;

                        //Restore the table to it's original state in the DOM by removing all of DataTables enhancements,
                        //alterations to the DOM structure of the table and event listeners.
                        element.dataTable().fnDestroy();

                        //Per coerenza con il popolamento della tabella fatta nel widget elimino anche le tr e l'intestazione
                        $('tbody', this.element).html('');
                        $('thead th[additional-column]', element).remove();

                        //ogni volta che viene fatto il destroy dobbiamo anche resettare la selezione
                        if ($(element).data().resetSelection != undefined) {
                            $(element).data().resetSelection();
                        }

                        widget.tmDataTableExt.options.param.updateAccount();

                    } catch (ex) {

                        throw ex;
                        //sdk.utils.log.errorMessage(err);

                    }

                }

            });

            this.element.data().internal._context = this.element;

            // fine gestione delle property da esporre

            try {

                //_isServerSide sarà disponibile come var globale interno al widget,
                //inoltre lo stesso valore viene assegnato alla property serverSide nel dataTableParam
                this._isServerSide = this.options.dataTableParam.serverSide = this.options.param.ajaxUrl != undefined && this.options.param.ajaxUrl != '';

                //impostiamo i parametri del dataTable, se esistono nel param vengono assegnati nel dataTableParam
                if (this.options.param.columns != undefined) {
                    this.options.dataTableParam.columns = this.options.param.columns.slice(0);
                }

                if (this.options.param.lengthMenu != undefined && this.options.param.addLengthMenu) {
                    this.options.dataTableParam.lengthMenu = this.options.param.lengthMenu.slice(0);
                }

                if (this.options.language != undefined) {
                    this.options.dataTableParam.language = this.options.language;
                }

                if (this.options.param.isFilterable != undefined) {
                    this.options.dataTableParam.searching = this.options.param.isFilterable;
                }

                if (this.options.param.addInfo != undefined) {
                    this.options.dataTableParam.info = this.options.param.addInfo;
                }

                //se (lengthMenu NON è definito OPPURE (è definito ED è vuoto)) allora nascondiamo il menu a tendina
                if (this.options.dataTableParam.lengthMenu == undefined || (this.options.dataTableParam.lengthMenu != undefined && this.options.dataTableParam.lengthMenu.length < 1)) {
                    this.options.language.lengthMenu = '';
                }

                if (this.options.param.isOrderable != undefined) {
                    this.options.dataTableParam.ordering = this.options.param.isOrderable;
                }

                if (this.options.param.order != undefined) {
                    //riportiamo dentro il dataTableParam l'ordinamento.
                    //questa logica di assegnazione è necessaria per disaccoppiare l'order da param a dataTableParam (aka: clone array),
                    //altrimenti nel caso di iterazioni sull'ordinamento, la modifica si ripercuote anche nel param, che ci serve pulito.
                    this.options.dataTableParam.order = [];
                    for (var i = 0; i < this.options.param.order.length; i++) {
                        this.options.dataTableParam.order.push(this.options.param.order[i].slice(0));
                    }
                }

                if (this.options.dataTableParam.order == undefined || (Array.isArray(this.options.dataTableParam.order) && this.options.dataTableParam.order.length == 0)) {

                    var firstOrderableColumn = 0;
                    for (var index in this.options.param.columns) {
                        if (!!this.options.param.columns[index].orderable) {
                            firstOrderableColumn = index;
                            break;
                        }
                    }

                    this.options.dataTableParam.order = [[firstOrderableColumn, 'asc']];
                }

                if (this.options.param.isSelectable != undefined) {
                    this.options.dataTableParam.select = this.options.param.isSelectable;
                }

                if (this.options.param.dataObjectFilter != undefined) {
                    $.extend(this.element.data().internal._dataObjectFilter, this.options.param.dataObjectFilter);
                }

                if (this.options.param.itemsPerPage != undefined) {
                    this.options.dataTableParam.iDisplayLength = this.options.param.itemsPerPage;
                }

                if (this.options.param.autoWidth != undefined) {
                    this.options.dataTableParam.autoWidth = this.options.param.autoWidth;
                }

                var me = this;

                //specializiamo la dataTable secondo le logiche server-side (chiamata ajax) o client-side
                if (this._isServerSide) {

                    //SERVER SIDE LOGIC

                    if (!!this.options.dataTableParam.select) {


                        //aggiungo la nuova colonna per la gestione della selezione in riga
                        var checkAllElement = {
                            orderable: false,
                            render: function (data, type, full, meta) {

                                //selezione singola:            isAllChecked = 0       +       items != []
                                //selezione tutti:              isAllChecked = 1       +       items == []
                                //selezione tutti + esclusi:    isAllChecked = 2       +       items != [] (items -> excludedItems) che sono gli items deselezionati (senza spunta)

                                var isSelected = false;
                                var key = me.options.param.dataObjectKey(full);

                                var index = $.inArray(JSON.stringify(key), $.map(me.element.data().internal._selected.items, JSON.stringify));
                                var multipleSelectionMode = !!me.element.data().internal._selected.isAllChecked && me.element.data().internal._selected.isAllChecked != 0;

                                if (index === -1 && multipleSelectionMode) {
                                    isSelected = true;

                                } else if (index != -1 && !multipleSelectionMode) {
                                    isSelected = true;

                                }

                                return '<div class="text-center"><span name="' + me.element.data().dataObjectStringSerialize(key) + '" class="' + (isSelected ? me.options.param.selectionSprite.checked : me.options.param.selectionSprite.empty) + ' checkFlag"></span></div>';
                            }

                        };

                        var inputElement = '<input name="checkAll" id="checkAll" class="checkAll" type="checkbox" style="' + (me.options.param.selectionSprite4CheckAllFlag ? 'display: none;' : '') + '" />';
                        if (me.options.param.selectionSprite4CheckAllFlag) {
                            inputElement += '<span style="cursor: pointer;" class="checkAll4Sprite ' + me.options.param.selectionSprite.empty + '"></span>';

                        }

                        var inputWidth = 50;

                        //creo una nuova colonna in testata con il flag massivo, se esiste una testata per le colonne... altrimenti l'aggiungiamo nella definizione della colonna.
                        if (!!$('thead tr', this.element) && $('thead tr', this.element).length > 0) {
                            $('thead tr', this.element).append('<th additional-column width="' + inputWidth + 'px">' + inputElement + '</th>');

                        } else {
                            checkAllElement.title = inputElement;
                            checkAllElement.width = inputWidth;

                        }

                        this.options.dataTableParam.columns.push(checkAllElement);

                    }

                    if (this.options.param.processing == undefined) {
                        this.options.param.processing = this._isServerSide;
                    }

                    //gestiamo il loader
                    this.options.dataTableParam.processing = this.options.param.processing;

                    //se il loader è definito e sono definite le customclass e customtext allora andiamo a personalizzare il loader:
                    //class viene inserito nel div esterno
                    //text è un html content che verrà inserito all'interno al div esterno.
                    if (!!this.options.param.processing && (this.options.param.customLoaderClass != undefined || this.options.param.customLoaderText != undefined)) {

                        var processingPattern = '<div for="' + $(this.element).attr('id') + '" class="@class">@text</div>';

                        var customLoaderClass = this.options.param.customLoaderClass != undefined ? this.options.param.customLoaderClass : '';
                        processingPattern = processingPattern.replace(/\@class/g, customLoaderClass);

                        var customLoaderText = this.options.param.customLoaderText != undefined ? this.options.param.customLoaderText : '';
                        processingPattern = processingPattern.replace(/\@text/g, customLoaderText);

                        this.options.dataTableParam.language.processing = processingPattern;
                    }

                    this.options.dataTableParam.ajax = {
                        url: this.options.param.ajaxUrl,
                        type: 'POST',
                        //contentType: 'application/json',
                        context: me,

                        data: function (data) {

                            //prima settiamo i filtri: estendiamo l'oggetto data.filter con il dataObjectFilter
                            data.filter = $.extend(data.filter, me.element.data().internal._dataObjectFilter);
                            data.search.value = data.filter.search;

                            //eseguiamo la funzione ajaxData(data) definita dall'utente se c'è (altrimenti viene eseguita una noop)
                            //così da dare all'utente la possibilità di modificarsi ulteriormente i filtri
                            me.options.param.ajaxData(data);

                            //normaliziamo l'ordinamento per avere un dizionario chiave-valore dove: chiave = nome colonna, valore: asc/desc
                            /*if (data.order != undefined) {

                                for (var i = 0; i < data.order.length; i++) {

                                    var columnName = data.columns[data.order[i].column].name;
                                    var columnData = data.columns[data.order[i].column].data;

                                    data.order[i] = {
                                        column: (columnName != null && columnName != '') ? columnName : columnData,
                                        dir: data.order[i].dir
                                    };
                                }
                            }*/

                            return { JQueryParam: JSON.stringify(data) };
                        },

                        dataSrc: function (data) {

                            //se la chiamata è andata a buon fine, ma non ha prodotto risultati allora normalizziamo il set di risultati con un array vuoto.
                            //senza questa normalizzazione, il datatable provocherebbe un errore javascript.
                            if (data.data == undefined) {
                                data.data = [];
                            }

                            return data.data;
                        },

                        complete: function (data) {

                            //se la dataTable prevede la selezione di elementi, creiamo l'ambiente per la selezione
                            if (!!me.options.dataTableParam.select) {

                                if (me.element.data().internal._selected.items.length > 0 && !me.element.data().internal._selected.isAllChecked) {

                                    $('.checkAll', me.element)[0].indeterminate = true;

                                }

                                this.element.data().internal._selected.total = (data && data.responseJSON) ? data.responseJSON.recordsFiltered : 0;

                                var multipleSelectionMode = !!me.element.data().internal._selected.isAllChecked && me.element.data().internal._selected.isAllChecked != 0;

                                if (!multipleSelectionMode) { //modalità singola
                                    me.element.data().internal._selectionCount(me.element);

                                } else { //modalidtà multipla
                                    me.element.data().internal._selectionCount(me.element);

                                }

                                //aggiunge tutti gli eventi di click su riga e gli eventi relativi al selettore multiplo
                                me._addEventsForSelection(data.responseJSON && data.responseJSON.data && data.responseJSON.data.length > 0);

                                //nel caso fosse presente il messaggio di feedback ricerca vuota, mettiamo al centro la scritta.
                                $('#' + me.element.attr('id') + ' tbody tr td.dataTables_empty').addClass('text-center');

                            }

                            //definisco l'hover sulle righe
                            if (me.options.param.isOnHoverEnabled) {
                                $('tbody', me.element).on('mouseenter', 'tr', function () {
                                    $(this).addClass('hover');
                                });

                                $('tbody', me.element).on('mouseleave', 'tr', function () {
                                    $(this).removeClass('hover');
                                });
                            }

                            data = (data && data.responseJSON) ? data.responseJSON : undefined;

                            me.element.data().internal.noHideElements = (data.recordsFiltered - data.length) <= 0;

                            me.options.param.ajaxComplete(data, me);
                            me._onDraw($(me.element));
                        },

                        error: function (status, data) {

                            $('tbody', me.element)
                                .html('<tr class="odd"><td valign="top" colspan="' + $('thead th', me.element).length + '" class="dataTables_empty" style="padding-left: 5px; padding-right: 5px;">' + me.options.language.error + '</td></tr>');

                            me.options.param.ajaxError(status, data);

                            //sdk.utils.log.errorMessage(data);

                        }

                    };

                    //per ogni riga, associamo l'oggetto che la identifica usando lo scope jquery
                    this.options.dataTableParam.createdRow = function (row, data, index) {

                        data.dataObjectKey = me.options.param.dataObjectKey(data);
                        $(row).data(data);

                        if (me.options.param.createdRow != undefined) {

                            me.options.param.createdRow(row, data, index);
                            me.options.param.addRowClick();

                        }
                    };

                } else {

                    //CLIENT SIDE LOGIC
                    this._dataSource = this.options.param.dataSource != undefined ? this.options.param.dataSource : this.options.dataTableParam.dataSource;
                    if (this.options.param.maxItems && this.options.param.maxItems >= 0) {
                        this._dataSource = this._dataSource.slice(0, this.options.param.maxItems);
                    }

                    //se il numero di elementi è minore o uguale agli elementi da visualizzare per pagina, allora non serve paginazione e ricerca.
                    if (this._dataSource.length <= this.options.param.itemsPerPage) {

                        this.options.dataTableParam.paging = false;
                        this.options.dataTableParam.searching = false;

                    }

                    //ripulisco la tabella precedentemente disegnata
                    if (this._dataSource && this._dataSource.length > 0) {
                        this.element.data().destroy();
                    }

                    //disegno la tabella con gli elementi
                    $.each(this._dataSource, function (index, item) {

                        var tr = me.options.param.rowCreator(item); //creazione della riga tramite funzione di callback messa a dispozione dell'utente
                        tr = $(tr).attr('tmindex', index); //aggiunta di un attributo alla tr, utile per il recupero dell'oggetto via js
                        tr.data(item); //inseriamo l'intero oggetto di riga nello scope jquery

                        //aggiungiamo eventuali eventi alla riga
                        $(tr).click(function (e) {
                            me.options.param.addRowClick(tr, e);
                        });

                        me._clickElement(tr);

                        $('tbody', me.element).append(tr); //appendiamo la riga al body della tabella

                    });

                    //messaggio custom per avvertire l'utente che non ci sono record in griglia
                    if (this.options.param.resNoRecord != null) {
                        this.options.dataTableParam.language.zeroRecords = this.options.param.resNoRecord;
                    }

                    //definisco l'hover sulle righe
                    if (this.options.param.isOnHoverEnabled) {
                        this.element.on('mouseenter', 'tr', function () { $(this).addClass('hover'); });
                        this.element.on('mouseleave', 'tr', function () { $(this).removeClass('hover'); });
                    }

                    if (me.options.dataTableParam.columns == undefined) {
                        me.options.dataTableParam.columns = [];
                    }

                    $('thead th', this.element).each(function (index, element) {

                        if (me.options.dataTableParam.columns[index] == undefined) {
                            me.options.dataTableParam.columns[index] = {};
                        }

                        if ($(this).hasClass('no-order')) {
                            me.options.dataTableParam.columns[index].orderable = false;
                        }

                        if ($(this).hasClass('no-search')) {
                            me.options.dataTableParam.columns[index].searchable = false;
                        }

                    });

                }

                //procediamo a costruire la griglia ed ad iniettare un'oggetto estensivo nello scope jquery
                this.element.dataTable(this.options.dataTableParam);
                this._postInit();

            } catch (err) {

                throw err; //rilanciamo l'errore per avere un feedback a console, nel caso si rompa lo script js

            }

        },

        _postInit: function () {
            var me = this;

            if (this._isServerSide && this.options.param.isSelectable) {
                //logica server-side eseguita nel post-init della dataTables
                //a questo punto sappiamo che la griglia è stata preparata, ma non abbiamo la certezza che sia già stata disegnata

                if ($('#' + me.element.attr('id') + '_length label div').element == undefined || $('#' + me.element.attr('id') + '_length label div').length == 0) {

                    if (me.options.dataTableParam.language != undefined && me.options.dataTableParam.language.selection != undefined) {

                        var selectionLanguage = me.options.dataTableParam.language.selection
                            .replace(/_[Ii][Tt][Ee][Mm][Ss]_/g, '<strong class="selection item"></strong>')
                            .replace(/_[Tt][Oo][Tt][Aa][Ll]_/g, '<strong class="selection total"></strong>');

                        $('#' + me.element.attr('id') + '_length label').append('<div class="selection">' + selectionLanguage + '</div>');

                    }

                }

            } else {
                //logica client-side eseguita nel post-init della dataTables
                //a questo punto la griglia è già stata disegnata e preparata

                if (this.options.dataTableParam.select) {

                    this.element.on('click', 'tr', function () {

                        // recupero dell'attributo tmindex della riga tr tramite il quale recuperare l'oggetto dal data source per il popolamento dell'intestazione
                        var _item = $(this).data();
                        if (_item) {
                            me.options.param.updateAccount(_item);
                        }
                    });

                }

                if (this.options.param.initialItemSelector !== $.noop) {
                    if (this._dataSource && this._dataSource.length > 0) {

                        $.each(this._dataSource, function (index, item) {

                            if (me.options.param.initialItemSelector(index, item)) {
                                me.options.param.updateAccount(item);
                                return false;
                            }

                            return true;

                        });
                    }

                } else {

                    // di default simulo il click sul primo elemento in modo da pre caricare la testata del rapporto
                    if (this.options.param.selectFirst && this.options.param.selectFirst == true) {
                        $('tbody tr:first-child', this.element).click();
                    }

                }

                this._onDraw($(this.element).closest('table'));

            }

            $('#' + me.element.attr('id')).closest('.tabSelezioneCC').find('.dataTables_wrapper, .dataTables_filter').each(function (index, item) {
                this.style.background = 'none';
                this.style.width = 'inherit';
            });

            $('#' + me.element.attr('id')).closest('.tabSelezioneCC').each(function (index, item) {
                this.style.marginTop = '0';
            });

            $('#' + me.element.attr('id')).closest('.tabSelezioneCC').find('.dataTables_wrapper, .dataTables_filter .aziendaSelectorTable_filter').each(function (index, item) {
                this.style.background = 'none';
            });

            $('#' + me.element.attr('id')).siblings('.dataTables_filter').each(function (index, item) {
                var label = $(this).find('label');

                $(label).parent().append('<div class="custom-search"></div>');
                $(label).siblings('div.custom-search').append(label.append('<span class="icon-replace icon-search active">&nbsp;</span>'));

                $('span.icon-replace.icon-search.active', $(label))
                    .click(function () {

                        $('table.dataTable', $(this)
                            .closest('.dataTables_wrapper'))
                            .data()
                            .read()

                    });

            });
        },

        _onDraw: function (element) {

            var padding = '5px';

            $.each($('td', element), function () {

                this.style.paddingLeft = padding;
                this.style.paddingRight = padding;

            });

            $.each($('th', element), function () {

                this.style.paddingLeft = padding;
                this.style.paddingRight = padding;

            });

            var fullTextSearch = '';
            var filter = $(element).data().getFilter();
            if (filter != undefined) {
                fullTextSearch = filter.search;
            }

            $('input[type="search"]', $(element).siblings('div.dataTables_filter')).unbind();
            $('input[type="search"]', $(element).siblings('div.dataTables_filter')).val(fullTextSearch);

            $('div.dataTables_filter')
                .css('background', 'transparent')
                .css('width', 'inherit');

            $(element)
                .css('margin', '0 auto')
                .css('width', '100%')
                .css('clear', 'both')
                .css('border-collapse', 'collapse')
                .css('table-layout', 'fixed')
                .css('word-wrap', 'break-word');

            this.options.param.onDraw(element);

            $('tbody tr .dataTables_empty', element).unbind();
            $('tbody tr .dataTables_empty', element).parent().unbind();

            var gridDataInternal = element.data().internal;
            if (gridDataInternal.noHideElements) {

                $('div.dataTables_paginate', gridDataInternal.context).hide();

            } else {

                $('div.dataTables_paginate', gridDataInternal.context).show();

            }
        },

        _clickElement: function (tr) {

            var _typeClickElement = this.options.param.typeClickElement;

            if (_typeClickElement != undefined) {

                $('td > a', tr).click(function () {

                    var databind = $(this).attr(_typeClickElement.Anchor.databind);
                    var actionparam = $(this).attr(_typeClickElement.Anchor.actiondirect);

                    this.options.param.eventClickElement(databind, _typeClickElement.Anchor.name, actionparam);

                });

                $('td > button', tr).click(function () {

                    var databind = $(this).attr(_typeClickElement.Button.databind);
                    var actionparam = $(this).attr(_typeClickElement.Button.actiondirect);

                    this.options.param.eventClickElement(databind, _typeClickElement.Button.name, actionparam);

                });

                $('td > img', tr).click(function () {

                    var databind = $(this).attr(_typeClickElement.Img.databind);
                    var actionparam = $(this).attr(_typeClickElement.Img.actiondirect);

                    this.options.param.eventClickElement(databind, _typeClickElement.Img.name, actionparam);

                });

                $('td > label', tr).click(function () {

                    var databind = $(this).attr(_typeClickElement.Label.databind);
                    var actionparam = $(this).attr(_typeClickElement.Label.actiondirect);

                    this.options.param.eventClickElement(databind, _typeClickElement.Label.name, actionparam);

                });

                $('td > [type=checkbox]', tr).click(function () {

                    var databind = $(this).attr(_typeClickElement.Checkbox.databind);
                    var actionparam = $(this).attr(_typeClickElement.Checkbox.actiondirect);

                    this.options.param.eventClickElement(databind, _typeClickElement.Checkbox.name, actionparam);

                });

            }

        },

        _addEventsForSelection: function (addEvent) {

            //impostazione della selezione multipla tramite il flag di 'select all'
            $('thead tr th input.checkAll', this.element).unbind();
            $('thead tr th span.checkAll4Sprite', this.element).unbind();

            if (!!addEvent) {

                $('thead tr th span.checkAll4Sprite', this.element).click(function () {
                    //check all usando uno sprite di tipo font icon. il click scatena il click sulla input nascosta che gestisce l'intera logica.
                    $(this).siblings('input.checkAll').click();

                });

                $('thead tr th input.checkAll', this.element).click(function () {

                    var table = $(this).closest('table');
                    var data = table.data();

                    var checkAll = $(this)[0];

                    data.internal._selected.isAllChecked = checkAll.checked ? 1 : (checkAll.indeterminate ? 2 : 0); // 1 is checked, 0 not checked, 2 indeterminate

                    //gestiamo lo sprite, se c'è
                    var spriteElement = $(this).siblings('span.checkAll4Sprite');
                    var selectionSprite = data.tmDataTableExt.options.param.selectionSprite;
                    data.tmDataTableExt._checkAll4SpriteFlag(spriteElement, selectionSprite.checked, selectionSprite.empty, selectionSprite.indeterminate, checkAll);

                    //logica di funzionamento
                    if (data.internal._selected.isAllChecked != 2) {

                        data.internal._selected.items = [];

                        //tenuto divisi i casi, nel caso in futuro ci fosse la necessità di cambiarne il comportamento a seconda se il flagAll è checkato o meno.
                        //anyway in entrambi i casi è necessario chiamare il selectionCount per aggiornare i contatori in cima alla pagina
                        if (data.internal._selected.isAllChecked == 0) {

                            data.internal._selectionCount(table);

                        } else if (data.internal._selected.isAllChecked == 1) {

                            data.internal._selectionCount(table);

                        }

                    }

                    $.each($('table#' + table.attr('id') + ' tbody div span.checkFlag'), function () {

                        var widget = $(this).closest('table').data().tmDataTableExt;
                        var checked = checkAll.checked;

                        if (checked) {
                            widget._check(this, widget.options.param.selectionSprite.checked, widget.options.param.selectionSprite.empty, true);

                        } else {
                            widget._check(this, widget.options.param.selectionSprite.checked, widget.options.param.selectionSprite.empty, false);

                        }

                    });
                });
            }

            //gestione della selezione in riga
            $('tbody', this.element).unbind();

            if (!!addEvent) {
                $('tbody', this.element).on('click', 'tr', function (event) {

                    //se il click è avvenuto su un elemento del DOM che corrisponde ad un'azione di input (input(text, radio, check), button, anchor, textarea)
                    //allora non dobbiamo selezionare la riga, perché probabilmente vogliamo solamente eseguire un'azione sulla riga senza volerla selezionare.
                    if ($.inArray(event.target.tagName.toUpperCase(), ['INPUT', 'A', 'BUTTON', 'TEXTAREA', 'SELECT']) != -1) {
                        return;
                    }

                    var table = $(this).closest('table');
                    var dataTable = table.data();
                    var dataTableId = table.attr('id');

                    var data = $(this).data();

                    var key = data.dataObjectKey;
                    var keyString = dataTable.dataObjectStringSerialize(key); //probabilmente andrà in errore...
                    var index = $.inArray(JSON.stringify(key), $.map(dataTable.internal._selected.items, JSON.stringify));

                    var checkedClass = dataTable.tmDataTableExt.options.param.selectionSprite.checked;
                    var uncheckedClass = dataTable.tmDataTableExt.options.param.selectionSprite.empty;

                    //selezione singola:            isAllChecked = 0       +       items != []
                    //selezione tutti:              isAllChecked = 1       +       items == []
                    //selezione tutti + esclusi:    isAllChecked = 2       +       items != [] (items -> excludedItems) che sono gli items deselezionati (senza spunta)

                    var multipleSelectionMode = !!dataTable.internal._selected.isAllChecked && dataTable.internal._selected.isAllChecked != 0;
                    var checkElement = $('table#' + dataTableId + ' tbody div span.checkFlag[name="' + keyString + '"]');

                    dataTable.tmDataTableExt._check(checkElement, checkedClass, uncheckedClass, false);

                    if (index === -1 && !multipleSelectionMode) {

                        //elemento non presente, modalità singola
                        dataTable.internal._selected.items.push(key);
                        dataTable.tmDataTableExt._check(checkElement, checkedClass, uncheckedClass, true);

                    } else if (index === -1 && multipleSelectionMode) {

                        //elemento non presente, modalidtà multipla
                        dataTable.internal._selected.items.push(key);

                    } else {

                        if (multipleSelectionMode) {
                            dataTable.tmDataTableExt._check(checkElement, checkedClass, uncheckedClass, true);
                        }

                        dataTable.internal._selected.items.splice(index, 1);

                    }

                    var checkAll = $('table#' + dataTableId + ' thead tr th input.checkAll')[0];

                    //se il numero di elementi selezionati è lo stesso degli elementi totali in griglia ed isAllChecked flag è diverso da 1,
                    //allora significa che li abbiamo selezionati tutti manualmente.
                    //nel caso in cui isAllChecked è 1 significa che li abbiamo deselezionati tutti e quindi in tal caso bisogna solamente cambiare il valore del flag.
                    if (dataTable.internal._selected.items.length == dataTable.internal._selected.total) {

                        //prendiamo il flag di seleziona tutto relativo alla griglia su cui stiamo lavorando e ne cambiamo i valori per renderlo coerente con la selezione
                        checkAll.checked = dataTable.internal._selected.isAllChecked != 1;
                        checkAll.indeterminate = undefined;

                        //svuotiamo l'array degli items e flagghiamo manualmente il flag isAllChecked,
                        //così da tornare nello stesso caso del seleziona tutto.
                        dataTable.internal._selected.items = [];
                        dataTable.internal._selected.isAllChecked = dataTable.internal._selected.isAllChecked != 1 ? 1 : 0;
                    }

                    //aggiorniamo il contatore in cima
                    dataTable.internal._selectionCount(table);
                    $('table#' + table.attr('id') + ' thead tr th input.checkAll')[0].indeterminate = (dataTable.internal._selected.items.length > 0);

                    //gestiamo lo sprite, se c'è
                    var spriteElement = $(checkAll).siblings('span.checkAll4Sprite');
                    var selectionSprite = dataTable.tmDataTableExt.options.param.selectionSprite;
                    dataTable.tmDataTableExt._checkAll4SpriteFlag(spriteElement, selectionSprite.checked, selectionSprite.empty, selectionSprite.indeterminate, checkAll);

                });
            }

        },

        _check: function (element, checkedClass, uncheckedClass, isChecked) {
            $(element)
                .removeClass(checkedClass)
                .removeClass(uncheckedClass)
                .addClass(isChecked ? checkedClass : uncheckedClass);
        },

        _checkAll4SpriteFlag: function (element, checkedClass, uncheckedClass, indeterminateClass, checkAllInputValue) {

            if (element && element.length > 0) {
                var spriteToApply = checkAllInputValue.indeterminate ? indeterminateClass : (checkAllInputValue.checked ? checkedClass : uncheckedClass);
                $(element).removeClass().addClass('checkAll4Sprite ' + spriteToApply);

            }
        }

    });

});
