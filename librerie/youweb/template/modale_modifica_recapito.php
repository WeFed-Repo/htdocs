


<div id="gridBody">
<div class="contentFull">
	
	
	





	
		








	


		
		<div class="form-field-input col-xs-12 margin-top10">
			<div class="contentPagina">
				
				Qui puoi modificare il tuo indirizzo di recapito.<br>Attenzione. La modifica avr&agrave; effetto solo per l'azione corrente.
			</div>
		</div>
		
		<form id="formAccreditoStipendio" method="post" action="/WEBHT/cc/accreditoStipendioModificaRecapitoEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="349e5fb3fdf858104e93b17397b7885b"></div>
			<div class="divForm">
				
				








		
			Modifica il recapito
		
		
		
		

     
				<div class="bs-example">
					<div class="form-group">
						<div class="form-field-input col-xs-12">
							<label class="control-label">
								Indirizzo
							</label>
							<div class="form-field">
								<input type="text" name="recapitoRichiedente.indirizzo" size="60" value="FRAZIONE BARAZZINA II 24" id="indirizzoAzienda" class="form-control">
							</div>
						</div>
						<div class="form-field-input col-xs-4">
							<label class="control-label">
								CAP
							</label>
							<div class="form-field">
								<input type="text" name="recapitoRichiedente.cap" maxlength="5" size="6" value="26812" id="capAzienda" class="form-control">	
							</div>
						</div>
						<div class="form-field-input col-xs-4">
							<label class="control-label">	
								Comune
							</label>
							<div class="form-field">
								<input type="text" name="recapitoRichiedente.localita" size="35" value="BORGHETTO LODIGIANO" id="comuneAzienda" class="form-control">
							</div>
						</div>
						<div class="form-field-input col-xs-4">
							<label class="control-label">	
								Provincia
							</label>
							<div class="form-field">
								<input type="text" name="recapitoRichiedente.provincia" maxlength="2" size="3" value="LO" id="provinciaAzienda" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pull-right margin-bottom10 margin-top10">
				
				<input type="button" name="annulla" value="Annulla" onclick="popolaRecapito();" class="btn btn-primary">
				
				<input type="submit" name="modificaRecapitoEsito" value="Modifica" id="modificaRecapitoEsito" class="btn btn-primary" alt="Modifica">
			</div>
		</form>
	
	

</div>
</div>