<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		15/03/2017	
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
		<div class="hidden-print hidden-xxs flag coordinateIban">&nbsp;</div>
		<span>Coordinate IBAN</span>
 	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Coordinate IBAN&pagCont=testo01')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			Di seguito vengono visualizzate le coordinate dei tuoi rapporti. Potrai scaricarle in formato pdf
		</div>



			</div>
		
	
</div>  	     

	
	








	


	
	
	<div class="section clearfix">
		<h3 class="titleSection">
			
			








		
			Rapporto selezionato
		
		
		
		


		</h3>
		<form id="formCoordinateIban" method="post" action="/WEBHT/serviziPerTe/coordinateIban.do">
		<div style="display:none">
		<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3f9d4037135459716149539c8025e76c"></div>
			<input type="hidden" name="modifica" value="modifica">
			
			
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
 								Iai Daeecadndgstv 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00001585</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														3.607,49
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														3.607,49
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
													<input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00001585</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Iai Daeecadndgstv 		
							
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
														3.607,49
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														3.607,49
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0004|000400585163">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00585163</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Oes Nalgiocdgtus Gr Iaeaanc 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
							
							
								
									
									
										
										
											
												
													
														<td headers="affidamento" class=" hidden oRight">
															10.000,00
															EUR
														</td>
														<td headers="divisaSaldoAffidamento" class="hidden">
															EUR
														</td>
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														99.999.996.137,57
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														99.999.988.859,58
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0004|000400002700">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00002700</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Didugt L. Caetntaosca 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
								
									
									
										
											<td align="center">Non disponibile</td>
											<td class="hidden"></td>
											<td class="hidden"></td>
											<td class="hidden"></td>
										
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0898|089800115895">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0898|089800115895" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">YouCard 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">*1650</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
										0004
									
									
								</td>
							<td headers="intestazioneRapporto">
 								Accdielgtaan Us 		
							
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
														27,94
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														27,94
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|0001|000100167285">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0001|000100167285" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00167285</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI VERONA&nbsp;-&nbsp; 
									
									
										0001
									
								</td>
							<td headers="intestazioneRapporto">
 								Tlsaad Cugneiac 		
							
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
														81.477,99
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														46.457,99
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
			
		</form>
	</div>
		
	<!-- LE TUE COORDINATE -->
	<div class="section clearfix">
		<h3 class="titleSection">Le tue coordinate</h3>
		<div class="row">
				<div class="col-sm-6 col-xs-12 margin-bottom-xs-10">
					<div class="boxDefault clearfix">
							<h3>Coordinate rapporto</h3>
							<div class="col-sm-9 col-xs-12 padding-top10">
								<div class="row">
									<div class="col-xs-3">IBAN:</div>
									<div class="col-xs-9 oLeft">IT25N0503411704000000001585</div>
								</div>
								<div class="row">
									
									<div class="col-xs-3">SWIFT:</div>
									<div class="col-xs-9 oLeft">BAPPIT21004</div>
									
								</div>
							</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-xs-12">
					<div class="boxDefault clearfix">
							<h3>Scarica Coordinate</h3>
							<div class="col-xs-12 padding-top5">
								<div class="col-sm-12 col-xs-12">
									In questa sezione puoi scaricare il pdf con le coordinate del rapporto selezionato.
								</div>
								<div class="col-sm-12 col-xs-12">
		<img src="/HT/fe/img/icon_excel2.png" alt="" class="center-block margin-top20">
									<div class="col-xs-12 contentCenter padding-top5">
										<form id="scaricoModulo" method="post" action="/WEBHT/serviziPerTe/coordinateIbanScaricoModulo.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3f9d4037135459716149539c8025e76c"></div>
											<input type="button" style="margin-bottom:10px" class="btn" onclick="submitForm('scaricoModulo');" value="Scarica coordinate">
										</form>
									</div>						
								</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<!-- END LE TUE COORDINATE -->
</div>