<form id="formModificaSimulato" method="post" action="/template/modale_investim_aggiungi_portaf_simulato_conferma.php" class="form-horizontal">
	<input type="hidden" name="isin" value="US0231351067" />
	<input type="hidden" name="codMercatoInfo" value="NASDAQ" />
				<div class="section clearfix">
					<div class="bs-example">
					<div class="form-group">
						<!-- LISTA -->
						<div class="form-field-input col-xs-4">
							<label class="control-label" for="idPortafoglio">Lista </label>
							<div class="form-field">
								<select name="denominazionePortafoglio" size="1" id="denominazionePortafoglio" class="form-control"><option value="239618">ARRETUSCA</option>
									
										<option value="239599">ARRIBA</option>
									
										<option value="240798">Risky</option>
									
										<option value="239598">239598</option></select>
							</div>
						</div>
						<!-- TITOLO -->
						<div class="form-field-input col-xs-4">
							<label class="control-label">Titolo </label>
							<div class="form-field">
								<label>denominazione</label>
							</div>
						</div>
						<!-- PREZZO -->
							<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtPrezzo">Prezzo di acquisto </label>
							<div class="form-field">
								
								<div class="col-xs-4"><input type="text" name="prezzoCarico" size="20" value="" id="prezzoCarico" class="form-control" />
								&nbsp;</div>
								<div class="col-xs-4"><label style="margin-left:5px">USD</label></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtCambio">Cambio </label>
							
							<div class="form-field">
								<input type="text" name="cambio" size="20" value="1,1147" id="cambio" class="form-control" />
							</div>
						</div>
						
					  <div class="form-field-input col-xs-4">
							<label class="control-label" for="txtQuantita">Quantit&agrave; </label>
							<div class="form-field">
								<input type="text" name="quantita" size="20" value="" id="quantita" class="form-control" />
							</div>
						</div>
						
						<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtData">Data </label>
							<div class="form-field">
								<input type="text" name="dataMovimento" maxlength="10" size="8" value="" id="dataMovimento" class="form-control datepicker floatl-marginr10 wauto " />
							</div>
						</div>
					</div></div>
				</div>

<div class="actions pull-right margin-top20" >
	<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn " alt="Annulla" />
	<input type="submit" value="Conferma" class="btn " alt="Conferma" />
</div>
</form>

<script type="text/javascript">
$('#dataMovimento').datepicker({
	buttonImage: '/HT/IMAGES/nGrafica/calendar.png',
	dateFormat: 'dd/mm/yy',
	minDate: '-2Y',
	maxDate: '+5D'
});
</script>