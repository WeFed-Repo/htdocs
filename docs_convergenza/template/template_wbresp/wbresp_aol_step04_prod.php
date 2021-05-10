<script>
	var cgi_script = "/webankpub";
	var isCovid = true
	var dateCovidIni = "01/02/2020";
	var dateCovidEnd = "30/09/2021";
</script>
<div class="row rowArea1">
	<form id="aolStep4" action="/webankpub/aol/step4_ident.do?BV_UseBVCookie=Yes&fromPageName=4&save=true" method="POST" class="validate" novalidate="novalidate">		
			

			
			<!-- TITOLO -->
			<div class="row">
				<div class="col-xs-12">
					<h2>Scegli la modalità di identificazione</h2>
				</div>
			</div>
			<!-- TITOLO -->
			
			<!-- Intro -->
			<div class="row">
				<div class="col-xs-12">
					<p>Ai sensi della <strong>normativa antiriciclaggio</strong> (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali.<br>Ti ricordiamo che il rilascio di false informazioni oppure omissioni pu&ograve; comportare conseguenze anche di natura penale.</p>
				</div>
			</div>
			<!-- Fine intro -->
			
			<div class="row">
				<div class="col-xs-12 form-section-title">
					<h4>Con quale modalit&agrave; vuoi procedere all'identificazione?</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">


				<p>
					La banca &egrave; tenuta a verificare l'identit&agrave; dei propri clienti. Per questo motivo e perché non sei ancora cliente Banco BPM sar&agrave; necessario procedere all'identificazione. 
					Hai a disposizione <strong>due alternative</strong>, una <strong>a distanza</strong> e una <strong>di persona</strong>, venendo in una <strong>filiale</strong> Banco BPM.
					Scegli la soluzione a te pi&ugrave; comoda.
				</p>
				
				</div>
			</div>

			<!-- Pannelli per identificazione A DISTANZA -->
			<div class="row">
				<div class="col-xs-12">
					<h4>A distanza</h4>
				</div>
			</div>

			<!-- Identificazione tramite WEBCAM -->


			<!-- Identificazione tramite BONIFICO -->
			<div class="row">
				<div class="col-xs-12">
					<div class="fieldwrapped selected">
						<div class="radio radio-inline radio-evident">
							<input type="radio" name="modalita_riconoscimento" value="bonifico" id="dist_bonifico" checked>
							<label for="dist_bonifico">2 DOCUMENTI D'IDENTIT&Agrave; + BONIFICO</label>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>
									Per essere riconosciuto con questa modalit&agrave;, dovrai fare un <strong>bonifico di 100 &euro;</strong> da un conto corrente di cui sei <strong>intestatario</strong> o cointestatario. L'importo sar&agrave; accreditato sul tuo nuovo Conto Webank.
								</p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-12">
								<p><strong>Avrai bisogno di</strong>:</p>
								<ul>
									<li>codice IBAN di un conto corrente attivo intestato a te (dal quale farai il bonifico)</li>
									<li>due documenti di identit&agrave; (quello indicato in precedenza e un secondo)</li>
									<li>codice fiscale o tessera sanitaria</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fine identificazione tramite BONIFICO -->
			
			<!-- Fine pannelli per identificazione A DISTANZA -->
			<!-- Pannelli per identificazione DI PERSONA -->
			<div class="row">
				<div class="col-xs-12">
					<h4>Di persona</h4>
				</div>
			</div>
			<!-- Identificazione IN AGENZIA -->
			<div class="row">
				<div class="col-xs-12">
					<div class="fieldwrapped">
						<div class="radio radio-inline radio-evident">
							<input type="radio" name="modalita_riconoscimento" value="agenzia" id="dist_agenzia">
							<label for="dist_agenzia">IN FILIALE</label>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p>
									In modo pi&ugrave; tradizionale, puoi recarti in una qualunque <strong>filiale Banco BPM</strong> per farti riconoscere di persona.
								</p>
								<a href="http://www.bancobpmspa.com/cerca-filiale/ " target="_blank">Trova la filiale pi&ugrave; vicina</a>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-12">
								<p><strong>Avrai bisogno di</strong>:</p>
								<ul>
									<li>documento di identit&agrave; indicato in precedenza</li>
									<li>codice fiscale o tessera sanitaria</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Fine identificazione IN AGENZIA -->
			<!-- Fine pannelli per identificazione DI PERSONA -->

			<div class="spacer-no-border">&nbsp;</div>
			<hr>
			<div class="row">
			    <div class="col-xs-12">
			        <div class="btn-console">
			            <a href="/webankpub/aol/step3.do?BV_UseBVCookie=Yes&fromPageName=4&save=true" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
			            <button id="btnSubmit" type="button" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
			        </div>
			    </div>
			</div>	
		</form>
		
		</div>
		
		<!-- COLONNA DESTRA -->
		
















<!-- Overlay seleziona una modalit&agrave; di riconoscimento -->
<div class="modal" id="overlaySelezionaModo" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modalit&agrave; di riconoscimento</h4>
            </div>
            <div class="modal-body">
                Seleziona con quale modalit&agrave; vuoi farti riconoscere.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal" id="overlayOrarioWebcam" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Servizio non disponibile</h4>
            </div>
            <div class="modal-body">
				Il servizio &egrave; attivo  nelle seguenti fasce orarie.<br>
				dal luned&igrave; al venerd&igrave; dalle 09:00 alle 22:00<br>
	 			sabato, domenica e festivi dalle 11:00 alle 20:00
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/wbresp/js/aol/step4.js?a=464"></script>
<script type="text/javascript">
// Abilita/disabilita i controlli in pagina
$(function() {
	
noBack();
	
$('#dist_webcam').click(function() {
	var inOrario = false;
	if(!inOrario) {
		$('#overlayOrarioWebcam').modal('show');
	}
});



});

</script>

<script type="text/javascript" src="/wbresp/js/utilities.js?a=464"></script>
<script type="text/javascript" src="/wbresp/js/aol/step_utils.js?a=464"></script>
