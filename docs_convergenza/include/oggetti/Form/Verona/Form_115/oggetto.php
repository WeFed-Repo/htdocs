
<p><a href="javascript:;" id="setLoadingLink">Applica classe loading e visualizza messaggio</a></p>
<p id="msgLoading" class="txt-loading">Messaggio in attesa di loading</p>
<form id="wrapperToLoad">
	<div class="row">
		<div class="form-field-input col-xs-12">
			<label class="control-label" for="">lorem ispum</label>
			<input type="text" name="note" maxlength="50" size="55" value="Opzionale" id="note" class="form-control placeh clear-x">
		</div>
    </div>
</form>

<script>
    //passare come parametri l'id del wrapper da coprire e l'id del testo da visualizzare
	$('#setLoadingLink').on('click', function() {
		setLoadingOnObject('wrapperToLoad','msgLoading');
		//emulo l'unset
		setTimeout( function() {unsetLoadingOnObject('wrapperToLoad','msgLoading');}, 2000);
	})
</script>