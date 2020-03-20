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
					var codice_fiscale = null;
					var siaInput = null;
					var abiInput = null;
					var cabInput = null;
					var ccInput = null;
					var signInput = null;
					
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertap" method="post" name="insertap">
<input name="dialog_message_title" type="hidden" value="Creazione distinte
				">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="
					larghezaInterna
				" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr>
<td align="center" colspan="3">
<table align="center" border="0" cellpadding="0" cellspacing="2" width="100%">
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
<tbody><tr class="titoloTabella">
<td align="left" class="old-pageTitle titoloTabella" height="20"><div class="new-flag"></div><h1>Pagamento Riba Manuale
																					<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/InserimentoEffetti.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr>
<td class="rigaChiara"><input name="segno" type="hidden" value="+">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="6"><h3 class="new-titleSection">
																			Dati Ordinante
																						</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Ordinante
			<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="1" width="340" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); signInput.value = fitToLength(getIntestatario(this, ''),0,30); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5) ; codice_fiscale.value = fitToLength(getCF(this,''),0,16); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select><script>
				accounteerCombo = document.forms.insertap.intestatario;
			</script></td><td align="left" class="col-3" width="60" style="width: 12%; text-align: left;">
			SIA
		</td><td class="col-4" colspan="2" width="90" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"><script>
				siaInput = document.forms.insertap.codice_azienda;
			</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
				Descr. Ordinante<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="1" style="width: 50%;"><input maxlength="30" name="denominazione_azienda" onchange="checkValue('denominazione_azienda','','TRUE','STRING', '1', '30', 'Denom. Ordinante')" style="width:335px" type="text" value="" class="new-form-control"></td><script>
			signInput = document.forms.insertap.denominazione_azienda;
		</script><td align="left" class="col-3" style="width: 12%; text-align: left;">
			C.F./P.I
		</td><td class="col-4" colspan="3" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_fiscale" onchange="warnValue('codice_fiscale','','FALSE','CF_PIVA', '1','Codice Fiscale - P.IVA')" style="width:160px" type="text" value="" class="new-form-control"></td><script>
			codice_fiscale = document.forms.insertap.codice_fiscale;
		</script>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
			Banca
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><select name="numero_abi_ordinante" onchange="fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select><script>
				bankCombo = document.forms.insertap.numero_abi_ordinante;
			</script></td><td style="display: none"><input name="codice_abi_incaricata" readonly="true" size="5" type="hidden" value=""><script>
				abiInput = document.forms.insertap.codice_abi_incaricata;
			</script></td><td style="display: none"><input name="conto_ordinante" type="hidden" value=""><script>
				ccInput = document.forms.insertap.conto_ordinante;
			</script></td><td align="left" class="col-3" title="Cab - Descrizione Conto" style="width: 12%; text-align: left;">
			Conto
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="id_conto_ordinante" onchange="cabInput.value = fitToLength(getCabCode(this, ''),0,5); ccInput.value = fitToLength(getAccount(this, ''),0,12); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" style="width:160px" class="new-form-control"><option value=""></option><option value="1382733">33980 - 000000004831</option><option value="1380486">33980 - 000000004688</option><option value="1413595">33920 - 000000001748</option><option value="1408587">33980 - 000000003827</option><option value="1396342">33920 - 000000001521</option><option value="1408588">33980 - 000000004099</option><option value="1408730">52990 - 000000006780</option><option value="1396089">33920 - 000000002328</option><option value="1411360">33980 - 000000005354</option><option value="1415552">33980 - 000000013652</option><option value="1395353">33920 - 000000002375</option><option value="1414344">33980 - 000000013607</option><option value="1414345">33980 - 000000013608</option><option value="1384710">33980 - 000000005325</option><option value="1405924">32800 - 000000011399</option><option value="1414346">33980 - 000000013609</option><option value="1409042">52990 - 000000002598</option><option value="1409041">52990 - 000000005950</option><option value="1409043">52990 - 000000000926</option><option value="1409044">52990 - 000000006403</option><option value="1414582">33980 - 000000013635</option><option value="1395606">33920 - 000000001459</option><option value="1409046">52990 - 000000003146</option><option value="1409045">52990 - 000000002384</option><option value="1397016">33920 - 000000002156</option><option value="1397148">33920 - 000000002103</option><option value="1408589">33980 - 000000004728</option><option value="1384711">33980 - 000000013710</option><option value="1413596">33980 - 000000005236</option><option value="2578085">33980 - 000000005441</option></select><script>
				ccCombo = document.forms.insertap.id_conto_ordinante</script></td><td style="display: none"><input name="cab_incaricata" readonly="true" size="5" type="hidden" value=""><script>
				cabInput = document.forms.insertap.cab_incaricata;
			</script></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigaChiara">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																			Dati Creditore
																						</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="127" style="width: 15%; text-align: left;">
			Ragione sociale
		</td><td class="col-2" width="360" style="width: 50%;">
<table class="old-inputForm">
<tbody><tr>
<td><input id="ragione_sociale_anagrafica" maxlength="90" name="cliente_creditore" onchange="checkValue('cliente_creditore','','FALSE','STRING', '1', '90','Rag.Soc.Creditore')" style="width:335px" type="text" value="" class="new-form-control"></td><td style="min-width: 110px;"><a class="old-fieldSearch" href="javascript:lookupfornitorisearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
						   
								function lookupfornitorisearch()
								{
									var lookupServlet = "lookupfornitorisearch";
									
									if (accounteerCombo.value == "")
									{
										alert("Selezionare prima un intestatario");
									}
									else
									{
										if(document.insertap.cliente_creditore.value=="")
										{
											redirect = lookupServlet+"?intestatario="+accounteerCombo.value;
										}
										else
										{
											redirect = lookupServlet+"?descrizione_destinatario="+document.insertap.cliente_creditore.value+"&command=Cerca&intestatario="+accounteerCombo.value;
										}
										gotoservlet(redirect,"CercaNominativo");
									}
								}
							
						</script></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" width="95" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td><input id="codice_anagrafica" name="codice_cliente_creditore" style="width:85px" type="text" value="" class="new-form-control"></td><td style="min-width: 110px;"><a class="old-fieldSearch" href="javascript:lookupfornitorisearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
						   
								function lookupfornitorisearchWithCod()
								{
									var lookupServlet = "lookupfornitorisearch";
									
									if (accounteerCombo.value == "")
									{
										alert("Selezionare prima un intestatario");
									}
									else
									{
										if(document.insertap.codice_cliente_creditore.value=="")
										{
											redirect = lookupServlet+"?intestatario="+accounteerCombo.value;
										}
										else
										{
											redirect = lookupServlet+"?codice_cliente_creditore="+document.insertap.codice_cliente_creditore.value+"&command=Cerca&intestatario="+accounteerCombo.value;
										}
										gotoservlet(redirect,"CercaNominativo");
									}
								}
							
						</script></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigaChiara">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																			Dati Effetto
																						</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<input name="causale" style="width:100px" type="hidden" value="31000"><td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Causale<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><select id="itc_causale" name="itc_causale" onchange="controllaCausale()" class="new-form-control"><option value="31000">31000 - Ritiro Effetti</option><option value="31100">31100 - Rifiuto Effetti</option></select></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Importo<span class="testoRedSmallBold">*</span></td><td class="col-2" width="340" style="width: 50%;"><input maxlength="14" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '','Importo')" style="width:293px" type="text" value="" class="new-form-control">
			EURO
		</td><td align="left" class="col-3" width="115" style="width: 12%; text-align: left;">
					Data scadenza<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td><input class="datepicker dataScadenzaYBW new-form-control hasDatepicker" id="Calendario1" maxlength="" name="data_scadenza" onkeypress="return onlyDate(event)" onchange="checkValue('data_scadenza','','FALSE','DATE', '', '','Data scadenza');" size="14" title="Formato data gg/mm/aaaa" type="text" value=""></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_scadenza','insertap','1');" onclick="$('#Calendario1').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
									$(function(){
										$('#Calendario1').datepicker();
									})
								</script></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Numero avviso<span class="testoRedSmallBold">*</span></td><td class="col-2" width="340" style="width: 50%;"><input maxlength="36" name="numero_avviso" onchange="checkValue('numero_avviso','','TRUE','STRING', '1', '36','Numero avviso')" style="width:293px" type="text" value="" class="new-form-control"></td><td colspan="2" style="
					width: 45%; padding-left: 10px;
				">
<table>
<tbody><tr class="rigaScura">
<td align="left" class="" width="38">
			ABI<span class="testoRedSmallBold" id="asteriscoAbi" style="visibility: visible;">*</span></td><td class="" width="48">
<table class="old-inputForm">
<tbody><tr class="rigaScura">
<td><input maxlength="5" name="codice_abi_domiciliataria" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValueAbiDomiciliataria('codice_abi_domiciliataria','','ABI_CAB', '5', '5','ABI')" size="5" type="text" value="" class="new-form-control" style="background-color: rgb(255, 255, 255);"></td><td style="min-width: 35px;"><a class="old-fieldSearch2" href="javascript:lookupagency()"><img src="./newstyle/images/ico-filter.png" class="new-search2" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
							
							  function lookupagency()
							  {
								  if(document.insertap.codice_abi_domiciliataria.value=="")
								  {
									  gotoservlet("lookupagency","CercaAgenzia");
								  }
								  else
								  {
									  gotoservlet("lookupagency?cod-abi="+document.insertap.codice_abi_domiciliataria.value+"&command=Cerca","CercaAgenzia");
								  }
							  }
							  
						</script></td>
</tr>
</tbody></table>
</td><td align="center" class="" width="52">CAB<span class="testoRedSmallBold" id="asteriscoCab" style="visibility: visible;">*</span></td><td align="" class="">
<table class="old-inputForm">
<tbody><tr>
<td><input maxlength="5" name="cab_domiciliataria" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValueCabDomiciliataria('cab_domiciliataria','','ABI_CAB', '5', '5','CAB')" size="5" type="text" value="" class="new-form-control" style="background-color: rgb(255, 255, 255);"></td><td align="left"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td>
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
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Tipo effetto
		</td><td class="col-2" width="340" style="width: 50%;"><select name="tipo_effetto" size="1" style="width:293px" class="new-form-control"><option value="10">Effetto con spese - 10</option><option value="20">Effetto senza spese - 20</option><option value="30">Ri.Ba. - 30</option></select></td><td colspan="2" style="width: 45%; padding-left: 10px;">
																												A vista
																												&nbsp;&nbsp;
																												<input name="flag_vista_chk" onclick="setHiddenField('');" type="checkbox" value=""><input name="flag_vista" type="hidden" value="1"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="28"><input name="banca" type="hidden" value=""><script>
																										controllaCausale();
																									</script><td align="center" class="old-buttons" height="30">
<br>

																											&nbsp;
																										
																											&nbsp;
																										</td>
</tr>
<tr>
<td align="left" class="testoRedSmallBold" style="color: rgb(0,59,121)">
                                                																* campi obbligatori
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
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input class="btn" name="command" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" name="command" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					
					
						fillBanche(createParameterObjectFromCombos(null,accounteerCombo,null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
						fillCCDispoEnable(createParameterObjectFromCombos(null,accounteerCombo,bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, true);
						if (ccCombo.selectedIndex>0) //selez banca e intest. da conto
						{
						   fillFromCC(accounteerCombo, bankCombo, ccCombo);
						}
						fillInput();
						selectComboElementByValue(document.insertap.tipo_effetto,'10');
						
						</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>