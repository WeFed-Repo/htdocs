<!--
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
-->
<script type="text/javascript">
 $(function(){
     var inputCausale = $("#causale");
    

     inputCausale.on('keydown keyup',function(event){
         var valueInputCausale =  inputCausale.val();
         var regEspr = /^\d|\/+$/; 
         if (!(regEspr.test(valueInputCausale.charAt(valueInputCausale.length-1)))){
             inputCausale.val(valueInputCausale.substring(0,valueInputCausale.length-1));
         }

     })
    
     
 })
 

 var appendDatePickerIcon2 = function(idElement) {
    var icoDate = $("#" + idElement).datepicker().next('.ui-datepicker-trigger'),
        AddOnDate = $("#" + idElement).datepicker().closest('.editable-input').siblings('.input-group-addon.date');
        icoDate.appendTo(AddOnDate);
       //se non è android
       if (!/android/i.test(navigator.userAgent)) {
            $("#" + idElement).mask("99/99/9999");
        }
       //se è android
       else {
            var inputDate = $("#" + idElement);
            inputDate.attr('maxlength',10)
            inputDate.on('keypress',function(){
                var valueInputDate =  inputDate.val();
                if (valueInputDate.length==2) {
                    inputDate.val(valueInputDate+ '/');
                }
                else if(valueInputDate.length==5) {
                     inputDate.val(valueInputDate+ '/');
                }
        })
       }
    
};

</script>
<section>
    <h2>Bonifico Ordinario</h2>
    <p>In questa pagina puoi disporre bonifici verso l&#8217;Italia e l&#8217;estero.</p>
    <ul>
       <li><strong>Costo dell&#8217;operazione</strong> per bonifici in<strong> euro</strong> in <strong>Italia</strong> e in <span class ="txthelp" data-toggle="modal" data-target="#layerSepa" >area Sepa</span> : gratis
            <br> </li>
        <li>Per i bonifici in <strong>valuta diversa
    		dall&#8217;euro</strong> o verso <strong>Paesi</strong> in area <strong>extra
    		Sepa</strong> <span class="txthelp"><strong  data-title="<strong>BONIFICO IN AREA EXTRA SEPA<br>O IN VALUTA DIVERSA DELL'EURO</strong><br><br>Le commissioni sono suddivise tra ordinante e beneficiario.<br>L'importo a carico del beneficiario non &egrave; noto al momento dell'inserimento del bonifico.<br>Nel caso si rendesse necessario l'intervento di banche intermediarie, queste potrebbero addebitare ulteriori <strong>commissioni</strong>, da loro stabilite, a <strong>carico</strong> dell'<strong>ordinante</strong>.<br><br>Per maggiori informazioni sulle commissioni a carico dell'ordinante consulta i Fogli Informativi."  data-toggle="tooltip">verifica
    		le commissioni</strong></span> </li>
        <li><strong>Se vuoi effettuare un bonifico a favore di un beneficiario non presente in rubrica, </strong><span class="txthelp"><strong data-toggle="tooltip"  data-title="Per sicurezza, ti invieremo un <b>Sms</b> con un <b>codice di controllo</b> al numero 338*****98: dovrai inserirlo online per concludere l'operazione.">tieni a portata di mano il tuo cellulare</strong></span> </li>
    </ul>
</section>

<section>
    <h4>Dati bonifico</h4>
    <form class="formGenerico borderFormRounded" role="form" id="formBonifico" autocomple="off">
      <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="" class="control-label">Destinazione bonifico*</label>
                    <div class="row">
                        <div class="col-sm-6 radio">
                            <label class="radio-inline">
                                <input type="radio" name="tipoBonifico" value="SEPA" checked="checked" onclick="destinazioneBonifico(true); changeTransfertMaxLimit()"/><span>Italia</span>
                            </label>
                                <input type="hidden" name="nazioneBonifico" id="nazioneBonificoItalia" value="IT" disabled="disabled">
                            <label class="radio-inline">
                                <input type="radio" name="tipoBonifico" value="ESTERO" onclick="destinazioneBonifico(true)"/><span>Altri paesi</span>
                            </label>
                        </div>
                        <div class="col-sm-6 radio">
                            <select class="form-control" name="nazioneBonifico" disabled id="nazioneBonificoEstero">
                                <option value="">seleziona Paese</option>
                                <optgroup label="Area Sepa">
                                    <option value="AT">Austria</option>
                                    <option value="BE">Belgio</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="CY">Cipro</option>
                                    <option value="HR">Croazia</option>
                                    <option value="DK">Danimarca</option>
                                    <option value="EE">Estonia</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="DE">Germania</option>
                                    <option value="GI">Gibilterra</option>
                                    <option value="GR">Grecia</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="IS">Islanda</option>
                                    <option value="LV">Lettonia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Lussemburgo</option>
                                    <option value="MT">Malta</option>
                                    <option value="MC">Monaco</option>
                                    <option value="NO">Norvegia</option>
                                    <option value="NL">Olanda</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portogallo</option>
                                    <option value="GB">Regno Unito</option>
                                    <option value="CZ">Rep. Ceca</option>
                                    <option value="RO">Romania</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SK">Slovacchia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="ES">Spagna</option>
                                    <option value="SE">Svezia</option>
                                    <option value="CH">Svizzera</option>
                                    <option value="HU">Ungheria</option>
                                </optgroup>
                                <optgroup label="Area extra Sepa">
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antartide</option>
                                    <option value="AG">Antigua e Barbuda</option>
                                    <option value="AN">Antille Olandesi</option>
                                    <option value="SA">Arabia Saudita</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AZ">Azerbaigian</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BY">Bielorussia</option>
                                    <option value="MM">Birmania</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia ed Erzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brasile</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambogia</option>
                                    <option value="CM">Camerun</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Capo Verde</option>
                                    <option value="TD">Ciad</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comore</option>
                                    <option value="KP">Corea del Nord</option>
                                    <option value="KR">Corea del Sud</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Costa d'Avorio</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="DM">Dominica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egitto</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Emirati Arabi Uniti</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="ET">Etiopia</option>
                                    <option value="FJ">Figi</option>
                                    <option value="PH">Filippine</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GS">Georgia del Sud e isole Sandwich meridionali</option>
                                    <option value="GH">Ghana</option>
                                    <option value="JM">Giamaica</option>
                                    <option value="JP">Giappone</option>
                                    <option value="DJ">Gibuti</option>
                                    <option value="JO">Giordania</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GL">Groenlandia</option>
                                    <option value="GP">Guadalupa</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GQ">Guinea Equatoriale</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="GF">Guyana francese</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="BV">Isola Bouvet</option>
                                    <option value="NF">Isola Norfolk</option>
                                    <option value="IM">Isola di Man</option>
                                    <option value="CX">Isola di Natale</option>
                                    <option value="AX">Isole Aland</option>
                                    <option value="BQ">Isole BES</option>
                                    <option value="KY">Isole Cayman</option>
                                    <option value="CC">Isole Cocos e Keeling</option>
                                    <option value="CK">Isole Cook</option>
                                    <option value="FK">Isole Falkland</option>
                                    <option value="FO">Isole Faroer</option>
                                    <option value="HM">Isole Heard e McDonald</option>
                                    <option value="MP">Isole Marianne Settentrionali</option>
                                    <option value="MH">Isole Marshall</option>
                                    <option value="PN">Isole Pitcairn</option>
                                    <option value="SB">Isole Salomone</option>
                                    <option value="VI">Isole Vergini americane</option>
                                    <option value="VG">Isole Vergini britanniche</option>
                                    <option value="UM">Isole minori esterne degli Stati Uniti</option>
                                    <option value="IL">Israele</option>
                                    <option value="JE">Jersey</option>
                                    <option value="KZ">Kazakistan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KG">Kirghizistan</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="LA">Laos</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LB">Libano</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libia</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldive</option>
                                    <option value="ML">Mali</option>
                                    <option value="MA">Marocco</option>
                                    <option value="MQ">Martinica</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Messico</option>
                                    <option value="FM">Micronesia </option>
                                    <option value="MD">Moldavia </option>
                                    <option value="MN">Mongolia </option>
                                    <option value="ME">Montenegro </option>
                                    <option value="MS">Montserrat </option>
                                    <option value="MZ">Mozambico </option>
                                    <option value="NA">Namibia </option>
                                    <option value="NR">Nauru </option>
                                    <option value="NP">Nepal </option>
                                    <option value="NI">Nicaragua </option>
                                    <option value="NE">Niger </option>
                                    <option value="NG">Nigeria </option>
                                    <option value="NU">Niue </option>
                                    <option value="NC">Nuova Caledonia </option>
                                    <option value="NZ">Nuova Zelanda </option>
                                    <option value="OM">Oman </option>
                                    <option value="PK">Pakistan </option>
                                    <option value="PW">Palau </option>
                                    <option value="PS">Palestina </option>
                                    <option value="PA">Panama </option>
                                    <option value="PG">Papua Nuova Guinea </option>
                                    <option value="PY">Paraguay </option>
                                    <option value="PE">Perù </option>
                                    <option value="PF">Polinesia francese </option>
                                    <option value="PR">Porto Rico </option>
                                    <option value="QA">Qatar </option>
                                    <option value="CD">RD del Congo </option>
                                    <option value="CF">Rep. Centrafricana </option>
                                    <option value="DO">Rep. Dominicana </option>
                                    <option value="CG">Rep. del Congo </option>
                                    <option value="RE">Riunione </option>
                                    <option value="RW">Ruanda </option>
                                    <option value="RU">Russia </option>
                                    <option value="EH">Sahara Occidentale </option>
                                    <option value="KN">Saint Kitts e Nevis </option>
                                    <option value="VC">Saint Vincent e Grenadine </option>
                                    <option value="BL">Saint-Barthélemy </option>
                                    <option value="MF">Saint-Martin </option>
                                    <option value="PM">Saint-Pierre e Miquelon</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa Americane</option>
                                    <option value="SH">Sant'Elena</option>
                                    <option value="LC">Santa Lucia</option>
                                    <option value="ST">Sao Tom&eacute; e Principe</option>
                                    <option value="SN">Senegal </option>
                                    <option value="RS">Serbia </option>
                                    <option value="SC">Seychelles </option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SY">Siria</option>
                                    <option value="SO">Somalia</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="US">Stati Uniti d'America</option>
                                    <option value="ZA">Sudafrica</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SS">Sudan del Sud</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard e Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="TJ">Tagikistan</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TF">Terre australi e antartiche francesi</option>
                                    <option value="IO">Territorio britannico dell'oceano Indiano</option>
                                    <option value="TH">Thailandia</option>
                                    <option value="TL">Timor Est</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad e Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turchia</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks e Caicos</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ucraina</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis e Futuna</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto di addebito*</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                            </select>
                            <div class="input-group-addon">
                                <a class="btn-icon" data-toggle="modal" data-target="#starAlert1" data-animation="false"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                    <!--<i class="icon icon-star" title="icon-star"></i>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label class="control-label">Iban ordinante</label> <span class="output" id="IbanId_ord">IT79A0558401799000000081080</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label" id="importo">Importo*</label>
                    <div class="form-inline">
                        <div class="requiredField">
                            <div class="input-group" id="italyCurrency">
                                <input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-addon">EUR</div>
                            </div>
                        </div>
                        <div style="display:none" id="foreignCurrency">
                            <div class="input-group">
                                <input maxlength="10" id="importo2" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-btn">
                                    <select name="divisa" id="divisaSelect">
                                        <option cambio="7.4363" value="DKK">CORONA DANESE</option>
                                        <option cambio="8.7036" value="NOK">CORONA NORVEGESE</option>
                                        <option cambio="9.1841" value="SEK">CORONA SVEDESE</option>
                                        <option cambio="1.4433" value="AUD">DOLLARO AUSTRALIANO</option>
                                        <option cambio="1.3751" value="CAD">DOLLARO CANADESE</option>
                                        <option cambio="8.578" value="HKD">DOLLARO HONG KONG</option>
                                        <option cambio="1.6279" value="NZD">DOLLARO NUOVA ZELANDA</option>
                                        <option cambio="1.0" value="EUR" selected="selected">EURO</option>
                                        <option cambio="1.0406" value="CHF">FRANCO SVIZZERO</option>
                                        <option cambio="13.4921" value="ZAR">RAND SUD AFRICA E NAMIBIA</option>
                                        <option cambio="0.7085" value="GBP">STERLINA INGLESE</option>
                                        <option cambio="1.115" value="USD">USA DOLLARI</option>
                                        <option cambio="138.084" value="JPY">YEN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <label class="control-label" id="">Importo massimo</label> <span class="output" id="impMassimo" value="50.000,00">
    					50.000,00 &euro; 
    					<a href="#1" class="btn-icon"><i class="icon icon-edit_fill icon-2x icon-inline" title="modifica"></i></a>
    				</span> </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-7">
                            <label class="control-label" id="dataacc">Data esecuzione*</label>
                            <div class="form-inline">
                                <div class="input-group">
                                    <input type="text" id="datepickerEse" placeholder="gg/mm/aaaa"  value="22/05/2017"class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="control-label" id="dataacc">Saldo disponibile al 05/08/2015</label> <span class="output" id="balanceValue" value="4.604,07"><strong><a href="#">4.604,07 &euro;</a></strong></span> </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">Causale*</label>
                    <input type="text" name="causale" maxlength="140" value="" class="form-control clear-x" autocomplete="off" id="causale"> </div>
            </div>
        </div>
    </form>
</section>

<section>
    <h4>Dati beneficiario</h4>
    <form class="formGenerico borderFormRounded" role="form" autocomplete="off">
        <div class="form-group" id="rubricaBen">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label">Nome beneficiario*</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" id="campoAutocomplete" class="form-control clear-x" placeholder="scrivi o seleziona il nominativo">
                            <script type="text/javascript">
                                $("#campoAutocomplete").autoComplete(["mario rossi", "mario bianchi", "filippo neri"], {
                                    selectable: true
                                   
                                });
                                $("#campoAutocomplete").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 no-label"> <span class="output">
    					<a href="javascript:;" onclick="$('#nuovoBen').show();$('#rubricaBen').hide();">inserisci nuovo beneficiario</a>
    				</span> </div>
            </div>
        </div>
        <div id="nuovoBen" style="display:none">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="control-label">Nome beneficiario*</label>
                        <div class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control"> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 no-label">
                        <span class="output">
    						<a href="javascript:;" onclick="$('#nuovoBen').hide();$('#rubricaBen').show();">aggiungi da rubrica</a>
    					</span> </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="control-label">Iban Beneficiario*</label>
                        <input type="text" class="form-control"> </div>
                    <div class="col-sm-6 no-label">
                        <span class="output">
                            <a onclick="$('#contoInfo').toggle();">Non hai l'Iban?</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row" id="contoInfo" style="display:none">
                    <div class="col-sm-6">
                        <label for="" class="control-label">Numero c/c*</label>
                        <input type="text" class="form-control"> </div>
                    <div class="col-sm-3">
                        <label for="" class="control-label">Abi*</label>
                        <input type="text" class="form-control"> </div>
                    <div class="col-sm-3">
                        <label for="" class="control-label">Cab*</label>
                        <input type="text" class="form-control"> </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label" id="cod">Nazione di residenza beneficiario*</label>
                        <select name="cod" class="form-control">
                            <option value=""> </option>
                            <option value="AF">Afghanistan</option>
                        </select>
                    </div>
                    <div class="col-sm-6 no-label">
                  
                            <div class="checkbox">
                                <label class="textWrapper">
                                    <input type="checkbox" name="" id="">
                                    <span class="text">inserisci beneficiario in rubrica</span>
                                </label>
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico_step2_strong.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">prosegui</a>
        </div>
        <div class="clear"></div>
    </div>

    <div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body"> Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito? </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="btn-align-left">
                            <button type="button" class="btn btn-default" data-dismiss="modal">annulla</button>
                        </div>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">conferma</button>
                        </div>
                        <br class="clear">
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepickerEse").datepicker({
            showOtherMonths: true,
            beforeShowDay: highlightDays,
            showOn: "button",
            onSelect: function(){$(this).next('.editable-clear-x').show()},
            prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
            buttonImage: "/img/ret/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepickerEse');
    });
</script>
<!--esempio di gestione errore -->
<script type="text/javascript">
    $(function() {
        $("#btnInvio").click(function(event) {
            // Check giroconto
            var errors = [],
                testo1 = $("#datepickerEse")
            if (testo1.val() === '') {
                errors.push({
                    field: testo1,
                    text: "occorre inserire la data"
                });
                event.preventDefault();
            }
            setHasErrors(errors, "#formBonifico");
            return (!errors.length);
        });
    });
</script>
<!--OVERLAYER SEPA -->
<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Cos'&egrave; l'area sepa?</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <p> La <strong>Sepa</strong>, ovvero la <strong>Single Euro Payments Area</strong> (Area Unica dei Pagamenti in Euro), &egrave; l'area in cui i cittadini, le imprese e le pubbliche amministrazioni possono <strong>effettuare e ricevere pagamenti in euro</strong>, sia all'interno dei confini nazionali che fra i Paesi che ne fanno parte, alle <strong>stesse condizioni</strong> previste nel proprio Paese.
                          </p>
                        <h3>I paesi dell'area sepa</h3>
                        <p>Paesi dell'Unione Europea</p>
                        <div class="col-sm-3 col-xs-6"> <strong>Austria</strong>
                            <br> <strong>Belgio</strong>
                            <br> <strong>Bulgaria</strong>
                            <br> <strong>Cipro</strong>
                            <br> <strong>Croazia</strong>
                            <br> <strong>Danimarca</strong>
                            <br> <strong>Estonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Finlandia</strong>
                            <br> <strong>Francia</strong>
                            <br> <strong>Germania</strong>
                            <br> <strong>Grecia</strong>
                            <br> <strong>Irlanda</strong>
                            <br> <strong>Italia</strong>
                            <br> <strong>Lettonia</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Lituania</strong>
                            <br> <strong>Lussemburgo</strong>
                            <br> <strong>Malta</strong>
                            <br> <strong>Paesi Bassi</strong>
                            <br> <strong>Polonia</strong>
                            <br> <strong>Portogallo</strong>
                            <br> <strong>Regno Unito</strong>
                            <br> </div>
                        <div class="col-sm-3 col-xs-6"> <strong>Repubblica Ceca</strong>
                            <br> <strong>Repubblica Slovacca</strong>
                            <br> <strong>Romania</strong>
                            <br> <strong>Slovenia</strong>
                            <br> <strong>Spagna</strong>
                            <br> <strong>Svezia</strong>
                            <br> <strong>Ungheria</strong>
                            <br> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
