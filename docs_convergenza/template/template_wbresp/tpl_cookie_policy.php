<!-- AUTOMAZIONI -->
<script type="text/javascript">
// Variabili con i valori dei campi
var consent_mktg, consent_glassbox; 
$(function(){

    // Inizializzazione dei campi
    consent_mktg = $("input[name=consent_mktg]");
    consent_glassbox = $("input[name=consent_glassbox]");

    // Funzione accetta/rifiuta tutto
    consentCookies = function(par){
        consent_mktg.attr("checked",false);
        consent_glassbox.attr("checked",false);

        $("#consent_mktg_"+par).trigger("click");
        $("#consent_glassbox_"+par).trigger("click");
    }

    // Rifiuta tutto
    $("#cookieRifiuta").on("click",function(){
        consentCookies("no");
    });

    // Accetta tutto
    $("#cookieAccetta").on("click",function(){
        consentCookies("yes");
    });

    // Salva le impostazioni
    $(".cookieSalva").on("click",function(){
        var c_mktg = consent_mktg.filter(":checked").val(),
            c_glassbox = consent_glassbox.filter(":checked").val();

        if (typeof ckfun !== "undefined") {
            ckfun.write("consent_mktg", (c_mktg==="yes").toString());
            ckfun.write("consent_glassbox", (c_glassbox==="yes").toString());
            ckfun.write("BPM_TRACK", (c_glassbox==="yes")? "S" : "N");

            // Scatena, se possibile, gli eventi GTM
            if (typeof dataLayer !== "undefined") {
                if (c_mktg==="yes") dataLayer.push({'event': 'consent_mktg'});
                if (c_glassbox==="yes") dataLayer.push({'event': 'consent_glassbox'});
            }
        }    

        // Pagina di reindirizzamento a valle del salvataggio
        location.href = "www.webank.it";
        
    });

});
</script>

<!-- FINE AUTOMAZIONI -->
<div class="sectionTitle">
	<div class="container">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-sm-6 col-xs-6">
				<h1>Cookie policy</h1>
			</div>
			<div class="col-sm-6 col-xs-6">
				<a href="#" class="btn-white btn-arrow">Apri conto <span class="hidden-xs">Webank</span></a>
			</div>
		</div>
	</div>
	<!-- /container -->
</div>
<div class="mainContent">
    <div class="container">
	    
    	<div class="row rowArea1">
    		<!-- inizio colonna menu sinistra -->
            <!-- colonna sinistra -->
            <div class="col-lg-2 col-md-12 col-sm-12">
                <ul class="submenu">
                            <li class="current" ><a href="#" class="selected">Cookie policy</a></li>
                </ul>
            </div>
            <!-- /colonna sinistra -->

    		<!-- fine colonna menu sinistra -->
    		
			<!-- inizio colonna centrale -->
			
				<!-- colonna centrale -->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div id="s1">
                        <div class="row">
                            <div class="col-md-12">
                                
                                
                                <div class="bcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
                                    <span property="itemListElement" typeof="ListItem"> <a property="item" typeof="WebPage" href="#">
                                    <span property="name">Home</span></a>
                                    <meta property="position" content="1"> </span>
                                    <span class="symb">&gt;</span>
                                    <span property="itemListElement" typeof="ListItem"> <a property="item" typeof="WebPage" href="#">
                                    <span property="name">Privacy</span></a>
                                    <meta property="position" content="2"> </span>
                                    <span class="symb">&gt;</span>
                                    <span class="lastleaf">Cookie policy</span>
                                </div>
                                <div class="basic-content content simple-format">
                                        <section>
                                            <h2>Cookie policy</h2>
                                            <p>Utilizziamo cookie e tecnologie simili, anche di terze parti autorizzate, per offrirti una migliore esperienza d'uso e navigazione del sito cercando di mettere a disposizione i contenuti realizzati secondo i tuoi interessi, preferenze, percorsi di navigazione . Da questa pagina puoi approfondire tutte le tipologie di cookies che utilizziamo, esprimere le tue preferenze di consenso e modificarle in qualsiasi momento.</p>
                                            <div class="btn-multi">
                                                <button class="btn-whlit" id="cookieRifiuta">Rifiuta tutto</button>
                                                <button class="btn-grlit" id="cookieAccetta">Accetta tutto</button>
                                                <button class="btn-grlit cookieSalva">Salva le impostazioni</button>
                                            </div>
                                        </section>
                                        <section>
                                            <h3>Cookie che non richiedono il consenso dell'utente</h3>
                                            <p><strong>Cookie tecnici</strong><br>
                                            I cookie tecnici possono essere di due tipi:</p>
                                            <ul class="normal-format">
                                                <li><strong>Cookie "di navigazione" o "di sessione"</strong>: non vengono memorizzati in modo persistente sul computer dell'utente e svaniscono con la chiusura del browser. Vengono utilizzati unicamente per la trasmissione di identificativi di sessione, necessari per consentire l'esplorazione sicura ed efficiente del sito, evitando il ricorso ad altre tecniche informatiche pi&ugrave; invasive per gli utenti, e non consentono l'acquisizione di dati personali identificativi dell'utente;</li>
                                                <li><strong>Cookie "di funzionalit&agrave;"</strong>: adattano la presentazione del sito alle preferenze di visualizzazione del computer dell'utente (ad esempio la lingua, la risoluzione dello schermo, il sistema operativo utilizzato, ecc.).</li>
                                            </ul>
                                            <p>Per l'installazione dei cookie tecnici non &egrave; necessario il consenso dell'utente.</p>
                                            <p>Rientrano tra i cookie tecnici anche i cookie "analytics" o "di monitoraggio" (Google Analytics)</p>
                                            <p>Questo sito si avvale del servizio Google Analytics della Societ&agrave; Google Inc. (di seguito Google) per la generazione di statistiche sull'utilizzo del portale web, senza fornire informazioni personali sui singoli utenti.<br>Per consultare l'informativa privacy della Societ&agrave; Google, relativa al servizio Google Analytics, si prega di visitare il sito Internet <a href="http://www.google.com/analytics/terms/it.html" target="_blank" class="break-word">http://www.google.com/analytics/terms/it.html</a></p>
                                            <p>Per conoscere le norme sulla privacy di Google, si invita a visitare il sito Internet <a href="http://www.google.com/intl/it/policies/privacy/" target="_blank" class="break-word">http://www.google.com/intl/it/policies/privacy/</a></p>
                                            <p>Utilizzando il presente sito web si acconsente al trattamento dei propri dati da parte di Google secondo quanto riportato nella relativa informativa.</p>
                                        </section>

                                        <section>
                                            <h3>Cookie che richiedono il consenso dell'utente</h3>
                                            
                                            <h4>Cookie "di profilazione"</h4>
                                            <p>Tali cookie permettono di tracciare un profilo degli utenti raccogliendo informazioni sulle loro preferenze di navigazione, per poi inviare contenuti personalizzati (banner promozionali e/o offerte dedicate).<br>Per i clienti che accedono all'area internet banking mediante l'uso dei codici personali di identificazione, le informazioni ricavate dai cookie potranno essere aggregate a quelle che la Banca gi&agrave; detiene e – sulla base dei consensi forniti – utilizzate anche per integrarne il profilo personale.<br>Per l'installazione dei cookie di profilazione &egrave; richiesto il consenso dell'utente.</p>
                                            
                                            <section>
                                                <h4>Cookie gestiti direttamente dal titolare:</h4>
                                                <p>
                                                <strong>GLASSBOX</strong><br>
                                                L'installazione &egrave; finalizzata alla raccolta di informazioni sulle preferenze di navigazione e all'invio di comunicazioni personalizzate e/o offerte commerciali, sulla base degli interessi manifestati attraverso la navigazione in internet.
                                                </p>
                                                
                                                <!-- CONSENSO -->
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" name="consent_glassbox" id="consent_glassbox_yes" value="yes">
                                                            <label for="consent_glassbox_yes">Accetto</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" name="consent_glassbox" id="consent_glassbox_no" value="no" checked>
                                                            <label for="consent_glassbox_no">Non accetto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FINE CONSENSO -->
                                            </section>

                                            <section>
                                                <p><strong>Cookie gestiti da terze parti:</strong></p>
                                                <p>Su questo sito sono installati anche cookie rilasciati e gestiti da “terze parti” che, tramite tali cookie, possono raccogliere informazioni dai terminali di navigazione che visitano il sito.<br>Le principali categorie di cookie gestiti da terze parti ed installati su questo sito sono:</p>
                                                <ul class="normal-format">
                                                    <li>Cookie di profilazione pubblicitaria: utilizzati per erogare pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione in internet.</li>
                                                    <li>Cookie di retargeting: utilizzati per l'invio di pubblicit&agrave; a soggetti che hanno precedentemente visitato questo sito.</li>
                                                    <li>Cookie di social network: utilizzati per la condivisione di contenuti sui social network.</li>
                                                 </ul>
                                                <p>Si elencano i cookie rilasciati da terze parti e i link che rimandano alle privacy policy di tali soggetti:</p>
                                                <p><strong>Sos Tariffe</strong><br><a href="https://www.sostariffe.it/info/policy-cookie" target="_blank" class="break-word">https://www.sostariffe.it/info/policy-cookie</a></p>
                                                <p><strong>Adform</strong><br>L'installazione &egrave; finalizzata all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet, alla gestione delle statistiche di navigazione, alla personalizzazione dei contenuti, all'ottimizzazione della navigazione, alla visualizzazione di comunicazioni personalizzate e maggiormente appropriate; tale personalizzazione avviene anche sulla base del comportamento di navigazione dell'utente su siti di terze parti con cui AdForm ha stipulato accordi per l'installazione del proprio cookie.<br>I dati di navigazione ricavati da AdForm anche su siti di terze parti potranno essere comunicati alla Banca e – per i clienti che accedono all'area internet banking mediante l'uso dei codici personali di identificazione – le informazioni ricavate dal cookie potranno essere aggregate a quelle che la Banca gi&agrave; detiene e utilizzate anche per integrarne il profilo personale.<br><a href="https://site.adform.com/privacy-center/website-privacy/cookie-policy/" target="_blank" class="break-word">https://site.adform.com/privacy-center/website-privacy/cookie-policy/</a></p>
                                                <p><strong>Taboola</strong><br>L'installazione &egrave; finalizzata all' ottimizzazione della navigazione, migliorando la qualit&agrave; e la funzionalit&agrave; del sito web, alla modifica/cancellazione di contenuti e servizi esistenti e/o ad altri scopi interni e statistici. L'installazione &egrave; finalizzata altres&igrave; all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet anche su siti di terze parti.<br><a href="https://www.taboola.com/privacy-policy#user-choices-and-optout" target="_blank" class="break-word">https://www.taboola.com/privacy-policy#user-choices-and-optout</a></p>
                                                <p><strong>Payclick</strong><br>L'installazione &egrave; finalizzata all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione sul sito web al fine di inviare offerte personalizzate su altri prodotti e/o servizi.<br><a href="https://payclick.it/en/privacy" target="_blank">https://payclick.it/en/privacy</a></p>
                                                <p><strong>Ligatus</strong><br>L'installazione &egrave; finalizzata all' ottimizzazione della navigazione, migliorando la qualit&agrave; e la funzionalit&agrave; del sito web, alla modifica/cancellazione di contenuti e servizi esistenti e/o ad altri scopi interni e statistici. L'installazione &egrave; finalizzata altres&igrave; all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet anche su siti di terze parti.<br><a href="https://www.ligatus.com/it/privacy-policy" target="_blank" class="break-word">https://www.ligatus.com/it/privacy-policy</a></p>
                                                <p><strong>Bing</strong><br>L'installazione &egrave; finalizzata all'ottimizzazione della navigazione, all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet anche su siti di terze parti, all'invio di pubblicit&agrave; a soggetti che hanno precedentemente visitato il sito www.bancobpm.it e alla personalizzazione dei contenuti.<br><a href="http://www.microsoft.com/privacystatement/it-it/MicrosoftOnlineAdvertising/Default.aspx" target="_blank" class="break-word">http://www.microsoft.com/privacystatement/it-it/MicrosoftOnlineAdvertising/Default.aspx</a></p>
                                                <p><strong>Google Advertising</strong><br>L'installazione &egrave; finalizzata all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet, all'invio di pubblicit&agrave; a soggetti che hanno precedentemente visitato il sito, alla personalizzazione dei contenuti, all'ottimizzazione della navigazione e alla condivisione di contenuti sui social network.<br><a href="https://policies.google.com/technologies/ads?hl=it" target="_blank" class="break-word">https://policies.google.com/technologies/ads?hl=it</a></p>
                                                <p><strong>Facebook</strong><br>L'installazione &egrave; finalizzata all'ottimizzazione della navigazione, all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet anche su siti di terze parti, all'invio di pubblicit&agrave; a soggetti che hanno precedentemente visitato il sito, alla personalizzazione dei contenuti, e alla condivisione di contenuti sui social network.<br><a href="https://www.facebook.com/policies/cookies/" target="_blank" class="break-word">https://www.facebook.com/policies/cookies/</a></p>
                                                <p><strong>Criteo</strong><br>L'installazione &egrave; finalizzata all'ottimizzazione della navigazione, all'invio di pubblicit&agrave; basata sugli interessi manifestati attraverso la navigazione internet, all'invio di pubblicit&agrave; a soggetti che hanno precedentemente visitato il sito, alla personalizzazione dei contenuti.<br><a href="https://www.criteo.com/it/privacy/" target="_blank" class="break-word">https://www.criteo.com/it/privacy/</a></p>
                                                <p>Per gestire l'autorizzazione all'utilizzo dei cookie di terze parti basati sul consenso:</p>
                                                
                                               <!-- CONSENSO -->
                                               <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" name="consent_mktg" id="consent_mktg_yes" value="yes">
                                                            <label for="consent_mktg_yes">Accetto</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="radio radio-inline">
                                                            <input type="radio" name="consent_mktg" id="consent_mktg_no" value="no" checked>
                                                            <label for="consent_mktg_no">Non accetto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- FINE CONSENSO -->
                                            </section>
                                    
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button class="btn-grlit btn-auto fright cookieSalva">Salva le impostazioni</button>
                                                </div>
                                            </div>
                                        </section>
                                        <hr>
                                        <!-- INFORMATIVA FINALE -->
                                        <section>
                                            <h3>Scelte relative ai cookie</h3>
                                            <p>Questo sito esprime le migliori performance se i cookie sono abilitati. Puoi comunque decidere di non consentire l’impostazione dei cookie anche dal tuo computer.</p>
                                            <p>Per informazioni su come modificare le impostazioni dei cookie di seguito vengono forniti i link che spiegano come gestire i cookie per i browser più diffusi:</p>
                                            <p><strong>Internet Explorer TM</strong><br>
                                            <a href="http://windows.microsoft.com/it-IT/windows-vista/Block-or-allow-cookies" target="_blank" class="break-word">http://windows.microsoft.com/it-IT/windows-vista/Block-or-allow-cookies</a></p>
                                            <p><strong>Google Chrome TM</strong><br>
                                            <a href="https://support.google.com/chrome/answer/95647?hl=it&amp;hlrm=en" target="_blank" class="break-word">https://support.google.com/chrome/answer/95647?hl=it&amp;hlrm=en</a></p>
                                            <p><strong>Mozilla Firefox TM</strong><br>
                                            <a href="https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie" target="_blank" class="break-word">https://support.mozilla.org/it/kb/Attivare%20e%20disattivare%20i%20cookie</a></p>
                                            <p><strong>Apple Safari TM</strong><br>
                                            <a href="http://www.apple.com/it/support" target="_blank" class="break-word">http://www.apple.com/it/support</a></p>
                                            <p><strong>Opera TM</strong><br>
                                            <a href="https://help.opera.com/en/latest/web-preferences/#cookies" target="_blank" class="break-word">https://help.opera.com/en/latest/web-preferences/#cookies</a></p>
                                        </section>
                                        <!-- FINE INFORMATIVA FINALE -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /colonna centrale -->

    		<!-- fine colonna centrale -->
 
 			
   			<!-- inizio colonna destra -->
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 widget-container">

                <div class="spacerdark"></div>
                <!-- Chiamata ai widget dinamici -->
                <div id="widgetContainer" class="">
                </div>
                <script type="text/javascript">
                    var loadWidgets = ["wdg_aiuto.html"];
                </script>
                <!-- Fine chiamata ai widget dinamici -->
            </div>

   			<!-- fine colonna destra -->
   			
		</div> <!-- /row rowArea1 -->
	</div> <!-- /container -->
</div>