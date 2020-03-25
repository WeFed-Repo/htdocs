<div id="ordine">
	<div class="contenuti">
		<table id="ctnboxtable" cellpadding="0" cellspacing="0" style="display: table;">
			<tbody>
				<tr>
					<td class="tdlabel">Stai operando sul conto</td>
					<td valign="bottom">
						<div class="txtIbanLf">	
							<select onchange="cambiaConto();" id="selectConti" name="selectConti" size="1" class="grande">
								<option accountidtoshow="CC 00599 0000089342 EUR" accountid="00599 - 0000089342 - EUR" value="00599 - 0000089342 - EUR">CC 00599 0000089342 EUR</option>
								<option accountidtoshow="EMpos0 CC 00599 0000099102 EUR +DEP" accountid="00599 - 0000099102 - EUR" value="00599 - 0000099102 - EUR">EMpos0 CC 00599 0000099102 EUR +DEP</option>
							</select>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="tithelp">
			<div class="helpleft">Riepilogo ordine</div>
			<br class="clear" />
		</div>
		<div class="borderFormRounded">
			<div class="formGeneric">
					<!-- UNICA RIGA CON CAMPO-->
					<div class="row-fluid">
						<label class="nomefield">Nome creditore</label>
						<span class="output">Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet</span>
					</div>
					
					<!--RIGA DIVISA IN DUE CAMPI -->
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Merchant</label>
							<span class="output">Lorem ipsum dolor sit lorem ipsum</span>
						</div>
						<div class="span6">
							<label class="nomefield">ID autorizzazione</label>
							<span class="output">123456789</span>
						</div>
					</div>
					
					<!--RIGA DIVISA IN DUE CAMPI -->
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">Importo</label>
							<span class="output">123,456.78 &euro;</span>
						</div>
						<div class="span6">
							<label class="nomefield">ID conferma</label>
							<span class="output">123456789</span>
						</div>
					</div>
			</div>
		</div>
		<br class="clear" />
		<br class="clear" />
		<form>
			<div class="pintxt">
				<p class="pin_testo2">Lorem ipsum</p>
				<p class="pin_testo">Inserisci la <strong class="negativo">TERZA</strong> 
					e <strong class="negativo">QUARTA</strong> cifra del codice <strong class="negativo">12</strong> 
					della tua <strong>Carta Servizi Telematici</strong></p>
			</div>
			<div class="pincode">
				<input type="password" maxlength="1" name="" class="pin pinfirst" />
				<img src="/img/ret/pin_aster.gif" width="17" height="21" border="0" class="aster pincenter" alt="" /><img src="/img/ret/pin_aster.gif" width="17" height="21" border="0" class="aster pincenter" alt="" />
				<input type="password" maxlength="1" name="" class="pin pinlast" />
				<br class="clear" />
				<img src="/img/ret/pin_posiz.jpg" width="104" height="12" border="0" class="posizione" alt="" /> 	  
			</div>
			<br class="clear" />
			<p><strong>Inserisci il codice di controllo</strong> che ti abbiamo inviato al numero <strong>348****000</strong></p>
			<div class="formGeneric codiceCont">
				<div class="formCentered" autocomplete="off">
					<fieldset class="row">
						<label class="nomefield">Codice di controllo:</label>
						<input type="text">
					</fieldset>
				</div>
			</div>
	
			<!--bottoniera con più bottoni a destra e casistica di bottoni annulla/indietro -->
			<div class="fooform">		
				<div class="fooformtop">Step <strong>1</strong> di 2</div>
			</div>

			<div class="aButtonconsLeft">
				<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
			</div>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
				<span class="btnc"><a class="aButton" href="javascript:;"><span>lorem ipsum</span></a></span>
			</div>
		</form>
	</div>
</div>
