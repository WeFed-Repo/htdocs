<div id="riamobile" class="visible-xs loading">
    <h2 class="align-center">Situazione attuale</h2>
    <div class="formGenerico">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label" for="selectConti">Stai operando sul conto</label>
                    <div class="form-inline">
                        <div class="input-group" id="riaMobileWrap">
							<?php
							$selectContiId = "selectConti";
							$selectOnChange = "cambiaConto();";
							include("part/selectConti.php");
							?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" id="showIbanMobile">
                    <label class="control-label">Il tuo IBAN</label>
                    <span class="output output-icon">
                        <span id="ibanCCEstMobile"></span>
                    </span>
                </div>
                <div class="col-sm-12"><?php
					if (!$nascondiDati) {
					?><a href="/template/strutt_webank.php?tpl=tpl_priv_fp_myhome.php&idx=true"
                       type="button" class="btn btn-primary btn-nascondi" title="Nascondi i dati"><i
                                class="icon icon-hide"></i><span class="icon-text">Nascondi i dati</span></a><?php
                    } else {
                    ?><a href="/template/strutt_webank.php?tpl=tpl_priv_fp_myhome.php&idx=false"
                       type="button" class="btn btn-primary btn-mostra" title=">Mostra i dati"><i
                                class="icon icon-show"></i><span class="icon-text">Mostra i dati</span></a><?php
					}
					?>
                </div>
            </div>
        </div>
    </div>

	<?php if (!$nascondiDati) { ?>
    <!-- GRAFICO -->
    <div id="graficoContiMobileBox">
        <div id="graficoContiMobileDiv"></div>
        <div id="graficoContiMobileDivInner"></div>
    </div>
    <div id="graficoContiMobileTot">
        <div class="row">
            <div class="col-xs-12">
                <p><span class="label-h2 align-center">Totale</span><br>
                    <span class="value-h2 align-center money"></span></p>
            </div>
        </div>
    </div>

    <!-- SALDI -->
    <div class="ria-xs">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseLegend" aria-expanded="false"
                           aria-controls="collapseLegend">
                            Legenda<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <div id="collapseLegend" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCT">
                    <div class="panel-body">
                        <div id="ria-xs-graph-leg">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="graficoLeg">
                                        <li class="legMargine"><i class="icon icon-indicatore_legenda"></i>&nbsp;Liquidit&agrave;</li>
                                        <li class="legDisp"><i class="icon icon-indicatore_legenda"></i>&nbsp;Conto corrente</li>
                                        <li class="legFido"><i class="icon icon-indicatore_legenda"></i>&nbsp;Fido</li>
                                        <li class="legDer"><i class="icon icon-indicatore_legenda"></i>&nbsp;Derivati</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="graficoLeg">
                                        <li class="legRisparmio"><i class="icon icon-indicatore_legenda"></i>&nbsp;Risparmio</li>
                                        <li class="legDep"><i class="icon icon-indicatore_legenda"></i>&nbsp;Deposito</li>
                                        <li class="legLinee"><i class="icon icon-indicatore_legenda"></i>&nbsp;Linee vincolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default boxSaldoCT">
                <div class="panel-heading" role="tab" id="headingCT">
                    <h4 class="panel-title">
                        <a class="expanded collapsed">Conto tecnico</i></a>
                    </h4>
                </div>
                <div class="collapse-top">
                    <div class="panel-body">
                        <p><span class="label">Saldo disponibile</span>
                            <span class="value money"><span id="margineCTMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Saldo contabile</span>
                            <span class="value money"><span id="saldoCTMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Intestato a</span>
                            <span class="value money" id="intestazioneCTMobile"></span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default boxSaldoCC">
                <div class="panel-heading" role="tab" id="headingCC">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCC" aria-expanded="false"
                           aria-controls="collapseCC">
                            Conto corrente<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                        </a>
                    </h4></div>
                <div class="collapse-top" data-toggle="collapse" data-target="#collapseCC" aria-expanded="false" aria-controls="collapseCC">
                    <div class="panel-body">
                        <p><span class="label">Saldo disponibile</span>
                            <span class="value money"><span id="margineCCMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Saldo contabile</span>
                            <span class="value money"><span id="saldoCCMobile"></span> <span class="valuta"></span></span></p>
                        <p id="fidoCCDivMobile"><span class="label">Fido del saldo disponibile</span>
                            <span class="value money"><span id="fidoCCMobile"></span> <span class="valuta"></span></span></p>
                    </div>
                </div>
                <div id="collapseCC" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingCC">
                    <div class="panel-body">
                        <p><span class="label">Intestato a</span> <span class="value" id="intestazioneCCMobile"></span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default boxSaldoCD">
                <div class="panel-heading" role="tab" id="headingCD">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCD" aria-expanded="false"
                           aria-controls="collapseCD">
                            Conto deposito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                        </a>
                    </h4></div>
                <div class="collapse-top" data-toggle="collapse" data-target="#collapseCD" aria-expanded="false" aria-controls="collapseCD">
                    <div class="panel-body">
                        <p><span class="label">Saldo disponibile</span>
                            <span class="value money"><span id="margineCDMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Saldo contabile</span>
                            <span class="value money"><span id="saldoCDMobile"></span> <span class="valuta"></span></span></p>
                    </div>
                </div>
                <div id="collapseCD" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingCD">
                    <div class="panel-body">
                        <p><span class="label">Intestato a</span> <span class="value" id="intestazioneCDMobile"></span></p>
                        <p><span class="label">Numero deposito</span> <span class="value" id="numeroCDMobile"></span></p>
                        <p><span class="label">Guadagno netto</span> <span class="value" id="guadagnoNettoCDMobile"></span></p>
                        <p><span class="label">Tasso</span> <span class="value" id="tassoCDMobile"></span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default boxSaldoLV">
                <div class="panel-heading" role="tab" id="headingLV">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseLV" aria-expanded="false"
                           aria-controls="collapseLV">
                            Linee vincolate<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                        </a>
                    </h4></div>
                <div class="collapse-top" data-toggle="collapse" data-target="#collapseLV" aria-expanded="false" aria-controls="collapseLV">
                    <div class="panel-body">
                        <p><span class="label">Totale investito</span>
                            <span class="value money"><span id="totaleLVMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Prossima scadenza</span>
                            <span class="value money"><span id="scadenzaProssimaLVMobile"></span> <span class="valuta"></span></span></p>
                    </div>
                </div>
                <div id="collapseLV" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingLV">
                    <div class="panel-body">
                        <p><span class="label">Importo</span>
                            <span class="value money"><span id="valoreProssimaLVMobile"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Interessi netti</span>
                            <span class="value money"><span id="rendimentoProssimaLVMobile"></span> <span class="valuta"></span></span></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default boxSaldoCDER">
                <div class="panel-heading" role="tab" id="headingCDER">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCDER" aria-expanded="false"
                           aria-controls="collapseCDER">
                            Conto derivati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
                        </a>
                    </h4>
                </div>
                <div class="collapse-top" data-toggle="collapse" data-target="#collapseCDER" aria-expanded="false" aria-controls="collapseCDER">
                    <div class="panel-body">
                        <p><span class="label">Saldo disponibile</span>
                            <span class="value money"><span class="margineCDV"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Saldo contabile</span>
                            <span class="value money"><span class="saldoCDV"></span> <span class="valuta"></span></span></p>
                    </div>
                </div>
                <div id="collapseCDER" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingCDER">
                    <div class="panel-body">
                        <p><span class="label">Margine impegnato per posizioni aperte</span>
                            <span class="value money"><span class="guadagnoNettoCDV"></span> <span class="valuta"></span></span></p>
                        <p><span class="label">Profit &amp; loss potenziali</span>
                            <span class="value money"><span class="profitLossCDV"></span> <span class="valuta"></span></span>
                            <span class="note">Dato calcolato in base alle ultime quotazioni disponibili</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>