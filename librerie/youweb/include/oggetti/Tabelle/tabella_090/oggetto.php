<script type="text/javascript" language="javascript" src="/HT/JS/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
<link rel="Stylesheet" type="text/css" href="/HT/CSS/ui.slider.extras.css"  />



<style>	
	.sliderContainer {
		position: relative;
		width: 100%;
		height: 31px;
	    padding-top: 8px;
	}
	.slider {
		margin-left: 45px;
	    margin-right: 45px;
	}
	.slider .ui-slider-handle {
		border-radius: 0 0 0 0;
		box-shadow: 1px 1px 2px #666666;
	    height: 17px;
	    margin-left: -22px;
	    padding-top: 4px;
	    text-align: center;
	    text-decoration: none;
	    top: -7px;
	    width: 45px;
	}
	.slider .ui-slider-handle:hover {
	    text-decoration: none;
	    cursor: e-resize;
	}
	a.meno {
		position: absolute;
	    left: 4px;
	    top: 7px;
	}
	a.piu {
		position: absolute;
	    right: 4px;
	    top: 7px;
	}
	.min {
	    left: 43px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	.max {
	    right: 26px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	
	td.select2slider {
		padding-right: 50px;
	}
	td.select2slider .ui-slider-handle {
		border-radius: 0 0 0 0;
	    box-shadow: 1px 1px 2px #666666;
	    height: 11px;
	    margin-left: -8px;
	    padding: 0 0 6px;
	    text-align: center;
	    text-decoration: none;
	    top: -6px;
	    width: 15px;
	}
	td.select2slider .ui-slider-handle:hover {
	    cursor: e-resize;
	}
	#limitato {
	    float: right;
	    position: relative;
	    right: 68%;
	}
	td.limiteAutoricariche .ui-slider {
	    float: right;
		margin-right: -10px;
   		width: 62%;
	}
	
	td.small .ui-slider {
   		width: 50px;
	}
	
	td.medium .ui-slider {
   		width: 100px;
   		margin: auto;
	}
	
	div.ui-widget-content {
		width: 50px;
	}
</style>
<script>
	 function updateSlider(event, ui, id, funCallBack){
		$('#slider_'+id).children('a').text( formatter(ui.value) );
		$('#slider_'+id).siblings(':input').val(ui.value);
		if ($.isFunction(funCallBack)) {
		funCallBack(event, ui);
		}
 	} 	
 
  function sliderLimiti(id,valMin,valMax,valStep,funCallBack) {
	$('#slider_'+id).slider({
		value: $("#"+id).val(),
		min: valMin,
		max: valMax, //5000.00,
		range: "min",
		step: valStep,
		slide: function(event, ui) {
			updateSlider(event, ui, id, funCallBack);
		},
		change: function(event, ui) {
			updateSlider(event, ui, id, funCallBack );
		}
	});
	$('#slider_'+id+' > a').text(formatter($("#"+id).val()));
} 
	
	function formatter(number) {
		return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
	}
	
	function somma(button) {
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
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		if(val > 0) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val - step)
		}
		return false;
	}
</script>







<script type="text/javascript">
	function closeDialogFun() {
		//funzione da sovrascrivere nelle jsp che includono questo frammento
	}

	$(document).ready(function(){
		$("#dialog-confirm").on('hide.bs.modal', function (e) {
			var select = $('#bloccoAccessoSlider');
			select.val('N');
			select.find('option').removeAttr("selected");
			select.find('option[value="N"]').attr("selected", "selected");
			select.trigger('click');
		})
	})
	
	function apriDialogBloccoAccesso() {
		$("#dialog-confirm").modal('show');
	}
	
	function cancellaBloccoAccesso() {
		return encodeUrl('/serviziPerTe/bloccoAccesso.do');
	}
	
</script>


<script>
	$(document).ready(function() {
		inizializzaBloccoAccesso();
		// keep devices table heigth
		setTimeout(function () {
			var maxH = $(".devices").height();
			if ($(".certificato").height()>maxH) {
				maxH = $(".certificato").height();
			}
			
            $(".certificato").height(maxH);
            $(".devices").height(maxH);
            
            var tdHeight = parseInt($("#tdFirmaDigitale").height() * 0.9);
            if ($("#divFirmaDigitale").height()<tdHeight) {
            	$("#divFirmaDigitale").height(tdHeight);
            }
        }, 200);
        
		fixHeight();
		
	});
	
	$(window).resize(function(){
		fixHeight();
	});
	
	function fixHeight(){
		var height = 0;
		$('.innerBoxWhite').each(function(index){
		
			if($(this).attr('id')!='ultimoAccesso')
			{
				if($(this).height()>height){
					height = $(this).height();
				}
			}
		});
	}
	
	function inizializzaBloccoAccesso()
	{	
		$('#bloccoAccessoSlider').selectToUISlider({labelSrc: 'text', tooltip: false, sliderOptions: {
	        change: function(event, ui)
	        {
	        	if (ui.value==0){attivaOn();}		        	
	        	else if (ui.value==1){attivaOff();}
	        	
	        	if (ui.value==1) {
	        		apriDialogBloccoAccesso ();
	        	}
	        }
	    }});
	    attivaOn();
	}
	
	function clearTooltip(){
		$('#bloccoAccessoSlider .ui-slider-tooltip.ui-widget-content.ui-corner-all').hide();
	}
	
	function attivaOn()
	{
		var primoFiglio = $('#handle_bloccoAccessoSlider').siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		$(primoFiglio).css('color','black').css('font-weight','bold');
		var secondoFiglio = $('#handle_bloccoAccessoSlider').siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		$(secondoFiglio).css('color','black').css('font-weight','normal');
	}
	function attivaOff()
	{
		var primoFiglio = $('#handle_bloccoAccessoSlider').siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		$(primoFiglio).css('color','#666666').css('font-weight','normal');
		var secondoFiglio = $('#handle_bloccoAccessoSlider').siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		$(secondoFiglio).css('color','#003F63').css('font-weight','bold');
	}
	
	window.checkDispositiviSicurezza = function () {
		var response = false;
		var status = 0;
		
		$.ajaxSetup({async: false});
		var urlAction = "richiediDispositivoSicurezzaJson.do";
		$.ajax({
    		url: urlAction,
    		dataType: 'json',
    		success: function( json ) {
				status = json.richiesteDispositivo;
      			if (json.richiesteDispositivo==0) {
					response = true;
				}
    		},
    		error: function( json ) {
    			response = false;
    			status = -1;
    			// location.reload();
    		}
  		});
		
		if (status==1) {
			apriDialogDispositiviSicurezza();
		}
		else if (status==-1) {
			apriDialogDispositiviSicurezzaErrore();
		} 

		return response;
	}
</script>
<style>
	div.ui-widget-content {
	    width: 50%;
	    margin-left: 25%;
	}
</style>


<div class="row">
	<div class="col-sm-2">
<!--	tabella profilo	-->
		<img alt="sicurezza" src="/HT/IMAGES/CONTENUTI/sicurezza.gif" class="img-responsive hidden-xs">
	</div>
	<div class="nosort tabellaProfilo floatr col-xs-12 col-sm-10">
		<table class="table table-striped dataTable no-footer">
		<colgroup>
			<col width="31%">
			<col width="18%">
			<col width="18%">
			<col width="18%">
			<col width="15%">
		</colgroup>
		<thead>
			<tr>
				<th style="border-left: 1px solid #B0B0B0;">Descrizione</th>
				<th>Numero</th>
				<th>Azioni</th>
				<th class="hidden-xs">Stato</th>
				<th class="hidden-xs">Blocca accesso</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="padding-left: 24px;">Codice Identificativo</td>
				<td class="oCenter"><b>***rtg</b></td>
				<td class="oCenter"> - </td>
				<td class="oCenter hidden-xs">Attivo</td>
				<td rowspan="3" id="bloccoAccesso" style="padding-top:1px;">
					<select id="bloccoAccessoSlider" style="display: none;">
						<option value="N" selected="selected">Attivo</option>
						<option value="S" >Bloccato</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 24px;">Codice PIN</td>
				<td class="oCenter"><b>*******</b></td>
				<td class="oCenter">
					<div class="actions">
						<form id="formCambioPassword" method="post" action="/WEBHT/serviziPerTe/cambioPassword.do">
						 
						<input type="submit" name="cambiopin" value="Cambio PIN" class="btn" alt="Cambio PIN">
						</form>
					</div>
				</td>
				<td class="oCenter hidden-xs">Attivo</td>
			</tr>
			<tr>
<!--	tipo carta otp	-->
				<td style="padding-left: 24px;">Dispositivo di sicurezza</td>
<!--	numero carta otp	-->
				<td class="oCenter"><b>0001000110</b></td>
				<td class="oCenter">-</td>
				<td class="oCenter hidden-xs">In Uso</td>
			</tr>
		</tbody>
		</table>
	</div>
<!--	end tabella profilo	-->
</div>