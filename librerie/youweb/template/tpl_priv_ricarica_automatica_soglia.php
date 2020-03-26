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
	function cambioTipoLimite() 
	{
		if ($('[name=tipoLimite]:checked').val()=='N') {$('td.limiteAutoricariche .ui-slider').slider('disable');} 
		else {$('td.limiteAutoricariche .ui-slider').slider('enable');} 
	}
	function aggiornaRaggiungimento(event, ui) 
	{
		$('#soglia').text(formatter(ui.value)+' Euro');
		$('#slider_importoSoglia').closest('.sliderContainer').find('.valSel').text(formatter(ui.value)+' EUR');
		var valore = ui.value+10;
		var massimaleCarta = '10000.00';
		massimaleCarta = massimaleCarta.replace(/\.00/gi, '');
		massimaleCarta = parseInt(massimaleCarta);
		if (valore<massimaleCarta){	$('#importoTarget').val(formatter(valore));}
		else{$('#importoTarget').val(formatter(massimaleCarta));}
		visualizzaNascondiPulsantiIncremento();
	}
	$(document).ready(function() 
	{
		sliderLimiti('importoSoglia',10,1000,10,aggiornaRaggiungimento);
		$('#slider_importoSoglia').closest('.sliderContainer').find('.valSel').text('10 EUR');

		$("#numeroAutoricariche").hide();
		$('#slider_importoSoglia .ui-slider-handle.ui-state-default.ui-corner-all').text('10');
		
			$('#numeroAutoricariche').selectToUISlider(
			{
				labels: 5,
				labelSrc: 'text',
			    sliderOptions: {
			    	change: function(e,ui){
			    		$('input:radio[name=tipoLimite]:nth(1)').attr('checked',true);
                        
                        $('#numeroAutoricariche').closest('.sliderContainer').find('.valSel').text(formatter(ui.value +1));

			    	}}
			});
			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
		
		
		
			$('#raggiungimento').text(formatter('10')+' Euro');			
		
		
			$('#importoTarget').val(formatter('20'));
			visualizzaNascondiPulsantiIncremento();
		
	});
	function getImporto() 
	{
		var importo = ''+$('#importoTarget').attr('value')+',00';
		importo = importo.replace(/\./gi, '');
		importo = importo.replace(',', '.');
		return importo;
	}
	function importoPulsanti(node, value)
	{
		if ($(node).hasClass('aggiungiDisabled')){return;}
		var importo;
		if (value=='0') 
		{
			importo = parseInt($('#importoSoglia').val())+10;
		}
		else 
		{
			importo = getImporto();
		}
		importo = importo*1 + value*1;
		$('#importoTarget').attr('value',formatter(importo));
		visualizzaNascondiPulsantiIncremento();
	}
	function visualizzaNascondiPulsantiIncremento()
	{
		var importoTarget = $('#importoTarget').val();
		importoTarget = importoTarget.replace(/\./gi, '');
		importoTarget = parseInt(importoTarget);
		var massimaleCarta = '10000.00';
		massimaleCarta = massimaleCarta.replace(/\.00/gi, '');
		massimaleCarta = parseInt(massimaleCarta);
		var differenza = massimaleCarta - importoTarget;
		//if (!isMobile()) {
			$('#aggiungiMille').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroMille.gif');
			$('#aggiungiMille').removeClass('aggiungiDisabled').addClass('aggiungiEnabled');
		//}
		$('#aggiungiCento').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroCento.gif');
		$('#aggiungiCento').removeClass('aggiungiDisabled').addClass('aggiungiEnabled');
		$('#aggiungiDieci').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroDieci.gif');
		$('#aggiungiDieci').removeClass('aggiungiDisabled').addClass('aggiungiEnabled');
		$('#aggiungiUno').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroUno.gif');
		$('#aggiungiUno').removeClass('aggiungiDisabled').addClass('aggiungiEnabled');
		if (differenza<1000)
		{
			$('#aggiungiMille').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroMilleDisabled.gif');
			$('#aggiungiMille').addClass('aggiungiDisabled').removeClass('aggiungiEnabled');
			if (differenza<100)
			{
				$('#aggiungiCento').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroCentoDisabled.gif');
				$('#aggiungiCento').addClass('aggiungiDisabled').removeClass('aggiungiEnabled');
				if (differenza<10)
				{
					$('#aggiungiDieci').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroDieciDisabled.gif');
					$('#aggiungiDieci').addClass('aggiungiDisabled').removeClass('aggiungiEnabled');
					if (differenza<1)
					{
						$('#aggiungiUno').attr('src','/HT/IMAGES/CONTODEPOSITO/numeroUnoDisabled.gif');
						$('#aggiungiUno').addClass('aggiungiDisabled').removeClass('aggiungiEnabled');
					}
				}
			}
		}
	}
</script>
<style>
	td.limiteAutoricariche .ui-slider {
		margin-right: 30px;
	}
	.aggiungiEnabled {
		cursor: pointer; 
		cursor: hand;
		vertical-align: bottom;
	}
	.aggiungiDisabled {
		cursor: inherit;
		vertical-align: bottom;
	}
</style>





<div class="riquadro clearfix">
	
	
	




	
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
			
		
		
			
		
		
			
		
			
				
 					<span>Ricarica automatica a soglia</span>
 					
				
				
				
				
					
				
			
			
			
		
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
							<span>Cognome Nome</span>
						</div>					
						<div class="row">
							<label>	Saldo residuo:</label>
							<span>7,00 EUR</span>
						</div>					
						<div class="row">
							<label>Tipo carta:</label>
							<span>YouCard</span>
						</div>					
						<div class="row">
							<label>Capienza carta:</label>
							<span>10.000,00 EUR</span>
						</div>					
						<div class="row">
							<label>	Numero carta:</label>
							<span>0000 0000 0000 0000</span>
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
							<label>	Conto di addebito:</label>
							<span>00000000</span>
						</div>					
						<div class="row">
							<label>Filiale:</label>
							<span>
								MILANO -
							    
									
									
										0000
									
								
							</span>
						</div>					
						<div class="row">
							<label>Intestato a:</label>
							<span>Cognome Nome</span>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	

<form id="formAutoricaricaSoglia" method="post" action="/WEBHT/cartaConto/autoricaricaSogliaConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="593b114c66e89fd4e2d54061878e50a4"></div>
	<div class="section clearfix">
		<h3 class="titleSection">
			<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
			
			








		
			Imposta ricarica a soglia
		
		
		
		


		</h3>
		 
		 <div class="bs-example form-horizontal">
			<div class="form-group clearfix">
				<div class="form-field-input col-lg-5 col-xs-12">
					<label for="importoRicarica" class="control-label"> 
	 					Effettua una ricarica se il saldo disponibile scende sotto questo importo:
	 				</label > 	 			
			 			<div class="sliderContainer sliderValSel">
			 				<span class="valSel"></span>
				 			<span class="min">10</span>
				 			<span class="max">1.000</span>
				 			<a href="#" class="meno" onclick="return sottrai(this)">
				 				<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" /><span>10</span>

				 			</a> 		
				 			<div id="slider_importoSoglia" class="slider"></div>
				 			<a href="#" class="piu" onclick="return somma(this)">
				 				<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" /><span>10</span>

				 			</a>
				 			<input type="text" name="importoSoglia" value="10" id="importoSoglia" style="display:none;" />
			 			</div>
		 		</div>
		<div class="form-field-input col-lg-7 col-xs-12 padding-top-xs-10">
				   <label for="importoRicarica" class="control-label"> Al raggiungimento dei<span class="resume" id="soglia">0 Euro</span>riporta il saldo a</label >
				   <div class="form-group col-xs-1  col-sm-1">
				      <span class="vincola_box" onclick="importoPulsanti(this, '0');">X</span>
				   </div>
				   <div class="form-group col-xs-11  col-sm-4"><div class="form-group col-xs-8"><input type="text" id="importoTarget" name="importoTarget" class="form-control" readonly="readonly" />
				</div>
				<div class="form-group  col-xs-4"><label>,00 </label></div></div>
				<div class="form-group  col-xs-1"><span class="resume"></span></div>
				<div class="form-group  col-xs-11  col-sm-6">
				   <span class="vincola_box" id="aggiungiUno" onclick="importoPulsanti(this, '1');">1</span>
				   <span class="vincola_box" id="aggiungiUno" onclick="importoPulsanti(this, '10');">10</span>
				   <span class="vincola_box" id="aggiungiUno" onclick="importoPulsanti(this, '100');">100</span>
				   <span class="vincola_box" id="aggiungiUno" onclick="importoPulsanti(this, '1000');">1000</span>
				</div>
				</div>



				
				




			<div class="form-field-input col-xs-12 ">
     <label for="giornoRicarica1" class="control-label"> Numero massimo di ricariche nel mese:</label > 
      <div class="form-group col-xs-12 clear-padding-left">
           <div class="form-group col-sm-5  clear-padding-left">
              <div class="form-group col-xs-1 clear-padding-left"><input type="radio" name="tipoLimite" value="N" onclick="cambioTipoLimite()" /></div>
               <div class="form-group col-sm-6  clear-padding-left"><label for="nessunLimite">Nessun limite</label></div>
           </div>
          <div class="form-group col-sm-7  clear-padding-left">
              <div class="form-group col-xs-1  clear-padding-left"><input type="radio" name="tipoLimite" value="S" onclick="cambioTipoLimite()" /></div>
              <div class="form-group col-sm-6  clear-padding-left">
                <div class="sliderContainer sliderValSel">
	<span class="valSel">1</span>
<select name="numeroAutoricariche" id="numeroAutoricariche"><option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                       <option value="4">4</option>
                                      <option value="5">5</option></select>
                     </div>
                </div>

           </div></div></div>



			</div>
		</div>
	</div>
</form>
</div>	

<div class="pull-right margin-bottom20">
		
		<form id="formAutoricaricaSoglia" method="post" action="/WEBHT/cartaConto/autoricaricaSogliaConferma.do" class="form-horizontal" style="float:left"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="593b114c66e89fd4e2d54061878e50a4"></div>
			<input type="submit" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
		</form>
		
		<input type="button" name="conferma" value="Avanti" onclick="$('#formAutoricaricaSoglia').submit()" class="btn btn-primary" alt="Imposta">
	</div>
					
