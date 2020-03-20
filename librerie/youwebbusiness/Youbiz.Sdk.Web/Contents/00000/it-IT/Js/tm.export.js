/**
    Input params:
        buttonId: Id del div a cui l'sdk aggancerà la dropdown e i relativi pulsanti di stampa
        parameter: oggetto che verrà passato all'sdk e successivamente come input alla action indicata nell'url (es. oggetto di filtro per effettuare la search)
        exportItems: array di oggetti del tipo 
                                var exportItems = [
                                    {
                                        type: "Pdf",
                                        url: '@Url.ActionCrypted("StampaListaEsitiSdd", "StampeLista", "Stampe")',
                                        fieldName: "json"
                                    },
                                    {
                                        type: "Excel",
                                        url: '@Url.ActionCrypted("StampaListaEsitiSddXls", "StampeLista", "Stampe")',
                                        fieldName: "json"
                                    }
                                ];
                    in cui è presente il tipo di documento, l'url e opzionalmente il fieldName che specifica il relativo fieldName nell'SDK (nome del parametro di input della action)
                    Di seguito i 2 casi di chiamata del client in cui venga o non venga passato il campo fieldName:
                        1) fieldName = "json":
                                contenttype:application/json
                                json:{"IdEsito":null,"IdAzienda":81318,"IdRapporto":1274110,"ImportoDisposizioneTo":null,"ImportoDisposizioneFrom":null,"DataInvioDisposizioneFrom":null,"DataInvioDisposizioneTo":null,"DataScadenzaDisposizioneFrom":null,"DataScadenzaDisposizioneTo":null,"CodiceAbi":"05034","RagioneSociale":null,"Debitore":null,"StatoIncasso":"RJCT,TMTB","ImportoDistintaTo":null,"ImportoDistintaFrom":null,"ImportoSottoDistintaTo":null,"ImportoSottoDistintaFrom":null,"IdDistinta":null,"IdEsitoSottoDistinta":null,"IsSortAscending":false,"Size":10,"SortColumn":"1","StartIndex":1}
                        
                        2) senza parametro fieldName:
                                IdEsito: null
                                IdAzienda: 81318
                                ...
**/
var Export;
(function (Export) {
    var _print = function (buttonId, exportItems, parameter) {
        debugger;
        var docs = [];
        for (var i = 0; i < exportItems.length; i++) {
            resourceForm = exportItems[i].hasOwnProperty("fieldName") ?
                {
                    action: exportItems[i].url,
                    parameter: parameter,
                    target: "_self",
                    serialization: {
                        fieldName: exportItems[i].fieldName,
                        mode: false,
                    },
                } :
                {
                    action: exportItems[i].url,
                    parameter: parameter,
                    target: "_self"
                }

            docs.push({
                id: "print",
                type: exportItems[i].type,
                title: "Export",
                iconClass: "anchise-icon anchise-icon-export-" + exportItems[i].type,
                saveAll: {
                    resourceForm: resourceForm
                }
            });
        }

        sdk.print('#' + buttonId).create({
            docs: docs,
            eventHandler: function (eventType, target, data) {

            },
        });
    };

    Export.print = _print;
})(Export || (Export = {}));