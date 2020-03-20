<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna">
<tbody>
<tr>
<td>
<form accept="application/pdf, */*" accept-charset="ISO-8859-1, utf-8" action="printpagedistinte" method="get" name="stampamasterform" target="stampamasterform">
<input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="order_by_option" type="hidden" value="importo=asc"><input name="DA_DATA_CREAZIONE" type="hidden" value=""><input name="A_DATA_CREAZIONE" type="hidden" value=""><input name="DA_IMPORTO" type="hidden" value=""><input name="A_IMPORTO" type="hidden" value=""><input name="STATO" type="hidden" value="1"><input name="TIPO" type="hidden" value="28"><input name="intestatario" type="hidden" value="106609"><input name="banca" type="hidden" value="3422"><input name="rapporto" type="hidden" value="">
</form>
<form method="POST" name="masterform" action="elencodistinte">
<input name="id" type="hidden" value=""><input name="dialog_message_title" type="hidden" value="Elenco Distinte"><input name="title" type="hidden" value=""><input name="data" type="hidden" value="17/09/2019"><input name="ora" type="hidden" value="11">
<table width="100%">
<tbody><tr>
<td valign="top">
<div class="container-wide">
<div class="old-pageContent new-riquadro">
<div class="old-pageTitle titoloTabella"><div class="new-flag"></div><h1>
															Elenco distinte
														<a href="#" onclick="popHelp('./html/help/AreaDispositiva/GestioneDistinte/ElencoDistinte.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);" class="old-pageHelp"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaInternaGrande">
<tbody><tr>
<td align="center" colspan="4" valign="top" width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr height="30">
<td align="center">
<table border="0" cellpadding="2" cellspacing="0" class="">
<tbody><tr height="15" valign="bottom">
<td align="left" class="testoBlackSmallBold">
							Rag. Soc./Intestatario
						</td><td align="left" class="testoBlackSmallBold" title="Abi - Descrizione Banca">
								Banca
							</td><td align="left" class="testoBlackSmallBold">
							Stato
						</td><td colspan="3">&nbsp;</td>
</tr>
<tr height="20">
<td align="left" width="235"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '*', stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); enableRefreshButton();" style="width:230px" class="new-form-control"><option value="*">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select><script>
										accounteerCombo = document.masterform.intestatario;
										fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true );
										selectComboByOptionValue(accounteerCombo,'106609');
									</script><input name="sia" type="hidden"><script>
										siaInput = document.forms.masterform.sia;
									</script></td><td align="left" width="245"><select name="banca" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5); enableRefreshButton();" style="width:240px" class="new-form-control"><option value="">TUTTI</option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1325">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option></select><script>
										bankCombo = document.masterform.banca;
										fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, true);
										selectComboByOptionValue(bankCombo,'3422');
									</script><input name="abi" type="hidden"><script>abiInput = document.masterform.abi;</script></td><td align="left"><select name="STATO" onchange="enableRefreshButton();" style="width:145px" class="new-form-control"><option value="*">TUTTI</option><option value="1" selected="">Da Autorizzare</option><option value="2">Autorizzata</option><option value="3">Confermata</option><option value="5">Parzialmente autorizzata</option><option value="6">In modifica</option></select><script>
										creaSelectStatoDistinta();
										selectComboByOptionValue(document.masterform.STATO,'1');
									</script></td><td align="left" width="25"><a href="javascript:setCtxFilter();"><img border="0" name="refreshButton" src="./newstyle//img/05034/refreshcontext-disabled.gif" alt="Applica Filtro Rapido" title="Applica Filtro Rapido"></a></td><td align="left" width="13"><a href="javascript:onClickFilter();"><img border="0" src="./newstyle//img/05034/filtroRapidoDisattivo.gif" alt="Filtri" title="Filtri"></a></td><td align="left" width="25"><a href="javascript:resetFilter();"><img border="0" src="./newstyle//img/05034/AzzeraFiltri.gif" alt="Azzera filtri" title="Azzera filtri"></a></td><td align="left" width="13"><a class="testoBlackSmall" href="javascript:showPrintList();"><img border="0" src="./newstyle//img/acrobat-icon.gif" alt="Stampa gli elementi visualizzati" title="Stampa gli elementi visualizzati"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="oRight">
<table border="0" cellpadding="2" cellspacing="0" class="" width="100%">
<tbody><tr>
<td align="left" height="20" valign="bottom" width="33%"></td><td align="center" class="testoBlackSmallBold" height="20" valign="bottom" width="33%">
																				Distinte per pagina:
																				<a class="testoRedSmallBold" href="javascript: setItemPage(10)" name="item_10">10</a>&nbsp;
																				<a class="testoBlackSmallBold" href="javascript: setItemPage(20)" name="item_20">20</a>&nbsp;
																				<a class="testoBlackSmallBold" href="javascript: setItemPage(50)" name="item_50">50</a>&nbsp;
																				<a class="testoBlackSmallBold" href="javascript: setItemPage(100)" name="item_100">100</a></td><td valign="bottom" width="33%" class="oRight">

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle" style="width:100%">
<tbody><tr valign="top">
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" class="old-table table" width="100%">
<tbody><tr class="titoloTabella">
<td class="old-sectionTitle" colspan="23" height="20"><h3 class="new-titleSection">Ritiro Effetti (Pagamento Riba)</h3></td>
</tr>
<tr class="old-tableHeader">
<th align="center" class="" height="26" valign="top" width="70">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
							Creata il
						</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('data_creazione');"><img src="./newstyle//img//frecciaup-blu.gif" alt="ordina per data creazione crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('data_creazione');"><img src="./newstyle//img//frecciadown-blu.gif" alt="ordina per data creazione decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
							Ordini
						</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('numero_disposizioni');"><img src="./newstyle//img/frecciaup-blu.gif" alt="ordina per numero disposizioni crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('numero_disposizioni');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per numero disposizioni decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
							Importo</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('importo');"><img src="./newstyle//img/05034/frecciaup-gialla.gif" alt="ordina per importo crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('importo');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per importo decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
				Div
			</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									ABI</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('abi');"><img src="./newstyle//img/frecciaup-blu.gif" alt="ordina per ABI crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('abi');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per ABI decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									CAB</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('cab');"><img src="./newstyle//img/frecciaup-blu.gif" alt="ordina per CAB crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('cab');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per CAB decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									Conto
								</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('conto');"><img src="./newstyle//img/frecciaup-blu.gif" alt="ordina per conto corrente crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('conto');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per conto corrente decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
<table align="center" border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
							Stato
						</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('stato');"><img src="./newstyle//img/frecciaup-blu.gif" alt="ordina per stato crescente" border="0"></a></th><th align="left"><a href="javascript:orderbyDESC('stato');"><img src="./newstyle//img/frecciadown-blu.gif" alt="ordina per stato decrescente" border="0"></a></th>
</tr>
</tbody></table>
</th><th width="1"></th><th align="center" class="" height="26" valign="top">
				Disaggrega
			</th><th width="1"></th><th align="center" class="" height="26" valign="top">
				Copia
			  </th><th width="1"></th><th align="center" class="" height="26" valign="top">
				Elimina
			</th><th width="1"></th><th align="center" class="" height="30" valign="top">
					Autorizza
				</th><th width="1"></th><th align="center" class="" height="26" valign="top">
					Check
				</th><th></th>
</tr>
<tr class="odd">
<td align="center" class="" height="25"><a class="tabella" href="javascript:showDetail(124777726)">17/09/2019</a></td><td class="" height="25"></td><td class="oRight" height="25"><span id="num_dispo_124777726">1</span></td><td class="" height="25"></td><td class="oRight" height="25">1,00</td><td class="" height="25"></td><td align="center" class="" height="25">EUR</td><td class="" height="25"></td><td align="center" class="" height="25">05034<input name="row_abi_124777726" type="hidden" value="05034"></td><td class="" height="25"></td><td align="center" class="" height="25">11701</td><td class="" height="25"></td><td align="center" class="" height="25">000000002407</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="stato_124777726" type="hidden" value="1">Da Autorizzare</td><td class="" height="25"></td><td align="center" class="" height="25" style="text-align:center"><input name="124777726" onclick="if (checked==1) clearCheckBoxOnRow('124777726',value)" type="checkbox" value="disaggregate"><input name="dispo_124777726" type="hidden" value="1"><input name="multiconto_124777726" type="hidden" value="000000002407"><input name="subholding_124777726" type="hidden" value="0"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="124777726" onclick="if (checked==1) clearCheckBoxOnRow('124777726',value);if(checked==1) clearOtherCheckBoxes('124777726')" type="checkbox" value="copy"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="124777726" onclick="if (checked==1) clearCheckBoxOnRow('124777726',value)" type="checkbox" value="delete"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="124777726" onclick="if (checked==1)  clearCheckBoxOnRow('124777726',value); if (checked==1) doSignSubmit(124777726,28,'true','30/09/2019','EUR',''); " title="" type="checkbox" value="firm"><script language="JavaScript">
										dispoList[dispoList.length]=new dispositiva("124777726","28","1",'30/09/2019','','');
							
							</script></td><td class="" height="25"></td><td align="center" class="" height="25"><a class="odd" href="javascript:onClickModifyDistinta(124777726)"><img border="0" src="./img/semaforogrigio.gif" alt="Controlla Piazzatura" title="Controlla Piazzatura"></a></td><td></td><input name="stato_124777726" type="hidden" id="stato_124777726" value="1">
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
			
			/* funzioni
			per l'impaginazione con 
			vai a pagina tot di tot ...
			*/
			/* ================= START ==================== */
			var GoToPageLinkIsEnabled = false;
			function enableGoToPageLink(){
				GoToPageLinkIsEnabled = true;
			}
			
			function goToFirstPage()
			{
				document.masterform.pagina.value = 1;
				document.masterform.elements['first_item_count'].value = 1;
				document.masterform.submit();
			}
				
			function goToLastPage()
			{
				document.masterform.pagina.value = pagineTotali;
				// equazione per ricavarsi il first_item_count dall' ultima pagina inserita nella textbox
				document.masterform.elements['first_item_count'].value = (pagineTotali-1)*10 + 1;
				document.masterform.submit();
			}
				
			function goToPage()
			{
				if (GoToPageLinkIsEnabled){
					if (document.masterform.pagina.value>pagineTotali)
						document.masterform.pagina.value = pagineTotali;
					else if (document.masterform.pagina.value==0)
						document.masterform.pagina.value = 1;
					// equazione per ricavarsi il first_item_count dalla pagina inserita nella textbox
					document.masterform.elements['first_item_count'].value = (document.masterform.pagina.value-1)*10 + 1;
					document.masterform.submit();
				}
			}
				
			function writeCurrentPage()
			{
				// equazione equivalente a quella della goToPage per ricavarsi la pagina caricata
				document.masterform.pagina.value = (document.masterform.elements['first_item_count'].value-1)/10 + 1;
			}
			/* ================= end ===================== */
					
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
		</script><input name="fromFilter" type="hidden" value=""><input name="fromElencoDistinte" type="hidden" value=""><input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filter_defined" type="hidden" value="false"><input name="order_by_option" type="hidden" value="importo=asc"><input name="previous_option" type="hidden" value=""><input name="next_option" type="hidden" value=""><input name="DA_DATA_CREAZIONE" type="hidden" value=""><input name="A_DATA_CREAZIONE" type="hidden" value=""><input name="DA_DATA_CARICAMENTO" type="hidden" value=""><input name="A_DATA_CARICAMENTO" type="hidden" value=""><input name="DA_IMPORTO" type="hidden" value=""><input name="A_IMPORTO" type="hidden" value=""><input name="STATO" type="hidden" value="1"><input name="TIPO" type="hidden" value="28"><input name="intestatario" type="hidden" value="106609"><input name="banca" type="hidden" value="3422"><input name="rapporto" type="hidden" value=""><input name="check_validita" type="hidden" value=""><input name="stipendi" type="hidden" value=""><input name="codice_sia" type="hidden" value=""><input name="paginaDiProvenienza" type="hidden" value="elencoDistinte">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="totale_righe" width="33%"></td><td align="center" width="34%"><input id="go" type="submit" class="btn" name="command" value="Conferma" onclick="return myCheckForm();" style="cursor:Hand"></td><td width="100%" class="right">
<table align="right" border="0" cellpadding="0" cellspacing="0" class="">
<tbody><tr>
<td width="40">&nbsp;</td><td width="150">&nbsp;</td><td width="40">&nbsp;</td>
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
</div><div class="new-buttons"></div>
</div>
</td>
</tr>
</tbody></table>
</form>
</td>
</tr>
</tbody>
</table>
<div id="descrizioneIntestatario" style="visibility:hidden;position:absolute;"></div>
</td>
</tr>
</tbody>
</table>