<?php
	$permettiCreaPiano = false;
	$permettiDispositive = true;
	$isWebank = ($bank == "webank");
	$isBpm = ($bank == "bpm");
	$abilOroCap = false;
	switch ($bank) {
		case 'bl' : $sitoBanking = 'BLBANKING'; break;
		case 'bm' : $sitoBanking = 'BMBANKING'; break;
		case 'bpm' : $sitoBanking = 'BPMBANKING'; break;
		case 'ca' : $sitoBanking = 'CRABANKING'; break;
		default : $sitoBanking = 'WEBANK'; $abilOroCap = true;
	}
	if ($isWebank) {
		$contoLabelLongSingLow = 'conto corrente';
		$contoLabelLongPlurLow = 'conti correnti';
		$contoLabelLongSingUp = 'Conto corrente';
		$contoLabelLongPlurUp = 'Conti correnti';
		$contoLabelShortSingLow = 'conto';
		$contoLabelShortPlurLow = 'conti';
		$contoLabelShortSingUp = 'Conto';
		$contoLabelShortPlurUp = 'Conti';
	} else {
		$contoLabelLongSingLow = 'rapporto';
		$contoLabelLongPlurLow = 'rapporti';
		$contoLabelLongSingUp = 'Rapporto';
		$contoLabelLongPlurUp = 'Rapporti';
		$contoLabelShortSingLow = 'rapporto';
		$contoLabelShortPlurLow = 'rapporti';
		$contoLabelShortSingUp = 'Rapporto';
		$contoLabelShortPlurUp = 'Rapporti';

	}
?>
    <div id="myhometop" class="hidden-xs">
        <?php
		//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_330.php");
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_050c.php");
		if ($bank == "webank") {
			//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_326.php");
		}
	   ?>
    </div>

    <section>
        <div id="riaBannerWrap">
            <div id="riaBanner"> 
                <p>BANNER T3</p>
            </div>
        </div>
    </section>

    <div id="riamobile" class="visible-xs">
        <h2 class="align-center">Situazione attuale</h2>
        <div class="formGenerico">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-inline">
                            <div class="input-group">
                                <select class="form-control" name="" id="riamobile-conto">
                                    <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                    <option value="01077 - 0000049478 - EUR" accountid="01077 - 0000049478 - EUR" accountidtoshow="CC 01077 0000049478 EUR">CC 01077 0000049478 EUR</option>
                                </select>
                                <div class="input-group-addon input-group-star">
                                    <a class="btn-icon" data-toggle="modal" data-target="#starAlert1"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                        <!--<i class="icon icon-star" title="icon-star"></i>--></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function cambioContoMobile() {
                var conto = $('#riamobile-conto').val(),
                    value = valueArr[conto];
                $('#accordion .panel-collapse').collapse('hide');
                $('#ria-xs-graph-tot .money, #accordion .money').each(function(index, item) {
                    $(this).html(value[index] + ' &euro;');
                });
                createGraph(mobileGraphData1[conto], mobileGraphData2[conto]);
            }
            $(function() {
                $('#riamobile-conto').change(cambioContoMobile);
            });
        </script>
        <!-- GRAFICO -->
        <div id="ria-xs-graph">
            <div id="ria-xs-graph1"> </div>
            <div id="ria-xs-graph2"> </div>
        </div>
        <div id="ria-xs-graph-tot">
            <div class="row">
                <div class="col-xs-12">
                    <p> <span class="label-h2 align-center ria-xs-graph-label">Totale</span> <span class="value-h2 align-center money">985.575.343,20 €</span> </p>
                </div>
            </div>
        </div>

        <!-- SALDI -->
        <div class="ria-xs">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseLegend" aria-expanded="false" aria-controls="collapseLegend">
						Legenda<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4> </div>
                    <div id="collapseLegend" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div id="ria-xs-graph-leg">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="graficoLeg">
                                            <li class="legMargine"><i class="icon icon-indicatore_legenda"></i>&nbsp;Liquidit&agrave;</li>
                                            <li class="legDisp"><i class="icon icon-indicatore_legenda"></i>&nbsp;<?php echo $contoLabelLongSingUp ?></li>
                                            <li class="legFido"><i class="icon icon-indicatore_legenda"></i>&nbsp;Fido</li>
                                            <li id="legDerDiv" class="legDer"><i class="icon icon-indicatore_legenda"></i>&nbsp;Derivati</li>
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
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		          Conto corrente<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
		        </a>
		      </h4> </div>
                    <div class="collapse-top" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"> <span class="label">Saldo contabile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                                <div class="col-xs-6 col-sep"> <span class="label">Saldo disponibile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p> <span class="label">Intestato a</span> <span class="value">LOREM IPSUM DOLOR SIT AMET</span> </p>
                            <p> <span class="label">IBAN</span> <span class="value">IT56R0340201749000000002070</span> </p>
                            <p> <span class="label">Numero conto</span> <span class="value">0000002070</span> </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Conto deposito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
		        </a>
		      </h4> </div>
                    <div class="collapse-top" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"> <span class="label">Saldo contabile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                                <div class="col-xs-6 col-sep"> <span class="label">Saldo disponibile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p> <span class="label">Intestato a</span> <span class="value">LOREM IPSUM DOLOR SIT AMET</span> </p>
                            <p> <span class="label">Numero deposito</span> <span class="value">0000002070</span> </p>
                            <p> <span class="label">Tasso</span> <span class="value">1,026%</span> </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Linee vincolate<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
		        </a>
		      </h4> </div>
                    <div class="collapse-top" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12"> <span class="label">Totale investito</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p> <span class="label">Scadenza prossima linea</span> <span class="value">16/12/2015</span> </p>
                            <p> <span class="label">Importo</span> <span class="value money">999.999.999,00 &euro;</span> </p>
                            <p> <span class="label">Interessi netti</span> <span class="value money">999.999.999,00 &euro;</span> </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
		          Conto derivati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
		        </a>
		      </h4> </div>
                    <div class="collapse-top" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6"> <span class="label">Saldo contabile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                                <div class="col-xs-6 col-sep"> <span class="label">Saldo disponibile</span> <span class="value money">999.999.999,00 &euro;</span> </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse collapse-bottom" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p> <span class="label">Margine impegnato per posizioni aperte</span> <span class="value money">999.999.999,00 &euro;</span> </p>
                            <p> <span class="label">Profit &amp; loss potenziali</span> <span class="value money">999.999.999,00 &euro;</span> <span class="note">
				 			Dato calcolato in base alle ultime quotazioni disponibili
				 		</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3>Imposta conto preferito</h3> Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito? </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="btn-align-left">
                                <button type="button" class="btn btn-default" data-dismiss="modal">annulla</button>
                            </div>
                            <div class="btn-align-right">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">conferma</button>
                            </div>
                            <br class="clear"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!$isMobile): ?>
        <div id="riadesktop" class="hidden-xs">
            <span class="accesso flRight note">Ultimo accesso<br/>03/04/13 10:25</span>
            <div class="navContSecondLev" id="myHomeTabs">
                <div class="outerTab">
                    <ul class="tabWrapper tabsmall hidden-xs">
                        <li><a href="#conto1">I miei conti</a></li>
                        <li><a href="#conto2">Le mie carte</a></li>
                        <li><a href="#conto3">I miei finanziamenti</a></li>
                    </ul>
                </div>
                <div class="separator"></div>
                <div class="panel-group panel-fill" role="tablist" aria-multiselectable="true" id="accordion2">
                    <div class="panel panel-default">
                        <div id="conto1" class="panel-collapse collapse riacontainer" role="tabpanel">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                    <?php virtual("/librerie/include/commons/ria/ria.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="conto2" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                    <?php virtual("/librerie/include/oggetti/tabelle/tabella_130_FP_Carte/oggetto.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div id="conto3" class="panel-collapse collapse" role="tabpanel">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                   <?php virtual("/librerie/include/oggetti/tabelle/tabella_131_FP_Finanziamenti/oggetto.php"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(function () {
                resizeTab('myHomeTabs', 0);
            });
            </script>

            <div class="layeralert2" id="layeralert1" style="display: none;">
                <div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert1')" /></div>
                <div class="body">
                    <div class="important">
                        <div id="contcont">
                            <h2>Lorem ipsum lorem ipsum</h2>
                            <table cellpadding="0" cellspacing="0" class="condiz">
                                <tr class="pari">
                                    <td class="primo">Lorem ipsum lorem ipsum</td>
                                    <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="primo">Lorem ipsum lorem ipsum</td>
                                    <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                                </tr>
                                <tr class="pari">
                                    <td class="primo">Lorem ipsum lorem ipsum</td>
                                    <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                                </tr>
                                <tr class="dispari">
                                    <td class="primo">Lorem ipsum lorem ipsum</td>
                                    <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                                </tr>
                                <tr class="pari">
                                    <td class="primo">Lorem ipsum lorem ipsum</td>
                                    <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br class="clear" /> </div>
                <div class="foot"></div>
            </div>

            <script type="text/javascript">
                var srvTs = '<?php print time() * 1000; ?>';
            </script>

            <script type="text/javascript">
                function layerconti(conto, intestatari) {
                    openPopOverLayer('layeralertconti', 'float', 1);
                    $('contenuto').innerHTML = '<div><p>Per operare sul conto corrente indicato, &egrave; necessario che <strong>tutti gli intestatari</strong> richiedano ' + 'l\'\<strong>abilitazione</strong> al servizio <strong><%=wsVisitorInfo.getShortSiteName()%></strong> presso la propria <strong>agenzia <%=wsVisitorInfo.getShortBankName()%></strong>.</p>' + '</div>' + '<div class="row">' + '<div class="col-xs-12 col-md-4">' + '<label class="nomefield"><strong>Conto corrente n°</strong></label><br>' + '<span class="output">' + conto + '</span>' + '</div>' + '<div class="col-xs-12 col-md-8">' + '<label class="nomefield"><strong>Intestato a</strong></label><br>' + '<span class="output">' + intestatari + '</span>' + '</div>' + '</div>';
                }
            </script>

            <?php if ($bank=="webank") { ?>
            <script type="text/javascript" src="/js/priv_myhome_promo.js?r=<?php echo $random ?>"></script>
            <?php } ?>
        </div>
    <?php endif ?>

    <script type="text/javascript">
        var valueArr = {
                "01077 - 0000049477 - EUR": ["985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20", "985.575.343,20"],
                "01077 - 0000049478 - EUR": ["183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80", "183.459.644,80"]
            },
            mobileGraphData1 = {
                "01077 - 0000049477 - EUR": [{
                    "color": "#6f8f0a",
                    "value": "20"
                }, {
                    "color": "#000000",
                    "value": "80"
                }],
                "01077 - 0000049478 - EUR": [{
                    "color": "#6f8f0a",
                    "value": "40"
                }, {
                    "color": "#000000",
                    "value": "60"
                }]
            },
            mobileGraphData2 = {
                "01077 - 0000049477 - EUR": [{
                    "color": "#ACD038",
                    "value": "5"
                }, {
                    "color": "#D8F86F",
                    "value": "15"
                }, {
                    "color": "#666666",
                    "value": "55"
                }, {
                    "color": "#b2b2b2",
                    "value": "5"
                }, {
                    "color": "#ffffff",
                    "value": "20"
                }],
                "01077 - 0000049478 - EUR": [{
                    "color": "#ACD038",
                    "value": "30"
                }, {
                    "color": "#D8F86F",
                    "value": "10"
                }, {
                    "color": "#666666",
                    "value": "35"
                }, {
                    "color": "#b2b2b2",
                    "value": "5"
                }, {
                    "color": "#ffffff",
                    "value": "20"
                }]
            },
            mobileGraph1,
            mobileGraph2;

        function createGraph(graphData1, graphData2) {
            $('#ria-xs-graph1, #ria-xs-graph2').empty();
            mobileGraph1 = new AmCharts.AmPieChart();
            mobileGraph1.dataProvider = graphData1;
            mobileGraph1.balloon.enabled = false;
            mobileGraph1.valueField = "value";
            mobileGraph1.colorField = "color";
            mobileGraph1.labelsEnabled = false;
            mobileGraph1.autoMargins = false;
            mobileGraph1.marginTop = 0;
            mobileGraph1.marginBottom = 0;
            mobileGraph1.marginLeft = 0;
            mobileGraph1.marginRight = 0;
            mobileGraph1.pullOutRadius = 0;
            mobileGraph1.startDuration = 0;
            mobileGraph1.write('ria-xs-graph1');
            mobileGraph2 = new AmCharts.AmPieChart();
            mobileGraph2.dataProvider = graphData2;
            mobileGraph2.balloon.enabled = false;
            mobileGraph2.valueField = "value";
            mobileGraph2.colorField = "color";
            mobileGraph2.labelsEnabled = false;
            mobileGraph2.autoMargins = false;
            mobileGraph2.marginTop = 0;
            mobileGraph2.marginBottom = 0;
            mobileGraph2.marginLeft = 0;
            mobileGraph2.marginRight = 0;
            mobileGraph2.pullOutRadius = 0;
            mobileGraph2.startDuration = 0;
            mobileGraph2.write('ria-xs-graph2');
        }
        $(function() {
            createGraph(mobileGraphData1['01077 - 0000049477 - EUR'], mobileGraphData2['01077 - 0000049477 - EUR']);
            cambioContoMobile();
        });
    </script>
