<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">SPESE</a></h3>
		<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: block;">
			<div class="form-group">
				<div class="col-xs-12 clear-padding">
				  	<strong>SPESE</strong>
				</div>
				<div class="col-xs-6 clear-padding">
					
						SPESE EMISSIONE/ATTIVAZIONE CARTA                                                                   
						<br>
					
						SPESE ESTINZIONE CARTA                                                                              
						<br>
					
						CANONE MENSILE - CARTA CON FUNZIONE ADDEBITO PREPAGATO                                              
						<br>
					
						CANONE MENSILE - CARTA CON FUNZIONE ADDEBITO IMMEDIATO                                              
						<br>
					
						CANONE MENSILE - CARTA CON FUNZIONE ADDEBITO DIFFERITO                                              
						<br>
									
				</div>
				<div class="col-xs-6 clear-padding">
					
						0,00
						 &euro;
						
						<br>
					
						0,00
						 &euro;
						
						<br>
					
						0,00
						 &euro;
						
						<br>
					
						0,00
						 &euro;
						
						<br>
					
						2,00
						 &euro;
						
						<br>
					
				</div>
				<div class="col-xs-12 clear-padding margin-top10">
				  	<strong>PARTICOLARIT&Agrave; CANONE</strong>
				</div>
				<div class="col-xs-6 clear-padding">
					
						PERIODICITA' ADDEBITO CANONE                                                                        
						<br>
									
				</div>
				<div class="col-xs-6 clear-padding">
					
						MENSILE
						
						
						<br>
					
				</div>
			</div>
		</div>
	</div>
	<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">COMMISSIONI RICARICA</a></h3>
		<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="false" style="display: block;">
			<div class="form-group">
				<div class="col-xs-6 clear-padding">
					
						COMMISSIONE RICARICA DA ATM                                                                         
						<br>
					
						COMMISSIONE RICARICA YOUCALL                                                                        
						<br>
					
						COMMISSIONE RICARICA CANALE TELEMATICO/WEB                                                          
						<br>
					
						COMMISSIONE RICARICA DA BONIFICO                                                                    
						<br>
					
						COMMISSIONE RICARICA AUTOMATICA DA CONTO CORRENTE                                                   
						<br>
					
						COMMISSIONE RICARICA ALLO SPORTELLO - CON ADDEBITO IN C/C                                           
						<br>
					
						COMMISSIONE RICARICA ALLO SPORTELLO - IN CONTANTI                                                   
						<br>
									
				</div>
				<div class="col-xs-6 clear-padding">
					
						1,50
						 &euro;
						
						<br>
					
						1,50
						 &euro;
						
						<br>
					
						0,00
						 &euro;
						
						<br>
					
						1,50
						 &euro;
						
						<br>
					
						0,00
						 &euro;
						
						<br>
					
						1,50
						 &euro;
						
						<br>
					
						1,50
						 &euro;
						
						<br>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<script type="text/javascript">
	$(document).ready(function() 
	{
		$('tr.pdfApriYouCard').show();
		$('#btnRichiedilaSubito').removeAttr('disabled');
	});
	$('.accordion').each(function(i, div) 
	{
		$(div).accordion({
			active: 0, //tutti aperti di default, poi il cliente può decidere di chiuderli
			animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
			heightStyle: "content",
			collapsible: true
		});
	});	
</script>