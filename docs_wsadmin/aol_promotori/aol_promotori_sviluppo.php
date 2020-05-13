<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
<title>Webank - Apri conto Webank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="it" />
<meta name="author" content="We@service S.p.a" />
<meta name="description" content="Webank - La banca online dal 1999" />
<meta name="keywords" content="" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" href="/css/aol_promotori.css"></link>
<script type="text/javascript" src="js/common_validation.js"></script>
<script type="text/javascript" src="js/pub_utilities.js"></script>
<script type="text/javascript" src="js/pub_generic.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--<script type="text/javascript" src="/js/provcom.js"></script>-->
<script type="text/javascript" src="js/aolUtils.js"></script>
<script type="text/javascript" src="js/aol_promotori.js"></script>
<script type="text/javascript" src="js/aolPromotori.js"></script>

<script type="text/javascript">
var cgi_script = '/wetools';

function impostaValoriSelect(){
	var numInt = '1';
	
	
		
	
	
	

	checkStato($('stato_nascita_int1').value ,'provincia_nascita_int1','comune_nascita_int1');
	checkStato($('stato_emissione_int1').value ,'provincia_emissione_int1','comune_emissione_int1');
	
	if(numInt > 1){
		
		
		
		

		checkStato($('stato_nascita_int2').value ,'provincia_nascita_int2','comune_nascita_int2');
		checkStato($('stato_emissione_int2').value ,'provincia_emissione_int2','comune_emissione_int2');
	}
	
	if(numInt > 2){
		
		
		
		
		
		
		checkStato($('stato_nascita_int3').value, 'provincia_nascita_int3', 'comune_nascita_int3');
		checkStato($('stato_emissione_int3').value, 'provincia_emissione_int3', 'comune_emissione_int3');
	}
}
</script>
</head>

<body>
	<div id="pagecontainer">

<div id="header">
	<h1>
		<a
			href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span>
		</a>
	</h1>
</div>
<div id="menu">
	<h2>
		<img alt="Richiesta apertura conto"
			src="/img/tt_aperturaconto_small.gif" />
	</h2>
</div>

<div id="content">
<div id="aolcontainer">
<div id="aolleft">



<form id="aol" name="aol" method="post" action="/wetools/aoladmin/AolPromotori.do?step=step2" autocomplete="off">

	<input type="hidden" name="emesso_da_int1" value="" id="emesso_da_int1" class="hidden">
	<input type="hidden" name="emesso_da_int2" value="" id="emesso_da_int2" class="hidden">
	<input type="hidden" name="emesso_da_int3" value="" id="emesso_da_int3" class="hidden">


	<div class="aolblock">
		<h3>Intestazione conto</h3>
		<fieldset class="fullwidth lastrow" id="numeroIntestatari">
			<label><input type="radio" name="num_intestatari" value="1" checked="checked" onclick="showBlocks()" id="num_intestatari_1"><span class="optiontext" style="width:130px">Un intestatario</span></label>
			<label><input type="radio" name="num_intestatari" value="2" onclick="showBlocks()" id="num_intestatari_2"><span class="optiontext" style="width:130px">Due intestatari</span></label>
			<label><input type="radio" name="num_intestatari" value="3" onclick="showBlocks()" id="num_intestatari_3"><span class="optiontext" style="width:130px">Tre intestatari</span></label>
		</fieldset>
	</div>
	
	<div class="aolblock">
		<h3>Codici per convenzioni e promozioni</h3>
		
		<fieldset>
			<span class="label">Codice convenzione</span>
			<input type="text" name="cod_prom_conv" maxlength="10" value="" onclick="removeOpt(this,'opzionale')" id="cod_prom_conv" class="opzionale">
			<span class="errortext">Verifica</span>
		</fieldset>

		<fieldset>
			<span class="label">Codice presentatore</span>
			<input type="text" name="cod_presentatore" maxlength="18" value="" onclick="removeOpt(this,'opzionale')" id="cod_presentatore" class="opzionale">
			<span class="errortext">Verifica</span>
		</fieldset>

		<fieldset class="lastrow">
			<span class="label">Codice promotore</span>
			<input type="text" name="cod_promotore" maxlength="10" value="90051" onclick="removeOpt(this,'opzionale')" disabled="disabled" id="cod_promotore" class="">
			<span class="errortext">Verifica</span>
		</fieldset>
		
	</div>

	<div class="aolAcc expanded" id="primoIntestatario">
	
	<div class="aolAccTop">
		<a class="aolAccTitle" id="intestatario1" onclick="switchExp(this,true);setViewElement(this);" href="javascript:;" title="Espandi">
			<span class="titoloAcc">Intestatario 1</span>
			<span class="accButt" ></span>
			<span class="errortext">Compila</span>
		</a>
	</div>
	
		<div class="aolAccContent">
	
	<div class="aolblock">
			<h3>Dati anagrafici intestatario</h3>
	
			<fieldset>
				<span class="label">Nome*</span>
				<input type="text" name="nome_int1" value="" id="nome_int1">
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Cognome*</span>
				<input type="text" name="cognome_int1" value="" id="cognome_int1">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width: 183px;">
				<span class="label">Data di nascita*</span>
				<div id="divDataNascita1">
				<div class="fieldblock">
					<input type="text" name="gg_nascita_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int1,'gg', 2)" id="gg_nascita_int1" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="mm_nascita_int1" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int1,'mm', 2)" id="mm_nascita_int1" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="aa_nascita_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" id="aa_nascita_int1" style="width:50px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
				</div>
				<span class="errortext"></span>
			</fieldset>
	
			<fieldset style="width:104px">
				<span class="label">Sesso*</span>
				<label style="width:33px;"><input type="radio" name="sesso_int1" value="M" id="sesso_int1"><span class="optiontext">M</span></label>
				<label style="width:30px;"><input type="radio" name="sesso_int1" value="F" id="sesso_int1"><span class="optiontext">F</span></label>
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Codice fiscale*</span>
				<input type="text" name="cod_fiscale_int1" maxlength="16" value="" id="cod_fiscale_int1">
				<script type="text/javascript" defer="defer">setCounterOnField("cod_fiscale_int1",16);</script>
				<span class="errortext">Compila</span>
			</fieldset>
			
			<br class="clear" />
	
			<fieldset class="lastrow">
				<span class="label">Email*</span>
				<input type="text" name="mail_int1" value="" id="mail_int1">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset class="lastrow">
				<span class="label">Numero cellulare*<a onmouseover="showGreenToolTip(this, 'Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt="" /></a></span>
				
				<div class="fieldblock">
					<input type="text" name="prefisso_3_int1" maxlength="3" value="" onkeyup="nextFocus(this, telefono_3_int1,'',3)" id="prefisso_3_int1" style="width:50px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<input type="text" name="telefono_3_int1" maxlength="7" value="" id="telefono_3_int1" style="width:60px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<select name="operatore_int1" id="operatore_int1" style="width:116px" class="inputStep2 altri"><option value="">operatore</option>
						
							<option value="WIND">Wind</option>
						
							<option value="VODAF">Vodafone</option>
						
							<option value="TRE">Tre</option>
						
							<option value="TIM">Tim</option>
						
							<option value="POSTE">Poste Mobile</option>
						
							<option value="COOP">Coop Voce</option>
						
							<option value="UNO">Uno Mobile</option>
						
							<option value="MTV">Mtv Mobile</option>
						
							<option value="ILIAD">Iliad</option>
						
							<option value="FASTWEB">Fastweb Mobile</option>
						
							<option value="DAILY">Daily Telecom Mobile</option>
						
							<option value="CONAD">Conad Insim</option>
						
							<option value="BT">BT Mobile</option>
						
							<option value="AMOBILE">A-Mobile</option>
						
							<option value="ALTRO">Altro...</option></select>
					<span class="errortext">Seleziona</span>
				</div>
			</fieldset>
		</div>

		<div class="aolblock">
			<h3>Informazioni personali</h3>
			
			<fieldset>
				<span class="label">Stato di nascita*</span>
				<select name="stato_nascita_int1" onchange="checkStato(this.value,'provincia_nascita_int1','comune_nascita_int1')" id="stato_nascita_int1"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CECOSLOVACCHIA">CECOSLOVACCHIA</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GAZA (TERRITORIO DI)">GAZA (TERRITORIO DI)</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="JUGOSLAVIA">JUGOSLAVIA</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="NUOVE EBRIDI">NUOVE EBRIDI</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DEMOCRATICA DI GERMANIA">REPUBBLICA DEMOCRATICA DI GERMANIA</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SOMALIA FRANCESE">SOMALIA FRANCESE</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANGANICA">TANGANICA</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URSS">URSS</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VIETNAM DEL NORD">VIETNAM DEL NORD</option>
					
						<option value="VIETNAM DEL SUD">VIETNAM DEL SUD</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Cittadinanza*</span>
				<select name="cittadinanza_int1" id="cittadinanza_int1"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia di nascita*</span>
				<select name="provincia_nascita_int1" onchange="ProvCom.updateComuni('divComune1', 'provincia_nascita_int1', 'comune_nascita_int1', 'comune_nascita_int1', 'no', 'Comune di nascita*');" id="provincia_nascita_int1"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComune1">
			<fieldset>
				<span class="label">Comune di nascita*</span>
				<select name="comune_nascita_int1" id="comune_nascita_int1"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
			<fieldset class="tolltipclick">
				<span class="label">
					<span>Paese di residenza fiscale*</span>
					<span class="closed">
							<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="cognome"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, e cioè 183 giorni all'anno:<ol><li>sono iscritte all'anagrafe della popolazione residente</li><li>hanno nel territorio dello Stato il proprio domicilio  o residenza ai sensi del Codice Civile.</li></ol><br>Basta il verificarsi di una sola di queste condizioni.</p>
							</span></span>
					</span>
				</span>
				<select name="residenzaFiscale_int1" onchange="displayTIN('residenzaFiscale_int1', 'tin1', 'TIN_int1')" id="residenzaFiscale_int1"><option value="">seleziona</option>
					
						<option value="86|ITALIA">ITALIA</option>
					
						<option value="238|ABU DHABI">ABU DHABI</option>
					
						<option value="2|AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="206|AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="246|AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="239|AJMAN">AJMAN</option>
					
						<option value="292|ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="87|ALBANIA">ALBANIA</option>
					
						<option value="3|ALGERIA">ALGERIA</option>
					
						<option value="148|AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="4|ANDORRA">ANDORRA</option>
					
						<option value="133|ANGOLA">ANGOLA</option>
					
						<option value="209|ANGUILLA">ANGUILLA</option>
					
						<option value="197|ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="5|ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="6|ARGENTINA">ARGENTINA</option>
					
						<option value="266|ARMENIA">ARMENIA</option>
					
						<option value="212|ARUBA">ARUBA</option>
					
						<option value="227|ASCENSION">ASCENSION</option>
					
						<option value="7|AUSTRALIA">AUSTRALIA</option>
					
						<option value="8|AUSTRIA">AUSTRIA</option>
					
						<option value="268|AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="234|AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="160|BAHAMA">BAHAMA</option>
					
						<option value="169|BAHREIN">BAHREIN</option>
					
						<option value="130|BANGLADESH">BANGLADESH</option>
					
						<option value="118|BARBADOS">BARBADOS</option>
					
						<option value="9|BELGIO">BELGIO</option>
					
						<option value="198|BELIZE">BELIZE</option>
					
						<option value="158|BENIN">BENIN</option>
					
						<option value="207|BERMUDA">BERMUDA</option>
					
						<option value="97|BHUTAN">BHUTAN</option>
					
						<option value="264|BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="10|BOLIVIA">BOLIVIA</option>
					
						<option value="295|BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="274|BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="98|BOTSWANA">BOTSWANA</option>
					
						<option value="11|BRASILE">BRASILE</option>
					
						<option value="125|BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="12|BULGARIA">BULGARIA</option>
					
						<option value="142|BURKINA FASO">BURKINA FASO</option>
					
						<option value="25|BURUNDI">BURUNDI</option>
					
						<option value="135|CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="119|CAMERUN">CAMERUN</option>
					
						<option value="139|CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="13|CANADA">CANADA</option>
					
						<option value="211|CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="230|CHAFARINAS">CHAFARINAS</option>
					
						<option value="144|CIAD">CIAD</option>
					
						<option value="15|CILE">CILE</option>
					
						<option value="101|CIPRO">CIPRO</option>
					
						<option value="93|CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="223|CLIPPERTON">CLIPPERTON</option>
					
						<option value="17|COLOMBIA">COLOMBIA</option>
					
						<option value="176|COMORE">COMORE</option>
					
						<option value="18|CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="145|CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="74|COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="84|COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="146|COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="19|COSTARICA">COSTARICA</option>
					
						<option value="261|CROAZIA">CROAZIA</option>
					
						<option value="20|CUBA">CUBA</option>
					
						<option value="296|CURACAO">CURACAO</option>
					
						<option value="21|DANIMARCA">DANIMARCA</option>
					
						<option value="192|DOMINICA">DOMINICA</option>
					
						<option value="240|DUBAI">DUBAI</option>
					
						<option value="24|ECUADOR">ECUADOR</option>
					
						<option value="23|EGITTO">EGITTO</option>
					
						<option value="64|EL SALVADOR">EL SALVADOR</option>
					
						<option value="277|ERITREA">ERITREA</option>
					
						<option value="257|ESTONIA">ESTONIA</option>
					
						<option value="26|ETIOPIA">ETIOPIA</option>
					
						<option value="190|FALKLAND">FALKLAND</option>
					
						<option value="27|FILIPPINE">FILIPPINE</option>
					
						<option value="28|FINLANDIA">FINLANDIA</option>
					
						<option value="29|FRANCIA">FRANCIA</option>
					
						<option value="241|FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="157|GABON">GABON</option>
					
						<option value="164|GAMBIA">GAMBIA</option>
					
						<option value="267|GEORGIA">GEORGIA</option>
					
						<option value="112|GHANA">GHANA</option>
					
						<option value="82|GIAMAICA">GIAMAICA</option>
					
						<option value="88|GIAPPONE">GIAPPONE</option>
					
						<option value="102|GIBILTERRA">GIBILTERRA</option>
					
						<option value="113|GIBUTI">GIBUTI</option>
					
						<option value="122|GIORDANIA">GIORDANIA</option>
					
						<option value="228|GOUGH">GOUGH</option>
					
						<option value="32|GRECIA">GRECIA</option>
					
						<option value="156|GRENADA">GRENADA</option>
					
						<option value="200|GROENLANDIA">GROENLANDIA</option>
					
						<option value="214|GUADALUPA">GUADALUPA</option>
					
						<option value="154|GUAM">GUAM</option>
					
						<option value="33|GUATEMALA">GUATEMALA</option>
					
						<option value="123|GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="201|GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="137|GUINEA">GUINEA</option>
					
						<option value="185|GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="167|GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="159|GUYANA">GUYANA</option>
					
						<option value="34|HAITI">HAITI</option>
					
						<option value="284|HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="35|HONDURAS">HONDURAS</option>
					
						<option value="103|HONG KONG">HONG KONG</option>
					
						<option value="114|INDIA">INDIA</option>
					
						<option value="129|INDONESIA">INDONESIA</option>
					
						<option value="39|IRAN">IRAN</option>
					
						<option value="38|IRAQ">IRAQ</option>
					
						<option value="40|IRLANDA">IRLANDA</option>
					
						<option value="41|ISLANDA">ISLANDA</option>
					
						<option value="203|ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="100|ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="256|ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="255|ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="237|ISOLE COOK">ISOLE COOK</option>
					
						<option value="188|ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="204|ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="161|ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="217|ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="249|ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="178|ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="182|ISRAELE">ISRAELE</option>
					
						<option value="202|JERSEY">JERSEY</option>
					
						<option value="269|KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="116|KENYA">KENYA</option>
					
						<option value="270|KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="194|KIRIBATI">KIRIBATI</option>
					
						<option value="126|KUWAIT">KUWAIT</option>
					
						<option value="136|LAOS">LAOS</option>
					
						<option value="89|LESOTHO">LESOTHO</option>
					
						<option value="258|LETTONIA">LETTONIA</option>
					
						<option value="95|LIBANO">LIBANO</option>
					
						<option value="44|LIBERIA">LIBERIA</option>
					
						<option value="45|LIBIA">LIBIA</option>
					
						<option value="90|LIECHTENSTEIN">LIECHTENSTEIN</option>
					
						<option value="259|LITUANIA">LITUANIA</option>
					
						<option value="92|LUSSEMBURGO">LUSSEMBURGO</option>
					
						<option value="59|MACAO">MACAO</option>
					
						<option value="278|MACEDONIA">MACEDONIA</option>
					
						<option value="104|MADAGASCAR">MADAGASCAR</option>
					
						<option value="235|MADEIRA">MADEIRA</option>
					
						<option value="56|MALAWI">MALAWI</option>
					
						<option value="106|MALAYSIA">MALAYSIA</option>
					
						<option value="127|MALDIVE">MALDIVE</option>
					
						<option value="149|MALI">MALI</option>
					
						<option value="105|MALTA">MALTA</option>
					
						<option value="219|MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="107|MAROCCO">MAROCCO</option>
					
						<option value="213|MARTINICA">MARTINICA</option>
					
						<option value="141|MAURITANIA">MAURITANIA</option>
					
						<option value="128|MAURIZIO">MAURIZIO</option>
					
						<option value="226|MAYOTTE">MAYOTTE</option>
					
						<option value="231|MELILLA">MELILLA</option>
					
						<option value="46|MESSICO">MESSICO</option>
					
						<option value="215|MICRONESIA">MICRONESIA</option>
					
						<option value="177|MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="265|MOLDAVIA">MOLDAVIA</option>
					
						<option value="91|MONACO">MONACO</option>
					
						<option value="110|MONGOLIA">MONGOLIA</option>
					
						<option value="290|MONTENEGRO">MONTENEGRO</option>
					
						<option value="208|MONTSERRAT">MONTSERRAT</option>
					
						<option value="134|MOZAMBICO">MOZAMBICO</option>
					
						<option value="83|MYANMAR">MYANMAR</option>
					
						<option value="109|NAURU">NAURU</option>
					
						<option value="115|NEPAL">NEPAL</option>
					
						<option value="47|NICARAGUA">NICARAGUA</option>
					
						<option value="150|NIGER">NIGER</option>
					
						<option value="117|NIGERIA">NIGERIA</option>
					
						<option value="205|NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="285|NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="48|NORVEGIA">NORVEGIA</option>
					
						<option value="253|NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="49|NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="175|OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="252|OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="163|OMAN">OMAN</option>
					
						<option value="50|PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="36|PAKISTAN">PAKISTAN</option>
					
						<option value="279|PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="51|PANAMA">PANAMA</option>
					
						<option value="186|PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="52|PARAGUAY">PARAGUAY</option>
					
						<option value="232|PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="233|PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="53|PERU'">PERU'</option>
					
						<option value="225|POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="54|POLONIA">POLONIA</option>
					
						<option value="55|PORTOGALLO">PORTOGALLO</option>
					
						<option value="220|PORTORICO">PORTORICO</option>
					
						<option value="168|QATAR">QATAR</option>
					
						<option value="242|RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="31|REGNO UNITO">REGNO UNITO</option>
					
						<option value="22|REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="275|REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="143|REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="291|REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="216|REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="37|REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="63|REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="94|REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="16|REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="78|REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="247|REUNION">REUNION</option>
					
						<option value="61|ROMANIA">ROMANIA</option>
					
						<option value="151|RUANDA">RUANDA</option>
					
						<option value="262|RUSSIA">RUSSIA</option>
					
						<option value="254|S.ELENA">S.ELENA</option>
					
						<option value="166|SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="293|SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="199|SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="191|SALOMONE">SALOMONE</option>
					
						<option value="131|SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="187|SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="189|SEICELLE">SEICELLE</option>
					
						<option value="152|SENEGAL">SENEGAL</option>
					
						<option value="289|SERBIA">SERBIA</option>
					
						<option value="243|SHARJAH">SHARJAH</option>
					
						<option value="153|SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="147|SINGAPORE">SINGAPORE</option>
					
						<option value="294|SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="65|SIRIA">SIRIA</option>
					
						<option value="276|SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="260|SLOVENIA">SLOVENIA</option>
					
						<option value="66|SOMALIA">SOMALIA</option>
					
						<option value="67|SPAGNA">SPAGNA</option>
					
						<option value="85|SRI LANKA">SRI LANKA</option>
					
						<option value="195|ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="222|ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="248|ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="69|STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="70|SUDAN">SUDAN</option>
					
						<option value="124|SURINAME">SURINAME</option>
					
						<option value="286|SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="68|SVEZIA">SVEZIA</option>
					
						<option value="71|SVIZZERA">SVIZZERA</option>
					
						<option value="138|SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="272|TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="57|TANZANIA">TANZANIA</option>
					
						<option value="245|TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="183|TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="180|TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="72|THAILANDIA">THAILANDIA</option>
					
						<option value="287|TIMOR">TIMOR</option>
					
						<option value="155|TOGO">TOGO</option>
					
						<option value="236|TOKELAU">TOKELAU</option>
					
						<option value="162|TONGA">TONGA</option>
					
						<option value="120|TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="229|TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="75|TUNISIA">TUNISIA</option>
					
						<option value="76|TURCHIA">TURCHIA</option>
					
						<option value="273|TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="210|TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="193|TUVALU">TUVALU</option>
					
						<option value="263|UCRAINA">UCRAINA</option>
					
						<option value="132|UGANDA">UGANDA</option>
					
						<option value="244|UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="77|UNGHERIA">UNGHERIA</option>
					
						<option value="80|URUGUAY">URUGUAY</option>
					
						<option value="271|UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="121|VANUATU">VANUATU</option>
					
						<option value="81|VENEZUELA">VENEZUELA</option>
					
						<option value="221|VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="62|VIETNAM">VIETNAM</option>
					
						<option value="196|VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="218|WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="42|YEMEN">YEMEN</option>
					
						<option value="58|ZAMBIA">ZAMBIA</option>
					
						<option value="73|ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset id='tin1' style="visibility:hidden">
				<span class="label">Taxpayer Identification Number (Tin)</span>
				<input type="text" name="TIN_int1" maxlength="10" value="" id="TIN_int1" style="text-transform:uppercase">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<script>
				$(function (){
				 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
					$("#TIN_int1").mask("__-_______", {completed: function(){$("#TIN_int1").val($("#TIN_int1").val().toUpperCase())} });
				})
			</script>
			
			<fieldset class="lastrow">
				<span class="label">Titolo di studio*</span>
				<select name="titolo_studio_int1" id="titolo_studio_int1"><option value="">seleziona</option>
					<option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
					<option value="Laurea">Laurea</option>
					<option value="Diploma">Diploma</option>
					<option value="Licenza media">Licenza media</option>
					<option value="Licenza elementare">Licenza elementare</option>
					<option value="Nessuno">Nessuno</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset class="lastrow">
				<span class="label">Come conosci Webank?*</span>
				<select name="come_conosce_int1" id="come_conosce_int1"><option value="">seleziona</option>
					<option value="Amici">Amici</option>
					<option value="Colleghi">Colleghi</option>
					<option value="Filiale Banco BPM">Filiale Banco BPM</option>
					<option value="Promotore Finanziario">Promotore Finanziario</option>
					<option value="TV">TV</option>	
					<option value="Internet">Internet</option>
					<option value="Stampa">Stampa</option>
					<option value="Radio">Radio</option>
					<option value="Motori di ricerca">Motori di ricerca</option>
					<option value="Altro">Altro</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
		</div>

		<!-- Documento identita' -->
		<div class="aolblock">
			<h3>Documento di identità</h3>
			
			<fieldset>
				<span class="label">Tipo di documento*</span>
				<select name="tipo_doc_int1" onchange="setEmessione('tipo_doc_int1', 'stato_emissione_int1', 'emesso_da_int1');" id="tipo_doc_int1"><option value="Carta d'identità">Carta d'identità</option>
					<option value="Patente">Patente</option>
					<option value="Passaporto">Passaporto</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Numero*</span>
				<input type="text" name="numero_doc_int1" maxlength="16" value="" id="numero_doc_int1">
				<span class="errortext">Compila</span>
			</fieldset>

			<fieldset>
				<span class="label">Data di rilascio*</span>
					<div id="divDataEmissione1">
					<div class="fieldblock">
						<input type="text" name="gg_emissione_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int1,'gg', 2)" id="gg_emissione_int1" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>

					<div class="fieldblock">
						<input type="text" name="mm_emissione_int1" maxlength="2" value="mm" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int1,'mm', 2)" id="mm_emissione_int1" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>
					<div class="fieldblock">
						<input type="text" name="aa_emissione_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'gg')" id="aa_emissione_int1" style="width:50px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					</div>
					<span class="errortext"></span>
			</fieldset>
			
			<fieldset>
				<span class="label">Stato di rilascio*</span>
				<select name="stato_emissione_int1" onchange="checkStato(this.value,'provincia_emissione_int1','comune_emissione_int1');setEmessione('tipo_doc_int1', 'stato_emissione_int1', 'emesso_da_int1');" id="stato_emissione_int1"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<br class="clear" />
			
			<fieldset class="lastrow">
				<span class="label">Provincia di rilascio*</span>
				<select name="provincia_emissione_int1" onchange="ProvCom.updateComuni('divComuneEmissione1', 'provincia_emissione_int1', 'comune_emissione_int1', 'comune_emissione_int1', 'no', 'Comune di rilascio*');" id="provincia_emissione_int1"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneEmissione1">
			<fieldset class="lastrow">
				<span class="label">Comune di rilascio*</span>
				<select name="comune_emissione_int1" id="comune_emissione_int1"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
		</div>
	
		<!-- Recapiti -->
		<div class="aolblock">
			<h3>Recapiti</h3>

			<fieldset>
				<span class="label">Indirizzo di residenza*</span>
				<div class="fieldblock">
					<select name="qualif_int1" id="qualif_int1" style="width:85px"><option value="">seleziona</option>
						
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
						
						<option value="Altro">Altro</option></select>
					<span class="errortext">Seleziona</span>

				</div>
				<div class="fieldblock">
					<input type="text" name="via_int1" value="" id="via_int1" style="width: 161px;">
					<span class="errortext">Compila</span>
				</div>
			</fieldset>
			
			<fieldset style="width: 100px;">
				<span class="label">N*</span>
				<input type="text" name="civico_int1" value="" id="civico_int1" style="width:40px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width:185px;">
				<span class="label">CAP* (specifico)*</span>
				<input type="text" name="cap_int1" maxlength="5" value="" id="cap_int1" style="width: 138px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia*</span>
				<select name="provincia_int1" onchange="ProvCom.updateComuni('divComuneResidenza1', 'provincia_int1', 'comune_int1', 'comune_int1', 'no', 'Comune*');" id="provincia_int1"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneResidenza1">
			<fieldset>
				<span class="label">Comune*</span>
				<select name="comune_int1" id="comune_int1"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
						<div id="divIndirizzoCorrispondenza1" class="expandable">
				<span class="label">Indirizzo di corrispondenza</span>
				
				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
					<span>Aggiungi indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata la documentazione contrattuale, per tutti gli intestatari del conto.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset>
						<span class="label">Indirizzo di corrispondenza*</span>
						<div class="fieldblock">
							<select name="qualif_recapito_int1" id="qualif_recapito_int1" style="width:85px"><option value="">seleziona</option>
							<option value="Via">Via</option>
							<option value="Viale">Viale</option>
							<option value="Corso">Corso</option>
							<option value="Piazza">Piazza</option>
							<option value="Strada">Strada</option>
							<option value="Stretto">Stretto</option>
							<option value="Contrada">Contrada</option>
							<option value="Vicolo">Vicolo</option>
							<option value="Località">Località</option>
							<option value="Largo">Largo</option>
							<option value="Vico">Vico</option>
							<option value="Altro">Altro</option></select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="fieldblock">
							<input type="text" name="via_recapito_int1" value="" id="via_recapito_int1" style="width: 161px;">
							<span class="errortext">Compila</span>
						</div>
					</fieldset>
					
					<fieldset style="width: 100px;">
						<span class="label">N*</span>
						<input type="text" name="civico_recapito_int1" value="" id="civico_recapito_int1" style="width:40px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset style="width:185px;">
						<span class="label">CAP* (specifico)*</span>
						<input type="text" name="cap_recapito_int1" maxlength="5" value="" id="cap_recapito_int1" style="width: 136px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset>
						<span class="label">Provincia*</span>
						<select name="provincia_recapito_int1" onchange="ProvCom.updateComuni('divComuneRecapito1', 'provincia_recapito_int1', 'comune_recapito_int1', 'comune_recapito_int1', 'no', 'Comune*');" id="provincia_recapito_int1"><option value="">seleziona</option>
							
								<option value="AG">AG</option>
							
								<option value="AL">AL</option>
							
								<option value="AN">AN</option>
							
								<option value="AO">AO</option>
							
								<option value="AP">AP</option>
							
								<option value="AQ">AQ</option>
							
								<option value="AR">AR</option>
							
								<option value="AT">AT</option>
							
								<option value="AV">AV</option>
							
								<option value="BA">BA</option>
							
								<option value="BG">BG</option>
							
								<option value="BI">BI</option>
							
								<option value="BL">BL</option>
							
								<option value="BN">BN</option>
							
								<option value="BO">BO</option>
							
								<option value="BR">BR</option>
							
								<option value="BS">BS</option>
							
								<option value="BT">BT</option>
							
								<option value="BZ">BZ</option>
							
								<option value="CA">CA</option>
							
								<option value="CB">CB</option>
							
								<option value="CE">CE</option>
							
								<option value="CH">CH</option>
							
								<option value="CL">CL</option>
							
								<option value="CN">CN</option>
							
								<option value="CO">CO</option>
							
								<option value="CR">CR</option>
							
								<option value="CS">CS</option>
							
								<option value="CT">CT</option>
							
								<option value="CZ">CZ</option>
							
								<option value="EN">EN</option>
							
								<option value="FC">FC</option>
							
								<option value="FE">FE</option>
							
								<option value="FG">FG</option>
							
								<option value="FI">FI</option>
							
								<option value="FM">FM</option>
							
								<option value="FR">FR</option>
							
								<option value="GE">GE</option>
							
								<option value="GO">GO</option>
							
								<option value="GR">GR</option>
							
								<option value="IM">IM</option>
							
								<option value="IS">IS</option>
							
								<option value="KR">KR</option>
							
								<option value="LC">LC</option>
							
								<option value="LE">LE</option>
							
								<option value="LI">LI</option>
							
								<option value="LO">LO</option>
							
								<option value="LT">LT</option>
							
								<option value="LU">LU</option>
							
								<option value="MB">MB</option>
							
								<option value="MC">MC</option>
							
								<option value="ME">ME</option>
							
								<option value="MI">MI</option>
							
								<option value="MN">MN</option>
							
								<option value="MO">MO</option>
							
								<option value="MS">MS</option>
							
								<option value="MT">MT</option>
							
								<option value="NA">NA</option>
							
								<option value="NO">NO</option>
							
								<option value="NU">NU</option>
							
								<option value="OR">OR</option>
							
								<option value="PA">PA</option>
							
								<option value="PC">PC</option>
							
								<option value="PD">PD</option>
							
								<option value="PE">PE</option>
							
								<option value="PG">PG</option>
							
								<option value="PI">PI</option>
							
								<option value="PN">PN</option>
							
								<option value="PO">PO</option>
							
								<option value="PR">PR</option>
							
								<option value="PT">PT</option>
							
								<option value="PU">PU</option>
							
								<option value="PV">PV</option>
							
								<option value="PZ">PZ</option>
							
								<option value="RA">RA</option>
							
								<option value="RC">RC</option>
							
								<option value="RE">RE</option>
							
								<option value="RG">RG</option>
							
								<option value="RI">RI</option>
							
								<option value="RM">RM</option>
							
								<option value="RN">RN</option>
							
								<option value="RO">RO</option>
							
								<option value="SA">SA</option>
							
								<option value="SI">SI</option>
							
								<option value="SO">SO</option>
							
								<option value="SP">SP</option>
							
								<option value="SR">SR</option>
							
								<option value="SS">SS</option>
							
								<option value="SU">SU</option>
							
								<option value="SV">SV</option>
							
								<option value="TA">TA</option>
							
								<option value="TE">TE</option>
							
								<option value="TN">TN</option>
							
								<option value="TO">TO</option>
							
								<option value="TP">TP</option>
							
								<option value="TR">TR</option>
							
								<option value="TS">TS</option>
							
								<option value="TV">TV</option>
							
								<option value="UD">UD</option>
							
								<option value="VA">VA</option>
							
								<option value="VB">VB</option>
							
								<option value="VC">VC</option>
							
								<option value="VE">VE</option>
							
								<option value="VI">VI</option>
							
								<option value="VR">VR</option>
							
								<option value="VT">VT</option>
							
								<option value="VV">VV</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					
					<div id="divComuneRecapito1">
					<fieldset>
						<span class="label">Comune*</span>
						<select name="comune_recapito_int1" id="comune_recapito_int1"><option value="">seleziona</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					</div>

				</div>
			</div>
			
			<div id="divIndirizzoCai1" class="expandable">
				<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
				
				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
					<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset>
						<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
						<div class="fieldblock">
							<select name="qualif_domicilioCAI_int1" id="qualif_domicilioCAI_int1" style="width:85px"><option value="">seleziona</option>
							<option value="Via">Via</option>
							<option value="Viale">Viale</option>
							<option value="Corso">Corso</option>
							<option value="Piazza">Piazza</option>
							<option value="Strada">Strada</option>
							<option value="Stretto">Stretto</option>
							<option value="Contrada">Contrada</option>
							<option value="Vicolo">Vicolo</option>
							<option value="Località">Località</option>
							<option value="Largo">Largo</option>
							<option value="Vico">Vico</option>
							<option value="Altro">Altro</option></select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="fieldblock">
							<input type="text" name="via_domicilioCAI_int1" value="" id="via_domicilioCAI_int1" style="width: 161px;">
							<span class="errortext">Compila</span>
						</div>
					</fieldset>
					
					<fieldset style="width: 100px;">
						<span class="label">N*</span>
						<input type="text" name="civico_domicilioCAI_int1" value="" id="civico_domicilioCAI_int1" style="width:40px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset style="width:185px;">
						<span class="label">CAP* (specifico)*</span>
						<input type="text" name="cap_domicilioCAI_int1" maxlength="5" value="" id="cap_domicilioCAI_int1" style="width: 136px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset>
						<span class="label">Provincia*</span>
						<select name="provincia_domicilioCAI_int1" onchange="ProvCom.updateComuni('divComuneDomicilioCAI1', 'provincia_domicilioCAI_int1', 'comune_domicilioCAI_int1', 'comune_domicilioCAI_int1', 'no', 'Comune*');" id="provincia_domicilioCAI_int1"><option value="">seleziona</option>
							
								<option value="AG">AG</option>
							
								<option value="AL">AL</option>
							
								<option value="AN">AN</option>
							
								<option value="AO">AO</option>
							
								<option value="AP">AP</option>
							
								<option value="AQ">AQ</option>
							
								<option value="AR">AR</option>
							
								<option value="AT">AT</option>
							
								<option value="AV">AV</option>
							
								<option value="BA">BA</option>
							
								<option value="BG">BG</option>
							
								<option value="BI">BI</option>
							
								<option value="BL">BL</option>
							
								<option value="BN">BN</option>
							
								<option value="BO">BO</option>
							
								<option value="BR">BR</option>
							
								<option value="BS">BS</option>
							
								<option value="BT">BT</option>
							
								<option value="BZ">BZ</option>
							
								<option value="CA">CA</option>
							
								<option value="CB">CB</option>
							
								<option value="CE">CE</option>
							
								<option value="CH">CH</option>
							
								<option value="CL">CL</option>
							
								<option value="CN">CN</option>
							
								<option value="CO">CO</option>
							
								<option value="CR">CR</option>
							
								<option value="CS">CS</option>
							
								<option value="CT">CT</option>
							
								<option value="CZ">CZ</option>
							
								<option value="EN">EN</option>
							
								<option value="FC">FC</option>
							
								<option value="FE">FE</option>
							
								<option value="FG">FG</option>
							
								<option value="FI">FI</option>
							
								<option value="FM">FM</option>
							
								<option value="FR">FR</option>
							
								<option value="GE">GE</option>
							
								<option value="GO">GO</option>
							
								<option value="GR">GR</option>
							
								<option value="IM">IM</option>
							
								<option value="IS">IS</option>
							
								<option value="KR">KR</option>
							
								<option value="LC">LC</option>
							
								<option value="LE">LE</option>
							
								<option value="LI">LI</option>
							
								<option value="LO">LO</option>
							
								<option value="LT">LT</option>
							
								<option value="LU">LU</option>
							
								<option value="MB">MB</option>
							
								<option value="MC">MC</option>
							
								<option value="ME">ME</option>
							
								<option value="MI">MI</option>
							
								<option value="MN">MN</option>
							
								<option value="MO">MO</option>
							
								<option value="MS">MS</option>
							
								<option value="MT">MT</option>
							
								<option value="NA">NA</option>
							
								<option value="NO">NO</option>
							
								<option value="NU">NU</option>
							
								<option value="OR">OR</option>
							
								<option value="PA">PA</option>
							
								<option value="PC">PC</option>
							
								<option value="PD">PD</option>
							
								<option value="PE">PE</option>
							
								<option value="PG">PG</option>
							
								<option value="PI">PI</option>
							
								<option value="PN">PN</option>
							
								<option value="PO">PO</option>
							
								<option value="PR">PR</option>
							
								<option value="PT">PT</option>
							
								<option value="PU">PU</option>
							
								<option value="PV">PV</option>
							
								<option value="PZ">PZ</option>
							
								<option value="RA">RA</option>
							
								<option value="RC">RC</option>
							
								<option value="RE">RE</option>
							
								<option value="RG">RG</option>
							
								<option value="RI">RI</option>
							
								<option value="RM">RM</option>
							
								<option value="RN">RN</option>
							
								<option value="RO">RO</option>
							
								<option value="SA">SA</option>
							
								<option value="SI">SI</option>
							
								<option value="SO">SO</option>
							
								<option value="SP">SP</option>
							
								<option value="SR">SR</option>
							
								<option value="SS">SS</option>
							
								<option value="SU">SU</option>
							
								<option value="SV">SV</option>
							
								<option value="TA">TA</option>
							
								<option value="TE">TE</option>
							
								<option value="TN">TN</option>
							
								<option value="TO">TO</option>
							
								<option value="TP">TP</option>
							
								<option value="TR">TR</option>
							
								<option value="TS">TS</option>
							
								<option value="TV">TV</option>
							
								<option value="UD">UD</option>
							
								<option value="VA">VA</option>
							
								<option value="VB">VB</option>
							
								<option value="VC">VC</option>
							
								<option value="VE">VE</option>
							
								<option value="VI">VI</option>
							
								<option value="VR">VR</option>
							
								<option value="VT">VT</option>
							
								<option value="VV">VV</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					
					<div id="divComuneDomicilioCAI1">
					<fieldset>
						<span class="label">Comune*</span>
						<select name="comune_domicilioCAI_int1" id="comune_domicilioCAI_int1"><option value="">seleziona</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					</div>
				</div>
			</div>

			<div id="divRecapitiTelefonici1" class="expandable">
				<span class="label">Altri recapiti telefonici (facoltativi)</span>

				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn">
					</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset class="lastrow">
							<span class="label">Telefono casa</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_int1" maxlength="4" value="" id="prefisso_int1" style="width:50px">
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_int1" value="" id="telefono_int1" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
					
					<fieldset class="lastrow">
							<span class="label">Telefono ufficio</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_2_int1" maxlength="4" value="" id="prefisso_2_int1" style="width:50px"> 
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_2_int1" value="" id="telefono_2_int1" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
				</div>
			</div>
		</div>

		<div class="aolblock">
			<h3>Tu e Webank</h3>
			<p class="minitext">Sei gi&agrave; cliente Banco BPM?</p>
			<p class="minitext grey">Dichiarando di essere gi&agrave; cliente Banco BPM non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli presenti nei nostri archivi.</p>
			
			<div class="fieldblock" id="divIdentificazione1">
				<fieldset class="withInput">
					<label style="margin-top:15px"><input type="radio" name="isbpmcliente_int1" value="SI" id="isbpmcliente_int1"><span class="optiontext">si</span></label>
				</fieldset>
				<fieldset class="withInput lastrow">
					<label><input type="radio" name="isbpmcliente_int1" value="NO" id="isbpmcliente_int1"><span class="optiontext">no</span></label>
					<br class="clear" />
				</fieldset>
				<span class="errortext">Seleziona</span>
			</div>
			<br class="clear" />
		</div>

	</div>
	
	</div>
	
	
	<div class="aolAcc" id="secondoIntestatario" style="display:none">
	
	<div class="aolAccTop">
		<a class="aolAccTitle" id="intestatario2" onclick="switchExp(this,true);setViewElement(this);" href="javascript:;" title="Espandi">
			<span class="titoloAcc">Intestatario 2</span>
			<span class="accButt" ></span>
			<span class="errortext">Compila</span>
		</a>
	</div>
	
	<div class="aolAccContent">
	
	<div class="aolblock">
			<h3>Dati anagrafici intestatario</h3>
	
			<fieldset>
				<span class="label">Nome*</span>
				<input type="text" name="nome_int2" value="" id="nome_int2">
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Cognome*</span>
				<input type="text" name="cognome_int2" value="" id="cognome_int2">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width: 183px;">
				<span class="label">Data di nascita*</span>
				<div id="divDataNascita2">
				<div class="fieldblock">
					<input type="text" name="gg_nascita_int2" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int2,'gg', 2)" id="gg_nascita_int2" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="mm_nascita_int2" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int2,'mm', 2)" id="mm_nascita_int2" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="aa_nascita_int2" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" id="aa_nascita_int2" style="width:50px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
				</div>
				<span class="errortext"></span>
			</fieldset>
	
			<fieldset style="width:104px">
				<span class="label">Sesso*</span>
				<label style="width:33px;"><input type="radio" name="sesso_int2" value="M" id="sesso_int2"><span class="optiontext">M</span></label>
				<label style="width:30px;"><input type="radio" name="sesso_int2" value="F" id="sesso_int2"><span class="optiontext">F</span></label>
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Codice fiscale*</span>
				<input type="text" name="cod_fiscale_int2" maxlength="16" value="" id="cod_fiscale_int2">
				<script type="text/javascript" defer="defer">setCounterOnField("cod_fiscale_int2",16);</script>
				<span class="errortext">Compila</span>
			</fieldset>
			
			<br class="clear" />
	
			<fieldset class="lastrow">
				<span class="label">Email*</span>
				<input type="text" name="mail_int2" value="" id="mail_int2">
				<span class="errortext">Compila</span>
			</fieldset>
			
			
			<fieldset class="lastrow">
			<div id="cellulareInt2">
				<span class="label">Numero cellulare*<a onmouseover="showGreenToolTip(this, 'Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt="" /></a></span>
				
				<div class="fieldblock">
					<input type="text" name="prefisso_3_int2" maxlength="3" value="" onkeyup="nextFocus(this, telefono_3_int2,'',3)" id="prefisso_3_int2" style="width:50px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<input type="text" name="telefono_3_int2" maxlength="7" value="" id="telefono_3_int2" style="width:60px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<select name="operatore_int2" id="operatore_int2" style="width:116px" class="inputStep2 altri"><option value="">operatore</option>
						
							<option value="WIND">Wind</option>
						
							<option value="VODAF">Vodafone</option>
						
							<option value="TRE">Tre</option>
						
							<option value="TIM">Tim</option>
						
							<option value="POSTE">Poste Mobile</option>
						
							<option value="COOP">Coop Voce</option>
						
							<option value="UNO">Uno Mobile</option>
						
							<option value="MTV">Mtv Mobile</option>
						
							<option value="ILIAD">Iliad</option>
						
							<option value="FASTWEB">Fastweb Mobile</option>
						
							<option value="DAILY">Daily Telecom Mobile</option>
						
							<option value="CONAD">Conad Insim</option>
						
							<option value="BT">BT Mobile</option>
						
							<option value="AMOBILE">A-Mobile</option>
						
							<option value="ALTRO">Altro...</option></select>
					<span class="errortext">Seleziona</span>
				</div>
				
			</div>
			<span class="errortext"></span>
			</fieldset>
			
		</div>

		<div class="aolblock">
			<h3>Informazioni personali</h3>
			
			<fieldset>
				<span class="label">Stato di nascita*</span>
				<select name="stato_nascita_int2" onchange="checkStato(this.value,'provincia_nascita_int2','comune_nascita_int2')" id="stato_nascita_int2"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CECOSLOVACCHIA">CECOSLOVACCHIA</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GAZA (TERRITORIO DI)">GAZA (TERRITORIO DI)</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="JUGOSLAVIA">JUGOSLAVIA</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="NUOVE EBRIDI">NUOVE EBRIDI</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DEMOCRATICA DI GERMANIA">REPUBBLICA DEMOCRATICA DI GERMANIA</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SOMALIA FRANCESE">SOMALIA FRANCESE</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANGANICA">TANGANICA</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URSS">URSS</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VIETNAM DEL NORD">VIETNAM DEL NORD</option>
					
						<option value="VIETNAM DEL SUD">VIETNAM DEL SUD</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Cittadinanza*</span>
				<select name="cittadinanza_int2" id="cittadinanza_int2"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia di nascita*</span>
				<select name="provincia_nascita_int2" onchange="ProvCom.updateComuni('divComune2', 'provincia_nascita_int2', 'comune_nascita_int2', 'comune_nascita_int2', 'no', 'Comune di nascita*');" id="provincia_nascita_int2"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComune2">
			<fieldset>
				<span class="label">Comune di nascita*</span>
				<select name="comune_nascita_int2" id="comune_nascita_int2"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
			<fieldset class="tolltipclick">
				<span class="label">
					<span>Paese di residenza fiscale*</span>
					<span class="closed">
							<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="tooltipResFis2"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, e cioè 183 giorni all'anno:<ol><li>sono iscritte all'anagrafe della popolazione residente</li><li>hanno nel territorio dello Stato il proprio domicilio  o residenza ai sensi del Codice Civile.</li></ol><br>Basta il verificarsi di una sola di queste condizioni.</p>
							</span></span>
					</span>
				</span>
				<select name="residenzaFiscale_int2" onchange="displayTIN('residenzaFiscale_int2', 'tin2', 'TIN_int2')" id="residenzaFiscale_int2"><option value="">seleziona</option>
					
						<option value="86|ITALIA">ITALIA</option>
					
						<option value="238|ABU DHABI">ABU DHABI</option>
					
						<option value="2|AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="206|AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="246|AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="239|AJMAN">AJMAN</option>
					
						<option value="292|ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="87|ALBANIA">ALBANIA</option>
					
						<option value="3|ALGERIA">ALGERIA</option>
					
						<option value="148|AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="4|ANDORRA">ANDORRA</option>
					
						<option value="133|ANGOLA">ANGOLA</option>
					
						<option value="209|ANGUILLA">ANGUILLA</option>
					
						<option value="197|ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="5|ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="6|ARGENTINA">ARGENTINA</option>
					
						<option value="266|ARMENIA">ARMENIA</option>
					
						<option value="212|ARUBA">ARUBA</option>
					
						<option value="227|ASCENSION">ASCENSION</option>
					
						<option value="7|AUSTRALIA">AUSTRALIA</option>
					
						<option value="8|AUSTRIA">AUSTRIA</option>
					
						<option value="268|AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="234|AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="160|BAHAMA">BAHAMA</option>
					
						<option value="169|BAHREIN">BAHREIN</option>
					
						<option value="130|BANGLADESH">BANGLADESH</option>
					
						<option value="118|BARBADOS">BARBADOS</option>
					
						<option value="9|BELGIO">BELGIO</option>
					
						<option value="198|BELIZE">BELIZE</option>
					
						<option value="158|BENIN">BENIN</option>
					
						<option value="207|BERMUDA">BERMUDA</option>
					
						<option value="97|BHUTAN">BHUTAN</option>
					
						<option value="264|BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="10|BOLIVIA">BOLIVIA</option>
					
						<option value="295|BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="274|BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="98|BOTSWANA">BOTSWANA</option>
					
						<option value="11|BRASILE">BRASILE</option>
					
						<option value="125|BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="12|BULGARIA">BULGARIA</option>
					
						<option value="142|BURKINA FASO">BURKINA FASO</option>
					
						<option value="25|BURUNDI">BURUNDI</option>
					
						<option value="135|CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="119|CAMERUN">CAMERUN</option>
					
						<option value="139|CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="13|CANADA">CANADA</option>
					
						<option value="211|CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="230|CHAFARINAS">CHAFARINAS</option>
					
						<option value="144|CIAD">CIAD</option>
					
						<option value="15|CILE">CILE</option>
					
						<option value="101|CIPRO">CIPRO</option>
					
						<option value="93|CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="223|CLIPPERTON">CLIPPERTON</option>
					
						<option value="17|COLOMBIA">COLOMBIA</option>
					
						<option value="176|COMORE">COMORE</option>
					
						<option value="18|CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="145|CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="74|COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="84|COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="146|COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="19|COSTARICA">COSTARICA</option>
					
						<option value="261|CROAZIA">CROAZIA</option>
					
						<option value="20|CUBA">CUBA</option>
					
						<option value="296|CURACAO">CURACAO</option>
					
						<option value="21|DANIMARCA">DANIMARCA</option>
					
						<option value="192|DOMINICA">DOMINICA</option>
					
						<option value="240|DUBAI">DUBAI</option>
					
						<option value="24|ECUADOR">ECUADOR</option>
					
						<option value="23|EGITTO">EGITTO</option>
					
						<option value="64|EL SALVADOR">EL SALVADOR</option>
					
						<option value="277|ERITREA">ERITREA</option>
					
						<option value="257|ESTONIA">ESTONIA</option>
					
						<option value="26|ETIOPIA">ETIOPIA</option>
					
						<option value="190|FALKLAND">FALKLAND</option>
					
						<option value="27|FILIPPINE">FILIPPINE</option>
					
						<option value="28|FINLANDIA">FINLANDIA</option>
					
						<option value="29|FRANCIA">FRANCIA</option>
					
						<option value="241|FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="157|GABON">GABON</option>
					
						<option value="164|GAMBIA">GAMBIA</option>
					
						<option value="267|GEORGIA">GEORGIA</option>
					
						<option value="112|GHANA">GHANA</option>
					
						<option value="82|GIAMAICA">GIAMAICA</option>
					
						<option value="88|GIAPPONE">GIAPPONE</option>
					
						<option value="102|GIBILTERRA">GIBILTERRA</option>
					
						<option value="113|GIBUTI">GIBUTI</option>
					
						<option value="122|GIORDANIA">GIORDANIA</option>
					
						<option value="228|GOUGH">GOUGH</option>
					
						<option value="32|GRECIA">GRECIA</option>
					
						<option value="156|GRENADA">GRENADA</option>
					
						<option value="200|GROENLANDIA">GROENLANDIA</option>
					
						<option value="214|GUADALUPA">GUADALUPA</option>
					
						<option value="154|GUAM">GUAM</option>
					
						<option value="33|GUATEMALA">GUATEMALA</option>
					
						<option value="123|GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="201|GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="137|GUINEA">GUINEA</option>
					
						<option value="185|GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="167|GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="159|GUYANA">GUYANA</option>
					
						<option value="34|HAITI">HAITI</option>
					
						<option value="284|HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="35|HONDURAS">HONDURAS</option>
					
						<option value="103|HONG KONG">HONG KONG</option>
					
						<option value="114|INDIA">INDIA</option>
					
						<option value="129|INDONESIA">INDONESIA</option>
					
						<option value="39|IRAN">IRAN</option>
					
						<option value="38|IRAQ">IRAQ</option>
					
						<option value="40|IRLANDA">IRLANDA</option>
					
						<option value="41|ISLANDA">ISLANDA</option>
					
						<option value="203|ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="100|ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="256|ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="255|ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="237|ISOLE COOK">ISOLE COOK</option>
					
						<option value="188|ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="204|ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="161|ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="217|ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="249|ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="178|ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="182|ISRAELE">ISRAELE</option>
					
						<option value="202|JERSEY">JERSEY</option>
					
						<option value="269|KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="116|KENYA">KENYA</option>
					
						<option value="270|KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="194|KIRIBATI">KIRIBATI</option>
					
						<option value="126|KUWAIT">KUWAIT</option>
					
						<option value="136|LAOS">LAOS</option>
					
						<option value="89|LESOTHO">LESOTHO</option>
					
						<option value="258|LETTONIA">LETTONIA</option>
					
						<option value="95|LIBANO">LIBANO</option>
					
						<option value="44|LIBERIA">LIBERIA</option>
					
						<option value="45|LIBIA">LIBIA</option>
					
						<option value="90|LIECHTENSTEIN">LIECHTENSTEIN</option>
					
						<option value="259|LITUANIA">LITUANIA</option>
					
						<option value="92|LUSSEMBURGO">LUSSEMBURGO</option>
					
						<option value="59|MACAO">MACAO</option>
					
						<option value="278|MACEDONIA">MACEDONIA</option>
					
						<option value="104|MADAGASCAR">MADAGASCAR</option>
					
						<option value="235|MADEIRA">MADEIRA</option>
					
						<option value="56|MALAWI">MALAWI</option>
					
						<option value="106|MALAYSIA">MALAYSIA</option>
					
						<option value="127|MALDIVE">MALDIVE</option>
					
						<option value="149|MALI">MALI</option>
					
						<option value="105|MALTA">MALTA</option>
					
						<option value="219|MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="107|MAROCCO">MAROCCO</option>
					
						<option value="213|MARTINICA">MARTINICA</option>
					
						<option value="141|MAURITANIA">MAURITANIA</option>
					
						<option value="128|MAURIZIO">MAURIZIO</option>
					
						<option value="226|MAYOTTE">MAYOTTE</option>
					
						<option value="231|MELILLA">MELILLA</option>
					
						<option value="46|MESSICO">MESSICO</option>
					
						<option value="215|MICRONESIA">MICRONESIA</option>
					
						<option value="177|MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="265|MOLDAVIA">MOLDAVIA</option>
					
						<option value="91|MONACO">MONACO</option>
					
						<option value="110|MONGOLIA">MONGOLIA</option>
					
						<option value="290|MONTENEGRO">MONTENEGRO</option>
					
						<option value="208|MONTSERRAT">MONTSERRAT</option>
					
						<option value="134|MOZAMBICO">MOZAMBICO</option>
					
						<option value="83|MYANMAR">MYANMAR</option>
					
						<option value="109|NAURU">NAURU</option>
					
						<option value="115|NEPAL">NEPAL</option>
					
						<option value="47|NICARAGUA">NICARAGUA</option>
					
						<option value="150|NIGER">NIGER</option>
					
						<option value="117|NIGERIA">NIGERIA</option>
					
						<option value="205|NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="285|NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="48|NORVEGIA">NORVEGIA</option>
					
						<option value="253|NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="49|NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="175|OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="252|OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="163|OMAN">OMAN</option>
					
						<option value="50|PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="36|PAKISTAN">PAKISTAN</option>
					
						<option value="279|PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="51|PANAMA">PANAMA</option>
					
						<option value="186|PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="52|PARAGUAY">PARAGUAY</option>
					
						<option value="232|PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="233|PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="53|PERU'">PERU'</option>
					
						<option value="225|POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="54|POLONIA">POLONIA</option>
					
						<option value="55|PORTOGALLO">PORTOGALLO</option>
					
						<option value="220|PORTORICO">PORTORICO</option>
					
						<option value="168|QATAR">QATAR</option>
					
						<option value="242|RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="31|REGNO UNITO">REGNO UNITO</option>
					
						<option value="22|REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="275|REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="143|REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="291|REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="216|REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="37|REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="63|REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="94|REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="16|REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="78|REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="247|REUNION">REUNION</option>
					
						<option value="61|ROMANIA">ROMANIA</option>
					
						<option value="151|RUANDA">RUANDA</option>
					
						<option value="262|RUSSIA">RUSSIA</option>
					
						<option value="254|S.ELENA">S.ELENA</option>
					
						<option value="166|SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="293|SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="199|SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="191|SALOMONE">SALOMONE</option>
					
						<option value="131|SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="187|SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="189|SEICELLE">SEICELLE</option>
					
						<option value="152|SENEGAL">SENEGAL</option>
					
						<option value="289|SERBIA">SERBIA</option>
					
						<option value="243|SHARJAH">SHARJAH</option>
					
						<option value="153|SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="147|SINGAPORE">SINGAPORE</option>
					
						<option value="294|SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="65|SIRIA">SIRIA</option>
					
						<option value="276|SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="260|SLOVENIA">SLOVENIA</option>
					
						<option value="66|SOMALIA">SOMALIA</option>
					
						<option value="67|SPAGNA">SPAGNA</option>
					
						<option value="85|SRI LANKA">SRI LANKA</option>
					
						<option value="195|ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="222|ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="248|ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="69|STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="70|SUDAN">SUDAN</option>
					
						<option value="124|SURINAME">SURINAME</option>
					
						<option value="286|SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="68|SVEZIA">SVEZIA</option>
					
						<option value="71|SVIZZERA">SVIZZERA</option>
					
						<option value="138|SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="272|TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="57|TANZANIA">TANZANIA</option>
					
						<option value="245|TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="183|TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="180|TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="72|THAILANDIA">THAILANDIA</option>
					
						<option value="287|TIMOR">TIMOR</option>
					
						<option value="155|TOGO">TOGO</option>
					
						<option value="236|TOKELAU">TOKELAU</option>
					
						<option value="162|TONGA">TONGA</option>
					
						<option value="120|TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="229|TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="75|TUNISIA">TUNISIA</option>
					
						<option value="76|TURCHIA">TURCHIA</option>
					
						<option value="273|TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="210|TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="193|TUVALU">TUVALU</option>
					
						<option value="263|UCRAINA">UCRAINA</option>
					
						<option value="132|UGANDA">UGANDA</option>
					
						<option value="244|UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="77|UNGHERIA">UNGHERIA</option>
					
						<option value="80|URUGUAY">URUGUAY</option>
					
						<option value="271|UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="121|VANUATU">VANUATU</option>
					
						<option value="81|VENEZUELA">VENEZUELA</option>
					
						<option value="221|VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="62|VIETNAM">VIETNAM</option>
					
						<option value="196|VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="218|WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="42|YEMEN">YEMEN</option>
					
						<option value="58|ZAMBIA">ZAMBIA</option>
					
						<option value="73|ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset id='tin2' style="visibility:hidden">
				<span class="label">Taxpayer Identification Number (Tin)</span>
				<input type="text" name="TIN_int2" maxlength="10" value="" id="TIN_int2" style="text-transform:uppercase">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<script>
				$(function (){
				 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
					$("#TIN_int2").mask("__-_______", {completed: function(){$("#TIN_int2").val($("#TIN_int2").val().toUpperCase())} });
				})
			</script>
			
			<fieldset class="lastrow">
				<span class="label">Titolo di studio*</span>
				<select name="titolo_studio_int2" id="titolo_studio_int2"><option value="">seleziona</option>
					<option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
					<option value="Laurea">Laurea</option>
					<option value="Diploma">Diploma</option>
					<option value="Licenza media">Licenza media</option>
					<option value="Licenza elementare">Licenza elementare</option>
					<option value="Nessuno">Nessuno</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
		</div>

		<!-- Documento identita' -->
		<div class="aolblock">
			<h3>Documento di identità</h3>
			
			<fieldset>
				<span class="label">Tipo di documento*</span>
				<select name="tipo_doc_int2" onchange="setEmessione('tipo_doc_int2', 'stato_emissione_int2', 'emesso_da_int2');" id="tipo_doc_int2"><option value="Carta d'identità">Carta d'identità</option>
					<option value="Patente">Patente</option>
					<option value="Passaporto">Passaporto</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Numero*</span>
				<input type="text" name="numero_doc_int2" maxlength="16" value="" id="numero_doc_int2">
				<span class="errortext">Compila</span>
			</fieldset>

			<fieldset>
				<span class="label">Data di rilascio*</span>
					<div id="divDataEmissione2">
					<div class="fieldblock">
						<input type="text" name="gg_emissione_int2" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int2,'gg', 2)" id="gg_emissione_int2" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>

					<div class="fieldblock">
						<input type="text" name="mm_emissione_int2" maxlength="2" value="mm" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int2,'mm', 2)" id="mm_emissione_int2" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>
					<div class="fieldblock">
						<input type="text" name="aa_emissione_int2" maxlength="4" value="aaaa" onclick="removeOpt(this,'gg')" id="aa_emissione_int2" style="width:50px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					</div>
					<span class="errortext"></span>
			</fieldset>
			
			<fieldset>
				<span class="label">Stato di rilascio*</span>
				<select name="stato_emissione_int2" onchange="checkStato(this.value,'provincia_emissione_int2','comune_emissione_int2');setEmessione('tipo_doc_int2', 'stato_emissione_int2', 'emesso_da_int2');" id="stato_emissione_int2"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<br class="clear" />
			
			<fieldset class="lastrow">
				<span class="label">Provincia di rilascio*</span>
				<select name="provincia_emissione_int2" onchange="ProvCom.updateComuni('divComuneEmissione2', 'provincia_emissione_int2', 'comune_emissione_int2', 'comune_emissione_int2', 'no', 'Comune di rilascio*');" id="provincia_emissione_int2"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneEmissione2">
			<fieldset class="lastrow">
				<span class="label">Comune di rilascio*</span>
				<select name="comune_emissione_int2" id="comune_emissione_int2"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
		</div>
	
		<!-- Recapiti -->
		<div class="aolblock">
			<h3>Recapiti</h3>

			<fieldset>
				<span class="label">Indirizzo di residenza*</span>
				<div class="fieldblock">
					<select name="qualif_int2" id="qualif_int2" style="width:85px"><option value="">seleziona</option>
						
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
						
						<option value="Altro">Altro</option></select>
					<span class="errortext">Seleziona</span>

				</div>
				<div class="fieldblock">
					<input type="text" name="via_int2" value="" id="via_int2" style="width: 161px;">
					<span class="errortext">Compila</span>
				</div>
			</fieldset>
			
			<fieldset style="width: 100px;">
				<span class="label">N*</span>
				<input type="text" name="civico_int2" value="" id="civico_int2" style="width:40px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width:185px;">
				<span class="label">CAP* (specifico)*</span>
				<input type="text" name="cap_int2" maxlength="5" value="" id="cap_int2" style="width: 138px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia*</span>
				<select name="provincia_int2" onchange="ProvCom.updateComuni('divComuneResidenza2', 'provincia_int2', 'comune_int2', 'comune_int2', 'no', 'Comune*');" id="provincia_int2"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneResidenza2">
			<fieldset>
				<span class="label">Comune*</span>
				<select name="comune_int2" id="comune_int2"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
			<div id="divIndirizzoCai2" class="expandable">
				<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
				
				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
					<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset>
						<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
						<div class="fieldblock">
							<select name="qualif_domicilioCAI_int2" id="qualif_domicilioCAI_int2" style="width:85px"><option value="">seleziona</option>
							<option value="Via">Via</option>
							<option value="Viale">Viale</option>
							<option value="Corso">Corso</option>
							<option value="Piazza">Piazza</option>
							<option value="Strada">Strada</option>
							<option value="Stretto">Stretto</option>
							<option value="Contrada">Contrada</option>
							<option value="Vicolo">Vicolo</option>
							<option value="Località">Località</option>
							<option value="Largo">Largo</option>
							<option value="Vico">Vico</option>
							<option value="Altro">Altro</option></select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="fieldblock">
							<input type="text" name="via_domicilioCAI_int2" value="" id="via_domicilioCAI_int2" style="width: 161px;">
							<span class="errortext">Compila</span>
						</div>
					</fieldset>
					
					<fieldset style="width: 100px;">
						<span class="label">N*</span>
						<input type="text" name="civico_domicilioCAI_int2" value="" id="civico_domicilioCAI_int2" style="width:40px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset style="width:185px;">
						<span class="label">CAP* (specifico)*</span>
						<input type="text" name="cap_domicilioCAI_int2" maxlength="5" value="" id="cap_domicilioCAI_int2" style="width: 136px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset>
						<span class="label">Provincia*</span>
						<select name="provincia_domicilioCAI_int2" onchange="ProvCom.updateComuni('divComuneDomicilioCAI2', 'provincia_domicilioCAI_int2', 'comune_domicilioCAI_int2', 'comune_domicilioCAI_int2', 'no', 'Comune*');" id="provincia_domicilioCAI_int2"><option value="">seleziona</option>
							
								<option value="AG">AG</option>
							
								<option value="AL">AL</option>
							
								<option value="AN">AN</option>
							
								<option value="AO">AO</option>
							
								<option value="AP">AP</option>
							
								<option value="AQ">AQ</option>
							
								<option value="AR">AR</option>
							
								<option value="AT">AT</option>
							
								<option value="AV">AV</option>
							
								<option value="BA">BA</option>
							
								<option value="BG">BG</option>
							
								<option value="BI">BI</option>
							
								<option value="BL">BL</option>
							
								<option value="BN">BN</option>
							
								<option value="BO">BO</option>
							
								<option value="BR">BR</option>
							
								<option value="BS">BS</option>
							
								<option value="BT">BT</option>
							
								<option value="BZ">BZ</option>
							
								<option value="CA">CA</option>
							
								<option value="CB">CB</option>
							
								<option value="CE">CE</option>
							
								<option value="CH">CH</option>
							
								<option value="CL">CL</option>
							
								<option value="CN">CN</option>
							
								<option value="CO">CO</option>
							
								<option value="CR">CR</option>
							
								<option value="CS">CS</option>
							
								<option value="CT">CT</option>
							
								<option value="CZ">CZ</option>
							
								<option value="EN">EN</option>
							
								<option value="FC">FC</option>
							
								<option value="FE">FE</option>
							
								<option value="FG">FG</option>
							
								<option value="FI">FI</option>
							
								<option value="FM">FM</option>
							
								<option value="FR">FR</option>
							
								<option value="GE">GE</option>
							
								<option value="GO">GO</option>
							
								<option value="GR">GR</option>
							
								<option value="IM">IM</option>
							
								<option value="IS">IS</option>
							
								<option value="KR">KR</option>
							
								<option value="LC">LC</option>
							
								<option value="LE">LE</option>
							
								<option value="LI">LI</option>
							
								<option value="LO">LO</option>
							
								<option value="LT">LT</option>
							
								<option value="LU">LU</option>
							
								<option value="MB">MB</option>
							
								<option value="MC">MC</option>
							
								<option value="ME">ME</option>
							
								<option value="MI">MI</option>
							
								<option value="MN">MN</option>
							
								<option value="MO">MO</option>
							
								<option value="MS">MS</option>
							
								<option value="MT">MT</option>
							
								<option value="NA">NA</option>
							
								<option value="NO">NO</option>
							
								<option value="NU">NU</option>
							
								<option value="OR">OR</option>
							
								<option value="PA">PA</option>
							
								<option value="PC">PC</option>
							
								<option value="PD">PD</option>
							
								<option value="PE">PE</option>
							
								<option value="PG">PG</option>
							
								<option value="PI">PI</option>
							
								<option value="PN">PN</option>
							
								<option value="PO">PO</option>
							
								<option value="PR">PR</option>
							
								<option value="PT">PT</option>
							
								<option value="PU">PU</option>
							
								<option value="PV">PV</option>
							
								<option value="PZ">PZ</option>
							
								<option value="RA">RA</option>
							
								<option value="RC">RC</option>
							
								<option value="RE">RE</option>
							
								<option value="RG">RG</option>
							
								<option value="RI">RI</option>
							
								<option value="RM">RM</option>
							
								<option value="RN">RN</option>
							
								<option value="RO">RO</option>
							
								<option value="SA">SA</option>
							
								<option value="SI">SI</option>
							
								<option value="SO">SO</option>
							
								<option value="SP">SP</option>
							
								<option value="SR">SR</option>
							
								<option value="SS">SS</option>
							
								<option value="SU">SU</option>
							
								<option value="SV">SV</option>
							
								<option value="TA">TA</option>
							
								<option value="TE">TE</option>
							
								<option value="TN">TN</option>
							
								<option value="TO">TO</option>
							
								<option value="TP">TP</option>
							
								<option value="TR">TR</option>
							
								<option value="TS">TS</option>
							
								<option value="TV">TV</option>
							
								<option value="UD">UD</option>
							
								<option value="VA">VA</option>
							
								<option value="VB">VB</option>
							
								<option value="VC">VC</option>
							
								<option value="VE">VE</option>
							
								<option value="VI">VI</option>
							
								<option value="VR">VR</option>
							
								<option value="VT">VT</option>
							
								<option value="VV">VV</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					
					<div id="divComuneDomicilioCAI2">
					<fieldset>
						<span class="label">Comune*</span>
						<select name="comune_domicilioCAI_int2" id="comune_domicilioCAI_int2"><option value="">seleziona</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					</div>
				</div>
			</div>

			<div id="divRecapitiTelefonici2" class="expandable">
				<span class="label">Altri recapiti telefonici (facoltativi)</span>

				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn">
					</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset class="lastrow">
							<span class="label">Telefono casa</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_int2" maxlength="4" value="" id="prefisso_int2" style="width:50px">
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_int2" value="" id="telefono_int2" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
					
					<fieldset class="lastrow">
							<span class="label">Telefono ufficio</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_2_int2" maxlength="4" value="" id="prefisso_2_int2" style="width:50px"> 
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_2_int2" value="" id="telefono_2_int2" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
				</div>
			</div>
		</div>

		<div class="aolblock">
			<h3>Tu e Webank</h3>
			<p class="minitext">Sei gi&agrave; cliente del Banco BPM?</p>
			<p class="minitext grey">Dichiarando di essere gi&agrave; cliente Banco BPM non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli presenti nei nostri archivi.</p>
			
			<div class="fieldblock" id="divIdentificazione2">
				<fieldset class="withInput">
					<label style="margin-top:15px"><input type="radio" name="isbpmcliente_int2" value="SI" id="isbpmcliente_int2"><span class="optiontext">si</span></label>
				</fieldset>
				<fieldset class="withInput lastrow">
					<label><input type="radio" name="isbpmcliente_int2" value="NO" id="isbpmcliente_int2"><span class="optiontext">no</span></label>
					<br class="clear" />
				</fieldset>
				<span class="errortext">Seleziona</span>
			</div>
			<br class="clear" />
		</div>

	</div>
	
	</div>
	
	
	<div class="aolAcc" id="terzoIntestatario" style="display:none">
	
	<div class="aolAccTop">
		<a class="aolAccTitle" id="intestatario3" onclick="switchExp(this,true);setViewElement(this);" href="javascript:;" title="Espandi">
			<span class="titoloAcc">Intestatario 3</span>
			<span class="accButt" ></span>
			<span class="errortext">Compila</span>
		</a>
	</div>
	
		<div class="aolAccContent">
	
	<div class="aolblock">
			<h3>Dati anagrafici intestatario</h3>
	
			<fieldset>
				<span class="label">Nome*</span>
				<input type="text" name="nome_int3" value="" id="nome_int3">
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Cognome*</span>
				<input type="text" name="cognome_int3" value="" id="cognome_int3">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width: 183px;">
				<span class="label">Data di nascita*</span>
				<div id="divDataNascita3">
				<div class="fieldblock">
					<input type="text" name="gg_nascita_int3" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int3,'gg', 2)" id="gg_nascita_int3" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="mm_nascita_int3" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int3,'mm', 2)" id="mm_nascita_int3" style="width:25px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
	
				<span class="separator">/</span>
	
				<div class="fieldblock">
					<input type="text" name="aa_nascita_int3" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" id="aa_nascita_int3" style="width:50px;" class="opzionale">
					<span class="errortext">Compila</span>
				</div>
				</div>
				<span class="errortext"></span>
			</fieldset>
	
			<fieldset style="width:104px">
				<span class="label">Sesso*</span>
				<label style="width:33px;"><input type="radio" name="sesso_int3" value="M" id="sesso_int3"><span class="optiontext">M</span></label>
				<label style="width:30px;"><input type="radio" name="sesso_int3" value="F" id="sesso_int3"><span class="optiontext">F</span></label>
				<span class="errortext">Compila</span>
			</fieldset>
	
			<fieldset>
				<span class="label">Codice fiscale*</span>
				<input type="text" name="cod_fiscale_int3" maxlength="16" value="" id="cod_fiscale_int3">
				<script type="text/javascript" defer="defer">setCounterOnField("cod_fiscale_int3",16);</script>
				<span class="errortext">Compila</span>
			</fieldset>
			
			<br class="clear" />
	
			<fieldset class="lastrow">
				<span class="label">Email*</span>
				<input type="text" name="mail_int3" value="" id="mail_int3">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset class="lastrow">
			<div id="cellulareInt3">
				<span class="label">Numero cellulare*<a onmouseover="showGreenToolTip(this, 'Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt="" /></a></span>
				
				<div class="fieldblock">
					<input type="text" name="prefisso_3_int3" maxlength="3" value="" onkeyup="nextFocus(this, telefono_3_int3,'',3)" id="prefisso_3_int3" style="width:50px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<input type="text" name="telefono_3_int3" maxlength="7" value="" id="telefono_3_int3" style="width:60px">
					<span class="errortext">Compila</span>
				</div>
	
				<div class="fieldblock">
					<select name="operatore_int3" id="operatore_int3" style="width:116px" class="inputStep2 altri"><option value="">operatore</option>
						
							<option value="WIND">Wind</option>
						
							<option value="VODAF">Vodafone</option>
						
							<option value="TRE">Tre</option>
						
							<option value="TIM">Tim</option>
						
							<option value="POSTE">Poste Mobile</option>
						
							<option value="COOP">Coop Voce</option>
						
							<option value="UNO">Uno Mobile</option>
						
							<option value="MTV">Mtv Mobile</option>
						
							<option value="ILIAD">Iliad</option>
						
							<option value="FASTWEB">Fastweb Mobile</option>
						
							<option value="DAILY">Daily Telecom Mobile</option>
						
							<option value="CONAD">Conad Insim</option>
						
							<option value="BT">BT Mobile</option>
						
							<option value="AMOBILE">A-Mobile</option>
						
							<option value="ALTRO">Altro...</option></select>
					<span class="errortext">Seleziona</span>
				</div>
			</div>
			<span class="errortext">Seleziona</span>
			</fieldset>
		</div>

		<div class="aolblock">
			<h3>Informazioni personali</h3>
			
			<fieldset>
				<span class="label">Stato di nascita*</span>
				<select name="stato_nascita_int3" onchange="checkStato(this.value,'provincia_nascita_int3','comune_nascita_int3')" id="stato_nascita_int3"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CECOSLOVACCHIA">CECOSLOVACCHIA</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GAZA (TERRITORIO DI)">GAZA (TERRITORIO DI)</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="JUGOSLAVIA">JUGOSLAVIA</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="NUOVE EBRIDI">NUOVE EBRIDI</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DEMOCRATICA DI GERMANIA">REPUBBLICA DEMOCRATICA DI GERMANIA</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SOMALIA FRANCESE">SOMALIA FRANCESE</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANGANICA">TANGANICA</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URSS">URSS</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VIETNAM DEL NORD">VIETNAM DEL NORD</option>
					
						<option value="VIETNAM DEL SUD">VIETNAM DEL SUD</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="YEMEN MERIDIONALE">YEMEN MERIDIONALE</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Cittadinanza*</span>
				<select name="cittadinanza_int3" id="cittadinanza_int3"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia di nascita*</span>
				<select name="provincia_nascita_int3" onchange="ProvCom.updateComuni('divComune3', 'provincia_nascita_int3', 'comune_nascita_int3', 'comune_nascita_int3', 'no', 'Comune di nascita*');" id="provincia_nascita_int3"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComune3">
			<fieldset>
				<span class="label">Comune di nascita*</span>
				<select name="comune_nascita_int3" id="comune_nascita_int3"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
			<fieldset class="tolltipclick">
				<span class="label">
					<span>Paese di residenza fiscale*</span>
					<span class="closed">
							<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')}" class="uniqTooltipText over fixed" id="tooltipResFis3"><span class="uniqTooltipPos"> <a class="noborder" href="javascript:;"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
							<span class="uniqTooltipInnerHTML">
									<p>Ai fini delle imposte sui redditi si considerano residenti le persone fisiche che per la maggior parte del periodo d'imposta, e cioè 183 giorni all'anno:<ol><li>sono iscritte all'anagrafe della popolazione residente</li><li>hanno nel territorio dello Stato il proprio domicilio  o residenza ai sensi del Codice Civile.</li></ol><br>Basta il verificarsi di una sola di queste condizioni.</p>
							</span></span>
					</span>
				</span>
				<select name="residenzaFiscale_int3" onchange="displayTIN('residenzaFiscale_int3', 'tin3', 'TIN_int3')" id="residenzaFiscale_int3"><option value="">seleziona</option>
					
						<option value="86|ITALIA">ITALIA</option>
					
						<option value="238|ABU DHABI">ABU DHABI</option>
					
						<option value="2|AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="206|AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="246|AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="239|AJMAN">AJMAN</option>
					
						<option value="292|ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="87|ALBANIA">ALBANIA</option>
					
						<option value="3|ALGERIA">ALGERIA</option>
					
						<option value="148|AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="4|ANDORRA">ANDORRA</option>
					
						<option value="133|ANGOLA">ANGOLA</option>
					
						<option value="209|ANGUILLA">ANGUILLA</option>
					
						<option value="197|ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="5|ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="6|ARGENTINA">ARGENTINA</option>
					
						<option value="266|ARMENIA">ARMENIA</option>
					
						<option value="212|ARUBA">ARUBA</option>
					
						<option value="227|ASCENSION">ASCENSION</option>
					
						<option value="7|AUSTRALIA">AUSTRALIA</option>
					
						<option value="8|AUSTRIA">AUSTRIA</option>
					
						<option value="268|AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="234|AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="160|BAHAMA">BAHAMA</option>
					
						<option value="169|BAHREIN">BAHREIN</option>
					
						<option value="130|BANGLADESH">BANGLADESH</option>
					
						<option value="118|BARBADOS">BARBADOS</option>
					
						<option value="9|BELGIO">BELGIO</option>
					
						<option value="198|BELIZE">BELIZE</option>
					
						<option value="158|BENIN">BENIN</option>
					
						<option value="207|BERMUDA">BERMUDA</option>
					
						<option value="97|BHUTAN">BHUTAN</option>
					
						<option value="264|BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="10|BOLIVIA">BOLIVIA</option>
					
						<option value="295|BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="274|BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="98|BOTSWANA">BOTSWANA</option>
					
						<option value="11|BRASILE">BRASILE</option>
					
						<option value="125|BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="12|BULGARIA">BULGARIA</option>
					
						<option value="142|BURKINA FASO">BURKINA FASO</option>
					
						<option value="25|BURUNDI">BURUNDI</option>
					
						<option value="135|CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="119|CAMERUN">CAMERUN</option>
					
						<option value="139|CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="13|CANADA">CANADA</option>
					
						<option value="211|CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="230|CHAFARINAS">CHAFARINAS</option>
					
						<option value="144|CIAD">CIAD</option>
					
						<option value="15|CILE">CILE</option>
					
						<option value="101|CIPRO">CIPRO</option>
					
						<option value="93|CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="223|CLIPPERTON">CLIPPERTON</option>
					
						<option value="17|COLOMBIA">COLOMBIA</option>
					
						<option value="176|COMORE">COMORE</option>
					
						<option value="18|CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="145|CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="74|COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="84|COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="146|COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="19|COSTARICA">COSTARICA</option>
					
						<option value="261|CROAZIA">CROAZIA</option>
					
						<option value="20|CUBA">CUBA</option>
					
						<option value="296|CURACAO">CURACAO</option>
					
						<option value="21|DANIMARCA">DANIMARCA</option>
					
						<option value="192|DOMINICA">DOMINICA</option>
					
						<option value="240|DUBAI">DUBAI</option>
					
						<option value="24|ECUADOR">ECUADOR</option>
					
						<option value="23|EGITTO">EGITTO</option>
					
						<option value="64|EL SALVADOR">EL SALVADOR</option>
					
						<option value="277|ERITREA">ERITREA</option>
					
						<option value="257|ESTONIA">ESTONIA</option>
					
						<option value="26|ETIOPIA">ETIOPIA</option>
					
						<option value="190|FALKLAND">FALKLAND</option>
					
						<option value="27|FILIPPINE">FILIPPINE</option>
					
						<option value="28|FINLANDIA">FINLANDIA</option>
					
						<option value="29|FRANCIA">FRANCIA</option>
					
						<option value="241|FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="157|GABON">GABON</option>
					
						<option value="164|GAMBIA">GAMBIA</option>
					
						<option value="267|GEORGIA">GEORGIA</option>
					
						<option value="112|GHANA">GHANA</option>
					
						<option value="82|GIAMAICA">GIAMAICA</option>
					
						<option value="88|GIAPPONE">GIAPPONE</option>
					
						<option value="102|GIBILTERRA">GIBILTERRA</option>
					
						<option value="113|GIBUTI">GIBUTI</option>
					
						<option value="122|GIORDANIA">GIORDANIA</option>
					
						<option value="228|GOUGH">GOUGH</option>
					
						<option value="32|GRECIA">GRECIA</option>
					
						<option value="156|GRENADA">GRENADA</option>
					
						<option value="200|GROENLANDIA">GROENLANDIA</option>
					
						<option value="214|GUADALUPA">GUADALUPA</option>
					
						<option value="154|GUAM">GUAM</option>
					
						<option value="33|GUATEMALA">GUATEMALA</option>
					
						<option value="123|GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="201|GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="137|GUINEA">GUINEA</option>
					
						<option value="185|GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="167|GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="159|GUYANA">GUYANA</option>
					
						<option value="34|HAITI">HAITI</option>
					
						<option value="284|HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="35|HONDURAS">HONDURAS</option>
					
						<option value="103|HONG KONG">HONG KONG</option>
					
						<option value="114|INDIA">INDIA</option>
					
						<option value="129|INDONESIA">INDONESIA</option>
					
						<option value="39|IRAN">IRAN</option>
					
						<option value="38|IRAQ">IRAQ</option>
					
						<option value="40|IRLANDA">IRLANDA</option>
					
						<option value="41|ISLANDA">ISLANDA</option>
					
						<option value="203|ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="100|ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="256|ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="255|ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="237|ISOLE COOK">ISOLE COOK</option>
					
						<option value="188|ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="204|ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="161|ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="217|ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="249|ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="178|ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="182|ISRAELE">ISRAELE</option>
					
						<option value="202|JERSEY">JERSEY</option>
					
						<option value="269|KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="116|KENYA">KENYA</option>
					
						<option value="270|KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="194|KIRIBATI">KIRIBATI</option>
					
						<option value="126|KUWAIT">KUWAIT</option>
					
						<option value="136|LAOS">LAOS</option>
					
						<option value="89|LESOTHO">LESOTHO</option>
					
						<option value="258|LETTONIA">LETTONIA</option>
					
						<option value="95|LIBANO">LIBANO</option>
					
						<option value="44|LIBERIA">LIBERIA</option>
					
						<option value="45|LIBIA">LIBIA</option>
					
						<option value="90|LIECHTENSTEIN">LIECHTENSTEIN</option>
					
						<option value="259|LITUANIA">LITUANIA</option>
					
						<option value="92|LUSSEMBURGO">LUSSEMBURGO</option>
					
						<option value="59|MACAO">MACAO</option>
					
						<option value="278|MACEDONIA">MACEDONIA</option>
					
						<option value="104|MADAGASCAR">MADAGASCAR</option>
					
						<option value="235|MADEIRA">MADEIRA</option>
					
						<option value="56|MALAWI">MALAWI</option>
					
						<option value="106|MALAYSIA">MALAYSIA</option>
					
						<option value="127|MALDIVE">MALDIVE</option>
					
						<option value="149|MALI">MALI</option>
					
						<option value="105|MALTA">MALTA</option>
					
						<option value="219|MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="107|MAROCCO">MAROCCO</option>
					
						<option value="213|MARTINICA">MARTINICA</option>
					
						<option value="141|MAURITANIA">MAURITANIA</option>
					
						<option value="128|MAURIZIO">MAURIZIO</option>
					
						<option value="226|MAYOTTE">MAYOTTE</option>
					
						<option value="231|MELILLA">MELILLA</option>
					
						<option value="46|MESSICO">MESSICO</option>
					
						<option value="215|MICRONESIA">MICRONESIA</option>
					
						<option value="177|MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="265|MOLDAVIA">MOLDAVIA</option>
					
						<option value="91|MONACO">MONACO</option>
					
						<option value="110|MONGOLIA">MONGOLIA</option>
					
						<option value="290|MONTENEGRO">MONTENEGRO</option>
					
						<option value="208|MONTSERRAT">MONTSERRAT</option>
					
						<option value="134|MOZAMBICO">MOZAMBICO</option>
					
						<option value="83|MYANMAR">MYANMAR</option>
					
						<option value="109|NAURU">NAURU</option>
					
						<option value="115|NEPAL">NEPAL</option>
					
						<option value="47|NICARAGUA">NICARAGUA</option>
					
						<option value="150|NIGER">NIGER</option>
					
						<option value="117|NIGERIA">NIGERIA</option>
					
						<option value="205|NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="285|NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="48|NORVEGIA">NORVEGIA</option>
					
						<option value="253|NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="49|NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="175|OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="252|OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="163|OMAN">OMAN</option>
					
						<option value="50|PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="36|PAKISTAN">PAKISTAN</option>
					
						<option value="279|PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="51|PANAMA">PANAMA</option>
					
						<option value="186|PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="52|PARAGUAY">PARAGUAY</option>
					
						<option value="232|PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="233|PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="53|PERU'">PERU'</option>
					
						<option value="225|POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="54|POLONIA">POLONIA</option>
					
						<option value="55|PORTOGALLO">PORTOGALLO</option>
					
						<option value="220|PORTORICO">PORTORICO</option>
					
						<option value="168|QATAR">QATAR</option>
					
						<option value="242|RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="31|REGNO UNITO">REGNO UNITO</option>
					
						<option value="22|REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="275|REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="143|REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="291|REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="216|REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="37|REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="63|REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="94|REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="16|REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="78|REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="247|REUNION">REUNION</option>
					
						<option value="61|ROMANIA">ROMANIA</option>
					
						<option value="151|RUANDA">RUANDA</option>
					
						<option value="262|RUSSIA">RUSSIA</option>
					
						<option value="254|S.ELENA">S.ELENA</option>
					
						<option value="166|SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="293|SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="199|SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="191|SALOMONE">SALOMONE</option>
					
						<option value="131|SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="187|SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="189|SEICELLE">SEICELLE</option>
					
						<option value="152|SENEGAL">SENEGAL</option>
					
						<option value="289|SERBIA">SERBIA</option>
					
						<option value="243|SHARJAH">SHARJAH</option>
					
						<option value="153|SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="147|SINGAPORE">SINGAPORE</option>
					
						<option value="294|SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="65|SIRIA">SIRIA</option>
					
						<option value="276|SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="260|SLOVENIA">SLOVENIA</option>
					
						<option value="66|SOMALIA">SOMALIA</option>
					
						<option value="67|SPAGNA">SPAGNA</option>
					
						<option value="85|SRI LANKA">SRI LANKA</option>
					
						<option value="195|ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="222|ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="248|ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="69|STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="70|SUDAN">SUDAN</option>
					
						<option value="124|SURINAME">SURINAME</option>
					
						<option value="286|SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="68|SVEZIA">SVEZIA</option>
					
						<option value="71|SVIZZERA">SVIZZERA</option>
					
						<option value="138|SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="272|TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="57|TANZANIA">TANZANIA</option>
					
						<option value="245|TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="183|TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="180|TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="72|THAILANDIA">THAILANDIA</option>
					
						<option value="287|TIMOR">TIMOR</option>
					
						<option value="155|TOGO">TOGO</option>
					
						<option value="236|TOKELAU">TOKELAU</option>
					
						<option value="162|TONGA">TONGA</option>
					
						<option value="120|TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="229|TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="75|TUNISIA">TUNISIA</option>
					
						<option value="76|TURCHIA">TURCHIA</option>
					
						<option value="273|TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="210|TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="193|TUVALU">TUVALU</option>
					
						<option value="263|UCRAINA">UCRAINA</option>
					
						<option value="132|UGANDA">UGANDA</option>
					
						<option value="244|UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="77|UNGHERIA">UNGHERIA</option>
					
						<option value="80|URUGUAY">URUGUAY</option>
					
						<option value="271|UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="121|VANUATU">VANUATU</option>
					
						<option value="81|VENEZUELA">VENEZUELA</option>
					
						<option value="221|VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="62|VIETNAM">VIETNAM</option>
					
						<option value="196|VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="218|WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="42|YEMEN">YEMEN</option>
					
						<option value="58|ZAMBIA">ZAMBIA</option>
					
						<option value="73|ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset id='tin3' style="visibility:hidden">
				<span class="label">Taxpayer Identification Number (Tin)</span>
				<input type="text" name="TIN_int3" maxlength="10" value="" id="TIN_int3" style="text-transform:uppercase">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<script>
				$(function (){
				 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
					$("#TIN_int3").mask("__-_______", {completed: function(){$("#TIN_int3").val($("#TIN_int3").val().toUpperCase())} });
				})
			</script>
			
			<fieldset class="lastrow">
				<span class="label">Titolo di studio*</span>
				<select name="titolo_studio_int3" id="titolo_studio_int3"><option value="">seleziona</option>
					<option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
					<option value="Laurea">Laurea</option>
					<option value="Diploma">Diploma</option>
					<option value="Licenza media">Licenza media</option>
					<option value="Licenza elementare">Licenza elementare</option>
					<option value="Nessuno">Nessuno</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
		</div>

		<!-- Documento identita' -->
		<div class="aolblock">
			<h3>Documento di identità</h3>
			
			<fieldset>
				<span class="label">Tipo di documento*</span>
				<select name="tipo_doc_int3" onchange="setEmessione('tipo_doc_int3', 'stato_emissione_int3', 'emesso_da_int3');" id="tipo_doc_int3"><option value="Carta d'identità">Carta d'identità</option>
					<option value="Patente">Patente</option>
					<option value="Passaporto">Passaporto</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Numero*</span>
				<input type="text" name="numero_doc_int3" maxlength="16" value="" id="numero_doc_int3">
				<span class="errortext">Compila</span>
			</fieldset>

			<fieldset>
				<span class="label">Data di rilascio*</span>
					<div id="divDataEmissione3">
					<div class="fieldblock">
						<input type="text" name="gg_emissione_int3" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int3,'gg', 2)" id="gg_emissione_int3" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>

					<div class="fieldblock">
						<input type="text" name="mm_emissione_int3" maxlength="2" value="mm" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int3,'mm', 2)" id="mm_emissione_int3" style="width:25px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					<span class="separator">/</span>
					<div class="fieldblock">
						<input type="text" name="aa_emissione_int3" maxlength="4" value="aaaa" onclick="removeOpt(this,'gg')" id="aa_emissione_int3" style="width:50px;" class="opzionale">
						<span class="errortext">Compila</span>
					</div>
					</div>
					<span class="errortext"></span>
			</fieldset>
			
			<fieldset>
				<span class="label">Stato di rilascio*</span>
				<select name="stato_emissione_int3" onchange="checkStato(this.value,'provincia_emissione_int3','comune_emissione_int3');setEmessione('tipo_doc_int3', 'stato_emissione_int3', 'emesso_da_int3');" id="stato_emissione_int3"><option value="">seleziona</option>
					
						<option value="ITALIA" selected="selected">ITALIA</option>
					
						<option value="ABU DHABI">ABU DHABI</option>
					
						<option value="AFGHANISTAN">AFGHANISTAN</option>
					
						<option value="AFRICA DEL SUD OVEST - NAMIBIA">AFRICA DEL SUD OVEST - NAMIBIA</option>
					
						<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
					
						<option value="AJMAN">AJMAN</option>
					
						<option value="ALAND ISOLE">ALAND ISOLE</option>
					
						<option value="ALBANIA">ALBANIA</option>
					
						<option value="ALGERIA">ALGERIA</option>
					
						<option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
					
						<option value="ANDORRA">ANDORRA</option>
					
						<option value="ANGOLA">ANGOLA</option>
					
						<option value="ANGUILLA">ANGUILLA</option>
					
						<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
					
						<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
					
						<option value="ARGENTINA">ARGENTINA</option>
					
						<option value="ARMENIA">ARMENIA</option>
					
						<option value="ARUBA">ARUBA</option>
					
						<option value="ASCENSION">ASCENSION</option>
					
						<option value="AUSTRALIA">AUSTRALIA</option>
					
						<option value="AUSTRIA">AUSTRIA</option>
					
						<option value="AZERBAIGIAN">AZERBAIGIAN</option>
					
						<option value="AZZORRE ISOLE">AZZORRE ISOLE</option>
					
						<option value="BAHAMA">BAHAMA</option>
					
						<option value="BAHREIN">BAHREIN</option>
					
						<option value="BANGLADESH">BANGLADESH</option>
					
						<option value="BARBADOS">BARBADOS</option>
					
						<option value="BELGIO">BELGIO</option>
					
						<option value="BELIZE">BELIZE</option>
					
						<option value="BENIN">BENIN</option>
					
						<option value="BERMUDA">BERMUDA</option>
					
						<option value="BHUTAN">BHUTAN</option>
					
						<option value="BIELORUSSIA">BIELORUSSIA</option>
					
						<option value="BOLIVIA">BOLIVIA</option>
					
						<option value="BONAIRE SAINT EUSTATIUS AND SABA">BONAIRE SAINT EUSTATIUS AND SABA</option>
					
						<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
					
						<option value="BOTSWANA">BOTSWANA</option>
					
						<option value="BRASILE">BRASILE</option>
					
						<option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
					
						<option value="BULGARIA">BULGARIA</option>
					
						<option value="BURKINA FASO">BURKINA FASO</option>
					
						<option value="BURUNDI">BURUNDI</option>
					
						<option value="CAMBOGIA (CAMPUCEA)">CAMBOGIA (CAMPUCEA)</option>
					
						<option value="CAMERUN">CAMERUN</option>
					
						<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
					
						<option value="CANADA">CANADA</option>
					
						<option value="CAYMAN ISOLE">CAYMAN ISOLE</option>
					
						<option value="CHAFARINAS">CHAFARINAS</option>
					
						<option value="CIAD">CIAD</option>
					
						<option value="CILE">CILE</option>
					
						<option value="CIPRO">CIPRO</option>
					
						<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
					
						<option value="CLIPPERTON">CLIPPERTON</option>
					
						<option value="COLOMBIA">COLOMBIA</option>
					
						<option value="COMORE">COMORE</option>
					
						<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
					
						<option value="CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
					
						<option value="COREA DEL NORD">COREA DEL NORD</option>
					
						<option value="COREA DEL SUD">COREA DEL SUD</option>
					
						<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
					
						<option value="COSTARICA">COSTARICA</option>
					
						<option value="CROAZIA">CROAZIA</option>
					
						<option value="CUBA">CUBA</option>
					
						<option value="CURACAO">CURACAO</option>
					
						<option value="DANIMARCA">DANIMARCA</option>
					
						<option value="DOMINICA">DOMINICA</option>
					
						<option value="DUBAI">DUBAI</option>
					
						<option value="ECUADOR">ECUADOR</option>
					
						<option value="EGITTO">EGITTO</option>
					
						<option value="EL SALVADOR">EL SALVADOR</option>
					
						<option value="ERITREA">ERITREA</option>
					
						<option value="ESTONIA">ESTONIA</option>
					
						<option value="ETIOPIA">ETIOPIA</option>
					
						<option value="FALKLAND">FALKLAND</option>
					
						<option value="FILIPPINE">FILIPPINE</option>
					
						<option value="FINLANDIA">FINLANDIA</option>
					
						<option value="FRANCIA">FRANCIA</option>
					
						<option value="FUIJAYRAH">FUIJAYRAH</option>
					
						<option value="GABON">GABON</option>
					
						<option value="GAMBIA">GAMBIA</option>
					
						<option value="GEORGIA">GEORGIA</option>
					
						<option value="GHANA">GHANA</option>
					
						<option value="GIAMAICA">GIAMAICA</option>
					
						<option value="GIAPPONE">GIAPPONE</option>
					
						<option value="GIBILTERRA">GIBILTERRA</option>
					
						<option value="GIBUTI">GIBUTI</option>
					
						<option value="GIORDANIA">GIORDANIA</option>
					
						<option value="GOUGH">GOUGH</option>
					
						<option value="GRECIA">GRECIA</option>
					
						<option value="GRENADA">GRENADA</option>
					
						<option value="GROENLANDIA">GROENLANDIA</option>
					
						<option value="GUADALUPA">GUADALUPA</option>
					
						<option value="GUAM">GUAM</option>
					
						<option value="GUATEMALA">GUATEMALA</option>
					
						<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
					
						<option value="GUERNSEY C.I.">GUERNSEY C.I.</option>
					
						<option value="GUINEA">GUINEA</option>
					
						<option value="GUINEA BISSAU">GUINEA BISSAU</option>
					
						<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
					
						<option value="GUYANA">GUYANA</option>
					
						<option value="HAITI">HAITI</option>
					
						<option value="HEARD E MCDONALD ISOLE">HEARD E MCDONALD ISOLE</option>
					
						<option value="HONDURAS">HONDURAS</option>
					
						<option value="HONG KONG">HONG KONG</option>
					
						<option value="INDIA">INDIA</option>
					
						<option value="INDONESIA">INDONESIA</option>
					
						<option value="IRAN">IRAN</option>
					
						<option value="IRAQ">IRAQ</option>
					
						<option value="IRLANDA">IRLANDA</option>
					
						<option value="ISLANDA">ISLANDA</option>
					
						<option value="ISOLA DI MAN">ISOLA DI MAN</option>
					
						<option value="ISOLE CANARIE">ISOLE CANARIE</option>
					
						<option value="ISOLE CAROLINE">ISOLE CAROLINE</option>
					
						<option value="ISOLE CHAGOS">ISOLE CHAGOS</option>
					
						<option value="ISOLE COOK">ISOLE COOK</option>
					
						<option value="ISOLE DEL CAPO VERDE">ISOLE DEL CAPO VERDE</option>
					
						<option value="ISOLE FAEROER">ISOLE FAEROER</option>
					
						<option value="ISOLE FIGI">ISOLE FIGI</option>
					
						<option value="ISOLE MARSHALL">ISOLE MARSHALL</option>
					
						<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
					
						<option value="ISOLE WAKE">ISOLE WAKE</option>
					
						<option value="ISRAELE">ISRAELE</option>
					
						<option value="JERSEY">JERSEY</option>
					
						<option value="KAZAKISTAN">KAZAKISTAN</option>
					
						<option value="KENYA">KENYA</option>
					
						<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
					
						<option value="KIRIBATI">KIRIBATI</option>
					
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
					
						<option value="MADAGASCAR">MADAGASCAR</option>
					
						<option value="MADEIRA">MADEIRA</option>
					
						<option value="MALAWI">MALAWI</option>
					
						<option value="MALAYSIA">MALAYSIA</option>
					
						<option value="MALDIVE">MALDIVE</option>
					
						<option value="MALI">MALI</option>
					
						<option value="MALTA">MALTA</option>
					
						<option value="MARIANNE (ISOLE)">MARIANNE (ISOLE)</option>
					
						<option value="MAROCCO">MAROCCO</option>
					
						<option value="MARTINICA">MARTINICA</option>
					
						<option value="MAURITANIA">MAURITANIA</option>
					
						<option value="MAURIZIO">MAURIZIO</option>
					
						<option value="MAYOTTE">MAYOTTE</option>
					
						<option value="MELILLA">MELILLA</option>
					
						<option value="MESSICO">MESSICO</option>
					
						<option value="MICRONESIA">MICRONESIA</option>
					
						<option value="MIDWAY ISOLE">MIDWAY ISOLE</option>
					
						<option value="MOLDAVIA">MOLDAVIA</option>
					
						<option value="MONACO">MONACO</option>
					
						<option value="MONGOLIA">MONGOLIA</option>
					
						<option value="MONTENEGRO">MONTENEGRO</option>
					
						<option value="MONTSERRAT">MONTSERRAT</option>
					
						<option value="MOZAMBICO">MOZAMBICO</option>
					
						<option value="MYANMAR">MYANMAR</option>
					
						<option value="NAURU">NAURU</option>
					
						<option value="NEPAL">NEPAL</option>
					
						<option value="NICARAGUA">NICARAGUA</option>
					
						<option value="NIGER">NIGER</option>
					
						<option value="NIGERIA">NIGERIA</option>
					
						<option value="NIUE - SAVAGE">NIUE - SAVAGE</option>
					
						<option value="NORFOLK ISOLE">NORFOLK ISOLE</option>
					
						<option value="NORVEGIA">NORVEGIA</option>
					
						<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
					
						<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
					
						<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
					
						<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
					
						<option value="OMAN">OMAN</option>
					
						<option value="PAESI BASSI O OLANDA">PAESI BASSI O OLANDA</option>
					
						<option value="PAKISTAN">PAKISTAN</option>
					
						<option value="PALESTINA, TERRITORI AUTONOMI">PALESTINA, TERRITORI AUTONOMI</option>
					
						<option value="PANAMA">PANAMA</option>
					
						<option value="PAPUA E NUOVA GUINEA">PAPUA E NUOVA GUINEA</option>
					
						<option value="PARAGUAY">PARAGUAY</option>
					
						<option value="PENON DE ALHUCEMAS">PENON DE ALHUCEMAS</option>
					
						<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
					
						<option value="PERU'">PERU'</option>
					
						<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
					
						<option value="POLONIA">POLONIA</option>
					
						<option value="PORTOGALLO">PORTOGALLO</option>
					
						<option value="PORTORICO">PORTORICO</option>
					
						<option value="QATAR">QATAR</option>
					
						<option value="RAS EL KHAIMAN">RAS EL KHAIMAN</option>
					
						<option value="REGNO UNITO">REGNO UNITO</option>
					
						<option value="REP. CINA NAZ. (TAIWAN)">REP. CINA NAZ. (TAIWAN)</option>
					
						<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
					
						<option value="REPUBBLICA CENTRAFRICANA">REPUBBLICA CENTRAFRICANA</option>
					
						<option value="REPUBBLICA DEL KOSOVO">REPUBBLICA DEL KOSOVO</option>
					
						<option value="REPUBBLICA DI PALAU">REPUBBLICA DI PALAU</option>
					
						<option value="REPUBBLICA DI SAN MARINO">REPUBBLICA DI SAN MARINO</option>
					
						<option value="REPUBBLICA DOMINICANA">REPUBBLICA DOMINICANA</option>
					
						<option value="REPUBBLICA FED.DI GERMANIA">REPUBBLICA FED.DI GERMANIA</option>
					
						<option value="REPUBBLICA POPOLARE CINESE">REPUBBLICA POPOLARE CINESE</option>
					
						<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
					
						<option value="REUNION">REUNION</option>
					
						<option value="ROMANIA">ROMANIA</option>
					
						<option value="RUANDA">RUANDA</option>
					
						<option value="RUSSIA">RUSSIA</option>
					
						<option value="S.ELENA">S.ELENA</option>
					
						<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
					
						<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
					
						<option value="SAINT LUCIA">SAINT LUCIA</option>
					
						<option value="SALOMONE">SALOMONE</option>
					
						<option value="SAMOA OCCIDENTALE">SAMOA OCCIDENTALE</option>
					
						<option value="SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
					
						<option value="SEICELLE">SEICELLE</option>
					
						<option value="SENEGAL">SENEGAL</option>
					
						<option value="SERBIA">SERBIA</option>
					
						<option value="SHARJAH">SHARJAH</option>
					
						<option value="SIERRA LEONE">SIERRA LEONE</option>
					
						<option value="SINGAPORE">SINGAPORE</option>
					
						<option value="SINT MAARTEN (DUTCH PART)">SINT MAARTEN (DUTCH PART)</option>
					
						<option value="SIRIA">SIRIA</option>
					
						<option value="SLOVACCHIA">SLOVACCHIA</option>
					
						<option value="SLOVENIA">SLOVENIA</option>
					
						<option value="SOMALIA">SOMALIA</option>
					
						<option value="SPAGNA">SPAGNA</option>
					
						<option value="SRI LANKA">SRI LANKA</option>
					
						<option value="ST. KITTS E NEVIS">ST. KITTS E NEVIS</option>
					
						<option value="ST. MARTIN SETTENTRIONALE">ST. MARTIN SETTENTRIONALE</option>
					
						<option value="ST. PIERRE E MIQUELON">ST. PIERRE E MIQUELON</option>
					
						<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
					
						<option value="SUDAN">SUDAN</option>
					
						<option value="SURINAME">SURINAME</option>
					
						<option value="SVALBARD E JAN MAYEN ISOLE">SVALBARD E JAN MAYEN ISOLE</option>
					
						<option value="SVEZIA">SVEZIA</option>
					
						<option value="SVIZZERA">SVIZZERA</option>
					
						<option value="SWAZILAND - NGWANE">SWAZILAND - NGWANE</option>
					
						<option value="TAGIKISTAN">TAGIKISTAN</option>
					
						<option value="TANZANIA">TANZANIA</option>
					
						<option value="TERRIT.BRIT.OCC.">TERRIT.BRIT.OCC.</option>
					
						<option value="TERRITORI FRANCESI DEL SUD">TERRITORI FRANCESI DEL SUD</option>
					
						<option value="TERRITORIO ANTARTICO BRITANNICO">TERRITORIO ANTARTICO BRITANNICO</option>
					
						<option value="THAILANDIA">THAILANDIA</option>
					
						<option value="TIMOR">TIMOR</option>
					
						<option value="TOGO">TOGO</option>
					
						<option value="TOKELAU">TOKELAU</option>
					
						<option value="TONGA">TONGA</option>
					
						<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
					
						<option value="TRISTAN DE CUNHA">TRISTAN DE CUNHA</option>
					
						<option value="TUNISIA">TUNISIA</option>
					
						<option value="TURCHIA">TURCHIA</option>
					
						<option value="TURKMENISTAN">TURKMENISTAN</option>
					
						<option value="TURKS E CAICOS">TURKS E CAICOS</option>
					
						<option value="TUVALU">TUVALU</option>
					
						<option value="UCRAINA">UCRAINA</option>
					
						<option value="UGANDA">UGANDA</option>
					
						<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
					
						<option value="UNGHERIA">UNGHERIA</option>
					
						<option value="URUGUAY">URUGUAY</option>
					
						<option value="UZBEKISTAN">UZBEKISTAN</option>
					
						<option value="VANUATU">VANUATU</option>
					
						<option value="VENEZUELA">VENEZUELA</option>
					
						<option value="VERGINI AMERICANE (ISOLE)">VERGINI AMERICANE (ISOLE)</option>
					
						<option value="VIETNAM">VIETNAM</option>
					
						<option value="VINCENT E GRENADINE">VINCENT E GRENADINE</option>
					
						<option value="WALLIS E FUTUNA">WALLIS E FUTUNA</option>
					
						<option value="YEMEN">YEMEN</option>
					
						<option value="ZAMBIA">ZAMBIA</option>
					
						<option value="ZIMBABWE">ZIMBABWE</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<br class="clear" />
			
			<fieldset class="lastrow">
				<span class="label">Provincia di rilascio*</span>
				<select name="provincia_emissione_int3" onchange="ProvCom.updateComuni('divComuneEmissione3', 'provincia_emissione_int3', 'comune_emissione_int3', 'comune_emissione_int3', 'no', 'Comune di rilascio*');" id="provincia_emissione_int3"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneEmissione3">
			<fieldset class="lastrow">
				<span class="label">Comune di rilascio*</span>
				<select name="comune_emissione_int3" id="comune_emissione_int3"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
		</div>
	
		<!-- Recapiti -->
		<div class="aolblock">
			<h3>Recapiti</h3>

			<fieldset>
				<span class="label">Indirizzo di residenza*</span>
				<div class="fieldblock">
					<select name="qualif_int3" id="qualif_int3" style="width:85px"><option value="">seleziona</option>
						
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
						
						<option value="Altro">Altro</option></select>
					<span class="errortext">Seleziona</span>

				</div>
				<div class="fieldblock">
					<input type="text" name="via_int3" value="" id="via_int3" style="width: 161px;">
					<span class="errortext">Compila</span>
				</div>
			</fieldset>
			
			<fieldset style="width: 100px;">
				<span class="label">N*</span>
				<input type="text" name="civico_int3" value="" id="civico_int3" style="width:40px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset style="width:185px;">
				<span class="label">CAP* (specifico)*</span>
				<input type="text" name="cap_int3" maxlength="5" value="" id="cap_int3" style="width: 138px;">
				<span class="errortext">Compila</span>
			</fieldset>
			
			<fieldset>
				<span class="label">Provincia*</span>
				<select name="provincia_int3" onchange="ProvCom.updateComuni('divComuneResidenza3', 'provincia_int3', 'comune_int3', 'comune_int3', 'no', 'Comune*');" id="provincia_int3"><option value="">seleziona</option>
					
						<option value="AG">AG</option>
					
						<option value="AL">AL</option>
					
						<option value="AN">AN</option>
					
						<option value="AO">AO</option>
					
						<option value="AP">AP</option>
					
						<option value="AQ">AQ</option>
					
						<option value="AR">AR</option>
					
						<option value="AT">AT</option>
					
						<option value="AV">AV</option>
					
						<option value="BA">BA</option>
					
						<option value="BG">BG</option>
					
						<option value="BI">BI</option>
					
						<option value="BL">BL</option>
					
						<option value="BN">BN</option>
					
						<option value="BO">BO</option>
					
						<option value="BR">BR</option>
					
						<option value="BS">BS</option>
					
						<option value="BT">BT</option>
					
						<option value="BZ">BZ</option>
					
						<option value="CA">CA</option>
					
						<option value="CB">CB</option>
					
						<option value="CE">CE</option>
					
						<option value="CH">CH</option>
					
						<option value="CL">CL</option>
					
						<option value="CN">CN</option>
					
						<option value="CO">CO</option>
					
						<option value="CR">CR</option>
					
						<option value="CS">CS</option>
					
						<option value="CT">CT</option>
					
						<option value="CZ">CZ</option>
					
						<option value="EN">EN</option>
					
						<option value="FC">FC</option>
					
						<option value="FE">FE</option>
					
						<option value="FG">FG</option>
					
						<option value="FI">FI</option>
					
						<option value="FM">FM</option>
					
						<option value="FR">FR</option>
					
						<option value="GE">GE</option>
					
						<option value="GO">GO</option>
					
						<option value="GR">GR</option>
					
						<option value="IM">IM</option>
					
						<option value="IS">IS</option>
					
						<option value="KR">KR</option>
					
						<option value="LC">LC</option>
					
						<option value="LE">LE</option>
					
						<option value="LI">LI</option>
					
						<option value="LO">LO</option>
					
						<option value="LT">LT</option>
					
						<option value="LU">LU</option>
					
						<option value="MB">MB</option>
					
						<option value="MC">MC</option>
					
						<option value="ME">ME</option>
					
						<option value="MI">MI</option>
					
						<option value="MN">MN</option>
					
						<option value="MO">MO</option>
					
						<option value="MS">MS</option>
					
						<option value="MT">MT</option>
					
						<option value="NA">NA</option>
					
						<option value="NO">NO</option>
					
						<option value="NU">NU</option>
					
						<option value="OR">OR</option>
					
						<option value="PA">PA</option>
					
						<option value="PC">PC</option>
					
						<option value="PD">PD</option>
					
						<option value="PE">PE</option>
					
						<option value="PG">PG</option>
					
						<option value="PI">PI</option>
					
						<option value="PN">PN</option>
					
						<option value="PO">PO</option>
					
						<option value="PR">PR</option>
					
						<option value="PT">PT</option>
					
						<option value="PU">PU</option>
					
						<option value="PV">PV</option>
					
						<option value="PZ">PZ</option>
					
						<option value="RA">RA</option>
					
						<option value="RC">RC</option>
					
						<option value="RE">RE</option>
					
						<option value="RG">RG</option>
					
						<option value="RI">RI</option>
					
						<option value="RM">RM</option>
					
						<option value="RN">RN</option>
					
						<option value="RO">RO</option>
					
						<option value="SA">SA</option>
					
						<option value="SI">SI</option>
					
						<option value="SO">SO</option>
					
						<option value="SP">SP</option>
					
						<option value="SR">SR</option>
					
						<option value="SS">SS</option>
					
						<option value="SU">SU</option>
					
						<option value="SV">SV</option>
					
						<option value="TA">TA</option>
					
						<option value="TE">TE</option>
					
						<option value="TN">TN</option>
					
						<option value="TO">TO</option>
					
						<option value="TP">TP</option>
					
						<option value="TR">TR</option>
					
						<option value="TS">TS</option>
					
						<option value="TV">TV</option>
					
						<option value="UD">UD</option>
					
						<option value="VA">VA</option>
					
						<option value="VB">VB</option>
					
						<option value="VC">VC</option>
					
						<option value="VE">VE</option>
					
						<option value="VI">VI</option>
					
						<option value="VR">VR</option>
					
						<option value="VT">VT</option>
					
						<option value="VV">VV</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			
			<div id="divComuneResidenza3">
			<fieldset>
				<span class="label">Comune*</span>
				<select name="comune_int3" id="comune_int3"><option value="">seleziona</option></select>
				<span class="errortext">Seleziona</span>
			</fieldset>
			</div>
			
			<div id="divIndirizzoCai3" class="expandable">
				<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
				
				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
					<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset>
						<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
						<div class="fieldblock">
							<select name="qualif_domicilioCAI_int3" id="qualif_domicilioCAI_int3" style="width:85px"><option value="">seleziona</option>
							<option value="Via">Via</option>
							<option value="Viale">Viale</option>
							<option value="Corso">Corso</option>
							<option value="Piazza">Piazza</option>
							<option value="Strada">Strada</option>
							<option value="Stretto">Stretto</option>
							<option value="Contrada">Contrada</option>
							<option value="Vicolo">Vicolo</option>
							<option value="Località">Località</option>
							<option value="Largo">Largo</option>
							<option value="Vico">Vico</option>
							<option value="Altro">Altro</option></select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="fieldblock">
							<input type="text" name="via_domicilioCAI_int3" value="" id="via_domicilioCAI_int3" style="width: 161px;">
							<span class="errortext">Compila</span>
						</div>
					</fieldset>
					
					<fieldset style="width: 100px;">
						<span class="label">N*</span>
						<input type="text" name="civico_domicilioCAI_int3" value="" id="civico_domicilioCAI_int3" style="width:40px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset style="width:185px;">
						<span class="label">CAP* (specifico)*</span>
						<input type="text" name="cap_domicilioCAI_int3" maxlength="5" value="" id="cap_domicilioCAI_int3" style="width: 136px;">
						<span class="errortext">Compila</span>
					</fieldset>
					
					<fieldset>
						<span class="label">Provincia*</span>
						<select name="provincia_domicilioCAI_int3" onchange="ProvCom.updateComuni('divComuneDomicilioCAI3', 'provincia_domicilioCAI_int3', 'comune_domicilioCAI_int3', 'comune_domicilioCAI_int3', 'no', 'Comune*');" id="provincia_domicilioCAI_int3"><option value="">seleziona</option>
							
								<option value="AG">AG</option>
							
								<option value="AL">AL</option>
							
								<option value="AN">AN</option>
							
								<option value="AO">AO</option>
							
								<option value="AP">AP</option>
							
								<option value="AQ">AQ</option>
							
								<option value="AR">AR</option>
							
								<option value="AT">AT</option>
							
								<option value="AV">AV</option>
							
								<option value="BA">BA</option>
							
								<option value="BG">BG</option>
							
								<option value="BI">BI</option>
							
								<option value="BL">BL</option>
							
								<option value="BN">BN</option>
							
								<option value="BO">BO</option>
							
								<option value="BR">BR</option>
							
								<option value="BS">BS</option>
							
								<option value="BT">BT</option>
							
								<option value="BZ">BZ</option>
							
								<option value="CA">CA</option>
							
								<option value="CB">CB</option>
							
								<option value="CE">CE</option>
							
								<option value="CH">CH</option>
							
								<option value="CL">CL</option>
							
								<option value="CN">CN</option>
							
								<option value="CO">CO</option>
							
								<option value="CR">CR</option>
							
								<option value="CS">CS</option>
							
								<option value="CT">CT</option>
							
								<option value="CZ">CZ</option>
							
								<option value="EN">EN</option>
							
								<option value="FC">FC</option>
							
								<option value="FE">FE</option>
							
								<option value="FG">FG</option>
							
								<option value="FI">FI</option>
							
								<option value="FM">FM</option>
							
								<option value="FR">FR</option>
							
								<option value="GE">GE</option>
							
								<option value="GO">GO</option>
							
								<option value="GR">GR</option>
							
								<option value="IM">IM</option>
							
								<option value="IS">IS</option>
							
								<option value="KR">KR</option>
							
								<option value="LC">LC</option>
							
								<option value="LE">LE</option>
							
								<option value="LI">LI</option>
							
								<option value="LO">LO</option>
							
								<option value="LT">LT</option>
							
								<option value="LU">LU</option>
							
								<option value="MB">MB</option>
							
								<option value="MC">MC</option>
							
								<option value="ME">ME</option>
							
								<option value="MI">MI</option>
							
								<option value="MN">MN</option>
							
								<option value="MO">MO</option>
							
								<option value="MS">MS</option>
							
								<option value="MT">MT</option>
							
								<option value="NA">NA</option>
							
								<option value="NO">NO</option>
							
								<option value="NU">NU</option>
							
								<option value="OR">OR</option>
							
								<option value="PA">PA</option>
							
								<option value="PC">PC</option>
							
								<option value="PD">PD</option>
							
								<option value="PE">PE</option>
							
								<option value="PG">PG</option>
							
								<option value="PI">PI</option>
							
								<option value="PN">PN</option>
							
								<option value="PO">PO</option>
							
								<option value="PR">PR</option>
							
								<option value="PT">PT</option>
							
								<option value="PU">PU</option>
							
								<option value="PV">PV</option>
							
								<option value="PZ">PZ</option>
							
								<option value="RA">RA</option>
							
								<option value="RC">RC</option>
							
								<option value="RE">RE</option>
							
								<option value="RG">RG</option>
							
								<option value="RI">RI</option>
							
								<option value="RM">RM</option>
							
								<option value="RN">RN</option>
							
								<option value="RO">RO</option>
							
								<option value="SA">SA</option>
							
								<option value="SI">SI</option>
							
								<option value="SO">SO</option>
							
								<option value="SP">SP</option>
							
								<option value="SR">SR</option>
							
								<option value="SS">SS</option>
							
								<option value="SU">SU</option>
							
								<option value="SV">SV</option>
							
								<option value="TA">TA</option>
							
								<option value="TE">TE</option>
							
								<option value="TN">TN</option>
							
								<option value="TO">TO</option>
							
								<option value="TP">TP</option>
							
								<option value="TR">TR</option>
							
								<option value="TS">TS</option>
							
								<option value="TV">TV</option>
							
								<option value="UD">UD</option>
							
								<option value="VA">VA</option>
							
								<option value="VB">VB</option>
							
								<option value="VC">VC</option>
							
								<option value="VE">VE</option>
							
								<option value="VI">VI</option>
							
								<option value="VR">VR</option>
							
								<option value="VT">VT</option>
							
								<option value="VV">VV</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					
					<div id="divComuneDomicilioCAI3">
					<fieldset>
						<span class="label">Comune*</span>
						<select name="comune_domicilioCAI_int3" id="comune_domicilioCAI_int3"><option value="">seleziona</option></select>
						<span class="errortext">Seleziona</span>
					</fieldset>
					</div>
				</div>
			</div>

			<div id="divRecapitiTelefonici3" class="expandable">
				<span class="label">Altri recapiti telefonici (facoltativi)</span>

				<div class="expander">
					<a href="javascript:;" onclick="switchExp(this)" class="btn">
					</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
				</div>
				
				<div class="expandableCont">
					<fieldset class="lastrow">
							<span class="label">Telefono casa</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_int3" maxlength="4" value="" id="prefisso_int3" style="width:50px">
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_int3" value="" id="telefono_int3" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
					
					<fieldset class="lastrow">
							<span class="label">Telefono ufficio</span>
							<div class="fieldblock">
								<input type="text" name="prefisso_2_int3" maxlength="4" value="" id="prefisso_2_int3" style="width:50px"> 
								<span class="errortext">Compila</span>
							</div>
							<div class="fieldblock">
								<input type="text" name="telefono_2_int3" value="" id="telefono_2_int3" style="width:178px">
								<span class="errortext">Compila</span>
							</div>
					</fieldset>
				</div>
			</div>
		</div>

		<div class="aolblock">
			<h3>Tu e Webank</h3>
			<p class="minitext">Sei gi&agrave; cliente Banco BPM?</p>
			<p class="minitext grey">Dichiarando di essere gi&agrave; cliente Banco BPM non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli presenti nei nostri archivi.</p>
			
			<div class="fieldblock" id="divIdentificazione3">
				<fieldset class="withInput">
					<label style="margin-top:15px"><input type="radio" name="isbpmcliente_int3" value="SI" id="isbpmcliente_int3"><span class="optiontext">si</span></label>
				</fieldset>
				<fieldset class="withInput lastrow">
					<label><input type="radio" name="isbpmcliente_int3" value="NO" id="isbpmcliente_int3"><span class="optiontext">no</span></label>
					<br class="clear" />
				</fieldset>
				<span class="errortext">Seleziona</span>
			</div>
			<br class="clear" />
		</div>

	</div>
	
	</div>
					
	<div class="filettobutton">
		<a class="greenbutton" title="avanti"
			href="javascript:valida();"><span>avanti</span>
		</a>
	</div>
	
	
	</form>
	
</div>

<script type="text/javascript">
	addEvent(window,'load', function () {AolPromotori.onLoadStep1(); });
</script>

</div>
</div>
</div>
</body>
</html>