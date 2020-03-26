<form id="formModificaSimulato" method="post" action="/WEBHT/investimenti/compraVendiSimulatoEsegui.do" class="form-horizontal">
<div class="divForm section clearfix">
<div class="bs-example">
<div class="form-group">
	<input type="hidden" name="idRapportoSimulato" value="239618" />
	<input type="hidden" name="idMovimento" value="2513940" />
	<input type="hidden" name="idTitolo" value="448117" />
	<input type="hidden" name="dialogName" value="" />
	<div >
	
		<div class="form-field-input col-xs-4">	 
			<label class="control-label">Titolo</label>
			<div class="form-field bold">SG ETC FTSE MIB 3X S</div>
		</div>
		
		<div class="form-field-input col-xs-4">	 	
			<label class="control-label" for="txtPrezzo">Prezzo di acquisto</label>
				<div class="form-field"><input type="text" name="prezzoCarico" size="20" value="47,2500" id="prezzoCarico" class="form-control" /></div>
		</div>
		
		<div class="form-field-input col-xs-4">	 
			<label  class="control-label" for="txtCambio">Cambio</label>
			<div class="form-field"><input type="text" name="cambio" size="20" value="1,0000" id="cambio" class="form-control" /></div>
		</div>	
							
	<div class="form-field-input col-xs-4">	 
			<label  class="control-label" for="txtQuantita">Quantit&agrave;</label>
			<div>
				<input type="radio" name="segno" value="A" checked="checked" id="tipo" class="sfondoForm" />+
				<input type="radio" name="segno" value="M" id="tipo" class="sfondoForm" />-
		    	<input type="text" name="quantita" size="20" value="22" id="quantita" />
			</div>
		</div>
	
	</div>
</div></div>
</div>






<div class="actions pull-right margin-top20" >
	
	
	<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn " alt="Annulla" />
	<input type="submit" value="Conferma" class="btn " alt="Conferma" />
</div>

</form>