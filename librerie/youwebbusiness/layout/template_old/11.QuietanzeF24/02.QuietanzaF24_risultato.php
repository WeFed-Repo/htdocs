<script language="JavaScript">
				var abi= '05034'
				var stringa_tutti = 'TUTTI'
			
				function docPost()
				{
                    var textProperty = document.body.textContent ? 'textContent' : 'innerText';
					var primo = true;
					var oneCheck = false;
					var lista = "";
					var countPDF = 0;
					var importoTotaleQuStampa = 0;
					var maxPDF = parseInt('200');
					for (var i = 0; i < document.masterform.elements.length; i++)
					{
						if ((document.masterform.elements[i].type == "checkbox") && (document.masterform.elements[i].checked))
						{
							var id_del = document.masterform.elements[i].name;
							var s = document.getElementById('saldo_'+id_del);
							var imp = s[textProperty];
							if (s) {
                                var impAsString = s[textProperty];
                                var imp = impAsString.replace(/\./g,'');
                                var i2 = imp.replace(',', '.');
								importoTotaleQuStampa += parseFloat(i2);
							}
							countPDF = countPDF + 1;
							if (primo){
								lista = id_del;
								primo = false;
							}
							else
							{								
								lista = lista + "," + id_del;
							}
							oneCheck = true;
						}
					}
					// importo totale delle quietanze per le quali richiesta stampa
					var accept = confirm(formatString('Attenzione! ! !\nSono state selezionate {0} quietanze per un importo totale di {1} {2}.\nSi desidera procedere con la creazione del PDF?', new Array(countPDF, number_format(importoTotaleQuStampa, 2, ',', '.'), decodeURI('%E2%82%AC'))));
					if (!accept) {
						return;
				    }

					if (oneCheck)
					{
						if (countPDF>maxPDF)
						{
							alert(formatString('Il numero di quietanze selezionato ({0}) supera il numero massimo previsto ({1}).\nSelezionare un numero inferiore di elementi.',new Array(countPDF,maxPDF)));
							return false;							
						}
						else
						{
							document.estrazione.ID_DELEGHE.value=lista;
							if (navigator.appVersion.indexOf("MSIE 5.5")>-1)
							{
								document.estrazione.target="_blank";
							}
							else if (document.all)
							{
								parent.topframe.closing='true';	// setto tale variabile a true per non forzare il logout (bug di Explorer SP2)
								document.estrazione.target = 'navframe';
							}
							document.estrazione.submit();
						}
					}
					else
					{
						alert("Selezionare almeno una delega da stampare");
						return false;
					}
				}
				
				function showDetailDelega(f24_id, tipo_f24)
				{
					if (f24_id.length > 0)
					{
						if(tipo_f24 == '104')
							dialogoCentratoWithScrolls("strutt_popup_old.php?tpl=11.QuietanzeF24/02-01.QuietanzaF24_risultato_popup.php&cantiere=vr2&dettaglio_delega_F24="+f24_id, "DettaglioF24", 700, 550);
						else
							dialogoCentratoWithScrolls("strutt_popup_old.php?tpl=11.QuietanzeF24/02-01.QuietanzaF24_risultato_popup.php&cantiere=vr2&id="+f24_id, "DettaglioF24", 700, 550);
					}
				}
				
				function showDetailQuietanza(f24_id)
				{
					if (f24_id.length > 0)
					{
						dialogoCentratoWithScrolls("strutt_popup_old.php?tpl=11.QuietanzeF24/02-01.QuietanzaF24_risultato_popup.php&cantiere=vr2&id="+f24_id, "Dettaglio", 650, 200);
					}
				}
				
				function setItemPage(number)
				{
					document.masterform.max_items_number.value = number;
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
				
				function setColorItem()
				{
					if(is_ie4up)
					{
						document.all['item_10'].className	= 'testoBlackSmallBold';
						document.all['item_20'].className	= 'testoBlackSmallBold';
						document.all['item_50'].className	= 'testoBlackSmallBold';
						
						
						document.all['item_100'].className	= 'testoBlackSmallBold';
						
						document.all['item_200'].className	= 'testoBlackSmallBold';
						
						document.all['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
					}
					else
					{
						document.links['item_10'].className	= 'testoBlackSmallBold';
						document.links['item_20'].className = 'testoBlackSmallBold';
						document.links['item_50'].className = 'testoBlackSmallBold';
						
						document.links['item_100'].className = 'testoBlackSmallBold';
						
						document.links['item_200'].className = 'testoBlackSmallBold';
						
						document.links['item_'+document.masterform.max_items_number.value].className = 'testoRedSmallBold';
					}
				}
				
				
				var selezionatiCheckbox = false;
				var deselezionatiCheckbox = false;
				function doEstrai()
				{
					if (selezionatiCheckbox==false)
					{
						for(var i=0; i<document.masterform.elements.length; i++)
						{
							document.masterform.elements[i].checked=1;
						}
						deselezionatiCheckbox=false;
						selezionatiCheckbox=true;
					}
					else
					{
						for(var i=0; i<document.masterform.elements.length; i++)
						{
							document.masterform.elements[i].checked=0;
						}
						deselezionatiCheckbox=true;
						selezionatiCheckbox=false;
					}
				}	
								
				// PARTE FILTRI
				
				function clearCheckBox()
				{
					for(var i=0; i<document.masterform.elements.length; i++)
					{
						if(document.masterform.elements[i].checked==1){
							document.masterform.elements[i].checked=0;
						}
					}
				}	
				// Chiamata sull'onclick di 'Filtri'. Cambia la action della form.
				// Alla servlet del filtro sono passati tutti i parametri del filtro stesso.
				function onClickFilter() 
				{
					clearCheckBox();
					document.masterform.action="filtroelencoquietanzef24";
					document.masterform.first_item_count.value="1";
					document.masterform.submit();
				}
				
				function resetFilter()
				{
					document.masterform.DA_DATA_SPEDIZIONE.value="";
					document.masterform.A_DATA_SPEDIZIONE.value="";
					document.masterform.tipo_estrazione.value="*";
					document.masterform.DA_DATA_PAGAMENTO.value="";
					document.masterform.A_DATA_PAGAMENTO.value="";
					document.masterform.DA_SALDO_DELEGA.value="";
					document.masterform.A_SALDO_DELEGA.value="";
					document.masterform.CODICE_FISCALE.value="";
					
					// Campi per il reset dei campi generali che sono in tutti gli elenchi
					document.masterform.filter_defined.value = 'false';
					document.masterform.intestatario.value="*";
					document.masterform.banca.value="*";
					document.masterform.sia.value="";
					document.masterform.first_item_count.value="1";
					document.masterform.max_items_number.value="10";
					
					document.masterform.submit();
				}
				
				function doItBefore()
				{
					var selectOK = true;
					var popUpMsg = "";
					var isOk = true;
					
					// Controllo se l'intestatario e' stato selezionato
					if ((document.masterform.intestatario.selectedIndex == 0) && (document.masterform.intestatario.value != '*'))
					{ 
						popUpMsg = popUpMsg + "Occorre selezionare: Rag. Soc./Intestatario\n";
						selectOK = false;
					}		
					if(selectOK)
					{
						return true;
					}
					else
					{
						alert(popUpMsg);
						return false;
					}
				}
				
				/* Deseleziona tutti i checkBox */
				function clearCheckBox()
				{
					for(var i=0; i<document.masterform.elements.length; i++)
					{
						document.masterform.elements[i].checked=0;
					}
				}
				
				var ImgEnabled = false;
				function setCtxFilter()
				{
				
					if(ImgEnabled){
						if(doItBefore()) {
							disableRefreshButton();
							clearCheckBox();
							document.masterform.first_item_count.value="1";
							document.masterform.submit();
						}
					}
				}
				
				function enableRefreshButton()
				{
					var btEnable = './newstyle/img/'+abi+'/refreshcontext-enabled.gif';
						if(document.images)
							document.images['refreshButton'].src = btEnable;
						ImgEnabled = true;
				}
				
				function disableRefreshButton(){
					var btDisable = './newstyle/img/refreshcontext-disabled.gif'
					if(document.images)
						document.images['refreshButton'].src = btDisable;
					ImgEnabled = false;
				}
			// FINE PARTE FILTRI
			
		</script><script src="js/contextSelector.js?vrsn=4"></script><script src="js/filtro.js"></script><script>
			
				initializeContextSelectorLibrary(parent.context);
				var accounteerCombo = null;
				var siaInput = null;
				var bankCombo = null;
				var abiInput = null;
			
		</script><table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<iframe name="navframe" src="../ibbweb/html/dummy.htm" style="display: none;" type="hidden"></iframe>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna">
<form action="elencoquietanzef24" method="POST" name="masterform"></form>
<tbody><tr>
<td valign="top">
<div class="container-wide">
<div class="old-pageContent new-riquadro">
<div class="old-pageTitle titoloTabella"><div class="new-flag"></div><h1>
															Quietanze F24
														<a class="old-pageHelp" href="#" onclick="popHelp('strutt_popup_old.php?tpl=02-02.QuietanzaF24_risultato_help_popup.php&cantiere=vr2','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></div>
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
						</td><td colspan="3">&nbsp;</td>
</tr>
<tr align="left" height="20">
<td><select name="intestatario" onchange="fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), '-1', stringa_tutti, ALL_DATA, NO_ALL, bankCombo, true, false); siaInput.value = fitToLength(getSiaCode(this, ''),0,5); abiInput.value = fitToLength(getAbiCode(bankCombo, ''),0,5); enableRefreshButton();" style="width:230" class="new-form-control"><option value="*">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select><script> accounteerCombo = document.masterform.intestatario; fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true); selectComboByOptionValue(accounteerCombo,'106609'); </script><input name="sia" type="hidden"><script> siaInput = document.forms.masterform.sia; </script></td><td><select name="banca" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5); enableRefreshButton();" style="width:240" class="new-form-control"><option value="-1">TUTTI</option><option value="3422">05034 - BANCO BPM S.P.A.</option><option value="1325">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option></select><script>
								bankCombo = document.masterform.banca;
								fillBanche(createParameterObjectFromCombos(null, accounteerCombo, null), "-1", stringa_tutti, ALL_DATA, NO_ALL, bankCombo, true, true);
								selectComboByOptionValue(bankCombo,'-1');
							</script><input name="abi" type="hidden"><script>abiInput = document.masterform.abi;</script></td><td align="left" width="25"><a href="javascript:setCtxFilter();"><img alt="Applica Filtro Rapido" border="0" name="refreshButton" src="./newstyle/img/refreshcontext-disabled.gif"></a></td><td align="left" width="13"><a class="old-fieldFilter" href="javascript:onClickFilter();"><img src="./newstyle/images/i_filter.png" alt="Filtri" border="0" height="20" width="20"></a></td><td align="left" width="25"><a class="old-fieldRemoveFilter" href="javascript:resetFilter();"><img src="./newstyle/images/i_remove-filter.png" alt="Azzera filtri" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="oRight">
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" height="20" valign="bottom" width="33%"></td><td align="center" class="testoBlackSmallBold" height="20" width="34%">
																			Disposizioni per pagina:
																			<a class="testoRedSmallBold" href="javascript: setItemPage(10)" name="item_10">10</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(20)" name="item_20">20</a>&nbsp;
																			<a class="testoBlackSmallBold" href="javascript: setItemPage(50)" name="item_50">50</a>&nbsp;
																			
								<a class="testoBlackSmallBold" href="javascript: setItemPage(100)" name="item_100">100</a>&nbsp;
								<a class="testoBlackSmallBold" href="javascript: setItemPage(200)" name="item_200">200</a></td><td class="testoBlackSmallBold oRight" height="20" width="34%"><a href="pdf/Quietanza-Legenda.pdf" target="_blank">
																				Legenda quietanza
																			</a></td><td height="20" valign="bottom" width="33%" class="oRight">

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td align="center" width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td>
<table bgcolor="#000000" border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td>
<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="old-inputForm old-table table" width="100%">
<tbody><tr>
<td align="left" class="old-sectionTitle"><h3 class="new-titleSection">
																												Deleghe F24</h3></td>
</tr>
<tr class="old-tableHeader" height="26">
<th align="center" class="" title="Contribuente" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													Contribuente
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('contribuente');"><img alt="ordina per contribuente crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('contribuente');"><img alt="ordina per contribuente decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" title="Data spedizione" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													Spedizione
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('data_spedizione');"><img alt="ordina per data spedizione crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('data_spedizione');"><img alt="ordina per data spedizione decrescente" border="0" src="newstyle/img/05034/frecciadown-gialla.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" title="Data Pag." valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													Pagamento
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('data_pagamento');"><img alt="ordina per data pagamento crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('data_pagamento');"><img alt="ordina per data pagamento decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													Tipo esito
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('tipo_f24');"><img alt="ordina per operazione crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('tipo_f24');"><img alt="ordina per operazione decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" title="Saldo Delega" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													Saldo
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('saldo_delega');"><img alt="ordina per saldo delega F24 crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('saldo_delega');"><img alt="ordina per saldo delega F24 decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top" width="25">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="">
																													Div
																												</th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" class="" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" colspan="2">
																													ABI
																												</th>
</tr>
<tr>
<th class="oRight"><a href="javascript:orderbyASC('abi_addebito');"><img alt="ordina per codice ABI di addebito crescente" border="0" src="newstyle/img/frecciaup-blu.gif"></a></th><th align="left"><a href="javascript:orderbyDESC('abi_addebito');"><img alt="ordina per codice ABI di addebito decrescente" border="0" src="newstyle/img/frecciadown-blu.gif"></a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top" width="40">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="">
																													CAB
																												</th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top" width="85">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" title="Conto di addebito">
																													Conto
																												</th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="" title="Protocollo Delega">
																													Prot.
																												</th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top" width="40">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class=""><a class="" href="javascript:doEstrai();">Estrai </a></th>
</tr>
</tbody></table>
</th><th class=""></th><th align="center" valign="top" width="50">
<table border="0" cellpadding="1" cellspacing="0">
<tbody><tr>
<th align="center" class="">
																													Estratto
																												</th>
</tr>
</tbody></table>
</th>
</tr>
<tr class="odd">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683356','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192403');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683356">145,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683356" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="even">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683311','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192398');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683311">300,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683311" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="odd">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683172','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192362');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683172">68,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683172" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="even">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683140','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192358');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683140">123,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683140" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="odd">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683118','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192354');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683118">157,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683118" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="even">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683110','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192352');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683110">1.124,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683110" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="odd">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('343683051','104');">24/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('542192369');">27/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_343683051">27.075,47</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="343683051" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50"></td>
</tr>
<tr class="even">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('342918285','104');">14/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('540535817');">17/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_342918285">3.457,59</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="342918285" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50">27/12/2018</td>
</tr>
<tr class="odd">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('342917580','104');">14/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('540538156');">17/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_342917580">651,37</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="342917580" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50">27/12/2018</td>
</tr>
<tr class="even">
<td align="left" class="" height="25">AUTOMOBILE CLUB MODENA </td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailDelega('342917343','104');">14/12/2018</a></td><td class="" height="25"></td><td align="left" class="" height="25" width="50"><a class="tabella" href="javascript:showDetailQuietanza('540538020');">17/12/2018</a></td><td class="" height="25"></td><td align="center" class="" height="25" width="125">
																												Deleghe F24
																											</td><td class="" height="25"></td><td class="oRight" height="25" id="saldo_342917343">1.154,00</td><td class="" height="25"></td><td align="left" class="" height="25">
																										EUR
																									</td><td class="" height="25"></td><td align="center" class="" height="25">05034</td><td class="" height="25"></td><td align="center" class="" height="25">12900</td><td class="" height="25"></td><td align="left" class="" height="25">000000047658</td><td class="" height="25"></td><td align="center" class="" height="25">0000001</td><td class="" height="25"></td><td align="center" class="" height="25"><input name="342917343" type="checkbox" value="estrai"></td><td class="" height="25"></td><td align="center" class="" height="25" width="50">27/12/2018</td>
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
			
		</script><input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filter_defined" type="hidden" value="false"><input name="order_by_option" type="hidden" value="data_spedizione=desc"><input name="previous_option" type="hidden" value=""><input name="next_option" type="hidden" value="true"><input name="DA_DATA_SPEDIZIONE" type="hidden" value=""><input name="A_DATA_SPEDIZIONE" type="hidden" value=""><input name="tipo_estrazione" type="hidden" value="*"><input name="DA_DATA_PAGAMENTO" type="hidden" value=""><input name="A_DATA_PAGAMENTO" type="hidden" value=""><input name="DA_SALDO_DELEGA" type="hidden" value=""><input name="A_SALDO_DELEGA" type="hidden" value=""><input name="TIPO_ESITO" type="hidden" value="0"><input name="CODICE_FISCALE" type="hidden" value="">
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" width="100%">
<tbody><tr>
<td align="center">
<table border="0" cellpadding="3" cellspacing="1" width="100%">
<tbody><tr>
<td align="left" width="33%"></td><td align="center" class="old-buttons" width="34%"></td><td width="33%" class="oRight">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="submit oRight"><a href="javascript:showNext();"><img border="0" height="17" src="newstyle/img/05034/pagina-successiva.gif" width="17"></a></td><td class="submit oRight" width="50">
														&nbsp;Successivi
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
</div><div class="new-buttons"><input class="btn" name="command" onclick="docPost();" style="cursor:Hand" type="button" value="Crea PDF"></div>
</div>
</td>
</tr>

<form action="estrazionequietanzef24" method="POST" name="estrazione"></form>
<input name="ID_DELEGHE" type="hidden" value="">

</tbody></table>
<div id="descrizione" style="visibility:hidden;position:absolute;"></div>
<div id="contribuente" style="visibility:hidden;position:absolute;"></div>
<div id="descrizione" style="visibility:hidden;position:absolute;"></div>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza � a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">� 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>
