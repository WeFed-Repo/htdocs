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
	<link rel="stylesheet" href="/css/aol_promotori2.css"></link>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/aol_promotori.js"></script>
</head>
<body>
	<div id="pagecontainer">
		<div id="header">
			<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
		</div>
		<div id="menu">
			<h2>Richiesta apertura conto</h2>
		</div>
		<div id="content">
			<div id="aolcontainer">
				<div id="aolleft">
					<!--funzione per emulare la visualizzazione dei tre blocchi a seconda degli input radio selezioanti-->
					<script type="text/javascript">
							function showBlocks()
							{
								var inputScelta = $('#numeroIntestatari input');
								var blocchi = new Array;
								blocchi[0] = $('#primoIntestatario');
								blocchi[1] = $('#secondoIntestatario');
								blocchi[2] = $('#terzoIntestatario');
								var numberToShow=0;
								for(i=0;i<inputScelta.length; i++)
								{
								 if(inputScelta[i].checked)
								 {
									numberToShow=i;
									for(j=0; j<blocchi.length;j++)
										{
											if(j<=i){blocchi[j].css('display','block')}
											else{blocchi[j].css('display','none')}
											if(j!=0){blocchi[j].attr('class','aolAcc')}
										}
								 }
								
								}
							}
					</script>
					
					

					<form autocomplete="off" method="post" action="">
						
						
						<div class="aolblock">
							<h3>Intestazione conto</h3>
							<fieldset class="fullwidth lastrow" id="numeroIntestatari">
								<label><input onclick ="showBlocks()" type="radio" name="num_intestatari" value="1" checked="checked" id="num_intestatari"><span class="optiontext" style="width:130px">Un intestatario</span></label>
								<label><input onclick ="showBlocks()" type="radio" name="num_intestatari" value="2" id="num_intestatari"><span class="optiontext" style="width:130px">Due intestatari</span></label>
								<label><input onclick ="showBlocks()" type="radio" name="num_intestatari" value="3" id="num_intestatari"><span class="optiontext" style="width:130px">Tre intestatari</span></label>
							</fieldset>
						</div>
						<div class="aolblock">
							<h3>Codici per convenzioni e promozioni</h3>
							<fieldset>
								<span class="label">Codice convenzione</span>
								<input type="text" name="cod_prom_conv" maxlength="10" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_prom_conv" class="opzionale">
								<span class="errortext">Verifica</span>
							</fieldset>
							<fieldset>
								<span class="label">Codice presentatore</span>
								<input type="text" name="cod_presentatore" maxlength="18" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_presentatore" class="opzionale">
								<span class="errortext">Verifica</span>
							</fieldset>
							<fieldset class="lastrow">
								<span class="label">Codice promotore</span>
								<input type="text" name="cod_promotore" maxlength="10" value="opzionale" onclick="removeOpt(this,'opzionale')" id="cod_promotore" class="opzionale">
								<span class="errortext">Verifica</span>
							</fieldset>
						</div>
						
						

						<!--<div class="aolblock">
							<h3>Adempimenti per normativa antiriciclaggio</h3>
							<p class="minitext">Ai sensi della vigente normativa antiriciclaggio (D.lgs. n° 231/07 e successive modifiche), sei tenuto a fornire alla Banca alcune dichiarazioni e informazioni. Ti ricordiamo che il rilascio di false informazioni oppure omissioni comporta conseguenze anche di natura penale.</p>
							<fieldset class="lastrow">
								<span id="lbusoConto" class="label">Utilizzo del conto*</span>
									<select name="usoConto" id="usoConto">
										<option value="-">seleziona</option>
										<option value="1|per esigenze familiari">per esigenze familiari</option>
										<option value="3|per esigenze di investimento">per esigenze di investimento</option>
										<option value="2|per esigenze di finanziamento">per esigenze di finanziamento</option>
										<option value="5|per esigenze professionali">per esigenze professionali</option>
									</select>
								<span class="errortext">Seleziona</span>
							</fieldset>
							<fieldset class="check">
								<span class="label">
									<span>Titolare effettivo*</span>
									<span><a href="javascript:;" onmouseover="showGreenToolTip(this, 'Per Titolare Effettivo s\'intende la persona fisica per conto della quale è realizzata un\'operazione o un\'attività (D.lgs. n° 231/07).'); this.getElementsByTagName('img')[0].setAttribute('src','../img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','../img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="../img/img_or_tooltip_off.gif" alt=""></a></span>
								</span>
								<label>
									<input type="checkbox" value="SI" name="titolare" id="titolare">
									<span class="optiontextmini">Dichiaro di essere il Titolare Effettivo del conto e di agire esclusivamente per mio conto.</span>
								</label>
								<span class="errortext">Seleziona</span>
							</fieldset>
							<p class="minitext nobottpad">Se vuoi fornire dichiarazioni diverse contattaci.</p>
						</div>-->
						<!--<div class="aolblock">
							<h3>Informativa sul trattamento dei dati personali</h3>
							<p class="minitext">Prendi visione dell'informativa; per procedere occorre aprire il documento.</p>
							<ul class="documentlist">
								<li><a href="/doc/nsf/InformativaTrattamentoDatiPersonali.pdf" onclick="fieldEnable('informativaPrivacy', true);setVisitedLink(this);" target="_blank">Informativa sul trattamento dei dati personali</a>*</li>
							</ul>
							<fieldset class="fullwidth check lastrow">
								<label>
									<input type="checkbox" name="informativaPrivacy" value="1" disabled="disabled" id="informativaPrivacy" title="Prima di procedere, occorre prendere visione dell'informativa, aprendo il relativo .pdf">
									<span class="optiontextmini">Dichiaro di aver letto attentamente l'informativa disponibile su documento elettronico (supporto durevole), di averne compreso e salvato il contenuto.</span>
								</label>
								<span class="errortext">Prendi visione del documento e seleziona</span>
							</fieldset>
						</div>-->
					
					
						<!-- BLOCCO PER 1 INTESTATARIO -->
						<div class="aolAcc expanded" id="primoIntestatario">
							<div class="aolAccTop">
								<a title="Espandi" href="javascript:;" onclick="switchExp(this,true);setViewElement(this);" id="intestatario1" class="aolAccTitle">
									<span class="titoloAcc">Intestatario 1 - lorem ispum</span>
									<span class="accButt"></span>
									<span class="errortext"></span>
								</a>
							</div>
							<div class="aolAccContent">
								
								<div class="aolblock">
									<h3>Dati anagrafici intestatario</h3>
									<fieldset>
										<span class="label">Nome*</span>
										<input type="text" name="nome_int1" value="" id="nome_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Cognome*</span>
										<input type="text" name="cognome_int1" value="" id="cognome_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset style="width: 183px;">
										<span class="label">Data di nascita*</span>
										<div id="tuttaLaData">
											<div class="fieldblock">
												<input type="text" name="gg_nascita_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int1,'gg', 2)" id="gg_nascita_int1" style="width:25px;" class="opzionale">
												<span class="errortext"></span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<input type="text" name="mm_nascita_int1" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int1,'mm', 2)" id="mm_nascita_int1" style="width:25px;" class="opzionale">
												<span class="errortext"></span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<input type="text" name="aa_nascita_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" id="aa_nascita_int1" style="width:50px;" class="opzionale">
												<span class="errortext"></span>
											</div>
										</div>
										<span class="errortext"></span>
									</fieldset>
									<fieldset style="width:104px">
										<span class="label">Sesso*</span>
										<label style="width:33px;"><input type="radio" name="sesso_int1" value="M" id="sesso_int1"><span class="optiontext">M</span></label>
										<label style="width:30px;"><input type="radio" name="sesso_int1" value="F" id="sesso_int1"><span class="optiontext">F</span></label>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<fieldset>
										<span class="label">Codice fiscale*</span>
										<input type="text" name="cod_fiscale_int1" maxlength="16" value="" id="cod_fiscale_int1">
										<script type="text/javascript" defer="defer">setCounterOnField("cod_fiscale_int1",16);</script>
										<span class="errortext"></span>
									</fieldset>
									<br class="clear">
									<fieldset class="lastrow">
										<span class="label">Email*</span>
										<input type="text" name="mail_int1" value="" id="mail_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset class="lastrow">
										<span class="label">Numero cellulare*<a onmouseover="showGreenToolTip(this, 'Grazie al <strong>Programma Sicurezza</strong>, riceverai SMS <strong>gratuiti</strong> per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" class="imgTooltip"><img src="/img/img_or_tooltip_off.gif" alt=""></a></span>
										<div class="fieldblock">
											<input type="text" name="prefisso_3_int1" maxlength="3" value="" onkeyup="nextFocus(this, telefono_3_int1,'',3)" id="prefisso_3_int1" style="width:50px">
											<span class="errortext"></span>
										</div>
										<div class="fieldblock">
											<input type="text" name="telefono_3_int1" maxlength="7" value="" id="telefono_3_int1" style="width:60px">
											<span class="errortext"></span>
										</div>
										<div class="fieldblock">
											<select name="operatore_int1" id="operatore_int1" style="width:116px" class="inputStep2 altri"><option value="">operatore</option>
												<option value="Tim">Tim</option>
												<option value="Vodafone">Vodafone</option>
												<option value="Wind">Wind</option>
												<option value="Tre">Tre</option>
												<option value="Altro">Altro</option></select>
											<span class="errortext"></span>
										</div>
									</fieldset>
								</div>
								
								<div class="aolblock">
									<h3>Informazioni personali</h3>
									<fieldset>
										<span class="label">Stato di nascita*</span>
										<select id="stato_nascita_int1" name="stato_nascita_int1">
											<option value="">seleziona</option>
										</select>
										<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Cittadinanza*</span>
										<select id="cittadinanza_int1" name="cittadinanza_int1">
											<option value="">seleziona</option>
										</select>
										<span class="errortext"></span>
									</fieldset>
									<fieldset id="">
										<span class="label">Provincia di nascita*</span>
										<select id="provincia_nascita_int1" onchange="" name="provincia_nascita_int1"  class="">
											<option value="">seleziona</option>
										</select>
										<span class="errortext"></span>
									</fieldset>
									<div id="divComune1"><fieldset id=""><span class="label">Comune di nascita*</span><select name="comune_nascita_int1" id="comune_nascita_int1" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									<fieldset class="lastrow">
										<span class="label">Titolo di studio*</span>
										<select id="titolo_studio_int1" name="titolo_studio_int1">
											<option value="">seleziona</option>
											<option value="Laurea in discipline economiche">Laurea in discipline economiche</option>
											<option value="Laurea">Laurea</option>
											<option value="Diploma">Diploma</option>
											<option value="Licenza media">Licenza media</option>
											<option value="Licenza elementare">Licenza elementare</option>
											<option value="Nessuno">Nessuno</option></select>
										<span class="errortext"></span>
									</fieldset>
				
									<fieldset class="lastrow">
										<span class="label">Come conosci Webank?*</span>
										<select id="come_conosce_int1" name="come_conosce_int1"><option value="">seleziona</option>
											<option value="Amici">Amici</option>
											<option value="Colleghi">Colleghi</option>
											<option value="Agenzia BPM">Agenzia BPM</option>
											<option value="Promotore Finanziario">Promotore Finanziario</option>
											<option value="TV">TV</option>	
											<option value="Internet">Internet</option>
											<option value="Stampa">Stampa</option>
											<option value="Radio">Radio</option>
											<option value="Motori di ricerca">Motori di ricerca</option>
											<option value="Altro">Altro</option></select>
										<span class="errortext"></span>
									</fieldset>
								</div>

								<!-- Documento identita' -->
								<div class="aolblock">
									<h3>Documento di identit&agrave;</h3>
									<fieldset>
										<span class="label">Tipo di documento*</span>
										<select id="tipo_doc_int1" name="tipo_doc_int1"><option value="">seleziona</option>
											<option value="Carta d'identità">Carta d'identit&agrave;</option>
											<option value="Patente">Patente</option>
											<option value="Passaporto">Passaporto</option></select>
										<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Numero*</span>
										<input type="text" id="numero_doc_int1" value="" maxlength="16" name="numero_doc_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Data di rilascio*</span>
											<div id="divDataEmissione1">
												<div class="fieldblock">
													<input type="text" class="opzionale" style="width: 25px;" id="gg_emissione_int1" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int1,'gg', 2)" onclick="removeOpt(this,'gg')" value="gg" maxlength="2" name="gg_emissione_int1">
													<span class="errortext"></span>
												</div>
												<span class="separator">/</span>

												<div class="fieldblock">
													<input type="text" class="opzionale" style="width: 25px;" id="mm_emissione_int1" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int1,'mm', 2)" onclick="removeOpt(this,'gg')" value="mm" maxlength="2" name="mm_emissione_int1">
													<span class="errortext"></span>
												</div>
												<span class="separator">/</span>
												<div class="fieldblock">
													<input type="text" class="opzionale" style="width: 50px;" id="aa_emissione_int1" onclick="removeOpt(this,'gg')" value="aaaa" maxlength="4" name="aa_emissione_int1">
													<span class="errortext"></span>
												</div>
											</div>
											<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Stato di rilascio*</span>
										<select id="stato_emissione_int1"  name="stato_emissione_int1"><option value="">seleziona</option>
										</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
				
									<br class="clear">
									<fieldset class="lastrow" id="">
										<span class="label">Provincia di rilascio*</span>
										<select id="provincia_emissione_int1"  name="provincia_emissione_int1" class="">
											<option value="">seleziona</option>
										</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<div id="divComuneEmissione1"><fieldset id=""><span class="label">Comune di rilascio*</span><select name="comune_emissione_int1" id="comune_emissione_int1" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
								</div>
		
								<!-- Recapiti -->
								<div class="aolblock">
									<h3>Recapiti</h3>
									<fieldset>
										<span class="label">Indirizzo di residenza*</span>
										<div class="fieldblock">
											<select style="width: 85px;" id="qualif_int1" name="qualif_int1">
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
												<option value="Località">Localit&agrave;</option>
												<option value="Largo">Largo</option>
												<option value="Vico">Vico</option>
												<option value="Altro ">Altro</option>
											</select>
											<span class="errortext"></span>
										</div>
										<div class="fieldblock">
											<input type="text" style="width: 161px;" id="via_int1" value="" name="via_int1">
											<span class="errortext"></span>
										</div>
									</fieldset>
									<fieldset style="width: 100px;">
										<span class="label">N*</span>
										<input type="text" style="width: 40px;" id="civico_int1" value="" name="civico_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset style="width: 185px;">
										<span class="label">CAP* (specifico)</span>
										<input type="text" style="width: 138px;" id="cap_int1" value="" maxlength="5" name="cap_int1">
										<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Provincia*</span>
										<select id="provincia_int1" onchange="" name="provincia_int1"><option value="">seleziona</option>
										</select>
										<span class="errortext"></span>
									</fieldset>
								
									<div id="divComuneResidenza1"><fieldset><span class="label">Comune*</span><select name="comune_int1" id="comune_int1"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>

									<div class="expandable" id="divIndirizzoCorrispondenza1">
										<span class="label">Indirizzo di corrispondenza</span>
										<div class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
											<span>Aggiungi indirizzo se diverso da quello di residenza. A questo indirizzo verr&agrave; inviata la documentazione contrattuale, per tutti gli intestatari del conto.</span>
										</div>
									<div class="expandableCont">
										<fieldset>
											<span class="label">Indirizzo di corrispondenza*</span>
											<div class="fieldblock">
												<select style="width: 85px;" id="qualif_recapito_int1" name="qualif_recapito_int1"><option value="">seleziona</option>
												<option value="Via">Via</option>
												<option value="Viale">Viale</option>
												<option value="Corso">Corso</option>
												<option value="Piazza">Piazza</option>
												<option value="Strada">Strada</option>
												<option value="Stretto">Stretto</option>
												<option value="Contrada">Contrada</option>
												<option value="Vicolo">Vicolo</option>
												<option value="Località">Localit&agrave;</option>
												<option value="Largo">Largo</option>
												<option value="Vico">Vico</option>
												<option value="Altro">Altro</option></select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="fieldblock">
												<input type="text" style="width: 161px;" id="via_recapito_int1" value="" name="via_recapito_int1">
												<span class="errortext">Compila</span>
											</div>
										</fieldset>
										
										<fieldset style="width: 100px;">
											<span class="label">N*</span>
											<input type="text" style="width: 40px;" id="civico_recapito_int1" value="" name="civico_recapito_int1">
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset style="width: 185px;">
											<span class="label">CAP* (specifico)*</span>
											<input type="text" style="width: 136px;" id="cap_recapito_int1" value="" maxlength="5" name="cap_recapito_int1" >
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset>
											<span class="label">Provincia*</span>
											<select id="provincia_recapito_int1"  name="provincia_recapito_int1">
											<option value="">seleziona</option>
											</select>
											<span class="errortext">Seleziona</span>
										</fieldset>
										
										<div id="divComuneRecapito1"><fieldset><span class="label">Comune*</span><select name="comune_recapito_int1" id="comune_recapito_int1"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>

									</div>
								</div>
								
								<div class="expandable" id="divIndirizzoCai1">
									<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
									<div class="expander">
										<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
										<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
									</div>
									
									<div class="expandableCont">
										<fieldset>
											<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
											<div class="fieldblock">
												<select style="width: 85px;" id="qualif_domicilioCAI_int1" name="qualif_domicilioCAI_int1" ><option value="">seleziona</option>
												<option value="Via">Via</option>
												<option value="Viale">Viale</option>
												<option value="Corso">Corso</option>
												<option value="Piazza">Piazza</option>
												<option value="Strada">Strada</option>
												<option value="Stretto">Stretto</option>
												<option value="Contrada">Contrada</option>
												<option value="Vicolo">Vicolo</option>
												<option value="Località">Localit&agrave;</option>
												<option value="Largo">Largo</option>
												<option value="Vico">Vico</option>
												<option value="Altro">Altro</option></select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="fieldblock">
												<input type="text" style="width: 161px;" id="via_domicilioCAI_int1" value="" name="via_domicilioCAI_int1" >
												<span class="errortext">Compila</span>
											</div>
										</fieldset>
										
										<fieldset style="width: 100px;">
											<span class="label">N*</span>
											<input type="text" style="width: 40px;" id="civico_domicilioCAI_int1" value="" name="civico_domicilioCAI_int1" >
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset style="width: 185px;">
											<span class="label">CAP* (specifico)*</span>
											<input type="text" style="width: 136px;" id="cap_domicilioCAI_int1" value="" maxlength="5" name="cap_domicilioCAI_int1" >
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset>
											<span class="label">Provincia*</span>
											<select id="provincia_domicilioCAI_int1"  name="provincia_domicilioCAI_int1"><option value="">seleziona</option>
												</select>
											<span class="errortext">Seleziona</span>
										</fieldset>
										
										<div id="divComuneDomicilioCAI1"><fieldset><span class="label">Comune*</span><select name="comune_domicilioCAI_int1" id="comune_domicilioCAI_int1"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									</div>
								</div>
								
								<div class="expandable" id="divRecapitiTelefonici1">
									<span class="label">Altri recapiti telefonici (facoltativi)</span>
									<div class="expander">
										<a class="btn" onclick="switchExp(this)" href="javascript:;">
										</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
									</div>

									<div class="expandableCont">
										<fieldset class="lastrow">
												<span class="label">Telefono casa</span>
												<div class="fieldblock">
													<input type="text" style="width: 50px;" id="prefisso_int1" value="" maxlength="4" name="prefisso_int1">
													<span class="errortext">Compila</span>
												</div>
												<div class="fieldblock">
													<input type="text" style="width: 178px;" id="telefono_int1" value="" name="telefono_int1">
													<span class="errortext">Compila</span>
												</div>
										</fieldset>
										
										<fieldset class="lastrow">
												<span class="label">Telefono ufficio</span>
												<div class="fieldblock">
													<input type="text" style="width: 50px;" id="prefisso_2_int1" value="" maxlength="4" name="prefisso_2_int1"> 
													<span class="errortext">Compila</span>
												</div>
												<div class="fieldblock">
													<input type="text" style="width: 178px;" id="telefono_2_int1" value="" name="telefono_2_int1">
													<span class="errortext">Compila</span>
												</div>
										</fieldset>
									</div>
								</div>
							</div>
			
							<div class="aolblock">
								<h3>Tu e Webank</h3>
								<p class="minitext">Sei gi&agrave; cliente Webank?*</p>
								<p class="minitext grey">Dichiarando di essere gi&agrave; cliente Webank non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli nei nostri archivi.</p>
								
								<div id="divIdentificazione1" class="fieldblock">
									<fieldset class="withInput">
										<label><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').show()" value="SI" name="isbpmcliente_int1"><span class="optiontext">si</span></label>
									</fieldset>
									<fieldset id="numConto1" style="float: left; display: none; min-height: 30px;">
										<input type="text" class="opzionale" id="cccliente_int1" onkeyup="removeOpt(this,'inserisci il numero del tuo conto Webank');" onclick="removeOpt(this,'inserisci il numero del tuo conto Webank')" value="inserisci il numero del tuo conto Webank" maxlength="16" name="cccliente_int1">
										<span class="errortext">Compila</span>
									</fieldset>
									<fieldset class="withInput lastrow">
										<label><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').hide();$('cccliente_int1').value = 'inserisci il numero del tuo conto Webank';$('cccliente_int1').className='opzionale'" value="NO" name="isbpmcliente_int1"><span class="optiontext">no</span></label>
										<br class="clear">
									</fieldset>
									<span class="errortext">Seleziona</span>
								</div>
								<br class="clear">
							</div>
			
							</div>
						</div>
						<br class="clear" />
						<!-- BLOCCO PER 2 INTESTATARIO -->

						<div class="aolAcc" id="secondoIntestatario" style="display:none">
	
							<div class="aolAccTop">
								<a title="Espandi" href="javascript:;" onclick="switchExp(this,true);setViewElement(this);" id="intestatario2" class="aolAccTitle">
									<span class="titoloAcc" id="nominativo2">Intestatario 2</span>
									<span class="accButt"></span>
									<span class="errortext">Compila</span>
								</a>
							</div>
	
							<div class="aolAccContent">
			
								<div class="aolblock">
									<h3>Dati anagrafici intestatario</h3>
									<fieldset>
										<span class="label">Nome*</span>
										<input type="text" id="nome_int2" value="" name="nome_int2">
										<span class="errortext">Compila</span>
									</fieldset>
				
									<fieldset>
										<span class="label">Cognome*</span>
										<input type="text" id="cognome_int2" value="" name="cognome_int2">
										<span class="errortext">Compila</span>
									</fieldset>
						
									<fieldset style="width: 183px;">
										<span class="label">Data di nascita*</span>
										<div id="divDataNascita2">
										<div class="fieldblock">
											<input type="text" class="opzionale" style="width: 25px;" id="gg_nascita_int2" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int2,'gg', 2)" onclick="removeOpt(this,'gg')" value="gg" maxlength="2" name="gg_nascita_int2">
											<span class="errortext">Compila</span>
										</div>
							
										<span class="separator">/</span>
							
										<div class="fieldblock">
											<input type="text" class="opzionale" style="width: 25px;" id="mm_nascita_int2" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int2,'mm', 2)" onclick="removeOpt(this,'mm')" value="mm" maxlength="2" name="mm_nascita_int2">
											<span class="errortext">Compila</span>
										</div>
							
										<span class="separator">/</span>
							
										<div class="fieldblock">
											<input type="text" class="opzionale" style="width: 50px;" id="aa_nascita_int2" onclick="removeOpt(this,'aaaa')" value="aaaa" maxlength="4" name="aa_nascita_int2">
											<span class="errortext">Compila</span>
										</div>
										</div>
										<span class="errortext"></span>
									</fieldset>
				
									<fieldset style="width: 104px;">
										<span class="label">Sesso*</span>
										<label style="width: 33px;"><input type="radio" id="sesso_int2" value="M" name="sesso_int2" ><span class="optiontext">M</span></label>
										<label style="width: 30px;"><input type="radio" id="sesso_int2" value="F" name="sesso_int2" ><span class="optiontext">F</span></label>
										<span class="errortext">Compila</span>
									</fieldset>
				
									<fieldset><div class="fieldCounter"><span>0</span>/16 caratteri</div>
										<span class="label">Codice fiscale*</span>
										<input type="text" id="cod_fiscale_int2" value="" maxlength="16" name="cod_fiscale_int2" >
										<script defer="defer" type="text/javascript">setCounterOnField("cod_fiscale_int2",16);</script>
										<span class="errortext">Compila</span>
									</fieldset>
						
									<br class="clear">
				
									<fieldset class="lastrow">
										<span class="label">Email*</span>
										<input type="text" id="mail_int2" value="" name="mail_int2">
										<span class="errortext">Compila</span>
									</fieldset>
						
									<fieldset class="lastrow">
										<span class="label">Numero cellulare*<a class="imgTooltip" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" onmouseover="showGreenToolTip(this, 'Grazie al &lt;strong&gt;Programma Sicurezza&lt;/strong&gt;, riceverai SMS &lt;strong&gt;gratuiti&lt;/strong&gt; per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
										
										<div class="fieldblock">
											<input type="text" style="width: 50px;" id="prefisso_3_int2" onkeyup="nextFocus(this, telefono_3_int2,'',3)" value="" maxlength="3" name="prefisso_3_int2">
											<span class="errortext">Compila</span>
										</div>
							
										<div class="fieldblock">
											<input type="text" style="width: 60px;" id="telefono_3_int2" value="" maxlength="7" name="telefono_3_int2">
											<span class="errortext">Compila</span>
										</div>
							
										<div class="fieldblock">
											<select class="inputStep2 altri" style="width: 116px;" id="operatore_int2" name="operatore_int2"><option value="">operatore</option>
												<option value="Tim">Tim</option>
												<option value="Vodafone">Vodafone</option>
												<option value="Wind">Wind</option>
												<option value="Tre">Tre</option>
												<option value="Altro">Altro</option></select>
											<span class="errortext">Seleziona</span>
										</div>
									</fieldset>
								</div>

								<div class="aolblock">
									<h3>Informazioni personali</h3>
									<fieldset>
										<span class="label">Stato di nascita*</span>
										<select id="stato_nascita_int2"  name="stato_nascita_int2"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<fieldset>
										<span class="label">Cittadinanza*</span>
										<select id="cittadinanza_int2" name="cittadinanza_int2"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<fieldset id="">
										<span class="label">Provincia di nascita*</span>
										<select id="provincia_nascita_int2"  name="provincia_nascita_int2" class="">
										<option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<div id="divComune2"><fieldset id=""><span class="label">Comune di nascita*</span><select name="comune_nascita_int2" id="comune_nascita_int2" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									
									<fieldset class="lastrow">
										<span class="label">Titolo di studio*</span>
										<select id="titolo_studio_int2" name="titolo_studio_int2"><option value="">seleziona</option>
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
									<h3>Documento di identit&agrave;</h3>
									<fieldset>
										<span class="label">Tipo di documento*</span>
										<select id="tipo_doc_int2" onchange="setEmessione('tipo_doc_int2', 'stato_emissione_int2', 'emesso_da_int2');" name="tipo_doc_int2"><option value="">seleziona</option>
											<option value="Carta d'identità">Carta d'identit&agrave;</option>
											<option value="Patente">Patente</option>
											<option value="Passaporto">Passaporto</option></select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<fieldset>
										<span class="label">Numero*</span>
										<input type="text" id="numero_doc_int2" value="" maxlength="16" name="numero_doc_int2">
										<span class="errortext">Compila</span>
									</fieldset>
									<fieldset>
										<span class="label">Data di rilascio*</span>
											<div id="divDataEmissione2">
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="gg_emissione_int2" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int2,'gg', 2)" onclick="removeOpt(this,'gg')" value="gg" maxlength="2" name="gg_emissione_int2">
												<span class="errortext">Compila</span>
											</div>
											<span class="separator">/</span>

											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="mm_emissione_int2" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int2,'mm', 2)" onclick="removeOpt(this,'gg')" value="mm" maxlength="2" name="mm_emissione_int2">
												<span class="errortext">Compila</span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 50px;" id="aa_emissione_int2" onclick="removeOpt(this,'gg')" value="aaaa" maxlength="4" name="aa_emissione_int2">
												<span class="errortext">Compila</span>
											</div>
											</div>
											<span class="errortext"></span>
									</fieldset>
									<fieldset>
										<span class="label">Stato di rilascio*</span>
										<select id="stato_emissione_int2" name="stato_emissione_int2">
											<option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<br class="clear">
									<fieldset class="lastrow" id="">
										<span class="label">Provincia di rilascio*</span>
										<select id="provincia_emissione_int2" name="provincia_emissione_int2" class=""><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<div id="divComuneEmissione2"><fieldset id=""><span class="label">Comune di rilascio*</span><select name="comune_emissione_int2" id="comune_emissione_int2" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
								</div>
			
								<!-- Recapiti -->
								<div class="aolblock">
									<h3>Recapiti</h3>
									<fieldset>
										<span class="label">Indirizzo di residenza*</span>
										<div class="fieldblock">
											<select style="width: 85px;" id="qualif_int2" name="qualif_int2"><option value="">seleziona</option>
												
												<option value="Via">Via</option>
												
												<option value="Viale">Viale</option>
												
												<option value="Corso">Corso</option>
												
												<option value="Piazza">Piazza</option>
												
												<option value="Piazzale">Piazzale</option>
												
												<option value="Strada">Strada</option>
												
												<option value="Stretto">Stretto</option>
												
												<option value="Contrada">Contrada</option>
												
												<option value="Vicolo">Vicolo</option>
												
												<option value="Località">Localit&agrave;</option>
												
												<option value="Largo">Largo</option>
												
												<option value="Vico">Vico</option>
												
												<option value="Altro ">Altro</option></select>
											<span class="errortext">Seleziona</span>

										</div>
										<div class="fieldblock">
											<input type="text" style="width: 161px;" id="via_int2" value="" name="via_int2">
											<span class="errortext">Compila</span>
										</div>
									</fieldset>
									<fieldset style="width: 100px;">
										<span class="label">N*</span>
										<input type="text" style="width: 40px;" id="civico_int2" value="" name="civico_int2">
										<span class="errortext">Compila</span>
									</fieldset>
									<fieldset style="width: 185px;">
										<span class="label">CAP* (specifico)*</span>
										<input type="text" style="width: 138px;" id="cap_int2" value="" maxlength="5" name="cap_int2">
										<span class="errortext">Compila</span>
									</fieldset>
									<fieldset>
										<span class="label">Provincia*</span>
										<select id="provincia_int2" name="provincia_int2"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									<div id="divComuneResidenza2"><fieldset><span class="label">Comune*</span><select name="comune_int2" id="comune_int2"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									<div class="expandable" id="divIndirizzoCai2">
										<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
										<div class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
											<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
										</div>
										
										<div class="expandableCont">
											<fieldset>
												<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
												<div class="fieldblock">
													<select style="width: 85px;" id="qualif_domicilioCAI_int2" name="qualif_domicilioCAI_int2"><option value="">seleziona</option>
													<option value="Via">Via</option>
													<option value="Viale">Viale</option>
													<option value="Corso">Corso</option>
													<option value="Piazza">Piazza</option>
													<option value="Strada">Strada</option>
													<option value="Stretto">Stretto</option>
													<option value="Contrada">Contrada</option>
													<option value="Vicolo">Vicolo</option>
													<option value="Località">Localit&agrave;</option>
													<option value="Largo">Largo</option>
													<option value="Vico">Vico</option>
													<option value="Altro">Altro</option></select>
													<span class="errortext">Seleziona</span>
												</div>
												<div class="fieldblock">
													<input type="text" style="width: 161px;" id="via_domicilioCAI_int2" value="" name="via_domicilioCAI_int2">
													<span class="errortext">Compila</span>
												</div>
											</fieldset>
											
											<fieldset style="width: 100px;">
												<span class="label">N*</span>
												<input type="text" style="width: 40px;" id="civico_domicilioCAI_int2" value="" name="civico_domicilioCAI_int2">
												<span class="errortext">Compila</span>
											</fieldset>
											
											<fieldset style="width: 185px;">
												<span class="label">CAP* (specifico)*</span>
												<input type="text" style="width: 136px;" id="cap_domicilioCAI_int2" value="" maxlength="5" name="cap_domicilioCAI_int2">
												<span class="errortext">Compila</span>
											</fieldset>
											
											<fieldset>
												<span class="label">Provincia*</span>
												<select id="provincia_domicilioCAI_int2" name="provincia_domicilioCAI_int2"><option value="">seleziona</option>
													</select>
												<span class="errortext">Seleziona</span>
											</fieldset>
											
											<div id="divComuneDomicilioCAI2">



						<fieldset><span class="label">Comune*</span><select name="comune_domicilioCAI_int2" id="comune_domicilioCAI_int2"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
										</div>
									</div>
									<div class="expandable" id="divRecapitiTelefonici2">
										<span class="label">Altri recapiti telefonici (facoltativi)</span>
										<div class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;">
											</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
										</div>
										<div class="expandableCont">
											<fieldset class="lastrow">
													<span class="label">Telefono casa</span>
													<div class="fieldblock">
														<input type="text" style="width: 50px;" id="prefisso_int2" value="" maxlength="4" name="prefisso_int2">
														<span class="errortext">Compila</span>
													</div>
													<div class="fieldblock">
														<input type="text" style="width: 178px;" id="telefono_int2" value="" name="telefono_int2">
														<span class="errortext">Compila</span>
													</div>
											</fieldset>
											
											<fieldset class="lastrow">
													<span class="label">Telefono ufficio</span>
													<div class="fieldblock">
														<input type="text" style="width: 50px;" id="prefisso_2_int2" value="" maxlength="4" name="prefisso_2_int2"> 
														<span class="errortext">Compila</span>
													</div>
													<div class="fieldblock">
														<input type="text" style="width: 178px;" id="telefono_2_int2" value="" name="telefono_2_int2">
														<span class="errortext">Compila</span>
													</div>
											</fieldset>
										</div>
									</div>
								</div>
				
								<div class="aolblock">
									<h3>Tu e Webank</h3>
									<p class="minitext">Sei già cliente Webank?*</p>
									<p class="minitext grey">Dichiarando di essere già cliente Webank non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli nei nostri archivi.</p>
									
									<div id="divIdentificazione2" class="fieldblock">
										<fieldset class="withInput">
											<label><input type="radio" id="isbpmcliente_int2" onclick="$('numConto2').show()" value="SI" name="isbpmcliente_int2"><span class="optiontext">si</span></label>
										</fieldset>
										<fieldset id="numConto2" style="float: left; display: none; min-height: 30px;">
											<input type="text" class="opzionale" id="cccliente_int2" onkeyup="removeOpt(this,'inserisci il numero del tuo conto Webank');" onclick="removeOpt(this,'inserisci il numero del tuo conto Webank')" value="inserisci il numero del tuo conto Webank" maxlength="16" name="cccliente_int2">
											<span class="errortext">Compila</span>
										</fieldset>
										<fieldset class="withInput lastrow">
											<label><input type="radio" id="isbpmcliente_int2" onclick="$('numConto2').hide();$('cccliente_int2').value = 'inserisci il numero del tuo conto Webank';$('cccliente_int2').className='opzionale'" value="NO" name="isbpmcliente_int2"><span class="optiontext">no</span></label>
											<br class="clear">
										</fieldset>
										<span class="errortext">Compila</span>
									</div>
									<br class="clear">
								</div>
				
							</div>
						</div>


						<!-- BLOCCO PER 3 INTESTATARIO -->

						<div class="aolAcc" id="terzoIntestatario" style="display:none">
							<div class="aolAccTop">
								<a title="Espandi" href="javascript:;" onclick="switchExp(this,true);setViewElement(this);" id="intestatario3" class="aolAccTitle">
									<span class="titoloAcc">Intestatario 3</span>
									<span class="accButt"></span>
									<span class="errortext">Compila</span>
								</a>
							</div>
							
							<div class="aolAccContent">
							
								<div class="aolblock">
										<h3>Dati anagrafici intestatario</h3>
								
										<fieldset>
											<span class="label">Nome*</span>
											<input type="text" id="nome_int3" value="" name="nome_int3">
											<span class="errortext">Compila</span>
										</fieldset>
								
										<fieldset>
											<span class="label">Cognome*</span>
											<input type="text" id="cognome_int3" value="" name="cognome_int3">
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset style="width: 183px;">
											<span class="label">Data di nascita*</span>
											<div id="divDataNascita3">
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="gg_nascita_int3" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_nascita_int3,'gg', 2)" onclick="removeOpt(this,'gg')" value="gg" maxlength="2" name="gg_nascita_int3">
												<span class="errortext">Compila</span>
											</div>
								
											<span class="separator">/</span>
								
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="mm_nascita_int3" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_nascita_int3,'mm', 2)" onclick="removeOpt(this,'mm')" value="mm" maxlength="2" name="mm_nascita_int3">
												<span class="errortext">Compila</span>
											</div>
								
											<span class="separator">/</span>
								
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 50px;" id="aa_nascita_int3" onclick="removeOpt(this,'aaaa')" value="aaaa" maxlength="4" name="aa_nascita_int3">
												<span class="errortext">Compila</span>
											</div>
											</div>
											<span class="errortext"></span>
										</fieldset>
								
										<fieldset style="width: 104px;">
											<span class="label">Sesso*</span>
											<label style="width: 33px;"><input type="radio" id="sesso_int3" value="M" name="sesso_int3"><span class="optiontext">M</span></label>
											<label style="width: 30px;"><input type="radio" id="sesso_int3" value="F" name="sesso_int3"><span class="optiontext">F</span></label>
											<span class="errortext">Compila</span>
										</fieldset>
								
										<fieldset><div class="fieldCounter"><span>0</span>/16 caratteri</div>
											<span class="label">Codice fiscale*</span>
											<input type="text" id="cod_fiscale_int3" value="" maxlength="16" name="cod_fiscale_int3">
											<script defer="defer" type="text/javascript">setCounterOnField("cod_fiscale_int3",16);</script>
											<span class="errortext">Compila</span>
										</fieldset>
										
										<br class="clear">
								
										<fieldset class="lastrow">
											<span class="label">Email*</span>
											<input type="text" id="mail_int3" value="" name="mail_int3">
											<span class="errortext">Compila</span>
										</fieldset>
										
										<fieldset class="lastrow">
											<span class="label">Numero cellulare*<a class="imgTooltip" onmouseout="hideGreenToolTip(); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_off.gif');" onmouseover="showGreenToolTip(this, 'Grazie al &lt;strong&gt;Programma Sicurezza&lt;/strong&gt;, riceverai SMS &lt;strong&gt;gratuiti&lt;/strong&gt; per controllare i movimenti del tuo conto (bonifici, ricariche telefoniche e carte prepagate)'); this.getElementsByTagName('img')[0].setAttribute('src','/img/img_or_tooltip_on.gif');"><img alt="" src="/img/img_or_tooltip_off.gif"></a></span>
											
											<div class="fieldblock">
												<input type="text" style="width: 50px;" id="prefisso_3_int3" onkeyup="nextFocus(this, telefono_3_int3,'',3)" value="" maxlength="3" name="prefisso_3_int3" >
												<span class="errortext">Compila</span>
											</div>
								
											<div class="fieldblock">
												<input type="text" style="width: 60px;" id="telefono_3_int3" value="" maxlength="7" name="telefono_3_int3">
												<span class="errortext">Compila</span>
											</div>
								
											<div class="fieldblock">
												<select class="inputStep2 altri" style="width: 116px;" id="operatore_int3" name="operatore_int3" ><option value="">operatore</option>
													<option value="Tim">Tim</option>
													<option value="Vodafone">Vodafone</option>
													<option value="Wind">Wind</option>
													<option value="Tre">Tre</option>
													<option value="Altro">Altro</option></select>
												<span class="errortext">Seleziona</span>
											</div>
										</fieldset>
								</div>
								<div class="aolblock">
									<h3>Informazioni personali</h3>
									
									<fieldset>
										<span class="label">Stato di nascita*</span>
										<select id="stato_nascita_int3" name="stato_nascita_int3"><option value="">seleziona</option>
											
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<fieldset>
										<span class="label">Cittadinanza*</span>
										<select id="cittadinanza_int3" name="cittadinanza_int3"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<fieldset id="">
										<span class="label">Provincia di nascita*</span>
										<select id="provincia_nascita_int3" name="provincia_nascita_int3" class=""><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<div id="divComune3"><fieldset id=""><span class="label">Comune di nascita*</span><select name="comune_nascita_int3" id="comune_nascita_int3" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									
									<fieldset class="lastrow">
										<span class="label">Titolo di studio*</span>
										<select id="titolo_studio_int3" name="titolo_studio_int3"><option value="">seleziona</option>
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
										<select id="tipo_doc_int3" ><option value="">seleziona</option>
											<option value="Carta d'identità">Carta d'identità</option>
											<option value="Patente">Patente</option>
											<option value="Passaporto">Passaporto</option></select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<fieldset>
										<span class="label">Numero*</span>
										<input type="text" id="numero_doc_int3" value="" maxlength="16" name="numero_doc_int3">
										<span class="errortext">Compila</span>
									</fieldset>

									<fieldset>
										<span class="label">Data di rilascio*</span>
											<div id="divDataEmissione3">
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="gg_emissione_int3" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione_int3,'gg', 2)" onclick="removeOpt(this,'gg')" value="gg" maxlength="2" name="gg_emissione_int3">
												<span class="errortext">Compila</span>
											</div>
											<span class="separator">/</span>

											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 25px;" id="mm_emissione_int3" onkeyup="removeOpt(this,'gg');nextFocus(this, aa_emissione_int3,'mm', 2)" onclick="removeOpt(this,'gg')" value="mm" maxlength="2" name="mm_emissione_int3">
												<span class="errortext">Compila</span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<input type="text" class="opzionale" style="width: 50px;" id="aa_emissione_int3" onclick="removeOpt(this,'gg')" value="aaaa" maxlength="4" name="aa_emissione_int3">
												<span class="errortext">Compila</span>
											</div>
											</div>
											<span class="errortext"></span>
									</fieldset>
									
									<fieldset>
										<span class="label">Stato di rilascio*</span>
										<select id="stato_emissione_int3" name="stato_emissione_int3"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<br class="clear">
									
									<fieldset class="lastrow" id="">
										<span class="label">Provincia di rilascio*</span>
										<select id="provincia_emissione_int3" name="provincia_emissione_int3"class=""><option value="">seleziona</option>
										
											
												<option value="VC">VC</option>
											
												<option value="VE">VE</option>
											
												<option value="VI">VI</option>
											
												<option value="VR">VR</option>
											
												<option value="VS">VS</option>
											
												<option value="VT">VT</option>
											
												<option value="VV">VV</option></select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<div id="divComuneEmissione3">



						<fieldset id=""><span class="label">Comune di rilascio*</span><select name="comune_emissione_int3" id="comune_emissione_int3" class=""><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									
								</div>
							
								<!-- Recapiti -->
								<div class="aolblock">
									<h3>Recapiti</h3>

									<fieldset>
										<span class="label">Indirizzo di residenza*</span>
										<div class="fieldblock">
											<select style="width: 85px;" id="qualif_int3" name="qualif_int3"><option value="">seleziona</option>
												
												<option value="Via">Via</option>
												
												<option value="Viale">Viale</option>
												
												<option value="Corso">Corso</option>
												
												<option value="Piazza">Piazza</option>
												
												<option value="Piazzale">Piazzale</option>
												
												<option value="Strada">Strada</option>
												
												<option value="Stretto">Stretto</option>
												
												<option value="Contrada">Contrada</option>
												
												<option value="Vicolo">Vicolo</option>
												
												<option value="Località">Località</option>
												
												<option value="Largo">Largo</option>
												
												<option value="Vico">Vico</option>
												
												<option value="Altro ">Altro</option></select>
											<span class="errortext">Seleziona</span>

										</div>
										<div class="fieldblock">
											<input type="text" style="width: 161px;" id="via_int3" value="" name="via_int3">
											<span class="errortext">Compila</span>
										</div>
									</fieldset>
									
									
									<fieldset style="width: 100px;">
										<span class="label">N*</span>
										<input type="text" style="width: 40px;" id="civico_int3" value="" name="civico_int3">
										<span class="errortext">Compila</span>
									</fieldset>
									
									
									<fieldset style="width: 185px;">
										<span class="label">CAP* (specifico)*</span>
										<input type="text" style="width: 138px;" id="cap_int3" value="" maxlength="5" name="cap_int3">
										<span class="errortext">Compila</span>
									</fieldset>
									
									<fieldset>
										<span class="label">Provincia*</span>
										<select id="provincia_int3" name="provincia_int3"><option value="">seleziona</option>
											</select>
										<span class="errortext">Seleziona</span>
									</fieldset>
									
									<div id="divComuneResidenza3">



						<fieldset><span class="label">Comune*</span><select name="comune_int3" id="comune_int3"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
									
									<div class="expandable" id="divIndirizzoCai3">
										<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
										
										<div class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
											<span>Aggiungi indirizzo se diverso da quello di residenza.</span>
										</div>
										
										<div class="expandableCont">
											<fieldset>
												<span class="label">Indirizzo per la centrale di allarme interbancaria*</span>
												<div class="fieldblock">
													<select style="width: 85px;" id="qualif_domicilioCAI_int3" name="qualif_domicilioCAI_int3"><option value="">seleziona</option>
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
													<input type="text" style="width: 161px;" id="via_domicilioCAI_int3" value="" name="via_domicilioCAI_int3">
													<span class="errortext">Compila</span>
												</div>
											</fieldset>
											
											<fieldset style="width: 100px;">
												<span class="label">N*</span>
												<input type="text" style="width: 40px;" id="civico_domicilioCAI_int3" value="" name="civico_domicilioCAI_int3">
												<span class="errortext">Compila</span>
											</fieldset>
											
											<fieldset style="width: 185px;">
												<span class="label">CAP* (specifico)*</span>
												<input type="text" style="width: 136px;" id="cap_domicilioCAI_int3" value="" maxlength="5" name="cap_domicilioCAI_int3">
												<span class="errortext">Compila</span>
											</fieldset>
											
											<fieldset>
												<span class="label">Provincia*</span>
												<select id="provincia_domicilioCAI_int3" name="provincia_domicilioCAI_int3"><option value="">seleziona</option>
													</select>
												<span class="errortext">Seleziona</span>
											</fieldset>
											
											<div id="divComuneDomicilioCAI3">



						<fieldset><span class="label">Comune*</span><select name="comune_domicilioCAI_int3" id="comune_domicilioCAI_int3"><option value="">seleziona</option></select><span class="errortext">Verifica</span></fieldset></div>
										</div>
									</div>

									<div class="expandable" id="divRecapitiTelefonici3">
										<span class="label">Altri recapiti telefonici (facoltativi)</span>

										<div class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;">
											</a> <span>Puoi aggiungere il recapito telefonico di casa e ufficio.</span>
										</div>
										
										<div class="expandableCont">
											<fieldset class="lastrow">
													<span class="label">Telefono casa</span>
													<div class="fieldblock">
														<input type="text" style="width: 50px;" id="prefisso_int3" value="" maxlength="4" name="prefisso_int3">
														<span class="errortext">Compila</span>
													</div>
													<div class="fieldblock">
														<input type="text" style="width: 178px;" id="telefono_int3" value="" name="telefono_int3">
														<span class="errortext">Compila</span>
													</div>
											</fieldset>
											
											<fieldset class="lastrow">
													<span class="label">Telefono ufficio</span>
													<div class="fieldblock">
														<input type="text" style="width: 50px;" id="prefisso_2_int3" value="" maxlength="4" name="prefisso_2_int3"> 
														<span class="errortext">Compila</span>
													</div>
													<div class="fieldblock">
														<input type="text" style="width: 178px;" id="telefono_2_int3" value="" name="telefono_2_int3">
														<span class="errortext">Compila</span>
													</div>
											</fieldset>
										</div>
									</div>
								</div>
								
								<div class="aolblock">
									<h3>Tu e Webank</h3>
									<p class="minitext">Sei già cliente Webank?*</p>
									<p class="minitext grey">Dichiarando di essere già cliente Webank non dovrai seguire alcuna procedura di identificazione. Verificheremo i tuoi dati con quelli nei nostri archivi.</p>
									
									<div id="divIdentificazione3" class="fieldblock">
										<fieldset class="withInput">
											<label><input type="radio" id="isbpmcliente_int3" onclick="$('numConto3').show()" value="SI" name="isbpmcliente_int3"><span class="optiontext">si</span></label>
										</fieldset>
										<fieldset id="numConto3" style="float: left; display: none; min-height: 30px;">
											<input type="text" class="opzionale" id="cccliente_int3" onkeyup="removeOpt(this,'inserisci il numero del tuo conto Webank');" onclick="removeOpt(this,'inserisci il numero del tuo conto Webank')" value="inserisci il numero del tuo conto Webank" maxlength="16" name="cccliente_int3">
											<span class="errortext">Compila</span>
										</fieldset>
										<fieldset class="withInput lastrow">
											<label><input type="radio" id="isbpmcliente_int3" onclick="$('numConto3').hide();$('cccliente_int3').value = 'inserisci il numero del tuo conto Webank';$('cccliente_int3').className='opzionale'" value="NO" name="isbpmcliente_int3"><span class="optiontext">no</span></label>
											<br class="clear">
										</fieldset>
										<span class="errortext">Compila</span>
									</div>
									<br class="clear">
								</div>
								
							</div>
						</div>
						
						
						<div class="filettobutton">
							<a class="greenbutton" title="avanti" href="javascript:;" onclick="setError('nome_int1','lorem');setError('sesso_int1','lorem'); setViewElement('nome_int1')"><span>avanti</span></a>
						</div>
						<br class="clear">
					</form>
				</div>
			
			</div>
		</div>
	</div>
</body>
</html>
