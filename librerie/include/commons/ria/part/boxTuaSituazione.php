
	<!-- la tua situazione -->
	<div id="tuaSitWrap" class="formGeneric">
		<div class="row-fluid">
			<div class="span12">
				<div id="tuaSit" class="BoxTrasferisci">
					<div class="BoxRiaTxTNegLeft">
						<span class="BoxRiaTxT">La tua situazione</span>
					</div>
					<br>
					<div class="BoxRiaRealizza">
						<div class="row-fluid">
							<div class="span12">
								<div class="row-fluid BoxSaldiPlus">
									<div class="span5">
										<div class="BoxSaldoLabel saldoDate">Saldo Risparmio Ben Fatto</div>
										<div class="BoxSaldoDate" id="BoxSaldoDateGestioneEvo">al <span id="CCdataGestioneEvo">gg/mm/aaaa</span></div>
									</div>
									<div class="span3 tuaSitRight">
										<div class="BoxSaldoValoreBlack"><span id="totaleRisparmioEvo" class="colorBank"></span>&nbsp;<span class="valuta colorBank"></span>
										</div>
									</div>
									<div class="span4 tuaSitRight">
										<a id="tuaSitAll"></a>
									</div>
								</div>
								<div id="tuaSitDetailWrap" style="display: none">
									<ul id="tuaSitDetail">
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit0"></span>
												di cui su <a href="#">Risparmio</a>
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
											</div>
										</li>
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit1"></span>
												di cui su <a href="#"></a>
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
											</div>
										</li>
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit2"></span>
												di cui su <a href="#"></a>
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
											</div>
										</li>
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit3"></span>
												di cui su <a href="#"></a>
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
											</div>
										</li>
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit4"></span>
												di cui su <a href="#"></a>
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
											</div>
										</li>
										<li class="row-fluid">
											<div class="span6">
												<span class="iconTuaSit iconTuaSit5"></span>
												di cui su obiettivi
											</div>
											<div class="span2 tuaSitRight">
												<span class="valTuaSitWrap"><span class="valTuaSit">0,00</span> <span class="valuta"></span></span>
											</div>
										</li>
									</ul>
									<div id="tuaSitChartDiv"></div>
									<div class="alimentaObiettivoWrap BoxRiaRealizza contOverflow">
										<div class="wrapTrasferisci">
											<div id="boxTrasfSingEvoCC"><br>
												<div class="tit">Riporta su conto corrente</div>		
												<p>
													Scegli l'importo che vuoi e riversarlo sul tuo conto corrente.
													Attenzione: se eccedi la quota di &quot;Risparmio&quot; intaccherai uno o pi&ugrave; obiettivi.<br>
													<br></p>
												<div class="formGeneric">
													<div class="row-fluid">
														<div class="span3">
															<label class="nomefield">Importo scelto</label>
															<input type="text" data-error="" class="impRisp" id="importoEvoCCVersamenti">
														</div>
														<div class="span6">
															<div id="CCDiventaRBF" style="visibility:hidden;">
																<label class="nomefield">Il tuo conto corrente diventa</label>		
																<span id="CCDiventaRBFSpan"></span>
															</div>
														</div>
														<div class="span3 tuaSitRight">
															<label class="nomefield">&nbsp;</label>
															<a class="spButton backgroundBank" id="aggiungiEvoCCVersamenti">trasferisci</a>
														</div>
													</div>
												</div>
											</div>
											
											<!-- esito negativo-->
											<div id="boxTrasfSingEvoCCEsiNega" class="BoxRiaEsi" style="display:none">
												<div class="boxesito negativo">
													<div class="middle"><span class="imgCont"></span>
														<div class="text">
															<span class="msg"></span><br>
															<a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
														</div>
													</div>
												</div>												
											</div>
											
											<!-- esito positivo-->
											<div id="boxTrasfSingEvoCCEsiPosi" class="BoxRiaEsi" style="display:none">
												<div class="boxesito positivo">
													<div class="middle"><span class="imgCont"></span>
														<div class="text">
															<strong>Trasferimento eseguito correttamente</strong><br>
															<span>Importo <strong id="importoDaVersareSingEvoCC"></strong></span><br/>
															<span>Data di accredito <strong id="dataSingEvoCC"></strong></span>
															<a href="javascript:;" class="chiudiEvo flRight">nuovo</a>
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
			</div>
		</div>
	</div>
	<br>