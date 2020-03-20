//Chiamate ajax
var jSonBtnPrint = [
    { 'Value': 1, 'Key': 'actionFinancingdett', 'Description': 'Dettaglio', 'Type': 'button'},
    { 'Value': 2, 'Key': 'actionFinancingamm', 'Description': 'Ammortamento', 'Type': 'div'},
    { 'Value': 3, 'Key': 'actionFinancingpreamm', 'Description': 'PreAmmortamento', 'Type': 'div'}
];
function areaDettagli(divcontent, url, ctx) {
    var searchKey = $('#Key').text();
    var request = { "NumeroRate": null, "DataDa": null, "DataA": null, "Stato": null, "Key": { "Crypted": searchKey } };
    var urlParam = url;
    var nameType = 'Dettaglio';
    sdk.net.call(urlParam, request, {
        successHandler: function (me, data, jsonResponse, warningObject) {
            sdk.utils.log.debugMessage("Financing: success call " + nameType);
            var jsResultObject = jsonResponse;
            if (jsResultObject == null) {
                //jsResultObject = [];
                sdk.utils.log.debugMessage("Financing: success call " + nameType + " jsResultObject == null");
            }
            MappingDettaglio(jsResultObject);
            abilitaTab(jsResultObject);
            divcontent.show();
            sdk.utils.log.debugMessage("Financing: show contents " + nameType);
        },
        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
            sdk.utils.log.debugMessage("Financing: error call " + nameType);
            if (!errorObject) {
                MappingDettaglio(null);
                divcontent.show();
                //errore applicativo gestito in questo progetto
                var toret = $.parseJSON(jqXHR.responseJSON);

                /**
                 var strMsg='';
                if (toret) {
                    $.each(toret, function (i, data) {
                        strMsg += '<li>' +data.ErrorMessage +'</li>';
                    });
                }
                 */

                var htmlError = '<div class="col-xs-12 messagePanel error visible" style="display: block; margin-bottom: 0;margin-top: 0;">' +
                    '    <h3 class="titleSection">' + sdk.resource.get('financing.errorTitle.error') + '</h3>' +
                    '    <p>' +
                    '        <ul>          ' +
                    '                <li>' +
                    toret[0].ErrorMessage +
                    '                </li>            ' +
                    '        </ul>' +
                    '    </p>' +
                    '</div>';

                $("#messagePanelAlertSubList", ctx).html(htmlError);
                $("#messagePanelAlertSubList", ctx).show();
            } else {
                //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
                navigateForm(this);
            }
        }
    });


}

function areaAmmPreAmm(divcontent, type, url, ctx) {
    
    var searchNumRate = $('#NumRate').val();
    var searchTipoRata = $('#TipoRata').val();
    var searchdataDa = $('#searc-datada').val();
    var searchdataA = $('#searc-dataa').val();
    var searchKey = $('#Key').text();
    var msgNotFound = sdk.resource.get('financing.msgNotFound.nessunDatoTrovato'); //'Nessun dato trovato';
    var request = { "NumeroRate": searchNumRate, "DataDa": moment(searchdataDa, 'DD/MM/YYYY', true).format(), "DataA": moment(searchdataA, 'DD/MM/YYYY', true).format(), "Stato": searchTipoRata, "Key": { "Crypted": searchKey } };

    var internalUrl = '';
    var internalUrlPrint = '';
    var nameType = '';
    if (type == 2) {
        internalUrl = url + '/GetAmmortamento';
        internalUrlPrint = url + '/StampaAmmortamento';
        nameType = "Ammortamento";
    }
    if (type == 3) {
        internalUrl = url + '/GetPreAmmortamento';
        internalUrlPrint = url +'/StampaPreAmmortamento';
        nameType = "PreAmmortamento";
    }
    
    sdk.net.call(internalUrl, request, {
        successHandler: function (me, data, jsonResponse, warningObject) {
            sdk.utils.log.debugMessage("Financing: success call " + nameType);
            initTables(type);
            var jsResultObject = jsonResponse;
            if (jsResultObject == null) {
                jsResultObject = [];
                if (type == 2) {
                    msgNotFound = sdk.resource.get('financing.ammortamento.msgNotFound');//'Nessun piano di Ammortamento.';
                }
                if (type == 3) {
                    msgNotFound = sdk.resource.get('financing.preammortamento.msgNotFound'); //'Nessun piano di PreAmmortamento.';
                }
            }
            listPopulate(jsResultObject, msgNotFound, ctx, type);
            sdk.utils.log.debugMessage("Financing: populate list " + nameType);
            divcontent.show();
            sdk.utils.log.debugMessage("Financing: show list " + nameType);
        },
        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
            sdk.utils.log.debugMessage(nameType + ": error call");
            if (!errorObject) {
                initTables(type);
                listPopulate([], msgNotFound, ctx, type);
                divcontent.show();
                //errore applicativo gestito in questo progetto
                var toret = $.parseJSON(jqXHR.responseJSON);
                var htmlError = '<div class="col-xs-12 messagePanel error visible" style="display: block; margin-bottom: 0;margin-top: 0;">' +
                    '    <h3 class="titleSection">' + sdk.resource.get('financing.errorTitle.error') + '</h3>' +
                    '    <p>' +
                    '        <ul>          ' +
                    '                <li>' +
                    toret[0].ErrorMessage +
                    '                </li>            ' +
                    '        </ul>' +
                    '    </p>' +
                    '</div>';

                $("#messagePanelAlertSubList", ctx).html(htmlError);
                $("#messagePanelAlertSubList", ctx).show();
            } else {
                //TODO: simulo clickMenu cosi entra in gioco SDK con la sua gestione (pagine di errore)
                navigateForm(this);
            }
        }
    });

    abilitaBottoneStampa(type, internalUrlPrint, request);


}
//Chiamate ajax

//Inizializza
function abilitaBottoneStampa(type, url, param) {
    //Ammortamento
    if (type == 2) {
        sdk.print('#btnPrintAmmortamento').create({
            docs: [
                {
                    id: 'all-1',
                    type: 'pdf',
                    iconClass: '',
                    label: 'PDF',
                    title: 'documenti pdf',
                    saveAll: {
                        label: 'Scarica tutti i PDF',
                        resourceForm: {
                            //target: '_self',
                            action: url,
                            parameter: param
                        }
                    }
                }
            ]
        });
    }
    //PreAmmortamento
    if (type == 3) {
        sdk.print('#btnPrintPreAmmortamento').create({
            docs: [
                {
                    id: 'all-1',
                    type: 'pdf',
                    iconClass: '',
                    label: 'PDF',
                    title: 'documenti pdf',
                    saveAll: {
                        label: 'Scarica tutti i PDF',
                        resourceForm: {
                            action: url,
                            parameter: param
                        }
                    }
                }
            ]
        });
    }
}
//Inizializza

//Populate
function initTables(searchType) {
    var strThead = '<tr>' +
        '<th style="width: 0px;" class="hidden">&nbsp;</th>' +
        '<th style="width: 130px;">' + sdk.resource.get('financing.listRata.NumeroRata.columValue') + '</th>' +
        '<th style="width: 107px;">' + sdk.resource.get('financing.listRata.Scadenza.columValue') + '</th>' +
        '<th style="width: 90px;">' + sdk.resource.get('financing.listRata.Importo.columValue') + '</th>' +
        '<th style="width: 134px;">' + sdk.resource.get('financing.listRata.QuotaCapitale.columValue') + '</th>' +
        '<th style="width: 134px;">' + sdk.resource.get('financing.listRata.QuotaInteressi.columValue') + '</th>' +        
        '<th style="width: 134px;">' + sdk.resource.get('financing.listRata.Stato.columValue') + '</th>' +
        '</tr>';
    $('#tableAmmortamento > thead').empty();
    $('#tableAmmortamento > thead').html(strThead);


    $('.titleSection.resultList.finanziamenti').html('Result');
    if (searchType == 2) {
        $('.titleSection.resultList.finanziamenti').html(sdk.resource.get('financing.titleResultList.ammortamento'));
    }
    if (searchType == 3) {
        $('.titleSection.resultList.finanziamenti').html(sdk.resource.get('financing.titleResultList.preAmmortamento'));
    }



}

function listPopulate(jsonResult, msgNotFound, ctx, tipologia) {

    //Bottone stampa
    abilitaBottoneStampaLista(tipologia);
    //Bottone stampa
    

    var selectedId = '';
    var param = {
        dataSource: jsonResult,
        rowCreator: function (parameter) {
            if (parameter) {

                var statoDisplay = function (statotmp) {
                    var resName = 'financing.stato.' + statotmp;
                    
                    if (statotmp && sdk.resource.has(resName)) {
                        return sdk.resource.get(resName);
                    }
                    return "&nbsp;";
                }

                var dataDisplay = function (datatmp) {
                    if (datatmp) {
                        return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY');
                    }
                    return "&nbsp;";
                }

                var saldoDisplay = function (datatmp, divisatmp) {
                    if (datatmp) {
                        return sdk.utils.text.formatAmmountDecimal(datatmp) + ' ' + sdk.utils.text.getCurrencySign(divisatmp);
                    }
                    return "0,00";
                }
                
                return '<tr>' +
                    '<td class="hidden"></td> ' +
                    '<td style="text-align:center">' + (parameter.Numero || '') + ' </td> ' +
                    '<td style="text-align:center">' + dataDisplay(parameter.DataScadenza) + '</td> ' +
                    '<td style="text-align:center">' + saldoDisplay(parameter.Importo, parameter.Divisa) + ' </td> ' +
                    '<td style="text-align:center">' + saldoDisplay(parameter.ImportoCapitale, parameter.Divisa) + '</td> ' +
                    '<td style="text-align:center">' + saldoDisplay(parameter.ImportoInteressi, parameter.Divisa) + '</td> ' +                    
                    '<td style="text-align:center">' + statoDisplay(parameter.Stato, parameter.Divisa) + '</td> ' +
                    '</tr>';



            }


            return '';
        },
        updateAccount: function (rapportoSelezionato) {
            //return aggiornaIntestazione(rapportoSelezionato);
        },

        initialItemSelector: function (index, item) {
            if (selectedId == '') {
                return false;
            }
            return false;
        },

        selectFirst: false,
        minElementForNotPagination: 8,
        resNoRecord: msgNotFound,
        noTopSearch: true,
        isOrderList: false
    }

    $('#tableAmmortamento', ctx).itemSelectorPage({ param: param });
}
//Populate


//Mapping
function MappingDettaglio(param) {
    var datatDa = null;
    var datatA = null;

    $('#dettagli-contoAppoggio-intestato').html("");
    $('#dettagli-pianiAmmortimento-numerorate').html("");
    $('#dettagli-pianiAmmortimento-rateresidue').html("");
    $('#dettagli-pianiAmmortimento-periodo').html("");
    $('#dettagli-pianiPreAmmortimento-periodo').html("");
    $('#dettagli-pianiPreAmmortimento-numerorate').html("");
    $('#dettagli-pianiPreAmmortimento-rateresidue').html("");
    $('#dettagli-pianiAmmortimento-numerodelibera').html("");
    $('#dettagli-riferimentiTemporali-datastipula').html("");
    $('#dettagli-riferimentiTemporali-scadproxrata').html("");
    $('#dettagli-riferimentiTemporali-dataerogazione').html("");
    $('#dettagli-riferimentiTemporali-scadultimarata').html("");
    $('#dettagli-riferimentiTemporali-datadecctasso').html("");
    $('#dettagli-importoCondizioni-importoaccordato').html("");
    $('#dettagli-importoCondizioni-spese').html("");
    $('#dettagli-importoCondizioni-debitoresiduo').html("");
    $('#dettagli-importoCondizioni-importodimora').html("");
    $('#dettagli-importoCondizioni-tassoinvigore').html("");
    $('#dettagli-contoAppoggio-conto').html("");
    $('#dettagli-contoAppoggio-filiale').html("");
    $('#searc-datada').datepicker("destroy");
    $('#searc-dataa').datepicker("destroy");

    if (param != null) {
        
        $('#dettagli-contoAppoggio-intestato').html((param.Intestatario == null ? '' : param.Intestatario));
        $('#dettagli-contoAppoggio-conto').html((param.CcRegolamento.Codice == null ? '' : param.CcRegolamento.Codice));
        $('#dettagli-contoAppoggio-filiale').html((param.DescFiliale == null ? '' : param.DescFiliale));
        
        $('#dettagli-pianiAmmortimento-numerorate').html((param.NumRateAmmortamento == null ? '' : param.NumRateAmmortamento));
        $('#dettagli-pianiAmmortimento-rateresidue').html((param.NumRateResidueAmmortamento == null ? '' : param.NumRateResidueAmmortamento));
        $('#dettagli-pianiAmmortimento-periodo').html((param.PeriodicitaAmmortamento == null ? '' : mapPeriodicitaAmmortamento(param.PeriodicitaAmmortamento)));
        $('#dettagli-pianiAmmortimento-numerodelibera').html((param.NumDelibera == null ? '' : param.NumDelibera));
        
        $('#dettagli-pianiPreAmmortimento-periodo').html((param.PeriodicitaPreAmmortamento == null ? '' : mapPeriodicitaAmmortamento(param.PeriodicitaPreAmmortamento)));
        $('#dettagli-pianiPreAmmortimento-numerorate').html((param.NumRatePreAmmortamento == null ? '' : param.NumRatePreAmmortamento));
        $('#dettagli-pianiPreAmmortimento-rateresidue').html((param.NumRateResiduePreAmmortamento == null ? '' : param.NumRateResiduePreAmmortamento));

        
        $('#subArea-pianoPreAmmortamento').show();
        if (param.NumRatePreAmmortamento == 0 && param.NumRateResiduePreAmmortamento == 0) {
            $('#subArea-pianoPreAmmortamento').hide();
        }
        
        $('#dettagli-riferimentiTemporali-datastipula').html((dataDisplay(param.DataStipula) == null ? '' : dataDisplay(param.DataStipula)));
        $('#dettagli-riferimentiTemporali-scadproxrata').html((dataDisplay(param.DataScadenzaProssimaRata) == null ? '' : dataDisplay(param.DataScadenzaProssimaRata)));
        $('#dettagli-riferimentiTemporali-dataerogazione').html((dataDisplay(param.DataErogazione) == null ? '' : dataDisplay(param.DataErogazione)));
        $('#dettagli-riferimentiTemporali-scadultimarata').html((dataDisplay(param.DataScadenzaUltimaRata) == null ? '' : dataDisplay(param.DataScadenzaUltimaRata)));
        $('#dettagli-riferimentiTemporali-datadecctasso').html((dataDisplay(param.DataDecorrenzaTasso) == null ? '' : dataDisplay(param.DataDecorrenzaTasso)));

        $('#dettagli-importoCondizioni-importoaccordato').html((saldoDisplay(param.ImportoErogato) == null ? '' : saldoDisplay(param.ImportoErogato)) + ' ' + (param.Divisa == null ? '' : param.Divisa));
        $('#dettagli-importoCondizioni-spese').html((saldoDisplay(param.Spese) == null ? '' : saldoDisplay(param.Spese)) + ' ' + (param.Divisa == null ? '' : param.Divisa));
        $('#dettagli-importoCondizioni-debitoresiduo').html((saldoDisplay(param.DebitoResiduo) == null ? '' : saldoDisplay(param.DebitoResiduo)) + ' ' + (param.Divisa == null ? '' : param.Divisa));
        $('#dettagli-importoCondizioni-importodimora').html((saldoDisplay(param.Mora) == null ? '' : saldoDisplay(param.Mora)) + ' ' + (param.Divisa == null ? '' : param.Divisa));
        $('#dettagli-importoCondizioni-tassoinvigore').html((saldoDisplay(param.Tasso) == null ? '' : saldoDisplay(param.Tasso) + "0%"));

        
        
        //Inizio Gestione calendario chiama la ListenDatePick che si trova nella pagina che ospita questo codice
        try {            
            datatDa = (dataDisplay(param.DataStipula) == null ? '' : dataDisplay(param.DataStipula));
            datatA = (dataDisplay(param.DataScadenzaUltimaRata) == null ? '' : dataDisplay(param.DataScadenzaUltimaRata));
            ListenDatePick(datatDa, datatA);
        } catch (err) {
            sdk.utils.log.errorMessage("Financing: ListenDatePick not found!");
        }
        //Fine Gestione calendario chiama la ListenDatePick che si trova nella pagina che ospita questo codice


        //Bottone stampa
        abilitaBottoneStampaDettaglio();
        //Bottone stampa

    }
}

function mapPeriodicitaAmmortamento(param) {
    if (param) {

        var resName = 'financing.areastampa.periodicitapagamento.' + param;
        if (param && sdk.resource.has(resName)) {
            return sdk.resource.get(resName);
        }
    }
    return "&nbsp;";
}

function abilitaTab(parameter) {

    if (parameter != null) {
        sdk.utils.log.debugMessage("Financing: active TAB");
        var ammortamento = parameter.NumRateAmmortamento;
        var preammortamento = parameter.NumRatePreAmmortamento;
        var tabJs = [{ 'id': 2, 'count': ammortamento }, { 'id': 3, 'count': preammortamento }];

        $('#ulSezioni > li').each(function (index, param) {
            $(this).show();
            var tab = this;
            $(tabJs).each(function (indexs, params) {
                if (tab.id == params.id) {
                    if (params.count == 0) {
                        $(tab).hide();
                    }
                }
            });
        });
    }
    
}
//Mapping

//Utility
function abilitaBottoneStampaDettaglio() {
    $('#areaPrint').show();
    $(jSonBtnPrint).each(function (indexs, params) {
        $('#areaPrint > div > button.btn.btn-primary.' + params.Key).hide();
        $('#areaPrint > div > div.pull-right.' + params.Key).hide();
        if (params.Value == 1) {
            $('#areaPrint > div > button.btn.btn-primary.' + params.Key).show();
        }
    });

}
function abilitaBottoneStampaLista(parameter) {
    logPrint(parameter);
    if (parameter) {
            $('#areaPrint').show();
            //div
            $(jSonBtnPrint).each(function (indexs, params) {
                $('#areaPrint > div > button.btn.btn-primary.' + params.Key).hide();
                $('#areaPrint > div > div.pull-right.' + params.Key).hide();
                if (params.Value == parameter) {
                    $('#areaPrint > div > div.pull-right.' + params.Key).show();
                }
            });
    }
}

function logPrint(typePrint) {
    if (typePrint) {
        switch (typePrint) {
            case 1:
                sdk.utils.log.debugMessage("Financing: active botton stampa dettaglio");
                break;
            case 2:
                sdk.utils.log.debugMessage("Financing: active botton stampa ammortamento");
                break;
            case 3:
                sdk.utils.log.debugMessage("Financing: active botton stampa preAmmortamento");
                break;
            default:
                sdk.utils.log.debugMessage("Financing: tipo di stampa sconosciuto");
                break;
        }
    } else {
        sdk.utils.log.debugMessage("Financing: nessun tipo di stampa attivata");
    }
    
}

function saldoDisplay(saldotmp) {
    if (saldotmp) {
        return sdk.utils.text.formatAmmountDecimal(saldotmp);
    }
    return "0,00";
}

function dataDisplay(datatmp) {
    if (datatmp) {
        return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY');
    }
    return "&nbsp;";
}

function SetDefaultData(paramDataDa, paramDataA) {
    //debugger;
    sdk.utils.log.debugMessage("Financing: set default data");
    //Logica valorizzazione campi data da / data a
    //A: il campo dataDa viene valorizzato a -6 mesi a partire da oggi solo se la variabile paramDataDa (settata dall'esterno) è MAGGIORE di essa. In caso contrario viene preso il valore di paramDataDa!
    //B: il campo dataA viene valorizzato a +6 mesi a partire da oggi solo se la variabile paramDataA (settata dall'esterno) è MINORE di essa. In caso contrario viene preso il valore di paramDataA!
    
    var currentDate = moment();
    var searchDataDa = $('#searc-datada').val();
    var dateNowDa;
    if (searchDataDa == "") {
        dateNowDa = moment(currentDate).add(-6, 'M').format('DD/MM/YYYY');
    } else {
        dateNowDa = searchDataDa;
    }

    var valDataDa = compare(dateNowDa, paramDataDa);
    switch (valDataDa) {
        case -1:
//            $('#searc-datada').val(moment(paramDataDa, "DD/MM/YYYY").format("DD/MM/YYYY"));
		$('#searc-datada').val(dateNowDa);
            break;
        case 1:
        case 0:
            $('#searc-datada').val(moment(paramDataDa, "DD/MM/YYYY").format("DD/MM/YYYY"));
//            $('#searc-datada').val(dateNowDa);
            break;
        default:
            $('#searc-datada').val(dateNowDa);
            break;
    }


    var searchDataA = $('#searc-dataa').val();
    var dateNowA;
    if (searchDataA == "") {
        dateNowA = moment(currentDate).add(6, 'M').format('DD/MM/YYYY');
    } else {
        dateNowA = searchDataA;
    }

    var valDataA = compare(dateNowA, paramDataA);
    switch (valDataA) {
        case -1:
            $('#searc-dataa').val(moment(paramDataA, "DD/MM/YYYY").format("DD/MM/YYYY"));
//            $('#searc-dataa').val(dateNowA);
            break;
        case 1:
        case 0:
//            $('#searc-dataa').val(moment(paramDataA, "DD/MM/YYYY").format("DD/MM/YYYY"));
            $('#searc-dataa').val(dateNowA);
            break;
        default:
            $('#searc-dataa').val(dateNowA);
            break;
    }
    
}
function compare(dateTimeA, dateTimeB) {
    var momentA = moment(dateTimeA, "DD/MM/YYYY");
    var momentB = moment(dateTimeB, "DD/MM/YYYY");
    if (momentA > momentB) return 1;
    else if (momentA < momentB) return -1;
    else return 0;
}

//Utility
