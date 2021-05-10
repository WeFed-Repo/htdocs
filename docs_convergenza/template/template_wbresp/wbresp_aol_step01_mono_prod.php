<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>
<div class="row">
	<div class="col-md-12">
		<h2>Inserisci i dati personali</h2>
	</div>
</div>
<div class="row">
    <div class="col-md-12">
        <p>Inserisci i tuoi dati e quelli di tutti i cointestatari</p>
    </div>
</div>
<form id="aolStep1" action="/webankpub/aol/step2.do?BV_UseBVCookie=Yes&fromPageName=1&save=true" method="POST" class="validate">
    <input type="hidden" name="presaVisione" id="presaVisione" value="" />
	<input type="hidden" name="presaVisioneUS" id="presaVisioneUS"
	value="" /> <input type="hidden" name="cod_fiscale_int1"
	id="cod_fiscale_int1"
	value="RSSMRA80A01G388O" /> <input
	type="hidden" name="tel_3_int1" id="tel_3_int1"
	value="00393333333333" />
    <input type="hidden" name="mail_int1" id="mail_int1" value="mario.rossi@tin.it" />
    <input type="hidden" name="nascita_int1" id="nascita_int1" value="01/01/1980" />
    <div class="panel-group accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
    <!-- PRIMO INTESTATARIO -->
        <div class="panel panel-default">
            <div class="panel-heading" role="tab"
                id="headingOne_int1">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" href="#!"
                        data-target="#collapse_int1" aria-expanded="false"
                        aria-controls="collapse_int1" class="collapsed"> Inserisci
                        i tuoi dati personali
                    </a>
                </h4>
            </div>

            <div id="collapse_int1"
                class="panel-collapse collapse in"
                role="tabpanel" aria-labelledby="headingOne_int1"
                aria-expanded="false">
                <div class="panel-body">

                    

                    <div class="row">
                        <div class="col-sm-12 form-section-title">
                            <h4>
                                1. Inserisci le tue informazioni
                                personali
                            </h4>
                        </div>
                    </div>

                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="recapNascita" data-tit="1">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="stato_nascita_int1">Paese di
                                    nascita*</label> <select name="stato_nascita_int1"
                                    id="stato_nascita_int1"
                                    class="form-control indStato" >
                                    <option value="">seleziona</option>
                                    
                                    <option selected
                                        value="ITALIA">ITALIA</option>
                                    
                                    <option 
                                        value="ABU DHABI">ABU DHABI</option>
                                    
                                    <option 
                                        value="AFGHANISTAN">AFGHANISTAN</option>
                                    
                                    <option 
                                        value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
                                    
                                    <option 
                                        value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                    
                                    <option 
                                        value="AJMAN">AJMAN</option>
                                    
                                    <option 
                                        value="ALAND ISOLE">ALAND ISOLE</option>
                                    
                                    <option 
                                        value="ALBANIA">ALBANIA</option>
                                    
                                    <option 
                                        value="ALGERIA">ALGERIA</option>
                                    
                                    <option 
                                        value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                    
                                    <option 
                                        value="ANDORRA">ANDORRA</option>
                                    
                                    <option 
                                        value="ANGOLA">ANGOLA</option>
                                    
                                    <option 
                                        value="ANGUILLA">ANGUILLA</option>
                                    
                                    <option 
                                        value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                    
                                    <option 
                                        value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
                                    
                                    <option 
                                        value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                                    
                                    <option 
                                        value="ARGENTINA">ARGENTINA</option>
                                    
                                    <option 
                                        value="ARMENIA">ARMENIA</option>
                                    
                                    <option 
                                        value="ARMENIA">ARMENIA</option>
                                    
                                    <option 
                                        value="ARUBA">ARUBA</option>
                                    
                                    <option 
                                        value="ASCENSION">ASCENSION</option>
                                    
                                    <option 
                                        value="AUSTRALIA">AUSTRALIA</option>
                                    
                                    <option 
                                        value="AUSTRIA">AUSTRIA</option>
                                    
                                    <option 
                                        value="AZERBAIGIAN">AZERBAIGIAN</option>
                                    
                                    <option 
                                        value="AZERBAIGIAN">AZERBAIGIAN</option>
                                    
                                    <option 
                                        value="AZZORRE ISOLE">AZZORRE ISOLE</option>
                                    
                                    <option 
                                        value="BAHAMA">BAHAMA</option>
                                    
                                    <option 
                                        value="BAHREIN">BAHREIN</option>
                                    
                                    <option 
                                        value="BANGLADESH">BANGLADESH</option>
                                    
                                    <option 
                                        value="BARBADOS">BARBADOS</option>
                                    
                                    <option 
                                        value="BELGIO">BELGIO</option>
                                    
                                    <option 
                                        value="BELIZE">BELIZE</option>
                                    
                                    <option 
                                        value="BENIN">BENIN</option>
                                    
                                    <option 
                                        value="BERMUDA">BERMUDA</option>
                                    
                                    <option 
                                        value="BHUTAN">BHUTAN</option>
                                    
                                    <option 
                                        value="BIELORUSSIA">BIELORUSSIA</option>
                                    
                                    <option 
                                        value="BOLIVIA">BOLIVIA</option>
                                    
                                    <option 
                                        value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
                                    
                                    <option 
                                        value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
                                    
                                    <option 
                                        value="BOTSWANA">BOTSWANA</option>
                                    
                                    <option 
                                        value="BRASILE">BRASILE</option>
                                    
                                    <option 
                                        value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                    
                                    <option 
                                        value="BULGARIA">BULGARIA</option>
                                    
                                    <option 
                                        value="BURKINA FASO">BURKINA FASO</option>
                                    
                                    <option 
                                        value="BURUNDI">BURUNDI</option>
                                    
                                    <option 
                                        value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
                                    
                                    <option 
                                        value="CAMERUN">CAMERUN</option>
                                    
                                    <option 
                                        value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
                                    
                                    <option 
                                        value="CANADA">CANADA</option>
                                    
                                    <option 
                                        value="CAYMAN ISOLE">CAYMAN ISOLE</option>
                                    
                                    <option 
                                        value="CECOSLOVACCHIA">CECOSLOVACCHIA</option>
                                    
                                    <option 
                                        value="CHAFARINAS">CHAFARINAS</option>
                                    
                                    <option 
                                        value="CIAD">CIAD</option>
                                    
                                    <option 
                                        value="CILE">CILE</option>
                                    
                                    <option 
                                        value="CIPRO">CIPRO</option>
                                    
                                    <option 
                                        value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
                                    
                                    <option 
                                        value="CLIPPERTON">CLIPPERTON</option>
                                    
                                    <option 
                                        value="COLOMBIA">COLOMBIA</option>
                                    
                                    <option 
                                        value="COMORE">COMORE</option>
                                    
                                    <option 
                                        value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
                                    
                                    <option 
                                        value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
                                    
                                    <option 
                                        value="COREA DEL NORD">COREA DEL NORD</option>
                                    
                                    <option 
                                        value="COREA DEL SUD">COREA DEL SUD</option>
                                    
                                    <option 
                                        value="COSTA D'AVORIO">COSTA D'AVORIO</option>
                                    
                                    <option 
                                        value="COSTARICA">COSTARICA</option>
                                    
                                    <option 
                                        value="CROAZIA">CROAZIA</option>
                                    
                                    <option 
                                        value="CUBA">CUBA</option>
                                    
                                    <option 
                                        value="CURACAO">CURACAO</option>
                                    
                                    <option 
                                        value="DANIMARCA">DANIMARCA</option>
                                    
                                    <option 
                                        value="DOMINICA">DOMINICA</option>
                                    
                                    <option 
                                        value="DUBAI">DUBAI</option>
                                    
                                    <option 
                                        value="ECUADOR">ECUADOR</option>
                                    
                                    <option 
                                        value="EGITTO">EGITTO</option>
                                    
                                    <option 
                                        value="EL SALVADOR">EL SALVADOR</option>
                                    
                                    <option 
                                        value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
                                    
                                    <option 
                                        value="ERITREA">ERITREA</option>
                                    
                                    <option 
                                        value="ESTONIA">ESTONIA</option>
                                    
                                    <option 
                                        value="ETIOPIA">ETIOPIA</option>
                                    
                                    <option 
                                        value="FALKLAND">FALKLAND</option>
                                    
                                    <option 
                                        value="FILIPPINE">FILIPPINE</option>
                                    
                                    <option 
                                        value="FINLANDIA">FINLANDIA</option>
                                    
                                    <option 
                                        value="FRANCIA">FRANCIA</option>
                                    
                                    <option 
                                        value="FUIJAYRAH">FUIJAYRAH</option>
                                    
                                    <option 
                                        value="GABON">GABON</option>
                                    
                                    <option 
                                        value="GAMBIA">GAMBIA</option>
                                    
                                    <option 
                                        value="GAZA (TERRITORIO DI)">GAZA (TERRITORIO DI)</option>
                                    
                                    <option 
                                        value="GEORGIA">GEORGIA</option>
                                    
                                    <option 
                                        value="GEORGIA">GEORGIA</option>
                                    
                                    <option 
                                        value="GHANA">GHANA</option>
                                    
                                    <option 
                                        value="GIAMAICA">GIAMAICA</option>
                                    
                                    <option 
                                        value="GIAPPONE">GIAPPONE</option>
                                    
                                    <option 
                                        value="GIBILTERRA">GIBILTERRA</option>
                                    
                                    <option 
                                        value="GIBUTI">GIBUTI</option>
                                    
                                    <option 
                                        value="GIORDANIA">GIORDANIA</option>
                                    
                                    <option 
                                        value="GOUGH">GOUGH</option>
                                    
                                    <option 
                                        value="GRECIA">GRECIA</option>
                                    
                                    <option 
                                        value="GRENADA">GRENADA</option>
                                    
                                    <option 
                                        value="GROENLANDIA">GROENLANDIA</option>
                                    
                                    <option 
                                        value="GUADALUPA">GUADALUPA</option>
                                    
                                    <option 
                                        value="GUAM">GUAM</option>
                                    
                                    <option 
                                        value="GUATEMALA">GUATEMALA</option>
                                    
                                    <option 
                                        value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
                                    
                                    <option 
                                        value="GUERNSEY C.I.">GUERNSEY C.I.</option>
                                    
                                    <option 
                                        value="GUINEA">GUINEA</option>
                                    
                                    <option 
                                        value="GUINEA BISSAU">GUINEA BISSAU</option>
                                    
                                    <option 
                                        value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
                                    
                                    <option 
                                        value="GUYANA">GUYANA</option>
                                    
                                    <option 
                                        value="HAITI">HAITI</option>
                                    
                                    <option 
                                        value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
                                    
                                    <option 
                                        value="HONDURAS">HONDURAS</option>
                                    
                                    <option 
                                        value="HONG KONG">HONG KONG</option>
                                    
                                    <option 
                                        value="INDIA">INDIA</option>
                                    
                                    <option 
                                        value="INDONESIA">INDONESIA</option>
                                    
                                    <option 
                                        value="IRAN">IRAN</option>
                                    
                                    <option 
                                        value="IRAQ">IRAQ</option>
                                    
                                    <option 
                                        value="IRLANDA">IRLANDA</option>
                                    
                                    <option 
                                        value="ISLANDA">ISLANDA</option>
                                    
                                    <option 
                                        value="ISOLA DI MAN">ISOLA DI MAN</option>
                                    
                                    <option 
                                        value="ISOLE CANARIE">ISOLE CANARIE</option>
                                    
                                    <option 
                                        value="ISOLE CAROLINE">ISOLE CAROLINE</option>
                                    
                                    <option 
                                        value="ISOLE CHAGOS">ISOLE CHAGOS</option>
                                    
                                    <option 
                                        value="ISOLE COOK">ISOLE COOK</option>
                                    
                                    <option 
                                        value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
                                    
                                    <option 
                                        value="ISOLE FAEROER">ISOLE FAEROER</option>
                                    
                                    <option 
                                        value="ISOLE FIGI">ISOLE FIGI</option>
                                    
                                    <option 
                                        value="ISOLE MARSHALL">ISOLE MARSHALL</option>
                                    
                                    <option 
                                        value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
                                    
                                    <option 
                                        value="ISOLE WAKE">ISOLE WAKE</option>
                                    
                                    <option 
                                        value="ISRAELE">ISRAELE</option>
                                    
                                    <option 
                                        value="JERSEY">JERSEY</option>
                                    
                                    <option 
                                        value="JUGOSLAVIA">JUGOSLAVIA</option>
                                    
                                    <option 
                                        value="KAZAKISTAN">KAZAKISTAN</option>
                                    
                                    <option 
                                        value="KAZAKISTAN">KAZAKISTAN</option>
                                    
                                    <option 
                                        value="KENYA">KENYA</option>
                                    
                                    <option 
                                        value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                                    
                                    <option 
                                        value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                                    
                                    <option 
                                        value="KIRIBATI">KIRIBATI</option>
                                    
                                    <option 
                                        value="KUWAIT">KUWAIT</option>
                                    
                                    <option 
                                        value="LAOS">LAOS</option>
                                    
                                    <option 
                                        value="LESOTHO">LESOTHO</option>
                                    
                                    <option 
                                        value="LETTONIA">LETTONIA</option>
                                    
                                    <option 
                                        value="LIBANO">LIBANO</option>
                                    
                                    <option 
                                        value="LIBERIA">LIBERIA</option>
                                    
                                    <option 
                                        value="LIBIA">LIBIA</option>
                                    
                                    <option 
                                        value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                    
                                    <option 
                                        value="LITUANIA">LITUANIA</option>
                                    
                                    <option 
                                        value="LUSSEMBURGO">LUSSEMBURGO</option>
                                    
                                    <option 
                                        value="MACAO">MACAO</option>
                                    
                                    <option 
                                        value="MACEDONIA">MACEDONIA</option>
                                    
                                    <option 
                                        value="MADAGASCAR">MADAGASCAR</option>
                                    
                                    <option 
                                        value="MADEIRA">MADEIRA</option>
                                    
                                    <option 
                                        value="MALAWI">MALAWI</option>
                                    
                                    <option 
                                        value="MALAYSIA">MALAYSIA</option>
                                    
                                    <option 
                                        value="MALAYSIA">MALAYSIA</option>
                                    
                                    <option 
                                        value="MALDIVE">MALDIVE</option>
                                    
                                    <option 
                                        value="MALI">MALI</option>
                                    
                                    <option 
                                        value="MALTA">MALTA</option>
                                    
                                    <option 
                                        value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
                                    
                                    <option 
                                        value="MAROCCO">MAROCCO</option>
                                    
                                    <option 
                                        value="MARTINICA">MARTINICA</option>
                                    
                                    <option 
                                        value="MAURITANIA">MAURITANIA</option>
                                    
                                    <option 
                                        value="MAURIZIO">MAURIZIO</option>
                                    
                                    <option 
                                        value="MAYOTTE">MAYOTTE</option>
                                    
                                    <option 
                                        value="MELILLA">MELILLA</option>
                                    
                                    <option 
                                        value="MESSICO">MESSICO</option>
                                    
                                    <option 
                                        value="MICRONESIA">MICRONESIA</option>
                                    
                                    <option 
                                        value="MIDWAY ISOLE">MIDWAY ISOLE</option>
                                    
                                    <option 
                                        value="MOLDAVIA">MOLDAVIA</option>
                                    
                                    <option 
                                        value="MONACO">MONACO</option>
                                    
                                    <option 
                                        value="MONGOLIA">MONGOLIA</option>
                                    
                                    <option 
                                        value="MONTENEGRO">MONTENEGRO</option>
                                    
                                    <option 
                                        value="MONTSERRAT">MONTSERRAT</option>
                                    
                                    <option 
                                        value="MOZAMBICO">MOZAMBICO</option>
                                    
                                    <option 
                                        value="MYANMAR">MYANMAR</option>
                                    
                                    <option 
                                        value="NAURU">NAURU</option>
                                    
                                    <option 
                                        value="NEPAL">NEPAL</option>
                                    
                                    <option 
                                        value="NICARAGUA">NICARAGUA</option>
                                    
                                    <option 
                                        value="NIGER">NIGER</option>
                                    
                                    <option 
                                        value="NIGERIA">NIGERIA</option>
                                    
                                    <option 
                                        value="NIUE - SAVAGE">NIUE - SAVAGE</option>
                                    
                                    <option 
                                        value="NORFOLK ISOLE">NORFOLK ISOLE</option>
                                    
                                    <option 
                                        value="NORVEGIA">NORVEGIA</option>
                                    
                                    <option 
                                        value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
                                    
                                    <option 
                                        value="NUOVA ZELANDA">NUOVA ZELANDA</option>
                                    
                                    <option 
                                        value="NUOVE EBRIDI">NUOVE EBRIDI</option>
                                    
                                    <option 
                                        value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
                                    
                                    <option 
                                        value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
                                    
                                    <option 
                                        value="OMAN">OMAN</option>
                                    
                                    <option 
                                        value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
                                    
                                    <option 
                                        value="PAKISTAN">PAKISTAN</option>
                                    
                                    <option 
                                        value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
                                    
                                    <option 
                                        value="PANAMA">PANAMA</option>
                                    
                                    <option 
                                        value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
                                    
                                    <option 
                                        value="PARAGUAY">PARAGUAY</option>
                                    
                                    <option 
                                        value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
                                    
                                    <option 
                                        value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
                                    
                                    <option 
                                        value="PERU'">PERU'</option>
                                    
                                    <option 
                                        value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
                                    
                                    <option 
                                        value="POLONIA">POLONIA</option>
                                    
                                    <option 
                                        value="PORTOGALLO">PORTOGALLO</option>
                                    
                                    <option 
                                        value="PORTORICO">PORTORICO</option>
                                    
                                    <option 
                                        value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
                                    
                                    <option 
                                        value="QATAR">QATAR</option>
                                    
                                    <option 
                                        value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
                                    
                                    <option 
                                        value="REGNO UNITO">REGNO UNITO</option>
                                    
                                    <option 
                                        value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
                                    
                                    <option 
                                        value="REPUBBLICA CECA">REPUBBLICA CECA</option>
                                    
                                    <option 
                                        value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
                                    
                                    <option 
                                        value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
                                    
                                    <option 
                                        value="REPUBBLICA DEMOCRATICA DI GERMANIA">REPUBBLICA DEMOCRATICA DI GERMANIA</option>
                                    
                                    <option 
                                        value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
                                    
                                    <option 
                                        value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
                                    
                                    <option 
                                        value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
                                    
                                    <option 
                                        value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
                                    
                                    <option 
                                        value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
                                    
                                    <option 
                                        value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
                                    
                                    <option 
                                        value="REUNION">REUNION</option>
                                    
                                    <option 
                                        value="ROMANIA">ROMANIA</option>
                                    
                                    <option 
                                        value="RUANDA">RUANDA</option>
                                    
                                    <option 
                                        value="RUSSIA">RUSSIA</option>
                                    
                                    <option 
                                        value="S.ELENA">S.ELENA</option>
                                    
                                    <option 
                                        value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
                                    
                                    <option 
                                        value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                                    
                                    <option 
                                        value="SAINT LUCIA">SAINT LUCIA</option>
                                    
                                    <option 
                                        value="SALOMONE">SALOMONE</option>
                                    
                                    <option 
                                        value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
                                    
                                    <option 
                                        value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
                                    
                                    <option 
                                        value="SEICELLE">SEICELLE</option>
                                    
                                    <option 
                                        value="SENEGAL">SENEGAL</option>
                                    
                                    <option 
                                        value="SERBIA">SERBIA</option>
                                    
                                    <option 
                                        value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
                                    
                                    <option 
                                        value="SHARJAH">SHARJAH</option>
                                    
                                    <option 
                                        value="SIERRA LEONE">SIERRA LEONE</option>
                                    
                                    <option 
                                        value="SINGAPORE">SINGAPORE</option>
                                    
                                    <option 
                                        value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
                                    
                                    <option 
                                        value="SIRIA">SIRIA</option>
                                    
                                    <option 
                                        value="SLOVACCHIA">SLOVACCHIA</option>
                                    
                                    <option 
                                        value="SLOVENIA">SLOVENIA</option>
                                    
                                    <option 
                                        value="SOMALIA">SOMALIA</option>
                                    
                                    <option 
                                        value="SOMALIA FRANCESE">SOMALIA FRANCESE</option>
                                    
                                    <option 
                                        value="SPAGNA">SPAGNA</option>
                                    
                                    <option 
                                        value="SRI LANKA">SRI LANKA</option>
                                    
                                    <option 
                                        value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
                                    
                                    <option 
                                        value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
                                    
                                    <option 
                                        value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
                                    
                                    <option 
                                        value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
                                    
                                    <option 
                                        value="SUDAN">SUDAN</option>
                                    
                                    <option 
                                        value="SURINAME">SURINAME</option>
                                    
                                    <option 
                                        value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
                                    
                                    <option 
                                        value="SVEZIA">SVEZIA</option>
                                    
                                    <option 
                                        value="SVIZZERA">SVIZZERA</option>
                                    
                                    <option 
                                        value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
                                    
                                    <option 
                                        value="TAGIKISTAN">TAGIKISTAN</option>
                                    
                                    <option 
                                        value="TAGIKISTAN">TAGIKISTAN</option>
                                    
                                    <option 
                                        value="TANGANICA">TANGANICA</option>
                                    
                                    <option 
                                        value="TANZANIA">TANZANIA</option>
                                    
                                    <option 
                                        value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
                                    
                                    <option 
                                        value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
                                    
                                    <option 
                                        value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
                                    
                                    <option 
                                        value="THAILANDIA">THAILANDIA</option>
                                    
                                    <option 
                                        value="TIMOR">TIMOR</option>
                                    
                                    <option 
                                        value="TOGO">TOGO</option>
                                    
                                    <option 
                                        value="TOKELAU">TOKELAU</option>
                                    
                                    <option 
                                        value="TONGA">TONGA</option>
                                    
                                    <option 
                                        value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
                                    
                                    <option 
                                        value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
                                    
                                    <option 
                                        value="TUNISIA">TUNISIA</option>
                                    
                                    <option 
                                        value="TURCHIA">TURCHIA</option>
                                    
                                    <option 
                                        value="TURKMENISTAN">TURKMENISTAN</option>
                                    
                                    <option 
                                        value="TURKMENISTAN">TURKMENISTAN</option>
                                    
                                    <option 
                                        value="TURKS E CAICOS">TURKS E CAICOS</option>
                                    
                                    <option 
                                        value="TUVALU">TUVALU</option>
                                    
                                    <option 
                                        value="UCRAINA">UCRAINA</option>
                                    
                                    <option 
                                        value="UGANDA">UGANDA</option>
                                    
                                    <option 
                                        value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
                                    
                                    <option 
                                        value="UNGHERIA">UNGHERIA</option>
                                    
                                    <option 
                                        value="URSS">URSS</option>
                                    
                                    <option 
                                        value="URUGUAY">URUGUAY</option>
                                    
                                    <option 
                                        value="UZBEKISTAN">UZBEKISTAN</option>
                                    
                                    <option 
                                        value="UZBEKISTAN">UZBEKISTAN</option>
                                    
                                    <option 
                                        value="VANUATU">VANUATU</option>
                                    
                                    <option 
                                        value="VENEZUELA">VENEZUELA</option>
                                    
                                    <option 
                                        value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
                                    
                                    <option 
                                        value="VIETNAM">VIETNAM</option>
                                    
                                    <option 
                                        value="VIETNAM DEL NORD">VIETNAM DEL NORD</option>
                                    
                                    <option 
                                        value="VIETNAM DEL SUD">VIETNAM DEL SUD</option>
                                    
                                    <option 
                                        value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
                                    
                                    <option 
                                        value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
                                    
                                    <option 
                                        value="YEMEN">YEMEN</option>
                                    
                                    <option 
                                        value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>
                                    
                                    <option 
                                        value="ZAMBIA">ZAMBIA</option>
                                    
                                    <option 
                                        value="ZIMBABWE">ZIMBABWE</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cittadinanza_int1">Cittadinanza*</label>
                                <select name="cittadinanza_int1"
                                    id="cittadinanza_int1" class="form-control"
                                    >
                                    <option value="">seleziona</option>
                                    
                                    <option selected
                                        value="ITALIA">ITALIA</option>
                                    
                                    <option 
                                        value="ABU DHABI">ABU DHABI</option>
                                    
                                    <option 
                                        value="AFGHANISTAN">AFGHANISTAN</option>
                                    
                                    <option 
                                        value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
                                    
                                    <option 
                                        value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                    
                                    <option 
                                        value="AJMAN">AJMAN</option>
                                    
                                    <option 
                                        value="ALAND ISOLE">ALAND ISOLE</option>
                                    
                                    <option 
                                        value="ALBANIA">ALBANIA</option>
                                    
                                    <option 
                                        value="ALGERIA">ALGERIA</option>
                                    
                                    <option 
                                        value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                    
                                    <option 
                                        value="ANDORRA">ANDORRA</option>
                                    
                                    <option 
                                        value="ANGOLA">ANGOLA</option>
                                    
                                    <option 
                                        value="ANGUILLA">ANGUILLA</option>
                                    
                                    <option 
                                        value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                    
                                    <option 
                                        value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                                    
                                    <option 
                                        value="ARGENTINA">ARGENTINA</option>
                                    
                                    <option 
                                        value="ARMENIA">ARMENIA</option>
                                    
                                    <option 
                                        value="ARUBA">ARUBA</option>
                                    
                                    <option 
                                        value="ASCENSION">ASCENSION</option>
                                    
                                    <option 
                                        value="AUSTRALIA">AUSTRALIA</option>
                                    
                                    <option 
                                        value="AUSTRIA">AUSTRIA</option>
                                    
                                    <option 
                                        value="AZERBAIGIAN">AZERBAIGIAN</option>
                                    
                                    <option 
                                        value="AZZORRE ISOLE">AZZORRE ISOLE</option>
                                    
                                    <option 
                                        value="BAHAMA">BAHAMA</option>
                                    
                                    <option 
                                        value="BAHREIN">BAHREIN</option>
                                    
                                    <option 
                                        value="BANGLADESH">BANGLADESH</option>
                                    
                                    <option 
                                        value="BARBADOS">BARBADOS</option>
                                    
                                    <option 
                                        value="BELGIO">BELGIO</option>
                                    
                                    <option 
                                        value="BELIZE">BELIZE</option>
                                    
                                    <option 
                                        value="BENIN">BENIN</option>
                                    
                                    <option 
                                        value="BERMUDA">BERMUDA</option>
                                    
                                    <option 
                                        value="BHUTAN">BHUTAN</option>
                                    
                                    <option 
                                        value="BIELORUSSIA">BIELORUSSIA</option>
                                    
                                    <option 
                                        value="BOLIVIA">BOLIVIA</option>
                                    
                                    <option 
                                        value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
                                    
                                    <option 
                                        value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
                                    
                                    <option 
                                        value="BOTSWANA">BOTSWANA</option>
                                    
                                    <option 
                                        value="BRASILE">BRASILE</option>
                                    
                                    <option 
                                        value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                    
                                    <option 
                                        value="BULGARIA">BULGARIA</option>
                                    
                                    <option 
                                        value="BURKINA FASO">BURKINA FASO</option>
                                    
                                    <option 
                                        value="BURUNDI">BURUNDI</option>
                                    
                                    <option 
                                        value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
                                    
                                    <option 
                                        value="CAMERUN">CAMERUN</option>
                                    
                                    <option 
                                        value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
                                    
                                    <option 
                                        value="CANADA">CANADA</option>
                                    
                                    <option 
                                        value="CAYMAN ISOLE">CAYMAN ISOLE</option>
                                    
                                    <option 
                                        value="CHAFARINAS">CHAFARINAS</option>
                                    
                                    <option 
                                        value="CIAD">CIAD</option>
                                    
                                    <option 
                                        value="CILE">CILE</option>
                                    
                                    <option 
                                        value="CIPRO">CIPRO</option>
                                    
                                    <option 
                                        value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
                                    
                                    <option 
                                        value="CLIPPERTON">CLIPPERTON</option>
                                    
                                    <option 
                                        value="COLOMBIA">COLOMBIA</option>
                                    
                                    <option 
                                        value="COMORE">COMORE</option>
                                    
                                    <option 
                                        value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
                                    
                                    <option 
                                        value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
                                    
                                    <option 
                                        value="COREA DEL NORD">COREA DEL NORD</option>
                                    
                                    <option 
                                        value="COREA DEL SUD">COREA DEL SUD</option>
                                    
                                    <option 
                                        value="COSTA D'AVORIO">COSTA D'AVORIO</option>
                                    
                                    <option 
                                        value="COSTARICA">COSTARICA</option>
                                    
                                    <option 
                                        value="CROAZIA">CROAZIA</option>
                                    
                                    <option 
                                        value="CUBA">CUBA</option>
                                    
                                    <option 
                                        value="CURACAO">CURACAO</option>
                                    
                                    <option 
                                        value="DANIMARCA">DANIMARCA</option>
                                    
                                    <option 
                                        value="DOMINICA">DOMINICA</option>
                                    
                                    <option 
                                        value="DUBAI">DUBAI</option>
                                    
                                    <option 
                                        value="ECUADOR">ECUADOR</option>
                                    
                                    <option 
                                        value="EGITTO">EGITTO</option>
                                    
                                    <option 
                                        value="EL SALVADOR">EL SALVADOR</option>
                                    
                                    <option 
                                        value="ERITREA">ERITREA</option>
                                    
                                    <option 
                                        value="ESTONIA">ESTONIA</option>
                                    
                                    <option 
                                        value="ETIOPIA">ETIOPIA</option>
                                    
                                    <option 
                                        value="FALKLAND">FALKLAND</option>
                                    
                                    <option 
                                        value="FILIPPINE">FILIPPINE</option>
                                    
                                    <option 
                                        value="FINLANDIA">FINLANDIA</option>
                                    
                                    <option 
                                        value="FRANCIA">FRANCIA</option>
                                    
                                    <option 
                                        value="FUIJAYRAH">FUIJAYRAH</option>
                                    
                                    <option 
                                        value="GABON">GABON</option>
                                    
                                    <option 
                                        value="GAMBIA">GAMBIA</option>
                                    
                                    <option 
                                        value="GEORGIA">GEORGIA</option>
                                    
                                    <option 
                                        value="GHANA">GHANA</option>
                                    
                                    <option 
                                        value="GIAMAICA">GIAMAICA</option>
                                    
                                    <option 
                                        value="GIAPPONE">GIAPPONE</option>
                                    
                                    <option 
                                        value="GIBILTERRA">GIBILTERRA</option>
                                    
                                    <option 
                                        value="GIBUTI">GIBUTI</option>
                                    
                                    <option 
                                        value="GIORDANIA">GIORDANIA</option>
                                    
                                    <option 
                                        value="GOUGH">GOUGH</option>
                                    
                                    <option 
                                        value="GRECIA">GRECIA</option>
                                    
                                    <option 
                                        value="GRENADA">GRENADA</option>
                                    
                                    <option 
                                        value="GROENLANDIA">GROENLANDIA</option>
                                    
                                    <option 
                                        value="GUADALUPA">GUADALUPA</option>
                                    
                                    <option 
                                        value="GUAM">GUAM</option>
                                    
                                    <option 
                                        value="GUATEMALA">GUATEMALA</option>
                                    
                                    <option 
                                        value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
                                    
                                    <option 
                                        value="GUERNSEY C.I.">GUERNSEY C.I.</option>
                                    
                                    <option 
                                        value="GUINEA">GUINEA</option>
                                    
                                    <option 
                                        value="GUINEA BISSAU">GUINEA BISSAU</option>
                                    
                                    <option 
                                        value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
                                    
                                    <option 
                                        value="GUYANA">GUYANA</option>
                                    
                                    <option 
                                        value="HAITI">HAITI</option>
                                    
                                    <option 
                                        value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
                                    
                                    <option 
                                        value="HONDURAS">HONDURAS</option>
                                    
                                    <option 
                                        value="HONG KONG">HONG KONG</option>
                                    
                                    <option 
                                        value="INDIA">INDIA</option>
                                    
                                    <option 
                                        value="INDONESIA">INDONESIA</option>
                                    
                                    <option 
                                        value="IRAN">IRAN</option>
                                    
                                    <option 
                                        value="IRAQ">IRAQ</option>
                                    
                                    <option 
                                        value="IRLANDA">IRLANDA</option>
                                    
                                    <option 
                                        value="ISLANDA">ISLANDA</option>
                                    
                                    <option 
                                        value="ISOLA DI MAN">ISOLA DI MAN</option>
                                    
                                    <option 
                                        value="ISOLE CANARIE">ISOLE CANARIE</option>
                                    
                                    <option 
                                        value="ISOLE CAROLINE">ISOLE CAROLINE</option>
                                    
                                    <option 
                                        value="ISOLE CHAGOS">ISOLE CHAGOS</option>
                                    
                                    <option 
                                        value="ISOLE COOK">ISOLE COOK</option>
                                    
                                    <option 
                                        value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
                                    
                                    <option 
                                        value="ISOLE FAEROER">ISOLE FAEROER</option>
                                    
                                    <option 
                                        value="ISOLE FIGI">ISOLE FIGI</option>
                                    
                                    <option 
                                        value="ISOLE MARSHALL">ISOLE MARSHALL</option>
                                    
                                    <option 
                                        value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
                                    
                                    <option 
                                        value="ISOLE WAKE">ISOLE WAKE</option>
                                    
                                    <option 
                                        value="ISRAELE">ISRAELE</option>
                                    
                                    <option 
                                        value="JERSEY">JERSEY</option>
                                    
                                    <option 
                                        value="KAZAKISTAN">KAZAKISTAN</option>
                                    
                                    <option 
                                        value="KENYA">KENYA</option>
                                    
                                    <option 
                                        value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                                    
                                    <option 
                                        value="KIRIBATI">KIRIBATI</option>
                                    
                                    <option 
                                        value="KUWAIT">KUWAIT</option>
                                    
                                    <option 
                                        value="LAOS">LAOS</option>
                                    
                                    <option 
                                        value="LESOTHO">LESOTHO</option>
                                    
                                    <option 
                                        value="LETTONIA">LETTONIA</option>
                                    
                                    <option 
                                        value="LIBANO">LIBANO</option>
                                    
                                    <option 
                                        value="LIBERIA">LIBERIA</option>
                                    
                                    <option 
                                        value="LIBIA">LIBIA</option>
                                    
                                    <option 
                                        value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                    
                                    <option 
                                        value="LITUANIA">LITUANIA</option>
                                    
                                    <option 
                                        value="LUSSEMBURGO">LUSSEMBURGO</option>
                                    
                                    <option 
                                        value="MACAO">MACAO</option>
                                    
                                    <option 
                                        value="MACEDONIA">MACEDONIA</option>
                                    
                                    <option 
                                        value="MADAGASCAR">MADAGASCAR</option>
                                    
                                    <option 
                                        value="MADEIRA">MADEIRA</option>
                                    
                                    <option 
                                        value="MALAWI">MALAWI</option>
                                    
                                    <option 
                                        value="MALAYSIA">MALAYSIA</option>
                                    
                                    <option 
                                        value="MALDIVE">MALDIVE</option>
                                    
                                    <option 
                                        value="MALI">MALI</option>
                                    
                                    <option 
                                        value="MALTA">MALTA</option>
                                    
                                    <option 
                                        value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
                                    
                                    <option 
                                        value="MAROCCO">MAROCCO</option>
                                    
                                    <option 
                                        value="MARTINICA">MARTINICA</option>
                                    
                                    <option 
                                        value="MAURITANIA">MAURITANIA</option>
                                    
                                    <option 
                                        value="MAURIZIO">MAURIZIO</option>
                                    
                                    <option 
                                        value="MAYOTTE">MAYOTTE</option>
                                    
                                    <option 
                                        value="MELILLA">MELILLA</option>
                                    
                                    <option 
                                        value="MESSICO">MESSICO</option>
                                    
                                    <option 
                                        value="MICRONESIA">MICRONESIA</option>
                                    
                                    <option 
                                        value="MIDWAY ISOLE">MIDWAY ISOLE</option>
                                    
                                    <option 
                                        value="MOLDAVIA">MOLDAVIA</option>
                                    
                                    <option 
                                        value="MONACO">MONACO</option>
                                    
                                    <option 
                                        value="MONGOLIA">MONGOLIA</option>
                                    
                                    <option 
                                        value="MONTENEGRO">MONTENEGRO</option>
                                    
                                    <option 
                                        value="MONTSERRAT">MONTSERRAT</option>
                                    
                                    <option 
                                        value="MOZAMBICO">MOZAMBICO</option>
                                    
                                    <option 
                                        value="MYANMAR">MYANMAR</option>
                                    
                                    <option 
                                        value="NAURU">NAURU</option>
                                    
                                    <option 
                                        value="NEPAL">NEPAL</option>
                                    
                                    <option 
                                        value="NICARAGUA">NICARAGUA</option>
                                    
                                    <option 
                                        value="NIGER">NIGER</option>
                                    
                                    <option 
                                        value="NIGERIA">NIGERIA</option>
                                    
                                    <option 
                                        value="NIUE - SAVAGE">NIUE - SAVAGE</option>
                                    
                                    <option 
                                        value="NORFOLK ISOLE">NORFOLK ISOLE</option>
                                    
                                    <option 
                                        value="NORVEGIA">NORVEGIA</option>
                                    
                                    <option 
                                        value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
                                    
                                    <option 
                                        value="NUOVA ZELANDA">NUOVA ZELANDA</option>
                                    
                                    <option 
                                        value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
                                    
                                    <option 
                                        value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
                                    
                                    <option 
                                        value="OMAN">OMAN</option>
                                    
                                    <option 
                                        value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
                                    
                                    <option 
                                        value="PAKISTAN">PAKISTAN</option>
                                    
                                    <option 
                                        value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
                                    
                                    <option 
                                        value="PANAMA">PANAMA</option>
                                    
                                    <option 
                                        value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
                                    
                                    <option 
                                        value="PARAGUAY">PARAGUAY</option>
                                    
                                    <option 
                                        value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
                                    
                                    <option 
                                        value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
                                    
                                    <option 
                                        value="PERU'">PERU'</option>
                                    
                                    <option 
                                        value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
                                    
                                    <option 
                                        value="POLONIA">POLONIA</option>
                                    
                                    <option 
                                        value="PORTOGALLO">PORTOGALLO</option>
                                    
                                    <option 
                                        value="PORTORICO">PORTORICO</option>
                                    
                                    <option 
                                        value="QATAR">QATAR</option>
                                    
                                    <option 
                                        value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
                                    
                                    <option 
                                        value="REGNO UNITO">REGNO UNITO</option>
                                    
                                    <option 
                                        value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
                                    
                                    <option 
                                        value="REPUBBLICA CECA">REPUBBLICA CECA</option>
                                    
                                    <option 
                                        value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
                                    
                                    <option 
                                        value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
                                    
                                    <option 
                                        value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
                                    
                                    <option 
                                        value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
                                    
                                    <option 
                                        value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
                                    
                                    <option 
                                        value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
                                    
                                    <option 
                                        value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
                                    
                                    <option 
                                        value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
                                    
                                    <option 
                                        value="REUNION">REUNION</option>
                                    
                                    <option 
                                        value="ROMANIA">ROMANIA</option>
                                    
                                    <option 
                                        value="RUANDA">RUANDA</option>
                                    
                                    <option 
                                        value="RUSSIA">RUSSIA</option>
                                    
                                    <option 
                                        value="S.ELENA">S.ELENA</option>
                                    
                                    <option 
                                        value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
                                    
                                    <option 
                                        value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                                    
                                    <option 
                                        value="SAINT LUCIA">SAINT LUCIA</option>
                                    
                                    <option 
                                        value="SALOMONE">SALOMONE</option>
                                    
                                    <option 
                                        value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
                                    
                                    <option 
                                        value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
                                    
                                    <option 
                                        value="SEICELLE">SEICELLE</option>
                                    
                                    <option 
                                        value="SENEGAL">SENEGAL</option>
                                    
                                    <option 
                                        value="SERBIA">SERBIA</option>
                                    
                                    <option 
                                        value="SHARJAH">SHARJAH</option>
                                    
                                    <option 
                                        value="SIERRA LEONE">SIERRA LEONE</option>
                                    
                                    <option 
                                        value="SINGAPORE">SINGAPORE</option>
                                    
                                    <option 
                                        value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
                                    
                                    <option 
                                        value="SIRIA">SIRIA</option>
                                    
                                    <option 
                                        value="SLOVACCHIA">SLOVACCHIA</option>
                                    
                                    <option 
                                        value="SLOVENIA">SLOVENIA</option>
                                    
                                    <option 
                                        value="SOMALIA">SOMALIA</option>
                                    
                                    <option 
                                        value="SPAGNA">SPAGNA</option>
                                    
                                    <option 
                                        value="SRI LANKA">SRI LANKA</option>
                                    
                                    <option 
                                        value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
                                    
                                    <option 
                                        value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
                                    
                                    <option 
                                        value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
                                    
                                    <option 
                                        value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
                                    
                                    <option 
                                        value="SUDAN">SUDAN</option>
                                    
                                    <option 
                                        value="SURINAME">SURINAME</option>
                                    
                                    <option 
                                        value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
                                    
                                    <option 
                                        value="SVEZIA">SVEZIA</option>
                                    
                                    <option 
                                        value="SVIZZERA">SVIZZERA</option>
                                    
                                    <option 
                                        value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
                                    
                                    <option 
                                        value="TAGIKISTAN">TAGIKISTAN</option>
                                    
                                    <option 
                                        value="TANZANIA">TANZANIA</option>
                                    
                                    <option 
                                        value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
                                    
                                    <option 
                                        value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
                                    
                                    <option 
                                        value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
                                    
                                    <option 
                                        value="THAILANDIA">THAILANDIA</option>
                                    
                                    <option 
                                        value="TIMOR">TIMOR</option>
                                    
                                    <option 
                                        value="TOGO">TOGO</option>
                                    
                                    <option 
                                        value="TOKELAU">TOKELAU</option>
                                    
                                    <option 
                                        value="TONGA">TONGA</option>
                                    
                                    <option 
                                        value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
                                    
                                    <option 
                                        value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
                                    
                                    <option 
                                        value="TUNISIA">TUNISIA</option>
                                    
                                    <option 
                                        value="TURCHIA">TURCHIA</option>
                                    
                                    <option 
                                        value="TURKMENISTAN">TURKMENISTAN</option>
                                    
                                    <option 
                                        value="TURKS E CAICOS">TURKS E CAICOS</option>
                                    
                                    <option 
                                        value="TUVALU">TUVALU</option>
                                    
                                    <option 
                                        value="UCRAINA">UCRAINA</option>
                                    
                                    <option 
                                        value="UGANDA">UGANDA</option>
                                    
                                    <option 
                                        value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
                                    
                                    <option 
                                        value="UNGHERIA">UNGHERIA</option>
                                    
                                    <option 
                                        value="URUGUAY">URUGUAY</option>
                                    
                                    <option 
                                        value="UZBEKISTAN">UZBEKISTAN</option>
                                    
                                    <option 
                                        value="VANUATU">VANUATU</option>
                                    
                                    <option 
                                        value="VENEZUELA">VENEZUELA</option>
                                    
                                    <option 
                                        value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
                                    
                                    <option 
                                        value="VIETNAM">VIETNAM</option>
                                    
                                    <option 
                                        value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
                                    
                                    <option 
                                        value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
                                    
                                    <option 
                                        value="YEMEN">YEMEN</option>
                                    
                                    <option 
                                        value="ZAMBIA">ZAMBIA</option>
                                    
                                    <option 
                                        value="ZIMBABWE">ZIMBABWE</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="spacer-no-border hidden-xs">&nbsp;</div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="provincia_nascita_int1">Provincia
                                    di nascita*</label> <select name="provincia_nascita_int1"
                                    id="provincia_nascita_int1"
                                    class="form-control indProv"
                                    >
                                    <option value="">seleziona</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="comune_nascita_int1">Comune di
                                    nascita*</label> <select name="comune_nascita_int1"
                                    id="comune_nascita_int1"
                                    class="form-control indCom"
                                    >
                                    <option value="">seleziona</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- DATI FATCA -->
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="labelTooltip">Paese di residenza
                                fiscale*</label> <a href="javascript:;" data-toggle="tooltip"
                                title="" id="ttNome_int1" class="icoinfo"
                                data-original-title="Ai fini delle imposte sui redditi, si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta sono iscritte nelle anagrafi della popolazione residente anche se domiciliano all'estero, oppure le persone fisiche che hanno nel territorio dello Stato il proprio domicilio o residenza ai sensi del codice civile (Art. 2, co. 2, D.P.R. 917/1986).<br><br><strong>&Eacute; possibile aprire Conto Webank solo se il Paese di residenza fiscale &egrave; l'Italia</strong>."></a> <span
                                class="output">Italia</span>
                        </div>
                    </div>

                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="panel-group panel-sub" id="accordion2_int1"
                        role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab"
                                id="headingOneB_int1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#!"
                                        data-target="#collapse_int1B" aria-expanded="true"
                                        aria-controls="collapse_int1B" class=""> Altri
                                        dati FATCA e CRS </a>
                                </h4>
                            </div>
                            <div id="collapse_int1B"
                                class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOneB_int1"
                                aria-expanded="true">
                                <div class="panel-body">
                                    <p>Con l'entrata in vigore delle normative FATCA (Foreign Account Tax Compliance Act) e CRS (Common Reporting Standard,) il Governo italiano si è impegnato a garantire la compliance fiscale internazionale mediante l'adesione allo scambio automatico di informazioni fra le amministrazioni tributarie dei rispettivi Paesi aderenti.<br><h4>Residenza fiscale estera</h4>Ogni giurisdizione definisce autonomamente i criteri per l'attribuzione della residenza fiscale ad un soggetto. Il Paese nel quale il soggetto è tenuto a pagare le imposte sui redditi, in virtù della propria residenza, domicilio o altro, è verosimilmente il Paese nel quale tale soggetto ha la propria residenza fiscale. Tuttavia, alcune circostanze (ad es. lavorare all'estero) potrebbero implicare la residenza fiscale di un soggetto in più Paesi, nello stesso intervallo temporale (ad. es. anno civile). In tal caso, al fine di risolvere tali casistiche di doppia residenza fiscale, le Convenzioni contro la doppia imposizione contengono le cosiddette "tiebreaker rules", alle quali il soggetto può fare riferimento per stabilire la propria residenza fiscale. Per ulteriori informazioni relative alla propria residenza fiscale, si prega di contattare il proprio consulente fiscale o verificare le informazioni disponibili sul Portale Web dell'<a href="http://www.oecd.org/tax/automatic-exchange/crs-implementation-and-assistance" target="_blank">OECD</a>.</p>
                                    <p>Alla luce di quanto sopra, se risulti essere
                                        fiscalmente residente anche in un altro Paese oltre
                                        l'Italia, ti chiediamo di indicarlo nell'apposito campo.</p>

                                    <!-- seconda residenza fiscale -->
                                    <div class="fatcaContainer" data-tit="1">
                                        <!-- _int1 -->
                                        <div class="fatcaBox" data-res="1" style="display: none">
                                            <div class="spacer-no-border">&nbsp;</div>
                                            <div class="row fatcaLinkButton">
                                                <div class="col-md-12 form-group">
                                                    <a href="javascript:;" class="fieldButton add"> <span>Aggiungi
                                                            <span class="labelCounterPiu">seconda</span>
                                                            residenza fiscale
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="spacer-no-border">&nbsp;</div>
                                        </div>
                                        <div class="fatcaBox" data-res="2">
                                            <div class="row fatcaFieldButton">
                                                <div class="col-md-6 form-group">
                                                    <label for="residenzaFiscale2_int1"
                                                        class="labelTooltip">Secondo paese di
                                                        residenza fiscale</label> <a href="javascript:;"
                                                        data-toggle="tooltip" title=""
                                                        id="ttRes2_int1" class="icoinfo"
                                                        data-original-title="Il regime fiscale applicato sarà quello dell'Italia. Questa informazione è rilevante solo ai fini FATCA e CRS. Se il cliente dichiara un Paese estero come «Altro Paese di residenza fiscale», la banca è tenuta, ai sensi delle normative FATCA e CRS, a segnalarlo con frequenza annuale all'Agenzia delle Entrate."></a>
                                                    <select name="sel_residenzaFiscale2_int1"
                                                        id="sel_residenzaFiscale2_int1"
                                                        class="form-control">
                                                        <option value="">seleziona</option>
                                                        
                                                        <option
                                                            
                                                            value="238|ABU DHABI|X">ABU DHABI</option>
                                                        
                                                        <option
                                                            
                                                            value="2|AFGHANISTAN|X">AFGHANISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="206|AFRICA DEL SUD OVEST - NAMIBIA|X">AFRICA DEL SUD OVEST - NAMIBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="246|AFRICA SPAGNOLA|S">AFRICA SPAGNOLA</option>
                                                        
                                                        <option
                                                            
                                                            value="239|AJMAN|X">AJMAN</option>
                                                        
                                                        <option
                                                            
                                                            value="292|ALAND ISOLE|S">ALAND ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="87|ALBANIA|X">ALBANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="3|ALGERIA|X">ALGERIA</option>
                                                        
                                                        <option
                                                            
                                                            value="148|AMERICAN SAMOA|X">AMERICAN SAMOA</option>
                                                        
                                                        <option
                                                            
                                                            value="4|ANDORRA|S">ANDORRA</option>
                                                        
                                                        <option
                                                            
                                                            value="133|ANGOLA|X">ANGOLA</option>
                                                        
                                                        <option
                                                            
                                                            value="209|ANGUILLA|X">ANGUILLA</option>
                                                        
                                                        <option
                                                            
                                                            value="197|ANTIGUA E BARBUDA|X">ANTIGUA E BARBUDA</option>
                                                        
                                                        <option
                                                            
                                                            value="5|ARABIA SAUDITA|S">ARABIA SAUDITA</option>
                                                        
                                                        <option
                                                            
                                                            value="6|ARGENTINA|S">ARGENTINA</option>
                                                        
                                                        <option
                                                            
                                                            value="266|ARMENIA|X">ARMENIA</option>
                                                        
                                                        <option
                                                            
                                                            value="212|ARUBA|X">ARUBA</option>
                                                        
                                                        <option
                                                            
                                                            value="227|ASCENSION|S">ASCENSION</option>
                                                        
                                                        <option
                                                            
                                                            value="7|AUSTRALIA|S">AUSTRALIA</option>
                                                        
                                                        <option
                                                            
                                                            value="8|AUSTRIA|S">AUSTRIA</option>
                                                        
                                                        <option
                                                            
                                                            value="268|AZERBAIGIAN|X">AZERBAIGIAN</option>
                                                        
                                                        <option
                                                            
                                                            value="234|AZZORRE ISOLE|S">AZZORRE ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="160|BAHAMA|X">BAHAMA</option>
                                                        
                                                        <option
                                                            
                                                            value="169|BAHREIN|X">BAHREIN</option>
                                                        
                                                        <option
                                                            
                                                            value="130|BANGLADESH|X">BANGLADESH</option>
                                                        
                                                        <option
                                                            
                                                            value="118|BARBADOS|X">BARBADOS</option>
                                                        
                                                        <option
                                                            
                                                            value="9|BELGIO|S">BELGIO</option>
                                                        
                                                        <option
                                                            
                                                            value="198|BELIZE|S">BELIZE</option>
                                                        
                                                        <option
                                                            
                                                            value="158|BENIN|X">BENIN</option>
                                                        
                                                        <option
                                                            
                                                            value="207|BERMUDA|N">BERMUDA</option>
                                                        
                                                        <option
                                                            
                                                            value="97|BHUTAN|X">BHUTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="264|BIELORUSSIA|X">BIELORUSSIA</option>
                                                        
                                                        <option
                                                            
                                                            value="10|BOLIVIA|X">BOLIVIA</option>
                                                        
                                                        <option
                                                            
                                                            value="295|BONAIRE SAINT EUSTATIUS AND SABA|X">BONAIRE SAINT EUSTATIUS AND SABA</option>
                                                        
                                                        <option
                                                            
                                                            value="274|BOSNIA ERZEGOVINA|X">BOSNIA ERZEGOVINA</option>
                                                        
                                                        <option
                                                            
                                                            value="98|BOTSWANA|X">BOTSWANA</option>
                                                        
                                                        <option
                                                            
                                                            value="11|BRASILE|S">BRASILE</option>
                                                        
                                                        <option
                                                            
                                                            value="125|BRUNEI DARUSSALAM|X">BRUNEI DARUSSALAM</option>
                                                        
                                                        <option
                                                            
                                                            value="12|BULGARIA|S">BULGARIA</option>
                                                        
                                                        <option
                                                            
                                                            value="142|BURKINA FASO|X">BURKINA FASO</option>
                                                        
                                                        <option
                                                            
                                                            value="25|BURUNDI|X">BURUNDI</option>
                                                        
                                                        <option
                                                            
                                                            value="135|CAMBOGIA (CAMPUCEA)|X">CAMBOGIA (CAMPUCEA)</option>
                                                        
                                                        <option
                                                            
                                                            value="119|CAMERUN|X">CAMERUN</option>
                                                        
                                                        <option
                                                            
                                                            value="139|CAMPIONE D'ITALIA|S">CAMPIONE D'ITALIA</option>
                                                        
                                                        <option
                                                            
                                                            value="13|CANADA|S">CANADA</option>
                                                        
                                                        <option
                                                            
                                                            value="211|CAYMAN ISOLE|N">CAYMAN ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="230|CHAFARINAS|S">CHAFARINAS</option>
                                                        
                                                        <option
                                                            
                                                            value="144|CIAD|X">CIAD</option>
                                                        
                                                        <option
                                                            
                                                            value="15|CILE|X">CILE</option>
                                                        
                                                        <option
                                                            
                                                            value="101|CIPRO|S">CIPRO</option>
                                                        
                                                        <option
                                                            
                                                            value="93|CITTA DEL VATICANO|X">CITTA DEL VATICANO</option>
                                                        
                                                        <option
                                                            
                                                            value="223|CLIPPERTON|S">CLIPPERTON</option>
                                                        
                                                        <option
                                                            
                                                            value="17|COLOMBIA|S">COLOMBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="176|COMORE|X">COMORE</option>
                                                        
                                                        <option
                                                            
                                                            value="18|CONGO REPUBBLICA DEMOCRATICA|X">CONGO REPUBBLICA DEMOCRATICA</option>
                                                        
                                                        <option
                                                            
                                                            value="145|CONGO REPUBBLICA POPOLARE|X">CONGO REPUBBLICA POPOLARE</option>
                                                        
                                                        <option
                                                            
                                                            value="74|COREA DEL NORD|X">COREA DEL NORD</option>
                                                        
                                                        <option
                                                            
                                                            value="84|COREA DEL SUD|S">COREA DEL SUD</option>
                                                        
                                                        <option
                                                            
                                                            value="146|COSTA D'AVORIO|X">COSTA D'AVORIO</option>
                                                        
                                                        <option
                                                            
                                                            value="19|COSTARICA|S">COSTARICA</option>
                                                        
                                                        <option
                                                            
                                                            value="261|CROAZIA|S">CROAZIA</option>
                                                        
                                                        <option
                                                            
                                                            value="20|CUBA|X">CUBA</option>
                                                        
                                                        <option
                                                            
                                                            value="296|CURACAO|X">CURACAO</option>
                                                        
                                                        <option
                                                            
                                                            value="21|DANIMARCA|S">DANIMARCA</option>
                                                        
                                                        <option
                                                            
                                                            value="192|DOMINICA|X">DOMINICA</option>
                                                        
                                                        <option
                                                            
                                                            value="240|DUBAI|X">DUBAI</option>
                                                        
                                                        <option
                                                            
                                                            value="24|ECUADOR|X">ECUADOR</option>
                                                        
                                                        <option
                                                            
                                                            value="23|EGITTO|X">EGITTO</option>
                                                        
                                                        <option
                                                            
                                                            value="64|EL SALVADOR|X">EL SALVADOR</option>
                                                        
                                                        <option
                                                            
                                                            value="277|ERITREA|X">ERITREA</option>
                                                        
                                                        <option
                                                            
                                                            value="257|ESTONIA|S">ESTONIA</option>
                                                        
                                                        <option
                                                            
                                                            value="26|ETIOPIA|X">ETIOPIA</option>
                                                        
                                                        <option
                                                            
                                                            value="190|FALKLAND|X">FALKLAND</option>
                                                        
                                                        <option
                                                            
                                                            value="27|FILIPPINE|X">FILIPPINE</option>
                                                        
                                                        <option
                                                            
                                                            value="28|FINLANDIA|S">FINLANDIA</option>
                                                        
                                                        <option
                                                            
                                                            value="29|FRANCIA|S">FRANCIA</option>
                                                        
                                                        <option
                                                            
                                                            value="241|FUIJAYRAH|X">FUIJAYRAH</option>
                                                        
                                                        <option
                                                            
                                                            value="157|GABON|X">GABON</option>
                                                        
                                                        <option
                                                            
                                                            value="164|GAMBIA|X">GAMBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="267|GEORGIA|X">GEORGIA</option>
                                                        
                                                        <option
                                                            
                                                            value="112|GHANA|X">GHANA</option>
                                                        
                                                        <option
                                                            
                                                            value="82|GIAMAICA|X">GIAMAICA</option>
                                                        
                                                        <option
                                                            
                                                            value="88|GIAPPONE|S">GIAPPONE</option>
                                                        
                                                        <option
                                                            
                                                            value="102|GIBILTERRA|S">GIBILTERRA</option>
                                                        
                                                        <option
                                                            
                                                            value="113|GIBUTI|X">GIBUTI</option>
                                                        
                                                        <option
                                                            
                                                            value="122|GIORDANIA|X">GIORDANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="228|GOUGH|S">GOUGH</option>
                                                        
                                                        <option
                                                            
                                                            value="32|GRECIA|S">GRECIA</option>
                                                        
                                                        <option
                                                            
                                                            value="156|GRENADA|X">GRENADA</option>
                                                        
                                                        <option
                                                            
                                                            value="200|GROENLANDIA|S">GROENLANDIA</option>
                                                        
                                                        <option
                                                            
                                                            value="214|GUADALUPA|X">GUADALUPA</option>
                                                        
                                                        <option
                                                            
                                                            value="154|GUAM|X">GUAM</option>
                                                        
                                                        <option
                                                            
                                                            value="33|GUATEMALA|X">GUATEMALA</option>
                                                        
                                                        <option
                                                            
                                                            value="123|GUAYANA FRANCESE|X">GUAYANA FRANCESE</option>
                                                        
                                                        <option
                                                            
                                                            value="201|GUERNSEY C.I.|S">GUERNSEY C.I.</option>
                                                        
                                                        <option
                                                            
                                                            value="137|GUINEA|X">GUINEA</option>
                                                        
                                                        <option
                                                            
                                                            value="185|GUINEA BISSAU|X">GUINEA BISSAU</option>
                                                        
                                                        <option
                                                            
                                                            value="167|GUINEA EQUATORIALE|X">GUINEA EQUATORIALE</option>
                                                        
                                                        <option
                                                            
                                                            value="159|GUYANA|X">GUYANA</option>
                                                        
                                                        <option
                                                            
                                                            value="34|HAITI|X">HAITI</option>
                                                        
                                                        <option
                                                            
                                                            value="284|HEARD E MCDONALD ISOLE|X">HEARD E MCDONALD ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="35|HONDURAS|X">HONDURAS</option>
                                                        
                                                        <option
                                                            
                                                            value="103|HONG KONG|S">HONG KONG</option>
                                                        
                                                        <option
                                                            
                                                            value="114|INDIA|S">INDIA</option>
                                                        
                                                        <option
                                                            
                                                            value="129|INDONESIA|X">INDONESIA</option>
                                                        
                                                        <option
                                                            
                                                            value="39|IRAN|X">IRAN</option>
                                                        
                                                        <option
                                                            
                                                            value="38|IRAQ|X">IRAQ</option>
                                                        
                                                        <option
                                                            
                                                            value="40|IRLANDA|S">IRLANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="41|ISLANDA|S">ISLANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="203|ISOLA DI MAN|S">ISOLA DI MAN</option>
                                                        
                                                        <option
                                                            
                                                            value="100|ISOLE CANARIE|S">ISOLE CANARIE</option>
                                                        
                                                        <option
                                                            
                                                            value="256|ISOLE CAROLINE|S">ISOLE CAROLINE</option>
                                                        
                                                        <option
                                                            
                                                            value="255|ISOLE CHAGOS|S">ISOLE CHAGOS</option>
                                                        
                                                        <option
                                                            
                                                            value="237|ISOLE COOK|X">ISOLE COOK</option>
                                                        
                                                        <option
                                                            
                                                            value="188|ISOLE DEL CAPO VERDE|X">ISOLE DEL CAPO VERDE</option>
                                                        
                                                        <option
                                                            
                                                            value="204|ISOLE FAEROER|S">ISOLE FAEROER</option>
                                                        
                                                        <option
                                                            
                                                            value="161|ISOLE FIGI|X">ISOLE FIGI</option>
                                                        
                                                        <option
                                                            
                                                            value="217|ISOLE MARSHALL|S">ISOLE MARSHALL</option>
                                                        
                                                        <option
                                                            
                                                            value="249|ISOLE VERGINI BRITANNICHE|X">ISOLE VERGINI BRITANNICHE</option>
                                                        
                                                        <option
                                                            
                                                            value="178|ISOLE WAKE|S">ISOLE WAKE</option>
                                                        
                                                        <option
                                                            
                                                            value="182|ISRAELE|S">ISRAELE</option>
                                                        
                                                        <option
                                                            
                                                            value="202|JERSEY|S">JERSEY</option>
                                                        
                                                        <option
                                                            
                                                            value="269|KAZAKISTAN|X">KAZAKISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="116|KENYA|X">KENYA</option>
                                                        
                                                        <option
                                                            
                                                            value="270|KIRGHIZISTAN|X">KIRGHIZISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="194|KIRIBATI|X">KIRIBATI</option>
                                                        
                                                        <option
                                                            
                                                            value="126|KUWAIT|S">KUWAIT</option>
                                                        
                                                        <option
                                                            
                                                            value="136|LAOS|X">LAOS</option>
                                                        
                                                        <option
                                                            
                                                            value="89|LESOTHO|X">LESOTHO</option>
                                                        
                                                        <option
                                                            
                                                            value="258|LETTONIA|S">LETTONIA</option>
                                                        
                                                        <option
                                                            
                                                            value="95|LIBANO|X">LIBANO</option>
                                                        
                                                        <option
                                                            
                                                            value="44|LIBERIA|X">LIBERIA</option>
                                                        
                                                        <option
                                                            
                                                            value="45|LIBIA|X">LIBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="90|LIECHTENSTEIN|S">LIECHTENSTEIN</option>
                                                        
                                                        <option
                                                            
                                                            value="259|LITUANIA|S">LITUANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="92|LUSSEMBURGO|S">LUSSEMBURGO</option>
                                                        
                                                        <option
                                                            
                                                            value="59|MACAO|N">MACAO</option>
                                                        
                                                        <option
                                                            
                                                            value="278|MACEDONIA|X">MACEDONIA</option>
                                                        
                                                        <option
                                                            
                                                            value="104|MADAGASCAR|X">MADAGASCAR</option>
                                                        
                                                        <option
                                                            
                                                            value="235|MADEIRA|S">MADEIRA</option>
                                                        
                                                        <option
                                                            
                                                            value="56|MALAWI|X">MALAWI</option>
                                                        
                                                        <option
                                                            
                                                            value="106|MALAYSIA|S">MALAYSIA</option>
                                                        
                                                        <option
                                                            
                                                            value="127|MALDIVE|X">MALDIVE</option>
                                                        
                                                        <option
                                                            
                                                            value="149|MALI|X">MALI</option>
                                                        
                                                        <option
                                                            
                                                            value="105|MALTA|S">MALTA</option>
                                                        
                                                        <option
                                                            
                                                            value="219|MARIANNE (ISOLE)|X">MARIANNE (ISOLE)</option>
                                                        
                                                        <option
                                                            
                                                            value="107|MAROCCO|X">MAROCCO</option>
                                                        
                                                        <option
                                                            
                                                            value="213|MARTINICA|X">MARTINICA</option>
                                                        
                                                        <option
                                                            
                                                            value="141|MAURITANIA|X">MAURITANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="128|MAURIZIO|X">MAURIZIO</option>
                                                        
                                                        <option
                                                            
                                                            value="226|MAYOTTE|X">MAYOTTE</option>
                                                        
                                                        <option
                                                            
                                                            value="231|MELILLA|S">MELILLA</option>
                                                        
                                                        <option
                                                            
                                                            value="46|MESSICO|S">MESSICO</option>
                                                        
                                                        <option
                                                            
                                                            value="215|MICRONESIA|X">MICRONESIA</option>
                                                        
                                                        <option
                                                            
                                                            value="177|MIDWAY ISOLE|S">MIDWAY ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="265|MOLDAVIA|X">MOLDAVIA</option>
                                                        
                                                        <option
                                                            
                                                            value="91|MONACO|X">MONACO</option>
                                                        
                                                        <option
                                                            
                                                            value="110|MONGOLIA|X">MONGOLIA</option>
                                                        
                                                        <option
                                                            
                                                            value="290|MONTENEGRO|X">MONTENEGRO</option>
                                                        
                                                        <option
                                                            
                                                            value="208|MONTSERRAT|N">MONTSERRAT</option>
                                                        
                                                        <option
                                                            
                                                            value="134|MOZAMBICO|X">MOZAMBICO</option>
                                                        
                                                        <option
                                                            
                                                            value="83|MYANMAR|X">MYANMAR</option>
                                                        
                                                        <option
                                                            
                                                            value="109|NAURU|S">NAURU</option>
                                                        
                                                        <option
                                                            
                                                            value="115|NEPAL|X">NEPAL</option>
                                                        
                                                        <option
                                                            
                                                            value="47|NICARAGUA|X">NICARAGUA</option>
                                                        
                                                        <option
                                                            
                                                            value="150|NIGER|X">NIGER</option>
                                                        
                                                        <option
                                                            
                                                            value="117|NIGERIA|X">NIGERIA</option>
                                                        
                                                        <option
                                                            
                                                            value="205|NIUE - SAVAGE|X">NIUE - SAVAGE</option>
                                                        
                                                        <option
                                                            
                                                            value="285|NORFOLK ISOLE|X">NORFOLK ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="48|NORVEGIA|S">NORVEGIA</option>
                                                        
                                                        <option
                                                            
                                                            value="253|NUOVA CALEDONIA|X">NUOVA CALEDONIA</option>
                                                        
                                                        <option
                                                            
                                                            value="49|NUOVA ZELANDA|S">NUOVA ZELANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="175|OCEANIA BRITANNICA|X">OCEANIA BRITANNICA</option>
                                                        
                                                        <option
                                                            
                                                            value="252|OCEANIA DEGLI STATI UNITI|X">OCEANIA DEGLI STATI UNITI</option>
                                                        
                                                        <option
                                                            
                                                            value="163|OMAN|X">OMAN</option>
                                                        
                                                        <option
                                                            
                                                            value="50|PAESI BASSI O OLANDA|S">PAESI BASSI O OLANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="36|PAKISTAN|X">PAKISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="279|PALESTINA, TERRITORI AUTONOMI|X">PALESTINA, TERRITORI AUTONOMI</option>
                                                        
                                                        <option
                                                            
                                                            value="51|PANAMA|X">PANAMA</option>
                                                        
                                                        <option
                                                            
                                                            value="186|PAPUA E NUOVA GUINEA|X">PAPUA E NUOVA GUINEA</option>
                                                        
                                                        <option
                                                            
                                                            value="52|PARAGUAY|X">PARAGUAY</option>
                                                        
                                                        <option
                                                            
                                                            value="232|PENON DE ALHUCEMAS|S">PENON DE ALHUCEMAS</option>
                                                        
                                                        <option
                                                            
                                                            value="233|PENON DE VELEZ DE LA GOMERA|S">PENON DE VELEZ DE LA GOMERA</option>
                                                        
                                                        <option
                                                            
                                                            value="53|PERU'|X">PERU'</option>
                                                        
                                                        <option
                                                            
                                                            value="225|POLINESIA FRANCESE|X">POLINESIA FRANCESE</option>
                                                        
                                                        <option
                                                            
                                                            value="54|POLONIA|S">POLONIA</option>
                                                        
                                                        <option
                                                            
                                                            value="55|PORTOGALLO|S">PORTOGALLO</option>
                                                        
                                                        <option
                                                            
                                                            value="220|PORTORICO|X">PORTORICO</option>
                                                        
                                                        <option
                                                            
                                                            value="168|QATAR|X">QATAR</option>
                                                        
                                                        <option
                                                            
                                                            value="242|RAS EL KHAIMAN|X">RAS EL KHAIMAN</option>
                                                        
                                                        <option
                                                            
                                                            value="31|REGNO UNITO|S">REGNO UNITO</option>
                                                        
                                                        <option
                                                            
                                                            value="22|REP. CINA NAZ. (TAIWAN)|X">REP. CINA NAZ. (TAIWAN)</option>
                                                        
                                                        <option
                                                            
                                                            value="275|REPUBBLICA CECA|S">REPUBBLICA CECA</option>
                                                        
                                                        <option
                                                            
                                                            value="143|REPUBBLICA CENTRAFRICANA|X">REPUBBLICA CENTRAFRICANA</option>
                                                        
                                                        <option
                                                            
                                                            value="291|REPUBBLICA DEL KOSOVO|X">REPUBBLICA DEL KOSOVO</option>
                                                        
                                                        <option
                                                            
                                                            value="216|REPUBBLICA DI PALAU|X">REPUBBLICA DI PALAU</option>
                                                        
                                                        <option
                                                            
                                                            value="37|REPUBBLICA DI SAN MARINO|S">REPUBBLICA DI SAN MARINO</option>
                                                        
                                                        <option
                                                            
                                                            value="63|REPUBBLICA DOMINICANA|X">REPUBBLICA DOMINICANA</option>
                                                        
                                                        <option
                                                            
                                                            value="94|REPUBBLICA FED.DI GERMANIA|X">REPUBBLICA FED.DI GERMANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="16|REPUBBLICA POPOLARE CINESE|S">REPUBBLICA POPOLARE CINESE</option>
                                                        
                                                        <option
                                                            
                                                            value="78|REPUBBLICA SUDAFRICANA|S">REPUBBLICA SUDAFRICANA</option>
                                                        
                                                        <option
                                                            
                                                            value="247|REUNION|X">REUNION</option>
                                                        
                                                        <option
                                                            
                                                            value="61|ROMANIA|S">ROMANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="151|RUANDA|X">RUANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="262|RUSSIA|S">RUSSIA</option>
                                                        
                                                        <option
                                                            
                                                            value="254|S.ELENA|X">S.ELENA</option>
                                                        
                                                        <option
                                                            
                                                            value="166|SAHARA OCCIDENTALE|X">SAHARA OCCIDENTALE</option>
                                                        
                                                        <option
                                                            
                                                            value="293|SAINT BARTHELEMY|X">SAINT BARTHELEMY</option>
                                                        
                                                        <option
                                                            
                                                            value="199|SAINT LUCIA|S">SAINT LUCIA</option>
                                                        
                                                        <option
                                                            
                                                            value="191|SALOMONE|X">SALOMONE</option>
                                                        
                                                        <option
                                                            
                                                            value="131|SAMOA OCCIDENTALE|X">SAMOA OCCIDENTALE</option>
                                                        
                                                        <option
                                                            
                                                            value="187|SAO TOME' E PRINCIPE|X">SAO TOME' E PRINCIPE</option>
                                                        
                                                        <option
                                                            
                                                            value="189|SEICELLE|S">SEICELLE</option>
                                                        
                                                        <option
                                                            
                                                            value="152|SENEGAL|X">SENEGAL</option>
                                                        
                                                        <option
                                                            
                                                            value="289|SERBIA|X">SERBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="243|SHARJAH|X">SHARJAH</option>
                                                        
                                                        <option
                                                            
                                                            value="153|SIERRA LEONE|X">SIERRA LEONE</option>
                                                        
                                                        <option
                                                            
                                                            value="147|SINGAPORE|S">SINGAPORE</option>
                                                        
                                                        <option
                                                            
                                                            value="294|SINT MAARTEN (DUTCH PART)|X">SINT MAARTEN (DUTCH PART)</option>
                                                        
                                                        <option
                                                            
                                                            value="65|SIRIA|X">SIRIA</option>
                                                        
                                                        <option
                                                            
                                                            value="276|SLOVACCHIA|S">SLOVACCHIA</option>
                                                        
                                                        <option
                                                            
                                                            value="260|SLOVENIA|S">SLOVENIA</option>
                                                        
                                                        <option
                                                            
                                                            value="66|SOMALIA|X">SOMALIA</option>
                                                        
                                                        <option
                                                            
                                                            value="67|SPAGNA|S">SPAGNA</option>
                                                        
                                                        <option
                                                            
                                                            value="85|SRI LANKA|X">SRI LANKA</option>
                                                        
                                                        <option
                                                            
                                                            value="195|ST. KITTS E NEVIS|X">ST. KITTS E NEVIS</option>
                                                        
                                                        <option
                                                            
                                                            value="222|ST. MARTIN SETTENTRIONALE|X">ST. MARTIN SETTENTRIONALE</option>
                                                        
                                                        <option
                                                            
                                                            value="248|ST. PIERRE E MIQUELON|X">ST. PIERRE E MIQUELON</option>
                                                        
                                                        <option
                                                            
                                                            value="69|STATI UNITI D'AMERICA|S">STATI UNITI D'AMERICA</option>
                                                        
                                                        <option
                                                            
                                                            value="70|SUDAN|X">SUDAN</option>
                                                        
                                                        <option
                                                            
                                                            value="124|SURINAME|X">SURINAME</option>
                                                        
                                                        <option
                                                            
                                                            value="286|SVALBARD E JAN MAYEN ISOLE|X">SVALBARD E JAN MAYEN ISOLE</option>
                                                        
                                                        <option
                                                            
                                                            value="68|SVEZIA|S">SVEZIA</option>
                                                        
                                                        <option
                                                            
                                                            value="71|SVIZZERA|S">SVIZZERA</option>
                                                        
                                                        <option
                                                            
                                                            value="138|SWAZILAND - NGWANE|X">SWAZILAND - NGWANE</option>
                                                        
                                                        <option
                                                            
                                                            value="272|TAGIKISTAN|X">TAGIKISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="57|TANZANIA|X">TANZANIA</option>
                                                        
                                                        <option
                                                            
                                                            value="245|TERRIT.BRIT.OCC.|X">TERRIT.BRIT.OCC.</option>
                                                        
                                                        <option
                                                            
                                                            value="183|TERRITORI FRANCESI DEL SUD|X">TERRITORI FRANCESI DEL SUD</option>
                                                        
                                                        <option
                                                            
                                                            value="180|TERRITORIO ANTARTICO BRITANNICO|X">TERRITORIO ANTARTICO BRITANNICO</option>
                                                        
                                                        <option
                                                            
                                                            value="72|THAILANDIA|X">THAILANDIA</option>
                                                        
                                                        <option
                                                            
                                                            value="287|TIMOR|X">TIMOR</option>
                                                        
                                                        <option
                                                            
                                                            value="155|TOGO|X">TOGO</option>
                                                        
                                                        <option
                                                            
                                                            value="236|TOKELAU|X">TOKELAU</option>
                                                        
                                                        <option
                                                            
                                                            value="162|TONGA|X">TONGA</option>
                                                        
                                                        <option
                                                            
                                                            value="120|TRINIDAD E TOBAGO|X">TRINIDAD E TOBAGO</option>
                                                        
                                                        <option
                                                            
                                                            value="229|TRISTAN DE CUNHA|S">TRISTAN DE CUNHA</option>
                                                        
                                                        <option
                                                            
                                                            value="75|TUNISIA|X">TUNISIA</option>
                                                        
                                                        <option
                                                            
                                                            value="76|TURCHIA|S">TURCHIA</option>
                                                        
                                                        <option
                                                            
                                                            value="273|TURKMENISTAN|X">TURKMENISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="210|TURKS E CAICOS|N">TURKS E CAICOS</option>
                                                        
                                                        <option
                                                            
                                                            value="193|TUVALU|X">TUVALU</option>
                                                        
                                                        <option
                                                            
                                                            value="263|UCRAINA|X">UCRAINA</option>
                                                        
                                                        <option
                                                            
                                                            value="132|UGANDA|X">UGANDA</option>
                                                        
                                                        <option
                                                            
                                                            value="244|UMM AL QAIWAIN|X">UMM AL QAIWAIN</option>
                                                        
                                                        <option
                                                            
                                                            value="77|UNGHERIA|S">UNGHERIA</option>
                                                        
                                                        <option
                                                            
                                                            value="80|URUGUAY|S">URUGUAY</option>
                                                        
                                                        <option
                                                            
                                                            value="271|UZBEKISTAN|X">UZBEKISTAN</option>
                                                        
                                                        <option
                                                            
                                                            value="121|VANUATU|X">VANUATU</option>
                                                        
                                                        <option
                                                            
                                                            value="81|VENEZUELA|X">VENEZUELA</option>
                                                        
                                                        <option
                                                            
                                                            value="221|VERGINI AMERICANE (ISOLE)|X">VERGINI AMERICANE (ISOLE)</option>
                                                        
                                                        <option
                                                            
                                                            value="62|VIETNAM|X">VIETNAM</option>
                                                        
                                                        <option
                                                            
                                                            value="196|VINCENT E GRENADINE|S">VINCENT E GRENADINE</option>
                                                        
                                                        <option
                                                            
                                                            value="218|WALLIS E FUTUNA|X">WALLIS E FUTUNA</option>
                                                        
                                                        <option
                                                            
                                                            value="42|YEMEN|X">YEMEN</option>
                                                        
                                                        <option
                                                            
                                                            value="58|ZAMBIA|X">ZAMBIA</option>
                                                        
                                                        <option
                                                            
                                                            value="73|ZIMBABWE|X">ZIMBABWE</option>
                                                        
                                                    </select> <input type="hidden"
                                                        name="residenzaFiscale2_int1"
                                                        id="residenzaFiscale2_int1"
                                                        value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="TIN2_int1">Codice fiscale
                                                        estero</label> <input type="text" name="TIN2_int1"
                                                        id="TIN2_int1" value=""
                                                        class="textinput form-control" disabled maxlength="20">
                                                </div>
                                            </div>
                                            <!-- 
                        <div class="spacer-no-border">&nbsp;</div>
                        <div class="row fatcaUploadButton">
                            <div class="col-xs-12 form-group">
                                <div class="form-group">
                                    <label><a href="#!" class="lbl-file-group">Carica codice fiscale estero</a></label>
                                    <div class="input-group btn-file-group" style="display:none;">
                                        <span class="input-group-btn">
                                            <span class="btn btn-file">
                                                Seleziona<input type="file" id="fileTIN2_int1" name="fileTIN2_int1" accept=".pdf,.jpg,.jpeg,.png">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control btn-file-name" readonly="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        -->
                                            <div class="spacer-no-border">&nbsp;</div>
                                            <div class="row fatcaLinkButton">
                                                <div class="col-md-6 form-group">
                                                    <a href="javascript:;" class="fieldButton remove">
                                                        <span>Elimina <span class="labelCounterMeno">seconda</span>
                                                            residenza fiscale
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <a href="javascript:;" class="fieldButton add disabled">
                                                        <span>Aggiungi <span class="labelCounterPiu">terza</span>
                                                            residenza fiscale
                                                    </span>
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

                    <!-- DOCUMENTO D'IDENTITA -->
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12 form-section-title">
                            <h4>
                                2.Inserisci i dati del tuo documento di
                                identit&agrave;
                            </h4>
                        </div>
                    </div>

                    <div class="modulo-doc">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="tipo_doc_int1">Tipo di
                                    documento*</label> <select name="tipo_doc_int1"
                                    id="tipo_doc_int1" class="form-control"
                                    
                                    data-modulo-doc="tipo-documento">
                                    <option selected
                                        value="">Seleziona il tipo di documento</option>
                                    
                                    <option
                                        
                                        value="01">Carta d'identità elettronica</option>
                                    
                                    <option
                                        
                                        value="12">Carta d'identità rinnovata</option>
                                    
                                    <option
                                        
                                        value="11">Carta d'identità cartacea</option>
                                    
                                    <option
                                        
                                        value="03">Passaporto</option>
                                    
                                    <option
                                        
                                        value="02">Patente elettronica</option>
                                    
                                    <option
                                        
                                        value="14">Patente rinnovata</option>
                                    
                                    <option
                                        
                                        value="13">Patente cartacea</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="numero_doc_int1"
                                    data-modulo="doc-numero">Numero documento*</label> <input
                                    type="text" placeholder="Inserisci il numero del documento"
                                    maxlength="16" name="numero_doc_int1"
                                    id="numero_doc_int1" value=""
                                    class="textinput form-control" >
                            </div>
                        </div>

                        <div class="spacer-no-border hidden-xs">&nbsp;</div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="gg_emissione_int1"
                                    data-modulo="doc-rilascio">Data di
                                    rilascio/rinnovo*</label>
                                <div class="input input-inline input-date">
                                    <input type="tel" pattern="\d+" placeholder="gg"
                                        maxlength="2" name="gg_emissione_int1"
                                        id="gg_emissione_int1"
                                        value=""
                                        class="textinput form-control nascGg ignore"
                                        >
                                    <div class="nascSl">/</div>
                                    <input type="tel" pattern="\d+" placeholder="mm"
                                        maxlength="2" name="mm_emissione_int1"
                                        id="mm_emissione_int1"
                                        value=""
                                        class="textinput form-control nascGg ignore"
                                        >
                                    <div class="nascSl">/</div>
                                    <input type="tel" pattern="\d+" placeholder="aaaa"
                                        maxlength="4" name="aa_emissione_int1"
                                        id="aa_emissione_int1"
                                        value=""
                                        class="textinput form-control nascAn ignore"
                                        > <input type="text"
                                        name="emissione_int1" id="emissione_int1"
                                        class="hidden-input" value="null">
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="gg_scadenza_int1"
                                    data-modulo="doc-scadenza">Data di scadenza*</label>
                                <div class="input input-inline input-date">
                                    <input type="tel" pattern="\d+" placeholder="gg"
                                        maxlength="2" name="gg_scadenza_int1"
                                        id="gg_scadenza_int1"
                                        value=""
                                        class="textinput form-control nascGg ignore">
                                    <div class="nascSl">/</div>
                                    <input type="tel" pattern="\d+" placeholder="mm"
                                        maxlength="2" name="mm_scadenza_int1"
                                        id="mm_scadenza_int1" value=""
                                        class="textinput form-control nascGg ignore">
                                    <div class="nascSl">/</div>
                                    <input type="tel" pattern="\d+" placeholder="aaaa"
                                        maxlength="4" name="aa_scadenza_int1"
                                        id="aa_scadenza_int1" value=""
                                        class="textinput form-control nascAn ignore"> <input
                                        type="text" name="scadenza_int1"
                                        id="scadenza_int1" class="hidden-input"
                                        value="null">
                                </div>
                            </div>
                        </div>

                        <div class="spacer-no-border hidden-xs">&nbsp;</div>
                        <div class="recapRilascio" data-tit="1">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="stato_emissione_int1">Paese di
                                        rilascio*</label> <select name="stato_emissione_int1"
                                        id="stato_emissione_int1"
                                        class="form-control indStato" >
                                        <option value="">seleziona</option>
                                        
                                        <option selected
                                            value="ITALIA">ITALIA</option>
                                        
                                        <option 
                                            value="ABU DHABI">ABU DHABI</option>
                                        
                                        <option 
                                            value="AFGHANISTAN">AFGHANISTAN</option>
                                        
                                        <option 
                                            value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
                                        
                                        <option 
                                            value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
                                        
                                        <option 
                                            value="AJMAN">AJMAN</option>
                                        
                                        <option 
                                            value="ALAND ISOLE">ALAND ISOLE</option>
                                        
                                        <option 
                                            value="ALBANIA">ALBANIA</option>
                                        
                                        <option 
                                            value="ALGERIA">ALGERIA</option>
                                        
                                        <option 
                                            value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                        
                                        <option 
                                            value="ANDORRA">ANDORRA</option>
                                        
                                        <option 
                                            value="ANGOLA">ANGOLA</option>
                                        
                                        <option 
                                            value="ANGUILLA">ANGUILLA</option>
                                        
                                        <option 
                                            value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
                                        
                                        <option 
                                            value="ARABIA SAUDITA">ARABIA SAUDITA</option>
                                        
                                        <option 
                                            value="ARGENTINA">ARGENTINA</option>
                                        
                                        <option 
                                            value="ARMENIA">ARMENIA</option>
                                        
                                        <option 
                                            value="ARUBA">ARUBA</option>
                                        
                                        <option 
                                            value="ASCENSION">ASCENSION</option>
                                        
                                        <option 
                                            value="AUSTRALIA">AUSTRALIA</option>
                                        
                                        <option 
                                            value="AUSTRIA">AUSTRIA</option>
                                        
                                        <option 
                                            value="AZERBAIGIAN">AZERBAIGIAN</option>
                                        
                                        <option 
                                            value="AZZORRE ISOLE">AZZORRE ISOLE</option>
                                        
                                        <option 
                                            value="BAHAMA">BAHAMA</option>
                                        
                                        <option 
                                            value="BAHREIN">BAHREIN</option>
                                        
                                        <option 
                                            value="BANGLADESH">BANGLADESH</option>
                                        
                                        <option 
                                            value="BARBADOS">BARBADOS</option>
                                        
                                        <option 
                                            value="BELGIO">BELGIO</option>
                                        
                                        <option 
                                            value="BELIZE">BELIZE</option>
                                        
                                        <option 
                                            value="BENIN">BENIN</option>
                                        
                                        <option 
                                            value="BERMUDA">BERMUDA</option>
                                        
                                        <option 
                                            value="BHUTAN">BHUTAN</option>
                                        
                                        <option 
                                            value="BIELORUSSIA">BIELORUSSIA</option>
                                        
                                        <option 
                                            value="BOLIVIA">BOLIVIA</option>
                                        
                                        <option 
                                            value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
                                        
                                        <option 
                                            value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
                                        
                                        <option 
                                            value="BOTSWANA">BOTSWANA</option>
                                        
                                        <option 
                                            value="BRASILE">BRASILE</option>
                                        
                                        <option 
                                            value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                        
                                        <option 
                                            value="BULGARIA">BULGARIA</option>
                                        
                                        <option 
                                            value="BURKINA FASO">BURKINA FASO</option>
                                        
                                        <option 
                                            value="BURUNDI">BURUNDI</option>
                                        
                                        <option 
                                            value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
                                        
                                        <option 
                                            value="CAMERUN">CAMERUN</option>
                                        
                                        <option 
                                            value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
                                        
                                        <option 
                                            value="CANADA">CANADA</option>
                                        
                                        <option 
                                            value="CAYMAN ISOLE">CAYMAN ISOLE</option>
                                        
                                        <option 
                                            value="CHAFARINAS">CHAFARINAS</option>
                                        
                                        <option 
                                            value="CIAD">CIAD</option>
                                        
                                        <option 
                                            value="CILE">CILE</option>
                                        
                                        <option 
                                            value="CIPRO">CIPRO</option>
                                        
                                        <option 
                                            value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
                                        
                                        <option 
                                            value="CLIPPERTON">CLIPPERTON</option>
                                        
                                        <option 
                                            value="COLOMBIA">COLOMBIA</option>
                                        
                                        <option 
                                            value="COMORE">COMORE</option>
                                        
                                        <option 
                                            value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
                                        
                                        <option 
                                            value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
                                        
                                        <option 
                                            value="COREA DEL NORD">COREA DEL NORD</option>
                                        
                                        <option 
                                            value="COREA DEL SUD">COREA DEL SUD</option>
                                        
                                        <option 
                                            value="COSTA D'AVORIO">COSTA D'AVORIO</option>
                                        
                                        <option 
                                            value="COSTARICA">COSTARICA</option>
                                        
                                        <option 
                                            value="CROAZIA">CROAZIA</option>
                                        
                                        <option 
                                            value="CUBA">CUBA</option>
                                        
                                        <option 
                                            value="CURACAO">CURACAO</option>
                                        
                                        <option 
                                            value="DANIMARCA">DANIMARCA</option>
                                        
                                        <option 
                                            value="DOMINICA">DOMINICA</option>
                                        
                                        <option 
                                            value="DUBAI">DUBAI</option>
                                        
                                        <option 
                                            value="ECUADOR">ECUADOR</option>
                                        
                                        <option 
                                            value="EGITTO">EGITTO</option>
                                        
                                        <option 
                                            value="EL SALVADOR">EL SALVADOR</option>
                                        
                                        <option 
                                            value="ERITREA">ERITREA</option>
                                        
                                        <option 
                                            value="ESTONIA">ESTONIA</option>
                                        
                                        <option 
                                            value="ETIOPIA">ETIOPIA</option>
                                        
                                        <option 
                                            value="FALKLAND">FALKLAND</option>
                                        
                                        <option 
                                            value="FILIPPINE">FILIPPINE</option>
                                        
                                        <option 
                                            value="FINLANDIA">FINLANDIA</option>
                                        
                                        <option 
                                            value="FRANCIA">FRANCIA</option>
                                        
                                        <option 
                                            value="FUIJAYRAH">FUIJAYRAH</option>
                                        
                                        <option 
                                            value="GABON">GABON</option>
                                        
                                        <option 
                                            value="GAMBIA">GAMBIA</option>
                                        
                                        <option 
                                            value="GEORGIA">GEORGIA</option>
                                        
                                        <option 
                                            value="GHANA">GHANA</option>
                                        
                                        <option 
                                            value="GIAMAICA">GIAMAICA</option>
                                        
                                        <option 
                                            value="GIAPPONE">GIAPPONE</option>
                                        
                                        <option 
                                            value="GIBILTERRA">GIBILTERRA</option>
                                        
                                        <option 
                                            value="GIBUTI">GIBUTI</option>
                                        
                                        <option 
                                            value="GIORDANIA">GIORDANIA</option>
                                        
                                        <option 
                                            value="GOUGH">GOUGH</option>
                                        
                                        <option 
                                            value="GRECIA">GRECIA</option>
                                        
                                        <option 
                                            value="GRENADA">GRENADA</option>
                                        
                                        <option 
                                            value="GROENLANDIA">GROENLANDIA</option>
                                        
                                        <option 
                                            value="GUADALUPA">GUADALUPA</option>
                                        
                                        <option 
                                            value="GUAM">GUAM</option>
                                        
                                        <option 
                                            value="GUATEMALA">GUATEMALA</option>
                                        
                                        <option 
                                            value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
                                        
                                        <option 
                                            value="GUERNSEY C.I.">GUERNSEY C.I.</option>
                                        
                                        <option 
                                            value="GUINEA">GUINEA</option>
                                        
                                        <option 
                                            value="GUINEA BISSAU">GUINEA BISSAU</option>
                                        
                                        <option 
                                            value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
                                        
                                        <option 
                                            value="GUYANA">GUYANA</option>
                                        
                                        <option 
                                            value="HAITI">HAITI</option>
                                        
                                        <option 
                                            value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
                                        
                                        <option 
                                            value="HONDURAS">HONDURAS</option>
                                        
                                        <option 
                                            value="HONG KONG">HONG KONG</option>
                                        
                                        <option 
                                            value="INDIA">INDIA</option>
                                        
                                        <option 
                                            value="INDONESIA">INDONESIA</option>
                                        
                                        <option 
                                            value="IRAN">IRAN</option>
                                        
                                        <option 
                                            value="IRAQ">IRAQ</option>
                                        
                                        <option 
                                            value="IRLANDA">IRLANDA</option>
                                        
                                        <option 
                                            value="ISLANDA">ISLANDA</option>
                                        
                                        <option 
                                            value="ISOLA DI MAN">ISOLA DI MAN</option>
                                        
                                        <option 
                                            value="ISOLE CANARIE">ISOLE CANARIE</option>
                                        
                                        <option 
                                            value="ISOLE CAROLINE">ISOLE CAROLINE</option>
                                        
                                        <option 
                                            value="ISOLE CHAGOS">ISOLE CHAGOS</option>
                                        
                                        <option 
                                            value="ISOLE COOK">ISOLE COOK</option>
                                        
                                        <option 
                                            value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
                                        
                                        <option 
                                            value="ISOLE FAEROER">ISOLE FAEROER</option>
                                        
                                        <option 
                                            value="ISOLE FIGI">ISOLE FIGI</option>
                                        
                                        <option 
                                            value="ISOLE MARSHALL">ISOLE MARSHALL</option>
                                        
                                        <option 
                                            value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
                                        
                                        <option 
                                            value="ISOLE WAKE">ISOLE WAKE</option>
                                        
                                        <option 
                                            value="ISRAELE">ISRAELE</option>
                                        
                                        <option 
                                            value="JERSEY">JERSEY</option>
                                        
                                        <option 
                                            value="KAZAKISTAN">KAZAKISTAN</option>
                                        
                                        <option 
                                            value="KENYA">KENYA</option>
                                        
                                        <option 
                                            value="KIRGHIZISTAN">KIRGHIZISTAN</option>
                                        
                                        <option 
                                            value="KIRIBATI">KIRIBATI</option>
                                        
                                        <option 
                                            value="KUWAIT">KUWAIT</option>
                                        
                                        <option 
                                            value="LAOS">LAOS</option>
                                        
                                        <option 
                                            value="LESOTHO">LESOTHO</option>
                                        
                                        <option 
                                            value="LETTONIA">LETTONIA</option>
                                        
                                        <option 
                                            value="LIBANO">LIBANO</option>
                                        
                                        <option 
                                            value="LIBERIA">LIBERIA</option>
                                        
                                        <option 
                                            value="LIBIA">LIBIA</option>
                                        
                                        <option 
                                            value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                        
                                        <option 
                                            value="LITUANIA">LITUANIA</option>
                                        
                                        <option 
                                            value="LUSSEMBURGO">LUSSEMBURGO</option>
                                        
                                        <option 
                                            value="MACAO">MACAO</option>
                                        
                                        <option 
                                            value="MACEDONIA">MACEDONIA</option>
                                        
                                        <option 
                                            value="MADAGASCAR">MADAGASCAR</option>
                                        
                                        <option 
                                            value="MADEIRA">MADEIRA</option>
                                        
                                        <option 
                                            value="MALAWI">MALAWI</option>
                                        
                                        <option 
                                            value="MALAYSIA">MALAYSIA</option>
                                        
                                        <option 
                                            value="MALDIVE">MALDIVE</option>
                                        
                                        <option 
                                            value="MALI">MALI</option>
                                        
                                        <option 
                                            value="MALTA">MALTA</option>
                                        
                                        <option 
                                            value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
                                        
                                        <option 
                                            value="MAROCCO">MAROCCO</option>
                                        
                                        <option 
                                            value="MARTINICA">MARTINICA</option>
                                        
                                        <option 
                                            value="MAURITANIA">MAURITANIA</option>
                                        
                                        <option 
                                            value="MAURIZIO">MAURIZIO</option>
                                        
                                        <option 
                                            value="MAYOTTE">MAYOTTE</option>
                                        
                                        <option 
                                            value="MELILLA">MELILLA</option>
                                        
                                        <option 
                                            value="MESSICO">MESSICO</option>
                                        
                                        <option 
                                            value="MICRONESIA">MICRONESIA</option>
                                        
                                        <option 
                                            value="MIDWAY ISOLE">MIDWAY ISOLE</option>
                                        
                                        <option 
                                            value="MOLDAVIA">MOLDAVIA</option>
                                        
                                        <option 
                                            value="MONACO">MONACO</option>
                                        
                                        <option 
                                            value="MONGOLIA">MONGOLIA</option>
                                        
                                        <option 
                                            value="MONTENEGRO">MONTENEGRO</option>
                                        
                                        <option 
                                            value="MONTSERRAT">MONTSERRAT</option>
                                        
                                        <option 
                                            value="MOZAMBICO">MOZAMBICO</option>
                                        
                                        <option 
                                            value="MYANMAR">MYANMAR</option>
                                        
                                        <option 
                                            value="NAURU">NAURU</option>
                                        
                                        <option 
                                            value="NEPAL">NEPAL</option>
                                        
                                        <option 
                                            value="NICARAGUA">NICARAGUA</option>
                                        
                                        <option 
                                            value="NIGER">NIGER</option>
                                        
                                        <option 
                                            value="NIGERIA">NIGERIA</option>
                                        
                                        <option 
                                            value="NIUE - SAVAGE">NIUE - SAVAGE</option>
                                        
                                        <option 
                                            value="NORFOLK ISOLE">NORFOLK ISOLE</option>
                                        
                                        <option 
                                            value="NORVEGIA">NORVEGIA</option>
                                        
                                        <option 
                                            value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
                                        
                                        <option 
                                            value="NUOVA ZELANDA">NUOVA ZELANDA</option>
                                        
                                        <option 
                                            value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
                                        
                                        <option 
                                            value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
                                        
                                        <option 
                                            value="OMAN">OMAN</option>
                                        
                                        <option 
                                            value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
                                        
                                        <option 
                                            value="PAKISTAN">PAKISTAN</option>
                                        
                                        <option 
                                            value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
                                        
                                        <option 
                                            value="PANAMA">PANAMA</option>
                                        
                                        <option 
                                            value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
                                        
                                        <option 
                                            value="PARAGUAY">PARAGUAY</option>
                                        
                                        <option 
                                            value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
                                        
                                        <option 
                                            value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
                                        
                                        <option 
                                            value="PERU'">PERU'</option>
                                        
                                        <option 
                                            value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
                                        
                                        <option 
                                            value="POLONIA">POLONIA</option>
                                        
                                        <option 
                                            value="PORTOGALLO">PORTOGALLO</option>
                                        
                                        <option 
                                            value="PORTORICO">PORTORICO</option>
                                        
                                        <option 
                                            value="QATAR">QATAR</option>
                                        
                                        <option 
                                            value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
                                        
                                        <option 
                                            value="REGNO UNITO">REGNO UNITO</option>
                                        
                                        <option 
                                            value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
                                        
                                        <option 
                                            value="REPUBBLICA CECA">REPUBBLICA CECA</option>
                                        
                                        <option 
                                            value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
                                        
                                        <option 
                                            value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
                                        
                                        <option 
                                            value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
                                        
                                        <option 
                                            value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
                                        
                                        <option 
                                            value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
                                        
                                        <option 
                                            value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
                                        
                                        <option 
                                            value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
                                        
                                        <option 
                                            value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
                                        
                                        <option 
                                            value="REUNION">REUNION</option>
                                        
                                        <option 
                                            value="ROMANIA">ROMANIA</option>
                                        
                                        <option 
                                            value="RUANDA">RUANDA</option>
                                        
                                        <option 
                                            value="RUSSIA">RUSSIA</option>
                                        
                                        <option 
                                            value="S.ELENA">S.ELENA</option>
                                        
                                        <option 
                                            value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
                                        
                                        <option 
                                            value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
                                        
                                        <option 
                                            value="SAINT LUCIA">SAINT LUCIA</option>
                                        
                                        <option 
                                            value="SALOMONE">SALOMONE</option>
                                        
                                        <option 
                                            value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
                                        
                                        <option 
                                            value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
                                        
                                        <option 
                                            value="SEICELLE">SEICELLE</option>
                                        
                                        <option 
                                            value="SENEGAL">SENEGAL</option>
                                        
                                        <option 
                                            value="SERBIA">SERBIA</option>
                                        
                                        <option 
                                            value="SHARJAH">SHARJAH</option>
                                        
                                        <option 
                                            value="SIERRA LEONE">SIERRA LEONE</option>
                                        
                                        <option 
                                            value="SINGAPORE">SINGAPORE</option>
                                        
                                        <option 
                                            value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
                                        
                                        <option 
                                            value="SIRIA">SIRIA</option>
                                        
                                        <option 
                                            value="SLOVACCHIA">SLOVACCHIA</option>
                                        
                                        <option 
                                            value="SLOVENIA">SLOVENIA</option>
                                        
                                        <option 
                                            value="SOMALIA">SOMALIA</option>
                                        
                                        <option 
                                            value="SPAGNA">SPAGNA</option>
                                        
                                        <option 
                                            value="SRI LANKA">SRI LANKA</option>
                                        
                                        <option 
                                            value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
                                        
                                        <option 
                                            value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
                                        
                                        <option 
                                            value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
                                        
                                        <option 
                                            value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
                                        
                                        <option 
                                            value="SUDAN">SUDAN</option>
                                        
                                        <option 
                                            value="SURINAME">SURINAME</option>
                                        
                                        <option 
                                            value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
                                        
                                        <option 
                                            value="SVEZIA">SVEZIA</option>
                                        
                                        <option 
                                            value="SVIZZERA">SVIZZERA</option>
                                        
                                        <option 
                                            value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
                                        
                                        <option 
                                            value="TAGIKISTAN">TAGIKISTAN</option>
                                        
                                        <option 
                                            value="TANZANIA">TANZANIA</option>
                                        
                                        <option 
                                            value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
                                        
                                        <option 
                                            value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
                                        
                                        <option 
                                            value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
                                        
                                        <option 
                                            value="THAILANDIA">THAILANDIA</option>
                                        
                                        <option 
                                            value="TIMOR">TIMOR</option>
                                        
                                        <option 
                                            value="TOGO">TOGO</option>
                                        
                                        <option 
                                            value="TOKELAU">TOKELAU</option>
                                        
                                        <option 
                                            value="TONGA">TONGA</option>
                                        
                                        <option 
                                            value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
                                        
                                        <option 
                                            value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
                                        
                                        <option 
                                            value="TUNISIA">TUNISIA</option>
                                        
                                        <option 
                                            value="TURCHIA">TURCHIA</option>
                                        
                                        <option 
                                            value="TURKMENISTAN">TURKMENISTAN</option>
                                        
                                        <option 
                                            value="TURKS E CAICOS">TURKS E CAICOS</option>
                                        
                                        <option 
                                            value="TUVALU">TUVALU</option>
                                        
                                        <option 
                                            value="UCRAINA">UCRAINA</option>
                                        
                                        <option 
                                            value="UGANDA">UGANDA</option>
                                        
                                        <option 
                                            value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
                                        
                                        <option 
                                            value="UNGHERIA">UNGHERIA</option>
                                        
                                        <option 
                                            value="URUGUAY">URUGUAY</option>
                                        
                                        <option 
                                            value="UZBEKISTAN">UZBEKISTAN</option>
                                        
                                        <option 
                                            value="VANUATU">VANUATU</option>
                                        
                                        <option 
                                            value="VENEZUELA">VENEZUELA</option>
                                        
                                        <option 
                                            value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
                                        
                                        <option 
                                            value="VIETNAM">VIETNAM</option>
                                        
                                        <option 
                                            value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
                                        
                                        <option 
                                            value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
                                        
                                        <option 
                                            value="YEMEN">YEMEN</option>
                                        
                                        <option 
                                            value="ZAMBIA">ZAMBIA</option>
                                        
                                        <option 
                                            value="ZIMBABWE">ZIMBABWE</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="provincia_emissione_int1">Provincia
                                        di rilascio*</label> <select
                                        name="provincia_emissione_int1"
                                        id="provincia_emissione_int1"
                                        class="form-control indProv">
                                        <option value="">seleziona</option>
                                    </select>
                                </div>
                            </div>
                            <div class="spacer-no-border hidden-xs">&nbsp;</div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="comune_emissione_int1"
                                        data-modulo="doc-comune">Comune di rilascio*</label> <select
                                        name="comune_emissione_int1"
                                        id="comune_emissione_int1"
                                        class="form-control indCom">
                                        <option value="">seleziona</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- INDIRIZZO DI RESIDENZA -->
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12 form-section-title">
                            <h4>3.Indica i recapiti</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 form-group">
                            <label for="qualif_int1">Indirizzo di
                                residenza*</label>
                            <div class="input input-inline input-address">
                                <select name="qualif_int1" id="qualif_int1"
                                    class="textinput form-control IndTipo ignore">
                                    <option value="">seleziona</option>
                                    
                                    <option 
                                        value="Via">Via</option>
                                    
                                    <option 
                                        value="Viale">Viale</option>
                                    
                                    <option 
                                        value="Corso">Corso</option>
                                    
                                    <option 
                                        value="Piazza">Piazza</option>
                                    
                                    <option 
                                        value="Piazzale">Piazzale</option>
                                    
                                    <option 
                                        value="Strada">Strada</option>
                                    
                                    <option 
                                        value="Stretto">Stretto</option>
                                    
                                    <option 
                                        value="Contrada">Contrada</option>
                                    
                                    <option 
                                        value="Vicolo">Vicolo</option>
                                    
                                    <option 
                                        value="Localit&agrave;">Localit&agrave;</option>
                                    
                                    <option 
                                        value="Largo">Largo</option>
                                    
                                    <option 
                                        value="Vico">Vico</option>
                                    
                                    <option 
                                        value="Altro">Altro</option>
                                    
                                </select> <input type="text" name="via_int1"
                                    id="via_int1" value=""
                                    class="textinput form-control IndNome ignore"> <input
                                    type="text" name="ind_int1" id="ind_int1"
                                    class="hidden-input" value="">
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="civico_int1">Numero*</label> <input
                                type="text" name="civico_int1"
                                id="civico_int1" value=""
                                class="textinput form-control" maxlength="8">
                        </div>
                    </div>
                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="recapPrinc" data-tit="1">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="provincia_int1">Provincia di
                                    residenza*</label> <select name="provincia_int1"
                                    id="provincia_int1" class="form-control indProv">
                                    <option value="">seleziona</option>
                                    
                                    <option 
                                        value="AG">AG</option>
                                    
                                    <option 
                                        value="AL">AL</option>
                                    
                                    <option 
                                        value="AN">AN</option>
                                    
                                    <option 
                                        value="AO">AO</option>
                                    
                                    <option 
                                        value="AP">AP</option>
                                    
                                    <option 
                                        value="AQ">AQ</option>
                                    
                                    <option 
                                        value="AR">AR</option>
                                    
                                    <option 
                                        value="AT">AT</option>
                                    
                                    <option 
                                        value="AV">AV</option>
                                    
                                    <option 
                                        value="BA">BA</option>
                                    
                                    <option 
                                        value="BG">BG</option>
                                    
                                    <option 
                                        value="BI">BI</option>
                                    
                                    <option 
                                        value="BL">BL</option>
                                    
                                    <option 
                                        value="BN">BN</option>
                                    
                                    <option 
                                        value="BO">BO</option>
                                    
                                    <option 
                                        value="BR">BR</option>
                                    
                                    <option 
                                        value="BS">BS</option>
                                    
                                    <option 
                                        value="BT">BT</option>
                                    
                                    <option 
                                        value="BZ">BZ</option>
                                    
                                    <option 
                                        value="CA">CA</option>
                                    
                                    <option 
                                        value="CB">CB</option>
                                    
                                    <option 
                                        value="CE">CE</option>
                                    
                                    <option 
                                        value="CH">CH</option>
                                    
                                    <option 
                                        value="CL">CL</option>
                                    
                                    <option 
                                        value="CN">CN</option>
                                    
                                    <option 
                                        value="CO">CO</option>
                                    
                                    <option 
                                        value="CR">CR</option>
                                    
                                    <option 
                                        value="CS">CS</option>
                                    
                                    <option 
                                        value="CT">CT</option>
                                    
                                    <option 
                                        value="CZ">CZ</option>
                                    
                                    <option 
                                        value="EN">EN</option>
                                    
                                    <option 
                                        value="FC">FC</option>
                                    
                                    <option 
                                        value="FE">FE</option>
                                    
                                    <option 
                                        value="FG">FG</option>
                                    
                                    <option 
                                        value="FI">FI</option>
                                    
                                    <option 
                                        value="FM">FM</option>
                                    
                                    <option 
                                        value="FR">FR</option>
                                    
                                    <option 
                                        value="GE">GE</option>
                                    
                                    <option 
                                        value="GO">GO</option>
                                    
                                    <option 
                                        value="GR">GR</option>
                                    
                                    <option 
                                        value="IM">IM</option>
                                    
                                    <option 
                                        value="IS">IS</option>
                                    
                                    <option 
                                        value="KR">KR</option>
                                    
                                    <option 
                                        value="LC">LC</option>
                                    
                                    <option 
                                        value="LE">LE</option>
                                    
                                    <option 
                                        value="LI">LI</option>
                                    
                                    <option 
                                        value="LO">LO</option>
                                    
                                    <option 
                                        value="LT">LT</option>
                                    
                                    <option 
                                        value="LU">LU</option>
                                    
                                    <option 
                                        value="MB">MB</option>
                                    
                                    <option 
                                        value="MC">MC</option>
                                    
                                    <option 
                                        value="ME">ME</option>
                                    
                                    <option 
                                        value="MI">MI</option>
                                    
                                    <option 
                                        value="MN">MN</option>
                                    
                                    <option 
                                        value="MO">MO</option>
                                    
                                    <option 
                                        value="MS">MS</option>
                                    
                                    <option 
                                        value="MT">MT</option>
                                    
                                    <option 
                                        value="NA">NA</option>
                                    
                                    <option 
                                        value="NO">NO</option>
                                    
                                    <option 
                                        value="NU">NU</option>
                                    
                                    <option 
                                        value="OR">OR</option>
                                    
                                    <option 
                                        value="PA">PA</option>
                                    
                                    <option 
                                        value="PC">PC</option>
                                    
                                    <option 
                                        value="PD">PD</option>
                                    
                                    <option 
                                        value="PE">PE</option>
                                    
                                    <option 
                                        value="PG">PG</option>
                                    
                                    <option 
                                        value="PI">PI</option>
                                    
                                    <option 
                                        value="PN">PN</option>
                                    
                                    <option 
                                        value="PO">PO</option>
                                    
                                    <option 
                                        value="PR">PR</option>
                                    
                                    <option 
                                        value="PT">PT</option>
                                    
                                    <option 
                                        value="PU">PU</option>
                                    
                                    <option 
                                        value="PV">PV</option>
                                    
                                    <option 
                                        value="PZ">PZ</option>
                                    
                                    <option 
                                        value="RA">RA</option>
                                    
                                    <option 
                                        value="RC">RC</option>
                                    
                                    <option 
                                        value="RE">RE</option>
                                    
                                    <option 
                                        value="RG">RG</option>
                                    
                                    <option 
                                        value="RI">RI</option>
                                    
                                    <option 
                                        value="RM">RM</option>
                                    
                                    <option 
                                        value="RN">RN</option>
                                    
                                    <option 
                                        value="RO">RO</option>
                                    
                                    <option 
                                        value="SA">SA</option>
                                    
                                    <option 
                                        value="SI">SI</option>
                                    
                                    <option 
                                        value="SO">SO</option>
                                    
                                    <option 
                                        value="SP">SP</option>
                                    
                                    <option 
                                        value="SR">SR</option>
                                    
                                    <option 
                                        value="SS">SS</option>
                                    
                                    <option 
                                        value="SU">SU</option>
                                    
                                    <option 
                                        value="SV">SV</option>
                                    
                                    <option 
                                        value="TA">TA</option>
                                    
                                    <option 
                                        value="TE">TE</option>
                                    
                                    <option 
                                        value="TN">TN</option>
                                    
                                    <option 
                                        value="TO">TO</option>
                                    
                                    <option 
                                        value="TP">TP</option>
                                    
                                    <option 
                                        value="TR">TR</option>
                                    
                                    <option 
                                        value="TS">TS</option>
                                    
                                    <option 
                                        value="TV">TV</option>
                                    
                                    <option 
                                        value="UD">UD</option>
                                    
                                    <option 
                                        value="VA">VA</option>
                                    
                                    <option 
                                        value="VB">VB</option>
                                    
                                    <option 
                                        value="VC">VC</option>
                                    
                                    <option 
                                        value="VE">VE</option>
                                    
                                    <option 
                                        value="VI">VI</option>
                                    
                                    <option 
                                        value="VR">VR</option>
                                    
                                    <option 
                                        value="VT">VT</option>
                                    
                                    <option 
                                        value="VV">VV</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="spacer-no-border hidden-xs">&nbsp;</div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="comune_int1">Comune di
                                    residenza*</label> <select name="comune_int1"
                                    id="comune_int1" class="form-control indCom">
                                    <option value="">seleziona</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="cap_int1">CAP di residenza*</label> 
                                <input type="text" name="cap_int1"  
                                    id="cap_int1"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="spacer-no-border hidden-xs">&nbsp;</div>
                    <div class="panel-group panel-sub" id="accordion3_int1"
                        role="tablist" aria-multiselectable="true">

                        <!-- INDIRIZZO DI CORRISPONDENZA -->
                        
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab"
                                id="headingOneC_int1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#!"
                                        data-target="#collapse_int1C" aria-expanded="true"
                                        aria-controls="collapse_int1C" class="collapsed">
                                        Aggiungi un indirizzo di corrispondenza </a>
                                </h4>
                                <p>
                                    Se preferisci ricevere la nostra corrispondenza a un <strong>indirizzo
                                        diverso</strong> dalla tua residenza, inseriscilo di seguito. A
                                    questo indirizzo invieremo, per tutti gli intestatari del
                                    conto, tutte le comunicazioni cartacee.
                                </p>
                            </div>
                            <div id="collapse_int1C"
                                class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOneC_int1">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-9 form-group">
                                            <label for="qualif_recapito_int1">Indirizzo
                                                di corrispondenza</label>
                                            <div class="input input-inline input-address">
                                                <select name="qualif_recapito_int1"
                                                    id="qualif_recapito_int1"
                                                    class="textinput form-control IndTipo ignore">
                                                    <option value="">seleziona</option>
                                                    
                                                    <option
                                                        
                                                        value="Via">Via</option>
                                                    
                                                    <option
                                                        
                                                        value="Viale">Viale</option>
                                                    
                                                    <option
                                                        
                                                        value="Corso">Corso</option>
                                                    
                                                    <option
                                                        
                                                        value="Piazza">Piazza</option>
                                                    
                                                    <option
                                                        
                                                        value="Piazzale">Piazzale</option>
                                                    
                                                    <option
                                                        
                                                        value="Strada">Strada</option>
                                                    
                                                    <option
                                                        
                                                        value="Stretto">Stretto</option>
                                                    
                                                    <option
                                                        
                                                        value="Contrada">Contrada</option>
                                                    
                                                    <option
                                                        
                                                        value="Vicolo">Vicolo</option>
                                                    
                                                    <option
                                                        
                                                        value="Localit&agrave;">Localit&agrave;</option>
                                                    
                                                    <option
                                                        
                                                        value="Largo">Largo</option>
                                                    
                                                    <option
                                                        
                                                        value="Vico">Vico</option>
                                                    
                                                    <option
                                                        
                                                        value="Altro">Altro</option>
                                                    
                                                </select> <input type="text" name="via_recapito_int1"
                                                    id="via_recapito_int1" value=""
                                                    class="textinput form-control IndNome ignore">
                                                <input type="text" name="ind_recapito_int1"
                                                    id="ind_recapito_int1" class="hidden-input"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="civico_recapito_int1">Numero</label>
                                            <input type="text" name="civico_recapito_int1"
                                                id="civico_recapito_int1"
                                                value=""
                                                class="textinput form-control" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="spacer-no-border hidden-xs">&nbsp;</div>

                                    <div class="recapCorr" data-tit="1">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="provincia_recapito_int1">Provincia</label>
                                                <select name="provincia_recapito_int1"
                                                    id="provincia_recapito_int1"
                                                    class="form-control indProv">
                                                    <option value="">seleziona</option>
                                                    
                                                    <option
                                                        
                                                        value="AG">AG</option>
                                                    
                                                    <option
                                                        
                                                        value="AL">AL</option>
                                                    
                                                    <option
                                                        
                                                        value="AN">AN</option>
                                                    
                                                    <option
                                                        
                                                        value="AO">AO</option>
                                                    
                                                    <option
                                                        
                                                        value="AP">AP</option>
                                                    
                                                    <option
                                                        
                                                        value="AQ">AQ</option>
                                                    
                                                    <option
                                                        
                                                        value="AR">AR</option>
                                                    
                                                    <option
                                                        
                                                        value="AT">AT</option>
                                                    
                                                    <option
                                                        
                                                        value="AV">AV</option>
                                                    
                                                    <option
                                                        
                                                        value="BA">BA</option>
                                                    
                                                    <option
                                                        
                                                        value="BG">BG</option>
                                                    
                                                    <option
                                                        
                                                        value="BI">BI</option>
                                                    
                                                    <option
                                                        
                                                        value="BL">BL</option>
                                                    
                                                    <option
                                                        
                                                        value="BN">BN</option>
                                                    
                                                    <option
                                                        
                                                        value="BO">BO</option>
                                                    
                                                    <option
                                                        
                                                        value="BR">BR</option>
                                                    
                                                    <option
                                                        
                                                        value="BS">BS</option>
                                                    
                                                    <option
                                                        
                                                        value="BT">BT</option>
                                                    
                                                    <option
                                                        
                                                        value="BZ">BZ</option>
                                                    
                                                    <option
                                                        
                                                        value="CA">CA</option>
                                                    
                                                    <option
                                                        
                                                        value="CB">CB</option>
                                                    
                                                    <option
                                                        
                                                        value="CE">CE</option>
                                                    
                                                    <option
                                                        
                                                        value="CH">CH</option>
                                                    
                                                    <option
                                                        
                                                        value="CL">CL</option>
                                                    
                                                    <option
                                                        
                                                        value="CN">CN</option>
                                                    
                                                    <option
                                                        
                                                        value="CO">CO</option>
                                                    
                                                    <option
                                                        
                                                        value="CR">CR</option>
                                                    
                                                    <option
                                                        
                                                        value="CS">CS</option>
                                                    
                                                    <option
                                                        
                                                        value="CT">CT</option>
                                                    
                                                    <option
                                                        
                                                        value="CZ">CZ</option>
                                                    
                                                    <option
                                                        
                                                        value="EN">EN</option>
                                                    
                                                    <option
                                                        
                                                        value="FC">FC</option>
                                                    
                                                    <option
                                                        
                                                        value="FE">FE</option>
                                                    
                                                    <option
                                                        
                                                        value="FG">FG</option>
                                                    
                                                    <option
                                                        
                                                        value="FI">FI</option>
                                                    
                                                    <option
                                                        
                                                        value="FM">FM</option>
                                                    
                                                    <option
                                                        
                                                        value="FR">FR</option>
                                                    
                                                    <option
                                                        
                                                        value="GE">GE</option>
                                                    
                                                    <option
                                                        
                                                        value="GO">GO</option>
                                                    
                                                    <option
                                                        
                                                        value="GR">GR</option>
                                                    
                                                    <option
                                                        
                                                        value="IM">IM</option>
                                                    
                                                    <option
                                                        
                                                        value="IS">IS</option>
                                                    
                                                    <option
                                                        
                                                        value="KR">KR</option>
                                                    
                                                    <option
                                                        
                                                        value="LC">LC</option>
                                                    
                                                    <option
                                                        
                                                        value="LE">LE</option>
                                                    
                                                    <option
                                                        
                                                        value="LI">LI</option>
                                                    
                                                    <option
                                                        
                                                        value="LO">LO</option>
                                                    
                                                    <option
                                                        
                                                        value="LT">LT</option>
                                                    
                                                    <option
                                                        
                                                        value="LU">LU</option>
                                                    
                                                    <option
                                                        
                                                        value="MB">MB</option>
                                                    
                                                    <option
                                                        
                                                        value="MC">MC</option>
                                                    
                                                    <option
                                                        
                                                        value="ME">ME</option>
                                                    
                                                    <option
                                                        
                                                        value="MI">MI</option>
                                                    
                                                    <option
                                                        
                                                        value="MN">MN</option>
                                                    
                                                    <option
                                                        
                                                        value="MO">MO</option>
                                                    
                                                    <option
                                                        
                                                        value="MS">MS</option>
                                                    
                                                    <option
                                                        
                                                        value="MT">MT</option>
                                                    
                                                    <option
                                                        
                                                        value="NA">NA</option>
                                                    
                                                    <option
                                                        
                                                        value="NO">NO</option>
                                                    
                                                    <option
                                                        
                                                        value="NU">NU</option>
                                                    
                                                    <option
                                                        
                                                        value="OR">OR</option>
                                                    
                                                    <option
                                                        
                                                        value="PA">PA</option>
                                                    
                                                    <option
                                                        
                                                        value="PC">PC</option>
                                                    
                                                    <option
                                                        
                                                        value="PD">PD</option>
                                                    
                                                    <option
                                                        
                                                        value="PE">PE</option>
                                                    
                                                    <option
                                                        
                                                        value="PG">PG</option>
                                                    
                                                    <option
                                                        
                                                        value="PI">PI</option>
                                                    
                                                    <option
                                                        
                                                        value="PN">PN</option>
                                                    
                                                    <option
                                                        
                                                        value="PO">PO</option>
                                                    
                                                    <option
                                                        
                                                        value="PR">PR</option>
                                                    
                                                    <option
                                                        
                                                        value="PT">PT</option>
                                                    
                                                    <option
                                                        
                                                        value="PU">PU</option>
                                                    
                                                    <option
                                                        
                                                        value="PV">PV</option>
                                                    
                                                    <option
                                                        
                                                        value="PZ">PZ</option>
                                                    
                                                    <option
                                                        
                                                        value="RA">RA</option>
                                                    
                                                    <option
                                                        
                                                        value="RC">RC</option>
                                                    
                                                    <option
                                                        
                                                        value="RE">RE</option>
                                                    
                                                    <option
                                                        
                                                        value="RG">RG</option>
                                                    
                                                    <option
                                                        
                                                        value="RI">RI</option>
                                                    
                                                    <option
                                                        
                                                        value="RM">RM</option>
                                                    
                                                    <option
                                                        
                                                        value="RN">RN</option>
                                                    
                                                    <option
                                                        
                                                        value="RO">RO</option>
                                                    
                                                    <option
                                                        
                                                        value="SA">SA</option>
                                                    
                                                    <option
                                                        
                                                        value="SI">SI</option>
                                                    
                                                    <option
                                                        
                                                        value="SO">SO</option>
                                                    
                                                    <option
                                                        
                                                        value="SP">SP</option>
                                                    
                                                    <option
                                                        
                                                        value="SR">SR</option>
                                                    
                                                    <option
                                                        
                                                        value="SS">SS</option>
                                                    
                                                    <option
                                                        
                                                        value="SU">SU</option>
                                                    
                                                    <option
                                                        
                                                        value="SV">SV</option>
                                                    
                                                    <option
                                                        
                                                        value="TA">TA</option>
                                                    
                                                    <option
                                                        
                                                        value="TE">TE</option>
                                                    
                                                    <option
                                                        
                                                        value="TN">TN</option>
                                                    
                                                    <option
                                                        
                                                        value="TO">TO</option>
                                                    
                                                    <option
                                                        
                                                        value="TP">TP</option>
                                                    
                                                    <option
                                                        
                                                        value="TR">TR</option>
                                                    
                                                    <option
                                                        
                                                        value="TS">TS</option>
                                                    
                                                    <option
                                                        
                                                        value="TV">TV</option>
                                                    
                                                    <option
                                                        
                                                        value="UD">UD</option>
                                                    
                                                    <option
                                                        
                                                        value="VA">VA</option>
                                                    
                                                    <option
                                                        
                                                        value="VB">VB</option>
                                                    
                                                    <option
                                                        
                                                        value="VC">VC</option>
                                                    
                                                    <option
                                                        
                                                        value="VE">VE</option>
                                                    
                                                    <option
                                                        
                                                        value="VI">VI</option>
                                                    
                                                    <option
                                                        
                                                        value="VR">VR</option>
                                                    
                                                    <option
                                                        
                                                        value="VT">VT</option>
                                                    
                                                    <option
                                                        
                                                        value="VV">VV</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="spacer-no-border hidden-xs">&nbsp;</div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="comune_recapito_int1">Comune</label>
                                                <select name="comune_recapito_int1"
                                                    id="comune_recapito_int1"
                                                    class="form-control indCom">
                                                    <option value="">seleziona</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="cap_recapito_int1">CAP</label> 
                                                <input type="text"
                                                    name="cap_recapito_int1"
                                                    id="cap_recapito_int1" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        



                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab"
                                id="headingOneE_int1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#!"
                                        data-target="#collapse_int1E" aria-expanded="true"
                                        aria-controls="collapse_int1E" class="collapsed">
                                        Aggiungi altri recapiti </a>
                                    <p>Puoi aggiungere un ulteriore numero di telefono.</p>
                                </h4>
                            </div>
                            <div id="collapse_int1E"
                                class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOneE_int1">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 form-group input-tel">
                                            <label for="telefono_int1" class="labelTooltip">Numero
                                                di telefono fisso di casa</label>
                                            <div class="input input-inline">
                                                <input type="tel" maxlength="5"
                                                    name="prefisso_int1" id="prefisso_int1"
                                                    value="0039"
                                                    class="textinput form-control numPref ignore"
                                                    placeholder="Prefisso"> <input type="tel"
                                                    maxlength="15" name="telefono_int1"
                                                    id="telefono_int1" value=""
                                                    class="textinput form-control numNaz ignore"
                                                    placeholder="Numero"> <input type="tel"
                                                    name="tel_int1" id="tel_int1"
                                                    class="hidden-input" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-group input-tel">
                                            <label for="telefono_2_int1" class="labelTooltip">Numero
                                                di telefono fisso dell'ufficio</label>
                                            <div class="input input-inline">
                                                <input type="tel" maxlength="5"
                                                    name="prefisso_2_int1"
                                                    id="prefisso_2_int1"
                                                    value="0039"
                                                    class="textinput form-control numPref ignore"
                                                    placeholder="Prefisso"> <input type="tel"
                                                    maxlength="15" name="telefono_2_int1"
                                                    id="telefono_2_int1"
                                                    value=""
                                                    class="textinput form-control numNaz ignore"
                                                    placeholder="Numero"> <input type="tel"
                                                    name="tel_2_int1" id="tel_2_int1"
                                                    class="hidden-input" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="spacer-no-border hidden-xs">&nbsp;</div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 form-section-title">
                            <h4>4. Sei già un cliente del Banco BPM?</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Se sei <strong>già cliente</strong> del Banco BPM non è necessario
                                seguire la procedura di identificazione: <strong>verificheremo</strong>
                                direttamente noi i tuoi dati, confrontandoli con quelli
                                presenti nei nostri <strong>archivi</strong>.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 form-group">
                            <div class="radio radio-inline">
                                <input type="radio" name="isbpmcliente_int1"
                                    id="isbpmcliente_int1a" value="SI"
                                    > <label
                                    for="isbpmcliente_int1a">S&igrave;</label>
                            </div>
                        </div>
                        <div class="col-sm-10 form-group">
                            <div class="radio radio-inline">
                                <input type="radio" name="isbpmcliente_int1"
                                    id="isbpmcliente_int1b" value="NO"
                                    > <label
                                    for="isbpmcliente_int1b">No</label>
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
                            <label for="titolo_studio_int1">Titolo di
                                studio</label> <select name="titolo_studio_int1"
                                id="titolo_studio_int1" class="form-control">
                                <option selected
                                    value="">seleziona</option>
                                <option
                                    
                                    value="Laurea in discipline economiche">Laurea in
                                    discipline economiche</option>
                                <option
                                    
                                    value="Laurea">Laurea</option>
                                <option
                                    
                                    value="Diploma">Diploma</option>
                                <option
                                    
                                    value="Licenza media">Licenza media</option>
                                <option
                                    
                                    value="Licenza elementare">Licenza elementare</option>
                                <option
                                    
                                    value="Nessuno">Nessuno</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label for="come_conosciuto_int1">Come hai
                                conosciuto Webank</label> <select name="come_conosce_int1"
                                id="come_conosce_int1" class="form-control">
                                <option selected
                                    value="">seleziona</option>
                                <option
                                    
                                    value="Amici">Amici</option>
                                <option
                                    
                                    value="Colleghi">Colleghi</option>
                                <option
                                    
                                    value="Filiale Banco BPM">Filiale Banco BPM</option>
                                <option
                                    
                                    value="Promotore Finanziario">Promotore
                                    Finanziario</option>
                                <option 
                                    value="TV">TV</option>
                                <option
                                    
                                    value="Internet">Internet</option>
                                <option
                                    
                                    value="Stampa">Stampa</option>
                                <option
                                    
                                    value="Radio">Radio</option>
                                <option
                                    
                                    value="Motori di ricerca">Motori di ricerca</option>
                                <option
                                    
                                    value="Altro">Altro</option>
                            </select>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
	</div>
    <!-- Template per aggiungere residenze fiscali FATCA -->
	<textarea style="display: none" id="templateFatca">
		    <div class="fatcaBox" data-res="{1}">
		        <div class="row fatcaFieldButton">
		            <div class="col-md-6 form-group">
		                <label for="residenzaFiscale{1}_int{0}"
										class="labelTooltip"></label>
		                <a href="javascript:;" data-toggle="tooltip" title=""
										id="ttRes{0}_{1}" class="icoinfo"
										data-original-title="Il regime fiscale applicato sarà quello dell'Italia. Questa informazione è rilevante solo ai fini FATCA e CRS. Se il cliente dichiara un Paese estero come «Altro Paese di residenza fiscale», la banca è tenuta, ai sensi delle normative FATCA e CRS, a segnalarlo con frequenza annuale all'Agenzia delle Entrate."></a>
		                <select name="sel_residenzaFiscale{1}_int{0}"
										id="sel_residenzaFiscale{1}_int{0}" class="form-control">
							<option value="">seleziona</option>
						</select>
						<input type="hidden" name="residenzaFiscale{1}_int{0}"
										id="residenzaFiscale{1}_int{0}" value="">
		            </div>
		            <div class="col-md-6 form-group">
		                <label for="tin{1}_int{0}">Codice fiscale estero</label>
		                <input type="text" name="TIN{1}_int{0}"
										id="TIN{1}_int{0}" value="" maxlength="20"
										class="textinput form-control" disabled>
		            </div>
		        </div>
		        <div class="spacer-no-border">&nbsp;</div>
		        <!--  
		        <div class="row fatcaUploadButton">
		            <div class="col-xs-12 form-group">
		                <div class="form-group">
		                    <label><a href="#!" class="lbl-file-group">Carica codice fiscale estero</a></label>
		                    <div class="input-group btn-file-group" style="display:none;">
		                        <span class="input-group-btn">
		                            <span class="btn btn-file">
		                                Seleziona<input type="file" id="fileTIN{1}_int{0}" name="fileTIN{1}_int{0}" accept=".pdf,.jpg,.jpeg,.png">
		                            </span>
		                        </span>
		                        <input type="text" class="form-control btn-file-name" readonly="">
		                    </div>
		                </div>
		            </div>
		        </div> 
		        -->
		        <div class="spacer-no-border">&nbsp;</div>
		        <div class="row fatcaLinkButton">
		            <div class="col-md-6 form-group">
		                <a href="javascript:;" class="fieldButton remove">
		                    <span>Elimina
		                        <span class="labelCounterMeno"></span> residenza fiscale</span>
		                </a>
		            </div>
		            <div class="col-md-6 form-group">
		                <a href="javascript:;"
										class="fieldButton add disabled">
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
			<p class="obbligatorio">
								<br>(*) I campi contrassegnati con l'asterisco sono
								obbligatori
							</p>
		</div>
	</div>
	<hr>
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <a href="/webankpub/aol/step0.do?BV_UseBVCookie=Yes&fromPageName=1&save=true"
                    class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
                <button id="btnSubmit" type="button"
                    class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA
                    E PROSEGUI</button>
            </div>
        </div>
    </div>
</form>
<!-- fine form  -->
<!-- fine contenitore principale  -->
<!-- COLONNA DESTRA -->
			
<!-- Overlay -->
<div class="modal fade" id="alertpromo" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Attenzione</h4>
			</div>
			<div class="modal-body">
				Sei già correntista del Banco BPM.<br>Non &egrave; possibile attivare la promozione/convenzione sul conto, saranno applicate le condizioni standard.
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- Overlay  -->

<!-- Overlay -->
<div class="modal" id="alertusperson" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Attenzione</h4>
			</div>
			<div class="modal-body">
				Ti ricordiamo che se sei un <strong>residente fiscale degli
					Stati Uniti</strong>, occorre indicare USA come altro Paese di residenza
				fiscale e <strong>inserire</strong> il codice fiscale estero
				corrispondente, il <strong>cosiddetto TIN</strong> (Tax
				Identification Number).
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- Overlay  -->

<script type="text/javascript" src="/wbresp/js/aol/statiprovinciecomuni.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step1.js?a=464"></script>

<script type="text/javascript">
$(function(){
	noBack();
	impostaValoriSelect();
	impostaResidenzaFiscale();
	disableForMol();
	
	if(false) {
		$('#presaVisione').val('ok');
		$('#alertpromo').modal('show');	
	}
	
	if(false) {
		$('#presaVisioneUS').val('ok');
		$('#alertusperson').modal('show');	
	}
	
});

function disableForMol() {	
}

function impostaValoriSelect() {
	impostaValoreSelect('stato_nascita_int1', 'ITALIA');
	impostaValoreSelect('stato_emissione_int1', 'ITALIA');
	
}

function impostaResidenzaFiscale() {
	var collapse_int1B =  $('#collapse_int1B');
	//Seconda residenza fiscale
	//Terza residenza fiscale
	//Quarta residenza fiscale
	//Quinta residenza fiscale
}
</script>


