<!-- Fine framework gestione errori -->
<div class="row">
	<div class="col-lg-3 col-xs-12" >
		<!-- Stepper generico -->
	<ul class="status-stepper status-4step">
		<li class="active"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">1</span><span class="stepname">Raccontaci di te</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">2</span><span class="stepname">La tua famiglia</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">3</span><span class="stepname">Tu ed il mondo degli investimenti</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">4</span><span class="stepname">Quanto vuoi investire</span></span></li>
	</ul>


	<!-- Fine stepper generico -->
	</div>
	<div class="col-lg-9 col-xs-12" >
		<div class="row">
		    <div class="col-md-12">
		        <h2>Raccontaci di te</h2>
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

					if (!questRadioCheck("eta")) {
						questError($("#fbEta"),"Occorre specificare un valore");
						hasErrors = true;
					}

					/* Domanda Occupazione */
					if ($("input[name=occupazione]").val().length==0) {
						questError($("#fbOccupazione"),"Occorre selezionare un'occupazione");
						hasErrors = true;
					}
					
					/* Domanada Frequenza */
					if (!questRadioCheck("frequenza")) {
						questError($("#fbFrequenza"),"Occorre specificare un valore");
						hasErrors = true;
					}

					if (hasErrors) {
						// Scrolla sulla prima domanda con errore visibile
						moveToElement($("#raQuest").find(".boxalert.errore").eq(0).parents("section"));
					}
					else
					{
						// Qui, spedizione dei dati ed avanzamento (per noi semplice location.href)
						location.href= "/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step2.php";
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
						<div class="col-sm-12 form-section-title">A quale fascia d'et&agrave; appartieni?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbEta"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="radiowrap">
						            <div class="radio radio-question">
						               <input type="radio" name="eta" id="eta_18-25" value="18-25">
						               <label for="eta_18-25">18-25</label>
						            </div>
						            <div class="radio radio-question">
						               <input type="radio" name="eta" id="eta_26-35" value="26-35">
						               <label for="eta_26-35">26-35</label>
						            </div>
						            <div class="radio radio-question">
						               <input type="radio" name="eta" id="eta_36-50" value="36-50">
						               <label for="eta_36-50">36-50</label>
						            </div>
						              <div class="radio radio-question">
						               <input type="radio" name="eta" id="eta_51-65" value="51-65">
						               <label for="eta_51-65">51-65</label>
						            </div>
						            <div class="radio radio-question">
						               <input type="radio" name="eta" id="eta_over65" value="over65">
						               <label for="eta_over65">&gt; 65</label>
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
		<section>
			<div class="row">
			   <div class="col-sm-12 form-section-title">
			        <!-- Domanda -->
			        <div class="row">
						<div class="col-sm-12 form-section-title">Qual &egrave; la tua occupazione?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->

					<!-- wrapper esito -->
					<div id="fbOccupazione"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="selector-wrap selector-quest" data-input-type="radio" data-input-name="occupazione">
					                <input name="occupazione" type="hidden" value="">
					                <div class="selector-scrollable">
						                <div class="selector-box" data-value="1">
					                        <div class="imgwrap"><img src="/wbresp/img/roboadv/roboadv_sel_studente_off.png" class="off"><img src="/wbresp/img/roboadv/roboadv_sel_studente_on.png" class="on"></div>
					                        <span class="definition">Studente</span>
					                    </div>
					                    <div class="selector-box" data-value="2">
					                        <div class="imgwrap"><img src="/wbresp/img/roboadv/roboadv_sel_disoccupato_off.png" class="off"><img src="/wbresp/img/roboadv/roboadv_sel_disoccupato_on.png" class="on"></div>
					                        <span class="definition">Disoccupato</span>
					                    </div>
					                    <div class="selector-box" data-value="3">
					                        <div class="imgwrap"><img src="/wbresp/img/roboadv/roboadv_sel_liberoprof_off.png" class="off"><img src="/wbresp/img/roboadv/roboadv_sel_liberoprof_on.png" class="on"></div>
					                        <span class="definition">Lav. autonomo o libero prof.</span>
					                    </div>
					                    <div class="selector-box" data-value="4">
					                       <div class="imgwrap"><img src="/wbresp/img/roboadv/roboadv_sel_dipendente_off.png" class="off"><img src="/wbresp/img/roboadv/roboadv_sel_dipendente_on.png" class="on"></div>
					                        <span class="definition">Lavoratore dipendente</span>
					                    </div>
					                    <div class="selector-box " data-value="5">
					                        <div class="imgwrap"><img src="/wbresp/img/roboadv/roboadv_sel_pensionato_off.png" class="off"><img src="/wbresp/img/roboadv/roboadv_sel_pensionato_on.png" class="on"></div>
					                        <span class="definition">Pensionato</span>
					                    </div>
					                </div>
					            </div>	
							</div>
						</div>
				    </div>
					<!-- Fine input -->
			    </div>
			</div>
		</section>
		<!-- Fine domanda 2 -->
		<!-- Domanda 3 -->
		<hr>
		<section>
			<div class="row">
			   <div class="col-sm-12 form-section-title">
			        <!-- Domanda -->
			        <div class="row">
						<div class="col-sm-12 form-section-title">Con che frequenza investi in strumenti finanziari?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbFrequenza"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
					            <div class="radio radio-question">
					               <input type="radio" name="frequenza" id="frequenza1" value="1">
					                <label for="frequenza1">Non ho mai investito</label>
					            </div>
					            <div class="radio radio-question">
					                <input type="radio" name="frequenza" id="frequenza2" value="2">
					                <label for="frequenza2">Investo saltuariamente</label>
					            </div>
					             <div class="radio radio-question">
					                <input type="radio" name="frequenza" id="frequenza3" value="3">
					               <label for="frequenza3">Investo con regolarit&agrave;</label>
					            </div>
					        </div>
				        </div>
				    </div>
					<!-- Fine input -->
			    </div>
			</div>
		</section>
		<!-- Fine domanda 3 -->
		<hr>
	</form>

		<!-- Pulsante "prosegui" -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<button id="btnProsegui" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">prosegui</button>
			</div>
		</div>
		<!-- Fine pulsante "prosegui" -->
	</div>
</div>

