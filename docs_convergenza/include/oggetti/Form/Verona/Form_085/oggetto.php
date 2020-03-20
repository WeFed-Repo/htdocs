<script>
	function inizializzaFormAttivaCarta() {	
		attivaOff(0);
		$('#formAttivaCarta, #formModificaCarta, .rowOtpBandaMagnetica').css('display', 'none');
		$('#attivaCartaSlider').selectToUISlider({labelSrc: 'text', sliderOptions: {
			change: function(event, ui) {
				if (ui.value==0) { attivaOff(); }		        	
				else if (ui.value==1) { attivaOn(); }
				showStatus(ui.value);
			}
		}});
		var selectedValue = $('#attivaCartaSlider').val();
		if (selectedValue=='S') { attivaOn(); }
		else if (selectedValue=='N') { attivaOff(); }
	}

	function attivaOn() {
		$('#attivaCartaSlider').val('S');
	}

	function attivaOff() {
		$('#attivaCartaSlider').val('N');
	}


	function showStatus(Svalue) {
		if(Svalue===0) {
			$('#formAttivaCarta, #formModificaCarta, .rowOtpBandaMagnetica').hide();
			$('#salvaBandaMagnetica').attr('disabled', 'disabled');
			$('#inputAttivaCarta > div > div > label').html('Banda magnetica NON abilitata');
			$('#abilitaBandaMagnetica').show();
			$('#dataInizioValidita1, #dataFineValidita1').datepicker('setDate', null);
		} else {
			$('#formAttivaCarta').show();
		}
	}

	$(document).ready(function() {
		$('#dataInizioValidita1, #dataFineValidita1, #dataInizioValidita2, #dataFineValidita2').mask("99/99/9999");
		$('#dataInizioValidita1, #dataFineValidita1').datepicker({
			minDate: new Date(),
			maxDate: '+1Y',
			buttonImage: 'common/fe/img/pixel_trasp.gif',
			onSelect: function(dateText) {
				$(this).focus();
			}
		});
		$('#dataInizioValidita2, #dataFineValidita2').datepicker({
			minDate: new Date(),
			maxDate: '+1Y',
			buttonImage: 'common/fe/img/pixel_trasp.gif',
			onSelect: function(dateText) {
				$(this).change();
				$('#salvaBandaMagnetica').removeAttr('disabled').click(function() {
					$('#formModificaCarta').hide();
					$('#formAttivaCarta').show();
				});
			}
		});

		inizializzaFormAttivaCarta();

		$('#abilitaBandaMagnetica').click(function(e) {
			e.preventDefault();
			$(this).hide();
			$('.rowOtpBandaMagnetica').show();
		});

		$('#annullaBandaMagnetica1').click(function(e) {
			e.preventDefault();
			$('#abilitaBandaMagnetica').show();
			$('.rowOtpBandaMagnetica').hide();
		});

		$('#annullaBandaMagnetica2').click(function(e) {
			e.preventDefault();
			$('#formModificaCarta').hide();
		});

		$('#confermaBandaMagnetica').click(function(e) {
			e.preventDefault();
			$('#formAttivaCarta').hide();
			$('#inputAttivaCarta > div > div > label').html('Banda magnetica abilitata<br />dal 16/11/2019 al 23/11/2019<br /><a href="#" id="modificaData" style="text-decoration: underline; color: #53A21E;">Modifica data</a>');

			$('#modificaData').click(function(e) {
				e.preventDefault();
				$('#formAttivaCarta').hide();
				$('#formModificaCarta').show();
			});
		});
	});
</script>
<section>
	<div class="switch-dispositivo">
		<span class="divForm boxContent slider-on-off" id="inputAttivaCarta" style="">
			<div class="row">
				<div class="col-xs-10">
					<label>Banda magnetica NON abilitata</label>
				</div>
				<div class="col-xs-1 right-on-off">
					<select id="attivaCartaSlider" style="display: none;">
						<option value="N" selected="selected">Off</option>
						<option value="S" class="attivo">On</option>
					</select>
				</div>
				<div class="col-xs-1"></div>
			</div>
		</span>
	</div>
</section>
<section>
	<form method="post" action="" id="formAttivaCarta">
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<label class="control-label" style="margin-bottom: 15px;">Scegli il periodo di validità (max 30 giorni)</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="form-field">
							<div class="row">
								<div class="form-field-input col-xs-12 col-sm-4">
									<div class="row">
										<div class="form-field-input col-xs-12">
											<div class="form-field">
												<div class="row">
													<div class="col-xs-12" style="margin-bottom: 5px;">
														<span>Data di inizio validità</span>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="input-group">
															<input type="text" name="dataInizioValidita1" size="12" value="" id="dataInizioValidita1" class="form-control input-inline clear-x wauto" style="border-right: 0;" />
															<a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-field-input col-xs-12 col-sm-2"></div>
								<div class="form-field-input col-xs-12 col-sm-4">
									<div class="row">
										<div class="form-field-input col-xs-12">
											<div class="form-field">
												<div class="row">
													<div class="col-xs-12" style="margin-bottom: 5px;">
														<span>Data di fine validità</span>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="input-group">
															<input type="text" name="dataFineValidita1" size="12" value="" id="dataFineValidita1" class="form-control input-inline clear-x wauto" style="border-right: 0;" />
															<a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-field-input col-xs-12 col-sm-2"></div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-12" style="text-align: right;">
									<a type="button" href="#" class="btn btn-primary btn-gen-pwd" id="abilitaBandaMagnetica" title="Salva">Salva</a>
								</div>
							</div>
							<div class="row rowOtpBandaMagnetica">
								<div class="form-field-input col-xs-12 col-sm-6">
									<div class="form-field">
										<label class="control-label">
											Confermo di aver preso visione della documentazione elencata nella finestra DOCUMENTI presente in questa videata e, per proseguire con la disposizione, inserisco la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
										</label>
									</div>
								</div>
								<div class="form-field-input col-xs-12 col-sm-6">
									<div class="form-field-input">
										<img src="/HT/fe/img/OTPWHV.png">
										<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control wauto" style="margin-top:5px">
										<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&pagCont=01','Help: lorem ipsum')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
									</div>
								</div>
							</div>
							<div class="row rowOtpBandaMagnetica">
								<div class="form-field-input col-xs-12">
									<div class="alignRight btnWrapper">
										<a type="button" href="#" class="btn btn-default" id="annullaBandaMagnetica1" title="Annulla">Annulla</a>
										<a type="button" href="#" class="btn btn-primary" id="confermaBandaMagnetica" title="Conferma">Conferma</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<form method="post" action="" id="formModificaCarta">
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<label class="control-label" style="margin-bottom: 15px;">Scegli il periodo di validità (max 30 giorni)</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="form-field">
							<div class="row">
								<div class="form-field-input col-xs-12 col-sm-4">
									<div class="row">
										<div class="form-field-input col-xs-12">
											<div class="form-field">
												<div class="row">
													<div class="col-xs-12" style="margin-bottom: 5px;">
														<span>Data di inizio validità</span>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="input-group">
															<input type="text" name="dataInizioValidita2" size="12" value="16/11/2019" id="dataInizioValidita2" class="form-control input-inline clear-x wauto" style="border-right: 0;" />
															<a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-field-input col-xs-12 col-sm-2"></div>
								<div class="form-field-input col-xs-12 col-sm-4">
									<div class="row">
										<div class="form-field-input col-xs-12">
											<div class="form-field">
												<div class="row">
													<div class="col-xs-12" style="margin-bottom: 5px;">
														<span>Data di fine validità</span>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="input-group">
															<input type="text" name="dataFineValidita2" size="12" value="23/11/2019" id="dataFineValidita2" class="form-control input-inline clear-x wauto" style="border-right: 0;" />
															<a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-field-input col-xs-12 col-sm-2"></div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-12">
									<div class="alignRight btnWrapper">
										<a type="button" href="#" class="btn btn-default" id="annullaBandaMagnetica2" title="Annulla">Annulla</a>
										<a type="button" class="btn btn-primary" id="salvaBandaMagnetica" title="Salva" disabled="disabled">Salva</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>