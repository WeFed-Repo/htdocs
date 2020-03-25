<form class="formGenerico borderFormRounded" role="form" id="form01">
    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <label class="control-label">Spinner</label>
                <input id="spinnerTest" type="text" name="spinnerId" class="form-control spinner">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <label class="control-label">Valore</label>
                <span class="output" id="spinnerVal"></span>
            </div>
        </div>
    </div>
</form>
<script>
/* GESTIONE SPINNER
	    options.idInput = elemento da spinnare
	    options.step =  quanto deve aumentare e diminuire
	    options.min =  limite minimo
	    options.max =  limite massimo
	    options.culture = paese di riferimento,
	    options.numberFormat = formato numerico,
	    options.spin = funzione che parte allo spin
	 */
setSpinner({
    idInput: '#spinnerTest',
    step: 10,
    min: 0,
    max: 100,
    spin: function(event, ui) {
        $('#spinnerVal').html(ui.value);
    }
});
</script>

