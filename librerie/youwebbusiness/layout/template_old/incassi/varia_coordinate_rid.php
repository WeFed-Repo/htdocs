<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
            	
	              initializeContextSelectorLibrary(parent.context);
	              var accounteerCombo = null;
	              var bankCombo = null;
	              var ccCombo = null;
	              var siaInput = null;
	              var abiInput = null;
	              var cabInput = null;
	              var contoInput = null;
	              
	              if (adeguamentiCbi)
				  {					
					loadLocationForGroup(parent.context);
				  }
				
	                
				</script>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna">
<tbody><tr valign="top">
<td>
<form action="insertridvar" method="post" name="insertrid">
<input name="causale" type="hidden" value="50999"><input name="codice_abi_assuntrice" readonly="true" size="5" type="hidden" value=""><script>
			abiInput = document.forms.insertrid.codice_abi_assuntrice;
		</script><input name="conto_ordinante" type="hidden" value=""><script>
        contoInput = document.forms.insertrid.conto_ordinante;
        </script><input name="cab_assuntrice" readonly="true" size="5" type="hidden" value=""><script>
		  cabInput = document.forms.insertrid.cab_assuntrice;
		</script><input name="conto_debitore" type="hidden">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr>
<td align="center">
<table align="center" border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>
																				Varia Coordinate Rid
																			<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Incassi/VariazioniCoordinateRID.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td colspan="4"></td>
</tr>
<tr>
<td class="sottoTitoloTabella old-sectionTitle" colspan="4" height="20"><h3 class="new-titleSection">
																				Dati Ordinante
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="100" style="width: 15%; text-align: left;">			
					Ordinante<span class="testoRedSmallBold">*</span></td><td class="col-2" width="315px" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','TRUE','', '', '','Ordinante');fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select></td><script>
			accounteerCombo = document.forms.insertrid.intestatario;
		</script><td align="left" class="col-3" style="width: 12%; text-align: left;">
					SIA
				</td><td class="col-4" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
		  siaInput = document.forms.insertrid.codice_azienda;
		</script>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
					Banca<span class="testoRedSmallBold">*</span></td><td class="col-2" width="315px" style="width: 50%;"><select name="numero_abi_assuntrice" onchange="checkValue('numero_abi_assuntrice','','TRUE','', '', '','Banca');fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option></select></td><script>
			bankCombo = document.forms.insertrid.numero_abi_assuntrice;
		</script><td align="left" class="col-3" title="Cab - Descrizione Conto" style="width: 12%; text-align: left;">
					Conto<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="num_rapporto" onchange="checkValue('num_rapporto','','TRUE','', '', '','Conto');cabInput.value = fitToLength(getCabCode(this, ''),0,5); contoInput.value = fitToLength(getAccount(this, ''),0,12); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" style="width:160" class="new-form-control"><option value=""></option><option value="1382733">33980 - 000000004831</option><option value="1380486">33980 - 000000004688</option><option value="1413595">33920 - 000000001748</option><option value="1408587">33980 - 000000003827</option><option value="1396342">33920 - 000000001521</option><option value="1408588">33980 - 000000004099</option><option value="1408730">52990 - 000000006780</option><option value="1396089">33920 - 000000002328</option><option value="1411360">33980 - 000000005354</option><option value="1415552">33980 - 000000013652</option><option value="1395353">33920 - 000000002375</option><option value="1414344">33980 - 000000013607</option><option value="1414345">33980 - 000000013608</option><option value="1384710">33980 - 000000005325</option><option value="1405924">32800 - 000000011399</option><option value="1414346">33980 - 000000013609</option><option value="1409042">52990 - 000000002598</option><option value="1409041">52990 - 000000005950</option><option value="1409043">52990 - 000000000926</option><option value="1409044">52990 - 000000006403</option><option value="1414582">33980 - 000000013635</option><option value="1395606">33920 - 000000001459</option><option value="1409046">52990 - 000000003146</option><option value="1409045">52990 - 000000002384</option><option value="1397016">33920 - 000000002156</option><option value="1397148">33920 - 000000002103</option><option value="1408589">33980 - 000000004728</option><option value="1384711">33980 - 000000013710</option><option value="1413596">33980 - 000000005236</option><option value="2578085">33980 - 000000005441</option></select></td><script>
			ccCombo = document.forms.insertrid.num_rapporto;
		</script>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr>
<td class="sottoTitoloTabella old-sectionTitle" colspan="4" height="20"><h3 class="new-titleSection">
																				Dati Debitore
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Ragione sociale
		</td><td class="col-2" style="width: 50%;"><input maxlength="90" name="descrizione_debitore" onchange="checkValue('descrizione_debitore','','FALSE','STRING', '1', '90','Deb.')" style="width:315px;" type="text" value="" class="new-form-control"><a href="javascript:lookupclientisearch()"><img alt="Cerca debitore" border="0" height="17" src="newstyle/img/cerca.gif" width="19"></a><script type="text/javascript">
			   
			   function lookupclientisearch()
			   {
					if (accounteerCombo.value =="")
					{
						alert("Selezionare l'Intestatario!");
					}
					else
					{
						if(document.insertrid.descrizione_debitore.value=="")
						{
							gotoservlet("lookupclientisearch?intestatario="+accounteerCombo.value,"CercaNominativo");
						}
						else
						{
							gotoservlet("lookupclientisearch?ragione_sociale="+document.insertrid.descrizione_debitore.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					 }
				 }
				 
			</script></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left;"><input class="new-form-control" maxlength="12" name="codice_cliente_anagrafica" onchange="checkValue('codice_cliente_anagrafica','','FALSE','STRING', '1', '12','Codice')" size="12" style="width:135;" type="input" value=""><a href="javascript:lookupclientisearchWithCod()"><img alt="Cerca Codice Debitore" border="0" height="17" src="newstyle/img/cerca.gif" width="19"></a><script type="text/javascript">
			   
			   function lookupclientisearchWithCod()
			   {
					if (accounteerCombo.value =="")
					{
						alert("Selezionare l'Intestatario!");
					}
					else
					{
						if(document.insertrid.codice_cliente_anagrafica.value=="")
						{
							gotoservlet("lookupclientisearch?intestatario="+accounteerCombo.value,"CercaNominativo");
						}
						else
						{
							gotoservlet("lookupclientisearch?codice_cliente="+document.insertrid.codice_cliente_anagrafica.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					 }
				 }
				 
			</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Codice cliente Rid<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input class="new-form-control" maxlength="16" name="codice_cliente_debitore" onchange="checkValue('codice_cliente_debitore','','TRUE','STRING', '1', '16','Codice cliente Rid')" style="width:135;" type="input" value=""></td><td align="left" class="rigaScura col-3" style="width: 12%; text-align: left;">
			Tipo Codice Rid
		</td><td class="col-4" style="width: 33%; text-align: left;"><select name="tipo_codice" size="1" style="width:135" class="new-form-control"><option value="1">1 - utenza</option><option value="2">2 - matricola</option><option value="3">3 - codice fiscale</option><option value="4">4 - codice cliente</option><option value="5">5 - codice fornitore</option><option value="6">6 - portafoglio commerciale</option><option value="9">9 - altri</option></select><script>
					selectComboByOptionValue(document.insertrid.tipo_codice,'4');
				</script></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1 oRight" width="125" style="width: 15%; text-align: left;"></td><td align="left" colspan="3">
<table>
<tbody><tr class="rigaScura">
<td class="" colspan="2">
			ABI<span class="testoRedSmallBold">* </span></td><td class=""><input class="new-form-control" maxlength="5" name="codice_abi_domiciliataria" onkeypress="return onlyNaturalNumbers(event);" onchange="checkValue('codice_abi_domiciliataria','','TRUE','ABI_CAB', '5', '5','ABI')" size="5" type="input" value=""></td><td align="center" class="" style="min-width: 110px;"><a class="old-fieldSearch" href="javascript:lookupagency();"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><script type="text/javascript">
				
					function lookupagency()
					{
						if(document.insertrid.codice_abi_domiciliataria.value=="")
							gotoservlet("lookupagency","CercaAgenzia");
						else
							gotoservlet("lookupagency?cod-abi="+document.insertrid.codice_abi_domiciliataria.value+"&command=Cerca","CercaAgenzia");
					}
				
		</script>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="8"><input name="banca" type="hidden"><td align="center" class="old-buttons" colspan="2" height="30">
<br>

																								&nbsp;
																							
																								&nbsp;
																							</td>
</tr>
<tr>
<td align="left" class="testoRedSmallBold" style="color: rgb(0,59,121)">
                                                  * campi obbligatori
                                                </td><td class="testoRedSmallBold oRight">
																						&nbsp;
																						</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input class="btn" onclick="return  doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return  doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					if (!hiddenCampiOrdinante){
						fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
						fillBanche(createParameterObjectFromCombos(null,accounteerCombo,null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
						fillCCDispoEnable(createParameterObjectFromCombos(null,accounteerCombo,bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, false);
					}
					// =================== modifica ================ //
					
					// ============= modifica o retry =============== //
					if (!hiddenCampiOrdinante)
					{
						
								if(ccCombo.length==2)
									ccCombo.selectedIndex=1;
								fillInput();
							
					}
					else
					{
						document.insertrid.command.value = 'modifica_distinta';
					}
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>
