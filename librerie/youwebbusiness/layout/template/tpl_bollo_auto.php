<script>
// LIMITI PER DATEPICKERS BONIFICO
let limiteAnno = (new Date(new Date().setFullYear(new Date().getFullYear() + 1))).getFullYear()
let limiteMese = (new Date(new Date().setMonth(new Date().getMonth() ))).getMonth()
let limiteGiorno = (new Date().getDate()) +1
</script>

<div class="with-stepper">
	<h1>
		Bollo Auto: compilazione
		<button type="button" class="btn-icon-help" data-modal-help></button>
	</h1>
	<div class="stepper">
		<div class="dot on"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

	<div class="no-margin-section">
		<div class="bordered p-3">
			<h3>Dati autoveicolo</h3>
			<div class="row">

				<div class="col d-flex justify-content-center justify-content-lg-start p-0">

					<div id="MappaForm">
						<form class="form-grid needs-validation" novalidate="">
							<div class="form-row mt-3">
								<div class="form-group col">
									<label class="control-label">Regione *</label>
									<select class="form-control" id="MappaSelect">
										<option value="0" selected disabled></option>
									</select>
								</div>
							</div>
							<div class="form-row mt-3 mb-3">
								<div class="col-12">
									<label class="control-label">Tipologia di veicolo *</label>
								</div>
								<div class="form-group col-6">
									<div class="form-check radio">
										<input class="form-check-input" type="radio" id="autoveicolo" name="veicolo" value="autoveicolo">
										<label class="form-check-label" for="autoveicolo">Autoveicolo</label>
									</div>
								</div>
								<div class="form-group col">
									<div class="form-check radio">
										<input class="form-check-input" type="radio" id="motoveicolo" name="veicolo" value="motoveicolo">
										<label class="form-check-label" for="motoveicolo">Motoveicolo</label>
									</div>
								</div>
							</div>
							<div class="form-row mt-3">
								<div class="form-group col">
									<label class="control-label">Targa *</label>
									<input class="form-control" type="text" id="MappaTarga" />
								</div>
							</div>
						</form>
					</div>

				</div>

				<div class="col-6 d-none d-md-flex align-items-center justify-content-center">

					<?= file_get_contents("./fe/img/cartina.svg"); ?>

					<script>
						$(function(){
							var list = [];
							var $regioni = $('#Regioni path, #Regioni g');
							var $select = $('#MappaSelect');
							// Scrivo le options in base ai path SVG
							$regioni.each(function(){
								var name = $(this).attr('id');
								if(name) {
									var label = name.replace(/[-]/g," ") // converte dash in spazio
																	.replace(/[_]/g,"'") // converte underscore in apostrofo
																	.replace(/p'a /g,"p.a. "); // converte p.a. per le province autonome
									var disabled = $(this).data('disabled');
									$(this).attr('title',label).attr('alt',label);
									list.push(name);
									if( ! disabled ) { $select.append('<option value="'+name+'" >'+label+'</option>'); }
									// NOTE: se si vuole che le voci disabilitate nella select siano visibili ma disabilitati decommentare:
									//else { $select.append('<option value="'+name+'" disabled >'+label+'</option>'); }
								}
							});
							// Ordine alfabetico options
							$select.html( $select.find("option").sort(
								function (a, b) { return a.text == b.text ? 0 : a.text < b.text ? -1 : 1 }
							) );
							$select.on('change',function(){
								regione = $(this).val();
								selectRegion( regione );
							});
							$regioni.on('click',function(){
								if( ! $(this).data('disabled') ) {
									regione = $(this).attr('id');
									selectRegion( regione );
								}
							});
							function selectRegion( regione ) {
								$('#Regioni .selected').removeClass('selected');
								$('#Regioni #'+regione).addClass('selected');
								$select.val(regione);
							}
						});
					</script>

				</div>

			</div>
		</div>
	</div>

	<?php
	$btns = array(
		'right' => array(
			array(
			'class'=>'primary',
			'label'=>'Prosegui',
			'link'=>'tpl_bollo_auto_2'
			),
		),
	);
	?>
	<div class="row justify-content-<?= ( $btns['left'] && !$btns['right'] ) ? 'start' : 'end' ?> mt-3">
		<div class="col-md-6">
			<div class="form-row d-flex justify-content-start">
				<a href="#" class="btn btn-link mr-3">
					<img src="./fe/img/icon/pdf.svg" />
					Guida ABF
				</a>
				<a href="#" class="btn btn-link">
					<img src="./fe/img/icon/pdf.svg" />
					Cartello Informativo
				</a>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-row d-flex justify-content-end">
				<?php btns_loop($btns['right'],true); ?>
			</div>
		</div>
	</div>

	<!-- MODALE HELP DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
	<!-- fine MODALE HELP DI ESEMPIO -->
