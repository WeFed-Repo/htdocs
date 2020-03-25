<div class="layerPos">
<div id="boxHidden" class="noFloatFixIE">
<div class="insordcont">
	<div class="tithelppic">
			<div class="helpleft"><div class="lastupdate" id="sampleData1">
			Dati alle 14:20:42 del 01.01.2011</div></div>	
			<div align="right" class="helpright2 wt">
				<a title="aggiorna" href="javascript:;" onclick="setLoadingOnObject('sampleData1','','#e6e6e6');setLoadingOnObject('rigavalori'); setTimeout(function() {unsetLoadingOnObject('rigavalori')}, 2800);setLoadingOnObject('faseStart','varEnd'); setTimeout(function() {unsetLoadingOnObject('faseStart')}, 3500);">aggiorna</a>
			</div>	
			<br class="clear"/>
	</div>
	<div id="bookPosition">
<div id="bookLoading" style="display: none;"></div>
<table cellspacing="0" cellpadding="0" class="condiz2 insord">
	<tr class="color">
		<td>Ultimo</td>
		<td>Var %</td>
		<td>Vol. dom</td>
		<td>Prezzo dom</td>
		<td>Prezzo off</td>
		<td>Vol. off</td>
	</tr>
	<tr class="dispari" id="rigavalori">
		<td class="center large"><a href="">119,1825</a></td>
		<td class="center large posi" id="valpuls">+10,35</td>
		<td class="center">88888888,88</td>
		<td class="center"><a href="">88888888,88</a></td>
		<td class="center"><a href="">88888888,88</a></td>
		<td class="center">88888888,88</td>
	</tr>
</table>

</div>


<div id="tabordini2" class="inputFormCont">
		
			<table cellspacing="0" cellpadding="0" class="form01">
				<tbody><tr> 
					<td id="lblQuantita" class="uno label">Quantità*</td>
					<td class="quant">
						<input type="text" value="" id="quantita1" name="Quantita">
						
						<img class="frecce" usemap="#map5" src="/img/ret/frecce.gif">
						<map name="map5" id="map5">
							<area title="Aumenta di..." alt="Aumenta di..." href="javascript:upQta($('quantita1'), '9999999' ,$('lottoMinimo').value);" coords="0,0,9,5" shape="rect">
							<area title="Diminuisci di..." alt="Diminuisci di..." href="javascript:downQta($('quantita1'), '1',$('lottoMinimo').value);" coords="0,9,9,14" shape="rect">
						</map>
					</td>
					<td class="quantfield">
						<select onchange="ifParQtaChange();" id="quantita2" name="Parametro_Quantita" style="visibility: visible;">
							
			       			
			      			
						<option value="EOC">Esegui e cancella</option><option value="" selected="selected">Senza condizione</option><option value="TON">Tutto o niente</option></select>
						<span id="outputParQuantita" style="display: none;"></span>
					</td>
					<td class="label">Fase</td>
					<td><select name="desFaseMercato" id="desFaseMercato" style="width: 89px; visibility: visible;"><option value="ape/cont/chiu" selected="selected">ape/cont/chiu</option></select></td>
				</tr>
				<tr> 
					<td id="lblPrezzo" class="label">Prezzo*</td>
					<td>
						<input type="text" value="" onfocus=" OnPrezzoFocus();" maxlength="11" id="prezzo" name="PrezzoLimite">  
						<img class="frecce" usemap="#map1" src="/img/ret/frecce.gif">
						<map name="map1" id="map1">
							<area title="Aumenta di..." alt="Aumenta di..." href="javascript:up($('prezzo'), '9999999.0', 4);" coords="0,0,9,5" shape="rect">
							<area title="Diminuisci di..." alt="Diminuisci di..." href="javascript:down($('prezzo'), '0', 4);" coords="0,9,9,14" shape="rect">
						</map>
					</td>
					<td>
						<select onchange="ifTipoPrezzoChange();" id="prezzo2" name="TipoPrezzo" style="visibility: visible;">
											 	  
							
	      					
						<option value="L" selected="selected">Al limite</option><option value="E">Eco/Asta</option><option value="E">Eco/Continua</option></select> 
					</td>
					<td width="51" id="lblValidita" class="label slvalid">Validità</td>
					<td>
						<div style="display:block;" id="selectModalita">
							<select onchange="ifValiditaChange();" style="width: 89px; visibility: visible;" id="selectTempoval" name="tempoval">
								<option value="VSC">a chiusura</option>

					<option value="10/02/2012"> 10/02/2012 </option>

					<option value="13/02/2012"> 13/02/2012 </option>

					<option value="14/02/2012"> 14/02/2012 </option>

					<option value="15/02/2012"> 15/02/2012 </option>

					<option value="16/02/2012"> 16/02/2012 </option>

					<option value="17/02/2012"> 17/02/2012 </option>

					<option value="20/02/2012"> 20/02/2012 </option>

					<option value="21/02/2012"> 21/02/2012 </option>

					<option value="22/02/2012"> 22/02/2012 </option>

					<option value="23/02/2012"> 23/02/2012 </option>

					<option value="24/02/2012"> 24/02/2012 </option>

					<option value="27/02/2012"> 27/02/2012 </option>

					<option value="28/02/2012"> 28/02/2012 </option>

					<option value="29/02/2012"> 29/02/2012 </option>

					<option value="01/03/2012"> 01/03/2012 </option>

					<option value="02/03/2012"> 02/03/2012 </option>

					<option value="05/03/2012"> 05/03/2012 </option>

					<option value="06/03/2012"> 06/03/2012 </option>

					<option value="07/03/2012"> 07/03/2012 </option>

					<option value="08/03/2012"> 08/03/2012 </option>

					<option value="09/03/2012"> 09/03/2012 </option>

							</select>
						</div>
						<select style="width: 89px; display: none; visibility: visible;" id="soloChiusura">
						 <option value="a chiusura">a chiusura</option></select>
					</td>
				</tr>


					</tbody></table>
				</div>
	<br class="clear" />
	<a title="Apri la sezione Ordini" id="accordionOpener2" onclick="popBookSwitch(this,'stopLoss')" class="accordiontitle" href="javascript:;"><span>Stop loss / take profit</span></a>
	<div style="display: none;" id="stopLoss">
					<div class="inputFormCont">
						<table cellspacing="0" cellpadding="0" class="form01">
							<tbody><tr>
								<td id="lblstop_loss" class="uno label">Stop loss</td>
								<td class="slArrowBlock">
									<input type="text" name="stop_loss" id="stop_loss" style="width: 48px;" value="">
									<img class="frecce" src="/img/ret/frecce.gif" usemap="#map2">
									<map id="map2" name="map2">
										<area shape="rect" coords="0,0,9,5" href="javascript:up($('stop_loss'), '9999999.0', 4);" alt="Aumenta di..." title="Aumenta di...">
										<area shape="rect" coords="0,9,9,14" href="javascript:down($('stop_loss'), '0', 4);" alt="Diminuisci di..." title="Diminuisci di...">
									</map>
								</td>
								<td class="label slvalid">Scadenza</td>
								<td class="slvalidfield">	
									<select style="width: 89px; visibility: visible;" id="ScadenzaSLTP" name="ScadenzaSLTP">

									<option selected="selected" value="09/02/2012"> 09/02/2012 </option>

									<option value="10/02/2012"> 10/02/2012 </option>

									<option value="11/02/2012"> 11/02/2012 </option>

									<option value="12/02/2012"> 12/02/2012 </option>

									<option value="13/02/2012"> 13/02/2012 </option>

									<option value="14/02/2012"> 14/02/2012 </option>

									<option value="15/02/2012"> 15/02/2012 </option>

									<option value="16/02/2012"> 16/02/2012 </option>

									<option value="17/02/2012"> 17/02/2012 </option>

									<option value="18/02/2012"> 18/02/2012 </option>

									<option value="19/02/2012"> 19/02/2012 </option>

									<option value="20/02/2012"> 20/02/2012 </option>

									<option value="21/02/2012"> 21/02/2012 </option>

									<option value="22/02/2012"> 22/02/2012 </option>

									<option value="23/02/2012"> 23/02/2012 </option>

									<option value="24/02/2012"> 24/02/2012 </option>

									<option value="25/02/2012"> 25/02/2012 </option>

									<option value="26/02/2012"> 26/02/2012 </option>

									<option value="27/02/2012"> 27/02/2012 </option>

									<option value="28/02/2012"> 28/02/2012 </option>

									<option value="29/02/2012"> 29/02/2012 </option>

									<option value="01/03/2012"> 01/03/2012 </option>

									<option value="02/03/2012"> 02/03/2012 </option>

									<option value="03/03/2012"> 03/03/2012 </option>

									<option value="04/03/2012"> 04/03/2012 </option>

									<option value="05/03/2012"> 05/03/2012 </option>

									<option value="06/03/2012"> 06/03/2012 </option>

									<option value="07/03/2012"> 07/03/2012 </option>

									<option value="08/03/2012"> 08/03/2012 </option>

									<option value="09/03/2012"> 09/03/2012 </option>

									<option value="10/03/2012"> 10/03/2012 </option>
									
									</select>
			
								</td>
							</tr>
							<tr>
								<td id="lbltake_profit" class="label">Take profit</td>
								<td>
									<input type="text" name="take_profit" id="take_profit" style="width: 48px;" value="">
									<img class="frecce" src="/img/ret/frecce.gif" usemap="#map3">
									<map id="map3" name="map3">
										<area shape="rect" coords="0,0,9,5" href="javascript:up($('take_profit'), '9999999.0', 4);" alt="Aumenta di..." title="Aumenta di...">
										<area shape="rect" coords="0,9,9,14" href="javascript:down($('take_profit'), '0', 4);" alt="Diminuisci di..." title="Diminuisci di...">
									</map>
								</td>
								<td class="label">Fase</td>
								<td>	
									<select name="faseSLTP" id="faseSLTP" style="width: 89px; visibility: visible;">
										
										
									<option value="N" selected="selected">Solo continua</option><option value="Y">Continua/tah</option></select>
								</td>
							</tr>
							</tbody></table>
						</div>
	</div>
	<br class="clear">
	
	<!-- STOP ORDER -->
	<a href="javascript:;" class="accordiontitle" onclick="popBookSwitch(this,'stopOrder')" title="Lorem ipsum dolor disabilitato"><span>Stop order</span></a>
	<div id="stopOrder" style="display:none">
		<div class="inputFormCont">
			<table class="form01" cellpadding="0" cellspacing="0">
			<tr>
				<td class="uno label" style="padding-right: 1px">Condizione</td>
				<td style="width:162px;">
					<select style="width: 140px;">
						<option selected></option>
						<option>Ultimo prezzo >=</option>
						<option>Ultimo prezzo <=</option>
					</select>
				</td>
				<td class="label" style="width: 72px">Prezzo. soglia</td>
				<td>	
					<input type="text" value="" style="width: 68px">
					<img usemap="#map1" src="/img/ret/frecce.gif" class="frecce">
					<map name="map1" id="map1">
						<area title="Aumenta di..." alt="Aumenta di..." href="#" coords="0,0,9,5" shape="rect">
						<area title="Diminuisci di 1000" alt="Diminuisci di 1000" href="#" coords="0,9,9,14" shape="rect">
					</map>
				</td>
			</tr>
			</table>
		</div>
	</div>
	<!-- FINE STOP ORDER -->
	<br class="clear">
	
	<div id="rowTipoOrdine" class="inputFormCont topped">
						<table cellspacing="0" cellpadding="0" class="form01">						
							<tbody><tr> 
								<td id="lblOperativita" class="uno label"><span class="tooltip"><a href="#4" onmouseover="nascondi('lampa4'); " onmouseout="vedi('lampa4');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa4" class="lampa"><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span>Operatività </td>
								<td id="idDivOpOrd" class="radio">
									<label>
										<input type="radio" onclick="ifRadioChange();" checked="checked" id="tipoOrdinaria" name="tipoOrdine" value="o">
										<span>Ordinaria</span>
										<span style="display: none;" id="outputOperazione">Ordinaria</span>
									</label>
								</td>
								<td id="idDivOpMarg" class="radio">
									<label>
										<input type="radio" onclick="ifRadioChange();" id="tipoMarginato" name="tipoOrdine" value="m">
										<span>Marginata intraday</span>
									</label>
								</td>
								<td id="idDivOpShort" class="radio">
									<label>
										<input type="radio" onclick="ifRadioChange();" id="tipoShort" name="tipoOrdine" value="s">
										<span>Marginata overnight</span>
									</label>
								</td>
							</tr>
						</tbody></table>
	</div>
	<div class="bottomConsole">
		<div class="btnConsole">

			<div id="buttonCompra">
				<a title="compra" class="btnformright" href="javascript:pressBuySell('C');">
					<img alt="" src="/img/ret/btn_left_ar.gif">
					<span>compra</span>
					<img alt="" src="/img/ret/btn_right_ar.gif">
				</a>
			</div>
			<div class="tolltipclick conflint">
				<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed nodotted" id="documenti3"><span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/img_or_alertfp.gif"></a></span>
						<span class="uniqTooltipInnerHTML"><p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum<br />
						<a href="#1" class="sottolineato">Link link link</a></p></span></span>
					<span>Conflitto d'interessi</span>
				</span>
			</div>
			<div id="buttonVendi" class="onRight">
				<a title="vendi" class="btnformright" href="javascript:pressBuySell('V');">
					<img alt="" src="/img/ret/btn_left_ar.gif">
					<span>vendi</span>
					<img alt="" src="/img/ret/btn_right_ar.gif">
				</a>
			</div>

		</div>
		<a style="display: none;" title="Guida alla compilazione" onclick="openPopGuida('/webankpri/FMP/tradingWT/jsp/book/bookGuida.jsp');" class="lampadina" href="javascript:;">
			Guida
		</a>
	</div>
</div>

<div class="tabordinib" id="tabordini">
<div class="tithelp">	
	<div class="helpright2 wt"><a title="book" href="">book</a> <a title="scheda" href="">scheda</a> <a title="mercato" href="">mercato</a></div>
	<br class="clear"/>
</div>
<div id="ordiniPosition">
<div id="ordiniLoading" style="display: none;"></div>
<table class="box03wt">
		<tr> 
			<td width="2"></td>
			<td class="uno"><p>Descrizione</p></td>
			<td class="outputmk"><p>STMICROELECTRON NV</p></td>
			<td width="3"></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Codice ISIN</p></td>
			<td class="outputmk"><p>IT0001976403</p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Mercato</p></td>
			<td class="outputmk"><p>IDEM - Derivati italiani</p></td>
			<td></td>
		</tr>
		<tr  id="faseStart"> 
			<td></td>
			<td class="uno"><p>Fase</p></td>
			<td class="outputmk"><p>CONTINUA</p></td>
			<td></td>
		</tr>
		<tr id="sampleQuant"> 
			<td></td>
			<td class="uno"><p>Quantità acquistabile</p></td>
			<td class="outputmk"><p><strong>3</strong></p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Max giornata</p></td>
			<td class="outputmk"><p><strong>6.615</strong></p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Min giornata</p></td>
			<td class="outputmk"><p><strong>6.020</strong></p></td>
			<td></td>
		</tr>
		<tr id="varEnd"> 
			<td></td>
			<td class="uno"><p>Volume scambiato</p></td>
			<td class="outputmk"><p><strong>20.265</strong></p></td>
			<td></td>
		</tr>
		
		<tr> 
			<td></td>
			<td class="uno"><p>Lotto minimo</p></td>
			<td class="outputmk"><p><strong>3</strong></p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Divisa</p></td>
			<td class="outputmk"><p><strong>EUR</strong></p></td>
			<td></td>
		</tr>
		<tr class="separator"> 
			<td width="2"></td>
			<td class="uno"><p>Regolamento</p></td>
			<td class="outputmk"><p><strong>+3gg lavorativi</strong></p></td>
			<td width="3"></td>
		</tr>		
		</table>
		
</div>
</div>
</div>
</div>