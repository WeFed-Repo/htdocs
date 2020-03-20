
<script>
			function inizializzaFormSamsungPay() {	
				$('#inputSamsungPay div.ui-slider').each(function(){$(this).remove();})
					$('#samsungSlider').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#samsungSafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(0);}		        	
				        	else if (ui.value==1){attivaOn(0);}
				        	showStatus(ui.value);
				        }
				    }});
				    var selectedValue = $('#samsungSlider').val();
				    if (selectedValue=='S'){attivaOn(0);}
					else if (selectedValue=='N'){attivaOff(0);}
				
			}
	
			function attivaOn(id) {
				$('#samsungSlider').val('S');
				
			}
	
			function attivaOff(id) {
				$('#samsungSlider').val('N');
			}
			function showStatus(Svalue) {
				
				var msg = '';
				if(Svalue===0) {
					msg ='La tua carta di debito &egrave; sospesa<br><br> I pagamenti con lo smartphone e Samsung Pay non saranno piu&grave; possibili con questa carta su tutti i sipositivi associati';
					$('#inputSamsungPay').find('.stato').html('Sospeso');
					$('#samsungDialog').find('.modal-body').html('').append('<p>' + msg + '</p>');
					$('#samsungDialog').modal('show');
				}
				else {
					$('#inputSamsungPay').find('.stato').html('Attivo');
				}
				
}
 			$(document).ready(function() {
 				inizializzaFormSamsungPay();
 			});
</script>
<section>
		<div class="titolo">
			<h1>
				<div class="row">
					<div class="col-sm-8">
						<span>Lorem ipsum</span>
				 	</div>
				 </div>
			</h1>
		</div>
		<p>
			È possibile sospendere la carta di debito se non desideri utilizzare l'app Samsung Pay come mezzo di pagamento.<br>
			In caso di perdita o furto del tuo smartphone, hai la possibilità di sospendere il servizio con il tuo accesso web.</p>
		<p>La carta di debito verrà sospesa su tutti i dispositivi.</p>
</section>
<section>
	
	<div class="borderFormRoundedWrapper">
		<h3 class="titleSection">La tua carta:</h3>
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
			<div class="row">
					<div class="form-field-input col-xs-12">
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
		</div>

		<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row">
			 	<div class="col-sm-6">	
					<label class="control-label-output">Intestatario</label>
					<span class="output">Lorem ipsum dolo</span>
				</div>
				<div class="col-sm-6">	
					<label class="control-label-output">Filiale</label>
					<span class="output">Lorem ipsum dolo</span>
				</div>	
				<div class="col-sm-6">	
					<label class="control-label-output">Tipo carta</label>
					<span class="output">Lorem ipsum dolo</span>
				</div>
							
			</div>
		</div>
	</form>
</section>
<section>
	<div class="box-border">
		<div class="row">
			<div class="col-sm-12">
				<div class="testoIcona">
					<span><i class="icon icon-cellulare fLeft" title="dispositivo associato alla carta"></i></span>
					<div class="leftTesto glifiLeftText">
						<h3>Samsung S10</h3>
						<p>Dispositivo associato il <span>11/04/2019</span></p>
					</div>
				</div>		
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="testoIcona">
					<span><i class="icon icon-cellulare fLeft" title="dispositivo associato alla carta"></i></span>
					<div class="leftTesto glifiLeftText">
						<h3>Samsung S9</h3>
						<p>Dispositivo associato il <span>28/02/2019</span></p>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<div class="switch-dispositivo">
			<span class="divForm boxContent slider-on-off" id="inputSamsungPay" style="">
				<div class="right-on-off">
					Stato Samsung Pay: <span class="stato">Attivo </span>
					<select name="parametriFamilySafe[0].flagAbilitazione" id="samsungSlider" style="display: none;"><option value="N">Off</option>
					<option value="S" selected="selected" class="attivo">On</option></select>
				</div>
				<input type="hidden" name="parametriSamsungSafe[0].codFamiglia" value="01" />
				<input type="hidden" name="parametriSamsungSafe[0].descFamiglia" value="Giochi e scommesse" />
			</span>
		
	</div>
</section>
 <div id="samsungDialog" class="modal fade helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	 <div class="modal-dialog">
	    <div class="modal-content">
	       <div class="modal-header clearfix">
	       	  <div class="riquadro"><h1>Samsung Pay</h1></div>
	          <button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       </div>
	       <div class="modal-body">
	       </div>
	        <div class="modal-foot">
	        	<section>
				  <div class="form-group btnWrapper">
				      <div class="btn-align-center">
				          <a type="button" class="btn btn-primary proseguiButton" data-dismiss="modal" aria-label="Close" title="chiudi modale">chiudi</a>
				          <br class="clear">
				      </div>
				  </div>
				</section>﻿
	       </div>
	    </div>
	 </div>
</div>
