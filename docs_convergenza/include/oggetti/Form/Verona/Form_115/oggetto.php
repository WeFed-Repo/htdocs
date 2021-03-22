
<p><a href="javascript:;" id="setLoadingLink">Applica classe loading e visualizza messaggio</a></p>
<p id="msgLoading" class="txt-loading">Messaggio in attesa di loading</p>
<form id="wrapperToLoad">
	<div class="row">
		<div class="form-field-input col-xs-12">
			<label class="control-label" for="">lorem ispum</label>
			<input type="text" name="note" maxlength="50" size="55" value="Opzionale"  class="form-control placeh clear-x">
		</div>
    </div>
	<div class="row">
		<div class="form-field-input col-xs-12">
			<label class="control-label" for="">lorem ispum</label>
			<select name="note" class="form-control"><option>lorm ipsum</option><option>lorm ipsum</option></select>
		</div>
    </div> 
	<div class="row">
		<div class="form-field-input col-xs-12">
			<label class="control-label" for="">lorem ispum</label>
			<input type="text" name="note" maxlength="50" size="55" value="Opzionale"  class="form-control placeh clear-x">
		</div>
    </div>
	<div class="row">
		<div class="form-field-input col-xs-12">
			<label class="control-label" for="">lorem ispum</label>
			<input type="text" name="note" maxlength="50" size="55" value="Opzionale"  class="form-control placeh clear-x">
		</div>
    </div>
	
</form>

<script>
    //passare come parametri l'id del wrapper da coprire e l'id del testo da visualizzare
	$('#setLoadingLink').on('click', function() {
		setLoadingOnObject('wrapperToLoad','msgLoading','loading-top');
		//emulo l'unset
		setTimeout( function() {unsetLoadingOnObject('wrapperToLoad','msgLoading','loading-top');}, 20000);
	})
</script>




<div id="base"><!-- Footer (Group) -->
<div class="ax_default" id="u5521" data-height="44" data-width="134" data-top="498" data-left="175" data-label="Footer"><!-- Unnamed (Rectangle) -->
<div class="ax_default button_-_secondary_" id="u5522">
<div tabindex="0" id="u5522_div">Non &egrave; possibile proseguire con la revoca della linea di trading in quanto <strong>su questa linea risultano attive delle deleghe</strong> (sei stato delegato ad operare o hai delegato qualcuno altro).<br /><br /></div>
</div>
</div>
</div>
<div class="ax_default paragraph_-_desktop" id="u5523">
<div class="text " id="u5523_text">
<p>Per poter proseguire dovrai prima revocare suddette deleghe: questa operazione <strong>pu&ograve; essere effettuata solo in filiale e in presenza di tutte le persone coinvolte. Accertati della loro disponibilit&agrave; prima di prendere l'appuntamento in filiale.</strong></p>
<a class="link-text text-underline noMargin" onclick="javascript:goToPage('/serviziPerTe/richiestaAppuntamentoCompilazione.do');">Prendi appuntamento</a>
</div>
</div>
<p style="text-align: right;"></p>
<section>
<div class="pull-left btnWrapper">
	<input name="homepage" value="OK, ho capito" onclick="javascript:goToPage('/homepage.do');" class="btn btn-primary noMargin" type="button" /></div>
</section>
<section></section>