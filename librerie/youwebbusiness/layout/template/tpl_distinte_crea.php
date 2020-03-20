<script src="./fe/js/data_filter.js"></script>

<div class="with-stepper">
	<h1>
		Creazione distinte
		<button type="button" class="btn-icon-help" data-modal-help></button>
	</h1>
</div>

	<div class="alert alert-success">
		Operazione eseguita correttamente.<br />
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
		incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
		exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	</div>

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

	<?php virtual('/youwebbusiness/layout/oggetti/selettore/filtri_distinte/oggetto.php'); ?>

	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

	<!--
	NOTE: i data-attribute data-filter-on e data-filter-off elencano i campi da abilitare o disabilitare quanto il bottone è selezionato
	-->
	<div class="no-margin-section">
		<div class="position-relative bordered m-0 px-0">

		<div class="table-alert"
				 id="alertConfirmSuccess"
				 style="display:none"
				 onclick="hideConfirmAlert('#alertConfirmSuccess')" >
			<button type="button" class="close">×</button>
			<img class="icon icon-autorizza float-left" src="./fe/img/icon/autorizza.svg">
			<span class="d-block float-left pt-1">Feedback di conferma</span>
		</div>

		<div class="px-3">
			<div class="row">
				<div class="col-12 col-md-3 d-flex align-items-center pb-3">
					<div data-filter="label_desc" class="pr-4">
						 Seleziona la/le distinte
					</div>
					<button data-filter="submit_confirm"
									class="btn btn-primary btn-block mb-0"
									style="display:none"
									onclick="showConfirmAlert('#alertConfirmSuccess')">
						Conferma
					</button>
				</div>
				<div class="col d-flex align-items-center flex-wrap">
					<button data-filter="btn_autorizza"
									data-filter-on="col_check submit_confirm"
									data-filter-off="btn_elimina btn_modifica label_desc"
									class="btn btn-filter fl-left mr-3">
						<img class="icon icon-crea_distinta" src="./fe/img/icon/plus.svg">
					  Crea Distinta
					</button>
					<button data-filter-val="is_deletable"
									data-filter="btn_elimina"
									data-filter-on="col_radio submit_confirm"
									data-filter-off="label_desc"
									class="btn btn-filter fl-left mr-3">
						<img class="icon icon-elimina" src="./fe/img/icon/elimina.svg">
						Elimina
					</button>
					<button data-filter-val="is_editable"
									data-filter="btn_modifica"
									data-filter-on="col_radio submit_confirm"
									data-filter-off="label_desc"
									class="btn btn-filter fl-left mr-3">
						<img class="icon icon-modifica" src="./fe/img/icon/modifica.svg">
						Modifica
					</button>
				</div>
			</div>

			<script>
			const tbdata = [
				{
					'radio': '123456',
					'check': '123456',
					'link' : 'inserire/link/al/valore/importo',
					'importo' : '323,00',
					'div' : 'EUR',
					'abi' : '12345',
					'cab' : '145342',
					'rapporto' : '0023420000',
					'beneficiario' : 'Mario Rossi',
					'iban' : 'IT35X0534534242345523',
					'esito' : 'No',
					'is_editable' : true,
				},
				{
					'check': '234234',
					'radio': '234234',
					'link' : 'inserire/link/al/valore/importo',
					'importo' : '1123,00',
					'div' : 'EUR',
					'abi' : '12345',
					'cab' : '145342',
					'rapporto' : '0023420000',
					'beneficiario' : 'Mario Rossi',
					'iban' : 'IT35X0534534242345523',
					'esito' : 'No',
					'is_editable' : true,
					'is_deletable' : true,
				},
				{
					'check': '345345',
					'radio': '345345',
					'link' : 'inserire/link/al/valore/importo',
					'importo' : '1123,00',
					'div' : 'EUR',
					'abi' : '12345',
					'cab' : '145342',
					'rapporto' : '0023420000',
					'beneficiario' : 'Mario Rossi',
					'iban' : 'IT35X0534534242345523',
					'esito' : 'No',
					'is_deletable' : true,
				}
			];
			$(function(){
				//initFilteredTable('#filteredTable',tbdata)
				$('#filteredTable').bootstrapTableFiltered(tbdata)
			});
			</script>

			<table id="filteredTable"
						 data-bootstrap-table
						 cellspacing="0"
						 cellpadding="0"
						 border="0"
						 class="d-none d-md-table table table-striped table-show-hidden"
						 data-table-mobilized-desktop="modaleTable">
				 <thead>
						<tr>
							<th data-field="check" data-checkbox="true" data-visible="false"></th>
							<th data-field="radio" data-radio="true" data-visible="false"></th>
							<th data-field="importo" data-formatter="formatLink" data-sortable="true">Importo</th>
							<th data-field="div">DIV</th>
							<th data-field="abi" class="right">ABI</th>
							<th data-field="cab" class="right">CAB</th>
							<th data-field="rapporto" class="right">Rapporto</th>
							<th data-field="beneficiario">Beneficiario</th>
							<th data-field="iban">IBAN beneficiario</th>
							<th data-field="esito" class="center">ESITO</th>
						</tr>
				 </thead>
				 <tbody></tbody>
			</table>
		</div>
	</div>
	</div>

	<div class="d-block d-md-none">
		<div class="form-check checkbox mt-3 py-2">
			<input class="form-check-input" type="checkbox" id="selezionatutte" name="inlineRadioOptions_TOT">
			<label class="form-check-label c-white" for="selezionatutte" >Seleziona tutte</label>
		</div>
		<div class="no-margin-section bordered m-0 p-0">
			<div class="mobile-data" data-table-mobilized-mobile="modaleTable"></div>
		</div>
	</div>

	<!-- MODALE HELP DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
	<!-- fine MODALE HELP DI ESEMPIO -->
