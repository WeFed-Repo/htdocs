					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							12/05/2017	
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
	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
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
		<div class="hidden-print hidden-xxs flag domiciliazioni">&nbsp;</div>				
 		<span>Domiciliazioni bancarie</span>		
	</h1>
	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Domiciliazioni bancarie&pagCont=testo03')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>


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

<div class="divForm">
	<form id="formDelegheRid" method="post" action="/WEBHT/cc/delegheRid.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="3c4c1a3644d701848fdea0ca09a96e38"></div>
		<div class="section clearfix">
			
			
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
 								Tlroa Ualocualm 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00174456</span>
					
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
				    <span class="col-xs-6" id="agenzia">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
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
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2001|200100003610">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2001|200100003610" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00003610</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</td>
							<td headers="intestazioneRapporto">
 								Urlaal Oc Ulomat 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2001|200100174456" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2001|200100174456" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00174456</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</td>
							<td headers="intestazioneRapporto">
 								Tlroa Ualocualm 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2001|200100001657">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2001|200100001657" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00001657</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
									
										2001
									
								</td>
							<td headers="intestazioneRapporto">
 								Autl Ntorea Aoadlorl,Lam 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr><tr role="row" class="even">
						
							
							
								
									
									
										
											
												<td class="hidden sorting_1" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|1896|189600000933">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|1896|189600000933" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">K2 Black 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">*2144</td>
							<td headers="filialeRapporto" class="hidden-xs">SEDE DI LODI&nbsp;-&nbsp; 
									
										2001
									
									
								</td>
							<td headers="intestazioneRapporto">
 								Araa Ctllolmo Uu 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
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
</div>
	
		
		
			<!--           OPERA          -->




<script>
$(document).ready(function(){

	
	
	movimentiSelectionInit(false);
	

});
</script>






		<div class="section clearfix">
			<div class="row">
				<div class="col-xs-12">
					<div class="innerWrapperTab">
						<ul>
							<li class="on"><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni3&lev1=pagamenti&wdg=06|02" title="Dettagli" id="dett_fin" role="button" class="dett_fin">Inserisci nuovo mandato</a></li>
							<li><a href="http://youweb.webank.local/strutt_priv_new.php?pag=domiciliazioni4&lev1=pagamenti&wdg=06|02" title="Ammortamento" id="amm_fin" role="button" class="amm_fin ">Gestione mandati</a></li>
						</ul>
					</div>
				</div> 
			</div>
		</div>	
		<div class="section clearfix">	
			<h3 class="titleSection">Dati debitore</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="">Intestatario del pagamento *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="NOME COGNOME" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="prefTelefono">Iban</label>
						<span class="resume">IT03D0558401799000000049199</span>
					</div>
				</div>
				
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label" for="">Indirizzo *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="VIA MAIORANA 60-62" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<label class="control-label" for="">Citt&agrave; *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="VERTEMATE CON MINOPRIO" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-2">
						<label class="control-label" for="">CAP *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="22070" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-2">
						<label class="control-label" for="">Provincia *</label>
						<div class="form-field">
							<select name="" class="form-control" id="">				    	
					       	<option id="" selected="selected" value="AL">AL</option>
				            <option value="AL">AL</option>							
							</select>
						</div>
						
					</div>
				</div>
				
				
					
					
				
			</div>
		</div>
		
		
		<div class="section clearfix">
			<h3 class="titleSection">Dati mandato</h3>
			<div class="bs-example clearfix">				
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label" for="">Id mandato *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="VERTEMATE CON MINOPRIO" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label" for="">Id creditore *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="22070" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label" for="">Data di firma *</label>
						<div class="form-field">
								<input type="text" name="dataInizioRicerca" maxlength="10" size="10" value="13/10/2016" id="dataInizioRicerca" class="datepicker form-control wauto" />
							</div>
					</div>
				</div>
				
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="">Codice fiscale del firmatario del mandato</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="TLVLIO49H50F205N" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="prefTelefono">Importo massimo/fisso di addebito</label>
							<div class="form-field">
								<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control">
								<span style="float: left; padding: 5px;">,</span>
								<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">&nbsp;EUR
							</div>
						</div>
				</div>
			</div>
		</div>
		



		<div class="section clearfix">
			<h3 class="titleSection">Dati creditore</h3>
			<div class="bs-example clearfix">
				<div class="form-group clearfix">
					<div class="form-field-input col-xs-12">
						<label class="control-label" for="">Azienda *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="NOME COGNOME" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
				</div>
				
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label" for="">Indirizzo *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="VIA MAIORANA 60-62" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<label class="control-label" for="">Citt&agrave; *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="VERTEMATE CON MINOPRIO" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-2">
						<label class="control-label" for="">CAP *</label>
						<div class="form-field">
							<input type="text" name="" maxlength="35" size="36" value="22070" onblur="formattaStr(this, 35)" id="" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-2">
						<label class="control-label" for="">Provincia *</label>
						<div class="form-field">
							<select name="" class="form-control" id="">				    	
					       	<option id="" selected="selected" value="AL">AL</option>
				            <option value="AL">AL</option>							
							</select>
						</div>						
					</div>
					
					
				
				</div>
				
				
					
					
					
				
			</div>
		</div>
	

	<div class="pull-right margin-bottom20 margin-top10 " id="btn_ricerca">
		<input name="Prosegui" class="btn btn-primary" type="submit" value="Prosegui">
	</div>
		
	
</div>