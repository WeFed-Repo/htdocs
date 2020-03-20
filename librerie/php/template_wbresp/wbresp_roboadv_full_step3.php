<!-- Fine framework gestione errori -->
<div class="row">
	<div class="col-lg-3 col-xs-12" >
		<!-- Stepper generico -->
	<ul class="status-stepper status-4step">
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">1</span><span class="stepname">Raccontaci di te</span></span></li>
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">2</span><span class="stepname">La tua famiglia</span></span></li>
		<li class="active"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">3</span><span class="stepname">Tu ed il mondo degli investimenti</span></span></li>
		<li class=""><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">4</span><span class="stepname">Quanto vuoi investire</span></span></li>
	</ul>


	<!-- Fine stepper generico -->
	</div>
	<div class="col-lg-9 col-xs-12" >
		<div class="row">
		    <div class="col-md-12">
		        <h2>Tu ed il mondo degli investimenti</h2>
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

					/* Domanda Scenario */
					if ($("input[name=scenario]").val().length==0) {
						questError($("#fbScenario"),"Occorre selezionare uno degli scenari proposti");
						hasErrors = true;
					}
					
					/* Domanada Perdita */
					if (!questRadioCheck("perdita")) {
						questError($("#fbPerdita"),"Occorre specificare un valore");
						hasErrors = true;
					}

					/* Domanada Termine */
					if (!questRadioCheck("termine")) {
						questError($("#fbTermine"),"Occorre specificare un valore");
						hasErrors = true;
					}

					if (hasErrors) {
						// Scrolla sulla prima domanda con errore visibile
						moveToElement($("#raQuest").find(".boxalert.errore").eq(0).parents("section"));
					}
					else
					{
						
						// EMULAZIONE DEL WARNING
						var fbTermineWarn = $("#fbTermineWarning");
						if (fbTermineWarn.is(":visible")) {
							// Qui, spedizione dei dati ed avanzamento (per noi semplice location.href)
							location.href= "/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step4.php";
						} 
						else
						{
						fbTermineWarn.fadeIn(500);
						moveToElement(fbTermineWarn);
						}
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
						<div class="col-sm-12 form-section-title">Se dovessi investire oggi, per un anno, 10.000Euro in strumenti finanziari, quale scenario preferiresti?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->

					<!-- wrapper esito -->
					<div id="fbScenario"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<div class="selector-wrap" data-input-type="radio" data-input-name="scenario" id="scenario">
					                <input name="scenario" type="hidden" value="">
					                <div class="selector-scrollable">
						                <div class="selector-box" data-value="1">
						                	<img src="/wbresp/img/roboadv_guadagni_1_off.png">
						                	<img src="/wbresp/img/roboadv_guadagni_1_on.png" class="selected">
					                        <span class="definition">
					                        	<span class="rendita positivo">
					                        		Guadagno<br><strong>150 &euro;</strong>
					                       		</span>
					                        	<hr>
					                        	<span class="rendita negativo">
					                        		Perdita<br><strong>50 &euro;</strong></span>
					                       		</span>
					                        </span>	
					                    </div>
					                    <div class="selector-box" data-value="2">
					                    	<img src="/wbresp/img/roboadv_guadagni_2_off.png">
					                    	<img src="/wbresp/img/roboadv_guadagni_2_on.png" class="selected">
					                        <span class="definition">
					                        	<span class="rendita positivo">
					                        		Guadagno<br><strong>500 &euro;</strong>
					                       		</span>
					                        	<hr>
					                        	<span class="rendita negativo">
					                        		Perdita<br><strong>200 &euro;</strong></span>
					                       		</span>
					                        </span>	
					                    </div>
					                    <div class="selector-box" data-value="3">
					                    	<img src="/wbresp/img/roboadv_guadagni_3_off.png">
					                    	<img src="/wbresp/img/roboadv_guadagni_3_on.png" class="selected">
											 <span class="definition">
					                        	<span class="rendita positivo">
					                        		Guadagno<br><strong>1000 &euro;</strong>
					                       		</span>
					                        	<hr>
					                        	<span class="rendita negativo">
					                        		Perdita<br><strong>450 &euro;</strong></span>
					                       		</span>
					                        </span>	
					                    </div>
					                    <div class="selector-box" data-value="4">
					                    	<img src="/wbresp/img/roboadv_guadagni_4_off.png">
					                    	<img src="/wbresp/img/roboadv_guadagni_4_on.png" class="selected">
					                    	<span class="definition">
					                        	<span class="rendita positivo">
					                        		Guadagno<br><strong>1500 &euro;</strong>
					                       		</span>
					                        	<hr>
					                        	<span class="rendita negativo">
					                        		Perdita<br><strong>900 &euro;</strong></span>
					                       		</span>
					                        </span>	
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
		<!-- Fine domanda 1 -->

		<!-- Domanda 2 -->
		<hr>
		<section>
			<div class="row">
			   <div class="col-sm-12 form-section-title">
			        <!-- Domanda -->
			        <div class="row">
						<div class="col-sm-12 form-section-title">I mercati finanziari possono attraversare periodi di forti variazioni: cosa faresti se il tuo investimento perdesse il 10% in un mese?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbPerdita"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
					            <div class="radio radio-question">
					               <input type="radio" name="perdita" id="perdita1" value="1">
					                <label for="perdita1">Liquido tutto l'ìnvestimento</label>
					            </div>
					            <div class="radio radio-question">
					                <input type="radio" name="perdita" id="perdita2" value="2">
					                <label for="perdita2">Liquido solo la parte in perdita</label>
					            </div>
					             <div class="radio radio-question">
					                <input type="radio" name="perdita" id="perdita3" value="3">
					               <label for="perdita3">Non faccio nulla</label>
					            </div>
					             <div class="radio radio-question">
					                <input type="radio" name="perdita" id="perdita4" value="4">
					               <label for="perdita4">Acquisto ancora a prezzi più bassi</label>
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
						<div class="col-sm-12 form-section-title">Preferiresti fare un investimento...</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbTermine"></div>
					<!-- Fine wrapper esito -->
					
					<!-- wrapper warning -->
					<div id="fbTermineWarning" style="display:none">
						<div class="boxalert attenzione" style="display: block;">
							<div class="boxcont">
								<p>Hai fornito una risposta incoerente rispetto alle altre.<br>
									Controlla le opzioni disponibili per proseguire</p>
							</div>
						</div>
					</div>
					<!-- fine wrapper warning -->


					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
					            <div class="radio radio-question">
					               <input type="radio" name="termine" id="termine1" value="1">
					                <label for="termine1">A breve termine (fino a 2 anni), per far fronte ad emergenze e spese impreviste</label>
					            </div>
					            <div class="radio radio-question">
					                <input type="radio" name="termine" id="termine2" value="2">
					                <label for="termine2">A medio termine (da 2 a 5 anni), per realizzare progetti (es. viaggi, acquisto auto nuova)</label>
					            </div>
					             <div class="radio radio-question">
					                <input type="radio" name="termine" id="termine3" value="3">
					               <label for="termine3">A lungo periodo (da 5 anni in su), per incrementare il capitale investito per raggiungere specifici obiettivi (es. studio dei figli, acquisto della casa, integrazione pensione o reddito)</label>
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
				<button class="btn-whlit btn-whlit-arrowleft fleft uppercase" onclick="parent.location.href='/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step2.php'">indietro</button>
				<button id="btnProsegui" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">prosegui</button>
			</div>
		</div>
		<!-- Fine pulsante "prosegui" -->
	</div>
</div>

