					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					





<script type="text/javascript">
<!--
$(document).ready(function() { 
	$('.datepicker').datepicker({
		minDate: new Date(-62170160400000),
		maxDate: new Date(1501884000000),
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});
	 
	 function setDisabled(val) {
	 if (val == 1) {
			$("select").each(function(){
				$(this).attr("disabled", "disabled");
			})
			$('.datepicker').datepicker('disable');
		} else {
			$("select").each(function(){
				$(this).removeAttr("disabled");
			})
			$('.datepicker').datepicker('enable');
		}
	 }

	setDisabled($("#ric input[type='radio']:checked").val());
	
	$("#ric input[type='radio']").click(function() { 
		setDisabled($(this).val());
    });
});
//-->
</script>
					






<div class="riquadro clearfix">



<form id="situazionePrestitiMutuiFormPaginazione" method="post" action="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9140fdf54ff99fcbaa5139e3d21142ae"></div>
	<input type="hidden" name="recordPartenza" value="0">
	<input type="hidden" name="recordFine" value="24">
	<input type="hidden" name="paginazione" value="paginazione">
</form>

	

	
	
	<script>
		$(document).ready(function(e) {
		  	if (isMobile()) {
				$("#tableListaAmmortamento").cardBoxTable({
					colTitleIdx: 0,
					titleConcat: true,
				});
		  	}
		});
	</script>
		
		




<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag finanziamenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Finanziamenti</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	



<form id="situazionePrestitiMutuiForm" method="post" action="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9140fdf54ff99fcbaa5139e3d21142ae"></div>
	<div class="section clearfix">	
		


  







<div class="selezioneCC"> 
	
		
	    	
	
	<h3 class="titleSection">	
		








		
			Seleziona Finanziamento
		
		
		
		


	</h3>
	<div class="selezioneCC tabellaSelezioneCC selezioneFinanziamenti">
	<div class="CCselezionato clearfix">						
		<div class="col-sm-6 col-xs-12">
			<span class="col-xs-5 clear-padding hide" id="labelIntestatario"> Intestato a: </span>
			<span class="clear-padding col-xs-10" id="intestazione">
				         	Np Card S.r.l.-unipersonale
			         	</span>
			<span class="col-xs-5 clear-padding bold" id="conto">MUTUO IMPRESA RETAIL     </span>
			<span class="col-xs-7 clear-padding"><b>num.</b><span id="numero">903304507</span></span>		
		</div>
		<div class="col-sm-6 col-xs-12">
			<span class="col-xs-5 clear-padding">Importo accordato: </span>
			<span class="col-xs-7 clear-padding" id="disponibile"><strong>25.000,00 EUR</strong></span>
			<span class="col-xs-5 clear-padding" id="labelFiliale">Rate residue: </span>
			<span class="col-xs-7 clear-padding" id="agenzia">5</span>					
		</div>	
		
		<a id="selezionaCC" title="selezione rapporto" href="javascript:void(0);" class="btnSelezioneCC" role="button" aria-pressed="false">
			<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
		</a>
		
	</div>
	<div class="table-responsive tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer" id="DataTables_Table_0" role="grid">
		    <thead>
			   <tr class="hover" role="row"><th style="width: 0px;" class="hidden sorting_asc" headers="tipoRapporto" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th style="width: 0px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tipo: ordinamento crescente">Tipo</th><th style="width: 0px;" headers="ccRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Finanziamento n.: ordinamento crescente">Finanziamento n.</th><th style="width: 0px;" headers="intestazioneRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th style="width: 0px;" headers="filialeRapporto" class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rate residue: ordinamento crescente">Rate residue</th><th style="width: 0px;" headers="saldoDisponibile" class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Importo accordato: ordinamento crescente">Importo accordato</th><th style="width: 0px;" headers="divisaSaldoDisponibile" class="hidden sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
			</thead>
		    <tbody>
				
							
				
							
							
		    <tr role="row" class="odd">
				      	<td class="hidden sorting_1"><input type="radio" name="numeroDelibera" value="903304507" checked="checked" id="numeroDelibera"></td>  			         
			         	<td headers="tipoRapporto">MUTUO IMPRESA RETAIL     </td> 
				      	<td headers="ccRapporto">903304507</td> 
			         	<td headers="intestazioneRapporto">
				         	Np Card S.r.l.-unipersonale
			         	</td>
			         	<td class="oRight hidden-xs" headers="filialeRapporto">5</td>
			         	<td class="oRight hidden-xs" headers="saldoDisponibile">25.000,00</td>
			         	<td class="hidden hidden-xs" headers="divisaSaldoDisponibile">EUR</td>
					</tr><tr role="row" class="even">
				      	<td class="hidden sorting_1"><input type="radio" name="numeroDelibera" value="900005836" id="numeroDelibera"></td>  			         
			         	<td headers="tipoRapporto">MUTUO DIPENDENTI         </td> 
				      	<td headers="ccRapporto">900005836</td> 
			         	<td headers="intestazioneRapporto">
				         	Castagnedi Luca Grego Sonia
			         	</td>
			         	<td class="oRight hidden-xs" headers="filialeRapporto">63</td>
			         	<td class="oRight hidden-xs" headers="saldoDisponibile">103.000,00</td>
			         	<td class="hidden hidden-xs" headers="divisaSaldoDisponibile">EUR</td>
					</tr></tbody> 
		</table></div></div>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
	var tr = $("input[name='numeroDelibera']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			popolaSelezioneCC(contoSelezionato);
			
     var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-7');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
		CCselectionInit(submitOnClick, false, false);
		
		
	
})
</script>
 
	</div>

	<div class="">
	<div class="section clearfix" id="finanz_ricerca">
		<div class="row">
			<div class="context-buttons pull-right">
				<a href="#" title="dettaglio" role="button" id="dett_fin" class="dett_fin ">&nbsp;</a>
				<a href="#" title="ammortamento" role="button" id="amm_fin" class="amm_fin disabled">&nbsp;</a>
				
					<a href="#" title="preammortamento" id="preamm_fin" role="button" class="preamm_fin ">&nbsp;</a>
				
			</div> 
			<h3 class="titleSection">
				








		
		
		
			Parametri di ricerca					
		
		

			
			</h3>
		</div>
		<div id="ric">
			<div class="form-group clearfix">
				<div class="hide">
					<input type="radio" name="tipoVisualizzazione" value="1" id="radio1">
				    
				    
						<input type="radio" name="tipoVisualizzazione" value="2" checked="checked" id="radio2">
						<input type="radio" name="tipoVisualizzazione" value="3" id="radio3">
				    			    
				    
				    
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="form-field-input">
							<label for="numeroRateRicerca" class="control-label">Numero Rate</label>
							<div class="form-field">
							<select name="numeroRateRicerca" id="numeroRateRicerca" class="form-control"><option value="tutte" selected="selected">Tutte</option>
								<option value="12">12</option>
								<option value="24">24</option>
								<option value="36">36</option></select>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="form-field-input">
							<label for="tipoRataRicerca">Tipo Rata</label>
						</div>
						<div class="form-field-input">
							<select name="tipoRataRicerca" id="tipoRataRicerca" class="form-control"><option value="tutte" selected="selected">Tutte</option>
								<option value="P">Pagata</option>
								<option value="S">Scaduta</option>
								<option value="N">Da Pagare</option>		
								<option value="Z">Parzialmente pagata</option></select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-sm-offset-1 ">
						
						
 						<div class="floatl form-field-input">
							<label class="control-label" for="dataInizio"> Periodo dal </label>
							<div class="form-field">
								<input type="text" name="dataInizioRicerca" maxlength="10" size="10" value="17/09/2016" id="dataInizioRicerca" class="datepicker form-control  wauto hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario" style="opacity: 1;">
							</div>
						</div>
						<div class="margin-left20 floatl form-field-input">
							<label class="control-label" for="dataFine"> al </label>
							<div class="form-field">
								<input type="text" name="dataFineRicerca" maxlength="10" size="10" value="12/09/2017" id="dataFineRicerca" class="datepicker form-control wauto hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario" style="opacity: 1;">
							</div>
						</div>
						
					</div>
				</div>
			</div>		
			
		</div>
	</div>
	<div class="pull-right margin-bottom20 margin-top10 " id="btn_ricerca">
		<input type="submit" name="conferma" value="Ricerca" class="btn btn-primary">
	</div>
	</div>
</form>	










	





	

		
	
		<div class="section clearfix">
			<h3 class="titleSection">
				
				








		
			Piano di Ammortamento
		
		
		
		


			</h3>
		<div class="selezioneCarte cardbox-background">
		<div class="table-responsive" style="display: block;">
		<table id="tableListaAmmortamento" class="table table-striped dataTable no-footer" role="grid">
			
				<colgroup>
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="25%">
				</colgroup>
				<thead>
					<tr>
						
					  		<th>
								Numero rata
					  		</th>
						 
					  		<th>
								Scadenza
					  		</th>
						 
					  		<th>
								Quota interessi
					  		</th>
						 
					  		<th>
								Importo
					  		</th>
						 
					  		<th>
								Quota capitale
					  		</th>
						 
					  		<th>
								Stato
					  		</th>
						 
				  	</tr>
				</thead>
				<tbody>
					
						<tr>
							
								<td class=" oCenter ">
									1
								</td>
							
								<td class=" oCenter ">
									05/01/2017
								</td>
							
								<td class=" oRight ">
									66,67
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.095,95
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									2
								</td>
							
								<td class=" oCenter ">
									05/02/2017
								</td>
							
								<td class=" oRight ">
									58,41
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.104,21
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									3
								</td>
							
								<td class=" oCenter ">
									05/03/2017
								</td>
							
								<td class=" oRight ">
									50,13
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.112,49
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									4
								</td>
							
								<td class=" oCenter ">
									05/04/2017
								</td>
							
								<td class=" oRight ">
									41,83
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.120,79
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									5
								</td>
							
								<td class=" oCenter ">
									05/05/2017
								</td>
							
								<td class=" oRight ">
									33,51
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.129,11
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									6
								</td>
							
								<td class=" oCenter ">
									05/06/2017
								</td>
							
								<td class=" oRight ">
									25,17
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.137,45
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									7
								</td>
							
								<td class=" oCenter ">
									05/07/2017
								</td>
							
								<td class=" oRight ">
									16,80
								</td>
							
								<td class=" oRight ">
									3.162,62
								</td>
							
								<td class=" oRight ">
									3.145,82
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
						<tr>
							
								<td class=" oCenter ">
									8
								</td>
							
								<td class=" oCenter ">
									05/08/2017
								</td>
							
								<td class=" oRight ">
									8,41
								</td>
							
								<td class=" oRight ">
									3.162,59
								</td>
							
								<td class=" oRight ">
									3.154,18
								</td>
							
								<td class=" oLeft ">
									Da Pagare
								</td>
							
						</tr>
					
				</tbody>
			
		</table>
	</div>
	<div class="dataTables_paginate paging_simple_numbers">
		<span>
			
			
	
			
		</span>
	</div>				
			
	</div>
	</div>
	

 
<script type="text/javascript">
$(document).ready(function(){
	$("#intestazione").change(function(){
		$('#situazionePrestitiMutuiForm').find("input[type='submit']").click();
	})
	
	$('#dett_fin').click(function(e){
		e.preventDefault();
		$("#radio1").click();
		$("input[name='conferma']").click();

	})
	$('a#amm_fin').click(function(e){
		e.preventDefault();
		$("#radio2").click();
		$("input[name='conferma']").click();
	})
	$('a#preamm_fin').click(function(e){
		e.preventDefault();
		$("#radio3").click();
		$("input[name='conferma']").click();
	})
})
</script>
				</div>
						
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-print" id="sidebar" style="min-height: 0px;">
					<div class="sidebar-container">
				 		<div class="list-group">
							

















	<!-- top navbar -->

	<div class="container visible-xs-block">
		<div class="row sidebar-menu">
			<!-- sidebar -->
			
				
				<ul data-offset-top="120" class="nav nav-stacked">
				
				
					<li onclick="apriMenuResponsive(this)" id="menu_0" class="conti_depositi">
						<a href="#">
							<strong>CONTI E DEPOSITI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_saldo_e_movimenti">
									
										
											
											
											
												<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti">Saldo e movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_finanziamenti">
									
										
											
											
											
												<a href="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do" title="Finanziamenti">Finanziamenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_profit_loss">
									
										
											
											
											
												<a href="/WEBHT/cc/dettaglioInteressiConto.do" title="Interessi e spese">Interessi e spese</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pannello_rapporti hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/cc/pannelloRapporti.do" title="Pannello Rapporti">Pannello Rapporti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_questionario_mifid">
									
										
											
											
											
												<a href="/WEBHT/av/adeguataVerificaLista.do" title="Adeguata Verifica">Adeguata Verifica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bilancio_mensile">
									
										
											
											
											
												<a href="/WEBHT/cc/bilancioMensile.do" title="Bilancio mensile">Bilancio mensile</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_categorie">
									
										
											
											
											
												<a href="/WEBHT/cc/gestioneCategorie.do" title="Gestione categorie">Gestione categorie</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_creazione_categorie">
									
										
											
											
											
												<a href="/WEBHT/cc/creazioneCategorie.do" title="Creazione categorie">Creazione categorie</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
										<span>Conto deposito</span>
												
								</li>
								
								
						  				
						  					<li>
							  					<a href="/WEBHT/cd/contoDepositoVincolaRiepilogo.do" class="terzo-livello" title="Vincola">Vincola</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/cd/contoDepositoITuoiVincoli.do" class="terzo-livello" title="I tuoi vincoli">I tuoi vincoli</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/cd/listaContiAppoggio.do" class="terzo-livello" title="Conti di appoggio">Conti di appoggio</a>
						  					</li>
						  				
					  			
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_1" class="pagamenti">
						<a href="#">
							<strong>PAGAMENTI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_ultime_disposizioni">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni">Ultime disposizioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_beneficiari">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/listaBeneficiari.do" title="Gestione beneficiari">Gestione beneficiari</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario">Bonifico ordinario</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoDetrazione.do" title="Bonifico per detrazioni">Bonifico per detrazioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/trasferimentoConti.do" title="Trasferimento tra conti">Trasferimento tra conti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ricarica_cellulare">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricarica telefonica">Ricarica telefonica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24 hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24.do" title="Pagamento F24">Pagamento F24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettini_postali">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bollettiniPostali.do" title="Bollettino Postale">Bollettino Postale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_mav">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/mav.do" title="Bollettino MAV">Bollettino MAV</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_rav">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/rav.do" title="Bollettino RAV">Bollettino RAV</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_coord_iban">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/coordinateIban.do" title="Coordinate IBAN">Coordinate IBAN</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_utenze">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bolletta.do" title="Utenze">Utenze</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/buoniInps.do" title="Richiesta Voucher Inps">Richiesta Voucher Inps</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_domiciliazioni">
									
										
											
											
											
												<a href="/WEBHT/cc/delegheRid.do" title="Domiciliazioni">Domiciliazioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_assegni">
									
										
											
											
											
												<a href="/WEBHT/cc/statoAssegni.do" title="Assegni">Assegni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_accredito_stipendio hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/cc/accreditoStipendio.do" title="Accredito stipendio">Accredito stipendio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ricarica_mediaset">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ricaricaMediaset.do" title="Mediaset Premium">Mediaset Premium</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bolloAuto.do" title="Bollo Auto">Bollo Auto</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_freccia">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/freccia.do" title="Bollettino Freccia">Bollettino Freccia</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_tasse_universita">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/tasseUniversita.do" title="Tasse università">Tasse università</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico_ripetitivo">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoContinuativoCompilazione.do" title="Bonifico ripetitivo">Bonifico ripetitivo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_lista_bonifici_ripetitivi">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoContinuativoLista.do" title="Lista bonifici ripetitivi">Lista bonifici ripetitivi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cbill">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/cbill.do" title="CBILL - pagoPA">CBILL - pagoPA</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cbill hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/pagamenti/cbillListaPagamenti.do" title="Equitalia - Pagamenti">Equitalia - Pagamenti</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_2" class="carte">
						<a href="#">
							<strong>CARTE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_riepilogo">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/riepilogoCartaConto.do" title="Le mie carte">Le mie carte</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_movimenti">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/movimenti.do" title="Movimenti">Movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_ricarica">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta">Ricarica Carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_scarica">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/scaricaCarta.do" title="Scarica Carta">Scarica Carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_autoricarica">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/autoricarica.do" title="Ricarica automatica">Ricarica automatica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambio_pin">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/cambioPinCarta.do" title="Cambio PIN carta">Cambio PIN carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pannello_controllo">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/pannelloControllo.do" title="Pannello controllo">Pannello controllo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_layout_bancomat hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/cartaDaPersonalizzareLista.do" title="Layout bancomat">Layout bancomat</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_portale_carta_si hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/cartaSi.do" title="Portale CartaSi">Portale CartaSi</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_3" class="alert hidden-xs">
						<a href="#">
							<strong>ALERT</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/sm/riepilogo.do" title="Pannello Alert">Pannello Alert</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico">
									
										
											
											
											
												<a href="/WEBHT/sm/bonifici.do" title="Info bonifico">Info bonifico</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_finanziamenti">
									
										
											
											
											
												<a href="/WEBHT/sm/ricarica.do" title="Info ricarica">Info ricarica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_carte">
									
										
											
											
											
												<a href="/WEBHT/sm/carte.do" title="Info carte">Info carte</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_conto">
									
										
											
											
											
												<a href="/WEBHT/sm/conto.do" title="Info conto">Info conto</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_dossier">
									
										
											
											
											
												<a href="/WEBHT/sm/dossier.do" title="Info dossier">Info dossier</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_titoli">
									
										
											
											
											
												<a href="/WEBHT/sm/titoli.do" title="Info titoli">Info titoli</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_i_tuoi_fondi">
									
										
											
											
											
												<a href="/WEBHT/sm/fondi.do" title="Info fondi">Info fondi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambi">
									
										
											
											
											
												<a href="/WEBHT/sm/indiciCambi.do" title="Cambi e indici">Cambi e indici</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_recedi">
									
										
											
											
											
												<a href="/WEBHT/sm/recedi.do" title="Recedi">Recedi</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_4" class="posta_personale">
						<a href="#">
							<strong>POSTA PERSONALE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="posta_personale">
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/nuoviDocumenti.do" title="Posta in arrivo">Posta in arrivo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_posta hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/vediAllarmiRapporti.do" title="Info posta">Info posta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_archivio">
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/archivio.do" title="Archivio">Archivio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_complessiva hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/richieste.do" title="Contratti e Proposte">Contratti e Proposte</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_5" class="investimenti">
						<a href="#">
							<strong>INVESTIMENTI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_news hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/news.do" title="Situazione">Situazione</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_titoli hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/titoliPreferiti.do" title="Titoli preferiti">Titoli preferiti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_il_tuo_portafoglio">
									
										
											
											
											
												<a href="/WEBHT/investimenti/titoliDossier.do" title="Il tuo portafoglio">Il tuo portafoglio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_ordini hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/ordiniMovimenti.do" title="Ordini e movimenti">Ordini e movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_portafoglio_simulato hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/portafoglioSimulato.do" title="Portafoglio simulato">Portafoglio simulato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_questionario_mifid hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/mifid.do" title="Questionario Mifid">Questionario Mifid</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_linea_di_trading hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/aperturaTol.do" title="Linea di Trading">Linea di Trading</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_analisi_tecnica hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/analisiTecnica.do" title="Analisi">Analisi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_indici hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/indici.do" title="Indici">Indici</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_fiscale hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/posizioneFiscale.do" title="Posizione fiscale">Posizione fiscale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_patrimoniale">
									
										
											
											
											
												<a href="/WEBHT/cc/posizionePatrimoniale.do" title="Posizione patrimoniale">Posizione patrimoniale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambi hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/cambiForm.do" title="Cambi">Cambi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
										<span>Fondi</span>
												
								</li>
								
								
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiRicerca.do" class="terzo-livello" title="Ricerca e analisi">Ricerca e analisi</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiOrdiniElenco.do" class="terzo-livello" title="Ordini">Ordini</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiPreferitiElenco.do" class="terzo-livello" title="Fondi preferiti">Fondi preferiti</a>
						  					</li>
						  				
					  			
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_6" class="servizi_per_te">
						<a href="#">
							<strong>SERVIZI PER TE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_il_tuo_profilo">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo">Il tuo profilo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_rapporti_predefiniti">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/rapportiPredefiniti.do" title="Rapporti in primo piano">Rapporti in primo piano</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_contatti">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti">Gestione contatti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_complessiva">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/ilMioCalendario.do" title="Il mio calendario">Il mio calendario</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/richiestaAppuntamentoCompilazione.do" title="Richiedi appuntamento">Richiedi appuntamento</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_apri_dossier_titoli hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/investimenti/dossierApri.do" title="Apri Dossier Titoli">Apri Dossier Titoli</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/cartaConto/youCardApri.do" title="Richiedi la YouCard">Richiedi la YouCard</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_news">
									
										
											
											
											
												<a href="/WEBHT/news/elenco.do" title="News">News</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/scaricoCertificato.do" title="Scarico certificato">Scarico certificato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/sicurezzaInfo.do" title="Sicurezza YouWeb">Sicurezza YouWeb</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="">
									
										
											
											
											
												<a href="/WEBHT/info/contattaci.do" title="Contattaci">Contattaci</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
											
											
												<a href="#" title="YouShop" onclick="javascript:OpenWindow('/WEBHT/youshop/login.do','_blank','');">YouShop</a>
											
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs">
									
										
											
											
												<a href="#" title="YouWin" onclick="javascript:OpenWindow(getPathContext() + '/serviziPerTe/youWin.do','_blank','');">YouWin</a>
											
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
			</ul>
			<div style="margin-left: 10px; margin-right: 10px; margin-top: 60px;"> 
				<hr class="hr-menu">
			</div>
			<ul class="nav nav-stacked">
				<li class="logout" style="margin-bottom: 5px;">
					<a href="#" id="frmLogout" class="" title="Esci" onclick="$('form#logout').submit(); return false;">
						<strong>Esci</strong>
					</a>
					<hr>
				</li>
			</ul>
			
			<!-- content area -->
			<div class="col-xs-12 col-sm-8 col-md-9 content"></div>
		</div>
		<form action="/WEBHT/logout.do" name="frmLogout" id="logout" method="post" target="_top">
			<div style="display: none">
				<input type="hidden" name="logoutExitPage" value="https://youwebcard.bancopopolare.it/logout.html">
				<input type="hidden" name="logoutKey" value="QzjnMNJDzdRY5bHA">
			</div>
		</form>
		<script>
			function apriMenuResponsive(item){
				$('ul.nav > li').each(function(){
					if($(this).attr('id') == $(item).attr('id')){
						$(item).find('ul.menu-child').toggle( function(){
						var newHeight = $('.sidebar-menu').height();
						$('.sidebar-container').css('min-height', newHeight);
						
						});
					}else{
						$(this).find('ul.menu-child').hide('slow');
					}
				})

			}
		</script>

	</div>

						</div>
					</div>
		        </div>