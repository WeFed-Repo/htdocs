					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					




<script type="text/javascript">

$(document).ready(function(){
	$('.btnSelezioneClose').click(function(){
		$("#formRisultati").show();
		$("#formRicerca").hide();
		$("#submitRicerca").hide();
	});
	
	$('.btnSelezioneOpen').click(function(){
		$("#formRisultati").hide();
		$("#formRicerca").show();
		$("#submitRicerca").show();
	});
	
	$("#btnRicerca").click(function(){
		$("#formRisultati").hide();
		$("#formRicerca").show();
		$("#submitRicerca").show();
	});

	$('.datepicker').datepicker({
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png'
	});
	
	$('.calendarioDefault').datepicker({
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png'
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



 <form id="formUltimeDisposizioni" method="post" action="/WEBHT/pagamenti/ultimeDisposizioniConferma.do" class="form-horizontal">
 	<div style="display:none">
 		<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06">
 	</div>
	<div class="riquadro clearfix">
		<div class="clearfix">



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		<div class="hidden-print hidden-xxs flag ultimeDisposizioni">&nbsp;</div>
		<span>Ultime disposizioni</span>
 	</h1>
	
		
	
<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: ultime disposizioni&pagCont=testo02')" class="general-help help-icon hidden-xs">
	<img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line">
</a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        		<span aria-hidden="true">&times;</span>
        	</button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>


<div class="col-xs-12 hidden-xs hidden-print">
				







	<div class="contentPagina">
		<!--Di seguito viene visualizzato l'elenco delle ultime 10 disposizioni che hai inserito in ordine di "Data di esecuzione". &Egrave; possibile visualizzare il dettaglio della singola operazione e procedere alla revoca se l'esito della stessa risulta "in attesa". Per ottenere risultati pi&ugrave; mirati, imposta i parametri di ricerca a tuo piacimento cliccando sulla doppia freccia.-->
	</div>



			</div>
		
	
</div>

		
		







		<input type="hidden" name="contoDeposito" value="">
		
		<div class="section clearfix">
		<h3 class="titleSection">Rapporto selezionato</h3>

			
			




  






	
	
		
	


<style type="text/css">



</style>





<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
 								Cognome Nome 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00000000</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														88,00
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														88,00
														EUR
													</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
															0,00
															EUR
														</strong>
								
								
							
						</span>
					
					
					
				</div>
			
			
			<!-- C'è solo la sezione intestatario -->
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
						
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															0,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														88,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														88,00
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0898|089800911819">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0898|089800911819" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">YouCard 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">*9130</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
										2070
									
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															0,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														7,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														7,00
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2070|207000000000">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000000000" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															0,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														5,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														5,00
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting oRight" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
										Saldo Disponibile
									
									
								: ordinamento crescente">
									
										Saldo Disponibile
									
									
								</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
					</thead>
			</table></div>
		</div>
	</div>
</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
	var tr = $("input[name='codContoCorrente']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			
			popolaSelezioneCC(contoSelezionato);
     
     
	 var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	    submitOnClick = true;
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>

		</div>
		<!-- 		CRITERI DI RICERCA -->
		
		
		
		
<div class="section clearfix " id="formRisultati" style="margin-bottom:10px">
	<div class="context-buttons">
		<a href="#" title="mostra criteri ricerca" id="btnRicerca" class="btnSelezioneOpen pull-right" role="button" aria-pressed="false"> </a>
	</div>
	<h3 class="titleSection">
		Parametri di ricerca		
	</h3>
	
	<div class="bs-example">
		<div class="form-group clearfix">
			<div class="col-xs-12">
				Criteri: ultime <strong>10</strong> disposizioni di <strong>qualsiasi</strong> 
				importo, stato disposizioni <strong>TUTTE</strong>
			</div>
		</div>
	</div>
</div>
		


		
<div class="section clearfix  " id="formRicerca" style="margin-bottom:10px">
	<div class="contex-buttons">
		<a href="#" title="nascondi parametri di ricerca" id="btnRicerca" class="btnSelezioneClose pull-right" role="button" aria-pressed="true"> </a>
	</div>
	<h3 class="titleSection">
		Parametri di ricerca					
	</h3>




	<div class="bs-example">
		<div class="form-group">
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="radioUltimeDisposizioni"> 
				<input type="radio" name="tipoRicerca" value="RICERCA_ULTIME_DISPOSIZIONI" checked="checked" onclick="checkRicerca();" id="radioUltimeDisposizioni"> Ultime operazioni  
				</label>
				<div class="form-field">
					<select name="numeroDisposizioni" id="numeroDisposizioni" class="form-control">
						<option value="10" selected="selected">Ultime 10 &nbsp;</option>
						<option value="20">Ultime 20 &nbsp;</option>
						<option value="30">Ultime 30 &nbsp;</option>
					</select>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				
				<label class="control-label" for="radioDataEsecuzione"> 
					<input type="radio" name="tipoRicerca" value="RICERCA_PER_DATA_ESECUZIONE" onclick="checkRicerca();" id="radioDataEsecuzione"> 
					Data esecuzione
				</label>

				<div class="form-field">
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
						<span class="float-xs-left">dal</span>
						<input type="text" name="dataInizio" maxlength="10" size="16" value="" id="dataInizio" class="calendarioDefault wauto form-control margin-right10 hasDatepicker" disabled="disabled"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
					</div>
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10  xs-align-right">
						<span class="float-xs-left">al</span>
						<input type="text" name="dataFine" maxlength="10" size="16" value="" id="dataFine" class="calendarioDefault wauto form-control margin-right10 hasDatepicker" disabled="disabled"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="importoMin">Importo </label>
				<div class="form-field">
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10  xs-align-right">
							<span class="float-xs-left">da</span>
							<input type="text" name="importoMin" maxlength="16" size="24" value="" id="importoMin" class="form-control wauto">

					</div>
					<div class="col-sm-6 col-xs-12  xs-align-right">
							<span class="float-xs-left">a</span>
							<input type="text" name="importoMax" maxlength="16" size="24" value="" id="importoMax" class="form-control  wauto">
					</div>	
				</div>
			</div>

			<input type="hidden" name="tipoOperazione" value="UVVI;UVBA;CCBO;CCTF;CCBB;CCBC;CCGI;CCBT;UVBI;UVBE;UVBT;UVBB;BMRI;REMV;RERV;REFR;BMCC;CARK;CCRK;CCSK;CCPP;PVDL;BMRM;UVCB" id="tipoOperazione">
						
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="statoOperazione">Stato Operazione </label>
				<div class="form-field">
					<select name="statoOperazione" id="statoOperazione" class="form-control">
						<option value="  " selected="selected">Tutte</option>
						<option value="S1">In attesa</option>
						<option value="S2">Revocata</option>
						<option value="S3">Ineseguita</option>
						<option value="S4">Eseguita</option>
						<option value="S6">A scadenza</option>	
						<option value="S5">Da autorizzare</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<div class="pull-right margin-bottom20 margin-top10 clearfix  " id="submitRicerca">
		<div class="actions">
			<input type="submit" value="Ricerca" class="btn btn-primary" alt="Ricerca">
		</div>
	</div>
</div>

		
		
			
			
				<!--           OPERA          -->




<script>
$(document).ready(function(){

	
	movimentiSelectionInit(true);
	
	

});
</script>











	



<div class="SelezioneMovimenti">
	<div class="tabSelezioneMovimenti" style="display: block;">
		<div id="PVLD_wrapper" class="dataTables_wrapper no-footer"><table id="PVLD" class="table table-striped dataTable no-footer" role="grid">
<colgroup>
<col width="2%">
<col width="2%">
<col width="12%">
<col width="12%">
<col width="11%">
<col width="5%">
<col width="31%">
<col width="17%">
<col width="5%">
</colgroup>
<thead>
<tr class="hover" role="row"><th style="width: 12px;" class="hidden-print sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;">&nbsp;</th><th style="width: 3px;" class="hidden-print sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;">&nbsp;</th><th class="date sorting_desc" title="Data esecuzione" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-sort="descending" aria-label="Data esecuzione: ordinamento crescente" style="width: 82px;">Data esecuzione</th><th class="date sorting" title="Data inserimento" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Data inserimento: ordinamento crescente" style="width: 84px;">Data inserimento</th><th class="number sorting" title="Importo" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Importo: ordinamento crescente" style="width: 73px;">Importo</th><th class="text sorting" title="Divisa" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Divisa: ordinamento crescente" style="width: 36px;">Divisa</th><th class="text sorting" title="Operazione" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Operazione: ordinamento crescente" style="width: 249px;">Operazione</th><th class="text sorting" title="Stato" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Stato: ordinamento crescente" style="width: 125px;">Stato</th><th class="image sorting" title="Canale" tabindex="0" aria-controls="PVLD" rowspan="1" colspan="1" aria-label="Canale: ordinamento crescente" style="width: 41px;">Canale</th></tr>
</thead>
<tbody>



<tr role="row" class="odd">
<td class="oCenter hidden-print"><a href="javascript:goToDettaglio('/pagamenti/dettaglioDisposizione.do','codice','IH7027051168','contoDeposito','false','urlDettTrasf','/cd/dettaglioTrasferimento.do')"><img src="/HT/fe/img/i_dettaglio.gif" width="20
" height="20
" title="dettaglio" alt="dettaglio"></a></td>
<td class="oCenter hidden-print"></td>
<td class="oCenter sorting_1">27/02/2017</td>
<td class="oCenter">27/01/2017</td>
<td class="oRight">1,00</td>
<td class="oCenter">EUR</td>
<td class="oLeft capitalize">Bonifico PIPPO</td>
<td class="oCenter">Revocata</td>
<td class="oCenter"><img src="/HT/fe/img/IHAP.gif" alt="App" title="App"></td>
</tr><tr role="row" class="even">
<td class="oCenter hidden-print"><a href="javascript:goToDettaglio('/pagamenti/dettaglioDisposizione.do','codice','IH7027063268','contoDeposito','false','urlDettTrasf','/cd/dettaglioTrasferimento.do')"><img src="/HT/fe/img/i_dettaglio.gif" width="20
" height="20
" title="dettaglio" alt="dettaglio"></a></td>
<td class="oCenter hidden-print"></td>
<td class="oCenter sorting_1">27/01/2017</td>
<td class="oCenter">27/01/2017</td>
<td class="oRight">10,00</td>
<td class="oCenter">EUR</td>
<td class="oLeft capitalize">Trasferimento a conto 00000000</td>
<td class="oCenter">Eseguita</td>
<td class="oCenter"><img src="/HT/fe/img/IHIH.gif" alt="Web" title="Web"></td>
</tr><tr role="row" class="odd">
<td class="oCenter hidden-print"><a href="javascript:goToDettaglio('/pagamenti/dettaglioDisposizione.do','codice','IH70270520
35','contoDeposito','false','urlDettTrasf','/cd/dettaglioTrasferimento.do')"><img src="/HT/fe/img/i_dettaglio.gif" width="20
" height="20
" title="dettaglio" alt="dettaglio"></a></td>
<td class="oCenter hidden-print"></td>
<td class="oCenter sorting_1">27/01/2017</td>
<td class="oCenter">27/01/2017</td>
<td class="oRight">7,00</td>
<td class="oCenter">EUR</td>
<td class="oLeft capitalize">Ricarica Carta Ricaricabile</td>
<td class="oCenter">Eseguita</td>
<td class="oCenter"><img src="/HT/fe/img/IHAP.gif" alt="App" title="App"></td>
</tr></tbody>
</table></div>

		
		<div id="divLegenda" class="hidden-print">
<br><p><b>LEGENDA PULSANTI</b></p>
<img src="/HT/fe/img/i_dettaglio.gif" title="dettaglio" alt="dettaglio">&nbsp;=&nbsp;dettaglio
<img src="/HT/fe/img/i_cancella.gif" title="cancella" alt="cancella">&nbsp;=&nbsp;cancella
</div>

	</div>
</div>

<!--           /OPERA           -->	
			
		
		
		
	</div>
</form>