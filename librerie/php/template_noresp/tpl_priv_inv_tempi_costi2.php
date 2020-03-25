
<h1>Tempi e costi</h1>
<div class="divtabellalist">
	<table border="0" class="tabellalist">
					<tr>
						<td class="off"><a  title="Lorem ipsum" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_invp.php&liv1=RI&ri2=2&ri3=0&ri4=2">Tempistiche</a></td>
						<td class="on first"><a  title="Lorem ipsum lorem" href="#1">Costi e commissioni</a></td>
						<td class="off"><a  title="Lorem ipsum" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_inv_tempi_costi3.php&liv1=RI&ri2=2&ri3=0&ri4=2">Tassazione</a></td>
						<td class="end"> </td>
						
					</tr>
	</table>
</div>


	<div>		
		<?php if ($bank == "webank") {	?>
		<script type="text/javascript">
window.onload = function() 
{
	$('#primo').css('display','block');
	$('#selectSoc').prop("selectedIndex",0); 
}


function showCont()
{
	var divToShow = $('div.costcomm');
	var select = $('#selectSoc');
	var indice = $('#selectSoc').prop("selectedIndex");
	divToShow.hide();
	divToShow.eq(indice).show();
}

</script> 
<ul>
<li>Nella tabella sono riportati i <strong>diritti fissi</strong> e le <strong>commissioni di ingresso.</strong></li>
<li>Per le commissioni di gestione o altre commissioni previste si rimanda ai <strong>Prospetti</strong> e ai <strong>Regolamenti di gestione dei fondi.</strong></li>
</ul>
<img alt="Costi e Commissioni" src="/img/ret/ban_costi_commissioni.gif"  /><br /><br />
<!-- Select di scelta società -->
<div class="tithelp"><div class="helpleft">Scegli la societ&agrave; di gestione</div></div>
<table class="form01">
	<tr> 
		<td width="105" class="uno">Societ&agrave; di gestione</td>
		<td width="550">
		<select name="selectSoc" id="selectSoc" onchange="showCont();">
			<option>Anima Sgr</option>
			<option>BlackRock</option>
			<option>Epsilon Sgr</option>
			<option>Etica Sgr</option>
			<option>Eurizon Capital Sgr</option>
			<option>Franklin Templeton</option>
			<option>J.P Morgan Asset Management</option>
			<option>Schroder IM</option>
			<option>Threadneedle</option>
			<option>MG</option>
			<option>Julius Bar</option>
		</select>
		</td>
		</tr>
</table>

<!-- Anima -->
<div id="primo" class="costcomm" style="display:none">
	 <div class="tabtop">
		<a href="" class="flLeft"><img alt="Anima Sgr" src="/img/ret/logo_anima.gif" class="tabtopimg" /></a>
		<a href="#" class="colorBank flRight">Cerca tutti i fondi di lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit ></a>
	 </div>
	<table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2" width="430">Commissioni</th>
				<th class="tabsmstit1left" width="60">Diritti fissi</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left" rowspan="4" width="90"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left" width="60"><span class="tipo">Attive</span></td>
				<td class="tabsmstit3center" colspan="2"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>6 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Anima</span></td>
				<td class="tabsmstit3left" colspan="2"><strong class="center"><span class="linrtr">max 4%</span><span>ZERO</span> (esclusi PAC)</strong>
				<span class="dett">In caso di sottoscrizione Pac, le commissioni, calcolate sull'importo complessivo del piano, sono prelevate per il 30% al momento del versamento iniziale e per il restante 70% in maniera lineare sui versamenti successivi</span></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit">
			
				<td class="tabsmstit3left"><span class="tipo">Capitale pi&ugrave;</span></td>
				<td class="tabsmstit3left" colspan="2"><strong class="center"><span class="linrtr">1 %</span><span>ZERO</span>  (esclusi PAC)</strong></td>
				<td class="tabsmstit3center"><strong>6 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit">
			
				<td class="tabsmstit3left"><span class="tipo">Anima Traguardo II 2016 </span></td>
				<td class="tabsmstit3left" colspan="2"><strong class="center">ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			
			<tr class="tabsmstit3">
				<td class="tabsmstit3left" rowspan="3"><strong>Versamento aggiuntivo Pac</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Attive</span></td>
				<td class="tabsmstit3center" colspan="2"><strong>ZERO</strong></td>
				<td class="tabsmstit3center" rowspan="3"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
			
				<td class="tabsmstit3left"><span class="tipo">Anima</span></td>
				<td class="tabsmstit3left" colspan="2"><strong class="center">max 4%</strong>
				<span class="dett">Le commissioni, calcolate sull'importo complessivo del piano, sono prelevate per il 30% al momento del versamento iniziale e per il restante 70% in maniera lineare sui versamenti successivi</span></td>
				
			
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Capitale pi&ugrave;</span></td>
				<td class="tabsmstit3left" colspan="2"><strong class="center">1%</strong></td>
				
			</tr>
			<tr class="tabsmstit4">
				<td  class="tabsmstit3left" rowspan="4"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Attive</span></td>
				<td class="tabsmstit3left bordott" rowspan="4" valign="top" width="200">
					<span>
						<ul>
							<li>switch tra fondi senza commissioni</li>
							<li>switch tra fondi con commissioni</li>
							<li>switch da fondi con commissioni a fondi senza commissioni</li>
						</ul><br />
						<strong class="center">ZERO</strong><br /><br /><br />
						<ul class="eldett"><li><span class="dett">Da <strong>Capitale Pi&ugrave;</strong> a <strong>Sistema Anima</strong> e viceversa, si apllicano le commissioni previste dal fondo entrante</span></li></ul>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding" rowspan="4" valign="top" width="">
					<span class="bordott">
						<ul>
							<li>switch da fondi senza commissioni a fondi con commissioni</li>
						</ul><br /><br /><br />
						<strong class="center">Paghi le commissioni di sottoscrizione<br /> del fondo entrante</strong><br /><br />
						<ul class="eldett"><li><span class="dett">Da <strong>Anima Liquidit&agrave;</strong> ad altro fondo del <strong>Sistema Anima</strong> non si applicano le commissioni se l'entrata in <strong>Anima Liquidit&agrave;</strong> &egrave; frutto di uno switch riveniente da fondo con commissioni appartenente al <strong>Sistema Anima</strong></span></li></ul><br /><br />
						<ul class="eldett"><li><span class="dett">Da <strong>Anima Traguardo II 2016</strong> ad altro fondo con commissioni di  sottoscrizione: si applicano  le commissioni di uscita  previste da Anima Traguardo II 2016 e le commissioni di sottoscrizione previste dal fondo entrante . Non &egrave; consentito lo  switch tra <strong>Anima Traguardo II 2016</strong> e <strong>Capitale Pi&ugrave;</strong>. 
</span></li></ul>
					</span>
				</td>
				<td class="tabsmstit3center" rowspan="2"><strong>3,5 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Anima</span></td>
			</tr>
			<tr class="tabsmstit">
				<td class="tabsmstit3left"><span class="tipo">Capitale pi&ugrave;</span></td>
				
				<td class="tabsmstit3center"><strong>6 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit">
				<td class="tabsmstit3left"><span class="tipo">Anima Traguardo II 2016 
</span></td>
				
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left" rowspan="4"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Attive</span></td>
				<td class="tabsmstit3center" colspan="2" rowspan="3"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Anima</span></td>
				<td class="tabsmstit3center"><strong>4 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Capitale pi&ugrave;</span></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Anima Traguardo II 2016</span></td>
				<td class="tabsmstit3center" colspan="2">
				<table>
				<tr class="tabsmstit3">
					<td><strong>uscita 1° anno 3,50%</strong></td>
					<td><strong>uscita 2° anno 3,00%</strong></td>
					<td><strong>uscita 3° anno 2,50%</strong></td>
					<td><strong>uscita 4° anno 1,50%</strong></td>
					<td><strong>uscita 5° anno 1,00%</strong></td>				
				</tr>
				</table>
				</td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
		
		
</table>
	
</div>
<!-- BlackRock-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="BlackRock" src="/img/ret/logo_blackrock.gif" class="tabtopimg" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni</th>
				<th class="tabsmstit1left">Diritti Banca Corrispondente</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left" width="90"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left" width="70"><span class="tipo">Azioni Classe E</span></td>
				<td colspan="2" class="tabsmstit3left"><strong class="center"><span class="linrtr">3%</span><span>ZERO</span> </strong></td>
				<td class="tabsmstit3center"><strong>38 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe E</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe E</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>38 &euro;</strong></td>
			</tr>
	</table>
</div>


<!-- Epsilon sgr-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Epsilon Sgr" src="/img/ret/logo_epsilon.gif" class="tabtopimg" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left">Commissioni</th>
				<th class="tabsmstit1left">Diritti Fissi</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Versamento iniziale e aggiuntivo PAC</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
	</table>
</div>

<!-- Etica sgr-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Etica Sgr" src="/img/ret/logo_etica.gif"  class="tabtopimg" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left">Commissioni</th>
				<th class="tabsmstit1left">Diritti Fissi</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>10 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Versamento iniziale PAC</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>10 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Versamento aggiuntivi PAC</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>10 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
	</table>
</div>

<!-- Eurizon Capital sgr-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Eurizon Sgr" src="/img/ret/logo_eurizon.gif"/></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni</th>
				<th class="tabsmstit1left" width="">Diritti fissi</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left" rowspan="4"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left" width=""><span class="tipo">Mercati</span></td>
				<td class="tabsmstit3center" colspan="2" rowspan="4"><strong>ZERO</strong></td>
				<td class="tabsmstit3center" rowspan="4"><strong>5 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Risposte</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Etico</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Strategie di investimento</span></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left" rowspan="4"><strong>Switch</strong></td>
				<td class="tabsmstit3left" width=""><span class="tipo">Mercati</span></td>
				<td class="tabsmstit3center" colspan="2" rowspan="4"><strong>ZERO</strong></td>
				<td class="tabsmstit3center" rowspan="4"><strong>2 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Risposte</span></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Etico</span></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><span class="tipo">Strategie di investimento</span></td>
			</tr>
				<tr class="tabsmstit4">
				<td class="tabsmstit3left" rowspan="4"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left" width=""><span class="tipo">Mercati</span></td>
				<td class="tabsmstit3center" colspan="2" rowspan="4"><strong>ZERO</strong></td>
				<td class="tabsmstit3center" rowspan="4"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Risposte</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Etico</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Strategie di investimento</span></td>
			</tr>
	</table>
</div>

<!-- Franklin-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Franklin Templeton" src="/img/ret/logo_franklin.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="4">Commissioni</th>
				<th class="tabsmstit1left">Diritti Banca Corrispondente</th>
			</tr>
			<tr class="tabsmstit4">
				<td rowspan="7" class="tabsmstit3left"><strong>Sottoscrizione</strong></td>
				<td rowspan="6" class="tabsmstit3left" width="60"><span class="tipo">Azioni<br/>Classe A</span></td>
				<td class="tabsmstit3center" width="75">&nbsp;</td>
				<td class="tabsmstit3center"><strong>Azionari e Bilanciati</strong></td>
				<td class="tabsmstit3center"><strong>Obbligazionari</strong></td>
				<td class="tabsmstit3center"><strong>Monetari e Liquidit&agrave;</strong></td>
				<td rowspan="7" class="tabsmstit3center"><strong>15 &euro;</strong></td>
			</tr>			
			<tr class="tabsmstit4">
				<td class="tabsmstit3center">fino a 35.000&euro;</td>
				<td class="tabsmstit3center"><span class="linrtr">4,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">3,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">1,00 %</span><span>ZERO</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3center">da 35.001&euro;<br/>a 100.000&euro;</td>
				<td class="tabsmstit3center"><span class="linrtr">3,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">2,50 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">0,75 %</span><span>ZERO</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3center">da 100.001&euro;<br/>a 200.000&euro;</td>
				<td class="tabsmstit3center"><span class="linrtr">2,50 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">2,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">0,50 %</span><span>ZERO</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3center">da 200.001&euro;<br/>a 400.000&euro;</td>
				<td class="tabsmstit3center"><span class="linrtr">2,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">1,50 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">0,00 %</span><span>ZERO</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3center">oltre 400.001&euro;</td>
				<td class="tabsmstit3center"><span class="linrtr">1,50 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">1,00 %</span><span>ZERO</span></td>
				<td class="tabsmstit3center"><span class="linrtr">0,00 %</span><span>ZERO</span></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><span class="tipo">Azioni<br/>Classe N</span></td>
				<td colspan="4" class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni<br/>Classe A e N</span></td>
				<td colspan="4" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni<br/>Classe A e N</span></td>
				<td colspan="4" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>15 &euro;</strong></td>
			</tr>
	</table>
</div>
<!--div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Franklin Templeton" src="/img/ret/logo_franklin.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni</th>
				<th class="tabsmstit1left">Diritti Banca Corrispondente</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe N</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>15 &euro;</strong></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe N</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe N</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>15 &euro;</strong></td>
			</tr>
	</table>
</div-->

<!-- Jp Morgan-->

<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="J.P Morgan" src="/img/ret/logo_morgan.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
		<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni</th>
				<th class="tabsmstit1left" width="">Diritti Banca Corrispondente</th>
		</tr>
		<tr class="tabsmstit4">
				<td  class="tabsmstit3left"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe D</span></td>
				<td class="tabsmstit3left bordott" valign="top" width="150">
					<span>
						<ul>
							<li>Comparti Obbligazionari</li>
							<li>Comparti Monetari</li>
						</ul><br /><br /><br />
						<strong class="center"><span class="linrtr">1,5%</span><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding" valign="top" width="150">
					<span class="bordott">
						<ul>
							<li>Comparti Azionari</li>
							<li>Comparti Bilanciati</li>
							<li>Comparti Obbligazionari Convertibili</li>
							
						</ul><br />
						<strong class="center"><span class="linrtr">2,5%</span><span>ZERO</span></strong><br /><br /><br />
						
					</span>
				</td>
				<td class="tabsmstit3center"><strong>0,15%</strong><br /><span class="dett"> min &euro; 12,50 &ndash; max &euro; 22,50</span></td>
			</tr>
			<tr class="tabsmstit3">
				<td class="tabsmstit3left"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe D</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>ZERO</strong></td>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left"><strong>Rimborso</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Azioni Classe D</span></td>
				<td colspan="2" class="tabsmstit3center"><strong>ZERO</strong></td>
				<td class="tabsmstit3center"><strong>0,15%</strong><br /><span class="dett"> min &euro; 12,50 &ndash; max &euro; 22,50</span></td>
			</tr>
	</table>
</div>

<!-- Schroders IM-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Schroders IM" src="/img/ret/logo_schroder.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
		<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="5">Commissioni</th>
				<th class="tabsmstit1left" width="100">Diritti Banca Corrispondente</th>
		</tr>
		<tr class="tabsmstit4">
				<td  class="tabsmstit3left" rowspan="3"><strong>Sottoscrizione, rimborso</strong></td>
				<td class="tabsmstit3left"rowspan="2" width="40"><span class="tipo">Azioni di tipo  &quot;A &quot;</span></td>
				<td class="tabsmstit3left no_borderbottom" valign="top" width="65">
					<span>
						<p>fino a <br/>25.822 &euro;</p>
						<strong class="center"><span class="linrtr">4,00%</span><br/><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding no_borderbottom" valign="top" width="70">
					<span class="bordott">
						<p>da 25.822 a <br /> 77.468 &euro;</p>
						<strong class="center"><span class="linrtr">3,00%</span><br/><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding no_borderbottom" valign="top" width="75">
					<span class="bordott">
						<p>da 77.469 a <br /> 129.114 &euro;</p>
						<strong class="center"><span class="linrtr">2,00%</span><br/><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding no_borderbottom" valign="top" width="75">
					<span class="bordott">
						<p>da 129.115 <br />a  413.165 &euro;</p>
						<strong class="center"><span class="linrtr">1,00%</span><br/><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding no_borderbottom" valign="top" width="75">
					<span class="bordott">
						<p>oltre 413.165 &euro;</p>
						<strong class="center"><span class="linrtr">0,50%</span><br/><span>ZERO</span></strong>
					</span>
				</td>
				<td class="tabsmstit3center" rowspan="3"><strong>40 &euro;</strong></td>
			</tr>
		
		<tr class="tabsmstit4">
			<td class="tabsmstit3left" colspan="5"><span class="dett">Calcolate con il &quot;beneficio di accumulo&quot;: per il calcolo delle commissioni vengono considerate le sottoscrizioni precedentemente effettuate</span></td>
			
		</tr>
		<tr class="tabsmstit4">
			<td class="tabsmstit3left"><span class="tipo">Azioni di tipo  &quot;B&quot;</span></td>
			<td class="tabsmstit3center" colspan="5"><strong>ZERO</strong></td>
		</tr>
		<tr class="tabsmstit3">
			<td  class="tabsmstit3left" colspan="2"><strong>Switch</strong></td>
			<td class="tabsmstit3center" colspan="5"><strong>ZERO</strong></td>
			<td class="tabsmstit3center"><strong>ZERO</strong></td>
		</tr>
	</table>
</div>

<!-- threadneedle IM-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Threadneedle" src="/img/ret/logo_threadneedle.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
		<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni</th>
				<th class="tabsmstit1left" width="">Diritti Banca Corrispondente</th>
		</tr>
		<tr class="tabsmstit4">
				<td  class="tabsmstit3left" rowspan="2"><strong>Sottoscrizione</strong></td>
				<td class="tabsmstit3left" width="160"><span class="tipo">Azioni Classe AE &ndash; AU &ndash; AEH</span></td>
				<td class="tabsmstit3left bordott" valign="top" width="130">
					<span>
						<ul>
							<li>Comparti Obbligazionari</li>
						</ul><br /><br /><br /><br /><br />
						<strong class="center"><span class="linrtr">2%</span><span>ZERO</span></strong>
					
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding" valign="top" width="">
					<span class="bordott">
						<ul>
							<li>Comparti Azionari</li>
							<li>Comparti Asset Allocation</li>
							<li>Comparti Absolute Return*</li>
							<li>Comparti Specialist</li>
						</ul><br />
						<strong class="center"><span class="linrtr">5%</span><span>ZERO</span></strong>
						<span class="dett">*ad eccezione del Comparto Target Return (US$) per il quale la commissione massima &egrave; pari al 3%</span>
					</span>
				</td>
				<td class="tabsmstit3center" rowspan="2"><strong>15 &euro;</strong></td>
		</tr>
		<tr class="tabsmstit4">
			<td class="tabsmstit3left"><span class="tipo">Azioni Classe DE &ndash; DU &ndash; DEH</span></td>
			<td class="tabsmstit3center" colspan="2"><strong>ZERO</strong></td>
		</tr>
		<tr class="tabsmstit3">
			<td  class="tabsmstit3left" colspan="2"><strong>Switch</strong></td>
			<td class="tabsmstit3center" colspan="2"><strong>ZERO</strong></td>
			<td class="tabsmstit3center"><strong>ZERO</strong></td>
		</tr>
		<tr class="tabsmstit4">
			<td  class="tabsmstit3left" colspan="2"><strong>Rimborso</strong></td>
			<td class="tabsmstit3center" colspan="2"><strong>ZERO</strong></td>
			<td class="tabsmstit3center"><strong>15 &euro;</strong></td>
		</tr>
	</table>
</div>

<!-- M&G-->
		<div class="costcomm" style="display:none">
			<div class="tabtop"><img alt="Threadneedle" src="/img/ret/logo_MG.gif" /></div>
		</div>
<!-- Julis Bar-->
		<div class="costcomm" style="display:none">
			<div class="tabtop"><img alt="Threadneedle" src="/img/ret/logo_JB.gif" /></div>
		</div>
		
		<!-- fine webank -->
		<?php } else if ($bank == "bpm"){ ?>
		
		<div>
	 <ul>
		<li>Nella tabella sono riportati i <b>diritti fissi</b> e le <b>commissioni di ingresso</b>.</li>
		<li>Per le commissioni di gestione o altre commissioni previste si rimanda ai <b>Prospetti</b> e ai <b>Regolamenti di gestione dei fondi</b>.</li> 
	</ul>
	<div class="tithelp">
		<div class="helpleft">Costi</div>
	</div>
	<br class="clear"/>
	<table cellspacing="0" cellpadding="0" border="0" class="tablesms">
<tr class="tabsmstit1">
	<th  class="tabsmstit1left">Societ&agrave; di gestione</th>
	<th class="tabsmstit1left" colspan="2">Operazione</th>
	<th  class="tabsmstit1left">Diritti fissi</th>
	<th class="tabsmstit1left">Commissioni</th>
</tr>
<tr class="tabsmstit2">
	<th colspan="5" class="tabsmstit2center">FONDI</th>
</tr>
<tr class="tabsmstit3">
	<td rowspan="13" class="tabsmstit3left"><strong>Anima Sgr</strong></td>
	<td rowspan="4" class="tabsmstit3left nobor" width="160px;">Sottoscrizione</td>
	<td class="tabsmstit3left nobor">Attive</td>
	<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
	<td class="tabsmstit3right"><strong>GRATIS</strong></td>
</tr>
<tr class="tabsmstit3">
	<td class="tabsmstit3left nobor">Anima</td>
	<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	<td class= "tabsmstit3right"><strong>max 4%</strong><br>(In caso di sottoscrizione Pac, le commissioni, calcolate sull'importo complessivo del piano, sono prelevate per il 30% al momento del versamento iniziale e per il restante 70% in maniera lineare sui versamenti successivi)</td>
</tr>
<tr class="tabsmstit3">
	<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
	<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
	<td class="tabsmstit3right"><strong>1%</strong></td>
</tr>
<tr class="tabsmstit3">
	<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
</tr>
<tr class="tabsmstit3">
	<td colspan="2" class="tabsmstit3left nobor">Versamento aggiuntivo Pac</td>
	<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	<td class= "tabsmstit3right"><strong>GRATIS</strong><br/><strong>1,00% </strong> Capitale Pi&ugrave; <br/><strong>Max 4% </strong> SG Anima</td>
</tr>
<tr class="tabsmstit3">
	<td rowspan="4" class="tabsmstit3left nobor">Switch</td>
	<td class="tabsmstit3left nobor">Attive</td>
	<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
	<td class= "tabsmstit3right" rowspan="4"><ul>
		<li><strong>GRATIS</strong> da un fondo senza commissioni a fondo senza commissioni</li>
		<li><strong>GRATIS</strong> da fondo con commissioni a fondo con commissioni *</li>
		<li><strong>da fondo senza commissioni a fondo con commissioni</strong> si applicano le commissioni previste dal fondo<br>entrante **.</li></ul>
		<br/><br/>*<b>Da Capitale Più a Sistema Anima e viceversa</b>, si applicano le commissioni previste dal fondo entrante.<br>
		**<b>Da <b>Anima Liquidit&agrave;</b> ad altro fondo del Sistema Anima</b> non si applicano le commissioni se l'entrata in Anima Liquidit&agrave; &egrave; frutto di uno switch riveniente da fondo con commissioni appartenente al Sistema Anima.<br/><br/>Da <b>Anima Traguardo II 2016</b> ad altro fondo con commissioni di  sottoscrizione: si applicano  le commissioni di uscita  previste da Anima Traguardo II 2016 e le commissioni di sottoscrizione previste dal fondo entrante . Non è consentito lo  switch tra <b>Anima Traguardo II 2016</b> e <b>Capitale Più</b>.</td>
</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3right"><strong>ZERO</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor" rowspan="4">Rimborso</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td rowspan="3" class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>4 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3left nobor"><strong>ZERO</strong></td>
		<td class="tabsmstit3right"><strong>uscita 1° anno 3,50%<br />uscita 2° anno 3,00%<br />uscita 3° anno 2,50%<br />uscita 4° anno 1,50%<br />uscita 5° anno 1,00%</strong></td>	
	</tr>
	<tr class="tabsmstit4">
		<td rowspan="2" class="tabsmstit3left"><strong>Bpm Fund Management<br>Ireland Ltd</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, rimborso</td>
		<td class="tabsmstit3right"><strong>5 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>max 2%</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td class="tabsmstit3left nobor" colspan="2">Switch</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>max 2%</strong></td>
	</tr>			
	<tr class="tabsmstit3">
		<td class="tabsmstit3left"><strong>Epsilon Sgr</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, rimborso, switch, versamento iniziale e<br/>aggiuntivo PAC</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td rowspan="2" class="tabsmstit3left"><strong>Etica Sgr</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, switch, versamento iniziale PAC</td>
		<td class="tabsmstit3right"><strong>10 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td class="tabsmstit3left nobor" colspan="2">Rimborso, versamenti aggiuntivi PAC</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit2">
		<th colspan="5" class="tabsmstit2center">SICAV</th>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="3" class="tabsmstit3left"><strong>Schroder IM</strong></td>
		<td rowspan="2" class="tabsmstit3left nobor">Sottoscrizione, rimborso</td>
		<td class="tabsmstit3left nobor">Azioni di tipo &quot;A&quot;</td>
		<td class="tabsmstit3right nobor"><strong>40 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>4,00%</strong><span class="fontsmall"> (fino a 25.822 &euro;)</span><br/><strong>3,00%</strong><span class="fontsmall"> (da 25.823 a 77.468 &euro;)</span><br/><strong>2,00%</strong><span class="fontsmall"> (da 77.469 a 129.114 &euro;)</span><br/><strong>1,00%</strong><span class="fontsmall"> (da 129.115 a 413.165 &euro;)</span><br/><strong>0,50%</strong><span class="fontsmall"> (oltre 413.165 &euro;)</span><br/><br/>(Calcolate con il &quot;beneficio di accumulo&quot;)</td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Azioni di tipo &quot;B&quot;</td>
		<td class="tabsmstit3right"><strong>40 &euro;</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td colspan="2" class="tabsmstit3left nobor">Switch</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	</table>
</div>
		<!-- fine bpm -->
		<?php } else if ($bank == "bl"){ ?>
		
		<div>
	<ul>
		<li>Nella tabella sono riportati i <b>diritti fissi</b> e le <b>commissioni di ingresso</b>.</li>
		<li>Per le commissioni di gestione o altre commissioni previste si rimanda ai <b>Prospetti</b> e ai <b>Regolamenti di gestione dei fondi</b>.</li> 
	</ul>
	<div class="tithelp">
		<div class="helpleft">Costi</div>
	</div>
	<br class="clear"/>
	<table cellspacing="0" cellpadding="0" border="0" class="tablesms">
	<tr class="tabsmstit1">
		<th  class="tabsmstit1left">Societ&agrave; di gestione</th>
		<th class="tabsmstit1left" colspan="2">Operazione</th>
		<th  class="tabsmstit1left">Diritti fissi</th>
		<th class="tabsmstit1left">Commissioni</th>
	</tr>
	<tr class="tabsmstit2">
		<th colspan="5" class="tabsmstit2center">FONDI</th>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="13" class="tabsmstit3left"><strong>Anima Sgr</strong></td>
		<td rowspan="4" class="tabsmstit3left nobor" width="160px;">Sottoscrizione</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>max 4%</strong><br>(In caso di sottoscrizione Pac, le commissioni, calcolate sull'importo complessivo del piano, sono prelevate per il 30% al momento del versamento iniziale e per il restante 70% in maniera lineare sui versamenti successivi)</td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>1%</strong></td>
	</tr>
	<tr class="tabsmstit3">
	<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
</tr>
	<tr class="tabsmstit3">
		<td colspan="2" class="tabsmstit3left nobor">Versamento aggiuntivo Pac</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong><br/><strong>1,00% </strong> Capitale Pi&ugrave; <br/><strong>Max 4% </strong> SG Anima</td>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="4" class="tabsmstit3left nobor">Switch</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
		<td class= "tabsmstit3right" rowspan="4"><ul>
				<li><strong>GRATIS</strong> da un fondo senza commissioni a fondo senza commissioni</li>
				<li><strong>GRATIS</strong> da fondo con commissioni a fondo con commissioni *</li>
				<li><strong>da fondo senza commissioni a fondo con commissioni</strong> si applicano le commissioni previste dal fondo<br>entrante **.</li>
			</ul>
			<br><br>*<b>Da Capitale Più a Sistema Anima e viceversa</b>, si applicano le commissioni previste dal fondo entrante.<br>
			**<b>Da Anima Liquidit&agrave; ad altro fondo del Sistema Anima</b> non si applicano le commissioni se l'entrata in Anima Liquidit&agrave; &egrave; frutto di uno switch riveniente da fondo con commissioni appartenente al Sistema Anima.<br/><br/>Da <b>Anima Traguardo II 2016</b> ad altro fondo con commissioni di  sottoscrizione: si applicano  le commissioni di uscita  previste da Anima Traguardo II 2016 e le commissioni di sottoscrizione previste dal fondo entrante . Non è consentito lo  switch tra <b>Anima Traguardo II 2016</b> e <b>Capitale Più</b></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3right"><strong>ZERO</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor" rowspan="4">Rimborso</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td rowspan="3" class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>4 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3right"><strong>ZERO</strong></td>
		<td class="tabsmstit3right"><strong>uscita 1° anno 3,50%<br />uscita 2° anno 3,00%<br />uscita 3° anno 2,50%<br />uscita 4° anno 1,50%<br />uscita 5° anno 1,00%</strong></td>	
	</tr>
	<tr class="tabsmstit4">
		<td rowspan="2" class="tabsmstit3left"><strong>Bpm Fund Management<br>Ireland Ltd</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, rimborso</td>
		<td class="tabsmstit3right"><strong>5 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>max 2%</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td class="tabsmstit3left nobor" colspan="2">Switch</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>max 2%</strong></td>
	</tr>			
	<tr class="tabsmstit3">
		<td class="tabsmstit3left"><strong>Epsilon Sgr</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, rimborso, switch, versamento iniziale e<br/>aggiuntivo PAC</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td rowspan="2" class="tabsmstit3left"><strong>Etica Sgr</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, switch, versamento iniziale PAC</td>
		<td class="tabsmstit3right"><strong>10 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td class="tabsmstit3left nobor" colspan="2">Rimborso, versamenti aggiuntivi PAC</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit2">
		<th colspan="5" class="tabsmstit2center">SICAV</th>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="3" class="tabsmstit3left"><strong>Schroder IM</strong></td>
		<td rowspan="2" class="tabsmstit3left nobor">Sottoscrizione, rimborso</td>
		<td class="tabsmstit3left nobor">Azioni di tipo &quot;A&quot;</td>
		<td class="tabsmstit3right nobor"><strong>40 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>4,00%</strong><span class="fontsmall"> (fino a 25.822 &euro;)</span><br/><strong>3,00%</strong><span class="fontsmall"> (da 25.823 a 77.468 &euro;)</span><br/><strong>2,00%</strong><span class="fontsmall"> (da 77.469 a 129.114 &euro;)</span><br/><strong>1,00%</strong><span class="fontsmall"> (da 129.115 a 413.165 &euro;)</span><br/><strong>0,50%</strong><span class="fontsmall"> (oltre 413.165 &euro;)</span><br/><br/>(Calcolate con il &quot;beneficio di accumulo&quot;)</td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Azioni di tipo &quot;B&quot;</td>
		<td class="tabsmstit3right"><strong>40 &euro;</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td colspan="2" class="tabsmstit3left nobor">Switch</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	</table>
</div>
		
		<!-- fine bl -->
		<?php }	else if ($bank == "ca"){ ?>
		
		<div>
	<ul>
		<li>Nella tabella sono riportati i <b>diritti fissi</b> e le <b>commissioni di ingresso</b>.</li>
		<li>Per le commissioni di gestione o altre commissioni previste si rimanda ai <b>Prospetti</b> e ai <b>Regolamenti di gestione dei fondi</b>.</li> 
	</ul>
	<div class="tithelp">
		<div class="helpleft">Costi</div>
	</div>
	<br class="clear"/>
	<table cellspacing="0" cellpadding="0" border="0" class="tablesms">
	<tr class="tabsmstit1">
		<th  class="tabsmstit1left">Societ&agrave; di gestione</th>
		<th class="tabsmstit1left" colspan="2">Operazione</th>
		<th  class="tabsmstit1left">Diritti fissi</th>
		<th class="tabsmstit1left">Commissioni</th>
	</tr>
	<tr class="tabsmstit2">
		<th colspan="5" class="tabsmstit2center">FONDI</th>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="13" class="tabsmstit3left"><strong>Anima Sgr</strong></td>
		<td rowspan="4" class="tabsmstit3left nobor" width="160px;">Sottoscrizione</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>max 4%</strong><br>(In caso di sottoscrizione Pac, le commissioni, calcolate sull'importo complessivo del piano, sono prelevate per il 30% al momento del versamento iniziale e per il restante 70% in maniera lineare sui versamenti successivi)</td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>1%</strong></td>
	</tr>
	<tr class="tabsmstit3">
	<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
	<td class="tabsmstit3right"><strong>ZERO</strong></td>
</tr>
	<tr class="tabsmstit3">
		<td colspan="2" class="tabsmstit3left nobor">Versamento aggiuntivo Pac</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class= "tabsmstit3right"><strong>GRATIS</strong><br/><strong>1,00% </strong> Capitale Pi&ugrave; <br/><strong>Max 4% </strong> SG Anima</td>
	</tr>
	<tr class="tabsmstit3">
		<td rowspan="4" class="tabsmstit3left nobor">Switch</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
		<td class= "tabsmstit3right" rowspan="4"><ul><li><strong>GRATIS</strong> da un fondo senza commissioni a fondo senza commissioni</li>
		<li><strong>GRATIS</strong> da fondo con commissioni a fondo con commissioni *</li>
		<li><strong>da fondo senza commissioni a fondo con commissioni</strong> si applicano le commissioni previste dal fondo<br> entrante **.</li></ul>
		<br><br>*<b>Da Capitale Più a Sistema Anima e viceversa</b>, si applicano le commissioni previste dal fondo entrante.<br>
		**<b>Da Anima Liquidit&agrave; ad altro fondo del Sistema Anima</b> non si applicano le commissioni se l'entrata in Anima Liquidit&agrave; &egrave; frutto di uno switch riveniente da fondo con commissioni appartenente al Sistema Anima.<br><br>Da <b>Anima Traguardo II 2016</b> ad altro fondo con commissioni di  sottoscrizione: si applicano  le commissioni di uscita  previste da Anima Traguardo II 2016 e le commissioni di sottoscrizione previste dal fondo entrante . Non è consentito lo  switch tra <b>Anima Traguardo II 2016</b> e <b>Capitale Più</b>.</td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>3,5 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>6 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3right"><strong>ZERO</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor" rowspan="4">Rimborso</td>
		<td class="tabsmstit3left nobor">Attive</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td rowspan="3" class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima</td>
		<td class="tabsmstit3right"><strong>4 &euro;</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Capitale pi&ugrave;</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit3">
		<td class="tabsmstit3left nobor">Anima Traguardo II 2016</td>
		<td class="tabsmstit3right"><strong>ZERO</strong></td>
		<td class="tabsmstit3right"><strong>uscita 1° anno 3,50%<br />uscita 2° anno 3,00%<br />uscita 3° anno 2,50%<br />uscita 4° anno 1,50%<br />uscita 5° anno 1,00%</strong></td>	
	</tr>
	<tr class="tabsmstit4">
		<td rowspan="2" class="tabsmstit3left"><strong>Etica Sgr</strong></td>
		<td class="tabsmstit3left nobor" colspan="2">Sottoscrizione, switch, versamento iniziale PAC</td>
		<td class="tabsmstit3right"><strong>10 &euro;</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	<tr class="tabsmstit4">
		<td class="tabsmstit3left nobor" colspan="2">Rimborso, versamenti aggiuntivi PAC</td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
		<td class="tabsmstit3right"><strong>GRATIS</strong></td>
	</tr>
	</table>	
</div>
		
		<!-- fine ca -->
		<?php } else if ($bank == "bm"){ 
		virtual("/librerie/include/commons/tabelle/tab_black_priv_110.php");
		 }		
		?>
	
	</div>


	



