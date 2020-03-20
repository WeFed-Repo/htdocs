<div class="stato-apertura-conto mainContent">
		<div class="stato-apertura-conto container">
			<div class="row rowArea1">
				<!-- colonna centrale -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="stato-apertura-conto basic-content">
						<h2>Gestione richieste apertura conto</h2>
						<p>Inserisci la password. Al termine, <strong>TI INVIEREMO UN'EMAIL</strong> con il link per accedere a un'area privata dove potrai:</p>
						<ul>
							<li>seguire lo stato di una tua richiesta gi&agrave; completata</li>
							<li>salvare e modificare la bozza di una richiesta.</li>
						</ul>
						<p>Ti segnaliamo che la bozza viene cancellata dopo 30 giorni dalla sua creazione.</p>
					
					
						<form action="/webankpub/aol/autenticateUser.do?BV_UseBVCookie=Yes&amp;CNT_TARGET=Privati&amp;numPag=1&amp;funz=bozze" method="POST" id="aol" name="aol" class="form-group stato-apertura-conto" autocomplete="off" novalidate="novalidate">
							<div class="col-md-3 col-sm-12 form-group">
								<label for="userName">E-mail</label>
								<input type="text" name="mail" id="mail" class="textinput form-control" maxlength="16" value="mario.rossi@lib.it" disabled>
							</div>
							<div class="col-md-3 col-sm-12 form-group">
							  <label for="userName">Codice fiscale</label>
							  <input type="text" name="userName" value="RSSMRA50A01F205R" id="userName" class="textinput form-control" disabled>
							</div>
							<div class="col-md-3 col-sm-12 form-group">
							  <label for="password">Password</label>
							  <input type="text" name="password" value="" id="password" class="textinput form-control">
							  <div class="nota"><a href="/webankpub/aol/recuperaPassword.do?BV_UseBVCookie=Yes&amp;CNT_TARGET=Privati&amp;userType=registered&amp;numPag=1&amp;funz=bozze" id="recPwsUrl">Recupera password</a></div>
							</div>
							<div class="col-md-12 col-sm-12">
							  <button type="submit" id="btn-invia" class="btn-grlit btn-grlit-arrow btn-fs14  uppercase">Salva in bozza</button>
							</div>
						</form>
					
					
					</div>
				</div>
			</div>
		</div>
	</div>
			   <!-- Modal RECUPERA PSW OK -->
<div class="modal fade" id="layerRecuperaPassword" role="dialog">
    <div class="modal-dialog">
			<!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body feedback">
				<div class="row">
                  <div class="col-md-12 col-sm-12 light-thankyou-block">
					<div class="title-content">
					   <strong></strong>
					   Abbiamo inviato <strong>una nuova password</strong> al tuo indirizzo di posta elettronica.<br>
						La nuova password non &egrave; modificabile.
					</div>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>
      <!-- Modal RECUPERA PSW  fine -->
	<!--carica il modal al load della pagina di conferma -->


	<script>
	$(function() {
		$('#layerRecuperaPassword').modal('show');
	});
</script>