<?php
	$etf = $_GET["etf"];
	if (empty($etf)) $etf = "standard";

?>
<!--LE FUNZIONALITA' QUI EMULATE SONO SOLO A TITOLO ESEMPLIFICATIVO PRENDERE LE FUNZIONI GIA' PRESENTI IN SVILUPPO -->

<script type="text/javascript">
$(function() {

	//inizializzazione dei vari datepicker

	$.each(["scadenzaDal","scadenzaAl"],function(i,v){

		$("#"+v).mask("99/99/9999");
		$("#"+v).mask("99/99/9999");
		$("#"+v).datepicker({
			minDate: 1,
			showOtherMonths: true,
			showOn: "button",
			prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
			nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			buttonImage: "/common/fe/img/pixel_trasp.gif",
			buttonImageOnly:true,
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		    onClose: function(){
		    	$("#"+v).modal('hide');
		    }
	    })
	   appendDatePickerIcon(v);

	});

});
</script>

<h2>Ricerca</h2>


<div class="navContFirstLev outerTab marginBottomLarge">
	<div class="innerTab">
		<ul class="tabbig">
			<li class="<?php if($etf=="standard" || empty($etf)) print "on"; ?>"><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf.php&liv1=trading&liv2=mercati_e_quotazioni&liv3=etf&liv4=ricerca&etf=standard">Standard</a></li>
			<li class="<?php if($etf=="strutturati") print "on"; ?>"><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf.php&liv1=trading&liv2=mercati_e_quotazioni&liv3=etf&liv4=ricerca&etf=strutturati">Strutturati</a></li>
			<li class="<?php if($etf=="etc") print "on"; ?>"><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf.php&liv1=trading&liv2=mercati_e_quotazioni&liv3=etf&liv4=ricerca&etf=etc">ETC</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>

	<script type="text/javascript">
	$(function(){

		// Esempio di inizializzazione tabbed-buttons
		$(".tabbed-buttons .btn[data-target]").click(function(){
			var btn = $(this);
			$.each(btn.parents(".tabbed-buttons").find(".btn"),function(i,v){
				var actBt = $(v),
					btTarget = actBt.attr("data-target");
				if (actBt.is(btn)){
					actBt.removeClass("btn-default").addClass("btn-primary");
					$(btTarget).show();
				}
				else
				{
					actBt.removeClass("btn-primary").addClass("btn-default");
					$(btTarget).hide();
				}
				$(".cube-selector .maingroup .categs>li.is-active").removeClass("is-active");
				$("#tipoTitoli .subgroup").hide();
				$("#searchResults").hide();

			});

			// Ricerca rapida
			$("#ricercaRapidaBtn").click(function(){
				$("#searchResults").show();

			});

		});
	})
	</script>

	<!-- Selettore tipo ricerca -->
	<div class="form-group btnWrapper tabbed-buttons">
		<div class="btn-align-left">
			<a type="button" class="btn btn-primary" data-target="#ricercaInterattiva" title="Ricerca interattiva">Ricerca interattiva</a>
			<a type="button" class="btn btn-default" data-target="#ricercaRapida" title="Ricerca semplice">Ricerca rapida</a>
		</div>
		<br class="clear">
	</div>
	<!-- Fine selettore tipo di ricerca -->

	<!-- Paragrafo introduttivo -->
	<p>Lorem ipsum dolor sit amet, consectetur <strong>adipisicing</strong> elit. Iure deleniti laboriosam, tempora aspernatur aliquid.</p>
	<!-- Fine paragrafo introduttivo -->

	<!-- Ricerca interattiva -->
	<section id="ricercaInterattiva">

					<script>

					// Variabili in pagina
					var lcs, lcstitle,lcsbody;

					// Funzioni generiche 
					var showResultsTable = function(){
						lcs.modal("hide");
						$("#searchResults").show();
						$("html, body").animate({scrollTop: $("#searchResults").offset().top},1000)
					}


					$(function(){

						$(".cube-selector .maingroup .categs>li").click(function(){
							selLi = $(this);
							selLi.siblings("li").removeClass("is-active");
							selLi.addClass("is-active");
							$("#searchResults").hide();
							if(selLi.attr("data-sg")==="0") {
								showResultsTable();
							}
							else
							{
								lcsbody.addClass("loading");
								
								// Prepara il contenuto della modale corretto
								lcstitle.html(selLi.find(".cube__name").html());
								lcsbody.find(".data-sg-selectors").hide();
								lcsbody.find("div[data-sg=" + selLi.attr("data-sg") + "]").show();
								// Resetta la selezione precedente
								lcs.find(".selector-box.selected").removeClass("selected");
								lcsbody.removeClass("loading");

								// Apre la modale di selezione
								lcs.modal("show");
							}
							
						});


						// Inizializzazione della modale
						lcs = $("#layerCubeSel"),
						lcstitle = $("#layerCubeSelLabel"),
						lcsbody = $("#layerCubeSelBody").addClass("loading");

						// Esempio selezione nella modale
						lcs.find(".selector-box").click(showResultsTable);

						// Selettore a tendina per mobile
						$("#cubesCateg1Select").change(function(){
							var sel = $(this);
							$(".cube-selector .maingroup .categs>li[data-sg="+ sel.val()+"]").trigger("click");
						});

						$(".toggleRicercaRapida").click(function(e){
							e.preventDefault();
							$("#ricercaSemplice, #ricercaAvanzata").toggle();
						});

					});
					</script>
					<div class="cube-selector">

						<!-- Select alternativa per mobile -->
						<div class="form-group visible-xs">
							<select name="cubesCateg1Select" class="form-control" id="cubesCateg1Select">
								<?php 
									
									$catnum = 4;

									switch($etf) {

										case "standard":
											?>
											<option selected value="0">Lista</option>
						                    <option value="1">Emittente</option>
						                    <option value="2">Area</option>
						                    <option value="3">Categoria</option>
											<?php
										break;

										case "strutturati":
											?>
											<option selected value="0">Lista</option>
											<option value="1">Emittente</option>
											<?php

											$catnum = 2;
									
										break;

										case "etc":
											?>
											<option selected value="0">Lista</option>
											<option value="1">Emittente</option>
											<option value="3">Sottostante</option>
											<?php
											$catnum = 3;

										break;

									}

								?>
			                   
			                </select>
			                <br class="clear">
						</div>

						<!-- Fine select mobile -->
						<div class="maingroup hidden-xs">
							<ul class="categs cube-<?php print $catnum;?>" id="cubesCateg1">
								<?php

								switch($etf) {

										case "standard":
											?>
											<li data-sg="0"><a href="javascript:void(0);" class="cube" ><span class="cube__name">Lista</span><span class="cube__num">1542</span></a></li>
											<li data-sg="1"><a href="javascript:void(0);" class="cube"><span class="cube__name">Emittente</span><span class="cube__num">27</span></a></li>
											<li data-sg="2"><a href="javascript:void(0);" class="cube"><span class="cube__name">Area</span><span class="cube__num">8</span></a></li>
											<li data-sg="3"><a href="javascript:void(0);" class="cube" ><span class="cube__name">Categoria</span><span class="cube__num">15</span></a></li>
											<?php
										break;

										case "strutturati":
											?>
											<li data-sg="0"><a href="javascript:void(0);" class="cube" ><span class="cube__name">Lista</span><span class="cube__num">1542</span></a></li>
											<li data-sg="1"><a href="javascript:void(0);" class="cube"><span class="cube__name">Emittente</span><span class="cube__num">5</span></a></li>
											<?php

											$catnum = 2;
									
										break;

										case "etc":
											?>
											<li data-sg="0"><a href="javascript:void(0);" class="cube" ><span class="cube__name">Lista</span><span class="cube__num">1542</span></a></li>
											<li data-sg="1"><a href="javascript:void(0);" class="cube"><span class="cube__name">Emittente</span><span class="cube__num">8</span></a></li>
											<li data-sg="2"><a href="javascript:void(0);" class="cube"><span class="cube__name">Sottostante</span><span class="cube__num">20</span></a></li>
											<?php
											$catnum = 3;

										break;
									}
								?>

							</ul>
						</div>
				
					


					<!-- MODALE RICERCA INTERATTIVA -->

					<div class="modal fade" id="layerCubeSel" tabindex="-1" role="dialog" aria-labelledby="layerCubeSelLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
									<h2 class="modal-title" id="layerCubeSelLabel"></h2>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-12">
												<div id="layerCubeSelBody">
													<div class="data-sg-selectors" data-sg="1">

														<!-- Emittenti -->	
												        <div class="selector-wrap selector-mini only-definition" data-input-type="radio" data-input-name="selectBoxesMini">
												            <input name="selectBoxesMini" type="hidden" value="">
												            <?php for($x=0;$x<=27;$x++) {
												            	?>
																<div class="selector-box" data-value="<?php print $x; ?>">
												                    <span class="definition"><?php print randomPar(3);?></span>
												                </div>
																<?php
												            }	
												            ?>
								                            
														</div>
											

													</div>
													<div  class="data-sg-selectors" data-sg="2">
														<!-- <?php print ($etf==="standard") ? "Aree" : "Sottostanti"; ?> -->	
														
												        <div class="selector-wrap selector-mini only-definition" data-input-type="radio" data-input-name="selectBoxesMini">
												            <input name="selectBoxesMini" type="hidden" value="">
												            <?php for($x=0;$x<=rand(2,27);$x++) {
												            	?>
																<div class="selector-box" data-value="<?php print $x; ?>">
												                    <span class="definition"><?php print randomPar(3);?></span>
												                </div>
																<?php
												            }	
												            ?>
								                            
														</div>
														
													
														<!-- Fine <?php print ($etf==="standard") ? "Aree" : "Sottostanti"; ?> -->
														
													</div>
													<div  class="data-sg-selectors" data-sg="3">
														<!-- Cetegorie -->	
															
												        <div class="selector-wrap selector-mini only-definition" data-input-type="radio" data-input-name="selectBoxesMini">
												            <input name="selectBoxesMini" type="hidden" value="">
												            <?php for($x=0;$x<=rand(3,27);$x++) {
												            	?>
																<div class="selector-box" data-value="<?php print $x; ?>">
												                    <span class="definition"><?php print randomPar(3);?></span>
												                </div>
																<?php
												            }	
												            ?>
								                            
														</div>
																										
														<!-- Fine categorie -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- FINE MODALE RICERCA INTERATTIVA -->

				<!-- FINE OGGETTO RICERCA INTERATTIVA -->
				

	</section>
	<!-- Fine ricerca interattiva -->

	<!-- Ricerca rapida -->
	<section id="ricercaRapida" style="display:none">
		<div class="row">
			<div class="col-lg-12">
				<div class="borderFormRounded">

							<form class="formGenerico searchFilter noMarginBottom" role="form">

								<div class="row">
									<div class="col-sm-3 col-xs-12">
										<label class="control-label" for="isin">Tcode</label>
										<input class="form-control" type="text" name="tcode">
									</div>
									<div class="col-sm-3 col-xs-12">
										<label class="control-label" for="isin">Isin</label>
										<input class="form-control" type="text" name="isin">
									</div>
									<div class="col-sm-4 col-xs-12">
										<label class="control-label" for="isin">Nome</label>
										<input class="form-control" type="text" name="nome">
									</div>
									<div class="col-sm-2 col-xs-12 no-label">
										<a type="button" class="btn btn-primary btn-block" id="ricercaRapidaBtn">Cerca</a>
									</div>
								</div>

							</form>
					</div>
				</div>
		</div>
	</section>

	<section id="searchResults" style="display:none">

		<div class="row">
			<div class="col-xs-12 col-sm-6"><h4>Risultati della ricerca</h4></div>
			<div class="col-xs-12 col-sm-6">
				<p class="note flRight noFloatMobile">
					<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span>
					<!--esempio di loading -->
					<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
				</p>
			</div>
		</div>
		<?php virtual("./tpl_responsive_etf_sampletable.php")?>
	</section>


</div>
