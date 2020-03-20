	<script>
		$(function() {
			$("#confirm").dialog({
				autoOpen : false,
				width : 300,
				height: 140,
				modal : true,
				title: 'Attenzione',
				open: function(event, ui){
					$('#confirm').removeClass('hide');
				},
				closeOnEscape:true
			});
		});
		
		$(document).ready(function() {
			$("#inputAddebito input[type=radio]").on('click', function(){
				$("#inputAddebito input[type=submit]").removeClass('disabled').attr('disabled',false);
			});
			$("#inputWebsafe").on('click', 'input[type=radio]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled').attr('disabled',false);
			});
			$("#inputWebsafe").on('click', 'input[type=text]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled').attr('disabled',false);
			});
			$('input[name="geosafe"]').on('click' ,function(){
				$("#formPannelloControllo input[type=submit]").removeClass('disabled').attr('disabled',false);
			});
							
			sliderLimiti('massimaleTotMensile',	0, "5000.00", 50);
			sliderLimiti('massimaleTotGiornalieroAtm', 0, "3000.00", 10);
			sliderLimiti('massimaleTotGiornalieroPos', 0, "5000.00", 50);
			sliderLimiti('massimaleTotGiornalieroWeb', 0, "5000.00",	50);
			

			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
			$('.showCarte > input[type="button"]').click(function() {
				mostraDivModifica("");
				showCarte();
			});
		
			// scroll to div esitoOperazione
			if ($("#esitoOperazione").length) {
				document.getElementById('esitoOperazione').scrollIntoView();
			}
		});
		
		function controllaFormDaChiudere(id) {
			var formPresenti = $('.formPannelloControllo_TEST').not('#form_'+id);
			formPresenti.each(function() {
				var idForm = this.id;
				try {
					eval("nascondiDiv"+idForm.substr(5)+"("+'idForm.substr(5)'+")");
				} catch (e) {};
			});
		}

		function mostraDivModifica(id, esito) {
			$.each($('.formPannelloControllo > [id^="input"]').not('#input' + id), function(index, obj) {
				nascondiDivModifica(obj.id.substr(5), esito);
			});
			
			if (esito != 'KO') {
				$('#messagePanel').hide();
			}
			console.log(id);
			$('#dati' + id).closest('form').find('.titolo .btn-align-right').hide();
			$('#dati' + id).fadeOut('fast', function() {
				$('#input' + id).fadeIn();
				try {
					eval('inizializzaForm' + id + '()');
				} catch (e) {
				}
				;
			});
		}

		function nascondiDivModifica(id, esito) {
			if (esito != 'KO') {
				$('.messagePanel').hide();
			}
			
			if(!$('.formPannelloControllo div[id="input'+id+'"] input[type="submit"]').hasClass('disabled')){
				$('#confirm').dialog('open');
				$('#yes').on('click', function(){
					$('.formPannelloControllo div[id="input'+id+'"]').parent().submit();
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
				});
				$('#no').on('click', function(){
					$('#dati' + id).closest('form').find('.titolo .btn-align-right').show();
					$('#input' + id).fadeOut('fast', function() {
						$('#dati' + id).fadeIn();
					});
					resetForm(id);
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
					$('.formPannelloControllo div[id="input'+id+'"]').parent()[0].reset();
					$('#confirm').dialog('close');
				});
			}else{
				$('#input' + id).fadeOut('fast', function() {
					$('#dati' + id).fadeIn();
					$('#dati' + id).closest('form').find('.titolo .btn-align-right').fadeIn();
				});
				resetForm(id);
			}
		}

		function resetForm(id) {
			$('.formPannelloControllo')[0].reset();
			$.each($('#formPannelloControllo > div [id^="slider_"]'), function(index, obj) {
				$('#' + obj.id).slider("value", $("#" + obj.id.substr(7)).val());
				$('#' + obj.id + ' > a').text(formatter($("#" + obj.id.substr(7)).val()));
			});
		}
	</script>
	<script>
	var msgImmediato = "Ti informiamo che l'attivazione della 'Modalità di addebito IMMEDIATO' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	var msgFineMese = "Ti informiamo che l'attivazione della 'Modalità di addebito A FINE MESE' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	var msgImmediatoFineMese = "Ti informiamo che l'attivazione della 'Modalità di addebito IMMEDIATO/A FINE MESE' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	$(document).ready(function() {
		$("#dialog-commissioni").dialog({
			modal : true,
			autoOpen : false
		});
		
	});

	function verificaCommissioni() {
		var almenoUnImmediato = $('#addebitoAtmIMM').is(':checked')
									|| $('#addebitoPosIMM').is(':checked')
									|| $('#addebitoWebIMM').is(':checked');
		var almenoUnDebito = $('#addebitoAtm').is(':checked')
									|| $('#addebitoPos').is(':checked')
									|| $('#addebitoWeb').is(':checked');
		var dialog = (almenoUnImmediato && false)
						|| (almenoUnDebito && true);
		if (dialog) {
			var text = '';
			if (almenoUnImmediato && almenoUnDebito) {
				if (false)
					text = msgImmediatoFineMese;
				else
					text = msgFineMese;
			} else if (almenoUnDebito)
				text = msgFineMese;
			else if (almenoUnImmediato)
				text = msgImmediato;
			$('#dialog-commissioni-text').html(text);
			$('#dialog-commissioni').dialog('open');
		} else
			$('#addebitoCartaForm').submit();
	}
</script>
<script>
	 function updateSlider(event, ui, id, funCallBack){
	 	$('#slider_'+id).closest('.sliderContainer').find('.valSel').html(formatter(ui.value) + ' ' + 'EUR');
		$('#slider_'+id).children('span').text( formatter( ui.value));
		$('#slider_'+id).siblings(':input').val(ui.value);
		
		if ($.isFunction(funCallBack)) {
		funCallBack(event, ui);
		}
 	} 	
 
 function sliderLimiti(id,valMin,valMax,valStep,funCallBack) {
	$('#slider_'+id).slider({
		value: $("#"+id).val(),
		min: parseInt(valMin),
		max: parseInt(valMax), //5000.00,
		range: "min",
		step: valStep,
		slide: function(event, ui) {
			updateSlider(event, ui, id, funCallBack);
			var id_elemento = $(this).closest('.boxContent').attr('id');
			$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		},
		change: function(event, ui) {
			updateSlider(event, ui, id, funCallBack );
			$('#slider_'+id).closest('.sliderContainer').find('.valSel').text(formatter(ui.value)+' EUR');

			
		}
	});
	$('#slider_'+id+' > a').text(formatter($("#"+id).val()));
	
} 
 
	
	function formatter(number) {
		return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
	}
	
	function somma(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		var max = parseInt( slider.slider('option','max'));
		if(val < max) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val + step)
		}
		return false;
	}
	
	function sottrai(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		if(val > 0) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val - step)
		}
		return false;
	}
</script>


<section>
	<form id="addebitoCartaForm" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
		<div class="titolo">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="titleSection titleForm">Modalità di addebito
						<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1563#Addebito')" class="no-underline btn-icon hidden-xs">
							<i class="icon icon-info_fill icon-2x"></i>
						</a>
					</h3>
				</div>
				<div class="col-sm-4">
					<a id="btnRicerca" href="javascript:mostraDivModifica('Addebito')" role="button" aria-pressed="false" class="btn-align-right" ><i class="icon icon-edit_fill ico-title"></i></a>
				</div>
			</div>
		</div>
		<div class="form-group" style="" id="datiAddebito">
              <div class="row">
                <div class="form-field-input col-xs-12 col-sm-4">
                    <label class="control-label">Prelievi da ATM </label> 
                    <div class="input-group"><span class="output">Addebito prepagato</span></div>
                </div>
                <div class="form-field-input col-xs-12 col-sm-4">
                    <label class="control-label">Pagamenti in negozi fisici </label> 
                    <div class="input-group"><span class="output">Addebito immediato</span></div>
                </div>
              	<div class="form-field-input col-xs-12 col-sm-4">
                    <label class="control-label" for="causale">Pagamenti su internet</label> 
                     <div class="input-group"><span class="output">Addebito prepagato</span></div>
                </div>
              </div>
              <hr class="hrSeparator">
         </div>
		<div id="inputAddebito" style="display: none">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-4">
	                  <p>Prelievi da ATM</p>
	                  <div>
	                  	<label>
		                    <input type="radio" name="addebitoAtm" value="P" checked="checked" id="addebitoAtmPRE" class="sfondoForm" />
		                     Addebito prepagato
		                </label>
	             	   </div>
	             	   <div>
		                  <label>
		                   <input type="radio" name="addebitoAtm" value="D" id="addebitoAtmIMM" class="sfondoForm">
		                     Addebito immediato
		                  </label>
		               </div>
		               <div>
		                   <label>
		                   <input type="radio" name="addebitoAtm" value="C" disabled="disabled" id="addebitoAtm" class="sfondoForm">
		                    Addebito a fine mese
		                  </label>
	              		</div>
               		</div>
               		<div class="form-field-input col-xs-4">
	                  <p>Pagamenti in negozi fisici</p>
	                  <div>
		                  <label>
		                    <input type="radio" name="addebitoPos" value="P" id="addebitoPosPRE" class="sfondoForm">
		                     Addebito prepagato
		                  </label>
	              		</div>
	                  <div>
		                  <label>
		                   <input type="radio" name="addebitoPos" value="D" checked="checked" id="addebitoPosIMM" class="sfondoForm">
		                     Addebito immediato
		                  </label>
		                 </div>
		                <div>
		                   <label>
		                   <input type="radio" name="addebitoPos" value="C" disabled="disabled" id="addebitoPos" class="sfondoForm">
		                    Addebito a fine mese
		                  </label>
	              		</div>
               		</div>
               		<div class="form-field-input col-xs-4">
	                  <p>Pagamenti su internet</p>
	                  <div>
		                  <label>
		                   	<input type="radio" name="addebitoWeb" value="P" checked="checked" id="addebitoWebPRE" class="sfondoForm">
		                     Addebito prepagato
		                  </label>
	              	   </div>
	              	   <div>
		                  <label>
		                  	<input type="radio" name="addebitoWeb" value="D" id="addebitoWebIMM" class="sfondoForm">
		                     Addebito immediato
		                  </label>
	                 	</div>
		                 <div>
		                   <label>
		                   <input type="radio" name="addebitoWeb" value="C" disabled="disabled" id="addebitoWeb" class="sfondoForm">
		                    Addebito a fine mese
		                  </label>
		                 </div>
               		</div>
               	</div>
			</div>
			<div class="alignRight btnWrapper">
				<a type="input"  href="javascript:nascondiDivModifica('Addebito')" class="btn btn-default">Annulla</a>
				<input type="submit" value="conferma"  href="verificaCommissioni();"  class="btn btn-primary execute disabled"  disabled />
			</div>
			 <hr class="hrSeparator">
		</div>
			
	</form>
</section>

<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header clearfix">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
			</div>
    	</div>
  	</div>
</div>
<div id="confirm" class="hide" >
		<div class="col-xs-12">
			<p>Vuoi salvare le modifiche?</p>
		</div>
		<div class="col-xs-12">
			<div class="pull-right">
				<input type="button" id="yes" value="Si" class="btn btn-primary"/>
				<input type="button" id="no" value="No" class="btn btn-primary"/>
			</div>
		</div>
	</div>
