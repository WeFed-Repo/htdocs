<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
					
						initializeContextSelectorLibrary(parent.context);
						var accounteerCombo = null;
						var siaInput = null;
						var bankCombo = null;
						var abiInput = null;
					
				</script>
<table class="larghezzaEsterna">
<tbody>
<tr>
<td>
<form action="elencoquietanzef24" method="get" name="setfilter">
<input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filtroVisibilita" type="hidden" value="false"><input name="operation" type="hidden" value="riepilogoStampaF24">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr valign="top">
<td align="center">
<table align="right" border="0" cellpadding="2" cellspacing="0">
<tbody><tr>
<td height="20" class="oRight"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table bgcolor="#000000" border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="old-pageTitle titoloTabella" height="20"><div class="new-flag"></div><h1>
																				Quietanze F24
																			
																		&nbsp;
																	</h1></td>
</tr>
<tr>
<td class="titoloFiltri"></td>
</tr>
<tr class="sfondofiltri">
<td>
<table align="center" border="0" cellpadding="2" cellspacing="1" width="100%">
<tbody><tr class="section">
<td class="testoBlackSmall col-1 oRight" width="" style="width: 15%; text-align: left;">
        				Rag. Soc./Intestatario:
						<span class="testoRedSmallBold"> *</span></td><td class="col-2" width="" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '-1', stringa_tutti, ALL_DATA, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5);" style="width:300px" class="new-form-control"><option value="*">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select><script> 
					accounteerCombo = document.setfilter.intestatario; 
					fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true); 
					selectComboByOptionValue(accounteerCombo,''); 
				</script></td><td class="testoBlackSmall col-3 oRight" width="16%" style="width: 12%; text-align: left;"> SIA: </td><td class="col-4 oRight" width="6%" style="width: 33%; text-align: left;"><input name="sia" readonly="true" style="width:60px" type="text" class="new-form-control"><script> 
					siaInput = document.setfilter.sia;
				</script></td>
</tr>
<tr class="section">
<td class="testoBlackSmall col-1 oRight" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
        				Banca:
						<span class="testoRedSmallBold"> *</span></td><td class="col-2" style="width: 50%;"><select name="banca" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5);" style="width:300px" class="new-form-control"><option value="-1">TUTTI</option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1325">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option></select><script>
					bankCombo = document.setfilter.banca;
					fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "-1", stringa_tutti, ALL_DATA, NO_ALL, bankCombo, true, true);
					selectComboByOptionValue(bankCombo,'');
				</script><input name="abi" type="hidden" value=""><script>
					abiInput = document.setfilter.abi;
					fillInput();
				</script></td><td class="testoBlackSmall col-3 oRight" style="width: 12%; text-align: left;">
				Righe per pagina:
			</td><td class="col-4 oRight" style="width: 33%; text-align: left;"><select name="numRows" style="width:60px" class="new-form-control"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option><option value="200">200</option></select><script>
					selectComboByOptionValue(document.setfilter.numRows,'10');
				</script></td>
</tr>
<tr class="section">
<td class="testoBlackSmall col-1 oRight" style="padding-top: 0px; width: 15%; text-align: left;" width="">
				Tipo esito:
			</td><td class="col-2" style="padding-top: 0px; width: 50%;"><select name="TIPO_ESITO" style="width:300px" class="new-form-control"><option selected="" value="0">TUTTI</option><option value="104">Esiti Deleghe F24</option><option value="106">Esiti&nbsp;F24 Elementi Identificativi</option></select><script>
					selectComboByOptionValue(document.setfilter.TIPO_ESITO,'');
				</script></td><td class="col-3" style="padding-top: 0px; width: 12%; text-align: left;"></td><td class="col-4-but-right oRight" colspan="2" style="padding-top: 0px; width: 33%; text-align: right;"><input class="btn small" name="bottoneFiltro" onclick="collaps();" style="cursor:Hand" type="button" value="<< Avanzate"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="sfondofiltri">
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td height="8"></td>
</tr>
<tr>
<td align="center" colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="90%">
<tbody><tr>
<td height="1" style="height: 10px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="2"></td>
</tr>
<script>
			// Campi facenti parte dei filtri avanzati
			var filtri_avanzati = new Array();
			filtri_avanzati[0]='tipo_estrazione';
			filtri_avanzati[1]='DA_DATA_SPEDIZIONE';
			filtri_avanzati[2]='A_DATA_SPEDIZIONE';
			filtri_avanzati[3]='DA_DATA_PAGAMENTO';
			filtri_avanzati[4]='A_DATA_PAGAMENTO';
			filtri_avanzati[5]='DA_SALDO_DELEGA';
			filtri_avanzati[6]='A_SALDO_DELEGA'
			filtri_avanzati[7]='CODICE_FISCALE'
		</script>
<tr id="filtro" style="">
<td align="center">
<table align="center" border="0" cellpadding="2" cellspacing="1" class="old-inputForm section" width="100%">
<tbody><tr>
<td class="testoBlackSmall col-1 oRight" width="" style="width: 15%; text-align: left;">Tipo estrazione:</td><td align="left" class="testoBlackSmallBold col-2" valign="bottom" style="width: 50%;"><select name="tipo_estrazione" style="width:300px" class="new-form-control"><option selected="" value="*">TUTTI</option><option value="e">Gia' Estratti</option><option value="n">Mai Estratti</option></select><script>
								selectComboByOptionValue(document.setfilter.tipo_estrazione,'');
							</script></td><td align="left" class="col-3" style="width: 12%; text-align: left;"><span class="testoBlackSmall" style="">C.F/P.I contribuente:</span></td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input id="CODICE_FISCALE" maxlength="16" name="CODICE_FISCALE" onchange="checkValue('CODICE_FISCALE','','FALSE','CF_PIVA', '0', '16','CODICE FISCALE '); " size="25" type="text" value="" class="new-form-control"><a href="javascript:lookupcontribuentisearch()" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script>document.setfilter.CODICE_FISCALE.value = '';</script><input id="sessionKey" name="sessionKey" type="hidden"></td>
</tr>
<tr id="downloadAsZipRow" style="display: none;">
<td class="testoBlackSmall col-1 oRight" width="" style="width: 15%; text-align: left;">Estrazione formato ZIP:</td><td align="left" class="testoBlackSmallBold col-2" colspan="3" valign="bottom" style="width: 50%;"><input id="ZIP" name="ZIP" type="checkbox"></td><script>if($("#ZIP").value=="on"){
								document.setfilter.ZIP.checked = 'true';
								}  
							</script>
</tr>
<tr id="downloadAsZipRow2" style="display: none;">
<td class="testoBlackSmall col-1 oRight" width="" style="width: 15%; text-align: left;">Numero massimo di quietanze per file ZIP:</td><td align="left" class="testoBlackSmallBold col-2" colspan="3" valign="bottom" style="width: 50%;"><select id="maxFilesInsideZIP" name="maxFilesInsideZIP" onchange="checkValue('maxFilesInsideZIP','','FALSE','INTEGER', '', '','Numero massimo di quietanze per file ZIP')" class="new-form-control"><option value="">TUTTI</option><option value="50">50</option><option selected="" value="100">100</option><option value="200">200</option></select></td>
</tr>
<tr>
<td align="center" colspan="3">
<table border="0" cellpadding="0" cellspacing="0" width="90%">
<tbody><tr>
<td height="1" style="height: 10px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table>
<tbody><tr>
<td align="left" class="testoBlackSmallBold" style="padding-left: 205px" valign="bottom"><span class="testoBlackSmall">Da:</span></td><td align="left" class="testoBlackSmallBold" style="padding-left: 152px" valign="bottom"><span class="testoBlackSmall">A:</span></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="col-1 oRight" style="width: 15%; text-align: left;"><span class="testoBlackSmall" style="padding-left:0px">Data spedizione:</span></td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="105"><input class="datepicker daDataSpedYBW new-form-control hasDatepicker" name="DA_DATA_SPEDIZIONE" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_SPEDIZIONE','','FALSE','DATE', '', '')" title="Formato data gg/mm/aaaa" type="text" id="dp1568743920689"><script>document.setfilter.DA_DATA_SPEDIZIONE.value = '';</script></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_SPEDIZIONE','setfilter','1');" onclick="$('.datepicker.daDataSpedYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
										
										$(function(){
										$('.datepicker').datepicker();
										});
																		
										</script></td><td width="10px"></td><td><input class="aDataSpedYBW datepicker new-form-control hasDatepicker" name="A_DATA_SPEDIZIONE" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_SPEDIZIONE','','FALSE','DATE', '', '')" title="Formato data gg/mm/aaaa" type="text" id="dp1568743920690"><script>document.setfilter.A_DATA_SPEDIZIONE.value = '';</script><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_SPEDIZIONE','setfilter','2');" onclick="$('.datepicker.aDataSpedYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><td></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
</tr><tr>
<td class="testoBlackSmall col-1 oRight" style="width: 15%; text-align: left;">
								Data Pag.:
							</td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="105"><input class="daDataPagYBW datepicker new-form-control hasDatepicker" name="DA_DATA_PAGAMENTO" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_PAGAMENTO','','FALSE','DATE', '', '')" title="Formato data gg/mm/aaaa" type="text" id="dp1568743920691"><script>document.setfilter.DA_DATA_PAGAMENTO.value = '';</script></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_PAGAMENTO','setfilter','3');" onclick="$('.datepicker.daDataPagYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><td width="10px"></td><td width="105"><input class="datepicker aDataPagYBW new-form-control hasDatepicker" name="A_DATA_PAGAMENTO" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_PAGAMENTO','','FALSE','DATE', '', '')" title="Formato data gg/mm/aaaa" type="text" id="dp1568743920692"><script>document.setfilter.A_DATA_PAGAMENTO.value = '';</script></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_PAGAMENTO','setfilter','4');" onclick="$('.aDataPagYBW.datepicker').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4-pe" style="width: 33%; text-align: left;">&nbsp;</td>
</tr>
<tr>
<td class="col-1 oRight" style="width: 15%; text-align: left;"><span class="testoBlackSmall" style="padding-left:0px;">Saldo Delega:</span></td><td align="left" class="col-2" style="width: 50%;"><input maxlength="16" name="DA_SALDO_DELEGA" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('DA_SALDO_DELEGA','','FALSE','CURRENCY', '', '')" type="text" class="new-form-control"><span style="margin-left: 35px"></span><script>document.setfilter.DA_SALDO_DELEGA.value = '';</script><input maxlength="16" name="A_SALDO_DELEGA" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('A_SALDO_DELEGA','','FALSE','CURRENCY', '', '')" type="text" class="new-form-control"><script>document.setfilter.A_SALDO_DELEGA.value = '';</script></td><td class="col-3" style="width: 12%; text-align: left;">&nbsp;</td><td class="col-4" style="width: 33%; text-align: left;">&nbsp;</td>
</tr>

<tr></tr>
<tr>
<td align="center" colspan="3">
<table border="0" cellpadding="0" cellspacing="0" width="90%">
<tbody><tr>
<td height="1" style="height: 10px;"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr align="left" class="sfondofiltri">
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td width="120"><span class="testoRedSmallBold" style="color: rgb(0,59,121)">
                                                    * campi obbligatori
                                                  </span></td><td align="center" class="old-buttons" height="30"></td><td width="120">&nbsp;</td>
</tr></tbody></table>
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
</div><div class="new-buttons"><input class="btn" name="visualizza" onclick="location.href='/youwebbusiness/strutt_priv_old.php?tpl=11.QuietanzeF24/02.QuietanzaF24_risultato.php&cantiere=vr2'" style="cursor:Hand" type="button" value="Visualizza"><input name="selectNumRapporto" type="hidden" class="btn"></div>
</div>
</form>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza � a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">� 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>