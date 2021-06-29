<div class="modal-body">
<p>Scegli il conto di addebito che vuoi utilizzare per questo preventivo. Nel caso deciderai di sottoscrivere l'offerta di noleggio, questo conto verrà utilizzato per l'addebito mensile del canone.</p>
	<div class="row">
		<div class="col-xs-12">
			<!-- selettore rapporto skinnato per selezione conti-->
			<form class="formGenerico selettore-rapporto selettore-conti loading" role="form" id="selContiForm">
				<!--caso con selettore rapporto -->
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-3 paddingTop10"><label class="control-label-output">Conto di addebito</label></div>
							<div class="col-xs-12 col-sm-9">
								<script type="text/javascript">
									// Selettore deposito/rapporto
									$(function(){
											// funzione di callback per popolare la select -- può essere skinnata all'occorenza
											setHtmlInput = function(rapp) {
											
												var valueSel = $("#sceltaRapportoContoVal").val();
												$("#sceltaRapportoConto span.input").html(valueSel);
												setTimeout(function(){$("#selContiForm").removeClass("loading");},1000)
											}
											// Esempio selettore rapporto							
											createSelectRapp('sceltaRapportoConto', 'sceltaRapportoContoVal', setHtmlInput);}
									);
								</script>
								<!-- Selettore rapporto/deposito -->
								<!-- aggiunto il plaholder Seleziona conto-->
								<div id="sceltaRapportoConto" class="selectRapp" data-placeholder="Seleziona conto">
									<input id="sceltaRapportoContoVal" type="hidden" class="value" name="rapporto" value=""/>
									<a href="javascript:;" class="inputOption inputSx form-control">
										<span class="icon icon-arrow_down" title="icon-arrow_down"></span>
										<span class="icon icon-arrow_up" title="icon-arrow_down"></span>
										<span class="inputDx">
											<span class="input font-normal"></span>
										</span>
									</a>
									<div class="selector" style="display: none;">
										<span class="group">
											<a value="C.C 12345678 - 1400,45 &euro; - SARA DI MODICA" href="javascript:;" class="selectorOptions first selected">
												<span class="selettore-row noPadding">Conto: 12345678</span>
												<span class="selettore-row noPadding">SARA DI MODICA</span>
												<span class="selettore-row noPadding">1400,45 &euro;</span>
											</a>
										</span>
										<span class="group">
											<a value="C.C 12345679 - 1400,45 &euro; - MARIO ROSSI" href="javascript:;" class="selectorOptions">
												<span class="selettore-row noPadding">Conto: 12345678</span>
												<span class="selettore-row noPadding">MARIO ROSSI</span>
												<span class="selettore-row noPadding">1400,45 &euro;</span>
											</a>
										</span>
										<span class="group">
											<a value="C.C XXXX - 1400,45 &euro; - MARIO BIANCHI" href="javascript:;" class="selectorOptions">
												<span class="selettore-row noPadding">Conto: XXXXX</span>
												<span class="selettore-row noPadding">MARIO BIANCHI</span>
												<span class="selettore-row noPadding">1400,45 &euro;</span>
											</a>
										</span>
									
									</div>
								</div>
							</div>
						</div>
					</div>
					
			</form>
		</div>
	</div>
	<p class="note">Cliccando su “Prosegui” verrai indirizzato sul sito di Alphabet</p>
</div>
<div class="modal-footer">
<div class="form-group btnWrapper">
	<div class="btn-align-left">
		<a type="button" class="btn btn-default">Indietro</a>
	</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="">Prosegui</a>
	</div>
	<br class="clear">
</div>
</div>
