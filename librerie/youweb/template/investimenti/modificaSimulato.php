<form id="formModificaSimulato" method="post" action="/WEBHT/investimenti/modificaSimulatoEsegui.do" class="form-horizontal">
<div class="divForm section clearfix">
<div class="boxContent bs-example">
	<input type="hidden" name="idRapportoSimulato" value="239618" />
	<input type="hidden" name="idMovimento" value="2513940" />
	<input type="hidden" name="idTitolo" value="448117" />
	<input type="hidden" name="dialogName" value="" />
	
	<div class="form-group">

	
	
		<div class="form-field-input col-xs-4">	 
			<label class="control-label">Portafoglio</label>
			<div class="form-field bold">ARRETUSCA</div>
		</div>
		<div class="form-field-input col-xs-4">	 	 
			<label  class="control-label">Titolo</label>
			<div  class="form-field bold">SG ETC FTSE MIB 3X S</div>
		</div>
		<div class="form-field-input col-xs-4">	 	
			<label  class="control-label" for="txtPrezzo">Prezzo medio di carico</label>
			<div  class="form-field"><input type="text" name="prezzoCarico" size="20" value="47,2500" id="prezzoCarico" class="form-control" /></div>
		</div>
	<div class="form-field-input col-xs-4">	 	
			<label  class="control-label" for="txtCambio">Cambio</label>
			<div  class="form-field"><input type="text" name="cambio" size="20" value="1,0000" id="cambio" class="form-control" /></div>
		</div>									
	<div class="form-field-input col-xs-4">	 
			<label  class="control-label" for="txtQuantita">Quantit&agrave;</label>
			<div  class="form-field">
		    	<input type="text" name="quantita" size="20" value="22" id="quantita" class="form-control" />
			</div>
		</div>
	<div class="form-field-input col-xs-4">	 
		<label  class="control-label" for="txtData">Data</label>
			<div  class="form-field">
		    	<input type="text" name="dataMovimento" maxlength="10" size="8" value="12/05/2017" id="dataMovimento" class="form-control" />
			</div>
		</div>
	
	</div>
</div>
</div>





<div class="actions pull-right margin-top20" >
	
	
	<input type="button" name="" value="Annulla" onclick="closeAjaxDialog(this, false)" class="btn " alt="Annulla" />
	<input type="submit" value="Conferma" class="btn " alt="Conferma" />
</div>

</form>

<script type="text/javascript">
$('#dataMovimento').datepicker({
	dateFormat: 'dd/mm/yy',
	minDate: '-2Y',
	maxDate: '+5D'
});
</script>