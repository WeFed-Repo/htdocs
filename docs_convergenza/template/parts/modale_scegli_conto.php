<div class="modal-body">
<p>Scegli il conto di addebito che vuoi utilizzare per questo preventivo. Nel caso deciderai di sottoscrivere l'offerta di noleggio, questo conto verrà utilizzato per l'addebito mensile del canone.</p>
<div class="row">
	
	<div class="col-xs-12">
		<!-- selettore rapporto skinnato per selezione conti-->
<form class="formGenerico selettore-rapporto selettore-conti loading" role="form" id="selContiForm">
	<!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-3"><label class="control-label-output">Conto di addebito</label></div>
				<div class="col-xs-12 col-sm-9">
					<script type="text/javascript">
						// Selettore deposito/rapporto
						$(function(){
                                // funzione di callback per popolare la select --eccezione dallo standard
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
					<div id="sceltaRapportoConto" class="selectRapp">
						<input id="sceltaRapportoContoVal" type="hidden" class="value" name="sottorapporto" value=""/>
						<a href="javascript:;" class="inputOption inputSx form-control">
							<span class="icon icon-arrow_down" title="icon-arrow_down"></span>
							<span class="icon icon-arrow_up" title="icon-arrow_down"></span>
							<span class="inputDx">
								<span class="input">
								
								</span>
							</span>
						</a>
						<div class="selector" style="display: none;">
							<span class="group">
								<a value="C.C 12345678 - 1400,45 &euro; - SARA DI MODICA" href="javascript:;" class="selectorOptions first selected">
									<div>Conto: 12345678</div>
									<div>SARA DI MODICA</div>
									<div>1400,45 &euro;</div>
                                </a>
							</span>
							<span class="group">
								<a value="C.C 12345679 - 1400,45 &euro; - MARIO ROSSI" href="javascript:;" class="selectorOptions">
									<div>Conto: 12345678</div>
									<div>MARIO ROSSI</div>
									<div>1400,45 &euro;</div>
								</a>
							</span>
							<span class="group">
								<a value="C.C 12345679 - 1400,45 &euro; - MARIO ROSSI" href="javascript:;" class="selectorOptions">
									<div>Conto: 12345678</div>
									<div>MARIO ROSSI</div>
									<div>1400,45 &euro;</div>
								</a>
							</span>
							<span class="group">
								<a value="C.C 12345679 - 1400,45 &euro; - MARIO ROSSI" href="javascript:;" class="selectorOptions">
									<div>Conto: 12345678</div>
									<div>MARIO ROSSI</div>
									<div>1400,45 &euro;</div>
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
