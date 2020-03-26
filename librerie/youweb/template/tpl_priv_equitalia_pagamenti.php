					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					



<script>
$(document).ready(function(e) {
  	if (isMobile()) 
		$("#tableListapagamenti").cardBoxTable({
			colTitleIdx: -1,
			colActionIdx: 6,
			defaultValue: ["","","N.D.","N.D.","",""],
			show: function() {
				$('.section').addClass('cardbox-background');
				$(this).find('input[type=button]').removeClass('btn-primary');
			},
		});
});
</script>
<script type="text/javascript">
	function impostaPagamento(identificativoUtenzaDaPagare, importoBolletta){
		$('#precompilato').val('true');
		$('#codiceSia').val('AJZ8Z');
		$('#identificativoBolletta').val(identificativoUtenzaDaPagare);
		$('#importoBolletta').val(importoBolletta);
		$('#formCBill').submit();
	}
</script>

<div class="riquadro clearfix">


	
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Equitalia - Pagamenti</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			Grazie a questa funzionalità potrai verificare se hai dei pagamenti in sospeso con Equitalia. Se sono presenti bollette potrai procedere ad inviare il pagamento che verrà effettuato tramite CBILL.
		</div>



			</div>
		
	
</div>
	
	
	








	


	






	
	
	
		<div class="section clearfix">
			<h3 class="titleSection">
				Azienda
			</h3>

			<div class="selezioneCC tabellaSelezioneCC">
				<div class="CCselezionato clearfix">

					<div class="col-sm-5 col-xs-12">
						<span class="col-xs-4" id="labelDescrizioneAzienda"> 
							Descrizione Azienda: 
						</span> 
						<span class="col-xs-6" id="descrizioneAzienda">
							<b>EQUITALIA SPA</b> 
						</span>
					</div>

					<div class="col-sm-5 col-xs-12">
						<span class="col-xs-4" id="labelDescrizioneAzienda"> 
							Codice Azienda: 
						</span> 
						<span class="col-xs-6" id="descrizioneAzienda">
							<b>AJZ8Z</b> 
						</span>
					</div>

				</div>
			</div>
		</div>

	<div class="section clearfix">
		<div class="table-responsive">
			<table id="tableListapagamenti" class="table table-striped no-footer">
				<thead>
					<tr>
						<th>Identificativo Utenza da Pagare</th>
						<th>Numero Bolletta</th>
						<th>Info Utenza</th>
						<th>Periodo riferimento</th>
						<th>Importo Bolletta</th>
						
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					
	   					<tr>
	   						<td class="oCenter" colspan="7" data-no-record="true"><b>Non sono stati trovati pagamenti per l'azienda selezionata.</b></td>
	   					</tr>
					
					
				</tbody>
			</table>
		</div>
	</div>
</div>