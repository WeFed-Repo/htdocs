<form method="post" action="" id="formCBill">
  <h3 class="titleSection titleForm">Titolo form</h3>
      <div class="formWrapper">
        <p>Lorem ipsum dolor sit lorem</p>
        <div class="form-group">
             <div class="row">
               <div class="form-field-input col-xs-6">
                  <label>
                    <input type="radio" name="modComunicazione" value="E" onclick="visualizzaContenuto('E');" id="canaleComunicazioneEmail">
                    tramite e-mail
                  </label>
               </div>
              <div class="form-field-input col-xs-6">
                 <label>
                    <input type="radio" name="modComunicazione" value="C" onclick="visualizzaContenuto('C');" id="canaleComunicazioneCartaceo">
                    tramite modulo cartaceo
                  </label>
               </div>
            </div>
        </div>
        <div class="form-group" id="boxEmailAzienda">
           <div class="row">
              <div class="form-field-input col-xs-6">
                  <label class="control-label">
                    Inserisci di seguito l'indirizzo e-mail dell'azienda alla quale vuoi inviare le coordinate del tuo conto:
                  </label>
              </div>
              <div class="form-field-input col-xs-6"> 
                  <div class="form-field">
                    <input type="text" name="emailAzienda" size="30" value="" id="emailAzienda" class="form-control">
                  </div>
              </div>
            </div>
        </div>
        <div class="form-group" id="boxConferma">
          <div class="row">
             <div class="form-field-input col-xs-4">
                  <label><input type="checkbox" name="conferma" value="on" id="conferma" class="fLeft"><span class="fLeft">Conferma</span></label>
              </div>
              <div class="form-field-input col-xs-8" id="boxConferma">
                <div class="form-field">
                  <textarea rows="2" cols="80" style="font-size: 10px; font-style: italic;" class="form-control" readonly="readonly">Con la richiesta di invio a mezzo e-mail della presente disposizione di accredito stipendio, confermi di essere consapevole del fatto che la medesima sarà trasmessa dalla Banca all'indirizzo da te indicato mediante semplice posta elettronica "in chiaro" e, a tal proposito, sollevi la Banca da ogni responsabilità e/o conseguenza riferita o altrimenti connessa con tale trasmissione.</textarea>
                </div>
              </div>
         </div>
        </div>
        <div id="boxDatoreLavoro">
          <h3 class="titleSection titleForm">Datore di lavoro</h3>
          <div class="form-group">
            <div class="row">
              <div class="form-field-input col-xs-6">
                  <label class="control-label">
                    Inserisci di seguito il nome dell'azienda per la quale lavori
                  </label>
              </div>
              <div class="form-field-input col-xs-6">
                <div class="form-field">
                  <input type="text" name="nomeAzienda" size="30" value="" id="nomeAzienda" class="form-control">
                </div>
              </div>
            </div>
           </div>
           <div class="form-group">
            <div class="row">
              <div class="form-field-input col-xs-6">
                <label class="control-label">
                  Inserisci l'ufficio alla cui cortese attenzione la comunicazione deve essere inviata
                </label>
              </div>
              <div class="form-field-input col-xs-6">
                <div class="form-field">
                  <input type="text" name="nomeUfficio" size="30" value="" id="nomeUfficio" class="form-control">
                </div>
              </div>
            </div>
            </div>
        </div>
        <div id="boxIndirizzoDatoreLavoro">
            <h3 class="titleSection titleForm">
              Indirizzo datore di lavoro
            </h3>
            <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-8">
                      <label class="control-label">
                        Indirizzo</label>
                      <div class="form-field">
                        <input type="text" name="indirizzoAzienda" size="60" value="" id="indirizzoAzienda" class="form-control">
                      </div>
                  </div>
                  <div class="form-field-input col-xs-4">
                    <label class="control-label">Comune</label>
                    <div class="form-field">
                      <input type="text" name="comuneAzienda" size="35" value="" id="comuneAzienda" class="form-control">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="form-field-input col-md-1 col-sm-2 col-xs-3">
                      <label class="control-label">CAP</label>
                      <div class="form-field">
                        <input type="text" name="capAzienda" maxlength="5" size="6" value="" id="capAzienda" class="form-control">  
                      </div>
                    </div>
                    <div class="form-field-input col-md-1 col-sm-2 col-xs-3">
                      <label class="control-label">Provincia</label>
                      <div class="form-field">
                        <input type="text" name="provinciaAzienda" maxlength="2" size="5" value="" onblur="upperCase(this);" id="provinciaAzienda" class="form-control">
                      </div>
                    </div>
                    <div class="form-field-input col-sm-4 col-xs-8">
                      <label class="control-label">Nazione</label>
                      <div class="form-field">
                        <select name="nazioneAzienda" id="nazioneAzienda" class="form-control w-auto"><option value="ABU DHABI">ABU DHABI</option>
                          
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                          
                            <option value="AJMAN (EMIRATI ARABI UNITI)">AJMAN (EMIRATI ARABI UNITI)</option>
                          
                            <option value="ALAND ISOLE">ALAND ISOLE</option>
                          
                            <option value="ALBANIA">ALBANIA</option>
                          
                            <option value="ALGERIA">ALGERIA</option>
                          
                            <option value="AMERICANE DEL PACIFICO - ISOLE">AMERICANE DEL PACIFICO - ISOLE</option>
                          
                            <option value="ANDORRA">ANDORRA</option>
                          
                            <option value="ANGOLA">ANGOLA</option>
                          
                            <option value="ANGUILLA">ANGUILLA</option>
                          
                            <option value="ANTARTIDE">ANTARTIDE</option>
                          
                            <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                          
                            <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                          
                            <option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                          
                            <option value="ARGENTINA">ARGENTINA</option>
                          
                            <option value="ARMENIA">ARMENIA</option>
                          
                            <option value="ARUBA">ARUBA</option>
                          
                            <option value="ASCENSIONE - ISOLE">ASCENSIONE - ISOLE</option>
                          
                            <option value="AUSTRALIA">AUSTRALIA</option>
                          
                            <option value="AUSTRIA">AUSTRIA</option>
                          
                            <option value="AZERBAIGIAN">AZERBAIGIAN</option>
                          
                            <option value="AZZORRE - ISOLE">AZZORRE - ISOLE</option>
                          
                            <option value="BAHAMAS - ISOLE">BAHAMAS - ISOLE</option>
                          
                            <option value="BAHREIN - ISOLE">BAHREIN - ISOLE</option>
                          
                            <option value="BANGLADESH">BANGLADESH</option>
                          
                            <option value="BARBADOS - ISOLE">BARBADOS - ISOLE</option>
                          
                            <option value="BELGIO">BELGIO</option>
                          
                            <option value="BELIZE">BELIZE</option>
                          
                            <option value="BENIN">BENIN</option>
                          
                            <option value="BERMUDA - ISOLE">BERMUDA - ISOLE</option>
                          
                            <option value="BHUTAN">BHUTAN</option>
                          
                            <option value="BIELORUSSIA">BIELORUSSIA</option>
                          
                            <option value="BOLIVIA">BOLIVIA</option>
                          
                            <option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
                          
                            <option value="BOTSWANA">BOTSWANA</option>
                          
                            <option value="BOUVET ISLANDS">BOUVET ISLANDS</option>
                          
                            <option value="BRASILE">BRASILE</option>
                          
                            <option value="BULGARIA">BULGARIA</option>
                          
                            <option value="BURKINA FASO (EX ALTO VOLTA)">BURKINA FASO (EX ALTO VOLTA)</option>
                          
                            <option value="BURUNDI">BURUNDI</option>
                          
                            <option value="CAMBOGIA">CAMBOGIA</option>
                          
                            <option value="CAMERUN">CAMERUN</option>
                          
                            <option value="CAMPIONE D ITALIA">CAMPIONE D ITALIA</option>
                          
                            <option value="CANADA">CANADA</option>
                          
                            <option value="CANARIE - ISOLE">CANARIE - ISOLE</option>
                          
                            <option value="CAPO VERDE - ISOLE">CAPO VERDE - ISOLE</option>
                          
                            <option value="CAROLINE - ISOLE">CAROLINE - ISOLE</option>
                          
                            <option value="CAYMAN - ISOLE">CAYMAN - ISOLE</option>
                          
                            <option value="CENTRAFRICANA REPUBBLICA">CENTRAFRICANA REPUBBLICA</option>
                          
                            <option value="CEUTA (DIP. SPAGN. D AFRICA)">CEUTA (DIP. SPAGN. D AFRICA)</option>
                          
                            <option value="CHAFARINAS - ISOLE">CHAFARINAS - ISOLE</option>
                          
                            <option value="CHAGOS - ISOLE">CHAGOS - ISOLE</option>
                          
                            <option value="CHRISTMAS ISLANDS">CHRISTMAS ISLANDS</option>
                          
                            <option value="CIAD">CIAD</option>
                          
                            <option value="CILE">CILE</option>
                          
                            <option value="CINA REPUBBLICA POPOLARE">CINA REPUBBLICA POPOLARE</option>
                          
                            <option value="CIPRO REPUBBLICA">CIPRO REPUBBLICA</option>
                          
                            <option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
                          
                            <option value="CLIPPERTON">CLIPPERTON</option>
                          
                            <option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
                          
                            <option value="COLOMBIA">COLOMBIA</option>
                          
                            <option value="COMORE - ISOLE">COMORE - ISOLE</option>
                          
                            <option value="CONGO">CONGO</option>
                          
                            <option value="CONGO REP. DEM.">CONGO REP. DEM.</option>
                          
                            <option value="COOK - ISOLE">COOK - ISOLE</option>
                          
                            <option value="COREA DEL NORD">COREA DEL NORD</option>
                          
                            <option value="COREA DEL SUD (REPUBBLICA DI)">COREA DEL SUD (REPUBBLICA DI)</option>
                          
                            <option value="COSTA D AVORIO">COSTA D AVORIO</option>
                          
                            <option value="COSTA RICA">COSTA RICA</option>
                          
                            <option value="CROAZIA">CROAZIA</option>
                          
                            <option value="CUBA">CUBA</option>
                          
                            <option value="DANIMARCA">DANIMARCA</option>
                          
                            <option value="DIP.BRIT. D OCEANIA (PITCAIRN)">DIP.BRIT. D OCEANIA (PITCAIRN)</option>
                          
                            <option value="DOMINICA">DOMINICA</option>
                          
                            <option value="DOMINICANA REPUBBLICA">DOMINICANA REPUBBLICA</option>
                          
                            <option value="DUBAY">DUBAY</option>
                          
                            <option value="ECUADOR">ECUADOR</option>
                          
                            <option value="EGITTO">EGITTO</option>
                          
                            <option value="EL SALVADOR REPUBBLICA">EL SALVADOR REPUBBLICA</option>
                          
                            <option value="ERITREA">ERITREA</option>
                          
                            <option value="ESTONIA">ESTONIA</option>
                          
                            <option value="ETIOPIA">ETIOPIA</option>
                          
                            <option value="FAER OER - FAEROERNE FOROYAR">FAER OER - FAEROERNE FOROYAR</option>
                          
                            <option value="FALKLAND O MALVINE - ISOLE">FALKLAND O MALVINE - ISOLE</option>
                          
                            <option value="FIGI">FIGI</option>
                          
                            <option value="FILIPPINE - ISOLE">FILIPPINE - ISOLE</option>
                          
                            <option value="FINLANDIA">FINLANDIA</option>
                          
                            <option value="FRANCIA">FRANCIA</option>
                          
                            <option value="FUJAYRAH">FUJAYRAH</option>
                          
                            <option value="GABON">GABON</option>
                          
                            <option value="GAMBIA REPUBBLICA">GAMBIA REPUBBLICA</option>
                          
                            <option value="GEORGIA">GEORGIA</option>
                          
                            <option value="GERMANIA REPUBBLICA FEDERALE">GERMANIA REPUBBLICA FEDERALE</option>
                          
                            <option value="GHANA">GHANA</option>
                          
                            <option value="GIAMAICA">GIAMAICA</option>
                          
                            <option value="GIAPPONE">GIAPPONE</option>
                          
                            <option value="GIBILTERRA">GIBILTERRA</option>
                          
                            <option value="GIBUTI REPUBBLICA">GIBUTI REPUBBLICA</option>
                          
                            <option value="GIORDANIA">GIORDANIA</option>
                          
                            <option value="GOUGH (SANT ELENA)">GOUGH (SANT ELENA)</option>
                          
                            <option value="GRECIA">GRECIA</option>
                          
                            <option value="GRENADA">GRENADA</option>
                          
                            <option value="GROENLANDIA">GROENLANDIA</option>
                          
                            <option value="GUADALUPA INDIPENDENTE">GUADALUPA INDIPENDENTE</option>
                          
                            <option value="GUAM">GUAM</option>
                          
                            <option value="GUATEMALA">GUATEMALA</option>
                          
                            <option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
                          
                            <option value="GUERNSEY - ISOLA">GUERNSEY - ISOLA</option>
                          
                            <option value="GUINEA BISSAU REPUBBLICA">GUINEA BISSAU REPUBBLICA</option>
                          
                            <option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
                          
                            <option value="GUINEA REPUBBLICA POPOLARE">GUINEA REPUBBLICA POPOLARE</option>
                          
                            <option value="GUYANA">GUYANA</option>
                          
                            <option value="HAITI">HAITI</option>
                          
                            <option value="HEARD E MCDONALD ISLANDS">HEARD E MCDONALD ISLANDS</option>
                          
                            <option value="HONDURAS">HONDURAS</option>
                          
                            <option value="HONG KONG">HONG KONG</option>
                          
                            <option value="INDIA">INDIA</option>
                          
                            <option value="INDONESIA">INDONESIA</option>
                          
                            <option value="IRAN">IRAN</option>
                          
                            <option value="IRAQ">IRAQ</option>
                          
                            <option value="IRLANDA REPUBBLICA DEMOCRATICA">IRLANDA REPUBBLICA DEMOCRATICA</option>
                          
                            <option value="ISLANDA">ISLANDA</option>
                          
                            <option value="ISRAELE">ISRAELE</option>
                          
                            <option value="ITALIA" selected="selected">ITALIA</option>
                          
                            <option value="JERSEY - ISOLA">JERSEY - ISOLA</option>
                          
                            <option value="KAZAKISTAN">KAZAKISTAN</option>
                          
                            <option value="KENYA">KENYA</option>
                          
                            <option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                          
                            <option value="KIRIBATI REPUBBLICA">KIRIBATI REPUBBLICA</option>
                          
                            <option value="KOSOVO">KOSOVO</option>
                          
                            <option value="KUWAIT">KUWAIT</option>
                          
                            <option value="LAOS">LAOS</option>
                          
                            <option value="LESOTHO">LESOTHO</option>
                          
                            <option value="LETTONIA">LETTONIA</option>
                          
                            <option value="LIBANO">LIBANO</option>
                          
                            <option value="LIBERIA">LIBERIA</option>
                          
                            <option value="LIBIA">LIBIA</option>
                          
                            <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                          
                            <option value="LITUANIA">LITUANIA</option>
                          
                            <option value="LUSSEMBURGO">LUSSEMBURGO</option>
                          
                            <option value="MACAO">MACAO</option>
                          
                            <option value="MACEDONIA">MACEDONIA</option>
                          
                            <option value="MADAGASCAR REPUBBLICA">MADAGASCAR REPUBBLICA</option>
                          
                            <option value="MADEIRA">MADEIRA</option>
                          
                            <option value="MALAWI REPUBBLICA">MALAWI REPUBBLICA</option>
                          
                            <option value="MALAYSIA">MALAYSIA</option>
                          
                            <option value="MALDIVE - ISOLE">MALDIVE - ISOLE</option>
                          
                            <option value="MALI REPUBBLICA">MALI REPUBBLICA</option>
                          
                            <option value="MALTA">MALTA</option>
                          
                            <option value="MAN-ISOLA">MAN-ISOLA</option>
                          
                            <option value="MARIANNE - ISOLE">MARIANNE - ISOLE</option>
                          
                            <option value="MAROCCO">MAROCCO</option>
                          
                            <option value="MARSHALL - ISOLE">MARSHALL - ISOLE</option>
                          
                            <option value="MARTINICA - ISOLA">MARTINICA - ISOLA</option>
                          
                            <option value="MAURITANIA">MAURITANIA</option>
                          
                            <option value="MAURIZIO - ISOLE">MAURIZIO - ISOLE</option>
                          
                            <option value="MAYOTTE - ISOLE">MAYOTTE - ISOLE</option>
                          
                            <option value="MELILLA (DIP. SPAGN. D AFRICA)">MELILLA (DIP. SPAGN. D AFRICA)</option>
                          
                            <option value="MESSICO">MESSICO</option>
                          
                            <option value="MIDWAY - ISOLE">MIDWAY - ISOLE</option>
                          
                            <option value="MOLDAVIA">MOLDAVIA</option>
                          
                            <option value="MONGOLIA">MONGOLIA</option>
                          
                            <option value="MONTENEGRO">MONTENEGRO</option>
                          
                            <option value="MONTSERRAT">MONTSERRAT</option>
                          
                            <option value="MOZAMBICO">MOZAMBICO</option>
                          
                            <option value="NAMIBIA - AFRICA DEL SUD OVEST">NAMIBIA - AFRICA DEL SUD OVEST</option>
                          
                            <option value="NAURU">NAURU</option>
                          
                            <option value="NEGARA BRUNEI DARUSSALAM">NEGARA BRUNEI DARUSSALAM</option>
                          
                            <option value="NEPAL">NEPAL</option>
                          
                            <option value="NICARAGUA">NICARAGUA</option>
                          
                            <option value="NIGER">NIGER</option>
                          
                            <option value="NIGERIA REPUBBLICA">NIGERIA REPUBBLICA</option>
                          
                            <option value="NIUE O SAVAGE">NIUE O SAVAGE</option>
                          
                            <option value="NORFOLK ISLANDS">NORFOLK ISLANDS</option>
                          
                            <option value="NORVEGIA">NORVEGIA</option>
                          
                            <option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
                          
                            <option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
                          
                            <option value="PAESI BASSI - OLANDA">PAESI BASSI - OLANDA</option>
                          
                            <option value="PAKISTAN">PAKISTAN</option>
                          
                            <option value="PALAU REPUBBLICA">PALAU REPUBBLICA</option>
                          
                            <option value="PALESTINA">PALESTINA</option>
                          
                            <option value="PANAMA">PANAMA</option>
                          
                            <option value="PAPUA NUOVA GUINEA">PAPUA NUOVA GUINEA</option>
                          
                            <option value="PARAGUAY">PARAGUAY</option>
                          
                            <option value="PENON DE ALHUCEMAS - ISOLE">PENON DE ALHUCEMAS - ISOLE</option>
                          
                            <option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
                          
                            <option value="PERU">PERU</option>
                          
                            <option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
                          
                            <option value="POLONIA">POLONIA</option>
                          
                            <option value="PORTOGALLO">PORTOGALLO</option>
                          
                            <option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
                          
                            <option value="PUERTO RICO">PUERTO RICO</option>
                          
                            <option value="QATAR">QATAR</option>
                          
                            <option value="RAS AL KHAIMAH">RAS AL KHAIMAH</option>
                          
                            <option value="REGNO UNITO DI GRAN BRETAGNA I">REGNO UNITO DI GRAN BRETAGNA I</option>
                          
                            <option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
                          
                            <option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
                          
                            <option value="RIUNIONE - ISOLA(DIP. FRANC. D">RIUNIONE - ISOLA(DIP. FRANC. D</option>
                          
                            <option value="ROMANIA">ROMANIA</option>
                          
                            <option value="RUANDA">RUANDA</option>
                          
                            <option value="RUSSIA (FEDERAZIONE DI)">RUSSIA (FEDERAZIONE DI)</option>
                          
                            <option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
                          
                            <option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                          
                            <option value="SAINT CHRISTOPHER - NEVIS">SAINT CHRISTOPHER - NEVIS</option>
                          
                            <option value="SAINT LUCIA">SAINT LUCIA</option>
                          
                            <option value="SAINT MARTIN">SAINT MARTIN</option>
                          
                            <option value="SAINT PIERRE E MIQUELON">SAINT PIERRE E MIQUELON</option>
                          
                            <option value="SAINT VINCENT E GRENADINE">SAINT VINCENT E GRENADINE</option>
                          
                            <option value="SALOMONE - ISOLE">SALOMONE - ISOLE</option>
                          
                            <option value="SAMOA AMERICANE">SAMOA AMERICANE</option>
                          
                            <option value="SAMOA OCCIDENTALI">SAMOA OCCIDENTALI</option>
                          
                            <option value="SAN MARINO">SAN MARINO</option>
                          
                            <option value="SANT ELENA">SANT ELENA</option>
                          
                            <option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
                          
                            <option value="SEICELLE - ISOLE">SEICELLE - ISOLE</option>
                          
                            <option value="SENEGAL">SENEGAL</option>
                          
                            <option value="SERBIA">SERBIA</option>
                          
                            <option value="SHARJAH">SHARJAH</option>
                          
                            <option value="SIERRA LEONE">SIERRA LEONE</option>
                          
                            <option value="SINGAPORE">SINGAPORE</option>
                          
                            <option value="SIRIA">SIRIA</option>
                          
                            <option value="SLOVACCHIA">SLOVACCHIA</option>
                          
                            <option value="SLOVENIA">SLOVENIA</option>
                          
                            <option value="SOMALIA">SOMALIA</option>
                          
                            <option value="SOUTH GEORGIA E SOUTH SANDWICH">SOUTH GEORGIA E SOUTH SANDWICH</option>
                          
                            <option value="SPAGNA">SPAGNA</option>
                          
                            <option value="SRI LANKA/CEYLON">SRI LANKA/CEYLON</option>
                          
                            <option value="STATI FEDERATI DI MICRONESIA">STATI FEDERATI DI MICRONESIA</option>
                          
                            <option value="STATI UNITI D AMERICA">STATI UNITI D AMERICA</option>
                          
                            <option value="SUDAN REPUBBLICA DEMOCRATICA">SUDAN REPUBBLICA DEMOCRATICA</option>
                          
                            <option value="SULTANATO DI OMAN">SULTANATO DI OMAN</option>
                          
                            <option value="SURINAME">SURINAME</option>
                          
                            <option value="SVALBARD E JAN MAYEN ISLANDS">SVALBARD E JAN MAYEN ISLANDS</option>
                          
                            <option value="SVEZIA">SVEZIA</option>
                          
                            <option value="SVIZZERA">SVIZZERA</option>
                          
                            <option value="SWAZILAND">SWAZILAND</option>
                          
                            <option value="TAGIKISTAN">TAGIKISTAN</option>
                          
                            <option value="TAIWAN">TAIWAN</option>
                          
                            <option value="TANZANIA">TANZANIA</option>
                          
                            <option value="TERR ANTARTICO FRANCESE">TERR ANTARTICO FRANCESE</option>
                          
                            <option value="TERRIT.BRITAN.OCEANO IND.">TERRIT.BRITAN.OCEANO IND.</option>
                          
                            <option value="THAILANDIA">THAILANDIA</option>
                          
                            <option value="TIMOR - LESTE">TIMOR - LESTE</option>
                          
                            <option value="TOGO REPUBBLICA">TOGO REPUBBLICA</option>
                          
                            <option value="TONGA">TONGA</option>
                          
                            <option value="TRINIDAD E TOBAGO REPUBBLICA">TRINIDAD E TOBAGO REPUBBLICA</option>
                          
                            <option value="TRISTAN DA CUNHA">TRISTAN DA CUNHA</option>
                          
                            <option value="TUNISIA">TUNISIA</option>
                          
                            <option value="TURCHIA">TURCHIA</option>
                          
                            <option value="TURKMENISTAN">TURKMENISTAN</option>
                          
                            <option value="TURKS E CAICOS">TURKS E CAICOS</option>
                          
                            <option value="TUVALU - ISOLE">TUVALU - ISOLE</option>
                          
                            <option value="UCRAINA">UCRAINA</option>
                          
                            <option value="UGANDA">UGANDA</option>
                          
                            <option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
                          
                            <option value="UNGHERIA">UNGHERIA</option>
                          
                            <option value="UNION OF MYANMAR (EX BIRMANIA)">UNION OF MYANMAR (EX BIRMANIA)</option>
                          
                            <option value="UNIONE TOKELAU - ISOLE">UNIONE TOKELAU - ISOLE</option>
                          
                            <option value="URUGUAY">URUGUAY</option>
                          
                            <option value="UZBEKISTAN">UZBEKISTAN</option>
                          
                            <option value="VANUATU">VANUATU</option>
                          
                            <option value="VENEZUELA">VENEZUELA</option>
                          
                            <option value="VERGINI - ISOLE AMERICANE">VERGINI - ISOLE AMERICANE</option>
                          
                            <option value="VERGINI - ISOLE BRITANNICHE">VERGINI - ISOLE BRITANNICHE</option>
                          
                            <option value="VIET NAM REPUBBLICA SOCIALISTA">VIET NAM REPUBBLICA SOCIALISTA</option>
                          
                            <option value="WAKE - ISOLA">WAKE - ISOLA</option>
                          
                            <option value="WALLIS E FUTUNA - ISOLE">WALLIS E FUTUNA - ISOLE</option>
                          
                            <option value="YEMEN REPUBBLICA ARABA">YEMEN REPUBBLICA ARABA</option>
                          
                            <option value="ZAMBIA">ZAMBIA</option>
                          
                            <option value="ZIMBABWE">ZIMBABWE</option></select>
                      </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
 </form>
<script type="text/javascript">
  var defaultAzienda = 'Nome azienda';
  var defaultUfficio = 'Nome ufficio';
  var defaultIndirizzo = 'Nome via / piazza..., 1';
  var defaultNazione = 'ITALIA';
  $(document).ready(function()
  {
    $('#boxEmailAzienda').hide();
    $('#boxConferma').hide();
    $('#boxDatoreLavoro').hide();
    $('#boxDatoreLavoro').hide();
    $('#boxIndirizzoDatoreLavoro').hide();
    if ($('#nomeAzienda').val()=='' || $('#nomeAzienda').val()==defaultAzienda){$('#nomeAzienda').val(defaultAzienda);$('#nomeAzienda').css("color", "gray");$('#nomeAzienda').css("font-style", "italic");}
    if ($('#nomeUfficio').val()=='' || $('#nomeUfficio').val()==defaultUfficio){$('#nomeUfficio').val(defaultUfficio);$('#nomeUfficio').css("color", "gray");$('#nomeUfficio').css("font-style", "italic");}
    if ($('#indirizzoAzienda').val()=='' || $('#indirizzoAzienda').val()==defaultIndirizzo){$('#indirizzoAzienda').val(defaultIndirizzo);$('#indirizzoAzienda').css("color", "gray");$('#indirizzoAzienda').css("font-style", "italic");}
    $("#nomeAzienda").focus(function() {
        if ($(this).val() == defaultAzienda) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
    });
    $("#nomeUfficio").focus(function() {
        if ($(this).val() == defaultUfficio) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
    });
    $("#indirizzoAzienda").focus(function() {
        if ($(this).val() == defaultIndirizzo) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
    });
    $("#nomeAzienda").blur(function() {
        if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultAzienda);}
    });
    $("#nomeUfficio").blur(function() {
        if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultUfficio);}
    });
    $("#indirizzoAzienda").blur(function() {
        if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultIndirizzo);}
    });
    if ($('#canaleComunicazioneEmail').attr('checked')){visualizzaContenuto('E');}
    else if ($('#canaleComunicazioneCartaceo').attr('checked')){visualizzaContenuto('C');}
  });
  function visualizzaContenuto(canaleComunicazione)
  {
    if (canaleComunicazione=='E')
    {
      $('#boxEmailAzienda').show();
      $('#boxConferma').show();
      $('#boxDatoreLavoro').css('display','block');
      $('#boxIndirizzoDatoreLavoro').hide();
      $('#indirizzoAzienda').val(defaultIndirizzo).css('color', 'gray').css('font-style', 'italic');
      $('#capAzienda').val('');
      $('#comuneAzienda').val('');
      $('#provinciaAzienda').val('');
      $('#nazioneAzienda').val(defaultNazione);
    }
    else if (canaleComunicazione=='C')
    {
      $('#boxEmailAzienda').hide();
      $('#emailAzienda').val('');
      $('#boxConferma').hide();
      $('#conferma').attr('checked',false);
      $('#boxDatoreLavoro').css('display','block');
      $('#boxIndirizzoDatoreLavoro').css('display','block');
    }
  }
  function upperCase(campo)
  {
    stringa = campo.value;
    stringa = $.trim(stringa);
    stringa = stringa.toUpperCase();
    campo.value = stringa;
  }
</script>