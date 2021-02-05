<section>
    <div id="widgetInvestimenti" class="navfrontPage navcommPage navFp outerTab" style="">
        <div class="tab-content-group">
            <div class="innerTab">
                <ul>
                    <li class="borderNoTab on"><a href="#tab0">Soluzioni guidate</a></li>
                    <li><a href="#tab1">Soluzioni self</a></li>
                    <li><a href="#tab2">Piani di accumulo</a></li>
                </ul>
            </div>
            <div class="separator"></div>
            <div class="panel-fill innerContFirstLev">
                <div class="tab-content" id="tab0" style="display: block">
                    <div class="navFpWrap">
                        <div class="navFpPage">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <div class="navFpBox">
                                        <h4 class="strongTitle">Semplifica il tuo modo di investire</h4>
                                        <p><strong>Vuoi investire in un solo fondo?</strong><br>
                                        Scegli il tuo fondo per rischio e rendimento e con pochi click lo <strong>sottoscrivi</strong>.<br><br>
                                        <strong>Vuoi crearti un portafoglio in fondi a tua misura?</strong><br>
                                        Parti dai <strong>5 Portafogli Modello</strong>, scegli quello più vicino al tuo profilo di rischio e investi in un paio di click.</p>
                                        <a href="#!" class="btn btn-primary">Vai alla Top Selection</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab1">
                    <div class="navFpWrap">
                        <div class="navFpPage">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <div class="navFpBox">
                                        <h4 class="strongTitle">Crea da solo il tuo portafoglio</h4>
                                        <p>Per te <strong>strumenti innovativi ed evoluti</strong> per investire e costruire in autonomia un portafoglio efficiente ed essere informato sulle migliori opportunità:</p>
                                        <ul>
                                            <li>Migliori e peggiori</li>
                                            <li>Ricerca e confronta</li>
                                            <li>Watchlist</li>
                                            <li>Alert</li>
                                        </ul>
                                        <a href="#!" class="btn btn-primary">Vai ai Portafogli Modello</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab2">
                    <div class="navFpWrap">
                        <div class="navFpPage">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <div class="navFpBox">
                                        <h4 class="strongTitle">Investi con i PAC</h4>
                                        <p><strong>I Pac consentono un facile accesso ai mercati finanziari</strong> grazie al loro approccio graduale all'investimento anche per chi ha una capacità ridotta di risparmio (min. 50 &euro;).<br>
                                        <br>
                                        Pianifica i tuoi obiettivi di risparmio usando il <strong>Simulatore Pac</strong> e personalizza il tuo piano di accumulo in pochi click.</p>
                                        <a href="#!" class="btn btn-primary">Vai alla ricerca fondi</a>
                                        <a href="#!" class="btn btn-primary" data-video-id="508344880">Guarda il video</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-bottom">
                    <div class="btn-wrap">
                        <a href="#!" class="btn btn-primary">Scopri tutta l'offerta</a>
                    </div>
                    <div class="ticker-wrap">
                        <ul id="ticker-content"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-shadow"></div>
</section>

<hr class="fpInvSep1">

<section>
    <?php
        virtual("/librerie/include/oggetti/tabelle/tabella_081_Totali attaccati/oggetto.php");
    ?>
</section>

<hr class="fpInvSep2">

<section>
    <h4 class="strongTitle">Altre soluzioni per i tuoi investimenti</h4>
    <div class="form-group btnWrapper">
        <div class="btn-align-left">
            <a type="button" href="#!" class="btn btn-primary" title="Linee vincolate">Linee vincolate</a>
            <a type="button" href="#!" class="btn btn-primary" title="Collocamenti">Collocamenti</a>
        </div>
        <br class="clear">
    </div>
</section>

<section style="display:none">
    <hr class="fpInvSep1">
    <div class="fpBanner"></div>
</section>

<!--overlayer tabella saldi -->
<div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Saldo</h2> </div>
            <div class="modal-body">
                <section>
                    <p>In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.</p>
                    <p>Rispetto al saldo contabile, il saldo disponibile tiene conto dell’eventuale <strong>fido</strong> e di <strong>operazioni</strong> di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong></p>
                </section>
                <section>
                    <h4>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h4>
                    <table cellspacing="0" cellpadding="0" border="0" id="saldoContTable">
                        <tbody>
                            <tr class="total">
                                <td class="left fix3Col"><strong>Saldo Contabile</strong></td>
                                <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellspacing="0" cellpadding="0" border="0" id="table1" class="fixed">
                        <thead>
                            <tr>
                                <th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
                                <th class="center" data-field="secondo">al 01/07/2016</th>
                                <th class="center" data-field="terzo">al 01/07/2016</th>
                                <th class="center" data-field="quarto">al 01/07/2016</th>
                                <th class="right" data-field="quinto">al 01/07/2016</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total">
                                <td class="left"> <span class="txthelp"><strong class="closeable" data-title="Per &quot;movimenti non contabilizzati &quot; si intendono le operazioni in accredito (&lt;strong&gt;preavvisi&lt;/strong&gt;) o in addebito (&lt;strong&gt;impegni&lt;/strong&gt;) già effettuate sul conto, ma non ancora registrate." data-toggle="tooltip">Movimenti non contabilizzati</strong></span> </td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                            </tr>
                            <tr class="total merged">
                                <td class="right"><strong>Totale impegni banking</strong></td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small">operazioni sul sito</td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small">operazioni con la carta di debito</td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small"><span class="txthelp closeable" data-title="Nelle &quot;altre operazioni&quot; sono comprese, in particolare:&lt;ul&gt;&lt;li&gt;operazioni presso agenzie territoriali&lt;/li&gt;&lt;li&gt;operazioni tramite lo &quot;Sportello telefonico&quot;&lt;/li&gt;&lt;li&gt;operazioni tramite sportelli Self Service BPM&lt;/li&gt;&lt;/ul&gt;" data-toggle="tooltip">altre operazioni</span></td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="total merged">
                                <td class="right"><span class="txthelp closeable" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;" data-toggle="tooltip"><strong>Totale impegni trading</strong></span></td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small">liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti</td>
                                <td class="bgkWhite center nega">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small">liquidit&agrave; impegnata per margine di garanzia overnight</td>
                                <td class="bgkWhite center nega">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small">P&amp;L potenziale impegnato per margine di garanzia overnight</td>
                                <td class="bgkWhite center nega">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr class="merged">
                                <td class="right text-small"><span class="txthelp closeable" data-title="Le operazioni &quot;marginate&quot; o in leva impegnano una disponibilit&agrave; inferiore rispetto a quanto occorrerebbe per impostare un’operazione marginata. Il controvalore degli impegni per operazioni marginate costituisce la liquidità bloccata per operazioni intraday." data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span></td>
                                <td class="bgkWhite center nega">&euro; 0,00</td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                                <td class="bgkWhite"></td>
                            </tr>
                            <tr>
                                <td class="right text-small">Compravendita/acquisto</td>
                                <td class="bgkWhite right nega">&euro; 0,00</td>
                                <td class="bgkWhite right nega">&euro; 0,00</td>
                                <td class="bgkWhite right nega">&euro; 0,00</td>
                                <td class="bgkWhite right nega">&euro; 0,00</td>
                            </tr>
                            <tr class="total">
                                <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong>preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale preavvisi trading</strong></span></td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                            </tr>
                            <tr>
                                <td class="right text-small">Compravendita/acquisto</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi">&euro; 0,00</td>
                            </tr>
                            <tr class="total merged">
                                <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale impegni fondi</strong></span></td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi"></td>
                                <td class="bgkWhite right posi"></td>
                                <td class="bgkWhite right posi"></td>
                            </tr>
                            <tr class="total merged">
                                <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong>preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong>preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale preavvisi fondi</strong></span></td>
                                <td class="bgkWhite center posi">&euro; 0,00</td>
                                <td class="bgkWhite right posi"></td>
                                <td class="bgkWhite right posi"></td>
                                <td class="bgkWhite right posi"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellspacing="0" cellpadding="0" border="0" id="table2" class="fixed">
                        <thead>
                            <tr>
                                <th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
                                <th class="center" data-field="secondo">al 01/07/2016</th>
                                <th class="center" data-field="terzo">al 01/07/2016</th>
                                <th class="center" data-field="quarto">al 01/07/2016</th>
                                <th class="right" data-field="quinto">al 01/07/2016</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total">
                                <td class="left"> <strong>Saldo disponibile</strong> </td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <h4>Operativit&agrave; overnight</h4>
                    <table cellspacing="0" cellpadding="0" border="0" id="">
                        <tbody>
                            <tr class="total">
                                <td class="left fix3Col"><strong>Liquidit&agrave; impegnata per vendita short</strong></td>
                                <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                            </tr>
                            <tr class="total">
                                <td class="left fix3Col"><strong>Importo accreditato per operativit&agrave; long overnight</strong></td>
                                <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
</div>
<!--FINE overlayer tabella saldi -->
<script type="text/javascript" src="/common/fe/js/jquery.webticker.min.js?r=<?php echo $random ?>"></script>
<script type="text/javascript" src="/common/fe/js/fp/fp_investimenti.js?r=<?php echo $random ?>"></script>
<script>
    function sceltaRapportoFunc (option) {
        // Testo selezione: option.text
        // Valore selezione: option.value
        // alert('Hai selezionato: ' + option.text + ' (' + option.value + ')');
        $("#tabPortafoglioInv *[data-tabcont]").removeAttr("inited");
        // Se deve essere rimosso il footer della tabella (generato dinamicamente) aggiungere questo codice:
        /* $("#tbTotale tfoot,#tbFes tfoot,#tbPct tfoot").remove() */

        $("#tabPortafoglioInv li *[data-tabcont=tabTotale]").trigger("click");
    }

    $(function () {
        createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
    });
</script>
