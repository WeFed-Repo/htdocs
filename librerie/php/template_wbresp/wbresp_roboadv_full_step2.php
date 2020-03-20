<!-- Fine framework gestione errori -->
<div class="row">
	<div class="col-lg-3 col-xs-12" >
		<!-- Stepper generico -->
	<ul class="status-stepper status-4step">
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">1</span><span class="stepname">Raccontaci di te</span></span></li>
		<li class="active"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">2</span><span class="stepname">La tua famiglia</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">3</span><span class="stepname">Tu ed il mondo degli investimenti</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">4</span><span class="stepname">Quanto vuoi investire</span></span></li>
	</ul>


	<!-- Fine stepper generico -->
	</div>
	<div class="col-lg-9 col-xs-12" >
		<div class="row">
		    <div class="col-md-12">
		        <h2>La tua famiglia</h2>
		    </div>
		</div>
		<!-- Javascript con framework per gestione errori -->
		<script type="text/javascript" src="/wbresp/js/gaming_style_quest.js"></script>
		<script type="text/javascript">
			$(function(){
				/* Check del form con pulsante */
				$("#btnProsegui").click(function(e){
					e.preventDefault();
					/* Set default: rimozione di tutti gli errori */
					$("#raQuest .boxalert.errore").remove();
					var hasErrors = false;

					if (!questRadioCheck("spese")) {
						questError($("#fbSpese"),"Occorre specificare un valore");
						hasErrors = true;
					}

					/* Gruppo di controlli su "Famiglia" */
					if (!questRadioCheck("partner")) {
						questError($("#fbFamiglia"),"Devi specificare se hai un partner");
						hasErrors = true;
					}
					else
					{
						// Se ha un partner...
						if ($("input[name=partner]:checked").val() == "si") {
							if (!questRadioCheck("lavoropartner")) {
								questError($("#fbFamiglia"),"Devi specificare se il tuo partner lavora");
								hasErrors = true;
							}
						}
					}


					if (hasErrors) {
						// Scrolla sulla prima domanda con errore visibile
						moveToElement($("#raQuest").find(".boxalert.errore").eq(0).parents("section"));
					}
					else
					{
						// Qui, spedizione dei dati ed avanzamento (per noi semplice location.href)
						location.href= "/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step3.php";
					}

				});
			});
		</script>
		<form id="raQuest" class="formGaming">

		<!-- Domanda 1 -->
		<hr>
		<section>
			<div class="row">
			   <div class="col-sm-12 form-section-title">
			        <!-- Domanda -->
			        <div class="row">
						<div class="col-sm-12 form-section-title">Hai delle spese ricorrenti (mutui, prestiti personali, rette universitarie, ..)  in corso?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbSpese"></div>
					<!-- Fine wrapper esito -->

					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="radiowrap">
						            <div class="radio radio-question">
						               <input type="radio" name="spese" id="spese_si" value="si">
						               <label for="spese_si">S&igrave;</label>
						            </div>
						            <div class="radio radio-question">
						               <input type="radio" name="spese" id="spese_no" value="no">
						               <label for="spese_no">No</label>
						            </div>
						        </div>
					        </div>
				        </div>
				    </div>
					<!-- Fine input -->
			    </div>
			</div>
		</section>
		<!-- Fine domanda 1 -->


		<!-- Domanda 2 -->
		<hr>

<script type="text/javascript">

	/* Inizializzazione controlli per configuratore famiglia */
	$(function(){
		var fcCasa = $("#familyConf .casa"),
			lavoroPartner = $("#lavoroPartner");

		var fcPutPersona = function(type, count) {
			var pclass =  "persona " + type;
			// se esiste gia' quel tipo di persona la rimuove 
			fcCasa.find("div[class='"+ pclass +"']").remove();

			var persona = $("<div>").addClass(pclass);
			persona.append($("<img>").attr("src","/wbresp/img/roboadv_persona_"+type+".png").hide().fadeIn(1500))
			
			if (count) {
				// Prepara il badge
				var badge = $("<span>").addClass("badge").html(count);
				persona.append(badge);
			}


			if (type=="partner" || type == "tu" || type=="partner_lavoro") {
				fcCasa.find(".nucleo").append(persona);
			}
			else
			{
				fcCasa.find(".acarico").append(persona);
			}
		}

		var fcRemovePersona = function(type) {
			fcCasa.find(".persona." + type).remove()
		}

		fcPutPersona("tu");

		/* Partner */
		$("#familyConf input[name=partner]").click(function(){
			if($(this).val() == "si") {
				lavoroPartner.fadeIn(500);
			}
			else
			{
				fcRemovePersona("partner");
				fcRemovePersona("partner_lavoro");
				lavoroPartner.hide();
				// Resetta il lavoro
				$("#familyConf input[name=lavoropartner]").attr("checked",false);
			}	
		});

		/* Lavoro del partner */
		$("#familyConf input[name=lavoropartner]").click(function(){
			if($(this).val() == "si") {
				fcRemovePersona("partner");
				fcPutPersona("partner_lavoro");
			}
			else
			{
				fcRemovePersona("partner_lavoro");
				fcPutPersona("partner")
			}	
		});

		/* spinner con familiari aggiunti a carico */
		$("#familyConf .spinner .plusmin").click( function(){

			var spinbtn =  $(this),
				spinner = spinbtn.parents(".spinner"),
				totEls = spinner.find("input").val(),
				personType  = (spinner.attr("data-input-name") == "minoriacarico")? "minore" : "carico",
				dataMin = spinner.attr("data-min"),
				dataMax = spinner.attr("data-max");



			if(!spinbtn.hasClass("min")) {
				if (totEls > dataMin)  fcPutPersona(personType,totEls);
			}
			else
			{
				if (totEls == "0")  
					{ 
						fcRemovePersona(personType,totEls);
					}
				else
				{
					fcPutPersona(personType,totEls);
				}
			}

		});

	});

</script>
		<section>
			<div class="row">
			   <div class="col-sm-12 form-section-title">
			        <!-- Domanda -->
			        <div class="row">
						<div class="col-sm-12 form-section-title">Componi il tuo nucleo famigliare</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->

					<!-- wrapper esito -->
					<div id="fbFamiglia"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div id="familyConf">
						<div class="row">
							<!-- CONFIGURATORE -->
							<div class="col-sm-6 col-xs-12">
								<div class="form-group">
									<!-- TU -->
									<div class="row">
										<div class="col-sm-3 col-xs-4">
											<div class="persona-wrap">
												<img src="/wbresp/img/roboadv_haipartner.png" class="img100">
											</div>
										</div>
										<div class="col-sm-9 col-xs-8">
											<label>Hai un partner?</label>
											<div class="radiowrap">
									            <div class="radio radio-question">
									               <input type="radio" name="partner" id="partner_si" value="si">
									               <label for="partner_si">S&igrave;</label>
									            </div>
									            <div class="radio radio-question">
									               <input type="radio" name="partner" id="partner_no" value="no">
									               <label for="partner_no">No</label>
									            </div>
									        </div>
										</div>
									</div>
									<!-- FINE TU -->
								</div>
								<div class="form-group">
									<!-- LAVORO PARTNER -->
									<div id="lavoroPartner" style="display:none">
										<div class="row">
											<div class="col-sm-3 col-xs-4">
												<div class="persona-wrap">
													<img src="/wbresp/img/roboadv_partnerlavora.png" class="img100">
												</div>
											</div>
											<div class="col-sm-9 col-xs-8">
												<label>Il tuo partner lavora?</label>
												<div class="radiowrap">
										            <div class="radio radio-question">
										               <input type="radio" name="lavoropartner" id="lavoropartner_si" value="si">
										               <label for="lavoropartner_si">S&igrave;</label>
										            </div>
										            <div class="radio radio-question">
										               <input type="radio" name="lavoropartner" id="lavoropartner_no" value="no">
										               <label for="lavoropartner_no">No</label>
										            </div>
										        </div>
											</div>
										</div>
									</div>
									<!-- FINE LAVORO PARTNER -->
								</div>
								<div class="form-group">
									<!-- MINORI A CARICO -->
									<div class="row">
										<div class="col-sm-3 col-xs-4">
											<div class="persona-wrap">
												<img src="/wbresp/img/roboadv_minoricarico.png" class="img100">
											</div>
										</div>
										<div class="col-sm-9 col-xs-8">
											<label>Quanti figli minorenni hai?</label>
											<div class="spinner" data-input-name="minoriacarico" data-min="0" data-max="10">
												<input type="hidden" name="minoriacarico" value="0">
											</div>
										</div>
									</div>
									<!-- FINE MINORI A CARICO -->
								</div>
								<div class="form-group">
									<!-- ADULTI A CARICO -->
									<div class="row">
											<div class="col-sm-3 col-xs-4">
												<div class="persona-wrap">
													<img src="/wbresp/img/roboadv_adulticarico.png" class="img100">
												</div>
											</div>
											<div class="col-sm-9 col-xs-8">
												<label>Quanti adulti a carico hai?</label>
												<div class="spinner" data-input-name="adultiacarico" data-min="0" data-max="10">
												<input type="hidden" name="adultiacarico" value="0">
											</div>
											</div>
										</div>
									<!-- FINE ADULTI A CARICO -->
							    </div>
							</div>

							<!-- FINE CONFIGURATORE -->
							<!-- CASETTA -->
							<div class="col-sm-6 hidden-xs">
								<div class="casa">
									<div class="nucleo"></div>
									<div class="acarico"></div>
								</div>
							</div>
							<!-- FINE CASETTA -->
						</div>
					
						<!-- Fine input -->
					</div>
			    </div>
			</div>
		</section>
		<!-- Fine domanda 2 -->
		<hr>

	</form>

		<!-- Pulsante "prosegui" -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<button class="btn-whlit btn-whlit-arrowleft fleft uppercase" onclick="parent.location.href='/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step1.php'">indietro</button>
				<button id="btnProsegui" class="btn-grlit btn-grlit-arrow fright uppercase">prosegui</button>
			</div>
		</div>
		<!-- Fine pulsante "prosegui" -->
	</div>
</div>

