<?php
const abilOroCap = true;
const isWebank = true;
?>

<div id="contentRia1" class="contentRia">
    <!-- div per visualizzazione errori campi form -->
    <div id="errorDiv1">
        <div class="errorDiv">
            <div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border" /></div>
            <div class="boxtxt">
                <div class="box_mess">
                    <img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
                    <span class="attenzione">ATTENZIONE</span>
                    <br>
                    <ul class="alert">
                        <span id="errorContent1"></span>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border" /></div>
        </div>
    </div>
    <div id="dynamicBoxRisp" class="row-fluid">
        <div class="leftCol span6" id="accordionSaldi">
            <!-- Box conto tecnico -->
            <div class="boxSaldo" id="boxSaldoCT">
                <div class="brContent" id="contentAccordion0">
                    <div class="brHeadWrap">
                        <div class="brHead_left">CONTO TECNICO</div>
                        <div class="clear"></div>
                    </div>
                    <div class="brContWrap">
                        <div class="BoxSaldi">
                            <div class="BoxSaldoLabel saldoDate">Saldo disponibile</div>
                            <div class="clearDate"></div>
                            <div class="BoxSaldoDate">al <span id="CTdataT0">gg/mm/aaaa</span></div>
                            <div class="BoxSaldoValoreBlack">
                                <!--span id="liquiditaDepCT" class="datatooltip" onclick="caricaDettaglioSaldi(event, this);">
                                        <span id="margineCT">99.999,00</span>
                                <span class="ttHtmlContent" id="ttHtmlContIdCT"></span>
                                </span>&nbsp;<span class="valuta"></span-->
                                <span id="liquiditaDepCT"><span id="margineCT">99.999,00</span></span>
                            </div>
                            <div class="clear"></div>
                            <div class="BoxSaldoLabel">Saldo contabile</div>
                            <div class="BoxSaldoValoreGreen"><span id="saldoCT">99.999,00</span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                        </div>
                        <div id="movimentiCT" class="BoxMovimenti"></div>
                        <div id="dettaglioCT" class="BoxDettagli">
                            <a id="dettaglioCTLink" href="javascript:;"></a>
                        </div>
                        <div class="clear"></div>
                        <!-- Questa parte si carica solo all'espansione del box di C/T -->
                        <div class="infoCT intestato">
                            <strong>Intestato a</strong>: <span id="intestazioneCT"></span>
                            <br/>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- /Questa parte si carica solo all'espansione del box di C/T -->
                </div>
            </div>
            <!-- /Box conto tecnico -->
            <!-- Box conto corrente -->
            <div class="boxSaldo" id="boxSaldoCC">
                <div class="brContent xbank" id="contentAccordion1">
                    <div class="brHeadWrap">
                        <div class="brHead_left">
                            <?php if (!$isWebank) { ?>RAPPORTO<?php } else { ?> <?php echo strtoupper($contoLabelLongSingLow) ?> <?php } ?>
                        </div>
                        <div class="brHead_puls" id="accordionPuls1">
                            <div class="brHead_puls_text">dettagli</div>
                            <div class="brHead_puls_loading" style="display:none"></div>
                        </div>
                        <div class="brHead_saldo" id="accordionSaldo1"><span id="saldoCCSintesi">3.000,00</span>&nbsp;&euro;</div>
                    </div>
                    <div class="brContWrap">
                        <div class="clear"></div>
                        <div class="BoxSaldi">
                            <div class="BoxSaldoLabel saldoDate">Saldo disponibile</div>
                            <div class="clearDate"></div>
                            <div id="BoxSaldoDateCC" class="BoxSaldoDate">al <span id="CCdataT0">gg/mm/aaaa</span></div>
                            <div class="BoxSaldoValoreBlack">
                                <!--span id="liquiditaDepCC" class="datatooltip" onclick="caricaDettaglioSaldi(event, this);">
                                        <span id="margineCC"></span>
                                <span class="ttHtmlContent" id="ttHtmlContIdCC"></span></span>&nbsp;<span class="valuta"></span-->
                                <span id="liquiditaDepCC"><span id="margineCC">99.999,00</span></span>
                            </div>
                            <div class="clear"></div>
                            <div id="diCuiCC">
                                <div id="fidoCCIco" class="icoDiCui"></div>
                                <div id="fidoCCDiv" class="coordinateConto">di cui fido: <span id="fidoCC"></span>&nbsp;<span class="valuta"></span></div>
                                <div id="lvCCIco" class="icoDiCui"></div>
                                <div id="lvCCDiv" class="coordinateConto">di cui linee vincolate: <span id="lvCC"></span>&nbsp;<span class="valuta"></span> <a class="linkListaLV" href="">dettagli</a></div>
                                <div class="clear"></div>
                            </div>
                            <div class="BoxSaldoLabel">Saldo contabile</div>
                            <div class="BoxSaldoValoreGreen"><span id="saldoCC"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                        </div>
                        <div id="movimentiCC" class="BoxMovimenti"></div>
                        <div id="dettaglioCC" class="BoxDettagli">
                            <a id="dettaglioCCLink" href="javascript:;"></a>
                        </div>
                        <div class="clear"></div>
                        <!-- Questa parte si carica solo all'espansione del box di C/C -->
                        <div class="infoRichieste" id="infoRichieste1">
                            <div id="coordinateSep" class="lineSep"></div>
                            <div class="left">
                                <div id="coordinateCC2" class="coordinateConto intestato"><strong>Intestato a</strong>
                                    <br/><span id="intestazioneCC"></span></div>
                                <div class="clear"></div>
                                <div id="ibanCC2" class="coordinateConto"><strong>Iban</strong>
                                    <br/><span id="ibanCC"></span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="right">
                                <div class="coordinateConto"><strong>Numero <?php echo $contoLabelShortSingLow ?></strong>
                                    <br/><span id="numeroCC"></span></div>
                                <div class="clear"></div>
                            </div>
                            <div class="iconCont">
                                <a id="linkDettagliCoordinate" href="javascript:;" title="Dettaglio">
                                    <img id="imgDettagliCoordinate" src="/img/ret/ico1gr_dettaglio.gif" alt="Dettaglio" /></a>
                                <a id="LBlinkInviaCoordinate" href="javascript:;" title="Invia">
                                    <img id="imgInviaCoordinate" src="/img/ret/ico1gr_mail.gif" alt="Invia mail" /></a>
                                <a id="LBlinkStampaCoordinate" href="javascript:;" title="Stampa" class="last" target="_blank">
                                    <img id="imgStampaCoordinate" src="/img/ret/ico1gr_stampa.gif" alt="Stampa" /></a>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                    </div>
                </div>
            </div>
            <!-- /Box conto corrente -->
            <!-- Box Deposito -->
            <div class="boxSaldo" id="boxSaldoCD">
                <div class="brContent<?php if (!isWebank) { ?> xbank<?php } ?>" id="contentAccordion2">
                    <div class="brHeadWrap">
                        <div class="brHead_left">DEPOSITO</div>
                        <div class="brHead_puls" id="accordionPuls2">
                            <div class="brHead_puls_text">dettagli</div>
                            <div class="brHead_puls_loading" style="display:none"></div>
                        </div>
                        <div class="brHead_saldo" id="accordionSaldo2"><span id="saldoCDSintesi">3.000,00</span>&nbsp;<span class="valuta"></span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="brContWrap">
                        <div class="BoxSaldi">
                            <div class="BoxSaldoLabel">Saldo disponibile</div>
                            <div class="BoxSaldoValoreBlack"><span id="margineCD"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                            <div class="BoxSaldoLabel">Saldo contabile</div>
                            <div class="BoxSaldoValoreGreen"><span id="saldoCD"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                        </div>
                        <div id="movimentiCD" class="BoxMovimenti"></div>
                        <div id="dettaglioCD" class="BoxDettagli">
                            <a id="dettaglioCDLink" href="javascript:;"></a>
                        </div>
                        <div class="clear"></div>
                        <!-- Questa parte si carica solo all'espansione del box di C/C -->
                        <div id="infoRichieste2" class="infoRichieste">
                            <div class="BoxSaldoLabel">Guadagno netto</div>
                            <div class="BoxSaldoValoreBlack"><span id="guadagnoNettoCD"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                            <div class="coordinateConto coordinateFirst intestato"><strong>Intestato a</strong>: <span id="intestazioneCD"></span></div>
                            <div class="coordinateConto" id="numDep"><strong>Numero Deposito</strong>: <span id="numeroCD"></span></div>
                            <div class="clear"></div>
                            <div id="coordinateSep2" class="lineSep"></div>
                            <div id="tassoUnico">
                                <div class="left">
                                    <div id="boxTasso">
                                        <div id="boxTassoText">TASSO</div>
                                        <div id="boxTassoPerc"><span id="tassoCD"></span>%</div>
                                    </div>
                                </div>
                                <div class="right">
                                    <span id="condizioniCD">Condizioni del deposito</span>
                                    <a id="linkCondizioniCD" href="javascript:;" title="Vedi tutte le condizioni">Vedi tutte le condizioni</a>&gt;
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div id="tassiMultipli">
                                <div class="boxTassoMultiplo">
                                    <div class="boxTassoMultiploDa">fino a</div>
                                    <div class="boxTassoMultiploA"><span class="boxTassoMultiploAVal"></span>&nbsp;<span class="valuta"></span></div>
                                    <div class="boxTassoMultiploText">TASSO</div>
                                    <div class="boxTassoMultiploPerc"><span class="tassoMultiploCD"></span>%</div>
                                </div>
                                <div class="boxTassoMultiplo">
                                    <div class="boxTassoMultiploDa">da <span class="boxTassoMultiploDaVal"></span>&nbsp;<span class="valuta"></span></div>
                                    <div class="boxTassoMultiploA">a <span class="boxTassoMultiploAVal"></span>&nbsp;<span class="valuta"></span></div>
                                    <div class="boxTassoMultiploText">TASSO</div>
                                    <div class="boxTassoMultiploPerc"><span class="tassoMultiploCD"></span>%</div>
                                </div>
                                <div class="boxTassoMultiplo tasso3">
                                    <div class="boxTassoMultiploDa">oltre i</div>
                                    <div class="boxTassoMultiploA"><span class="boxTassoMultiploDaVal"></span>&nbsp;<span class="valuta"></span></div>
                                    <div class="boxTassoMultiploText">TASSO</div>
                                    <div class="boxTassoMultiploPerc"><span class="tassoMultiploCD"></span>%</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                    </div>
                </div>
            </div>
            <!-- /Box Deposito -->
            <!-- Linee vincolate -->
            <div class="boxSaldo" id="boxSaldoLV">
                <!-- boxSaldoLast -->
                <div class="brContent" id="contentAccordion3">
                    <div class="brHeadWrap">
                        <div class="brHead_left">LINEE VINCOLATE</div>
                        <div id="brHead_EMico" style="display:none;"></div>
                        <div class="brHead_puls" id="accordionPuls3">
                            <div class="brHead_puls_text">dettagli</div>
                            <div class="brHead_puls_loading" style="display:none"></div>
                        </div>
                        <div class="brHead_saldo" id="accordionSaldo3"><span id="totaleLVSintesi">3.000,00</span>&nbsp;<span class="valuta"></span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="brContWrap">
                        <div class="BoxSaldi">
                            <div class="BoxSaldoLabel">Totale investito</div>
                            <div class="BoxSaldoValoreGreen"><span id="totaleLV"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                            <div class="lineSep" id="coordinateSep3a"></div>
                            <div id="prossimaLVlabel" class="BoxSaldoLabel">Scadenza prossima linea</div>
                            <div class="BoxSaldoScadenzaData"><span id="scadenzaProssimaLV"></span></div>
                            <div class="clear"></div>
                        </div>
                        <a id="apriOggi" href="javascript:;"></a>
                        <div class="clear"></div>
                        <!-- Questa parte si carica solo all'espansione del box di C/C -->
                        <div id="infoRichieste3" class="infoRichieste">
                            <div class="clear"></div>
                            <div class="BoxSaldoValore">Importo: <span id="valoreProssimaLV">300,00</span>&nbsp;<span class="valuta"></span>&nbsp;&nbsp;&nbsp;Interessi netti: <span id="rendimentoProssimaLV" title="Ancora pi&ugrave; conveniente - I vincoli attivati dal 1&deg; gennaio 2012 saranno tassati al 20%"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                            <div class="lineSep" id="coordinateSep3"></div>
                            <div class="clear"></div>
                            <div class="Tasso">
                                <div class="boxTassoLeft">
                                    <div id="boxLV1" class="boxTassoBox2b">
                                        <a href="javascript:;" id="promozioneLV1" class="promozioneLV">&nbsp;</a>
                                        <span id="testoTassoLordo1" class="black"><strong id="tassoMesi1">3</strong> mesi</span>
                                        <br />
                                        <span id="testoTassoB1" class="percentuale green"><span id="tassoB1" class="tasso">4,5</span>%</span>
                                        <br />
                                    </div>
                                    <div id="boxLV2" class="boxTassoBox2b">
                                        <a href="javascript:;" id="promozioneLV2" class="promozioneLV">&nbsp;</a>
                                        <span id="testoTassoLordo2" class="black"><strong id="tassoMesi2">6</strong> mesi</span>
                                        <br />
                                        <span id="testoTassoB2" class="percentuale green"><span id="tassoB2" class="tasso">4,5</span>%</span>
                                        <br />
                                    </div>
                                    <div id="boxLV3" class="boxTassoBox2b">
                                        <a href="javascript:;" id="promozioneLV3" class="promozioneLV">&nbsp;</a>
                                        <span id="testoTassoLordo3" class="black"><strong id="tassoMesi3">12</strong> mesi</span>
                                        <br />
                                        <span id="testoTassoB3" class="percentuale green"><span id="tassoB3" class="tasso">4,9</span>%</span>
                                        <br />
                                    </div>
                                    <div id="boxLV4" class="boxTassoBox2b">
                                        <a href="javascript:;" id="promozioneLV4" class="promozioneLV">&nbsp;</a>
                                        <span id="testoTassoLordo4" class="black"><strong id="tassoMesi4">24</strong> mesi</span>
                                        <br />
                                        <span id="testoTassoB4" class="percentuale green"><span id="tassoB4" class="tasso">5,0</span>%</span>
                                        <br />
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div id="boxLV5" class="boxTassoBox2">
                                    <a href="javascript:;" id="promozioneLV5" class="promozioneLV">&nbsp;</a>
                                    <span id="testoTassoLordo5" class="black">Vincolo<br /><strong id="tassoMesi5">24</strong> mesi</span>
                                    <br />
                                    <span id="testoTassoB5" class="percentuale green"><span id="tassoB5" class="tasso">5,0</span>%</span>
                                    <br />
                                </div>
                                <div id="boxLV6" class="boxTassoBox2">
                                    <a href="javascript:;" id="promozioneLV6" class="promozioneLV">&nbsp;</a>
                                    <span id="testoTassoLordo6" class="black">Vincolo<br /><strong id="tassoMesi6">24</strong> mesi</span>
                                    <br />
                                    <span id="testoTassoB6" class="percentuale green"><span id="tassoB6" class="tasso">5,0</span>%</span>
                                    <br />
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div id="boxVediTutteLV" class="BoxSaldoLink">
                                <a id="linkVediTutteLV" href="javascript:;">Vedi le linee attive</a>
                                <span id="altTextVediTutteLV">Vedi le linee attive</span>
                            </div>
                            <div class="BoxSaldoTit">
                                <a id="linkVediTutteLVBis" href="javascript:;">Apri una nuova linea</a>
                                <span id="altTextVediTutteLVBis" title="Questa funzione non &egrave; disponibile nel profilo &quot;Consultare&quot;.">Apri una nuova linea</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                </div>
            </div>
            <!-- /Linee vincolate -->
            <!-- Liquidit? derivati -->
            <div class="boxSaldo" id="boxSaldoDer">
                <div class="brContent" id="contentAccordion4">
                    <div class="brHeadWrap">
                        <div class="brHead_left">LIQUIDIT&Agrave; DER.</div>
                        <div class="brHead_puls" id="accordionPuls4">
                            <div class="brHead_puls_text">dettagli</div>
                            <div class="brHead_puls_loading" style="display:none"></div>
                        </div>
                        <div class="brHead_saldo" id="accordionSaldo4"><span id="saldoCDVSintesi">3.000,00</span>&nbsp;<span class="valuta"></span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="brContWrap">
                        <div class="BoxSaldi">
                            <div class="BoxSaldoLabel">Saldo contabile</div>
                            <div class="BoxSaldoValoreGreen"><span id="saldoCDV">99.999,00</span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                            <div class="BoxSaldoLabel">Saldo disponibile</div>
                            <div class="BoxSaldoValoreBlack"><span id="margineCDV">12.345,67</span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                        </div>
                        <div id="movimentiCDER" class="BoxMovimenti"></div>
                        <div id="dettaglioCDER" class="BoxDettagli">
                            <a id="dettaglioCDERLink" href="javascript:;"></a>
                        </div>
                        <div class="clear"></div>
                        <!-- Questa parte si carica solo all'espansione del box di C/C -->
                        <div id="infoRichieste4" class="infoRichieste" style="display:none">
                            <div class="BoxSaldoValoreBlack"><span id="guadagnoNettoCDV">12.345,67</span>&nbsp;<span class="valuta"></span></div>
                            <div class="BoxSaldoLabel">Margine impegnato</div>
                            <div class="BoxSaldoLabelRow2">per posizioni aperte</div>
                            <div class="clear"></div>
                            <div id="coordinateSep4" class="lineSep"></div>
                            <div id="boxProfitLoss" <?php if (!isWebank) { ?>class="noImg"<?php } ?>>
                                <div id="boxProfitLossText">Profit &amp; loss potenziali</div>
                                <div id="boxProfitLossValore"><span id="profitLossCDV">12.345,67</span>&nbsp;<span
                                            class="valuta"></span></div>
                                <div id="boxProfitLossNote">Dato calcolato in base alle ultime quotazioni disponibili
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                </div>
            </div>
            <!-- /Liquidit? derivati -->
        </div>
        <div class="rightCol span6" id="dashboardRight">
            <h3 id="titleTuoiSoldi" <?php if (!isWebank) { ?> class="xxxBank"
            <?php } ?>>I tuoi soldi</h3>
            <?php if (abilOroCap) { ?>
                <!-- bottone il mio patrimonio -->
                <div id="mioPatrimonio">
                    <a title="Il mio patrimonio" class="btnformPatrimonio" href="javascript:;"><img alt=""
                                                                                                    src="/img/ret/btn_left_patr.gif"><span>IL MIO PATRIMONIO</span><img
                                alt="" src="/img/ret/btn_right_patr.gif">
                        <br class="clear"/>
                    </a>
                    <br class="clear"/>
                </div>
                <!-- FINE bottone il mio patrimonio -->
            <?php } ?>
            <div class="clear"></div>
            <div id="tabLiquidita" class="tabContainer2<?php if (abilOroCap) { ?> btnPatr<?php } ?>">
                <div id="tabLiquidita1" class="tabRia">
                    <div class="tabRiaCont">Ripartizione</div>
                </div>
                <div id="tabLiquidita2" class="tabRia">
                    <div class="tabRiaCont">Andamento</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="ripartizioneLeft" class="boxBaseFixed">
                <!-- Box con grafico a torta -->
                <div id="contentLiquidita1" class="boxBase boxBaseRipartizione">
                    <!-- Box Ripartizione -->
                    <div class="boxRipartizione">
                        <div id="boxRipartizioneLeft" class="left">
                            <div id="graficoContiBox">
                                <div id="graficoContiDiv" class="graficoContiDiv"></div>
                                <div id="graficoContiDivInner" class="graficoContiDiv"></div>
                            </div>
                        </div>
                        <div id="boxRipartizioneRight" class="right">
                            <div class="right1">
                                <div class="legMargine leg1">Liquidit&agrave;</div>
                                <div class="legDisp leg2">
                                    <?php echo $contoLabelLongSingUp ?>
                                </div>
                                <div class="legFido leg2">Fido</div>
                                <div id="legDerDiv" class="legDer leg2">Derivati</div>
                            </div>
                            <div class="right2">
                                <div class="legRisparmio leg1">Risparmio</div>
                                <div class="legDep leg2">Deposito</div>
                                <div class="legLinee leg2">Linee vincolate</div>
                            </div>
                            <div class="legFiletto"></div>
                            <div id="ripartizioneTot" class="tot">Tot.</div>
                            <div id="ripartizioneImporto" class="importo"><span id="totaleRipartizione"></span>&nbsp;<span class="valuta"></span></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <!-- /Box Ripartizione -->
                </div>
                <!-- Box con grafico andamento -->
                <div id="contentLiquidita2" class="boxBase">
                    <div class="boxBaseBorLeft">
                        <div class="boxBaseBorRight">
                            <div class="boxBaseBorBottom">
                                <div class="boxBaseTopRight">
                                    <div class="boxBaseBottomLeft">
                                        <div class="boxBaseBottomRight">
                                            <!-- Box Ripartizione -->
                                            <div class="boxContieneAndamento2">
                                                <div id="graficoAndamentiDiv" class="graficoAndamentiDiv"></div>
                                                <div class="legMargine">Saldo medio di C/C</div>
                                                &nbsp;&nbsp;&nbsp;
                                                <div class="legRisparmio">Saldo medio di Dep.</div>
                                            </div>
                                            <div class="clear"></div>
                                            <!-- /Box Ripartizione -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="totLiquidita" class="boxBase<?php if ($abilOroCap) { ?> btnPatr<?php } ?>" style="display:none">
                <!-- Box Ripartizione -->
                <div class="boxRipartizione boxTotale">
                    <div id="ripartizioneTotA" class="tot">Tot. saldo disponibile</div>
                    <div id="ripartizioneImportoA" class="importo"><span id="totaleRipartizione2"></span>&nbsp;<span class="valuta"></span></div>
                    <div class="clear"></div>
                </div>
                <!-- /Box Ripartizione -->
            </div>
            <div id="dashboardBanner">
                <a href="javascript:;" target="_blank"></a>
            </div>
            <div class="clear"></div>
            <h3 id="titleTrasferimento" <?php if (!$isWebank) { ?> class="xxxBank" <?php } else if ($abilOroCap) { ?> class="btnPatr" <?php } ?>>Trasferimenti veloci</h3>
            <div id="tabTrasferimento" class="tabContainer2">
                <div id="tabTrasferimento1" class="tabRiaOn">
                    <div class="tabRiaCont">C/C &lt;&nbsp;&gt; DEP</div>
                </div>
                <div id="tabTrasferimento2" class="tabRia">
                    <div class="tabRiaCont">C/C &lt;&nbsp;&gt; DER</div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="TrasferimentoLeft" class="boxBaseFixed2">
                <div id="contentTrasferimento1" class="boxBase boxBaseTrasferimento">
                    <div class="boxBaseContent">
                        <div id="boxTrasfDep">
                            <?php if ($permettiDispositive) { ?>
                                <input type="hidden" id="dataDisposizione"/>
                                <div class="inputManuale" id="etichettaCD">Versa sul deposito</div>
                                <div class="inputManualeForm">
                                    <input type="text" id="importoCD"/>
                                </div>
                                <div class="inputManualeImg">
                                    <a href="javascript:;" id="aggiungiCD"><img
                                                src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui"/></a>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManualeInfo first">Disponibilit&agrave; per il trasferimento:
                                    <a href="javascript:;" id="dispTrasfCDLink"></a>&nbsp;<span class="valuta"></span>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManuale" id="etichettaCC">Versa sul
                                    <?php echo strtoupper($contoLabelLongSingLow) ?>
                                </div>
                                <div class="inputManualeForm">
                                    <input type="text" id="importoCC" data-error=""/>
                                </div>
                                <div class="inputManualeImg">
                                    <a href="javascript:;" id="aggiungiCC"><img
                                                src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui"/></a>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManualeInfo">Disponibilit&agrave; per il trasferimento:
                                    <a href="javascript:;" id="dispTrasfCCLink"></a>&nbsp;<span class="valuta"></span>
                                </div>
                                <div class="clear"></div>
                            <?php } else { ?>
                                <p>
                                    Per fare trasferimenti veloci, occorre accedere al sito con il profilo &quot;Consultare
                                    e Disporre&quot;.
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div id="contentTrasferimento2" class="boxBase boxBaseTrasferimento" style="display:none;">
                    <div class="boxBaseContent">
                        <div id="boxTrasfDer">
                            <?php if ($permettiDispositive) { ?>
                                <input type="hidden" id="dataDisposizione2"/>
                                <div class="inputManuale" id="etichettaCDER">Versa sulla liquidit&agrave; der.</div>
                                <div class="inputManualeForm">
                                    <input type="text" id="importoCDER"/>
                                </div>
                                <div class="inputManualeImg">
                                    <a href="javascript:;" id="aggiungiCDER"><img
                                                src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui"/></a>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManualeInfo first">Disponibilit&agrave; per il trasferimento:
                                    <a href="javascript:;" id="dispTrasfCDERLink"></a>&nbsp;<span class="valuta"></span>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManuale" id="etichettaCC2">Versa sul
                                    <?php echo strtoupper($contoLabelLongSingLow) ?>
                                </div>
                                <div class="inputManualeForm">
                                    <input type="text" id="importoCC2"/>
                                </div>
                                <div class="inputManualeImg">
                                    <a href="javascript:;" id="aggiungiCC2"><img
                                                src="/wscmn/img/ret/ria_button_arrow.gif" title="Esegui"/></a>
                                </div>
                                <div class="clear"></div>
                                <div class="inputManualeInfo">Disponibilit&agrave; per il trasferimento:
                                    <a href="javascript:;" id="dispTrasfCC2Link"></a>&nbsp;<span class="valuta"></span>
                                </div>
                                <div class="clear"></div>
                            <?php } else { ?>
                                <p>
                                    Per fare trasferimenti veloci, occorre accedere al sito con il profilo &quot;Consultare
                                    e Disporre&quot;.
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CASO RISPARMIO EVOLUTO -->
    <?php  if (!$isWebank) {  ?>
        <div id="staticBoxRisp">
            <!-- Box conto corrente -->
            <div class="" id="boxSaldoCCxxx">
                <div class="brContent" id="contentAccordion1xxx">
                    <div class="infoRichieste" id="infoRichiestexxx">
                        <div class="BoxSaldiPlus">
                            <div id="infoRichiesteRBF" class="row-fluid">
                                <div class="span7">
                                    <div class="BoxSaldoLabel saldoDate">Saldo disponibile</div>
                                    <div id="BoxSaldoDateCCxxx" class="BoxSaldoDate">al <span id="CCdataT0xxx">gg/mm/aaaa</span>
                                    </div>
                                    <div class="BoxSaldoValoreBlack">
                                        <span id="margineCCxxx"></span>&nbsp;<span class="valuta"></span>
                                        <!--span id="liquiditaDepCCxxx" href="javascript:;" class="datatooltip" onclick="caricaDettaglioSaldi(event, this);"><img title="Saldo disponibile giorni successivi" alt="Saldo disponibile giorni successivi" src="/img/ret/ico1gr_calendariodettagli.gif"/></span>
                                        <span class="ttHtmlContent" id="ttHtmlContIdCCxxx"></span-->

                                        <span id="liquiditaDepCC"><span id="margineCC">99.999,00</span></span>
                                    </div>
                                    <div class="clear"></div>
                                    <div id="diCuiCCxxx">
                                        <div id="fidoCCDivxxx" class="coordinateConto"><span class="TxtRientro">di cui fido:</span>
                                            <div class="flRight"><span id="fidoCCxxx"></span>&nbsp;<span
                                                        class="valuta"></span></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <div id="saldoDispCarta" style="display:none">
                                        <div class="BoxSaldoLabel saldoDate">Saldo disponibile</div>
                                        <div class="BoxSaldoValoreGreen">
                                            <span id="margineCCxxxCarta"></span>&nbsp;<span class="valuta"></span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div id="BoxCCxxxRisp">
                                        <div class="saldoRow active">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Saldo contabile</div>
                                                <div class="BoxSaldoValoreDispo"><span
                                                            id="saldoCCxxx"></span>&nbsp;<span class="valuta"></span>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <div id="rispCCDivEvo" class="coordinateConto saldoMacroRow" data-index="2"
                                             style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">di cui Risparmio Ben Fatto</div>
                                                <div class="BoxSaldoValoreDispo"><span id="rispCCEvo"></span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="coordinateConto saldoDettRow" data-index="0" style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Risparmio Libero</div>
                                                <div class="BoxSaldoValoreDispo"><span>1000,00</span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="coordinateConto saldoDettRow" data-index="1" style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Obiettivo 1</div>
                                                <div class="BoxSaldoValoreDispo"><span>1000,00</span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="coordinateConto saldoDettRow" data-index="2" style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Obiettivo 2</div>
                                                <div class="BoxSaldoValoreDispo"><span>1000,00</span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="coordinateConto saldoDettRow" data-index="3" style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Obiettivo 3</div>
                                                <div class="BoxSaldoValoreDispo"><span>1000,00</span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div class="coordinateConto saldoDettRow" data-index="4" style="display:none;">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">Obiettivo 4</div>
                                                <div class="BoxSaldoValoreDispo"><span>1000,00</span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div id="lvCCDivxxx" class="coordinateConto saldoMacroRow" data-index="1">
                                            <div class="saldoRowSx"></div>
                                            <div class="saldoRowCx">
                                                <div class="BoxSaldoLabel">di cui Linee vincolate</div>
                                                <div class="BoxSaldoValoreDispo"><span id="lvCCxxx"></span>&nbsp;<span
                                                            class="valuta"></span></div>
                                            </div>
                                            <div class="saldoRowDx"></div>
                                        </div>
                                        <div id="boxLinkLV"><a href="#" class="linkListaLV">dettagli</a></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <!-- ICONE MOVIMENTI E DETTAGLI -->
                                    <div id="btnAttivaCol" class="btnWrapper">
                                        <div class="BoxPulsanteDx">
                                            <div>
                                                <a href="" class="spButton backgroundBank"
                                                   title="Attiva il servizio di Estratto conto e contabili"
                                                   id="linkAttivaColLinkxxx"><span>attiva il servizio di Estratto conto e contabili</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="BoxRBFDx" class="span5">
                                    <!-- ICONE MOVIMENTI E DETTAGLI -->
                                    <div class="btnWrapper">
                                        <div class="BoxPulsanteDx">
                                            <div class="BoxIconeSx">
                                                <a title="Dettagli" href="javascript:;" id="dettaglioCCLinkxxx">
                                                    <img alt="Dettagli" src="/img/ret/ico1gr_dettaglio.gif"
                                                         id="imgDettagliCoordinatexxx"></a>
                                                <a title="Ultimi 10 movimenti" href="javascript:;" id="movimentiCCxxx">
                                                    <img alt="Ultimi 10 movimenti"
                                                         src="/img/ret/ico1gr_10movimenti.gif"></a>
                                                <a title="Ultimo estratto conto" href="javascript:;" id="UltEstrCont">
                                                    <img alt="Ultimo estratto conto" src="/img/ret/ico1gr_pdf.gif"></a>
                                                <a title="Ultime 10 contabili online" href="javascript:;" id="Ult10Cont"
                                                   class="last">
                                                    <img alt="Ultime 10 contabili online"
                                                         src="/img/ret/ico1gr_ammortamento.gif"></a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- GRAFICO CONTO -->
                                    <div id="chartxxxWrap">
                                        <div id="chartxxxShadow"></div>
                                        <div id="chartxxx"></div>
                                        <div id="chartxxxHighlighted"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- TRASFERIMENTI TRA C/C E RISPARMIO/OBIETTIVI -->
                            <div id="boxTrasfVsEvoTit" class="row-fluid">
                                <div class="span12 TitRiaTxT"><span>Trasferimenti veloci</span></div>
                            </div>
                            <div id="boxTrasfVsEvoWrap" class="contOverflow">
                                <div class="row-fluid" id="boxTrasfEvo">
                                    <!-- NUOVO BOX TRASFERIMENTO -->
                                    <?php if ($permettiDispositive) { ?>
                                        <div class="span12 wrapTrasferisci">
                                            <input type="hidden" id="dataDisposizioneEvo">
                                            <div id="boxTrasfVsEvo">
                                                <br>
                                                <div class="formGeneric">
                                                    <div class="row-fluid" id="SelectDestBox">
                                                        <div class="span3">Trasferisci verso</div>
                                                        <div class="span3">
                                                            <label>
                                                                <input type="radio" class="radio" value=""
                                                                       name="destinazione" id="destCC"
                                                                       checked="checked">conto corrente</label>
                                                        </div>
                                                        <div class="span3">
                                                            <label>
                                                                <input type="radio" class="radio" value=""
                                                                       name="destinazione" id="destRBF">Risparmio Ben
                                                                Fatto</label>
                                                        </div>
                                                        <div class="span3">
                                                            <select id="selDestOb" style="display:none;">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="wrapTrasferisci">
                                                        <!-- CASO CONTO SELEZIONATO -->
                                                        <div id="trasfCCSelected">
                                                            <div class="row-fluid">
                                                                <div class="span3">Importo</div>
                                                                <div class="span3">
                                                                    <input type="text" data-error="" id="importoEvoCC"
                                                                           class="withIco impRisp">&nbsp;<span
                                                                            class="valuta"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span3">Disponibilit&agrave; per il
                                                                    trasferimento
                                                                </div>
                                                                <div class="span3">
                                                                    <a href="#" id="dispTrasfEvoCCLink"><span
                                                                                id="dispTrasfEvoCCImp"></span>&nbsp;<span
                                                                                class="valuta"></span></a>
                                                                </div>
                                                                <div class="span6">
                                                                    <a class="spButton backgroundBank flRight"
                                                                       href="javascript:;" id="aggiungiEvoCC">trasferisci</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- CASO EVO SELEZIONATO -->
                                                        <div id="trasfRBFSelected" style="display:none;">
                                                            <div class="row-fluid">
                                                                <div class="span3">Importo</div>
                                                                <div class="span3">
                                                                    <input type="text" class="withIco impRisp"
                                                                           id="importoCCEvo"
                                                                           data-tooltip="Il saldo di Risparmio Ben Fatto non pu&ograve; essere superiore a 5.000,00 &euro;">&nbsp;<span
                                                                            class="valuta"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <div class="span3">Disponibilit&agrave; per il
                                                                    trasferimento
                                                                </div>
                                                                <div class="span3">
                                                                    <span class="txthelp"
                                                                          data-tooltip="La disponibilit&agrave; per il trasferimento &egrave; calcolata sottraendo dal tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenza, l'importo gi&agrave; versato su Risparmio Ben Fatto e la soglia minima di conto corrente impostata."><span
                                                                                id="dispTrasfCCEvoLink"></span>&nbsp;<span
                                                                                class="valuta"></span></span>
                                                                </div>
                                                                <div class="span6">
                                                                    <a class="spButton backgroundBank flRight"
                                                                       href="javascript:;" id="aggiungiCCEvo">trasferisci</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- esito positivo-->
                                                        <div class="BoxRiaEsi" id="boxTrasfRBFScad"
                                                             style="display:none">
                                                            <div class="boxesito attenzione">
                                                                <div class="middle"><span class="imgCont"></span>
                                                                    <div class="text boxTrasfEsiEvo">
                                                                        L'obiettivo risulta attualmente
                                                                        <strong>scaduto</strong>.
                                                                        <br> Puoi decidere se eliminare l'obiettivo o
                                                                        modificarne la data.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- esito negativo-->
                                            <div class="BoxRiaEsi" id="boxTrasfRBFEsiNega" style="display:none">
                                                <div class="boxesito negativo">
                                                    <div class="middle"><span class="imgCont"></span>
                                                        <div class="text boxTrasfEsiEvo">
                                                            <span class="msg"></span>
                                                            <br>
                                                            <a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- esito positivo-->
                                            <div class="BoxRiaEsi" id="boxTrasfRBFEsiPosi" style="display:none">
                                                <div class="boxesito positivo">
                                                    <div class="middle"><span class="imgCont"></span>
                                                        <div class="text boxTrasfEsiEvo">
                                                            <strong>Trasferimento eseguito correttamente</strong>
                                                            <br>
                                                            <span>Importo <strong
                                                                        id="importoDaVersareRBF"></strong></span>
                                                            <br/>
                                                            <span>Data di accredito <strong
                                                                        id="dataRBF"></strong></span>
                                                            <a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- obiettivo raggiunto-->
                                            <div class="BoxRiaEsi" id="boxTrasfRBFRagg" style="display:none">
                                                <div class="boxesito positivo">
                                                    <div class="middle"><span class="imgCont"></span>
                                                        <div class="text boxTrasfEsiEvo">
                                                            <strong>Ben Fatto!<br>
                                                                L'obiettivo &quot;<strong id="obRaggName"></strong>&quot;
                                                                &egrave; stato raggiunto.</strong>
                                                            <br>
                                                            <br> La somma risparmiata &egrave; stata automaticamente
                                                            trasferita sul tuo Risparmio Libero.
                                                            <br> Potrai realizzare l'obiettivo in qualsiasi momento al
                                                            percorso Risparmio Ben Fatto &gt; Gestione &gt; Archivio.
                                                            <br>
                                                            <a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="span12">
                                            <div class="BoxTrasferisci" id="">
                                                <p class="left">Per effettuare <strong>trasferimenti</strong> da e verso
                                                    Risparmio Ben Fatto accedi con il profilo &quot;<strong>Consultare e
                                                        Disporre</strong>&quot;.</p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  }  ?>
    <div class="clear"></div>
    <?php if (!$isWebank) { ?>
        <div class="disclaimer">
            Il &quot;deposito&quot; &egrave; lo strumento che ti consente di accantonare somme di denaro e avere un
            rendimento maggiore senza vincoli.
        </div>
    <?php } ?>
    <!-- popup movimenti -->
    <?php virtual("/librerie/include/commons/ria_old/part/popUpMovimenti.php") ?>
    <!-- /popup movimenti -->
</div>
