					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					


	<div class="riquadro clearfix">
		

<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});
	
	var formSubmitted=false;
	$('form').submit(function() {
		if (formSubmitted)
			return false;
		else 
			formSubmitted=true;	
		return true;
	});
});
</script>

	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
			<div class="circle current_page">&nbsp;</div>
				<div class="circle ">&nbsp;</div>
				<div class="circle ">&nbsp;</div>
			</div>
			<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>
			<h1>
				<div class="hidden-print hidden-xxs flag disposizioneBonifico">&nbsp;</div>
 				<span>Bonifico per detrazioni</span>
 				<span class="hidden-xs">:&nbsp; compilazione</span>
			</h1>
		<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Bonifico per detrazioni&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
		








	



		<form id="formInserimento" method="post" action="/WEBHT/pagamenti/bonificoDetrazioneConferma.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="f80f071da0c4d3403713bbc74cea576d"></div>
		<input type="hidden" name="dispId" value="3b1320a496ac4297b56a77c4dd6005ac" id="dispId">
		
		<div class="section clearfix">
			<h3 class="titleSection">Rapporto selezionato</h3>
			




  






	
	
		
	








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
					<span class="col-xs-4" id="conto">
						Conto corrente:
					</span>
				    <span class="col-xs-6" id="numero">
				    	00000000	
				    </span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">
				    	MILANO&nbsp;-&nbsp;
				    		
							
								
									2070
								
							
					</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
									88,00
								</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
									88,00
								</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
										0,00
									</strong>
								
								
							
						</span>
					
					
					
				</div>
			
			
			<!-- C'è solo la sezione intestatario -->
			
			
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
										<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|2070|207000000000">
										</td>
									
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
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
														88,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														88,00
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
			<h3 class="titleSection">Inserisci dati</h3>
			



<div class="bs-example">
	<div class="form-group auto">
		<div class="form-field-input col-xs-12 col-sm-4">
			<label class="control-label">Beneficiario</label>
			<div class="form-field">
				<div>
					<select name="codBeneficiario" onchange="popolaBeneficiario()" id="beneficiario" class="form-control  isMobile"><option value="" selected="selected" id="nuovoBen">Nessun beneficiario inserito</option></select>
				</div>
			</div>
		</div>
		
		
		<div class="form-field-input col-xs-12 col-sm-4" id="nomeBen">
			<label class="control-label">Nome beneficiario:</label>
			<div class="form-field">
				<div class="col-xs-9">
					<input type="text" name="nomeBeneficiario" maxlength="35" size="30" value="" onblur="formattaStr(this, 35)" id="nomeBeneficiario" class="form-control">
				</div>
				<div class="col-xs-3">
					<button value="&nbsp;" id="beneficiari" title="Aggiungi/Modifica beneficiario" class="btnAggiungiBeneficiario" role="button" aria-pressed="false"></button>
				</div>				
			</div>
		</div>
		<div class="form-field-input col-xs-12 col-sm-4 nickname" id="nicknameBen" style="display: none;">
			<label class="control-label">Nickname:</label>
			<div class="form-field">
				<input type="text" name="nickname" maxlength="20" size="30" value="" onblur="formattaStr(this, 20)" class="form-control">
			</div>
		</div>
		<div class="col-xs-12">
			<input type="checkbox" name="memorizza" value="S" id="memorizza" style="display:none">
			<input type="hidden" name="memorizza" value="N" id="memorizza" style="display:none">
		</div>
	</div>
</div>
<script type="text/javascript">
function popolaBeneficiario(){
	codice = $("#beneficiario :selected").val();
	changeDatiBeneficiario($("#beneficiario"));
	//compilaBeneficiario(codice, valorizzaDatiBeneficiario);
}


var contoDeposito = false; 
$(function( $, undefined ) {

	
	bpComboBox(changeDatiBeneficiario);

 	if (contoDeposito) {
		$("#beneficiari").hide();
		disabilitaModificaIntestatario($("#formInserimento"));
	}
	
}(jQuery));
</script>

		</div>

		<div class="section clearfix">
			<h3 class="titleSection">Inserisci coordinate beneficiario</h3>
			<div class="bs-example">
				<div class="form-group clearfix">
					
					



	
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
		</div>
		


<div class="section clearfix">
	<h3 class="titleSection">Dati per detrazione</h3>
	<div class="bs-example">
		<div class="form-group clearfix">
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label">Tipologia del bonifico:</label>
				<div class="form-field col-xs-12 col-sm-12 clear-padding">
					<select name="tipologiaDetrazione" class="form-control">
					<option value="ND" selected="selected">Seleziona</option>
					<option value="RISTRUTTURAZIONE_EDILIZIA">Ristrutturazione edilizia - (ART.16-BIS DPR 917/1986)</option>
					<option value="RISPARMIO_ENERGETICO">Risparmio energetico - N.296/2006 ART.1/344 E SEGG.</option>
					<option value="BONUS_ARREDO">Mobili ed elettrodomestici - (art.16 c.2 D.L. 63/2013)</option>
					</select>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label">P.IVA/Cod. Fisc. del beneficiario</label>
				<div class="form-field col-sm-6 col-xs-12 clear-padding">
					<input type="text" name="pIva" maxlength="30" size="30" value="" onblur="formattaStr(this,30);" class="form-control">
				</div>
			</div>
		</div>
				<!-- TIPOLOGIA ORDINANTE -->
				<div class="form-group clearfix padding-top5">
					<div class="form-field-input col-xs-12">
						<label class="control-label">Tipologia dell'ordinante (titolare della detrazione fiscale):</label>
						<div class="form-field col-xs-6 clear-padding">
							<div class="col-sm-5 col-xs-12">
								<input type="radio" name="tipologiaOrdinante" value="PERSONA_FISICA" checked="checked" onclick="modifica()"> Persona fisica
							</div>
							<div class="col-sm-7 col-xs-12">
								<input type="radio" name="tipologiaOrdinante" value="CONDOMINIO" onclick="modifica()"> Condominio
							</div>
						</div>
					</div>
				</div>
				<!-- DETRAENTI -->
				<div class="row" id="bonDet">
					<div class="form-group clearfix padding-top5">
						<div class="form-field-input col-xs-12 clear-padding padding-left10 visible-xs">
							<div class="inside" style="margin-top: 10px; margin-bottom: 10px;">
								<a href="javascript:void(0);" onclick="addDetraente();"><img src="/HT/fe/img/i_plus.png" height="14" width="14" title="aggiungi" alt="aggiungi">
									Aggiungi altro codice fiscale</a>
							</div>
						</div>
						<div class="form-field-input col-sm-6 col-xs-12 clear-padding">
						
							
							
							
								
								
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante ">
								<!-- LABEL ORDINANTE -->
								<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 1:
								<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Bonifico per detrazioni&pagCont=testo02')" class="general-help help-icon hidden-xs">
								<img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

										
										</label>
									
								
								<div class="form-field">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[0]" maxlength="30" size="16" value="WWWWWW00W00W000W" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->									
<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 2:</label>
	<div class="form-field">
		<img src="/HT/fe/img/i_cancella.gif" class="imgsrv imgBtn " title="cancella categoria" onclick="deleteDetraente(this);">
									
			<div class="col-xs-10">
				<input type="text" name="cfOrdinante[1]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
			</div>
	</div>
</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 3:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[2]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 4:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[3]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 5:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[4]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 6:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[5]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 7:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[6]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 8:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[7]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 9:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[8]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 10:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[9]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 11:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[10]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 12:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[11]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 13:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[12]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 14:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[13]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
							<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 15:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[14]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
							
							
							
								
								
									
										
										
									
								
							
			<div class="form-field-input col-sm-6 col-xs-12 codFiscaleOrdinante hide">
								<!-- LABEL ORDINANTE -->
								
									
									
										<label class="control-label tipologiaOrdinantePersonaFisica">Codice fiscale ordinante 16:
										
										</label>
									
								
								<div class="form-field">
									
										<img src="/HT/fe/img/i_cancella.gif
" class="imgsrv imgBtn" title="cancella categoria" onclick="deleteDetraente(this);">
									
									<div class="col-xs-10">
										<input type="text" name="cfOrdinante[15]" maxlength="30" size="16" value="" onblur="formattaStr(this,16);" class="form-control">
									</div>
								</div>
							</div>
						
						</div>
						<div class="form-field-input col-sm-3 clear-padding padding-left10 hidden-xs">
							<div class="inside">
								<a href="javascript:void(0);" onclick="addDetraente();"><img src="/HT/fe/img/i_plus.png
" height="20" width="20" title="aggiungi" alt="aggiungi">
									Aggiungi altro codice fiscale</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="section clearfix">
			<h3 class="titleSection">Dati bonifico</h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Importo</label>
						<div class="form-field">
							<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" style="width:auto;float: left; text-align: right" class="form-control">
							<span style="float: left; padding: 5px;">,</span>
							<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" style="width:auto" class="form-control">&nbsp;EUR
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Data esecuzione
							
							




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Bonifico per detrazioni&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

						</label>
						<div class="form-field">
							<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="datepicker form-control floatl-marginr10 wauto" />
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Causale
							
							




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Bonifico per detrazioni&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

						</label>
						<div class="form-field">
							<div id="counter"></div>
							<textarea id="causale" name="causale" class="form-control" rows="2" cols="35" onchange="upperCase(this)" maxlength="50" placeholder="Esempio: saldo fattura n.5 del 2015"></textarea>
							<!--<textarea id="causaleDetrazione" disabled="disabled" class="form-control" rows="3" cols="35"></textarea>-->
						</div>
					</div>
				</div><!-- .form-group -->
			</div><!-- .bs-example -->
		</div><!-- .section -->
			<div class="section clearfix">
				






<script type="text/javascript">
	var popolaEmail = function(email) {
		$('#email').val(email);
	}
	$(function() {
		var urlAjax = /*getPathContext()+*/ '/template/modale_modifica_contatti.php?popup=true'
		$('#contatti').ajaxDialog('dialog', urlAjax, { title:'Modifica contatti' });
		if ($('#email').val()=='')
			$('#email').val("Inserisci e-mail");
	});
</script>

	<h3 class="titleSection">Notifica all'ordinante</h3>
	<div class="bs-example form-horizontal">
	<div class="form-group">
		<div class="form-field-input col-sm-6 col-xs-12">
			<div class="form-field-input">
				<label class="control-label">
					La notifica viene inviata nel caso in cui l'ordine non vada a buon fine. Per ricevere la notifica anche in caso di esito positivo accedi alla sezione Alert-&gt;conto
				</label>
			</div>
		</div>
		<div class="form-field-input col-sm-6 col-xs-12">
			<div class="form-field-input">
				<label class="control-label">
					
					Indirizzo e-mail




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Bonifico per detrazioni&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

				</label>
				<div class="form-field">
					<div class="form-field-input col-sm-10 col-xs-12"> 
						<input type="text" name="email" maxlength="60" value="NOMECOGNOME@DOMINIO.IT" readonly="readonly" id="email" class="form-control">
					</div>
					<div class="form-field-input col-sm-2 hidden-xs">
						<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
					</div>
				</div>
			</div>
		</div>
	</div></div>

			</div>
		
		





<style>
.no-close .ui-dialog-titlebar-close {
	display: none;
}
</style>


<input type="hidden" name="vistoTitolareEffettivo" value="N" id="vistoTitolareEffettivo">

 
 
 
 <div class="modal fade bs-example-modal-lg helpDialogTitolareAnnulla helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body clearfix">
			<div class="col-xs-12  col-sm-10 col-sm-offset-1">
				<div class="riquadro clearifx margin-bottom-xs-10">
					<h1>
					<div class="flag hidden-xxs info">&nbsp;</div>
						Conferma titolare effettivo
					</h1>
					<div class="row  messagePanel error" style="display:block">
					<h3 class="titleSection">Messaggio al cliente</h3>
					
						<div class="col-xs-9">
						<p style="font-weight:bold">
						   Non è possibile effettuare online bonifici di importo uguale o superiore a 5.000 euro&nbsp;per conto di una persona diversa dagli intestatari del conto.<br>
					   	</p><br>
					   	<p style="font-weight:normal">
							Per effettuare la disposizione rivolgiti alla tua filiale.<br>
						</p><br>
						<p style="font-weight:normal">
							Per info contatta l'assistenza.<br>
						</p>
						
						</div>
					</div>
				</div>
				<div class="pull-right">
					<div class="col-xs-12">
						<input id="btnSgancio2Chiudi" type="button" value="Chiudi" class="btn btn-primary pull-right ">
						</div>
						</div>
						
				</div>
			</div>
			<br>
		</div>
    </div>
  </div>

 
<div class="modal fade bs-example-modal-lg helpDialogTitolare helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body clearfix">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div class="riquadro clearifx margin-bottom-xs-10">
			<h1>
				<div class="flag hidden-xxs info">&nbsp;</div>
				Conferma titolare effettivo
			</h1>
					<div class="col-xs-12" style="margin-bottom:5px">
					Stai per inserire un bonifico di importo uguale o superiore a 5.000 euro:
					</div>
					<div class="row">
						<div class="col-xs-2">
							<img src="/HT/IMAGES/app_eseguita.png" border="0" class="img-responsive">
						</div>
						<div class="col-xs-10">
						<strong>
				
							
								
								
									Dichiaro che sto effettuando questo bonifico per mio conto
								
							
						</strong>
						</div>
						<br>
					</div>
				</div>
				<div class="pull-right">
					<input id="btnSgancioConferma" type="button" value="Conferma" class="btn btn-primary pull-right ">
					<input id="btnSgancioAnnulla" type="button" value="Annulla" class="btn btn-primary pull-right ">
				</div>
			</div>
		</div>
    </div>
  </div>
</div>










<script type="text/javascript">
var titEff='';
var urlKO='/pagamenti/bonificoDetrazione.do';
$('document').ready(function(){
	if(titEff=="S"){
		$('.helpDialogTitolare').modal('show');
		//$('#sgancio').dialog({ minWidth: 300, minHeight: 220, modal: true, resizable: false });	
	 	if($('#memorizza').val()=='S'){
	 		visualizzaNickname($('#memorizza'));
	 	}else {
	 		changeDatiBeneficiario($('#beneficiario'));
	 		testABI();
	 	}
	} else {
		$('#vistoTitolareEffettivo').attr('value','N');
	}
	$('#btnSgancioConferma').live('click',function(){
		$( '#sgancio' ).dialog( "close" ); 
		$('.helpDialogTitolare').modal('hide');
		$('#vistoTitolareEffettivo').attr('value','S');	
		$('#formInserimento').submit();
	}) 
	$('#btnSgancioAnnulla').live('click', function(){
		$('.helpDialogTitolare').modal('hide');
		$('.helpDialogTitolareAnnulla').modal('show');
		//$( '#sgancio' ).dialog( "close" );	
		//$('#sgancio2').dialog({ minWidth: 550, minHeight: 270, modal: true, resizable: false, dialogClass: "no-close" });
	}) 
	$('#btnSgancio2Chiudi').live('click', function(){
		var url = getPathContext()+urlKO+'?rifiutoTitEff=true'; 
		//$( '#sgancio2' ).dialog( "close" );
		$('.helpDialogTitolareAnnulla').modal('hide'); 
		$(location).attr('href',url);
	})
})
</script>
		</form>
	</div>
	<p class="small  margin-top10">La Banca è sollevata da ogni responsabilità derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
	<div class="pull-right margin-bottom20">
		<button onclick="$('#formInserimento').submit()" class="btn btn-primary" type="button">Avanti </button>
	</div>

<script type="text/javascript">
var detrazioneTipologia = {

	
	ND: ""
	

	
	,RISTRUTTURAZIONE_EDILIZIA: "RISTRUTT.EDIL.(ART.16-BIS DPR 917/1986)"
	

	
	,RISPARMIO_ENERGETICO: "RISP.ENERG. N.296/2006 ART.1/344 E SEGG."
	

	
	,BONUS_ARREDO: "BONUS ARREDO (ART.16 C.2 D.L. 63/2013)"
	

};

$(function() {
	$("input[name^='cfOrdinante']").change(function(){updateCausale()});
	$('select[name="tipologiaDetrazione"]').change(function(){updateCausale()});
	$('input[name="pIva"]').change(function(){updateCausale()});
	
	$("#causale").attr('placeholder', 'Esempio: saldo fattura n.5 del 2015');

	updateCausale();
	// mostro i codici fiscali gia' compilati
	$(".codFiscaleOrdinante:hidden input").each(function (i, element) {
		if ($(element).val()!=undefined && $(element).val()!="") {
			$($(element).parents(".codFiscaleOrdinante")[0]).removeClass("hide");
		}
	});
});

window.updateCausale = function () {
	var causale = "";
	
	// legge
	var detrazioneTipologiaSelezionata = $('select[name="tipologiaDetrazione"] option:selected').val();
	causale = detrazioneTipologia[detrazioneTipologiaSelezionata];
	if ($.trim(causale)!='') { // se non c'e' la tipologia detrazione, non compongo la causale
		// p.iva.
		if ($('input[name="pIva"]').val()!="") {
			causale += " CFDES:"+$('input[name="pIva"]').val();
		}
		// detraenti
		$("input[name='cfOrdinante[0]']").each(function(i, cfOrdinante) {
			if ($(cfOrdinante).val()!="") {
				causale += " CFORD:"+$(cfOrdinante).val();
			}
		});
	}
	
	$('#causaleDetrazione').val(causale);
}
window.addDetraente = function() {
	$(".codFiscaleOrdinante:hidden").each(function (i, element) {
		$(element).removeClass("hide");
		return false;
	});
}
window.deleteDetraente = function(element) {
	// svuoto il campo
	$(element).parent().find("input").each(function (i, input){
		$(input).val("");
	});
	// nascondo il campo
	$(element).parents(".codFiscaleOrdinante").each(function(i, parent) {
		$(parent).addClass("hide");
		return false;
	});
}
window.modifica = function () {
	$('#formInserimento').append("<input type='hidden' name='modifica' value='modifica' />");
	$('#formInserimento').submit();
}
</script>