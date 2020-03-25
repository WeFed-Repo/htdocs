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
				setError('estrattoRadio','Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude');
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<form>
		<h2>Conto Webank include</h2>
		<div class="aolblock">
			<h3>Conto corrente e deposito di risparmio</h3>
			<p>
				L'accredito degli interessi avviene trimestralmente. Se vuoi puoi modificarne la frequenza dopo l'apertura del conto chiamando il Customer Care.
			</p>
			<h3>Programma sicurezza</h3>
			<p>Sms gratuiti per ogni disposizione</p>
			
		</div>	
		<div class="aolblock">	
			<h3>Estratto conto e contabili</h3>
			<p>
				L'estratto conto verr&agrave; prodotto trimestralmente, Se vuoi, puoi modificarne la frequenza dopo l'apertura del conto chiamando il Customer Care.
			</p>
			<p>
				Scegli come ricevere l'estratto conto e le contabili del tuo conto.
			</p>
			<div class="fieldblock" id="estrattoRadio">
				<fieldset class="lastrow" style="width: 195px">
					<label><input type="radio" name="estratto"><span class="optiontext">online<br>servizio gratuito</span></label>
				</fieldset>
				<fieldset class="lastrow">
					<label><input type="radio" name="estratto"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35&euro; per ciascun documento</span></label>
				</fieldset>
				<span class="errortext"></span>
			</div>
		</div>
		<!-- ACCORDION DEPOSITO TITOLI -->
		<div class="aolblock bancarizza">
			<h3>Deposito titoli e servizi di investimento</h3>
			<p>
				Ti permette di fare operazioni di tarding e di investire in Fondi e Sicav.
			</p>
			<p>Stai aprendo conto Webank con il deposito: <strong>xxxxxxxxxxxx</strong></p>
			
			<h4>caratteristiche</h4>
			<div class="outputblock">
				<fieldset style="width: 160px;" class="output">
					<span class="label">Regime fiscale</span>
					<span class="output">amministrato</span>
				</fieldset>
				<fieldset style="width: 160px;" class="output">
					<span class="label">Tipo di commissioni</span>
					<span class="output">profilo fisso</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="label">Estratti conti e contabili</span>
					<span class="output">online, servizio gratuito</span>
				</fieldset>
			</div>
			<h4>servizi e piattaforme attive</h4>
			<div class="outputblock">
				<fieldset style="width: 320px;" class="output">
					<span class="output">Prestito titoli</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="output">Piatatforma T3 open</span>
				</fieldset>
				<fieldset style="width: 320px;" class="output">
					<span class="output">Short selling overnight</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="output">Visual trader</span>
				</fieldset>
				<fieldset style="width: 540px;" class="output">
					<span class="output">Long overnight</span>
				</fieldset>
				<fieldset style="width: 540px;" class="output">
					<span class="output">Derivati idem</span>
				</fieldset>
			</div>
			<h4>informative e strumenti di analisi attivi (un intestatario)</h4>
			<div class="outputblock">
				<fieldset style="width: 320px;" class="output">
					<span class="output">Quotazioni FUTURES Euronext LIFFE Book a 5 livelli</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="output">Analisi tecnica TraderMade Italia PLUS</span>
				</fieldset>
				<fieldset style="width: 320px;" class="output">
					<span class="output">Quotazioni FUTURES USA eCBOT</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="output">Analisi tecnica TraderMAde USA</span>
				</fieldset>
				<fieldset style="width: 540px;" class="output">
					<span class="output">Quotazioni Nasdaq</span>
				</fieldset>
			</div>
			<h4>informative e strumenti di analisi attivi (pi&ugrave; intestatari)</h4>
			<fieldset class="output" style="width: 320px;">
					<span class="label">&nbsp; </span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="label">Attivato da:</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES Euronext LIFFE Book a 5 livelli</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					
					<span class="output">Mario Rossi</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES USA eCBOT</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Bianco</span>
				</fieldset>
				<fieldset class="output lastrow" style="width: 320px;">
					<span class="output">Quotazioni Nasdaq</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Rossi</span>
				</fieldset>
				<fieldset class="output lastrow" style="width: 320px;">
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Bianco</span>
				</fieldset>
				</fieldset>
				<fieldset class="output lastrow" style="width: 320px;">
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Rossi</span>
				</fieldset>
			
			<h4>utilizzo del deposito titoli</h4>
			<p>
				Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude - Babbada ipsum sit consectetur amet dolo 
				Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude - Babbada ipsum sit consectetur amet dolo
			</p>
			<div id="esigenze" class="fieldblock">
				<fieldset style="width: 195px;" class="lastrow">
					<label><input type="radio" name="esigenze"><span class="optiontext">per esigenze di investimento</span></label>
				</fieldset>
				<fieldset class="lastrow">
					<label><input type="radio" name="esigenze"><span class="optiontext">per attivit&agrave; di trading</span></label>
				</fieldset>
				<span class="errortext"></span>
			</div>
			
	
		</div>		
		<!-- FINE ACCORDION DEPOSITO TITOLI -->
		
		
		<!-- BLOCCO SELEZIONE PRODOTTI -->
		<div class="productPush bancarizza">
			<span class="pushTitolo">
				
				<img src="/img/tt_aggiungi_banco.gif" alt="">
			</span>
			<div class="product bancomat">
				<fieldset>
					<label><input type="checkbox"><span class="large">Il bancomat</span></label>
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
			
		</div>
			
		<!-- FINE BLOCCO SELEZIONE PRODOTTI -->
					
		<div class="aolblock">
			<h3>Informativa precontrattuale</h3>
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
		</div>
		<div class="filettobutton">
			<a class="greybutton" href="/connect.php?page=str_aol_pub_wb.php&amp;tpl=tpl_pub_aol_step_3.php" title="indietro"><span>indietro</span></a>
			<a class="greenbutton" href="javascript:;" title="avanti" onclick="javascript:esempioErrori();"><span>avanti</span></a>
			
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
						<span>In pi&agrave; per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
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
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_bisogno_aiuto.gif"  alt="Hai bisogno di aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 9.00 - 20.00 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
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