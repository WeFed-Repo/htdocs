<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<script>
					initializeContextSelectorLibrary(parent.context);
				</script>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezzaEsterna" height="100%">
<tbody><tr>
<td valign="top">
<form action="insertelcos" method="post" name="insertelcosribes">
<input name="comune_sigla_prov" type="hidden"><input name="flag_is_elcos_2000" type="hidden" value="1"><input name="flag_accettazione" type="hidden" value="0"><input name="causale" type="hidden" value="00000"><input name="segno" type="hidden" value="-"><input name="numero_autorizzazione" type="hidden" value="0000000000"><input name="data_autorizzazione" type="hidden" value="000000"><input name="indicatore_pool" type="hidden" value="$POOL"><input name="importo_originario" type="hidden" value=""><input name="divisa_originaria" type="hidden" value=""><input maxlength="3" name="divisa_accredito" type="hidden" value="EUR"><input name="divisa_originaria" type="hidden" value=""><input name="nome_debitore_due" type="hidden" value=""><input name="descrizione_incasso_due" type="hidden" value=""><input name="provincia_finanza" type="hidden" value="               "><input name="numero_abi_assuntrice" type="hidden" value=""><input name="num_rapporto" type="hidden" value=""><input name="conto" type="hidden" value=""><input name="dati_luogo_creditore" type="hidden"><input name="tipo_supporto" type="hidden" value="E"><input name="paese_creditore" type="hidden" value=""><input name="codice_creditore" type="hidden" value="" readonly="">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="larghezaInterna" width="100%">
<tbody><tr>
<td>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" height="20" width="100%"><div class="new-flag"></div><h1>
																	&nbsp;Elcos/Ribes
																	<a class="old-pageHelp" href="#" onclick="popHelp('./html/help/AreaDispositiva/IncassiEstero/elcos-ribes.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240',534,240);"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr>
<td class="rigachiara">
<table border="0" cellpadding="2" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr>
<td colspan="4"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Ordinante
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" width="100" style="width: 15%; text-align: left;">
					Ordinante<span class="testoRedSmallBold">*</span></td><td align="left" class="col-2" width="315" style="width: 50%;"><select name="intestatario" onchange="checkValue('intestatario','','TRUE','', '', '','Ordinante'); onChangeIntestatario(); isOnlyForCustomer(siaInput.value);" onkeyup="onChangeIntestatario();" style="width:260px" class="new-form-control"><option value=""></option><option value="106609">AUTOMOBILE CLUB MODENA</option></select></td><script>
			var accounteerCombo = document.forms.insertelcosribes.intestatario;
		</script><td class="col-3" width="80" style="width: 12%; text-align: left;">
					SIA<span class="testoRedSmallBold">*</span></td><td class="col-4" width="130" style="width: 33%; text-align: left;"><input maxlength="5" name="codice_azienda" readonly="true" type="text" value="" class="new-form-control"></td><script>
			var siaInput = document.forms.insertelcosribes.codice_azienda;
		</script>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">ABI<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="5" name="codice_abi_assuntrice" onkeypress="return onlyNaturalNumbers(event);" onchange="checkValue('codice_abi_assuntrice','','FALSE','STRING', '1', '5','ABI')" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
			var abiInput = document.insertelcosribes.codice_abi_assuntrice;
		</script><td class="col-3" style="width: 12%; text-align: left;">CAB<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cab_assuntrice" onkeypress="return onlyNaturalNumbers(event);" onchange="checkValue('cab_assuntrice','','TRUE','STRING', '5', '5','CAB')" readonly="true" size="5" type="text" value="" class="new-form-control"></td><script>
			var cabInput = document.insertelcosribes.cab_assuntrice;
		</script>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
					Codice estero<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="9" name="cod_estero_cedente" readonly="true" style="width:80px" type="text" value="" class="new-form-control"></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Paese<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><select name="paese_accredito" onchange="checkValue('paese_accredito','','TRUE','STRING', '1', '30', 'Paese ordinante'); copiaPaese(this);" onkeyup=" copiaPaese(this);" style="width:168px" class="new-form-control"><option value=""></option><option value="8">AUSTRIA</option><option value="9">BELGIO</option><option value="275">CECA (REPUBBLICA)</option><option value="261">CROAZIA</option><option value="21">DANIMARCA</option><option value="257">ESTONIA</option><option value="28">FINLANDIA</option><option value="29">FRANCIA</option><option value="94">GERMANIA</option><option value="32">GRECIA</option><option value="40">IRLANDA</option><option value="86">ITALIA</option><option value="258">LETTONIA</option><option value="259">LITUANIA</option><option value="92">LUSSEMBURGO</option><option value="105">MALTA</option><option value="48">NORVEGIA</option><option value="50">PAESI BASSI</option><option value="54">POLONIA</option><option value="55">PORTOGALLO</option><option value="31">REGNO UNITO</option><option value="260">SLOVENIA</option><option value="67">SPAGNA</option><option value="68">SVEZIA</option><option value="77">UNGHERIA</option><option value="13">CANADA</option><option value="16">CINA</option><option value="88">GIAPPONE</option><option value="69">STATI UNITI</option><option value="71">SVIZZERA</option><option value="238">ABU DHABI</option><option value="2">AFGHANISTAN</option><option value="239">AJMAN</option><option value="292">ALAND ISOLE</option><option value="87">ALBANIA</option><option value="3">ALGERIA</option><option value="148">AMERICAN SAMOA</option><option value="4">ANDORRA</option><option value="133">ANGOLA</option><option value="209">ANGUILLA</option><option value="180">ANTARTIDE</option><option value="197">ANTIGUA E BARBUDA</option><option value="251">ANTILLE OLANDESI</option><option value="5">ARABIA SAUDITA</option><option value="6">ARGENTINA</option><option value="266">ARMENIA</option><option value="212">ARUBA</option><option value="227">ASCENSION</option><option value="7">AUSTRALIA</option><option value="268">AZERBAIGIAN</option><option value="234">AZZORRE ISOLE</option><option value="160">BAHAMAS</option><option value="169">BAHRAIN</option><option value="130">BANGLADESH</option><option value="118">BARBADOS</option><option value="198">BELIZE</option><option value="158">BENIN</option><option value="207">BERMUDA</option><option value="97">BHUTAN</option><option value="264">BIELORUSSIA</option><option value="10">BOLIVIA</option><option value="274">BOSNIA E ERZEGOVINA</option><option value="98">BOTSWANA</option><option value="280">BOUVET ISOLA</option><option value="11">BRASILE</option><option value="125">BRUNEI DARUSSALAM</option><option value="12">BULGARIA</option><option value="142">BURKINA FASO</option><option value="25">BURUNDI</option><option value="135">CAMBOGIA</option><option value="119">CAMEROON</option><option value="139">CAMPIONE D'ITALIA</option><option value="100">CANARIE ISOLE</option><option value="188">CAPO VERDE</option><option value="256">CAROLINE ISOLE</option><option value="211">CAYMAN ISOLE</option><option value="143">CENTROAFRICANA (REPUBBLICA)</option><option value="246">CEUTA</option><option value="230">CHAFARINAS</option><option value="255">CHAGOS ISOLE</option><option value="282">CHRISTMAS ISOLA</option><option value="144">CIAD</option><option value="15">CILE</option><option value="101">CIPRO</option><option value="223">CLIPPERTON</option><option value="281">COCOS  KEELING ISOLA</option><option value="17">COLOMBIA</option><option value="176">COMOROS ISOLE</option><option value="145">CONGO</option><option value="18">CONGO R. DEM.</option><option value="237">COOK ISOLE</option><option value="74">COREA DEL NORD(REPUB DEMOCR POPOLARE)</option><option value="84">COREA DEL SUD (REPUBBLICA DI)</option><option value="146">COSTA D'AVORIO</option><option value="19">COSTA RICA</option><option value="20">CUBA</option><option value="192">DOMINICA</option><option value="63">DOMINICANA (REPUBBLICA)</option><option value="240">DUBAI</option><option value="24">ECUADOR</option><option value="23">EGITTO</option><option value="64">EL SALVADOR</option><option value="277">ERITREA</option><option value="26">ETIOPIA</option><option value="204">FAER OER ISOLE</option><option value="190">FALKLAND ISOLE</option><option value="161">FIJI</option><option value="27">FILIPPINE</option><option value="241">FUIJAYRAH</option><option value="157">GABON</option><option value="164">GAMBIA</option><option value="267">GEORGIA</option><option value="112">GHANA</option><option value="82">GIAMAICA</option><option value="102">GIBILTERRA</option><option value="113">GIBUTI</option><option value="122">GIORDANIA</option><option value="228">GOUGH</option><option value="156">GRENADA</option><option value="200">GROENLANDIA</option><option value="214">GUADALUPA</option><option value="154">GUAM</option><option value="33">GUATEMALA</option><option value="201">GUERNSEY C.I.</option><option value="123">GUIANA FRANCESE</option><option value="137">GUINEA</option><option value="185">GUINEA BISSAU</option><option value="167">GUINEA EQUATORIALE</option><option value="159">GUYANA</option><option value="34">HAITI</option><option value="284">HEARD E MCDONALD ISOLE</option><option value="35">HONDURAS</option><option value="103">HONG KONG</option><option value="114">INDIA</option><option value="129">INDONESIA</option><option value="39">IRAN (REPUBBLICA ISLAMICA DI)</option><option value="38">IRAQ</option><option value="41">ISLANDA</option><option value="252">ISOLE AMERICANE DEL PACIFICO</option><option value="182">ISRAELE</option><option value="202">JERSEY C.I.</option><option value="269">KAZAKISTAN</option><option value="116">KENYA</option><option value="194">KIRIBATI</option><option value="291">KOSOVO</option><option value="126">KUWAIT</option><option value="270">KYRGYZSTAN</option><option value="136">LAOS (REP DEMOCRATICA POP)</option><option value="89">LESOTHO</option><option value="95">LIBANO</option><option value="44">LIBERIA</option><option value="45">LIBIA</option><option value="90">LIECHTENSTEIN</option><option value="59">MACAO</option><option value="278">MACEDONIA</option><option value="104">MADAGASCAR</option><option value="235">MADEIRA</option><option value="56">MALAWI</option><option value="106">MALAYSIA</option><option value="127">MALDIVE</option><option value="149">MALI</option><option value="203">MAN ISOLA</option><option value="219">MARIANNE SETTENTRIONALI ISOLE</option><option value="107">MAROCCO</option><option value="217">MARSHALL ISOLE</option><option value="213">MARTINICA</option><option value="141">MAURITANIA</option><option value="128">MAURITIUS ISOLE</option><option value="226">MAYOTTE</option><option value="231">MELILLA</option><option value="46">MESSICO</option><option value="215">MICRONESIA (STATI FEDERATI DI)</option><option value="177">MIDWAY ISOLE</option><option value="265">MOLDAVIA (REPUBBLICA DI)</option><option value="110">MONGOLIA</option><option value="290">MONTENEGRO</option><option value="208">MONTSERRAT</option><option value="134">MOZAMBICO</option><option value="83">MYANMAR</option><option value="206">NAMIBIA</option><option value="109">NAURU</option><option value="115">NEPAL</option><option value="47">NICARAGUA</option><option value="150">NIGER</option><option value="117">NIGERIA</option><option value="205">NIUE</option><option value="285">NORFOLK ISOLE</option><option value="253">NUOVA CALEDONIA</option><option value="49">NUOVA ZELANDA</option><option value="163">OMAN</option><option value="799">PAESI NON CLASSIFICATI</option><option value="36">PAKISTAN</option><option value="216">PALAU</option><option value="279">PALESTINA, TERRITORI AUTONOMI</option><option value="51">PANAMA</option><option value="186">PAPUA NUOVA GUINEA</option><option value="52">PARAGUAY</option><option value="232">PENON DE ALHUCEMAS</option><option value="233">PENON DE VELEZ DE LA GOMERA</option><option value="53">PERU'</option><option value="175">PITCAIRN</option><option value="225">POLINESIA FRANCESE</option><option value="220">PORTORICO</option><option value="91">PRINCIPATO DI MONACO</option><option value="168">QATAR</option><option value="242">RAS AL KHAIMAH</option><option value="247">REUNION</option><option value="61">ROMANIA</option><option value="262">RUSSIA (FEDERAZIONE DI)</option><option value="151">RWANDA</option><option value="166">SAHARA OCCIDENTALE</option><option value="293">SAINT BARTHELEMY</option><option value="222">SAINT MARTIN SETTENTRIONALE</option><option value="248">SAINT-PIERRE E MIQUELON</option><option value="191">SALOMONE ISOLE</option><option value="131">SAMOA</option><option value="37">SAN MARINO</option><option value="254">SANT'ELENA</option><option value="199">SANTA LUCIA</option><option value="93">SANTA SEDE (CITTA' DEL VATICANO)</option><option value="187">SAO TOME E PRINCIPE</option><option value="152">SENEGAL</option><option value="289">SERBIA</option><option value="189">SEYCHELLES</option><option value="243">SHARJAH</option><option value="153">SIERRA LEONE</option><option value="147">SINGAPORE</option><option value="65">SIRIA</option><option value="276">SLOVACCHIA</option><option value="66">SOMALIA</option><option value="85">SRI LANKA</option><option value="196">ST. VINCENTE E LE GRENADINE</option><option value="195">ST.KITTS E NEVIS</option><option value="283">SUD GEORGIA E SUD SANDWICH</option><option value="78">SUDAFRICANA (REPUBBLICA)</option><option value="70">SUDAN</option><option value="124">SURINAME</option><option value="286">SVALBARD E JAN MAYEN ISOLE</option><option value="138">SWAZILAND</option><option value="272">TAGIKISTAN</option><option value="22">TAIWAN</option><option value="57">TANZANIA (REPUBBLICA DI)</option><option value="183">TERRITORI FRANCESI DEL SUD</option><option value="245">TERRITORIO BRITANNICO OCEANO INDIANO</option><option value="72">THAILANDIA</option><option value="287">TIMOR-LESTE</option><option value="155">TOGO</option><option value="236">TOKELAU</option><option value="162">TONGA</option><option value="120">TRINIDAD E TOBAGO</option><option value="229">TRISTAN DA CUNHA</option><option value="75">TUNISIA</option><option value="76">TURCHIA</option><option value="273">TURKMENISTAN</option><option value="210">TURKS E CAICOS ISOLE</option><option value="193">TUVALU</option><option value="263">UCRAINA</option><option value="132">UGANDA</option><option value="244">UMM AL QAIWAIN</option><option value="581">UNIDROIT-INTL INST FOR UNIF PRIVATE LAW</option><option value="80">URUGUAY</option><option value="271">UZBEKISTAN</option><option value="121">VANUATU</option><option value="81">VENEZUELA</option><option value="221">VERGINI AMERICANE ISOLE</option><option value="249">VERGINI BRITANNICHE ISOLE</option><option value="62">VIETNAM</option><option value="178">WAKE ISOLE</option><option value="218">WALLIS E FUTUNA ISOLE</option><option value="582">WTO-WORLD TRADE ORGANIZATION</option><option value="42">YEMEN</option><option value="58">ZAMBIA</option><option value="73">ZIMBABWE</option></select></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura" height="20">
<td class="col-1" colspan="4" style="width: 15%; text-align: left;">
<hr style="margin:0;">
<input name="disposizione_default" onclick="selectUseCase();" type="radio" value="2">
							Sezione incassi RIBA
						</td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura" height="20">
<td class="col-1" colspan="4" style="width: 15%; text-align: left;"><input name="disposizione_default" onclick="selectUseCase();" type="radio" value="6">
							Sezione incassi RID
						
<hr style="margin:0;">
</td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati creditore estero
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Ragione Sociale<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%; min-width: 110px;"><input maxlength="24" name="nome_creditore_uno" onchange="checkValue('nome_creditore_uno','','TRUE','STRING', '1', '24','Ragione Sociale')" style="width:260px" type="text" value="" readonly="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupcreditorisearch()
					{
						// Se è un rid e il conto di accredito e' intestato al Creditore non viene abilitata la funzionalita'
						// di ricerca
						if (ccAlCreditore)
						{
							alert("Impossibile effettuare la ricerca di un creditore estero; e\' stata selezionata la funzionalita\' di conto corrente di accredito intestato al creditore!");
						}
						else
						{
							if (accounteerCombo.value =="")
								alert("Selezionare l'Intestatario!");
							else
							{
								if(document.insertelcosribes.nome_creditore_uno.value==""){
									gotoservlet("lookupcreditoriesterosearch?intestatario="+accounteerCombo.value,"CercaNominativo");
								}
								else
									gotoservlet("lookupcreditoriesterosearch?nome_creditore_uno="+document.insertelcosribes.nome_creditore_uno.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
					}
				
			</script></td><script>
			var signInput = document.forms.insertelcosribes.nome_creditore_uno;
		</script><td class="col-3" style="width: 12%; text-align: left;">Codice creditore</td><td class="col-4" style="width: 33%; text-align: left; min-width: 110px;"><input maxlength="16" name="codice_creditore_app" onchange="checkValue('codice_creditore_app','','FALSE','STRING', '1', '24','Codice creditore')" size="20" type="text" value="" readonly="" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupcreditorisearchWithCod()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					function lookupcreditorisearchWithCod()
					{
						// Se è un rid e il conto di accredito e' intestato al Creditore non viene abilitata la funzionalita'
						// di ricerca
						
						if (isRid && ccAlCreditore)
						{
							alert("Impossibile effettuare la ricerca di un creditore estero; e\' stata selezionata la funzionalita\' di conto corrente di accredito intestato al creditore!");
						}
						else
						{
							if (accounteerCombo.value =="")
								alert("Selezionare l'Intestatario!");
							else
							{
								if(document.insertelcosribes.codice_creditore_app.value==""){
									gotoservlet("lookupcreditoriesterosearch?intestatario="+accounteerCombo.value,"CercaNominativo");
								}
								else
									gotoservlet("lookupcreditoriesterosearch?codice_creditore_app="+document.insertelcosribes.codice_creditore_app.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
							}
						}
					}
				
			</script></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Codice creditore assegnato dal cedente</td><td class="col-2" style="width: 50%;"><input maxlength="24" name="nome_creditore_due" onchange="checkValue('nome_creditore_due','','FALSE','STRING', '1', '24','Codice creditore assegnato dal cedente')" style="width:260px" type="text" value="" readonly="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">Codice estero<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="9" name="codice_estero_beneficiario" onchange="checkValue('codice_estero_beneficiario','','TRUE','STRING', '1', '9','Codice estero')" onkeypress="return onlyNaturalNumbers(event);" onkeyup="return onlyNaturalNumbers(event);" type="text" value="" readonly="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Indirizzo<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="24" name="indirizzo_creditore" onchange="checkValue('indirizzo_creditore','','TRUE','STRING', '1', '24','Indirizzo')" style="width:260px" type="text" value="" readonly="" class="new-form-control"></td><script>
			indirizzoCreditoreInput = document.forms.insertelcosribes.indirizzo_creditore;
		</script><td class="col-3" style="width: 12%; text-align: left;">CAP</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cap_creditore" onchange="checkValue('cap_creditore','','FALSE','STRING', '1', '5', 'CAP');" size="5" type="text" value="" readonly="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Località<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="12" name="localita_creditore" onchange="checkValue('localita_creditore','','TRUE','STRING', '1', '12', 'Località');" style="width:260px" type="text" value="" readonly="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">Prov.</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="provincia_creditore" onchange="checkValue('provincia_creditore','','FALSE','STRING', '2', '2', 'Prov.');" size="2" type="text" value="" readonly="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">
			Paese<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><script>
				var paeseArray = new Array();
				function statoObject(id, label)
				{
					this.id = id;
					this.label = label;
				}
			</script><select name="paese_creditore_uic" onchange="checkValue('paese_creditore_uic','','TRUE','STRING', '1', '30', 'Paese creditore'); copiaPaese(this);" onkeyup=" copiaPaese(this);" style="width:260px" class="new-form-control"><script>
								id = "";
							
						label = "";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value=""></option><script>
								id = "8";
							
						label = "AUSTRIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="8">AUSTRIA</option><script>
								id = "9";
							
						label = "BELGIO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="9">BELGIO</option><script>
								id = "275";
							
						label = "CECA (REPUBBLICA)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="275">CECA (REPUBBLICA)</option><script>
								id = "261";
							
						label = "CROAZIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="261">CROAZIA</option><script>
								id = "21";
							
						label = "DANIMARCA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="21">DANIMARCA</option><script>
								id = "257";
							
						label = "ESTONIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="257">ESTONIA</option><script>
								id = "28";
							
						label = "FINLANDIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="28">FINLANDIA</option><script>
								id = "29";
							
						label = "FRANCIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="29">FRANCIA</option><script>
								id = "94";
							
						label = "GERMANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="94">GERMANIA</option><script>
								id = "32";
							
						label = "GRECIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="32">GRECIA</option><script>
								id = "40";
							
						label = "IRLANDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="40">IRLANDA</option><script>
								id = "86";
							
						label = "ITALIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="86">ITALIA</option><script>
								id = "258";
							
						label = "LETTONIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="258">LETTONIA</option><script>
								id = "259";
							
						label = "LITUANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="259">LITUANIA</option><script>
								id = "92";
							
						label = "LUSSEMBURGO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="92">LUSSEMBURGO</option><script>
								id = "105";
							
						label = "MALTA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="105">MALTA</option><script>
								id = "48";
							
						label = "NORVEGIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="48">NORVEGIA</option><script>
								id = "50";
							
						label = "PAESI BASSI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="50">PAESI BASSI</option><script>
								id = "54";
							
						label = "POLONIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="54">POLONIA</option><script>
								id = "55";
							
						label = "PORTOGALLO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="55">PORTOGALLO</option><script>
								id = "31";
							
						label = "REGNO UNITO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="31">REGNO UNITO</option><script>
								id = "260";
							
						label = "SLOVENIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="260">SLOVENIA</option><script>
								id = "67";
							
						label = "SPAGNA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="67">SPAGNA</option><script>
								id = "68";
							
						label = "SVEZIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="68">SVEZIA</option><script>
								id = "77";
							
						label = "UNGHERIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="77">UNGHERIA</option><script>
								id = "13";
							
						label = "CANADA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="13">CANADA</option><script>
								id = "16";
							
						label = "CINA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="16">CINA</option><script>
								id = "88";
							
						label = "GIAPPONE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="88">GIAPPONE</option><script>
								id = "69";
							
						label = "STATI UNITI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="69">STATI UNITI</option><script>
								id = "71";
							
						label = "SVIZZERA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="71">SVIZZERA</option><script>
								id = "238";
							
						label = "ABU DHABI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="238">ABU DHABI</option><script>
								id = "2";
							
						label = "AFGHANISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="2">AFGHANISTAN</option><script>
								id = "239";
							
						label = "AJMAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="239">AJMAN</option><script>
								id = "292";
							
						label = "ALAND ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="292">ALAND ISOLE</option><script>
								id = "87";
							
						label = "ALBANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="87">ALBANIA</option><script>
								id = "3";
							
						label = "ALGERIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="3">ALGERIA</option><script>
								id = "148";
							
						label = "AMERICAN SAMOA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="148">AMERICAN SAMOA</option><script>
								id = "4";
							
						label = "ANDORRA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="4">ANDORRA</option><script>
								id = "133";
							
						label = "ANGOLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="133">ANGOLA</option><script>
								id = "209";
							
						label = "ANGUILLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="209">ANGUILLA</option><script>
								id = "180";
							
						label = "ANTARTIDE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="180">ANTARTIDE</option><script>
								id = "197";
							
						label = "ANTIGUA E BARBUDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="197">ANTIGUA E BARBUDA</option><script>
								id = "251";
							
						label = "ANTILLE OLANDESI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="251">ANTILLE OLANDESI</option><script>
								id = "5";
							
						label = "ARABIA SAUDITA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="5">ARABIA SAUDITA</option><script>
								id = "6";
							
						label = "ARGENTINA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="6">ARGENTINA</option><script>
								id = "266";
							
						label = "ARMENIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="266">ARMENIA</option><script>
								id = "212";
							
						label = "ARUBA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="212">ARUBA</option><script>
								id = "227";
							
						label = "ASCENSION";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="227">ASCENSION</option><script>
								id = "7";
							
						label = "AUSTRALIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="7">AUSTRALIA</option><script>
								id = "268";
							
						label = "AZERBAIGIAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="268">AZERBAIGIAN</option><script>
								id = "234";
							
						label = "AZZORRE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="234">AZZORRE ISOLE</option><script>
								id = "160";
							
						label = "BAHAMAS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="160">BAHAMAS</option><script>
								id = "169";
							
						label = "BAHRAIN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="169">BAHRAIN</option><script>
								id = "130";
							
						label = "BANGLADESH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="130">BANGLADESH</option><script>
								id = "118";
							
						label = "BARBADOS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="118">BARBADOS</option><script>
								id = "198";
							
						label = "BELIZE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="198">BELIZE</option><script>
								id = "158";
							
						label = "BENIN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="158">BENIN</option><script>
								id = "207";
							
						label = "BERMUDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="207">BERMUDA</option><script>
								id = "97";
							
						label = "BHUTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="97">BHUTAN</option><script>
								id = "264";
							
						label = "BIELORUSSIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="264">BIELORUSSIA</option><script>
								id = "10";
							
						label = "BOLIVIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="10">BOLIVIA</option><script>
								id = "274";
							
						label = "BOSNIA E ERZEGOVINA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="274">BOSNIA E ERZEGOVINA</option><script>
								id = "98";
							
						label = "BOTSWANA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="98">BOTSWANA</option><script>
								id = "280";
							
						label = "BOUVET ISOLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="280">BOUVET ISOLA</option><script>
								id = "11";
							
						label = "BRASILE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="11">BRASILE</option><script>
								id = "125";
							
						label = "BRUNEI DARUSSALAM";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="125">BRUNEI DARUSSALAM</option><script>
								id = "12";
							
						label = "BULGARIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="12">BULGARIA</option><script>
								id = "142";
							
						label = "BURKINA FASO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="142">BURKINA FASO</option><script>
								id = "25";
							
						label = "BURUNDI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="25">BURUNDI</option><script>
								id = "135";
							
						label = "CAMBOGIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="135">CAMBOGIA</option><script>
								id = "119";
							
						label = "CAMEROON";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="119">CAMEROON</option><script>
								id = "139";
							
						label = "CAMPIONE D'ITALIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="139">CAMPIONE D'ITALIA</option><script>
								id = "100";
							
						label = "CANARIE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="100">CANARIE ISOLE</option><script>
								id = "188";
							
						label = "CAPO VERDE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="188">CAPO VERDE</option><script>
								id = "256";
							
						label = "CAROLINE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="256">CAROLINE ISOLE</option><script>
								id = "211";
							
						label = "CAYMAN ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="211">CAYMAN ISOLE</option><script>
								id = "143";
							
						label = "CENTROAFRICANA (REPUBBLICA)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="143">CENTROAFRICANA (REPUBBLICA)</option><script>
								id = "246";
							
						label = "CEUTA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="246">CEUTA</option><script>
								id = "230";
							
						label = "CHAFARINAS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="230">CHAFARINAS</option><script>
								id = "255";
							
						label = "CHAGOS ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="255">CHAGOS ISOLE</option><script>
								id = "282";
							
						label = "CHRISTMAS ISOLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="282">CHRISTMAS ISOLA</option><script>
								id = "144";
							
						label = "CIAD";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="144">CIAD</option><script>
								id = "15";
							
						label = "CILE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="15">CILE</option><script>
								id = "101";
							
						label = "CIPRO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="101">CIPRO</option><script>
								id = "223";
							
						label = "CLIPPERTON";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="223">CLIPPERTON</option><script>
								id = "281";
							
						label = "COCOS  KEELING ISOLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="281">COCOS  KEELING ISOLA</option><script>
								id = "17";
							
						label = "COLOMBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="17">COLOMBIA</option><script>
								id = "176";
							
						label = "COMOROS ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="176">COMOROS ISOLE</option><script>
								id = "145";
							
						label = "CONGO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="145">CONGO</option><script>
								id = "18";
							
						label = "CONGO R. DEM.";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="18">CONGO R. DEM.</option><script>
								id = "237";
							
						label = "COOK ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="237">COOK ISOLE</option><script>
								id = "74";
							
						label = "COREA DEL NORD(REPUB DEMOCR POPOLARE)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="74">COREA DEL NORD(REPUB DEMOCR POPOLARE)</option><script>
								id = "84";
							
						label = "COREA DEL SUD (REPUBBLICA DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="84">COREA DEL SUD (REPUBBLICA DI)</option><script>
								id = "146";
							
						label = "COSTA D'AVORIO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="146">COSTA D'AVORIO</option><script>
								id = "19";
							
						label = "COSTA RICA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="19">COSTA RICA</option><script>
								id = "20";
							
						label = "CUBA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="20">CUBA</option><script>
								id = "192";
							
						label = "DOMINICA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="192">DOMINICA</option><script>
								id = "63";
							
						label = "DOMINICANA (REPUBBLICA)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="63">DOMINICANA (REPUBBLICA)</option><script>
								id = "240";
							
						label = "DUBAI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="240">DUBAI</option><script>
								id = "24";
							
						label = "ECUADOR";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="24">ECUADOR</option><script>
								id = "23";
							
						label = "EGITTO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="23">EGITTO</option><script>
								id = "64";
							
						label = "EL SALVADOR";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="64">EL SALVADOR</option><script>
								id = "277";
							
						label = "ERITREA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="277">ERITREA</option><script>
								id = "26";
							
						label = "ETIOPIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="26">ETIOPIA</option><script>
								id = "204";
							
						label = "FAER OER ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="204">FAER OER ISOLE</option><script>
								id = "190";
							
						label = "FALKLAND ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="190">FALKLAND ISOLE</option><script>
								id = "161";
							
						label = "FIJI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="161">FIJI</option><script>
								id = "27";
							
						label = "FILIPPINE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="27">FILIPPINE</option><script>
								id = "241";
							
						label = "FUIJAYRAH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="241">FUIJAYRAH</option><script>
								id = "157";
							
						label = "GABON";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="157">GABON</option><script>
								id = "164";
							
						label = "GAMBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="164">GAMBIA</option><script>
								id = "267";
							
						label = "GEORGIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="267">GEORGIA</option><script>
								id = "112";
							
						label = "GHANA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="112">GHANA</option><script>
								id = "82";
							
						label = "GIAMAICA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="82">GIAMAICA</option><script>
								id = "102";
							
						label = "GIBILTERRA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="102">GIBILTERRA</option><script>
								id = "113";
							
						label = "GIBUTI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="113">GIBUTI</option><script>
								id = "122";
							
						label = "GIORDANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="122">GIORDANIA</option><script>
								id = "228";
							
						label = "GOUGH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="228">GOUGH</option><script>
								id = "156";
							
						label = "GRENADA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="156">GRENADA</option><script>
								id = "200";
							
						label = "GROENLANDIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="200">GROENLANDIA</option><script>
								id = "214";
							
						label = "GUADALUPA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="214">GUADALUPA</option><script>
								id = "154";
							
						label = "GUAM";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="154">GUAM</option><script>
								id = "33";
							
						label = "GUATEMALA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="33">GUATEMALA</option><script>
								id = "201";
							
						label = "GUERNSEY C.I.";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="201">GUERNSEY C.I.</option><script>
								id = "123";
							
						label = "GUIANA FRANCESE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="123">GUIANA FRANCESE</option><script>
								id = "137";
							
						label = "GUINEA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="137">GUINEA</option><script>
								id = "185";
							
						label = "GUINEA BISSAU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="185">GUINEA BISSAU</option><script>
								id = "167";
							
						label = "GUINEA EQUATORIALE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="167">GUINEA EQUATORIALE</option><script>
								id = "159";
							
						label = "GUYANA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="159">GUYANA</option><script>
								id = "34";
							
						label = "HAITI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="34">HAITI</option><script>
								id = "284";
							
						label = "HEARD E MCDONALD ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="284">HEARD E MCDONALD ISOLE</option><script>
								id = "35";
							
						label = "HONDURAS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="35">HONDURAS</option><script>
								id = "103";
							
						label = "HONG KONG";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="103">HONG KONG</option><script>
								id = "114";
							
						label = "INDIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="114">INDIA</option><script>
								id = "129";
							
						label = "INDONESIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="129">INDONESIA</option><script>
								id = "39";
							
						label = "IRAN (REPUBBLICA ISLAMICA DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="39">IRAN (REPUBBLICA ISLAMICA DI)</option><script>
								id = "38";
							
						label = "IRAQ";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="38">IRAQ</option><script>
								id = "41";
							
						label = "ISLANDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="41">ISLANDA</option><script>
								id = "252";
							
						label = "ISOLE AMERICANE DEL PACIFICO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="252">ISOLE AMERICANE DEL PACIFICO</option><script>
								id = "182";
							
						label = "ISRAELE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="182">ISRAELE</option><script>
								id = "202";
							
						label = "JERSEY C.I.";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="202">JERSEY C.I.</option><script>
								id = "269";
							
						label = "KAZAKISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="269">KAZAKISTAN</option><script>
								id = "116";
							
						label = "KENYA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="116">KENYA</option><script>
								id = "194";
							
						label = "KIRIBATI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="194">KIRIBATI</option><script>
								id = "291";
							
						label = "KOSOVO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="291">KOSOVO</option><script>
								id = "126";
							
						label = "KUWAIT";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="126">KUWAIT</option><script>
								id = "270";
							
						label = "KYRGYZSTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="270">KYRGYZSTAN</option><script>
								id = "136";
							
						label = "LAOS (REP DEMOCRATICA POP)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="136">LAOS (REP DEMOCRATICA POP)</option><script>
								id = "89";
							
						label = "LESOTHO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="89">LESOTHO</option><script>
								id = "95";
							
						label = "LIBANO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="95">LIBANO</option><script>
								id = "44";
							
						label = "LIBERIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="44">LIBERIA</option><script>
								id = "45";
							
						label = "LIBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="45">LIBIA</option><script>
								id = "90";
							
						label = "LIECHTENSTEIN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="90">LIECHTENSTEIN</option><script>
								id = "59";
							
						label = "MACAO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="59">MACAO</option><script>
								id = "278";
							
						label = "MACEDONIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="278">MACEDONIA</option><script>
								id = "104";
							
						label = "MADAGASCAR";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="104">MADAGASCAR</option><script>
								id = "235";
							
						label = "MADEIRA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="235">MADEIRA</option><script>
								id = "56";
							
						label = "MALAWI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="56">MALAWI</option><script>
								id = "106";
							
						label = "MALAYSIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="106">MALAYSIA</option><script>
								id = "127";
							
						label = "MALDIVE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="127">MALDIVE</option><script>
								id = "149";
							
						label = "MALI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="149">MALI</option><script>
								id = "203";
							
						label = "MAN ISOLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="203">MAN ISOLA</option><script>
								id = "219";
							
						label = "MARIANNE SETTENTRIONALI ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="219">MARIANNE SETTENTRIONALI ISOLE</option><script>
								id = "107";
							
						label = "MAROCCO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="107">MAROCCO</option><script>
								id = "217";
							
						label = "MARSHALL ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="217">MARSHALL ISOLE</option><script>
								id = "213";
							
						label = "MARTINICA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="213">MARTINICA</option><script>
								id = "141";
							
						label = "MAURITANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="141">MAURITANIA</option><script>
								id = "128";
							
						label = "MAURITIUS ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="128">MAURITIUS ISOLE</option><script>
								id = "226";
							
						label = "MAYOTTE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="226">MAYOTTE</option><script>
								id = "231";
							
						label = "MELILLA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="231">MELILLA</option><script>
								id = "46";
							
						label = "MESSICO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="46">MESSICO</option><script>
								id = "215";
							
						label = "MICRONESIA (STATI FEDERATI DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="215">MICRONESIA (STATI FEDERATI DI)</option><script>
								id = "177";
							
						label = "MIDWAY ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="177">MIDWAY ISOLE</option><script>
								id = "265";
							
						label = "MOLDAVIA (REPUBBLICA DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="265">MOLDAVIA (REPUBBLICA DI)</option><script>
								id = "110";
							
						label = "MONGOLIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="110">MONGOLIA</option><script>
								id = "290";
							
						label = "MONTENEGRO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="290">MONTENEGRO</option><script>
								id = "208";
							
						label = "MONTSERRAT";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="208">MONTSERRAT</option><script>
								id = "134";
							
						label = "MOZAMBICO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="134">MOZAMBICO</option><script>
								id = "83";
							
						label = "MYANMAR";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="83">MYANMAR</option><script>
								id = "206";
							
						label = "NAMIBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="206">NAMIBIA</option><script>
								id = "109";
							
						label = "NAURU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="109">NAURU</option><script>
								id = "115";
							
						label = "NEPAL";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="115">NEPAL</option><script>
								id = "47";
							
						label = "NICARAGUA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="47">NICARAGUA</option><script>
								id = "150";
							
						label = "NIGER";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="150">NIGER</option><script>
								id = "117";
							
						label = "NIGERIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="117">NIGERIA</option><script>
								id = "205";
							
						label = "NIUE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="205">NIUE</option><script>
								id = "285";
							
						label = "NORFOLK ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="285">NORFOLK ISOLE</option><script>
								id = "253";
							
						label = "NUOVA CALEDONIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="253">NUOVA CALEDONIA</option><script>
								id = "49";
							
						label = "NUOVA ZELANDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="49">NUOVA ZELANDA</option><script>
								id = "163";
							
						label = "OMAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="163">OMAN</option><script>
								id = "799";
							
						label = "PAESI NON CLASSIFICATI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="799">PAESI NON CLASSIFICATI</option><script>
								id = "36";
							
						label = "PAKISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="36">PAKISTAN</option><script>
								id = "216";
							
						label = "PALAU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="216">PALAU</option><script>
								id = "279";
							
						label = "PALESTINA, TERRITORI AUTONOMI";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="279">PALESTINA, TERRITORI AUTONOMI</option><script>
								id = "51";
							
						label = "PANAMA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="51">PANAMA</option><script>
								id = "186";
							
						label = "PAPUA NUOVA GUINEA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="186">PAPUA NUOVA GUINEA</option><script>
								id = "52";
							
						label = "PARAGUAY";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="52">PARAGUAY</option><script>
								id = "232";
							
						label = "PENON DE ALHUCEMAS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="232">PENON DE ALHUCEMAS</option><script>
								id = "233";
							
						label = "PENON DE VELEZ DE LA GOMERA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="233">PENON DE VELEZ DE LA GOMERA</option><script>
								id = "53";
							
						label = "PERU'";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="53">PERU'</option><script>
								id = "175";
							
						label = "PITCAIRN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="175">PITCAIRN</option><script>
								id = "225";
							
						label = "POLINESIA FRANCESE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="225">POLINESIA FRANCESE</option><script>
								id = "220";
							
						label = "PORTORICO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="220">PORTORICO</option><script>
								id = "91";
							
						label = "PRINCIPATO DI MONACO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="91">PRINCIPATO DI MONACO</option><script>
								id = "168";
							
						label = "QATAR";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="168">QATAR</option><script>
								id = "242";
							
						label = "RAS AL KHAIMAH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="242">RAS AL KHAIMAH</option><script>
								id = "247";
							
						label = "REUNION";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="247">REUNION</option><script>
								id = "61";
							
						label = "ROMANIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="61">ROMANIA</option><script>
								id = "262";
							
						label = "RUSSIA (FEDERAZIONE DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="262">RUSSIA (FEDERAZIONE DI)</option><script>
								id = "151";
							
						label = "RWANDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="151">RWANDA</option><script>
								id = "166";
							
						label = "SAHARA OCCIDENTALE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="166">SAHARA OCCIDENTALE</option><script>
								id = "293";
							
						label = "SAINT BARTHELEMY";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="293">SAINT BARTHELEMY</option><script>
								id = "222";
							
						label = "SAINT MARTIN SETTENTRIONALE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="222">SAINT MARTIN SETTENTRIONALE</option><script>
								id = "248";
							
						label = "SAINT-PIERRE E MIQUELON";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="248">SAINT-PIERRE E MIQUELON</option><script>
								id = "191";
							
						label = "SALOMONE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="191">SALOMONE ISOLE</option><script>
								id = "131";
							
						label = "SAMOA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="131">SAMOA</option><script>
								id = "37";
							
						label = "SAN MARINO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="37">SAN MARINO</option><script>
								id = "254";
							
						label = "SANT'ELENA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="254">SANT'ELENA</option><script>
								id = "199";
							
						label = "SANTA LUCIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="199">SANTA LUCIA</option><script>
								id = "93";
							
						label = "SANTA SEDE (CITTA' DEL VATICANO)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="93">SANTA SEDE (CITTA' DEL VATICANO)</option><script>
								id = "187";
							
						label = "SAO TOME E PRINCIPE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="187">SAO TOME E PRINCIPE</option><script>
								id = "152";
							
						label = "SENEGAL";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="152">SENEGAL</option><script>
								id = "289";
							
						label = "SERBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="289">SERBIA</option><script>
								id = "189";
							
						label = "SEYCHELLES";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="189">SEYCHELLES</option><script>
								id = "243";
							
						label = "SHARJAH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="243">SHARJAH</option><script>
								id = "153";
							
						label = "SIERRA LEONE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="153">SIERRA LEONE</option><script>
								id = "147";
							
						label = "SINGAPORE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="147">SINGAPORE</option><script>
								id = "65";
							
						label = "SIRIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="65">SIRIA</option><script>
								id = "276";
							
						label = "SLOVACCHIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="276">SLOVACCHIA</option><script>
								id = "66";
							
						label = "SOMALIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="66">SOMALIA</option><script>
								id = "85";
							
						label = "SRI LANKA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="85">SRI LANKA</option><script>
								id = "196";
							
						label = "ST. VINCENTE E LE GRENADINE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="196">ST. VINCENTE E LE GRENADINE</option><script>
								id = "195";
							
						label = "ST.KITTS E NEVIS";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="195">ST.KITTS E NEVIS</option><script>
								id = "283";
							
						label = "SUD GEORGIA E SUD SANDWICH";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="283">SUD GEORGIA E SUD SANDWICH</option><script>
								id = "78";
							
						label = "SUDAFRICANA (REPUBBLICA)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="78">SUDAFRICANA (REPUBBLICA)</option><script>
								id = "70";
							
						label = "SUDAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="70">SUDAN</option><script>
								id = "124";
							
						label = "SURINAME";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="124">SURINAME</option><script>
								id = "286";
							
						label = "SVALBARD E JAN MAYEN ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="286">SVALBARD E JAN MAYEN ISOLE</option><script>
								id = "138";
							
						label = "SWAZILAND";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="138">SWAZILAND</option><script>
								id = "272";
							
						label = "TAGIKISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="272">TAGIKISTAN</option><script>
								id = "22";
							
						label = "TAIWAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="22">TAIWAN</option><script>
								id = "57";
							
						label = "TANZANIA (REPUBBLICA DI)";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="57">TANZANIA (REPUBBLICA DI)</option><script>
								id = "183";
							
						label = "TERRITORI FRANCESI DEL SUD";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="183">TERRITORI FRANCESI DEL SUD</option><script>
								id = "245";
							
						label = "TERRITORIO BRITANNICO OCEANO INDIANO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="245">TERRITORIO BRITANNICO OCEANO INDIANO</option><script>
								id = "72";
							
						label = "THAILANDIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="72">THAILANDIA</option><script>
								id = "287";
							
						label = "TIMOR-LESTE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="287">TIMOR-LESTE</option><script>
								id = "155";
							
						label = "TOGO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="155">TOGO</option><script>
								id = "236";
							
						label = "TOKELAU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="236">TOKELAU</option><script>
								id = "162";
							
						label = "TONGA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="162">TONGA</option><script>
								id = "120";
							
						label = "TRINIDAD E TOBAGO";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="120">TRINIDAD E TOBAGO</option><script>
								id = "229";
							
						label = "TRISTAN DA CUNHA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="229">TRISTAN DA CUNHA</option><script>
								id = "75";
							
						label = "TUNISIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="75">TUNISIA</option><script>
								id = "76";
							
						label = "TURCHIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="76">TURCHIA</option><script>
								id = "273";
							
						label = "TURKMENISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="273">TURKMENISTAN</option><script>
								id = "210";
							
						label = "TURKS E CAICOS ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="210">TURKS E CAICOS ISOLE</option><script>
								id = "193";
							
						label = "TUVALU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="193">TUVALU</option><script>
								id = "263";
							
						label = "UCRAINA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="263">UCRAINA</option><script>
								id = "132";
							
						label = "UGANDA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="132">UGANDA</option><script>
								id = "244";
							
						label = "UMM AL QAIWAIN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="244">UMM AL QAIWAIN</option><script>
								id = "581";
							
						label = "UNIDROIT-INTL INST FOR UNIF PRIVATE LAW";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="581">UNIDROIT-INTL INST FOR UNIF PRIVATE LAW</option><script>
								id = "80";
							
						label = "URUGUAY";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="80">URUGUAY</option><script>
								id = "271";
							
						label = "UZBEKISTAN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="271">UZBEKISTAN</option><script>
								id = "121";
							
						label = "VANUATU";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="121">VANUATU</option><script>
								id = "81";
							
						label = "VENEZUELA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="81">VENEZUELA</option><script>
								id = "221";
							
						label = "VERGINI AMERICANE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="221">VERGINI AMERICANE ISOLE</option><script>
								id = "249";
							
						label = "VERGINI BRITANNICHE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="249">VERGINI BRITANNICHE ISOLE</option><script>
								id = "62";
							
						label = "VIETNAM";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="62">VIETNAM</option><script>
								id = "178";
							
						label = "WAKE ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="178">WAKE ISOLE</option><script>
								id = "218";
							
						label = "WALLIS E FUTUNA ISOLE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="218">WALLIS E FUTUNA ISOLE</option><script>
								id = "582";
							
						label = "WTO-WORLD TRADE ORGANIZATION";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="582">WTO-WORLD TRADE ORGANIZATION</option><script>
								id = "42";
							
						label = "YEMEN";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="42">YEMEN</option><script>
								id = "58";
							
						label = "ZAMBIA";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="58">ZAMBIA</option><script>
								id = "73";
							
						label = "ZIMBABWE";
						paeseArray[paeseArray.length] = new statoObject(id, label);
					</script><option value="73">ZIMBABWE</option></select></td><td class="col-3" style="width: 12%; text-align: left;">Autorizzazione creditore<span class="testoRedSmallBold" id="asterisco_firma_creditore" style="visibility: visible;">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="20" name="firma_emittente" onchange="checkValue('firma_emittente','',mandatory_firma_emittente,'STRING', '1', '20','Autorizzazione creditore')" type="text" value="" readonly="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" width="80" style="width: 15%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr class="rigaScura">
<td><span id="id_codice_azienda_ordinante1" style="display:none">SIA</span></td><td><span class="testoRedSmallBold" id="asterisco_codice_azienda_ordinante" style="display:none">*</span></td>
</tr>
</tbody></table>
</td><td class="col-2-sia-elcos" width="130" style="width: 40%; text-align: left;"><input id="id_codice_azienda_ordinante2" maxlength="5" name="codice_azienda_ordinante" onchange="checkValue('codice_azienda_ordinante','',mandatory_codice_azienda_ordinante,'STRING', '5', '5','SIA')" style="display:none" type="text" value="" readonly="" class="new-form-control"></td><td colspan="2"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1 oRight" style="width: 15%; text-align: left;"></td><td class="col-3-anagrafica-elcos" colspan="3" style="width: 25%; text-align: left;"><input checked="false" name="add_to_anagrafica" type="checkbox" value="" disabled="">
			Aggiorna dati anagrafica
        </td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="sottoTitoloTabella" height="20">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Debitore
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Ragione sociale
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%; min-width: 110px;"><script>
				var val =''+'';
			</script><input maxlength="60" name="nome_debitore_uno" onchange="checkValue('nome_debitore_uno','','TRUE','STRING', '1', '60','Ragione sociale')" style="width:260px" type="text" class="new-form-control"><a class="old-fieldSearch" href="javascript:lookupclientisearch()"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
				
					document.insertelcosribes.nome_debitore_uno.value = val;
					function lookupclientisearch()
					{
						if (accounteerCombo.value =="")
							alert("Selezionare l'Intestatario!");
						else
						{
							if(document.insertelcosribes.nome_debitore_uno.value==""){
								gotoservlet("lookupclientisearch?intestatario="+accounteerCombo.value,"CercaNominativo");
							}
							else
								gotoservlet("lookupclientisearch?ragione_sociale="+document.insertelcosribes.nome_debitore_uno.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					}
				
			</script></td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			Codice debitore
		</td><td class="col-4" style="width: 33%; text-align: left;"><input name="codice_cliente_anagrafica" onchange="checkValue('codice_cliente_anagrafica','','false','STRING', '1', '16','Codice debitore')" style="width:135px;" type="text" value="" class="new-form-control"><a href="javascript:lookupclientisearchWithCod()"><img alt="Cerca Codice Debitore" border="0" height="17" src="newstyle/img/cerca.gif" width="19"></a><script type="text/javascript">
			   
			   function lookupclientisearchWithCod()
			   {
					if (accounteerCombo.value =="")
					{
						alert("Selezionare l'Intestatario!");
					}
					else
					{
						if(document.insertelcosribes.codice_cliente_anagrafica.value=="")
						{
							gotoservlet("lookupclientisearch?intestatario="+accounteerCombo.value,"CercaNominativo");
						}
						else
						{
							gotoservlet("lookupclientisearch?codice_cliente="+document.insertelcosribes.codice_cliente_anagrafica.value+"&command=Cerca&intestatario="+accounteerCombo.value,"CercaNominativo");
						}
					 }
				 }
				 
			</script></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Codice Fiscale - P.IVA<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="16" name="codice_fiscale_debitore" onchange="document.insertelcosribes.codice_fiscale_debitore.value = document.insertelcosribes.codice_fiscale_debitore.value.toUpperCase(); checkValue('codice_fiscale_debitore','','TRUE','CF_PIVA', '11', '16','Codice Fiscale - P.IVA');" size="28" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			Codice cliente<span class="testoRedSmallBold" id="asterisco_codice_cliente_debitore" style="visibility: hidden;">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="16" name="codice_cliente_debitore" onchange="checkValue('codice_cliente_debitore','',mandatory_codice_cliente_debitore,'STRING', '1', '16','Codice cliente')" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Indirizzo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="30" name="indirizzo_debitore" onchange="checkValue('indirizzo_debitore','','TRUE','STRING', '0', '30','Indirizzo')" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			CAP<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="5" name="cap_debitore" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('cap_debitore','','TRUE','STRING', '0', '5','CAP')" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Località
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="22" name="localita_debitore" onchange="checkValue('localita_debitore','','TRUE','STRING', '1', '22','Località')" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">
			Prov.<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="2" name="sigla_provincia_debitore" onkeypress="return onlyAlpha(event)" onchange="checkValue('sigla_provincia_debitore','','TRUE','STRING', '2', '2','Prov.')" style="width:30px" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Paese<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><select maxlength="3" name="paese_debitore" style="width:260px" class="new-form-control"><option selected="true" value="086">Italia</option></select></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;"><input checked="true" name="abiIban" onclick="setAbiIban();" type="radio" value="0">
			ABI<span class="testoRedSmallBold" id="asterisco2" style="visibility: visible;">*</span></td><td class="col-2" style="width: 50%;">
<table class="old-inputForm">
<tbody><tr>
<td><input maxlength="5" name="codice_abi_domiciliataria" onchange="checkValue('codice_abi_domiciliataria','',mandatory_codice_abi_domiciliataria,'ABI_CAB', '5', '5','ABI');" onkeypress="return onlyNaturalNumbers(event);" type="text" value="" class="new-form-control"></td><td style="min-width: 110px;"><a class="old-fieldSearch" href="javascript:lookupagency();"><img src="./newstyle/images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20"></a><script type="text/javascript">
							
							function lookupagency()
							{
								if(document.insertelcosribes.codice_abi_domiciliataria.value=="")
									gotoservlet("lookupagency","CercaAgenzia");
								else
									gotoservlet("lookupagency?cod-abi="+document.insertelcosribes.codice_abi_domiciliataria.value+"&command=Cerca","CercaAgenzia");
							}
							
						</script></td>
</tr>
</tbody></table>
</td><td align="left" class="col-3" style="width: 12%; text-align: left;">
			CAB<span class="testoRedSmallBold" id="asterisco1" style="visibility: visible;">*</span></td><td class="col-4" style="width: 33%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td><input maxlength="5" name="cab_domiciliataria" onchange="checkValue('cab_domiciliataria','',mandatory_cab_domiciliataria,'ABI_CAB', '1', '5','CAB')" onkeypress="return onlyNaturalNumbers(event);" type="text" value="" class="new-form-control"></td><td class="oRight"><a href="javascript:verificaSportello();"><img alt="Verifica" border="0" class="new-verifica" src="./newstyle/img/verifica.gif" style="margin-left:10px"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td align="left" class="col-1" style="width: 15%; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conto</td><td class="col-2" style="width: 50%;"><input maxlength="12" name="conto_corrente_debitore" onchange="checkValue('conto_corrente_debitore','','FALSE','ACCOUNT', '1', '12','Conto');" style="width:120px" type="text" value="" class="new-form-control"></td><td align="left" class="col-3" style="width: 12%; text-align: left;">CIN</td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="1" name="cifra_controllo" onchange="checkValue('cifra_controllo','','FALSE','', '1', '2','CIN');" size="1" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;"><input name="abiIban" onclick="setAbiIban();" type="radio" value="1">IBAN<span class="testoRedSmallBold" id="asterisco3" style="visibility: hidden;">*</span></td><td class="col-3" colspan="3" style="width: 12%; text-align: left;">
<table class="old-inputForm">
<tbody><tr>
<td><input maxlength="34" name="iban_debitore" onchange="document.insertelcosribes.iban_debitore.value = document.insertelcosribes.iban_debitore.value.toUpperCase();" style="width:220px" type="text" value="" readonly="" class="new-form-control">&nbsp;</td><td align="left"><a class="old-fieldHelp" href="#" onclick="popHelp('./html/help/CoordinateConto/CoordinateConto.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=400',534,400);"><img src="./newstyle/images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Descrizione Banca-Sportello<span class="testoRedSmallBold">*</span></td><td class="col-2" colspan="3" style="width: 50%;"><input maxlength="50" name="banca_sportello_domiciliataria" onchange="checkValue('banca_sportello_domiciliataria','','TRUE','', '1', '50','Descrizione Banca-Sportello');" style="width:332px;" type="text" value="" class="new-form-control"></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1 oRight" style="width: 15%; text-align: left;"></td><td class="col-2" colspan="3" style="width: 50%;"><input checked="false" name="add_to_anagrafica_2" type="checkbox" value="">
																					Aggiorna dati anagrafica
																				</td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="sottoTitoloTabella">
<td class="old-sectionTitle" colspan="4"><h3 class="new-titleSection">
																				Dati Elcos / Ribes
																			</h3></td>
</tr>
<tr>
<td colspan="4"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Importo
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="9" name="importo" onkeypress="return onlyRealNumbers(event)" onchange="checkValue('importo','','TRUE','REAL', '', '','Importo')" style="width:200px" type="text" value="" class="new-form-control">&nbsp;
		</td><td class="col-3" style="width: 12%; text-align: left;">
			Div
			<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="" name="codice_divisa" readonly="true" size="4" type="text" value="EUR" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Data creazione
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td><input class="datepicker dataCreazYBW new-form-control hasDatepicker" maxlength="10" name="data_creazione" onkeypress="return onlyDate(event)" onchange="checkValue('data_creazione','','TRUE','DATE', '', '10','Data creazione');" size="12" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1570711815352"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_creazione','insertelcosribes','1');" onclick="$('.datepicker.dataCreazYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a><script>
						$(function(){
						$('.datepicker').datepicker();
						})
						</script></td>
</tr>
</tbody></table>
</td><td class="col-3" style="width: 12%; text-align: left;">
			Data scadenza<span class="testoRedSmallBold">*</span></td><td class="col-4" style="width: 33%; text-align: left;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm">
<tbody><tr>
<td><input class="datepicker datascadYBW new-form-control hasDatepicker" maxlength="10" name="data_scadenza" onkeypress="return onlyDate(event)" onchange="checkValue('data_scadenza','','TRUE','DATE', '', '10','Data scadenza');" size="12" title="Formato data gg/mm/aaaa" type="text" value="" id="dp1570711815353"></td><td><a class="old-fieldCalendar" href="javascript:showHideFla('data_scadenza','insertelcosribes','2');" onclick="$('.datepicker.datascadYBW').datepicker('show');"><img src="./newstyle/images/calendar.png" alt="Apri calendario" border="0" height="20" width="20"></a></td>
</tr>
</tbody></table>
</td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Descrizione Incasso
			<span class="testoRedSmallBold">*</span></td><td class="col-2" style="width: 50%;"><input maxlength="40" name="descrizione_incasso_uno" onchange="checkValue('descrizione_incasso_uno','','TRUE','STRING', '1', '40','Descrizione Incasso');" style="width:260px" type="text" value="" class="new-form-control">&nbsp;
		</td><td class="col-3" style="width: 12%; text-align: left;">Località SWIFT<span class="testoRedSmallBold" id="asterisco_localita_swift" style="visibility: hidden;">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="22" name="localita_swift" onchange="checkValue('localita_swift', '', mandatory_localita_swift,'', '1', '22','Località SWIFT');" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">
			Numero ricevuta
		</td><td class="col-2" style="width: 50%;"><input maxlength="10" name="numero_ricevuta" onkeypress="return onlyNaturalNumbers(event)" onchange="checkValue('numero_ricevuta','','FALSE','STRING', '1', '10','Numero ricevuta')" style="width:260px" type="text" value="" class="new-form-control"></td><td class="col-3" style="width: 12%; text-align: left;">Riferimento cedente<span class="testoRedSmallBold" id="asterisco_riferimento_cedente" style="visibility: hidden;">*</span></td><td class="col-4" style="width: 33%; text-align: left;"><input maxlength="16" name="riferimento_cedente" onchange="checkValue('riferimento_cedente','',mandatory_riferimento_cedente,'STRING', '1', '16','Riferimento cedente')" type="text" value="" class="new-form-control"></td>
</tr>
<tr class="rigaScura">
<td class="col-1" style="width: 15%; text-align: left;">Circuito d'incasso</td><td class="col-2" style="width: 50%;"><select name="circuito_incasso" style="width:260px" class="new-form-control"><option value=""></option><option value="1">Ri.Ba.</option><option value="0">Conferme d'ordine</option></select></td><td class="col-3" style="width: 12%; text-align: left;">Esito pagato</td><td class="col-4" style="width: 33%; text-align: left;"><select name="richiesta_esito" style="width:120px" class="new-form-control"><option value=""></option><option value="1">Si richiede esito di pagamento</option><option value="2">Non si richiede esito di pagamento</option></select></td>
</tr>
<tr class="rigaScura" id="tr_tipo_codice" style="display:none">
<td class="col-1" style="width: 15%; text-align: left;">Tipo codice individuale<span class="testoRedSmallBold">*</span></td><td class="col-3" colspan="3" style="width: 12%; text-align: left;"><select name="tipo_codice" size="1" style="width:135px" class="new-form-control"><option value="1">1 - utenza</option><option value="2">2 - matricola</option><option value="3">3 - codice fiscale</option><option value="4">4 - codice cliente</option><option value="5">5 - codice fornitore</option><option value="6">6 - portafoglio commerciale</option><option value="9">9 - altri</option></select></td>
</tr>
<tr class="rigaScura">
<td colspan="4">
<table align="center" class="old-inputForm" width="100%">
<tbody><tr>
<input name="TIPO" type="hidden" value="207"><input name="banca" type="hidden"><td align="center" class="old-buttons" height="30">
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
</div><div class="new-buttons"><input class="btn" onclick="return doItBefore('Inserisci');" style="cursor:Hand" type="submit" value="Inserisci"><input class="btn" onclick="return doItBefore('Annulla');" style="cursor:Hand" type="submit" value="Annulla"><input class="btn" name="command" type="hidden" value="Inserisci"></div>
</div>
</form>
</td>
</tr>
</tbody></table>
<script>
					document.insertelcosribes.add_to_anagrafica.checked=false;
					document.insertelcosribes.add_to_anagrafica_2.checked=false;
					if (hiddenCampiOrdinante)
						document.insertelcosribes.command.value = 'modifica_distinta';
					else
						fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, accounteerCombo, true, true);
					
					
							document.insertelcosribes.data_creazione.value = parent.topframe.getDATA_ODIERNA();
							if (accounteerCombo.length==2)
								onChangeIntestatario();
						
					
					setAbiIban();
					
					// =================== modifica ================ //
					</script></td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTesto.js"></script><div class="divFooter"><div class="row footer"><div class="container" style="padding: 0px 15px;"><div class="col-xs-4"><div class="assistenza clearfix"><h4>Assistenza Clienti</h4><div class="clearfix"><a href="#" class="ico-assistenza">&nbsp;</a><div>Numero verde:&nbsp;<strong>800.607.227</strong><br>Dall'estero:&nbsp;<strong>+39 02.43371097</strong></div></div><div class="clearfix"><a href="#" class="ico-gestore">&nbsp;</a><div>Per qualsiasi altra esigenza è a tua disposizione<br>il <strong>Gestore</strong> presso la tua filiale di riferimento</div></div></div></div><div class="col-xs-4"></div><div class="col-md-4"><div class="footer-logo"> <span>Banco Popolare</span> </div></div><div class="col-xs-12 margin-top10 txt_center disclaimer">© 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright</div></div></div></div></td>
</tr>
</tbody></table>


<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>