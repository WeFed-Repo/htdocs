<div class="with-stepper">
	<h1>
		RiBa
	</h1>
	<div class="stepper">
		<div class="dot on"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>

	<!-- SELETTORE RAPPORTO DI ESEMPIO -->
	<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>
	<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

	<!-- / Dati rapporto -->

	<!-- Dati Ordinante -->
	<div class="mobile-form no-margin-section">
	<section class="mb-xs-0 pb-xs-0">
		<div class="bordered">
			<h2>Dati Ordinante</h2>
			<div class="row">
		    <div class="col-xs col-md-4">
		      <label class="control-label">Denominazione ordinante *</label>
					<div class="input-group">
		        <input type="text" class="form-control" />
		      </div>
		    </div>
				<div class="col-xs col-md-4">
		      <label class="control-label">Descrizione ordinante *</label>
		      <div class="input-group">
		        <input type="text" class="form-control" />
		      </div>
		    </div>
				<div class="col-xs col-md-2">
		      <label class="control-label">C.F./P.I.</label>
		      <input type="text" class="form-control" />
		    </div>
				<div class="col-xs col-md-2">
					<div class="form-check control-group checkbox d-flex align-items-center mt-4 py-3">
						<input class="form-check-input" type="checkbox" id="aggiungi" name="aggiungi">
						<label class="form-check-label" for="aggiungi">Non residente</label>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Dati Ordinante -->

	<!-- Dati Debitore -->
	<section>
		<div class="bordered">
			<h2>Dati Debitore</h2>
			<div class="row">
		    <div class="col-xs col-md-4">
		      <label class="control-label">Rag. Soc. / Intestatario</label>
					<div class="input-group">
						<input type="text" class="form-control" />
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="icon icon-ico_gestione_beneficiari"></i>
							</span>
						</div>
					</div>
		    </div>
				<div class="col-xs col-md-4">
					<label class="control-label">C.F./P.I.</label>
		      <div class="input-group">
		        <input type="text" class="form-control" />
		      </div>
		    </div>
				<div class="col-xs col-md-4">
		      <label class="control-label">Codice</label>
		      <input type="text" class="form-control" />
		    </div>
			</div>
			<div class="row">
				<div class="col-xs col-md-4">
					<label class="control-label">Comune*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
				</div>
				<div class="col-6 col-md-2">
					<label class="control-label">Provincia*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
				</div>
				<div class="col-6 col-md-2">
					<label class="control-label">Cap*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
				</div>
				<div class="col-xs col-md-4">
					<label class="control-label">Indirizzo</label>
					<input type="text" class="form-control" />
				</div>
			</div>
			<div class="row">
				<div class="col-xs col-md-4">
					<label class="control-label">Tipologia coordinate</label>
					<div class="row">
						<div class="form-group col">
			         <div class="form-check my-0 radio">
			           <input class="form-check-input" type="radio" name="inlineRadioOptions" value="" checked="">
			           <label class="form-check-label">ABI</label>
			         </div>
			       </div>
		 					<div class="form-group col">
	 		         <div class="form-check my-0 radio">
	 		           <input class="form-check-input" type="radio" name="inlineRadioOptions" value="" checked="">
	 		           <label class="form-check-label">IBAN</label>
	 		         </div>
						 </div>
					 </div>
				</div>
				<div class="col col-md-4">
					<label class="control-label">Coordinate IBAN*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
				</div>
				<div class="col-xs col-md-4">
					<div class="form-check control-group checkbox d-flex align-items-center mt-md-4 py-md-3">
						<input class="form-check-input" type="checkbox" id="aggiungi" name="aggiungi">
						<label class="form-check-label" for="aggiungi">Aggiorna anagrafica</label>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- / Dati Debitore -->

	<!-- Dati RiBa -->
	<section>
		<div class="bordered">
			<h2>Dati Debitore</h2>
			<div class="row">
		    <div class="col-xs col-md-4">
		      <label class="control-label">Importo (EUR)*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
		    </div>
				<div class="col-xs col-md-4">
					<label class="control-label">Descrizione RiBa.*</label>
		      <div class="input-group">
		        <input type="text" class="form-control" />
		      </div>
		    </div>
				<div class="col-xs col-md-4">
		      <label class="control-label">Scadenza*</label>
					<div class="input-group">
						<input type="text" class="form-control" />
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="icon icon-ico_calendario"></i>
							</span>
						</div>
					</div>
		    </div>
			</div>
			<div class="row">
		    <div class="col-xs col-md-4">
		      <label class="control-label">Numero ricevuta</label>
					<div class="input-group">
						<input type="text" class="form-control" />
					</div>
		    </div>
				<div class="col-xs col-md-4">
					<label class="control-label">Tipo di documento</label>
		      <div class="input-group">
		        <input type="text" class="form-control" />
		      </div>
		    </div>
				<div class="col-xs col-md-4">
		      <label class="control-label">Esito Pagamento</label>
		      <input type="text" class="form-control" />
		    </div>
			</div>
		</div>
	</section>
	<!-- / Dati RiBa -->

	<!-- Pulsantiera -->
	<div class="row justify-content-end">
	  <div class="col-sm-6">
	    <div class="form-row d-flex justify-content-end">
				<div class="form-group col-6 col-md-4 col-lg-3">
					<a href="strutt_priv.php?tpl=tpl_riba.php" class="btn btn-secondary btn-block">Annulla</a>
	      </div>
				<div class="form-group col-6 col-md-4 col-lg-3">
					<a href="strutt_priv.php?tpl=tpl_riba_2.php" class="btn btn-primary btn-block">Conferma</a>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fine pulsantiera -->

</div>
