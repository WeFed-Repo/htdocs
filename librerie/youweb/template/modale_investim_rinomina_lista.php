<div id="gridBody">
	<div class="contentFull">
		<form id="formTitoliSimulati" method="post" action="/template/modale_investim_rinomina_lista_conferma.php" class="form-horizontal">
			<div class="section clearfix">
				<h3 class="titleSection">Rinomina lista</h3>
				<div class="bs-example">
					<input type="hidden" name="codLista" value="240858">
					<div class="form-group">
						<div>				
							<div class="form-field-input col-xs-6">
								<label for="txtNome" class="control-label">Assegna un nome alla lista:</label>
								<div class="form-field">
									<input type="text" name="nomePtf" maxlength="20" size="20" value="" id="txtNome" class="form-control">
								</div>
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