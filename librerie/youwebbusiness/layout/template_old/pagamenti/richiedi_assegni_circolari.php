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
						var ccInput = null;
						var signInput = null;
						var cfInput = null;
					
				</script>
<table class="larghezzaEsterna">
<tbody>
<tr>
<td>
<form action="insertpagasscirc" method="post" name="insertpag">
<input name="dialog_message_title" type="hidden" value="Creazione distinte">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr valign="top">
<td align="center" colspan="3">
<table align="right" border="0" cellpadding="2" cellspacing="0">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>
																&nbsp;Richiedi Assegni Circolari
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/AssegniCircolari.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
															&nbsp;Dati Ordinante
														</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara"><input name="tipo_fornitore" type="hidden" value="I"><input name="timestamp" type="hidden" value="30/09/2019 14:40:45"><script>
			document.forms.insertpag.timestamp.value = '30/09/2019 14:40:45';
		</script><input name="segno" type="hidden" value="+"><input name="tipo_codice" type="hidden" value="9"><input name="indirizzo_ordinante" type="hidden" value=""><input name="localita_ordinante" type="hidden" value=""><input name="codice_fiscale_cliente" type="hidden" value=""><input name="id_disposizione" type="hidden" value="">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
			Ordinante
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); fillInput();" style="width:335px" class="new-form-control"><option value=""></option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select><script>
				accounteerCombo = document.forms.insertpag.intestatario;
			</script></td><td align="left" class="col-3" width="55px" style="width: 12%; text-align: left;">
			SIA
		</td><td class="col-4" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"><script>
				siaInput = document.forms.insertpag.codice_azienda;
			</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Descr. Ordinante
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="30" name="denominazione_ordinante" onchange="checkValue('denominazione_ordinante','','TRUE','STRING', '1', '30','Descr. Ordinante')" style="width:335px" type="text" value="" class="new-form-control"><script>
				signInput = document.forms.insertpag.denominazione_ordinante;
			</script></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			C.F/P.I
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_fiscale_ordinante" onchange="checkValue('codice_fiscale_ordinante','','TRUE','CF_PIVA', '11', '16','Codice Fiscale - P.IVA')" style="width:158px" type="text" value="" class="new-form-control"><script>
				cfInput = document.forms.insertpag.codice_fiscale_ordinante;
			</script></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" title="Abi - Descrizione Banca" width="125px" style="width: 15%; text-align: left;">
			Banca
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%;"><select name="numero_abi_ordinante" onchange="fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);fillInput();setAbiIban();" style="width:335px" class="new-form-control"><option value=""></option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select><script>
				bankCombo = document.forms.insertpag.numero_abi_ordinante;
			</script></td><td align="left" class="col-3" title="Cab - Descrizione Conto" width="55px" style="width: 12%; text-align: left;">
			Conto
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="id_conto_ordinante" onchange="cabInput.value = fitToLength(getCabCode(this, ''),0,5); ccInput.value = fitToLength(getAccount(this, ''),0,12); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput(); setAbiIban();initCodiceUnivoco();" style="width:158px" class="new-form-control"><option value=""></option><option value="1382733">33980 - 000000004831</option><option value="1380486">33980 - 000000004688</option><option value="1413595">33920 - 000000001748</option><option value="1408587">33980 - 000000003827</option><option value="1396342">33920 - 000000001521</option><option value="1408588">33980 - 000000004099</option><option value="1408730">52990 - 000000006780</option><option value="1396089">33920 - 000000002328</option><option value="1411360">33980 - 000000005354</option><option value="1415552">33980 - 000000013652</option><option value="1395353">33920 - 000000002375</option><option value="1414344">33980 - 000000013607</option><option value="1414345">33980 - 000000013608</option><option value="1384710">33980 - 000000005325</option><option value="1405924">32800 - 000000011399</option><option value="1414346">33980 - 000000013609</option><option value="1409042">52990 - 000000002598</option><option value="1409041">52990 - 000000005950</option><option value="1409043">52990 - 000000000926</option><option value="1409044">52990 - 000000006403</option><option value="1414582">33980 - 000000013635</option><option value="1395606">33920 - 000000001459</option><option value="1409046">52990 - 000000003146</option><option value="1409045">52990 - 000000002384</option><option value="1397016">33920 - 000000002156</option><option value="1397148">33920 - 000000002103</option><option value="1408589">33980 - 000000004728</option><option value="1384711">33980 - 000000013710</option><option value="1413596">33980 - 000000005236</option><option value="2578085">33980 - 000000005441</option></select><script>
				ccCombo = document.forms.insertpag.id_conto_ordinante;
			</script></td>
</tr>
</tbody></table>
</td>
</tr>
<input name="codice_abi_ordinante" type="hidden" value=""><script>abiInput = document.forms.insertpag.codice_abi_ordinante;</script><input name="cab_ordinante" type="hidden" value=""><script>cabInput = document.forms.insertpag.cab_ordinante;</script><input name="conto_ordinante" type="hidden" value=""><script>
		ccInput = document.forms.insertpag.conto_ordinante;
		</script>
<tr class="rigaScura" height="20">
<td>
<table border="0" cellpadding="3" cellspacing="0" class="rigachiara old-inputForm" width="100%">
<tbody><tr align="left" class="rigaScura">
<td align="left" class="rigaScura col-1" width="125px" style="width: 15%; text-align: left;">
																				IBAN
																				<span class="testoRedSmallBold"></span></td><td align="left" class="rigaScura col-2" style="width: 50%;"><input id="iban_ordinante" name="iban_ordinante" readonly="" style="width:335px" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
															&nbsp;Dati Beneficiario
														</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" title="Rag. Soc. Beneficiario" width="125px" style="width: 15%; text-align: left;">
			Ragione Sociale
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%; min-width: 110px;"><input id="ragione_sociale_anagrafica" maxlength="90" name="descrizione_destinatario" onchange="checkValue('descrizione_destinatario','','TRUE','STRING', '1', '90','Rag. Soc. Beneficiario')" style="width:315px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearch()" name="lenteAbi"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupcreditorisearch()
					{
						var lookupServlet = "lookupfornitorisearch";
						
						if (accounteerCombo.value == "")
						{
							alert("Selezionare prima un intestatario");
						}
						else
						{
							if(document.insertpag.descrizione_destinatario.value=="")
							{
								redirect = lookupServlet+"?intestatario="+accounteerCombo.value;
							}
							else
							{
								redirect = lookupServlet+"?descrizione_destinatario="+document.insertpag.descrizione_destinatario.value+"&command=Cerca&intestatario="+accounteerCombo.value;
							}
							gotoservlet(redirect,"CercaNominativo");
						}
					}
				
			</script></td><td align="left" class="col-3" title="Cod. Beneficiario" width="55px" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input id="codice_anagrafica" maxlength="16" name="codice_cliente_beneficiario" onchange="checkValue('codice_cliente_beneficiario','','FALSE','STRING', '1', '16','Cod. Beneficiario')" style="width:135px;" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupcreditorisearchWithCod()
					{
						var lookupServlet = "lookupfornitorisearch";
						
						if (accounteerCombo.value == "")
						{
							alert("Selezionare prima un intestatario");
						}
						else
						{
							if(document.insertpag.codice_cliente_beneficiario.value=="")
							{
								redirect = lookupServlet+"?intestatario="+accounteerCombo.value;
							}
							else
							{
								redirect = lookupServlet+"?codice_cliente_beneficiario="+document.insertpag.codice_cliente_beneficiario.value+"&command=Cerca&intestatario="+accounteerCombo.value;
							}
							gotoservlet(redirect,"CercaNominativo");
						}
					}
				
			</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Indirizzo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="30" name="indirizzo_destinatario" onchange="checkValue('indirizzo_destinatario','','TRUE','STRING', '1', '30','Indirizzo')" style="width:335px" type="text" value="" class="new-form-control"></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			CAP
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cap_destinatario" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cap_destinatario','','TRUE','STRING', '5', '5','CAP')" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Comune
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="50" name="comune" onchange="checkValue('comune','','TRUE','STRING', '1', '50','Comune')" style="width:335px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			Prov.
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia" onkeypress="return onlyAlpha(event)" onchange="checkValue('provincia','','TRUE','STRING', '1', '2','Prov.')" style="width:30px" type="text" value="" class="new-form-control"></td><input name="comune_sigla_prov" type="hidden">
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1-iban-quietanza oRight" style="width: 17%;"><input checked="true" name="abiIban" onclick="setAbiIban();" type="radio" value="1"></td><td class="col-2" colspan="3" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="" width="40px">
			IBAN
		</td><td class="" width="100px"><input class="new-form-control" maxlength="27" name="iban_destinatario" onchange="document.insertpag.iban_destinatario.value = document.insertpag.iban_destinatario.value.toUpperCase();" style="width: 210px; background-color: rgb(224, 224, 224);" type="input" value="" readonly=""></td><td align="left" class=""><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/CoordinateConto/CoordinateConto.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1-iban-quietanza oRight" width="145px" style="width: 17%;"><input name="abiIban" onclick="setAbiIban();" type="radio" value="0"></td><td class="col-2" colspan="3" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="" width="40px">
			ABI
		</td><td class="" width="90px" style="min-width: 110px;"><input name="codice_abi_destinataria" onchange="checkValue('codice_abi_destinataria','','FALSE','ABI_CAB', '5', '5','ABI')" type="hidden" value=""><input maxlength="5" name="abiForm" onkeypress="return onlyNaturalNumbers(event)" onblur="checkValue('abiForm','','FALSE','ABI_CAB', '5', '5','ABI')" size="5" type="text" value="" class="new-form-control" style="background-color: rgb(255, 255, 255);"><a class="old-fieldSearch" href="javascript:lookupagency();" name="lenteAbi"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupagency()
					{
						if (document.insertpag.abiIban[1].checked == true)
						{
							if(document.insertpag.abiForm.value == "")
						{
							gotoservlet("lookupagency","CercaAgenzia");
						}
						else
						{
								gotoservlet("lookupagency?cod-abi="+document.insertpag.abiForm.value+"&command=Cerca","CercaAgenzia");
							}
						}
					}
				
			</script></td><td class="" width="45px">
			CAB
		</td><td class="" width="45px"><input name="cab_destinataria" onchange="checkValue('cab_destinataria','','FALSE','ABI_CAB', '5', '5','CAB')" type="hidden" value=""><input maxlength="5" name="cabForm" onkeypress="return onlyNaturalNumbers(event)" onblur="checkValue('cabForm','','FALSE','ABI_CAB', '5', '5','CAB')" size="5" type="text" value="" class="new-form-control" style="background-color: rgb(255, 255, 255);"></td><td class="oRight" width="20px"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td align="center" class="" width="60px">
			Conto
		</td><td class="" width="105px"><input name="conto_destinatario" onchange="checkValue('conto_destinatario','','FALSE','ACCOUNT', '1', '12','Conto')" type="hidden" value=""><input maxlength="12" name="contoForm" onblur="checkValue('contoForm','','FALSE','ACCOUNT', '1', '12','Conto')" style="width: 95px; background-color: rgb(255, 255, 255);" type="text" value="" class="new-form-control"></td><td align="center" class="" width="36px">
			CIN
		</td><td align="left" class=""><input name="cin_destinatario" onchange="checkValue('cin_destinatario','','FALSE','STRING', '1', '1','CIN')" type="hidden" value=""><input maxlength="1" name="cinForm" onkeypress="return onlyAlpha(event)" onchange="checkValue('cinForm','','FALSE','STRING', '1', '1','CIN')" size="2" type="text" value="" class="new-form-control" style="background-color: rgb(255, 255, 255);"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1-iban-quietanza oRight" width="145px" style="width: 17%;"><input checked="false" name="add_to_anagrafica" type="checkbox" value=""></td><td class="" colspan="3">
			Aggiorna dati anagrafica
		</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
															&nbsp;Dati Assegno
														</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" class="old-inputForm" width="100%">
<input name="banca_sportello_domiciliataria" type="hidden" value="">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
			Importo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="14" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '14','Importo')" style="width:130px" type="text" value="" class="new-form-control">&nbsp;EURO
		</td><input name="codice_divisa" type="hidden" value="E"><input name="modalita_pagamento" type="hidden" value="3"><script>
			
				var modPag = "1";
				if (modPag == '2')
				{
					document.insertpag.modalita_pagamento.value = 2;
				}
				else
				{
					document.insertpag.modalita_pagamento.value = 3;
				}
			
		</script><input name="causale" type="hidden" value="48000"><td align="left" class="col-3" colspan="2" style="width: 12%; text-align: left;">
																		Assegno non trasferibile
																		&nbsp;<input name="tipo_assegno" onblur="setModalita();" type="checkbox"><script>
																			
																				var modPagValue = document.insertpag.modalita_pagamento.value;
																				
																				if (modPagValue == '3') 
																				{
																					document.insertpag.tipo_assegno.checked = true
																					document.insertpag.modalita_pagamento.value;
																				}
																				else
																				{
																					document.insertpag.tipo_assegno.checked = false;
																				}
																			
																		</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Data esecuzione
		</td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="90px"><input class="datepicker new-form-control hasDatepicker" id="Calendario1" maxlength="" name="data_esecuzione_disposizione" onkeypress="return onlyDate(event)" onchange="checkValue('data_esecuzione_disposizione','','FALSE','DATE', '', '','Data esecuzione');" style="width:85px" title="Formato data gg/mm/aaaa" type="text" value=""></td><td align="left"><a class="old-fieldCalendar" href="javascript:showHideFla('data_esecuzione_disposizione','insertpag','1');" onclick="$('#Calendario1').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
						$(function(){
						$('.datepicker').datepicker();
						})
						</script></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Data valuta banca beneficiario
		</td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="90px"><input class="datepicker new-form-control hasDatepicker" id="Calendario2" maxlength="" name="data_valuta_destinataria" onkeypress="return onlyDate(event)" onchange="checkValue('data_valuta_destinataria','','FALSE','DATE', '', '','Valuta');" style="width:85px" title="Formato data gg/mm/aaaa" type="text" value=""></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_valuta_destinataria','insertpag','2');" onclick="$('#Calendario2').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
			Descr. pagamento
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><textarea class="riferimenti_debito_pag area-assegni new-form-control" name="riferimenti_debito" onchange="checkValue('riferimenti_debito','','TRUE','STRING', '0', '0','Descr. pagamento');" rows="4" style="margin-left: 0px; width: 90%;"></textarea></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
			Richiesta esito
		</td><td class="col-2" style="width: 50%;"><select name="flag_richiesta" onchange="setCodiceUnivoco();" style="width:230px" class="new-form-control"><option value="">Nessuna richiesta (Accordi banca)</option><option value="1">Richiesta ordinato</option><option value="2">Richiesta storno</option><option value="3">Entrambi</option><option value="4">Non richiesto esito positivo</option></select></td><td align="left" class="col-3" width="85px" style="width: 12%; text-align: left;">
			Codice univoco
		</td><td class="col-4" width="240px" style="width: 33%; text-align: left;"><input class="new-form-control" maxlength="30" name="codice_univoco" style="width:240px" value=""></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr valign="bottom">
<td align="center" class="old-buttons" height="30">
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
</div><div class="new-buttons"><input name="TIPO" type="hidden" value="201" class="btn"><input name="banca" type="hidden" value="" class="btn"><input name="tm_type" type="hidden" value="ASSEGNI_CIRCOLARI" class="btn"><input class="btn" id="go" name="command" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" id="go" name="command" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"></div>
</div>
</form>
</td>
</tr>
</tbody>
</table>
<script>
					
						document.insertpag.add_to_anagrafica.checked = false;
						fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					
					
							
							fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
							fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, true);
							//if(ccCombo.length>=2) ccCombo.selectedIndex=1;

							if (ccCombo.selectedIndex>0) //selez banca e intest. da conto
							{
								fillFromCC(accounteerCombo, bankCombo, ccCombo);
							}
							fillInput();
							
						
					//if(ccCombo.length>=2) ccCombo.selectedIndex=1;
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>