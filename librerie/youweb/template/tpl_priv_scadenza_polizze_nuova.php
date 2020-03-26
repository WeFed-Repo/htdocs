<script type="text/javascript">
$(document).ready(function(){
	$('.datepicker').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
	});

	$('.datepickerDisabled').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays,
		disabled: true
	});

	$('.calendarioDefault').datepicker({
		minDate: new Date(),
		maxDate: '+1Y',
		buttonImage: '/HT/fe/img/calendar.png',
		beforeShowDay: noWeekendsOrHolidays
	});

	var formSubmitted=false;
	$('form').submit(function() {
		if (formSubmitted)
			return false;
		else
			formSubmitted=true;
		return true;
	});
});
</script>

<div class="riquadro clearfix">
  <div class="clearfix">
      <style>
      .imgSrv{
        float: none;
      }
      </style>
      <h1>
        <div class="hidden-print hidden-xxs flag info">&nbsp;</div>
        <span>Scadenza polizze: nuova</span>
      </h1>
  </div>
  <div class="section clearfix">
    <div class="row">
      <div class="col-sm-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
      </div>
    </div>
  </div>
  <div class="section clearfix">
        <div class="bs-example">
          <div class="form-group">
					<div class="form-field-input col-sm-6">
						<label for="nomePolizza" class="control-label">
							Nome polizza
						</label>
						<div class="form-field">
							<input type="text" name="nomePolizza" value="" id="nomePolizza" class="form-control">
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<label for="dataScadenza" class="control-label">Data scadenza</label>
						<div class="form-field">
						        <input type="text" name="dataScadenza" size="12" value="29/06/2018" id="dataScadenza" class="form-control datepicker wauto floatl-marginr10" />
            </div>
          </div>
        </div>
        <div class="form-group">
        <div class="form-field-input col-xs-12 col-sm-6">
          <label for="nomePolizza" class="control-label">
            Tipo veicolo
          </label>
          <div class="form-field">
            <select  name="nomePolizza" value="" id="nomePolizza" class="form-control">
                <option>Seleziona</option>
            </select>
          </div>
        </div>
        <div class="form-field-input col-xs-12 col-sm-6">
          <label for="targaVeicolo" class="control-label">Targa veicolo</label>
          <div class="form-field">
            	<input type="text" name="targaVeicolo" value="" id="targaVeicolo" class="form-control">
          </div>
        </div>
      </div>
      </div>
  </div>
</div>
<div class="pull-right margin-bottom20">
		<input type="submit" name="" value="Indietro" class="btn btn-primary disabled" alt="Indietro" disabled>
		<input type="submit" name="" value="Salva" class="btn  btn-primary" alt="Salva">
	</div>
