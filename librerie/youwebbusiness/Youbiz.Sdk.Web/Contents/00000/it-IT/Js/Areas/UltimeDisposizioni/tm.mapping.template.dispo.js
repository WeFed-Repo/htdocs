var template;
var templateParams;
// required: moment.js --> 2.1.0
(function (template, $, args) {
    // namespace template.Utils
    template.utils = (function (utils, $, args) {
        // namespace template.utils.func
        utils.func = (function (func, $, args) {
            /*
            "UVBI"://PAGAMENTO UTENZE
            "UVBB"://BOLLETTINO POSTALE
            "REMV"://MAV
            "RERV"://RAV
            "UVBA"://BOLLO AUTO
            "UVCB"://CBILL
            "BMRI"://RICARICA TELEFONICA
            "CCBO"://MYBANK
            "BMCC"://CANONE TV
            "UVBE"://UTENZA ENEL
            "UVBT"://UTENZA TELECOM
            */

            //Funzioni interne passate al render
            var _saldoDisplayDettagli = function (val) {
                //mi aspetto sempre una stringa
                var defaultValue = '0,00';
                if (val) {
                    if (val.length > 0) {
                        var toret = parseFloat(val);
                        if (toret == 0) {
                            return defaultValue;
                        }
                        return sdk.utils.text.formatAmmountDecimal(toret);
                    }
                    else {
                        return defaultValue;
                    }
                }
                return defaultValue;
            };
            var _mapStato = function (val) {
                if (val) {
                    return sdk.resource.get('ultimedispo.detail.stato.' + val);
                }
                return sdk.resource.get('ultimedispo.detail.stato.0');
            };
            var _isRevocabile = function (val) {
                if (val) {
                    return "Si";
                }
                return "No";
            };
            var _mapOperazione = function (val) {
                if (val) {
                    return sdk.resource.get('ultimedispo.disposizione.tipo.' + val);
                }
                return sdk.resource.get('ultimedispo.disposizione.tipo.UNKNOWN');
            };
            //Funzioni interne passate al render

            //INTERNAL FUNCTION
            var _datastornabilitaDisplay = function (datatmp) {
                if (datatmp) {
                    return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
                }
                return '';
            };
            var _orastornabilitaDisplay = function (datatmp) {
                if (datatmp) {
                    return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'HH:mm');
                }
                return '';
            };
            var _mapDettagliUVCB = function (chainItem) {
                var dettagli = chainItem.Dettagli;
                if (dettagli) {
                    $(dettagli).each(function (index, value) {
                        var periodorif = "";
                        var infoutenza = "";
                        if (value.Key == "UVCB_PERIODO_RIFERIMENTO") {
                            periodorif = value.Value;
                        }
                        if (value.Key == "UVCB_INFO_UTENZA") {
                            infoutenza = value.Value;
                        }
                        chainItem.UVCB_INFOAGGIUNTIVE = periodorif + " " + infoutenza;

                        switch (value.Key) {
                            case "UVCB_IDENT_BOLLETTA":
                                chainItem.UVCB_IDENT_BOLLETTA = value.Value;
                                break;
                            case "UVCB_NUMERO":
                                chainItem.UVCB_NUMERO = value.Value;
                                break;
                            case "UVCB_IMPORTO_TOTALE":
                                chainItem.UVCB_IMPORTO_TOTALE = value.Value;
                                break;                                                        
                            default:
                        }
                    });
                }
            }

            var _mapDettagliUVBA = function (chainItem) {
                var dettagli = chainItem.Dettagli;
                if (dettagli) {
                    $(dettagli).each(function (index, value) {
                        switch (value.Key) {
                            case "UVBA_TIPO_VEICOLO_DESC":
                                chainItem.UVBA_TIPO_VEICOLO_DESC = value.Value;
                                break;
                            case "UVBA_TARGA":
                                chainItem.UVBA_TARGA = value.Value;
                                break;
                            case "UVBA_REGIONE_DESC":
                                chainItem.UVBA_REGIONE_DESC = value.Value;
                                break;
                            case "UVBA_INTERESSI_BOLLO":
                                chainItem.UVBA_INTERESSI_BOLLO = value.Value;
                                break;
                            case "UVBA_COMMISSIONI_SERVIZIO":
                                chainItem.UVBA_COMMISSIONI_SERVIZIO = value.Value;
                                break;
                            case "UVBA_SANZIONI_BOLLO":
                                chainItem.UVBA_SANZIONI_BOLLO = value.Value;
                                break;
                            default:
                        }
                    });
                }
            };

            var _mapSpecificFieldsTypeDispo = function (parameter) {    
                sdk.utils.log.debugMessage('map.template.dispo: initial mapping');

                if (parameter.RecapitoOrdinante == null) {
                    sdk.utils.log.errorMessage('map.template.dispo: RecapitoOrdinante: null ');
                    parameter.RecapitoOrdinante = { Cap: "", Comune: "", Indirizzo: "", Localita: "", Provincia: "", Stato: "" };
                }
                if (parameter.Beneficiario == null) {
                    sdk.utils.log.errorMessage('map.template.dispo: Beneficiario: null ');
                    parameter.Beneficiario = { Abi: null, Cab: null, Check: null, Cin: null, Conto: "", DescrizioneBanca: null, DescrizioneFiliale: null, Filiale: 0, Intestazione: "", Paese: null, Recapito: null };
                }
                if (parameter.ContoAddebito == null) {
                    sdk.utils.log.errorMessage('map.template.dispo: ContoAddebito: null ');
                    parameter.ContoAddebito = { Categoria: null, CategoriaGruppo: null, CodiceAbi: "", CodiceCab: "", CodiceDivisa: "", CodiceFiliale: "", CodiceIban: "", Descrizione: "", DescrizioneAzienda: "", DescrizioneIntestatario: "", DescrizioneIstituto: "", DescrizionePersonalizzata: null, DescrizioneRapporto: "", Id: null, IdAzienda: "" };
                }
                //Inizio - Variabili interne create qui per gestione date da stampare a video nel messaggio (di firma) Non vengono usate/stampate sui template!!!
                parameter.DataStornabilitaInternal = _datastornabilitaDisplay(parameter.DataOraStornabilita);
                parameter.OraStornabilitaInternal = _orastornabilitaDisplay(parameter.DataOraStornabilita);
                //Fine   - Variabili interne create qui per gestione date da stampare a video nel messaggio (di firma) Non vengono usate/stampate sui template!!!
                switch (parameter.TipoDisposizione) {
                    case "UVBI"://PAGAMENTO UTENZE
                    case "UVBB"://BOLLETTINO POSTALE
                    case "BMRI"://RICARICA TELEFONICA
                    case "CCBO"://MYBANK
                    case "BMCC"://CANONE TV
                    case "UVBE"://UTENZA ENEL
                    case "UVBT"://UTENZA TELECOM
                    case "REMV"://MAV
                    case "RERV"://RAV 
                        break;
                    case "UVBA"://BOLLO AUTO  
                        _mapDettagliUVBA(parameter);
                        sdk.utils.log.debugMessage('map.template.dispo: ' + parameter.TipoDisposizione + " fixed dettagli");
                        break;
                    case "UVCB"://CBILL
                        _mapDettagliUVCB(parameter);
                        sdk.utils.log.debugMessage('map.template.dispo: ' + parameter.TipoDisposizione + " fixed dettagli ");
                        break;                                         
                    default:
                        sdk.utils.log.errorMessage('map.template.dispo: not exist type ' + parameter.TipoDisposizione);
                        break;
                }
                
            };
            //INTERNAL FUNCTION

            

            //PUBLIC FUNCTION
            var init = function (inputParam, arrTipoDispo, panel) {
                panel.html('');
                var specificTypeTemplate = inputParam.TipoDisposizione;
                var urlTemplate = "";
                if (arrTipoDispo) {
                    $(arrTipoDispo).each(function (index, value) {
                        if (value.Key == specificTypeTemplate) {
                            urlTemplate = value.Value;
                            return false;
                        }
                    });
                }

                if (urlTemplate != "") {
                    _mapSpecificFieldsTypeDispo(inputParam);
                    var returnCallBack = function (isShow, messages) {
                        if (isShow) {
                            panel.show();
                        }
                        else {
                            //render messagg perchè errore
                            sdk.utils.pubsub.send('detail.ultimedispo.showPanelError', messages);
                        }
                    };
                    var idTemplate = "templateDetail_" + inputParam.TipoDisposizione;

                    
                    var initializeParam = {
                        "targetPanel": panel,
                        "objectToRender": inputParam,
                        "responseCallBack": returnCallBack,
                        "urlTemplate": urlTemplate,
                        "idTemplate": idTemplate,
                        "optionalConverters": {
                            "formatSaldoDisplayDettagli": _saldoDisplayDettagli,
                            "mapStato": _mapStato,
                            "isRevocabile": _isRevocabile,
                            "mapOperazione": _mapOperazione
                        }
                    };


                    sdk.utils.templates.renderAsync(initializeParam);
                }
            };
            var fixedInputParam = function (parameter) {
                if (parameter) {
                    //Per la success ultimedispo che ha l'Order come oggetto interno
                    if (parameter.Order) {
                        return parameter.Order;
                    }
                    return parameter;
                }
            };
            
            func["init"] = init;
            
            return func;
        })(utils.func || {}, $, args && args.func ? args.func : {});
        // end namespace template.utils.text
        return utils;
    })(template.utils || {}, $, args && args.utils ? args.utils : {});
    // end namespace template.utils
    return template;
})(template || (template = {}), jQuery, templateParams);

