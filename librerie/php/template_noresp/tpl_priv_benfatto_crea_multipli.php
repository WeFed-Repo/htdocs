<link href="/wscmn/css/priv_ret_rbf.css" rel="stylesheet" type="text/css" media="all"/>

<h1>CREA E GESTISCI OBIETTIVI</h1>
<div id="boxObiettviTrue">
	<div class="formGeneric">
		<form id="DATI" name="DATI">
			<div class="margRightSmall">
			<div class="row-fluid margBottomLarge">
				<div class="span12">
					<label class="nomefield"></label><br>
					<span class="output">
						
						In questa pagina puoi vedere i dettagli del Risparmio Libero e dei tuoi obiettivi.<br><br>
						<ul>
							<li><strong>Risparmio Libero:</strong> cliccando su «dettagli» puoi alimentarlo oppure utilizzare l'importo che hai risparmiato ed effettuare i tuoi acquisti.</li>
							<li><strong>Obiettivi:</strong> crea, modifica o gestisci i tuoi obiettivi di risparmio.<br>Ne puoi creare <strong>massimo 4:</strong> personalizzali in base alle tue esigenze oppure scegli tra le esclusive offerte Bazak.</li>
						</ul> 
						Alla pagina 
						«<a href="/pri/wbOnetoone/2l/do/banking/EasySavingArchivioObiettivo.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=Gestisci_obiettivo&amp;OBSKEY3=Gestisci_obiettivo&amp;cf=0.09262111425443986">
							Obiettivi Raggiunti
						</a>» 
						puoi scegliere come realizzarli. 
					</span>				
				</div>
			</div>
			<div class="row-fluid margBottomLarge">
				<div style="*width:43.66%" class="span6 paddLeftLarge">
					<label class="nomefield">Conto Corrente</label>
					<strong>CC 00019 0000000164 EUR</strong><input type="hidden" value="00019 - 0000000164 - EUR" id="idNumeroConto" name="numeroConto">
				</div>
				<div class="span2">
					<label class="nomefield"></label>
					<span class="nomefield"></span>		
				</div>
				<div class="span2">
					<label class="nomefield">Mostra:</label>
					<span><input type="checkbox" checked="checked" id="cbRisparmio" name="showObiettivi">Risparmio Libero</span>		
				</div>
				<div class="span2">
					<label class="nomefield">&nbsp;</label>
					<span><input type="checkbox" checked="checked" id="cbObiettivi" name="showObiettivi">Obiettivi</span>		
				</div>				
			</div>
			</div>
			
			<div class="filettoGenericoOrizzontale02"></div>
			<br>
			<div id="boxGrafico" class="margRightSmall">
				<div class="row-fluid">
					<div class="span12">
						<div class="row-fluid BoxSaldiPlus">
							<div class="span5">
								<div class="BoxSaldoLabel saldoDate">Saldo Risparmio Ben Fatto</div>
								<div id="BoxSaldoDateGestioneEvo" class="BoxSaldoDate">al <span id="CCdataGestioneEvo">15/04/2014</span></div>
							</div>
							<div class="span3 tuaSitRight">
								<div class="BoxSaldoValoreBlack"><span class="colorBank" id="totaleRisparmioEvo">21.00</span>&nbsp;<span class="valuta colorBank"></span>
								</div>
							</div>
							<div class="span4 tuaSitRight">
								<a id="tuaSitAll">ripartizione e trasferimenti</a>
							</div>
						</div>
						<div style="display: none" id="tuaSitDetailWrap">
							<ul id="tuaSitDetail">
								<li class="row-fluid">
									<div class="span6">
										<span class="iconTuaSit iconTuaSit0"></span>
										di cui su <a href="/pri/wbOnetoone/2l/do/banking/EasySavingDettaglioRisparmio.do?tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_crea_obiettivo&amp;OBSKEY3=&amp;OBSCNT=&amp;BV_UseBVCookie=Yes&amp;siglaAzione=&amp;forwardto=&amp;keep=&amp;id=&amp;showObiettivi=on&amp;numeroConto=00019 - 0000000164 - EUR">Risparmio</a>
									</div>
									<div class="span2 tuaSitRight">
										<span class="valTuaSitWrap"><span class="valTuaSit">0,00</span> <span class="valuta"></span></span>
									</div>
								</li>
								<li class="row-fluid" style="display: block;">
									<div class="span6">
										<span class="iconTuaSit iconTuaSit1"></span>
										di cui su <a href="/pri/wbOnetoone/2l/do/banking/EasySavingDettaglioObiettivo.do?tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_crea_obiettivo&amp;OBSKEY3=&amp;OBSCNT=&amp;BV_UseBVCookie=Yes&amp;siglaAzione=&amp;forwardto=&amp;keep=yes&amp;cf=0.8024580774026433&amp;numeroConto=00019 - 0000000164 - EUR&amp;id=1230">p link</a>
									</div>
									<div class="span2 tuaSitRight">
										<span class="valTuaSitWrap"><span class="valTuaSit">0,00</span> <span class="valuta"></span></span>
									</div>
								</li>
								<li class="row-fluid" style="display: block;">
									<div class="span6">
										<span class="iconTuaSit iconTuaSit2"></span>
										di cui su <a href="/pri/wbOnetoone/2l/do/banking/EasySavingDettaglioObiettivo.do?tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_crea_obiettivo&amp;OBSKEY3=&amp;OBSCNT=&amp;BV_UseBVCookie=Yes&amp;siglaAzione=&amp;forwardto=&amp;keep=yes&amp;cf=0.8024580774026433&amp;numeroConto=00019 - 0000000164 - EUR&amp;id=1223">erere</a>
									</div>
									<div class="span2 tuaSitRight">
										<span class="valTuaSitWrap"><span class="valTuaSit">0,00</span> <span class="valuta"></span></span>
									</div>
								</li>
								<li class="row-fluid" style="display: block;">
									<div class="span6">
										<span class="iconTuaSit iconTuaSit3"></span>
										di cui su <a href="/pri/wbOnetoone/2l/do/banking/EasySavingDettaglioObiettivo.do?tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_crea_obiettivo&amp;OBSKEY3=&amp;OBSCNT=&amp;BV_UseBVCookie=Yes&amp;siglaAzione=&amp;forwardto=&amp;keep=yes&amp;cf=0.8024580774026433&amp;numeroConto=00019 - 0000000164 - EUR&amp;id=1380">uuu</a>
									</div>
									<div class="span2 tuaSitRight">
										<span class="valTuaSitWrap"><span class="valTuaSit">21,00</span> <span class="valuta"></span></span>
									</div>
								</li>
								<li class="row-fluid" style="display: none;">
									<div class="span6">
										<span class="iconTuaSit iconTuaSit4"></span>
										di cui su <a href="#"></a>
									</div>
									<div class="span2 tuaSitRight">
										<span class="valTuaSitWrap"><span class="valTuaSit"></span> <span class="valuta"></span></span>
									</div>
								</li>
								<li class="row-fluid" style="display: none;">
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
							<br><br><div class="filettoGrey"></div>
							
							<div style="display: block;" class="alimentaObiettivoWrap BoxRiaRealizza contOverflow">
								<div class="wrapTrasferisci">
									<div id="boxSvuotaEvo"><br>
										<div class="tit"><strong>Riporta su conto corrente</strong></div>		
										<span class="impRispTxtTop">Disponibilità per il trasferimento 
	<!-- 										<a id="massimoImpEvoCCLink" href="javascript:;"><span id="massimoImpEvoCCImp"></span>&nbsp;<span class="valuta"></span></span></a> -->
											<a id="massimoImpEvoCCLink" href="/pri/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_saldo&amp;OBSKEY3=nav_priv_wbx_saldo&amp;cf=0.002094069597859183&amp;CC=00019 - 0000000164 - EUR">21,00</a><span class="valuta">€</span>
										</span>
										<br>
										<div class="formGeneric">
											<div class="row-fluid noMargbottom">
												<div class="span6">
													<input type="text" maxlength="10" class="impRisp" id="importoEvoCCVersamenti">
												</div>
												<div class="span6 spButtonAlign">
													<a onclick="checkErosione();" href="javascript:;" class="spButton spGreen1 flLeft" id="aggiungiEvoCC"><span>trasferisci</span></a>
												</div>
											</div>
											<p style="visibility: hidden;" id="diventaEvoCCTrspan" class="saldoEvi">il tuo Risparmio Ben Fatto diventa di <strong id="diventaEvoCCTr"></strong>&nbsp;<span class="valuta">€</span></p>
										</div>
									</div>
									
									<!--esito negativo-->
									<div style="display:none" class="BoxRiaEsi" id="boxTrasfSingEvoCCEsiNega">
										<div class="boxesito negativo">
											<div class="middle"><span class="imgCont"></span>
												<div class="text">
													<span id="esitoTextSvuotaEvo" class="msg"></span><br>
													<a class="chiudiEvo flRight" href="javascript:nuovoTransfEvo();">chiudi</a>
												</div>
											</div>
										</div>												
									</div>
									
									<!--esito positivo-->
									<div style="display:none" class="BoxRiaEsi" id="boxTrasfSingEvoCCEsiPosi">
										<div class="boxesito positivo">
											<div class="middle"><span class="imgCont"></span>
												<div class="text">
													<strong>Trasferimento eseguito correttamente</strong><br>
													<span>Importo <strong id="importoDaVersareSingEvoCC"></strong></span><br>
													<span>Data di accredito <strong id="dataSingEvoCC"></strong></span>
													<a class="chiudiEvo flRight" href="javascript:nuovoTransfEvo();">nuovo</a>
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
			<div class="filettoGenericoOrizzontale02"></div>
			
			<br><br>
			<div class="row-fluid margBottomLarge">
				<div class="span12 boxGeneric06 boxGeneric07">
					<div class="boxGenericInner06 boxGenericInner07">
						<img id="img_Box0" src="/img/ret/str_bg_risplib_big.jpg" />
						<div class="row-fluid obText">
							<div class="flLeft span6">
								<strong class="colorDark2">Risparmio Libero</strong>
								<p>Utilizza l'importo risparmiato per effettuare i tuoi acquisti oppure trasferisci le somme che desideri e continua a risparmiare.</p>
							</div>
							<div class="flRight span6">
								<div class="flRight">
									<a id="" href="javascript:;" class="uniformBtn smallBtn" onclick="dettaglioRisparmio();">
									Dettagli<i class="icon-angle-right icon-after"></i>
									</a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="margRightSmall">
				<div class="row-fluid margBottomLarge">
					<div class="span6">
						<div id="load_Box0" style="display: block;" class="boxGeneric06">
							<div class="boxGenericInner06">
								<img id="img_Box0" src="/img/ret/vetrina/0012/iphone.png" />
								<div class="row-fluid obText">
									<div class="flLeft span6">
										<strong class="colorDark2">Lorem ipsum dolor sit </strong>
										<p>Scade il 30/12/2014<br>&nbsp;</p>
									</div>
									<div class="flRight span6">
										<div class="flRight">
											<a id="" href="javascript:;" class="uniformBtn smallBtn">
											Gestisci<i class="icon-angle-right icon-after"></i>
											</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div id="load_Box1" class="boxGeneric06">
							<div class="boxGenericInner06">
								<img id="img_Box1" src="/img/ret/crea_ob_ph.png">
								<div class="row-fluid obText">
									<div class="flLeft span6">
										<strong class="colorDark2">Lorem ipsum dolor sit </strong>
										<p>Scade il 30/12/2014<br>&nbsp;</p>
									</div>
									<div class="flRight span6">
										<div class="flRight">
											<a id="" href="javascript:;" class="uniformBtn smallBtn">
											Gestisci<i class="icon-angle-right icon-after"></i>
											</a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid margBottomLarge">
					<div class="span6">
						<div id="load_Box3" class="boxGeneric06">
							<div class="boxGenericInner06">
								<img id="img_Box3" src="/img/ret/crea_ob_ph.png">
								<div class="row-fluid obText">
									<div class="flLeft span6">
										<strong class="colorDark2">Lorem ipsum dolor sit </strong>
										<p>Scade il 30/12/2014<br>&nbsp;</p>
									</div>
									<div class="flRight span6">
										<div class="flRight">
											<a id="" href="javascript:;" class="uniformBtn smallBtn">Gestisci<i class="icon-angle-right icon-after"></i></a>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div id="add_Box4" class="boxGeneric06 addObiettivo">
							<div class="boxGenericInner06">
								<div class="row-fluid obText">
									<div class="span7">
										<strong class="colorDark2">Definisci nuovo obiettivo</strong>
										<p>Crea il tuo obiettivo personalizzato oppure scegli tra le offerte Bazak.</p>
									</div>
									<div class="flRight span5">
										<div class="flRight">
											<a href="#" class="uniformBtn smallBtn">
											Crea<i class="icon-angle-right icon-after"></i>
											</a>
										</div>
									</div>	
								</div>	
						    </div>
						</div>	
					</div>
				</div>			
			</div>			
		</form>
	</div>
</div>