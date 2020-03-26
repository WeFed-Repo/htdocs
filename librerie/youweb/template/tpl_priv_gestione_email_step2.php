					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					
















	<style>
		.riferimento-altezza{
			height: 49px;
		}
		.max-altezza-relativa{
			height: 100%;
		}
		.pad-20{
			padding-top: 20px;
		}
	</style>
	
	<script>	
		function changeSubmitUrl(button, url){
			const pageUrlPath = window.location.pathname;
			const modulePath = pageUrlPath.substring(0, (pageUrlPath.substring(1).indexOf("/") + 1));
			$(button).closest("form").attr("action", modulePath + url + ".do");
		}
	</script>

	
	
	<form id="formGestioneEMail" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/EMail/riepilogo.do">
	
		
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
		
				
				<div class="hidden-print hidden-xxs flag gestioneContattiInserimento">&nbsp;</div>
			
			
		
		
			
		
		
			
				Aggiungi/Modifica Email
			
		
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
			
			
			








	


			
			
			<div class="col-xs-12 clear-padding innerBoxWhite  clearfix inner">
				Qui sotto puoi inserire o modificare il tuo contatto. Per confermare l'operazione ti invieremo un codice di conferma al tuo <b>nuovo indirizzo Email</b>.
			</div>
	
			
			<div class="section clearfix">
				<h3 class="titleSection">
					
					








		
			Contatto
		
		
		
		


				</h3>
				
				<!-- MAIL E CONFERMA MAIL -->
				<div class="col-xs-12">
					<div class="form-group">
						<div class="form-field-input col-sm-4 col-xs-12">
							<label class="control-label" for="contatto">
								Indirizzo Email
							</label>
							<div class="form-field">	
								<input type="text" name="contatto" size="20" value="OSANDROSILVIA@ALICE.IT" id="contatto" class="form-control">
							</div>
						</div>
						
						<div class="form-field-input col-sm-4 col-xs-12">
							<label class="control-label" for="contattoConferma">
								Conferma indirizzo Email
							</label>
							<div class="form-field">	
								<input type="text" name="contattoConferma" size="20" value="OSANDROSILVIA@ALICE.IT" id="contattoConferma" class="form-control">
							</div>
						</div>
					</div>
				</div>
				
				<!-- TIPOLOGIA E PREDEFINITO -->
				<div class="col-xs-12">
					<div class="form-group">
					
						
							<div class="form-field-input col-sm-4 col-xs-12">
								<label class="control-label" for="tipologia">
									Tipologia Contatto
								</label>
								<div class="form-field">	
									<select name="tipologia" id="tipologia" class="form-control"><option value="Altro recapito" selected="selected">Altro recapito</option>
<option value="Personale">Personale</option>
<option value="Lavoro">Lavoro</option></select>
								</div>
							</div>
							
							<div class="form-field-input col-sm-4 col-xs-12  pad-20">
								<label class="form-check-label" for="flagPredefinito">
									
									 
									 	<input type="hidden" name="flagPredefinito" value="true">
									 
									Imposta contatto come predefinito			
									<input type="checkbox" name="flagPredefinito" value="on" checked="checked" disabled="disabled" id="flagPredefinito" class="form-check-input">
								</label>
							</div>
					
						
					</div>
				</div>
			</div>
			
			
			<div class="section clearfix">
				





<span id="otp">


	
	
	
		





<span id="otp">

	
		
		
			
			
				
					
				
				
							
			
				
					
				
				
			
						
	
	
	
	
		
			<h3 class="titleSection">
				








		
			Conferma richiesta
		
		
		
		


			</h3>
		
		
			<div class="form-horizontal" style="margin-top:10px">
					<div class="form-field col-sm-6 col-xs-12">
						<div class="form-field-input">
							<label class="control-label">
								Per proseguire &egrave; necessario inserire la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field col-sm-5 col-xs-11 col-xs-offset-1 otp ">
						<div class="form-field-input">
								<img src="/HT/IMAGES/OTPWT.png">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control with-help" style="margin-top:5px"> 
								
									<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
										<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
									</a>
								
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
	


</span>




			</div>
		</div>
			
		
		<div class="pull-right margin-bottom20">
			<input type="submit" name="loadEMail" value="Annulla" onclick="changeSubmitUrl(this, '/serviziPerTe/contattiERecapiti/EMail');" class="btn btn-primary">
			
						
						
					
						<input type="submit" name="riepilogaDati" value="Avanti" class="btn btn-primary">
							
				
		</div>
		
	</form>