<!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#tokenForm").validate({
			rules: {
				tokenFisico: { //vengono stabilite le regole per ogni campo da controllare
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
		<form id="tokenForm" action="#" name="tokenForm">
			<section>
				<p class="alignCenter hidden-xs">Inserisci il codice OTP generato dal tuo Token </p>
				<div class="alignCenter hidden-xs">
					<section>
						<img src="/HT/fe/img/ban_strong_token_fisico.png" alt="Inserisci il codice OTP generato dal tuo Token">
					</section>
				</div>
				<div class="formWrapper">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 hidden-xs">
								<a href="" class="link-help">Problemi con l'operazione?</a>
							</div>
							<div class="col-sm-6">
								<div class="form-field-input">
									<label class="control-label">OTP da token</label>
									<div class="form-field">
										<input type="password" name="tokenFisico"  id="tokenFisico" maxlength="" size="" value="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<!-- link visibile mobile-->
						<div class="visible-xs row">
							<div class="col-sm-12">
								<p>Inserisci il codice OTP generato dal tuo Token </p>
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
				</div>
			</section>
				
		</form>
	</div>
</div>
