<div id="mainSection">
                        


<script type="text/javascript">

    $(function () {

        var localResources = {
            'exception':'Il servizio non &#232; al momento disponibile. Riprovare pi&#249; tardi.',
            'anfa.errorTitle.error': 'Errore',
            'anfa.dettDistinta.statoDistinta.0': 'Sconosciuta',
            'anfa.dettDistinta.statoDistinta.1': 'In modifica',
            'anfa.dettDistinta.statoDistinta.2': 'Da firmare',
            'anfa.dettDistinta.statoDistinta.3': 'Parzialmente firmata',
            'anfa.dettDistinta.statoDistinta.4': 'Firmata',
            'anfa.dettDistinta.statoDistinta.5': 'In valutazione filiale',
            'anfa.dettDistinta.statoDistinta.6': 'Anticipata',
            'anfa.dettDistinta.statoDistinta.7': 'Parzialmente anticipata',
            'anfa.dettDistinta.statoDistinta.8': 'Non anticipata',
            'anfa.dettDistinta.statoDistinta.9': 'Cancellata',
            'anfa.dettDistinta.statoDistinta.10': 'In valutazione filiale',

            'anfa.statoFattura.0': 'Sconosciuta',
            'anfa.statoFattura.1': 'Presentata',
            'anfa.statoFattura.2': 'Anticipata',
            'anfa.statoFattura.3': 'Non Anticipata',
            'anfa.statoFattura.4': 'Parzialmente Anticipata',

            'anfa.splitPayment.0': 'Sconosciuto',
            'anfa.splitPayment.1': 'SI',
            'anfa.splitPayment.2': 'NO',

            'anfa.cessionecredito.0': 'Sconosciuto',
            'anfa.cessionecredito.1': 'SI',
            'anfa.cessionecredito.2': 'NO',

            'anfa.tipoPagamento.0': 'Sconosciuto',
            'anfa.tipoPagamento.1': 'Bonifico',
            'anfa.tipoPagamento.2': 'Assegno',
            'anfa.tipoPagamento.3': 'DirectDebit',
            'anfa.tipoPagamento.4': 'Contante',
            'anfa.tipoPagamento.5': 'Altro',


            'anfa.dettDistinta.elencofatture.table.column.debitore':'Debitore',
            'anfa.dettDistinta.elencofatture.table.column.splitpayment':'Split Payment',
            'anfa.dettDistinta.elencofatture.table.column.imponibile':'Imponibile',
            'anfa.dettDistinta.elencofatture.table.column.numerofattura':'N. Fattura',
            'anfa.dettDistinta.elencofatture.table.column.dataemissione':'Emissione',
            'anfa.dettDistinta.elencofatture.table.column.datascadenza':'Scadenza',
            'anfa.dettDistinta.elencofatture.table.column.importo':'Totale Fattura',
            'anfa.dettDistinta.elencofatture.table.column.opera':'Opera',
            'anfa.distinta.percentuale.min1': 'La percentuale richiesta di anticipo della distinta deve essere maggiore di zero ',
            'anfa.distinta.percentuale.max100': 'La percentuale richiesta di anticipo della distinta deve essere massimo 100',
            'anfa.distinta.percentuale.notfound': 'Percentuale anticipo non valorizzata: il campo &#232; obbligatorio',
            'anfa.dettDistinta.elencofatture.opera.dettaglio':'Dettaglio fattura',
            'anfa.dettDistinta.elencofatture.opera.cancella':'Cancella fattura',
            'anfa.dettDistinta.elencofatture.opera.modifica':'Modifica fattura',

            'anfa.fattura.debitore.ragionesociale.val.notfound':'Ragione Sociale debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.cfpiva.val.notfound':'C.F./P.I. debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.cfpiva.val.notvalid':'Codice Fiscale / Partita IVA debitore non validi',
            'anfa.fattura.debitore.cfpiva.val.notvalidCF':'Codice Fiscale debitore non valido',
            'anfa.fattura.debitore.cfpiva.val.notvalidPIVA':'Partita IVA debitore non valida',
            'anfa.fattura.debitore.paese.val.notfound':'Stato debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.indirizzo.val.notfound':'Indirizzo debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.cap.val.notfound':'Cap debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.cap.val.5caratteri':'Cap debitore: il valore da inserire deve avere almeno 5 caratteri',
            'anfa.fattura.debitore.comune.val.notfound':'Comune debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.prov.val.notfound':'Prov. debitore: il campo &#232; obbligatorio',
            'anfa.fattura.debitore.prov.val.2caratteri':'Prov debitore: il valore da inserire deve avere almeno 2 caratteri',

            'anfa.fattura.emettitore.ragionesociale.val.notfound':'Ragione Sociale emittente : il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.cfpiva.val.notfound':'C.F./P.I. emittente: il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.cfpiva.val.notvalid':'Codice Fiscale / Partita IVA emittente non validi',
            'anfa.fattura.emettitore.cfpiva.val.notvalidCF':'Codice Fiscale emittente non valido',
            'anfa.fattura.emettitore.cfpiva.val.notvalidPIVA':'Partita IVA emittente non valida',
            'anfa.fattura.emettitore.paese.val.notfound':'Stato emittente: il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.indirizzo.val.notfound':'Indirizzo emittente : il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.cap.val.notfound':'Cap emittente: il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.cap.val.5caratteri':'Cap emittente: il valore da inserire deve avere almeno 5 caratteri',
            'anfa.fattura.emettitore.comune.val.notfound':'Comune emittente: il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.prov.val.notfound':'Prov. emittente: il campo &#232; obbligatorio',
            'anfa.fattura.emettitore.prov.val.2caratteri':'Prov emittente: il valore da inserire deve avere almeno 2 caratteri',

            'anfa.fattura.numerofattura.val.notfound': 'Numero Fattura: il campo &#232; obbligatorio',
            'anfa.fattura.numerofattura.val.maxlength': 'Numero Fattura: il campo accetta massimo 15 caratteri',
            'anfa.fattura.dataemissione.val.notfound':'Data emissione: il campo &#232; obbligatorio',
            'anfa.fattura.datascadenza.val.notfound':'Data scadenza: il campo &#232; obbligatorio',
            'anfa.fattura.importo.val.notfound': 'Totale fattura: il campo &#232; obbligatorio',
            'anfa.fattura.tipopagamento.val.notfound':'Modalit&#224; di pagamento: il campo &#232; obbligatorio',
            'anfa.fattura.splitpagamento.val.notfound':'Split Payment: il campo &#232; obbligatorio',
            'anfa.fattura.chkcessionecredito.val.notfound':'Cessione del credito: il campo &#232; obbligatorio',
            'anfa.fattura.dataemissione.val.notpostnow':'La data emissione non pu&#242; essere maggiore della data corrente',
            'anfa.fattura.datascadenza.val.notantnow':'La data scadenza non pu&#242; essere minore o uguale alla data corrente',
            'anfa.fattura.datascadenza.val.notantdataemissione':'La data di scadenza non pu&#242; essere minore della data di emissione della fattura',
            'anfa.fattura.dataemissione.val.limite':'La data di emissione pu&#242; essere retrodatata al massimo di 12 mesi rispetto alla data corrente',
            'anfa.fattura.datascadenza.val.limite':'La data di scadenza pu&#242; essere posticipata al massimo di 12 mesi rispetto alla data corrente',
            'anfa.fattura.chkSalvaAnagrafica.noStessoCodice':'Attenzione! Non &#232; possibile salvare contemporaneamente due anagrafiche relative allo stesso Codice Anagrafica',
            'anfa.fattura.sezioneEmittente.notCompleted':'Attenzione: tutti i campi della sezione Emittente Fatture devono essere compilati!',
            'anfa.fattura.importo.val.notzero': 'Importo: il valore inserito deve essere maggiore di zero',
            'anfa.fattura.importo.val.formatdecimali':'Importo: il valore inserito contiene pi&#249; di due cifre decimali',
            'anfa.fattura.importo.val.maxval':'Importo: il valore inserito non deve essere superiore a 999.999.999.999,00',
            'anfa.fattura.fatturaidentifier.nokey':'Identificativo fattura non valorizzato',
            'anfa.fattura.chkIbanCredito.empty':'Iban creditore: il campo &#232; obbligatorio',
            'anfa.fattura.chkIbanCredito.checkiban': 'Iban creditore: il campo &#232; errato',
            'anfa.fattura.chkIbanCredito.abi': 'Iban creditore: codice abi non coerente',
            'anfa.fattura.imponibile.val.notfound': 'Imponibile: il campo &#232; obbligatorio',
            'anfa.fattura.imponibile.val.notzero': 'Imponibile: il valore inserito deve essere maggiore di zero',
            'anfa.fattura.imponibile.val.maxval':'Imponibile: il valore inserito non deve essere superiore a 999.999.999.999,00',
            'anfa.fattura.imponibile.val.formatdecimali': 'Imponibile: il valore inserito contiene pi&#249; di due cifre decimali',
            'anfa.fattura.imponibile.val.maggioreTotale': 'Imponibile: il valore inserito &#232; maggiore del Totale fattura',
            'anfa.fattura.imponibile.val.splitpayment.minoreTotale': 'Imponibile: il valore inserito deve essere minore del Totale fattura',

            'anfa.dataentry.distinta.nonvalorizzata':'System Error - Distinta non valorizzata',
            'anfa.dataentry.distinta.fattura.nonvalorizzata':'System Error - Fattura non valorizzata',
            'anfa.dataentry.distinta.fattura.nonvalida':'System Error - Fattura non valida',
            'anfa.dataentry.distinta.rapporto.nonvalorizzato':'Per poter accedere alla funzionalit&#224; di ricerca &#232; necessario selezionare prima un rapporto.',
            'anfa.dataentry.distinta.rapporto.nonabilitato':'Rapporto non abilitato',
            'anfa.dataentry.distinta.azienda.nonabilitata':'Azienda non abilitata',
            'anfa.distinta.distintakeynonvalorizzato':'Identificativo distinta non valorizzato',
            'anfa.elencoDistinte.table.column.data':'Data',
            'anfa.elencoDistinte.table.column.importo':'Totale distinta',
            'anfa.elencoDistinte.table.column.ragionesociale':'Ragione sociale',
            'anfa.elencoDistinte.table.column.opera':'Opera',
            'anfa.elencoDistinte.table.column.numerofatture':'N. fatture',
            'anfa.elencoDistinte.table.column.statodistinta':'Stato',
            'anfa.elencoDistinte.opera.dettaglio':'Dettaglio',
            'anfa.elencoDistinte.opera.cancella':'Cancella',
            'anfa.elencoDistinte.opera.genera': 'Crea',
            'anfa.elencoDistinte.opera.firma': 'Firma',
            'anfa.elencoDistinte.opera.modifica': 'Modifica',

            'anfa.esiti.tbl.col.data': 'Data',
            'anfa.esiti.tbl.col.numerofatture': 'N. fatture',
            'anfa.esiti.tbl.col.totaleDistinta': 'Totale distinta',
            'anfa.esiti.tbl.col.totaleAnticipato':'Totale anticipato',
            'anfa.esiti.tbl.col.dataAnticipo': 'Data accredito',
            'anfa.esiti.tbl.col.stato': 'Stato',
            'anfa.esiti.tbl.col.richiesta': 'Richiesta',
            'anfa.esiti.tbl.col.contabile': 'Contabile',

            'anfa.elencoEsiti.opera.dettaglio': 'Dettaglio',
            'anfa.elencoEsiti.opera.scaricoProposta': 'Proposta',
            'anfa.elencoEsiti.opera.scaricoAccettazione': 'Scarica Accettazione',


            'sdk.popup.button.chiudi': 'Annulla', //se voglio reimpostare il title del bottone Chiudi del popup
            'anfa.distinta.creazioneoknonfirmatario': 'Distinta creata correttamente.',
            'anfa.distinta.creazioneoknonfirmatario1': 'Per procedere con l&#39;invio &#232; necessario Firmare la distinta tramite la funzione &quot;Autorizza Distinte Anticipo Fatture&quot; presente nel men&#249; &quot;Dati e disposizioni - Gestione Distinte&quot;.'
        };
        sdk.resource.set(localResources);


    });
</script>
<div id="99806f8264004e8e8acac5156df49149_1">

    

<div id="dialogpopup" style="display: none"></div>

<script type="text/javascript">


    // data-com di default
    // data-com="chunk"

    // se jTaget == null
    // --> target = mainSection


    var _mainContentSelector = null;

    $(function () {
        _mainContentSelector = $('#mainSection');

    });


    var communication = {
        applyHtmlTo: function (action, jTarget, objectToSend) {
            if (!jTarget) {
                jTarget = _mainContentSelector;
            }
            return communicationLoadTarget(action, jTarget, objectToSend);
        }

    };

    function communicationLoadTargetOnParent(action, jTarget, objectToSend) {
        communicationLoadTarget(action, jTarget.parent(), objectToSend);
    }


    function getCommunicationEngineOptions(jTarget) {
        if (jTarget != null) {

            var widgetContainer = (jTarget) ? jTarget.closest('.widget-container') : null;
            if (widgetContainer.length > 0) {
                return widgetPoint(widgetContainer);
            } else {
                return chunkPoint(jTarget);
            }
        } else {
            return null;
        }
    }


    function widgetPoint(jTarget) {

        return {
            connect: {
                successHandler: function (commObj, data, jsonResponse, warningObject) {
                    if (!jsonResponse && data) {
                        $('.web-widget-content', jTarget).html(data);
                        return;
                    }
                },
                errorHandler: function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                    var divError = jqXHR.responseText;
                    $('.web-widget-content', jTarget).html(divError);

                    return;
                },
                headers: { 'X-JsComm': 'widget' }
            }
        };
    }

    function chunkPoint(jTarget) {
        return {

            connect: {
                successHandler: function (commObj, data, jsonResponse, warningObject) {
                    jTarget.html(data);
                },
                errorHandler: function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                    var divError = jqXHR.responseText.replace(/(\r\n|\n|\r)/gm, "");
                    $(jTarget).html(divError);
                },
                headers: { 'X-JsComm': 'partial' }
            }
        };
    }


    function communicationLoadTargetWithErrorHandlerOnParent(action, jTarget, objectToSend, errorHandler) {
        communicationLoadTargetWithErrorHandler(action, jTarget.parent(), objectToSend, errorHandler);
    }
    function communicationLoadTargetWithErrorHandler(action, jTarget, objectToSend, errorHandler) {
        errorHandler = errorHandler || $.noop;
        var parameters = {
            url: action,
            data: objectToSend,
            errorHandler: errorHandler

        };
        var engineOptions = getCommunicationEngineOptions(jTarget);
        if (engineOptions != null && engineOptions.connect != null) {
            engineOptions.connect.type = 'POST';
        }
        $(this).enginecommunication(engineOptions).enginecommunication('connectjson', parameters);
    }

    function communicationLoadTarget(action, jTarget, objectToSend,errorHandler) {
        errorHandler = errorHandler || $.noop;
        var parameters = {
            url: action,
            data: objectToSend,
            errorHandler: errorHandler
        };
        var engineOptions = getCommunicationEngineOptions(jTarget);
        if (engineOptions != null && engineOptions.connect != null) {
            engineOptions.connect.type = 'POST';
        }
        $(this).enginecommunication(engineOptions).enginecommunication('connectjson', parameters);
    }

    function communicationLoadTargetTest(action, jTarget, objectToSend) {
        $(this).enginecommunication().enginecommunication("connectjson",
        {
            url: action,
            data: objectToSend,
            successHandler: function (commObj, data, jsonResponse, warningObject) {
                jTarget.html(data);
            },
            errorHandler: function (commObj, jqXHR, textStatus, errorThrown, errorObject) {
                // debugger;
                alert(errorThrown);
            }
        });
        }

    

    function onError(hasErrorMessage, errorMessage, jqXHR, data, textStatus, errorThrown) {

        try {
            var errorHeader = jqXHR.getResponseHeader("X-Web-Error");

            if (!errorHeader) {
                return false;
            }

            errorHeader = $.parseJSON(errorHeader);
            var content = errorHeader.Content;
            var targetType = errorHeader.TargetType;
            var actionType = errorHeader.ActionType;

            // Self
            if (targetType == 0) {
                switch (actionType) {
                    // Show
                case 0:
                    $('#dialogerror').html(content);
                    $('#dialogerror').dialog("open");
                    break;

                // Redirect
                default:
                    $('<iframe />', {
                            id: 'errorPanel',
                            src: content
                        })
                        .prependTo("#dialogerror");
                    $('#dialogerror').dialog("open");
                }
            }

            // Document
            if (targetType == 1) {

                switch (actionType) {
                    // Show
                case 0:
                    $('<div />', {
                            id: 'errorPanel',
                            text: content
                        })
                        .prependTo("body");
                    break;
                // Redirect
                default:
                    document.location.href = content;
                }
            }

            // Alert
            if (targetType == 2) {

                switch (actionType) {
                    // Show
                case 0:
                    alert(content);
                    break;

                }
            }

            return true;
        } catch (err) {
            alert(err);
            // DAVID metti a posto
        }
        return true;

    }


    

    /*************************************************************

    TO REVIEW

    *************************************************************/

</script>


        <div>
            
<div id="99806f8264004e8e8acac5156df49149_2" style="display: none;">
    <div id="errorPanel" class="col-xs-12 messagePanel error" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Errore</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>

    <div id="warnPanel" class="col-xs-12 messagePanel waiting" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Attenzione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>
    <div id="infoPanel" class="col-xs-12 messagePanel alert" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Attenzione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>
    <div id="successPanel" class="col-xs-12 messagePanel success" style="display: none; margin-bottom: 0; margin-top: 0;">
        <h3 class="titleSection">Esito operazione</h3>
        <p>
            </p><ul id="message"></ul>
        <p></p>
    </div>


    <script type="text/javascript">
        $(function() {
            var me = $('#99806f8264004e8e8acac5156df49149_2');

            var errorPanel = $('#errorPanel', me);
            var warnPanel = $('#warnPanel', me);
            var infoPanel = $('#infoPanel', me);
            var successPanel = $('#successPanel', me);


            var hideAll = function() {
                errorPanel.hide();
                warnPanel.hide();
                infoPanel.hide();
                successPanel.hide();
            };

            var getTargetPanel = function(errorObject) {
                var toRet = errorPanel;
                // in base a cosa capisco quale pannello devo aprire o chiudere ?
                if (errorObject && errorObject.Messages) {
                    
                    switch (errorObject.Messages[0].Severity) {
                        case 1:
                            toRet = infoPanel;
                            break;
                        case 2:
                            toRet = warnPanel;
                            break;
                        case 3:
                            toRet = errorPanel;
                            break;
                        case 4:
                            toRet = successPanel;
                            break;
                        default:
                            toRet = errorPanel;
                    }
                }
                // in base a cosa capisco quale pannello devo aprire o chiudere ?
                return toRet;
            };

            var messageBuilder = function (errorObject) {
                if (!errorObject)
                    return '';
                var resource = errorObject.ResourceKey || errorObject.ErrorMessageRes || errorObject.MessageRes;
                var message = errorObject.Message || errorObject.ErrorMessage;
                if (resource) {
                    var toRet = sdk.resource.get(resource);
                    if (toRet.formatUnicorn && errorObject.ResourceFormatParameters) {
                        toRet = toRet.formatUnicorn(errorObject.ResourceFormatParameters);
                    }
                    return toRet;
                } else {
                    return message;
                }

            };

            var showMessage = function (errorObject) {

                hideAll();
                if (errorObject && errorObject.Messages) {
                    var targetPanel = getTargetPanel(errorObject);
                    var strMsg = '';
                    $.each(errorObject.Messages,
                        function (i, data) {
                            strMsg += '<li>' + messageBuilder(data) + '</li>';
                        });
                    $('#message', targetPanel).html(strMsg);
                    targetPanel.show();
                    me.show();
                    window.location.href = '#99806f8264004e8e8acac5156df49149_2';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#99806f8264004e8e8acac5156df49149_2';
                }
            };

            var show = function() {
                me.show();
            };

            var hide = function() {
                me.hide();
            };


            hide();

            sdk.utils.pubsub.register('messagePanel.renderError', showMessage);
            sdk.utils.pubsub.register('messagePanel.hide', hide);
            sdk.utils.pubsub.register('messagePanel.show', show);


        });
    </script>
</div>


            <div id="progess" style="display: none;">
                <div id="itemLoading" style="display: none;">
                    <span id="">Caricamento distinta ...</span>
                </div>
                <div id="signerLoading" style="display: none;">
                    <span id="">Ricerca Firmatari ...</span>
                </div>
                <div id="dossierLoading" style="display: none;">
                    <span id="">Creazione documento ...</span>
                </div>

            </div>

            <div id="distinta" style="">
                <div class="riquadro clearfix">
                    <div class="pager clearfix pull-right">
                        <div class="circle_line">&nbsp;</div>
                        <div class="circle current_page">&nbsp;</div>
                        <div class="circle current_page">&nbsp;</div>
                        <div class="circle current_page">&nbsp;</div>
                        <div class="circle ">&nbsp;</div>
                    </div>
                    <div class="clearfix pageTitle">
    <div class="flag apriPosizione">&nbsp;</div>
    <h1>Anticipo fatture: autorizzazione</h1>
</div>


                    <div class="row">
    <div class="col-xs-6 white-block" id="subArea-contoAppoggio">
        <div class="col-xs-12">
            <div class="text-center">
                <h1>
                    Ordinante
                </h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="col-xs-5">
                Intestato a
            </div>
            <div class="col-xs-7">
                <label class="control-label" id="areaordinante-intestatoa" style="padding:0">ARCHIMEDE SERVIZI S.R.L.</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-5">
                Rapporto di anticipo
            </div>
            <div class="col-xs-7">
                <label class="control-label" id="areaordinante-rappdianticipo" style="padding:0">CC ANTICIPI INFRAGRUPPO 0181000002694572             </label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-5">
                Banca
            </div>
            <div class="col-xs-7">
                <label class="control-label" id="areaordinante-banca" style="padding:0">05034 - BANCO BPM S.P.A.</label>
            </div>
        </div>
        

    </div>
    <div class="col-xs-6 white-block" id="subArea-pianiAmmortamento">
        <div class="col-xs-12">
            <div class="text-center">
                <h1>
                    Dati Distinta
                </h1>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-12">
                <div><strong>Richiesta di anticipo fattura </strong></div>
            </div>
        </div>
        <div class="col-xs-12" style="padding-top: 5px;">
            <div class="col-xs-6">
                Percentuale richiesta anticipo
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-percentualeanticipo" style="padding:0">10</label><span id="areadatidistinta-percentuale">%</span>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                Importo totale richiesto
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-importototalerichiesto" style="padding:0">12,00 EUR</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                N. Fatture
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-numerofatture" style="padding:0">1</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                Stato
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-statodistinta" style="padding:0">Da firmare</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                Data creazione
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-dtcreazione" style="padding:0">10/10/2019</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                Totale distinta
            </div>
            <div class="col-xs-6">
                <label class="control-label" id="areadatidistinta-importototale" style="padding:0">120,00 EUR</label>
            </div>
        </div>

    </div>
</div>


                </div>

            </div>

            <div id="signPanel" style="">
<div>
<div>
    

<div id="9bdad6df3c994994a972f3240f582bab_4">

    <div class="riquadro clearfix">
        <div class="clearfix pageTitle">
    <div class="flag struttureLibere">&nbsp;</div>
    <h1>Firma documento</h1>
</div>



        <div class="col-xs-12 hidden-print">
            <div class="contentPagina">
                <div style="text-align: center;"></div>
            </div>
            <div>&nbsp;</div>
        </div>

        <div id="messagePanelAlert" style="display: none;">
            









        </div>

        
        <div class="form-horizontal">
            <div id="documentoPDF" style="margin-bottom:10px;"><iframe scrolling="yes" allowfullscreen="" webkitallowfullscreen="" id="embedId" src="./layout/template_old/datiedisposizioni/gestione_distinte_iframe_autorizza.php" style="height: 400px; width: 100%"></iframe></div>
        </div>

        <div>


<div id="9bdad6df3c994994a972f3240f582bab_6">

    <div class="section clearfix" style="margin-top: 0px;">
        <h3 class="titleSection">Conferma contratto</h3>
        <div>&nbsp;</div>


     

    </div>
    
    <script>
        var downloadFileName = "Distinta AF 2019_10_10 12.00";
    </script>

</div>        </div>

        <div class="section" style="margin-top: 0px;">
            <div class="col-md-7 section" style="padding-top: 1px; margin-top: 0px;">
                <div class="col-md-1"></div>
                <div class="col-md-5" style="padding-top: 8px">
                    <input class="col-md-12" type="password" id="field-pin" value="">
                </div>
                <span class="col-md-6">Inserisci la stessa Password che utilizzi per accedere a YouBusiness Web</span>
            </div>

            
            <div class="col-md-5" style="background-color: #f7fcf7; padding-top: 2px;">
                <span class="col-md-4">
                    
                    <img class="col-md-12" src="/Youbiz.Sdk.Web/Contents/00000/it-IT/Images/pp/dispositivo_2.gif?v=148" style="width: 110px; height: 43px">
                </span>
                <div class="col-md-6" style="padding-top: 8px">
                    <input type="password" class="col-md-12 form-control" id="field-otp" maxlength="6" readonly="readonly" style="cursor: pointer; margin-left: 20px; width: 70px;" value="" tm_iscreated="1" data-toggle="popover" data-placement="bottom" data-original-title="" title="" aria-describedby="popover556473"><div class="popover fade bottom in" role="tooltip" id="popover556473" style="top: 37px; left: 0.5px; display: block;"><div class="arrow" style="left: 50%;"></div><h3 class="popover-title" style="display: none;"></h3><div class="popover-content"><div id="tm_divPP_field-otp"><table>                             <tbody><tr>                                 <td align="left">                                     <table style="border-collapse: separate !important; border-spacing: 10px !important;padding: 1px !important;">                                         <tbody><tr>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-250px');" onmouseout="javascript:$(this).css('left','-0px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '0'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -25px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-275px');" onmouseout="javascript:$(this).css('left','-25px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '1'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -50px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-300px');" onmouseout="javascript:$(this).css('left','-50px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '2'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                         </tr>                                         <tr>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px; position: absolute; display: block; top: 0px; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-325px');" onmouseout="javascript:$(this).css('left','-75px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '3'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -100px; position: absolute; display: block; top: 0px; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-350px');" onmouseout="javascript:$(this).css('left','-100px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '4'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -125px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-375px');" onmouseout="javascript:$(this).css('left','-125px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '5'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                         </tr>                                         <tr>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -150px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-400px');" onmouseout="javascript:$(this).css('left','-150px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '6'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -175px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-425px');" onmouseout="javascript:$(this).css('left','-175px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '7'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -200px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-450px');" onmouseout="javascript:$(this).css('left','-200px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '8'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                         </tr>                                         <tr>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -0px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-25px');" onmouseout="javascript:$(this).css('left','-0px');" onmousedown="javascript:cntrlJQuery=$('#' +'field-otp').attr('value', '');" src="/Youbiz.Sdk.Web/Contents/00000/it-IT/images/pp/imgPPGeneric2.jpg"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -225px;position: absolute; display: block; top: 0; width: 500px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-475px');" onmouseout="javascript:$(this).css('left','-225px');" onmousedown="javascript:var cntrlJQuery=$('#' +'field-otp');var newValue= '' + cntrlJQuery.attr('value') + '9'; cntrlJQuery.attr('value', newValue);if (newValue.length >= 6) $('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/_wk/PinPad?d=1570702261328"></div></td>                                             <td align="center" valign="middle"><div style="width: 25px;height: 25px;position: relative; overflow: hidden"><img style="left: -75px;position: absolute; display: block; top: 0; width: 150px; height: 25px; cursor: pointer;" onmouseover="javascript:$(this).css('left','-100px');" onmouseout="javascript:$(this).css('left','-75px');" onmousedown="javascript:$('[data-toggle=\'popover\']').popover('hide');" src="/Youbiz.Sdk.Web/Contents/00000/it-IT/images/pp/imgPPGeneric2.jpg"></div></td>                                         </tr>                                     </tbody></table>                                 </td>                             </tr>                         </tbody></table></div></div></div>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="section col-md-12" style="margin-top: 0px;">&nbsp;</div>
            <div class="section col-md-12" style="margin-top: 0px;">&nbsp;</div>
        </div>

    </div>

    <div class="pull-right margin-bottom20">
        <button class="btn btn-primary" id="btnConferma" type="button">CONFERMA</button>
    </div>

</div>


<script type="text/javascript">
    $(function () {
        var jPanel = $('#9bdad6df3c994994a972f3240f582bab_4');

        

        initPinpad(
        {
            inputPanelName: 'field-otp',
            settings: {"SecureType":2,"ApplicationPath":"/Youbiz.Sdk.Web","WorkflowHandlerUri":"/Youbiz.Sdk.Web/_wk/DigSigWorkflow/Index","WorkflowHandlerChunkUri":"/Youbiz.Sdk.Web/_wk/DigSigWorkflow/Chunk","CartMode":"10,0,10,26"}
        });

        $('#btnConferma').click(
            function () {
                //TODO:David aggiunta gestione disable click (evitare doppio click)
                $(this).addClass('disabled');
                var initialObject = {"Pin":"","Otp":"","PuntiFirma":[]};
                var objetToSend = $.extend({}, initialObject);
                var allCheckBox = $('input.puntofirma', jPanel);
                if ($(objetToSend.PuntiFirma).length > 0) {
                    $.each(objetToSend.PuntiFirma, function(index, item) {
                        var pfName = item.Id;
                        $.each(allCheckBox, function(idCheckBox, itemCheckBox) {
                            var JCheck = $(itemCheckBox);
                            if (JCheck.data('puntofirma') == pfName) {
                                item.Accepted = JCheck.prop('checked');
                                return false;
                            }
                            return true;
                        });
                    });
                }
                objetToSend.Otp = $('#field-otp', jPanel).val();
                objetToSend.Pin = $('#field-pin', jPanel).val();

                communicationLoadTargetOnParent('/Youbiz.Sdk.Web/_wk/DigSigWorkflow/DoSign', jPanel, objetToSend);
            });

        $('.section').css('margin-top', '0');

        var currentDiv = $('#9bdad6df3c994994a972f3240f582bab_4');
        var panelAlert = $('#messagePanelAlert', currentDiv);
        panelAlert.hide();

        if (0 > 0) {
            panelAlert.show();
        }

        var allCheckBoxItem = $('input.puntofirma', jPanel);
        $.each(allCheckBoxItem, function(idCheckBox, itemCheckBox) {
            var jCheckItem = $(itemCheckBox);
            jCheckItem.change(function () {
                panelAlert.hide();
                //if (this.checked) {
                //    panelAlert.hide();
                //}
            });
        });

        // TODO: Rendere compabile con gli eventi
        try {
            sdk.utils.pubsub.send('digsig.dosign.shown');

        } catch (errevent){}


    });
</script>

<script type="text/javascript">
    $(function() {

        $(window).scrollTop(0);

        var isInstalledAcrobatPlugin = function () {

            var isInstalled = false;
            var version = null;
            if ("ActiveXObject" in window) {
                var control = null;

                try {
                    // AcroPDF.PDF is used by version 7 and later
                    control = new ActiveXObject('AcroPDF.PDF');
                } catch (e) {
                    // Do nothing
                }

                if (!control) {
                    try {
                        // PDF.PdfCtrl is used by version 6 and earlier
                        control = new ActiveXObject('PDF.PdfCtrl');
                    } catch (e) {
                        return false;
                    }
                }

                if (control) {
                    isInstalled = true;
                    version = control.GetVersions().split(',');
                    version = version[0].split('=');
                    version = parseFloat(version[1]);
                }
            }
            else {
                // Check navigator.plugins for "Adobe Acrobat" or "Adobe PDF Plug-in"*
                if (navigator && navigator.mimeTypes) {
                    if ("application/pdf" in navigator.mimeTypes) {
                        isInstalled = true;
                    }
                }
            }
            return isInstalled;
        };

        var isMobileBrowser = function() {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                return true;
            }
            return false;
        };

        var pageLoad = function(pdfUrl, pdfUrlVersion) {
            var div = $("#documentoPDF");

            // if (isMobileBrowser() || !isInstalledAcrobatPlugin()) {
            if (true) {
                //var pdfPlugin = "/Youbiz.Sdk.Web/Contents/00000/it-IT/Js/pdfJs/web/viewer.html?v=148&file=" + pdfUrl + "&" + pdfUrlVersion;

                


                
                var pdfUri = "?" + pdfUrlVersion;
                if (downloadFileName) {
                    pdfUri = pdfUri + "&filename" + "=" + downloadFileName + ".pdf";
                }
                pdfUri = encodeURIComponent(pdfUri);

                var pdfPlugin = "/Youbiz.Sdk.Web/Contents/00000/it-IT/Js/pdfJs/web/viewer.html?v=148&file=" + pdfUrl + pdfUri;


                var iframe = $("<iframe scrolling=\"yes\" allowfullscreen webkitallowfullscreen></iframe>");
                iframe.attr({
                    "id": "embedId",
                    "src": pdfPlugin,
                    "style": "height: 400px; width: 100%" /* width: 700px */
                });

                div.prepend(iframe);
            } else {
                var embed = $("<embed></embed>");
                //embed.attr({
                //    "id" : "embedId",
                //    "src" : "/WEBHT/investimenti/dossierFDRPdf",
                //    "style" : "width:100%; height:500px; border: 1px solid #666"
                //});

                embed.attr({
                    "id" : "embedId",
                    "src" : pdfUrl + "?" + pdfUrlVersion,
                    "style" : "border: 1px solid rgb(102, 102, 102); border-image: none; width: 100%; height: 500px;",
                    "type" : "application/pdf"
                });
                div.prepend(embed);
            }
        };

        var urlToDownload = '/Youbiz.Sdk.Web/_wk/DigSigWorkflow/GetDocumentToBeSigned';
        pageLoad(urlToDownload, 'version=9bdad6df3c994994a972f3240f582bab_5');

    });

</script>

</div></div>
</div>




            <script type="text/javascript">
                function htmlEncode(value) {
                    return $('<div/>').text(value).html();
                }

                $(function () {

                        var me = $('#99806f8264004e8e8acac5156df49149_1');

                    var distintaPanel = $('#distinta',me);
                    var progressPanel = $('#progess',me);
                    var signPanel = $('#signPanel',me);

                    
                    var urlGetDistinta = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/ReadHead";

                        var urlGetSigners = "/Youbiz.Sdk.Web/AnFa/DigSig/GetSignersSlots";
                        var beginProcess = "/Youbiz.Sdk.Web/AnFa/DigSig/BeginProcess";
                        var identifier = {"Crypted":"DTst6ORt0ocBteuWTl3oYGnyYwV7mLHu9w1JAValyiYxs955ou1TMj+Od/pUyGJXtyeULPVUvOCSAjh+SrgXijJfQUF9yajvqPIbaeZ3o4T33H5z4WkYz8Dbs+1l50IFAM8nsyKvHaxVz2Imt82zjg=="};

                        var currentDistinta = {};

                        var hideProgressPanel = function () {
                            $('#itemLoading', progressPanel).hide();
                            $('#signerLoading', progressPanel).hide();
                            $('#dossierLoading', progressPanel).hide();
                        }


                        var setProgress = function(panelName)
                        {
                            $('#itemLoading', progressPanel).hide();
                            $('#signerLoading', progressPanel).hide();
                            $('#dossierLoading', progressPanel).hide();
                            if (panelName) {
                                $('#' + panelName, progressPanel).show();
                                progressPanel.show();
                            } else {
                                progressPanel.hide();
                            }


                        }

                        var _saldoDisplay = function (datatmp) {
                            if (datatmp) {
                                return sdk.utils.text.formatAmmountDecimal(datatmp);
                            }
                            return "0,00";
                        }

                        var signPanelHide = function () {
                            distintaPanel.hide();
                            sdk.utils.log.debugMessage("distintaPanel.hide()");
                        }
                        var signPanelShown = function () {
                            sdk.utils.log.debugMessage("distintaPanel.show()");
                            $('#areaordinante-intestatoa', me).html("");
                            $('#areaordinante-rappdianticipo', me).html("");
                            $('#areaordinante-banca', me).html("");
                            $('#areaordinante-filiale', me).html("");
                            $('#areadatidistinta-numerofatture', me).html("");
                            $('#areadatidistinta-importototale', me).html("");
                            $('#areadatidistinta-statodistinta', me).html("");
                            $('#areadatidistinta-dtcreazione', me).html("");
                            $('#areadatidistinta-importototalerichiesto', me).html("");
                            $('#areadatidistinta-percentualeanticipo', me).html("");

                            if (currentDistinta) {
                                $('#areaordinante-intestatoa', me).html(currentDistinta.Rapporto.DescrizioneAzienda ? currentDistinta.Rapporto.DescrizioneAzienda : '');
                                $('#areaordinante-rappdianticipo', me).html(currentDistinta.Rapporto.DescrizioneRapporto ? currentDistinta.Rapporto.DescrizioneRapporto : '');
                                $('#areaordinante-banca', me).html(
                                    //currentDistinta.Rapporto.CodiceAbi ? currentDistinta.Rapporto.CodiceAbi : ''
                                    (currentDistinta.Rapporto.CodiceAbi ? currentDistinta.Rapporto.CodiceAbi : '') +
                                    (currentDistinta.Rapporto.DescrizioneIstituto ? ' - ' + currentDistinta.Rapporto.DescrizioneIstituto : '')
                                );
                                $('#areaordinante-filiale', me).html();

                                $('#areadatidistinta-numerofatture', me).html((currentDistinta.NumeroFatture == null ? '' : currentDistinta.NumeroFatture));
                                $('#areadatidistinta-importototale', me).html(_saldoDisplay(currentDistinta.ImportoTotale) + ' ' + currentDistinta.Divisa );
                                $('#areadatidistinta-statodistinta', me).html(sdk.resource.get('anfa.dettDistinta.statoDistinta.' + currentDistinta.StatoDistinta));
                                $('#areadatidistinta-dtcreazione', me).html((currentDistinta.DataCreazioneUtc == null ? '' : sdk.utils.text.formatDateTime(moment(currentDistinta.DataCreazioneUtc).local(), 'DD/MM/YYYY')));
                                //$('#areadatidistinta-importototalerichiesto', me).html(sdk.utils.text.formatAmmountDecimal(currentDistinta.ImportoTotaleRichiesto, '0,00 ' + currentDistinta.Divisa, currentDistinta.Divisa));
                                //$('#areadatidistinta-percentualeanticipo', me).html((currentDistinta.PercentualeRichiesto == null ? '' : currentDistinta.PercentualeRichiesto));
                                if (currentDistinta.Origin && currentDistinta.Origin == 1) {
                                    $('#areadatidistinta-percentualeanticipo', me).html(" - ");
                                    $('#areadatidistinta-importototalerichiesto', me).html(" - ");
                                    $('#areadatidistinta-percentuale', me).html("");
                                } else {
                                    $('#areadatidistinta-percentualeanticipo', me).html((currentDistinta.PercentualeRichiesto == null ? '' : currentDistinta.PercentualeRichiesto));
                                    $('#areadatidistinta-importototalerichiesto', me).html(sdk.utils.text.formatAmmountDecimal(currentDistinta.ImportoTotaleRichiesto, ' ' + currentDistinta.Divisa, currentDistinta.Divisa));
                                }

                            }

                            distintaPanel.show();
                        }

                        var signWorkflow = function(cartInfo) {
                            setProgress();
                            signPanel.show();
                            sdk.net.loadTarget(signPanel, cartInfo.WorkflowHandlerChunkUri, null);
                        }



                        var setSigner = function(slotName) {
                            setProgress('dossierLoading');
                            sdk.net.json(
                                beginProcess,
                                {
                                    distintaIdentifier: identifier,
                                    slotName: slotName
                                },
                                {
                                    successHandler: function(caller, data, jsonResponse, warningObject) {
                                        signWorkflow(jsonResponse);
                                    },

                                    errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                                        hideProgressPanel();
                                        sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                    }
                                });
                        }

                        var getSigners = function () {
                            setProgress('signerLoading');
                            sdk.net.json(urlGetSigners,
                                identifier,
                                {
                                    successHandler: function(caller, data, jsonResponse, warningObject) {
                                        if (jsonResponse && jsonResponse.length > 0) {
                                            setSigner(jsonResponse[0].Name);
                                        } else {
                                            sdk.utils.pubsub.send('messagePanel.renderError',
                                                { Messages: [{ Message: 'Non ci sono slot di firma ...' }] });
                                        }

                                    },

                                    errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                                        hideProgressPanel();
                                        sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                    }
                                });
                        }

                        var getDistinta = function () {
                            setProgress('itemLoading');
                            sdk.net.json(urlGetDistinta,
                                identifier,
                                {
                                    successHandler: function (caller, data, jsonResponse, warningObject) {
                                        currentDistinta = jsonResponse;

                                        if (currentDistinta.StatoDistinta !== 2) {
                                            hideProgressPanel();
                                            sdk.utils.pubsub.send('messagePanel.renderError', {Messages: [{ErrorMessage:"Stato distinta non atteso. Deve essere in stato Generata."}]});
                                        } else {
                                            getSigners();
                                        }


                                    },

                                    errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                                        hideProgressPanel();
                                        sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                    }
                                });
                        }


                        //REGISTER
                        sdk.utils.pubsub.register('digsig.dosign.shown', signPanelShown);
                        sdk.utils.pubsub.register('digsig.dosign.hide', signPanelHide);
                        //REGISTER


                        getDistinta();
                    });
            </script>

        </div>
</div>
                    </div>