

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
				
				
				
				<!--fine seconda versione -->
				
				<div class="pageWrapper">
					
					<div id="maincontent">
						<div class="freememberTop2">
						<div class="freememberTopSx">
							<img alt="T3" src="/img/ban_freemember2.jpg">
							<a href="#" title="Usa la piattaforma T3"><img src="/img/str_freemember2.jpg" alt="Piattaforma T3"></a>
							<a href="#" title="Usa T3 Open"><img src="/img/str_freemember3.jpg" alt="T3 Open"></a>
						</div>
						<div class="freememberTopDx">
							<h2 class="title">COGLI TUTTE LE OCCASIONI DEI MERCATI!</h2>
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
					<p><strong>ed ut</strong> perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam <a href="#">lorem ipsum</a></p>						
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
							<!--requisiti di sistema-->
							<div class="banner">	
								<strong class="titoloElenco">Requisiti di sistema</strong>
								<span class="sottoTitoloElenco">Requisiti minimi:</span>
								<ul class="elencoSimple">
									<li>Windows (2000, XP, Vista, 7), Linux, Mac</li>
									<li>CPU Pentium IV o similari</li>
									<li>512 MB RAM</li>
									<li>ADSL</li>
								</ul>
								<span class="sottoTitoloElenco">Requisiti consigliati:</span>
								<ul class="elencoSimple">
									<li>Windows (2000, XP, Vista, 7), Linux, Mac</li>
									<li>CPU Dual Core o similari</li>
									<li>1 GB RAM</li>
									<li>ADSL veloce o Fibra Ottica</li>
								</ul>
							</div>
							<div class="filetto"></div>
							<div class="banner">
							 <p class="small">T3 necessita del programma <a href="http://www.java.com/it/download/manual.jsp" target="_blank">Java 2 Runtime Environment</a> (JRE) per avviarsi in ambiente Windows.
Per una performance ottimale, &egrave; consigliato  l'utilizzo della versione JRE 1.6.</p>
							</div>
							<div class="filetto"></div>
							<div class="banner contCenter">
								<a class="firstImg" href="#" title="Iphone"><img src="/wscmn/img/btn_apple_store_download_ita.png" alt="Iphone"></a>
								<a href="#" title="Iphone"><img src="/wscmn/img/btn_android_store_download_ita.png" alt="Android"></a>
							</div>
							<div class="filetto"></div>
							<div class="banner"><a title="Apri Conto Webank" href="/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw&amp;OBS_KEY=pro_wbn_apri_conto_webank"><img alt="Apri Conto Webank" src="/wbx/res/banner/ban_apriconto_wb.gif"></a></div>
							<!--chat as is-->
							<div class="banner"><span
    id="vvc_placeholder_514c286003b89dfe1c0000fc"
    class="chatPromoInt promo"></span></div><!--fine chat as is-->
						
					</div>
					
					</div>
				</div>
<!-- COLLEGAMENTO CHAT -->
<script src="/wscmn/js/jquery.js"></script>
<script src="//cloudando.vivocha.com/a/webank/api/vivocha.js"></script>
<!-- FINE COLLEGAMENTO CHAT -->
