<!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#tokenFormoffLine").validate({
			rules: {
				tokenFisicoOff: { //vengono stabilite le regole per ogni campo da controllare
					required: true //controlla che il campo non sia vuoto
				}
			},
			highlight: function (element) {
			  $(element).closest( ".form-field-input" ).addClass( "has-error" );
			},
			unhighlight: function (element) {
				
				$(element).closest( ".form-field-input" ).removeClass( "has-error" );
				
				
			}
			
		})
		//tipo di messaggio se campo è vuoto
		$.validator.messages.required = 'Lorem ipsum dolor'
		
	});
</script>

<div id="dialogAbiCab" class="ui-dialog-content ui-widget-content">
<div class="riquadro strong-auth">
	<h1><span>Inserisci otp da token</span></h1>
	<form id="tokenFormoffLine" action="#" name="tokenFormoffLine">
		<div class="section clearfix">
			<div class="row no-padding hidden-xs">
				<div class="col-sm-3 alignCenter">
					<span class="stepOff">1. Apri l'app e scegli 'Genera codice OTP'</span>
					<img src="/HT/fe/img/ban_strong_token_offline1.png" alt="Apri l'app e scegli 'Genera codice OTP'">
				</div>
				<div class="col-sm-6 alignCenter">
					<span class="stepOff">2. Inserisci il codice PIN o utilizza il fingerprint</span>
					<img src="/HT/fe/img/ban_strong_token_offline2.png" alt="Inserisci il codice PIN o utilizza il fingerprint">
				</div>
				<div class="col-sm-3 alignCenter">
					<span class="stepOff">3. Inserisci qui il codice OTP generato</span>
					<img src="/HT/fe/img/ban_strong_token_offline3.png" alt="Inserisci qui il codice OTP generato">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hidden-xs">
					<a href="" class="link-help">Problemi con l'operazione?</a>
				</div>
				<div class="col-sm-6">
					<div class="form-field-input">
						<label class="control-label">OTP da token</label>
						<div class="form-field">
							<input type="password" name="tokenFisicoOff"  id="tokenFisicoOff" maxlength="" size="" value="" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<!-- link visibile mobile-->
			<div class="visible-xs row">
				<div class="col-sm-12">
					<p>1. Apri l'app e scegli 'Genera codice OTP'</p>
					<p>2. Inserisci il codice PIN o utilizza il fingerprint</p>
					<p>3. Inserisci qui il codice OTP generato</p>
				</div>
			</div>
			<div class="modal-bottom">
				
					<div class="pull-left visible-xs">
						<a href="" class="link-help">Problemi con l'operazione?</a>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary" type="submit" title="Accedi" id="validateStrong">Accedi</button>
					</div>
				
			</div>
		</div>
			
	</form>

</div>
</div>
