<h2>Ricarica</h2>
<!-- Tab tipo ricarica -->
<div class="section outerWrapperTab no-backgr clearfix">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica manuale" role="button">Manuale</a></li>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica automatica" role="button">Automatica</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>

<!-- Fine tab tipo ricarica -->
<br class="clear">

<!-- Stepper YouWeb-->
<div class="pager clearfix pull-right">
	<div class="circle_line">&nbsp;</div>
	<div class="circle current_page">&nbsp;</div>
	<div class="circle ">&nbsp;</div>
</div>
<!-- Fine stepper YouWeb -->
<!-- Testo introduttivo -->
<p>Puoi ricaricare fino a un massimo di <strong>X,XX &euro;</strong>. L'importo sarà disponibile entro le successive 24 ore.</p>


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
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12 form-field-input">
					<label class="control-label">Carta da ricaricare</label>
					<div class="form-field">
		               <select name="" class="form-control">             
	                      <option selected="selected" value="">Seleziona</option>
	                      <option value="1">Item1</option>
	                      <option value="2">Item2</option>
	                      <option value="3">Item3</option>
	                   </select>
          			</div>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12 form-field-input">
					<label class="control-label">Conto di addebito</label>
					<script>
					// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
					$(function() {
						$("#spselContoSel").spSel(
							function() {
								// Esempio di callback
								$("#formSelCarta").addClass("loading");
								// Ricompilare qui i dati di output acquisiti ad esempio da una chiamata in AJAX
								// es per vedere il valore selezionato: console.log($("input[name=spselCarta]").val())
								$("#formSelCarta").removeClass("loading");
							}
						);
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
				<div class="col-sm-6 col-xs-12 form-field-input">
					<label class="control-label">Importo da ricaricare</label>
					<div class="form-field">
                        <input type="text" name=""value="" class="form-control clear-x input-required" placeholder="0,0">
                    </div>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- Fine form selezione carta -->

<!-- Pulsantiera -->

<div class="form-group btnWrapper">
	<?php if($site==="webank") {?> <div class="stepBtn">Step <strong>1</strong> di 2</div><?php } ?>
   <div class="btn-align-right">
      <a type="button" href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale_riepilogo.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" class="btn btn-primary" title="prosegui">prosegui</a>
  </div>
  <br class="clear">
</div>
<!-- Fine pulsantiera -->
</section>