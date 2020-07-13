<script>
	var numCarte = 0;
	var first = false;
	function callRiepilogoCarta(){
		$.ajax({
			async: true,
			dataType: 'html',
			data: $('#formHPCarta').serialize(),
			url: getPathContext() + '/common/homePageRiepilogoCarta.do',
			success: function(response) {
				var htmlInt = jQuery('<div>').html(response).find(
						'#intestCarta').html();
				$('#intesCartaCall').html(htmlInt);
				
				var isError=false;
				$('#RiepilogoCartaHomePage').html(response);
				
				if ($('#RiepilogoCartaHomePage .boxMsg').size() > 0) {
					isError = true;
				}
				
				if (!isError) {
					$('#RiepilogoCartaHomePage').css('min-height','180px');
				} else {
					$('#riepilogoCartaBox .sliderContainerSpalla').hide();
				}
				
			}
		 });
	}
	
	function callBackSlideRiepilogoCarta(event, ui, id){
		numeroContoHome = parseInt($('#slider_'+id).siblings(':input').val());
		$(id).val(numeroContoHome);
		callRiepilogoCarta();
	 }
	 
	 function prepareSlider(){
		if(numCarte > 1){
			sliderInitRiepilogoCarta('RiepilogoCarta',1,numCarte,1, callBackSlideRiepilogoCarta);
			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
			$('.ui-slider-handle.ui-state-default.ui-corner-all').text(numeroContoHome+1);
			first = true;
		}else{
			$('#formHPCarta').hide();
		}
	 }
				
	$(document).ready(function(){
		$('#numContoRiepilogoCartaHome').val('0');
		callRiepilogoCarta();
	});
 </script>
 <div class="riquadro clearfix" id="riepilogoCartaBox">
	<h1>
	   <div class="flag hidden-xxs riepilogo">&nbsp;</div>
	   Riepilogo carte
	</h1>
	<div class="col-xs-12 clear-padding margin-bottom10">
	   <div id="intesCartaCall">
		  <h3 class="titleSectionDouble" style="margin:0px; line-height: 19px">
			 <strong>YouCard&nbsp;*0000 - MILANO - 0000 - </strong><span class="intestatario">Cognome Nome</span>
		  </h3>
	   </div>
	</div>
	<div class="col-xs-12 clear-padding">
	   <form id="formHPCarta">
		  <div class="sliderContainerSpalla margin-bottom10">
			 <a href="#Prev" class="meno" onclick="prevCarta(this, 'RiepilogoCarta')">
			 <img src="/HT/IMAGES/ico-slide-left.png" height="14" width="14" title="Precedente" alt="Precedente">
			 </a>
			 <div id="slider_RiepilogoCarta" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
				<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;">1</span>
			 </div>
			 <a href="#Next" class="piu" onclick="nextCarta(this, 'RiepilogoCarta')">
			 <img src="/HT/IMAGES/ico-slide-right.png" height="14" width="14" title="Successivo" alt="Successivo">
			 </a>
			 <input type="hidden" name="numConto" value="0" id="numContoRiepilogoCartaHome">
			 <input type="text" value="0" id="RiepilogoCarta" style="display:none">
			 <script type="text/javascript" language="javascript" src="/HT/JS/jquery.ui.touch-punch.min.js"></script>
			 <script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
			 <link rel="Stylesheet" type="text/css" href="/HT/CSS/ui.slider.extras.css">
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
				text-align: center;
				text-decoration: none;
				top: -5px;
				width: 45px;
				font-size:12px
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
				span.ttContent{
				margin-left: 10px;
				}
			 </style>
			 <script>
				function updateSlider(event, ui, id, funCallBack){
				$('#slider_'+id).children('span').text( formatter( ui.value));
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
					var id_elemento = $(this).closest('.boxContent').attr('id');
					$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
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
			 <script>
				var numeroContoHome = 0;
				var idSliderHomeCarte = "";
				
				function nextCarta(button, idS){
					if(numeroContoHome < numCarte){
						numeroContoHome = parseInt($('#slider_'+idS).children('span').text());
						$('#slider_'+idS).children('span').text(formatter(numeroContoHome));
						$('#slider_'+idS).siblings(':input').val(numeroContoHome);
						var val = parseInt( $(button).siblings(':input').val() );
						var slider = $(button).siblings('.slider');
						var step = slider.slider('option', 'step');
						slider.slider("value", val + step)
					}
				}
				
				function prevCarta(button, idS){
					if(numeroContoHome>=0){
						numeroContoHome = parseInt($('#slider_'+idS).children('span').text());
						$('#slider_'+idS).children('span').text(formatter(numeroContoHome));
						$('#slider_'+idS).siblings(':input').val(numeroContoHome);
						var val = parseInt( $(button).siblings(':input').val() );
						var slider = $(button).siblings('.slider');
						var step = slider.slider('option', 'step');
						slider.slider("value", val - step)
					}
				}
				
				function scalaDivSliderRiepilogoCarta(id, maxMens, val) {
					var element = $('#slider_'+id);
					var dimensioneMassima = $(element).width();
					var nuovaDimensione = (dimensioneMassima / maxMens) * val;
					if (nuovaDimensione < 70)
						nuovaDimensione = 70;
					var contenitore = $('#slider_' + id).parent('div').css('width',
							nuovaDimensione + 45 + 45);
				}
				
				function updateSRiepilogoCarta(event, ui, id, funCallBack){
					$('#slider_'+id).children('span').text( formatter(ui.value) );
					$('#slider_'+id).siblings(':input').val((parseInt(ui.value)-1).toString());
				
					if ($.isFunction(funCallBack)) {
						funCallBack(event, ui, id);
					}
				} 	
				function sliderInitRiepilogoCarta(id,valMin,valMax,valStep,funCallBack) {
					idSliderHomeCarte = id;
					$('#slider_'+id).slider({
						value: $("#"+id).val(),
						min: valMin,
						max: valMax,
						range: "min",
						step: valStep,
						/*slide: function(event, ui) {
							updateSRiepilogo(event, ui, id, funCallBack);
							var id_elemento = $(this).closest('.boxContent').attr('id');
							$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
						},*/
						change: function(event, ui) {
							updateSRiepilogoCarta(event, ui, id, funCallBack );
							
						},
						slide: function(event, ui) {
							updateSRiepilogoCarta(event, ui, id, null );
							
						}
					});
					$('#slider_'+id+' > a').text(format($("#"+id).val()));
					$('#slider_'+id+' > a').addClass("margin-bottom20");
				} 
				
				function format(number) {
					return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
				}
				
			 </script>
		  </div>
	   </form>
	</div>
	<div class="col-xs-12 clear-padding" id="RiepilogoCartaHomePage" style="min-height: 180px;">
	   <div>
		  <div class="bs-example form-horizontal margin-top5">
			 <div class="form-group">
				<div id="intestCarta" style="display:none">
				   <h3 class="titleSectionDouble" style="margin:0px; line-height: 19px">
					  <strong>YouCard&nbsp;*0000 - MILANO - 0000 - </strong><span class="intestatario">Cognome Nome</span>
				   </h3>
				</div>
				<div class="col-xs-12">
				   <div class="form-group col-xs-12 clear-padding">
					  <!-- SALDO --> 
					  <div class="form-field">
						 <span class="floatl col-xs-6">
						 <strong>Saldo prepagata:</strong>
						 </span>
						 <span class="col-xs-6">
						 <strong>7,00 &euro;</strong>
						 </span>
					  </div>
				   </div>
				   <div class="col-xs-12 clear-padding">
					  <div class="col-sm-6 col-xs-12">
						 <div class="col-xs-12 innerBoxSkyBlue floatr" style="padding: 0px 5px; height: 100px;">
							<h2 class="boxTitle">
							   Utilizzo carta
							</h2>
							<div class="form-group col-xs-12 clear-padding">
							   <div class="form-field">
								  <span class="floatl">
								  Complessivo mensile:
								  </span>
								  <span class="floatr">
								  <strong>
								  3.000,00 &euro;
								  </strong>
								  </span>
							   </div>
							</div>
							<div class="form-group col-xs-12 clear-padding">
							   <div class="form-field">
								  <span class="floatl">
								  Importo utilizzato:
								  </span>
								  <span class="floatr">
								  <strong>
								  0,00 &euro;
								  </strong>
								  </span>
							   </div>
							</div>
							<div class="form-group col-xs-12 clear-padding">
							   <div class="form-field">
								  <span class="floatl">
								  Importo residuo:
								  </span>
								  <span class="floatr">
								  <strong>
								  3.000,00 &euro;
								  </strong>
								  </span>
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="col-sm-6 col-xs-12 padding-left10">
						 <div class="col-xs-12 innerBoxSkyBlue floatl" style="padding: 0px 5px; height: 100px;">
							<h2 class="boxTitle">
							   Limiti utilizzo giornalieri
							</h2>
							<div class="form-group col-xs-12 clear-padding">
							   <span class="floatl">
							   Prelievi da ATM:
							   </span>
							   <span class="spallaSX bold floatr clear-padding-top">
							   1.500,00 &euro;
							   </span>
							</div>
							<div class="form-group col-xs-12 clear-padding">
							   <span class="floatl">
							   Pagamenti negozi:
							   </span>
							   <span class="spallaSX bold floatr clear-padding-top">
							   3.000,00 &euro;
							   </span>
							</div>
							<div class="form-group col-xs-12 clear-padding">
							   <span class="floatl">
							   Pagamenti internet:
							   </span>
							   <span class="spallaSX bold floatr clear-padding-top">
							   3.000,00 &euro;
							   </span>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <div>
		  <form id="dettaglioCarta" method="post" action="/WEBHT/cartaConto/dettaglioCarta.do">
			 <span id="riquadroSpalla">
			 <input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
			 </span>
			 <input type="button" name="svuota" value="Dettaglio carta " onclick="$('#dettaglioCarta').submit()" id="dettaglioCarta" class="dettButton btn margin-right10 margin-bottom10 pull-right">
		  </form>
	   </div>
	   <script>
		  $(document).ready(function(){
			numCarte = '2';
			if(!first)
				prepareSlider();
				
				var height = 100;
		  
			$('.innerBoxSkyBlue').each(function(){
				if($(this).height()>height){
					height = $(this).height();
				}
			});
			
			$('.innerBoxSkyBlue').each(function(){
				$(this).height(height);
			});
		  });
		  
	   </script>
	</div>
 </div>