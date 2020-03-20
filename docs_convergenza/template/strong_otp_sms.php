<!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#tokenFormSms").validate({
			rules: {
				tokenSms: { //vengono stabilite le regole per ogni campo da controllare
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


		$('#richiediOTP').click(function(){
			$('#richiediOTP').attr('disabled',true);
			$('#confermaOTP').attr('disabled',false);
		})
		
	});
</script>
<div id="dialogAbiCab" class="ui-dialog-content ui-widget-content">
	<div class="riquadro strong-auth">
		<h1><span>INSERISCI OTP VIA SMS</span></h1>
		<form id="tokenFormSms" action="#" name="tokenFormSms">
			<section>
				<p class="alignCenter">Inserisci il codice di verifica che ti abbiamo inviato  via sms sul tuo numero di cellulare certificato </p>
				<div class="row alignCenter">
					<div class="col-sm-6 no-float">
						<div class="form-field-input">
							<label class="control-label">OTP da SMS</label>
							<div class="form-field">
								<input type="password" name="tokenSms"  id="tokenSms" maxlength="" size="" value="" class="form-control">
							</div>
						</div>
						<div>
							<input type="button" class="btn btn-primary"  title="Richiedi OTP da SMS" id="richiediOTP" value="Richiedi OTP da SMS">
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="modal-bottom">
					<div class="pull-left">
						<a href="#">Problemi con l'operazione?</a>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary" type="submit" title="Accedi" id="confermaOTP" disabled>Accedi</button>
					</div>
				</div>
			</section>
		</form>
	</div>
</div>