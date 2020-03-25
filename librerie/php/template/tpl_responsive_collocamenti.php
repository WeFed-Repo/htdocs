<h2>Collocamenti</h2>
<script type="text/javascript">

/* Esempio variabili di configurazione */
var urlTabellaCollocamenti = "/librerie/include/commons/ajax/fes_collocamenti.php";

var $tableOrdini;

/* Esempio di interazione/validazione del form */
var ricercaValidate = function(e){
	
	// Esempio di validazione (es: date assenti)
	e.preventDefault();

	var errorMatrix = [];
	resetHasErrors("#ricercaOrdini");
	
	/* Esempio controllo riempimento */
	if($("#ricercaPerSelect").val()=="numero" && ( $("input[name=terminale]").val()=="" || $("input[name=anno]").val()=="" || $("input[name=numero]").val()=="" )) {
		errorMatrix.push({field: "#numeroWrap",text: "Occorre specificare un numero."})
	}

	/* Esempio controllo su data */
	if($("#dpPeriodoDal").val()=="") {
		errorMatrix.push({field: "#dpPeriodoDal",text: "Occorre specificare una data."})
	}
	else
	{	
		if(!isValidDate($("#dpPeriodoDal").val())) errorMatrix.push({field: "#dpPeriodoDal",text: "Data inserita non valida"})
	}


	setHasErrors(errorMatrix,"#ricercaOrdini");

	if (errorMatrix.length <= 0) collocamentiTabella();



}

// Funzione per REVOCA
var layerRev = function(nordine) {
	$("#layerRevoca").modal("show");
	// Reset della modale e chiamata ai dati
	$("#formRevocaWrapper").addClass("loading");
	$.ajax({
		url:"/librerie/include/commons/ajax/fes_collocamenti_revoca.php",
		dataType: "json",
		data: {
			"numeroordine": nordine
		},
		success: function (data) {
			// Popola il form coi dati ricevuti
			var objData = data[0];
			$.each(objData,function (k,v) {
				$("#revoca_" + k).html(v);
			});
			$("#formRevocaWrapper").removeClass("loading");
		},
		error: function() {
			alert("Si sono verificati degli errori in fase di recupero dei dati. Riprovare pi&ugrave; tardi.");
			$("#layerRevoca").modal("hide");
		}		

	});




	
}


// Funzione per DETTAGLI
var layerDett = function(nordine) {
	$("#layerDettagli").modal("show");
	// Reset del contenitore della modale e chiamata ai dati
// Reset della modale e chiamata ai dati
	$("#formDettagliWrapper").addClass("loading");
	$.ajax({
		url:"/librerie/include/commons/ajax/fes_collocamenti_dettagli.php",
		dataType: "json",
		data: {
			"numeroordine": nordine
		},
		success: function (data) {
			// Popola il form coi dati ricevuti
			var objData = data[0];
			$.each(objData,function (k,v) {
				$("#dettagli_" + k).html(v);
			});
			$("#formDettagliWrapper").removeClass("loading");
		},
		error: function() {
			alert("Si sono verificati degli errori in fase di recupero dei dati. Riprovare pi&ugrave; tardi.");
			$("#layerDettagli").modal("hide");
		}		

	});


}



// Esempio chiamata per tabella
var collocamentiTabella = function() {

	$("#ricercaRisultati").hide();
	$("#ricercaOrdini").addClass("loading");

	// Spedisce l'intero form via AJAX
	$.ajax({
		url:urlTabellaCollocamenti,
		dataType: "json",
		method: "POST",
		data: $("#ricercaOrdini").serialize(),
		success: function (data) {

			// Aggancia ai dati ricevuti la colonna con le funzioni
			$.each(data,function(i,v){
				
				if (v.revocabile)  {
					// Inviare all'overlay un dato necessario a raccogliere i dettagli (io ho ipotizzato il numero di ordine)
					data[i].revoca = "<a class=\"no-underline btn-icon\" onclick=\"layerRev('"+ v.numeroregistrazione+"');\"><i class=\"icon icon-delete_table\"></i></a>";
				}
				else
				{
					data[i].revoca = "<a class=\"no-underline btn-icon btn-disabled\"><i class=\"icon icon-delete_table\"></i></a>";
				}
				// Inviare all'overlay un dato necessario a raccogliere i dettagli (io ho ipotizzato il numero di ordine)
				data[i].funzioni = "<a class=\"no-underline btn-icon\" onclick=\"layerDett('"+ v.numeroregistrazione +"');\"><i class=\"icon icon-zoom_more_table\"></i></a>";
			});


			$tableOrdini.bootstrapTable("load", data);

			$("#ricercaRisultati").show();

			$("#ricercaOrdini").removeClass("loading");
		},
		error: function() {
			alert("Si sono verificati degli errori. Riprovare piu' tardi.");
			$("#ricercaOrdini").removeClass("loading");
		}


	});

}


$(function(){

	// Inizializzazione dell'interfaccia 

	// Switch deposito titoli

	$("#ricercaPerSelect").change(function(){
		if($(this).val()== "deposito") {
			$("#ricercaPerDeposito").show();
			$("#ricercaPerNumero").hide();
		}
		else
		{
			$("#ricercaPerDeposito").hide();
			$("#ricercaPerNumero").show();
		}
	});




	// Switch periodo
	$("#switchPeriodo").click(function(){
		if($("#periodoSelect").is(":visible")) {
			$("#periodoSelect").hide();
			$("#periodoDate").show();
		}
		else
		{
			$("#periodoSelect").show();
			$("#periodoDate").hide();
		}
	});






	// Datepickers selezione periodo
	$("#dpPeriodoDal").mask("99/99/9999");
	$("#dpPeriodoDal").datepicker({
		beforeShowDay: highlightDays,
		//beforeShowDay: noHolidays,  //si applica se si vuole che i fine settimana e festivi non siano selezionabili
		minDate: 0,
		showOtherMonths: true,
		showOn: "button",
		minDate: "-3M",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile
	});
	appendDatePickerIcon('dpPeriodoDal');

	$("#dpPeriodoAl").mask("99/99/9999");
	$("#dpPeriodoAl").datepicker({
		beforeShowDay: highlightDays,
		//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano selezionabili
		minDate: 0,
		showOtherMonths: true,
		showOn: "button",
		minDate: "-3M",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile
	})
	appendDatePickerIcon('dpPeriodoAl');


	$("#btnInvio").click(ricercaValidate);

	// Inizializza la tabella di bootstrap
	$tableOrdini = $('#tableOrdini');
	$tableOrdini.bootstrapTable({
            sortable: true,
            sortName: "titolo",
            sortOrder: "asc",
            pagination : "true",
            pageSize: 15,
            pageList: [15, 30, 60, 'tutti'],
			 rowStyle: function(row, index) {
				if(index % 2 == 0)
				{
					return {
						classes: 'dispari'
					}
				}
				else {
					return {
						classes: 'pari'
					}
				}
			   }
        });


	// Azioni

	$("#inviaRevoca").click(function(){
		alert("invia revoca");
	})

});

</script>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam saepe <strong>voluptatem veritatis</strong> expedita nihil dolores, distinctio aperiam.</p>
<!-- Modale con societa di gestione -->
<!-- Form ricerca -->
<section>
	<!-- modale esplicativa -->
	<div class="modal fade" id="layerHelp" tabindex="-1" role="dialog" aria-labelledby="layerHelpLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="layerHelpLabel">Situazione ordini movimenti</h2>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- fine modale esplicativa -->
	<div class="tithelp">
		<h4>Ricerca ordini</h4>
		<div class="flRight"><a href="javascript:;" data-toggle="modal" data-target="#layerHelp" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
			<br class="clear">
		</div>
		<br class="clear">
	</div>



	<form class="formGenerico borderFormRounded" role="form" id="ricercaOrdini">

		
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<!-- Strumento -->
					<label class="control-label">Seleziona strumento</label>
					<select class="form-control">
						<option>Sottoscrizioni</option>
						<option>Aste bot</option>
					</select>
				</div>
			</div>
		</div>

		
	<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6" >
					<!-- Ricerca per  -->
					<label class="control-label">Ricerca per</label>
					<select class="form-control" id="ricercaPerSelect">
						<option value="deposito">Deposito titoli</option>
						<option value="numero">Numero di registrazione ordine</option>
					</select>
				</div>

				<div class="col-xs-12 col-sm-6" id="ricercaPerDeposito">
					<!-- Deposito titoli (eventualmente, mettere qui un wrapper dinamico con show() e hide() per le varie declinazioni del campo precedente)  -->
					<label class="control-label">Deposito titoli</label>
					<select class="form-control">
						<option selected>1099/536379/0</option>
						<option>1099/536272/0</option>
						<option>1099/536373/0</option>
					</select>
				</div>

				<div class="col-xs-12 col-sm-6" id="ricercaPerNumero" style="display:none">
					<!-- Numero registrazione ordine  -->
					<label class="control-label txthelp" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet temporibus, numquam autem doloremque ea veniam illum nemo, nam. Non, quaerat.">Numero registrazione ordine</label>
					<div id="numeroWrap">
						<div class="row">
		                    <div class="col-xs-5 pad_right_0">
		                        <input type="text" class="form-control"  maxlength="10" placeholder="&WEB" name="terminale">
		                    </div>
		                     <div class="col-xs-2 pad_left_0  pad_right_0">
		                        <input type="text" class="form-control" maxlength="2 "placeholder="18" name="anno">
		                    </div>
		                     <div class="col-xs-5 pad_left_0">
		                        <input type="text" class="form-control" maxlength="6" name="numero">
		                    </div>
		                </div>
		            </div>

				</div>

			</div>
		</div>






		<div class="form-group">
			<div class="row">		
				<div class="col-xs-12">
					<!-- Periodo -->
					<!-- Selezione tipo select --> 
					<div class="row">
						<div class="col-xs-10 col-sm-8">
							<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque exercitationem est, id neque veniam tempore dolores. Nostrum totam, rerum hic.">Periodo di ricerca</label>
							<div id="periodoDate">
								<div class="row">
									<div class="col-sm-1">
										Dal:
									</div>
									<div class="col-sm-5">
										<div class="form-inline">
											<div class="input-group">
												<input type="text" id="dpPeriodoDal" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
												<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
											</div>
										</div>
									</div>
									<div class="col-sm-1">
										al:
									</div>
									<div class="col-sm-5">
										<div class="form-inline">
											<div class="input-group">
												<input type="text" id="dpPeriodoAl" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
												<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="periodoSelect" style="display:none">
								
								<select class="form-control">
									<option>1 giorno</option>
									<option>2 giorni</option>
									<option>3 giorni</option>
								</select>
							</div>
						</div>

						<div class="col-xs-2 no-label">
							<a href="javascript:;" class="no-underline btn-icon" id="switchPeriodo"><i class="icon icon-2x icon-edit_fill"></i></a>
						</div>	
					</div>
					<!-- Selezione con datepicker -->
				</div>
			</div>
		</div>
		

		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label txthelp" data-toggle="tooltip" title="E' possibile specificare descrizione, codice ISIN, codice Banca o codice RADIOCOR">Titolo</label>
					<input type="text" name="" class="form-control clear-x">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="btnInvio">Esegui ricerca</a>
			</div>
			<br class="clear">
		</div>

	</form>


</section>

<!-- Form ricerca dati -->

<!-- Risultati della ricerca -->
<section id="ricercaRisultati" style="display:none">
	<!-- Modale esplicativa -->
	<div class="modal fade" id="layerOrdini" tabindex="-1" role="dialog" aria-labelledby="layerOrdiniLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
						<h2 class="modal-title" id="layerOrdiniLabel">Ordini</h2>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<ul>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, error.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet, adipisci vel totam sed aliquam impedit. Possimus consequatur, illum quo.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Fine modale esplicativa -->

	<!-- Modale revoca -->
	<div class="modal fade" id="layerRevoca" tabindex="-1" role="dialog" aria-labelledby="layerRevocaLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
					<h2 class="modal-title" id="layerOrdiniLabel">Revoca ordine</h2>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<!-- FORM REVOCA -->
								<div id="formRevocaWrapper" class="loading">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, est!</p>
									<form class="formGenerico borderFormRounded output">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Deposito</label>
													<span class="output" id="revoca_deposito"></span>
												</div>
												<div class="col-sm-6">
													<label class="control-label-output">Intestatario</label>
													<span class="output" id="revoca_intestatario"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12">
													<label class="control-label-output">Titolo</label>
													<span class="output" id="revoca_titolo"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12">
													<label class="control-label-output">Validit&agrave;</label>
													<span class="output" id="revoca_validita"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Mercato</label>
													<span class="output" id="revoca_mercato"></span>
												</div>
												<div class="col-sm-6">
													<label class="control-label-output">Tipo operazione</label>
													<span class="output" id="revoca_operazione"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Scadenza</label>
													<span class="output" id="revoca_scadenza"></span>
												</div>
											</div>
										</div>
										

										<div class="form-group btnWrapper">

											<div class="btn-align-left">
												<a type="button" class="btn btn-default clearPin" data-dismiss="modal">annulla</a>

											</div>
											<div class="btn-align-right">
												<a type="button" class="btn btn-primary" id="inviaRevoca" href="#">procedi</a>
											</div>
											<br class="clear">
										</div>
									</form>										
								</div>
								<!-- FINE FORM REVOCA -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Fine modale revoca -->


	<!-- Modale dettagli -->
	<div class="modal fade" id="layerDettagli" tabindex="-1" role="dialog" aria-labelledby="layerDettagliLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
						<h2 class="modal-title" id="layerDettagliLabel">Dettagli ordine</h2>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<!-- FORM REVOCA -->
								<div id="formDettagliWrapper" class="loading">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, est!</p>
									<form class="formGenerico borderFormRounded output">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Deposito</label>
													<span class="output" id="dettagli_deposito"></span>
												</div>
												<div class="col-sm-6">
													<label class="control-label-output">Intestatario</label>
													<span class="output" id="dettagli_intestatario"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12">
													<label class="control-label-output">Titolo</label>
													<span class="output" id="dettagli_titolo"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-12">
													<label class="control-label-output">Validit&agrave;</label>
													<span class="output" id="dettagli_validita"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Mercato</label>
													<span class="output" id="dettagli_mercato"></span>
												</div>
												<div class="col-sm-6">
													<label class="control-label-output">Tipo operazione</label>
													<span class="output" id="dettagli_operazione"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label class="control-label-output">Scadenza</label>
													<span class="output" id="dettagli_scadenza"></span>
												</div>
											</div>
										</div>
										
									</form>										
								</div>
								<!-- FINE FORM REVOCA -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Fine modale dettagli -->

	<div class="tithelp">
		<h4>Ordini</h4>
		<div class="flRight"><a href="javascript:;" data-toggle="modal" data-target="#layerOrdini" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
			<br class="clear">
		</div>
		<br class="clear">
	</div>
	
	<table id="tableOrdini" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
		<thead>
			<tr>
                <th class="left" data-field="data" data-sortable="true">Data</th>
                <th class="left" data-field="numeroregistrazione">N. ordine</th>
                <th class="left" data-field="titolo" data-sortable="true">Titolo</th>
                <th class="left" data-field="operazione">Oper.</th>
                <th class="left" data-field="stato" data-sortable="true">Stato</th>
                <th class="right" data-field="prezzoinserito" data-sortable="true">Prezzo ins.</th>
                <th class="right" data-field="quantitainserita" data-sortable="true">Q.tà inserita</th>
                <th class="center" data-field="revoca">Revoca</th>
                <th class="center" data-field="funzioni">Dettagli</th>
            </tr>
    
		</thead>
		<tbody>


		</tbody>
	
	</table>

	<p class="note">Per gli ordini in cui compare l'icona "revoca ordine" &egrave; possibile effettuare la revoca mediante l'icona stessa: l'ordine non sarà annullato effettivamente finch&egrave; il mercato non comunicherà l'avvenuta revoca</p>
</section>
<!-- Fine dei risultati della ricerca -->