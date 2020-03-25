<h2>Situazione ordini</h2>
<script type="text/javascript">
/* Esempio di interazione del form*/
$(function(){

	// Conferma nella modale
	$("#btnCercaSg").click(function(){
		// Trasferisce il contenuto del campo nell'input corrispondente
		$("#socGestSelect").multiselector("value", $("#caseGestioneOl").val());
		// Chiude la modale
		$("#layerSg").modal("hide");
	});

	// Switch periodo 
	$("#switchPeriodo").click(function(){
		$("#periodoSelect, #periodoDate").toggle();
	}); 

	// Datepickers selezione periodo
	$("#dpPeriodoDal").mask("99/99/9999");
		$("#dpPeriodoDal").datepicker({
		beforeShowDay: highlightDays,
		//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
		minDate: 0,
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile
	    })
	appendDatePickerIcon('dpPeriodoDal');

	$("#dpPeriodoAl").mask("99/99/9999");
		$("#dpPeriodoAl").datepicker({
		beforeShowDay: highlightDays,
		//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
		minDate: 0,
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile
	    })
	appendDatePickerIcon('dpPeriodoAl');


});

</script>
<p>Puoi effettuare la ricerca degli ordini per <strong>deposito titoli</strong> o per <strong>numero di registrazione ordine</strong>.</p>
<!-- Modale con societa di gestione -->
<div class="modal fade" id="layerSg" tabindex="-1" role="dialog" aria-labelledby="layerSgLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="layerSgLabel">Societ&agrave; di gestione</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							
							
							<!-- Selettore societa' di gestione -->
	
							<form id="sgForm"class="formGenerico" role="form">
								<div id="searchSocieta">
									<div class="selector-wrap selector-mini" data-input-type="checkbox" data-input-name="caseGestioneOl">
		                                <input id="caseGestioneOl" name="caseGestioneOl" type="hidden" value="">
		                                <!-- Case di gestione -->
					 					<div class="selector-box " data-value="0" title="Allianz Global Investors Lux." data-name="Allianz Global Investors Lux."><img src="/fe/img/lgsoc_allianz.png" class="img100"><span class="definition">Allianz Global Investors Lux.</span></div>
										<div class="selector-box " data-value="1" title="Amundi Funds" data-name="Amundi Funds"><img src="/fe/img/lgsoc_amundi.png" class="img100"><span class="definition">Amundi Funds</span></div>
					                    <div class="selector-box " data-value="2" title="Anima Asset Management ltd" data-name="Anima Asset Management ltd"><img src="/fe/img/lgsoc_prima_new.png" class="img100"><span class="definition">Anima Asset Management ltd</span></div>
					                    <div class="selector-box " data-value="3" title="Anima Sgr Spa" data-name="Anima Sgr Spa"><img src="/fe/img/lgsoc_anima_new.png" class="img100"><span class="definition">Anima Sgr Spa</span></div>
					                    <div class="selector-box " data-value="4" title="BlackRock (Luxembourg) S.A." data-name="BlackRock (Luxembourg) S.A."><img src="/fe/img/lgsoc_blackrock.png" class="img100"><span class="definition">BlackRock (Luxembourg) S.A.</span></div>
					                    <div class="selector-box " data-value="5" title="Carmignac Gestion" data-name="Carmignac Gestion"><img src="/fe/img/lgsoc_carmignac_fondi.png" class="img100"><span class="definition">Carmignac Gestion</span></div>
					                    <div class="selector-box " data-value="6" title="Carmignac Portfolio Sicav" data-name="Carmignac Portfolio Sicav"><img src="/fe/img/lgsoc_carmignac_port.png" class="img100"><span class="definition">Carmignac Portfolio Sicav</span></div>
					                    <div class="selector-box " data-value="7" title="Columbia Threadneedle" data-name="Columbia Threadneedle"><img src="/fe/img/lgsoc_threadneedle.png" class="img100"><span class="definition">Columbia Threadneedle</span></div>
					                    <div class="selector-box " data-value="6" title="Carmignac Portfolio Sicav" data-name="Carmignac Portfolio Sicav"><img src="/fe/img/lgsoc_carmignac_port.png" class="img100"><span class="definition">Carmignac Portfolio Sicav</span></div>
					                    <div class="selector-box " data-value="8" title="Deutsche Asset &amp; Wealth Man.e"  data-name="Deutsche Asset &amp; Wealth Man.e" ><img src="/fe/img/lgsoc_dws.png" class="img100"><span class="definition">Deutsche Asset &amp; Wealth Man.e</span></div>
					                    <div class="selector-box " data-value="9" title="Epsilon Sgr Spa" data-name="Epsilon Sgr Spa"><img src="/fe/img/lgsoc_epsilon.png" class="img100"><span class="definition">Epsilon Sgr Spa</span></div>
					                    <div class="selector-box " data-value="10" title="Etica Sgr Spa" data-name="Etica Sgr Spa"><img src="/fe/img/lgsoc_etica.png" class="img100"><span class="definition">Etica Sgr Spa</span></div>
					                    <div class="selector-box " data-value="11" title="Eurizon Capital Sgr Spa" data-name="Eurizon Capital Sgr Spa"><img src="/fe/img/lgsoc_eurizon.png" class="img100"><span class="definition">Eurizon Capital Sgr Spa</span></div>
					                    <div class="selector-box " data-value="12" title="Fidelity Investments Lux. S.A." data-name="Fidelity Investments Lux. S.A."><img src="/fe/img/lgsoc_fidelity.png" class="img100"><span class="definition">Fidelity Investments Lux. S.A.</span></div>
					                    <div class="selector-box " data-value="13" title="GAM I.M. Ltd-Julius Baer Funds" data-name="GAM I.M. Ltd-Julius Baer Funds"><img src="/fe/img/lgsoc_jb.png" class="img100"><span class="definition">GAM I.M. Ltd-Julius Baer Funds</span></div>
					                    <div class="selector-box " data-value="14" title="HSBC Global Investment Funds" data-name="HSBC Global Investment Funds"><img src="/fe/img/lgsoc_hsbc.png" class="img100"><span class="definition">HSBC Global Investment Funds</span></div>
					                    <div class="selector-box " data-value="15" title="Invesco Fund" data-name="Invesco Fund"><img src="/fe/img/lgsoc_invesco.png" class="img100"><span class="definition">Invesco Fund</span></div>
					                    <div class="selector-box " data-value="16" title="JPMorgan Funds" data-name="JPMorgan Funds"><img src="/fe/img/lgsoc_jpmorganam.png" class="img100"><span class="definition">JPMorgan Funds</span></div>
					                    <div class="selector-box " data-value="17" title="JPMorgan Investment Funds" data-name="JPMorgan Investment Funds"><img src="/fe/img/lgsoc_jpminv.png" class="img100"><span class="definition">JPMorgan Investment Funds</span></div>
					                    <div class="selector-box " data-value="18" title="Janus Capital Funds plc" data-name="Janus Capital Funds plc"><img src="/fe/img/lgsoc_janus.png" class="img100"><span class="definition">Janus Capital Funds plc</span></div>
					                    <div class="selector-box " data-value="19" title="Legg Mason Global Asset Management" data-name="Legg Mason Global Asset Management"><img src="/fe/img/lgsoc_legg_mason.png" class="img100"><span class="definition">Legg Mason Global Asset Management"</span></div>
					                    <div class="selector-box " data-value="20" title="Lombard Odier Funds" data-name="Lombard Odier Funds"><img src="/fe/img/lgsoc_lombard_odier.png" class="img100"><span class="definition">Lombard Odier Funds</span></div>
					                    <div class="selector-box " data-value="21" title="M&amp;G Global" data-name="M&amp;G Global"><img src="/fe/img/lgsoc_mg.png" class="img100"><span class="definition">M&amp;G Global</span></div>
					                    <div class="selector-box " data-value="22" title="Morgan Stanley Investment Fund" data-name="Morgan Stanley Investment Fund"><img src="/fe/img/lgsoc_morganstanley.png" class="img100"><span class="definition">Morgan Stanley Investment Fund</span></div>
					                    <div class="selector-box " data-value="22" title="Muzinich &amp; Co." data-name="Muzinich &amp; Co."><img src="/fe/img/lgsoc_muzinich.png" class="img100"><span class="definition">Muzinich &amp; Co.</span></div>
					                    <div class="selector-box " data-value="23" title="NN(L) Investment Funds" data-name="NN(L) Investment Funds"><img src="/fe/img/lgsoc_nn.png" class="img100"><span class="definition">NN(L) Investment Funds</span></div>
					                    <div class="selector-box " data-value="23" title="Nordea" data-name="Nordea"><img src="/fe/img/lgsoc_nordea.png" class="img100"><span class="definition">Nordea</span></div>
					                    <div class="selector-box " data-value="24" title="Pictet Funds (Europe) S.A." data-name="Pictet Funds (Europe) S.A."><img src="/fe/img/lgsoc_pictet.png" class="img100"><span class="definition">Pictet Funds (Europe) S.A.</span></div>
					                    <div class="selector-box " data-value="25" title="Pimco Funds Gl.Inv. Series Plc" data-name="Pimco Funds Gl.Inv. Series Plc"><img src="/fe/img/lgsoc_pimco.png" class="img100"><span class="definition">Pimco Funds Gl.Inv. Series Plc</span></div>
					                    <div class="selector-box " data-value="26" title="Raiffeisen capital management" data-name="Raiffeisen capital management"><img src="/fe/img/lgsoc_raffeisen.png" class="img100"><span class="definition">Raiffeisen capital management</span></div>
					                    <div class="selector-box " data-value="27" title="Schroder Int. Selection Fund" data-name="Schroder Int. Selection Fund"><img src="/fe/img/lgsoc_schroders.png" class="img100"><span class="definition">Schroder Int. Selection Fund</span></div>
										<!-- Fine elenco case di gestione -->

									</div>
								</div>
		                    </form>

		                    <!-- Fine selettore societa' di gestione -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="btn-align-center">
							<a type="button" class="btn btn-primary" id="btnCercaSg">Conferma</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fine modale con societa di gesione -->




<!-- Form ricerca -->
<section>
	<form class="formGenerico borderFormRounded" role="form" id="ricercaOrdini">

		<!-- Versione periodo 1 -->
		
		<div class="form-group">
			<div class="row">
				
				<div class="col-xs-12 col-sm-4">
				
				<!-- Strumento -->
					<label class="control-label">Strumento</label>
					<select class="form-control">
						<option>Fondi lorem ipsum</option>
						<option>Lorem ipsum dolor</option>
						<option>Lorem ipsum amet </option>
					</select>
				</div>
				

				<div class="col-xs-12 col-sm-8">
				<!-- Periodo -->
					<!-- Selezione tipo select --> 
					<div class="row">
						<div class="col-xs-10">
							
							<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque exercitationem est, id neque veniam tempore dolores. Nostrum totam, rerum hic.">Periodo</label>
							<div id="periodoSelect">
								<select class="form-control">
									<option>Fondi lorem ipsum</option>
									<option>Lorem ipsum dolor</option>
									<option>Lorem ipsum amet </option>
								</select>
							</div>
							<div id="periodoDate" style="display:none">
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
						</div>
						<div class="col-xs-2 no-label">
							<a href="javascript:;" class="no-underline btn-icon" id="switchPeriodo"><i class="icon icon-2x icon-edit_fill"></i></a>
						</div>	
					</div>
					<!-- Selezione con datepicker -->
				</div>
			</div>
		</div>
		<!-- / Versione periodo 1 -->

		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<!-- Ricerca per  -->
					<label class="control-label">Ricerca per</label>
					<select class="form-control">
						<option>Deposito titoli</option>
						<option>Numero di registrazione ordine</option>
					</select>
				</div>
				


				<div class="col-xs-12 col-sm-6">
					<script type="text/javascript">
						/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
						$(function() {
							createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
						});

						function sceltaRapportoFunc (option) {
							// Testo selezione: option.text
							// Valore selezione: option.value
							// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
						}
						/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
					</script>
					<label class="control-label">Deposito titoli</label>
					<div id="sceltaRapporto" class="selectRapp">
						<input id="sceltaRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
						<a href="javascript:;" class="inputOption inputSx form-control">
							<span class="inputDx">
								<span class="input">
									xxx/aaaaaa
								</span>
							</span>
						</a>

						<div class="selector" style="display: none;">
							<span class="group">
								<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/1</strong><br/>
								ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</a>
							</span>
							<span class="group">
								<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/2</strong><br/>
								ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</a>
							</span>
							<span class="group">
								<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/0</strong><br/>
									Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
									Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
									Nome Nome Cognome Cognome5</a>
							</span>
							<span class="group">
								<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/1</strong><br/>
									Nome Nome Cognome Cognome1</a>
							</span>
							<span class="group">
								<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/2</strong><br/>
									Nome Nome Cognome Cognome2</a>
							</span>
							<span class="group">
								<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/3</strong><br/>
									Nome Nome Cognome Cognome3</a>
							</span>
							<span class="group">
								<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/4</strong><br/>
									Nome Nome Cognome Cognome4</a>
							</span>
							<span class="group">
								<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/5</strong><br/>
									Nome Nome Cognome Cognome5</a>
							</span>
						</div>
					</div>

				</div>



			</div>
		</div>





		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<!-- Selettore societa di gestione -->
					<label class="control-label">Societ&agrave; di gestione</label>
					<div id="socGestSelect" class="multi-selector" data-input="socGest" data-overlay-input="caseGestioneOl">
						<input name="socGest" type="hidden" value="60">
					</div>
				</div>

				<div class="col-xs-12 col-sm-3">
				<!-- Deposito titoli (eventualmente, mettere qui un wrapper dinamico con show() e hide() per le varie declinazioni del campo precedente)  -->
					<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum rem vitae culpa consectetur vero odit dolorem tempore autem voluptates pariatur, fuga cumque, aliquam fugiat. Sunt a, incidunt non magnam, adipisci voluptates repellat, esse ut tenetur corrupti eos, porro beatae. Blanditiis, sed perferendis reiciendis odit pariatur, corporis deserunt deleniti culpa eveniet.">Tipo operazione</label>
					<select class="form-control">
						<option>Fondi lorem ipsum</option>
						<option>Lorem ipsum dolor</option>
						<option>Lorem ipsum amet </option>
					</select>
				</div>

				<div class="col-xs-12 col-sm-3">
				<!-- Deposito titoli (eventualmente, mettere qui un wrapper dinamico con show() e hide() per le varie declinazioni del campo precedente)  -->
					<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum rem vitae culpa consectetur vero odit dolorem tempore autem voluptates pariatur, fuga cumque, aliquam fugiat. Sunt a, incidunt non magnam, adipisci voluptates repellat, esse ut tenetur corrupti eos, porro beatae. Blanditiis, sed perferendis reiciendis odit pariatur, corporis deserunt deleniti culpa eveniet.">Stato</label>
					<select class="form-control">
						<option>Fondi lorem ipsum</option>
						<option>Lorem ipsum dolor</option>
						<option>Lorem ipsum amet </option>
					</select>
				</div>

			</div>
		</div>

		<div class="form-group">
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="btnInvio">Cerca</a>
			</div>
			<br class="clear">
		</div>

	</form>

</section>

<!-- Form ricerca dati -->



<!-- Tabella dei risultati -->
<section>
<!-- Summary -->
<!-- Overlayer personalizzazione tabelle -->
<script type="text/javascript">
	
	$(function(){

		sitOrdTable = $("");
		// Select personalizzazione
		$("#colPersSelect").change(function(){

			switch($(this).val()) {

				case "personalizza":

					// Mostra l'overlay di personalizzazione
					$("#layerPers").modal("show");

				break;

				default:

					getTableOrdini();

				break;
			}

		});

	});
	
</script>
<!-- Funzioni per la gestione della tabella -->
<script type="text/javascript">

/* Esempio di automazione per personalizzazione delle colonne della tabella */
// CONFIGURAZIONE COLONNE della tabella

var tableCols = {
	"nome" : {"class":"left","data-sortable":"true","fullname":"Nome fondo"},
	"deposito" : {"class":"left","data-sortable":"false","fullname":"Deposito titoli"},
	"datainserimento" : {"class":"left","data-sortable":"true","fullname":"Data ins.","data-sort-name": "dataord"},
	"tipooperazione" : {"class":"left","data-sortable":"true","fullname":"Tipo oper."},
	"statoordine" : {"class":"left","data-sortable":"true","fullname":"Stato ordine"},
	"importo" : {"class":"left","data-sortable":"false","fullname":"Contr. Euro"},
	"quote" : {"class":"left","data-sortable":"false","fullname":"Quote/ Azioni"},
	"valore" : {"class":"left","data-sortable":"false","fullname":"NAV"},
	"dett" : {"class":"center","data-sortable":"false","fullname":"Dett."},
	"azioni" : {"class":"center","data-sortable":"false","fullname":"Azioni"},
	"canale" : {"class":"center","data-sortable":"false","fullname":"Canale"},
	"valuta" : {"class":"left","data-sortable":"true","fullname":"Valuta"},
    "societadigestione" : {"class":"left","data-sortable":"true","fullname":"Societ&agrave; di gestione"},
    "isin": {"class":"left","data-sortable":"true","fullname":"ISIN"}
}

var tableColSel = {
	"sintesi" : ["nome","deposito","datainserimento","tipooperazione","statoordine","importo","quote","valore","dett","azioni","canale"],
	"personalizza" : ["nome","deposito","datainserimento","tipooperazione","statoordine","importo","quote","valore","dett","azioni","canale"]
}

// Erogazione della tabella (con posting del form)
getTableOrdini = function() {

	// Blocco del contenitore con loading
	$("#results").show().addClass("loading");
	$("#ricercaOrdini").addClass("loading");	
	
	// Ricezione dei dati con chiamata
	$.ajax({
		url: "/librerie/include/commons/ajax/sitOrdini.json?a=" + Math.random(),
		dataType: "json",
		data: $("#ricercaOrdini").serialize(),
		success : function (data) {

			// Aggiornamento dei dati
			$("#fondiTrovati").html(data.trovati);

			// Assemblaggio dell'heading (con raccolta della personalizzazione)
			var tHead = $("<tr>");
			$.each(tableColSel[$("#colPersSelect").val()],function(k,v) {
				var tcoldata = tableCols[v];
				var tcol = $("<th>").attr({"data-field":v,"data-sortable":tcoldata["data-sortable"]}).addClass(tcoldata["class"]).html(tcoldata.fullname);
				if (tcoldata["data-sort-name"]) {
					tcol.attr({"data-sort-name": tcoldata["data-sort-name"]});
				}
				tHead.append(tcol);
			});
			var rTable = $("<table>").addClass("sortableTable fixed").attr({"data-sortable":"true","cellpadding":0,"cellspacing":0,"border":0});
			var rTableWrap = $("#resultTable");
			rTableWrap.find("table").bootstrapTable("destroy");
			rTableWrap.empty().append(rTable.append($("<thead>").append(tHead)));

			// Creazione della tabella
			rTable.bootstrapTable({
	   	 		data: data["data"],
	   	 		sortName: "nome",
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
				   },
		   	 	onPostBody : styleSortTable
		   	 	});

			// Rimozione blocco di loading per utilizzo
			$("#results, #ricercaOrdini").removeClass("loading");
		} 
	});
}


/* Inizializzazioni della ricerca */
$(function(){
	$("#btnInvio").click(getTableOrdini);

	// Popola l'elenco di tutte le colonne per la personalizzazione
	var cpw = $("#colPersWrap");
	$.each(tableCols,function(k,v){
		var label = $("<label>").html(v.fullname);
		var input = $("<input>").attr({"type":"checkbox","value":k,"name":"colPersCb"});
		if ($.inArray( k, tableColSel.personalizza)>=0) input.attr("checked",true)
		label.prepend(input);
		cpw.append($("<div>").addClass("col-sm-6 col-xs-12").append(label));
	});

	// Blocca il numero di colonne inseribili


	// Conferma personalizzazione
	$("#colPersConferma").click(function(){
		
		// Controlli ed esito
		var cpe = $("#colPersErrore").hide();
		var checkedInp = $("#colPersWrap input:checked");
		var errors = "";
		if (checkedInp.length<=0) {
			errors = "Occorre selezionare almeno 1 valore.";
		}
		if (checkedInp.length>7) {
			errors = "Non &egrave; possibile selezionare pi&ugrave; di <strong>7 colonne</strong>.";
		}

		if (errors.length<=0) {
			// Inserisce le colonne della personalizzazione
			tableColSel.personalizza = new Array();
			$.each(checkedInp,function(i,v){
				tableColSel.personalizza.push($(v).val());
			});
			$("#layerPers").modal("hide");
			getTableOrdini();
		}
		else
		{
			// Mostra l'errore
			cpe.find("p").html(errors)
			cpe.show();
		}

	})

});


viewDettOrdini = function (param) {
	// Inserire qui il controllo per l'erogazione della modale (pre-popolare i campi tramite "param" o chiamata Ajax)
	$("#layerDett").modal("show"); 
	// alert(param);

}

confermaRevoca = function (param) {
	// Inserire qui il controllo per l'erogazione della modale
	alert(param);

}


</script>
<!-- Modale dettaglio inv -->
<div class="modal fade" id="layerDett" tabindex="-1" role="dialog" aria-labelledby="layerDettLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="layerDettLabel">Anima Emergenti A EUR</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

					<h4>Dettagli ordine fondo</h4>
					<div class="formGenerico borderFormRounded output">
						<div class="form-group">
							<div class="row">
							 	<div class="col-sm-6">
									<label class="control-label-output">Data operazione</label>
									<span class="output">05/02/2019</span>
								</div>
								<div class="col-sm-6">
									<label class="control-label-output">N. di registrazione</label>
									<span class="output">13022194</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
							 	<div class="col-sm-6">
									<label class="control-label-output">Societ&agrave; di gestione</label>
									<span class="output">Anima Sgr</span>
								</div>
								<div class="col-sm-6">
									<label class="control-label-output">N. contratto PAC</label>
									<span class="output">-</span>
								</div>
							</div>
						</div>
					</div>
				

					<h4>Dettagli fiscali</h4>
					<div class="formGenerico borderFormRounded output">
						<div class="form-group">
							<div class="row">
							 	<div class="col-xs-12">
									<span class="output">Non sono presenti dettagli fiscali</span>
								</div>
							</div>
						</div>
					</div>

					<h4>Informativa, costi, oneri ed incentivi</h4>
					<div class="formGenerico borderFormRounded output">
						<div class="form-group">
							<div class="row">
							 	<div class="col-sm-6">
									<label class="control-label-output">Strumento finanziario</label>
									<span class="output">Anima Emergenti A EUR</span>
								</div>
								<div class="col-sm-6">
									<label class="control-label-output">Controvalore dell'operazione</label>
									<span class="output">0,00 €</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Legenda -->
					<div class="panel-group" id="accordionPref_1" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default panel-selected_1">
						<div class="panel-heading" role="tab" id="headingOnePre_1">
							<h4 class="panel-title">
								<a class="collapsed"  data-toggle="collapse" href="#collapseOne2Pre_1" aria-expanded="false" aria-controls="collapseOne2Pre_1">
									Legenda
									<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
								</a>
							</h4>
							</div>

							<div id="collapseOne2Pre_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOnePre_1">
								<div class="panel-body panel-accordion-body">
									<div class="row">
										<div class="col-sm-12">
											<p>I costi e oneri di seguito riportati rappresentano le commissioni massime applicabili e non tengono conto di eventuali sconti concordati.</p>	
											<p>
												<strong>Costi per Prodotto:</strong><br/>
												tutti i costi e gli oneri associati alla realizzazione e gestione degli strumenti finanziari.
											</p>
											<p>
												<strong>Costi per Servizio:</strong><br/>
												tutti i costi e gli oneri connessi applicati dalla Banca relativi ai servizi di investimento e/o servizi accessori prestati al cliente.
											</p>
											<p>
												<strong>Incentivi:</strong><br/>
												retrocessione che la Banca percepisce dalle Societï¿œ prodotto sotto forma di quota parte dei costi sostenuti dal cliente o come prestazioni non monetarie.
											</p>
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Fine legenda -->		


					<!-- Tabella riassuntiva -->
					  <div class="headerContainerNoBootS">
					        <div class="tableContainerNoBootS">
					            <table class="riepilogo">
					                <thead>
					                    <tr>
					                        <th class="left intestazione">Lorem ipsum dolor sit</th>
					                        <th class="right">Valore €</th>
					                        <th class="right">Valore %</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <tr>
					                        <th class="left">Costo del ipsum dolor sit</th>
					                        <th class="right">99.999,00 €</th>
					                        <th class="right">99,99 %</th>
					                    </tr>
					                    <tr class="dispari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="pari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="dispari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                       <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="pari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                       <td class="right">99,99 %</td>
					                    </tr>
					                    <tr>
					                        <th class="left">Costo del ipsum dolor sit</th>
					                        <th class="right">99.999,00 €</th>
					                        <th class="right">99,99 %</td>
					                    </tr>
					                    <tr class="dispari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="pari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="dispari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                      <tr class="pari">
					                        <td class="left">Lorem ipsum dolor sit</td>
					                        <td class="right">99.999,00 €</td>
					                        <td class="right">99,99 %</td>
					                    </tr>
					                </tbody>
					                <tfoot>
					                    <tr class="totali">
					                       <td class="left">Totale</td>
					                       <td class="right">99.999,00 €</td>
					                       <td class="right">100,00 %</td>
					                    </tr>
					                </tfoot>
					             </table>
					            
					        </div>
					    </div>


					<!-- Fine tabella riassuntiva -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fine modale dettaglio inv -->



<!-- Modale personalizzazione tabella -->
<div class="modal fade" id="layerPers" tabindex="-1" role="dialog" aria-labelledby="layerPersLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="layerPersLabel">Lorem ipsum</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<!-- Errore -->
					<section class="boxesitoWrap" id="colPersErrore" style="display:none">
						<div class="boxesito negativo">
							<i class="icon icon-alert_error icon-2x"></i>
							<div class="text">
								<div class="row">
									<div class="col-sm-12">
										<p id="colPersErroreText"></p>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- Fine errore -->
					<div class="row">
						<div class="col-xs-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus nulla, ex officiis quo aperiam libero iure veniam. Possimus voluptatem magnam ipsa deserunt in enim excepturi? Dignissimos nulla, necessitatibus soluta at!</p>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, maiores!</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, maiores!</li>
							</ul>
							<form class="formGenerico borderFormRounded" role="form">
								<div class="row"  id="colPersWrap">
									
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<div class="btn-align-right">
								<a type="button" class="btn btn-primary" id="colPersConferma">Lorem</a>
							</div>
							<br class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fine modale  personalizzazione tabella-->

<!-- Fine personalizzazione tabelle -->
<div id="results" style="display:none">
	<div class="form-group">
		<div class="row">
			<span class="col-sm-8 col-xs-12 no-label">
				<span class="trovati"><span id="fondiTrovati">0</span> fondi trovati</span>
			</span>
			<span class="col-sm-4 col-xs-12">
				<!-- Personalizzazione tabella -->
				<label class="control-label" >Visualizzazione tabella</label>
				<select class="form-control" id="colPersSelect">
					<option selected value="sintesi">Sintesi</option>
					<option value="personalizza">Personalizza</option>
				</select>
				<!-- Fine personalizzazione tabella -->
			</span>
		</div>
	</div>
	<!-- Fine summary -->

	<!-- Tabella risultati -->
	<div id="resultTable"<?php if ($fdeb =="true") { ?> class="big-data-table"<?php } ?>>
	

	</div>
	<!-- Fine tabella risultati -->
<div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-align-right">
          <a type="button" class="btn btn-primary">esporta in excel</a>
          <a type="button" class="btn btn-primary">stampa</a>
          <a type="button" class="btn btn-primary">portafoglio</a>
        </div>
      </div>
    </div>
</div>

</div>

