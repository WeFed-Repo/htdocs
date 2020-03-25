<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<!-- ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<script type="text/javascript">
			//Esempio di setting di alcuni errori
			errori = false;
			function esempioErrori()
			{
				if (errori)
				{
					//parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_2.php";
					//openPopOverLayer('procedi', 'floating');
					unsetError('staticInputmail');
					unsetError('staticInputcell');
					return 0;
				}
				setError('intestatario2','Controlla');
				setError('secondoNome','Controlla');
				setError('staticInputcell','Controlla');
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<form>
			<div class="aolAcc expanded">
				<div class="aolAccTop">
					<a class="aolAccTitle" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;" title="Espandi">
						<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet</span>
						<span href="javascript:;" class="accButt" ></span>
						<span class="errortext"></span>
					</a>
				</div>
				<div class="aolAccContent">
				<!-- BLOCCO PER 1 INTESTATARIO -->
				<!-- Informazioni personali -->
					<div class="aolblock">
						
						<h3>Informazioni personali</h3>
						<div class="aolblockwrapper">
						<fieldset>
							<span class="label">Stato di nascita*</span>
							<select>
								<option selected value="1">ITALIA</option>
								<option value="2">STATI UNITI</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Cittadinanza*</span>
							<select>
								<option selected value="1">ITALIA</option>
								<option value="2">STATI UNITI</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Provincia di nascita*</span>
							<input type="text"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Comune di nascita*</span>
							<input type="text"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<!--RESIDENZA FISCALE -->
						<fieldset class="tolltipclick">
							<span class="label">
								<span>Paese di residenza fiscale*</span>
									<span class="closed">
											<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="cognome"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
											<span class="uniqTooltipInnerHTML">
													<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, e cio&egrave; 183 giorni all'anno:<ol><li>sono iscritte all'anagrafe della popolazione residente</li><li>hanno nel territorio dello Stato il proprio domicilio  o residenza ai sensi del Codice Civile.</li></ol><br>Basta il verificarsi di una sola di queste condizioni.</p>
											</span></span>
									</span>
							</span>
							<span class="output">Italia</span>
						</fieldset>
						<!--
						<fieldset class="tolltipclick">
							<a href="javascript:;" onclick="$(this).hide();$('#secondaResidenza').show()" class="linkOpenField">Hai una seconda residenza fiscale?</a>
							<span id="secondaResidenza" style="display:none">
								<span class="label">
									<span>Paese di residenza fiscale*</span>
									<span class="closed">
											<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="cognome"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
											<span class="uniqTooltipInnerHTML">
													<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, e cio&egrave; 183 giorni all'anno:<ol><li>sono iscritte all'anagrafe della popolazione residente</li><li>hanno nel territorio dello Stato il proprio domicilio  o residenza ai sensi del Codice Civile.</li></ol><br>Basta il verificarsi di una sola di queste condizioni.</p>
											</span></span>
									</span>
								</span>
								<select name="residenzaFiscale_int1" onchange="if($('#residenzaFiscale_int1 option:selected').text().indexOf('STATI UNITI')>= 0) {$('#tin1').show();$('#TIN_int1').focus()}" id="residenzaFiscale_int1"><option value="">seleziona</option><option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option></select>
							</span>
						</fieldset>
						<script>
							$(function (){
							 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
								$("#TIN_int1").mask("__-_______", {completed: function(){$("#TIN_int1").val($("#TIN_int1").val().toUpperCase())} });
							})
						</script>
						<fieldset id='tin1' style="display:none">
							<span class="label">Taxpayer Identification Number (Tin)</span>
							<input type="text" name="TIN_int1" maxlength="10" value="" id="TIN_int1" style="text-transform:uppercase">
							<span class="errortext">Compila</span>
						</fieldset>
						<br class="clear">
						-->
						<br class="clear">
			<h3>Altri dati FATCA e CRS</h3>
			<!--fatca-->
			<div class="fatcaintestatario" id="fatca1">
				<div class="fatcaFieldWrapper">
					<div class="fatcaField">
						<fieldset class="tolltipclick">
							<span class="label">
								<span><span class="labelCounter">Secondo</span> paese di residenza fiscale</span>
								<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="fatcaTooltipA_id1"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
												<span class="uniqTooltipInnerHTML">
												<p>lorem ispum dolor sit lorem ipeum dolor sit</p>
												</span>
										</span>
								</span>
							</span>
							<select name="optresidenzaFiscale2_int1" id="selectfactaA_int1_id1">
							<option value="">seleziona</option>
								
									<option value="238|ABU DHABI|X">ABU DHABI</option>
								
									<option value="2|AFGHANISTAN|X">AFGHANISTAN</option>
								
									<option value="239|AJMAN|X">AJMAN</option>
								
									<option value="87|ALBANIA|X">ALBANIA</option>
								
									<option value="3|ALGERIA|X">ALGERIA</option>
								
									<option value="4|ANDORRA|X">ANDORRA</option>
								
									<option value="133|ANGOLA|X">ANGOLA</option>
								
									<option value="209|ANGUILLA|X">ANGUILLA</option>
								
									<option value="180|ANTARTIDE|X">ANTARTIDE</option>
								
									<option value="197|ANTIGUA E BARBUDA|X">ANTIGUA E BARBUDA</option>
								
									<option value="5|ARABIA SAUDITA|X">ARABIA SAUDITA</option>
								
									<option value="6|ARGENTINA|S">ARGENTINA</option>
								
									<option value="266|ARMENIA|X">ARMENIA</option>
								
									<option value="212|ARUBA|X">ARUBA</option>
								
									<option value="7|AUSTRALIA|S">AUSTRALIA</option>
								
									<option value="8|AUSTRIA|S">AUSTRIA</option>
								
									<option value="268|AZERBAIGIAN|X">AZERBAIGIAN</option>
								
									<option value="160|BAHAMAS|X">BAHAMAS</option>
								
									<option value="169|BAHRAIN|X">BAHRAIN</option>
								
									<option value="130|BANGLADESH|X">BANGLADESH</option>
								
									<option value="118|BARBADOS|X">BARBADOS</option>
								
									<option value="9|BELGIO|S">BELGIO</option>
								
									<option value="198|BELIZE|X">BELIZE</option>
								
									<option value="158|BENIN|X">BENIN</option>
								
									<option value="207|BERMUDA|X">BERMUDA</option>
								
									<option value="97|BHUTAN|X">BHUTAN</option>
								
									<option value="264|BIELORUSSIA|X">BIELORUSSIA</option>
								
									<option value="10|BOLIVIA|X">BOLIVIA</option>
								
									<option value="295|BONAIRE, SAINT ESTATIUS, SABA|X">BONAIRE, SAINT ESTATIUS, SABA</option>
								
									<option value="274|BOSNIA ED ERZEGOVINA|X">BOSNIA ED ERZEGOVINA</option>
								
									<option value="98|BOTSWANA|X">BOTSWANA</option>
								
									<option value="11|BRASILE|S">BRASILE</option>
								
									<option value="125|BRUNEI|X">BRUNEI</option>
								
									<option value="12|BULGARIA|S">BULGARIA</option>
								
									<option value="142|BURKINA FASO|X">BURKINA FASO</option>
								
									<option value="25|BURUNDI|X">BURUNDI</option>
								
									<option value="135|CAMBOGIA|X">CAMBOGIA</option>
								
									<option value="119|CAMERUN|X">CAMERUN</option>
								
									<option value="13|CANADA|S">CANADA</option>
								
									<option value="188|CAPO VERDE|X">CAPO VERDE</option>
								
									<option value="144|CIAD|X">CIAD</option>
								
									<option value="15|CILE|X">CILE</option>
								
									<option value="16|CINA|S">CINA</option>
								
									<option value="101|CIPRO|S">CIPRO</option>
								
									<option value="93|CITTA DEL VATICANO|X">CITTA DEL VATICANO</option>
								
									<option value="17|COLOMBIA|X">COLOMBIA</option>
								
									<option value="176|COMOROS|X">COMOROS</option>
								
									<option value="145|CONGO|X">CONGO</option>
								
									<option value="74|COREA DEL NORD|X">COREA DEL NORD</option>
								
									<option value="84|COREA DEL SUD|S">COREA DEL SUD</option>
								
									<option value="146|COSTA DI AVORIO|X">COSTA DI AVORIO</option>
								
									<option value="19|COSTA RICA|S">COSTA RICA</option>
								
									<option value="261|CROAZIA|S">CROAZIA</option>
								
									<option value="20|CUBA|X">CUBA</option>
								
									<option value="296|CURAÇAO|X">CURAÇAO</option>
								
									<option value="21|DANIMARCA|S">DANIMARCA</option>
								
									<option value="192|DOMINICA|X">DOMINICA</option>
								
									<option value="24|ECUADOR|X">ECUADOR</option>
								
									<option value="23|EGITTO|X">EGITTO</option>
								
									<option value="64|EL SALVADOR|X">EL SALVADOR</option>
								
									<option value="240|EMIRATI ARABI UNITI|X">EMIRATI ARABI UNITI</option>
								
									<option value="277|ERITREA|X">ERITREA</option>
								
									<option value="257|ESTONIA|S">ESTONIA</option>
								
									<option value="26|ETIOPIA|X">ETIOPIA</option>
								
									<option value="161|FIGI|X">FIGI</option>
								
									<option value="27|FILIPPINE|X">FILIPPINE</option>
								
									<option value="28|FINLANDIA|S">FINLANDIA</option>
								
									<option value="29|FRANCIA|S">FRANCIA</option>
								
									<option value="241|FUIJAYRAH|X">FUIJAYRAH</option>
								
									<option value="157|GABON|X">GABON</option>
								
									<option value="164|GAMBIA|X">GAMBIA</option>
								
									<option value="267|GEORGIA|X">GEORGIA</option>
								
									<option value="94|GERMANIA|S">GERMANIA</option>
								
									<option value="112|GHANA|X">GHANA</option>
								
									<option value="82|GIAMAICA|X">GIAMAICA</option>
								
									<option value="88|GIAPPONE|S">GIAPPONE</option>
								
									<option value="102|GIBILTERRA|X">GIBILTERRA</option>
								
									<option value="113|GIBUTI|X">GIBUTI</option>
								
									<option value="122|GIORDANIA|X">GIORDANIA</option>
								
									<option value="32|GRECIA|S">GRECIA</option>
								
									<option value="156|GRENADA|X">GRENADA</option>
								
									<option value="200|GROENLANDIA|X">GROENLANDIA</option>
								
									<option value="214|GUADALUPA|X">GUADALUPA</option>
								
									<option value="154|GUAM|X">GUAM</option>
								
									<option value="33|GUATEMALA|X">GUATEMALA</option>
								
									<option value="201|GUERNSEY|X">GUERNSEY</option>
								
									<option value="123|GUIANA FRANCESE|X">GUIANA FRANCESE</option>
								
									<option value="137|GUINEA|X">GUINEA</option>
								
									<option value="167|GUINEA EQUATORIALE|X">GUINEA EQUATORIALE</option>
								
									<option value="185|GUINEA-BISSAU|X">GUINEA-BISSAU</option>
								
									<option value="159|GUYANA|X">GUYANA</option>
								
									<option value="34|HAITI|X">HAITI</option>
								
									<option value="35|HONDURAS|X">HONDURAS</option>
								
									<option value="103|HONG KONG|X">HONG KONG</option>
								
									<option value="114|INDIA|S">INDIA</option>
								
									<option value="129|INDONESIA|X">INDONESIA</option>
								
									<option value="39|IRAN|X">IRAN</option>
								
									<option value="38|IRAQ|X">IRAQ</option>
								
									<option value="40|IRLANDA|S">IRLANDA</option>
								
									<option value="41|ISLANDA|S">ISLANDA</option>
								
									<option value="286|ISLOE SVALBARD E JAN MAYEN|X">ISLOE SVALBARD E JAN MAYEN</option>
								
									<option value="280|ISOLA BOUVET|X">ISOLA BOUVET</option>
								
									<option value="282|ISOLA CHRISTMAS|X">ISOLA CHRISTMAS</option>
								
									<option value="281|ISOLA COCOS  KEELING|X">ISOLA COCOS  KEELING</option>
								
									<option value="203|ISOLA DI MAN|X">ISOLA DI MAN</option>
								
									<option value="292|ISOLE ALAND|X">ISOLE ALAND</option>
								
									<option value="252|ISOLE AMERICANE DEL PACIFICO|X">ISOLE AMERICANE DEL PACIFICO</option>
								
									<option value="211|ISOLE CAYMAN|N">ISOLE CAYMAN</option>
								
									<option value="237|ISOLE COOK|X">ISOLE COOK</option>
								
									<option value="190|ISOLE FALKLAND|X">ISOLE FALKLAND</option>
								
									<option value="204|ISOLE FAROE|X">ISOLE FAROE</option>
								
									<option value="284|ISOLE HEARD E MCDONALD|X">ISOLE HEARD E MCDONALD</option>
								
									<option value="219|ISOLE MARIANNE SETTENTRIONALI|X">ISOLE MARIANNE SETTENTRIONALI</option>
								
									<option value="217|ISOLE MARSHALL|X">ISOLE MARSHALL</option>
								
									<option value="285|ISOLE NORFOLK|X">ISOLE NORFOLK</option>
								
									<option value="191|ISOLE SALOMONE|X">ISOLE SALOMONE</option>
								
									<option value="210|ISOLE TURKS E CAICOS|X">ISOLE TURKS E CAICOS</option>
								
									<option value="221|ISOLE VERGINI AMERICANE|X">ISOLE VERGINI AMERICANE</option>
								
									<option value="249|ISOLE VERGINI BRITANNICHE|X">ISOLE VERGINI BRITANNICHE</option>
								
									<option value="182|ISRAELE|X">ISRAELE</option>
								
									<option value="202|JERSEY|X">JERSEY</option>
								
									<option value="269|KAZAKISTAN|X">KAZAKISTAN</option>
								
									<option value="116|KENYA|X">KENYA</option>
								
									<option value="194|KIRIBATI|X">KIRIBATI</option>
								
									<option value="291|KOSOVO|X">KOSOVO</option>
								
									<option value="126|KUWAIT|X">KUWAIT</option>
								
									<option value="270|KYRGYZSTAN|X">KYRGYZSTAN</option>
								
									<option value="136|LAOS|X">LAOS</option>
								
									<option value="89|LESOTHO|X">LESOTHO</option>
								
									<option value="258|LETTONIA|S">LETTONIA</option>
								
									<option value="95|LIBANO|X">LIBANO</option>
								
									<option value="44|LIBERIA|X">LIBERIA</option>
								
									<option value="45|LIBIA|X">LIBIA</option>
								
									<option value="90|LIECHTENSTEIN|S">LIECHTENSTEIN</option>
								
									<option value="259|LITUANIA|S">LITUANIA</option>
								
									<option value="92|LUSSEMBURGO|S">LUSSEMBURGO</option>
								
									<option value="59|MACAO|X">MACAO</option>
								
									<option value="278|MACEDONIA|X">MACEDONIA</option>
								
									<option value="104|MADAGASCAR|X">MADAGASCAR</option>
								
									<option value="56|MALAWI|X">MALAWI</option>
								
									<option value="127|MALDIVE|X">MALDIVE</option>
								
									<option value="106|MALESIA|S">MALESIA</option>
								
									<option value="149|MALI|X">MALI</option>
								
									<option value="105|MALTA|S">MALTA</option>
								
									<option value="107|MAROCCO|X">MAROCCO</option>
								
									<option value="213|MARTINICA|X">MARTINICA</option>
								
									<option value="141|MAURITANIA|X">MAURITANIA</option>
								
									<option value="128|MAURITIUS|X">MAURITIUS</option>
								
									<option value="226|MAYOTTE|X">MAYOTTE</option>
								
									<option value="46|MESSICO|S">MESSICO</option>
								
									<option value="215|MICRONESIA|X">MICRONESIA</option>
								
									<option value="265|MOLDAVIA|X">MOLDAVIA</option>
								
									<option value="91|MONACO|X">MONACO</option>
								
									<option value="110|MONGOLIA|X">MONGOLIA</option>
								
									<option value="290|MONTENEGRO|X">MONTENEGRO</option>
								
									<option value="208|MONTSERRAT|X">MONTSERRAT</option>
								
									<option value="134|MOZAMBICO|X">MOZAMBICO</option>
								
									<option value="83|MYANMAR|X">MYANMAR</option>
								
									<option value="206|NAMIBIA|X">NAMIBIA</option>
								
									<option value="109|NARAU|X">NARAU</option>
								
									<option value="115|NEPAL|X">NEPAL</option>
								
									<option value="47|NICARAGUA|X">NICARAGUA</option>
								
									<option value="150|NIGER|X">NIGER</option>
								
									<option value="117|NIGERIA|X">NIGERIA</option>
								
									<option value="205|NIUE|X">NIUE</option>
								
									<option value="48|NORVEGIA|S">NORVEGIA</option>
								
									<option value="253|NUOVA CALEDONIA|X">NUOVA CALEDONIA</option>
								
									<option value="49|NUOVA ZELANDA|S">NUOVA ZELANDA</option>
								
									<option value="163|OMAN|X">OMAN</option>
								
									<option value="50|PAESI BASSI|S">PAESI BASSI</option>
								
									<option value="36|PAKISTAN|X">PAKISTAN</option>
								
									<option value="216|PALAU|X">PALAU</option>
								
									<option value="279|PALESTINA|X">PALESTINA</option>
								
									<option value="51|PANAMA|X">PANAMA</option>
								
									<option value="186|PAPUA NUOVA GUINEA|X">PAPUA NUOVA GUINEA</option>
								
									<option value="52|PARAGUAY|X">PARAGUAY</option>
								
									<option value="53|PERU|X">PERU</option>
								
									<option value="175|PITCAIRN|X">PITCAIRN</option>
								
									<option value="225|POLINESIA FRANCESE|X">POLINESIA FRANCESE</option>
								
									<option value="54|POLONIA|S">POLONIA</option>
								
									<option value="55|PORTOGALLO|S">PORTOGALLO</option>
								
									<option value="220|PORTORICO|X">PORTORICO</option>
								
									<option value="168|QATAR|X">QATAR</option>
								
									<option value="242|RAS AL KHAIMAH|X">RAS AL KHAIMAH</option>
								
									<option value="31|REGNO UNITO|S">REGNO UNITO</option>
								
									<option value="18|REP. DEMOCRATICA DEL CONGO|X">REP. DEMOCRATICA DEL CONGO</option>
								
									<option value="143|REPPUBBLICA CENTROAFRICANA|X">REPPUBBLICA CENTROAFRICANA</option>
								
									<option value="275|REPUBBLICA CECA|S">REPUBBLICA CECA</option>
								
									<option value="63|REPUBBLICA DOMINICANA|X">REPUBBLICA DOMINICANA</option>
								
									<option value="247|REUNION|X">REUNION</option>
								
									<option value="61|ROMANIA|S">ROMANIA</option>
								
									<option value="151|RUANDA|X">RUANDA</option>
								
									<option value="262|RUSSIA|X">RUSSIA</option>
								
									<option value="166|SAHARA OCCIDENTALE|X">SAHARA OCCIDENTALE</option>
								
									<option value="293|SAINT BARTHELEMY|X">SAINT BARTHELEMY</option>
								
									<option value="195|SAINT KITTS E NEVIS|X">SAINT KITTS E NEVIS</option>
								
									<option value="199|SAINT LUCIA|X">SAINT LUCIA</option>
								
									<option value="222|SAINT MARTIN (FRENCH PART)|X">SAINT MARTIN (FRENCH PART)</option>
								
									<option value="248|SAINT PIERRE E MIQUELON|X">SAINT PIERRE E MIQUELON</option>
								
									<option value="196|SAINT VINCENT E GRENADINE|X">SAINT VINCENT E GRENADINE</option>
								
									<option value="131|SAMOA|X">SAMOA</option>
								
									<option value="148|SAMOA AMERICANA|X">SAMOA AMERICANA</option>
								
									<option value="37|SAN MARINO|X">SAN MARINO</option>
								
									<option value="254|SANTA ELENA|X">SANTA ELENA</option>
								
									<option value="187|SAO TOME E PRINCIPE|X">SAO TOME E PRINCIPE</option>
								
									<option value="152|SENEGAL|X">SENEGAL</option>
								
									<option value="289|SERBIA|X">SERBIA</option>
								
									<option value="189|SEYCHELLES|X">SEYCHELLES</option>
								
									<option value="243|SHARJAH|X">SHARJAH</option>
								
									<option value="153|SIERRA LEONE|X">SIERRA LEONE</option>
								
									<option value="147|SINGAPORE|S">SINGAPORE</option>
								
									<option value="294|SINT MAARTEN (DUTCH PART)|X">SINT MAARTEN (DUTCH PART)</option>
								
									<option value="65|SIRIA|X">SIRIA</option>
								
									<option value="276|SLOVACCHIA|S">SLOVACCHIA</option>
								
									<option value="260|SLOVENIA|S">SLOVENIA</option>
								
									<option value="66|SOMALIA|X">SOMALIA</option>
								
									<option value="67|SPAGNA|S">SPAGNA</option>
								
									<option value="85|SRI LANKA|X">SRI LANKA</option>
								
									<option value="69|STATI UNITI|S">STATI UNITI</option>
								
									<option value="78|SUD AFRICA|S">SUD AFRICA</option>
								
									<option value="283|SUD GEORGIA E SUD SANDWICH|X">SUD GEORGIA E SUD SANDWICH</option>
								
									<option value="297|SUD SUDAN|X">SUD SUDAN</option>
								
									<option value="70|SUDAN|X">SUDAN</option>
								
									<option value="124|SURINAME|X">SURINAME</option>
								
									<option value="68|SVEZIA|S">SVEZIA</option>
								
									<option value="71|SVIZZERA|S">SVIZZERA</option>
								
									<option value="138|SWAZILAND|X">SWAZILAND</option>
								
									<option value="272|TAGIKISTAN|X">TAGIKISTAN</option>
								
									<option value="72|TAILANDIA|X">TAILANDIA</option>
								
									<option value="22|TAIWAN|X">TAIWAN</option>
								
									<option value="57|TANZANIA|X">TANZANIA</option>
								
									<option value="183|TERRITORI FRANCESI DEL SUD|X">TERRITORI FRANCESI DEL SUD</option>
								
									<option value="245|TERRITORIO BRITANNICO OCEANO INDIANO|X">TERRITORIO BRITANNICO OCEANO INDIANO</option>
								
									<option value="287|TIMOR EST|X">TIMOR EST</option>
								
									<option value="155|TOGO|X">TOGO</option>
								
									<option value="236|TOKELAU|X">TOKELAU</option>
								
									<option value="162|TONGA|X">TONGA</option>
								
									<option value="120|TRINIDAD E TOBAGO|X">TRINIDAD E TOBAGO</option>
								
									<option value="75|TUNISIA|X">TUNISIA</option>
								
									<option value="76|TURCHIA|S">TURCHIA</option>
								
									<option value="273|TURKMENISTAN|X">TURKMENISTAN</option>
								
									<option value="193|TUVALU|X">TUVALU</option>
								
									<option value="263|UCRAINA|X">UCRAINA</option>
								
									<option value="132|UGANDA|X">UGANDA</option>
								
									<option value="244|UMM AL QAIWAIN|X">UMM AL QAIWAIN</option>
								
									<option value="77|UNGHERIA|S">UNGHERIA</option>
								
									<option value="80|URUGUAY|X">URUGUAY</option>
								
									<option value="271|UZBEKISTAN|X">UZBEKISTAN</option>
								
									<option value="121|VANUATU|X">VANUATU</option>
								
									<option value="81|VENEZUELA|X">VENEZUELA</option>
								
									<option value="62|VIETNAM|X">VIETNAM</option>
								
									<option value="218|WALLIS E FUGUNA|X">WALLIS E FUGUNA</option>
								
									<option value="42|YEMEN|X">YEMEN</option>
								
									<option value="58|ZAMBIA|X">ZAMBIA</option>
								
									<option value="73|ZIMBABWE|X">ZIMBABWE</option></select>
							       <input type="hidden" name="residenzaFiscale2_int1" id="residenzaFiscale2_int1" disabled="disabled" class="disabled">
							
							<!--<select name="residenzaFiscale2_int1" id="selectfactaA_id1">
									<option>-- seleziona --</option>
									<option value="238|AFG|N">AFGHANISTAN</option>
									<option value="237|ALG|S">ALGERIA</option>
									<option value="235|AND|X">ANDORRA</option>
									<option value="234|USA|S">STATI UNITI D'AMERICA</option>
							</select>-->
						</fieldset>
						<fieldset id='tinA_id1'>
							<span class="label">Taxpayer Identification Number (Tin)</span>
							<input class="tinField" type="text" name="TIN_intA_id1" maxlength="10" value="" id="TIN_intA_id1" style="text-transform:uppercase">
							<span class="errortext">Compila</span>
						</fieldset>
					</div>
				</div>
				<div class="fatcaFieldButton">
					<fieldset>
						<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
					</fieldset>
					<fieldset>
						<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>
					</fieldset>
				</div>
			</div>
			<script>
				$(function (){
					maskTin();
				})
			</script>

            <br class="clear">

						<fieldset class="lastrow">
							<span class="label">Titolo di studio*</span>
							<select>
								<option selected value="1">seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="lastrow">
							<span class="label">Come conosci Webank?*</span>
							<select>
								<option selected value="1">seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						</div>
						<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
					</div>
				<!-- fine Informazioni personali -->
				<!-- Documento identita' -->
					<div class="aolblock">
						<h3>Documento di identit&agrave;</h3>
						<div class="aolblockwrapper">
					
						<fieldset>
							<span class="label">Tipo di documento*</span>
							<select id="tipo_doc_int3" onchange="removeTooltip(click, $('#divDataEmissione3 .uniqTooltip'));emptyFields(this)">
								<option selected value="1">Carta d'identit&agrave;</option>
								<option value="2">Patente</option>
								<option value="3">Passaporto</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Tipo di documento*</span>
							<select id="tipo_doc_int2" onchange="removeTooltip(click, $('#divDataEmissione2 .uniqTooltip'));emptyFields(this)">
								<option selected value="1">Carta d'identit&agrave;</option>
								<option value="2">Patente</option>
								<option value="3">Passaporto</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="tolltipclick">
							<span class="label"><span>Numero*</span></span>
							
								<span class="closed">
										<span id="numero" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input id="numero_doc_int3" type="text" style="display:inline" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" onkeyup="removeTooltip(click, $('#numero'));restoreTooltipN(click,this,0)">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
					        
							
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="tolltipclick">
							<span class="label"><span>Data di rialscio*</span></span>
							<div id="divDataEmissione3" class="anchorTooltip">
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="gg_emissione_int3" onclick="removeOpt(this,'gg');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(click, $('#divDataEmissione3 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione3')" class="opzionale" value="gg" style="width:25px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
								</div>
								<span class="separator">/</span>
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio2" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input type="text" id="mm_emissione_int3" onclick="removeOpt(this,'mm');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(event, $('#divDataEmissione3 .uniqTooltip'));" class="opzionale" value="mm" style="width:25px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
									<span class="errortext">Lorem</span>
								</div>
								<span class="separator">/</span>
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio3" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="aa_emissione_int3" onclick="removeOpt(this,'aaaa');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(event, $('#divDataEmissione3 .uniqTooltip'));" class="opzionale" value="aaaa" style="width:50px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
									<span class="errortext">Lorem</span>
								</div>
							</div>
						</fieldset>
						<fieldset class="tolltipclick">
							<span class="label"><span>Data di rialscio*</span></span>
							<div id="divDataEmissione2" class="anchorTooltip">
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="gg_emissione_int2" onclick="removeOpt(this,'gg');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(click, $('#divDataEmissione2 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione2')" class="opzionale" value="gg" style="width:25px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
								</div>
								<span class="separator">/</span>
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio2" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input type="text" id="mm_emissione_int2" onclick="removeOpt(this,'mm');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(event, $('#divDataEmissione2 .uniqTooltip'));" class="opzionale" value="mm" style="width:25px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
									<span class="errortext">Lorem</span>
								</div>
								<span class="separator">/</span>
								<div class="fieldblock">
									<span class="closed">
										<span id="rilascio3" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="aa_emissione_int2" onclick="removeOpt(this,'aaaa');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(event, $('#divDataEmissione2 .uniqTooltip'));" class="opzionale" value="aaaa" style="width:50px">
												<span class="errortext">Lorem</span></span>
										<span class="uniqTooltipInnerHTML">
												<p></p>
										</span>
										</span>
									</span>
									<span class="errortext">Lorem</span>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<span class="label">Stato di rilascio*</span>
							<select>
								<option selected value="1">seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="lastrow">
							<span class="label">Provincia di rilascio*</span>
							<!-- ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<style>
								#aolcontainer form fieldset div.suggestions {position:absolute;z-index:99;border:solid 1px #999; background-color: #fff; padding: 3px}
								#aolcontainer form fieldset div.suggestions a {float:left; clear:left; width: 232px; padding: 3px; color: #666; text-decoration:none}
								#aolcontainer form fieldset div.suggestions a:hover {background-color: #dedede}
							</style>
							<input type="text" id="suggestionField" onclick = "$('suggestionSample').show(); addEvent(this,'blur',function(){setTimeout(function(){$('suggestionSample').fade({duration:0.3});},50);})" />
							<div class="suggestions" id="suggestionSample" style="display:none">
								<a href="javascript:;" onclick="$('suggestionField').focus()" ><strong>Lo</strong>rei</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()"><strong>Lo</strong>rem ipsum</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Gorex ipsuma</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Worey</a>
							</div>
							<!-- FINE ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="lastrow">
							<span class="label">Comune di rilascio*</span>
							<input type="text"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						</div>
						<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
					</div>
				<!-- fine Documento identita' -->
				<!-- Recapiti -->
					<div class="aolblock">
						<h3>Recapiti</h3>
						<div class="aolblockwrapper">
						<fieldset>
							<span class="label">Indirizzo di residenza*</span>
							<div class="fieldblock" style="margin-right:10px">
								<select style="width:70px">
									<option>Via</option>
									<option>lorem</option>
								</select>
								<span class="errortext">Lorem</span>
							</div>
							<div class="fieldblock">
								<input type="text" style="width: 166px;">
								<span class="errortext">Lorem</span>
							</div>
						</fieldset>
						<fieldset style="width:60px;">
							<span class="label">N*</span>
							<input type="text" style="width:40px;"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:185px;">
							<span class="label">Presso (facoltativo)</span>
							<input type="text" style="width: 178px;" placeholder="frase di esempio preimpostata"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:80px;">
							<span class="label">CAP (specifico)*</span>
							<input type="text" style="width:62px;"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:207px;">
							<span class="label">Provincia*</span>
							<select style="width: 60px;">
								<option>Lorem</option>
								<option></option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						
						<fieldset>
							<span class="label">Comune</span>
							<input type="text"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						
						<!--BANCARIZZA -->
							<fieldset>
							<span class="label">Indirizzo di residenza*</span>
							<div class="fieldblock" style="margin-right:10px">
								<select style="width:70px">
									<option>Via</option>
									<option>lorem</option>
								</select>
								<span class="errortext">Lorem</span>
							</div>
							<div class="fieldblock">
								<input type="text" style="width: 166px;">
								<span class="errortext">Lorem</span>
							</div>
						</fieldset>
						
						<!--<fieldset style="width:60px;">
							<span class="label">N*</span>
							<input type="text" style="width:40px;"/>
							<span class="errortext">Lorem</span>
						</fieldset>-->
						<fieldset>
							<span class="label">Presso (facoltativo)</span>
							<input type="text" placeholder="frase di esempio preimpostata"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<br class="clear" />
						<fieldset style="width:80px;">
							<span class="label">CAP (specifico)*</span>
							<input type="text" style="width:62px;"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:207px;">
							<span class="label">Provincia*</span>
							<select style="width: 60px;">
								<option>Lorem</option>
								<option></option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						
						<fieldset>
							<span class="label">Comune</span>
							<input type="text"/>
							<span class="errortext">Lorem</span>
						</fieldset>
						
						<!--<h2>ALternativa 1</h2>
						
						<fieldset>
							<span class="label">Provincia*</span>
							<select>
								<option>SO</option>
								<option>PV</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Comune</span>
							<select style="width:241px">
								<option>Piateda</option>
								<option>Marcignago</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Cap*</span>
							<select>
								<option>PV</option>
								<option>SO</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<br class="clear">-->
						<!--ALTERNATIVA 2 -->
						<h2>ALternativa 2</h2>
						<fieldset style="width:88px">
							<span class="label">Provincia*</span>
							<select style="width:50px">
								<option>SO</option>
								<option>PV</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:375px">
							<span class="label">Comune</span>
							<select style="width:338px">
								<option>Piateda</option>
								<option>Marcignago</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset style="width:65px">
							<span class="label">Cap*</span>
							<input style="width:65px" type="text">
							<span class="errortext">Lorem</span>
						</fieldset>
						<br class="clear">
						<!--<h2>ALternativa 3</h2>
						ALTERNATIVA 3
						<fieldset>
							<span class="label">Provincia*</span>
							<select style="width:70px">
								<option>SO</option>
								<option>PV</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Comune</span>
							<select style="width:241px">
								<option>Piateda</option>
								<option>Marcignago</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Cap*</span>
							<input type="text" style="width:62px;">
							<span class="errortext">Lorem</span>
						</fieldset>
						<br class="clear">-->
						
						
						<!-- BLOCC0 ESPANDIBILE -->
						<div class="expandable">
							<span class="label">Indirizzo di corrispondenza</span>
							<div class="expander">
								<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
								<span>Aggiungi indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata la documentazione contrattuale, per tutti gli intestatari del conto.</span>
							</div>
							<div class="expandableCont">
								<fieldset>
									<span class="label">Indirizzo di corrispondenza*</span>
									<div class="fieldblock">
										<select style="width:85px">
											<option>seleziona</option>
										</select>
										<span class="errortext">Lorem</span>
									</div>
									<div class="fieldblock">
										<input type="text" style="width: 151px;">
										<span class="errortext">Lorem</span>
									</div>
								</fieldset>
								<fieldset style="width: 100px;">
									<span class="label">N*</span>
									<input type="text" style="width:40px;"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset style="width:185px;">
									<span class="label">CAP(specifico)*</span>
									<input type="text" style="width: 136px;"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset>
									<span class="label">Provincia*</span>
									<input type="text"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset>
									<span class="label">Comune</span>
									<input type="text"/>
									<span class="errortext">Lorem</span>
								</fieldset>
							</div>
						</div>
						<!-- FINE BLOCCO ESPANDIBILE -->
						<!-- BLOCC0 ESPANDIBILE -->
						<div class="expandable">
							<span class="label">Indirizzo per il centro di allarme interbancaria</span>
							<div class="expander">
								<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
								<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
							</div>
							<div class="expandableCont">
								<fieldset>
									<span class="label">Indirizzo di allarme interbancaria*</span>
									<div class="fieldblock">
										<select style="width:85px">
											<option>seleziona</option>
										</select>
										<span class="errortext">Lorem</span>
									</div>
									<div class="fieldblock">
										<input type="text" style="width:151px;" />
										<span class="errortext">Lorem</span>
									</div>
								</fieldset>
								<fieldset style="width: 100px;">
									<span class="label">N*</span>
									<input type="text" style="width:40px;"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset style="width:185px;">
									<span class="label">CAP*</span>
									<input type="text" style="width: 138px;"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset>
									<span class="label">Provincia*</span>
									<input type="text"/>
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset>
									<span class="label">Comune</span>
									<input type="text"/>
									<span class="errortext">Lorem</span>
								</fieldset>
							</div>
						</div>
						<!-- FINE BLOCCO ESPANDIBILE -->
						<!-- BLOCC0 ESPANDIBILE -->
						<div class="expandable">
							<span class="label">Altri recapiti telefonici e indirizzi. (Facoltativi)</span>
							<div class="expander">
								<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
								<span>Puoi aggiungere il recapito telefonico di casa e ufficio e un altro indirizzo di corrispondenza se vivi all'estero</span>
							</div>
							<div class="expandableCont">
								<fieldset>
									<span class="label">Telefono casa</span>
									<div class="fieldblock">
										<input type="text" style="width:50px" />
										<span class="errortext">Lorem</span>
									</div>
									<div class="fieldblock">
										<input type="text" style="width:178px" />
										<span class="errortext">Lorem</span>
									</div>
								</fieldset>
								<fieldset>
									<span class="label">Telefono ufficio</span>
									<div class="fieldblock">
										<input type="text" style="width:50px">
										<span class="errortext">Lorem</span>
									</div>
									<div class="fieldblock">
										<input type="text" style="width:178px">
										<span class="errortext">Lorem</span>
									</div>
								</fieldset>
								<p class="minitext grey">Hai un alltro indirizzo anche estero? Inseriscilo qui (Non verr&agrave; usato dalla Banca ma solo a fini fiscali)</p>
								
								<fieldset>
									<span class="label">Stato</span>
									<select><option>seleziona</option><option>STATI UNITI</option></select>
								</fieldset>
								<fieldset style="width:185px">
									<span class="label">Indirizzo</span>
									<input type="text" style="width:175px">
								</fieldset>	
								<fieldset style="width:50px">	
									<span class="label">N.</span>
									<input type="text" style="width:52px">
								</fieldset>
								<fieldset style="width:100px" class="lastrow">
									<span class="label">Provincia*</span>
									<input type="text" style="width:88px">
								</fieldset>
								<fieldset style="width:336px">
									<span class="label">Comune</span>
									<input type="text" style="width:324px">
								</fieldset>
								<fieldset style="width:88px" class="lastrow">
									<span class="label">Cap*</span>
									<input type="text" style="width:88px">
								</fieldset>
							</div>
						</div>
						<!-- FINE BLOCCO ESPANDIBILE -->
						<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
						</div>
					</div>
				<!-- fine Recapiti -->
			
				
				<div class="aolblock">
			<h3>Tu e Webank</h3>
			<p class="minitext">Sei gi&agrave; cliente Webank?*</p>
			<p class="minitext grey">Dichiarando di essere gi&agrave; cliente Webank non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli nei nostri archivi.</p>
			
			<div id="divIdentificazione1" class="fieldblock">
				<fieldset class="withInput">
					<label style="margin-top:15px"><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').show()" value="SI" name="isbpmcliente_int1"><span class="optiontext">si</span></label>
				</fieldset>
				<fieldset style="width: 320px; margin-left: 10px; display: none;" id="numConto1">
					<div class="fieldblock">
						<span class="label">Numero conto Webank</span>
						<br class="clear">
						<input type="text" style="width: 150px" id="cccliente_int1" value="" maxlength="16" name="cccliente_int1">
						<span class="errortext">Compila</span>
					</div>
					
					<div style="margin:0 0 0 10px" class="fieldblock">
						<span class="label"><span>Numero agenzia</span>
							<span>
								<a class="imgTooltip" href="javascript:;" onmouseover="showGreenToolTip(this, 'Se hai aperto il conto entro marzo 2012, seleziona la voce &quot;00599&quot;; diversamente puoi verificare il numero di agenzia nella tua area privata in Sportello &amp;gt; Il mio conto &amp;gt; Coordinate bancarie.'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" aolblockindex="3">
									<img src="/img/img_or_tooltip_off.gif" alt="" style="margin-bottom:-2px">
								</a>
							</span>
						</span>
						<br class="clear">
						<select style="width:100px" id="agcliente_int1" name="agcliente_int1"><option value="">seleziona</option>
							<option value="00599">00599</option>
							<option value="00001">00001</option></select>
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
				<fieldset class="withInput lastrow">
					<label><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').hide();" value="NO" name="isbpmcliente_int1" ><span class="optiontext">no</span></label>
					<br class="clear">
				</fieldset>
				<span class="errortext">Seleziona</span>
			</div>
			<br class="clear">
		</div>
				
				
				
				<!-- FINE BLOCCO PER 1 SOLO INTESTATARIO -->
				</div>
			</div>
		
		
		
		
		
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" id="intestatario2" title="Espandi" onclick="switchExp(this,true);setViewElement('intestatario2');" href="javascript:;">
					<span class="titoloAcc">Intestatario 2</span>
					<span class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
				<!-- blocco anagrafici -->
				<div class="aolblock">
					<h3>Dati anagrafici intestatario</h3>
					<div class="aolblockwrapper">
					<fieldset class="tolltipclick">
						<span class="label"><span>Nome*</span>
						<span class="closed">
							<span id="nomesecondo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;.
									<ul class="flaglist">
										<li>asdasd</li>
										<li>asdada</li>
									</ul></p>
							</span></span>
					    </span>
						
						</span>
						<input type="text" id="secondoNome" onChange="reintestaBarra('secondoNome','secondoCognome','intestatario2', 'intestatario 2');"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset class="tolltipclick">
						<span class="label"><span>Cognome*</span>
						   <span class="closed">
							<span id="cognomesecondo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;.</p>
							</span></span>
					         </span>
						
						</span>
						
						<input type="text" id="secondoCognome" onChange="reintestaBarra('secondoNome','secondoCognome','intestatario2', 'intestatario 2');"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset style="width: 183px;">
						<span class="label">Data di nascita</span>
						<div class="fieldblock">
							<input type="text" style="width:25px;" value="gg" class="opzionale" onclick="removeOpt(this,'gg');"/>
							<span class="errortext">Lorem</span>
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" style="width:25px;" value="mm" class="opzionale" onclick="removeOpt(this,'mm');"/>
							<span class="errortext">Lorem</span>
						</div>
						<span class="separator">/</span>
						<div class="fieldblock">
							<input type="text" style="width:50px;" value="aaaa" class="opzionale" onclick="removeOpt(this,'aaaa');"/>
							<span class="errortext">Lorem</span>
						</div>
					</fieldset>
					<fieldset style="width:104px">
						<span class="label">Sesso*</span>
						<label style="width:30px;"><input type="radio" name="sesso" id="campoSesso"><span class="optiontext">M</span></label>
						<label style="width:30px;"><input type="radio" name="sesso" ><span class="optiontext">F</span></label>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Codice fiscale*</span>
						<input type="text" maxlength="16" id="codicefiscale" value=""/>
						<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale",16);</script>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset class="lastrow">
						<span class="label">Email*</span>
						<!--tooltip di compilazione mail -->
					    <div style="position:relative; float:left;">
							<span class="uniqTooltipText under static" id="staticTooltipmail">
							<span class="uniqTooltipPos"><input id="staticInputmail" type="text" name="staticInputmail" onkeypress="removeUniqTooltip(event, this)" onfocus="if(!($(this).parents('.error').length >0)) {createUniqTooltip(event, this, 'small', 5000)};" /></span>
							<span class="uniqTooltipInnerHTML">Indica un indirizzo email diverso da quello degli altri intestatari</span>
							</span>
						</div>
						<!--fine tooltip di compilazione mail -->
						<span class="errortext"></span>
					</fieldset>
					<fieldset class="lastrow">
						<span class="label">Numero cellulare*</span>
						<!--esempio di errore nella copilazione dovuta ad univocit&agrave; numero -->
							<div id="numeroErrorUni">
								<div class="fieldblock">
								<!--tooltip di compilazione N.cellulare -->
									 <div style="position:relative; float:left;">
										<span class="uniqTooltipText under static" id="staticTooltipcell">
										<span class="uniqTooltipPos"><input style="width:50px" id="staticInputcell" type="text" name="staticInputcell" onkeypress="removeUniqTooltip(event, this)" onfocus="if(!($(this).parents('.error').length >0)) {createUniqTooltip(event, this, 'small', 5000)};" /></span>
										<span class="uniqTooltipInnerHTML">Indica un numero di cellulare diverso da quello degli altri intestatari</span>
										</span>
									</div>
								<span class="errortext"></span>	
								<!--fine tooltip di compilazione N.cellulare -->
								</div>
								<div class="fieldblock">
									<input type="text" style="width:60px"/>
									
								</div>
								<div class="fieldblock">
									<select style="width:110px" id="selectOperatore"/>
										<option selected value="">operatore</option>
										<option value="1">Lorem ipsum</option>
									</select>
									
								</div>
								<span class="errortext">Lorem</span>
							<!--FINE esempio di errore nella copilazione dovuta ad univocit&agrave; numero -->
							</div>
					</fieldset>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
				<!-- fine blocco anagrafici -->
				<!-- Informazioni personali -->
				<div class="aolblock">
					<h3>Informazioni personali</h3>
					<div class="aolblockwrapper">
					<fieldset>
						<span class="label">Stato di nascita*</span>
						<select>
							<option selected value="1">ITALIA</option>
							<option value="2">STATI UNITI</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Cittadinanza*</span>
						<select>
							<option selected value="1">ITALIA</option>
							<option value="2">STATI UNITI</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Provincia di nascita*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Comune di nascita*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<!--fatca 2 intestatario-->
			<br class="clear">
			<div class="fatcaintestatario" id="fatca2">
				<div class="fatcaFieldWrapper">
					<div class="fatcaField">
						<fieldset class="tolltipclick">
							<span class="label">
								<span><span class="labelCounter">Secondo</span> paese di residenza fiscale</span>
								<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="fatcaTooltipBid1"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
												<span class="uniqTooltipInnerHTML">
												<p>lorem ispum dolor sit lorem ipeum dolor sit</p>
												</span>
										</span>
								</span>
							</span>
									<select name="residenzaFiscale2_int2" id="selectfactaA_int2_id1"><option value="">seleziona</option>
								
									<option value="238|ABU DHABI|X">ABU DHABI</option>
								
									<option value="2|AFGHANISTAN|X">AFGHANISTAN</option>
								
									<option value="239|AJMAN|X">AJMAN</option>
								
									<option value="87|ALBANIA|X">ALBANIA</option>
								
									<option value="3|ALGERIA|X">ALGERIA</option>
								
									<option value="4|ANDORRA|X">ANDORRA</option>
								
									<option value="133|ANGOLA|X">ANGOLA</option>
								
									<option value="209|ANGUILLA|X">ANGUILLA</option>
								
									<option value="180|ANTARTIDE|X">ANTARTIDE</option>
								
									<option value="197|ANTIGUA E BARBUDA|X">ANTIGUA E BARBUDA</option>
								
									<option value="5|ARABIA SAUDITA|X">ARABIA SAUDITA</option>
								
									<option value="6|ARGENTINA|S">ARGENTINA</option>
								
									<option value="266|ARMENIA|X">ARMENIA</option>
								
									<option value="212|ARUBA|X">ARUBA</option>
								
									<option value="7|AUSTRALIA|S">AUSTRALIA</option>
								
									<option value="8|AUSTRIA|S">AUSTRIA</option>
								
									<option value="268|AZERBAIGIAN|X">AZERBAIGIAN</option>
								
									<option value="160|BAHAMAS|X">BAHAMAS</option>
								
									<option value="169|BAHRAIN|X">BAHRAIN</option>
								
									<option value="130|BANGLADESH|X">BANGLADESH</option>
								
									<option value="118|BARBADOS|X">BARBADOS</option>
								
									<option value="9|BELGIO|S">BELGIO</option>
								
									<option value="198|BELIZE|X">BELIZE</option>
								
									<option value="158|BENIN|X">BENIN</option>
								
									<option value="207|BERMUDA|X">BERMUDA</option>
								
									<option value="97|BHUTAN|X">BHUTAN</option>
								
									<option value="264|BIELORUSSIA|X">BIELORUSSIA</option>
								
									<option value="10|BOLIVIA|X">BOLIVIA</option>
								
									<option value="295|BONAIRE, SAINT ESTATIUS, SABA|X">BONAIRE, SAINT ESTATIUS, SABA</option>
								
									<option value="274|BOSNIA ED ERZEGOVINA|X">BOSNIA ED ERZEGOVINA</option>
								
									<option value="98|BOTSWANA|X">BOTSWANA</option>
								
									<option value="11|BRASILE|S">BRASILE</option>
								
									<option value="125|BRUNEI|X">BRUNEI</option>
								
									<option value="12|BULGARIA|S">BULGARIA</option>
								
									<option value="142|BURKINA FASO|X">BURKINA FASO</option>
								
									<option value="25|BURUNDI|X">BURUNDI</option>
								
									<option value="135|CAMBOGIA|X">CAMBOGIA</option>
								
									<option value="119|CAMERUN|X">CAMERUN</option>
								
									<option value="13|CANADA|S">CANADA</option>
								
									<option value="188|CAPO VERDE|X">CAPO VERDE</option>
								
									<option value="144|CIAD|X">CIAD</option>
								
									<option value="15|CILE|X">CILE</option>
								
									<option value="16|CINA|S">CINA</option>
								
									<option value="101|CIPRO|S">CIPRO</option>
								
									<option value="93|CITTA DEL VATICANO|X">CITTA DEL VATICANO</option>
								
									<option value="17|COLOMBIA|X">COLOMBIA</option>
								
									<option value="176|COMOROS|X">COMOROS</option>
								
									<option value="145|CONGO|X">CONGO</option>
								
									<option value="74|COREA DEL NORD|X">COREA DEL NORD</option>
								
									<option value="84|COREA DEL SUD|S">COREA DEL SUD</option>
								
									<option value="146|COSTA DI AVORIO|X">COSTA DI AVORIO</option>
								
									<option value="19|COSTA RICA|S">COSTA RICA</option>
								
									<option value="261|CROAZIA|S">CROAZIA</option>
								
									<option value="20|CUBA|X">CUBA</option>
								
									<option value="296|CURAÇAO|X">CURAÇAO</option>
								
									<option value="21|DANIMARCA|S">DANIMARCA</option>
								
									<option value="192|DOMINICA|X">DOMINICA</option>
								
									<option value="24|ECUADOR|X">ECUADOR</option>
								
									<option value="23|EGITTO|X">EGITTO</option>
								
									<option value="64|EL SALVADOR|X">EL SALVADOR</option>
								
									<option value="240|EMIRATI ARABI UNITI|X">EMIRATI ARABI UNITI</option>
								
									<option value="277|ERITREA|X">ERITREA</option>
								
									<option value="257|ESTONIA|S">ESTONIA</option>
								
									<option value="26|ETIOPIA|X">ETIOPIA</option>
								
									<option value="161|FIGI|X">FIGI</option>
								
									<option value="27|FILIPPINE|X">FILIPPINE</option>
								
									<option value="28|FINLANDIA|S">FINLANDIA</option>
								
									<option value="29|FRANCIA|S">FRANCIA</option>
								
									<option value="241|FUIJAYRAH|X">FUIJAYRAH</option>
								
									<option value="157|GABON|X">GABON</option>
								
									<option value="164|GAMBIA|X">GAMBIA</option>
								
									<option value="267|GEORGIA|X">GEORGIA</option>
								
									<option value="94|GERMANIA|S">GERMANIA</option>
								
									<option value="112|GHANA|X">GHANA</option>
								
									<option value="82|GIAMAICA|X">GIAMAICA</option>
								
									<option value="88|GIAPPONE|S">GIAPPONE</option>
								
									<option value="102|GIBILTERRA|X">GIBILTERRA</option>
								
									<option value="113|GIBUTI|X">GIBUTI</option>
								
									<option value="122|GIORDANIA|X">GIORDANIA</option>
								
									<option value="32|GRECIA|S">GRECIA</option>
								
									<option value="156|GRENADA|X">GRENADA</option>
								
									<option value="200|GROENLANDIA|X">GROENLANDIA</option>
								
									<option value="214|GUADALUPA|X">GUADALUPA</option>
								
									<option value="154|GUAM|X">GUAM</option>
								
									<option value="33|GUATEMALA|X">GUATEMALA</option>
								
									<option value="201|GUERNSEY|X">GUERNSEY</option>
								
									<option value="123|GUIANA FRANCESE|X">GUIANA FRANCESE</option>
								
									<option value="137|GUINEA|X">GUINEA</option>
								
									<option value="167|GUINEA EQUATORIALE|X">GUINEA EQUATORIALE</option>
								
									<option value="185|GUINEA-BISSAU|X">GUINEA-BISSAU</option>
								
									<option value="159|GUYANA|X">GUYANA</option>
								
									<option value="34|HAITI|X">HAITI</option>
								
									<option value="35|HONDURAS|X">HONDURAS</option>
								
									<option value="103|HONG KONG|X">HONG KONG</option>
								
									<option value="114|INDIA|S">INDIA</option>
								
									<option value="129|INDONESIA|X">INDONESIA</option>
								
									<option value="39|IRAN|X">IRAN</option>
								
									<option value="38|IRAQ|X">IRAQ</option>
								
									<option value="40|IRLANDA|S">IRLANDA</option>
								
									<option value="41|ISLANDA|S">ISLANDA</option>
								
									<option value="286|ISLOE SVALBARD E JAN MAYEN|X">ISLOE SVALBARD E JAN MAYEN</option>
								
									<option value="280|ISOLA BOUVET|X">ISOLA BOUVET</option>
								
									<option value="282|ISOLA CHRISTMAS|X">ISOLA CHRISTMAS</option>
								
									<option value="281|ISOLA COCOS  KEELING|X">ISOLA COCOS  KEELING</option>
								
									<option value="203|ISOLA DI MAN|X">ISOLA DI MAN</option>
								
									<option value="292|ISOLE ALAND|X">ISOLE ALAND</option>
								
									<option value="252|ISOLE AMERICANE DEL PACIFICO|X">ISOLE AMERICANE DEL PACIFICO</option>
								
									<option value="211|ISOLE CAYMAN|N">ISOLE CAYMAN</option>
								
									<option value="237|ISOLE COOK|X">ISOLE COOK</option>
								
									<option value="190|ISOLE FALKLAND|X">ISOLE FALKLAND</option>
								
									<option value="204|ISOLE FAROE|X">ISOLE FAROE</option>
								
									<option value="284|ISOLE HEARD E MCDONALD|X">ISOLE HEARD E MCDONALD</option>
								
									<option value="219|ISOLE MARIANNE SETTENTRIONALI|X">ISOLE MARIANNE SETTENTRIONALI</option>
								
									<option value="217|ISOLE MARSHALL|X">ISOLE MARSHALL</option>
								
									<option value="285|ISOLE NORFOLK|X">ISOLE NORFOLK</option>
								
									<option value="191|ISOLE SALOMONE|X">ISOLE SALOMONE</option>
								
									<option value="210|ISOLE TURKS E CAICOS|X">ISOLE TURKS E CAICOS</option>
								
									<option value="221|ISOLE VERGINI AMERICANE|X">ISOLE VERGINI AMERICANE</option>
								
									<option value="249|ISOLE VERGINI BRITANNICHE|X">ISOLE VERGINI BRITANNICHE</option>
								
									<option value="182|ISRAELE|X">ISRAELE</option>
								
									<option value="202|JERSEY|X">JERSEY</option>
								
									<option value="269|KAZAKISTAN|X">KAZAKISTAN</option>
								
									<option value="116|KENYA|X">KENYA</option>
								
									<option value="194|KIRIBATI|X">KIRIBATI</option>
								
									<option value="291|KOSOVO|X">KOSOVO</option>
								
									<option value="126|KUWAIT|X">KUWAIT</option>
								
									<option value="270|KYRGYZSTAN|X">KYRGYZSTAN</option>
								
									<option value="136|LAOS|X">LAOS</option>
								
									<option value="89|LESOTHO|X">LESOTHO</option>
								
									<option value="258|LETTONIA|S">LETTONIA</option>
								
									<option value="95|LIBANO|X">LIBANO</option>
								
									<option value="44|LIBERIA|X">LIBERIA</option>
								
									<option value="45|LIBIA|X">LIBIA</option>
								
									<option value="90|LIECHTENSTEIN|S">LIECHTENSTEIN</option>
								
									<option value="259|LITUANIA|S">LITUANIA</option>
								
									<option value="92|LUSSEMBURGO|S">LUSSEMBURGO</option>
								
									<option value="59|MACAO|X">MACAO</option>
								
									<option value="278|MACEDONIA|X">MACEDONIA</option>
								
									<option value="104|MADAGASCAR|X">MADAGASCAR</option>
								
									<option value="56|MALAWI|X">MALAWI</option>
								
									<option value="127|MALDIVE|X">MALDIVE</option>
								
									<option value="106|MALESIA|S">MALESIA</option>
								
									<option value="149|MALI|X">MALI</option>
								
									<option value="105|MALTA|S">MALTA</option>
								
									<option value="107|MAROCCO|X">MAROCCO</option>
								
									<option value="213|MARTINICA|X">MARTINICA</option>
								
									<option value="141|MAURITANIA|X">MAURITANIA</option>
								
									<option value="128|MAURITIUS|X">MAURITIUS</option>
								
									<option value="226|MAYOTTE|X">MAYOTTE</option>
								
									<option value="46|MESSICO|S">MESSICO</option>
								
									<option value="215|MICRONESIA|X">MICRONESIA</option>
								
									<option value="265|MOLDAVIA|X">MOLDAVIA</option>
								
									<option value="91|MONACO|X">MONACO</option>
								
									<option value="110|MONGOLIA|X">MONGOLIA</option>
								
									<option value="290|MONTENEGRO|X">MONTENEGRO</option>
								
									<option value="208|MONTSERRAT|X">MONTSERRAT</option>
								
									<option value="134|MOZAMBICO|X">MOZAMBICO</option>
								
									<option value="83|MYANMAR|X">MYANMAR</option>
								
									<option value="206|NAMIBIA|X">NAMIBIA</option>
								
									<option value="109|NARAU|X">NARAU</option>
								
									<option value="115|NEPAL|X">NEPAL</option>
								
									<option value="47|NICARAGUA|X">NICARAGUA</option>
								
									<option value="150|NIGER|X">NIGER</option>
								
									<option value="117|NIGERIA|X">NIGERIA</option>
								
									<option value="205|NIUE|X">NIUE</option>
								
									<option value="48|NORVEGIA|S">NORVEGIA</option>
								
									<option value="253|NUOVA CALEDONIA|X">NUOVA CALEDONIA</option>
								
									<option value="49|NUOVA ZELANDA|S">NUOVA ZELANDA</option>
								
									<option value="163|OMAN|X">OMAN</option>
								
									<option value="50|PAESI BASSI|S">PAESI BASSI</option>
								
									<option value="36|PAKISTAN|X">PAKISTAN</option>
								
									<option value="216|PALAU|X">PALAU</option>
								
									<option value="279|PALESTINA|X">PALESTINA</option>
								
									<option value="51|PANAMA|X">PANAMA</option>
								
									<option value="186|PAPUA NUOVA GUINEA|X">PAPUA NUOVA GUINEA</option>
								
									<option value="52|PARAGUAY|X">PARAGUAY</option>
								
									<option value="53|PERU|X">PERU</option>
								
									<option value="175|PITCAIRN|X">PITCAIRN</option>
								
									<option value="225|POLINESIA FRANCESE|X">POLINESIA FRANCESE</option>
								
									<option value="54|POLONIA|S">POLONIA</option>
								
									<option value="55|PORTOGALLO|S">PORTOGALLO</option>
								
									<option value="220|PORTORICO|X">PORTORICO</option>
								
									<option value="168|QATAR|X">QATAR</option>
								
									<option value="242|RAS AL KHAIMAH|X">RAS AL KHAIMAH</option>
								
									<option value="31|REGNO UNITO|S">REGNO UNITO</option>
								
									<option value="18|REP. DEMOCRATICA DEL CONGO|X">REP. DEMOCRATICA DEL CONGO</option>
								
									<option value="143|REPPUBBLICA CENTROAFRICANA|X">REPPUBBLICA CENTROAFRICANA</option>
								
									<option value="275|REPUBBLICA CECA|S">REPUBBLICA CECA</option>
								
									<option value="63|REPUBBLICA DOMINICANA|X">REPUBBLICA DOMINICANA</option>
								
									<option value="247|REUNION|X">REUNION</option>
								
									<option value="61|ROMANIA|S">ROMANIA</option>
								
									<option value="151|RUANDA|X">RUANDA</option>
								
									<option value="262|RUSSIA|X">RUSSIA</option>
								
									<option value="166|SAHARA OCCIDENTALE|X">SAHARA OCCIDENTALE</option>
								
									<option value="293|SAINT BARTHELEMY|X">SAINT BARTHELEMY</option>
								
									<option value="195|SAINT KITTS E NEVIS|X">SAINT KITTS E NEVIS</option>
								
									<option value="199|SAINT LUCIA|X">SAINT LUCIA</option>
								
									<option value="222|SAINT MARTIN (FRENCH PART)|X">SAINT MARTIN (FRENCH PART)</option>
								
									<option value="248|SAINT PIERRE E MIQUELON|X">SAINT PIERRE E MIQUELON</option>
								
									<option value="196|SAINT VINCENT E GRENADINE|X">SAINT VINCENT E GRENADINE</option>
								
									<option value="131|SAMOA|X">SAMOA</option>
								
									<option value="148|SAMOA AMERICANA|X">SAMOA AMERICANA</option>
								
									<option value="37|SAN MARINO|X">SAN MARINO</option>
								
									<option value="254|SANTA ELENA|X">SANTA ELENA</option>
								
									<option value="187|SAO TOME E PRINCIPE|X">SAO TOME E PRINCIPE</option>
								
									<option value="152|SENEGAL|X">SENEGAL</option>
								
									<option value="289|SERBIA|X">SERBIA</option>
								
									<option value="189|SEYCHELLES|X">SEYCHELLES</option>
								
									<option value="243|SHARJAH|X">SHARJAH</option>
								
									<option value="153|SIERRA LEONE|X">SIERRA LEONE</option>
								
									<option value="147|SINGAPORE|S">SINGAPORE</option>
								
									<option value="294|SINT MAARTEN (DUTCH PART)|X">SINT MAARTEN (DUTCH PART)</option>
								
									<option value="65|SIRIA|X">SIRIA</option>
								
									<option value="276|SLOVACCHIA|S">SLOVACCHIA</option>
								
									<option value="260|SLOVENIA|S">SLOVENIA</option>
								
									<option value="66|SOMALIA|X">SOMALIA</option>
								
									<option value="67|SPAGNA|S">SPAGNA</option>
								
									<option value="85|SRI LANKA|X">SRI LANKA</option>
								
									<option value="69|STATI UNITI|S">STATI UNITI</option>
								
									<option value="78|SUD AFRICA|S">SUD AFRICA</option>
								
									<option value="283|SUD GEORGIA E SUD SANDWICH|X">SUD GEORGIA E SUD SANDWICH</option>
								
									<option value="297|SUD SUDAN|X">SUD SUDAN</option>
								
									<option value="70|SUDAN|X">SUDAN</option>
								
									<option value="124|SURINAME|X">SURINAME</option>
								
									<option value="68|SVEZIA|S">SVEZIA</option>
								
									<option value="71|SVIZZERA|S">SVIZZERA</option>
								
									<option value="138|SWAZILAND|X">SWAZILAND</option>
								
									<option value="272|TAGIKISTAN|X">TAGIKISTAN</option>
								
									<option value="72|TAILANDIA|X">TAILANDIA</option>
								
									<option value="22|TAIWAN|X">TAIWAN</option>
								
									<option value="57|TANZANIA|X">TANZANIA</option>
								
									<option value="183|TERRITORI FRANCESI DEL SUD|X">TERRITORI FRANCESI DEL SUD</option>
								
									<option value="245|TERRITORIO BRITANNICO OCEANO INDIANO|X">TERRITORIO BRITANNICO OCEANO INDIANO</option>
								
									<option value="287|TIMOR EST|X">TIMOR EST</option>
								
									<option value="155|TOGO|X">TOGO</option>
								
									<option value="236|TOKELAU|X">TOKELAU</option>
								
									<option value="162|TONGA|X">TONGA</option>
								
									<option value="120|TRINIDAD E TOBAGO|X">TRINIDAD E TOBAGO</option>
								
									<option value="75|TUNISIA|X">TUNISIA</option>
								
									<option value="76|TURCHIA|S">TURCHIA</option>
								
									<option value="273|TURKMENISTAN|X">TURKMENISTAN</option>
								
									<option value="193|TUVALU|X">TUVALU</option>
								
									<option value="263|UCRAINA|X">UCRAINA</option>
								
									<option value="132|UGANDA|X">UGANDA</option>
								
									<option value="244|UMM AL QAIWAIN|X">UMM AL QAIWAIN</option>
								
									<option value="77|UNGHERIA|S">UNGHERIA</option>
								
									<option value="80|URUGUAY|X">URUGUAY</option>
								
									<option value="271|UZBEKISTAN|X">UZBEKISTAN</option>
								
									<option value="121|VANUATU|X">VANUATU</option>
								
									<option value="81|VENEZUELA|X">VENEZUELA</option>
								
									<option value="62|VIETNAM|X">VIETNAM</option>
								
									<option value="218|WALLIS E FUGUNA|X">WALLIS E FUGUNA</option>
								
									<option value="42|YEMEN|X">YEMEN</option>
								
									<option value="58|ZAMBIA|X">ZAMBIA</option>
								
									<option value="73|ZIMBABWE|X">ZIMBABWE</option></select>
									<input type="hidden" name="residenzaFiscale2_int2" id="residenzaFiscale2_int2" disabled="disabled" class="disabled">
						</fieldset>
						<fieldset id='tinB_id1'>
							<span class="label">Taxpayer Identification Number (Tin)</span>
							<input class="tinField" type="text" name="TIN_intB_id1" maxlength="10" value="" id="TIN_intB_id1" style="text-transform:uppercase">
							<span class="errortext">Compila</span>
						</fieldset>
					</div>
				</div>
				<div class="fatcaFieldButton">
					<fieldset>
						<a href="javascript:;" class="fieldButton remove"><span>Elimina <span class="labelCounterMeno">seconda</span> residenza fiscale</span></a>
					</fieldset>
					<fieldset>
						<a href="javascript:;" class="fieldButton add disabled"><span>Aggiungi <span class="labelCounterPiu">terza</span> residenza fiscale</span></a>
					</fieldset>
				</div>
			</div>
			<br class="clear">



					<fieldset class="lastrow">
						<span class="label">Titolo di studio*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset class="lastrow">
						<span class="label">Come conosci Webank?*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Informazioni personali -->
			<!-- Documento identita' -->
				<div class="aolblock">
					<h3>Documento di identit&agrave;</h3>
					<div class="aolblockwrapper">
					<fieldset>
						<span class="label">Tipo di documento*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Numero*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Data di rilascio</span>
							<div class="fieldblock">
								<input type="text" onclick="removeOpt(this,'gg');" class="opzionale" value="gg" style="width:25px;">
								<span class="errortext">Lorem</span>
							</div>
							<span class="separator">/</span>
							<div class="fieldblock">
								<input type="text" onclick="removeOpt(this,'mm');" class="opzionale" value="mm" style="width:25px;">
								<span class="errortext">Lorem</span>
							</div>
							<span class="separator">/</span>
							<div class="fieldblock">
								<input type="text" onclick="removeOpt(this,'aaaa');" class="opzionale" value="aaaa" style="width:50px;">
								<span class="errortext">Lorem</span>
							</div>
					</fieldset>
					<fieldset>
						<span class="label">Stato di rilascio*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset class="lastrow">
						<span class="label">Provincia di rilascio*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset class="lastrow">
						<span class="label">Comune di rilascio*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Documento identita' -->
			<!-- Recapiti -->
				<div class="aolblock">
					<h3>Recapiti</h3>
					<div class="aolblockwrapper">
					<fieldset>
						<span class="label">Indirizzo di residenza*</span>
						<div class="fieldblock">
							<select style="width:85px">
								<option>seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</div>
						<div class="fieldblock">
							<input type="text" style="width: 151px;">
							<span class="errortext">Lorem</span>
						</div>
					</fieldset>
					<fieldset style="width: 100px;">
						<span class="label">N*</span>
						<input type="text" style="width:40px;"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset style="width:185px;">
						<span class="label">CAP*</span>
						<input type="text" style="width: 138px;"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Provincia*</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Comune</span>
						<input type="text"/>
						<span class="errortext">Lorem</span>
					</fieldset>
					<!-- BLOCC0 ESPANDIBILE -->
					<div class="expandable">
						<span class="label">Indirizzo di corrispondenza</span>
						<div class="expander">
							<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
							<span>Aggiungi indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata la documentazione contrattuale, per tutti gli intestatari del conto.</span>
						</div>
						<div class="expandableCont">
							<fieldset>
								<span class="label">Indirizzo di corrispondenza*</span>
								<div class="fieldblock">
									<select style="width:85px">
										<option>seleziona</option>
									</select>
									<span class="errortext">Lorem</span>
								</div>
								<div class="fieldblock">
									<input type="text" style="width: 151px;">
									<span class="errortext">Lorem</span>
								</div>
							</fieldset>
							<fieldset style="width: 100px;">
								<span class="label">N*</span>
								<input type="text" style="width:40px;"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset style="width:185px;">
								<span class="label">CAP*</span>
								<input type="text" style="width: 138px;"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset>
								<span class="label">Provincia*</span>
								<input type="text"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset>
								<span class="label">Comune</span>
								<input type="text"/>
								<span class="errortext">Lorem</span>
							</fieldset>
						</div>
					</div>
					<!-- FINE BLOCCO ESPANDIBILE -->
					<!-- BLOCC0 ESPANDIBILE -->
					<div class="expandable">
						<span class="label">Indirizzo per il centro di allarme interbancaria</span>
						<div class="expander">
							<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
							<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
						</div>
						<div class="expandableCont">
							<fieldset>
								<span class="label">Indirizzo di allarme interbancaria*</span>
								<div class="fieldblock">
									<select style="width:85px">
										<option>seleziona</option>
									</select>
									<span class="errortext">Lorem</span>
								</div>
								<div class="fieldblock">
									<input type="text" style="width:151px;">
									<span class="errortext">Lorem</span>
								</div>
							</fieldset>
							<fieldset style="width: 100px;">
								<span class="label">N*</span>
								<input type="text" style="width:40px;"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset style="width:185px;">
								<span class="label">CAP*</span>
								<input type="text" style="width: 138px;"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset>
								<span class="label">Provincia*</span>
								<input type="text"/>
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset>
								<span class="label">Comune</span>
								<input type="text"/>
								<span class="errortext">Lorem</span>
							</fieldset>
						</div>
					</div>
					<!-- FINE BLOCCO ESPANDIBILE -->
					<fieldset class="lastrow">
							<span class="label">Telefono casa</span>
							<div class="fieldblock">
								<input type="text" style="width:50px" />
								<span class="errortext">Lorem</span>
							</div>
							<div class="fieldblock">
								<input type="text" style="width:178px" />
								<span class="errortext">Lorem</span>
							</div>
					</fieldset>
					<fieldset class="lastrow">
							<span class="label">Telefono ufficio</span>
							<div class="fieldblock">
								<input type="text" style="width:50px" />
								<span class="errortext">Lorem</span>
							</div>
							<div class="fieldblock" >
								<input type="text" style="width:178px" />
								<span class="errortext">Lorem</span>
							</div>
					</fieldset>
					<br class="clear" />
				</div>
				<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>	
			<!-- fine Recapiti -->
			</div>
		</div>
		<!--<div class="filettobutton">
			<a title="indietro" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_0.php" class="greybutton"><span>indietro</span></a>
			<a onclick="javascript:esempioErrori();" title="avanti" href="javascript:;" class="greenbutton"><span>avanti</span></a>
			<a onclick="javascript;" title="salva in bozze" href="javascript:;" class="greenbutton"><span>salva in bozze</span></a>
		</div>-->
		<div class="filettobutton linked">
			<a title="indietro" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_0.php" class="backLinked">indietro</a>
			<a onclick="javascript:esempioErrori();" title="Vuoi continuare pi&ugrave; tardi?" href="javascript:;" class="bozzaLinked"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
			<a onclick="javascript:esempioErrori();" title="avanti" href="javascript:;" class="greenbutton"><span>avanti</span></a>
		</div>
		
		</form>
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
		<!-- caso A -->
		<div class="leftit">
			<img src="/img/tit_tuo_conto.gif"  alt="Il tuo conto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone</span>
					<span>Zero commissioni bancarie</span>
				</li>
				<li>
					<span class="productname">Deposito e linee vincolate</span>
					<span>1,10% tasso base</span>
					<span>Accreditamento trimestrale interessi</span>
					<span class="boxedgreen">
						<span><strong>3,5%</strong> sui depositi a 12 mesi</span>
					</span>
				</li>
				<li>
					<span class="productname">Sportello telefonico</span>
					<span>Servizio gratuito</span>
				</li>
				<li>
					<span class="promogreen">
						<span onmouseover="showGreenToolTip(this, 'Dettagli&lt;br&gt;- Per te &lt;strong&gt;150&euro; di buono acquisto&lt;/strong&gt; da spendere su &lt;strong&gt;Media World&lt;/strong&gt; Compra-online &lt;strong&gt;se richiedi l\'apertura&lt;/strong&gt; di Conto Webank &lt;strong&gt;entro il 3 ottobre 2011 e attivi una linea vincolata&lt;/strong&gt; a 6,12 mesi con almeno 1000&euro; &lt;strong&gt;entro il 31/10/2011.&lt;/strong&gt;&lt;br&gt;&lt;br&gt;Non potranno beneficiare di questa iniziativa: coloro che alla data di apertura del conto sono gi&agrave; clienti del Gruppo Bipiemme o  coloro che hanno chiuso un conto del Gruppo dal 1/4/2010; i lavoratori dipendenti di WeBank; coloro ai quali verr&agrave; rifiutata la domanda di apertura del Conto Webank per mancanza dei requisiti richiesti dalla banca ovvero del rispetto delle disposizioni normative vigenti in materia.');" onmouseout="hideGreenToolTip();">In pi&ugrave; per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
					</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Ti serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 9.00 - 20.00 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
			<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" />
			
			<a onclick="openPopOverLayer('callmeback', 'floating');" href="javascript:;">Webank ti richiama</a>
		
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_closed.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist">
				<ul>
					<li><a href="#1" target="blank" onclick="setVisitedLink(this)">Foglio Informativo</a></li>
					<li><a href="#2" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#3" target="blank" onclick="setVisitedLink(this)">Modulo richiesta</a></li>
					<li><a href="#4" target="blank" onclick="setVisitedLink(this)">Documento di sintesi</a></li>
					<li><a href="#5" target="blank" onclick="setVisitedLink(this)">Informativa precontrattuale servizi a distanza</a></li>
					<li><a href="#6" target="blank" onclick="setVisitedLink(this)">Principali diritti del cliente</a></li>
					<li><a href="#7" target="blank" onclick="setVisitedLink(this)">Guida pratica al conto</a></li>
					<li><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				</ul>
				<h4>Per  apertura deposito titoli</h4>
				<ul>
					<li><a href="#9" target="blank" onclick="setVisitedLink(this)">Richiesta deposito titoli</a></li>
					<li><a href="#10" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#11" target="blank" onclick="setVisitedLink(this)">Documentidi sintesi</a></li>
					<li><a href="#12" target="blank" onclick="setVisitedLink(this)">Informativa Mifid</a></li>
				</ul>
			</div>
	</div>
	
 </div>

<!-- OVERLAY PER CALLMEBACK -->
		<div id="callmeback" class="overlayer" style="display:none">
				<div class="overlayertitle">
					<a id="close" class="chiudi" onclick="closePopOverLayer('callmeback')" href="#"></a>
					<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
				</div>
				<div class="overlayerbody">
				<span class="sep"></span>
					<!-- secondo blocco-->
					<div class="contact">
						
						<div class="contactcont" id="formcont">
							
							<form action="#" method="post">
							
								<div class="fieldblocklayer error">
									<label>Numero di telefono</label>
									<input type="text" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<div id="calendario" class="fieldblocklayer middle error">
									<label>Giorno</label>
									<script type="text/javascript">DatePickerControl.createDp ('#datepicker1',"20110517|20110518|20110519");</script>
									
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								
								<div class="fieldblocklayer dx error">
									<label>Fascia oraria</label>
									<select name="orario" id="orario" style="visibility: visible;"><option value="09.00-10.00">09.00-10.00</option><option value="10.00-11.00">10.00-11.00</option><option value="11.00-12.00">11.00-12.00</option><option value="12.00-13.00">12.00-13.00</option><option value="13.00-14.00">13.00-14.00</option><option value="14.00-15.00">14.00-15.00</option><option value="15.00-16.00">15.00-16.00</option><option value="16.00-17.00">16.00-17.00</option><option value="17.00-18.00">17.00-18.00</option><option value="18.00-19.00">18.00-19.00</option><option value="19.00-20.00">19.00-20.00</option></select>
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<br class="clear">
								<br />
								<br />
								<div class="fieldblocklayer">
									<label>Codice</label><a class="rightlink" href="#">Crea nuovo codice</a>
									<img class="imgCaptcha" src="/img/bg_captcha3.gif">
									
								</div>
								<div class="fieldblocklayer middle bottom error">
									<label>Inserisci codice</label>
									<input type="text" class="lenghtmiddle" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
									
									<br><br>
									
								</div>
								<div class="fieldblocklayer dx">
									<a onclick="this.parentNode.parentNode.parentNode.style.display='none'; document.getElementById('helptxt').style.display='none'; document.getElementById('msgtxt').style.display='block'" class="greenbutton" href="javascript:;"><span>Contattami</span></a>
								</div>
							</form>
						
							
						
						</div>
						<form>
						<div class="contactbox small" style="display:none" id="msgtxt">
							<img alt="" src="/img/str_bg_overlayer_abb_top_sm.gif">
							<div class="contactcont">
									
								<div class="contactText">
										Abbiamo ricevuto la tua richiesta di contatto, <br />ti richiameremo nel giorno e nell'ora da te indicati.
										
								</div>
							</div>
							<img alt="" src="/img/str_bg_overlayer_abb_bot_sm.gif">
						</div>
						</form>
						
					</div>
				</div>
		</div>
			<!-- FINE OVERLAY PER CALLMEBACK -->
<!-- OVERLAY secondo intestatario gi&agrave; cliente -->
		<div id="procedi" class="overlayer" style="display:none">
			<div class="abbandono aol">
				<div class="overlayertitle">
					<img src="/img/tit_wb_prima_procedere.gif"  alt="Prima di procedere" />
					<a href="#" onclick="closePopOverLayer('procedi')" class="chiudi" id="close"></a>
					<span></span>
				</div>
				<div class="overlayerbody">
					<span class="sep"></span>
					
					<p>Uno dei cointestatari risulta essere gi&agrave; cliente di una delle banche del Gruppo Bipiemme. <br /> Non &egrave; possibile applicare sul conto le condizioni promozionali. Verranno quindi applicate le condizioni standard.</p>
					
					<div class="filettobutton">
						<a title="si"  href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_2.php" class="greenbutton large"><span>continua</span></a>
						
					</div>
				</div>
				
			</div>
		</div>
<!-- FINE OVERLAY secondo intestatario gi&agrave; cliente -->