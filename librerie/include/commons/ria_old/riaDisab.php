<script language="javascript" type="text/javascript">

	function changeriatab (indexvalue)
	{
		for (i=1;i<=4;i++)
		{
			$('tabRia' + i).className = 'tabRia';
			if ($('contentRia' + i).style.display != 'none')
			{
				Effect.SlideUp('contentRia' + i);
			}
			//$('contentRia' + i).style.display = 'none';
		}
		$('tabRia' + indexvalue).className = 'tabRiaOn';
		Effect.SlideDown('contentRia' + indexvalue, { queue: 'end' });
	}

</script>
<!-- PARTE UGUALE PER TUTTI -->
<div class="clear"></div>
<table style="" id="ctnboxtable">
  <tbody>
    <tr>
      <td>Stai operando<br/>sul conto:</td>
	  <td valign="bottom">
      	<select id="selectConti" name="select">
        <option value="1">C/C + DEP 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option><option value="2">C/C 00599 - 0000099102 - EUR - C/D 00596 - 0000000016 - EUR</option><option value="3">C/C + DEP 00599 - 0000099999 - EUR - MMMMMMMMMMMM</option></select>
        <strong id="contoUnico"></strong>
      <a href="#" title="Lorem ipsum" class="preferito"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"/></a>
	  </td>
	  <!--<td align="right" width="175"><span class="showhelp showhelpdisabled">mostra aiuti</span><input type="checkbox" disabled></td>-->
    </tr>
		<tr>
				<td class="mar">&nbsp;</td>
				<td class="mar"><input type="checkbox" checked="checked" value=""> nascondi i dati</td>
			</tr>
  </tbody>
</table>



<div id="tabCont1">
	<div class="tabContainer1">
		<div id="tabRia1" class="tabRiaOn">
			<div class="tabRiaLeft"></div>
			<div class="tabRiaCont" id="caric1" onclick="changeriatab(1);">Situazione attuale</div>	
			<div class="tabRiaRight"></div>
		</div>
		<div id="tabRia2" class="tabRia">
			<div class="tabRiaLeft"></div>
			<div class="tabRiaCont" id="caric2" onclick="changeriatab(2);">Trasferimenti</div>	
			<div class="tabRiaRight"></div>
		</div>
		<div id="tabRia3" class="tabRia">
			<div class="tabRiaLeft"></div>
			<div class="tabRiaCont" id="caric3" onclick="changeriatab(3);">Linee vincolate</div>	
			<div class="tabRiaRight"></div>
		</div>
		<div id="tabRia4" class="tabRia">
			<div class="tabRiaLeft"></div>
			<div class="tabRiaCont" id="caric4" onclick="changeriatab(4);">Realizza desideri</div>	
			<div class="tabRiaRight"></div>
		</div>
		<div class="clear"></div>			
	</div>
	
	<div id="lineRia" class="line" >&nbsp;</div>
	<!-- TAB SITUAZIONE ATTUALE -->
	<div style="overflow: visible;" id="contentRia1" class="contentRia">
	<div class="tutorial"><a href="#" title="Tutorial"><img src="/img/ret/ico1bt_tutorial.gif"></a></div>
	<div style="">	  
			<div class="rightCol">
				<!-- Box Conto Corrente -->
					<div class="boxSaldo">
						<div class="borderLeft">
							<div class="borderRight">
								<div class="borderBottom">
									<div class="tl">
										<div class="tr">
											<div class="bl">
												<div style="height: 69px;" class="brContent" id="contentAccordion1">
													<div>
														<div class="brHead_left">CONTO CORRENTE<span style="display: none;" id="accordionSaldo1"> <strong><span id="saldoCCSintesi">737.900,00</span></strong></span></div>
														<div class="brHead_puls" id="accordionPuls1"></div>
														<div class="clear"></div>
														<div class="BoxSaldoLabel">Saldo:</div>
														<div class="BoxSaldoValoreGreen"><span id="saldoCC">-</span></div>
														<div class="clear"></div>
														<div class="BoxSaldoLabel">Margine utilizzabile:</div>
														<div class="BoxSaldoValoreBlack"><span id="margineCC">-</span></div>
														<div class="clear"></div>
														
														<!-- Questa parte si carica solo all'espansione del box di C/C -->
														<div style="display: none;" class="infoRichieste" id="infoRichieste1">
															di cui con fido: <span id="fidoCC"></span><br>
															<strong>Intestato a</strong>: <span id="intestazioneCC"></span><br>
															<strong>Numero Conto</strong>: <span id="numeroCC"></span><br>
															<strong>Iban</strong>: <span id="ibanCC"></span><br>
															<div class="iconCont">
																<a id="linkDettagliCoordinate" href="/webankpri/wbOnetoone/2l/do/banking/WsCoordinate.do?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_coordin_bancarie&amp;cf=0.7402959105354225&amp;BV_UseBVCookie=Yes" title="Dettaglio">
																<img id="imgDettagliCoordinate" src="/img/ret/ico1gr_dettaglio.gif" alt="Dettaglio"></a>
																<a id="LBlinkInviaCoordinate" href="#1" title="Invia">
																<img id="imgInviaCoordinate" src="/img/ret/ico1gr_mail.gif" alt="Invia mail"></a>
																<a id="LBlinkStampaCoordinate" href="#1" title="Stampa">
																<img id="imgStampaCoordinate" src="/img/ret/ico1gr_pdf.gif" alt="Stampa"></a>
															</div>
															<hr class="lineSep lineStep3px">
															<div class="left">
																<div class="boxLoyalty" id="puntiDIV"><span id="puntiCC"></span>&nbsp;punti</div>
																</div>
																<div class="right">
																<span id="testoPuntiCC"></span><br>
																<span><a id="linkProgrammaPunti" href="/webankpri/wbOnetoone/2l/do/banking/WsLoyalty0.do?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_scheda_prodotto&amp;cf=0.4835937187557091&amp;BV_UseBVCookie=Yes" title="Vai al programma punti">Vai al programma punti</a> &gt;</span>
															</div>
															<div class="clear"></div>
														</div>
														<div class="clear"></div>
														<!-- /Questa parte si carica solo all'espansione del box di C/C -->
													</div>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
				<!-- /Box Conto Corrente -->		
				<!-- Box Conto Deposito -->		
						<div class="boxSaldo">
						<div class="borderLeft">
							<div class="borderRight">
								<div class="borderBottom">
									<div class="tl">
										<div class="tr">
											<div class="bl">
												<div style="height: 69px;" class="brContent" id="contentAccordion2">
													<div>
														<div class="brHead_left">CONTO DEPOSITO<span style="display: none;" id="accordionSaldo2"><strong> <span id="saldoCDSintesi">760.876,00</span></strong></span></div>
														<div class="brHead_puls" id="accordionPuls2"> </div>
														<div class="clear"></div>
														<div class="BoxSaldoLabel">Saldo:</div>
														<div class="BoxSaldoValoreGreen"><span id="saldoCD">-</span></div>
														<div class="clear"></div>
														<div class="BoxSaldoLabel">Margine utilizzabile:</div>
														<div class="BoxSaldoValoreBlack"><span id="margineCD">-</span></div>
														<div class="clear"></div>
														
														<!-- Questa parte si carica solo all'espansione del box di C/C -->
														<div style="display: none;" class="infoRichieste" id="infoRichieste2">
															<div class="BoxSaldoLabel">Guadagno netto:</div>
															<div class="BoxSaldoValoreBlack"><span id="guadagnoNettoCD"></span></div>
															<div class="clear"></div><br>
															<strong>Intestato a </strong>: <span id="intestazioneCD"></span><br>
															<strong>Numero Conto</strong>: <span id="numeroCD"></span>
															<hr class="lineSep lineStep3px">
															<div class="left">
															<div class="boxTasso">TASSO<br><span id="tassoCD"></span>%</div>
															</div>
															<div class="right"><span id="condizioniCD">Condizioni del Conto Deposito</span><br>
															<a id="linkCondizioniCD" href="/webankpri/wbOnetoone/2l/do/bnkg/condizioniere.do?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_le_mie_condiz_contome&amp;cf=0.18780518829344328&amp;BV_UseBVCookie=Yes" title="Vedi tutte le condizioni">Vedi tutte le condizioni</a> &gt;</div>
															<div class="clear"></div>
														</div>
														<div class="clear"></div>
														<!-- /Questa parte si carica solo all'espansione del box di C/C -->
													</div>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
						  </div>
						</div>
				<!-- /Box Conto Deposito -->
				<!-- Linee vincolate -->		
						<div class="boxSaldo">
						<div class="borderLeft">
							<div class="borderRight">
								<div class="borderBottom">
									<div class="tl">
										<div class="tr">
											<div class="bl">
												<div style="height: 69px;" class="brContent" id="contentAccordion3">
													<div>
														<div class="brHead_left">LINEE VINCOLATE<span style="display: none;" id="accordionSaldo3"> <strong><span id="totaleLVSintesi">501.224,00</span></strong></span></div>
														<div class="brHead_puls" id="accordionPuls3">&nbsp; </div>
														<div class="clear"></div>
														<div class="BoxSaldoLabel">Totale:</div>
														<div class="BoxSaldoValoreGreen"><span id="totaleLV">-</span></div><div class="clear"></div>
														<div class="BoxSaldoLabel">Prossima linea in scadenza:</div> <div class="BoxSaldoScadenzaData"><strong><span id="scadenzaProssimaLV">-</span></strong></div>
														<div class="clear"></div>
														<!-- Questa parte si carica solo all'espansione del box di C/C -->
														<div style="display: none;" id="infoRichieste3">
															
															<div class="infoRichieste">
																
																<div class="clear"></div>
																<div class="BoxSaldoValore">Valore: <span id="valoreProssimaLV">123,00</span>&nbsp;&nbsp;&nbsp;Interessi netti:  <span id="rendimentoProssimaLV">99,00</span></div>
																<div class="clear"></div>
																<div class="BoxSaldoTit"><a id="linkVediTutteLVBis" href="#">Apri una nuova linea</a></div>
																<div class="BoxSaldoLink"><a id="linkVediTutteLV" href="#">Linee attive</a> &gt;</div>
																<div class="clear"></div>
															</div>
															<div class="Tasso">
																<div id="boxLV1" class="boxTassoBox2">
																	<span id="testoTassoLordo1" class="green">Tasso lordo<br><span id="tassoMesi1">3</span> mesi</span><br>
																	<span id="testoTassoA1" class="linethrough"><span id="tassoA1">4,25</span>%</span><br>
																	<span id="testoTassoB1" class="col2 green"><span id="tassoB1">4,5</span>%</span><br>
																	<img id="imgSoloPerTe1" src="/img/ret/ria_soloperte.gif" title="Solo per te" alt="Solo per te">
																</div>
																<div id="boxLV2" class="boxTassoBox2">
																	<span id="testoTassoLordo2" class="green">Tasso lordo<br><span id="tassoMesi2">6</span> mesi</span><br>
																	<span id="testoTassoA2" class="linethrough"><span id="tassoA2">4,75</span>%</span><br>
																	<span id="testoTassoB2" class="col2 green"><span id="tassoB2">4,5</span>%</span><br>
																	<img id="imgSoloPerTe2" src="/img/ret/ria_soloperte.gif" title="Solo per te" alt="Solo per te">
																</div>
																<div id="boxLV3" class="boxTassoBox2">
																	<span id="testoTassoLordo3" class="green">Tasso lordo<br><span id="tassoMesi3">12</span> mesi</span><br>
																	<span id="testoTassoA3" class="linethrough"><span id="tassoA3">4,75</span>%</span><br>
																	<span id="testoTassoB3" class="col2 green"><span id="tassoB3">4,9</span>%</span><br>
																	<img id="imgSoloPerTe3" src="/img/ret/ria_soloperte.gif" title="Solo per te" alt="Solo per te">
																</div>
																<div id="boxLV4" class="boxTassoBox2">
																	<span id="testoTassoLordo4" class="green">Tasso lordo<br><span id="tassoMesi4">24</span> mesi</span><br>
																	<br>
																	<span id="testoTassoB4" class="col2 green"><span id="tassoB4">5,0</span>%</span><br>
																	<img id="imgSoloPerTe4" src="/img/ret/ria_soloperte.gif" title="Solo per te" alt="Solo per te">
																</div>
																<div class="clear"></div>
															</div>
															<div class="clear"></div>
														</div>
														<div class="clear"></div>
														<!-- /Questa parte si carica solo all'espansione del box di C/C -->
													</div>
											  </div>
										  </div>
									  </div>
								  </div>
							  </div>
						  </div>
						  </div>
						</div>
				<!-- /Linee vincolate -->		
			  </div>
				<div class="leftCol">
					<h3>I tuoi soldi</h3>
					<div class="tabContainer2">
						<div id="tabLiquidita1" class="tabRiaOn">
							<div class="tabRiaLeft"></div>
							<div class="tabRiaCont">Ripartizione</div>	
							<div class="tabRiaRight"></div>
						</div>
						<div style="display: none;" id="tabLiquidita2" class="tabRia">
							<div class="tabRiaLeft"></div>
							<div class="tabRiaCont">Andamento</div>	
							<div class="tabRiaRight"></div>
						</div>
						<div class="clear"></div>
					</div> 
					<div class="boxBaseFixed">
					<!-- Box con grafico a torta -->
					<div style="" id="contentLiquidita1" class="boxBase boxBaseRipartizione">
		    			<div>
							<div class="boxBaseBorLeft">
								<div class="boxBaseBorRight">
									<div class="boxBaseBorBottom">
										<div class="boxBaseTopRight">
											<div class="boxBaseBottomLeft">
												<div class="boxBaseBottomRight">
													<!-- Box Ripartizione -->
													<div class="boxRipartizione">
														<div class="left">
															<div class="graficoContiDiv" id="graficoContiDiv">&nbsp;</div>
														</div>
														<div class="right">
															&nbsp;
														</div>
														
														
														
														<div class="clear"></div>
														<div class="tot">Tot.</div>
														<div class="importo">-</div>
														<div class="clear"></div>
													</div>
													<div class="clear"></div>
													<!-- /Box Ripartizione -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>	
					</div>
					<!-- Box con grafico andamento -->
					<div style="display: none;" id="contentLiquidita2" class="boxBase">
		    			<div>
							<div class="boxBaseBorLeft">
								<div class="boxBaseBorRight">
									<div class="boxBaseBorBottom">
										<div class="boxBaseTopRight">
											<div class="boxBaseBottomLeft">
												<div class="boxBaseBottomRight">
													<!-- Box Ripartizione -->
													<div class="boxContieneAndamento2">
														<div id="graficoAndamentiDiv" class="graficoAndamentiDiv"></div>
														<div class="legMargine">Saldo medio di C/C</div>
														&nbsp;&nbsp;&nbsp;<div class="legRisparmio">Saldo medio di C/D</div>
													</div>
														<div class="clear"></div>
													<!-- /Box Ripartizione -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div><div class="clear"></div>
					
					<div class="trasferimentoVeloce">
						<h3>Trasferimento veloce</h3>				
						<div class="boxBase">
						<div class="boxBaseBorLeft">
								<div class="boxBaseBorRight">
									<div class="boxBaseBorBottom">
										<div class="boxBaseTopLeft">
										<div class="boxBaseTopRight">
											<div class="boxBaseBottomLeft">
												<div class="boxBaseBottomRight">
													<div class="boxBaseContent">
														<div class="inputManuale" id="etichettaCD">Versa sul conto deposito</div> 
														<div class="inputManualeForm"><input disabled id="importoCD" type="text"></div>
														<div class="inputManualeImg"><img src="/img/ret/ria_button_arrow.gif" title="Esegui"></div>
														<div class="clear"></div>
														<div class="inputManuale" id="etichettaCC">Versa sul conto corrente</div> 
														<div class="inputManualeForm"><input disabled id="importoCC" type="text"></div>
														<div class="inputManualeImg"><img src="/img/ret/ria_button_arrow.gif" title="Esegui"></div>
														<div class="clear"></div>
														<div class="visualizzaModifiche">
															<div class="areaModifiche">Il C/C diventa
																<div class="cifraModifiche"><span id="CCdiventaDB">-</span></div>
															</div>
															<!-- 
															Per cambiare o for scomparire la freccia usa queste 3 classi:
															.frecciaModifiche
															.frecciaModificheSx
															.frecciaModificheDx
															-->
															<div class="frecciaModifiche" id="frecciaModifiche"> </div>
															<div class="areaModifiche">Il C/D diventa
																<div class="cifraModifiche"><span id="CDdiventaDB">-</span></div>
															</div>
															<div class="clear"></div>
														</div>
	 												</div>
													<div class="clear"></div>
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
		<div class="clear"></div>
		<div class="bottoniera">
			<a id="estrattiConto" href="#" class="btnevid1" style="display: none;"><img src="/img/ret/btn_left_sm1.gif" alt=" ">
			<span>Estratti conto</span>
			<img src="/img/ret/btn_right_sm1.gif" alt=" "></a>
			
			<div class="bottdis2"><img alt="" src="/wscmn/img/btndis_left_sml.gif"/><span title="Lorem ipsum" alt="Lorem ipsum">Movimenti conto deposito</span><img alt="" src="/wscmn/img/btndis_right_sml.gif"/></div>
			<div class="bottdis2"><img alt="" src="/wscmn/img/btndis_left_sml.gif"/><span title="Lorem ipsum" alt="Lorem ipsum">Movimenti conto corrente</span><img alt="" src="/wscmn/img/btndis_right_sml.gif"/></div>
			<!--a id="movimentiCD" href="#" class="btnevid1"><img src="/img/ret/btn_left_sm1.gif" alt=" ">
			<span>Movimenti conto deposito</span>
			<img src="/img/ret/btn_right_sm1.gif" alt=" "></a>
			<a id="movimentiCC" href="#" class="btnevid1"><img src="/img/ret/btn_left_sm1.gif" alt=" ">
			<span>Movimenti conto corrente</span>
			<img src="/img/ret/btn_right_sm1.gif" alt=" "></a-->
		</div>
		<div class="clear"></div>
		<br>
	</div><!-- inizio pop up movimenti -->
</div>
</div>
<!-- FINE TAB SITUAZIONE ATTUALE -->


<!-- TAB TRASFERIMENTI -->

<script language="javascript" type="text/javascript">

	function contentTrasf (indexvalue)
	{
		for (i=1; i<=3; i++) 
			{
				$('contentTrasf' + i).style.display='none';
				$('tabTrasf' + i).className = 'tabRia';
			}
		$('contentTrasf' + indexvalue).style.display='block';
		$('tabTrasf' + indexvalue).className = 'tabRiaOn';
	}

</script>

<div style="overflow: visible; display: none" id="contentRia2" class="contentRia">
<div class="tutorial"><a href="#" title="Tutorial"><img src="/img/ret/ico1bt_tutorial.gif"></a></div>
<div style="">
				<div class="tabContainer2">
					<div id="tabTrasf1" class="tabRiaOn">
						<div class="tabRiaLeft"></div>
						<div class="tabRiaCont" id="caric5" onclick="contentTrasf(1)">Singolo</div>	
						<div class="tabRiaRight"></div>
					</div>
					<div id="tabTrasf2" class="tabRia">
						<div class="tabRiaLeft"></div>
						<div class="tabRiaCont" id="caric6" onclick="contentTrasf(2);">Periodici</div>	
						<div class="tabRiaRight"></div>
					</div>
					<div id="tabTrasf3" class="tabRia">
						<div class="tabRiaLeft"></div>
						<div class="tabRiaCont" id="caric7" onclick="contentTrasf(3);">A soglia</div>	
						<div class="tabRiaRight"></div>
					</div>
					<div class="clear"></div>
				</div> 
				<div id="lineTrasf" class="line2lvl">&nbsp;</div>
				<!-- <div id="sfumaturaTrasf" class="sfumatura2lvl">&nbsp;</div>-->
				<div style="overflow: visible;" id="contentTrasf1" class="contentRia2lvl"><!-- manuali --><div style="bottom: 0px;" class="trasfManualiR2">
					<!-- div per visualizzazione errori campi form -->
					<div style="display: none;" id="errorDiv2">
						<div class="errorDiv">
					   		<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border"></div>
							<div class="boxtxt">
								<p class="box_mess">
									<img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
									<span class="attenzione">ATTENZIONE</span><br>
							
									<strong>Si sono verificati i seguenti errori</strong>
									</p><ul class="alert">
										<span id="errorContent2"> 
										</span>
									</ul>
								
							</div>
							<br class="clear">
							<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
						</div>
					</div>
						<div class="left">
							<div class="boxWhiteOut" id="boxOutCD">
								<div class="boxWhiteCont" id="boxContCD">
									<div class="boxWhiteMain" id="boxMainCD"><span class="tit">Versa sul conto deposito</span>
										Disponibilit&agrave; massima per il trasferimento: <strong class="importo" id="massimoImpCD">-</strong> <strong class="importo"></strong><br>
										<div class="importo" id="etichettaCDversamenti">Indica l'importo&nbsp;&nbsp;<input disabled name="importo" id="importoCDversamenti" type="text">&nbsp;&nbsp;
										<select name="" id="dataCDversamenti" disabled >
										  
										<option value="20090603">03/06/2009</option><option value="20090604">04/06/2009</option><option value="20090605">05/06/2009</option><option value="20090608">08/06/2009</option><option value="20090609">09/06/2009</option><option value="20090610">10/06/2009</option><option value="20090611">11/06/2009</option><option value="20090612">12/06/2009</option><option value="20090615">15/06/2009</option><option value="20090616">16/06/2009</option></select>&nbsp;&nbsp;<span class="arrw"><img src="/img/ret/ria_button_arrow.gif" title="Esegui"></span></div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="right moneteDiv"><object style="" data="/wscmn/swf/monete.swf" name="monete" id="monete" type="application/x-shockwave-flash" width="144" height="71"><param value="opaque" name="wmode"><param value="high" name="quality"><param value="true" name="play"><param value="true" name="loop"><param value="false" name="devicefont"><param value="showall" name="scale"><param value="#ffffff" name="bgcolor"><param value="true" name="menu"><param value="false" name="allowfullscreen"><param value="sameDomain" name="allowscriptaccess"></object></div>
						<div class="clear"></div>
						<br><br>
						<div class="left">
							<div class="boxWhiteOut" id="boxOutCC">
								<div class="boxWhiteCont" id="boxContCC">
									<div class="boxWhiteMain" id="boxMainCC"><span class="tit">Versa sul conto corrente</span>
									Disponibilit&agrave; massima per il trasferimento: <strong class="importo" id="massimoImpCC">-</strong> <strong class="importo"></strong>
									<div class="importo" id="etichettaCCversamenti">Indica l'importo&nbsp;&nbsp;<input disabled name="importo" id="importoCCversamenti" type="text">&nbsp;&nbsp;
									<select name="" id="dataCCversamenti" disabled>
							
									<option value="20090603">03/06/2009</option><option value="20090604">04/06/2009</option><option value="20090605">05/06/2009</option><option value="20090608">08/06/2009</option><option value="20090609">09/06/2009</option><option value="20090610">10/06/2009</option><option value="20090611">11/06/2009</option><option value="20090612">12/06/2009</option><option value="20090615">15/06/2009</option><option value="20090616">16/06/2009</option></select>&nbsp;&nbsp;<span class="arrw"><img src="/img/ret/ria_button_arrow.gif" title="Esegui"></span></div>
									
									</div>
								</div>
							</div>
						</div>
						<div class="right"><div class="legendaBlack">Il C/C diventa<div class="importo"><span id="diventaCCTr">-</span></div></div><hr class="lineSep"><div class="legendaOlive">Il C/D diventa<div class="importo"><span id="diventaCDTr">-</span></div></div></div>
						<div class="clear"></div>
					</div><div class="clear"></div><!-- fine manuali --></div>
				<div style="overflow: visible; display: none;" id="contentTrasf2" class="contentRia2lvl"><div style="">
					<div style="display: none;" class="trasferimentiRicorrenti" id="contentTrasfRicorr1">	
					<div>
						<span class="tit">Trasferimenti periodici inseriti</span>
						<div class="" id="divTrasfRic">				
							<table class="tab17 tab17nob totale" id="tabellaTrasfRic" cellpadding="0" cellspacing="0">
						            <tbody id="bodyTableTS">
							       	  <tr>
							            <th class="uno">Importo</th>
										<th>Periodicit&agrave;</th>
							            <th>Dal</th>
							            <th>Scadenza ordine</th>
							            <th class="ultimo">Gestione</th>
							          </tr>
						        	</tbody>
							</table>
						</div>
						<div class="clear"></div>
						<div class="invio"><a href="#1" class="btnevid1" title="CREA NUOVO TRASFERIMENTO RICORRENTE" id="nuovoTrasf"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Imposta nuovo trasferimento periodico</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div>
						<div class="clear"></div><br>
						<span class="tit">Andamento conto deposito</span>
						<div id="graficoStoricoTRicDiv" class="graficoStoricoTRicDiv"><img src="/img/ret/img_or_Trasferimenti_periodici.gif"></div>
						<div style="display: none;" class="andamentoMedio" id="LabelGraficoStoricoTRicDiv"><input style="display: none;" id="checkAndamentoMedioStoricoTRic" name="checkAndamentoMedioStoricoTRic" type="checkbox"><img src="/img/ret/ria_andamentoMedio.gif" alt=" ">Andamento medio del C/C nell'anno scorso</div>
					<div class="clear"></div>
					</div>
					</div>
					
					<div class="nuovoTrasferimentiRicorrenti" id="contentTrasfRicorr2">
					<div>
						<!-- div per visualizzazione errori campi form -->
						<!--div style="" id="errorDiv3">
							<div class="errorDiv">
						   		<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border"></div>
								<div class="boxtxt">
									<p class="box_mess">
										<img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
										<span class="attenzione">ATTENZIONE</span><br>
								
										<strong style="display: none;" id="messaggioErrore">Si sono verificati i seguenti errori</strong>
										</p><ul class="alert">
											<span id="errorContent3">Al momento risulta attivato sul tuo conto corrente un trasferimento a soglia.<br>Se prosegui con l'inserimento del trasferimento periodico, le impostazioni di soglia saranno cancellate.</span>
										</ul>
									
								</div>
								<br class="clear">
								<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
							</div>
						</div-->
						<form id="ricorrentiForm">
							<span class="tit">Imposta trasferimento periodico verso il conto deposito</span>
							<div class="nuovoTrasBox">
							<div class="left">
								<label class="" for="importoTRf" id="labelImportoTR">Importo:</label><br>
								<input disabled name="importo" id="importoTRf" type="text"><br><br>
								Frequenza:<br>
								<select name="frequenza" id="frequenzaTRf" disabled>
									
								<option value="1g">giornaliero</option><option value="7g">settimanale</option><option value="1m">mensile</option><option value="2m">bimestrale</option><option value="3m">trimestrale</option><option value="4m">quadrimestrale</option><option value="6m">semestrale</option><option value="12m">annuale</option></select>
							</div>
							<div class="left">
								<label class="" for="aPartireDaTRf" id="labelApartireDaTR">A partire da:</label><br>
								<input disabled name="aPartire" id="aPartireDaTRf" type="text"><br><br>
								Scadenza:<br>
								<input id="revoca" name="scadenzaTRf" value="a revoca" class="radio" type="radio" disabled><label for="scadenza">Su richiesta</label>
								<input id="dopoN" name="scadenzaTRf" value="dopo" class="radio" type="radio" disabled><label class="" for="scadenza" id="labelNumeroTR">Dopo N. </label><input disabled name="numero" id="numeroTRf" class="numero" type="text"> Versamenti<br>
								<span class="scadenza"><span id="scadenzaTRfLAB"></span></span>
							</div>
							</div>
							<div class="clear"></div>
							<span class="tit">Come aumenter&agrave; il tuo Conto Deposito?</span>
							<div id="graficoProiezioneTRicDiv" class="graficoProiezioneTRicDiv"><embed style="display: none;" type="application/x-shockwave-flash" src="/wscmn/swf/chart/MSStackedColumn2DLineDY.swf" id="graficoProiezioneTRic" name="graficoProiezioneTRic" quality="high" allowscriptaccess="always" wmode="Opaque" flashvars="debugMode=0&amp;chartWidth=495&amp;chartHeight=145&amp;DOMId=graficoProiezioneTRic&amp;registerWithJS=0&amp;scaleMode=noScale&amp;lang=EN&amp;dataXML=	&lt;chart bgColor='DBDBDB' showBorder='0' canvasbgColor='ffffff' canvasBorderAlpha='0'
		lineThickness='2' showValues='0' anchorAlpha='0' anchorRadius='2'
		vDivLineColor='DBDBDB' vDivLineThickness='1' vDivLineAlpha='100'
		formatNumberScale='0' plotGradientColor='' showPlotBorder='0'
		showAlternateHGridColor='0' divLineAlpha='0' numDivLines='0' yAxisValuesStep='1' showSecondaryLimits='0'
		baseFont='Verdana' baseFontSize='10' decimalSeparator=',' thousandSeparator='.'
		chartTopMargin='5' chartRightMargin='15' chartBottomMargin='-5' chartLeftMargin='5'&gt;
	   &lt;categories&gt;
	      &lt;category label='giu 09'/&gt;
&lt;category label='lug 09'/&gt;
&lt;category label='ago 09'/&gt;
&lt;category label='set 09'/&gt;
&lt;category label='ott 09'/&gt;
&lt;category label='nov 09'/&gt;
&lt;category label='dic 09'/&gt;
&lt;category label='gen 10'/&gt;
&lt;category label='feb 10'/&gt;
&lt;category label='mar 10'/&gt;
&lt;category label='apr 10'/&gt;
&lt;category label='mag 10'/&gt;

	   &lt;/categories&gt;
	   &lt;dataset&gt;
	      &lt;dataset color='6F8F0A'&gt;
	         &lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;
&lt;set value='760876' /&gt;

	      &lt;/dataset&gt;
	      &lt;dataset color='CDF348'&gt;
	         &lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;
&lt;set value='0' /&gt;

	      &lt;/dataset&gt;
	   &lt;/dataset&gt;
	   
	    &lt;styles&gt;
	        &lt;definition&gt;
	            &lt;style name='labelFont' type='font' bold='1' color='454545'/&gt;
	        &lt;/definition&gt;
	        &lt;application&gt;
	            &lt;apply toObject='DATALABELS' styles='labelFont' /&gt;
	            &lt;apply toObject='YAXISVALUES' styles='labelFont' /&gt;
	            &lt;apply toObject='TRENDVALUES' styles='labelFont' /&gt;
	        &lt;/application&gt;
	    &lt;/styles&gt;
	&lt;/chart&gt;" width="495" height="145"></div>
							<div id="LegendaGraficoProiezioneTRicDiv"><span class="legenda"><img src="/img/ret/ria_legendaOlivaGrande.gif" alt=" "> Aumento previsto di C/D</span><span class="legenda"><img src="/img/ret/ria_legendaGreenGrande.gif" alt=" "> Trasferimento  periodico
</span><span style="display: none;" class="legenda" id="spanCheckAndamentoMedioProiezioneTRic"><input id="checkAndamentoMedioProiezioneTRic" name="checkAndamentoMedioProiezioneTRic" type="checkbox"><img src="/img/ret/ria_andamentoMedio.gif" alt=" ">Andamento medio del C/C nell'anno scorso</span></div>
							<div class="imposta"><div class="bottdis2"><img alt="" src="/wscmn/img/btndis_left_sml.gif"/><span title="Lorem ipsum" alt="Lorem ipsum">Procedi</span><img alt="" src="/wscmn/img/btndis_right_sml.gif"/></div></div>
							<div class="clear"></div>
						</form>
					</div>
					</div>
				</div></div>
				<div style="overflow: visible; display: none;" id="contentTrasf3" class="contentRia2lvl"><div style="">
						<!--div style="" id="errorDiv4">
							<div class="errorDiv">
						   		<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border"></div>
								<div class="boxtxt">
									<p class="box_mess">
										<img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
										<span class="attenzione">ATTENZIONE</span><br>
								
										<strong style="display: none;" id="messaggioErrore2">Si sono verificati i seguenti errori</strong>
										</p><ul class="alert">
											<span id="errorContent4">Ti ricordiamo che hai gi&agrave; impostato una soglia minima di 200,00. Se vuoi, puoi modificarla in basso oppure <a href="#1" id="eliminaSoglia">eliminarla</a>.</span>
										</ul>
									
								</div>
								<br class="clear">
								<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
							</div>
						</div-->
						<div class="sogliaCC">
							<span class="tit">Imposta soglia su conto corrente</span>
							<div class="text">Impostando una soglia sul conto puoi tenere sotto controllo la tua liquidit&agrave;. Automaticamente il conto deposito sar&agrave; alimentato e/o il tuo conto corrente ripianato.
							</div>
							<div class="boxGreyOut">
									<div class="boxGreyMain">
										<div class="left"><input name="sogliaMax" id="sogliaMax" class="checkbox" type="checkbox" disabled><label class="" for="sogliaMax" id="labelSogliaMax">Quanti soldi vuoi tenere <strong>al massimo</strong><br><span class="sulConto">sul conto?</span></label><br>
										<span class="importo"><input disabled="disabled" id="importoMax" maxlength="8" type="text">&nbsp;<img src="/img/ret/frecce.gif" usemap="#map1"><map id="map1" name="map1"><area shape="rect" coords="0,0,9,5" href="#1" alt="Aumenta di 100" title="Aumenta di 50" id="aumentaMax"><area shape="rect" coords="0,9,9,14" href="#1" alt="Diminuisci di 50" title="Diminuisci di 100" id="riduciMax"></map></span>
										</div>
										<div class="right"><input name="sogliaMin" id="sogliaMin" class="checkbox" type="checkbox" disabled><label class="" for="sogliaMin" id="labelSogliaMin">Quanti soldi vuoi tenere <strong>al minimo</strong><br><span class="sulConto">sul conto?</span></label><br>
										<span class="importo"><input disabled id="importoMin" maxlength="8" type="text">&nbsp;<img src="/img/ret/frecce.gif" usemap="#map2"><map id="map2" name="map2"><area shape="rect" coords="0,0,9,5" href="#1" alt="Aumenta di 100" title="Aumenta di 50" id="aumentaMin"><area shape="rect" coords="0,9,9,14" href="#1" alt="Diminuisci di 50" title="Diminuisci di 100" id="riduciMin"></map></span>
										</div>
										<div class="clear"></div><br>
										<div class="avviso" style="display: none;">Vuoi essere avvisato se la soglia minima viene raggiunta?<input name="avvisoEmail" id="avvisoEmail" class="checkbox" type="checkbox">Con email<span style="display: none;" id="abilitaSMS"><input name="avvisoSMS" id="avvisoSMS" class="checkbox" type="checkbox">Con SMS</span></div>
									</div>
							</div>
							<div class="clear"></div><br>
							<div class="left">
								<div id="graficoProiezioneSogliaDiv" class="graficoProiezioneSogliaDiv"><img src="/img/ret/img_or_grafico_fake.gif"></div>
								<div style="display: none;" class="andamentoMedio" id="LegendGraficoProiezioneSogliaDiv"><img src="/img/ret/ria_andamentoMedio.gif" alt=" ">Andamento medio del C/C<input style="display: none;" id="checkAndamentoMedioSoglia" name="checkAndamentoMedioSoglia" type="checkbox"><img src="/img/ret/ria_andamentoMedioCD.gif" alt=" ">Andamento medio del C/D</div>
							</div>
							<div class="right">
								<div class="oltre">Oltre i <span id="massimoCD">-</span> nel C/C<br>trasferisci nel C/D</div>
								<object style="" data="/wscmn/swf/frecce.swf" name="frecce" id="frecce" type="application/x-shockwave-flash" width="144" height="71"><param value="opaque" name="wmode"><param value="high" name="quality"><param value="true" name="play"><param value="true" name="loop"><param value="false" name="devicefont"><param value="showall" name="scale"><param value="#ffffff" name="bgcolor"><param value="true" name="menu"><param value="false" name="allowfullscreen"><param value="sameDomain" name="allowscriptaccess"></object>
								<div class="sotto">Sotto i <span id="minimoCD">-</span> nel C/C<br>trasferisci nel C/D</div>
							</div>
							<div class="clear"></div>
							<div class="imposta">
								<div class="bottdis2"><img alt="" src="/wscmn/img/btndis_left_sml.gif"/><span title="Prosegui" alt="Prosegui">Prosegui</span><img alt="" src="/wscmn/img/btndis_right_sml.gif"/></div>
							</div>
							<div class="clear"></div>
						</div>
					</div></div>
		    </div></div>
			
			
			
<!-- LINEE VINCOLATE --->
<script language="javscript" type="text/javascript">

	function tabVinc (indexvalue)
	{
		for (i=1; i<=2; i++) 
			{
				$('contentVinc' + i).style.display='none';
				$('tabVinc' + i).className = 'tabRia';
			}
		$('contentVinc' + indexvalue).style.display='block';
		$('tabVinc' + indexvalue).className = 'tabRiaOn';
	
	}

</script>

<div style="overflow: visible; display:none;" id="contentRia3" class="contentRia">
<div class="tutorial"><a href="#" title="Tutorial"><img src="/img/ret/ico1bt_tutorial.gif"></a></div>	     
<div style="">
				<div class="tabContainer2">
					<div id="tabVinc1" class="tabRiaOn">
						<div class="tabRiaLeft"></div>
						<div class="tabRiaCont" id="caric8" onclick="tabVinc(1);">Linee attive</div>	
						<div class="tabRiaRight"></div>
					</div>
					<div id="tabVinc2" class="tabRia">
						<div class="tabRiaLeft"></div>
						<div class="tabRiaCont" id="caric9" onclick="tabVinc(2);">Apri nuova linea</div>	
						<div class="tabRiaRight"></div>
					</div>
					<div class="clear"></div>
				</div> 
				<div id="lineTrasf" class="line2lvl">&nbsp;</div>
				<!--<div id="sfumaturaTrasf" class="sfumatura2lvl">&nbsp;</div>-->
				<div style="overflow: visible;" id="contentVinc1" class="contentRia2lvl"><div style="">
						<div class="riepilogoBox">
						
							<div class="boxGreyOut">	
										<div class="titoloInt">Informazioni generali</div>
										<div class="testo">Totale investito:</div>
										<div class="importo"><span id="totaleInvestito">-</span></div><br>
										<div class="testo">Interessi netti al <span id="dataRendimento">-</span>:</div>
										<div class="importo"><span id="totaleRendimento">-</span></div>					
							</div>
						</div>
						
						<div class="riepilogoBox noPadding">
							<div class="titoloInt">Scadenza linee</div>
							<div id="graficoPianoVincoloDiv" class="graficoPianoVincoloDiv"><embed style="" type="application/x-shockwave-flash" src="/wscmn/swf/chart/StackedColumn2D.swf" id="graficoPianoVincolo" name="graficoPianoVincolo" quality="high" allowscriptaccess="always" wmode="Opaque" flashvars="debugMode=0&amp;chartWidth=235&amp;chartHeight=80&amp;DOMId=graficoPianoVincolo&amp;registerWithJS=0&amp;scaleMode=noScale&amp;lang=EN&amp;dataXML=		&lt;chart bgColor='DBDBDB' showBorder='0' canvasbgColor='ffffff' canvasBorderAlpha='0'
			showValues='0' vDivLineColor='DBDBDB' vDivLineThickness='1' vDivLineAlpha='100'
			formatNumberScale='0' plotGradientColor='' showPlotBorder='0'
			showAlternateHGridColor='0' divLineAlpha='0' numDivLines='0' yAxisValuesStep='1' showSecondaryLimits='0'
			baseFont='Verdana' baseFontSize='10' decimalSeparator=',' thousandSeparator='.'
			chartTopMargin='5' chartRightMargin='15' chartBottomMargin='-5' chartLeftMargin='5' setAdaptiveXMin='0' setAdaptiveXMax='23'&gt;
			&lt;categories&gt;
				&lt;category label='giu 09' /&gt;
&lt;vLine color='333333' thickness='2' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='giu 10' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='' /&gt;
&lt;category label='mag 11' /&gt;

			&lt;/categories&gt;
			&lt;dataset&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;

			&lt;dataset color='89AD17'&gt;
&lt;set value='100.06' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='ACD038'&gt;
&lt;set value='10.01' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='D8F86F'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='88.26' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='9900FF'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='11.03' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='C062FF'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='15.04' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='E8C6FF'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='501452.02' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='FED008'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='1018.1' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;
&lt;dataset color='FFE85A'&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='1018.1' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;set value='' /&gt;
&lt;/dataset&gt;

			&lt;styles&gt;
		        &lt;definition&gt;
		            &lt;style name='labelFont' type='font' bold='1' color='333333'/&gt;
		        &lt;/definition&gt;
		        &lt;application&gt;
		            &lt;apply toObject='DATALABELS' styles='labelFont' /&gt;
		            &lt;apply toObject='YAXISVALUES' styles='labelFont' /&gt;
		        &lt;/application&gt;
		    &lt;/styles&gt;
		&lt;/chart&gt;" width="235" height="80"></div>	
							<div id="track1" style="width: 175px; height: 9px;" class="track trackLV">
								<div id="track1-left" class="track-left"></div>
								<div class="selected" id="handle1" style="width: 22px; height: 16px; left: 0px; position: relative;">
									<img src="/img/ret/slider-images-handle.png" class="track-img" alt="">
								</div>
							</div><div class="clear"></div>
							<div class="didascaliaLV">Disponibilit&agrave; al <span id="dataDisponibilita">-</span>:&nbsp;<strong class="importo" id="importoDisponibilita">-</strong></div>
						</div>
						<div class="clear"></div>
						<div class="riepilogoBoxSotto">
							
							
							
							<div class="scrollTable" id="divLV">
							
						</div>
						<div class="clear"></div><br>
						<div class="invio">
							<div class="bottdis2"><img alt="" src="/wscmn/img/btndis_left_sml.gif"/><span title="Apri nuova linea vincolata" alt="Apri nuova linea vincolata">Apri nuova linea vincolata</span><img alt="" src="/wscmn/img/btndis_right_sml.gif"/></div>
						</div>
						</div>
						<div class="clear"></div>
						<div class="clear"></div><br>
						
						<div class="clear"></div>
					</div></div>
				<div style="overflow: visible; display: none;" id="contentVinc2" class="contentRia2lvl"><div style="">
						<!-- div per visualizzazione errori campi form -->
						<div style="display: none;" id="errorDiv5">
							<div class="errorDiv">
						   		<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" class="border"></div>
								<div class="boxtxt">
									<p class="box_mess">
										<img src="/img/ret/img_or_alertria.gif" alt="" class="dx">
										<span class="attenzione">ATTENZIONE</span><br>
								
										<strong>Si sono verificati i seguenti errori</strong>
										</p><ul class="alert">
											<span id="errorContent5"> 
											</span>
										</ul>
									
								</div>
								<br class="clear">
								<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" class="border"></div>
							</div>
						</div>
						<div class="vincolataBox">	
							<span class="tit">Decidi quanto investire</span>
							<div class="text">Vuoi aumentare il rendimento dei tuoi risparmi? Apri una linea vincolata, investendo l'importo che preferisci. L'importo investito viene prelevato dal 
											  tuo deposito base.Puoi decidere di svincolare l'importo in ogni momento senza penali; l'importo verr&agrave; considerato come mai vincolato.
							</div>			
							<div class="boxGreyOut">
								<span class="importo"><label class="" for="importoNuovaLV" id="labelImportoNuovaLV">Importo</label>&nbsp;&nbsp;<input disabled name="importoNuovaLV" id="importoNuovaLV" class="inputManualeForm" type="text">&nbsp;&euro;</span>&nbsp;
								(Disponibilit&agrave; massima per l'investimento: <span id="massimoLV">-</span>)
							</div><br>
							<span class="tit">Scegli la linea</span>
							<div id="boxTabLineeVincolate">
								
							<div class="offerte cancellaTab"><strong>Tasso lordo<br>a <span id="mesiLV0">1</span> mesi</strong><br><div class="percentuale" id="parcentualeLV0">1,10 %</div><div class="data">Scadr&agrave; il <span id="scadenzaLV0">02/07/09</span></div><div class="guadagni">Interessi netti</div><div class="verde"><span id="guadagnoLV0">0</span></div><div class="apri"><a href="#1" class="btnevid1" title="Apri ora" id="nuovaLV0"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Apri ora!</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div><div class="clear"></div></div><div class="offerte cancellaTab"><strong>Tasso lordo<br>a <span id="mesiLV1">3</span> mesi</strong><br><div class="percentuale" id="parcentualeLV1">1,60 %</div><div class="data">Scadr&agrave; il <span id="scadenzaLV1">02/09/09</span></div><div class="guadagni">Interessi netti</div><div class="verde"><span id="guadagnoLV1">0</span></div><div class="apri"><a href="#1" class="btnevid1" title="Apri ora" id="nuovaLV1"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Apri ora!</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div><div class="clear"></div></div><div class="offerte cancellaTab"><strong>Tasso lordo<br>a <span id="mesiLV2">6</span> mesi</strong><br><div class="percentuale" id="parcentualeLV2">2,10 %</div><div class="data">Scadr&agrave; il <span id="scadenzaLV2">02/12/09</span></div><div class="guadagni">Interessi netti</div><div class="verde"><span id="guadagnoLV2">0</span></div><div class="apri"><a href="#1" class="btnevid1" title="Apri ora" id="nuovaLV2"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Apri ora!</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div><div class="clear"></div></div><div class="offerteVerde cancellaTab"><div class="verde">Offerta <span id="mesiLV3">9</span> mesi</div><div class="barrato" id="parcentualeBarrataLV3">2,40 %</div><div class="percentuale" id="parcentualeLV3">2,30 %</div><div class="data">Scadr&agrave; il <span id="scadenzaLV3">02/03/10</span></div><div class="guadagni">Interessi netti</div><div class="verde"><span id="guadagnoLV3">0</span></div><div class="apri"><a href="#1" class="btnevid1" title="Apri ora" id="nuovaLV3"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Apri ora!</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div><div class="clear"></div></div><div class="offerteNeg cancellaTab"><strong>Tasso lordo<br>a <span id="mesiLV4">12</span> mesi</strong><br><div class="percentuale" id="parcentualeLV4">2,50 %</div><div class="data">Scadr&agrave; il <span id="scadenzaLV4">02/06/10</span></div><div class="guadagni">Interessi netti</div><div class="verde"><span id="guadagnoLV4">0</span></div><div class="apri"><a href="#1" class="btnevid1" title="Apri ora" id="nuovaLV4"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>Apri ora!</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div><div class="clear"></div></div></div>
						</div>
						<div class="clear"></div>
						<div class="clear"></div><br>
							<p class="note">Il calcolo esatto degli interessi netti viene fatto soltanto al momento della loro liquidazione. Gli interessi indicati in questa pagina sono espressi per approssimazione.</p>
						<div class="clear"></div>
					</div>
				</div>
		   </div>
			</div>
		</div>	   
		   
		   <div style="overflow: visible; display:none" id="contentRia4" class="contentRia">
			<div class="tutorial"><a href="#" title="Tutorial"><img src="/img/ret/ico1bt_tutorial.gif"></a></div>	   	   
			<div style="">
				
				<div id="stepsPiano">
					<div>
						<div class="wizard">
							<div id="stepPiano1" class="step onStep">
								<span>1</span> Scegli obiettivi
							</div>   
						    <div id="stepPiano2" class="step">
								<span>2</span> Scegli strumento di risparmio
							</div>  
						    <div id="stepPiano3" class="step">
								<span>3</span> Aumenta la redditivit&agrave; 
							</div>
							<div id="stepPiano4" class="lastStep step">
								<span>4</span> Imposta il piano
							</div>
							<div class="clear"></div>
						</div><br>
					</div>
				</div>
				
				
				<div style="" id="contentPiano1">
					<div>
						<span class="tit">Scegli gli obiettivi</span>
						<div class="wizard">
							<div class="testo">Un nuovo computer? Una vacanza? Una nuova auto? <br>Questo strumento ti permette di creare un piano di risparmio personalizzato per raggiungere  i tuoi obiettivi nel tempo da te prefissato.</div>
							<div class="clear"></div>
							<div class="boxStep1">
								<div class="left"><strong>Definisci i desideri</strong><br><br><label class="" for="cosaCP1" id="labelCosaCP1">Cosa vuoi comprare?</label><br><br><label class="" for="costoCP1" id="labelCostoCP1">Quanto costa?</label></div>
								<div class="left"><br><br><input name="cosaCP1" id="cosaCP1" type="text"><br><br><input name="costoCP" id="costoCP1" maxlength="8" type="text"><br><br>
								<div class="bottdis2"><img src="/wscmn/img/btndis_left_sml.gif" alt=""><span>Aggiungi alla lista</span><img src="/wscmn/img/btndis_right_sml.gif" alt=""></div>
								</div>
								<div class="left"><strong>Lista dei desideri</strong><br>
									<div id="stringaObiettivi" class="hidden"></div>
									<div id="obiettiviCP1" class="scrollTable"></div>
								</div>
								<div class="clear"></div>
								
							</div>
							<div class="clear"></div>
							<br>
							<div id="pianoAvantiStep1" class="bottdis2" style="float:right"><img src="/wscmn/img/btndis_left_sml.gif" alt="" ><span>Prosegui</span><img src="/wscmn/img/btndis_right_sml.gif" alt=""></div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
		  </div>
			
			