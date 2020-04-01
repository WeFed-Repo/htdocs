<div id="box_limiti_utilizzo" class="bordered pb-2 mt-3 mb-3 pb-3">
	<form>
		<h2>Limiti di utilizzo
			<button type="button" class="btn-icon-help" data-modal-open="box_limiti_utilizzo_modal"></button>
		</h2>
		<?php modal_demo($id='box_limiti_utilizzo_modal',$title="Limiti di utilizzo");?>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="list">
					<dt class="list-key">Complessivo mensile</dt>
					<dd class="list-value read-mode">0.00 EUR</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/select.php'); ?>
				</div>
				<div class="list">
					<dt class="list-key">Pagamenti su internet</dt>
					<dd class="list-value read-mode">Prepagata</dd>
					<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/select.php'); ?>
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
