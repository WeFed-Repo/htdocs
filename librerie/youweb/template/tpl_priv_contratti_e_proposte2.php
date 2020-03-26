					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/05/2017	
						</div>
					</div>
					
					
					
					




					
					



<script type="text/javascript" language="javascript" src="/HT/JS/jquery.tooltipster.min.js"></script>
<link rel="Stylesheet" type="text/css" href="/HT/CSS/tooltipster.css">
<div class="riquadro clearfix">
	
	

	
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag proposte">&nbsp;</div>
			
			
		
		
			
		
		
			
				Contratti e Proposte
			
		
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	



	



<script type="text/javascript">
<!--
window.richiestaOtpAccessoEasyDialog = function(requestPathVar) {
	var buttonX = "<button type='button' class='close' data-dismiss='modal' aria-label='Chiudi'><span aria-hidden='true'>&times;</span></button>";
	var modalDialog = "<div id='dialogAccessoEasy' class='modal fade helpDialog'>" +
						"<div class='modal-dialog'>" +
							"<div class='modal-content'>" +
								"<div class='modal-header clearfix'>" + buttonX + "</div>" +
								"<div id='dialogAccessoEasyBody' class='modal-body clearfix'></div>" +
							"</div>" +
						"</div>" +
						"</div>"
	$(modalDialog).appendTo('body');

	$.ajax({
   		method : 'GET',
   		data: { requestPath: requestPathVar},
   		url: getPathContext()+ '/accesso/richiestaOtpPopup.do',
   		success: function(data) {
     		$("#dialogAccessoEasyBody").html(data);
     		$("#dialogAccessoEasy").modal('show');
   		}
	});
}
//-->
</script>
	


<script type="text/javascript">
$(function() {
	// aggiungo evento click alle checkbox
	$("input[name='idDocumenti']").click(function() {
		abilitaScaricaTutti();
		abilitaArchivia();
	});
	// nasconde il caricamento
	$("#loading").hide();
	$('#tutti').on('click', function(){
		var selezionaTutti = $(this).prop('checked');
		$(document).find('.chkBoxNuovi').each(function(){
			$(this).prop('checked', selezionaTutti);
		});
		abilitaScaricaTutti();
		abilitaArchivia();
	});

	// mantengo il valore del bottone selezionato
	submitButton = null;
	$(":submit").click(function() {
		submitButton = $(this).attr("name");
	});
	
	// catturo il form submit
	$("#formPostaPersonale").submit(function(event) {
		if (submitButton!='archiviaDocumenti'
			&& scaricaTutti()==false) {
			event.preventDefault();
			return false;
		}
		return true;
	});
});

window.abilitaArchivia = function() {
	if ($('#btnArchivia').size()>0) {
		if ($("input[name='idDocumenti']:checked").size()>0) {
			$('#btnArchivia').removeClass('disabled');
			$('#btnArchivia').removeAttr('disabled');
		}
		else {
			$('#btnArchivia').addClass('disabled');
			$('#btnArchivia').attr('disabled','disabled');
		}
	}
}

window.scaricaTutti = function (){

	
	
	$(document).find('.chkBoxNuovi').each(function(){
		var checked = $(this).prop('checked');
		var daEscludere = $(this).hasClass('daEscludereDalConteggio');
		var id = $(this).attr('id');
		if (!daEscludere && checked) {
			var idDoc = $(this).next().text();
			try {
				apriBusta(''+idDoc, 'false', '/HT/IMAGES/nGrafica/busta_ricevuta.png');
			}
			catch(err){}
		}
	});
	return true;
		

};

function leggiPdf(elem, idDoc, isLetto, nomeOpen) {



	apriBusta(idDoc, isLetto, nomeOpen);
	OpenWindow('/WEBHT/pp/leggiPdf?azione=salva&idToken='+idDoc, '_blank');
	

}

function apriBusta(idDoc, isLetto, nomeOpen) {
    if(isLetto == "false"){
		document.getElementById("divImgBustaClosed" + idDoc).src = nomeOpen;	
	}
}

// abilita il pulsante scaricaTutti
window.abilitaScaricaTutti = function() {
	var counter = 0;
	$(document).find('.chkBoxNuovi').each(function() {
		var checked = $(this).prop('checked');
		var daEscludere = $(this).hasClass('daEscludereDalConteggio');
		if (!daEscludere && checked) {
			counter = counter+1;
		}
	});
	if (counter>1) {
		$('#btnScaricaTutti').removeClass('disabled');
		$('#btnScaricaTutti').removeAttr('disabled');
	}
	else {
		$('#btnScaricaTutti').addClass('disabled');
		$('#btnScaricaTutti').attr('disabled','disabled');
	}
}
</script>

	<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte.do">
		<div class="section clearfix">

			<h3 class="titleSection">
			Parametri di ricerca					
		</h3>
			<div class="context-buttons row" style="float: right">
				<a href="#" title="mostra parametri di ricerca" id="btnRicerca" class="btnSelezioneOpen pull-right" onclick="javascript:mostraRicerca()" role="button" aria-pressed="false"> </a>
			</div>
			<div class="toggleOpenBox col-xs-12">
				<div class="CCselezionato clearfix">
					
					
						Ultime richieste:
						<b>Ultime richieste: 10 </b>
					
					
					
				</div>
			</div>

<div class="bs-example form-horizontal toggleOpenBox" style="display: none">
	<div class="row">
		<div class="form-group">

			<div class="col-xs-12">
				<div class="row">

	<div class="form-field-input col-xs-12 col-sm-6">
		<input type="radio" name="radioCheck" value="rcl" checked="checked" id="radioChkLstReq" class="control-label">Ultime richieste
			<select name="ultimeRichieste" id="ultimeRichieste" class="form-control">	
				<option value="10" selected="">Ultime10</option>
				<option value="20">Ultime20</option>
				<option value="30">Ultime30</option>
			</select>
	</div>

	<div class="form-field-input col-xs-12 col-sm-6">
		<input type="radio" name="radioCheck" value="rcd" id="radioChkDate" class="control-label">Data richiesta
		<br>
		<div class="col-xs-12 col-sm-6">
			<div class="form-field">
				<span> Dal </span>
					<input type="text" name="dataInizio" maxlength="16" size="16" value="15/02/2017" id="15/02/2017" class="calendarioDefault form-control wauto hasDatepicker" disabled="">
					<img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="form-field">
				<span> Al </span>
					<input type="text" name="dataFine" maxlength="16" size="16" value="16/05/2017" id="16/05/2017" class="wauto form-control calendarioDefault hasDatepicker" disabled=""><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
				
			</div>
		</div>
	</div>

							</div>
						</div>

						<div class="form-field-input col-xs-12 col-sm-6" style="padding-left:24px">
							<label class="control-label" for="tipoPosta"> Descrizione </label>
							<div class="form-field">
								<input type="text" name="descrizione" value="" id="" class="form-control">
							</div>
						</div>

					</div>
				</div>
				
				<div class="form-field-input col-xs-12">
					<div class="pull-right margin-top10">
						<input type="submit" name="ricercaContrattiProposte" value="RICERCA" id="bConferma" class="btn btn-primary" alt="RICERCA">
					</div>
				</div>
			</div>





		</div>

	</form>








	<div class="section clearfix">
		<div class="selezioneCC">
			<div id="loading" class="caricamentoAjax" style="display: none;">
				<img src="/HT/IMAGES/caricamento.gif">
			</div>
			<div class="table-responsive tabSelezioneCarte" style="display: block;" id="tableContrattiProposte">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
					<table class="table table-striped no-footer dataTable" id="DataTables_Table_10" role="grid">
						<colgroup>
							<col width="10%">
							<col width="10%">
							<col width="35%">
							<col width="27%">
							<col width="5%">
							<col width="5%">
							<col width="8%">
						</colgroup>
	<thead>
		<tr class="hover thpadding" role="row">
			<th style="width: 57px;" class="sorting" rowspan="1" colspan="1" tabindex="0" aria-controls="DataTables_Table_10" aria-label="Data Richiesta
			: ordinamento crescente">
				Data Richiesta
			</th>
			<th style="width: 57px;" class="sorting" rowspan="1" colspan="1" tabindex="0" aria-controls="DataTables_Table_10" aria-label="Data Apertura
			: ordinamento crescente">
				Data Apertura
			</th><th style="width: 208px;" class="sorting" rowspan="1" colspan="1" tabindex="0" aria-controls="DataTables_Table_10" aria-label="Descrizione
			: ordinamento crescente">Descrizione
			</th><th style="width: 163px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Intestazione
			">Intestazione
			</th><th style="width: 120px;" class="sorting" rowspan="1" colspan="1" tabindex="0" aria-controls="DataTables_Table_10" aria-label="Stato
			: ordinamento crescente">Stato
			</th><th style="width: 65px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Documento
			">Documento
			</th><th style="width: 42px;" class="sorting" rowspan="1" colspan="1" tabindex="0" aria-controls="DataTables_Table_10" aria-label="Canale
			: ordinamento crescente">Canale
			</th></tr>
	</thead>

<tbody>
<tr role="row" class="odd">
											
	<td class="text-center">01/12/2016</td>
											
	<td class="text-center"></td>
											
	<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 938</td>
											
	<td style="vertical-align: middle;">MAURO LUCA TALLO</td>
											
	<td class="oCenter">
	<form id="confermaForm" method="post" action="/WEBHT/finanziamento/richiestaFinanziamento.do">
	<input type="hidden" name="idPratica" value="10142814">
	<input type="submit" name="riepilogoDati" value="Richiedi finanziamento" class="btn thin btn-primary" alt="Richiedi finanziamento">
	</form>
	</td>
	<td class="text-center">
													
<!-- DO NOTHING -->
	</td>
											
	<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
												
</tr>
<tr role="row" class="even">
	<td class="text-center">01/12/2016</td>
	<td class="text-center"></td>
	<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 936</td>
	<td style="vertical-align: middle;">MAURO LUCA TALLO</td>
	<td class="oCenter">
	<form id="confermaForm" method="post" action="/WEBHT/finanziamento/richiestaFinanziamento.do">
	<input type="hidden" name="idPratica" value="364466148">
	<input type="submit" name="riepilogoDati" value="Richiedi finanziamento" class="btn thin btn-primary" alt="Richiedi finanziamento">
	</form>
	</td>
	<td class="text-center">
	<!-- DO NOTHING -->
	</td>
	<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
</tr>
<tr role="row" class="odd">
	<td class="text-center">07/12/2016</td>
	<td class="text-center"></td>
	<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 949</td>
	<td style="vertical-align: middle;">MAURO LUCA TALLO</td>
	<td class="oCenter">
		<p style="min-width: 80px; font-weight: bold;">In lavorazione</p>
	</td>
	<td class="text-center">
		<!-- DO NOTHING -->
	</td>
	<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
</tr>
<tr role="row" class="even">
	<td class="text-center">01/12/2016</td>
	<td class="text-center"></td>
	<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 945</td>
	<td style="vertical-align: middle;">MAURO LUCA TALLO</td>
	<td class="oCenter"><p style="min-width: 80px; font-weight: bold;">In lavorazione</p></td>
	<td class="text-center">
		<!-- DO NOTHING -->
	</td>
	<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
</tr>
<tr role="row" class="odd">
	<td class="text-center">01/12/2016</td>
	<td class="text-center"></td>
	<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 942</td>
	<td style="vertical-align: middle;">MAURO LUCA TALLO</td>
	<td class="oCenter"><p style="min-width: 80px; font-weight: bold;">In lavorazione</p></td>
	<td class="text-center">
	<!-- DO NOTHING -->
	</td>
	<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
</tr>
<tr role="row" class="even">
											
		<td class="text-center">09/12/2016
		</td>
		
		<td class="text-center">24/02/2017
		</td>
		
		<td style="vertical-align: middle;">Modulo Informazione ai Depositanti </td>
		
		<td style="vertical-align: middle;">LLLT AUM AAOORCU
		</td>
		<td class="oCenter">
															
															
															
															
															
															
																<p style="min-width: 80px; font-weight: bold;">
																	Pratica evasa
																</p>
															
														</td>
												
											
											
											<td class="text-center">
													
													
														
															
															
																<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte/download.do" target="_blank">
																	<input type="hidden" name="documentToken" value="g48vn6K_YBZZGoMu3No4jU58lJ1KBN5HMXYkuxAhzmd6BZ2L3jRnH1c3u7O5ZhMLyXanTCG0aDHCqDHCNW7m|null">
																	<input type="hidden" name="documentName" value="Modulo Informazione ai Depositanti ">
																	<input type="image" name="downloadDocumento" src="/HT/IMAGES/ico_pdf2.gif" value="" class="pdfDownloadButton">
																</form>
															
															
														
													
												</td>
											
											
												
												
													<td class="oCenter" align="center"><img src="/HT/IMAGES/filiale.gif"></td>
												
												
											

										</tr><tr role="row" class="odd">
											
											<td class="text-center">09/12/2016
											</td>
											
											<td class="text-center">24/02/2017
											</td>
											
											<td style="vertical-align: middle;">Servizi multipli </td>
											
											<td style="vertical-align: middle;">LLLT AUM AAOORCU
											</td>
											
											
											
												
												
												
													<td class="oCenter">
															
															
															
															
															
															
																<p style="min-width: 80px; font-weight: bold;">
																	Pratica evasa
																</p>
															
														</td>
												
											
											
											<td class="text-center">
													
													
														
															
															
																<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte/download.do" target="_blank">
																	<input type="hidden" name="documentToken" value="g48vn6K_YBZZGoMu3No4jU58lJ1KBN5HMXYkuxAhzmF6Bp2L3jRnH1c3u7O5ZkhczSGnTCG0aDHCqDHCNW7m|null">
																	<input type="hidden" name="documentName" value="Servizi multipli ">
																	<input type="image" name="downloadDocumento" src="/HT/IMAGES/ico_pdf2.gif" value="" class="pdfDownloadButton">
																</form>
															
															
														
													
												</td>
											
											
												
												
													<td class="oCenter" align="center"><img src="/HT/IMAGES/filiale.gif"></td>
												
												
											

										</tr><tr role="row" class="even">
											
											<td class="text-center">09/12/2016
											</td>
											
											<td class="text-center">24/02/2017
											</td>
											
											<td style="vertical-align: middle;">Modulo Informazione ai Depositanti </td>
											
											<td style="vertical-align: middle;">LLLT AUM AAOORCU
											</td>
											
											
											
												
												
												
													<td class="oCenter">
															
															
															
															
															
															
																<p style="min-width: 80px; font-weight: bold;">
																	Pratica evasa
																</p>
															
														</td>
												
											
											
											<td class="text-center">
													
													
														
															
															
																<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte/download.do" target="_blank">
																	<input type="hidden" name="documentToken" value="g48vn6K_YBZZGoMu3No4jU58lJ1KBN5HMXYkuxAhzmF7X8qL3jRnH1c3u7O5ZkhczSCnTCG0aDHCqDHCNW7m|null">
																	<input type="hidden" name="documentName" value="Modulo Informazione ai Depositanti ">
																	<input type="image" name="downloadDocumento" src="/HT/IMAGES/ico_pdf2.gif" value="" class="pdfDownloadButton">
																</form>
															
															
														
													
												</td>
											
											
												
												
													<td class="oCenter" align="center"><img src="/HT/IMAGES/filiale.gif"></td>
												
												
											

										</tr><tr role="row" class="odd">
											
											<td class="text-center">09/12/2016
											</td>
											
											<td class="text-center">24/02/2017
											</td>
											
											<td style="vertical-align: middle;">Servizi multipli </td>
											
											<td style="vertical-align: middle;">LLLT AUM AAOORCU
											</td>
											
											
											
												
												
												
													<td class="oCenter">
															
															
															
															
															
															
																<p style="min-width: 80px; font-weight: bold;">
																	Pratica evasa
																</p>
															
														</td>
												
											
											
											<td class="text-center">
													
													
														
															
															
																<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte/download.do" target="_blank">
																	<input type="hidden" name="documentToken" value="g48vn6K_YBZZGoMu3No4jU58lJ1KBN5HMXYkuxAhzmd7Bp-L3jRnH1c3u7O5ZhMLyXGnTCG0aDHCqDHCNW7m|null">
																	<input type="hidden" name="documentName" value="Servizi multipli ">
																	<input type="image" name="downloadDocumento" src="/HT/IMAGES/ico_pdf2.gif" value="" class="pdfDownloadButton">
																</form>
															
															
														
													
												</td>
											
											
												
												
													<td class="oCenter" align="center"><img src="/HT/IMAGES/filiale.gif"></td>
												
												
											

										</tr><tr role="row" class="even">
											
											<td class="text-center">01/12/2016
											</td>
											
											<td class="text-center">
											</td>
											
											<td style="vertical-align: middle;">Richiesta Finanziamento YouShop ordine n. 943</td>
											
											<td style="vertical-align: middle;">MAURO LUCA TALLO
											</td>
											
											
											
												
												
												
													<td class="oCenter">
															
															
															
															
															
															
																<p style="min-width: 80px; font-weight: bold;">
																	Chiusa
																</p>
															
														</td>
												
											
											
											<td class="text-center">
													
													
														
															
															
															
																<!-- DO NOTHING -->
															
														
													
												</td>
											
											
												
													<td class="oCenter" align="center"><img src="/HT/IMAGES/IHIH.png"></td>
												
												
												
											

										</tr></tbody>
							</table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_10_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_10" data-dt-idx="0" tabindex="0" id="DataTables_Table_10_previous">&lt;&lt;</a><span><a class="paginate_button current" aria-controls="DataTables_Table_10" data-dt-idx="1" tabindex="0" style="display: none;">1</a></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_10" data-dt-idx="2" tabindex="0" id="DataTables_Table_10_next">&gt;&gt;</a></div></div>
						</div>
					</div>
				</div>
				<script>
					$(function() {
						$(".tooltips").tooltipster();
					});
				</script>
			
		
	</div>
</div>

<script type="text/javascript">
	function mostraRicerca() {
		if ($("#btnRicerca").hasClass("btnSelezioneOpen")) {
			$("#btnRicerca").removeClass("btnSelezioneOpen").addClass("btnSelezioneClose");
			$("#btnRicerca").attr("aria-pressed", "true");
			$("#btnRicerca").attr("title", "nascondi parametri di ricerca");
		} else {
			$("#btnRicerca").removeClass("btnSelezioneClose").addClass("btnSelezioneOpen");
			$("#btnRicerca").attr("aria-pressed", "false");
			$("#btnRicerca").attr("title", "mostra parametri di ricerca");
		}
		$(".toggleOpenBox").toggle();
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {

		$('.calendarioDefault').datepicker({
			buttonImage : '/HT/IMAGES/nGrafica/calendar.png'
		});

		if ($("#radioChkLstReq").is(':checked')) {
			$("input[name='dataInizio']").attr('disabled', true);// disabilita la select della selezione range di date e pulise il campo delle date
			$("input[name='dataFine']").attr('disabled', true);// disabilita la select della selezione range di date e pulise il campo delle date
			$(".calendarioDefault").datepicker("option", "disabled", true);
		}

		if ($("#radioChkDate").is(':checked')) {
			$('#ultimeRichieste').attr('disabled', true);// disabilita la select delle ultime richieste
		}

		$("input:radio").live('click', function() {
			var id = $(this).attr("id");
			if (id == "radioChkDate") { //se il check è sul radioBtn della selezione range di date
				$('#ultimeRichieste').attr('disabled', true);// disabilita la select delle ultime richieste
				$("input[name='dataInizio']").attr('disabled', false);// abilita la select della selezione range di date
				$("input[name='dataFine']").attr('disabled', false);// abilita la select della selezione range di date
				$(".calendarioDefault").datepicker("option", "disabled", false);
			} else { //se il check è sul radioBtn delle ultime richieste
				$('#ultimeRichieste').attr('disabled', false);// abilita la select delle ultime richieste
				$("input[name='dataInizio']").attr('disabled', true);// disabilita la select della selezione range di date e pulise il campo delle date
				$("input[name='dataFine']").attr('disabled', true);// disabilita la select della selezione range di date e pulise il campo delle date
				$(".calendarioDefault").datepicker("option", "disabled", true);
			}
		});

		if ($('.tabSelezioneCarte table').length > 0) {
			$('.tabSelezioneCarte table').dataTable({
				destroy : true,
				"paging" : true,
				"ordering" : true,
				"order" : [],
				"info" : false,
				"searching" : false,
				"pagingType" : "simple_numbers",
				"bLengthChange" : false,
				"lengthMenu" : [ 10 ],
				columnDefs : [ {
					targets : [ 3, 5 ],
					orderable : false
				}, {
					targets : [ 0, 1 ],
					type : "date-it"
				}, {
					targets : [ 2, 6 ],
					type : "natural"
				} ],
				"language" : {
					"lengthMenu" : "Mostra _MENU_ risultati per pagina",
					"zeroRecords" : "Nessun risultato trovato",
					"info" : "Pagina _PAGE_ di _PAGES_",
					"infoEmpty" : "Nessun record trovato",
					"infoFiltered" : "(filtered from _MAX_ total records)",
					"paginate" : {
						"first" : "Prima",
						"last" : "Ultima",
						"next" : ">>",
						"previous" : "<<"
					},
					"aria" : {
						"sortAscending" : ": ordinamento crescente",
						"sortDescending" : ": ordinamento decrescente"
					}
				},
				"fnDrawCallback" : function() {
					paginateButtonNumber = $('.paginate_button').not('.disabled').size();
					if (paginateButtonNumber <= 1) {
						$('.paginate_button').not('.disabled')[0].style.display = "none";
					}
				}
			});
		}

	});
</script>