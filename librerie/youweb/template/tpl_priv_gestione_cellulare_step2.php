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
		
		function inviaOtpSMS(){
			console.log("--GESTORE JAVASCRIPT GENERA PASSWORD--");
			const SUCCESS_RESPONSE = "SMSOK";
			const VALIDATION_ERROR = "VALIDATION:ERROR";
			const pageUrlPath = window.location.pathname;
			const modulePath = pageUrlPath.substring(0, (pageUrlPath.substring(1).indexOf("/") + 1));
			const ajaxUrl = modulePath + "/serviziPerTe/contattiERecapiti/Cellulari/invioOTPConValidazione.do";
			var form = $("#invioOTPConSMS").closest('form');
			$.post(ajaxUrl, form.serialize() + "&inviaPasswordSuCellulareConValidazione=", 
				   function(responseBody){ 
				   var confermaButton = form.find("#conferma");
				    //blocco dei campi dati inseriti dall'utente
		   			form.find("#prefisso").attr('readonly', true);
		   			form.find("#numeroCellulare").attr('readonly', true);
		   			form.find("#contattoConferma").attr('readonly', true);
		   			form.find("#tipologia").attr('readonly', true);
		   			form.find("#flagPredefinito").attr('disabled', true);
				   	if($.trim(responseBody) == SUCCESS_RESPONSE){
			   			//disabilitazione bottone genera password
			   			$("#invioOTPConSMS").attr('disabled', true);
			   			//abilitazione text box inserimento password
			   			var passwordBox = $("#codiceOTPConSMS");
			   			passwordBox.attr('disabled', false);
			   			passwordBox.focus();
			   			//abilitazione bottone avanti
			   			confermaButton.attr('disabled', false);
				   	}
				   	else{
				   		if(responseBody.includes(VALIDATION_ERROR))
				   		{
				   			$("#validationErrorButton").click();	
				   		}
				   		else
				   		{
				   			alert("Si è verificato un errore durante l'invio del messaggio SMS");
				   		}
				   	}												
			});
		}
	</script>



	<form id="formGestioneCellulari" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/Cellulari/riepilogo.do">
	
		
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
			
			
		
		
			
		
		
			
				Aggiungi/Modifica cellulare
			
		
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
			
			
			








	


			
			
			<div class="col-xs-12 clear-padding innerBoxWhite  clearfix inner">
				Modifica il tuo numero di cellulare. Per confermare l'operazione ti invieremo <b>due SMS</b>, uno al numero ora predefinito e uno al nuovo. 
			</div>
			
				
			
				
			<div class="section clearfix">
				<h3 class="titleSection">
					
					








		
			Contatto
		
		
		
		


				</h3>
				<div class="col-xs-12">
					<div class="form-group">
					
						
						<div class="form-field-input col-sm-2 col-xs-4">
							<label class="control-label" for="prefisso">
								Prefisso
							</label>
							<div class="form-field">	
								<input type="text" name="prefisso" size="20" value="" id="prefisso" class="form-control">
							</div>
						</div>
					
						
						<div class="form-field-input col-sm-4 col-xs-8">
							<label class="control-label" for="numeroCellulare">
								Numero cellulare
							</label>
							<div class="form-field">	
								<input type="text" name="numeroCellulare" size="20" value="3281751525" id="numeroCellulare" class="form-control">
							</div>
						</div>
						
						
						<div class="form-field-input col-sm-4 col-xs-12">
							<label class="control-label" for="contattoConferma">
								Ripeti numero cellulare
							</label>
							<div class="form-field">	
								<input type="text" name="contattoConferma" size="20" value="3281751525" id="contattoConferma" class="form-control">
							</div>
						</div>
					</div>
				</div>
					


<div class="col-xs-12">
	<div class="form-group">		
	
			<div class="form-field-input col-sm-4 col-xs-12 max-altezza-relativa">
				<label class="control-label" for="tipologia">Tipologia Contatto</label>
				<div class="form-field">
					<select name="tipologia" id="tipologia" class="form-control">
					<option value="Altro recapito" selected="selected">Altro recapito</option>
					<option value="Personale">Personale</option>
					<option value="Lavoro">Lavoro</option></select>
				</div>
			</div>
						
			<div class="form-field-input col-sm-4 col-xs-12 max-altezza-relativa pad-20">
				<label class="form-check-label" for="flagPredefinito">
					<input type="hidden" name="flagPredefinito" value="true">
						Imposta contatto come predefinito
						<input type="checkbox" name="flagPredefinito" value="on" checked="checked" disabled="disabled" id="flagPredefinito" class="form-check-input">
				</label>
			</div>
		
	</div>	
</div>

				


			</div>
			

<script type="text/javascript">
$(document).ready(function() { 
	if(!$("#codiceOTPConSMS").is(":disabled")){
		$('#codiceOTPConSMS').focus();
	}
});

</script>

	
		
<div class="section clearfix">
	<div class="bs-example">
		<div class="form-group" id="formGroup">
			<div style="clear:both">
				<h3 class="titleSection">Conferma richiesta</h3>
					<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/HT/HTML/HelpOtpConSMS.html')">
					  	<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-bottom:-3px" title="Help On Line" alt="Help On Line">
					</a>
			</div>
				 
			<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10" id="sezioneDescrizione">
				<label class="control-label">
					Per confermare la variazione &egrave; necessario cliccare su "Genera password":un <b>primo codice</b> di 6 cifre ti verr&agrave; automaticamente inviato via sms al numero predefinito <b>******1525</b>
				</label>
			</div>
					
			<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10" id="sezionePassword">
				<div class="col-xs-3 col-sm-2" id="sezioneImmagine">
				  	<img src="/HT/IMAGES/nGrafica/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
				</div>
				<div class="col-xs-9 col-sm-4" id="sezioneCampoPassword" >
				    <input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
				</div>
				<div class="col-xs-6 col-sm-6" id="sezioneBottonePassword">
					<div class="pull-xs-left">
						<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn btn-primary">	

					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- BK-->
<!--div class="section clearfix">
	<div class="bs-example">
		<div class="form-group" id="formGroup">
			<div style="clear:both">
				<h3 class="titleSection">Conferma richiesta</h3>
			</div>
				 
			<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10" id="sezioneDescrizione">
				<label class="control-label">
					Per confermare la variazione &egrave; necessario cliccare su "Genera password":un <b>primo codice</b> di 6 cifre ti verr&agrave; automaticamente inviato via sms al numero predefinito <b>******1525</b>
				</label>
			</div>
					
			<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10" id="sezionePassword">
				<div class="col-xs-3 col-sm-3" id="sezioneImmagine">
				  	<img src="/HT/IMAGES/nGrafica/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
				</div>
				<div class="col-xs-9 margin-bottom-xs-10 col-sm-3" id="sezioneCampoPassword">
				    <input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
				</div>
				<div class="col-xs-12 col-sm-5 " id="sezioneBottonePassword">
					<div class="pull-xs-right">
						<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn">	
						<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/HT/HTML/HelpOtpConSMS.html')">
					  		<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-bottom:-3px" title="Help On Line" alt="Help On Line">
					  	</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div-->
<!-- E BK-->





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
		
		<div class="pull-right margin-bottom20">
			<input type="submit" name="loadCellulari" value="Annulla" onclick="changeSubmitUrl(this, '/serviziPerTe/contattiERecapiti/Cellulari');" class="btn btn-primary">
			<input type="submit" name="riepilogaDati" value="Avanti" disabled="disabled" id="conferma" class="btn btn-primary">
			<div style="display:none">
				<input type="submit" name="reinserisciDati" value="validazioneErrata" onclick="changeSubmitUrl(this, '/serviziPerTe/contattiERecapiti/Cellulari/inserimento/erroreValidazione');" id="validationErrorButton">
			</div>
		</div>
	
	</form>