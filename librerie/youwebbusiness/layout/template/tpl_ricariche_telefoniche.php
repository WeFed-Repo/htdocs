<div class="with-stepper">
	<h1>
		Ricariche telefoniche
	</h1>
	<div class="stepper">
		<div class="dot on"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

	<!-- Modale rubrica -->
	<div class="modal fade" data-modal="default">
	  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Cerca dipendente</h5>
	        <a href="#" data-dismiss="modal" aria-label="Close" >
				<img src="./fe/img/icon/close.svg">
			</a>
	      </div>
	      <div class="modal-body">

					<section data-toggle-filter-parent>
						<!-- scelte primarie filtri -->
						<div data-toggle-filter-elem="semplice">

								<div class="form-row">
									<div class="form-group col-sm-6">
										<label>Cognome Nome</label>
										<input type="text" class="form-control" placeholder="Cognome Nome">
									</div>
									<div class="form-group col-sm-6">
										<label>Cod. dipendente</label>
										<input type="text" class="form-control" placeholder="Cod. dipendente">
									</div>
									<div class="form-group col-12 d-flex justify-content-center">
										<a href="strutt_priv.php?tpl=tpl_ricariche_telefoniche_2.php" class="btn btn-primary btn-w-md">Cerca</a>
									</div>
								</div>

								<h3 class="pb-2">Elenco nominativi</h3>
								<div class="px-3">
									<table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-bootstrap-table>
										 <thead>
												<tr>
													<th data-field="nome" data-sortable="true">Cognome Nome</th>
													<th data-field="codice" data-sortable="true">Cod. dipendente</th>
													<th data-field="gestore" data-sortable="true">Gestore Telefonico</th>
													<th data-field="gestore">N. Telefono</th>
												</tr>
										 </thead>
										 <tbody>
											 <?php for ($i = 0; $i <= 5; $i++) { ?>
												 <tr data-index="<?= $i ?>">
													 <td style="">Mario Rossi</td>
													 <td style="">Cod. dipendente</td>
													<td style="">Gestore</td>
												 </tr>
											<?php } ?>
										</tbody>
									</table>
									<div class="mt-3 d-flex justify-content-center">
										<?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione/oggetto.php'); ?>
									</div>
							</div>

						</div>
					</section>

	      </div>
	    </div>
	  </div>
	</div>
	<!-- FINE Modale rubrica -->

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

<div class="no-margin-section">

	<div class="row">
		<div class="col-12 col-md-12">
			<div class="bordered pb-3 mt-2 mb-4">
				<h3>Dati ricarica</h3>

				<form class="form-grid needs-validation" novalidate>

					<div class="row">
						<div class="col p-0 mt-2">
							<p>Numero di telefono*</p>
						</div>
					</div>
					<div class="row">
						<div class="col ml-1">
								<div class="form-row d-flex align-items-center">
									<div class="form-group col-4 col-md-2 col-lg-2">
										<input type="text" class="form-control" />
									</div>
									<div class="form-group col-8 col-md-5 col-lg-4">
										<div class="input-group datepicker">
											<input type="text" class="form-control" />
											<div class="input-group-append">
												<!-- l'attributo data-modal-default attiva la modale -->
												<span class="input-group-text" data-modal-default>
													<i class="icon icon-ico_gestione_contatti"></i>
												</span>
											</div>
										</div>
									</div>
									<!-- <div class="form-group col col-md-3 col-lg-6">
					          <div class="form-check checkbox">
					            <input class="form-check-input" type="checkbox">
					            <label class="form-check-label">Aggiungi alla rubrica</label>
					          </div>
									</div> -->
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col px-0 mt-2">
							<p>Gestore telefonico*</p>
						</div>
					</div>
					<div class="row">
						<div class="col px-0 mt-2">
			          <ul class="list-inline">
									<?php
										$gestori = ['vodafone','tim','wind','tiscali','tre','postemobile','coopvoce'];
										for ($i=0; $i < count($gestori); $i++) { ?>
											<li class="list-inline-item">
												<div class="form-check radio imgchoice">
													<input class="form-check-input" type="radio" id="simtel<?= $i ?>" name="simtel">
													<label class="form-check-label" for="simtel<?= $i ?>"
																 style="background-image:url('./fe/img/compagnie_telefoniche/icona_<?= $gestori[$i] ?>.png')"></label>
												</div>
											</li>
									<?php } ?>
								</ul>

						</div>
					</div>

				</form>

			</div>
		</div>
	</div>

	<!-- Pulsantiera -->
	<div class="row justify-content-end">
		<div class="col">
			<p>La Ricarica Telefonica non può essere revocata dopo l'operazione di autorizzazione.</p>
		</div>
		<div class="col-12 col-md-3 col-lg-2">
	    <div class="form-row d-flex justify-content-end">
				<div class="form-group col d-flex justify-content-end">
					<a href="strutt_priv.php?tpl=tpl_ricariche_telefoniche_2.php" class="btn btn-primary">Prosegui</a>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fine pulsantiera -->

</div>
