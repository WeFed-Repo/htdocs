<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		16/05/2017	
	</div>
</div>
<div class="riquadro clearfix">

<style>
.imgSrv{
	float: none;
}
</style>
	<h1>
				<div class="hidden-print hidden-xxs flag bilancioMensile">&nbsp;</div>
 					<span>Bilancio Mensile</span>
	</h1>
<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bilancio mensile&amp;pagCont=testo01')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
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



		
	
	


	
	
	

	<form id="formBilancioMensile" method="post" action="/WEBHT/cc/bilancioMensile.do">
	<div class="section clearfix">
		




  






	
	
		
	








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
									
									
										0000
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														28,00
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														28,00
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
													<input type="radio" name="codContoCorrente" value="001|0000|000000000000" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000001788" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										0000
									
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
														28,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														28,00
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
							<td headers="filialeRapporto" class="hidden-xs">MONZA&nbsp;-&nbsp; 
									
										2070
									
									
								</td>
							<td headers="intestazioneRapporto">
 								Domanin Fabrizio 		
							
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
														5,22
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														5,22
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
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
	
		<div class="section clearfix" id="ricercaEsitoTesto">
			<div class="context-buttons">
				<a href="#" title="Mostra" id="btnRicerca" class="btnSelezioneOpen pull-right"> </a>
			</div>
			<h3 class="titleSection">
				








		
		
		
			Parametri di ricerca					
		
		


			</h3>

			<div class="bs-example">
				<div class="form-group clearfix" id="ricercaEsitoTesto">
					<div class="col-xs-12 margin-bottom10">
					<label class="control-label">
						Criteri: <b>bilancio del mese di Maggio 2017</b>
						</label>
					</div>
		

		<!--FRASE INDICATIVA DI PASSIVO/ATTIVO -->
		
			
				<div class="col-xs-12" style="color:red; font-weight:bold;">
					Il bilancio del mese di Maggio 2017 risulta in passivo per un totale di -60,00
				</div>
			
			
		

	
				</div>
			</div>
		</div>
		<div class="section clearfix" style="display:none" id="ricerca">
			<div class="context-buttons">
				<a href="#" title="Mostra" id="btnRicerca" class="btnSelezioneClose pull-right"> </a>
			</div>
			<h3 class="titleSection">
				








		
		
		
			Parametri di ricerca					
		
		


			</h3>			
				<div class="bs-example">
		
					<div class="form-group clearfix">
						<div class="form-field-input col-xs-12 col-sm-4">
							<label class="control-label" for="dataInizioBilancio">
								Bilancio di:
							</label>
							<div class="form-field">
							    <select name="dataInizioBilancio" id="dataInizioBilancio" class="form-control"><option value="01/05/2017" selected="selected">Maggio 2017</option>
										
									 
										
											<option value="01/04/2017">Aprile 2017</option>
										
									 
										
											<option value="01/03/2017">Marzo 2017</option>
										
									 
										
											<option value="01/02/2017">Febbraio 2017</option>
										
									 
										
											<option value="01/01/2017">Gennaio 2017</option>
										
									 
										
											<option value="01/12/2016">Dicembre 2016</option>
										
									 
										
											<option value="01/11/2016">Novembre 2016</option>
										
									 
										
											<option value="01/10/2016">Ottobre 2016</option>
										
									 
										
											<option value="01/09/2016">Settembre 2016</option>
										
									 
										
											<option value="01/08/2016">Agosto 2016</option>
										
									 
										
											<option value="01/07/2016">Luglio 2016</option>
										
									 
										
											<option value="01/06/2016">Giugno 2016</option></select>
							</div>
						</div>	
					</div>
				</div>
		</div>

	<div class="bs-example">
		<div class="form-group clearfix">
			
			






<div class="context-buttons pull-left margin-top10">
	<a href="#" onclick="exportExcel('formBilancioMensile');" title="esporta in excel" id="excel" class="btnExcel" role="button"></a>
</div>
<div class="pull-right  margin-top10">
	
	<input type="submit" value="Conferma" class="btn" alt="Conferma" style="visibility: hidden;">
</div>


		</div>
	</div>
	</form>
	
	<div class="bs-example">
		<div class="form-group">
	
	








	


		</div>
	</div>
	
	
			
		<div class="table-responsive tabSelezioneCarte">
			<div class="dataTables_wrapper no-footer margin-bottom20">
				<div id="BMDT_wrapper" class="dataTables_wrapper"><table id="BMDT" class="table table-striped dataTable no-footer" role="grid">
<colgroup>
<col width="63%">
<col width="18%">
<col width="18%">
</colgroup>
<thead>
<tr class="hover" role="row"><th class="text sorting_disabled" title="Categorie" rowspan="1" colspan="1" style="width: 584px;">Categorie</th><th class="number sorting_disabled oRight" title="Entrate" rowspan="1" colspan="1" style="width: 151px;">Entrate</th><th class="number sorting_disabled oRight" title="Uscite" rowspan="1" colspan="1" style="width: 151px;">Uscite</th></tr>
</thead>
<tfoot>
<tr><th colspan="1" class="oCenter" rowspan="1">Totale</th><th class="oRight" rowspan="1" colspan="1">50,01</th><th class="oRight" rowspan="1" colspan="1">490,06</th></tr>
</tfoot>

<tbody>
<tr role="row" class="odd">
	<td class="oLeft">N.D.</td>
	<td class="oRight">0,01</td>
	<td class="oRight">0,00</td>
</tr>
<tr role="row" class="even">
	<td class="oLeft">ALTRI INTROITI</td>
	<td class="oRight">50,00</td>
	<td class="oRight">0,00</td>
</tr>
<tr role="row" class="odd">
	<td class="oLeft">PAGAMENTO POS</td>
	<td class="oRight">0,00</td>
	<td class="oRight">429,06</td>
</tr>
<tr role="row" class="even">
<td class="oLeft">PAGAMENTI VARI</td>
<td class="oRight">0,00</td>
<td class="oRight">61,00</td>
</tr>
</tbody>


<!--tbody>
<tr role="row" class="odd">
<td class="oLeft">N.D.</td>
<td class="oRight">1,00</td>
<td class="oRight">0,00</td>
</tr>
<tr role="row" class="even">
<td class="oLeft">PAGAMENTI VARI</td>
<td class="oRight">0,00</td>
<td class="oRight">61,00</td>
</tr></tbody-->
</table></div>

			</div>
		</div>
	
</div>
<script type="text/javascript">
$(document).ready(function(){
		$("input[type='submit']").css("visibility", "hidden");
		
		$('.btnSelezioneClose').click(function(){
				$("#ricercaEsitoTesto").show();
				$("#ricerca").hide();
				$("input[type='submit']").css("visibility", "hidden");
			})
		$('.btnSelezioneOpen').click(function(){
				$("#ricercaEsitoTesto").hide();
				$("#ricerca").show();
				$("input[type='submit']").css("visibility", "visible");
			})
})
</script>