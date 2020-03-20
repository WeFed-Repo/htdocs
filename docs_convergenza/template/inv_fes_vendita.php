<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle ">2</div>
	<div class="circle ">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Vendita</h2>

<!-- Selettore deposito -->
<h4>Deposito titoli</h4>
<section>
	<?php include("parts/selettore_deposito.php") ?>
</section>
<!-- Fine selettore deposito -->


<!-- Selezione fondo -->
<h4>SICAV/Fondo da vendere</h4>

<script type="text/javascript">
	/* Esempio di automazione */
	$(function(){
		/* Esempio inizializzazione */
		$(function(){
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

				// Esempio di passaggio parametri alla modale 
				$("#modalFondoLabel").html($(this).attr("data-fundname"));
				$("#modalFondoIsin").html($(this).attr("data-isin"));

				$("#modalFondo").modal("show");
			})
		});

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
					<div class="spsel spsel-hasicon" id="fondo" placeholder="Seleziona un fondo..." >
						<input type="hidden" name="spselCTAinput" value="09812309822">
						<div class="spsel-options">
							<div class="spsel-option selected" data-value="09812309821">
								<a class="spsel-addel btn-icon" data-fundname="Deutsche lorem ipsum dolor sit amet" data-isin="09812309821"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el">Deutsche lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option selected" data-value="09812309822">
								<a class="spsel-addel btn-icon" data-fundname="Anima lorem ipsum dolor sit amet" data-isin="09812309822"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el">Anima lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option selected" data-value="09812309823">
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
<!-- Fine selezione fondo -->


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
				</div>
				<div class="col-xs-12 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                             <input type="radio" name="quote" id="" value="2" >
                            <span class="text"><strong>N.ro quote: 199.999,99 (199.999.999,99 EUR)</strong><br>
                            	Saldo da acquisto singolo (PIC) - MANUELA VERDI, MARIO BIANCHI</span>
                        </label>
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
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_vendita_informazioni.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=vendita">prosegui</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->



