					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					


<script type="text/javascript">
	function formattaStr(campo, maxLength) {
		stringa = campo.value;
		var lung = stringa.length;
		if (lung > maxLength) {
			stringa = stringa.substring(0, maxLength);
		}
		stringa = stringa.toUpperCase();
		campo.value = stringa;
	}
	
	function checkOpzionale(){
		if($("#note").hasClass("placeh"))
			$("#note").attr("value", "");
	}
	
	$(document).ready(function(){
		$("#note").live('focus',function(){
			if($(this).hasClass("placeh")){
				$("#note").attr("value", "");
				$("#note").removeClass("placeh");
			}
		});
		$("#note").live('focusout',function(){
			if($(this).attr("value").trim() == ""){
				$("#note").addClass("placeh");
				$("#note").attr("value", "Opzionale");
			}else{
				formattaStr(this, 50);
			}
		});
	});
	
</script>



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
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489100400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
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
		
				
				<div class="hidden-print hidden-xxs flag mav">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Pagamento Bollettino Mav</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino MAV&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
	








	



	
		
		
			
		
	
	<form id="formInserimento" method="post" action="/WEBHT/pagamenti/mavConferma.do" class="form-horizontal" onsubmit="checkOpzionale()"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="c5ab0ec9363c87bac8ed36c1669f1d1c"></div>
		<div class="section clearfix">
			<h3 class="titleSection">
				Selezione Rapporto
			</h3>
			




  






	
	
		
	








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
			<h3 class="titleSection">
				Dati bollettino
			</h3>

	<div class="bs-example">
		<div class="form-group" id="mavId">
			<!-- CODICE MAV -->
			<div class="form-field-input col-xs-12 col-sm-4">
				<label class="control-label" for="codiceMav"> 
					Codice Mav
			<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/MAV.gif',625,290,'popup')">
				<img src="/HT/fe/img/i_dettaglio.gif" height="14" width="14" title="Dettaglio" alt="Dettaglio"> 
			</a>&nbsp;
			
			</label>
			<div class="form-field">
				<input type="text" name="codiceMav" maxlength="17" size="25" value="" id="codiceMav" class="form-control">
			</div>
			</div>
						<!-- IMPORTO -->
                <div class="form-field-input col-xs-12 col-sm-2 clear-padding padding-left-xs-10">
					<label class="control-label" for="importoMav">Importo</label>
						<div class="form-field">
							<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" class="form-control wauto floatl">
							<span style="float: left; padding: 5px">,</span>
							<input type="text" name="importoDec" maxlength="2" size="2" value="00" id="importoDec" class="form-control wauto">
						</div>
				</div>
<!-- 					DATA ESECUZIONE -->
						<div class="form-field-input col-xs-12 col-sm-3">
						<label class="control-label" for="dataEsecuzione"> Data esecuzione  




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino MAV&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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
							<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="form-control datepicker wauto floatl-marginr10" />
						</div>
						
					</div>
					<!-- DESCRIZIONE -->
					<div class="form-field-input col-xs-12 col-sm-3">
						
						<label class="control-label" for="note">Descrizione pagamento </label>
						<div class="form-field">
							<input type="text" name="note" maxlength="50" size="60" value="Opzionale" id="note" class="form-control placeh">
						</div>
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




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino MAV&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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
					<div class="form-field-input col-sm-10 col-xs-10"> 
<input type="text" name="email" maxlength="60" value="aaaaa@aaaa.aa" readonly="readonly" id="email" class="form-control">
					</div>
					<div class="form-field-input col-sm-2">
						<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
					</div>
				</div>
			</div>
		</div>
	</div></div>

		</div>
	</form>
</div>


<!-- 	styleClass="btn pull-right"> -->



<div class="pull-right margin-bottom20">
	<!-- 		<button type="button" class="btn  btn-primary" >Annulla</button> -->
	<button onclick="$('#formInserimento').submit()" class="btn btn-primary" type="button">Avanti</button>
</div>