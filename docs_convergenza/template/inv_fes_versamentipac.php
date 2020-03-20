<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1</div>
	<div class="circle ">2</div>
	<div class="circle ">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Versamenti aggiuntivi PAC</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam adipisci nobis sit cupiditate libero pariatur nihil praesentium ipsum, nam similique autem aut itaque voluptates veritatis ducimus inventore consectetur obcaecati tenetur.</p>
<!-- Selettore deposito -->
<h4>Deposito titoli</h4>
<section>
	<?php include("parts/selettore_deposito.php") ?>
</section>
<!-- Fine selettore deposito -->


<!-- Selezione fondo -->
<h4>SICAV/Fondo su cui versare</h4>

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
					<div class="spsel spsel-hasicon" id="fondo">
						<input type="hidden" name="spselCTAinput" value="09812309822">
						<div class="spsel-options">
							<div class="spsel-option" data-value="09812309821">
								<a class="spsel-addel btn-icon" data-fundname="Deutsche lorem ipsum dolor sit amet" data-isin="09812309821"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el" role="button" aria-label="Deutsche lorem ipsum dolor sit amet">Deutsche lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option" data-value="09812309822">
								<a class="spsel-addel btn-icon" data-fundname="Anima lorem ipsum dolor sit amet" data-isin="09812309822"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el" role="button" aria-label="Anima lorem ipsum dolor sit amet">Anima lorem ipsum dolor sit amet</a>
							</div>
							<div class="spsel-option" data-value="09812309823">
								<a class="spsel-addel btn-icon"  data-fundname="Fondo lorem ipsum dolor sit amet" data-isin="09812309823"><i class="icon icon-info"></i></a>
								<a class="spsel-option-el" role="button" aria-label="Fondo lorem ipsum dolor sit amet">Fondo lorem ipsum dolor sit amet</a>
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

<!-- Selezione contratto -->
<section>
	
	<div class="formGenerico borderFormRounded">

		<!-- Selezione contratto -->
		
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                            <input type="radio" name="contratto" id="" value="1">
                            <span class="text">
                            	<strong>Contratto numero 12312389218312</strong>
                            </span>	
                        </label>
                    </div>
                    <div class="formGenerico borderFormRounded">
                    	<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Investimento totale</label>
									<span class="output">999999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate versate</label>
									<span class="output">99</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Importo rata</label>
									<span class="output">9999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate residue</label>
									<span class="output">101</span>
								</div>
							</div>
						</div>
                    </div>
                </div>
			</div>
		
			<div class="row">
				<div class="col-xs-12 nolabel">
					<div class="radio inline">
                        <label class="textWrapper">
                            <input type="radio" name="contratto" id="" value="2">
                            <span class="text">
                            	<strong>Contratto numero 12312389238333</strong>
                            </span>	
                        </label>
                    </div>
                    <div class="formGenerico borderFormRounded">
                    	<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Investimento totale</label>
									<span class="output">999999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate versate</label>
									<span class="output">18</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Importo rata</label>
									<span class="output">9999</span>
								</div>
								<div class="col-xs-12 col-sm-6">
									<label class="control-label-output">Rate residue</label>
									<span class="output">18</span>
								</div>
							</div>
						</div>
                    </div>
                </div>
			</div>
		</div>

		<!-- Fine selezione contratto -->


		<h4>Effettua versamenti aggiuntivi</h4>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<script type="text/javascript">
					// Esempio inizializzazione spinner
					$(function(){
						setSpinner({
					    idInput: '#versAgg',
					    step: 1,
					    min: 0,
					    max: 18 // Indicare minimo e massimo
					})
						
					});
					</script>
					<label class="control-label">Numero di versamenti aggiuntivi</label>
					<input id="versAgg" type="text" name="versAgg" class="form-control spinner">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
			
					<div class="checkbox inline">
	                    <label class="textWrapper">
	                        <input type="checkbox" name="" id="">
	                        <span class="text">Si richiede l'esenzione del lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum nihil et doloremque eum debitis expedita hic temporibus soluta officiis delectus quis maxime quos vitae porro, est itaque nemo doloribus veniam, fugit, modi perspiciatis illo! Ipsam consectetur assumenda quo, accusantium quas eveniet, et, quidem repudiandae maiores placeat officiis aut cumque minus! Sapiente consectetur voluptas, nisi distinctio fuga commodi deserunt quasi voluptatum. Eveniet ducimus sunt aliquid, recusandae minima eum autem illum magnam, voluptate totam beatae optio eius minus inventore consequatur libero corrupti voluptas quisquam cum eligendi. Placeat sint omnis quos neque atque, ipsum ratione iste minima repellat, voluptatum, sequi blanditiis accusantium.</span>
	                    </label>
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
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_versamentipac_informazioni.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=versamenti_aggiuntivi_pac">prosegui</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->



