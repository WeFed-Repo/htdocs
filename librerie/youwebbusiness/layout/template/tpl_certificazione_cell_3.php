<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-modal-default>
  DEMO MODALE CERTIFICAZIONE CELLULARE STEP 3
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
			<div class="dot on"></div>
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
				
				<h3>Contatto predefinito</h2>

				<!-- NOTE: creare un loop, una row per ogni numero di telefono inserito -->
				<!-- INIZIO LOOP -->
				<div class="row">
					<div class="col-6 col-md-3">Numero</div>
					<div class="col">3383***287</div>
				</div>
				<!-- FINE LOOP -->

			</div>
		</div>

		<div class="row align-items-center pt-3">
			<div class="col-12">
				<h3>Conferma</h3>
			</div>
		<div class="col-12 col-md-7 pr-md-3 pr-lg-4">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation.</p>
			</div>
			<div class="col-12 col-md-5">
				<div class="d-flex align-items-center justify-content-between">
					<img class="display-icon d-none d-lg-block" src="./fe/img/telefono_sms.png">
					<form class="w-100 ml-0 ml-lg-4 mr-3 my-3">
					<input type="text" class="form-control mb-0" placeholder="Inserire il codice">
					</form>
				</div>
			</div>
		</div>

		<!-- END contenuto -->
      </div>
      <div class="modal-footer">
	  <button type="button" onclick="location.href='strutt_priv.php?tpl=tpl_certificazione_cell_1.php'" class="btn btn-primary">Modifica</button>
	  <button type="button" onclick="location.href='strutt_priv.php?tpl=tpl_certificazione_cell_1.php'" class="btn btn-primary" disabled>Conferma</button>
      </div>
    </div>
  </div>
</div>
