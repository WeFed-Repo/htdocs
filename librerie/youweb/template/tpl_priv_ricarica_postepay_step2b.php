					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							04/07/2017	
						</div>
					</div>
					
					
					
					





	<script>
		const MODULE_PATH = getPathContext();
		
		function inviaOtpSMS(){
			const SUCCESS_RESPONSE = "SMSOK"
			var form = $("#confermaForm");
			$.post(MODULE_PATH + "/postePay/ricarica/invioOTPSMS.do?invioOTPConSMS=", function(response){
				if($.trim(response) == SUCCESS_RESPONSE)
				{
					$("#conferma").attr("disabled", false);
					$("#invioOTPConSMS").attr("disabled", true);
					var passwordBox = $("#codiceOTPConSMS");
					passwordBox.attr("disabled", false);
					passwordBox.focus();
				}
				else
				{
					alert("Si è verificato un errore durante l'invio del messaggio SMS con OTP");
				}
				
			});
		}
	</script>



	
	<form id="formPostePay" method="post" action="/WEBHT/postePay/ricarica/esito.do">
	
		<!-- RIQUADRO CONTENENTE L'INTERA PAGINA ECCETTO MANLEVA E SEZIONE BOTTONI -->
		<div class="riquadro clearfix">
			
			<!-- TITOLO PRINCIPALE E PROGRESSIVO NAVIGAZIONE -->
			
			
			
			
			




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag PH[titolo.principale.flag]">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Ricarica PostePay</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; Conferma</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
			
			<!-- BANDA DINAMICA MESSAGGI DI ERRORE -->
			








	


			
			<!-- BANDA MESSAGGI DI AVVISO UTENTE -->
			





	<div class="col-xs-12 messagePanel alert warning" style="display: block;">
		<h3 class="titleSection">Messaggio al cliente</h3>
		<div>
		<p>
				- <b>Per proseguire con la disposizione &egrave; necessario inserire una nuova OTP SMS.</b><br> Clicca su "Genera Password" in fondo alla pagina per ricevere il codice.<br><br>
		</p>
		</div>
	</div>


			
			<!-- BOX DI RIEPILOGO -->
			<div class="section clearfix">
				





<div class="row-height">		
			
	
	
	
	<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
		<div class="boxDefault inside inside-full-height">
			<h3>
				Carta da ricaricare
			</h3>
			<div>
				<div class="row">
					<label>Intestata a:</label>
					<span>Prova 2</span>
				</div>		
				<div class="row">
					<label>Codice Fiscale</label>
					<span>CRLRRT70P13H501O</span>
				</div>				
				<div class="row">
					<label>Tipo carta:</label>
					<span>poste pay</span>
				</div>					
				<div class="row">
					<label>Numero carta da ricaricare:</label>
					<span>4030350521278924</span>
				</div>					
			</div>
		</div>
	</div>
	



<div class="col-sm-6 col-xs-12 col-prt-12 col-height margin-bottom-xs-10 margin-top-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
					Ordinante
				</h3>
				<div>
						<div class="row">
							<label class="control-label">Intestato a:</label>
							<span class="resume">TALLO MAURO LUCA</span>
						</div>					
						<div class="row">
							<label class="control-label">Conto di addebito:</label>
							<input type="hidden" name="codContoCorrente" value="001|2001|200100174456">
							<span class="resume">00174456</span>
						</div>					
						<div class="row">
							<label class="control-label">	Filiale:</label>
							<span class="resume">SEDE DI LODI -
							    
									
									
										2001
									
								
							</span>
						</div>	
										
				</div>
			</div>
		</div>



</div>

<div class="row-height margin-bottom10">		

	<div class="col-sm-6 col-xs-12  margin-bottom-xs-10">
		<div class="boxDefault inside inside-full-height">
			<h3>
				Dati ricarica
			</h3>
			<div>
				<div class="row">
					<label>Importo da ricaricare:</label>
					<span>1.00</span>
				</div>					
				<div class="row">
					<label>Commissioni:</label>
					<span>2.00</span>
				</div>					
				<div class="row">
					<label>Totale:</label>
					<span>3.00</span>
				</div>
				
				
				
				<div class="row">
					<label>Causale:</label>
					<span>prova</span>
				</div>					
			</div>
		</div>
	</div>
	
</div>
			</div>
			
			<!-- BANDA GENERAZIONE OTP VIA SMS-->
			
				
					





<script type="text/javascript">
$(document).ready(function() { 
	if(!$("#codiceOTPConSMS").is(":disabled")){
		$('#codiceOTPConSMS').focus();
	}
});

</script>

	
		
		
			
			
				
				<div style="clear:both">
					<h3 class="titleSection">
					
					</h3>
				</div>
				
				
			
			
				
					
				
				
			
						
	
	
	<style type="text/css">
		
	</style>
	
		
	
		
<div class="section clearfix" id="ricaricaPostepay-2">
	<div class="bs-example">
		<div class="form-group" id="formGroup">
			<div style="clear:both">
				<h3 class="titleSection">Conferma richiesta</h3>
					<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/HT/HTML/HelpOtpConSMS.html')">
					  	<img src="/HT/fe/img/i_help.png" style="margin-bottom:-3px" title="Help On Line" alt="Help On Line">
					</a>
			</div>
				 
			<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10" id="sezioneDescrizione">
				<label class="control-label">
					Per proseguire con la disposizione &egrave; necessario cliccare su "Genera password": un codice di 6 cifre verr&agrave; automaticamente inviato via SMS al numero <b>******9567</b>
				</label>
			</div>
				
			<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10" id="sezionePassword">
				<div class="col-xs-3 col-sm-2" id="sezioneImmagine">
				  	<img src="/HT/fe/img/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
				</div>
				<div class="col-xs-9  col-sm-3" id="sezioneCampoPassword">
				   <input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
				</div>
				<div class="col-xs-6 col-sm-6 " id="sezioneBottonePassword">
					<div class="pull-xs-left">
						<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn btn-primary">	
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>







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
		
		<!-- MANLEVA -->
		<p class="small margin-left10 margin-top10">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
		
		<!-- BOTTONI MODIFICA E CONFERMA -->
		<div class="pull-right margin-bottom20">
			<input type="submit" name="modificaDatiInseriti" value="Modifica" onclick="changeSubmitUrl(this, '/postePay/ricarica/modificaDati')" class="btn btn-primary">
					
					
				
					<input type="submit" name="confermaOperazione" value="Conferma" disabled="disabled" id="conferma" class="btn btn-primary">
						
			
		</div>
		
	</form>