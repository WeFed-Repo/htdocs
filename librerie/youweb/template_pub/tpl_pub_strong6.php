<!--ESEMPIO DI CORREZIONE ERRORI INSERIMENTO TOKEN CON LA LIBRERIA JQUERY VALIDATOR -->
<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.validate.min.js"></script>
<script>
	$(function() {
			$("#tokenFormexbpm").validate({
			rules: {
				tokenFormexbpm: { //vengono stabilite le regole per ogni campo da controllare
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


<div class="contentPagina">
<div class="riquadro strong-auth">
	<h1><span>Per accedere &egrave; necessario scaricare e certificare YouApp</span></h1>
	<form id="tokenFormexbpm" action="#" name="tokenFormexbpm" novalidate="novalidate">
			<div class="section clearfix">
			<p>Ricordati di farlo al pi&ugrave; presto! Per questa volta puoi accedere generando un
codice di sicurezza dall'app BPM Mobile.</p>
			<div class="row no-padding hidden-xs">
				<div class="col-sm-3 alignCenter">
					<span class="stepOff min-height">1. Apri BPM Mobile sul tuo smartphone e clicca sulla funzione veloce Genera &laquo;Codice
token.&raquo;</span>
					<img src="/HT/fe/img/ban_strong_token_offline1.png" alt="Apri BPM Mobile sul tuo smartphone e clicca sulla funzione veloce Genera &laquo;Codice
token.&raquo;">
				</div>
				<div class="col-sm-6 alignCenter">
					<span class="stepOff  min-height">2. Inserisci il Pin 
personale che utilizzavi 
su BPM Banking o 
utilizza la tua impronta 
digitale</span>
					<img src="/HT/fe/img/ban_strong_token_offline2.png" alt="Inserisci il Pin
personale che utilizzavi
su BPM Banking o
utilizza la tua impronta
digitale">
				</div>
				<div class="col-sm-3 alignCenter">
					<span class="stepOff min-height">3. Inserisci nel
campo sotto il
codice token
generato dall'app.</span>
					<img src="/HT/fe/img/ban_strong_token_offline3.png" alt="nserisci nel
campo sotto il
codice token
generato dall’app.">
				</div>
			</div><br>
			<p class="hidden-xs">
				Ti ricordiamo che l'app BPM Mobile presto non sar&agrave; pi&ugrave; utilizzabile.<br>
<strong>Scarica YouApp, la nuova app del Gruppo Banco BPM da Google Play o
Apple Store.</strong>
			</p>
			<div class="row">
				<div class="col-sm-6 hidden-xs">
					<a href="" class="link-help">Problemi con l'operazione?</a>
				</div>
				<div class="col-sm-6">
					<div class="form-field-input">
						<label class="control-label">OTP da token</label>
						<div class="form-field">
							<input type="password" name="tokenFormexbpm"  id="tokenFormexbpm" maxlength="" size="" value="" class="form-control">
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
			<div class="visible-xs">
				<p>Ti ricordiamo che l'app BPM Mobile presto non sar&agrave; pi&ugrave; utilizzabile.<br>
				<strong>Scarica YouApp, la nuova app del Gruppo Banco BPM da Google Play o
				Apple Store.</strong></p>
			</div>
			<div class="modal-bottom no-position">
				
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

