					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							15/03/2017	
						</div>
					</div>
					
					
					







<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(1489532400000),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});
		
	$('.calendarioDefault').datepicker({
		minDate: new Date(1489532400000),
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
			}
			else{
				formattaStr(this, 50);
			}
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
		
				
				<div class="hidden-print hidden-xxs flag freccia">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Pagamento Bollettino Freccia</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino Freccia&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
			Per effettuare il pagamento di un bollettino Freccia compila i campi della sezione 'Dati bollettino' e clicca sul pulsante 'Avanti' per proseguire con l'operazione.
		</div>



			</div>
		
	
</div>
	








	



	<form id="formFreccia" method="post" action="/strutt_priv.php?pag=bollettino_freccia_2&lev1=pagamenti" class="form-horizontal" onsubmit="checkOpzionale()"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="5c532213b00b18ec2ab77fb4eff11896"></div>
		<div class="section clearfix">
			
			<h3 class="titleSection">Rapporto selezionato</h3>
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4 hide" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-10" id="intestazione">
 								Lodtagn Ncei Icsasua Ogearg 		
							
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" checked="checked">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00585163</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Lodtagn Ncei Icsasua Ogearg 		
							
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
						
							
							
								
									
									
										
											
											
												<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700">
												</td>
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00002700</td>
							<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 
									
									
										0004
									
								</td>
							<td headers="intestazioneRapporto">
 								Dna. Ateuodtlia Sgtcc 		
							
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
				








		
			Dati bollettino
		
		
		
		


			</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group">
				<div class="form-field-input col-xs-12 col-sm-9">
					<div class="form-field-input col-xs-12 clear-padding">
						<div class="form-field-input col-xs-12 col-sm-8 clear-padding-left">
							<label for="codiceFreccia1" class="control-label">
								Cod. identific. pagamento 
								<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/FRECCIA.gif',625,290,'popup')">
									<img src="/HT/fe/img/i_dettaglio.gif" height="14" width="14"  title="Dettaglio" alt="Dettaglio">
								</a>&nbsp;
								<a href="#" class="hidden-xs" onclick="javascript:ApriPopup('/HT/IMAGES/PAGAMENTI/BOL/FRECCIA.gif',625,290,'popup')">
									Fac-simile Freccia 
								</a>
							</label>
							<div class="form-field">
								<div class="col-xs-3 col-sm-2">
									<input type="text" name="codiceFreccia1" maxlength="5" size="6" value="" id="codiceFreccia1" style="float:left;margin-right:5px" class="form-control">
								</div>
								<div class="col-xs-offset-1 col-xs-7 col-sm-offset-1 col-sm-6">
									<input type="text" name="codiceFreccia2" maxlength="16" size="17" value="" id="codiceFreccia2" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-field-input col-xs-12 col-sm-4 clear-padding">
							<label for="importoFrecciaString" class="control-label">
									Importo 
							</label>
							<div class="form-field">
									<input type="text" name="importoInt" maxlength="6" size="6" value="" id="importoInt" class="form-control wauto floatl">
									<span style="float:left;padding:0 5px 5px 5px">,</span>
									<input type="text" name="importoDec" maxlength="6" size="2" value="" id="importoInt" class="form-control wauto">
							</div>
						</div>
					</div>
					<div class="form-field-input col-xs-12 clear-padding">
						<label for="coordinateCreditore" class="control-label">
							Coordinate bancarie creditore
						</label>
						<div class="form-field">
							<input type="text" name="coordinateCreditore" maxlength="27" size="27" value="" id="coordinateCreditore" class="form-control">







						</div>
					</div>
						<div class="form-field-input col-xs-12 clear-padding">
							<label for="note" class="control-label">
								Descrizione pagamento
							</label>
							<div class="form-field">
								<input type="text" name="note" maxlength="50" size="55" value="Opzionale" id="note" class="form-control placeh">
							</div>
						</div>
						
						<div class="form-field-input col-xs-6 clear-padding">
							<label for="dataEsecuzione" class="control-label">
								Data esecuzione
									 
								




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino Freccia&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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
 
							</label>
							<div class="form-field">
								<input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="datepicker form-control floatl-marginr10 wauto" />
							</div>
						</div>
						
						
						<div class="form-field-input col-xs-6 clear-padding">
							<label for="codEsenzione" class="control-label">
								Codice esenzione 
							</label>
							<div class="form-field">
								<input type="text" name="codEsenzione" maxlength="1" size="3" value="" id="codEsenzione" class="form-control">
							</div>
						</div>
					</div>
				
					<div class="form-field-input col-xs-12 col-sm-3">
						<div class="form-field-input col-xs-12 clear-padding">
							<label for="cinImporto" class="control-label">
								CIN Importo 
							</label>
							<div class="form-field">
								<input type="text" name="cinImporto" maxlength="1" size="10" value="" id="cinImporto" class="form-control wauto">
							</div>
						</div>
						<div class="form-field-input col-xs-12 clear-padding">
							<label for="cinIntermedio" class="control-label">
								CIN Intermedio 
							</label>
							<div class="form-field">
								<input type="text" name="cinIntermedio" maxlength="1" size="10" value="" id="cinIntermedio" class="form-control wauto">
							</div>
						</div>
						<div class="form-field-input col-xs-12 clear-padding">
							<label for="cinComplessivo" class="control-label">
								CIN Complessivo 
								</label>
							<div class="form-field">
								<input type="text" name="cinComplessivo" maxlength="1" size="10" value="" id="cinComplessivo" class="form-control wauto">
							</div>
						</div>
						<div class="form-field-input col-xs-12 clear-padding">
							<label for="codDivisa" class="control-label">
								Codice divisa 
							</label>
							<div class="form-field">
								<input type="text" name="codDivisa" maxlength="1" size="10" value="" id="codDivisa" class="form-control wauto">
							</div>
						</div>
					</div>
					
			</div>
					
			<div class="form-group">
				<div class="form-field-input col-xs-9">
					
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




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: bollettino Freccia&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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
	</form>

</div>
<div class="pull-right margin-bottom20">
	
	<input type="button" name="avanti" value="Avanti" onclick="$('#formFreccia').submit()" class="btn  btn-primary" alt="Avanti">
</div>