					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					




<script type="text/javascript">
	$(document).ready(function()
	{
		$('.datepicker').datepicker({ minDate: '-1Y', buttonImage: '/HT/fe/img/calendar.png', maxDate: '+1Y' });
		var radio = $('input[name=codContoCorrente]:checked');
		$(radio).trigger('click');
		if($('#intervalloPeriodo').is(':checked')){disabilitaUltimiMovimenti();}
		if($('#intervalloUltimiMovimenti').is(':checked')){disabilitaPeriodo();}
		$('.btnSelezioneClose').click(function(){
				$("#formRisultati").show();
				$("#formRicerca").hide();
				$("#submitRicerca").hide();
		})
		$("#btnRicerca").click(function(){
				$("#formRisultati").hide();
				$("#formRicerca").show();
				$("#submitRicerca").show();
		})
	});
	function cambioCarta(values)
	{
		var boolVal = values.split(',');
		var cartaDebito = boolVal[0];
		var k3 = boolVal[1];
		var k2 = boolVal[2];
		var kBusiness = boolVal[3];
		if (cartaDebito=="true")
		{
			$('#trCartaDebito').show();
			$('#tipoMovimentiCartaDebito').prop('disabled',false);
			$('#tipoMovimentiCartaDebito').show();
			$('#lbltipoMovimentiCartaDebito').show();
			
				$('#trCartaConto').hide();
				$('#tipoOperazioneK2').prop('disabled', true);
				$('#tipoOperazioneK2').hide();
				$('#tipoOperazioneK3').prop('disabled', true);
				$('#tipoOperazioneK3').hide();
				$('#tdLabelCartaK3').hide();
				$('#tipoAddebitoK3').prop('disabled', true);
				$('#tipoAddebitoK3').hide();
				$('#tipoAddebitoK3Biz').prop('disabled', true);
				$('#tipoAddebitoK3Biz').hide();
				$('#trTesto').hide();
				$('#testo').prop('disabled', true);
			
		}
		if (k3=="true" || k2=="true" || kBusiness=="true")
		{
			
				$('#trCartaDebito').hide();
				$('#tipoMovimentiCartaDebito').prop('disabled',true);
				$('#tipoMovimentiCartaDebito').hide();
				$('#lbltipoMovimentiCartaDebito').hide();
			
			$('#trCartaConto').show();
			$('#trTesto').show();
			$('#testo').prop('disabled', false);
		}
		if(kBusiness=="true")
		{
			$('#tdLabelCartaK3').hide();
			$('#tdValueCartaK3').hide();
			$('#tdLabelCartaK3Biz').show();
			$('#tdValueCartaK3Biz').show();
			$('#tipoAddebitoK3Biz').prop('disabled', false);
			$('#tipoAddebitoK3Biz').show();
			$('#trTesto').addClass('clear-padding');
		}
		if (k3=="true")
		{
			$('#tdLabelCartaK3').show();
			$('#tdValueCartaK3').show();
			$('#tdLabelCartaK3Biz').hide();
			
			$('#tipoOperazioneK3').prop('disabled', false);
			$('#tipoOperazioneK3').show();
			$('#tipoAddebitoK3').prop('disabled', false);
			$('#tipoAddebitoK3').show();
			$('#tdValueCartaK3Biz').hide();
			$('#tipoAddebitoK3Biz').prop('disabled', true);
			$('#tipoAddebitoK3Biz').hide();
			var n = $('.form-control').length;
			if (n==6) {
				$('#trTesto').addClass('clear-padding-xs clear-padding-right');
			}
			else{
				$('#trTesto').addClass('clear-padding');
			}
			
		}
		if (k2=="true")
		{
			
				$('#tdLabelCartaK3').hide();
				$('#tdValueCartaK3').hide();
				$('#tdLabelCartaK3Biz').hide();
				$('#tdValueCartaK3Biz').hide();
				$('#tipoAddebitoK3Biz').prop('disabled', true);
				$('#tipoAddebitoK3Biz').hide();
				$('#tipoOperazioneK3').prop('disabled', true);
				$('#tipoOperazioneK3').hide();
				$('#tipoAddebitoK3').prop('disabled', true);
				$('#tipoAddebitoK3').hide();
			
			$('#tipoOperazioneK2').prop('disabled', false);
			$('#tipoOperazioneK2').show();
			$('#trTesto').addClass('clear-padding-xs clear-padding-right');
		}
	}
	function disabilitaUltimiMovimenti() 
	{
		$('#dataInizio').prop('disabled',false);
		$('#dataInizio,#dataFine').next('.ui-datepicker-trigger').css({
			'cursor':'pointer',
			'opacity':'1'
		});
		 $('#dataInizio').datepicker('enable');
         $('#dataFine').datepicker('enable');
		$('#dataFine').prop('disabled',false);
		$('#ultimiMovimenti').prop('disabled',true);
	}
	function disabilitaPeriodo() 
	{
		
		$('#dataInizio').prop('disabled',true);
		$('#dataFine').prop('disabled',true);
		$('#dataInizio,#dataFine').next('.ui-datepicker-trigger').css({
			'cursor':'not-allowed',
			'opacity':'0.5'
		});
		$('#dataInizio').datepicker('disable');
         $('#dataFine').datepicker('disable');
		$('#ultimiMovimenti').prop('disabled',false);
	}
</script>
<style type="text/css">
	.divForm select 
	{
		width: 100px;
	}
</style>


 


	




<div class="riquadro clearfix">














<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag movimentiCarte">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Movimenti carta</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>











	


	<form id="formMovimentiCarte" method="post" action="/WEBHT/cartaConto/movimenti.do" class="border-bottom"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
		
		<div class="section clearfix">
			
			
			







 


	



<script type="text/javascript">
	
function movimentiCarteselectionInit(submitOnClick, search, pagination) {
	var contoSelezionato;

	if ($('.tabSelezioneCC table').length > 0) {
		$('.tabSelezioneCC').hide();
		$('.tabSelezioneCC table').dataTable({
			"paging" : pagination,
			"ordering" : true,
			"info" : false,
			"searching" : false,
			"pagingType" : "simple_numbers",
			"lengthMenu" : [ [ 8, 24, 32, -1 ], [ 8, 24, 32, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});

		$('.btnSelezioneCC').click(function() {
			var that = $(this);
			if (!that.hasClass('open'))
				$('.tabSelezioneCC').slideDown(200);
			else
				$('.tabSelezioneCC').slideUp(300);

			that.toggleClass('open');
		});

		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() {
			$(this).addClass('hover');
		});
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() {
			$(this).removeClass('hover');
		});

		// se non presente la selezione con submit al click
		if (!submitOnClick) {
			$('.tabSelezioneCC table tbody').on(
				'click',
				'tr',
				function() {
	
					var ctx = $(this).parentsUntil('.selezioneCC').parent();
					$('input[type="radio"]', $(this).parent()).removeAttr('checked');
					$('input[type="radio"]', this).attr("checked","checked");
					contoSelezionato = initContoSelezionato(this);
					popolaSelezioneCC(contoSelezionato, ctx);
					cambioCarta($('input[id="par"]', $(this)).val());
					$('.btnSelezioneCC', ctx).removeClass('open');
					$('.tabSelezioneCC', ctx).slideUp(300);
			});
		} else {
			//riga selezionata
			var tr = $("input[name='codContoCorrente']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			popolaSelezioneCC(contoSelezionato);

			$('.tabSelezioneCC table tbody').on('click','tr',
				function() {
					$('input[type="radio"]', $(this).parent()).removeAttr('checked');
					$('input[type="radio"]', this).attr("checked","checked");
					$('input[type="radio"]', this).closest("form").submit();
				});
		}
	}
}
	
	
	$(document).ready(function(){

	var submitOnClick = false;
	var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	
	//se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
		var tr = $("input[name='codContoCorrente']:checked").closest('tr');		
		//popolo con i dati nella riga
		contoSelezionato = initContoSelezionato(tr);
		popolaSelezioneCC(contoSelezionato);
		
	
		
		    submitOnClick = true;
		    var par = $("input[name='codContoCorrente']:checked").attr('class');
		    cambioCarta(par);
		
		
		 
	
		
			movimentiCarteselectionInit(submitOnClick, false, false);
		
		
	
	
		});
</script>


<h3 class="titleSection">
	
	








		
			Seleziona la carta
		
		
		
		


</h3>

<div class="selezioneCC tabellaSelezioneCC"> 
	<div class="CCselezionato clearfix">
		
					

		<div class="col-xs-12">
			<span class="col-sm-2 col-xs-4 clear-paddingImportant" id="labelIntestatario">
				Intestato a:
			</span>
			<span id="intestazione" class="col-xs-6 clear-paddingImportant">
			      		Cognome Nome
			      	</span> 
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Tipo carta
				</span>
				<span id="conto" class="col-xs-6 clear-paddingImportant bold">
		      			YouCard
			      	</span>
				<span class="col-xs-4 clear-paddingImportant">
					Filiale 
				</span> 
			    <span id="agenzia" class="col-xs-6 clear-paddingImportant bold">
		         		MILANO&nbsp;-&nbsp;
		         		
		         		
		         			2070
		         		
	         			
	         			
		          	</span>
			</div>
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Numero
				</span>
				<span id="numero" class="col-xs-6 clear-paddingImportant">
			      		*0000
			      	</span>
			</div>
		</div>

		
			<a href="javascript:void(0);" class="btnSelezioneCC">
				<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona">
			</a>
		
	</div>
	<div class="table-responsive tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
	
		
			<thead>
				<tr role="row"><th class="hidden sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;">&nbsp;</th><th headers="tipoRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo carta
					: ordinamento crescente" style="width: 0px;">Tipo carta
					</th><th headers="ccRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero
					: ordinamento crescente" style="width: 0px;">Numero
					</th><th headers="filialeRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale
					: ordinamento crescente" style="width: 0px;">Filiale
					</th><th headers="intestazioneRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione
					: ordinamento crescente" style="width: 0px;">Intestazione
					</th></tr>
			</thead>
		
		<tbody>

			
				
			
				
			
		<tr role="row" class="odd">
				
					
						
							<td class="hidden sorting_1" style="text-align: center">
								<input type="radio" name="codContoCorrente" value="001|0898|089800911819" checked="checked" class="false,true,false">
								
							</td>
						
						
					

			      	<td headers="tipoRapporto" style="text-align: left;">
		      			YouCard
			      	</td>
			      	<td headers="ccRapporto" style="text-align: center;">
			      		*0000
			      	</td>
			      	<td headers="filialeRapporto" style="text-align: center;">
		         		MILANO&nbsp;-&nbsp;
		         		
		         		
		         			0000
		         		
	         			
	         			
		          	</td>
			      	<td headers="intestazioneRapporto" style="text-align: center">
			      		Cognome Nome
			      	</td>
				</tr><tr role="row" class="even">
				
					
						
							<td class="hidden sorting_1" style="text-align: center">
								<input type="radio" name="codContoCorrente" value="141|2070|000002636868" class="true,false,false">
								
							</td>
						
						
					

			      	<td headers="tipoRapporto" style="text-align: left;">
		      			Bancomat
			      	</td>
			      	<td headers="ccRapporto" style="text-align: center;">
			      		*0000
			      	</td>
			      	<td headers="filialeRapporto" style="text-align: center;">
		         		MILANO&nbsp;-&nbsp;
		         		
		         		
	         			
	         				0000
	         			
	         			
		          	</td>
			      	<td headers="intestazioneRapporto" style="text-align: center">
			      		Cognome Nome
			      	</td>
				</tr></tbody>
	</table></div>
</div>
</div>
</div>
		</div>
		<div class="section clearfix" id="formRisultati">
			<div class="context-buttons">
				<a href="#" id="btnRicerca" title="mostra parametri di ricerca" class="btnSelezioneOpen pull-right" role="button" aria-pressed="false"></a>
			</div>
			<h3 class="titleSection">
				 
				








		
			Parametri di ricerca
		
		
		
		


			</h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						Criteri: movimenti dal <b>08/02/17</b> al <b>10/03/17</b>, tipologia operazione <b>Tutte</b>, tipologia addebito <b>Tutti</b>.
					</div>
				</div>
			</div>
			
		</div>
		<div class="section clearfix" id="formRicerca">
			<div class="context-buttons">
				<a href="#" id="btnRicercaHide" title="nascondi parametri di ricerca" class="btnSelezioneClose pull-right" role="button" aria-pressed="true"> </a>
			</div>
			<h3 class="titleSection">	
				








		
		
		
			Parametri di ricerca					
		
		


			</h3>
			<div class="bs-example">
				<div class="form-group clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="col-xs-12 clearpadding margin-bottom-xs-10">
								<label style="padding-top:2px" for="intervalloPeriodo">
									<input type="radio" name="tipoIntervallo" value="periodo" checked="checked" onclick="disabilitaUltimiMovimenti();" id="intervalloPeriodo">
									Periodo
									(gg/mm/aaaa)
								</label>
							</div>
							<div class="col-xs-12 clearpadding ">
								<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
									<span class="float-xs-left">Dal </span>
									<input type="text" name="dataInizio" size="16" value="08/02/2017" id="dataInizio" class="datepicker form-control wauto hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
								</div>
								<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
									<span class="float-xs-left">Al </span>
									<input type="text" name="dataFine" size="16" value="10/03/2017" id="dataFine" class="datepicker form-control wauto hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">	
							<label style="padding-top:2px" for="intervalloUltimiMovimenti">
								<input type="radio" name="tipoIntervallo" value="ultimiGiorni" onclick="disabilitaPeriodo();" id="intervalloUltimiMovimenti">
								Ultimi movimenti
							</label>
							<select name="ultimiMovimenti" id="ultimiMovimenti" class="form-control" disabled=""><option value="7">7 giorni</option>
<option value="30" selected="selected">30 giorni</option>
<option value="90">90 giorni</option>
<option value="180">180 giorni</option>
<option value="365">1 anno</option></select>
						</div>
					</div>
					
					<div class="row">
					
						<div class="form-field-input col-xs-12 col-sm-6 margin-top-xs-10">
							<label for="movimentiCartaDebito" class="control-label" id="lbltipoMovimentiCartaDebito" style="display: none;">
								Movimenti
							</label>
							<div class="form-field">	
								<select name="tipoMovimentiCartaDebito" disabled="" id="tipoMovimentiCartaDebito" class="form-control" style="display: none;"><option value="TT" selected="selected">Complessivi</option>
<option value="BA">Bancomat</option>
<option value="MA">Maestro</option>
<option value="PB">PagoBancomat</option>
<option value="FP">FastPay</option></select>
							</div>
						</div>
					
					</div>
					
					<div class="row">
					<div class="form-field-input col-xs-12">
						
							<div id="trCartaConto" style="" class="form-field-input col-xs-12 col-sm-6 margin-top-xs-10 clear-padding">
								<label for="movimentiCartaDebito" class="control-label">
									Tipo operazione
								</label>
								<div class="form-field">
									
									
										<select name="tipoOperazione" id="tipoOperazioneK3" style="" class="form-control"><option value="" selected="selected">Tutte</option>
<option value="XA">Prelievi</option>
<option value="XB">Pagamenti</option>
<option value="XC">Ricariche</option>
<option value="XD">Scarico</option>
<option value="XZ">Altro</option></select>
									
									
								</div>
							</div>
							
								<div id="tdLabelCartaK3" style="" class="form-field-input col-xs-12 col-sm-6 margin-top-xs-10 clear-padding-right clear-padding-xs">
									<label for="movimentiCartaDebito" class="control-label">
										Tipo addebito
									</label>
									<div class="form-field" id="tdValueCartaK3" style="">
										<select name="tipoAddebito" id="tipoAddebitoK3" style="" class="form-control"><option value="" selected="selected">Tutti</option>
<option value="KP">Prepagato</option>
<option value="KC">Fine mese</option>
<option value="KD">Immediato</option></select>
									</div>
								</div>
							
							
							<div id="trTesto" style="" class="form-field-input col-xs-12 col-sm-6 margin-top-xs-10 clear-padding">
								<label class="control-label">
									Testo nella descrizione
								</label> 
								<div class="form-field-input">
									<input type="text" name="testo" size="40" value="" id="testo" class="form-control">
								</div>
							</div>	
						
					</div>
					</div>
			</div>
		</div>
	</div>
	<div class="pull-right margin-bottom10 margin-top10" id="submitRicerca" style="display:none">
		<input type="submit" name="" value="Ricerca" class="btn btn-primary">			
	</div>
	<div class="section clearfix">
		
		<div class="col-xs-12 margin-bottom10 clear-padding">
			
			<!--           OPERA          -->




<script>
$(document).ready(function(){

	
	movimentiSelectionInit(true);
	
	

});
</script>











	



<div class="SelezioneMovimenti">
	<div class="tabSelezioneMovimenti" style="display: block;">
		<div class="col-xs-12 messagePanel alert clear-padding" style="display:block">
			<h3 class="titleSection">Attenzione</h3>
			<div><p><strong>Nessun movimento presente.</strong></p></div><p></p></div>
		</div>
		
		
		<div id="CCMO_CARK3_wrapper" class="dataTables_wrapper no-footer">
			<table id="CCMO_CARK3" class="table table-striped dataTable no-footer" role="grid">
			<colgroup>
				<col width="16%">
				<col width="14%">
				<col width="40%">
				<col width="15%">
				<col width="15%">
			</colgroup>
			<thead>
				<tr class="hover" role="row"><th class="date sorting_desc" title="Data operazione" tabindex="0" aria-controls="CCMO_CARK3" rowspan="1" colspan="1" aria-sort="descending" aria-label="Data operazione: ordinamento crescente" style="width: 110px;">Data operazione</th><th class="number sorting" title="Importo €" tabindex="0" aria-controls="CCMO_CARK3" rowspan="1" colspan="1" aria-label="Importo €: ordinamento crescente" style="width: 66px;">Importo €</th><th class="text sorting" title="Descrizione" tabindex="0" aria-controls="CCMO_CARK3" rowspan="1" colspan="1" aria-label="Descrizione: ordinamento crescente" style="width: 321px;">Descrizione</th><th class="hidden-xs text sorting" title="Tipo operazione" tabindex="0" aria-controls="CCMO_CARK3" rowspan="1" colspan="1" aria-label="Tipo operazione: ordinamento crescente" style="width: 111px;">Tipo operazione</th><th class="hidden-xs text sorting" title="Tipo addebito" tabindex="0" aria-controls="CCMO_CARK3" rowspan="1" colspan="1" aria-label="Tipo addebito: ordinamento crescente" style="width: 111px;">Tipo addebito</th></tr>
			</thead>
			<tbody>
				<tr role="row" class="odd">
				<td class="oCenter sorting_1">08/05/2017</td>
				<td class="importo oRight positivo ">1660,00</td>
				<td class="oLeft break-xs">ricarica - ricarica del giorno 08/05/17 ore 06:04 con addebito del conto 000000000000</td>
				<td class="oCenter hidden-xs">Ricariche</td>
				<td class="oCenter hidden-xs">&nbsp;</td>
				</tr><tr role="row" class="even">
				<td class="oCenter sorting_1">07/05/2017</td>
				<td class="importo oRight negativo ">-1561,78</td>
				<td class="oLeft break-xs">pagamento internet - imp.pren./amazon *mktplce eu-it\\000-000-0000\00000        lux           /c.aut.000000</td>
				<td class="oCenter hidden-xs">Pagamenti</td>
				<td class="oCenter hidden-xs">Prepagato</td>
				</tr>
			</tbody>
			</table>
		</div>
		
	</div>

<!--           /OPERA           -->
		</div>
	</div>							
</form>
</div>