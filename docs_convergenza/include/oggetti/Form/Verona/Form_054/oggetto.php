<section>
	<form id="familySafe" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
		<input type="hidden" name="codContoCorrente" value="001|0898|089800349214" />


		<script>
			function inizializzaFormFamilysafe() {	
				$('#inputFamilysafe div.ui-slider').each(function(){$(this).remove();})
				
					$('#familySlider0').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(0);}		        	
				        	else if (ui.value==1){attivaOn(0);}
				        }
				    }});
				    var selectedValue = $('#familySlider0').val();
				    if (selectedValue=='S'){attivaOn(0);}
					else if (selectedValue=='N'){attivaOff(0);}
				
					$('#familySlider1').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(1);}		        	
				        	else if (ui.value==1){attivaOn(1);}
				        }
				    }});
				    var selectedValue = $('#familySlider1').val();
				    if (selectedValue=='S'){attivaOn(1);}
					else if (selectedValue=='N'){attivaOff(1);}
				
					$('#familySlider2').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(2);}		        	
				        	else if (ui.value==1){attivaOn(2);}
				        }
				    }});
				    var selectedValue = $('#familySlider2').val();
				    if (selectedValue=='S'){attivaOn(2);}
					else if (selectedValue=='N'){attivaOff(2);}
				
					$('#familySlider3').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(3);}		        	
				        	else if (ui.value==1){attivaOn(3);}
				        }
				    }});
				    var selectedValue = $('#familySlider3').val();
				    if (selectedValue=='S'){attivaOn(3);}
					else if (selectedValue=='N'){attivaOff(3);}
				
					$('#familySlider4').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(4);}		        	
				        	else if (ui.value==1){attivaOn(4);}
				        }
				    }});
				    var selectedValue = $('#familySlider4').val();
				    if (selectedValue=='S'){attivaOn(4);}
					else if (selectedValue=='N'){attivaOff(4);}
				
					$('#familySlider5').selectToUISlider({labelSrc: 'text', sliderOptions: {
				        change: function(event, ui) {
					        $("#familySafe").find("input[type=submit]").removeClass("disabled");
				        	if (ui.value==0){attivaOff(5);}		        	
				        	else if (ui.value==1){attivaOn(5);}
				        }
				    }});
				    var selectedValue = $('#familySlider5').val();
				    if (selectedValue=='S'){attivaOn(5);}
					else if (selectedValue=='N'){attivaOff(5);}
				
			}
	
			function attivaOn(id) {
				var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
				//$(primoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-30px');
				var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
				//$(secondoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-25px');
				$('#familySlider'+id).val('S');
				
			}
	
			function attivaOff(id) {
				var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
				//$(primoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-30px');;
				var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
				//$(secondoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-25px');
				$('#familySlider'+id).val('N');
			}
	
		</script>

		<div class="titolo">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="titleSection titleForm">Parental Control <a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1566#Addebito')" class="no-underline btn-icon hidden-xs">
							<i class="icon icon-info_fill icon-2x"></i>
						</a>
					</h3>
				</div>
				<div class="col-sm-4">
					<a id="btnRicerca" href="javascript:mostraDivModifica('Familysafe')" role="button" aria-pressed="false" class="btn-align-right" ><i class="icon icon-edit_fill ico-title"></i></a>
				</div>
			</div>
		</div>
		<input type="hidden" name="formModificata" value="Familysafe">
		<div id="datiFamilysafe">
			<div class="form-group">
				 <div class="row">
		                <div class="col-xs-12">
							<p>La carta è attiva per tutte le categorie merceologiche. </p>
						</div>
				</div>
			</div>
			<hr class="hrSeparator">
		</div>
		

		<div class="divForm boxContent slider-on-off" id="inputFamilysafe" style="display: none;">
			<p>
				Tramite questa funzione hai la possibilità di inibire l'utilizzo della carta su alcune categorie di esercenti. <br />Seleziona quelle che desideri abilitare/disabilitare:
			</p>
			<div class="form-group">	
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Giochi e scommesse</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[0].flagAbilitazione" id="familySlider0" style="display: none;"><option value="N">Off</option>
								<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[0].codFamiglia" value="01" />
							<input type="hidden" name="parametriFamilySafe[0].descFamiglia" value="Giochi e scommesse" />
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Alcolici e tabacchi</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[1].flagAbilitazione" id="familySlider1" style="display: none;"><option value="N">Off</option>
								<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[1].codFamiglia" value="02" />
							<input type="hidden" name="parametriFamilySafe[1].descFamiglia" value="Alcolici e tabacchi" />
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Farmaci</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[2].flagAbilitazione" id="familySlider2" style="display: none;"><option value="N">Off</option>
								<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[2].codFamiglia" value="04" />
							<input type="hidden" name="parametriFamilySafe[2].descFamiglia" value="Farmaci" />
						</div>
					</div>
				</div>
			</div>
	
			<div class="form-group">	
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Vendite telefoniche e postali</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[3].flagAbilitazione" id="familySlider3" style="display: none;"><option value="N">Off</option>
								<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[3].codFamiglia" value="05" />
							<input type="hidden" name="parametriFamilySafe[3].descFamiglia" value="Vendite telefoniche e postali" />
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Organizzazioni politiche</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[4].flagAbilitazione" id="familySlider4" style="display: none;"><option value="N">Off</option>
								<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[4].codFamiglia" value="06" />
							<input type="hidden" name="parametriFamilySafe[4].descFamiglia" value="Organizzazioni politiche" />
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="row">
							<label class="control-label col-xs-8">Vendite porta a porta</label>
							<div class="col-xs-4 right-on-off">
								<select name="parametriFamilySafe[5].flagAbilitazione" id="familySlider5" style="display: none;"><option value="N">Off</option>
									<option value="S" selected="selected" class="attivo">On</option></select>
							</div>
							<input type="hidden" name="parametriFamilySafe[5].codFamiglia" value="07" />
							<input type="hidden" name="parametriFamilySafe[5].descFamiglia" value="Vendite porta a porta" />
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="form-group">	
				<div class="row">
					<div class="col-xs-12">
						<p>Il servizio funziona sulla base della classificazione effettuata dalla banca dell'esercente: eventuali imprecisioni o errori relativi a tale classificazione potrebbero pertanto comprometterne il buon funzionamento.</p>
					</div>
				</div>
			</div>

				<div class="alignRight btnWrapper">
						<a type="input"  href="javascript:nascondiDivModifica('Familysafe')" class="btn btn-default">Annulla</a>
						<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma" />
				</div>
		</div>

</form>
</section>