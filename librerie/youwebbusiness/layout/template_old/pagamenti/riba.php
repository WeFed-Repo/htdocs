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
					
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="elencoavvisi" method="post" name="setfilter">
<input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filtroVisibilita" type="hidden" value="false"><input name="title" type="hidden" value="">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="$" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
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
																				Pagamento Riba
																			</h1></td>
</tr>
<tr>
<td class="titoloFiltri"></td>
</tr>
<tr class="sfondofiltri">
<td>
<table align="center" border="0" cellpadding="2" cellspacing="1" width="100%">
<tbody><tr class="section">
<td class="testoBlackSmall col-1 oRight" width="22%" style="width: 15%; text-align: left;">
        				Rag. Soc./Intestatario:
						<span class="testoRedSmallBold"> *</span></td><td class="col-2" width="44%" style="width: 50%;"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '*', stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5);" style="width:300px" class="new-form-control"><option value="*">TUTTI</option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select><script>
					accounteerCombo = document.setfilter.intestatario;
					fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true);
					selectComboByOptionValue(accounteerCombo,'');
				</script></td><td class="testoBlackSmall col-3 oRight" width="16%" style="width: 12%; text-align: left;">
				SIA:
			</td><td class="col-4-pe oRight" width="6%" style="width: 33%; text-align: left;"><input name="sia" readonly="true" style="width:50px" type="text" class="new-form-control"><script>
					siaInput = document.setfilter.sia;
				</script></td>
</tr>
<tr class="section">
<td class="testoBlackSmall col-1 oRight" title="Abi - Descrizione Banca" style="width: 15%; text-align: left;">
        				Banca:
						<span class="testoRedSmallBold"> *</span></td><td class="col-2" style="width: 50%;"><select name="banca" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5);" style="width:300px" class="new-form-control"><option value="*">TUTTI</option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select><script>
					bankCombo = document.setfilter.banca;
					fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "*", stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, true);
					selectComboByOptionValue(bankCombo,'');
				</script><input name="abi" type="hidden" value=""><script>
					abiInput = document.setfilter.abi;
					fillInput();
				</script></td><td class="testoBlackSmall col-3 oRight" style="width: 12%; text-align: left;">
				Righe per pagina:
			</td><td class="col-4-pe oRight" style="width: 33%; text-align: left;"><select name="numRows" style="width:50px" class="new-form-control"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select><script>
					selectComboByOptionValue(document.setfilter.numRows,'10');
				</script></td>
</tr>
<tr class="section">
<td class="col-1" style="width: 15%; text-align: left;">&nbsp;</td><td class="col-2" style="width: 50%;">&nbsp;</td><td class="col-3" style="width: 12%; text-align: left;">&nbsp;</td><td class="col-4-but-right" style="width: 33%; text-align: right;"><input class="btn small" name="bottoneFiltro" onclick="collaps();" style="cursor:Hand" type="button" value="<< Avanzate"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="sfondofiltri">
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="2" cellspacing="1" width="90%">
<tbody><tr>
<td height="8"></td>
</tr>
<tr>
<td height="1" style="height: 12px;"></td>
</tr>
<tr>
<td height="2"></td>
</tr>
</tbody></table>
</td>
</tr>
<script>
			// Campi facenti parte dei filtri avanzati
			var filtri_avanzati = new Array();
			filtri_avanzati[0]='DA_DATA_SCADENZA';
			filtri_avanzati[1]='A_DATA_SCADENZA';
			filtri_avanzati[2]='DA_IMPORTO';
			filtri_avanzati[3]='A_IMPORTO';
			filtri_avanzati[4]='CREDITORE';
		</script>
<tr id="filtro" style="">
<td>
<table align="center" border="0" cellpadding="2" cellspacing="1" class="old-inputForm section" width="100%">
<tbody><tr>
<td class="col-1" style="width: 15%; text-align: left;"></td><td align="left" class="testoBlackSmallBold col-2" valign="bottom" width="22%" style="width: 50%;"><span class="testoBlackSmall">Da:</span></td><td align="left" class="testoBlackSmallBold col-3" valign="bottom" width="46%" style="width: 12%; text-align: left;"><span class="testoBlackSmall">A:</span></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td class="col-1" style="width: 15%; text-align: left;"><span class="testoBlackSmall">Scadenza:</span></td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="105"><input class="daDataScadenzaYBW datepicker new-form-control hasDatepicker" name="DA_DATA_SCADENZA" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_SCADENZA','','FALSE','DATE', '', '')" style="width:100px" title="Formato data gg/mm/aaaa" type="text" id="dp1569846339073"><script>document.setfilter.DA_DATA_SCADENZA.value = '';</script></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_SCADENZA','setfilter','1');" onclick="$('.daDataScadenzaYBW.datepicker').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
<script>
							$(function(){
							$('.datepicker').datepicker();
							})
							</script></td><td class="col-3" style="width: 12%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="105"><input class="aDataScadYBW datepicker new-form-control hasDatepicker" name="A_DATA_SCADENZA" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_SCADENZA','','FALSE','DATE', '', '')" style="width:100px" title="Formato data gg/mm/aaaa" type="text" id="dp1569846339074"><script>document.setfilter.A_DATA_SCADENZA.value = '';</script></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_SCADENZA','setfilter','2');" onclick="$('.aDataScadYBW.datepicker').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td class="col-1" style="width: 15%; text-align: left;"><span class="testoBlackSmall">Importo:</span></td><td class="col-2" style="width: 50%;"><input maxlength="14" name="DA_IMPORTO" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('DA_IMPORTO','','FALSE','CURRENCY', '', '')" style="width:150px" type="text" class="new-form-control"><script>document.setfilter.DA_IMPORTO.value = '';</script></td><td class="col-3" style="width: 12%; text-align: left;"><input maxlength="14" name="A_IMPORTO" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('A_IMPORTO','','FALSE','CURRENCY', '', '')" style="width:150px" type="text" class="new-form-control"><script>document.setfilter.A_IMPORTO.value = '';</script></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td class="testoBlackSmall col-1" style="width: 15%; text-align: left;">
							Creditore:
						</td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="105"><input name="CREDITORE" onchange="checkValue('CREDITORE','','FALSE','STRING', '', '')" style="width:100px" type="text" class="new-form-control"><script>document.setfilter.CREDITORE.value = '';</script></td>
</tr>
</tbody></table>
</td><td class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr>
<td colspan="4"></td>
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
</div><div class="new-buttons"><input class="btn" name="visualizza" onclick="setFilter();" style="cursor:Hand" type="button" value="Visualizza"><input name="selectNumRapporto" type="hidden" class="btn"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>