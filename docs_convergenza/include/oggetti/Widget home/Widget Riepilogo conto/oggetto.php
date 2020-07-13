<script>
            var firstRiep = false;
            var CCNumberRiep = 0;
            function callRiepilogo(){
            	$.ajax({
            		async: true,
            		dataType: 'html',
            		data: $('#formHPRiepilogo').serialize(),
            		url: getPathContext() + '/common/homePageRiepilogoConto.do',
            		success: function(response) {
            			var htmlInt = jQuery('<div>').html(response).find('#intestatarioRiepilogo').html();
            			$('#intesRiepilogo').html(htmlInt);
            			//CCNumber = html.find('#CCNumber').val();
            			$('#RiepilogoHomePage').html(response);
            			
            			var isError=false;
            			
            				if ($('#RiepilogoHomePage .boxMsg').size() > 0) {
            				isError = true;
             			}
            			
            		    if (!isError) {
            		    
            		   		//$('#RiepilogoHomePage').css('height', '200px');
            			
            			} else {
            			  
            				$('#boxRiepilogoConto .sliderContainerSpalla').hide();
            			}
             			}
            	 });
            }
            
            function callBackSlideRiepilogo(event, ui, id){
             	numeroConto = parseInt($('#slider_'+id).siblings(':input').val());
             	$(id).val(numeroConto);
             	callRiepilogo();
             }
             
             function prepareSliderRiep(){
             	if(CCNumberRiep > 1){
            		sliderInitRiepilogo('ContoCorrente2' ,1 ,CCNumberRiep ,1, callBackSlideRiepilogo);
            		$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
            		$('.ui-slider-handle.ui-state-default.ui-corner-all').text(numeroConto+1);
            		firstRiep = true;
            	}else{
            		$('#formHPRiepilogo').hide();
            	}
             }
            			
            $(document).ready(function(){
            	$(document).ready(function(){
            		$('#numContoRiepilogo').val('0');
            		callRiepilogo();
            		
            	});
            });
         </script>
         <div class="riquadro clearfix" id="boxRiepilogoConto">
            <h1>
               <div class="flag hidden-xxs riepilogo">&nbsp;</div>
               Riepilogo conto
            </h1>
            <div class="col-xs-12 clear-padding">
               <div class="intes" id="intesRiepilogo">
                  <h3 class="titleSectionDouble">
                     <strong>Conto corrente - &nbsp;
                     00000000
                     -
                     MILANO - 0000 - </strong><span class="intestatario">Cognome Nome</span>	
                  </h3>
               </div>
            </div>
            <div class="col-xs-12 clear-padding">
               <form id="formHPRiepilogo" class="margin-bottom20">
                  <div class="sliderContainerSpalla margin-bottom10">
                     <a href="#Prev" class="meno" onclick="prevRiepilogo(this, 'ContoCorrente2')">
                     <img src="/HT/IMAGES/ico-slide-left.png" height="14" width="14" title="Precedente" alt="Precedente">
                     </a>
                     <div id="slider_ContoCorrente2" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;">1</span>
                     </div>
                     <a href="#Next" class="piu" onclick="nextRiepilogo(this, 'ContoCorrente2')">
                     <img src="/HT/IMAGES/ico-slide-right.png" height="14" width="14" title="Successivo" alt="Successivo">
                     </a>
                     <input type="hidden" name="numConto" value="0" id="numContoRiepilogo">
                     <input type="text" value="0" id="ContoCorrente2" style="display:none;">
                  </div>
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
                     var numeroConto = 0;
                     var idSlider = "";
                     
                     function nextRiepilogo(button, idS){
                     	if(numeroConto < CCNumberRiep){
                     		numeroConto = parseInt($('#slider_'+idS).children('span').text());
                     		$('#slider_'+idS).children('span').text(formatter(numeroConto));
                     		$('#slider_'+idS).siblings(':input').val(numeroConto);
                     		var val = parseInt( $(button).siblings(':input').val() );
                     		var slider = $(button).siblings('.slider');
                     		var step = slider.slider('option', 'step');
                     		slider.slider("value", val + step)
                     	}
                     }
                     
                     function prevRiepilogo(button, idS){
                     	if(numeroConto>=0){
                     		numeroConto = parseInt($('#slider_'+idS).children('span').text());
                     		$('#slider_'+idS).children('span').text(formatter(numeroConto));
                     		$('#slider_'+idS).siblings(':input').val(numeroConto);
                     		var val = parseInt( $(button).siblings(':input').val() );
                     		var slider = $(button).siblings('.slider');
                     		var step = slider.slider('option', 'step');
                     		slider.slider("value", val - step)
                     	}
                     }
                     
                     function scalaDivSliderRiepilogo(id, maxMens, val) {
                     	var element = $('#slider_'+id);
                     	var dimensioneMassima = $(element).width();
                     	var nuovaDimensione = (dimensioneMassima / maxMens) * val;
                     	if (nuovaDimensione < 70)
                     		nuovaDimensione = 70;
                     	var contenitore = $('#slider_' + id).parent('div').css('width',
                     			nuovaDimensione + 45 + 45);
                     }
                     
                     function updateSRiepilogo(event, ui, id, funCallBack){
                     	$('#slider_'+id).children('span').text( formatter(ui.value) );
                     	$('#slider_'+id).siblings(':input').val((parseInt(ui.value)-1).toString());
                     
                     	if ($.isFunction(funCallBack)) {
                     		funCallBack(event, ui, id);
                     	}
                     } 	
                     
                     function sliderInitRiepilogo(id,valMin,valMax,valStep,funCallBack) {
                     	idSlider = id;
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
                     			updateSRiepilogo(event, ui, id, funCallBack );
                     			
                     		},
                     		slide: function(event, ui) {
                     			updateSRiepilogo(event, ui, id, null );
                     			
                     		}
                     	});
                     	$('#slider_'+id+' > a').text(format($("#"+id).val()));
                     	$('#slider_'+id+' > a').addClass("margin-bottom20");
                     } 
                     
                     function format(number) {
                     	return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
                     }
                     
                  </script>
               </form>
            </div>
            <div class="col-xs-12 clear-padding" id="RiepilogoHomePage">
               <input type="hidden" name="" value="" id="CCNumber">
               <div class="bs-example form-horizontal">
                  <div class="form-group">
                     <div class="col-xs-12">
                        <div class="intes" id="intestatarioRiepilogo" style="display: none">
                           <h3 class="titleSectionDouble">
                              <strong>Conto corrente - &nbsp;
                              00000000
                              -
                              MILANO - 0000 - </strong><span class="intestatario">Cognome Nome</span>	
                           </h3>
                        </div>
                        <div class="col-xs-12 margin-top10">
                           <div class="col-xs-4 clear-padding">
                              Coordinate IBAN
                           </div>
                           <div class="col-xs-6 bold">
                              <div class="oRight">
                                 IT00N0000000000000000000000
                              </div>
                           </div>
                           <div class="col-xs-1">
                              <form id="formCoordinateIban" method="post" action="/WEBHT/serviziPerTe/coordinateIban.do">
                                 <input type="hidden" name="codContoCorrente" value="001|2070|207000000000">
                                 <input type="hidden" name="modifica" value="modifica">
                                 <input type="image" name="" src="/HT/IMAGES/i_dettaglio.gif" class="imgSrv hidden-xs" title="Dettaglio" alt="Dettaglio">
                              </form>
                           </div>
                        </div>
                        <div class="col-xs-12 margin-bottom10">
                           <div class="col-xs-4 clear-padding">
                              SWIFT
                           </div>
                           <div class="col-xs-6 bold">
                              <div class="oRight">
                                 BAPPIT00M00
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12">
                        <div class="col-xs-4 clear-padding">
                           Saldo Disponibile
                        </div>
                        <div class="col-xs-6 bold">
                           <div class="oRight">
                              88,00
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12">
                        <div class="col-xs-4 clear-padding">
                           Saldo Contabile
                        </div>
                        <div class="col-xs-6 bold">
                           <div class="oRight">
                              88,00
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12">
                        <div class="col-xs-4 clear-padding">
                           Affidamento
                        </div>
                        <div class="col-xs-6 bold">
                           <div class="oRight">
                              0,00
                           </div>
                        </div>
                     </div>
                     <h3 class="titleSection margin-top10">
                        Interessi e spese
                     </h3>
                     <div class="col-xs-12">
                        <div class="col-xs-4 clear-padding">
                           Sbilancio
                        </div>
                        <div class="col-xs-6 bold">
                           <div class="oRight">
                              0,00
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12">
                  <div>
                     <form id="saldoMovimentiDettaglio" method="post" action="/WEBHT/cc/movimentiConto.do">
                        <input type="hidden" name="ultimiMovimenti" value="90">
                        <input type="hidden" name="compilazione" value="S">
                        <input type="hidden" name="tipoIntervallo" value="ultimiGiorni">
                        <input type="hidden" name="codContoCorrente" value="001|0000|000000000000" id="codContoCorrente">
                        <input type="submit" value="Saldo e movimenti" style="margin-bottom:5px" class="btn pull-right">
                     </form>
                  </div>
               </div>
               <script>
                  $(document).ready(function (){
                  	CCNumberRiep = '2';
                  		var maxMens = 2;
                  		scalaDivSliderRiepilogo('idSlider', maxMens, 2);
                  	
                  	if(!firstRiep)
                  		prepareSliderRiep();
                  });
               </script>
            </div>
         </div>