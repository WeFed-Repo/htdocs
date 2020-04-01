<script>
// LIMITI PER DATEPICKERS BONIFICO
let limiteAnno = (new Date(new Date().setFullYear(new Date().getFullYear() + 1))).getFullYear()
let limiteMese = (new Date(new Date().setMonth(new Date().getMonth() ))).getMonth()
let limiteGiorno = (new Date().getDate()) +1
</script>

<div class="with-stepper">
	<h1>
		Bollettini postali
		<button type="button" class="btn-icon-help" data-modal-help></button>
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

	<!-- qìQui viene mostrata o noascosta la sezione descritta dai data-attribute nell'input radiobutton e abilita il pulsante conferma -->
	<script>
	$(document).on('change', '[name=tipobon]', function() {
    if(this.checked) {
			$('#submit').removeAttr('disabled');
			$('#dati_ordinante').hide();
			$('#dati_bollettino').hide();
			if (typeof $(this).data('ordinante') !== typeof undefined && $(this).data('ordinante') !== false) {
			  $('#dati_ordinante').show();
			}
			if (typeof $(this).data('bollettino') !== typeof undefined && $(this).data('bollettino') !== false) {
				$('#dati_bollettino').show();
			}
    }
});
	</script>

	<section>
		<div class="bordered">
			<h3>Tipo bollettino</h3>
			<div class="row my-3">
			  <div class="col-md px-md-3">
			    <div class="separator d-block d-sm-none"></div>
			      <div class="radio control-group no-margin-bottom big">
              <input type="radio" id="tipobon1" name="tipobon" data-ordinante>
              <label class="control control-checkbox" for="tipobon1">Premarcato 896</label>
            </div>
						<p>
							<strong>Campi prestampati:</strong><br />
							Intestazione<br />
							Codice bollettino<br />
							Importo<br />
							Conto postale
						</p>
			  </div>
			  <div class="col-md px-md-3">
			    <div class="separator"></div>
			    <div class="radio control-group no-margin-bottom big">
            <input type="radio" id="tipobon2" name="tipobon" data-ordinante data-bollettino>
            <label class="control control-checkbox" for="tipobon2">Premarcato 674</label>
	        </div>
					<p>
						<strong>Campi prestampati:</strong><br />
						Intestazione<br />
						Codice bollettino<br />
						Conto postale
					</p>
			  </div>
			  <div class="col-md px-md-3">
			    <div class="separator"></div>
			    <div class="radio control-group no-margin-bottom big">
			      <input type="radio" id="tipobon3" name="tipobon" data-ordinante>
			      <label class="control control-checkbox" for="tipobon3">In bianco 451</label>
			    </div>
					<p>
						<strong>Campi prestampati:</strong><br />
						Intestazione<br />
						Conto postale
					</p>
			    <div class="separator d-block d-sm-none"></div>
			  </div>
			  <div class="col-md px-md-3">
			    <div class="separator"></div>
			    <div class="radio control-group no-margin-bottom big">
			      <input type="radio" id="tipobon4" name="tipobon" data-ordinante data-bollettino>
			      <label class="control control-checkbox" for="tipobon4">In bianco 123</label>
			    </div>
			    <p></p>
			    <div class="separator d-block d-sm-none"></div>
			  </div>
			</div>
		</div>
	</section>

	<section id="dati_ordinante" style="display: none;">
		<div class="bordered pb-3">
			<h3>Dati ordinante</h3>
			<div class="form-row pt-3">
	      <div class="form-group col-sm-4">
	        <label>Rag.Soc./Cognome Nome*</label>
	        <input type="text" class="form-control" required>
	      </div>
	      <div class="form-group col-sm-4">
					<label>Indirizzo*</label>
					<input type="text" class="form-control" required>
	      </div>
				<div class="form-group col-sm-4">
					<label>Comune*</label>
					<input type="text" class="form-control" required>
	      </div>
	      <div class="form-group col-sm-4">
					<label>Cap*</label>
					<input type="text" class="form-control" required>
	      </div>
				<div class="form-group col-sm-4">
					<label>Provincia*</label>
					<input type="text" class="form-control" required>
	      </div>
	    </div>
		</div>
	</section>

	<section id="dati_bollettino" style="display: BLOCK;">
		<div class="bordered pb-3">
			<h3>Dati bollettino</h3>
			<div class="form-row">
	      <div class="form-group col-sm-4">
	        <label>Beneficiario*</label>
	        <input type="text" class="form-control" required>
	      </div>
	      <div class="form-group col-sm-4">
					<label>Conto postale*</label>
					<input type="text" class="form-control" required>
	      </div>
				<div class="form-group col-sm-4">
					<label>Importo (EUR)*</label>
					<input type="text" class="form-control" required>
	      </div>
	      <div class="form-group col-sm-8">
					<label>Causale*</label>
					<input type="text" class="form-control" required>
	      </div>
				<div class="form-group col-sm-4">
					<label>Data esecuzione*</label>
					<div class="input-group datepicker">
			      <input type="text" class="form-control" id="esecuzione" autocomplete="off" required/>
						<div class="input-group-append">
	            <span class="input-group-text">
	              <i class="icon icon-ico_calendario"></i>
	            </span>
	          </div>
			    </div>
	      </div>

				<script type="text/javascript">
					$(function(){
						$("#esecuzione").datepicker({
							maxDate: new Date(limiteAnno, limiteMese, limiteGiorno),
							minDate: new Date(),
					  });
					});

					// FUNZIONE DA USARE PER ATTIVARE L'ALERT SE LA SCADENZA E' OGGI
					function alertIfScadenzaOggi(scadenza) {
						let today = new Date();
						let month = today.getMonth()+1;
						month = (month<=9 ? '0'+month : month);
						let todayData = today.getDate()+'/'+month+'/'+today.getFullYear();
						if( scadenza == todayData ) {
							$('.data-today-modal').modal('show');
						}
					}
				</script>

				<!-- Modal -->
				<div class="modal fade data-today-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<!--h5 class="modal-title"></h5-->
									<a href="#" data-dismiss="modal" aria-label="Close" >
									  <img src="./fe/img/icon/close.svg">
									</a>
								</div>
								<div class="modal-body">
									<div class="alert alert-warning"> Attenzione </div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-w-sm" data-dismiss="modal" data-dismiss="modal">Annulla</button>
									<button type="button" class="btn btn-primary btn-w-sm">Ok</button>
								</div>
							</div>
						</div>
				</div>
				<!-- end Modal -->
	    </div>
		</div>
	</section>

	<!-- Pulsantiera -->
	<div class="row justify-content-end">
	  <div class="col-sm-6">
	    <div class="form-row d-flex justify-content-end">
	      <div class="form-group col-6 col-md-4 col-lg-3">
					<button id="submit" onclick="location.href='strutt_priv.php?tpl=tpl_bollettini_postali_2.php'" class="btn btn-primary btn-block" disabled>Prosegui</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fine pulsantiera -->

</div>

<!-- MODALE HELP DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- fine MODALE HELP DI ESEMPIO -->
