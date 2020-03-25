<script type="text/javascript">	
	$(function () {
		$("#radioWrapper").find("input[type=radio]").removeAttr('checked');
		$("#btnInvio").click(function (event) {
			// Check giroconto
			var errors = [],
				campo1 = $("#campo1"),
				campo2 = $("#campo2");
				campo3 = $("#campo3");
				campo4 = $("#campo4");
				campo5 = $("#campo5");
			if (campo1.val() === '') {
				errors.push({ field: campo1, text: "occorre inserire la via" });
			}
			if (campo2.val() === '') {
				errors.push({ field: campo2, text: "occorre inserire il CAP" });
			}
			if (campo3.val() === '') {
				errors.push({ field: campo3, text: "occorre inserire la provincia" });
			}
			if (campo4.val() === '') {
				errors.push({ field: campo4, text: "occorre inserire il comune" });
			}
			if (campo5.val() === '') {
				errors.push({ field: campo5, text: "occorre inserire la localit&agrave;" });
			}
			setHasErrors(errors, "#formResidenza");
			
			if (errors.length) {
				$(errors[0].field).trigger('focus');
				event.preventDefault();
			}
			
		});
	});
</script>

<h2>Residenza</h2>
<section>
<div class="boxesitoWrap" style="display:none" id="boxesitoServizio">
	<div class="boxesito negativo">
		<i class="icon icon-alert_error icon-2x"></i >
			<div class="text">
				<div class="row">
					<div class="col-sm-12">
					<h4>Attenzione</h4>			
			<p>Modificare almeno un campo per proseguire nella variazione dei dati anagrafici</p>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
<section>
	<h4>Indirizzo di residenza</h4>
	<form class="formGenerico borderFormRounded" role="form" id="formResidenza">
	    <div class="form-group">
	        <div class="row">
	            <div class="col-sm-12 requiredField">
	            	<label class="control-label">Via*</label>
	            	<input type="text" name="" class="form-control clear-x" value="VIA MARCONI 32" id="campo1">
	            </div>
	        </div>
	    </div>
	   <div class="form-group">
	        <div class="row">
				<div class="col-sm-3 requiredField">
					<label class="control-label">Provincia*</label>
					<select name="" class="form-control" id="campo3">
						<option></option>
						<option>BO</option>
						<option>MN</option>
						<option selected>SO</option>
					</select>
				</div>
				
				<div class="col-sm-6 requiredField">
					<label class="control-label">Comune*</label>
					<input type="text" name="" class="form-control clear-x" value="Sondrio" id="campo4">
				</div>
				
				<div class="col-sm-3 requiredField">
					<label class="control-label">Cap*</label>
					<input type="text" name="" class="form-control clear-x" value="23100" id="campo2">
				</div>
			</div>
	    </div>
	</form>
</section>

<section>
	<h4>Indirizzo di corrispondenza (compilare se differente da indirizzo di residenza)</h4>
	<form class="formGenerico borderFormRounded" role="form" id="formCorrispondenza">
	    <div class="form-group">
	        <div class="row">
	            <div class="col-sm-6 requiredField">
	            	<label class="control-label">Intestazione* (puoi inserire qui un presso)</label>
	            	<input type="text" name="" class="form-control clear-x" value="Nome Cognome c/o ufficio" id="">
	            </div>
	            <div class="col-sm-6">
	            	<label class="control-label">Via*</label>
	            	<input type="text" name="" class="form-control clear-x" value="VIA MARCONI 32" id="campo7">
	            </div>
	        </div>
	    </div>    
		<div class="form-group">
	        <div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-6 requiredField">
							<label class="control-label">Cap*</label>
							<input type="text" name="" class="form-control clear-x" value="23100">
						</div>
						<div class="col-xs-6 requiredField">
							<label class="control-label">Provincia*</label>
							<select name="" class="form-control">
								<option></option>
								<option>BO</option>
								<option>MN</option>
								<option selected>SO</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-6 requiredField">
					<label class="control-label">Comune*</label>
					<input type="text" name="" class="form-control clear-x" value="Sondrio">
				</div>
	        </div>
	    </div>
		</form>
	<div class="btnWrapper">
	    <div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="btnInvio" href="#1" onclick="if( $('#boxesitoServizio').css('display')== 'none' ) {$('#boxesitoServizio').css('display','block');} else {window.location.href='/connect.php?page=strutt_priv.php&tpl=tpl_responsive_modifica_residenza_output_1_new.php&liv0=0&liv1=0&liv2=0&liv3=0&responsive=y';}">prosegui</a>
	        <!--a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_modifica_residenza_output_1_new.php&liv0=0&liv1=0&liv2=0&liv3=0&responsive=y">prosegui</a-->
	    </div>
	    <br class="clear">
	</div>
</section>

<hr/>

<section>
	<p class="note">I dati inseriti saranno immessi nella banca dati elettronica dell'azienda nel rispetto della legge 196/03 sulla tutela dei dati personali.</p>
	<p class="note">* I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
</section>
