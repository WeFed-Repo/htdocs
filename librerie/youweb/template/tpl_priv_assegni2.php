					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							12/05/2017	
						</div>
					</div>
					
					
					
					




<div class="riquadro clearfix">
	



<script type="text/javascript" src="/WEBHT/jsp/ht/rapporti/statoAssegni/statoAssegniJavascript.jsp"></script>
 










<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Assegni</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: assegni&amp;pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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

	<form id="formStatoAssegni" method="post" action="/WEBHT/cc/statoAssegni.do" class="clearfix">
		<div class="section clearfix">
			
			<h3 class="titleSection">
				Rapporto selezionato
			</h3>
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								Cdiceg Lginsasa Rg Uateonoa 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00585163</span>
					
				</div>
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-6 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-4 col-sm-3">
				    	Filiale:
				    </span>
				    <span class="col-xs-6 col-sm-8" id="agenzia">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</span>
				</div>
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00585163</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Cdiceg Lginsasa Rg Uateonoa 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400001585">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00001585</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Neevi Aasgtdcaddi 		
							
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
	 
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		</div>
		<div class="section clearfix">
		<h3 class="titleSection">
			








		
		
		
			Parametri di ricerca					
		
		


		</h3>	
		<div class="bs-example">
			<div class="form-group clearfix">
				<div class="form-field-input col-xs-12 col-sm-12">
					<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
						<div class="form-field-input col-xs-1 col-sm-1 clear-padding">	
							<input type="radio" name="opzione" value="DUE_LIBRETTI" checked="checked" id="libretti" class="sfondoForm">
						</div>
						<div class="form-field-input col-xs-11 col-sm-11 clear-padding">
							<label style="padding-top:2px" for="libretti">
								Situazione ultimi 2 libretti
							</label>
						</div>
					</div>
				</div>
				<div class="form-field-input col-xs-12 col-sm-12">
					<div class="form-field-input col-xs-12 col-sm-6 clear-padding">
						<div class="form-field-input col-xs-1 col-sm-1 clear-padding">
							<input type="radio" name="opzione" value="SING_LIBRETTO" id="libretto" class="sfondoForm">
						</div>
						<div class="form-field-input col-xs-11 col-sm-11 clear-padding">
							<label style="padding-top:2px" for="libretto">
								Situazione libretto
							</label>
						</div>
					</div>
					<div class="form-field-input col-sm-6 clear-padding margin-top-xs-60">
						<div class="form-field-input col-sm-3 clear-padding">
							<label class="control-label" style="padding-top:2px" for="assegno">
								Assegno
							</label>
						</div>
						<div class="form-field-input col-sm-12 clear-padding">
							<div class="form-field">
								<input type="text" name="numeroAssegno" maxlength="9" size="17" value="" onfocus="$('#libretto').prop('checked', true);" id="assegno" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right margin-bottom20 margin-top10">
		
		<input type="submit" name="conferma" value="Conferma" class="btn btn-primary" alt="Conferma">
	</div>
</form>

	<!--           OPERA          -->















	



	<div class="selezioneCC">
		 <div class="table-responsive tabSelezioneCarte clear-paddingImportant" style="display: block;">
			<div id="PVSA_wrapper" class="dataTables_wrapper no-footer"><table id="PVSA" class="table table-striped dataTable no-footer" role="grid">
<colgroup>
<col width="50%">
<col width="50%">
</colgroup>
<thead>
<tr class="hover" role="row"><th class="text sorting_disabled" title="colonna.numeroAssegno" rowspan="1" colspan="1" style="width: 436px;">Assegno</th><th class="text sorting_disabled" title="Stato e descrizione" rowspan="1" colspan="1" style="width: 436px;">Stato e descrizione</th></tr>
</thead>
<tbody>




















<tr role="row" class="odd">
<td class="oCenter">718944741</td>
<td class="oCenter">Pagato</td>
</tr><tr role="row" class="even">
<td class="oCenter">718944742</td>
<td class="oCenter">Pagato</td>
</tr><tr role="row" class="odd">
<td class="oCenter">718944743</td>
<td class="oCenter">Pagato</td>
</tr><tr role="row" class="even">
<td class="oCenter">718944744</td>
<td class="oCenter">Pagato</td>
</tr><tr role="row" class="odd">
<td class="oCenter">718944745</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">718944746</td>
<td class="oCenter">Restituito</td>
</tr><tr role="row" class="odd">
<td class="oCenter">718944747</td>
<td class="oCenter">Restituito</td>
</tr><tr role="row" class="even">
<td class="oCenter">718944748</td>
<td class="oCenter">Restituito</td>
</tr><tr role="row" class="odd">
<td class="oCenter">718944749</td>
<td class="oCenter">Restituito</td>
</tr><tr role="row" class="even">
<td class="oCenter">718944750</td>
<td class="oCenter">Restituito</td>
</tr><tr role="row" class="odd">
<td class="oCenter">021499821</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">021499822</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="odd">
<td class="oCenter">021499823</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">021499824</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="odd">
<td class="oCenter">021499825</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">021499826</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="odd">
<td class="oCenter">021499827</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">021499828</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="odd">
<td class="oCenter">021499829</td>
<td class="oCenter">Non pervenuto</td>
</tr><tr role="row" class="even">
<td class="oCenter">021499830</td>
<td class="oCenter">Non pervenuto</td>
</tr></tbody>
</table></div>

		</div>
	</div>

<!--           /OPERA           -->
</div>