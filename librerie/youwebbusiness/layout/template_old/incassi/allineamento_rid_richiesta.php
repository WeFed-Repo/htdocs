<body background="img/05034/background5.gif" class="sfondoesterno" leftmargin="0" marginheight="0" marginwidth="0" onload="setAbiIban(); visualizzaObbligatori();setAbiIbanVar(); visualizzaObbligatoriVar();rataImportoObligatorio();" topmargin="0">
<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
					
            			initializeContextSelectorLibrary(parent.context);
						var accounteerCombo = null;
						var bankCombo = null;
						var siaInput = null;
						var abiInput = null;
						
						if (adeguamentiCbi)
						{					
							loadLocationForGroup(parent.context);
						}
						
					
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertal" method="post" name="insertAL">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="sfondointerno" height="100%" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr valign="top">
<td align="center">
<table align="center" border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="titoloTabella">
<div class="new-flag"></div>
<h1>
																	Allineamento RID
																	&nbsp;-&nbsp;
																	Causale
																	90211<input name="causale" type="hidden" value="90211">	
																	&nbsp;-&nbsp;
																	Richiesta autorizzazione addebito in conto<input name="descrizione_causale" type="hidden" value="Richiesta autorizzazione addebito in conto">
<a class="old-pageHelp" href="#" onclick="NewWin1=window.open(transformNewHelp('./html/help/AreaDispositiva/AllineamentoArchivi/90211.htm'),'NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">&nbsp;Dati Ordinante</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr><td colspan="4">
</td></tr><tr class="rigaScura" height="20">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
					Ordinante
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="47%" style="width: 50%;"><select name="intestatario" onchange="fillBancheAllineamentoArchivi(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5);  abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5);" style="width:100%" class="new-form-control"><option value=""></option><option value="106609">AUTOMOBILE CLUB MODENA</option></select></td><script>
			accounteerCombo = document.forms.insertAL.intestatario;
		</script><td class="layervoci col-3 oRight" width="14%" style="width: 12%; text-align: left;">
			SIA
		</td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" style="width:30%" type="text" value="" class="new-form-control"></td><script>siaInput = document.forms.insertAL.codice_azienda;</script>
</tr>
<tr class="rigaScura" height="20">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
					Banca Allineam.
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="47%" style="width: 50%;"><select name="numero_abi_ordinante" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5); " style="width:100%" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option></select><script>bankCombo = document.forms.insertAL.numero_abi_ordinante;</script></td><td class="layervoci col-3 oRight" width="14%" style="width: 12%; text-align: left;">
			ABI
		</td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input name="abi_allineamento" readonly="true" style="width:30%" type="text" value="" class="new-form-control"></td><script>abiInput = document.forms.insertAL.abi_allineamento;</script>
</tr>

</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella">
<td class="old-sectionTitle" height="20"><h3 class="new-titleSection">&nbsp;Dati Debitore</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<input name="data_creazione" type="hidden" value=""><input name="codice_abi_var" type="hidden" value=""><input name="abi_var_form" type="hidden" value=""><input name="cab_conto_addebito_var" type="hidden" value=""><input name="cab_var_form" type="hidden" value=""><input name="conto_addebito_var" type="hidden" value=""><input name="cc_var_form" type="hidden" value=""><input name="cin" type="hidden" value=""><input name="cin_var_form" type="hidden" value=""><input name="codice_individuale_var" type="hidden" value=""><input name="tipo_cod_individuale_var" type="hidden" value=""><input name="codice_azienda_var" type="hidden" value=""><input name="riferimenti_originari" type="hidden" value=""><input name="codice_divisa" type="hidden" value="E"><input name="descrizione" type="hidden" value=""><input name="carattere_speciale" type="hidden" value="%"><input name="intestatario_conto" type="hidden" value=""><input name="codice_paese_var" type="hidden" value=""><input name="check_digit_var" type="hidden" value=""><input name="codice_azienda_12" type="hidden" value="">
<tbody><tr>
<td colspan="6">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci" height="20" style="
				padding-left: 10px; width: 17%;
			" width="18%">
									Ragione Sociale
									<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%; min-width: 110px;"><input maxlength="50" name="ragione_sociale_debitore" onchange="checkValue('ragione_sociale_debitore','','TRUE','STRING', '0', '50','Ragione Sociale');" style="width:90%" type="text" value="" class="new-form-control"><a href="javascript:lookupclientisearch();" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
			
			function lookupclientisearch()
			{
				if (accounteerCombo.value =="")
				{
					alert("Selezionare prima un intestatario");
				}
				else
				{
					gotoservlet("lookupclientisearch?ragione_sociale="+document.insertAL.ragione_sociale_debitore.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
				}
			}
			
			</script></td><td class="layervoci col-3 oRight" height="20" width="14%" style="width: 12%; text-align: left;">
									Codice
								</td><td class="col-4" width="21%" style="width: 33%; text-align: left; min-width: 110px;"><input class="new-form-control" maxlength="20" name="codice_cliente_anagrafica" style="width:85%"><a href="javascript:lookupclientisearchWithCode();" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
		
		function lookupclientisearchWithCode()
		{
			if (accounteerCombo.value =="")
			{
				alert("Selezionare prima un intestatario");
			}
			else
			{
				gotoservlet("lookupclientisearch?codice_cliente="+document.insertAL.codice_cliente_anagrafica.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
			}
		}
		
		</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" height="20" width="18%" style="width: 15%; text-align: left;">
									Cod. Fiscale/P. IVA
								</td><td style="
				padding-left: 10px;
			" width="17%"><input maxlength="16" name="codice_fiscale_piva" onkeypress="return onlyAlphaNumbers(event)" onchange="checkValue('codice_fiscale_piva','','FALSE','CF_PIVA', '11', '16','Cod. Fiscale/P. IVA')" style="width:100%" type="text" value="" class="new-form-control"></td><td class="layervoci oRight" style="
				float: none;
			" width="15%">
									Codice cliente
									<span class="testoRedSmallBold">*</span></td><td class="col-4" width="14%" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_individuale" onchange="checkValue('codice_individuale','','TRUE','STRING', '1', '16','Codice cliente')" size="16" style="width:100%" type="text" value="" class="new-form-control"></td><td class="layervoci oRight" width="14%">
									Tipo codice
									<span class="testoRedSmallBold">*</span></td><td width="21%"><select name="tipo_cod_individuale" size="1" style="width:85%" class="new-form-control"><option value="1">1&nbsp;-&nbsp;utenza</option><option value="2">2&nbsp;-&nbsp;matricola</option><option value="3">3&nbsp;-&nbsp;codice fiscale</option><option selected="" value="4">4&nbsp;-&nbsp;codice cliente</option><option value="5">5&nbsp;-&nbsp;codice fornitore</option><option value="6">6&nbsp;-&nbsp;portafoglio commerciale</option><option value="9">9&nbsp;-&nbsp;altri</option></select></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" height="20" width="18%" style="width: 15%; text-align: left;">
									Indirizzo
								</td><td class="rigaScura col-2" colspan="3" style="width: 50%;"><input maxlength="30" name="indirizzo" onchange="checkValue('indirizzo','','FALSE','STRING', '0', '30','Indirizzo')" style="width:100%" type="text" value="" class="new-form-control"></td><td class="layervoci col-3 oRight" width="14%" style="width: 12%; text-align: left;">
									CAP
								</td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input maxlength="5" name="cap" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cap','','FALSE','STRING', '5', '5','CAP')" style="width:25%" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" height="20" width="18%" style="width: 15%; text-align: left;">
									Comune
								</td><td class="col-2" colspan="3" style="width: 50%;"><input name="localita" type="hidden" value=""><input maxlength="23" name="citta" onchange="checkValue('citta','','FALSE','STRING', '0', '23','Comune')" style="width:100%" type="text" class="new-form-control"></td><td class="col-3 oRight" width="14%" style="width: 12%; text-align: left;">
									Prov.
								</td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input name="" type="hidden" value=""><input maxlength="2" name="provincia" onkeypress="return onlyAlpha(event)" onchange="checkValue('provincia','','FALSE','STRING', '2', '2','Prov.')" style="width:20%" type="text" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<input name="abi_conto_addebito" type="hidden" value=""><input name="abi_form" type="hidden" value=""><input name="cab_conto_addebito" type="hidden" value=""><input name="cab_form" type="hidden" value=""><input class="new-form-control" name="conto_addebito" type="hidden" value=""><input class="new-form-control" name="cc_form" type="hidden" value=""><input name="cin_coordinate_banca" type="hidden" value=""><input name="cin_form" type="hidden" value=""><input name="codice_paese" type="hidden" value=""><input name="check_digit" type="hidden" value=""><td align="left" class="layervoci col-1" height="20" width="18%" style="width: 15%; text-align: left;">
									IBAN
									<span class="testoRedSmallBold" id="asterisco4" style="visibility: visible;">*</span></td><td class="col-2" colspan="3" style="width: 50%;">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rigaScura" width="85%"><input maxlength="27" name="iban" onchange="document.insertAL.iban.value = document.insertAL.iban.value.toUpperCase();" style="width:100%" type="text" class="new-form-control"><script type="text/javascript">
						
							// setto il valore dell'IBAN (serve in modifica)
							var isIbanValorizzato = document.insertAL.codice_paese.value != '' && document.insertAL.check_digit.value != '';
							if(isIbanValorizzato)
							{
								document.insertAL.iban.value = document.insertAL.codice_paese.value;
								document.insertAL.iban.value += document.insertAL.check_digit.value;
								document.insertAL.iban.value += document.insertAL.cin_form.value;
								document.insertAL.iban.value += document.insertAL.abi_form.value;
								document.insertAL.iban.value += document.insertAL.cab_form.value;
								document.insertAL.iban.value += document.insertAL.cc_form.value;
							}

							// occorre andare a vedere se ho valorizzato l'iban (checko il radio dell'IBAN)
							// altrimenti lascio checkato il radio dell'ABI CAB
							// nel caso di causale 90211 c'è solo l'IBAN, quindi si salta il controllo
							var isCausale90211 = document.forms['insertAL'].causale.value=='90211';
							if(!isCausale90211 && isIbanValorizzato)
							{
								document.insertAL.abiIban[0].checked = false;
								document.insertAL.abiIban[1].checked = true;
							}
						
					</script></td><td align="left" class="rigaScura" width="15%"><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/CoordinateConto/CoordinateConto.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td><td colspan="2"></td>
</tr>
<tr class="rigaScura">
<td></td><td align="left" class="col-2" colspan="3" style="width: 50%;"><input name="add_to_anagrafica" type="checkbox">
									&nbsp;&nbsp;Aggiorna dati anagrafica
								</td><td colspan="2"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="6">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td colspan="6">
									&nbsp;Dati Sottoscrittore Cliente
								</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="6">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Nominativo
									<span class="testoRedSmallBold">*</span></td><td class="col-2" width="47%" style="width: 50%;"><input name="descrizione_cliente_sottosc" type="hidden" value=""><input maxlength="30" name="nomeCognomeSottosc" onchange="checkValue('nomeCognomeSottosc','','TRUE','STRING', '1', '30','Nominativo'); " style="width:100%" type="text" value="" class="new-form-control"></td><td class="layervoci col-3 oRight" width="14%" style="width: 12%; text-align: left;">
									Codice Fiscale
									<span class="testoRedSmallBold">*</span></td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_fiscale" onchange="checkValue('codice_fiscale','','TRUE','CF', '16', '16','Codice Fiscale')" size="30" style="width:100%" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Indirizzo
								</td><td class="col-2" width="47%" style="width: 50%;"><input maxlength="30" name="indirizzoSottosc" onchange="checkValue('indirizzoSottosc','','FALSE','STRING', '0', '30','Indirizzo');" style="width:100%" type="text" class="new-form-control"></td><td colspan="2"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Località
								</td><td class="col-2" width="47%" style="width: 50%;"><input maxlength="14" name="localitaSottosc" onchange="checkValue('localitaSottosc','','FALSE','STRING', '0', '15','Località');" style="width:100%" type="text" class="new-form-control"></td><td class="col-3 oRight" width="14%" style="width: 12%; text-align: left;">
									Prov.
								</td><td class="col-4" width="21%" style="width: 33%; text-align: left;"><input maxlength="2" name="provinciaSottosc" onkeypress="return onlyAlpha(event)" onchange="checkValue('provinciaSottosc','','FALSE','STRING', '2', '2','Prov.')" style="width:20%" type="text" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="6">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class=" old-sectionTitle" height="20"><h3 class="new-titleSection">
									&nbsp;
									Dati Autorizzazione</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="6">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Codice Riferimento
									<span class="testoRedSmallBold" id="asterisco_codice_riferimento">*</span></td><td class="col-2" width="27%" style="width: 50%;"><input maxlength="15" name="codice_riferimento" onchange="checkValue('codice_riferimento','','TRUE','STRING', '1', '15','Codice Riferimento')" size="30" style="width:100%" type="text" value="" class="new-form-control"></td><td class="layervoci col-3 oRight" width="19%" style="width: 12%; text-align: left;">
									Flag storno
									<span class="testoRedSmallBold">*</span></td><td class="col-4" width="38%" style="width: 33%; text-align: left;"><select name="flag_storno" onchange="rataImportoObligatorio();" size="1" style="width:100%" class="new-form-control"><option value="1">1 - Si, entro quinto giorno dopo scadenza</option><option value="2">2 - Si, entro la scadenza</option><option value="3">3 - No, non possibile revoca e rimborso</option><option value="8">8 - Si, entro otto settimane</option><option value="9">9 - No, per caratteristiche del mandato</option></select></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Importo max rata/prefissato
									<span class="testoRedSmallBold" id="asterisco_rata_importo" style="visibility: hidden;">*</span></td><td class="col-2" width="30%" style="width: 50%;"><input maxlength="9" name="max_rata" onchange="checkValue('max_rata','','FALSE','REAL', '1', '12','Importo max rata/prefissato'); centesimi('max_rata',3);" onkeypress="return onlyRealNumbers(event)" size="30" style="width:70%" type="text" class="new-form-control"><input name="importo_massimo" type="hidden" value=""> EURO
			</td><td class="layervoci col-3 oRight" width="19%" style="width: 12%; text-align: left;">
									Numero rate
								</td><td class="col-4" width="38%" style="width: 33%; text-align: left;"><input maxlength="4" name="numero_rate" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('numero_rate','','FALSE','INTEGER', '1', '4','Numero rate')" style="width:20%" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Scadenza prima rata
								</td><td class="col-2" width="30%" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td width="85%"><input class="datepicker dataInizioYBW new-form-control hasDatepicker" maxlength="10" name="scadenza_prima_rata" onkeypress="return onlyDate(event)" onchange="checkValue('scadenza_prima_rata','','FALSE','DATE', '', '10','Scadenza prima rata')" style="width:100%" type="text" value="" id="dp1570698287529"></td><td width="15%"><a class="old-fieldCalendar" href="javascript:showHideFla('scadenza_prima_rata','insertAL','1');" onclick="$('.datepicker.dataInizioYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
							$(function(){
							$('.datepicker').datepicker();
							});
							</script></td>
</tr>
</tbody></table>
</td><td class="layervoci col-3 oRight" width="19%" style="width: 12%; text-align: left;">
									Scadenza ultima rata
								</td><td class="col-4" width="38%" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td width="85%"><input class="datepicker dataScadUltimaYBW new-form-control hasDatepicker" maxlength="10" name="scadenza_ultima_rata" onkeypress="return onlyDate(event)" onchange="checkValue('scadenza_ultima_rata','','FALSE','DATE', '', '10','Scadenza ultima rata')" style="width:100%" type="text" value="" id="dp1570698287530"></td><td width="15%"><a class="old-fieldCalendar" href="javascript:showHideFla('scadenza_ultima_rata','insertAL','2');" onclick="$('.datepicker.dataScadUltimaYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="18%" style="width: 15%; text-align: left;">
									Descrizione
								</td><td class="col-2" colspan="4" style="width: 50%;"><input class="stile new-form-control" maxlength="44" name="sottocampo_descrizione" style="width:100%" type="text" value=""></td>
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
<tbody><tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr align="center" class="rigaScura" height="30">
<td class="old-buttons">&nbsp;
																		&nbsp;
																		</td>
</tr>
<tr class="rigaScura">
<td height="20"><span class="testoRedSmallBold">* campi obbligatori</span></td>
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
<td>&nbsp;</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input name="TIPO" type="hidden" value="10" class="btn"><input name="banca" type="hidden" class="btn"><input class="btn" onclick="return doItBefore('Inserisci');" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
						
							fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
							fillBancheAllineamentoArchivi(createParameterObject(), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
						
					
				document.forms['insertAL'].nomeCognomeSottosc.value = rtrim(document.forms['insertAL'].descrizione_cliente_sottosc.value.substr(0, 30));
				document.forms['insertAL'].indirizzoSottosc.value = rtrim(document.forms['insertAL'].descrizione_cliente_sottosc.value.substr(30, 30));
				document.forms['insertAL'].localitaSottosc.value = rtrim(document.forms['insertAL'].descrizione_cliente_sottosc.value.substr(60, 15));
			
					
					// =================== modifica ================ //
					
					
					// ============= modifica o retry =============== //
					
    						
								fillInput();
							
						</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>