<h2>Acquisto</h2>
<!-- Box avvertimento/errore -->
<section class="boxesitoWrap">
	<div class="boxesito negativo">
		<i class="icon icon-alert_error icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fine box avvertimento/errore -->

<!-- Dati di riepilogo -->
<section>
	<h4>Dati Sicav</h4>
	<form class="" role="form" id="form01">
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-12">
			 			<!-- ESEMPIO MODALE DESCRITTIVA -->
						<div class="modal fade" id="layerInfoPir" tabindex="-1" role="dialog" aria-labelledby="layerInfoPirLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
										<h2 class="modal-title" id="layerInfoPirLabel">Cosa sono i fondi PIR</h2>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-12">

													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam laudantium doloremque veniam nam, magni quia similique sapiente minus, et molestias adipisci voluptatem maiores soluta odio deserunt, suscipit vel corporis explicabo voluptates, deleniti dolorem officia! Est, eum adipisci. Magni dolorum cumque aliquid soluta aliquam omnis quam excepturi consectetur provident labore molestiae quis nobis saepe cupiditate consequatur unde molestias, tempora repellat illo suscipit quasi consequuntur eum quisquam! Quae nisi velit, necessitatibus aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
														debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
														quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

			 			<!-- FINE ESEMPIO MODALE DESCRITTIVA -->
			 			<label class="control-label-output">Tipologia strumento</label>
			 			<span class="output">Fondo PIR <a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerInfoPir"><i class="icon icon-info_fill icon-2x"></i></a></span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Sicav</label>
			 			<span class="output"><a href="#">MSIF Global Brands A $</a></span>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output txthelp closeable" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores animi quis enim, molestias voluptatum distinctio veniam maxime sequi recusandae ex.">Valore quota/N.A.V. del 10/01/2017</label>
			 			<span class="output">102,76 USD </span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Societ&agrave; di gestione</label>
			 			<span class="output">Morgan Stanley Inv. Mgmt (ACD)	</span>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Categoria Assogestioni</label>
			 			<span class="output">Azionari Internazionali</span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output txthelp closeable" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores animi quis enim, molestias voluptatum distinctio veniam maxime sequi recusandae ex.">Importo minimo prima sottoscrizione (PIC)</label>
			 			<span class="output">100 EUR	</span>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Importo minimo sott. successive (PIC)</label>
			 			<span class="output">100 EUR</span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Commissioni d'ingresso</label>
			 			<span class="output">0,58%</span>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Commissioni di gestione</label>
			 			<span class="output">1,40%</span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Commissioni di uscita</label>
			 			<span class="output">Zero</span>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Diritti fissi di banca corrispondente</label>
			 			<span class="output">12,50 EUR</span>
			 		</div>
				</div>
			</div>
	   </div>
	</form>
</section>
<!-- Fine dati di riepilogo -->

<!-- Dati di riepilogo -->
<script type="text/javascript">
	// Esempio di interattivita' del form
	$(function(){

		// Radio PIC/PAC
		$("input[name=radioInvestimento]").click(function(){
			var rval = $(this).val();
			$("#bloccoPic, #bloccoPac").hide();
			if(rval == "PIC") {
				$("#bloccoPic").show();
			}
			else
			{
				$("#bloccoPac").show();
			}
		});


		// Spinners
		setSpinner
		    ({
					idInput :'#spinnerRata',
					step: 10,
					stop: function() {
						// Esempio di funzione
						// alert($('#spinnerRata').val());
					}
			});

		setSpinner
		    ({
					idInput :'#spinnerIniziale',
					step: 10
			});
	});

</script>
<section>
	<h4>Dati Ordine</h4>
	<form class="" role="form" id="form02">
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
			   <div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label">Deposito</label>
			 			<select class="form-control">
							<option value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR</option>
								<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR</option>
								<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR</option>
								<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR</option>
								<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR</option>
								<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR</option>
						</select>
			 		</div>
			 		<div class="col-sm-6">
			 			<label class="control-label-output">Disponibilit&agrave; attuale</label>
			 			<span class="output">Dato non disponibile EUR</span>
			 		</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores animi quis enim, molestias voluptatum distinctio veniam maxime sequi recusandae ex.">Modalit&agrave; di investimento</label>
						<div class="row">
							<div class="col-sm-6">
								<div class="radio inline">
			       					 <label class="textWrapper">
					         			<input type="radio" name="radioInvestimento" value="PIC" checked>
					          			<span class="text">unico acquisto (PIC)</span>
					        		</label>
			     				</div>
							</div>
							<div class="col-sm-6">
								<div class="radio inline">
			       					 <label class="textWrapper">
					         			<input type="radio" name="radioInvestimento" value="PAC">
					          			<span class="text">piano di accumulo (PAC)</span>
					        		</label>
			     				</div>
							</div>
						</div>
					</div>
			 	</div>
			</div>

			<!-- Blocco PIC -->
			<div id="bloccoPic">
				<div class="row">
			 		<div class="col-sm-6">
			 			<label class="control-label">Importo</label>
			 			<div class="form-inline">
							 <div class="form-group">
								  <div class="input-group">
								     <input type="text" class="form-control clear-x">
								     <div class="input-group-addon">EUR</div>
								  </div>
							</div>
						</div>
					</div>
			 	</div>
			</div>
			<!-- Fine blocco PIC -->

			<!-- Blocco PAC -->
			<div id="bloccoPac" style="display:none">
				<div class="form-group">
					<div class="row">
				 		<div class="col-sm-6">
				 			<label class="control-label">Durata del piano</label>
							<select class="form-control">
								<option value="1200*C*100*36 versamenti*AM009*3*12*100*36">36 versamenti</option>
								<option value="1200*E*100*60 versamenti*AM009*5*12*100*60">60 versamenti</option>
								<option value="1200*G*100*120 versamenti*AM009*10*12*100*120">120 versamenti</option>
								<option value="1200*H*100*180 versamenti*AM009*15*12*100*180">180 versamenti</option>
								<option value="1200*I*100*240 versamenti*AM009*20*12*100*240">240 versamenti</option>
								<option value="1200*C*100*36 versamenti*AM009*3*12*100*36">36 versamenti</option>
								<option value="1200*E*100*60 versamenti*AM009*5*12*100*60">60 versamenti</option>
								<option value="1200*G*100*120 versamenti*AM009*10*12*100*120">120 versamenti</option>
								<option value="1200*H*100*180 versamenti*AM009*15*12*100*180">180 versamenti</option>
								<option value="1200*I*100*240 versamenti*AM009*20*12*100*240">240 versamenti</option>
							</select>
						</div>
						<div class="col-sm-6">
				 			<label class="control-label">Periodicit&agrave;</label>
							<select class="form-control">
								<option value="M">Mensile</option>
							</select>
						</div>
				 	</div>
				</div>
				<div class="form-group">
					<div class="row">
				 		<div class="col-sm-6">
				 			<label class="control-label">Importo rata</label>
							<input id="spinnerRata"  type="text" name="spinnerRata" class="form-control spinner">
						</div>
						<div class="col-sm-6">
				 			<label class="control-label-output">Investimento totale (PAC)</label>
							<span class="output">9999</span>
						</div>
				 	</div>
				</div>
				<div class="form-group">
					<div class="row">
				 		<div class="col-sm-6">
				 			<label class="control-label">Importo iniziale</label>
							<input id="spinnerIniziale"  type="text" name="spinnerIniziale" class="form-control spinner">
						</div>
						<div class="col-sm-6">
				 			<label class="control-label-output">Investimento iniziale (PAC)</label>
							<span class="output">9999</span>
						</div>
				 	</div>
				</div>
				<p class="note">Avvertenza: il versamento iniziale non decurta la durata del PAC (numero versamenti).</p>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							<label class="control-label-output">Lorem ipsum</label>
							<div class="checkbox inline">
		       					 <label class="textWrapper">

		         					 <input type="checkbox" name="" id="">
		          					<span class="text">Si richiede l'esenzione del contributo, pari allo 0,1% di ciascun importo versato, finalizzato alla realizzazione del Fondo di Garanzia per progetti di microcredito in Italia di cui alla sezione B della Parte I del Prospetto d'Offerta.</span>
		        				</label>
		     				</div>
						</div>
					</div>

				</div>
			</div>
			<!-- Fine blocco PAC -->
			<div class="form-group btnWrapper">
				<div class="btn-align-left">
					<a type="button" class="btn btn-default">Indietro</a>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="">Avanti</a>
				</div>
				<br class="clear">
			</div>
	   </div>
	</form>
</section>
<!-- Fine dati di riepilogo -->

<?php virtual("/librerie/include/oggetti/box/box_090_sottoscrizione investimenti/oggetto.php"); ?>
