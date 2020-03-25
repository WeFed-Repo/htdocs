<?php
	// Tipi di servizio (ev. aggiungere qui un nuovo tipo)
	$services = Array("box 1","box 2","box 3","box 5");
	
	$service = $_GET["service"];
	if(!isset($service)) $service = "box 3";
?>
<script type="text/javascript">
var firstChat = true;
function loadFakeChat() 
{
	 if (firstChat)
	 {
	 var vvcSpan = $("#vvc_placeholder_514b10ff06dc590109000016").html('<div class="btn"><a id="chatPromoChat" class="btnImg"> </a></div>');
     
	 switch(vvcSpan.attr("class"))
      {
          // Pagina standard e promo TT
        case "chatPromoInt standard": case "chatPromoInt promoTT":
			vvcSpan.before('<span class="introText">Contattaci<br> con un click</span>');
			vvcSpan.after('<p>per informazioni commerciali</p><div class="separator"></div>');
          break;
          
          // Pagina promotori
          case "chatPromoInt promo":
              vvcSpan.wrap('<div id="chatPromo"><div class="block content"></div></div>')
              vvcSpan.before('<span class="introText">Contattaci con un click</span>');
              vvcSpan.after('<p>per informazioni commerciali</p>');
			  $("#chatPromo").prepend('<div class="block top"></div>');
              $("#chatPromo").append('<div class="block bottom"></div>');
          break;
          
          // Caso "cross"
          case "chatPromoInt cross":
             vvcSpan.after('<p>oppure</p>');
          break;
      }
	  firstChat = false;
	  }
	  else
	  {
		alert("Basta!");
	  }
}
</script>

<link rel="stylesheet" href="/css/pub_aol.css">
			<!-- CONTENITORE PRINCIPALE -->
			<div id="content" class="noBg">
				
				<!--<div class="pageWrapperTop">
						<div class="pageWrapperTopSx">
							<img alt="Già registrato?" src="/img/ban_freemember.gif">
							<a href=""><img alt="Già registrato?" src="/img/str_freemember.gif"></a>
						</div>
						<div class="pageWrapperTopDx">
							<div class="DxTop"><h2 class="title">lorem ipsum dolor </h2>
							<p><strong>lorem ipsum</strong><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo</p> <p><strong>lorem ipsum</strong><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo</p>
							
							</div>
							
							<div class="DxBot"><p><strong>lorem ipsum</strong><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo</p></div>
						
						</div>
				</div>-->
				
				<!--seconda versione -->
				<style>
				
				</style>
				<div class="freememberTop">
						<div class="freememberTopSx">
							<img alt="T3" src="/img/ban_freemember2.jpg">
							<a href="#" title="Usa la piattaforma T3"><img src="/img/str_freemember2.jpg" alt="Piattaforma T3"></a>
							<a href="#" title="Usa T3 Open"><img src="/img/str_freemember3.jpg" alt="T3 Open"></a>
						</div>
						<div class="freememberTopDx">
							<h2 class="title">sei pronto a cogliere le migliori opportunit&agrave; dei mercati?</h2>
							<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </h5>
							<p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas <strong>sit aspernatur</strong> aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							<div class="boxelenco">
								<div class="boxelencoTop"></div>	
								<div class="boxelencoMdl"><ul class="flaglist">
									<li>3 diversi book di negoziazione</li>
									<li>15 desktop personalizzabili</li>
									<li>Alert e ordini condizionati</li>
									<li>Grafici dal tick by tick al daily, con uno storico fino a 10 anni</li>
								</ul>
								<ul class="flaglist">
									<li>Oltre 2000 news giornaliere italiane ed estere</li>
									<li>Una finestra di segnalazione di rottura di minimi e massimi giornalieri</li>
									<li>Watchlist e panieri dei principali mercati mondiali in tempo reale</li>
									
								</ul></div>	
							    <div class="boxelencoBottom"></div>	
							</div>
							<p><strong>ed ut</strong> perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam <a href="#">lorem ipsum</a></p>
						</div>
					</div>
				
				
				<!--fine seconda versione -->
				
				<div class="pageWrapper">
					
					<div id="maincontent">
						
											
											<h2 class="title">CHAT PROMOTORI SPALLA SINISTRA<br>
						SERVIZIO: <font style="color:#6f8f0a"><?php print ($service)?></font></h2>
						<p>Seleziona la casistica del servizio per vedere l'elemento nella spalla cambiare.</p>
						<ol>
							<?php 
								for($x=0;$x<count($services);$x++)
								{
							?>
								<li>Servizio <a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_free_member_t3_wb.php&service=<?php print($services[$x]); ?>"><?php print($services[$x]); ?></a></li>
							<?php
								}
							?>
						</ol>
						<p>Premi <a href="javascript:;" onclick="loadFakeChat();">QUI</a> per attivare la finta chat</p>
						<p>Premi <a href="javascript:;" onclick="$('#vvc_placeholder_514b10ff06dc590109000016 .btn').addClass('disabled')">QUI</a> per visualizzare il pulsante disabilitato</p>
						<form action="#" method="post" class="registrazione" id="sendmail">		
									
								<div class="fieldblockWrapper">
										<div class="titimg"><h3 class="titlegreen">dati anagrafici</h3></div>
										<div class="fieldblock error">
											<label>Nome*</label>
											<input type="text">
											<br class="clear">
											<span>Verifica</span>
										</div>
										
										<div class="fieldblock onright error">
											<label>Cognome*</label>
											<input type="text">
											<br class="clear">
											<span>Verifica</span>
										</div>
										<br class="clear">
										<div class="fieldblock error" style="width:183px">
											<label>Data di nascita*</label>
											<br class="clear">
											<input type="text" style="width:20px" onblur="if (this.value == '') {this.value='gg';};" onfocus="if (this.value == 'gg') {this.value='';}" class="gg" value="gg">
											<span class="divisorio">/</span>
											<input type="text" style="width:20px" onblur="if (this.value == '') {this.value='mm';};" onfocus="if (this.value == 'mm') {this.value='';}" class="gg" value="mm">
											<span class="divisorio">/</span>
											<input type="text" style="width:30px" onblur="if (this.value == '') {this.value='aaaa';};" onfocus="if (this.value == 'aaaa') {this.value='';}" class="anno" value="aaaa">
											<br class="clear">
											<span>Verifica</span>
										</div>
										
										
										<div class="fieldblock error" style="width:104px">
											<label>Sesso*</label>
											<br class="clear">
											<input type="radio" value="" name="" class="rad"><label class="fieldrad">M</label>
											<input type="radio" value="" name="" class="rad"><label class="fieldrad">F</label>
											<br class="clear">
											
										</div>
										<div class="fieldblock onright error">
											<label>Codice fiscale*</label>
											<input type="text">
											<br class="clear">
											<span>Verifica</span>
										</div>
								
								</div>
								<br class="clear">
								<div class="fieldblockWrapper">
									
									<div class="titimg"><h3 class="titlegreen">recapiti</h3></div>
									<div class="fieldblock">
										<label>Indirizzo di residenza</label>
										<select  style="width: 70px; clear:left;" id="indirizzo" name="indirizzo" value="" class="tel2ab"> <option>seleziona</option> </select>
										<input type="text" style="width: 162px; clear:none; margin-left: 5px" id="civico" name="civico" value="" class="telab" maxlength="5">
										
										<br class="clear">
										
									</div>
								  	
									<div class="fieldblock onright focus" style="width:177px; float:left; padding-left:3px;">
										
											<label>N</label>
											 <br class="clear">
											
											<input type="text" style="width: 50px; clear:none; " id="" name="" value="" class="telab" maxlength="5">
											<br class="clear">
															
									</div>
									
									<div class="fieldblock onright focus" style="width:110px">
											<label>CAP</label>
											 <br class="clear">
											
											<input type="text" style="width: 62px; clear:none;" id="" name="" value="" >
											<br class="clear">
													
										
								    </div>
									
									<div class="fieldblock">
										<div class="fieldblockcorto">
											<label>Provincia</label>
											<select  style="width: 70px; clear:left;" id="indirizzo" name="indirizzo" value="" class="tel2ab"> <option>seleziona</option> </select>
										</div>
										<div class="fieldblockcorto2">
										<label>Comune</label>
									    <select disabled="" name="citta" id="citta" style="width:170px;">
											<option value="">Seleziona</option>
										</select>
										</div>	
									   				
										<br class="clear">
									
									</div>
									<div class="fieldblock onright error">
									<label>Email*</label>
									<input type="text">
									<br class="clear">
									<span>Verifica</span>
								     </div>
									 
									 <div id="div__cellulare" class="fieldblock error">
										<br />
										<label id="cellulare_label">Cellulare*</label>
										<br class="clear">
										<input type="text" style="width: 62px; clear: left;" onkeyup="javascript:mySpostaFocus(this,$('cellulare'), event);" value="" maxlength="3" name="prefCellulare" id="prefCellulare">
										<input type="text" style="width: 162px; clear: none; margin-left: 5px;" onkeyup="javascript:mySpostaFocus(this,$('prefTelefono'), event);" value="" maxlength="7" name="cellulare" id="cellulare" class="tel2">
										<br class="clear">
										<span>Verifica</span>				
									</div>
									<div id="div__telefono2" class="fieldblock onright">
										<label>Telefono</label>
										<br class="clear">
										<input type="text" style="width: 62px; clear: left;" onkeyup="javascript:mySpostaFocus(this,$('telefono2'), event);" maxlength="4" value="" name="prefTelefono" id="prefTelefono" class="tel">
										<input type="text" style="width: 162px; clear: none; margin-left: 5px;" onkeyup="javascript:mySpostaFocus(this,$('D2'), event);" maxlength="8" value="" name="telefono2" id="telefono2" class="tel2">
										<br class="clear">
										<span>Verifica</span>				
									</div>
								</div>
								
								
								
								<br class="clear">
								
								<div class="fieldblockWrapper">
								<div class="titimg"><h3 class="titlegreen">informazioni sulla operatività</h3></div>
								<div id="div__D2" class="fieldblock error">
									<label id="D2_label">Qual è il tuo broker principale?*</label>
									<select style="visibility: visible;" name="D2" id="D2">
										<option value="">Seleziona</option>

											<option value="IWBank">IWBank</option>

											<option value="Fineco">Fineco</option>

											<option value="Sella">Sella</option>

											<option value="Directa">Directa</option>

											<option value="Nuovi investimenti sim">Nuovi investimenti sim</option>

											<option value="Millenium Sim">Millenium Sim</option>

											<option value="Altro">Altro</option>

											<option value="Nessuno">Nessuno</option>

									</select>
									<br class="clear">
									<span>Verifica</span>
								</div>
								<div id="div__D4" class="fieldblock onright error">
									<label id="D4_label">Qual è il tuo broker secondario?*</label>
									<select style="visibility: visible;" name="D4" id="D4">
										<option value="">Seleziona</option>

											<option value="IWBank">IWBank</option>

											<option value="Fineco">Fineco</option>

											<option value="Sella">Sella</option>

											<option value="Directa">Directa</option>

											<option value="Nuovi investimenti sim">Nuovi investimenti sim</option>

											<option value="Millenium Sim">Millenium Sim</option>

											<option value="Altro">Altro</option>

											<option value="Nessuno">Nessuno</option>

									</select>
									<br class="clear">
									<span>Verifica</span>				
								</div><br class="clear" />
								<div id="div__D5" class="fieldblock error">
									<label class="shortLabel" id="D5_label">Quali programmi professionali di analisi tecnica utilizzi?*</label>
									<select style="visibility: visible;" id="D5" name="D5">					
										<option value="">Seleziona</option>

											<option value="Metastock">Metastock</option>

											<option value="Tradestation">Tradestation</option>

											<option value="Prorealtime">Prorealtime</option>

											<option value="Esignal">Esignal</option>

											<option value="Visualtrader">Visualtrader</option>

											<option value="Altro">Altro</option>

											<option value="Nessuno">Nessuno</option>

									</select>
									<br class="clear">
									<span>Verifica</span>				
								</div>
								<div id="div__D6" class="fieldblock onright error">
									<label class="shortLabel" id="D6_label">Quante operazioni fai al mese?*</label>
									
									<select style="visibility: visible;" id="D6" name="D6">					
										<option value="">Seleziona</option>

											<option value="Nessuna">Nessuna</option>

											<option value="1-10">1-10</option>

											<option value="11-20">11-20</option>

											<option value="21-50">21-50</option>

											<option value="51-100">51-100</option>

											<option value="101-500">101-500</option>

											<option value="oltre 500">oltre 500</option>

									</select>
									<br class="clear">
									<span>Verifica</span>				
								</div>
								<br class="clear" />
								<div id="div__D11" class="fieldblock error">
									<label id="D11_label">Quali servizi informativi o applicativi di information <br />provider utilizzi?*</label>
									<select style="visibility: visible;" id="D11" name="D11">
										<option value="">Seleziona</option>

											<option value="Bloomberg">Bloomberg</option>

											<option value="Borsa Italiana">Borsa Italiana</option>

											<option value="Milano Finanza">Milano Finanza</option>

											<option value="Reuters">Reuters</option>

											<option value="Il sole 24 ore">Il sole 24 ore</option>

											<option value="Telekurs">Telekurs</option>

											<option value="Altro">Altro</option>

											<option value="Nessuno">Nessuno</option>

									</select>
									<br class="clear">
									<span>Verifica</span>
								</div>
								
								    <div class="fieldblock onright error" style="width: 175px; float:left; padding-left:3px;">
										
										<label>Su quali strumenti finanziari <br/>operi?*</label><br class="clear"/>
										<select class="tel2ab" value="" name="" id="" style="width: 102px; clear: left;"> <option>seleziona</option> </select>
									    <br class="clear" />
									    <span>Verifica</span>
									</div>	
									
									<div class="fieldblock onright error" style="width: 110px">	
										<label>Utilizzi trading <br />system?*</label>
									    
											<br class="clear">
											<input type="radio" class="rad" name="" value=""><label class="fieldrad">Si</label>
											<input type="radio" class="rad" name="" value=""><label class="fieldrad">No</label>
											<br class="clear">
										
									    <span>Verifica</span>				
										<br class="clear">
									
									</div>
									
									
									<br class="clear" />
								</div>
								
								<div class="fieldblockWrapper">
								
								<div class="titimg"><h3 class="titlegreen">Controlli d'accesso</h3></div>
								<div class="fieldblock" style="margin-bottom:32px;">
								<label>Login di accesso</label><br class="clear"/>
								<strong>pippo.pippo@libero.it</strong>
								</div>
								
								
								
								
								
								<div class="fieldblock error" style="width: 202px">
										
										<label>Digita il codice di controllo*</label>
										<input class="tel2ab" value="" name="" id="" style="width: 95px; clear: left;" type="text">
										<br class="clear" />
										<span>Verifica</span>
										<label style="float:right; padding: 0; margin-top:-13px;"><a class="leftlink" href="javascript:void(0);" onclick="javascript:generaImg('imgcaptchaEvents');" title="">Crea nuovo codice</a></label>
										
								</div>
								
								<div id="div__password" class="fieldblock error">
									<label>Digita la Password* (almeno 8 caratteri)</label>
									<br class="clear">
									<input type="password" onkeyup="javascript:mySpostaFocus(this,$('password2'), event);" value="" name="password" id="password" class="loginInput">
									<br class="clear">
									<span>Verifica</span>				
								</div>
								<div class="fieldblock onright" style="padding-top:15px;">
								
								<img src="/img/bg_captcha2.gif">
									   <br class="clear">
								</div>
								<div id="div__password2" class="fieldblock error">
									<label>Digita nuovamente la Password* (almeno 8 caratteri)</label>
									<br class="clear">
									<input type="password" onkeyup="javascript:mySpostaFocus(this,$('D7_yes'), event);" value="" name="password2" id="password2" class="loginInput">
									<br class="clear">
									<span>Verifica</span>				
								</div>
								
								
								</div>
							
								
							<br class="clear"><br>
							<div class="fieldblockWrapper">
								<div class="titimg"><h3 class="titlegreen">informativa sul trattaamento dei dati personali </h3></div>
								<div id="div__D7" class="fieldblockesteso error">
									
									<a class="pdf" target="_blank" href="/wbx/res/doc/Informativa_Privacy_Partecipa.pdf" title="Informativa sul trattamento dei dati personali">
										Informativa sul trattamento dei dati personali
									</a>
									<p class="note">Ai sensi dell'art. 23 e presa visione dell'informativa ex art. 13, del D. Lgs. 196/2003</p>
									<input type="radio" class="rad" name="D7" value="yes" id="D7_yes"><label class="fieldrad">autorizzo</label>
									<input type="radio" class="rad" name="D7" value="no" id="D7_no"><label class="fieldrad">non autorizzo</label>
									<br class="clear">
									<p class="note">
										il trattamento dei miei dati personali per l'invio, da parte della Banca, di comunicazioni  concernenti 
										l'offerta di prodotti o servizi del Gruppo BPM e per elaborazioni di studi e di ricerche di mercato.
									</p>
								</div>
								<div id="div__D8" class="fieldblockesteso error">
									<input type="radio" class="rad" name="D8" value="yes" id="D8_yes"><label class="fieldrad">autorizzo</label>
									<input type="radio" class="rad" name="D8" value="no" id="D8_no"><label class="fieldrad">non autorizzo</label>
									<br class="clear">
									<p class="note">
										il trattamento dei miei dati personali per l'invio, da parte della Banca, di comunicazioni  concernenti 
										l'offerta di prodotti o servizi di soggetti terzi.
									</p>
									
								</div>
							
							</div>
							
							</form>
							
						

						</div>
						<div class="notop" id="right">
							<div class="banner"><a href=""><img src="http://www.webank.it/wbx/res/banner/icon_appstore.gif" alt="Free Member T3"></a></div>
							<div class="filetto"></div>
							<?php virtual("/librerie/include/commons/boxeditoriali/pub_wb_spa_box_100.php"); ?>
							<!-- SPAN IN PRODUZIONE CHAT -- 
	
		<span id="vvc_placeholder_514c286003b89dfe1c0000fc"></span>
		
		-- FINE CODICE SPAN IN PRODUZIONE -->
	
	<!-- TEMPLATE CHAT PROMOTORI -->
	<?php 
	if ($service == "box 3")
	{
	?>
		<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt promo"></span>
	<?php
	}
	else
	{
	?>
	<div id="chatPromo">
		<div class="block top"></div>
		<div class="block content">
			<?php 
				switch ($service) {
				/* CASO STANDARD */
				case "box 1":
					?>
					<!-- CASO STANDARD -->
						<!-- ## BLOCCO CHAT ## -->
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt standard"></span>
						<!-- ## FINE BLOCCO CHAT ## -->
						<!-- BLOCCO ASSISTENZA -->
						<!--
						<div class="btn"><a id="chatPromoCall" class="btnImg" href="/webankpub/wb/chatPromotore.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&KEY4=pro_wbn_chat_promotori" title="Lascia i tuoi dati">&nbsp;</a></div>
						<p>per essere ricontattato</p>
						<div class="separator"></div> -->
						<!-- FINE BLOCCO ASSISTENZA -->
						<!-- BLOCCO ASSISTENZA -->
						<span class="introText">Siamo sempre al tuo fianco</span>
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Scopri">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO STANDARD -->
					<?php
					break;
					
				
				/* CASO PROMOTORI TT */
				case "box 2":
					?>
					<!-- CASO PROMOTORI TT -->
						<!-- BLOCCO CHAT -->
						
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt promoTT"></span>
						<!-- BLOCCO CHAT -->
						<!-- BLOCCO ASSISTENZA -->
						<div class="btn"><a id="chatPromoCall" class="btnImg" href="/webankpub/wb/chatPromotore.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&KEY4=pro_wbn_chat_promotori" title="Lascia i tuoi dati">&nbsp;</a></div>
						<p>per parlare con il Trading Team</p>
						<div class="separator"></div>
						<!-- FINE BLOCCO ASSISTENZA -->
						<!-- BLOCCO ASSISTENZA -->
						<span class="introText">
							Siamo sempre al tuo fianco
						</span>
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Scopri">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO PROMOTORI TT -->
					<?php
					break;
					
				/* CASO CROSS */
				case "box 4":
					?>
					<!-- CASO CROSS -->
						<!-- BLOCCO CHAT -->
						<span class="introText">
							Hai bisogno di assistenza?
						</span>
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt cross"></span>
						<!-- BLOCCO CHAT -->
						<!-- BLOCCO ASSISTENZA -->
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Vai al Servizio Clienti">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO CROSS -->
					<?php
					break;
				
				/* CASO PAGINA CONTATTI */
				case "box 5":
					?>
					<!-- CASO PAGINA CONTATTI -->
						<!-- BLOCCO SUPPORTO -->
						<span class="introText">
							Info commerciali e apertura conto
						</span>
						<img src="/img/chatpromo_nverde_supporto.gif" class="nverde"/>
						<p>
							Luned&igrave; - venerd&igrave; 8:30 - 21:00<br>
							Sabato 9:00 - 17:00<br>
						</p>
						
						<!-- BLOCCO CHAT -->
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt contatti"></span>
						<!-- FINE BLOCCO CHAT -->
						<div class="separator"></div>
						
						<!-- BLOCCO SUPPORTO -->
						<span class="introText">
							Servizio clienti
						</span><br class="clear">
						<img src="/img/chatpromo_nverde_info.gif"  class="nverde"/>
						<p>
							Luned&igrave; - venerd&igrave; 8:00 - 22:00<br>
							Sabato 9:00 - 17:00
						</p>
						<p class="small">
							Risponditore automatico sempre attivo
						</p>
						<div class="separator"></div>
						
						<div class="btn"><a id="chatPromoSend" class="btnImg" onclick="openPopOverLayer ('sendemail');" title="Scrivi a Webank">&nbsp;</a></div>
					<!-- FINE CASO PAGINA CONTATTI -->
					<?php
					break;
				
				}
			?>
		</div>
		<div class="block bottom"></div>
	</div>
	<?php
		}
		?>
	<!-- FINE TEMPLATE CHAT PROMOTORI -->
						</div>
						
				</div>
			</div>
<!-- COLLEGAMENTO CHAT -->
<script src="/wscmn/js/jquery.js"></script>
<script src="//cloudando.vivocha.com/a/webank/api/vivocha.js"></script>
<!-- FINE COLLEGAMENTO CHAT -->
