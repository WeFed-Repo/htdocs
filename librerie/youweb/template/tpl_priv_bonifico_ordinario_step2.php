					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
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
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489532400000),
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
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Bonifico ordinario</span>
 					
				
 					
 					
 						<span class="hidden-xs">:&nbsp; riepilogo</span>
 					
				
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	
	








	


	






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
							<span class="resume">OES NALGIOCDGTUS GR IAEAANC</span>
						</div>					
						<div class="row">
							<label class="control-label">Conto di addebito:</label>
							<input type="hidden" name="codContoCorrente" value="001|0004|000400585163">
							<span class="resume">00585163</span>
						</div>					
						<div class="row">
							<label class="control-label">	Filiale:</label>
							<span class="resume">VERONA AG. 3 -
							    
									
									
										0004
									
								
							</span>
						</div>	
						
							<div class="row hidden-print">
								<label class="control-label">Email Ordinante</label>
								<span class="resume overflowEllipsis">luca@gmail.com</span>
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
							<label>Intestato a:</label>
							<span>BEMBO ALESSANDRO</span>
						</div>					
						<div class="row">
							<label>IBAN:</label>
							<span>IT82S0200815105000102652561</span>
						</div>					
						<div class="row">
							<label>Banca beneficiario:</label>
							<span>UNICREDIT SPA&nbsp;-&nbsp;AVELLINO</span>
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
							<label>Importo:</label>
							<span class="col-xs-3 clear-padding">
								<span class="oRight">
									1,00</span>
								</span>
						</div>					
						<div class="row">
							<label>Commissioni:</label>
							<span class="col-xs-3 clear-padding">
								<span class="oRight">
									0,00</span>
								</span>
						</div>					
						<div class="row">
							<label>Totale:</label>
							<span class="col-xs-3 clear-padding">
								<span class="oRight">	
									1,00</span>
								</span>
						</div>					
						<div class="row">
							<label>Causale:</label>
							<span class="col-xs-3 clear-padding">
								
							PROVA</span>
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
							<span>15/03/2017</span>
						</div>					
						<div class="row">
							<label>Valuta ordinante:</label>
							<span>15/03/2017</span>
						</div>					
						<div class="row">
							<label>Valuta beneficiario:</label>
							<span>
								16/03/2017
								
							</span>						
						</div>
												
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	
	<div class="section clearfix">
		<form id="formConferma" method="post" action="strutt_priv.php?pag=bonifico_ordinario_step2b&lev1=pagamenti&wdg=07|02|03" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9d92f0575bacc75dc345eaf2f48b9828"></div>
	
			
			
				
				
					





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
							<a href="#" onclick="javascript:OpenHelp('/template/modale.php?pagTit=Help: bonifico ordinario&pagCont=testo02')">
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
		</form>
	</div>
			
</div>
	<p class="small  margin-top10">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>	
		<div class="pull-right margin-bottom20">
		
		<form id="formConferma" method="post" action="strutt_priv.php?pag=bonifico_ordinario&lev1=pagamenti&wdg=07|02|03" class="form-horizontal">
		<div style="display:none">
			<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9d92f0575bacc75dc345eaf2f48b9828">
		</div>
			
		<input type="submit" name="modifica" tabindex="3" value="Modifica" onclick="modifica()" class="btn btn-primary">
			
		<input type="submit" name="conferma" tabindex="2" value="Conferma" onclick="$('#formConferma').submit();" class="btn btn-primary execute ">

		</form>
		</div>
	
<script type="text/javascript">

function modifica(){
	$('#formConferma').append("<input type='hidden' name='modifica' value='modifica' />");
	$('#formConferma').submit();
}

var url = getPathContext()+"/pagamenti/invioOTPConSMS.do" ;
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