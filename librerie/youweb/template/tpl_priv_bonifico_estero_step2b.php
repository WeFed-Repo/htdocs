	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			04/07/2017	
		</div>
	</div>
					
					
					
					



	<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({
			minDate: new Date(1416524400000),
			maxDate: '+1Y',
			beforeShowDay: noWeekendsOrHolidays,
			showOn: 'focus'
		});
		
	
		var formSubmitted=false;
		$('form').submit(function() {
			if (formSubmitted)
				return false;
			else 
				formSubmitted=true;	
			return true;
		});
		
		
		$('.general-help').click(function(){
			$('#general-dialog').dialog('open');
		});
	});
	
	</script>


<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1499119200000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1499119200000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1499119200000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});
	
	var formSubmitted=false;
	$('form').submit(function() {
		if (formSubmitted)
			return false;
		else 
			formSubmitted=true;	
		return true;
	});
});
</script>

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
		
				
				<div class="hidden-print hidden-xxs flag disposizioneBonifico">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Bonifico Estero</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; Conferma</span>
 					
				
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1370')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
				









			</div>
		
	
</div>
	
	








	


	





	<div class="col-xs-12 messagePanel alert warning" style="display: block;">
		<h3 class="titleSection">Messaggio al cliente</h3>
		<div>
		<p>
				- <b>Per proseguire con la disposizione &egrave; necessario inserire una nuova OTP SMS.</b><br> Clicca su "Genera Password" in fondo alla pagina per ricevere il codice.<br><br>
		</p>
		</div>
	</div>


	<input type="hidden" name="codicePaese" value="" id="codicePaese">
	<input type="hidden" name="codiceResidenza" value="" id="codiceResidenza">
	
	<div id="erroreAjax" style="display:none">&nbsp;</div>
	<div class="messagePanel error">
		<h3 class="titleSection">Attenzione</h3>
		<div>
			<strong>La password usa e getta che hai inserito non &egrave; corretta.</strong><br>
			Attendi che la card di sicurezza generi una nuova password usa e getta, inseriscila per intero in questa pagina e conferma la disposizione.<br>
			<br>
			Codice errore: <strong>EWEBOTP000012</strong>
		</div>
	</div>
	







<div class="section clearfix">
	<div class="row-height">
		



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
						
							<div class="row hidden-print">
								<label class="control-label">Email Ordinante</label>
								<span class="resume overflowEllipsis">MAUROLUCA.TALLO321@BANCOPOPOLARE.IT</span>
							</div>					
										
				</div>
			</div>
		</div>



		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
					Beneficiario
				</h3>
				<div>
					<div class="row">
						<label>Intestato a:</label> <span>NOME COGNOME </span>
					</div>
					<div class="row">
						<label>Paese Residenza:</label>
						<span>ITALIA </span>
					</div>
					<div class="row">
						<label>Banca beneficiario:</label>
						<span>BANK OF AMERICA, N.A.                                                 &nbsp;-&nbsp; </span>
					</div>

					
						
						
							<div class="row">
								<label>Numero conto:</label>
								<span>483054673233 </span>
							</div>
							<div class="row">
								<label>BIC / Swift code:</label> <span>BOFAUS3N </span>
							</div>
						
					


				</div>
			</div>
		</div>
	</div>
	<div class="row-height margin-bottom10">
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
					Dati bonifico
				</h3>
				<div>
					<div class="row">
						<label>Paese di destinazione bonifico:</label> <span class="col-xs-3 clear-padding"> <span class="oRight">
								STATI UNITI D'AMERICA </span> </span>
					</div>
					<div class="row">
						<label>Invio denaro in:</label>
						<span class="col-xs-3 clear-padding"> <span class="oRight">
								EUR </span> </span>
					</div>
					<div class="row">
						<label>Cambio per operazioni in Divisa:</label> <span class="col-xs-3 clear-padding"> <span class="oRight">
								1,00 </span> </span>
					</div>
					<div class="row">
						<label>Controvalore per operazioni in Divisa:</label> <span class="col-xs-3 clear-padding"> <span class="oRight">
								1,00 </span> </span>
					</div>
					<div class="row">
						<label>Importo Operazione Comprensivo Spese:</label>
						<span class="col-xs-3 clear-padding"> <span class="oRight">
								20,00 </span> </span>
					</div>
					<div class="row">
						<label>Divisa Operazione Comprensivo Spese :</label>
						<span class="col-xs-3 clear-padding"> <span class="oRight">
								EUR </span> </span>
					</div>
					<div class="row">
						<label>Importo Spese e Commissioni :</label> <span class="col-xs-3 clear-padding"> <span class="oRight">
								19,00 </span> </span>
					</div>
					<div class="row">
						<label>Divisa Spese e Commissioni :</label> <span class="col-xs-3 clear-padding"> <span class="oRight">
								EUR </span> </span>
					</div>
					<div class="row">
						<label>Causale:</label> <span class="col-xs-3 clear-padding">  PROVA </span>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-height">
			<div class="boxDefault inside inside-full-height">
				<h3>
					Dati esecuzione
				</h3>
				<div>
					<div class="row">
						<label>Data esecuzione:</label>
						<span>04/07/2017
						</span>
					</div>
					<div class="row">
						<label>Data e ora inserimento:</label> <span>04/07/2017 - 11:55 </span>
					</div>
					<div class="row">
						<label>Data Valuta Addebito:</label> <span> 2017-07-04 </span>
					</div>
					<div class="row">
						<label>Data Valuta Accredito:</label> <span> 2017-07-06 </span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
	
	
	<div class="section clearfix">
		<form id="formConferma" method="post" action="/WEBHT/pagamenti/bonificoEsteroEsito.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3ef5dc8a12478320b63a3834d1423f90"></div>
	
			
			
				
					





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
				
		
			
			
				
		


<div class="section clearfix" id="bonificoEstero-2">
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
				  	<img src="/HT/fe/img/otp_sms.png" class="img-responsive" title="otp sms" alt="otp sms">
				</div>
				<div class="col-xs-9 col-sm-4" id="sezioneCampoPassword">
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

				
				
			
						
	
	
	
	
		
	
		
<!--div class="section clearfix">
	<div class="bs-example">
		<div class="form-group" id="formGroup">
			<div style="clear:both">
				<h3 class="titleSection">Conferma richiesta</h3>
			</div>
				 
			<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10" id="sezioneDescrizione">
				<label class="control-label">
					Per proseguire con la disposizione &egrave; necessario cliccare su "Genera password": un codice di 6 cifre verr&agrave; automaticamente inviato via SMS al numero <b>******9567</b>
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

	
				
				
			
			

		</form>
	</div>
			
</div>
	<p class="small margin-left10 margin-top10">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>	
		<div class="pull-right margin-bottom20">
		<form id="formConferma" method="post" action="/WEBHT/pagamenti/bonificoEstero.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3ef5dc8a12478320b63a3834d1423f90"></div>
			
		
			 
			
				
			
					
				
					<input type="submit" name="modifica" tabindex="3" value="Modifica" class="button btn btn-primary ">
			
			
			<input type="hidden" name="ritorna" value="" id="ritorna">
			
					
				
					<input type="submit" name="conferma" tabindex="2" value="Conferma" onclick="$('#formConferma').submit();" disabled="disabled" class="btn btn-primary execute disabled">
						
			
			
		</form>
		</div>
	
<script type="text/javascript">

function modifica(){
	
	$('#formConferma').append("<input type='hidden' name='modifica' value='modifica' />");
	$('#formConferma').submit();
}

$( document ).ready(function() {
    console.log( "ready!" );
    $('#modifica').on('click', function(){
		$("#ritorna").val("S");
    });
});

var url = getPathContext()+"/pagamenti/bonificoEstero/invioOTPConSMS.do" ;
function inviaOtpSMS(button){
	$.ajax({
		url: url,
	    type: "POST",
	    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		success: function(data) {
	    	if($.trim(data) == "SMSOK"){ 
	    		$("#codiceOTPConSMS").removeAttr('disabled');
	    		$("#invioOTPConSMS").attr('disabled', 'disabled');
	    		$("input[name='conferma']").removeAttr('disabled').removeClass('disabled');
	    	}else{
	    		$("#erroreAjax").empty();
	    		$("#erroreAjax").append(data);
	    		$("#erroreAjax").show();
	    	}
	    }
	});
};

</script>