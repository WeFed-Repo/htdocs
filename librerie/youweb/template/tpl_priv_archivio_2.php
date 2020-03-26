	<div class="visible-print-block"> 
		<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
		<div class="pull-right"> 
			16/03/2017	
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
				apriBusta(''+idDoc, 'false', '/HT/fe/img/busta_ricevuta.png');
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


<style type="text/css">
	
</style>

	<form id="formPostaPersonale" method="post" action="/WEBHT/postaPersonale/archivio.do">
	<div style="display:none">
	<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="7b04613eeb827929266bc339aa6319ef">
	</div>
	
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
			Questa sezione ti consente di richiamare i documenti archiviati tramite dei semplici criteri di ricerca. I documenti vengono archiviati in automatico dopo 90 giorni di permanenza nella Posta in arrivo e rimangono consultabili nella sezione "Archivio" per 10 anni. <br>Ti consigliamo in ogni caso di salvare i tuoi documenti su supporto durevole (es. disco fisso del tuo computer) poich&eacute; in caso di chiusura o trasferimento del rapporto presso altra filiale tutta la documentazione non sar&agrave; pi&ugrave; consultabile.
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
								 <span class="col-xs-12" style="font-weight: 600">
								 	Hai selezionato tutti i rapporti </span> 
							</div>	
						</div>				
						<div id="divDati" style="display: none;">					
							<div class="col-xs-12 col-sm-6 clear-padding">
								<span class="col-xs-12 col-sm-4" id="labelIntestatario"> Intestato a: </span>
								<span class="col-xs-12 col-sm-6" id="intestazione"></span> 
								<span class="col-xs-12 col-sm-4" id="conto">
								 	???intestazioneCC.tipo.???
								 </span>
								<span class="col-xs-12 col-sm-6" id="numero"></span>
							</div>
							<div class="col-xs-12 col-sm-6 clear-padding">
								<span class="col-xs-12 col-sm-4" id="conto"> &nbsp; </span>
								<span class="col-xs-12 col-sm-6" id="conto"> &nbsp; </span>
								<span class="col-xs-12 col-sm-4" id="labelFiliale">Filiale: </span>
								 <span class="col-xs-12 col-sm-6" id="agenzia">-</span>
							</div>
						</div>	
						<a id="selezionaCC" href="javascript:void(0);" class="btnSelezioneCC" title="selezione rapporto" role="button" aria-pressed="false">
							<img src="/HT/IMAGES/nGrafica/ico-select.png">
						</a>
					</div>

					<div class="table-responsive tabSelezioneCC" style="display: none;">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							<table class="table table-striped dataTable no-footer" role="grid" id="DataTables_Table_0">
								<tbody>
									<tr id="allTr" role="row" class="odd">
										<td class="hidden sorting_1">
											<input type="radio" name="chiaveRappSelezionato" value="all" checked="checked" id="chiaveRappSelezionato" class="formCampo">
										</td>
										<td headers="intestazioneRapporto">&nbsp;Tutti</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td class="hidden-xs">&nbsp;</td>
									</tr>
									<tr role="row" class="even">
										<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|0004|000400001585" id="chiaveRappSelezionato" class="formCampo"></td>
										<td headers="tipoRapporto">
											Conto corrente
										</td>
										<td headers="ccRapporto">00001585</td>
										<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004</td>
										<td headers="intestazioneRapporto">
											 Niaddeseag Ctavdi
										</td>
									</tr>
									<tr role="row" class="odd">
										<td class="hidden sorting_1">
											<input type="radio" name="chiaveRappSelezionato" value="001|0004|000400585163" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Conto corrente
												</td>
											<td headers="ccRapporto">00585163
											</td>
											<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											<td headers="intestazioneRapporto">
											 Tgscaoisnagail Uoadrn Cg Ee
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|0004|000400002700" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
											Conto corrente
											</td>
											<td headers="ccRapporto">00002700
											</td>
											
												
												
													<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Sg Dn Latetoutaaidcc.
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|0898|089800115895" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													YouCard
												</td>
											<td headers="ccRapporto">*1650
											</td>
											
												
													<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
												
											
											<td headers="intestazioneRapporto">
											 D Ceanscualigat
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="001|0001|000100167285" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													
													Conto deposito
												</td>
											<td headers="ccRapporto">00167285
											</td>
											<td headers="filialeRapporto" class="hidden-xs">SEDE DI VERONA&nbsp;-&nbsp;0001
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Ldctieasuacagn
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="007|0004|000000583508" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Dossier titoli
												</td>
											<td headers="ccRapporto">000000583508
											</td>
											<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Otieu Oc G Gdasenlnsacaraig
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="045|0894|000003304507" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Prestito/Mutuo
												</td>
											<td headers="ccRapporto">03304507
											</td>
											<td headers="filialeRapporto" class="hidden-xs">FILIALE CAE&nbsp;-&nbsp;0894
													</td>
												
											
											<td headers="intestazioneRapporto">
											 G .als Uodaadetitncct
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="045|0004|000000005836" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
												Prestito/Mutuo
												</td>
											<td headers="ccRapporto">00005836
											</td>
											<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											<td headers="intestazioneRapporto">
											 Islgnocoeaaar Tsg Neudg Cia
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="150|0004|000173070001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouCall
												</td>
											<td headers="ccRapporto">000173070001
											</td>
											<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
			
											<td headers="intestazioneRapporto">
											 Da Tat Tciec.usoanldg
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="150|0004|002924544001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouCall
												</td>
											<td headers="ccRapporto">002924544001
											</td>
											
												
												
													<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											
											<td headers="intestazioneRapporto">
											 Dgaiaecaedt Idvns
											</td>
										</tr><tr role="row" class="even">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="151|0004|000015642001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouWeb
												</td>
											<td headers="ccRapporto">000015642001
											</td>
											<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
											
											<td headers="intestazioneRapporto">
											 Dgcaoa. Ndstuiattc El
											</td>
										</tr><tr role="row" class="odd">
											<td class="hidden sorting_1"><input type="radio" name="chiaveRappSelezionato" value="151|0004|002924545001" id="chiaveRappSelezionato" class="formCampo"></td>
											<td headers="tipoRapporto">
													Contratto YouWeb
												</td>
											<td headers="ccRapporto">002924545001
											</td>
										<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004
													</td>
												
											
											<td headers="intestazioneRapporto">
											 As Gtiaicvdeeddan
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
					<div class="form-field-input col-xs-12 col-sm-4" >
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
				
					
				</div>
				<!-- ricerca -->
				<div class="form-field-input col-xs-12">
					<div class="pull-right margin-bottom20 margin-top10">
						<input type="submit" name="archivio" value="ricerca" id="bConferma" class="btn btn-primary" alt="ricerca">
					</div>
				</div>
				<!-- -->
				</div>
			</div>
		</div>
		


			<div class="form-field-input col-xs-12 col-sm-2">
				<label class="control-label"> Trovati 594 documenti  </label>
			</div>

			
			<div class="section clearfix">
			<div id="loading" class="caricamentoAjax" style="display: none;">
				<img src="/HT/IMAGES/caricamento.gif">
			</div>
					<div class="table-responsive " style="display: block;">
	<table id="tableArchivioDocumenti" class="table table-striped dataTable sort" role="grid">
	<colgroup>
		<col width="2%">
		<col width="3%">
		<col width="10%">
		<col width="10%">
		<col width="46%">
		<col width="6%">
		<col width="23%">
	</colgroup>
		<thead>
			<tr class="hover">
				<th><input type="checkbox" class="floatl chkBoxNuovi daEscludereDalConteggio" title="Seleziona tutti" id="tutti"></th>
				<th></th>
				<th class="sort_desc" id="data_rif" campo-ord="DATA_RIFERIMENTO DESC" onclick="ordina($(this))">Data riferimento
				</th>
				<th class="sort_none" id="data_car" campo-ord="DATA_CARICAMENTO DESC" onclick="ordina($(this))">Data caricamento
				</th>
				<th class="sort_none" id="data_rap" campo-ord="RAPPORTO DESC" onclick="ordina($(this))">Riferimento
				</th>
				<th class="sort_none" id="data_sta" campo-ord="LETTO" onclick="ordina($(this))">Stato
				</th>
				<th>Tipo
				</th>
			</tr>
		</thead>
		<tbody>
									
						
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="0" onclick="abilitaScaricaTutti();" id="chk0" class="chkBoxNuovi">
												<span style="display:none;">0</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '0', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>30/09/2016</td>
											<td>12/10/2016</td>
											<td>
													
													
													
													
													
													
													
													
													
														Comunicazione a
														TGSCAOISNAGAIL UOADRN CG EE
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened0" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '0', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Documento di sintesi
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="1" onclick="abilitaScaricaTutti();" id="chk1" class="chkBoxNuovi">
												<span style="display:none;">1</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '1', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>30/09/2016</td>
											<td>12/10/2016</td>
											<td>
													
													
													
													
													
													
													
													
													
														Comunicazione a
														NIADDESEAG CTAVDI
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened1" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '1', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Documento di sintesi
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="2" onclick="abilitaScaricaTutti();" id="chk2" class="chkBoxNuovi">
												<span style="display:none;">2</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '2', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>20/06/2016</td>
											<td>21/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened2" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '2', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Comunicazione
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="3" onclick="abilitaScaricaTutti();" id="chk3" class="chkBoxNuovi">
												<span style="display:none;">3</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '3', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>16/06/2016</td>
											<td>17/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened3" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '3', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Vendita per contanti
													 
													
													</a>
													<!-- 
													
														193,38 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="4" onclick="abilitaScaricaTutti();" id="chk4" class="chkBoxNuovi">
												<span style="display:none;">4</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>15/06/2016</td>
											<td>16/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened4" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Preavviso cedole/rimborsi
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="5" onclick="abilitaScaricaTutti();" id="chk5" class="chkBoxNuovi">
												<span style="display:none;">5</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '5', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>14/06/2016</td>
											<td>15/06/2016</td>
											<td>
													
													
													
														Prestito/Mutuo
														00005836
&nbsp;intestato a 
														ISLGNOCOEAAAR TSG NEUDG CIA
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened5" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '5', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
														Nuovo documento
													
													 
													
													</a>
													<!-- 
													
														319,38 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="6" onclick="abilitaScaricaTutti();" id="chk6" class="chkBoxNuovi">
												<span style="display:none;">6</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '6', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>10/06/2016</td>
											<td>11/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened6" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '6', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Comunicazione
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="7" onclick="abilitaScaricaTutti();" id="chk7" class="chkBoxNuovi">
												<span style="display:none;">7</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '7', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>09/06/2016</td>
											<td>10/06/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened7" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '7', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per beneficiario
													 
													
													</a>
													<!-- 
													
														7,05 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="8" onclick="abilitaScaricaTutti();" id="chk8" class="chkBoxNuovi">
												<span style="display:none;">8</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '8', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>03/06/2016</td>
											<td>04/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened8" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '8', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Contabile
													 
													
													</a>
													<!-- 
													
														9,70 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="9" onclick="abilitaScaricaTutti();" id="chk9" class="chkBoxNuovi">
												<span style="display:none;">9</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '9', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>03/06/2016</td>
											<td>04/06/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened9" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '9', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Aumento di capitale
													 
													
													</a>
													<!-- 
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="10" onclick="abilitaScaricaTutti();" id="chk10" class="chkBoxNuovi">
												<span style="display:none;">10</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '10', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>31/05/2016</td>
											<td>01/06/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened10" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '10', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per beneficiario
													 
													
													</a>
													<!-- 
													
														116,55 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="11" onclick="abilitaScaricaTutti();" id="chk11" class="chkBoxNuovi">
												<span style="display:none;">11</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '11', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>31/05/2016</td>
											<td>01/06/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened11" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '11', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per beneficiario
													 
													
													</a>
													<!-- 
													
														146,10 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="12" onclick="abilitaScaricaTutti();" id="chk12" class="chkBoxNuovi">
												<span style="display:none;">12</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '12', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>25/05/2016</td>
											<td>27/05/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened12" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '12', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Contabile
													 
													
													</a>
													<!-- 
													
														403,26 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="13" onclick="abilitaScaricaTutti();" id="chk13" class="chkBoxNuovi">
												<span style="display:none;">13</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '13', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>17/05/2016</td>
											<td>18/05/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter"> 

													<img class="tooltips" src="/HT/fe/img/busta_ricevuta.png" border="0" id="divImgBustaOpened13" style="visibility: visible">
												</td>
											<td>
												<a onclick="leggiPdf(this, '13', 'true', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per ordinante
													 
													
													</a>
													<!-- 
													
														15,50 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="14" onclick="abilitaScaricaTutti();" id="chk14" class="chkBoxNuovi">
												<span style="display:none;">14</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '14', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>16/05/2016</td>
											<td>17/05/2016</td>
											<td>
													
													
													
														Prestito/Mutuo
														00005836
&nbsp;intestato a 
														ISLGNOCOEAAAR TSG NEUDG CIA
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed14" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '14', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
														Nuovo documento
													
													 
													
													</a>
													<!-- 
													
														319,38 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="15" onclick="abilitaScaricaTutti();" id="chk15" class="chkBoxNuovi">
												<span style="display:none;">15</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '15', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>12/05/2016</td>
											<td>13/05/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed15" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '15', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per ordinante
													 
													
													</a>
													<!-- 
													
														40,00 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="16" onclick="abilitaScaricaTutti();" id="chk16" class="chkBoxNuovi">
												<span style="display:none;">16</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '16', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>11/05/2016</td>
											<td>12/05/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed16" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '16', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per ordinante
													 
													
													</a>
													<!-- 
													
														45,00 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="17" onclick="abilitaScaricaTutti();" id="chk17" class="chkBoxNuovi">
												<span style="display:none;">17</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '17', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>10/05/2016</td>
											<td>11/05/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed17" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '17', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per ordinante
													 
													
													</a>
													<!-- 
													
														27,90 Euro
													
													 -->
												</td>
										</tr>
									
										
											
											
												
											
										
										<tr class="even">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="18" onclick="abilitaScaricaTutti();" id="chk18" class="chkBoxNuovi">
												<span style="display:none;">18</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '18', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>06/05/2016</td>
											<td>10/05/2016</td>
											<td>
													
													
														Dossier
														000000583508
&nbsp;Filiale:&nbsp;VERONA AG. 3&nbsp;-&nbsp;0004&nbsp;intestato a &nbsp;OTIEU OC G GDASENLNSACARAIG
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed18" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '18', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Titoli - Contabile
													 
													
													</a>
													<!-- 
													
														23,53 Euro
													
													 -->
												</td>
										</tr>
									
										
											
												
											
											
										
										<tr class="odd">
											<td> 
												
												<input type="checkbox" name="idDocumenti" value="19" onclick="abilitaScaricaTutti();" id="chk19" class="chkBoxNuovi">
												<span style="display:none;">19</span>					   					
									        </td>
											<td class="oCenter">
												<a onclick="leggiPdf(this, '19', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" target="_blank" href="#"> 
													 <img src="/HT/fe/img/ico_pdf2.gif" alt="apri documento"> 
												</a>
											</td>
											<td>04/05/2016</td>
											<td>05/05/2016</td>
											<td>
													
														
															
															
															
															
															
																Conto corrente
															
														
														
															
															
	                       										 &nbsp;00585163

	                        									Filiale:
	                        									
	                        									&nbsp;&nbsp;VERONA AG. 3&nbsp;-
	                        									
	                        									&nbsp;0004
															
														
														
           													&nbsp;intestato a 
														TGSCAOISNAGAIL UOADRN CG EE
														
													
													
													
													
													
													
													
													
													
												 </td>
											<td class="oCenter">

													<img class="tooltips" src="/HT/fe/img/busta_inviata.png" border="0" id="divImgBustaClosed19" style="visibility: visible">
												 </td>
											<td>
												<a onclick="leggiPdf(this, '19', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#"> 
													
													
														Bonifico - ricevuta per ordinante
													 
													
													</a>
													<!-- 
													
														353,43 Euro
													
													 -->
												</td>
										</tr>
									
								</tbody>
							</table>
					</div>

					
						
						




<!-- Paginazione vecchia -->
<div class="form-field-input col-xs-12 oCenter">
	<div class="form-field-input">	
		<div class="dataTables_paginate paging_simple_numbers">
		<span>
			<a class="current primoBlocco">
				1
			</a>
			<a href="archivio.do?resetForm=false&amp;cmd=archivio&amp;paginaRichiesta=1" class="primoBlocco">
				2
			</a>
			<a href="archivio.do?resetForm=false&amp;cmd=archivio&amp;paginaRichiesta=2" class="primoBlocco">
				3
			</a>
			<span class="paginate_ellipsis">...</span>
			<a href="archivio.do?resetForm=false&amp;cmd=archivio&amp;paginaRichiesta=27" class="ultimoBlocco">
				28
			</a>
			<a href="archivio.do?resetForm=false&amp;cmd=archivio&amp;paginaRichiesta=28" class="ultimoBlocco">
				29
			</a>
			<a href="archivio.do?resetForm=false&amp;cmd=archivio&amp;paginaRichiesta=29" class="ultimoBlocco">
				30
			</a>
		</span>
		</div>
	</div>
</div>

<style type="text/css">
	


</style>


<div class="row">
	<div class="col-sm-12">
		<ul class="newPaginationContainer">
			<li>
				<a href="#!" class="" >
				<span class="newPaginationImg newPaginationDisable">
					<img src="/HT/fe/img/icon_slide_left.png" title="Precedente" alt="Precedente">
				</span>
				</a>
			</li>
			<li>
				<span>
					1
				</span>
			</li>
			<li>
				<span>
					di
				</span>	
			</li>
			<li>
				<span>
					3
				</span>
			</li>
			<li>
				<a href="#!" class="">
					<span class="newPaginationImg">
						<img src="/HT/fe/img/icon_slide_right.png" title="Successivo" alt="Successivo">
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<!-- End Nuova paginazione-->
					
					
			</div>
		
</div>
		
			<div class="pull-right margin-bottom20 margin-top10">
				<input type="submit" name="scaricaTutti" value="Scarica tutti" disabled="disabled" id="btnScaricaTutti" class="btn btn-primary disabled hidden-xs" alt="Scarica tutti">
			</div>
		
	</form>