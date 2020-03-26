					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							26/05/2017	
						</div>
					</div>
					
					
					
					












<div class="riquadro clearfix">











<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag tuoProfilo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Il tuo Profilo</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>









	
















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

<div id="dialog-confirm" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display:none; margin-left: 0;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header clearfix">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" style="font-size: 14px; font-weight: bold;">Blocca accesso</h4>
        	</div>
        	<div class="modal-body">
				<div class="form-field-resume clearfix">
					<div class="col-xs-10 col-xs-offset-1 margin-top10 margin-bottom10" style="font-size: 14px;">
						<!--<span class="ui-icon ui-icon-alert floatl"></span>-->
						Questa operazione ti consente di bloccare l'accesso ai canali online per questioni di sicurezza. Clicca su CONFERMA per procedere, in caso contrario ANNULLA. <br/> <br/> Tieni presente che se decidi di proseguire verr&agrave; effettuato il logout e  l'utenza verr&agrave; bloccata immediatamente. <br/><br/> Per lo sblocco dovrai contattare l'Assistenza Clienti.
						<br />
						<b><span class="deviceAlias"></span></b>
					</div>
				</div>
	
				<div class="clearfix" style="border-top: 1px solid #B0B0B0; padding: 8px 5px 8px;">
					<div class="pull-right margin-top10 margin-right10">
						
						
						<input type="button" name="" value="Annulla" onclick="$('#dialog-confirm').modal('hide');" class="btn">
						<input type="button" name="" value="Conferma" onclick="cancellaBloccoAccesso()" class="btn">	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>






<script type="text/javascript">
	$(document).ready(function() {
		/* RICHIESTE GIA PRESENTI */
		$("#richiediDispositivoSicurezzaPopup").dialog({
			title:'Hai gi&agrave; richiesto un dispositivo OTP',
			height:140,
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () { return chiudiDialogDispositiviSicurezza(true);}
		});
	
		/* ERRORE NEL WEBSERVICE */	
		$("#richiediDispositivoSicurezzaErrorePopup").dialog({
			title:'Errore nella chiamata al servizio WorkFlow',
			height:140,
			modal: true,
			autoOpen: false,
			resizable: false,
			close: function () { return chiudiDialogDispositiviSicurezzaErrore(true);}
		});
	});
	 
	function apriDialogDispositiviSicurezza() {
		$("#richiediDispositivoSicurezzaPopup").dialog('open');
	}
	function chiudiDialogDispositiviSicurezza(xTrigger) {
		if (xTrigger!=true) {
			$("#richiediDispositivoSicurezzaPopup").dialog('close');
		}
		$('#handle_bloccoAccessoSlider').removeClass('ui-state-focus');
		return false;
	}
	
	function apriDialogDispositiviSicurezzaErrore() {
		$("#richiediDispositivoSicurezzaErrorePopup").dialog('open');
	}
	function chiudiDialogDispositiviSicurezzaErrore(xTrigger) {
		if (xTrigger!=true) {
			$("#richiediDispositivoSicurezzaErrorePopup").dialog('close');
		}
		return false;
	}
</script>

<div id="richiediDispositivoSicurezzaPopup" style="display:none;">
	<div class="ui-dialog-content">
		<p>
			<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
			Riceverai una mail nel momento in cui procederemo ad effettuare la spedizione.
			<br />
		</p>
	</div>
	<div class="actions" style="border-top: 1px solid #B0B0B0; margin: 10px 0 0; padding: 8px 0;">
		
		
		<input type="button" name="" value="Conferma" onclick="chiudiDialogDispositiviSicurezza()" class="conferma">	
	</div>
</div>

<div id="richiediDispositivoSicurezzaErrorePopup" style="display:none;">
	<div class="ui-dialog-content">
		<p>
			<span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
			Servizio momentaneamente non disponibile, riprovare pi&ugrave; tardi.
			<br />
		</p>
	</div>
	<div class="actions" style="border-top: 1px solid #B0B0B0; margin: 10px 0 0; padding: 8px 0;">
		
		
		<input type="button" name="" value="Conferma" onclick="chiudiDialogDispositiviSicurezzaErrore()" class="conferma">	
	</div>
</div>
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
<div class="section clearfix">
	<div class="row">
	<div class="col-sm-2">
				<!--	tabella profilo	-->
				<img alt="sicurezza" src="/HT/IMAGES/CONTENUTI/sicurezza.gif" class="img-responsive hidden-xs"/>
	</div>
				<div class="nosort tabellaProfilo floatr col-xs-12 col-sm-10">
					<table class="table table-striped dataTable no-footer">
						<colgroup>
							<col width="31%" />
							<col width="18%" />
							<col width="18%" />
							<!--<col width="14%" />-->
							<col width="18%" />
							<col width="15%" />
						</colgroup>
						<thead>
							<tr>
								<th style="border-left: 1px solid #B0B0B0;">Descrizione</th>
								<th>Numero</th>
								<th>Azioni</th>
								<!--<th>Data</th> -->
								<th class="hidden-xs">Stato</th>
								<th class="hidden-xs">Blocca accesso</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="padding-left: 24px;">Codice Identificativo</td>
								<td class="oCenter"><b>***st5</b></td>
								<td class="oCenter"> - </td>
								<!--<td class="oCenter">10/10/2007</td>-->
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
										 
										<input type="submit" name="cambiopin" value="Cambio PIN" class="btn" alt="Cambio PIN" />
										</form>
									</div>
								</td>
								<!--<td class="oCenter"></td>-->
								<td class="oCenter hidden-xs">Attivo</td>
							</tr>
							<tr>

<!--							tipo carta otp	-->
								
									
									
									
										<td style="padding-left: 24px;">
											Dispositivo di sicurezza
										</td>
									
								
								
<!--							numero carta otp	-->
								<td class="oCenter"><b>
								
									
										0013957185
									
									
								
								</b></td>
								
								<td class="oCenter">
									
										
										
										
											-
										
									
								</td>
								<!--<td class="oCenter">
									
										
											05/01/2012
										
										
									
								</td>-->
								<td class="oCenter hidden-xs">
								
									
										In Uso
									
									
									
								
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
		<!--	end tabella profilo	-->
		</div>
	<!-- 
	
	 -->
	
	<div class="row margin-top10">
		<div class="col-xs-12 col-sm-6 clearfix ">
			<div class="innerBoxWhite clearfix ">
				<div  style="min-height:200px">
					
						
						
			<!--	devices display		-->
							
								
										<div class="col-xs-12 clearfix">	
											<h1 class="boxTitle txt_center">
												Gestione Dispositivi APP
											</h1>
										</div>
											<div style="margin-top:10px">
												<img src="/HT/IMAGES/byAppSmall.png" height="29px;" width="50px" class="floatl" alt="you App" />
												Numero dispositivi abilitati ad accedere a YouApp
												3
											</div>
										<div class="selezioneCC tabellaProfilo">
											<table class="table table-striped dataTable no-footer">
												<colgroup>
													<col width="10%" />
													<col width="40%" />
													<col width="25%" />
													<col width="25%" />
												</colgroup>
												<thead>
													<tr>
														<th style="border-left: 1px solid #B0B0B0;"></th>
														<th style="text-align: left; padding-left: 20px;">Tipo</th>
														<th>Notifiche</th>
														<th>Accesso Easy</th>
													</tr>
												</thead>
												<tbody>
													
														<tr>
															<td class="oCenter" style="height: 24px"><img src="/HT/IMAGES/APPLE_TB.png" alt="APPLE_TB" /></td>
															<td style="height: 24px">Mac mini di TeamMobile</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
														</tr>
													
														<tr>
															<td class="oCenter" style="height: 24px"><img src="/HT/IMAGES/APPLE_TB.png" alt="APPLE_TB" /></td>
															<td style="height: 24px">Lynx?s Mac mini</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
														</tr>
													
														<tr>
															<td class="oCenter" style="height: 24px"><img src="/HT/IMAGES/APPLE_SP.png" alt="APPLE_SP" /></td>
															<td style="height: 24px">Mac mini di TeamMobile</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
															<td class="oCenter" style="height: 24px">
																
																	Attivo
																	
																
															</td>
														</tr>
													
												</tbody>
											</table>
										</div>
										<form id="formGestioneDispositiviApp" method="post" action="/WEBHT/serviziPerTe/gestioneDispositiviApp.do">
											
											<input type="submit" name="dispositiviApp" value="Modifica" class="btn pull-right" alt="Modifica" />
										</form>
								
								
							
						
					
				</div>
			</div>
		</div>
				
		<div class="col-xs-12 col-sm-6 clearfix ">
			<div class="innerBoxWhite  clearfix ">
				<div style="min-height:200px">
						<div class="col-xs-12 clearfix">	
							<h1 class="boxTitle txt_center">
								Gestione Firma Digitale
							</h1>
						</div>
						
							
								<div style="margin:10px 0 20px 0; ">
										Hai richiesto il certificato di firma digitale il
										28/11/2016
								</div>
								<div class="col-xs-12 clear-padding firmaDigitale">
									<div class="col-xs-12 clear-padding">
										<div class="col-xs-4 clear-padding">
											<div class="form-field">
												<label class="control-label">
													Intestatario:
												</label>
											</div>
										</div>
										<div class="col-xs-8 clear-padding">
											<div class="form-field">
												<span class="resume">
													CLALAATLUOURO M 
												</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 clear-padding">
										<div class="col-xs-4 clear-padding">
											<div class="form-field">
												<label class="control-label">
													Data scadenza:
												</label>
											</div>
										</div>
										<div class="col-xs-8 clear-padding">
											<div class="form-field">
												<span class="resume">
													28/11/2018
												</span>
											</div>
										</div>
									</div>
									<div class="col-xs-12 clear-padding">
										<div class="col-xs-4 clear-padding">
											<div class="form-field">
	 											<label class="control-label">
													Stato:
												</label>
											</div>
										</div>
										<div class="col-xs-8 clear-padding">
											<div class="form-field">
												<span class="resume">
													ATTIVO
												</span>
											</div>
										</div>
									</div>
								</div>
								<!--   <div class="col-xs-3 clear-padding">
									<img src="/HT/IMAGES/firmaDigitale.png" alt="Firma Digitale" />
								</div>-->
							
							
						
				</div>
			</div>
		</div>
	</div>
	
			
		<div class="col-xs-12 clearfix">
			<div class="innerBoxWhite clearfix align-center" id="ultimoAccesso">
				
						<div class="col-xs-12 clearfix">	
							<h1 class="boxTitle txt_center">
								Ultimo Accesso
							</h1>
						</div>
						<div style="margin-top:10px">
								Hai effettuato l'ultimo accesso a YouWeb il giorno 
								26/05/2017
								alle ore
								16:35
						</div>
					</div>
		</div>
	
	</div>
</div>