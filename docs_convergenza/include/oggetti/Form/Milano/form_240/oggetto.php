<!-- REDDITO ANNUO -->
<form class="formGenerico borderFormRounded" role="form" id="form-note">
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 requiredField">
			<label class="control-label" id="lbredditoAnnuoAv_int1">Reddito annuo*</label>
			<select class="form-control select-note" id="redditoAnnuoAv_int1" name="redditoAnnuoAv_int1">
				<option selected="" value="-">seleziona</option>
				<option value="1|Fino a 10.000">Fino a 10.000</option>
				<option value="2|Da 10.001  a 25.000">Da 10.001  a 25.000</option>
				<option value="3|Da 25.001  a 40.000">Da 25.001  a 40.000</option>
				<option value="4|Da 40.001  a 75.000">Da 40.001  a 75.000</option>
				<option value="5|Da 75.001  a 500.000">Da 75.001  a 500.000</option>
				<option value="6|Da 500.001  a 2.500.000">Da 500.001  a 2.500.000</option>
				<option value="7|Oltre 2.500.000">Oltre 2.500.000</option>
				<option value="8|Privo di reddito/Altro">Privo di reddito/Altro</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label class="control-label" id="lbredditoAnnuoAv_note_int1">Note* (max 100 caratteri)</label>
			<textarea rows="2" maxlength="100" class="form-control field-note" id="redditoAnnuoAv_note_int1" name="redditoAnnuoAv_note_int1" disabled></textarea>
		</div>
    </div>
</div>

<!-- ORIGINE DEL REDDITO -->
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 requiredField">
			<label class="control-label" id="lborigineRedditoAv_note_int1">Origine del reddito*</label>
			<select class="form-control select-note" id="origineRedditoAv_int1" name="origineRedditoAv_int1">
					<option selected="" value="-">seleziona</option>
					<option value="1|Lavoro dipendente">Lavoro dipendente</option>
					<option value="2|Lavoro autonomo">Lavoro autonomo</option>
					<option value="3|Rendite immobiliari">Rendite immobiliari</option>
					<option value="4|Rendite fondiarie">Rendite fondiarie</option>
					<option value="5|Redditi finanziari">Redditi finanziari</option>
					<option value="6|Pensione">Pensione</option>
					<option value="7|Altro">Altro</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label class="control-label" id="lborigineRedditoAv_nota_int1">Note* (max 100 caratteri)</label>
			<textarea rows="2" maxlength="100" class="form-control field-note" id="origineRedditoAv_note_int1" name="origineRedditoAv_note_int1" disabled></textarea>
		</div>
	</div>
</div>

<!-- PATRIMONIO -->
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 requiredField">
			<label class="control-label" id="lbpatrimonioAv_int1">Patrimonio*	
				<a class="no-underline btn-icon">
					<i class="icon icon-info_fill marginLeft_10  icon-20 closeable" data-toggle="tooltip" data-title="Per “Patrimonio” si intende il complesso dei beni, mobili e immobili, che possiedi" data-original-title="" title=""></i>
				</a>
			</label>
			<select class="form-control select-note" id="patrimonioAv_int1" name="patrimonioAv_int1">
				<option selected="" value="-">seleziona</option>
				<option value="1|Fino a 100.000">Fino a 100.000</option>
				<option value="2|Da 100.001  a 300.000">Da 100.001  a 300.000</option>
				<option value="3|Da 300.001  a 1.000.000">Da 300.001  a 1.000.000</option>
				<option value="4|Da 1.000.001  a 3.000.000">Da 1.000.001  a 3.000.000</option>
				<option value="5|Da 3.000.001  a 10.000.000">Da 3.000.001  a 10.000.000</option>
				<option value="6|Oltre 10.000.000">Oltre 10.000.000</option>
				<option value="7|Privo di patrimonio/Altro">Privo di patrimonio/Altro</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label class="control-label" id="lbpatrimonioAv_note_int1">Note* (max 100 caratteri)</label>
			<textarea rows="2" maxlength="100" class="form-control field-note" id="patrimonioAv_note_int1" name="patrimonioAv_note_int1" disabled></textarea>
		</div>
	</div>
</div>
<!--ORIGINE DEL PATRIMONIO -->
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 requiredField">
			<label class="control-label" id="lboriginePatrimonioAv_int1">Origine del patrimonio*
				<a class="no-underline btn-icon">
					<i class="icon icon-info_fill marginLeft_10 icon-20 closeable" data-toggle="tooltip" data-title="Per “Origine del patrimonio“ si intende il capitale che impieghi sul conto corrente proveniente da fonti diverse dal reddito di lavoro (es. rendite immobiliari)." data-original-title="" title="">
					</i>
				</a>
			</label>
			<select class="form-control select-note" id="originePatrimonioAv_int1" name="originePatrimonioAv_int1">
				<option selected="" value="-">seleziona</option>
				<option value="1|Redditi di lavoro autonomo">Redditi di lavoro autonomo</option>
				<option value="2|Redditi di lavoro dipendente">Redditi di lavoro dipendente</option>
				<option value="3|Rendite fondiarie">Rendite fondiarie</option>
				<option value="4|Redditi finanziari">Redditi finanziari</option>
				<option value="5|Redditi d'impresa">Redditi d'impresa</option>
				<option value="6|Lascito\eredita'\donazione">Lascito\eredita'\donazione</option>
				<option value="7|Altro/redditi diversi (plusvalenze, premi, lotteri">Altro/redditi diversi (plusvalenze, premi, lotteri</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label class="control-label" id="lboriginePatrimonioAv_note_int1">Note* (max 100 caratteri)</label>
			<textarea rows="2" maxlength="100" class="form-control field-note" id="originePatrimonioAv_note_int1" name="originePatrimonioAv_note_int1" disabled></textarea>
		</div>
	</div>
</div>
<div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary" id="btnProsegui">lorem ipsum dolor</a>
		</div>
		<br class="clear">
</div>
</form>
<script type="text/javascript">	
/* FUNZIONE PER ABILITARE I CAMPI NOTE E APPENDERE LA CLASSE CHE LI IDENTIFICA COME OBBLIGATORI*/

var selectNote = $(".select-note");
	selectNote.on("change", function() {
		var valueSelected = $(this).find("option:selected").text(),
			fieldNote = $(this).closest(".form-group").find(".field-note");
			if(valueSelected.indexOf("Altro")!== -1) {
				fieldNote.attr("disabled",false);
				fieldNote.closest("div").addClass("requiredField")
			}
			else {
				fieldNote.attr("disabled",true);
				fieldNote.closest("div").removeClass("requiredField");
				fieldNote.val("");
				resetHasErrors(fieldNote.closest(".form-group"));
			}
	})
	/*FUNZIONE PER IMPEDIRE L'INSERIMENTO DI CARATTERI SPECIALI: CONSENTITE LETTERE/NUMERI/SPAZIO/ACCENTI */
	var ciRegexNote = /[a-zA-Z0-9/\s\u00C0-\u00F6\u00F8-\u00FF]+/,
		fieldNote = $(".field-note");
		fieldNote.on('keypress', function (event) {
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    		if (!ciRegexNote.test(key)) {
       		event.preventDefault();
       		return false;
    	}
		});
		fieldNote.on('paste', function (event) {
			return false;
		})
	
		
   /*FUNZIONE DI ESEMPIO PER LA GESTIONE ERRORI */
   $(function () {
	
         
	
		$("#btnProsegui").click(function () {
			
			var errors = [],
				errorNoteReddito = $("#redditoAnnuoAv_note_int1"),
				errorNoteOrigineReddito = $("#origineRedditoAv_note_int1"),
				errorNotePatrimonio = $("#patrimonioAv_note_int1"),
				errorNoteOriginePatrimonio = $("#originePatrimonioAv_note_int1");
			
			if (!errorNoteReddito.is(":disabled") && errorNoteReddito.val() === "") {
				
				errors.push({ field: errorNoteReddito, text: "È necessario compilare il campo note del Reddito annuo" });
			}
			if (!errorNoteOrigineReddito.is(":disabled") && errorNoteOrigineReddito.val() === "") {
				
				errors.push({ field: errorNoteOrigineReddito, text: "È necessario compilare il campo note dell’Origine del Reddito" });
			}
			if (!errorNotePatrimonio.is(":disabled") && errorNotePatrimonio.val() === "") {
				
				errors.push({ field: errorNotePatrimonio, text: "È necessario compilare il campo note del Patrimonio" });
			}
			if (!errorNoteOriginePatrimonio.is(":disabled") && errorNoteOriginePatrimonio.val() === "") {
				
				errors.push({ field: errorNoteOriginePatrimonio, text: "- È necessario compilare il campo note dell’Origine del patrimonio" });
			}
			setHasErrors(errors, "#form-note");
			if (errors.length) {
				
				$(errors[0].field).find('input').trigger('focus');
			}
			
			return (!errors.length);
		});

		
	});
</script>
