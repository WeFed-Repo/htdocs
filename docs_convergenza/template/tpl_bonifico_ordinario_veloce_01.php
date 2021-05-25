<!-- dubbi template: 
comportamento tabella gestione massimale---progettazione contempla fino a 560, sotto non ci sta come deve comportarsi?-->

<!--nuova sezione bonifici ordinari e veloci -->
<!-- titolo e stepper oggetti già esistenti-->
<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<span>Bonifico ordinario/veloce</span>
				</div>
                <?php 
					if ($site == "youweb") 
				
					{
				?>
                <div class="col-sm-4">	
			 		<div class="pager pull-right">
						<div class="circle current_page">1</div>
						<div class="circle ">2</div>
						<div class="circle ">3</div>
                        <div class="circle ">4</div>
					</div>
				</div>
                <?php
					}
				?>
			</div>
		</h1>
	</div>
</section>

<!-- selettore rapporto skinnato per selezione conti-->
<?php virtual ("/include/oggetti/Form/commons/021_Nuovo_selettore_rapporto_dispo/oggetto.php"); ?>

<!-- form as is con piccole modifiche -->
<section>
<form id="formBonificoNuovo" method="post" action="/WEBHT/pagamenti/bonifico.do" role="form" aria-labelledby="bonifico">
	<input type="hidden" name="nuovoBeneficiario" value="S" id="nuovoBeneficiario">
	<h3 class="titleSection titleForm">Importo da accreditare</h3>
	<div class="formWrapper">
		<div class="form-group">						
			<div class="row">
				<!--importo-->
			    <div class="form-field-input col-xs-12 col-sm-6">
					<label class="control-label" for="importo">Importo*</label>
					<a title="Verifica massimali" class="link-text fRight" onclick="apriGestioneMassimali()">Verifica massimali</a>
					<div class="form-field">
						<div class="editable-input">
							<!-- per il trattamento lato bck del campo importo vedere progettazione-->
							<input type="text" name="importo" value="" id="importo" class="form-control clear-x">
						</div>
					</div>
				</div>
				<!--valuta-->
				<div class="form-field-input col-xs-12 col-sm-6">
					<label class="control-label" for="valuta">Valuta*</label>
						<div class="form-field">				
							<select name="valuta" id="valuta" class="form-control">
								<option value="CHF">FRANCHI SVIZZERI (FS)</option>
								<option value="CZK">CORONA REPUB. CECA</option>
								<option value="DKK">CORONA DANIMARCA</option>
								<option value="GBP">STERLINA GRAN BRETAGNA</option>
								<option value="HKD">DOLLARO HONG KONG</option>
								<option value="HUF">FORINT UNGHERIA</option>
								<option value="JPY">YEN GIAPPONE</option>
								<option value="NOK">CORONA NORVEGIA</option>
								<option value="NZD">DOLLARO NUOVA ZELANDA</option>
								<option value="PLN">ZLOTY POLONIA (PLZ)</option>
								<option value="RON">NEW ROMANIAN LEU</option>
								<option value="SEK">CORONA SVEZIA</option>
								<option value="SGD">DOLLARO SINGAPORE</option>
								<option value="USD">DOLLARO USA</option>
								<option value="ZAR">RAND SUDAFRICA</option>
								<option value="EUR" selected="">EURO - UNIONE EUROPEA</option>
								<option value="AUD">DOLLARO AUSTRALIA</option>
								<option value="CAD">DOLLARO CANADA</option>
							</select>
						</div>
				</div>
		    </div>
		</div>
	</div>
	<h3 class="titleSection titleForm">Dati beneficiario</h3>

		<div class="formWrapper">
			<div class="form-group">	
				<div class="row">
					<!-- NOME BENEFICIARIO -->
					<div class="form-field-input col-xs-12 col-sm-6 ui-combobox-input">
						<label class="control-label">Nome e cognome/ Ragione sociale*</label>
						<input type="text" id="autocompletamentoBonificoInput" name="autocompletamentoBonificoInput" size="30" class="form-control ui-autocomplete-input " autocomplete="off" placeholder="Inserisci o seleziona un beneficiario" role="menu">
						<button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-text"></span>
						<!--modifica icona con rubrica -->
							<i class="icon icon-num_utili"></i>
						</button>
					</div>
						<!--destinazione -->
					<div class="form-field-input col-xs-12 col-sm-6">
						<label class="control-label with-tooltip">Destinazione bonifico*
						<a class="no-underline btn-icon">
							<i class="icon icon-info_fill marginLeft_10 icon-20 closeable" data-toggle="tooltip" title="Il campo Destinazione bonifico indica il Paese in cui risiede la banca del beneficiario"></i>
						</a>
						</label>
						
							<div class="form-field">
								<select name="paeseAppartenenzaCC" id="paeseAppartenenzaCC" class="form-control"><option value="seleziona">Seleziona</option>
									<option value="238" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ABU DHABI
									</option>
								
									<option value="2" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									AFGHANISTAN
									</option>
								
									<option value="239" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									AJMAM (EMIRATI ARABI)
									</option>
								
									<option value="87" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ALBANIA
									</option>
								
									<option value="3" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ALGERIA
									</option>
								
									<option value="148" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									AMERICAN SAMOA
									</option>
								
									<option value="4" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ANDORRA
									</option>
								
									<option value="133" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ANGOLA
									</option>
								
									<option value="209" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ANGUILLA
									</option>
								
									<option value="197" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ANTIGUA
									</option>
								
									<option value="251" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ANTILLE OLANDESI
									</option>
								
									<option value="5" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ARABIA SAUDITA
									</option>
								
									<option value="6" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ARGENTINA
									</option>
								
									<option value="266" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ARMENIA
									</option>
								
									<option value="212" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ARUBA
									</option>
								
									<option value="227" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ASCENSION
									</option>
								
									<option value="7" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									AUSTRALIA
									</option>
								
									<option value="8" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									AUSTRIA
									</option>
								
									<option value="268" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									AZERBAIGIAN
									</option>
								
									<option value="234" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									AZZORRE
									</option>
								
									<option value="160" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BAHAMAS
									</option>
								
									<option value="169" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									BAHREIN
									</option>
								
									<option value="130" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BANGLADESH
									</option>
								
									<option value="118" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BARBADOS
									</option>
								
									<option value="9" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									BELGIO
									</option>
								
									<option value="198" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BELIZE
									</option>
								
									<option value="158" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BENIN
									</option>
								
									<option value="207" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BERMUDE
									</option>
								
									<option value="97" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BHUTAN
									</option>
								
									<option value="264" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BIELORUSSIA
									</option>
								
									<option value="10" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BOLIVIA
									</option>
								
									<option value="295" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BONAIRE SAINT EUSTATIUS AND SABA
									</option>
								
									<option value="274" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									BOSNIA ERZEGOVINA
									</option>
								
									<option value="98" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BOTSWANA
									</option>
								
									<option value="280" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									BOUVET ISLAND
									</option>
								
									<option value="11" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BRASILE
									</option>
								
									<option value="125" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BRUNEI
									</option>
								
									<option value="12" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									BULGARIA
									</option>
								
									<option value="142" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BURKINA FASO
									</option>
								
									<option value="25" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									BURUNDI
									</option>
								
									<option value="119" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CAMERUN
									</option>
								
									<option value="139" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									CAMPIONE D'ITALIA
									</option>
								
									<option value="13" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CANADA
									</option>
								
									<option value="188" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CAPO VERDE
									</option>
								
									<option value="211" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CAYMAN
									</option>
								
									<option value="246" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									CEUTA
									</option>
								
									<option value="230" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CHAFARINAS
									</option>
								
									<option value="255" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CHAGOS O OIL ISLANDS
									</option>
								
									<option value="282" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CHRISTMAS ISLAND
									</option>
								
									<option value="144" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CIAD
									</option>
								
									<option value="15" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CILE
									</option>
								
									<option value="16" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CINA REP.POP.
									</option>
								
									<option value="101" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									CIPRO
									</option>
								
									<option value="93" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									CITTA' DEL VATICANO
									</option>
								
									<option value="223" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CLIPPERTON
									</option>
								
									<option value="281" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COCOS (KEELING) ISLAND
									</option>
								
									<option value="17" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COLOMBIA
									</option>
								
									<option value="176" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COMORE
									</option>
								
									<option value="145" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CONGO BRAZZAVILLE
									</option>
								
									<option value="18" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CONGO REPUBBLICA DEMOCRATICA
									</option>
								
									<option value="237" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COOK
									</option>
								
									<option value="146" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COSTA D'AVORIO
									</option>
								
									<option value="19" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									COSTARICA
									</option>
								
									<option value="261" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									CROAZIA
									</option>
								
									<option value="20" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CUBA
									</option>
								
									<option value="296" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									CURACAO
									</option>
								
									<option value="21" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									DANIMARCA
									</option>
								
									<option value="192" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									DOMINICA
									</option>
								
									<option value="240" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									DUBAI
									</option>
								
									<option value="287" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									EAST TIMOR
									</option>
								
									<option value="24" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ECUADOR
									</option>
								
									<option value="23" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									EGITTO
									</option>
								
									<option value="64" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									EL SALVADOR
									</option>
								
									<option value="277" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ERITREA
									</option>
								
									<option value="257" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									ESTONIA
									</option>
								
									<option value="26" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ETIOPIA
									</option>
								
									<option value="190" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									FALKLAND
									</option>
								
									<option value="204" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									FAR OER ISOLE
									</option>
								
									<option value="161" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									FIJI
									</option>
								
									<option value="27" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									FILIPPINE
									</option>
								
									<option value="28" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									FINLANDIA
									</option>
								
									<option value="29" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									FRANCIA
									</option>
								
									<option value="241" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									FUIJARAH
									</option>
								
									<option value="157" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GABON
									</option>
								
									<option value="164" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GAMBIA
									</option>
								
									<option value="267" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GEORGIA
									</option>
								
									<option value="94" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									GERMANIA
									</option>
								
									<option value="112" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GHANA
									</option>
								
									<option value="82" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GIAMAICA
									</option>
								
									<option value="88" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GIAPPONE
									</option>
								
									<option value="102" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GIBILTERRA
									</option>
								
									<option value="113" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GIBUTI
									</option>
								
									<option value="122" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GIORDANIA
									</option>
								
									<option value="228" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GOUGH
									</option>
								
									<option value="32" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									GRECIA
									</option>
								
									<option value="156" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GRENADA
									</option>
								
									<option value="200" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GROENLANDIA
									</option>
								
									<option value="214" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GUADALUPA
									</option>
								
									<option value="154" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUAM
									</option>
								
									<option value="33" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUATEMALA
									</option>
								
									<option value="123" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									GUAYANA FRANCESE
									</option>
								
									<option value="201" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUERNSEY
									</option>
								
									<option value="137" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUINEA
									</option>
								
									<option value="185" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUINEA BISSAU
									</option>
								
									<option value="167" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUINEA EQUATORIALE
									</option>
								
									<option value="159" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									GUYANA
									</option>
								
									<option value="34" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									HAITI
									</option>
								
									<option value="284" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									HEARD E MCDONALD ISLANDS
									</option>
								
									<option value="35" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									HONDURAS
									</option>
								
									<option value="103" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									HONG KONG
									</option>
								
									<option value="114" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									INDIA
									</option>
								
									<option value="129" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									INDONESIA
									</option>
								
									<option value="39" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									IRAN
									</option>
								
									<option value="38" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									IRAQ
									</option>
								
									<option value="40" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									IRLANDA
									</option>
								
									<option value="41" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									ISLANDA
									</option>
								
									<option value="292" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ISOLE ALAND
									</option>
								
									<option value="256" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ISOLE CAROLINE
									</option>
								
									<option value="182" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ISRAELE
									</option>
								
									<option value="86" data-tipo-paese="SEPA" data-iban-obbligatorio="true" selected="">
									ITALIA
									</option>
								
									<option value="202" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									JERSEY
									</option>
								
									<option value="135" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									KAMPUCHEA
									</option>
								
									<option value="269" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									KAZAKISTAN
									</option>
								
									<option value="116" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									KENYA
									</option>
								
									<option value="270" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									KIRGHIZISTAN
									</option>
								
									<option value="194" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									KIRIBATI
									</option>
								
									<option value="291" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									KOSOVO
									</option>
								
									<option value="126" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									KUWAIT
									</option>
								
									<option value="136" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									LAOS
									</option>
								
									<option value="89" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									LESOTHO
									</option>
								
									<option value="258" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									LETTONIA
									</option>
								
									<option value="95" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									LIBANO
									</option>
								
									<option value="44" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									LIBERIA
									</option>
								
									<option value="45" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									LIBIA
									</option>
								
									<option value="90" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									LIECHTENSTEIN
									</option>
								
									<option value="259" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									LITUANIA
									</option>
								
									<option value="92" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									LUSSEMBURGO
									</option>
								
									<option value="59" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MACAO
									</option>
								
									<option value="278" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MACEDONIA
									</option>
								
									<option value="104" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MADAGASCAR
									</option>
								
									<option value="235" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MADEIRA
									</option>
								
									<option value="56" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MALAWI
									</option>
								
									<option value="106" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MALAYSIA
									</option>
								
									<option value="127" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MALDIVE
									</option>
								
									<option value="149" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MALI
									</option>
								
									<option value="105" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									MALTA
									</option>
								
									<option value="203" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MANISOLA
									</option>
								
									<option value="219" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MARIANNE SETT ISOLE
									</option>
								
									<option value="107" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MAROCCO
									</option>
								
									<option value="217" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MARSHALL
									</option>
								
									<option value="213" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MARTINICA
									</option>
								
									<option value="141" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MAURITANIA
									</option>
								
									<option value="128" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MAURITIUS
									</option>
								
									<option value="226" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MAYOTTE
									</option>
								
									<option value="231" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MELILLA
									</option>
								
									<option value="46" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MESSICO
									</option>
								
									<option value="215" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MICRONESIA STATI FED
									</option>
								
									<option value="177" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MIDWAY ISLANDS
									</option>
								
									<option value="265" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MOLDAVIA
									</option>
								
									<option value="110" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MONGOLIA
									</option>
								
									<option value="208" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MONSERRAT
									</option>
								
									<option value="290" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									MONTENEGRO
									</option>
								
									<option value="134" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MOZAMBICO
									</option>
								
									<option value="83" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									MYANMAR (EX BIRMANIA)
									</option>
								
									<option value="206" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NAMIBIA
									</option>
								
									<option value="109" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NAURU
									</option>
								
									<option value="115" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NEPAL
									</option>
								
									<option value="47" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NICARAGUA
									</option>
								
									<option value="150" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NIGER
									</option>
								
									<option value="117" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NIGERIA
									</option>
								
									<option value="205" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NIUE
									</option>
								
									<option value="48" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									NORVEGIA
									</option>
								
									<option value="253" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NUOVA CALEDONIA
									</option>
								
									<option value="49" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									NUOVA ZELANDA
									</option>
								
									<option value="50" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									OLANDA
									</option>
								
									<option value="163" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									OMAN
									</option>
								
									<option value="36" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									PAKISTAN
									</option>
								
									<option value="216" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PALAU
									</option>
								
									<option value="279" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									PALESTINATERRITORI AUTONOMI DI
									</option>
								
									<option value="51" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PANAMA
									</option>
								
									<option value="186" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PAPUA NUOVA GUINEA
									</option>
								
									<option value="52" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PARAGUAY
									</option>
								
									<option value="232" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PENON DE ALHUCEMAS
									</option>
								
									<option value="233" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PENON DE VELEZ DE LA GOMERA
									</option>
								
									<option value="53" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PERU
									</option>
								
									<option value="175" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PITCAIRN
									</option>
								
									<option value="225" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									POLINESIA FRANCESE
									</option>
								
									<option value="54" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									POLONIA
									</option>
								
									<option value="55" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									PORTOGALLO
									</option>
								
									<option value="220" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									PORTORICO
									</option>
								
									<option value="91" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									PRINCIPATO DI MONACO
									</option>
								
									<option value="168" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									QATAR
									</option>
								
									<option value="242" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									RAS EL KHAIMAH
									</option>
								
									<option value="31" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									REGNO UNITO
									</option>
								
									<option value="275" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									REPUBBLICA CECA
									</option>
								
									<option value="143" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									REPUBBLICA CENTRAFRICANA
									</option>
								
									<option value="63" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									REPUBBLICA DOMINICANA
									</option>
								
									<option value="78" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									REPUBBLICA SUDAFRICANA
									</option>
								
									<option value="247" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									REUNION
									</option>
								
									<option value="61" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									ROMANIA
									</option>
								
									<option value="262" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									RUSSIA
									</option>
								
									<option value="151" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									RWANDA
									</option>
								
									<option value="166" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SAHARA OCCIDENTALE
									</option>
								
									<option value="222" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SAINT MARTIN SETTENTRIONALE
									</option>
								
									<option value="191" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SALOMONE
									</option>
								
									<option value="131" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SAMOA OCCIDENTALI
									</option>
								
									<option value="37" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									SAN MARINO
									</option>
								
									<option value="187" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SAO TOME
									</option>
								
									<option value="152" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SENEGAL
									</option>
								
									<option value="289" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									SERBIA
									</option>
								
									<option value="189" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SEYCHELLES
									</option>
								
									<option value="243" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									SHARJAH
									</option>
								
									<option value="153" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SIERRA LEONE
									</option>
								
									<option value="147" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SINGAPORE
									</option>
								
									<option value="294" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SINT MAARTEN (DUTCH PART)
									</option>
								
									<option value="276" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									SLOVACCHIA
									</option>
								
									<option value="260" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									SLOVENIA
									</option>
								
									<option value="66" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SOMALIA
									</option>
								
									<option value="283" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SOUTH GEORGIA E SOUTH SANDWICH
									</option>
								
									<option value="67" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									SPAGNA
									</option>
								
									<option value="85" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SRI LANKA
									</option>
								
									<option value="195" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ST KITTS E NEVIS
									</option>
								
									<option value="254" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ST.HELENA
									</option>
								
									<option value="199" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ST.LUCIA
									</option>
								
									<option value="248" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									ST.PIERRE E MIQUELON
									</option>
								
									<option value="196" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ST.VINCENT
									</option>
								
									<option value="69" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									STATI UNITI D'AMERICA
									</option>
								
									<option value="84" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SUD COREA (COREA REP.DI)
									</option>
								
									<option value="70" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SUDAN
									</option>
								
									<option value="124" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SURINAME
									</option>
								
									<option value="286" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									SVALBARD E JAN MAYEN ISLANDS
									</option>
								
									<option value="68" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									SVEZIA
									</option>
								
									<option value="71" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									SVIZZERA
									</option>
								
									<option value="138" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									SWAZILAND NGWANE
									</option>
								
									<option value="272" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TAGIKISTAN
									</option>
								
									<option value="22" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TAIWAN
									</option>
								
									<option value="57" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TANZANIA
									</option>
								
									<option value="245" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TERR BRITANNICO OCEANO INDIANO
									</option>
								
									<option value="180" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TERRITORIO ANTARTICO BRITANNICO
									</option>
								
									<option value="183" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									TERRITORIO ANTARTICO FRANCESE
									</option>
								
									<option value="72" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									THAILANDIA
									</option>
								
									<option value="155" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TOGO
									</option>
								
									<option value="236" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TOKELAU
									</option>
								
									<option value="162" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TONGA
									</option>
								
									<option value="120" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TRINIDAD
									</option>
								
									<option value="229" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TRISTAN DA CUNHA
									</option>
								
									<option value="75" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									TUNISIA
									</option>
								
									<option value="76" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									TURCHIA
									</option>
								
									<option value="273" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TURKMENISTAN
									</option>
								
									<option value="210" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TURKS E CAICOS
									</option>
								
									<option value="193" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									TUVALU'
									</option>
								
									<option value="263" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									UCRAINA
									</option>
								
									<option value="132" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									UGANDA
									</option>
								
									<option value="244" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									UMM AL QAIWAIN
									</option>
								
									<option value="77" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
									UNGHERIA
									</option>
								
									<option value="80" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									URUGUAY
									</option>
								
									<option value="271" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									UZBEKISTAN
									</option>
								
									<option value="121" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									VANUATU
									</option>
								
									<option value="81" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									VENEZUELA
									</option>
								
									<option value="221" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									VERGINI AMERICANEISOLE
									</option>
								
									<option value="249" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
									VERGINI BRITANNICHEISOLE
									</option>
								
									<option value="62" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									VIETNAM REPUBBLICA DEMOCRATICA
									</option>
								
									<option value="218" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									WALLIS E FUTUNA
									</option>
								
									<option value="42" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									YEMEN
									</option>
								
									<option value="58" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ZAMBIA
									</option>
								
									<option value="73" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
									ZIMBABWE
									</option></select>
							</div>
					</div>
				</div>
			</div>		
			<!--eventuale riga iban -->
			<div class="form-group" id="formGroupIban" style="display: block;">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
					<label class="control-label">Iban*</label>
					<input type="text" name="iban" value="" id="iban" class="form-control clear-x  iban-to-fill">
					</div>
				</div>
			</div>
			<!--eventuale riga con swift e numero conto-->
			<div class="form-group" id="formGroupSwift" style="display:none">
		          <div class="row"> 
		            <!-- NUMC CONTO -->
		            <div class="form-field-input col-xs-6">
		              <label class="control-label">
					  	Numero conto* 
						<a class="no-underline btn-icon" id="modalUsa" onclick="apriModaleUsa()">
							<i class="icon icon-info_fill marginLeft_10 icon-20 closeable"></i>
						</a>    
		              </label>
		              <div class="form-field">
		                <input type="text" name="numeroConto" value="" id="numeroConto" class="form-control clear-x" >
		              </div>
		            </div>
		            <!-- BIC/SWIFT -->
		            <div class="form-field-input col-xs-6">
		              <label class="control-label">
					  	BIC/Swift*     
		              </label>
		              <div class="form-field">
		                <input type="text" name="bic" value="" id="bic" class="form-control clear-x">
		              </div>
		            </div>
		          </div>
		        </div>
			<div class="form-group" style="display:none" id="datiBeneficiarioValEstera">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<label class="control-label" for="causale">
							Indirizzo beneficiario*
						</label> 
						<div class="form-field">
							<input type="text" name="indirizzoBeneficiario" maxlength="40" value="" id="indirizzoBeneficiario" class="form-control clear-x">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<label class="control-label" for="localitaBeneficiario">
							Citt&agrave;/Località beneficiario*
						</label> 
						<div class="form-field">
						    <input type="text" name="localitaBeneficiario" maxlength="40" value="" id="localitaBeneficiario" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<label class="control-label" for="localitaBeneficiario">Nazione beneficiario*</label> 
						<select name="nazioneBeneficiario" id="nazioneBeneficiario" class="form-control">
							<option value="" selected="selected">Seleziona</option>
                            <option value="238" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
								ABU DHABI
							</option>
							<option value="2" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
									AFGHANISTAN
							</option>
							<option value="239" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
									AJMAM (EMIRATI ARABI)
							</option>
							<option value="87" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
									ALBANIA
							</option>
							option value="3" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
									ALGERIA
							</option>
							<option value="148" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
									AMERICAN SAMOA
							</option>
								
									<option value="4" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										ANDORRA
									</option>
								
									<option value="133" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ANGOLA
									</option>
								
									<option value="209" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ANGUILLA
									</option>
								
									<option value="197" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ANTIGUA
									</option>
								
									<option value="251" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ANTILLE OLANDESI
									</option>
								
									<option value="5" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										ARABIA SAUDITA
									</option>
								
									<option value="6" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ARGENTINA
									</option>
								
									<option value="266" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ARMENIA
									</option>
								
									<option value="212" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ARUBA
									</option>
								
									<option value="227" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ASCENSION
									</option>
								
									<option value="7" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										AUSTRALIA
									</option>
								
									<option value="8" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										AUSTRIA
									</option>
								
									<option value="268" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										AZERBAIGIAN
									</option>
								
									<option value="234" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										AZZORRE
									</option>
								
									<option value="160" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BAHAMAS
									</option>
								
									<option value="169" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										BAHREIN
									</option>
								
									<option value="130" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BANGLADESH
									</option>
								
									<option value="118" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BARBADOS
									</option>
								
									<option value="9" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										BELGIO
									</option>
								
									<option value="198" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BELIZE
									</option>
								
									<option value="158" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BENIN
									</option>
								
									<option value="207" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BERMUDE
									</option>
								
									<option value="97" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BHUTAN
									</option>
								
									<option value="264" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BIELORUSSIA
									</option>
								
									<option value="10" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BOLIVIA
									</option>
								
									<option value="295" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BONAIRE SAINT EUSTATIUS AND SABA
									</option>
								
									<option value="274" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										BOSNIA ERZEGOVINA
									</option>
								
									<option value="98" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BOTSWANA
									</option>
								
									<option value="280" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										BOUVET ISLAND
									</option>
								
									<option value="11" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BRASILE
									</option>
								
									<option value="125" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BRUNEI
									</option>
								
									<option value="12" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										BULGARIA
									</option>
								
									<option value="142" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BURKINA FASO
									</option>
								
									<option value="25" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										BURUNDI
									</option>
								
									<option value="119" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CAMERUN
									</option>
								
									<option value="139" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										CAMPIONE D'ITALIA
									</option>
								
									<option value="13" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CANADA
									</option>
								
									<option value="188" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CAPO VERDE
									</option>
								
									<option value="211" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CAYMAN
									</option>
								
									<option value="246" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										CEUTA
									</option>
								
									<option value="230" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CHAFARINAS
									</option>
								
									<option value="255" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CHAGOS O OIL ISLANDS
									</option>
								
									<option value="282" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CHRISTMAS ISLAND
									</option>
								
									<option value="144" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CIAD
									</option>
								
									<option value="15" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CILE
									</option>
								
									<option value="16" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CINA REP.POP.
									</option>
								
									<option value="101" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										CIPRO
									</option>
								
									<option value="93" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										CITTA' DEL VATICANO
									</option>
								
									<option value="223" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CLIPPERTON
									</option>
								
									<option value="281" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COCOS (KEELING) ISLAND
									</option>
								
									<option value="17" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COLOMBIA
									</option>
								
									<option value="176" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COMORE
									</option>
								
									<option value="145" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CONGO BRAZZAVILLE
									</option>
								
									<option value="18" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CONGO REPUBBLICA DEMOCRATICA
									</option>
								
									<option value="237" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COOK
									</option>
								
									<option value="146" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COSTA D'AVORIO
									</option>
								
									<option value="19" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										COSTARICA
									</option>
								
									<option value="261" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										CROAZIA
									</option>
								
									<option value="20" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CUBA
									</option>
								
									<option value="296" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										CURACAO
									</option>
								
									<option value="21" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										DANIMARCA
									</option>
								
									<option value="192" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										DOMINICA
									</option>
								
									<option value="240" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										DUBAI
									</option>
								
									<option value="287" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										EAST TIMOR
									</option>
								
									<option value="24" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ECUADOR
									</option>
								
									<option value="23" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										EGITTO
									</option>
								
									<option value="64" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										EL SALVADOR
									</option>
								
									<option value="277" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ERITREA
									</option>
								
									<option value="257" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										ESTONIA
									</option>
								
									<option value="26" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ETIOPIA
									</option>
								
									<option value="190" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										FALKLAND
									</option>
								
									<option value="204" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										FAR OER ISOLE
									</option>
								
									<option value="161" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										FIJI
									</option>
								
									<option value="27" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										FILIPPINE
									</option>
								
									<option value="28" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										FINLANDIA
									</option>
								
									<option value="29" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										FRANCIA
									</option>
								
									<option value="241" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										FUIJARAH
									</option>
								
									<option value="157" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GABON
									</option>
								
									<option value="164" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GAMBIA
									</option>
								
									<option value="267" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GEORGIA
									</option>
								
									<option value="94" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										GERMANIA
									</option>
								
									<option value="112" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GHANA
									</option>
								
									<option value="82" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GIAMAICA
									</option>
								
									<option value="88" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GIAPPONE
									</option>
								
									<option value="102" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GIBILTERRA
									</option>
								
									<option value="113" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GIBUTI
									</option>
								
									<option value="122" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GIORDANIA
									</option>
								
									<option value="228" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GOUGH
									</option>
								
									<option value="32" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										GRECIA
									</option>
								
									<option value="156" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GRENADA
									</option>
								
									<option value="200" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GROENLANDIA
									</option>
								
									<option value="214" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GUADALUPA
									</option>
								
									<option value="154" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUAM
									</option>
								
									<option value="33" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUATEMALA
									</option>
								
									<option value="123" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										GUAYANA FRANCESE
									</option>
								
									<option value="201" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUERNSEY
									</option>
								
									<option value="137" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUINEA
									</option>
								
									<option value="185" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUINEA BISSAU
									</option>
								
									<option value="167" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUINEA EQUATORIALE
									</option>
								
									<option value="159" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										GUYANA
									</option>
								
									<option value="34" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										HAITI
									</option>
								
									<option value="284" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										HEARD E MCDONALD ISLANDS
									</option>
								
									<option value="35" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										HONDURAS
									</option>
								
									<option value="103" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										HONG KONG
									</option>
								
									<option value="114" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										INDIA
									</option>
								
									<option value="129" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										INDONESIA
									</option>
								
									<option value="39" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										IRAN
									</option>
								
									<option value="38" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										IRAQ
									</option>
								
									<option value="40" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										IRLANDA
									</option>
								
									<option value="41" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										ISLANDA
									</option>
								
									<option value="292" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										ISOLE ALAND
									</option>
								
									<option value="256" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ISOLE CAROLINE
									</option>
								
									<option value="182" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										ISRAELE
									</option>
								
									<option value="86" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										ITALIA
									</option>
								
									<option value="202" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										JERSEY
									</option>
								
									<option value="135" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										KAMPUCHEA
									</option>
								
									<option value="269" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										KAZAKISTAN
									</option>
								
									<option value="116" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										KENYA
									</option>
								
									<option value="270" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										KIRGHIZISTAN
									</option>
								
									<option value="194" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										KIRIBATI
									</option>
								
									<option value="291" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										KOSOVO
									</option>
								
									<option value="126" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										KUWAIT
									</option>
								
									<option value="136" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										LAOS
									</option>
								
									<option value="89" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										LESOTHO
									</option>
								
									<option value="258" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										LETTONIA
									</option>
								
									<option value="95" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										LIBANO
									</option>
								
									<option value="44" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										LIBERIA
									</option>
								
									<option value="45" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										LIBIA
									</option>
								
									<option value="90" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										LIECHTENSTEIN
									</option>
								
									<option value="259" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										LITUANIA
									</option>
								
									<option value="92" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										LUSSEMBURGO
									</option>
								
									<option value="59" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MACAO
									</option>
								
									<option value="278" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MACEDONIA
									</option>
								
									<option value="104" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MADAGASCAR
									</option>
								
									<option value="235" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MADEIRA
									</option>
								
									<option value="56" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MALAWI
									</option>
								
									<option value="106" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MALAYSIA
									</option>
								
									<option value="127" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MALDIVE
									</option>
								
									<option value="149" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MALI
									</option>
								
									<option value="105" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										MALTA
									</option>
								
									<option value="203" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MANISOLA
									</option>
								
									<option value="219" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MARIANNE SETT ISOLE
									</option>
								
									<option value="107" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MAROCCO
									</option>
								
									<option value="217" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MARSHALL
									</option>
								
									<option value="213" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MARTINICA
									</option>
								
									<option value="141" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MAURITANIA
									</option>
								
									<option value="128" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MAURITIUS
									</option>
								
									<option value="226" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MAYOTTE
									</option>
								
									<option value="231" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MELILLA
									</option>
								
									<option value="46" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MESSICO
									</option>
								
									<option value="215" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MICRONESIA STATI FED
									</option>
								
									<option value="177" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MIDWAY ISLANDS
									</option>
								
									<option value="265" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MOLDAVIA
									</option>
								
									<option value="110" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MONGOLIA
									</option>
								
									<option value="208" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MONSERRAT
									</option>
								
									<option value="290" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										MONTENEGRO
									</option>
								
									<option value="134" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MOZAMBICO
									</option>
								
									<option value="83" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										MYANMAR (EX BIRMANIA)
									</option>
								
									<option value="206" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NAMIBIA
									</option>
								
									<option value="109" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NAURU
									</option>
								
									<option value="115" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NEPAL
									</option>
								
									<option value="47" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NICARAGUA
									</option>
								
									<option value="150" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NIGER
									</option>
								
									<option value="117" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NIGERIA
									</option>
								
									<option value="205" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NIUE
									</option>
								
									<option value="48" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										NORVEGIA
									</option>
								
									<option value="253" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NUOVA CALEDONIA
									</option>
								
									<option value="49" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										NUOVA ZELANDA
									</option>
								
									<option value="50" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										OLANDA
									</option>
								
									<option value="163" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										OMAN
									</option>
								
									<option value="36" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										PAKISTAN
									</option>
								
									<option value="216" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PALAU
									</option>
								
									<option value="279" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										PALESTINATERRITORI AUTONOMI DI
									</option>
								
									<option value="51" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PANAMA
									</option>
								
									<option value="186" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PAPUA NUOVA GUINEA
									</option>
								
									<option value="52" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PARAGUAY
									</option>
								
									<option value="232" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PENON DE ALHUCEMAS
									</option>
								
									<option value="233" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PENON DE VELEZ DE LA GOMERA
									</option>
								
									<option value="53" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PERU
									</option>
								
									<option value="175" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PITCAIRN
									</option>
								
									<option value="225" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										POLINESIA FRANCESE
									</option>
								
									<option value="54" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										POLONIA
									</option>
								
									<option value="55" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										PORTOGALLO
									</option>
								
									<option value="220" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										PORTORICO
									</option>
								
									<option value="91" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										PRINCIPATO DI MONACO
									</option>
								
									<option value="168" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										QATAR
									</option>
								
									<option value="242" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										RAS EL KHAIMAH
									</option>
								
									<option value="31" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										REGNO UNITO
									</option>
								
									<option value="275" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										REPUBBLICA CECA
									</option>
								
									<option value="143" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										REPUBBLICA CENTRAFRICANA
									</option>
								
									<option value="63" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										REPUBBLICA DOMINICANA
									</option>
								
									<option value="78" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										REPUBBLICA SUDAFRICANA
									</option>
								
									<option value="247" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										REUNION
									</option>
								
									<option value="61" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										ROMANIA
									</option>
								
									<option value="262" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										RUSSIA
									</option>
								
									<option value="151" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										RWANDA
									</option>
								
									<option value="166" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SAHARA OCCIDENTALE
									</option>
								
									<option value="222" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SAINT MARTIN SETTENTRIONALE
									</option>
								
									<option value="191" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SALOMONE
									</option>
								
									<option value="131" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SAMOA OCCIDENTALI
									</option>
								
									<option value="37" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SAN MARINO
									</option>
								
									<option value="187" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SAO TOME
									</option>
								
									<option value="152" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SENEGAL
									</option>
								
									<option value="289" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										SERBIA
									</option>
								
									<option value="189" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SEYCHELLES
									</option>
								
									<option value="243" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										SHARJAH
									</option>
								
									<option value="153" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SIERRA LEONE
									</option>
								
									<option value="147" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SINGAPORE
									</option>
								
									<option value="294" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SINT MAARTEN (DUTCH PART)
									</option>
								
									<option value="276" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SLOVACCHIA
									</option>
								
									<option value="260" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SLOVENIA
									</option>
								
									<option value="66" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SOMALIA
									</option>
								
									<option value="283" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SOUTH GEORGIA E SOUTH SANDWICH
									</option>
								
									<option value="67" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SPAGNA
									</option>
								
									<option value="85" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SRI LANKA
									</option>
								
									<option value="195" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ST KITTS E NEVIS
									</option>
								
									<option value="254" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ST.HELENA
									</option>
								
									<option value="199" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ST.LUCIA
									</option>
								
									<option value="248" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										ST.PIERRE E MIQUELON
									</option>
								
									<option value="196" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ST.VINCENT
									</option>
								
									<option value="69" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										STATI UNITI D'AMERICA
									</option>
								
									<option value="84" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SUD COREA (COREA REP.DI)
									</option>
								
									<option value="70" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SUDAN
									</option>
								
									<option value="124" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SURINAME
									</option>
								
									<option value="286" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										SVALBARD E JAN MAYEN ISLANDS
									</option>
								
									<option value="68" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SVEZIA
									</option>
								
									<option value="71" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										SVIZZERA
									</option>
								
									<option value="138" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										SWAZILAND NGWANE
									</option>
								
									<option value="272" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TAGIKISTAN
									</option>
								
									<option value="22" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TAIWAN
									</option>
								
									<option value="57" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TANZANIA
									</option>
								
									<option value="245" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TERR BRITANNICO OCEANO INDIANO
									</option>
								
									<option value="180" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TERRITORIO ANTARTICO BRITANNICO
									</option>
								
									<option value="183" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										TERRITORIO ANTARTICO FRANCESE
									</option>
								
									<option value="72" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										THAILANDIA
									</option>
								
									<option value="155" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TOGO
									</option>
								
									<option value="236" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TOKELAU
									</option>
								
									<option value="162" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TONGA
									</option>
								
									<option value="120" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TRINIDAD
									</option>
								
									<option value="229" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TRISTAN DA CUNHA
									</option>
								
									<option value="75" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										TUNISIA
									</option>
								
									<option value="76" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										TURCHIA
									</option>
								
									<option value="273" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TURKMENISTAN
									</option>
								
									<option value="210" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TURKS E CAICOS
									</option>
								
									<option value="193" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										TUVALU'
									</option>
								
									<option value="263" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										UCRAINA
									</option>
								
									<option value="132" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										UGANDA
									</option>
								
									<option value="244" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										UMM AL QAIWAIN
									</option>
								
									<option value="77" data-tipo-paese="SEPA" data-iban-obbligatorio="true"> 
										UNGHERIA
									</option>
								
									<option value="80" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										URUGUAY
									</option>
								
									<option value="271" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										UZBEKISTAN
									</option>
								
									<option value="121" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										VANUATU
									</option>
								
									<option value="81" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										VENEZUELA
									</option>
								
									<option value="221" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										VERGINI AMERICANEISOLE
									</option>
								
									<option value="249" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true"> 
										VERGINI BRITANNICHEISOLE
									</option>
								
									<option value="62" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										VIETNAM REPUBBLICA DEMOCRATICA
									</option>
								
									<option value="218" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										WALLIS E FUTUNA
									</option>
								
									<option value="42" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										YEMEN
									</option>
								
									<option value="58" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ZAMBIA
									</option>
								
									<option value="73" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false"> 
										ZIMBABWE
									</option></select>
					</div>
				</div>
			</div>
			<!--eventuale riga per la modfica o aggiunta beneficiario in caso di digitazione in campo precompilato di un beneficiario già esistente -->
			<div id="creaModificaBeneficiario">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-8 col-lg-6">
							<div class="row">
								<div class="form-field-input col-xs-12 col-sm-6" id="updateRadio" style="display:none">
								    <label>
										<input type="radio" name="modcontatto" value="a" > 
										Aggiorna beneficiario
									</label>
								</div>
								<div class="form-field-input col-xs-12 col-sm-6">
									<label id="creaCheck">
										<input type="checkbox" name="memorizza" value="S" id="memorizza"> 
										Crea nuovo beneficiario
									</label>
									<label style="display:none" id="creaRadio">
										<input type="radio" name="modcontatto" value="c"> 
										Crea nuovo beneficiario
									</label>
								</div>
							</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-6" style="display: none;" id="aggBeneficiario">
							<label class="control-label">Nickname*</label>
								<div class="form-field">
									<input type="text" name="nickname" value="" id="nickname" class="form-control clear-x">		
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!--causale -->
	<h3 class="titleSection titleForm">Motivo del pagamento</h3>
		<div class="formWrapper">
			<div class="form-group">
				<div class="row"> 
					<div class="form-field-input col-xs-12">
						<label class="control-label">
						Causale* (min 4, max 140 caratteri; non sono ammesse vocali accentate; caratteri speciali consentiti / - ? : ( ) . , ’ +)     
						</label>
						<div class="form-field"><input type="text" name="causale" maxlength="140" value="" id="causale" class="form-control clear-x">
						</div>
					</div>
				</div>
			</div>
		</div>
</form>
<p>Clicca su <strong>Prosegui</strong> per scegliere i tempi di accredito del tuo bonifico: <strong>ORDINARIO o VELOCE</strong> (Urgente, Istantaneo)</p>

<!-- BOTTONE USATO IN STEP DISPOSITIVE-->

  <div class="form-group btnWrapper clearfix">
    <?php
    if ($site == 'webank') {
      print '<div class="stepBtn">Step <strong>1</strong> di x</div>';
      }
    ?>
       <div class="btn-align-right">
  		 	<div>
				<a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
      </div>
 </div>

<p class="note">
I campi contrassegnati da asterisco (*) sono obbligatori.<br>
La banca è sollevata da ogni responsabilità derivante da un’errata digitazione dei dati obbligatori inseriti				
</p>
</section>

<script type="text/javascript">
	//script di emulazione dei comportamenti
	var inputAutocomplete =  $("#autocompletamentoBonificoInput"),
		//funzione che controlla se è un nuovo beneficiario
		isNuovoBeneficiario = function() {return $("#nuovoBeneficiario").val()=="S"},
		//funzione che controlla se valuta estera o destinazione diversa da Italia	
		isValutaEuro = 	function(){return $("#valuta").val()=="EUR"},
		isDestItalia = function(){return $("#paeseAppartenenzaCC").val()=="86"},
		//funzione che controlla se iban obbligatorio
		isIbanObbligatorio = function() {return $('#paeseAppartenenzaCC option:selected').attr("data-iban-obbligatorio")==="true"}			
        showHideIban = function() {
			if(!(isIbanObbligatorio())){ 							
			$('#formGroupSwift').show();
			$('#formGroupIban').hide();
			}else{									
					$('#formGroupSwift').hide();
					$('#formGroupIban').show();
			}
		}
	//se valuta diversa da EURO o destinazione diversa da Italia
	$('#valuta,#paeseAppartenenzaCC').on("change",function(){
		!isValutaEuro() || !isDestItalia() ? $("#datiBeneficiarioValEstera").show() : $("#datiBeneficiarioValEstera").hide();
		$("#nazioneBeneficiario").val($('#paeseAppartenenzaCC').val());
	})
	$('#paeseAppartenenzaCC').on("change",function(){
		showHideIban();
		$(this).val()=== "69" ?  $("#modalUsa").show() :  $("#modalUsa").hide();

	})
	
	//check su aggiungi a rubrica
	$('#memorizza').on("click",function(){
		$(this).is(":checked") ? $("#aggBeneficiario").show() : $("#aggBeneficiario").hide()
	})
	$('input[name="modcontatto"]').on("click",function(){
		$(this).val()==="c" ? $("#aggBeneficiario").show() : $("#aggBeneficiario").hide();
	
	})
   //quando perde il focus il campo, se è un nuovo beneficiario deve comparire la sezione crea nuovo beneficiario
	inputAutocomplete.on("blur", function(){
		if($(this).val()==="") {
			$("#nuovoBeneficiario").val("S");
		}
		if(isNuovoBeneficiario()) {
			resetFields();
			$("#updateRadio,#creaRadio,#aggBeneficiario").hide();
			$("#creaCheck,#creaModificaBeneficiario").show();
			
		}
	})
	
	//quando viene modificato un dato dei beneficiari compaiono i radio per aggiungere/modificare la rubrica
  	$('#iban,#numeroConto,#bic').on("keydown", function() {
		if(!isNuovoBeneficiario()) {
			$("#creaModificaBeneficiario,#updateRadio,#creaRadio").show();
			$("#creaCheck,#aggBeneficiario").val("").hide();
			$("input[name='modcontatto']").prop('checked',false)
			
		}
	})
	
	//autocomplete modificato nel comportamento: ora se vi è un nuovo beneficiario non compare la tendina e si comporta come un campo di input
	//Si riporta qui il solo comportamento della finta select. 
	//Integrare come necessario

    // chiamata ajax iniziale per recuperare la lista beneficiari -as is in produzione
	var lista,
		isContattoEsistente = false;
	$(function() {
		$.ajax({
			type: "POST",
			//url: getPathContext()+"/pagamenti/beneficiariBonifico.do", url: "/include/bonificoBeneficiari2.php",
			url: "/include/bonificoBeneficiari2.php",
			data: "stringaRicerca="+$("#autocompletamento").val(),      
			dataType: 'json',
			success: function(result){
			lista = result; 
		}
	}); 
	 
	
	isOpenMenu = false;
       
    inputAutocomplete.next('button').on('click',function(event){
		if(!isOpenMenu) {
			inputAutocomplete.autocomplete("search","");
            isOpenMenu = true;
          }
          else {
            inputAutocomplete.autocomplete("close");
            isOpenMenu = false;
          }
    });
    $( "#autocompletamentoBonificoInput" ).autocomplete({
        minLength: 0, // FIXME adeguare a valore opportuno
        source: function(req, resp) {
			crea(req, resp);
        },
       
        select: function( event, ui ) { 									
 		  updateField(ui.item.nome,ui.item.id,ui.item.iban,ui);
		  $("#creaModificaBeneficiario").hide();
        },
        create: function(event, ui) {
	        $(this).data('ui-autocomplete')._renderItem  = function( ul, item ) {
		        return $( "<li>")
		        .append( "<div>" + item.label + '<span class="sep">-</span>'  + item.nome + '<br>')
		        .append( item.iban?item.iban:item.numCCEstero + " - " + item.bic)
		        .addClass('ui-menu-item')
		        .appendTo( ul );
	        }
         },
		 close: function(){
			isOpenMenu = false;
		 }

      });
  });
  
  function crea(req, resp) {
	    var re = $.ui.autocomplete.escapeRegex(req.term);
	    var matcher = new RegExp( re, "i" );   
      resp($.map(lista, function(item,event) {
		
        if(matcher.test(item.nickName) || matcher.test(item.intestazione) ){
			// valori da memorizzare 
          	return {
          		id: item.codice, 
	            	label: item.nickName, 
	            	nome: item.intestazione, 
	            	descrizione: '', 
	            	iban: item.contoCorrente.codIban, 
	            	sepa: item.isSepa, 
	            	nazioneConto: item.nazioneConto,
	            	bic: item.bic,
                    numCCEstero: item.numCCEstero,
                  
                    nazioneBeneficiario: (item.recapito!=undefined)? item.nazioneResidenzaBeneficiario:"",
	            	indirizzoBeneficiario: (item.recapito!=undefined)? item.recapito.indirizzo:"",
                    localitaBeneficiario: (item.recapito!=undefined)? item.recapito.comune:""                  
          	};
        }
		//se non c'è alcun match è un nuovo intestatario, setto il campo hidden e resetto i campi eventualmente precompilati
		else {
			$("#nuovoBeneficiario").val("S");
			resetFields();
		}
     }));
  }
  
  function resetFields() {
	$("#creaModificaBeneficiario").show();
	$('#paeseAppartenenzaCC').val('86');
	$('#numeroConto,#bic,#iban').val('');
	$('#formGroupSwift,#datiBeneficiarioValEstera,#updateRadio,#aggBeneficiario').hide();
	$('#formGroupIban').show();
	
	
  }
 /*
  funzione chiamata quando si seleziona un valore sulla combobox del beneficiario, già presente in produzione
  */
function updateField(value,idEl,iban,ui) { 
	$("#autocompletamentoBonificoInput").val(value);
	$("#nuovoBeneficiario").val('N');
	$("#iban").val(iban); 											
	$("#numeroConto").val(ui.item.numCCEstero);
	$("#bic").val(ui.item.bic);
	$("#paeseAppartenenzaCC option").each(function(i){
		$(this).removeAttr("selected");
	});
		
	var nazioneConto = ui.item.nazioneConto;
	if(nazioneConto===undefined){
		nazioneConto=86;
	} 
	$('#paeseAppartenenzaCC option[value='+nazioneConto+']').attr('selected','selected');
	if(ui.item.nazioneBeneficiario!=='86'){
		$('#nazioneBeneficiario option[value='+ui.item.nazioneBeneficiario+']').attr('selected','selected');
		$("#indirizzoBeneficiario").val(ui.item.indirizzoBeneficiario);
		$("#localitaBeneficiario").val(ui.item.localitaBeneficiario);
	}
	//hide e show di iban o conto a seconda se iban obbligatorio o meno
	showHideIban();
	!isValutaEuro() || !isDestItalia() ? $("#datiBeneficiarioValEstera").show() : $("#datiBeneficiarioValEstera").hide();
 }

		//  handler modale usa
		var apriModaleUsa = function(tipo){
			getAjaxModal({
				url: "parts/modali_contenuti_destinazioneUsa.php",
				method: "GET",
				title: "Bonifico verso un conto USA"
				
			});
		}

		//  handler modale gestione massimali
		var apriGestioneMassimali = function(tipo){
			getAjaxModal({
				url: "parts/tabella_gestione_massimali.php",
				method: "GET",
				title: "Massimali bonifico",
				class:"modal-lg"
			});
		}
	
</script>