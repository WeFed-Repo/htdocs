<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
					
            			initializeContextSelectorLibrary(parent.context);
						var accounteerCombo = null;
						var bankCombo = null;
						var siaInput = null;
						var abiInput = null;
						
						if (adeguamentiCbi)
						{					
							loadLocationForGroup(parent.context);
						}
					
				</script>
<form action="insertaliban" method="post" name="insertaliban">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna" height="100%">
<tbody><tr valign="top">
<td>
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr valign="top">
<td align="center" colspan="3">
<table align="right" border="0" cellpadding="2" cellspacing="0">
<tbody>
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
<td align="left" class="titoloTabella old-pageTitle" colspan="4" height="20"><div class="new-flag"></div><h1>
																				Allineamento Iban
																			

																	&nbsp;
																<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/AllineamentoArchivi/AllineamentoElettronicoIBAN.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
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
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura" height="20">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
					Ordinante
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','FALSE','REAL', '', '','Ordinante'); fillBancheTipologia(createParameterObjectFromCombos(null, accounteerCombo, null), '', '', NO_ALL, NO_ALL, bankCombo, true, false,'CC;DT;CA;CP','infodispo');fillInput();" style="width:335px" class="new-form-control"><option value=""></option><option value="12">CONSORZIO P.R.U. STADIO CONE..</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select></td><script>
				accounteerCombo = document.forms.insertaliban.intestatario;
		</script><td align="left" class="col-3" width="55px" style="width: 12%; text-align: left;">
			SIA
		</td><td class="col-4" style="width: 33%; text-align: left;"><input name="codice_azienda" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
			siaInput = document.forms.insertaliban.codice_azienda;
		</script>
</tr>
<tr class="rigaScura" height="20">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
					Banca d'allineamento
					<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%;"><select name="numero_abi_ordinante" onchange="abiInput.value = fitToLength(getAbiCode(this, ''),0,5); " style="width:335px" class="new-form-control"><option value=""></option><option value="3422">05034 - BANCO BPM S.P.A.</option></select></td><script>bankCombo = document.forms.insertaliban.numero_abi_ordinante;</script><td align="left" class="col-3" width="55px" style="width: 12%; text-align: left;">
			        ABI
			    </td><td class="col-4" style="width: 33%; text-align: left;"><input name="abi_allineamento" readonly="true" size="7" type="text" value="" class="new-form-control"></td><script>abiInput = document.forms.insertaliban.abi_allineamento;</script>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
																	&nbsp;Dati richiedente
																</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="col-1" width="125px" style="width: 15%; text-align: left;">
				Ragione Sociale
				<span class="testoRedSmallBold" id="asteriscoRichiedente" style="visibility:hidden;">*</span></td><td class="col-2" width="300px" style="width: 50%;">
<table class="old-inputForm">
<tbody><tr>
<td><input maxlength="30" name="ragione_sociale_richiedente" style="width:300px" type="text" value="" class="new-form-control"></td><td style="min-width: 110px;"><a href="javascript:lookupaziendesearch();" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
								
								function lookupaziendesearch()
								{
									var lookupServlet = "lookupaziendesearch";
														
									if(document.insertaliban.ragione_sociale_richiedente.value=="")
									{
										redirect = lookupServlet+"?intestatario="+accounteerCombo.value;
									}
									else
									{
										redirect = lookupServlet+"?ragione_sociale="+document.insertaliban.ragione_sociale_richiedente.value+"&command=Cerca&intestatario="+accounteerCombo.value;
									}
									gotoservlet(redirect,"CercaNominativo");
								}
								
							</script></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" width="55px" style="width: 12%; text-align: left;">
				SIA
			</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="codice_azienda_12" onchange="checkValue('codice_azienda_12','','FALSE','STRING', '5', '5','Codice SIA');" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" width="125px"></td><td align="left" class="testoRedSmallBold" colspan="3">N.B. Da compilare solo se diverso da Ordinante</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
																	&nbsp;Dati Beneficiario
																</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td colspan="4">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<input name="data_creazione" type="hidden" value="">
</tr><tr class="rigaScura">
<td align="left" class="layervoci col-1" height="20" width="125px" style="width: 15%; text-align: left;">
						Ragione Sociale
							<span class="testoRedSmallBold">*</span></td><td class="col-2" width="335px" style="width: 50%; min-width: 110px;"><input maxlength="30" name="nomeCognomeSottosc" onchange="checkValue('nomeCognomeSottosc','','TRUE','STRING', '1', '30','Ragione Sociale'); " style="width:315px" type="text" value="" class="new-form-control"><script>
							nomeSottosc = document.forms.insertaliban.nomeCognomeSottosc;
						</script><a href="javascript:lookupclientisearch();" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
						
						function lookupclientisearch()
						{
							if (accounteerCombo.value == "")
							{
								alert("Selezionare prima un intestatario");
							}
							else
							{
								var servletRedirect = "lookupfornitorisearch";
								// se nella combo e stato selezionato 'dipendenti' cerco i dipendenti
								if(document.forms.insertaliban.s_fornitori_dipendenti.value == 'dipendenti')
									servletRedirect = "lookupdipendentisearch";

								gotoservlet(servletRedirect + "?descrizione_destinatario="+document.insertaliban.nomeCognomeSottosc.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
						
						</script></td><td align="left" class="layervoci col-3" width="55px" style="width: 12%; text-align: left;">
						Codice
						<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input maxlength="16" name="codice_individuale" onchange="checkValue('codice_individuale','','TRUE','STRING', '1', '16','Codice cliente')" size="16" type="text" value="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupclientisearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
						
						function lookupclientisearchWithCod()
						{
							if (accounteerCombo.value =="")
							{
								alert("Selezionare prima un intestatario");
							}
							else
							{
								var servletRedirect = "lookupfornitorisearch";
								// se nella combo e stato selezionato 'dipendenti' cerco i dipendenti
								if(document.forms.insertaliban.s_fornitori_dipendenti.value == 'dipendenti')
									servletRedirect = "lookupdipendentisearch";

								gotoservlet(servletRedirect + "?codice_cliente_beneficiario="+document.insertaliban.codice_individuale.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
						
					</script></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" style="width: 15%; text-align: left;">
						Codice Fiscale
					</td><td class="col-2" style="width: 50%;"><input maxlength="16" name="codice_fiscale" onchange="checkValue('codice_fiscale','','FALSE','CF_PIVA', '11', '16','Codice Fiscale')" size="30" style="width:335px" type="text" value="" class="new-form-control"></td><td align="left" class="layervoci col-3" style="width: 12%; text-align: left;">
						Tipo Ben.
					</td><td class="col-4" style="width: 33%; text-align: left;"><select name="s_fornitori_dipendenti" style="width:110px" class="new-form-control"><option selected="" value="niente"></option><option value="fornitori">Fornitore</option><option value="dipendenti">Dipendente</option></select></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" style="width: 15%; text-align: left;">
						Indirizzo
					</td><td class="col-2" style="width: 50%;"><input maxlength="25" name="indirizzoSottosc" onchange="checkValue('indirizzoSottosc','','FALSE','STRING', '0', '25','Indirizzo');" style="width:335px" type="text" value="" class="new-form-control"></td><td align="left" class="layervoci col-3" style="width: 12%; text-align: left;">
						CAP
					</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="capSottosc" onchange="checkValue('capSottosc','','FALSE','STRING', '0', '5','CAP');" size="5" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" style="width: 15%; text-align: left;">
						Località
					</td><td class="col-2" style="width: 50%;"><input maxlength="12" name="localSottosc" onchange="checkValue('localSottosc','','FALSE','STRING', '0', '12','Località');" style="width:335px" type="text" value="" class="new-form-control"></td><td align="left" class="layervoci col-3" style="width: 12%; text-align: left;">
						Prov.
					</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provSottosc" onchange="checkValue('provSottosc','','FALSE','STRING', '0', '2','Prov.');" size="2" type="text" value="" class="new-form-control"></td><input name="descrizione_cliente_sottosc" type="hidden" value="">
</tr>

</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci col-1" width="125px" style="width: 15%; text-align: left;">
			Tipo codice
		</td><td class="col-2" colspan="3" style="width: 50%;"><select name="tipo_cod_individuale" size="1" style="width:335px" class="new-form-control"><option value="1">utenza</option><option value="2">matricola</option><option value="3">codice fiscale</option><option selected="" value="4">codice cliente</option><option value="5">codice fornitore</option><option value="6">portafoglio commerciale</option><option value="9">altri</option></select></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="4">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td class="col-1 oRight" width="126px" style="width: 15%; text-align: left;">
																				Coordinate conto
																			</td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci" nowrap="true">
			ABI
			<span class="testoRedSmallBold" id="asterisco1">*</span></td><td width="100px" style="min-width: 110px;"><input maxlength="5" name="abi_conto_addebito" onkeypress="return onlyNaturalNumbers(event)" onblur="checkValue('abi_conto_addebito','','TRUE','ABI_CAB', '5', '5','ABI')" onchange="checkValue('abi_conto_addebito','','FALSE','ABI_CAB', '5', '5','ABI')" size="7" type="text" value="" class="new-form-control"><a href="javascript:lookupagency0()" class="old-fieldSearch"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
			  
			  function lookupagency0()
			  {
				  qualeABI = 0;
				  if(document.insertaliban.abi_conto_addebito.value=="")
				  {
					  gotoservlet("lookupagency","CercaAgenzia");
				  }
				  else
				  {
					  gotoservlet("lookupagency?cod-abi="+document.insertaliban.abi_conto_addebito.value+"&command=Cerca","CercaAgenzia");
				  }
			  }
			  
			</script></td><td class="layervoci oRight" nowrap="true">
			CAB
			<span class="testoRedSmallBold" id="asterisco2">*</span></td><td style="width:50px"><input maxlength="5" name="cab_conto_addebito" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cab_conto_addebito','','FALSE','ABI_CAB', '5', '5','CAB')" size="7" type="text" value="" class="new-form-control"></td><td align="left"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td><td class="layervoci oRight" nowrap="true">
				C/C
				<span class="testoRedSmallBold" id="asterisco3">*</span>&nbsp;
			</td><td class="rigaScura"><input maxlength="12" name="conto_addebito" onkeypress="return onlyAlphaNumbers(event)" onchange="checkValue('conto_addebito','','FALSE','ACCOUNT', '1', '12','C/C')" size="20" style="width:95px" type="text" value="" class="new-form-control"></td><td class="layervoci  oRight">
			CIN
		</td><td class="rigaScura"><input maxlength="1" name="cin_coordinate_banca" onchange="checkValue('cin_coordinate_banca','','FALSE','STRING', '1', '1','CIN')" size="2" type="text" value="" class="new-form-control"></td><td class="layervoci oRight">
			Codice paese
		</td><td><select name="codice_paese" size="1" style="width:145px" class="new-form-control"><option value=""></option><option value="AT">AUSTRIA</option><option value="BE">BELGIO</option><option value="CZ">CECA (REPUBBLICA)</option><option value="HR">CROAZIA</option><option value="DK">DANIMARCA</option><option value="EE">ESTONIA</option><option value="FI">FINLANDIA</option><option value="FR">FRANCIA</option><option value="DE">GERMANIA</option><option value="GR">GRECIA</option><option value="IE">IRLANDA</option><option value="IT">ITALIA</option><option value="LV">LETTONIA</option><option value="LT">LITUANIA</option><option value="LU">LUSSEMBURGO</option><option value="MT">MALTA</option><option value="NO">NORVEGIA</option><option value="NL">PAESI BASSI</option><option value="PL">POLONIA</option><option value="PT">PORTOGALLO</option><option value="GB">REGNO UNITO</option><option value="SI">SLOVENIA</option><option value="ES">SPAGNA</option><option value="SE">SVEZIA</option><option value="HU">UNGHERIA</option><option value="CA">CANADA</option><option value="CN">CINA</option><option value="JP">GIAPPONE</option><option value="US">STATI UNITI</option><option value="CH">SVIZZERA</option><option value="ZW">ZIMBABWE</option><option value="ZM">ZAMBIA</option><option value="ZA">SUDAFRICANA (REPUBBLICA)</option><option value="YT">MAYOTTE</option><option value="YE">YEMEN</option><option value="XX">PAESI NON CLASSIFICATI</option><option value="WS">SAMOA</option><option value="WF">WALLIS E FUTUNA ISOLE</option><option value="VU">VANUATU</option><option value="VN">VIETNAM</option><option value="VI">VERGINI AMERICANE ISOLE</option><option value="VG">VERGINI BRITANNICHE ISOLE</option><option value="VE">VENEZUELA</option><option value="VC">ST. VINCENTE E LE GRENADINE</option><option value="VA">SANTA SEDE (CITTA' DEL VATICANO)</option><option value="UZ">UZBEKISTAN</option><option value="UY">URUGUAY</option><option value="UM">ISOLE AMERICANE DEL PACIFICO</option><option value="UM">MIDWAY ISOLE</option><option value="UM">WAKE ISOLE</option><option value="UG">UGANDA</option><option value="UA">UCRAINA</option><option value="TZ">TANZANIA (REPUBBLICA DI)</option><option value="TW">TAIWAN</option><option value="TV">TUVALU</option><option value="TT">TRINIDAD E TOBAGO</option><option value="TR">TURCHIA</option><option value="TO">TONGA</option><option value="TN">TUNISIA</option><option value="TM">TURKMENISTAN</option><option value="TL">TIMOR-LESTE</option><option value="TK">TOKELAU</option><option value="TJ">TAGIKISTAN</option><option value="TH">THAILANDIA</option><option value="TG">TOGO</option><option value="TF">TERRITORI FRANCESI DEL SUD</option><option value="TD">CIAD</option><option value="TC">TURKS E CAICOS ISOLE</option><option value="SZ">SWAZILAND</option><option value="SY">SIRIA</option><option value="SV">EL SALVADOR</option><option value="ST">SAO TOME E PRINCIPE</option><option value="SR">SURINAME</option><option value="SO">SOMALIA</option><option value="SN">SENEGAL</option><option value="SM">SAN MARINO</option><option value="SL">SIERRA LEONE</option><option value="SK">SLOVACCHIA</option><option value="SJ">SVALBARD E JAN MAYEN ISOLE</option><option value="SH">ASCENSION</option><option value="SH">GOUGH</option><option value="SH">SANT'ELENA</option><option value="SH">TRISTAN DA CUNHA</option><option value="SG">SINGAPORE</option><option value="SD">SUDAN</option><option value="SC">SEYCHELLES</option><option value="SB">SALOMONE ISOLE</option><option value="SA">ARABIA SAUDITA</option><option value="RW">RWANDA</option><option value="RU">RUSSIA (FEDERAZIONE DI)</option><option value="RS">KOSOVO</option><option value="RS">SERBIA</option><option value="RO">ROMANIA</option><option value="RE">REUNION</option><option value="QA">QATAR</option><option value="PY">PARAGUAY</option><option value="PW">PALAU</option><option value="PT">AZZORRE ISOLE</option><option value="PT">MADEIRA</option><option value="PS">PALESTINA, TERRITORI AUTONOMI</option><option value="PR">PORTORICO</option><option value="PN">PITCAIRN</option><option value="PM">SAINT-PIERRE E MIQUELON</option><option value="PK">PAKISTAN</option><option value="PH">FILIPPINE</option><option value="PG">PAPUA NUOVA GUINEA</option><option value="PF">POLINESIA FRANCESE</option><option value="PE">PERU'</option><option value="PA">PANAMA</option><option value="OM">OMAN</option><option value="NZ">NUOVA ZELANDA</option><option value="NU">NIUE</option><option value="NR">NAURU</option><option value="NP">NEPAL</option><option value="NI">NICARAGUA</option><option value="NG">NIGERIA</option><option value="NF">NORFOLK ISOLE</option><option value="NE">NIGER</option><option value="NC">NUOVA CALEDONIA</option><option value="NA">NAMIBIA</option><option value="MZ">MOZAMBICO</option><option value="MY">MALAYSIA</option><option value="MX">MESSICO</option><option value="MW">MALAWI</option><option value="MV">MALDIVE</option><option value="MU">MAURITIUS ISOLE</option><option value="MS">MONTSERRAT</option><option value="MR">MAURITANIA</option><option value="MQ">MARTINICA</option><option value="MP">MARIANNE SETTENTRIONALI ISOLE</option><option value="MO">MACAO</option><option value="MN">MONGOLIA</option><option value="MM">MYANMAR</option><option value="ML">MALI</option><option value="MK">MACEDONIA</option><option value="MH">MARSHALL ISOLE</option><option value="MG">MADAGASCAR</option><option value="MF">SAINT MARTIN SETTENTRIONALE</option><option value="ME">MONTENEGRO</option><option value="MD">MOLDAVIA (REPUBBLICA DI)</option><option value="MC">PRINCIPATO DI MONACO</option><option value="MA">MAROCCO</option><option value="LY">LIBIA</option><option value="LS">LESOTHO</option><option value="LR">LIBERIA</option><option value="LK">SRI LANKA</option><option value="LI">LIECHTENSTEIN</option><option value="LC">SANTA LUCIA</option><option value="LB">LIBANO</option><option value="LA">LAOS (REP DEMOCRATICA POP)</option><option value="KZ">KAZAKISTAN</option><option value="KY">CAYMAN ISOLE</option><option value="KW">KUWAIT</option><option value="KR">COREA DEL SUD (REPUBBLICA DI)</option><option value="KP">COREA DEL NORD(REPUB DEMOCR POPOLARE)</option><option value="KN">ST.KITTS E NEVIS</option><option value="KM">COMOROS ISOLE</option><option value="KI">KIRIBATI</option><option value="KH">CAMBOGIA</option><option value="KG">KYRGYZSTAN</option><option value="KE">KENYA</option><option value="JO">GIORDANIA</option><option value="JM">GIAMAICA</option><option value="JE">JERSEY C.I.</option><option value="IT">CAMPIONE D'ITALIA</option><option value="IS">ISLANDA</option><option value="IR">IRAN (REPUBBLICA ISLAMICA DI)</option><option value="IQ">IRAQ</option><option value="IO">CHAGOS ISOLE</option><option value="IO">TERRITORIO BRITANNICO OCEANO INDIANO</option><option value="IN">INDIA</option><option value="IM">MAN ISOLA</option><option value="IL">ISRAELE</option><option value="ID">INDONESIA</option><option value="HT">HAITI</option><option value="HN">HONDURAS</option><option value="HM">HEARD E MCDONALD ISOLE</option><option value="HK">HONG KONG</option><option value="GY">GUYANA</option><option value="GW">GUINEA BISSAU</option><option value="GU">GUAM</option><option value="GT">GUATEMALA</option><option value="GS">SUD GEORGIA E SUD SANDWICH</option><option value="GQ">GUINEA EQUATORIALE</option><option value="GP">GUADALUPA</option><option value="GN">GUINEA</option><option value="GM">GAMBIA</option><option value="GL">GROENLANDIA</option><option value="GI">GIBILTERRA</option><option value="GH">GHANA</option><option value="GG">GUERNSEY C.I.</option><option value="GF">GUIANA FRANCESE</option><option value="GE">GEORGIA</option><option value="GD">GRENADA</option><option value="GA">GABON</option><option value="FR">CLIPPERTON</option><option value="FO">FAER OER ISOLE</option><option value="FM">CAROLINE ISOLE</option><option value="FM">MICRONESIA (STATI FEDERATI DI)</option><option value="FK">FALKLAND ISOLE</option><option value="FJ">FIJI</option><option value="ET">ETIOPIA</option><option value="ES">CANARIE ISOLE</option><option value="ES">CEUTA</option><option value="ES">CHAFARINAS</option><option value="ES">MELILLA</option><option value="ES">PENON DE ALHUCEMAS</option><option value="ES">PENON DE VELEZ DE LA GOMERA</option><option value="ER">ERITREA</option><option value="EH">SAHARA OCCIDENTALE</option><option value="EG">EGITTO</option><option value="EC">ECUADOR</option><option value="DZ">ALGERIA</option><option value="DO">DOMINICANA (REPUBBLICA)</option><option value="DM">DOMINICA</option><option value="DJ">GIBUTI</option><option value="CY">CIPRO</option><option value="CX">CHRISTMAS ISOLA</option><option value="CV">CAPO VERDE</option><option value="CU">CUBA</option><option value="CR">COSTA RICA</option><option value="CO">COLOMBIA</option><option value="CM">CAMEROON</option><option value="CL">CILE</option><option value="CK">COOK ISOLE</option><option value="CI">COSTA D'AVORIO</option><option value="CG">CONGO</option><option value="CF">CENTROAFRICANA (REPUBBLICA)</option><option value="CD">CONGO R. DEM.</option><option value="CC">COCOS  KEELING ISOLA</option><option value="BZ">BELIZE</option><option value="BY">BIELORUSSIA</option><option value="BW">BOTSWANA</option><option value="BV">BOUVET ISOLA</option><option value="BT">BHUTAN</option><option value="BS">BAHAMAS</option><option value="BR">BRASILE</option><option value="BO">BOLIVIA</option><option value="BN">BRUNEI DARUSSALAM</option><option value="BM">BERMUDA</option><option value="BL">SAINT BARTHELEMY</option><option value="BJ">BENIN</option><option value="BI">BURUNDI</option><option value="BH">BAHRAIN</option><option value="BG">BULGARIA</option><option value="BF">BURKINA FASO</option><option value="BD">BANGLADESH</option><option value="BB">BARBADOS</option><option value="BA">BOSNIA E ERZEGOVINA</option><option value="AZ">AZERBAIGIAN</option><option value="AX">ALAND ISOLE</option><option value="AW">ARUBA</option><option value="AU">AUSTRALIA</option><option value="AS">AMERICAN SAMOA</option><option value="AR">ARGENTINA</option><option value="AQ">ANTARTIDE</option><option value="AO">ANGOLA</option><option value="AN">ANTILLE OLANDESI</option><option value="AM">ARMENIA</option><option value="AL">ALBANIA</option><option value="AI">ANGUILLA</option><option value="AG">ANTIGUA E BARBUDA</option><option value="AF">AFGHANISTAN</option><option value="AE">ABU DHABI</option><option value="AE">AJMAN</option><option value="AE">DUBAI</option><option value="AE">FUIJAYRAH</option><option value="AE">RAS AL KHAIMAH</option><option value="AE">SHARJAH</option><option value="AE">UMM AL QAIWAIN</option><option value="AD">ANDORRA</option><option value="6Z">UNIDROIT-INTL INST FOR UNIF PRIVATE LAW</option><option value="1D">WTO-WORLD TRADE ORGANIZATION</option></select></td><td class="layervoci oRight" width="60px">
				Chk digit.&nbsp;
			</td><td width="149px"><input maxlength="2" name="check_digit" onchange="checkValue('check_digit','','FALSE','STRING', '2', '2','Check digit')" size="2" type="text" value="" class="new-form-control"></td>
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
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle"><h3 class="new-titleSection">
																	&nbsp;Dati disposizione
																</h3></td>
</tr>
<tr>
<td class="rigachiara" height="1" style="height: 5px;"></td>
</tr>
<tr>
<td colspan="4">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
<tbody><tr class="rigaScura">
<td align="left" class="layervoci col-1" style="width: 15%; text-align: left;">
			Descr. richiesta
		</td><td class="col-2" style="width: 50%;"><textarea class="stile new-form-control" col="50" name="descrizione" onkeyup="maxL4TextArea(this,75)" rows="2" style="width:802px"></textarea></td>
</tr>
<tr class="rigaScura">
<td align="left" class="layervoci col-1" width="125px" style="width: 15%; text-align: left;">
				Codice Riferimento
			</td><td class="col-2" style="width: 50%;"><input maxlength="15" name="codice_riferimento" onchange="checkValue('codice_riferimento','','FALSE','STRING', '1', '15','Codice Riferimento')" size="30" style="width:335px" type="text" value="" class="new-form-control"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td class="rigachiara" height="1" style="height: 13px;"></td>
</tr>
<tr align="center" class="rigaScura old-buttons" height="30">
<td>
																					&nbsp;
																				
																					&nbsp;
																				</td>
</tr>
<tr class="rigaScura">
<td height="20"><span class="testoRedSmallBold">* campi obbligatori</span></td>
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
<td>&nbsp;</td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input name="TIPO" type="hidden" value="11" class="btn"><input name="banca" type="hidden" class="btn"><input name="codice_divisa" type="hidden" value="E" class="btn"><input name="carattere_speciale" type="hidden" value="%" class="btn"><input name="causale" type="hidden" value="90717" class="btn"><input class="btn" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</td>
</tr>
</tbody></table>
</form>
<script>
    				
											
					// =================== modifica ================ //
					
					
					// ============= modifica o retry =============== //
					
    						
    							fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
								 fillBancheTipologia(createParameterObjectFromCombos(null,accounteerCombo,null), "", "", NO_ALL, NO_ALL, bankCombo, true, false,"CC;DT;CA;CP","infodispo");
	   							fillInput();
							
						</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>