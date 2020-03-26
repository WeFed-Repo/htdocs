					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							12/05/2017	
						</div>
					</div>
					
					
					





<script type="text/javascript">
$(function(){
	if ($('#errorRiquadro').length) {
		mostraConferma();
	} else {
		$('.conferma').show();
	}
});
function mostraConferma(){
	$('.messaggio').hide();
	$('.conferma').show();
}
</script>
<form id="formCambioPinCarta" method="post" action="/WEBHT/cartaConto/cambioPinCartaEsito.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="0c3972e9c30ca5f648109ef00675684b"></div>
	<div class="riquadro clearfix">
		
		
		
		
		




	
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
		
				
				<div class="hidden-print hidden-xxs flag cambioPin">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Carte</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; Cambio PIN carta</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12  hidden-print">
				







		<div class="contentPagina">
			<p>Alla conferma il nuovo PIN sar&agrave; immediatamente operativo.<br>Al fine di garantire il corretto funzionamento del nuovo PIN su tutte le apparecchiature, sar&agrave; necessario utilizzarlo per effettuare un'operazione di prelievo presso uno sportello bancomat (ATM) del Gruppo Banco Popolare.</p>
		</div>



			</div>
		
	
</div>
		








	


		<div id="erroreAjax" style="display:none">&nbsp;</div>
		<div id="conferma" class="section clearfix conferma" style="display: block;">

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
								<img src="/HT/fe/img/OTPW.png">
								<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control with-help" style="margin-top:5px" autofocus=""> 
								
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
			





<script type="text/javascript">
$(document).ready(function() { 
	if(!$("#codiceOTPConSMS").is(":disabled")){
		$('#codiceOTPConSMS').focus();
	}
});

</script>







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
	<div class="clearfix pull-right margin-bottom20 messaggio" style="display: block;">
		<div class="actions">
			
			<input type="submit" name="annulla" value="Annulla" class="btn btn-primary" alt="Annulla">
			
			<input type="button" class="btn btn-primary execute" onclick="mostraConferma()" value="Conferma">
		</div>
	</div>
	<!--div class="pull-right margin-bottom20 conferma" style="display: block;">
		<input type="submit" name="annulla" value="Annulla" id="annulla" class="btn btn-primary" alt="Annulla">
		<input type="submit" name="esito" value="Conferma" id="conferma" class="btn btn-primary execute" alt="Conferma">
	</div-->
</form>
<script type="text/javascript">
var url = getPathContext()+"/cartaConto/invioOTPConSMSCambioPin.do" ;
function inviaOtpSMS(button){
	$.ajax({
   		url: url,
		success: function(data) 
   		{
	   		if($.trim(data) == "SMSOK"){
	   			$("#codiceOTPConSMS").removeAttr('disabled');
	   			$("#invioOTPConSMS").attr('disabled', 'disabled');
	   			$("input[name='esito']").removeAttr('disabled');
	   		}else{
	   			$("#erroreAjax").empty();
	   			$("#erroreAjax").append(data);
	   			$("#erroreAjax").show();
	   		}
   		}
 	});
}
</script>