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

<h2>Migliori e peggiori</h2>


<div class="navContFirstLev outerTab marginBottomLarge">
	<div class="innerTab">
		<ul class="tabbig">
			<li class="on"><a href="#">CW</a></li>
			<li><a href="#">Certificates</a></li>
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
			<a type="button" class="btn btn-primary" data-target="#migliori" title="Migliori">Migliori</a>
			<a type="button" class="btn btn-default" data-target="#peggiori" title="Peggiori">Peggiori</a>
			<a type="button" class="btn btn-default" data-target="#ricercaRapida" title="Ricerca rapida">Ricerca rapida</a>
		</div>
		<br class="clear">
	</div>
	<!-- Fine selettore tipo di ricerca -->

	<!-- Migliori -->
	<section id="migliori">
		<?php virtual("./tpl_responsive_cw_certificates_sampletable.php")?>
	</section>
	<!-- Fine migliori -->	


	<!-- Peggiori -->
	<section id="peggiori" style="display:none">
		<?php virtual("./tpl_responsive_cw_certificates_sampletable.php")?>
	</section>
	<!-- Fine peggiori -->	

	<!-- Ricerca rapida -->
	<section id="ricercaRapida" style="display:none">
		<div class="row">
			<div class="col-lg-12">
				<form class="formGenerico borderFormRounded searchFilter noMarginBottom" role="form">
					
						<div class="form-group">
							<div class="row">
								<div class="col-sm-3 col-xs-12">
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
								<div class="col-sm-3 col-xs-12 no-label">
									<a data-toggle="collapse" href="#ricercaAvanzata" aria-expanded="false" aria-controls="ricercaAvanzata" class="no-underline btn-icon collapsed form-control-style"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i> Ricerca avanzata</a>
								</div>
							</div>
						</div>

						<div id="ricercaAvanzata" class="collapse">

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
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<div class="btn-align-center">
										<a type="button" class="btn btn-primary" id="ricercaRapidaBtn">Cerca</a>
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
