
						
						



 
<div class="breadcrumb">
	
		<span>Servizi<span class="hidden-ux"> Per Te</span></span>
	
		<span>Richiedi La Youcard</span>
	
</div>

						 
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								29/09/2017	
							</div>
						</div>
						

						

						





<script type="text/javascript">
	$(document).ready(function() 
	{
		$('.accordion').each(function(i, div) 
		{
			$(div).accordion({
				active: 0, //tutti aperti di default, poi il cliente può decidere di chiuderli
				animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
				heightStyle: "content",
				collapsible: true
			});
		});
	});
	$(function() {
		$('#contatti').click(modificaContattoEmailDefault);
	});
</script>

<form id="formYouCardApri" method="post" action="/WEBHB/cartaConto/youCardApriApprofondimenti.do">
	<input type="hidden" name="origine" value="intestazione">
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
 					
				
 					
 					<span class="hidden-xs">:&nbsp; intestazione</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHB/help/page.do?id=1041')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTODEPOSITO/AttivazioneContoDepIntestazione.gif" alt="" width="637" height="57"></p>
		</div>



			</div>
		
	
</div>
		







	


		<div class="section clearfix">
			<h3 class="titleSection">Conto di appoggio&nbsp;della YouCard</h3>
			<div class="bs-example">
				<div class="form-group clearfix section">
					<div class="form-field col-xs-12">
						<span class="floatl margin-right20">
					  		<b>Conto di appoggio</b>
					  	</span>
				  		<span class="floatl col-xs-11">
				  			073200008109  - VENEZIA AG. 11 - GHEZZO ALESSANDRO NOMINI SILVIA
			    		</span>
			    		<span class="pull-right">
			    			<input type="submit" name="modifica" value="modifica" class="btn btn-primary">
			    		</span>
			    	</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">Intestatario YouCard</h3>
			<div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
				<h3 class="intestazione ui-accordion-header ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><a href="#">ALESSANDRO GHEZZO</a></h3>
				<div class="bs-example form-horizontal ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">
					<div class="form-group">
						<div class="col-xs-12 clear-padding">
						  	<strong>Contatti:</strong>
						</div>
						<div class="form-field-input col-xs-4 clear-padding">
						  	<label class="control-label" for="indirizzoEmail">
						  		Indirizzo e-mail di ALESSANDRO GHEZZO
						  	</label>
						</div>
						<div class="form-field-input col-xs-8 clear-padding">
					 		<div class="form-field">
								<div class="form-field-input col-sm-10 col-xs-12"> 
									<input type="text" name="intestatario.indirizzoEmail" maxlength="60" value="OSANDROSILVIA@ALICE.IT" readonly="readonly" id="email" class="form-control">
								</div>
								<div class="form-field-input col-sm-2 hidden-xs">
									<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
								</div>
							</div>
						</div>
						<div class="col-xs-12 clear-padding">
							<div class="col-xs-4">
							  	<label class="control-label" for="indirizzoEmail">
							  		Contatto telefonico di ALESSANDRO GHEZZO
							  	</label>
							</div>
						 	<div class="col-xs-8">
								<div class="form-field">
									<label style="padding-left: 10px;">3281751525</label>
			    				</div>
							</div>
						</div>
						<div class="form-field col-xs-12" style="padding:0;">
				    		<span class="floatl margin-right20" style="font-size: 0.8em; font-style: italic;">ATTENZIONE: il cellulare verrà utilizzato per inviarti via SMS il codice OTP utile ad attivare la carta, qualora il numero non fosse corretto dovrai contattare la tua filiale di riferimento per la modifica.</span>
				    	</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="pull-right margin-bottom20">
		
		
		<input type="submit" name="indietro" value="Indietro" class="btn btn-primary" alt="Indietro">
		<input type="submit" name="youCardApriApprofondimenti" value="Avanti" class="btn btn-primary" alt="Avanti">
	</div>
</form>
						
