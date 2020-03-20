$(function() {

    // 09/04/2015
    // questo è il widget senza l'estensione diretta (che non sembra funzionare) 
    // e che implementa la dataTable nell _init passandogli le options
        $.widget("tm.itemSelector", {
            options: {
                dataTableParam: {
                    paging: false,
                    searching: false,
                    ordering: true,
                    info: false,
                    pagingType: "simple_numbers",
                    lengthMenu: [[8, 24, 32, -1], [8, 24, 32, "Tutti"]],
                    language: {
                        lengthMenu: "Mostra _MENU_ risultati per pagina",
                        zeroRecords: "Nessun risultato trovato",
                        info: "Pagina _PAGE_ di _PAGES_",
                        infoEmpty: "Nessun record trovato",
                        infoFiltered: "(filtered from _MAX_ total records)",
                        search: "Cerca",
                        paginate: {
                            first: "Prima",
                            last: "Ultima",
                            next: "Succ.",
                            previous: "Prec."
                        },
                        aria: {
                            sortAscending: ": ordinamento crescente",
                            sortDescending: ": ordinamento decrescente"
                        }
                    },
                    
            },
            param: {
                initialItemSelector: $.noop,
                selectFirst: true,
                rowCreator: $.noop,
                updateAccount: $.noop,
                minElementForNotPagination: 0

                    }
        },

        // variabile globale di appoggio che contiene la lista elementi della tabella
        // ci è utile/necessaria al momento del click su una riga della tabella per aggiornare l'intestazione
        _tmpListItems: null, 

        _init: function() {
            // bisogna prima popolare la tabella e poi indetificare il widget come dataTable
            // altrimenti compare la riga scritta nella options "zeroRecords" e poi gli elementi
            try {
                this._popolaTabella();
            }
            catch (err) {
                //alert(err);
            }
        },

        // questa init viene chiamata dopo la fase di popolamento della tabella per sopperire alla chiamata ajax asincrona
        _initPostPopulate: function () {

            this.element.dataTable(this.options.dataTableParam);

            // mouse enter e mouse leave
            this.element.on('mouseenter', 'tr', function () { $(this).addClass('hover'); });
            this.element.on('mouseleave', 'tr', function () { $(this).removeClass('hover'); });
            

            // click
            this._clickRiga(this.options.param);

            // aggiunta per gestione Identificativo rapporto conosciuto
            var optionsParam = this.options.param;
            
            if (optionsParam.initialItemSelector !== $.noop) {
                if (optionsParam._tmpListItems) {
                    var listItems = optionsParam._tmpListItems;
                    $.each(listItems, function (index, item) {
                        if (optionsParam.initialItemSelector(index, item)) {
                            optionsParam.updateAccount(item);
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
            
        },

        _clickRiga: function (paramOption) {
            //debugger;
            this.element.on('click', 'tr', function () {
                //debugger;
                // recupero dell'attributo tmindex della riga tr tramite il quale recuperare l'oggetto dal data source per il popolamento dell'intestazione
                var tmIndex = $(this).attr("tmindex");

                if (paramOption && paramOption._tmpListItems && tmIndex && tmIndex > -1) {
                    var tmItem = paramOption._tmpListItems[tmIndex];
                    paramOption.updateAccount(tmItem);
                }
            });
        },

        // popolamento della tabella a partire da un dataSource oppure con chiamata ajax via url
        _popolaTabella: function () {

            var ds = this.options.param.dataSource;

            if (ds) {
                if (ds.length >= 0) {
                    this.options.param._tmpListItems = ds;
                    this._popolaTabellaInt(ds);
                }
            }
            else {
                if (this.options.param.dataSourceUrl) {

                    var dataUrl = this.options.param.dataSourceUrl;
                    var listaItem = null;
                    var ctx = this;
                    // chiamata ajax all'url
                    $.ajax({
                        type: "POST",
                        url: dataUrl,
                        // data: JSON.stringify({ 'param': arrDrag }),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(data, stato) {
                            listaItem = data;
                        },
                        error: function(richiesta, stato, errori) {
                            alert("Chiamata fallita!!!" + " Richiesta:" + richiesta.responseText + " Stato:" + stato + " Errori:" + errori);
                        },
                        complete: function() {
                            // al complete della chiamata ajax asincrona posso fare la vera popolazione tabella (con annessa costruzione delle righe)
                            if (listaItem) {
                                ctx._popolaTabellaInt(listaItem);
                            }
                        }
                    });
                }
                else {
                    this.element.dataTable(this.options.dataTableParam);
                }
            }
        },

        _popolaTabellaInt: function (listItems) {

            var me = this;
            
            if (listItems.length <= me.options.param.minElementForNotPagination) {
                me.options.dataTableParam.paging = false;
                me.options.dataTableParam.searching = false;
            }
            else {
                me.options.dataTableParam.paging = true;
                me.options.dataTableParam.searching = true;
            }

            // pulizia della tabella prima del popolamento
            if (listItems && listItems.length>0) {
                $('tbody' , this.element).html('');
            }

            
            $.each(listItems, function (index, item) {
                var tr = me.options.param.rowCreator(item);
                // aggiunta di un attributo alla riga della tabella utile per il recupero dell'oggetto in fase di click
                var trWithIndex = $(tr).attr("tmindex", index);
                $('tbody', me.element).append(trWithIndex);
            });

            this.options.param._tmpListItems = listItems;
            this._initPostPopulate();
        },

        _destroy: function () {
            try {
                //Restore the table to it's original state in the DOM by removing all of DataTables enhancements, alterations to the DOM structure of the table and event listeners.
                this.element.dataTable().fnDestroy();

                //Per coerenza con il popolamento della tabel fatta nel widget elimino anche le tr e l'intestazione 
                $('tbody', this.element).html('');
                this.options.param.updateAccount();
            }
            catch (ecc) {
            }
        }


    }); // Fine WIDGET

});





