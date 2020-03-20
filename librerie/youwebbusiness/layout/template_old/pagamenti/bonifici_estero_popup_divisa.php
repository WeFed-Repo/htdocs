
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
<div class="old-pageContent popUpWidth new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="old-inputForm" height="100%" width="100%">
<tbody><tr>
<td valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" class="sfondofiltri" width="100%">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="titoloTabella">
<td align="left" class="old-pageTitle titoloTabella" height="25" width="200"><div class="new-flag"></div><h1>
				                                                                Cerca divisa
				                                                            </h1></td><td class="oRight"><a href="#" onclick="javascript:window.print()"><img src="newstyle/img/print.gif" border="0" alt="Stampa"></a></td>
</tr>
<tr>
<td colspan="2"></td>
</tr>
<tr>
<td class="sfondofiltri" colspan="2">
<form name="searchcurrency">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="testoBlackSmall">
<td class="oRight">
            Codice&nbsp;Divisa:
        </td><td colspan="3"><input maxlength="3" name="cod_divisa" onchange="checkValue('cod_divisa','','FALSE','STRING', '0', '3')" size="3" type="text" value="" class="new-form-control"></td><td class="oRight">
            Descrizione:
        </td><td colspan="3"><input maxlength="50" name="descrizione" onchange="checkValue('descrizione','','FALSE','STRING', '0', '50')" size="50" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="testoBlackSmall">
<td align="center" colspan="8">
<br>
<input class="btn small" name="command" onclick="return additionalCheck();" style="cursor: Hand;" type="submit" value="Cerca"></td>
</tr>
</tbody></table>
</form>
</td>
</tr>
<tr>
<form name="currencylookuplist"></form>
<td class="sfondofiltri" colspan="2">
<table border="0" cellpadding="0" cellspacing="0" class="old-table table" width="100%">
<tbody><tr class="testoBlackNormalBold">
<td class="old-sectionTitle" colspan="2"><h3 class="new-titleSection">
                    Elenco divise
                </h3></td>
</tr>
<tr class="titoloTabella old-tableHeader">
<th align="center" width="40">
                  
                  Codice&nbsp;Divisa
                </th><th align="center" width="40">
                	
                  Descrizione
                </th>
</tr>
<tr class="odd">
<input disabled="true" name="coddivisa1" type="hidden" value="CHF"><input disabled="true" name="descrizione1" type="hidden" value="FRANCO SVIZZERA"><td class=""><a class="tabella" href="javascript:pickDivisa('1')">CHF</a></td><td class="">FRANCO SVIZZERA</td>
</tr>
<tr class="even">
<input disabled="true" name="coddivisa2" type="hidden" value="EUR"><input disabled="true" name="descrizione2" type="hidden" value="EURO UNIONE ECONOMICA MONETARIA"><td class=""><a class="tabella" href="javascript:pickDivisa('2')">EUR</a></td><td class="">EURO UNIONE ECONOMICA MONETARIA</td>
</tr>
<tr class="odd">
<input disabled="true" name="coddivisa3" type="hidden" value="GBP"><input disabled="true" name="descrizione3" type="hidden" value="STERLINA REGNO UNITO"><td class=""><a class="tabella" href="javascript:pickDivisa('3')">GBP</a></td><td class="">STERLINA REGNO UNITO</td>
</tr>
<tr class="even">
<input disabled="true" name="coddivisa4" type="hidden" value="JPY"><input disabled="true" name="descrizione4" type="hidden" value="YEN GIAPPONE"><td class=""><a class="tabella" href="javascript:pickDivisa('4')">JPY</a></td><td class="">YEN GIAPPONE</td>
</tr>
<tr class="odd">
<input disabled="true" name="coddivisa5" type="hidden" value="RUB"><input disabled="true" name="descrizione5" type="hidden" value="RUBLO RUSSIA (NUOVO)"><td class=""><a class="tabella" href="javascript:pickDivisa('5')">RUB</a></td><td class="">RUBLO RUSSIA (NUOVO)</td>
</tr>
<tr class="even">
<input disabled="true" name="coddivisa6" type="hidden" value="USD"><input disabled="true" name="descrizione6" type="hidden" value="DOLLARO STATI UNITI"><td class=""><a class="tabella" href="javascript:pickDivisa('6')">USD</a></td><td class="">DOLLARO STATI UNITI</td>
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
<tr>
<td class="old-buttons oRight" height="26" valign="middle"></td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input class="btn" name="chiudi" onclick="javascript:window.close()" style="cursor: Hand;" type="button" value="Chiudi"></div>
</td>
</tr>
</tbody>
</table>
</body>
</html>