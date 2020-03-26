<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		07/04/2017	
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
		
				
				<div class="hidden-print hidden-xxs flag rapportiPrimoPianoModifica">&nbsp;</div>
 					<span>Modifica conto deposito<span class="hidden-xxs"> in primo piano</span></span>
	</h1>
			<div class="col-xs-12 hidden-xs hidden-print">
		<div class="contentPagina">
			Questa sezione ti da la possibilit&agrave; di scegliere quale rapporto vuoi visualizzare 
			per primo nel momento in cui accedi ad una funzionalit&agrave;. Puoi impostarne uno per ogni tipologia.
		</div>
			</div>
</div>
	
	<form id="formPuRapportiPredefiniti" method="post" action="/WEBHT/serviziPerTe/rapportiPredefinitiEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="0f566800f65e4cbf684be318f4450037"></div>
	<input type="hidden" name="tipoRapporto" value="contodep">
	<div class="section clearfix margin-bottom10">
	   	
			<h3 class="titleSection">
				Rapporto selezionato
			</h3>

<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
						COGNOME NOME 
					</span>
					<span class="col-xs-4" id="conto">
						Conto deposito:
					</span>
				    <span class="col-xs-6" id="numero">
				    	00000000	
				    </span>
					
				</div>
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-6 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">
				    	MILANO&nbsp;-&nbsp;
							
								
								
									0000
								
							
					</span>
				</div>
			
			
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
										<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|2070|207000001794">
										</td>
									
									
								
							
						

						

							<td headers="tipoRapporto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										0000
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
					</thead>
			</table></div>
		</div>
	</div>
</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
     
	 var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		
	</div>
	</form>
	
	


 
</div>
<div class="pull-right margin-bottom20"> 
	
	
	<a class="btn btn-primary btn-annulla" role="button" href="/strutt_priv.php?pag=rapporti_in_primo_piano&lev1=servizi&wdg=02|03|17|18" title="${btnAnnulla}">Annulla</a>
	
	<input type="button" name="conferma" value="Conferma" onclick="$('#formPuRapportiPredefiniti').submit()" class="btn btn-primary execute" alt="Conferma">
</div>
			