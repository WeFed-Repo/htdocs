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
						var cfInput = null;
						var indirizzoInput = null;
						var piazzaInput = null;
					
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="insertbollettino" method="post" name="insertbollettino">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr valign="top">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<tbody><tr>
<td align="center" colspan="3">
<table align="center" border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>

</tr>
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
															&nbsp;
															
																	Bollettini Bancari
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/PagamentoBB.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
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
<td class="rigachiara"><input name="TIPO" type="hidden" value="100"><input name="banca" type="hidden"><input name="abi_ordinante" type="hidden" value=""><script>
			abiInput = document.forms.insertbollettino.abi_ordinante;
		</script><input name="cab_ordinante" type="hidden" value=""><script>
			cabInput = document.forms.insertbollettino.cab_ordinante;
		</script><input name="conto_ordinante" type="hidden" value=""><script>
            contoInput = document.forms.insertbollettino.conto_ordinante;
        </script><input name="cliente_debitore" type="hidden" value=""><input name="indirizzo_ordinante" type="hidden" value=""><script>
			indirizzoInput = document.forms.insertbollettino.indirizzo_ordinante;
        </script><input name="localita_ordinante" type="hidden" value=""><script>
			piazzaInput = document.forms.insertbollettino.localita_ordinante;
        </script><input name="causale" type="hidden" value="07700"><input name="segno" type="hidden" value="+">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1" width="125" style="width: 15%; text-align: left;"><span class="testoRedSmallBold">*</span>
					Ordinante
				</td><td class="col-2" width="340px" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','TRUE','', '', '','Ordinante');fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false); fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); fillInput();" style="width: 335px;" class="new-form-control"><option value=""></option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select></td><script>
			accounteerCombo = document.forms.insertbollettino.intestatario;
		</script><td align="left" class="col-3" width="90" style="width: 12%; text-align: left;">
					SIA
				</td><td class="col-4" style="width: 33%; text-align: left;"><input name="sia_ordinante" readonly="true" size="5" type="text" value="" class="new-form-control">
					&nbsp;
				</td><script>
			siaInput = document.forms.insertbollettino.sia_ordinante;
		</script>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;"><span class="testoRedSmallBold">*</span>
					Descr. Ordinante
				</td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="30" name="denominazione_ordinante" onchange="checkValue('denominazione_ordinante','','TRUE','STRING', '1','30','Descr. Ordinante')" style="width:335px" type="text" value="" class="new-form-control"></td><script>
			signInput = document.forms.insertbollettino.denominazione_ordinante;
		</script>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
					&nbsp;&nbsp;&nbsp;C.F./P.I
				</td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="16" name="codice_fiscale_ordinante" onchange="checkValue('codice_fiscale_ordinante','','FALSE','STRING', '11', '16','C.F./P.I')" style="width: 335px;" type="text" value="" class="new-form-control"></td><script>
			cfInput = document.forms.insertbollettino.codice_fiscale_ordinante;
		</script>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1" title="Abi - Descrizione Banca" width="125" style="width: 15%; text-align: left;"><span class="testoRedSmallBold">*</span>
					Banca
				</td><td class="col-2" width="340px" style="width: 50%;"><select name="id_banca_ordinante" onchange="checkValue('id_banca_ordinante','','TRUE','', '', '','Banca');fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), '', '', NO_ALL, NO_ALL, ccCombo, true, false); abiInput.value = getAbiCode(bankCombo, ''); cabInput.value = getCabCode(ccCombo, '');" style="width: 335px" class="new-form-control"><option value=""></option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select></td><script>
			bankCombo = document.forms.insertbollettino.id_banca_ordinante;
		</script><td align="left" class="col-3" title="Cab - Descrizione Conto" width="90" style="width: 12%; text-align: left;"><span class="testoRedSmallBold">*</span>			
					Conto
				</td><td class="col-4" style="width: 33%; text-align: left;"><select name="id_conto_ordinante" onchange="checkValue('id_conto_ordinante','','TRUE','', '', '','Conto');cabInput.value = getCabCode(this, ''); contoInput.value = getAccount(this, ''); fillFromCC(accounteerCombo, bankCombo, ccCombo); fillInput();" style="width:158" class="new-form-control"><option value=""></option><option value="1382733">33980 - 000000004831</option><option value="1380486">33980 - 000000004688</option><option value="1413595">33920 - 000000001748</option><option value="1408587">33980 - 000000003827</option><option value="1396342">33920 - 000000001521</option><option value="1408588">33980 - 000000004099</option><option value="1408730">52990 - 000000006780</option><option value="1396089">33920 - 000000002328</option><option value="1411360">33980 - 000000005354</option><option value="1415552">33980 - 000000013652</option><option value="1395353">33920 - 000000002375</option><option value="1414344">33980 - 000000013607</option><option value="1414345">33980 - 000000013608</option><option value="1384710">33980 - 000000005325</option><option value="1405924">32800 - 000000011399</option><option value="1414346">33980 - 000000013609</option><option value="1409042">52990 - 000000002598</option><option value="1409041">52990 - 000000005950</option><option value="1409043">52990 - 000000000926</option><option value="1409044">52990 - 000000006403</option><option value="1414582">33980 - 000000013635</option><option value="1395606">33920 - 000000001459</option><option value="1409046">52990 - 000000003146</option><option value="1409045">52990 - 000000002384</option><option value="1397016">33920 - 000000002156</option><option value="1397148">33920 - 000000002103</option><option value="1408589">33980 - 000000004728</option><option value="1384711">33980 - 000000013710</option><option value="1413596">33980 - 000000005236</option><option value="2578085">33980 - 000000005441</option></select></td><script>
			ccCombo = document.forms.insertbollettino.id_conto_ordinante;
		</script>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
															&nbsp;Dati Bollettino
														</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1" width="180px" style="width: 15%; text-align: left;"><span class="testoRedSmallBold">*</span>
			Cod. Identif. Pagamento
		</td><td class="col-2" style="width: 50%;">
<table border="0" cellpading="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="rigaScura">
<td align="left"><input maxlength="5" name="identificativo_pagamento_1" onchange="checkValue('identificativo_pagamento_1','','TRUE','STRING', '5', '5','Cod. Identif. Pagamento 1');" size="7" type="text" class="new-form-control">
						&nbsp;
						<input maxlength="16" name="identificativo_pagamento_2" onchange="checkValue('identificativo_pagamento_2','','TRUE','STRING', '16', '16','Cod. Identif. Pagamento 2');" onkeypress="return onlyAlphaNumbers(event)" style="width:147" type="text" class="new-form-control"></td>
</tr>
</tbody></table>
</td><td class="col-3" width="90" style="width: 12%; text-align: left;"><span class="testoRedSmallBold">*</span>
			Importo
		</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="10" name="importo" onchange="checkValue('importo','','TRUE','REAL', '', '')" onkeypress="return onlyRealNumbers(event)" size="18" type="text" value="" class="new-form-control">
			EURO
		</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td><input name="codifica_bollettino" type="hidden">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1" width="198" style="width: 15%; text-align: left;"><span class="testoRedSmallBold">*</span>
						Coord. Banca Creditore
					</td><td class="col-2" style="width: 50%;">
<table>
<tbody><tr>
<td width="45"><input maxlength="4" name="codifica_bollettino1" onchange="checkValue('codifica_bollettino1','','TRUE','STRING', '4', '4','Coord. Banca Creditore 1');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="4" name="codifica_bollettino2" onchange="checkValue('codifica_bollettino2','','TRUE','STRING', '4', '4','Coord. Banca Creditore 2');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="4" name="codifica_bollettino3" onchange="checkValue('codifica_bollettino3','','TRUE','STRING', '4', '4','Coord. Banca Creditore 3');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="4" name="codifica_bollettino4" onchange="checkValue('codifica_bollettino4','','TRUE','STRING', '4', '4','Coord. Banca Creditore 4');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="4" name="codifica_bollettino5" onchange="checkValue('codifica_bollettino5','','TRUE','STRING', '4', '4','Coord. Banca Creditore 5');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="4" name="codifica_bollettino6" onchange="checkValue('codifica_bollettino6','','TRUE','STRING', '4', '4','Coord. Banca Creditore 6');" size="5" type="text" class="new-form-control"></td><td width="45"><input maxlength="3" name="codifica_bollettino7" onchange="checkValue('codifica_bollettino7','','TRUE','STRING', '3', '3','Coord. Banca Creditore 7');" size="5" type="text" class="new-form-control"></td>
</tr>
</tbody></table>
</td><td class="col-3" width="180" style="width: 12%; text-align: left;">
								&nbsp;Cod. Esenzione&nbsp;
							</td><td class="col-4" style="width: 33%; text-align: left;"><select name="codifica_bollettino8" class="new-form-control"><option value=""></option><option value="1">1</option><option value="3">3</option></select></td>
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
<td class="col-1" style="width: 15%; text-align: left;"></td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr class="rigaScura">
<td align="center" width="90">
						Cin Importo
					</td><td align="left" width="20"><input maxlength="1" name="cin_importo" size="1" type="text" value="" class="new-form-control"></td><td align="center" width="90">
						Cin Interm.
					</td><td align="left" width="20"><input maxlength="1" name="cin_intermedio" size="1" type="text" value="" class="new-form-control"></td><td align="center" width="100">
						Cin Comples.
					</td><td align="left"><input maxlength="1" name="cin_complessivo" size="1" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" width="180" style="width: 12%; text-align: left;"><span class="testoRedSmallBold">*</span>
			Data scadenza
		</td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td width="90"><input class="datepicker dataScadenzaYBW new-form-control hasDatepicker" maxlength="" name="richiesta_esecuzione_pagamento" onkeypress="return onlyDate(event)" onchange="checkValue('richiesta_esecuzione_pagamento','','TRUE','DATE', '', '','Data scadenza');" style="width:85" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1569847893463"></td><td align="left" onclick="$('.dataScadenzaYBW.datepicker').datepicker('show');" width="20"><a class="old-fieldCalendar" href="javascript:showHideFla('richiesta_esecuzione_pagamento','insertbollettino','1');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><script>
							$(function(){
							$('.datepicker').datepicker();
							});
							</script>
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
<td colspan="4">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td align="center" class="old-buttons" height="30">
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
</div><div class="new-buttons"><input class="btn" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					if (!hiddenCampiOrdinante)
						fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					// =================== modifica ================ //
					
					// ============= modifica o retry =============== //
					
								fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", "", NO_ALL, NO_ALL, bankCombo, true, true);
								fillCCDispoEnable(createParameterObjectFromCombos(null, accounteerCombo, bankCombo), "", "", NO_ALL, NO_ALL, ccCombo, true, true);
								if (ccCombo.selectedIndex>0) //selez banca e intest. da conto
									fillFromCC(accounteerCombo, bankCombo, ccCombo);
								fillInput();
						
					//if (!hiddenCampiOrdinante){
					//	if(ccCombo.length==2)
					//		ccCombo.selectedIndex=1;
					//}
				</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>