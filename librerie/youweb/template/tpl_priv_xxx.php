					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					





<script type="text/javascript">
	var url = getPathContext()+"/cartaConto/youCardApriSceltaContoAjax.do" ;
	$(document).ready(function()
	{
		/*NASCONDO I DOCUMENTI VARIABILI SUL BOX*/
		$('tr.pdfApriYouCard').hide();
		$('#btnRichiedilaSubito').attr('disabled', 'disabled');
		/*REGISTRO L'EVENTO SULLA COMBO RAPPORTI PER RICARICARE LA PARTE VARIABILE DI PAGINA*/
		$('#contoAppoggio').live('change', function()
		{
			var valore = $('#contoAppoggio :selected').val();
			/*NASCONDO LA SEZIONE DELLE CONDIZIONI*/
			$('#condizioniYouCard').empty();
			/*NASCONDO I DOCUMENTI VARIABILI SUL BOX*/
			$('tr.pdfApriYouCard').hide();
			$('#btnRichiedilaSubito').attr('disabled', 'disabled');
			if(valore != '0')
			{
				$.ajax({
		    		url: url,
		    		data: {contoAppoggio:valore},
					success: function(data) 
		    		{
						$('#condizioniYouCard').empty();
						$('#condizioniYouCard').append(data);
		    		}
		  		});
			}
		});
		<!-- QUESTA CHIAMATA SERVE PER RICARICARE LA PAGINA QUANDO STO FACENDO MODIFICA DALLA PAGINA SUCCESSIVA -->
		var condizioniDossierVuote = $('#condizioniYouCard').is(':empty');
		var valoreSelezioneCC = $( "#contoAppoggio" ).val();
		if (condizioniDossierVuote && valoreSelezioneCC != '0')
			$("#contoAppoggio").change();
		<!-- QUESTA CHIAMATA SERVE PER SELEZIONARE L'UNICO RAPPORTO NELLA LISTA SE PRESENTE UN SOLO RAPPORTO -->
		var valore = $('#contoAppoggio :selected').val();
		if (valore=='0')
		{
			var numeroRapporti = $('#contoAppoggio option').length;
			if (numeroRapporti == 2)
			{
				<!-- IN QUESTO CASO DEVO SELEZIONARE IL SECONDO ELEMENTO E POI CHIAMARE L'EVENTO CHANGE -->
				$("#contoAppoggio option:eq(1)").attr("selected", "selected");
				$("#contoAppoggio").change();
			}
		}
	});
</script>

<form id="formYouCardApri" method="post" action="/WEBHT/cartaConto/youCardApriIntestazione.do">
	<div class="riquadro clearfix">
		
		









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag youCardApri">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Richiedi la YouCard</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1041')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p><img style="margin-bottom: 10pt; float: left; margin-right: 15pt; border: 0px;" title="YouCard" src="/HT/IMAGES/CONTENUTI/YouCard.jpg" alt="YouCard" width="169" height="115"><strong>YouCard</strong> è l’innovativa carta con circuito Mastercard e tecnologia contactless, che <strong>racchiude in sé tutte le funzioni normalmente disponibili su carte differenti</strong>: carte prepagate, di debito e ad addebito differito.<br><br> Richiedendo <strong>online la tua YouCard</strong> potrai:<br> - ricevere <strong><strong>direttamente a casa</strong></strong> la tua carta (settata in funzionalità prepagata)<br> - godere di <strong>condizioni economiche vantaggiose</strong> specifiche per la richiesta online.</p>
<br>&nbsp;
		</div>



			</div>
		
	
</div>
		








	


		<div class="section clearfix">
			<h3 class="titleSection">Scopri le condizioni a te riservate</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group">
					<div class="col-xs-12">
						<div class="form-field-input col-xs-6">
							<label class="control-label" for="contoAppoggio">
								Seleziona il conto corrente di appoggio per visualizzare le condizioni della tua YouCard
							</label>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-field-input col-xs-6">
							<div class="form-field" style="margin-top: 10px;">
					  			<select name="chiaveRapportoSelezionato" id="contoAppoggio" class="form-control"><option value="0">Seleziona un conto corrente...</option>
									
										<option value="001|0004|000400002700" selected="selected">000400002700 - VERONA AG. 3 - STITE.ODUGA ACN CDALT</option></select>
							</div>
						</div>
						<div class="form-field-input col-xs-6">
							
							<input type="submit" name="youCardApriIntestazione" value="Richiedila subito" id="btnRichiedilaSubito" class="btn  btn-primary" alt="Richiedila subito">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="condizioniYouCard">





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




<div class="section clearfix">
	<h3 class="titleSection">Principali condizioni</h3>
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
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						2,00
						 €
						
						<br>
					
				</div>
				<div class="col-xs-12 clear-padding margin-top10">
				  	<strong>PARTICOLARITÀ CANONE</strong>
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
						 €
						
						<br>
					
						1,50
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						1,50
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						1,50
						 €
						
						<br>
					
						1,50
						 €
						
						<br>
					
				</div>
			</div>
		</div>
	</div>
	<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-6" aria-controls="ui-id-7" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">COMMISSIONI DI UTILIZZO</a></h3>
		<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-7" aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="false" style="display: block;">
			<div class="form-group">
				<div class="col-xs-6 clear-padding">
					
						COMMISSIONE PRELIEVO CONTANTI ALLO SPORTELLO                                                        
						<br>
					
						COMMISSIONE PRELIEVO CONTANTI DA ATM (BANCHE DEL GRUPPO)                                            
						<br>
					
						COMMISSIONE % ADDEBITO PAGAMENTO POS - EURO                                                         
						<br>
					
						COMMISSIONE % ADDEBITO PAGAMENTO POS - DIVISA                                                       
						<br>
									
				</div>
				<div class="col-xs-6 clear-padding">
					
						3,00
						 €
						
						<br>
					
						0,00
						 €
						
						<br>
					
						0,0000
						
						 %
						<br>
					
						1,0000
						
						 %
						<br>
					
				</div>
			</div>
		</div>
	</div>
	<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-8" aria-controls="ui-id-9" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">COMMISSIONI PRELIEVO</a></h3>
		<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-9" aria-labelledby="ui-id-8" role="tabpanel" aria-hidden="false" style="display: block;">
			<div class="form-group">
				<div class="col-xs-6 clear-padding">
					<br>
					
						COMMISSIONE PRELIEVO CONTANTI DA ATM (ALTRE BANCHE - EURO)                                          
						<br>
					
						COMMISSIONE % PRELIEVO CONTANTI DA ATM (ALTRE BANCHE - DIVISA)                                      
						<br>
					
						IMPORTO MINIMO COMM. PREL. CONT. DA ATM (ALTRE BANCHE - DIVISA)                                     
						<br>
									
				</div>
				<div class="col-xs-2 clear-padding">
					<strong>PREPAGATO</strong>
					<br>
					
						2,10
						 €
						
						<br>
					
						2,2500
						
						 %
						<br>
					
						2,10
						 €
						
						<br>
					
				</div>
				<div class="col-xs-2 clear-padding">
					<strong>IMMEDIATO</strong>
					<br>
					
						0,00
						 €
						
						<br>
					
						0,0000
						
						 %
						<br>
					
						0,00
						 €
						
						<br>
					
				</div>
				<div class="col-xs-2 clear-padding">
					<strong>DIFFERITO*</strong>
					<br>
					
						2,10
						 €
						
						<br>
					
						2,2500
						
						 %
						<br>
					
						2,10
						 €
						
						<br>
					
				</div>
				<div class="col-xs-12 clear-padding margin-top10" style="color: #B9B9B8;font-size: 10px;">
					*L'attivazione dell'addebito differito è soggetto a valutazione da parte della propria filiale. Una volta ricevuta la carta sarà necessario rivolgersi in agenzia per richiederne l'attivazione.
				</div>
			</div>
		</div>
	</div>
</div></div>
	</div>
</form>
				