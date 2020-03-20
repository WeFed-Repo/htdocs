<script type="text/javascript">
$(function(){
	/* Emulazione apertura login Robo Advisory */
	$("#roboAdvRegistration").modal("show");

	/* Messaggi di errore per la validazione */
	$.validator.messages.required = 'Verifica';


	/* 
		Esempio base di validazione di un form.
		Fare riferimento alla guida del plugin per approfondimenti: https://jqueryvalidation.org/
		
	*/
	var validateRoboAdvLogin = $( "#roboAdvRegistrationForm" ).validate({
			submitHandler: function(form) {
					/* Emulazione output */
					var elLoading = $("#roboAdvRegistration .modal-body").addClass("loading");
					// Predisporre qui eventuale feedback da backend con chiamata
					setTimeout(function(){
						elLoading.removeClass("loading")
						$("#roboAdvOutput").modal("show");
						$("#roboAdvRegistration").modal("hide");
					},2000)
			},

			rules: {
				nome: {
					required: true
				},
				cognome: {
					required: true
				},
				email: {
					required: true
				},
				password: {
					required:true
				}
			}
		});


	/* Esempio di form "alternativo" o navigazione tra i form */
	/* Password dimenticata */
	$("#forgetPassword").click(function(){
		$("#roboAdvForgetPass").modal("show");
		$("#roboAdvRegistration").modal("hide");
	});



});
</script>


<!-- Modal robo advisory login -->
<div class="modal" id="roboAdvRegistration" role="dialog" style="display:none">
	<div class="modal-dialog">
	  	<!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4>Registrati</h4>
		    </div>
		    <div class="modal-body">

				<!-- Blocco login social -->
				<!--
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<a class="socialLogin facebook">Accedi con Facebook</a>
					</div>
					<div class="col-xs-12 col-sm-6">
						<a class="socialLogin google">Accedi con Google+</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<p class="note alignCenter">Non pubblicheremo niente senza la tua autorizzazione.</p>
					</div>
				</div>
				-->
				<!-- Fine blocco login social -->

				<!-- separatore con testo -->
				<!-- 
				<div class="spacerText"><span>oppure</span></div>
				-->
				<!-- fine separatore con testo -->
				<form id="roboAdvRegistrationForm" name="roboAdvLoginForm" autocomplete="off" action="###ACTION FORM###" method="POST" role="form" class="form-group">
					<input type="hidden" name="fieldsErrors" id="fieldsErrors" value="" />
					<div class="row">
						<div class="col-sm-6 col-xs-12 form-group">
							<div class="labelinside">
			                    <label for="nome">Nome*</label>
			                    <input type="text" name="nome" id="nome" class="textinput form-control">
			                </div>
		                </div>
		                <div class="col-sm-6 col-xs-12 form-group">
		                    <div class="labelinside">
		                    	<label for="cognome">Cognome*</label>
		                    	<input type="text" name="cognome" id="cognome" class="textinput form-control">
		                	</div>
		                </div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="row">
						<div class="col-xs-12 form-group">
							<div class="labelinside">
		                    	<label for="email">Email*</label>
		                    	<input type="email" name="email" id="email" class="textinput form-control">
		                    </div>
		                </div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="row">
						<div class="col-xs-12 form-group">
							<div class="labelinside">
		                    	<label for="password">Password*</label>
		                    	<input type="password" name="password" id="password" class="textinput form-control">
		                    </div>
		                    <div class="notafield" ><a href="javascript:;" id="forgetPassword">Ho dimenticato la password</a></div>
		                </div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="row">
						<div class="col-sm-6 col-xs-12 form-group">
							<div class="labelinside">
		                    	<label for="codice">Codice di controllo*</label>
		                    	<input type="text" name="codice" id="codice" class="textinput form-control">
		                    </div>
		                </div>
		                <div class="col-sm-6 col-xs-12 form-group">
		                    <div class="captcha"><img src="/wscmn/fe/img/captcha_sample.png"></div>
		                </div>
					</div>
					<div class="spacer">&nbsp;</div>
					<hr>
					<div class="row">
						<div class="col-xs-12">
							<a class="ico-pdf" href="#" title="lorem ipsum">laboris nisi ut aliquip ex ea commodo  nisi ut aliquip ex ea commodo  nisi ut aliquip ex ea commodo consequat</a>
						</div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="row">
						<div class="col-xs-12">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-4 form-group">
							<div class="radio radio-inline">
								<input type="radio" name="aut1" value="Lorem">
								<label for="sxm">Lorem</label>
							</div>
						</div>
						<div class="col-xs-6 col-md-4 form-group">
							<div class="radio radio-inline">
								<input type="radio" name="aut1" value="Ipsum">
								<label for="sxf">Impsum</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, excepturi.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6 col-md-4 form-group">
							<div class="radio radio-inline">
								<input type="radio" name="aut2" value="Lorem">
								<label for="sxm">Lorem</label>
							</div>
						</div>
						<div class="col-xs-6 col-md-4 form-group">
							<div class="radio radio-inline">
								<input type="radio" name="aut2" value="Ipsum">
								<label for="sxf">Impsum</label>
							</div>
						</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, consequatur. Voluptatum accusantium error reprehenderit dolore culpa labore nihil ratione eligendi praesentium nostrum sapiente exercitationem facilis velit asperiores dolorem tempora, voluptas ipsum a eaque nam, doloribus cupiditate dolores. Quam maxime, aliquid!</p>
					<!-- Pulsante -->
					<div class="spacer">&nbsp;</div>
					<div class="row">
		                  <div class="col-md-12 col-sm-12">
		                    <button class="btn-grlit btn-grlit-arrow fright uppercase inlineB" id="btnAccedi">Lorem ipsum</button>
		                  </div>
				    </div>
				    <!-- Fine pulsante -->
				</form>
			</div>
	   	</div>
	</div>
</div>
<!-- Fine robo advisory login -->

<!-- Modal robo advisory password dimenticata -->
<div class="modal" id="roboAdvForgetPass" role="dialog" style="display:none">
	<div class="modal-dialog">
	  	<!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4>&nbsp;</h4>
		    </div>
		    <div class="modal-body">

				<p>Inserisci qui sotto il tuo indirizzo email e ti invieremo un'email con una nuova password da utilizzare per il login.</p>
				<!-- fine separatore con testo -->
				<form id="roboAdvForgetPassForm">
					<div class="row">
						<div class="col-xs-12 form-group">
		                    <label for="forgetemail">Email*</label>
		                    <input type="email" name="forgetemail" id="forgetemail" class="textinput form-control">
		                </div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="row">
		                  <div class="col-md-12 col-sm-12">
		                    <button class="btn-grlit btn-grlit-arrow fright uppercase inlineB" id="btnRichPassword">Ricevi lorem ipsum</button>
		                  </div>
				    </div>
				    <!-- Fine pulsante -->
				</form>
			</div>
	   	</div>
	</div>
</div>
<!-- Fine robo advisory login -->


<!-- Modal robo advisory login -->
<div class="modal" id="roboAdvOutput" role="dialog" style="display:none">
	<div class="modal-dialog">
	  	<!-- Modal content-->
	  	<div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		      <h4>Lorem ipsum dolor sit amet</h4>
		    </div>
		    <div class="modal-body">
		    	<div class="boxalert conferma">
				    <div class="boxcont">
			 			<p>Hai quasi finito!<br>
		    			Controlla il tuo indirizzo email dove troverai la <strong>password di accesso</strong> per poter effettuare il login.</p>
				    </div>
				</div>
		   </div>
	   	</div>
	</div>
</div>
<!-- Fine robo advisory login -->


<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est hic neque, sunt. Ad necessitatibus eius corporis repudiandae possimus, praesentium esse quod repellendus eos dicta tenetur facilis provident nihil reprehenderit amet reiciendis quisquam tempora doloremque aperiam voluptatibus ex voluptate ab laboriosam! Ad sed, rerum distinctio dignissimos temporibus similique. Delectus, voluptate?
	Temporibus est hic neque, sunt. Ad necessitatibus eius corporis repudiandae possimus, praesentium esse quod repellendus eos dicta tenetur facilis provident nihil reprehenderit amet reiciendis quisquam tempora doloremque aperiam voluptatibus ex voluptate ab laboriosam! Ad sed, rerum distinctio dignissimos temporibus similique. Delectus, voluptate?
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est hic neque, sunt. Ad necessitatibus eius corporis repudiandae possimus, praesentium esse quod repellendus eos dicta tenetur facilis provident nihil reprehenderit amet reiciendis quisquam tempora doloremque aperiam voluptatibus ex voluptate ab laboriosam! Ad sed, rerum distinctio dignissimos temporibus similique. Delectus, voluptate?
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est hic neque, sunt. Ad necessitatibus eius corporis repudiandae possimus, praesentium esse quod repellendus eos dicta tenetur facilis provident nihil reprehenderit amet reiciendis quisquam tempora doloremque aperiam voluptatibus ex voluptate ab laboriosam! Ad sed, rerum distinctio dignissimos temporibus similique. Delectus, voluptate?
</p>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus est hic neque, sunt. Ad necessitatibus eius corporis repudiandae possimus, praesentium esse quod repellendus eos dicta tenetur facilis provident nihil reprehenderit amet reiciendis quisquam tempora doloremque aperiam voluptatibus ex voluptate ab laboriosam! Ad sed, rerum distinctio dignissimos temporibus similique. Delectus, voluptate?
</p>