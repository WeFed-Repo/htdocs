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

<section>
<!-- Form selezione carta -->
<form method="POST" action="#">
	<h3 class="titleSection titleForm">Riepilogo ricarica manuale</h3>
	<div class="formWrapper"> 
		
		<!-- RIEPILOGO DATI -->
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Conto di addebito</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">000000000/321/1</span></span>
			        </div>
		       	</div>
		       	<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Saldo del conto</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">999.999.999,99 EUR</span></span>
			        </div>
		       	</div>
		    </div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Intestazione carta</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">Mario Rossi Verdi Bianchi</span></span>
			        </div>
		       	</div>
		       	<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Numero carta</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">0000000000000</span></span>
			        </div>
		       	</div>
		    </div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Importo ricarica</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">999,99 EUR</span></span>
			        </div>
		       	</div>
		       <div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Costo ricarica</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">9,99 EUR</span></span>
			        </div>
		       	</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">       	
		       	  <div class="col-sm-6 col-xs-12">
			      	<div class="row">
			            <span class="col-xs-6" id=""><label class="control-label">Commissioni</label></span>
			            <span class="col-xs-6 alignRight" id=""><span class="resume">9,99 EUR</span></span>
			        </div>
		       	</div>
		    </div>
		</div>

		<!-- Fine riepilogo dati -->

		<hr>

		<h3 class="titleSection">Vuoi lorem ipsum dolor sit amet consectetur?</h3>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12 form-field-input">
					<label class="control-label">E-mail beneficiario</label>
					<div class="form-field">
		               <input type="text" name="" class="form-control">             
	                </div>
				</div>
			</div>
			<div class="row">
				<div class="form-field-input col-xs-12 col-sm-6">
					<script>
						/* Esempio di automazione legata al checkbox*/
						$(function(){
							$("input[name=regalo]").change(function(){
								$("#regaloForm").toggle($($(this).is(":checked")));
							})

						});

					</script>
					<label>
	                   <input type="checkbox" name="regalo" value="yes">La ricarica &egrave; un regalo
	                </label>
				</div>
			</div>
		</div>

			
		<div id="regaloForm" style="display:none">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 col-xs-12 form-field-input">
						<label class="control-label">Di che regalo si tratta?</label>
						<div class="form-field">
			               <select name="" class="form-control">             
		                      <option selected="selected" value="">Seleziona</option>
		                      <option value="1">Regalo di Natale</option>
		                      <option value="2">Regalo di compleanno</option>
		                      <option value="3">Item3</option>
		                   </select>
	          			</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 col-xs-12 form-field-input">
						<label class="control-label">Messaggio per il beneficiario (Max 200 caratteri)</label>
						<div class="form-field">
			               <textarea name="messaggio" id="messaggio" value="" class="form-control clear-x" maxlength="200" style="height:100px"></textarea>
	          			</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</form>
<!-- Fine form selezione carta -->

<!-- Pulsantiera -->

<div class="form-group btnWrapper">
	<?php if($site==="webank") {?> <div class="stepBtn">Step <strong>2</strong> di 2</div><?php } ?>
   <div class="btn-align-right">
      <a type="button" href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale_esito.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" class="btn btn-primary" title="Esegui ricarica">Esegui ricarica</a>
  </div>
  <br class="clear">
</div>
<!-- Fine pulsantiera -->
</section>