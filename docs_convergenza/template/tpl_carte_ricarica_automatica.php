<h2>Ricarica</h2>
<!-- Tab tipo ricarica -->
<div class="section outerWrapperTab no-backgr clearfix">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica manuale" role="button">Manuale</a></li>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica automatica" role="button">Automatica</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tab tipo ricarica -->
<br class="clear">

<!-- Testo introduttivo -->
<p>Puoi impostare <strong>una sola tipologia di ricarica per volta, solo su carte a te intestate</strong>.</p>

<!-- Stepper -->



<!-- Fine stepper YouWeb -->

<section>
<!-- Form selezione carta -->
<form method="POST" action="#">
	<h3 class="titleSection titleForm">La tua carta</h3>
	<div class="formWrapper" id="formSelCarta">
		<div class="form-group">
			<div class="row">
				<div class="form-field-input col-xs-12 noMargBottom-yw">
					<script>
					// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
					$(function() {
						$("#spselCartaSel").spSel(
							function() {
								// Esempio di callback
								$("#formSelCarta").addClass("loading");
								// Ricompilare qui i dati di output acquisiti ad esempio da una chiamata in AJAX
								// es per vedere il valore selezionato: console.log($("input[name=spselCarta]").val())
								setTimeout(function(){$("#formSelCarta").removeClass("loading");},500);
							}
						);
					});
					</script>
					<div class="spsel nosel" id="spselCartaSel" placeholder="Seleziona...">
						<input type="hidden" name="spselCarta" value="9999029312933210">
						<div class="spsel-options">
							<div class="spsel-option" data-value="9999029312933210">
								<a class="spsel-option-el">
									Numero carta <span class="only-detail">Prepaid </span>9999 0293 1293 3210<span class="only-detail"><br>Mario Rossi Palmieri<br>999.999,99 EUR</span>
								</a>
							</div>
							<div class="spsel-option" data-value="9999029312933110">
								<a class="spsel-option-el">
									Numero carta <span class="only-detail">Prepaid </span>9999 0293 1293 3110<span class="only-detail"><br>Pippo Rossi, Domenica Verdi<br>999.999,99 EUR</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- OUTPUT DATI CARTA -->
		<div class="bordered-you">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="row">
			              <span class="col-xs-6" id=""><label class="control-label">Intestatario:</label></span>
			              <span class="col-xs-6 alignRight" id=""><span class="resume">1,00</span></span>
			            </div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="row">
			             <span class="col-xs-6" id=""><label class="control-label">Saldo disp.:</label></span>
			              <span class="col-xs-6 alignRight" id=""><span class="resume">9.999.999,99 EUR</span></span>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<!-- FINE OUTPUT DATI CARTA -->
	

		<!-- SELEZIONE TIPO DI RICARICA -->

		<!-- RADIO TEMPO -->
		<script>	

			// Esempio automazioni form (solo mobile)
			$(function(){

				$("input[name=tiporicarica").click(function(){
					$("#formRadioTempo,#formRadioSoglia,#formRadioReale").addClass("hidden-xs");
					switch($(this).val()) {

						case "tempo":
							$("#formRadioTempo").removeClass("hidden-xs");
							break;

						case "soglia":
							$("#formRadioSoglia").removeClass("hidden-xs");
							break;	

						case "reale":
							$("#formRadioReale").removeClass("hidden-xs");
							break;	
					}
				});

			});

		</script>

		<!-- radio btn -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="input-rcb-inline">
	                   <input type="radio" name="tiporicarica" value="tempo">
	                   <span class="input-rcb-text">
	                   		<strong>Ricarica a tempo</strong><br>
							Puoi scegliere con che periodicit&agrave; effettuare le ricariche automatiche.
						</span>
	                </label>
				</div>
			</div>
		</div>
		<!-- fine radio btn -->
		<!-- form associato al radio btn -->
		<div id="formRadioTempo" class="hidden-xs input-rcb-form ">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Importo</label>
						<div class="form-field">
	                        <input type="text" name=""value="" class="form-control clear-x input-required" placeholder="0,0">
	                    </div>
					</div>
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Giorno del mese</label>
						<div class="form-field">
			               <select name="" class="form-control">             
		                      <option selected="selected" value="">Seleziona</option>
		                      <option value="1">1&deg; giorno del mese</option>
		                      <option value="1">10&deg; giorno del mese</option>
		                      <option value="1">20&deg; giorno del mese</option>
		                   </select>
	          			</div>
					</div>
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Conto di addebito</label>
						<script>
						// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
						$(function() {
							$("#spselContoSel").spSel();
						});
						</script>
						<div class="spsel nosel" id="spselContoSel" placeholder="Seleziona...">
							<input type="hidden" name="spselConto">
							<div class="spsel-options">
								<div class="spsel-option" data-value="999932109/12">
									<a class="spsel-option-el">Conto 999932109/12<span class="only-detail"><br>Intestato a: Rosa Rossi 321<br>Saldo: 302,33</span></a>
								</div>
								<div class="spsel-option" data-value="999932109/13">
									<a class="spsel-option-el">Conto 999932109/13<span class="only-detail"><br>Intestato a: Mario Rossi 321<br>Saldo: 312,33</span></a>
								</div>
								<div class="spsel-option" data-value="999932109/14">
									<a class="spsel-option-el">Conto 999932109/14<span class="only-detail"><br>Intestato a: Alfonso Rossi 321<br>Saldo: 7652,33</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fine form associato al radio btn -->
		



		<!-- radio btn -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="input-rcb-inline">
	                   <input type="radio" name="tiporicarica" value="soglia">
	                   <span class="input-rcb-text">
	                   		<strong>Ricarica a soglia</strong><br>
							Ricarica la carta se il credito &egrave; inferiore alla soglia sottoindicata e fino al raggiungimento del saldo sottoindicato. Puoi indicare un numero massimo di ricariche al mese.
						</span>
	                </label>
				</div>
			</div>
		</div>
		<!-- fine radio btn -->
		<!-- form associato al radio btn -->
		<div id="formRadioSoglia" class="input-rcb-form hidden-xs">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Soglia minima</label>
						<div class="form-field">
	                        <input type="text" name=""value="" class="form-control clear-x input-required" placeholder="0,0">
	                    </div>
					</div>
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Saldo massimo</label>
						<div class="form-field">
	                        <input type="text" name=""value="" class="form-control clear-x input-required" placeholder="0,0">
	                    </div>
					</div>
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Ricariche al mese</label>
						<div class="form-field">
	                        <input type="text" name=""value="" class="form-control clear-x input-required" placeholder="Numero massimo">
	                    </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">		
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Conto di addebito</label>
						<script>
						// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
						$(function() {
							$("#spselContoSel2").spSel();
						});
						</script>
						<div class="form-field">
							<div class="spsel nosel" id="spselContoSel2" placeholder="Seleziona...">
								<input type="hidden" name="spselConto2">
								<div class="spsel-options">
									<div class="spsel-option" data-value="999932109/12">
										<a class="spsel-option-el">Conto 999932109/12<span class="only-detail"><br>Intestato a: Rosa Rossi 321<br>Saldo: 302,33</span></a>
									</div>
									<div class="spsel-option" data-value="999932109/13">
										<a class="spsel-option-el">Conto 999932109/13<span class="only-detail"><br>Intestato a: Mario Rossi 321<br>Saldo: 312,33</span></a>
									</div>
									<div class="spsel-option" data-value="999932109/14">
										<a class="spsel-option-el">Conto 999932109/14<span class="only-detail"><br>Intestato a: Alfonso Rossi 321<br>Saldo: 7652,33</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fine form associato al radio btn -->
		


		<!-- radio btn -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="input-rcb-inline">
	                   <input type="radio" name="tiporicarica" value="reale">
	                   <span class="input-rcb-text">
	                   		<strong>Ricarica in tempo reale</strong><br>
 							Indipendentemente dal saldo presente sulla carta, questa funzione genera una ricarica immediata dell'importo che stai spendendo in negozio/online.
						</span>
	                </label>
				</div>
			</div>
		</div>
		<!-- fine radio btn -->
		<!-- form associato al radio btn -->
		<div id="formRadioReale" class="hidden-xs input-rcb-form ">
			<div class="form-group">
				<div class="row">		
					<div class="col-sm-4 col-xs-12 form-field-input">
						<label class="control-label">Conto di addebito</label>
						<script>
						// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
						$(function() {
							$("#spselContoSel3").spSel();
						});
						</script>
						<div class="spsel nosel" id="spselContoSel3" placeholder="Seleziona...">
							<input type="hidden" name="spselConto3">
							<div class="spsel-options">
								<div class="spsel-option" data-value="999932109/12">
									<a class="spsel-option-el">Conto 999932109/12<span class="only-detail"><br>Intestato a: Rosa Rossi 321<br>Saldo: 302,33</span></a>
								</div>
								<div class="spsel-option" data-value="999932109/13">
									<a class="spsel-option-el">Conto 999932109/13<span class="only-detail"><br>Intestato a: Mario Rossi 321<br>Saldo: 312,33</span></a>
								</div>
								<div class="spsel-option" data-value="999932109/14">
									<a class="spsel-option-el">Conto 999932109/14<span class="only-detail"><br>Intestato a: Alfonso Rossi 321<br>Saldo: 7652,33</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fine form associato al radio btn -->



	</div>
	<!-- Fine conto di addebito -->

</form>
<!-- Fine form selezione carta -->

<!-- Pulsantiera -->

<div class="form-group btnWrapper clearfix">
   <?php if($site==="webank") {?> <div class="stepBtn">Step <strong>1</strong> di 2</div><?php } ?>
   <div class="btn-align-right">
      <a type="button" href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica_riepilogo.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" class="btn btn-primary" title="prosegui">prosegui</a>
  </div>
  <br class="clear">
</div>
<!-- Fine pulsantiera -->
</section>