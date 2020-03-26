<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		25/05/2017	
	</div>
</div>


<script>
	$(document).ready(function() 
	{
		aperto = 0;
		
			aperto = 4;
			/*DEVO TOGLIERE UNO ALL'INDICE IN QUANTO LA PRIMA SEZIONE NON VIENE VISUALIZZATA*/
			aperto = aperto-1;
		
		
		$('.accordion').accordion({
			active: aperto, //aperto quello di indice corretto
			animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
			heightStyle: "content",
			collapsible: true
		});
		$('#conferma').click(function()
		{
			$('#submitAutomatico').val('false');
			$('#confermaSezione').val('false');
			
				$('#confermaConOtp').val('true');
			
			blockConferma();
		});
	});
	function blockConferma() 
	{
        $.blockUI({ 
            theme:     true, 
            title:    'Verifica questionario in corso', 
            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
        }); 	
	}
	$(function() 
 	{
    	$('#divTooltip').tooltip();
  	});
</script>

<form id="formQuestionarioMifid" method="post" action="/WEBHT/investimenti/mifidConfermaQuestionario.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="5b146c021b8589e700475ac2ce11ebfe"></div>
	<input type="hidden" name="submitAutomatico" id="submitAutomatico" value="false">
	<input type="hidden" name="confermaSezione" id="confermaSezione" value="false">
	<input type="hidden" name="confermaConOtp" id="confermaConOtp" value="false">
	<input type="hidden" name="indiceSezioneSubmit" id="indiceSezioneSubmit" value="">
	<div class="riquadro clearfix" id="divTooltip">
		
		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimentiMifid">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Questionario Mifid</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		








	


		<div class="section clearfix">
			<h3 class="titleSection">
				
				








		
			Intestazione
		
		
		
		


			</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group">
					<div class="form-field-resume col-xs-6">
						<label class="control-label">
							Codice fiscale
						</label>
						<span class="resume">
							TLLMLC70A30F205O
						</span>
					</div>
					<div class="form-field-resume col-xs-6">
						<label class="control-label">
							Intestazione
						</label>
						<span class="resume">
							LOAAM UURC TLOLA
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="divForm clearfix">
			<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
				
					
				
					
						<h3 class="intestazione ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
							<a href="#">Situazione finanziaria</a>
						</h3>
						<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">
							
							
							<div class="form-group">
								
								











<style type="text/css">
	div.bs-example {
		line-height: 1.5;
	}
</style>



<div class="bs-example form-horizontal">
	<div class="form-group">
		
			
			
			
				
			
			
				
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px;">
				
				<b>Qual e' la sua principale fonte di reddito? (Consistenza del reddito)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[0].selezionata" value="true" class="259 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="259 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 259, 1);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="259 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 1);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Lavoro dipendente
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[1].selezionata" value="false" class="259 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="259 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 2);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="259 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 2);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Pensione
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[2].selezionata" value="false" class="259 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="259 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 3);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="259 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 3);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Lavoro autonomo (libero professionista attivita' commerciali proprie)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[3].selezionata" value="false" class="259 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="259 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 4);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="259 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 4);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Rendita (cedole, dividendi, interessi, affitti)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[0].risposta[4].selezionata" value="false" class="259 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="259 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 259, 5);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="259 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 259, 5);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>In quali delle seguenti fasce rientra il suo reddito annuo lordo? (Consistenza del reddito)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[0].selezionata" value="true" class="260 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 260, 1);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 1);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 0 e 10.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[1].selezionata" value="false" class="260 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 2);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 260, 2);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 10.000 e 25.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[2].selezionata" value="false" class="260 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 3);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 260, 3);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 25.000 e 40.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[3].selezionata" value="false" class="260 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 4);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 260, 4);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 40.000 e 75.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[4].selezionata" value="false" class="260 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 5);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 260, 5);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Oltre 75.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[1].risposta[5].selezionata" value="false" class="260 6">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="260 6 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 260, 6);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="260 6 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 260, 6);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>In quale di queste fasce rientra il suo patrimonio personale disponibile per investimenti finanziari? (Consistenza del patrimonio)</b>
				
				
					<br>
					<img src="/HT/fe/img/i_info.png" style="width: 15px;" class="floatl">
					<span style="padding-left: 5px;"><i>Il suo patrimonio presso di noi al 25.05.2017 &egrave; pari a euro 1.484,930</i></span>
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[0].selezionata" value="true" class="261 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 261, 1);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 1);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 0 e 100.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[1].selezionata" value="false" class="261 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 2);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 2);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 100.000 e 300.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[2].selezionata" value="false" class="261 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 3);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 3);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 300.000 e 1.000.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[3].selezionata" value="false" class="261 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 4);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 4);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 1.000.000 e 3.000.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[4].selezionata" value="false" class="261 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 5);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 5);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Tra 3.000.000 e 10.000.000 euro
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[5].selezionata" value="false" class="261 6">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 6 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 6);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 6 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 6);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Oltre 10.000.000 euro (*)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[2].risposta[6].selezionata" value="false" class="261 7">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="261 7 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 261, 7);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="261 7 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 261, 7);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Quanta parte del suo reddito mensile e' assorbita da impegni finanziari? (rate di mutui, prestiti personali, affitti passivi) (Impegni finanziari)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[3].risposta[0].selezionata" value="true" class="263 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="263 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 263, 1);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="263 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 263, 1);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									&lt;30%
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[3].risposta[1].selezionata" value="false" class="263 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="263 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 263, 2);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="263 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 263, 2);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									 &gt;30% e &lt;50%
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[3].risposta[2].selezionata" value="false" class="263 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="263 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 263, 3);submitForm(this, false, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="263 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 263, 3);submitForm(this, false, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									 &gt;50%
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[1].domanda[3].risposta[3].selezionata" value="false" class="263 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="263 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 263, 4);submitForm(this, true, false, 1);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="263 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 263, 4);submitForm(this, true, false, 1);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
	</div>
</div>

	<div class="pull-right">
		
		<input type="button" name="confermaQuestionario" value="Avanti" onclick="submitForm(this, false, true, 1);" class="btn btn-primary" alt="Avanti">
	</div>


<style type="text/css">
	.invisible {display: none;}
</style>
<script type="text/javascript">
	function cambiaSelezione(immagineCliccata, checkbox, numeroDomanda, numeroRisposta)
	{
		if (checkbox == true)
		{
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				if ($(this).val()=='true')
					$(this).val('false');
				else
					$(this).val('true');
			});
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
		else
		{
			var inputHidden = $('input.' + numeroDomanda + '.' + numeroRisposta).first();
			if ($(inputHidden).val()=='true')
				return;
			$('input.' + numeroDomanda).each(function(){
				$(this).val('false');
			});
			$('img.' + numeroDomanda + '.rispostaSel').each(function(){
				if (!($(this).hasClass('invisible')))
					$(this).addClass('invisible');
			});
			$('img.' + numeroDomanda + '.rispostaNonSel').each(function(){
				if ($(this).hasClass('invisible'))
					$(this).removeClass('invisible');
			});
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).val('true');
			})
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
	}
	function submitForm(elementoCliccato, submitAutomatico, confermaSezione, indiceSezioneSubmit)
	{
		if (submitAutomatico==true && confermaSezione==true)
		{
			alert('Errore nella impostazione dei parametri al metodo submitForm');
			return;
		}
		if (submitAutomatico==true || confermaSezione==true)
		{
			if (submitAutomatico==true)
			{
				$('#submitAutomatico').val('true');
				$('#confermaSezione').val('false');	
			}
			else
			{
				$('#submitAutomatico').val('false');
				$('#confermaSezione').val('true');	
			}
			$('#indiceSezioneSubmit').val(indiceSezioneSubmit);
			$(elementoCliccato).parents('form')[0].submit();
			block();
		}
	}
	function block() 
	{
        $.blockUI({ 
            theme:     true, 
            title:    'Aggiornamento questionario in corso', 
            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
        }); 	
	}
</script>		
							</div>
						</div>
					
				
					
						<h3 class="intestazione ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
							<a href="#">Obiettivi di investimento</a>
						</h3>
						<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
							
							
							<div class="form-group">
								
								











<style type="text/css">
	div.bs-example {
		line-height: 1.5;
	}
</style>



<div class="bs-example form-horizontal">
	<div class="form-group">
		
			
			
			
				
			
			
				
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px;">
				
				<b>Quale orizzonte temporale prevede per il suo capitale investito? (Orizzonte temporale dell'investimento)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[0].risposta[0].selezionata" value="false" class="252 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="252 1 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 252, 1);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="252 1 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 252, 1);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ritiene di dover utilizzare in gran parte o totalmente il capitale nel corso dei prossimi 8/12 mesi
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[0].risposta[1].selezionata" value="true" class="252 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="252 2 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 252, 2);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="252 2 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 252, 2);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ritiene di non avere necessita' di disporre del capitale nei prossimi 2-3 anni
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[0].risposta[2].selezionata" value="false" class="252 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="252 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 252, 3);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="252 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 252, 3);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ritiene che il capitale non le servira' per almeno 3-5 anni
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[0].risposta[3].selezionata" value="false" class="252 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="252 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 252, 4);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="252 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 252, 4);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ritiene di poter mantenere il capitale investito anche per un periodo lungo (&gt;5 anni)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[0].risposta[4].selezionata" value="false" class="252 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="252 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 252, 5);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="252 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 252, 5);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Principalmente cosa si prefigge di raggiungere con i suoi investimenti? (Finalita' dell'investimento)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[0].selezionata" value="true" class="251 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 251, 1);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 1);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Impiegare il patrimonio in prodotti di liquidita'
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[1].selezionata" value="false" class="251 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 2);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 251, 2);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Proteggere il suo capitale investito anche a fronte di un rendimento contenuto
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[2].selezionata" value="false" class="251 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 3);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 251, 3);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Far crescere moderatamente il suo capitale nel medio periodo accettando un rischio medio
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[3].selezionata" value="false" class="251 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 4);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 251, 4);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Far crescere discretamente il suo capitale nel medio periodo accettando un rischio medio alto
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[4].selezionata" value="false" class="251 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 5);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 251, 5);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Far crescere in modo significativo il suo capitale, nel medio-lungo periodo, anche a fronte di un rischio alto in caso di andamenti negativi dei mercati
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[1].risposta[5].selezionata" value="false" class="251 6">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="251 6 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 251, 6);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="251 6 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 251, 6);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Quale livello di rischio e' disposto a correre nei suoi investimenti? (Preferenze/profilo di rischio cliente)</b>
				
				
			</div>
			
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[0].selezionata" value="true" class="253 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="253 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 253, 1);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="253 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 253, 1);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Minimo - non e' disposto a correre il rischio di perdita in conto capitale
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[1].selezionata" value="false" class="253 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="253 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 253, 2);submitForm(this, false, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="253 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 253, 2);submitForm(this, false, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Moderato - e' disposto a correre un rischio moderato legandolo all'obiettivo di mantenere almeno allineato il capitale al suo valore reale
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[2].selezionata" value="false" class="253 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="253 3 floatl" title="Risposta non selezionabile in quanto non coerente con quanto dichiarato nella domanda precedente sulle finalità dell'investimento">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Medio - e' disposto a rischiare perdite di media entita' del suo capitale a fronte di una ragionevole crescita dello stesso
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[3].selezionata" value="false" class="253 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="253 4 floatl" title="Risposta non selezionabile in quanto non coerente con quanto dichiarato nella domanda precedente sulle finalità dell'investimento">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Medio/alto - e' disposto a rischiare delle perdite significative per puntare a conseguire l'obiettivo di una marcata crescita del suo capitale
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[4].selezionata" value="false" class="253 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="253 5 floatl" title="Risposta non selezionabile in quanto non coerente con quanto dichiarato nella domanda precedente sulle finalità dell'investimento">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Alto - e' disposto a sopportare perdite anche molto rilevanti in conto capitale per puntare ad un obiettivo di forte crescita del suo capitale
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[2].domanda[2].risposta[5].selezionata" value="false" class="253 6">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="253 6 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 253, 6);submitForm(this, true, false, 2);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="253 6 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 253, 6);submitForm(this, true, false, 2);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non rispondo e prendo atto che la  banca  non puo' erogarmi il servizio di consulenza
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
	</div>
</div>

	<div class="pull-right">
		
		<input type="button" name="confermaQuestionario" value="Avanti" onclick="submitForm(this, false, true, 2);" class="btn btn-primary" alt="Avanti">
	</div>


<style type="text/css">
	.invisible {display: none;}
</style>
<script type="text/javascript">
	function cambiaSelezione(immagineCliccata, checkbox, numeroDomanda, numeroRisposta)
	{
		if (checkbox == true)
		{
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				if ($(this).val()=='true')
					$(this).val('false');
				else
					$(this).val('true');
			});
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
		else
		{
			var inputHidden = $('input.' + numeroDomanda + '.' + numeroRisposta).first();
			if ($(inputHidden).val()=='true')
				return;
			$('input.' + numeroDomanda).each(function(){
				$(this).val('false');
			});
			$('img.' + numeroDomanda + '.rispostaSel').each(function(){
				if (!($(this).hasClass('invisible')))
					$(this).addClass('invisible');
			});
			$('img.' + numeroDomanda + '.rispostaNonSel').each(function(){
				if ($(this).hasClass('invisible'))
					$(this).removeClass('invisible');
			});
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).val('true');
			})
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
	}
	function submitForm(elementoCliccato, submitAutomatico, confermaSezione, indiceSezioneSubmit)
	{
		if (submitAutomatico==true && confermaSezione==true)
		{
			alert('Errore nella impostazione dei parametri al metodo submitForm');
			return;
		}
		if (submitAutomatico==true || confermaSezione==true)
		{
			if (submitAutomatico==true)
			{
				$('#submitAutomatico').val('true');
				$('#confermaSezione').val('false');	
			}
			else
			{
				$('#submitAutomatico').val('false');
				$('#confermaSezione').val('true');	
			}
			$('#indiceSezioneSubmit').val(indiceSezioneSubmit);
			$(elementoCliccato).parents('form')[0].submit();
			block();
		}
	}
	function block() 
	{
        $.blockUI({ 
            theme:     true, 
            title:    'Aggiornamento questionario in corso', 
            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
        }); 	
	}
</script>		
							</div>
						</div>
					
				
					
						<h3 class="intestazione ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-id-6" aria-controls="ui-id-7" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
							<a href="#">Conoscenza ed esperienza</a>
						</h3>
						<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-7" aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="true" style="display: none;">
							
							
							<div class="form-group">
								
								











<style type="text/css">
	div.bs-example {
		line-height: 1.5;
	}
</style>



<div class="bs-example form-horizontal">
	<div class="form-group">
		
			
			
			
				
			
			
				
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px;">
				
				<b>Ha conoscenza di strumenti/servizi finanziari? (Conoscenza di prodotti e strumenti finanziari)</b>
				
				
			</div>
			
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[0].risposta[0].selezionata" value="true" class="267 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="267 1 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 267, 1);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="267 1 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 267, 1);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Si
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[0].risposta[1].selezionata" value="false" class="267 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="267 2 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									No
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Quali delle seguenti categorie di strumenti/servizi finanziari conosce? (Conoscenza di prodotti e strumenti finanziari)</b>
				
				
					<br>
					<img src="/HT/fe/img/i_info.png" style="width: 15px;" class="floatl">
					<span style="padding-left: 5px;"><i>Proponiamo preselezionati gli strumenti acquistati negli ultimi 3 anni</i></span>
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[0].selezionata" value="false" class="254 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 1 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 1);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 1 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 1);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Pronti contro termine e/o ceritificati di deposito
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[1].selezionata" value="false" class="254 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 2 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 2);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 2 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 2);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Titoli obbligazionari a tasso fisso e/o variabile
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[2].selezionata" value="false" class="254 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 3);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 3);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Titoli obbligazionari subordinati in tutte le loro forme
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[3].selezionata" value="false" class="254 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 4);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 4);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Titoli obbligazionari strutturati
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[4].selezionata" value="false" class="254 5">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 5 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 5);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 5 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 5);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Certificates
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[5].selezionata" value="true" class="254 6">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 6 rispostaSel  floatl" onclick="cambiaSelezione(this, true, 254, 6);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 6 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 6);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Azioni
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[6].selezionata" value="false" class="254 7">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 7 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 7);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 7 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 7);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Fondi comuni, sicav ed etf
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[7].selezionata" value="false" class="254 8">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 8 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 8);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 8 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 8);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Gestioni di portafogli monetarie ed obbligazionarie
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				<div class="form-field-resume">
					<span>&nbsp;</span>
				</div>
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[8].selezionata" value="false" class="254 9">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 9 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 9);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 9 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 9);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Gestioni di portafogli a contenuto azionario
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[9].selezionata" value="false" class="254 10">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 10 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 10);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 10 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 10);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Polizze assicurative a carattere finanziario, considerate dalla banca come prodotti illiquidi (unit linked, index linked, contratti di capitalizzazione)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				<div class="form-field-resume">
					<span>&nbsp;</span>
				</div>
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[10].selezionata" value="false" class="254 11">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 11 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 11);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 11 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 11);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Derivati quotati (ad esempio covered warrant, opzioni, future)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[1].risposta[11].selezionata" value="false" class="254 12">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="254 12 rispostaSel invisible floatl" onclick="cambiaSelezione(this, true, 254, 12);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="254 12 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, true, 254, 12);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Strumenti alternativi (ad esempio hedge funds, fondi di private equity, fondi immobiliari)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Negli ultimi 3 anni in quale categoria di strumenti finanziari ha eseguito delle operazioni? (Esperienza in investimenti finanziari)</b>
				
				
					<br>
					<img src="/HT/fe/img/i_info.png" style="width: 15px;" class="floatl">
					<span style="padding-left: 5px;"><i>Il numero delle operazioni da lei eseguite con il nostro Istituto negli ultimi 3 anni &egrave; 43</i></span>
				
			</div>
			
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[2].risposta[0].selezionata" value="false" class="255 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="255 1 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Non ho mai effettuato investimenti
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[2].risposta[1].selezionata" value="false" class="255 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="255 2 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ho effettuato investimenti in strumenti finanziari semplici e/o a basso rischio (ad es. Cd, pct, obbligazioni, prodotti a capitale garantito, ecc.)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[2].risposta[2].selezionata" value="true" class="255 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="255 3 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 255, 3);submitForm(this, true, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="255 3 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 255, 3);submitForm(this, true, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ho effettuato investimenti nei principali strumenti finanziari (ad es. Azioni, fondi, e gestioni bilanciati ed azionari, unit linked)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[2].risposta[3].selezionata" value="false" class="255 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="255 4 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Ho effettuato investimenti anche in strumenti finanziari complessi e/o a rischio elevato comprendendone i principali rischi in relazione alle dinamiche di mercato (ad es. Fondi azionari paesi emergenti, hedge fund, derivati, certificates a capitale non protetto)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Con che frequenza realizza mediamente i suoi investimenti negli strumenti suddetti? (Esperienza in investimenti finanziari)</b>
				
				
					<br>
					<img src="/HT/fe/img/i_info.png" style="width: 15px;" class="floatl">
					<span style="padding-left: 5px;"><i>La media trimestrale delle operazioni da lei eseguite con il nostro Istituto negli ultimi 3 anni &egrave;3,58</i></span>
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[3].risposta[0].selezionata" value="false" class="256 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="256 1 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Nessuna attivita'
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[3].risposta[1].selezionata" value="false" class="256 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="256 2 floatl" title="La risposta non &egrave; selezionabile in quanto non coerente con la risposta data alla precedente domanda">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Attivita' non frequente (meno di un'operazione al trimestre)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[3].risposta[2].selezionata" value="true" class="256 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="256 3 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 256, 3);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="256 3 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 256, 3);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Attivita' frequente (almeno un'operazione al trimestre)
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>In relazione al suo patrimonio complessivo, con che volumi realizza mediamente i suoi investimenti in prodotti finanziari? (Esperienza in investimenti finanziari)</b>
				
				
			</div>
			
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[4].risposta[0].selezionata" value="false" class="257 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	<img src="/HT/fe/img/pager_item_disabled.png" style="width: 12px; padding-top: 3px; padding-left: 3px;" class="257 1 floatl" title="">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Nulli
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[4].risposta[1].selezionata" value="true" class="257 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="257 2 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 257, 2);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="257 2 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 257, 2);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Limitati
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[4].risposta[2].selezionata" value="false" class="257 3">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="257 3 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 257, 3);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="257 3 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 257, 3);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Regolari
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[4].risposta[3].selezionata" value="false" class="257 4">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="257 4 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 257, 4);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="257 4 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 257, 4);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Rilevanti
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
			
			
			
				
			
			
			<div class="form-field-resume col-xs-12" style="margin-bottom: 5px; margin-top: 10px;">
				
				<b>Lei ha conseguito un diploma, una laurea e/o maturato un'esperienza in materie economiche finanziarie? (Esperienza in investimenti finanziari)</b>
				
				
			</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[5].risposta[0].selezionata" value="false" class="258 1">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 		
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="258 1 rispostaSel invisible floatl" onclick="cambiaSelezione(this, false, 258, 1);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="258 1 rispostaNonSel visible floatl" onclick="cambiaSelezione(this, false, 258, 1);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									No
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
				
				
					
				<div class="form-field-resume col-xs-12">
					<input type="hidden" name="questionario.sezione[3].domanda[5].risposta[1].selezionata" value="true" class="258 2">
					<table style="width: 100%;">
						<tbody><tr>
							<td style="width: 2%;">
								
							 	
							 	
							 	
							 	
								<img src="/HT/fe/img/pager_item_current.png" style="width: 16px; padding-top: 3px;" class="258 2 rispostaSel  floatl" onclick="cambiaSelezione(this, false, 258, 2);submitForm(this, false, false, 3);">
								<img src="/HT/fe/img/pager_item.png" style="padding-top: 3px; padding-left: 3px;" class="258 2 rispostaNonSel invisible floatl" onclick="cambiaSelezione(this, false, 258, 2);submitForm(this, false, false, 3);">
							 	
							</td>
							<td style="width: 98%; padding-left: 10px;">
								
								<span class="leftl">
									Si
									
								</span>
							</td>
						</tr>
					</tbody></table>
				</div>
			
		
	</div>
</div>

	<div class="pull-right">
		
		<input type="button" name="confermaQuestionario" value="Avanti" onclick="submitForm(this, false, true, 3);" class="btn btn-primary" alt="Avanti">
	</div>


<style type="text/css">
	.invisible {display: none;}
</style>
<script type="text/javascript">
	function cambiaSelezione(immagineCliccata, checkbox, numeroDomanda, numeroRisposta)
	{
		if (checkbox == true)
		{
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				if ($(this).val()=='true')
					$(this).val('false');
				else
					$(this).val('true');
			});
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
		else
		{
			var inputHidden = $('input.' + numeroDomanda + '.' + numeroRisposta).first();
			if ($(inputHidden).val()=='true')
				return;
			$('input.' + numeroDomanda).each(function(){
				$(this).val('false');
			});
			$('img.' + numeroDomanda + '.rispostaSel').each(function(){
				if (!($(this).hasClass('invisible')))
					$(this).addClass('invisible');
			});
			$('img.' + numeroDomanda + '.rispostaNonSel').each(function(){
				if ($(this).hasClass('invisible'))
					$(this).removeClass('invisible');
			});
			$('input.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).val('true');
			})
			$('img.' + numeroDomanda + '.' + numeroRisposta).each(function(){
				$(this).toggleClass('invisible');
			});
		}
	}
	function submitForm(elementoCliccato, submitAutomatico, confermaSezione, indiceSezioneSubmit)
	{
		if (submitAutomatico==true && confermaSezione==true)
		{
			alert('Errore nella impostazione dei parametri al metodo submitForm');
			return;
		}
		if (submitAutomatico==true || confermaSezione==true)
		{
			if (submitAutomatico==true)
			{
				$('#submitAutomatico').val('true');
				$('#confermaSezione').val('false');	
			}
			else
			{
				$('#submitAutomatico').val('false');
				$('#confermaSezione').val('true');	
			}
			$('#indiceSezioneSubmit').val(indiceSezioneSubmit);
			$(elementoCliccato).parents('form')[0].submit();
			block();
		}
	}
	function block() 
	{
        $.blockUI({ 
            theme:     true, 
            title:    'Aggiornamento questionario in corso', 
            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
        }); 	
	}
</script>		
							</div>
						</div>
					
				
			</div>
		</div>
		
			<div class="section clearfix" id="divOTP">
				





<span id="otp">

	
		
		
			
			
				
					
				
				
							
			
				
					
				
				
			
						
	
	
	
	
		
			<h3 class="titleSection">Conferma richiesta</h3>
			<a href="#" class="floatr" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
					<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
			</a>
		
			<div class="form-horizontal" style="margin-top:10px">
					<div class="form-field col-sm-6 col-xs-12">
						<div class="form-field-input">
							<label class="control-label">
								Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field col-sm-6 col-xs-12 otp ">
						<div class="row">
							<div class="col-xs-5">
								<img src="/HT/fe/img/OTPW.png" class="floatr">
							</div>
							<div class="col-xs-1 arrow">
								>
							</div>
							<div class="col-xs-6">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control" autofocus=""> 
							</div>
						</div>
						
					</div>
			</div>

		
			

		
	
	
	

</span>






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
			</div>
		
	</div>
	<div class="pull-right margin-bottom20">
		
		<input type="button" name="annullaCompilazioneQuestionario" value="Annulla" onclick="$('#formAnnulla').submit();" class="btn btn-primary" alt="Annulla">
		
		<input type="submit" name="confermaQuestionario" value="Conferma" id="conferma" class="btn btn-primary" alt="Conferma">
	</div>
</form>
<form id="formAnnulla" method="post" action="/WEBHT/investimenti/mifidAnnullaCompilazione.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="5b146c021b8589e700475ac2ce11ebfe"></div></form>