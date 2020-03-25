<script type="text/javascript">	
	$(function () {
		$("#radioWrapper").find("input[type=radio]").removeAttr('checked');
		$("#btnInvio").click(function () {
			// Check giroconto
			var errors = [],
				testo1 = $("#testo1"),
				testo2 = $("#testo2"),
				select1 = $("#select1"),
				select2 = $("#select2");
				check1 = $("#check1");
				radioWrapper = $("#radioWrapper");
			if (testo1.val() === '') {
				errors.push({ field: testo1, text: "occorre inserire la localita'" });
			}
			if (testo2.val() === '') {
				errors.push({ field: testo2, text: "occorre inserire la citta'" });
			}
			if (select1.val() === '0') {
				errors.push({ field: select1, text: "occorre selezionare la provincia" });
			}
			if (select2.val() === '0') {
				errors.push({ field: select2, text: "occorre selezionare il CAP" });
			}
			if (!check1.is(':checked')) {
				errors.push({ field: check1, text: "lorem ipsum dolor" });
			}
			if (radioWrapper.find("input[type=radio]:checked").length === 0) {
				errors.push({field: radioWrapper, text: "devi selezionare radio button"});
			}
			setErrors(errors, "#formEsempio");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			return (!errors.length);
		});
	});
</script>

<p style="color:red">--- Cliccare sul pulsante per visualizzare l'errore! ---<br><br></p>

<div class="tithelp">
	<div class="helpleft">Titolo di form</div>
	<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
<br class="clear">
</div>
<br class="clear">
<div class="borderFormRounded">
	<div class="formGeneric">
		<form id="formEsempio">			
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row-fluid">
				<div class="span3">
					<label for="testo1" class="nomefield">Localit&agrave;</label>
					<input id="testo1" type="text">
				</div>
				<div class="span3">
					<label for="select1" class="nomefield">Provincia</label>
					<select id="select1"><option value="0">Seleziona</option><option value="1">lorem</option><option value="2">lorem</option></select>
				</div>
				<div class="span3">
					<label for="select2" class="nomefield">CAP</label>
					<select id="select2"><option value="0">Seleziona</option><option value="1">lorem</option><option value="2">lorem</option></select>
				</div>
				<div class="span3">
					<label for="testo2" class="nomefield">Citt&agrave;</label>
					<input id="testo2" type="text">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label for="check1"><input id="check1" type="checkbox">prova errore su checkbox</label>
				</div>
				<div id="radioWrapper" data-error="" class="span6">
					<div class="span12">
						<label for="radio1" class="span6" name="radioProva"><input id="radio1" type="radio">prova errore su radio</label>
						<label for="radio2" class="span6" name="radioProva"><input id="radio2" type="radio">prova errore su radio</label>
					</div>
				</div>
			</div>
		</form>
		<div class="btnc aButtoncons"><a id="btnInvio" href="javascript:;" class="aButton"><span>lorem ipsum</span></a></div>
	</div>
</div>
