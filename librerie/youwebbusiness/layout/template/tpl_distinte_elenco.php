<div class="with-stepper">
	<h1>
		Elenco disposizioni
		<button type="button" class="btn-icon-help" data-modal-help></button>
	</h1>
</div>

	<!-- Navigatore a tab -->
	<div class="no-margin-section">
	  <ul class="nav nav-tabs">
			<li class="nav-item"><a class="nav-link active" href="strutt_priv.php?tpl=tpl_distinte_elenco.php">Gestione distinte</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Ultime disposizioni</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Riepologo F23</a></li>
			<li class="nav-item"><a class="nav-link" href="strutt_priv.php?tpl=tpl_distinte_autorizza_anticipo_fattura.php">Anticipo fatture online</a></li>
	  </ul>
	</div>
	<!-- Fine navigatore a tab -->

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

	<?php virtual('/youwebbusiness/layout/oggetti/selettore/filtri_distinte/oggetto.php'); ?>

	<!-- DESKTOP -->
		<div class="d-none d-md-block bordered pb-2 mt-3 mb-3 pb-3">
			<h3>Elenco distinte</h3>
			<h4 class="mt-3">Lorem ipsum dolor sit amet</h4>
			<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-padded" data-bootstrap-table>
				 <thead>
						<tr>
							<th data-field="disposizioni">Disposizioni</th>
							<th data-field="inmodifica">In modifica</th>
							<th data-field="daautorizzare">Da autorizzare</th>
							<th data-field="parzialmenteautorizzate">Parzialmente Autorizzate</th>
							<th data-field="autorizzate">Autorizzate</th>
							<th data-field="confermate">Confermate</th>
							<th data-field="totale" data-sortable="true">Totale</th>
						</tr>
				 </thead>
				 <tbody>
					 <?php for ($i = 0; $i <= 2; $i++) { ?>
						 <tr data-index="<?= $i ?>">
							 <td>LoremIpsum</td>
							 <td><a href="#">3</a></td>
							 <td><a href="#">4</a></td>
							 <td></td>
							 <td></td>
							 <td><a href="#">4</a></td>
							 <td><a href="#">4</a></td>
						 </tr>
					<?php } ?>
					<tr data-index="<?= $i ?>">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>12</strong></td>
					</tr>
				</tbody>
			</table>


			<h4 class="mt-3">Lorem ipsum dolor sit amet</h4>
			<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-padded" data-bootstrap-table>
				 <thead>
						<tr>
							<th data-field="disposizioni">Disposizioni</th>
							<th data-field="inmodifica">In modifica</th>
							<th data-field="daautorizzare">Da autorizzare</th>
							<th data-field="parzialmenteautorizzate">Parzialmente Autorizzate</th>
							<th data-field="autorizzate">Autorizzate</th>
							<th data-field="confermate">Confermate</th>
							<th data-field="totale" data-sortable="true">Totale</th>
						</tr>
				 </thead>
				 <tbody>
					 <?php for ($i = 0; $i <= 2; $i++) { ?>
						 <tr data-index="<?= $i ?>">
							 <td>LoremIpsum</td>
							 <td><a href="#">3</a></td>
							 <td><a href="#">4</a></td>
							 <td></td>
							 <td></td>
							 <td><a href="#">4</a></td>
							 <td><a href="#">4</a></td>
						 </tr>
					<?php } ?>
					<tr data-index="<?= $i ?>">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>12</strong></td>
					</tr>
				</tbody>
			</table>
		</div>
	<!-- fine DESKTOP -->

	<!-- MOBILE -->
	<div class="d-block d-md-none bordered pb-2 mt-3 mb-3 pb-3 px-2">
		<div class="px-2 pb-2">
			<h3>Lorem ipsum dolor sit amet</h3>
		</div>
		<div class="form-group col-sm-4">
			<select class="form-control">
				<option selected>LoremIpsum</option>
				<option>Lorem</option>
				<option>Ipsum</option>
			</select>
		</div>
		<div class="px-2 row">
			<div class="col-4"><p>In modifica: <a href="#"><u>33</u></a></p></div>
			<div class="col-4"><p>Parz. Autoriz. <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Da autorizzare: <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Autorizzate: <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Confermate: <a href="#"><u>2</u></a></p></div>
			<div class="col-4"><p>Totale: <strong>15</strong></div>
		</div>
	</div>

	<div class="d-block d-md-none bordered pb-2 mt-3 mb-3 pb-3 px-2">
		<div class="px-2 pb-2">
			<h3>Lorem ipsum dolor sit amet</h3>
		</div>
		<div class="form-group col-sm-4">
			<select class="form-control">
				<option selected>LoremIpsum</option>
				<option>Lorem</option>
				<option>Ipsum</option>
			</select>
		</div>
		<div class="px-2 row">
			<div class="col-4"><p>In modifica: <a href="#"><u>33</u></a></p></div>
			<div class="col-4"><p>Parz. Autoriz. <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Da autorizzare: <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Autorizzate: <a href="#"><u>3</u></a></p></div>
			<div class="col-4"><p>Confermate: <a href="#"><u>2</u></a></p></div>
			<div class="col-4"><p>Totale: <strong>15</strong></div>
		</div>
	</div>
	<!-- fine MOBILE -->

	<!-- MODALE HELP DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
	<!-- fine MODALE HELP DI ESEMPIO -->
