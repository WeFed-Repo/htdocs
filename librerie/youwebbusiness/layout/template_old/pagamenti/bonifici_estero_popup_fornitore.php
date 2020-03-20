
<HTML>
<HEAD>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cerca fornitore estero</title>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
<script type="text/javascript" src="newstyle/js/jquery-1.9.1.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/jquery-ui.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/transactionMonitor/json2.js?vrsn=2?vtm=10"></script><script type="text/javascript" src="newstyle/js/alten.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/respond.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/tab.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/calendarTM.js?vtm=10"></script><script src="newstyle/js/utilita.js"></script><SCRIPT LANGUAGE="JavaScript">
                    
                        function pickNominativo(formRef)
                        {
							self.opener.setNominativo(formRef.codice_cliente_beneficiario.value,
													  formRef.descrizione_destinatario.value,
                                                      formRef.indirizzo.value,
                                                      formRef.citta.value,
                                                      formRef.divisa_accredito.value,
                                  					  formRef.tipo_data_ben.value,
                                                      formRef.addebito_spese.value,
                                                      formRef.tipo_pagamento.value,
                                                      formRef.tipo_avviso.value,
                                                      formRef.tipo_contatto.value,
                                                      formRef.codice_paese.value,
                                                      formRef.iban.value,
                                                      formRef.bic.value,
                                                      formRef.desc_banca_estera.value,
                                                      formRef.localita_banca_estera.value,
                                                      formRef.uic_stato.value);
							
                            self.close();
                        }
                    
                </SCRIPT>
<META CONTENT="no-cache" HTTP-EQUIV="Webmaster">

</HEAD>
<body class="sfondofiltri" leftmargin="0" marginheight="0" marginwidth="0" topmargin="0">
<table class="larghezzaEsterna">
<tbody>
<tr>
<td>
<div class="old-pageContent popUpWidth">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td height="20">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr class="titoloTabella">
<td align="left" class="old-pageTitle" height="25"> 
		                                                                &nbsp;Cerca fornitore estero
																	</td><td align="right"><a href="#" onclick="javascript:window.print()"><img src="newstyle/img/print.gif" border="0" alt="Stampa"></a>&nbsp;
																	</td>
</tr>
<tr>
<td colspan="2"><img alt="" border="0" height="20" src="img/dummy.gif" width="1"></td>
</tr>
<tr>
<td colspan="2">
<form name="searchagency">
<table border="0" cellpadding="2" cellspacing="0" class="old-inputForm" width="100%">
<tr>
<td align="right" class="testoBlackSmall">
																						Ragione sociale:
																					</td><td><input maxlength="100" name="descrizione_destinatario" size="30" type="text" value=""></td><td align="right" class="testoBlackSmall">
																						Descrizione banca: 
																					</td><td><input maxlength="100" name="desc_banca_estera" size="30" type="text" value=""></td>
</tr>
<tr>
<td align="right" class="testoBlackSmall">
																					   BIC: 
																					</td><td class="testoBlackSmall"><input maxlength="11" name="bic" size="11" type="text" value=""></td><td align="right" class="testoBlackSmall">
																						Stato: 
																					</td><td class="testoBlackSmall"><select name="uic_stato" style="width:168"></select><script>
																							
																							arrayStati = new Array();
																							arrayStati = parent.opener.statoArray
																							for(i=0;i<arrayStati.length;i++)
																							{
																								document.searchagency.uic_stato.options[i] = new Option(arrayStati[i].testo,arrayStati[i].uic,false,false);
																							}
																							
																							selectComboByOptionValue(document.searchagency.uic_stato,'');
																						</script></td>
</tr>
<tr>
<td align="center" colspan="4"><input class="bottom" type="submit" value="Cerca" style="cursor:hand"></td>
</tr>
</table>
<input name="intestatario" type="hidden" value="588536"><input name="tipo_fornitore" type="hidden" value="E">
</form>
</td>
</tr>
<tr>
<td colspan="2">
<table cellpadding="2" cellspacing="1" class="old-table" width="100%">
<tr>
<td class="testoBlackNormalBold old-sectionTitle" colspan="4">
																					Elenco nominativi
																				</td>
</tr>
<tr class="old-tableHeader">
<td class="titoloTabella">
																					Ragione sociale
																				</td><td class="titoloTabella" width="150">
																					Localit&agrave;
																				</td><td class="titoloTabella">
																					Banca
																				</td><td class="titoloTabella" width="85">
																					BIC
																				</td><td class="titoloTabella" width="85">
																					Stato
																				</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="right" class="old-buttons" height="26" valign="middle"><input class="bottom" name="chiudi" onclick="javascript:window.close()" style="cursor: Hand;" type="button" value="Chiudi">
									&nbsp;
								</td>
</tr>
</table>
</div>
</td>
</tr>
</tbody>
</table>

</body>
</html>