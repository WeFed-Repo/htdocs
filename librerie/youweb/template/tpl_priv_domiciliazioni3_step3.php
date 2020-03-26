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
			
		
			
			
			
				<div class="circle current_page">&nbsp;</div>
			
		
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
<div class="col-xs-12 col-sm-6 col-height margin-bottom-xs-10 margin-top-xs-10">


					
<div class="messagePanel success" style="display: block;">
	<h3 class="titleSection hidden-print">Esito operazione</h3>
	<div>
		<p>Mandato inserito correttamente</p>
	</div>
	<p>Ti invieremo un'email a conferma dell'operazione.</p>
	
	<p>Da questo momento il mandato è autorizzato.<br>
	Riceverai gli addebiti da parte dell'azienda creditrice direttamente sul conto corrente selezionato.<br>
	Per vedere i dettagli del mandato appena inserito clicca su "gestione mandati".</p>
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

</div>


	<div class="pull-right margin-bottom20">
		<div class="actions">
			<input type="submit" name="Gestione mandati" value="Gestione mandati" class="btn btn-primary" alt="Gestione mandati">
			<input type="submit" name="Inserisci nuovo mandato" value="Inserisci nuovo mandato" class="btn btn-primary execute" alt="Inserisci nuovo mandato">
		</div>
	</div>
</form>