<h2>Ricarica</h2>
<!-- Tab tipo ricarica -->
<div class="section outerWrapperTab no-backgr clearfix">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_manuale.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica manuale" role="button">Manuale</a></li>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="Ricarica automatica" role="button">Automatica</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tab tipo ricarica -->
<br class="clear">

<!-- Testo introduttivo -->
<p>Puoi eliminare o impostare <strong>una sola tipologia di ricarica per volta, solo su carte a te intestate</strong>.</p>

<!-- Stepper -->



<!-- Fine stepper YouWeb -->

<section>
<!-- Form selezione carta -->
<form method="POST" action="#">
	<h3 class="titleSection titleForm">La tua carta</h3>
	<div class="formWrapper" id="formSelCarta">
		<div class="form-group">
			<div class="row">
				<div class="form-field-input col-xs-12">
					<script>
					// Esempio di inizializzazione del selettore (la funzione inserita in spSel e' la callback - se esiste una preselezione viene eseguita subito)
					$(function() {
						$("#spselCartaSel").spSel(
							function() {
								// Esempio di callback
								$("#formSelCarta").addClass("loading");
								// Ricompilare qui i dati di output acquisiti ad esempio da una chiamata in AJAX
								// es per vedere il valore selezionato: console.log($("input[name=spselCarta]").val())
								setTimeout(function(){$("#formSelCarta").removeClass("loading");},500);
							}
						);
					});
					</script>
					<div class="spsel nosel" id="spselCartaSel" placeholder="Seleziona...">
						<input type="hidden" name="spselCarta" value="9999029312933210">
						<div class="spsel-options">
							<div class="spsel-option" data-value="9999029312933210">
								<a class="spsel-option-el">
									Numero carta <span class="only-detail">Prepaid </span>9999 0293 1293 3210<span class="only-detail"><br>Mario Rossi Palmieri<br>999.999,99 EUR</span>
								</a>
							</div>
							<div class="spsel-option" data-value="9999029312933110">
								<a class="spsel-option-el">
									Numero carta <span class="only-detail">Prepaid </span>9999 0293 1293 3110<span class="only-detail"><br>Pippo Rossi, Domenica Verdi<br>999.999,99 EUR</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- OUTPUT DATI CARTA -->
		<div class="bordered-you">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="row">
			              <span class="col-xs-6" id=""><label class="control-label">Intestatario:</label></span>
			              <span class="col-xs-6 alignRight" id=""><span class="resume">1,00</span></span>
			            </div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="row">
			             <span class="col-xs-6" id=""><label class="control-label">Saldo disp.:</label></span>
			              <span class="col-xs-6 alignRight" id=""><span class="resume">9.999.999,99 EUR</span></span>
			            </div>
					</div>
				</div>
			</div>
		</div>
		<!-- FINE OUTPUT DATI CARTA -->
	
		<!-- Paragrafo descrittivo -->
		<p>Sulla carta numero 0000 0000 0000 0000 &egrave; gia attiva una modalità di ricarica automatica.<br>
		Puoi impostare una nuova modalit&agrave; ogni nuova impostazione disabilita la precedente.</p>
		<!-- Fine paragrafo descrittivo -->

		<!-- Esempio di modale per cancellazione -->
		<div id="modaleElimina" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<div class="modal-content">
		      <div class="modal-header">
		      	<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
		      </div>
		      <div class="modal-body">
			    <section>
					<div class="row">
						<div class="col-sm-12">
							<p>Stai eliminando una impostazione di ricarica automatica.
							<strong>Sei sicuro di voler proseguire</strong>?</p>
						</div>
					</div>
				</section>
		      </div>
		      <div class="modal-footer">
		      	<div class="form-group btnWrapper">
			      	<div class="btn-align-left">
						<a type="button" class="btn btn-default" data-dismiss="modal" alt="Annulla">Annulla</a>
					</div>
			       	<div class="btn-align-right">
						<a type="button" class="btn btn-primary" alt="Elimina">Sono sicuro</a>
					</div>
				</div>
		      </div>
		    </div>
		  </div>
		</div>


		<!-- Fine esempio di modale per cancellazione -->

		<!-- Oggetto con riepilogo azioni-->
			<table role="grid">
				<colgroup>
					<col></col>
					<col width="3%"></col>
					<col width="3%"></col>
				</colgroup>
				<tbody>
					<tr class="odd">
						<td class="oLeft">0000 0000 0000 0000 - RICARICA TEMPO REALE - ATTIVA dal 01/07/2019</td>
						<td class="oCenter">
							<a data-target="#modaleElimina" data-toggle="modal" title="elimina 0000 0000 0000 0000 - RICARICA TEMPO REALE - ATTIVA dal 01/07/2019"><i class="icon icon-delete_table ico-title"></i></a>
						</td>
						<td class="oCenter">
							<a href="/template/strutt_webank.php?tpl=tpl_carte_ricarica_automatica.php&html=vr&liv1=carte&liv2=ricariche&liv3=ricarica" title="modifica 0000 0000 0000 0000 - RICARICA TEMPO REALE - ATTIVA dal 01/07/2019"><i class="icon icon-edit_fill ico-title"></i></a>
						</td>
					</tr>
			</tbody>
			</table>
		</div>


		<!-- Fine oggetto con riepilogo azioni -->


	</div>

</form>
<!-- Fine form selezione carta -->

</section>