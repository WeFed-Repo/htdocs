<div id="contentRia3" class="contentRia">
    <div class="tabContainer2">
        <div id="tabVinc1" class="tabRiaOn">
            <div class="tabRiaCont" id="caric8">Linee attive</div>
        </div>
        <?php if ($permettiDispositive) { ?>
        <div id="tabVinc2" class="tabRia">
            <div class="tabRiaCont" id="caric9">Apri nuova linea</div>
        </div>
        <?php } ?>
        <br class="clear" />
    </div>
    <div id="lineTrasf">&nbsp;</div>
    <div class="clear"></div>
    <!--<div id="sfumaturaTrasf" class="sfumatura2lvl">&nbsp;</div>-->
    <div id="contentVinc1" class="contentRia2lvl">
        <!-- Box note -->
        <div class="boxExp">
            <div class="boxExpTop">
                <div class="boxExpMdl">
                    <img class="expTitleIco" src="/img/ret/ico1gr_boxTitolo.gif" alt="Verifica le imposte e gli oneri fiscali applicati alle somme vincolate" />
                    <p class="expTitle">Imposte e oneri fiscali applicati alle somme vincolate</p>
                    <div class="expTextIco"></div>
                    <p class="expText">Scopri di pi&ugrave;</p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="boxExpBottom" style="display:none;">
                <p class="note expNote">
                    <strong>Tassazione</strong>
                    <br> Gli interessi netti indicati in pagina sono stati calcolati in base al D.L. 66/2014 convertito nella Legge n. 89/2014, che prevede una ritenuta:</p>
                <ul class="note">
                    <li>del 20% sugli interessi maturati al 30/06/2014;</li>
                    <li>del 26% sugli interessi maturati dal 01/07/2014.</li>
                </ul>
                <p class="note expNote">
                    I vincoli attivati dal 1 luglio 2014 saranno tassati al 26%.
                    <br> Sui <strong>i vincoli attivati prima del 1 luglio 2014</strong> gli interessi netti verranno rettificati sulla base delle modifiche introdotte dalla nuova normativa.
                    <br>
                    <br> Gli interessi sono espressi per approssimazione.
                    <br>
                    <br>
                    <strong>Imposta di bollo</strong>
                    <br> Sulle somme vincolate in conto corrente &egrave; prevista l'applicazione dell'imposta di bollo proporzionale pari allo 0,20% annuo calcolata sul saldo degli importi vincolati alla data di produzione dell'estratto conto in proporzione al periodo rendicontato.</p>
            </div>
        </div>
        <!-- Fine box note -->
        <div class="row-fluid">
            <div class="riepilogoBox span6">
                <div class="tit">Riepilogo linee vincolate</div>
                <div class="titoloInt">Informazioni generali</div>
                <div class="boxGreyOut">
                    <div class="testo">Totale investito:</div>
                    <div class="importo"><span id="totaleInvestito"></span> <span class="valuta"></span></div>
                    <div class="testo">Interessi netti al <span id="dataRendimento"></span>:</div>
                    <div class="importo"><span id="totaleRendimento"></span> <span class="valuta"></span></div>
                </div>
            </div>
            <div id="boxGraficoPianoVincolo" class="riepilogoBox span6">
                <div class="titoloInt">Scadenza linee</div>
                <div id="graficoPianoVincoloDiv" class="graficoPianoVincoloDiv"></div>
                <br class="clear" />
                <div id="track1" style="width:206px;height:9px" class="track trackLV">
                    <div id="track1-left" class="track-left"></div>
                </div>
                <br class="clear" />
                <div class="didascaliaLV">Totale svincolato al <span id="dataDisponibilita"></span>:&nbsp;<strong class="importo" id="importoDisponibilita"></strong> <span class="valuta"></span></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="riepilogoBoxSotto">
            <div class="titoloInt">Dettaglio linee vincolate</div>
            <div class="nobor3">
                Filtra per: Scadenza da
                <input type="text" name="scadenzaA" id="scadenzaLvDa" class="inputManualeForm" /> a
                <input type="text" name="scadenzaA" id="scadenzaLvA" class="inputManualeForm" />
                <select name="mesi" id="mesiLVfiltro">
                    <option value="">Vincolo</option>
                </select>
                <select name="percentuale" id="tassoLVfiltro">
                    <option value="">Tasso</option>
                </select>
                <div class="clear"></div>
            </div>
            <div id="boxExcelLV"><a class="icoOper" href="#" title="Esporta le linee vincolate"><span class="icoExcel"></span>Esporta in Excel</a></div>
            <div class="clear"></div>
            <div id="divLV">
                <table class="tab17 tab17nob" cellpadding="0" cellspacing="0" id="tabellaLV">
                    <tbody id="bodyTableLV">
                        <tr>
                            <th class="uno">Nr.</th>
                            <th>Nome</th>
                            <th>Tasso
                                <br/>lordo</th>
                            <th>Durata</th>
                            <th><span class="normal">Apertura e</span>
                                <br/>Scadenza</th>
                            <th><span class="normal">Importo iniziale e</span>
                                <br/>Importo finale</th>
                            <th class="ultimo"></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
            <br/>
            <div class="invio">
                <?php if ($permettiDispositive) { ?>
                <a href="javascript:;" class="btnevid1" title="Apri nuova linea vincolata" id="apriLineaVincolata">
                    <img src="/img/ret/btn_left_sm1.gif" alt="">
                    <span>Apri nuova linea vincolata</span>
                    <img src="/img/ret/btn_right_sm1.gif" alt=""></a>
                <?php } else { ?>
                <a href="javascript:;" class="bottdis linkOff" title="Questa funzione non &egrave; disponibile nel profilo &quot;Consultare&quot;." onclick="return false;">
                    <img src="/img/ret/btndis_left.gif" alt="">
                    <span>Apri nuova linea vincolata</span>
                    <img src="/img/ret/btndis_right.gif" alt=""></a>
                <?php } ?>
            </div>
            <div class="rendimento">
                <div class="btnright">
                    <a id="aumentaRendimento" href="javascript:;" class="btnevid3" title="Aumenta il tuo rendimento"><img src="/img/ret/btn_left_sm3.gif" alt=""><span>Aumenta il tuo rendimento</span><img src="/img/ret/btn_right_sm3.gif" alt=""></a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <br/>
    </div>
    <?php if ($permettiDispositive) { ?>
    <div id="contentVinc2" class="contentRia2lvl">
        <!-- div per visualizzazione errori campi form -->
        <div id="errorDiv5">
            <div class="errorDiv">
                <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" />
                </div>
                <div class="boxtxt">
                    <div class="box_mess">
                        <img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
                        <span class="attenzione">ATTENZIONE</span>
                        <br>
                        <ul class="alert">
                            <span id="errorContent5"></span>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
            </div>
        </div>
        <!-- Box note -->
        <div class="boxExp">
            <div class="boxExpTop">
                <div class="boxExpMdl">
                    <img class="expTitleIco" src="/img/ret/ico1gr_boxTitolo.gif" alt="Verifica le imposte e gli oneri fiscali applicati alle somme vincolate" />
                    <p class="expTitle">Imposte e oneri fiscali applicati alle somme vincolate</p>
                    <div class="expTextIco"></div>
                    <p class="expText">Scopri di pi&ugrave;</p>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="boxExpBottom" style="display:none;">
                <p class="note">
                    <strong>Tassazione</strong>
                    <br> Gli interessi netti indicati in pagina sono calcolati in base al D.L. 66/2014 convertito nella Legge n. 89/2014, che prevede una ritenuta del 26% sugli interessi maturati dal 01/07/2014.
                    <br>
                    <br> Gli interessi sono espressi per approssimazione.
                    <br>
                    <br>
                    <strong>Imposta di bollo</strong>
                    <br> Sulle somme vincolate in conto corrente &egrave; prevista l'applicazione dell'imposta di bollo proporzionale pari allo 0,20% annuo calcolata sul saldo degli importi vincolati alla data di produzione dell'estratto conto in proporzione al periodo rendicontato.</p>
            </div>
        </div>
        <!-- Fine box note -->
        <div class="vincolataBox">
            <span class="tit">1. DECIDI QUANTO INVESTIRE</span>
            <div id="testoApriLV" class="text">
                Scegli l'importo da vincolare.
            </div>
            <span id="titleBoxDispo" class="tit">2. VERIFICA LA DISPONIBILIT&Agrave;</span>
            <div class="text">
                L'importo che vuoi investire sar&agrave; prelevato dal tuo deposito. Verificane, quindi, il saldo e, se necessario, trasferisci i soldi dal conto corrente al deposito.
            </div>
            <div class="boxGreyOut verifica">
                <span>Disponibilit&agrave; del deposito</span>&nbsp;&nbsp;<span class="importo"><span id="massimoLV"></span> <span class="valuta"></span></span>
                <div class="invio">
                    <a href="javascript:;" class="btnevid1" title="Trasferisci dal conto corrente al deposito" id="trasferisciDaCC">
                        <img src="/img/ret/btn_left_sm1.gif" alt="">
                        <span>Trasferisci dal conto corrente al deposito</span>
                        <img src="/img/ret/btn_right_sm1.gif" alt=""></a>
                </div>
            </div>
            <br />
            <span id="titleExtraMoney" class="tit">Promozione ExtraMoney</span>
            <div id="contentExtraMoney" class="boxExtraMoney" style="display:none;">
                <div>
                    <div class="boxBaseContent">
                        <div id="boxExtraMoney">
                            <div id="boxExtraMoneyText">
                                <div class="ExtraMoneyText">
                                    Oggi portare <strong>nuova liquidit&agrave; in Webank</strong> &egrave; ancora pi&ugrave; conveniente. Con la linea vincolata ExtraMoney puoi ottenere l'
                                    <strong><span id="percentualeEMtext"></span>% lordo annuo sui vincoli a 6 mesi</strong>. Verifica subito la tua <strong>disponibilit&agrave; ExtraMoney</strong> e apri una nuova linea vincolata. Hai tempo fino al <strong>15 maggio 2016</strong> per portare nuova liquidit&agrave; e approfittare della promozione.
                                </div>
                                <div class="ExtraMoneyLink link"><a id="extraMoneyLink" title="Come funziona ExtraMoney" href="javascript:;">Come funziona ExtraMoney</a></div>
                                <div class="ExtraMoneyNote">
                                    <span class="note">Ricordati che per vincolare occorre spostare la liquidit&agrave; dal conto corrente al deposito.<br/>
													Puoi vincolare anche solo una parte del tuo saldo <strong>ExtraMoney</strong>.</span>
                                    <span class="note">Il tuo saldo ExtraMoney non &egrave; sufficiente per aprire la linea vincolata promozionale.</span>
                                </div>
                                <div class="ExtraMoneyDisp"><strong>Disponibilit&agrave; trasferimento: <span id="dispTrasfEM"></span> <span class="valuta"></span></strong></div>
                            </div>
                            <div id="boxExtraMoneyInner">
                                <div class="labelSaldoEM">Disponibilit&agrave; ExtraMoney</div>
                                <div class="saldoEM"><span id="saldoEM"></span> <span class="valuta"></span></div>
                                <div class="clear"></div>
                                <div class="boxInnerLeftEM">
                                    <div class="vincoloEM">Vincolo a <span id="mesiEM"></span> mesi</div>
                                    <div id="parcentualeEM" class="percentualeEM"><span class="percentEM">%</span></div>
                                    <div class="tassoEM">Tasso valido fino al
                                        <br><span id="scadenzaEM"></span></div>
                                </div>
                                <div class="boxInnerRightEM">
                                    <div class="importoEM">
                                        <input type="text" class="inputManualeForm" id="importoNuovaEM" name="importoNuovaEM">
                                    </div>
                                    <div class="interessiEM">Interessi netti</div>
                                    <div class="guadagniEM"><span id="guadagnoEMint"></span>,<span id="guadagnoEMdec" class="decimaliEM"></span> <span class="valuta"></span></div>
                                    <div class="apri">
                                        <a id="nuovaEM" title="Apri ora" class="btnevid1" href="javascript:;">
                                            <img id="apriOraEM" alt="" src="/img/ret/ria_btn_apriora.gif">
                                            <div class="clear"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="helpp">
                                <a id="helpEM" title="Clicca per vedere come &egrave; calcolata la disponibilit&agrave; ExtraMoney" href="javascript:;"><img alt="Clicca per vedere come &egrave; calcolata la disponibilit&agrave; ExtraMoney" src="/img/ret/btn_extra_help.gif"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="note margBottomMedium">Messaggio pubblicitario con finalit&agrave; promozionale</p>
            </div>
            <span id="titleBoxBase" class="tit">3. SCEGLI LA LINEA</span>
            <div class="text">
                Decidi la <strong>durata</strong> dell'investimento.
                <br> Potrai <strong>svincolare</strong>, anche parzialmente, la linea <strong>prima</strong> della sua <strong>scadenza</strong>: i <strong>soldi saranno riaccreditati sul deposito</strong>.
                <br>
                <strong>Attenzione</strong>: in questo caso ti saranno corrisposti gli interessi ai <strong>tassi</strong> del <strong>deposito</strong> libero (non a quelli della linea).
            </div>
            <div class="boxGreyOut">
                <span class="importo"><label for="importoNuovaLV" id="labelImportoNuovaLV">Importo</label>&nbsp;&nbsp;<input name="importoNuovaLV" type="text" id="importoNuovaLV" class="inputManualeForm"/>&nbsp;<span class="valuta"></span></span>&nbsp;
            </div>
            <br class="clear" />
            <div id="boxTabLineeVincolate">
            </div>
        </div>
        <div class="clear"></div>
        <br/>
    </div>
    <?php } ?>
</div>
