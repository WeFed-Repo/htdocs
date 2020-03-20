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
					var denomMittente = null;
					var capMittente = null;
					var comMittente = null;
					var proMittente = null;
					var indMittente = null
					var codiceFiscaleP = null;
					var codFiscMittente = null;
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertdelegaf24" method="post" name="insertdelegaf24">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>
														Deleghe F24
													<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/DelegheF24.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr height="10" valign="bottom">
<td align="left" colspan="2"><span class="testoRedSmallBold">Attenzione:</span><span class="testoRedSmall">dopo ogni spedizione verificare che la delega risulti</span><span class="testoRedSmallBold">Accettata</span><span class="testoRedSmall">dalla banca incaricata del pagamento,</span><span class="testoRedSmall">consultando la sezione</span><span class="testoRedSmallBold">Esiti Deleghe F24</span><span class="testoRedSmall">.</span></td>
</tr>
<tr valign="top">
<td class="testoRedSmall" colspan="2">&nbsp;</td>
</tr>
<tr valign="top">
<td align="left"><span class="testoRedSmallBold" style="color: rgb(0,59,121)">
                              * campi obbligatori
                            </span></td><td>
<table align="right" border="0" cellpadding="2" cellspacing="0">
<tbody><tr>

</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="2">
<table align="center" border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="rigachiara larghezzaRighe" width="100%">
<tbody><tr>
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="testoBluBold" width="90"><img border="0" height="66" src="./ibbweb/img/finanze.gif" width="90"></td><td class="testoBluBold" width="70"></td><td align="middle" class="testoBluBold">MODELLO DI PAGAMENTO UNIFICATO</td><td class="testoBluBold" width="160"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<div class="fontColor">
<div class="old-sectionTitle"><h3 class="new-titleSection">Dati Ordinante</h3></div>
<table width="100%">
<tbody><tr>
<td class="col-1" height="30" width="140" style="width: 15%; text-align: left;"><span class="testoBlackSmall">Rag. Soc./Intestatario</span><span class="testoRedSmallBold">*</span>&nbsp;
																						</td><td class="col-2" height="30" width="340" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);   ccInput.value = fitToLength(getAccount(cc_combo, ''),0,12);   document.insertdelegaf24.cod_abi_ricevente.value=abiInput.value;   document.insertdelegaf24.cod_cab_ricevente.value=cabInput.value;   document.insertdelegaf24.num_cc_ricevente.value=ccInput.value;   document.insertdelegaf24.cod_abi_riferimento_mittente.value=getAbiCode(accounteerCombo, '');   document.insertdelegaf24.cod_cab_riferimento_mittente.value=getCabCode(accounteerCombo, '');   if(document.insertdelegaf24.destinatario_stampa[0].checked==true)    denomMittente.value = fitToLength(getIntestatario(accounteerCombo,''),0,43);   codFiscMittente.value = fitToLength(getCF(accounteerCombo,''),0,20);   codice_fiscale_mittente.value = fitToLength(getCF(accounteerCombo,''),0,20);   checkTitolareCC();" style="width:350px" class="new-form-control"><option value=""></option><option value="588536">C.P.C. INOX SPA</option></select><script>
		accounteerCombo = document.forms.insertdelegaf24.intestatario;
		</script></td><td class="testoBlackSmall col-3" height="30" width="40" style="width: 12%; text-align: left;">
																									SIA<span class="testoRedSmallBold">*</span>&nbsp; 
																									<input name="cod_sia" readonly="true" size="5" type="text" value="" class="new-form-control"><script>
			siaInput = document.forms.insertdelegaf24.cod_sia;
		</script></td>
</tr>
<tr>
<td align="left" class="rigaScura col-1" width="142" style="width: 15%; text-align: left;">
			Codice Fiscale<span class="testoRedSmallBold">*</span></td><td align="left" class="col-2" width="150" style="width: 50%;"><input name="codice_fiscale_mittente" readonly="true" size="24" type="text" value="" class="new-form-control"><input name="codice_fiscale_p" readonly="true" type="hidden" value="02801530961"><script>
				codiceFiscaleP = document.forms.insertdelegaf24.codice_fiscale_p;
			</script></td><td class="col-3" height="30" style="width: 12%; text-align: left;"><span class="rigaScura">ABI<span class="testoRedSmallBold">*</span>&nbsp;&nbsp;</span><input maxlength="5" name="cod_abi_riferimento_mittente" onchange="checkValue('cod_abi_riferimento_mittente','','FALSE','ABI_CAB', '5', '5','ABI');" readonly="true" size="5" type="text" value="" class="new-form-control"></td><td class="col-4" height="30" style="width: 33%; text-align: left;"><span class="rigaScura">CAB<span class="testoRedSmallBold">*</span>&nbsp;</span>
					&nbsp;<input maxlength="5" name="cod_cab_riferimento_mittente" onchange="checkValue('cod_cab_riferimento_mittente','','FALSE','ABI_CAB', '5', '5','CAB');" readonly="true" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td colspan="4" height="30"><input maxlength="20" name="cod_fisc_mittente" type="hidden" value="02801530961"><script>
			    codFiscMittente = document.forms.insertdelegaf24.cod_fisc_mittente; 
		</script>&nbsp;
																						</td>
</tr>
</tbody></table>
<div class="old-sectionTitle"><h3 class="new-titleSection">Contribuente</h3></div>
<table>
<tbody><tr>
<td class="testoBlackBold col-1" heigth="30" style="width: 15%; text-align: left;">
																						CODICE FISCALE<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="16" name="codice_fiscale" onchange="checkValue('codice_fiscale','','TRUE','CF_PIVA', '0', '16','CODICE FISCALE '); checkTitolareCC(); " size="25" type="text" value="" class="new-form-control"></td><td class="rigascura col-3 oRight" height="30" style="width: 12%; text-align: left;">
																						Barrare in caso di anno d'imposta<br>
																						non coincidente con anno solare
																					</td><td class="rigascura col-4" height="30" style="width: 33%; text-align: left;"><input maxlength="" name="flag_anno_imposta" type="hidden" value="0"><input name="chk_anno" onclick="swapAnno()" type="checkbox"><script type="text/javascript">
			
			var anno = document.insertdelegaf24.flag_anno_imposta.value;
			document.insertdelegaf24.chk_anno.checked = false;
			if (anno=="1") document.insertdelegaf24.chk_anno.checked = true;
			
		</script></td>
</tr>
<tr>
<td class="testoBlackBold col-1" colspan="4" height="20" style="width: 15%; text-align: left;">DATI ANAGRAFICI</td>
</tr>
<tr>
<td class="rigascura col-1" height="30" style="width: 15%; text-align: left;">Cognome, denominazione o ragione sociale <span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" colspan="2" height="30" style="width: 50%; min-width: 110px;"><input maxlength="24" name="cognome" onchange="checkValue('cognome','','TRUE','STRING', '0', '24','DATI ANAGRAFICI Cognome');" size="60" style="width: 330px" type="text" value="" class="new-form-control"><a href="javascript:lookupcontribuentisearch()" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
			
			function lookupcontribuentisearch()
			{
				if (accounteerCombo.value =="")
				{
					alert("Scegliere l'intestatario.!");
					accounteerCombo.focus();
				}
				else
				{
					if(document.insertdelegaf24.cognome.value=="")
						gotoservlet1("lookupcontribuentisearch?intestatario="+accounteerCombo.value,"CercaNominativo");
					else
						gotoservlet1("lookupcontribuentisearch?ragione_sociale="+document.insertdelegaf24.cognome.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
				}
			}
			
		</script></td>
</tr>
<tr>
<td class="rigascura col-1" height="30" style="width: 15%; text-align: left;">Nome</td><td class="rigascura col-2" height="30" style="width: 50%;"><input maxlength="20" name="nome" onchange="checkValue('nome','','FALSE','STRING', '0', '20','DATI ANAGRAFICI Nome');" size="58" style="width: 350px;" type="text" value="" class="new-form-control"></td>
</tr>
<input maxlength="24" name="ragione_sociale" onchange="checkValue('ragione_sociale','','FALSE','STRING', '0', '24','DATI ANAGRAFICI Ragione sociale');" size="74" type="hidden" value="">
<tr>
<td class="rigascura col-1" height="20" style="width: 15%; text-align: left;">Data di nascita</td><td class="rigascura col-2" height="30" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td></td><td><input class="datepicker new-form-control hasDatepicker" id="picker1" maxlength="10" name="data_nascita" onchange="checkValue('data_nascita','','FALSE','DATE', '0', '10','Data di nascita');" size="12" type="text" value=""></td><td><a class="old-fieldCalendar" href="javascript:openCal()" id="clickable1"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a>

</td>
</tr>
</tbody></table>
</td><td class="rigascura col-3" style="width: 12%; text-align: left;">Sesso</td><td class="rigascura col-4" style="width: 33%; text-align: left;"><select name="sesso" class="new-form-control"><option selected="true" value=" ">&nbsp;</option><option value="M">M</option><option value="F">F</option></select><script type="text/javascript">
			
			var selIdx = -1;
			for (i=0; i<document.forms.insertdelegaf24.sesso.options.length; i++)
			{
				if (document.forms.insertdelegaf24.sesso.options[i].value=="")
					selIdx = i;
			}
			if (selIdx != -1) document.forms.insertdelegaf24.sesso.selectedIndex= selIdx;
			
		</script></td>
</tr>
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;">Comune (o Stato estero) di nascita</td><td class="rigascura col-2" style="width: 50%;"><input maxlength="25" name="comune_nascita" onchange="checkValue('comune_nascita','','FALSE','STRING', '0', '25','DATI ANAGRAFICI Comune (o Stato estero) di nascita');" size="50" type="text" value="" class="new-form-control"></td><td class="rigascura col-3" style="width: 12%; text-align: left;">Prov.</td><td class="rigascura col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia_nascita" onchange="checkValue('provincia_nascita','','FALSE','STRING', '0', '2','DATI ANAGRAFICI Prov.'); document.forms.insertdelegaf24.provincia_nascita.value=document.forms.insertdelegaf24.provincia_nascita.value.toUpperCase();" style="WIDTH: 30px" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="testoBlackBold col-1" colspan="4" height="20" style="width: 15%; text-align: left;">DOMICILIO FISCALE</td>
</tr>
<tr>
<td class="rigascura col-1" height="30" style="width: 15%; text-align: left;">Comune<span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" height="30" style="width: 50%;"><input maxlength="25" name="comune_domicilio" onchange="checkValue('comune_domicilio','','TRUE','STRING', '0', '25','DOMICILIO FISCALE Comune');" size="55" type="text" value="" class="new-form-control"></td><td class="rigascura col-3" height="30" style="width: 12%; text-align: left;">Prov.<span class="testoRedSmallBold">*</span></td><td class="rigascura col-4" height="30" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia_domicilio" onchange="checkValue('provincia_domicilio','','TRUE','STRING', '0', '2','DOMICILIO FISCALE Provincia'); document.forms.insertdelegaf24.provincia_domicilio.value=document.forms.insertdelegaf24.provincia_domicilio.value.toUpperCase();" size="2" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura col-1" height="30" style="width: 15%; text-align: left;">Via e numero civico<span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" colspan="3" height="30" style="width: 50%;"><input maxlength="35" name="indirizzo_domicilio" onchange="checkValue('indirizzo_domicilio','','TRUE','STRING', '0', '35','DOMICILIO FISCALE Indirizzo');" size="58" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</div>
</td>
</tr>
<tr>
<td class="col-1" colspan="4" style="width: 15%; text-align: left;">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" class="old-inputForm" width="100%">
<tbody><tr class="rigascura">
<td style="color: #003b79 !important;" width="260"><span class="testoBlackBold">CODICE FISCALE</span> del coobbligato, erede, genitore, tutore o curatore fallimentare			
																				</td><td width="160"><input maxlength="16" name="secondo_codice_fiscale" onchange="checkValue('secondo_codice_fiscale','','FALSE','CF_PIVA', '0', '16','Codice fiscale coobbligato'); obbliCodIdentificativo();" size="25" type="text" value="" class="new-form-control"></td><td width="100"><span class="testoBlackBold">CODICE IDENTIFICATIVO</span></td><td width="180"><nobr style="min-width: 110px;"><input maxlength="2" name="codice_identificativo_20" onchange="checkValue('codice_identificativo_20','',mandatory_codice_identificativo,'STRING', '0', '2','CODICE IDENTIFICATIVO');" size="5" type="text" value="" class="new-form-control"><a href="javascript:showPopUpCodiceIdentificativo()" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td>
</tr>
</tbody></table>
</td>
</tr>
<style>
		  												.tabellaF24{
															border-collapse: initial !important;
		  													margin: auto;
		  													width: 784px;
		  												}
			  											.larghezzaRighe > tr, .larghezzaRighe > tbody > tr{
			  												width:100%;
			  											}
			  											.larghezzaRighe > tr > td, .larghezzaRighe > tbody > tr > td{
			  												width:100%;
			  											}
			  											.tabellaF24 *{
		  													color: #003b79 !important;
			  											}
		  												.tabellaF24 td{
		  													border: 2px solid #fff;
		  												}
		  												.tabellaF24 .testoBlackBold {
														    color: #357745 !important;
														}
		  												.larghezzaRighe{
		  													background-color: #e3eee3!important;
		  												}
		  												.rigaChiara, .rigaScura{
		  													background-color: #e3eee3!important;
		  												}
		  												.fontColor .testoBlackBold {
														    color: #357745 !important;
														}
		  												.new-titleSection {
    														color: #357745 !important;
   														}
   														.fontColor .rigaScura, .fontColor .rigaScura td, .fontColor .rigaChiara, .fontColor .rigaChiara td, .fontColor td, .fontColor *{
		  													color: #003b79 !important;
   														}
   														.fontColor .testoBluBold{
   															color: #666 !important;
   														}
		  											</style>
<tr>
<td class="inizioSezione old-sectionTitle" colspan="7"><h3 class="new-titleSection">Sezione Erario</h3></td>
</tr>
<tr>
<td colspan="4">
<table border="2" bordercolor="#ffffff" cellpadding="1" cellspacing="1" class="tabellaF24" width="100%">
<tbody><tr>
<td colspan="6" style="width: 100%"></td>
</tr>
<tr>
<td class="testoBlackBold" colspan="1" rowspan="7" valign="center">IMPOSTE DIRETTE - IVA<br>
																		RITENUTE ALLA FONTE<br>
																		ALTRI TRIBUTI ED INTERESSI
																	</td><td align="middle" class="rigascura">Codice<br> Tributo</td><td align="middle" class="rigascura" width="70">Rateaz.<br>Reg.<br>Prov. mm</td><td align="middle" class="rigascura">Anno</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(A)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(B)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_1','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_1" onchange="fillRateazione('erario_riferimenti_tributo_1','erario_importo_debito_1','erario_importo_credito_1');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_1" onchange="fillAnno('erario_anno_riferimento_1','erario_importo_debito_1','erario_importo_credito_1');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_1" onchange="fillRiferimento('erario_riferimenti_tributo_1','erario_anno_riferimento_1','erario_importo_debito_1','erario_importo_credito_1');centesimi('erario_importo_debito_1'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_1" onchange="fillRiferimento('erario_riferimenti_tributo_1','erario_anno_riferimento_1','erario_importo_debito_1','erario_importo_credito_1');centesimi('erario_importo_credito_1'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_2','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_2" onchange="fillRateazione('erario_riferimenti_tributo_2','erario_importo_debito_2','erario_importo_credito_2');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_2" onchange="fillAnno('erario_anno_riferimento_2','erario_importo_debito_2','erario_importo_credito_2');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_2" onchange="fillRiferimento('erario_riferimenti_tributo_2','erario_anno_riferimento_2','erario_importo_debito_2','erario_importo_credito_2');centesimi('erario_importo_debito_2'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_2" onchange="fillRiferimento('erario_riferimenti_tributo_2','erario_anno_riferimento_2','erario_importo_debito_2','erario_importo_credito_2');centesimi('erario_importo_credito_2'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_3','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_3" onchange="fillRateazione('erario_riferimenti_tributo_3','erario_importo_debito_3','erario_importo_credito_3');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_3" onchange="fillAnno('erario_anno_riferimento_3','erario_importo_debito_3','erario_importo_credito_3');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_3" onchange="fillRiferimento('erario_riferimenti_tributo_3','erario_anno_riferimento_3','erario_importo_debito_3','erario_importo_credito_3');centesimi('erario_importo_debito_3'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_3" onchange="fillRiferimento('erario_riferimenti_tributo_3','erario_anno_riferimento_3','erario_importo_debito_3','erario_importo_credito_3');centesimi('erario_importo_credito_3'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_4','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_4" onchange="fillRateazione('erario_riferimenti_tributo_4','erario_importo_debito_4','erario_importo_credito_4');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_4" onchange="fillAnno('erario_anno_riferimento_4','erario_importo_debito_4','erario_importo_credito_4');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_4" onchange="fillRiferimento('erario_riferimenti_tributo_4','erario_anno_riferimento_4','erario_importo_debito_4','erario_importo_credito_4');centesimi('erario_importo_debito_4'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_4" onchange="fillRiferimento('erario_riferimenti_tributo_4','erario_anno_riferimento_4','erario_importo_debito_4','erario_importo_credito_4');centesimi('erario_importo_credito_4'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_5" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_5','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_5" onchange="fillRateazione('erario_riferimenti_tributo_5','erario_importo_debito_5','erario_importo_credito_5');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_5" onchange="fillAnno('erario_anno_riferimento_5','erario_importo_debito_5','erario_importo_credito_5');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_5" onchange="fillRiferimento('erario_riferimenti_tributo_5','erario_anno_riferimento_5','erario_importo_debito_5','erario_importo_credito_5');centesimi('erario_importo_debito_5'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_5" onchange="fillRiferimento('erario_riferimenti_tributo_5','erario_anno_riferimento_5','erario_importo_debito_5','erario_importo_credito_5');centesimi('erario_importo_credito_5'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="erario_codice_tributo_6" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_tributo_6','1','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_riferimenti_tributo_6" onchange="fillRateazione('erario_riferimenti_tributo_6','erario_importo_debito_6','erario_importo_credito_6');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="erario_anno_riferimento_6" onchange="fillAnno('erario_anno_riferimento_6','erario_importo_debito_6','erario_importo_credito_6');" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_debito_6" onchange="fillRiferimento('erario_riferimenti_tributo_6','erario_anno_riferimento_6','erario_importo_debito_6','erario_importo_credito_6');centesimi('erario_importo_debito_6'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_importo_credito_6" onchange="fillRiferimento('erario_riferimenti_tributo_6','erario_anno_riferimento_6','erario_importo_debito_6','erario_importo_credito_6');centesimi('erario_importo_credito_6'); fillErario()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="7" height="1" style="height: 11px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="4"></td><td class="testoBlackBold oRight">TOTALE A </td><td align="middle" class="rigascura"><input maxlength="15" name="erario_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="4"></td><td class="testoBlackBold oRight">TOTALE B </td><td align="middle" class="rigascura"><input maxlength="15" name="erario_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="3"></td><td class="testoBlackBold oRight" colspan="2">SALDO [A-B]  +/- <input maxlength="1" name="erario_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="erario_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;">Ufficio</td><td class="rigascura col-2" colspan="6" style="width: 50%;">Codice Atto</td>
</tr>
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;"><nobr style="min-width: 110px;"><input maxlength="3" name="erario_codice_ufficio" onchange="return fieldToUpper('erario_codice_ufficio')" size="10" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('erario_codice_ufficio','1','ufficio')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td class="rigascura col-2" colspan="6" style="width: 50%;"><input maxlength="11" name="erario_codice_atto" onchange="return fieldToUpper('erario_codice_atto')" size="30" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="inizioSezione old-sectionTitle" colspan="7"><h3 class="new-titleSection">Sezione INPS</h3></td>
</tr>
<tr>
<td colspan="4">
<table border="2" bordercolor="#ffffff" cellpadding="1" cellspacing="1" class="tabellaF24" width="100%">
<tbody><tr>
<td class="rigascura" colspan="3"></td><td align="middle" class="rigascura" colspan="2">Periodo di riferimento</td><td class="rigascura" colspan="2"></td>
</tr>
<tr>
<td align="middle" class="rigascura">Codice<br>sede</td><td align="middle" class="rigascura">Causale<br>contributo</td><td align="middle" class="rigascura" width="120">Matr. INPS/Codice INPS<br>Fil. azienda</td><td align="middle" class="rigascura">Da mm/aaaa</td><td align="middle" class="rigascura">A mm/aaaa</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(C)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(D)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="inps_codice_sede_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_codice_sede_1','3','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="inps_causale_contributo_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_causale_contributo_1','3','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="inps_matricola_inps_1" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_inizio_1" onchange="periodo('inps_periodo_inizio_1','inps_importo_debito_1','inps_importo_credito_1')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_fine_1" onchange="periodo('inps_periodo_fine_1','inps_importo_debito_1','inps_importo_credito_1')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_debito_1" onchange="fillPeriodi('inps_periodo_inizio_1','inps_periodo_fine_1','inps_importo_debito_1','inps_importo_credito_1'); centesimi('inps_importo_debito_1'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_credito_1" onchange="fillPeriodi('inps_periodo_inizio_1','inps_periodo_fine_1','inps_importo_debito_1','inps_importo_credito_1'); centesimi('inps_importo_credito_1'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_codice_sede_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_codice_sede_2','3','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_causale_contributo_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_causale_contributo_2','3','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="17" name="inps_matricola_inps_2" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_inizio_2" onchange="periodo('inps_periodo_inizio_2','inps_importo_debito_2','inps_importo_credito_2')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_fine_2" onchange="periodo('inps_periodo_fine_2','inps_importo_debito_2','inps_importo_credito_2')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_debito_2" onchange="fillPeriodi('inps_periodo_inizio_2','inps_periodo_fine_2','inps_importo_debito_2','inps_importo_credito_2'); centesimi('inps_importo_debito_2'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_credito_2" onchange="fillPeriodi('inps_periodo_inizio_2','inps_periodo_fine_2','inps_importo_debito_2','inps_importo_credito_2'); centesimi('inps_importo_credito_2'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_codice_sede_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_codice_sede_3','3','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_causale_contributo_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_causale_contributo_3','3','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="17" name="inps_matricola_inps_3" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_inizio_3" onchange="periodo('inps_periodo_inizio_3','inps_importo_debito_3','inps_importo_credito_3')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_fine_3" onchange="periodo('inps_periodo_fine_3','inps_importo_debito_3','inps_importo_credito_3')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_debito_3" onchange="fillPeriodi('inps_periodo_inizio_3','inps_periodo_fine_3','inps_importo_debito_3','inps_importo_credito_3'); centesimi('inps_importo_debito_3'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_credito_3" onchange="fillPeriodi('inps_periodo_inizio_3','inps_periodo_fine_3','inps_importo_debito_3','inps_importo_credito_3'); centesimi('inps_importo_credito_3'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_codice_sede_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_codice_sede_4','3','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="inps_causale_contributo_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inps_causale_contributo_4','3','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="17" name="inps_matricola_inps_4" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_inizio_4" onchange="periodo('inps_periodo_inizio_4','inps_importo_debito_4','inps_importo_credito_4')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="inps_periodo_fine_4" onchange="periodo('inps_periodo_fine_4','inps_importo_debito_4','inps_importo_credito_4')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_debito_4" onchange="fillPeriodi('inps_periodo_inizio_4','inps_periodo_fine_4','inps_importo_debito_4','inps_importo_credito_4'); centesimi('inps_importo_debito_4'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_importo_credito_4" onchange="fillPeriodi('inps_periodo_inizio_4','inps_periodo_fine_4','inps_importo_debito_4','inps_importo_credito_4'); centesimi('inps_importo_credito_4'); fillInps()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="7" height="1" style="height: 11px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="5"></td><td class="testoBlackBold oRight">TOTALE C </td><td align="middle" class="rigascura"><input maxlength="15" name="inps_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="5"></td><td class="testoBlackBold oRight">TOTALE D </td><td align="middle" class="rigascura"><input maxlength="15" name="inps_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="4"></td><td class="testoBlackBold oRight" colspan="2">SALDO [C-D]  +/-  <input maxlength="1" name="inps_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inps_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="inizioSezione old-sectionTitle" colspan="11"><h3 class="new-titleSection">Sezione Regioni</h3></td>
</tr>
<tr>
<td colspan="4">
<table border="2" bordercolor="#ffffff" cellpadding="1" cellspacing="1" class="tabellaF24" width="100%">
<tbody><tr>
<td colspan="6" style="width: 100%"></td>
</tr>
<tr>
<td align="middle" class="rigascura">Codice<br>regione</td><td align="middle" class="rigascura">Codice Tributo</td><td align="middle" class="rigascura" width="120">Rateazione<br>mm</td><td align="middle" class="rigascura">Anno di riferimento</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(E)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(F)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="regioni_codice_regione_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_regione_1','5','regione')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="regioni_codice_tributo_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_tributo_1','5','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_riferimenti_tributo_1" onchange="fillRateazione('regioni_riferimenti_tributo_1','regioni_importo_debito_1','regioni_importo_credito_1');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_anno_riferimento_1" onchange="fillAnno('regioni_anno_riferimento_1','regioni_importo_debito_1','regioni_importo_credito_1');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_debito_1" onchange="fillRiferimento('regioni_riferimenti_tributo_1','regioni_anno_riferimento_1','regioni_importo_debito_1','regioni_importo_credito_1');centesimi('regioni_importo_debito_1'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_credito_1" onchange="fillRiferimento('regioni_riferimenti_tributo_1','regioni_anno_riferimento_1','regioni_importo_debito_1','regioni_importo_credito_1');centesimi('regioni_importo_credito_1'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="2" name="regioni_codice_regione_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_regione_2','5','regione')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="regioni_codice_tributo_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_tributo_2','5','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_riferimenti_tributo_2" onchange="fillRateazione('regioni_riferimenti_tributo_2','regioni_importo_debito_2','regioni_importo_credito_2');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_anno_riferimento_2" onchange="fillAnno('regioni_anno_riferimento_2','regioni_importo_debito_2','regioni_importo_credito_2');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_debito_2" onchange="fillRiferimento('regioni_riferimenti_tributo_2','regioni_anno_riferimento_2','regioni_importo_debito_2','regioni_importo_credito_2');centesimi('regioni_importo_debito_2'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_credito_2" onchange="fillRiferimento('regioni_riferimenti_tributo_2','regioni_anno_riferimento_2','regioni_importo_debito_2','regioni_importo_credito_2');centesimi('regioni_importo_credito_2'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="2" name="regioni_codice_regione_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_regione_3','5','regione')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="regioni_codice_tributo_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_tributo_3','5','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_riferimenti_tributo_3" onchange="fillRateazione('regioni_riferimenti_tributo_3','regioni_importo_debito_3','regioni_importo_credito_3');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_anno_riferimento_3" onchange="fillAnno('regioni_anno_riferimento_3','regioni_importo_debito_3','regioni_importo_credito_3');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_debito_3" onchange="fillRiferimento('regioni_riferimenti_tributo_3','regioni_anno_riferimento_3','regioni_importo_debito_3','regioni_importo_credito_3');centesimi('regioni_importo_debito_3'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_credito_3" onchange="fillRiferimento('regioni_riferimenti_tributo_3','regioni_anno_riferimento_3','regioni_importo_debito_3','regioni_importo_credito_3');centesimi('regioni_importo_credito_3'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="2" name="regioni_codice_regione_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_regione_4','5','regione')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="regioni_codice_tributo_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('regioni_codice_tributo_4','5','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_riferimenti_tributo_4" onchange="fillRateazione('regioni_riferimenti_tributo_4','regioni_importo_debito_4','regioni_importo_credito_4');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="regioni_anno_riferimento_4" onchange="fillAnno('regioni_anno_riferimento_4','regioni_importo_debito_4','regioni_importo_credito_4');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_debito_4" onchange="fillRiferimento('regioni_riferimenti_tributo_4','regioni_anno_riferimento_4','regioni_importo_debito_4','regioni_importo_credito_4');centesimi('regioni_importo_debito_4'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_importo_credito_4" onchange="fillRiferimento('regioni_riferimenti_tributo_4','regioni_anno_riferimento_4','regioni_importo_debito_4','regioni_importo_credito_4');centesimi('regioni_importo_credito_4'); fillRegioni()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="11" height="1" style="height: 11px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="4"></td><td class="testoBlackBold oRight">TOTALE E </td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="4"></td><td class="testoBlackBold oRight">TOTALE F </td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="2"></td><td class="testoBlackBold oRight" colspan="3">SALDO [E-F]  +/-  <input maxlength="1" name="regioni_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="regioni_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="inizioSezione old-sectionTitle" colspan="11"><h3 class="new-titleSection">Sezione IMU ed Altri Tributi Locali</h3></td>
</tr>
<tr>
<td colspan="4">
<table border="2" bordercolor="#ffffff" cellpadding="1" cellspacing="1" class="tabellaF24" width="100%">
<tbody><tr>
<td align="middle" class="rigascura ">Codice ente/<br>codice comune</td><td align="center" class="rigascura">Ravv.</td><td align="center" class="rigascura">Immob.<br>variati</td><td align="center" class="rigascura">Acc.</td><td align="center" class="rigascura">Saldo</td><td align="center" class="rigascura">Numero<br>immobili</td><td align="middle" class="rigascura">Codice Tributo</td><td align="middle" class="rigascura" width="120">Rateazione<br>mm</td><td align="middle" class="rigascura">Anno di riferimento</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(G)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(H)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura noMinWidth"><nobr class="noResizeYBW" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_ente_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_ente_1','7','ente')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_ravvedimento_1" type="hidden" value=""><input name="chk_ici_tributi_locali_ravvedimento_1" onclick="swapIciFlag('ici_tributi_locali_ravvedimento_1');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_ravvedimento_1');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_immobili_variati_1" type="hidden" value=""><input name="chk_ici_tributi_locali_immobili_variati_1" onclick="swapIciFlag('ici_tributi_locali_immobili_variati_1');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_immobili_variati_1');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_acconto_1" type="hidden" value=""><input name="chk_ici_tributi_locali_acconto_1" onclick="swapIciFlag('ici_tributi_locali_acconto_1');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_acconto_1');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_saldo_1" type="hidden" value=""><input name="chk_ici_tributi_locali_saldo_1" onclick="swapIciFlag('ici_tributi_locali_saldo_1');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_saldo_1');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="3" name="ici_tributi_locali_numero_fabbricati_1" size="3" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr class="noResizeYBW" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_tributo_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_tributo_1','7','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_riferimenti_tributo_1" onchange="fillRateazione('ici_tributi_locali_riferimenti_tributo_1','ici_tributi_locali_importo_debito_1','ici_tributi_locali_importo_credito_1');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_anno_riferimento_1" onchange="fillAnno('ici_tributi_locali_anno_riferimento_1','ici_tributi_locali_importo_debito_1','ici_tributi_locali_importo_credito_1');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_debito_1" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_1','ici_tributi_locali_anno_riferimento_1','ici_tributi_locali_importo_debito_1','ici_tributi_locali_importo_credito_1');centesimi('ici_tributi_locali_importo_debito_1'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_credito_1" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_1','ici_tributi_locali_anno_riferimento_1','ici_tributi_locali_importo_debito_1','ici_tributi_locali_importo_credito_1');centesimi('ici_tributi_locali_importo_credito_1'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura noResizeYBW noMinWidth" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_ente_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_ente_2','7','ente')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_ravvedimento_2" type="hidden" value=""><input name="chk_ici_tributi_locali_ravvedimento_2" onclick="swapIciFlag('ici_tributi_locali_ravvedimento_2');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_ravvedimento_2');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_immobili_variati_2" type="hidden" value=""><input name="chk_ici_tributi_locali_immobili_variati_2" onclick="swapIciFlag('ici_tributi_locali_immobili_variati_2');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_immobili_variati_2');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_acconto_2" type="hidden" value=""><input name="chk_ici_tributi_locali_acconto_2" onclick="swapIciFlag('ici_tributi_locali_acconto_2');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_acconto_2');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_saldo_2" type="hidden" value=""><input name="chk_ici_tributi_locali_saldo_2" onclick="swapIciFlag('ici_tributi_locali_saldo_2');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_saldo_2');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="3" name="ici_tributi_locali_numero_fabbricati_2" size="3" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura noResizeYBW" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_tributo_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_tributo_2','7','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_riferimenti_tributo_2" onchange="fillRateazione('ici_tributi_locali_riferimenti_tributo_2','ici_tributi_locali_importo_debito_2','ici_tributi_locali_importo_credito_2');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_anno_riferimento_2" onchange="fillAnno('ici_tributi_locali_anno_riferimento_2','ici_tributi_locali_importo_debito_2','ici_tributi_locali_importo_credito_2');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_debito_2" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_2','ici_tributi_locali_anno_riferimento_2','ici_tributi_locali_importo_debito_2','ici_tributi_locali_importo_credito_2');centesimi('ici_tributi_locali_importo_debito_2'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_credito_2" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_2','ici_tributi_locali_anno_riferimento_2','ici_tributi_locali_importo_debito_2','ici_tributi_locali_importo_credito_2');centesimi('ici_tributi_locali_importo_credito_2'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura noResizeYBW noMinWidth" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_ente_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_ente_3','7','ente')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_ravvedimento_3" type="hidden" value=""><input name="chk_ici_tributi_locali_ravvedimento_3" onclick="swapIciFlag('ici_tributi_locali_ravvedimento_3');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_ravvedimento_3');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_immobili_variati_3" type="hidden" value=""><input name="chk_ici_tributi_locali_immobili_variati_3" onclick="swapIciFlag('ici_tributi_locali_immobili_variati_3');" type="checkbox"><script type="text/javascript">
		
			setIciFlag('ici_tributi_locali_immobili_variati_3');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_acconto_3" type="hidden" value=""><input name="chk_ici_tributi_locali_acconto_3" onclick="swapIciFlag('ici_tributi_locali_acconto_3');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_acconto_3');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_saldo_3" type="hidden" value=""><input name="chk_ici_tributi_locali_saldo_3" onclick="swapIciFlag('ici_tributi_locali_saldo_3');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_saldo_3');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="3" name="ici_tributi_locali_numero_fabbricati_3" size="3" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura noResizeYBW" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_tributo_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_tributo_3','7','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_riferimenti_tributo_3" onchange="fillRateazione('ici_tributi_locali_riferimenti_tributo_3','ici_tributi_locali_importo_debito_3','ici_tributi_locali_importo_credito_3');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_anno_riferimento_3" onchange="fillAnno('ici_tributi_locali_anno_riferimento_3','ici_tributi_locali_importo_debito_3','ici_tributi_locali_importo_credito_3');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_debito_3" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_3','ici_tributi_locali_anno_riferimento_3','ici_tributi_locali_importo_debito_3','ici_tributi_locali_importo_credito_3');centesimi('ici_tributi_locali_importo_debito_3'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_credito_3" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_3','ici_tributi_locali_anno_riferimento_3','ici_tributi_locali_importo_debito_3','ici_tributi_locali_importo_credito_3');centesimi('ici_tributi_locali_importo_credito_3'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura noResizeYBW noMinWidth" style="min-width: 95px;"><input maxlength="4" name="ici_tributi_locali_codice_ente_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_ente_4','7','ente')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_ravvedimento_4" type="hidden" value=""><input name="chk_ici_tributi_locali_ravvedimento_4" onclick="swapIciFlag('ici_tributi_locali_ravvedimento_4');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_ravvedimento_4');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_immobili_variati_4" type="hidden" value=""><input name="chk_ici_tributi_locali_immobili_variati_4" onclick="swapIciFlag('ici_tributi_locali_immobili_variati_4');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_immobili_variati_4');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_acconto_4" type="hidden" value=""><input name="chk_ici_tributi_locali_acconto_4" onclick="swapIciFlag('ici_tributi_locali_acconto_4');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_acconto_4');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="1" name="ici_tributi_locali_saldo_4" type="hidden" value=""><input name="chk_ici_tributi_locali_saldo_4" onclick="swapIciFlag('ici_tributi_locali_saldo_4');" type="checkbox"><script type="text/javascript">
			
			setIciFlag('ici_tributi_locali_saldo_4');
			
		</script></td><td align="center" class="rigascura" valign="middle"><input maxlength="3" name="ici_tributi_locali_numero_fabbricati_4" size="3" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="ici_tributi_locali_codice_tributo_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('ici_tributi_locali_codice_tributo_4','7','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_riferimenti_tributo_4" onchange="fillRateazione('ici_tributi_locali_riferimenti_tributo_4','ici_tributi_locali_importo_debito_4','ici_tributi_locali_importo_credito_4');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="ici_tributi_locali_anno_riferimento_4" onchange="fillAnno('ici_tributi_locali_anno_riferimento_4','ici_tributi_locali_importo_debito_4','ici_tributi_locali_importo_credito_4');" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_debito_4" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_4','ici_tributi_locali_anno_riferimento_4','ici_tributi_locali_importo_debito_4','ici_tributi_locali_importo_credito_4');centesimi('ici_tributi_locali_importo_debito_4'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_importo_credito_4" onchange="fillRiferimento('ici_tributi_locali_riferimenti_tributo_4','ici_tributi_locali_anno_riferimento_4','ici_tributi_locali_importo_debito_4','ici_tributi_locali_importo_credito_4');centesimi('ici_tributi_locali_importo_credito_4'); fillIciTributiLocali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="11" height="1" style="height: 11px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="9"></td><td class="testoBlackBold oRight">TOTALE G </td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="9"></td><td class="testoBlackBold oRight">TOTALE H </td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="7"></td><td class="testoBlackBold oRight" colspan="3">SALDO [G-H]  +/-  <input maxlength="1" name="ici_tributi_locali_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="ici_tributi_locali_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="left" class="rigascura " colspan="2">Detrazione
																			<input maxlength="15" name="ici_tributi_locali_detrazioni_ici" onchange="centesimi('ici_tributi_locali_detrazioni_ici');" size="15" style="text-align : right;" type="text" value="" class="new-form-control"></td><td class="rigascura oRight" colspan="2">Identificativo Operazione</td><td class="rigascura oRight" colspan="3"><input align="right" maxlength="18" name="identificativo_operazione" size="30" style="text-align: left;" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" class="old-inputForm" width="100%">
<tbody><tr>
<td class="inizioSezione old-sectionTitle" colspan="8"><h3 class="new-titleSection">Sezione Altri Enti Previdenziali ed Assicurativi</h3></td>
</tr>
<tr>
<td class="rigascura col-1" colspan="8" style="width: 15%; text-align: left;"><input name="radioSezioniAbilitate" onclick="confirmVisualizzaSezione(0);" type="radio"></td>
</tr>
<tr id="0" style="display: table-row;">
<td class="rigascura" colspan="8">
<table border="2" bordercolor="#ffffff" cellpadding="0" cellspacing="0" class="tabellaF24" width="100%">
<tbody><tr>
<td class="rigascura" colspan="2"></td><td align="middle" class="rigascura" colspan="2"></td><td class="rigascura" colspan="4"></td>
</tr>
<tr>
<td rowspan="4"></td><td class="rigascura " rowspan="4">INAIL</td><td align="middle" class="rigascura">Codice<br>sede</td><td align="middle" class="rigascura">Codice<br>ditta</td><td align="middle" class="rigascura">c.c.</td><td align="middle" class="rigascura">N. riferimento</td><td align="middle" class="rigascura">Causale</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(I)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(L)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="5" name="inail_codice_sede_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inail_codice_sede_1','9','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="8" name="inail_numero_posizione_1" size="8" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="2" name="inail_codice_controllo_posizione_1" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="6" name="inail_numero_riferimento_1" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="1" name="inail_causale_1" size="1" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_debito_1" onchange="centesimi('inail_importo_debito_1'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_credito_1" onchange="centesimi('inail_importo_credito_1'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="5" name="inail_codice_sede_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inail_codice_sede_2','9','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="8" name="inail_numero_posizione_2" size="8" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="2" name="inail_codice_controllo_posizione_2" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="6" name="inail_numero_riferimento_2" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="1" name="inail_causale_2" size="1" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_debito_2" onchange="centesimi('inail_importo_debito_2'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_credito_2" onchange="centesimi('inail_importo_credito_2'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="5" name="inail_codice_sede_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('inail_codice_sede_3','9','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="8" name="inail_numero_posizione_3" size="8" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="2" name="inail_codice_controllo_posizione_3" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="6" name="inail_numero_riferimento_3" size="6" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="1" name="inail_causale_3" size="1" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_debito_3" onchange="centesimi('inail_importo_debito_3'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_importo_credito_3" onchange="centesimi('inail_importo_credito_3'); fillInail()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="8" height="1" style="height: 9px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="7"></td><td class="testoBlackBold oRight">TOTALE I </td><td align="middle" class="rigascura"><input maxlength="15" name="inail_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="7"></td><td class="testoBlackBold oRight">TOTALE L </td><td align="middle" class="rigascura"><input maxlength="15" name="inail_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="6"></td><td class="testoBlackBold oRight" colspan="2">SALDO [I-L]  +/-  <input maxlength="1" name="inail_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="inail_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="8" height="1" style="height: 9px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="5"></td><td align="middle" class="rigascura" colspan="2" width="180">Periodo di riferimento</td><td class="rigascura" colspan="2"></td>
</tr>
<tr>
<td rowspan="3"></td><td align="middle" class="rigascura">Codice ente</td><td align="middle" class="rigascura">Codice<br>sede</td><td align="middle" class="rigascura">Causale<br>contributo</td><td align="middle" class="rigascura">Codice Posizione</td><td align="middle" class="rigascura">Da mm/aaaa</td><td align="middle" class="rigascura">A mm/aaaa</td><td align="middle" class="rigascura">Importi a debito versati <span class="rigascura">(M)</span></td><td align="middle" class="rigascura">Importi a credito compensati <span class="rigascura">(N)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura" rowspan="3" valign="top"><nobr style="min-width: 110px;"><input maxlength="4" name="altri_previdenziali_codice_ente" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('altri_previdenziali_codice_ente','11','ente')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="5" name="altri_previdenziali_codice_sede_1" size="5" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('altri_previdenziali_codice_sede_1','11','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="altri_previdenziali_causale_1" size="5" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('altri_previdenziali_causale_1','11','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="9" name="altri_previdenziali_codice_posizione_1" onchange="codice_posizione_zeri('altri_previdenziali_codice_posizione_1')" size="9" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="altri_previdenziali_periodo_inizio_1" onchange="periodo_ente('altri_previdenziali_codice_ente','altri_previdenziali_periodo_inizio_1','altri_previdenziali_importo_debito_1','altri_previdenziali_importo_credito_1')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="altri_previdenziali_periodo_fine_1" onchange="periodo_ente('altri_previdenziali_codice_ente','altri_previdenziali_periodo_fine_1','altri_previdenziali_importo_debito_1','altri_previdenziali_importo_credito_1')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_importo_debito_1" onchange="fillPeriodi('altri_previdenziali_periodo_inizio_1','altri_previdenziali_periodo_fine_1','altri_previdenziali_importo_debito_1','altri_previdenziali_importo_credito_1'); centesimi('altri_previdenziali_importo_debito_1'); fillAltriPrevidenziali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_importo_credito_1" onchange="fillPeriodi('altri_previdenziali_periodo_inizio_1','altri_previdenziali_periodo_fine_1','altri_previdenziali_importo_debito_1','altri_previdenziali_importo_credito_1'); centesimi('altri_previdenziali_importo_credito_1'); fillAltriPrevidenziali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="5" name="altri_previdenziali_codice_sede_2" size="5" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('altri_previdenziali_codice_sede_2','11','sede')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura" style="min-width: 110px;"><input maxlength="4" name="altri_previdenziali_causale_2" size="5" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('altri_previdenziali_causale_2','11','contributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></td><td align="middle" class="rigascura"><input maxlength="9" name="altri_previdenziali_codice_posizione_2" onchange="codice_posizione_zeri('altri_previdenziali_codice_posizione_2')" size="9" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="altri_previdenziali_periodo_inizio_2" onchange="periodo_ente('altri_previdenziali_codice_ente','altri_previdenziali_periodo_inizio_2','altri_previdenziali_importo_debito_2','altri_previdenziali_importo_credito_2')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="7" name="altri_previdenziali_periodo_fine_2" onchange="periodo_ente('altri_previdenziali_codice_ente','altri_previdenziali_periodo_fine_2','altri_previdenziali_importo_debito_2','altri_previdenziali_importo_credito_2')" size="7" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_importo_debito_2" onchange="fillPeriodi('altri_previdenziali_periodo_inizio_2','altri_previdenziali_periodo_fine_2','altri_previdenziali_importo_debito_2','altri_previdenziali_importo_credito_2'); centesimi('altri_previdenziali_importo_debito_2'); fillAltriPrevidenziali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_importo_credito_2" onchange="fillPeriodi('altri_previdenziali_periodo_inizio_2','altri_previdenziali_periodo_fine_2','altri_previdenziali_importo_debito_2','altri_previdenziali_importo_credito_2'); centesimi('altri_previdenziali_importo_credito_2'); fillAltriPrevidenziali()" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="8" height="1" style="height: 9px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="7"></td><td class="testoBlackBold oRight">TOTALE M </td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="7"></td><td class="testoBlackBold oRight">TOTALE N </td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_totale_credito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura" colspan="6"></td><td class="testoBlackBold oRight" colspan="2">SALDO [M-N]  +/-  <input maxlength="1" name="altri_previdenziali_segno_sezione" readonly="true" size="2" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="15" name="altri_previdenziali_saldo_sezione" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table align="right" border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" class="old-inputForm" width="100%">
<tbody><tr>
<td class="inizioSezione old-sectionTitle"><h3 class="new-titleSection">Sezione Accise/Monopoli ed Altri Versamenti Non Ammessi in Compensazione</h3></td>
</tr>
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;"><input name="radioSezioniAbilitate" onclick="confirmVisualizzaSezione(1);" type="radio"></td>
</tr>
<tr id="1">
<td class="rigascura">
<table border="2" bordercolor="#ffffff" cellpadding="0" cellspacing="0" class="tabellaF24" width="100%">
<tbody><tr>
<td colspan="7" style="width: 100%"></td>
</tr>
<tr>
<td align="middle" class="rigascura">Ente</td><td align="middle" class="rigascura">Prov.</td><td align="middle" class="rigascura">Codice</td><td align="middle" class="rigascura">Codice identificativo</td><td align="middle" class="rigascura" width="100">Rateazione</td><td align="middle" class="rigascura" colspan="1">Mese Anno<br>di riferimento</td><td align="middle" class="rigascura">Importi a debito versati<span class="rigascura">(O)</span></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_1" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_1" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_1','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_1" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_1','accise_codice_ente_1','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_1" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_1" onchange="fillRateazioneAccise('accise_riferim_fine_trib_1','accise_importo_debito_1','accise_importo_debito_1');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_1" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_1" onchange="javascript:updateRifTributoAccise(1,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_1" onchange="javascript:updateRifTributoAccise(1,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_1" onchange="fillRiferimento('accise_riferimento_mese_1','accise_riferimento_anno_1','accise_importo_debito_1','accise_importo_debito_1');updateRifTributoAccise(1,0);centesimi('accise_importo_debito_1'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_1','accise_importo_debito_1','accise_importo_debito_1');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_2" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_2" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_2','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_2" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_2','accise_codice_ente_2','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_2" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_2" onchange="fillRateazioneAccise('accise_riferim_fine_trib_2','accise_importo_debito_2','accise_importo_debito_2');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_2" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_2" onchange="javascript:updateRifTributoAccise(2,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_2" onchange="javascript:updateRifTributoAccise(2,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_2" onchange="fillRiferimento('accise_riferimento_mese_2','accise_riferimento_anno_2','accise_importo_debito_2','accise_importo_debito_2');updateRifTributoAccise(2,0);centesimi('accise_importo_debito_2'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_2','accise_importo_debito_2','accise_importo_debito_2');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_3" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_3" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_3','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_3" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_3','accise_codice_ente_3','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_3" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_3" onchange="fillRateazioneAccise('accise_riferim_fine_trib_3','accise_importo_debito_3','accise_importo_debito_3');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_3" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_3" onchange="javascript:updateRifTributoAccise(3,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_3" onchange="javascript:updateRifTributoAccise(3,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_3" onchange="fillRiferimento('accise_riferimento_mese_3','accise_riferimento_anno_3','accise_importo_debito_3','accise_importo_debito_3');updateRifTributoAccise(3,0);centesimi('accise_importo_debito_3'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_3','accise_importo_debito_3','accise_importo_debito_3');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_4" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_4" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_4','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_4" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_4','accise_codice_ente_4','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_4" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_4" onchange="fillRateazioneAccise('accise_riferim_fine_trib_4','accise_importo_debito_4','accise_importo_debito_4');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_4" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_4" onchange="javascript:updateRifTributoAccise(4,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_4" onchange="javascript:updateRifTributoAccise(4,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_4" onchange="fillRiferimento('accise_riferimento_mese_4','accise_riferimento_anno_4','accise_importo_debito_4','accise_importo_debito_4');updateRifTributoAccise(4,0);centesimi('accise_importo_debito_4'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_4','accise_importo_debito_4','accise_importo_debito_4');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_5" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_5" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_5','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_5" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_5','accise_codice_ente_5','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_5" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_5" onchange="fillRateazioneAccise('accise_riferim_fine_trib_5','accise_importo_debito_5','accise_importo_debito_5');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_5" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_5" onchange="javascript:updateRifTributoAccise(5,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_5" onchange="javascript:updateRifTributoAccise(5,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_5" onchange="fillRiferimento('accise_riferimento_mese_5','accise_riferimento_anno_5','accise_importo_debito_5','accise_importo_debito_5');updateRifTributoAccise(5,0);centesimi('accise_importo_debito_5'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_5','accise_importo_debito_5','accise_importo_debito_5');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_6" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_6" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_6','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_6" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_6','accise_codice_ente_6','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_6" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_6" onchange="fillRateazioneAccise('accise_riferim_fine_trib_6','accise_importo_debito_6','accise_importo_debito_6');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_6" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_6" onchange="javascript:updateRifTributoAccise(6,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_6" onchange="javascript:updateRifTributoAccise(6,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_6" onchange="fillRiferimento('accise_riferimento_mese_6','accise_riferimento_anno_6','accise_importo_debito_6','accise_importo_debito_6');updateRifTributoAccise(6,0);centesimi('accise_importo_debito_6'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_6','accise_importo_debito_6','accise_importo_debito_6');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr><input maxlength="2" name="accise_codice_ente_7" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="2" name="accise_codice_provincia_7" onkeypress="return onlyAlpha(event);" size="2" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_provincia_7','13','provincia_accise')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="accise_codice_tributo_7" size="4" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice2('accise_codice_tributo_7','accise_codice_ente_7','13','tributo')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="14" name="accise_codice_identificativo_7" size="20" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="4" name="accise_riferim_fine_trib_7" onchange="fillRateazioneAccise('accise_riferim_fine_trib_7','accise_importo_debito_7','accise_importo_debito_7');" size="10" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura" colspan="1"><input name="accise_riferimento_tributo_7" type="hidden" value=""><input maxlength="2" name="accise_riferimento_mese_7" onchange="javascript:updateRifTributoAccise(7,0);" size="2" type="text" value="" class="new-form-control"><input maxlength="4" name="accise_riferimento_anno_7" onchange="javascript:updateRifTributoAccise(7,0);" size="4" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="" name="accise_importo_debito_7" onchange="fillRiferimento('accise_riferimento_mese_7','accise_riferimento_anno_7','accise_importo_debito_7','accise_importo_debito_7');updateRifTributoAccise(7,0);centesimi('accise_importo_debito_7'); fillAccise();fillRateazioneAccise('accise_riferim_fine_trib_7','accise_importo_debito_7','accise_importo_debito_7');" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="fineSezione" colspan="8" height="1" style="height: 9px;"></td>
</tr>
<tr>
<td class="rigascura" colspan="5"></td><td class="testoBlackBold oRight">TOTALE O</td><td align="middle" class="rigascura"><input maxlength="15" name="accise_totale_debito" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="left" class="rigascura" colspan="8">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="rigascura col-1" width="195" style="width: 15%; text-align: left;">Ufficio</td><td class="rigascura">Codice Atto</td>
</tr>
<tr>
<td class="rigascura col-1" width="195" style="width: 15%; text-align: left;"><nobr style="min-width: 110px;"><input maxlength="3" name="accise_codice_ufficio" onchange="fieldToUpper('accise_codice_ufficio')" size="10" type="text" value="" class="new-form-control"><a href="javascript:lookupcodice('accise_codice_ufficio','1','ufficio')" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td class="rigascura"><input maxlength="11" name="accise_codice_atto" onchange="fieldToUpper('accise_codice_atto')" size="30" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<input name="accise_segno_sezione" type="hidden" value="P"><script type="text/javascript">
		
			var accise_segno = document.insertdelegaf24.accise_segno_sezione.value.replace(/^\s*((?:[\S\s]*\S)?)\s*$/, '$1');
			if(accise_segno == null || accise_segno.length == 0)
				document.insertdelegaf24.accise_segno_sezione.value ="P"; 
		
		</script><input maxlength="15" name="accise_saldo_sezione" type="hidden" value="">
</tbody></table>
</td>
</tr>
<tr>
<td class="rigascura">
<div class="inizioSezione old-sectionTitle" colspan="3" style="margin-top:20px; display:block;"><h3 class="new-titleSection">Saldo Finale</h3></div>
<table border="0" cellpadding="0" cellspacing="0" style="margin:auto" width="784px">
<tbody><tr></tr>
<tr>
<td class="rigascura"></td><td class="testoBlackBold oRight">SALDO FINALE +</td><td align="left" class="rigascura" width="131"><input maxlength="15" name="saldo_delega" onchange="checkValue('saldo_delega','','TRUE','REAL', '', '15','SALDO FINALE');" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="left" class="rigascura">
<table>
<tbody><tr>
<td class="col-1" style="width: 15%; text-align: left;"><input name="flag_firmatario" type="hidden" value="0"><input name="chk_firmatario" onclick="swapFirmatario()" type="checkbox"><script type="text/javascript">
			
			var firmatario = document.insertdelegaf24.flag_firmatario.value;
			document.insertdelegaf24.chk_firmatario.checked = false;
			if (firmatario=="1") document.insertdelegaf24.chk_firmatario.checked = true;
			
		</script></td><td class="rigascura" style="color: #003b79 !important;">
																											Barrare in caso di versamento da parte di<br>
																											erede, genitore, tutore o curatore fallimentare
																										</td>
</tr>
</tbody></table>
</td><td class="rigascura oRight" style="color: #003b79 !important;">
																								&nbsp;(Data Pag.)<span class="testoRedSmallBold">*</span>&nbsp;
																							</td><td align="left" class="rigascura">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td align="center"><input class="datepicker new-form-control hasDatepicker" id="picker2" maxlength="10" name="data_pagamento" onchange="checkValue('data_pagamento','','TRUE','DATE', '0', '10','Data');" size="13" type="text" value=""></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_pagamento','insertdelegaf24','2');" onclick="$('#picker2').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
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
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="inizioSezione old-sectionTitle"><h3 class="new-titleSection">Estremi del Versamento</h3></td>
</tr>
<input maxlength="5" name="cod_abi_ricevente" size="7" type="hidden" value=""><input maxlength="5" name="cod_cab_ricevente" size="7" type="hidden" value=""><input maxlength="12" name="num_cc_ricevente" size="20" type="hidden" value="">
<tr>
<td class="rigascura">
<table class="old-inputForm">
<tbody><tr>
<td align="center" class="rigascura col-1" style="width: 15%; text-align: left;"><input checked="true" name="destinatario_stampa" onclick="setVisibility();" type="radio" value="1"></td><td align="left" class="rigascura" style="color: #003b79 !important;">Invio attestazione titolare C/C addebito</td>
</tr>
<tr>
<td align="center" class="rigascura col-1" style="width: 15%; text-align: left;"><input name="destinatario_stampa" onclick="setVisibility();" type="radio" value="2"></td><td align="left" class="rigascura" style="color: #003b79 !important;">Invio attestazione destinatario di stampa</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr id="dest_stampa">
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="0" cellspacing="1" width="100%">
<tbody><tr>
<td>
<table align="left" border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr class="rigaScura col-1" style="width: 15%; text-align: left;">
<td width="110">
			&nbsp;Ragione sociale<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td colspan="3"><input maxlength="45" name="denominazione_mittente" onchange="checkValue('denominazione_mittente','',mandatory_rs,'STRING', '0', '45','Ragione sociale')" style="width:332" type="text" value="" class="new-form-control"><script>
			    denomMittente = document.forms.insertdelegaf24.denominazione_mittente; 
			</script></td>
</tr>
<tr class="rigaScura col-1" style="width: 15%; text-align: left;">
<td>
			&nbsp;Indirizzo<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td><input maxlength="34" name="indirizzo" onchange="checkValue('indirizzo','',mandatory_indirizzo,'STRING', '0', '34','Indirizzo')" style="width:332" type="text" value="" class="new-form-control"><script>
				    indMittente = document.forms.insertdelegaf24.indirizzo; 
			</script></td><td width="50">
			CAP<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td><input maxlength="5" name="cap" onchange="checkValue('cap','',mandatory_cap,'STRING', '0', '5','CAP')" size="5" type="text" value="" class="new-form-control"><script>
				    capMittente = document.forms.insertdelegaf24.cap; 
			</script></td>
</tr>
<tr class="rigaScura col-1" style="width: 15%; text-align: left;">
<td>
			&nbsp;Comune<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td width="355"><input maxlength="25" name="comune" onchange="checkValue('comune','',mandatory_comune,'STRING', '0', '25','Comune')" style="width:332" type="text" value="" class="new-form-control"><script>
				    comMittente = document.forms.insertdelegaf24.comune; 
			</script></td><td>
			Prov.<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td><input maxlength="2" name="provincia" onchange="checkValue('provincia','',mandatory_provincia,'STRING', '0', '2','Prov.')" size="2" type="text" value="" class="new-form-control"><script>
				    proMittente = document.forms.insertdelegaf24.provincia; 
			</script></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="rigaScura" width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="col-1" colspan="2" style="width: 15%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td class="rigaScura"><input checked="true" name="titolare_pagamento" onclick="checkTitolareCC();" type="radio" value="3"></td><td class="rigaScura">
							Il titolare del c/c di pagamento corrisponde all'azienda mittente (intestatario)
						</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="1" class="rigaChiara" width="100%">
<tbody><tr>
<td class="rigaScura">
<table width="100%">
<tbody><tr>
<td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td class="rigaScura" width="25"></td><td align="left" class="rigaScura col-1" style="width: 15%; text-align: left;">
													Banca
													<span class="testoRedSmallBold">*&nbsp;</span>&nbsp;
												</td><td align="left" class="col-2" style="width: 50%;"><select name="bank_combo" onchange="fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);ccInput.value = fitToLength(getAccount(cc_combo, ''),0,12);document.insertdelegaf24.cod_abi_ricevente.value=abiInput.value;document.insertdelegaf24.cod_cab_ricevente.value=cabInput.value;document.insertdelegaf24.num_cc_ricevente.value=ccInput.value;" style="width:260" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1361">05584 - BANCA POPOLARE DI MILANO S.P.A.</option></select><script>
														 bankCombo = document.forms.insertdelegaf24.bank_combo; 
													</script></td><input name="cod_abi" readonly="true" size="5" type="hidden" value=""><script>
													 abiInput = document.forms.insertdelegaf24.cod_abi; 
												</script><input name="num_cc" type="hidden" value=""><script>
													 
													ccInput = document.forms.insertdelegaf24.num_cc;
													
												</script><td align="left" class="rigaScura col-3" style="width: 12%; text-align: left;">
													C/C
													<span class="testoRedSmallBold">*</span>&nbsp;
												</td><td class="col-4" style="width: 33%; text-align: left;"><select name="cc_combo" onchange="ccInput.value = fitToLength(getAccount(this, ''),0,12); cabInput.value = fitToLength(getCabCode(this, ''),0,5); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" style="width:200" class="new-form-control"><option value=""></option><option value="2455525">33473 - 000000011905                                                                                        </option><option value="2538011">01636 - EUR700001843</option><option value="2538012">01636 - EUR800004456</option><option value="2538010">33473 - USD181000600</option></select><script>
														
														ccCombo = document.forms.insertdelegaf24.cc_combo;
														
													</script></td><input name="cod_cab" readonly="true" size="5" type="hidden" value=""><script>
													 cabInput = document.forms.insertdelegaf24.cod_cab; 
												</script>
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
<td class="col-1" colspan="2" style="width: 15%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td class="rigaScura"><input name="titolare_pagamento" onclick="checkTitolareCC();" type="radio" value="2"></td><td class="rigaScura">
							Il titolare del c/c di pagamento corrisponde al contribuente
						</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td class="rigaScura" width="25"></td><td align="left" class="testoBlackSmall col-1" width="54" style="width: 15%; text-align: left; min-width: 110px;">
						ABI
							<span class="testoRedSmallBold">*</span><input disabled="true" maxlength="5" name="cod_abi_c" onchange="checkValue('cod_abi_c','','FALSE','ABI_CAB', '5', '5','abi contribuente'); document.insertdelegaf24.cod_abi_ricevente.value=abiInputC.value;" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupagency();" name="lookupagency"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
								
								abiInputC = document.forms.insertdelegaf24.cod_abi_c;
								function lookupagency()
								{
									if(abiInputC.value=="")
										gotoservlet1("lookupagency","CercaAgenzia");
									else
										gotoservlet1("lookupagency?cod-abi="+abiInputC.value+"&command=Cerca","CercaAgenzia");
								}
								
							</script></td><td align="left" class="col-2" width="83" style="width: 50%;">
<div style="width: 60px"></div>
<span class="testoBlackSmall">
								CAB</span><span class="testoRedSmallBold">*</span><input disabled="true" maxlength="5" name="cod_cab_c" onchange="checkValue('cod_cab_c','','FALSE','ABI_CAB', '5', '5','cab contribuente'); document.insertdelegaf24.cod_cab_ricevente.value=cabInputC.value;" size="5" type="text" value="" class="new-form-control"><script>
										 cabInputC = document.forms.insertdelegaf24.cod_cab_c; 
									</script><a href="javascript:threeParametersServlet('verifyabicab','cod-abi',abiInputC.value,'cod-cab',cabInputC.value,'verify','true','height=280,width=350,resizable=no,scrollbars=yes,screenX=600,dependent=yes','Selezionare tutti i campi obbligatori');" name="verifyagency"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td class="testoBlackSmall col-3 oRight" style="width: 12%; text-align: left;"><span class="testoBlackSmall">
								C/C</span><span class="testoRedSmallBold">*</span>&nbsp;
						</td><td class="col-4" style="width: 33%; text-align: left;"><input disabled="true" maxlength="12" name="cc_input_c" onchange="checkValue('cc_input_c','','FALSE','ACCOUNT', '12', '12','conto corrente contribuente'); document.insertdelegaf24.num_cc_ricevente.value=ccInputC.value;" size="16" type="text" value="" class="new-form-control"><script>
						 ccInputC = document.forms.insertdelegaf24.cc_input_c; 
						</script></td>
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
<td class="rigascura" height="10"></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="104"><input name="banca" type="hidden" value="*">
</tr>
<tr>
<td align="left" class="testoRedSmallBold" style="color: rgb(0,59,121)">
                                              * campi obbligatori
                                            </td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigascura" height="10"></td>
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
</div><div class="new-buttons"></div>
<div class="new-buttons">
<input class="btn" name="command" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci">
																								&nbsp;
								<input class="btn" name="command" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla">
</div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					
							
							fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
							fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, true);

							if (ccCombo.selectedIndex>0) { //selez banca e intest. da conto
								fillFromCC(accounteerCombo, bankCombo, ccCombo);
							}
							fillInput();
							
						
					
					var destStampa = '1';
					
					
					if (destStampa == '1')
					{
						document.insertdelegaf24.destinatario_stampa[0].checked=true;
						document.insertdelegaf24.destinatario_stampa[1].checked=false;
						document.getElementById('dest_stampa').style.display = 'none';
						mandatory_rs = 'FALSE';
						mandatory_cap = 'FALSE';
						mandatory_indirizzo = 'FALSE';
						mandatory_comune = 'FALSE';
						mandatory_provincia = 'FALSE';
					}
					else
					{
						document.insertdelegaf24.destinatario_stampa[0].checked=false;
						document.insertdelegaf24.destinatario_stampa[1].checked=true;
						document.getElementById('dest_stampa').style.display = 'block';
						mandatory_rs ='TRUE';						
						mandatory_cap = 'TRUE';						
						mandatory_indirizzo = 'TRUE';						
						mandatory_comune = 'TRUE';						
						mandatory_provincia = 'TRUE';
					}
					
					if (document.insertdelegaf24.accise_totale_debito.value!="")
						visualizzaSezione(1);
					else
						visualizzaSezione(0);
							
					
					if(ccCombo.length==2)
						ccCombo.selectedIndex=1;
					document.insertdelegaf24.cod_abi_riferimento_mittente.value=getAbiCode(accounteerCombo, '');
					document.insertdelegaf24.cod_cab_riferimento_mittente.value=getCabCode(accounteerCombo, '');
					document.insertdelegaf24.codice_fiscale_mittente.value=getCF(accounteerCombo,'');
					document.insertdelegaf24.codice_fiscale_p.value=getCF(accounteerCombo,'');
					
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>