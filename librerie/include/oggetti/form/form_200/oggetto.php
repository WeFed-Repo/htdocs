<form class="formGenerico borderFormRounded preventivatore" role="form">
    <div class="form-group">
        <label id="btnGroupLabel" class="control-label">Bottoni selezione singola</label>
	    <div id="btnGroup1" class="hidden-xs btn-group btn-group-justified" role="group" aria-labelledby="btnGroupLabel">
		  <a href="#!" type="button" class="btn" role="button" data-value="0">Non Fumo</a>
		  <a href="#!" type="button" class="btn" role="button" data-value="20">Fino a 20 sigarette al giorno</a>
		  <a href="#!" type="button" class="btn" role="button" data-value="99">Pi&ugrave; di 20 sigarette al giorno</a>
		</div>
        <select name="fumatore" class="visible-xs form-control btn-group-select"></select>
	</div>
</form>
<script>
    var btnGroup1 = $('#btnGroup1').buttonGroup({
    	change: function (e, value) {
    		// Viene chiamata ogni volta che cambia il valore selezionato
    		console.log('change event value: ' + value);
    	}
    });

    // Metodi disponibili
    btnGroup1.buttonGroup('setValue', '99');
    console.log('getValue: ' + btnGroup1.buttonGroup('getValue'));
</script>
