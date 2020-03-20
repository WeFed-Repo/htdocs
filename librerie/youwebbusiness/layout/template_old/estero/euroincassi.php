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
						var descInput = null;
						
					
				</script>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna" height="100%">
<tbody><tr>
<td valign="top">
<form action="inserteuroincassi" method="post" name="inserteuroincasso">
<input name="codice_estero_beneficiario" type="hidden" value=""><input name="flag_is_elcos_2000" type="hidden" value="0"><input name="tipo_supporto" type="hidden" value="E"><input name="disposizione_default" type="hidden" value="0"><input name="nome_creditore_uno" type="hidden" value="AUTOMOBILE CLUB MODENA"><script>
			descInput = document.forms.inserteuroincasso.nome_creditore_uno;
		</script><input name="nome_creditore_due" type="hidden"><input name="causale" type="hidden" value="00000"><input name="indirizzo_creditore" type="hidden" value=""><script>
			indirizzoCreditoreInput = document.forms.inserteuroincasso.indirizzo_creditore;
		</script><input name="dati_luogo_creditore" type="hidden" value=""><script>
			localitaCreditoreInput = document.forms.inserteuroincasso.dati_luogo_creditore;
		</script><input name="paese_creditore" type="hidden" value=""><input name="paese_creditore_uic" type="hidden" value="086"><input name="codice_creditore" type="hidden"><input name="paese_accredito" type="hidden" value="086"><input name="segno" type="hidden" value="-"><input name="tipo_codice" type="hidden" value=""><input name="numero_autorizzazione" type="hidden" value="0000000000"><input name="data_autorizzazione" type="hidden" value="000000"><input name="indicatore_pool" type="hidden" value="$POOL"><input name="importo_originario" type="hidden" value=""><input name="divisa_originaria" type="hidden" value=""><input maxlength="3" name="divisa_accredito" type="hidden" value="EUR"><input name="codice_abi_assuntrice" type="hidden" value="05034"><script>
					
		  abiInput = document.forms.inserteuroincasso.codice_abi_assuntrice;
				
		</script><input name="cab_assuntrice" type="hidden" value=""><script>
			cabInput = document.forms.inserteuroincasso.cab_assuntrice;
		</script><input name="nome_debitore_due" type="hidden"><input name="descrizione_incasso_due" type="hidden"><input name="provincia_finanza" type="hidden" value="               "><input name="firma_emittente" type="hidden"><input name="conto" type="hidden" value=""><script>
			contoInput = document.forms.inserteuroincasso.conto;
		</script><input name="richiesta_esito" type="hidden" value="2">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr>
<td>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20" width="100%"><div class="new-flag"></div><h1>
																	&nbsp;Euroincassi
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/IncassiEstero/euroincassi.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td colspan="4"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Ordinante
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" width="100" style="width: 15%; text-align: left;">
					Ordinante
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="315" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','TRUE','', '', '','Ordinante');fillCCDispoEnableOnlyEUR(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); descInput.value = getDesc(accounteerCombo, '').substr(0,24); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5); valorizzaCodEsteroEDispoDefault(); isOnlyForCustomer(siaInput.value)" style="width:260px" class="new-form-control"><option value=""></option><option value="106609">AUTOMOBILE CLUB MODENA</option></select></td><script>
			accounteerCombo = document.forms.inserteuroincasso.intestatario;
		</script><td class="col-3" style="width: 12%; text-align: left;">
					SIA
				</td><td class="col-4" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
			siaInput = document.forms.inserteuroincasso.codice_azienda;
		</script>
</tr>
<tr class="rigaScura">
<td class="col-1" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
					Banca
					<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><select disabled="true" name="numero_abi_assuntrice" onchange="checkValue('numero_abi_assuntrice','','TRUE','', '', '','Banca');" style="width:260px" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1325">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option></select></td><script>
			bankCombo = document.forms.inserteuroincasso.numero_abi_assuntrice;
		</script><td class="col-3" title="Conto" style="width: 12%; text-align: left;">
					Conto
					<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="num_rapporto" onchange="checkValue('num_rapporto','','TRUE','', '', '','Conto'); cabInput.value = fitToLength(getCabCode(this, ''),0,5); contoInput.value = getAccount(this, ''); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput(); valorizzaCodEsteroEDispoDefault(); isOnlyForCustomer(siaInput.value);" style="width:160px" class="new-form-control"><option value=""></option><option value="2582120">11701 - 000000002407</option><option value="2582121">11701 - 000000002417</option><option value="2582122">11701 - 000000002418</option><option value="2582123">11701 - 000000002419</option><option value="2582124">11701 - 000000002420</option><option value="2582125">11701 - 000000002421</option><option value="2582126">11701 - 000000002422</option><option value="2582127">11701 - 000000002423</option><option value="2582128">11701 - 000000002424</option><option value="2582129">11701 - 000000002425</option><option value="2582130">11701 - 000000002426</option><option value="2582131">11701 - 000000002427</option><option value="2582132">11701 - 000000002428</option><option value="2582133">11701 - 000000002429</option><option value="812046">12900 - 000000047658</option><option value="812047">12900 - 000000047659</option><option value="812048">12900 - 000000047661</option></select></td><script>
			ccCombo = document.forms.inserteuroincasso.num_rapporto;
		</script>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
					Codice Estero Cedente
					<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input name="cod_estero_cedente" onchange="checkValue('cod_estero_cedente','','TRUE','STRING', '1', '9','Codice Estero Cedente');" readonly="true" style="width:260px" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Debitore
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Ragione sociale
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%; min-width: 110px;"><input maxlength="30" name="nome_debitore_uno" onchange="checkValue('nome_debitore_uno','','TRUE','STRING', '1',max_length_nome_debitore_uno,'Ragione sociale')" style="width:260px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupDebitoriEsteroSearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupDebitoriEsteroSearch()
					{
						if (accounteerCombo.value =="")
							alert("Selezionare l'Intestatario!");
						else
						{
							if(document.inserteuroincasso.nome_debitore_uno.value==""){
								gotoservlet("lookupdebitoriesterosearch?intestatario="+accounteerCombo.value,"CercaNominativo");
							}
							else
								gotoservlet("lookupdebitoriesterosearch?ragione_sociale="+document.inserteuroincasso.nome_debitore_uno.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					}
				
			</script></td><td class="col-3" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input maxlength="16" name="codice_cliente_debitore" style="width:140px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupDebitoriEsteroSearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupDebitoriEsteroSearchWithCod()
					{
						if (accounteerCombo.value =="")
							alert("Selezionare l'Intestatario!");
						else
						{
							if(document.inserteuroincasso.codice_cliente_debitore.value=="")
								gotoservlet("lookupdebitoriesterosearch?intestatario="+accounteerCombo.value,"CercaNominativo");
							else
								gotoservlet("lookupdebitoriesterosearch?codice_debitore="+document.inserteuroincasso.codice_cliente_debitore.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					}
				
			</script></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
					Codice Siren/Siret<span class="testoRedSmallBold" id="asterisco1" style="visibility: hidden;">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="16" name="codice_fiscale_debitore" onchange="checkValue('codice_fiscale_debitore','',mandatory_codice_fiscale_debitore,'', '0', '16','Codice Siren/Siret')" style="width:260px" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Indirizzo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="30" name="indirizzo_debitore" onchange="checkValue('indirizzo_debitore','','TRUE','STRING', '0', '30','Indirizzo')" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			CAP
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cap_debitore" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cap_debitore','','TRUE','STRING', '0', '5','CAP')" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Località
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="22" name="localita_debitore" onchange="checkValue('localita_debitore','','TRUE','STRING', '1', max_length_localita_debitore,'Località')" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			Prov.
		</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="sigla_provincia_debitore" onkeypress="return onlyAlpha(event)" onchange="checkValue('sigla_provincia_debitore','','FALSE','STRING', '2', '2','Prov.')" style="width:30px" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Paese
			<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><select maxlength="3" name="paese_debitore" onchange="checkValue('paese_debitore','','TRUE','', '', '','Paese');cambiaNazioneSelezionata();cambiaControlliByNazione();cambiaControlliByNazioneEImporto();cambiaControlliByNazioneECheckAbiIban()" style="width:260px" class="new-form-control"><option value="029">FRANCIA</option></select></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;"></td><td align="left" colspan="3" style="padding-left:10px;">
<table border="0" cellpadding="2" cellspacing="0" class="old-inputForm">
<tbody><tr class="rigaScura">
<td align="left" class="" rowspan="2" width="20"><input checked="true" name="abiIban" onclick="setAbiIban(); visualizzaObbligatori();cambiaControlliByNazioneECheckAbiIban()" type="radio" value="0"></td><td align="left" width="">Coordinate Nazionali Banca<span class="testoRedSmallBold" id="asterisco2" style="visibility: visible;">*</span></td><td><input maxlength="10" name="coordinate_nazionali_banca" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('coordinate_nazionali_banca','',mandatory_coordinate_nazionali_banca,'', min_coordinate_nazionali_banca, max_coordinate_nazionali_banca,'Coordinate Nazionali Banca');" style="width:100px" type="text" value="" class="new-form-control"></td><td width="30"><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/IncassiEstero/coord-naz-banca.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td><td></td><td align="left">Conto<span class="testoRedSmallBold" id="asterisco3" style="visibility: visible;">*</span></td><td width="130"><input maxlength="11" name="conto_corrente_debitore" onchange="checkValue('conto_corrente_debitore','',mandatory_conto_corrente_debitore,'ACCOUNT', min_conto_corrente_debitore, max_conto_corrente_debitore,'Conto'); cambiaControlliByNazioneECheckAbiIban()" style="width:110px" type="text" value="" class="new-form-control"></td><td align="left">CIN<span class="testoRedSmallBold" id="asterisco4" style="visibility: visible;">*</span></td><td width="100"><input maxlength="2" name="cifra_controllo" onchange="checkValue('cifra_controllo','',mandatory_cifra_controllo,'', '2', '2','CIN'); cambiaControlliByNazioneECheckAbiIban()" size="2" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;"></td><td align="left" colspan="3" style="padding-left:10px;">
<table border="0" cellpadding="2" cellspacing="0" class="old-inputForm">
<tbody><tr class="rigaScura">
<td align="left" style="padding-left: 0;"><input name="abiIban" onclick="setAbiIban(); visualizzaObbligatori();" type="radio" value="1"></td><td width="100">IBAN<span class="testoRedSmallBold" id="asterisco5" style="visibility: hidden;">*</span></td><td><input maxlength="27" name="iban_debitore" onchange="checkValue('iban_debitore','',mandatory_iban_debitore,'', '1', '34','IBAN'); document.inserteuroincasso.iban_debitore.value = document.inserteuroincasso.iban_debitore.value.toUpperCase();" style="width:260px" type="text" value="" class="new-form-control" readonly=""></td><td><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/IncassiEstero/coordinate-IBAN.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Descrizione Banca-Sportello<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="24" name="banca_sportello_domiciliataria" onchange="checkValue('banca_sportello_domiciliataria','','TRUE','', '1', '24','Descrizione Banca-Sportello');" style="width:260px;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;"></td><td align="left" class="col-3" colspan="3" style="width: 12%; text-align: left;">
<table align="left" class="old-inputForm">
<tbody><tr class="rigascura">
<td align="left"><input checked="false" name="add_to_anagrafica" type="checkbox" value=""></td><td>
						&nbsp;&nbsp;Aggiorna dati anagrafica
					</td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Euroincasso
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Importo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="14" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '','Importo');cambiaControlliByNazioneEImporto()" size="40" style="width:220px" type="text" value="" class="new-form-control">&nbsp;</td><td class="col-3" style="width: 12%; text-align: left;">
			Div
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="" name="codice_divisa" readonly="true" size="4" type="text" value="EUR" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Data creazione
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td><input class="datepicker dataCreazioneYBW hasDatepicker new-form-control" maxlength="10" name="data_creazione" onkeypress="return onlyDate(event)" onchange="checkValue('data_creazione','','TRUE','DATE', '', '','Data creazione');" size="12" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1570711067016"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_creazione','inserteuroincasso','1');" onclick="$('.datepicker.dataCreazioneYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><script>
					$('.datepicker').datepicker();
					</script>
</tr>
</tbody></table>
</td><td class="col-3" style="width: 12%; text-align: left;">
			Data scadenza
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td><input class="datepicker dataScadYBW new-form-control hasDatepicker" maxlength="10" name="data_scadenza" onkeypress="return onlyDate(event)" onchange="checkValue('data_scadenza','','TRUE','DATE', '', '','Data scadenza');" size="12" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1570711067017"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_scadenza','inserteuroincasso','2');" onclick="$('.dataScadYBW.datepicker').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><script>
					$(function(){
					$('.datepicker').datepicker();
					})
					</script>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td align="left" colspan="4">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1" width="125" style="width: 15%; text-align: left;">
			Riferimenti per Debitore
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="10" name="descrizione_incasso_uno" onchange="checkValue('descrizione_incasso_uno','','TRUE','STRING', '1', '10','Riferimenti per Debitore');" style="width:258px;" type="text" value="" class="new-form-control"><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/IncassiEstero/auto-rif-debitore.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1" width="91" style="width: 15%; text-align: left;">
			Numero ricevuta
		</td><td class="col-2" style="width: 50%;"><input maxlength="10" name="numero_ricevuta" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('numero_ricevuta','','FALSE','STRING', '1', '10','Numero ricevuta')" size="12" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			Tipo incasso
		</td><td class="col-4" style="width: 33%; text-align: left;"><input name="flag_accettazione" type="hidden" value="0"><select maxlength="1" name="flag_accettazione_combo" onchange="document.inserteuroincasso.flag_accettazione.value=document.inserteuroincasso.flag_accettazione_combo[document.inserteuroincasso.flag_accettazione_combo.selectedIndex].value;" style="width:100px" class="new-form-control"><option value="0">non accett.</option><option value="1">accettato</option><option value="2">B/O</option></select><script>
					selectComboByOptionValue(document.inserteuroincasso.flag_accettazione_combo,'0');
					document.inserteuroincasso.flag_accettazione.value = 0;
				</script></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table align="center" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="208"><input name="banca" type="hidden"><td align="center" class="old-buttons" height="30">
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
</div><div class="new-buttons"><input class="btn" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					document.inserteuroincasso.add_to_anagrafica.checked=false;
					if(!hiddenCampiOrdinante){
						fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
						fillBanche(createParameterObjectFromCombos(null,accounteerCombo,null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
						var abiProponente = '05034';
						if (abiProponente=="99001")
							abiProponente = "03336";
						selectComboElementByAbi(bankCombo,abiProponente);
						fillCCDispoEnableOnlyEUR(createParameterObjectFromCombos(null,accounteerCombo,bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, false);
						//se non esiste nessun conto sulla banca dell abi proponente
						//viene sbiancata la combo banca e bloccata quella dei conti 
						if(bankCombo[bankCombo.selectedIndex].abi != abiProponente)
						{
							selectComboElementByValue(bankCombo,'');
							ccCombo.disabled=true;
						}
					}
					// =================== modifica ================ //
					
					// =================== copia dati precedenti o all apertura della pagina ================ //
					
						document.inserteuroincasso.data_creazione.value = parent.topframe.getDATA_ODIERNA();
					
					// ============= modifica o retry =============== //
					if (!hiddenCampiOrdinante){
						
						fillInput();
						valorizzaCodEsteroEDispoDefault();
					}
					else{
						document.inserteuroincasso.command.value = 'modifica_distinta';
					}
					
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
