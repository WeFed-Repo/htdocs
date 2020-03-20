<!-- Fine framework gestione errori -->
<div class="row">
	<div class="col-lg-3 col-xs-12" >

	<!-- Stepper generico -->
	<ul class="status-stepper status-4step">
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">1</span><span class="stepname">Raccontaci di te</span></span></li>
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">2</span><span class="stepname">La tua famiglia</span></span></li>
		<li class="completed"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">3</span><span class="stepname">Tu ed il mondo degli investimenti</span></span></li>
		<li class="active"><span class="stepwrap"><span class="step"><span></span></span></span><span class="namewrap"><span class="number">4</span><span class="stepname">Quanto vuoi investire</span></span></li>
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


				/* Interazioni sul form */
				/* Blocco versamenti */
				var vImp = $("#versamentiImporto");
				$("input[name=versamenti]").click(function(){
					if ($(this).val() == "si") {
						vImp.slideDown();
					}
					else
					{
						vImp.slideUp();
						vImp.find("input").val("");
					}
				});

				/* Controlli sull'immissione dei dati */
				var allowedImporto = "0123456789";
				$("#raQuest input[name=importo], #raQuest input[name=versamentoMensile]").on("keyup",function(){
					var val = "";
					$.each($(this).val().split(""),function(i,v){
						if(allowedImporto.indexOf(v)>=0) val = val + v;
					});
					$(this).val(val);
				});


				/* Check del form con pulsante */
				$("#btnProsegui").click(function(e){
					e.preventDefault();
					/* Set default: rimozione di tutti gli errori */
					$("#raQuest .boxalert.errore").remove();
					var hasErrors = false;

					/* Domanda Importo */
					var importoVal = $("input[name=importo]").val();
					if (importoVal.length==0) {
						questError($("#fbImporto"),"Occorre specificare un importo valido");
						hasErrors = true;
					}
					else
					{
						// inserire qui i controlli relativi all'importo
						if (parseFloat(importoVal)<100) {
							questError($("#fbImporto"),"Non &egrave; possibile investire meno di 100 euro");
							hasErrors = true;
						}
					}
					
					/* Domanada versamenti */
					if (!questRadioCheck("versamenti")) {
						questError($("#fbVersamenti"),"Occorre specificare un valore");
						hasErrors = true;
					}

					if (hasErrors) {
						// Scrolla sulla prima domanda con errore visibile
						moveToElement($("#raQuest").find(".boxalert.errore").eq(0).parents("section"));
					}
					else
					{
						// Qui, spedizione dei dati ed avanzamento (per noi semplice location.href)
						location.href= "/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_profile.php";
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
						<div class="col-sm-12 form-section-title">Indica l'importo che vorresti investire</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->

					<!-- wrapper esito -->
					<div id="fbImporto"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="input-group">
      								<input type="text" class="form-control" name="importo" maxlength="9" pattern="[0-9]">
      								<div class="input-group-addon">&euro;</div>
      							</div>
							</div>
						</div>
				    </div>
					<!-- Fine input -->
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
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
						<div class="col-sm-12 form-section-title">Prevedi di incrementare l'investimento iniziale indicato con versamenti mensili?</div>
					</div>
					<div class="spacer-no-border hidden-xs">&nbsp;</div>
					<!-- Fine domanda -->
					
					<!-- wrapper esito -->
					<div id="fbVersamenti"></div>
					<!-- Fine wrapper esito -->
					
					<!-- Input -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
					            <div class="radio radio-question">
					               <input type="radio" name="versamenti" id="versamenti1" value="si">
					               <label for="versamenti1">Si</label>
					            </div>
				    			<div class="row" id="versamentiImporto" style="display:none">
							        <div class="col-xs-12 col-sm-6">
							          	<div class="input-group">
			  								<input type="text" class="form-control" name="versamentoMensile" pattern= "[0-9]" maxlength="9">
			  								<div class="input-group-addon">&euro; al mese</div>
			  							</div>
			  							<div class="spacer-no-border hidden-xs">&nbsp;</div>
			  						</div>
		  						</div>
			  		            <div class="radio radio-question">
					                <input type="radio" name="versamenti" id="versamenti2" value="no">
					                <label for="versamenti2">No</label>
					            </div>
					        </div>
				        </div>
				    </div>
					<!-- Fine input -->
			    </div>
			</div>
		</section>
		<!-- Fine domanda 2 -->

		
		<hr>
	</form>

		<!-- Pulsante "prosegui" -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<button class="btn-whlit btn-whlit-arrowleft fleft uppercase" onclick="parent.location.href='/connect.php?page=strutt_wbresp.php&tpl=wbresp_roboadv_full_step3.php'">indietro</button>
				<button id="btnProsegui" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">prosegui</button>
			</div>
		</div>
		<!-- Fine pulsante "prosegui" -->
	</div>
</div>

