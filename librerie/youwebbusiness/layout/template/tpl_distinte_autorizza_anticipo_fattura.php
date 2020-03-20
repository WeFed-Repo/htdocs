<script src="./fe/js/data_filter.js"></script>

<div class="with-stepper">
	<h1>
		Autorizza distinte
		<button type="button" class="btn-icon-help" data-modal-help></button>
	</h1>
</div>

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

	<?php virtual('/youwebbusiness/layout/oggetti/selettore/filtri_distinte/oggetto.php'); ?>

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
						<button data-filter-val="is_approvable"
										data-filter="btn_autorizza"
										data-filter-on="col_check submit_confirm"
										data-filter-off="btn_elimina btn_modifica btn_modifica_veloce label_desc"
										class="btn btn-filter fl-left mr-3">
							<img class="icon icon-autorizza" src="./fe/img/icon/autorizza.svg">
						Autorizza
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
						<button data-filter-val="is_fast_editable"
										data-filter="btn_modifica_veloce"
										data-filter-on="col_radio submit_confirm"
										data-filter-off="label_desc"
										class="btn btn-filter fl-left mr-3">
						<i class="icon icon-aggiorna" title="icon-aggiorna"></i>
						Modifica veloce
						</button>
					</div>
				</div>

				<script>
				const tbdata = [
					{
						'check': '123456',
						'radio': '123456',
						'creatail': '12/02/2019',
						'link' : 'inserire/link/al/valore/creatail',
						'ordini' : '10',
						'importo' : '323,00',
						'div' : 'EUR',
						'abi' : '12345',
						'cab' : '145342',
						'conto' : '0023420000',
						'esecuzione' : '14/02/2019',
						'stato' : 'Da autorizzare',
						'esito' : 'No',
						'is_deletable' : true,
					},
					{
						'check': '234567',
						'radio': '234567',
						'creatail': '13/02/2019',
						'link' : 'inserire/link/al/valore/creatail',
						'ordini' : '10',
						'importo' : '323,00',
						'div' : 'EUR',
						'abi' : '12345',
						'cab' : '145342',
						'conto' : '0023420000',
						'esecuzione' : '14/02/2019',
						'stato' : 'Da autorizzare',
						'esito' : 'No',
						'is_approvable' : true,
						'is_editable' : true,
					},
					{
						'check': '345678',
						'radio': '345678',
						'creatail': '15/02/2019',
						'link' : 'inserire/link/al/valore/creatail',
						'ordini' : '10',
						'importo' : '323,00',
						'div' : 'EUR',
						'abi' : '12345',
						'cab' : '145342',
						'conto' : '0023420000',
						'esecuzione' : '14/02/2019',
						'stato' : 'Da autorizzare',
						'esito' : 'No',
						'is_deletable' : true,
						'is_approvable' : true,
					},
					{
						'check': '567890',
						'radio': '567890',
						'creatail': '18/02/2019',
						'link' : 'inserire/link/al/valore/creatail',
						'ordini' : '10',
						'importo' : '323,00',
						'div' : 'EUR',
						'abi' : '12345',
						'cab' : '145342',
						'conto' : '0023420000',
						'esecuzione' : '14/02/2019',
						'stato' : 'Da autorizzare',
						'esito' : 'No',
						'is_editable' : true,
						'is_fast_editable' : true,
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
								<th data-field="creatail" data-formatter="formatLink" data-sortable="true">Creata il</th>
								<th data-field="ordini" class="right">Ordini</th>
								<th data-field="importo" class="right">Importo</th>
								<th data-field="div">DIV</th>
								<th data-field="abi" class="right">ABI</th>
								<th data-field="cab" class="right">CAB</th>
								<th data-field="conto" class="right">Conto</th>
								<th data-field="esecuzione" class="center">Esecuzione</th>
								<th data-field="stato">Stato</th>
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
