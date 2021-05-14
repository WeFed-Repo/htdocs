<!-- selettore rapporto skinnato per selezione conti-->
<form class="formGenerico selettore-rapporto selettore-conti loading" role="form" id="selContiForm">
	<!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12">
					<label class="control-label-output">Conto di addebito</label>
					<script type="text/javascript">
						// Selettore deposito/rapporto
						$(function(){
                                // Esempio di callback da selezione
								refreshDeposito = function(rapp) {
									$("#selContiForm").addClass("loading");
									setTimeout(function(){$("#selContiForm").removeClass("loading");},1000)
								}
                                // Esempio selettore rapporto							
								createSelectRapp('sceltaRapportoConto', 'sceltaRapportoContoVal', refreshDeposito);}
                        );
					</script>
					<!-- Selettore rapporto/deposito -->
					<div id="sceltaRapportoConto" class="selectRapp">
						<input id="sceltaRapportoContoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
						<a href="javascript:;" class="inputOption inputSx form-control">
							<span class="icon icon-arrow_down" title="icon-arrow_down"></span>
							<span class="icon icon-arrow_up" title="icon-arrow_down"></span>
							<span class="inputDx">
								<span class="input">
									xxx/aaaaaa
								</span>
							</span>
						</a>
						<div class="selector" style="display: none;">
							<span class="group">
								<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
								    <strong>Conto corrente 0001234 - Intestato a Mario Rossi</strong>
									<span class="selettore-row">
										<strong>Filiale:</strong> FILIALE VIRTUALE 1099 - 1099
									</span>
                                    <span class="selettore-row row">
										<span class="col-xs-12 col-sm-4"><strong>Saldo disponibile:</strong> 6.055,59 EUR</span>
										<span class="col-xs-12 col-sm-4"><strong>di cui Fido:</strong> 0,00 EUR</span>
										<span class="col-xs-12 col-sm-4"><strong>Saldo contabile:</strong> 85.126,91 EUR</span>
									</span>
								</a>
							</span>
							<span class="group">
								<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
								    <strong>Conto corrente 0007777 - Intestato a Mario Bianchi</strong>
									<span class="selettore-row">
										<strong>Filiale:</strong> FILIALE VIRTUALE XXXX - 1099
									</span>
                                    <span class="selettore-row row">
										<span class="col-xs-12 col-sm-4"><strong>Saldo disponibile:</strong> 10.055,59 EUR</span>
										<span class="col-xs-12 col-sm-4"><strong>di cui Fido:</strong> 1000,00 EUR</span>
										<span class="col-xs-12 col-sm-4"><strong>Saldo contabile:</strong> 105.126,91 EUR</span>
									</span>
								</a>
							</span>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="bordered">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
                        <div class="inline-output">
                            <label class="control-label-output inline-output-left">
								<strong>Saldo disp.</strong>
							</label>
                            <div class="inline-output-right">
								<strong>85.000,59 EUR</strong>
                            </div>
                        </div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="inline-output">
							<label class="control-label-output inline-output-left"><strong>Di cui Fido</strong></label>
							<div class="inline-output-right">
								<strong>00,00 EUR</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</form>