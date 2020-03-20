var template;
var templateParams;
// required: moment.js --> 2.1.0
(function (template, $, args) {
    // namespace template.Utils
    template.utils = (function (utils, $, args) {
        // namespace template.utils.func
        utils.func = (function (func, $, args) {
            
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
                    return sdk.resource.get('disposizioniMulti.detail.stato.' + val);
                }
                return sdk.resource.get('disposizioniMulti.detail.stato.0');
            };
            var _isRevocabile = function (val) {
                if (val) {
                    return "Si";
                }
                return "No";
            };
            var _mapOperazione = function (val) {
                if (val) {
                    return sdk.resource.get('disposizioniMulti.disposizione.tipo.' + val);
                }
                return sdk.resource.get('disposizioniMulti.disposizione.tipo.UNKNOWN');
            };
            //Funzioni interne passate al render

            //INTERNAL FUNCTION
            var _saldoDisplay = function (datatmp) {
                if (datatmp) {
                    return sdk.utils.text.formatAmmountDecimal(datatmp);
                }
                return "0,00";
            };

            var _creaTotale = function (parameter) {
                if (parameter) {
                    var totale = parameter.Importo + parameter.Order.Commission.Ammount + parameter.Order.Commission.Charge;
                    return totale;
                }
                return 0;
            };

            var _dataDisplay = function (datatmp) {
                if (datatmp) {
                    return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
                }
                return '&nbsp;';
            };
            var _dataDisplayLogic = function (datatmp, status) {
                
                if (datatmp != null && status != null) {
                    switch (status) {
                        case 2://assetStatusEnum.Autorizzata:
                            return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY HH:mm');
                        case 4://assetStatusEnum.Altro:
                        case 5://assetStatusEnum.ParzialmenteAutorizzata:
                        case 0://assetStatusEnum.Undefined:
                        case 3://assetStatusEnum.Confermata:
                        case 1://assetStatusEnum.DaAutorizzare:
                        case 6://assetStatusEnum.InModifica:
                            return "N.D.";
                        default:
                            return "N.D.";
                    }
                }
                return "&nbsp;";
            };
            var _dataDisplayLogicBolPos = function (datatmp, status) {
                if (datatmp != null) {
                    return sdk.utils.text.formatDateTime(datatmp, 'DD/MM/YYYY HH:mm');
                }
                return "N.D.";
            };

            var _getCausale = function (datatmp) {
                if (datatmp) {
                    return datatmp;
                }
                return '&nbsp;';
            };
            var _getCurrencyDisplay = function (datatmp) {
                if (datatmp) {
                    return datatmp;
                }
                return 'EUR';
            };


            //*******bolpos
            var saldoDisplayCommissioni = function (datatmp) {
                if (datatmp) {
                    return sdk.utils.text.formatAmmountDecimal(datatmp);
                }
                return '0,00';
            }

            var getCommissioni = function (datatmp) {
                if (datatmp) {
                    return datatmp.ImportoCommissioni;
                }
                return '0,00';
            };
            var _mapTipoBollettinoDescr = function (parameter) {
                if (parameter) {
                    return sdk.resource.get('oc.bollettiniPostali.tipo.' + parameter);
                }
                return sdk.resource.get('oc.bollettiniPostali.tipo.Unknow');
            };
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
            var getTipoBollettino = function (param) {
                switch (param) {
                    case 896://Premarcato
                    case 674://Premarcato
                        return 'Bollettino Postale Premarcato ' + param;
                        break;
                    case 451://In Bianco
                    case 123://In Bianco
                        return ' Bollettino PostaleIn Bianco ' + param;
                        break;
                    default:
                        return '&nbsp;'
                        break;
                }

                return '&nbsp;'

            };
            //*******bolpos
            var getStatus = function (parameter) {
                if (parameter != null) {
                    if (parameter.Status != null) {
                        return sdk.resource.get('distinte.list.statodistinta.' + parameter.Status);
                    }
                }
                return sdk.resource.get('distinte.list.statodistinta.0');
            };
            var getSubStatus = function (parameter) {
                
                if (parameter) {
                    if (parameter.SubStatus != null) {
                        //return ' (' + sdk.resource.get('distinte.list.subStatodistinta.' + parameter.SubStatus) + ')';
                        return ' - ' + sdk.resource.get('distinte.list.subStatodistinta.' + parameter.SubStatus);
                    } else {
                        sdk.utils.log.debugMessage('getSubStatus: SubStatus is null');
                    }
                } else {
                    sdk.utils.log.debugMessage('getSubStatus: Inputparameter is null');
                }
                return '&nbsp;';
            };

            var getValCodiceTipoBollettino = function (parameter) {
                var toret = 'N.D.';
                if (parameter != null) {
                    if (parameter.Tipo != null) {
                        toret = parameter.Tipo;
                    }
                }
                return toret;
            };

            var getValIndirizzoEsteso = function (parameter) {
                //indirizzo cap comune provincia
                var toret = 'N.D.';
                if (parameter != null) {
                    var localIndirizzo = '';
                    var localCap = '';
                    var localComune = '';
                    var localProvincia = '';

                    if (parameter.SoggettoOrdinante != null) {
                        if (parameter.SoggettoOrdinante.Indirizzo != null) {
                            localIndirizzo = parameter.SoggettoOrdinante.Indirizzo;
                        }
                        if (parameter.SoggettoOrdinante.Cap != null) {
                            localCap = parameter.SoggettoOrdinante.Cap;
                        }
                        if (parameter.SoggettoOrdinante.Comune != null) {
                            localComune = parameter.SoggettoOrdinante.Comune;
                        }
                        if (parameter.SoggettoOrdinante.Provincia != null) {
                            localProvincia = parameter.SoggettoOrdinante.Provincia;
                        }
                        toret = localIndirizzo + "&nbsp;" + localCap + "&nbsp;" + localComune + "&nbsp;" + localProvincia;
                    }
                }
                return toret;
            };
            
            var getValRagioneSociale = function (parameter) {
                var toret = 'N.D.';
                if (parameter != null) {
                    if (parameter.SoggettoOrdinante != null) {
                        if (parameter.SoggettoOrdinante.RagioneSociale != null) {
                            toret = parameter.SoggettoOrdinante.RagioneSociale;
                        }
                    }
                }
                return toret;
            };



            var _internalMapIPA = function (parameter) {
                var _detail = {
                    'originalParam': parameter.param
                };
                //originalParam.Chain.Order.Causale
                var totale = _creaTotale(parameter.param.Chain);
                _detail.Totale = _saldoDisplay(totale);
                _detail.CommFissa = _saldoDisplay(parameter.param.Chain.Order.Commission.Ammount);
                _detail.CommVariabile = _saldoDisplay(parameter.param.Chain.Order.Commission.Charge);

                _detail.CurrencyFissa = _getCurrencyDisplay(parameter.param.Chain.Order.Commission.AmmountCurrency);
                _detail.CurrencyVariabile = _getCurrencyDisplay(parameter.param.Chain.Order.Commission.ChargeCurrency);

                _detail.Currency = parameter.param.Chain.Divisa;

                _detail.Data = _dataDisplayLogic(parameter.param.Chain.Order.DataEsecuzione, parameter.param.Chain.Status);
                _detail.Importo = _saldoDisplay(parameter.param.Chain.Importo);
                _detail.TipologiaBonifico = 'Istantaneo';
                _detail.Causale = _getCausale(parameter.param.Chain.Order.Causale);

                _detail.StatoDistinta = getStatus(parameter.param.Chain) + getSubStatus(parameter.param.Chain);

                _detail.DescrIstitutoBeneficiario = '';
                _detail.CodiceFilialeBeneficiario = '';
                _detail.DescrIstitutoOrdinante = '';
                _detail.CodiceFilialeOrdinante = '';

                if (parameter.filiali != null) {
                    if (parameter.filiali.Creditore != null) {
                        _detail.DescrIstitutoOrdinante = parameter.filiali.Creditore.DescrizioneBanca;
                        _detail.CodiceFilialeOrdinante = parameter.filiali.Creditore.DescrizioneFiliale;
                    }
                    if (parameter.filiali.Debitore != null) {
                        _detail.DescrIstitutoBeneficiario = parameter.filiali.Debitore.DescrizioneBanca;
                        _detail.CodiceFilialeBeneficiario = parameter.filiali.Debitore.DescrizioneFiliale;
                    }
                }
                return _detail;
            };

            var _internalMapBOLPOS = function (parameter) {
                
                var _detail = {
                    'originalParam': parameter.param
                };
                //_detail.Totale = _saldoDisplay(totale);


                if (parameter != null) {

                    switch (parameter.param.Chain.Order.Tipo) {
                        case 896://Premarcato
                        case 674://Premarcato
                            _detail.Premarcato = true;
                            break;
                        case 451://In Bianco
                        case 123://In Bianco
                            _detail.Premarcato = false;
                            break;
                        default:
                            break;
                    }

                    _detail.DescrIstitutoBeneficiario = '';
                    _detail.CodiceFilialeBeneficiario = '';
                    _detail.DescrIstitutoOrdinante = '';
                    _detail.CodiceFilialeOrdinante = '';

                    if (parameter.filiali != null) {
                        if (parameter.filiali.Creditore != null) {
                            _detail.DescrIstitutoOrdinante = parameter.filiali.Creditore.DescrizioneBanca;
                            _detail.CodiceFilialeOrdinante = parameter.filiali.Creditore.DescrizioneFiliale;
                        }
                        if (parameter.filiali.Debitore != null) {
                            _detail.DescrIstitutoBeneficiario = parameter.filiali.Debitore.DescrizioneBanca;
                            _detail.CodiceFilialeBeneficiario = parameter.filiali.Debitore.DescrizioneFiliale;
                        }
                    }

                    
                    _detail.Importo = _saldoDisplay(parameter.param.Chain.Importo);
                    _detail.Currency = parameter.param.Chain.Divisa;
                    var commissioni = getCommissioni(parameter.param.Chain.Order);
                    _detail.Commissioni = saldoDisplayCommissioni(commissioni);
                    var totale = parseFloat(parameter.param.Chain.Importo) + parseFloat(commissioni);
                    _detail.ImportoTotaleInternal = saldoDisplayCommissioni(totale);
                    _detail.TipologiaBonifico = getTipoBollettino(parameter.param.Chain.Order.Tipo);
                    _detail.Causale = _getCausale(parameter.param.Chain.Order.Causale);
                    _detail.DataEsecuzione = _dataDisplayLogicBolPos(parameter.param.Chain.Order.DataEsecuzione, parameter.param.Chain.Status);
                    //_detail.StatoDistinta = getStatus(parameter.param.Chain);
                    //Per la gestione a video del substato commentato per ora...
                    _detail.StatoDistinta = getStatus(parameter.param.Chain) + getSubStatus(parameter.param.Chain);

                    
                   
                    //New
                    _detail.IndirizzoEsteso = getValIndirizzoEsteso(parameter.param.Chain.Order);
                    _detail.RagioneSociale = getValRagioneSociale(parameter.param.Chain.Order);
                    _detail.CodTipoBollettino = getValCodiceTipoBollettino(parameter.param.Chain.Order);

                }
                return _detail;

            };

            var _internalMapRIT = function (parameter) {
                var _detail = {
                    'originalParam': parameter.param
                };
                //debugger;

                _detail.DescrIstitutoBeneficiario = '';
                _detail.CodiceFilialeBeneficiario = '';
                _detail.DescrIstitutoOrdinante = '';
                _detail.CodiceFilialeOrdinante = '';

                if (parameter.filiali != null) {
                    if (parameter.filiali.Creditore != null) {
                        _detail.DescrIstitutoOrdinante = parameter.filiali.Creditore.DescrizioneBanca;
                        _detail.CodiceFilialeOrdinante = parameter.filiali.Creditore.DescrizioneFiliale;
                    }
                    if (parameter.filiali.Debitore != null) {
                        _detail.DescrIstitutoBeneficiario = parameter.filiali.Debitore.DescrizioneBanca;
                        _detail.CodiceFilialeBeneficiario = parameter.filiali.Debitore.DescrizioneFiliale;
                    }
                }


                //_detail.DataEsecuzione = parameter.param.Chain.Order.DataEsecuzione;
                _detail.DataEsecuzione = _dataDisplayLogic(parameter.param.Chain.Order.DataEsecuzione, parameter.param.Chain.Status);
                //_detail.StatoDistinta = getStatus(parameter.param.Chain);
                //Per la gestione a video del substato commentato per ora...
                _detail.StatoDistinta = getStatus(parameter.param.Chain) + getSubStatus(parameter.param.Chain);
                _detail.Importo = _saldoDisplay(parameter.param.Chain.Importo);
                _detail.Divisa = parameter.param.Chain.Divisa;
                


                return _detail;
            };




            
            var _mapSpecificFieldsTypeDispo = function (parameter, dispoType) {   
                
                sdk.utils.log.debugMessage('map.template.inquirydispo: initial mapping');

                var toret = null;

                //eventuali fixed...
                switch (dispoType) {
                    case "IPA"://BONIFICO ISTANTANEO
                        toret = _internalMapIPA(parameter);
                        break;
                    case "BOLPOS"://BOLLETTINO POSTALE
                        toret = _internalMapBOLPOS(parameter);
                        break;
                    case "RIT"://RICARICA TELEFONICA
                        toret = _internalMapRIT(parameter);
                        break;
                    default:
                        sdk.utils.log.errorMessage('map.template.dispo: not exist type ' + parameter.internalTypeDispo);
                        break;
                }
                
                sdk.utils.log.debugMessage('map.template.inquirydispo: fixed dettagli');
                return toret;
                
            };
            //INTERNAL FUNCTION

            

            //PUBLIC FUNCTION
            var init = function (inputParam, arrTipoDispo, panel) {
                
                if (inputParam != null) {
                    if (inputParam.param != null) {
                        panel.html('');

                        var specificTypeTemplate = "";
                        var urlTemplate = "";
                        var idTemplate = "";

                        if (arrTipoDispo != null) {
                            //Mi aspetto un array di 1
                            specificTypeTemplate = arrTipoDispo[0].Key;
                            urlTemplate = arrTipoDispo[0].Value;
                            idTemplate = arrTipoDispo[0].Id;
                        }

                        if (urlTemplate != "" && specificTypeTemplate !="") {
                            var toretmapChain = _mapSpecificFieldsTypeDispo(inputParam, specificTypeTemplate);
                            var returnCallBack = function (isShow, messages) {
                                if (isShow) {
                                    panel.show();
                                }
                                else {
                                    //render messagg perchè errore
                                    sdk.utils.pubsub.send('detail.ultimedispo.showPanelError', messages);
                                }
                            };
                            

                            var initializeParam = {
                                "targetPanel": panel,
                                "objectToRender": toretmapChain,//inputParam,
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


                    }




                    

                    
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

