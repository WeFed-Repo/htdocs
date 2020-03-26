<table class="tabellaBlu table allarmi">
<colgroup>
	<col width="40%">
	<col width="40%">
	<col width="7%">
	<col width="7%">
	<col width="7%">
</colgroup>
<tbody>
	<tr>
		<th colspan="2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</th>
		<th style="text-align: center"><img src="/HT/IMAGES/ico_sms.png" title="SMS" alt="SMS"></th>
		<th style="text-align: center"><img src="/HT/IMAGES/ico_email.png" title="Email" alt="Email"></th>
		<th style="text-align: center"><img src="/HT/IMAGES/ico_notifiche.png" title="App" alt="App"></th>
	</tr>
	<tr>
		<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
		<td><select name="freq.scadenza" id="freq.scadenza" class="form-control"><option value="FG">GIORNALIERA</option>
				<option value="FS">SETTIMANALE</option>
				<option value="FM">MENSILE</option></select></td>
		<td style="text-align: center"><input type="checkbox" name="freq.flagSMS" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="freq.flagEMAIL" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="freq.flagAPP" value="on" class="sfondoForm"></td>
	</tr>
		
	<tr>
		
		<td colspan="5" style="border-bottom:0">
			<div><label><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</strong></label></div>
			<div class="col-xs-5">Consectetuer adipiscing elit</div>
			<div class="col-xs-6" style="padding: 0">Aenean commodo ligula eget</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div class="col-xs-6"><input type="text" name="valore.valoreInf" value="0,00" id="valore.valoreInf" class="form-control"></div>
			<div class="col-xs-6"><input type="text" name="valore.valoreSup" value="999.999,00" id="valore.valoreSup" class="form-control"></div>
		</td>
		<td style="text-align: center"><input type="checkbox" name="valore.flagSMS" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="valore.flagEMAIL" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="valore.flagAPP" value="on" class="sfondoForm"></td>
	</tr>
	<tr>
		<td colspan="5" style="border-bottom: 0">
			<div><label><strong>Lorem ipsum dolor sit amet</strong></label>	</div>
		<div class="col-xs-5">Consectetuer adipiscing elit</div>					
		<div class="col-xs-6" style="padding: 0">Aenean commodo ligula eget</div>					
	</td></tr>
	
	<tr>
		<td colspan="2" style="border-bottom: 0">
			<div class="col-xs-6"><select name="movimenti[0].idCausale" id="movimenti" style="width: 270px;" class="form-control"><option value="000" selected="selected">Selezionare</option>
				<option value="C01">Aenean commodo ligula eget dolor.</option>
				<option value="C02">Consectetuer adipiscing elit.</option>
			</select></div>
			<div class="col-xs-6">	<input type="text" name="movimenti[0].importo" value="0,00" class="form-control"></div>
		</td>
		<td style="text-align: center"><input type="checkbox" name="movimenti[0].flagSMS" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="movimenti[0].flagEMAIL" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><input type="checkbox" name="movimenti[0].flagAPP" value="on" class="sfondoForm"></td>
	</tr>
	
	<tr>
		<td colspan="2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</td>
		<td style="text-align: center"><input type="checkbox" name="allarmeDomiciliazioniMancatoPagamento.sms" value="on" class="sfondoForm"></td>
		<td style="text-align: center"><img src="/HT/IMAGES/ico_alert_auto.png" height="10" width="35" title="Auto" alt="Auto"></td>
		<td style="text-align: center"><input type="checkbox" name="allarmeDomiciliazioniMancatoPagamento.app" value="on" class="sfondoForm"></td>
	</tr>
</tbody>
</table>