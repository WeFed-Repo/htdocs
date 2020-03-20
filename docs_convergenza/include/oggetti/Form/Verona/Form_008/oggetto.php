
<script src="/common/fe/js/pagamenti.js"></script>



<div class="wrapper-fixed">	
	<section>
		<form id="formBonificoNuovo" method="post" action="/WEBHT/pagamenti/bonifico.do" role="form" aria-labelledby="bonifico">
			<div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="72e436efc9f2491f1d4dfbb79ffff351"></div>
			<input type="hidden" name="codContoCorrente" value="001|0092|009200581427">
			<input type="hidden" name="dispId" value="8f550758001349c09008d0239ff77a55" id="dispId">		
			<input type="hidden" name="tipologiaBonificoIniziale" value="" id="tipologiaBonificoIniziale">
			<input type="hidden" name="nuovoBeneficiario" value="S" id="nuovoBeneficiario">
			<div class="formWrapper">
				<h3 class="titleSection titleForm">Quanto vuoi accreditare?</h3>
				<div class="form-group">						
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label" for="importo">Importo*</label>
							<a title="Verifica massimali" class="link-text fRight" href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')">Verifica massimali</a>
							<div class="form-field">
							<div class="editable-input"><input type="text" name="importo" value="" id="importo" class="form-control clear-x input-required" placeholder="0,00">
							</div>
						</div>
						</div>
						<!-- VALUTA -->
			             <div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label" for="valuta">Valuta*</label>
								<div class="form-field">				
								<select name="valuta" id="valuta" class="form-control"><option value="CHF">
												FRANCHI SVIZZERI (FS)
											</option>
										
											<option value="CZK">
												CORONA REPUB. CECA
											</option>
										
											<option value="DKK">
												CORONA DANIMARCA
											</option>
										
											<option value="GBP">
												STERLINA GRAN BRETAGNA
											</option>
										
											<option value="HKD">
												DOLLARO HONG KONG
											</option>
										
											<option value="HUF">
												FORINT UNGHERIA
											</option>
										
											<option value="JPY">
												YEN GIAPPONE
											</option>
										
											<option value="NOK">
												CORONA NORVEGIA
											</option>
										
											<option value="NZD">
												DOLLARO NUOVA ZELANDA
											</option>
										
											<option value="PLN">
												ZLOTY POLONIA (PLZ)
											</option>
										
											<option value="RON">
												NEW ROMANIAN LEU
											</option>
										
											<option value="SEK">
												CORONA SVEZIA
											</option>
										
											<option value="SGD">
												DOLLARO SINGAPORE
											</option>
										
											<option value="USD">
												DOLLARO USA
											</option>
										
											<option value="ZAR">
												RAND SUDAFRICA
											</option>
										
											<option value="EUR" selected="">
												EURO - UNIONE EUROPEA
											</option>
										
											<option value="AUD">
												DOLLARO AUSTRALIA
											</option>
										
											<option value="CAD">
												DOLLARO CANADA
											</option></select>
								</div>
							</div>	
					</div>
				</div>
				<h3 class="titleSection titleForm">A chi vuoi accreditare il bonifico?</h3>
				<div class="form-group">	
					<div class="row">
							<!-- NOME BENEFICIARIO -->
						<div class="form-field-input col-xs-12 col-sm-6 ui-combobox-input">
				 			<label class="control-label">
								Nome beneficiario*				
							</label>
							<input type="text" id="autocompletamentoBonificoInput" name="autocompletamentoBonificoInput" size="30" class="form-control ui-autocomplete-input input-required" autocomplete="off" placeholder="Inserisci il nome del beneficiario" role="menu">
							<button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-text"></span><i class="icon icon-arrow_down"></i></button>
						</div>	
						 <!-- DESTINAZIONE  -->
            			<div class="form-field-input col-xs-12 col-sm-6">
			              <label class="control-label" for="note">Destinazione bonifico *</label>
              			  <div class="form-field">
			                <select name="paeseAppartenenzaCC" id="paeseAppartenenzaCC" class="form-control"><option value="seleziona">Seleziona</option>
			                  	<option value="238"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ABU DHABI
			                    </option>
			                  
			                    <option value="2"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      AFGHANISTAN
			                    </option>
			                  
			                    <option value="239"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      AJMAM (EMIRATI ARABI)
			                    </option>
			                  
			                    <option value="87"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ALBANIA
			                    </option>
			                  
			                    <option value="3"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ALGERIA
			                    </option>
			                  
			                    <option value="148"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      AMERICAN SAMOA
			                    </option>
			                  
			                    <option value="4"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ANDORRA
			                    </option>
			                  
			                    <option value="133"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ANGOLA
			                    </option>
			                  
			                    <option value="209"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ANGUILLA
			                    </option>
			                  
			                    <option value="197"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ANTIGUA
			                    </option>
			                  
			                    <option value="251"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ANTILLE OLANDESI
			                    </option>
			                  
			                    <option value="5"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ARABIA SAUDITA
			                    </option>
			                  
			                    <option value="6"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ARGENTINA
			                    </option>
			                  
			                    <option value="266"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ARMENIA
			                    </option>
			                  
			                    <option value="212"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ARUBA
			                    </option>
			                  
			                    <option value="227"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ASCENSION
			                    </option>
			                  
			                    <option value="7"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      AUSTRALIA
			                    </option>
			                  
			                    <option value="8"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      AUSTRIA
			                    </option>
			                  
			                    <option value="268"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      AZERBAIGIAN
			                    </option>
			                  
			                    <option value="234"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      AZZORRE
			                    </option>
			                  
			                    <option value="160"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BAHAMAS
			                    </option>
			                  
			                    <option value="169"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      BAHREIN
			                    </option>
			                  
			                    <option value="130"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BANGLADESH
			                    </option>
			                  
			                    <option value="118"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BARBADOS
			                    </option>
			                  
			                    <option value="9"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      BELGIO
			                    </option>
			                  
			                    <option value="198"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BELIZE
			                    </option>
			                  
			                    <option value="158"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BENIN
			                    </option>
			                  
			                    <option value="207"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BERMUDE
			                    </option>
			                  
			                    <option value="97"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BHUTAN
			                    </option>
			                  
			                    <option value="264"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BIELORUSSIA
			                    </option>
			                  
			                    <option value="10"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BOLIVIA
			                    </option>
			                  
			                    <option value="295"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BONAIRE SAINT EUSTATIUS AND SABA
			                    </option>
			                  
			                    <option value="274"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      BOSNIA ERZEGOVINA
			                    </option>
			                  
			                    <option value="98"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BOTSWANA
			                    </option>
			                  
			                    <option value="280"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      BOUVET ISLAND
			                    </option>
			                  
			                    <option value="11"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BRASILE
			                    </option>
			                  
			                    <option value="125"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BRUNEI
			                    </option>
			                  
			                    <option value="12"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      BULGARIA
			                    </option>
			                  
			                    <option value="142"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BURKINA FASO
			                    </option>
			                  
			                    <option value="25"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      BURUNDI
			                    </option>
			                  
			                    <option value="119"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CAMERUN
			                    </option>
			                  
			                    <option value="139"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      CAMPIONE D&#039;ITALIA
			                    </option>
			                  
			                    <option value="13"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CANADA
			                    </option>
			                  
			                    <option value="188"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CAPO VERDE
			                    </option>
			                  
			                    <option value="211"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CAYMAN
			                    </option>
			                  
			                    <option value="246"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      CEUTA
			                    </option>
			                  
			                    <option value="230"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CHAFARINAS
			                    </option>
			                  
			                    <option value="255"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CHAGOS O OIL ISLANDS
			                    </option>
			                  
			                    <option value="282"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CHRISTMAS ISLAND
			                    </option>
			                  
			                    <option value="144"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CIAD
			                    </option>
			                  
			                    <option value="15"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CILE
			                    </option>
			                  
			                    <option value="16"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CINA REP.POP.
			                    </option>
			                  
			                    <option value="101"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      CIPRO
			                    </option>
			                  
			                    <option value="93"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      CITTA&#039; DEL VATICANO
			                    </option>
			                  
			                    <option value="223"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CLIPPERTON
			                    </option>
			                  
			                    <option value="281"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COCOS (KEELING) ISLAND
			                    </option>
			                  
			                    <option value="17"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COLOMBIA
			                    </option>
			                  
			                    <option value="176"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COMORE
			                    </option>
			                  
			                    <option value="145"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CONGO BRAZZAVILLE
			                    </option>
			                  
			                    <option value="18"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CONGO REPUBBLICA DEMOCRATICA
			                    </option>
			                  
			                    <option value="237"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COOK
			                    </option>
			                  
			                    <option value="146"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COSTA D&#039;AVORIO
			                    </option>
			                  
			                    <option value="19"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      COSTARICA
			                    </option>
			                  
			                    <option value="261"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      CROAZIA
			                    </option>
			                  
			                    <option value="20"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CUBA
			                    </option>
			                  
			                    <option value="296"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      CURACAO
			                    </option>
			                  
			                    <option value="21"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      DANIMARCA
			                    </option>
			                  
			                    <option value="192"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      DOMINICA
			                    </option>
			                  
			                    <option value="240"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      DUBAI
			                    </option>
			                  
			                    <option value="287"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      EAST TIMOR
			                    </option>
			                  
			                    <option value="24"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ECUADOR
			                    </option>
			                  
			                    <option value="23"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      EGITTO
			                    </option>
			                  
			                    <option value="64"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      EL SALVADOR
			                    </option>
			                  
			                    <option value="277"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ERITREA
			                    </option>
			                  
			                    <option value="257"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ESTONIA
			                    </option>
			                  
			                    <option value="26"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ETIOPIA
			                    </option>
			                  
			                    <option value="190"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      FALKLAND
			                    </option>
			                  
			                    <option value="204"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      FAR OER ISOLE
			                    </option>
			                  
			                    <option value="161"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      FIJI
			                    </option>
			                  
			                    <option value="27"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      FILIPPINE
			                    </option>
			                  
			                    <option value="28"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      FINLANDIA
			                    </option>
			                  
			                    <option value="29"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      FRANCIA
			                    </option>
			                  
			                    <option value="241"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      FUIJARAH
			                    </option>
			                  
			                    <option value="157"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GABON
			                    </option>
			                  
			                    <option value="164"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GAMBIA
			                    </option>
			                  
			                    <option value="267"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GEORGIA
			                    </option>
			                  
			                    <option value="94"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GERMANIA
			                    </option>
			                  
			                    <option value="112"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GHANA
			                    </option>
			                  
			                    <option value="82"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GIAMAICA
			                    </option>
			                  
			                    <option value="88"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GIAPPONE
			                    </option>
			                  
			                    <option value="102"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GIBILTERRA
			                    </option>
			                  
			                    <option value="113"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GIBUTI
			                    </option>
			                  
			                    <option value="122"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GIORDANIA
			                    </option>
			                  
			                    <option value="228"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GOUGH
			                    </option>
			                  
			                    <option value="32"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GRECIA
			                    </option>
			                  
			                    <option value="156"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GRENADA
			                    </option>
			                  
			                    <option value="200"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GROENLANDIA
			                    </option>
			                  
			                    <option value="214"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GUADALUPA
			                    </option>
			                  
			                    <option value="154"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUAM
			                    </option>
			                  
			                    <option value="33"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUATEMALA
			                    </option>
			                  
			                    <option value="123"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      GUAYANA FRANCESE
			                    </option>
			                  
			                    <option value="201"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUERNSEY
			                    </option>
			                  
			                    <option value="137"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUINEA
			                    </option>
			                  
			                    <option value="185"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUINEA BISSAU
			                    </option>
			                  
			                    <option value="167"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUINEA EQUATORIALE
			                    </option>
			                  
			                    <option value="159"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      GUYANA
			                    </option>
			                  
			                    <option value="34"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      HAITI
			                    </option>
			                  
			                    <option value="284"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      HEARD E MCDONALD ISLANDS
			                    </option>
			                  
			                    <option value="35"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      HONDURAS
			                    </option>
			                  
			                    <option value="103"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      HONG KONG
			                    </option>
			                  
			                    <option value="114"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      INDIA
			                    </option>
			                  
			                    <option value="129"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      INDONESIA
			                    </option>
			                  
			                    <option value="39"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      IRAN
			                    </option>
			                  
			                    <option value="38"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      IRAQ
			                    </option>
			                  
			                    <option value="40"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      IRLANDA
			                    </option>
			                  
			                    <option value="41"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ISLANDA
			                    </option>
			                  
			                    <option value="292"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ISOLE ALAND
			                    </option>
			                  
			                    <option value="256"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ISOLE CAROLINE
			                    </option>
			                  
			                    <option value="182"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ISRAELE
			                    </option>
			                  
			                    <option value="86"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      selected>
			                      ITALIA
			                    </option>
			                  
			                    <option value="202"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      JERSEY
			                    </option>
			                  
			                    <option value="135"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      KAMPUCHEA
			                    </option>
			                  
			                    <option value="269"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      KAZAKISTAN
			                    </option>
			                  
			                    <option value="116"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      KENYA
			                    </option>
			                  
			                    <option value="270"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      KIRGHIZISTAN
			                    </option>
			                  
			                    <option value="194"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      KIRIBATI
			                    </option>
			                  
			                    <option value="291"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      KOSOVO
			                    </option>
			                  
			                    <option value="126"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      KUWAIT
			                    </option>
			                  
			                    <option value="136"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      LAOS
			                    </option>
			                  
			                    <option value="89"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      LESOTHO
			                    </option>
			                  
			                    <option value="258"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      LETTONIA
			                    </option>
			                  
			                    <option value="95"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      LIBANO
			                    </option>
			                  
			                    <option value="44"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      LIBERIA
			                    </option>
			                  
			                    <option value="45"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      LIBIA
			                    </option>
			                  
			                    <option value="90"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      LIECHTENSTEIN
			                    </option>
			                  
			                    <option value="259"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      LITUANIA
			                    </option>
			                  
			                    <option value="92"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      LUSSEMBURGO
			                    </option>
			                  
			                    <option value="59"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MACAO
			                    </option>
			                  
			                    <option value="278"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MACEDONIA
			                    </option>
			                  
			                    <option value="104"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MADAGASCAR
			                    </option>
			                  
			                    <option value="235"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MADEIRA
			                    </option>
			                  
			                    <option value="56"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MALAWI
			                    </option>
			                  
			                    <option value="106"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MALAYSIA
			                    </option>
			                  
			                    <option value="127"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MALDIVE
			                    </option>
			                  
			                    <option value="149"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MALI
			                    </option>
			                  
			                    <option value="105"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MALTA
			                    </option>
			                  
			                    <option value="203"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MANISOLA
			                    </option>
			                  
			                    <option value="219"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MARIANNE SETT ISOLE
			                    </option>
			                  
			                    <option value="107"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MAROCCO
			                    </option>
			                  
			                    <option value="217"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MARSHALL
			                    </option>
			                  
			                    <option value="213"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MARTINICA
			                    </option>
			                  
			                    <option value="141"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MAURITANIA
			                    </option>
			                  
			                    <option value="128"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MAURITIUS
			                    </option>
			                  
			                    <option value="226"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MAYOTTE
			                    </option>
			                  
			                    <option value="231"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MELILLA
			                    </option>
			                  
			                    <option value="46"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MESSICO
			                    </option>
			                  
			                    <option value="215"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MICRONESIA STATI FED
			                    </option>
			                  
			                    <option value="177"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MIDWAY ISLANDS
			                    </option>
			                  
			                    <option value="265"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MOLDAVIA
			                    </option>
			                  
			                    <option value="110"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MONGOLIA
			                    </option>
			                  
			                    <option value="208"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MONSERRAT
			                    </option>
			                  
			                    <option value="290"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      MONTENEGRO
			                    </option>
			                  
			                    <option value="134"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MOZAMBICO
			                    </option>
			                  
			                    <option value="83"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      MYANMAR (EX BIRMANIA)
			                    </option>
			                  
			                    <option value="206"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NAMIBIA
			                    </option>
			                  
			                    <option value="109"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NAURU
			                    </option>
			                  
			                    <option value="115"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NEPAL
			                    </option>
			                  
			                    <option value="47"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NICARAGUA
			                    </option>
			                  
			                    <option value="150"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NIGER
			                    </option>
			                  
			                    <option value="117"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NIGERIA
			                    </option>
			                  
			                    <option value="205"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NIUE
			                    </option>
			                  
			                    <option value="48"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      NORVEGIA
			                    </option>
			                  
			                    <option value="253"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NUOVA CALEDONIA
			                    </option>
			                  
			                    <option value="49"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      NUOVA ZELANDA
			                    </option>
			                  
			                    <option value="50"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      OLANDA
			                    </option>
			                  
			                    <option value="163"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      OMAN
			                    </option>
			                  
			                    <option value="36"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      PAKISTAN
			                    </option>
			                  
			                    <option value="216"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PALAU
			                    </option>
			                  
			                    <option value="279"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      PALESTINATERRITORI AUTONOMI DI
			                    </option>
			                  
			                    <option value="51"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PANAMA
			                    </option>
			                  
			                    <option value="186"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PAPUA NUOVA GUINEA
			                    </option>
			                  
			                    <option value="52"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PARAGUAY
			                    </option>
			                  
			                    <option value="232"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PENON DE ALHUCEMAS
			                    </option>
			                  
			                    <option value="233"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PENON DE VELEZ DE LA GOMERA
			                    </option>
			                  
			                    <option value="53"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PERU
			                    </option>
			                  
			                    <option value="175"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PITCAIRN
			                    </option>
			                  
			                    <option value="225"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      POLINESIA FRANCESE
			                    </option>
			                  
			                    <option value="54"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      POLONIA
			                    </option>
			                  
			                    <option value="55"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      PORTOGALLO
			                    </option>
			                  
			                    <option value="220"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      PORTORICO
			                    </option>
			                  
			                    <option value="91"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      PRINCIPATO DI MONACO
			                    </option>
			                  
			                    <option value="168"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      QATAR
			                    </option>
			                  
			                    <option value="242"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      RAS EL KHAIMAH
			                    </option>
			                  
			                    <option value="31"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      REGNO UNITO
			                    </option>
			                  
			                    <option value="275"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      REPUBBLICA CECA
			                    </option>
			                  
			                    <option value="143"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      REPUBBLICA CENTRAFRICANA
			                    </option>
			                  
			                    <option value="63"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      REPUBBLICA DOMINICANA
			                    </option>
			                  
			                    <option value="78"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      REPUBBLICA SUDAFRICANA
			                    </option>
			                  
			                    <option value="247"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      REUNION
			                    </option>
			                  
			                    <option value="61"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ROMANIA
			                    </option>
			                  
			                    <option value="262"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      RUSSIA
			                    </option>
			                  
			                    <option value="151"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      RWANDA
			                    </option>
			                  
			                    <option value="166"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SAHARA OCCIDENTALE
			                    </option>
			                  
			                    <option value="222"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SAINT MARTIN SETTENTRIONALE
			                    </option>
			                  
			                    <option value="191"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SALOMONE
			                    </option>
			                  
			                    <option value="131"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SAMOA OCCIDENTALI
			                    </option>
			                  
			                    <option value="37"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SAN MARINO
			                    </option>
			                  
			                    <option value="187"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SAO TOME
			                    </option>
			                  
			                    <option value="152"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SENEGAL
			                    </option>
			                  
			                    <option value="289"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SERBIA
			                    </option>
			                  
			                    <option value="189"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SEYCHELLES
			                    </option>
			                  
			                    <option value="243"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SHARJAH
			                    </option>
			                  
			                    <option value="153"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SIERRA LEONE
			                    </option>
			                  
			                    <option value="147"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SINGAPORE
			                    </option>
			                  
			                    <option value="294"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SINT MAARTEN (DUTCH PART)
			                    </option>
			                  
			                    <option value="276"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SLOVACCHIA
			                    </option>
			                  
			                    <option value="260"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SLOVENIA
			                    </option>
			                  
			                    <option value="66"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SOMALIA
			                    </option>
			                  
			                    <option value="283"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SOUTH GEORGIA E SOUTH SANDWICH
			                    </option>
			                  
			                    <option value="67"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SPAGNA
			                    </option>
			                  
			                    <option value="85"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SRI LANKA
			                    </option>
			                  
			                    <option value="195"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ST KITTS E NEVIS
			                    </option>
			                  
			                    <option value="254"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ST.HELENA
			                    </option>
			                  
			                    <option value="199"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ST.LUCIA
			                    </option>
			                  
			                    <option value="248"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      ST.PIERRE E MIQUELON
			                    </option>
			                  
			                    <option value="196"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ST.VINCENT
			                    </option>
			                  
			                    <option value="69"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      STATI UNITI D&#039;AMERICA
			                    </option>
			                  
			                    <option value="84"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SUD COREA (COREA REP.DI)
			                    </option>
			                  
			                    <option value="70"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SUDAN
			                    </option>
			                  
			                    <option value="124"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SURINAME
			                    </option>
			                  
			                    <option value="286"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SVALBARD E JAN MAYEN ISLANDS
			                    </option>
			                  
			                    <option value="68"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SVEZIA
			                    </option>
			                  
			                    <option value="71"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      SVIZZERA
			                    </option>
			                  
			                    <option value="138"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      SWAZILAND NGWANE
			                    </option>
			                  
			                    <option value="272"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TAGIKISTAN
			                    </option>
			                  
			                    <option value="22"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TAIWAN
			                    </option>
			                  
			                    <option value="57"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TANZANIA
			                    </option>
			                  
			                    <option value="245"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TERR BRITANNICO OCEANO INDIANO
			                    </option>
			                  
			                    <option value="180"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TERRITORIO ANTARTICO BRITANNICO
			                    </option>
			                  
			                    <option value="183"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      TERRITORIO ANTARTICO FRANCESE
			                    </option>
			                  
			                    <option value="72"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      THAILANDIA
			                    </option>
			                  
			                    <option value="155"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TOGO
			                    </option>
			                  
			                    <option value="236"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TOKELAU
			                    </option>
			                  
			                    <option value="162"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TONGA
			                    </option>
			                  
			                    <option value="120"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TRINIDAD
			                    </option>
			                  
			                    <option value="229"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TRISTAN DA CUNHA
			                    </option>
			                  
			                    <option value="75"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      TUNISIA
			                    </option>
			                  
			                    <option value="76"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      TURCHIA
			                    </option>
			                  
			                    <option value="273"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TURKMENISTAN
			                    </option>
			                  
			                    <option value="210"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TURKS E CAICOS
			                    </option>
			                  
			                    <option value="193"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      TUVALU&#039;
			                    </option>
			                  
			                    <option value="263"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      UCRAINA
			                    </option>
			                  
			                    <option value="132"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      UGANDA
			                    </option>
			                  
			                    <option value="244"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      UMM AL QAIWAIN
			                    </option>
			                  
			                    <option value="77"
			                      data-tipo-paese="SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      UNGHERIA
			                    </option>
			                  
			                    <option value="80"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      URUGUAY
			                    </option>
			                  
			                    <option value="271"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      UZBEKISTAN
			                    </option>
			                  
			                    <option value="121"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      VANUATU
			                    </option>
			                  
			                    <option value="81"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      VENEZUELA
			                    </option>
			                  
			                    <option value="221"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      VERGINI AMERICANEISOLE
			                    </option>
			                  
			                    <option value="249"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="true"
			                      >
			                      VERGINI BRITANNICHEISOLE
			                    </option>
			                  
			                    <option value="62"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      VIETNAM REPUBBLICA DEMOCRATICA
			                    </option>
			                  
			                    <option value="218"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      WALLIS E FUTUNA
			                    </option>
			                  
			                    <option value="42"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      YEMEN
			                    </option>
			                  
			                    <option value="58"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ZAMBIA
			                    </option>
			                  
			                    <option value="73"
			                      data-tipo-paese="EXTRA_SEPA"
			                      data-iban-obbligatorio="false"
			                      >
			                      ZIMBABWE
			                    </option></select>
              			  </div>
            			</div>
					</div>
				</div>
				<div class="form-group" id="formGroupIban">
		          <div class="row"> 
		            <!-- IBAN -->
		            <div class="form-field-input col-xs-6">
		              <label class="control-label">
		                Iban        
		              </label>
		              <div class="form-field">
		                <input type="text" name="iban" value="" id="iban" class="form-control clear-x input-required iban-to-fill" />
		              </div>
		            </div>
		          </div>
		        </div> 
		        <div class="form-group" id="formGroupSwift" style="display:none">
		          <div class="row"> 
		            <!-- NUMC CONTO -->
		            <div class="form-field-input col-xs-6">
		              <label class="control-label">
		                Conto       
		              </label>
		              <div class="form-field">
		                <input type="text" name="numeroConto" value="" id="numeroConto" class="form-control clear-x " />
		              </div>
		            </div>
		            <!-- BIC/SWIFT -->
		            <div class="form-field-input col-xs-6">
		              <label class="control-label">
		                BIC/Swift       
		              </label>
		              <div class="form-field">
		                <input type="text" name="bic" value="" id="bic" class="form-control clear-x " />
		              </div>
		            </div>
		          </div>
		        </div> 
		        <div class="form-group">
			          <div class="row"> 
			            <!-- CAUSALE -->
			            <div class="form-field-input col-xs-12">
			              <label class="control-label">
			                Causale (max 140 caratteri)       
			              </label>
			              <div class="form-field">
			                <input type="text" name="causale" maxlength="140" value="" id="causale" class="form-control clear-x input-required"/>
			              </div>
			            </div>
			          </div>
			    </div> 
			    <h3 class="titleSection titleForm">Scegli il tipo di bonifico e quando effettuarlo</h3>
			    <div class="formWrapper tabber-wrapper">  
        			<div class="warning-tab-toWrapper">
						 <a class="btn-icon info-standard"  id="" title="informazioni sul bonifico standard" href="javascript:;">
						 	<i class="icon icon-ico_help_filled_tab" data-htmlid="#tooltipStandard" data-toggle="tooltip"></i>
						 	<i class="icon icon-ico_help_tab" data-htmlid="#tooltipStandard" data-toggle="tooltip" style="display:none"></i>	
						 </a>
						 	
						
						 <div class="htmlTooltip" id="tooltipStandard">
						 	<h3>LOREM IPSUM</h3>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
						 	<ul>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 	</ul>
						 </div>
        				 <a class="btn-icon info-veloce"  id="" title="informazioni sul bonifico veloce">
        				 	<i class="icon icon-ico_help_filled_tab" data-htmlid="#tooltipVeloce" data-toggle="tooltip"></i>
        				 	<i class="icon icon-ico_help_tab" data-htmlid="#tooltipVeloce" data-toggle="tooltip" style="display:none"></i>
        				 </a>
        				 <div class="htmlTooltip" id="tooltipVeloce">
						 	<h3>LOREM IPSUM</h3>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p>
						 	<ul>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
						 	</ul>
						 </div>
          				<!-- PULSANTI -->
			          <div class="form-group">
			          	<div class="tab-data row">
			                    <div class="col-xs-6 tab-data-btn">
			                        <a id="scegliData" href="javascript:;" title="Bonifico ordinario"><p>Bonifico ordinario</p>
			                        </a>
			                    </div>
			                    <div class="col-xs-6 tab-data-btn">
			                        <a id="hoFretta" href="javascript:;" title="Bonifico veloce"><p>Bonifico veloce</p></a>
			                    </div>
			            </div>
			          </div>
                  
                		<!-- PRIMO RIQUADRO: ORDINARIO/ESTERO -->   
			          <div id="tabScegliData" class="tab-data-content">
			          <span class="errorOrd">
			            </span> 
			            <span class="">
			            <span class="tab-arrow"></span> 
			            <div class="row">         
			              <div class="col-sm-4 col-xs-12 form-field-input">
			                <i class="icon icon-bonifico-esecuzione fLeft"></i>
			                <div class="fLeft">
                   
       <label class="control-label" for="dataEsecuzione">
      Data esecuzione </label>
  
  


 





                  
                  <div class="form-field">            
                    <div class="input-group">
                      <input type="text" name="dataEsecuzione" size="12" value="05/04/2019" id="dataEsecuzione" class="form-control datepicker input-inline clear-x wauto" /> 
                        <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                    </div>                    
                  </div>  
                </div>              
              </div>   
              <div class="col-sm-4 col-xs-12 form-field-input">
                  <i class="icon icon-bonifico-accredito fLeft"></i>
                <div class="fLeft">
                  <label class="control-label" for="note">
                    Data accredito 
                  </label>
                  <div class="form-field">                    
                    <div class="input-group">
                      <span id="dataAccreditoOE" class="output">Entro 2 gg. lavorativi</span><br>
                      dalla data di esecuzione
                    </div>                            
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-xs-12 form-field-input">
                <i class="icon icon-trading_euro fLeft"></i>
                <div class="fLeft">
                  <label class="control-label" for="note">
                    Commissione 
                  </label>
                  <div class="form-field">
                    <div class="input-group">
                                  <span id="commissioneOE" class="output">XX,00 ?</span>
                                </div>        
                  </div>
                </div>
              </div>  
             </div> 
          </span>     
          </div>
          
          <!-- SECONDO RIQUADRO: ISTANTANEO/URGENTE -->
             <div id="tabHoFretta" class="tab-data-content">
              <span class="errorIst">
              </span> 
              <span class="noErrorIst"> 
                    <span class="tab-arrow"></span>
                    <div class="row">
                           <div class="col-sm-4 col-xs-12 form-field-input">
                           <i class="icon icon-bonifico-esecuzione fLeft"></i>
                            <div class="fLeft">
                              <label class="control-label" for="causale">Data esecuzione</label> 
                              <div class="form-field">
                                  <div class="input-group">
                                    <span id="dataEsecuzioneIU" class="output">OGGI</span>
                                </div>
                              </div>
                            </div>
                          </div>
                           <div class="col-sm-4 col-xs-12 form-field-input">
                            <i class="icon icon-bonifico-accredito fLeft"></i>
                            <div class="fLeft">
                              <label class="control-label" for="causale">Data accredito</label> 
                              <div class="form-field">
                                  <div class="input-group">
                                    <span id="dataAccreditoIU" class="output">ISTANTANEO</span>
                                </div>
                              </div>
                            </div>
                          </div>
                           <div class="col-sm-4 col-xs-12 form-field-input">
                          <i class="icon icon-trading_euro fLeft"></i>
                            <div class="fLeft">
                              <label class="control-label" for="causale">Commissione 1</label> 
                              <div class="form-field">
                                  <div class="input-group">
                                    <span id="commissione1IU" class="output">XX,00 ?</span>
                                </div>
                              </div>
                              <label class="control-label" for="causale">Commissione 2</label> 
                              <div class="form-field">
                                  <div class="input-group">
                                    <span id="commissione2IU" class="output">XX,00 ?</span>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                     </span> 
                  </div>
          
        </div>


      </div>  
      <div id="error-box-fields"></div>
      <!-- AGGIUNGI BENEFICIARIO -->
			<div class="form-group">
				<div class="hidden-wrapper" id="aggiungiBeneficiarioSecond">
					<div class="form-group">
						<div class="row">
		                  <div class="form-field-input col-xs-12 col-sm-6">
		                    <label>
			                    <input type="checkbox" name="memorizza" value="S" id="memorizza" class="input-toggle-hidden"> 
			                    <!-- <input type="checkbox" name="aggiungiBeneficiario" id="aggiungiBeneficiario" class="input-toggle-hidden"> -->
			                    Aggiungi beneficiario a rubrica   
		                    </label>
		                  </div>
		                </div> 
		            </div>
		            <div class="form-group input-hidden" style="display:none" id="aggBeneficiario">
		                <div class="row">
		                    <div class="form-field-input col-xs-12 col-sm-6">
		                       <label class="control-label">Contatto/Nickname*</label>
		                       <div class="form-field">
		                            <div class="editable-input"><input type="text" name="nickname" value="" id="nickname" class="form-control clear-x prefilled"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>		
		                        </div>
		                    </div>
		                    <!-- 
		                    <div class="form-field-input col-xs-12 col-sm-6">
		                         <label class="control-label">Descrizione*</label>
		                       <div class="form-field">
		                            <input type="text" name=descrizione id="descrizione" class="form-control clear-x">
		                        </div>
		                    </div>
		                     -->
		                </div>
					</div>
				</div>
			</div>
		
		
			<!-- DATI FACOLTATIVI -->
			<div id="tabDatiFacoltativi" style="display: none;">
				<div class="form-group">
		            <a class="link-text" href="javascript:;" onclick="$('#datiFacoltativi').slideToggle();$(this).toggleClass('open-link')">
		                <i class="icon icon-row_expand fLeft"></i>
		                <i class="icon icon-row_contract fLeft"></i> Dati facoltativi
		            </a>
				</div>
				<div class="form-group" style="display:none" id="datiFacoltativi">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
						    <label class="control-label" for="causale">
						    	Nazione beneficiario
						    </label> 
						    <div class="form-field">
								<select name="nazioneBeneficiario" id="nazioneBeneficiario" class="form-control"><option value="" selected="selected">Seleziona</option>
									
										&gt; 
										<option value="238" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ABU DHABI
										</option>
									
										&gt; 
										<option value="2" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											AFGHANISTAN
										</option>
									
										&gt; 
										<option value="239" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											AJMAM (EMIRATI ARABI)
										</option>
									
										&gt; 
										<option value="87" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ALBANIA
										</option>
									
										&gt; 
										<option value="3" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ALGERIA
										</option>
									
										&gt; 
										<option value="148" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											AMERICAN SAMOA
										</option>
									
										&gt; 
										<option value="4" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ANDORRA
										</option>
									
										&gt; 
										<option value="133" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ANGOLA
										</option>
									
										&gt; 
										<option value="209" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ANGUILLA
										</option>
									
										&gt; 
										<option value="197" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ANTIGUA
										</option>
									
										&gt; 
										<option value="251" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ANTILLE OLANDESI
										</option>
									
										&gt; 
										<option value="5" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ARABIA SAUDITA
										</option>
									
										&gt; 
										<option value="6" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ARGENTINA
										</option>
									
										&gt; 
										<option value="266" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ARMENIA
										</option>
									
										&gt; 
										<option value="212" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ARUBA
										</option>
									
										&gt; 
										<option value="227" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ASCENSION
										</option>
									
										&gt; 
										<option value="7" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											AUSTRALIA
										</option>
									
										&gt; 
										<option value="8" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											AUSTRIA
										</option>
									
										&gt; 
										<option value="268" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											AZERBAIGIAN
										</option>
									
										&gt; 
										<option value="234" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											AZZORRE
										</option>
									
										&gt; 
										<option value="160" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BAHAMAS
										</option>
									
										&gt; 
										<option value="169" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											BAHREIN
										</option>
									
										&gt; 
										<option value="130" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BANGLADESH
										</option>
									
										&gt; 
										<option value="118" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BARBADOS
										</option>
									
										&gt; 
										<option value="9" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											BELGIO
										</option>
									
										&gt; 
										<option value="198" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BELIZE
										</option>
									
										&gt; 
										<option value="158" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BENIN
										</option>
									
										&gt; 
										<option value="207" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BERMUDE
										</option>
									
										&gt; 
										<option value="97" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BHUTAN
										</option>
									
										&gt; 
										<option value="264" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BIELORUSSIA
										</option>
									
										&gt; 
										<option value="10" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BOLIVIA
										</option>
									
										&gt; 
										<option value="295" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BONAIRE SAINT EUSTATIUS AND SABA
										</option>
									
										&gt; 
										<option value="274" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											BOSNIA ERZEGOVINA
										</option>
									
										&gt; 
										<option value="98" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BOTSWANA
										</option>
									
										&gt; 
										<option value="280" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											BOUVET ISLAND
										</option>
									
										&gt; 
										<option value="11" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BRASILE
										</option>
									
										&gt; 
										<option value="125" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BRUNEI
										</option>
									
										&gt; 
										<option value="12" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											BULGARIA
										</option>
									
										&gt; 
										<option value="142" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BURKINA FASO
										</option>
									
										&gt; 
										<option value="25" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											BURUNDI
										</option>
									
										&gt; 
										<option value="119" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CAMERUN
										</option>
									
										&gt; 
										<option value="139" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											CAMPIONE D'ITALIA
										</option>
									
										&gt; 
										<option value="13" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CANADA
										</option>
									
										&gt; 
										<option value="188" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CAPO VERDE
										</option>
									
										&gt; 
										<option value="211" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CAYMAN
										</option>
									
										&gt; 
										<option value="246" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											CEUTA
										</option>
									
										&gt; 
										<option value="230" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CHAFARINAS
										</option>
									
										&gt; 
										<option value="255" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CHAGOS O OIL ISLANDS
										</option>
									
										&gt; 
										<option value="282" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CHRISTMAS ISLAND
										</option>
									
										&gt; 
										<option value="144" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CIAD
										</option>
									
										&gt; 
										<option value="15" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CILE
										</option>
									
										&gt; 
										<option value="16" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CINA REP.POP.
										</option>
									
										&gt; 
										<option value="101" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											CIPRO
										</option>
									
										&gt; 
										<option value="93" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											CITTA' DEL VATICANO
										</option>
									
										&gt; 
										<option value="223" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CLIPPERTON
										</option>
									
										&gt; 
										<option value="281" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COCOS (KEELING) ISLAND
										</option>
									
										&gt; 
										<option value="17" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COLOMBIA
										</option>
									
										&gt; 
										<option value="176" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COMORE
										</option>
									
										&gt; 
										<option value="145" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CONGO BRAZZAVILLE
										</option>
									
										&gt; 
										<option value="18" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CONGO REPUBBLICA DEMOCRATICA
										</option>
									
										&gt; 
										<option value="237" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COOK
										</option>
									
										&gt; 
										<option value="146" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COSTA D'AVORIO
										</option>
									
										&gt; 
										<option value="19" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											COSTARICA
										</option>
									
										&gt; 
										<option value="261" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											CROAZIA
										</option>
									
										&gt; 
										<option value="20" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CUBA
										</option>
									
										&gt; 
										<option value="296" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											CURACAO
										</option>
									
										&gt; 
										<option value="21" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											DANIMARCA
										</option>
									
										&gt; 
										<option value="192" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											DOMINICA
										</option>
									
										&gt; 
										<option value="240" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											DUBAI
										</option>
									
										&gt; 
										<option value="287" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											EAST TIMOR
										</option>
									
										&gt; 
										<option value="24" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ECUADOR
										</option>
									
										&gt; 
										<option value="23" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											EGITTO
										</option>
									
										&gt; 
										<option value="64" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											EL SALVADOR
										</option>
									
										&gt; 
										<option value="277" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ERITREA
										</option>
									
										&gt; 
										<option value="257" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											ESTONIA
										</option>
									
										&gt; 
										<option value="26" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ETIOPIA
										</option>
									
										&gt; 
										<option value="190" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											FALKLAND
										</option>
									
										&gt; 
										<option value="204" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											FAR OER ISOLE
										</option>
									
										&gt; 
										<option value="161" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											FIJI
										</option>
									
										&gt; 
										<option value="27" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											FILIPPINE
										</option>
									
										&gt; 
										<option value="28" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											FINLANDIA
										</option>
									
										&gt; 
										<option value="29" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											FRANCIA
										</option>
									
										&gt; 
										<option value="241" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											FUIJARAH
										</option>
									
										&gt; 
										<option value="157" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GABON
										</option>
									
										&gt; 
										<option value="164" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GAMBIA
										</option>
									
										&gt; 
										<option value="267" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GEORGIA
										</option>
									
										&gt; 
										<option value="94" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											GERMANIA
										</option>
									
										&gt; 
										<option value="112" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GHANA
										</option>
									
										&gt; 
										<option value="82" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GIAMAICA
										</option>
									
										&gt; 
										<option value="88" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GIAPPONE
										</option>
									
										&gt; 
										<option value="102" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GIBILTERRA
										</option>
									
										&gt; 
										<option value="113" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GIBUTI
										</option>
									
										&gt; 
										<option value="122" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GIORDANIA
										</option>
									
										&gt; 
										<option value="228" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GOUGH
										</option>
									
										&gt; 
										<option value="32" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											GRECIA
										</option>
									
										&gt; 
										<option value="156" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GRENADA
										</option>
									
										&gt; 
										<option value="200" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GROENLANDIA
										</option>
									
										&gt; 
										<option value="214" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GUADALUPA
										</option>
									
										&gt; 
										<option value="154" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUAM
										</option>
									
										&gt; 
										<option value="33" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUATEMALA
										</option>
									
										&gt; 
										<option value="123" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											GUAYANA FRANCESE
										</option>
									
										&gt; 
										<option value="201" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUERNSEY
										</option>
									
										&gt; 
										<option value="137" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUINEA
										</option>
									
										&gt; 
										<option value="185" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUINEA BISSAU
										</option>
									
										&gt; 
										<option value="167" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUINEA EQUATORIALE
										</option>
									
										&gt; 
										<option value="159" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											GUYANA
										</option>
									
										&gt; 
										<option value="34" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											HAITI
										</option>
									
										&gt; 
										<option value="284" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											HEARD E MCDONALD ISLANDS
										</option>
									
										&gt; 
										<option value="35" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											HONDURAS
										</option>
									
										&gt; 
										<option value="103" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											HONG KONG
										</option>
									
										&gt; 
										<option value="114" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											INDIA
										</option>
									
										&gt; 
										<option value="129" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											INDONESIA
										</option>
									
										&gt; 
										<option value="39" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											IRAN
										</option>
									
										&gt; 
										<option value="38" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											IRAQ
										</option>
									
										&gt; 
										<option value="40" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											IRLANDA
										</option>
									
										&gt; 
										<option value="41" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											ISLANDA
										</option>
									
										&gt; 
										<option value="292" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ISOLE ALAND
										</option>
									
										&gt; 
										<option value="256" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ISOLE CAROLINE
										</option>
									
										&gt; 
										<option value="182" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ISRAELE
										</option>
									
										selected&gt; 
										<option value="86" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											ITALIA
										</option>
									
										&gt; 
										<option value="202" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											JERSEY
										</option>
									
										&gt; 
										<option value="135" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											KAMPUCHEA
										</option>
									
										&gt; 
										<option value="269" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											KAZAKISTAN
										</option>
									
										&gt; 
										<option value="116" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											KENYA
										</option>
									
										&gt; 
										<option value="270" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											KIRGHIZISTAN
										</option>
									
										&gt; 
										<option value="194" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											KIRIBATI
										</option>
									
										&gt; 
										<option value="291" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											KOSOVO
										</option>
									
										&gt; 
										<option value="126" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											KUWAIT
										</option>
									
										&gt; 
										<option value="136" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											LAOS
										</option>
									
										&gt; 
										<option value="89" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											LESOTHO
										</option>
									
										&gt; 
										<option value="258" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											LETTONIA
										</option>
									
										&gt; 
										<option value="95" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											LIBANO
										</option>
									
										&gt; 
										<option value="44" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											LIBERIA
										</option>
									
										&gt; 
										<option value="45" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											LIBIA
										</option>
									
										&gt; 
										<option value="90" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											LIECHTENSTEIN
										</option>
									
										&gt; 
										<option value="259" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											LITUANIA
										</option>
									
										&gt; 
										<option value="92" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											LUSSEMBURGO
										</option>
									
										&gt; 
										<option value="59" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MACAO
										</option>
									
										&gt; 
										<option value="278" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MACEDONIA
										</option>
									
										&gt; 
										<option value="104" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MADAGASCAR
										</option>
									
										&gt; 
										<option value="235" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MADEIRA
										</option>
									
										&gt; 
										<option value="56" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MALAWI
										</option>
									
										&gt; 
										<option value="106" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MALAYSIA
										</option>
									
										&gt; 
										<option value="127" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MALDIVE
										</option>
									
										&gt; 
										<option value="149" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MALI
										</option>
									
										&gt; 
										<option value="105" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											MALTA
										</option>
									
										&gt; 
										<option value="203" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MANISOLA
										</option>
									
										&gt; 
										<option value="219" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MARIANNE SETT ISOLE
										</option>
									
										&gt; 
										<option value="107" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MAROCCO
										</option>
									
										&gt; 
										<option value="217" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MARSHALL
										</option>
									
										&gt; 
										<option value="213" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MARTINICA
										</option>
									
										&gt; 
										<option value="141" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MAURITANIA
										</option>
									
										&gt; 
										<option value="128" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MAURITIUS
										</option>
									
										&gt; 
										<option value="226" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MAYOTTE
										</option>
									
										&gt; 
										<option value="231" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MELILLA
										</option>
									
										&gt; 
										<option value="46" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MESSICO
										</option>
									
										&gt; 
										<option value="215" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MICRONESIA STATI FED
										</option>
									
										&gt; 
										<option value="177" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MIDWAY ISLANDS
										</option>
									
										&gt; 
										<option value="265" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MOLDAVIA
										</option>
									
										&gt; 
										<option value="110" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MONGOLIA
										</option>
									
										&gt; 
										<option value="208" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MONSERRAT
										</option>
									
										&gt; 
										<option value="290" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											MONTENEGRO
										</option>
									
										&gt; 
										<option value="134" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MOZAMBICO
										</option>
									
										&gt; 
										<option value="83" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											MYANMAR (EX BIRMANIA)
										</option>
									
										&gt; 
										<option value="206" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NAMIBIA
										</option>
									
										&gt; 
										<option value="109" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NAURU
										</option>
									
										&gt; 
										<option value="115" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NEPAL
										</option>
									
										&gt; 
										<option value="47" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NICARAGUA
										</option>
									
										&gt; 
										<option value="150" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NIGER
										</option>
									
										&gt; 
										<option value="117" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NIGERIA
										</option>
									
										&gt; 
										<option value="205" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NIUE
										</option>
									
										&gt; 
										<option value="48" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											NORVEGIA
										</option>
									
										&gt; 
										<option value="253" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NUOVA CALEDONIA
										</option>
									
										&gt; 
										<option value="49" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											NUOVA ZELANDA
										</option>
									
										&gt; 
										<option value="50" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											OLANDA
										</option>
									
										&gt; 
										<option value="163" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											OMAN
										</option>
									
										&gt; 
										<option value="36" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											PAKISTAN
										</option>
									
										&gt; 
										<option value="216" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PALAU
										</option>
									
										&gt; 
										<option value="279" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											PALESTINATERRITORI AUTONOMI DI
										</option>
									
										&gt; 
										<option value="51" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PANAMA
										</option>
									
										&gt; 
										<option value="186" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PAPUA NUOVA GUINEA
										</option>
									
										&gt; 
										<option value="52" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PARAGUAY
										</option>
									
										&gt; 
										<option value="232" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PENON DE ALHUCEMAS
										</option>
									
										&gt; 
										<option value="233" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PENON DE VELEZ DE LA GOMERA
										</option>
									
										&gt; 
										<option value="53" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PERU
										</option>
									
										&gt; 
										<option value="175" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PITCAIRN
										</option>
									
										&gt; 
										<option value="225" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											POLINESIA FRANCESE
										</option>
									
										&gt; 
										<option value="54" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											POLONIA
										</option>
									
										&gt; 
										<option value="55" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											PORTOGALLO
										</option>
									
										&gt; 
										<option value="220" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											PORTORICO
										</option>
									
										&gt; 
										<option value="91" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											PRINCIPATO DI MONACO
										</option>
									
										&gt; 
										<option value="168" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											QATAR
										</option>
									
										&gt; 
										<option value="242" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											RAS EL KHAIMAH
										</option>
									
										&gt; 
										<option value="31" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											REGNO UNITO
										</option>
									
										&gt; 
										<option value="275" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											REPUBBLICA CECA
										</option>
									
										&gt; 
										<option value="143" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											REPUBBLICA CENTRAFRICANA
										</option>
									
										&gt; 
										<option value="63" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											REPUBBLICA DOMINICANA
										</option>
									
										&gt; 
										<option value="78" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											REPUBBLICA SUDAFRICANA
										</option>
									
										&gt; 
										<option value="247" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											REUNION
										</option>
									
										&gt; 
										<option value="61" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											ROMANIA
										</option>
									
										&gt; 
										<option value="262" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											RUSSIA
										</option>
									
										&gt; 
										<option value="151" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											RWANDA
										</option>
									
										&gt; 
										<option value="166" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SAHARA OCCIDENTALE
										</option>
									
										&gt; 
										<option value="222" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SAINT MARTIN SETTENTRIONALE
										</option>
									
										&gt; 
										<option value="191" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SALOMONE
										</option>
									
										&gt; 
										<option value="131" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SAMOA OCCIDENTALI
										</option>
									
										&gt; 
										<option value="37" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SAN MARINO
										</option>
									
										&gt; 
										<option value="187" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SAO TOME
										</option>
									
										&gt; 
										<option value="152" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SENEGAL
										</option>
									
										&gt; 
										<option value="289" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											SERBIA
										</option>
									
										&gt; 
										<option value="189" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SEYCHELLES
										</option>
									
										&gt; 
										<option value="243" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											SHARJAH
										</option>
									
										&gt; 
										<option value="153" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SIERRA LEONE
										</option>
									
										&gt; 
										<option value="147" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SINGAPORE
										</option>
									
										&gt; 
										<option value="294" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SINT MAARTEN (DUTCH PART)
										</option>
									
										&gt; 
										<option value="276" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SLOVACCHIA
										</option>
									
										&gt; 
										<option value="260" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SLOVENIA
										</option>
									
										&gt; 
										<option value="66" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SOMALIA
										</option>
									
										&gt; 
										<option value="283" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SOUTH GEORGIA E SOUTH SANDWICH
										</option>
									
										&gt; 
										<option value="67" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SPAGNA
										</option>
									
										&gt; 
										<option value="85" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SRI LANKA
										</option>
									
										&gt; 
										<option value="195" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ST KITTS E NEVIS
										</option>
									
										&gt; 
										<option value="254" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ST.HELENA
										</option>
									
										&gt; 
										<option value="199" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ST.LUCIA
										</option>
									
										&gt; 
										<option value="248" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											ST.PIERRE E MIQUELON
										</option>
									
										&gt; 
										<option value="196" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ST.VINCENT
										</option>
									
										&gt; 
										<option value="69" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											STATI UNITI D'AMERICA
										</option>
									
										&gt; 
										<option value="84" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SUD COREA (COREA REP.DI)
										</option>
									
										&gt; 
										<option value="70" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SUDAN
										</option>
									
										&gt; 
										<option value="124" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SURINAME
										</option>
									
										&gt; 
										<option value="286" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											SVALBARD E JAN MAYEN ISLANDS
										</option>
									
										&gt; 
										<option value="68" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SVEZIA
										</option>
									
										&gt; 
										<option value="71" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											SVIZZERA
										</option>
									
										&gt; 
										<option value="138" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											SWAZILAND NGWANE
										</option>
									
										&gt; 
										<option value="272" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TAGIKISTAN
										</option>
									
										&gt; 
										<option value="22" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TAIWAN
										</option>
									
										&gt; 
										<option value="57" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TANZANIA
										</option>
									
										&gt; 
										<option value="245" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TERR BRITANNICO OCEANO INDIANO
										</option>
									
										&gt; 
										<option value="180" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TERRITORIO ANTARTICO BRITANNICO
										</option>
									
										&gt; 
										<option value="183" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											TERRITORIO ANTARTICO FRANCESE
										</option>
									
										&gt; 
										<option value="72" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											THAILANDIA
										</option>
									
										&gt; 
										<option value="155" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TOGO
										</option>
									
										&gt; 
										<option value="236" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TOKELAU
										</option>
									
										&gt; 
										<option value="162" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TONGA
										</option>
									
										&gt; 
										<option value="120" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TRINIDAD
										</option>
									
										&gt; 
										<option value="229" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TRISTAN DA CUNHA
										</option>
									
										&gt; 
										<option value="75" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											TUNISIA
										</option>
									
										&gt; 
										<option value="76" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											TURCHIA
										</option>
									
										&gt; 
										<option value="273" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TURKMENISTAN
										</option>
									
										&gt; 
										<option value="210" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TURKS E CAICOS
										</option>
									
										&gt; 
										<option value="193" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											TUVALU'
										</option>
									
										&gt; 
										<option value="263" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											UCRAINA
										</option>
									
										&gt; 
										<option value="132" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											UGANDA
										</option>
									
										&gt; 
										<option value="244" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											UMM AL QAIWAIN
										</option>
									
										&gt; 
										<option value="77" data-tipo-paese="SEPA" data-iban-obbligatorio="true">
											UNGHERIA
										</option>
									
										&gt; 
										<option value="80" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											URUGUAY
										</option>
									
										&gt; 
										<option value="271" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											UZBEKISTAN
										</option>
									
										&gt; 
										<option value="121" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											VANUATU
										</option>
									
										&gt; 
										<option value="81" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											VENEZUELA
										</option>
									
										&gt; 
										<option value="221" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											VERGINI AMERICANEISOLE
										</option>
									
										&gt; 
										<option value="249" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="true">
											VERGINI BRITANNICHEISOLE
										</option>
									
										&gt; 
										<option value="62" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											VIETNAM REPUBBLICA DEMOCRATICA
										</option>
									
										&gt; 
										<option value="218" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											WALLIS E FUTUNA
										</option>
									
										&gt; 
										<option value="42" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											YEMEN
										</option>
									
										&gt; 
										<option value="58" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ZAMBIA
										</option>
									
										&gt; 
										<option value="73" data-tipo-paese="EXTRA_SEPA" data-iban-obbligatorio="false">
											ZIMBABWE
										</option></select>						   
						    </div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-6">
						    <label class="control-label" for="causale">
						    	Località beneficiario
						    </label> 
						    <div class="form-field">
						    	<div class="editable-input"><input type="text" name="localitaBeneficiario" maxlength="40" value="" id="localitaBeneficiario" class="form-control clear-x"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label" for="causale">
								Indirizzo beneficiario
							</label> 
							<div class="form-field">
								<div class="editable-input"><input type="text" name="indirizzoBeneficiario" maxlength="40" value="" id="indirizzoBeneficiario" class="form-control clear-x"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group btnWrapper">
		           <div class="btn-align-right">
		              <a type="button" href="javascript:;" class="btn btn-primary to-able disabled " title="prosegui" disabled="" id="btnProseguiBonifico">prosegui</a>
		          </div>
       			</div>
			</div>
			
		</form>
	</section>
</div>

<script type="text/javascript">

$("#tabDatiFacoltativi").hide();

$(function(){
	// se cambia paeseDestinazione o valuta -> gestioneCampi()
	$('#paeseAppartenenzaCC').change(function() {
		gestioneCampi();
		$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');	
	});
	$('#valuta').change(function() {

		$('#formBonificoNuovo').find('.tab-data-btn').removeClass('selected');
		$('#formBonificoNuovo').find('.tabber-wrapper').removeClass('active');
		$('#formBonificoNuovo').find('.tab-data-content').hide();

		gestioneCampi();
		$('#importo').focus();
		$('#valuta').focus();
		$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');	
	});
});

/*
	Funzione chiamata quando c'è un errore di compilazione del form
*/
function stampaErroreAjax(result) {
	// -> mostra il messaggio di errore in alto
	var p = $("#erroreAjax").find("p");
	p.html("");
	$.each( result.globalErrors, function( key, value ) {
	  p.append("<p>- "+value+"</p>");
	});
	$("#erroreAjax").show();
		
	//-> scroll in alto
	var boxErrore = $('#erroreAjax');
	$("html, body").animate({scrollTop: boxErrore.offset().top-92},500)
	  	
	// -> disabilita i pulsanti
	$('.tab-data').closest('div').removeClass('selected');
    $('.tabber-wrapper').removeClass('active');
    $('.tabber-wrapper').find('.tab-data-content').hide();
               
    var el =  $("#formBonificoNuovo"); 
    //setLayerObject(el);
    
    $("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');
}

/*
	FUNZIONE verificaBonificoIstantaneoUrgente
	chiama tramite ajax al click sul pulsante hoFretta
*/
function verificaBonificoIstantaneoUrgente() {
	
	stampaErroreAjax(result);
	$("#erroreAjax").find("p").html("");
	$("#erroreAjax").hide();
	$(".errorIst").html("");
	$(".noErrorIst").hide();
	$(".errorIst").hide();
	$.ajax({
		type: "POST",
		// url: getPathContext()+"/pagamenti/verificaIstantaneo.do",
		url: "/pagamenti/verificaIstantaneo.do",
		data: $('#formBonificoNuovo').serialize(),    
		dataType: 'json',
		async: false,
		success: function(result){
			//console.log(result);
			if (result.globalErrors) {
				stampaErroreAjax(result);
			}else{
				// mostra il riquadro verde
				$('#scegliData').closest('div').removeClass('selected');
				$('#hoFretta').closest('div').addClass('selected');
		        $('.tabber-wrapper').addClass('active');
		        $('.tabber-wrapper').find('.tab-data-content').hide();
		        $('#tabHoFretta').show();
		        
		        $('.btn-icon.info-veloce').addClass('icoActive');
		        $('.btn-icon.info-standard').removeClass('icoActive');

			        			
				if (!result.errors) {					
					
					$(".errorIst").hide();
					// popola i campi UI con RES 
					$("#commissione1IU").text(getImportoString(result.importoCommissioni));
					$("#commissione2IU").text(getImportoString(result.importoSpese));	
					$("#dataEsecuzioneIU").text(result.dataEsecuzione);	
					$("#dataAccreditoIU").text(result.dataAccredito);
					$('input[name="dataEsecuzione"]').val(result.dataEsecuzione);
					$(".noErrorIst").show();
					
					$("#formBonificoNuovo").find('.to-able').attr('disabled',false).removeClass('disabled');						
				}else {
					$(".noErrorIst").hide();
					var messaggioErrore = "Non è possibile effettuare bonifici veloci per i seguenti motivi:<br><ul>";
					$.each( result.errors, function(index,value){
						messaggioErrore += ("<li>Errore "+index + ": " + value+"</li>");
					});
					messaggioErrore += "</ul>";
					$(".errorIst").html(messaggioErrore);
					$(".errorIst").show();
					$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');
				}
			}
		},
		error: function(result){
			//alert('error');
			$(".noErrorIst").hide();
			var messaggioErrore = "Non è possibile effettuare bonifici veloci per i seguenti motivi:<br><ul><li>Errore generico</li></ul>";
			$(".errorIst").html(messaggioErrore);
			$(".errorIst").show();
			$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');			
		}
	});
}

function getImportoString(importo) {
	if (importo.valore != undefined
		&& importo.valore>=0) {
		return Number(importo.valore).toFixed(2).replace(".",",")+' '+importo.divisa;
	}
	return "N.D.";
}
	
/*
	FUNZIONE verificaBonificoIstantaneoUrgente
	chiama tramite ajax al click sul pulsante scegliData
*/
function verificaBonificoOrdinarioEstero() {
	$("#erroreAjax").find("p").html("");
	$("#erroreAjax").hide();
	$(".errorOrd").html("");
	$(".noErrorOrd").hide();
	$(".errorOrd").hide();
	$.ajax({
		type: "POST",
		// url: getPathContext()+"/pagamenti/verificaOrdinario.do",
		url: "/pagamenti/verificaIstantaneo.do",
		data: $('#formBonificoNuovo').serialize(),    
		dataType: 'json',
		success: function(result){
			if (result.globalErrors) {
				stampaErroreAjax(result);
			}else{	
				// mostra il riquadro verde
				$('#hoFretta').closest('div').removeClass('selected');
				$('.btn-icon.info-veloce').removeClass('icoActive');
				$('#scegliData').closest('div').addClass('selected');
				$('.btn-icon.info-standard').addClass('icoActive');
				$('.tabber-wrapper').addClass('active');
		        $('.tabber-wrapper').find('.tab-data-content').hide();
				$('#tabScegliData').show();
			   		
				if (!result.errors) {
					$(".errorOrd").hide();
					$("#commissioneOE").text(getImportoString(result.importoCommissioni));
					$('input[name="dataEsecuzione"]').val(result.dataEsecuzione);
	 				if (isBonificoEstero()) {
						$("#dataAccreditoO").hide();
						$("#dataAccreditoE").show();
						$("#speseOE").text(getImportoString(result.importoSpese));
						$(".speseOE").hide();
					}
					else {
						$("#dataAccreditoO").show();
						$("#dataAccreditoE").hide();
						$(".speseOE").hide();
					}
					$(".noErrorOrd").show();
							
					$("#formBonificoNuovo").find('.to-able').attr('disabled',false).removeClass('disabled');		
				}else {
					$(".noErrorOrd").hide();
					var messaggioErrore = "Non è possibile effettuare bonifici per i seguenti motivi:<br><ul>";					
					$.each( result.errors, function(index,value){
						messaggioErrore += ("<li>Errore "+index + ": " + value+"</li>");
					});
					messaggioErrore += "</ul>";			
					$(".errorOrd").html(messaggioErrore);
					$(".errorOrd").show();

					$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');
				}
			}		
		},
		error: function(result){
			$(".noErrorIst").hide();
			var messaggioErrore = "Non è possibile effettuare bonifici per i seguenti motivi:<br><ul><li>Errore generico</li></ul>";
			$(".errorIst").html(messaggioErrore);
			$(".errorIst").show();
			$("#formBonificoNuovo").find('.to-able').attr('disabled',true).addClass('disabled');	
		}
	});
	
}	
</script>
<script type="text/javascript">
var isContoDeposito = false;
// chiamata ajax iniziale per recuperare la lista beneficiari
var lista;
$(function() {
	$.ajax({
	     type: "POST",
	     //url: getPathContext()+"/pagamenti/beneficiariBonifico.do", url: "/include/bonificoBeneficiari2.php",
	     url: "/include/bonificoBeneficiari2.php",
       	data: "stringaRicerca="+$("#autocompletamento").val(),      
	     dataType: 'json',
	     success: function(result){
	       //lista = result["json"];               
	       lista = result; // importante
	       //console.log('['+JSON.stringify(lista)+']');
	       //crea(req, resp);
	    }
	 }); 
	 
	if(isContoDeposito){
    	$('#autocompletamentoBonificoInput').attr("placeholder","Lista conti di appoggio");
    	$('#aggiungiBeneficiarioSecond').hide(); 
    	$('#iban').attr("readonly","readonly"); 
    }  
	 
	// INIZIO CONVERGENZA
	var inputAutocomplete =  $("#autocompletamentoBonificoInput");
	isOpenMenu = false;
       
    inputAutocomplete.next('button').on('click',function(event){
         if(!isOpenMenu) {
            inputAutocomplete.val('');
            inputAutocomplete.trigger('keydown');
            inputAutocomplete.focus();
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
        response: function(event, ui){
            $('.iban-to-fill').val('');
            // riga del nuovo beneficiario
            if(!isContoDeposito){
            	ui.content.push({id: 'nuovo-contatto', label: '', nome: $( "#autocompletamentoBonificoInput" ).val() + ' ' + '(nuovo beneficiario)', descrizione: '', iban: '', bic: '',numCCEstero: ''});
			}
			//console.log("RESPONSE");
        },
        select: function( event, ui ) { 									
 		  updateField(ui.item.nome,ui.item.id,ui.item.iban,ui);
           
          if(ui.item.id!=='nuovo-contatto') {
            fillIban(ui.item.nome,ui.item.id,ui.item.iban);
          }
          else {
            resetIban(ui.item.nome,ui.item.id,ui.item.iban);
          }
                 
          $('#aggiungiBeneficiarioSecond').hide();          
          if($('#aggiungiB').is(':checked')) {     
              $('#aggiungiB').trigger('click');
          }
          if(ui.item.id==='nuovo-contatto'){
            $('#aggiungiBeneficiarioSecond').show();
            $('#nickname').val($('#autocompletamentoBonificoInput').val());
           
          }
          isOpenMenu = false;
          event.preventDefault();
          
          //console.log("SELECT");
        },
        focus: function( event, ui ) {
          //updateField(ui.item.nome,ui.item.id,ui.item.iban,ui,false);
          event.preventDefault();
		  //console.log("FOCUS");
        },

        create: function(event, ui) {
	        $(this).data('ui-autocomplete')._renderItem  = function( ul, item ) {
		        var classNameNuovo =  (item.id == 'nuovo-contatto') ? 'nuovoContatto' : 'border-bottom';
		        return $( "<li class='" + classNameNuovo + "'>")
		        .append( "<div>" + item.label + '<span class="sep">-</span>'  + item.nome + '<br>')
		        .append( item.iban?item.iban:item.numCCEstero + " - " + item.bic)
		        
		        .addClass('ui-menu-item')
		        .appendTo( ul );
	        }
        //console.log("CREATE");
        }

      });
    
    var autocompleteBonifico = '';
    if(autocompleteBonifico!= undefined && autocompleteBonifico!=""){
    	$("#autocompletamentoBonificoInput").val(autocompleteBonifico);  
    }
    																			
	// CODICE DI GESTIONE CASO CLICK INDIETRO o TITOLARE EFFETTIVO
	if($("#tipologiaBonificoIniziale").val()!=""){	
		
		var categoria = '';
																				
        if(categoria=="SEPA" || categoria=="ESTERO" ){                  
            verificaBonificoOrdinarioEstero();                 
            $("#tabScegliData").show();
            $("#scegliData").parent().addClass("selected");
            $('.btn-icon.info-standard').addClass('icoActive');

        } else {

            verificaBonificoIstantaneoUrgente(); 
            $("#tabHoFretta").show();
            $("#hoFretta").parent().addClass("selected");
            $('.btn-icon.info-veloce').addClass('icoActive');
        }

		gestioneCampi();

		// chiamata funzione abilitazione pulsanti grandi
		var el =  $("#formBonificoNuovo"); 
		//unsetLayerObject(el);
		// abilitazione pulsante prosegui
		el.find('.to-able').attr('disabled',false).removeClass('disabled');
		//checkFocusOutToAble('formBonificoNuovo', ableButton);
		
		if(!isNuovoBeneficiario()) { // nasconde pulsate aggiungi beneficiario se era stato selezionato un beneficiario 
			$('#aggiungiBeneficiarioSecond').hide();		
		}
		
	}
      // FINE CONVERGENZA
  });
  
  function crea(req, resp) {
	    var re = $.ui.autocomplete.escapeRegex(req.term);
	    isOpenMenu = true;
	    var matcher = new RegExp( re, "i" );   
      resp($.map(lista, function(item,event) {
      	//console.log('['+JSON.stringify(lista)+']');
     
      	//var stringa = item.nickName; //  + item.nome;
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
     }));
  }

  function resetIban(value,idEl,iban) {
      $('.iban-to-fill').val('').focus();
      $( "#autocompletamentoBonificoInput" ).focus();
  } 
  function fillIban(value,idEl,iban) {
      $('.iban-to-fill').val(iban).focus();
      $( "#autocompletamentoBonificoInput" ).focus();
  }
  
  
  /*
  funzione chiamata quando si seleziona un valore sulla combobox del beneficiario (o si inserisce un valore nuovo)
  */
function updateField(value,idEl,iban,ui) { 
    $("#autocompletamentoBonificoInput").focus();
    
	    if(idEl==='nuovo-contatto'){
			$("#autocompletamentoBonificoInput").val(value.replace(' (nuovo beneficiario)',''));
			$("#nuovoBeneficiario").val('S');
		}else{
			$("#autocompletamentoBonificoInput").val(value);
			$("#nuovoBeneficiario").val('N');  											
		}

	if(!isNuovoBeneficiario()){	// CONTATTO SELEZIONATO
		//$("#iban").val(iban); 
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
	}else{ // NUOVO CONTATTO
		// reset di tutti i campi
		$('#paeseAppartenenzaCC').val('86');
		$('#numeroConto').val('');
		$('#bic').val('');
		$('#iban').val('');
		
		$('#formGroupSwift').hide();
		$('#formGroupIban').show();
		
		$("#nazioneBeneficiario").val('');
		$("#indirizzoBeneficiario").val('');
		$("#localitaBeneficiario").val('');		
		
		// abilitazione di tutti i campi		
		$('#paeseAppartenenzaCC').removeAttr('readonly','readonly');
		$('#paeseAppartenenzaCC option').attr('disabled', false);
		
		$('#numeroConto').removeAttr('readonly','readonly');
		$('#bic').removeAttr('readonly','readonly');
		$('#iban').removeAttr('readonly','readonly');
		
		$("#nazioneBeneficiario").removeAttr('readonly','readonly');
		$('#nazioneBeneficiario option').attr('disabled', false);
		
		$("#indirizzoBeneficiario").removeAttr('readonly','readonly');
		$("#localitaBeneficiario").removeAttr('readonly','readonly');	
				
	}
	
	gestioneCampi();
 }
  
function isBonificoEstero(){
	return $('input[name="tipologiaBonificoIniziale"]').val()=="ESTERO";
}

function setTipoBonifico(isSepa,isValutaEuro) {
	if (isSepa && isValutaEuro){ 
		$('#tipologiaBonificoIniziale').val("SEPA");
	}else {
		$('#tipologiaBonificoIniziale').val("ESTERO");
	}	
}

function isNuovoBeneficiario() {
	return $("#nuovoBeneficiario").val()=="S";
}


	function gestioneCampi() {
		
		
		var isSepa = $('#paeseAppartenenzaCC option:selected').attr("data-tipo-paese")=="EXTRA_SEPA"?false:true;
		var isIbanObbligatorio = $('#paeseAppartenenzaCC option:selected').attr("data-iban-obbligatorio")=="false"?false:true;
		var isValutaEuro = $('#valuta option:selected').val()=="EUR"?true:false;
		
		setTipoBonifico(isSepa,isValutaEuro); 
		
		if(!isIbanObbligatorio){ 							
			$('#formGroupSwift').show();
			$('#formGroupIban').hide();
			
			$('#formGroupIban').find('input').removeClass('input-required');
		    $('#formGroupSwift').find('input').addClass('input-required');
		}else{									
			$('#formGroupSwift').hide();
			$('#formGroupIban').show();
			
			$('#formGroupIban').find('input').addClass('input-required');
   			$('#formGroupSwift').find('input').removeClass('input-required');
		}

		if(!isNuovoBeneficiario()) { // blocco l'update dei campi di un beneficiario gia' censito
			$('#paeseAppartenenzaCC').attr('readonly','readonly');
			$('#paeseAppartenenzaCC option').attr('disabled', true);
			$('#paeseAppartenenzaCC option:selected').attr('disabled', false);
			
			$('#numeroConto').attr('readonly','readonly');
			$('#bic').attr('readonly','readonly');		
			$('#iban').attr('readonly','readonly');			
			
			$('#nazioneBeneficiario').attr('readonly','readonly');
			$('#nazioneBeneficiario option').attr('disabled', true);
			$('#nazioneBeneficiario option:selected').attr('disabled', false);
			
			$("#indirizzoBeneficiario").attr('readonly','readonly');
			$("#localitaBeneficiario").attr('readonly','readonly');				
		}
		
		if(isSepa && isValutaEuro){
			$("#tabDatiFacoltativi").hide();
		}else{
			$("#tabDatiFacoltativi").show();
		}
		
		// gestion abilitazioni pulsanti per cambio paese di destinazione
		checkFocusOutToAble('formBonificoNuovo', ableButton)
    }
    
    // gestione abilitazioni pulsanti standard
    $('.form-control').on('focus',function(){removeErrorFields()})
	checkFocusOutToAble('formBonificoNuovo', ableButton);
</script>