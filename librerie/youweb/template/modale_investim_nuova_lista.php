	<div id="gridBody">
		<div class="contentFull">
			<form id="formTitoliSimulati" method="post" action="/template/modale_investim_nuova_lista_conferma.php" class="form-horizontal">
				<div class="section clearfix">
					<h3 class="titleSection">Nuova lista</h3>
					<div class="bs-example">
						<div class="form-group">
							<input type="hidden" name="tipoRapportoSimulato" value="1">
							<div class="form-field-input col-xs-6">
								<label class="control-label" for="txtNome">Assegna un nome alla lista:</label>
								<div class="form-field">
									<input type="text" name="nomePtf" maxlength="20" size="20" value="" id="txtNome" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="actions pull-right margin-top20">
					<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn " alt="Annulla">
					<input type="submit" value="Conferma" class="btn " alt="Conferma">
				</div>
			</form>
		</div>
	</div>



<!--
<div id="dialogSelezione" class="ui-dialog-content ui-widget-content" style="max-height: none; width: auto; min-height: 119px; height: auto;">
	<div id="gridBody">
		<div class="contentFull">
			<div class="col-xs-12 messagePanel success" style="display: block;">
				<h3 class="titleSection">Esito operazione</h3>
				<div>
					<b class="verde">Messaggio al cliente</b>
					<br>
					Operazione eseguita con successo
				</div>
			</div>
			<br>
			<div class="pull-right margin-bottom20">
				<input class="btn button" type="button" value="Chiudi" title="Chiudi" onclick="closeAjaxDialog(this, true)">
			</div>
		</div>
	</div>
</div>
-->