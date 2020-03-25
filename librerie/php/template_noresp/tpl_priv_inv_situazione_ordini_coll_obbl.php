<h1>Situazione ordini</h1>
<p>Puoi <strong>verificare</strong> gli <strong>ordini inseriti</strong>, visualizzarne i <strong>dettagli</strong>, conoscerne lo <strong>stato</strong> e, ove possibile, <strong>revocarli</strong> se non ancora eseguiti.</p>
<div class="tithelp">
	<div class="helpleft">Inserisci i parametri di ricerca</div>
<br class="clear"/></div>
<table class="form01">
	<tr>
		<td class="uno">Seleziona strumento</td>
		<td colspan="3">
			<select>
				<option>Fondi e Sicav</option>
				<option>Collocamento obbligazionario</option>
				<option>PCT</option>
				<option>Aste e titoli di stato</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td width="105" class="uno">Ricerca per</td>
		<td>
		<select class="lungmax" name="select">
				<option>deposito titoli</option>
				<option>numero di registrazione ordine </option>
			</select>
		
		</td>
		<td width="105" class="uno">Deposito titoli</td>
		<td>
		<select class="lungmax" name="select">
				<option>tutti i depositi titolo</option>
				<option>----------------</option>
			</select>
		
		</td>
	</tr>
	<tr>
		<td width="105" class="uno">Periodo<input type="radio" name="radiobutton" value="radiobutton" checked="" class="nobor"/></td>
		<td colspan="3">da <select name="select">
			<option>01</option>
			<option>01</option>
				</select> <select name="select">
		<option>gennaio</option>
		<option>Ottobre</option>
		<option>Novembre</option>
		</select> <input type="text" class="piccolo" maxlength="4" value="aaaa" id="1" name="text"/>
		   
		a <select name="select">
		<option>01</option>
		<option>01</option>
		</select> <select name="select">
		<option>febbario</option>
		<option>Ottobre</option>
		<option>Novembre</option>
		</select> 
		<input type="text" class="piccolo" maxlength="4" value="aaaa" id="1" name="text"/>
	
		</td>
	</tr>
	<tr>
	<td width="105" class="uno">N.ordini<input type="radio" name="radiobutton" value="radiobutton" checked="" class="nobor"/></td>
	<td colspan="3">ultimi
		<select name="select">
			<option>10</option>
		</select>
	</td>
	</tr>
	<tr>
	<td width="105" class="uno">Titolo</td>
	<td colspan="3">
		<input type="text" class="grande" name="text"/><span class="tooltip2"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
	</td>
	</tr>
	<tr>
		<td width="105" class="uno"></td>
		<td colspan="3">
			(Desc, codice ISIN, codice Banca, codice RADIOCOR)
		</td>
	</tr>
	<tr>
		<td width="105" class="uno"><span class="sxlamp">Tipo ordini</span><a href="#1" onmouseover="nascondi('lampa13');" onmouseout="vedi('lampa13');"><img src="/img/ret/lampa_off.gif" id="lampa13" class="lampa"/></a></td>
		<td colspan="3">
			<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/><span class="txtinput">a scadenza</span><br class="clear"/>
			<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/><span class="txtinput">a revoca</span>
		</td>
	</tr>


</table>
<div class="fooform">	

	<div class="fooformright">
		<div><a href="" class="btnformright" title="Cerca"><img src="/img/ret/btn_left_ar.gif" alt=""/><span id="btnaddinf">esegui ricerca</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>