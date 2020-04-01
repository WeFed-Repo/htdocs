<div class="with-stepper">
	<h1>
		Riepilogo dati ricarica
	</h1>
	<div class="stepper">
		<div class="dot on"></div>
		<div class="dot on"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

<div class="no-margin-section">

	<div class="row">
		<div class="col-12 col-md-6 my-3">
			<div class="bordered pb-3 h-100">
				<h3>Ordinante</h3>
				<div class="list">
					<dt class="list-key">Ordinante</dt>
					<dd class="list-value">Nome Cognome</dd>
				</div>
				<div class="list">
					<dt class="list-key">Conto</dt>
					<dd class="list-value">345234567543443455633</dd>
				</div>
				<div class="list">
					<dt class="list-key">ABI-Banca</dt>
					<dd class="list-value">000000 - Banco BPM</dd>
				</div>
				<div class="list">
					<dt class="list-key">IBAN</dt>
					<dd class="list-value">IT24V03237464463443253425</dd>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 my-3">
			<div class="bordered pb-3 h-100">
				<h3>Dati ricarica</h3>
				<div class="list">
					<dt class="list-key">Numero telefono</dt>
					<dd class="list-value">000 00 00 000</dd>
				</div>
				<div class="list">
					<dt class="list-key">Gestore</dt>
					<dd class="list-value">Vodafone</dd>
				</div>
				<div class="list">
					<dt class="list-key">Taglio della ricarica</dt>
					<dd class="list-value">-</dd>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-md-12">
			<div class="bordered pb-3 mt-2 mb-4">
				<h3>Taglio ricarica</h3>
				<div class="row">
					<div class="col mt-2">
						<p>Importo</p>
					</div>
				</div>
				<ul class="list-inline">
					<?php
						$gestori = [20,30,50,60,80,100,150,250];
						for ($i=0; $i < count($gestori); $i++) { ?>
							<li class="list-inline-item">
								<div class="form-check radio buttonchoice">
									<input class="form-check-input" type="radio" id="taglio<?= $i ?>" name="taglio">
									<label class="form-check-label" for="taglio<?= $i ?>"><?= $gestori[$i] ?></label>
								</div>
							</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- Pulsantiera -->
	<div class="row justify-content-end">
		<div class="col-12">
	    <div class="form-row d-flex justify-content-end">
	      <div class="form-group col d-flex justify-content-end">
					<a href="strutt_priv.php?tpl=tpl_ricariche_telefoniche.php" class="btn btn-secondary mr-3">Modifica</a>
					<a href="strutt_priv.php?tpl=tpl_ricariche_telefoniche_3.php" class="btn btn-primary">Conferma</a>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fine pulsantiera -->
</div>
