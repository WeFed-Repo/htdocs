<body background="img/05034/background5.gif" class="sfondo" leftmargin="0" marginheight="0" marginwidth="0" onload="setColorItem();" rightmargin="0" topmargin="0">
<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;z-index:2;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;z-index:2;"></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna">
<tbody><tr>
<td>
<form action="creadistinte" method="POST" name="masterform">
<input name="id" type="hidden" value=""><input name="dialog_message_title" type="hidden" value="Creazione distinte">
<table width="100%">
<tbody><tr>
<td valign="top">
<div class="container-wide">
<div class="old-pageContent new-riquadro">
<div class="old-pageTitle titoloTabella"><div class="new-flag"></div><h1>
															Creazione distinte
														<a class="old-pageHelp" href="#" onclick="NewWin1=window.open(tranformNewHelp('./html/help/AreaDispositiva/GestioneDistinte/CreazioneDistinteAEARid.htm'),'NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240');"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></div>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaInternaGrande">
<tbody><tr>
<td valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr height="30">
<td align="center">
<table border="0" cellpadding="2" cellspacing="0" class=".old-inputForm .old-pager">
<tbody><tr height="15" valign="bottom">
<td align="left" class="testoBlackSmallBold">
							Rag. Soc./Intestatario
						</td><td align="left" class="testoBlackSmallBold" title="Abi - Descrizione Banca">
							Banca
						</td><td colspan="4">&nbsp;</td>
</tr>
<tr height="20">
<td align="left" width="235"><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '*', stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, false); enableRefreshButton();" style="width:230" class="new-form-control"></select><script>
								accounteerCombo = document.masterform.intestatario;
								fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true);
								selectComboByOptionValue(accounteerCombo,'106609');
							</script></td><td width="245"><select name="banca" onchange="enableRefreshButton();" style="width:240px" class="new-form-control"></select><script>
								bankCombo = document.masterform.banca;
								fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "", stringa_tutti, NO_ALL, NO_ALL, bankCombo, true, true);
								selectComboByOptionValue(bankCombo,'3422');
							</script></td><td align="left" width="25"><a class=".old-fieldFilter" href="javascript:setCtxFilter();"><img alt="Applica Filtro Rapido" border="0" name="refreshButton" src="./newstyle//img/05034/refreshcontext-disabled.gif" title="Applica Filtro Rapido"></a></td><td align="left" width="13"><a class="" href="javascript:onClickFilter();"><img alt="Filtri" border="0" src="./newstyle//img/05034/filtroRapidoDisattivo.gif" title="Filtri"></a></td><td align="left" width="25"><a class=".old-fieldRemoveFilter" href="javascript:resetFilter();"><img alt="Azzera filtri" border="0" src="./newstyle//img/05034/AzzeraFiltri.gif" title="Azzera filtri"></a></td><td align="left" width="13">
							&nbsp;
						</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="oRight">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" height="20" valign="bottom" width="33%"></td><td align="center" class="testoBlackSmallBold" height="20" valign="bottom" width="34%">
																					Disposizioni per pagina
																					<a class="testoBlackSmallBold" href="javascript: setItemPage(10)" name="item_10">10</a>&nbsp;
																					<a class="testoBlackSmallBold" href="javascript: setItemPage(20)" name="item_20">20</a>&nbsp;
																					<a class="testoBlackSmallBold" href="javascript: setItemPage(50)" name="item_50">50</a>&nbsp;
																					<a class="testoBlackSmallBold" href="javascript: setItemPage(100)" name="item_100">100</a></td><td valign="bottom" width="33%" class="oRight">

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr valign="top">
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" class="sfondoTabelle old-table table">
<tbody><tr valign="top">
<td align="center">
<table border="0" cellpadding="0" cellspacing="0" class="old-table table" width="100%">
<tbody><tr>
<td class="titoloTabella old-sectionTitle" colspan="17" height="20"><h3 class="new-titleSection">Allineamento Archivi</h3></td>
</tr>
<tr class="old-tableHeader">
<th align="center" class="" height="20">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									ABI Allineamento
								</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('cod_abi_allineamento');"><img alt="ordina per ABI crescente" border="0" src="./newstyle//img/frecciaup-blu.gif" title="ordina per ABI crescente"></a></th><th align="left"><a href="javascript:orderbyDESC('cod_abi_allineamento');"><img alt="ordina per ABI decrescente" border="0" src="./newstyle//img/frecciadown-blu.gif" title="ordina per ABI decrescente"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" height="20">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									Cliente
								</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('cliente_sottoscrittore');"><img alt="ordina per cliente crescente" border="0" src="./newstyle//img/frecciaup-blu.gif" title="ordina per cliente crescente"></a></th><th align="left"><a href="javascript:orderbyDESC('cliente_sottoscrittore');"><img alt="ordina per cliente decrescente" border="0" src="./newstyle//img/frecciadown-blu.gif" title="ordina per cliente decrescente"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" height="20">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									Codice cliente
								</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('codice_beneficiario');"><img alt="ordina per codice di riferimento crescente" border="0" src="./newstyle//img/frecciaup-blu.gif" title="ordina per codice di riferimento crescente"></a></th><th align="left"><a href="javascript:orderbyDESC('codice_beneficiario');"><img alt="ordina per codice di riferimento decrescente" border="0" src="./newstyle//img/frecciadown-blu.gif" title="ordina per codice di riferimento decrescente"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" height="20">
						Tipo codice
					</th><th class=""></th><th align="center" class="" height="20">
						IBAN
					</th><th class=""></th><th align="center" class="" height="20">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
									Causale</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('causale');"><img alt="ordina per causale crescente" border="0" src="./newstyle//img/frecciaup-blu.gif" title="ordina per causale crescente"></a></th><th align="left"><a href="javascript:orderbyDESC('causale');"><img alt="ordina per causale decrescente" border="0" src="./newstyle//img/frecciadown-blu.gif" title="ordina per causale decrescente"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" height="20"><a class="" href="#" onclick="fillCheckBoxAggregate();">Aggrega</a></th><th class=""></th><th align="center" class="" height="20"><a class="" href="#" onclick="fillCheckBoxDelete();">Elimina</a></th><th class=""></th><th align="center" class="" height="20">
						Modifica
						</th>
</tr>
<input disabled="true" name="descrizione_creditore_pagamento_1" type="hidden" value="">
<tr class="odd">
<td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="left" class="" height="25">Pippo Rossi                  </td><td class="" height="25"></td><td align="center" class="" height="25">FO_0000010279306</td><td class="" height="25"></td><td align="center" class="" height="25">1&nbsp;-&nbsp;utenza</td><td class="" height="25"></td><td align="center" class="" height="25">IT04M0300203280338577889754</td><td class="" height="25"></td><td align="center" class="" height="25">90211</td><td class="" height="25"></td><td align="center" class="" height="25" style="text-align:center; vertical-align:center"><input name="cambio_345322320" type="hidden" value=""><input name="divisa_345322320" type="hidden" value=""><input name="345322320" onclick="if(checked==1) clearCheckBox2(masterform,'345322320',1)" type="checkbox" value="aggregate"></td><td class="" height="25"></td><td align="center" class="" height="25"><input name="345322320" onclick="if(checked==1) clearCheckBox2(masterform,'345322320',0)" type="checkbox" value="delete"></td><td class="" height="25"></td><td align="center" class="" height="25" style="text-align:center; vertical-align:center"><a class="tabella" href="javascript:doModify(345322320,10,' ');">Modifica</a></td>
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
		</script><input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filter_defined" type="hidden" value="false"><input name="order_by_option" type="hidden" value="importo=asc"><input name="previous_option" type="hidden" value=""><input name="next_option" type="hidden" value=""><input name="DA_IMPORTO" type="hidden" value=""><input name="A_IMPORTO" type="hidden" value=""><input name="TIPO" type="hidden" value="10"><input name="filtro_causale" type="hidden" value=""><input name="filtro_codice_individuale" type="hidden" value=""><input name="filtro_codice_fiscale_piva" type="hidden" value=""><input name="intestatario" type="hidden" value="106609"><input name="banca" type="hidden" value="3422"><input name="rapporto" type="hidden" value="">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="totale_righe" width="33%"></td><td align="center" class="" width="34%"><input class="btn" id="go" name="command" onclick="return myCheckForm();" style="cursor:Hand" type="submit" value="Conferma"></td><td width="33%" class="oRight">
<table border="0" cellpadding="0" cellspacing="0" class=".old-inputForm" width="230">
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
</tbody></table>
<div id="descrizione" style="z-index:100;visibility:hidden;position:absolute;z-index:1;"></div>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script></td>
</tr>
</tbody></table>
<noscript><img src='/2d9FKab3/in/918b3c0d4e9b73c3bc7bee07402fe8a0/1/1' style='display:none;'/></noscript><script src="/2d9FKab3/in/918b3c0d4e9b73c3bc7bee07402fe8a0/2/1" type="text/javascript"></script>

</body>