<script>
// LIMITI PER DATEPICKERS BONIFICO
let limiteAnno = (new Date(new Date().setFullYear(new Date().getFullYear() + 1))).getFullYear()
let limiteMese = (new Date(new Date().setMonth(new Date().getMonth() ))).getMonth()
let limiteGiorno = (new Date().getDate()) +1
</script>

<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_con_calendario/oggetto.php'); ?>

<div class="with-stepper">
	<h1>
		Bonifico singolo
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

	<!-- / Dati rapporto -->

	<!-- Dati beneficiario -->
	<div class="mobile-form no-margin-section">
	<section class="mb-xs-0 pb-xs-0">
		<div class="bordered">
			<h2>Dati beneficiario</h2>
			<div class="row">
			  <!--div class="form-group"-->
			    <div class="col-md">
			      <label class="control-label">Tipo anagrafica *</label>
			      <select  class="form-control">
			        <option selected></option>
			      </select>
			    </div>
			    <div class="col-md">
			      <label class="control-label">Nome beneficiario *</label>
			      <div class="input-group">
			        <input type="text" class="form-control" />
			        <div class="input-group-append">
			          <span class="input-group-text">
			            <i class="icon icon-ico_gestione_beneficiari"></i>
			          </span>
			        </div>
			      </div>
			    </div>
			    <div class="col-md">
			      <label class="control-label">IBAN</label>
			      <input type="text" class="form-control" />
			    </div>
			  <!--/div-->
			</div>
			<div class="row">
			  <!--div class="form-group"-->
			    <div class="col">
			      <div class="form-check control-group checkbox fl-right">
			        <input class="form-check-input" type="checkbox" id="aggiungi" name="aggiungi">
			        <label class="form-check-label" for="aggiungi">Aggiungi alla rubrica</label>
			      </div>
			    </div>
			  <!--/div-->
			</div>

		</div>
	</section>
	<!-- / Dati beneficiario -->

	<!-- Dati bonifico -->
	<section>
		<div class="bordered">
			<h2>Dati bonifico</h2>
			<div class="row">
			  <!--div class="form-group"-->
			    <div class="col-md-4">
			      <label class="control-label">Importo *</label>
			      <input type="text" class="form-control" />
			    </div>
			    <div class="col-md-8">
			      <label class="control-label">Causale *</label>
			      <input type="text" class="form-control" />
			    </div>
			  <!--/div-->
			</div>
			<div class="row mb-3">
			  <div class="col-md px-md-3">
			    <div class="separator d-block d-sm-none"></div>
			      <div class="radio control-group no-margin-bottom big">
              <input type="radio" id="tipobon1" name="tipobon" checked>
              <label class="control control-checkbox" for="tipobon1">Bonifico ordinario</label>
            </div>
			      <p>
			        L'accredito della somma al beneficiario avviene il primo giorno lavorativo successivo alla data di inserimento.
			      </p>
			      <label class="control-label">Data di esecuzione</label>
			      <script type="text/javascript">
			        $(function(){
			          $("#datepicker1").datepicker({
	      						maxDate: new Date(limiteAnno, limiteMese, limiteGiorno)
									});
			        });
			      </script>
			      <div class="input-group datepicker">
			        <input type="text" class="form-control" id="datepicker1" autocomplete="off"/>
							<div class="input-group-append">
		            <span class="input-group-text">
		              <i class="icon icon-ico_calendario"></i>
		            </span>
		          </div>
			      </div>
			  </div>
			  <div class="col-md px-md-3">
			    <div class="separator"></div>
			    <div class="radio control-group no-margin-bottom big">
			                  <input type="radio" id="tipobon2" name="tipobon">
			                  <label class="control control-checkbox" for="tipobon2">Bonifico urgente</label>
			        </div>
			    <p>
			      L'accredito della somma al beneficiario avviene il giorno stesso dell'inserimento (entro 24 ore esclusi i festivi).
			    </p>
			    <label class="control-label">Data di esecuzione</label>
			    <script type="text/javascript">
			      $(function(){
			        $("#datepicker2").datepicker({
									maxDate: new Date(limiteAnno, limiteMese, limiteGiorno)
								});
			      });
			    </script>
			    <div class="input-group datepicker">
			      <input type="text" class="form-control" id="datepicker2" autocomplete="off"/>
						<div class="input-group-append">
	            <span class="input-group-text">
	              <i class="icon icon-ico_calendario"></i>
	            </span>
	          </div>
			    </div>
			  </div>
			  <div class="col-md px-md-3">
			    <div class="separator"></div>
			    <div class="radio control-group no-margin-bottom big">
			      <input type="radio" id="tipobon3" name="tipobon">
			      <label class="control control-checkbox" for="tipobon3">Bonifico istantaneo</label>
			    </div>
			    <p>
			      L'accredito della somma al beneficiario avviene entro 10 secondi (importo max 15.000 &euro; per operazione). Non revocabile.
			    </p>
			    <div class="separator d-block d-sm-none"></div>
			  </div>
			</div>

			<div class="row">
			  <div class="col">
			      <div class="checkbox control-group switch">
			          <input type="checkbox" id="notifica" name="notifica">
			          <label class="control control-checkbox" for="notifica">Notifica all'ordinante</label>
			      </div>
			  </div>
			</div>

		</div>

	</section>
	<!-- / Dati beneficiario -->

	<!-- Pulsantiera -->
	<div class="row justify-content-end">
	  <div class="col-sm-6">
	    <div class="form-row d-flex justify-content-end">
	      <div class="form-group col-6 col-md-4 col-lg-3">
					<a href="strutt_priv.php?tpl=tpl_bonifico_singolo_2.php" class="btn btn-primary btn-block">Prosegui</a>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fine pulsantiera -->

</div>

<!-- MODALE HELP DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- fine MODALE HELP DI ESEMPIO -->
