	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right">
			15/03/2017	
		</div>
	</div>
  

<script type="text/javascript">
	var defaultAzienda = 'Nome azienda';
	var defaultUfficio = 'Nome ufficio';
	var defaultIndirizzo = 'Nome via / piazza..., 1';
	var defaultNazione = 'ITALIA';
	$(document).ready(function()
	{
		$('#boxEmailAzienda').hide();
		$('#boxConferma').hide();
		$('#boxDatoreLavoro').hide();
		$('#boxDatoreLavoro').hide();
		$('#boxIndirizzoDatoreLavoro').hide();
		if ($('#nomeAzienda').val()=='' || $('#nomeAzienda').val()==defaultAzienda){$('#nomeAzienda').val(defaultAzienda);$('#nomeAzienda').css("color", "gray");$('#nomeAzienda').css("font-style", "italic");}
		if ($('#nomeUfficio').val()=='' || $('#nomeUfficio').val()==defaultUfficio){$('#nomeUfficio').val(defaultUfficio);$('#nomeUfficio').css("color", "gray");$('#nomeUfficio').css("font-style", "italic");}
		if ($('#indirizzoAzienda').val()=='' || $('#indirizzoAzienda').val()==defaultIndirizzo){$('#indirizzoAzienda').val(defaultIndirizzo);$('#indirizzoAzienda').css("color", "gray");$('#indirizzoAzienda').css("font-style", "italic");}
		$("#nomeAzienda").focus(function() {
   			if ($(this).val() == defaultAzienda) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
		});
		$("#nomeUfficio").focus(function() {
   			if ($(this).val() == defaultUfficio) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
		});
		$("#indirizzoAzienda").focus(function() {
   			if ($(this).val() == defaultIndirizzo) {$(this).css('color', '#003F6E');$(this).css('font-style', 'normal');$(this).val('');}
		});
		$("#nomeAzienda").blur(function() {
   			if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultAzienda);}
		});
		$("#nomeUfficio").blur(function() {
   			if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultUfficio);}
		});
		$("#indirizzoAzienda").blur(function() {
   			if ($(this).val() == "") {$(this).css("color", "gray");$(this).css("font-style", "italic");$(this).val(defaultIndirizzo);}
		});
		if ($('#canaleComunicazioneEmail').attr('checked')){visualizzaContenuto('E');}
		else if ($('#canaleComunicazioneCartaceo').attr('checked')){visualizzaContenuto('C');}
	});
	function visualizzaContenuto(canaleComunicazione)
	{
		if (canaleComunicazione=='E')
		{
			$('#boxEmailAzienda').show();
			$('#boxConferma').show();
			$('#boxDatoreLavoro').css('display','block');
			$('#boxIndirizzoDatoreLavoro').hide();
			$('#indirizzoAzienda').val(defaultIndirizzo).css('color', 'gray').css('font-style', 'italic');
			$('#capAzienda').val('');
			$('#comuneAzienda').val('');
			$('#provinciaAzienda').val('');
			$('#nazioneAzienda').val(defaultNazione);
		}
		else if (canaleComunicazione=='C')
		{
			$('#boxEmailAzienda').hide();
			$('#emailAzienda').val('');
			$('#boxConferma').hide();
			$('#conferma').attr('checked',false);
			$('#boxDatoreLavoro').css('display','block');
			$('#boxIndirizzoDatoreLavoro').css('display','block');
		}
	}
	function upperCase(campo)
	{
		stringa = campo.value;
		stringa = $.trim(stringa);
		stringa = stringa.toUpperCase();
		campo.value = stringa;
	}
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
		<div class="hidden-print hidden-xxs flag accreditoStipendio">&nbsp;</div>
		<span>Accredito stipendio</span>
 	</h1>
	
	<div class="col-xs-12 hidden-xs hidden-print">
				
	<div class="contentPagina">
			<p>Tramite questa sezione puoi dare alla banca l'istruzione di comunicare al tuo datore di lavoro la richiesta di accreditare lo stipendio su uno dei rapporti sotto elencati. Avrai la possibilità di scegliere tramite quale canale (e-mail o cartaceo) vuoi comunicare le coordinate del rapporto di accredito.</p>
		</div>



			</div>
		
	
</div>  	     

	
	


<!--style type="text/css">
	@media(max-width: 991px){
		#boxIndirizzoDatoreLavoro .bs-example > .form-group > .form-field-input.col-xs-12.margin-bottom10 > 
		.form-field-input.col-sm-4.col-xs-8 {
			border:1px solid #F00;
			padding-top: 10px;
		}	
	}
	
</style-->


	


	
	<form id="formAccreditoStipendio" method="post" action="/strutt_priv_new.php?pag=accredito_stipendio_2&lev1=pagamenti&wdg=06|02"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="1307377539593040cdb2fee3db37ec14"></div>
	<div class="section clearfix">
		
		<h3 class="titleSection">
			Rapporto per l'accredito dello stipendio
		</h3>
		

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
					<span class="col-xs-4" id="conto">Conto corrente </span>
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked">
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163">
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
						</tr><tr role="row" class="odd">
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700">
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0898|089800115895">
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
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="affidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Affidamento: ordinamento crescente">Affidamento</th><th headers="divisaSaldoAffidamento" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
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
	 
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		
	</div>
	<div class="section clearfix">
		<h3 class="titleSection">
			
			








		
			Canale di comunicazione all'azienda
		
		
		
		


		</h3>
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<label class="control-label">
						Come preferisci comunicare all'azienda le coordinate per l'accredito dello stipendio?
					</label>
				</div>		  
				<div class="form-field-input col-xs-12">
					<div class="form-field-input col-xs-6 clear-padding">
						<div class="form-field-input col-xs-1 clear-padding">
							
							<input type="radio" name="modComunicazione" value="E" onclick="visualizzaContenuto('E');" id="canaleComunicazioneEmail" style="vertical-align: middle;">
						</div>
						<div class="form-field-input col-xs-11 clear-padding">
							<label style="padding-top:2px;">
								tramite e-mail
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-6 clear-padding">
						<div class="form-field-input col-xs-1 clear-padding">
							
							<input type="radio" name="modComunicazione" value="C" onclick="visualizzaContenuto('C');" id="canaleComunicazioneCartaceo" style="vertical-align: middle;">
						</div>
						<div class="form-field-input col-xs-11 clear-padding">
							<label style="padding-top:2px;">
								tramite modulo cartaceo
							</label>
						</div>
					</div>
				</div>
				<div class="form-field-input col-xs-12" id="boxEmailAzienda" style="display: none;">
					<div class="form-field-input col-xs-6 clear-padding-left">
						<label class="control-label">
							Inserisci di seguito l'indirizzo e-mail dell'azienda alla quale vuoi inviare le coordinate del tuo conto:
						</label>
					</div>
					<div class="form-field-input col-xs-6 clear-padding"> 
						<div class="form-field">
							<input type="text" name="emailAzienda" size="30" value="" id="emailAzienda" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-field-input col-xs-12" id="boxConferma" style="display: none;">
					<div class="form-field-input col-xs-4 clear-padding">
						<div class="form-field floatl">
							<input type="checkbox" name="conferma" value="on" id="conferma" class="floatl">
						</div>
						<label class="floatl" style="padding-top:2px">Conferma</label>
					</div>
					<div class="form-field-input col-xs-8 margin-bottom10 clear-padding" id="boxConferma">
						<div class="form-field">
							<textarea rows="2" cols="80" style="font-size: 10px; font-style: italic;" class="form-control" readonly="readonly">Con la richiesta di invio a mezzo e-mail della presente disposizione di accredito stipendio, confermi di essere consapevole del fatto che la medesima sarà trasmessa dalla Banca all'indirizzo da te indicato mediante semplice posta elettronica "in chiaro" e, a tal proposito, sollevi la Banca da ogni responsabilità e/o conseguenza riferita o altrimenti connessa con tale trasmissione.</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section clearfix margin-top10" id="boxDatoreLavoro" style="display: none;">
		<h3 class="titleSection">
			
			








		
			Datore di lavoro
		
		
		
		


		</h3>
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<div class="form-field-input col-xs-6 clear-padding">
						<label class="control-label">
							Inserisci di seguito il nome dell'azienda per la quale lavori
						</label>
					</div>
					<div class="form-field-input col-xs-6 clear-padding">
						<div class="form-field">
							<input type="text" name="nomeAzienda" size="30" value="" id="nomeAzienda" class="form-control" style="color: rgb(128, 128, 128); font-style: italic;">
						</div>
					</div>
				</div>
				<div class="form-field-input col-xs-12">
					<div class="form-field-input col-xs-6 clear-padding">
						<label class="control-label">
							Inserisci l'ufficio alla cui cortese attenzione la comunicazione deve essere inviata
						</label>
					</div>
					<div class="form-field-input col-xs-6 clear-padding">
						<div class="form-field">
							<input type="text" name="nomeUfficio" size="30" value="" id="nomeUfficio" class="form-control" style="color: rgb(128, 128, 128); font-style: italic;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="section clearfix" id="boxIndirizzoDatoreLavoro" style="display: none;">
			<h3 class="titleSection">
				Indirizzo datore di lavoro
			</h3>

		

			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-8">
							<label class="control-label">
								Indirizzo
							</label>
							<div class="form-field">
								<input type="text" name="indirizzoAzienda" size="60" value="" id="indirizzoAzienda" class="form-control" style="color: rgb(128, 128, 128); font-style: italic;">
							</div>
						</div>
						<div class="form-field-input col-xs-4">
							<label class="control-label">Comune
							</label>
							<div class="form-field">
								<input type="text" name="comuneAzienda" size="35" value="" id="comuneAzienda" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 margin-bottom10">
						<div class="form-field-input col-md-1 col-sm-2 col-xs-3 clear-padding-right">
							<label class="control-label">CAP</label>
							<div class="form-field">
								<input type="text" name="capAzienda" maxlength="5" size="6" value="" id="capAzienda" class="form-control">	
							</div>
						</div>
						<div class="form-field-input col-md-1 col-sm-2 col-xs-3 clear-padding-right">
							<label class="control-label">Provincia</label>
							<div class="form-field">
								<input type="text" name="provinciaAzienda" maxlength="2" size="5" value="" onblur="upperCase(this);" id="provinciaAzienda" class="form-control">
							</div>
						</div>
						<div class="form-field-input col-sm-4 col-xs-8">
							<label class="control-label">Nazione</label>
							<div class="form-field">
								<select name="nazioneAzienda" id="nazioneAzienda" class="form-control w-auto"><option value="ABU DHABI">ABU DHABI</option>
									
										<option value="AFGHANISTAN">AFGHANISTAN</option>
									
										<option value="AJMAN (EMIRATI ARABI UNITI)">AJMAN (EMIRATI ARABI UNITI)</option>
									
										<option value="ALAND ISOLE">ALAND ISOLE</option>
									
										<option value="ALBANIA">ALBANIA</option>
									
										<option value="ALGERIA">ALGERIA</option>
									
										<option value="AMERICANE DEL PACIFICO - ISOLE">AMERICANE DEL PACIFICO - ISOLE</option>
									
										<option value="ANDORRA">ANDORRA</option>
									
										<option value="ANGOLA">ANGOLA</option>
									
										<option value="ANGUILLA">ANGUILLA</option>
									
										<option value="ANTARTIDE">ANTARTIDE</option>
									
										<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
									
										<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
									
										<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
									
										<option value="ARGENTINA">ARGENTINA</option>
									
										<option value="ARMENIA">ARMENIA</option>
									
										<option value="ARUBA">ARUBA</option>
									
										<option value="ASCENSIONE - ISOLE">ASCENSIONE - ISOLE</option>
									
										<option value="AUSTRALIA">AUSTRALIA</option>
									
										<option value="AUSTRIA">AUSTRIA</option>
									
										<option value="AZERBAIGIAN">AZERBAIGIAN</option>
									
										<option value="AZZORRE - ISOLE">AZZORRE - ISOLE</option>
									
										<option value="BAHAMAS - ISOLE">BAHAMAS - ISOLE</option>
									
										<option value="BAHREIN - ISOLE">BAHREIN - ISOLE</option>
									
										<option value="BANGLADESH">BANGLADESH</option>
									
										<option value="BARBADOS - ISOLE">BARBADOS - ISOLE</option>
									
										<option value="BELGIO">BELGIO</option>
									
										<option value="BELIZE">BELIZE</option>
									
										<option value="BENIN">BENIN</option>
									
										<option value="BERMUDA - ISOLE">BERMUDA - ISOLE</option>
									
										<option value="BHUTAN">BHUTAN</option>
									
										<option value="BIELORUSSIA">BIELORUSSIA</option>
									
										<option value="BOLIVIA">BOLIVIA</option>
									
										<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
									
										<option value="BOTSWANA">BOTSWANA</option>
									
										<option value="BOUVET ISLANDS">BOUVET ISLANDS</option>
									
										<option value="BRASILE">BRASILE</option>
									
										<option value="BULGARIA">BULGARIA</option>
									
										<option value="BURKINA FASO (EX ALTO VOLTA)">BURKINA FASO (EX ALTO VOLTA)</option>
									
										<option value="BURUNDI">BURUNDI</option>
									
										<option value="CAMBOGIA">CAMBOGIA</option>
									
										<option value="CAMERUN">CAMERUN</option>
									
										<option value="CAMPIONE D ITALIA">CAMPIONE D ITALIA</option>
									
										<option value="CANADA">CANADA</option>
									
										<option value="CANARIE - ISOLE">CANARIE - ISOLE</option>
									
										<option value="CAPO VERDE - ISOLE">CAPO VERDE - ISOLE</option>
									
										<option value="CAROLINE - ISOLE">CAROLINE - ISOLE</option>
									
										<option value="CAYMAN - ISOLE">CAYMAN - ISOLE</option>
									
										<option value="CENTRAFRICANA REPUBBLICA">CENTRAFRICANA REPUBBLICA</option>
									
										<option value="CEUTA (DIP. SPAGN. D AFRICA)">CEUTA (DIP. SPAGN. D AFRICA)</option>
									
										<option value="CHAFARINAS - ISOLE">CHAFARINAS - ISOLE</option>
									
										<option value="CHAGOS - ISOLE">CHAGOS - ISOLE</option>
									
										<option value="CHRISTMAS ISLANDS">CHRISTMAS ISLANDS</option>
									
										<option value="CIAD">CIAD</option>
									
										<option value="CILE">CILE</option>
									
										<option value="CINA REPUBBLICA POPOLARE">CINA REPUBBLICA POPOLARE</option>
									
										<option value="CIPRO REPUBBLICA">CIPRO REPUBBLICA</option>
									
										<option value="CITTA DEL VATICANO">CITTA DEL VATICANO</option>
									
										<option value="CLIPPERTON">CLIPPERTON</option>
									
										<option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
									
										<option value="COLOMBIA">COLOMBIA</option>
									
										<option value="COMORE - ISOLE">COMORE - ISOLE</option>
									
										<option value="CONGO">CONGO</option>
									
										<option value="CONGO REP. DEM.">CONGO REP. DEM.</option>
									
										<option value="COOK - ISOLE">COOK - ISOLE</option>
									
										<option value="COREA DEL NORD">COREA DEL NORD</option>
									
										<option value="COREA DEL SUD (REPUBBLICA DI)">COREA DEL SUD (REPUBBLICA DI)</option>
									
										<option value="COSTA D AVORIO">COSTA D AVORIO</option>
									
										<option value="COSTA RICA">COSTA RICA</option>
									
										<option value="CROAZIA">CROAZIA</option>
									
										<option value="CUBA">CUBA</option>
									
										<option value="DANIMARCA">DANIMARCA</option>
									
										<option value="DIP.BRIT. D OCEANIA (PITCAIRN)">DIP.BRIT. D OCEANIA (PITCAIRN)</option>
									
										<option value="DOMINICA">DOMINICA</option>
									
										<option value="DOMINICANA REPUBBLICA">DOMINICANA REPUBBLICA</option>
									
										<option value="DUBAY">DUBAY</option>
									
										<option value="ECUADOR">ECUADOR</option>
									
										<option value="EGITTO">EGITTO</option>
									
										<option value="EL SALVADOR REPUBBLICA">EL SALVADOR REPUBBLICA</option>
									
										<option value="ERITREA">ERITREA</option>
									
										<option value="ESTONIA">ESTONIA</option>
									
										<option value="ETIOPIA">ETIOPIA</option>
									
										<option value="FAER OER - FAEROERNE FOROYAR">FAER OER - FAEROERNE FOROYAR</option>
									
										<option value="FALKLAND O MALVINE - ISOLE">FALKLAND O MALVINE - ISOLE</option>
									
										<option value="FIGI">FIGI</option>
									
										<option value="FILIPPINE - ISOLE">FILIPPINE - ISOLE</option>
									
										<option value="FINLANDIA">FINLANDIA</option>
									
										<option value="FRANCIA">FRANCIA</option>
									
										<option value="FUJAYRAH">FUJAYRAH</option>
									
										<option value="GABON">GABON</option>
									
										<option value="GAMBIA REPUBBLICA">GAMBIA REPUBBLICA</option>
									
										<option value="GEORGIA">GEORGIA</option>
									
										<option value="GERMANIA REPUBBLICA FEDERALE">GERMANIA REPUBBLICA FEDERALE</option>
									
										<option value="GHANA">GHANA</option>
									
										<option value="GIAMAICA">GIAMAICA</option>
									
										<option value="GIAPPONE">GIAPPONE</option>
									
										<option value="GIBILTERRA">GIBILTERRA</option>
									
										<option value="GIBUTI REPUBBLICA">GIBUTI REPUBBLICA</option>
									
										<option value="GIORDANIA">GIORDANIA</option>
									
										<option value="GOUGH (SANT ELENA)">GOUGH (SANT ELENA)</option>
									
										<option value="GRECIA">GRECIA</option>
									
										<option value="GRENADA">GRENADA</option>
									
										<option value="GROENLANDIA">GROENLANDIA</option>
									
										<option value="GUADALUPA INDIPENDENTE">GUADALUPA INDIPENDENTE</option>
									
										<option value="GUAM">GUAM</option>
									
										<option value="GUATEMALA">GUATEMALA</option>
									
										<option value="GUAYANA FRANCESE">GUAYANA FRANCESE</option>
									
										<option value="GUERNSEY - ISOLA">GUERNSEY - ISOLA</option>
									
										<option value="GUINEA BISSAU REPUBBLICA">GUINEA BISSAU REPUBBLICA</option>
									
										<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
									
										<option value="GUINEA REPUBBLICA POPOLARE">GUINEA REPUBBLICA POPOLARE</option>
									
										<option value="GUYANA">GUYANA</option>
									
										<option value="HAITI">HAITI</option>
									
										<option value="HEARD E MCDONALD ISLANDS">HEARD E MCDONALD ISLANDS</option>
									
										<option value="HONDURAS">HONDURAS</option>
									
										<option value="HONG KONG">HONG KONG</option>
									
										<option value="INDIA">INDIA</option>
									
										<option value="INDONESIA">INDONESIA</option>
									
										<option value="IRAN">IRAN</option>
									
										<option value="IRAQ">IRAQ</option>
									
										<option value="IRLANDA REPUBBLICA DEMOCRATICA">IRLANDA REPUBBLICA DEMOCRATICA</option>
									
										<option value="ISLANDA">ISLANDA</option>
									
										<option value="ISRAELE">ISRAELE</option>
									
										<option value="ITALIA" selected="selected">ITALIA</option>
									
										<option value="JERSEY - ISOLA">JERSEY - ISOLA</option>
									
										<option value="KAZAKISTAN">KAZAKISTAN</option>
									
										<option value="KENYA">KENYA</option>
									
										<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
									
										<option value="KIRIBATI REPUBBLICA">KIRIBATI REPUBBLICA</option>
									
										<option value="KOSOVO">KOSOVO</option>
									
										<option value="KUWAIT">KUWAIT</option>
									
										<option value="LAOS">LAOS</option>
									
										<option value="LESOTHO">LESOTHO</option>
									
										<option value="LETTONIA">LETTONIA</option>
									
										<option value="LIBANO">LIBANO</option>
									
										<option value="LIBERIA">LIBERIA</option>
									
										<option value="LIBIA">LIBIA</option>
									
										<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
									
										<option value="LITUANIA">LITUANIA</option>
									
										<option value="LUSSEMBURGO">LUSSEMBURGO</option>
									
										<option value="MACAO">MACAO</option>
									
										<option value="MACEDONIA">MACEDONIA</option>
									
										<option value="MADAGASCAR REPUBBLICA">MADAGASCAR REPUBBLICA</option>
									
										<option value="MADEIRA">MADEIRA</option>
									
										<option value="MALAWI REPUBBLICA">MALAWI REPUBBLICA</option>
									
										<option value="MALAYSIA">MALAYSIA</option>
									
										<option value="MALDIVE - ISOLE">MALDIVE - ISOLE</option>
									
										<option value="MALI REPUBBLICA">MALI REPUBBLICA</option>
									
										<option value="MALTA">MALTA</option>
									
										<option value="MAN-ISOLA">MAN-ISOLA</option>
									
										<option value="MARIANNE - ISOLE">MARIANNE - ISOLE</option>
									
										<option value="MAROCCO">MAROCCO</option>
									
										<option value="MARSHALL - ISOLE">MARSHALL - ISOLE</option>
									
										<option value="MARTINICA - ISOLA">MARTINICA - ISOLA</option>
									
										<option value="MAURITANIA">MAURITANIA</option>
									
										<option value="MAURIZIO - ISOLE">MAURIZIO - ISOLE</option>
									
										<option value="MAYOTTE - ISOLE">MAYOTTE - ISOLE</option>
									
										<option value="MELILLA (DIP. SPAGN. D AFRICA)">MELILLA (DIP. SPAGN. D AFRICA)</option>
									
										<option value="MESSICO">MESSICO</option>
									
										<option value="MIDWAY - ISOLE">MIDWAY - ISOLE</option>
									
										<option value="MOLDAVIA">MOLDAVIA</option>
									
										<option value="MONGOLIA">MONGOLIA</option>
									
										<option value="MONTENEGRO">MONTENEGRO</option>
									
										<option value="MONTSERRAT">MONTSERRAT</option>
									
										<option value="MOZAMBICO">MOZAMBICO</option>
									
										<option value="NAMIBIA - AFRICA DEL SUD OVEST">NAMIBIA - AFRICA DEL SUD OVEST</option>
									
										<option value="NAURU">NAURU</option>
									
										<option value="NEGARA BRUNEI DARUSSALAM">NEGARA BRUNEI DARUSSALAM</option>
									
										<option value="NEPAL">NEPAL</option>
									
										<option value="NICARAGUA">NICARAGUA</option>
									
										<option value="NIGER">NIGER</option>
									
										<option value="NIGERIA REPUBBLICA">NIGERIA REPUBBLICA</option>
									
										<option value="NIUE O SAVAGE">NIUE O SAVAGE</option>
									
										<option value="NORFOLK ISLANDS">NORFOLK ISLANDS</option>
									
										<option value="NORVEGIA">NORVEGIA</option>
									
										<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
									
										<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
									
										<option value="PAESI BASSI - OLANDA">PAESI BASSI - OLANDA</option>
									
										<option value="PAKISTAN">PAKISTAN</option>
									
										<option value="PALAU REPUBBLICA">PALAU REPUBBLICA</option>
									
										<option value="PALESTINA">PALESTINA</option>
									
										<option value="PANAMA">PANAMA</option>
									
										<option value="PAPUA NUOVA GUINEA">PAPUA NUOVA GUINEA</option>
									
										<option value="PARAGUAY">PARAGUAY</option>
									
										<option value="PENON DE ALHUCEMAS - ISOLE">PENON DE ALHUCEMAS - ISOLE</option>
									
										<option value="PENON DE VELEZ DE LA GOMERA">PENON DE VELEZ DE LA GOMERA</option>
									
										<option value="PERU">PERU</option>
									
										<option value="POLINESIA FRANCESE">POLINESIA FRANCESE</option>
									
										<option value="POLONIA">POLONIA</option>
									
										<option value="PORTOGALLO">PORTOGALLO</option>
									
										<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
									
										<option value="PUERTO RICO">PUERTO RICO</option>
									
										<option value="QATAR">QATAR</option>
									
										<option value="RAS AL KHAIMAH">RAS AL KHAIMAH</option>
									
										<option value="REGNO UNITO DI GRAN BRETAGNA I">REGNO UNITO DI GRAN BRETAGNA I</option>
									
										<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
									
										<option value="REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
									
										<option value="RIUNIONE - ISOLA(DIP. FRANC. D">RIUNIONE - ISOLA(DIP. FRANC. D</option>
									
										<option value="ROMANIA">ROMANIA</option>
									
										<option value="RUANDA">RUANDA</option>
									
										<option value="RUSSIA (FEDERAZIONE DI)">RUSSIA (FEDERAZIONE DI)</option>
									
										<option value="SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
									
										<option value="SAINT BARTHELEMY">SAINT BARTHELEMY</option>
									
										<option value="SAINT CHRISTOPHER - NEVIS">SAINT CHRISTOPHER - NEVIS</option>
									
										<option value="SAINT LUCIA">SAINT LUCIA</option>
									
										<option value="SAINT MARTIN">SAINT MARTIN</option>
									
										<option value="SAINT PIERRE E MIQUELON">SAINT PIERRE E MIQUELON</option>
									
										<option value="SAINT VINCENT E GRENADINE">SAINT VINCENT E GRENADINE</option>
									
										<option value="SALOMONE - ISOLE">SALOMONE - ISOLE</option>
									
										<option value="SAMOA AMERICANE">SAMOA AMERICANE</option>
									
										<option value="SAMOA OCCIDENTALI">SAMOA OCCIDENTALI</option>
									
										<option value="SAN MARINO">SAN MARINO</option>
									
										<option value="SANT ELENA">SANT ELENA</option>
									
										<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
									
										<option value="SEICELLE - ISOLE">SEICELLE - ISOLE</option>
									
										<option value="SENEGAL">SENEGAL</option>
									
										<option value="SERBIA">SERBIA</option>
									
										<option value="SHARJAH">SHARJAH</option>
									
										<option value="SIERRA LEONE">SIERRA LEONE</option>
									
										<option value="SINGAPORE">SINGAPORE</option>
									
										<option value="SIRIA">SIRIA</option>
									
										<option value="SLOVACCHIA">SLOVACCHIA</option>
									
										<option value="SLOVENIA">SLOVENIA</option>
									
										<option value="SOMALIA">SOMALIA</option>
									
										<option value="SOUTH GEORGIA E SOUTH SANDWICH">SOUTH GEORGIA E SOUTH SANDWICH</option>
									
										<option value="SPAGNA">SPAGNA</option>
									
										<option value="SRI LANKA/CEYLON">SRI LANKA/CEYLON</option>
									
										<option value="STATI FEDERATI DI MICRONESIA">STATI FEDERATI DI MICRONESIA</option>
									
										<option value="STATI UNITI D AMERICA">STATI UNITI D AMERICA</option>
									
										<option value="SUDAN REPUBBLICA DEMOCRATICA">SUDAN REPUBBLICA DEMOCRATICA</option>
									
										<option value="SULTANATO DI OMAN">SULTANATO DI OMAN</option>
									
										<option value="SURINAME">SURINAME</option>
									
										<option value="SVALBARD E JAN MAYEN ISLANDS">SVALBARD E JAN MAYEN ISLANDS</option>
									
										<option value="SVEZIA">SVEZIA</option>
									
										<option value="SVIZZERA">SVIZZERA</option>
									
										<option value="SWAZILAND">SWAZILAND</option>
									
										<option value="TAGIKISTAN">TAGIKISTAN</option>
									
										<option value="TAIWAN">TAIWAN</option>
									
										<option value="TANZANIA">TANZANIA</option>
									
										<option value="TERR ANTARTICO FRANCESE">TERR ANTARTICO FRANCESE</option>
									
										<option value="TERRIT.BRITAN.OCEANO IND.">TERRIT.BRITAN.OCEANO IND.</option>
									
										<option value="THAILANDIA">THAILANDIA</option>
									
										<option value="TIMOR - LESTE">TIMOR - LESTE</option>
									
										<option value="TOGO REPUBBLICA">TOGO REPUBBLICA</option>
									
										<option value="TONGA">TONGA</option>
									
										<option value="TRINIDAD E TOBAGO REPUBBLICA">TRINIDAD E TOBAGO REPUBBLICA</option>
									
										<option value="TRISTAN DA CUNHA">TRISTAN DA CUNHA</option>
									
										<option value="TUNISIA">TUNISIA</option>
									
										<option value="TURCHIA">TURCHIA</option>
									
										<option value="TURKMENISTAN">TURKMENISTAN</option>
									
										<option value="TURKS E CAICOS">TURKS E CAICOS</option>
									
										<option value="TUVALU - ISOLE">TUVALU - ISOLE</option>
									
										<option value="UCRAINA">UCRAINA</option>
									
										<option value="UGANDA">UGANDA</option>
									
										<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
									
										<option value="UNGHERIA">UNGHERIA</option>
									
										<option value="UNION OF MYANMAR (EX BIRMANIA)">UNION OF MYANMAR (EX BIRMANIA)</option>
									
										<option value="UNIONE TOKELAU - ISOLE">UNIONE TOKELAU - ISOLE</option>
									
										<option value="URUGUAY">URUGUAY</option>
									
										<option value="UZBEKISTAN">UZBEKISTAN</option>
									
										<option value="VANUATU">VANUATU</option>
									
										<option value="VENEZUELA">VENEZUELA</option>
									
										<option value="VERGINI - ISOLE AMERICANE">VERGINI - ISOLE AMERICANE</option>
									
										<option value="VERGINI - ISOLE BRITANNICHE">VERGINI - ISOLE BRITANNICHE</option>
									
										<option value="VIET NAM REPUBBLICA SOCIALISTA">VIET NAM REPUBBLICA SOCIALISTA</option>
									
										<option value="WAKE - ISOLA">WAKE - ISOLA</option>
									
										<option value="WALLIS E FUTUNA - ISOLE">WALLIS E FUTUNA - ISOLE</option>
									
										<option value="YEMEN REPUBBLICA ARABA">YEMEN REPUBBLICA ARABA</option>
									
										<option value="ZAMBIA">ZAMBIA</option>
									
										<option value="ZIMBABWE">ZIMBABWE</option></select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
</div>
<div class="pull-right margin-bottom10 margin-top10">
	
	<input type="submit" name="accreditoConferma" value="Avanti" onclick="$('#formAccreditoStipendio').submit()" class="btn btn-primary" alt="Avanti">
</div>