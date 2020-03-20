<?php
	$etf = $_GET["etf"];
	if (empty($etf)) $etf = "standard";

?>
<!--LE FUNZIONALITA' QUI EMULATE SONO SOLO A TITOLO ESEMPLIFICATIVO PRENDERE LE FUNZIONI GIA' PRESENTI IN SVILUPPO -->
<h2>Ricerca</h2>

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
				$("#searchResults").hide();
			
			});

			// Ricerca rapida
			$("#ricercaRapidaBtn").click(function(){
				$("#searchResults").show();

			});

		});
	})
</script>

<div class="navContFirstLev outerTab marginBottomLarge">
	<div class="innerTab">
		<ul class="tabbig" id="topTabs">
			<li <?php if($etf=="standard") print("class='on'")?>><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf_ricerca.php&etf=standard">Standard</a></li>
			<li <?php if($etf=="strutturati") print("class='on'")?>><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf_ricerca.php&etf=strutturati">Strutturati</a></li>
			<li <?php if($etf=="etc") print("class='on'")?>><a href="/template/strutt_webank.php?tpl=tpl_responsive_etf_ricerca.php&etf=etc">ETC</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>

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
					$(function(){

						$(".cube-selector .maingroup .categs>li").click(function(){
							selLi = $(this);
							selLi.siblings("li").removeClass("is-active");
							selLi.addClass("is-active");
							$("#searchResults").show();
							$("html, body").animate({scrollTop: $("#searchResults").offset().top},1000)
						});

						// Eventuale preselezione all'avvio
						// $(".cube-selector .maingroup .categs>li").eq(0).trigger("click"); 

						// Selettore a tendina per mobile 
						$("#cubesCateg1Select").change(function(){
							var sel = $(this);
							$(".cube-selector .maingroup .categs>li[data-sg="+ sel.val()+"]").trigger("click");
						});

					});
					</script>
					<div class="cube-selector">
					<?php
					// Aggiunge la classe per determinare il layout dei box
					$mgClass ="cube-4";
					if ($etf=="strutturati") $mgClass ="cube-2";
					if ($etf=="etc") $mgClass ="cube-3";

					?>
					<div class="maingroup">
						<ul class="categs <?php print $mgClass; ?>" id="cubesCateg1">
							<li data-sg="0">
								<a href="javascript:void(0);" class="cube" ><span class="cube__name">Lista</span><span class="cube__num">1542</span></a>
							</li>
							<li  data-sg="1">
								<a href="javascript:void(0);" class="cube"><span class="cube__name">Categoria</span><span class="cube__num">1499</span></a>
							</li>
							<?php if ($etf != "strutturati") { ?>
							<li data-sg="2">
								<a href="javascript:void(0);" class="cube"><span class="cube__name">Area</span><span class="cube__num">56</span></a>
							</li>
							<?php } ?>
							<?php if ($etf == "standard") { ?>
							<li data-sg="3">
								<a href="javascript:void(0);" class="cube" ><span class="cube__name">Emittente</span><span class="cube__num">598</span></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				<!-- FINE OGGETTO RICERCA INTERATTIVA -->

				<!-- sTR: 2 - - ETC: 3  -->

	</section>
	<!-- Fine ricerca interattiva -->	

	<!-- Ricerca rapida -->
	<section id="ricercaRapida" style="display:none">
		<div class="row">
			<div class="col-lg-12">
				<form class="formGenerico borderFormRounded searchFilter noMarginBottom" role="form">
					
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label" for="isin">Scegli il tuo ETF</label>
									<div class="row">
										<div class="col-xs-6 col-sm-6">
											<div class="row">
							                    <div class="col-sm-4">
							                        <div class="radio inline">
							                            <label class="textWrapper">
							                                <input type="radio" name="" id="">
							                                <span class="text">Tcode</span>
							                            </label>
							                        </div>
							                    </div>
							                    <div class="col-sm-4">
							                        <div class="radio inline">
							                            <label class="textWrapper">
							                                <input type="radio" name="" id="" checked>
							                                <span class="text">Isin</span>
							                            </label>
							                        </div>
							                    </div>
							                    <div class="col-sm-4">
							                        <div class="radio inline">
							                            <label class="textWrapper">
							                                <input type="radio" name="" id="">
							                                <span class="text">Nome</span>
							                            </label>
							                        </div>
							                    </div>
							                </div>


											<!-- SELECT ALTERNATIVA PER MOBILE -->
											<select class="form-control visible-xs">
												<option>Tcode</option>
												<option selected>Isin</option>
												<option>Nome</option>
											</select>
											<!-- FINE SELECT ALTERNATIVA PER MOBILE -->
										</div>
										<div class="col-xs-6 col-sm-4"><input class="form-control" type="text" name="descrizione"></div>
										<div class="col-xs-12 col-sm-2"><a type="button" class="btn btn-primary btn-block" id="ricercaRapidaBtn">Cerca</a></div>
									</div>
								</div>
							</div>
						</div>

				</form>
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
		<?php virtual("./tpl_responsive_cw_certificates_sampletable.php")?>
	</section>
	

</div>
