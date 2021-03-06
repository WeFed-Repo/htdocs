<form class="formGenerico borderFormRounded selettore-rapporto loading" role="form" id="selDepForm">
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
							<?php for ($i==1;$i<30;$i++) {
								?>
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

							<?php
							}?>

							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bordered-you">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
                        <div class="inline-output">
                            <label class="control-label-output inline-output-left">Saldo disp.</label>
                            <div class="inline-output-right">
                                <span class="output txthelp" data-toggle="tooltip"  data-viewport="<?php print ($site==="webank")?"#contenuti" : "#mainContent"?>"
								title='08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
                                    <br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
                                    <br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
                                    <br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
                                    <br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>'
								>4.213,46 al gg/mm/aaaa</span>
                            </div>
                        </div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<!-- Modale con dettaglio dei saldi -->
						
                        <!-- Fine modale con dettaglio dei saldi -->
                        <div class="inline-output">
                            <span class="output inline-output-left"><a href="#" class="text-link" title="Dettaglio saldo">Dettaglio saldo</a></span>
                        </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
                        <div class="inline-output">
                            <label class="control-label-output inline-output-left">Conto</label>
                            <span class="output inline-output-right">987987987987987987</span>
                        </div>
					</div>
					<div class="col-xs-12 col-sm-6">
                        <div class="inline-output">
                            <label class="control-label-output inline-output-left">Filiale</label>
                            <span class="output inline-output-right">01923 - Nome della filiale</span>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</form>