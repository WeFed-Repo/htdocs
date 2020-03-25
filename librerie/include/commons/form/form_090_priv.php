<!-- codice form scegli conto preferito-->
<form class="formpreferenze" id="AccountPreferencesForm">
	<div class="titolopreferenze"><h2>CONTI CORRENTI</h2></div>
	<table class="tablepreferenze" cellpadding="0" cellspacing="0">
		<tr>
			<th width="80">Preferito</th>
			<th width="218">N. conto corrente</th>
			<th width="180">Intestatari</th>
			<th>Nickname</th>
		</tr>	
		<tr class="unselected">
			<td class="first"><input type="radio" id="radio1" value="" name="preferredAcount" onchange="updateRadio();" onblur="updateRadio();" onfocus="updateRadio();" /></td>
			<td>CC 00599 0000081500 EUR </td>
			<td>Rossi Mario</td>			
			<td class="last Inactive">
			<div  class="inputcont">
			<input type="text" maxlength=12  value="-Naming_prova-" />
			<a href="#1" title=""></a>
			</div>			
			</td>
		</tr>
		<tr class="selected grey">
			<td class="first"><input type="radio" id="radio3" value="" name="preferredAcount" checked="checked"  onchange="updateRadio();" onblur="updateRadio();" onfocus="updateRadio();" /></td>
			<td>
				<p>CC 00599 0000081500 EUR</p> 
				<p>DEP 00599 0000081500 EUR </p> 
			</td>
			<td>
				<p>Loris Capirossi</p><p> Paolo Beltramo</p>
			</td>
			<td class="last Active">
			<div  class="inputcont">
			<input type="text" maxlength=12  value="-Naming_prova-" />
			<a href="#1" title=""></a>
			</div>
			</td>
		</tr>
		<tr class="unselected">
			<td class="first"><input type="radio" id="radio3" value="" name="preferredAcount" /></td>
			<td>
				<p>CC 00599 0000081500 EUR</p>
				<p>CC 00599 0000081500 EUR</p>
			</td>
			<td>
				<p>Loris Capirossi</p>
				<p>Paolo Beltramo </p>
				<p>Mario Rossi</p>
			</td>
			<td class="last Inactive">
			<div  class="inputcont">
			<input class="error" type="text" maxlength=12  value="-Naming_prova-" />
			<a href="#1" title=""></a>
			</div>
			</td>
		</tr>
	</table>
	
	<div class="titolopreferenze titolopreferenzeb"><h2>BE 1 CARD</h2></div>
	<table class="tablepreferenze" cellpadding="0" cellspacing="0">
		<tr>
			<th width="80">Preferito</th>
			<th width="218">IBAN</th>
			<th width="180">Intestatario</th>
			<th>Nickname</th>
		</tr>	
		<tr class="unselected">
			<td class="first"><input type="radio" id="radio1" value="" name="preferredAcount" onchange="updateRadio();" onblur="updateRadio();" onfocus="updateRadio();" /></td>
			<td>123456789012345678901234567</td>
			<td>Rossi Mario</td>			
			<td class="last Inactive">
			<div  class="inputcont">
			<input type="text" maxlength=12  value="-Naming_prova-" />
			<a href="#1" title=""></a>
			</div>			
			</td>
		</tr>		
	</table>
</form>


