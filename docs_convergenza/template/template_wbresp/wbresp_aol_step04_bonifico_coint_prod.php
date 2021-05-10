<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>



		<div class="row rowArea1">
	
		
		
		<!-- Template contatti -->
		<!-- TITOLO -->
		<div class="row">
			<div class="col-xs-12">
				<h2>Identificazione con bonifico</h2>
			</div>
		</div>
		<!-- TITOLO -->
		<!-- Intro -->
		<div class="row">
			<div class="col-xs-12">
				<p>Inserisci di seguito:</p>
				<ul>
					<li>i dati del <strong>conto corrente</strong> intestato a te dal quale farai il bonifico per l'identificazione;</li>
					<li>i dati di un tuo <strong>secondo documento di identit&agrave;</strong>. </li>
				</ul><br />
				<p>Procedi quindi con i dati per tutti i <strong>cointestatari</strong>.</p>
			</div>
		</div>
		<!-- Fine intro -->
		
		<form id="aolStep4_bonifico" action="/webankpub/aol/step5.do?BV_UseBVCookie=Yes&fromPageName=5&save=true" method="POST" class="validate">
		
			













	

			<div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">


			<!-- PRIMO INTESTATARIO -->
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading1">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#!" data-target="#collapse_int1" aria-controls="collapse_int1" class="collapsed" aria-expanded="false">Inserisci codice IBAN e un secondo documento di identit&agrave; MARIO ROSSI</a>
					</h4>
				</div>
				<div id="collapse_int1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">

						<!-- DATI DEL CODICE IBAN -->
						<div class="row">
							<div class="col-xs-12 form-section-title">
								<h4>1. Inserisci il codice IBAN</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>Per completare l'identificazione, dovrai fare un <strong>bonifico di 100 &euro;</strong> da un conto corrente di cui sei <strong>intestatario</strong> o cointestatario. Inserisci  qui il <strong>codice IBAN</strong> del conto da cui farai il bonifico, l'importo sar&agrave; accreditato sul tuo nuovo Conto Webank. In un secondo momento, ti forniremo le coordinate bancarie del conto di destinazione.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="ibanclientebon_int1">Codice IBAN*</label>
								<input type="text" id="ibanclientebon_int1" name="ibanclientebon_int1" class="textinput form-control" placeholder="IBAN 27 caratteri" value="" maxlength="27">
							</div>
						</div>
						<!-- FINE DEI DATI DEL CODICE IBAN -->
						<div class="spacer-no-border">&nbsp;</div>
						

						<hr>
						<!-- SECONDO DOCUMENTO DI IDENTITA' -->
						<div class="row">
							<div class="col-xs-12 form-section-title">
								<h4>2. Inserisci i dati del secondo documento di identit&agrave;*</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>Abbiamo bisogno dei dati di <strong>un altro tuo documento</strong> di identit&agrave;: se non lo hai a portata di mano adesso, puoi salvare la richiesta fin qui compilata. Chiudendo la pagina riceverai un'email contenente un link dal quale potrai riprendere la compilazione.</p>
							</div>
						</div>
						
						<!-- Selettore -->
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="radio radio-inline radiosecondodoc">
										<div class="col-xs-12 col-md-6">
											<input type="radio" name="secondodoc_int1" id="secondosi_int1" value="si" >
											<label for="secondosi_int1">Ho un secondo documento di identit&agrave; qui con me</label>
										</div>
										<div class="col-xs-12 col-md-6 form-group radio radio-inline">
											<input type="radio" name="secondodoc_int1" id="secondono_int1" value="no" >
											<label for="secondono_int1">In questo momento non ho un secondo documento d'identit&agrave; a portata di mano</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Fine selettore -->
						
						
						<input type="hidden" name="nascita_int1" id="nascita_int1" value="01/01/1980" />
						<input type="hidden" name="nascita_int2" id="nascita_int2" value="01/01/1980" />
						<input type="hidden" name="nascita_int3" id="nascita_int3" value="" />
						
						<input type="hidden" name="nascita2_int1" id="nascita2_int1" value="01/01/1980" />
						<input type="hidden" name="nascita2_int2" id="nascita2_int2" value="01/01/1980" />
						<input type="hidden" name="nascita2_int3" id="nascita2_int3" value="" />

						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="secondosi_int1_ins" class="modulo-doc sidocumento" style='display:none'>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="tipo_doc_int1">Tipo di documento*</label>
									<select name="tipo_doc2_int1" id="tipo_doc2_int1" class="form-control" data-modulo-doc="tipo-documento">		
										<option selected value="">Seleziona il tipo di documento</option>
											<option  value="03">Passaporto</option>							   
											<option  value="02">Patente elettronica</option>							   
											<option  value="14">Patente rinnovata</option>							   
											<option  value="13">Patente cartacea</option>							   
                               </select>
								</div>
								<div class="col-md-6 form-group">
									<label for="numero_doc2_int1" data-modulo="doc-numero">Numero documento*</label>
									<input type="text" placeholder="Inserisci il numero del documento" maxlength="16" name="numero_doc2_int1" id="numero_doc2_int1" value="" class="textinput form-control">
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="gg_emissione2_int1" data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
									<div class="input input-inline input-date">
										<input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_emissione2_int1" id="gg_emissione2_int1" value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_emissione2_int1" id="mm_emissione2_int1" value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_emissione2_int1" id="aa_emissione2_int1" value="" class="textinput form-control nascAn ignore">
										<input type="text" name="emissione2_int1" id="emissione2_int1" class="hidden-input" value="">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="gg_scadenza2_int1" data-modulo="doc-scadenza">Data di scadenza*</label>
									<div class="input input-inline input-date">
										<input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_scadenza2_int1" id="gg_scadenza2_int1"  value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_scadenza2_int1" id="mm_scadenza2_int1"  value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_scadenza2_int1" id="aa_scadenza2_int1"  value="" class="textinput form-control nascAn ignore">
										<input type="text" name="scadenza2_int1" id="scadenza2_int1" class="hidden-input" value="">
									</div>
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="stato_emissione2_int1">Paese di rilascio*</label>
									<select name="stato_emissione2_int1" id="stato_emissione2_int1" class="form-control" onchange="ProvCom.checkStato('stato_emissione2_int1', 'provincia_emissione2_int1', 'comune_emissione2_int1');ProvCom.updateProvince('provincia_emissione2_int1', 'stato_emissione2_int1');" >
	                                <option value="">seleziona</option>
									<option selected value="ITALIA">ITALIA</option>
									<option  value="ABU DHABI">ABU DHABI</option>
									<option  value="AFGHANISTAN">AFGHANISTAN</option>
									<option  value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
									<option  value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
									<option  value="AJMAN">AJMAN</option>
									<option  value="ALAND ISOLE">ALAND ISOLE</option>
									<option  value="ALBANIA">ALBANIA</option>
									<option  value="ALGERIA">ALGERIA</option>
									<option  value="AMERICAN SAMOA">AMERICAN SAMOA</option>
									<option  value="ANDORRA">ANDORRA</option>
									<option  value="ANGOLA">ANGOLA</option>
									<option  value="ANGUILLA">ANGUILLA</option>
									<option  value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
									<option  value="ARABIA SAUDITA">ARABIA SAUDITA</option>
									<option  value="ARGENTINA">ARGENTINA</option>
									<option  value="ARMENIA">ARMENIA</option>
									<option  value="ARUBA">ARUBA</option>
									<option  value="ASCENSION">ASCENSION</option>
									<option  value="AUSTRALIA">AUSTRALIA</option>
									<option  value="AUSTRIA">AUSTRIA</option>
									<option  value="AZERBAIGIAN">AZERBAIGIAN</option>
									<option  value="AZZORRE ISOLE">AZZORRE ISOLE</option>
									<option  value="BAHAMA">BAHAMA</option>
									<option  value="BAHREIN">BAHREIN</option>
									<option  value="BANGLADESH">BANGLADESH</option>
									<option  value="BARBADOS">BARBADOS</option>
									<option  value="BELGIO">BELGIO</option>
									<option  value="BELIZE">BELIZE</option>
									<option  value="BENIN">BENIN</option>
									<option  value="BERMUDA">BERMUDA</option>
									<option  value="BHUTAN">BHUTAN</option>
									<option  value="BIELORUSSIA">BIELORUSSIA</option>
									<option  value="BOLIVIA">BOLIVIA</option>
									<option  value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
									<option  value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
									<option  value="BOTSWANA">BOTSWANA</option>
									<option  value="BRASILE">BRASILE</option>
									<option  value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
									<option  value="BULGARIA">BULGARIA</option>
									<option  value="BURKINA FASO">BURKINA FASO</option>
									<option  value="BURUNDI">BURUNDI</option>
									<option  value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
									<option  value="CAMERUN">CAMERUN</option>
									<option  value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
									<option  value="CANADA">CANADA</option>
									<option  value="CAYMAN ISOLE">CAYMAN ISOLE</option>
									<option  value="CHAFARINAS">CHAFARINAS</option>
									<option  value="CIAD">CIAD</option>
									<option  value="CILE">CILE</option>
									<option  value="CIPRO">CIPRO</option>
									<option  value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
									<option  value="CLIPPERTON">CLIPPERTON</option>
									<option  value="COLOMBIA">COLOMBIA</option>
									<option  value="COMORE">COMORE</option>
									<option  value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
									<option  value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
									<option  value="COREA DEL NORD">COREA DEL NORD</option>
									<option  value="COREA DEL SUD">COREA DEL SUD</option>
									<option  value="COSTA D'AVORIO">COSTA D'AVORIO</option>
									<option  value="COSTARICA">COSTARICA</option>
									<option  value="CROAZIA">CROAZIA</option>
									<option  value="CUBA">CUBA</option>
									<option  value="CURACAO">CURACAO</option>
									<option  value="DANIMARCA">DANIMARCA</option>
									<option  value="DOMINICA">DOMINICA</option>
									<option  value="DUBAI">DUBAI</option>
									<option  value="ECUADOR">ECUADOR</option>
									<option  value="EGITTO">EGITTO</option>
									<option  value="EL SALVADOR">EL SALVADOR</option>
									<option  value="ERITREA">ERITREA</option>
									<option  value="ESTONIA">ESTONIA</option>
									<option  value="ETIOPIA">ETIOPIA</option>
									<option  value="FALKLAND">FALKLAND</option>
									<option  value="FILIPPINE">FILIPPINE</option>
									<option  value="FINLANDIA">FINLANDIA</option>
									<option  value="FRANCIA">FRANCIA</option>
									<option  value="FUIJAYRAH">FUIJAYRAH</option>
									<option  value="GABON">GABON</option>
									<option  value="GAMBIA">GAMBIA</option>
									<option  value="GEORGIA">GEORGIA</option>
									<option  value="GHANA">GHANA</option>
									<option  value="GIAMAICA">GIAMAICA</option>
									<option  value="GIAPPONE">GIAPPONE</option>
									<option  value="GIBILTERRA">GIBILTERRA</option>
									<option  value="GIBUTI">GIBUTI</option>
									<option  value="GIORDANIA">GIORDANIA</option>
									<option  value="GOUGH">GOUGH</option>
									<option  value="GRECIA">GRECIA</option>
									<option  value="GRENADA">GRENADA</option>
									<option  value="GROENLANDIA">GROENLANDIA</option>
									<option  value="GUADALUPA">GUADALUPA</option>
									<option  value="GUAM">GUAM</option>
									<option  value="GUATEMALA">GUATEMALA</option>
									<option  value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
									<option  value="GUERNSEY C.I.">GUERNSEY C.I.</option>
									<option  value="GUINEA">GUINEA</option>
									<option  value="GUINEA BISSAU">GUINEA BISSAU</option>
									<option  value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
									<option  value="GUYANA">GUYANA</option>
									<option  value="HAITI">HAITI</option>
									<option  value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
									<option  value="HONDURAS">HONDURAS</option>
									<option  value="HONG KONG">HONG KONG</option>
									<option  value="INDIA">INDIA</option>
									<option  value="INDONESIA">INDONESIA</option>
									<option  value="IRAN">IRAN</option>
									<option  value="IRAQ">IRAQ</option>
									<option  value="IRLANDA">IRLANDA</option>
									<option  value="ISLANDA">ISLANDA</option>
									<option  value="ISOLA DI MAN">ISOLA DI MAN</option>
									<option  value="ISOLE CANARIE">ISOLE CANARIE</option>
									<option  value="ISOLE CAROLINE">ISOLE CAROLINE</option>
									<option  value="ISOLE CHAGOS">ISOLE CHAGOS</option>
									<option  value="ISOLE COOK">ISOLE COOK</option>
									<option  value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
									<option  value="ISOLE FAEROER">ISOLE FAEROER</option>
									<option  value="ISOLE FIGI">ISOLE FIGI</option>
									<option  value="ISOLE MARSHALL">ISOLE MARSHALL</option>
									<option  value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
									<option  value="ISOLE WAKE">ISOLE WAKE</option>
									<option  value="ISRAELE">ISRAELE</option>
									<option  value="JERSEY">JERSEY</option>
									<option  value="KAZAKISTAN">KAZAKISTAN</option>
									<option  value="KENYA">KENYA</option>
									<option  value="KIRGHIZISTAN">KIRGHIZISTAN</option>
									<option  value="KIRIBATI">KIRIBATI</option>
									<option  value="KUWAIT">KUWAIT</option>
									<option  value="LAOS">LAOS</option>
									<option  value="LESOTHO">LESOTHO</option>
									<option  value="LETTONIA">LETTONIA</option>
									<option  value="LIBANO">LIBANO</option>
									<option  value="LIBERIA">LIBERIA</option>
									<option  value="LIBIA">LIBIA</option>
									<option  value="LIECHTENSTEIN">LIECHTENSTEIN</option>
									<option  value="LITUANIA">LITUANIA</option>
									<option  value="LUSSEMBURGO">LUSSEMBURGO</option>
									<option  value="MACAO">MACAO</option>
									<option  value="MACEDONIA">MACEDONIA</option>
									<option  value="MADAGASCAR">MADAGASCAR</option>
									<option  value="MADEIRA">MADEIRA</option>
									<option  value="MALAWI">MALAWI</option>
									<option  value="MALAYSIA">MALAYSIA</option>
									<option  value="MALDIVE">MALDIVE</option>
									<option  value="MALI">MALI</option>
									<option  value="MALTA">MALTA</option>
									<option  value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
									<option  value="MAROCCO">MAROCCO</option>
									<option  value="MARTINICA">MARTINICA</option>
									<option  value="MAURITANIA">MAURITANIA</option>
									<option  value="MAURIZIO">MAURIZIO</option>
									<option  value="MAYOTTE">MAYOTTE</option>
									<option  value="MELILLA">MELILLA</option>
									<option  value="MESSICO">MESSICO</option>
									<option  value="MICRONESIA">MICRONESIA</option>
									<option  value="MIDWAY ISOLE">MIDWAY ISOLE</option>
									<option  value="MOLDAVIA">MOLDAVIA</option>
									<option  value="MONACO">MONACO</option>
									<option  value="MONGOLIA">MONGOLIA</option>
									<option  value="MONTENEGRO">MONTENEGRO</option>
									<option  value="MONTSERRAT">MONTSERRAT</option>
									<option  value="MOZAMBICO">MOZAMBICO</option>
									<option  value="MYANMAR">MYANMAR</option>
									<option  value="NAURU">NAURU</option>
									<option  value="NEPAL">NEPAL</option>
									<option  value="NICARAGUA">NICARAGUA</option>
									<option  value="NIGER">NIGER</option>
									<option  value="NIGERIA">NIGERIA</option>
									<option  value="NIUE - SAVAGE">NIUE - SAVAGE</option>
									<option  value="NORFOLK ISOLE">NORFOLK ISOLE</option>
									<option  value="NORVEGIA">NORVEGIA</option>
									<option  value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
									<option  value="NUOVA ZELANDA">NUOVA ZELANDA</option>
									<option  value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
									<option  value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
									<option  value="OMAN">OMAN</option>
									<option  value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
									<option  value="PAKISTAN">PAKISTAN</option>
									<option  value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
									<option  value="PANAMA">PANAMA</option>
									<option  value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
									<option  value="PARAGUAY">PARAGUAY</option>
									<option  value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
									<option  value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
									<option  value="PERU'">PERU'</option>
									<option  value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
									<option  value="POLONIA">POLONIA</option>
									<option  value="PORTOGALLO">PORTOGALLO</option>
									<option  value="PORTORICO">PORTORICO</option>
									<option  value="QATAR">QATAR</option>
									<option  value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
									<option  value="REGNO UNITO">REGNO UNITO</option>
									<option  value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
									<option  value="REPUBBLICA CECA">REPUBBLICA CECA</option>
									<option  value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
									<option  value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
									<option  value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
									<option  value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
									<option  value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
									<option  value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
									<option  value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
									<option  value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
									<option  value="REUNION">REUNION</option>
									<option  value="ROMANIA">ROMANIA</option>
									<option  value="RUANDA">RUANDA</option>
									<option  value="RUSSIA">RUSSIA</option>
									<option  value="S.ELENA">S.ELENA</option>
									<option  value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
									<option  value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
									<option  value="SAINT LUCIA">SAINT LUCIA</option>
									<option  value="SALOMONE">SALOMONE</option>
									<option  value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
									<option  value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
									<option  value="SEICELLE">SEICELLE</option>
									<option  value="SENEGAL">SENEGAL</option>
									<option  value="SERBIA">SERBIA</option>
									<option  value="SHARJAH">SHARJAH</option>
									<option  value="SIERRA LEONE">SIERRA LEONE</option>
									<option  value="SINGAPORE">SINGAPORE</option>
									<option  value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
									<option  value="SIRIA">SIRIA</option>
									<option  value="SLOVACCHIA">SLOVACCHIA</option>
									<option  value="SLOVENIA">SLOVENIA</option>
									<option  value="SOMALIA">SOMALIA</option>
									<option  value="SPAGNA">SPAGNA</option>
									<option  value="SRI LANKA">SRI LANKA</option>
									<option  value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
									<option  value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
									<option  value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
									<option  value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
									<option  value="SUDAN">SUDAN</option>
									<option  value="SURINAME">SURINAME</option>
									<option  value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
									<option  value="SVEZIA">SVEZIA</option>
									<option  value="SVIZZERA">SVIZZERA</option>
									<option  value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
									<option  value="TAGIKISTAN">TAGIKISTAN</option>
									<option  value="TANZANIA">TANZANIA</option>
									<option  value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
									<option  value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
									<option  value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
									<option  value="THAILANDIA">THAILANDIA</option>
									<option  value="TIMOR">TIMOR</option>
									<option  value="TOGO">TOGO</option>
									<option  value="TOKELAU">TOKELAU</option>
									<option  value="TONGA">TONGA</option>
									<option  value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
									<option  value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
									<option  value="TUNISIA">TUNISIA</option>
									<option  value="TURCHIA">TURCHIA</option>
									<option  value="TURKMENISTAN">TURKMENISTAN</option>
									<option  value="TURKS E CAICOS">TURKS E CAICOS</option>
									<option  value="TUVALU">TUVALU</option>
									<option  value="UCRAINA">UCRAINA</option>
									<option  value="UGANDA">UGANDA</option>
									<option  value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
									<option  value="UNGHERIA">UNGHERIA</option>
									<option  value="URUGUAY">URUGUAY</option>
									<option  value="UZBEKISTAN">UZBEKISTAN</option>
									<option  value="VANUATU">VANUATU</option>
									<option  value="VENEZUELA">VENEZUELA</option>
									<option  value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
									<option  value="VIETNAM">VIETNAM</option>
									<option  value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
									<option  value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
									<option  value="YEMEN">YEMEN</option>
									<option  value="ZAMBIA">ZAMBIA</option>
									<option  value="ZIMBABWE">ZIMBABWE</option>
								</select> 
								</div>
								<div class="col-md-6 form-group">
									<label for="provincia_emissione2_int1">Provincia di rilascio*</label>
									<select name="provincia_emissione2_int1" id="provincia_emissione2_int1" class="form-control" onchange="ProvCom.updateComuni('comune_emissione2_int1', 'provincia_emissione2_int1');">
										<option value="">seleziona</option>
									</select>
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="comune_emissione2_int1" data-modulo="doc-comune">Comune di rilascio*</label>
									<select name="comune_emissione2_int1" id="comune_emissione2_int1" class="form-control">
										<option value="">seleziona</option>
									</select>
								</div>
							</div>
						</div>
						<!-- FINE SECONDO DOCUMENTO DI IDENTITA' -->
						
						<!-- SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
						<div id="secondono_int1_ins" class="nodocumento" style="display:none">
							<div class="row">
								<div class="col-xs-12">
									<p>In alternativa, scegli uno dei documenti tra quelli elencati di seguito.<br>
										Dovrai allegarne una copia insieme alla documentazione da spedire.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label for="altroDoc_int1">Tipo di documento*</label>
									<select name="altroDoc_int1" id="altroDoc_int1" class="form-control">
										<option value="">Seleziona il tipo di documento</option>
										<option  value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
										<option  value="13">Certificato di residenza</option>

									</select>
								</div>
							</div>
						</div>
						<!-- FINE SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
						<div class="spacer-no-border hidden-xs">&nbsp;</div>						
						

			


			<!-- FINE ACCORDION CON INTESTATARIO -->

					</div>
				</div>
				</div>
	

			<!-- PRIMO INTESTATARIO -->
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading2">
					<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#!" data-target="#collapse_int2" aria-controls="collapse_int2" class="collapsed" aria-expanded="false">Inserisci codice IBAN e un secondo documento di identit&agrave; PAOLO ROSSI</a>
					</h4>
				</div>
				<div id="collapse_int2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" aria-expanded="false" style="height: 0px;">
					<div class="panel-body">

						<!-- DATI DEL CODICE IBAN -->
						<div class="row">
							<div class="col-xs-12 form-section-title">
								<h4>1. Inserisci il codice IBAN</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>Per completare l'identificazione, dovrai fare un <strong>bonifico di 100 &euro;</strong> da un conto corrente di cui sei <strong>intestatario</strong> o cointestatario. Inserisci  qui il <strong>codice IBAN</strong> del conto da cui farai il bonifico, l'importo sar&agrave; accreditato sul tuo nuovo Conto Webank. In un secondo momento, ti forniremo le coordinate bancarie del conto di destinazione.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<label for="ibanclientebon_int2">Codice IBAN*</label>
								<input type="text" id="ibanclientebon_int2" name="ibanclientebon_int2" class="textinput form-control" placeholder="IBAN 27 caratteri" value="" maxlength="27">
							</div>
						</div>
						<!-- FINE DEI DATI DEL CODICE IBAN -->
						<div class="spacer-no-border">&nbsp;</div>
						

						<hr>
						<!-- SECONDO DOCUMENTO DI IDENTITA' -->
						<div class="row">
							<div class="col-xs-12 form-section-title">
								<h4>2. Inserisci i dati del secondo documento di identit&agrave;*</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>Abbiamo bisogno dei dati di <strong>un altro tuo documento</strong> di identit&agrave;: se non lo hai a portata di mano adesso, puoi salvare la richiesta fin qui compilata. Chiudendo la pagina riceverai un'email contenente un link dal quale potrai riprendere la compilazione.</p>
							</div>
						</div>
						
						<!-- Selettore -->
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="radio radio-inline radiosecondodoc">
										<div class="col-xs-12 col-md-6">
											<input type="radio" name="secondodoc_int2" id="secondosi_int2" value="si" >
											<label for="secondosi_int2">Ho un secondo documento di identit&agrave; qui con me</label>
										</div>
										<div class="col-xs-12 col-md-6 form-group radio radio-inline">
											<input type="radio" name="secondodoc_int2" id="secondono_int2" value="no" >
											<label for="secondono_int2">In questo momento non ho un secondo documento d'identit&agrave; a portata di mano</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Fine selettore -->
						
						
						<input type="hidden" name="nascita_int1" id="nascita_int1" value="01/01/1980" />
						<input type="hidden" name="nascita_int2" id="nascita_int2" value="01/01/1980" />
						<input type="hidden" name="nascita_int3" id="nascita_int3" value="" />
						
						<input type="hidden" name="nascita2_int1" id="nascita2_int1" value="01/01/1980" />
						<input type="hidden" name="nascita2_int2" id="nascita2_int2" value="01/01/1980" />
						<input type="hidden" name="nascita2_int3" id="nascita2_int3" value="" />

						<div class="spacer-no-border hidden-xs">&nbsp;</div>
						<div id="secondosi_int2_ins" class="modulo-doc sidocumento" style='display:none'>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="tipo_doc_int2">Tipo di documento*</label>
									<select name="tipo_doc2_int2" id="tipo_doc2_int2" class="form-control" data-modulo-doc="tipo-documento">		
										<option selected value="">Seleziona il tipo di documento</option>
											<option  value="03">Passaporto</option>							   
											<option  value="02">Patente elettronica</option>							   
											<option  value="14">Patente rinnovata</option>							   
											<option  value="13">Patente cartacea</option>							   
                               </select>
								</div>
								<div class="col-md-6 form-group">
									<label for="numero_doc2_int2" data-modulo="doc-numero">Numero documento*</label>
									<input type="text" placeholder="Inserisci il numero del documento" maxlength="16" name="numero_doc2_int2" id="numero_doc2_int2" value="" class="textinput form-control">
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="gg_emissione2_int2" data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
									<div class="input input-inline input-date">
										<input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_emissione2_int2" id="gg_emissione2_int2" value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_emissione2_int2" id="mm_emissione2_int2" value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_emissione2_int2" id="aa_emissione2_int2" value="" class="textinput form-control nascAn ignore">
										<input type="text" name="emissione2_int2" id="emissione2_int2" class="hidden-input" value="">
									</div>
								</div>
								<div class="col-md-6 form-group">
									<label for="gg_scadenza2_int2" data-modulo="doc-scadenza">Data di scadenza*</label>
									<div class="input input-inline input-date">
										<input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_scadenza2_int2" id="gg_scadenza2_int2"  value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_scadenza2_int2" id="mm_scadenza2_int2"  value="" class="textinput form-control nascGg ignore">
										<div class="nascSl">/</div>
										<input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_scadenza2_int2" id="aa_scadenza2_int2"  value="" class="textinput form-control nascAn ignore">
										<input type="text" name="scadenza2_int2" id="scadenza2_int2" class="hidden-input" value="">
									</div>
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="stato_emissione2_int2">Paese di rilascio*</label>
									<select name="stato_emissione2_int2" id="stato_emissione2_int2" class="form-control" onchange="ProvCom.checkStato('stato_emissione2_int2', 'provincia_emissione2_int2', 'comune_emissione2_int2');ProvCom.updateProvince('provincia_emissione2_int2', 'stato_emissione2_int2');" >
	                                <option value="">seleziona</option>
									<option selected value="ITALIA">ITALIA</option>
									<option  value="ABU DHABI">ABU DHABI</option>
									<option  value="AFGHANISTAN">AFGHANISTAN</option>
									<option  value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
									<option  value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
									<option  value="AJMAN">AJMAN</option>
									<option  value="ALAND ISOLE">ALAND ISOLE</option>
									<option  value="ALBANIA">ALBANIA</option>
									<option  value="ALGERIA">ALGERIA</option>
									<option  value="AMERICAN SAMOA">AMERICAN SAMOA</option>
									<option  value="ANDORRA">ANDORRA</option>
									<option  value="ANGOLA">ANGOLA</option>
									<option  value="ANGUILLA">ANGUILLA</option>
									<option  value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
									<option  value="ARABIA SAUDITA">ARABIA SAUDITA</option>
									<option  value="ARGENTINA">ARGENTINA</option>
									<option  value="ARMENIA">ARMENIA</option>
									<option  value="ARUBA">ARUBA</option>
									<option  value="ASCENSION">ASCENSION</option>
									<option  value="AUSTRALIA">AUSTRALIA</option>
									<option  value="AUSTRIA">AUSTRIA</option>
									<option  value="AZERBAIGIAN">AZERBAIGIAN</option>
									<option  value="AZZORRE ISOLE">AZZORRE ISOLE</option>
									<option  value="BAHAMA">BAHAMA</option>
									<option  value="BAHREIN">BAHREIN</option>
									<option  value="BANGLADESH">BANGLADESH</option>
									<option  value="BARBADOS">BARBADOS</option>
									<option  value="BELGIO">BELGIO</option>
									<option  value="BELIZE">BELIZE</option>
									<option  value="BENIN">BENIN</option>
									<option  value="BERMUDA">BERMUDA</option>
									<option  value="BHUTAN">BHUTAN</option>
									<option  value="BIELORUSSIA">BIELORUSSIA</option>
									<option  value="BOLIVIA">BOLIVIA</option>
									<option  value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
									<option  value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
									<option  value="BOTSWANA">BOTSWANA</option>
									<option  value="BRASILE">BRASILE</option>
									<option  value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
									<option  value="BULGARIA">BULGARIA</option>
									<option  value="BURKINA FASO">BURKINA FASO</option>
									<option  value="BURUNDI">BURUNDI</option>
									<option  value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
									<option  value="CAMERUN">CAMERUN</option>
									<option  value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
									<option  value="CANADA">CANADA</option>
									<option  value="CAYMAN ISOLE">CAYMAN ISOLE</option>
									<option  value="CHAFARINAS">CHAFARINAS</option>
									<option  value="CIAD">CIAD</option>
									<option  value="CILE">CILE</option>
									<option  value="CIPRO">CIPRO</option>
									<option  value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
									<option  value="CLIPPERTON">CLIPPERTON</option>
									<option  value="COLOMBIA">COLOMBIA</option>
									<option  value="COMORE">COMORE</option>
									<option  value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
									<option  value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
									<option  value="COREA DEL NORD">COREA DEL NORD</option>
									<option  value="COREA DEL SUD">COREA DEL SUD</option>
									<option  value="COSTA D'AVORIO">COSTA D'AVORIO</option>
									<option  value="COSTARICA">COSTARICA</option>
									<option  value="CROAZIA">CROAZIA</option>
									<option  value="CUBA">CUBA</option>
									<option  value="CURACAO">CURACAO</option>
									<option  value="DANIMARCA">DANIMARCA</option>
									<option  value="DOMINICA">DOMINICA</option>
									<option  value="DUBAI">DUBAI</option>
									<option  value="ECUADOR">ECUADOR</option>
									<option  value="EGITTO">EGITTO</option>
									<option  value="EL SALVADOR">EL SALVADOR</option>
									<option  value="ERITREA">ERITREA</option>
									<option  value="ESTONIA">ESTONIA</option>
									<option  value="ETIOPIA">ETIOPIA</option>
									<option  value="FALKLAND">FALKLAND</option>
									<option  value="FILIPPINE">FILIPPINE</option>
									<option  value="FINLANDIA">FINLANDIA</option>
									<option  value="FRANCIA">FRANCIA</option>
									<option  value="FUIJAYRAH">FUIJAYRAH</option>
									<option  value="GABON">GABON</option>
									<option  value="GAMBIA">GAMBIA</option>
									<option  value="GEORGIA">GEORGIA</option>
									<option  value="GHANA">GHANA</option>
									<option  value="GIAMAICA">GIAMAICA</option>
									<option  value="GIAPPONE">GIAPPONE</option>
									<option  value="GIBILTERRA">GIBILTERRA</option>
									<option  value="GIBUTI">GIBUTI</option>
									<option  value="GIORDANIA">GIORDANIA</option>
									<option  value="GOUGH">GOUGH</option>
									<option  value="GRECIA">GRECIA</option>
									<option  value="GRENADA">GRENADA</option>
									<option  value="GROENLANDIA">GROENLANDIA</option>
									<option  value="GUADALUPA">GUADALUPA</option>
									<option  value="GUAM">GUAM</option>
									<option  value="GUATEMALA">GUATEMALA</option>
									<option  value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
									<option  value="GUERNSEY C.I.">GUERNSEY C.I.</option>
									<option  value="GUINEA">GUINEA</option>
									<option  value="GUINEA BISSAU">GUINEA BISSAU</option>
									<option  value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
									<option  value="GUYANA">GUYANA</option>
									<option  value="HAITI">HAITI</option>
									<option  value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
									<option  value="HONDURAS">HONDURAS</option>
									<option  value="HONG KONG">HONG KONG</option>
									<option  value="INDIA">INDIA</option>
									<option  value="INDONESIA">INDONESIA</option>
									<option  value="IRAN">IRAN</option>
									<option  value="IRAQ">IRAQ</option>
									<option  value="IRLANDA">IRLANDA</option>
									<option  value="ISLANDA">ISLANDA</option>
									<option  value="ISOLA DI MAN">ISOLA DI MAN</option>
									<option  value="ISOLE CANARIE">ISOLE CANARIE</option>
									<option  value="ISOLE CAROLINE">ISOLE CAROLINE</option>
									<option  value="ISOLE CHAGOS">ISOLE CHAGOS</option>
									<option  value="ISOLE COOK">ISOLE COOK</option>
									<option  value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
									<option  value="ISOLE FAEROER">ISOLE FAEROER</option>
									<option  value="ISOLE FIGI">ISOLE FIGI</option>
									<option  value="ISOLE MARSHALL">ISOLE MARSHALL</option>
									<option  value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
									<option  value="ISOLE WAKE">ISOLE WAKE</option>
									<option  value="ISRAELE">ISRAELE</option>
									<option  value="JERSEY">JERSEY</option>
									<option  value="KAZAKISTAN">KAZAKISTAN</option>
									<option  value="KENYA">KENYA</option>
									<option  value="KIRGHIZISTAN">KIRGHIZISTAN</option>
									<option  value="KIRIBATI">KIRIBATI</option>
									<option  value="KUWAIT">KUWAIT</option>
									<option  value="LAOS">LAOS</option>
									<option  value="LESOTHO">LESOTHO</option>
									<option  value="LETTONIA">LETTONIA</option>
									<option  value="LIBANO">LIBANO</option>
									<option  value="LIBERIA">LIBERIA</option>
									<option  value="LIBIA">LIBIA</option>
									<option  value="LIECHTENSTEIN">LIECHTENSTEIN</option>
									<option  value="LITUANIA">LITUANIA</option>
									<option  value="LUSSEMBURGO">LUSSEMBURGO</option>
									<option  value="MACAO">MACAO</option>
									<option  value="MACEDONIA">MACEDONIA</option>
									<option  value="MADAGASCAR">MADAGASCAR</option>
									<option  value="MADEIRA">MADEIRA</option>
									<option  value="MALAWI">MALAWI</option>
									<option  value="MALAYSIA">MALAYSIA</option>
									<option  value="MALDIVE">MALDIVE</option>
									<option  value="MALI">MALI</option>
									<option  value="MALTA">MALTA</option>
									<option  value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
									<option  value="MAROCCO">MAROCCO</option>
									<option  value="MARTINICA">MARTINICA</option>
									<option  value="MAURITANIA">MAURITANIA</option>
									<option  value="MAURIZIO">MAURIZIO</option>
									<option  value="MAYOTTE">MAYOTTE</option>
									<option  value="MELILLA">MELILLA</option>
									<option  value="MESSICO">MESSICO</option>
									<option  value="MICRONESIA">MICRONESIA</option>
									<option  value="MIDWAY ISOLE">MIDWAY ISOLE</option>
									<option  value="MOLDAVIA">MOLDAVIA</option>
									<option  value="MONACO">MONACO</option>
									<option  value="MONGOLIA">MONGOLIA</option>
									<option  value="MONTENEGRO">MONTENEGRO</option>
									<option  value="MONTSERRAT">MONTSERRAT</option>
									<option  value="MOZAMBICO">MOZAMBICO</option>
									<option  value="MYANMAR">MYANMAR</option>
									<option  value="NAURU">NAURU</option>
									<option  value="NEPAL">NEPAL</option>
									<option  value="NICARAGUA">NICARAGUA</option>
									<option  value="NIGER">NIGER</option>
									<option  value="NIGERIA">NIGERIA</option>
									<option  value="NIUE - SAVAGE">NIUE - SAVAGE</option>
									<option  value="NORFOLK ISOLE">NORFOLK ISOLE</option>
									<option  value="NORVEGIA">NORVEGIA</option>
									<option  value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
									<option  value="NUOVA ZELANDA">NUOVA ZELANDA</option>
									<option  value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
									<option  value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
									<option  value="OMAN">OMAN</option>
									<option  value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
									<option  value="PAKISTAN">PAKISTAN</option>
									<option  value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
									<option  value="PANAMA">PANAMA</option>
									<option  value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
									<option  value="PARAGUAY">PARAGUAY</option>
									<option  value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
									<option  value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
									<option  value="PERU'">PERU'</option>
									<option  value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
									<option  value="POLONIA">POLONIA</option>
									<option  value="PORTOGALLO">PORTOGALLO</option>
									<option  value="PORTORICO">PORTORICO</option>
									<option  value="QATAR">QATAR</option>
									<option  value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
									<option  value="REGNO UNITO">REGNO UNITO</option>
									<option  value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
									<option  value="REPUBBLICA CECA">REPUBBLICA CECA</option>
									<option  value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
									<option  value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
									<option  value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
									<option  value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
									<option  value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
									<option  value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
									<option  value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
									<option  value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
									<option  value="REUNION">REUNION</option>
									<option  value="ROMANIA">ROMANIA</option>
									<option  value="RUANDA">RUANDA</option>
									<option  value="RUSSIA">RUSSIA</option>
									<option  value="S.ELENA">S.ELENA</option>
									<option  value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
									<option  value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
									<option  value="SAINT LUCIA">SAINT LUCIA</option>
									<option  value="SALOMONE">SALOMONE</option>
									<option  value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
									<option  value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
									<option  value="SEICELLE">SEICELLE</option>
									<option  value="SENEGAL">SENEGAL</option>
									<option  value="SERBIA">SERBIA</option>
									<option  value="SHARJAH">SHARJAH</option>
									<option  value="SIERRA LEONE">SIERRA LEONE</option>
									<option  value="SINGAPORE">SINGAPORE</option>
									<option  value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
									<option  value="SIRIA">SIRIA</option>
									<option  value="SLOVACCHIA">SLOVACCHIA</option>
									<option  value="SLOVENIA">SLOVENIA</option>
									<option  value="SOMALIA">SOMALIA</option>
									<option  value="SPAGNA">SPAGNA</option>
									<option  value="SRI LANKA">SRI LANKA</option>
									<option  value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
									<option  value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
									<option  value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
									<option  value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
									<option  value="SUDAN">SUDAN</option>
									<option  value="SURINAME">SURINAME</option>
									<option  value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
									<option  value="SVEZIA">SVEZIA</option>
									<option  value="SVIZZERA">SVIZZERA</option>
									<option  value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
									<option  value="TAGIKISTAN">TAGIKISTAN</option>
									<option  value="TANZANIA">TANZANIA</option>
									<option  value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
									<option  value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
									<option  value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
									<option  value="THAILANDIA">THAILANDIA</option>
									<option  value="TIMOR">TIMOR</option>
									<option  value="TOGO">TOGO</option>
									<option  value="TOKELAU">TOKELAU</option>
									<option  value="TONGA">TONGA</option>
									<option  value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
									<option  value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
									<option  value="TUNISIA">TUNISIA</option>
									<option  value="TURCHIA">TURCHIA</option>
									<option  value="TURKMENISTAN">TURKMENISTAN</option>
									<option  value="TURKS E CAICOS">TURKS E CAICOS</option>
									<option  value="TUVALU">TUVALU</option>
									<option  value="UCRAINA">UCRAINA</option>
									<option  value="UGANDA">UGANDA</option>
									<option  value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
									<option  value="UNGHERIA">UNGHERIA</option>
									<option  value="URUGUAY">URUGUAY</option>
									<option  value="UZBEKISTAN">UZBEKISTAN</option>
									<option  value="VANUATU">VANUATU</option>
									<option  value="VENEZUELA">VENEZUELA</option>
									<option  value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
									<option  value="VIETNAM">VIETNAM</option>
									<option  value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
									<option  value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
									<option  value="YEMEN">YEMEN</option>
									<option  value="ZAMBIA">ZAMBIA</option>
									<option  value="ZIMBABWE">ZIMBABWE</option>
								</select> 
								</div>
								<div class="col-md-6 form-group">
									<label for="provincia_emissione2_int2">Provincia di rilascio*</label>
									<select name="provincia_emissione2_int2" id="provincia_emissione2_int2" class="form-control" onchange="ProvCom.updateComuni('comune_emissione2_int2', 'provincia_emissione2_int2');">
										<option value="">seleziona</option>
									</select>
								</div>
							</div>
							<div class="spacer-no-border hidden-xs">&nbsp;</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label for="comune_emissione2_int2" data-modulo="doc-comune">Comune di rilascio*</label>
									<select name="comune_emissione2_int2" id="comune_emissione2_int2" class="form-control">
										<option value="">seleziona</option>
									</select>
								</div>
							</div>
						</div>
						<!-- FINE SECONDO DOCUMENTO DI IDENTITA' -->
						
						<!-- SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
						<div id="secondono_int2_ins" class="nodocumento" style="display:none">
							<div class="row">
								<div class="col-xs-12">
									<p>In alternativa, scegli uno dei documenti tra quelli elencati di seguito.<br>
										Dovrai allegarne una copia insieme alla documentazione da spedire.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6 form-group">
									<label for="altroDoc_int2">Tipo di documento*</label>
									<select name="altroDoc_int2" id="altroDoc_int2" class="form-control">
										<option value="">Seleziona il tipo di documento</option>
										<option  value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
										<option  value="13">Certificato di residenza</option>

									</select>
								</div>
							</div>
						</div>
						<!-- FINE SECONDO DOCUMENTO DI IDENTITA': NON LO POSSEGGO -->
						<div class="spacer-no-border hidden-xs">&nbsp;</div>						
						

			


			<!-- FINE ACCORDION CON INTESTATARIO -->

					</div>
				</div>
				</div>
	
			
			</div>
			

<script type="text/javascript">

// Controllo radiobutton condizionali
$(function(){

impostaValoriSelect();

function impostaValoriSelect() {
	var numInt = '2';
	
	
	
		impostaValoreSelect('stato_emissione2_int1', 'ITALIA');
	
	
	
	
	if(numInt > 1) {
		
	
	
		impostaValoreSelect('stato_emissione2_int2', 'ITALIA');
	
	
	
		
	}
	
	if(numInt > 2) {
		
	
	
	
	
		
	}
}

}); 			
	
</script>
			
			<div class="spacer-no-border">&nbsp;</div>
			<hr>
			<div class="row">
			    <div class="col-xs-12">
			        <div class="btn-console">
			            <a href="/webankpub/aol/step4.do?BV_UseBVCookie=Yes&fromPageName=5&save=true" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
			            <button id="btnSubmit" type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
			        </div>
			    </div>
			</div>
		
		</form>
</div>
	

<script type="text/javascript" src="/wbresp/js/aol/statiprovinciecomuni.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step4_bonifico.js?a=464"></script>

<script type="text/javascript" >
$(function() {
	noBack();
});
</script>

<script type="text/javascript" src="/wbresp/js/utilities.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>

