<form class="formGenerico borderFormRounded output loading" role="form" id="selDepForm">
		<!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label-output">Deposito titoli</label>
					<script type="text/javascript">
						// Selettore deposito/rapporto
						$(function(){

								// Esempio di callback da selezione
								refreshDeposito = function(rapp) {
									$("#selDepForm").addClass("loading");
									
									setTimeout(function(){$("#selDepForm").removeClass("loading");},1000)
								}

								// Esempio selettore rapporto							
								createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', refreshDeposito);}


						);
					</script>
					<!-- Selettore rapporto/deposito -->
					<div id="sceltaRapporto" class="selectRapp ">
						<input id="sceltaRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
						<a href="javascript:;" class="inputOption inputSx form-control">
							<span class="inputDx">
								<span class="input">
									xxx/aaaaaa
								</span>
							</span>
						</a>
						<div class="selector" style="display: none;">
							<span class="group">
								<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
									<strong>xxx/aaaaaa - Tutti i sottodepositi - Rossetti stefano, Ferraboschi Daniela</strong><br>
									5.705,17 EUR
								</a>
									<a value="xxxaaaaaa0" href="javascript:;" class="selectorOptions">
										<strong>xxx/aaaaaa/0 - Rossetti stefano, Ferraboschi Daniela</strong>
									</a>
									<a value="xxxaaaaaa1" href="javascript:;" class="selectorOptions">
										<strong>xxx/aaaaaa/1 - Rossetti stefano</strong>
									</a>
							</span>
							<span class="group">
								<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
									<strong>xxx/aaaaaa - Tutti i sottodepositi - Rossetti stefano, Ferraboschi Daniela</strong><br>
									5.705,17 EUR
								</a>
									<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
										<strong>xxx/bbbbbb/0 - Rossetti stefano, Ferraboschi Daniela</strong>
									</a>
									<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
										<strong>xxx/bbbbbb/1 - Rossetti stefano</strong>
									</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bordered-you">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<label class="control-label-output">Saldo disponibile</label>
						<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
						<div class="htmlTooltip">
							08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
							<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
							<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
							<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
							<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
						</div>
						
					</div>
					<div class="col-xs-2 col-sm-2 no-label">
						<!-- Modale con dettaglio dei saldi -->
						
						<!-- Fine modale con dettaglio dei saldi -->
						<span class="output"><a href="#" class="text-link" title="Dettaglio saldo">Dettaglio saldo</a></span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<label class="control-label-output">Conto</label>
						<span class="output">987987987987987987</span>
					</div>
					<div class="col-xs-12 col-sm-6">
						<label class="control-label-output">Filiale</label>
						<span class="output">01923 - Nome della filiale</span>
					</div>
				</div>
			</div>
		</div>
	</form>