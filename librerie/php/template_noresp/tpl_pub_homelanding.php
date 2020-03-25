<div id="allcontent">	
<!-- COLLEGAMENTI A FILE ESTERNI -->
<script type="text/javascript" src="/js/pub_homelanding.js"></script>
<link rel="stylesheet" href="/css/pub_homelanding.css"></link>
<!-- FINE COLLEGAMENTI A FILE ESTERNI -->

<!-- VARI TIPI DI OVERLAYER -->
	<!-- SIMULATORE RENDIMENTO -->
	<div id="simRendimento" class="overlayer small" style="display:none">
	<div class="overlayertitle"><a class="chiudi" onclick="closePopOverLayer('simRendimento');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
		<div id="calcinv">
			<form autocomplete="off" action="javascript:;">
			<div id="calcinv_console">
				<a href="javascript:;" onclick="plusMin(this)" class="minus disabled" id="plusminmin" title="Lorem ipsum">&nbsp;</a>
				<input type="" name="" onchange="simRendiCalcola();" onkeyup="checkIntero(this); checkLimit(this); simRendiCalcola();" id="simRendiValore" maxlength="7">
				<a href="javascript:;" class="plus" onclick="plusMin(this)"id="plusminplus" title="Lorem ipsum">&nbsp;</a>
			</div>
			</form>
			<div class="contbox">
				<div class="invbox"> 
					<div class="lordo">
						<span class="valore" id="rendiLordo3">&nbsp;</span>
						<span>lordo annuo</span>
					</div>
					<div class="netto">
						<span class="valore" id="rendiNetto3">&nbsp;</span>
						<span>interessi netti</span>
					</div>
				</div>
				<div class="invbox">
					<div class="lordo">
						<span class="valore" id="rendiLordo6">&nbsp;</span>
						<span>lordo annuo</span>
					</div>
					<div class="netto">
						<span class="valore" id="rendiNetto6">&nbsp;</span>
						<span>interessi netti</span>
					</div>
				</div>
				<div class="invbox">
					<div class="lordo">
						<span class="valore" id="rendiLordo12">&nbsp;</span>
						<span>lordo annuo</span>
					</div>
					<div class="netto">
						<span class="valore" id="rendiNetto12">&nbsp;</span>
						<span>interessi netti</span>
					</div>
				</div>
			</div>
		</div>
		<div class="notefoot">
			<div class="filetto">&nbsp;</div>
			<p>Gli importi del calcolatore sono indicati in via esemplificativa. Gli importi lordi potrebbero variare a seguito di modifiche normative sulla tassazione fiscale o all'entrata in vigore di regolamenti attuativi. </p>
		</div>
	</div>
</div>
<!-- FINE SIMULATORE RENDIMENTO -->
<!-- SIMULATORE RISPARMIO BOLLI -->
<div id="simBolli" class="overlayer small" style="display:none">
<div class="overlayertitle"><a class="chiudi" onclick="closePopOverLayer('simBolli');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
		<div id="simulatoreBollo">
			<form autocomplete="off" action="javascript:;">
				<a href="javascript:;" id="simulaBolloMeno" onclick="simulaBolloSet('-');" class="disabled" title="Diminuisci di 1000 &euro;">&nbsp;</a>
				<input type="text" maxlength="15" onkeyup = "simulaBollo();" value="10000" id="simulaBolloValore"></input>
				<a href="javascript:;" id="simulaBolloPiu" onclick="simulaBolloSet('+');" title="Aumenta di 1000 &euro;">&nbsp;</a>
			</form>
			<div id="simulaBolloMid">
			<!--span id="v_2011">17,10</span-->
			<span id="v_2012">34,20</span>
			<span id="v_2013">34,20</span>
			</div>
			<div id="simulaBolloErrore" style="display:none;">
				<p>Per importi inferiori a 10.000 euro non &egrave; possibile applicare la promozione sui bolli del deposito titoli</p>

			</div>
			<div id="simulaBolloRes" style="display:block;">
				<span id="v_total">68,40 &euro;</span>
			</div>
		</div>
		<div class="notefoot">
			<div class="filetto">&nbsp;</div>
			<p>Il rimborso &egrave; calcolato in base a quanto indicato dalla normativa in vigore. Tale importo potrebbe variare in seguito a modifiche normative o all'entrata in vigore di regolamenti attuativi. </p>
		</div>
	</div>
</div>				
<!-- FINE SIMULATORE RISPARMIO BOLLI -->
<!-- OVERLAYER CONDIZIONI-->
<div id="olCondizioni" class="overlayer large" style="display:none">
<div class="overlayertitle"><a class="chiudi" onclick="closePrintOverlay('olCondizioni');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
		<!-- Corpo overlay -->
		<div class="olLeft">
			<div class="titimg">
				<h3 class="title">Tutte le condizioni</h3>
			</div>
			<p>Per avere il<strong>tasso promozionale del 4,50%</strong> lordo annuo:</strong></p>
			<ul class="flaglist">
				<li><strong>Richiedi l'apertura</strong> del <strong>conto</strong> corrente entro il <strong>29/02/12</strong>.</li>
				<li><strong>Perfeziona l'apertura del conto</strong> entro il <strong>30/03/12</strong>, invia tutta la documentazione firmata.</li>
				<li><strong>Attiva</strong> le linee vincolate a 3,6 e 12 mesi entro il <strong>15/04/12</strong></li>
			</ul>
			<p>Per avere <strong>i bolli gratis</strong>  sul <strong>deposito titoli titoli fino al 2013 (max 1.200 Euro per anno):</strong></p>
			<ul class="flaglist">
				<li><strong>Richiedi l'apertura</strong> del <strong>conto</strong> entro il <strong>29/02/12</strong>.</li>
				<li><strong>Richiedi l'apertura del deposito titoli</strong> entro il <strong>30/03/12</strong>.</li>
				<li><strong>Perfeziona l'apertura del conto</strong> e del <strong>deposito titoli</strong> entro il <strong>30/03/12</strong>.</li>
				<li>Attiva il <strong>Portafoglio Extra</strong> (servizio di Prestito Titoli di WeBank) entro il <strong>15/04/2012</strong>.</li>
			</ul>
			<p>L'imposta verr&agrave; rimborsata nel periodo di riferimento se, il deposito titoli avr&agrave; un controvalore di Titoli 
			e Fondi pari ad almeno 10.000 Euro (Giacenza complessiva) e avr&agrave; attivo il Portafoglio Extra 
			(il servizio prestito titoli di WeBank) durante il Periodo di Riferimento.</p>
			<div class="notefoot nowhite">
				<p>Consulta tutti i dettagli sul <a href="/doc/REGOLAMENTO_CONGELA_BOLLO2.pdf" target="_blank" class="notefootlink">Regolamento</a>, i Fogli Informativi e l'Informativa Precontrattuale.</p>
			</div>
			<br class="clear">
			<div class="printconsole">
				<div class="btnstampa">
					 <a href="javascript: window.print();">Stampa</a>
				</div>
			</div>
		</div>
		<div class="olRight">
			<div class="titimg">
				<h3 class="title">GUARDA IL VIDEO</h3>
			</div>
			<div id="videoTutorial" class="videoCont"><embed src="https://media.webank.it/vod/landing_video_tutorial.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
			<script defer="defer" type="text/javascript">		  
				var flashobject = new SWFObject("/swf/videoplayer.swf", "tutorial", "382", "241", "9", "#000000");
				flashobject.addParam("quality", "high");		
				flashobject.addParam("wmode", "opaque");
				flashobject.addParam("allowfullscreen","true");
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/landing_video_tutorial.flv");
				flashobject.write("videoTutorial");
			</script>
		</div>
		<!-- Fine corpo overlay -->
	</div>
</div>		
<!-- FINE OVERLAYER CONDIZIONI -->

<!-- OVERLAYER VANTAGGI-->
<div id="olVantaggi" class="overlayer" style="display:none">
<div class="overlayertitle"><a class="chiudi" onclick="closePrintOverlay('olVantaggi');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
	<!-- Corpo overlay -->
		<div class="titimg">
			<h3 class="title">CONTO CORRENTE E DEPOSITO DI RISPARMIO</h3>
		</div>
		<ul class="flaglist">
			<li><strong>Nessun canone</strong>, paghi solo l'imposta di bollo;</li>
			<li><strong>Operazioni illimitate</strong> e gratuite;</li>
			<li><strong>Bancomat, carte di credito</strong> e assegni <strong>gratuiti</strong>;</li>
			<li>Il deposito di risparmio offre <strong>pi&ugrave; rendimento</strong> grazie alle <strong>linee vincolate</strong> a 3/6/12 mesi</li>
			<li><strong>Puoi svincolare</strong> le somme, in qualunque momento, <strong>senza penali</strong></li>
		</ul>
		<div class="titimg">
			<h3 class="title">TRADING</h3>
		</div>
		<ul class="flaglist">
			<li><strong>Piattaforme innovative</strong> ed evolute per un trading alla massima potenza;</li>
			<li>Oltre <strong>30.000 titoli</strong> negoziabili con un clic nei <strong>mercati di tutto il mondo;</strong></li>
			<li><strong>Cross Selling</strong> e marginazione;</li>
			<li><strong>Profilo commissionale su misura</strong>: scegli fisso o variabile;</li>
			<li>Supporto dai nostri specialisti del <strong>Trading Team.</strong></li>
		</ul>
		<br class="clear">
		<div class="printconsole">
			<div class="btnstampa">
				 <a href="javascript: window.print();">Stampa</a>
			</div>
		</div>
	<!-- Fine corpo overlay -->
	</div>
</div>		
<!-- FINE OVERLAYER VANTAGGI -->

<!-- OVERLAYER PERCHE WEBANK -->
<div id="olPerchewebank" class="overlayer" style="display:none">
<div class="overlayertitle"><a class="chiudi" onclick="closePrintOverlay('olPerchewebank');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
	<!-- Corpo overlay -->
		<div class="titimg">
			<h3 class="title">Perch&eacute; Webank</h3>
			<h4>Hai tanti buoni motivi per sceglierci:</h4>
		</div>
		<ul class="flaglist">
			<li><strong>Ti semplifica la vita</strong>, &egrave; sempre disponibile e <strong>non fai code</strong>: ci raggiungi su internet, da pc, telefono, tablet o smartphone, ovunque ti trovi; </li>
			<li><strong>Innovazione</strong> e <strong>qualit&agrave;</strong> fanno parte del nostro dna: primo premio <strong>Miglior Deposito</strong> - Osservatorio Finanziario; primo premio per l'innovazione tecnologica - <strong>Interactive</strong> Key Award; </li>
			<li>Siamo una <strong>Banca partecipativa:</strong> sei il nostro <strong>miglior product manager</strong>, i nostri prodotti nascono anche dalle tue idee;</li>
			<li>Abbiamo prodotti semplici, <strong>non abbiamo asterischi</strong>; </li>
			<li>Sei completamente <strong>autonomo</strong> nella gestione del tuo conto: <strong>il nostro sito</strong> &egrave; il <strong>tuo foglio delle istruzioni</strong> e hai a disposizione 441 funzioni per la tua operativit&agrave;; </li>
			<li>Il <strong>tuo tempo</strong> &egrave; il nostro <strong>miglior prodotto di risparmio</strong>; </li>
			<li>Non ci posizioniamo, <strong>prendiamo posizione</strong> verso quello che ti interessa davvero: <br/>
<strong>il tuo interesse</strong>.
</li>
		</ul>
		<p>
		...altrimenti chi ci ha gi&agrave; scelto avrebbe torto!
		</p>
		<br class="clear">
		<div class="printconsole">
			<div class="btnstampa">
				 <a href="javascript: window.print();">Stampa</a>
			</div>
		</div>
	<!-- Fine corpo overlay -->
	</div>
</div>		
<!-- FINE OVERLAYER PERCHE WEBANK -->

<!-- OVERLAYER VIDEO TUTORIAL -->
<div id="olTutorial" class="overlayer small" style="display:none">
<div class="overlayertitle"><a class="chiudi" onclick="closePrintOverlay('olTutorial');" href="javascript:;">Chiudi</a></div>
	<div class="overlayerbody">
	<!-- Corpo overlay -->
	<div id="videoSpot" class="videoCont"><embed src="https://media.webank.it/vod/landing_video_spot.flv" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed></div>
	<script defer="defer" type="text/javascript">		  
			var flashobject = new SWFObject("/swf/videoplayer.swf", "tutorial", "382", "241", "9", "#000000");
			flashobject.addParam("quality", "high");		
			flashobject.addParam("wmode", "opaque");
			flashobject.addParam("allowfullscreen","true");
			flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/landing_video_spot.flv");
			flashobject.write("videoSpot");
		</script>
	<!-- Fine corpo overlay -->
	</div>
</div>		
<!-- FINE OVERLAYER VIDEO TUTORIAL -->

<!-- FINE VARI OVERLAYER -->
<!-- CONTENUTO PAGINA -->
	<h2><img src="/img/homelanding_title.jpg" alt="Non &egrave; da tutti fare due cose eccezionali insieme"></h2>
	<!--p class="promoline">
	Eccezionale &egrave;: avere, contemporaneamente e in un'<strong>unica soluzione</strong>, un <strong>tasso</strong> senza paragoni, valido per tutte le durate. E insieme, i <strong>bolli gratuiti</strong> sul deposito titoli fino a tutto il 2013. <br />Scegli liberamente in base alle tue esigenze d'investimento.
	</p-->
	<!-- immagine promo mappata-->
	<img src="/img/homelanding_promomap.jpg" class="promocore" usemap="#promocoremap">
	<map id="promocoremap" name="promocoremap">
		<area shape="rect" coords="143,193,282,218" href="javascript:;" alt="Calcola il rendimento" title="Calcola il rendimento" onclick="simRendiOpen();"/>
		<area shape="rect" coords="461,193,584,218" href="javascript:;" alt="Calcola il risparmio" title="Calcola il risparmio" onclick="simBolliOpen();"/>
		<!-- LINK DA CONTROLLARE PER OBS_REF -->
		<area shape="rect" coords="400,325,650,258" href="/webankpub/wb/2l/do/aol/wbwsPUaol0.do?tabId=nav_pub_wb_conti_nw&OBS_KEY=pro_wbn_apri_conto_webank&OBS_REF=hp_Link2" alt="Calcola il risparmio" title="Apri il conto"/>
		<!-- / LINK DA CONTROLLARE PER OBS_REF -->
	</map>
	<!-- fine immagine promo mappata-->
	<div id="homelandingConsole">
		<!-- Bottoni con position absolute per facilitare inserimento chat -->
		<a href="javascript:;" id="hlcCondizioni" class="hlcbtn" onclick="openPrintOverlay('olCondizioni')">&nbsp;</a>
		<a href="javascript:;" id="hlcVantaggi" class="hlcbtn" onclick="openPrintOverlay('olVantaggi')">&nbsp;</a>
		<a href="javascript:;" id="hlcPerchewebank" class="hlcbtn" onclick="openPrintOverlay('olPerchewebank')">&nbsp;</a>
		<a href="javascript:;" id="hlcGuarda" class="hlcbtn" onclick="openPopOverLayer('olTutorial');">&nbsp;</a>
		<div id="c2mToolbar"><!-- PER VERIFICHE DI POSIZIONAMENTO -- <img src="https://z1.vivocha.com/customers/webank/img/toolbar/str_pulsante_chat_aol.jpg" style="opacity: 0.5"> --></div>
		<!-- fine bottoni -->
	</div>
	<p class="note">Messaggio pubblicitario. La promozione &egrave; riservata ai nuovi clienti del Gruppo Bipiemme che entro il <strong>29/02/2012</strong> richiedono online l'apertura dei rapporti, perfezionandola entro il <strong>30/03/2012</strong>.<br />
- Per beneficiare del tasso al 4,50% lordo annuo sulle somme depositate a 3, 6 e 12 mesi &egrave; necessario attivare una o pi&ugrave; 
linee vincolate entro il 15 aprile 2012. Imposte di bollo dovute come da legge.<br /> 
- Per beneficiare del rimborso integrale del bollo sul deposito titoli (max 1.200 &euro; per anno) fino a tutto il 2013 occorre depositare 
Titoli e Fondi per un controvalore pari ad almeno 10.000 Euro e il Portafoglio Extra (<a onclick="javascript:window.open('/webankpub/wb/cstPopup/jsp/wb/jsp/popUpPrestitoTit.do?BV_UseBVCookie=Yes','DettaglioPrestitoExtra','width=610,height=445,scrollbars=yes');" href="javascript:;">il servizio prestito titoli</a>
																												
																												
																												titoli a favore di WeBank) 
entro il 15/04/2012. A ogni  Periodo di Riferimento di calcolo dell'Imposta, inoltre, occorre avere sul deposito titoli un 
controvalore di 10.000 euro e il prestito titoli attivo. <br />
Prima dell'adesione, consulta tutti i dettagli sul <a href="/doc/REGOLAMENTO_CONGELA_BOLLO2.pdf" class="notelink">Regolamento</a>, i Fogli Informativi e l'Informativa Precontrattuale.</p>
<!-- FINE CONTENUTO PAGINA -->
<div id="fbLink">
	<img src="/img/landing_link_facebook.gif" usemap="#fblinkmap"/>
	<map id="fblinkmap" name="fblinkmap">
	<area shape="poly" coords="113,0,0,113,112,113," href="https://www.facebook.com/dialog/pagetab?app_id=259865794069141&next=http://fb.cayenne-digital.it/eccezionale/" alt="Tu sei eccezionale?" title="Tu sei eccezionale?"  target="_blank" />
	</map>
</div>
</div>	