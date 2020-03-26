					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							11/04/2017	
						</div>
					</div>
					
					
					





<script type="text/javascript">
<!--
$(document).ready(function() { 
	$('.datepicker').datepicker({
		minDate: new Date(-62170160400000),
		maxDate: new Date(1501884000000),
		buttonImage: '/HT/fe/img/calendar.png',
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



<form id="situazionePrestitiMutuiFormPaginazione" method="post" action="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do">
	<input type="hidden" name="recordPartenza" value="0" />
	<input type="hidden" name="recordFine" value="24" />
	<input type="hidden" name="paginazione" value="paginazione" />
</form>

	
		

	
	
	<script>
		$(document).ready(function(e) {
		  	if (isMobile()) {
				$("#tableListaPreAmmortamento").cardBoxTable({
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
	
	



<form id="situazionePrestitiMutuiForm" method="post" action="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do">
	<div class="section clearfix">	
		


  







<div class="selezioneCC"> 
	
		
	    	
	
	<h3 class="titleSection">	
		








		
			Seleziona Finanziamento
		
		
		
		


	</h3>
	<div class="selezioneCC tabellaSelezioneCC selezioneFinanziamenti">
	<div class="CCselezionato clearfix">						
		<div class="col-sm-6 col-xs-12">
			<span class="col-xs-5 clear-padding" id="labelIntestatario"> Intestato a: </span>
			<span class="col-xs-7 clear-padding" id="intestazione"></span>
			<span class="col-xs-5 clear-padding bold" id="conto"> </span>
			<span class="col-xs-7 clear-padding"><b>num.</b><span id="numero"></span></span>		
		</div>
		<div class="col-sm-6 col-xs-12">
			<span class="col-xs-5 clear-padding" >Importo accordato: </span>
			<span class="col-xs-7 clear-padding" id="disponibile"><strong> &nbsp;</strong></span>
			<span class="col-xs-5 clear-padding" id="labelFiliale">Rate residue: </span>
			<span class="col-xs-7 clear-padding" id="agenzia"></span>					
		</div>	
		
		<a id="selezionaCC" title="selezione rapporto" href="javascript:void(0);" class="btnSelezioneCC" role="button" aria-pressed="false">
			<img src="/HT/fe/img/ico-select.png" id="btnSelezioneRapporto" />
		</a>
		
	</div>
	<div class="table-responsive tabSelezioneCC" style="display: block;">
		<table class="table table-striped dataTable no-footer" id="DataTables_Table_0" role="grid">
		    <thead>
			   <tr class="hover">
					<th style="width: 0px;" class="hidden" headers="tipoRapporto">&nbsp;</th>
					<th style="width: 0px;">Tipo</th>
			        <th style="width: 0px;" headers="ccRapporto">Finanziamento n.</th>
			        <th style="width: 0px;" headers="intestazioneRapporto">Intestazione</th>        
			        <th style="width: 0px;" headers="filialeRapporto" class="hidden-xs">Rate residue</th>        
			        <th style="width: 0px;" headers="saldoDisponibile" class="hidden-xs">Importo accordato</th> 
			        <th style="width: 0px;" headers="divisaSaldoDisponibile" class="hidden">&nbsp;</th>       
				</tr>
			</thead>
		    <tbody>
				
					<tr>
				      	<td  class="hidden"><input type="radio" name="numeroDelibera" value="903304507" checked="checked" id="numeroDelibera" /></td>  			         
			         	<td headers="tipoRapporto">MUTUO IMPRESA RETAIL     </td> 
				      	<td headers="ccRapporto">903304507</td> 
			         	<td headers="intestazioneRapporto">
				         	Np Card S.r.l.-unipersonale
			         	</td>
			         	<td class="oRight hidden-xs" headers="filialeRapporto" >4</td>
			         	<td class="oRight hidden-xs" headers="saldoDisponibile">25.000,00</td>
			         	<td class="hidden hidden-xs" headers="divisaSaldoDisponibile">EUR</td>
					</tr>		
				
					<tr>
				      	<td  class="hidden"><input type="radio" name="numeroDelibera" value="900005836" id="numeroDelibera" /></td>  			         
			         	<td headers="tipoRapporto">MUTUO DIPENDENTI         </td> 
				      	<td headers="ccRapporto">900005836</td> 
			         	<td headers="intestazioneRapporto">
				         	Castagnedi Luca Grego Sonia
			         	</td>
			         	<td class="oRight hidden-xs" headers="filialeRapporto" >62</td>
			         	<td class="oRight hidden-xs" headers="saldoDisponibile">103.000,00</td>
			         	<td class="hidden hidden-xs" headers="divisaSaldoDisponibile">EUR</td>
					</tr>		
							
		    </tbody> 
		</table></div>
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

	<div class="" />
	<div class="section clearfix" id="finanz_ricerca">
		<div class="row">
				<div class="col-xs-12">
					<div class="innerWrapperTab">
						<ul>
							<li><a href="#" title="Dettagli" id="dett_fin" role="button" class="dett_fin">Dettagli</a></li>
							<li><a href="#" title="Ammortamento" id="amm_fin" role="button" class="amm_fin ">Ammortamento</a></li>
							<li class="on"> <a href="#" title="Preammortamento" role="button" id="preamm_fin" class="preamm_fin ">Preammortamento</a></li>
						</ul>
					</div>
				</div> 
			</div> 
			<h3 class="titleSection">
				Parametri di ricerca					
			</h3>
		


<div id="ric">
	<div class="form-group clearfix">
		<div class="hide">
			<input type="radio" name="tipoVisualizzazione" value="1" id="radio1" />
			<input type="radio" name="tipoVisualizzazione" value="2" id="radio2" />
			<input type="radio" name="tipoVisualizzazione" value="3" checked="checked" id="radio3" />
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
					<select name="tipoRataRicerca" id="tipoRataRicerca" class="form-control">
						<option value="tutte" selected="selected">Tutte</option>
						<option value="P">Pagata</option>
						<option value="S">Scaduta</option>
						<option value="N">Da Pagare</option>		
						<option value="Z">Parzialmente pagata</option>
					</select>
				</div>
			</div>

			<div class="col-xs-12 col-sm-5 col-sm-offset-1">
				<div class="floatl form-field-input">
					<label class="control-label" for="dataInizio"> Periodo dal </label>
					<div class="form-field">
						<input type="text" name="dataInizioRicerca" maxlength="10" size="10" value="13/10/2016" id="dataInizioRicerca" class="datepicker form-control  wauto" />
					</div>
				</div>
				<div class="margin-left20 floatl form-field-input">
					<label class="control-label" for="dataFine"> al </label>
					<div class="form-field">
						<input type="text" name="dataFineRicerca" maxlength="10" size="10" value="08/10/2017" id="dataFineRicerca" class="datepicker form-control wauto" />
					</div>
				</div>	
			</div>

		</div>
	</div>		
			
		</div>
	</div>
	<div class="pull-right margin-bottom20 margin-top10 " id="btn_ricerca" >
		<input type="submit" name="conferma" value="Ricerca" class="btn btn-primary" />
	</div>
	</div>
</form>	










	






	
		<div class="section clearfix">
			<h3 class="titleSection">
				
				








		
			Piani di Preammortamento
		
		
		
		


			</h3>
			<div class="selezioneCarte cardbox-background">
			<div class="table-responsive" style="display: block;">
				<table id="tableListaPreAmmortamento" class="table table-striped dataTable no-footer" role="grid">
					
						<colgroup>
							<col width="15%"/>
							<col width="15%"/>
							<col width="15%"/>
							<col width="15%"/>
							<col width="15%"/>
							<col width="25%"/>
						</colgroup>
						<thead>
							<tr>
						
					  		<th>
								Numero rata
					  		</th>
						 
					  		<th>
								Scadenza
					  		</th>
						 
					  		<th class="oRight">
								Quota interessi
					  		</th>
						 
					  		<th class="oRight">
								Importo
					  		</th>
						 
					  		<th class="oRight">
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
											3
										</td>
									
										<td class=" oCenter ">
											05/11/2016
										</td>
									
										<td class=" oRight ">
											66,67
										</td>
									
										<td class=" oRight ">
											66,67
										</td>
									
										<td class=" oRight ">
											0,00
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
											05/12/2016
										</td>
									
										<td class=" oRight ">
											66,67
										</td>
									
										<td class=" oRight ">
											66,67
										</td>
									
										<td class=" oRight ">
											0,00
										</td>
									
										<td class=" oLeft ">
											Da Pagare
										</td>
									
								</tr>
							
							
							
						</tbody>
					
				</table>
			</div>
		</div>
		</div>
	
	<div class="dataTables_paginate paging_simple_numbers">
		<span>
		
		

		
		</span>
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