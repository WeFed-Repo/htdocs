<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});

	$('.calendarioDefault').datepicker({
		minDate: new Date(),
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
					<div class="visible-print-block"> 
						<img src="/HT/fe/img/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
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
				apriBusta(''+idDoc, 'false', '/HT/fe/img/closed-mail.png');
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
<script>
$(document).ready(function(e) {
  	if (isMobile()) {
		$("#tableNuoviDocumenti").cardBoxTable({
			colTitleIdx: 6,
			colActionIdx: 0,
			hideColIdx: 1,
			show: function() {
				$(this).find('a[id^="archivia"]').click(function() {
					$(this).next("input[type='checkbox']").prop("checked", true);
					formPostaPersonale.submit();
				});
			},
		});
  	}
});
</script>
<script type="text/javascript">
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
		        // var isError= false;
		    },
			dataType: 'html',
			url: getPathContext() + '/postaPersonale/nuoviDocumenti.do?paginazione=true&paginaRichiesta='+pagina,
			success: function(response) {
				$("table#nuovaPosta tbody").append(response);
	 		}
		});
	}
</script>

<form id="formPostaPersonale" method="post" action="/WEBHT/postaPersonale/archiviaDocumenti.do">
	<input type="hidden" value="NO" name="VALIDA" id="VALIDA">
	<div class="riquadro clearfix">
	<style>
	.imgSrv{
		float: none;
	}
	</style>
	<h1>
		<div class="hidden-print hidden-xxs flag postaArrivo">&nbsp;</div>
		<span>Posta in arrivo</span> 	
	</h1>
	
	
	<div style="float:left; padding-right:10px; margin-bottom:10px" >
		<div class="nosort contentPagina">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et <strong>accumsan eros pharetra.</strong> In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula. Ut sed lacinia augue. Curabitur eleifend faucibus enim, nec volutpat erat sagittis ut. <strong>Sed suscipit, ligula efficitur mattis</strong> suscipit, mauris leo euismod est, ullamcorper placerat sem lacus ac sem. Ut ante arcu, placerat eu ante id, suscipit tristique sapien.</p>
		</div>
	</div>

	
	 
			
	<div class="section clearfix outerWrapperTab no-backgr">
		<div class="row">
			<div class="col-xs-12">
				<div class="innerWrapperTab">	
					<ul>
						<li><a href="strutt_priv_new.php?pag=posta_in_arrivo_new&lev1=posta&wdg=13|14|02|03" title="ULTIMI 90 GIORNI" id="dett_fin" role="button" class="dett_fin">ULTIMI 90 GIORNI</a></li>
						<li class="on"><a href="strutt_priv_new.php?pag=ricerca_in_archivio_new&lev1=posta&wdg=13|14|02|03" title="RICERCA IN ARCHIVIO" id="amm_fin" role="button" class="amm_fin ">RICERCA IN ARCHIVIO</a></li>
					</ul>
				</div>
			</div> 
		</div>		


		
<!-- SELETTORE RAPPORTO-->
		<div class="divForm">
			<form id="formDelegheRid" method="post" action="/WEBHT/cc/delegheRid.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="009a69e58dea5925cea9beca8d22b201"></div>
			<div class="section clearfix">
				<h3 class="titleSection">
					Rapporto selezionato
				</h3>
				<div class="selezioneCC tabellaSelezioneCC">
					<div class="CCselezionato clearfix">
					<!-- C'è anche la sezione saldo -->
					<!-- C'è solo la sezione intestatario -->
						<div class="col-sm-6 col-xs-12">
							<span class="col-xs-4" id="labelIntestatario">Intestato a:</span>
							<span class="col-xs-6" id="intestazione">Iai Daeecadndgstv</span>
							<span class="col-xs-4" id="conto">Conto corrente </span>
							<span class="col-xs-6" id="numero">00001585</span>
						</div>
						<div class="col-sm-6 col-xs-12">
							<span class="col-xs-4 hidden-xs" id="conto">
							&nbsp;
							</span>
							<span class="col-xs-6 hidden-xs" id="conto">
							&nbsp;
							</span>
							<span class="col-xs-4">Filiale:</span>
							<span class="col-xs-6" id="agenzia">VERONA AG. 3&nbsp;-&nbsp;0004</span>
						</div>
						<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
							<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
						</a>
					</div>

					<div class="tabSelezioneCC" style="display: none;">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
								<table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
								<tbody>
									<tr role="row" class="odd">
										<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked"></td>
										<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400001585" checked="checked" onclick="submit();"></td>
										<td headers="tipoRapporto">Conto corrente</td>
										<td headers="ccRapporto">00001585</td>
										<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004</td>
										<td headers="intestazioneRapporto">Iai Daeecadndgstv</td>
										<td headers="divisaSaldoDisponibile" class="hidden"></td>
										<td headers="divisaSaldoContabile" class="hidden"></td>
										<td class="hidden">&nbsp;</td>
									</tr>
									<tr role="row" class="even">
										<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163"></td>
										<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400585163" onclick="submit();"></td>
										<td headers="tipoRapporto">Conto corrente</td>
										<td headers="ccRapporto">00585163</td>
										<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp; 0004</td>
										<td headers="intestazioneRapporto">Oes Nalgiocdgtus Gr Iaeaanc</td>
										<td headers="divisaSaldoDisponibile" class="hidden"></td>
										<td headers="divisaSaldoContabile" class="hidden"></td>
										<td class="hidden">&nbsp;</td>
									</tr>
									<tr role="row" class="odd">
										<td class="hidden sorting_1" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700"></td>
										<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|0004|000400002700" onclick="submit();"></td>
										<td headers="tipoRapporto">Conto corrente</td>
										<td headers="ccRapporto">00002700</td>
										<td headers="filialeRapporto" class="hidden-xs">VERONA AG. 3&nbsp;-&nbsp;0004</td>
										<td headers="intestazioneRapporto">Didugt L. Caetntaosca</td>
										<td headers="divisaSaldoDisponibile" class="hidden"></td>
										<td headers="divisaSaldoContabile" class="hidden"></td>
										<td class="hidden">&nbsp;</td>
									</tr>
								</tbody>
								<thead>
									<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
								</thead>
								</table>
							</div>
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

<!-- FINE SELETTORE RAPPORTO-->

		
	
	
	
	
	
	
	
	
        <div class="bs-example">
			<div class="form-group">
				<!--div class="form-field-input col-xs-12 col-sm-6">
					<label for="nomePolizza" class="control-label">
						Rapporto
					</label>
					<select  name="nomePolizza" value="" id="nomePolizza" class="form-control">
						<option>Tutti</option>
					</select>
				</div-->

				<div class="col-sm-6 col-xs-12 form-field-input">
					<div class="col-xs-12 clearpadding margin-bottom-xs-10">
						<label style="padding-top:2px" for="intervalloPeriodo">
						Periodo (gg/mm/aaaa)
						</label>
					</div>
					<div class="col-xs-12 clearpadding" id="">
						<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
							<span class="float-xs-left">Dal </span>
							<input type="text" name="dataInizio" size="12" value="29/06/2018" id="dataInizio" class="datepicker form-control wauto" />
						</div>
						<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
							<span class="float-xs-left">Al </span>
							<input type="text" name="dataFine" size="12" value="29/06/2018" id="dataFine" class="datepicker form-control wauto" />
						</div>
					</div>
				</div>
				
				<div class="form-field-input col-xs-12 col-sm-3">
					<label for="targaVeicolo" class="control-label">
					Importo
					</label>
					<div class="form-field">
						<input type="text" name="Minimo" value="Minimo" id="" class="form-control">
					</div>
				</div>
				<div class="form-field-input col-xs-12 col-sm-3">
					<label for="targaVeicolo" class="control-label">
					&nbsp;
					</label>
					<div class="form-field">
					<input type="text" name="Massimo" value="Massimo" id="" class="form-control">
					</div>
				</div>

				<!-- VECCHIO CODICE --
				<div class="form-field-input col-sm-6 col-xs-12">
					<label for="dataScadenza" class="control-label">Periodo (gg/mm/aaaa)</label>
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
						<div class="form-field">
							<span class="float-xs-left">Dal </span>
							<input type="text" name="dataScadenza" size="12" value="29/06/2018" id="dataScadenza" class="form-control datepicker wauto floatl-marginr10" />
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
						<div class="form-field">
								<span class="float-xs-left">al </span>
								<input type="text" name="dataScadenza" size="12" value="29/06/2018" id="dataScadenza" class="form-control datepicker wauto floatl-marginr10" />
						</div>
					</div>
				</div>
				-->
			</div>

			<div class="form-group clearFloat">
				<div class="form-field-input col-xs-12 col-sm-6">
				  <label for="nomePolizza" class="control-label">
					Categoria documenti
				  </label>
				  <div class="form-field">
					<select  name="nomePolizza" value="" id="nomePolizza" class="form-control">
						<option>Tutti</option>
					</select>
				  </div>
				</div>
				<div class="form-field-input col-xs-12 col-sm-6">
				  <label for="targaVeicolo" class="control-label">
					Tipologia documenti
				  </label>
				  <div class="form-field">
					<select  name="nomePolizza" value="" id="nomePolizza" class="form-control">
						<option>Tutti</option>
					</select>
				  </div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="form-field-input hidden-xs col-sm-6">
				</div>
				<div class="form-field-input col-xs-12 col-sm-6">
				  <label for="nomePolizza" class="control-label">
					Stato
				  </label>
				  <div class="form-field">
					<select  name="nomePolizza" value="" id="nomePolizza" class="form-control">
						<option>Tutti</option>
					</select>
				  </div>
				</div>
				
			</div>
		</div>
		<div class="pull-right margin-bottom20 margin-top10">
			<input type="submit" name="ricerca" value="Ricerca" id="btnScarica" class="btn btn-primary hidden-xs" alt="Ricerca">
		</div>

		<div class="row margin-bottom0">
			<div class="col-xs-12 docpres">
				Documenti presenti: <strong>xxxxx</strong>
			</div>
		</div>

<!--div class="bs-example">
	<div class="form-group">
		<div class="col-xs-12 docpres">
			Documenti presenti: <strong>xxxxx</strong>
		</div>
	</div>
</div-->

		<div id="listaDocumenti" class="table-responsive" style="display: block;">
			<table id="tableNuoviDocumenti" class="table table-striped sort" role="grid">
			<colgroup>
				<col width="5%">
				<col width="5%">
				<col width="10%">		
				<col width="35%">
				<col width="10%">
				<col width="5%">
				<col width="30%">
			</colgroup>
			<thead>
			<tr class="hover" role="row">
					<th><input type="checkbox" class="chkBoxNuovi daEscludereDalConteggio" title="Seleziona tutti" id="tutti"></th>   
					<th>&nbsp;</th>
					<th class="date sorting sort_none sorting_disabled" title="Data contabile" rowspan="1" colspan="1">Data contabile</th>        	
					<th class="text sorting sort_none sorting_disabled" title="Riferimento" rowspan="1" colspan="1">Riferimento</th>
					<th>Importo</th>
					<th class="text sorting sort_none sorting_disabled" title="Stato" rowspan="1" colspan="1">Stato</th>
					<th class="text sorting sort_none sorting_disabled" title="Tipo" rowspan="1" colspan="1">Tipo</th>
			</tr>
			

			
			
			</thead>
			<tbody>
			<tr class="even">
					<td class="text-center"> 
					   <a class="btn visible-xs" id="archivia">archivia</a>
					   
					   <input type="checkbox" name="idDocumenti" value="0" id="chk0" class="chkBoxNuovi hidden-xs">
					   <span style="display:none;">0</span>
					</td>
					<td>
						<a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/closed-mail.png'); return false;" target="_blank" href="#">
							<img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
						</a>
					</td>                
					<td>
						03/02/2017
					</td>	       
					<td>	
					  Conto corrente
							
							
								
								
									00000000
		&nbsp;Filiale:
									
										&nbsp;MILANO&nbsp;-
									
									&nbsp;2070
								
							
							
								&nbsp;intestato a  COGNOME NOME
							
						
						
						
						
									
						
						
						
						 
					</td>
					<td class="importo positivo oRight">
						1999,99
					</td>		
					<td class="oCenter">
						
							<img src="/HT/fe/img/closed-mail.png" border="0" id="divImgBustaClosed0" style="visibility:visible">					
						
						
					</td>
					<td>
						<a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/closed-mail.png'); return false;" class="testoSmallLink" href="#">
							
							
								Trasferimento tra conti - ricevuta per beneficiario
							 
							
						</a>
						
						<!-- 
						
							5,00 Euro
						
						 -->
					</td>
				</tr>
			
				
			
					
				
				
				
			
				<tr class="odd">
					<td class="text-center"> 
					   <a class="btn  visible-xs" id="archivia0">archivia</a>
					   
					   <input type="checkbox" name="idDocumenti" value="1" id="chk1" class="chkBoxNuovi hidden-xs">
					   <span style="display:none;">1</span>
					</td>
					<td>
						<a onclick="leggiPdf(this, '1', 'false', '/HT/fe/img/closed-mail.png'); return false;" target="_blank" href="#">
							<img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
						</a>
					</td>                
					<td>
						03/02/2017
					</td>
					<td>	
						
							
								
								Conto deposito
								
								
								
							
							
								
								
									00000000
		&nbsp;Filiale:
									
										&nbsp;MILANO&nbsp;-
									
									&nbsp;2070
								
							
							
								&nbsp;intestato a  COGNOME NOME
							
						
						
						
						
									
						
						
						
						 
					</td>
					<td class="importo negativo oRight">
						-1999,99
					</td>	
					<td class="oCenter">
						
							<img src="/HT/fe/img/closed-mail.png" border="0" id="divImgBustaClosed1" style="visibility:visible">					
						
						
					</td>
					<td>
						<a onclick="leggiPdf(this, '1', 'false', '/HT/fe/img/closed-mail.png'); return false;" class="testoSmallLink" href="#">
							
							
								Trasferimento tra conti - ricevuta per ordinante
							 
							
						</a>
						
						<!-- 
						
							5,00 Euro
						
						 -->
					</td>
				</tr>
			
				
				
				
					
				
				
			
				<tr class="even">
					<td class="text-center"> 
					   <a class="btn visible-xs" id="archivia1">archivia</a>
					   
					   <input type="checkbox" name="idDocumenti" value="2" id="chk2" class="chkBoxNuovi hidden-xs">
					   <span style="display:none;">2</span>
					</td>
					<td>
						<a onclick="leggiPdf(this, '2', 'false', '/HT/fe/img/closed-mail.png'); return false;" target="_blank" href="#">
							<img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
						</a>
					</td>                
					<td>
						27/01/2017
					</td>
					<td>	
						
							
								
								
								
								
								Conto corrente
							
							
								
								
									00000000
		&nbsp;Filiale:
									
										&nbsp;MILANO&nbsp;-
									
									&nbsp;2070
								
							
							
								&nbsp;intestato a  COGNOME NOME
							
						
						
						
						
									
						
						
						
						 
					</td>
					<td class="importo positivo oRight">
						1999,99
					</td>	
					<td class="oCenter">
						
							<img src="/HT/fe/img/closed-mail.png" border="0" id="divImgBustaClosed2" style="visibility:visible">					
						
						
					</td>
					<td>
						<a onclick="leggiPdf(this, '2', 'false', '/HT/fe/img/closed-mail.png'); return false;" class="testoSmallLink" href="#">
							
							
								Trasferimento tra conti - ricevuta per ordinante
							 
							
						</a>
						
						<!-- 
						
							10,00 Euro
						
						 -->
					</td>
				</tr>
			
				
				
					
				
				
				
			
				<tr class="odd">
					<td class="text-center"> 
					   <a class="btn visible-xs" id="archivia2">archivia</a>
					   
					   <input type="checkbox" name="idDocumenti" value="3" id="chk3" class="chkBoxNuovi hidden-xs">
					   <span style="display:none;">3</span>
					</td>
					<td>
						<a onclick="leggiPdf(this, '3', 'false', '/HT/fe/img/closed-mail.png'); return false;" target="_blank" href="#">
							<img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
						</a>
					</td>                
					<td>
						27/01/2017
					</td>
					<td>	
						
							
								
								Conto deposito
								
								
								
							
							
								
								
									00000000
		&nbsp;Filiale:
									
										&nbsp;MILANO&nbsp;-
									
									&nbsp;2070
								
							
							
								&nbsp;intestato a  COGNOME NOME
							
						
						
						
						
									
						
						
						
						 
					</td>	
					<td class="importo negativo oRight">
						-1999,99
					</td>	
					<td class="oCenter">
						
							<img src="/HT/fe/img/closed-mail.png" border="0" id="divImgBustaClosed3" style="visibility:visible">					
						
						
					</td>
					<td>
						<a onclick="leggiPdf(this, '3', 'false', '/HT/fe/img/closed-mail.png'); return false;" class="testoSmallLink" href="#">
							
							
								Trasferimento tra conti - ricevuta per beneficiario
							 
							
						</a>
						
						<!-- 
						
							10,00 Euro
						
						 -->
					</td>
				</tr>
			
				
				
				
					
				
				
			
				<tr class="even">
					<td class="text-center"> 
					   <a class="btn visible-xs" id="archivia3">archivia</a>
					   
					   <input type="checkbox" name="idDocumenti" value="4" id="chk4" class="chkBoxNuovi hidden-xs">
					   <span style="display:none;">4</span>
					</td>
					<td>
						<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/closed-mail.png'); return false;" target="_blank" href="#">
							<img src="/HT/fe/img/ico_pdf2.gif" border="0" alt="Apri documento">
						</a>
					</td>                
					<td>
						03/01/2017
					</td>
					<td>	
						
							
								
								
								
								
								Conto corrente
							
							
								
								
									00000000
		&nbsp;Filiale:
									
										&nbsp;MILANO&nbsp;-
									
									&nbsp;2070
								
							
							
								&nbsp;intestato a  COGNOME NOME
							
						
						
						
						
									
						
						
						
						 
					</td>
					<td class="importo positivo oRight">
						1999,99
					</td>	
					<td class="oCenter">
						
						
							<img src="/HT/fe/img/open-mail.png" border="0" id="divImgBustaOpened4" style="visibility:visible">
						
					</td>
					<td>
						<a onclick="leggiPdf(this, '4', 'true', '/HT/fe/img/open-mail.png'); return false;" class="testoSmallLink" href="#">
							
							
								Contabile di filiale
							 
							
						</a>
						
						<!-- 
						
							10.000,00 Euro
						
						 -->
					</td>
				</tr>
			
			
		 </tbody>  
		</table>
		<input type="hidden" id="totChecks" name="totChecks" value="5">
		<input type="hidden" id="paginaRichiesta" name="paginaRichiesta" value="0">

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


<div class="pull-right margin-bottom20 margin-top10">
	<input type="submit" name="scarica" value="Scarica" id="btnScarica" class="btn btn-primary hidden-xs" alt="Scarica">
</div>

</form>
</div>
