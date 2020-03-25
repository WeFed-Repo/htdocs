<div class="formGenerico">
	<div class="form-group">
		<div class="row">
			<div id="cbpCountriesBox" class="col-xs-3">
				<label class="control-label">Combobox Plus</label>
				<select id="cbpCountries" class="combobox form-control">
				  <option value="" selected="selected">Seleziona una citt&agrave;</option>
				  <option value="Pennsylvania">Pennsylvania</option>
				  <option value="Connecticut">Connecticut</option>
				  <option value="New York">New York</option>
				  <option value="Maryland">Maryland</option>
				  <option value="Virginia">Virginia</option>
				</select>
			</div>
			<div class="col-xs-3">
				<label class="control-label-output">Voce selezionata dalla select?</label>
				<span id="cbpSelected" class="output"></span>
			</div>
			<div class="col-xs-3">
				<label class="control-label-output">Testo inserito manualmente</label>
				<span id="cbpQuery" class="output"></span>
			</div>
			<div class="col-xs-3">
				<label class="control-label">&nbsp;</label>
				<a type="button" class="btn btn-primary" id="cbpClearBtn">Azzera</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  $(function(){
  	var cbpCountries = $('#cbpCountries'),
  		cbpSelected = $('#cbpSelected'),
  		cbpQuery = $('#cbpQuery'),
  		updateVal = function () {
  			var isSelected = cbpCountries.comboboxPlus('isSelected'),
  				query = cbpCountries.comboboxPlus('getQuery');

	    	cbpSelected.html(isSelected ? 'S&igrave; => ' + cbpCountries.comboboxPlus('getSelection') : 'No');
	    	cbpQuery.html(cbpCountries.comboboxPlus('getQuery'));
  		};

    cbpCountries.comboboxPlus({
    	appendId: 'Input'
    }).comboboxPlus('onChange', updateVal);

    $('#cbpClearBtn').click(function () {
    	cbpCountries.comboboxPlus('clear');
    });
  });
</script>
