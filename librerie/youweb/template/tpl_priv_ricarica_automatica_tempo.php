					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/04/2017	
						</div>
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
$(document).ready(function(){
	sliderLimiti('importo',10,1000,10);
})

</script>

<script type="text/javascript">
function cambioFrequenza() {
		if ($('#frequenza').val()=='S') 
		{
			
			$('#frequenza').closest('.sliderContainer').find('.valSel').html('Settimanale');
			$('#trGiornoRicarica1').show();
			$('#trGiornoRicarica2').hide();
			$('#giornoRicarica1').removeAttr('disabled');
			$('#giornoRicarica2').attr('disabled', 'disabled');
		} else {

			$('#frequenza').closest('.sliderContainer').find('.valSel').html('Mensile');
			$('#trGiornoRicarica2').show();
			$('#trGiornoRicarica1').hide();
			$('#giornoRicarica1').attr('disabled', 'disabled');
			$('#giornoRicarica2').removeAttr('disabled');
		} 
	}


	
	
		

	$(document).ready(function() 
	{
		
		
		
		$(".sliderContainer").each(function(){
			$(this).find('select').hide();
		})
	
		
		
			$('#frequenza').selectToUISlider({
				labels: 2,
				labelSrc: 'text',
				sliderOptions: { 
					change: function(e,ui) {
						cambioFrequenza();
					}
				}
			});
		
		
			$('#giornoRicarica1').selectToUISlider({
				labels: 7,
				labelSrc: 'text',
				sliderOptions: { 
					change: function(e,ui) {
						$(ui.handle).closest('.sliderContainer').find('.valSel').html($(ui.handle).attr('aria-valuetext'));
						
					}
				}
			});
		
		
			$('#giornoRicarica2').selectToUISlider({
				labels: 3,
				labelSrc: 'text',
				sliderOptions: { 
				    change: function(e,ui) {
					$(ui.handle).closest('.sliderContainer').find('.valSel').html($(ui.handle).attr('aria-valuetext'));
				     }
				}
				});

		
		$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
		
		cambioFrequenza();

		
		$('#slider_importo .ui-slider-handle.ui-state-default.ui-corner-all').text('10');
		$('#slider_importo').closest('.sliderContainer').find('.valSel').html(10 + ' ' + 'EUR');
		$('#giornoRicarica1').closest('.sliderContainer').find('.valSel').html('Luned&igrave;');
		$('#giornoRicarica2').closest('.sliderContainer').find('.valSel').html('Primo del mese');
	});
	




</script>


<style type="text/css">
	.ui-slider .ui-state-active .ui-slider-tooltip, .ui-slider .ui-state-focus .ui-slider-tooltip, .ui-slider .ui-state-hover .ui-slider-tooltip 
	{
	    
	    width: 12em;
	}
	.modificaDimensioneEleft .ui-slider-label
	{
		width: 90px;
	}
	.ui-slider-label.ui-slider-label-show{
		width:100px;
	}
	.ui-slider dd{
		margin-left: 30px!important;
	}
	
	span.ui-slider-label{
		margin-left: -5px!important;
	}
	
	span.ui-slider-tooltip.ui-widget-content.ui-corner-all{
		margin-left: -60px!important;
	}
</style>
<div class="riquadro clearfix">
	<div class="col-xs-12 clearfix">
		
		
		
	</div>
	
	








	


	
	
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Ricarica automatica a tempo</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Ricarica automatica YouCard&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	<div class="section clearfix">
		<div class="row-height">
			<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>
						
						








		
			Carta selezionata
		
		
		
		


					</h3>
					<div>
						<div class="row">
							<label>Intestata a:</label>
							<span>Dtlun Gacsaceia</span>
						</div>					
						<div class="row">
							<label>	Saldo residuo:</label>
							<span>98,92 EUR</span>
						</div>					
						<div class="row">
							<label>Numero carta:</label>
							<span>5400 5808 9000 1650</span>
						</div>					
						<div class="row">
							<label>Capienza carta:</label>
							<span>10.000,00 EUR</span>
						</div>					
						<div class="row">
							<label>Tipo carta:</label>
							<span>YouCard</span>
						</div>					
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>
						
						








		
			Rapporto di addebito
		
		
		
		


					</h3>
					<div>
						<div class="row">
							<label>Conto di addebito:</label>
							<span>00585163</span>
						</div>					
						<div class="row">
							<label>Filiale:</label>
							<span>	
								VERONA AG. 3 -
							    
									
									0004
								
							</span>
						</div>					
						<div class="row">
							<label>Intestato a:</label>
							<span>Ncga No  Cdrlsaagteausigioe</span>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	



<form id="formAutoricaricaTempo" method="post" action="/WEBHT/cartaConto/autoricaricaTempoConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="531e6b4fb778bbc9b65010b790fbaafa"></div>
	<div class="section clearfix" style="padding-right:10px">
	<h3 class="titleSection">
		<input type="hidden" name="codContoCorrente" value="001|0898|089800115895">
		
		








		
			Imposta ricarica a tempo
		
		
		
		


	</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group col-sm-9 col-xs-12" style="padding-right:15px">
			
					<div>
						<label class="control-label" for="importoRicarica">Importo della ricarica</label> 
					</div>
					<div>	 			
						<div class="sliderContainer sliderValSel">
							<span class="valSel"></span>
							<span class="min">10</span>
							<span class="max">1.000</span>
							<a href="#" class="meno" onclick="return sottrai(this)">
								<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" />
								<span>10</span>
							</a> 		
							<div id="slider_importo" class="slider"></div>
							<a href="#" class="piu" onclick="return somma(this)">
								<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" />
								<span>10</span>
							</a>
							<input type="text" name="importo" value="10" id="importo" style="display:none;" />
						</div>
					</div>
				</div>
				<div class="form-group col-sm-3 col-xs-12" style="padding:0 15px">
					<div>
						<label for="frequenza" class="control-label">Frequenza</label> 
					</div>
					<div> 			
						<div class="sliderContainer sliderValSel padding-right10">
							<span class="valSel"></span>
							<select name="frequenza" id="frequenza" class="form-control">
								<option value="S" selected="selected">Settimanale</option>
								<option value="M">Mensile</option>
							</select>
						</div>	
					</div>
				</div>

				<div class="form-group col-sm-9 col-xs-12 padding-bottom10" id="trGiornoRicarica1"  style="padding:0 15px">
					<div>
						<label for="giornoRicarica1" class="control-label">
							In quale giorno della settimana vuoi effettuare la ricarica?
						</label> 
					</div>	
					<div>		
						<div class="sliderContainer sliderValSel">
							<span class="valSel"></span>
							<select name="giornoRicarica" id="giornoRicarica1" class="form-control">
								<option value="LU" selected="selected">Luned&igrave;</option>
								<option value="MA">Marted&igrave;</option>
								<option value="ME">Mercoled&igrave;</option>
								<option value="GI">Gioved&igrave;</option>
								<option value="VE">Venerd&igrave;</option>
								<option value="SA">Sabato</option>
								<option value="DO">Domenica</option>
							</select>
						</div>	
					</div> 					
				</div>



				<div class="form-group col-xs-9 padding-bottom10" id="trGiornoRicarica2"  style="padding:0 15px; display: none">
					<div>
						<label for="giornoRicarica2" class="control-label">
							Giorno in cui ricaricare?
						</label>
					</div>	
				<div> 			
				<div class="sliderContainer sliderValSel">
					<span class="valSel"></span>
					<select name="giornoRicarica" id="giornoRicarica2" class="form-control">
						<option value="01">Primo del mese</option>
						<option value="10">Dieci del mese</option>
						<option value="20">Venti del mese</option>
					</select>
				</div>	
			</div> 					
		</div>
	</div>
			
				
	</div>	
</form>
</div>
<div class="pull-right margin-bottom20">
	<form id="formAutoricarica" method="post" action="/WEBHT/cartaConto/autoricarica.do" class="form-horizontal" style="float:left"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="531e6b4fb778bbc9b65010b790fbaafa"></div>
		
		<input type="submit" name="annulla" value="Annulla" class="btn  btn-primary" alt="Annulla">
	</form>
	
	<input type="button" name="conferma" value="Conferma" onclick="$('#formAutoricaricaTempo').submit()" class="btn  btn-primary execute" alt="Conferma">
</div>
					
