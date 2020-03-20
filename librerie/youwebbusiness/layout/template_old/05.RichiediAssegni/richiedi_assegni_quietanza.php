<body background="img/05034/background5.gif" class="sfondo" leftmargin="0" marginheight="0" marginwidth="0" onload="onBodyLoad();" topmargin="0">
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
<form action="insertpagassquie" method="post" name="insertpag">
<input name="dialog_message_title" type="hidden" value="Creazione distinte">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
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
<td align="left" class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>Richiedi Assegni di Quietanza<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/AssegniQuietanza.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./ibbweb/newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
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
<td class="rigachiara"><input name="tipo_fornitore" type="hidden" value="I"><input name="timestamp" type="hidden" value="18/09/2019 17:08:31"><script>
			document.forms.insertpag.timestamp.value = '18/09/2019 17:08:31';
		</script><input name="segno" type="hidden" value="+"><input name="tipo_codice" type="hidden" value="9"><input name="indirizzo_ordinante" type="hidden" value=""><input name="localita_ordinante" type="hidden" value=""><input name="codice_fiscale_cliente" type="hidden" value=""><input name="id_disposizione" type="hidden" value="">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Ordinante
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); fillInput();" style="width:335px" class="new-form-control"><option value=""></option><option value="12">CONSORZIO P.R.U. STADIO CONE..</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select><script>
				accounteerCombo = document.forms.insertpag.intestatario;
			</script></td><td align="left" class="col-3" width="55" style="width: 12%; text-align: left;">
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
			</script></td><td align="left" class="col-3" style="text-align: left; width: 12%;">
			C.F/P.I
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_fiscale_ordinante" onchange="checkValue('codice_fiscale_ordinante','','TRUE','CF_PIVA', '11', '16','Codice Fiscale - P.IVA')" style="width:158" type="text" value="" class="new-form-control"><script>
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
<td align="left" class="col-1" title="Abi - Descrizione Banca" width="125" style="width: 15%; text-align: left;">
			Banca
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335" style="width: 50%;"><select name="numero_abi_ordinante" onchange="fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);fillInput();setAbiIban();" style="width:335px" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1102">01005 - BANCA NAZIONALE DEL LAVORO SPA</option><option value="2028">03069 - INTESA SANPAOLO SPA</option><option value="1207">01030 - BANCA MONTE DEI PASCHI DI SIENA S.P.A.</option><option value="1209">02008 - UNICREDIT SPA</option><option value="1212">03002 - UNICREDIT BANCA DI ROMA SPA</option><option value="1291">03500 - BANCO DI BRESCIA S.P.A.</option><option value="1311">05024 - BANCA AGRICOLA MANTOVANA S.P.A.</option><option value="1313">05040 - BANCA ANTONVENETA</option><option value="1325">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="1341">05387 - BPER BANCA S.P.A.</option><option value="1422">06225 - CASSA DI RISPARMIO DEL VENETO</option></select><script>
				bankCombo = document.forms.insertpag.numero_abi_ordinante;
			</script></td><td align="left" class="col-3" style="text-align: left; width: 12%;" title="Cab - Descrizione Conto" width="55">
			Conto
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="id_conto_ordinante" onchange="cabInput.value = fitToLength(getCabCode(this, ''),0,5); ccInput.value = fitToLength(getAccount(this, ''),0,12); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput(); setAbiIban(); initCodiceUnivoco();" style="width:158" class="new-form-control"><option value=""></option><option value="812850">61620 - 000000004263</option><option value="1163764">11751 - 000000000342</option><option value="1338134">11700 - alias</option><option value="1272210">11702 - alias</option><option value="2177932">18465 - 100000001175</option><option value="2556607">11702 - pippo</option><option value="1306091">11751 - alias conto 000000365990</option><option value="2177949">18465 - 100000001022</option><option value="9055">11700 - 000000012648</option><option value="11493">11701 - 000000386065</option><option value="2156215">11701 - 000000815942</option><option value="2538955">05364 - 000104866179</option><option value="2538954">05364 - 000104961280</option><option value="2177539">18465 - 100000001579</option><option value="1654446">11702 - 000000002013</option><option value="1276558">11702 - 000000122821</option><option value="1598381">11702 - 000002366573</option><option value="2563167">11702 - 000003016271</option></select><script>
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
<td align="left" class="rigaScura col-1" width="125" style="width: 15%; text-align: left;">
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
<td align="left" class="col-1" title="Rag. Soc. Beneficiario" width="125" style="width: 15%; text-align: left;">
			Ragione Sociale
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335" style="width: 50%; min-width: 110px;"><input id="ragione_sociale_anagrafica" maxlength="90" name="descrizione_destinatario" onchange="checkValue('descrizione_destinatario','','TRUE','STRING', '1', '90','Rag. Soc. Beneficiario')" style="width:315px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearch()" name="lenteAbi"><img src="./ibbweb/newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
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
				
			</script></td><td align="left" class="col-3" title="Cod. Beneficiario" width="55" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input id="codice_anagrafica" maxlength="16" name="codice_cliente_beneficiario" onchange="checkValue('codice_cliente_beneficiario','','FALSE','STRING', '1', '16','Cod. Beneficiario')" style="width:135;" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearchWithCod()"><img src="./ibbweb/newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
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
<td class="col-1-iban-quietanza oRight" style="width: 17%;"><input checked="true" name="abiIban" onclick="setAbiIban();" type="radio" value="1"></td><td colspan="3">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="" style="text-align: center;" width="40">
			IBAN
		</td><td class="" width="100"><input maxlength="27" name="iban_destinatario" onchange="document.insertpag.iban_destinatario.value = document.insertpag.iban_destinatario.value.toUpperCase();" style="width: 250px; background-color: rgb(255, 255, 255);" type="text" value="" class="new-form-control"></td><td align="left" class=""><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/CoordinateConto/CoordinateConto.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./ibbweb/newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td width="145" class="oRight"><input name="abiIban" onclick="setAbiIban();" type="radio" value="0"></td><td colspan="3">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="" width="40">
			ABI
		</td><td class="" width="90" style="min-width: 110px;"><input name="codice_abi_destinataria" onchange="checkValue('codice_abi_destinataria','','FALSE','ABI_CAB', '5', '5','ABI')" type="hidden" value=""><input maxlength="5" name="abiForm" onkeypress="return onlyNaturalNumbers(event)" onblur="checkValue('abiForm','','FALSE','ABI_CAB', '5', '5','ABI')" size="5" type="text" value="" class="new-form-control" readonly="" style="background-color: rgb(224, 224, 224);"><a class="old-fieldSearch" href="javascript:lookupagency();" name="lenteAbi"><img src="./ibbweb/newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
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
				
			</script></td><td class="" width="45">
			CAB
		</td><td class="" width="45"><input name="cab_destinataria" onchange="checkValue('cab_destinataria','','FALSE','ABI_CAB', '5', '5','CAB')" type="hidden" value=""><input maxlength="5" name="cabForm" onkeypress="return onlyNaturalNumbers(event)" onblur="checkValue('cabForm','','FALSE','ABI_CAB', '5', '5','CAB')" size="5" type="text" value="" class="new-form-control" readonly="" style="background-color: rgb(224, 224, 224);"></td><td class="oRight" width="20"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./ibbweb/newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td align="center" class="" width="60">
			Conto
		</td><td class="" width="105"><input name="conto_destinatario" onchange="checkValue('conto_destinatario','','FALSE','ACCOUNT', '1', '12','Conto')" type="hidden" value=""><input maxlength="12" name="contoForm" onblur="checkValue('contoForm','','FALSE','ACCOUNT', '1', '12','Conto')" style="width: 95px; background-color: rgb(224, 224, 224);" type="text" value="" class="new-form-control" readonly=""></td><td align="center" class="" width="36">
			CIN
		</td><td align="left" class=""><input name="cin_destinatario" onchange="checkValue('cin_destinatario','','FALSE','STRING', '1', '1','CIN')" type="hidden" value=""><input maxlength="1" name="cinForm" onkeypress="return onlyAlpha(event)" onchange="checkValue('cinForm','','FALSE','STRING', '1', '1','CIN')" size="2" type="text" value="" class="new-form-control" readonly="" style="background-color: rgb(224, 224, 224);"></td>
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
<td class="col-1-iban-quietanza oRight" width="145" style="width: 17%;"><input checked="false" name="add_to_anagrafica" type="checkbox" value=""></td><td class="" colspan="3">
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
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<input name="banca_sportello_domiciliataria" type="hidden" value="">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Importo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="14" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '14','Importo')" style="width:130" type="text" value="" class="new-form-control">&nbsp;EURO
		</td><input name="codice_divisa" type="hidden" value="E"><input name="modalita_pagamento" type="hidden" value="4"><input name="causale" type="hidden" value="48000">
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Data esecuzione
		</td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="90"><input class="datepicker dataEsecuzioneDispoYBW new-form-control hasDatepicker" maxlength="" name="data_esecuzione_disposizione" onkeypress="return onlyDate(event)" onchange="checkValue('data_esecuzione_disposizione','','FALSE','DATE', '', '','Data esecuzione');" style="width:85" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1568819310597"></td><td align="left"><a class="old-fieldCalendar" href="javascript:showHideFla('data_esecuzione_disposizione','insertpag','1');" onclick="
							
							$('.datepicker.dataEsecuzioneDispoYBW').datepicker('show');
							
							"><img src="./ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
						$(function(){
						$('.datepicker').datepicker();
						});
						</script></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Data valuta banca beneficiario
		</td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="90"><input class="datepicker dataValBenYBW new-form-control hasDatepicker" maxlength="" name="data_valuta_destinataria" onkeypress="return onlyDate(event)" onchange="checkValue('data_valuta_destinataria','','FALSE','DATE', '', '','Valuta');" style="width:85" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1568819310598"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_valuta_destinataria','insertpag','2');" onclick="$('.datepicker.dataValBenYBW').datepicker('show');"><img src="./ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
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
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
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
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Richiesta esito
		</td><td class="col-2" style="width: 50%;"><select name="flag_richiesta" onchange="setCodiceUnivoco();" style="width:250" class="new-form-control"><option value="">Nessuna richiesta (Accordi banca)</option><option value="1">Richiesta ordinato</option><option value="2">Richiesta storno</option><option value="3">Entrambi</option><option value="4">Non richiesto esito positivo</option></select></td><td align="left" class="col-3" width="85" style="width: 12%; text-align: left;">
			Codice univoco
		</td><td class="col-4" width="240" style="width: 33%; text-align: left;"><input maxlength="30" name="codice_univoco" style="width:240" type="text" value="" class="new-form-control"></td>
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
</div><div class="new-buttons"><input name="TIPO" type="hidden" value="202" class="btn"><input name="banca" type="hidden" value="" class="btn"><input name="tm_type" type="hidden" value="ASSEGNI_QUIETANZA" class="btn"><input class="btn" id="go" name="command" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" id="go" name="command" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"></div>
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
					fillInput();
				</script></td>
</tr>

</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body>