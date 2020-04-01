<div id="box_titolare" class="bordered pb-2 mt-3 mb-3 pb-3">
	<form>
		<h2>Titolare
			<button type="button" class="btn-icon-help" data-modal-open="box_titolare_modal"></button>
		</h2>
		<?php modal_demo($id='box_titolare_modal',$title="Titolare");?>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="list">
					<dt class="list-key">Nickname</dt>
					<dd class="list-value read-mode">Gencarelli</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/input.php'); ?>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="list">
					<dt class="list-key">Centro di costo</dt>
					<dd class="list-value read-mode">CC001 - Centro di costo</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/select.php'); ?>
				</div>
			</div>
			<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_box.php'); ?>
		</div>
	</form>
</div>
