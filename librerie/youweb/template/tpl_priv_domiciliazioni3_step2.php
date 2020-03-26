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

<form id="formMavEsito" method="post" action="/WEBHT/pagamenti/mavEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="ad1278f8e0d23e868ed156c56b041ecf"></div>
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
		<div class="hidden-print hidden-xxs flag mav">&nbsp;</div>
		<span>Domiciliazioni bancarie</span>
	</h1>
	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Domiciliazioni bancarie&pagCont=testo03')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>


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
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li class="on"><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni3&lev1=pagamenti&wdg=06|02" title="Dettagli" id="dett_fin" role="button" class="dett_fin">Inserisci nuovo mandato</a></li>
					<li><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni4&lev1=pagamenti&wdg=06|02" title="Ammortamento" id="amm_fin" role="button" class="amm_fin ">Gestione mandati</a></li>
				</ul>
			</div>
		</div> 
	</div>
</div>	
<div class="section clearfix">	
	<div class="row-height">
		<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10 margin-top-xs-10">
			<div class="boxDefault inside inside-full-height">
					



<div class="boxDefault">
	<h3>Dati debitore</h3>
	<div>
		<div class="row">
			<label>
				Intestatario del pagamento:
			</label> 
			<span>
				Lorem ipsum
			</span>
		</div>
		<div class="row">
			<label>
				Iban:
			</label> 
			<span>
				IT03D0558401799000000049199
			</span>
		</div>
		<div class="row">
			<label>
				Indirizzo:
			</label> 
			<span>
				Lorem ipsum
			</span>
		</div>		
		<div class="row">
			<label>
				Citt&agrave;:
			</label>
			<span>
				Lorem ipsum
			</span>
		</div>
		<div class="row">
			<label>
				CAP:
			</label>
			<span>
				Lorem ipsum
			</span>
		</div>
		<div class="row">
			<label>
				Provincia:
			</label>
			<span>
				AL
			</span>
		</div>
		<div class="row">
			<label>
				Nazione:
			</label>
			<span>
				Italia
			</span>
		</div>
		
		
	</div>
	
</div>

			</div>
		</div>
		
	
		<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>Dati mandato</h3>
				<div>
					<div class="row">
						<label>
							Id mandato	
						</label>
						<span>
							YHTRGGGF
						</span>
					</div>
					<div class="row">
						<label>
							Id creditore
						</label>
						<span>
							IT940010000007064570968
						</span>
					</div>
					<div class="row">
						<label>
							Data di firma
						</label>
						<span>
							31/05/2017
						</span>
					</div>
					<div class="row">
						<label>Codice fiscale del firmatario del mandato</label>
						<span>
							SSSMMM73h25F205U
						</span>
					</div>
					<div class="row">
						<label>
							Importo massimo/fisso di addebito
						</label>
						<span class="col-xs-3 clear-padding">
							<span>
								0,00
							</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-height margin-bottom10">
		<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>Dati creditore</h3>
				<div>
					<div class="row">
						<label>
							Azienda	
						</label>
						<span>
							Lorem ipsum
						</span>
					</div>
					<div class="row">
						<label>
							Indirizzo
						</label>
						<span>
							Vai Lorem ipsum
						</span>
					</div>
					<div class="row">
						<label>
							Provincia
						</label>
						<span>
							AL
						</span>
					</div>
					<div class="row">
						<label>Citt&agrave;</label>
						<span>
							Lorem ipsum
						</span>
					</div>
					<div class="row">
						<label>
							CAP
						</label>
						<span>
							00000
						</span>
					</div>
					<div class="row">
						<label>
							Nazione
						</label>
						<span>
							Lorem ipsum
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-height">
			<div class="boxDefault inside inside-full-height">
				<div class="boxDefault">
					<h3></h3>
				</div>
			</div>
		</div>
	</div>
</div>


	<div class="section clearfix">
		<form id="formConferma" method="post" action="strutt_priv.php?pag=bonifico_ordinario_step3&lev1=pagamenti&wdg=07|02|03" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="e99941ba510e0f794f7f78fa5daca09e"></div>
	
			
			
				
					





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



	<div class="section clearfix">
		<div class="bs-example">
			<div class="form-group">
				
					<div style="clear:both">
						<h3 class="titleSection">
							








		
			Conferma richiesta
				<a href="#" id="helpPopUp" onclick="javascript:OpenHelp('/template/modale.php?pagTit=Help: bonifico ordinario&pagCont=testo02')">
		<img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv"  title="Help On Line" alt="Help On Line">
					  		</a>
		
		
		


						</h3>
					</div>
				 
				<div class="form-field col-sm-5 col-xs-12 margin-bottom-xs-10">
					<label class="control-label">
						Per proseguire con la disposizione &egrave; necessario cliccare su "Genera password": un codice di 6 cifre verr&agrave; automaticamente inviato via SMS al numero <b>******4345</b>
					</label>
				</div>
				
				
	<div class="form-field col-sm-7 col-xs-12 margin-top-xs-10 margin-bottom-xs-10" id="bonOrdR">
		<div class="col-xs-3 col-sm-3">
			<img src="/HT/fe/img/otp-phone-token2.png" class="img-responsive" title="otp sms" alt="otp sms">
		</div>
		<div class="col-xs-9 margin-bottom-xs-10 col-sm-3">
			<input type="text" id="codiceOTPConSMS" value="" class="form-control thin wauto" maxlength="6" name="codiceOTPConSMS" autocomplete="off" tabindex="1" disabled="disabled">
		</div>
		<div class="col-xs-12 col-sm-5 ">
						<!--div class="pull-xs-right"-->
			<input type="button" name="invioOTPConSMS" tabindex="3" value="Genera password" onclick="javascript:inviaOtpSMS()" id="invioOTPConSMS" class="btn btn-primary">	
					  	<!--/div-->
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

</form>
	</div>	
	</div>

<p class="small  margin-top10">La Banca &egrave; sollevata da ogni responsabilit&agrave; derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
	<div class="pull-right margin-bottom20">
		<div class="actions">
			<input type="submit" name="modifica" value="Modifica" class="btn btn-primary" alt="Modifica">
			<input type="submit" name="conferma" value="Conferma" class="btn btn-primary execute" alt="Conferma">
		</div>
	</div>
</form>