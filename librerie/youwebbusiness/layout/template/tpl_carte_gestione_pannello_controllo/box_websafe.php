<div id="box_websafe" class="bordered pb-2 mt-3 mb-3 pb-3">
	<h2>Websafe
		<button type="button" class="btn-icon-help" data-modal-open="box_websafe_modal"></button>
	</h2>
	<?php modal_demo($id='box_websafe_modal',$title="Websafe");?>
	<div class="read-mode">
		<p>La carta è <strong>abilitata</strong> ad effettuare acquisti si internet
		per un importo massimo di <strong>300,00 EUR.</strong></p>
	</div>
	<div class="write-mode">
		<form>

			<div class="nav nav-pills mb-3" id="box_websafe_type_tab" role="tablist">
				<?php foreach ( array('sempre','mai','personalizza') as $item) { ?>
			  <div class="nav-item">
					<div class="form-group">
		        <div class="form-check radio">
		          <input <?php if($item=='personalizza') { echo 'checked'; } ?>
										 class="form-check-input"
										 type="radio"
										 id="box_websafe_type_<?= $item ?>_tab"
										 name="box_websafe_type"
										 value="<?= $item ?>">
							<label class="form-check-label active"
										 for="box_websafe_type_<?= $item ?>_tab"
										 data-toggle="pill"
										 href="#box_websafe_type_<?= $item ?>"
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

			<div class="tab-content" id="box_websafe_type_tabContent">
			  <div class="tab-pane fade" id="box_websafe_type_sempre" role="tabpanel" aria-labelledby="box_websafe_type_sempre_tab">
					<p><strong>SEMPRE</strong>: la carta è abilitata in modo permanente ad effettuare pagamenti online</p>
				</div>
			  <div class="tab-pane fade" id="box_websafe_type_mai" role="tabpanel" aria-labelledby="box_websafe_type_mai_tab">
					<p><strong>MAI</strong>: la carta è disabilitata e non può effettuare pagamenti online</p>
				</div>
			  <div class="tab-pane fade show active" id="box_websafe_type_personalizza" role="tabpanel" aria-labelledby="box_websafe_type_personalizza_tab">
					<p><strong>PERSONALIZZATA</strong>: definisci tu l'utilizzo della tua carta per gli acquisti online, consentendo esclusivamente
					le operazioni che rientrano nei parametri da te stabiliti.</p>
					<div class="form-group">
		        <div class="form-check radio">
		          <input checked class="form-check-input" type="radio" id="box_websafe_type_personalizza_opt_numero" name="box_websafe_type_personalizza_opts" value="">
		          <label class="form-check-label" for="box_websafe_type_personalizza_opt_numero">
								<strong>Per numero di acquisti</strong>: consenti acquisti per un numero di acquisti determinato.
							</label>
							<div class="sub-options row mt-3 ml-2">
								<div class="form-group col-12 col-md-8 col-lg-6">
					        <p>Numero di acquisti*</p>
					        <input type="number" class="form-control mb-0">
				      	</div>
							</div>
		        </div>
		      </div>
					<div class="form-group">
		        <div class="form-check radio">
		          <input class="form-check-input" type="radio" id="box_websafe_type_personalizza_opt_periodo" name="box_websafe_type_personalizza_opts" value="">
		          <label class="form-check-label" for="box_websafe_type_personalizza_opt_periodo">
								<strong>Per numero di acquisti</strong>: consenti acquisti per un numero di acquisti determinato.
							</label>
							<div class="sub-options row mt-3 ml-2">
								<div class="form-group col-6 col-md-4 col-lg-3">
					        <p class="control-label">Dal*</p>
					        <div class="input-group datepicker">
					          <input type="text" class="form-control mb-0" data-datepicker autocomplete="off" placeholder="Data"/>
					          <div class="input-group-append mb-0">
					            <span class="input-group-text">
					              <i class="icon icon-ico_calendario"></i>
					            </span>
					          </div>
					        </div>
					      </div>
								<div class="form-group col-6 col-md-4 col-lg-3">
					        <p class="control-label">Al*</p>
					        <div class="input-group datepicker">
					          <input type="text" class="form-control mb-0" data-datepicker autocomplete="off" placeholder="Data"/>
					          <div class="input-group-append mb-0">
					            <span class="input-group-text">
					              <i class="icon icon-ico_calendario"></i>
					            </span>
					          </div>
					        </div>
					      </div>
							</div>
		        </div>
		      </div>
					<div class="form-group">
		        <div class="form-check radio">
		          <input class="form-check-input" type="radio" id="box_websafe_type_personalizza_opt_tempo" name="box_websafe_type_personalizza_opts" value="">
		          <label class="form-check-label" for="box_websafe_type_personalizza_opt_tempo">
								<strong>A tempo</strong>: consenti acquisti online per qualche ora a partire da questo momento
							</label>
							<div class="sub-options row mt-3 ml-2">
								<div class="form-group col-12 col-md-8 col-lg-6">
					        <p>Numero ore*</p>
					        <input type="number" class="form-control mb-0">
				      	</div>
							</div>
		        </div>
		      </div>
					<div class="form-group">
		        <div class="form-check radio">
		          <input class="form-check-input" type="radio" id="box_websafe_type_personalizza_opt_max" name="box_websafe_type_personalizza_opts" value="">
		          <label class="form-check-label" for="box_websafe_type_personalizza_opt_max">
								<strong>Per importo massimo</strong>: consenti acquisti online entro un importo massimo
							</label>
							<div class="sub-options row mt-3 ml-2">
								<div class="form-group col-12 col-md-8 col-lg-6">
					        <p>Importo massimo (EUR)*</p>
					        <input type="number" class="form-control mb-0">
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
