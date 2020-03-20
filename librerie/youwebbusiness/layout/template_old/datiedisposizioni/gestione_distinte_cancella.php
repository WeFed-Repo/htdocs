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

<div id="fe78e0220efe44b1b21caf27bd2532b6_1">

<div id="8240bfdbaf224f8eaf2ac3d15f550994_1">

    <div id="areaElencoDistinteContainer" style="display: block;">


        <div class="riquadro clearfix">
            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Elenco Distinte Anticipo Fattura</h1>
            </div>
            



<div id="8240bfdbaf224f8eaf2ac3d15f550994_2" style="display: none;">
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
            var me = $('#8240bfdbaf224f8eaf2ac3d15f550994_2');

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
                    window.location.href = '#8240bfdbaf224f8eaf2ac3d15f550994_2';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#8240bfdbaf224f8eaf2ac3d15f550994_2';
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
                    

<div id="8240bfdbaf224f8eaf2ac3d15f550994_1">
    
    <div class="tabellaSelezioneCC">
        <div id="panelMessageRapporti" class="CCselezionato clearfix" style="min-height: 80px; padding-top: 30px; display: none;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 msgInfo">
                <span class="col-md-6">Seleziona Rapporto</span>
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

        var jPanel = $('#8240bfdbaf224f8eaf2ac3d15f550994_1');
        
        pagedRapporti();


        function pagedRapporti() {
            
            var items = [{"Id":null,"IdAzienda":"45081","CodiceIban":"IT11I0503459791000000000399","CodiceAbi":"05034","CodiceCab":null,"CodiceFiliale":"0181","NumeroRapporto":"000002694572","CodiceDivisa":null,"Descrizione":"CC ANTICIPI INFRAGRUPPO 0181000002694572             ","DescrizioneAzienda":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneIntestatario":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneRapporto":"CC ANTICIPI INFRAGRUPPO 0181000002694572             ","DescrizionePersonalizzata":null,"DescrizioneIstituto":"BANCO BPM S.P.A.","CategoriaGruppo":null,"Categoria":"0254","TipoRapporto":"126","Particolare":null,"Identifier":{"Crypt":"OlqepkL20SsMwlGmO1jvcL3cr15s1yFHsXanOADoQQA2d6eC8ZeuU3xGZhTNzLrE","Hash":"FA6DA2A343E9D7321E7D2A5CCDB40BDF358FD00F43AF791F70F0B2FA866C3DB1"},"Status":0},{"Id":null,"IdAzienda":"45081","CodiceIban":"IT31U0503459790000000024330","CodiceAbi":"05034","CodiceCab":null,"CodiceFiliale":"0081","NumeroRapporto":"000902691372","CodiceDivisa":null,"Descrizione":"CC UNICO 0081000902691372                            ","DescrizioneAzienda":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneIntestatario":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneRapporto":"CC UNICO 0081000902691372                            ","DescrizionePersonalizzata":null,"DescrizioneIstituto":"BANCO BPM S.P.A.","CategoriaGruppo":null,"Categoria":"0034","TipoRapporto":"126","Particolare":null,"Identifier":{"Crypt":"Lm0FUm72jFUPJ7XRmg2kgPsQjDPyBlkDh0znOaj7i0o6nlbyVyI257pfq8IMgaBH","Hash":"3D793D4301AF0AAD5C5AE345B4154BA1FEED2145F67F19DA47F6E19219297D4A"},"Status":0}];
            var selectedHash = '';

            var numElementForNotPagination = 8;
            var ctx = '#8240bfdbaf224f8eaf2ac3d15f550994_1';
            

                //***********************************************
                $('.btnSelezioneCC', ctx).click(function () {
                    var that = $(this);
                    if (!that.hasClass('open'))
                        $('.tabSelezioneCC', ctx).slideDown(200);
                    else
                        $('.tabSelezioneCC', ctx).slideUp(300);
                    that.toggleClass('open');
                });

                $('.tabSelezioneCC', ctx).hide();
                var numElem = items.length;
                if (numElem <= 1) {
                    $('.btnSelezioneCC', ctx).removeClass('active');
                    $('.btnSelezioneCC', ctx).addClass('hidden');
                    $('#SelettoreRapportiIcon', ctx).addClass('hidden');
                }
                $('#selezioneRapportoSingolo',ctx).hide();
                $('#panelMessageRapporti',ctx).show();
                //***********************************************

            

                var param = {
                    dataSource: items,
                    rowCreator: function (parameter) {
                        if (parameter) {
                            var rapporto = parameter;
                            return '<tr>' +
                                '<td class="hidden"></td> ' +
                                //'<td>' + (rapporto.NumeroRapporto || '') + '</td> ' +                                
                                //'<td> ' + (rapporto.CodiceAbi || '') + ' </td> ' +
                                //'<td>' + (rapporto.CodiceCab || '') + ' </td> ' +
                                //'<td>' + (rapporto.Descrizione || '') + ' </td> ' +                                

                                '<td>' + (rapporto.DescrizioneRapporto || '') + '</td> ' +                                
                                '<td> ' + (rapporto.CodiceAbi || '') + ' </td> ' +
                                '<td>' + (rapporto.DescrizioneAzienda || '') + ' </td> ' +    

                                '</tr>';
                        }
                        return '';
                    },
                    updateAccount: function (rapportoSelezionato) {
                        return aggiornaIntestazione(rapportoSelezionato);
                    },
                    initialItemSelector: function (index, item) {
                        
                        if (selectedHash !== '' && item && item.Identifier && selectedHash === item.Identifier.Hash) 
                            return true;
                        return false;
                    },
                    selectFirst: true,
                    minElementForNotPagination: numElementForNotPagination,
                    resNoRecord: "Non ci sono rapporti"
                };
                function aggiornaIntestazione(rapportoSelezionato) {

                    var ctxRapportoSel = ctx;
                    if (rapportoSelezionato) {
                        $('#intestazione', ctxRapportoSel).html(rapportoSelezionato.DescrizioneAzienda ? rapportoSelezionato.DescrizioneAzienda : '');
                        $('#agenzia', ctxRapportoSel).html(
                            //rapportoSelezionato.CodiceAbi ? rapportoSelezionato.CodiceAbi : ''
                            (rapportoSelezionato.CodiceAbi ? rapportoSelezionato.CodiceAbi : '') + 
                            (rapportoSelezionato.DescrizioneIstituto ? ' - ' + rapportoSelezionato.DescrizioneIstituto  : '')
                        );
                        $('#iban', ctxRapportoSel).html(rapportoSelezionato.CodiceIban ? rapportoSelezionato.CodiceIban : '');
                        $('#numero', ctxRapportoSel).html(rapportoSelezionato.DescrizioneRapporto ? rapportoSelezionato.DescrizioneRapporto : '');

                        $('#selezioneRapportoSingolo', ctxRapportoSel).show();
                        $('#panelMessageRapporti', ctxRapportoSel).hide();
                        try {
                            sdk.utils.log.debugMessage("Rapporto selector: sending event for rappporto selected");
                            sdk.utils.pubsub.send('anfa.rapportoSelector.rapportoSelected', rapportoSelezionato);
                        } catch (err) {
                            sdk.utils.log.errorMessage("AnfaERR: Rapporto selector sending event for rappporto selected - "+ err.message);
                        }
                }
                else {
                    $('#intestazione', ctxRapportoSel).html('');
                    $('#agenzia', ctxRapportoSel).html('');
                    $('#iban', ctxRapportoSel).html('');
                    $('#numero', ctxRapportoSel).html('');
                }
                $('.btnSelezioneCC', ctx).removeClass('open');
                $('.tabSelezioneCC', ctx).slideUp(300);
            }
            $('#itemSelectorTable', ctx).itemSelectorPage({ param: param });

            //laura 05/06/2018 per impostare il selettore rapporti gia' aperto
            if (items.length > 1) { $('.btnSelezioneCC', ctx).click();}
            
        }
    });
    </script>

</div>




                </div>
                <div id="demoComplete" style="display:none"></div>
                <div id="areaElencoDistinte" class="row form-group" style="display: block;">
                    <div class="col-xs-12 section">
                        <div id="searchElencoDistinte" class="col-xs-12" style="padding-left:0px" role="button" data-toggle="collapse" href="#elencoDistinteCampiRicerca" aria-expanded="true" aria-controls="collapseOne">
                            
                            <h3 class="titleSection">Parametri di Ricerca</h3>
                            <span id="spanIcon" class="icon-replace active pull-right icon-collapse"></span>
                        </div>
                    </div>
                    <div id="elencoDistinteCampiRicerca" class="section panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="margin: 0px;" aria-expanded="true">

                        <div class="row form-group">
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Stato</label>
                                <select id="elencoDistinteCampoRicercaStato" name="elencoDistinteCampoRicercaStato" class="form-control" style="height: 30px">
                                    <option value="">TUTTI</option>
                                    <option value="1">In modifica</option>
                                    <option value="2">Da firmare</option>
                                    <option value="3">Parzialmente firmata</option>
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
                                    <!--<a type="anchor" id="anfaBtnRicercaElencoDistinte" class="icon-replace icon-search active" href="javascript:void(0)" style="margin-top:15px"></a>-->
                                    <button class="btn btn-primary" id="anfaBtnRicercaElencoDistinte" type="button" style="margin-top: 9px">FILTRA</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 section">
                        <div class="col-xs-12" style="padding-left: 0px">
                            <h3 class="titleSection">Elenco Distinte Anticipo Fattura</h3>
                        </div>
                    </div>
                    <div id="" class="section clearfix">
                        <div class="dataTables_wrapper listTable">
                            <div id="tabellaElencoDistinte_wrapper" class="dataTables_wrapper no-footer"><table id="tabellaElencoDistinte" class="table table-striped no-footer dataTable" role="grid" aria-describedby="tabellaElencoDistinte_info">
                                <tbody><tr tmindex="1" role="row" class="odd"><td class="hidden"></td> <td class="col-sm-2 center sorting_1" data-order="20191010">10/10/2019</td> <td class="col-sm-2 ">1 </td> <td class="col-sm-2 money" data-order="255">255,00&nbsp;EUR</td> <td class="col-sm-2 center">Da firmare </td> <td class="col-sm-2 center"><div class="dropdown opera " id="buttonHamburgerList"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button><ul class="dropdown-menu " aria-labelledby="dropdownMenuButton"><li><a id="viewAction" class="dropdown-item " href="#">Dettaglio</a></li><li><a id="deleteAction" class="dropdown-item " href="#">Cancella</a></li><li style="visibility:hidden;display:none"><a id="sendAction" class="dropdown-item disabledDiv" href="#">Crea</a></li><li><a id="signAction" class="dropdown-item " href="#">Firma</a></li></ul></div></td> </tr><tr tmindex="2" role="row" class="even"><td class="hidden"></td> <td class="col-sm-2 center sorting_1" data-order="20191010">10/10/2019</td> <td class="col-sm-2 ">1 </td> <td class="col-sm-2 money" data-order="120">120,00&nbsp;EUR</td> <td class="col-sm-2 center">Da firmare </td> <td class="col-sm-2 center"><div class="dropdown opera " id="buttonHamburgerList"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button><ul class="dropdown-menu " aria-labelledby="dropdownMenuButton"><li><a id="viewAction" class="dropdown-item " href="#">Dettaglio</a></li><li><a id="deleteAction" class="dropdown-item " href="#">Cancella</a></li><li style="visibility:hidden;display:none"><a id="sendAction" class="dropdown-item disabledDiv" href="#">Crea</a></li><li><a id="signAction" class="dropdown-item " href="#">Firma</a></li></ul></div></td> </tr><tr tmindex="3" role="row" class="odd selectedRow"><td class="hidden"></td> <td class="col-sm-2 center sorting_1" data-order="20191010">10/10/2019</td> <td class="col-sm-2 ">1 </td> <td class="col-sm-2 money" data-order="120">120,00&nbsp;EUR</td> <td class="col-sm-2 center">Da firmare </td> <td class="col-sm-2 center"><div class="dropdown opera" id="buttonHamburgerList"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button><ul class="dropdown-menu " aria-labelledby="dropdownMenuButton"><li><a id="viewAction" class="dropdown-item " href="#">Dettaglio</a></li><li><a id="deleteAction" class="dropdown-item " href="#">Cancella</a></li><li style="visibility:hidden;display:none"><a id="sendAction" class="dropdown-item disabledDiv" href="#">Crea</a></li><li><a id="signAction" class="dropdown-item " href="#">Firma</a></li></ul></div></td> </tr><tr tmindex="4" role="row" class="even"><td class="hidden"></td> <td class="col-sm-2 center sorting_1" data-order="20191010">10/10/2019</td> <td class="col-sm-2 ">1 </td> <td class="col-sm-2 money" data-order="120">120,00&nbsp;EUR</td> <td class="col-sm-2 center">In valutazione filiale </td> <td class="col-sm-2 center"><div><a id="viewAction" "="" href="#"><button class="btn btn-secondary" type="button" id="dropdownMenuButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></a></div></td> </tr><tr tmindex="0" role="row" class="odd"><td class="hidden"></td> <td class="col-sm-2 center sorting_1" data-order="20140310">10/03/2014</td> <td class="col-sm-2 ">3 </td> <td class="col-sm-2 money" data-order="101529.8">101.529,80&nbsp;EUR</td> <td class="col-sm-2 center">Anticipata </td> <td class="col-sm-2 center"><div><a id="viewAction" "="" href="#"><button class="btn btn-secondary" type="button" id="dropdownMenuButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></a></div></td> </tr></tbody>
                                <thead><tr role="row"><th class="hidden sorting" tabindex="0" aria-controls="tabellaElencoDistinte" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente" style="width: 0px;">&nbsp;</th><th class="sorting_desc" tabindex="0" aria-controls="tabellaElencoDistinte" rowspan="1" colspan="1" aria-sort="descending" aria-label="Data: ordinamento crescente" style="width: 183px;">Data</th><th class="sorting" tabindex="0" aria-controls="tabellaElencoDistinte" rowspan="1" colspan="1" aria-label="N. fatture: ordinamento crescente" style="width: 182px;">N. fatture</th><th class="sorting" tabindex="0" aria-controls="tabellaElencoDistinte" rowspan="1" colspan="1" aria-label="Totale distinta: ordinamento crescente" style="width: 182px;">Totale distinta</th><th class="sorting" tabindex="0" aria-controls="tabellaElencoDistinte" rowspan="1" colspan="1" aria-label="Stato: ordinamento crescente" style="width: 182px;">Stato</th><th class="dt-nosort dt-nofilter sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;" style="width: 182px;">&nbsp;</th></tr></thead>
                            </table></div>
                        </div>
                    </div>

                </div>
        </div>
        <div id="popupconf"> <div class="riquadro" tm-modal="" style="padding: 0px; margin: 0px; border: none; box-shadow: none;">     <div class="tm-modal" style="z-index: 9999; position: fixed; height: 100%; width: 100%; top: 20px; left: 0px; margin: auto;">         <div class="overlay" style="z-index: 9998; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.4); overflow-x: hidden;">&nbsp;</div>         <div class="tm-modal-layer">             <div class="tm-modal-container section tabSelezioneCC" style="z-index: 9999; max-width: 400px; margin: auto;">                 <div class="riquadro tm-modal-header" style="padding: 0px; margin: 0px; border-top: none; border-right: none; border-bottom: 1px solid rgb(183, 197, 183); border-left: none; border-image: initial; box-shadow: none;">                     <div class="clearfix">                         <div class="flag info">&nbsp;</div>                         <h1>Attenzione</h1>                     </div>                 </div>                 <div class="tm-modal-notify" style="display: none; margin-bottom: 0px; margin-top: 5px;"><h3 class="titleSection"></h3><div></div></div>                 <div class="tm-modal-contents clearfix" style="background: none; overflow-y: auto; max-height: 200px;">                     <br>                      <div class="row" style="padding:10px">Confermi la cancellazione della distinta? </div>                 </div>                 <div class="row tm-modal-footer" style="border-top: 1px solid rgb(183, 197, 183);">                     <div class="col-xs-12 text-right margin-top10">                          <button class="btn btn-primary pull-right" id="popupconfirmOK" type="button">ok</button>                         <input type="button" class="btn btn-primary modal-close" value="Annulla">                     </div>                 </div>             </div>         </div>     </div> </div></div>

        <!--TODO: *VERIFICARE SPSTAMENTO DIV :Spostato qui per compatibilità wizard in testata-->
        <div class="pull-right margin-bottom20" id="areaBottoni">
            <button class="btn btn-primary " id="anfaBtnElencoEsiti" type="button" style="display: inline-block;">Elenco Esiti</button>
        </div>
        <!--TODO: *VERIFICARE SPSTAMENTO DIV :Spostato qui per compatibilità wizard in testata-->
    </div>
    <!--TODO: Spostato sopra *-->
    
    <!--TODO: Spostato sopra *-->



    <div id="areaDettaglioDistintaEntryDistinte" style="display: none;">
        <div id="areaDettaglioDistintaDatiEntryDistinte">










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

<div id="9249c2c36a3743338ab9cf3de1538270_1">

    <div class="riquadro clearfix" id="areaDettaglioDistintaContainer">

        <div id="areaDettaglioDistinta" style="display: block;">
            

<div id="9249c2c36a3743338ab9cf3de1538270_2" style="">
    <div class="pager clearfix pull-right wizardOne" style="display:none">
        <div class="circle_line">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
    </div>
    <div class="pager clearfix pull-right wizardTwo" style="">
        <div class="circle_line">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
    </div>
    <div class="pager clearfix pull-right wizardThree" style="display:none">
        <div class="circle_line">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle ">&nbsp;</div>
    </div>
    <div class="pager clearfix pull-right wizardFour" style="display:none">
        <div class="circle_line">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
        <div class="circle current_page">&nbsp;</div>
    </div>
    
    <script type="text/javascript">
        $(function () {
            var me = $('#9249c2c36a3743338ab9cf3de1538270_2');
            var step1 = $('.pager.clearfix.pull-right.wizardOne', me);
            var step2 = $('.pager.clearfix.pull-right.wizardTwo', me);
            var step3 = $('.pager.clearfix.pull-right.wizardThree', me);
            var step4 = $('.pager.clearfix.pull-right.wizardFour', me);

            var hideAllStep = function () {
                step1.hide();
                step2.hide();
                step3.hide();
                step4.hide();
            };

            var init = function () {
                show();
            };
            var show = function () {
                me.show();
            };
            
            

            var setSpecificWizard = function (parameter) {
                hideAllStep();
                if (parameter) {
                    if (parameter > 0) {
                        switch (parameter) {
                            case 1:
                                step1.show();
                                break;
                            case 2:
                                step2.show();
                                break;
                            case 3:
                                step3.show();
                                break;
                            case 4:
                                step4.show();
                                break;
                            default:
                                step4.show();
                                break;
                        }
                    }
                }
                
            };
            init();
            //AREA REGISTER
            sdk.utils.pubsub.register('wizardcircleline.setValue', setSpecificWizard);
            //AREA REGISTER
        });
    </script>
</div>

            <div class="clearfix">
                <div class="flag riepilogo">&nbsp;</div>

                        <h1> Dettaglio Distinta Anticipo Fattura </h1>
            </div>



            
<div id="9249c2c36a3743338ab9cf3de1538270_3" style="display: none;">
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
            var me = $('#9249c2c36a3743338ab9cf3de1538270_3');

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
                    window.location.href = '#9249c2c36a3743338ab9cf3de1538270_3';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#9249c2c36a3743338ab9cf3de1538270_3';
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


            <div>
                <div>
                    <div class="section">
                        <div id="areaDettaglioDistintaTestata" class="row ">

                            <!--sezione sinistra dettaglio dati ordinante-->
                            <div class="col-xs-6 white-block">
                                <div class="col-xs-12">
                                    <div class="text-center">
                                        <h1>Ordinante</h1>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5">Intestato a </div>
                                    <div class="col-xs-7"><label class="control-label" id="dettDistintaRagioneSociale" style="padding: 0">ARCHIMEDE SERVIZI S.R.L.</label></div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5">Rapporto di anticipo</div>
                                    <div class="col-xs-7"><label class="control-label" id="dettDistintaConto">IT11I0503459791000000000399</label></div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5">Banca</div>
                                    <div class="col-xs-7"><label class="control-label" id="dettDistintaDescrBanca">05034 - BANCO BPM S.P.A.</label></div>
                                </div>
                                
                            </div>

                            <!--sezione destra dettaglio dati distinta-->
                            <div class="col-xs-6 white-block">
                                <div class="col-xs-12">
                                    <div class="text-center">
                                        <h1>Dati Distinta</h1>
                                    </div>
                                </div>

                                
                                
                                
                                
                                <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <div><strong>Richiesta di anticipo fattura</strong></div>
                                        </div>
                                    </div>
                                    <div class="row" id="dettdistintaBoxDatiRichiesta">

                                        <div class="col-xs-12" style="padding-top: 5px;">
                                            <div class="col-xs-6">Percentuale richiesta anticipo</div>
                                            <div class="col-xs-6">
                                                <label class="control-label" id="dettDistintapercentualeRichiestaAnticipo">10</label><strong id="dettDistintapercentualeanticipo-percentuale">%</strong>
                                                            <!--in modifica posso editare la percentuale di anticipo cliccando sull'icona matita; dovrebbe comparire la text valorizzata con la percentale impostata -->
                                                            <!--vicino i pulsantini di annulla e conferma da definire -->
                                                            <a type="anchor" id="dettDistintaPercentualeRichiestaAnticipoEdit" class="icon-replace icon-edit active" href="javascript:void(0)" style="display: none;">&nbsp;</a>
                                                            <input type="text" id="dettDistintaPercentualeRichiestaAnticipoEditText" name="dettDistintapercentualeRichiestaAnticipoEdit" style="width: 50px; display: none;" maxlength="3" onkeypress="return sdk.utils.text.onlyIntNumbers(event)">
                                                            <a type="anchor" id="dettDistintaPercentualeRichiestaAnticipoEditConf" class="icon-replace icon-check active" href="javascript:void(0)" style="display: none;">&nbsp;</a>
                                                            <a type="anchor" id="dettDistintaPercentualeRichiestaAnticipoEditUndo" class="icon-replace icon-close active" href="javascript:void(0)" style="display: none;">&nbsp;</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12" style="padding-top: 5px;padding-bottom: 5px">
                                            <div class="col-xs-6">Importo totale richiesto</div>
                                            <div class="col-xs-6"><label class="control-label" id="dettDistintaImportoTotaleRichiesto">12,00&nbsp;EUR</label></div>
                                        </div>
                                    </div>

                                <div class="col-xs-12">
                                    <div class="col-xs-6">N. Fatture</div>
                                    <div class="col-xs-6"><label class="control-label" id="dettDistintaNumeroFatture">1</label></div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">Stato</div>
                                    <div class="col-xs-6">
                                        <label class="control-label" id="dettDistintaStato">Da firmare</label>
                                        <input type="hidden" id="dettDistintaIdStato">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">Data creazione</div>
                                    <div class="col-xs-6"><label class="control-label" id="dettDistintaDataCreazione">10/10/2019</label></div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-6">Totale distinta</div>
                                    <div class="col-xs-6"><label class="control-label" id="dettDistintaTotale">120,00</label>&nbsp;<label class="control-label" id="dettDistintaValuta">EUR</label></div>
                                </div>

                                
                                

                            </div>

                            



                        </div>

                        
                    </div>
                </div>
            </div>
        </div>

        <div id="areaDettaglioDistintaElencoFatture" class="row form-group" style="display: block;">

            <div class="col-xs-12 section">
                <div class="col-xs-12" style="padding-left: 0px">
                    <h3 class="titleSection">Elenco Fatture</h3>
                </div>
            </div>



            <div id="" class="section clearfix">
                <div class="dataTables_wrapper listTable">
                    <div id="tableFatture_wrapper" class="dataTables_wrapper no-footer"><table id="tableFatture" class="table table-striped no-footer dataTable" role="grid" aria-describedby="tableFatture_info">
                        <tbody><tr tmindex="0" role="row" class="odd"><td class="hidden"></td> <td class="col-sm-2">Archimede Servizi srl </td> <td class="">12 </td> <td class="center sorting_1" data-order="20191001">01/10/2019</td> <td class="center" data-order="20191031">31/10/2019</td> <td class="center">NO </td> <td class="money" data-order="100">100,00&nbsp;EUR</td> <td class="money" data-order="120">120,00&nbsp;EUR</td> <td class="center"><div class="dropdown opera  disabledDiv"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button><ul class="dropdown-menu " aria-labelledby="dropdownMenuButton"><li><a id="deleteAction" class="dropdown-item disabledDiv" href="#">Cancella fattura</a></li><li><a id="editAction" class="dropdown-item disabledDiv" href="#">Modifica fattura</a></li></ul></div></td> </tr></tbody>
                        <thead><tr role="row" class=""><th class="hidden sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente" style="width: 0px;">&nbsp;</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Debitore: ordinamento crescente" style="width: 149px;">Debitore</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="N. Fattura: ordinamento crescente" style="width: 97px;">N. Fattura</th><th class="sorting_asc" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Emissione: ordinamento decrescente" style="width: 103px;" aria-sort="ascending">Emissione</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Scadenza: ordinamento crescente" style="width: 95px;">Scadenza</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Split Payment: ordinamento crescente" style="width: 139px;">Split Payment</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Imponibile: ordinamento crescente" style="width: 104px;">Imponibile</th><th class="sorting" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="Totale Fattura: ordinamento crescente" style="width: 140px;">Totale Fattura</th><th class="dt-nosort dt-nofilter sorting_disabled" tabindex="0" aria-controls="tableFatture" rowspan="1" colspan="1" aria-label="&amp;nbsp;" style="width: 36px;">&nbsp;</th></tr></thead>
                    </table></div>
                </div>
            </div>
        </div>

    </div>

    <div id="areaDettaglioDistintaBtn" style="display: block;">

            <button class="btn btn-primary pull-right" id="anfaBtnElencoDistinteBack" type="button">ELENCO DISTINTE</button>

        
        <button class="btn btn-primary pull-right" id="anfaBtnFirmaDistinta" type="button" style="visibility: hidden; display: none">FIRMA</button>

        <button class="btn btn-primary pull-right disabled" id="anfaBtnGeneraDistinta" type="button" style="visibility: hidden;">CREA</button>
        <button class="btn btn-primary pull-right disabled" id="anfaBtnAggiungiFAttura" type="button" style="visibility: hidden; display: none;">AGGIUNGI FATTURA</button>


    </div>



    <div id="areaEditAddFattura" style="display: none;">
    </div>
    <div id="areaEditAddFatturaAnnulla" style="display: none;">
        <button class="btn btn-primary pull-right" id="anfaBtnAnnulla" type="button">ANNULLA</button>
    </div>

    <div id="popupconf">
    </div>

    <script type="text/javascript">
    $(function () {
        var ctx = '#9249c2c36a3743338ab9cf3de1538270_1';

        $('#areaDettaglioDistinta', ctx).hide();
        $('#areaDettaglioDistintaElencoFatture', ctx).hide();
        $('#areaDettaglioDistintaBtn', ctx).hide();
        $('#areaEditAddFatturaAnnulla', ctx).hide();



        var distintaKey = {"Crypted":"N1JwmcPDUTorHUV6tNCJRQSnwt99neJYExlq3NdDXaAtVaiCcb9IoY8Qm63gllbHPHAMhVJSAyWKZXjTLhRbH4h2oKEH02a/HQulOigHrSGp8uQsxO41WBbe4quyogTcvCOccnurFNadEQc/qvro/w=="};
        //Section url
        var headUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/ReadHead";
        var newheadUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/ReadHead";

        var listItemsUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/ListItems";
        var newlistItemsUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/ListItems";


        var addItemUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/AddItem";
        var newaddItemUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/AddItem";

        var deleteItemUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/DeleteItem";
        var newdeleteItemUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/DeleteItem";

        var newAggiungiFatturaUrl = "/Youbiz.Sdk.Web/AnFa/DataEntry/EditAggiungiFattura";
        var editAggiungiFatturaUrl="/Youbiz.Sdk.Web/AnFa/ListaDistinte/EditAggiungiFattura";

        var editFatturaUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/Update";
        var neweditFatturaUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/Update";

        var deleteDistintaUrl = "/Youbiz.Sdk.Web/AnFa/ListaDistinteService/Delete";
        var newdeleteDistintaUrl = "/Youbiz.Sdk.Web/AnFa/DataEntryService/Delete";

        var sendDistintaUrl = '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/Send';
        var newSendDistintaUrl = '/Youbiz.Sdk.Web/AnFa/DataEntryService/Send';

        var firmaDistintaUrl = '/Youbiz.Sdk.Web/AnFa/DigSig/SignDistintaFromDetail';




        // load head in successHandler chiama anche getBodyDistinta
        //getHeadDistinta(headUrl, distintaKey);
        RefreshDistinta(headUrl, distintaKey,false);

        var rapportoDistinta;


        function showDetail() {
            sdk.utils.pubsub.send('messagePanel.hide');
            $('#areaDettaglioDistintaContainer', ctx).show();
            $('#areaDettaglioDistintaBtn', ctx).show();
            //sdk.utils.pubsub.send('anfa.detail.showbackentrydistinte');
            $('#areaEditAddFattura', ctx).hide();
            $('#areaEditAddFatturaAnnulla', ctx).hide();
        }

        function showEditFattura() {
            sdk.utils.pubsub.send('messagePanel.hide');
            $('#areaDettaglioDistintaContainer', ctx).hide();
            $('#areaDettaglioDistintaBtn', ctx).hide();
            //sdk.utils.pubsub.send('anfa.detail.showbackentrydistinte');
            $('#areaEditAddFattura', ctx).show();
            $('#areaEditAddFatturaAnnulla', ctx).show();
        }

        //function getHeadDistinta(url,parameter) {
        function RefreshDistinta(url, parameter, goToFirma) {
            //chiamata per getHead distinta (mapping dati head) e getBody (elenco fatture)
            sdk.net.call(url, parameter, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("anfa detail head distinta OK");
                    var toret = jsonResponse;
                    mappingHeadDistinta(toret);
                    //getBodyDistinta("/Youbiz.Sdk.Web/AnFa/Distinta/ListItems", parameter, jsonResponse);
                    getBodyDistinta(listItemsUrl, parameter, jsonResponse);

                    //nascondo tutto cio che non riguarda il dettaglio distinta e mostro l'area dettaglio distinta
                    showDetail();

                    if (goToFirma) {
                        //se utente abilitato alla firma... procedo...
                        if ((toret.StatoDistinta == 2 || toret.StatoDistinta == 3) && toret.StatoFirmaUser == 2
                        ) { //distinta generata o parzialmentefirmata e utente must sign -->posso firmare
                            sdk.utils.navigateFormByParamNew(
                                {
                                    action: firmaDistintaUrl,
                                    parameters: parameter
                                });
                        } else {
                            //laura 02/07/2018 messaggio per utente non firmatario
                            sdk.utils.pubsub.send('messagePanel.renderError', {
                                Messages:
                                [{
                                    ErrorMessage: 'Distinta creata correttamente.'
                                    , ErrorMessageRes: "anfa.distinta.creazioneoknonfirmatario"
                                    , Severity: 1
                                },
                                    {
                                        ErrorMessage: 'Per procedere con l\'invio è necessario Firmare la distinta tramite la funzione "Autorizza Distinte Anticipo Fatture" presente nel menù "Dati e disposizioni - Gestione Distinte".'
                                        , ErrorMessageRes: "anfa.distinta.creazioneoknonfirmatario1"
                                        , Severity: 1
                                    }
                                ]
                            });
                        }
                    }
                },

                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa detail head distinta ERROR ");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                    $('#areaDettaglioDistinta', ctx).show();
                    $('#areaDettaglioDistintaTestata', ctx).hide();

                }
            });



        }

        function getBodyDistinta(url, parameter, distinta) {
            //Promemoria per usare il js popolamento tabella ultima versione...
            sdk.net.call(url, parameter, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("anfa detail body list fatture OK");

                    var toret = jsonResponse;
                    if (toret) {
                        listPopulate(toret.Items, distinta);
                    }

                },

                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa detail body list fatture ERROR ");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                }
            });
        }


        var saldoDisplay = function (datatmp) {
            if (datatmp) {
                return sdk.utils.text.formatAmmountDecimal(datatmp) ;
            }
            return "0,00";
        }

        var dataDisplay = function (datatmp) {
            if (datatmp) {
                return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
            }
            return "&nbsp;";
        }
        var decodeDivisa = function (datatmp) {
            if (datatmp) {
                return '&nbsp;' + datatmp;
            }
            return "";
        }

        var decodSplitPayment = function (datatmp) {
            if (datatmp) {
                switch (datatmp) {
                    case 1:
                        return 'SI';
                    case 2:
                        return 'NO';
                    default:
                        return '&nbsp;';
                }
            }
            return '&nbsp;';
        }


        function mappingHeadDistinta(distinta) {
            if (distinta) {
                //??? dati del rapporto da definire
                if (distinta.Rapporto) {
                    $("#dettDistintaRagioneSociale",ctx).html(distinta.Rapporto.DescrizioneAzienda ? distinta.Rapporto.DescrizioneAzienda : '');
                    $("#dettDistintaDescrBanca", ctx).html(
                        (distinta.Rapporto.CodiceAbi ? distinta.Rapporto.CodiceAbi : '') +
                        (distinta.Rapporto.DescrizioneIstituto ? ' - ' + distinta.Rapporto.DescrizioneIstituto  : '')
                    );
                    $("#dettDistintaConto", ctx).html(distinta.Rapporto.CodiceIban ? distinta.Rapporto.CodiceIban : '');
                    $("#dettDistintaDescrConto", ctx).html(distinta.Rapporto.DescrizioneRapporto ? distinta.Rapporto.DescrizioneRapporto : '');
                    //$("#dettDistintaDescrFiliale",ctx).html(distinta.Rapporto.CodiceCab ? distinta.Rapporto.CodiceCab : ''); //recuperare la descrizione della filiale

                    rapportoDistinta = distinta.Rapporto;
                }

                $("#dettDistintaNumeroFatture", ctx).html((distinta.NumeroFatture == null ? '' : distinta.NumeroFatture));
                $("#dettDistintaTotale", ctx).html(saldoDisplay(distinta.ImportoTotale));

                $("#dettDistintaValuta", ctx).html((distinta.Divisa == null ? '' : distinta.Divisa));
                $("#dettDistintaDataCreazione", ctx).html((distinta.DataCreazioneUtc == null ? '' : sdk.utils.text.formatDateTime(moment(distinta.DataCreazioneUtc).local(), 'DD/MM/YYYY')));

                if (distinta.Origin && distinta.Origin == 1) {
                    $("#dettDistintapercentualeRichiestaAnticipo", ctx).html(" - ");
                    $("#dettDistintapercentuale", ctx).html("");
                    $("#dettDistintaImportoTotaleRichiesto", ctx).html(" - ");
                    $("#dettDistintapercentualeanticipo-percentuale", ctx).html("");
                    
                } else {
                    $("#dettDistintapercentualeRichiestaAnticipo", ctx).html((distinta.PercentualeRichiesto == null ? '' : distinta.PercentualeRichiesto));
                    $("#dettDistintaImportoTotaleRichiesto", ctx).html((distinta.PercentualeRichiesto == null ? '0' : saldoDisplay(distinta.ImportoTotale * distinta.PercentualeRichiesto / 100) + decodeDivisa(distinta.Divisa)));
                }


                //importo richiesto sempre calcolato sulla percentuale richiesta
                //$("#dettDistintaImportoTotaleRichiesto", ctx).html((distinta.PercentualeRichiesto == null ? '0' : saldoDisplay(distinta.ImportoTotale * distinta.PercentualeRichiesto / 100) + decodeDivisa(distinta.Divisa)));

                $("#dettDistintaStato", ctx).html(sdk.resource.get('anfa.dettDistinta.statoDistinta.' + distinta.StatoDistinta));
                $("#dettDistintaIdStato", ctx).html(distinta.StatoDistinta);

                getEditPercentualeAnticipo(distinta.StatoDistinta);

                $('#areaDettaglioDistinta', ctx).show();


                var statoAttualeDistinta = $("#dettDistintaIdStato", ctx).text();
                if (statoAttualeDistinta > 1) {
                    $("#anfaBtnAggiungiFAttura", ctx).addClass("disabled");
                    $("#anfaBtnAggiungiFAttura", ctx).css("visibility", "hidden");
                    $("#anfaBtnAggiungiFAttura", ctx).css("display", "none");
                    if ((distinta.StatoFirmaUser == 2 && distinta.StatoFirma > 2) || (distinta.StatoFirmaUser != 2)) { //mostro elenco distinte solo dopo stato firmato o se non sono abilitato alla firma
                        $("#anfaBtnElencoDistinte", ctx).css("visibility", "");
                        $("#anfaBtnElencoDistinte", ctx).css("display", "");
                    }

                    //$("#dettdistintaBoxDatiRichiesta", ctx).css("background-color","");
                    $("#dettdistintaBoxDatiRichiesta", ctx).removeClass("anfadati-richiestaanticipo");   //laura 21/06/2018 da gestire con class
                } else {
                    $("#anfaBtnAggiungiFAttura", ctx).removeClass("disabled");
                    $("#anfaBtnAggiungiFAttura", ctx).css("visibility", "");
                    $("#anfaBtnAggiungiFAttura", ctx).css("display", "");
                    $("#anfaBtnElencoDistinte", ctx).css("visibility", "hidden");
                    $("#anfaBtnElencoDistinte", ctx).css("display", "none");
                    //$("#dettdistintaBoxDatiRichiesta", ctx).css("background-color", "#F6F6F6");   //laura 21/06/2018 da gestire con class
                    $("#dettdistintaBoxDatiRichiesta", ctx).addClass("anfadati-richiestaanticipo");

                }

                if (distinta.StatoDistinta >= 2 ) {   //distinta generata o stati successivi
                    $("#anfaBtnGeneraDistinta", ctx).addClass("disabled");
                    $("#anfaBtnGeneraDistinta", ctx).css("visibility", "hidden");
                    //$("#anfaBtnGeneraDistinta", ctx).css("display", "none");                      //laura 21/06/2018 da gestire con class
                }

                //controllo lo stato della distinta per abilitare il pulsante firma
                //16/06/2018 laura : pulsante firma non piu' visibile
                $("#anfaBtnFirmaDistinta", ctx).addClass("disabled");
                if ((distinta.StatoDistinta == 2 || distinta.StatoDistinta == 3) && distinta.StatoFirmaUser == 2)
                {   //distinta generata o parzialmentefirmata e utente must sign -->posso firmare
                    $("#anfaBtnFirmaDistinta", ctx).removeClass("disabled");
                }

                setWizard(distinta.StatoDistinta);

            }

        }

        var setWizard = function (parameter) {
            //Richiesta di mettere sempre step due
            sdk.utils.pubsub.send('wizardcircleline.setValue', 2);
        }

        function getEditPercentualeAnticipo(idstato) {
            // debugger;
            $("#dettDistintapercentualeRichiestaAnticipo", ctx).show();
            $("#dettDistintaPercentualeRichiestaAnticipoEdit", ctx).hide();
            $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).hide();
            $("#dettDistintaPercentualeRichiestaAnticipoEditConf", ctx).hide();
            $("#dettDistintaPercentualeRichiestaAnticipoEditUndo", ctx).hide();

            if (idstato) {
                switch (idstato) {
                    case 1: // in modifica
                        //$("#dettDistintaPercentualeRichiestaAnticipoEdit", ctx).show();
                        showEditPercentualeAnticipo(true);
                        break;
                    default:
                        showEditPercentualeAnticipo(false);
                        break;
                }
            }
        }

        function showEditPercentualeAnticipo(show) {
            if (show) {
                $("#dettDistintapercentualeRichiestaAnticipo", ctx).hide();
                $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).show();
                $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).val($("#dettDistintapercentualeRichiestaAnticipo", ctx).text());
                $("#dettDistintaPercentualeRichiestaAnticipoEditConf", ctx).show();
                $("#dettDistintaPercentualeRichiestaAnticipoEditUndo", ctx).show();
                $("#dettDistintaPercentualeRichiestaAnticipoEdit", ctx).hide();
            } else {
                //$("#dettDistintapercentualeRichiestaAnticipo", ctx).html($("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).val());
                $("#dettDistintapercentualeRichiestaAnticipo", ctx).show();
                $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).hide();
                $("#dettDistintaPercentualeRichiestaAnticipoEditConf", ctx).hide();
                $("#dettDistintaPercentualeRichiestaAnticipoEditUndo", ctx).hide();
                //$("#dettDistintaPercentualeRichiestaAnticipoEdit", ctx).show();
            }
        }

        $("#dettDistintaPercentualeRichiestaAnticipoEdit", ctx).click(function () {
            showEditPercentualeAnticipo(true);
        });


        function percentualeRichiestaAnticipoEditUndo() {
            
            $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).val($("#dettDistintapercentualeRichiestaAnticipo", ctx).text());
            calcoloImportoRichiesto();
        }

        $("#dettDistintaPercentualeRichiestaAnticipoEditUndo", ctx).click(function () {
            percentualeRichiestaAnticipoEditUndo();
        });

        $("#dettDistintaPercentualeRichiestaAnticipoEditConf", ctx).click(function () {
            // alert('modificare percentuale richiesta anticipo');
            // RefreshDistinta(headUrl, distintaKey);
            if (!ctrlPercentualeRichiestaAnticipo()) {
                return;
            }
            updateDistinta();

        });

        $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).on('blur', function (e) {
            //alert('calcolo importo');
            if (!ctrlPercentualeRichiestaAnticipo()) {
                return;
            }
            calcoloImportoRichiesto();
        });

        function updateDistinta() {



            var distinta = {
                Identifier: distintaKey,
                PercentualeRichiesto: $('#dettDistintaPercentualeRichiestaAnticipoEditText', ctx).val()
            };

            //mostro la parte di data entry con il rapporto selezionato
            sdk.net.call(editFatturaUrl, distinta, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    // sdk.utils.log.debugMessage("anfa edit distinta OK");
                    RefreshDistinta(headUrl, distintaKey,false);
                },

                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa edit distinta ERROR");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                }
            });
        }

        function calcoloImportoRichiesto() {
            var percEdit = $("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).val().trim();
            var importototale = $("#dettDistintaTotale", ctx).text();
            var importoCalc = parseFloat((importototale.replace(/\./g, "").replace(/,/g, "."))) * Number(percEdit) / 100;
            var importoVis = sdk.utils.text.formatAmmountDecimal(importoCalc);

            $("#dettDistintaImportoTotaleRichiesto", ctx).html((percEdit == null || percEdit == '' || percEdit == 0 ? '0,00' : importoVis) + ' ' + $("#dettDistintaValuta", ctx).text());
        }

        //prova popUp
        var popUpConfirm = function (testo, idDivRef, funcOk) {
            var options = {
                html: function() {
                    return ' <div class="row" style="padding:10px">' + testo + '</div>';
                },
                footer: function() {
                    return ' <button class="btn btn-primary pull-right" id="popupconfirmOK" type="button">ok</button>';
                },
                title: 'Attenzione',
                titleIcon: 'flag info',
                width: 400,
                height: 200,
                measure: 'px'
            }

            var popup = sdk.popup($(idDivRef, ctx), options);

            $("#popupconfirmOK", popup.element).click(function() {
                popup.close();
                popup.dispose();
                var funcTodo = funcOk;
                funcTodo();
            });
            return popup;
        };

        function listPopulate(jsonResult, distinta) {
            var fattureCount = jsonResult.length;
            var ctxInternal = '#9249c2c36a3743338ab9cf3de1538270_1';
            $('#areaDettaglioDistintaElencoFatture', ctxInternal).show();
            initTables();
            var isOld = false;
            if (distinta && distinta.Origin && distinta.Origin == 1) {
                isOld = true;
            }
            var selectedId = '';
            var param = {
                dataSource: jsonResult,
                rowCreator: function (parameter) {

                    //var saldoDisplay = function (datatmp) {
                    //    if (datatmp) {
                    //        return sdk.utils.text.formatAmmountDecimal(datatmp) ;
                    //    }
                    //    return "0,00";
                    //}

                    //var dataDisplay = function (datatmp) {
                    //    if (datatmp) {
                    //        return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
                    //    }
                    //    return "&nbsp;";
                    //}

                    var dataOrderDisplay = function (datatmp) {
                        if (datatmp) {
                            return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'YYYYMMDD');
                        }
                        return "&nbsp;";
                    }

                    //var decodeDivisa = function (datatmp) {
                    //    if (datatmp) {
                    //        return '&nbsp;' + datatmp;
                    //    }
                    //    return "";
                    //}



                    // lo stato governa l'active function

                    //switch ($("#dettDistintaIdStato").text()) {
                    //case "1": // in modifica
                    //    return '<a type="anchor" id="editAction" class="icon-replace icon-edit active" href="javascript:void(0)">&nbsp;</a>'
                    //        + '<a type="anchor" id="deleteAction" class="icon-replace icon-delete active" href="javascript:void(0)">&nbsp;</a>'
                    //        + '<a type="anchor" id="viewAction" class="icon-replace icon-search active" href="javascript:void(0)">&nbsp;</a>';
                    //default:
                    //    return '<a type="anchor" id="viewAction" class="icon-replace icon-search active" href="javascript:void(0)">&nbsp;</a>';

                    //}

                    var statoAttualeDistinta = $("#dettDistintaIdStato", ctx).text();
                    var actionModifica = function (datatmp) {
                        var classdisabled = '';
                        //if (fattureCount <= 1 || statoAttualeDistinta > 1) { //disabilito funzione cancella
                        //    classdisabled = 'disabledDiv';
                        //}
                        if (statoAttualeDistinta > 1) { //disabilito funzione cancella solo in base allo stato, se presente una sola fattura posso cancellare con msg di cancellazione anche distinta
                            classdisabled = 'disabledDiv';
                        }


                        var classDisabledOpera = '';
                        if (statoAttualeDistinta == 0 || statoAttualeDistinta > 1) {    //distinta passata in SGS
                            classDisabledOpera = 'disabledDiv';
                        }

                        var classDisabledModifica = '';
                        if (statoAttualeDistinta == 0 || statoAttualeDistinta > 1) {    //distinta passata in SGS
                            classDisabledModifica = 'disabledDiv';
                        }

                        return '<div class="dropdown opera  ' + classDisabledOpera +'">' +
                            '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                            '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>' +
                            '</button>' +
                            '<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">' +
                            //'<li><a id="viewAction" class="dropdown-item" href="#">' + sdk.resource.get('anfa.dettDistinta.elencofatture.opera.dettaglio') +'</a></li>' +
                            '<li><a id="deleteAction" class="dropdown-item ' + classdisabled + '" href="#">' + sdk.resource.get('anfa.dettDistinta.elencofatture.opera.cancella') +'</a></li>' +
                            '<li><a id="editAction" class="dropdown-item ' + classDisabledModifica + '" href="#">' + sdk.resource.get('anfa.dettDistinta.elencofatture.opera.modifica') +'</a></li>' +
                            '</ul>' +
                            '</div>';
                    }

                    var fatturaDelete = function (invoice) {
                        // debugger;
                        var msgConfirmCancella = '';
                        var popup;
                        if (fattureCount <= 1) {
                            //return false;
                            msgConfirmCancella = 'Attenzione! Cancellando la fattura verr&#224; eliminata anche la distinta creata: vuoi proseguire? ';
                            //cancellazione fattura e distinta --> chiamo elimina distinta
                            popup = popUpConfirm(
                                msgConfirmCancella,
                                '#popupconf',
                                function () {
                                    //cancellazione della distinta
                                    //se ok e vengo da data entry torno in data entry.. se vegno da elenco distinte torno a elenco distitnte
                                    sdk.net.call(deleteDistintaUrl,
                                        distintaKey,
                                        {
                                            successHandler: function (me, data, jsonResponse, warningObject) {
                                                sdk.utils.log.debugMessage("anfa detail distinta DELETE DISTINTA (cancellazione unica fattura prensente) OK");

                                                    sdk.utils.pubsub.send('anfa.elencoDistinte.Refresh');

                                            },

                                            errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                                                sdk.utils.log.debugMessage("anfa detail distinta DELETE DISTINTA (cancellazione unica fattura prensente) ERROR");
                                                sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                            }
                                        });
                                });

                        } else {
                            //cancellazione fattura con popUpConfirm

                            msgConfirmCancella = 'Confermi la cancellazione della fattura? ';

                            popup = popUpConfirm(
                                msgConfirmCancella,
                                '#popupconf',
                                function () {
                                    // tenta cancellazione della fattura
                                    //se ok chiama il refresh distinta che ricarirca dati distinta e elenco fatture
                                    sdk.net.call(deleteItemUrl,
                                        invoice.Key,
                                        {
                                            successHandler: function(me, data, jsonResponse, warningObject) {
                                                sdk.utils.log.debugMessage("anfa detail distinta DELETE FATTURA OK");
                                                RefreshDistinta(headUrl, distintaKey,false);
                                            },

                                            errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                                                sdk.utils.log.debugMessage("anfa detail distinta DELETE FATTURA ERROR");
                                                sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                            }
                                        });
                                });

                        }


                        popup.open();


                        //if (window.confirm('Vuoi procedere con la cancellazione della fattura?')) {
                        // // tenta cancellazione della fattura
                        // //se ok chiama il refresh distinta che ricarirca dati distinta e elenco fatture
                        // sdk.net.call(deleteItemUrl, invoice.Key, {
                        //     successHandler: function (me, data, jsonResponse, warningObject) {
                        //         sdk.utils.log.debugMessage("anfa detail distinta DELETE FATTURA OK");
                        //         RefreshDistinta(headUrl, distintaKey);
                        //     },

                        //     errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                        //         sdk.utils.log.debugMessage("anfa detail distinta DELETE FATTURA ERROR");
                        //         sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        //     }
                        //    });
                        // }
                    };

                    var fatturaDetail = function(item) {
                        dettaglioFattura(item.Key);
                    };

                    var fatturaEdit = function(item) {
                        editFattura(item.Key);
                    };


                    if (parameter) {

                        

                        var tmpObject = $('<tr>' +
                            '<td class="hidden"></td> ' +
                            '<td class="col-sm-2" >' + (parameter.Debitore.RagioneSociale || '') + ' </td> ' +
                            '<td class="" >' +(parameter.NumeroFattura || '') +' </td> ' +
                            '<td class="center"  data-order="' +dataOrderDisplay(parameter.DataEmissione) +'">' +dataDisplay(parameter.DataEmissione) +' </td> ' +
                            '<td class="center"  data-order="' + dataOrderDisplay(parameter.DataScadenza) + '">' + dataDisplay(parameter.DataScadenza) + ' </td> ' +
                            '<td class="center" >' + decodSplitPayment(parameter.SplitPagamento) + ' </td> ' +
                            '<td class="money"  data-order="' + parameter.ImportoImponibile + '">' + saldoDisplay(parameter.ImportoImponibile) + decodeDivisa(parameter.Divisa) + '</td> ' +
                            '<td class="money"  data-order="' +parameter.ImportoFattura +'">' +saldoDisplay(parameter.ImportoFattura) +decodeDivisa(parameter.Divisa) +'</td> ' +
                            '<td class="center" >' +actionModifica(parameter) +'</td> ' +
                            '</tr>');

                        if (isOld) {
                            tmpObject = $('<tr>' +
                                '<td class="hidden"></td> ' +
                                '<td class="col-sm-2" >' + (parameter.Debitore.RagioneSociale || '') + ' </td> ' +
                                '<td class="" >' +(parameter.NumeroFattura || '') +' </td> ' +
                                '<td class="center"  data-order="' +dataOrderDisplay(parameter.DataEmissione) +'">' +dataDisplay(parameter.DataEmissione) +' </td> ' +
                                '<td class="center"  data-order="' + dataOrderDisplay(parameter.DataScadenza) + '">' + dataDisplay(parameter.DataScadenza) + ' </td> ' +
                                '<td class="center" > - </td> ' +
                                '<td class="money"  > - </td> ' +
                                '<td class="money"  data-order="' +parameter.ImportoFattura +'">' +saldoDisplay(parameter.ImportoFattura) +decodeDivisa(parameter.Divisa) +'</td> ' +
                                '<td class="center" >' +actionModifica(parameter) +'</td> ' +
                                '</tr>');
                        }


                        $('#viewAction', tmpObject).click(function() {
                            fatturaDetail(parameter);
                        });
                        $('#deleteAction', tmpObject).click(function() {
                            fatturaDelete(parameter);
                        });
                        $('#editAction', tmpObject).click(function() {
                            fatturaEdit(parameter);
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
                columOrder: [[3, "asc"]]
            }



            $('#tableFatture', ctxInternal).itemSelectorPage({ param: param });




            //$.each($('#tableFatture > thead > tr > th', ctxInternal), function (i, data) {
            //    if (i == 5) {
            //        $(this).removeClass("sorting");
            //    }
            //});
        }

        function initTables() {
            

            var strThead = '<tr>' +
                '<th class="hidden">&nbsp;</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.debitore') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.numerofattura') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.dataemissione') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.datascadenza') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.splitpayment') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.imponibile') + '</th>' +
                '<th >' + sdk.resource.get('anfa.dettDistinta.elencofatture.table.column.importo') + '</th>' +
                '<th class="dt-nosort dt-nofilter">&nbsp;</th>' +
                '</tr>';

            $('#tableFatture > thead').empty();
            $('#tableFatture > thead').html(strThead);

        }

        var refreshDistintaHandler = function(param) {
            if (param) {
                if (!param.url) { sdk.utils.log.debugMessage("ATTENZIONE: anfa detail distinta url: urlHead non valorizzato per refresh distinta"); }
                if (!param.distintakey) { sdk.utils.log.debugMessage("ATTENZIONE: anfa detail distinta distintakey non valorizzato per refresh distinta"); }
                RefreshDistinta(param.url, param.distintakey,false);
            }
            sdk.utils.pubsub.unregister('anfa.detail.refreshdistinta', refreshDistintaHandler);
        }


        $("#anfaBtnAggiungiFAttura", ctx).click(function () {
            //se non ho confermato la modifica della percentuale annullo
            percentualeRichiestaAnticipoEditUndo();

            //mostro la parte di data entry con il rapporto selezionato
            sdk.net.call(editAggiungiFatturaUrl, rapportoDistinta, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta EDIT ADD FATTURA OK");
                    $("#areaEditAddFattura", ctx).html(data);
                    //sdk.utils.pubsub.send('anfa.editInvoice.rapportoSelected', rapportoDistinta);
                    sdk.utils.pubsub.send('anfa.detail.distintakeyref', distintaKey); //evento per memorizzare distintakey di riferimento

                    //nascondo tutto cio che riguarda il dettaglio distinta e mostro l'area dataentry
                    showEditFattura();

                    //mi registro per eventuale refresh distinta se poi inserimento va ok
                    sdk.utils.pubsub.register('anfa.detail.refreshdistinta', refreshDistintaHandler);
                },

                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta EDIT ADD FATTURA ERROR");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                }
            });

        });


        function dettaglioFattura(fatturakey) {
            //debugger;
            //mostro la parte di data entry con il rapporto selezionato e i dati della fattura
            //ma non permetto alcuna modifica
            sdk.net.call(editAggiungiFatturaUrl, rapportoDistinta, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta DETTAGLIO  FATTURA OK");

                    $("#areaEditAddFattura", ctx).html(data);

                    sdk.utils.pubsub.send('anfa.invoiceEditor.fattura.edit', fatturakey);
                    sdk.utils.pubsub.send('anfa.edit.showBtnModifica', false);
                    sdk.utils.pubsub.send('anfa.edit.showBtnInserisci', false);

                    //sdk.utils.pubsub.send('anfa.editInvoice.rapportoSelected', rapportoDistinta);
                    sdk.utils.pubsub.send('anfa.detail.distintakeyref', distintaKey); //evento per memorizzare distintakey di riferimento

                    //nascondo tutto cio che riguarda il dettaglio distinta e mostro l'area dataentry
                    showEditFattura();
                },

                errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta DETTAGLIO FATTURA ERROR");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                }
            });
        }


        function editFattura(fatturakey) {
            //debugger;
            //mostro la parte di data entry con il rapporto selezionato e i dati della fattura
            sdk.net.call(editAggiungiFatturaUrl, rapportoDistinta, {
                successHandler: function (me, data, jsonResponse, warningObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta EDIT FATTURA OK");

                    $("#areaEditAddFattura", ctx).html(data);
                    sdk.utils.pubsub.send('anfa.invoiceEditor.fattura.edit', fatturakey);
                    sdk.utils.pubsub.send('anfa.edit.showBtnModifica', true);

                    //sdk.utils.pubsub.send('anfa.editInvoice.rapportoSelected', rapportoDistinta);
                    sdk.utils.pubsub.send('anfa.detail.distintakeyref', distintaKey); //evento per memorizzare distintakey di riferimento

                    //nascondo tutto cio che riguarda il dettaglio distinta e mostro l'area dataentry
                    showEditFattura();


                    //mi registro per eventuale refresh distinta se poi update va ok
                    sdk.utils.pubsub.register('anfa.detail.refreshdistinta', refreshDistintaHandler);
                },

                errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                    sdk.utils.log.debugMessage("anfa detail distinta EDIT FATTURA ERROR");
                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                }
            });

        }

        var gotoListaDistinte = function() {
            var destination = {
                urlmenu: '/Youbiz.Sdk.Web/AnFa/ListaDistinte'
            };
            sdk.utils.navigateFormByParamUrlMenu(destination);
        }




        $('#anfaBtnAnnulla', ctx).click(function () {
            //se non ho confermato la modifica della percentuale annullo
            percentualeRichiestaAnticipoEditUndo();
            showDetail();
        });

        $('#anfaBtnElencoDistinte', ctx).click(function () {
            gotoListaDistinte();

        });

        $('#anfaBtnElencoDistinteBack', ctx).click(function () {
            sdk.utils.pubsub.send('anfa.elencoDistinte.Refresh');
        });

        function ctrlPercentualeRichiestaAnticipo() {
            //controllo percentuale anticipo >0 e <=100
            var percentualeValore = parseInt($("#dettDistintaPercentualeRichiestaAnticipoEditText", ctx).val());
            if (!percentualeValore > 0) {
                sdk.utils.pubsub.send('messagePanel.renderError', { Messages: [{ ErrorMessage: 'La percentuale richiesta di anticipo della distinta deve essere maggiore di zero', ErrorMessageRes: "anfa.distinta.percentuale.min1" }] });
                return false;
            }
            if (percentualeValore > 100 ) {
                sdk.utils.pubsub.send('messagePanel.renderError', { Messages: [{ ErrorMessage: 'La percentuale richiesta di anticipo della distinta deve essere massimo 100', ErrorMessageRes: "anfa.distinta.percentuale.max100" }] });
                return false;
            }
            return true;
        }


        $('#anfaBtnGeneraDistinta', ctx).click(function () {
            //se non ho confermato la modifica della percentuale annullo
            percentualeRichiestaAnticipoEditUndo();
            if (!ctrlPercentualeRichiestaAnticipo()) {
                return;
            }


            //genera distinta con popUpConfirm
            var popup = popUpConfirm(
                'Confermi la creazione della distinta? ',
                '#popupconf',
                function () {
                    //var url = '/Youbiz.Sdk.Web/AnFa/Distinta/Send';
                    sdk.net.json(sendDistintaUrl, distintaKey, {
                        successHandler: function (me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("anfa detail SEND Fattura OK");
                            var distintaKeySend = jsonResponse;
                            distintaKey = distintaKeySend;
                            //gotoListaDistinte();
                            RefreshDistinta(headUrl, distintaKey,true);

                        },

                        errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.log.debugMessage("anfa detail SEND Fattura Error");
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
                });

            popup.open();

        });

        $("#anfaBtnFirmaDistinta", ctx).click(function() {
            //alert('TODO: firma');
            sdk.utils.pubsub.send('messagePanel.hide');
            sdk.utils.navigateFormByParamNew(
                {
                    action: firmaDistintaUrl,
                    parameters: distintaKey
                });
        });

        //13/06/2018: prova riposizionamento pulsanti per avere elenco distinte della pagina chiamante a destra
        //con questo impatto solo in questa pagina per lo spostamento a sinistra dei pulsanti deldettaglio -- elenco distinte va automaticamente a dx
        //eventualmente applicare una classe anche in dataentry per inserisci annulla o modifica
        


    });

    </script>

</div>








</div>
        <div id="areaDettaglioDistintaBtnEntryDistinte">
            
            
        </div>
    </div>



    <script type="text/javascript">
        $(function() {
            var ctx = '#8240bfdbaf224f8eaf2ac3d15f550994_1';


            //pubblico errori se presenti nel model
            var modelHAsError = 'false';
            if (modelHAsError == 'true') {
                sdk.utils.pubsub.send('messagePanel.renderError',
                    { Messages: [] });
            }

            $('#searchElencoDistinte', ctx).click(function() {
                if ($(this).hasClass("collapsed")) {
                    $('#spanIcon', ctx).removeClass('icon-expand').addClass('icon-collapse');
                } else {
                    $('#spanIcon', ctx).removeClass('icon-collapse').addClass('icon-expand');
                }
            });
            $('#searchElencoDistinte', ctx).click();

            var paramUrl = {
                'urlSendDistinte': '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/Send',
                'urlElencoDistinte': '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/GetDistinte',
                'urlDettaglioDistinta': '/Youbiz.Sdk.Web/AnFa/ListaDistinte/ViewChunk',
                'urlDeleteDistinta': '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/Delete',
                'urlFirmaDistinta': '/Youbiz.Sdk.Web/AnFa/DigSig/SignDistintaFromList',
                'urlListaEsiti': '/Youbiz.Sdk.Web/AnFa/ListaEsiti'
            }


            

            var searchParam = {
                "StatoDistinta": null,
                "Rapporto": null
            };

            $('#areaElencoDistinte', ctx).hide();
            $("#areaDettaglioDistintaEntryDistinte", ctx).hide();
            $('#anfaBtnElencoEsiti', ctx).hide();


            // registro il change
            $('#elencoDistinteCampoRicercaStato', ctx).change(function(eventParam) {
                searchParam.StatoDistinta = $(eventParam.currentTarget).val();
            });

            // imposto il valore corrente ...
            searchParam.StatoDistinta = $('#elencoDistinteCampoRicercaStato', ctx).val();


            //prova popUp
            var popUpConfirm = function(testo, idDivRef, funcOk) {

                ////impostazione focusRow per l'operazione
                //$('#tabellaElencoDistinte', ctx).itemSelectorPage('setClassOnCurrentRow', 'focusRow');

                var options = {
                    html: function() {
                        return ' <div class="row" style="padding:10px">' + testo + '</div>';
                    },
                    footer: function() {
                        return ' <button class="btn btn-primary pull-right" id="popupconfirmOK" type="button">ok</button>';
                    },
                    title: 'Attenzione',
                    titleIcon: 'flag info',
                    width: 400,
                    height: 200,
                    measure: 'px'
                    //,events: {
                    //    handler: function(type, target, data) {     //funzione per la gestione degli eventi relativi alle operazioni sul modale
                    //        if (type == 'close') {  //nel caso della chiusura ad esempio volgio rimuovere le classi focusRow precedentemente applicate
                    //            $('#tabellaElencoDistinte', ctx).itemSelectorPage('removeClassFromRows', 'focusRow');
                    //        }
                    //    }
                    //}
                }

                var popup = sdk.popup($(idDivRef, ctx), options);

                $("#popupconfirmOK", popup.element).click(function() {
                    popup.close();
                    popup.dispose();
                    var funcTodo = funcOk;
                    funcTodo();
                });
                return popup;
            };

            var distintaDetail = function(item) {
                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.net.json(paramUrl.urlDettaglioDistinta,
                    item.Identifier,
                    {
                        successHandler: function(me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("anfa dettaglio distinta chunk");
                            var toret = jsonResponse;
                            //debugger;
                            if (data) {
                                try {
                                    $('#areaElencoDistinteContainer', ctx).hide();
                                    $("#areaDettaglioDistintaDatiEntryDistinte", ctx).html(data);
                                    $("#areaDettaglioDistintaEntryDistinte", ctx).show();

                                    //var showbackentrydistinteHandler = function() {
                                    //    $("#areaDettaglioDistintaBtnEntryDistinte", ctx).show();
                                    //    sdk.utils.pubsub.unregister('anfa.detail.showbackentrydistinte',
                                    //        showbackentrydistinteHandler);
                                    //};

                                    //sdk.utils.pubsub.register('anfa.detail.showbackentrydistinte',
                                    //    showbackentrydistinteHandler);


                                } catch (err) {
                                    alert(err);
                                }

                            }

                        },

                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.log.debugMessage("anfa dettaglio distinta chunk ERROR ");
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
            };


            var distintaDelete = function(item) {
                //debugger;
                sdk.utils.pubsub.send('messagePanel.hide');
                //messaggio di conferma per la cancellazione prova popUp
                var popup = popUpConfirm(
                    'Confermi la cancellazione della distinta? ',
                    '#popupconf',
                    function() {
                        sdk.net.json(paramUrl.urlDeleteDistinta,
                            item.Identifier,
                            {
                                successHandler: function(me, data, jsonResponse, warningObject) {
                                    sdk.utils.log.debugMessage("anfa elenco distinte DELETE DISTINTA OK");
                                    //debugger;
                                    if (jsonResponse) {
                                        searchDistinte();
                                    }

                                },

                                errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                                    sdk.utils.log.debugMessage("anfa elenco distinte DELETE DISTINTA ERROR ");
                                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                }
                            });
                    });

                popup.open();
            };

            var distintaSend = function(item) {
                sdk.utils.pubsub.send('messagePanel.hide');

                ////impostazione focusRow per l'operazione
                //$('#tabellaElencoDistinte', ctx).itemSelectorPage('setClassOnCurrentRow', 'focusRow');

                //controllo sulla percentuale di anticipo che sia stata valorizzata e massimo 100
                var percentAnticipo = item.PercentualeRichiesto;
                if (!percentAnticipo > 0) {
                    sdk.utils.pubsub.send('messagePanel.renderError',
                        {
                            Messages: [
                                {
                                    ErrorMessage:
                                        'La percentuale richiesta di anticipo della distinta deve essere maggiore di zero',
                                    ErrorMessageRes: "anfa.distinta.percentuale.min1"
                                }
                            ]
                        });
                    return;
                }
                if (percentAnticipo > 100) {
                    sdk.utils.pubsub.send('messagePanel.renderError',
                        {
                            Messages: [
                                {
                                    ErrorMessage:
                                        'La percentuale richiesta di anticipo della distinta deve essere massimo 100',
                                    ErrorMessageRes: "anfa.distinta.percentuale.max100"
                                }
                            ]
                        });
                    return;
                }


                //messaggio di conferma per la send con popup
                var popup = popUpConfirm(
                    'Confermi la creazione della distinta? ',
                    '#popupconf',
                    function() {
                        sdk.net.json(paramUrl.urlSendDistinte,
                            item.Identifier,
                            {
                                successHandler: function(me, data, jsonResponse, warningObject) {
                                    sdk.utils.log.debugMessage("anfa elenco distinte SEND DISTINTA OK");
                                    if (jsonResponse) {
                                        searchDistinte();
                                    }

                                },

                                errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                                    sdk.utils.log.debugMessage("anfa elenco distinte SEND DISTINTA ERROR ");
                                    sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                                }
                            });
                    });

                popup.open();
            };

            var distintaSign = function(item) {
                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.utils.navigateFormByParamNew(
                    {
                        action: paramUrl.urlFirmaDistinta,
                        parameters: item.Identifier
                    });
            };

            var listPopulate = function(jsonResult) {

                // init header
                var strThead = '<tr>' +
                    '<th class="hidden">&nbsp;</th>' +
                    '<th >' +
                    sdk.resource.get('anfa.elencoDistinte.table.column.data') +
                    '</th>' +
                    '<th >' +
                    sdk.resource.get('anfa.elencoDistinte.table.column.numerofatture') +
                    '</th>' +
                    '<th >' +
                    sdk.resource.get('anfa.elencoDistinte.table.column.importo') +
                    '</th>' +
                    //'<th>' + sdk.resource.get('anfa.elencoDistinte.table.column.ragionesociale') + '</th>' +
                    '<th >' +
                    sdk.resource.get('anfa.elencoDistinte.table.column.statodistinta') +
                    '</th>' +
                    '<th class="dt-nosort dt-nofilter">&nbsp;</th>' +
                    '</tr>';

                $('#tabellaElencoDistinte > thead', ctx).empty();
                $('#tabellaElencoDistinte > thead', ctx).html(strThead);

                var selectedId = '';
                var param = {
                    dataSource: jsonResult,
                    rowCreator: function(parameter) {
                        var saldoDisplay = function(datatmp) {
                            if (datatmp) {
                                return sdk.utils.text.formatAmmountDecimal(datatmp);
                            }
                            return "0,00";
                        }
                        var dataDisplay = function(datatmp) {
                            if (datatmp) {
                                return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'DD/MM/YYYY');
                            }
                            return "&nbsp;";
                        }
                        var dataOrderDisplay = function(datatmp) {
                            if (datatmp) {
                                return sdk.utils.text.formatDateTime(moment(datatmp).local(), 'YYYYMMDD');
                            }
                            return "&nbsp;";
                        }

                        var decodeDivisa = function(datatmp) {
                            if (datatmp) {
                                return '&nbsp;' + datatmp;
                            }
                            return "";
                        }

                        function getDescrStatoDistinta(idstato) {
                            return sdk.resource.get('anfa.dettDistinta.statoDistinta.' + idstato);
                        }


                        var actionModifica = function(datatmp) {

                            var classDisabledOpera = 'disabledDiv';
                            if (datatmp.StatoDistinta == 1 ||
                                datatmp.StatoDistinta == 2 ||
                                datatmp.StatoDistinta == 3) {
                                classDisabledOpera = '';
                            }
                            classDisabledOpera = '';

                            var classDisabledGenera = 'disabledDiv';
                            var classVisibleGenera = 'style="visibility:hidden;display:none"';
                            if (datatmp.StatoDistinta == 1) {
                                //distinta in modifica
                                classDisabledGenera = '';
                            }

                            var classDisabledFirma = 'disabledDiv';
                            var classVisibleFirma = 'style="visibility:hidden;display:none"';
                            if ((datatmp.StatoDistinta == 2 || datatmp.StatoDistinta == 3) &&
                                datatmp.StatoFirmaUser == 2
                            ) { //distinta generata o parzialmentefirmata e utente must sign
                                classDisabledFirma = '';
                                classVisibleFirma = '';

                            }

                            var classDisabledCancella = 'disabledDiv';
                            var classVisibleCancella = 'style="visibility:hidden;display:none"';
                            if (datatmp.StatoDistinta == 1 ||
                                datatmp.StatoDistinta == 2 ||
                                datatmp.StatoDistinta == 3) {
                                classDisabledCancella = '';
                                classVisibleCancella = '';
                            }


                            var resDettaglio = 'anfa.elencoDistinte.opera.dettaglio';
                            if (datatmp.StatoDistinta == 1) {
                                resDettaglio = 'anfa.elencoDistinte.opera.modifica';
                            }

                            //return '<div class="dropdown ' + classDisabledOpera +'">' +
                            //    '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                            //    '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>' +
                            //    '</button>' +
                            //    '<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">' +
                            //    '<li><a id="viewAction" class="dropdown-item " href="#">' + sdk.resource.get('anfa.elencoDistinte.opera.dettaglio') +'</a></li>' +
                            //    '<li><a id="deleteAction" class="dropdown-item " href="#">' + sdk.resource.get('anfa.elencoDistinte.opera.cancella') +'</a></li>' +
                            //    '<li><a id="sendAction" class="dropdown-item ' + classDisabledGenera + '"  href="#">' + sdk.resource.get('anfa.elencoDistinte.opera.genera') +'</a></li>' +
                            //    '<li><a id="signAction" class="dropdown-item ' + classDisabledFirma + '"  href="#">' + sdk.resource.get('anfa.elencoDistinte.opera.firma') +'</a></li>' +
                            //    '</ul>' +
                            //    '</div>';


                            //laura 31/07/2018 - sostituzione di hamburger-opera con lente quando lo stato della distinta prevede solo dettaglio -- da stato parzialmente firmata in poi 
                            if (datatmp.StatoDistinta > 3) {
                                //laura 31/07/2018 - sostituzione menu-hamburger con lente
                                return '<div>' +
                                    '<a id="viewAction" ' +
                                    '" href="#">' +
                                    '<button class="btn btn-secondary" type="button" id="dropdownMenuButton">' +
                                    '<span class="glyphicon glyphicon-search" aria-hidden="true">' +
                                    '</span>' +
                                    '</button>' +
                                    '</a>' +
                                    '</div>';

                            }
                            else {
                                return '<div class="dropdown opera ' +
                                    classDisabledOpera +
                                    '" id="buttonHamburgerList" >' +
                                    '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                                    '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>' +
                                    '</button>' +
                                    '<ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">' +
                                    '<li><a id="viewAction" class="dropdown-item " href="#">' +
                                    //sdk.resource.get('anfa.elencoDistinte.opera.dettaglio') +
                                    sdk.resource.get(resDettaglio) +
                                    '</a></li>' +
                                    '<li  ' + classVisibleCancella +'><a id="deleteAction" class="dropdown-item ' +
                                    classDisabledCancella +
                                    '" href="#">' +
                                    sdk.resource.get('anfa.elencoDistinte.opera.cancella') +
                                    '</a></li>' +
                                    '<li '+classVisibleGenera+'><a id="sendAction" class="dropdown-item ' +
                                    classDisabledGenera +
                                    '"  href="#">' +
                                    sdk.resource.get('anfa.elencoDistinte.opera.genera') +
                                    '</a></li>' +
                                    '<li ' + classVisibleFirma +'><a id="signAction" class="dropdown-item ' +
                                    classDisabledFirma +
                                    '"  href="#">' +
                                    sdk.resource.get('anfa.elencoDistinte.opera.firma') +
                                    '</a></li>' +
                                    '</ul>' +
                                    '</div>';

                                }
                        }

                        if (parameter) {

                            var tmpObject = $('<tr>' +
                                '<td class="hidden"></td> ' +
                                '<td class="col-sm-2 center"  data-order="' +
                                dataOrderDisplay(parameter.DataCreazioneUtc) +
                                '">' +
                                dataDisplay(parameter.DataCreazioneUtc) +
                                ' </td> ' +
                                '<td class="col-sm-2 " >' +
                                parameter.NumeroFatture +
                                ' </td> ' +
                                '<td class="col-sm-2 money"  data-order="' +
                                parameter.ImportoTotale +
                                '">' +
                                saldoDisplay(parameter.ImportoTotale) +
                                decodeDivisa(parameter.Divisa) +
                                '</td> ' +
                                //'<td class="col-sm-2" style="text-align:left">' +
                                //(parameter.Rapporto ? (parameter.Rapporto.DescrizioneAzienda ? parameter.Rapporto.DescrizioneAzienda : '') : '') +
                                //'</td> ' +
                                '<td class="col-sm-2 center" >' +
                                getDescrStatoDistinta(parameter.StatoDistinta) +
                                ' </td> ' +
                                '<td class="col-sm-2 center" >' +
                                actionModifica(parameter) +
                                '</td> ' +
                                '</tr>');

                            $('#viewAction', tmpObject).click(function() {
                                distintaDetail(parameter);
                            });
                            $('#deleteAction', tmpObject).click(function() {
                                distintaDelete(parameter);
                                //showdemoComplete(parameter);
                            });
                            $('#sendAction', tmpObject).click(function() {
                                distintaSend(parameter);
                            });
                            $('#signAction', tmpObject).click(function() {
                                distintaSign(parameter);
                            });

                            //laura 30/05/2018 prova selezione riga al click su hamburger
                            //$('#buttonHamburgerList', tmpObject).click(function () {
                            //    //impostazione focusRow per l'operazione
                            //    tmpObject.trigger("click");
                            //    $('#tabellaElencoDistinte', ctx).itemSelectorPage('setClassOnCurrentRow', 'focusRow');
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


                $('#tabellaElencoDistinte', ctx).itemSelectorPage({ param: param });


                $('#areaElencoDistinte', ctx).show();
                $('#anfaBtnElencoEsiti', ctx).show();

            };

            var searchDistinte = function() {
                sdk.utils.pubsub.send('messagePanel.hide');
                sdk.utils.log.debugMessage("start search distinte");
                sdk.net.json(paramUrl.urlElencoDistinte,
                    searchParam,
                    {
                        successHandler: function(me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("success search distinte");
                            var toret = jsonResponse;
                            if (toret) {
                                listPopulate(toret);
                            }
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            //debugger;
                            sdk.utils.log.debugMessage("fail search distinte");
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });
            };

            //filtro elenco distinte
            $('#anfaBtnRicercaElencoDistinte', ctx).click(function() {
                searchDistinte();
            });

            //nascosto il pulsante che viene gestito in detail con evento
            $('#anfaBtnTornaElencoDistinte', ctx).click(function () {
                sdk.utils.pubsub.send('messagePanel.hide');
                $('#areaElencoDistinteContainer', ctx).show();
                $("#areaDettaglioDistintaEntryDistinte", ctx).hide();
                searchDistinte();
            });


            $('#anfaBtnElencoEsiti', ctx).click(function() {
                gotoListaEsiti();

            });

            function gotoListaEsiti() {
                var destination = {
                    //urlmenu: '/Youbiz.Sdk.Web/AnFa/ListaEsiti'
                    urlmenu: paramUrl.urlListaEsiti
                };
                sdk.utils.navigateFormByParamUrlMenu(destination);
            }

            var rapportoChangeHandler = function(rapportoSelected) {
                sdk.utils.pubsub.send('messagePanel.hide');
                if (rapportoSelected) {
                    searchParam.Rapporto = rapportoSelected.Identifier;
                    searchDistinte();
                } else {
                    searchParam.Rapporto = null;
                }
            }


            sdk.utils.pubsub.register('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);


            var refreshElencoDistinteHandler = function() {
                sdk.utils.pubsub.send('messagePanel.hide');
                $('#areaElencoDistinteContainer', ctx).show();
                $("#areaDettaglioDistintaEntryDistinte", ctx).hide();
                searchDistinte();
            }

            sdk.utils.pubsub.register('anfa.elencoDistinte.Refresh', refreshElencoDistinteHandler);




        });





    </script>
</div>
</div>
                    </div>