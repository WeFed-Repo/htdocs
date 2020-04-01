<div class="with-stepper">
	<h1>Documenti</h1>
</div>
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
<div class="wrap-no-border-bottom">
	<?php virtual('/youwebbusiness/layout/oggetti/filtri/filtro/oggetto.php'); ?>
</div>
<div class="container-fluid">
	<div class="azioni-tabella d-flex justify-content-between align-items-center">
		<div class="colonna1">
			<div class="d-flex justify-content-start">
			<div class="mr-3 nowrap">Elementi per pagina</div>
			<ul class="list-inline nowrap">
				<li class="list-inline-item active"><a href="#">10</a></li>
				<li class="list-inline-item"><a href="#">20</a></li>
				<li class="list-inline-item"><a href="#">50</a></li>
				<li class="list-inline-item"><a href="#">100</a></li>
			</ul>
			</div>
		</div>
		<div class="colonna2">
			<div class="d-flex justify-content-end">
				<a href="#" aria-label="CSV">
					<span><img src="./fe/img/icon/excel.svg"></span>
				</a>
			</div>
		</div>
	</div>
	<section class="no-margin-section">
		<div class="bordered pt-0 d-none d-lg-block">
			<table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table azioni-tabella" data-table-mobilized-desktop="dossierTable">
				<thead>
					<tr>
						<!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
						<th data-field="checkbox" class="center data-mobilized-title">
							<div class="form-check checkbox m-0">
								<input class="form-check-input" type="checkbox" id="" name="" value="">
								<label class="form-check-label" for=""></label>
							</div>
						</th>
						<th data-field="PDF"></th>
						<th data-field="data" data-sortable="true">Data</th>
						<th data-field="riferimento" data-sortable="true">Riferimento</th>
						<th data-field="importo" data-formatter="tableCellValue">Importo</th>
						<th data-field="tipo" data-sortable="true">Tipo</th>
					</tr>
				</thead>
				<tbody>
					<?php // esempio ciclo per tabella in desktop ?>
					<?php for ($i = 0; $i <= 3; $i++) { ?>
					<tr data-index="<?= $i ?>">
						<td>
							<div class="form-check checkbox m-0">
								<input class="form-check-input" type="checkbox" id="" name="" value="">
								<label class="form-check-label" for=""></label>
							</div>
						</td>
						<td><a href="#" aria-label="PDF"><span><img src="./fe/img/icon/pdf.svg"></span></a></td>
						<td>22/12/2019</td>
						<td>Conto corrente 00005544 Filiale: ARCORE - 0537 intestato a Giorgio del SToro, FERRABOSCHI DANIELA - altro testo inserito esempio</td>
						<td><span class="">1.999,00 EUR</span></td>
						<td>Bonifico - ricevuta per ordinante</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- Fine contenuto desktop -->

		<!-- Contenuto mobile -->
		<div class="bordered p-0 d-block d-lg-none">
			<div class="mobile-data" data-table-mobilized-mobile="dossierTable"></div>
		</div>
		<!-- Fine contenuto mobile -->
	</section>
	<div class="row">
		<div class="col-3">
			Documenti totali: 2123
		</div>
		<div class="col-6 d-flex justify-content-center">
			<?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione/oggetto.php'); ?>
		</div>
		<div class="col-3"></div>
	</div>
	<?php 
		pulsantiera_obj(array(
			'right' => array(
				array(
				'class'=>'primary',
				'label'=>'Scarica'
				),
			),
		));
	?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#dataDa, #dataA').datepicker({minDate: "-1Y", maxDate: 0});
  	});
</script>