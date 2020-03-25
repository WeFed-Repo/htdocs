<div id="contentRia1" class="tab-content contentRia formGenerico" style="display: none">
    <!-- div per visualizzazione errori campi form -->
    <section class="boxesitoWrap" id="errorDiv1">
        <div class="boxesito attenzione">
            <div class="text">
                <h4>Attenzione</h4>
                <div id="errorContent1">
                </div>
            </div>
        </div>
    </section>

    <div id="totLiquidita" class="boxBase" style="display:none">
        <!-- Box Ripartizione -->
        <div class="row">
            <div class="col-md-6">
                <span class="ripartizioneTotA">Totale</span>
            </div>
            <div class="col-md-6">
                <span class="ripartizioneImportoA"><span class="totaleRipartizione"></span>&nbsp;<span class="valuta"></span></span>
            </div>
        </div>
        <!-- /Box Ripartizione -->

        <hr class="separator-ria">
    </div>

    <div id="tabLiquidita">
        <div id="contentLiquidita1">
            <div class="row">
                <!-- Box Ripartizione -->
                <div class="col-sm-6 visible-sm">
                    <span class="ripartizioneTotA">Totale</span>
                </div>
                <div class="col-sm-6 visible-sm">
                    <span class="ripartizioneImportoA"><span class="totaleRipartizione"></span>&nbsp;<span class="valuta"></span></span>
                </div>
                <div class="col-sm-12 visible-sm">
                    <hr class="separator-ria separator-tot">
                </div>
                <!-- /Box Ripartizione -->

                <div class="col-sm-3 col-md-2">
                    <div id="graficoContiBox">
                        <div id="graficoContiDiv" class="graficoContiDiv"></div>
                        <div id="graficoContiBoxWrap">
                            <div id="graficoContiBoxInner">
                                <div id="graficoContiDivInner" class="graficoContiDiv"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1 visible-sm">&nbsp;</div>

                <div class="col-sm-4 col-md-3">
                    <ul class="graficoLeg">
                        <li class="legMargine"><i class="icon icon-indicatore_legenda"></i>&nbsp;Liquidit&agrave;</li>
                        <li class="legDisp"><i class="icon icon-indicatore_legenda"></i>&nbsp;<?php echo $contoLabelLongSingUp ?></li>
                        <li class="legFido"><i class="icon icon-indicatore_legenda"></i>&nbsp;Fido</li>
                        <li id="legDerDiv" class="legDer"><i class="icon icon-indicatore_legenda"></i>&nbsp;Derivati</li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md-3">
                    <ul class="graficoLeg">
                        <li class="legRisparmio"><i class="icon icon-indicatore_legenda"></i>&nbsp;Risparmio</li>
                        <li class="legDep"><i class="icon icon-indicatore_legenda"></i>&nbsp;Deposito</li>
                        <li class="legLinee"><i class="icon icon-indicatore_legenda"></i>&nbsp;Linee vincolate</li>
                    </ul>
                </div>

                <div class="col-md-4 visible-md visible-lg">
                    <label class="ripartizioneTot control-label">Totale</label>
                    <span class="ripartizioneImporto output"><span class="totaleRipartizione"></span>&nbsp;<span class="valuta"></span></span>
                </div>
            </div>
        </div>

        <hr class="separator-ria separator-graf">
    </div>

    <div id="dynamicBoxRisp">
        <div id="accordionSaldi" class="row">
            <div class="col-sm-12 col-md-6">
                <div class="boxSaldoCT panel-group panel-group-ria panel-group-collapse">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading" id="saldiHeadingCT">
                            <h4 class="panel-title">
                            <a class="expanded" href="#!">
                              Conto tecnico
                            </a>
                          </h4>
                        </div>
                        <div class="collapse-top">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Saldo disponibile</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="margineCT"></span>&nbsp;<span class="valuta"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Saldo contabile</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="saldoCT"></span>&nbsp;<span class="valuta"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup">
                                        <span class="saldoLabel">Intestato a</span>
                                        <span id="intestazioneCT" class="saldoVal2">&nbsp;</span>
                                    </div>
                                    
                                    <div class="row last-row form-group">
                                        <div class="col-xs-12">
                                            <span class="output output-icon">
                                                <span class="icon-group abs-right">
                                                    <a id="dettaglioCTLink" href="" title="Dettagli" class="btn-icon"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
                                                    --><a id="movimentiCT" href="#!" title="Invia per email" class="btn-icon"><i class="icon icon-movimenti_ria_filled icon-2x" title="Ultimi 10 movimenti"></i></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boxSaldoCC panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading" role="tab" id="saldiHeadingCC">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#boxSaldoCC" href="#contentAccordion1" aria-expanded="false" aria-controls="contentAccordion1">
                                <?php echo ucfirst(strtolower($contoLabelLongSingLow)); ?>
                                <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div class="collapse-top" aria-expanded="false">
                            <div class="panel-body panel-body-accordion">
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo contabile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span class="txthelp"><strong id="liquiditaDepCC" class="closeable" data-toggle="tooltip" data-title="Caricamento in corso..." onclick="caricaDettaglioSaldi(event, this);"><span id="margineCC"></span>&nbsp;<span class="valuta"></span></strong></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="saldoCC"></span>&nbsp;<span class="valuta"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div id="fidoCCDiv" class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Fido del saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="fidoCC"></span>&nbsp;<span class="valuta"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div id="lvCCDiv" class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span class="saldoLabel">Linee vincolate del saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-6">
                                            <span class="saldoVal">
                                                <span id="lvCC"></span>&nbsp;<span class="valuta"></span> <a class="linkListaLV" href="">dettagli</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <span class="output output-icon">
                                    <span class="icon-group abs-right">
                                        <a id="dettaglioCCLink" href="" title="Dettagli" class="btn-icon"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
                                        --><a id="movimentiCC" href="#!" title="Invia per email" class="btn-icon"><i class="icon icon-movimenti_ria_filled icon-2x" title="Ultimi 10 movimenti"></i></a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div id="contentAccordion1" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="saldiHeadingCC">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <hr class="accordion">
    
                                    <!-- Questa parte si carica solo all'espansione del box di C/C -->
                                    <div id="infoRichieste1" class="saldoGroup">
                                        <span class="saldoLabel">Intestato a</span>
                                        <span id="intestazioneCC" class="saldoVal2">&nbsp;</span>
                                    </div>
                                    <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boxSaldoCD panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading" role="tab" id="saldiHeadingCD">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#boxSaldoCD" href="#contentAccordion2" aria-expanded="false" aria-controls="contentAccordion2">
                                  Deposito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                </a>
                            </h4>
                        </div>
                        <div class="collapse-top">
                            <div class="panel-body panel-body-accordion">
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="margineCD"></span>&nbsp;<span class="valuta"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo contabile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="saldoCD"></span>&nbsp;<span class="valuta"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row last-row form-group">
                                    <div class="col-xs-12">
                                        <span class="output output-icon">
                                            <span class="icon-group abs-right">
                                                <a id="dettaglioCDLink" href="" title="Dettagli" class="btn-icon"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
                                                --><a id="movimentiCD" href="#!" title="Invia per email" class="btn-icon"><i class="icon icon-movimenti_ria_filled icon-2x" title="Ultimi 10 movimenti"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contentAccordion2" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="saldiHeadingCD">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <!-- Questa parte si carica solo all'espansione del box di C/C -->
                                    <hr class="accordion">
                                    
                                    <div class="saldoGroup">
                                        <span class="saldoLabel">Intestato a</span>
                                        <span id="intestazioneCD" class="saldoVal2">&nbsp;</span>
                                    </div>
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Numero Deposito</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="numeroCD"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Guadagno netto</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="guadagnoNettoCD"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="tassoUnico" class="saldoGroup saldoStrong">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Tasso</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="tassoCD"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="btnWrapper saldoButton">
                                        <div class="btn-align-left">
                                            <a type="button" class="btn btn-primary" id="linkCondizioniCD" href="#!" title="Tutte le condizioni">Tutte le condizioni</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- /Questa parte si carica solo all'espansione del box di C/C -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="boxSaldoCDER hidden-sm panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading saldiHeadingCDER" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#boxSaldoCDER" href="#contentAccordion4a" aria-expanded="false" aria-controls="contentAccordion4a">
                                  Liquidit&agrave; derivati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                </a>
                            </h4>
                        </div>
                        <div class="collapse-top">
                            <div class="panel-body panel-body-accordion">
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo contabile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span class="saldoCDV"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span class="margineCDV"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row last-row">
                                    <div class="col-xs-12">
                                        <span class="output output-icon">
                                            <span class="icon-group abs-right">
                                                <a href="#!" title="Dettagli" class="btn-icon dettaglioCDERLink"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
                                                --><a href="#!" title="Invia per email" class="btn-icon movimentiCDER"><i class="icon icon-movimenti_ria_filled icon-2x" title="Ultimi 10 movimenti"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="contentAccordion4a" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="saldiHeadingCDER">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <hr class="accordion">
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Margine impegnato per posizioni aperte</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span class="guadagnoNettoCDV"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup saldoStrong">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Profit &amp; loss potenziali</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span class="profitLossCDV"></span>
                                                </span>
                                            </div>
                                            <div class="col-xs-12">
                                                <span class="note">Dato calcolato in base alle ultime quotazioni disponibili</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boxSaldoLV panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading" role="tab" id="saldiHeadingLV">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#boxSaldoLV" href="#contentAccordion3" aria-expanded="false" aria-controls="contentAccordion3">
                                  Linee vincolate<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                </a>
                            </h4>
                        </div>
                        <div class="collapse-top">
                            <div class="panel-body panel-body-accordion">
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Totale investito</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="totaleLV"></span>&nbsp;<span class="valuta"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saldoGroup prevSaldo">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Prossima scadenza</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span id="scadenzaProssimaLV"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contentAccordion3" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="saldiHeadingLV">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <!-- Questa parte si carica solo all'espansione del box di C/C -->
                                    <div class="saldoGroup nextSaldo">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Importo</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="valoreProssimaLV"></span>&nbsp;<span class="valuta"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Interessi netti</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span id="rendimentoProssimaLV"></span>&nbsp;<span class="valuta"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="infoRichieste3" class="infoRichieste">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-6">
                                                <a href="#!" id="boxLV1" class="boxTassoBox2b boxTassoBox1">
                                                    <span id="testoTassoLordo1" class="black tassoLordo"><strong id="tassoMesi1">3</strong> mesi</span>
                                                    <i class="icon icon-hr-arrow"></i>
                                                    <span id="testoTassoB1" class="percentuale green"><span id="tassoB1" class="tasso">4,5</span>%</span><span id="promozioneLV1" class="promozioneLV"></span>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-md-6">
                                                <a href="#!" id="boxLV2" class="boxTassoBox2b boxTassoBox1">
                                                    <span id="testoTassoLordo2" class="black tassoLordo"><strong id="tassoMesi2">6</strong> mesi</span>
                                                    <i class="icon icon-hr-arrow"></i>
                                                    <span id="testoTassoB2" class="percentuale green"><span id="tassoB2" class="tasso">4,5</span>%</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-md-6">
                                                <a href="#!" id="boxLV3" class="boxTassoBox2b boxTassoBox2">
                                                    <span id="testoTassoLordo3" class="black tassoLordo"><strong id="tassoMesi3">12</strong> mesi</span>
                                                    <i class="icon icon-hr-arrow"></i>
                                                    <span id="testoTassoB3" class="percentuale green"><span id="tassoB3" class="tasso">4,9</span>%</span>
                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-md-6">
                                                <a href="#!" id="boxLV4" class="boxTassoBox2b boxTassoBox2">
                                                    <span id="testoTassoLordo4" class="black tassoLordo"><strong id="tassoMesi4">24</strong> mesi</span>
                                                    <i class="icon icon-hr-arrow"></i>
                                                    <span id="testoTassoB4" class="percentuale green"><span id="tassoB4" class="tasso">5,0</span>%</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-12">
                                                <a href="#!" id="boxLV5" class="boxTassoBox2a boxTassoBox1 boxTassoPromo">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="icoTasso">
                                                                <i class="icon icon-promo_big"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="infoTasso">
                                                                <span id="testoTassoLordo5" class="black tassoLordo">Vincolo<br><strong id="tassoMesi5"></strong> mesi</span>
                                                                <i class="icon icon-hr-arrow"></i>
                                                                <span id="testoTassoB5" class="percentuale green"><span id="tassoB5" class="tasso">5,0</span>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-sm-6 col-md-12">
                                                <a href="#!" id="boxLV6" class="boxTassoBox2a boxTassoBox1">
                                                    <div class="row">
                                                        <div class="col-xs-6">
                                                            <div class="icoTasso">
                                                                <i class="icon icon-arrow-box"></i>
                                                                <div class="logo-em"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="infoTasso">
                                                                <span id="testoTassoLordo6" class="black tassoLordo">Vincolo<br><strong id="tassoMesi6"></strong> mesi</span>
                                                                <i class="icon icon-hr-arrow"></i>
                                                                <span id="testoTassoB6" class="percentuale green"><span id="tassoB6" class="tasso">5,0</span>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr class="accordion">
                                    
                                    <div class="btnWrapper saldoButton">
                                        <div class="btn-align-left">
                                            <a id="linkVediTutteLV" type="button" class="btn btn-primary btn-mostra" href="#!"><i class="icon icon-show"></i><span class="icon-text">Linee attive</span></a>
                                            <a id="altTextVediTutteLV" type="button" class="btn btn-primary btn-disabled btn-mostra" href="#!" style="display:none;"><i class="icon icon-show"></i><span class="icon-text">Linee attive</span></a>
                                        </div>
                                        <div class="btn-align-right">
                                            <a id="linkVediTutteLVBis" type="button" class="btn btn-primary btn-aggiungi" href="#!"><i class="icon icon-add"></i><span class="icon-text">Nuova linea</span></a>
                                            <a id="altTextVediTutteLVBis" type="button" class="btn btn-primary btn-disabled btn-aggiungi" href="#!" style="display:none;"><i class="icon icon-add"></i><span class="icon-text">Nuova linea</span></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boxSaldoCDER hidden-md hidden-lg panel-group panel-group-ria panel-group-collapse" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default panel-accordion">
                        <div class="panel-heading saldiHeadingCDER" role="tab">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#boxSaldoCDER" href="#contentAccordion4b" aria-expanded="false" aria-controls="contentAccordion4b">
                                  Liquidit&agrave; derivati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                                </a>
                            </h4>
                        </div>
                        <div class="collapse-top">
                            <div class="panel-body panel-body-accordion">
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo contabile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span class="saldoCDV"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saldoGroup">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <span class="saldoLabel">Saldo disponibile</span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="saldoVal">
                                                <span class="margineCDV"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row last-row">
                                    <div class="col-xs-12">
                                        <span class="output output-icon">
                                            <span class="icon-group abs-right">
                                                <a href="#!" title="Dettagli" class="btn-icon dettaglioCDERLink"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
                                                --><a href="#!" title="Invia per email" class="btn-icon movimentiCDER"><i class="icon icon-movimenti_ria_filled icon-2x" title="Ultimi 10 movimenti"></i></a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contentAccordion4b" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="saldiHeadingCDER">
                            <div class="panel-body panel-body-accordion">
                                <div class="panel-wrap">
                                    <hr class="accordion">
                                    
                                    <div class="saldoGroup">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Margine impegnato per posizioni aperte</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span class="guadagnoNettoCDV"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="saldoGroup saldoStrong">
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <span class="saldoLabel">Profit &amp; loss potenziali</span>
                                            </div>
                                            <div class="col-xs-7">
                                                <span class="saldoVal">
                                                    <span class="profitLossCDV"></span>
                                                </span>
                                            </div>
                                            <div class="col-xs-12">
                                                <span class="note">Dato calcolato in base alle ultime quotazioni disponibili</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Celletta -->
                <div id="dashboardBanner">
                    <a href="#!" target="_blank">CELLETTA</a>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <hr class="separator-ria">

    <h4 id="titleTrasferimento" <?php if ($abilOroCap) { ?> class="btnPatr"<?php } ?>>Trasferimenti veloci</h4>

    <div id="tabTrasferimento" class="navContSecondLev">
        <div class="outerTab">
            <ul class="tabWrapper tabsmall hidden-xs">
                <li id="tabTrasferimento1"><a href="#!">Deposito</a></li>
                <li id="tabTrasferimento2"><a href="#!">Derivati</a></li>
            </ul>
        </div>
        <div class="separator"></div>
        <div class="panel-group panel-fill" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div id="contentTrasferimento1" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <div id="boxTrasfDep" class="tab-wrap">
                            <?php if ($permettiDispositive) { ?>
                            <input type="hidden" id="dataDisposizione" />
                            <div id="trasferimentiBox1" class="row">
                                <div class="hidden-sm col-md-1"></div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="riaTrasf riaTrasf1">
                                        <div class="form-group requiredField">
                                            <label id="etichettaCD" for="importoCD" class="control-label">Versa sul deposito</label>
                                            <div class="riaTrasfInput">
                                                <input type="text" id="importoCD" class="form-control clear-x" />
                                                <button id="aggiungiCD" type="button" class="btn btn-primary" data-dismiss="modal">Esegui</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label class="dispLabel">Disponibilit&agrave;</label>
                                                <span class="dispVal visible-sm-inline-block"><a href="#!" class="dispTrasfCDLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                            <div class="col-md-6 visible-md visible-lg">
                                                <span class="output dispVal"><a href="#!" class="dispTrasfCDLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm col-md-2"></div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="riaTrasf riaTrasf2">
                                        <input type="hidden" id="dataDisposizione" />
                                        <div class="form-group requiredField">
                                            <label id="etichettaCC" for="importoCC" class="control-label">Versa sul <?php echo $contoLabelLongSingLow ?></label>
                                            <div class="riaTrasfInput">
                                                <input type="text" id="importoCC" class="form-control clear-x" />
                                                <button id="aggiungiCC" type="button" class="btn btn-primary" data-dismiss="modal">Esegui</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label class="dispLabel">Disponibilit&agrave;</label>
                                                <span class="dispVal visible-sm-inline-block"><a href="#!" class="dispTrasfCCLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                            <div class="col-md-6 visible-md visible-lg">
                                                <span class="output dispVal"><a href="#!" class="dispTrasfCCLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-xs hidden-sm col-md-1"></div>
                            </div>
                            <?php } else { ?>
                            <p>
                                Per fare trasferimenti veloci, occorre accedere al sito con il profilo &quot;Consultare e Disporre&quot;.
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div id="contentTrasferimento2" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <div id="boxTrasfDer" class="tab-wrap">
                            <?php if ($permettiDispositive) { ?>
                            <input type="hidden" id="dataDisposizione2" />
                            <div id="trasferimentiBox2" class="row">
                                <div class="hidden-sm col-md-1"></div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="riaTrasf riaTrasf1">
                                        <div class="form-group requiredField">
                                            <label id="etichettaCDER" for="importoCDER" class="control-label">Versa sulla liquidit&agrave; derivati</label>
                                            <div class="riaTrasfInput">
                                                <input type="text" id="importoCDER" class="form-control clear-x" />
                                                <button id="aggiungiCDER" type="button" class="btn btn-primary" data-dismiss="modal">Esegui</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label class="dispLabel">Disponibilit&agrave;</label>
                                                <span class="dispVal visible-sm-inline-block"><a href="#!" class="dispTrasfCDERLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                            <div class="col-sm-6 visible-md visible-lg">
                                                <span class="output dispVal"><a href="#!" class="dispTrasfCDERLink"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-sm col-md-2"></div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="riaTrasf riaTrasf2">
                                        <input type="hidden" id="dataDisposizione" />
                                        <div class="form-group requiredField">
                                            <label id="etichettaCC2" for="importoCC2" class="control-label">Versa sul <?php echo $contoLabelLongSingLow ?></label>
                                            <div class="riaTrasfInput">
                                                <input type="text" id="importoCC2" class="form-control clear-x" />
                                                <button id="aggiungiCC2" type="button" class="btn btn-primary" data-dismiss="modal">Esegui</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <label class="dispLabel">Disponibilit&agrave;</label>
                                                <span class="dispVal visible-sm-inline-block"><a href="#!" class="dispTrasfCC2Link"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                            <div class="col-md-6 visible-md visible-lg">
                                                <span class="output dispVal"><a href="#!" class="dispTrasfCC2Link"><span class="dispImp"></span>&nbsp;<span class="valuta"></span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <p>
                                Per fare trasferimenti veloci, occorre accedere al sito con il profilo &quot;Consultare e Disporre&quot;.
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popup movimenti -->
    <?php virtual("/librerie/include/commons/ria/part/popUpMovimenti.php") ?>
    <!-- /popup movimenti -->
</div>
