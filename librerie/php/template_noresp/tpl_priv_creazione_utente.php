<script type="text/javascript">	
	$(function () {
				$("#datepickerUtente").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#datepickerUtente").mask("99-99-9999");
			});
	
</script>
<!--gestion errore front-end solo eseplificativa, non contempla i reali casi d'errore-->
<script type="text/javascript">	
	$(function () {
		$("#demoSetErrorBtn").click(function (event) {
			// Check giroconto
			var errors = [],
				nomeUtentetext = $("#nomeUtenteId"),
				statoIdText = $("#statoId"),
				passwordIdText = $("#passwordId"),
				confermaPasswordIdText = $("#confermaPasswordId"),
				profiloIdText = $("#profiloId"),
				datepickerUtenteText = $('#datepickerUtente'),
				noScadenzaText = $('#noScadenza'),
				nomeText = $('#nomeId'),
				cognomeText = $('#cognomeId')
				
			if (nomeUtentetext.val() === '') {
				errors.push({ field: nomeUtentetext, text: "Verifica" });
			}
			if (passwordIdText.val() === '') {
				errors.push({field: passwordIdText, text: "lorem ispum"});
			}
			if (confermaPasswordIdText.val()!== passwordIdText.val()) {
				errors.push({field: confermaPasswordIdText, text: "le password non corrisondono"});
			}
			if (confermaPasswordIdText.val()=== '' ) {
				errors.push({field: confermaPasswordIdText, text: "lorem ipsum"})
			}
			if (profiloIdText.val()=== 'seleziona' ) {
				errors.push({field: profiloIdText, text: "lorem ipsum"})
			}
			if (datepickerUtenteText.val()=== '' && !noScadenzaText.is(':checked')) {
				errors.push({field: datepickerUtenteText.closest('.row-fluid'), text: "lorem ipsum"})
			}
			if (nomeText.val() === '') {
				errors.push({ field: nomeText, text: "lorem ipsum" });
			}
			if (cognomeText.val() === '') {
				errors.push({ field: cognomeText, text: "lorem ipsum" });
			}
			setErrors(errors, "#formCreaUtente");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
				event.preventDefault();
			}

			return (!errors.length);
		});
	});
</script>


<h1>AGGIUNGI UTENTE</h1>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies mi nec nunc cursus et hendrerit urna mollis. Sed commodo gravida erat, non elementum mi eleifend ut. Fusce vehicula magna eget felis iaculis egestas. Nam dapibus sollicitudin volutpat.</p>
<div class="tithelp">
	<div class="helpleft paddTopMedium paddBottomMedium">Lorem ipsum</div>
	<!--<span class="expleft"><a href="javascript:;" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_bus_guida.php');" title=""><br>Guida allo step 1</a></span>-->
</div>
<br class="clear">
<div class="borderFormRounded">
<form class="formGeneric" autocomplete="off" id="formCreaUtente">
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Codice utente*(massimo 8 caratteri)</label>
				<input type="text" maxlength="8" id="nomeUtenteId">
			</div>
			<div class="span6">
				<label class="nomefield">Scadenza*</label>
				<div class="row-fluid" data-error="">
					<div class="span6"><input type="text" class="withIco" id="datepickerUtente" placeholder="" value=""></div>
					<div class="span6"><label><input type="checkbox" id="noScadenza">Nessuna scadenza</label></div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Password(massimo 8 caratteri)</label>
				<input type="password" maxlength="8" id="passwordId">
			</div>
			<div class="span6">
				<label class="nomefield">Conferma password*</label>
				<input type="password" maxlength="8" id="confermaPasswordId">
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Descrizione utente</label>
				<input type ="text" id="descrizioneId">
			</div>
			<div class="span6">
				<label class="nomefield">Profilo*</label>
				<select id="profiloId"><option>seleziona</option><option>opzione lorem</option></select>
				<!--
				<label class="nomefield">Stato</label>
				<div id="statoId" data-error="">
					<div class="row-fluid noMargbottom">
						<div class="span4">
							<label>
								<input type="radio" name="stato" value="">attivo
							</label>
						</div>
						<div class="span4">
							<label>
								<input type="radio" name="stato" value="">bloccato
							</label>
						</div>
					</div>
				</div>-->
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Email</label>
				<input type="text" id="emailId">
			</div>

			<div class="span6">
				<label class="nomefield">Nome*</label>
				<input type="text" id="nomeId">
			</div>
			
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label class="nomefield">Cognome*</label>
				<input type="text" id="cognomeId">
			</div>
		</div>
</form>
</div>
<br class="clear">
<div class="tithelp paddTopLarge">
	<div class="helpleft paddRightMedium noMargtop">Associare TOKEN</div><a href="#1" data-tooltip="per associare seleziona si" class="paddTopSmall"><img alt="help" src="/img/ret/ico2or_help2.gif"></a>
	<label><input type="radio" name="tokenAss" value="si" checked onclick="$('#tokenBox').show();">Si</label>
	<label><input type="radio" name="tokenAss" value="no" onclick="$('#tokenBox').hide();">No</label>
</div>
<div id="tokenBox">
<br class="clear">
	<div class="borderFormRounded">
		<form class="formGeneric" autocomplete="off" id="">
			<p>Stai per associare il TOKEN a questo utente:</p>
				<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Codice fiscale</label>
					<input type="text" maxlength="" id="">
				</div>
			</div>
		</form>
	</div>

</div>
<br class="clear"><br>
<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 2</div>
	<div class="fooformleft">
		<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/bus/btn_left_bi.gif" alt=""><span>lorem ipsum</span><img src="/img/bus/btn_right_bi.gif" alt=""></a></div>	
	</div>
	<div class="fooformright">
		<div><a href="connect.php?page=str_priv_bus_int.php&amp;tpl=tpl_priv_creazione_utente_riepilogo.php" class="btnformright" title="lorem ipsum" id="demoSetErrorBtn"><img src="/img/bus/btn_left_ar.gif" alt=""><span>lorem ipsum</span><img src="/img/bus/btn_right_ar.gif" alt=""></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>
