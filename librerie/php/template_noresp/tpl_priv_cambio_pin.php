<!--esempio gestione errori -->
<script type="text/javascript">	
	$(function () {
		var nTentativi = 0;
		 //invio CAMBIO PIN
		$("#btnInvioPin").click(function () {
			// Check giroconto
			var errors = [],
				vecchioPin = $("#vecchioPin");
				nuovoPin = $("#nuovoPin");
				confermaNuovoPin = $("#confermaNuovoPin")
				
			// CASO CAMPO PIN VECCHIO VUOTO
			if (vecchioPin.val() === '') {
				errors.push({ field: vecchioPin, text: "Non hai digitato il vecchio Pin" });
				nTentativi ++;
				//IL NUMERO DEI TENTATIVI INDICATI E' PURAMENTE INDICATIVO!
				if(nTentativi>=3) {
					errors.push({ field: vecchioPin, text: "Hai raggiunto il numero massimo di tentativi per l'inserimento del vecchio Pin. Ti invitiamo a recarti in Agenzia per ricevere maggiori informazioni" });
				}
			}
			// CASO CAMPO PIN VECCHIO NON VALIDO - QUI CONTROLLO CHE NON SI UN NUMERO BISOGNA RISCONTRARE ANCHE ALTRI CASI DI NON VALIDITA'
			if (isNaN(vecchioPin.val())) {
				errors.push({ field: vecchioPin, text: "Vecchio Pin non valido, inserire solo caratteri numerici" });
				nTentativi ++;
				//IL NUMERO DEI TENTATIVI INDICATI E' PURAMENTE INDICATIVO!
				if(nTentativi>=3) {
					errors.push({ field: vecchioPin, text: "Hai raggiunto il numero massimo di tentativi per l'inserimento del vecchio Pin. Ti invitiamo a recarti in Agenzia per ricevere maggiori informazioni" });
				}
			}
			// CASO CAMPO VECCHIO PIN MINORE 4 NUMERI
			if (vecchioPin.val() != '' && vecchioPin.val().length<4) {
				errors.push({ field: vecchioPin, text: "Inserire 4 caratteri" });
				nTentativi ++;
				//IL NUMERO DEI TENTATIVI INDICATI E' PURAMENTE INDICATIVO!
				if(nTentativi>=3) {
					errors.push({ field: vecchioPin, text: "Hai raggiunto il numero massimo di tentativi per l'inserimento del vecchio Pin. Ti invitiamo a recarti in Agenzia per ricevere maggiori informazioni" });
				}
			}
			
			
			// CASO CAMPO PIN NUOVO VUOTO
			if (nuovoPin.val() === '') {
				errors.push({ field: nuovoPin, text: "Non hai digitato il nuovo Pin" });
			}
			
			// CASO CAMPO PIN NUOVO COMPOSTO DI CAMPI TUTTI UGUALI
			
			if (nuovoPin.val().length==4 && !isNaN(nuovoPin.val()) && (nuovoPin.val().charAt(0) == nuovoPin.val().charAt(1) == nuovoPin.val().charAt(2) == nuovoPin.val().charAt(3))) {
				errors.push({ field: nuovoPin, text: "In Pin non pu&ograve; contenere tutti caratteri uguali" });
			}
			// CASO CAMPO CONFERMA PIN NUOVO VUOTO
			if (confermaNuovoPin.val() === '') {
				errors.push({ field: confermaNuovoPin, text: "Non hai confermato il nuovo Pin" });
			}
		    // CASO CAMPO PIN NUOVO VUOTO E CONFERMA PIN NUOVO NON CORRISPONDENTI
			if (nuovoPin.val() != confermaNuovoPin.val()) {
				errors.push({ field: confermaNuovoPin, text: "Il nuovo Pin e il Pin di conferma risultano diversi" });
			}

		   setErrors(errors, "#formCambioPin");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			// se non ci sono errori compare il box sottostante
			else {
			  $('#cambioPinStep2').fadeIn();
			  $('#btnInvioPin').fadeOut();
			  //disabilitazione campi form
			  var formToDisableInput = $('#formCambioPin').find('input');
			  formToDisableInput.prop("disabled", true);
			}
			return (!errors.length);
		});
	    //invio OTP
		$("#btnInvioOTPcambioPin").click(function () {
			var errors = [],
				otpInput = $("#otpInput");
			if (otpInput.val() === '') {
				errors.push({ field: otpInput, text: "Non hai digitato il codice di controllo" });
			}
			// costruire anche errore per codice di controllo NON CORRETTO
			setErrors(errors, "#formOTPcambioPin");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			// se non ci sono errori compare il box sottostante
			else {
			  $('#cambioPinStep2').hide();
			  $('#esitoOkCambioPin').fadeIn()
			}
			return (!errors.length);
		});
	
	});
</script>

<h1>INFO E GESTIONE CARTA</h1>
<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tr>
			<td class="off first"><a title="Lorem ipsum" href="#1">scheda prodotto</a></td>
			<td class="off"><a title="Lorem ipsum lorem" href="#1">saldo e movimenti</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">profilo<br>internazionale</a></td>
			<td class="off"><a title="Lorem ipsum" href="#1">Mastercard<br>Securcode</a></td>
			<td class="on"><a title="Lorem ipsum" href="#1">cambio pin</a></td>												
			<td class="end">&nbsp;</td>
			
		</tr>
	</table>
</div>
<p>Puoi <strong>cambiare</strong> il Pin della tua carta. Digita il vecchio Pin, scegline uno nuovo e confermalo. Tieni a portata di mano il <span class="txthelp" data-tooltip="A breve invieremo al tuo numero un sms contenente il codice OTP da inserire nel sistema">tuo cellulare</span> </p>
<p><strong>regole</strong> per la composizione del Pin:</p>
<ul class="margTopSmall">
	<li>lunghezza massima 5 caratteri</li>
	<li>deve contenere solo numeri</li>
	<li>non deve contenere caratteri grafici (es.:-?&*) o lettere</li>
</ul>
<div class="formCenteredheader">
	<div class="tithelp">
		<div class="helpleft">CAMBIO PIN</div>
		<br class="clear">
	</div>
</div>
<!-- FORM DI MODIFICA PIN-->
<div class="formCenteredwrapper">
	<form id="formCambioPin" class="formGeneric formCentered" autocomplete="off">
		<div class="row-fluid">
			<div class="span12">
				<label class="nomefield">Vecchio Pin:</label>
				<input id="vecchioPin" type="password" maxlength="4">
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label class="nomefield">Nuovo Pin:</label>
				<input id="nuovoPin" type="password" maxlength="4">
			</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<label class="nomefield">Conferma nuovo Pin:</label>
				<input id="confermaNuovoPin" type="password" maxlength="4">
			</div>
		</div>
	</form>
	<div id="btnInvioPin" class="aButtoncons"><a href="javascript:;" class="aButton"><span>prosegui</span></a></div>
</div>
<br>
<!-- FORM DI INSERIMENTO OTP-->
<div id="cambioPinStep2" style="display:none">
	<div class="formCenteredheader">
		<span>Inserisci il codice di controllo che hai ricevuto via sms al n. 3285***</span>
	</div>
	<div class="formCenteredwrapper">
		<form id="formOTPcambioPin" class="formGeneric formCentered" autocomplete="off">
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Codice di controllo:</label>
					<input id="otpInput" type="text" maxlength="5">
				</div>
			</div>
		</form>
		<div id="btnInvioOTPcambioPin" class="aButtoncons"><a href="javascript:;" class="aButton"><span>conferma</span></a></div>
	</div>
</div>

<div class="boxesito positivo" id="esitoOkCambioPin" style="display:none">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p><strong>Il Pin &egrave; stato modificato correttamente</strong><br>
					La variazione del Pin ha effetto dal primo prelievo eseguito presso qualsiasi ATM del gruppo BPM e del network Multibanca
				</div>
			</div>
		</div>
	</div>
</div>

