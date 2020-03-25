<h1>CBILL</h1>
<!-- Blocco tab -->
<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tr>
			<td class="on first"><a title="Nuovo bollettino" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_cbill_nuovo.php">Nuovo<br>bollettino</a></td>
			<td class="off"><a title="Bollettini pagati" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_cbill_pagati.php">Bollettini<br>pagati</a></td>
			<td class="end"></td>
		</tr>
	</table>
</div>
<!-- Fine blocco tab -->
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

<!-- FORM -->

<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">
$(function () {
	// INIZIALIZZAZIONI DEI CAMPI INTERATTIVI
	
	// Autocomplete - Rimuovere se non implementabile
	$("#campoAutocomplete").autoComplete(["Enel Energia","Aemcom","Lineapiu"])
	
	
	// Datepicker
	$("#dataScadenza").datepicker({
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
$("#dataScadenza").mask("99/99/9999");
});
</script>

<div class="tithelp">
	<div class="helpleft">Dati di addebito</div>
<br class="clear">
</div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Conto corrente</label>
					<select class="withIco">
						<option>lorem</option>
						<option>lorem</option>
					</select>
					<a href="#" title="Lorem ipsum" class="flRight"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"></a>
				</div>
				<div class="span6">
					<label class="nomefield">Saldo disponibile al 10/10/2015</label>
					<span class="output"><a href="#">123.456.789 &euro;</a></span>
				</div>
			</div>
	</div>
</div>

<!-- FORM -->
<div class="tithelp">
	<div class="helpleft">Dati bollettino</div>
	<br class="clear">
</div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico">Codice bollettino *</label><span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet consectetur"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
					<input type="text">
				</div>
				<div class="span6">
					<!-- Campo con autocompletamento -->
					<!-- Nel caso non fosse possibile, utilizzare invece di tutto il div con class "autoComp" un semplice INPUT -->
					<div class="autoComp">
						<label class="nomefield ico">ID biller / codice SIA azienda *</label><span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet consectetur"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
						<input type="text" id="campoAutocomplete">
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Importo *</label>
							<div class="row-fluid">
								<div class="span10">
									<input type="text">
								</div>
								<div class="span2">
									<span class="output">&nbsp;<strong>&euro;</strong></span>
								</div>
							</div>
						</div>
						<div class="span6">
							<label class="nomefield">Data di scadenza</label>
							<input type="text" class="withIco" id="dataScadenza" placeholder="gg/mm/aaaa">
							</div>
						</div>
				</div>
			</div>
	</div>
</div>
<!-- Pulsanti e step -->
<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 2</div>
	<div class="fooformright">
		<div><a href="javascript:;" id="pControlli" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
		<br class="clear">
	</div>	
</div>
<p class="note">Icampi contrassegnati con asterisco (*) sono obbligatori</p>
