<div id="contentRia5" class="tab-content tab-content-on contentRia" style="display:none;">
	<p>Trasferisci i soldi tra conto corrente e Risparmio Ben Fatto, il tuo salvadanaio.</p>
	<p>Scegli il tipo di trasferimento che vuoi fare.</p><br/>
	<div class="tabContainer2 evoluto">
		<div class="row">
			<div class="col-xs-4">
				<div id="tabTrasf5" class="tabRiaOn">
					<div class="tabRiaCont" id="caric9"> <input type="radio">singolo</div>
				 </div>
			</div>
			<div class="col-xs-4 txtAlCenter">	
				<div id="tabTrasf6" class="tabRia">
					<div class="tabRiaCont" id="caric10"><input type="radio">periodico</div>
				 </div>
			</div>
			<div class="col-xs-4">	 
				 <div id="tabTrasf7" class="tabRia flRight">
					<div class="tabRiaCont" id="caric11"><input type="radio">a soglia</div>
				 </div>
			</div>
			<div class="clear"></div>
		</div>
    </div>
	<div id="lineTrasf">&nbsp;</div>
	<div class="contentRia2lvlWrapper">	
		<div id="contentTrasf5" class="contentRia2lvl">
			<p class="small">Puoi trasferire, in <strong>tempo reale</strong>, l'importo che desideri dal conto corrente a Risparmio Ben Fatto o viceversa.</p>
		    <div class="row">
				<div class="col-xs-6">
					<div id="boxTrasfSingEvo" class="boxWhiteOut">
						<div class="contOverflow2">
							<div class="wrapTrasferisci">
								<div id="boxTrasfSingCCEvo"><br>
									<div class="tit">Trasferisci verso Risparmio Ben Fatto</div>
									<!--<span class="impRispTxtTop">Disponibilit&agrave; <a data-tooltip="L'importo che puoi versare su Ben Fatto &egrave; calcolato sottraendo al tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenze se le hai sottoscrtte, l'eventuale importo gi&agrave; versato su Ben Fatto e la soglia minima di conto." id="massimoImpCCEvoLink" href="javascript:;"></a>&nbsp;<span class="valuta"></span>
									</span>-->
									<span class="impRispTxtTop">Disponibilit&agrave; per il trasferimento <span class="txthelp" data-tooltip="La disponibilit&agrave; per il trasferimento &egrave; calcolata sottraendo dal tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenza, l'importo gi&agrave; versato su Risparmio Ben Fatto e la soglia minima di conto corrente impostata."><span id="massimoImpCCEvoLink"></span>&nbsp;<span class="valuta"></span></span></span>
									<br>
									<div class="formGeneric">
										<div class="row noMargbottom">
											<div class="col-xs-6">
												<input id="importoCCEvoVersamenti" type="text" class="impRisp" data-tooltip="L'importo del tuo Risparmio Ben Fatto pu&ograve; essere al massimo di 5.000,00 &euro;">
											</div>
											<div class="col-xs-6">
												<a class="spButton backgroundBank flLeft" id="aggiungiCCEvoVersamenti">trasferisci</a>
											</div>
										</div>
									</div>
								</div>
								
								<!--esito negativo-->
								<div id="boxTrasfSingCCEvoEsiNega" class="BoxRiaEsi" style="display:none">
									<div class="boxesito negativo withTitle">
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
									<div class="boxesito positivo withTitle">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<strong>Trasferimento eseguito correttamente</strong><br>
												<span>Importo <strong id="importoDaVersareSingCCEvo"></strong></span><br/>
												<span>Data di accredito <strong id="dataSingCCEvo"></strong></span>
												<a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
											</div>
										</div>
									</div>												
								</div>
							</div>
						</div>
						
						<p style="visibility:hidden" id="diventaCCEvoTrspan" class="saldoEvi">Risparmio Ben Fatto diventa <strong id="diventaCCEvoTr"></strong>&nbsp;<span class="valuta"></span></p>
						<div class="clear"></div>
						
						<div class="contOverflow2">
							<div class="wrapTrasferisci">
								<div id="boxTrasfSingEvoCC_old"><br>
									<div class="tit">Trasferisci da Risparmio Ben Fatto</div>		
									<span class="impRispTxtTop">Disponibilit&agrave; per il trasferimento 
									<a id="massimoImpEvoCCLink" href="javascript:;"><span id="massimoImpEvoCCImp"></span>&nbsp;<span class="valuta"></span></span></a>	
									<br>
									<div class="formGeneric">
										<div class="row noMargbottom">
											<div class="col-xs-6">
												<input type="text" data-error="" class="impRisp" id="importoEvoCCVersamenti_old">
											</div>
											<div class="col-xs-6">
												<a class="spButton backgroundBank flLeft" id="aggiungiEvoCCVersamenti_old">trasferisci</a>
											</div>
										</div>
									</div>
								</div>
								
								<!--esito negativo-->
								<div id="boxTrasfSingEvoCCEsiNega_old" class="BoxRiaEsi" style="display:none">
									<div class="boxesito negativo withTitle">
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
								<div id="boxTrasfSingEvoCCEsiPosi_old" class="BoxRiaEsi" style="display:none">
									<div class="boxesito positivo withTitle">
										<div class="BoxRiaTxTNeg">
											<span class="BoxRiaTxT">
												Trasferisci da Risparmio Ben Fatto
											</span>
										</div>
										<div class="middle"><span class="imgCont"></span>
											<div class="text">
												<strong>Trasferimento eseguito correttamente</strong><br>
												<span>Importo <strong id="importoDaVersareSingEvoCC_old"></strong></span><br/>
												<span>Data di accredito <strong id="dataSingEvoCC_old"></strong></span>
												<a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
											</div>
										</div>
									</div>												
								</div>
							</div>
						</div>
						
						<p style="visibility:hidden" id="diventaEvoCCTrspan" class="saldoEvi">Risparmio Ben Fatto diventa <strong id="diventaEvoCCTr"></strong>&nbsp;<span class="valuta"></span></p>
						<div class="clear"></div>
					
					</div>
				</div>
				<div id="imgAnimTrWrap" class="col-xs-6"><img id="imgAnimTr" src="/img/ret/img_animaz_evo_01.gif" /></div>
			</div>
		</div>
		<div id="contentTrasf6" class="contentRia2lvl">
			<div class="trasferimentiRicorrenti"> <!--id="contentTrasfRicorr3"-->
				<div id="divTrasfRicEvo" class="contOverflow" style="display:none">
					<a id="toggleTrasfRicEvo" href="#" class="saldoEvi colorBank">Vedi trasferimenti periodici impostati<br></a>
					<table id="tabellaTrasfRicEvo" class="tab17 tab17nob totale" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th class="uno">Importo</th>
								<th>Frequenza</th>
								<th>Attivo dal</th>
								<th>Scadenza</th>
								<th class="ultimo">Annulla</th>
							</tr>
						</thead>
						<tbody id="bodyTableTSEvo"></tbody>
					</table>
				</div>
				<div id="boxEliTrasfRicEvoEsi" class="contOverflow" style="display:none">
					<!--esito negativo-->
					<div id="boxEliTrasfRicEvoEsiNega" style="display:none">
						<div class="boxesito negativo">
							<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<span class="msg"></span><br>
									<a href="javascript:;" class="chiudiEliTrasfRicEvo flRight">chiudi</a>
								</div>
							</div>
						</div>
					</div>
					<!--esito positivo-->
					<div id="boxEliTrasfRicEvoEsiPosi" style="display:none">
						<div class="boxesito positivo">
							<div class="middle">
								<span class="imgCont"></span>
								<div class="text">
									<strong>Trasferimento periodico annullato</strong><br>
									<br>
									<div class="row">
										<div class="col-xs-5">
											<span>Importo <strong id="importoEliRicEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-4">
											<span>Frequenza <strong id="frequenzaEliRicEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-3">&nbsp;</div>
									</div>
									<div class="row">
										<div class="col-xs-5">
											<span>A partire da <strong id="aPartireDaEliRicEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-4">
											<span>Scadenza <strong id="scadenzaEliRicEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-3">
											<a href="javascript:;" class="chiudiEliTrasfRicEvo flRight">nuovo trasferimento</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="nuovoTrasferimentiRicorrenti" id="contentTrasfRicorr4">
				<?php virtual("/librerie/include/commons/ria_old/part/contentRia5_tab2.php") ?>
            </div>				
		</div>
		<div id="contentTrasf7" class="contentRia2lvl">
			<div id="impostaSoglieEsi" class="row" style="display:none">
				<div class="col-xs-12">
					<!--esito negativo-->
					<div id="boxSoglieEvoEsiNega" style="display:none">
						<div class="boxesito negativo">
							<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<span class="msg"></span><br>
									<a href="javascript:;" class="chiudiSoglieEvo flRight">chiudi</a>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
					<!--esito positivo-->
					<div id="boxSoglieEvoEsiPosi" style="display:none">
						<div class="boxesito positivo">
							<div class="middle">
								<span class="imgCont"></span>
								<div class="text">
									<strong>Soglie impostate correttamente</strong><br>
									<br>
									<div class="row">
										<div class="col-xs-5">
											<span>Soglia minima <strong id="sogliaMinEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-5">
											<span>Soglia massima <strong id="sogliaMaxEvoEsi"></strong></span><br>
										</div>
										<div class="col-xs-2">
											<a href="javascript:;" class="chiudiSoglieEvo flRight">modifica</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="impostaSoglieContent">
				<div id="" class="row">
					<div class="col-xs-12">
						<strong>Imposta soglia sul conto corrente</strong><br><br>
					</div>
				</div>
				<div id="" class="row">
					<div class="col-xs-6">
						<!--span class="impRispTxtTop"-->						
							<ul>
								<li>Puoi impostare, sul conto corrente, una soglia minima e/o una massima. Al raggiungimento di una delle due soglie Risparmio Ben Fatto sar&agrave; automaticamente alimentato o il tuo conto corrente ripianato.</li>
								<li>La soglia minima non pu&ograve; essere inferiore a 250 &euro;.</li>
							</ul>
						<!--/span-->									
						<br>
						<div class="formGeneric">
							<div id="soglieEvoForm">
								<div class="row">
									<div class="col-xs-4">
										<label for="sogliaMinEvo" class="nomefield">Soglia minima</label>
										<div class="row">
											<div class="col-xs-11"><input type="text" name="" id="sogliaMinEvo" class="withIco"></div>
											<div class="col-xs-1"><a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente scende sotto la soglia minima, sar&agrave; effettuato un trasferimento da Risparmio Ben Fatto al conto."><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
										</div>	
									</div>								
									<div class="col-xs-5">
										<label for="sogliaMaxEvo" class="nomefield">Soglia massima</label>
										<div class="row">
											<div class="col-xs-9"><input type="text" name="" id="sogliaMaxEvo" class="withIco"></div>
											<div class="col-xs-1"><a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente supera la soglia massima, sar&agrave; effettuato un trasferimento dal conto a Risparmio Ben Fatto."><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
										</div>	
									</div>
									<div class="col-xs-3">
										<br><a class="spButton backgroundBank flLeft" id="impostaSoglieEvo">salva</a>
									</div>
									<br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6"><img id="imgAnimSoglie" src="/img/ret/img_animaz_evo_01.gif"></div>
				</div>
			</div>
		</div>
	</div>
</div>