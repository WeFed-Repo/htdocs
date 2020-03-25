<p><strong>Imposta trasferimento periodico verso Risparmio Ben Fatto</strong></p><br>
<p class="small">Definisci la <strong>frequenza</strong> e l'<strong>importo</strong> del trasferimento dal conto corrente a Risparmio Ben Fatto. Il tuo salvadanaio sarà alimentato automaticamente.<br>Puoi impostare più trasferimenti periodici.</p><br>
<div id="boxTrasfRicEvo" class="contOverflow">
	<div class="formGeneric wrapTrasferisci">
		<div id="ricorrentiEvoForm" class="nuovoTrasBox">
			<div class="row">
				<div class="col-xs-4">
					<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Importo</label>
					<input type="text" name="importoEvo" id="importoTREvof">
				</div>
				<div class="col-xs-4">
						<label for="frequenzaTREvof" class="nomefield">Frequenza</label>
						<select name="frequenzaEvo" id="frequenzaTREvof">
							<option value="S">settimanale</option>
							<option value="D">ogni 10 giorni</option>
							<option value="M">mensile</option>
							<option value="T">trimestrale</option>
						</select>
				</div>
				<div class="col-xs-4">
					<label for="aPartireDaTREvof" id="labelApartireDaTREvo" class="nomefield">Data primo trasferimento</label>
					<input type="text" name="aPartireEvo" id="aPartireDaTREvof" value="gg/mm/aaaa">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<label class="nomefield">Scadenza</label>
					<div id="scadenzeLabeleRadio" class="row">
						<div class="col-xs-3">
							<label><input type="radio" id="revocaEvo" name="scadenzaTREvof" value="a revoca" class="radio">su richiesta</label>
						</div>
						<div class="col-xs-6">
							<div class="labelPre"><label id="labelDopoNEvo"><input type="radio" id="dopoNEvo" name="scadenzaTREvof" value="dopo" class="radio">in automatico, dopo</label></div><div class="inputInt"><input type="text" name="numeroTREvof" id="numeroTREvof" class="numero" maxlength="4"></div><div class="labelPost">trasferimenti effettuati</div>
						</div>
						<div class="col-xs-3">
							<a id="ImpostaTrasRicorrenteEvo" class="spButton backgroundBank flLeft">conferma</a>
						</div>							
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--esito negativo-->
		<div id="boxTrasfRicEvoEsiNega" class="BoxRiaEsi" style="display:none">
			<div class="boxesito negativo">
				<div class="middle"><span class="imgCont"></span>
					<div class="text">
						<span class="msg"></span><br>
						<a href="javascript:;" class="chiudiEvo flRight">chiudi</a>
					</div>
				</div>
			</div>												
		</div>
		<!--esito positivo-->
		<div id="boxTrasfRicEvoEsiPosi" class="BoxRiaEsi" style="display:none">
			<div class="boxesito positivo">
				<div class="middle"><span class="imgCont"></span>
					<div class="text">
						<strong>Trasferimento periodico impostato correttamente</strong><br>
						<br>
						<div class="row">
							<div class="col-xs-5">
								<span>Importo <strong id="importoRicEvoEsi"></strong></span><br>
							</div>
							<div class="col-xs-4">
								<span>Frequenza <strong id="frequenzaRicEvoEsi"></strong></span><br>
							</div>
							<div class="col-xs-3">&nbsp;</div>
						</div>
						<div class="row">
							<div class="col-xs-5">
								<span>Data primo trasferimento <strong id="aPartireDaRicEvoEsi"></strong></span><br>
							</div>
							<div class="col-xs-4">
								<span>Scadenza <strong id="scadenzaRicEvoEsi"></strong></span><br>
							</div>
							<div class="col-xs-3">
								<a href="javascript:;" class="chiudiEvo flRight">nuovo trasferimento</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<br class="clear">