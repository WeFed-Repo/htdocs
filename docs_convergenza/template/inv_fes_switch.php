<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle ">2</div>
	<div class="circle ">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Switch</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ratione! Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit.</p>

<!-- Selettore deposito -->
<h4>Deposito titoli</h4>
<section>
	<?php include("parts/selettore_deposito.php") ?>
</section>
<!-- Fine selettore deposito -->

<script type="text/javascript">

// Funzione di apertura della modale con la scheda fondo
// esempio di centralizzazione
var openFundModal = function(fundname,isin) {
	$("#modalFondoLabel").html(fundname);
	$("#modalFondoIsin").html(isin);
	$("#modalFondo").modal("show");
}
</script>

<!-- Selezione fondo di origine -->
<h4>SICAV/Fondo da vendere</h4>
<script type="text/javascript">
	/* Esempio di automazione */
	$(function(){
		/* Esempio inizializzazione */
		// Automazione "selezione"
		$("#fondo").spSel(
			function(){
				$("#formFondo").addClass("loading");
				setTimeout(function(){$("#formFondo").removeClass("loading");},500)
			}
		);
		// Inizializzazione personalizzata degli elementi correlati alla special select (nel caso specifico sono delle iconcine)
		// Esempio apertura modale "fondo"
		$("#fondo .spsel-addel.btn-icon").click(function(e){
			e.stopPropagation();
			openFundModal(
				$(this).attr("data-fundname"),
				$(this).attr("data-isin")
			)
		})
	});
</script>

<section>
	<div class="formGenerico borderFormRounded loading" id="formFondo">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label">Fondo/Sicav</label>
					<!-- Esempio modale fondo -->
					<div class="modal fade" id="modalFondo" tabindex="-1" role="dialog" aria-labelledby="modalFondoLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
									<h2 class="modal-title" id="modalFondoLabel">Deutsche lorem ipsum dolor sit amet</h2>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<p>Dati del fondo: ISIN <span id="modalFondoIsin"></span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Fine esempio modale fondo -->
					<div class="spsel spsel-hasicon nosel" id="fondo" placeholder="Seleziona fondo da vendere...">
						<input type="hidden" name="fondoinput" value="09812309822">
						<div class="spsel-options">
							<div class="spsel-option" data-value="09812309821">
								<a class="spsel-addel btn-icon" data-fundname="Deutsche lorem ipsum dolor sit amet" data-isin="09812309821"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el">Deutsche lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option" data-value="09812309822">
								<a class="spsel-addel btn-icon" data-fundname="Anima lorem ipsum dolor sit amet" data-isin="09812309822"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el">Anima lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option" data-value="09812309823">
								<a class="spsel-addel btn-icon"  data-fundname="Fondo lorem ipsum dolor sit amet" data-isin="09812309823"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el">Fondo lorem ipsum dolor sit amet</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Quote fondo presenti nel dossier</label>
					<span class="output">999.999.999,99</span>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, illum!">Controvalore in euro</label>
					<span class="output">999.999,99</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Ultima quota/NAV</label>
					<span class="output">999.999,99 EUR</span>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fine selezione fondo origine -->


<!-- Fondo di destinazione -->
<h4>Fondo di destinazione</h4>
<div class="formGenerico borderFormRounded output">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 nolabel">

				<!-- Modale di selezione del fondo con filtri -->
				<div class="modal fade" id="modalFundSelect" tabindex="-1" role="dialog" aria-labelledby="modalFundSelectLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
								<h2 class="modal-title" id="modalFundSelectLabel">Ricerca fondo di destinazione</h2>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-12">
										<!-- Filtra risultati -->
										<section id="filterForm">
											<div class="btn-align-left" id="filterSwitch">
												<a type="button" class="btn btn-primary" title="filtra i risultati"><i class="icon icon-filter"></i><span class="icon-text">Filtra risultati</span></a>
												<a type="button" class="btn btn-primary" title="nascondi i filtri" style="display:none"><i class="icon icon-close"></i><span class="icon-text">Nascondi filtri</span></a>
										    </div>
										    <br class="clear">
											<!-- Fine filtro risultati -->
											
											<!-- Blocco dei filtri -->
											<div id="filterFormFilters" class="formGenerico ui-front" style="display:none">
												<br class="clear">
												<!-- Form dei filtri -->
												 <div class="form-group">
											        <div class="row">
											        	<div class="col-sm-6">
											        		<!-- Nome o ISIN -->
											        		<label class="control-label">Nome o ISIN</label>
															<input type="text" id="nomeisin" class="form-control clear-x" />
											        		<script type="text/javascript">
															var cacheAC = {};
															$(function(){
																$("#nomeisin").autoComplete([], {
																"minLength": 3,
																"filter": function(request, response) {
																	var term = request.term;
																	if (term in cacheAC) {
																		response(cacheAC[term]);
																		return;
																	}
																	$.getJSON("/librerie/include/commons/ajax/fes/fdaAutoCom.php", request, function(data) {
																		data = $.map(data.data, function(item) {
																			return { "label": item.nome, "value": item.isin };
																		});
																		cacheAC[term] = data;
																		response(data);
																	});
																},
																"selectable": false,
																"clearable": true,
																"renderItem": stylingResults
															});



															})
															
															
															</script>
															<!-- Fine nome o ISIN -->
											        	</div>
											        	<div class="col-sm-6">
											        		<!-- Tipologia di fondo -->
											        		<label class="control-label">Tipologia di fondo</label>
															<div class="spsel spsel-check nosel" id="tipoFondoSel" placeholder="Seleziona un elemento...">
																<input type="hidden" name="tipoFondo">
																<div class="spsel-options">
																	<div class="spsel-option" data-value="azionario">
																		<label>
																			<input type="checkbox" value="azionario" name="tipoFondoSelCb">
																			<span class="spsel-option-el">Azionario</span>	
																			<span class="spse-countdetail">(11)</span>
																		</label>
																	</div>
																	<div class="spsel-option" data-value="obbligazionario">
																		<label>
																			<input type="checkbox" value="obbligazionario" name="tipoFondoSelCb">
																			<span class="spsel-option-el">Obbligazionario</span>	
																			<span class="spse-countdetail">(18)</span>
																		</label>
																	</div>
																</div>
															</div>	
											        		<!-- Fine tipologia di fondo -->
											        	</div>
											        </div>
											    </div>
												 <div class="form-group">
											        <div class="row">
											        	<div class="col-sm-6">
											        		<!-- Rating -->
											        		<label class="control-label">Rating</label>
															<div class="spsel spsel-check nosel" id="ratingSel" placeholder="Seleziona un elemento...">
																<input type="hidden" name="rating">
																<div class="spsel-options">
																	<?php for($i=0;$i<=5;$i++) { ?>
																	<div class="spsel-option" data-value="0">
																		<label>
																			<input type="checkbox" value="<?php print $i; ?>" name="ratingSelCb">
																			<span class="spsel-option-el"><?php print $i; ?> corone <div class="rating">
																			<?php for($h=1;$h<=5;$h++) {?>
																				<i class="icon icon-corona <?php if ($h<=$i) print "icon-corona-on" ; ?>"></i>
																			<?php } ?>
																			</div></span>	
																			<span class="spse-countdetail">(31)</span>
																		</label>
																	</div>
																	<?php }
																	?>
																	
																</div>
															</div>	
											        		<!-- Rating -->
											        	</div>
											        	<div class="col-sm-6">
											        		<!-- Dividendi -->
											        		<label class="control-label">Dividendi</label>
											        		<div class="spsel spsel-check nosel" id="dividendiSel" placeholder="Seleziona un elemento...">
																<input type="hidden" name="dividendi">
																<div class="spsel-options">
																	<div class="spsel-option" data-value="senzadividendi">
																		<label>
																			<input type="checkbox" value="senzadividendi" name="dividendiSelCb">
																			<span class="spsel-option-el">Senza dividendi</span>	
																			<span class="spse-countdetail">(123)</span>
																		</label>
																	</div>
																	<div class="spsel-option" data-value="condividendi">
																		<label>
																			<input type="checkbox" value="condividendi" name="dividendiSelCb">
																			<span class="spsel-option-el">Con dividendi</span>	
																			<span class="spse-countdetail">(333)</span>
																		</label>
																	</div>
																</div>
															</div>	
											        		<!-- Fone Dividendi -->
											        	</div>
													</div>
												</div>
												 <div class="form-group">
											        <div class="row">
											        	<div class="col-sm-6">
											        		<!-- Rendimento -->
											        		<label class="control-label">Rendimento</label>
											        		<div class="spsel spsel-check nosel" id="rendimentoSel" placeholder="Seleziona un elemento...">
																<input type="hidden" name="rendimento">
																<div class="spsel-options">
																	<div class="spsel-option" data-value="settimana">
																		<label>
																			<input type="checkbox" value="settimana" name="rendimentoSelCb">
																			<span class="spsel-option-el">Ultima settimana</span>	
																			<span class="spse-countdetail">(123)</span>
																		</label>
																	</div>
																	<div class="spsel-option" data-value="mese">
																		<label>
																			<input type="checkbox" value="mese" name="rendimentoSelCb">
																			<span class="spsel-option-el">Ultimo mese</span>	
																			<span class="spse-countdetail">(333)</span>
																		</label>
																	</div>
																		<div class="spsel-option" data-value="anno">
																		<label>
																			<input type="checkbox" value="anno" name="rendimentoSelCb">
																			<span class="spsel-option-el">Ultimo anno</span>	
																			<span class="spse-countdetail">(333)</span>
																		</label>
																	</div>
																</div>
															</div>	
											        		<!-- Fine rendimento -->
											        	</div>
											        </div>
											    </div>

												<!-- Fine form dei filtri -->
												
												<!-- Blocco azioni dei filtri -->
												<div class="btn-align-left">
													<a type="button" class="btn btn-default" title="Cancella i filtri selezionati" id="btnResetFundTable">Cancella i filtri selezionati</a>
													<a type="button" class="btn btn-default" title="Applica i filtri" id="btnLoadFundTable">Applica</a>
											    </div>
												<br class="clear">
												<!-- Fine blocco azioni dei filtri -->

											</div>

											<!-- Fine blocco dei filtri -->
											

											

										</section>

										<!-- Tabella risultati -->
										<div class="no-pagesize">
											<table cellspacing="0" cellpadding="0" border="0" class="no-pagesize" id="tbFunds">
											    <thead>
											        <tr>
											            <th class="center" data-field="cb"></th>
											            <th class="left" data-field="nome">Nome</th>
											            <th class="center" data-field="rating">Rating</th>
											            <th class="left" data-field="assogestioni">Assogestioni</th>
											            <th class="right" data-field="rend">Rend</th>
											            <th class="right" data-field="nav">Nav</th>
											            <th class="right" data-field="val">Val</th>
											        </tr>
											    </thead>
											    <tbody>
											    </tbody>
											</table>
										</div>
										<!-- Fine tabella risultati -->

										<!-- HTML REVISIONE -->
										
										<!-- FINE HTML REVISIONE -->


									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="btn-align-left">
									<a type="button" class="btn btn-default" title="annulla" data-dismiss="modal">annulla</a>
							    </div>
								<div class="btn-align-right">
									<a type="button" class="btn btn-default" id="fundSelectBtn" data-fundname="Nome del fondo da settare" data-isin="987654321" title="scegli">Scegli</a>
							    </div>
							</div>
						</div>
					</div>
				</div>


				<!-- Fine modale di selezione del fondo con filtri -->


				<script type="text/javascript">

					var openFundSearch = function(){
						// Apre la modale di selezione del fondo (inserire qui eventuali "reset")
						$("#modalFundSelect").modal("show");
					}

					
					var fundRadioSel = function(){
						// Prende i parametri dal radio selezionato e li mette nel bottone
						$("#fundSelectBtn").attr({"data-fundname":$(this).attr("data-fundname"),"data-isin":$(this).attr("data-isin")}).removeClass("btn-default").addClass("btn-primary");
					}

					
					

					// Funzione di selezione del fondo di destinazione
					var fundSelected = function(fundname,isin) {
						
						// Chiude la modale
						$("#modalFundSelect").modal("hide");

						// Riempie la select coi dati del fondo di destinazione
						$("#fondoDest").removeClass("nosel").addClass("spsel-hasicon");
						$("#fondoDest .spsel-option.spsel-selected").empty().append(
							$('<a class="spsel-addel btn-icon"><i class="icon icon-info"></i></a>').click(function(){
								openFundModal(
								fundname,isin
							);
							}),
							$('<a class="spsel-option-el">' + fundname + '</a></div>').click(openFundSearch)
						);

					};

					// Funzione che raccoglie i dati e prepara la tabella (la prima e' onload)
					var getFunds = function() {
						$("#tbFunds").addClass("loading");
            			$.ajax({
							url: "/include/ajax/fes_switchSearch.php",
							dataType: "json",
							success: function(datajson) {
								$("#tbFunds").bootstrapTable({
									sortable: true,
            						pagination : true,
            						pageSize: 10,
            						onPageChange: function() {$("#tbFunds input[name=fundRadioSel]").click(fundRadioSel);},
            						onPostBody: function() {$("#tbFunds input[name=fundRadioSel]").click(fundRadioSel);},
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
            					}).removeClass("loading");
								$("#tbFunds").bootstrapTable("load",datajson);
								

								// Inizializza i checkbox
								// $("#tbFunds input[name=fundRadioSel]").click(fundRadioSel);
								// Al refresh dei dati, riesegue il controllo


								// Reset del pulsante "scegli"
								$("#btnLoadFundTable, #btnResetFundTable").removeClass("btn-primary").addClass("btn-default");
							}
						})
					}

					
					// Inizializzazioni
					$(function(){

						// Inizializzazioni della modale
						$("#filterSwitch .btn").click(function() {
							// Apre e chiude i filtri
							$("#filterSwitch .btn, #filterFormFilters").toggle();

						});

						
						// Funzione di abilitazione/disabilitazione del pulsante
						var btnFtEnable = function () {
							$("#btnLoadFundTable, #btnResetFundTable").removeClass("btn-default").addClass("btn-primary");
						}

						// Esempio di reset dei filtri di ricerca
						$("#btnResetFundTable").click(function(){
							if (!$(this).hasClass("btn-default")) {
								// Reset di tutti i campi input;
								$("#nomeisin").val("");
								// Toglie tutti i flags
								$("#filterFormFilters .spsel .spsel-option input[type=checkbox]:checked").trigger("click");
								getFunds();
							}
						});

						// Esempio di applicazione dei filtri 
						$("#btnLoadFundTable").click(function(){
							// Se il bottone e' abilitato
							if($(this).hasClass("btn-primary")) {
								getFunds();
							}
						});

						// Inizializzazione autocomplete della modale
						var cacheAC = [];
						$("#nomeisin").autoComplete([], {
		                    "minLength": 3,
		                    "filter": function(request, response) {
		                        var term = request.term;
		                        if (term in cacheAC) {
		                            response(cacheAC[term]);
		                            return;
		                        }
		                        $.getJSON("/include/ajax/fes/fdaAutoCom.php", request, function(data) {
		                            data = $.map(data.data, function(item) {
		                                return { "label": item.nome, "value": item.isin };
		                            });
		                            cacheAC[term] = data;
		                            response(data);
		                        });
		                    },
		                    "selectable": false,
		                    "clearable": true,
		                    "renderItem": stylingResults
		                }).on("keyup",btnFtEnable);


						// Inizializzazione di tutti i filtri (al callback e' l'abilitazione dei pulsanti)
						// tipoFondo rating dividendi rendimento
						$("#tipoFondoSel").spSel(btnFtEnable);
						$("#rendimentiSel").spSel(btnFtEnable);
						$("#ratingSel").spSel(btnFtEnable);
						$("#dividendiSel").spSel(btnFtEnable);
						$("#rendimentoSel").spSel(btnFtEnable);


						// Funzione che raccoglie i dati e prepara la tabella (la prima e' onload)
						getFunds();

						// Click sul pulsante "scegli" nella modale
						$("#fundSelectBtn").click(function(){
							if(!$(this).hasClass("btn-default")) fundSelected($(this).attr("data-fundname"),$(this).attr("data-isin"));
						});

						// Automazione per la selezione del fondo di destinazione
						$("#fondoDest .spsel-option-el").click(openFundSearch);
					});
				</script>
				<div class="spsel custom nosel" id="fondoDest">
					<input type="hidden" name="fondoDest">
					<div class="spsel-option spsel-selected">
						<a class="spsel-option-el">Seleziona fondo di destinazione</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

<!-- Fine fondo di destinazione -->


<!-- Selezione quote -->
<section>
	
	<h4>Scegli quali quote vuoi vendere</h4>
	<!-- Fine esempio blocco interattivo -->
	<div class="formGenerico borderFormRounded output">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, aliquid.</p>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                            <input type="radio" name="quote" id="" value="1">
                            <span class="text"><strong>N.ro quote: 999.999,99 (999.999.999,99 EUR)</strong><br>
                            	Saldo da acquisto singolo (PIC) - PIPPO ROSSI, MANUELA VERDI, MARIO BIANCHI</span>
                        </label>
                    </div>
					<div class="formGenerico borderFormRounded">
                    	<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Importo rata</label>
									<span class="output">999999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate residue</label>
									<span class="output">99</span>
								</div>
							</div>
						</div>
                    </div>
				</div>

				<div class="col-xs-12 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                             <input type="radio" name="quote" id="" value="2" >
                            <span class="text"><strong>N.ro quote: 199.999,99 (199.999.999,99 EUR)</strong><br>
                            	Saldo da acquisto singolo (PIC) - MANUELA VERDI, MARIO BIANCHI</span>
                        </label>
                    </div>
                    <div class="formGenerico borderFormRounded">
                    	<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Importo rata</label>
									<span class="output">999999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate residue</label>
									<span class="output">99</span>
								</div>
							</div>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</div>

	<h4>Scegli quante quote vuoi vendere</h4>
	<!-- Fine esempio blocco interattivo -->
	<div class="formGenerico borderFormRounded output">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum dolor sit amet, consectetur adipisicing elit ipsum dolor sit amet, consectetur adipisicing elit ipsum dolor sit amet, consectetur adipisicing elit. <strong>Quis, aliquid</strong>.</p>
		<script type="text/javascript">
			// Esempio automazione selettore quote/importo
			$(function(){
				$("#quoteimp").change(function(){

						


					// Mostra o nasconde il form relativo (prevedere eventuali reset)
					$("#selimp,#selquo,#estinzionePac").hide();
						
					// Esempio di reset
					$("#vendImportoField").val("");
					$("#vendQuoteField").val("");
					$("#importoQuote").html("NNNN,DD");
					$("#quoteImporto").html("NNNN,DD");


					if($(this).val()=="imp") {
						// Caso "importo"
						$("#selimp").show();
					}
					else
					{

						// Caso "quote"
						
						// Se si sceglie "tutte le quote"
						if ($(this).val()=="tutto") {

							// Applicazione di tutte le quote (se necessario)
							$("#vendQuoteField").val("999999.99");

							// Calcolo del controvalore
							$("#quoteImporto").html("99999,99");
					
							// Mostra anche il radio "estingui PAC", se necessario
							$("#estinzionePac").show();
						}
						
						// Il numero, per questo esempio, e' forzato


						// Mostra il contenitore
						$("#selquo").show();
					}

				}).trigger("change");
			})
		</script>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">Seleziona quote o importo</label>
					<select class="form-control" id="quoteimp">
                        <option selected value="imp">Vendi un importo</option>
                        <option value="quo">Vendi un numero di quote</option>
                        <option value="tutto">Vendi tutte le quote del deposito selezionato</option>
                    </select>
				</div>
				<div class="col-xs-12 col-sm-6">
					<!-- Importo -->

					<!-- Fine importo -->
					<div id="selimp" style="display:none">
						<label class="control-label">Importo da vendere</label>
						<div class="input-group" id="vendImporto">
                                <input maxlength="10" id="vendImportoField" value="" type="number" name="importo" class="form-control clear-x">
                                <div class="input-group-addon">EUR</div>
                        </div>
                        <p class="note dettaglicampo">Quote corrispondenti: <strong id="importoQuote"></strong></p>

					</div>
					<!-- Quote -->
					<div id="selquo" style="display:none">
						<label class="control-label">Quote da vendere</label>
						<div class="input-group" id="vendQuote">
                            <input maxlength="10" id="vendQuoteField" value="" type="number" name="quote" class="form-control clear-x">
                            <div class="input-group-addon">EUR</div>
                        </div>
                        <p class="note dettaglicampo">Controvalore: <strong id="quoteImporto"></strong> EUR</p> 
					</div>
					
				</div>
			</div>
		</div>
		<div class="form-group" id="estinzionePac">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">Vuoi estinguere anche il PAC?</label>
					<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio" name="estPAC">
			                            <span class="text">Si</span>
			                        </label>
			                    </div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="radio inline">
									<label class="textWrapper">
			                            <input type="radio" name="estPAC">
		                            	<span class="text">No</span>
			                        </label>
			                    </div>
							</div>
						</div>


				</div>
			</div>
		</div>
	</div>



	<!-- Pulsantiera -->
	<div class="form-group btnWrapper">
		<?php if($site == "webank") { ?>
		<div class="stepBtn">Step <strong> 1 </strong> di 3</div>
		<?php } ?>
	    <div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_switch_informazioni.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=switch">prosegui</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->



