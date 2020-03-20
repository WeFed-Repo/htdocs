<!--SLIDER MODIFICA MASSIMALI-->
<section>
	<h3 class="titleSection">Elenco Rapporti</h3>	
	<form id="formPannelloRapporti" method="POST" action="">
		<div class="row rapportiContainer">
			<label class="control-label bold col-xs-12">Conto corrente
						00581427 intestato a VENTURELLI ALESSANDRO					
			</label>
			<div class="rapporto col-xs-12 col-sm-6">
				<label class="control-label no-bold" for="limiteNbaGiornaliero"> Massimale  bonifici giornaliero in euro  </label>
				<div class="form-field-input rapportoSliderRow">								
					<div>
						<a href="javascript:;" class="meno">
	 						<i class="icon icon-spinner_less"></i>
	 						<i class="icon icon-meno colorVer"></i>
	 						<span>100</span>
	 					</a>
	 					<a href="javascript:;" class="piu">
	 						<i class="icon icon-spinner_more"></i>
	 						<i class="icon icon-piu colorVer"></i>
	 						<span>100</span>
	 					</a>
						<div id='slider_limiteNbaGiornaliero_0'	class="inputSliderContainer">
							<div class="inputSliderValuePrint">									
							</div>
							<input type="text" class="inputSliderValue" autocomplete="off"
								value='500000'
								name='rapporti[0].maxGiornalieroNba'>
							<div class="inputSliderShifter" data-min='100' data-step='100'
								data-max='500000'></div>
								<span class="min" data-min='100'></span>
								<span class="max" data-max='500000'></span>
						</div>
					</div>						
				</div>
			</div>

			<div class="rapporto col-xs-12 col-sm-6">
				<label class="control-label no-bold" for="limiteNbaGiornaliero"> Massimale  bonifici giornaliero in euro  </label>
				<div class="form-field-input rapportoSliderRow">								
					<div>
						<a href="javascript:;" class="meno">
	 						<i class="icon icon-spinner_less"></i>
	 						<i class="icon icon-meno colorVer"></i>
	 						<span>100</span>
	 					</a>
	 					<a href="javascript:;" class="piu">
	 						<i class="icon icon-spinner_more"></i>
	 						<i class="icon icon-piu colorVer"></i>
	 						<span>100</span>
	 					</a>
						<div id='slider_limiteNbaGiornaliero_1'	class="inputSliderContainer">
							<div class="inputSliderValuePrint">									
							</div>
							<input type="text" class="inputSliderValue" autocomplete="off"
								value='500000'
								name='rapporti[0].maxGiornalieroNba'>
							<div class="inputSliderShifter" data-min='100' data-step='100'
								data-max='500000'></div>
								<span class="min" data-min='100'></span>
								<span class="max" data-max='500000'></span>
						</div>
					</div>						
				</div>
			</div>
		</div>		
	</form>
</section>



<script>

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
			//alert("test");
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
				that.container.find('.value-handler').html(that.valueObj[0].value);
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
		return parseInt(value.toString().replace(/[^0-9]/g, ''));
	}
</script>


<script>
	function submitPannelloRapportiForm() {
		var form = $('#formPannelloRapporti');
		var valueDisplayContainer;
		form.find('.inputSliderValue').each(function(key, input) {
			var step = $(input).closest('.inputSliderShifter').data('step') || 100;
			valueDisplayContainer = $(input).closest('.inputSliderContainer').find('.inputSliderValuePrint');
			valueDisplayContainer.html($(input).val());
			input.setAttribute('type', 'hidden');
			valueDisplayContainer.css('display', 'block');
			$(input).val(_parseValueFormattedToInt(input.value, step));
		});
		form.submit();
	};

	function formatter(value) {
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
	
	$(document).ready(function() {
		var sliders = {};
		$(".inputSliderContainer").each(function() {
			var currentSliderDomElem = $(this);
			//sliders[this.id] = new InputSlider(this.id);
			var currentSliderObj = new InputSlider(currentSliderDomElem.attr('id'))
			sliders[this.id] = currentSliderObj;
			currentSliderDomElem.find('.ui-slider-handle').html('<span class="value-handler">' + currentSliderDomElem.children('.inputSliderValue').val() + '</span>');
			currentSliderDomElem.closest('.rapportoSliderRow ').find('a').click(function(){
				
				var inputSliderValue = currentSliderDomElem.children('.inputSliderValue');
				var inputSliderShifter = currentSliderDomElem.children('.inputSliderShifter');
				var step = inputSliderShifter.data('step');
				var currentValue = inputSliderValue.val();				
				var newValue;

				if ($(this).hasClass('meno')) {					
					newValue = currentValue.replace(".","") - step
				} else {
					newValue = parseInt(currentValue.replace(".","")) + parseInt(step)
				}
				if (newValue <= inputSliderShifter.data('max') && newValue >= inputSliderShifter.data('min')){
					inputSliderValue.val(_formatValue(newValue));
					currentSliderDomElem.find('.ui-slider-handle').html('<span class="value-handler">' + _formatValue(newValue) + '</span>');
					currentSliderObj.shifter.slider('value', newValue);
				}
				
			})


			
			
		});

		$('#formPannelloRapporti').on('submit', function(submitEvent) {
		});
	});
	
	
	
	function customSubmitForm(id) {
		submitPannelloRapportiForm();
	}
	
	
</script>
