<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		09/05/2017	
	</div>
</div>
					
					
					





<form id="formBonificoContinuativoConferma" method="post" action="/WEBHT/pagamenti/bonificoContinuativoEsito.do" onsubmit="return verificaSubmit();"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="5b17dacb9d8ea0102b74cebb77da4cd9"></div>
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
		
				
				<div class="hidden-print hidden-xxs flag continuativo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Ordine di bonifico ripetitivo</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; conferma</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	


	






	<div id="erroreAjax" style="display:none">&nbsp;</div>
	<input type="hidden" name="back" id="back">
	<input type="hidden" name="pagina" value="conferma">
	<input type="hidden" name="CONFERMA" id="CONFERMA">
		
		<div class="section clearfix">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							
							








		
			Ordinante
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>Conto di addebito</label>
								<span>000000000000</span>							
							</div>							
							<div class="row">
								<label>Indirizzo</label>
								<span>
										VIA AMERIGO VESPUCCI 111
										00000&nbsp;
										MILANO &nbsp;
										
											(MI)
										
								</span>							
							</div>							
							<div class="row">
								<label>Filiale</label>
								<span>
									MILANO - 0000
								</span>							
							</div>
							
							<div class="row">
								<label>
									Intestato a
								</label>
								<span>
									COGNOME NOME
								</span>							
							</div>
						</div>
					</div>
				
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							
							








		
			Beneficiario
		
		
		
		


						</h3>
						<div>
						<div class="row">
							<label>IBAN</label>
							<span>IT00B0000000000000000000000</span>
						</div>		
							<div class="row">
								<label>Beneficiario</label>
								<span>NOME COGNOME</span>					
							</div>							
							<div class="row">
								<label>	Filiale</label>
								<span>BANCA POPOLARE DI MILANO S.P.A.         &nbsp;-&nbsp;WEBANK AGENZIA 0000                     </span>							
							</div>							
						</div>
					</div>
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							
							








		
			Periodicit&agrave; bonifico
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>Periodicit&agrave; bonifico</label>
								<span>
									
										
										
										
										
										
											Semestrale
										
									
								</span>
							</div>
							<div class="row">
								<label>Fino a</label>
								<span>
									
								  		
										Revoca
								  	
								</span>
							</div>
							<div class="row">
								<label>Giorno valuta beneficiario</label>
								<span>
									
								   		01
							   		
							   		
								</span>
							</div>
							
							<div class="row">
								<label>
									A partire da
								</label>
								<span class="resume">
									01/12/2021
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault">
						<h3>
							
							
							








		
			Dati bonifico
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>Importo</label>
								<span class="oRight">
									1,00
								</span>
							</div>
							<div class="row">
								<label>
								Causale
								</label>
								<span>
									PROVA
								</span>
							</div>		
						</div>
					</div>
				</div>
			</div>

	
	<div class="section clearfix">
		
			
			
				





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
			
		
	</div>
	

</div>
</div>
<p class="small">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>	
	<div class="pull-right margin-bottom20">
	
		<input type="submit" name="modifica" tabindex="3" value="Modifica" class="btn btn-primary">
	
	 
	
		<input type="submit" name="conferma" tabindex="2" value="Conferma" class="btn btn-primary execute conferma ">
	</div>
</form>

<script type="text/javascript">
var url = getPathContext()+"/pagamenti/invioOTPConSMSBonificoContinuativo.do" ;
function inviaOtpSMS(button){
	$.ajax({
   		url: url,
		success: function(data) {
	   		if($.trim(data) == "SMSOK"){
	   			$("#codiceOTPConSMS").removeAttr('disabled');
	   			$("#invioOTPConSMS").attr('disabled','disabled');
	   			$("input[name='conferma']").removeAttr('disabled').removeClass('disabled');
	   		}else{
	   			$("#erroreAjax").empty();
	   			$("#erroreAjax").append(data);
	   			$("#erroreAjax").show();
	   		}
   		}
  	});
}
</script>