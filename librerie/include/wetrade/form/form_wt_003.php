<table class="form01 formpop">
<tr>
	<td class="uno">Quantit&agrave;* <span class="tooltip over">
						<a href="#2" onmouseover="nascondi('tipQuantita'); " onmouseout="vedi('tipQuantita');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="tipQuantita" class="lampa">
							<span>
								<span>
									<span>	
											Puoi inserire la quantit&agrave; di titoli o il controvalore nel caso di obbligazioni.<br><br>
											<b>Tutto o Niente (TON)</b>: &egrave; un parametro che consente l'esecuzione dell'ordine 
											unicamente per l'intero quantitativo e alle condizioni di prezzo indicate al momento 
											dell'inserimento. Nel caso in cui tale condizione non sia accettata dal mercato, 
											la proposta si cancella automaticamente.<br><br>
											<b>Esegui e Cancella (EEC)</b>: &egrave; un parametro che consente l'esecuzione dell'ordine, anche 
											parziale, per le quantit&agrave; disponibili sul lato opposto del book, e fa in modo che 
											l'eventuale quantità residua sia cancellata automaticamente.<br><br>
											<b>Senza condizioni</b>: l'ordine viene inserito senza condizioni.

									</span>
								</span>
							</span>
						</a>
					</span></td>
	<td><input type="text" class="importo"/></td>
	<td><select name="select" class="grande">
			<option>Esegui e Cancella</option>
			<option>-----------------------</option>
		</select></td>
</tr>
<tr>
	<td class="uno">Prezzo</td>
	<td><input type="text" value="6,50" name="text" class="importo"/></td>
	
	<td ><select name="select" class="grande">
			<option>Al limite</option>
			<option>-----------------------</option>
		</select>
	</td>
</tr>
<tr>
	<td class="uno">Fase di mercato</td>
	<td colspan="2"><select name="select">
				<option>Ap/Cont/ch</option>
				<option>Ap/Cont/ch</option>
			</select></td>
	
</tr>
<tr>
	<td class="uno">Validit&agrave;</td>
	<td colspan="2">
			
			<select name="select">
				<option>A chiusura</option>
				<option>A chiusura</option>
				<option>08/06/10</option>
				<option>09/06/10</option>
			</select>
		</td>
</tr>


	<tr> 
				<td class="uno"><div class="nobor3 padd7">
						Operativit&agrave;
						<span id="spanTipoOperativita" class="tooltip over">
							<a class="nounderline" onmouseout="vedi('tipOperativita');" onmouseover="nascondi('tipOperativita'); " href="#2">
								<img class="lampa" id="tipOperativita" src="/img/ret/lampa_off.gif">
								<span>
									<span>
										<span>	
											<strong>Operativit&agrave; ordinaria:</strong> consente di effettuare operazioni di acquisto e di vendita aventi ad oggetto i diversi strumenti finanziari.
La differenza tra il prezzo di vendita e il prezzo di acquisto determina l'utile (profit) o perdita (loss). <br /><br />

<strong>Operativit&agrave; marginata intraday:</strong>  per sfruttare anche le minime oscillazioni di mercato grazie all'effetto leva. Il cliente pu&ograve; operare impegnando solo una parte del controvalore che sarebbe richiesto per effettuare l'operazione.
<br /><br />

<strong>Operativit&agrave; marginata short overnight:</strong>  per sfruttare le fasi di mercato ribassista, puntando sul ribasso del titolo anche per più giorni senza dover ricorrere all’utilizzo di strumenti derivati e sfruttando l'effetto leva.


										</span>
									</span>
								</span>
							</a>
						</span>	
					</div></td>
				<td colspan="2">
				<div class="inputdom">
				
				<div class="nobor3 padd7"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/>Ordinaria</div>
				<div class="nobor3 padd7"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/>Marginata <br />intraday</div>
				<div class="nobor3 padd7"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/>Marginata <br />overnight</div>
				</div>
				</td>
			</tr>
</table>

