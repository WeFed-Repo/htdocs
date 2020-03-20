
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META CONTENT="no-cache" HTTP-EQUIV="Webmaster">
<title>Ricerca sportelli</title><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/bootstrap.min.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/header-default.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb2014.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/essentials.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb-Business.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/alten.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/common.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/forms.css?v=1&vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/layout.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/main.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/menu.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/stile.css?vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/style.css?v=2&vtm=10"/><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/jquery-ui.1.11.4.css?vtm=10"/>

<SCRIPT LANGUAGE="JavaScript">
                                


                function pickSportello(pos)
                {
                    var inputid = "id"+pos;
                    var inputcodabi = "codabi"+pos;
                    var inputcodcab = "codcab"+pos;
                    var inputlocalita = "localita"+pos;
                    var inputnome = "nome"+pos;
                    self.opener.setSportello(document.sportelli.elements[inputid].value,
                                                       document.sportelli.elements[inputcodabi].value,
                                                       document.sportelli.elements[inputcodcab].value,
                                                       document.sportelli.elements[inputlocalita].value,
                                                       document.sportelli.elements[inputnome].value);
                    self.close();
                }
// leo(
                function adjApex(nome)
                {
                     var idx = 0;
                     idx = nome.indexOf("'", idx)
                     if (idx > -1) {
                         while (idx > -1) {
                             nome = nome.substring(0, idx)+"'''"+nome.substring(idx);
                             idx = nome.indexOf("'", idx+4);
                         }
                     }
                     return nome;
                }
// )leo
                function additionalCheck()
                {
                     if (!(checkForm('searchagency')))
                         return false;
                     cod_abi = this.document.searchagency.elements['cod-abi'].value;
                     cod_cab = this.document.searchagency.elements['cod-cab'].value;
                     nome  = this.document.searchagency.elements['nome'].value;
                     localita  = this.document.searchagency.elements['localita'].value;
                     descrizione  = this.document.searchagency.elements['descrizione'].value;
                     indirizzo  = this.document.searchagency.elements['indirizzo'].value;
                     comune  = this.document.searchagency.elements['comune'].value;
                     cap  = this.document.searchagency.elements['cap'].value;
                     provincia  = this.document.searchagency.elements['provincia'].value;
                     stato = this.document.searchagency.elements['stato'].value;
                     data_chiusura = this.document.searchagency.elements['data-chiusura'].value;
                     if ( (cod_abi=='') &&(cod_cab=='') && (nome=='') && (localita=='') && (descrizione=='') && (indirizzo=='') && (comune =='') && (cap=='') && (provincia=='') && (stato == '') && (data_chiusura == ''))
                     {
                         alert("Impostare almeno un filtro");
// leo(
                         document.close();
                                open('lookupagency', 'CercaAgenzia', 'height=350,width=700,resizable=yes,scrollbars=yes,screenX=600,dependent=yes');
// )leo
                         return false;
                     }
// leo(
                     this.document.searchagency.elements['nome'].value = adjApex(nome);
                     this.document.searchagency.elements['localita'].value = adjApex(localita);
                     this.document.searchagency.elements['descrizione'].value = adjApex(descrizione);
                     this.document.searchagency.elements['indirizzo'].value = adjApex(indirizzo);
                     this.document.searchagency.elements['comune'].value = adjApex(comune);
                     this.document.searchagency.elements['provincia'].value = adjApex(provincia);
// )leo
                     return true;
                }
                
				</SCRIPT><script type="text/javascript" src="newstyle/js/jquery-1.9.1.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/jquery-ui.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/transactionMonitor/json2.js?vrsn=2?vtm=10"></script><script type="text/javascript" src="newstyle/js/alten.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/respond.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/tab.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/calendarTM.js?vtm=10"></script><script src="newstyle/js/checkLibrary-ITA.js?v=13"></script><SCRIPT SRC="newstyle/js/strings.js"></SCRIPT>
</head>
<body class="sfondofiltri" leftmargin="0" marginheight="0" marginwidth="0" style="width:100%" text="#000000" topmargin="0">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="old-inputForm larghezzaEsterna" height="100%" valign="top">
<tr>
<td valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<div class="old-pageContent popUpWidth">
<table border="0" cellpadding="0" cellspacing="0" class="sfondofiltri" width="100%">
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="left" class="titoloTabella old-pageTitle" width="200">
	                                                                Cerca ABI
	                                                            </td><td align="right" height="25"><a href="#" onclick="javascript:window.print()"><img src="newstyle/img/print.gif" border="0" alt="Stampa"></a>&nbsp;
	                                                            </td>
</tr>
<tr>
<td colspan="2"><img alt="" border="0" height="20" src="img/dummy.gif" width="1"></td>
</tr>
<tr>
<td class="sfondofiltri" colspan="2">
<form name="searchagency">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tr class="testoBlackSmall">
<td align="right">
            ABI:&nbsp;
        </td><td colspan="3"><input maxlength="5" name="cod-abi" onchange="checkValue('cod-abi','','FALSE','INTEGER', '', '')" size="5" type="text" value=""></td><td align="right">
            CAB:&nbsp;
        </td><td colspan="3"><input maxlength="5" name="cod-cab" onchange="checkValue('cod-cab','','FALSE','INTEGER', '', '')" size="5" type="text" value=""></td>
</tr>
<tr class="testoBlackSmall">
<td align="right">
            Nome banca:&nbsp;
        </td><td colspan="3"><input maxlength="100" name="nome" onchange="checkValue('nome','','FALSE','STRING', '', '')" size="30" type="text" value=""></td><td align="right">
            Localit&agrave;:&nbsp;
        </td><td colspan="3"><input maxlength="100" name="localita" onchange="checkValue('localita','','FALSE','STRING', '', '')" size="30" type="text" value=""></td>
</tr>
<tr class="testoBlackSmall">
<td align="right">
			Sportello:&nbsp;
		</td><td colspan="3"><input maxlength="100" name="descrizione" onchange="checkValue('descrizione','','FALSE','STRING', '', '')" size="30" type="text" value=""></td><td align="right">
            Indirizzo:&nbsp;
        </td><td colspan="3"><input maxlength="100" name="indirizzo" onchange="checkValue('indirizzo','','FALSE','STRING', '', '')" size="30" type="text" value=""></td>
</tr>
<tr class="testoBlackSmall">
<td align="right">
            Comune:&nbsp;
        </td><td colspan="3"><input maxlength="100" name="comune" onchange="checkValue('comune','','FALSE','STRING', '', '')" size="30" type="text" value=""></td><td align="right">
            CAP:&nbsp;
        </td><td colspan="3"><input maxlength="5" name="cap" onchange="checkValue('cap','','FALSE','INTEGER', '', '')" size="5" type="text" value=""></td>
</tr>
<tr class="testoBlackSmall">
<td align="right">
            Prov.:&nbsp;
        </td><td colspan="3"><input maxlength="2" name="provincia" onchange="checkValue('provincia','','FALSE','STRING', '', '')" size="3" type="text" value=""></td><td colspan="2">&nbsp;</td>
</tr>
<tr class="testoBlackSmall">
<td align="right">
			Stato:&nbsp;
		</td><td colspan="3"><select name="stato"><option selected="true" value="">&nbsp;</option><option value="A">Attivo</option><option value="D">Chiuso</option></select></td><td align="right">
			Data chiusura:&nbsp;
		</td><td colspan="3"><input maxlength="10" name="data-chiusura" onchange="checkValue('data-chiusura','','FALSE','DATE', '', '')" size="10" type="text" value=""></td>
</tr>
<input name="first_item_count" type="hidden" value="1"><input name="max_items_number" type="hidden" value="100">
<tr class="testoBlackSmall">
<td align="center" colspan="8">
<br>
<input class="bottom" name="command" onclick="return additionalCheck();" style="cursor: Hand;" type="submit" value="Cerca"></td>
</tr>
</table>
</form>
</td>
</tr>
<tr>
<form name="sportelli">
<td class="sfondofiltri" colspan="2"></td>
</form>
</tr>
</table>
</td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td align="right" class="old-buttons" height="26" valign="middle"><input class="bottom" name="chiudi" onclick="javascript:window.close()" style="cursor: Hand;" type="button" value="Chiudi">
										&nbsp;
									</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
