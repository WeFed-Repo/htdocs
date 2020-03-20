<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-modal-default>
  DEMO MODALE CERTIFICAZIONE CELLULARE STEP 2
</button>

<!-- Modal -->
<div class="modal fade" data-modal="default">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header flex-row flex-wrap flex-sm-col flex-sm-nowrap">
        <h5 class="modal-title flex-order-3 flex-order-sm-1">Verifica del cellulare predefinito</h5>
		<div class="stepper mb-2">
			<div class="dot on"></div>
			<div class="dot on"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <!-- contenuto -->

		<div class="row pb-3">
			<div class="col">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation.</p>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
				deserunt mollit anim id est laborum.</p>
				
				<div class="row">
					<div class="col-12 col-md-6"> <h3>Numeri di cellulare associati alla tua posizione</h2> </div>
					<div class="col text-primary text-right pb-3"> Prefisso internazionale </div>
				</div>

				<!-- NOTE: creare un loop, una row per ogni numero di telefono inserito -->
				<!-- INIZIO LOOP -->
				<div class="row">
					<div class="col">3383***287</div>
					<div class="col pb-2 text-right">
						<div class="form-check checkbox">
							<input class="form-check-input" type="checkbox" id="effettuacheck" name="effettuacheck">
							<label class="form-check-label"></label>
						</div>
					</div>
				</div>
				<!-- FINE LOOP -->

			</div>
		</div>

		<!-- END contenuto -->
      </div>
      <div class="modal-footer">
	  <button type="button" onclick="location.href='strutt_priv.php?tpl=tpl_certificazione_cell_3.php'" class="btn btn-primary">Continua</button>
      </div>
    </div>
  </div>
</div>