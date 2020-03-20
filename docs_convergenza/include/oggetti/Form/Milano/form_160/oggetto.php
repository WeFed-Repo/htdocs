<div class="formGenerico borderFormRounded">
	
	<!-- Blocco con introduzione -->
	<div class="row">
		<div class="col-xs-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Eveniet dolorem voluptatibus eius aperiam, cum cumque</strong> magnam voluptatem, at non sunt ad aspernatur! Assumenda earum nesciunt repellendus voluptas maiores, aspernatur molestias.</p>
		</div>
	</div>
	<hr>
	<!-- Fine blocco introduzione -->
	<!-- Blocco "timeout" -->
	<div class="row">
		<div class="col-xs-12 align-center">
				<p><strong>Non hai visualizzato la notifica push?</strong></p>
				<div class="form-group btnWrapper">
					<div class="btn-align-center">
						<a type="button" class="btn btn-primary" id="">lorem ipsum dolor sit</a>
						<br class="clear">
					</div>
				</div>
		</div>
	</div>
	<hr>
	<!-- Fine blocco "timeout" -->
    <!-- Form di richiesta -->
	<div class="formGeneric">
		<form id="formEsempio" role="form">			
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row otpdesc app">
				<div class="col-xs-12 col-sm-6">
					<span class="introtext"><strong>1.</strong> Fai tap sulla notifica di richiesta autorizzazione che hai ricevuto.</span>
					<div class="center hidden-xs"><img src="/WB/fe/img/token_app_finger.png"></div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<span class="introtext"><strong>2.</strong> Inserisci il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span> o utilizza il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">fingerprint</span> nel tuo smartphone.</span>
					<div class="center hidden-xs"><img src="/WB/fe/img/token_app_insert.png"></div>
				</div>
			</div>
			<!-- Form di richiesta -->
			<div class="row">
				<div class="col-xs-12">
					<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span>Problemi con l'operazione?</span></a>
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
					<div class="center hidden-xs"><img src="/WB/fe/img/token_app_genera.png"></div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<span class="introtext"><strong>2.</strong> Inserisci il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span> o utilizza il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">fingerprint</span> nel tuo smartphone.</span>
					<div class="center hidden-xs"><img src="/WB/fe/img/token_app_insert.png"></div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<span class="introtext"><strong>3.</strong> Inserisci qua il codice Token generato.</span>
					<div class="center hidden-xs"><img src="/WB/fe/img/token_app_codice.png"></div>
				</div>
			</div>
			<!-- Form di richiesta -->
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span>Problemi con l'operazione?</span></a>
				</div>
				<div class="col-sm-4 col-xs-12 otpGroup">
					<label class="control-label" for="codiceotp">Codice OTP</label>
					<input type="number" name="codiceotp" id="codiceotp" class="form-control clear-x" min="0" max="99999999999">
				</div>
			</div>

		</form>
	 </div>
	
</div>
<!-- Fine controllo TOKEN -->