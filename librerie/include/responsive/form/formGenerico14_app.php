<!-- overlay  -->
<script type="text/javascript">
	
	// Emulazione innesco overlayer
	$(function(){

		$("#emuControlloApp").click(function(){
			openPopOverLayer("autorizzazioneApp");
		});

		// Chiusura overlay 
		$("#emuAnnulla").click(function(){
			closePopOverLayer("autorizzazioneApp");
		});
	});
</script>
<!-- OVERLAY DI AUTORIZZAZIONE APP -->
<div class="overlayer autapp" id="autorizzazioneApp">
	<a class="close"></a>
	<div class="overlayerCont">
		<h2>Autorizzazione</h2>
		<div class="formGenerico">
			<!-- Blocco con introduzione -->
			<div class="row-fluid">
				<div class="span12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Eveniet dolorem voluptatibus eius aperiam, cum cumque</strong> magnam voluptatem, at non sunt ad aspernatur! Assumenda earum nesciunt repellendus voluptas maiores, aspernatur molestias.</p>
				</div>
			</div>
			<hr>
			<!-- Fine blocco introduzione -->
			<!-- Blocco "timeout" -->
			<div class="row-fluid">
				<div class="col-xs-12 center">
						<p><strong>Non hai visualizzato la notifica push?</strong><br><br></p>
						<div class="aButtoncons formCenteredBtn">
							<a href="javascript:;" class="aButton"><span>lorem ipsum dolor sit</span></a>
						</div>
				</div>
			</div>
			<hr>
			<!-- Fine blocco "timeout" -->
		    <!-- Form di richiesta -->
		   	<div class="formGeneric">
					<form id="formEsempio" role="form">			
						<!--RIGA DIVISA IN QUATTRO CAMPI -->
						<div class="row-fluid otpdesc app">
							<div class="span6">
								<span class="introtext"><strong>1.</strong> Fai tap sulla notifica di richiesta autorizzazione che hai ricevuto.</span>
								<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_finger.png"></div>
							</div>
							<div class="span6">
								<span class="introtext"><strong>2.</strong> Inserisci il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span> o utilizza il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">fingerprint</span> nel tuo smartphone.</span>
								<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
							</div>

						</div>
						<!-- Form di richiesta -->
						<div class="row-fluid">
							<div class="span12">
								<a href="#" class="openinfo">Problemi con l'operazione?</a>
							</div>
						</div>
					</form>
				 </div>
			<!-- Form di richiesta -->

			<!-- Form di richiesta -->
			<div class="formGeneric">
				<form id="form" role="form">			
					<!--RIGA DIVISA IN QUATTRO CAMPI -->
					<div class="row otpdesc app">
						<div class="col-xs-12 col-sm-4">
							<span class="introtext"><strong>1.</strong> Apri l'app e scegli "Genera codice Token".</span>
							<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_genera.png"></div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<span class="introtext"><strong>2.</strong> Inserisci il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span> o utilizza il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">fingerprint</span> nel tuo smartphone.</span>
							<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<span class="introtext"><strong>3.</strong> Inserisci qua il codice Token generato.</span>
							<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_codice.png"></div>
						</div>
					</div>
					<!-- Form di richiesta -->
					<div class="row-fluid">
						<div class="span8">
							<a href="#" class="openinfo">Problemi con l'operazione?</a>
						</div>
						<div class="span4 otpGroup">
							<label for="codiceotp" class="nomefield">Codice OTP</label>
							<input id="codiceotp" type="text" maxlength="11">
						</div>
					</div>

				</form>
			 </div>
		</div>
	</div>
	<!-- PULSANTIERA -->
	<div class="aButtoncons">
		<div class="aButtonconsLeft">
			<a href="javascript:;" class="aButtonClear" id="emuAnnulla"><span>lorem</span></a>
		</div>
		<div class="aButtonconsRight">
			<a href="javascript:;" class="aButton"><span>lorem</span></a>
			<a href="javascript:;" class="aButton"><span>ipsum</span></a>
		</div>
	</div>
	<!-- FINE PULSANTIERA -->	
</div>
<!-- FINE OVERLAY DI AUTORIZZAZIONE APP -->


<!-- EMULAZIONE PULSANTE DI INNESCO DEL CONTROLLO APP -->
<div class="fooform">
	<div class="fooformtop">Step <strong>2</strong> di 2</div>
	<div class="fooformright">
		<div><a href="#1" class="btnformright" title="lorem ipsum" id="emuControlloApp"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Attiva controllo APP</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
		<br class="clear">
	</div>	
<br class="clear">
</div>
<!-- FINE EMULAZIONE PULSANTE DI INNESCO DEL CONTROLLO APP -->