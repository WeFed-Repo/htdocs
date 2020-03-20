//Funzioni pubbliche

//function saldoDisplay(saldotmp) {
//    if (saldotmp) {
//        return sdk.utils.text.formatAmmountDecimal(saldotmp);
//    }
//    return "0,00";
//}

//function dataDisplay(datatmp) {
//    if (datatmp) {
//        return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY');
//    }
//    return "&nbsp;";
//}


//function getError(jqXHR, errorObject) {
//    if (!errorObject) {
//        //errore applicativo gestito in questo progetto
//        var toret = $.parseJSON(jqXHR.responseJSON);
//        var htmlError =
//            '<div class="col-xs-12 messagePanel error visible" style="display: block; margin-bottom: 0;margin-top: 0;">' +
//                '    <h3 class="titleSection">Attenzione</h3>' +
//                '    <p>' +
//                '        <ul>          ' +
//                '                <li>' +
//                toret[0].ErrorMessage +
//                '                </li>            ' +
//                '        </ul>' +
//                '    </p>' +
//                '</div>';

//        $("#messagePanelAlertCallAjax", container).html(htmlError);
//        $("#messagePanelAlertCallAjax", container).show();
//    } else {
//        //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
//        navigateForm(this);
//    }

//}

// var paramSearchElencoDistinte = null;

//mostra l'area elenco distinte e ne fa il popolamento
//function ViewElencoDistinte(ctx, urlElencoDistinte, urlDettaglioDistinta, urlDeleteDistinta, paramSearch) {
//function ViewElencoDistinte(ctx, paramUrl, paramSearch) {
//    // debugger;
//    paramSearchElencoDistinte = paramSearch;
//    sdk.net.call(paramUrl.urlElencoDistinte, paramSearch, {
//        successHandler: function (me, data, jsonResponse, warningObject) {
//            sdk.utils.log.debugMessage("anfa lista  distinte");
//            var toret = jsonResponse;
//            if (toret) {
//                //listPopulateElencoDistinte(ctx, urlDettaglioDistinta, urlDeleteDistinta, toret);
//                listPopulateElencoDistinte(ctx, paramUrl, toret);
//            }

//        },

//        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
//            sdk.utils.log.debugMessage("anfa lista  distinte ERROR ");
//            if (jqXHR != null) {
//                //errore applicativo gestito in questo progetto
//                getError(jqXHR);
//            } else {
//                //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
//                navigateForm(this);
//            }
//        }
//    });
//}



//function listPopulateElencoDistinte(ctx, paramUrl, jsonResult) {
    
//    initTableDistinta();
    
//    var selectedId = '';
//    var param = {
//        dataSource: jsonResult,
//        rowCreator: function (parameter) {

//            var saldoDisplay = function (datatmp) {
//                if (datatmp) {
//                    return sdk.utils.text.formatAmmountDecimal(datatmp);
//                }
//                return "0,00";
//            }
//            var dataDisplay = function (datatmp) {
//                if (datatmp) {
//                    return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY');
//                }
//                return "&nbsp;";
//            }

//            var actionModifica = function (datatmp) {
//                //if (datatmp) {
                    
//                //    switch (datatmp.StatoDistinta) {
//                //        case 0: // creata da fimare
//                //            //return '<button type="button" button-param=' + datatmp.Id + ' button-direct="autorizza">action</button>'
//                //            //    + '<a type="anchor" anchor-param=' + datatmp.Id + ' anchor-direct="edit" class="icon-replace icon-edit active" href="javascript:void(0)">&nbsp;</a>'
//                //            //    + '<a type="anchor" id="actionDelete' + datatmp.Id + '" anchor-param=' + datatmp.Id + ' anchor-direct="delete" class="icon-replace icon-delete active" href="javascript:void(0)">&nbsp;</a>';
//                //            return '';
//                //        case 1: // in modifica
                            
//                //            return '<a type="anchor" anchor-direct="edit" class="icon-replace icon-edit active" href="javascript:void(0)">&nbsp;</a>'
//                //                + '<a type="anchor" id="actionDelete" anchor-direct="delete" class="icon-replace icon-delete active" href="javascript:void(0)">&nbsp;</a>'
//                //                + '<a type="anchor" anchor-direct="view" class="icon-replace icon-search active" href="javascript:void(0)">&nbsp;</a>';
//                //        case 2: //parz firmata
//                //            return '';
//                //        case 3: //firmata/accettata
//                //            return '<a type="anchor" anchor-direct="view" class="icon-replace icon-search active" href="javascript:void(0)">&nbsp;</a>';

//                //    }
//                //}
//                //return "";

//                return '<div class="dropdown">' +
//                            '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
//                                'Opera' +
//                            '&nbsp;<span class="caret"></span>' +
//                            '</button>' +
//                            '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">' +
//                                '<li><a id="viewAction" class="dropdown-item" href="#">Dettaglio</a></li>' +
//                                '<li><a id="deleteAction" class="dropdown-item" href="#">Cancella</a></li>' +
//                                '<li><a id="signAction" class="dropdown-item disabled" href="#">Firma</a></li>' +
//                            '</ul>' +
//                        '</div>';

//            }

//            if (parameter) {
                
//                var tmpObject =  $('<tr>' +
//                    '<td class="hidden"></td> ' +
//                    '<td class="col-sm-2" style="text-align:center">' + dataDisplay(parameter.DataCreazioneUtc) + ' </td> ' +
//                    '<td class="col-sm-2" style="text-align:center">' + saldoDisplay(parameter.ImportoTotale) + '</td> ' +
//                    '<td class="col-sm-2" style="text-align:center">' + parameter.RagioneSociale + '</td> ' +                    
//                    '<td class="col-sm-2" style="text-align:center">' + actionModifica(parameter) + '</td> ' +                    
//                    '</tr>');
                
//                $('#viewAction', tmpObject).click(function() {
//                    alert('view:' + parameter.ImportoTotale);
//                });
//                $('#deleteAction', tmpObject).click(function() {
//                    alert('delete:' + parameter.ImportoTotale);
//                });
//                $('#signAction', tmpObject).click(function() {
//                    alert('sign:' + parameter.ImportoTotale);
//                });
//                return tmpObject;

//            }
//            return '';
//        },
//        //updateAccount: function (rapportoSelezionato) {
//        //    //return aggiornaIntestazione(rapportoSelezionato);
//        //},
//        eventClickElement: function (param, direct) {
//            debugger;
//            // return toDoActionDistinta(param, direct, paramUrl, ctx);
//        },
//        initialItemSelector: function (index, item) {
//            if (selectedId == '') {
//                return false;
//            }
//            return false;
//        },

//        selectFirst: false,
//        minElementForNotPagination: 8,
//        resNoRecord: 'Non ci sono distinte',
//        noTopSearch: true,
//        isOrderList: true
//    }



//    $('#tabellaElencoDistinte', ctx).itemSelectorPage({ param: param });

//    $('#areaElencoDistinte', ctx).show();

//}


//function toDoActionDistinta(param, direct, urlDettaglio, urlDelete, ctx) {
//function toDoActionDistinta(param, direct, paramUrl, ctx) {
//    //debugger;
//    switch (direct) {
//    case "edit":
//        return;
//    case "delete":
//            DeleteDistinta(paramUrl,param.Key,ctx);
//        return;
//    case "view":
//        var destination = {
//            urlmenu: paramUrl.urlDettaglioDistinta,
//            parameters: param.Key
//        };
//        //sdk.utils.navigateFormByParamNew(destination);
//        viewDettaglioDistintaChunk(destination, ctx);


//    }
//}



//function viewDettaglioDistintaChunk(param, ctx) {
//    sdk.net.call(param.urlmenu, param.parameters, {
//        successHandler: function (me, data, jsonResponse, warningObject) {
//            sdk.utils.log.debugMessage("anfa dettaglio distinta chunk");
//            var toret = jsonResponse;
//            //debugger;
//            if (data) {
//                $('#areaElencoDistinteContainer', ctx).hide();
//                $("#areaDettaglioDistintaDati", ctx).html(data);
//                $("#areaDettaglioDistinta", ctx).show();
//            }

//        },

//        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
//            sdk.utils.log.debugMessage("anfa dettaglio distinta chunk ERROR ");
//            if (jqXHR != null) {
//                //errore applicativo gestito in questo progetto
//                getError(jqXHR);
//            } else {
//                //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
//                navigateForm(this);
//            }
//        }
//    });
//}

//function DeleteDistinta(url, param) {
//function DeleteDistinta(paramUrl, param,ctx) {
//    sdk.net.call(paramUrl.urlDeleteDistinta, param, {
//        successHandler: function (me, data, jsonResponse, warningObject) {
//            sdk.utils.log.debugMessage("anfa elenco distinte DELETE DISTINTA");
//            var toret = jsonResponse;
//            //debugger;
//            if (jsonResponse) {
//                ViewElencoDistinte(ctx, paramUrl, paramSearchElencoDistinte);
//            }

//        },

//        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
//            sdk.utils.log.debugMessage("anfa elenco distinte DELETE DISTINTA ERROR ");
//            if (jqXHR != null) {
//                //errore applicativo gestito in questo progetto
//                getError(jqXHR);
//            } else {
//                //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
//                navigateForm(this);
//            }
//        }
//    });
//}
//function initTableDistinta() {
//    var strThead = '<tr>' +
//        '<th class="hidden">&nbsp;</th>' +
//            '<th>Data</th>' +
//            '<th>Importo totale</th>' +
//            '<th>Ragione sociale</th>' +
//            '<th>&nbsp;</th>' +
//        '</tr>';


    



//    $('#tabellaElencoDistinte > thead').empty();
//    $('#tabellaElencoDistinte > thead').html(strThead);

//}



