<script language="JavaScript">
			
			dialog = $( "#myModal" ).dialog({
			      autoOpen: false,
			      height: 300,
			      width: 350,
			      modal: true,
			      buttons: {
        				OK: function() {
          				$( this ).dialog( "close" );
        				}
      				}
			    });
			
			// sezione modifica distinta
				var hiddenCampiOrdinante = false;
				
			// end sezione modifica distinta
				
					function doItBefore(nameSubmit)
					{
						if(nameSubmit=='Annulla')
						{
							document.insertmav.command.value = 'Annulla';
							return true;
						}
						else
						{
							// parametro per la servlet per i dati dell'anagrafica
							if ( document.insertmav.add_to_anagrafica.checked == true )
						    {
								document.insertmav.add_to_anagrafica.value = "CLIENTE";
						    }
							var isOk = true;
							var msg = ""
							
							// controllo dell'iban in caso sia checkato
							if ((document.insertmav.abiIban[1].checked)&&(document.insertmav.add_to_anagrafica.checked)&&(checkIBANSintax(document.insertmav.iban.value)==false)){
								msg = msg + "IBAN: formato del codice non corretto\n";
								isOk = false;
							}
							if(isOk == false)
							{
								alert(msg);
								checkAll('insertmav');
								return false;
							}
							else
							{
								document.forms['insertmav'].comune_sigla_prov.value = document.forms['insertmav'].comune.value + " " + document.forms['insertmav'].provincia.value
								if (checkForm('insertmav')){
									// valorizza abi,cab,conto,cin con i valori contenuti nella stringa abi
									if ((document.insertmav.abiIban[1].checked)&&(document.insertmav.add_to_anagrafica.checked)){
										document.forms['insertmav'].abi_debitore.value = abi_iban;
										document.forms['insertmav'].cab_debitore.value = cab_iban;
										document.forms['insertmav'].conto_debitore.value = account_iban;
										document.forms['insertmav'].cin_debitore.value = cinIta_iban;
									}
								
									//valorizzo la banca selezionata per permettere alla procedura guidata di
									//visualizzare l'elenco delle disposizioni
									document.insertmav.banca.value = document.insertmav.numero_abi_assuntrice.value
									return true;
								}
								else
									return false;
							}
						}
					}
					// chiamata dal popup ricerca abi
					function setSportello(id,cod_abi,cod_cab,localita,nome)
					{
						document.forms['insertmav'].abi_debitore.value = fitToLength(cod_abi,0,5);
						document.forms['insertmav'].cab_debitore.value = fitToLength(cod_cab,0,5);
					}
					
					function mavFitToLength(value,start,length)
					{
					   var result = null;
					   if (value.length > length)
					   {
					       result = value.substr(start,length);
					   }
					   else
					   {
					       result = value;
					   }
					   return result;
					}
				
					// chiamata dal popup clientisearch
					function setNominativo(id,descrizione,cf_piva,indirizzo,comune,cap,provincia,abi,cab,descrizione_banca,p_iva,numero_conto,cin,codcliente,nome,codice_cliente_debitore,tipo_codice_cliente)
					{
						if (indirizzo.length > 30 ) {
							var msg =   "Attenzione! il campo indirizzo e' stato troncato, ";
							msg = msg + "perche' supera il limite di 30 caratteri previsto per la stampa del bollettino MAV.\n";
							msg = msg + "Ti consigliamo di adeguare questa informazione per garantire che il bollettino sia spedito al corretto indirizzo del debitore.";
							
							 dialog.dialog( "open" );
						}
						var ragionesocialenome = rtrim(descrizione)+nome;

						document.forms['insertmav'].descrizione_debitore.value=fitToLength(ragionesocialenome,0,60);
						document.forms['insertmav'].indirizzo.value=mavFitToLength(indirizzo,0,30);
						document.forms['insertmav'].comune.value = comune;
						document.forms['insertmav'].provincia.value = provincia;
						document.forms['insertmav'].conto_debitore.value=fitToLength(numero_conto,0,12);
						document.forms['insertmav'].cin_debitore.value = fitToLength(cin,0,1);
						document.forms['insertmav'].cap.value=fitToLength(cap,0,5);
						document.forms['insertmav'].cod_debitore.value= codcliente;
						document.forms['insertmav'].abi_debitore.value= abi;
						document.forms['insertmav'].cab_debitore.value= cab;
						if (trim(cf_piva) != "")
							document.forms['insertmav'].codice_fiscale_cliente.value=fitToLength(cf_piva,0,16);
						else
							document.forms['insertmav'].codice_fiscale_cliente.value=fitToLength(p_iva,0,16);
					}
					// chiamata dal popup clientisearch, non eliminare!! 
					function setCondizioni(riba_tipo_doc_debito,rid_flag_esito,riba_flag_esito,rid_flag_storno,riba_flag_st_avviso,flag_1a_rata,rid_gg_limite,tipo_rid)
					{
					}
					// chiamata dal popup verificaCab
					function verificaSportello()
					{
						var abiDes = document.forms['insertmav'].abi_debitore.value;
						var cabDes = document.forms['insertmav'].cab_debitore.value;
						
						if(abiDes!='' && cabDes!='')
						{
							threeParametersServlet('verifyabicab','cod-abi',abiDes,'cod-cab',cabDes,'verify','true','height=280,width=350,resizable=no,scrollbars=yes,screenX=600,dependent=yes','Selezionare tutti i campi obbligatori.');
						}
						else
						{
							alert("Inserire i codici ABI e CAB");
						}
					}
					
					function gotoservlet(url,title)
					{
						dialogoCentratoWithScrolls(url, title, 700, 350);
					}
					
					function fillInput()
					{
						siaInput.value =  fitToLength(getSiaCode(accounteerCombo, ""),0,5);
						abiInput.value =  fitToLength(getAbiCode(bankCombo, ""),0,5);
						cabInput.value =  fitToLength(getCabCode(ccCombo, ""),0,5);
						contoInput.value = fitToLength(getAccount(ccCombo, ""),0,12);
						signInput.value=fitToLength(getDesc(accounteerCombo, ""),0,96);
					}
					
					function setAbiIban()
					{
						if (document.insertmav.abiIban[0].checked == true) // caso ABI/CAB/CONTO selezionati
						{
							// set ABI/CAB/CONTO/CIN
								//setto i campi lettura e scrittura
								document.insertmav.abi_debitore.readOnly = false;
								document.insertmav.cab_debitore.readOnly = false;
								document.insertmav.conto_debitore.readOnly = false;
								document.insertmav.cin_debitore.readOnly = false;
								//setto il colore dei campi a bianco
								document.insertmav.abi_debitore.style.backgroundColor = "#ffffff";
								document.insertmav.cab_debitore.style.backgroundColor = "#ffffff";
								document.insertmav.conto_debitore.style.backgroundColor = "#ffffff";
								document.insertmav.cin_debitore.style.backgroundColor = "#ffffff";
							
							// set IBAN
								//setto valore a null
								document.insertmav.iban.value = "";
								//setto il campo sola lettura
								document.insertmav.iban.readOnly = true;
								//setto il colore del campo a grigio
								document.insertmav.iban.style.backgroundColor = "#e0e0e0";
						}
						else // caso IBAN selezionato
						{
							// set ABI/CAB/CONTO/CIN
								//setto valori a null
								document.insertmav.abi_debitore.value = "";
								document.insertmav.cab_debitore.value = "";
								document.insertmav.conto_debitore.value = "";
								document.insertmav.cin_debitore.value = "";
								//setto i campi sola lettura
								document.insertmav.abi_debitore.readOnly = true;
								document.insertmav.cab_debitore.readOnly = true;
								document.insertmav.conto_debitore.readOnly = true;
								document.insertmav.cin_debitore.readOnly = true;
								//setto il colore dei campi a grigio
								document.insertmav.abi_debitore.style.backgroundColor = "#e0e0e0";
								document.insertmav.cab_debitore.style.backgroundColor = "#e0e0e0";
								document.insertmav.conto_debitore.style.backgroundColor = "#e0e0e0";
								document.insertmav.cin_debitore.style.backgroundColor = "#e0e0e0";
								
							// set IBAN
								//setto il campo lettura e scrittura
								document.insertmav.iban.readOnly = false;
								//setto il colore del campo a bianco
								document.insertmav.iban.style.backgroundColor = "#ffffff";
						}
					}
					
			</script><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="myModal" aria-labelledby="ui-id-1" style="display: none; position: absolute;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">&nbsp;</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div><div class="modal ui-dialog-content ui-widget-content" id="myModal" style="display: block;">
<p>
<b>Attenzione! il campo indirizzo e' stato troncato, </b>
    				perche' supera il limite di 30 caratteri previsto per la stampa del bollettino MAV.
    				Ti consigliamo di adeguare questa informazione per garantire che il bollettino sia spedito al corretto indirizzo del debitore.
  				</p>
</div><div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"><div class="ui-dialog-buttonset"><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">OK</span></button></div></div><div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div><div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div></div>

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
					var signInput = null;
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertmav" method="post" name="insertmav">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr valign="top">
<td><input name="comune_sigla_prov" type="hidden">
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
<td align="left" class="old-pageTitle titoloTabella" height="20"><div class="new-flag"></div><h1>
															&nbsp;
															
																	Mav
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Incassi/Mav.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr>
<td class="rigachiara"><input name="causale" type="hidden" value="07000"><input name="segno" type="hidden" value="-"><input name="chiavi_controllo" type="hidden" value=""><input name="tipo_codice" type="hidden" value="9"><input name="codice_identificativo_univoco" type="hidden" value=""><input name="campo_a_disposizione" type="hidden" value="">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																		Dati Ordinante
																	</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
					Ordinante
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="340" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','TRUE','', '', '','Ordinante'); fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); signInput.value = fitToLength(getDesc(this, ''),0,96); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select></td><script>
			accounteerCombo = document.forms.insertmav.intestatario;
		</script><td align="left" class="col-3" width="40" style="width: 12%; text-align: left;">
					SIA
				</td><td class="col-4" width="90" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
			siaInput = document.forms.insertmav.codice_azienda;
		</script>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
					Descr. Ordinante
					<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="96" name="descrizione_creditore" onchange="checkValue('descrizione_creditore','','TRUE','STRING', '1', '96','Descr. Ordinante')" style="width:335px" type="text" value="" class="new-form-control"></td><script>
			signInput = document.forms.insertmav.descrizione_creditore;
		</script>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
					Banca
					<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><select name="numero_abi_assuntrice" onchange="checkValue('numero_abi_assuntrice','','TRUE','', '', '','Banca');fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = fitToLength(getAbiCode(this, ''),0,5); cabInput.value = fitToLength(getCabCode(ccCombo, ''),0,5);" style="width:335px" class="new-form-control"><option value=""></option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select></td><script>
			bankCombo = document.forms.insertmav.numero_abi_assuntrice;
		</script><td align="left" class="col-3" title="Cab - Descrizione Conto" style="width: 12%; text-align: left;">
					Conto
					<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="num_rapporto" onchange="checkValue('num_rapporto','','TRUE','', '', '','Conto');cabInput.value = fitToLength(getCabCode(this, ''),0,5); contoInput.value = fitToLength(getAccount(this, ''),0,12); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" class="new-form-control"><option value=""></option><option value="1382733">33980 - 000000004831</option><option value="1380486">33980 - 000000004688</option><option value="1413595">33920 - 000000001748</option><option value="1408587">33980 - 000000003827</option><option value="1396342">33920 - 000000001521</option><option value="1408588">33980 - 000000004099</option><option value="1408730">52990 - 000000006780</option><option value="1396089">33920 - 000000002328</option><option value="1411360">33980 - 000000005354</option><option value="1415552">33980 - 000000013652</option><option value="1395353">33920 - 000000002375</option><option value="1414344">33980 - 000000013607</option><option value="1414345">33980 - 000000013608</option><option value="1384710">33980 - 000000005325</option><option value="1405924">32800 - 000000011399</option><option value="1414346">33980 - 000000013609</option><option value="1409042">52990 - 000000002598</option><option value="1409041">52990 - 000000005950</option><option value="1409043">52990 - 000000000926</option><option value="1409044">52990 - 000000006403</option><option value="1414582">33980 - 000000013635</option><option value="1395606">33920 - 000000001459</option><option value="1409046">52990 - 000000003146</option><option value="1409045">52990 - 000000002384</option><option value="1397016">33920 - 000000002156</option><option value="1397148">33920 - 000000002103</option><option value="1408589">33980 - 000000004728</option><option value="1384711">33980 - 000000013710</option><option value="1413596">33980 - 000000005236</option><option value="2578085">33980 - 000000005441</option></select></td><script>
			ccCombo = document.forms.insertmav.num_rapporto;
		</script><input name="conto" type="hidden" value=""><script>
			contoInput = document.forms.insertmav.conto;
		</script>
</tr>
</tbody></table>
</td>
</tr>
<input name="codice_abi_assuntrice" readonly="true" size="5" type="hidden" value=""><script>
				abiInput = document.forms.insertmav.codice_abi_assuntrice;
			</script><input name="cab_assuntrice" readonly="true" size="5" type="hidden" value=""><script>
				cabInput = document.forms.insertmav.cab_assuntrice;
			</script><input maxlength="16" name="codice_fiscale_cliente" onkeypress="return onlyAlphaNumbers(event)" onchange="checkValue('codice_fiscale_cliente','','FALSE','CF_PIVA', '11', '16','Codice Fiscale - P.IVA')" size="20" type="hidden" value="">
<tr>
<td class="rigachiara">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																		Dati Debitore
																	</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" colspan="3" width="250" style="width: 15%; text-align: left;"><strong>Nel campo ''Indirizzo'' inserire anche il numero civico </strong>
																		affinche' il bollettino MAV sia correttamente recapitato al debitore	
																	</td>
</tr>
<tr class="rigaScura" height="20"></tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="130" style="width: 15%; text-align: left;">
			Ragione sociale	
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="330" style="width: 50%; min-width: 110px;"><input maxlength="60" name="descrizione_debitore" onchange="checkValue('descrizione_debitore','','TRUE','STRING', '1', '60','Ragione sociale')" style="width:335px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupclientisearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupclientisearch()
					{
						if (accounteerCombo.value =="")
						{
							alert("Selezionare l'Intestatario!");
						}
						else
						{
							if(document.insertmav.descrizione_debitore.value=="")
							{
								gotoservlet("lookupclientimavsearch?intestatario="+accounteerCombo.value,"CercaNominativo");
							}
							else
							{
								gotoservlet("lookupclientimavsearch?ragione_sociale="+document.insertmav.descrizione_debitore.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
					}
				
			</script></td><td class="col-3" width="55" style="width: 12%; text-align: left;">
			Codice
		</td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input maxlength="50" name="cod_debitore" style="width:150px" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupclientisearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupclientisearchWithCod()
					{
						if (accounteerCombo.value =="")
						{
							alert("Selezionare l'Intestatario!");
						}
						else
						{
							if(document.insertmav.cod_debitore.value=="")
							{
								gotoservlet("lookupclientimavsearch?intestatario="+accounteerCombo.value,"CercaNominativo");
							}
							else
							{
								gotoservlet("lookupclientimavsearch?codice_cliente="+document.insertmav.cod_debitore.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
					}
				
			</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Indirizzo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="30" name="indirizzo" onchange="checkValue('indirizzo','','TRUE','STRING', '1', '30','Indirizzo')" style="width:335px" type="text" value="" class="new-form-control"></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			CAP
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cap" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cap','','TRUE','STRING', '1', '5','CAP')" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Comune
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="50" name="comune" onchange="checkValue('comune','','TRUE','STRING', '1', '50','Comune')" style="width:335px" type="text" value="" class="new-form-control"></td><td class="col-3" width="45" style="width: 12%; text-align: left;">
			Prov.
			<span class="testoRedSmallBold">*</span></td><td class="col-4" width="30" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia" onkeypress="return onlyAlpha(event)" onchange="checkValue('provincia','','TRUE','STRING', '2', '2','Prov.')" style="width:30px" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;" width="125"></td><td class="col-2" style="width: 50%; min-width: 110px;" width="340"><input checked="true" name="abiIban" onclick="setAbiIban()" type="radio" value="0">

																							ABI
																						
																						<span>&nbsp;&nbsp;&nbsp;</span><input maxlength="5" name="abi_debitore" onkeypress="return onlyNaturalNumbers(event);" onchange="checkValue('abi_debitore','','false','ABI_CAB', '5', '5','ABI')" size="5" type="text" class="new-form-control" style="background-color: rgb(255, 255, 255);"><a class="old-fieldSearch" href="javascript:lookupagency();"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
																										
																											function lookupagency()
																											{
																												if(document.insertmav.abi_debitore.value=="")
																													gotoservlet("lookupagency","CercaAgenzia");
																												else
																													gotoservlet("lookupagency?cod-abi="+document.insertmav.abi_debitore.value+"&command=Cerca","CercaAgenzia");
																											}
																										
																								</script><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
																							CAB
																						
																						<input maxlength="5" name="cab_debitore" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cab_debitore','','false','ABI_CAB', '5', '5','CAB')" size="5" type="text" class="new-form-control" style="background-color: rgb(255, 255, 255);"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
																							Conto
																						</td><td class="col-4" width="30" style="width: 33%; text-align: left;"><input maxlength="12" name="conto_debitore" onkeypress="return onlyAlphaNumbers(event)" onchange="checkValue('conto_debitore','','false','ACCOUNT', '12', '12','Conto')" size="16" type="text" class="new-form-control" style="background-color: rgb(255, 255, 255);">
																							CIN
																							<input maxlength="1" name="cin_debitore" onkeypress="return onlyAlpha(event)" size="1" type="text" class="new-form-control" style="background-color: rgb(255, 255, 255);"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;" width="125"></td><td class="col-2" style="width: 50%;" width="340"><input name="abiIban" onclick="setAbiIban()" type="radio" value="1">
																					IBAN
																					<input maxlength="27" name="iban" style="width: 285px; background-color: rgb(224, 224, 224);" type="text" value="" class="new-form-control" readonly=""><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/CoordinateConto/CoordinateConto.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td><td align="left" class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4" width="30" style="width: 33%; text-align: left;">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr class="rigascura">
<td align="left"><input checked="false" name="add_to_anagrafica" type="checkbox" value=""></td><td>
																								Aggiorna dati anagrafica
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
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" colspan="6">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																		Dati M.Av.
																	</h3></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" width="125" style="width: 15%; text-align: left;">
			Importo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" width="360" style="width: 50%;"><input maxlength="14" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '','Importo')" style="width:240px" type="text" value="" class="new-form-control">&nbsp;EURO
		</td><input maxlength="1" name="codice_divisa" type="hidden" value="E"><td align="left" class="col-3" width="85" style="width: 12%; text-align: left;">
			Scadenza
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td><input class="datepicker dataScadYBW new-form-control hasDatepicker" maxlength="" name="data_pagamento" onkeypress="return onlyDate(event)" onchange="checkValue('data_pagamento','','TRUE','DATE', '', '','Scadenza');" size="13" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1569848778358"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_pagamento','insertmav','1');" onclick="$('.datepicker.dataScadYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
						$(function(){
						$('.datepicker').datepicker();
						})
						</script></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Descrizione M.Av.
			<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><textarea cols="149" name="riferimenti_debito" onkeyup="maxL4TextArea(this,80)" onchange="checkValue('riferimenti_debito','','TRUE','STRING', '1', '80','Descrizione M.Av.');" rows="2" class="new-form-control"></textarea></td>
</tr>
<tr>
<td></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">Tipo bollettino</td><td class="col-2" style="width: 50%;"><select name="tipo_bollettino" size="1" style="width:240px" class="new-form-control"><option value=" ">Secondo accordi</option><option value="B">Bollettino M.A.v. solo bancario - B</option><option value="P">Bollettino M.A.v. postale - P</option></select></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Num. Dispo.
		</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="10" name="numero_disposizione" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('numero_disposizione','','FALSE','STRING', '1', '10','Num. Dispo.')" size="13" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" colspan="6">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="rigascura old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="4"><input name="banca" type="hidden"><td align="center" class="old-buttons" height="30">
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
					document.insertmav.add_to_anagrafica.checked=false;
					
					if (!hiddenCampiOrdinante)
					{
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
						document.insertmav.command.value = 'modifica_distinta';
					}
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>