<div id="box_geosafe" class="bordered pb-2 mt-3 mb-3 pb-3">
	<h2>Geosafe
		<button type="button" class="btn-icon-help" data-modal-open="box_geosafe_modal"></button>
	</h2>
	<?php modal_demo($id='box_geosafe_modal',$title="Geosafe");?>
	<div class="read-mode">
		<p>La carta è <strong>abilitata</strong> in Europa fino al
		<strong>21/04/2020.</strong></p>
		<p>Note: La possibilità di pagare su internet è indipendente dall'abilitazione definita all'interno della sezioe GeoSafe.</p>
	</div>
	<div class="write-mode">

		<p>Definisci l'ambito geografico dove utilizzare la carta.</p>
		<p>Il periodo di validità inizia il giorno in cui effettui la variazione. Puoi effettuareun numero illimitato di variazioni.</p>

		<form>

			<?php /* OLD */ /* <ul class="nav nav-pills mb-3" id="box_geosafe_type_tab" role="tabtemplate/tpl_carte_gestione_pannello_controllo">
				<li class="nav-item">
					<label class="nav-link" id="box_geosafe_type_italia_tab" data-toggle="pill" href="#box_geosafe_type_italia" role="tab" aria-controls="pills_italia" aria-selected="true">
						ITALIA <input checked type="radio" value="italia" name="box_geosafe_type" />
					</label>
				</li>
				<li class="nav-item">
					<label class="nav-link" id="box_geosafe_type_europa_tab" data-toggle="pill" href="#box_geosafe_type_europa" role="tab" aria-controls="pills-europa" aria-selected="false">
						EUROPA <input type="radio" value="europa" name="box_geosafe_type" />
					</label>
				</li>
				<li class="nav-item">
					<label class="nav-link active" id="box_geosafe_type_mondo_tab" data-toggle="pill" href="#box_geosafe_type_mondo" role="tab" aria-controls="pills_mondo" aria-selected="false">
						MONDO <input type="radio" value="mondo" name="box_geosafe_type" />
					</label>
				</li>
			</ul> */ ?>

			<div class="nav nav-pills mb-3" id="box_geosafe_type_tab" role="tablist">
				<?php foreach ( array('italia','europa','mondo') as $item) { ?>
			  <div class="nav-item">
					<div class="form-group">
		        <div class="form-check radio">
		          <input <?php if($item=='europa') { echo 'checked'; } ?>
										 class="form-check-input"
										 type="radio"
										 id="box_geosafe_type_<?= $item ?>_tab"
										 name="box_geosafe_type"
										 value="<?= $item ?>">
							<label class="form-check-label active"
										 for="box_geosafe_type_<?= $item ?>_tab"
										 data-toggle="pill"
										 href="#box_geosafe_type_<?= $item ?>"
										 role="tab"
										 aria-controls="pills_<?= $item ?>"
										 aria-selected="true">
								<?= strtoupper( $item ) ?>
							</label>
		        </div>
		      </div>
			  </div>
				<?php } ?>
			</div>

			<div class="tab-content" id="box_geosafe_type_tabContent">
				<div class="tab-pane fade" id="box_geosafe_type_italia" role="tabpanel" aria-labelledby="box_geosafe_type_italia_tab">
					<p>Abilita la carta all'utilizzo in <strong>Italia</strong></p>
				</div>
				<div class="tab-pane fade show active" id="box_geosafe_type_europa" role="tabpanel" aria-labelledby="box_geosafe_type_europa_tab">
					<p>Abilita la carta all'utilizzo in <strong>Europa</strong>
						<br /> Limite massimo di validità: <strong>3 mesi</strong> dall'attivazione.</p>
				</div>
				<div class="tab-pane fade" id="box_geosafe_type_mondo" role="tabpanel" aria-labelledby="box_geosafe_type_mondo_tab">
					<p>Abilita la carta all'utilizzo <strong>nel mondo</strong>
						<br /> Limite massimo di validità: <strong>1 mese</strong> dall'attivazione.</p>
				</div>
			</div>

		</form>

		<p>Note: La possibilità di pagare su internet è indipendente dall'abilitazione definita all'interno della sezioe GeoSafe.</p>

	</div>
	<div class="row">
		<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_box.php'); ?>
	</div>
	</div>
