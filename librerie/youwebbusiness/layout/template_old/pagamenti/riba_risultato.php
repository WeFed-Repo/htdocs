<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna">
<tbody><tr valign="top">
<td>
<form action="elencoavvisi" method="POST" name="masterform">
<input name="dialog_message_title" type="hidden" value="Avviso Riba da pagare">
<table width="100%">
<input name="id" type="hidden" value=""><input name="idAvviso" type="hidden" value="">
<tbody><tr>
<td valign="top">
<div class="container-wide">
<div class="old-pageContent new-riquadro">
<div class="old-pageTitle titoloTabella"><div class="new-flag"></div><h1>
																	Pagamento Riba
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/Pagamenti/AvvisaturaEffetti/AvvisaturaEffetti.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaInternaGrande">
<tbody><tr>
<td align="center" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr height="30">
<td align="center">
<table border="0" cellpadding="2" cellspacing="0" class="old-inputForm">
<tbody><tr height="15" valign="bottom">
<td align="left" class="testoBlackSmallBold">
							Rag. Soc./Intestatario
						</td><td align="left" class="testoBlackSmallBold" title="Abi - Descrizione Banca">
							Banca
						</td><td colspan="4">&nbsp;</td>
</tr>
<tr height="20">
<td width="235"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '*', stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); enableRefreshButton();" style="width:230px" class="new-form-control"><option value="*">TUTTI</option><option value="265305">CONDOMINIO"DELLA COSTA II"</option><option value="265304">CONDOMINIO"LA TORRE" C/O S..</option><option value="276840">CONDOMINIO"PALAZZO MORO"</option><option value="265302">CONDOMINIO ACLI</option><option value="276843">CONDOMINIO AMENDOLA 2</option><option value="265303">CONDOMINIO BRAMBILLA</option><option value="268164">CONDOMINIO C.A. CRESPI RAPP...</option><option value="274228">CONDOMINIO C.A. CRESPI RAPP...</option><option value="276838">CONDOMINIO CASA A1</option><option value="275905">CONDOMINIO DELLA COSTA PRIMO</option><option value="265312">CONDOMINIO DON ATTILIO CRESP..</option><option value="276839">CONDOMINIO EDILCOOP DUE CASA..</option><option value="265307">CONDOMINIO ELIANA C RAPPRESE..</option><option value="265308">CONDOMINIO ELIANA D RAPPRESE..</option><option value="265313">CONDOMINIO I GIARDINI RAPPRE..</option><option value="300872">CONDOMINIO IL GELSO</option><option value="265315">CONDOMINIO LA MONTAGNETTA C/..</option><option value="274223">CONDOMINIO LE BETULLE</option><option value="274222">CONDOMINIO MADONNINA</option><option value="274224">CONDOMINIO NIGRITELLA</option><option value="274225">CONDOMINIO PIROVANO</option><option value="265310">CONDOMINIO RESIDENZA DEI TIG..</option><option value="276841">CONDOMINIO ROCCA 11</option><option value="274227">CONDOMINIO S.ALESSANDRO</option><option value="274226">CONDOMINIO S.MARCO</option><option value="276835">CONDOMINIO SAN GIOVANNI</option><option value="276844">CONDOMINIO VIA BIFFI 1/3</option><option value="265306">CONDOMINIO VIA MARCONI 20 RA..</option><option value="265316">CONDOMINIO VILLA PALENI RAPP..</option><option value="265314">RESIDENCE EMILIA RAPPRESENTA..</option><option value="457876">STUDIO SCARPELLINI SNC DI SC..</option><option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option></select><script>
								accounteerCombo = document.masterform.intestatario;
								fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true);
								selectComboByOptionValue(accounteerCombo,'*');
							</script><input name="sia" type="hidden"><script>
								siaInput = document.forms.masterform.sia;
							</script></td><td width="245"><select name="banca" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5); enableRefreshButton();" style="width:240px" class="new-form-control"><option value="*">TUTTI</option><option value="1271">03336 - CREDITO BERGAMASCO S.P.A.</option><option value="3422">05034 - BANCO BPM S.P.A.</option></select><script>
								var stringa_tutti = 'TUTTI';
								bankCombo = document.masterform.banca;
								fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "*", stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, true);
								selectComboByOptionValue(bankCombo,'*');
							</script><input name="abi" type="hidden"><script>abiInput = document.masterform.abi;</script></td><td align="left" width="25"><a href="javascript:setCtxFilter();"><img alt="Applica Filtro Rapido" border="0" name="refreshButton" src="./newstyle/img/refreshcontext-disabled.gif"></a></td><td align="left" width="13"><a class="old-fieldFilter" href="javascript:onClickFilter();"><img src="./newstyle/images/i_filter.png" alt="Filtri" border="0" height="20" width="20"></a></td><td align="left" width="25"><a class="old-fieldRemoveFilter" href="javascript:resetFilter();"><img src="./newstyle/images/i_remove-filter.png" alt="Azzera filtri" border="0" height="20" width="20"></a></td><td align="left" width="13"><a class="testoBlackSmall" href="javascript:showPrintList();"><img alt="Stampa" border="0" src="./newstyle/img/acrobat-icon.gif"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="oRight">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" height="20" valign="bottom" width="33%"></td><td align="center" class="testoBlackSmallBold" height="24" width="34%">
																			Avvisi per pagina:&nbsp;
																			<a class="testoRedSmallBold" href="javascript: setItemPage(10)" name="item_10">10</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(20)" name="item_20">20</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(50)" name="item_50">50</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(100)" name="item_100">100</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(200)" name="item_200">200</a></td><td height="20" valign="bottom" width="33%" class="oRight">

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td align="center" colspan="3">
<table cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="old-inputForm old-table table" width="100%">
<tbody><tr>
<td align="left" class="old-sectionTitle" colspan="9"><h3 class="new-titleSection">
			                                                        							Avvisi Riba da pagare
			                                                        						</h3></td>
</tr>
<tr class="old-tableHeader" height="26">
<th align="center" class="" valign="top">
			                                                                    		Deb.
																					</th><th class=""></th><th align="center" class="" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr class="">
<th align="center" colspan="2">
			                                                                                		Scadenza
			                                                                            		</th>
</tr>
<tr class="">
<th class="oRight"><a href="javascript:orderbyASC('data_scadenza');"><img alt="ordina per data scadenza crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('data_scadenza');"><img alt="ordina per data scadenza decrescente" border="0" src="newstyle/img/05034/frecciadown-gialla.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
			                                                                                		Importo</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('importo');"><img alt="ordina per importo crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('importo');"><img alt="ordina per importo decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr class="">
<th align="center" colspan="2" title="ABI mittente">
																										ABI
																									</th>
</tr>
<tr class="">
<th class="oRight"><a href="javascript:orderbyASC('cod_abi');"><img alt="ordina per data scadenza crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('cod_abi');"><img alt="ordina per data scadenza decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" height="30" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																										Creditore</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('descrizione_creditore');"><img alt="ordina per descrizione creditore crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('descrizione_creditore');"><img alt="ordina per descrizione creditore decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" valign="top">
																							Rif. Operazione</th><th class=""></th><th align="center" class="" valign="top"><a class="" href="javascript:;" onclick="fillCheckBoxRitira();">
																								Ritira
																							</a></th><th class=""></th><th align="center" class="" valign="top"><a class="" href="javascript:;" onclick="fillCheckBoxRifiuta();">
																								Rifiuta
																							</a></th><th class=""></th><th align="center" class="" valign="top"><a class="" href="javascript:;" onclick="fillCheckBoxDelete();">
																								Elimina
																							</a></th>
</tr>
<tr class="odd">
<td align="left" class="" height="25"><span id="spanDebit1" onmouseout="hide('descrizioneDebitore')" onmouseover="moveLayer('CONDOMINIO ACLI DON ATTILIO CR','descrizioneDebitore','spanDebit1',event,0)">CONDOMINIO A...
																									</span></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:window.open('strutt_popup_old.php?tpl=pagamenti/riba_popup.php&cantiere=vr2','popup','width=320,height=500')"><span id="ds_545084881">31/01/2019</span></a></td><td class="" height="25"></td><td class="oRight" height="25">174,90</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="left" class="" height="25">G. CAIMI ELEVATORI S.R.L. .. .</td><td class="" height="25"></td><td align="left" class="" height="25">NS. FATTURA N.0010022 DEL 161118        .</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="545084881" onclick="if(checked==1) clearOtherCheckBox('545084881',0)" type="checkbox" value="ritira"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="545084881" onclick="if(checked==1) clearOtherCheckBox('545084881',1)" type="checkbox" value="rifiuta"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="545084881" onclick="if(checked==1) clearOtherCheckBox('545084881',2)" type="checkbox" value="delete"></td>
</tr>
<tr class="even">
<td align="left" class="" height="25"><span id="spanDebit2" onmouseout="hide('descrizioneDebitore')" onmouseover="moveLayer('CONDOMINIO ACLI DON ATTILIO CR','descrizioneDebitore','spanDebit2',event,0)">CONDOMINIO A...
																									</span></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:window.open('strutt_popup_old.php?tpl=pagamenti/riba_popup.php&cantiere=vr2','popup','width=320,height=500')"><span id="ds_538236029">31/12/2018</span></a></td><td class="" height="25"></td><td class="oRight" height="25">85,86</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="left" class="" height="25">G. CAIMI ELEVATORI S.R.L. .. .</td><td class="" height="25"></td><td align="left" class="" height="25">NS. FATTURA N.0009386 DEL 261018        .</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236029" onclick="if(checked==1) clearOtherCheckBox('538236029',0)" type="checkbox" value="ritira"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236029" onclick="if(checked==1) clearOtherCheckBox('538236029',1)" type="checkbox" value="rifiuta"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236029" onclick="if(checked==1) clearOtherCheckBox('538236029',2)" type="checkbox" value="delete"></td>
</tr>
<tr class="odd">
<td align="left" class="" height="25"><span id="spanDebit3" onmouseout="hide('descrizioneDebitore')" onmouseover="moveLayer('CONDOMINIO ACLI DON ATTILIO CR','descrizioneDebitore','spanDebit3',event,0)">CONDOMINIO A...
																									</span></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:window.open('strutt_popup_old.php?tpl=pagamenti/riba_popup.php&cantiere=vr2','popup','width=320,height=500')"><span id="ds_538236030">31/12/2018</span></a></td><td class="" height="25"></td><td class="oRight" height="25">181,26</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="left" class="" height="25">G. CAIMI ELEVATORI S.R.L. .. .</td><td class="" height="25"></td><td align="left" class="" height="25">NS. FATTURA N.0009615 DEL 301018        .</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236030" onclick="if(checked==1) clearOtherCheckBox('538236030',0)" type="checkbox" value="ritira"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236030" onclick="if(checked==1) clearOtherCheckBox('538236030',1)" type="checkbox" value="rifiuta"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="538236030" onclick="if(checked==1) clearOtherCheckBox('538236030',2)" type="checkbox" value="delete"></td>
</tr>
<tr>
<td align="center" class="testoBlackSmallBold" colspan="3" height="25">TOTALE:</td><td class="testoBlackSmall" height="25"></td><td class="testoBlackSmall oRight" height="25">442,02</td><td class="testoBlackSmall" height="25"></td><td align="left" colspan="13" height="25"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<script language="JavaScript">
            
				function showPrevious()
				{
					
						document.masterform.elements['first_item_count'].value = 1;
					
					document.masterform.submit();
				}

				function showNext()
				{
					document.masterform.elements['first_item_count'].value = 1+10;
					document.masterform.submit();
				}
			
				function orderbyASC(fieldname)
				{
					document.masterform.elements['order_by_option'].value = fieldname+"=asc";
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
			
				function orderbyDESC(fieldname)
				{
					document.masterform.elements['order_by_option'].value = fieldname+"=desc";
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
			
		</script><input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filter_defined" type="hidden" value="false"><input name="order_by_option" type="hidden" value="data_scadenza=desc"><input name="previous_option" type="hidden" value=""><input name="next_option" type="hidden" value=""><input name="DA_DATA_SCADENZA" type="hidden" value=""><input name="A_DATA_SCADENZA" type="hidden" value=""><input name="DA_IMPORTO" type="hidden" value=""><input name="A_IMPORTO" type="hidden" value=""><input name="CREDITORE" type="hidden" value="">
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="3" cellspacing="1" width="100%">
<tbody><tr>
<td align="left" width="33%"></td><td align="center" class="old-buttons" width="34%"></td><td width="33%" class="oRight"></td>
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
</div><div class="new-buttons"><input class="btn" name="command" onclick="return docPost();" style="cursor:Hand" type="submit" value="Conferma"></div>
</div>
</td>
</tr>
<input disabled="true" name="descrizione_creditore_1" type="hidden" value="G. CAIMI ELEVATORI S.R.L. .. ."><input disabled="true" name="descrizione_intestatario_1" type="hidden" value="CONDOMINIO ACLI DON ATTILIO CR"><input disabled="true" name="riferimento_operazione_1" type="hidden" value="NS. FATTURA N.0010022 DEL 161118        ."><input disabled="true" name="descrizione_creditore_2" type="hidden" value="G. CAIMI ELEVATORI S.R.L. .. ."><input disabled="true" name="descrizione_intestatario_2" type="hidden" value="CONDOMINIO ACLI DON ATTILIO CR"><input disabled="true" name="riferimento_operazione_2" type="hidden" value="NS. FATTURA N.0009386 DEL 261018        ."><input disabled="true" name="descrizione_creditore_3" type="hidden" value="G. CAIMI ELEVATORI S.R.L. .. ."><input disabled="true" name="descrizione_intestatario_3" type="hidden" value="CONDOMINIO ACLI DON ATTILIO CR"><input disabled="true" name="riferimento_operazione_3" type="hidden" value="NS. FATTURA N.0009615 DEL 301018        .">
</tbody></table>
</form>
<form action="printpageavvisi" method="get" name="stampamasterform" target="stampamasterform">
<input name="dialog_message_title" type="hidden" value="Avviso Riba da pagare"><input name="intestatario" type="hidden" value="*"><input name="banca" type="hidden" value="*"><input name="rapporto" type="hidden" value=""><input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filter_defined" type="hidden" value="false"><input name="order_by_option" type="hidden" value="data_scadenza=desc"><input name="previous_option" type="hidden" value=""><input name="next_option" type="hidden" value=""><input name="DA_DATA_SCADENZA" type="hidden" value=""><input name="A_DATA_SCADENZA" type="hidden" value=""><input name="DA_IMPORTO" type="hidden" value=""><input name="A_IMPORTO" type="hidden" value=""><input name="CREDITORE" type="hidden" value="">
</form>
</td>
</tr>
</tbody></table>
<div id="descrizioneCreditore" style="visibility:hidden;position:absolute;"></div>
<div id="descrizioneDebitore" style="visibility:hidden;position:absolute;"></div>
<div id="descrizione" style="visibility:hidden;position:absolute;"></div>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>
