<section>
	<h3 class="titleSection">Attivazione sportello Bancomat al prelievo</h3>
	<p>Vuoi attivare il prelievo Cardless su tutti gli sportelli bancomat abilitati al servizio?</p>
	<div class="form-group btnWrapper">
	     <div class="btn-align-center">
	         <a type="button" class="btn btn-primary proseguiButton btnSi">Si</a>
	         <a type="button" class="btn btn-primary proseguiButton btnNo">No</a>
	    </div>
	</div>
</section>
<!-- qui campo di testo hidden -->
<input type="hidden" name="nomeViaAtmSelezionato" value=" " id="nomeViaAtmSelezionato">
<input type="hidden" name="comuneAtmSelezionato" value=" " id="comuneAtmSelezionato">
<input type="hidden" name="provinciaAtmSelezionato" value=" " id="provinciaAtmSelezionato">
<input type="hidden" name="capAtmSelezionato" value=" " id="capAtmSelezionato">
<input type="hidden" name="importo" value="20" id="importo">
<input type="hidden" name="assetId" value="" id="assetId">
<input type="hidden" name="organiz" value="" id="organizzazioneSelezionata">
<section id="containerNo" style="display:none" class="sliderContainer">
	<div id="atm">
		<!-- CERCA ATM PIU' VICINO -->
	<!--	<script>

function sottrai(id, step) {
	var current = $('#' + id).find('input').val().replace('.', '');
	if (current >= step) {
		var valueObj = $('#' + id).find('.inputSliderValue');
		var newValue = parseInt(current - step);
		var slider = new InputSlider(id);
		valueObj[0].value = _formatValue(newValue);
		slider.shifter.slider('value', newValue);
		}
	}
	
	function somma(id, step, max) {
		var current = $('#' + id).find('input').val().replace('.', '');
		var maxFormatted = parseInt(max)
		var result = parseInt(current) + parseInt(step);
		if (result <= maxFormatted) {
			var valueObj = $('#' + id).find('.inputSliderValue');
			var newValue = parseInt(result);
			var slider = new InputSlider(id);
			valueObj[0].value = _formatValue(newValue);
			slider.shifter.slider('value', newValue);
		}		
	}

function InputSlider(sliderId) {
	this.sliderId = sliderId;
	this.container = $('#' + sliderId);
	if (!this.container) {
		throw new Error('Unable to find slider container ' + sliderId);
	}

	this.valueObj = this.container.find('.inputSliderValue');
	this.valueObj[0].value = _formatValue(parseInt(this.valueObj[0].value));
	this.shifter = this.container.find('.inputSliderShifter');
	this.min = parseInt(this.shifter.data('min') || 0);
	this.max = parseInt(this.shifter.data('max'));
	this.tickSteps = this.shifter.data('tickSteps') || 0;
	this.step = this.shifter.data('step') || 1000;
	var that = this;
	
	
	if (!this.max) {
		throw new Error('Max value not passed for slider ' + sliderId);
	}
	this.shifter.prepend(_buildTickMarks(this.max, this.tickSteps));

	this.valueObj.focus(function() {
		that.valueObj[0].value = _clearValueFromDot(that.valueObj[0].value);
	});

	this.valueObj.focusout(function() {
		that.valueObj.trigger('change');
	});

	this.valueObj.keypress(function(e) {
		//Prevent default for non numeric or period and enter button
		if(e.key == '.' || e.key == 'Del' || e.key == 't' || e.key == '\'' || e.key == '%' ){
			e.preventDefault()
		}	else {
			if (!(e.keyCode == 13 || //ENTER
				e.keyCode == 46 || 		 //CANC
				e.keyCode == 8 || 		 //DELETE
				e.keyCode == 37 || 		 //LEFT ARROW
				e.keyCode == 39 ||  	 //RIGH ARROW
				e.keyCode == 116 || 	 //F5
				e.keyCode == 9 || 	 	 //TAB
				e.keyCode == 123 		 //F12
			)) {
				if (!e.key.match(/[0-9]/)) {
					e.preventDefault();
				}
			}
		}
	});

	

	this.valueObj.change(function(e) {
		var newValue = _parseValueFormattedToInt(that.valueObj[0].value, that.step);
		if (isNaN(newValue)) {
			newValue = that.min;
		}
		newValue = _validateRange(that.min, that.max, newValue);
		that.valueObj[0].value = _formatValue(newValue);
		that.shifter.slider('value', parseInt(newValue));
	});

	this.shifter.slider({
		value : _parseValueFormattedToInt(this.valueObj[0].value, this.step),
		min : parseInt(this.min),
		max : parseInt(this.max),
		range : "min",
		step : this.step,
		slide : function(event, ui) {
			that.valueObj[0].value = _formatValue(parseInt(ui.value));
		}
	});

}

InputSlider.prototype.disable = function () {
	this.container.find(".ui-slider").slider('disable');
	this.valueObj.attr('disabled','disabled');
}

function _validateRange(min, max, newValue) {
	if (newValue < min) {
		return min;
	} else if (newValue > max) {
		return max;
	} else {
		return newValue;
	}
}

function _buildTickMarks(max, count) {
if (count != 0) {
	var ticks = '';
		var stepWidth = parseFloat(100 / count) + '%';
		var stepValue = parseFloat(max / count);
		for (i = 1; i < count; i++) {
			ticks += '<div class="sliderTickmarks" style=width:' + stepWidth + '><span>' + _formatValue(stepValue * i) + '</span></div>';
		}
		return ticks;
	}
}

function _formatValue(value) {
	var reverseArrayValue = value.toString().replace(/[^0-9]/g, '').split('').reverse();
	var result = [];
	while (reverseArrayValue[0]) {
		result = result.concat(reverseArrayValue.slice(0, 3));
		reverseArrayValue = reverseArrayValue.slice(3, reverseArrayValue.lenght);
		if (reverseArrayValue[0]) {
			result.push('.');
		}
	}
	return result.reverse().join('');
}
function _parseValueFormattedToInt(value, step) {
	var parsedValue = parseInt(value.toString().replace(/[^0-9]/g, ''));
	return Math.floor(parsedValue / step) * step;
}
function _clearValueFromDot(value) {
	return parseInt(
			value.toString().replace(/[^0-9]/g, ''));
		}
		</script>-->
		<form>
			<h3 class="titleSection titleForm" id="titolo">Cerca il bancomat pi&ugrave; vicino a te</h3>	
			<div class="formWrapper">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-4">
							<label class="control-label">Indirizzo</label>
								<div class="form-field">
									<div class="row">
										<div class="form-field-input col-xs-4 col-sm-4">
											<select name="tipoViaAtm" class="form-control input-inline">
												<option value="via">Via</option>
												<option value="viale">Viale</option>
												<option value="piazza">Piazza</option>
												<option value="corso">Corso</option>
												<option value="frazione">Frazione</option>
												<option value="vicolo">Vicolo</option>
												<option value="strada">Strada</option>
												<option value="contrada">Contrada</option>
												<option value="localita">Localita</option>
												<option value="largo">Largo</option>
												<option value="altro">Altro</option>
										   </select>
										</div>
										<div class="form-field-input col-xs-8 col-sm-8">
											<input type="text" name="nomeViaAtm" value=" " id="nomeViaAtm" class="form-control">
										</div>
									</div>
								</div>
						</div>
						<div class="form-field-input col-sm-4 col-xs-6">
							<label for="sceltaAtm" class="control-label"> Città: </label>
							<div class="form-field">
								<input type="text" name="comuneAtm" maxlength="30" size="30" value="" id="comuneAtm" class="form-control ui-autocomplete-input" autocomplete="off">
								<input type="hidden" name="provinciaAtm" value="" id="provinciaAtm">
							</div>
						</div>
						<div class="form-field-input  col-sm-2 col-xs-4">
							<label class="control-label"> CAP:</label>
							<div class="form-field">
								<input type="text" name="capAtm" maxlength="5" size="8" value=" " id="capAtm" class="form-control">
							</div>
						</div>
						<div class="form-field-input col-sm-2 col-xs-12">
							<a href="#" class="btn btn-link paddingTopMedium fRight" onclick="cercaAtm(this)";>Cerca
								<i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<section>
	<div class="sliderContainer" id="find" style="display: none">
		<h3 class="titleSection titleForm">Il tuo ATM di riferimento</h3>
			<div class="row">
				<div class="form-field-input col-sm-6 col-xs-12">
					<label for="sceltaAtm" class="control-label"> Di seguito ti proponiamo lo sportello bancomat più vicino all'indirizzo che ci hai indicato, se non fosse di tuo gradimento puoi cambiarlo cliccando su "Cambia" </label>
				</div>
				<div class="form-field-input col-sm-4 col-xs-6">
					<span id="nessunATM">(Nessun ATM trovato.)</span>
					    <strong> <span id="indirizzoATM" class="hide"></span><br> 
					     <span id="comuneATM"></span> <br>
					     <span id="capATM"></span>
					   	<span id="provinciaATM" class="hide">( )</span> 
					</strong>
				</div>
				<div class="form-field-input col-sm-2 col-xs-6">
					<a href="#" class="btn btn-link paddingTopMedium fRight" onclick="cercaAtm(this)"; id="cambiaAtm">Cambia
						<i class="icon icon-arrow_right" title="icon-freccia_dx"></i>
					</a>
				</div>
			</div>
			
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function() {
		
		// cambia atm
		//var urlAjax = getPathContext() + '/carte/prelievoCardless/cambiaAtm.do';
		var urlAjax = '/template/cambiaAtm.php'
		$('#cambiaAtm').ajaxDialog('cambiaAtmDialog', urlAjax, {
			title : 'Cambia Atm',
			width : '650px'
		});
	});

	function closePopoUpAtm(indirizzoATM, capATM, provinciaATM, comuneATM, organizzazioneATM) {
		var slideContainer = $('#containerSi');
		var slideContainer2 = $('#titolo');
		var slideContainer3 = $('#atm');
		$('#indirizzoATM').text(indirizzoATM);
		$('#indirizzoATM').removeClass('hide');
		$('#nomeViaAtmSelezionato').val(indirizzoATM);
		$('#capATM').text(capATM);
		$('#capATM').removeClass('hide');
		$('#comuneATM').text(comuneATM);
		$('#comuneAtmSelezionato').val(comuneATM);
		$('#provinciaATM').text(provinciaATM);
		$('#provinciaAtmSelezionato').val(provinciaATM);
		$('#provinciaATM').removeClass('hide');
		$('#organizzazioneSelezionata').val(organizzazioneATM);
		$('#cambiaAtmDialog').dialog('close');
		$('#find').css('display', 'block');
		$('#nessunATM').addClass('hide');
		if (!slideContainer.hasClass("open")) {
			slideContainer.slideDown();
			slideContainer.addClass("open");
			slideContainer2.slideUp();
			slideContainer3.slideUp();

		}

	}
</script>
<section id="containerSi" style="display:none">
	<h3 class="titleSection titleForm">Inserisci i dati del prelievo</h3>
	<div class="sliderContainer">
		<div class="row cardlessSliderRow">
			<div class="col-xs-12 col-sm-3">
				Seleziona l'importo da prelevare
			</div>
			<div id="slider_importo" class="inputSliderContainer col-xs-12 col-sm-9">
				<input type="text" id="inputSliderValue" class="inputSliderValue" autocomplete="off" value="20" name="importo">
				<div class="inputSliderShifter ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="150" data-step="10" data-tick-steps="15"></div>
			</div>
		</div>
	</div>
</section>
<!-- BOTTONI MULTIPLI-->
<section>
	<div class="pull-right btnWrapper">
		<form method="post" action="" class="form-horizontal">
			<input type="submit" name="Lorem ipsum" tabindex="3" value="Lorem ipsum"  class="btn btn-default">
			<input id="vaiAvanti" type="submit" name="Lorem ipsum" tabindex="3" value="Lorem ipsum"  class="btn btn-primary disabled" disabled>
		</form>
	</div>
</section>
<script>
	$(document).ready(function() {
		$(".widget input[type=submit], .widget a").button();
		var slideContainer = $('#containerSi');
		var sliders = {};
		var slideContainer2 = $('#containerNo');
		var slideContainer3 = $('#find');
		slideContainer.hide();
		slideContainer2.hide();
		
		/*$(".inputSliderContainer").each(function() {
			sliders[this.id] = new InputSlider(this.id);
		});*/
		
		function handleClickTuttiAtm(event){
			$('.btnSi').addClass('selected');
			$('.btnNo').removeClass('selected');
			if(event){
				event.preventDefault();
			}
			$('#prelievoDaTuttiGliAtm').attr('value', true);
			if (!slideContainer.hasClass("open")) {
				slideContainer.slideDown();
				slideContainer.addClass("open");
				
				$('#vaiAvanti').attr('disabled', false);
			}

			if (slideContainer2.hasClass("open")) {
				slideContainer2.slideUp();
				slideContainer2.removeClass("open");
			}
		}
		$('.btnSi').on("click", handleClickTuttiAtm );
		
			function handleClickAtmSelezionato(event){
			$('.btnNo').addClass('selected');
			$('.btnSi').removeClass('selected');
			if(event){
				event.preventDefault();
			}
			$('#prelievoDaTuttiGliAtm').attr('value', false);
			if (!slideContainer2.hasClass("open")) {
				slideContainer2.slideDown();
				slideContainer2.addClass("open");
				$('#vaiAvanti').attr('disabled', true);
				
				/* slideContainer3.slideUp();
				slideContainer3.removeClass("open"); */
				slideContainer.slideUp();
				slideContainer.removeClass("open");
			}
		}
		
		$('.btnNo').on("click", handleClickAtmSelezionato);
		
		// cerca atm - ricerca comuni	
		$("#comuneAtm").autocomplete({

			// source : getPathContext() + '/cd/searchComuni.do',
			source : '/cd/searchComuni.do',
			minLength : 1,
			select : function(event, ui) {
				var prov_cap = ui.item.desc.split("|");
				$("#provinciaAtm").attr("value", prov_cap[0]);
				$("#capAtm").attr("value", prov_cap[1]);
			}
		});
		
		if($('#prelievoDaTuttiGliAtm').attr('value')== 'true'){
			handleClickTuttiAtm();
		}
			
		if($('#prelievoDaTuttiGliAtm').attr('value')== 'false'){
 			handleClickAtmSelezionato();
 			$('#find').css('display', 'block');
 			slideContainer.slideDown();
			slideContainer.addClass("open");
			$('#vaiAvanti').attr('disabled', false);
 		}	
	});
	
	function cercaAtm(button) {
		var form = $(button).closest('form');
		var slideContainer = $('#containerSi');
		$.post($(form).attr('action'), $(form).serialize(), function(response) {
			if (response != ('Campi mancanti')) {
			
				$('#indirizzoATM').text(response.indirizzo);
				
				$('#nomeViaAtmSelezionato').val(response.indirizzo);
			    $('#comuneATM').text(response.citta);
				$('#comuneAtmSelezionato').val(response.citta); 
				$('#capATM').text(response.cap);
				$('#capAtmSelezionato').val(response.cap);
				$('#provinciaATM').text(response.provincia);
				$('#provinciaAtmSelezionato').val(response.provincia);
				$('#assetId').val(response.assetId);
				$('#organizzazioneSelezionata').val(response.organizzazione);
				if(typeof response.indirizzo == 'undefined'){
					$('#nessunATM').removeClass('hide');
					$('#indirizzoATM').addClass('hide');
					$('#capATM').addClass('hide');
					$('#provinciaATM').addClass('hide');
					$('#nomeViaAtmSelezionato').addClass('hide');
				} else{
					$('#nessunATM').addClass('hide');
					$('#indirizzoATM').removeClass('hide');
					$('#capATM').removeClass('hide');
					$('#provinciaATM').removeClass('hide');
					$('#nomeViaAtmSelezionato').removeClass('hide');
				}
				/* 	$(button).attr('disabled', 'true'); */
				$('#find').css('display', 'block');
				$('#vaiAvanti').attr('disabled', false);
				if (!slideContainer.hasClass("open")) {
					slideContainer.slideDown();
					slideContainer.addClass("open");
				}

			}
		});
	}
	
</script>


