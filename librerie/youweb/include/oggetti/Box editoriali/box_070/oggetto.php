<div class="section clearfix" id="ricercaEsitoTesto">
	<div class="context-buttons">
		<a href="javascript:;" title="Mostra" id="btnRicerca" class="btnSelezioneOpen pull-right"> </a>
	</div>
	<h3 class="titleSection">
		Lorem ipsum dolor sit amet					
	</h3>
	<div class="bs-example">
		<div class="form-group clearfix" id="ricercaEsitoTesto">
			<div class="col-xs-12 margin-bottom10">
				<label class="control-label">
				Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit</b>
				</label>
			</div>
		</div>
	</div>
</div>

<div class="section clearfix" style="display:none" id="ricerca">
	<div class="context-buttons">
		<a href="javascript:;" title="Mostra" id="btnRicerca" class="btnSelezioneClose pull-right"> </a>
	</div>
	<h3 class="titleSection">
		Lorem ipsum dolor sit amet					
	</h3>
	<div class="bs-example">
	<!--contenuto-->
		<div class="form-group clearfix">
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="radioUltimeDisposizioni"> <input type="radio" name="tipoRicerca" value="RICERCA_ULTIME_DISPOSIZIONI" checked="checked" onclick="checkRicerca();" id="radioUltimeDisposizioni"> Ultime operazioni  </label>
				<div class="form-field">
					<select name="numeroDisposizioni" id="numeroDisposizioni" class="form-control"><option value="10" selected="selected">Ultime 10 &nbsp;</option>
						<option value="20">Ultime 20 &nbsp;</option>
						<option value="30">Ultime 30 &nbsp;</option>
					</select>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="radioDataEsecuzione"> <input type="radio" name="tipoRicerca" value="RICERCA_PER_DATA_ESECUZIONE" onclick="checkRicerca();" id="radioDataEsecuzione">Data esecuzione</label>
				<div class="form-field">
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10 xs-align-right">
						<span class="float-xs-left">dal</span>
						<input type="text" name="dataInizio" maxlength="10" size="16" value="" id="dataInizio" class="calendarioDefault wauto form-control margin-right10 hasDatepicker" disabled="disabled"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
					</div>
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10  xs-align-right">
						<span class="float-xs-left">al</span>
						<input type="text" name="dataFine" maxlength="10" size="16" value="" id="dataFine" class="calendarioDefault wauto form-control margin-right10 hasDatepicker" disabled="disabled"><img class="ui-datepicker-trigger" src="/HT/IMAGES/nGrafica/calendar.png" alt="Calendario" title="Calendario">
					</div>
				</div>
			</div>
			<div class="form-field-input col-sm-6 col-xs-12">
				<label class="control-label" for="importoMin">Importo </label>
				<div class="form-field">
					<div class="col-sm-6 col-xs-12 margin-bottom-xs-10  xs-align-right">
						<span class="float-xs-left">da</span>
						<input type="text" name="importoMin" maxlength="16" size="24" value="" id="importoMin" class="form-control wauto">
					</div>
					<div class="col-sm-6 col-xs-12  xs-align-right">
						<span class="float-xs-left">a</span>
						<input type="text" name="importoMax" maxlength="16" size="24" value="" id="importoMax" class="form-control  wauto">
					</div>	
				</div>
			</div>

			<input type="hidden" name="tipoOperazione" value="UVVI;UVBA;CCBO;CCTF;CCBB;CCBC;CCGI;CCBT;UVBI;UVBE;UVBT;UVBB;BMRI;REMV;RERV;REFR;BMCC;CARK;CCRK;CCSK;CCPP;PVDL;BMRM;UVCB" id="tipoOperazione">

			<div class="form-field-input col-sm-3 col-xs-12">
				<label class="control-label" for="statoOperazione">Stato Operazione </label>
				<div class="form-field">
					<select name="statoOperazione" id="statoOperazione" class="form-control">
						<option value="  " selected="selected">Tutte</option>
						<option value="S1">In attesa</option>
						<option value="S2">Revocata</option>
						<option value="S3">Ineseguita</option>
						<option value="S4">Eseguita</option>
						<option value="S6">A scadenza</option>
						<option value="S5">Da autorizzare</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right margin-bottom20 margin-top10 clearfix" id="submitRicerca" style="display: block;">
		<div class="actions">
			<input type="submit" value="Ricerca" class="btn btn-primary" alt="Ricerca">
		</div>
	</div>
<!--fine contenuto-->
	
</div>
<script type="text/javascript">
$(document).ready(function(){
		
		$('.btnSelezioneClose').click(function(){
				$("#ricercaEsitoTesto").show();
				$("#ricerca").hide();
				$("input[type='submit']").css("visibility", "hidden");
			})
		$('.btnSelezioneOpen').click(function(){
				$("#ricercaEsitoTesto").hide();
				$("#ricerca").show();
				$("input[type='submit']").css("visibility", "visible");
			})
})
</script>