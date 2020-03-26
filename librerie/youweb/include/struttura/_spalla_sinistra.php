<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs">


<?php

/* A seconda della sezione mostra un contenuto differente */


switch ($lev1) {
    /* CONTI */
    case "conti":
        ?>
			
			<script type="text/javascript">
				$(function() {
					var urlAjax = getPathContext()+ '/common/linkRapidi.do'
					$('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>


			<!-- ULTIME OPERAZIONI -->
			<div class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs saldiMovimenti">&nbsp;</div>
					Ultimi Movimenti
				</h1>
				<div id="result">
					<div id="loading" class="caricamentoAjax" style="display: none;">
						<img src="/HT/IMAGES/caricamento.gif">
					</div>
					<span id="riquadroSpalla" class="context-buttons">
					<a title="Aggiorna" onclick="call(true);" id="refresh" class="refreshButton pull-right"> </a>
					</span>
					<div class="smSpalla clearfix margin-bottom10">
						<div class="bs-example form-horizontal">
							<div class="form-group">
								<div class="col-xs-12">
									<label class="control-label bold">
									Conto corrente&nbsp;00000000
									&nbsp;di&nbsp;Cognome Nome
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="homePageHelp clear-padding margin-bottom10">
						Ultimi 2 movimenti del rapporto predefinito
					</div>
					<div class="spallaSaldo">
						<div class="col-xs-12">
							<span class="control-label floatl">
							Data esecuzione
							</span>
							<span class="spallaSX bold floatr clear-padding-top">
							03/02/2017
							</span>
						</div>
						<div class="col-xs-12">
							<span class="control-label floatl">
							Importo:
							</span>
							<span class="spallaSX floatr oRight bold clear-padding-top">
							5,00&nbsp;€
							</span>
						</div>
						<div class="col-xs-12">
							<span class="control-label floatl">
							Causale:
							</span>
							<span class="spallaSX bold floatr clear-padding-top">
							trasferim.tra conti
							</span>
						</div>
						<div class="form-field-resume col-xs-12 oCenter margin-bottom10">
							<label class="control-label">&nbsp;</label>
						</div>
					</div>
					<div class="spallaSaldo">
						<div class="col-xs-12">
							<span class="control-label floatl">
							Data esecuzione
							</span>
							<span class="spallaSX bold floatr clear-padding-top">
							27/01/2017
							</span>
						</div>
						<div class="col-xs-12">
							<span class="control-label floatl">
							Importo:
							</span>
							<span class="spallaSX floatr negativo bold oRight clear-padding-top">
							-7,00&nbsp;€
							</span>
						</div>
						<div class="col-xs-12">
							<span class="control-label floatl">
							Causale:
							</span>
							<span class="spallaSX bold floatr clear-padding-top">
							add. pagam. diversi
							</span>
						</div>
						<div class="form-field-resume col-xs-12 oCenter margin-bottom10">
							<label class="control-label">&nbsp;</label>
						</div>
					</div>
					<div class="padding-bottom10">
						&nbsp;
					</div>
				</div>
			</div>
			<!-- FINE ULTIME OPERAZIONI -->


			<!-- LINK RAPIDI -->
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Bonifico ordinario" class="bonifico_sepa">
						<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
						<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
					<li title="Gestione contatti" class="gestione_contatti">
						<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti"><b>Gestione contatti</b></a>
					</li>
					<li title="Ultime disposizioni" class="ultime_disposizioni">
						<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni"><b>Ultime disposizioni</b></a>
					</li>
					<li title="Il tuo profilo" class="il_tuo_profilo">
						<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo"><b>Il tuo profilo</b></a>
					</li>
				</ul>
			</div>
			<!-- / LINK RAPIDI -->



			<!-- PROMO -->
			<div class="riquadro clearfix">
				<h1>
					<div class="flag news">&nbsp;</div>
					YouShop
				</h1>
				<p><a onclick="javascript:OpenWindow('/WEBHT/youshop/login.do','_blank',''); return false;" href="#"><img title="Accesso a YouShop" src="/HT/IMAGES/CONTENUTI/BannerYouShop_200x100.png" alt="Accesso a YouShop" width="200" height="100"></a></p>
			</div>
			<!-- / PROMO -->

			<!-- PROMO -->
			<div class="riquadro clearfix">
				<h1>
					<div class="flag news">&nbsp;</div>
					YouWin
				</h1>
				<p><a onclick="javascript:OpenWindow('/WEBHT/serviziPerTe/youWin.do','_blank',''); return false;" href="#"><img title="Accesso a YouWin" src="/HT/IMAGES/CONTENUTI/BannerYouWin_200x100.png" alt="Accesso a YouWin" width="200" height="100"></a></p>
			</div>
			<!-- / PROMO -->


		<?php
        break;

    case "pagamenti":
		?>

			<script>
				$(document).ready(function(){
				            var url = window.location.href;
				            if(url.indexOf('ultimeDisposizioni')>-1){
				                       $('#ultime').hide();
				            }
				});
			</script>
			<div class="riquadro">
				<h1>
					<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
					I miei pagamenti
				</h1>
				<div class="bs-example form-horizontal">
					<div class="form-group">
						<div class="spallaSaldo">
							<div class="col-xs-12">
								<span class="col-xs-9 clear-padding control-label floatl">
								Pagamenti a scadenza 
								</span>
								<span class="clear-padding bold riquadroNumero floatr">
								0
								</span>
							</div>
							<div class="col-xs-12 margin-top10">
								<span class="col-xs-9 clear-padding control-label floatl">
								Pagamenti eseguiti negli ultimi 3 mesi 
								</span>
								<span class="floatr bold clear-padding riquadroNumero">
								0
								</span>
							</div>
							<div class="col-xs-12 margin-top10 margin-bottom10">
								<span class="col-xs-9 clear-padding control-label floatl">
								Pagamenti ineseguiti negli ultimi 3 mesi 
								</span>
								<span class="floatr clear-padding bold riquadroNumero">
								0
								</span>
							</div>
							<div class="pull-right margin-top10 margin-bottom10">
								<input type="button" name="" value="Ultime disposizioni" onclick="window.location.href=getPathContext()+ '/pagamenti/ultimeDisposizioni.do'" id="ultime" class="btn">
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {
				            var urlAjax = getPathContext()+ '/common/linkRapidi.do'
				            $('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Saldo e movimenti" class="saldo_movimenti">
						<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti"><b>Saldo e movimenti</b></a>
					</li>
					<li title="Ricarica Carta" class="carte_ricarica">
						<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta"><b>Ricarica Carta</b></a>
					</li>
					<li title="Il tuo profilo" class="il_tuo_profilo">
						<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo"><b>Il tuo profilo</b></a>
					</li>
					<li title="Ultime disposizioni" class="ultime_disposizioni">
						<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni"><b>Ultime disposizioni</b></a>
					</li>
				</ul>
			</div>
			<div class="riquadro clearfix">
				<h1>
					<div class="flag news">&nbsp;</div>
					Info utili
				</h1>
				<p></p>
				<p><strong>Il Nickname</strong> ti aiuta a ricordare il beneficiario del pagamento, <strong>memorizzalo sempre</strong>! In questo modo sarà difficile dimenticare a chi appartengono le coordinate ed avere duplicazioni all'interno della tua lista di beneficiari.</p>
				<p></p>
			</div>


		<?php
    	break;

    case "carte":
		?>

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
			<script type="text/javascript">
				var numeroConto = 0;
				var CCNumber = 0;
				var hide = false;
				$(document).ready(function(){
				            $('#numConto').val('0');
				            //$('#loading').hide();
				            $.ajax({
				                       async: true,
				                       dataType: 'html',
				                       data: $('#formSX').serialize(),
				                      url: getPathContext() + '/common/cartaConto.do',
				                      beforeSend:function(){
				                    // show gif here, eg:
				                    $("#loading").show();
				               },
				                complete:function(){
				                    // hide gif here, eg:
				                    $("#loading").hide();
				            },
				                       success: function(response) {
				                                   $('#result').html(response);
				                                   //CCNumber = jQuery('<div>').html(response).find('#numCC').html();
				                                   if(hide==false){
				                                               if(CCNumber > 1){
				                                                           sliderInit('CartaConto',1, CCNumber, 1, call);
				                                                           $('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
				                                                           $('#slider_CartaConto .ui-slider-handle.ui-state-default.ui-corner-all').text(numeroConto+1);
				                                               }else{
				                                                           $('#p').hide();
				                                                           $('#n').hide();
				                                               }
				                                   }else{
				                                               //se non ha carte nascondo il box di riepilogo carte
				                                               $('#formSX').hide();
				                                   }
				                       }
				            });
				            //callSaldoMovimenti();
				            //se il numero di conti è maggiore di 1 inizializza e visualizza lo slider
				});
				
				function call(svuota){
				            if(typeof svuota == 'boolean')
				                       $('#svuota').val(svuota);
				            $.ajax({
				                       async: true,
				                       beforeSend:function(){
				                    // show gif here, eg:
				                    $("#loading").show();
				                },
				                complete:function(){
				                    // hide gif here, eg:
				                    $("#loading").hide();
				                },
				                       dataType: 'html',
				                       data: $('#formSX').serialize(),
				                      url: getPathContext() + '/common/cartaConto.do',
				                       success: function(response) {
				                                   $('#result').html(response);
				                                   //CCNumber = jQuery('<div>').html(response).find('#numCC').html();
				                       }
				            });
				}
				
				function nextMovimenti(button){
				            if(numeroConto <= CCNumber){
				                       numeroConto = parseInt($('#slider_CartaConto').children('span').text());
				                       $('#slider_CartaConto').children('span').text(formatter(numeroConto));
				                       $('#slider_CartaConto').siblings(':input').val(numeroConto);
				                       var val = parseInt( $(button).siblings(':input').val() );
				                       var slider = $(button).siblings('.slider');
				                       var step = slider.slider('option', 'step');
				                       slider.slider("value", val + step)
				                       //callSaldoMovimenti();
				            }
				}
				
				function prevMovimenti(button){
				            if(numeroConto>=0){
				                       numeroConto = parseInt($('#slider_CartaConto').children('span').text());
				                       $('#slider_CartaConto').children('span').text(formatter(numeroConto));
				                       $('#slider_CartaConto').siblings(':input').val(numeroConto);
				                       var val = parseInt( $(button).siblings(':input').val() );
				                       var slider = $(button).siblings('.slider');
				                       var step = slider.slider('option', 'step');
				                       slider.slider("value", val - step)
				                       //callSaldoMovimenti();
				            }
				}
				
				function inizializzaFormMassimaliMovimenti() {
				            var maxMens = CCNumber;
				            scalaDivSliderMovimenti('CartaConto', maxMens, 2);
				}
				function scalaDivSliderMovimenti(id, maxMens, val) {
				            var element = $('#slider_CartaConto');
				            var dimensioneMassima = $(element).width();
				            var nuovaDimensione = (dimensioneMassima / maxMens) * val;
				            if (nuovaDimensione < 70)
				                       nuovaDimensione = 70;
				            var contenitore = $('#slider_' + id).parent('div').css('width',
				                                   nuovaDimensione + 45 + 45);
				}
				
				function updateSMovimenti(event, ui, id, funCallBack){
				            $('#slider_'+id).children('span').text( formatter(ui.value) );
				            $('#slider_'+id).siblings(':input').val((parseInt(ui.value)-1).toString());
				
				            if ($.isFunction(funCallBack)) {
				                       funCallBack(event, ui, id);
				            }
				}           
				
				function callBackSlideMovimenti(event, ui, id){
				           numeroConto = parseInt($('#slider_'+id).siblings(':input').val());
				           $('#CartaConto').val(numeroConto);
				           callSaldoMovimenti();
				}
				
				function sliderInit(id,valMin,valMax,valStep,funCallBack) {
				            $('#slider_'+id).slider({
				                       value: $("#"+id).val(),
				                       min: valMin,
				                       max: valMax,
				                       range: "min",
				                       step: valStep,
				                       
				                       change: function(event, ui) {
				                                   updateSMovimenti(event, ui, id, funCallBack );
				                       }
				            });
				            $('#slider_'+id+' > a').text(format($("#"+id).val()));
				            $('#slider_'+id+' > a').addClass("margin-bottom20");
				} 
				
				function format(number) {
				            return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
				}
			</script>
			<form id="formSX" class="margin-bottom20">
				<input type="hidden" name="svuotaCache" value="false" id="svuota">
				<div class="riquadro clearfix" id="riquadroSM">
					<div id="loading" class="caricamentoAjax" style="display: none;">
						<img src="/HT/IMAGES/caricamento.gif">
					</div>
					<div id="puls" class="floatr"></div>
					<h1>
						<div class="flag hidden-xxs riepilogo">&nbsp;</div>
						Riepilogo carte
					</h1>
					<div id="result">
						<script>
							CCNumber = 2
							
							
						</script>
						<div>
							<span id="riquadroSpalla" class="context-buttons">
							<a title="Aggiorna" onclick="call(true);" id="refresh" class="refreshButton pull-right"> </a>
							</span>
							<div class="smSpalla clearfix margin-bottom10">
								<div class="bs-example form-horizontal">
									<div class="form-group">
										<div class="col-xs-12">
											<label class="control-label bold">
											YouCard&nbsp;*9130&nbsp;di&nbsp;Domanin Fabrizio
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="homePageHelp clear-padding">
								Riepilogo situazione carta
							</div>
							<div class="bs-example form-horizontal">
								<div class="form-group">
									<div class="spallaSaldo">
										<div class="col-xs-12">
											<span class="control-label floatl">
											Complessivo mensile:
											</span>
											<span class="spallaSX bold floatr">
											3.000,00 €
											</span>
										</div>
										<div class="col-xs-12">
											<span class="control-label floatl">
											Importo residuo:
											</span>
											<span class="spallaSX bold floatr">
											3.000,00 €
											</span>
										</div>
										<div class="col-xs-12">
											<span class="control-label floatl">
											Saldo prepagata:
											</span>
											<span class="spallaSX bold floatr">
											<strong>7,00 €</strong>
											</span>
										</div>
										<div class="col-xs-12">
											&nbsp;
										</div>
										<div class="col-xs-12">
											<span class="control-label floatl">
											WebSafe
											</span>
											<span class="spallaSX bold floatr">
											Web abilitato
											</span>
										</div>
										<div class="col-xs-12">
											<span class="control-label floatl">
											GeoSafe
											</span>
											<span class="spallaSX bold floatr">
											Attiva solo in Italia
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 clear-padding">
						<div id="intes"></div>
					</div>
					<div class="col-xs-12 clear-padding">
						<div class="sliderContainer sliderContainerSpalla">
							<a href="#Prev" class="meno" onclick="prevMovimenti(this)" id="p">
							<img src="/HT/IMAGES/ico-slide-left.png" height="14" width="14" title="Precedente" alt="Precedente">
							</a>
							<div id="slider_CartaConto" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
								<div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div>
								<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;">1</span>
							</div>
							<a href="#Next" class="piu" onclick="nextMovimenti(this)" id="n">
							<img src="/HT/IMAGES/ico-slide-right.png" height="14" width="14" title="Successivo" alt="Successivo">
							</a>
							<input type="hidden" name="numConto" value="0" id="numConto">
							<input type="text" value="0" id="ContoDeposito" style="display:none;">
						</div>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				$(function() {
				            var urlAjax = getPathContext()+ '/common/linkRapidi.do'
				            $('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Movimenti" class="carte_movimenti">
						<a href="/WEBHT/cartaConto/movimenti.do" title="Movimenti"><b>Movimenti</b></a>
					</li>
					<li title="Bonifico ordinario" class="bonifico_sepa">
						<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
						<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
					<li title="Ultime disposizioni" class="ultime_disposizioni">
						<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni"><b>Ultime disposizioni</b></a>
					</li>
				</ul>
			</div>

		<?php
    	break;


    case "alert":
		?>

			<script>
				$(document).ready(function(){
				            var url = window.location.href;
				            if(url.indexOf('riepilogo')>-1){
				                       $('#riepilogo').hide();
				            }
				});
			</script>
			<div class="riquadro">
				<h1>
					<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
					Allarmi attivi
				</h1>
				<div class="bs-example form-horizontal">
					<div class="form-group clearfix">
						<div class="spallaSaldo">
							<div class="col-xs-12 margin-bottom10">
								<span class="control-label floatl">
								Allarmi in essere <span class="bold">0 di 55</span>
								</span>
							</div>
							<div class="col-xs-12 margin-bottom10 oLeft allarmiTot">
								<img src="/HT/IMAGES/ico_sms.png" height="18" width="18" class="floatl" title="SMS" alt="SMS">
								<span class="margin-left10 bold">0 messaggi di 15</span>
							</div>
							<div class="col-xs-12 margin-bottom10 oLeft allarmiTot">
								<img src="/HT/IMAGES/ico_email.png" height="18" width="18" class="floatl" title="Email" alt="Email">
								<span class="margin-left10 bold">0 email di 20</span>
							</div>
							<div class="col-xs-12 oLeft allarmiTot">
								<img src="/HT/IMAGES/ico_notifiche.png" height="18" width="18" class="floatl" title="App" alt="App">
								<span class="margin-left10 bold">0 notifiche di 20</span>
							</div>
							<div class="pull-right margin-top10 margin-bottom10">
								<input type="button" name="" value="Riepilogo" onclick="window.location.href=getPathContext()+ '/sm/riepilogo.do'" id="riepilogo" class="btn" style="display: none;">
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {
				            var urlAjax = getPathContext()+ '/common/linkRapidi.do'
				            $('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Saldo e movimenti" class="saldo_movimenti">
						<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti"><b>Saldo e movimenti</b></a>
					</li>
					<li title="Bonifico ordinario" class="bonifico_sepa">
						<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
						<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
					<li title="Ricarica Carta" class="carte_ricarica">
						<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta"><b>Ricarica Carta</b></a>
					</li>
					<li title="Gestione contatti" class="gestione_contatti">
						<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti"><b>Gestione contatti</b></a>
					</li>
				</ul>
			</div>
			<div class="riquadro clearfix">
				<h1>
					<div class="flag news">&nbsp;</div>
					Info utili
				</h1>
				<p></p>
				<p><strong style="color: red;">ATTENZIONE:<br></strong>E’ possibile impostare un numero massimo di 55 messaggi di allarme suddivisi come segue: </p>
				<ul>
					<li>15 messaggi massimo via sms</li>
					<li>20 messaggi massimo via email</li>
					<li>20 messaggi massimo via notifica</li>
				</ul>
				<p></p>
				<p>La sezione Carte utilizza un solo messaggio dei 55 a disposizione a prescindere dal numero di carte abbinate.</p>
				<p></p>
			</div>

		<?php
    	break;

 	case "posta":
		?>

			<script>
				$(document).ready(function(){
				            callNuoviDoc(false);
				            callSituazioneRapp(false);
				});
				
				function callNuoviDoc(svuota){
				           $('#svuotaNuoviDoc').val(svuota);
				            $.ajax({
				                       async: true,
				                       beforeSend:function(){$("#loadingNuoviDoc").show(); },
				                complete:function(){ $("#loadingNuoviDoc").hide(); },
				                       dataType: 'html',
				                       data: $('#formSXPosta').serialize(),
				                      url: getPathContext() + '/common/nuoviDocumenti.do',
				                       success: function(response) {
				                                   $('#nuoviDoc').html(response);
				                                   
				                                   var url = window.location.href;
				                                   if(url.indexOf('nuoviDocumenti')>-1){
				                                               $('#inArrivo').hide();
				                                   }
				                       }
				            });
				}
				
				function callSituazioneRapp(svuota){
				           $('#svuotaSituazioneRapp').val(svuota);
				            $.ajax({
				                       async: true,
				                       beforeSend:function(){$("#loadingSitRapp").show();},
				                complete:function(){$("#loadingSitRapp").hide();},
				                       dataType: 'html',
				                       data: $('#formSXRapp').serialize(),
				                      url: getPathContext() + '/common/situazioneRapporti.do',
				                       success: function(response) {
				                                   $('#situazioneRapp').html(response);
				                       }
				            });
				}
				
			</script>
			<div class="riquadro">
				<h1>
					<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
					Notifiche
				</h1>
				<form id="formSXPosta">
					<input type="hidden" name="svuotaCache" value="false" id="svuotaNuoviDoc">
					<span id="riquadroSpalla" class="context-buttons">
					<a title="Aggiorna" onclick="callNuoviDoc(true);" id="refresh" class="refreshButton pull-right"> </a>
					</span>
				</form>
				<div id="loadingNuoviDoc" class="caricamentoAjax" style="display: none;">
					<img src="/HT/IMAGES/caricamento.gif">
				</div>
				<div id="nuoviDoc">
					<div class="bs-example form-horizontal padding-bottom10">
						<div class="form-group">
							<div class="spallaSaldo">
								<div class="col-xs-12">
									<span class="clear-padding control-label floatl">
									Nella posta in arrivo ci sono <b>4 documenti da leggere</b>
									</span>
								</div>
								<div class="pull-right margin-top10">
									<input type="button" name="" value="Posta in arrivo" onclick="window.location.href=getPathContext()+ '/postaPersonale/nuoviDocumenti.do'" id="inArrivo" class="btn" style="display: none;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="riquadro">
				<h1>
					<div class="flag hidden-xxs pannelloControlloAlert">&nbsp;</div>
					Situazioni rapporti
				</h1>
				<form id="formSXRapp">
					<input type="hidden" name="svuotaCache" value="false" id="svuotaSituazioneRapp">
					<span id="riquadroSpalla" class="context-buttons">
					<a title="Aggiorna" onclick="callSituazioneRapp(true);" id="refresh" class="refreshButton pull-right"> </a>
					</span>
				</form>
				<div id="loadingSitRapp" class="caricamentoAjax" style="display: none;">
					<img src="/HT/IMAGES/caricamento.gif">
				</div>
				<div id="situazioneRapp">
					<div class="bs-example form-horizontal">
						<div class="form-group">
							<div class="spallaSaldo">
								<div class="col-xs-12">
									<span class="col-xs-9 clear-padding control-label floatl">
									Rapporti in formato cartaceo 
									</span>
									<span class="clear-padding bold riquadroNumero floatr">
									0
									</span>
								</div>
								<div class="col-xs-12 margin-top10">
									<span class="col-xs-9 clear-padding control-label floatl">
									Rapporti in formato elettronico 
									</span>
									<span class="floatr bold clear-padding riquadroNumero">
									6
									</span>
								</div>
								<div class="pull-right margin-top10">
									<input type="button" name="" value="Pannello rapporti" onclick="window.location.href=getPathContext()+ '/cc/pannelloRapporti.do'" id="pannelloRapporti" class="btn">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {
				            var urlAjax = getPathContext()+ '/common/linkRapidi.do'
				            $('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Saldo e movimenti" class="saldo_movimenti">
						<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti"><b>Saldo e movimenti</b></a>
					</li>
					<li title="Bonifico ordinario" class="bonifico_sepa">
						<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
						<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
					<li title="Ricarica Carta" class="carte_ricarica">
						<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta"><b>Ricarica Carta</b></a>
					</li>
				</ul>
			</div>
			<div class="riquadro clearfix">
				<h1>
					<div class="flag news">&nbsp;</div>
					Info utili
				</h1>
				<p></p>
				<p><b style="color:red;">ATTENZIONE:</b><img src="/HT/IMAGES/CONTENUTI/FrecciaBlink.gif" border="0" alt=""><br>
					I documenti restano nella tua posta in arrivo per un periodo di 90 giorni, successivamente sarà possibile recuperarli nell'archivio documenti.
					<br><br>
					Per visualizzare i documenti è necessario avere Acrobat Reader, scaricabile gratuitamente da questo 
					<a href="http://www.adobe.com/it/products/acrobat/readstep2.html" target="blank">link</a>.
				</p>
				<p></p>
			</div>

		<?php
    	break;

    case "investimenti":
		?>

			<div class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs investimentiIndici">&nbsp;</div>
					Indici
				</h1>
				<span id="refreshIndici" class="context-buttons">
				<a title="Aggiorna" id="refresh" class="refreshButton pull-right"> </a>
				</span>
				<div class="homePageHelp clear-padding margin-bottom10">
					Aggiornato alle <span id="oraRefresh">15:48</span>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
					            richiestaIndici();
					            
					                       /** inizializzazione link da codificare */
					$('#refreshIndici').click(function() {
					            richiestaIndici();
					});
					            
					});         
					
					if(isMobile()){
					$( document ).ajaxComplete(function( event, xhr, settings ) {
					            $(".investimentiMarquee #scorr a").each(function(){
					                       $(this).removeAttr("href");
					
					            })
					});
					}
					
				</script>
				<div id="loadingindici" class="caricamentoAjax" style="display: none;">
					<img src="/HT/IMAGES/caricamento.gif">
				</div>
				<div id="marqueeWrapper" style="opacity: 1;">
					<div class="marquee investimentiMarquee">
						<div id="scorr" class="margin-bottom10">
							<div class="row">
								<div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEMIB&amp;codice=FTSEMIB" title="FTSE MIB">FTSE MIB</a></div>
								<div class="col-xs-3 oRight"><strong class="positivo"> 0,47% </strong></div>
							</div>
							<div class="row">
								<div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSTAR&amp;codice=FTSEITSTAR" title="FTSE Italia STAR">FTSE Italia STAR</a></div>
								<div class="col-xs-3 oRight"><strong class="positivo"> 0,63% </strong></div>
							</div>
							<div class="row">
								<div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITMIDCAP&amp;codice=FTSEITMIDCAP" title="FTSE Italia Mid Cap">FTSE Italia Mid Cap</a></div>
								<div class="col-xs-3 oRight"><strong class="positivo"> 0,44% </strong></div>
							</div>
							<div class="row">
								<div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITSMACAP&amp;codice=FTSEITSMACAP" title="FTSE Italia Small Cap">FTSE Italia Small Cap</a></div>
								<div class="col-xs-3 oRight"><strong class="positivo"> 0,41% </strong></div>
							</div>
							<div class="row">
								<div class="col-xs-9"><a href="/WEBHT/investimenti/titoliIndiceForm.do?mercato=MTA&amp;chain=MTA.FTSEITALLSHARE&amp;codice=FTSEITALLSHARE" title="FTSE Italia All-Share">FTSE Italia All-Share</a></div>
								<div class="col-xs-3 oRight"><strong class="positivo"> 0,47% </strong></div>
							</div>
						</div>
					</div>
				</div>
				<div id="actions" class="actions pull-right margin-bottom5">
					<div class="actions pull-right">
						<input type="button" class="btn button thin XL hidden-xs" value="Indici" onclick="javascript:goToPage('/investimenti/indici.do')">
					</div>
				</div>
			</div>
			<div class="riquadro clearfix">
				<div class="box_body">
					<h1>
						<div class="flag hidden-xxs ricerca">&nbsp;</div>
						Ricerca Veloce
					</h1>
					<form id="formRicercaTitoliRapid2" method="post" action="/WEBHT/investimenti/ricercaTitoliRapidaForm.do" class="formRicercaTitoli">
						<div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
						<div class="col-xs-12">
							<label>E' possibile digitare la sola lettera iniziale per una ricerca alfabetica mirata. </label>
						</div>
						<div class="padding5">
							<input type="text" name="isinDescrizioneRapid" size="30" value="Descrizione/Isin" onclick="fullSelect('isinDescrizioneTitRapid')" id="isinDescrizioneTitRapid" class="form-control">
						</div>
						<div class="padding5">
							<select name="mercatoRapid" id="selMercatoRapid" class="form-control">
								<option value="MTA">BorsaItaliana MTA</option>
								<option value="MTA|ETF|MOT|TLX|HMF|SEDEX|IDEM">Borsa Italiana tutti i mercati</option>
								<option value="ETF">BorsaItaliana ETFPLUS</option>
								<option value="MOT|TLX|HMF">Mercati Obbligazionari</option>
								<option value="SEDEX">BorsaItaliana Sedex</option>
								<option value="IDEM">BorsaItaliana Idem</option>
								<option value="PAR">Paris Bourse</option>
								<option value="XET">Deutsche Börse Group</option>
								<option value="AMS">Amsterdam</option>
								<option value="NASDAQ">Nasdaq</option>
								<option value="NYSE">NYSE</option>
								<option value="AMEX">Amex</option>
							</select>
						</div>
						<div class="actions pull-right margin-top5">
							<div class="actions pull-right  margin-bottom5">
								<input id="cercaButton" class="btn button thin" type="submit" value="Cerca" title="Cerca">
							</div>
							<div class="actions pull-right">
								<input type="button" class="btn button thin XL" value="Ricerca avanzata" onclick="javascript:goToPage('/investimenti/investimentiRicercaTitoli.do')">
							</div>
						</div>
					</form>
				</div>
			</div>
			<script type="text/javascript">
				$(function() {
				            var urlAjax = getPathContext()+ '/common/linkRapidi.do'
				            $('#modificaLink').ajaxDialog('dialogLinkRapidi', urlAjax, { title:'Link rapidi' });
				});
			</script>
			<div id="linkRapidi" class="riquadro clearfix">
				<h1>
					<div class="flag hidden-xxs linkRapidi">&nbsp;</div>
					Link rapidi
				</h1>
				<span id="riquadroSpalla">
				<button class="modificaButton pull-right" value=" " name="modifica" id="modificaLink" aria-label="Modifica Link rapidi" title="Modifica Link rapidi"></button>
				</span>
				<ul>
					<li title="Saldo e movimenti" class="saldo_movimenti">
						<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti"><b>Saldo e movimenti</b></a>
					</li>
					<li title="Ultime disposizioni" class="ultime_disposizioni">
						<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni"><b>Ultime disposizioni</b></a>
					</li>
					<li title="Ricarica Carta" class="carte_ricarica">
						<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta"><b>Ricarica Carta</b></a>
					</li>
					<li title="Bonifico ordinario" class="bonifico_sepa">
						<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario"><b>Bonifico ordinario</b></a>
					</li>
					<li title="Ricariche telefoniche" class="ricariche_cellulare">
						<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricariche telefoniche"><b>Ricariche telefoniche</b></a>
					</li>
				</ul>
			</div>


		<?php
    	break;

    case "servizi":
		?>


		<?php
    	break;

   }

?>

</div>