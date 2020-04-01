<div id="box_merchant_control" class="bordered pb-2 mt-3 mb-3 pb-3">
	<h2>Merchant Control
		<button type="button" class="btn-icon-help" data-modal-open="box_merchant_control_modal"></button>
	</h2>
	<?php modal_demo($id='box_merchant_control_modal',$title="Merchant Control");?>
	<div class="read-mode">
		<p>La carta è <strong>disabilitata</strong> per gli utilizzi
		nelle seguenti categorie merceologiche:</p>
		<ul>
			<li>Giochi e scommesse</li>
		</ul>
	</div>
	<div class="write-mode">
		<form>
			<p>Tramite questa funzione hai la possibilità di inibire l'utilizzo delle carte
			su alcune categorie di esercenti. Il servizio funziona sulla base della classificazione
			effettuata dalla banca dell'esercente.</p>
			<p>Abilita/disabilita la categoria:</p>
			<div class="row justify-content-between">
				<div class="col-12 col-md-6">
					<?php $n = 12; $m = $n%2; for ($i=1; $i <= $n; $i++) { ?>
						<div class="form-group w-100 pr-3 mr-3">
			        <div class="form-check checkbox switch left-label">
			          <input <?= $i == 1 ? 'checked' : '' ?> class="form-check-input" type="checkbox" id="switch<?= $i ?>" name="switch<?= $i ?>">
			          <label class="form-check-label w-100" for="switch<?= $i ?>">
									Carta
										<strong class="enabled-label">abilitata</strong>
										<strong class="disabled-label">disabilitata</strong>
									per <strong>Categoria<?= $i ?></strong>
								</label>
			        </div>
			      </div>
					<?php
					if( $i == round($n/2) ) echo '</div><div class="col-12 col-md-6">';
				}  ?>
				</div>
			</div>
		</form>
	</div>
	<div class="row">
		<?php virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_box.php'); ?>
	</div>
</div>
