<!-- BOTTONI PER LA SELEZIONE DELI IMPORTI DI RICARICA-->
<div class="bs-example form-horizontal">
	<div class="row">
		<div class="form-field-resume col-xs-12 margin-bottom-xs-10">
			<div class="form-field gestore">
				<label class="imgLabel btn select-button" for="taglio1" description="11,00">11
					<input type="radio" name="taglioSel" value="1" id="taglio1" class="input_hidden" />
				</label>
				<label class="imgLabel btn select-button" for="taglio2" description="66,00">66
					<input type="radio" name="taglioSel" value="2" id="taglio2" class="input_hidden" />
				</label>
				<label class="imgLabel btn select-button" for="taglio3" description="88,00">88
					<input type="radio" name="taglioSel" value="3" id="taglio3" class="input_hidden" />
				</label>
				<label class="imgLabel btn select-button" for="taglio4" description="111,00">
					111
					<input type="radio" name="taglioSel" value="4" id="taglio4" class="input_hidden">
				</label>
				<label class="imgLabel btn select-button" for="taglio5" description="222,00">222
					<input type="radio" name="taglioSel" value="5" id="taglio5" class="input_hidden">
				</label>
				<label class="imgLabel btn select-button" for="taglio6" description="333,00">333
					<input type="radio" name="taglioSel" value="6" id="taglio6" class="input_hidden">
				</label>
				<label class="imgLabel btn select-button" for="taglio7" description="444,00">444
					<input type="radio" name="taglioSel" value="7" id="taglio7" class="input_hidden">
				</label>
				<label class="imgLabel btn select-button active" for="taglio8" description="555,00">555
					<input type="radio" name="taglioSel" value="8" id="taglio8" class="input_hidden" checked="checked">
				</label>
				<script type="text/javascript">
								$(document).ready(function(e) {
									$('.select-button').on('click', function(){
										selectTaglio($(this));
									});

									var selected = $('input[name="taglioSel"]:checked');
									if (selected.val()!=undefined && selected.val()!='') {
										selectTaglio($('#taglio'+selected.val()).parent());
									}
									
								});

								var selectTaglio = function (elementSelected) {
									$('.select-button.active', $(elementSelected).parent()).removeClass('active');
									$(elementSelected).addClass('active');
									var input = $(elementSelected).find("input");
									// tolgo a tutti i radio l'attribute checked
									$('input[name="taglioSel"]').removeAttr("checked");
									// aggiungo al radio l'attributo checked
									$(input).attr("checked", "checked");
									var valore = $(input).attr("id").substring(6);
									var testo = $(elementSelected).attr("description");
									$("#tagli").empty().text(testo);
								}
							</script>
						</div>
		</div>
	</div>
</div>
