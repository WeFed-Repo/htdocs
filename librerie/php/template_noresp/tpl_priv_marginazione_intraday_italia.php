<h1>Marginazione Intraday Italia</h1>
<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tr>
			<td class="off first"><a title="Lorem ipsum" href="#1">Come funziona</a></td>
			<td class="on"><a title="Lorem ipsum lorem" href="#1">Italia</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">Europa</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">America</a></td>
													
			<td class="end"> </td>
			
		</tr>
	</table>
</div>

<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_004_nosd.php"); ?>
<br/><br/>
<div class="bollfrecsx3 bollfrecsx3first">	
	
				<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/>
					<div class="cartcont"><p onclick="javascript:ApriCartImpr(this);" id="pToOpen" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">CERCA TITOLI</strong><br />
						<strong></strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" />
						<div class="esteso">
							<br class="clear">
							<div>
								<div class="formGeneric">
										<!--RIGA DIVISA IN QUATTRO CAMPI -->
										<div class="row-fluid">
											<div class="span4">
												<label for="select1" class="nomefield">Strumento</label>
												<select id="strumento" name="strumento" onchange="javascript:checkStrumento(this);">
												<option value="AZ" selected>Azioni</option>
												
													<option value="OB" >Obbligazioni</option>
													<option value="E" >ETF</option>
												
												</select>
											</div>
											<div class="span4" id="divEmittente" style="display: none">	
												<label for="select1" class="nomefield">Emittente</label>
												<select id="emittente" name="emittente">									
													<option value="Tutti" selected>Tutti</option>
													
													
												</select>								
											</div>
											<div class="span4">	</div>								
										</div>
										<div class="row-fluid">
											<div class="span4">
												<label for="select1" class="nomefield">Nome / Simbolo / Isin</label>
												<input type="text" id="titolo" name="titolo" value="">									
											</div>									
											<div class="span4">
												<label for="select1" class="nomefield">Mercato</label>
												<select id="mercato" name="mercato">
												
														<option value="011-MTA" selected>MTA</option>
													
													
												</select>
											</div>
											<div class="span4">
												<label for="select1" class="nomefield">Leva</label>
												<select name="leva">
													<option value="Tutti" selected>Tutte</option>
													
													<option value="20" > 20</option>
													
													<option value="12.5" > 12.5</option>
													
													<option value="10" > 10</option>
													
													<option value="5" > 5</option>
													
													<option value="4" > 4</option>
													
													<option value="2" > 2</option>
													
												</select>
											</div>				
										</div>								
									<div class="btnc aButtoncons"><a id="btnInvio" onclick="javascript:cercaTitoli();" class="aButton"><span>Cerca Titoli</span></a></div>
								</div>
							</div>
							<br /><br class="clear"/>
						</div>
					</div>
				</div>
	
	
				<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/>
					<div class="cartcont">
					<p  onclick="javascript:openHideCheckbox();ApriCartImpr(this);" id="massivePToOpen"onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">MODIFICA MASSIVA DEL MARGINE</strong><br /><strong></strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p>
					<br class="clear" />			
						<div class="esteso">
							<div>
								<div>
									<div class="formGeneric">
										<div class="row-fluid"></div>
										<div class="row-fluid">
											<div class="span7">
											Seleziona i titoli a cui assegnare il margine minimo o il massimo
											</div>
											<div class="span1">
											</div>
											<div class="span5">
											Ripristina il margine di default per i titoli selezionati								
											</div>				
										</div>
										<div class="row-fluid">
											<div class="span2">
												<input type="checkbox" id="assegnaTutti" name="assegnaTutti" value="off" onclick="javascript:checkAll(this.checked);">
												Seleziona tutti i titoli
											</div>									
											<div class="span2">
												<input type="radio" id="radioMargine" name="radioMargine" value="massimo" onclick="document.DATI.tipoOperazione.value='massimo';">
												Margine minimo								
											</div>
											<div class="span3">
												<input type="radio" id="radioMargine" name="radioMargine" value="minimo" onclick="document.DATI.tipoOperazione.value='minimo';">
												Margine massimo									
											</div>
											<div class="span1">
											</div>
											<div class="span5">
												<input type="checkbox" id="ripristinaTutti" name="ripristinaTutti" value="off"  onclick="javascript:checkAll(this.checked);">
												Seleziona tutti i titoli	
											</div>			
										</div>
										<div class="row-fluid">
											<div class="span7" align="center">
												<a id="btnAssegna" onclick="javascript:updateLevaMultipla();" class="aButton"><span>Assegna</span></a>									
											</div>	
											<div class="span1">
											</div>
											<div class="span5" align="center">
												<a id="btnRipristina" onclick="javascript:document.DATI.tipoOperazione.value='standard';updateLevaMultipla();" class="aButton"><span>Ripristina</span></a>	
											</div>			
										</div>												
									</div>
								</div>				
							</div>
						</div>	
					</div>
				</div>
	</div>
	<br class="clear"><br><br><br>
	<table cellpadding="0" cellspacing="0" class="condiz2 intrad">
				<tr class="color"> 
					<td id="tdTutti" style="display: show"><input type="checkbox" id="checkboxTutti" name="checkboxTutti"value="off" onclick="javascript:checkAll(this.checked);"></td>
					<td>Simbolo</td>
					<td>Titolo</td>
					<td>Mercato</td>
					<td>Margine default</td>
					<td>Margini disponibili per titolo</td>
					<td></td>
				</tr>
				
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaA2A" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSA2A" value="1061" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">A2A</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '1061', '0', '1')">
									A2A
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
										<span id="spanA2A50" class="clrgreen">50%</span>
										<span id="spanA2A25">
											<a onclick="openPopOverLayer('layeralert02b', 'floating', 2)" href="javascript:;">25%</a>
										</span>
										<span id="spanA2A20"><a onclick="openPopOverLayer('layeralert02c', 'floating', 2)" href="javascript:;">20%</a>
										</span>
										<span id="spanA2A10"><a id="aA2A10" 
								href="javascript:updateLevaSingola('1061','10','MI','EQCON','50','A2A');">10%</a></span>
										<span id="spanA2A8"><a id="aA2A8" 
								href="javascript:updateLevaSingola('1061','8','MI','EQCON','50','A2A');">8%</a></span>
										<span id="spanA2A5"><a id="aA2A5" 
								href="javascript:updateLevaSingola('1061','5','MI','EQCON','50','A2A');">5%</a></span>			
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=1061&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=1061\', \'\', 425, 255);','titolo=1061&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=1061&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="pari">							
								<td style="width:20px; display: show" name="tdSingolaACE" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSACE" value="2111" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ACE</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '2111', '0', '1')">
									ACEA
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
									<span id="spanACE50">50%</span>
									<span id="spanACE25" class="clrgreen">25%</span>
									<span id="spanACE20">20%</span>
									<span id="spanACE10">10%</span>
									<span id="spanACE8">8%</span>
									<span id="spanACE5">5%</span>
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=2111&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=2111\', \'\', 425, 255);','titolo=2111&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=2111&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaACO" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSACO" value="18721" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ACO</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '18721', '0', '1')">
									ACOTEL GROUP
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
									<span id="spanACO50">50%</span>
									<span id="spanACO25"><a id="aACO25" 
									href="javascript:updateLevaSingola('18721','25','MI','EQCON','8','ACO');">25%</a></span>
									<span id="spanACO20"><a id="aACO20" 
									href="javascript:updateLevaSingola('18721','20','MI','EQCON','8','ACO');">20%</a></span>
									<span id="spanACO10"><a id="aACO10" 
									href="javascript:updateLevaSingola('18721','10','MI','EQCON','8','ACO');">10%</a></span>
									<span id="spanACO8"class="clrgreen">8%</span>
									<span id="spanACO5">5%</span>	
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=18721&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=18721\', \'\', 425, 255);','titolo=18721&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=18721&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="pari">
							
								<td style="width:20px; display: show" name="tdSingolaACP" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSACP" value="137628" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ACP</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '137628', '0', '1')">
									ACQUE POTABILI
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">	
									<span id="spanACP50"><a id="aACP50" 
									href="javascript:updateLevaSingola('137628','50','MI','EQCON','25','ACP');">50%</a></span>
									<span id="spanACP25" class="clrgreen">25%</span>
									<span id="spanACP20">20%</span>
									<span id="spanACP10">10%</span>
									<span id="spanACP8">8%</span>
									<span id="spanACP5">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=137628&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=137628\', \'\', 425, 255);','titolo=137628&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=137628&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaACS" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSACS" value="3103" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ACS</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '3103', '0', '1')">
									ACSM-AGAM
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">								
									<span id="spanACS50">50%</span>
									<span id="spanACS25">25%</span>
									<span id="spanACS20" class="clrgreen">20%</span>
									<span id="spanACS10">10%</span>
									<span id="spanACS8">8%</span>
									<span id="spanACS5">5%</span>										
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=3103&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=3103\', \'\', 425, 255);','titolo=3103&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=3103&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="pari">
							
								<td style="width:20px; display: show" name="tdSingolaAE" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSAE" value="67" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">AE</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '67', '0', '1')">
									AEDES
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
									<span id="spanAE50">50%</span>
									<span id="spanAE25" class="clrgreen">25%</span>
									<span id="spanAE20">20%</span>
									<span id="spanAE10">10%</span>
									<span id="spanAE8">8%</span>
									<span id="spanAE5">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=67&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=67\', \'\', 425, 255);','titolo=67&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=67&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaAEF" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSAEF" value="133266" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">AEF</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '133266', '0', '1')">
									AEFFE
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
									<span id="spanAEF50" class="clrgreen">50%</span>
									<span id="spanAEF25">25%</span>
									<span id="spanAEF20">20%</span>
									<span id="spanAEF10">10%</span>
									<span id="spanAEF8">8%</span>
									<span id="spanAEF5">5%</span>							
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=133266&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=133266\', \'\', 425, 255);','titolo=133266&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=133266&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="pari">
							
								<td style="width:20px; display: show" name="tdSingolaAFI" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSAFI" value="16142" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">AFI</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '16142', '0', '1')">
									AEROPORTO DI FIRENZE
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">
									<span id="spanAFI50">50%</span>
									<span id="spanAFI25">25%</span>
									<span id="spanAFI20">20%</span>
									<span id="spanAFI10">10%</span>
									<span id="spanAFI8" class="clrgreen">8%</span>
									<span id="spanAFI5">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=16142&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=16142\', \'\', 425, 255);','titolo=16142&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=16142&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaARN" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSARN" value="595626" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ARN</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '595626', '0', '1')">
									ALERION CLEANPOWER SPA
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">	
									<span id="spanARN50">50%</span>
									<span id="spanARN25">25%</span>
									<span id="spanARN20">20%</span>
									<span id="spanARN10" class="clrgreen">10%</span>
									<span id="spanARN8">8%</span>
									<span id="spanARN5">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=595626&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=595626\', \'\', 425, 255);','titolo=595626&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=595626&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="pari">
							
								<td style="width:20px; display: show" name="tdSingolaATH" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSATH" value="14845" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">ATH</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '14845', '0', '1')">
									AMBIENTHESIS SPA                        EURO
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">	
									<span id="spanATH50">50%</span>
									<span id="spanATH25">25%</span>
									<span id="spanATH20">20%</span>
									<span id="spanATH10">10%</span>
									<span id="spanATH8">8%</span>
									<span id="spanATH5" class="clrgreen">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=14845&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=14845\', \'\', 425, 255);','titolo=14845&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=14845&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
								
							<tr class="dispari">
							
								<td style="width:20px; display: show" name="tdSingolaAMP" class="center">							
									<input type="checkbox" name="checkboxS" id="checkboxSAMP" value="118019" onclick="javascript:updateNumberChecked(this);">
								</td>
								<td class="center">AMP</td>
								<td nowrap class="left">
								<a href="#"	onclick="javascript:InviaQuotazioniMercatiPF(this, 'MTA', 'EQCON', 'MI', 'AZ', 'ORD', '118019', '0', '1')">
									AMPLIFON
								</a>
								</td>
								<td class="center">MTA</td>
								<td class="center">25%</td>
								<td nowrap class="center">	
									<span id="spanAMP50">50%</span>
									<span id="spanAMP25">25%</span>
									<span id="spanAMP20">20%</span>
									<span id="spanAMP10" class="clrgreen">10%</span>
									<span id="spanAMP8">8%</span>
									<span id="spanAMP5">5%</span>
															
								</td> 
								<td class="center icopad">
									<div class="linkTooltip">	
										<a title="scegli l'operazione da effettuare" id="link11" class="linkVai" onclick="multiLinks('iconaOperativaMenu1.html', 'left', this,['titolo=118019&amp;mercato=MI|EQCON|B','*#*ND','javascript:cstMultiplePopup(\'/webankpri/FMP/ricercaBookNw.do?borsa=MI&amp;mercato=EQCON&amp;tipo_mercato=XXX&amp;stockcode=118019\', \'\', 425, 255);','titolo=118019&amp;mercato=MI|EQCON|B','*#*ND','*#*ND','tab=5&amp;stock_code=118019&amp;mercato=EQCON&amp;borsa=MI&amp;skip=ric','*#*ND','*#*ND' ] )" href="javascript:;"></a>						
									</div>	
								</td>			
							</tr>
																
						</table>

<div style="display: none;" id="layeralert02b" class="layeralert2 ui-draggable">
	<div onmouseover="" class="head handle" style="cursor: move;"><img onclick="closePopOverLayer('layeralert02b')" alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
	<div class="body">
		<div class="overflow">
			<div class="important paddIntradOverlay">
				<p>Lorem ipsum dolor sit amet, consectetur <strong>50%</strong> adipisicing elit, sed do eiusmd tempor incididunt <strong>10%</strong> labore et dolore magna <strong>A2A</strong>?<br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br><br>

				<div class="importoTab">
					<div class="impLeft">
						Lorem ipsum<br>
						<span>10.000 &euro;</span>
					</div>
					<div class="impCenter">
						<img src="/img/ret/frec_intraday_esitook.gif"/>
					</div>
					<div class="impRight">
						Lorem ipsum<br>
						<span>10.000 &euro;</span>
					</div>
					<div class="divisorio"><img src="/img/ret/filetto_intraday_esito.gif"></div>
					<div class="impLeft">
						Lorem ipsum<br>
						<span>10.000 &euro;</span>
					</div>
					<div class="impCenter">
						<img src="/img/ret/frec_intraday_esitook.gif"/>
					</div>
					<div class="impRight">
						Lorem ipsum<br>
						<span>10.000 &euro;</span>
					</div>
					<div class="divisorio"><img src="/img/ret/filetto_intraday_esito.gif"></div>
				</div>
				<br>
				<div class="importoTab">
					<div class="boxesito positivo">
						<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<div class="row-fluid">
									<div class="span12">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>									
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="centerBtnOverlay">
						<span>
							<a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
						<br class="clear" />
						</span>
					</div>
				</div>	
			</div>
			<br class="clear">
		</div>
	</div>
	<div class="foot"></div>
</div>	
<div style="display: none;" id="layeralert02c" class="layeralert2 ui-draggable">
	<div onmouseover="" class="head handle" style="cursor: move;"><img onclick="closePopOverLayer('layeralert02c')" alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
	<div class="body">
		<div class="overflow">
			<div class="important paddIntradOverlay">
				<p>Lorem ipsum dolor sit amet, consectetur <strong>50%</strong> adipisicing elit, sed do eiusmd tempor incididunt <strong>10%</strong> labore et dolore magna <strong>A2A</strong>?<br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br><br>

				<div class="importoTab">
					<div class="impLeft">
						Lorem ipsum<br>
						<span>10.000 &euro;</span>
					</div>
					<div class="impCenter impCenterNeg">
						<img src="/img/ret/frec_intraday_esitono.gif"/>
					</div>
					<div class="impRight">
						Lorem ipsum<br>
						<span>- 100 &euro;</span>
					</div>
					<div class="divisorio"><img src="/img/ret/filetto_intraday_esito.gif"></div>
					<div class="impLeft">
						Lorem ipsum<br>
						<span>1.000 &euro;</span>
					</div>
					<div class="impCenter impCenterNeg">
						<img src="/img/ret/frec_intraday_esitono.gif"/>
					</div>
					<div class="impRight">
						Lorem ipsum<br>
						<span>250 &euro;</span>
					</div>
					<div class="divisorio"><img src="/img/ret/filetto_intraday_esito.gif"></div>
				</div>
				<br>
				<div class="importoTab">
					<div class="boxesito negativo">
						<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<div class="row-fluid">
									<div class="span12">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>									
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
				</div>	
			</div>
			<br class="clear">
		</div>
	</div>
	<div class="foot"></div>
</div>						