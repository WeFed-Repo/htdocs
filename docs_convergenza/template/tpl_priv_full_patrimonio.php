<script type="text/javascript">
    var debugOroCapitano = false;
    var librerie = true;
    var pathLibrerie = '/include/ajax';
    var pathPatrimonio = '/patrimonio';
    var cgi_script = '/webankpri';

	<?php
	$forceJS = (isset($_GET['js']) && $_GET['js'] == 'y')
		? "true"
		: "false";
	$forcePerc = (isset($_GET['perc']) && $_GET['perc'] == 'y')
		? "true"
		: "false";
	?>
    var forceJS = <?php echo $forceJS ?>;
    var forcePerc = <?php echo $forcePerc ?>;
</script>
<style type="text/css">
    @import url('/WB/fe/css/mio_patrimonio.css');
</style>

<section>
    <div class="row">
        <div class="col-xs-12">
            <label for="" class="control-label hidden-xs">Rapporto</label>
            <div id="sceltaRapportoForm" class="form-group spHead formGenerico multiSelect">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="input-group">
                            <div id="sceltaRapportoFP" class="selectRapp">
                                <form action="" method="post">
                                    <input id="sceltaRapportoValFP" type="hidden" class="value" name="accounts" value="00599 0000074975 EUR"/>
                                    <input id="contodep" type="hidden" class="value" name="accounts" value=""/>
                                    <input id="contoder" type="hidden" class="value" name="accounts" value=""/>
                                    <a href="javascript:" class="inputOption inputSx">
										<span class="inputDx">
											<span class="input">
												siDT CC 00599 0000089342 EUR +DEP +DER
											</span>
										</span>
                                    </a>
                                    <div class="selectorSpacer" style="display: none;"></div>
                                    <div class="selector" style="display: none;">
                                        <a value="00599 0000074971 EUR" contodep="" contoder="" href="javascript:" class="selectorOptions first">
                                            <input id="selConto1" class="selConto" type="checkbox" aria-label="Seleziona conto noDT CC 00599 0000074971 EUR"/>
                                            <span>noDT CC 00599 0000074971 EUR</span><span class="clear"></span></a>
                                        <a value="00599 0000074972 EUR" contodep="" contoder="" href="javascript:" class="selectorOptions technical">
                                            <input id="selConto2" class="selConto" type="checkbox" aria-label="Seleziona conto siDT CT 00599 0000074972 EUR"/>
                                            <span>siDT CT 00599 0000074972 EUR</span><span class="clear"></span></a>
                                        <a value="00599 0000074973 EUR" contodep="" contoder="" href="javascript:" class="selectorOptions">
                                            <input id="selConto3" class="selConto" type="checkbox" aria-label="Seleziona conto siDT CC 00599 0000074973 EUR +DER"/>
                                            <span>siDT CC 00599 0000074973 EUR +DER</span><span class="clear"></span></a>
                                        <a value="00599 0000074974 EUR" contodep="00596 0000074974 EUR" contoder="" href="javascript:" class="selectorOptions">
                                            <input id="selConto4" class="selConto" type="checkbox" aria-label="Seleziona conto noDT CC 00599 0000074974 EUR +DEP"/>
                                            <span>noDT CC 00599 0000074974 EUR +DEP</span><span class="clear"></span></a>
                                        <a value="00599 0000074975 EUR" contodep="00596 0000074975 EUR" contoder="" href="javascript:"
                                           class="selectorOptions favorite">
                                            <input id="selConto5" class="selConto" type="checkbox" aria-label="Seleziona conto siDT CC 00599 0000074975 EUR +DEP"/>
                                            <span>siDT CC 00599 0000074975 EUR +DEP</span><span class="clear"></span></a>
                                        <a value="00599 0000074976 EUR" contodep="00596 0000074976 EUR" contoder="" href="javascript:" class="selectorOptions">
                                            <input id="selConto6" class="selConto" type="checkbox" aria-label="Seleziona conto siDT CC 00599 0000074976 EUR +DEP +DER"/>
                                            <span>siDT CC 00599 0000074976 EUR +DEP +DER</span><span class="clear"></span></a>
                                    </div>
                                    <div class="selectorConfirm" style="display: none;">
                                        <div class="formGenerico">
                                            <div class="form-group">
                                                <div class="btn-align-center">
                                                    <a type="button" class="btn btn-primary">conferma</a>
                                                    <br class="clear">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="checkbox inline">
                            <label class="textWrapper">
                                <input type="checkbox" name="" id="selTuttiCB"><span class="text marginBottomMedium">tutti i rapporti</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="outputConti">
                            <div class="listaConti" style="display:none;">noDT CC 00599 0000074978 EUR</div>
                            <div class="listaConti" style="display:none;">siDT CT 00599 0000074978 EUR</div>
                            <div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DER</div>
                            <div class="listaConti" style="display:none;">noDT CC 00599 0000074978 EUR +DEP</div>
                            <div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DEP</div>
                            <div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DEP +DER</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="grafPatrimonioBox" class="loading">
    <div id="totali" class="form-group spHead formGenerico formGenericoBlack">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <label for="" class="control-label">Controvalore totale</label>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div id="titPatrimonio"><span id="titTotale"></span>&nbsp;&euro;</div>
            </div>
        </div>
    </div>
    <div id="grafPatrimonio" class="form-group spHead formGenerico">
        <div class="row">
            <div class="hidden-xs col-sm-5 col-sm-offset-1 ">
                <div id="chartPatrimonioWrap">
                    <div id="chartPatrimonio"></div>
                    <div id="coveringDiv"></div>
                </div>
                <div id="subGrafPatrimonio">
                    <div id="subChartPatrimonioWrap">
                        <div id="subChartPatrimonio"></div>
                        <div id="coveringDiv2"></div>
                    </div>
                </div>
            </div>
            <div id="legendaBody" class="col-xs-12 col-sm-5 col-sm-offset-1">
                <h3 class="titLegenda">Liquidità<span id="titValLiquidita" class="titValLegenda"><span id="liquiditaTotale"></span>&nbsp;&euro;</span>
                </h3>

                <div class="panel-group panel-group-icon grafLegenda" id="accordionLegLiq" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headerLegLiq1">
                            <h4 class="panel-title">
                                <a href="#subLegenda1" aria-expanded="false" aria-controls="subLegenda1" class="collapsed"><span id="icoLegenda1"
                                                                                                                                 class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon01"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda1" class="labelLegenda">Saldo disponibile c/c</span><br><span id="valLegenda1"
                                                                                                                              class="valLegenda"><span
                                                    id="numLegenda1"></span>&nbsp;&euro;</span></span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="subLegenda1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerLegLiq1">
                            <div class="panel-body subLegenda">
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_1"></div>
                                    </div>
                                    <div id="labelLegenda1_1" class="saldoLabel labelLegenda">Saldo contabile</div>
                                    <div id="valLegenda1_1" class="saldoVal valLegenda"><span id="numLegenda1_1"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_2"></div>
                                    </div>
                                    <div id="labelLegenda1_2" class="saldoLabel labelLegenda">Totale impegni banking</div>
                                    <div id="valLegenda1_2" class="saldoVal valLegenda"><span id="numLegenda1_2"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_3"></div>
                                    </div>
                                    <div id="labelLegenda1_3" class="saldoLabel labelLegenda">Totale impegni trading</div>
                                    <div id="valLegenda1_3" class="saldoVal valLegenda"><span id="numLegenda1_3"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_4"></div>
                                    </div>
                                    <div id="labelLegenda1_4" class="saldoLabel labelLegenda">Totale preavvisi trading</div>
                                    <div id="valLegenda1_4" class="saldoVal valLegenda"><span id="numLegenda1_4"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_5"></div>
                                    </div>
                                    <div id="labelLegenda1_5" class="saldoLabel labelLegenda">Totale impegni fondi</div>
                                    <div id="valLegenda1_5" class="saldoVal valLegenda"><span id="numLegenda1_5"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon01_6"></div>
                                    </div>
                                    <div id="labelLegenda1_6" class="saldoLabel labelLegenda">Totale preavvisi fondi</div>
                                    <div id="valLegenda1_6" class="saldoVal valLegenda"><span id="numLegenda1_6"></span> &euro;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="javascript:"><span id="icoLegenda2" class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon02"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda2" class="labelLegenda">Saldo deposito libero</span><br><span id="valLegenda2"
                                                                                                                              href="javascript:"
                                                                                                                              class="valLegenda"><span
                                                    id="numLegenda2"></span>&nbsp;&euro;</span></span></a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headerLegLiq3">
                            <h4 class="panel-title">
                                <a href="#subLegenda3" aria-expanded="false" aria-controls="subLegenda3" class="collapsed"><span id="icoLegenda3"
                                                                                                                                 class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon03"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda3" class="labelLegenda">Saldo linee vincolate</span><br><span id="valLegenda3"
                                                                                                                              class="valLegenda"><span
                                                    id="numLegenda3"></span>&nbsp;&euro;</span></span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="subLegenda3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerLegLiq3">
                            <div class="panel-body subLegenda">
                            </div>
                        </div>
                    </div>
                    <div id="boxContoDeposito" class="panel panel-default btnBgPort">
                        <div class="panel-heading">
                            <h4 class="panel-title link">
                                <a class="link" href="javascript:" title="Apri Conto Webank: pi&ugrave; rendimento e zero spese!">Apri Conto Webank: pi&ugrave;
                                    rendimento e zero spese!</a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headerLegLiq4">
                            <h4 class="panel-title">
                                <a href="#subLegenda4" aria-expanded="false" aria-controls="subLegenda4" class="collapsed"><span id="icoLegenda4"
                                                                                                                                 class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon04"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda4" class="labelLegenda">Saldo disponibile derivati</span><br><span id="valLegenda4"
                                                                                                                                   class="valLegenda"><span
                                                    id="numLegenda4"></span>&nbsp;&euro;</span></span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="subLegenda4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerLegLiq4">
                            <div class="panel-body subLegenda">
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon04_1"></div>
                                    </div>
                                    <div id="labelLegenda4_1" class="saldoLabel labelLegenda">Liquidit&agrave; impegnata per operativit&agrave;
                                        intraday
                                    </div>
                                    <div id="valLegenda4_1" class="saldoVal valLegenda"><span id="numLegenda4_1"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon04_2"></div>
                                    </div>
                                    <div id="labelLegenda4_2" class="saldoLabel labelLegenda">Margini iniziali derivati (Idem, Eurex, CME, LIFFE)
                                    </div>
                                    <div id="valLegenda4_2" class="saldoVal valLegenda"><span id="numLegenda4_2"></span> &euro;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="titLegenda">Portafoglio<span id="titValPortafoglio" class="titValLegenda titPortafoglio"><span
                                id="portafoglioTotale"></span>&nbsp;&euro;</span></h3>
                <div class="panel-group panel-group-icon grafLegenda" id="accordionLegPor" role="tablist" aria-multiselectable="false">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headerLegPor">
                            <h4 class="panel-title">
                                <a data-parent="#accordionLegPor" href="#subLegenda5" aria-expanded="false" aria-controls="subLegenda5"
                                   class="collapsed"><span id="icoLegenda5" class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon05"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda5" class="labelLegenda">Portafoglio titoli</span><br><span id="valLegenda5" href="javascript:"
                                                                                                                           class="valLegenda"><span
                                                    id="numLegenda5"></span>&nbsp;&euro;</span></span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4>
                        </div>
                        <div id="subLegenda5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerLegPor">
                            <div class="panel-body subLegenda">
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_1"></div>
                                    </div>
                                    <div id="labelLegenda5_1" class="saldoLabel labelLegenda">Azioni Italia</div>
                                    <div id="valLegenda5_1" class="saldoVal valLegenda"><span id="numLegenda5_1"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_2"></div>
                                    </div>
                                    <div id="labelLegenda5_2" class="saldoLabel labelLegenda">Azioni estero</div>
                                    <div id="valLegenda5_2" class="saldoVal valLegenda"><span id="numLegenda5_2"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_3"></div>
                                    </div>
                                    <div id="labelLegenda5_3" class="saldoLabel labelLegenda">Obbligazioni</div>
                                    <div id="valLegenda5_3" class="saldoVal valLegenda"><span id="numLegenda5_3"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_4"></div>
                                    </div>
                                    <div id="labelLegenda5_4" class="saldoLabel labelLegenda">Derivati</div>
                                    <div id="valLegenda5_4" class="saldoVal valLegenda"><span id="numLegenda5_4"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_5"></div>
                                    </div>
                                    <div id="labelLegenda5_5" class="saldoLabel labelLegenda">CW / Certificates</div>
                                    <div id="valLegenda5_5" class="saldoVal valLegenda"><span id="numLegenda5_5"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_6"></div>
                                    </div>
                                    <div id="labelLegenda5_6" class="saldoLabel labelLegenda">Etf</div>
                                    <div id="valLegenda5_6" class="saldoVal valLegenda"><span id="numLegenda5_6"></span> &euro;</div>
                                </div>
                                <div class="saldoRow">
                                    <div class="saldoColor">
                                        <div class="saldoColorBox boxBgIcon05_7"></div>
                                    </div>
                                    <div id="labelLegenda5_7" class="saldoLabel labelLegenda">Marginazione</div>
                                    <div id="valLegenda5_7" class="saldoVal valLegenda"><span id="numLegenda5_7"></span> &euro;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="javascript:"><span id="icoLegenda6" class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon06"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda6" class="labelLegenda">Portafoglio fondi e sicav</span><br><span id="valLegenda6"
                                                                                                                                  href="javascript:"
                                                                                                                                  class="valLegenda"><span
                                                    id="numLegenda6"></span>&nbsp;&euro;</span></span></a>
                            </h4>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="javascript:"><span id="icoLegenda7" class="icoLegenda iconIndex title-icon boxBgIcon boxBgIcon07"><i
                                                class="icon icon-small-attivo" title="icon-small-attivo"></i></span><span class="title-text"><span
                                                id="labelLegenda7" class="labelLegenda">Totale Pronti contro termine</span><br><span id="valLegenda7"
                                                                                                                                     href="javascript:"
                                                                                                                                     class="valLegenda"><span
                                                    id="numLegenda7"></span>&nbsp;&euro;</span></span></a>
                            </h4>
                        </div>
                    </div>
                    <div id="boxPortafoglio" class="panel panel-default btnBgPort">
                        <div class="panel-heading">
                            <h4 class="panel-title link">
                                <a class="link" href="javascript:" title="Scopri le soluzioni per il trading">Scopri le soluzioni per il trading</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--ACCORDION 040 -->
<section>
    <div class="panel-group" id="accordionPref_1" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default panel-selected_1">
            <div class="panel-heading" role="tab" id="headingOnePre_1">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#collapseOne2Pre_1" aria-expanded="false" aria-controls="collapseOne2Pre_1">
                        Spiegazione dei termini
                        <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseOne2Pre_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOnePre_1">
                <div class="panel-body panel-accordion-body">
                    <p>Di seguito una legenda dei principali termini che trovi in pagina.</p>
                    <h4>LIQUIDIT&Agrave;</h4>
                    <p><strong>Saldo disponibile c/c</strong> <br/>
                        Il saldo tiene conto della presenza di &quot;movimenti non contabilizzati&quot;. Si tratta di operazioni (addebiti e
                        accrediti) gi&agrave; effettuate, ma non ancora contabilizzate.</p>
                    <ul>
                        <li><strong>Saldo contabile</strong>
                            <br/> A differenza del saldo disponibile, non tiene conto dei movimenti non contabilizzati.
                        </li>
                        <li><strong>Totale impegni banking, trading e investimenti</strong>
                            <br/> Gli <strong>impegni</strong> sono operazioni in <strong>addebito</strong> effettuate sul conto, ma non ancora
                            contabilizzate. Incidono pertanto sul saldo disponibile. Per esempio, un prelievo bancomat o un ordine di acquisto di
                            titoli.
                        </li>
                        <li><strong>Totale preavvisi trading e fondi</strong>
                            <br/> I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo
                            disponibile soltanto al momento delle loro contabilizzazione effettiva.
                        </li>
                    </ul>
                    <p><strong>Saldo disponibile derivati</strong><br/>
                        Il saldo tiene conto degli impegni derivanti dai margini iniziali accantonati, dall'operatività ordinaria e da quella
                        marginata intraday.</p>
                    <ul>
                        <li><strong>Liquidit&agrave; impegnata per operativit&agrave; intraday</strong>
                            <br/> &Egrave; l'importo impegnato sul saldo disponibile del conto corrente per l'apertura o l'incremento di posizioni
                            marginate
                        </li>
                        <li><strong>Margini iniziali derivati (Idem, Eurex, CME, LIFFE)</strong>
                            <br/> &Egrave; l'importo impegnato sul saldo disponibile del conto corrente a seguito di apertura di posizioni ordinarie
                            (non marginate) in derivati
                        </li>
                    </ul>
                    <h4>PORTAFOGLIO</h4>
                    <p><strong>Portafoglio titoli</strong><br/>
                        &Egrave; il controvalore di azioni, obbligazioni, Etf, Covered warrants, certificates e posizioni marginate</p>
                    <ul>
                        <li><strong>Azioni Italia, Azioni estero, Obbligazioni, Derivati, Covered warrants/Certificates, Etf, Marginazione</strong>
                            <br/> &Egrave; il controvalore dei titoli suddiviso nelle principali tipologie di strumenti finanziari
                        </li>
                    </ul>
                    <p><strong>Portafoglio fondi e sicav</strong><br/>
                        &Egrave; il controvalore di fondi e sicav presenti nel portafoglio</p>
                    <p><strong>Totale Pronti contro termine</strong>
                        <br/> &Egrave; il controvalore dei pronti contro termine attivati</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END ACCORDION 040 -->

<div id="patrimonioBtns" class="form-group btnWrapper">
    <div class="btn-align-left hidden-xs">
        <a type="button" class="btn btn-default" href="javascript:">indietro</a>
    </div>
    <div class="btn-align-right hidden-xs">
        <a type="button" class="btn btn-primary" id="" href="javascript:window.print();">Stampa la pagina</a>
        <a type="button" class="btn btn-primary" id="" href="javascript:">Esporta in Excel</a>
    </div>
    <div class="flLeft visible-xs">
        <a href="javascript:" class="no-underline btn-icon btn-default"><i class="icon icon-3x icon-back_filled"></i></a>
    </div>
    <div class="flRight visible-xs">
        <a href="javascript:" class="no-underline btn-icon"><i class="icon icon-3x icon-excel_filled"></i></a><!--
    	--><a href="javascript:" class="no-underline btn-icon"><i class="icon icon-3x icon-print_ria_filled"></i></a>
    </div>
    <br class="clear">
</div>

<!-- following scripts required for JavaScript version. The order is important! -->
<script src="/common/fe/assets/amcharts/amcharts.js"></script>
<script src="/common/fe/assets/amcharts/pie.js"></script>
<script src="/WB/fe/js/mio_patrimonio_links_librerie.js"></script>
<script src="/WB/fe/js/mio_patrimonio.js"></script>
