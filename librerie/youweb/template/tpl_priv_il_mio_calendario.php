					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					






<div class="riquadro clearfix">
	
	
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag calendario">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Il mio calendario</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	


	
	
	




<script type="text/javascript">
	function closeDialogFun() {
		//funzione da sovrascrivere nelle jsp che includono questo frammento
	}

	$(document).ready(function() {
		$("#dialog-confirm").dialog({
			title:'Cancellazione appuntamento',
			modal: true,
			width: 300,
			height: 115,
			autoOpen: false,
			resizable: false,
			close: closeDialogFun
		});
	});
	
	var idAppuntamentoDaCancellare = '';
	
	function apriDialogCancellazione(idApp) {
		idAppuntamentoDaCancellare = idApp;
		$("#dialog-confirm").dialog('open');
	}
	
	function chiudiDialogCancellazione() {
		$("#dialog-confirm").dialog('close');
	}
	
	function cancellaAppuntamento() {
		encodeUrl('/serviziPerTe/cancellaAppuntamento.do?idAppuntamento=' + idAppuntamentoDaCancellare);
	}
</script>


	<script type="text/javascript">
		
		//sovrascrivo la funzione dell'include
		function closeDialogFun() {
			$('.OUTLetFac tr').removeClass('ui-state-highlight');
		}
	
		function apriPopupConferma(a, idApp) {
			$(a).parents('tr').addClass('ui-state-highlight');
			apriDialogCancellazione(idApp);
		}
	
	</script> 
	
<!--style type="text/css">
	#formIlMioCalendario #dataInizio, 
	#formIlMioCalendario #dataFine{
		width: 70%!important;
	}

	#formIlMioCalendario #dataInizio + .ui-datepicker-trigger, 
	#formIlMioCalendario #dataFine + .ui-datepicker-trigger {
    	margin-left: -24px!important;
    	margin-top: 16px;	
	}

	#formIlMioCalendario #dataInizio.form-control, 
	#formIlMioCalendario #dataFine.form-control {
		padding-left: 4px;
	}

	#formIlMioCalendario .control-label.floatl{
		padding-top: 10px;
	}


</style-->

	<form id="formIlMioCalendario" method="post" action="/WEBHT/serviziPerTe/ilMioCalendario.do">
		<div class="section clearfix">
			<h3 class="titleSection">
				Elenco eventi
			</h3>
			<div class="bs-example">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-12 col-xs-12">
						<div class="col-sm-4 col-xs-12 clear-padding-left padding-right20">
							<input type="radio" name="tipoRicerca" value="RICERCA_ULTIME_DISPOSIZIONI" checked="checked" id="radioUltimeDisposizioni"class="floatl">
							<label class="margin-left20 control-label" for="radioUltimeDisposizioni">
								Elenco
							</label>
							<div class="form-field">
							  	<select name="numeroDisposizioni" id="numeroDisposizioni" class="form-control">
							  		<option value="10" selected="selected">Prossimi 10</option>					
								  	<option value="20">Prossimi 20</option>					
								  	<option value="30">Prossimi 30</option>
								  </select>
							</div>
				    	</div>
						<div class="col-sm-8 col-xs-12 clear-padding-left padding-top-xs-10" >
				    		<input type="radio" name="tipoRicerca" value="RICERCA_PER_DATA_ESECUZIONE" id="radioDataEsecuzione" class="floatl">
					    	<label class="margin-left20 control-label" for="radioDataEsecuzione">
								Periodo (gg/mm/aaaa)
							</label>
							<div class="form-field">
								<div class="col-sm-6 col-xs-12 clear-padding-left">
									<label class="control-label floatl">	    
							    		dal
							    	</label>
							      	<input type="text" name="dataInizio" maxlength="10" size="10" value="" id="dataInizio" style="width:60%" class="calendarioEventi margin-left10 form-control floatl hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
							    </div>
							    <div class="col-sm-6 col-xs-12">
									<label class="control-label floatl">
						          		al
						          	</label>
							      	<input type="text" name="dataFine" maxlength="10" size="10" value="" id="dataFine" style="width:60%" class="calendarioEventi margin-left10 form-control floatl hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pull-right margin-bottom20 margin-top10">
			
			<input type="submit" name="eseguiRicerca" value="Ricerca" class="btn btn-primary" alt="Ricerca">
		</div>
	</form>
	<!-- <div class="selezioneCC"> -->
    <!-- <div class="table-responsive"> -->
    <div class="SelezioneMovimenti">
		<!-- <div class="dataTables_wrapper no-footer"> -->
			<table class="table table-striped">
				<colgroup>
					<col width="1%">
					<col width="1%">
					<col width="12%">
					<col width="66%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th>&nbsp;</th>
			            <th>&nbsp;</th>
			            <th>Data</th>
			            <th>Descrizione</th>
			            <th class="hidden-xs">Stato</th>
			        </tr>
				</thead>
				<tbody>
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=8" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/03/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=9" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/04/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoCarteCredito.do?id=6" class="encodeUrl  padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
								
								
							
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/04/2017
						  </td>
						  <td>
						  	Scade la tua Carta Sì n. *9288
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=10" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/05/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=11" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/06/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=12" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/07/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoCompleanno.do?id=1" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	27/08/2017
						  </td>
						  <td>
						  	Tanti auguri!
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=13" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/08/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoScadenzaRata.do?id=14" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	30/09/2017
						  </td>
						  <td>
						  	Addebito rata finanziamento n. 000000005836
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
						<tr>  
						  <td class="oCenter">
						  				  	
						  					
						  					
						  	
						  					
						  					
								
								
								
							
							    <a href="/WEBHT/serviziPerTe/dettaglioEventoCompleanno.do?id=2" class="encodeUrl padding-left5"><img src="/HT/fe/img/i_dettaglio.gif
" height="14" width="14" class="scale-img-xs" title="Dettaglio" alt="Dettaglio"></a>
							
							
							
						  	
						  </td>
						  <td class="oCenter">
						  	
						  </td>
						  <td class="oCenter">
						  	06/10/2017
						  </td>
						  <td>
						  	Compleanno di Grego Sonia
						  </td>
						  <td class="oCenter hidden-xs">
						  	
						  </td>
						</tr>			
					
		        </tbody>
	   		</table>
	   	<!-- </div> -->
   	<!-- </div> -->
	
</div>
</div>
<div class="pull-right margin-bottom20 hidden-xs">
	
	<input type="button" name="richiestaAppuntamento" value="Richiedi appuntamento" onclick="document.location.href=getPathContext()+'/serviziPerTe/richiestaAppuntamentoCompilazione.do'" class="btn btn-primary" alt="Richiedi appuntamento">
</div>

<script>
$(document).ready(function() {
	$('.calendarioEventi').datepicker({ 
		minDate: 0,
		maxDate: "+12m",
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png', 
		onSelect: function (dateText, inst) {
			$('#radioDataEsecuzione').prop('checked','checked');
		}
	});
	$("#radioUltimeDisposizioni").click(function(){
		$("#dataInizio").val("");
		$("#dataFine").val("");
	});
	$("#numeroDisposizioni").click(function() {
  		$('#radioUltimeDisposizioni').click();
	});
})
</script>