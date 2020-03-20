<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
	});
</script>
<script>
	//inizializzazione dei tab-accordion
	//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
	//possono coesistere più gruppo di tab/accordion in pagina
	//parametri: id contenitore e incice tab che deve essere aperto al load

	$(function(){
		resizeTab('tabPortafoglioInv',0);
	});

</script>

<section>
	<h2>Strumenti in portafoglio</h2>
</section>

<!-- Esempio messaggio -->
<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<i class="icon icon-alert_caution icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p>Attenzione, il tuo portafoglio risulta inadeguato in rapporto al profilo di rischio. Contatta il tuo gestore per maggiori informazioni</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fine esempio messaggio -->

<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
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
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
							<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-5">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
					
				</div>
				<div class="col-xs-2 col-sm-2">
					<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
	
	</form>
</section>

<script type="text/javascript">

/* Variabili di configurazione */
/* ID del tab associato ad un URL da invocare ed alla tabella da gestire */
var tcData = {
	"tabTotale" : {url: "/include/ajax/portafoglio_fondi.php?tiporichiesta=totale", table: "tbTotale"},
	"tabFes" : {url: "/include/ajax/portafoglio_fondi.php?tiporichiesta=fes", table: "tbFes"},
	"tabPir" : {url: "/include/ajax/portafoglio_fondi.php?tiporichiesta=pir", table: "tbPir"},
	"tabPac" : {url: "/include/ajax/portafoglio_fondi.php?tiporichiesta=pac", table: "tbPac"}
}

/* Variabili di configurazione (colonne) */
var colonneTabella = [
		{
    		field: "ico1",
    		title: '',
    		sortable : false
		},
		{
    		field: 'descrizione',
    		sortName: 'descrizione-key',
    		title: 'Descrizione',
    		sortable : true,
    		order: 'asc'
		},
		{
    		field: 'divisa',
    		title: 'Divisa',
    		sortable : true
		},
		{
    		field: "quote",
    		title: 'N quote',
    		sortable : true,
    		sorter: fixQuant
		},
		{
    		field: "nav",
    		title: 'NAV',
    		sortable : false
		},
		{
    		field: "tasso",
    		title: 'Tasso netto',
    		sortable : true
		},
		{
    		field: "controvaloreinv",
    		title: 'Controv. &euro; inv',
    		sortable : true,
    		sorter: fixQuant
		},
		{
    		field: "controvaloreatt",
    		title: 'Controv. &euro; attuale',
    		sortable : true,
    		sorter: fixQuant
		},
		{
    		field: "rendimento",
    		title: 'Rend. &euro;<br>Rend. %',
    		sortable : true
		}
		
	];

/* caso per 1 solo rapporto  */
	/* Emulazione primo click per "start" */


function sceltaRapportoFunc (option) {

	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')');
	$("#tabPortafoglioInv *[data-tabcont]").removeAttr("inited");
	// Se deve essere rimosso il footer della tabella (generato dinamicamente) aggiungere questo codice:
	/* $("#tbTotale tfoot,#tbFes tfoot,#tbPct tfoot").remove() */

	$("#tabPortafoglioInv li *[data-tabcont=tabTotale]").trigger("click");

}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */


$(function(){

	/* Funzione sulla pressione dei tab */
	$("#tabPortafoglioInv a").click(function(){
		var tab = $(this);
		if (!tab.attr("inited")) {
			var idTab = tab.attr("data-tabcont");
			var tabConfData = tcData[idTab];

			/* Crea la tabella raccogliendo i dati */
			$.ajax({
				url : tabConfData.url,
				dataType: "json",
				success: function (data) {

					var table = $("#" + tabConfData.table);

					table.bootstrapTable({
						sortName: "descrizione",
						columns: colonneTabella,
						pagination: true,
						data: data.data
					});


					/* Appende l'eventuale footer (e' possibile filtrare l'azione tramite l'id del tab (ovvero la variabile idTab)*/
					if (idTab == "tabTotale") {
						/*
						tfoot = $("<tfoot>");
						
						 INSERIRE QUI LA CHIAMATA: il layout e' quello specificato 

						table.append(tfoot);
						*/
					}
					
					/* Conferma l'avvenuta inizializzazione */
					$("#"+tabConfData.table+"Wrap").removeClass("loading");
					$("#tabPortafoglioInv *[data-tabcont="+idTab+"]").attr("inited","true")
				}
			})
		}
	});

	$("#tabPortafoglioInv li *[data-tabcont=tabTotale]").trigger("click");

});


</script>

<section>
	<div class="navContSecondLev" id="tabPortafoglioInv">
		<div class="outerTab">
			<ul class="tabWrapper tabsmall hidden-xs">
				<li class=""><a href="#a" data-tabcont="tabTotale">Totale portafoglio</a></li>
				<li class=""><a href="#b" data-tabcont="tabFes">Fondi e Sicav</a></li>
				<li class=""><a href="#c" data-tabcont="tabPir">Fondi PIR</a></li>
				<li class=""><a href="#d" data-tabcont="tabPac">Situazione PAC</a></li>
			</ul>
		</div>
		<div class="separator"></div>
		<div class="panel-group panel-fill" id="accordion2" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role="tab" id="heading1b">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed" data-tabcont="tabTotale">Totale portafoglio<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
					</h4>
				</div>
				<div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
					<div class="panel-body">
						<div class="tab-wrap" >
							<div id="tbTotaleWrap" class="loading">

								<!-- Modale di personalizzazione -->
								<div class="modal fade" id="layerPers" tabindex="-1" role="dialog" aria-labelledby="layerPersLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
												<h2 class="modal-title" id="layerPersLabel">Personalizza elenco fondi</h2>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<div class="col-xs-12">
															<p>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
																debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
																quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
															</p>
															<hr>
															<div class="form-group">
																<label class="control-label flLeft noFloatMobile">Seleziona i parametri</label>
																<p class="note flRight noFloatMobile">X di 5 selezionati</p>
																<br class="clear">
																<div class="row">
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<div class="checkbox inline">
																			<label class="textWrapper">
															 					  <input type="checkbox">
															  					  <span class="text">Lorem ipsum</span>
																			</label>
																		</div>
																	</div>
																</div>

															</div>
															<!-- Pulsantiera -->
															<div class="form-group btnWrapper marginBottomNone">
												                <div class="btn-align-left">
												                    <a type="button" class="btn btn-default" data-dismiss="modal">lorem</a>
												                </div>
												                <div class="btn-align-right">
												                    <a type="button" class="btn btn-primary">lorem</a>
												                </div>
												                <br class="clear">
												            </div>
															<!-- Fine pulsantiera -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Fine modale di personalizzazione -->
								<!-- Link personalizzazione -->
								<a class="flRight marginBottomMini" data-target="#layerPers" data-toggle="modal">Personalizza</a>

								<!-- Fine link personalizzazione -->
								<table id="tbTotale" class="sortableTable fix-OuterTable">
									
									<!-- Il footer e' in linea (ora arriva da una chiamata BE - il codice e' eventualmente predisposto in alto) -->
									<tfoot>
										<tr>
											<td class="bgWhite brdWhite"></td>
											<td colspan="8"><strong>NON SONO PRESENTI PCT NEL DEPOSITO SELEZIONATO</strong></td>
										</tr>
										<tr class="totali">
											<td class="bgWhite brdWhite"></td>
								      		<td colspan="5"><strong>Totale</strong></td>
								       		<td>63.095,35</td>	
								       		<td>63.095,35</td>
								       		<td class="right posi">3.764,98 <br>5,97</td>
								       	</tr>
								    </tfoot>

								</table>
								<!-- Tabella portafoglio -->
							
								<!-- Fine tabella portafoglio -->
								<!-- Pulsantiera -->
								<div class="form-group">
								    <div class="row">
								      <div class="col-xs-12">
								        <div class="btn-align-right">
								          <a type="button" class="btn btn-primary">esporta in excel</a>
								          <a type="button" class="btn btn-primary">stampa</a>
								        </div>
								      </div>
								    </div>
								</div>
								<!-- Fine pulsantiera -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role="tab" id="heading2b">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false" aria-controls="collapse2b" class="collapsed"  data-tabcont="tabFes">Fondi e Sicav</a>
					</h4>
				</div>
				<div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
					<div class="panel-body">
						<div class="tab-wrap">
							<div id="tbFesWrap" class="loading">
								<table id="tbFes" class="sortableTable fix-OuterTable"></table>
								<!-- Fine tabella portafoglio -->
								<div class="row">
									<div class="col-xs-12">
										<p class="note">Il prezzo di carico indicato potrebbe differire dal prezzo fiscale. Per conoscere il prezzo fiscale clicca l'icona  e poi seleziona la voce "Dettagli"</p>
									</div>
								</div>
								<!-- Pulsantiera -->
								<div class="form-group">
								    <div class="row">
								      <div class="col-xs-12">
								        <div class="btn-align-right">
								          <a type="button" class="btn btn-primary">Situazione PAC</a>
								        </div>
								      </div>
								    </div>
								</div>
								<!-- Fine pulsantiera -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role="tab" id="heading3b">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b" aria-expanded="false" aria-controls="collapse3b" class="collapsed"  data-tabcont="tabPir">Fondi PIR</a>
					</h4>
				</div>
				<div id="collapse3b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3b">
					<div class="panel-body">
						<div class="tab-wrap">
							<div id="tbPirWrap" class="loading">
								<table id="tbPir" class="sortableTable fix-OuterTable"></table>
								<!-- Fine tabella portafoglio -->
								<!-- Pulsantiera -->
								<div class="form-group">
									<div class="row">
								      <div class="col-xs-12">
								        <div class="btn-align-right">
								          <a type="button" class="btn btn-primary">stampa</a>
								        </div>
								      </div>
								    </div>
								</div>
								<!-- Fine pulsantiera -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading visible-xs" role="tab" id="heading4b">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false" aria-controls="collapse3b" class="collapsed"  data-tabcont="tabPac">Situazione PAC</a>
					</h4>
				</div>
				<div id="collapse4b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4b">
					<div class="panel-body">
						<div class="tab-wrap">
							<div id="tbPacWrap" class="loading">
								<table id="tbPac" class="sortableTable fix-OuterTable"></table>
								<!-- Fine tabella portafoglio -->
								<!-- Pulsantiera -->
								<div class="form-group">
									<div class="row">
								      <div class="col-xs-12">
								        <div class="btn-align-right">
								          <a type="button" class="btn btn-primary">stampa</a>
								        </div>
								      </div>
								    </div>
								</div>
								<!-- Fine pulsantiera -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>


<!--overlayer tabella saldi -->
<div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Saldo</h2>
			</div>
			<div class="modal-body">
				<section>

<p>In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.</p>

<p>Rispetto al saldo contabile, il saldo disponibile tiene conto dell’eventuale <strong>fido</strong> e di <strong>operazioni</strong> di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong></p>
</section>

<section>
	<h4>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h4>
	<table cellspacing="0" cellpadding="0" border="0" id="saldoContTable">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Saldo Contabile</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
	</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table1" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>
	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<span class="txthelp"><strong class="closeable" data-title="Per &quot;movimenti non contabilizzati &quot; si intendono le operazioni in accredito (<strong>preavvisi</strong>) o in addebito (<strong>impegni</strong>) già effettuate sul conto, ma non ancora registrate." data-toggle="tooltip">Movimenti non contabilizzati</strong></span>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>
		<tr class="total merged">
	       <td class="right"><strong>Totale impegni banking</strong></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">operazioni sul sito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">operazioni con la carta di debito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Nelle &quot;altre operazioni&quot; sono comprese, in particolare:
<ul><li>operazioni presso agenzie territoriali</li><li>operazioni tramite lo &quot;Sportello telefonico&quot;</li><li>operazioni tramite sportelli Self Service BPM</li></ul>" data-toggle="tooltip">altre operazioni</span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br><ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>" data-toggle="tooltip"><strong>Totale impegni trading</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">P&L potenziale impegnato per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Le operazioni &quot;marginate&quot; o in leva impegnano una disponibilit&agrave; inferiore rispetto a quanto occorrerebbe per impostare un’operazione marginata. Il controvalore degli impegni per operazioni marginate costituisce la liquidità bloccata per operazioni intraday." data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span></td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	    </tr>
	     <tr class="total" >
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"><strong>Totale preavvisi trading</strong></span></td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale impegni fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale preavvisi fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table2" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>

	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<strong>Saldo disponibile</strong>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>		
	</tbody>
</table>
<h4>Operativit&agrave; overnight</h4>
<table cellspacing="0" cellpadding="0" border="0" id="">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Liquidit&agrave; impegnata per vendita short</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
			<tr class="total">
				<td class="left fix3Col"><strong>Importo accreditato per operativit&agrave; long overnight</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
</table>

</section>
			</div>
		</div>
	</div>
</div>
<!--FINE overlayer tabella saldi -->

<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel"></h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="compra" href="link1.htm"><span>Compra</span></a></li>
							<li class="linkOff"><span title="compra">Compra</span></li>
							<li class="linkOn"><a title="vendi" href="link1.htm"><span>Vendi</span></a></li>
							<li class="linkOff"><span title="vendi">Vendi</span></li>
							<li class="linkOn"><a title="Switch" href="link1.htm"><span>Switch</span></a></li>
							<li class="linkOff"><span title="Switch">Switch</span></li>
							<li class="linkOn"><a title="Dettaglio" href="link1.htm"><span>Dettaglio</span></a></li>
							<li class="linkOff"><span title="Dettaglio">Dettaglio</span></li>
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>
<script>

	/* Inizializzazione delle tabelle */
	$(function(){

       var $table1 = $('#table1');
	   var $table2 = $('#table2');
       $table1.bootstrapTable();
       $table2.bootstrapTable();
                  $('.merged').each(function()
                  {          
                      for(i=1; i<=$('.merged').length; i++)
                      {
                          if(i==$(this).attr('data-index'))
                            {
                                  $table1.bootstrapTable('mergeCells', {
                                      index: i,
                                      field: 'secondo',
                                      colspan: 4
                            }).bootstrapTable(
                                {
                                    onPostBody : initTooltip()

                         });
                     }
                  }
			})

        });
 
</script>
