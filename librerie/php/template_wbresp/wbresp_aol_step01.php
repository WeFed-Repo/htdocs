<?php
$mono = (isset($_GET['mono']) && $_GET['mono'] == "true");
$numInt = $mono? 1 : 3;
?>
<div class="row">
    <div class="col-md-12">
        <h2>Inserisci i dati personali</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>Inserisci i campi dei tuoi dati personali per procedere all'apertura del conto corrente.</p>
    </div>
</div>

<form id="aolStep1" action="#" method="POST">

<!-- INTESTAZIONE GRUPPO ACCORDION -->
<?php if (!$mono): ?>
<div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php else: ?>
<div class="accordion-group" id="accordion">
<?php endif; ?>
<!-- FINE - INTESTAZIONE GRUPPO ACCORDION -->

<?php for ($i = 1; $i <= $numInt; ++$i): ?>

    <?php if (!$mono): ?>
    <!-- INTESTAZIONE ACCORDION -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOneA_int<?php echo $i; ?>">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1); ?>" aria-controls="collapse_int<?php echo $i; ?>" class="<?php echo ($i == 1)? "" : "collapsed"; ?>">Inserisci i tuoi dati personali</a>
            </h4>
            <p>Compila i campi dei tuoi dati personali per procedere nell'apertura del conto corrente.</p>
        </div>
        <div id="collapse_int<?php echo $i; ?>" class="panel-collapse collapse<?php echo ($i == 1)? " in" : ""; ?>" role="tabpanel" aria-labelledby="headingOneA_int<?php echo $i; ?>">
            <div class="panel-body">
    <!-- FINE - INTESTAZIONE ACCORDION -->
    <?php endif; ?>

                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>1. Inserisci le tue informazioni personali</h4>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="stato_nascita_int<?php echo $i; ?>">Paese di nascita*</label>
                        <select name="stato_nascita_int<?php echo $i; ?>" id="stato_nascita_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="ITALIA" selected="selected">ITALIA</option>
                            <option value="ABU DHABI">ABU DHABI</option>
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                            <option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
                            <option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                            <option value="AJMAN">AJMAN</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ALGERIA">ALGERIA</option>
                            <option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
                            <option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
                            <option value="ANDORRA">ANDORRA</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                            <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                            <option value="APOLIDE">APOLIDE</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cittadinanza_int<?php echo $i; ?>">Cittadinanza*</label>
                        <select name="cittadinanza_int<?php echo $i; ?>" id="cittadinanza_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="ITALIA" selected="selected">ITALIA</option>
                            <option value="ABU DHABI">ABU DHABI</option>
                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                            <option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
                            <option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                            <option value="AJMAN">AJMAN</option>
                            <option value="ALBANIA">ALBANIA</option>
                            <option value="ALGERIA">ALGERIA</option>
                            <option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
                            <option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
                            <option value="ANDORRA">ANDORRA</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                            <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                            <option value="APOLIDE">APOLIDE</option>
                        </select>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="provincia_nascita_int<?php echo $i; ?>">Provincia di nascita*</label>
                        <select name="provincia_nascita_int<?php echo $i; ?>" id="provincia_nascita_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="MI">MI</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="comune_nascita_int<?php echo $i; ?>">Comune di nascita*</label>
                        <select name="comune_nascita_int<?php echo $i; ?>" id="comune_nascita_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="MILANO~20121~20162">MILANO</option>
                        </select>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="provincia_nascita_int<?php echo $i; ?>" class="labelTooltip">Paese di residenza fiscale*</label>
                        <a href="javascript:;" data-toggle="tooltip" title="" id="ttNome_int<?php echo $i; ?>" class="icoinfo" data-original-title="Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, cio&egrave; 183 giorni all'anno, sono iscritte all'anagrafe della popolazione residente oppure hanno nel territorio dello Stato il proprio domicilio o residenza ai sensi del Codice Civile. Basta il verificarsi di una sola di queste condizioni."></a>
                        <span class="output">Italiana</span>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="panel-group panel-sub" id="accordion2_int<?php echo $i; ?>" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOneB_int<?php echo $i; ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>B" aria-expanded="true" aria-controls="collapse_int<?php echo $i; ?>B">
                                    Altri dati FATCA e CRS
                                </a>
                            </h4>
                        </div>
                        <div id="collapse_int<?php echo $i; ?>B" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneB_int<?php echo $i; ?>">
                            <div class="panel-body">
                                <p>Con l'entrata in vigore delle normative FATCA (Foreign Account Tax Compliance Act) e CRS (Common Reporting Standard), il Governo Italiano si &egrave; impeganto a garantire la compliance fiscale internazionale mediante l'adesione allo scambio automatico di informazioni fra le amministrazioni tributarie dei rispettivi paesi aderenti.</p>
                                <h4>Residenza Fiscale estera</h4>
                                <p>Ogni giurisdizione definisce autonomamente i criteri per l'attribuzione della residenza fiscale ad un soggetto. Il Paese nel quale il soggetto &egrave; tenuto a pagare le imposte sui redditi, in virt&ugrave; della propria residenza, domicilio o altro, &egrave; verosimilmente il Paese nel quale tale soggetto ha la propria residenza fiscale. Tuttavia, alcune circostanze (ad es. lavorare all'estero) potrebbero implicare la residenza fiscale di un soggetto in pi&ugrave; Paesi, nello stesso intervallo temporale (ad. es. anno civile). In tal caso, al fine di risolvere tali casistiche di doppia residenza fiscale, le Convenzioni contro la doppia imposizione contengono le cosiddette "tiebreaker rules", alle quali il soggetto pu&ograve; fare riferimento per stabilire la propria residenza fiscale.
                                    <br>Per ulteriori informazioni relative alla propria residenza fiscale, si prega di contattare il proprio consulente fiscale o verificare le informazioni disponibili sul Portale Web dell' OECD.</p>
                                <p>Alla luce di quanto sopra, se risulti essere fiscalmente residente anche in un altro Paese oltre l'Italia, ti chiediamo di indicarlo nell'apposito campo.</p>
                                <!-- seconda residenza fiscale -->
                                <div class="fatcaContainer" data-tit="<?php echo $i; ?>">
                                    <div class="fatcaBox" data-res="1" style="display:none">
                                        <div class="spacer-no-border">&nbsp;</div>
                                        <div class="row fatcaLinkButton">
                                            <div class="col-md-12 form-group">
                                                <a href="javascript:;" class="fieldButton add">
                                                    <span>Aggiungi
                                                        <span class="labelCounterPiu">seconda</span> residenza fiscale</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="spacer-no-border">&nbsp;</div>
                                    </div>
                                    <div class="fatcaBox" data-res="2">
                                        <div class="row fatcaFieldButton">
                                           <div class="col-md-6 form-group">
												<label for="residenzaFiscale2_int1" class="labelTooltip">Secondo paese di residenza fiscale</label>
												<a href="javascript:;" data-toggle="tooltip" title="" id="ttRes2_int1" class="icoinfo" data-original-title="Il regime fiscale applicato sarà quello dell'Italia. Questa informazione è rilevante solo ai fini FATCA e CRS. Se il cliente dichiara un Paese estero come «Altro Paese di residenza fiscale», la banca è tenuta, ai sensi delle normative FATCA e CRS, a segnalarlo con frequenza annuale all'Agenzia delle Entrate."></a>
												<select name="sel_residenzaFiscale2_int1" id="sel_residenzaFiscale2_int1" class="form-control">
													<option value="">seleziona</option>
														<option  value="238|ABU DHABI|X">ABU DHABI</option>
														<option  value="2|AFGHANISTAN|X">AFGHANISTAN</option>
														<option  value="239|AJMAN|X">AJMAN</option>
														<option  value="87|ALBANIA|X">ALBANIA</option>
														<option  value="3|ALGERIA|X">ALGERIA</option>
														<option  value="4|ANDORRA|X">ANDORRA</option>
														<option  value="133|ANGOLA|X">ANGOLA</option>
														<option  value="209|ANGUILLA|X">ANGUILLA</option>
														<option  value="180|ANTARTIDE|X">ANTARTIDE</option>
														<option  value="197|ANTIGUA E BARBUDA|X">ANTIGUA E BARBUDA</option>
														<option  value="5|ARABIA SAUDITA|X">ARABIA SAUDITA</option>
														<option  value="6|ARGENTINA|S">ARGENTINA</option>
														<option  value="266|ARMENIA|X">ARMENIA</option>
														<option  value="212|ARUBA|X">ARUBA</option>
														<option  value="7|AUSTRALIA|S">AUSTRALIA</option>
														<option  value="8|AUSTRIA|S">AUSTRIA</option>
														<option  value="268|AZERBAIGIAN|X">AZERBAIGIAN</option>
														<option  value="160|BAHAMAS|X">BAHAMAS</option>
														<option  value="169|BAHRAIN|X">BAHRAIN</option>
														<option  value="130|BANGLADESH|X">BANGLADESH</option>
														<option  value="118|BARBADOS|X">BARBADOS</option>
														<option  value="9|BELGIO|S">BELGIO</option>
														<option  value="198|BELIZE|S">BELIZE</option>
														<option  value="158|BENIN|X">BENIN</option>
														<option  value="207|BERMUDA|N">BERMUDA</option>
														<option  value="97|BHUTAN|X">BHUTAN</option>
														<option  value="264|BIELORUSSIA|X">BIELORUSSIA</option>
														<option  value="10|BOLIVIA|X">BOLIVIA</option>
														<option  value="295|BONAIRE, SAINT ESTATIUS, SABA|X">BONAIRE, SAINT ESTATIUS, SABA</option>
														<option  value="274|BOSNIA ED ERZEGOVINA|X">BOSNIA ED ERZEGOVINA</option>
														<option  value="98|BOTSWANA|X">BOTSWANA</option>
														<option  value="11|BRASILE|S">BRASILE</option>
														<option  value="125|BRUNEI|X">BRUNEI</option>
														<option  value="12|BULGARIA|S">BULGARIA</option>
														<option  value="142|BURKINA FASO|X">BURKINA FASO</option>
														<option  value="25|BURUNDI|X">BURUNDI</option>
														<option  value="135|CAMBOGIA|X">CAMBOGIA</option>
														<option  value="119|CAMERUN|X">CAMERUN</option>
														<option  value="13|CANADA|S">CANADA</option>
														<option  value="188|CAPO VERDE|X">CAPO VERDE</option>
														<option  value="144|CIAD|X">CIAD</option>
														<option  value="15|CILE|X">CILE</option>
														<option  value="16|CINA|S">CINA</option>
														<option  value="101|CIPRO|S">CIPRO</option>
														<option  value="93|CITTA DEL VATICANO|X">CITTA DEL VATICANO</option>
														<option  value="17|COLOMBIA|X">COLOMBIA</option>
														<option  value="176|COMOROS|X">COMOROS</option>
														<option  value="145|CONGO|X">CONGO</option>
														<option  value="74|COREA DEL NORD|X">COREA DEL NORD</option>
														<option  value="84|COREA DEL SUD|S">COREA DEL SUD</option>
														<option  value="146|COSTA DI AVORIO|X">COSTA DI AVORIO</option>
														<option  value="19|COSTA RICA|S">COSTA RICA</option>
														<option  value="261|CROAZIA|S">CROAZIA</option>
														<option  value="20|CUBA|X">CUBA</option>
														<option  value="296|CURAÇAO|X">CURAÇAO</option>
														<option  value="21|DANIMARCA|S">DANIMARCA</option>
														<option  value="192|DOMINICA|X">DOMINICA</option>
														<option  value="24|ECUADOR|X">ECUADOR</option>
														<option  value="23|EGITTO|X">EGITTO</option>
														<option  value="64|EL SALVADOR|X">EL SALVADOR</option>
														<option  value="240|EMIRATI ARABI UNITI|X">EMIRATI ARABI UNITI</option>
														<option  value="277|ERITREA|X">ERITREA</option>
														<option  value="257|ESTONIA|S">ESTONIA</option>
														<option  value="26|ETIOPIA|X">ETIOPIA</option>
														<option  value="161|FIGI|X">FIGI</option>
														<option  value="27|FILIPPINE|X">FILIPPINE</option>
														<option  value="28|FINLANDIA|S">FINLANDIA</option>
														<option  value="29|FRANCIA|S">FRANCIA</option>
														<option  value="241|FUIJAYRAH|X">FUIJAYRAH</option>
														<option  value="157|GABON|X">GABON</option>
														<option  value="164|GAMBIA|X">GAMBIA</option>
														<option  value="267|GEORGIA|X">GEORGIA</option>
														<option  value="94|GERMANIA|X">GERMANIA</option>
														<option  value="112|GHANA|X">GHANA</option>
														<option  value="82|GIAMAICA|X">GIAMAICA</option>
														<option  value="88|GIAPPONE|S">GIAPPONE</option>
														<option  value="102|GIBILTERRA|S">GIBILTERRA</option>
														<option  value="113|GIBUTI|X">GIBUTI</option>
														<option  value="122|GIORDANIA|X">GIORDANIA</option>
														<option  value="32|GRECIA|S">GRECIA</option>
														<option  value="156|GRENADA|X">GRENADA</option>
														<option  value="200|GROENLANDIA|S">GROENLANDIA</option>
														<option  value="214|GUADALUPA|X">GUADALUPA</option>
														<option  value="154|GUAM|X">GUAM</option>
														<option  value="33|GUATEMALA|X">GUATEMALA</option>
														<option  value="201|GUERNSEY|S">GUERNSEY</option>
														<option  value="123|GUIANA FRANCESE|X">GUIANA FRANCESE</option>
														<option  value="137|GUINEA|X">GUINEA</option>
														<option  value="167|GUINEA EQUATORIALE|X">GUINEA EQUATORIALE</option>
														<option  value="185|GUINEA-BISSAU|X">GUINEA-BISSAU</option>
														<option  value="159|GUYANA|X">GUYANA</option>
														<option  value="34|HAITI|X">HAITI</option>
														<option  value="35|HONDURAS|X">HONDURAS</option>
														<option  value="103|HONG KONG|S">HONG KONG</option>
														<option  value="114|INDIA|S">INDIA</option>
														<option  value="129|INDONESIA|X">INDONESIA</option>
														<option  value="39|IRAN|X">IRAN</option>
														<option  value="38|IRAQ|X">IRAQ</option>
														<option  value="40|IRLANDA|S">IRLANDA</option>
														<option  value="41|ISLANDA|S">ISLANDA</option>
														<option  value="286|ISLOE SVALBARD E JAN MAYEN|X">ISLOE SVALBARD E JAN MAYEN</option>
														<option  value="280|ISOLA BOUVET|X">ISOLA BOUVET</option>
														<option  value="282|ISOLA CHRISTMAS|X">ISOLA CHRISTMAS</option>
														<option  value="281|ISOLA COCOS  KEELING|X">ISOLA COCOS  KEELING</option>
														<option  value="203|ISOLA DI MAN|S">ISOLA DI MAN</option>
														<option  value="292|ISOLE ALAND|X">ISOLE ALAND</option>
														<option  value="252|ISOLE AMERICANE DEL PACIFICO|X">ISOLE AMERICANE DEL PACIFICO</option>
														<option  value="211|ISOLE CAYMAN|N">ISOLE CAYMAN</option>
														<option  value="237|ISOLE COOK|X">ISOLE COOK</option>
														<option  value="190|ISOLE FALKLAND|X">ISOLE FALKLAND</option>
														<option  value="204|ISOLE FAROE|S">ISOLE FAROE</option>
														<option  value="284|ISOLE HEARD E MCDONALD|X">ISOLE HEARD E MCDONALD</option>
														<option  value="219|ISOLE MARIANNE SETTENTRIONALI|X">ISOLE MARIANNE SETTENTRIONALI</option>
														<option  value="217|ISOLE MARSHALL|S">ISOLE MARSHALL</option>
														<option  value="285|ISOLE NORFOLK|X">ISOLE NORFOLK</option>
														<option  value="191|ISOLE SALOMONE|X">ISOLE SALOMONE</option>
														<option  value="210|ISOLE TURKS E CAICOS|N">ISOLE TURKS E CAICOS</option>
														<option  value="221|ISOLE VERGINI AMERICANE|X">ISOLE VERGINI AMERICANE</option>
														<option  value="249|ISOLE VERGINI BRITANNICHE|X">ISOLE VERGINI BRITANNICHE</option>
														<option  value="182|ISRAELE|X">ISRAELE</option>
														<option  value="202|JERSEY|X">JERSEY</option>
														<option  value="269|KAZAKISTAN|X">KAZAKISTAN</option>
														<option  value="116|KENYA|X">KENYA</option>
														<option  value="194|KIRIBATI|X">KIRIBATI</option>
														<option  value="126|KUWAIT|S">KUWAIT</option>
														<option  value="270|KYRGYZSTAN|X">KYRGYZSTAN</option>
														<option  value="136|LAOS|X">LAOS</option>
														<option  value="89|LESOTHO|X">LESOTHO</option>
														<option  value="258|LETTONIA|S">LETTONIA</option>
														<option  value="95|LIBANO|X">LIBANO</option>
														<option  value="44|LIBERIA|X">LIBERIA</option>
														<option  value="45|LIBIA|X">LIBIA</option>
														<option  value="90|LIECHTENSTEIN|S">LIECHTENSTEIN</option>
														<option  value="259|LITUANIA|S">LITUANIA</option>
														<option  value="92|LUSSEMBURGO|S">LUSSEMBURGO</option>
														<option  value="59|MACAO|X">MACAO</option>
														<option  value="278|MACEDONIA|X">MACEDONIA</option>
														<option  value="104|MADAGASCAR|X">MADAGASCAR</option>
														<option  value="56|MALAWI|X">MALAWI</option>
														<option  value="127|MALDIVE|X">MALDIVE</option>
														<option  value="106|MALESIA|S">MALESIA</option>
														<option  value="149|MALI|X">MALI</option>
														<option  value="105|MALTA|S">MALTA</option>
														<option  value="107|MAROCCO|X">MAROCCO</option>
														<option  value="213|MARTINICA|X">MARTINICA</option>
														<option  value="141|MAURITANIA|X">MAURITANIA</option>
														<option  value="128|MAURITIUS|X">MAURITIUS</option>
														<option  value="226|MAYOTTE|X">MAYOTTE</option>
														<option  value="46|MESSICO|S">MESSICO</option>
														<option  value="215|MICRONESIA|X">MICRONESIA</option>
														<option  value="265|MOLDAVIA|X">MOLDAVIA</option>
														<option  value="91|MONACO|X">MONACO</option>
														<option  value="110|MONGOLIA|X">MONGOLIA</option>
														<option  value="290|MONTENEGRO|X">MONTENEGRO</option>
														<option  value="208|MONTSERRAT|X">MONTSERRAT</option>
														<option  value="134|MOZAMBICO|X">MOZAMBICO</option>
														<option  value="83|MYANMAR|X">MYANMAR</option>
														<option  value="206|NAMIBIA|X">NAMIBIA</option>
														<option  value="109|NARAU|S">NARAU</option>
														<option  value="115|NEPAL|X">NEPAL</option>
														<option  value="47|NICARAGUA|X">NICARAGUA</option>
														<option  value="150|NIGER|X">NIGER</option>
														<option  value="117|NIGERIA|X">NIGERIA</option>
														<option  value="205|NIUE|X">NIUE</option>
														<option  value="48|NORVEGIA|S">NORVEGIA</option>
														<option  value="253|NUOVA CALEDONIA|X">NUOVA CALEDONIA</option>
														<option  value="49|NUOVA ZELANDA|S">NUOVA ZELANDA</option>
														<option  value="163|OMAN|X">OMAN</option>
														<option  value="50|PAESI BASSI|S">PAESI BASSI</option>
														<option  value="36|PAKISTAN|X">PAKISTAN</option>
														<option  value="216|PALAU|X">PALAU</option>
														<option  value="279|PALESTINA|X">PALESTINA</option>
														<option  value="51|PANAMA|X">PANAMA</option>
														<option  value="186|PAPUA NUOVA GUINEA|X">PAPUA NUOVA GUINEA</option>
														<option  value="52|PARAGUAY|X">PARAGUAY</option>
														<option  value="53|PERU|X">PERU</option>
														<option  value="175|PITCAIRN|X">PITCAIRN</option>
														<option  value="225|POLINESIA FRANCESE|X">POLINESIA FRANCESE</option>
														<option  value="54|POLONIA|S">POLONIA</option>
														<option  value="55|PORTOGALLO|S">PORTOGALLO</option>
														<option  value="220|PORTORICO|X">PORTORICO</option>
														<option  value="168|QATAR|X">QATAR</option>
														<option  value="242|RAS AL KHAIMAH|X">RAS AL KHAIMAH</option>
														<option  value="31|REGNO UNITO|S">REGNO UNITO</option>
														<option  value="18|REP. DEMOCRATICA DEL CONGO|X">REP. DEMOCRATICA DEL CONGO</option>
														<option  value="143|REPPUBBLICA CENTROAFRICANA|X">REPPUBBLICA CENTROAFRICANA</option>
														<option  value="275|REPUBBLICA CECA|S">REPUBBLICA CECA</option>
														<option  value="63|REPUBBLICA DOMINICANA|X">REPUBBLICA DOMINICANA</option>
														<option  value="247|REUNION|X">REUNION</option>
														<option  value="61|ROMANIA|S">ROMANIA</option>
														<option  value="151|RUANDA|X">RUANDA</option>
														<option  value="262|RUSSIA|S">RUSSIA</option>
														<option  value="166|SAHARA OCCIDENTALE|X">SAHARA OCCIDENTALE</option>
														<option  value="293|SAINT BARTHELEMY|X">SAINT BARTHELEMY</option>
														<option  value="195|SAINT KITTS E NEVIS|X">SAINT KITTS E NEVIS</option>
														<option  value="199|SAINT LUCIA|X">SAINT LUCIA</option>
														<option  value="222|SAINT MARTIN (FRENCH PART)|X">SAINT MARTIN (FRENCH PART)</option>
														<option  value="248|SAINT PIERRE E MIQUELON|X">SAINT PIERRE E MIQUELON</option>
														<option  value="196|SAINT VINCENT E GRENADINE|S">SAINT VINCENT E GRENADINE</option>
														<option  value="131|SAMOA|X">SAMOA</option>
														<option  value="148|SAMOA AMERICANA|X">SAMOA AMERICANA</option>
														<option  value="37|SAN MARINO|S">SAN MARINO</option>
														<option  value="254|SANTA ELENA|X">SANTA ELENA</option>
														<option  value="187|SAO TOME E PRINCIPE|X">SAO TOME E PRINCIPE</option>
														<option  value="152|SENEGAL|X">SENEGAL</option>
														<option  value="189|SEYCHELLES|S">SEYCHELLES</option>
														<option  value="243|SHARJAH|X">SHARJAH</option>
														<option  value="153|SIERRA LEONE|X">SIERRA LEONE</option>
														<option  value="147|SINGAPORE|S">SINGAPORE</option>
														<option  value="294|SINT MAARTEN (DUTCH PART)|X">SINT MAARTEN (DUTCH PART)</option>
														<option  value="65|SIRIA|X">SIRIA</option>
														<option  value="276|SLOVACCHIA|S">SLOVACCHIA</option>
														<option  value="260|SLOVENIA|S">SLOVENIA</option>
														<option  value="66|SOMALIA|X">SOMALIA</option>
														<option  value="67|SPAGNA|S">SPAGNA</option>
														<option  value="85|SRI LANKA|X">SRI LANKA</option>
														<option  value="69|STATI UNITI|S">STATI UNITI</option>
														<option  value="78|SUD AFRICA|S">SUD AFRICA</option>
														<option  value="283|SUD GEORGIA E SUD SANDWICH|X">SUD GEORGIA E SUD SANDWICH</option>
														<option  value="297|SUD SUDAN|X">SUD SUDAN</option>
														<option  value="70|SUDAN|X">SUDAN</option>
														<option  value="124|SURINAME|X">SURINAME</option>
														<option  value="68|SVEZIA|S">SVEZIA</option>
														<option  value="71|SVIZZERA|X">SVIZZERA</option>
														<option  value="138|SWAZILAND|X">SWAZILAND</option>
														<option  value="272|TAGIKISTAN|X">TAGIKISTAN</option>
														<option  value="72|TAILANDIA|X">TAILANDIA</option>
														<option  value="22|TAIWAN|X">TAIWAN</option>
														<option  value="57|TANZANIA|X">TANZANIA</option>
														<option  value="183|TERRITORI FRANCESI DEL SUD|X">TERRITORI FRANCESI DEL SUD</option>
														<option  value="245|TERRITORIO BRITANNICO OCEANO INDIANO|X">TERRITORIO BRITANNICO OCEANO INDIANO</option>
														<option  value="287|TIMOR EST|X">TIMOR EST</option>
														<option  value="155|TOGO|X">TOGO</option>
														<option  value="236|TOKELAU|X">TOKELAU</option>
														<option  value="162|TONGA|X">TONGA</option>
														<option  value="120|TRINIDAD E TOBAGO|X">TRINIDAD E TOBAGO</option>
														<option  value="75|TUNISIA|X">TUNISIA</option>
														<option  value="76|TURCHIA|S">TURCHIA</option>
														<option  value="273|TURKMENISTAN|X">TURKMENISTAN</option>
														<option  value="193|TUVALU|X">TUVALU</option>
														<option  value="263|UCRAINA|X">UCRAINA</option>
														<option  value="132|UGANDA|X">UGANDA</option>
														<option  value="244|UMM AL QAIWAIN|X">UMM AL QAIWAIN</option>
														<option  value="77|UNGHERIA|S">UNGHERIA</option>
														<option  value="80|URUGUAY|S">URUGUAY</option>
														<option  value="271|UZBEKISTAN|X">UZBEKISTAN</option>
														<option  value="121|VANUATU|X">VANUATU</option>
														<option  value="81|VENEZUELA|X">VENEZUELA</option>
														<option  value="62|VIETNAM|X">VIETNAM</option>
														<option  value="218|WALLIS E FUGUNA|X">WALLIS E FUGUNA</option>
														<option  value="42|YEMEN|X">YEMEN</option>
														<option  value="58|ZAMBIA|X">ZAMBIA</option>
														<option  value="73|ZIMBABWE|X">ZIMBABWE</option>
												</select>
												<input type="hidden" name="residenzaFiscale2_int1" id="residenzaFiscale2_int1" value="">
											</div>
											<div class="col-md-6 form-group">
												<label for="TIN2_int1">Codice fiscale estero</label>
												<input type="text" name="TIN2_int1" id="TIN2_int1" value="" class="textinput form-control" disabled maxlength="20">
											</div>
                                        </div>
                                        <div class="spacer-no-border">&nbsp;</div>
                                        <div class="row fatcaUploadButton">
                                            <div class="col-xs-12 form-group">
                                                <!-- Componente caricamento file TBD -->
                                                <div class="form-group">
                                                    <label><a href="#!" class="lbl-file-group">Carica codice fiscale estero (TIN)</a></label>
                                                    <div class="input-group btn-file-group" style="display:none;">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-file">
                                                                Seleziona<input type="file" id="fileTIN2_int<?php echo $i; ?>" name="fileTIN2_int<?php echo $i; ?>" accept=".pdf,.jpg,.jpeg,.png">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control btn-file-name" readonly="">
                                                    </div>
                                                </div>
                                                <!-- Fine componente caricamento file TBD -->
                                            </div>
                                        </div>
                                        <div class="spacer-no-border">&nbsp;</div>
                                        <div class="row fatcaLinkButton">
                                            <div class="col-md-6 form-group">
                                                <a href="javascript:;" class="fieldButton remove">
                                                    <span>Elimina
                                                        <span class="labelCounterMeno">seconda</span> residenza fiscale</span>
                                                </a>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <a href="javascript:;" class="fieldButton add disabled">
                                                    <span>Aggiungi
                                                        <span class="labelCounterPiu">terza</span> residenza fiscale</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="spacer-no-border">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>2.Inserisci i dati del tuo documento di identit&agrave;</h4>
                    </div>
                </div>

                <div class="modulo-doc">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="tipo_doc_int<?php echo $i; ?>">Tipo di documento*</label>
                            <select name="tipo_doc_int<?php echo $i; ?>" id="tipo_doc_int<?php echo $i; ?>" class="form-control" data-modulo-doc="tipo-documento">
                               <option selected value="">Seleziona il tipo di documento</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="numero_doc_int<?php echo $i; ?>" data-modulo="doc-numero">Numero*</label>
                            <input type="text" placeholder="Inserisci il numero del documento" maxlength="16" name="numero_doc_int<?php echo $i; ?>" id="numero_doc_int<?php echo $i; ?>" value="" class="textinput form-control">
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="gg_emissione_int<?php echo $i; ?>"data-modulo="doc-rilascio">Data di rilascio/rinnovo*</label>
                            <div class="input input-inline input-date">
                                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_emissione_int<?php echo $i; ?>" id="gg_emissione_int<?php echo $i; ?>" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_emissione_int<?php echo $i; ?>" id="mm_emissione_int<?php echo $i; ?>" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_emissione_int<?php echo $i; ?>" id="aa_emissione_int<?php echo $i; ?>" value="" class="textinput form-control nascAn ignore">
                                <input type="text" name="emissione_int<?php echo $i; ?>" id="emissione_int<?php echo $i; ?>" class="hidden-input">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="gg_scadenza_int<?php echo $i; ?>" data-modulo="doc-scadenza">Data di scadenza*</label>
                            <div class="input input-inline input-date">
                                <input type="tel" pattern="\d+" placeholder="gg" maxlength="2" name="gg_scadenza_int<?php echo $i; ?>" id="gg_scadenza_int<?php echo $i; ?>" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="mm" maxlength="2" name="mm_scadenza_int<?php echo $i; ?>" id="mm_scadenza_int<?php echo $i; ?>" value="" class="textinput form-control nascGg ignore">
                                <div class="nascSl">/</div>
                                <input type="tel" pattern="\d+" placeholder="aaaa" maxlength="4" name="aa_scadenza_int<?php echo $i; ?>" id="aa_scadenza_int<?php echo $i; ?>" value="" class="textinput form-control nascAn ignore">
                                <input type="text" name="scadenza_int<?php echo $i; ?>" id="scadenza_int<?php echo $i; ?>" class="hidden-input">
                            </div>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="stato_emissione_int<?php echo $i; ?>">Paese di rilascio*</label>
                            <select name="stato_emissione_int<?php echo $i; ?>" id="stato_emissione_int<?php echo $i; ?>" class="form-control">
                                <option value="">seleziona</option>
                                <option value="ITALIA" selected="selected">ITALIA</option>
                                <option value="ABU DHABI">ABU DHABI</option>
                                <option value="AFGHANISTAN">AFGHANISTAN</option>
                                <option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
                                <option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                <option value="AJMAN">AJMAN</option>
                                <option value="ALBANIA">ALBANIA</option>
                                <option value="ALGERIA">ALGERIA</option>
                                <option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
                                <option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
                                <option value="ANDORRA">ANDORRA</option>
                                <option value="ANGOLA">ANGOLA</option>
                                <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="provincia_emissione_int<?php echo $i; ?>">Provincia di rilascio*</label>
                            <select name="provincia_emissione_int<?php echo $i; ?>" id="provincia_emissione_int<?php echo $i; ?>" class="form-control">
                                <option value="">seleziona</option>
                                <option value="MI">MI</option>
                            </select>
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comune_emissione_int<?php echo $i; ?>"data-modulo="doc-comune">Comune di rilascio*</label>
                            <select name="comune_emissione_int<?php echo $i; ?>" id="comune_emissione_int<?php echo $i; ?>" class="form-control">
                                <option value="">seleziona</option>
                                <option value="MILANO~20121~20162">MILANO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>3.Indica i recapiti</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 form-group">
                        <label for="qualif_int<?php echo $i; ?>">Indirizzo di residenza*</label>
                        <div class="input input-inline input-address">
                            <select name="qualif_int<?php echo $i; ?>" id="qualif_int<?php echo $i; ?>" class="textinput form-control IndTipo ignore">
                                <option value="">seleziona</option>
                                <option value="Via">Via</option>
                                <option value="Viale">Viale</option>
                                <option value="Corso">Corso</option>
                                <option value="Piazza">Piazza</option>
                                <option value="Piazzale">Piazzale</option>
                                <option value="Strada">Strada</option>
                                <option value="Stretto">Stretto</option>
                                <option value="Contrada">Contrada</option>
                                <option value="Vicolo">Vicolo</option>
                                <option value="Localit&agrave;">Localit&agrave;</option>
                                <option value="Largo">Largo</option>
                                <option value="Vico">Vico</option>
                                <option value="Altro">Altro</option>
                            </select>
                            <input type="text" placeholder="Inserisci il nome della via/viale/corso/piazza" name="via_int<?php echo $i; ?>" id="via_int<?php echo $i; ?>" value="" class="textinput form-control IndNome ignore">
                            <input type="text" name="ind_int<?php echo $i; ?>" id="ind_int<?php echo $i; ?>" class="hidden-input">
                        </div>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="civico_int<?php echo $i; ?>">Numero*</label>
                        <input type="text" placeholder="Indica il numero" name="civico_int<?php echo $i; ?>" id="civico_int<?php echo $i; ?>" value="" class="textinput form-control">
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="presso_int<?php echo $i; ?>">Presso</label>
                        <input type="text" placeholder="Inserisci Nome Cognome / Nome azienda" name="presso_int<?php echo $i; ?>" id="presso_int<?php echo $i; ?>" value="" class="textinput form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="provincia_int<?php echo $i; ?>">Provincia di residenza*</label>
                        <select name="provincia_int<?php echo $i; ?>" id="provincia_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="MI">MI</option>
                        </select>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="comune_int<?php echo $i; ?>">Comune di residenza*</label>
                        <select name="comune_int<?php echo $i; ?>" id="comune_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="MILANO~20121~20162">MILANO</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cap_int<?php echo $i; ?>">CAP di residenza*</label>
                        <select name="cap_int<?php echo $i; ?>" id="cap_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="20121">20121</option>
                            <option value="20122">20122</option>
                            <option value="20123">20123</option>
                            <option value="20124">20124</option>
                            <option value="20125">20125</option>
                        </select>
                    </div>
                </div>
                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                <div class="panel-group panel-sub" id="accordion3_int<?php echo $i; ?>" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOneC_int<?php echo $i; ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>C" aria-expanded="true" aria-controls="collapse_int<?php echo $i; ?>C" class="collapsed">
                                    Aggiungi un indirizzo di corrispondenza
                                </a>
                            </h4>
                            <p>Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata la documentazione contrattuale, per tutti gli intestatari del conto.</p>
                        </div>
                        <div id="collapse_int<?php echo $i; ?>C" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneC_int<?php echo $i; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-9 form-group">
                                        <label for="qualif_recapito_int<?php echo $i; ?>">Indirizzo di corrispondenza*</label>
                                        <div class="input input-inline input-address">
                                            <select name="qualif_recapito_int<?php echo $i; ?>" id="qualif_recapito_int<?php echo $i; ?>" class="textinput form-control IndTipo ignore">
                                                <option value="">seleziona</option>
                                                <option value="Via">Via</option>
                                                <option value="Viale">Viale</option>
                                                <option value="Corso">Corso</option>
                                                <option value="Piazza">Piazza</option>
                                                <option value="Piazzale">Piazzale</option>
                                                <option value="Strada">Strada</option>
                                                <option value="Stretto">Stretto</option>
                                                <option value="Contrada">Contrada</option>
                                                <option value="Vicolo">Vicolo</option>
                                                <option value="Localit&agrave;">Localit&agrave;</option>
                                                <option value="Largo">Largo</option>
                                                <option value="Vico">Vico</option>
                                                <option value="Altro">Altro</option>
                                            </select>
                                            <input type="text" placeholder="Inserisci il nome della via/viale/corso/piazza" name="via_recapito_int<?php echo $i; ?>" id="via_recapito_int<?php echo $i; ?>" value="" class="textinput form-control IndNome ignore">
                                            <input type="text" name="ind_recapito_int<?php echo $i; ?>" id="ind_recapito_int<?php echo $i; ?>" class="hidden-input">
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="civico_recapito_int<?php echo $i; ?>">Numero*</label>
                                        <input type="text" placeholder="Indica il numero" name="civico_recapito_int<?php echo $i; ?>" id="civico_recapito_int<?php echo $i; ?>" value="" class="textinput form-control">
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="presso_recapito_int<?php echo $i; ?>">Presso</label>
                                        <input type="text" placeholder="Inserisci Nome Cognome / Nome azienda" name="presso_recapito_int<?php echo $i; ?>" id="presso_recapito_int<?php echo $i; ?>" value="" class="textinput form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="provincia_recapito_int<?php echo $i; ?>">Provincia*</label>
                                        <select name="provincia_recapito_int<?php echo $i; ?>" id="provincia_recapito_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MI">MI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="comune_recapito_int<?php echo $i; ?>">Comune*</label>
                                        <select name="comune_recapito_int<?php echo $i; ?>" id="comune_recapito_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MILANO~20121~20162">MILANO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="cap_recapito_int<?php echo $i; ?>">CAP*</label>
                                        <select name="cap_recapito_int<?php echo $i; ?>" id="cap_recapito_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="20121">20121</option>
                                            <option value="20122">20122</option>
                                            <option value="20123">20123</option>
                                            <option value="20124">20124</option>
                                            <option value="20125">20125</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOneD_int<?php echo $i; ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>D" aria-expanded="true" aria-controls="collapse_int<?php echo $i; ?>D" class="collapsed">
                                    Aggiungi un indirizzo per la centrale di allarme interbancaria
                                </a>
                            </h4>
                            <p>Aggiungi un indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata lorem ipsum, per tutti gli intestatari del conto.</p>
                        </div>
                        <div id="collapse_int<?php echo $i; ?>D" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneD_int<?php echo $i; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-9 form-group">
                                        <label for="qualif_domicilioCAI_int<?php echo $i; ?>">Indirizzo CAI*</label>
                                        <div class="input input-inline input-address">
                                            <select name="qualif_domicilioCAI_int<?php echo $i; ?>" id="qualif_domicilioCAI_int<?php echo $i; ?>" class="textinput form-control IndTipo ignore">
                                                <option value="">seleziona</option>
                                                <option value="Via">Via</option>
                                                <option value="Viale">Viale</option>
                                                <option value="Corso">Corso</option>
                                                <option value="Piazza">Piazza</option>
                                                <option value="Piazzale">Piazzale</option>
                                                <option value="Strada">Strada</option>
                                                <option value="Stretto">Stretto</option>
                                                <option value="Contrada">Contrada</option>
                                                <option value="Vicolo">Vicolo</option>
                                                <option value="Localit&agrave;">Localit&agrave;</option>
                                                <option value="Largo">Largo</option>
                                                <option value="Vico">Vico</option>
                                                <option value="Altro">Altro</option>
                                            </select>
                                            <input type="text" placeholder="Inserisci il nome della via/viale/corso/piazza" name="via_domicilioCAI_int<?php echo $i; ?>" id="via_domicilioCAI_int<?php echo $i; ?>" value="" class="textinput form-control IndNome ignore">
                                            <input type="text" name="ind_domicilioCAI_int<?php echo $i; ?>" id="ind_domicilioCAI_int<?php echo $i; ?>" class="hidden-input">
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="civico_domicilioCAI_int<?php echo $i; ?>">Numero*</label>
                                        <input type="text" placeholder="Indica il numero" name="civico_domicilioCAI_int<?php echo $i; ?>" id="civico_domicilioCAI_int<?php echo $i; ?>" value="" class="textinput form-control">
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="presso_domicilioCAI_int<?php echo $i; ?>">Presso</label>
                                        <input type="text" placeholder="Inserisci Nome Cognome / Nome azienda" name="presso_domicilioCAI_int<?php echo $i; ?>" id="presso_domicilioCAI_int<?php echo $i; ?>" value="" class="textinput form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="provincia_domicilioCAI_int<?php echo $i; ?>">Provincia*</label>
                                        <select name="provincia_domicilioCAI_int<?php echo $i; ?>" id="provincia_domicilioCAI_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MI">MI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="comune_domicilioCAI_int<?php echo $i; ?>">Comune*</label>
                                        <select name="comune_domicilioCAI_int<?php echo $i; ?>" id="comune_domicilioCAI_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MILANO~20121~20162">MILANO</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="cap_domicilioCAI_int<?php echo $i; ?>">CAP*</label>
                                        <select name="cap_domicilioCAI_int<?php echo $i; ?>" id="cap_domicilioCAI_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="20121">20121</option>
                                            <option value="20122">20122</option>
                                            <option value="20123">20123</option>
                                            <option value="20124">20124</option>
                                            <option value="20125">20125</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOneE_int<?php echo $i; ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#!" data-target="#collapse_int<?php echo $i; ?>E" aria-expanded="true" aria-controls="collapse_int<?php echo $i; ?>E" class="collapsed">
                                    Aggiungi altri recapiti
                                </a>
                                <p>Puoi aggiungere un ulteriore numero di telefono o indirizzo di corrispondenza.</p>
                            </h4>
                        </div>
                        <div id="collapse_int<?php echo $i; ?>E" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneE_int<?php echo $i; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 form-group input-tel">
                                        <label for="telefono_tel_int<?php echo $i; ?>" class="labelTooltip">Numero di telefono fisso di casa</label>
                                        <div class="input input-inline">
                                            <input type="tel" maxlength="4" name="prefisso_int<?php echo $i; ?>" id="prefisso_int<?php echo $i; ?>" value="0039" class="textinput form-control numPref ignore" placeholder="0039">
                                            <input type="tel" maxlength="10" name="telefono_int<?php echo $i; ?>" id="telefono_int<?php echo $i; ?>" value="" class="textinput form-control numCell ignore" placeholder="Numero">
                                            <input type="tel" name="tel_int<?php echo $i; ?>" id="tel_int<?php echo $i; ?>" class="hidden-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group input-tel">
                                        <label for="telefono_tel_2_int<?php echo $i; ?>" class="labelTooltip">Numero di telefono fisso dell'ufficio</label>
                                        <div class="input input-inline">
                                            <input type="tel" maxlength="4" name="prefisso_2_int<?php echo $i; ?>" id="prefisso_2_int<?php echo $i; ?>" value="0039" class="textinput form-control numPref ignore" placeholder="0039">
                                            <input type="tel" maxlength="10" name="telefono_2_int<?php echo $i; ?>" id="telefono_2_int<?php echo $i; ?>" value="" class="textinput form-control numCell ignore" placeholder="Numero">
                                            <input type="tel" name="tel_2_int<?php echo $i; ?>" id="tel_2_int<?php echo $i; ?>" class="hidden-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><strong>Altro recapito di corrispondenza</strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="stato_FATCA_int<?php echo $i; ?>">Nazione*</label>
                                        <select name="stato_FATCA_int<?php echo $i; ?>" id="stato_FATCA_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="ITALIA" selected="selected">ITALIA</option>
                                            <option value="ABU DHABI">ABU DHABI</option>
                                            <option value="AFGHANISTAN">AFGHANISTAN</option>
                                            <option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
                                            <option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                            <option value="AJMAN">AJMAN</option>
                                            <option value="ALBANIA">ALBANIA</option>
                                            <option value="ALGERIA">ALGERIA</option>
                                            <option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
                                            <option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
                                            <option value="ANDORRA">ANDORRA</option>
                                            <option value="ANGOLA">ANGOLA</option>
                                            <option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                            <option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-9 form-group">
                                        <label for="via_FATCA_int<?php echo $i; ?>">Indirizzo di corrispondenza*</label>
                                        <div class="input input-inline input-address">
                                            <select name="qualif_FATCA_int<?php echo $i; ?>" id="qualif_FATCA_int<?php echo $i; ?>" class="textinput form-control IndTipo ignore">
                                                <option value="">seleziona</option>
                                                <option value="Via">Via</option>
                                                <option value="Viale">Viale</option>
                                                <option value="Corso">Corso</option>
                                                <option value="Piazza">Piazza</option>
                                                <option value="Piazzale">Piazzale</option>
                                                <option value="Strada">Strada</option>
                                                <option value="Stretto">Stretto</option>
                                                <option value="Contrada">Contrada</option>
                                                <option value="Vicolo">Vicolo</option>
                                                <option value="Localit&agrave;">Localit&agrave;</option>
                                                <option value="Largo">Largo</option>
                                                <option value="Vico">Vico</option>
                                                <option value="Altro">Altro</option>
                                            </select>
                                            <input type="text" placeholder="Inserisci il nome della via/viale/corso/piazza" name="via_FATCA_int<?php echo $i; ?>" id="via_FATCA_int<?php echo $i; ?>" value="" class="textinput form-control IndNome ignore">
                                            <input type="text" name="ind_FATCA_int<?php echo $i; ?>" id="ind_FATCA_int<?php echo $i; ?>" class="hidden-input">
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="civico_FATCA_int<?php echo $i; ?>">Numero*</label>
                                        <input type="text" placeholder="Indica il numero" name="civico_FATCA_int<?php echo $i; ?>" id="civico_FATCA_int<?php echo $i; ?>" value="" class="textinput form-control">
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="provincia_FATCA_int<?php echo $i; ?>">Provincia*</label>
                                        <select name="provincia_FATCA_int<?php echo $i; ?>" id="provincia_FATCA_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MI">MI</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="comune_FATCA_int<?php echo $i; ?>">Comune*</label>
                                        <select name="comune_FATCA_int<?php echo $i; ?>" id="comune_FATCA_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="MILANO~20121~20162">MILANO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="cap_FATCA_int<?php echo $i; ?>">CAP*</label>
                                        <select name="cap_FATCA_int<?php echo $i; ?>" id="cap_FATCA_int<?php echo $i; ?>" class="form-control">
                                            <option value="">seleziona</option>
                                            <option value="20121">20121</option>
                                            <option value="20122">20122</option>
                                            <option value="20123">20123</option>
                                            <option value="20124">20124</option>
                                            <option value="20125">20125</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>4. Sei gi&agrave; un cliente BPM?</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Dichiarando di essere gi&agrave; Cliente del Gruppo BPM non dovrai seguire alcuna procedura di identificazione.
                            <br>Verificheremo i tuoi dati con quelli presenti nei nostri archivi</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="isbpmcliente_int<?php echo $i; ?>" id="isbpmcliente_int<?php echo $i; ?>a" value="si">
                            <label for="isbpmcliente_int<?php echo $i; ?>a">S&Igrave;</label>
                        </div>
                    </div>
                    <div class="col-sm-10 form-group">
                        <div class="radio radio-inline">
                            <input type="radio" name="isbpmcliente_int<?php echo $i; ?>" id="isbpmcliente_int<?php echo $i; ?>b" value="no">
                            <label for="isbpmcliente_int<?php echo $i; ?>b">No</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 form-section-title">
                        <h4>5. Informazioni aggiuntive</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="titolo_studio_int<?php echo $i; ?>">Titolo di studio</label>
                        <select name="titolo_studio_int<?php echo $i; ?>" id="titolo_studio_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
                            <option value="Laurea">Laurea</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Licenza media">Licenza media</option>
                            <option value="Licenza elementare">Licenza elementare</option>
                            <option value="Nessuno">Nessuno</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="come_conosciuto_int<?php echo $i; ?>">Come hai conosciuto Webank</label>
                        <select name="come_conosciuto_int<?php echo $i; ?>" id="come_conosciuto_int<?php echo $i; ?>" class="form-control">
                            <option value="">seleziona</option>
                            <option value="Amici">Amici</option>
                            <option value="Colleghi">Colleghi</option>
                            <option value="Agenzia BPM">Agenzia BPM</option>
                            <option value="Promotore Finanziario">Promotore Finanziario</option>
                            <option value="TV">TV</option>  
                            <option value="Internet">Internet</option>
                            <option value="Stampa">Stampa</option>
                            <option value="Radio">Radio</option>
                            <option value="Motori di ricerca">Motori di ricerca</option>
                            <option value="Altro">Altro</option>
                        </select>
                    </div>
                </div>

    <?php if (!$mono): ?>
    <!-- CHIUSURA ACCORDION -->
            </div>
        </div>
    </div>
    <!-- FINE - CHIUSURA ACCORDION -->
    <?php endif; ?>
<?php endfor; ?>

<!-- CHIUSURA GRUPPO ACCORDION -->
</div>
<!-- FINE - CHIUSURA GRUPPO ACCORDION -->

<textarea style="display:none" id="templateFatca">
    <div class="fatcaBox" data-res="{1}">
        <div class="row fatcaFieldButton">
            <div class="col-md-6 form-group">
                <label for="residenzaFiscale{1}_int{0}" class="labelTooltip"></label>
                <a href="javascript:;" data-toggle="tooltip" title="" id="ttRes{0}_{1}" class="icoinfo" data-original-title="Il regime fiscale applicato sarà quello dell'Italia. Questa informazione è rilevante solo ai fini FATCA. Se il cliente  dichiara Stati Uniti d'America come 'Altro Paese di residenza fiscale', la banca è tenuta, ai sensi della normativa FATCA, a segnalarlo con frequenza annuale all'Agenzia delle Entrate."></a>
                <select name="residenzaFiscale{1}_int{0}" id="residenzaFiscale{1}_int{0}" class="form-control">
                    <option value="">seleziona</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="TIN{1}_int{0}">Codice fiscale estero (TIN)</label>
                <input type="text" name="TIN{1}_int{0}" id="TIN{1}_int{0}" value="" maxlength="20" class="textinput form-control" disabled>
            </div>
        </div>
        <div class="spacer-no-border">&nbsp;</div>
        <div class="row fatcaUploadButton">
            <div class="col-xs-12 form-group">
                <!-- Componente caricamento file TBD -->
                <div class="form-group">
                    <label><a href="#!" class="lbl-file-group">Carica codice fiscale estero (TIN)</a></label>
                    <div class="input-group btn-file-group" style="display:none;">
                        <span class="input-group-btn">
                            <span class="btn btn-file">
                                Seleziona<input type="file" id="fileTIN{1}_int{0}" name="fileTIN{1}_int{0}" accept=".pdf,.jpg,.jpeg,.png">
                            </span>
                        </span>
                        <input type="text" class="form-control btn-file-name" readonly="">
                    </div>
                </div>
                <!-- Fine componente caricamento file TBD -->
            </div>
        </div>
        <div class="spacer-no-border">&nbsp;</div>
        <div class="row fatcaLinkButton">
            <div class="col-md-6 form-group">
                <a href="javascript:;" class="fieldButton remove">
                    <span>Elimina
                        <span class="labelCounterMeno"></span> residenza fiscale</span>
                </a>
            </div>
            <div class="col-md-6 form-group">
                <a href="javascript:;" class="fieldButton add disabled">
                    <span>Aggiungi
                        <span class="labelCounterPiu"></span> residenza fiscale</span>
                </a>
            </div>
        </div>
        <div class="spacer-no-border">&nbsp;</div>
    </div>
</textarea>

<div class="row">
    <div class="col-sm-12">
        <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
    </div>
</div>
<hr>
<!-- Pulsanti -->
<div class="row">
    <div class="col-xs-12">
        <div class="btn-console">
            <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
            <button id="submitStep1" type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
        </div>
    </div>
</div>
<!-- Fine pulsanti -->
</form>

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/statiprovinciecomuni.js?a=415"></script>
<script type="text/javascript" src="/wbresp/js/aol/step1.js"></script>
