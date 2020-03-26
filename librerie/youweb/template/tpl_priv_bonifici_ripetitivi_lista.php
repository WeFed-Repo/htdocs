					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					




<script>
$(document).ready(function(e) {
  	if (isMobile()) {
		$("#tableListaBonifici").cardBoxTable({
			colTitleIdx: 1,
			colActionIdx: 0,
			colActionPos: "top-right",
			show: function() {
				$(this).find('img[class="icon15"]').css('width','20px').css('height','20px').css('margin-bottom','5px');
			},
		});
  	}
});
</script>
<div class="riquadro clearfix">
<script type="text/javascript" src="/WEBHT/jsp/ht/pagamenti/bonificiRipetitivi/bonificoContinuativoLista/bonificoContinuativoListaJavascript.jsp"></script>


 
		




<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag continuativoLista">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Lista bonifici ripetitivi</span>
 					
				
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lista bonifici ripetitivi&pagCont=testo01')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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



		
	
	













	



<form id="DettaglioBonificoContinuativoForm" method="post" action="/WEBHT/pagamenti/bonificoContinuativoListaConferma.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="4bbf0e2df2781b1c58e36c329fdf7aa5"></div>


<div class="section clearfix">





  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								T Aggogaeadnn Lcercio Asisu 		
							
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
					<span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">VERONA AG. 3&nbsp;-&nbsp; 
									
									
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
 								T Aggogaeadnn Lcercio Asisu 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00002700</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Acctae At.tnudosdgil 		
							
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
<div class="section clearfix margin-bottom10">
	<h3 class="titleSection">
		








		
		
		
			Parametri di ricerca					
		
		


	</h3>
	<div class="form-horizontal">
		<div class="form-group">
			<div class="form-field-input col-sm-4 col-xs-6">
				<label class="control-label" for="statoBonifico">
					Stato
				</label>
		    	<div class="form-field">
					<select name="statoBonifico" id="statoBonifico" class="form-control"><option value="T">Tutti</option>
						
							<option value="A">Attivo</option>
						
							<option value="R">Revocato</option>
						
							<option value="S">Sospeso</option></select>
				</div>
			</div>
		</div>
	</div>
</div>  







<div class="pull-right padding-bottom10">
	<input type="submit" value="Cerca" class="btn btn-primary" alt="Cerca">	
</div>





<div class="table-responsive tabSelezioneCarte" style="display: block;">
	<div class="dataTables_wrapper no-footer">
	<div id="tableListaBonifici_wrapper" class="dataTables_wrapper no-footer"><table id="tableListaBonifici" class="table table-striped dataTable no-footer" role="grid">
	
		<thead>
			<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 123px;">
						selezione Beneficiario
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 165px;">
						Beneficiario
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 214px;">
						Causale
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 49px;">
						Stato
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 44px;">
						Periodo
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 140px;">
						Valuta ultimo pagamento
			  		</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 39px;">
						Canale
			  		</th></tr>
		</thead>
		<tbody>
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
				
			
		<tr role="row" class="odd">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '21048' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '21048' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA ASILO                                                 
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						05/06/2009
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="even">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '21046' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '21046' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RATA MENSILE                                                
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						05/10/2007
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="odd">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '21047' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '21047' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA MENSILE                                               
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						05/06/2008
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="even">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '21045' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '21045' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA MENSILE                                               
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						04/05/2007
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="odd">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '709175' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '709175' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RATA ASILO CASTAGNEDI NICOLA                                
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						04/12/2013
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="even">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '652059' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '652059' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RATA MENSILE CASTAGNEDI NICOLA                              
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						03/06/2013
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="odd">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '626303' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '626303' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA ASILO CASTAGNEDI NICOLA                               
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						03/12/2012
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="even">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '617163' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '617163' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA MENSILE CASTAGNEDI NICOLA                             
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						03/09/2012
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr><tr role="row" class="odd">
					<td>
						
							
								
								
								
									
									
									
								
								<a href="javascript:goToPage('/pagamenti/bonificoContinuativoDettaglio.do','selezionato' , '21049' )">
									<img class="icon15" title="dettaglio bonifico ripetitivo" src="/HT/fe/img/i_dettaglio.gif
">
								</a>
							
								
								
								
									
									
									
								
								
									
										
									
									
									
								
								<a href="javascript:isValidState('/pagamenti/bonificoContinuativoConfermaRevoca.do','selezionato' , '21049' , 'statoBonificoContinuativo' , 'R' )">
									<img class="icon15" title="revoca bonifico ripetitivo" src="/HT/fe/img/i_cancella.gif
">
								</a>
							
						
							
						
							
						
							
						
							
						
							
						
							
						
					</td>
					<td>
						SCUOLA INFANZIA MARIA IMM.         
					</td>
					<td>
						RETTA MENSILE CASTAGNEDI NICOLA                             
					</td>
					<td>
						Revocato
					</td>
					<td>
						Diversa
					</td>
					<td>
						04/06/2012
					</td>
					<td>
						<img title="filiale" src="/HT/IMAGES/filiale.gif">
					</td>
				</tr></tbody>
	
	</table></div>
	</div>
</div>


 	



</form>





	
</div>		