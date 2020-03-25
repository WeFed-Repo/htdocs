<!-- Funzione esempio per setting degli errori -->
<script type="text/javascript">
function esempioErrori()
{
	
	$("errorMessages").innerHTML = "";
	
	setCommonErrorCondition("labelcampo1", "Si &egrave; verificato un errore in campo1", document.formprova, "campo1");
	setCommonErrorCondition("labelcampo2", "Si &egrave; verificato un errore in campo2", document.formprova, "campo2");
	setCommonErrorCondition("labelcampo3", "Si &egrave; verificato un errore in campo3", document.formprova, "campo3");
	setCommonErrorCondition("labelselect1", "Si &egrave; verificato un errore in select1", document.formprova, "select1");
	setCommonErrorCondition("labelcheckbox1", "Si &egrave; verificato un errore in checbox1", document.formprova, "checkbox1",1);
	setCommonErrorCondition("labelradio1", "Si &egrave; verificato un errore in radio1", document.formprova, "radio1", 0);
	setCommonErrorCondition("labeltextarea1", "Si &egrave; verificato un errore in textarea1", document.formprova, "textarea1");
	
	//Fa apparire il box
	$("ErroriValidazione").show();
}

function rimuoviErrori()
{
	unpointoutLabels();
	
	//Fa sparire il box
	$("ErroriValidazione").hide();
}
</script>
<!-- Fine esempio setting degli errori -->
<p>
	Esempio di form con implementazione gestione degli errori.<br>Cliccare su <strong>Mostra gli errori</strong> per settare l'errore su tutti i campi e su <strong>Rimuovi gli errori</strong> per rimuoverlo. Le funzioni scatenante &egrave; all'interno del codice della pagina.<br>
</p>
<!-- BOX CON ERRORI -->
<div id="ErroriValidazione" style="display:none">
	<div class="boxtop"><img border="0" src="/img/ret/box_msgtop.jpg" alt=""></div>
	<br class="clear">
	<div class="boxtxt">
		<p class="box_mess"><img border="0" src="/img/ret/spazio2.gif" alt="" class="dx"><img border="0" src="/img/ret/box_attenzione.jpg" alt=""><br>
			Si sono verificati i seguenti errori:<br>	
		</p>
		<ul class="alert" id="errorMessages">
		</ul>
	<br class="clear">
	</div>
	<div class="boxbottom"><img border="0" src="/img/ret/box_msgbottom.jpg" alt=""></div>
</div>
<!-- FINE BOX CON ERRORI -->

<div class="tithelp">
	<div class="helpleft">Gestione errori</div>
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><br class="clear" /></div>
<br class="clear" /></div>

<form name="formprova">
<table class="form01">
	<tr> 
		<td width="105" class="uno" id="labelcampo1">Campo1</td>
		<td width="220"><input name="campo1" type="text" class="micro" /></td>
		<td class="uno" width="105" id="labelcampo2">Campo2</td>
		<td><input name="campo2" type="text" class="medio" /></td>
	</tr>
	<tr> 
		<td width="105" class="uno"  id="labelcampo3">Campo3</td>
		<td width="220"><input name="campo3" type="text" class="grande" /></td>
		<td width="105" class="uno" id="labelselect1">Select1</td>
		<td width="225">
			<select name="select1">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select>
		</td>
	</tr>	
	<tr> 
		<td class="uno" width="105" id="labelcheckbox1">Checkbox1</td>
		<td colspan="1">	
			<input type="checkbox" name="checkbox1" value="checkbox1" class="nobor3" /><span class="txtinput">Lorem ipsum dolor</span>  <br class="clear" />
			<input type="checkbox" name="checkbox1" value="checkbox1" checked class="nobor3" /><span class="txtinput">Lorem ipsum dolor lorem ipsum lorem ipsum</span> <br class="clear" />
			<input type="checkbox" name="checkbox1" value="checkbox1" class="nobor3" /><span class="txtinput">Lorem ipsum dolor lorem ipsum lorem ipsum</span> <br class="clear" />
		</td>	
		<td class="uno" width="105" id="labelradio1">Radio1</td>
		<td colspan="1">
			<input type="radio" name="radio1" value="radio1" checked class="nobor3"/><span class="txtinput">Lorem ipsum dolor  lorem ipsum lorem ipsum</span><br class="clear" />
			<input type="radio" name="radio1" value="radio1" class="nobor3"/><span class="txtinput">Dolor lorem ipsum</span><br class="clear" />
			<input type="radio" name="radio1" value="radio1" class="nobor3"/><span class="txtinput">Ipsum lorem ipsum lorem ipsum</span><br class="clear" />
		</td>		
	</tr>
	
	<tr> 
		<td width="105" class="uno" valign="top" id="labeltextarea1">Textarea1</td>
		<td colspan="3"><strong>Titolo lorem ipsum</strong><br />
			<textarea name="textarea1">Lorem ipsum lorem ipsum</textarea></td>
	</tr>
	
	</table>
</form>	
	<!-- pulsantiera -->
	<div class="fooform">	
	<div class="fooformtop"></div>
	<div class="fooformrightb">
		<div><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript: rimuoviErrori();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Rimuovi gli errori</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		<div><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="javascript: esempioErrori();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Mostra gli errori</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>

<!-- fine pulsantiera -->
	