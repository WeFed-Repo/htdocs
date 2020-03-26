<form id="formModificaSimulato" method="post" action="/WEBHT/investimenti/titoliPortafoglioSimulatoAggiungiEsito.do" class="form-horizontal">
	<input name="isin" value="IT0005239360" type="hidden">
	<input name="codMercatoInfo" value="MTA" type="hidden">

	
		
			
			

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
								<label>UNICREDIT</label>
							</div>
						</div>
						<!-- PREZZO -->
							<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtPrezzo">Prezzo di acquisto </label>
							<div class="form-field">
								
								<div class="col-xs-4"><input name="prezzoCarico" size="20" value="16,8100" id="prezzoCarico" class="form-control" type="text">
								&nbsp;</div>
								<div class="col-xs-4"><label style="margin-left:5px">EUR</label></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtCambio">Cambio </label>
							
							<div class="form-field">
								<input name="cambio" size="20" value="1,0000" id="cambio" class="form-control" type="text">
							</div>
						</div>
						
					  <div class="form-field-input col-xs-4">
							<label class="control-label" for="txtQuantita">Quantit&agrave; </label>
							<div class="form-field">
								<input name="quantita" size="20" value="" id="quantita" class="form-control" type="text">
							</div>
						</div>
						
						<div class="form-field-input col-xs-4">
							<label class="control-label" for="txtData">Data </label>
							<div class="form-field">
								<input name="dataMovimento" maxlength="10" size="8" value="" id="dataMovimento" class="form-control datepicker floatl-marginr10 wauto  hasDatepicker" type="text"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
							</div>
						</div>
					</div></div>
				</div>
				




<div class="actions pull-right margin-top20">
	
	
	<input name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn " alt="Annulla" type="button">
	<input value="Conferma" class="btn " alt="Conferma" type="submit">
</div>
			
		
		
	

</form>