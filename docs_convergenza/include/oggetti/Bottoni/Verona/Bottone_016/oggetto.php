<!-- BOTTONI PER LA SELEZIONE DELI IMPORTI DI RICARICA-->
<div class="bs-example form-horizontal">
	<div class="row">
		<div class="form-field-resume col-xs-12 margin-bottom-xs-10">
			<div class="form-field select-don">
				<label class="imgLabel btn select-button active" for="don1" description="10,00">
					<span class="text-align-center" > 10 </span>
					<input type="radio" name="donSel" value="1" id="don1" class="input_hidden" />
				</label>
				<label class="imgLabel btn select-button" for="don2" description="25,00">
				<span class="text-align-center" > 25 </span>
					<input type="radio" name="donSel" value="2" id="don2" class="input_hidden" />
				</label>
				<label class="imgLabel btn select-button" for="don3" description="50,00">
				<span class="text-align-center" > 50 </span>
					<input type="radio" name="donSel" value="3" id="don3" class="input_hidden" />
				</label>
				<label class="select-button" for="don4" description="Altro importo..">
					<div class="outline"><input type="text" name="donSel" value="" id="don4" class="form-control" placeholder="Altro importo.."></div>
					<span style="visibility: hidden">Donazione minima 1 &euro;</span>
				</label>
				<span>EUR</span>
				<script type="text/javascript">
								$(document).ready(function(e) {
									$('.select-button').on('click', function(){
										
										selectTaglio2($(this));
										$(this).find('span').css('visibility','visible');
									});

									var selected = $('input[name="donSel"]:checked');
									if (selected.val()!=undefined && selected.val()!='') {
										selectTaglio2($('#don'+selected.val()).parent());
									}
									$(this).on('focus', function(event){
										$(this).closest('label').append('<span>Donazione minima 1 &euro;</span>')
									})
								});

								var selectTaglio2 = function (elementSelected) {
									
									$('.select-button.active', $(elementSelected).parent()).removeClass('active');
									console.log(elementSelected);
									$(elementSelected).addClass('active');
									var input = $(elementSelected).find("input");
									// tolgo a tutti i radio l'attribute checked
									$('input[name="donSel"]').removeAttr("checked");
									// aggiungo al radio l'attributo checked
									$(input).attr("checked", "checked");
									var valore = $(input).attr("id").substring(6);
									var inputText = $(elementSelected).find("input[type='text']");
									inputText.each(function() {
									
									
									$(this).on('keyup', function(event){
										$(this).closest('label').attr('description',$(this).val());
									})
									}) 
									var testo = $(elementSelected).attr("description");
									$("#tagli").empty().text(testo);
								}
							</script>
						</div>
		</div>
	</div>
</div>
