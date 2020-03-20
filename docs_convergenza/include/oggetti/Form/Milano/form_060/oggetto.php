<script type="text/javascript">	
	$(function () {
		$("#radioWrapper").find("input[type=radio]").removeAttr('checked');
		$("#btnInvio").click(function () {
			// Check giroconto
			var errors = [],
				testo1 = $("#testo1"),
				testo2 = $("#testo2"),
				select1 = $("#select1"),
				select2 = $("#select2"),
				check1 = $("#check1"),
				radioWrapper = $("#radioWrapper");
				
				radioWrapper = $("#radioWrapper");
			if (testo1.val() === '') {
				errors.push({ field: testo1, text: "occorre inserire l'importo" });
			}
			if (select1.val() === '0') {
				errors.push({ field: select1, text: "occorre selezionare la provincia" });
			}
			if (select2.val() === '0') {
				errors.push({ field: select2, text: "occorre selezionare il CAP" });
			}

			if (testo2.val() === '') {
				errors.push({ field: testo2, text: "occorre inserire la citt&agrave;" });
			}
			if (!check1.is(':checked')) {
				errors.push({ field: check1, text: "occorre selezionare la voce" });
			}
			if (radioWrapper.find("input[type=radio]:checked").length === 0) {
				errors.push({field: radioWrapper, text: "occorre selezionare il radio button"});
			}
			setHasErrors(errors, "#form10");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			return (!errors.length);
		});
	});
</script>


<p style="color:red">--- Cliccare sul pulsante per visualizzare l'errore! ---<br><br></p>

<div class="tithelp">
	<h4>Titolo di form</h4>
	<div class="flRight"><a href="#1" class="btn-icon"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
	<br class="clear">
</div>
<form class="formGenerico borderFormRounded" role="form" id="form10">
	<div class="form-group">	
		<!--RIGA DIVISA IN QUATTRO CAMPI -->
		<div class="row">
			<div class="col-sm-3 requiredField">
				<label class="control-label">Località</label>
				<input id="testo1" type="text"  class="form-control clear-x">
			</div>
			<div class="col-sm-3 requiredField">
				<label  class="control-label">Provincia</label>
				<select id="select1" class="form-control"><option value="0">Seleziona</option><option value="1">lorem</option><option value="2">lorem</option></select>
			</div>
			<div class="col-sm-3 requiredField">
				<label  class="control-label">CAP</label>
				<select id="select2" class="form-control"><option value="0">Seleziona</option><option value="1">lorem</option><option value="2">lorem</option></select>
			</div>
			<div class="col-sm-3 requiredField">
				<label class="control-label">Città</label>
				<input id="testo2" type="text" class="form-control clear-x">
			</div>
		</div>
	</div>		
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6 requiredField">
				<div class="checkbox inline">
					<label class="textWrapper">
	 					  <input type="checkbox" name="" id="check1">
	  					  <span class="text">prova errore su checkbox</span>
					</label>
				</div>
			</div>
			<div class="col-sm-6 requiredField">
				<div class="row">
					<div id="radioWrapper">
					<div class="col-xs-6 col-sm-6">
						<div class="radio inline">
		   					 <label class="textWrapper">
			         			<input type="radio" name="" id="">
			          			<span class="text">Lorem ipsum dolor sit amet</span>
			        		</label>
		     			</div>
	     			</div>
	     			<div class="col-xs-6 col-sm-6">
						<div class="radio inline">
		   					 <label class="textWrapper">
			         			<input type="radio" name="" id="">
			          			<span class="text">Lorem ipsum dolor sit amet</span>
			        		</label>
		     			</div>
	     			</div>
	     			</div>
	     		</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="btn-align-center">
			<a type="button" class="btn btn-primary" id="btnInvio">lorem</a>
			<br class="clear">
		</div>
	</div>	
</form>