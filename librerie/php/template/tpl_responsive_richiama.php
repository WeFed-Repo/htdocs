<!-- Titolo di pagina (opzionale) -->
<h2><?php print(($bank =="webank")? "Webank" : "Help Center"); ?> ti richiama</h2>
<!-- Fine titolo di pagina -->

<!-- Emulazioni comportamenti -->
<script type="text/javascript">	

		$(function () {

		// Emulazione inizializzazioni
			$("#btnInvioCmb").click(function(){
				$("#formCmbWrap").addClass("loading");
				setTimeout(function(){
					$("#formCmbWrap").hide();
					$("#boxesitoWrap").fadeIn();
				},2000);
				
			});
		
		});
	</script>

<!-- Fine emulazioni comportamenti -->

<section>
	<!-- Introduzione -->
	<div class="row">
		<div class="col-xs-12">
			<p>Gli operatori del <strong>Customer Care</strong> ti richiamano <strong>quando vuoi tu</strong>.</p>
		</div>
	</div>
	<!-- fine introduzione -->
	<div id="formCmbWrap">
		<!-- Form -->
		<div class="row">
			<div class="col-xs-12">
				<form class="formGenerico borderFormRounded" method="post" action="#">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 requiredField">
								<label class="control-label">Telefono*</label>
								<div class="row">
									<div class="col-xs-4">
										<input type="text"name="prefisso" id="prefisso" class="form-control clear-x" value="">
									</div>
									<div class="col-xs-8">
										<input type="text"name="tel" id="tel" class="form-control clear-x" value="">
									</div>
								</div>
						   	</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 requiredField">
								<label class="control-label">Giorno*</label>
						   	 	<select class="form-control" name="giorno">
						   	 		<option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option>
						   	 	</select>
							</div>
							<div class="col-sm-6 requiredField">
								<label class="control-label">Fascia oraria*</label>
								<select class="form-control" name="fascia">
									<option selected="selected" value="uno">09.00 - 10.00</option>
									<option value="due">10.00 - 11.00</option>
									<option value="tre">11.00 - 12.00</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 requiredField">
								<label class="control-label">Argomento*</label>
						   	 	<select class="form-control" name="argomento">
						   	 		<option value="Seleziona" selected="selected">Seleziona</option>
									<option value="Banking">Banking</option>
									<option value="Trading">Trading</option>
									<option value="Privacy">Privacy</option>
									<option value="Privacy">Altro</option>
						   	 	</select>
							</div>
							<div class="col-sm-6 requiredField">
								<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Solo per info deposito titoli" data-original-title="" title="">Password chiamata</label>
						   	 	<input type="text"name="pwdchiamata" id="pwdchiamata" class="form-control clear-x" value="">
							</div>
						</div>
					</div>
				</form>			
				<div  class="row">
					<div class="col-xs-12">
						<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
					</div>
				</div>
				<div  class="row">
					<div class="col-xs-12">
						<div class="form-group btnWrapper">
						    <div class="btn-align-right">
						        <a type="button" class="btn btn-primary" id="btnInvioCmb" href="#">prosegui</a>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fine form -->
	</div>

	<!-- esito -->
	<div class="boxesito positivo" id="boxesitoWrap" style="display:none">
		<i class="icon icon-alert_ok icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
				</div>
			</div>
		</div>
	</div>
	<!-- fine esito -->
</section>