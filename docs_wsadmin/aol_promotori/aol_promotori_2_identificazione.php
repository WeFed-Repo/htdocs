<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">	
<head>
	<title>Webank - Apri conto Webank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="it" />
	<meta name="author" content="We@service S.p.a" />
	<meta name="description" content="Webank - La banca online dal 1999" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="stylesheet" href="/css/aol_promotori_responsive.css"></link>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/aol_promotori_responsive.js"></script>
</head>
<body>
	<div id="pagecontainer">
		<div id="header">
			<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
		</div>
		<div id="menu">
			<h2><img alt="Richiesta apertura conto" src="/img/tt_aperturaconto_small.gif"></h2>
		</div>
		<div id="content">
			<div id="aolcontainer">
				<div id="aolleft">
					<script type="text/javascript">
					function showDett(obj) 
					 { 
						var radioId =$(obj).closest('fieldset').find('.blockradio');
						if(!radioId.hasClass('opened')) radioId.addClass('opened');
						else{radioId.removeClass('opened');}
						if($('.btnCont')) {$('.btnCont:first').hide()};
						
					 }
					</script>
					<script>
					/*** FUNZIONE CHE MOSTRA LA MODALITA' BONIFICO ***/
					$(function() {$(".modBonificoInput").bind( "click", function() {
						if($(this).is(":checked")) {
							$(this).closest('.aolblockwrapper').find('.listagenzia').eq(0).hide();
							$(this).closest('.aolblockwrapper').find('.modBonifico').eq(0).show();
						}
						else
						{
							$(this).closest('.aolblockwrapper').find('.listagenzia').eq(0).show();
							$(this).closest('.aolblockwrapper').find('.modBonifico').eq(0).hide();
						}
					})
					})
					</script>
					<form autocomplete="off" method="post" action="">	
						<div class="aolFormContent">
							<fieldset>
								<legend>Estratto conto e contabili</legend>
								<p>Scegli come ricevere l'estratto conto e le contabili del tuo conto. Ti saranno inviate trimestralmente, se vuoi modificarne la frequenza contatta il nostro Servizio Clienti.</p>
								<div id="estrattoRadio" class="row-fluid fieldBlock">
									<label class="span6 labelLarge phone"><input type="radio" class="textInput" id="estratto" name="estratto">online<br>servizio gratuito</label>
									<label class="span6 labelLarge phone"><input type="radio" class="textInput" name="estratto">cartacee servizio a pagamento: 1,35€ per ciascun documento</label>
									<span class="errortext"></span>
								</div>
							</fieldset>
							<fieldset>
								<div id="aolDeposito" class="">
									<div class="productPush row-fluid">
										<legend>prodotti aggiuntivi</legend>
										<label><input type="checkbox" name="" value="1" id="" onclick="if(this.checked) {$('#aolDeposito').attr('class','opened')} else {$('#aolDeposito').attr('class','')};"><span class="large">Deposito titoli e servizi di investimento</span></label>
									</div>
									<div id="aolDepositoCont" class="row-fluid">
										<div class="aolDepositoBody">
											<!-- CONTENUTO DEI CAMPI -->
											<h4 class="primo">Regime fiscale</h4>
											<div class="fieldBlock" id="regime">
												<label class=" row-fluid">
													<input type="radio" id="ct_regimenew" checked="checked" value="1" name="ct_regimenew">
													<strong>Regime fiscale amministrato (consigliato)</strong>
												</label>
												<br class="clear">
												<label class=" row-fluid">
													<input type="radio" id="ct_regimenew" value="0" name="ct_regimenew">
													<strong>Regime fiscale dichiarativo</strong>
												</label>
												<span class="errortext">Seleziona</span>
											</div>
											
											<h4>Tipo di commissione</h4>
											<div class="fieldBlock row-fluid" id="commissioni">
												<label class="span6 phone"><input type="radio" id="ng_commissioni" value="1" name="ng_commissioni">profilo fisso</label>
												<label class="span6 phone"><input type="radio" id="ng_commissioni" value="0" name="ng_commissioni">profilo variabile</label>
												<span class="errortext">Seleziona</span>
											</div>
											<h4>Abilitazione long overnight</h4>
											<div class="row-fluid">
												<label class="span12">
													<input type="checkbox"title="Lorem ipsum dolor sit amet" id="informativa">
													<span class="optiontext optiontextb">Desidero ricevere la documentazione per l'abilitazione al servizio Long Overnight</span>
												</label>
												<span class="errortext">Compila</span>
											</div>
											<h4>Estratto conto e contabili del deposito titoli</h4>
											<div class="row-fluid" id="contabiliCt">
												<label class="span6 phone"><input type="radio" value="1" name="colCt"><span class="optiontext">online<br>servizio gratuito</span></label>
												<label class="span6 phone"><input type="radio" value="0" name="colCt"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35€ per ciascun documento</span></label>
												<span class="errortext">Seleziona</span>
											</div>
											<!-- FINE CONTENUTO DEI CAMPI -->
										</div>
									</div>
									<div class="productPush row-fluid">
										<label><input type="checkbox" id="" value="1" name=""><span class="large">Bancomat</span></label>
									</div>
									<div class="productPush last row-fluid">
										<label><input type="checkbox" id="" value="1" name=""><span class="large">Carta Je@ns</span></label>
									</div>
								</div>
							</fieldset>
						
						<br class="clear" />
					<!-- BLOCCO IDENTIFICAZIONE PLURINTESTATARIO-->
				<fieldset class="intestatariWrapper">
						<legend>PROCEDURA DI IDENTIFICAZIONE</legend>
						<div class="aolblockwrapper">
			<!-- TESTO INTRODUTTIVO IDENTIFICAZIONE -->
			<div style="display: block;" id="testoIntroduttivo">
				<p>	Per completare la richiesta di apertura conto <strong>tutti gli intestatari</strong> dovranno recarsi presso un'<strong>agenzia del Gruppo Bipiemme</strong> con una stampa del <strong>contratto</strong> da firmare davanti al personale allo sportello.</p>
			</div>
			<!-- FINE TESTO INTRODUTTIVO IDENTIFICAZIONE -->
			<!-- BLOCCO IDENTIFICAZIONE AGENZIA-->
			<div style="display:block" class="" id="identAgenzia">
				<div class="row-fluid  spaceBottom">	
					<div class="span9">	
						<label class="searchAg"><strong class="flLeft">Cerca l'agenzia più vicina</strong></label>
						<input type="text" id="comuneAgenzia" placeholder="inserisci il Comune" value="" name="">
						<span class="errortext">inserisci il Comune</span>
					</div>	
					<div class="span3">	
						<label>&nbsp;</label><br class="clear">
						<a onclick="openListaAgenzie('/webankpub/wb/cstPopup/do/aol/ricercaAgenzia.do?BV_UseBVCookie=Yes');" title="cerca" href="javascript:;" class="greenbutton"><span>cerca</span></a>
					</div>
				</div>
			<!-- CAMPO NASCOSTO PER MODALIA RICONOSCIMENTO-->
				<input type="hidden" value="agenzia" id="modalita_riconoscimento" name="modalita_riconoscimento">
				<div class="row-fluid">
					<label class="span12"><input type="checkbox" class="modBonificoInput" id="chooseBonifico"><span class="">Non trovi un'agenzia vicino?</span></label>
				</div>
			<!-- FINE BLOCCO IDENTIFICAZIONE AGENZIA-->
			
			<!-- BLOCCO IDENTIFICAZIONE BONIFICO-->
			<div style="display: none;" class="modBonifico" id="identBonifico">
				<p>In alternativa, per procedere all'identificazione dovrai:</p>
				<div class="row-fluid">	
					<div class="span1 margRightSmall">
						<img class="flLeft" src="/img/ico2inf_attivalo.gif">
					</div>
					<div class="span11 noMargLeft">
					<p>fare un <strong>bonifico</strong> da 100 € da un conto intestato o cointestato a tuo nome. 
					Accrediteremo l'importo sul tuo nuovo Conto Webank. Se non possiedi un conto corrente oppure ne hai uno 
					 <a data-tooltip="#ttHtmlContId" href="javascript:;">aperto online</a>
					
					, devi necessariamente procedere all'identificazione in agenzia.<br class="clear"><br></p>
					<div class="ttHtmlContent" id="ttHtmlContId">
					<p>si intendono i conti correnti aperti presso:<br>
								- un istituto di monetica elettronica<br>
								- una filiale online di banca territoriale<br>
								- una banca online (Fineco Bank, IWBank, ING DIRECT, CheBanca!, B@nca 24 - , SediciBanca, Binck Bank).<br>"&gt;aperto online</p>
					</div>
					
					
					<div class="row-fluid">		
						<div class="span6 fieldBlock phone"><div class="fieldCounter"><span>0</span>/27 caratteri</div>	
							<label><strong>MARTINO TESTI</strong></label>
							<input type="text" maxlength="27" id="ibanclientebon_int1" name="ibanclientebon_int1" placeholder="indica l'IBAN del conto dal quale farai il bonifico" value="">
							<script type="text/javascript" defer="defer">setCounterOnField("ibanclientebon_int1",27);</script>
							<span class="errortext">Verifica</span>
						</div>
						
					
						<div class="span6 fieldBlock phone"><div class="fieldCounter"><span>0</span>/27 caratteri</div>	
							<label><strong>MARTINA TESTI</strong></label>
							<input type="text" maxlength="27" id="ibanclientebon_int2" name="ibanclientebon_int2" placeholder="indica l'IBAN del conto dal quale farai il bonifico" value="">
							<script type="text/javascript" defer="defer">setCounterOnField("ibanclientebon_int2",27);</script>
							<span class="errortext">Verifica</span>
						</div>
					</div>
				</div>
				</div>
				<br class="clear"><br>
				<!-- BLOCCO SECONDO DOCUMENTO -->
				<div id="identBonifico">
					<!-- BLOCCO SECONDO DOCUMENTO - PRIMO INTESTATARIO -->
					<div class="aolAcc expanded">
						<div class="aolAccTop">
							<a href="javascript:;" onclick="switchExp(this,true);" id="intestatarioId1" class="aolAccTitle">
								<span class="titoloAcc">intestatario 1 - martino testi</span>
								<span class="accButt" href="javascript:;"></span>
								<span class="errortext"></span>
							</a>
						</div>
						<div class="aolAccContent">
								<br class="clear">
							<div class="aolblockwrapper">
								<div id="blockDocIndentita1">
									<div class="row-fluid">
										<div class="span12">
											<div class="span1 margRightSmall">
												<img class="flLeft" src="/img/ico2inf_attivalo.gif">
											</div>
											<div class="span11 noMargLeft">
												<p>indicare un altro <strong>documento d'identità</strong> (diverso da quello che hai precedentemente inserito)<br class="clear"><br></p>
											</div>
										</div>
									</div>
									<div class="row-fluid spaceBottom">
										<div class="span6 fieldBlock phone">
											<label>Tipo di documento*</label>
											<select id="tipo_doc2_int1" name="tipo_doc2_int1">
												<option value="Patente">Patente</option>
											<option value="Passaporto">Passaporto</option>
											</select>
											<span class="errortext">Seleziona</span>
										</div>
										<div class="span6 fieldBlock phone">
											<label>Numero*</label>
											<input type="text" data-tooltip="" value="" maxlength="16" name="numero_doc2_int1" id="numero_doc2_int1">
											<span class="errortext">Compila</span>
										</div>
									</div>
									<div class="row-fluid spaceBottom">
										<div class="span6 fieldBlock phone">
											<label>Data di rilascio*</label>
											<div data-tooltip="" class="row-fluid" id="divDataEmissione1">
												<div class="row-fluid">
													<div class="span3 fieldBlock">
														<input type="text" class="opzionale" id="gg_emissione2_int1" onkeyup="nextFocus(this, mm_emissione2_int1,'gg', 2);" placeholder="gg" maxlength="2" name="gg_emissione2_int1">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">/</div>
													<div class="span3 fieldBlock">
														<input type="text" id="mm_emissione2_int1" onkeyup="nextFocus(this, aa_emissione2_int1,'mm', 2);" placeholder="mm" maxlength="2" name="mm_emissione2_int1">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">/</div>
													<div class="span4 fieldBlock">
														<input type="text" id="aa_emissione2_int1" placeholder="aaaa" maxlength="4" name="aa_emissione2_int1">
														<span class="errortext">Compila</span>
													</div>
												</div>
												<span class="errortext"></span>
											</div>
										</div>
										<div class="span6 fieldBlock phone">
											<label>Stato di rilascio*</label>
											<select id="stato_emissione2_int1" onchange="checkStato(this.value,'provincia_emissione2_int1','comune_emissione2_int1');" name="stato_emissione2_int1">
												<option value="">seleziona</option>
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
												<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
												<option value="ARGENTINA">ARGENTINA</option>
												<option value="ARMENIA">ARMENIA</option>
												<option value="ARUBA">ARUBA</option>
												<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
												<option value="AUSTRALIA">AUSTRALIA</option>
												<option value="AUSTRIA">AUSTRIA</option>
												<option value="AZERBAIGIAN">AZERBAIGIAN</option>
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
												<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
												<option value="BOTSWANA">BOTSWANA</option>
												<option value="BRASILE">BRASILE</option>
												<option value="BRUNEI">BRUNEI</option>
												<option value="BULGARIA">BULGARIA</option>
												<option value="BURKINA FASO">BURKINA FASO</option>
												<option value="BURUNDI">BURUNDI</option>
												<option value="CAMERUN">CAMERUN</option>
												<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
												<option value="CANADA">CANADA</option>
												<option value="CAPO VERDE">CAPO VERDE</option>
												<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
												<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
												<option value="CIAD">CIAD</option>
												<option value="CILE">CILE</option>
												<option value="CINA REP.POP.">CINA REP.POP.</option>
												<option value="CIPRO">CIPRO</option>
												<option value="COLOMBIA">COLOMBIA</option>
												<option value="CONGO">CONGO</option>
												<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
												<option value="COREA DEL NORD">COREA DEL NORD</option>
												<option value="COREA DEL SUD">COREA DEL SUD</option>
												<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
												<option value="COSTARICA">COSTARICA</option>
												<option value="CROAZIA">CROAZIA</option>
												<option value="CUBA">CUBA</option>
												<option value="DANIMARCA">DANIMARCA</option>
												<option value="DOMINICA">DOMINICA</option>
												<option value="DOMINICANA REP.">DOMINICANA REP.</option>
												<option value="DUBAI">DUBAI</option>
												<option value="ECUADOR">ECUADOR</option>
												<option value="EGITTO">EGITTO</option>
												<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
												<option value="ERITREA">ERITREA</option>
												<option value="ESTONIA">ESTONIA</option>
												<option value="ETIOPIA">ETIOPIA</option>
												<option value="FILIPPINE">FILIPPINE</option>
												<option value="FINLANDIA">FINLANDIA</option>
												<option value="FRANCIA">FRANCIA</option>
												<option value="FUIJAYRAH">FUIJAYRAH</option>
												<option value="GABON">GABON</option>
												<option value="GAMBIA">GAMBIA</option>
												<option value="GEORGIA">GEORGIA</option>
												<option value="GERMANIA">GERMANIA</option>
												<option value="GHANA">GHANA</option>
												<option value="GIAMAICA">GIAMAICA</option>
												<option value="GIAPPONE">GIAPPONE</option>
												<option value="GIBILTERRA">GIBILTERRA</option>
												<option value="GIBUTI">GIBUTI</option>
												<option value="GIORDANIA">GIORDANIA</option>
												<option value="GRECIA">GRECIA</option>
												<option value="GRENADA">GRENADA</option>
												<option value="GROENLANDIA">GROENLANDIA</option>
												<option value="GUADALUPA">GUADALUPA</option>
												<option value="GUATEMALA">GUATEMALA</option>
												<option value="GUERNSEY">GUERNSEY</option>
												<option value="GUINEA">GUINEA</option>
												<option value="GUINEA BISSAU">GUINEA BISSAU</option>
												<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
												<option value="GUYANA">GUYANA</option>
												<option value="HAITI">HAITI</option>
												<option value="HONDURAS">HONDURAS</option>
												<option value="HONG KONG">HONG KONG</option>
												<option value="INDIA">INDIA</option>
												<option value="INDONESIA">INDONESIA</option>
												<option value="IRAN">IRAN</option>
												<option value="IRAQ">IRAQ</option>
												<option value="IRLANDA">IRLANDA</option>
												<option value="ISLANDA">ISLANDA</option>
												<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
												<option value="ISOLA MAN">ISOLA MAN</option>
												<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
												<option value="ISOLE COMORE">ISOLE COMORE</option>
												<option value="ISOLE FAR OER">ISOLE FAR OER</option>
												<option value="ISOLE FIJI">ISOLE FIJI</option>
												<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
												<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
												<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
												<option value="ISRAELE">ISRAELE</option>
												<option selected="selected" value="ITALIA">ITALIA</option>
												<option value="JERSEY">JERSEY</option>
												<option value="JUGOSLAVIA">JUGOSLAVIA</option>
												<option value="KAMPUCHEA">KAMPUCHEA</option>
												<option value="KAZAKISTAN">KAZAKISTAN</option>
												<option value="KENYA">KENYA</option>
												<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
												<option value="KIRIBATI">KIRIBATI</option>
												<option value="KOSSOVO">KOSSOVO</option>
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
												<option value="MACEDONIA">MACEDONIA</option>
												<option value="MADAGASCAR">MADAGASCAR</option>
												<option value="MALAWI">MALAWI</option>
												<option value="MALAYSIA">MALAYSIA</option>
												<option value="MALDIVE">MALDIVE</option>
												<option value="MALI">MALI</option>
												<option value="MALTA">MALTA</option>
												<option value="MAROCCO">MAROCCO</option>
												<option value="MARSHALL">MARSHALL</option>
												<option value="MARTINICA">MARTINICA</option>
												<option value="MAURITANIA">MAURITANIA</option>
												<option value="MESSICO">MESSICO</option>
												<option value="MOLDAVIA">MOLDAVIA</option>
												<option value="MONGOLIA">MONGOLIA</option>
												<option value="MONTENEGRO">MONTENEGRO</option>
												<option value="MOZAMBICO">MOZAMBICO</option>
												<option value="MYANMAR">MYANMAR</option>
												<option value="N.C.">N.C.</option>
												<option value="NAMIBIA">NAMIBIA</option>
												<option value="NAURU">NAURU</option>
												<option value="NEPAL">NEPAL</option>
												<option value="NICARAGUA">NICARAGUA</option>
												<option value="NIGER">NIGER</option>
												<option value="NIGERIA">NIGERIA</option>
												<option value="NORVEGIA">NORVEGIA</option>
												<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
												<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
												<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
												<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
												<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
												<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
												<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
												<option value="OLANDA">OLANDA</option>
												<option value="OMAN">OMAN</option>
												<option value="PAKISTAN">PAKISTAN</option>
												<option value="PANAMA">PANAMA</option>
												<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
												<option value="PARAGUAY">PARAGUAY</option>
												<option value="PERU'">PERU'</option>
												<option value="POLONIA">POLONIA</option>
												<option value="PORTOGALLO">PORTOGALLO</option>
												<option value="PORTORICO">PORTORICO</option>
												<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
												<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
												<option value="QATAR">QATAR</option>
												<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
												<option value="REGNO UNITO">REGNO UNITO</option>
												<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
												<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
												<option value="ROMANIA">ROMANIA</option>
												<option value="RUSSIA">RUSSIA</option>
												<option value="RWANDA">RWANDA</option>
												<option value="SAINT LUCIA">SAINT LUCIA</option>
												<option value="SALVADOR">SALVADOR</option>
												<option value="SAMOA">SAMOA</option>
												<option value="SAN MARINO">SAN MARINO</option>
												<option value="SANT'ELENA">SANT'ELENA</option>
												<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
												<option value="SENEGAL">SENEGAL</option>
												<option value="SERBIA">SERBIA</option>
												<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
												<option value="SEYCHELLES">SEYCHELLES</option>
												<option value="SHARJAH">SHARJAH</option>
												<option value="SIERRA LEONE">SIERRA LEONE</option>
												<option value="SINGAPORE">SINGAPORE</option>
												<option value="SIRIA">SIRIA</option>
												<option value="SLOVENIA">SLOVENIA</option>
												<option value="SOMALIA">SOMALIA</option>
												<option value="SPAGNA">SPAGNA</option>
												<option value="SRI LANKA">SRI LANKA</option>
												<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
												<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
												<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
												<option value="SUDAN">SUDAN</option>
												<option value="SURINAME">SURINAME</option>
												<option value="SVEZIA">SVEZIA</option>
												<option value="SVIZZERA">SVIZZERA</option>
												<option value="SWAZILAND">SWAZILAND</option>
												<option value="TAGIKISTAN">TAGIKISTAN</option>
												<option value="TAIWAN">TAIWAN</option>
												<option value="TANZANIA">TANZANIA</option>
												<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
												<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
												<option value="THAILANDIA">THAILANDIA</option>
												<option value="TOGO">TOGO</option>
												<option value="TONGA">TONGA</option>
												<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
												<option value="TUNISIA">TUNISIA</option>
												<option value="TURCHIA">TURCHIA</option>
												<option value="TURKMENISTAN">TURKMENISTAN</option>
												<option value="TURKS E CAICOS">TURKS E CAICOS</option>
												<option value="TUVALU'">TUVALU'</option>
												<option value="UCRAINA">UCRAINA</option>
												<option value="UGANDA">UGANDA</option>
												<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
												<option value="UNGHERIA">UNGHERIA</option>
												<option value="URUGUAY">URUGUAY</option>
												<option value="UZBEKISTAN">UZBEKISTAN</option>
												<option value="VANUATU">VANUATU</option>
												<option value="VENEZUELA">VENEZUELA</option>
												<option value="VIETNAM">VIETNAM</option>
												<option value="YEMEN">YEMEN</option>
												<option value="ZAMBIA">ZAMBIA</option>
												<option value="ZIMBABWE">ZIMBABWE</option>
											</select>
											<span class="errortext">Seleziona</span>
										</div>
									</div>
									<br class="clear">
									<div class="row-fluid">
										<div class="span6 phone fieldBlock">
											<label>Provincia di rilascio*</label>
											<select id="provincia_emissione2_int1" onchange="ProvCom.updateComuni('divComuneEmissione1', 'provincia_emissione2_int1', 'comune_emissione2_int1', 'comune_emissione2_int1', 'no', 'Comune di rilascio*');" name="provincia_emissione2_int1"><option value="">seleziona</option>
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
											
												<option value="CI">CI</option>
											
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
											
												<option value="OG">OG</option>
											
												<option value="OR">OR</option>
											
												<option value="OT">OT</option>
											
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
											
												<option value="VS">VS</option>
											
												<option value="VT">VT</option>
											
												<option value="VV">VV</option></select>
											<span class="errortext">Seleziona</span>
										</div>
										<div class="span6 phone fieldBlock" id="divComuneEmissione1">
											<label>Comune di rilascio*</label>
											<select id="comune_emissione2_int1" name="comune_emissione2_int1"><option value="">seleziona</option></select>
											<span class="errortext">Seleziona</span>
										</div>
									</div>
									<br class="clear"><br>
									<p><a onclick="$('#blockEscapeDoc1').show();$(this).hide()" id="linkNoDocIndentita1" href="javascript:;">Non hai due diversi documenti d'identità?</a></p>							
								</div>
								<div style="display:none" class="noDocOpt" id="blockEscapeDoc1">
									<div>
										<p>
											Se in questo momento non hai a portata di mano un secondo documento d'identità, puoi <strong><a title="Vuoi continuare più tardi?" href="https://www.webank.it/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&amp;numPag=3&amp;&amp;funz=bozze&amp;fromAol=yes&amp;CNT_TARGET=Privati&amp;OBS_KEY=pro_wbn_apri_conto_webank">salvare la richiesta di apertura conto</a> e continuare più tardi</strong>.
										</p>
									</div>
									<div>
										<p>
											Non possiedi due diversi documenti d'identità? <a onclick="$('#blockChooseOtherDoc1').show();$('#blockEscapeDoc1').hide();$('#blockDocIndentita1').hide();" href="javascript:;">Scegli un altro documento</a>
										</p>
									</div>
								</div>
								<br class="clear">
								<div class="row-fluid" style="display:none" id="blockChooseOtherDoc1">
									<div class="span1 margRightSmall">
										<img class="flLeft" src="/img/ico2inf_attivalo.gif">
									</div>
									<div class="span11 noMargLeft">
										<strong>Non possiedi due diversi documenti d'identità?</strong>
										<p>In alternativa, scegli uno dei documenti che ti elenchiamo di seguito. Dovrai allegarne una copia insieme alla documentazione da spedire.</p>
											<select id="altroDoc_int1" name="altroDoc_int1"><option value="">seleziona</option>
												
												<option value="1">Patente nautica</option>
												
												<option value="2">Licenza di porto d'armi</option>
												
												<option value="3">Libretto di pensione</option>
												
												<option value="4">Patentino di abilitazione alla conduzione di impianti termici</option>
												
												<option value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
												
												<option value="6">Attestazione timbrata e sottoscritta da una Banca territoriale</option>
												
												<option value="7">Rogito</option>
												
												<option value="8">Testamento</option>
												
												<option value="9">Atto di vendita auto registrato al P.R.A</option>
												
												<option value="10">Atto costitutivo di società</option>
												
												<option value="11">Certificato di firma digitale</option>
												
												<option value="13">Certificato di residenza</option>
												
												<option value="12">Bolletta intestata</option></select>
											<span class="errortext">Seleziona</span>
										<br class="clear"><br>
										<a class="docBack" onclick="$('#blockDocIndentita1,#linkNoDocIndentita1').show();$('#blockChooseOtherDoc1').hide();resetblockDocIndentita(1);" href="javascript:;">Annulla</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- FINE BLOCCO SECONDO DOCUMENTO - PRIMO INTESTATARIO -->
					<!-- BLOCCO SECONDO DOCUMENTO - SECONDO INTESTATARIO -->
					<div class="aolAcc">
				<div class="aolAccTop">
					<a href="javascript:;" onclick="switchExp(this,true);" id="intestatarioId2" class="aolAccTitle">
						<span class="titoloAcc">intestatario 2 - martina testi</span>
						<span class="accButt" href="javascript:;"></span>
						<span class="errortext"></span>
					</a>
				</div>
				<div class="aolAccContent">
					<br class="clear">
					<div class="aolblockwrapper">
					<div id="blockDocIndentita2">
						<div class="row-fluid">
							<div class="span12">
								<div class="span1 margRightSmall">
									<img class="flLeft" src="/img/ico2inf_attivalo.gif">
								</div>
								<div class="optiontextmini span11 noMargLeft">
								<p>indicare un altro <strong>documento d'identità</strong> (diverso da quello che hai precedentemente inserito)</p><br class="clear"><br>
								</div>
							</div>	
						</div>	
						<div class="row-fluid spaceBottom">
							<div class="span6 fieldBlock phone">
								<label>Tipo di documento*</label>
								<select id="tipo_doc2_int2" name="tipo_doc2_int2">
									<option value="Patente">Patente</option>
								<option value="Passaporto">Passaporto</option>
								</select>
								<span class="errortext">Seleziona</span>
							</div>
							<div class="span6 fieldBlock phone">
								<label>Numero*</label>
								<input type="text" data-tooltip="" value="" maxlength="16" name="numero_doc2_int2" id="numero_doc2_int2">
								<span class="errortext">Compila</span>
							</div>
						</div>
						<div class="row-fluid spaceBottom">
								<div class="span6 fieldBlock phone">
									<label>Data di rilascio*</label>
									<div data-tooltip="" class="row-fluid" id="divDataEmissione2">
										<div class="row-fluid">
											<div class="span3 fieldBlock">
												<input type="text" id="gg_emissione2_int2" onkeyup="nextFocus(this, mm_emissione2_int2,'gg', 2);" placeholder="gg" maxlength="2" name="gg_emissione2_int2">
												<span class="errortext">Compila</span>
											</div>
											<div class="span1">/</div>
											<div class="span3 fieldBlock">
												<input type="text" id="mm_emissione2_int2" onkeyup="nextFocus(this, aa_emissione2_int2,'mm', 2);" placeholder="mm" maxlength="2" name="mm_emissione2_int2">
												<span class="errortext">Compila</span>
											</div>
											<div class="span1">/</div>
											<div class="span4 fieldBlock">
												<input type="text" id="aa_emissione2_int2" placeholder="aaaa" maxlength="4" name="aa_emissione2_int2">
												<span class="errortext">Compila</span>
											</div>
										</div>
										<span class="errortext"></span>
									</div>
								</div>
								<div class="span6 fieldBlock phone">
									<label>Stato di rilascio*</label>
									<select id="stato_emissione2_int2" onchange="checkStato(this.value,'provincia_emissione2_int2','comune_emissione2_int2');" name="stato_emissione2_int2">
										<option value="">seleziona</option>
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
										<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
										<option value="ARGENTINA">ARGENTINA</option>
										<option value="ARMENIA">ARMENIA</option>
										<option value="ARUBA">ARUBA</option>
										<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
										<option value="AUSTRALIA">AUSTRALIA</option>
										<option value="AUSTRIA">AUSTRIA</option>
										<option value="AZERBAIGIAN">AZERBAIGIAN</option>
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
										<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
										<option value="BOTSWANA">BOTSWANA</option>
										<option value="BRASILE">BRASILE</option>
										<option value="BRUNEI">BRUNEI</option>
										<option value="BULGARIA">BULGARIA</option>
										<option value="BURKINA FASO">BURKINA FASO</option>
										<option value="BURUNDI">BURUNDI</option>
										<option value="CAMERUN">CAMERUN</option>
										<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
										<option value="CANADA">CANADA</option>
										<option value="CAPO VERDE">CAPO VERDE</option>
										<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
										<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
										<option value="CIAD">CIAD</option>
										<option value="CILE">CILE</option>
										<option value="CINA REP.POP.">CINA REP.POP.</option>
										<option value="CIPRO">CIPRO</option>
										<option value="COLOMBIA">COLOMBIA</option>
										<option value="CONGO">CONGO</option>
										<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
										<option value="COREA DEL NORD">COREA DEL NORD</option>
										<option value="COREA DEL SUD">COREA DEL SUD</option>
										<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
										<option value="COSTARICA">COSTARICA</option>
										<option value="CROAZIA">CROAZIA</option>
										<option value="CUBA">CUBA</option>
										<option value="DANIMARCA">DANIMARCA</option>
										<option value="DOMINICA">DOMINICA</option>
										<option value="DOMINICANA REP.">DOMINICANA REP.</option>
										<option value="DUBAI">DUBAI</option>
										<option value="ECUADOR">ECUADOR</option>
										<option value="EGITTO">EGITTO</option>
										<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
										<option value="ERITREA">ERITREA</option>
										<option value="ESTONIA">ESTONIA</option>
										<option value="ETIOPIA">ETIOPIA</option>
										<option value="FILIPPINE">FILIPPINE</option>
										<option value="FINLANDIA">FINLANDIA</option>
										<option value="FRANCIA">FRANCIA</option>
										<option value="FUIJAYRAH">FUIJAYRAH</option>
										<option value="GABON">GABON</option>
										<option value="GAMBIA">GAMBIA</option>
										<option value="GEORGIA">GEORGIA</option>
										<option value="GERMANIA">GERMANIA</option>
										<option value="GHANA">GHANA</option>
										<option value="GIAMAICA">GIAMAICA</option>
										<option value="GIAPPONE">GIAPPONE</option>
										<option value="GIBILTERRA">GIBILTERRA</option>
										<option value="GIBUTI">GIBUTI</option>
										<option value="GIORDANIA">GIORDANIA</option>
										<option value="GRECIA">GRECIA</option>
										<option value="GRENADA">GRENADA</option>
										<option value="GROENLANDIA">GROENLANDIA</option>
										<option value="GUADALUPA">GUADALUPA</option>
										<option value="GUATEMALA">GUATEMALA</option>
										<option value="GUERNSEY">GUERNSEY</option>
										<option value="GUINEA">GUINEA</option>
										<option value="GUINEA BISSAU">GUINEA BISSAU</option>
										<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
										<option value="GUYANA">GUYANA</option>
										<option value="HAITI">HAITI</option>
										<option value="HONDURAS">HONDURAS</option>
										<option value="HONG KONG">HONG KONG</option>
										<option value="INDIA">INDIA</option>
										<option value="INDONESIA">INDONESIA</option>
										<option value="IRAN">IRAN</option>
										<option value="IRAQ">IRAQ</option>
										<option value="IRLANDA">IRLANDA</option>
										<option value="ISLANDA">ISLANDA</option>
										<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
										<option value="ISOLA MAN">ISOLA MAN</option>
										<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
										<option value="ISOLE COMORE">ISOLE COMORE</option>
										<option value="ISOLE FAR OER">ISOLE FAR OER</option>
										<option value="ISOLE FIJI">ISOLE FIJI</option>
										<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
										<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
										<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
										<option value="ISRAELE">ISRAELE</option>
										<option selected="selected" value="ITALIA">ITALIA</option>
										<option value="JERSEY">JERSEY</option>
										<option value="JUGOSLAVIA">JUGOSLAVIA</option>
										<option value="KAMPUCHEA">KAMPUCHEA</option>
										<option value="KAZAKISTAN">KAZAKISTAN</option>
										<option value="KENYA">KENYA</option>
										<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
										<option value="KIRIBATI">KIRIBATI</option>
										<option value="KOSSOVO">KOSSOVO</option>
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
										<option value="MACEDONIA">MACEDONIA</option>
										<option value="MADAGASCAR">MADAGASCAR</option>
										<option value="MALAWI">MALAWI</option>
										<option value="MALAYSIA">MALAYSIA</option>
										<option value="MALDIVE">MALDIVE</option>
										<option value="MALI">MALI</option>
										<option value="MALTA">MALTA</option>
										<option value="MAROCCO">MAROCCO</option>
										<option value="MARSHALL">MARSHALL</option>
										<option value="MARTINICA">MARTINICA</option>
										<option value="MAURITANIA">MAURITANIA</option>
										<option value="MESSICO">MESSICO</option>
										<option value="MOLDAVIA">MOLDAVIA</option>
										<option value="MONGOLIA">MONGOLIA</option>
										<option value="MONTENEGRO">MONTENEGRO</option>
										<option value="MOZAMBICO">MOZAMBICO</option>
										<option value="MYANMAR">MYANMAR</option>
										<option value="N.C.">N.C.</option>
										<option value="NAMIBIA">NAMIBIA</option>
										<option value="NAURU">NAURU</option>
										<option value="NEPAL">NEPAL</option>
										<option value="NICARAGUA">NICARAGUA</option>
										<option value="NIGER">NIGER</option>
										<option value="NIGERIA">NIGERIA</option>
										<option value="NORVEGIA">NORVEGIA</option>
										<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
										<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
										<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
										<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
										<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
										<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
										<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
										<option value="OLANDA">OLANDA</option>
										<option value="OMAN">OMAN</option>
										<option value="PAKISTAN">PAKISTAN</option>
										<option value="PANAMA">PANAMA</option>
										<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
										<option value="PARAGUAY">PARAGUAY</option>
										<option value="PERU'">PERU'</option>
										<option value="POLONIA">POLONIA</option>
										<option value="PORTOGALLO">PORTOGALLO</option>
										<option value="PORTORICO">PORTORICO</option>
										<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
										<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
										<option value="QATAR">QATAR</option>
										<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
										<option value="REGNO UNITO">REGNO UNITO</option>
										<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
										<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
										<option value="ROMANIA">ROMANIA</option>
										<option value="RUSSIA">RUSSIA</option>
										<option value="RWANDA">RWANDA</option>
										<option value="SAINT LUCIA">SAINT LUCIA</option>
										<option value="SALVADOR">SALVADOR</option>
										<option value="SAMOA">SAMOA</option>
										<option value="SAN MARINO">SAN MARINO</option>
										<option value="SANT'ELENA">SANT'ELENA</option>
										<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
										<option value="SENEGAL">SENEGAL</option>
										<option value="SERBIA">SERBIA</option>
										<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
										<option value="SEYCHELLES">SEYCHELLES</option>
										<option value="SHARJAH">SHARJAH</option>
										<option value="SIERRA LEONE">SIERRA LEONE</option>
										<option value="SINGAPORE">SINGAPORE</option>
										<option value="SIRIA">SIRIA</option>
										<option value="SLOVENIA">SLOVENIA</option>
										<option value="SOMALIA">SOMALIA</option>
										<option value="SPAGNA">SPAGNA</option>
										<option value="SRI LANKA">SRI LANKA</option>
										<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
										<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
										<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
										<option value="SUDAN">SUDAN</option>
										<option value="SURINAME">SURINAME</option>
										<option value="SVEZIA">SVEZIA</option>
										<option value="SVIZZERA">SVIZZERA</option>
										<option value="SWAZILAND">SWAZILAND</option>
										<option value="TAGIKISTAN">TAGIKISTAN</option>
										<option value="TAIWAN">TAIWAN</option>
										<option value="TANZANIA">TANZANIA</option>
										<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
										<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
										<option value="THAILANDIA">THAILANDIA</option>
										<option value="TOGO">TOGO</option>
										<option value="TONGA">TONGA</option>
										<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
										<option value="TUNISIA">TUNISIA</option>
										<option value="TURCHIA">TURCHIA</option>
										<option value="TURKMENISTAN">TURKMENISTAN</option>
										<option value="TURKS E CAICOS">TURKS E CAICOS</option>
										<option value="TUVALU'">TUVALU'</option>
										<option value="UCRAINA">UCRAINA</option>
										<option value="UGANDA">UGANDA</option>
										<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
										<option value="UNGHERIA">UNGHERIA</option>
										<option value="URUGUAY">URUGUAY</option>
										<option value="UZBEKISTAN">UZBEKISTAN</option>
										<option value="VANUATU">VANUATU</option>
										<option value="VENEZUELA">VENEZUELA</option>
										<option value="VIETNAM">VIETNAM</option>
										<option value="YEMEN">YEMEN</option>
										<option value="ZAMBIA">ZAMBIA</option>
										<option value="ZIMBABWE">ZIMBABWE</option>
									</select>
									<span class="errortext">Seleziona</span>
								</div>
						</div>
						<br class="clear">
						<div class="row-fluid">
								<div class="span6 phone">
									<label>Provincia di rilascio*</label>
									<select id="provincia_emissione2_int2" onchange="ProvCom.updateComuni('divComuneEmissione2', 'provincia_emissione2_int2', 'comune_emissione2_int2', 'comune_emissione2_int2', 'no', 'Comune di rilascio*');" name="provincia_emissione2_int2">
									<option value="">seleziona</option>
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
									
										<option value="CI">CI</option>
									
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
									
										<option value="OG">OG</option>
									
										<option value="OR">OR</option>
									
										<option value="OT">OT</option>
									
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
									
										<option value="VS">VS</option>
									
										<option value="VT">VT</option>
									
										<option value="VV">VV</option></select>
									<span class="errortext">Seleziona</span>
								</div>
								<div class="span6 phone" id="divComuneEmissione2">
									<span class="label">Comune di rilascio*</span>
									<select id="comune_emissione2_int2" name="comune_emissione2_int2"><option value="">seleziona</option></select>
									<span class="errortext">Seleziona</span>
								</div>
							</div>
						<br class="clear"><br>
						<a onclick="$('#blockEscapeDoc2').show();$(this).hide()" id="linkNoDocIndentita2" href="javascript:;">Non hai due diversi documenti d'identità?</a>		
					</div>
					<div style="display:none" class="noDocOpt" id="blockEscapeDoc2">
						<div>
							<div class="optiontextmini">
								Se in questo momento non hai a portata di mano un secondo documento d'identità, puoi <strong><a title="Vuoi continuare più tardi?" href="https://www.webank.it/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&amp;numPag=3&amp;&amp;funz=bozze&amp;fromAol=yes&amp;CNT_TARGET=Privati&amp;OBS_KEY=pro_wbn_apri_conto_webank">salvare la richiesta di apertura conto</a> e continuare più tardi</strong>.
							</div>
						</div>
						<div>
							<div class="optiontextmini">
								Non possiedi due diversi documenti d'identità? <a onclick="$('#blockChooseOtherDoc2').show();$('#blockEscapeDoc2').hide();$('#blockDocIndentita2').hide();" href="javascript:;">Scegli un altro documento</a>
							</div>
						</div>
					</div>
					<br class="clear">
					<div class="row-fluid" style="display:none" id="blockChooseOtherDoc2">
						<div class="span1 margRightSmall">
							<img class="flLeft" src="/img/ico2inf_attivalo.gif">
						</div>
						<div class="span11 noMargLeft">
							<strong>Non possiedi due diversi documenti d'identità?</strong>
							<p>In alternativa, scegli uno dei documenti che ti elenchiamo di seguito. Dovrai allegarne una copia insieme alla documentazione da spedire.</p>
							
								<select id="altroDoc_int2" name="altroDoc_int2"><option value="">seleziona</option>
									
									<option value="1">Patente nautica</option>
									
									<option value="2">Licenza di porto d'armi</option>
									
									<option value="3">Libretto di pensione</option>
									
									<option value="4">Patentino di abilitazione alla conduzione di impianti termici</option>
									
									<option value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
									
									<option value="6">Attestazione timbrata e sottoscritta da una Banca territoriale</option>
									
									<option value="7">Rogito</option>
									
									<option value="8">Testamento</option>
									
									<option value="9">Atto di vendita auto registrato al P.R.A</option>
									
									<option value="10">Atto costitutivo di società</option>
									
									<option value="11">Certificato di firma digitale</option>
									
									<option value="13">Certificato di residenza</option>
									
									<option value="12">Bolletta intestata</option></select>
								<span class="errortext">Seleziona</span>
							<br class="clear"><br>
							<a class="docBack" onclick="$('#blockDocIndentita2,#linkNoDocIndentita2').show();$('#blockChooseOtherDoc2').hide();resetblockDocIndentita(2);" href="javascript:;">Annulla</a>
						</div>
					</div>
					</div>
				</div>
			</div>
					<!-- BLOCCO SECONDO DOCUMENTO - SECONDO INTESTATARIO -->
					<!-- BLOCCO SECONDO DOCUMENTO - TERZO INTESTATARIO -->
				</div>
			<!-- FINE BLOCCO DOCUMENTO AGGIUNTIVO -->
			</div>
			<!-- FINE BLOCCO IDENTIFICAZIONE BONIFICO-->
			</div>
		</div>
					</fieldset>
				
				
				<!-- FINE BLOCCO IDENTIFICAZIONE PLURINTESTATARIO-->
						<div class="aolButton">
							<div class="row-fluid filettobutton linked">
								<div class="span2 phone"><a class="backLinked" href="/aol_promotori/aol_promotori.php" title="indietro">indietro</a></div>
								<div class="span10 phone">
										<a href="javascript:valida(2, true, true, false);" title="avanti" class="greenbutton flRight"><span>invia la richiesta</span></a>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>