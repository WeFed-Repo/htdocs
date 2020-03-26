					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							09/05/2017	
						</div>
					</div>
					
					
					
					







<div class="riquadro clearfix">









	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
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
		
				
				<div class="hidden-print hidden-xxs flag ricaricaCarta">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Ricarica carta</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>











	









<div id="erroreAjax"></div>
<div class="section clearfix">
	<div class="row">
		<div class="col-sm-6 col-xs-12 margin-top-xs-10">
			<div class="boxDefault">
				<h3>
					
					








		
			Carta da ricaricare
		
		
		
		


				</h3>
				<div>
					
					<div class="row">
						<label>
							Intestata a
						</label>
						<span>
							Cognome Nome
						</span>
					</div>
					
					
					<div class="row">
						<label>
							Tipo carta
						</label>
						<span>
							YouCard
						</span>
					</div>
					
					<div class="row">
						<label>
							Numero carta
						</label>
						<span>
							0000 0000 0000 0000
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 margin-top-xs-10">
			



<div class="boxDefault">
	<h3>
		 
		








		
			Ordinante
		
		
		
		


	</h3>
	<div>
		<div class="row">
			<label>
				Conto di addebito:
			</label> 
			<span>
				00000000
				<input type="hidden" name="codContoCorrente" value="000|0000|207000000000">
			</span>
		</div>
		<div class="row">
			<label>
				Intestato a:
			</label> 
			<span>
				COGNOME NOME
			</span>
		</div>
		<div class="row">
			<label>
				Filiale:
			</label> 
			<span>
				MILANO -
	   			 
					
					
						0000
					
				
			</span>
		</div>
		
		
		
	</div>
	
</div>
	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6  col-xs-12 margin-top-xs-10">
			<div class="boxDefault">
			<h3>
				
				








		
			Dati ricarica
		
		
		
		


			</h3>
				<div>
					<div class="row">
						<label>
							Importo da ricaricare
						</label>
				  		<span class="oRight">
				  			1,00
				  		</span>
			  		</div>
					<div class="row">
						<label>
							Commissioni
						</label>
						<span class="oRight">
							0,00
						</span>
			  		</div>
			  		
					
						
						
							<div class="row">
								<label>
									Totale
								</label>
								<span class="oRight">
									1,00
								</span>
					  		</div>
						
					
				</div>
			</div>
		</div>
		
	</div>
</div>
	<div class="section clearfix">
		<form id="formRicaricaCarta" method="post" action="/WEBHT/cartaConto/ricaricaCartaEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="041678e2eb4de578c9575e52e7d54330"></div>
			
				
				
					





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
				
			
		</form>
	</div>
</div>
	 
	
	<div class="pull-right margin-bottom20">
		
		
		<form id="formRicaricaCarta" method="post" action="/WEBHT/cartaConto/ricaricaCartaEsito.do" style="float:left"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="041678e2eb4de578c9575e52e7d54330"></div>
			<input type="submit" name="modifica" value="Modifica" class="btn btn-primary" alt="Modifica">
		</form>
		<input type="button" name="ricaricaEsito" value="Conferma" onclick="$('#formRicaricaCarta').submit()" class="btn btn-primary execute " alt="Conferma">
	</div>
<script type="text/javascript">
var url = getPathContext()+"/cartaConto/invioOTPConSMSRicarica.do" ;

function inviaOtpSMS(){
	$.ajax({
    		url: url,
			success: function(data) {
	    		if($.trim(data) == "SMSOK"){
	    			$("#codiceOTPConSMS").removeAttr('disabled');
	    			$("#invioOTPConSMS").attr('disabled', 'disabled');
	    			$("input[name='ricaricaEsito']").removeAttr('disabled');
	    			$("input[name='ricaricaEsito']").removeClass('disabled');
	    			$('#codiceOTPConSMS').focus();
	    		} else {
	    			$("#erroreAjax").empty();
	    			$("#erroreAjax").append(data);
	    			$("#erroreAjax").show();
	    		}
    		}
  		});
}
</script>