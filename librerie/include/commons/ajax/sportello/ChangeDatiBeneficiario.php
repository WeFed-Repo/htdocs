<?php
header('content-type: application/json; charset=utf-8');
$tipoBonifico = $_POST['tipoBonifico'];
$tipoBeneficiario = $_POST['tipoBeneficiario'];
?>
<?php if ($tipoBonifico == 'SEPA') { ?>
	<?php if ($tipoBeneficiario === 'RUB') { ?>
<!-- controllo se il bonifico è italiano o estero -->
<!-- bonifico SEPA e RUBRICA BENEFICIARIO -->
<input type="hidden" name="emailBeneficiario" value=""/>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield" id="benef">Nome beneficiario*</label>
				<!-- === org.apache.jsp.banking.rubricaListSelect_jsp === { -->
				<select class="" 1 name="idRubrica" id="selectRubrica" onchange="selezionaDaRubrica();" style="display:none">
					<option value="" rubricaId="" rubricaIban="" rubricaBic="" rubricaConto="" rubricaIntestazione="" rubricaCF="" rubricaIndirizzo="" rubricaComune="" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaNote="" rubricaContattoVeloce="" rubricaToShow="">scrivi o seleziona il nominativo</option>
					<option value="5619871"  rubricaId="5619871" rubricaEmail="www@www.it" rubricaIban="IT55E0340201749000000086803" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi" rubricaNote="" rubricaCF="" rubricaIndirizzo="aasd asd asd a" rubricaComune="" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi">contatto2 - IT55E0340201749000000086803 - Pippo Franchi</option>
					<option value="5619877"  rubricaId="5619877" rubricaEmail="www@www.it" rubricaIban="IT55E0340201749000000086803" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi">www www - IT55E0340201749000000086803 - Pippo Franchi</option>
					<option value="5619878"  rubricaId="5619878" rubricaEmail="www@www.it" rubricaIban="IT15Y0871739480000000033175" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi &Eacute;lys&eacute;es" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi &Eacute;lys&eacute;es">www www - IT15Y0871739480000000033175 - Pippo Franchi &Eacute;lys&eacute;es</option>
					<option value="5619872"  rubricaId="5619872" rubricaEmail="www@www.it" rubricaIban="IT94F0760101600000064866734" rubricaBic="" rubricaConto="" rubricaIntestazione="TARANTINO GIANFRANCO" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="TARANTINO GIANFRANCO">www www - IT94F0760101600000064866734 - TARANTINO GIANFRANCO</option>
				</select>
				<script type="text/javascript">
					(function(t) {
						$.widget( "ui.combobox", {
							_create: function() {
								this.wrapper = $( "<span>" )				
								.insertAfter( this.element );
								this._createAutocomplete();
								this._createShowAllButton();
							},
							
							_createAutocomplete: function() {				
								var selected = this.element.children( ":selected" ),				
								value = selected.val() ? selected.attr("rubricaToShow") : "";
								var element = this.element;
								this.input = $( "<input type=\"text\" id=\""+this.element.attr("id")+"Input\" name=\""+this.element.attr("name")+"Input\" maxlength=\"100\" placeholder=\"scrivi o seleziona il nominativo\">" )
								.appendTo( this.wrapper )
								.val( value )								
								.addClass( "grande " )				
								.autocomplete({
									delay: 0,
									minLength: 0,
									source: $.proxy( this, "_source" ),
									select: function( event, ui ) {
										element.trigger("change");
									}
								});
								this.input.data( "ui-autocomplete" )._renderItem = $.proxy( this, "_renderItem" );
								this._on( this.input, {
									autocompleteselect: function( event, ui ) {
										ui.item.option.selected = true;
										this._trigger( "select", event, {
											item: ui.item.option
										});
									},
									autocompletechange: "_removeIfInvalid"
								});
							},
							
							_createShowAllButton: function() {
								var wasOpen = false;
								var input=this.input;
								$( '<a class="autoSelButt" alt="mostra tutti" title="mostra tutti"/></a>' )
								.attr( "tabIndex", -1 )
								.attr( "title", "Mostra tutti" )							
								.appendTo( this.wrapper )		
								.mousedown(function() {
									wasOpen = input.autocomplete( "widget" ).is( ":visible" );
								})
								.click(function() {
									input.focus();
									// Close if already visible
									if ( wasOpen ) {
									return;
									}
								// Pass empty string as value to search for, displaying all results
								input.autocomplete( "search", "" );
								});
							},
					
							_source: function( request, response ) {
								var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
								response( this.element.children( "option" ).map(function() {
									var contattoVeloce=$( this ).attr("rubricaContattoVeloce");
									var text = $( this ).text();					
									if(contattoVeloce=="true"){
										text="<strong>"+text+"</strong>";
									}
									var value = $( this ).attr("rubricaToShow");
									if ( value && ( !request.term || matcher.test(text) ) )
										return {
											label: text,
											value: value,
											option: this
										};
								}) );
							},
							
							_removeIfInvalid: function( event, ui ) {
								// Selected an item, nothing to do
								if ( ui.item ) {
									return;
								}
								// Search for a match (case-insensitive)
								var value = this.input.val(),
								valueLowerCase = value.toLowerCase(),
								valid = false;
								var element=this.element;
								this.element.children( "option" ).each(function() {
									if ( $( this ).text().toLowerCase() === valueLowerCase ) {
										this.selected = valid = true;	
										element.trigger("change");
										return false;
									}
								});
								// Found a match, nothing to do
								if ( valid ) {
									return;
								}
								// Remove invalid value
								this.input
								.val( "" )				
								this.element.val( "" );
								this.input.data( "ui-autocomplete" ).term = "";
								
								selezionaDaRubrica();;
							},
							
							_renderItem: function( ul, item ) {				
									return $( "<li>" )
									.append( "<a>" + item.label + "</a>" )
									.appendTo( ul );				
							},
							
							_destroy: function() {
								this.wrapper.remove();
								this.element.show();
							}
						});
					})(jQuery);
					
					$(function() {
						$( "#selectRubrica").combobox();
					});	
				</script>
				<!-- } === org.apache.jsp.banking.rubricaListSelect_jsp === -->
				<input type="hidden" name="benef">
			</div>
			<div class="span6">
				<label class="nomefield"> &nbsp;</label>
				<span class="output">
				<a href="javascript:nuovoBeneficiario(true);resettaCampi();">inserisci nuovo beneficiario</a>
				</span>
			</div>
		</div>
	</div>
</div>
<div id="all_benBox" style="display: none;">
	<div class="row-fluid formGeneric">
		<div class="span12 clearfix">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Iban beneficiario*</label>
					<span class="output" id="ibanId_benLabel"></span>
					<input type="hidden" name="ibanId_ben" id="ibanId_benHidden"/>
				</div>
				<div class="span6">
					<label class="nomefield" id="cod">Nazione di residenza beneficiario*</label>
					<span class="output">
						<select name="cod">
							<option value=""> </option>
							<option value="AF" >Afghanistan</option>
							<option value="AL" >Albania</option>
							<option value="DZ" >Algeria</option>
							<option value="AD" >Andorra</option>
							<option value="AO" >Angola</option>
							<option value="AI" >Anguilla</option>
							<option value="AQ" >Antartide</option>
							<option value="AG" >Antigua e Barbuda</option>
							<option value="AN" >Antille Olandesi</option>
							<option value="SA" >Arabia Saudita</option>
							<option value="AR" >Argentina</option>
							<option value="AM" >Armenia</option>
							<option value="AW" >Aruba</option>
							<option value="AU" >Australia</option>
							<option value="AT" >Austria</option>
							<option value="AZ" >Azerbaigian</option>
							<option value="BS" >Bahamas</option>
							<option value="BH" >Bahrein</option>
							<option value="BD" >Bangladesh</option>
							<option value="BB" >Barbados</option>
							<option value="BE" >Belgio</option>
							<option value="BZ" >Belize</option>
							<option value="BJ" >Benin</option>
							<option value="BM" >Bermuda</option>
							<option value="BT" >Bhutan</option>
							<option value="BY" >Bielorussia</option>
							<option value="MM" >Birmania</option>
							<option value="BO" >Bolivia</option>
							<option value="BA" >Bosnia ed Erzegovina</option>
							<option value="BW" >Botswana</option>
							<option value="BR" >Brasile</option>
							<option value="BN" >Brunei</option>
							<option value="BG" >Bulgaria</option>
							<option value="BF" >Burkina Faso</option>
							<option value="BI" >Burundi</option>
							<option value="KH" >Cambogia</option>
							<option value="CM" >Camerun</option>
							<option value="CA" >Canada</option>
							<option value="CV" >Capo Verde</option>
							<option value="TD" >Ciad</option>
							<option value="CL" >Cile</option>
							<option value="CN" >Cina</option>
							<option value="CY" >Cipro</option>
							<option value="VA" >Città del Vaticano</option>
							<option value="CO" >Colombia</option>
							<option value="KM" >Comore</option>
							<option value="KP" >Corea del Nord</option>
							<option value="KR" >Corea del Sud</option>
							<option value="CR" >Costa Rica</option>
							<option value="CI" >Costa d'Avorio</option>
							<option value="HR" >Croazia</option>
							<option value="CU" >Cuba</option>
							<option value="CW" >Curacao</option>
							<option value="DK" >Danimarca</option>
							<option value="DM" >Dominica</option>
							<option value="EC" >Ecuador</option>
							<option value="EG" >Egitto</option>
							<option value="SV" >El Salvador</option>
							<option value="AE" >Emirati Arabi Uniti</option>
							<option value="ER" >Eritrea</option>
							<option value="EE" >Estonia</option>
							<option value="ET" >Etiopia</option>
							<option value="FJ" >Figi</option>
							<option value="PH" >Filippine</option>
							<option value="FI" >Finlandia</option>
							<option value="FR" >Francia</option>
							<option value="GA" >Gabon</option>
							<option value="GM" >Gambia</option>
							<option value="GE" >Georgia</option>
							<option value="GS" >Georgia del Sud e isole Sandwich meridionali</option>
							<option value="DE" >Germania</option>
							<option value="GH" >Ghana</option>
							<option value="JM" >Giamaica</option>
							<option value="JP" >Giappone</option>
							<option value="GI" >Gibilterra</option>
							<option value="DJ" >Gibuti</option>
							<option value="JO" >Giordania</option>
							<option value="GR" >Grecia</option>
							<option value="GD" >Grenada</option>
							<option value="GL" >Groenlandia</option>
							<option value="GP" >Guadalupa</option>
							<option value="GU" >Guam</option>
							<option value="GT" >Guatemala</option>
							<option value="GG" >Guernsey</option>
							<option value="GN" >Guinea</option>
							<option value="GQ" >Guinea Equatoriale</option>
							<option value="GW" >Guinea-Bissau</option>
							<option value="GY" >Guyana</option>
							<option value="GF" >Guyana francese</option>
							<option value="HT" >Haiti</option>
							<option value="HN" >Honduras</option>
							<option value="HK" >Hong Kong</option>
							<option value="IN" >India</option>
							<option value="ID" >Indonesia</option>
							<option value="IR" >Iran</option>
							<option value="IQ" >Iraq</option>
							<option value="IE" >Irlanda</option>
							<option value="IS" >Islanda</option>
							<option value="BV" >Isola Bouvet</option>
							<option value="NF" >Isola Norfolk</option>
							<option value="IM" >Isola di Man</option>
							<option value="CX" >Isola di Natale</option>
							<option value="AX" >Isole Aland</option>
							<option value="BQ" >Isole BES</option>
							<option value="KY" >Isole Cayman</option>
							<option value="CC" >Isole Cocos e Keeling</option>
							<option value="CK" >Isole Cook</option>
							<option value="FK" >Isole Falkland</option>
							<option value="FO" >Isole Faroer</option>
							<option value="HM" >Isole Heard e McDonald</option>
							<option value="MP" >Isole Marianne Settentrionali</option>
							<option value="MH" >Isole Marshall</option>
							<option value="PN" >Isole Pitcairn</option>
							<option value="SB" >Isole Salomone</option>
							<option value="VI" >Isole Vergini americane</option>
							<option value="VG" >Isole Vergini britanniche</option>
							<option value="UM" >Isole minori esterne degli Stati Uniti</option>
							<option value="IL" >Israele</option>
							<option value="IT" >Italia</option>
							<option value="JE" >Jersey</option>
							<option value="KZ" >Kazakistan</option>
							<option value="KE" >Kenya</option>
							<option value="KG" >Kirghizistan</option>
							<option value="KI" >Kiribati</option>
							<option value="XK" >Kosovo</option>
							<option value="KW" >Kuwait</option>
							<option value="LA" >Laos</option>
							<option value="LS" >Lesotho</option>
							<option value="LV" >Lettonia</option>
							<option value="LB" >Libano</option>
							<option value="LR" >Liberia</option>
							<option value="LY" >Libia</option>
							<option value="LI" >Liechtenstein</option>
							<option value="LT" >Lituania</option>
							<option value="LU" >Lussemburgo</option>
							<option value="MO" >Macao</option>
							<option value="MK" >Macedonia</option>
							<option value="MG" >Madagascar</option>
							<option value="MW" >Malawi</option>
							<option value="MV" >Maldive</option>
							<option value="MY" >Malesia</option>
							<option value="ML" >Mali</option>
							<option value="MT" >Malta</option>
							<option value="MA" >Marocco</option>
							<option value="MQ" >Martinica</option>
							<option value="MR" >Mauritania</option>
							<option value="MU" >Mauritius</option>
							<option value="YT" >Mayotte</option>
							<option value="MX" >Messico</option>
							<option value="FM" >Micronesia</option>
							<option value="MD" >Moldavia</option>
							<option value="MC" >Monaco</option>
							<option value="MN" >Mongolia</option>
							<option value="ME" >Montenegro</option>
							<option value="MS" >Montserrat</option>
							<option value="MZ" >Mozambico</option>
							<option value="NA" >Namibia</option>
							<option value="NR" >Nauru</option>
							<option value="NP" >Nepal</option>
							<option value="NI" >Nicaragua</option>
							<option value="NE" >Niger</option>
							<option value="NG" >Nigeria</option>
							<option value="NU" >Niue</option>
							<option value="NO" >Norvegia</option>
							<option value="NC" >Nuova Caledonia</option>
							<option value="NZ" >Nuova Zelanda</option>
							<option value="NL" >Olanda</option>
							<option value="OM" >Oman</option>
							<option value="PK" >Pakistan</option>
							<option value="PW" >Palau</option>
							<option value="PS" >Palestina</option>
							<option value="PA" >Panamá</option>
							<option value="PG" >Papua Nuova Guinea</option>
							<option value="PY" >Paraguay</option>
							<option value="PE" >Perù</option>
							<option value="PF" >Polinesia francese</option>
							<option value="PL" >Polonia</option>
							<option value="PR" >Porto Rico</option>
							<option value="PT" >Portogallo</option>
							<option value="QA" >Qatar</option>
							<option value="CD" >RD del Congo</option>
							<option value="GB" >Regno Unito</option>
							<option value="CZ" >Rep. Ceca</option>
							<option value="CF" >Rep. Centrafricana</option>
							<option value="DO" >Rep. Dominicana</option>
							<option value="CG" >Rep. del Congo</option>
							<option value="RE" >Riunione</option>
							<option value="RO" >Romania</option>
							<option value="RW" >Ruanda</option>
							<option value="RU" >Russia</option>
							<option value="EH" >Sahara Occidentale</option>
							<option value="KN" >Saint Kitts e Nevis</option>
							<option value="VC" >Saint Vincent e Grenadine</option>
							<option value="BL" >Saint-Barthélemy</option>
							<option value="MF" >Saint-Martin</option>
							<option value="PM" >Saint-Pierre e Miquelon</option>
							<option value="WS" >Samoa</option>
							<option value="AS" >Samoa Americane</option>
							<option value="SM" >San Marino</option>
							<option value="SH" >Sant'Elena</option>
							<option value="LC" >Santa Lucia</option>
							<option value="SN" >Senegal</option>
							<option value="RS" >Serbia</option>
							<option value="SC" >Seychelles</option>
							<option value="SL" >Sierra Leone</option>
							<option value="SG" >Singapore</option>
							<option value="SX" >Sint Maarten</option>
							<option value="SY" >Siria</option>
							<option value="SK" >Slovacchia</option>
							<option value="SI" >Slovenia</option>
							<option value="SO" >Somalia</option>
							<option value="ES" >Spagna</option>
							<option value="LK" >Sri Lanka</option>
							<option value="US" >Stati Uniti d'America</option>
							<option value="ZA" >Sudafrica</option>
							<option value="SD" >Sudan</option>
							<option value="SS" >Sudan del Sud</option>
							<option value="SR" >Suriname</option>
							<option value="SJ" >Svalbard e Jan Mayen</option>
							<option value="SE" >Svezia</option>
							<option value="CH" >Svizzera</option>
							<option value="SZ" >Swaziland</option>
							<option value="ST" >São Tomé e Príncipe</option>
							<option value="TJ" >Tagikistan</option>
							<option value="TW" >Taiwan</option>
							<option value="TZ" >Tanzania</option>
							<option value="TF" >Terre australi e antartiche francesi</option>
							<option value="IO" >Territorio britannico dell'oceano Indiano</option>
							<option value="TH" >Thailandia</option>
							<option value="TL" >Timor Est</option>
							<option value="TG" >Togo</option>
							<option value="TK" >Tokelau</option>
							<option value="TO" >Tonga</option>
							<option value="TT" >Trinidad e Tobago</option>
							<option value="TN" >Tunisia</option>
							<option value="TR" >Turchia</option>
							<option value="TM" >Turkmenistan</option>
							<option value="TC" >Turks e Caicos</option>
							<option value="TV" >Tuvalu</option>
							<option value="UA" >Ucraina</option>
							<option value="UG" >Uganda</option>
							<option value="HU" >Ungheria</option>
							<option value="UY" >Uruguay</option>
							<option value="UZ" >Uzbekistan</option>
							<option value="VU" >Vanuatu</option>
							<option value="VE" >Venezuela</option>
							<option value="VN" >Vietnam</option>
							<option value="WF" >Wallis e Futuna</option>
							<option value="YE" >Yemen</option>
							<option value="ZM" >Zambia</option>
							<option value="ZW" >Zimbabwe</option>
						</select>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric" id="note_benBox" style="display: none;">
	<div class="span12 clearfix">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Note</label>
				<span class="output" id="note_benLabel"></span>
			</div>
		</div>
	</div>
</div>
	<?php } else { ?>
<!-- controllo se il bonifico è italiano o estero -->
<!-- bonifico SEPA e NUOVO BENEFICIARIO -->
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="benef">Nome beneficiario*</label>
				<span class="output">
				<input type="text" maxlength="150" name="benef" value=""
					> &nbsp;
				</span>
			</div>
			<div class="span6">
				<label class="nomefield"> &nbsp;</label>
				<span class="output">
				<a href="javascript:nuovoBeneficiario(false);resettaCampi();">aggiungi da rubrica</a>
				</span>
			</div>
		</div>
	</div>
</div>
<!-- IBAN italia -->
<div class="row-fluid formGeneric">
	<div class="span6">
		<div class="row-fluid">
			<div class="span8">
				<label class="nomefield" id="ibanLabel">Iban Beneficiario*</label>
				<span class="output">
				<input type="text" name="ibanId_ben" id="ibanId_ben" maxlength="35"  
					value=""  >
				</span>
			</div>
		</div>
	</div>
</div>
<!-- nazione -->
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="cod">Nazione di residenza beneficiario*</label>
				<span class="output">
					<select name="cod"  >
						<option value=""> </option>
						<option value="AF" >Afghanistan</option>
						<option value="AL" >Albania</option>
						<option value="DZ" >Algeria</option>
						<option value="AD" >Andorra</option>
						<option value="AO" >Angola</option>
						<option value="AI" >Anguilla</option>
						<option value="AQ" >Antartide</option>
						<option value="AG" >Antigua e Barbuda</option>
						<option value="AN" >Antille Olandesi</option>
						<option value="SA" >Arabia Saudita</option>
						<option value="AR" >Argentina</option>
						<option value="AM" >Armenia</option>
						<option value="AW" >Aruba</option>
						<option value="AU" >Australia</option>
						<option value="AT" >Austria</option>
						<option value="AZ" >Azerbaigian</option>
						<option value="BS" >Bahamas</option>
						<option value="BH" >Bahrein</option>
						<option value="BD" >Bangladesh</option>
						<option value="BB" >Barbados</option>
						<option value="BE" >Belgio</option>
						<option value="BZ" >Belize</option>
						<option value="BJ" >Benin</option>
						<option value="BM" >Bermuda</option>
						<option value="BT" >Bhutan</option>
						<option value="BY" >Bielorussia</option>
						<option value="MM" >Birmania</option>
						<option value="BO" >Bolivia</option>
						<option value="BA" >Bosnia ed Erzegovina</option>
						<option value="BW" >Botswana</option>
						<option value="BR" >Brasile</option>
						<option value="BN" >Brunei</option>
						<option value="BG" >Bulgaria</option>
						<option value="BF" >Burkina Faso</option>
						<option value="BI" >Burundi</option>
						<option value="KH" >Cambogia</option>
						<option value="CM" >Camerun</option>
						<option value="CA" >Canada</option>
						<option value="CV" >Capo Verde</option>
						<option value="TD" >Ciad</option>
						<option value="CL" >Cile</option>
						<option value="CN" >Cina</option>
						<option value="CY" >Cipro</option>
						<option value="VA" >Città del Vaticano</option>
						<option value="CO" >Colombia</option>
						<option value="KM" >Comore</option>
						<option value="KP" >Corea del Nord</option>
						<option value="KR" >Corea del Sud</option>
						<option value="CR" >Costa Rica</option>
						<option value="CI" >Costa d'Avorio</option>
						<option value="HR" >Croazia</option>
						<option value="CU" >Cuba</option>
						<option value="CW" >Curacao</option>
						<option value="DK" >Danimarca</option>
						<option value="DM" >Dominica</option>
						<option value="EC" >Ecuador</option>
						<option value="EG" >Egitto</option>
						<option value="SV" >El Salvador</option>
						<option value="AE" >Emirati Arabi Uniti</option>
						<option value="ER" >Eritrea</option>
						<option value="EE" >Estonia</option>
						<option value="ET" >Etiopia</option>
						<option value="FJ" >Figi</option>
						<option value="PH" >Filippine</option>
						<option value="FI" >Finlandia</option>
						<option value="FR" >Francia</option>
						<option value="GA" >Gabon</option>
						<option value="GM" >Gambia</option>
						<option value="GE" >Georgia</option>
						<option value="GS" >Georgia del Sud e isole Sandwich meridionali</option>
						<option value="DE" >Germania</option>
						<option value="GH" >Ghana</option>
						<option value="JM" >Giamaica</option>
						<option value="JP" >Giappone</option>
						<option value="GI" >Gibilterra</option>
						<option value="DJ" >Gibuti</option>
						<option value="JO" >Giordania</option>
						<option value="GR" >Grecia</option>
						<option value="GD" >Grenada</option>
						<option value="GL" >Groenlandia</option>
						<option value="GP" >Guadalupa</option>
						<option value="GU" >Guam</option>
						<option value="GT" >Guatemala</option>
						<option value="GG" >Guernsey</option>
						<option value="GN" >Guinea</option>
						<option value="GQ" >Guinea Equatoriale</option>
						<option value="GW" >Guinea-Bissau</option>
						<option value="GY" >Guyana</option>
						<option value="GF" >Guyana francese</option>
						<option value="HT" >Haiti</option>
						<option value="HN" >Honduras</option>
						<option value="HK" >Hong Kong</option>
						<option value="IN" >India</option>
						<option value="ID" >Indonesia</option>
						<option value="IR" >Iran</option>
						<option value="IQ" >Iraq</option>
						<option value="IE" >Irlanda</option>
						<option value="IS" >Islanda</option>
						<option value="BV" >Isola Bouvet</option>
						<option value="NF" >Isola Norfolk</option>
						<option value="IM" >Isola di Man</option>
						<option value="CX" >Isola di Natale</option>
						<option value="AX" >Isole Aland</option>
						<option value="BQ" >Isole BES</option>
						<option value="KY" >Isole Cayman</option>
						<option value="CC" >Isole Cocos e Keeling</option>
						<option value="CK" >Isole Cook</option>
						<option value="FK" >Isole Falkland</option>
						<option value="FO" >Isole Faroer</option>
						<option value="HM" >Isole Heard e McDonald</option>
						<option value="MP" >Isole Marianne Settentrionali</option>
						<option value="MH" >Isole Marshall</option>
						<option value="PN" >Isole Pitcairn</option>
						<option value="SB" >Isole Salomone</option>
						<option value="VI" >Isole Vergini americane</option>
						<option value="VG" >Isole Vergini britanniche</option>
						<option value="UM" >Isole minori esterne degli Stati Uniti</option>
						<option value="IL" >Israele</option>
						<option value="IT" >Italia</option>
						<option value="JE" >Jersey</option>
						<option value="KZ" >Kazakistan</option>
						<option value="KE" >Kenya</option>
						<option value="KG" >Kirghizistan</option>
						<option value="KI" >Kiribati</option>
						<option value="XK" >Kosovo</option>
						<option value="KW" >Kuwait</option>
						<option value="LA" >Laos</option>
						<option value="LS" >Lesotho</option>
						<option value="LV" >Lettonia</option>
						<option value="LB" >Libano</option>
						<option value="LR" >Liberia</option>
						<option value="LY" >Libia</option>
						<option value="LI" >Liechtenstein</option>
						<option value="LT" >Lituania</option>
						<option value="LU" >Lussemburgo</option>
						<option value="MO" >Macao</option>
						<option value="MK" >Macedonia</option>
						<option value="MG" >Madagascar</option>
						<option value="MW" >Malawi</option>
						<option value="MV" >Maldive</option>
						<option value="MY" >Malesia</option>
						<option value="ML" >Mali</option>
						<option value="MT" >Malta</option>
						<option value="MA" >Marocco</option>
						<option value="MQ" >Martinica</option>
						<option value="MR" >Mauritania</option>
						<option value="MU" >Mauritius</option>
						<option value="YT" >Mayotte</option>
						<option value="MX" >Messico</option>
						<option value="FM" >Micronesia</option>
						<option value="MD" >Moldavia</option>
						<option value="MC" >Monaco</option>
						<option value="MN" >Mongolia</option>
						<option value="ME" >Montenegro</option>
						<option value="MS" >Montserrat</option>
						<option value="MZ" >Mozambico</option>
						<option value="NA" >Namibia</option>
						<option value="NR" >Nauru</option>
						<option value="NP" >Nepal</option>
						<option value="NI" >Nicaragua</option>
						<option value="NE" >Niger</option>
						<option value="NG" >Nigeria</option>
						<option value="NU" >Niue</option>
						<option value="NO" >Norvegia</option>
						<option value="NC" >Nuova Caledonia</option>
						<option value="NZ" >Nuova Zelanda</option>
						<option value="NL" >Olanda</option>
						<option value="OM" >Oman</option>
						<option value="PK" >Pakistan</option>
						<option value="PW" >Palau</option>
						<option value="PS" >Palestina</option>
						<option value="PA" >Panamá</option>
						<option value="PG" >Papua Nuova Guinea</option>
						<option value="PY" >Paraguay</option>
						<option value="PE" >Perù</option>
						<option value="PF" >Polinesia francese</option>
						<option value="PL" >Polonia</option>
						<option value="PR" >Porto Rico</option>
						<option value="PT" >Portogallo</option>
						<option value="QA" >Qatar</option>
						<option value="CD" >RD del Congo</option>
						<option value="GB" >Regno Unito</option>
						<option value="CZ" >Rep. Ceca</option>
						<option value="CF" >Rep. Centrafricana</option>
						<option value="DO" >Rep. Dominicana</option>
						<option value="CG" >Rep. del Congo</option>
						<option value="RE" >Riunione</option>
						<option value="RO" >Romania</option>
						<option value="RW" >Ruanda</option>
						<option value="RU" >Russia</option>
						<option value="EH" >Sahara Occidentale</option>
						<option value="KN" >Saint Kitts e Nevis</option>
						<option value="VC" >Saint Vincent e Grenadine</option>
						<option value="BL" >Saint-Barthélemy</option>
						<option value="MF" >Saint-Martin</option>
						<option value="PM" >Saint-Pierre e Miquelon</option>
						<option value="WS" >Samoa</option>
						<option value="AS" >Samoa Americane</option>
						<option value="SM" >San Marino</option>
						<option value="SH" >Sant'Elena</option>
						<option value="LC" >Santa Lucia</option>
						<option value="SN" >Senegal</option>
						<option value="RS" >Serbia</option>
						<option value="SC" >Seychelles</option>
						<option value="SL" >Sierra Leone</option>
						<option value="SG" >Singapore</option>
						<option value="SX" >Sint Maarten</option>
						<option value="SY" >Siria</option>
						<option value="SK" >Slovacchia</option>
						<option value="SI" >Slovenia</option>
						<option value="SO" >Somalia</option>
						<option value="ES" >Spagna</option>
						<option value="LK" >Sri Lanka</option>
						<option value="US" >Stati Uniti d'America</option>
						<option value="ZA" >Sudafrica</option>
						<option value="SD" >Sudan</option>
						<option value="SS" >Sudan del Sud</option>
						<option value="SR" >Suriname</option>
						<option value="SJ" >Svalbard e Jan Mayen</option>
						<option value="SE" >Svezia</option>
						<option value="CH" >Svizzera</option>
						<option value="SZ" >Swaziland</option>
						<option value="ST" >São Tomé e Príncipe</option>
						<option value="TJ" >Tagikistan</option>
						<option value="TW" >Taiwan</option>
						<option value="TZ" >Tanzania</option>
						<option value="TF" >Terre australi e antartiche francesi</option>
						<option value="IO" >Territorio britannico dell'oceano Indiano</option>
						<option value="TH" >Thailandia</option>
						<option value="TL" >Timor Est</option>
						<option value="TG" >Togo</option>
						<option value="TK" >Tokelau</option>
						<option value="TO" >Tonga</option>
						<option value="TT" >Trinidad e Tobago</option>
						<option value="TN" >Tunisia</option>
						<option value="TR" >Turchia</option>
						<option value="TM" >Turkmenistan</option>
						<option value="TC" >Turks e Caicos</option>
						<option value="TV" >Tuvalu</option>
						<option value="UA" >Ucraina</option>
						<option value="UG" >Uganda</option>
						<option value="HU" >Ungheria</option>
						<option value="UY" >Uruguay</option>
						<option value="UZ" >Uzbekistan</option>
						<option value="VU" >Vanuatu</option>
						<option value="VE" >Venezuela</option>
						<option value="VN" >Vietnam</option>
						<option value="WF" >Wallis e Futuna</option>
						<option value="YE" >Yemen</option>
						<option value="ZM" >Zambia</option>
						<option value="ZW" >Zimbabwe</option>
					</select>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield">&nbsp;</label>
				<span class="output">
				<input type="checkbox" id="checkBenef" onchange="controllaBenef();"  >&nbsp; inserisci beneficiario in rubrica
				<input name="checkBenefparam" type="hidden" value="">
				</span>
			</div>
		</div>
	</div>
</div>
	<?php } ?>
<?php } else { // ESTERO ?>
	<?php if ($tipoBeneficiario === 'RUB') { ?>
<!-- controllo se il bonifico è italiano o estero -->
<!-- bonifico ESTERO e RUBRICA BENEFICIARIO -->
<input type="hidden" name="emailBeneficiario" value=""/>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield" id="benef">Nome beneficiario*</label>
				<!-- === org.apache.jsp.banking.rubricaListSelect_jsp === { -->
				<select class="" 1 name="idRubrica" id="selectRubrica" onchange="selezionaDaRubrica();" style="display:none">
					<option value="" rubricaId="" rubricaIban="" rubricaBic="" rubricaConto="" rubricaIntestazione="" rubricaCF="" rubricaIndirizzo="" rubricaComune="" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaNote="" rubricaContattoVeloce="" rubricaToShow="">scrivi o seleziona il nominativo</option>
					<option value="5619871"  rubricaId="5619871" rubricaEmail="www@www.it" rubricaIban="IT55E0340201749000000086803" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi" rubricaNote="" rubricaCF="" rubricaIndirizzo="aasd asd asd a" rubricaComune="" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi">contatto2 - IT55E0340201749000000086803 - Pippo Franchi</option>
					<option value="5619877"  rubricaId="5619877" rubricaEmail="www@www.it" rubricaIban="IT55E0340201749000000086803" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi">www www - IT55E0340201749000000086803 - Pippo Franchi</option>
					<option value="5619878"  rubricaId="5619878" rubricaEmail="www@www.it" rubricaIban="IT15Y0871739480000000033175" rubricaBic="" rubricaConto="" rubricaIntestazione="Pippo Franchi &Eacute;lys&eacute;es" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="Pippo Franchi &Eacute;lys&eacute;es">www www - IT15Y0871739480000000033175 - Pippo Franchi &Eacute;lys&eacute;es</option>
					<option value="5619872"  rubricaId="5619872" rubricaEmail="www@www.it" rubricaIban="IT94F0760101600000064866734" rubricaBic="" rubricaConto="" rubricaIntestazione="TARANTINO GIANFRANCO" rubricaNote="" rubricaCF="" rubricaIndirizzo="ww w w w w" rubricaComune="w w ww  w" rubricaProvincia="" rubricaCAP="" rubricaNazione="" rubricaContattoVeloce="false" rubricaToShow="TARANTINO GIANFRANCO">www www - IT94F0760101600000064866734 - TARANTINO GIANFRANCO</option>
				</select>
				<script type="text/javascript">
					(function(t) {
						$.widget( "ui.combobox", {
							_create: function() {
								this.wrapper = $( "<span>" )				
								.insertAfter( this.element );
								this._createAutocomplete();
								this._createShowAllButton();
							},
							
							_createAutocomplete: function() {				
								var selected = this.element.children( ":selected" ),				
								value = selected.val() ? selected.attr("rubricaToShow") : "";
								var element = this.element;
								this.input = $( "<input type=\"text\" id=\""+this.element.attr("id")+"Input\" name=\""+this.element.attr("name")+"Input\" maxlength=\"100\" placeholder=\"scrivi o seleziona il nominativo\">" )
								.appendTo( this.wrapper )
								.val( value )								
								.addClass( "grande " )				
								.autocomplete({
									delay: 0,
									minLength: 0,
									source: $.proxy( this, "_source" ),
									select: function( event, ui ) {
										element.trigger("change");
									}
								});
								this.input.data( "ui-autocomplete" )._renderItem = $.proxy( this, "_renderItem" );
								this._on( this.input, {
									autocompleteselect: function( event, ui ) {
										ui.item.option.selected = true;
										this._trigger( "select", event, {
											item: ui.item.option
										});
									},
									autocompletechange: "_removeIfInvalid"
								});
							},
							
							_createShowAllButton: function() {
								var wasOpen = false;
								var input=this.input;
								$( '<a class="autoSelButt" alt="mostra tutti" title="mostra tutti"/></a>' )
								.attr( "tabIndex", -1 )
								.attr( "title", "Mostra tutti" )							
								.appendTo( this.wrapper )		
								.mousedown(function() {
									wasOpen = input.autocomplete( "widget" ).is( ":visible" );
								})
								.click(function() {
									input.focus();
									// Close if already visible
									if ( wasOpen ) {
									return;
									}
								// Pass empty string as value to search for, displaying all results
								input.autocomplete( "search", "" );
								});
							},
					
							_source: function( request, response ) {
								var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
								response( this.element.children( "option" ).map(function() {
									var contattoVeloce=$( this ).attr("rubricaContattoVeloce");
									var text = $( this ).text();					
									if(contattoVeloce=="true"){
										text="<strong>"+text+"</strong>";
									}
									var value = $( this ).attr("rubricaToShow");
									if ( value && ( !request.term || matcher.test(text) ) )
										return {
											label: text,
											value: value,
											option: this
										};
								}) );
							},
							
							_removeIfInvalid: function( event, ui ) {
								// Selected an item, nothing to do
								if ( ui.item ) {
									return;
								}
								// Search for a match (case-insensitive)
								var value = this.input.val(),
								valueLowerCase = value.toLowerCase(),
								valid = false;
								var element=this.element;
								this.element.children( "option" ).each(function() {
									if ( $( this ).text().toLowerCase() === valueLowerCase ) {
										this.selected = valid = true;	
										element.trigger("change");
										return false;
									}
								});
								// Found a match, nothing to do
								if ( valid ) {
									return;
								}
								// Remove invalid value
								this.input
								.val( "" )				
								this.element.val( "" );
								this.input.data( "ui-autocomplete" ).term = "";
								
								selezionaDaRubrica();;
							},
							
							_renderItem: function( ul, item ) {				
									return $( "<li>" )
									.append( "<a>" + item.label + "</a>" )
									.appendTo( ul );				
							},
							
							_destroy: function() {
								this.wrapper.remove();
								this.element.show();
							}
						});
					})(jQuery);
					
					$(function() {
						$( "#selectRubrica").combobox();
					});	
				</script>
				<!-- } === org.apache.jsp.banking.rubricaListSelect_jsp === -->
				<input type="hidden" name="benef">
			</div>
			<div class="span6">
				<label class="nomefield"> &nbsp;</label>
				<span class="output">
				<a href="javascript:nuovoBeneficiario(true);resettaCampi();">inserisci nuovo beneficiario</a>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric" id="all_benBox" style="display: none;">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6" id="ibanId_benBox">
				<label class="nomefield">Iban*</label>
				<span class="output" id="ibanId_benLabel"></span>
				<input type="hidden" name="ibanId_ben" id="ibanId_benHidden"/>
			</div>
			<div class="span6 FoR" id="conto_benBox" style="display: none;">
				<label class="nomefield">C/c Numero*</label>
				<span class="output" id="conto_benLabel"></span>
				<input type="hidden" name="numconto" id="esterocontoHidden"/>
			</div>
			<div class="span6" id="box_bic" style="display: none">
				<label class="nomefield">Bic*</label>
				<span class="output" id="bic_benLabel"></span>
				<input type="hidden" name="bic" id="bicHidden"/>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric" id="nazione_benBox" style="display: none;">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="cod">Nazione di residenza beneficiario*</label>
				<span class="output"></span>
				<select name="cod">
					<option value=""> </option>
					<option value="AD" >Andorra</option>
					<option value="AE" >Emirati Arabi Uniti</option>
					<option value="AF" >Afghanistan</option>
					<option value="AG" >Antigua e Barbuda</option>
					<option value="AI" >Anguilla</option>
					<option value="AL" >Albania</option>
					<option value="AM" >Armenia</option>
					<option value="AN" >Antille Olandesi</option>
					<option value="AO" >Angola</option>
					<option value="AQ" >Antartide</option>
					<option value="AR" >Argentina</option>
					<option value="AS" >Samoa Americane</option>
					<option value="AT" >Austria</option>
					<option value="AU" >Australia</option>
					<option value="AW" >Aruba</option>
					<option value="AX" >Isole Aland</option>
					<option value="AZ" >Azerbaigian</option>
					<option value="BA" >Bosnia ed Erzegovina</option>
					<option value="BB" >Barbados</option>
					<option value="BD" >Bangladesh</option>
					<option value="BE" >Belgio</option>
					<option value="BF" >Burkina Faso</option>
					<option value="BG" >Bulgaria</option>
					<option value="BH" >Bahrein</option>
					<option value="BI" >Burundi</option>
					<option value="BJ" >Benin</option>
					<option value="BL" >Saint-Barthélemy</option>
					<option value="BM" >Bermuda</option>
					<option value="BN" >Brunei</option>
					<option value="BO" >Bolivia</option>
					<option value="BQ" >Isole BES</option>
					<option value="BR" >Brasile</option>
					<option value="BS" >Bahamas</option>
					<option value="BT" >Bhutan</option>
					<option value="BV" >Isola Bouvet</option>
					<option value="BW" >Botswana</option>
					<option value="BY" >Bielorussia</option>
					<option value="BZ" >Belize</option>
					<option value="CA" >Canada</option>
					<option value="CC" >Isole Cocos e Keeling</option>
					<option value="CD" >RD del Congo</option>
					<option value="CF" >Rep. Centrafricana</option>
					<option value="CG" >Rep. del Congo</option>
					<option value="CH" >Svizzera</option>
					<option value="CI" >Costa d'Avorio</option>
					<option value="CK" >Isole Cook</option>
					<option value="CL" >Cile</option>
					<option value="CM" >Camerun</option>
					<option value="CN" >Cina</option>
					<option value="CO" >Colombia</option>
					<option value="CR" >Costa Rica</option>
					<option value="CU" >Cuba</option>
					<option value="CV" >Capo Verde</option>
					<option value="CW" >Curacao</option>
					<option value="CX" >Isola di Natale</option>
					<option value="CY" >Cipro</option>
					<option value="CZ" >Rep. Ceca</option>
					<option value="DE" >Germania</option>
					<option value="DJ" >Gibuti</option>
					<option value="DK" >Danimarca</option>
					<option value="DM" >Dominica</option>
					<option value="DO" >Rep. Dominicana</option>
					<option value="DZ" >Algeria</option>
					<option value="EC" >Ecuador</option>
					<option value="EE" >Estonia</option>
					<option value="EG" >Egitto</option>
					<option value="EH" >Sahara Occidentale</option>
					<option value="ER" >Eritrea</option>
					<option value="ES" >Spagna</option>
					<option value="ET" >Etiopia</option>
					<option value="FI" >Finlandia</option>
					<option value="FJ" >Figi</option>
					<option value="FK" >Isole Falkland</option>
					<option value="FM" >Micronesia</option>
					<option value="FO" >Isole Faroer</option>
					<option value="FR" >Francia</option>
					<option value="GA" >Gabon</option>
					<option value="GB" >Regno Unito</option>
					<option value="GD" >Grenada</option>
					<option value="GE" >Georgia</option>
					<option value="GF" >Guyana francese</option>
					<option value="GG" >Guernsey</option>
					<option value="GH" >Ghana</option>
					<option value="GI" >Gibilterra</option>
					<option value="GL" >Groenlandia</option>
					<option value="GM" >Gambia</option>
					<option value="GN" >Guinea</option>
					<option value="GP" >Guadalupa</option>
					<option value="GQ" >Guinea Equatoriale</option>
					<option value="GR" >Grecia</option>
					<option value="GS" >Georgia del Sud e isole Sandwich meridionali</option>
					<option value="GT" >Guatemala</option>
					<option value="GU" >Guam</option>
					<option value="GW" >Guinea-Bissau</option>
					<option value="GY" >Guyana</option>
					<option value="HK" >Hong Kong</option>
					<option value="HM" >Isole Heard e McDonald</option>
					<option value="HN" >Honduras</option>
					<option value="HR" >Croazia</option>
					<option value="HT" >Haiti</option>
					<option value="HU" >Ungheria</option>
					<option value="ID" >Indonesia</option>
					<option value="IE" >Irlanda</option>
					<option value="IL" >Israele</option>
					<option value="IM" >Isola di Man</option>
					<option value="IN" >India</option>
					<option value="IO" >Territorio britannico dell'oceano Indiano</option>
					<option value="IQ" >Iraq</option>
					<option value="IR" >Iran</option>
					<option value="IS" >Islanda</option>
					<option value="IT" >Italia</option>
					<option value="JE" >Jersey</option>
					<option value="JM" >Giamaica</option>
					<option value="JO" >Giordania</option>
					<option value="JP" >Giappone</option>
					<option value="KE" >Kenya</option>
					<option value="KG" >Kirghizistan</option>
					<option value="KH" >Cambogia</option>
					<option value="KI" >Kiribati</option>
					<option value="KM" >Comore</option>
					<option value="KN" >Saint Kitts e Nevis</option>
					<option value="KP" >Corea del Nord</option>
					<option value="KR" >Corea del Sud</option>
					<option value="KW" >Kuwait</option>
					<option value="KY" >Isole Cayman</option>
					<option value="KZ" >Kazakistan</option>
					<option value="LA" >Laos</option>
					<option value="LB" >Libano</option>
					<option value="LC" >Santa Lucia</option>
					<option value="LI" >Liechtenstein</option>
					<option value="LK" >Sri Lanka</option>
					<option value="LR" >Liberia</option>
					<option value="LS" >Lesotho</option>
					<option value="LT" >Lituania</option>
					<option value="LU" >Lussemburgo</option>
					<option value="LV" >Lettonia</option>
					<option value="LY" >Libia</option>
					<option value="MA" >Marocco</option>
					<option value="MC" >Monaco</option>
					<option value="MD" >Moldavia</option>
					<option value="ME" >Montenegro</option>
					<option value="MF" >Saint-Martin</option>
					<option value="MG" >Madagascar</option>
					<option value="MH" >Isole Marshall</option>
					<option value="MK" >Macedonia</option>
					<option value="ML" >Mali</option>
					<option value="MM" >Birmania</option>
					<option value="MN" >Mongolia</option>
					<option value="MO" >Macao</option>
					<option value="MP" >Isole Marianne Settentrionali</option>
					<option value="MQ" >Martinica</option>
					<option value="MR" >Mauritania</option>
					<option value="MS" >Montserrat</option>
					<option value="MT" >Malta</option>
					<option value="MU" >Mauritius</option>
					<option value="MV" >Maldive</option>
					<option value="MW" >Malawi</option>
					<option value="MX" >Messico</option>
					<option value="MY" >Malesia</option>
					<option value="MZ" >Mozambico</option>
					<option value="NA" >Namibia</option>
					<option value="NC" >Nuova Caledonia</option>
					<option value="NE" >Niger</option>
					<option value="NF" >Isola Norfolk</option>
					<option value="NG" >Nigeria</option>
					<option value="NI" >Nicaragua</option>
					<option value="NL" >Olanda</option>
					<option value="NO" >Norvegia</option>
					<option value="NP" >Nepal</option>
					<option value="NR" >Nauru</option>
					<option value="NU" >Niue</option>
					<option value="NZ" >Nuova Zelanda</option>
					<option value="OM" >Oman</option>
					<option value="PA" >Panamá</option>
					<option value="PE" >Perù</option>
					<option value="PF" >Polinesia francese</option>
					<option value="PG" >Papua Nuova Guinea</option>
					<option value="PH" >Filippine</option>
					<option value="PK" >Pakistan</option>
					<option value="PL" >Polonia</option>
					<option value="PM" >Saint-Pierre e Miquelon</option>
					<option value="PN" >Isole Pitcairn</option>
					<option value="PR" >Porto Rico</option>
					<option value="PS" >Palestina</option>
					<option value="PT" >Portogallo</option>
					<option value="PW" >Palau</option>
					<option value="PY" >Paraguay</option>
					<option value="QA" >Qatar</option>
					<option value="RE" >Riunione</option>
					<option value="RO" >Romania</option>
					<option value="RS" >Serbia</option>
					<option value="RU" >Russia</option>
					<option value="RW" >Ruanda</option>
					<option value="SA" >Arabia Saudita</option>
					<option value="SB" >Isole Salomone</option>
					<option value="SC" >Seychelles</option>
					<option value="SD" >Sudan</option>
					<option value="SE" >Svezia</option>
					<option value="SG" >Singapore</option>
					<option value="SH" >Sant'Elena</option>
					<option value="SI" >Slovenia</option>
					<option value="SJ" >Svalbard e Jan Mayen</option>
					<option value="SK" >Slovacchia</option>
					<option value="SL" >Sierra Leone</option>
					<option value="SM" >San Marino</option>
					<option value="SN" >Senegal</option>
					<option value="SO" >Somalia</option>
					<option value="SR" >Suriname</option>
					<option value="SS" >Sudan del Sud</option>
					<option value="ST" >São Tomé e Príncipe</option>
					<option value="SV" >El Salvador</option>
					<option value="SX" >Sint Maarten</option>
					<option value="SY" >Siria</option>
					<option value="SZ" >Swaziland</option>
					<option value="TC" >Turks e Caicos</option>
					<option value="TD" >Ciad</option>
					<option value="TF" >Terre australi e antartiche francesi</option>
					<option value="TG" >Togo</option>
					<option value="TH" >Thailandia</option>
					<option value="TJ" >Tagikistan</option>
					<option value="TK" >Tokelau</option>
					<option value="TL" >Timor Est</option>
					<option value="TM" >Turkmenistan</option>
					<option value="TN" >Tunisia</option>
					<option value="TO" >Tonga</option>
					<option value="TR" >Turchia</option>
					<option value="TT" >Trinidad e Tobago</option>
					<option value="TV" >Tuvalu</option>
					<option value="TW" >Taiwan</option>
					<option value="TZ" >Tanzania</option>
					<option value="UA" >Ucraina</option>
					<option value="UG" >Uganda</option>
					<option value="UM" >Isole minori esterne degli Stati Uniti</option>
					<option value="US" >Stati Uniti d'America</option>
					<option value="UY" >Uruguay</option>
					<option value="UZ" >Uzbekistan</option>
					<option value="VA" >Città del Vaticano</option>
					<option value="VC" >Saint Vincent e Grenadine</option>
					<option value="VE" >Venezuela</option>
					<option value="VG" >Isole Vergini britanniche</option>
					<option value="VI" >Isole Vergini americane</option>
					<option value="VN" >Vietnam</option>
					<option value="VU" >Vanuatu</option>
					<option value="WF" >Wallis e Futuna</option>
					<option value="WS" >Samoa</option>
					<option value="XK" >Kosovo</option>
					<option value="YE" >Yemen</option>
					<option value="YT" >Mayotte</option>
					<option value="ZA" >Sudafrica</option>
					<option value="ZM" >Zambia</option>
					<option value="ZW" >Zimbabwe</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield">Indirizzo</label>
				<span class="output">
				<input type="text" name="indirizzo" maxlength="35" value="">
				</span>
			</div>
			<div class="span6">
				<label class="nomefield">Localit&agrave;</label>
				<span class="output">
				<input type="text" name="localita" maxlength="35" value="">
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric" id="note_benBox" style="display: none;">
	<div class="span12 clearfix">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Note</label>
				<span class="output" id="note_benLabel"></span>
			</div>
		</div>
	</div>
</div>
	<?php } else { ?>
<!-- controllo se il bonifico è italiano o estero -->
<!-- bonifico ESTERO e NUOVO BENEFICIARIO -->
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="benef">Nome beneficiario*</label>
				<span class="output">
				<input type="text" name="benef" maxlength="150"  value=""> &nbsp;
				</span>
			</div>
			<div class="span6">
				<label class="nomefield"> &nbsp;</label>
				<span class="output">
				<a href="javascript:nuovoBeneficiario(false);resettaCampi();">aggiungi da rubrica</a>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span12">
				<label class="nomefield">Coordinate bancarie beneficiario*</label>
				<span class="output">
				&Egrave; consigliato l'inserimento del codice IBAN.<br>
				Puoi comunque indicare solo il numero del conto, ma in questo caso ti sar&agrave; addebitata una commissione aggiuntiva.
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="radioIban"><input type="radio" name="radioIbanConto" value="iban" onclick="javascript:esteroIbanConto('iban');" checked="checked"> Iban Beneficiario</label>
				<span class="output">
				<input type="text" id="esteroIban" name="ibanId_ben" maxlength="150" value="">
				</span>
			</div>
			<div class="span6">
				<label class="nomefield" id="radioConto"><input type="radio" name="radioIbanConto" value="conto" onclick="javascript:esteroIbanConto('conto')" > Numero Conto</label>
				<span class="output">
				<input type="text" id="esteroConto" disabled="disabled" maxlength="150" class="disabled" name="numconto" value="">
				</span>
			</div>
		</div>
	</div>
</div>
<!-- nazione -->
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield" id="cod">Nazione di residenza beneficiario*</label>
				<span class="output">
					<select name="cod">
						<option value=""> </option>
						<option value="AF" >Afghanistan</option>
						<option value="AL" >Albania</option>
						<option value="DZ" >Algeria</option>
						<option value="AD" >Andorra</option>
						<option value="AO" >Angola</option>
						<option value="AI" >Anguilla</option>
						<option value="AQ" >Antartide</option>
						<option value="AG" >Antigua e Barbuda</option>
						<option value="AN" >Antille Olandesi</option>
						<option value="SA" >Arabia Saudita</option>
						<option value="AR" >Argentina</option>
						<option value="AM" >Armenia</option>
						<option value="AW" >Aruba</option>
						<option value="AU" >Australia</option>
						<option value="AT" >Austria</option>
						<option value="AZ" >Azerbaigian</option>
						<option value="BS" >Bahamas</option>
						<option value="BH" >Bahrein</option>
						<option value="BD" >Bangladesh</option>
						<option value="BB" >Barbados</option>
						<option value="BE" >Belgio</option>
						<option value="BZ" >Belize</option>
						<option value="BJ" >Benin</option>
						<option value="BM" >Bermuda</option>
						<option value="BT" >Bhutan</option>
						<option value="BY" >Bielorussia</option>
						<option value="MM" >Birmania</option>
						<option value="BO" >Bolivia</option>
						<option value="BA" >Bosnia ed Erzegovina</option>
						<option value="BW" >Botswana</option>
						<option value="BR" >Brasile</option>
						<option value="BN" >Brunei</option>
						<option value="BG" >Bulgaria</option>
						<option value="BF" >Burkina Faso</option>
						<option value="BI" >Burundi</option>
						<option value="KH" >Cambogia</option>
						<option value="CM" >Camerun</option>
						<option value="CA" >Canada</option>
						<option value="CV" >Capo Verde</option>
						<option value="TD" >Ciad</option>
						<option value="CL" >Cile</option>
						<option value="CN" >Cina</option>
						<option value="CY" >Cipro</option>
						<option value="VA" >Città del Vaticano</option>
						<option value="CO" >Colombia</option>
						<option value="KM" >Comore</option>
						<option value="KP" >Corea del Nord</option>
						<option value="KR" >Corea del Sud</option>
						<option value="CR" >Costa Rica</option>
						<option value="CI" >Costa d'Avorio</option>
						<option value="HR" >Croazia</option>
						<option value="CU" >Cuba</option>
						<option value="CW" >Curacao</option>
						<option value="DK" >Danimarca</option>
						<option value="DM" >Dominica</option>
						<option value="EC" >Ecuador</option>
						<option value="EG" >Egitto</option>
						<option value="SV" >El Salvador</option>
						<option value="AE" >Emirati Arabi Uniti</option>
						<option value="ER" >Eritrea</option>
						<option value="EE" >Estonia</option>
						<option value="ET" >Etiopia</option>
						<option value="FJ" >Figi</option>
						<option value="PH" >Filippine</option>
						<option value="FI" >Finlandia</option>
						<option value="FR" >Francia</option>
						<option value="GA" >Gabon</option>
						<option value="GM" >Gambia</option>
						<option value="GE" >Georgia</option>
						<option value="GS" >Georgia del Sud e isole Sandwich meridionali</option>
						<option value="DE" >Germania</option>
						<option value="GH" >Ghana</option>
						<option value="JM" >Giamaica</option>
						<option value="JP" >Giappone</option>
						<option value="GI" >Gibilterra</option>
						<option value="DJ" >Gibuti</option>
						<option value="JO" >Giordania</option>
						<option value="GR" >Grecia</option>
						<option value="GD" >Grenada</option>
						<option value="GL" >Groenlandia</option>
						<option value="GP" >Guadalupa</option>
						<option value="GU" >Guam</option>
						<option value="GT" >Guatemala</option>
						<option value="GG" >Guernsey</option>
						<option value="GN" >Guinea</option>
						<option value="GQ" >Guinea Equatoriale</option>
						<option value="GW" >Guinea-Bissau</option>
						<option value="GY" >Guyana</option>
						<option value="GF" >Guyana francese</option>
						<option value="HT" >Haiti</option>
						<option value="HN" >Honduras</option>
						<option value="HK" >Hong Kong</option>
						<option value="IN" >India</option>
						<option value="ID" >Indonesia</option>
						<option value="IR" >Iran</option>
						<option value="IQ" >Iraq</option>
						<option value="IE" >Irlanda</option>
						<option value="IS" >Islanda</option>
						<option value="BV" >Isola Bouvet</option>
						<option value="NF" >Isola Norfolk</option>
						<option value="IM" >Isola di Man</option>
						<option value="CX" >Isola di Natale</option>
						<option value="AX" >Isole Aland</option>
						<option value="BQ" >Isole BES</option>
						<option value="KY" >Isole Cayman</option>
						<option value="CC" >Isole Cocos e Keeling</option>
						<option value="CK" >Isole Cook</option>
						<option value="FK" >Isole Falkland</option>
						<option value="FO" >Isole Faroer</option>
						<option value="HM" >Isole Heard e McDonald</option>
						<option value="MP" >Isole Marianne Settentrionali</option>
						<option value="MH" >Isole Marshall</option>
						<option value="PN" >Isole Pitcairn</option>
						<option value="SB" >Isole Salomone</option>
						<option value="VI" >Isole Vergini americane</option>
						<option value="VG" >Isole Vergini britanniche</option>
						<option value="UM" >Isole minori esterne degli Stati Uniti</option>
						<option value="IL" >Israele</option>
						<option value="IT" >Italia</option>
						<option value="JE" >Jersey</option>
						<option value="KZ" >Kazakistan</option>
						<option value="KE" >Kenya</option>
						<option value="KG" >Kirghizistan</option>
						<option value="KI" >Kiribati</option>
						<option value="XK" >Kosovo</option>
						<option value="KW" >Kuwait</option>
						<option value="LA" >Laos</option>
						<option value="LS" >Lesotho</option>
						<option value="LV" >Lettonia</option>
						<option value="LB" >Libano</option>
						<option value="LR" >Liberia</option>
						<option value="LY" >Libia</option>
						<option value="LI" >Liechtenstein</option>
						<option value="LT" >Lituania</option>
						<option value="LU" >Lussemburgo</option>
						<option value="MO" >Macao</option>
						<option value="MK" >Macedonia</option>
						<option value="MG" >Madagascar</option>
						<option value="MW" >Malawi</option>
						<option value="MV" >Maldive</option>
						<option value="MY" >Malesia</option>
						<option value="ML" >Mali</option>
						<option value="MT" >Malta</option>
						<option value="MA" >Marocco</option>
						<option value="MQ" >Martinica</option>
						<option value="MR" >Mauritania</option>
						<option value="MU" >Mauritius</option>
						<option value="YT" >Mayotte</option>
						<option value="MX" >Messico</option>
						<option value="FM" >Micronesia</option>
						<option value="MD" >Moldavia</option>
						<option value="MC" >Monaco</option>
						<option value="MN" >Mongolia</option>
						<option value="ME" >Montenegro</option>
						<option value="MS" >Montserrat</option>
						<option value="MZ" >Mozambico</option>
						<option value="NA" >Namibia</option>
						<option value="NR" >Nauru</option>
						<option value="NP" >Nepal</option>
						<option value="NI" >Nicaragua</option>
						<option value="NE" >Niger</option>
						<option value="NG" >Nigeria</option>
						<option value="NU" >Niue</option>
						<option value="NO" >Norvegia</option>
						<option value="NC" >Nuova Caledonia</option>
						<option value="NZ" >Nuova Zelanda</option>
						<option value="NL" >Olanda</option>
						<option value="OM" >Oman</option>
						<option value="PK" >Pakistan</option>
						<option value="PW" >Palau</option>
						<option value="PS" >Palestina</option>
						<option value="PA" >Panamá</option>
						<option value="PG" >Papua Nuova Guinea</option>
						<option value="PY" >Paraguay</option>
						<option value="PE" >Perù</option>
						<option value="PF" >Polinesia francese</option>
						<option value="PL" >Polonia</option>
						<option value="PR" >Porto Rico</option>
						<option value="PT" >Portogallo</option>
						<option value="QA" >Qatar</option>
						<option value="CD" >RD del Congo</option>
						<option value="GB" >Regno Unito</option>
						<option value="CZ" >Rep. Ceca</option>
						<option value="CF" >Rep. Centrafricana</option>
						<option value="DO" >Rep. Dominicana</option>
						<option value="CG" >Rep. del Congo</option>
						<option value="RE" >Riunione</option>
						<option value="RO" >Romania</option>
						<option value="RW" >Ruanda</option>
						<option value="RU" >Russia</option>
						<option value="EH" >Sahara Occidentale</option>
						<option value="KN" >Saint Kitts e Nevis</option>
						<option value="VC" >Saint Vincent e Grenadine</option>
						<option value="BL" >Saint-Barthélemy</option>
						<option value="MF" >Saint-Martin</option>
						<option value="PM" >Saint-Pierre e Miquelon</option>
						<option value="WS" >Samoa</option>
						<option value="AS" >Samoa Americane</option>
						<option value="SM" >San Marino</option>
						<option value="SH" >Sant'Elena</option>
						<option value="LC" >Santa Lucia</option>
						<option value="SN" >Senegal</option>
						<option value="RS" >Serbia</option>
						<option value="SC" >Seychelles</option>
						<option value="SL" >Sierra Leone</option>
						<option value="SG" >Singapore</option>
						<option value="SX" >Sint Maarten</option>
						<option value="SY" >Siria</option>
						<option value="SK" >Slovacchia</option>
						<option value="SI" >Slovenia</option>
						<option value="SO" >Somalia</option>
						<option value="ES" >Spagna</option>
						<option value="LK" >Sri Lanka</option>
						<option value="US" >Stati Uniti d'America</option>
						<option value="ZA" >Sudafrica</option>
						<option value="SD" >Sudan</option>
						<option value="SS" >Sudan del Sud</option>
						<option value="SR" >Suriname</option>
						<option value="SJ" >Svalbard e Jan Mayen</option>
						<option value="SE" >Svezia</option>
						<option value="CH" >Svizzera</option>
						<option value="SZ" >Swaziland</option>
						<option value="ST" >São Tomé e Príncipe</option>
						<option value="TJ" >Tagikistan</option>
						<option value="TW" >Taiwan</option>
						<option value="TZ" >Tanzania</option>
						<option value="TF" >Terre australi e antartiche francesi</option>
						<option value="IO" >Territorio britannico dell'oceano Indiano</option>
						<option value="TH" >Thailandia</option>
						<option value="TL" >Timor Est</option>
						<option value="TG" >Togo</option>
						<option value="TK" >Tokelau</option>
						<option value="TO" >Tonga</option>
						<option value="TT" >Trinidad e Tobago</option>
						<option value="TN" >Tunisia</option>
						<option value="TR" >Turchia</option>
						<option value="TM" >Turkmenistan</option>
						<option value="TC" >Turks e Caicos</option>
						<option value="TV" >Tuvalu</option>
						<option value="UA" >Ucraina</option>
						<option value="UG" >Uganda</option>
						<option value="HU" >Ungheria</option>
						<option value="UY" >Uruguay</option>
						<option value="UZ" >Uzbekistan</option>
						<option value="VU" >Vanuatu</option>
						<option value="VE" >Venezuela</option>
						<option value="VN" >Vietnam</option>
						<option value="WF" >Wallis e Futuna</option>
						<option value="YE" >Yemen</option>
						<option value="ZM" >Zambia</option>
						<option value="ZW" >Zimbabwe</option>
					</select>
				</span>
			</div>
		</div>
	</div>
</div>
<script>
	esteroIbanConto('iban');
</script>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield">Indirizzo</label>
				<span class="output">
				<input type="text" name="indirizzo" maxlength="35" value="">
				</span>
			</div>
			<div class="span6">
				<label class="nomefield">Localit&agrave;</label>
				<span class="output">
				<input type="text" name="localita" maxlength="35" value="">
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid formGeneric">
	<div class="span12 clearfix">
		<div class="radiocont row-fluid">
			<div class="span6">
				<label class="nomefield">&nbsp;</label>
				<span class="output">
				<input type="checkbox" id="checkBenef" onclick="controllaBenef();">&nbsp; inserisci beneficiario in rubrica
				<input name="checkBenefparam" type="hidden" value="">
				</span>
			</div>
		</div>
	</div>
</div>
	<?php } ?>
<?php } ?>