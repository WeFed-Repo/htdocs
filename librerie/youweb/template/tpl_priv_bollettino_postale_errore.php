					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
						</div>
					</div>
					
					
					
					




<script type="text/javascript">
	function formattaStringa(campo, maxElement) {
		stringa = campo.value;
		if (!(maxElement === undefined)) {
			var lung = stringa.length; // lunghezza stringa
			if (lung > maxElement)
				stringa = stringa.substring(0, maxElement);
		}
		stringa = $.trim(stringa);
		stringa = stringa.toUpperCase();
		campo.value = stringa;
	}
	
	function checkOpzionale(){
		if($("#causaleFacoltativo").hasClass("placeh"))
			$("#causaleFacoltativo").attr("value", "");
	}
	
	$(document).ready(function(){
		if ($("#causaleFacoltativo").length != 0) {
			if($.trim($("#causaleFacoltativo").val())=="") {
				$("#causaleFacoltativo").val("Opzionale");
			} else {
				$("#causaleFacoltativo").removeClass("placeh");
			}
		}
		$("#causaleFacoltativo").focus(function() {
			if($(this).hasClass("placeh")){
				$("#causaleFacoltativo").val("");
				$("#causaleFacoltativo").removeClass("placeh");
			}
		});
		$("#causaleFacoltativo").focusout(function(){
			if($.trim($(this).val())== ""){
				$("#causaleFacoltativo").addClass("placeh");
				$("#causaleFacoltativo").val("Opzionale");
			}else{
				formattaStringa(this, 110);
			}
		});
	});
 	
</script>



<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(),
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


<form id="formBollettinoPostale" method="post" action="/WEBHT/pagamenti/bollettiniPostaliConferma.do" class="form-horizontal" onsubmit="checkOpzionale()"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="284ce090b76f902605b1de07090bc4c6"></div>
	<div class="riquadro clearfix">
		<div class="md-col-12 clearfix">
			
			
			
			
			




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
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
		
				
				<div class="hidden-print hidden-xxs flag bollettinoPostale">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Bollettino postale</span>
 					
				
 					
 					<span class="hidden-xs">:&nbsp; compilazione</span>
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=452')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
		</div>
		
		






		
		
		
		



		<div class="col-xs-12 messagePanel clear-padding-topImportant error " style="display: block;" id="errorRiquadro">
			<h3 class="titleSection">
				
						
					
						Attenzione
					
				
			</h3>
			<div>
			<p>
				
				
		    		
						Si e' verificato un errore.<br>Ci scusiamo per il disagio arrecato.
					
					
	    		
				
				
					<br>(GI15-CIN BOLL. ERRATO)
				
				<br>
				<b>Codice errore:</b>  EUV01MIGI0111
			</p>
			</div>
		</div>






	





		<div class="section clearfix">
			<h3 class="titleSection">
				Rapporto selezionato
			</h3>
			
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'� anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">

					 Oes Nalgiocdgtus Gr Iaeaanc
						
					</span>
					<span class="col-xs-4" id="conto">
						Conto corrente:
					</span>
				    <span class="col-xs-6" id="numero">
				    	00585163	
				    </span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">
				    	VERONA AG. 3&nbsp;-&nbsp;
				    		
							
								
									0004
								
							
					</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
									99.999.988.859,58
								</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
									99.999.996.137,57
								</strong>
							
							
						
					</span>
					
						<span id="affidamento"> 
							Affidamento: 
							
								
									<strong>
										10.000,00
									</strong>
								
								
							
						</span>
					
					
					
				</div>
			
			
			<!-- C'� solo la sezione intestatario -->
			
			
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
										<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|0004|000400585163">
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

    //se il conto � gia stato selezionato devo popolarlo via javascript, il default non va bene
    
     
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

		

		<!-- DATI BOLLETTINO -->
		<div class="section clearfix">
			<h3 class="titleSection">
				
				








		
			Dati bollettino
		
		
		
		


			</h3>
			<div class="bs-example">
				<div class="clearfix">
					<div class="form-field-input col-xs-12 col-sm-4">
						
							
							

								<label for="codiceBollettino" class="control-label"> 
									Codice bollettino 
									<a class="hidden-xs" href="#" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOLLETTINI/FACSIMILE_BOLLETTINO_PREMARCATO.jpg',450,275,'popup')">
										<img src="/HT/IMAGES/i_dettaglio.gif" height="14" width="14" title="Dettaglio" alt="Dettaglio"> 
									</a> 
									<a class="hidden-xs" href="#" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOLLETTINI/FACSIMILE_BOLLETTINO_PREMARCATO.jpg',450,275,'popup')">
										Fac-simile 
									</a> 
								</label>
								<div class="form-field">
									<input type="text" name="codiceBollettino" maxlength="18" size="25" value="231231231231231231" id="codiceBollettino" class="form-control">
								</div>
							
						
					</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<label for="importoIntero" class="control-label"> 
							Importo 
						</label>
						<div class="form-field">
							<input type="text" name="importoIntero" maxlength="6" size="6" value="1" id="importoIntero" style="width:auto;float: left; text-align: right;" class="form-control wauto">
							<span style="float: left; padding: 0 5px; margin-top: 8px;">,</span>
							<input type="text" name="importoDecimale" maxlength="2" size="2" value="00" id="importoDecimale" class="form-control wauto">
						</div>
					</div>
					
						<div class="form-field-input col-xs-12 col-sm-5">
							<label for="importoPrestampato" class="control-label"> 
								L'importo � prestampato sul bollettino? 
								 
								




	
	<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=452#premarcato')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>
 
							</label>
							<div class="form-field">
								<div class="col-xs-2">
									<label for="importoPrestampato" class="radio-inline"> 
										<input type="radio" name="codiceNumerico" value="896" id="importoPrestampato"> 
										Si
									</label>
								</div>
								<div class="col-xs-4">
									<label class="radio-inline" for="importoNonPrestampato">
										<input type="radio" name="codiceNumerico" value="674" checked="checked" id="importoNonPrestampato"> 
										No 
									</label>
								</div>
							</div>
						</div>
					
					
				</div>
				<div class="form-group">
					<div class="form-field-input col-xs-12 col-sm-4">
						<label for="numeroCCPostale" class="control-label"> 
							Numero conto corrente postale 
						</label>
						<div class="form-field">
							<input type="text" name="numeroCCPostale" maxlength="12" size="15" value="123123123123" id="numeroCCPostale" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-3">
						<label for="dataEsecuzione" class="control-label"> 
							Data esecuzione 
							* 
							 
							




	
	<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=452#dataEsecuzione')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>
 
						</label>
						<div class="form-field">
							<input type="text" name="dataEsecuzione" size="12" value="15/03/2017" id="dataEsecuzione" class="form-control datepicker wauto floatl-marginr10 hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-5">
						<label for="causale" class="control-label"> 
							Causale 
							
								<span id="labelFacoltativo"></span>
								<div class="form-field">
									<textarea name="causale" cols="50" rows="2" id="causaleFacoltativo" class="form-control placeh"></textarea>
								</div>
							
								
						</label>
					</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			






<script type="text/javascript">
	var popolaEmail = function(email) {
		$('#email').val(email);
	}
	$(function() {
		var urlAjax = getPathContext()+ '/serviziPerTe/modificaContatto.do?popup=true'
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




	
	<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=452#email')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

				</label>
				<div class="form-field">
					<div class="form-field-input col-sm-10 col-xs-12"> 
						<input type="text" name="email" maxlength="60" value="luca@gmail.com" readonly="readonly" id="email" class="form-control">
					</div>
					<div class="form-field-input col-sm-2 hidden-xs">
						<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
					</div>
				</div>
			</div>
		</div>
	</div></div>

		</div>
	</div>
	<div class="pull-right margin-bottom20">
		
		
		<input type="submit" name="modificaBollettino" value="Modifica" class="btn  btn-primary" alt="Modifica">
		<input type="submit" name="confermaBollettino" value="Avanti" class="btn  btn-primary" alt="Avanti">
	</div>
</form> 	