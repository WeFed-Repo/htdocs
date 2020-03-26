					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							12/05/2017	
						</div>
					</div>
					
					
					






<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1496181600000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1496181600000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1496181600000),
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




<form id="formFrecciEsito" method="post" action="/WEBHT/pagamenti/frecciaEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="4b523845a96c5a4e0dd074b10f256dfb"></div>
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
		
				
				<div class="hidden-print hidden-xxs flag freccia">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Pagamento Bollettino Freccia</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; conferma</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino freccia&amp;pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		








	


		






		<div class="section clearfix">
			<div class="row-height">
				<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10 margin-top-xs-10">
					<div class="boxDefault inside inside-full-height">
						



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
				00003610
				<input type="hidden" name="codContoCorrente" value="001|2001|200100003610">
			</span>
		</div>
		<div class="row">
			<label>
				Intestato a:
			</label> 
			<span>
				URLAAL OC ULOMAT
			</span>
		</div>
		<div class="row">
			<label>
				Filiale:
			</label> 
			<span>
				SEDE DI LODI -
	   			 
					
					
						2001
					
				
			</span>
		</div>
		
		
		<div class="row">
			<label>
				Indirizzo e-mail
			</label>
			<span>
				mauroluca.tallo@bancopopolare.it
			</span>
		</div>
		
		
	</div>
	
</div>

					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
					<div class="boxDefault inside inside-full-height">
						<h3>
							
							








		
			Dati bollettino
		
		
		
		


						</h3>
						<div>
							<div class="row">
								<label>
									Importo	
								</label>
								<span class="oRight">
									161,64
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
									161,64
								</span>
							</div>
							<div class="row">
								<label>
									Coordinate bancarie creditore
								</label>
								<span>
									IT80Y0503459480000000046026
								</span>
							</div>
							<div class="row">
								<label>
									Descrizione pagamento 
								</label>
								<span>
																	
								</span>
							</div>
							<div class="row">
								<label>
									Esenzione  
								</label>
								<span>
									1 								
								</span>
							</div>
							<div class="row">
								<label>
									CIN 
								</label>
								<span>
									Imp.&nbsp;
									N&nbsp;-&nbsp; 
									Int.&nbsp;
									3&nbsp;-&nbsp; 
									Comp.&nbsp;
									P 
								</span>
							</div>
							<div class="row">
								<label>
									Codice bollettino 
								</label>
								<span>
							310982505065556849957 
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row-height margin-bottom10">
				<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
					<div class="boxDefault inside inside-full-height">
						<h3>Dati esecuzione</h3>
						<div>
							<div class="row">
								<label>
									Data esecuzione 
								</label>
								<span> 
									31/05/2017
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-height">
					<div class="boxDefault inside inside-full-height">
						





<div class="boxDefault">
	<h3>
			
		








		
			Notifica all'ordinante
		
		
		
		


	</h3>
	<div>
		<div class="row">
			<label> 
				Indirizzo e-mail
			</label> 
			
				<span class="bold">mauroluca.tallo@bancopopolare.it</span>
			 
		</div> 
	</div>
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
		<div class="col-xs-12 margin-top20 margin-bottom10">
			ATTENZIONE: ti ricordiamo che il pagamento &egrave; garantito in giornata se l'inserimento dell'ordine avviene in un giorno lavorativo <b>entro le ore 18.00</b>. Gli ordini di pagamento inseriti sabato, domenica, o in giorni festivi, vengono eseguiti il primo giorno lavorativo successivo.
		</div>
	</div>
	</div>
		<div class="pull-right margin-bottom20">
			
			
			<input type="submit" name="modifica" value="Modifica" class="btn btn-primary" alt="Modifica">
			<input type="submit" name="conferma" value="Conferma" class="btn btn-primary execute" alt="Conferma">
		</div>
</form>