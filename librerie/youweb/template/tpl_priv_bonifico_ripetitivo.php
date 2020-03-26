					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
					
					



<div class="riquadro clearfix">
	
	
	
			
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag continuativo">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Ordine di bonifico ripetitivo</span>
 					
				
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: disponi bonifico ripetitivo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">	<div class="padding10">
	<div class="clearfix">
		
		<div id="divHelp" class="riquadro">
			<h1><div class="flag info">&nbsp;</div>Help: password "usa e getta" via SMS</h1>
			<div class="padding-left10">
			<p>La "<strong>Password usa e getta</strong>" a 6 cifre necessaria per poter confermare l'operazione ti viene inviata via SMS al numero di cellulare predefinito comunicato alla banca cliccando sul pulsante "Genera password".</p>
			<p>Il messaggio riporta anche alcuni dati relativi all'operazione che stai eseguendo.</p>
			<p>Per controllare se hai già fornito il cellulare tra i tuoi recapiti YouWeb o per verificarne la correttezza, visita la sezione "Servizi per te - Gestione Contatti".</p>
			<p>Nella colonna "Contatti" deve comparire il tuo cellulare attuale e, se così non fosse, è necessario recarti in filiale per far effettuare l'inserimento o l'aggiornamento.</p>
			<br>
			</div>
		</div>
			<div class="pull-right">
				<!-- <input type="button" onclick="javascript:window.print();" alt="stampa" value="stampa" class="btn btn-primary" /> -->
				<input type="button" onclick="javascript:CloseHelp();" alt="chiudi" value="chiudi" class="btn btn-primary">
			</div>
	</div>
	</div>

</div>
    </div>
  </div>
</div>




		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	



	<form id="formSelezione" method="post" action="/WEBHT/pagamenti/bonificoContinuativoCompilazione.do" class="form-horizontal">	
		<div class="section clarifx">
			<h3 class="titleSection">Rapporto selezionato</h3>
			
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								T Aggogaeadnn Lcercio Asisu 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00585163</span>
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
														99.999.988.848,58
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														99.999.996.126,57
														EUR
													</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
															10.000,00
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
													<input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked" onclick="submit();">
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
														99.999.996.126,57
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														99.999.988.848,58
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
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
 								Acctae At.tnudosdgil 		
							
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
						</tr></tbody>
					<thead>
						<tr class="" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
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
	</form>
	
	<form id="formInserimento" method="post" action="/WEBHT/pagamenti/bonificoContinuativoPeriodicita.do" class="form-horizontal">
	<input type="hidden" name="pagina" value="compilazione">
	<input type="hidden" name="codContoCorrente" value="001|0004|000400585163">
	<input type="hidden" name="dispId" value="c7b13b0f1cd048afab32a8187820c322" id="dispId">
	<div class="section clearfix">
		<h3 class="titleSection">
			
			








		
			Ordinante
		
		
		
		

 
		</h3>
		<div class="form-group">
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="ordinante">Ordinante</label>
				<div class="form-field">
					<input type="text" name="ordinante" maxlength="30" size="35" value="T AGGOGAEADNN LCERCIO ASISU" onblur="javascript: formattaStr(this, 30);" id="ordinante" class="form-control">
				</div>
				<label class="control-label" for="cittaOrd">
					 Città 
				</label>
				<div class="form-field">
					<input type="text" name="cittaOrd" maxlength="40" size="20" value="VERONA" onblur="formattaStr(this, 25);" id="cittaOrd" class="form-control">
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="indirizzoOrd">
					Indirizzo 
				</label>
				<div class="form-field">
					<input type="text" name="indirizzoOrd" maxlength="30" size="50" value="VIA MONTE TESORO 19/A" onblur="formattaStr(this, 27);" id="indirizzoOrd" class="form-control">
				</div>
				<label class="control-label" for="provinciaOrd">
					Provincia 
				</label>
				<div class="form-field">
					<input type="text" name="provinciaOrd" maxlength="2" size="3" value="VR" onblur="formattaStr(this, 2);" id="provinciaOrd" class="form-control">
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label" for="capOrd">
					CAP 
				</label>
				<div class="form-field">
					<input type="text" name="capOrd" maxlength="5" size="5" value="37132" id="capOrd" class="form-control">		
				</div>
			</div>
		</div>
	</div>
	<div class="section clearifx">
		<h3 class="titleSection">Inserisci dati</h3>
		<div class="form-group auto">
			
			
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Beneficiario</label>
				<div class="form-field">
					<div>
						<select name="codBeneficiario" onchange="popolaBeneficiario()" id="beneficiario" class="form-control">
						
														
									
							
							<option id="nuovoBen" value="nuovo beneficiario" selected="selected">Nuovo beneficiario:</option>	
								
									<option value="4">AA</option>
								
									<option value="1">GEST</option>
								
									<option value="3">NUOVO BEN ESPRESSO</option></select>
											
						
						
							
						<div class="padding10">
							<input type="checkbox" name="memorizza" value="S" onclick="visualizzaNickname(this)" id="memorizza" style="display:none">
						</div>
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Nome beneficiario:</label>
				<div class="form-field">
					<div class="col-xs-9">
						<input type="text" name="nomeBeneficiario" maxlength="35" size="30" value="" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
					</div>
					<div class="col-xs-3">
						<button value="&nbsp;" id="beneficiari" title="Aggiungi beneficiario" class="btnAggiungiBeneficiario" role="button" aria-pressed="false" onclick="event.preventDefault();$('#nickname').toggle();$(this).toggleClass('addchecked')"></button>
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12 nickname" style="display: none;" id="nickname">
				<label class="control-label">Nickname:</label>
				<div class="form-field">
					<input type="text" name="nickname" maxlength="20" size="30" value="" class="form-control">
				</div>
			</div>
		</div>
	</div><!-- .section -->
	<div class="section clearfix">
		<h3 class="titleSection">
			Inserisci coordinate beneficiario
			<!-- 
			








		
		
		
			Parametri di ricerca					
		
		

 -->
		</h3>
		<div class="form-group">
			
			



	
		<div class="form-field-input col-xs-12 col-sm-4 hidden-xs">
			<label class="control-label">Bonifico verso:</label>
			<div class="form-field">
				<div class="col-xs-6">
					<input type="radio" name="bonificoVersoNazione" value="1" checked="checked" onclick="checkEnabled()">
					Italia
				</div>
				<div class="col-xs-6">
					
				</div>
			</div>
		</div>
	
		<div class="form-field-input col-sm-8 col-xs-12">
			<label class="control-label">
				IBAN intero:
			</label>
				<div class="form-field">
					<div class=" col-sm-5 col-xs-12 col-prt-12">
						<input type="text" name="iban" maxlength="35" size="30" value="" onblur="formattaStr(this,35);testABI();" id="iban" class="form-control">
						</div>
					<div class="pull-right col-sm-6 col-xs-12 padding-top-xs-5 hidden-xs" id="btnIban">
						<input type="button" name="trovaAbiCab" value="Trova ABI/CAB" id="trovaAbiCab" class="btn" alt="" onclick="javascript:OpenHelp('/template/modale_abi-cab.html')">
								<input type="button" name="calcolaIban" value="Calcolo IBAN" id="calcolaIban" class="btn" alt="" onclick="javascript:OpenHelp('/template/modale_iban.html')">
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

					</div>
				</div>
			</div>
			<script>
				$(document).ready(function(){
					$("#btnIban").on("beneficiariEvent", function(event, stato){
						if(stato == "enable"){
							$("#btnIban input[type='button']").each(function(){
								$(this).removeClass("disabled");
							})
						}else{
							$("#btnIban input[type='button']").each(function(){
								$(this).addClass("disabled");
							})
						}
					})
				})
			</script>
		</div>
	</div>
	<div class="section clearfix">
		<h3 class="titleSection">
			Dati bonifico
			<!-- 
			








		
		
		
			Parametri di ricerca					
		
		

 -->
		</h3>
		<div class="form-group">
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Importo</label>
				<div class="form-field">
					<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control">
					<span style="float: left; padding: 5px;">,</span>
					<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
				<label class="control-label">Causale</label>
				<div class="form-field">
					<textarea name="causale" cols="50" rows="3" onblur="formattaStr(this, 150)" id="causale" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-field-input col-sm-4 col-xs-12">
			</div>
		</div><!-- .form-group -->
	</div><!-- .section -->
	
	</form>
</div>

<div class="pull-right margin-bottom20">
	<!-- <button type="button" class="btn btn-primary" >Annulla</button> -->
	<button type="button" class="btn btn-primary" onclick="$('#formInserimento').submit()">Conferma</button>
</div>
<script type="text/javascript">
function popolaBeneficiario(){
	codice = $("#beneficiario :selected").val();
	changeDatiBeneficiario($("#beneficiario"));
	//compilaBeneficiario(codice, valorizzaDatiBeneficiario);
}

/*$(function( $, undefined ) {
	bpComboBox(changeDatiBeneficiario);
}(jQuery));*/
</script>