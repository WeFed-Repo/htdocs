					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
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
<script type="text/javascript" src="/WEBHT/jsp/ht/postaPersonale/archivioDocumentiJavascript.jsp"></script>
<script>
$(document).ready(function(e) {
  	if (isMobile()) 
		$("#tableArchivioDocumenti").cardBoxTable({
			colTitleIdx: 6,
			hideCols: [true,true,false,false,false,false,false],
			/*defaultLabel: ["","Documento","","","","","",""],*/
			show: function() {
				$('.table-responsive').addClass('cardbox-background');
			}
		});
});
</script>
<script type="text/javascript">
function ordina(item){
	var id = $(item).attr("id");
	var campo = $(item).attr('campo-ord');
	var ordinamento = "";

	if(! $(item).hasClass('sort_desc')){
		ordinamento = "sort_desc";
	}else{
		ordinamento = "sort_asc";
		if("LETTO" === campo){
			campo = "NONLETTO";
		}
		if("DATA_RIFERIMENTO DESC" === campo){
			campo = "DATA_RIFERIMENTO ASC";
		}
		if("RAPPORTO DESC" === campo){
			campo = "RAPPORTO ASC";
		}
		if("DATA_CARICAMENTO DESC" === campo){
			campo = "DATA_CARICAMENTO ASC";
		}
	}
	$('input[name="tipoOrdinamento"]').val(campo);
	
	$("table#archivioPosta th").each(function(){
		if($(this).hasClass("sort_desc") || $(this).hasClass("sort_asc")){
			$(this).removeClass().addClass("sort_none");
		}
	})
	$("#"+id).removeClass().addClass(ordinamento);
	$("#archivioPosta").css('opacity', '.5');
	$("#loading").show();
	
	$("form#formPostaPersonale").submit();
}
	
function mostraRicerca(){
	if($("#btnRicerca").hasClass("btnSelezioneOpen")){
		$("#btnRicerca").removeClass("btnSelezioneOpen").addClass("btnSelezioneClose");
		$("#btnRicerca").attr("aria-pressed","true");
		$("#btnRicerca").attr("title","nascondi parametri di ricerca");
	}else{
		$("#btnRicerca").removeClass("btnSelezioneClose").addClass("btnSelezioneOpen");
		$("#btnRicerca").attr("aria-pressed","false");
		$("#btnRicerca").attr("title","mostra parametri di ricerca");
	}
	$(".toggleOpenBox").toggle();
}

var pagina = 0;
function caricaNext(){
	pagina++;
	$.ajax({
		async: true,
		beforeSend:function(){
	        // show gif here, eg:
	        $("#loading").show();
	        $("#next").hide();
	    },
	    complete:function(){
	        // hide gif here, eg:
	        $("#loading").hide();
	        $("#next").show();
	    },
		dataType: 'html',
		url: getPathContext() + '/postaPersonale/archivio.do?resetForm=false&paginazione=true&cmd=archivio&paginaRichiesta='+pagina,
		success: function(response) {
				$("#archivioPosta tbody").append(response);
 		}
	});
}
		
$(document).ready(function() {
	$("#loading").hide();


	
	$("#data_rif").removeClass().addClass('sort_desc');
	

				
	$('#tutti').on('click', function(){
		var selezionaTutti = $(this).prop('checked');
		$(document).find('.chkBoxNuovi').each(function(){
			$(this).prop('checked', selezionaTutti);
		});
		abilitaScaricaTutti();
	});
	$('.calendarioDefault').datepicker({
		buttonImage: '/HT/fe/img/calendar.png'
	});
		

	
	CCselectionInit(true, false, false);
	
	if($("input[name='chiaveRappSelezionato']:checked").val()== "all"){			 
		$('#divAll').show();
		$('#divDati').hide();
	}else{
		$('#divAll').hide();
		$('#divDati').show();
	}
});
</script>
	<form id="formPostaPersonale" method="post" action="/WEBHT/postaPersonale/archivio.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
	
<div class="riquadro clearfix">
	

<div class="clearfix">
	


<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag archivioPostaPersonale">&nbsp;</div>
			
			<span>Archivio</span>
 					
				
	
	</h1>

			<div class="col-xs-12 hidden-xs hidden-print">
				


		<div class="contentPagina">
			Questa sezione ti consente di richiamare i documenti archiviati tramite dei semplici criteri di ricerca. I documenti vengono archiviati in automatico dopo 90 giorni di permanenza nella Posta in arrivo e rimangono consultabili nella sezione "Archivio" per 10 anni. <br>Ti consigliamo in ogni caso di salvare i tuoi documenti su supporto durevole (es. disco fisso del tuo computer) poiché in caso di chiusura o trasferimento del rapporto presso altra filiale tutta la documentazione non sarà più consultabile.
		</div>



			</div>
		
	
</div>
	
	
		<input type="hidden" name="tipoOrdinamento" value="DATA_RIFERIMENTO DESC">
		<input type="hidden" name="resetForm" value="false">
		<div class="divForm">
			<div class="section clearfix">
				<h3 class="titleSection">
					
	
			Posta Personale
	

				</h3>
				
				<div class="selezioneCC tabellaSelezioneCC">

				<div class="col-xs-12">
						<div class="CCselezionato clearfix">
							<div id="divAll">					
							<div class="col-xs-6 clear-padding">
								 <span class="col-xs-12" style="font-weight: 600">Hai selezionato tutti i rapporti </span> 
							</div>	
						</div>				
						
						<div id="divDati" style="display: none;">					
							<div class="col-xs-12 col-sm-6 clear-padding">
								<span class="col-xs-12 col-sm-4" id="labelIntestatario"> Intestato a: </span>
								 <span class="col-xs-12 col-sm-6" id="intestazione"></span> 
								 <span class="col-xs-12 col-sm-4" id="conto">
								 	???intestazioneCC.tipo.???
								 </span>
								<span class="col-xs-12 col-sm-6" id="numero">
									 				
								</span>
							</div>
							<div class="col-xs-12 col-sm-6 clear-padding">
								<span class="col-xs-12 col-sm-4" id="conto"> &nbsp; </span>
								<span class="col-xs-12 col-sm-6" id="conto"> &nbsp; </span>
								<span class="col-xs-12 col-sm-4" id="labelFiliale">Filiale: </span>
								 <span class="col-xs-12 col-sm-6" id="agenzia">
								 	 -  
								</span>
							</div>
						</div>	
						
						
							<a id="selezionaCC" href="javascript:void(0);" class="btnSelezioneCC" title="selezione rapporto" role="button" aria-pressed="false"><img src="/HT/IMAGES/nGrafica/ico-select.png"></a>
						
					</div>

					<div class="table-responsive tabSelezioneCC" style="display: none;">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer" role="grid" id="DataTables_Table_0">
								<tbody>
							
								<tr id="allTr" role="row" class="odd">
										<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="all" checked="checked" id="chiaveRappSelezionato" class="formCampo">
										</td>
										<td headers="intestazioneRapporto">&nbsp;Tutti
										</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td class="hidden-xs">&nbsp;</td>
									</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|2070|207000000000" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													
														Conto corrente
															
										
													
												</td>
											<td headers="ccRapporto">00000000
											</td>
											
												
												
													<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Cognome Nome
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|0898|089800911819" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													
															
																YouCard
															
									
													
													
												</td>
											<td headers="ccRapporto">*9130
											</td>
											
												
													<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070
													</td>
												
												
											
											<td headers="intestazioneRapporto">
											 Cognome Nome
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|2070|207000000000" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
																												
																Conto deposito
															
												</td>
											<td headers="ccRapporto">00000000
											</td>
											
												
												
													<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Cognome Nome
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="150|2070|003525263001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouCall
												</td>
											<td headers="ccRapporto">003525263001
											</td>
					<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Cognome Nome
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="151|2070|003525264001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouWeb
												</td>
											<td headers="ccRapporto">003525264001
											</td>
											<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp;2070
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Cognome Nome
											</td>
										</tr></tbody>
								<thead>
									<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th style="width: 0px;" class="sort_none sorting" headers="tipoRapporto" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tipo rapporto
										: ordinamento crescente">Tipo rapporto
										</th><th style="width: 0px;" class="sort_none sorting" headers="ccRapporto" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Codice rapporto
										: ordinamento crescente">Codice rapporto
										</th><th style="width: 0px;" class="sort_none hidden-xs sorting" headers="filialeRapporto" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Filiale
										: ordinamento crescente">Filiale
										</th><th style="width: 0px;" headers="intestazioneRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Intestazione
										: ordinamento crescente">Intestazione
										</th></tr>
								</thead>
							</table></div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="section clearfix">
			
			<h3 class="titleSection">
			Parametri di ricerca					

			</h3>
			<div class="context-buttons row" style="float:right">
				<a href="#" title="mostra parametri di ricerca" id="btnRicerca" class="btnSelezioneOpen pull-right" onclick="javascript:mostraRicerca()" role="button" aria-pressed="false"> </a>
			</div>
			<div class="toggleOpenBox col-xs-12 ">
				<div class="CCselezionato clearfix">
				Documenti:<b>
			
						Tutti
	
				</b>
				,tipo posta:&nbsp;<b>
	
						Tutta la posta

				</b>
					
				</div>
			</div>
			<div class="bs-example form-horizontal toggleOpenBox" style="display:none">
			<div class="row">
				<div class="form-group">
					<div class="form-field-input col-xs-12 col-sm-4">
						<label class="control-label" for="tipoDocumento"> Documento </label>
						<div class="form-field">
							<select name="tipoDocumento" id="tipoDocumento" class="form-control">
								<option value="all" selected="selected">
									Tutti
								</option>
								<option value="EC01|EC07">
									Estratto di Conto
								</option>
								<option value="SINT">
									Documento di sintesi
								</option>
								<option value="contabili">
									Contabili
								</option>
								<option value="CGAIN">
									Capital Gain
								</option>
							</select>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<label class="control-label" for="tipoPosta"> Tipo di posta </label>
						<div class="form-field">
							<select class="form-control" name="tipoPosta" id="tipoPosta">
								<option value="all" selected="selected">
									Tutta la posta
								</option>
								<option value="0">
									Posta Non letta
								</option>
								<option value="1">
									Posta letta
								</option>
							</select>
						</div>
					</div>



				<!-- -- -- -- -->	
		<div class="form-field-input col-xs-12 col-sm-4">
			<div class="floatl">
				<label class="control-label" for="dataInizio"> Data riferimento dal </label>
				<div class="form-field">
					<input type="text" name="dataInizio" maxlength="10" size="10" value="" id="dataInizio" class="calendarioDefault  form-control wauto hasDatepicker">
					<img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
				</div>
			</div>
			<div class="margin-left20 floatl">
				<label class="control-label" for="dataFine"> fino al </label>
				<div class="form-field">	
					<input type="text" name="dataFine" maxlength="10" size="10" value="" id="dataFine" class="calendarioDefault wauto form-control hasDatepicker">
					<img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
				</div>
			</div>
		</div>
				<!-- -- -- -- -->
					
				</div>
				</div>
			</div>
		</div>
		<!-- conferma -->
		<div class="form-field-input col-xs-12">
			<div class="pull-right margin-bottom20 margin-top10">
				<input type="submit" name="archivio" value="Conferma" id="bConferma" class="btn btn-primary" alt="Conferma">
			</div>
		</div>
		<!-- -->


	<div class="col-xs-12 messagePanel alert warning" style="display: block;">
		<h3 class="titleSection">Messaggio al cliente</h3>
		<div>
		<p>
				- Nessun Documento Trovato<br><br>
		</p>
		</div>
	</div>


		
</div>
		
	</form>