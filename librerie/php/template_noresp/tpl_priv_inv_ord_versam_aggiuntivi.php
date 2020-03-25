<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX     FUNZIONE JAVASCRIPT A SOLO USO DIMOSTRATIVO DA NON  USARE NELLO SVILUPPO! XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<script type="text/javascript">
	function visualizzaInf(){
	var secondoform = document.getElementById('forminf');
	var btn = document.getElementById('btnaddinf');
	if(secondoform.style.display=="none"){
	secondoform.style.display="block"
	btn.innerHTML = 'Modifica';
	document.getElementById('campo1').innerHTML = '<strong>xxxxxxxxxxxxxxxxxxxxxxx</strong>';
	document.getElementById('campo2').innerHTML = '<strong>Fondo 1</strong>';
	document.getElementById('campo3').innerHTML = '<strong>xx</strong>';
	}
	else {
	secondoform.style.display="none"
	btn.innerHTML = 'Avanti';
	document.getElementById('campo1').innerHTML = '<select name="select" class="lungmax"><option>-- seleziona --</option><option>-----------------------</option></select>';
	document.getElementById('campo2').innerHTML = '<select name="select" class="lungmax"><option>-- seleziona --</option><option>-----------------------</option></select>';
	document.getElementById('campo3').innerHTML = '<span class="inputmap"><input type="text" value="1" name="text" class="piccolo"/> <img src="/img/ret/frecce.gif" usemap="#map1"/><map id="map1" name="map1"><area shape="rect" coords="0,0,9,5" href="#" alt="Aumenta di 1" title="Aumenta di 1"/><area shape="rect" coords="0,9,9,14" href="#" alt="Diminuisci di 1" title="Diminuisci di 1000"/></map></span><span class="tooltip fnd"><a href="#1" onmouseover="nascondi(\'lampa1\');" onmouseout="vedi(\'lampa1\');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"/><span><span><span>Ciascun versamento aggiuntivo è di importo pari a quello della rata del piano.</span></span></span></a></span>';
	}
	
	}
</script>	
	
<h1>Versamenti aggiuntivi PAC</h1>
<p>Grazie alla flessibilit&agrave; dei Piani di accumulo, puoi fare <strong>versamenti aggiuntivi</strong>, accorciando cos&igrave; la durata del piano.</p>
<div id="ErroriValidazione">
<div class="boxtop"><img border="0" alt="" src="/img/ret/box_msgtop.jpg"/></div>
<div class="boxtxt">
<p class="box_mess"><img border="0" class="dx" alt="" src="/img/ret/img_or_alertria.gif"/><img border="0" alt="" src="/img/ret/box_attenzione.jpg"/><br/>
	<!--strong>Lorem ipsum dolor sit amet.</strong-->
	
	<!-- strong>Errata compilazione form</strong--><br/>
</p>
<ul class="alert">
	<li>lorem ipsum</li>
</ul>

</div>
<div class="boxbottom"><img border="0" alt="" src="/img/ret/box_msgbottom.jpg"/></div>
</div>

<div class="tithelp">
<div class="helpleft">Dati ordine</div>
<br class="clear"/></div>

<table class="form01">
	<tr>
		<td width="105" class="uno">Deposito titoli</td>
		<td id="campo1" width="220">
			<select class="lungmax" name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select>
		</td>
		<td width="105" class="uno">Disponibilit&agrave; attuale</td>
		<td  width="225"><strong>10.000,00</strong></td>
	</tr>
	
		<tr>
		<td width="105" class="uno">Fondo</td>
		<td id="campo2">
			<select class="lungmax" name="select">
				<option>-- seleziona --</option>
				<option>-----------------------</option>
			</select>
		</td>
		<td width="105"></td>
		<td><div><a title="scheda fondo" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"/><span>scheda fondo</span><img alt="" src="/img/ret/btn_right_sm1.gif"/></a></div></td>
		
	</tr>
	<tr>
		<td width="105" class="uno">N.contratto PAC</td>
		<td>
			<strong>xxxxxxxxxx</strong>
		</td>
		<td width="105" class="uno">Investrimento totale</td>
		<td><strong>xxx.xxx Eur</strong></td>
	</tr>
	<tr>
		<td width="105" class="uno">Importo rata</td>
		<td>
			<strong>xxxxxxxxxx</strong>
		</td>
		<td width="105" class="uno"></td>
		<td></td>
	</tr>
		<tr>
		<td width="105" class="uno">Rate versate</td>
		<td>
			<strong>xx</strong>
		</td>
		<td width="105" class="uno">Rate residue</td>
		<td><strong>xx</strong></td>
	</tr>
	<tr>
		<td width="105" class="uno">Numero versamenti aggiuntivi</td>
		<td id="campo3">
			<span class="inputmap"><input type="text" class="piccolo" name="text" value="1"/> <img usemap="#map1" src="/img/ret/frecce.gif"/><map name="map1" id="map1"><area title="Aumenta di 1" alt="Aumenta di 1" href="#" coords="0,0,9,5" shape="rect"/><area title="Diminuisci di 1000" alt="Diminuisci di 1" href="#" coords="0,9,9,14" shape="rect"/></map></span>
			<span class="tooltip fnd"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"/><span><span><span>Ciascun versamento aggiuntivo &egrave; di importo pari a quello della rata del piano.</span></span></span></a></span>
		</td>
		<td width="105" class="uno"></td>
		<td></td>
	</tr>
	

</table>
<div class="fooform">	
	<div class="fooformleft">
		<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>situazione PAC</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a></div>
	<br class="clear"/>
	</div>	
	<div class="fooformright">
		<div><a href="javascript:;" class="btnformright" title="lorem ipsum" onclick="visualizzaInf()"><img src="/img/ret/btn_left_ar.gif" alt=""/><span id="btnaddinf">Avanti</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>

<div id="forminf" style="display:none;">
<div class="tithelp">
<div class="helpleft">Lorem ipsum dolor</div>
<br class="clear"/></div>
<table class="form01 form01b">
<tr>
	
	<td colspan="4"><strong class="verde">Tempistiche dell'ordine<br/></strong><p>Poich&eacute; l'ordine &egrave; stato inserito dopo l'orario di chiusura (xx.xx) l'inserimento avverr&agrave;il prossimo giorno lavorativo.</p>
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
		<strong class="verde">Prospetto informativo<br/></strong><p>Prima di aderire all'investimento, leggere attentamente il <a href="">prospetto informativo</a></p>
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton" disabled="disabled"/>
		<span class="txtinput txtinputlungo">Confermo che o preso visione dell'intera informativa offertami ed in particolare del proseptto informativo e del modulo di sottoscrizione, e di averne acquisito copia su supporto duraturo.</span>
	</td>
	
</tr>
<tr>
	
	<td colspan="4">
		<strong class="verde">Consenso al trattamento dei a dati personali</strong>
		<div class="texta read">
        Ad integrazione dei moduli di richiesta dei Servizi di internet banking (per le persone fisiche), nonché delle Norme Generali
        che regolano il Servizio medesimo, La Banca rende disponibili attraverso il Servizio Estratto Conto e Contabili on line le
        seguenti comunicazioni:
        <ul class="lista">
        	<li>Estratto di Conto Corrente e Custodia titoli.</li>
          <li>Documenti contabili relativi a: Cedole e dividendi, Compravendita titoli, operazioni di bonifico e giro conto (sia in entrata che in uscita), operazioni di accredito emolumenti, operazioni di storno.</li>
          <li>Altre operazioni differenti dalle precedenti nonché quelle diverse che la Banca potrà rendere disponibili in futuro tramite il sito all'indirizzo www.wbcol.col - Area Privata.<br>La Banca potrà altresì limitare o sospendere il Servizio Estratto Conto e Contabili on line relativamente a talune comunicazioni.</li>
				</ul>
				<br />
				<strong>Titolo paragrafo</strong><br>
				Lorem ipsum lorem ipsum
			</div>
			
		<!-- textarea class="read" name="textarea" readonly="readonly">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, 
quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qu</textarea -->
Ti preghiamo di prenderne visione. Potrai a tua scelta decidere di annnullare l'operazione o procedere con l'immissione dell'ordine sul mercato.

<div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/> 
		<strong class="small">Lorem ipsum lorem ipsum lorem ipsum</strong></div><br class="clear" />
		<div class="nobor3"><input type="radio" class="nobor3" value="radiobutton" name="radiobutton"/> 
		<strong class="small">Lorem ipsum lorem ipsum lorem ipsum</strong></div>
	</td>
	
</tr>
<tr>
	<td colspan="4">
		<strong class="verde">Avvertenze sull'operazione che stai effettuando</strong>
		<p>Ti preghiamo di prenderne visione. Potrai a tua scelta decidere di annnullare l'operazione o procedere con l'immissione dell'ordine sul mercato.</p>
		Lorem ipsum lorem ipsum:
		<ul class="small"><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li><li>Lorem ipsum</li></ul>
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
		<span class="txtinput txtinputlungo"><strong class="small">Nonostante le suddette premesse, intendo comunque proseguire nell'inserimento dell'ordine</strong></span>
	</td>
</tr>
<tr>
	<td colspan="4">
		<strong class="verde">Lorem ipsum</strong>
		<p>Ti segnaliamo che, in relazione all'operazione che stai per concludere, abbiamo percepito/percepiremo un incentivo dalla societ&agrave;emittente nella misura specificata nel <a href="">documento allegato</a></p>
		<div class="nobor3">
		<input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
		<span class="txtinput txtinputlungo"><strong class="small">Dichiaro di aver preso visione delle informazioni relative agli incentivi percepiti da WeBank S.p.A in relazione alla presente operazione, di cui autorizzo espressamente l'esecuzione.</strong></span>
		</div>
	</td>
</tr>
<tr class="noborder">
	<td colspan="4"><strong class="verde">Dichiarazioni di conferme</strong><br />
	Poich&eacute; l'ordine &egrave; stato inserito dopo l'orario di chiusura (xx.xx) l'inserimento avverr&agrave;il prossimo giorno lavorativo.</td>
</tr>
<tr class="noborder">
	<td class="uno">Nome e Cognome</td>
	<td><strong>Testo di output</strong></td>
	<td class="uno">Deposito titoli</td>
	<td><strong>Testo di output</strong></td>
</tr>
<tr class="noborder">
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
</tr>
<tr class="noborder">
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
</tr>
<tr class="noborder">
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
</tr>
<tr>
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
	<td class="uno">Lorem ipsum</td>
	<td><strong>Testo di output</strong></td>
</tr>

<tr>
	<td colspan="4">
		<strong class="verde">Dichiarazioni di conferme</strong><br />
		<textarea class="read" name="textarea" readonly="readonly">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, 
quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qu</textarea>
<div class="nobor3"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>
<span class="txtinput txtinputlungo"><strong class="small">Preso atto di quanto sopra, confermo la mia volont&agrave; di effettuare l'operazione di investimento richiesta, anche ai sensi e per gli effetti dell'art.27 del Regolamento Consob 11522/98.</strong></span>
</div>
	</td>
	
</tr>


</table>
<div class="fooform">	
	
	<div class="fooformright">
		<div><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_inv_ord_versam_aggiuntivi_rie.php&liv1=RI&ri2=2&ri3=2&ri4=3" ><img alt="" src="/img/ret/btn_left_ar.gif"/><span id="btnaddinf">Conferma e invia ordine</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>
</div>
	



