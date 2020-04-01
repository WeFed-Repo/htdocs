<div id="box_calendar_control" class="bordered pb-2 mt-3 mb-3 pb-3">
	<h2>Calendar Control
		<button type="button" class="btn-icon-help" data-modal-open="box_calendar_control_modal"></button>
	</h2>
	<?php modal_demo($id='box_calendar_control_modal',$title="Calendar Control");?>
	<div class="read-mode">
		<p>La carta è <strong>abilitata</strong> dalle <strong>9:00</strong> alle <strong>19:00</strong>
		nei seguenti giorni: <strong>lunedi, martedì.</strong></p>
	</div>
	<div class="write-mode">
		<p>Seleziona i giorni e le ore in cui la carta è abilitata:</p>
		<form>
			<div class="form-row">
				<div class="form-group col-12 col-md-6">
					<div class="form-row p-0">
						<div class="form-group col-12">Nei seguenti <strong>giorni</strong>:</div>
					<?php
					$giorni = ['Lunedi','Martedi','Mercoledi','Giovedi','Venerdi','Sabato','Domenica'];
					foreach ($giorni as $num => $giorno) { ?>
						<div class="form-group col-12 col-md-6 col-lg-4">
							<div class="form-check  checkbox">
			        	<input class="form-check-input" type="checkbox" <?php
									if( $num == 0 || $num == 1 ) echo 'checked';
								?> value="<?= $num ?>" id="check<?= $num ?>">
			         	<label class="form-check-label" for="check<?= $num ?>"><?= $giorno ?></label>
			        </div>
						</div>
					<?php } ?>
					</div>
				</div>
				<div class="form-group col-12 col-md-6">
					<div class="form-row p-0">
						<div class="form-group col-12">Nelle seguenti <strong>ore</strong>:</div>
						<div class="form-group col-12 col-md-6">
			        <label>Dalle*</label>
							<div class="input-group bootstrap-timepicker timepicker">
								<input type="text"class="input-group-addon form-control hasTimepicker" placeholder="00:00" value="9:00" data-timepicker="">
								<div class="input-group-append input-group-addon">
									<span class="input-group-text">
										<img src="./fe/img/icon/orologio.svg">
									</span>
								</div>
							</div>
			      </div>
						<div class="form-group col-12 col-md-6">
							<label>Alle*</label>
							<div class="input-group bootstrap-timepicker timepicker">
							<input type="text"class="input-group-addon form-control hasTimepicker" placeholder="00:00" value="19:00" data-timepicker="">
							<div class="input-group-append input-group-addon">
								<span class="input-group-text">
									<img src="./fe/img/icon/orologio.svg">
								</span>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="row">
		<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_box.php'); ?>
	</div>
</div>
