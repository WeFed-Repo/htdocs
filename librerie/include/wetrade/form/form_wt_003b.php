
<table class="form01 formpop nopadd">
	<tr>
	<td class="uno">Quantit&agrave;*</td>
	<td  colspan="2"><input type="text" class="importo"/></td>
	<td><select name="select" class="grande">
			<option>TON</option>
			<option>-----------------------</option>
		</select></td>
</tr>
<tr>
	<td class="uno">Prezzo</td>
	<td colspan="2"><input type="text" value="6,50" name="text" class="importo"/></td>
	
	<td ><select name="select" class="grande">
			<option>Meglio</option>
			<option>Al limite</option>
		</select>
	</td>
</tr>
<tr>
	<td class="uno">Fase di mercato</td>
	<td colspan="3">
		<select name="select">
			<option>Ap/Cont/ch</option>
			<option>Ap/Cont/ch</option>
		</select>
	</td>
	
</tr>
	<tr>
	<td class="uno">Validit&agrave;</td>
	<td colspan="3"><strong>Fino a chiusura</strong></td>
	
	</tr>
	<tr class="condizatt"> 
	<td colspan="4"><a onclick="javascript:if(document.getElementById('tbcondizpop').style.display=='none') {document.getElementById('tbcondizpop').style.display='block'; document.getElementById('spantxt').innerHTML ='rimuovi condizione -';} else {document.getElementById('tbcondizpop').style.display='none'; document.getElementById('spantxt').innerHTML ='aggiungi condizione +';}" id="spantxt" href="javascript:;">aggiungi condizione +</a><span class="tooltip"><a href="#6" onmouseover="nascondi('lampa6'); " onmouseout="vedi('lampa6');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa6" class="lampa"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
	
	</tr>
</table>



<div style="display: none;" id="tbcondizpop">
	<table class="form01 formpop nopadd">
	
	
	<tbody><tr>
		<td width="90" class="uno">Condizione <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa6');" onmouseover="nascondi('lampa6'); " href="#6"><img class="lampa" id="lampa6" src="/img/ret/lampa_off.gif"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		<td colspan="2">
		<select class="medio" name="select">
			<option>Ultimo >=</option>
			<option>-----------------------</option>
			</select>
			
		</td>
		
	</tr>
	<tr>
		<td width="" class="uno">Prezzo* <span class="tooltip over"><a class="nounderline" onmouseout="vedi('lampa7');" onmouseover="nascondi('lampa7'); " href="#7"><img class="lampa" id="lampa7" src="/img/ret/lampa_off.gif"/><span><span><span>	
											Puoi inserire il prezzo al quale desideri che la tua proposta sia immessa sul mercato e 
											scegliere tra i seguenti parametri.<br><br>
											<b>Al limite</b>: per inserire un limite di prezzo al quale immettere l'ordine a mercato. 
											L'ordine verrà eseguito soltanto al prezzo indicato e a un prezzo migliore.<br><br>
											<b>Eco/Continua</b>: la proposta viene inserita senza alcuna indicazione di prezzo in fase 
											di negoziazione Continua. Il prezzo di esecuzione del contratto è il miglior prezzo 
											di segno opposto che si incontra sul mercato e l'eventuale quantità residua (non soddisfatta 
											a tale prezzo) verrà scambiata ai successivi livelli del book fino a esaurimento delle quantità.
											Durante la fase Continua, gli ordini immessi senza limite di prezzo devono essere obbligatoriamente 
											accompagnati da un parametro di quantità EEC (Esegui e Cancella) oppure TON (Tutto o Niente).<br><br>
											<b>Eco/Asta</b>: la proposta viene inserita senza alcuna indicazione di prezzo in fase di Asta. 
											Il prezzo di esecuzione del contratto è il miglior prezzo di segno opposto che si incontra 
											sul mercato e l'eventuale quantità residua (non soddisfatta a tale prezzo) verrà scambiata ai 
											successivi livelli del book fino a esaurimento delle quantità.<br><br>
											Al termine della fase di asta le proposte senza limite di prezzo non eseguite in tutto o in parte 
											sono automaticamente cancellate.
									</span></span></span></a></span></td>
		<td colspan="2"><input type="text" name="text" class="piccolo"/>
		</td>
		
	</tr>

</tbody></table>
</div>