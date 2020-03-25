<!-- FORM TELEFONO -->
<div class="formGeneric">
	<form autocomplete="off">
		<fieldset>
			<div class="fieldWrap" style="width:30%">
				<label>Prefisso int.:</label>
				<input type="text" placeholder="++0039" maxlength="7">
			</div>
			<div class="fieldWrap" style="width:20%">
				<label>Prefisso:</label>
				<input type="text" placeholder="" maxlength="3">
			</div>
			<div class="fieldWrap" style="width:49%">
				<label>Numero di cellulare:</label>
				<input type="text" placeholder="" maxlength="16">
			</div>
		</fieldset>
		<fieldset>
			<label>Operatore:</label>
			<select>
				<option value="-">-- Seleziona operatore --</option>
			</select>
		</fieldset>
		<fieldset id="smsCode" style="display:none">
			<label>Inserisci il codice di controllo che ti abbiamo inviato via SMS al numero che hai indicato:</label>
			<input type="text" placeholder="Scrivi qui il codice che ti abbiamo inviato" maxlength="16">
			<span class="text">Non hai ricevuto il codice? <a href="#">Chiedine un altro</a></span>
		</fieldset>
	</form>
</div>
<div class="aButtoncons">
	<a class="aButton" onclick="$('#smsCode').show();$('#smsCert').css('display','');$(this).hide()"><span>Conferma</span></a>
	<a class="aButton" id="smsCert" style="display:none"><span>Certifica</span></a>
</div>
<!-- / FORM TELEFONO -->