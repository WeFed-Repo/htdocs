<script type="text/javascript">
	$(document).ready(function() {
		$("#accordion,#accordion2,#accordion3").accordion({
			animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
			heightStyle: "content",
			active: false,
			collapsible: true
		});
	
		
	});
</script>

<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
	</fmt:formatdate></div>
</div>

<div class="riquadro sicurezzaInfo clearfix">
	<h1>Sicurezza youweb</h1>
 	<p><strong>Cosa fa Banco BPM per la tua sicurezza?</strong> Per garantire a tutta la clientela un adeguato livello di sicurezza tramite i servizi online sono state adottate diverse soluzioni:</p>
	
	<div class="context-buttons pull-left" style="margin-left:10px">
			<a href="#"  title="guida alla sicurezza" id="" class="btnGuida" role="button"></a>
	</div>
	<br><br>

	<div id="accordion" class="nosort ui-accordion ui-widget ui-helper-reset" role="tablist">

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Credenziali di sicurezza</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
		 <p>Per accedere ai Servizi You devi utilizzare:</p>
			<ul>
				<li>- il Codice identificativo che ti &egrave; stato assegnato</li>
				<li>- il tuo codice segreto PIN che hai personalizzato (al primo accesso o in un momento successivo)</li>
				<li>- un dispositivo di sicurezza</li>
			</ul>
			<p><strong>Solo tu puoi conoscere queste informazioni, pertanto custodiscile accuratamente!</strong></p>
	</div>


 

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><a href="#">Dispositivo di sicurezza</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
	<p>La maggior parte dei nostri clienti &egrave; stata dotata di <strong>dispositivo di sicurezza in formato Card o portachiavi</strong> (detto anche &quot;Token&quot;), soluzione che, generando codici &quot;usa e getta&quot; (o anche OTP One Time Password), permette di usufruire dell'operativit&agrave; online in massima sicurezza e con la pi&ugrave; ampia libert&agrave; di movimento.<br>
	<strong>Se ne sei sprovvisto puoi farne richiesta</strong> cliccando sull’icona &quot;Il tuo profilo&quot;.</p>

	<p>L'accesso a YouWeb &egrave; inoltre possibile identificandosi mediante un <strong>Certificato digitale di sicurezza. </strong>
	Il certificato digitale pu&ograve; essere paragonato ad una carta di identit&agrave;, un documento rilasciato da una pubblica autorità. Una volta effettuato lo scarico e l'installazione del certificato su un computer potrai effettuare l'accesso in  <strong>modalit&agrave; Easy </strong>, utilizzando soltanto i tuoi codici identificativo e PIN; </p>

	<p>La modalit&agrave; di accesso Easy, tramite certificato digitale, ti permette di  <strong>consultare i tuoi rapporti attivi in YouWeb </strong> e, sotto determinate soglie, di disporre operazioni senza alcun codice dispositivo, altrimenti ti verr&agrave; richiesto un codice &quot;usa e getta&quot; generato dal dispositivo di sicurezza o inviato con un messaggio SMS sul tuo cellulare.</p>
	</div>



	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons ui-state-hover" role="tab" id="ui-id-6" aria-controls="ui-id-7" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><a href="#">Attivit&agrave; di prevenzione</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-7" aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="true" style="display: none;">
	<p>Alcune operazioni dispositive sono soggette a dei <strong>limiti giornalieri e mensili</strong> che potrai personalizzare rivolgendoti alla tua filiale o tramite la funzione <strong>&quot;Pannello Rapporti&quot;</strong> nella sezione Conti e Depositi.</p>

	<p>Allo scopo di <strong>prevenire episodi fraudolenti</strong> potresti essere comunque contattato dalla tua filiale o da un operatore dell'Assistenza dopo aver effettuato alcune disposizioni (ad es. per bonifici inseriti per importi maggiori di Euro 10.000 oppure per verifiche su movimenti ritenuti sospetti). </p>
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons ui-state-hover" role="tab" id="ui-id-8" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><a href="#">Navigazione protetta</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-8" aria-labelledby="ui-id-8" role="tabpanel" aria-hidden="true" style="display: none;">
	<p>I tuoi dati sono trasmessi in modalit&agrave; protetta mediante il <strong>protocollo SSL a 256 bit certificato da VeriSign</strong>, partner che garantisce il pi&ugrave; alto livello di certificazione possibile (cosiddetta &quot;crittografia&quot;).</p>

	<p>Ti trovi in un ambiente sicuro se nell’indirizzo di navigazione &egrave; presente la lettera s (<strong>https://</strong>) e/o vi &egrave un lucchetto a pi&egrave; pagina (nella barra indirizzo del tuo browser).</p>
	</div>

</div>
<br>

<br>
<h1>Come possiamo aiutarti</h1>
<div id="accordion2" class="nosort ui-accordion ui-widget ui-helper-reset" role="tablist">

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-1b" aria-controls="ui-id-1b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Ho smarrito/mi hanno rubato le credenziali di accesso</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-1b" aria-labelledby="ui-id-1b" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>Per accedere ai Servizi You devi utilizzare:</p>
		In caso di furto o smarrimento dei codici di sicurezza ti suggeriamo di seguire i seguenti passi:<br>
			- contattare l’Assistenza Clienti,<br>
			- effettuare una denuncia presso le autorità competenti,<br>
			- recarti in filiale per richiedere nuovi codici di sicurezza.<br>
			A seguito di queste operazioni potrai di nuovo accedere ai Servizi You con i nuovi codici.
	</div>
	
	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-2b" aria-controls="ui-id-2b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Ho smarrito il dispositivo di sicurezza</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2b" aria-labelledby="ui-id-2b" role="tabpanel" aria-hidden="true" style="display: none;">
		In caso di <strong>furto o smarrimento del dispositivo di sicurezza</strong> ti invitiamo a contattare l'Assistenza Clienti e a recarti in filiale per richiedere un nuovo dispositivo di sicurezza.
	</div>


	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-3b" aria-controls="ui-id-3b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Voglio sostituire i miei codici</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-3b" aria-labelledby="ui-id-3b" role="tabpanel" aria-hidden="true" style="display: none;">
		Ti consigliamo di <strong>cambiare periodicamente i tuoi codici </strong> in totale autonomia nel seguente modo: <br>
			- accedendo alla sezione &quot;Servizi per te --> Il tuo profilo&quot; per modificare il codice PIN del servizio YouWeb<br>
			- contattando il numero verde 800 024 024 per modificare il codice PIN del servizio YouCall<br>
			Per la sostituzione completa dei tuoi codici di sicurezza rivolgiti invece alla tua Filiale.
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-4b" aria-controls="ui-id-4b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Voglio bloccare i miei codici</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4b" aria-labelledby="ui-id-4b" role="tabpanel" aria-hidden="true" style="display: none;">
		Puoi bloccare l'accesso al tuo YouWeb in autonomia accedendo alla sezione &quot;Servizi per te --> Il tuo profilo&quot;, quindi selezionando il <strong>&quot;Blocca accesso&quot;</strong>.<br>
			In alternativa puoi chiamare l'Assistenza Clienti al numero <strong>800 024 024</strong> chiedendo all'operatore di bloccare l'accesso alla tua utenza YouWeb.
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-5b" aria-controls="ui-id-5b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Voglio fare una segnalazione</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5b" aria-labelledby="ui-id-5b" role="tabpanel" aria-hidden="true" style="display: none;">
		Per qualsiasi anomalia e inesattezza riscontrata, ti invitiamo a contattare l‘Assistenza clienti ai seguenti recapiti:<br>
			- dall'Italia (con telefono fisso o cellulare) il numero 800 024 024<br>
			- dall'estero al numero +39 045 96 02 800<br>
			- via e-mail all'indirizzo assistenza.clienti@bancobpm.it<br>
			Il servizio telefonico con operatore &egrave; disponibile dal Luned &igrave; al Venerdì dalle 8 alle 22 e Sabato dalle 8 alle 13. Puoi comunque utilizzare il canale e-mail in qualsiasi fascia oraria, gli operatori avranno cura di risponderti nel pi&ugrave; breve tempo possibile e in genere entro 2 giorni lavorativi.
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-6b" aria-controls="ui-id-6b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Il dispositivo non funziona</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6b" aria-labelledby="ui-id-6b" role="tabpanel" aria-hidden="true" style="display: none;">
		Se il dispositivo di sicurezza genera <strong>codici &quot;usa e getta&quot;</strong> (OTP) <strong>che non sono riconosciuti come corretti</strong> dal servizio YouWeb, è necessario contattare l’Assistenza Clienti per procedere con un’operazione di “risincronizzazione”.
		Si tratta di una semplice procedura che permette da remoto di allineare l’orologio interno del dispositivo con quello presente sui sistemi della Banca.<br>
		Al contrario, se il display del tuo dispositivo non visualizza pi&ugrave; alcun codice, &egrave; necessario rivolgersi alla propria filiale per richiederne la sostituzione.
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-6b" aria-controls="ui-id-6b" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Non riconosco un'operazione</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6b" aria-labelledby="ui-id-6b" role="tabpanel" aria-hidden="true" style="display: none;">
		Se tra i movimenti dei tuoi rapporti individui <strong>un'operazione non impartita da te</strong>, ti consigliamo di:
		contattare l’Assistenza Clienti per anticipare tale disconoscimento e/o bloccare la tua utenza, recarti presso i carabinieri per sporgere denuncia verso ignoti, portare copia della denuncia in filiale per richiedere il rimborso dell’operazione fraudolenta.
	</div>

</div>

<br>

<br>
<h1>Migliora la tua sicurezza</h1>
<div id="accordion3" class="nosort ui-accordion ui-widget ui-helper-reset" role="tablist">

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-1c" aria-controls="ui-id-1c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Custodisci con cura le tue credenziali di accesso</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-1c" aria-labelledby="ui-id-1c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				- Custodisci le credenziali in luoghi separati e sicuri e varia periodicamente la password.<br>
			
				- Non utlizzare password facilmente individuabili (numeri di telefono, date di nascita, password utilizzate per altri servizi...).<br>
			
				- Non utilizzare e non conservare il dispositivo di sicurezza a temperature inferiori a 15° e superiori a 60° e non danneggiarlo.<br>
			
				- L'eventuale cointestatario dei tuoi conti deve dotarsi di propri codici personali aprendo un distinto contratto Servizi You.
			</p>
	</div>
	
	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-2c" aria-controls="ui-id-2c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Aggiorna il tuo computer</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2c" aria-labelledby="ui-id-2c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				Ti consigliamo di  aggiornare costantemente il tuo PC sia per quanto riguarda il sistema operativo che in relazione ai programmi di protezione (antivirus, firewall, filtri di posta indesiderata e antispam, antimalware).<br>Una buona manutenzione e un costante aggiornamento limitano il rischio di frodi e permettono una navigazione più ottimizzata all'interno dei Servizi You.
			</p>
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-3c" aria-controls="ui-id-3c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Controlla gli accessi</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-3c" aria-labelledby="ui-id-3c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				Accedi al servizio YouWeb solo digitando per intero l’indirizzo www.bancobpmspa.com&nbsp;senza accedere dalla funzionalità "siti preferiti" del tuo browser. Evita inoltre di utlizzare le funzionalità di memorizzazione automatica delle credenziali presenti nei browser oppure i software creati a tale scopo e controlla gli accessi effettuati con la tua utenza nella sezione Servizi per te &gt; Il tuo profilo.
			</p>
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-4c" aria-controls="ui-id-4c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Fai attenzione alle e-mail</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4c" aria-labelledby="ui-id-4c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				Presta attenzione alle mail sospette e cancella quelle che contengono richieste di verifica, modifica, sblocco dei tuoi codici personali. Se riscontri anomalie rispetto alle abituali modalità di richiesta di inserimento dei dati personali, contatta l'Assistenza Clienti o la tua Filiale.
			</p>
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-5c" aria-controls="ui-id-5c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Controlla i tuoi movimenti</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5c" aria-labelledby="ui-id-5c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				Controlla i movimenti in addebito sul tuo conto corrente e segnala eventuali operazioni anomale contattando l’Assistenza Clienti o la tua Filiale.<br>Ti consigliamo di accedere alla sezione Alert per impostare 
				messaggi di allarme via sms o email a fronte di modifiche ai tuoi rapporti (es.movimenti di conto corrente o di carte).
			</p>
	</div>

	<h3 class="ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-6c" aria-controls="ui-id-6c" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
	<a href="#">Segui le info sulla sicurezza</a></h3>
	<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6c" aria-labelledby="ui-id-6c" role="tabpanel" aria-hidden="true" style="display: none;">
		<p>
				Consulta la Sezione Sicurezza che sarà periodicamente aggiornata con tutte le informazioni ed i consigli per un uso corretto e sicuro dei Servizi You e delle sue funzioni. Segui le comunicazioni e le news pubblicate in YouWeb per essere costantemente aggiornato sul tema sicurezza e ricordati che eventuali messaggi forniti sull’argomento tramite altre mezzi (ad es. email) non sono da ritenere affidabili.
			</p>
	</div>

</div>



</div>






</div>

	