
<h1>RICHIEDI MUTUO</h1>


<?php virtual("/librerie/include/commons/tabelle/tab_black_priv_090.php"); ?>



<div id="ErroriValidazione">
<div class="boxtop"><img  border="0" src="/img/ret/box_msgtop.jpg" alt=""/></div>
<div class="boxtxt">
<p class="box_mess"><img border="0" src="/img/ret/img_or_alertria.gif" alt="" class="dx"/><img border="0" src="/img/ret/box_attenzione.jpg" alt=""/><br/>
	<!--strong>Lorem ipsum dolor sit amet.</strong-->
	
	<strong>Errata compilazione form</strong><br/>
<ul class="alert">
<li>Inserire l'indirizzo e-mail nelle informazioni</li>

</ul>

</div>
<div class="boxbottom"><img  border="0"  src="/img/ret/box_msgbottom.jpg" alt=""/></div>
</div>




<!-- titolo pagina + pargrafo intro-->
<div class="tithelp">
	<div class="helpleft"><h2>RICHIESTA DEL MUTUO</h2> </div>
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><br class="clear" /></div>
<br class="clear" /></div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
<!-- fine titolo pagina + pargrafo intro-->

<!-- FASE PRIMA CASO A -->
<div class="tithelp">
	<div class="helpleft">Informazioni sull'immobile</div>	
	<br class="clear"/>
</div>

<table class="form01">
<tr> 
		<td width="95" class="uno" id="">Finalit&agrave; del mutuo</td>
		<td width="170"> 
			<select name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select></td>
		<td width="95" class="uno" id="">Stato ricerca immobile</td>
		<td width="170">
			<select name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select></td>
</tr>
<tr> 
		<td width="" class="uno" id="">Data presunto atto di mutuo</td>
		<td width=""> 
			<input type="text" onfocus="document.getElementById('1').value='';" style="color: rgb(127, 127, 127);" class="micro" maxlength="2" value="mm" id="1" name="text"/> / <input type="text" onfocus="document.getElementById('1').value='';" style="color: rgb(127, 127, 127);" class="piccolo" maxlength="4" value="aaaa" id="1" name="text"/></td>
		<td width="" class="uno" id="">Provincia</td>
		<td width="">
			<select name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
		</select>
		</td>
</tr>
</table>

<div class="tithelp">
	<div class="helpleft">Informazioni di contatto</div>	
<br class="clear"/></div>

<table class="form01">
<tr> 
		<td width="95" class="uno" >Fascia oraria di contatto</td>
		<td width="170"> 
			<select name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select>
		</td>
		<td width="95" class="uno" id="labelmail">Indirizzo email</td>
		<td width="170"><input type="text" class="grande" name="" id="mail"/>
		</td>
</tr>

<tr> 
		<td width="95" class="uno" id="campo01">Telefono cellulare</td>
		<td width="335" colspan="3"><input type="text" maxlength="3" class="piccolo" name="text"/> <input type="text" maxlength="7" class="medio"/> 
			<select name="select">
				<option>-- operatore --</option>
				<option>-----------------------</option>
			</select>
		</td>
		
</tr>

<tr> 
		<td width="" class="uno">Telefono abitazione (opzionale)</td>
		<td width="">
			<input type="text" maxlength="3" class="piccolo" name="text"/> 
			<input type="text" class="medio"/> 
		</td>
		<td width="" class="uno">Telefono ufficio (opzionale)</td>
		<td width="">
		<input type="text" maxlength="3" class="piccolo" name="text"/> 
		<input type="text" class="medio"/> 
		</td>
</tr>

</table>

	
	
	<div class="tithelp">
	<div class="helpleft">Dati dell'intestatario principale</div>	
	<br class="clear"/></div>
	
	<table class="form01">
	<tr> 
		<td width="95" class="uno">Nome</td>
		<td width="170" id=""><strong>Anna</strong></td>
		<td width="95" class="uno">Cognome</td>
		<td width="170" id=""><strong>Rossi</strong></td>
	</tr>
	<tr> 
		<td width="" class="uno">Data di nascita</td>
		<td width="" id=""><strong>01/01/1970</strong></td>
		<td width="" class="uno">Sesso</td>
		<td width="" id=""><strong>F</strong></td>
		
	</tr>
	<tr> 
		<td width="" class="uno">Codice fiscale</td>
		<td width="" id=""><strong>RSSNNA70A41F205M</strong></td>
		<td width="" class="uno">Nato all'estero?</td>
		<td width="" id=""><strong>NO</strong></td>
	</tr>	
	<tr> 
		<td width="" class="uno">Provincia di nascita</td>
		<td width="" id=""><strong>Milano</strong></td>
		<td width="" class="uno">Comune di nascita</td>
		<td width="" id=""><strong>Milano</strong></td>
	</tr>

	
	<tr> 
		<td width="95" class="uno" id="campo01">Via e numero civico di domicilio</td>
		<td width="435" colspan="3"><input type="text" class="extra" name="text"/></td>
	</tr>
	
	
	<tr> 
	<td width="95" class="uno" id="">Provincia di domicilio</td>
		<td width="170"><select name="select">
		<option>MI</option>
		<option>----</option>
		</select></td>
		<td width="95" class="uno" id="">C.A.P. di domicilio</td>
		<td width="170"><input type="text" class="medio" name="text2"/></td>
	</tr>
	
	<tr> 
	<td width="95" class="uno" id="campo01">Comune di domicilio</td>
		<td width="435" colspan="3">
		<select name="select">
		<option>Milano</option>
		<option>----------------------------</option>
		</select></td>
		
	</tr>
	
	<tr> 
		<td width="95" class="uno" id="campo01">Tipo di documento d'identit&agrave;</td>
		<td width="170"><select name="select">
		<option>Carta d'identit&agrave;</option>
		<option>Patente</option>
		<option>Passaporto</option>
		</select></td>
		<td width="95" class="uno" id="campo02">Numero</td>
		<td width="170"><input type="text" class="grande" name="text2"/></td>
	</tr>
	
	<tr> 
		<td width="" class="uno" id="">Data di rilascio</td>
		<td width=""><input type="text" onfocus="document.getElementById('1').value='';" style="color: rgb(127, 127, 127);" class="micro" maxlength="2" value="gg" name="text"/> / <input type="text" onfocus="document.getElementById('1').value='';" style="color: rgb(127, 127, 127);" class="micro" maxlength="2" value="mm" id="1" name="text"/> / <input type="text" onfocus="document.getElementById('1').value='';" style="color: rgb(127, 127, 127);" class="piccolo" maxlength="4" value="aaaa" id="1" name="text"/></td>
		<td width="" class="uno">Rilasciato da</td>
		<td width="" id=""><strong>...</strong></td>
	</tr>
	
	<tr> 
		<td width="" class="uno" id="campo01">Provincia di emissione doc.</td>
		<td width=""><select name="select">
		<option>--Seleziona--</option>
		<option>-------------</option>
		</select></td>
		<td width="" class="uno" id="campo02">Comune di emissione doc.</td>
		<td width=""><select name="select" disabled="disabled">
		<option>--Seleziona--</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
	
	<tr> 
		<td width="" class="uno" id="campo01">Categoria professionale</td>
		<td width=""><select name="select">
		<option>--Seleziona--</option>
		<option>-------------</option>
		</select></td>
		<td width="" class="uno" id="campo02">Professione</td>
		<td width=""><select name="select" disabled="disabled">
		<option>--Seleziona--</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
	
	<tr> 
		<td width="95" class="uno" id="campo01">Settore di attivit&agrave;</td>
		<td width="435" colspan="3">
			<select name="select" disabled="disabled">
				<option>--Seleziona--</option>
				<option>-------------</option>
			</select></td>
		
	</tr>
	</table>
	
	<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXNON UTILE ALLO SVILUPPOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
	<!-- SIMULAZIONE DI FUNZIONAMENTO  DEL CONTENUTO AGGIUNGI INTESTATARIO NASCOSTO // ALL'APERTURA BOTTONE AGGIUNGI // AL CLICK RIMUOVI -->
	
	<script type="text/javascript">
	function visualizzaInt(){
	var secondoform = document.getElementById('secondoform');
	var btn = document.getElementById('btnadd');
	if(secondoform.style.display=="none"){
	secondoform.style.display="block"
	btn.innerHTML = 'Rimuovi intestatario';
	}
	else {
	secondoform.style.display="none"
	btn.innerHTML = 'Aggiungi intestatario';
	}
	
	}
	
	
	</script>
	
	
	<div class="fooform2"> <div class="fooformleft"> <div>
	<a title="lorem ipsum" class="btnformleft" href="#1" onclick="visualizzaInt();"><img alt="" src="/img/ret/btn_left_bi.gif"/><span id="btnadd">Aggiungi intestatario</span><img alt="" src="/img/ret/btn_right_bi.gif"/></a>
	
	</div> 
	<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
	
	<br class="clear" /> </div> <br class="clear" /> </div><br/>
	

	

<div id ="secondoform" style="display:none;">
	<table class="form01">
	  <tr> 
		<td width="95" class="uno" id="campo01">Nominativi correlati</td>
		<td width="435" colspan="3"><select name="select">
		<option>--Mario Brambilla--</option>
		<option>-------------</option>
		</select>
		<span class="tooltip"><a href="#1" onmouseover="nascondi('lampa2');" onmouseout="vedi('lampa2');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa2" class="lampa"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
		
</td>
		
	</tr>
	
	</table>
	
	
	
	<table class="form01">
	
	<div class="tithelp">
	<div class="helpleft">Dati del secondo intestatario </div>	
	<br class="clear"/></div>
	<table class="form01">
	<tr> 
		<td width="95" id="campo01" class="uno">Nome</td>
		<td width="170"><strong>Mario</strong></td>
		<td width="95" id="campo02" class="uno">Cognome</td>
		<td width="170"><strong>Brambilla</strong></td>
	</tr>
	
	<tr> 
		<td width="" id="campo01" class="uno">Data di nascita</td>
		<td width=""><strong>01/10/1970</strong></td>
		<td width="" id="campo02" class="uno">Sesso</td>
		<td width=""><strong>M</strong></td>
	</tr>
	
	<tr> 
		<td width="" id="campo01" class="uno">Codice fiscale</td>
		<td width=""><strong>BRMMRA70R01F205Z</strong></td>
		<td width="" id="campo02" class="uno">Nato all'estero?</td>
		<td width=""><strong>NO</strong></td>
	</tr>
	
	<tr> 
		<td width="" id="campo01" class="uno">Provincia di nascita</td>
		<td width="">Milano</td>
		<td width="" id="campo02" class="uno">Comune di nascita</td>
		<td width="">Milano</td>
	</tr>
	
	
	<tr> 
	<td width="95" id="campo01" class="uno">Via e numero civico di domicilio</td>
	<td width="435" colspan="3"><input type="text" name="text" class="extra"/></td>
	</tr>
	
	
	<tr> 
	<td width="95" id="campo01" class="uno">Provincia di domicilio</td>
		<td width="170"><select name="select">
		<option>MI</option>
		<option>----</option>
		</select></td>
		<td width="95" id="campo02" class="uno">C.A.P. di domicilio</td>
		<td width="170"><input type="text" name="text2" class="medio"/></td>
	</tr>
	
	<tr> 
	<td width="" id="campo01" class="uno">Comune di domicilio</td>
		<td width=""><select name="select">
		<option>Milano</option>
		<option>----------------------------</option>
		</select></td>
		<td width="" id="" class="uno"/>
		<td width=""/>
	</tr>
	
	

	<tr> 
		<td width="95" id="campo01" class="uno">Tipo di documento d'identità</td>
		<td width="170"><select name="select">
		<option>Carta d'identit&agrave;</option>
		<option>Patente</option>
		<option>Passaporto</option>
		</select></td>
		<td width="95" id="" class="uno">Numero</td>
		<td width="170"><input type="text" name="text2" class="grande"/></td>
	</tr>
	
	<tr> 
		<td width="" id="" class="uno">Data di rilascio</td>
		<td width=""><input type="text" name="text" value="gg" maxlength="2" class="micro" style="color: rgb(127, 127, 127);" onfocus="document.getElementById('1').value='';"/> / <input type="text" name="text" id="1" value="mm" maxlength="2" class="micro" style="color: rgb(127, 127, 127);" onfocus="document.getElementById('1').value='';"/> / <input type="text" name="text" id="1" value="aaaa" maxlength="4" class="piccolo" style="color: rgb(127, 127, 127);" onfocus="document.getElementById('1').value='';"/></td>
		<td width="" id="" class="uno">Rilasciato da</td>
		<td width=""><strong>...</strong></td>
	</tr>
	
	<tr> 
		<td width="" id="campo01" class="uno">Provincia di emissione doc.</td>
		<td width=""><select name="select">
		<option>--Seleziona--</option>
		<option>-------------</option>
		</select></td>
		<td width="" id="" class="uno">Comune di emissione doc.</td>
		<td width=""><select name="select" disabled="disabled">
		<option>--Seleziona--</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
	
	<tr> 
		<td width="" id="" class="uno">Categoria professionale (opzionale)</td>
		<td width=""><select name="select">
		<option>--Seleziona--</option>
		<option>-------------</option>
		</select></td>
		<td width="" id="" class="uno">Professione (opzionale)</td>
		<td width=""><select name="select" disabled="disabled">
		<option>--Seleziona--</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
	
	<tr> 
		<td width="" id="campo01" class="uno">Settore di attivit&agrave; (opzionale)</td>
		<td width=""><select name="select" disabled="disabled">
		<option>--Seleziona--</option>
		<option>-------------</option>
		</select></td>
		<td width="" id="campo02" class="uno"/>
		<td width=""/>
	</tr>
	</table>
	
	
	
	
	<!-- fine  FASE SECONDA CASO B + INTESTATARI-->
	
</div>
	
	<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 3</div>
	
	<div class="fooformright">
		<div><a title="lorem ipsum" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_mutui_richiesta_rie_1int.php" id='linkgo'><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>
	