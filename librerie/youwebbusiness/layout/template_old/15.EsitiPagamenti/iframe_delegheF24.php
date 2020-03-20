<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
</head>
<body background="img/05034/background5.gif" class="sfondo" leftmargin="0" marginheight="0" marginwidth="0" onload="setVisibility();" topmargin="0">
<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
					
						initializeContextSelectorLibrary(parent.context);
						var accounteerCombo = null;
						var siaInput = null;
					
				</script>
<table class="larghezzaEsterna">
<tbody><tr>
<td>
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaInterna" width="100%">
<form action="elencodispof24" method="get" name="setfilter"></form>
<input name="max_items_number" type="hidden" value="10"><input name="first_item_count" type="hidden" value="1"><input name="filtroVisibilita" type="hidden" value="false">
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
<td class="titoloTabella old-pageTitle" height="20"><div class="new-flag"></div><h1>
                                    Deleghe F24
                                  </h1></td>
</tr>
<tr>
<td class="titoloFiltri"></td>
</tr>
<tr class="section">
<td>
<table align="center" border="0" cellpadding="2" cellspacing="1" width="100%">
<tbody><tr>
<td class="testoBlackSmall col-1 oRight" width="22%" style="width: 15%; text-align: left;">
        				Rag. Soc./Intestatario:
						<span class="testoRedSmallBold"> *</span></td><td class="col-2" width="44%" style="width: 50%;"><select name="intestatario" onchange="siaInput.value = fitToLength(getSiaCode(this, ''),0,5);" style="width:300px" class="new-form-control"><option value="*">TUTTI</option><option value="106609">AUTOMOBILE CLUB MODENA</option></select><script>
					accounteerCombo = document.setfilter.intestatario;
					fillIntestatari(createParameterObject(), "*", stringa_tutti, NO_ALL, NO_ALL, accounteerCombo, true, true);
					selectComboByOptionValue(accounteerCombo,'');
				</script></td><td class="testoBlackSmall col-3 oRight" width="16%" style="width: 12%; text-align: left;">
				SIA:
			</td><td class="col-4 oRight" width="6%" style="width: 33%; text-align: left;"><input name="sia" readonly="true" style="width:60px" type="text" class="new-form-control"><script>
					siaInput = document.setfilter.sia;
					fillInput()
				</script></td>
</tr>
<tr>
<td class="testoBlackSmall col-1 oRight" width="22%" style="width: 15%; text-align: left;">
				Tipo esito:
			</td><td class="col-2" colspan="3" style="width: 50%;"><select name="TIPO_ESITO" onchange="changeComboRevoca();" style="width:300px" class="new-form-control"><option selected="" value="0">TUTTI</option><option value="104">Esiti Deleghe F24</option><option value="106">Esiti&nbsp;F24 Elementi Identificativi</option></select><script>
					selectComboByOptionValue(document.setfilter.TIPO_ESITO,'');
				</script></td>
</tr>
<tr>
<td class="testoBlackSmall col-1 oRight" style="width: 15%; text-align: left;">
				Stato Delega:
			</td><td class="col-2" style="width: 50%;"><select name="STATO_DELEGA" onchange="changeComboRevoca();" style="width:300px" class="new-form-control"><option selected="" value="*">TUTTI</option><option value="1">presentata</option><option value="2">accettata</option><option value="3">rifiutata</option><option value="4">pagata</option><option value="5">non pagata</option></select><script>
					selectComboByOptionValue(document.setfilter.STATO_DELEGA,'');
				</script></td><td class="testoBlackSmall col-3 oRight" style="width: 12%; text-align: left;">
				Righe per pagina:
			</td><td class="col-4 oRight" style="width: 33%; text-align: left;"><select name="numRows" style="width:60px" class="new-form-control"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select><script>
					selectComboByOptionValue(document.setfilter.numRows,'10');
				</script></td>
</tr>
<tr class="sfondofiltri" style="background-color:F7FCF7 !important">
<td class="testoBlackSmall col-1" style="padding-top: 0px; padding-bottom: 0px; width: 15%; text-align: left;">
				Stato Revoca F24:
			</td><td class="col-2" style="padding-top: 2px; padding-bottom: 0px; width: 50%;"><select name="STATO_REVOCA" onchange="changeComboDelega();" style="width:300px" class="new-form-control"><option selected="" value="*">TUTTI</option><option value="6">da creare</option><option value="7">creata</option><option value="8">aggregata</option><option value="9">presentata</option><option value="10">accettata</option><option value="11">rifiutata</option><option value="12">supporto logico rifiutato</option></select><script>
					selectComboByOptionValue(document.setfilter.STATO_REVOCA,'');
				</script><input name="STATO" type="hidden" value="1"></td><td colspan="3" style="padding-top:2px; padding-bottom:0px;" class="oRight"><input class="btn small" name="bottoneFiltro" onclick="collaps();" style="margin-bottom:0px" type="button" value="<< Avanzate"></td>
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
			filtri_avanzati[0]='DA_DATA_SPEDIZIONE';
			filtri_avanzati[1]='A_DATA_SPEDIZIONE';
			filtri_avanzati[2]='DA_DATA_ACCETTAZIONE_RIFIUTO';
			filtri_avanzati[3]='A_DATA_ACCETTAZIONE_RIFIUTO';
			filtri_avanzati[4]='DA_DATA_PAGAMENTO';
			filtri_avanzati[5]='A_DATA_PAGAMENTO';
			filtri_avanzati[6]='DA_SALDO_DELEGA';
			filtri_avanzati[7]='A_SALDO_DELEGA';
			filtri_avanzati[8]='CODICE_FISCALE'
		</script>
<tr id="filtro" style="">
<td align="center">
<table align="center" border="0" cellpadding="2" cellspacing="1" class="section" width="100%">
<tbody><tr>
<td class="col-1" width="22%" style="width: 15%; text-align: left;">&nbsp;</td><td class="col-2 testoBlackSmall" style="width: 50%;">
<table>
<tbody><tr><td style="padding-top:0px;padding-bottom:0px" width="160px"><span class="testoBlackSmallBold">
                        Da:
                      </span></td><td style="padding-left:33px; padding-top:0px; padding-bottom:0px"><span class="testoBlackSmallBold">
                        A:
                      </span></td>
</tr></tbody></table>
</td>
</tr>
<tr>
<td class="col-1 oRight" style="padding-top: 0px; padding-bottom: 0px; width: 15%; text-align: left;"><span class="testoBlackSmall" style="padding-left:0px">Data spedizione:
              </span></td><td class="col-2" style="padding-top: 2px; padding-bottom: 2px; width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td style="padding-top:0px;padding-bottom:0px;" width="105"><input class="daDataSpedYBW datepicker new-form-control hasDatepicker" name="DA_DATA_SPEDIZIONE" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_SPEDIZIONE','','FALSE','DATE', '', '')" title="
                        Formato data gg/mm/aaaa
                      " type="text" id="dp1568749246153"><script>
                      document.setfilter.DA_DATA_SPEDIZIONE.value = '';
                    </script></td><td style="padding-top:0px;padding-bottom:0px;"><a alt="
                          Apri calendario
                        " class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_SPEDIZIONE','setfilter','1');" onclick="$('.daDataSpedYBW.datepicker').datepicker('show');"><img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
                    $(function(){
                    $('.datepicker').datepicker();
                    })
                    </script></td><td style="padding-top:0px; padding-bottom:0px;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td style="padding-left:30px; padding-top:0px;padding-bottom:0px"><input class="datepicker aDataSpedizione new-form-control hasDatepicker" name="A_DATA_SPEDIZIONE" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_SPEDIZIONE','','FALSE','DATE', '', '')" title="
                                Formato data gg/mm/aaaa
                              " type="text" id="dp1568749246154"><script>
                              document.setfilter.A_DATA_SPEDIZIONE.value = '';
                            </script></td><td style="padding-top:0px; padding-bottom:0px"><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_SPEDIZIONE','setfilter','2');" onclick="$('.datepicker.aDataSpedizione').datepicker('show')">
                              <img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td><td class="col-3 oRight" style="padding-top: 0px; padding-bottom: 0px; width: 12%; text-align: left;"><span class="testoBlackSmall">
                  C.F/P.I contribuente:
                </span></td><td align="left" class="col-4" style="padding-top: 0px; padding-bottom: 0px; width: 33%; text-align: left; min-width: 110px;"><input id="CODICE_FISCALE" maxlength="16" name="CODICE_FISCALE" onchange="checkValue('CODICE_FISCALE','','FALSE','CF_PIVA', '0', '16','CODICE FISCALE '); " size="25" type="text" value="" class="new-form-control"><a href="javascript:lookupcontribuentisearch()" class="old-fieldSearch">
                  <img src="/librerie/youwebbusiness/ibbweb/newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script>
                  document.setfilter.CODICE_FISCALE.value = '';
                </script><input id="sessionKey" name="sessionKey" type="hidden"></td>
</tr>
<tr>
<td class="testoBlackSmall col-1 oRight" style="padding-top: 0px; padding-bottom: 0px; width: 15%; text-align: left;">
              Data accettazione o rifiuto:
            </td><td class="col-2" style="padding-top: 2px; padding-bottom: 2px; width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td style="padding-top:0px;padding-bottom:0px" width="105"><input class="datepicker daDataAccRifYBW new-form-control hasDatepicker" name="DA_DATA_ACCETTAZIONE_RIFIUTO" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_ACCETTAZIONE_RIFIUTO','','FALSE','DATE', '', '')" title="
                        Formato data gg/mm/aaaa
                      " type="text" id="dp1568749246155"><script>
                      document.setfilter.DA_DATA_ACCETTAZIONE_RIFIUTO.value = '';
                    </script></td><td style="padding-top:0px;padding-bottom:0px"><a class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_ACCETTAZIONE_RIFIUTO','setfilter','3');" onclick="$('.daDataAccRifYBW.datepicker').datepicker('show');">
                      <img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><td style="padding-top:0px; padding-bottom:0px; padding-left:30px;" width="105"><input class="aDataAccRifYBW datepicker new-form-control hasDatepicker" name="A_DATA_ACCETTAZIONE_RIFIUTO" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_ACCETTAZIONE_RIFIUTO','','FALSE','DATE', '', '')" title="
                          Formato data gg/mm/aaaa
                        " type="text" id="dp1568749246156"><script>
                        document.setfilter.A_DATA_ACCETTAZIONE_RIFIUTO.value = '';
                      </script></td><td style="padding-top:0px; padding-bottom:0px"><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_ACCETTAZIONE_RIFIUTO','setfilter','4');" onclick="$('.datepicker.aDataAccRifYBW').datepicker('show');"><img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td><td class="col-3 oRight" colspan="2" style="padding-top: 0px; padding-bottom: 0px; width: 12%; text-align: left;">
              &nbsp;
            </td>
</tr><tr>
<td class="testoBlackSmall col-1 oRight" style="padding-top: 0px; padding-bottom: 0px; width: 15%; text-align: left;">
                Data Pag.:
              </td><td class="col-2" style="padding-top: 2px; padding-bottom: 2px; width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td style="padding-top:0px;padding-bottom:0px" width="105"><input class="daDataPagamentoYBW datepicker new-form-control hasDatepicker" name="DA_DATA_PAGAMENTO" onkeypress="return onlyDate(event)" onchange="checkValue('DA_DATA_PAGAMENTO','','FALSE','DATE', '', '')" title="
                          Formato data gg/mm/aaaa
                        " type="text" id="dp1568749246157"><script>
                        document.setfilter.DA_DATA_PAGAMENTO.value = '';
                      </script></td><td style="padding-top:0px;padding-bottom:0px"><a class="old-fieldCalendar" href="javascript:showHideFla('DA_DATA_PAGAMENTO','setfilter','5');" onclick="$('.datepicker.daDataPagamentoYBW').datepicker('show');">
                        <img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td><td style="padding-left:30px; padding-top:0px; padding-bottom:0px" width="105"><input class="aDataPagamentoYBW datepicker new-form-control hasDatepicker" name="A_DATA_PAGAMENTO" onkeypress="return onlyDate(event)" onchange="checkValue('A_DATA_PAGAMENTO','','FALSE','DATE', '', '')" title="
                            Formato data gg/mm/aaaa
                          " type="text" id="dp1568749246158"><script>
                          document.setfilter.A_DATA_PAGAMENTO.value = '';
                        </script></td><td style="padding-top:0px; padding-bottom:0px;"><a class="old-fieldCalendar" href="javascript:showHideFla('A_DATA_PAGAMENTO','setfilter','6');" onclick="$('.aDataPagamentoYBW.datepicker').datepicker('show');">
                          <img src="/librerie/youwebbusiness/ibbweb/newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td><td class="col-3 oRight" colspan="30px;" style="padding-top: 0px; padding-bottom: 0px; width: 12%; text-align: left;">
                &nbsp;
              </td>
</tr>
<tr>
<td class="col-1 oRight" style="padding-top: 0px; width: 15%; text-align: left;"><span class="testoBlackSmall" style="padding-left:0px;">Saldo Delega:
                </span></td><td align="left" class="col-2" style="padding-top: 2px; padding-bottom: 2px; width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td style="padding-top:0px; padding-bottom:0px; padding-left:0px;"><input maxlength="14" name="DA_SALDO_DELEGA" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('DA_SALDO_DELEGA','','FALSE','CURRENCY', '', '')" type="text" class="new-form-control"><script>
                            document.setfilter.DA_SALDO_DELEGA.value = '';
                          </script></td><td style="padding-left:55px; padding-top:0px; padding-bottom:0px;"><input maxlength="14" name="A_SALDO_DELEGA" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('A_SALDO_DELEGA','','FALSE','CURRENCY', '', '')" type="text" class="new-form-control"><script>
                            document.setfilter.A_SALDO_DELEGA.value = '';
                          </script></td>
</tr>
</tbody></table>
</td><td class="col-3 oRight" style="width: 12%; text-align: left;">
								&nbsp;</td>
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
</td>
</tr>
</tbody></table>
</td>
</tr>

</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>

</html>