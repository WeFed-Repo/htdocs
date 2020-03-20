<?php
	$cw = $_GET["cw"];
	if (empty($cw)) $cw = "cw";

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
			<li class="<?php if($cw=="cw") print "on"; ?>"><a href="/template/strutt_webank.php?tpl=tpl_responsive_cw_certificates_ricerca.php&cw=cw">CW</a></li>
			<li class="<?php if($cw=="certificates") print "on"; ?>"><a href="/template/strutt_webank.php?tpl=tpl_responsive_cw_certificates_ricerca.php&cw=certificates">Certificates</a></li>
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
					$(function(){

						$(".cube-selector .maingroup .categs>li").click(function(){
							selLi = $(this);
							selLi.siblings("li").removeClass("is-active");
							selLi.addClass("is-active");
							$("#tipoTitoli .subgroup").hide();
							$("#tipoTitoli .subgroup[data-sgindex="+ selLi.attr("data-sg") +"]").addClass("len-" + $("#tipoTitoli .subgroup[data-sgindex="+ selLi.attr("data-sg") +"] li").length).show();
							$("#tipoTitoli .subgroup li").removeClass("is-active");
							$("#searchResults").hide();
						});

						// Eventuale preselezione all'avvio
						// $(".cube-selector .maingroup .categs>li").eq(0).trigger("click");

						// Selettore a tendina per mobile
						$("#cubesCateg1Select").change(function(){
							var sel = $(this);
							$(".cube-selector .maingroup .categs>li[data-sg="+ sel.val()+"]").trigger("click");
						});

						// Mostra la ricerca sui "cubi"
						$("#tipoTitoli ul.categs li").click(function(){
							$("#tipoTitoli ul.categs li.is-active").removeClass("is-active")
							$(this).addClass("is-active");
							$("#searchResults").show();
							$("html, body").animate({scrollTop: $("#searchResults").offset().top},1000)
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
			                    <option selected value="0">Capitale protetto</option>
			                    <option value="1">Capitale condizionatamente protetto</option>
			                    <option value="2">Capitale non protetto</option>
			                    <option value="3">Strumenti a leva</option>
			                </select>
			                <br class="clear">
						</div>

						<!-- Fine select mobile -->
						<div class="maingroup hidden-xs">
							<ul class="categs <?php print ($cw=="cw")?"cube-4":"cube-2"; ?>" id="cubesCateg1">
								<li data-sg="0">
									<a href="javascript:void(0);" class="cube" ><span class="cube__name">Capitale protetto</span><span class="cube__num">1542</span></a>
								</li>
								<li  data-sg="1">
									<a href="javascript:void(0);" class="cube"><span class="cube__name">Capitale condizionatamente protetto</span><span class="cube__num">1499</span></a>
								</li>

								<?php if($cw=="cw") { ?>
								<li data-sg="2">
									<a href="javascript:void(0);" class="cube"><span class="cube__name">Capitale non protetto</span><span class="cube__num">56</span></a>
								</li>
								<li data-sg="3">
									<a href="javascript:void(0);" class="cube" ><span class="cube__name">Strumenti a leva</span><span class="cube__num">598</span></a>
								</li>
								<?php }	 ?>
							</ul>
						</div>

					<ul class="wrapper" id="tipoTitoli">
					<li class="subgroup" data-sgindex="0" style="display:none">
						<ul class="categs">
							<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Equity Protection Certificates</span><span class="cube__num">12</span></a></li>
						</ul>
					</li>
					<li class="subgroup"  data-sgindex="1" style="display:none">
					<ul class="categs">
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Twin Win Certificates</span><span class="cube__num">260</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Bonus Certificates</span><span class="cube__num">3</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Airbag Certificates</span><span class="cube__num">46</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Bonus Certificates</span><span class="cube__num">46</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Express Certificates</span><span class="cube__num">46</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Cash Collect Certificates</span><span class="cube__num">46</span></a></li>

					</ul>
					</li>
					<li class="subgroup"  data-sgindex="2" style="display:none">
					<ul class="categs">
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Benchmark Certiifcates</span><span class="cube__num">12</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Outperformance Certificates</span><span class="cube__num">44</span></a></li>
					</ul>
					</li>
					<li class="subgroup" data-sgindex="3" style="display:none">
					<ul class="categs">
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Certificates a Leva</span><span class="cube__num">1</span></a></li>
						<li><a href="javascript:void(0);" class="cube"><span class="cube__name">Direzionale</span><span class="cube__num">569</span></a></li>
					</ul>
					</li>
					</ul>

				<!-- FINE OGGETTO RICERCA INTERATTIVA -->

	</section>
	<!-- Fine ricerca interattiva -->

	<!-- Ricerca rapida -->
	<section id="ricercaRapida" style="display:none">
		<div class="row">
			<div class="col-lg-12">
				<div class="borderFormRounded">

						<div id="ricercaSemplice" class="form-group" class="collapse in">

							<div class="row">
								<div class="col-xs-12">
									<a href="javascript:void(0);" class="toggleRicercaRapida no-underline btn-icon btn-icon-text collapsed float-right">
										<i class="icon icon-zoom_big"></i>
										Ricerca avanzata
									</a>
								</div>
							</div>

							<form class="formGenerico searchFilter noMarginBottom" role="form">

								<div class="row">
									<div class="col-sm-4 col-xs-12">
										<label class="control-label" for="isin">Isin</label>
										<input class="form-control" type="text" name="isin">
									</div>
									<div class="col-sm-3 col-xs-12">
										<label class="control-label">Mercato</label>
										<select class="form-control">
											<option>Lorem ipsum dolor</option>
											<option>Ipsum dolor</option>
										</select>
									</div>
									<div class="col-sm-3 col-xs-12">
										<label class="control-label">Emittente</label>
										<select class="form-control">
											<option>Banca Akros</option>
											<option>Banca Imi</option>
											<option>Banca Monte Paschi di Siena</option>
											<option>BNP Paribas Issuance</option>
											<option>Commerzbank</option>
											<option>Natixis structured issuance</option>
											<option>Societe generale</option>
											<option>Societe generale issuer</option>
											<option>Unicredit Bank</option>
											<option>Vontobel financial products GM</option>
										</select>
									</div>
									<div class="col-sm-2 col-xs-12 no-label">
										<a type="button" class="btn btn-primary btn-block" id="ricercaRapidaBtn">Cerca</a>
									</div>
								</div>

							</form>

						</div>

						<div id="ricercaAvanzata" class="collapse">

							<a href="javascript:void(0);" class="toggleRicercaRapida no-underline btn-icon btn-icon-text collapsed float-right">
								<i class="icon icon-zoom_big"></i>
								Ricerca semplice
							</a>

							<br /><br />

							<form class="formGenerico searchFilter noMarginBottom" role="form">

								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<label class="control-label">Categoria</label>
											<select class="form-control params" name="categoria">
												<option selected="selected" value="ALL">Tutti</option>
												<option value="2">Azione italiana</option>
												<option value="9">Future su commodities</option>
												<option value="5">Commodities</option>
												<option value="6">Azione estera</option>
												<option value="1">Paniere</option>
												<option value="12">Tassi di interesse</option>
												<option value="8">Valute</option>
											</select>
										</div>
										<div class="col-xs-12 col-sm-6">
											<label class="control-label">Categoria sottostante</label>
											<select class="form-control params" name="sottostante">
												<option selected="selected" value="ALL">Tutti</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label">Scadenza</label>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-inline">
													 	<div class="form-group">
														  <div class="input-group">
														     <div class="input-group-addon first">Dal</div>
														     <input type="text" id="scadenzaDal" placeholder="gg/mm/aaaa"  class="form-control clear-x">
														     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
														  </div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-inline">
													 	<div class="form-group">
														  <div class="input-group">
														     <div class="input-group-addon first">Al</div>
														     <input type="text" id="scadenzaAl" placeholder="gg/mm/aaaa"  class="form-control clear-x">
														     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
														  </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<label class="control-label">Strike price</label>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-inline">
													  <div class="form-group">
														  <div class="input-group">
														     <div class="input-group-addon first">Da</div>
														     <div class="editable-input"><input type="text" placeholder="" class="form-control clear-x params" data-option="idCellStrikePriceDa" data-isoptional="true" name="strikePriceDa" id="strikePriceDa"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
														  </div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-inline">
													 <div class="form-group">
														  <div class="input-group">
														     <div class="input-group-addon first">A</div>
														     <div class="editable-input"><input type="text" placeholder="" class="form-control clear-x params" data-option="idCellStrikePriceA" name="strikePriceA" id="strikePriceA"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
														  </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-xs-12 col-sm-2 col-sm-offset-10">
											<a type="button" class="btn btn-primary btn-block" id="ricercaRapidaBtn">Cerca</a>
										</div>
									</div>
								</div>


							</form>

						</div>

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
		<?php virtual("./tpl_responsive_cw_certificates_sampletable.php")?>
	</section>


</div>
