<script type="text/javascript">
window.onload = function() {$('#primo').css('display','block'); $('#selectSoc').prop("selectedIndex",0)}
function showCont()
{
	var divToShow = $('div.costcomm');
	var select = $('#selectSoc');
	for(i=0; i<divToShow.length; i++) {
	if(i == select.prop("selectedIndex")) {
	divToShow[i].style.display="block";
	
	}
	else {
	divToShow[i].style.display="none";
	
	}
	}
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
			<option>Dws</option>
			<option>Anima Sgr</option>
			<option>BlackRock</option>
			<option>Epsilon Sgr</option>
			<option>Etica Sgr</option>
			<option>Eurizon Capital Sgr</option>
			<option>Franklin Templeton</option>
			<option>J.P Morgan Asset Management</option>
			<option>Schroder IM</option>
			<option>Threadneedle</option>
		</select>
		</td>
		</tr>
</table>

<!-- Anima -->
<div id="primo" class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="Anima Sgr" src="/wscmn/img/logo_dws.gif" class="tabtopimg" /></div>
	<table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2" width="430">Commissioni di ingresso</th>
				<th class="tabsmstit1left" width="60">Diritti fissi</th>
			</tr>
			<tr class="tabsmstit4">
				<td class="tabsmstit3left" rowspan="3" width="90"><strong>Sottoscrizione</strong></td>
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
				<td  class="tabsmstit3left" rowspan="3"><strong>Switch</strong></td>
				<td class="tabsmstit3left"><span class="tipo">Attive</span></td>
				<td class="tabsmstit3left bordott" rowspan="3" valign="top" width="200">
					<span>
						<ul>
							<li>switch tra fondi senza commissioni</li>
							<li>switch tra fondi con commissioni</li>
							<li>switch da fondi con commissioni a fondi senza commissioni</li>
						</ul><br />
						<strong class="center">ZERO</strong><br /><br /><br />
						<ul class="eldett"><li><span class="dett">Da Capitale Pi&ugrave; a Sistema Anima e viceversa, si apllicano le commissioni previste dal fondo entrante</span></li></ul>
					</span>
				</td>
				<td class="tabsmstit3left nobor no_leftpadding" rowspan="3" valign="top" width="">
					<span class="bordott">
						<ul>
							<li>switch da fondi senza commissioni a fondi con commissioni</li>
						</ul><br /><br /><br />
						<strong class="center">Paghi le commissioni di sottoscrizione<br /> del fondo entrante</strong><br /><br />
						<ul class="eldett"><li><span class="dett">Da Anima Liquidit&agrave; ad altro fondo del Sistema Anima non si applicano le commissioni se l'entrata in Anima Liquidit&agrave; &egrave; frutto di uno switch riveniente da fondo con commissioni appartenente al Sistema Anima</span></li></ul>
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
			<tr class="tabsmstit3">
				<td class="tabsmstit3left" rowspan="3"><strong>Rimborso</strong></td>
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
		
		
</table>
	
</div>
<!-- BlackRock-->
<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="BlackRock" src="/img/ret/logo_blackrock.gif" class="tabtopimg" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
			<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left" colspan="2">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left" colspan="2">Commissioni di ingresso</th>
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
</div>

<!-- Jp Morgan-->

<div class="costcomm" style="display:none">
	 <div class="tabtop"><img alt="J.P Morgan" src="/img/ret/logo_morgan.gif" /></div>
	 <table cellspacing="0" cellpadding="0" border="0" class="tablesms">
		<tr class="tabsmstit1">
				<th colspan="2" class="tabsmstit1left">Operazione</th>
				<th class="tabsmstit1left" colspan="2">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left" colspan="5">Commissioni di ingresso</th>
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
				<th class="tabsmstit1left" colspan="2">Commissioni di ingresso</th>
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