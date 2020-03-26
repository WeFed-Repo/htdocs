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
	<input type="hidden" name="recordPartenza" value="">
	<input type="hidden" name="recordFine" value="">
	<input type="hidden" name="paginazione" value="paginazione">
</form>


	
	
	
	
		
		




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
			   <tr class="hover" role="row"><th style="width: 0px;" class="hidden sorting_asc" headers="tipoRapporto" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th style="width: 0px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tipo: ordinamento crescente">Tipo</th><th style="width: 0px;" headers="ccRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Finanziamento n.: ordinamento crescente">Finanziamento n.</th><th style="width: 0px;" headers="intestazioneRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th style="width: 0px;" headers="filialeRapporto" class="hidden-xs sorting oRight" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rate residue: ordinamento crescente">Rate residue</th><th style="width: 0px;" headers="saldoDisponibile" class="hidden-xs sorting oRight" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Importo accordato: ordinamento crescente">Importo accordato</th><th style="width: 0px;" headers="divisaSaldoDisponibile" class="hidden sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
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

	<div class="hide">
	<div class="section clearfix" id="finanz_ricerca">
		<div class="row">
			

			<div class="context-buttons pull-right">
				<a href="#" title="dettaglio" role="button" id="dett_fin" class="dett_fin disabled">&nbsp;</a>
				<a href="#" title="ammortamento" role="button" id="amm_fin" class="amm_fin ">&nbsp;</a>
				<a href="#" title="preammortamento" id="preamm_fin" role="button" class="preamm_fin ">&nbsp;</a>
			</div> 
		
			<h3 class="titleSection">
				








		
		
		
			Parametri di ricerca					
		
		

			
			</h3>
		</div>
		<div id="ric">
			<div class="form-group clearfix">
				<div class="hide">
					<input type="radio" name="tipoVisualizzazione" value="1" checked="checked" id="radio1">
				    
				    
						<input type="radio" name="tipoVisualizzazione" value="2" id="radio2">
						<input type="radio" name="tipoVisualizzazione" value="3" id="radio3">
				    			    
				    
				    
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="form-field-input">
							<label for="numeroRateRicerca" class="control-label">Numero Rate</label>
							<div class="form-field">
							<select name="numeroRateRicerca" id="numeroRateRicerca" class="form-control" disabled="disabled"><option value="tutte" selected="selected">Tutte</option>
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
							<select name="tipoRataRicerca" id="tipoRataRicerca" class="form-control" disabled="disabled"><option value="tutte">Tutte</option>
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
								<input type="text" name="dataInizioRicerc" maxlength="10" size="10" value="17/09/2016" id="dataInizioRicerc" class="datepicker form-control  wauto" disabled=""><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario" style="opacity: 0.5; cursor: default;">
							</div>
						</div>
						<div class="margin-left20 floatl form-field-input">
							<label class="control-label" for="dataFine"> al </label>
							<div class="form-field">
								<input type="text" name="dataFineRicerc" maxlength="10" size="10" value="12/09/2017" id="dataFineRicerc" class="datepicker form-control wauto" disabled=""><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario" style="opacity: 0.5; cursor: default;">
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



	



<!-- NUOVI TAB-->
<div class="section clearfix outerWrapperTab">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">	
				<ul>
					<li class="on"><a href="#" title="Dettagli" id="dett_fin" role="button" class="dett_fin">Dettagli</a></li>
					<li><a href="#" title="Ammortamento" id="amm_fin" role="button" class="amm_fin ">Ammortamento</a></li>
					<li><a href="#" title="Preammortamento" role="button" id="preamm_fin" class="preamm_fin ">Preammortamento</a></li>
				</ul>
			</div>
		</div> 
	</div> 
	<div class="row-height">
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault inside inside-full-height">
				<h3>
				Conto di appoggio
		</h3>
				<div>
					<div class="row">
						<label>
							Conto di addebito
						</label>
						<span>
							000000000000

						</span>
					</div>
					<div class="row">
						<label>
							Filiale
						</label>
						<span>
							 - 0000
						</span>
					</div>
					<div class="row">
						<label>
							Intestato a
						</label>
						<span>
							NP CARD S.R.L.-UNIPERSONALE                                 
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault  importiBox inside inside-full-height">
				<h3>
					
					








		
			Piani Ammortamento
		
		
		
		


				</h3>
				<div>
					
					<div class="row">
						<label>
							Periodo
						</label>
						<span>
							Mensile
						</span>
					</div>
					<div class="row">
						<label>
							Numero rate
						</label>
						<span>
							8
						</span>
					</div>
					<div class="row">
						<label>
							Rate residue
						</label>
						<span>
							5
						</span>
					</div>
					<div class="row">
						<label>
							Numero Delibera
						</label>
						<span>
							903304507
						</span>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .row -->
	<div class="row-height margin-bottom10">
		<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
			<div class="boxDefault txt-align-right-xs inside inside-full-height">
				<h3>
					
					








		
			Riferimenti Temporali
		
		
		
		


				</h3>
				<div>
					<div class="row">
						<label>
							Data stipula
						</label>
						<span>
							30/11/0002
						</span>
					</div>
					<div class="row">
						<label>
							Scadenza prossima rata
						</label>
						<span>
							05/04/2017
						</span>
					</div>
					<div class="row">
						<label>
							Data erogazione
						</label>
						<span>
							30/11/0002
						</span>
					</div>
					<div class="row">
						<label>
							Scadenza ultima rata
						</label>
						<span>
							05/08/2017
						</span>
					</div>
					<div class="row">
						<label>
							Data decorrenza tasso
						</label>
						<span>
							06/12/2016
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12 col-height">
			<div class="boxDefault importiBox inside inside-full-height">
			<h3>
				
				








		
			Importo e Condizioni
		
		
		
		


			</h3>
				<div>
					<div class="row">
						<label>
							Importo accordato
						</label>
						<span>
							0,00
						</span>
					</div>
					<div class="row">
						<label>
							Spese
						</label>
						<span>
							2,75
						</span>
					</div>
					<div class="row">
						<label>
							Debito residuo
						</label>
						<span>
							25.441,89
						</span>
					</div>
					<div class="row">
						<label>
							Importo di mora
						</label>
						<span>
							0,00
						</span>
					</div>
					<div class="row">
						<label>
							Tasso in vigore
						</label>
						<span>
							3,200%
						</span>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row-height">
		
			<div class="col-sm-6 col-sm-offset-3 col-xs-12 col-height margin-bottom10">
				<div class="boxDefault txt-align-right-xs inside inside-full-height">
					<h3>
						
						








		
			Piano di preammortamento
		
		
		
		


					</h3>
					<div>
						<div class="row">
							<label class="control-label">
								Periodo
							</label>
							<span class="resume">
								Mensile
							</span>
						</div>
						<div class="row">
							<label class="control-label">
								Numero rate
							</label>
							<span class="resume">
								4
							</span>
						</div>	
						<div class="row">
							<label class="control-label">
								Rate residue
							</label>
							<span class="resume">
								0
							</span>
						</div>
					</div>
				</div>
			</div>
		
		</div><!--  .row -->
	</div><!-- .section -->


	


 
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
						
				