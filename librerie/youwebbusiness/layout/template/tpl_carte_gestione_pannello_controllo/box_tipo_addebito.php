<div id="box_tipo_addebito" class="bordered pb-2 mt-3 mb-3 pb-3">
	<form>
		<h2>Tipo Addebito
			<button type="button" class="btn-icon-help" data-modal-open="box_tipo_addebito_modal"></button>
		</h2>
		<?php modal_demo($id='box_tipo_addebito_modal',$title="Tipo Addebito");?>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="list">
					<dt class="list-key">Prelievi da ATM</dt>
					<dd class="list-value read-mode">Prepagata</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/select.php'); ?>
				</div>
				<div class="list">
					<dt class="list-key">Pagamenti su internet</dt>
					<dd class="list-value read-mode">Prepagata</dd>
					<div class="list-input write-mode">
						<div class="form-group">
							<select class="form-control">
								<option>...</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="list">
					<dt class="list-key">Pagamenti in negozi fisici</dt>
					<dd class="list-value read-mode">Debito</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/select.php'); ?>
				</div>
			</div>
			<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_box.php'); ?>
		</div>
	</form>
</div>
