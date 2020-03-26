

<table class="tabellaBlu table allarmi">
<colgroup>
	<col width="79%">
	<col width="7%">
	<col width="7%">
	<col width="7%">
</colgroup>
<tbody>
	<tr>
		<th>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</th>
		<th style="text-align:center"><img src="/HT/IMAGES/ico_sms.png" title="SMS" alt="SMS"></th>
		<th style="text-align:center"><img src="/HT/IMAGES/ico_email.png" title="Email" alt="Email"></th>
		<th style="text-align:center"><img src="/HT/IMAGES/ico_notifiche.png" title="App" alt="App"></th>
	</tr>
	<tr>
		<td>
		   <div class="col-xs-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
		
			<div class="col-xs-3">
			 	<select name="allarmeInfoBonifico.versoVariazione" id="allarmeInfoBonifico.versoVariazione" class="form-control">
			 		<option value="+" selected="selected">maggiore</option>
					<option value="-">minore</option>
				</select>
			</div>
			
		 	<div class="col-xs-1">di</div>

			<div class="col-xs-2">
				<input type="text" name="allarmeInfoBonifico.valore" maxlength="10" size="10" value="0,00" id="valore" class="form-control">
			</div>
		</td>
		<td style="text-align:center">
			<input type="checkbox" name="allarmeInfoBonifico.flagSMS" value="on" class="sfondoForm">
		</td>
		<td style="text-align:center">
			<input type="checkbox" name="allarmeInfoBonifico.flagEMAIL" value="on" class="sfondoForm">
		</td>
		<td style="text-align:center">
			<input type="checkbox" name="allarmeInfoBonifico.flagAPP" value="on" checked="checked" class="sfondoForm">
		</td>
	</tr>
</tbody>
</table>