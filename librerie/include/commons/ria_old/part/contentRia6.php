<div id="contentRia6" class="tab-content tab-content-on contentRia closed rbf" style="display:none;">
	<br>
	<!-- /la tua situazione -->
	<!-- risparmio-->
	<div id="" class="formGeneric">
		<div class="row">
			<div class="col-xs-12">
				<div id="statoObiettivo" class="BoxTrasferisci">
					<div id="obiettivoTitle" class="BoxRiaTxTNegLeft">
						<span class="BoxRiaTxT">RISPARMIO LIBERO</span>
					</div>
					<form name="DATI" action="" id="DATI">
						<input type="hidden" name="numeroConto" id="idNumeroConto" value="" />
						<input type="hidden" name="importo" id="importo" value="" />
						<input type="hidden" name="fromCC" id="fromCC" value=""/>
						<input type="hidden" name="tipoDispositivo" value="3" />
						<div id="boxRisp" class="clearfix BoxRiaRealizza">
							<div class="row">
								<!--
								<div class="col-xs-6">
									<div class="imgWrap">
										<img class="obiettivoImg" src="/img/ret/str_bg_risplib.jpg" width="240" height="100">
									</div>
								</div>
								-->
								<div class="col-xs-12">
									<div id="impRispLibBox">
										Hai gi&agrave; risparmiato: <span id="impRispLib" class="obiettivoState"></span> <span class="valuta"></span>.
									</div>
									<!--
									<div class="fieldbox">
										<label class="obiettivoDateLabel nomefield"></label>
										<span class="obiettivoDate output"></span>
									</div>
									-->
								</div>
							</div>
							<br><br>
							<?php if ($permettiDispositive) { ?>
							<div class="row">
								<div class="tabContainer2 evoluto">
									<div class="row">
										<div class="col-xs-2">
											<div id="tabTrasfAlim" class="tabRiaOn">
												<div class="tabRiaCont" id="alimenta">alimenta</div>
											 </div>
										</div>
										<div class="col-xs-2">	
											<div id="tabTrasfUtiliz" class="tabRia">
												<div class="tabRiaCont" id="utilizza">utilizza</div>
											 </div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div id="lineTrasf">&nbsp;</div>
								<div id="tabCont1" class="contentRia2lvlWrapper">	
									<div id="" class="contentRia2lvl">
										<div class="contOverflow" style="overflow: visible;">
												<div class="wrapTrasferisci">
													<div id="impostaTrasf">
														<p class="output">Trasferisci i soldi dal conto corrente al Risparmio Libero. Scegli il tipo di trasferimento che vuoi effettuare.<br><br></p>
														
														<!-- ________ trasferimento singolo ________ -->
														<div class="row">
															<div class="col-xs-4">
																<!-- select tipo trasferimento -->
																<label for="selectTrasferimento" class="nomefield">Tipo di trasferimento</label>
																<select id="selectTrasferimento">
																	<option value="SIN">Singolo</option>
																	<option value="PER">Periodico</option>
																	<option value="SGA">A soglia</option>
																</select>
															</div>
															<div class="col-xs-8">
																<div id="sin" style="display: inline-block;" class="row">
																	<div id="boxTransfEvo" class="row">
																		<div class="col-xs-4">
																			<label class="nomefield">Disponibilit&agrave;</label>
																			<span data-tooltip="La disponibilit&agrave; per il trasferimento &egrave; calcolata sottraendo dal tuo saldo disponibile l'eventuale fido, le linee vincolate a scadenza, l'importo gi&agrave; versato su Risparmio Ben Fatto e la soglia minima di conto corrente impostata." class="txthelp"><span id="massimoImpCCEvoLink">9.021,95</span>&nbsp;<span class="valuta"></span></span>															
																		</div>
																		<div class="col-xs-4">
																			<label for="importoCCEvoVersamenti" class="nomefield">Importo</label>
																			<input id="importoCCEvoVersamenti" class="impRisp" maxlength="10" type="text" data-tooltip="L'importo massimo che puoi versare su Ben Fatto &egrave; pari a 5.000 &euro;">
																			<span class="valuta"></span>
																		</div>
																		<div class="col-xs-4 spButtonAlign tuaSitRight">
																			<label class="nomefield">&nbsp;</label>
																			<a id="aggiungiCCEvoRIA" class="spButton spGreen1" href="javascript:;"><span>trasferisci</span></a>
																		</div>
																	</div>
																</div>
									
																<!-- Mostra lista trasf periodici -->
																<div id="buttonListaPeriodico" style="display: none;">
																	<label class="nomefield">&nbsp;</label>
																	<a href="javascript:;" id="show_hide" class="colorBank">Vedi tutti i trasferimenti periodici gi&agrave; impostati</a>	
																</div>
															</div>							
														</div>
														
														<!-- ________ trasferimento periodico ________ -->
														<div id="per" style="display: none;">
															<br class="clear">
																					
															<!-- END LISTA TRASF PERIODICI -->
																			
															<div class="formGeneric" id="periodico" style="">
																<div class="nuovoTrasBox" id="boxTrasfRicVsEvo">
																	<div class="row">
																		<div class="col-xs-3">
																			<label class="nomefield">Frequenza</label>
																			<select name="frequenza" id="frequenza">
																				<option value="">-- seleziona --</option>
																				<option value="S">Settimanale</option>
																				<option value="D">Ogni 10 giorni</option>
																				<option value="M">Mensile</option>
																				<option value="T">Trimestrale</option>
																			</select>
																		</div>
																		<div class="col-xs-3">
																			<label class="nomefield" for="aPartireDaTREvof" id="labelApartireDaTREvo" value="gg/mm/aaaa">A partire da</label>
																			<input type="text" name="dataPartenza" id="aPartireDaTREvof" placeholder="gg/mm/aaaa" data-error="" class="withIco">
																		</div>
																		<div class="col-xs-6">
																			<label class="nomefield" id="scadenzaPeriodicoLabel">Scadenza</label>
																			<div id="scadenzeLabeleRadio">
																				<div class="row">
																					<div class="col-xs-12 margScadenza">
																						<label><input id="revocaEvo" value="R" class="radio" type="radio" name="scadenza" onclick="javascript:manageScadenza('0');">su richiesta</label>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-xs-12">
																						<label id="labelNumeroTREvo"></label>
																						<input id="dopoNEvo" value="S" class="radio margInpAuto" type="radio" name="scadenza" onclick="javascript:manageScadenza('1');">												
																						in automatico, dopo 
																						<input name="numeroTrasferimenti" id="numeroTrasferimenti" class="numero" size="2" maxlength="2" type="text"> 
																						trasferimenti
																					</div>
																				</div>
																			</div>
																			<span class="scadenza">
																				<span id="scadenzaTRRvofLAB"></span>
																			</span>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-2">
																			<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Importo</label>
																			<input name="importoPeriodico" id="importoPeriodico" type="text" maxlength="10">
																		</div>
																		<div class="col-xs-1">
																			<label class="nomefield">&nbsp;</label>
																			<span class="valuta"></span>
																		</div>
																		<div class="col-xs-9 tuaSitRight">
																			<label class="nomefield">&nbsp;</label>
																			<a id="ImpostaTrasRicorrenteEvo" class="spButton spGreen1" href="javascript:;" onclick="transfPeriodico(true);"><span>conferma</span></a>
																		</div>
																	</div>
																	<div class="clear"></div><br>
																</div>	
															</div>
													
															
															<!-- box warning superato numero max trasf periodici -->
															<div id="boxAttenzionePeriodico" style="display: none;">
																<div class="boxesito attenzione" id="boxEsitoPeriodico">
																	<div class="middle"><span class="imgCont"></span>
																		<div class="text">
																			<strong>Hai gi&agrave; raggiunto il numero massimo di trasferimenti periodici (5).</strong><br>								
																		</div>
																	</div>
																</div>	
															</div>
														</div>
														
														<!-- ________ trasferimento a soglia ________ -->
														<div id="sga" style="display: none;">
															<div class="row">
																<div class="col-xs-12">	
																	<div id="boxImpostaSoglia">
																		<span class="impRispTxtTop">
																			 <ul>
																				<li>Puoi impostare, sul conto corrente, una soglia minima e/o una massima. Al
																					raggiungimento di una delle soglie, il Risparmio Libero sar&agrave; automaticamente
																					alimentato o il tuo conto corrente ripianato.</li>
																				<li>La <strong>soglia minima</strong> non pu&ograve; essere inferiore a <strong>250 &euro;.</strong></li>
																				<li>Impostando contemporaneamente soglia massima e minima sarai sicuro che il saldo
																					disponibile del conto corrente rester&agrave; sempre all'interno delle soglie impostate.</li>
																			</ul>
																		</span><br><br>
																		<div class="formGeneric">
																			<div class="row">
																				<div class="col-xs-3">
																					<label for="importoTREvof" id="labelImportoSogliaMinima" class="nomefield">Soglia minima</label>
																					<div class="row">
																						<div class="col-xs-9"><input name="sogliaMinima" id="impSogliaMinima" class="withIco" maxlength="10" type="text"></div>
																						<div class="col-xs-2"><span class="valuta"></span></div>
																						<div class="col-xs-1"><a class="flRight" title="" data-tooltip="Se il saldo del conto corrente scende sotto la soglia minima, sar&agrave; effettuato un trasferimento dal Risparmio Libero al conto." href="javascript:;"><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
																					</div>	
																				</div>								
																				<div class="col-xs-3">
																					<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Soglia massima</label>
																					<div class="row">
																						<div class="col-xs-9"><input name="sogliaMassima" id="impSogliaMassima" class="withIco" maxlength="10" type="text"></div>
																						<div class="col-xs-2"><span class="valuta"></span></div>
																						<div class="col-xs-1"><a class="flRight" title="" data-tooltip="Se il saldo del conto corrente supera la soglia massima, sar&agrave; effettuato un trasferimento dal conto al Risparmio Libero." href="javascript:;"><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
																					</div>	
																				</div>
																				<div class="col-xs-6 spButtonAlignIco tuaSitRight">
																					<br><a class="spButton spGreen1" href="javascript:impostaSoglia();"><span>conferma</span></a>
																				</div>
																				<br>
																			</div>
																		</div>										
																	</div>
																</div><!-- END ESITO SOGLIA -->
															</div>						
														</div>
													</div>
													
													<!-- Lista trasferimenti periodici -->
													<div id="listaPeriodico" style="display: none;">
														<p>Hai attivato i seguenti trasferimenti periodici. <a href="javascript:;" class="colorBank" onclick="$(&quot;#listaPeriodico&quot;).hide();$(&quot;#impostaTrasf&quot;).show();">Imposta nuovo</a><br><br></p>
														<table cellspacing="0" cellpadding="0" class="tab17 tab17nob" id="listaPeriodicoTable">
															<tbody><tr class="color"> 
																<th class="uno" style="width: 80px;">Importo</th>
																<th style="width: 80px;">Frequenza</th>
																<th style="width: 80px;">Attivo dal</th>
																<th style="width: 80px;">Scadenza</th>
																<th class="ultimo" style="width: 20px;">Annulla</th>
															</tr>						
														</tbody></table>
													</div>
													
													<!--esito su evo negativo-->
													<div id="boxTrasfSingVsEvoEsiNega" class="BoxRiaEsi" style="display:none">
														<div class="boxesito negativo">
															<div class="middle"><span class="imgCont"></span>
																<div class="text" id="esitoTextTransfEvo">
																	
																</div>
															</div>
															<div class="row formGeneric">
																<div class="col-xs-11">
																	<span>
																		<a id="btnTrasfSingVsEvoEsiNega" href="javascript:;" class="flRight">chiudi</a>
																	</span>
																</div>
															</div>
														</div>												
													</div>
													<!--esito su evo positivo-->
													<div id="boxTrasfSingVsEvoEsiPosi" class="BoxRiaEsi" style="display:none">
														<div class="boxesito positivo">
															<div class="middle"><span class="imgCont"></span>											
																<div class="text">
																	<strong>Trasferimento eseguito correttamente</strong><br>
																	<span>importo <strong id="labelImportoTransfEvo"></strong></span><br>													
																	<span>Data di accredito <strong id="labelDataAccreditoTransfEvo"></strong></span>													
																	<a id="btnTrasfSingVsEvoEsiPosi" class="flRight" href="javascript:;">nuovo</a>												
																</div>
															</div>
														</div>												
													</div>
													
													<!-- esito periodico positivo-->
													<div id="boxTrasfRicVsEvoEsiPosi" class="BoxRiaEsi" style="display: none;">
														<div class="boxesito positivo">
															<div class="middle"><span class="imgCont"></span>
																<div class="text">
																	<strong>Trasferimento periodico impostato correttamente.</strong><br>
																	<br>
																	<div class="row">
																		<div class="col-xs-5">
																			<span>Importo <strong id="importoPeriodicoEsito">- - - &euro;</strong></span><br>
																		</div>
																		<div class="col-xs-5">
																			<span>Frequenza <strong id="frequenzaPeriodicoEsito"></strong></span><br>
																		</div>
																		<div class="col-xs-2">
																		&nbsp;
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5">
																			<span>Data primo trasferimento <strong id="dataPeriodicoEsito"></strong></span><br>
																		</div>
																		<div class="col-xs-5">
																			<span>Scadenza <strong id="scadenzaPeriodicoEsito"></strong></span><br>
																		</div>
																		<div class="col-xs-2">
																			<a href="javascript:nuovaScadenza();resetForm();aggiornaSaldo();" class="nuovoEvo flRight colorBank">nuovo</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>												
													</div>
													<!-- esito periodico negativo-->
													<div id="boxTrasfRicVsEvoEsiNega" class="BoxRiaEsi" style="display: none; top: 214px;">
														<div class="boxesito negativo">
															<div class="middle"><span class="imgCont"></span>
																<strong>Impostazione trasferimento periodico fallita </strong><br>
																<div id="esitoTextPeriodico" class="text">
																	
																</div>
															</div>
															<div class="row formGeneric">
																<div class="col-xs-11">
																	<span>
																		<a href="javascript:nuovaScadenza();resetForm();aggiornaSaldo();" class="nuovoEvo flRight colorBank">chiudi</a>
																	</span>
																	<br class="clear"><br>
																</div>
															</div>
														</div>												
													</div>
																
													<!-- esito positivo soglia -->
													<div id="esitoImpostaSogliaPosi" class="BoxRiaEsi" style="display: none;">
														<div class="boxesito positivo" id="boxEsitoImpostaSoglia">
															<div class="middle"><span class="imgCont"></span>
																<div class="text">
																	<div class="row formGeneric">
																		<div class="col-xs-12">
																			<label class="nomefield">SOGLIE IMPOSTATE CORRETTAMENTE</label>
																			<ul class="lista">
																				<li>A conferma dell'operazione ti sar&agrave; inviata una <strong>mail</strong>.</li>
																				<li>Quando il <strong>saldo</strong> del conto corrente <strong>superer&agrave; la soglia massima</strong> impostata, l'<strong>eccedenza</strong> sar&agrave; <strong>trasferita</strong> automaticamente <strong>sul
																					Risparmio Libero</strong>. Quando il <strong>saldo</strong> del conto corrente <strong>scender&agrave; sotto la soglia minima</strong> impostata, la <strong>differenza</strong> sar&agrave; trasferita dal
																					Risparmio Libero al conto, portando il saldo <strong>all'interno delle soglie impostate</strong>.</li>
																			</ul>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-xs-5">
																			<span>Soglia minima <strong id="importoSogliaMinima">1.000,00 &euro;</strong></span><br>
																		</div>
																		<div class="col-xs-5">
																			<span>Soglia massima <strong id="importoSogliaMassima">5.000,00 &euro;</strong></span><br>
																		</div>
																		<div class="col-xs-2">
																			<a href="javascript:nuovaSoglia();resetForm();aggiornaSaldo();" class="flRight">modifica</a>
																			<div class="clear"></div>
																		</div>
																	</div>										
																</div>
															</div>
														</div>							
													</div>
													<!-- esito negativo soglia -->
													<div id="esitoImpostaSogliaNega" class="BoxRiaEsi" style="display: none; top: 214px;">
														<div class="boxesito negativo">
															<div class="middle"><span class="imgCont"></span>
																<div class="text" id="esitoTextImpostaSoglia">
																	
																</div>
															</div>
															<div class="row formGeneric">
																<div class="col-xs-11">
																	<span>
																		<a class="nuovoEvo flRight colorBank" href="javascript:nuovaSoglia();resetForm();aggiornaSaldo();">chiudi</a>
																	</span>
																</div>
															</div><br><br>
														</div>												
													</div>

													<!-- esito positivo cancellazione periodico -->
													<div id="boxDelTrasfPeriodicoEsiPosi" class="BoxRiaEsi" style="display:none">
														<div class="boxesito positivo">
															<div class="middle"><span class="imgCont"></span>
																<div class="text">
																	<div class="row formGeneric">
																		<div class="col-xs-8">
																			<label class="nomefield">Trasferimento periodico annullato</label>
																		</div>
																	</div>
																	<br><br>
																	<div class="row">
																		<div class="col-xs-5">
																			<span>Importo <strong id="impAnnulloPeriodico"></strong></span><br>
																		</div>
																		<div class="col-xs-5">
																			<span>Frequenza <strong id="frqAnnulloPeriodico"></strong></span><br>
																		</div>
																		<div class="col-xs-2">
																		&nbsp;
																		</div>
																	</div> 
																	<div class="row">
																		<div class="col-xs-5">
																			<span>A partire da <strong id="datAnnulloPeriodico"></strong></span><br>
																		</div>
																		<div class="col-xs-5">
																			<span>Scadenza <strong id="scaAnnulloPeriodico">su richiesta</strong></span><br>
																		</div>
																		<div class="col-xs-2">
																			<a href="javascript:closeBoxDelTrasferimentoPeriodico();resetForm();aggiornaSaldo();" class="nuovoEvo&quot;" ftright="" colorbank"="">chiudi</a>
																		</div>
																	</div>								
																</div>
															</div>
														</div>
													</div>
													<!-- esito negativo cancellazione periodico -->
													<div id="boxDelTrasfPeriodicoEsiNega" class="BoxRiaEsi" style="display:none">
														<div class="boxesito negativo">
															<div class="middle"><span class="imgCont"></span>
																<div class="text" id="esitoTextDelTrasfPeriodico">
																	
																</div>
															</div>
															<div class="row formGeneric">
																<div class="col-xs-11">
																	<span>
																		<a class="nuovoEvo flRight colorBank" href="javascript:closeBoxDelTrasferimentoPeriodico();resetForm();aggiornaSaldo();">chiudi</a>
																	</span>
																</div>
															</div><br><br>
														</div>												
													</div>
												</div>
											</div>
									</div>
								</div>
								<div id="tabCont2" class="contentRia2lvlWrapper" style="display:none">	
									<div id="" class="contentRia2lvl contOverflow">
										<div class="wrapTrasferisci">
											<div id="utlizzaRisp" class="obiettivoRaggiunto">													
												<div class="text boxTrasfEsiEvo">
													<p class="small">
														<img src="/img/ret/ico2inf_ob_raggiunto.gif" alt="Raggiunto" class="imgRaggiunto flRight" />
														<strong>Utilizza i tuoi risparmi per realizzare i tuoi desideri!</strong><br>
														<br>
														Il saldo presente su Risparmio Libero sar&agrave; trasferito sul conto corrente
														e l'importo sar&agrave; subito utilizzabile.<br>
														<br>
													</p>
													<div class="row  btnWrapper">
														<div class="col-xs-12">
															<a id="confRisp" class="spButton backgroundBank flRight">prosegui</a>
														</div>
													</div>
												</div>												
											</div>
											
											<div id="obiettivoRisp" class="obiettivoRealizza obiettivoEsi" style="display:none">
												<p class="small">
													<strong>Scegli come utilizzare i tuoi risparmi</strong><br>
													<br>
													<span class="realizzaText">
														Per farlo puoi scegliere di effettuare un bonifico o un giroconto, ricaricare la tua Carta Je@ns.</span>
												</p>
												<br>
												<div class="boxRealizzaWrapper">
													<div class="boxRealizza lnkRealizzaBonifico">
														<a href="#" title="Esegui bonifico">
															<img src="/img/ret/link_obt_bonifico.png" alt="Esegui bonifico"/>
														</a>
													</div>
													<div class="boxRealizza lnkRealizzaGiroconto">
														<a href="#" title="Esegui giroconto">
															<img src="/img/ret/link_obt_giroconto.png" alt="Esegui giroconto"/>
														</a>
													</div>
													<div class="boxRealizza lnkRealizzaCarta">
														<a href="#" title="Ricarica Carta Je@ns">
															<img src="/img/ret/link_obt_ricarica.png" alt="Ricarica Carta Je@ns"/>
														</a>
													</div>
													<div class="clear"></div>
												</div>
											</div>
												
											<!-- esito negativo-->
											<div id="boxRispLibEsiNega" class="BoxRiaEsi" style="display:none">
												<div class="boxesito negativo">
													<div class="middle"><span class="imgCont"></span>
														<div class="text">
															<span class="msg"></span><br>
															<a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
														</div>
													</div>
												</div>												
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<?php } else { ?>
							<div class="BoxTrasferisci" id="">
								<p class="left">Per <strong>alimentare</strong> o <strong>utilizzare</strong> il tuo Risparmio Libero accedi con il profilo &quot;<strong>Consultare e Disporre</strong>&quot;.</p>													
							</div>
							<?php } ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<br>
	
	<!-- crea obiettivo -->
	<div id="creaObiettivoWrap" class="formGeneric">
		<div class="row">
			<div class="col-xs-12">
				<div id="creaObiettivo" class="BoxTrasferisci">
					<div class="BoxRiaTxTNegLeft">
						<span class="BoxRiaTxT">OBIETTIVI ATTIVI</span>
					</div>
					<br>
					<div class="BoxRiaRealizza">
						<div class="row">
							<div class="col-xs-12">
								<span id="obiettivoIntro1"></span> <a id="obiettivoBtn">Crea un nuovo obiettivo</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- /risparmio-->
	<!-- gestisci obiettivo -->
	<div id="statoObiettivoWrap" class="formGeneric">
		<div class="row">
			<div class="col-xs-12">
				<div id="statoObiettivo" class="BoxTrasferisci">
					<div id="obiettivoTitle" class="BoxRiaTxTNegLeft">
						<span class="BoxRiaTxT">OBIETTIVI ATTIVI</span>
						<div class="obiettivobarDx">
							<span id="obiettivobarBx"></span>
							<a href="#" id="addLink" title="Aggiungi"></a>
						</div>
					</div>
					<div id="obWrapper" class="clearfix">
						<div class="obSlide contOverflow">
							<div class="wrapTrasferisci">
								<div class="BoxRiaRealizza">
									<h4 class="obiettivoName"></h4>
									<div class="row">
										<div class="col-xs-10">
											<ul class="bfConsole">
												<li class="obiettivoType"></li>
												<li class="obiettivoCreator creatore" title="Creatore obiettivo"></li>
												<li class="obiettivoImp target" title="Importo"></li>
												<li class="obiettivoDate scadenza" title="Da raggiungere entro il"></li>
												<li class="obiettivoState" title="Stato"></li>
											</ul>
										</div>
										<div class="col-xs-2 txtAlRight">
											<a class="obiettivoLnk" href="#" title="Modifica/gestisci">dettagli</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="imgWrap imgBig">
												<div class="obDesc"><p></p></div>
												<img class="obiettivoImg" src="" width="526" height="201">
											</div>
										</div>
									</div>
									<br>
									<br>
									<div class="row">
										<div class="col-xs-12">
											<div class="progressBar inited" data-progress="5"><div class="pbBar" style="width: 5%;"></div><span class="pbIndex">5%</span></div>
										</div>
									</div>
								</div>
								<div class="contOverflow overflowConsole">
									<div class="wrapTrasferisci alimentaObiettivoBox">
										<div class="BoxRiaRealizza boxConsole">
											<div class="row margBottomLarge">
												<div class="col-xs-12 bfProgressConsole">
													<div class="row obRispVoi">
														<div class="col-xs-4"><span class="consoleLabel lev1">Avete raccolto</span></div>
														<div class="col-xs-3 txtAlRight"><span class="consoleVal"></span>&nbsp;<span class="valuta"></span></div>
													</div>
													<div class="row obMonetizVoi">
														<div class="col-xs-4"><span class="consoleLabel lev2">Effettivi</span></div>
														<div class="col-xs-3 txtAlRight"><span class="consoleVal"></span>&nbsp;<span class="valuta"></span></div>
													</div>
													<div class="row obRispTu">
														<div class="col-xs-4"><span class="consoleLabel">Hai risparmiato</span></div>
														<div class="col-xs-3 txtAlRight"><span class="consoleVal"></span>&nbsp;<span class="valuta"></span></div>
														<div class="col-xs-5 wrapVersaObiettivo">
															<a class="btnVersaObiettivo spButton backgroundBank flRight" href="javascript:;"><span>versa</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="alimentaObiettivoWrap BoxRiaRealizza">
											<div class="">
												<div class="alimentaObiettivo">
													<div class="row formGeneric">
														<div class="col-xs-4">
															<label class="nomefield">Alimenta il tuo obiettivo</label>		
														</div>
														<div class="col-xs-3">
															<label class="nomefield">Disponibilit&agrave;</label>		
														</div>
														<div class="col-xs-5">
															<label class="nomefield">Importo</label>	
														</div>
													</div>
													<div class="row formGeneric">
														<div class="col-xs-4">
															<select class="selectTrasfFrom">
																<option value="cc" selected="selected">dal conto corrente</option>
																<option value="rbf">da Risparmio Libero</option>
															</select>			
														</div>
														<div class="col-xs-3 importoTrasfOb">
															<span class="txthelp" data-tooltip="yyy">
																<span class="importoTrasfVal text"></span> <span class="valuta"></span>
															</span>
														</div>
														<div class="col-xs-2">
															<input class="importoTrasfObiettivo" type="text"/>
														</div>
														<div class="col-xs-1 importoTrasfOb">
															<span class="valuta"></span>
														</div>
														<div class="col-xs-2">
															<a class="btnTrasfObiettivo spButton backgroundBank flRight" href="javascript:;"><span>trasferisci</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="alimentaConsultareWrap BoxTrasferisci">
											Per <strong>effettuare trasferimenti</strong> e alimentare i tuoi obiettivi di risparmio accedi con il profilo <strong>&quot;Consultare e disporre&quot;</strong>.
										</div>
										<!-- esito negativo-->
										<div class="boxTrasfObiettivoEsiNega BoxRiaEsi" style="display:none">
											<div class="boxesito negativo">
												<div class="middle"><span class="imgCont"></span>
													<div class="text">
														<div class="row">
															<div class="col-xs-9">
																<span class="msg"><strong>Non &egrave; stato possibile eseguire il trasferimento.</strong></span><br>
															</div>
															<div class="col-xs-3">
																<a href="javascript:;" class="chiudi flRight">Riprova</a>
															</div>
														</div>
													</div>
												</div>
											</div>												
										</div>
										<!-- esito positivo-->
										<div class="boxTrasfObiettivoEsiPosi BoxRiaEsi" style="display:none">
											<div class="boxesito positivo">
												<div class="middle"><span class="imgCont"></span>
													<div class="text">
														<div class="row">
															<div class="col-xs-9">
																<strong>Il trasferimento &egrave; stato eseguito correttamente.</strong><br>
															</div>
															<div class="col-xs-3">
																<a href="javascript:;" class="chiudi flRight">nuovo</a>
															</div>
														</div>
													</div>
												</div>
											</div>												
										</div>
										<!-- esito positivo-->
										<div class="boxVersaObiettivo BoxRiaEsi" style="display:none">
											<div class="boxesito positivo">
												<div class="middle"><span class="imgCont"></span>
													<div class="text">
														<div class="row">
															<div class="col-xs-12">																
																<strong>Vuoi versare il tuo contributo e partecipare all'obiettivo del tuo amico?</strong>
																Cliccando su <strong>&laquo;conferma&raquo;</strong> l'importo sar&agrave; subito disponibile sul tuo
																<strong>conto corrente</strong>.
																Scegliendo <strong>&laquo;non ora&raquo;</strong> la somma sar&agrave; automaticamente trasferita su <strong>Risparmio Libero</strong>
																e non sar&agrave; più abbinata all'obiettivo.
																Al percorso Risparmio Ben Fatto &gt; Gestione &gt; Archivio potrai realizzare il tuo desiderio in un secondo momento.
																Alla stessa pagina puoi tenere sotto controllo l'andamento dell'obiettivo.
															</div>
														</div>
														<div class="row">
															<div class="col-xs-6">
																<a class="chiudi spButton backgroundBank flLeft" href="javascript:;"><span>non ora</span></a>
															</div>
															<div class="col-xs-6">
																<a class="btnVersaOK spButton backgroundBank flRight" href="javascript:;"><span>conferma</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>												
										</div>
									</div>
								</div>
								<div class="obiettivoMsgWrap boxesito attenzione" style="display:none;">
									<div class="middle"><span class="imgCont"></span>
										<div class="text obiettivoMsg"></div>
									</div>
								</div>												
								<div class="obiettivoRaggiunto obiettivoEsi BoxRiaEsi" style="display:none">
									<div class="boxesito positivo">
										<div class="middle">
											<span class="imgCont"></span>
											<div class="text boxTrasfEsiEvo">
												<p class="small">
													<img src="/img/ret/ico2inf_ob_raggiunto.gif" alt="Raggiunto" class="imgRaggiunto flRight" />
													<strong>Il tuo obiettivo &egrave; stato raggiunto.<br>
													Ben Fatto!<br>
													Realizza subito il tuo desiderio.</strong><br>
													<br>
													Cliccando su &quot;<strong>conferma</strong>&quot; l'importo sar&agrave; da subito utilizzabile
													sul tuo <strong>conto corrente</strong>, per i tuoi acquisti.<br>
													<br>
													Scegliendo &quot;<strong>non ora</strong>&quot; la somma rester&agrave; accantonata su
													Risparmio Ben Fatto, ma non sar&agrave; pi&ugrave; abbinata all'obiettivo.<br>
													<br>
													<strong>Potrai comunque realizzare il tuo desiderio in seguito, accedendo alla sezione
													degli obiettivi raggiunti</strong><br>
													<br>
												</p>
												<div class="row  btnWrapper">
													<div class="col-xs-6">
														<a class="spButton backgroundBank flLeft btnRealizzaDopo">non ora</a>
													</div>
													<div class="col-xs-6">
														<a class="spButton backgroundBank flRight btnRealizzaOra">conferma</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="obiettivoRealizza obiettivoEsi BoxRiaEsi" style="display:none">
									<div class="BoxTrasferisciInner boxesito">
										<p class="small">
											<strong>Scegli come realizzare il tuo obiettivo</strong></p>
											<br>
											<span class="realizzaText"></span>
										</p>
										<br>
										<div class="boxRealizzaWrapper">
											<div class="boxRealizza lnkRealizzaBonifico">
												<a href="#" title="Esegui bonifico">
													<img src="/img/ret/link_obt_bonifico.png" alt="Esegui bonifico"/>
												</a>
											</div>
											<div class="boxRealizza lnkRealizzaGiroconto">
												<a href="#" title="Esegui giroconto">
													<img src="/img/ret/link_obt_giroconto.png" alt="Esegui giroconto"/>
												</a>
											</div>
											<div class="boxRealizza lnkRealizzaCarta">
												<a href="#" title="Ricarica Carta Je@ns">
													<img src="/img/ret/link_obt_ricarica.png" alt="Ricarica Carta Je@ns"/>
												</a>
											</div>
										</div>
										<div class="row btnWrapper">
											<a class="spButton backgroundBank flRight btnDecidiDopo">decidi in seguito</a>
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
	<br>
	<!-- APP SCARICATA-->
	<div class="row">
		<div class="col-xs-12">
			<div class="BoxTrasferisci">
				<div class="BoxRiaTxTNegLeft"><span class="BoxRiaTxT">App BPM Ben Fatto</span></div>
				<div id="boxAppOK">
					<div class="row">
						<div class="col-xs-12">
							<p class="desc">L'app Ben Fatto &egrave; attiva sui seguenti dispositivi<br></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<table id="tableDevice" class="tab17 tab17nob totale" cellpadding="0" cellspacing="0" style="display: table;">
								<thead>
									<tr>
										<th><input id="allDeviceCb" type="checkbox" title="Seleziona tutti"></th>
										<th class="left">Device</th>
										<th class="left">Data attivazione</th>
										<th><i id="trashDevice" class="icon icon-trash" title="Elimina"></i></th>
									</tr>
								</thead>
								<tbody id="tbodyDevice"></tbody>
							</table>
						</div>
						<div class="col-xs-6">
							<div class="benfattocell"></div>
						</div>
					</div>
				</div>
				<!-- APP NON SCARICATA-->
				<div id="boxAppKO">
					<div class="row">
						<div class="col-xs-12">
							<p class="desc">
								Usa l'app <strong>BPM Ben Fatto</strong>!<br>
								Raggiungerai pi&ugrave; in fretta i tuoi obiettivi di risparmio.<br>
								<br>
								Se non l'hai ancora fatto, <strong>scaricala subito</strong>!<br></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 btnApp">
						   <a class="lnkAppApple" href="#"><img src="/wscmn/img/btn_apple_store_download.png" alt="Download on the App Store"/></a>
						   <a class="lnkAppAndroid" href="#"><img src="/wscmn/img/btn_android_store.png" alt="Android App on Google play"/></a>
						   <a class="lnkAppSamsung" href="#"><img src="/wscmn/img/btn_samsung_store.png" alt="Android App on Samsung Store"/></a>
						</div>
					</div>
				</div>
				<!--FINE CASO CONSULTARE E DISPORRE  APP NON SCARICATA-->
			</div>
		</div>
	</div>
	<br>
	<!--FINE CASO CONSULTARE e DISPORRE APP SCARICATA-->
</div>
