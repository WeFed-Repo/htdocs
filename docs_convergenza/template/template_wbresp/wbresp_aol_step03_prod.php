<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>
<div class="row rowArea1">
	<!-- Template contatti -->
        <!-- TITOLO -->
        <div class="row">
            <div class="col-md-12">
                <h2>La tua offerta comprende</h2>
            </div>
        </div>
        <!-- TITOLO -->
        <!-- Elenco features -->
        <div class="row">
            <div class="col-md-12">
                <p>Il tuo conto Webank comprende:</p>
                <ul class="spunte">
                    <li>
                        <span class="spuntato">CONTO CORRENTE E DEPOSITO DI RISPARMIO</span>
                        <p>Gestisci i tuoi soldi con il deposito di risparmio e le linee vincolate di Conto Webank a 9, 12 e 18 mesi.</p>
                    </li>
                    <li>
                        <span class="spuntato">CARTA DI DEBITO INTERNAZIONALE</span>
                        <p>Con <strong>canone gratuito</strong> e <strong>prelievi senza commissioni</strong> in Italia e in <strong>tutta l'area Euro</strong>. E puoi modificare i massimali online  in qualunque momento.</p>
                    </li>
                    <li>
                        <span class="spuntato">CONTABILI ED ESTRATTO CONTO ONLINE</span>
                        <p><strong>In automatico e gratuitamente</strong> riceverai direttamente online le <strong>contabili</strong> e gli <strong>estratti conto</strong></p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Fine elenco features -->
        <hr>
		<form id="aolStep3" action="/webankpub/aol/step4.do?BV_UseBVCookie=Yes&fromPageName=3&save=true" method="POST" class="validate">
			<!-- Strong authentication -->
			<div class="row">
				<div class="col-sm-12 form-section-title">
					<h4>1. Scegli e richiedi il tuo strumento di sicurezza</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p>Per <strong>l'accesso al sito</strong> e per <strong>autorizzare tutte le operazioni</strong> di banking, ti diamo la possibilit&agrave; di scegliere tra due diversi strumenti di sicurezza.</p>
					<p>
						Puoi <strong>scegliere</strong> il sistema che preferisci tra <strong>un token</strong> che ti forniamo noi (ad un costo di <strong>15 &euro;</strong>) o 
						<strong>l'app Webank</strong> per smartphone che puoi <strong>scaricare gratuitamente</strong> dagli store Android, Apple e Microsoft  
						(Android 4.0 o successive; iOS 7.1 o successive, Windows 10 Mobile o successive).
						Per utilizzarla come strumento di sicurezza, &egrave; sufficiente installare e certificare l'app.	
					</p>
					<p>Una volta aperto il conto, potrai anche cambiare lo <a class="text-tooltip" href="javascript:;" data-toggle="tooltip" title="Se hai gi&agrave; aperto un conto Webank a te intestato, non puoi modificare il tipo di strumento di sicurezza in tuo possesso.">strumento di sicurezza</a> scelto.</p>


					<div class="imageradio">
						<div class="row">
							<div class="hidden-xs col-sm-2">
								<img src="/wbresp/img/strong_smartphone.png">
							</div>
							<div class="col-xs-12 col-sm-10">
								<div class="radio radio-inline">
									<input type="radio" name="strumentoAutorizzativo_int1" id="strumentoAutorizzativoAPP_int1" value="APP" checked>
									<label for="strumentoAutorizzativoAPP_int1" class="labelTooltip"><strong>App Webank (gratuita)</strong></label>
								</div>
								<p>Scegliendo l'app <strong>non avrai bisogno</strong> di portare con te <strong>un ulteriore dispositivo fisico</strong> quando vuoi operare con il tuo internet banking: &egrave; sufficiente che 
								tu abbia a portata di mano il tuo smartphone. All'accesso al sito e alla conferma di una disposizione di pagamento, <strong>riceverai automaticamente</strong> una notifica sul tuo 
								smartphone: per confermare &egrave; sufficiente un <a class="text-tooltip" href="javascript:;" data-toggle="tooltip" title="Semplice tocco sullo smartphone che permette di interagire allo stesso modo di un click del mouse con un computer.">tap</a> sulla notifica ricevuta e, nel caso di disposizione di pagamento, l'inserimento del tuo Pin personale: semplice, no?<br>
								Con l'app, potrai inoltre <strong>contattare il numero verde</strong> e parlare con un operatore in modo pi&ugrave; <strong>semplice, sicuro e immediato</strong>, senza bisogno di inserire e digitare codici o password.
								</p>
							</div>
						</div>

						<div class="row">
							<div class="hidden-xs col-sm-2">
								<img src="/wbresp/img/strong_token.png">
							</div>
							<div class="col-xs-12 col-sm-10">
								<div class="radio radio-inline">
									<input type="radio" name=strumentoAutorizzativo_int1 id="strumentoAutorizzativoFIS_int1" value="FIS" >
									<label for="strumentoAutorizzativoFIS_int1" class="labelTooltip"><strong>Token</strong></label>
								</div>
								<p>Il <strong>token</strong> &egrave; un piccolo dispositivo personale che genera dei <strong>codici numerici "usa e getta"</strong> da utilizzare per l'accesso sicuro all'area privata e la conferma delle operazioni di pagamento.</p>
								<p>Il costo di attivazione del token &egrave; di <strong>15 &euro;</strong>. Lo riceverai <strong>a casa per posta</strong>.</p>
							</div>
						</div>
					</div>

						
					
				</div>
			</div>
			<!-- Strong authentication -->
			<hr>
			<!-- Prenotazione deposito -->
			<div class="row">
				<div class="col-sm-12 form-section-title">
					<h4>2. Prenota il deposito titoli e servizi di investimento (facoltativo)</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="checkbox check-inline">
						<input type="checkbox" name="pren_deposito" id="pren_deposito" value="1" >
						<label for="pren_deposito">Deposito titoli e servizi di investimento</label>
					</div>
					<p>
						Ti permette di negoziare titoli e di investire in <strong>fondi</strong> e <strong>Sicav</strong>.<br>
						Riceverai le <strong>contabili online gratuitamente</strong>. Potrai richiederle cartacee in un secondo momento, direttamente dall'area privata del tuo nuovo Conto Webank.<br><br>
						Puoi decidere di richiedere il deposito titoli anche in seguito all'apertura del conto.
					</p>
				</div>
			</div>
			
			<div class="spacer-no-border">&nbsp;</div>
			<!-- Footnotes -->
		    <div class="row">
		        <div class="col-sm-12">
		            <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori</p>
		        </div>
		    </div>
			<!-- Footnotes -->
			
			<hr>
			<!-- Pulsanti -->
			<div class="row">
				<div class="col-xs-12">
					<div class="btn-console">
						<a href="/webankpub/aol/step2.do?BV_UseBVCookie=Yes&fromPageName=3&save=true" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
						<button id="btnSubmit" type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
					</div>
				</div>
			</div>
			<!-- Fine pulsanti -->
			
			</form>
			
			<!-- Fine template contatti -->
		

		<!-- COLONNA DESTRA -->
</div>


<script type="text/javascript" >
$(function() {
	noBack();
});
</script>

<script type="text/javascript" src="/wscmn/js/disclaimer.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/certificazione.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step3.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/utilities.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>

