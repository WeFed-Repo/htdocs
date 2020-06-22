<section>

<div class="titolo">
	<h1>
		<div class="row">
			<div class="col-sm-8">
				<!-- TITOLO -->
					<span>Bancomat Pay</span>
					
					
					
					
					
				
				<!-- /TITOLO -->
		
				<!-- HELP -->
				
				<!-- /HELP -->

				<!-- DOCUMENTI OBBLIGATORI MOBILE -->		
				<i class="icon icon-documento hidden-sm hidden-md hidden-lg" title="Documenti" id="ico-documenti" style="display:none"></i>
				<!-- /DOCUMENTI OBBLIGATORI MOBILE -->
			</div>

			
		</div>
	</h1>
</div>


	

</section>



	
	
			







<script>
	function submitUrl(id, url){
		
		var idform = "";
		var array = id.split('=');
		if (array.length > 1) {
			idform = array[1];
		} else {
			idform = id;
		}
		$('#'+ idform).attr("action", url);
		$('#'+ idform).submit();

	}
</script>


<div class="section outerWrapperTab no-backgr ">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					
					
						
							
							
							
							<li class="">
								
									
									
										<a href="/WEBWB/bancomatPay/schedaProdotto.do" title="Scheda Prodotto" role="button">
											Scheda Prodotto
										</a>
									
								
							</li>
						
					
						
							
							
								
							
							
							<li class="on">
								
									
									
										<a href="/WEBWB/bancomatPay/attivazione.do" title="Gestione" role="button">
											Gestione
										</a>
									
								
							</li>
						
					
					
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>

<section id="errorAjax" class="hidden">
		<div class="row">
			<div class="col-sm-12">
				<div class="messagePanel error hidden-print">
					<div>
						<h3 id="nomeErrore"></h3>
						<p id="componenteErrore"></p>
					</div>
				</div>
			</div>
		</div>
</section>

<section>
<p>BANCOMAT Pay ti permette di inviare/ricevere denaro direttamente dal/sul tuo conto corrente.</p>
<h3 class="titleSection titleForm">Conti abilitati</h3>
<form name="formBancomatPay" id="modificaForm" method="post" action="/WEBWB/bancomatPay/attivazione.do">
	<div class="table-responsive">
		<table class="table table-striped sort" role="grid">
			<thead>
				<tr class="hover">
					<th></th>
		        	<th class="oLeft">Conto corrente</th>
		        	<th class="oLeft">Intestatario</th>
		        	<th class="oLeft">Conto invio denaro</th>
		        	<th class="oLeft">Conto ricezione denaro</th>
	  				<th class="oLeft">Stato</th>
			    </tr>
			</thead>
			<tbody>
				
					
						
							
						
						
					
					<tr class="odd">
						<td class="oLeft">
							
				         		
				         			<span class="icon icon-check_ok"></span>
				         		
				         		
				         	
						</td>
				        <td class="oLeft">
							00034409
				        </td>
				        <td class="oLeft">
				            MORGANTI MARIKA, VERGARI MASSIMO
					    </td>
				       	<td class="oLeft">	
				       		
				       			
 				       				<span class="icon icon-star_fill"></span>
				       			
				       			
				       		
				         </td>
				         <td class="oLeft">	
				       		
				       			
 				       				<span class="icon icon-star_fill"></span>
				       			
				       			
				       		
				         </td>
				         <td class="oLeft">
				         	
				         		
				         			Abilitato
				         		
				         		
				         	
				         </td>
					</tr>
				
			</tbody>  
		</table>
	</div>
<input type="hidden" name="azione" value="AZIONE_MODIFICA" id="azioneHidden">
</form>
</section>

<section>
<div class="form-group btnWrapper">
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary proseguiButton" id="modificaBtn">
			Modifica
		</a>
	</div>
</div>
</section>
<br class="clear"><br class="clear"><br class="clear">

<section>
	<h3 class="titleSection titleForm">Gestisci limiti di utilizzo</h3>
	<p>Puoi impostare i limiti massimi di invio di denaro tramite BANCOMAT Pay in base al tipo di beneficiario e al periodo.</p>
	
	<br class="clear"><br class="clear">
	
	 <div class="border-output">
	 	<div class="row first-row">
	 		<div class="col-sm-12 col-xs-12 boxDefault boxDefaultNoBord">
	 			<div>
	 				<div class="row">
	 					<div class="col-sm-8">Limite massimo di invio denaro a persone (P2P) ed enti di beneficienza (P2C)</div>
	 					 <div class="col-sm-4 alignRight">
                         <strong>250 €</strong>
                         </div>
          			</div>
          			<div class="row">
	 					<div class="col-sm-8">Limite massimo di invio denaro ad attività commerciali (P2B) e Pubbliche Amministrazioni (P2G)</div>
	 					 <div class="col-sm-4 alignRight">
                         <strong>1500 €</strong>
                         </div>
          			</div>
          			<div class="row">
	 					<div class="col-sm-8">Limite massimo di invio denaro giornaliero</div>
	 					 <div class="col-sm-4 alignRight">
                         <strong>1500 €</strong>
                         </div>
          			</div>
          			<div class="row">
	 					<div class="col-sm-8">Limite massimo di invio denaro mensile</div>
	 					 <div class="col-sm-4 alignRight">
                         <strong>1500 €</strong>
                         </div>
          			</div>
          		</div>
          	</div>
          	<!--<div class="col-sm-6 col-xs-12 boxDefault">
            </div>-->
      	</div>
     </div>
    <br class="clear">
    <div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary proseguiButton" data-toggle="modal" data-target="#gestisciLimiti">
				Modifica
			</a>
		</div>
	</div>
	

	<div id="gestisciLimiti" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h1 class="modal-title">Gestisci limiti di utilizzo</h1>
				</div>
				<div class="modal-body">
				<section>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<p>Puoi impostare i limiti massimi di invio di denaro tramite BANCOMAT Pay in base al tipo di beneficiario e al periodo.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						<form name="formBancomatPay" id="formLimiti" method="post" action="/WEBWB/bancomatPay/gestisciLimiti.do" class="slider-no-btn">	
								<div class="form-group">
									<div class="row cardlessSliderRow">
										<div class="col-xs-12 col-sm-12">
											<span class="valSel"></span>
													
								 			<div id="slider_importoSoglia" class="slider"></div>
								 			
							 				<div id="slider_maxP2P" class="inputSliderContainer col-xs-12 col-sm-12">
							 					<div class="row">
							 						<div class="col-xs-12 col-sm-2 hidden-webank">
									 					<input type="text" name="maxP2P" value="250" class="inputSliderValue">
							 						</div>
							 						<div class="col-xs-12 col-sm-10 vertical-center">
							 							<p>Limite massimo di invio denaro a persone (P2P) ed enti di beneficienza (P2C)</p>
							 						</div>
							 					</div>
												<div class="inputSliderShifter ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="250" data-step="10"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"><span class="value-handler">undefined</span></span></div>
											</div>
											
										</div>
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="row cardlessSliderRow">
										<div class="col-xs-12 col-sm-12">
											<span class="valSel"></span>		
											<div id="slider_importoSoglia" class="slider"></div>
				
											<div id="slider_maxP2B" class="inputSliderContainer col-xs-12 col-sm-12">
												<div class="row">
							 						<div class="col-xs-12 col-sm-2 hidden-webank">
									 					<input type="text" name="maxP2B" value="1500" class="inputSliderValue">
							 						</div>
							 						<div class="col-xs-12 col-sm-10 vertical-center">
							 							<p>Limite massimo di invio denaro ad attività commerciali (P2B) e Pubbliche Amministrazioni (P2G)</p>
							 						</div>
							 					</div>
												<div class="inputSliderShifter ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="1500" data-step="10"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"><span class="value-handler">undefined</span></span></div>
											</div>
										
										</div>
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="row cardlessSliderRow">
										<div class="col-xs-12 col-sm-12">
											<span class="valSel"></span>		
											<div id="slider_importoSoglia" class="slider"></div>
				
											<div id="slider_maxGiorn" class="inputSliderContainer col-xs-12 col-sm-12">
												<div class="row">
							 						<div class="col-xs-12 col-sm-2 hidden-webank">
									 					<input type="text" name="maxGiorn" value="1500" class="inputSliderValue">
							 						</div>
							 						<div class="col-xs-12 col-sm-10 vertical-center">
							 							<p>Limite massimo di invio denaro giornaliero</p>
							 						</div>
							 					</div>
												<div class="inputSliderShifter ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="1500" data-step="10"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"><span class="value-handler">undefined</span></span></div>
											</div>
										
										</div>
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="row cardlessSliderRow">
										<div class="col-xs-12 col-sm-12">
											<span class="valSel"></span>		
											<div id="slider_importoSoglia" class="slider"></div>
				
											<div id="slider_maxMensile" class="inputSliderContainer col-xs-12 col-sm-12">
												<div class="row">
							 						<div class="col-xs-12 col-sm-2 hidden-webank">
									 					<input type="text" name="maxMensile" value="1500" class="inputSliderValue">
							 						</div>
							 						<div class="col-xs-12 col-sm-10 vertical-center">
							 							<p>Limite massimo di invio denaro mensile</p>
							 						</div>
							 					</div>
												<div class="inputSliderShifter ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-min="0" data-max="1500" data-step="10"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"><span class="value-handler">undefined</span></span></div>
											</div>
										
										</div>
									</div>
								</div>
							<input type="hidden" name="azione" value="AZIONE_MODIFICA_LIMITI" id="azioneHidden">
							</form>
						</div> 
					</div>
				</section>
				</div>
				<div class="modal-footer">
				<section>
					<div class="form-group btnWrapper pull-right">
						
						<input type="button" name="annulla" tabindex="3" value="Annulla" class="btn btn-default" data-dismiss="modal">
						<input type="button" id="confermaModificaLimitiBtn" name="conferma" tabindex="3" value="Conferma" class="btn btn-primary">
					</div>
				</section>
				</div>
			</div>
		</div>
	</div>
</section>

<br class="clear"><br class="clear"><br class="clear">

<section>
    <div class="scaricaAppBancomatPay">
        <h3 class="titleSection titleForm">Scarica l'app BANCOMAT Pay o installala di nuovo.</h3>
        <ul>
            <li><strong>Scegli Banco BPM</strong> tra le opzioni proposte</li>
            <li><strong>Inserisci il tuo numero di cellulare,</strong> deve corrispondere a quello certificato sul sito della banca</li>
            </ul>
        <div class="alignRight btnWrapper">
            <a type="image/jpeg" href="https://apps.apple.com/it/app/bancomat-pay/id1467760256" class="mr-20" title="App Store" target="_blank">
            	<img src="/common/fe/img/badge_Apple.png" class="img-responsive img-fixed-badge-apps">
           	</a>
            <a type="image/jpeg" href="https://play.google.com/store/apps/details?id=it.bancomat.pay.user&amp;hl=it" title="Google Play" target="_blank">
            	<img src="/common/fe/img/badge_Play.png" class="img-responsive img-fixed-badge-apps">
           	</a>
        </div>
    </div>
</section>

<section>
<h3 class="titleSection titleForm">Segui le istruzioni e completa l'attivazione utilizzando il QR Code oppure il Codice numerico</h3>
</section>

<div id="formQRCode">
    <div class="formWrapper alignCenter">
        <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-6">
                    <label>
                        <input type="radio" name="attivaCon" value="QRC" onclick="visualizzaContenuto('QRC');" id="attivaConQRCode" checked="checked">
                       	Attiva con QR Code
                    </label>
                </div>
                <div class="form-field-input col-xs-6">
                    <label>
                        <input type="radio" name="attivaCon" value="BP" onclick="visualizzaContenuto('BP');" id="attivaConBancomatPay">
                        Attiva con codice BANCOMAT Pay
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group pb-0" id="boxQRCode" style="display: block;">
            <div class="row">
                <div class="col-xs-12 description">
					Clicca su "Genera QR Code" e scansiona il codice dell'app BANCOMAT Pay.<br> Verifica direttamente dall'app che l'attivazione sia stata completata correttamente.
                </div>
            </div>
            <section class="sec-tion mb-0">
                <div class="row">
                    <div class="form-field-input col-xs-12">
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="alignCenter">
                                    <a type="button" href="#" class="btn btn-primary mt-20 btn-reverse" id="btnQRCode" title="Genera QR Code">
										Genera QR Code										
									</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="mt-20">
                                    <img class="img-responsive m-auto width-x" id="imgQRCode" style="display: none;">
                                    <label class="m-auto" id="placeholderQRCode"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="form-group pb-0" id="boxBancomatPay" style="display: none;">
            <div class="row">
                <div class="col-xs-12 description">
					Clicca su "Genera Codice" e inseriscilo nell'apposito campo dell'app BANCOMAT Pay.<br> Verifica direttamente dall'app che l'attivazione sia stata completata correttamente.
                </div>
            </div>
            <section class="sec-tion mb-0">
                <div class="row">
                    <div class="form-field-input col-xs-12">
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="alignCenter">
                                    <a type="button" href="#" class="btn btn-primary mt-20 btn-reverse" id="btnBancomatPay" title="Genera codice">
										Genera Codice
									</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div id="divBancomatPay">
								<?php
    
								if ($site == 'youweb') {
									print '
                                    <img src="/HT/fe/img/block_Sx.png" class="img-responsive img-fixed">
                                    <input type="text" id="outputBancomatPay" value="" readonly="">
                                    <img src="/HT/fe/img/block_Dx.png" class="img-responsive img-fixed">';
								}
							  else {
									 print '<img src="/WB/fe/img/block_Sx.png" class="img-responsive img-fixed">
									 <input type="text" id="outputBancomatPay" value="" readonly="">
									 <img src="/WB/fe/img/block_Dx.png" class="img-responsive img-fixed">';
								}
								?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>







	

<script>
$(document).ready(function() {
	var sliders = {};
	
	$('#boxQRCode').hide();
    $('#boxBancomatPay').hide();
    $('#imgQRCode').hide();
    $('#btnFinito').hide();
    if ($('#attivaConQRCode').attr('checked')) {
        visualizzaContenuto('QRC');
    } else if ($('#attivaConBancomatPay').attr('checked')) {
        visualizzaContenuto('BP');
    }

    $('#btnQRCode').click(function(e) {
        e.preventDefault();
        $.ajax({
	        type: 'POST',
	        dataType: 'json',
	        url: getPathContext() + '/bancomatPay/generaQRCode.do',
	        success: function(data) {
	        	if (data.esito === "OK") {
	        		$('#errorAjax').addClass('hidden');
	        		$('#nomeErrore').html('');
	        		$('#componenteErrore').html('');
	        		$('#imgQRCode').attr('src', 'data:image/png;base64,' + data.qrcode);
		        	$('#imgQRCode').show()
		            $('#placeholderQRCode').hide();
	        	} else {
	        		$('#nomeErrore').html("Errore generazione"+" QR Code");
	        		$('#componenteErrore').html("Si è verificato un errore nel recuperare il "+" QR Code");
	        		$('#imgQRCode').hide();
	        		$('#errorAjax').removeClass('hidden');
	                $('#placeholderQRCode').show();
	        	}
	        	
	        },
	        error: function(err) {
	        	//console.log(err)
	        }
	    });
    });

    $('#btnBancomatPay').click(function(e) {
        e.preventDefault();
        
        $.ajax({
	        type: 'POST',
	        dataType: 'json',
	        url: getPathContext() + '/bancomatPay/generaCodice.do',
	        success: function(data) {
	        	if (data.esito === "OK") {
	        		$('#errorAjax').addClass('hidden');
	        		$('#nomeErrore').html('');
	        		$('#componenteErrore').html('');
		        	$('#outputBancomatPay').attr('value', data.codice);
	        	} else {
	        		$('#nomeErrore').html("Errore generazione"+" codice");
	        		$('#componenteErrore').html("Si è verificato un errore nel recuperare il "+" codice");
		        	$('#outputBancomatPay').attr('value', '');
	        		$('#errorAjax').removeClass('hidden');
	        	}
	        },
	        error: function(err) {
	        	//console.log(err)
	        }
	    });
    });
	
	$('input[data-favorite]').each(function() {
		var context = $(this);
		if (context.data('favorite')) {
			$(this).attr('checked', 'checked');
		}
	})
	
	$('#modificaBtn').click(function() {
		$('#modificaForm').submit();
	})
	
	$('input[name="attivazioneRadioBtn"]').click(function() {
		$('.hideBox').hide();
		$('#' + $(this).val()).show();
	})
	
	$("#accordion").accordion({
		animated: 'slide',
		heightStyle: "content",
		active: false,
		collapsible: true
	});
	
	$('#confermaModificaLimitiBtn').click(function(){
		$('.inputSliderValue').each(function(){
			$(this).val($(this).val().replace('.', ''));
		})
		$('#formLimiti').submit();
	})
	
	$(".inputSliderContainer").each(function(index, element) {
		var currentSliderDomElem = $(this);
	
		var currentSliderObj = new InputSlider(currentSliderDomElem.attr('id'))
		sliders[this.id] = currentSliderObj;
		
		currentSliderDomElem.find('.ui-slider-handle').html('<span class="value-handler">' + currentSliderDomElem.find('.inputSliderValue').val() + '</span>');
		currentSliderDomElem.closest('.cardlessSliderRow ').find('a').click(function(){
			
			var inputSliderValue = currentSliderDomElem.children('.inputSliderValue');
			var inputSliderShifter = currentSliderDomElem.children('.inputSliderShifter');
			var step = inputSliderShifter.data('step');
			var currentValue = inputSliderValue.val();

			var newValue;
			if ($(this).hasClass('meno')) {
				newValue = currentValue - step
			} else {
				newValue = parseInt(currentValue) + parseInt(step)
			}
			if (newValue <= inputSliderShifter.data('max') && newValue >= inputSliderShifter.data('min')){
				inputSliderValue.val(newValue);
				currentSliderDomElem.find('.ui-slider-handle').html('<span class="value-handler">' + newValue + '</span>');
				currentSliderObj.shifter.slider('value', newValue);
			}
			
		})
	});
	
	
})

function visualizzaContenuto(attivaCon) {
        if (attivaCon=='QRC') {
            $('#boxQRCode').show();
            $('#boxBancomatPay').hide();
        } else if (attivaCon=='BP') {
            $('#boxQRCode').hide();
            $('#boxBancomatPay').show();
        }
    }
</script>
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

				