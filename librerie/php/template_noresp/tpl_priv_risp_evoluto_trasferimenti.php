<script>
// Variabile da valorizzare successivamente
var dashboardData = {
	contoEvo: []
};
$(function () {
	// Devi valorizzare queste variabili
	dashboardData.contoEvo.saldoDisponibileFormat = 11111111;
	dashboardData.contoEvo.capitaleRisparmiatoFormat = 2222222;
	// Da qui in poi lascia inalterato
	$('#massimoImpCCEvoLink').html(dashboardData.contoEvo.saldoDisponibileFormat);
	$('#massimoImpEvoCCImp').html(dashboardData.contoEvo.capitaleRisparmiatoFormat);
	$('#importoEvoCCVersamenti')
		.keyup(function (e) { animazioneEvoDiventaTr(e, 'EVO'); })
		.on('focus blur', function () { resetSalvadanaio(); });
	$('#importoCCEvoVersamenti')
		.keyup(function (e) { animazioneEvoDiventaTr(e, 'CC'); })
		.on('focus blur', function () { resetSalvadanaio(); });
		$('#aPartireDaTREvof').val('').attr('placeholder','gg/mm/aaaa').mask('99/99/9999');
});
</script>

<h1>Trasferimenti</h1>

<div class="borderFormRounded margBottomLarge margTopSmall">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span4 no-desktop">
				<label class="nomefield">conto corrente</label>
				<select class="withIco"><option >CC 0050 0000085962 EUR</option><option>CC 0050 0000085962 EUR</option></select>
				<a class="flRight" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
			</div>
			<div class="span2 no-desktop">&nbsp;
			</div>
			<div class="span6 no-desktop">
				<div class="row-fluid noMargbottom">
					<div class="span12">
						<label class="nomefield">Totale Risparmio Ben Fatto</label>
						<a href="#" class="cifraConto">1500<span> &euro;</span></a>
					</div>
				</div>	
			</div>
		</div>
		
	</div>
</div>
<br class="clear">


<div class="divtabellatabs autoWidth">
<table cellspacing="0" cellpadding="0" border="0" class="tabellatabs">
	<tr>
		<td class="oninizio"></td>
		<td isselected="true" class="on"><a data-tabid="1" onclick="switchTab('tabAlert','tab', 1, 7); newTabSelected(this); reloadPagesData(1);" onmouseout="newTabOff(this);" onmouseover="newTabOn(this);" href="javascript:void(0);" title="Singolo">singolo</a></td><td class="on2b"> </td>
		<td class="off"><a data-tabid="2" onclick="switchTab('tabAlert','tab', 2, 7); newTabSelected(this); reloadPagesData(2);" onmouseout="newTabOff(this);" onmouseover="newTabOn(this);" href="javascript:void(0);" title="Periodici">periodico</a></td><td class="off2"> </td>
		<td class="off"><a data-tabid="3" onclick="switchTab('tabAlert','tab', 3, 7); newTabSelected(this); reloadPagesData(3);" onmouseout="newTabOff(this);" onmouseover="newTabOn(this);" href="javascript:void(0);" title="A soglia">a soglia</a></td><td class="off2"> </td>
	</tr>
</table>



<!-- primo tab-->
	<div id="tabAlert1" class="divtabellacont" style="display: block;">
	<div class="row-fluid">
				<div class="span6">
					<div id="boxTrasfSingEvo" class="boxWhiteOut">
						<p>Puoi trasferire, in <strong>tempo reale</strong>, l'importo che desideri dal conto corrente a Risparmio Ben Fatto o viceversa.</p>
						
						<div class="contOverflow2">
							<div class="wrapTrasferisci">
								<div id="boxTrasfSingCCEvo"><br>
									<div class="tit">Trasferisci verso Risparmio Ben Fatto</div>
									<span class="impRispTxtTop">Disponibilità <span data-tooltip="La disponibilit&agrave; per il trasferimento &egrave; calcolata sottraendo dal tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenza, l'importo gi&agrave; versato su Risparmio Ben Fatto e la soglia minima di conto corrente impostata." class="txthelp"><span id="massimoImpCCEvoLink"></span>&nbsp;<span class="valuta">€</span></span></span>
									<br>
									<div class="formGeneric">
										<form>
											<div class="row-fluid noMargbottom">
												<div class="span6">
													<input type="text" data-error="" class="impRisp" id="importoCCEvoVersamenti">
												</div>
												<div class="span6 spButtonAlign">
													<a class="spButton spGreen1" href="#"><span>trasferisci</span></a>
												</div>
											</div>
										</form>
									</div>
								</div>
						   
								<!--esito negativo-->
								<div id="boxTrasfSingCCEvoEsiNega" class="BoxRiaEsi" style="display:none">
									<div class="boxesito negativo">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<span class="msg"></span><br>
												<a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
											</div>
										</div>
									</div>												
								</div>
								
								<!--esito positivo-->
								<div id="boxTrasfSingCCEvoEsiPosi" class="BoxRiaEsi" style="display:none">
									<div class="boxesito positivo">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<strong>Trasferimento effettuato</strong><br>
												<span>Importo <strong id="importoDaVersareSingCCEvo"></strong></span><br/>
												<span>Data <strong id="dataSingCCEvo"></strong></span>
												<a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
											</div>
										</div>
									</div>												
								</div>	
							</div>
						</div>
						
						<p style="visibility:hidden" id="diventaCCEvoTrspan" class="saldoEvi">il tuo salvadanaio diventa <strong id="diventaCCEvoTr"></strong>&nbsp;<span class="valuta">&euro;</span></p>
						<div class="clear"></div>
						
						<div class="contOverflow2">
							<div class="wrapTrasferisci">
								<div id="boxTrasfSingEvoCC"><br>
									<div class="tit">Trasferisci da Risparmio Ben Fatto</div>		
									<span class="impRispTxtTop">Importo risparmiato 
									<a href="javascript:;" id="massimoImpEvoCCLink"><span id="massimoImpEvoCCImp"></span>&nbsp;<span class="valuta">€</span></a></span>
									<br>
									<div class="formGeneric">
										<form>
											<div class="row-fluid noMargbottom">
												<div class="span6">
													<input type="text" data-error="" class="impRisp" id="importoEvoCCVersamenti">
												</div>
												<div class="span6 spButtonAlign">
													<a class="spButton spGreen1" href="#"><span>trasferisci</span></a>
												</div>
											</div>
										</form>
									</div>
								</div>
								
								<!--esito negativo-->
								<div id="boxTrasfSingEvoCCEsiNega" class="BoxRiaEsi" style="display:none">
									<div class="boxesito negativo">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<span class="msg"></span><br>
												<a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
											</div>
										</div>
									</div>												
								</div>
								
								<!--esito positivo-->
								<div id="boxTrasfSingEvoCCEsiPosi" class="BoxRiaEsi" style="display:none">
									<div class="boxesito positivo">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<strong>Trasferimento effettuato</strong><br>
												<span>Importo <strong id="importoDaVersareSingEvoCC"></strong></span><br/>
												<span>Data <strong id="dataSingEvoCC"></strong></span>
												<a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
											</div>
										</div>
									</div>												
								</div>
							</div>
						</div>
						
						<p style="visibility:hidden" id="diventaEvoCCTrspan" class="saldoEvi">il tuo conto corrente diventa <strong id="diventaEvoCCTr"></strong>&nbsp;<span class="valuta">&euro;</span></p>
						<div class="clear"></div>
					
					</div>
				</div>
				<div class="span6"><img id="imgAnimTr" class="imgAnimPosTop" src="/img/ret/img_animaz_evo_01.gif" /></div>
			</div>
	
	</div>
<!-- fine primo tab-->
	<!-- secondo tab-->
	<div style="display:none" id="tabAlert2" class="divtabellacont">
		<div style="" id="buttonListaPeriodico">
			<a class="saldoEvi colorBank" href="#" id="">Vedi trasferimenti periodici impostati<br></a>	
		</div>
		<br class="clear">
		<p class="small"><strong>Imposta trasferimento periodico verso Risparmio Ben Fatto</strong><br><br>Definisci l'importo e la frequenza con cui vuoi trasferire il tuo denaro verso il salvadanaio virtuale.</p>
		<br>
		<div class="formGeneric">
			<div class="nuovoTrasBox" id="boxTrasfRicVsEvo">
				<div class="row-fluid">
					<div class="span4">
						<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Importo:</label>
						<input type="text" name="importoEvo" id="importoTREvof" data-error="">
					</div>
					<div class="span4">
							<label class="nomefield">Frequenza:</label>
							<select name="frequenzaEvo" id="frequenzaTREvof" ></select>
					</div>
					<div class="span4">
						<label for="aPartireDaTREvof" id="labelApartireDaTREvo" class="nomefield" value="gg/mm/aaaa"> A partire da:</label>
						<input type="text" name="aPartireEvo" id="aPartireDaTREvof"  data-error="">
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield">Scadenza:</label>
						<div id="scadenzeLabeleRadio" class="row-fluid">
							<div class="span3 margScadenza">
								<label for="scadenzaEvo"><input type="radio" id="revocaEvo" name="scadenzaTREvof" value="a revoca" class="radio">su richiesta</label>
							</div>
							<div class="span9">
								<label for="scadenzaEvo" id="labelNumeroTREvo"><input type="radio" id="dopoNEvo" name="scadenzaTREvof" value="dopo" class="radio margInpAuto"  data-error="">automaticamente, dopo <input type="text" name="numeroEvo" id="numeroTREvof" class="numero"> trasferimenti</label>
							</div>							 
						</div>
						<span class="scadenza"><span id="scadenzaTRRvofLAB"></span></span>
					</div>
				</div>
				<div class="btnc aButtoncons"><a class="spButton spGreen1" href="javascript:;"><span>lorem ipsum</span></a></div>
				<div class="clear"></div>
				<div class="row-fluid">
					<div class="span12">
						<!--esito negativo-->
						<div class="" id="boxTrasfRicVsEvoEsiNega">
							<br>
							<div class="boxesito negativo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<strong>Disposizione trasferimento periodico fallita </strong><br>
										<a href="javascript:;" class="nuovoEvo flRight colorBank">chiudi</a>
									</div>
								</div>
							</div>												
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<!--esito positivo-->
						<div class="" id="boxTrasfRicVsEvoEsiPosi">
							<br>
							<div class="boxesito positivo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<strong>Disposizione trasferimento periodico effettuata</strong><br>
										<br>
										<div class="row-fluid">
											<div class="span5">
												<span>Importo <strong id="">XXXXXX</strong></span><br/>
											</div>
											<div class="span5">
												<span>Frequenza <strong id="">mensile</strong></span><br/>
											</div>
											<div class="span2">
											&nbsp;
											</div>
										</div>
										<div class="row-fluid">
											<div class="span5">
												<span>A partire da <strong id="">XX/XX/XXXX</strong></span><br/>
											</div>
											<div class="span5">
												<span>Scadenza <strong id="">su ruchiesta</strong></span><br/>
											</div>
											<div class="span2">
												<a href="javascript:;" class="nuovoEvo flRight colorBank">nuovo</a>
											</div>
										</div>
									</div>
								</div>
							</div>												
						</div>
					</div>
				</div>				
			</div>	
		</div>
		
	</div>
	<!-- fine secondo tab-->
	
	<!-- terzo tab-->
	<div style="display:none" id="tabAlert3" class="divtabellacont">
		<div class="row-fluid">
			<div class="span7">	
				<span class="impRispTxtTop"><strong>Imposta trasferimento periodico verso Risparmio Ben Fatto</strong><br><br>Sul conto &egrave; prevista una soglia minima di 250 &euro; non eliminabile. Puoi scegliere un importo pi&ugrave; alto e/o aggiungere una soglia massima. Ogni volta che il tuo conto raggiunge l'importo delle soglie impostate, avverr&agrave; automaticamente il trasferimento.</span>									
				<br><br>
				<div class="formGeneric">
					<form>
						<div class="row-fluid">
							<div class="span4">
								<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Soglia minima</label>
								<div class="row-fluid">
									<div class="span10"><input type="text" name="" id="" class="withIco"></div>
									<div class="span1"><a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente scende sotto la soglia minima, sar&agrave; effettuato un trasferimento da Risparmio Ben Fatto al conto."><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
									<div class="span1">&nbsp;</div>
								</div>	
							</div>								
							<div class="span4">
								<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Soglia massima</label>
								<div class="row-fluid">
									<div class="span10"><input type="text" name="" id="" class="withIco"></div>
									<div class="span1"><a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente supera la soglia massima, sar&agrave; effettuato un trasferimento dal conto a Risparmio Ben Fatto."><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
									<div class="span1">&nbsp;</div>
								</div>	
							</div>
							<div class="span4 spButtonAlignIco">
								<br><a class="spButton spGreen1
" href="#"><span>trasferisci</span></a>
							</div>
							<br>
						</div>
					</form>
				</div>
			</div>
			<div class="span5"><img id="imgAnimTr" src="/img/ret/img_animaz_evo_01.gif" /></div>			
		</div>	
	</div>
	<!-- fine terzo tab-->

	
	<br class="clear">
	<br><br>
</div>


