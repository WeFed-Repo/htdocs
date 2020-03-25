<h1 id="id_label">PRONTI CONTRO TERMINE - MYPROFIT</h1>
<br class="clear" />
<!-- Tabella testo -->
<table class="text01">
<tr>
	<td>Con <strong>MyProfit</strong>, l'offerta di <a href="#1">Pronti contro termine</a> di Webank, sei tu a decidere la durata dell'investimento: da 3 a 9 mesi.
	Al termine dell'investimento ti sar&agrave; <strong>immediatamente accreditato</strong> il capitale iniziale maggiorato del rendimento dell'operazione.</td>
</tr>
</table>
<!-- Fine Tabella testo -->
<br />
<!-- Tabella rendimento -->
<?php virtual ("/librerie/include/commons/boxeditoriali/box_black_priv_053b.php"); ?>
<br />
<!-- Fine Tabella rendimento -->

<!-- Calcolatore-->
<img src="/img/ret/calcola.gif" onclick="this.style.display='none';document.getElementById('calcola_on').style.display='block';" id="calcola_off" />

<div id="calcola_on">
	<img src="/img/ret/sim_tit.gif" onclick="document.getElementById('calcola_on').style.display='none';document.getElementById('calcola_off').style.display='block';" />
	<form action="javascript:executeEventoCalcolatore('invio');" method="post">
		<p class="alto">
			<label for="capitale">Importo nominale</label>
			<input type="text" name="capitalePct" id="capitale" size="3" maxlength="3" onkeyup="executeEventoCalcolatore('false')" /> .000 &euro; 
				<img src="/img/ret/frecce.gif" usemap="#map0">
				<map id="map0" name="map0">
					<area shape="rect" coords="0,0,9,5"  href="javascript:selettoreCapitaleUp( '0' );" alt="Aumenta di 1000" title="Aumenta di 1000" />
					<area shape="rect" coords="0,9,9,14" href="javascript:selettoreCapitaleDown( '0' );"  alt="Diminuisci di 1000" title="Diminuisci di 1000" />
				</map> &nbsp;<b>max 250.000 &euro;</b> 
			<label for="durataPct" class="durata">Durata</label>
			<select id="durataPct" name="durataPct"  onchange="javascript:loadXmlCalcoloPct();" title="Selezionare la durata">							
				<option value="1*0,35" >1 mese</option>							
				<option value="3*0,40" >3 mesi</option>							
				<option value="6*0,45" >6 mesi</option>							
			</select>						
		</p>
		<div id="contenitorePct" >
			<div id="contenuto_calcolatore">
				<table>
					<tr>
						<th>&nbsp;</th>
						<th>PRONTI CONTRO TERMINE</th>
					</tr>
					<tr>
						<td class="td5">Tasso netto</td>
						<td class="td1" id="interNettoPCT" >&nbsp;</td>
					</tr>
					<tr>
						<td class="td6">Rendimento netto</td>
						<td class="td3" id="rendNettoPCT" >&nbsp;</td>

					</tr>
				</table>
			</div>
		</div>
	</form>
	<p class="note">* Il calcolo effettuato &egrave; puramente indicativo.<br/>
	Il tasso annuo utilizzato per il calcolo del rendimento dei Pronti contro termine &egrave; quello pubblicato giornalmente dalla Banca.
	</p>
</div>
<!-- Fine Calcolatore-->
			
<!-- Tabella per procedere con l'investimento -->	
<br />	
<!-- Riga di testo -->
<table class="text01">
<tr>
	<td>Seleziona la <strong>durata</strong> (vincolata) dell'investimento e inserisci l'<strong>importo nominale</strong> che vuoi investire in MyProfit.<br />
	Ricorda che l'importo nominale deve essere compreso tra 1.000 &euro; (o multipli) e 500.000 &euro;.</td>
</tr>
</table>
<br class="clear"/>
<!-- Box di errore -->
<div class="boxalert" style="display: block;">
	<div class="boxalertimage">
		<img src="/wscmn/img/ret/img_or_warning.gif">
	</div>
	<div class="boxalertdescription">
		<span class="boxalerttitle">Attenzione si è verificato un errore nel caricamento della tabella</span>
		<p>
			Lorem ipsum dolor sit amet, CONSECTETUR ADIPISCING ELIT, lorem dolor amet consectetur elit. Lorem ipsum dolor sit amet, lorem dolor et Pai, lorem dolor amet consectetur elit. Dolor amet lorem ipsum.
		</p>		
	</div>
</div>
<!-- Fine Box di errore -->
<br class="clear" />
<br />
<!-- Selettore rapporto -->
<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_004_nosd.php"); ?>
<!-- Fine Selettore rapporto -->
<br />
<!-- tabella acquisto -->
<table cellpadding="0" cellspacing="0" class="condiza rev">
<tr class="color colora"> 
  <td style="width:85px;">Durata</td>
  <td style="width:100px">Data inizio</td>
  <td style="width:100px">Data fine</td>
  <td style="width:110px">Tasso netto</td>
  <td style="width:180px">Importo nominale</td>
</tr>
	
<tr class="dispari bordertop"> 
  <td class="left"><input type="radio" name="durata" id="radio1" value="1" onclick="setCampoTesto(1);" >1 mese</td>
  <td class="center">16/02/2011</td>
  <td class="center">16/03/2011</td>
  <td class="right">0,35%</td>
  <td class="left last">
	<input type="text" size="3" maxlength="3" class="mapinp" />
	<span class="maptxt">&nbsp;.000 </span>	
	<img src="/img/ret/frecce.gif" usemap="#map1" class="mapfr">
	<map id="map1" name="map1" class="mappafrec">
		<area shape="rect" coords="0,0,9,5" href="javascript:selettoreCapitaleUp('1');" alt="Aumenta di 1000" title="Aumenta di 1000" />
		<area shape="rect" coords="0,9,9,14" href="javascript:selettoreCapitaleDown('1');" alt="Diminuisci di 1000" title="Diminuisci di 1000" />
	</map> 
	<span class="maptxt">&nbsp;max 250.000 &euro;</span>
   </td>
</tr>					  

<tr class="pari bordertop"> 
  <td class="left"><input type="radio" name="durata" id="radio1" value="1" onclick="setCampoTesto(1);" >3 mesi</td>
  <td class="center">16/02/2011</td>
  <td class="center">16/05/2011</td>
  <td class="right">0,40%</td>
  <td class="left last">
	<input type="text" size="3" maxlength="3" class="mapinp" />
	<span class="maptxt">&nbsp;.000 </span>	
	<img src="/img/ret/frecce.gif" usemap="#map1" class="mapfr">
	<map id="map1" name="map1" class="mappafrec">
		<area shape="rect" coords="0,0,9,5" href="javascript:selettoreCapitaleUp('1');" alt="Aumenta di 1000" title="Aumenta di 1000" />
		<area shape="rect" coords="0,9,9,14" href="javascript:selettoreCapitaleDown('1');" alt="Diminuisci di 1000" title="Diminuisci di 1000" />
	</map> 
	<span class="maptxt">&nbsp;max 250.000 &euro;</span>
   </td>
</tr>	  

<tr class="dispari bordertop"> 
  <td class="left"><input type="radio" name="durata" id="radio1" value="1" onclick="setCampoTesto(1);" >6 mesi</td>
  <td class="center">16/02/2011</td>
  <td class="center">16/08/2011</td>
  <td class="right">0,45%</td>
  <td class="left last">
	<input type="text" size="3" maxlength="3" class="mapinp" />
	<span class="maptxt">&nbsp;.000 </span>	
	<img src="/img/ret/frecce.gif" usemap="#map1" class="mapfr">
	<map id="map1" name="map1" class="mappafrec">
		<area shape="rect" coords="0,0,9,5" href="javascript:selettoreCapitaleUp('1');" alt="Aumenta di 1000" title="Aumenta di 1000" />
		<area shape="rect" coords="0,9,9,14" href="javascript:selettoreCapitaleDown('1');" alt="Diminuisci di 1000" title="Diminuisci di 1000" />
	</map> 
	<span class="maptxt">&nbsp;max 250.000 &euro;</span>
   </td>
</tr>	
</table>
<!-- Fine tabella acquisto -->

<!-- Pulsanti -->
<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 2</div>	
	<div class="fooformright">
		<div><a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_pct_step2.php" class="btnformright" title="investi"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>investi</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>
<!-- Fine Pulsanti -->