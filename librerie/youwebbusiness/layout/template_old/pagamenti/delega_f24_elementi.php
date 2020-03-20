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
<style>
							.col-1,.col-2,.col-3,.col-4{
								height: 30px;
							}
						</style>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertdelegaf24iva" method="post" name="insertdelegaf24">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>
														F24 Elementi Identificativi
													<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/DelegheF24Iva.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr height="10" valign="bottom">
<td align="left" colspan="2"><span class="testoRedSmallBold">Attenzione:</span><span class="testoRedSmall">dopo ogni spedizione verificare che la delega risulti</span><span class="testoRedSmallBold">Accettata</span><span class="testoRedSmall">dalla banca incaricata del pagamento,</span></td>
</tr>
<tr height="10" valign="bottom">
<td align="left" colspan="2"><span class="testoRedSmall">consultando la sezione</span><span class="testoRedSmallBold">Esiti Deleghe F24</span><span class="testoRedSmall">,presente nell'</span><span class="testoRedSmallBold">Area Dispositiva.</span></td>
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
<table align="center" border="0" cellpadding="0" cellspacing="0" class="rigachiara" width="100%">
<tbody><tr>
<td width="100%">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="testoBluBold" width="90"><img border="0" height="66" src="img/finanze.gif" width="90"></td><td class="testoBluBold" width="70"></td><td align="middle" class="testoBluBold">MODELLO DI PAGAMENTO UNIFICATO</td><td class="testoBluBold" width="160"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" bordercolor="#ffffff" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="inizioSezione old-sectionTitle" colspan="4"><h3 class="new-titleSection">Dati Ordinante</h3></td>
</tr>
<tr class="rigaScura">
<td align="left" class="rigascura" colspan="4" valign="top">
<table border="0" cellpadding="1" cellspacing="1" class="rigaScura" width="100%">
<tbody><tr class="rigaScura">
<td colspan="4">&nbsp;</td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="140" style="width: 15%; text-align: left;"><span class="testoBlackSmall">Rag. Soc./Intestatario</span><span class="testoRedSmallBold">*</span>&nbsp;
																				</td><td align="left" class="rigaScura" style="display:none" width="340"><span id="intestatario_2"></span></td><td align="left" class="col-2" style="width: 50%;" width="340"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);   ccInput.value = fitToLength(getAccount(cc_combo, ''),0,12);   document.insertdelegaf24.cod_abi_ricevente.value=abiInput.value;   document.insertdelegaf24.cod_cab_ricevente.value=cabInput.value;   document.insertdelegaf24.num_cc_ricevente.value=ccInput.value;   document.insertdelegaf24.cod_abi_riferimento_mittente.value=getAbiCode(accounteerCombo, '');   document.insertdelegaf24.cod_cab_riferimento_mittente.value=getCabCode(accounteerCombo, '');   if(document.insertdelegaf24.destinatario_stampa[0].checked==true)    denomMittente.value = fitToLength(getIntestatario(accounteerCombo,''),0,43);   codFiscMittente.value = fitToLength(getCF(accounteerCombo,''),0,20);   codice_fiscale_mittente.value = fitToLength(getCF(accounteerCombo,''),0,20);   checkTitolareCC();" style="width:350" class="new-form-control"><option value=""></option><option value="588536">C.P.C. INOX SPA</option></select><script>
		accounteerCombo = document.forms.insertdelegaf24.intestatario;
		</script></td><td align="left" class="testoBlackSmall col-3" width="40" style="width: 12%; text-align: left;">
																							SIA
																							<span class="testoRedSmallBold">*</span>&nbsp;  
																							<input name="cod_sia" readonly="true" size="5" type="text" value="" class="new-form-control"><script>
			siaInput = document.forms.insertdelegaf24.cod_sia;
		</script></td><td class="col-4" width="50" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td align="left" class="rigaScura col-1" width="145" style="width: 15%; text-align: left;">
					&nbsp;Codice Fiscale<span class="testoRedSmallBold">*</span>&nbsp;
				</td><td align="left" class="col-2" width="150" style="width: 50%;">
					&nbsp;<input name="codice_fiscale_mittente" readonly="true" size="24" type="text" value="" class="new-form-control"><input name="codice_fiscale_p" readonly="true" type="hidden" value="02801530961"></td><script>
			codiceFiscaleP = document.forms.insertdelegaf24.codice_fiscale_p;
		</script><td class="col-3" height="30" style="width: 12%; text-align: left;">
							ABI<span class="testoRedSmallBold">*</span>&nbsp;
							&nbsp;<input maxlength="5" name="cod_abi_riferimento_mittente" onchange="checkValue('cod_abi_riferimento_mittente','','FALSE','ABI_CAB', '5', '5','ABI');" readonly="true" size="5" type="text" value="" class="new-form-control"></td><td class="col-4" height="30" style="width: 33%; text-align: left;">
						CAB<span class="testoRedSmallBold">*</span>&nbsp;
						&nbsp;<input maxlength="5" name="cod_cab_riferimento_mittente" onchange="checkValue('cod_cab_riferimento_mittente','','FALSE','ABI_CAB', '5', '5','CAB');" readonly="true" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td colspan="4"><input maxlength="20" name="cod_fisc_mittente" type="hidden" value="02801530961"><script>
			    codFiscMittente = document.forms.insertdelegaf24.cod_fisc_mittente; 
		</script>&nbsp;
																				</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="inizioSezione old-sectionTitle" colspan="4" style="margin-top:20px; display:block;"><h3 class="new-titleSection">Contribuente</h3></td>
</tr>
<tr>
<td class="testoBlackBold col-1" colspan="1" heigth="30" style="width: 15%; text-align: left;">
																		CODICE FISCALE<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="16" name="codice_fiscale" onchange="checkValue('codice_fiscale','','TRUE','CF_PIVA', '0', '16','CODICE FISCALE '); checkTitolareCC(); " size="25" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="testoBlackBold col-1" colspan="4" height="20" style="width: 15%; text-align: left;">DATI ANAGRAFICI<br>
</td>
</tr>
<tr>
<td class="rigascura col-1" colspan="1" height="20" style="width: 15%; text-align: left;">Cognome, denominazione o ragione sociale <span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" colspan="1" height="35" style="width: 50%; min-width: 110px;"><input maxlength="24" name="cognome" onchange="checkValue('cognome','','TRUE','STRING', '0', '24','DATI ANAGRAFICI Cognome');" size="60" style="width: 308px;" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcontribuentisearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
			
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
<td class="rigascura col-1" colspan="1" style="width: 15%; text-align: left;">Nome</td><td class="rigascura col-2" colspan="1" style="width: 50%;"><input maxlength="20" name="nome" onchange="checkValue('nome','','FALSE','STRING', '0', '20','DATI ANAGRAFICI Nome');" size="58" type="text" value="" class="new-form-control"></td>
</tr>
<input maxlength="24" name="ragione_sociale" onchange="checkValue('ragione_sociale','','FALSE','STRING', '0', '24','DATI ANAGRAFICI Ragione sociale');" size="74" type="hidden" value="">
<tr>
<td class="rigascura col-1" height="20" style="width: 15%; text-align: left;">Data di nascita</td><td class="rigascura col-2" height="30" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td></td><td><input class="datepicker dataNascitaYBW new-form-control hasDatepicker" maxlength="10" name="data_nascita" onchange="checkValue('data_nascita','','FALSE','DATE', '0', '10','Data di nascita');" size="12" type="text" value="" id="dp1569592863324"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_nascita','insertdelegaf24','1');" onclick="
						$('.datepicker.dataNascitaYBW').datepicker('show');
						"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
					$(function(){
					$('.datepicker').datepicker();
					})
					</script></td>
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
<td class="rigascura col-1" style="width: 15%; text-align: left;">Comune (o Stato estero) di nascita</td><td class="rigascura col-2" height="35" style="width: 50%;"><input maxlength="25" name="comune_nascita" onchange="checkValue('comune_nascita','','FALSE','STRING', '0', '25','DATI ANAGRAFICI Comune (o Stato estero) di nascita');" size="50" type="text" value="" class="new-form-control"></td><td class="rigascura col-3" style="width: 12%; text-align: left;">Prov.</td><td class="rigascura col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia_nascita" onchange="checkValue('provincia_nascita','','FALSE','STRING', '0', '2','DATI ANAGRAFICI Prov.'); document.forms.insertdelegaf24.provincia_nascita.value=document.forms.insertdelegaf24.provincia_nascita.value.toUpperCase();" style="WIDTH: 30px" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="testoBlackBold col-1" colspan="4" height="20" style="width: 15%; text-align: left;">DOMICILIO FISCALE</td>
</tr>
<tr>
<td class="rigascura col-1" height="20" style="width: 15%; text-align: left;">Comune<span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" height="30" style="width: 50%;"><input maxlength="25" name="comune_domicilio" onchange="checkValue('comune_domicilio','','TRUE','STRING', '0', '25','DOMICILIO FISCALE Comune');" size="55" type="text" value="" class="new-form-control"></td><td class="rigascura col-3" style="width: 12%; text-align: left;">Prov.<span class="testoRedSmallBold">*</span></td><td class="rigascura col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia_domicilio" onchange="checkValue('provincia_domicilio','','TRUE','STRING', '0', '2','DOMICILIO FISCALE Provincia'); document.forms.insertdelegaf24.provincia_domicilio.value=document.forms.insertdelegaf24.provincia_domicilio.value.toUpperCase();" size="2" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td class="rigascura col-1" colspan="1" style="width: 15%; text-align: left;">Via e numero civico<span class="testoRedSmallBold">*</span></td><td class="rigascura col-2" colspan="1" style="width: 50%;"><input maxlength="35" name="indirizzo_domicilio" onchange="checkValue('indirizzo_domicilio','','TRUE','STRING', '0', '35','DOMICILIO FISCALE Indirizzo');" size="58" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" class="old-inputForm" width="100%">
<tbody><tr class="rigascura">
<td class="col-1" width="260" style="width: 15%; text-align: left;"><span class="testoBlackBold">CODICE FISCALE</span> del coobbligato, erede, genitore, tutore o curatore fallimentare			
																	</td><td class="col-2" width="160" style="width: 50%;"><input maxlength="16" name="secondo_codice_fiscale" onchange="checkValue('secondo_codice_fiscale','','FALSE','CF_PIVA', '0', '16','Codice fiscale coobbligato'); obbliCodIdentificativo();" size="25" type="text" value="" class="new-form-control"></td><td class="col-3" width="180" style="width: 12%; text-align: left;"><span class="testoBlackBold">CODICE IDENTIFICATIVO</span></td><td class="col-4" width="50" style="width: 33%; text-align: left;"><nobr style="min-width: 110px;"><input maxlength="2" name="codice_identificativo_20" onchange="checkValue('codice_identificativo_20','',mandatory_codice_identificativo,'STRING', '0', '2','CODICE IDENTIFICATIVO');" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpCodiceIdentificativo()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<div class="inizioSezione old-sectionTitle" colspan="5" style="margin-top:20px; display:block;"><h3 class="new-titleSection">Sezione Erario</h3></div>
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" class="old-inputForm nuoviBordi" style="margin: auto;" width="784px">
<tbody><tr></tr>
<tr heigth="20">
<td align="middle" class="rigascura">Tipo</td><td align="middle" class="rigascura">Elementi Identificativi</td><td align="middle" class="rigascura">Codice</td><td align="middle" class="rigascura">Anno di riferimento</td><td align="middle" class="rigascura">Importi a debito versati</td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_1" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_1.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_1.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_1')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_1" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_1" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_1','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_1" onchange="fillAnno('auto_erario_anno_riferimento_1');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_1" onchange="centesimi('auto_erario_importo_debito_1');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_2" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_2.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_2.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_2')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_2" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_2" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_2','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_2" onchange="fillAnno('auto_erario_anno_riferimento_2');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_2" onchange="centesimi('auto_erario_importo_debito_2');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_3" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_3.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_3.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_3')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_3" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_3" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_3','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_3" onchange="fillAnno('auto_erario_anno_riferimento_3');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_3" onchange="centesimi('auto_erario_importo_debito_3');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_4" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_4.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_4.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_4')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_4" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_4" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_4','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_4" onchange="fillAnno('auto_erario_anno_riferimento_4');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_4" onchange="centesimi('auto_erario_importo_debito_4');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_5" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_5.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_5.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_5')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_5" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_5" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_5','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_5" onchange="fillAnno('auto_erario_anno_riferimento_5');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_5" onchange="centesimi('auto_erario_importo_debito_5');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_6" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_6.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_6.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_6')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_6" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_6" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_6','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_6" onchange="fillAnno('auto_erario_anno_riferimento_6');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_6" onchange="centesimi('auto_erario_importo_debito_6');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_7" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_7.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_7.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_7')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_7" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_7" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_7','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_7" onchange="fillAnno('auto_erario_anno_riferimento_7');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_7" onchange="centesimi('auto_erario_importo_debito_7');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_8" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_8.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_8.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_8')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_8" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_8" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_8','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_8" onchange="fillAnno('auto_erario_anno_riferimento_8');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_8" onchange="centesimi('auto_erario_importo_debito_8');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_9" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_9.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_9.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_9')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_9" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_9" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_9','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_9" onchange="fillAnno('auto_erario_anno_riferimento_9');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_9" onchange="centesimi('auto_erario_importo_debito_9');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_10" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_10.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_10.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_10')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_10" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_10" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_10','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_10" onchange="fillAnno('auto_erario_anno_riferimento_10');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_10" onchange="centesimi('auto_erario_importo_debito_10');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_11" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_11.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_11.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_11')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_11" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_11" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_11','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_11" onchange="fillAnno('auto_erario_anno_riferimento_11');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_11" onchange="centesimi('auto_erario_importo_debito_11');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_12" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_12.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_12.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_12')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_12" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_12" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_12','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_12" onchange="fillAnno('auto_erario_anno_riferimento_12');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_12" onchange="centesimi('auto_erario_importo_debito_12');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_13" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_13.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_13.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_13')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_13" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_13" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_13','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_13" onchange="fillAnno('auto_erario_anno_riferimento_13');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_13" onchange="centesimi('auto_erario_importo_debito_13');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_14" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_14.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_14.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_14')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_14" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_14" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_14','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_14" onchange="fillAnno('auto_erario_anno_riferimento_14');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_14" onchange="centesimi('auto_erario_importo_debito_14');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_15" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_15.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_15.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_15')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_15" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_15" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_15','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_15" onchange="fillAnno('auto_erario_anno_riferimento_15');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_15" onchange="centesimi('auto_erario_importo_debito_15');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_16" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_16.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_16.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_16')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_16" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_16" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_16','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_16" onchange="fillAnno('auto_erario_anno_riferimento_16');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_16" onchange="centesimi('auto_erario_importo_debito_16');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_17" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_17.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_17.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_17')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_17" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_17" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_17','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_17" onchange="fillAnno('auto_erario_anno_riferimento_17');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_17" onchange="centesimi('auto_erario_importo_debito_17');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_18" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_18.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_18.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_18')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_18" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_18" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_18','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_18" onchange="fillAnno('auto_erario_anno_riferimento_18');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_18" onchange="centesimi('auto_erario_importo_debito_18');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_19" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_19.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_19.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_19')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_19" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_19" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_19','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_19" onchange="fillAnno('auto_erario_anno_riferimento_19');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_19" onchange="centesimi('auto_erario_importo_debito_19');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_20" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_20.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_20.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_20')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_20" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_20" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_20','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_20" onchange="fillAnno('auto_erario_anno_riferimento_20');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_20" onchange="centesimi('auto_erario_importo_debito_20');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_21" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_21.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_21.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_21')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_21" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_21" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_21','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_21" onchange="fillAnno('auto_erario_anno_riferimento_21');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_21" onchange="centesimi('auto_erario_importo_debito_21');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_22" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_22.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_22.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_22')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_22" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_22" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_22','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_22" onchange="fillAnno('auto_erario_anno_riferimento_22');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_22" onchange="centesimi('auto_erario_importo_debito_22');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_23" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_23.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_23.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_23')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_23" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_23" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_23','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_23" onchange="fillAnno('auto_erario_anno_riferimento_23');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_23" onchange="centesimi('auto_erario_importo_debito_23');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_24" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_24.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_24.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_24')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_24" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_24" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_24','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_24" onchange="fillAnno('auto_erario_anno_riferimento_24');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_24" onchange="centesimi('auto_erario_importo_debito_24');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_25" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_25.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_25.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_25')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_25" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_25" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_25','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_25" onchange="fillAnno('auto_erario_anno_riferimento_25');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_25" onchange="centesimi('auto_erario_importo_debito_25');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_26" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_26.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_26.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_26')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_26" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_26" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_26','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_26" onchange="fillAnno('auto_erario_anno_riferimento_26');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_26" onchange="centesimi('auto_erario_importo_debito_26');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_27" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_27.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_27.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_27')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_27" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_27" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_27','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_27" onchange="fillAnno('auto_erario_anno_riferimento_27');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_27" onchange="centesimi('auto_erario_importo_debito_27');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="1" name="auto_erario_tipo_veicolo_28" onchange="document.forms.insertdelegaf24.auto_erario_tipo_veicolo_28.value=document.forms.insertdelegaf24.auto_erario_tipo_veicolo_28.value.toUpperCase();" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:showPopUpTipoVeicolo('auto_erario_tipo_veicolo_28')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="17" name="auto_erario_numero_telaio_28" size="25" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><nobr style="min-width: 110px;"><input maxlength="4" name="auto_erario_codice_tributo_28" size="5" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('auto_erario_codice_tributo_28','8','tributo')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td align="middle" class="rigascura"><input maxlength="4" name="auto_erario_anno_riferimento_28" onchange="fillAnno('auto_erario_anno_riferimento_28');" size="5" type="text" value="" class="new-form-control"></td><td align="middle" class="rigascura"><input maxlength="16" name="auto_erario_importo_debito_28" onchange="centesimi('auto_erario_importo_debito_28');saldoFinale();" size="20" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" style="margin: auto" width="784px">
<tbody><tr heigth="20">
<td align="left" class="rigascura col-1" style="width: 15%; text-align: left;">Ufficio</td><td align="left" class="rigascura">Codice Atto</td>
</tr>
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;"><nobr style="min-width: 110px;"><input maxlength="3" name="codice_ufficio" onchange="return fieldToUpper('codice_ufficio')" size="10" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcodice('codice_ufficio','1','ufficio')"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a></nobr></td><td class="rigascura"><input maxlength="11" name="codice_atto" onchange="return fieldToUpper('codice_atto')" size="30" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="rigascura">
<div class="inizioSezione old-sectionTitle" colspan="3" style="margin-top:20px; display:block;"><h3 class="new-titleSection">Saldo Finale</h3></div>
<table border="0" cellpadding="0" cellspacing="0" style="margin: auto" width="784px">
<tbody><tr></tr>
<tr>
<td class="rigascura"></td><td class="testoBlackBold oRight">SALDO FINALE +</td><td align="left" class="rigascura" width="131"><input maxlength="16" name="saldo_delega" onchange="checkValue('saldo_delega','','TRUE','REAL', '', '16','SALDO FINALE');" readonly="true" size="13" style="text-align : right;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td align="left" class="rigascura">
<table>
<tbody><tr>
<td class="col-1" style="width: 15%; text-align: left;"><input name="flag_firmatario" type="hidden" value="0"><input name="chk_firmatario" onclick="swapFirmatario()" type="checkbox"><script type="text/javascript">
			
			var firmatario = document.insertdelegaf24.flag_firmatario.value;
			document.insertdelegaf24.chk_firmatario.checked = false;
			if (firmatario=="1") document.insertdelegaf24.chk_firmatario.checked = true;
			
		</script></td><td class="rigascura">
																								Barrare in caso di versamento da parte di<br>
																								erede, genitore, tutore o curatore fallimentare
																							</td>
</tr>
</tbody></table>
</td><td class="rigascura oRight">
																					&nbsp;(Data Pag.)<span class="testoRedSmallBold">*</span>&nbsp;
																				</td><td align="left" class="rigascura">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td align="center"><input class="datepicker dataPagamentoYBW new-form-control hasDatepicker" maxlength="10" name="data_pagamento" onchange="checkValue('data_pagamento','','TRUE','DATE', '0', '10','Data');" size="13" type="text" value="" id="dp1569592863325"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_pagamento','insertdelegaf24','2');" onclick="$('.datepicker.dataPagamentoYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
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
<td class="inizioSezione old-sectionTitle" style="margin-top:20px; display:block;"><h3 class="new-titleSection">Estremi del Versamento</h3></td>
</tr>
<input maxlength="5" name="cod_abi_ricevente" size="7" type="hidden" value="05034"><input maxlength="5" name="cod_cab_ricevente" size="7" type="hidden" value="33473"><input maxlength="12" name="num_cc_ricevente" size="20" type="hidden" value="000000011905">
<tr>
<td class="rigascura col-1" style="width: 15%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td align="center" class="rigascura"><input checked="true" name="destinatario_stampa" onclick="setVisibility();" type="radio" value="1"></td><td align="left" class="rigascura">Invio attestazione titolare C/C addebito</td>
</tr>
<tr>
<td align="center" class="rigascura"><input name="destinatario_stampa" onclick="setVisibility();" type="radio" value="2"></td><td align="left" class="rigascura">Invio attestazione destinatario di stampa</td>
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
<td class="col-1" style="width: 15%; text-align: left;">
<table align="left" border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td width="110">
			&nbsp;Ragione sociale<span class="testoRedSmallBold">*</span>&nbsp;
		</td><td colspan="3"><input maxlength="45" name="denominazione_mittente" onchange="checkValue('denominazione_mittente','',mandatory_rs,'STRING', '0', '45','Ragione sociale')" style="width:332" type="text" value="" class="new-form-control"><script>
			    denomMittente = document.forms.insertdelegaf24.denominazione_mittente; 
			</script></td>
</tr>
<tr class="rigaScura">
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
<tr class="rigaScura">
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
<td class="col-1" colspan="4" style="width: 15%; text-align: left;">
<table border="0" bordercolor="#000000" cellpadding="1" cellspacing="1" width="100%">
<tbody><tr>
<td class="rigaScura" width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr style="">
<td colspan="2">
<table class="old-inputForm">
<tbody><tr>
<td class="rigaScura"><input checked="true" name="titolare_pagamento" onclick="checkTitolareCC();" type="radio" value="3"></td><td class="rigaScura">
							Il titolare del c/c di pagamento corrisponde all'azienda mittente (intestatario)
						</td>
</tr>
</tbody></table>
</td>
</tr>
<tr style="">
<td class="rigaScura" width="25"></td><td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="1" class="rigaChiara" width="100%">
<tbody><tr>
<td class="rigaScura">
<table width="100%">
<tbody><tr>
<td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="25">
													&nbsp;
												</td><td align="left" class="rigaScura col-1" style="width: 15%; text-align: left;">
													Banca
													<span class="testoRedSmallBold">*&nbsp;</span>&nbsp;
												</td><td align="left" class="col-2" style="width: 50%;"><select name="bank_combo" onchange="fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);ccInput.value = fitToLength(getAccount(cc_combo, ''),0,12);document.insertdelegaf24.cod_abi_ricevente.value=abiInput.value;document.insertdelegaf24.cod_cab_ricevente.value=cabInput.value;document.insertdelegaf24.num_cc_ricevente.value=ccInput.value;" style="width:260" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1361">05584 - BANCA POPOLARE DI MILANO S.P.A.</option></select><script>
														 bankCombo = document.forms.insertdelegaf24.bank_combo; 
													</script></td><input name="cod_abi" readonly="true" size="5" type="hidden" value="05034"><script>
													 abiInput = document.forms.insertdelegaf24.cod_abi; 
												</script><input name="num_cc" type="hidden" value="000000011905"><script>
													 ccInput = document.forms.insertdelegaf24.num_cc; 
												</script><td align="left" class="rigaScura col-3" style="width: 12%; text-align: left;">
													C/C
													<span class="testoRedSmallBold">*</span>&nbsp;
												</td><td class="col-4" style="width: 33%; text-align: left;"><select name="cc_combo" onchange="ccInput.value = fitToLength(getAccount(this, ''),0,12); cabInput.value = fitToLength(getCabCode(this, ''),0,5); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" style="width:200" class="new-form-control"><option value=""></option><option value="2455525">33473 - 000000011905                                                                                        </option><option value="2538011">01636 - EUR700001843</option><option value="2538012">01636 - EUR800004456</option><option value="2538010">33473 - USD181000600</option></select><script>
														 ccCombo = document.forms.insertdelegaf24.cc_combo; 
													</script></td><input name="cod_cab" readonly="true" size="5" type="hidden" value="33473"><script>
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
<tr style="display:none">
<td colspan="2">
<table>
<tbody><tr>
<td class="rigaScura">
							Il titolare del c/c di pagamento corrisponde all'azienda mittente (intestatario)
						</td>
</tr>
</tbody></table>
</td>
</tr>
<tr style="display:none">
<td class="rigaScura" width="25"></td><td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="1" class="rigaChiara" width="100%">
<tbody><tr>
<td class="rigaScura">
<table width="100%">
<tbody><tr>
<td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td width="25">
													&nbsp;
												</td><td align="left" class="rigaScura col-1" style="width: 15%; text-align: left;">
													Banca&nbsp;
												</td><td align="left" class="rigaScura col-2" style="width: 50%;"><span id="bank_combo_2"></span></td><td align="left" class="rigaScura col-3" style="width: 12%; text-align: left;">
													C/C	&nbsp;
												</td><td align="left" class="rigaScura col-4" style="width: 33%; text-align: left;"><span id="cc_combo_2"></span></td>
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
<td colspan="2">
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
<td class="rigaScura" width="25"></td><td class="rigaScura">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td width="25">
								&nbsp;
							</td><td align="left" class="testoBlackSmall col-1" width="54" style="width: 15%; text-align: left; min-width: 110px;">
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
									
								</script></td><td class="col-2" width="68" style="width: 50%;"><span class="testoBlackSmall">
									CAB</span><span class="testoRedSmallBold">*</span>&nbsp;
											<input disabled="true" maxlength="5" name="cod_cab_c" onchange="checkValue('cod_cab_c','','FALSE','ABI_CAB', '5', '5','cab contribuente'); document.insertdelegaf24.cod_cab_ricevente.value=cabInputC.value;" size="5" type="text" value="" class="new-form-control"><script>
											 cabInputC = document.forms.insertdelegaf24.cod_cab_c; 
										</script><a href="javascript:threeParametersServlet('verifyabicab','cod-abi',abiInputC.value,'cod-cab',cabInputC.value,'verify','true','height=280,width=350,resizable=no,scrollbars=yes,screenX=600,dependent=yes','Selezionare tutti i campi obbligatori');" name="verifyagency"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td class="testoBlackSmall col-3 oRight" style="width: 12%; text-align: left;"><span class="testoBlackSmall">C/C</span><span class="testoRedSmallBold">*</span>&nbsp;
							</td><td class="col-4" colspan="2" style="width: 33%; text-align: left;"><input disabled="true" maxlength="12" name="cc_input_c" onchange="checkValue('cc_input_c','','FALSE','ACCOUNT', '12', '12','conto corrente contribuente'); document.insertdelegaf24.num_cc_ricevente.value=ccInputC.value;" size="16" type="text" value="" class="new-form-control"><script>
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
<tr class="rigaScura col-1" style="width: 15%; text-align: left;">
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="106"><input name="banca" type="hidden" value="*"><td align="center" class="old-buttons" height="30">
<br>

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
</div><div class="new-buttons"><input class="btn" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					// =================== modifica ================ //
					
							
							fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
							fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, true);
							if (ccCombo.selectedIndex>0) //selez banca e intest. da conto
								fillFromCC(accounteerCombo, bankCombo, ccCombo);
							
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
					
					if(ccCombo.length>=2)
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