					<div class="visible-print-block"> 
						<img src="/HT/fe/img/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							23/05/2017	
						</div>
					</div>
					
					
					
					



<div class="riquadro">













<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			<span>Gestione dispositivi APP</span>
 	</h1>
	
	
<div class="col-xs-12 hidden-xs hidden-print">
				


<div class="contentPagina">
			Tramite questa sezione hai la possibilit&agrave; di visualizzare/gestire i dispositivi tramite i quali puoi accedere alla YouApp.
		</div>



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

	$(document).ready(function() {
		$("#dialog-confirm").dialog({
			title:'Conferma eliminazione device',
//			height:170,
			modal: true,
			autoOpen: false,
			resizable: false,
			close: closeDialogFun
		});
	});
	
	function apriDialogCancellazioneDevice(chiaveDevice, href) {
		$(".deviceAlias").html($(href).attr('alias'));
		$(".deviceAlias").attr("chiaveDevice", chiaveDevice);
		$("#dialog-confirm").dialog('open');
	}
	
	function chiudiDialogCancellazione() {
		$("#dialog-confirm").dialog('close');
	}
	
	function cancellaDispositiviApp() {
		var chiaveDeviceDaCancellare = $(".deviceAlias").attr("chiaveDevice"); 
		encodeUrl('/serviziPerTe/cancellaDispositiviApp.do?chiaveDevice=' + chiaveDeviceDaCancellare);
	}
</script>

<div id="dialog-confirm" class="margin-top10" style="display:none;">
	<div class="ui-dialog-content">
		<div class="col-xs-12">
			<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
			Procedendo con l'operazione cancellerai la ricezione delle notifiche e l'accesso senza OTP su questo dispositivo. <br/> Clicca su CONFERMA per proseguire altrimenti ANNULLA
			<br />
			<b><span class="deviceAlias"></span></b>
		</div>
	</div>
	<div class="col-xs-12 padding-right10" style="margin: 10px 0 0; padding: 8px 0;">
		<div class="pull-right">
			
			
	<input type="button" name="" value="Annulla" onclick="chiudiDialogCancellazione()" class="btn">
	<input type="button" name="" value="Conferma" onclick="cancellaDispositiviApp()" class="btn">	
		</div>
	</div>
</div>






<script type="text/javascript">
	var formToSubmit = null;
	
	$(document).ready(function() {
		$("#disableAlert-confirm").dialog({
			title:'Conferma modifica preferenze device',
//			height:150,
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () { return chiudiDialogDisabilitaAlertDevice(true);}
		});
	});
	

	function apriDialogDisabilitaAlertDevice(form) {
		formToSubmit = form;
		$("#disableAlert-confirm").dialog('open');
	}
	function chiudiDialogDisabilitaAlertDevice(xTrigger) {
		if (formToSubmit!=undefined) {
			var select = formToSubmit.find('select');
			select.val('S');
			select.trigger('click');
			// restore old value
			formToSubmit = null;
		}
		
		if (xTrigger!=true) {
			$("#disableAlert-confirm").dialog('close');
		}
		return false;
	}
	function disabilitaAlertDevice() {
		formToSubmit.submit();
	}
	
	
	$(document).ready(function() {
			$("#disableAccessoEasy-confirm").dialog({
			title:'Conferma modifica preferenze device',
//			height:150,
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () {return chiudiDialogDisabilitaAccessoEasyDevice(true);}
		});
	});
	
	function apriDialogDisabilitaAccessoEasyDevice(form) {
		formToSubmit = form;
		$("#disableAccessoEasy-confirm").dialog('open');
	}
	function chiudiDialogDisabilitaAccessoEasyDevice(xTrigger) {
		if (formToSubmit!=undefined) {
			var select = formToSubmit.find('select');
			select.val('S');
			select.trigger('click');
			// restore old value
			formToSubmit = null;
		}
		
		if (xTrigger!=true) {
			$("#disableAccessoEasy-confirm").dialog('close');
		}
		return false;
	}
	function disabilitaAccessoEasyDevice() {
		formToSubmit.submit();
	}
</script>

<div id="disableAlert-confirm" style="display:none;">
	<div class="col-xs-12 margin-top10">
		<div class="ui-dialog-content">
			<p>
				<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
				Confermi di voler disabilitare momentaneamente la ricezione delle notifiche su questo dispositivo? <br/> Potrai in ogni momento riattivarle.
				<!-- <br />
				<b><span class="deviceAlias"></span></b> -->
			</p>
		</div>
		
		<div class="col-xs-12 padding-right10" style="margin: 10px 0 0; padding: 8px 0;">
			<div class="pull-right">
				
				
		<input type="button" name="" value="Annulla" onclick="chiudiDialogDisabilitaAlertDevice()" class="btn">
		<input type="button" name="" value="Conferma" onclick="disabilitaAlertDevice()" class="btn">	
			</div>
		</div>		

	</div>
</div>

<div id="disableAccessoEasy-confirm" style="display:none;">
	<div class="col-xs-12 margin-top10">
		<div class="ui-dialog-content">
			<p>
				<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
				Confermi di voler disabilitare momentaneamente l'accesso senza OTP su questo dispositivo? <br/>Potrai in ogni momento riattivarlo.
				<!-- <br />
				<b><span class="deviceAlias"></span></b> -->
			</p>
		</div>
		<div style="border-top: 1px solid #B0B0B0; margin: 10px 0 0; padding: 8px 0;">
			<div class="pull-right" >
				
				
				<input type="button" name="" value="Annulla" onclick="chiudiDialogDisabilitaAccessoEasyDevice()" class="btn">
<input type="button" name="" value="Conferma" onclick="disabilitaAccessoEasyDevice()" class="btn btn-primary">	
			</div>
		</div>
	</div>
</div>



<script>
	$(document).ready(function() {
		if (isMobile()) {
			$("#tableDispositivi").cardBoxTable({
				colTitleIdx:  2,
				colActionIdx: 0,
				colActionPos: "top-right",
				show: function() {
					$('.table-responsive').addClass('cardbox-background');
					$(this).find('select[id^="alert"]').changeAttrId("new");
	 				$(this).find('select[id^="accessoEasy"]').changeAttrId("new");
				},
			});
		} 
		initSliders();
	});


	function initSliders() {
 		//var t0 = performance.now();
 		
 		var idParent = "#tableDispositivi" + " ";
		if ($("#tableDispositivi:visible").length == 0) {
 			idParent = "#cardbox-wrapper" + " ";
 		}

		$(idParent + 'select[id^="alert"]').each( function( ) {
			var slider = $(this).selectToUISlider({labelSrc: 'text', sliderOptions: {
	       change: function(event, ui) {
	        		if (ui.value==0){ 
	        			attivaOn();
	        			$(ui.handle).closest('.ui-slider').css("background-color","#0E977F");
	        		}
	        		else if (ui.value==1){ 
	        			attivaOff();
	        			$(ui.handle).closest('.ui-slider').css("background-color","#92989c");
	        			
	        		}
	        		if (ui.value==1) {
	        			return apriDialogDisabilitaAlertDevice($(this).closest('form'));
	        		}
	        		return $(this).closest('form').submit();
	        	}
	    	}});
	    	if (slider.val()=='S') { 
	    		attivaOn(slider);
	    	} else if (slider.val()=='N') {	
	    		attivaOff(slider);
	    	}
		});

		$(idParent + 'select[id^="accessoEasy"]').each( function( ) {
	    	var slider = $(this).selectToUISlider({labelSrc: 'text', sliderOptions: {
	        	change: function(event, ui) {
	        		if (ui.value==0) { attivaOn(); }
	        		else if (ui.value==1) { attivaOff(); }
	        		if (ui.value==1) {
	        			return apriDialogDisabilitaAccessoEasyDevice($(this).closest('form'));
	        		}
	        		return $(this).closest('form').submit();
	        	}
	    	}});
	    	if (slider.val()=='S') {
	    		attivaOn(slider);
	    	} else if (slider.val()=='N') {
	    		attivaOff(slider);
	    	}
		});

		//console.log("Call to cardBoxTable took " + (performance.now() - t0) + " milliseconds.")
	}
	
	function attivaOn(select) {
		var parentNode = $(select).parent();
		var on = parentNode.find('span.ui-slider-label.ui-slider-label-show')[0];
		$(on).css('color','#003F63').css('font-weight','bold');
		
		var off = parentNode.find('span.ui-slider-label.ui-slider-label-show')[1];
		$(off).css('color','#666666').css('font-weight','normal');

	}
	
	function attivaOff(select) {
		var parentNode = $(select).parent();
		var off = parentNode.find('span.ui-slider-label.ui-slider-label-show')[1];
		$(off).css('color','#003F63').css('font-weight','bold');

		var on = parentNode.find('span.ui-slider-label.ui-slider-label-show')[0];
		$(on).css('color','#666666').css('font-weight','normal');
		
	}
	
	//sovrascrivo la funzione dell'include
	function closeDialogFun() {
		$('.OUTLetFac tr').removeClass('ui-state-highlight');
	}
</script>
<style>
	.tabellaSelezioneCC table tr td {
		background: #FFF;
	}
	
	.ui-slider {
		left: 30%;
	}
	
	.tabellaSelezioneCC table tr td {
	 height: 50px;
	}
</style>



<!-- M I O O O O O O  -->



<!-- E N D  M I O O O O O-->

<div class="section clearfix">
	<h3 class="titleSection">
		DISPOSITIVI ABILITATI
	</h3> 

	<div class="table-responsive tabSelezioneCarte" style="display: block;">
		<div class="dataTables_wrapper no-footer">
			<div id="tableDispositivi_wrapper" class="dataTables_wrapper no-footer"><table id="tableDispositivi" class="table table-striped dataTable no-footer" role="grid">
				<colgroup>
					<col width="8%">
					<col width="17%">
					<col width="15%">
					<col width="20%">
					<col width="20%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr role="row"><th style="border-left: 1px solid rgb(176, 176, 176); width: 54px;" class="sorting_disabled" rowspan="1" colspan="1"></th><th class="oCenter sorting_disabled" rowspan="1" colspan="1" style="width: 140px;">Tipo dispositivo</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 121px;"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 168px;">Data e ora registrazione dispositivo</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 168px;">Notifiche</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 168px;">Accesso Easy</th></tr>
				</thead>
				<tbody>
				<tr role="row" class="odd">
							<td class="vhMiddle oCenter">
								<a href="#" onclick="apriDialogCancellazioneDevice('ee84c6ce31d4eb78bdbb4e39f5c87bb2', this)" alias="iPadFab"><img src="/HT/fe/img/i_cancella.gif
" height="20" width="20" title="cancella" alt="cancella"></a>
							</td>
							<td class="oCenter"><img src="/HT/fe/img/APPLE_TB.png" alt="APPLE_TB"></td>
							<td>Nickname:<br class="hidden-xs"><b>iPadAnton</b></td>
							<td class="oCenter">27/01/2017 - 12:50</td>
							
							<td class="oCenter" style="padding-left: 20px;">
								<form id="formGestioneDispositiviApp" method="post" action="/strutt_priv_new.php?pag=gestione_dispositivi_app&lev1=servizi&wdg=02|17|18" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAlert" id="alert1" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
								</form>
							</td>

							
							<td class="oCenter">
									<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/modificaDispositiviApp.do" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAccessoEasy" id="accessoEasy1" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
									</form>
								</td>
							
						</tr><tr role="row" class="even">
							<td class="vhMiddle oCenter">
								<a href="#" onclick="apriDialogCancellazioneDevice('c7436cd1502f1b09578dafa9ec1be79b', this)" alias="smartphoneFab"><img src="/HT/fe/img/i_cancella.gif
" height="20" width="20" title="cancella" alt="cancella"></a>
							</td>
							<td class="oCenter"><img src="/HT/fe/img/ANDROID_SP.png" alt="ANDROID_SP"></td>
							<td>Nickname:<br class="hidden-xs"><b>smartphoneGiov</b></td>
							<td class="oCenter">13/01/2017 - 12:50</td>
							<td class="oCenter" style="padding-left: 20px;">
								<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/modificaDispositiviApp.do" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAlert" id="alert2" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
								</form>
							</td>

							
							<td class="oCenter">
									<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/modificaDispositiviApp.do" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAccessoEasy" id="accessoEasy2" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
									</form>
								</td> 
						</tr><tr role="row" class="odd">
							<td class="vhMiddle oCenter">
								<a href="#" onclick="apriDialogCancellazioneDevice('8d8e35a125e4b658f5959e9a0b0736bb', this)" alias="iPhone di Stefano"><img src="/HT/fe/img/i_cancella.gif
" height="20" width="20" title="cancella" alt="cancella"></a>
							</td>
							<td class="oCenter"><img src="/HT/fe/img/APPLE_SP.png" alt="APPLE_SP"></td>
							<td>Nickname:<br class="hidden-xs"><b>iPhone di Stefano</b></td>
							<td class="oCenter">10/03/2017 - 12:50</td>
							<td class="oCenter" style="padding-left: 20px;">
								<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/modificaDispositiviApp.do" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAlert" id="alert3" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
								</form>
							</td>

							
							<td class="oCenter">
									<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/modificaDispositiviApp.do" class="formGestioneDispositiviApp">
									<input type="hidden" name="chiaveDevice" value="c7436cd1502f1b09578dafa9ec1be79b">
									<select name="statoAccessoEasy" id="accessoEasy3" style="display: none;" class="form-control"><option value="S" selected>On</option>
										<option value="N" >Off</option></select>
									</form>
								</td> 
						</tr></tbody>
			</table></div>
		</div>
	</div>
</div>
<form id="formIlTuoProfilo" method="post" action="/WEBHT/serviziPerTe/ilTuoProfilo.do">
	




<div class="pull-right margin-bottom20 margin-top10">
	<input type="submit" value="Indietro" class="btn btn-primary" alt="Indietro">
</div>
</form>
</div>