<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<!-- ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<script type="text/javascript">
			//Esempio di setting di alcuni errori
			errori = false;
			function esempioErrori()
			{
				if (errori)
				{
					parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_3.php";
					return 0;
				}
				setError('informativa','Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude');
				setViewElement('informativa');
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<form>
		<h2>Conto Webank include</h2>
		<div class="aolblock">
			<h3>Conto corrente e deposito di risparmio</h3>
			<div class="aolblockwrapper">
			<p>
				L'accredito degli interessi avviene trimestralmente. Se vuoi puoi modificarne la frequenza dopo l'apertura del conto chiamando il Customer Care.
			</p>
			<!--<h3>Programma sicurezza</h3>
			<p>Sms gratuiti per ogni disposizione</p>-->
			</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
		</div>	
		<div class="aolblock">	
			<h3>Estratto conto e contabili</h3>
			<div class="aolblockwrapper">
			<p>
				L'estratto conto verr&agrave; prodotto trimestralmente, Se vuoi, puoi modificarne la frequenza dopo l'apertura del conto chiamando il Customer Care.
			</p>
			<p>
				Scegli come ricevere l'estratto conto e le contabili del tuo conto.
			</p>
			<div class="fieldblock" id="estrattoRadio">
				<fieldset class="lastrow" style="width: 195px">
					<label><input type="radio" name="estratto" id="estratto"><span class="optiontext">online<br>servizio gratuito</span></label>
				</fieldset>
				<fieldset class="lastrow">
					<label><input type="radio" name="estratto"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35&euro; per ciascun documento</span></label>
				</fieldset>
				<span class="errortext"></span>
			</div>
			</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
		</div>
		<!-- ACCORDION DEPOSITO TITOLI -->
		<div class="aolblock">
			<h3>Deposito titoli e servizi di investimento</h3>
			<div class="aolblockwrapper">
			<p>
				Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.
			</p>
			<div id="aolDeposito" class="opened">
				<div class="aolDepositotop">
					<span href="#" class="title" title="Dati per l'apertura del deposito titoli"></span>
					<fieldset>
						<label><input type="checkbox" onclick="if(this.checked) {$('aolDeposito').className=''} else {$('aolDeposito').className='opened'};"><span class="optiontextmini">Non voglio richiedere ora il deposito titoli</span></label>
					</fieldset>
				</div>
				<div id="aolDepositoCont">
					<div class="aolDepositoBody">
						<!-- CONTENUTO DEI CAMPI -->
						<h4 class="primo">Regime fiscale</h4>
						<p>
							Ai sensi dell'art.6 del D. Lgs. 21 novembre 1997 n. 461, e successive modifiche, il Cliente pu&ograve; esprimere la sua scelta per l'applicazione dell'imposizione sostitutiva sulle plusvalenze, differenziali e/o proventi dei Servizi Amministrati.
						</p>
						<fieldset class="fullwidth">
							<label>
								<input type="radio" name="regime">
								<span class="optiontext">
									<strong>Regime fiscale amministrato (consigliato)</strong>: applicazione dell'imposizione sostitutiva attraverso la Banca .Si tratta del regime che consente al Cliente di fruire della Banca quale sostituto d'imposta e quindi di evitare complicazioni fiscali in sede di compilazione della propria dichiarazione dei redditi. 
								</span>
							</label>
						</fieldset>
						<fieldset class="fullwidth">
							<label>
								<input type="radio" name="regime">
								<span class="optiontext">
									<strong>Regime fiscale dichiarativo</strong>: il Cliente dichiara di essere a conoscenza degli obblighi personali di natura dichiarativa in materia fiscale e solleva la Banca da qualsiasi responsabilit&agrave; al riguardo. L'intermediario non applicher&agrave; nessuna ritenuta sul Capital Gain, il Cliente sar&agrave; tenuto al regime ordinario di tassazione e quindi a dover ottemperare individualmente a tutti gli obblighi impositivi.
								</span>
							</label>
						</fieldset>
						<h4>Tipo di commissione</h4>
						<fieldset class="lastrow" style="width:160px">
							<label><input type="radio" name="profilo"><span class="optiontext">Profilo basso</span></label>
							<span class="errortext"></span>
						</fieldset>
						<fieldset class="lastrow" style="width: 150px;">
							<label><input type="radio" name="profilo"><span class="optiontext">Profilo variabile</span></label>
							<span class="errortext"></span>
						</fieldset>
						<a href="javascript:;" onclick="javascript:window.open('connect.php?page=str_pub_pop_commissioni.php','main1','width=550,height=370,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')" class="floating">Dettagli commissioni</a>
						<h4>Utilizzo del deposito titoli</h4>
						<p>
							Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07) sei tenuto a specificare il tipo di utilizzo che farai del deposito titoli. Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale.
						</p>
						<fieldset class="lastrow" style="width:160px">
							<label><input type="radio" name="depo"><span class="optiontext">Lorem ipsum dolor</span></label>
							<span class="errortext"></span>
						</fieldset>
						<fieldset class="lastrow">
							<label><input type="radio" name="depo"><span class="optiontext">Sit amet consectetur</span></label>
							<span class="errortext"></span>
						</fieldset>						
						<h4>Abilitazione long overnight</h4>
						<p>
							L'operativit&agrave; <strong>Long Overnight</strong> consente di comprare titoli senza impiegare tutta la liquidit&agrave; necessaria.
						</p>
						<fieldset style="min-height: 20px;" class="fullwidth check lastrow">
							<label>
								<input type="checkbox" id="informativa" title="Lorem ipsum dolor sit amet">
								<span class="optiontext optiontextb">Desidero ricevere la documentazione per l'abilitazione al servizio Long Overnight</span>
							</label>
							<span class="errortext">Compila</span>
						</fieldset>
						<h4>Estratto conto e contabili del deposito titoli</h4>
						<p>
							Scegli come ricevere l'estratto conto e le contabili del tuo conto
						</p>
						<fieldset class="lastrow" style="width: 160px">
							<label><input type="radio" name="carta"><span class="optiontext">online<br>servizio gratuito</span></label>
						</fieldset>
						<fieldset class="lastrow" style="width: 300px">
							<label><input type="radio" name="carta"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35&euro; per ciascun documento</span></label>
						</fieldset>
						<!-- FINE CONTENUTO DEI CAMPI -->
					</div>
				</div>
				<div class="aolDepositoBottom"> </div>
			</div>
			</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
		</div>		
		<!-- FINE ACCORDION DEPOSITO TITOLI -->
		
		
		<!-- BLOCCO SELEZIONE PRODOTTI -->
		<div class="productPush">
			<span class="pushTitolo">
				<img src="/img/tit_richiedi_ora_prodotti.gif" alt="Richiedi ora i prodotti gratuiti che preferisci">
			</span>
			<div class="product bancomat">
				<fieldset>
					<label><input type="checkbox"><span class="large">Bancomat</span></label>
				</fieldset>
				<div class="upperLeft">
					<p>
						Scopri i vantaggi: &egrave; gratuito e lo puoi utilizzare ovunque senza canone. Inoltre, i prelievi in Italia e in tutta l'area Euro sono gratuiti.
						<br />Richiedilo subito!<br />
						Secondo bancomat gratuito in caso di conto cointestato. <br />
						Potrai richiedere un altro bancomat gratuito dopo l'apertura<br /> del conto corrente.
					</p>
				</div>
			</div>
			<div class="product carta">
				<fieldset>
					<label><input type="checkbox"><span class="large">Carta ricaricabile</span></label>
				</fieldset>
				<div class="upperLeft">
					<p>
						Carta Je@ns la prepagata ricaricabile di Webank: gratuita, semplice <br/>
e sicura per tutti i tuoi acquisti in tutto il mondo! Richiedila subito.</p><p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br />eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				
				
				
				</div>
				
			</div>
			<br class="clear"><br>
			
			
			
			
			
			<!-- NUOVO BOX CARDLESS -->
			<div class="condizionidetailsWrapper">
				<div class="product cardless">
					<fieldset>
						<label><input type="checkbox"><span class="large">Prelievo cardless</span></label>
					</fieldset>
					<div class="upperLeft">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
							<br>
							<a href="javascript:;" class="showConditionOverlayer" data-anchorposition="lBlT">guarda come funziona</a>
							<div class="condizionidetailsOverlayer" style="display:none">
								<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""></a>
								<img src="/img/str_aolpush_cardless_small.png" alt="" class="flLeft imgProd">
								<div class="flLeft">
									<h3>Prelievo cardless</h3><br class="clear">
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
									</ul>
									<br>
									
					<!-- Fine corpo overlay -->
								</div>
								<div id="videoApp" style="margin:0 auto"><embed src="https://media.webank.it/vod/video_cardless382x241.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
							<script defer="defer" type="text/javascript"> 
								var flashobject = new SWFObject("/swf/videoplayer.swf", "flash", "382", "241", "9", "#000000"); 
								flashobject.addParam("quality", "high"); 
								flashobject.addParam("wmode", "opaque"); 
								flashobject.addParam("allowfullscreen","false"); 
								flashobject.addParam("allowscriptaccess", "always"); 
								flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_cardless382x241.flv"); 
								flashobject.write("videoApp");
							</script>  
							</div>
					</div>
					
					<div class="productBottom"></div>
				</div>
			</div>
		</div>
			
		<!-- FINE BLOCCO SELEZIONE PRODOTTI -->
					
		<div class="aolblockpromo">
			<h3>Informativa precontrattuale</h3>
			<div class="aolblockwrapper">
			<p>
				Ti ricordiamo che &egrave; tuo diritto ricevere copia di tutta la documentazione contrattuale, idonea per la stipula e per una ponderata valutazione del contenuto.
			</p>
			<ul class="bulletSfumato">
				<li>questo diritto non pu&ograve; essere sottoposto a termini e condizioni</li>
				<li>l'esercizio di tale diritto non impegna le parti a stipulare il contratto.</li>
			</ul>
			<fieldset class="fullwidth check" style="min-height: 20px">
				<label>
					<input type="checkbox" title="Lorem ipsum dolor sit amet" id="informativa">
					<span class="optiontextmini">Dichiaro di avvalermi di questo diritto e riconosco di aver stampato o salvato copia completa del testo precontrattuale*</span>
				</label>
				<span class="errortext">Compila</span>
			</fieldset>
			<fieldset class="fullwidth check lastrow">
				<label>
					<input type="checkbox" title="Lorem ipsum dolor sit amet" id="informativa">
					<span class="optiontextmini">Dichiaro di aver preso visione della documentazione precontrattuale disponibile su queste pagine*</span>
				</label>
				<span class="errortext">Compila</span>
			</fieldset>
			</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
		</div>
			<div class="filettobutton linked">
			<a title="indietro" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_0.php" class="backLinked">indietro</a>
			<a onclick="javascript:esempioErrori();" title="Vuoi continuare pi&ugrave; tardi?" href="javascript:;" class="bozzaLinked"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
			<a onclick="javascript:esempioErrori();" title="avanti" href="javascript:;" class="greenbutton"><span>avanti</span></a>
		</div>
		</form>
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
		<!-- caso A -->
		<div class="leftit">
		<img src="/img/tit_tuo_conto.gif"  alt="Il tuo conto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone</span>
					<span>Zero commissioni bancarie</span>
				</li>
				<li>
					<span class="productname">Deposito e linee vincolate</span>
					<span>1,10% tasso base</span>
					<span>Accreditamento trimestrale interessi</span>
					<span class="boxedgreen">
						<span><strong>3,5%</strong> sui depositi a 12 mesi</span>
					</span>
				</li>
				<li>
					<span class="productname">Sportello telefonico</span>
					<span>Servizio gratuito</span>
				</li>
				<li>
					<span class="promogreen">
						<span>In pi&ugrave; per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
					</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span>Nessun prodotto</span>
				</li>
			</ul>
		</div>
		<!--<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 9.00 - 20.00 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>-->
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
			<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" /><a href="javascript:;" onclick="openPopOverLayer('callmeback', 'floating');">Webank ti richiama</a>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_opened.gif"  alt="Documentazione"/></a>
		</div>
		<div id="aoldoclist" style="display:block">
				<ul>
					<li><a href="#1" target="blank" onclick="setVisitedLink(this)">Foglio Informativo</a></li>
					<li><a href="#2" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#3" target="blank" onclick="setVisitedLink(this)">Modulo richiesta</a></li>
					<li><a href="#4" target="blank" onclick="setVisitedLink(this)">Documento di sintesi</a></li>
					<li><a href="#5" target="blank" onclick="setVisitedLink(this)">Informativa precontrattuale servizi a distanza</a></li>
					<li><a href="#6" target="blank" onclick="setVisitedLink(this)">Principali diritti del cliente</a></li>
					<li><a href="#7" target="blank" onclick="setVisitedLink(this)">Guida pratica al conto</a></li>
					<li><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				</ul>
				<h4>Per  apertura deposito titoli</h4>
				<ul>
					<li><a href="#9" target="blank" onclick="setVisitedLink(this)">Richiesta deposito titoli</a></li>
					<li><a href="#10" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#11" target="blank" onclick="setVisitedLink(this)">Documentidi sintesi</a></li>
					<li><a href="#12" target="blank" onclick="setVisitedLink(this)">Informativa Mifid</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- OVERLAY PER CALLMEBACK -->
			<div id="callmeback" class="overlayer" style="display:none">
				<div class="overlayertitle">
					<a id="close" class="chiudi" ;="" onclick="closePopOverLayer('callmeback')" href="#"></a>
					<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
				</div>
				<div class="overlayerbody">
				<span class="sep"></span>
					<!-- secondo blocco-->
					<div class="contact">
						
						<div class="contactcont" id="formcont">
							<form action="#" method="post">
								<div class="fieldblocklayer error">
									<label>Numero di telefono</label>
									<input type="text" isdatepicker="true">
									<br class="clear">
									<span class="error">Verifica</span>
								</div>
								<div id="calendario" class="fieldblocklayer middle error">
									<label>Giorno</label>
									<script type="text/javascript">DatePickerControl.createDp ('datepicker1',"20110517|20110518|20110519");</script>
									
									<br class="clear">
									<span class="error">Verifica</span>
								</div>
								<div class="fieldblocklayer dx error">
									<label>Fascia oraria</label>
									<select name="orario" id="orario" style="visibility: visible;"><option value="09.00-10.00">09.00-10.00</option><option value="10.00-11.00">10.00-11.00</option><option value="11.00-12.00">11.00-12.00</option><option value="12.00-13.00">12.00-13.00</option><option value="13.00-14.00">13.00-14.00</option><option value="14.00-15.00">14.00-15.00</option><option value="15.00-16.00">15.00-16.00</option><option value="16.00-17.00">16.00-17.00</option><option value="17.00-18.00">17.00-18.00</option><option value="18.00-19.00">18.00-19.00</option><option value="19.00-20.00">19.00-20.00</option></select>
									<br class="clear">
									<span class="error">Verifica</span>
								</div>
								<br class="clear">
								<br />
								<br />
								<div class="fieldblocklayer">
									<label>Codice</label><a class="rightlink" href="#">Crea nuovo codice</a>
									<img class="imgCaptcha" src="/img/bg_captcha3.gif">
									
								</div>
								<div class="fieldblocklayer middle bottom error">
									<label>Inserisci codice</label>
									<input type="text" class="lenghtmiddle" isdatepicker="true">
									<br class="clear">
									<span class="error">Verifica</span>
									<br><br>
								</div>
								<div class="fieldblocklayer dx">
									<a onclick="this.parentNode.parentNode.parentNode.style.display='none'; document.getElementById('helptxt').style.display='none'; document.getElementById('msgtxt').style.display='block'" class="greenbutton" href="javascript:;"><span>Contattami</span></a>
								</div>
							</form>
						</div>
						<div class="contactbox small" style="display:none" id="msgtxt">
							<img alt="" src="/img/str_bg_overlayer_abb_top_sm.gif">
							<div class="contactcont">
									
								<div class="contactText">
									Abbiamo ricevuto la tua richiesta di contatto, <br />ti richiameremo nel giorno e nell'ora da te indicati.
								</div>
							</div>
							<img alt="" src="/img/str_bg_overlayer_abb_bot_sm.gif">
						</div>
						
					</div>
				</div>
			</div>
			<!-- FINE OVERLAY PER CALLMEBACK -->