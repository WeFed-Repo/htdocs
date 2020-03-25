<script type="text/javascript">
var debugOroCapitano = false;
var librerie = true;
var pathLibrerie = '/librerie/include/commons/ajax';
var cgi_script = '/webankpri';

<?php
$forceJS = (isset($_GET['js']) && $_GET['js'] == 'y')? "true" : "false";
$forcePerc = (isset($_GET['perc']) && $_GET['perc'] == 'y')? "true" : "false";
?>
var forceJS = <?php echo $forceJS ?>;
var forcePerc = <?php echo $forcePerc ?>;
</script>

<style type="text/css">
@import url('/wscmn/css/ret/oro_capitano.css');
</style>

<h1>IL MIO PATRIMONIO</h1>
<!-- VECCHIO BOX CON PULSANTE QUESTIONARIO CUSTOMER EXPERIENCE
<table class="form01 nopadd rapporti">
	<tbody>
		<tr>
			<td class="depwt">Rapporto</td>
			<td class="rappWt">
				<div id="sceltaRapportoFP" class="selectRapp">
					<form action="" method="post">
						<input id="sceltaRapportoValFP" type="hidden" class="value" name="accounts" value="00599 0000074975 EUR"/>
						<input id="contodep" type="hidden" class="value" name="accounts" value=""/>
						<input id="contoder" type="hidden" class="value" name="accounts" value=""/>
						<a href="javascript:;" class="inputOption inputSx">
							<span class="inputDx">
								<span class="input">
									siDT CC 00599 0000089342 EUR +DEP +DER
								</span>
							</span>
						</a>
						<div class="selectorSpacer" style="display: none;"></div>
						<div class="selector" style="display: none;">
							<a value="00599 0000074971 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions first">
								<input id="selConto1" class="selConto" type="checkbox"/>
								<span>noDT CC 00599 0000074971 EUR</span><span class="clear"></span></a>
							<a value="00599 0000074972 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions technical">
								<input id="selConto2" class="selConto" type="checkbox"/>
								<span>siDT CT 00599 0000074972 EUR</span><span class="clear"></span></a>
							<a value="00599 0000074973 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto3" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074973 EUR +DER</span><span class="clear"></span></a>
							<a value="00599 0000074974 EUR" contodep="00596 0000074974 EUR" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto4" class="selConto" type="checkbox"/>
								<span>noDT CC 00599 0000074974 EUR +DEP</span><span class="clear"></span></a>
							<a value="00599 0000074975 EUR" contodep="00596 0000074975 EUR" contoder="" href="javascript:;" class="selectorOptions favorite">
								<input id="selConto5" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074975 EUR +DEP</span><span class="clear"></span></a>
							<a value="00599 0000074976 EUR" contodep="00596 0000074976 EUR" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto6" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074976 EUR +DEP +DER</span><span class="clear"></span></a>
						</div>
						<div class="selectorConfirm" style="display: none;">
							<div class="selectorConfirm2">
								<div class="selectorConfirm3">
									<div class="btnConfirm">
										<div class="btnConfirm2">
											<div class="btnConfirm3">
												<a href="javascript:;">Conferma</a>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="selTutti"><input id="selTuttiCB" type="checkbox" class="nobor3"/><span class="txtinput"><label for="selTuttiCB">tutti i rapporti</label></span></div>
			</td>
		</tr>
	</tbody>
</table>
<div class="btncustomer"><a href=""><img src="/img/ret/str_btn_customer.gif" alt="" /></a></div>
<br class="clear" /-->

<table class="form01 nopadd rapporti">
	<tbody>
		<tr>
			<td class="depwt">Rapporto</td>
			<td class="rappWt">
				<div id="sceltaRapportoFP" class="selectRapp">
					<form action="" method="post">
						<input id="sceltaRapportoValFP" type="hidden" class="value" name="accounts" value="00599 0000074975 EUR"/>
						<input id="contodep" type="hidden" class="value" name="accounts" value=""/>
						<input id="contoder" type="hidden" class="value" name="accounts" value=""/>
						<a href="javascript:;" class="inputOption inputSx">
							<span class="inputDx">
								<span class="input">
									siDT CC 00599 0000089342 EUR +DEP +DER
								</span>
							</span>
						</a>
						<div class="selectorSpacer" style="display: none;"></div>
						<div class="selector" style="display: none;">
							<a value="00599 0000074971 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions first">
								<input id="selConto1" class="selConto" type="checkbox"/>
								<span>noDT CC 00599 0000074971 EUR</span><span class="clear"></span></a>
							<a value="00599 0000074972 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions technical">
								<input id="selConto2" class="selConto" type="checkbox"/>
								<span>siDT CT 00599 0000074972 EUR</span><span class="clear"></span></a>
							<a value="00599 0000074973 EUR" contodep="" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto3" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074973 EUR +DER</span><span class="clear"></span></a>
							<a value="00599 0000074974 EUR" contodep="00596 0000074974 EUR" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto4" class="selConto" type="checkbox"/>
								<span>noDT CC 00599 0000074974 EUR +DEP</span><span class="clear"></span></a>
							<a value="00599 0000074975 EUR" contodep="00596 0000074975 EUR" contoder="" href="javascript:;" class="selectorOptions favorite">
								<input id="selConto5" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074975 EUR +DEP</span><span class="clear"></span></a>
							<a value="00599 0000074976 EUR" contodep="00596 0000074976 EUR" contoder="" href="javascript:;" class="selectorOptions">
								<input id="selConto6" class="selConto" type="checkbox"/>
								<span>siDT CC 00599 0000074976 EUR +DEP +DER</span><span class="clear"></span></a>
						</div>
						<div class="selectorConfirm" style="display: none;">
							<div class="selectorConfirm2">
								<div class="selectorConfirm3">
									<div class="btnConfirm">
										<div class="btnConfirm2">
											<div class="btnConfirm3">
												<a href="javascript:;">Conferma</a>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="selTutti"><input id="selTuttiCB" type="checkbox" class="nobor3"/><span class="txtinput"><label for="selTuttiCB">tutti i rapporti</label></span></div>
			</td>
		</tr>
	</tbody>
</table>
<br class="clear" />

<div id="outputConti">
	<div class="listaConti" style="display:none;">noDT CC 00599 0000074978 EUR</div>
	<div class="listaConti" style="display:none;">siDT CT 00599 0000074978 EUR</div>
	<div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DER</div>
	<div class="listaConti" style="display:none;">noDT CC 00599 0000074978 EUR +DEP</div>
	<div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DEP</div>
	<div class="listaConti" style="display:none;">siDT CC 00599 0000074978 EUR +DEP +DER</div>
	<br class="clear" />
</div>

<div id="grafPatrimonio" class="visibleText">
	<div id="borPatrimonioLeft"></div>
	<div id="borPatrimonioRight"></div>
	<div id="borPatrimonioTR"></div>
	<div id="borPatrimonioTop1"></div>
	<div id="borPatrimonioTop2"></div>
	<div id="borPatrimonioTop3"></div>
	<div id="borPatrimonioBottom"></div>
	
	<div id="boxTesto"><p>Il grafico mostra la tua situazione patrimoniale ad oggi,
		cio&egrave; la somma tra liquidit&agrave; e controvalore in portafoglio.
		Per visualizzare eventuali dettagli clicca sulle singole fette del grafico.</p>
		<a href="javascript:;" id="noChartText">&nbsp;&nbsp;&nbsp;</a></div>
	
	<div id="titPatrimonio">Controvalore totale: <span id="titTotale"></span>&nbsp;&euro;</div>
	
	<div id="chartPatrimonio"></div>
	
	<div id="legenda">
		<div id="legendaContent">
			<div id="ombraLegendaLeft">
				<div id="borLegendaLeft">
					<div id="legendaBody">
						<h3 class="titLegenda">Liquidit&agrave;</h3>
						<div id="titValLiquidita" class="titValLegenda"><span id="liquiditaTotale"></span>&nbsp;&euro;</div>
						<div class="clear"></div>
						
						<ul class="grafLegenda">
							<li>
								<img id="icoLegenda1" src="/img/ret/ico1gr_legenda1.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda1" href="javascript:;" class="labelLegenda">Saldo disponibile c/c</a>
								<a id="valLegenda1" href="javascript:;" class="valLegenda"><span id="numLegenda1"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li id="subLegenda1" class="subLegenda" style="display:none">
								<div class="divSubLegenda" style="display:none">
									<div>
										<ul class="grafSubLegenda">
											<li class="first">
												<img id="icoLegenda1_1" src="/img/ret/ico1gr_Legenda1a.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_1" href="javascript:;" class="labelLegenda">Saldo contabile</a>
												<a id="valLegenda1_1" href="javascript:;" class="valLegenda"><span id="numLegenda1_1"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda1_2" src="/img/ret/ico1gr_Legenda1b.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_2" href="javascript:;" class="labelLegenda">Totale impegni banking</a>
												<a id="valLegenda1_2" href="javascript:;" class="valLegenda"><span id="numLegenda1_2"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda1_3" src="/img/ret/ico1gr_Legenda1c.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_3" href="javascript:;" class="labelLegenda">Totale impegni trading</a>
												<a id="valLegenda1_3" href="javascript:;" class="valLegenda"><span id="numLegenda1_3"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda1_4" src="/img/ret/ico1gr_Legenda1d.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_4" href="javascript:;" class="labelLegenda">Totale preavvisi trading</a>
												<a id="valLegenda1_4" href="javascript:;" class="valLegenda"><span id="numLegenda1_4"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda1_5" src="/img/ret/ico1gr_Legenda1e.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_5" href="javascript:;" class="labelLegenda">Totale impegni fondi</a>
												<a id="valLegenda1_5" href="javascript:;" class="valLegenda"><span id="numLegenda1_5"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda1_6" src="/img/ret/ico1gr_Legenda1f.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda1_6" href="javascript:;" class="labelLegenda">Totale preavvisi fondi</a>
												<a id="valLegenda1_6" href="javascript:;" class="valLegenda"><span id="numLegenda1_6"></span>&nbsp;&euro;</a><span class="clear"></span></li>
										</ul>
									</div>
								</div>
							</li>
							
							<li>
								<img id="icoLegenda2" src="/img/ret/ico1gr_legenda2.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda2" href="javascript:;" class="labelLegenda">Saldo deposito libero</a>
								<a id="valLegenda2" href="javascript:;" class="valLegenda"><span id="numLegenda2"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							<li>
								<img id="icoLegenda3" src="/img/ret/ico1gr_legenda3.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda3" href="javascript:;" class="labelLegenda">Saldo linee vincolate</a>
								<a id="valLegenda3" href="javascript:;" class="valLegenda"><span id="numLegenda3"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li id="subLegenda3" class="subLegenda" style="display:none">
								<div class="divSubLegenda" style="display:none">
									<div>
										<ul class="grafSubLegenda">
										</ul>
									</div>
								</div>
							</li>
							
							<li id="boxContoDeposito" id="" class="btnBgPort" style="display:none">	
								<div class="btnBgPortafoglio"><a href="javascript:;" title="Apri Conto Webank: pi&ugrave; rendimento e zero spese!">Apri Conto Webank: pi&ugrave; rendimento e zero spese!</a></div></li>
							
							<li>
								<img id="icoLegenda4" src="/img/ret/ico1gr_legenda4.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda4" href="javascript:;" class="labelLegenda">Saldo disponibile derivati</a>
								<a id="valLegenda4" href="javascript:;" class="valLegenda"><span id="numLegenda4"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li id="subLegenda4" class="subLegenda" style="display:none">
								<div class="divSubLegenda" style="display:none">
									<div>
										<ul class="grafSubLegenda">
											<li class="first">
												<img id="icoLegenda4_1" src="/img/ret/ico1gr_Legenda4a.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda4_1" href="javascript:;" class="labelLegenda">Liquidit&agrave; impegnata per operativit&agrave; intraday</a>
												<a id="valLegenda4_1" href="javascript:;" class="valLegenda"><span id="numLegenda4_1"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda4_2" src="/img/ret/ico1gr_Legenda4b.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda4_2" href="javascript:;" class="labelLegenda">Margini iniziali derivati (Idem, Eurex, CME, LIFFE)</a>
												<a id="valLegenda4_2" href="javascript:;" class="valLegenda"><span id="numLegenda4_2"></span>&nbsp;&euro;</a><span class="clear"></span></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
						
						<h3 class="titLegenda titPortafoglio">Portafoglio</h3>
						<div id="titValPortafoglio" class="titValLegenda titPortafoglio"><span id="portafoglioTotale"></span>&nbsp;&euro;</div>
						<div class="clear"></div>
						
						<ul class="grafLegenda">
							<li>
								<img id="icoLegenda5" src="/img/ret/ico1gr_legenda5.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda5" href="javascript:;" class="labelLegenda">Portafoglio titoli</a>
								<a id="valLegenda5" href="javascript:;" class="valLegenda"><span id="numLegenda5"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li id="subLegenda5" class="subLegenda" style="display:none">
								<div class="divSubLegenda" style="display:none">
									<div>
										<ul class="grafSubLegenda">
											<li class="first">
												<img id="icoLegenda5_1" src="/img/ret/ico1gr_Legenda5a.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_1" href="javascript:;" class="labelLegenda">Azioni Italia</a>
												<a id="valLegenda5_1" href="javascript:;" class="valLegenda"><span id="numLegenda5_1"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_2" src="/img/ret/ico1gr_Legenda5b.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_2" href="javascript:;" class="labelLegenda">Azioni estero</a>
												<a id="valLegenda5_2" href="javascript:;" class="valLegenda"><span id="numLegenda5_2"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_3" src="/img/ret/ico1gr_Legenda5c.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_3" href="javascript:;" class="labelLegenda">Obbligazioni</a>
												<a id="valLegenda5_3" href="javascript:;" class="valLegenda"><span id="numLegenda5_3"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_4" src="/img/ret/ico1gr_Legenda5d.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_4" href="javascript:;" class="labelLegenda">Derivati</a>
												<a id="valLegenda5_4" href="javascript:;" class="valLegenda"><span id="numLegenda5_4"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_5" src="/img/ret/ico1gr_Legenda5e.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_5" href="javascript:;" class="labelLegenda">CW/Certificates</a>
												<a id="valLegenda5_5" href="javascript:;" class="valLegenda"><span id="numLegenda5_5"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_6" src="/img/ret/ico1gr_Legenda5f.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_6" href="javascript:;" class="labelLegenda">Etf</a>
												<a id="valLegenda5_6" href="javascript:;" class="valLegenda"><span id="numLegenda5_6"></span>&nbsp;&euro;</a><span class="clear"></span></li>
											<li>
												<img id="icoLegenda5_7" src="/img/ret/ico1gr_Legenda5g.gif" class="icoLegenda icoOn"/>
												<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
												<a id="labelLegenda5_7" href="javascript:;" class="labelLegenda">Marginazione</a>
												<a id="valLegenda5_7" href="javascript:;" class="valLegenda"><span id="numLegenda5_7"></span>&nbsp;&euro;</a><span class="clear"></span></li>
										</ul>
									</div>
								</div>
							</li>

							<li>
								<img id="icoLegenda6" src="/img/ret/ico1gr_legenda6.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda6" href="javascript:;" class="labelLegenda">Portafoglio fondi e sicav</a>
								<a id="valLegenda6" href="javascript:;" class="valLegenda"><span id="numLegenda6"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li>
								<img id="icoLegenda7" src="/img/ret/ico1gr_legenda7.gif" class="icoLegenda icoOn"/>
								<img src="/img/ret/ico1gr_legenda_off.gif" class="icoLegenda icoOff"/>
								<a id="labelLegenda7" href="javascript:;" class="labelLegenda">Totale Pronti contro termine</a>
								<a id="valLegenda7" href="javascript:;" class="valLegenda"><span id="numLegenda7"></span>&nbsp;&euro;</a><span class="clear"></span></li>
							
							<li id="boxPortafoglio" class="btnBgPort" style="display:none">	
								<div class="btnBgPortafoglio"><a href="javascript:;" title="Scopri le soluzioni per il trading">Scopri le soluzioni per il trading</a></div></li>	
						</ul>						
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="borLegendaBottom">
			<div id="texTotLegenda">Totale</div>
			<div id="numTotLegenda"><span id="legendaTotale"></span>&nbsp;&euro;</div>
			<div class="clear"></div>
		</div>
		<div id="ombraLegendaBottom"></div>
	</div>
		
	<div id="blurGrafPatrimonio"></div>
	<div id="subGrafPatrimonio" style="display:none">
		<div>
			<div id="ombraSubGrafBottom">
				<div id="subChartPatrimonio">
				</div>
			</div>
		</div>
	</div>

	<div class="clear"></div>
</div>

<br />
<div class="expandable">
	<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>Spiegazione dei termini</h4>
	
	<div class="descLegenda" style="display:none;">
		Di seguito una legenda dei principali termini che trovi in pagina.<br/>
		<br/>

		<h3>LIQUIDIT&Agrave;</h3>
		
		<strong>Saldo disponibile c/c</strong><br/>
		Il saldo tiene conto della presenza di &quot;movimenti non contabilizzati&quot;.
		Si tratta di operazioni (addebiti e accrediti) gi&agrave; effettuate, ma non ancora contabilizzate.
		
		<ul>
			<li><strong>Saldo contabile</strong><br/> 
				A differenza del saldo disponibile, non tiene conto dei movimenti non contabilizzati.</li>
			<li><strong>Totale impegni banking, trading e investimenti</strong><br/> 
				Gli <strong>impegni</strong> sono operazioni in <strong>addebito</strong> effettuate sul conto, ma non ancora contabilizzate.
				Incidono pertanto sul saldo disponibile.
				Per esempio, un prelievo bancomat o un ordine di acquisto di titoli.</li> 
			<li><strong>Totale preavvisi trading e fondi</strong><br/> 
				I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile
				soltanto al momento delle loro contabilizzazione effettiva.</li> 
		</ul>
		
		<strong>Saldo disponibile derivati</strong><br/>
		Il saldo tiene conto degli impegni derivanti dai margini iniziali accantonati, dall'operatività ordinaria e da quella marginata intraday.

		<ul>
			<li><strong>Liquidit&agrave; impegnata per operativit&agrave; intraday</strong><br/> 
				&Egrave; l'importo impegnato sul saldo disponibile del conto corrente per l'apertura o l'incremento di posizioni marginate</li>
			<li><strong>Margini iniziali derivati (Idem, Eurex, CME, LIFFE)</strong><br/> 
			&Egrave; l'importo impegnato sul saldo disponibile del conto corrente a seguito di apertura di posizioni ordinarie (non marginate) in derivati</li>
		</ul>
		
		<br />
		
		<h3>PORTAFOGLIO</h3>

		<strong>Portafoglio titoli</strong><br/>  
		&Egrave; il controvalore di azioni, obbligazioni, Etf, Covered warrants, certificates e posizioni marginate<br/>

		<ul>
			<li><strong>Azioni Italia, Azioni estero, Obbligazioni, Derivati, Covered warrants/Certificates, Etf, Marginazione</strong><br />
			&Egrave; il controvalore dei titoli suddiviso nelle principali tipologie di strumenti finanziari</li>
		</ul>
		
		<strong>Portafoglio fondi e sicav</strong><br/>
		&Egrave; il controvalore di fondi e sicav  presenti nel portafoglio<br/><br/>

		<strong>Totale Pronti contro termine</strong><br/>
		&Egrave; il controvalore dei pronti contro termine attivati
	</div>
</div>

<div align="right" style="width: 350px;" class="BvTableHeaderHelp"><br/>
	<a title="Stampa la pagina" href="javascript:window.print()"><img alt="Stampa la pagina" src="/img/ret/ico2or_stampa.gif"></a><a title="Stampa la pagina" href="javascript:window.print()" class="hlp">Stampa la pagina</a>
	<a title="Esporta in PDF" href="javascript:;"><img alt="Esporta in PDF" src="/img/ret/ico2or_pdf.gif"></a><a title="Esporta in PDF" href="Esporta in PDF" class="hlp">Esporta in PDF</a>
	<br class="clear">
</div>
<br class="clear">

<div class="fooform">
	<div class="fooformtop"></div>
	<div class="fooformleft">
		<div><a href="javascript:;" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>indietro</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>		
	<br class="clear" />
</div>

<!-- following scripts required for JavaScript version. The order is important! -->
<script type="text/javascript" src="/wscmn/js/privata/SWFObject.js"></script>
<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>

<script type="text/javascript" src="/wscmn/js/ret/oro_capitano.js"></script>
