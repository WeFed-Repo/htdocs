	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			  
			29/06/2017	
		</div>
	</div>
					
					
					
					














		
<script>	
	function changeSubmitUrl(button, url){
		const pageUrlPath = window.location.pathname;
		const modulePath = pageUrlPath.substring(0, (pageUrlPath.substring(1).indexOf("/") + 1));
		$(button).closest("form").attr("action", modulePath + url + ".do");
	}
</script>



<form id="formGestioneEMail" method="post" action="/WEBHT/serviziPerTe/contattiERecapiti/EMail/esito.do">
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
		<div class="hidden-print hidden-xxs flag gestioneContattiInserimento">&nbsp;</div>
		Aggiungi/Modifica Email
	</h1>
	
	

<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		
		
		








	


		
		
		<div class="col-xs-12 clear-padding innerBoxWhite  clearfix inner">
			Qui sotto puoi inserire o modificare il tuo contatto. Per confermare l'operazione ti invieremo un codice di conferma al tuo <b>nuovo indirizzo Email</b>.
		</div>
		
		
		
		




<div class="section">
	<h3 class="titleSection">
		
		








		
			Contatto
		
		
		
		


	</h3>
	<div class="container">
		<!-- ROW 1 -->
		<div class="row">
			<!--  1 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-field">
					<label> 
						Contatto
					</label>
				</div>
				<div>
					<label style="font-weight: bold;">
						EMAIL 
					 </label>
				</div>
			</div>
			<!--  2 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-field">
					<label> 
						Tipologia contatto
					</label>
				</div>
				<div>
					<label style="font-weight: bold"> 
						Altro recapito 
					</label>
				</div>
			</div>
		</div>
		<!-- ROW 2 -->
		<div class="row">
			<!--  3 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-field">
					<label> 	
						Indirizzo
					</label>
				</div>
				<div>
					<label style="font-weight: bold; overflow:hidden; text-overflow:ellipsis"> 
						OSANDROSILVIA2@ALICE.IT 
					</label>
				</div>
			</div>
			<!-- 4 -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="form-field">
					<label> 
						Predefinito
					</label>
				</div>
				<div>
					
						
							<label style="font-weight: bold;"> SI </label>
						
						
					
				</div>
			</div>
		</div>
	</div>
</div>
	
		
		
		








	
	<script type="text/javascript">	
		function inviaOTP(){
			const SUCCESS_RESPONSE = "SMSOK";
			const pageUrlPath = window.location.pathname;
			const modulePath = pageUrlPath.substring(0, (pageUrlPath.substring(1).indexOf("/") + 1));
			const ajaxUrl = modulePath + "/serviziPerTe/contattiERecapiti/EMail/invioOTP.do";
			var form = $("#generaOTP").closest('form');
			$.post(ajaxUrl, "&inviaPasswordSuEmail=", 
				   function(responseBody){
				   	if($.trim(responseBody) == SUCCESS_RESPONSE){
			   			$("#generaOTP").attr('disabled', true);
			   			var passwordBox = $("#codiceOTPConSMS");
			   			passwordBox.attr('disabled', false);
			   			passwordBox.focus();
			   			$(form).find("#conferma").attr('disabled', false);
				   	}
				   	else{
				   		alert("Si è verificato un errore durante l'invio della password via Email");
				   	}												
			});
		}
	</script>
	


	
	
	
	
	
	






	<style>
		@media(min-width:800px){
			.vertical-centered-content-sm{
				display:flex;
				align-items:center;
			}
		}
		
		@media(max-width:800px){
			.pull-xs-right{
				float:right;
			} 
			
			#codiceOTPConSMS{
				width:100%;
			}
			
			#sezioneIcona img{
				max-height:65px;
			}
		}
		
		.vertical-centered-content{
			display:flex;
			align-items:center;
		}

	</style>



	<!-- VALORIZZAZIONE TITOLO, TESTO, LABEL BOTTONE E ICONA -->
	
	
	


	
	
	
	<!-- STRUTTURA E ASPETTO GRAFICO TEMPLATE -->
	<div class="section clearfix">
		<div class="bs-example">
			<div class="form-group">
				
				<!-- TITOLO -->
				<div>
					<h3 class="titleSection">
						Conferma richiesta
					</h3>
						<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/HT/HTML/HelpOtpConMAIL.html')">
						  	<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-bottom:-3px; position:relative; bottom:2px" title="Help On Line" alt="Help On Line">
						 </a>
				</div>
				<!-- Contenitore template-->
				<div id="contenitoreTemplate">
					
					<!-- TESTO -->
					<div class="col-xs-12 col-sm-6" id="sezioneTesto">
						<label class="control-label">
							Per confermare la variazione &egrave; necessario cliccare su "Genera password": <b>un codice di 6 cifre</b> ti verr&agrave; inoltrato al seguente indirizzo <b>OSANDROSILVIA2@ALICE.IT</b>
						</label>
					</div>
					<div class="col-xs-12 col-sm-6" id="sezionePassword">
					<!-- ICONA -->
						<div class="col-xs-2 col-sm-2" id="sezioneIcona">
						  	<img src="/HT/IMAGES/nGrafica/contatti-email.png" 
						  		class="img-responsive" 	title="icona OTP" 	alt="icona OTP">
						</div>
					<!-- CAMPO PASSWORD -->
						<div class="col-xs-9 col-sm-4" id="campoPassword">
							<input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" 
									name="codiceOTPConSMS" autocomplete="off" 	tabindex="1" disabled=""> 
						</div>
					<!-- BOTTONE GENERAZIONE PASSWORD -->
						<div class="col-xs-6 col-sm-6" id="bottonePassword">
							<input type="button" name="inviaOtpParam" tabindex="3" 
									value="Genera password" onclick="inviaOTP();" id="generaOTP" class="btn btn btn-primary">
						</div>

			
					</div>
					
				</div>
			<!-- END Contenitore template-->
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
	
	
	<div class="pull-right margin-bottom20">
		<input type="submit" name="modificaDatiInseriti" value="Modifica" onclick="changeSubmitUrl(this, '/serviziPerTe/contattiERecapiti/EMail/modificaDati')" class="btn btn-primary">	
				
				
			
				<input type="submit" name="confermaOperazione" value="Conferma" disabled="disabled" id="conferma" class="btn btn-primary">
					
		
	</div>

</form>