<h1>LOREM IPSUM</h1>
<br class="clear"><br>
<div class="borderFormRounded">
	<div class="formGeneric">
		<form>
			<div class="row">
				<div class="col-sm-3">
					<label class="nomefield">CONTO CC</label>
					<span class="output">XXXXXXXXXXXXXXXXX</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">SALDO</label>
					<span class="output">10.000,45&euro;</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">RESIDUO MENSILE</label>
					<span class="output">1.000,45&euro;</span>
				</div>
				<div class="col-sm-3">
					<label class="nomefield">RESIDUO GIORNALIERO</label>
					<span class="output">1.000,45&euro;</span>
				</div>
			</div>
		</form>
	</div>
</div>
<br class="clear"><br>
<div class="tithelp">
	<div class="helpleft">Dati del pagamento</div>
	<br class="clear">
</div>
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form id="form01">
				<!--RIGA DIVISA IN DUE CAMPI -->
				<div class="row" id="siRubb">
					<div class="col-sm-6">
						<label class="nomefield">Telefono beneficiario</label>
						<input type="text" id="numeroTelAutocomplete">
						<script type="text/javascript">
							var arrayNumeriTelefono = ['+34520232323','+34720232323','+34857834798','+33357834798']
							$("#numeroTelAutocomplete").autoComplete(arrayNumeriTelefono, {
								selectable: true,
								clearable: false,
								filter: 'function'
							});
							
						</script>
					</div>
					<!--<div class="col-sm-6">
						<label class="nomefield"> &nbsp;</label>
						<span class="output">
							<a href="javascript:;" onclick="$('#siRubb').hide();$('#noRubb').show();">inserisci nuovo beneficiario</a>
						</span>
					</div>-->
					<div class="col-sm-6">
						<label class="nomefield">Importo</label>
						<input type="text">
					</div>
				</div>
				<!--<div id="noRubb" style="display:none">
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">Nome beneficiario</label>
							<input type="text">
						</div>
						<div class="col-sm-6">
							<label class="nomefield"> &nbsp;</label>
							<span class="output">
								<a href="javascript:;" onclick="$('#siRubb').show();$('#noRubb').hide();">aggiungi da rubrica</a>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">Telefono beneficiario</label>
							<input type="text">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label class="nomefield">&nbsp;</label>
							<label class="output">
								<input type="checkbox" id="checkBenef">&nbsp; inserisci beneficiario in rubrica
							</label>
						</div>
					</div>
				</div>-->
				<div class="row">
					<div class="col-sm-6">
						<label class="nomefield">Causale</label>
						<textarea style="width:100%"></textarea>
					</div>
				</div>
			</form>
			
		</div>
	</div><br class="clear"><br>
<div class="fooform">		
	<div class="fooformtop">Step <strong>1</strong> di 3</div>
	<div class="fooformright"><div><a href="javascript:vai('INVIA1')" class="btnformright" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
</div>