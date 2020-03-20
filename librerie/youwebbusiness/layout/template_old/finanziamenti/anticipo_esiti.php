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

    <div id="88876c31bdba407f92489205ce32f511_1" style="">

        <div id="esitoMain">

            <div class="riquadro clearfix">
                <div class="clearfix">
                    <div class="flag riepilogo">&nbsp;</div>
                    <h1>Esiti Richieste Anticipo Fattura</h1>
                </div>


                
<div id="88876c31bdba407f92489205ce32f511_2" style="display: none;">
   

    <script type="text/javascript">
        $(function() {
            var me = $('#88876c31bdba407f92489205ce32f511_2');

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
                    window.location.href = '#88876c31bdba407f92489205ce32f511_2';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#88876c31bdba407f92489205ce32f511_2';
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


                <div class="section clearfix">
                    <h3 class="titleSection">Rapporto Selezionato</h3>
                    
                    

<div id="88876c31bdba407f92489205ce32f511_3" style="">
    
    <div class="tabellaSelezioneCC">
        <div id="panelMessageRapporti" class="CCselezionato clearfix" style="min-height: 80px; padding-top: 30px; display: none;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 msgInfo">
                <span class="col-md-6" id="msgAction">Seleziona Rapporto</span>
                <a id="SelettoreRapportiIcon" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active"></a>
            </div>
        </div>

        <div id="selezioneRapportoSingolo" class="CCselezionato clearfix" style="display: block;">
            <input name="Key" id="Key" type="hidden" value="">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <span class="col-md-3 ">Intestato a&nbsp;</span>
                <span id="intestazione" class="col-md-8 intestazione">ARCHIMEDE SERVIZI S.R.L.</span>
                <span class="col-md-3 ">Banca&nbsp;</span>
                <span id="agenzia" class="col-md-8 ABI">05034 - BANCO BPM S.P.A.</span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <span id="conto" class="col-md-3">Rapporto&nbsp;</span>
                <span id="numero" class="col-md-8 numero">CC ANTICIPI INFRAGRUPPO 0181000002694572             </span>

                <span class="col-md-3">IBAN&nbsp;</span>
                <span id="iban" class="col-md-8 CAB">IT11I0503459791000000000399</span>

            </div>
            <a id="SelettoreRapportiIconSelect" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active"></a>
        </div>

        <div class="table-responsive tabSelezioneCC" style="display: none;">
            <!--tabSelezioneRapporto-->
            <div class="dataTables_wrapper">

                <div id="itemSelectorTable_wrapper" class="dataTables_wrapper no-footer"><table id="itemSelectorTable" class="table table-striped no-footer dataTable" role="grid" aria-describedby="itemSelectorTable_info">
                    <tbody><tr tmindex="0" role="row" class="odd selectedRow"><td class="hidden sorting_1"></td> <td>CC ANTICIPI INFRAGRUPPO 0181000002694572             </td> <td> 05034 </td> <td>ARCHIMEDE SERVIZI S.R.L. </td> </tr><tr tmindex="1" role="row" class="even"><td class="hidden sorting_1"></td> <td>CC UNICO 0081000902691372                            </td> <td> 05034 </td> <td>ARCHIMEDE SERVIZI S.R.L. </td> </tr></tbody>
                    <thead>
                        <tr role="row" class=""><th class="hidden sorting_asc" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;" aria-sort="ascending">&nbsp;</th><th class="sorting" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Rapporto: ordinamento crescente" style="width: 0px;">Rapporto</th><th class="sorting" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="ABI: ordinamento crescente" style="width: 0px;">ABI</th><th class="sorting" tabindex="0" aria-controls="itemSelectorTable" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente" style="width: 0px;">Intestazione</th></tr>
                    </thead>
                </table></div>

            </div>
        </div>
    </div>
    
    <div id="mylist"></div>

    <script type="text/javascript">

    $(function () {

        var me = $('#88876c31bdba407f92489205ce32f511_3');
        
        $('.btnSelezioneCC', me).click(function () {
            var that = $(this);
            if (!that.hasClass('open'))
                $('.tabSelezioneCC', me).slideDown(200);
            else
                $('.tabSelezioneCC', me).slideUp(300);
            that.toggleClass('open');
        }); 

        $('.tabSelezioneCC', me).hide();
            

        var aggiornaIntestazione = function(rapportoSelezionato) {

            var sendEvent = false;

            if (rapportoSelezionato) {
                $('#intestazione', me)
                    .html(rapportoSelezionato.DescrizioneAzienda ? rapportoSelezionato.DescrizioneAzienda : '');
                $('#agenzia', me).html(
                    (rapportoSelezionato.CodiceAbi ? rapportoSelezionato.CodiceAbi : '') + 
                    (rapportoSelezionato.DescrizioneIstituto ? ' - ' + rapportoSelezionato.DescrizioneIstituto  : ''));
                $('#iban', me).html(rapportoSelezionato.CodiceIban ? rapportoSelezionato.CodiceIban : '');
                $('#numero', me).html(rapportoSelezionato.DescrizioneRapporto
                    ? rapportoSelezionato.DescrizioneRapporto
                    : '');

                $('#selezioneRapportoSingolo', me).show();
                $('#panelMessageRapporti', me).hide();

                sendEvent = true;
            } else {
                $('#intestazione', me).html('');
                $('#agenzia', me).html('');
                $('#iban', me).html('');
                $('#numero', me).html('');
            }

            $('.btnSelezioneCC', me).removeClass('open');
            $('.tabSelezioneCC', me).slideUp(300);

            if (sendEvent) {
                try {
                    sdk.utils.pubsub.send('anfa.rapportoSelector.rapportoSelected', rapportoSelezionato);
                } catch (err) {
                    sdk.utils.log.errorMessage("AnfaERR: Rapporto selector sending event for rappporto selected - " +
                        err.message);
                }
            }
        };

        var reloadRapporti = function(items) {

            if (!items) {
                items = [];
            }
            
            var selectFirst = false;
            var tgtHash = null;

            

            if (items.length === 1) {
                var firstRapporto = items[0];
                if (firstRapporto && firstRapporto.Identifier && firstRapporto.Identifier.Hash) {
                    tgtHash = firstRapporto.Identifier.Hash;
                    selectFirst = true;
                }
                
                
            }

            
            if (items.length <= 1) {
                $('.btnSelezioneCC', me).removeClass('active');
                $('.btnSelezioneCC', me).addClass('hidden');
                $('#SelettoreRapportiIcon', me).addClass('hidden');
            }

            if (items.length == 0) {
                $('#msgAction', me).text('Non ci sono rapporti');
            }            
            

            var param = {
                dataSource: items,
                rowCreator: function(parameter) {
                    if (parameter) {
                        var rapporto = parameter;
                        return '<tr>' +
                            '<td class="hidden"></td> ' +
                            '<td>' +
                            (rapporto.DescrizioneRapporto || '') +
                            '</td> ' +
                            '<td> ' +
                            (rapporto.CodiceAbi || '') +
                            ' </td> ' +
                            '<td>' +
                            (rapporto.DescrizioneAzienda || '') +
                            ' </td> ' +
                            '</tr>';
                    }
                    return '';
                },
                updateAccount: function(rapportoSelezionato) {
                    return aggiornaIntestazione(rapportoSelezionato);
                },
                initialItemSelector: function (index, item) {
                    
                    if (tgtHash && item && item.Identifier && tgtHash === item.Identifier.Hash)
                        return true;
                    return false;
                },
                
                selectFirst: selectFirst,
                minElementForNotPagination: 8,
                resNoRecord: "Non ci sono rapporti"
            };
            $('#selezioneRapportoSingolo',me).hide();
            $('#panelMessageRapporti',me).show();

            $('#itemSelectorTable', me).itemSelectorPage({ param: param });
            me.show();

            //laura 05/06/2018 per impostare il selettore rapporti gia' aperto
            if (items.length > 1) { $('.btnSelezioneCC', me).click(); }

        };

        var loadFromSource = function(url) {

            sdk.net.json(url,
                null,
                {
                    successHandler: function(caller, data, jsonResponse, warningObject) {
                        reloadRapporti(jsonResponse);
                    },
                    errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                        sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                    }
                });
        };

        sdk.utils.pubsub.register('rapportiPanel.reload', loadFromSource);


    });
    </script>

</div>




                </div>


                <div id="elenco" class="row form-group" style="display: block;">
                    <div class="col-xs-12 section">

                        <div id="searchElencoDistinte" class="section clearfix" style="text-decoration: none" role="button" data-toggle="collapse" href="#panelRicerca" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="titleSection">Parametri di ricerca</h3>
                            <span id="spanIcon" class="icon-replace active pull-right icon-collapse"></span>
                        </div>
                    </div>
                    <div id="panelRicerca" class="section panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="margin: 0px; display: block;" aria-expanded="true">
                        <div class="row form-group">
                            <div class="col-sm-3 col-xs-12 form-field">
                                <label class="control-label">Stato</label>
                                <select id="statoDistinta" class="form-control" style="height: 30px">
                                    <option value="">TUTTI</option>
                                    <option value="4">Firmata</option>
                                    <option value="5">In valutazione filiale</option>
                                    
                                    <option value="6">Anticipata</option>
                                    <option value="7">Parzialmente anticipata</option>
                                    <option value="8">Non anticipata</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label"></label>
                                <div>
                                    <button class="btn btn-primary" id="btnSearch" type="button" style="margin-top: 9px">FILTRA</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">&nbsp;</div>

                    
                    <div class="section clearfix" id="titleList">
                        <h3 class="titleSection resultList">Elenco Esiti</h3>
                    </div>

                    <div id="">
                        <div class="dataTables_wrapper listTable">
                            <div id="tblElencoEsiti_wrapper" class="dataTables_wrapper no-footer"><table id="tblElencoEsiti" class="table table-striped no-footer dataTable" role="grid" aria-describedby="tblElencoEsiti_info">
                                <tbody><tr tmindex="0" role="row" class="odd"><td class="hidden col-sm-1">&nbsp;</td><td class="center col-sm-1 sorting_1" data-order="2014-03-10T10:12:50Z">10/03/2014</td> <td class="col-sm-1" data-order="3">3</td> <td class="money col-sm-1" data-order="101529.8">101.529,80&nbsp;EUR</td> <td class="money col-sm-1" data-order="79193.24">79.193,24&nbsp;EUR</td> <td class="center col-sm-1" data-order="2014-03-17T00:00:00+01:00">17/03/2014</td> <td class="center col-sm-1">Anticipata </td> <td class="center col-sm-1"><div class="dropdown opera "><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button><ul class="dropdown-menu " aria-labelledby="dropdownMenuButton"><li><a id="viewAction" class="dropdown-item " href="#">Dettaglio</a></li><li><a id="downloadPropostaAction" class="dropdown-item disabledDiv" href="#">Proposta</a></li></ul></div></td> </tr></tbody>
                                <thead><tr role="row"><th class="hidden sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente" style="width: 0px;">&nbsp;</th><th class="sorting_desc" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-sort="descending" aria-label="Data: ordinamento crescente" style="width: 119px;">Data</th><th class="sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="N. fatture: ordinamento crescente" style="width: 119px;">N. fatture</th><th class="sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="Totale distinta: ordinamento crescente" style="width: 146px;">Totale distinta</th><th class="sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="Totale anticipato: ordinamento crescente" style="width: 139px;">Totale anticipato</th><th class="sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="Data accredito: ordinamento crescente" style="width: 119px;">Data accredito</th><th class="sorting" tabindex="0" aria-controls="tblElencoEsiti" rowspan="1" colspan="1" aria-label="Stato: ordinamento crescente" style="width: 118px;">Stato</th><th class="dt-nosort dt-nofilter sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;" style="width: 119px;">&nbsp;</th></tr></thead>
                            </table></div>
                        </div>
                    </div>

                </div>

            </div>

            <div id="areaPrintEsiti" style="">
                <div class="pull-right margin-bottom20">
                    <div class="pull-right" id="btnPrintEsiti" value="Esporta">  <div class="tm-print">     <div class="btn-group pull-right">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button pdf-0" title="documenti pdf" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon icon-pdf-x"></div>                     <span style="margin-left: 12px;">PDF</span>                 </a>             </li>             <li>                 <a class="link-button xls-1" title="documenti excel" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon icon-xls"></div>                     <span style="margin-left: 12px;">Excel</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
                </div>
            </div>

        </div>



        <div id="dettaglioDistinta" style="display: none">
            <div>
                




<div id="88876c31bdba407f92489205ce32f511_4" style="display: none">


    <div id="dettaglio" class="riquadro clearfix" style="display: none">

        <div class="clearfix">
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Esiti Richieste Anticipo: Dettaglio</h1>
        </div>

        
<div id="88876c31bdba407f92489205ce32f511_5" style="display: none;">
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
            var me = $('#88876c31bdba407f92489205ce32f511_5');

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
                    window.location.href = '#88876c31bdba407f92489205ce32f511_5';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#88876c31bdba407f92489205ce32f511_5';
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


        <div class="section">
            

<div id="88876c31bdba407f92489205ce32f511_6" style="display:none">
    <div class="row">
        <div class="col-xs-6 white-block">
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
                    <label class="control-label" id="areaordinante-intestatoa" style="padding:0"></label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-5">
                    Rapporto di anticipo
                </div>
                <div class="col-xs-7">
                    <label class="control-label" id="areaordinante-rappdianticipo" style="padding:0"></label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-5">
                    Banca
                </div>
                <div class="col-xs-7">
                    <label class="control-label" id="areaordinante-banca" style="padding:0"></label>
                </div>
            </div>

        </div>

        <div class="col-xs-6 white-block">
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
                    <label class="control-label" id="areadatidistinta-percentualeanticipo" style="padding:0"></label><span id="areadatidistinta-percentuale">%</span>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    Importo totale richiesto
                </div>
                <div class="col-xs-6">
                    <label class="control-label" id="areadatidistinta-importototalerichiesto" style="padding:0"></label>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-xs-6">
                    N. Fatture
                </div>
                <div class="col-xs-6">
                    <label class="control-label" id="areadatidistinta-numerofatture" style="padding:0"></label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    Stato
                </div>
                <div class="col-xs-6">
                    <label class="control-label" id="areadatidistinta-statodistinta"></label>

                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    Data creazione
                </div>
                <div class="col-xs-6">
                    <label class="control-label" id="areadatidistinta-dtcreazione" style="padding:0"></label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    Totale distinta
                </div>
                <div class="col-xs-6">
                    <label class="control-label" id="areadatidistinta-importototale" style="padding:0"></label>
                </div>
            </div>


        </div>

        <div class="col-xs-12 white-block" id="noAnticipo" style="display:none">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>
                        Dati Anticipo
                    </h1>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <div class="col-xs-12">Dati anticipo non presenti: distinta ancora in lavorazione</div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 white-block" id="anticipoOk" style="display:none">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>
                        Dati Anticipo
                    </h1>
                </div>
            </div>


            <div class="col-xs-12">
                <div class="col-xs-6">
                    <div class="col-xs-5">Totale finanziato</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-totalefinanziato" style="padding:0"></label></div>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-5">Data accredito</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-dataaccredito" style="padding:0"></label></div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <div class="col-xs-5">Percentuale finanziamento</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-percentualefinanziamento" style="padding:0"></label></div>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-5">Data addebito</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-dataaddebito" style="padding:0"></label></div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <div class="col-xs-5">N. Fatture finanziate</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-nfatturefinanziate" style="padding:0"></label></div>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-5">Iban di accredito (regolamento)</div>
                    <div class="col-xs-7"><label class="control-label" id="areadatidistintadatianticipo-ibanaccredito" style="padding:0"></label></div>
                </div>
            </div>


        </div>

    </div>
    
    <script type="text/javascript">
        $(function() {

            var me = $('#88876c31bdba407f92489205ce32f511_6');
            
            var resetDivAnticipo = function () {
                $('#anticipoOk', me).hide();
                $('#noAnticipo', me).hide();
                
            }

            var showDistinta = function (distinta) {
                resetDivAnticipo();
                
                var parameter = distinta;
                $('#areaordinante-intestatoa', me).html("");
                $('#areaordinante-rappdianticipo', me).html("");
                $('#areaordinante-banca', me).html("");
                $('#areadatidistinta-numerofatture', me).html("");
                $('#areadatidistinta-importototale', me).html("");
                $('#areadatidistinta-statodistinta', me).html("");
                $('#areadatidistinta-statodistinta', me).removeClass("label-anfastato");
                $('#areadatidistinta-dtcreazione', me).html("");
                $('#areadatidistinta-importototalerichiesto', me).html("");
                $('#areadatidistinta-percentualeanticipo', me).html("");

                $('#areadatidistintadatianticipo-totalefinanziato', me).html("");
                $('#areadatidistintadatianticipo-percentualefinanziamento', me).html("");
                $('#areadatidistintadatianticipo-nfatturefinanziate', me).html("");
                $('#areadatidistintadatianticipo-dataaccredito', me).html("");
                $('#areadatidistintadatianticipo-dataaddebito', me).html("");
                $('#areadatidistintadatianticipo-ibanaccredito', me).html("");
                
                if (parameter) {
                    $('#areaordinante-intestatoa', me).html(parameter.Rapporto.DescrizioneAzienda ? parameter.Rapporto.DescrizioneAzienda : '');
                    $('#areaordinante-rappdianticipo', me).html(parameter.Rapporto.DescrizioneRapporto ? parameter.Rapporto.DescrizioneRapporto : '');
                    $('#areaordinante-banca', me).html(
                        (parameter.Rapporto.CodiceAbi ? parameter.Rapporto.CodiceAbi : '') +
                        (parameter.Rapporto.DescrizioneIstituto ? ' - ' + parameter.Rapporto.DescrizioneIstituto : '')
                    );

                    $('#areadatidistinta-numerofatture', me).html((parameter.NumeroFatture == null ? '' : parameter.NumeroFatture));
                    $('#areadatidistinta-importototale', me).html(sdk.utils.text.formatAmmountDecimal(parameter.ImportoTotale, null, parameter.Divisa));
                    $('#areadatidistinta-statodistinta', me).html(sdk.resource.get('anfa.dettDistinta.statoDistinta.' + parameter.StatoDistinta));

                    if (parameter.StatoDistinta > 4) {
                        $('#areadatidistinta-statodistinta', me).addClass("label-anfastato").removeClassStartingWith('stato-').addClass("stato-" + parameter.StatoDistinta);
                    }

                    $('#areadatidistinta-dtcreazione', me).html((parameter.DataCreazioneUtc == null ? '' : sdk.utils.text.formatDateTime(moment(parameter.DataCreazioneUtc).local())));
                    
                    
                    if (distinta.Origin && distinta.Origin == 1) {
                        $('#areadatidistinta-percentualeanticipo', me).html(" - ");
                        $('#areadatidistinta-importototalerichiesto', me).html(" - ");
                        $('#areadatidistinta-percentuale', me).html("");
                    } else {
                        $('#areadatidistinta-percentualeanticipo', me).html((parameter.PercentualeRichiesto == null ? '' : parameter.PercentualeRichiesto));
                        $('#areadatidistinta-importototalerichiesto', me).html(sdk.utils.text.formatAmmountDecimal(parameter.ImportoTotaleRichiesto, ' ' + parameter.Divisa, parameter.Divisa));
                    }


                    if (parameter.Esito) {
                        var esito = parameter.Esito;
                        $('#areadatidistintadatianticipo-totalefinanziato', me).html(sdk.utils.text.formatAmmountDecimal (esito.TotaleFinanziato, '', esito.DivisaFinanziata));
                        $('#areadatidistintadatianticipo-percentualefinanziamento', me).html((esito.PercentualeFinanziata == null ? '' : esito.PercentualeFinanziata + " %"));
                        $('#areadatidistintadatianticipo-nfatturefinanziate', me).html((esito.NumeroFattureFinanziate == null ? '' : esito.NumeroFattureFinanziate));
                        $('#areadatidistintadatianticipo-dataaccredito', me).html(sdk.utils.text.formatDateTime(esito.DataAccredito));
                        $('#areadatidistintadatianticipo-dataaddebito', me).html(sdk.utils.text.formatDateTime(esito.DataAddebito));
                        $('#areadatidistintadatianticipo-ibanaccredito', me).html((esito.IbanAccredito == null ? '' : esito.IbanAccredito));
                        //controllare il parametro per decidere lo show
                        $('#anticipoOk', me).show();
                    } else {
                        $('#noAnticipo', me).show();
                    }

                }


                me.show();
            };

            sdk.utils.pubsub.register('distintaView.displayDistinta', showDistinta);
        });

    </script>
</div>


        </div>

        <div id="listFatture" class="clearfix" style="display: none">
            
            <div class="section clearfix">
                <h3 class="titleSection resultList">Elenco Fatture</h3>
            </div>

            <div id="">
                <div class="dataTables_wrapper listTable">
                    <table id="tblElencoFatture" class="table table-striped">
                        <tbody></tbody>
                        <thead>
                        <tr>
                            

                            <th class="hidden">&nbsp;</th>
                            <th>Debitore</th>
                            <th>N. Fattura</th>
                            <th>Emissione</th>
                            <th>Scadenza</th>
                            <th>Split Payment</th>
                            <th>Imponibile</th>
                            <th>Totale Fattura</th>
                            <th class="dt-nosort dt-nofilter">&nbsp;</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>



    <div id="detailFattura" style="display: none">

        <div class="riquadro clearfix">

            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esito Anticipo Fattura: Dettaglio Fattura</h1>
            </div>

            <div class="section clearfix">
                

<div id="88876c31bdba407f92489205ce32f511_7" style="display:none">
<div class="row">

<div class="col-xs-6 white-block">
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
            <label class="control-label" id="areaordinante-intestatoa" style="padding: 0"></label>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-5">
            Rapporto di anticipo
        </div>
        <div class="col-xs-7">
            <label class="control-label" id="areaordinante-rappdianticipo" style="padding: 0"></label>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-5">
            Banca
        </div>
        <div class="col-xs-7">
            <label class="control-label" id="areaordinante-banca" style="padding: 0"></label>
        </div>
    </div>


</div>

<div class="col-xs-6 white-block">
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
            <label class="control-label" id="areadatidistinta-percentualeanticipo" style="padding:0"></label><span id="areadatidistinta-percentuale">%</span>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6">
            Importo totale richiesto
        </div>
        <div class="col-xs-6">
            <label class="control-label" id="areadatidistinta-importototalerichiesto" style="padding:0"></label>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            N. Fatture
        </div>
        <div class="col-xs-6">
            <label class="control-label" id="areadatidistinta-numerofatture" style="padding: 0"></label>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6">
            Stato
        </div>
        <div class="col-xs-6">
            <label class="control-label" id="areadatidistinta-statodistinta" style="padding: 0"></label>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6">
            Data creazione
        </div>
        <div class="col-xs-6">
            <label class="control-label" id="areadatidistinta-dtcreazione" style="padding: 0"></label>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6">
            Totale distinta
        </div>
        <div class="col-xs-6">
            <label class="control-label" id="areadatidistinta-importototale" style="padding: 0"></label>
        </div>
    </div>

</div>






<div class="col-xs-12 white-block">
    <div class="col-xs-12">
        <div class="text-center">
            <h1>
                Dati Debitore
            </h1>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Ragione Sociale</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-RagioneSociale" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Indirizzo</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-Indirizzo" style="padding: 0"></label></div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">CF/PIva</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-CodiceFiscalePiva" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Comune</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-Comune" style="padding: 0"></label></div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">&nbsp;</div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0">&nbsp;</label></div>
        </div>


        <div class="col-xs-6">
            <div class="col-xs-5">Provincia</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-CapProvincia" style="padding: 0"></label></div>
        </div>

    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">&nbsp;</div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0">&nbsp;</label></div>
        </div>

        <div class="col-xs-6">
            <div class="col-xs-5">Nazione</div>
            <div class="col-xs-7"><label class="control-label" id="datidebitore-Nazione" style="padding: 0"></label></div>
        </div>


    </div>
</div>


<div class="col-xs-12 white-block" id="subArea-datiemittente-nodati" style="display: none;visibility: hidden">
    
    <div class="col-xs-12">
        <div class="text-center">
            <h1>
                Dati Emittente
            </h1>
        </div>
    </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                <div class="col-xs-12">Emittente coincide con Richiedente se tutti i valori sono vuoti</div>
            </div>
        </div>
    
</div>


<div class="col-xs-12 white-block" id="subArea-datiemittente" style="display: none;visibility: hidden">
    <div class="col-xs-12">
        <div class="text-center">
            <h1>
                Dati Emittente
            </h1>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Ragione Sociale</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-RagioneSociale" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Indirizzo</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-Indirizzo" style="padding: 0"></label></div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">CF/PIva</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-CodiceFiscalePiva" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Comune</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-Comune" style="padding: 0"></label></div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">&nbsp;</div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0">&nbsp;</label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Provincia</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-CapProvincia" style="padding: 0"></label></div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">&nbsp;</div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0">&nbsp;</label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Nazione</div>
            <div class="col-xs-7"><label class="control-label" id="datiemittente-Nazione" style="padding: 0"></label></div>
        </div>
    </div>
</div>
    

<div class="col-xs-12 white-block">
    <div class="col-xs-12">
        <div class="text-center">
            <h1>
                Dati Fattura
            </h1>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Numero Fattura</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-NumeroFattura" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Data Emissione</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-DataEmissione" style="padding: 0"></label></div>
        </div>

    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Importo Fattura</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-ImportoFattura" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Data Scadenza</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-DataScadenza" style="padding: 0"></label></div>
        </div>

    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Importo Imponibile</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-ImportoImponibile" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5">Iban Creditore Fattura</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-IbanCreditorFattura" style="padding: 0"></label></div>
        </div>

    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Tipo Pagamento</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-TipoPagamento" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5"></div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0"></label></div>
        </div>

    </div>

    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Cessione Credito</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-CessioneCredito" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6">
            <div class="col-xs-5"></div>
            <div class="col-xs-7"><label class="control-label" style="padding: 0"></label></div>
        </div>

    </div>


    <div class="col-xs-12">
        <div class="col-xs-6">
            <div class="col-xs-5">Split Payment</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-SplitPagamento" style="padding: 0"></label></div>
        </div>
        <div class="col-xs-6" style="visibility: hidden;display:none">
            <div class="col-xs-5">Status</div>
            <div class="col-xs-7"><label class="control-label" id="datifattura-Status" style="padding: 0"></label></div>
        </div>
    </div>


</div>

<div class="col-xs-12 white-block" id="subArea-datiesito">
    <div class="col-xs-12">
        <div class="text-center">
            <h1>
                Dati dell'esito
            </h1>
        </div>
    </div>

    
    

    
    
    <div class="col-xs-12" id="datiesito-statounknown">
        <div class="col-xs-12">
            <div class="col-xs-6">
                Dati Esito non presenti
            </div>
        </div>
    </div>


    
    <div class="col-xs-12" id="datiesito-statoinlavorazione">
        <div class="col-xs-12">
            <div class="col-xs-6">
                Distinta in lavorazione esito non presente
            </div>
        </div>
    </div>

    
    <div class="col-xs-12" id="datiesito-statononaccettata">
        <div class="col-xs-12">
            <div class="col-xs-6">
                Richiesta di anticipo non accettata
            </div>
        </div>
    </div>



    
    <div class="col-xs-12" id="datiesito-statoanticipata">
        <div class="row">
            <div class="col-xs-6">
                <div class="col-xs-5">Percentuale Finanziata</div>
                <div class="col-xs-7"><label class="control-label" id="datiesito-PercentualeFinanziata" style="padding: 0"></label></div>
            </div>
            <div class="col-xs-6">
                <div class="col-xs-5">Data Radiazione</div>
                <div class="col-xs-7"><label class="control-label" id="datiesito-DataRadiazione" style="padding: 0"></label></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="col-xs-5">Totale Finanziato</div>
                <div class="col-xs-7"><label class="control-label" id="datiesito-TotaleFinanziato" style="padding: 0"></label></div>
            </div>
            <div class="col-xs-6">
            </div>
        </div>
    </div>






    <div class="col-xs-12"></div>

</div>


</div>
    
    <script type="text/javascript">
        $(function() {

            var me = $('#88876c31bdba407f92489205ce32f511_7');

            var resetDivEmittente = function () {
                $('#subArea-datiemittente-nodati', me).hide();
                $('#subArea-datiemittente', me).hide();
            }

            var showFattura = function (param) {
                resetDivEmittente();
                //debugger;    
                var fattura = param.Fattura;
                var distinta = param.Distinta;

                //Ordinante
                $('#areaordinante-intestatoa', me).html("");
                $('#areaordinante-rappdianticipo', me).html("");
                $('#areaordinante-banca', me).html("");
                //$('#areaordinante-filiale', me).html("");
                //Distinta
                $('#areadatidistinta-numerofatture', me).html("");
                $('#areadatidistinta-importototale', me).html("");
                $('#areadatidistinta-statodistinta', me).html("");
                $('#areadatidistinta-dtcreazione', me).html("");
                $('#areadatidistinta-importototalerichiesto', me).html("");
                $('#areadatidistinta-percentualeanticipo', me).html("");

                //Dati Fattura
                $('#datifattura-CessioneCredito', me).html("");
                $('#datifattura-DataEmissione', me).html("");
                $('#datifattura-DataScadenza', me).html("");
                $('#datifattura-Divisa', me).html("");
                $('#datifattura-IbanCreditorFattura', me).html("");
                $('#datifattura-IbanDebitorFattura', me).html("");
                $('#datifattura-ImportoFattura', me).html("");
                $('#datifattura-ImportoImponibile', me).html("");
                $('#datifattura-NumeroFattura', me).html("");
                $('#datifattura-SplitPagamento', me).html("");
                $('#datifattura-Status', me).html("");
                $('#datifattura-TipoPagamento', me).html("");
                //Dati Debitore
                $('#datidebitore-CapProvincia', me).html("");
                $('#datidebitore-CodiceFiscalePiva', me).html("");
                $('#datidebitore-Comune', me).html("");
                $('#datidebitore-Indirizzo', me).html("");
                $('#datidebitore-Nazione', me).html("");
                // $('#datidebitore-Provincia', me).html("");
                $('#datidebitore-RagioneSociale', me).html("");
                //Dati Emittente
                $('#datiemittente-Cap', me).html("");
                $('#datiemittente-CodiceFiscalePiva', me).html("");
                $('#datiemittente-Comune', me).html("");
                $('#datiemittente-Indirizzo', me).html("");
                $('#datiemittente-Nazione', me).html("");
                $('#datiemittente-CapProvincia', me).html("");
                $('#datiemittente-RagioneSociale', me).html("");
                //Dati esito
                //$('#datiesito-CodiceErroreAnfa', me).html("");
                //$('#datiesito-CodiceErroreIso', me).html("");
                $('#datiesito-DataRadiazione', me).html("");
                //$('#datiesito-DescrizioneErroreAnfa', me).html("");
                $('#datiesito-DivisaFinanziata', me).html("");
                $('#datiesito-PercentualeFinanziata', me).html("");
                $('#datiesito-TotaleFinanziato', me).html("");
                $('#datiesito-statoinlavorazione', me).hide();
                $('#datiesito-statoanticipata', me).hide();
                $('#datiesito-statononaccettata', me).hide();
                

                if (distinta) {
                    //Ordinante
                    $('#areaordinante-intestatoa', me).html(distinta.Rapporto.DescrizioneAzienda ? distinta.Rapporto.DescrizioneAzienda : '');
                    $('#areaordinante-rappdianticipo', me).html(distinta.Rapporto.DescrizioneRapporto ? distinta.Rapporto.DescrizioneRapporto : '');
                    $('#areaordinante-banca', me).html(
                            (distinta.Rapporto.CodiceAbi ? distinta.Rapporto.CodiceAbi : '') +
                            (distinta.Rapporto.DescrizioneIstituto ? ' - ' + distinta.Rapporto.DescrizioneIstituto : '')
                    );
                    //Distinta
                    $('#areadatidistinta-numerofatture', me).html((distinta.NumeroFatture == null ? '' : distinta.NumeroFatture));
                    $('#areadatidistinta-importototale', me).html(sdk.utils.text.formatAmmountDecimal(distinta.ImportoTotale, null, distinta.Divisa));
                    $('#areadatidistinta-statodistinta', me).html(sdk.resource.get('anfa.dettDistinta.statoDistinta.' + distinta.StatoDistinta));
                    $('#areadatidistinta-dtcreazione', me).html((distinta.DataCreazioneUtc == null ? '' : sdk.utils.text.formatDateTime(moment(distinta.DataCreazioneUtc).local())));
                    //$('#areadatidistinta-importototalerichiesto', me).html(sdk.utils.text.formatAmmountDecimal(distinta.ImportoTotaleRichiesto, '0,00 ' + distinta.Divisa, distinta.Divisa));
                    //$('#areadatidistinta-percentualeanticipo', me).html((distinta.PercentualeRichiesto == null ? '' : distinta.PercentualeRichiesto));

                    if (distinta.Origin && distinta.Origin == 1) {
                        $('#areadatidistinta-percentualeanticipo', me).html(" - ");
                        $('#areadatidistinta-importototalerichiesto', me).html(" - ");
                        $('#areadatidistinta-percentuale', me).html("");
                    } else {
                        $('#areadatidistinta-percentualeanticipo', me).html((distinta.PercentualeRichiesto == null ? '' : distinta.PercentualeRichiesto));
                        $('#areadatidistinta-importototalerichiesto', me).html(sdk.utils.text.formatAmmountDecimal(distinta.ImportoTotaleRichiesto, ' ' + distinta.Divisa, distinta.Divisa));
                    }


                    if (distinta.StatoDistinta == 10) { //in valutazione filiale
                        $('#datiesito-statoinlavorazione', me).show();
                        $('#datiesito-statoanticipata', me).hide();
                        $('#datiesito-statononaccettata', me).hide();
                        $('#datiesito-statounknown', me).hide();
                    }
                    if (distinta.StatoDistinta == 6 || distinta.StatoDistinta == 7) { //anticipata o parz.anticipata
                        $('#datiesito-statoinlavorazione', me).hide();
                        $('#datiesito-statoanticipata', me).show();
                        $('#datiesito-statononaccettata', me).hide();
                        $('#datiesito-statounknown', me).hide();
                    }
                    if (distinta.StatoDistinta == 8) { //non finanziata
                        $('#datiesito-statoinlavorazione', me).hide();
                        $('#datiesito-statoanticipata', me).hide();
                        $('#datiesito-statononaccettata', me).show();
                        $('#datiesito-statounknown', me).hide();
                    }

                }


                if (fattura) {
                    //$('#datifattura-CessioneCredito', me).html(fattura.CessioneCredito == null ? '' : sdk.resource.get('anfa.cessionecredito.' + fattura.CessioneCredito));
                    $('#datifattura-DataEmissione', me).html((fattura.DataEmissione == null ? '' : sdk.utils.text.formatDateTime(moment(fattura.DataEmissione).local())));
                    $('#datifattura-DataScadenza', me).html((fattura.DataScadenza == null ? '' : sdk.utils.text.formatDateTime(moment(fattura.DataScadenza).local())));
                    $('#datifattura-Divisa', me).html(fattura.Divisa == null ? '' : fattura.Divisa);
                    $('#datifattura-IbanCreditorFattura', me).html(fattura.IbanCreditorFattura == null ? '' : fattura.IbanCreditorFattura);
                    $('#datifattura-IbanDebitorFattura', me).html(fattura.IbanDebitorFattura == null ? '' : fattura.IbanDebitorFattura);
                    $('#datifattura-ImportoFattura', me).html(sdk.utils.text.formatAmmountDecimal(fattura.ImportoFattura, null, fattura.Divisa));
                    //$('#datifattura-ImportoImponibile', me).html(sdk.utils.text.formatAmmountDecimal(fattura.ImportoImponibile, null, fattura.Divisa));
                    $('#datifattura-NumeroFattura', me).html(fattura.NumeroFattura == null ? '' : fattura.NumeroFattura);
                    //$('#datifattura-SplitPagamento', me).html(fattura.SplitPagamento == null ? '' : sdk.resource.get('anfa.splitPayment.' + fattura.SplitPagamento));
                    if (distinta.Origin && distinta.Origin == 1) {
                        $('#datifattura-CessioneCredito', me).html(" - ");
                        $('#datifattura-ImportoImponibile', me).html(" - ");
                        $('#datifattura-SplitPagamento', me).html(" - ");
                    } else {
                        $('#datifattura-CessioneCredito', me).html(fattura.CessioneCredito == null ? '' : sdk.resource.get('anfa.cessionecredito.' + fattura.CessioneCredito));
                        $('#datifattura-ImportoImponibile', me).html(sdk.utils.text.formatAmmountDecimal(fattura.ImportoImponibile, null, fattura.Divisa));
                        $('#datifattura-SplitPagamento', me).html(fattura.SplitPagamento == null ? '' : sdk.resource.get('anfa.splitPayment.' + fattura.SplitPagamento));
                    }

                    $('#datifattura-Status', me).html(fattura.Status == null ? '' : sdk.resource.get('anfa.statoFattura.' + fattura.Status));
                    $('#datifattura-TipoPagamento', me).html(fattura.TipoPagamento == null ? '' : sdk.resource.get('anfa.tipoPagamento.' + fattura.TipoPagamento));
                    if (fattura.Debitore) {

                        // $('#datidebitore-Cap', me).html(fattura.Debitore.Cap == null ? '' : fattura.Debitore.Cap);
                        $('#datidebitore-CodiceFiscalePiva', me).html(fattura.Debitore.CodiceFiscalePiva == null
                            ? ''
                            : fattura.Debitore.CodiceFiscalePiva);
                        $('#datidebitore-Comune', me)
                            .html(fattura.Debitore.Comune == null ? '' : fattura.Debitore.Comune);
                        $('#datidebitore-Indirizzo', me)
                            .html(fattura.Debitore.Indirizzo == null ? '' : fattura.Debitore.Indirizzo);
                        $('#datidebitore-Nazione', me)
                            .html(fattura.Debitore.Nazione == null ? '' : fattura.Debitore.Nazione);
                        $('#datidebitore-CapProvincia', me).html(
                            (fattura.Debitore.Cap == null ? '' : fattura.Debitore.Cap) +
                            " - " +
                            (fattura.Debitore.Provincia == null ? '' : fattura.Debitore.Provincia)
                        );
                        $('#datidebitore-RagioneSociale', me).html(fattura.Debitore.RagioneSociale == null
                            ? ''
                            : fattura.Debitore.RagioneSociale);

                    }
                    if (fattura.Creditore && fattura.Creditore.RagioneSociale) {
                        // $('#datiemittente-Cap', me).html(fattura.Creditore.Cap == null ? '' : fattura.Creditore.Cap);
                        $('#datiemittente-CodiceFiscalePiva', me).html(fattura.Creditore.CodiceFiscalePiva == null ? '' : fattura.Creditore.CodiceFiscalePiva);
                        $('#datiemittente-Comune', me).html(fattura.Creditore.Comune == null ? '' : fattura.Creditore.Comune);
                        $('#datiemittente-Indirizzo', me).html(fattura.Creditore.Indirizzo == null ? '' : fattura.Creditore.Indirizzo);
                        $('#datiemittente-Nazione', me).html(fattura.Creditore.Nazione == null ? '' : fattura.Creditore.Nazione);
                        $('#datiemittente-CapProvincia', me).html(
                            (fattura.Creditore.Cap == null ? '' : fattura.Creditore.Cap) +
                            " - " +
                            (fattura.Creditore.Provincia == null ? '' : fattura.Creditore.Provincia));
                        $('#datiemittente-RagioneSociale', me).html(fattura.Creditore.RagioneSociale == null ? '' : fattura.Creditore.RagioneSociale);

                        //$('#subArea-datiemittente', me).show();

                    } else {
                        // $('#subArea-datiemittente-nodati', me).show();
                    }
                    
                    if (fattura.Esito) {
                        //$('#datiesito-CodiceErroreAnfa', me).html(fattura.Esito.CodiceErroreAnfa == null ? '' : fattura.Esito.CodiceErroreAnfa);
                        //$('#datiesito-CodiceErroreIso', me).html(fattura.Esito.CodiceErroreIso == null ? '' : fattura.Esito.CodiceErroreIso);
                        $('#datiesito-DataRadiazione', me).html((fattura.Esito.DataRadiazione == null ? '' : sdk.utils.text.formatDateTime(moment(fattura.Esito.DataRadiazione).local())));
                        //$('#datiesito-DescrizioneErroreAnfa', me).html(fattura.Esito.DescrizioneErroreAnfa == null ? '' : fattura.Esito.DescrizioneErroreAnfa);
                        // $('#datiesito-DivisaFinanziata', me).html(fattura.Esito.DivisaFinanziata == null ? '' : fattura.Esito.DivisaFinanziata);
                        $('#datiesito-PercentualeFinanziata', me).html(fattura.Esito.PercentualeFinanziata == null ? '0,00' : fattura.Esito.PercentualeFinanziata + " %");
                        $('#datiesito-TotaleFinanziato', me).html(sdk.utils.text.formatAmmountDecimal(fattura.Esito.TotaleFinanziato, '0,00', fattura.Esito.DivisaFinanziata ));
                    }

                }



                me.show();
            };

            sdk.utils.pubsub.register('fatturaview.displayFattura', showFattura);


        });

    </script>
    

</div>
            </div>

        </div>

        <div>
            <button class="btn btn-primary pull-right" id="btnCloseFattura" type="button">Indietro</button>
        </div>

    </div>

    
    <div id="dettaglioBtn">
        
        <div class="pull-right margin-bottom20">
            <button class="btn btn-primary pull-right" id="btnCloseDettaglio2" type="button">Torna a Elenco</button>
        </div>

        <div class="pull-right margin-bottom20">
            <div class="" id="btnPrintDettaglio" value="Esporta"></div>
        </div>

    </div>




    <script type="text/javascript">
        $(function() {
            var me = $('#88876c31bdba407f92489205ce32f511_4');

            var dettaglioPnl = $('#dettaglio', me);
            var dettaglioBtnPnl = $('#dettaglioBtn', me);
            var listPnl = $('#listFatture', me);
            var detailItemPnl = $('#detailFattura', me);
            

            var currentDistinta = null;


            var urls = {
                
                'EsitoHead': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/ReadHead',
                'EsitoBody': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/ListItems',
                'EsitoFatturaDetail': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/ReadItem',
                'urlExportDettaglioEsitiPdf': '/Youbiz.Sdk.Web/AnFa/ListaEsiti/ExportEsitiDetailPdf',
                'urlExportDettaglioEsitiXlsx': '/Youbiz.Sdk.Web/AnFa/ListaEsiti/ExportEsitiDetailXlsx'


            };

            var resetMe = function() {
                dettaglioPnl.hide();
                dettaglioBtnPnl.hide();
                listPnl.hide();
                detailItemPnl.hide();
                me.hide();
            }

            var _saldoDisplay = function(importoTmp) {
                if (importoTmp) {
                    return sdk.utils.text.formatAmmountDecimal(importoTmp);
                }
                return "0,00";
            }

            var displayDistinta = function() {
                sdk.utils.pubsub.send('distintaView.displayDistinta', currentDistinta);
                resetMe();
                dettaglioPnl.show();
                dettaglioBtnPnl.show();
                me.show();
                sdk.utils.pubsub.send('elencoesiti.dettagliodistinta.hiddenBtnTornaElenco', true);
            }


            $('#btnCloseFattura', me).click(function() {
                detailItemPnl.hide();
                //sdk.utils.pubsub.send('distintaView.displayDistinta', currentDistinta);
                //resetMe();
                dettaglioPnl.show();
                dettaglioBtnPnl.show();
                listPnl.show();
                me.show();
                sdk.utils.pubsub.send('elencoesiti.dettagliodistinta.hideBtnclosedettaglio', false);
            });

            $('#btnCloseDettaglio2', me).click(function () {
                sdk.utils.pubsub.send('elencoesiti.dettagliodistinta.TornaElenco');
                
            });

            var initPrinterDettaglio = function(distintaKey) {
                    // debugger;
                    var currentSearchParam = $.extend({}, { 'filter': distintaKey});
                    sdk.print('#btnPrintDettaglio', me).create({
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
                                        action: urls.urlExportDettaglioEsitiPdf,
                                        parameter: currentSearchParam,
                                        serialization: { 'mode': false, 'fieldName': 'jsonString'}
                                    }

                                }
                            },
                            {
                                id: 'all-2',
                                type: 'xls',
                                iconClass: '',
                                label: 'Excel',
                                title: 'documenti excel',
                                saveAll: {
                                    label: 'Scarica tutti gli Excels',
                                    resourceForm: {
                                        action: urls.urlExportDettaglioEsitiXlsx,
                                        parameter: currentSearchParam,
                                        serialization: { 'mode': false, 'fieldName': 'jsonString'}
                                    }

                                }
                            }
                        ]
                        ,
                        eventHandler: function(eventType, target, data) {
                            switch (eventType) {
                            case 'fixParameter':
                                // fixo solo le info di jqdt e non il business.
                                $.extend(data, getJqdtParams($('#tblElencoFatture', me).dataTable()));
                                break;
                            }
                        }
                        
                    });
                };

            var dettaglioFatturaDo = function(fattura) {

                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.net.json(urls.EsitoFatturaDetail,
                    fattura.Key,
                    {
                        successHandler: function(caller, data, jsonResponse, warningObject) {
                            var param = { 'Distinta': currentDistinta, 'Fattura': jsonResponse };
                            sdk.utils.pubsub.send('fatturaview.displayFattura', param);
                            sdk.utils.pubsub.send('elencoesiti.dettagliodistinta.hideBtnclosedettaglio', true);
                            //sdk.utils.pubsub.send('fatturaview.displayFattura', jsonResponse);
                            resetMe();
                            detailItemPnl.show();
                            me.show();
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
            }

            var displayFatture = function(distinta) {


                var param = {
                    dataSource: distinta.Items,
                    rowCreator: function(parameter) {

                        var dataOrderDisplay = function(datatmp) {
                            if (datatmp) {
                                return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'YYYYMMDD');
                            }
                            return "&nbsp;";
                        }

                        var actionModifica = function(datatmp) {

                            var classDisabledOpera = 'disabledDiv';
                            var classDisabledDetail = 'disabledDiv';

                            classDisabledOpera = '';
                            classDisabledDetail = '';


                            //var classDisabledDownloadAccettazione = 'disabledDiv';
                            //if (datatmp && datatmp.Esito && datatmp.Esito.IdDocumentoContabile && datatmp.Esito.IdDocumentoContabile !== '') {
                            //    classDisabledDownloadAccettazione = '';
                            //}


                            //return '<div class="dropdown opera ' +
                            //    classDisabledOpera +
                            //    '">' +
                            //    '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                            //    '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>' +
                            //    '</button>' +
                            //    '<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">' +
                            //    '<li><a id="viewAction" class="dropdown-item ' +
                            //    classDisabledDetail +
                            //    '" href="#">' +
                            //    sdk.resource.get('anfa.elencoEsiti.opera.dettaglio') +
                            //    '</a></li>' +
                            //    '</ul>' +
                            //    '</div>';

                            //laura 31/07/2018 - sostituzione menu-hamburger con lente
                            return '<div class="' +
                                classDisabledDetail  +
                                '">' +
                                '<a id="viewAction" class="' +
                                classDisabledDetail +
                                '" href="#">' +
                                '<button class="btn btn-secondary" type="button" id="dropdownMenuButton">' +
                                '<span class="glyphicon glyphicon-search" aria-hidden="true">' +
                                '</span>' +
                                '</button>' +
                                '</a>' +
                                '</div>';

                        }


                        if (parameter) {

                            var decodeTipoStatus = function(parameter) {
                                if (parameter || parameter === 0) {
                                    return sdk.resource.get('anfa.statoFattura.' + parameter);
                                }
                                return "";
                            };

                            var decodeSplitPayment = function(parameter) {
                                switch (parameter) {
                                case 0:
                                    return "-";
                                case 1:
                                    return "SI";
                                case 2:
                                    return "NO";
                                }
                                return "";
                            };


                            //var tmpObject = $('<tr>' +
                            //    '<td class="hidden"></td> ' +
                            //    '<td class="" >' + parameter.NumeroFattura+  '</td>' +
                            //    '<td class="center" data-order="' + parameter.DataEmissione +'">' + sdk.utils.text.formatDateTime(parameter.DataEmissione )+  '</td>' +
                            //    '<td class="center" data-order="' + parameter.DataScadenza + '">' + sdk.utils.text.formatDateTime(parameter.DataScadenza ) +  '</td>' +
                            //    '<td class="money" data-order="' + parameter.ImportoFattura + '">' + sdk.utils.text.formatAmmountDecimal( parameter.ImportoFattura, '&nbsp;', parameter.Divisa) +  '</td>' +
                            //    //'<td class="center">' + decodeTipoStatus(parameter.Status) +  '</td>' +
                            //    '<td class="">' + (parameter.Debitore.RagioneSociale || '') +
                            //    '<td class="center">' + actionModifica(parameter) +  '</td>' +
                            //    ' </tr> ');

                            var imponibile =
                                sdk.utils.text.formatAmmountDecimal(parameter.ImportoImponibile, '-', parameter.Divisa);
                            var classImponibile = imponibile === "-" ? "center" : "money";

                            var tmpObject = $('<tr>' +
                                '<td class="hidden"></td> ' +
                                '<td >' +
                                (parameter.Debitore.RagioneSociale || '') +
                                '<td >' +
                                parameter.NumeroFattura +
                                '</td>' +
                                '<td class="center" data-order="' +
                                parameter.DataEmissione +
                                '">' +
                                sdk.utils.text.formatDateTime(parameter.DataEmissione) +
                                '</td>' +
                                '<td class="center" data-order="' +
                                parameter.DataScadenza +
                                '">' +
                                sdk.utils.text.formatDateTime(parameter.DataScadenza) +
                                '</td>' +
                                '<td class="center">' +
                                decodeSplitPayment(parameter.SplitPagamento) +
                                '</td>' +
                                '<td class="' +
                                classImponibile +
                                '" data-order="' +
                                parameter.ImportoImponibile +
                                '">' +
                                imponibile +
                                '</td>' +
                                '<td class="money" data-order="' +
                                parameter.ImportoFattura +
                                '">' +
                                sdk.utils.text.formatAmmountDecimal(parameter.ImportoFattura,
                                    '&nbsp;',
                                    parameter.Divisa) +
                                '</td>' +
                                '<td class="center">' +
                                actionModifica(parameter) +
                                '</td>' +
                                ' </tr> ');

                            $('#viewAction', tmpObject).click(function() {
                                dettaglioFatturaDo(parameter);
                            });


                            return tmpObject;


                        }

                        return '';
                    },
                    eventClickElement: $.noop,
                    initialItemSelector: $.noop,
                    selectFirst: false,
                    minElementForNotPagination: 8,
                    resNoRecord: 'Non ci sono fatture',
                    noTopSearch: false,
                    isOrderList: true,
                    columnDefs: [{ targets: 'dt-nosort', orderable: false }],
                    columOrder: [[1, "asc"]]
                };

                $('#tblElencoFatture', listPnl).itemSelectorPage({ param: param });
                listPnl.show();
            };


            var loadFatture = function() {
                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.net.json(urls.EsitoBody,
                    currentDistinta.Identifier,
                    {
                        successHandler: function(caller, data, jsonResponse, warningObject) {
                            displayFatture(jsonResponse);
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
            }


            var loadDistinta = function(distintaIdentifier) {
                sdk.utils.pubsub.send('messagePanel.hide');
                initPrinterDettaglio(distintaIdentifier);
                sdk.net.json(urls.EsitoHead,
                    distintaIdentifier,
                    {
                        successHandler: function(caller, data, jsonResponse, warningObject) {
                            currentDistinta = jsonResponse;
                            displayDistinta();
                            sdk.utils.pubsub.send('distinta.load.success', distintaIdentifier);
                            loadFatture();

                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.pubsub.send('distinta.load.fail');
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
            }

            sdk.utils.pubsub.register('distinta.reset', resetMe);
            sdk.utils.pubsub.register('distinta.load', loadDistinta);

        });

    </script>

</div>









            </div>
            <div>
                <button class="btn btn-primary pull-right" id="btnCloseDettaglio" type="button">Torna a Elenco</button>
                <div class="pull-right margin-bottom20">
                    <div class="pull-right" id="btnPrintDettaglio" value="Esporta"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">


            $(function() {

                var me = $('#88876c31bdba407f92489205ce32f511_1');


                $('#searchElencoDistinte', me).click(function () {
                    if ($(this).hasClass("collapsed")) {
                        $('#panelRicerca', me).show();
                        $('#spanIcon', me).removeClass('icon-expand').addClass('icon-collapse');
                    } else {
                        $('#panelRicerca', me).hide();
                        $('#spanIcon', me).removeClass('icon-collapse').addClass('icon-expand');
                    }
                });
                $('#searchElencoDistinte', me).click();


                var esitoMain = $('#esitoMain', me);
                var dettaglioPanel = $('#dettaglioDistinta', me);

                // logiche di main
                var elencoPanel = $('#elenco', me);
                var printelenco = $('#areaPrintEsiti', me);
                var searchPanel = $('#panelRicerca', me);


                var urls = {
                    
                    'urlEsitiList': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/GetEsiti',
                    'urlRapporti': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/GetRapporti',
                    'urlScaricoDocumento': '/Youbiz.Sdk.Web/AnFa/ListaEsitiService/GetDocument',
                    'urlExportEsiti': '/Youbiz.Sdk.Web/AnFa/ListaEsiti/ExportEsitiPdf',
                    'urlExportEsitiXlsx': '/Youbiz.Sdk.Web/AnFa/ListaEsiti/ExportEsitiXlsx'


                };

                var internalSearchParam = {
                    StatoDistinta: null,
                    Rapporto: null
                };

                var _getOrderTable = function () {
                    // debugger;
                    return getJqdtParams($('#tblElencoEsiti', me).dataTable());
                    //var toRet = {};
                    //var jqdt = $('#tblElencoEsiti', me).dataTable();
                    //debugger;
                    //if (jqdt) {
                    //    var sortedCol = jqdt.fnSettings().aaSorting[0][0];
                    //    var sortedDir = jqdt.fnSettings().aaSorting[0][1];
                    //    toRet.Order = [{ 'Field': sortedCol, 'Direction': sortedDir }];

                    //    // servono ?
                    //    //if (sortedDir === 'asc') {
                    //    //    toRet.IsSortAscending = true;
                    //    //} else {
                    //    //    toRet.IsSortAscending = false;
                    //    //}
                    //    //toRet.SortColumn = sortedCol;

                    //    var searchVal = jqdt.search();
                    //    toRet.Search = { 'Value': '' };
                    //}
                    //return toRet;
                };

                var initPrinterEsiti = function() {
                    // la ricerca è appena stata fatta e devo mantenere questi business filters ...
                    var currentSearchParam = $.extend({}, { 'filter': internalSearchParam});
                    sdk.print('#btnPrintEsiti', me).create({
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
                                        action: urls.urlExportEsiti,
                                        parameter: currentSearchParam,
                                        serialization: { 'mode': false, 'fieldName': 'jsonString'}
                                    }

                                }
                            },
                            {
                                id: 'all-2',
                                type: 'xls',
                                iconClass: '',
                                label: 'Excel',
                                title: 'documenti excel',
                                saveAll: {
                                    label: 'Scarica tutti gli Excels',
                                    resourceForm: {
                                        action: urls.urlExportEsitiXlsx,
                                        parameter: currentSearchParam,
                                        serialization: { 'mode': false, 'fieldName': 'jsonString'}
                                    }

                                }
                            }
                        ],
                        eventHandler: function(eventType, target, data) {
                            switch (eventType) {
                            case 'fixParameter':
                                // fixo solo le info di jqdt e non il business.
                                $.extend(data, getJqdtParams($('#tblElencoEsiti', me).dataTable()));
                                break;
                            }
                        }
                    });
                };

                


                var downloadPropostaDo = function(distinta) {

                    sdk.utils.navigateFormForExport(urls.urlScaricoDocumento, distinta.IdDocumentoRichiesta);
                };

                var downloadConfermaDo = function(distinta) {
                    sdk.utils.navigateFormForExport(urls.urlScaricoDocumento, distinta.Esito.IdDocumentoContabile);
                };

                var dettaglioDo = function(distinta) {
                    sdk.utils.pubsub.send('distinta.load', distinta.Identifier);
                };

                var emptyList = function() {

                };

                var populateList = function(jsonResult) {

                    emptyList();
                    // init header
                    var strThead = '<tr>' +
                        '<th class="hidden">&nbsp;</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.data') +
                        '</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.numerofatture') +
                        '</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.totaleDistinta') +
                        '</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.totaleAnticipato') +
                        '</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.dataAnticipo') +
                        '</th>' +
                        '<th >' +
                        sdk.resource.get('anfa.esiti.tbl.col.stato') +
                        '</th>' +
                        //'<th >' +
                        //'% Richiesta'+
                        //'</th>' +
                        //'<th >' +
                        //'% Anticipata' +
                        //'</th>' +
                        '<th class="dt-nosort dt-nofilter">&nbsp;</th>' +
                        '</tr>';

                    $('#tblElencoEsiti > thead', elencoPanel).empty();
                    $('#tblElencoEsiti > thead', elencoPanel).html(strThead);

                    var selectedId = '';
                    var param = {
                        dataSource: jsonResult,
                        
                        rowCreator: function(parameter) {
                            var amountDisplay = function(datatmp) {
                                if (datatmp) {
                                    return sdk.utils.text.formatAmmountDecimal(datatmp);
                                }
                                return "0,00";
                            }
                            var dateDisplay = function(datatmp) {
                                if (datatmp) {
                                    return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
                                }
                                return "&nbsp;";
                            }
                            var decodeDivisa = function(datatmp) {
                                if (datatmp) {
                                    return '&nbsp;' + datatmp;
                                }
                                return "";
                            }

                            function statusDisplay(idstato) {
                                return sdk.resource.get('anfa.dettDistinta.statoDistinta.' + idstato);
                            }


                            var actionModifica = function(datatmp) {

                                var classDisabledOpera = 'disabledDiv';
                                if (datatmp.StatoDistinta === 4 || // firmata
                                        datatmp.StatoDistinta === 5 || // in lavorazione
                                        datatmp.StatoDistinta === 6 || // finanziata
                                        datatmp.StatoDistinta === 7 || // parzialmente finanziata
                                        datatmp.StatoDistinta === 8 || // non finanziata
                                        datatmp.StatoDistinta === 10 // in valutazione filiale -->raggruppa stato 4 e 5
                                ) {
                                    classDisabledOpera = '';
                                }

                                // check condition
                                var classDisabledDetail = '';


                                var classDisabledDownloadProposta = 'disabledDiv';
                                if (datatmp && datatmp.IdDocumentoRichiesta && datatmp.IdDocumentoRichiesta !== '') {
                                    classDisabledDownloadProposta = '';
                                }

                                //var classDisabledDownloadAccettazione = 'disabledDiv';
                                //if (datatmp && datatmp.Esito && datatmp.Esito.IdDocumentoContabile && datatmp.Esito.IdDocumentoContabile !== '') {
                                //    classDisabledDownloadAccettazione = '';
                                //}


                                return '<div class="dropdown opera ' +
                                    classDisabledOpera +
                                    '">' +
                                    '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                                    '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>' +
                                    '</button>' +
                                    '<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">' +
                                    '<li><a id="viewAction" class="dropdown-item ' +
                                    classDisabledDetail +
                                    '" href="#">' +
                                    sdk.resource.get('anfa.elencoEsiti.opera.dettaglio') +
                                    '</a></li>' +
                                    '<li><a id="downloadPropostaAction" class="dropdown-item ' +
                                    classDisabledDownloadProposta +
                                    '" href="#">' +
                                    sdk.resource.get('anfa.elencoEsiti.opera.scaricoProposta') +
                                    '</a></li>' +
                                    //'<li><a id="downloadAccettazioneAction" class="dropdown-item ' + classDisabledDownloadAccettazione + '" href="#">' +
                                    //sdk.resource.get('anfa.elencoEsiti.opera.scaricoAccettazione') +
                                    //'</a></li>' +
                                    '</ul>' +
                                    '</div>';

                            }

                            if (parameter) {


                                var importoFinanziato = 0;
                                var importoFinanziatoLabel = "&nbsp;"
                                if (parameter.Esito && parameter.Esito.TotaleFinanziato) {
                                    importoFinanziato = parameter.Esito.TotaleFinanziato;
                                    importoFinanziatoLabel = amountDisplay(parameter.Esito.TotaleFinanziato) +
                                        decodeDivisa(parameter.Divisa);
                                }

                                /* per visulizzare le percentuali in tabella elenco */
                                //var percAnticipata = "";
                                //var percRichiesta = "";
                                //if (parameter.Esito && parameter.Esito.PercentualeFinanziata) {
                                //    percAnticipata = parameter.Esito.PercentualeFinanziata;
                                //}
                                //percRichiesta = parameter.PercentualeRichiesto;
                                //if (parameter.Origin && parameter.Origin == 1) {
                                //    percRichiesta = " - ";
                                //} 



                                var dataAccreditoDisplay = "&nbsp;";
                                var dataAccreditoOrder = "";
                                if (parameter.Esito && parameter.Esito.DataAccredito) {
                                    dataAccreditoDisplay = dateDisplay(parameter.Esito.DataAccredito);
                                    dataAccreditoOrder = parameter.Esito.DataAccredito;
                                }
                                var tmpObject = $('<tr>' +
                                    '<td class="hidden col-sm-1">&nbsp;</td><td class="center col-sm-1" data-order="' +
                                    parameter.DataCreazioneUtc +
                                    '">' +
                                    dateDisplay(parameter.DataCreazioneUtc) +
                                    ' </td> ' +
                                    '<td class="col-sm-1" data-order="' + parameter.NumeroFatture + '">' +
                                    parameter.NumeroFatture +
                                    '</td> ' +
                                    '<td class="money col-sm-1"  data-order="' +
                                    parameter.ImportoTotale +
                                    '">' +
                                    amountDisplay(parameter.ImportoTotale) +
                                    decodeDivisa(parameter.Divisa) +
                                    '</td> ' +
                                    '<td class="money col-sm-1"  data-order="' +
                                    importoFinanziato +
                                    '">' +
                                    importoFinanziatoLabel +
                                    '</td> ' +
                                    '<td class="center col-sm-1" data-order="' +
                                    dataAccreditoOrder +
                                    '">' +
                                    dataAccreditoDisplay +
                                    ' </td> ' +
                                    '<td class="center col-sm-1">' +
                                    statusDisplay(parameter.StatoDistinta) +
                                    ' </td> ' +
                                    //'<td class="center col-sm-1">' +
                                    //percRichiesta +
                                    //' </td> ' +
                                    //'<td class="center col-sm-1">' +
                                    //percAnticipata +
                                    //' </td> ' +
                                    '<td class="center col-sm-1">' +
                                    actionModifica(parameter) +
                                    '</td> ' +
                                    '</tr>');

                                $('#viewAction', tmpObject).click(function() {
                                    dettaglioDo(parameter);
                                });
                                $('#downloadPropostaAction', tmpObject).click(function() {
                                    downloadPropostaDo(parameter);
                                });
                                //$('#downloadAccettazioneAction', tmpObject).click(function() {
                                //    downloadConfermaDo(parameter);
                                //});


                                return tmpObject;

                            }
                            return '';
                        },

                        eventClickElement: $.noop,
                        initialItemSelector: $.noop,
                        selectFirst: false,
                        minElementForNotPagination: 8,
                        resNoRecord: 'Non ci sono distinte',
                        noTopSearch: false,
                        isOrderList: true,
                        columnDefs: [{ targets: 'dt-nosort', orderable: false }],
                        columOrder: [[1, "desc"]]
                    };


                    var tgtTable = $('#tblElencoEsiti', elencoPanel);
                        //.on('order.dt',
                        //    function(e, settings) {

                        //        // debugger;
                        //        if (settings) {
                        //            var jqdtTable = tgtTable.DataTable();
                        //            var orderInfo = jqdtTable.order();
                        //            // orderInfo.splice(1, 0, [2, "desc"]);
                        //            jqdtTable.order(orderInfo[0], [2, "desc"]);
                        //            // jqdtTable.draw();
                        //        }
                        //         debugger;


                        //    });
                    //if ($.fn.DataTable.isDataTable(tgtTable)) {
                    //    tgtTable.DataTable().clear().destroy();
                    //}


                    tgtTable.itemSelectorPage({ param: param });
                    initPrinterEsiti();
                    elencoPanel.show();
                    printelenco.show();
                };


                var getSearchFilter = function() {
                    var toRet = $.extend({}, internalSearchParam);
                    toRet.StatoDistinta = $('#statoDistinta', searchPanel).val();
                    internalSearchParam = toRet;
                    return toRet;
                };

                var doSearch = function() {
                    sdk.utils.pubsub.send('messagePanel.hide');
                    sdk.net.json(urls.urlEsitiList,
                        getSearchFilter(),
                        {
                            successHandler: function(caller, data, jsonResponse, warningObject) {

                                if (jsonResponse) {
                                    populateList(jsonResponse);
                                } else {
                                    emptyList();
                                    sdk.utils.log.errorMessage("ricerca esiti success, ma risultato vuoto");
                                }
                            },
                            errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                                emptyList();
                                sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                            }
                        });
                };

                var rapportoChangeHandler = function(rapportoSelected) {
                    sdk.utils.pubsub.send('messagePanel.hide');
                    if (rapportoSelected) {
                        internalSearchParam.Rapporto = rapportoSelected.Identifier;
                        doSearch();
                    } else {
                        internalSearchParam.Rapporto = null;
                    }
                }


                searchPanel.click(function() {
                    if ($(this).hasClass("collapsed")) {
                        $('#spanIcon', searchPanel).removeClass('icon-expand').addClass('icon-collapse');
                    } else {
                        $('#spanIcon', searchPanel).removeClass('icon-collapse').addClass('icon-expand');
                    }
                });


                $('#btnSearch', searchPanel).click(doSearch);


                sdk.utils.pubsub.register('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);

                // initial visibility
                /*
                elencoPanel.hide();
                printelenco.hide();

                dettaglioPanel.hide();
                */

                sdk.utils.pubsub.send('rapportiPanel.reload', urls.urlRapporti);

                // il dettaglio distinta conferma l'avvenuto caricamento
                sdk.utils.pubsub.register('distinta.load.success',
                    function(distintaIdentifier) {
                        esitoMain.hide();
                        
                        dettaglioPanel.show();
                    });

                $('#btnCloseDettaglio', dettaglioPanel).click(function() {
                    sdk.utils.pubsub.send('messagePanel.hide');
                    dettaglioPanel.hide();
                    esitoMain.show();

                });



                //laura 21/06/2018 per nascondere il btn di chiusura dettaglio (esempio in dettaglio fattura vogliono vedere solo il btn indietro)
                sdk.utils.pubsub.register('elencoesiti.dettagliodistinta.hideBtnclosedettaglio',
                    function (hideBtn) {
                        if (hideBtn) {
                            $('#btnCloseDettaglio', dettaglioPanel).hide();
                        } else {
                            $('#btnCloseDettaglio', dettaglioPanel).show();
                        }
                    });


                //laura 01/08/2018 per nascondere il btn torna a elenco e tenere quello in dettaglio (per avere l'allineamento corretto esporta - torna a elenco)
                //se uso l'evento sopra per nascondere il pulsante non considera l'ordinamento corretto e mette esporta sempre a destra quindi lo imposto visibility hidden
                sdk.utils.pubsub.register('elencoesiti.dettagliodistinta.hiddenBtnTornaElenco',
                    function (hiddenBtn) {
                        if (hiddenBtn) {
                            $('#btnCloseDettaglio', dettaglioPanel).css("visibility","hidden");
                        } else {
                            $('#btnCloseDettaglio', dettaglioPanel).css("visibility", "visible");
                        }
                    });

                sdk.utils.pubsub.register('elencoesiti.dettagliodistinta.TornaElenco',
                    function () {
                        sdk.utils.pubsub.send('messagePanel.hide');
                        dettaglioPanel.hide();
                        esitoMain.show();
                    });


                me.show();


            });


        </script>

    </div>
                    </div>