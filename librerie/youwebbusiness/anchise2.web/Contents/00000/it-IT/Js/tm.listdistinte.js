//Create David 30/01/2018 work in progress...
//options: 
//          items = si sapetta un array di oggetti in formato json
//          container = si aspetta il div padre 
//          url = si aspetta l'url della chiamata da fare per popolare la lista. Se valorizzato non prende in considerazione il parametro items!
//          parameter = eventuali parameter per la chiamata ajax. Vengono presi in considerazione solo se l'url esiste
//          containerError = eventuale div, esistente sulla pagina, dove stampare eventuali errori del widget
//          funcClickRow = se settata funzione di richiamo al click di un singolo elemento nella riga

(function($) {
    $.widget("tm.list", {

        options: {
            items: null,
            url: null,
            trthColumnsHead:null,
            searchParameter: null,
            container: null,
            containerError: null,
            numElementForNotPagination:null,
            funcClickRow: $.noop,
            funcClickElement: $.noop,
            funcRowCreator: $.noop
        },
        
        _init: function () {

            try {
                this._destroy();
                this._inizializzaTabella();
            }
            catch (err) {
                alert(err);
            }

            
        },
        
        //_logOptionsParameter: function(optionsArgument) {
        //    if (optionsArgument.url) {
        //        sdk.utils.log.debugMessage("tm.list init: url exist ");
        //    } else {
        //        sdk.utils.log.debugMessage("tm.list init: url not found");
        //    }
        //},

        // Create a private method.

        _inizializzaTabella: function() {
            sdk.utils.log.debugMessage("tm.listdistinte init: start");
            this.options.internalTable = "#listTable";
            var tablehtml = '<div class="dataTables_wrapper listTable">					'
                + '                    <table id="listTable" class="table table-striped">	'
                + '                        <tbody>												'
                + '                        </tbody>												'
                + '                        <thead>												'
                + this.options.thColumnsHead
                + '                        </thead>												'
                + '                    </table>													'
                + '                </div>';



            if (this.options.url) {
                sdk.utils.log.debugMessage("tm.listdistinte init: exist url");
                this._callAjax(this.options, this);
            } else {
                sdk.utils.log.debugMessage("tm.listdistinte init: url not found");
                if (this.options.items) {
                    sdk.utils.log.debugMessage("tm.listdistinte init: exist items");
                    this._populateList(this.options, this);
                } else {
                    sdk.utils.log.debugMessage("tm.listdistinte init: items not found");
                }
            }

            this.element.append(tablehtml);
            sdk.utils.log.debugMessage("tm.listdistinte init: finish");
        },

        _destroy: function() {
            try {
                this.element.html("");
                this.element.destroy();
            }
            catch (ecc) {
            }
        },


        _callAjax: function (optionsArgument, thisme) {
            var param = {};
            if (optionsArgument.searchParameter != null) {
                sdk.utils.log.debugMessage("tm.listdistinte: get searchParameter");
                param = optionsArgument.searchParameter;
            }
            sdk.net.call(optionsArgument.url, param, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("tm.listdistinte: caricamento lista esito OK");
                    
                    optionsArgument.items = jsonResponse;
                    thisme._populateList(optionsArgument, thisme);

                },
                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    
                    sdk.utils.log.errorMessage("tm.listdistinte: caricamento lista esito KO");
                    if (!errorObject) {
                        //errore applicativo gestito in questo progetto
                        var errorMessage = 'Generic Error';
                        if (jqXHR) {
                            if (jqXHR.status == 400) {
                                var toretjqxhr = $.parseJSON(jqXHR.responseJSON);
                                errorMessage = toretjqxhr[0].ErrorMessage;
                            }
                            if (jqXHR.status == 404) {
                                errorMessage = jqXHR.status + " " + jqXHR.statusText;
                            }
                        }

                        var htmlError = '<div class="col-xs-12 messagePanel error visible" style="display: block; margin-bottom: 0;margin-top: 0;">' +
                                   '    <h3 class="titleSection">Attenzione</h3>' +
                                   '    <p>' +
                                   '        <ul>          ' +
                                   '                <li>' +
                                       errorMessage +
                                   '                </li>            ' +
                                   '        </ul>' +
                                   '    </p>' +
                                   '</div>';

                       

                        if (optionsArgument.containerError != null) {
                            sdk.utils.log.errorMessage("tm.listdistinte print error in external element");
                            var errtmp = optionsArgument.containerError;
                            $(errtmp).html(htmlError);
                            $(errtmp).show();
                        } else {
                            sdk.utils.log.errorMessage("tm.listdistinte print error in internal element");
                            $(optionsArgument.internalTable).html(htmlError);
                        }

                        
                    } else {
                        sdk.utils.log.errorMessage("tm.listdistinte redirect error external");
                        //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
                        navigateForm(this);
                    }
                }
            });

        },

        _populateList: function (optionsArgument, meglobale) {
            sdk.utils.log.debugMessage("tm.listdistinte: popolo lista");
            var items = optionsArgument.items;
            var ctx = optionsArgument.container;
            var selectedId = '';
            var numorNotPagination = 8;
            if (optionsArgument.numElementForNotPagination != null) {
                numorNotPagination = optionsArgument.numElementForNotPagination;
            }
            

            var param = {
                dataSource: items,
                rowCreator: optionsArgument.funcRowCreator,
                updateAccount: function (rapportoSelezionato) {
                    //debugger;
                    if (rapportoSelezionato) {
                        if (meglobale.options.funcClickRow !== $.noop) {
                            return meglobale.options.funcClickRow(rapportoSelezionato);
                        }
                    }
                    return null;
                },
                eventClickElement: function (param, name, direct) {
                    sdk.utils.log.debugMessage("tm.listdistinte click element");
                    if (param) {
                        if (meglobale.options.funcClickElement !== $.noop) {
                            return meglobale.options.funcClickElement(param, name, direct);
                        }
                    }
                    return null;
                },
                selectFirst: false,
                minElementForNotPagination: numorNotPagination,
                resNoRecord: "Non ci sono dati"
            };
            $(meglobale.options.internalTable, ctx).itemSelectorPage({ param: param });
            sdk.utils.log.debugMessage("tm.listdistinte: fine popolamento lista");
        },



        // Create a public method.
        publicMethod: function () {
            
        }
        

    });
    
}(jQuery));
