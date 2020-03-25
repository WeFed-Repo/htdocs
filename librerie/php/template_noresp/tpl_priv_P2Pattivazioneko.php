<h1>LOREM IPSPUM</h1>
<p>l funzione P2P vi permette di effettuare dei pagamenti in tempo reale con vostri amici</p>
<div class="tithelp">
	<div class="helpleft">Lorem ispum</div>
</div>
<br class="clear"><br>
<!--CASO ERRORE -->
<div id="attivazioneWrapper" class="wrapperMessageLayer">
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form id="form01">
				<!--RIGA DIVISA IN DUE CAMPI -->
				<div class="row">
					<div class="col-sm-6">
						<label class="nomefield">Conto Corrente</label>
						<select  id="errore1">
							<option>lorem</option>
							<option>lorem</option>
						</select>
					</div>
					<div class="col-sm-6">
						<label class="nomefield">Numero di telefono</label>
						<span class="output">+391234566</span>
					</div>
				</div>
				
			</form>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>prosegui</span></a></span>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">	
	$(function () {
		$("#demoSetErrorBtn").click(function () {
			// Check giroconto
			var errors = [],
				errore1 = $("#errore1");
				errors.push({ field: errore1, text: "lorem ispum'" });
			setErrors(errors, "#form01");
			return (!errors.length);
		});
	});
</script>
<!--CASO ESITO POSITIVO-->


