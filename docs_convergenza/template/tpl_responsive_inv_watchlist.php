<script type="text/javascript" src="/common/fe/js/priv_fes_resp.js"></script>
<h2>Watchlist</h2>

	<script type="text/javascript">
	/* Funzioni gestione WL (esempio) */
	$(function(){

		/* Cambio "watchlist */
		$("#wlSelect").change(function(){
			if($(this).val() == "standard") {
				$("#wlConsole").hide()
				$("#wlSelWrap").switchClass("col-xs-8","col-xs-12",200);
			}
			else
			{
				$("#wlConsole").delay(201).fadeIn();
				$("#wlSelWrap").switchClass("col-xs-12","col-xs-8",200);
			}

			// Inserisce il nome della WL come valore predefinito per il cambio nome o l'eleminazione
			$("#wlNameEdit").val($(this).find("option:selected").text())
			$("#wlNameElimina").text($(this).find("option:selected").text());
		});

		/* Pulsanti di azione sulla watchlist*/
		$("#wlCrea").click(function(){
			// Nasconde tutti i blocchi di gestione WL
			$(".wlFormBlock").hide();
			$("#wlCreaForm").show();
			$("#layerWl").modal("show");
		})


		$("#wlEdit").click(function(){
			$(".wlFormBlock").hide();
			$("#wlEditForm").show();
			$("#layerWl").modal("show");
		});


		$("#wlElimina").click(function(){
			$(".wlFormBlock").hide();
			$("#wlEliminaForm").show();
			$("#layerWl").modal("show");
		});

		/* Bottoni "annulla" */
		$("#layerWl .btn-annulla").click(function(){
			$("#layerWl").modal("hide");
		});


	});

	</script>


<div id="fullPageWl">
<section>
	<form class="formGenerico borderFormRounded" role="form">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<label class="control-label">Seleziona watchlist</label>

						<div class="row">
							<div class="col-xs-12 col-sm-8" id="wlSelWrap">
								<!-- ESEMPIO DATO OUTPUT (WL SINGOLA)
								<span class="output">Lorem ipsum</span>
								-->
								<select name="" class="form-control" id="wlSelect">
				                    <option selected value="standard">Watchlist standard</option>
				                    <option value="Mia watchlist">Mia watchlist</option>
				                </select>
							</div>
							<div class="col-xs-4" id="wlConsole" style="display:none">
								<div class="icon-console">
									<a class="no-underline btn-icon" id="wlEdit"><i class="icon icon-edit_fill icon-2x"></i></a>
									<a class="no-underline btn-icon" id="wlElimina"><i class="icon icon-delete_table icon-2x"></i></a>
								</div>
							</div>
							
							<!-- LAYER DI MODIFICA -->
								<div class="modal fade" id="layerWl" tabindex="-1" role="dialog" aria-labelledby="layerWlLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
											</div>
											<div class="modal-body">
												<div class="container-fluid">

													<!-- Crea nuova Watchlist -->
													<div id="wlCreaForm" class="wlFormBlock">
														<div class="row">
															<div class="col-xs-12">
																<h3>Crea watchlist</h3>
																<p>Dai un nome alla tua nuova watchlist: puoi inserire un massimo di 50 caratteri.</p>
																<div class="form-group">
																	<div class="row">
																		<div class="col-sm-6">
																			<label class="control-label">Nome watchlist</label>
																			<input type="text" name="" class="form-control clear-x">
																		</div>
																	</div>
																</div>
																<div class="form-group btnWrapper">
													                <div class="btn-align-left">
													                    <a type="button" class="btn btn-default btn-annulla">Annulla</a>
													                </div>
													                <div class="btn-align-right">
													                    <a type="button" class="btn btn-primary" id="wlCreaBtn">Crea</a>
													                </div>
													                <br class="clear">
													            </div>
															</div>
														</div>
													</div>
													<!-- Fine crea nuova Watchlist -->

													<!-- Edit Watchlist -->
													<div id="wlEditForm" class="wlFormBlock">
														<div class="row">
															<div class="col-xs-12">
																<h3>Modifica watchlist</h3>
																<p>Modifica il nome della tua watchlist: puoi inserire un massimo di 50 caratteri.</p>
																<div class="form-group">
																	<div class="row">
																		<div class="col-sm-6">
																			<label class="control-label">Nome watchlist</label>
																			<input type="text" name="" class="form-control clear-x" id="wlNameEdit">
																		</div>
																	</div>
																</div>
																<div class="form-group btnWrapper">
													                <div class="btn-align-left">
													                    <a type="button" class="btn btn-default btn-annulla">Annulla</a>
													                </div>
													                <div class="btn-align-right">
													                    <a type="button" class="btn btn-primary" id="wlEditBtn">Salva</a>
													                </div>
													                <br class="clear">
													            </div>
															</div>
														</div>
													</div>
													<!-- Fine eidit Watchlist -->

													<!-- Elimina Watchlist -->
													<div id="wlEliminaForm" class="wlFormBlock">
														<div class="row">
															<div class="col-xs-12">
																<h3>Elimina watchlist</h3>
																<p>Sei sicuro di voler eliminare la watchlist "<strong id="wlNameElimina"></strong>"?</p>
																<div class="form-group btnWrapper">
													                <div class="btn-align-left">
													                    <a type="button" class="btn btn-default btn-annulla">Annulla</a>
													                </div>
													                <div class="btn-align-right">
													                    <a type="button" class="btn btn-primary" id="wlEliminaBtn">Conferma</a>
													                </div>
													                <br class="clear">
													            </div>
															</div>
														</div>
													</div>
													<!-- Elimina Watchlist -->


												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- FINE LAYER DI MODIFICA -->

						</div>



				</div>
				<div class="col-xs-12 col-sm-4 no-label">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="wlCrea" title="Crea nuova watchlist">Crea nuova watchlist</a>
					</div>
				</div>
			</div>
		</div>
	</form>
	</section>


	<!-- Esempio messaggio -->
	<section class="boxesitoWrap" id="messaggioWl" style="display:none">
		<div class="boxesito">
			<div class="text">
				<div class="row">
					<div class="col-xs-12 messaggioTesto">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Esempio messaggio -->


	<!-- ELENCO WL -->
	<section id="sectionWl">
	<div class="borderFormRounded">



	<script type="text/javascript">

		// Esempio di automazione per la ricerca di un fondo da inserire nella watchlist
		var cacheAC = {},
		autoCompUrl = "/common/ajax/fes_autocomplete.json",
		showSearchResults,
		icoopeUrl = "",
		checkToConf = [],
		$tableWatchlist;

		// Set di un messaggio (esempio indicativo)
		// Tipomsg = "positivo", "negativo", "attenzione"
		var setWlMessaggio = function (tipomsg,testo) {
			var msgW = $("#messaggioWl").show();
			msgW.find(".messaggioTesto").empty().append($("<p>").html(testo));
			msgW.find(".boxesito").removeClass("positivo errore attenzione").addClass(tipomsg);
		};


		var tendinaNomeIsin = function(ul, item) {
	    "use strict";
		    var resultItem,
		        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');

			resultItem = item.label.replace(x, function(Match) {
			    return '<strong>' + Match + '</strong>';
			});
			return $("<li></li>")
			    .data("item.autocomplete", item)
			    .append("<a class='autocomplete_link'>" + resultItem + "</a>")
			    .appendTo(ul.css("z-index", getNextHighestZindex()));
			}


		// Emulazione funzione aggiunta a watchlist (es: dato un isin)
		var addToWl = function() {

			// Mette la pagina in loading (es: per repost/refresh?)
			$("#fullPageWl").addClass("loading");

			// Chiude la popup
			setWlMessaggio("positivo","Hai aggiunto il fondo XXXX alla watchlist XYZ");

			// Effettua l'operazione di inserimento lato BE...
			// ...alla fine della quale ricarica la watchlist

			loadWatchlist();

			$("#layerFondi").modal("hide");

		}

		// Stilizzazione celle positivo/negativo
		var formatPosNeg = function(val) {
			return {"classes": (Number(val.replace(",",".")>=0)? "posi right" : "nega right")};
		}


		// Caricamento di una watchlist (dati indicativi)
		var loadWatchlist = function(){

			$("#fullPageWl").addClass("loading");

			
			// Es: come parametro utilizzo il valore della SELECT
			$.ajax({
				url: "/include/ajax/fes_watchlist.php",
				data: {
					"idWL" : $("#wlSelect").val()
				},
				dataType: "json",
				method: "POST",
				error: function() {
					alert("Si e' verificato un errore durante il caricamento dei dati");
				},
				success: function(data){

						$(".tooltip:visible").hide();

						if (data.esito == "ok") {
							$("#wlConfronta").addClass("btn-disabled");
							if (data.watchList.length == 0) {
								$("#messaggioWlNofondi").show();
								$("#tableWatchlist").hide();
							}
							else
							{
								$("#messaggioWlNofondi").hide();

								var tableData = data.watchList;

								//mostra o nasconde la colonna di confronto
								if (tableData.length<1) {
									$("#tableWatchlist").show().addClass("noconf");
								}
								else
								{

									// Modifica i dati ricevuti per inserire il blocco checkbox e l'icona operativa "speciale"
									$.each(tableData,function(i,v){

										// Link iniziale
										tableData[i].fundlink = "<a href=\"" + tableData[i].url +"\">"+ tableData[i].nome + "</a>";

										// Checkbox
										tableData[i].check = "<input type=\"checkbox\" name=\"confCheck\" value=\""+ v.isin +"\">";

										// Icona operativa
										tableData[i].icoope = "<a class=\"linkVai\" title=\"scegli l'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\""+v.codicesocieta+"\" codicecomparto=\""+v.codicecomparto+"\" divisa=\""+v.val+"\" fondosicav=\""+v.fondosicav+"\" data-fundname=\""+v.nome+"\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a>";

										// assembla il dato HTML Var% dal
										tableData[i].diffdal = "<span class=\""+ ((tableData[i].diff>=0)? "posi" : "nega")+"\">"+ tableData[i].diff + "</span><br><span class=\"dettagli\">dal " + tableData[i].datains + "</span>";

										// Crea il nav con la valuta
										tableData[i].navval = tableData[i].przultimo + "<br>" +  tableData[i].val

										// Crea il nav datains con la valuta
										tableData[i].navvaldatains = tableData[i].przinserimento + "<br>" +  tableData[i].val

									});


									$tableWatchlist.bootstrapTable("load",tableData);

									

									// Attiva gli automatismi della tabella
									// ICONA OPERATIVA
									tableWatchlistInit = function() {

										$(".linkVai").click(fesIcoOpeOverlay);

										// Riflagga i checkbox connessi (e li attiva)
										$("input[name=confCheck]").attr("checked",false)
										$.each(checkToConf,function(i,v){
											$("input[name=confCheck][value='"+v+"']").attr("checked",true)
										});

										// CHECK CONFRONTA
										$("input[name=confCheck]").click(function(){

											var thisEl = $(this);

											// Check o uncheck del correlato
											$("input[name=confCheck][value='"+ thisEl.val()+"']").not(thisEl).attr("checked",thisEl.prop("checked"));

											var ttEv = $("input[name=confCheck]:checked");
											var ttMsg = "";

											// Aggiorna lo stato dei check attivi
											checkToConf = new Array();
											$.each($("input[name=confCheck]:checked"),function(i,v){
												$("input[name=confCheck][value='"+$(v).val()+"'").attr("checked",true)
												if($.inArray(checkToConf, $(v).val())<0) checkToConf.push( $(v).val() )
											});
											checkToConf = $.unique(checkToConf);


											$("#wlConfronta").removeClass("btn-disabled");


												// Determina il testo da inserire nel tooltip
												if(thisEl.is(":checked"))
												{
													if(checkToConf.length>=2)
													{
														if (checkToConf.length>2) {
															$("input[name=confCheck][value='"+ thisEl.val()+"']").attr("checked" , false);
															ttMsg = "E' possibile confrontare al massimo 2 fondi"
															checkToConf.splice(checkToConf.indexOf(thisEl.val()),1);
														}
														else
														{
															ttMsg = "<strong>Fondo aggiunto al confronto.</strong><br>&Egrave; possibile confrontare al massimo 2 fondi alla volta.";
														}
													}
													else
													{
														ttMsg = "<strong>Fondo aggiunto al confronto.</strong><br>Lo trovi alla pagina \"confronta\".";
													}
												}
												else
												{
													ttMsg = "Hai rimosso un elemento dal confronto";
													if (checkToConf.length<=0) $("#wlConfronta").addClass("btn-disabled");

												}



												// Chiude eventuali tooltip aperti
												$(".tooltip:visible").hide();
												thisEl.attr("data-toggle","tooltip");
												thisEl.tooltip({trigger: "manual", html: true})
													.attr('data-original-title', ttMsg)
													.tooltip('show');



										});

									};
									$tableWatchlist.on("post-body.bs.table",tableWatchlistInit);
									tableWatchlistInit();

									


								$("#searchResultsTable").show().removeClass("noconf");
							}

							// Limite massimo di fondi (10)
							$("#wlAggiungi").toggleClass("btn-disabled",data.length>=10)

						}
					}
					else
					{
						// Mostra il messaggio d'errore


					}

				$("#fullPageWl").removeClass("loading");

			}

		});

		}

		// Funzione RIMOZIONE DA WATCHLIST (esempio)
		var rimuoviDaWatchlist = function(el) {

			// Parametri in ingresso (es ISIN - lo riceve come attributo del link dell'icona operativa. E' possibile integrare altri parametri con lo stesso metodo (es: data-nome, ecc...))
			var isin = $(el).attr("data-isin");

			// Chiude la modale attiva e mostra quella della rimozione da Watchlist
			$("#icoOpeModal").modal("hide");

			// Resetta la modale di rimozione e la apre
			$("#wlRemoveIsin").html(isin);
			$("#wlRemoveOlIntro").show();
			$("#wlRemoveOlEsito").hide();
			$("#wlRemoveOl").modal("show");

			// Popola anche i campi per la rimozione (aggiungere quanto necessario)
			$("#isinToRemove").val(isin);

		}

		var rimuoviDaWatchlistAction = function() {

			$("#wlRemoveOlIntro").hide();
			$("#wlRemoveOlEsito").addClass("loading").show();
			// Raccogliere qui l'esito dall'eventuale chiamata AJAX (qui simulata con un TIMING)

			setTimeout(function(){
				// Popola l'esito
				$("#wlRemoveOlEsitoBox").addClass("positivo").find("p").html("Fondo rimosso con successo dalla watchlist selezionata.")
				$("#wlRemoveOlEsito").removeClass("loading");

				// Ricarica la Watchlist corrente
				loadWatchlist();

			},1000)

		}


		var codSocieta = "";

		// Funzioni "onload"
		$(function(){

			// Autocomplete nome fondo/ISIN
			 $("#nomeISIN").keydown(function (event) {
	            if (event.which === 13) {
	                event.preventDefault();
	            }
	        }).autoComplete([], {
	            minLength: 0,
	            filter: function(request, response) {
	                var term = $.trim(request.term),
	                    chars = request.term.replace(/\s+/g, "");
		                if (chars.length < 3) {
	                    	$("#nomeISIN").autocomplete("close");
	                	} else {
						if (term in cacheAC) {
	                        	response(cacheAC[term]);
	                        	return;
	                    	}
	                    else {
		                    $.getJSON(autoCompUrl, { "svalue": request.term }, function(res) {
		                        var data = res;
		                        if (data.length) {
		                            data = $.map(data, function(item) {
		                                return { "label": item.nome, "value": item.isin };
		                            });
		                        }
		                        cacheAC[term] = data;
		                        response(data);
		                    });
	                    }
	                }
	            },
	            selectable: false,
	            clearable: true,
	            renderItem: tendinaNomeIsin
	        });


			/* Blocco funzioni Aggiunta fondi a WL*/

			/* Tabella bootstrap */
			// Inizializzazione tabella di bootstrap;
			$tableWatchlist = $('#tableWatchlist').bootstrapTable({
	            sortable: true,
	            sortName: "fundlink",
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

			/* Apertura della modale */
			$("#wlAggiungi").click(function(){

				if (!$(this).hasClass("btn-disabled")) {
					// Reset dell'aggiunta fondi
					$("#searchIntro").show();
					$("#searchNome, #searchSocieta, #searchResults").hide();
					$("#layerFondi").modal("show");

				}

			});

			// Interazioni sulla modale (esempio controlli)

			//Bottoni di "smistamento"
			$("#btSearchNome").click(function(){
				$("#searchIntro").hide();
				$("#searchNome").show();
			});

			$("#btSearchSocieta").click(function(){
				$("#searchIntro").hide();
				// Reset della ricerca
				$("input[name=selectBoxesMini]").val("");
				$("#searchSocieta").show().find(".selector-box.selected").removeClass("selected");
			});


			// Risultati della ricerca

			showSearchResults = function(){
				// Impostare qui l'algoritmo di ricerca con i parametri corretti.
				// Qui viene emulato un semplice timeout
				$("#searchNome, #searchSocieta").hide();
				$("#searchResults").show().addClass("loading")
				setTimeout(function(){$("#searchResults").removeClass("loading")},500)
				// Riporta il "focus" in testa alla modale
				$("#layerFondi .modal-content").scrollTop(0);
			}
			$("#searchSocieta .selector-box").click(function(){
				codSocieta = $(this).attr("data-value");
				// alert(codSocieta);
				showSearchResults();
			});

			// Inizializzazione watchlist corrente
			$("#wlSelect").change(loadWatchlist);

			// Inizializzazione bottone confronta (esemplificativa)
			$("#wlConfronta").addClass("btn-disabled").click(function(){
				//
				if (!$(this).hasClass("btn-disabled")) {
					// Esempio dei dati per il link (modificare a piacimento)
					alert(checkToConf);
				}

			});

			// Inizializzazione watchlist
			loadWatchlist();

		});
		</script>





		<!-- MODALE SELEZIONE FONDO -->
		<div class="modal fade" id="layerFondi" tabindex="-1" role="dialog" aria-labelledby="layerFondiLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
						<h2 class="modal-title" id="layerFondiLabel">Aggiungi un fondo alla watchlist</h2>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<!-- Blocco introduttivo -->
									<div id="searchIntro">
										<p>Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur.</p>
										<div class="form-group btnWrapper">
											<div class="btn-align-left">
												<a type="button" class="btn btn-default" title="annulla" data-dismiss="modal">annulla</a>
											</div>
											<div class="btn-align-right">
												<a type="button" class="btn btn-primary" title="Cerca per nome/ISIN" id="btSearchNome">Cerca per nome/ISIN</a>
												<a type="button" class="btn btn-primary" title="Cerca per societ&agrave; di gestione" id="btSearchSocieta">Cerca per societ&agrave; di gestione</a>
											</div>
											<br class="clear">
										</div>
									</div>
									<!-- Fine blocco introduttivo -->
									<!-- Selezione per Nome/ISIN -->
									<div id="searchNome">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore sit, nam necessitatibus saepe quas laudantium dicta, expedita excepturi nulla.</p>
										<div class="formGenerico">
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label class="control-label">Nome fondo o ISIN</label>
														<div class="editable-input">
															<input type="text" name="" class="form-control clear-x" id="nomeISIN">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group btnWrapper">
												<div class="btn-align-left">
													<a type="button" class="btn btn-default" title="annulla" data-dismiss="modal">annulla</a>
												</div>
												<div class="btn-align-right">
													<a type="button" class="btn btn-primary" title="Cerca" onclick="showSearchResults();">Cerca</a>
												</div>
												<br class="clear">
											</div>
										</div>
									</div>
									<!-- Selezione per società di gestione -->
									<div id="searchSocieta">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ipsa nemo ullam, consequuntur repellat quidem consequatur est assumenda fugiat eveniet.</p>
										<div class="selector-wrap selector-mini" data-input-type="radio" data-input-name="selectBoxesMini">
											<input name="selectBoxesMini" type="hidden" value="">
											<div class="selector-box " data-value="x">
												<img src="/common/fe/img/lgsoc_allianz.png" class="img100">
												<span class="definition">Allianz Global investor</span>
											</div>
											<?php
													for($x==1;$x<30;$x++) {
													?>
												<div class="selector-box " data-value="x<?php print $x;?>">
													<img src="/common/fe/img/placeholder_1-1.png" class="img100">
													<span class="definition"><?php print randomText(4,2); ?></span>
												</div>
												<?php
													}
												?>
										</div>
										<div class="form-group btnWrapper">
											<div class="btn-align-left">
												<a type="button" class="btn btn-default" title="annulla" data-dismiss="modal">annulla</a>
											</div>
											<br class="clear">
										</div>
									</div>
									<!-- Fine selezione per societ&agrave; di gestione -->
									<!-- Blocco filtrato -->
									<div id="searchResults">
										<p>Seleziona un fondo per aggiungerlo alla tua watchlist (testo provvisorio)</p>
										<table cellspacing="0" cellpadding="0" border="0" id="searchResultsTable">
											<thead>
												<tr>
													<th>Nome fondo</th>
													<th class="hidden-xs">ISIN</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr class="dispari">
													<td>Allianz global xyx lorem</td>
													<td class="hidden-xs">FR01234567890</td>
													<td><a class="btn-icon" data-isin="FR01234567890" onclick="addToWl();"><i class="icon icon-add_filled"></i ></a></td>
												</tr>
												<?php

														for($y==1;$y<4;$y++) {
														?>
													<tr class="pari">
														<td>Lorem ipsum dolor sit amet</td>
														<td class="hidden-xs">FR012345
															<?php print ($y*132); ?>
														</td>
														<td><a class="btn-icon" data-isin="FR012345<?php print ($y * 132); ?>" onclick="addToWl();"><i class="icon icon-add_filled"></i ></a></td>
													</tr>
													<tr class="dispari">
														<td>Lorem ipsum sit amet</td>
														<td class="hidden-xs">FR012345
															<?php print ($y*111); ?>
														</td>
														<td><a class="btn-icon" data-isin="FR012345<?php print ($y * 111); ?>" onclick="addToWl();"><i class="icon icon-add_filled"></i ></a></td>
													</tr>
													<?php
														}
													?>
											</tbody>
										</table>
										<!-- Blocco risultati filtrati -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FINE MODALE SELEZIONE FONDO -->
		


		<!-- Modale di rimozione fondo da Watchlist -->
		<div class="modal fade" id="wlRemoveOl" tabindex="-1" role="dialog" aria-labelledby="wlRemoveOlLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title" id="wlRemoveOlLabel">Rimuovi un fondo dalla Watchlist</h2>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									<div id="wlRemoveOlIntro">
										<input id="isinToRename" value="" type="hidden" />
										<p>Vuoi davvero rimuovere il fondo "<span id="wlRemoveIsin"></span>" dalla Watchlist corrente?</p>
										<div class="form-group btnWrapper">
											<div class="btn-align-left">
												<a type="button" class="btn btn-default" data-dismiss="modal" >annulla</a>
											</div>
											<div class="btn-align-right">
												<a type="button" class="btn btn-primary" onclick="rimuoviDaWatchlistAction()">procedi</a>
											</div>
											<br class="clear">
										</div>
									</div>
									<div id="wlRemoveOlEsito" class="loading">
										<div class="boxesito" id="wlRemoveOlEsitoBox">
											<div class="text">
												<div class="row">
													<div class="col-xs-12">
														<p></p>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group btnWrapper">
											 <div class="btn-align-right">
							                    <a type="button" class="btn btn-primary" data-dismiss="modal">Torna a watchlist</a>
							                </div>
							            </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fine modale id rimozione del fondo dalla Watchlist -->



		<!-- Console fondo -->
		<div class="row">
			<div class="col-xs-12">
				<div class="form-group btnWrapper">
	                <div class="btn-align-left">
	                    <a type="button" class="btn btn-primary btn-disabled" id="wlConfronta">Confronta selezionati</a>
	                </div>
	                <div class="btn-align-right">
	                    <a type="button" class="btn btn-primary" id="wlAggiungi">Aggiungi a watchlist</a>
	                </div>
	                <br class="clear">
	            </div>
	        </div>
		</div>
		<!-- Fine console fondo -->

		<!-- Messaggio assenza fondi nella Watchlist -->
		<section class="boxesitoWrap" id="messaggioWlNofondi" style="display:none">
			<div class="boxesito attenzione">
				<div class="text">
					<div class="row">
						<div class="col-xs-12">
							<p>Al momento non ci sono fondi nella watchlist selezionata</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Fine messaggio assenza fondi nella watchlist -->

		<!-- ROSSI E VERDI SONO REND YTD e VAR% -->

		<!-- TABELLA -->
	 	<table id="tableWatchlist" cellspacing="0" cellpadding="0" border="0" class="sortableTable fondiwatchlist">
		     <thead>
		        <tr>
		        	<th data-field="icoope" class="icopad center"></th>
		        	<th data-field="check" class="checkcol nosmall center"></th>
		            <th data-field="fundlink" data-sortable="true" data-sort-name="nome">Nome fondo</th>
		            <th data-field="categoria" class="nosmall">Categoria assogestioni</th>
		            <th data-field="rendimento"  data-sortable="true" data-cell-style="formatPosNeg" class="right">Rend. YTD %</th>
		            <th data-field="navval" data-sort-name="przultimo" class="right">NAV</th>
		            <th data-field="navvaldatains" class="right" data-sort-name="przinserimento">NAV data ins.</th>
					<th data-field="diffdal" data-sortable="true" data-sort-name="diff" class="center">Var. %</th>
		        </tr>
		     </thead>
		</table>
	</div>
	<!-- FINE ELENCO WL -->

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



	<!-- TABELLA -->
	</section>
</div>
