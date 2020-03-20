<div id="mainSection">
                        







<div id="6eee39c90488402ba682cc7994d6ccda_1">


<div id="6be44169aec948ea910765afd797aaae_1">

    <div class="riquadro clearfix">

        <div class="clearfix">
            <div class="pager clearfix pull-right">
                <div class="circle_line">&nbsp;</div>
                <div class="circle current_page">&nbsp;</div>
                <div class="circle">&nbsp;</div>
                <div class="circle">&nbsp;</div>
                <div class="circle">&nbsp;</div>
            </div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1 id="anfaTitle">Richiedi Anticipo</h1>
            <a id="helpOpener" class="icon-replace icon-help active link" href="javascript:void(0);">Help On Line</a>
        </div>
        

        
        
<div id="6be44169aec948ea910765afd797aaae_2" style="display: block;">
    <div id="errorPanel" class="col-xs-12 messagePanel error" style="margin-bottom: 0px; margin-top: 0px; display: block;">
        <h3 class="titleSection">Errore</h3>
        <p>
            </p><ul id="message"><li>Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.</li></ul>
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
            var me = $('#6be44169aec948ea910765afd797aaae_2');

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
                    window.location.href = '#6be44169aec948ea910765afd797aaae_2';
                } else {
                    //TODO: aggiunta David chiedere conferma!!!
                    var targetPanel1 = getTargetPanel(errorObject);
                    var strMsg1 = '';
                    strMsg1 += '<li>Errore generico</li>';
                    $('#message', targetPanel1).html(strMsg1);
                    targetPanel1.show();
                    me.show();
                    window.location.href = '#6be44169aec948ea910765afd797aaae_2';
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



        <div id="areaSelettoreRapporto">
            <div class="section clearfix">
                <h3 class="titleSection">Rapporto Selezionato</h3>
                

<div id="6be44169aec948ea910765afd797aaae_3">
    
    <div class="tabellaSelezioneCC">
        <div id="panelMessageRapporti" class="CCselezionato clearfix" style="min-height: 80px;padding-top: 30px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 msgInfo">
                <span class="col-md-6">Seleziona Rapporto</span>
                <a id="SelettoreRapportiIcon" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active open"></a>
            </div>
        </div>

        <div id="selezioneRapportoSingolo" class="CCselezionato clearfix" style="display: none;">
            <input name="Key" id="Key" type="hidden" value="">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <span class="col-md-3 ">Intestato a&nbsp;</span>
                <span id="intestazione" class="col-md-8 intestazione"></span>
                <span class="col-md-3 ">Banca&nbsp;</span>
                <span id="agenzia" class="col-md-8 ABI"></span>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <span id="conto" class="col-md-3">Rapporto&nbsp;</span>
                <span id="numero" class="col-md-8 numero"></span>

                <span class="col-md-3">IBAN&nbsp;</span>
                <span id="iban" class="col-md-8 CAB"></span>

            </div>
            <a id="SelettoreRapportiIconSelect" href="#" class="btnSelezioneCC icon-replace icon-arrowdown active open"></a>
        </div>

        <div class="table-responsive tabSelezioneCC" style="display: block;">
            <!--tabSelezioneRapporto-->
            <div class="dataTables_wrapper">

                <div id="itemSelectorTable_wrapper" class="dataTables_wrapper no-footer"><table id="itemSelectorTable" class="table table-striped no-footer dataTable" role="grid" aria-describedby="itemSelectorTable_info">
                    <tbody><tr tmindex="0" role="row" class="odd"><td class="hidden sorting_1"></td> <td>CC ANTICIPI INFRAGRUPPO 0181000002694572             </td> <td> 05034 </td> <td>ARCHIMEDE SERVIZI S.R.L. </td> </tr><tr tmindex="1" role="row" class="even"><td class="hidden sorting_1"></td> <td>CC UNICO 0081000902691372                            </td> <td> 05034 </td> <td>ARCHIMEDE SERVIZI S.R.L. </td> </tr></tbody>
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

        var jPanel = $('#6be44169aec948ea910765afd797aaae_3');
        
        pagedRapporti();


        function pagedRapporti() {
            
            var items = [{"Id":null,"IdAzienda":"45081","CodiceIban":"IT11I0503459791000000000399","CodiceAbi":"05034","CodiceCab":null,"CodiceFiliale":"0181","NumeroRapporto":"000002694572","CodiceDivisa":null,"Descrizione":"CC ANTICIPI INFRAGRUPPO 0181000002694572             ","DescrizioneAzienda":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneIntestatario":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneRapporto":"CC ANTICIPI INFRAGRUPPO 0181000002694572             ","DescrizionePersonalizzata":null,"DescrizioneIstituto":"BANCO BPM S.P.A.","CategoriaGruppo":null,"Categoria":"0254","TipoRapporto":"126","Particolare":null,"Identifier":{"Crypt":"E5mVzVu5bXpuMXWl4OOZFOO3muUlGNjiCcFDrj7JZk9PvcFZQ3SKAFgDbmnrdR+c","Hash":"FA6DA2A343E9D7321E7D2A5CCDB40BDF358FD00F43AF791F70F0B2FA866C3DB1"},"Status":0},{"Id":null,"IdAzienda":"45081","CodiceIban":"IT31U0503459790000000024330","CodiceAbi":"05034","CodiceCab":null,"CodiceFiliale":"0081","NumeroRapporto":"000902691372","CodiceDivisa":null,"Descrizione":"CC UNICO 0081000902691372                            ","DescrizioneAzienda":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneIntestatario":"ARCHIMEDE SERVIZI S.R.L.","DescrizioneRapporto":"CC UNICO 0081000902691372                            ","DescrizionePersonalizzata":null,"DescrizioneIstituto":"BANCO BPM S.P.A.","CategoriaGruppo":null,"Categoria":"0034","TipoRapporto":"126","Particolare":null,"Identifier":{"Crypt":"FkNyFCBWd22l/9E2JRBOo9N/Df3PolBO245WdYUgxENIHP6Pz1aLDArCCbZrOymg","Hash":"3D793D4301AF0AAD5C5AE345B4154BA1FEED2145F67F19DA47F6E19219297D4A"},"Status":0}];
            var selectedHash = '';

            var numElementForNotPagination = 8;
            var ctx = '#6be44169aec948ea910765afd797aaae_3';
            

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
        </div>







<div id="6be44169aec948ea910765afd797aaae_4">
    <div id="areaDataEntryFattura">

      
    <div id="datiemittentefatture" class="section" style="visibility: hidden; display: none">
        <div id="datiEmittenteCollapse" class="section clearfix collapsed" style="text-decoration: none" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h3 class="titleSection">Dati Emittente Fatture</h3>
            <span id="spanIcon" class="icon-replace icon-expand active pull-right"></span>
            <div class="pull-right" style="width: 70%;padding-top: 5px">Sezione da compilare solo se Emittente diverso da Ordinante</div>
        </div>
        <div id="collapseOne" class="section panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="margin: 0px">
            <div class="row form-group">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Ragione Sociale</label>
                        <input class="form-control" type="text" id="anfaRichiedenteRagSoc" name="anfaRichiedenteRagSoc" maxlength="60">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                        <label class="control-label"></label>
                        <span id="anfaSearchRagSocClientiEmittente" class="icon-replace icon-search active link" style="margin-top: 15px; display: block;">&nbsp;</span>
                    </div>
                    <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Codice</label>
                        <input class="form-control" type="text" id="anfaRichiedenteCodice" name="anfaRichiedenteCodice">
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Codice fiscale/Partita IVA</label>
                        <input class="form-control" type="text" id="anfaRichiedenteCfPiva" name="anfaRichiedenteCfPiva" maxlength="16">
                    </div>

                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Indirizzo</label>
                        <input class="form-control" type="text" id="anfaRichiedenteIndirizzo" name="anfaRichiedenteIndirizzo" maxlength="60">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                    </div>
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Comune</label>
                        <input class="form-control" type="text" id="anfaRichiedenteComune" name="anfaRichiedenteComune" maxlength="35">
                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Cap</label>
                        <input class="form-control" type="text" id="anfaRichiedenteCap" name="anfaRichiedenteCap" maxlength="5" onkeypress="return sdk.utils.text.onlyIntNumbers(event)">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Prov.</label>
                        <input class="form-control" type="text" id="anfaRichiedenteProv" name="anfaRichiedenteProv" maxlength="2" onkeypress="return sdk.utils.text.onlyAlpha(event)">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Stato</label>
                        <div class="form-field">
                            <select id="anfaRichiedentePaese" name="anfaRichiedentePaese" class="form-control" style="height: 30px" disabled="">
                                    <option value="IT">ITALIA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label"></label>
                        <div>
                            <label class="control-label link-icon " style="margin-top: 10px">
                                <span class="link-icon icon-creazioneUtenti "></span>
                                <input type="checkbox" id="anfaRichiedenteChkAggiornaAnag" name="anfaRichiedenteChkAggiornaAnag">
                                <span id="anfaRichiedenteChkAggiornaAnagLabel">&nbsp;Inserisci Anagrafica</span>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    <div id="datidebitore" class="section clearfix">
        <h3 class="titleSection">Dati Debitore</h3>
        <div class="row form-group">
            <div class="col-xs-12">
                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Ragione Sociale</label>
                    <input class="form-control" type="text" id="anfaDebitoreRagSoc" name="anfaDebitoreRagSoc" maxlength="60">
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                    <label class="control-label"></label>
                    <span id="anfaSearchRagSocClientiDebitore" class="icon-replace icon-search active link" style="margin-top: 15px; display: block;">&nbsp;</span>
                </div>
                <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Codice</label>
                    <input class="form-control" type="text" id="anfaDebitoreCodice" name="anfaDebitoreCodice">
                </div>
            </div>

            <div class="col-xs-12">
                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Partita Iva (se assente, Codice fiscale)</label>
                    <input class="form-control" type="text" id="anfaDebitoreCfPiva" name="anfaDebitoreCfPiva" maxlength="16">
                </div>

                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Indirizzo</label>
                    <input class="form-control" type="text" id="anfaDebitoreIndirizzo" name="anfaDebitoreIndirizzo" maxlength="60">
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                </div>
                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Comune</label>
                    <input class="form-control" type="text" id="anfaDebitoreComune" name="anfaDebitoreComune" maxlength="35">
                </div>

            </div>
            <div class="col-xs-12">
                <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Cap</label>
                    <input class="form-control" type="text" id="anfaDebitoreCap" name="anfaDebitoreCap" maxlength="5" onkeypress="return sdk.utils.text.onlyIntNumbers(event)">
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Prov.</label>
                    <input class="form-control" type="text" id="anfaDebitoreProv" name="anfaDebitoreProv" maxlength="2" onkeypress="return sdk.utils.text.onlyAlpha(event)">
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Stato</label>
                    <div class="form-field">
                        <select id="anfaDebitorePaese" name="anfaDebitorePaese" class="form-control" style="height: 30px" disabled="">
                                <option value="IT">ITALIA</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label"></label>
                    <div>
                        <label class="control-label link-icon " style="margin-top: 10px">
                            <span class="link-icon icon-creazioneUtenti"></span>
                            <input type="checkbox" id="anfaDebitoreChkAggiornaAnag" name="anfaDebitoreChkAggiornaAnag">
                            <span id="anfaDebitoreChkAggiornaAnagLabel">&nbsp;Inserisci Anagrafica</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div id="datifattura" class="section clearfix">
        <h3 class="titleSection">Dati Fattura</h3>

        <div class="row form-group">
            <div class="col-xs-12">
                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Numero Fattura</label>
                    <a id="fumettonumfatt" class="icon-replace icon-help active link" onclick="javascript: sdk.utils.pubsub.send('showFumetto', this, 'anfaFattNumero'); return false;" href="#">info</a>
                    <input class="form-control " type="text" id="anfaFattNumero" name="anfaFattNumero" maxlength="35">
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>

                <div class="col-sm-2 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Data emissione</label>
                    <div class="col-xs-8" style="padding: 0px;">
                        <input class="form-control hasDatepicker" type="text" maxlength="10" id="anfaFattdtEmissione" name="anfaFattdtEmissione">
                    </div>
                    <div class="col-xs-2">
                        <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal1"></a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Data scadenza</label>
                    <div class="col-xs-8" style="padding: 0px;">
                        <input class="form-control hasDatepicker" type="text" maxlength="10" id="anfaFattdtScadenza" name="anfaFattdtScadenza">
                    </div>
                    <div class="col-xs-2">
                        <a class="icon-replace icon-calendar active col-xs-1" href="javascript:void(0);" id="cal2"></a>
                    </div>
                </div>

                <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>

                <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                    <label class="control-label">Split Payment</label>
                    <div class="form-field">
                        <select id="anfaFattSplitPagamento" name="anfaFattSplitPagamento" class="form-control" style="height: 30px">
                            <option value="" selected="selected">Seleziona ...</option>
                            <option value="1">SI</option>
                            <option value="2">NO</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="row form-group">
                <div class="col-xs-12">


                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Imponibile</label>
                        <div class="col-xs-10" style="padding: 0px;">
                            <input class="form-control text-right" type="text" id="anfaFattImportoImponibile" name="anfaFattImportoImponibile" onkeypress="return sdk.utils.text.onlyRealNumbersChars(event);">
                        </div>
                        <div class="col-xs-2" style="margin-top: 5px">EUR</div>
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Totale fattura</label>
                        <div class="col-xs-10" style="padding: 0px;">
                            <input class="form-control text-right" type="text" id="anfaFattImporto" name="anfaFattImporto" onkeypress="return sdk.utils.text.onlyRealNumbersChars(event);">
                        </div>
                        <div class="col-xs-2" style="margin-top: 5px">EUR</div>
                    </div>


                    <div class="col-sm-4 col-xs-12" style="padding: 0px;"></div>

                </div>
            </div>


            <div class="row form-group">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Modalità di Pagamento</label>
                        <div class="form-field">
                            <select id="anfaFattPagamento" name="anfaFattPagamento" class="form-control" style="height: 30px" disabled="">
                                    <option value="Bonifico">BONIFICO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>

                    <div class="col-sm-4 col-xs-12" style="padding: 0px;">
                        <label class="control-label">Iban di accredito</label>
                        <div class="form-field">
                            <input class="form-control" type="text" id="anfaFattIbanCreditore" name="anfaFattIbanCreditore" placeholder="" autocomplete="off" maxlength="27">
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>
                    <div class="col-sm-3 col-xs-12" style="padding: 0px;">
                        <label class="control-label"></label>
                        <div class="form-field">
                            <label class="control-label" style="margin-top:10px"><input type="checkbox" id="anfaChkCessioneCredito" name="anfaChkCessioneCredito">&nbsp;Cessione del credito </label>
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0px;"></div>

                </div>
            </div>



        </div>
    </div>

    </div>
    

    <script type="text/javascript">

        $(function () {
            var ctx = '#6be44169aec948ea910765afd797aaae_4';
            var isPivaSelectedDebitore = true;
            var isPivaSelectedRichiedente = true;
            var rapportoSelezionato = null;
            // var innerInvoice = {};

            // **************
            // gestione CC
            // **************
            var rapportiCc = [{"idAzienda":"45081","account":"IT43V0503459791000000024330"},{"idAzienda":"45081","account":"IT98K0503459791000000025652"}];
            var rapportiCcSplitted = {};
            $.each(rapportiCc, function(index, item){
                if (!rapportiCcSplitted[item.idAzienda]){
                    rapportiCcSplitted[item.idAzienda] = [];
                }
                rapportiCcSplitted[item.idAzienda].push(item);
            });

            var populateList = function(idAzienda) {
                
                var lista = [];
                if (idAzienda && rapportiCcSplitted[idAzienda]) {
                    lista = rapportiCcSplitted[idAzienda];
                }

                var jPanel = $("#6be44169aec948ea910765afd797aaae_4");

                $("#anfaFattIbanCreditore", jPanel).autocomplete({
                    minLength: 0,
                    delay: 300,

                    source: function(req, resp) {

                        var re = $.ui.autocomplete.escapeRegex(req.term);
                        var matcher = new RegExp(re, "i");

                        var maxItems = 30;
                        var itemsCount = 0;
                        var arry = [];

                        $.each(lista,
                            function(index, item) {
                                if (itemsCount >= maxItems)
                                    return false;
                                var toRet = matcher.test(item.account);
                                if (toRet) {
                                    arry.push(item);
                                    itemsCount++;
                                }
                                return true;
                            });

                        resp($.map(arry,
                            function(item) {
                                return { Description: __highlight(item, req.term), value: item };
                            }));


                    },
                    select: function(event, ui) {
                        $("#anfaFattIbanCreditore", jPanel).val(ui.item.value.account);
                        event.preventDefault();

                    },
                    focus: function(event, ui) {
                        $("#anfaFattIbanCreditore", jPanel).val(ui.item.value.account);
                        event.preventDefault();

                    }
                    //minLength: 1
                }).focus(function(){
                        //Use the below line instead of triggering keydown
                        $(this).autocomplete("search", $(this).val());
                    })

                    .data("ui-autocomplete")._renderItem = function(ul, item) {
                    return $("<li></li>")
                        .data("item.autocomplete", item)
                        .append($("<a></a>").html(item.Description))
                        .appendTo(ul);

                };
            };

            // **************
            // gestione CC
            // **************



            $("#anfaRichiedenteCfPiva", ctx).on('keyup', function(e)  {
                $(this).val($(this).val().toUpperCase());
            });

            $("#anfaDebitoreCfPiva", ctx).on('keyup', function (e) {
                $(this).val($(this).val().toUpperCase());
            });


            $('#datiEmittenteCollapse', ctx).click(function () {
                if ($(this).hasClass("collapsed")) {
                    $('#spanIcon', ctx).removeClass('icon-expand').addClass('icon-collapse');

                } else {
                    $('#spanIcon', ctx).removeClass('icon-collapse').addClass('icon-expand');
                }
            });


            $('#anfaFattImportoImponibile', ctx).blur(function () {
                var val = sdk.utils.text.parseNumber($('#anfaFattImportoImponibile', ctx).val());
                $('#anfaFattImportoImponibile', ctx).val(sdk.utils.text.formatAmmountDecimal(val));
            });

            $('#anfaFattImporto', ctx).blur(function () {
                var val = sdk.utils.text.parseNumber($('#anfaFattImporto', ctx).val());
                $('#anfaFattImporto', ctx).val(sdk.utils.text.formatAmmountDecimal(val));
            });


            $('#anfaFattdtEmissione', ctx).datepick({
                regional: 'it',
                trigger: "#cal1",
                beforeShow: function() {
                    $('#ui-datepicker-div').addClass("calendar-box ybb-calendar");
                }
                , maxDate: moment().format('DD/MM/YYYY')
                ,isDispo:false
            });



            $('#anfaFattdtScadenza', ctx).datepick({
                regional: 'en',
                trigger: "#cal2",
                beforeShow: function () {
                    $('#ui-datepicker-div').addClass("calendar-box ybb-calendar");
                }
                , minDate: moment().add(1, 'days').format('DD/MM/YYYY')
                ,isDispo:false
            });


            $('#anfaDebitoreChkAggiornaAnag',ctx).click(function() {
                sdk.utils.pubsub.send('messagePanel.hide');
            });

            $('#anfaRichiedenteChkAggiornaAnag', ctx).click(function () {
                sdk.utils.pubsub.send('messagePanel.hide');
            });


           

            

            // legge dalla view una fattura ..



            var getInvoice = function () {

                var anagCreditore = {
                    RagioneSociale: $('#anfaRichiedenteRagSoc', ctx).val(),
                    CodiceFiscalePiva: $('#anfaRichiedenteCfPiva', ctx).val(),
                    Indirizzo: $('#anfaRichiedenteIndirizzo', ctx).val(),
                    Cap: $('#anfaRichiedenteCap', ctx).val(),
                    Comune: $('#anfaRichiedenteComune', ctx).val(),
                    Provincia: $('#anfaRichiedenteProv', ctx).val(),
                    Nazione: $('#anfaRichiedentePaese', ctx).val(),
                    CodiceAnagrafe: $('#anfaRichiedenteCodice', ctx).val()
                };

                var anagDebitore = {
                    RagioneSociale: $('#anfaDebitoreRagSoc', ctx).val(),
                    CodiceFiscalePiva: $('#anfaDebitoreCfPiva', ctx).val(),
                    Indirizzo: $('#anfaDebitoreIndirizzo', ctx).val(),
                    Cap: $('#anfaDebitoreCap', ctx).val(),
                    Comune: $('#anfaDebitoreComune', ctx).val(),
                    Provincia: $('#anfaDebitoreProv', ctx).val(),
                    Nazione: $('#anfaDebitorePaese', ctx).val(),
                    CodiceAnagrafe: $('#anfaDebitoreCodice', ctx).val()
                };



                var currentInvoice = {
                    Creditore: anagCreditore,
                    Debitore: anagDebitore,
                    NumeroFattura: $('#anfaFattNumero', ctx).val(),
                    DataEmissione: moment.utc($('#anfaFattdtEmissione', ctx).val(), "DD/MM/YYYY").format(),
                    ImportoFattura: sdk.utils.text.parseNumber($('#anfaFattImporto', ctx).val()),                   //togliere la formattazione dell'importo
                    ImportoImponibile: sdk.utils.text.parseNumber($('#anfaFattImportoImponibile', ctx).val()),      //togliere la formattazione dell'importo
                    Divisa: "EUR",
                    DataScadenza: moment.utc($('#anfaFattdtScadenza', ctx).val(), "DD/MM/YYYY").format(),
                    TipoPagamento: $('#anfaFattPagamento', ctx).val(),
                    IbanCreditorFattura: $('#anfaFattIbanCreditore', ctx).val(),
                    IbanDebitorFattura:null,
                    SplitPagamento: $('#anfaFattSplitPagamento', ctx).val(),
                    CessioneCredito: $('#anfaChkCessioneCredito', ctx).prop("checked") ? "YES" : "NO"
                };

                return currentInvoice;
            };




            var eventHandlerGetCurrentInvoice= function() {
                var distintaFromEditor = getInvoice();
                // var newInvoice = $.extend({}, distintaFromEditor);
                sdk.utils.pubsub.send('invoiceEditor.currentInvoice', distintaFromEditor );
            };


            var eventHandlerGetUpdateFlags = function(ctx) {

                //var chkUpdAnagDebitore = $('#anfaDebitoreChkAggiornaAnag', ctx).prop("checked");
                //var chkUpdAnagRichiedente = $('#anfaRichiedenteChkAggiornaAnag', ctx).prop("checked");

                var chkUpdAnagDebitore = {
                    Update: $('#anfaDebitoreChkAggiornaAnag', ctx).prop("checked"),
                    Codice: $('#anfaDebitoreCodice', ctx).val(),
                    IsPiva: isPivaSelectedDebitore
                };

                var chkUpdAnagRichiedente = {
                    Update: $('#anfaRichiedenteChkAggiornaAnag', ctx).prop("checked"),
                    Codice: $('#anfaRichiedenteCodice', ctx).val(),
                    IsPiva: isPivaSelectedRichiedente
                };

                if (chkUpdAnagDebitore.Update && chkUpdAnagRichiedente.Update) {
                    sdk.utils.pubsub.send('messagePanel.renderError', {Messages:[{ ErrorMessage: 'Attenzione! Non è possibile salvare contemporaneamente due anagrafiche relative allo stesso Codice Anagrafica', ErrorMessageRes: "anfa.fattura.chkSalvaAnagrafica.noStessoCodice"}]});
                    sdk.utils.pubsub.sendNoop('invoiceEditor.updateFlags');
                    return;
                }

                //debugger;
                //controllo per congruenza isPivaSelectedDebitore con lunghezza del campo
                //if (chkUpdAnagDebitore.IsPiva && $('#anfaDebitoreCfPiva', ctx).val().trim().length > 11) {
                //    chkUpdAnagDebitore.IsPiva = false;
                //}

                //controllo per congruenza isPivaSelectedRichiedente con lunghezza del campo
                //if (chkUpdAnagDebitore.IsPiva && $('#anfaRichiedenteCfPiva', ctx).val().trim().length > 11) {
                //    chkUpdAnagDebitore.IsPiva = false;
                //}

                var updateFlags = {
                    chkUpdateDebitore :chkUpdAnagDebitore,
                    chkUpdateEmittente : chkUpdAnagRichiedente
                };

                sdk.utils.pubsub.send('invoiceEditor.updateFlags', updateFlags);
            };


            sdk.utils.pubsub.register('invoiceEditor.getCurrentInvoice', eventHandlerGetCurrentInvoice);
            sdk.utils.pubsub.register('invoiceEditor.getUpdateFlags', eventHandlerGetUpdateFlags);



            //mi registro per memorizzare il rapporto alla selezione --> evento anfa.editInvoice.rapportoSelected

            var rapportoChangeHandler = function (rapportoSelected) {
                
                sdk.utils.pubsub.send('messagePanel.hide');
                var rapportoPrecedenteIban = '';
                if (rapportoSelezionato && rapportoSelezionato.CodiceIban) {
                    rapportoPrecedenteIban = rapportoSelezionato.CodiceIban;
                }
                //debugger;
                var ibanField = $('#anfaFattIbanCreditore', ctx);
                //var currentUiIban = ibanField.val().trim();
                var currentUiIban = "";



                if (rapportoSelected) {

                    //imposto iban creditore se il campo è vuoto altrimenti lascio quello editato
                    if (currentUiIban) {
                        if (currentUiIban == '' || currentUiIban == rapportoPrecedenteIban) {
                                ibanField.val(rapportoSelected.CodiceIban ? rapportoSelected.CodiceIban : '');
                        }
                    } else {
                            ibanField.val(rapportoSelected.CodiceIban ? rapportoSelected.CodiceIban : '');
                    }
                }
                rapportoSelezionato = rapportoSelected;
                //sdk.utils.pubsub.unregister('anfa.editInvoice.rapportoSelected', rapportoChangeHandler);
            }

            //sdk.utils.pubsub.register('anfa.editInvoice.rapportoSelected', rapportoChangeHandler);
            sdk.utils.pubsub.register('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);

            var getIndirizzo = function(anagrafica) {
                var toRet = '';
                if (anagrafica && anagrafica.Indirizzo) {
                    toRet = anagrafica.Indirizzo.Via || '';
                    var civico = anagrafica.Indirizzo.NumeroCivico || '';
                    if (civico != '' && !toRet.match(new RegExp(civico + "$"))) {
                        toRet += ', ' + civico;
                    }
                }
                return toRet;
            };



            var getCodFPivaAnag = function (anagrafica,isDebitore) {
                //se in anagrafica sono valorizzati entrambi CF e PIVA cosa valorizzo?? ---> al momento ritorno PIVA
                var toret = "";
                if (anagrafica) {
                    var codfisc = anagrafica.CodiceFiscale;
                    var piva = anagrafica.PartitaIva;
                    toret = piva; //precedenza sempre a partita iva se valorizzata
                    if (!toret) {
                        if (codfisc) {
                            toret = codfisc.toUpperCase();
                            if (isDebitore) {
                                isPivaSelectedDebitore = false;
                            } else {
                                isPivaSelectedRichiedente = false;
                            }

                        }
                    }
                }
                return toret;
            }


            var pickerAnagrafica = function (filterToDo, isDebitore) {

                if (!rapportoSelezionato) {
                    sdk.utils.pubsub.send('messagePanel.renderError',
                        {Messages:[
                            {
                                ErrorMessage:
                                    'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.',
                                ErrorMessageRes: 'anfa.dataentry.distinta.rapporto.nonvalorizzato'
                            }
                        ]});
                } else {
                    var myfilters = {
                        idAzienda: rapportoSelezionato.IdAzienda
                    };
                    var allFilters = $.extend({}, filterToDo, myfilters);

                    //parametro url
                    var urlapp = '/Youbiz.Sdk.Web';


                    sdk.rubrica(urlapp)['cliente'].list({
                        filters: allFilters,
                        eventHandler: function(eventType, target, data) {
                            if (eventType == 'selection:complete') {
                                //console.log(data);
                                if (isDebitore) {
                                    $('#anfaDebitoreRagSoc', ctx).val(data.Denominazione);
                                    $('#anfaDebitoreCodice', ctx).val(data.Codice);
                                    $('#anfaDebitoreCodice', ctx).attr("disabled", true);
                                    $('#anfaDebitoreCfPiva', ctx).val(getCodFPivaAnag(data, isDebitore));
                                    $('#anfaDebitoreIndirizzo', ctx).val(getIndirizzo(data));
                                    $('#anfaDebitoreCap', ctx).val(data.Indirizzo.Cap);
                                    $('#anfaDebitoreComune', ctx).val(data.Indirizzo.Comune);
                                    $('#anfaDebitoreProv', ctx).val(data.Indirizzo.CodiceProvincia);
                                    //$('#anfaDebitorePaese', ctx).val(data.Indirizzo.Nazione); //se non fosse valorizzato lascio impostato IT che è l'unico valore???
                                    $('#anfaDebitoreChkAggiornaAnagLabel', ctx).html('&nbsp;Aggiorna Anagrafica');
                                } else {
                                    $('#anfaRichiedenteRagSoc', ctx).val(data.Denominazione);
                                    $('#anfaRichiedenteCodice', ctx).val(data.Codice);
                                    $('#anfaRichiedenteCodice', ctx).attr("disabled", true);
                                    $('#anfaRichiedenteCfPiva', ctx).val(getCodFPivaAnag(data, isDebitore));
                                    $('#anfaRichiedenteIndirizzo', ctx).val(getIndirizzo(data));
                                    $('#anfaRichiedenteCap', ctx).val(data.Indirizzo.Cap);
                                    $('#anfaRichiedenteComune', ctx).val(data.Indirizzo.Comune);
                                    $('#anfaRichiedenteProv', ctx).val(data.Indirizzo.CodiceProvincia);
                                    //$('#anfaRichiedentePaese', ctx).val(data.Indirizzo.Nazione); //se non fosse valorizzato lascio impostato IT che è l'unico valore???
                                    $('#anfaRichiedenteChkAggiornaAnagLabel', ctx).html('&nbsp;Aggiorna Anagrafica');
                                }
                            }
                        }
                    });
                }
            };

            $('#anfaSearchRagSocClientiDebitore',ctx).click(function () {
                var filtroAnagrafica = { Denominazione: $('#anfaDebitoreRagSoc', ctx).val(), Codice: $('#anfaDebitoreCodice', ctx).val() };
                pickerAnagrafica(filtroAnagrafica, true);
            });

            $('#anfaSearchRagSocClientiEmittente', ctx).click(function () {
                var filtroAnagrafica = { Denominazione: $('#anfaRichiedenteRagSoc', ctx).val(), Codice: $('#anfaRichiedenteCodice', ctx).val() };
                pickerAnagrafica(filtroAnagrafica, false);
            });



            //prova per edit della fattura
            //mi registro per recuperare e mappare i dati della fattura
            var mapFatturaEditHandler = function (fatturakey) {

                //chiamo il dettaglioFattura che mi restituisce una fattura
                //....
                var urlReadItem = '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/ReadItem';
                sdk.net.call(urlReadItem, fatturakey, {
                    successHandler: function (me, data, jsonResponse, warningObject) {
                        sdk.utils.log.debugMessage("anfa editinvoice GET DETTAGLIO FATTURA  OK");
                        sdk.utils.pubsub.send('messagePanel.hide');
                        var fattura = jsonResponse;
                        //debugger;
                        if (fattura) {
                            //debugger;
                            if (fattura.Creditore) {
                                $('#anfaRichiedenteCodice', ctx).val(fattura.Creditore.CodiceAnagrafe || '');
                                $('#anfaRichiedenteRagSoc', ctx).val(fattura.Creditore.RagioneSociale || '');
                                $('#anfaRichiedenteCfPiva', ctx).val(fattura.Creditore.CodiceFiscalePiva || '');
                                $('#anfaRichiedenteIndirizzo', ctx).val(fattura.Creditore.Indirizzo || '');
                                $('#anfaRichiedenteCap', ctx).val(fattura.Creditore.Cap || '');
                                $('#anfaRichiedenteComune', ctx).val(fattura.Creditore.Comune || '');
                                $('#anfaRichiedenteProv', ctx).val(fattura.Creditore.Provincia || '');
                                $('#anfaRichiedentePaese', ctx).val(fattura.Creditore.Nazione || '');
                            } else {
                                $('#anfaRichiedenteCodice', ctx).val('');
                                $('#anfaRichiedenteRagSoc', ctx).val('');
                                $('#anfaRichiedenteCfPiva', ctx).val('');
                                $('#anfaRichiedenteIndirizzo', ctx).val('');
                                $('#anfaRichiedenteCap', ctx).val('');
                                $('#anfaRichiedenteComune', ctx).val('');
                                $('#anfaRichiedenteProv', ctx).val('');
                                $('#anfaRichiedentePaese', ctx).val('');
                            }

                            if (fattura.Debitore) {
                                $('#anfaDebitoreCodice', ctx).val(fattura.Debitore.CodiceAnagrafe || '');
                                $('#anfaDebitoreRagSoc', ctx).val(fattura.Debitore.RagioneSociale || '');
                                $('#anfaDebitoreCfPiva', ctx).val(fattura.Debitore.CodiceFiscalePiva || '');
                                $('#anfaDebitoreIndirizzo', ctx).val(fattura.Debitore.Indirizzo || '');
                                $('#anfaDebitoreCap', ctx).val(fattura.Debitore.Cap || '');
                                $('#anfaDebitoreComune', ctx).val(fattura.Debitore.Comune || '');
                                $('#anfaDebitoreProv', ctx).val(fattura.Debitore.Provincia || '');
                                $('#anfaDebitorePaese', ctx).val(fattura.Debitore.Nazione || '');
                            } else {
                                $('#anfaDebitoreCodice', ctx).val('');
                                $('#anfaDebitoreRagSoc', ctx).val('');
                                $('#anfaDebitoreCfPiva', ctx).val('');
                                $('#anfaDebitoreIndirizzo', ctx).val('');
                                $('#anfaDebitoreCap', ctx).val('');
                                $('#anfaDebitoreComune', ctx).val('');
                                $('#anfaDebitoreProv', ctx).val('');
                                $('#anfaDebitorePaese', ctx).val('');
                            }

                            if (fattura.Creditore.CodiceAnagrafe) {
                                $('#anfaRichiedenteCodice', ctx).attr("disabled", true);
                                $('#anfaRichiedenteChkAggiornaAnagLabel', ctx).html('&nbsp;Aggiorna Anagrafica');
                            }
                            if (fattura.Debitore.CodiceAnagrafe) {
                                $('#anfaDebitoreCodice', ctx).attr("disabled", true);
                                $('#anfaDebitoreChkAggiornaAnagLabel', ctx).html('&nbsp;Aggiorna Anagrafica');
                            }

                            $('#anfaFattNumero', ctx).val(fattura.NumeroFattura || '');

                            var saldoDisplay = function (datatmp) {
                                if (datatmp) {
                                    return sdk.utils.text.formatAmmountDecimal(datatmp);
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
                            $('#anfaFattdtEmissione', ctx).val(dataDisplay(fattura.DataEmissione));
                            $('#anfaFattdtScadenza', ctx).val(dataDisplay(fattura.DataScadenza));

                            $('#anfaFattImporto', ctx).val(saldoDisplay(fattura.ImportoFattura));
                            $('#anfaFattImportoImponibile', ctx).val(saldoDisplay(fattura.ImportoImponibile)),
                            $('#anfaFattPagamento', ctx).prop('selectedIndex', fattura.TipoPagamento-1); //controllare valore per impostazione
                            //$('#anfaFattSplitPagamento', ctx).prop('selectedIndex', fattura.SplitPagamento-1); //controllare valore per impostazione
                            $('#anfaFattSplitPagamento', ctx).val(fattura.SplitPagamento); //controllare valore per impostazione
                            if (fattura.CessioneCredito == 1) {
                                $('#anfaChkCessioneCredito', ctx).prop("checked", true);
                            } else {
                                $('#anfaChkCessioneCredito', ctx).prop("checked", false);
                            }

                            //a questo punto ho la fattura e posso anche lanciare l'evento per memorizzare fatturakey
                            sdk.utils.pubsub.send('anfa.edit.fatturakey', fattura.Key);

                            //sdk.utils.pubsub.unregister('anfa.invoiceEditor.fattura.edit', mapFatturaEditHandler);
                            if (fattura.Creditore.RagioneSociale != '') {
                                $('#datiEmittenteCollapse', ctx).click();
                            }

                            //impostazine iban creditore
                            $('#anfaFattIbanCreditore', ctx).val(fattura.IbanCreditorFattura);
                        }
                    },

                    errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
                        sdk.utils.log.debugMessage("anfa editinvoice GET DETTAGLIO FATTURA ERROR");
                        sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                    }
                });

            }

            sdk.utils.pubsub.register('anfa.invoiceEditor.fattura.edit', mapFatturaEditHandler);

            $("#6be44169aec948ea910765afd797aaae_4").on("remove", function () {
                sdk.utils.pubsub.unregister('invoiceEditor.getCurrentInvoice', eventHandlerGetCurrentInvoice);
                sdk.utils.pubsub.unregister('invoiceEditor.getUpdateFlags', eventHandlerGetUpdateFlags);
                //sdk.utils.pubsub.unregister('anfa.editInvoice.rapportoSelected', rapportoChangeHandler);
                sdk.utils.pubsub.unregister('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);
                sdk.utils.pubsub.unregister('anfa.invoiceEditor.fattura.edit', mapFatturaEditHandler);
            });






        function __highlight(s, t) {
            var matcher = new RegExp("("+$.ui.autocomplete.escapeRegex(t)+")", "i" );
            return s.account.replace(matcher, "<strong>$1</strong>");
        };









        });

    </script>

</div>





    </div>

        <div class="pull-right margin-bottom20" id="areaBottoni">
            <button class="btn btn-primary" id="anfaBtnInserisci" type="button">INSERISCI</button>
            <button class="btn btn-primary" id="anfaBtnModifica" type="button" style="display: none;">CONFERMA</button>

        </div>


        <script type="text/javascript">
    $(function() {
        var ctx = '#6be44169aec948ea910765afd797aaae_1';

        var urlUpdateItem = '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/UpdateItem';
        var urlReadHeaed = '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/ReadHead';
        var urlAddItem = '/Youbiz.Sdk.Web/AnFa/ListaDistinteService/AddItem';



            //$('.icon-replace.icon-help.active.link', ctx).click(
            $('#helpOpener', ctx).click(
        
            function () {
                var parameter = {};
                parameter.isPopup = true;
                parameter.searchUrl = '/Youbiz.Sdk.Web/Help/Help/GetHelp';
                parameter.functionId = 'anfa_001';
                showHelp(parameter, ctx);
            });


        //pubblico errori se presenti nel model
        var modelHAsError = 'false';
        if (modelHAsError == 'true') {
            sdk.utils.pubsub.send('messagePanel.renderError', { Messages : []});
        }

        //nascondo pulsante modifica che servirà solo in fase di editing fattura
        $("#anfaBtnModifica", ctx).hide();

        //mi registro per visualizzazione pusante modifica in caso di editing fattura
        var hideshowBtnModificaHandler = function(bshow) {
            if (bshow) {
                $("#anfaBtnModifica", ctx).show();
                $("#anfaBtnInserisci", ctx).hide();
            } else {
                $("#anfaBtnModifica", ctx).hide();
                $("#anfaBtnInserisci", ctx).show();
            }
            sdk.utils.pubsub.unregister('anfa.edit.showBtnModifica', hideshowBtnModificaHandler);
        }


        var hideshowBtnInserisciHandler = function (bshow) {
            if (bshow) {
                $("#anfaBtnInserisci", ctx).show();
            } else {
                $("#anfaBtnInserisci", ctx).hide();
            }
            sdk.utils.pubsub.unregister('anfa.edit.showBtnInserisci', hideshowBtnInserisciHandler);
        }


        sdk.utils.pubsub.register('anfa.edit.showBtnModifica', hideshowBtnModificaHandler);
        sdk.utils.pubsub.register('anfa.edit.showBtnInserisci', hideshowBtnInserisciHandler);


        //mi registro per memorizzare il rapporto alla selezione --> evento anfa.rapportoSelector.rapportoSelected
        var rapportoSelezionato = null;
        var rapportoChangeHandler = function (rapportoSelected) {
            sdk.utils.pubsub.send('messagePanel.hide');
            if (rapportoSelected) {
                rapportoSelezionato = rapportoSelected;
            }
            sdk.utils.pubsub.unregister('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);
        }

        sdk.utils.pubsub.register('anfa.rapportoSelector.rapportoSelected', rapportoChangeHandler);

        //mi registro per memorizzare distintakey di riferimento per le operazioni di add/edit fattura
        var anfaDistintaKeyRef = null;
        var anfaDistintaKeyHandler = function(distintaKey) {
            if (distintaKey) {
                anfaDistintaKeyRef = distintaKey;
            }
            sdk.utils.pubsub.unregister('anfa.detail.distintakeyref', anfaDistintaKeyHandler);
        }
        sdk.utils.pubsub.register('anfa.detail.distintakeyref', anfaDistintaKeyHandler);


        //mi registro per memorizzare fatturakey modificare
        var anfaFatturaKeyRef = null;
        var anfaFatturaKeyHandler = function(fatturaKey) {
            if (fatturaKey) {
                anfaFatturaKeyRef = fatturaKey;
            }
            sdk.utils.pubsub.unregister('anfa.edit.fatturakey', anfaFatturaKeyHandler);
        }
        sdk.utils.pubsub.register('anfa.edit.fatturakey', anfaFatturaKeyHandler);


        var currentUpdateFlags = null;
        var currentInvoice = null;


        function ctrlFlagAndGetInvoice() {
            // rimuovi gli errori
            sdk.utils.pubsub.send('messagePanel.hide');


            var updateFlagsReceiver = function(updateFlags) {
                currentUpdateFlags = updateFlags;
            }

            var invoiceReceiver = function(invoice) {
                currentInvoice = invoice;
            }

            sdk.utils.pubsub.subscribe('invoiceEditor.updateFlags', updateFlagsReceiver);
            sdk.utils.pubsub.subscribe('invoiceEditor.currentInvoice', invoiceReceiver);
            // richiedi
            sdk.utils.pubsub.send('invoiceEditor.getUpdateFlags',ctx);
            sdk.utils.pubsub.send('invoiceEditor.getCurrentInvoice');


            // rimuovo l'handler
            sdk.utils.pubsub.unsubscribe('invoiceEditor.updateFlags', updateFlagsReceiver);
            sdk.utils.pubsub.unsubscribe('invoiceEditor.currentInvoice', invoiceReceiver);


            if (sdk.utils.pubsub.isNoop(currentUpdateFlags)) {
                sdk.utils.log.debugMessage('editor non ha tornato flag, probabile errore gestito da editor');
                return;
            }
        }



        $('#anfaBtnModifica', ctx).click(function () {
            //debugger;
            if (anfaFatturaKeyRef) {

                //controllo flag anagrafiche e ottengo oggetto currentInvoice
                ctrlFlagAndGetInvoice();

                // ora in currentInvoice è presente la fattura
                if (currentUpdateFlags == null || currentInvoice == null) {
                    sdk.utils.pubsub.send('messagePanel.renderError',
                        {Messages:[{ ErrorMessage: 'Dati Fattura non valorizzati correttamente System Error' }]});
                    return;
                }




                var paramKey = {
                    Key: anfaFatturaKeyRef
                }

                var currentInvoiceWithKey = $.extend(currentInvoice, paramKey);

                //debugger;
                var paramUpdateItem = {
                    fattura: currentInvoiceWithKey,
                    chkUpdateDebitore: currentUpdateFlags.chkUpdateDebitore,
                    chkUpdateEmittente: currentUpdateFlags.chkUpdateEmittente
                }
                //debugger;
                sdk.net.call(urlUpdateItem,
                    paramUpdateItem,
                    {
                        successHandler: function(me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("anfa: update item OK");
                            sdk.utils.log.debugMessage("anfa: loading details ...");

                            var parameters = {
                                url: urlReadHeaed,
                                distintakey: anfaDistintaKeyRef
                            };

                            //lancio l'evento di refresh distinta per ricaricare head e body
                            sdk.utils.pubsub.send('anfa.detail.refreshdistinta', parameters);
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.log.debugMessage("anfa: update item KO");
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });

            } else {
                sdk.utils.pubsub.send('messagePanel.renderError', [{ ErrorMessage: 'Identificativo fattura non valorizzato System Error', ErrorMessageRes: "anfa.fattura.fatturaidentifier.nokey" }]);
            }
        });


        //data entry fattura -> al click inserisci controlli ottengo current invoice e currentUpdateFlags e posso chiamare "Create"."Distinta"
        $('#anfaBtnInserisci', ctx).click(function() {

            ctrlFlagAndGetInvoice();

            // ora in currentInvoice è presente la fattura
            if (currentUpdateFlags == null || currentInvoice == null) {
                sdk.utils.pubsub.send('messagePanel.renderError',
                    {Messages:[{ ErrorMessage: 'Dati Fattura non valorizzati correttamente System Error' }]});
                return;
            }

            var param = {
                distinta: {
                    items: [currentInvoice],
                    Rapporto: rapportoSelezionato
                },
                chkUpdateDebitore: currentUpdateFlags.chkUpdateDebitore,
                chkUpdateEmittente: currentUpdateFlags.chkUpdateEmittente
            }



            //se ho distintakey valorizzato -->sto facendo un inserimento di una fattura (AddItem,Distinta) altrimenti è la prima fattura e devo creare la distinta (Create,Distinta)
            if (!anfaDistintaKeyRef) {
                //var url = '/Youbiz.Sdk.Web/AnFa/Distinta/Create';
                var url = '/Youbiz.Sdk.Web/AnFa/DataEntryService/Create';

                sdk.net.call(url,
                    param,
                    {
                        successHandler: function(me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("anfa: new item create");
                            var newdistintaKey = jsonResponse;
                            sdk.utils.log.debugMessage("anfa: loading details ...");

                            var destination = {
                                //urlmenu: '/Youbiz.Sdk.Web/AnFa/DistintaView/New',
                                urlmenu: '/Youbiz.Sdk.Web/AnFa/DataEntry/New',
                                parameters: newdistintaKey
                            };
                            sdk.utils.navigateFormByParamNew(destination);
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            //debugger;
                            sdk.utils.log.debugMessage("AnFa: error call " + url);
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });

            } else {

                var paramAddItem= {
                    distinta: anfaDistintaKeyRef,
                    fattura: currentInvoice,
                    chkUpdateDebitore: currentUpdateFlags.chkUpdateDebitore,
                    chkUpdateEmittente: currentUpdateFlags.chkUpdateEmittente

                }

                sdk.net.call(urlAddItem,
                    paramAddItem,
                    {
                        successHandler: function(me, data, jsonResponse, warningObject) {
                            sdk.utils.log.debugMessage("anfa: add item to distinta OK");
                            sdk.utils.log.debugMessage("anfa: loading details ...");

                            var parameters = {
                                url : urlReadHeaed,
                                distintakey: anfaDistintaKeyRef
                            };

                            //lancio l'evento di refresh distinta per ricaricare head e body
                            sdk.utils.pubsub.send('anfa.detail.refreshdistinta', parameters);
                        },
                        errorHandler: function(response, jqXHR, textStatus, errorThrown, errorObject) {
                            sdk.utils.log.debugMessage("anfa: add item to distinta KO");
                            sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
                        }
                    });

            }
        });



    });

        </script>


</div>


</div>


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

<script type="text/javascript">

        $(function () {

            var panelName = '6eee39c90488402ba682cc7994d6ccda_1';

            var jPanel = $('#' + panelName);
            sdk.net.loadTarget(jPanel,'/Youbiz.Sdk.Web/AnFa/dataentry/Edit');
        });

</script>

                    </div>