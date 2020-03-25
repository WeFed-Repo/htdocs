<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX     FUNZIONE JAVASCRIPT A SOLO USO DIMOSTRATIVO DA NON  USARE NELLO SVILUPPO! XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<script type="text/javascript">
	function visualizzaInf(){
	var secondoform = document.getElementById('forminf');
	var btn = document.getElementById('btnaddinf');
	if(secondoform.style.display=="none"){
	secondoform.style.display="block"
	btn.innerHTML = 'Modifica';
	document.getElementById('btn01').style.display='none';
	
	}
	else {
	secondoform.style.display="none"
	btn.innerHTML = 'Prosegui';
	
	document.getElementById('btn01').style.display ='block';
	}
	
	}

	function visualizzaInf2(){
	
	document.getElementById('fooform2').style.display='none'; 
	document.getElementById('fooform1').style.display='block'; 

	document.getElementById('table01').style.display='block'; 
	document.getElementById('table02').style.display='none'; 
	document.getElementById('campo01').innerHTML ='<select class="lungmax" name="select"><option>-- seleziona --</option><option>-----------------------</option></select>';
	document.getElementById('campo02').innerHTML ='<select class="lungmax" name="select"><option>-- seleziona --</option><option>-----------------------</option></select>';
	document.getElementById('fnddest').style.display='none';
	}
</script>	


<!-- ESEMPIO PER L'OVERLAYER -->
<div class="layeralert2" id="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert2').dragHandle = new Draggable('layeralert2',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none';unobscurateAll();"/></div>
	<div class="body">
	<div class="important">
	<h3 class="verde">Sottotitolo pagina</h3>
	<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem</p><br/>
	<div id="contcont">	
<table cellpadding="0" cellspacing="0" class="condiz2 fondi">
<tr class="color"> 
  <td>&nbsp;</td>
  <td>Nome</td>
  <td>Categoria</td>
</tr>					  
<tr class="dispari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="pari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>					  
<tr class="dispari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="pari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>					  
<tr class="dispari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="pari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="g1"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="pari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>					  
<tr class="dispari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>
<tr class="pari"> 
  <td class="center"><input type="radio"></td>
  <td class="left"><a href="#1" title="lorem ipsum">Fondo xxxxxxxx</a></td>
  <td class="left">Categoria xxxxxxxx</td>
</tr>	 
</table>
<div id="paginazione2">
			<ul class="menu_o">
						<li><a class="nosel" href="#1"><<</a></li>
						<li><a class="nosel" href="#1"><</a></li>
						<li><a href="#1">1</a></li>
						<li><a href="#1">2</a></li>
						<li><a href="#1">3</a></li>
						<li class="on"><a href="#1">4</a></li>
						<li><a href="#1">5</a></li>
						<li><a href="#1">6</a></li>
						<li><a class="nosel" href="#1">></a></li>
						<li><a class="nosel" href="#1">>></a></li>							
		   </ul>
</div>	
<br class="clear">
<a href="#1" class="btnformright" title="prosegui" onclick="javascript:unobscurateAll(); closeAlert('layeralert2'); document.getElementById('fooform1').style.display='none';  document.getElementById('fooform2').style.display='block';document.getElementById('table01').style.display='none';document.getElementById('table02').style.display='block';document.getElementById('campo01').innerHTML ='<strong>lorem</strong>';  document.getElementById('campo02').innerHTML ='<strong>lorem</strong>'; document.getElementById('fnddest').style.display='block';document.getElementById('fooform2').style.display='block';"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
</div>
	</div>
	
 

<br class="clear" />





	</div>
	<div class="foot"></div>
</div>


<!-- /ESEMPIO PER L'OVERLAYER -->


<h1>SWITCH</h1>
<p>Lo switch ti consente di passare da un fondo comune/sicav a un altro, gestito dalla stessa societ&agrave; di gestione.</p>
<div class="tithelp">
	<div class="helpleft">Seleziona il fondo da vendere</div>	
<br class="clear" /></div>

<table class="form01 out">	
	<tr> 
		<td width="105" class="uno">Deposito titoli</td>
		<td width="220" id="campo01"><select name="select"  class="lungmax">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select></td>
		<td width="105" class="uno">Fondo</td>
		<td width="225" id="campo02"><select name="select"  class="lungmax">
		<option>-- seleziona --</option>
		<option>-----------------------</option>
		</select></td>
	</tr>
	<tr> 
		<td class="uno">Valore quota/N.A.V. al gg/mm/aaaa</td>
		<td><strong>xxx,xxx VAL</strong> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span></td>
		<td class="uno">&nbsp;</td>
		<td><div><a title="Lorem ipsum" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>125 Link evidenziato dx</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div></td>
	</tr>
</table>




<div class="tithelp">
	<div class="helpleft">Scegli quali quote vuoi vendere</div>
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><br class="clear" /></div>
<br class="clear" /></div>

<table class="form01 out" id="table01">
	<tr> 
		<td colspan="4" class="grscuro"><input type="radio" class="nobor3" checked="" value="radiobutton" name="radiobutton">Quote provenienti da acquisto unico</td>
	</tr>
	<tr> 
		<td width="105" class="uno">N. quote/azioni del deposito</td>
		<td width="220"><strong>xxx,xxx</strong></td>
		<td width="105" class="uno">Controvalore</td>
		<td width="225"><strong>x.xxx,xxx VAL<br/>x.xxx,xxx EUR</strong> <span class="note">al cambio del gg/mm/aaaa</span></td>
	</tr>
	<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td><select name="select" class="lungmax">
				<option>599/471550/0 C/C 00599 - 0000081500 - EUR </option>
			</select></td>
		<td class="uno">&nbsp;</td>
		<td><input type="text" class="importo" name="text"> , <input type="text" maxlength="2" class="importo2" name="text"> <strong>EUR</strong><br/><span class="note">corrispondenti a <strong>xxx,xx VAL</strong>al cambio del gg/mm/aaaa e a <strong>xxx,xxx</strong> quote</span></td>
	</tr>
	<tr> 
		<td colspan="4" class="grscuro"><input type="radio" class="nobor3" checked="" value="radiobutton" name="radiobutton">Quote provenienti da PAC n. <strong>xxxxxxxx</strong></td>
	</tr>
	<tr> 
		<td class="uno">N. quote/azioni del deposito</td>
		<td><strong>xxx,xxx</strong></td>
		<td class="uno">Controvalore</td>
		<td><strong>x.xxx,xxx VAL<br/>x.xxx,xxx EUR</strong> <span class="note">al cambio del gg/mm/aaaa</span></td>
	</tr>
	<tr> 
		<td class="uno">Importo rata</td>
		<td><strong>xxx EUR</strong></td>
		<td class="uno">Rate residue</td>
		<td><strong>xx</strong></td>
	</tr>
	<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td><select name="select"  class="lungmax">
		<option>-- seleziona --</option>
		<option>---------------------------------------------</option>
		</select></td>
		<td class="uno">&nbsp;</td>
		<td><input type="text" class="importo" name="text"> , <input type="text" maxlength="3" class="importo3" name="text">  <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span><br/><span class="note">corrispondenti a <strong>xxx,xx EUR</strong> e <strong>xxx,xx<br/>VAL</strong> al cambio del gg/mm/aaaa</span></td>
	</tr>
	<tr> 
		<td colspan="4" class="grscuro"><input type="radio" class="nobor3" checked="" value="radiobutton" name="radiobutton">Quote provenienti da PAC n. <strong>xxxxxxxx</strong></td>
	</tr>
	<tr> 
		<td class="uno">N. quote/azioni del deposito</td>
		<td><strong>xxx,xxx</strong></td>
		<td class="uno">Controvalore</td>
		<td><strong>x.xxx,xxx VAL<br/>x.xxx,xxx EUR</strong> <span class="note">al cambio del gg/mm/aaaa</span></td>
	</tr>
	<tr> 
		<td class="uno">Importo rata</td>
		<td><strong>xxx EUR</strong></td>
		<td class="uno">Rate residue</td>
		<td><strong>xx</strong></td>
	</tr>
	<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td><select name="select"  class="lungmax">
		<option>-- seleziona --</option>
		<option>---------------------------------------------</option>
		</select></td>
		<td class="uno">Vuoi anche estinguere il PAC?</td>
		<td><div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"> NO</div> <div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"> SI</div></td>
	</tr>
</table>

<table class="form01 out" id="table02" style="display:none">
<tr> 
		<td class="uno">N. quote/azioni del deposito</td>
		<td><strong>xxx,xxx</strong></td>
		<td class="uno">Controvalore</td>
		<td><strong>x.xxx,xxx VAL<br/>x.xxx,xxx EUR</strong> <span class="note">al cambio del gg/mm/aaaa</span></td>
	</tr>
	<tr> 
		<td class="uno">Importo rata</td>
		<td><strong>xxx EUR</strong></td>
		<td class="uno">Rate residue</td>
		<td><strong>xx</strong></td>
	</tr>
	<tr> 
		<td class="uno">N. contatto PAC</td>
		<td colspan="3"><strong>xxxxx</strong></td>
		
	</tr>
	<tr> 
		<td class="uno">Quante quote vuoi vendere?</td>
		<td><strong>xxx</strong>
		
		
		</td>
		<td class="uno">Vuoi anche estinguere il PAC?</td>
		<td><div class="nobor3"><div class="nobor3"><strong> SI </strong></div></td>
	</tr> 

</table>

<div class="fooform">	
	<div class="fooformright">
		<div id="fooform1"><a title="lorem ipsum" class="btnformright" href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert2'); "><img alt="" src="/img/ret/btn_left_ar.gif" /><span>cerca il fondo di destinazione</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		<div id="fooform2" style="display:none"><a title="lorem ipsum" class="btnformright" href="#1" onclick="javascript:visualizzaInf2();"><img alt="" src="/img/ret/btn_left_ar.gif" /><span>modifica</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>


<div id="fnddest" style="display:none">

<div class="tithelp">
<div class="helpleft">Fondo di destinazione</div>
<br class="clear"/></div>

<table class="form01 out">
	<tr>
		<td class="uno" width="105">Fondo</td>
		<td><a href=""><strong>Fondo 1</strong></a></td>
		<td class="uno" width="105"></td>
		<td><div id="btn01"><a href="#1" class="btnevid1" title="scegli un altro fondo"  onclick="javascript:obscurateAll(1); openAlert('layeralert2'); "><img src="/img/ret/btn_left_sm1.gif" alt=""/><span>scegli un altro fondo</span><img src="/img/ret/btn_right_sm1.gif" alt=""/></a></div></td>
	
	</tr>
	
	<tr>
		<td class="uno" width="105">Modalit&agrave; di investimento</td>
		<td><strong>Nome societ&agrave;</strong></td>
		<td class="uno" width="105">Categoria Fondo</td>
		<td><strong>Categoria</strong></td>
	
	</tr>
	
	<tr>
		<td class="uno" width="105">Societ&agrave; di gestione</td>
		<td><strong>Unico acquisto (PIC)</strong></td>
		<td class="uno" width="105">Valore/Quota NAV. del gg/mm/aaaa</td>
		<td><strong>xxx,xx VAL <span class="tooltip"><a href="#1" onmouseover="nascondi('lampa1');" onmouseout="vedi('lampa1');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span></strong></td>
	
	</tr>
	

	<tr>
		<td class="uno" width="105">Acquisto minimo prima sottoscrizione</td>
		<td><strong>xxx Eur</strong></td>
		<td class="uno" width="105">Acquisto minimo sottoscrizioni successive</td>
		<td><strong>xxx Eur</strong></td>
	
	</tr>
	<tr>
		<td class="uno" width="105">Spese di ingresso</td>
		<td><strong>xxx%</strong></td>
		<td class="uno" width="105">Spese di gestione</td>
		<td><strong>xxx%</strong></td>
	
	</tr>
	<tr>
		<td class="uno" width="105">Spese di uscita</td>
		<td><strong>xxx%</strong></td>
		<td class="uno" width="105">Spese diritti fissi</td>
		<td><strong>xxx Eur</strong></td>
	
	</tr>


</table>

<div class="fooform">	
	
	<div class="fooformright">
		<div><a onclick="visualizzaInf()" title="prosegui" class="btnformright" href="javascript:;"><img alt="" src="/img/ret/btn_left_ar.gif"/><span id="btnaddinf">prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>

</div>

<div id="forminf" style="display:none;">
<div class="tithelp">
<div class="helpleft">Lorem ipsum dolor</div>
<br class="clear"/></div>
<table class="form01">
<tr>
	
	<td colspan="4"><strong>Tempistiche dell'ordine<br/></strong><p>Poich&eacute; l'ordine &egrave; stato inserito dopo l'orario di chiusura (xx.xx) l'inserimento avverr&agrave;il prossimo giorno lavorativo.</p>
	<table cellspacing="0" cellpadding="0" class="timetable">
				
				<tr class="timerow">
					<td class="timerow1"></td>
					<td class="timerow2"></td>
					<td class="timerow3"></td>
					<td class="timerow4"></td>
					<td class="timerow5"></td>
					<td class="timerow6 off"></td>
					<td class="timerow7 off"></td>
				</tr>
				
				<tr class="timeday">
					<td class="selected">oggi</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				<tr class="timedesc">
					<td>
						<ul>
							<li>Stato ordine: <strong>inserito</strong></li>
						</ul>
					</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table></td>
</tr>
	
<tr>
	
	<td colspan="4">
		<strong>Prospetto informativo<br/></strong><p>Prima di aderire all'investimento, leggere attentamente il <a href="">prospetto informativo</a></p>
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton" disabled="disabled"/>
		<span class="txtinput txtinputlungo">Confermo che o preso visione dell'intera informativa offertami ed in particolare del proseptto informativo e del modulo di sottoscrizione, e di averne acquisito copia su supporto duraturo.</span>
	</td>
	
</tr>
<tr>
	
	<td colspan="4">
		<strong>Consenso al trattamento dei a dati personali</strong>
		<textarea class="read" name="textarea" readonly="readonly">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, 
quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qu</textarea>
<div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/> 
		Do il consenso</div>
		<div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/> 
		Nego il consenso</div>
	</td>
	
</tr>
<tr>
	
	<td colspan="4">
		<strong>Avvertenze sull'operazione che stai effettuando</strong>
		<p>Ti preghiamo di prenderne visione. Potrai a tua scelta decidere di annnullare l'operazione o procedere con l'immissione dell'ordine sul mercato.</p>
		<ul><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li></ul>
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
		<span class="txtinput txtinputlungo">Nonostante le suddette premesse, intendo comunque proseguire nell'inserimento dello'ordine</span>
	</td>
	
</tr>
<tr>
	
	<td colspan="4">
		<strong>Lorem ipsum</strong>
		<p>Ti segnaliamo che, in relazione all'operazione che stai per concludere, abbiamo percepito/percepiremo un incentivo dalla societ&agrave;emittente nella misura specificata nel <a href="">documento allegato</a></p>
		<div class="nobor3">
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
		<span class="txtinput txtinputlungo">Dichiaro di aver preso visione delle informazioni relative agli incentivi percepiti da WeBank S.p.A in relazione alla presente operazione, di cui autorizzo espressamente l'esecuzione.</span>
		</div>
	</td>
	
</tr>
<tr>
	
	<td colspan="4">
		<strong>Dichiarazioni di conferme</strong>
		<textarea class="read" name="textarea" readonly="readonly">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, 
quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qu</textarea>
<div class="nobor3"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
<span class="txtinput txtinputlungo">Preso atto di quanto sopra, confermo la mia volont&agrave; di effettuare l'operazione di investimento richiesta, anche ai sensi e per gli effetti dell'art.27 del Regolamento Consob 11522/98.</span>
</div>
	</td>
	
</tr>


</table>
<div class="fooform">	
	
	<div class="fooformright">
		<div><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_inv_switch_esi.php&liv1=RI&ri2=2&ri3=2&ri4=2" ><img alt="" src="/img/ret/btn_left_ar.gif"/><span id="btnaddinf">Conferma e invia ordine</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>
</div>