					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							23/05/2017	
						</div>
					</div>
					
					
					
					





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
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Cambio PIN</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			
		</div>



			</div>
		
	
</div>
	
	








	


	
	
	<div class="section clearfix">
		<h3 class="titleSection">			
			
			








		
			Inserisci dati
		
		
		
		


		</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group">
				<div class="form-field-input col-xs-12 col-sm-4">
					<label class="control-label" for="attuale">
						PIN attuale 
					</label>
					<div class="form-field">
						<input type="password" name="oldPwd" maxlength="30" size="35" value="*********" disabled="disabled" id="attuale" class="form-control">
					</div>
				</div>
				<div class="form-field-input col-xs-12 col-sm-4">
					<label class="control-label" for="nuova">
						PIN nuovo 
					</label>
					<div class="form-field">
						<input type="password" name="newPwd" maxlength="30" size="35" value="********" disabled="disabled" id="nuova" class="form-control">
		 			</div>
		 		</div>
				<div class="form-field-input col-xs-12 col-sm-4">
					<label class="control-label" for="conferma">
						Conferma PIN nuovo 
					</label>
					<div class="form-field">
						<input type="password" name="reNewPwd" maxlength="30" size="35" value="********" disabled="disabled" id="conferma" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
	<form id="formCambioPassword" method="post" action="/WEBHT/serviziPerTe/cambioPasswordEsito.do">
	<div class="section clearfix" id="otpDiv"> 
		





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
										<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
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
	</form>
	



</div>
<div class="pull-right margin-bottom20 margin-top10">
 	
 	<input type="button" name="conferma0" value="Conferma" onclick="$('#formCambioPassword').submit()" id="confButt" class="btn btn-primary" alt="Conferma">
 </div>

<script type="text/javascript">
$(document).ready(function (){
	$('#invioOTPConSMS').click(function(){
		$("#confButt").removeAttr("disabled");
	})
})
</script>