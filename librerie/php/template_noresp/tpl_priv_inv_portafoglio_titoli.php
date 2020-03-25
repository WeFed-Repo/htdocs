<h1>PORTAFOGLIO</h1>
<br class="clear"/>
<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_004.php"); ?>

	<br />
	<div class="divtabellatabs">
<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td class="oninizio"></td>
	<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Totale portafoglio</a></td><td class="on2b">&nbsp;</td>
<td class="off"><a title="Lorem ipsum" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_inv_portafoglio_titoli_b.php&liv1=RI&ri2=0&ri3=0" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Fondi e Sicav</a></td><td class="off2">&nbsp;</td>
<td class="off"><a title="Lorem ipsum" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_inv_portafoglio_titoli_c.php&liv1=RI&ri2=0&ri3=0" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Pronti Conto termine</a></td><td class="off2">&nbsp;</td>
</tr>
</table>
<div class="divtabellacont">
<div class="tithelp">
	<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
<br class="clear"></div>
<table cellspacing="0" cellpadding="0" class="condiz2 large">
			<tbody>
				<tr class="color">
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_giu.gif"></a><br/>Lorem ipsum</td> 
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_giu.gif"></a><br/>Div.</td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Asset class</td> 
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>N. quote</td>
					<td>NAV</td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Tasso netto</td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Controv. EUR investito</td>
					<td>Controv. EUR attuale/alla scadenza</td>
					<td>Rend. EUR<br/>Rend. %</td>
					<td>&nbsp;</td>
				</tr>
				
				<tr class="dispari"> 
					<td class="left"><a href="#1">Fondo 1</a></td>
					<td class="right">xxx</td>
					<td class="left">Obbligazionario</td>
					<td class="right">xxx,xxx</td>
					<td class="right">xxx,xxx<br/>gg/mm/aaaa</td>
					<td class="right">n.d.</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="nega right">-xxx.xxx.xxx,xx<br/>-xx,xx</td>
					<td class="center">
						<?php
							$linkNum = 1;
							virtual ("/librerie/include/commons/navigazione/nav_black_priv_050.php");
						?>
					</td>
				</tr>
					
				<tr class="pari"> 
					<td class="left"><a href="#1">Fondo 2</a></td>
					<td class="right">xxx</td>
					<td class="left">Azionario emergenti</td>
					<td class="right">xxx,xxx</td>
					<td class="right">xxx,xxx<br/>gg/mm/aaaa</td>
					<td class="right">n.d.</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="posi right">xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<?php
							$linkNum = 2;
							virtual ("/librerie/include/commons/navigazione/nav_black_priv_050.php");
						?>
					</td>
				</tr>
					
				<tr class="dispari"> 
					<td class="left">PCT 1</td>
					<td class="right">xxx</td>
					<td class="left">Obbligazionario</td>
					<td class="right">n.d.</td>
					<td class="right">n.d.</td>
					<td class="right">xx,xx%</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="right">xxx.xxx,xx<br/>gg/mm/aaaa</td>
					<td class="nega right">-xxx.xxx.xxx,xx<br/>-xx,xx</td>
					<td class="center">
						<?php
							$linkNum = 3;
							virtual ("/librerie/include/commons/navigazione/nav_black_priv_050.php");
						?>
					</td>
				</tr>
					
				<tr class="pari"> 
					<td class="left">PCT 2</td>
					<td class="right">xxx</td>
					<td class="left">Obbligazionario</td>
					<td class="right">n.d.</td>
					<td class="right">n.d.</td>
					<td class="right">xx,xx%</td>
					<td class="right">xxx.xxx,xx</td>
					<td class="right">xxx.xxx,xx<br/>gg/mm/aaaa</td>
					<td class="posi right">xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<?php
							$linkNum = 4;
							virtual ("/librerie/include/commons/navigazione/nav_black_priv_050.php");
						?>
					</td>
				</tr>
				
				<tr class="color2">
		<td class="tot" colspan="6">TOTALE</td>
		<td class="right"><strong>xxx.xxx,xx</strong></td>
		<td class="right"><strong>xxx.xxx,xx</strong></td>
		<td class="posi right"><strong>xxx.xxx.xxx,xx<br/>xx,xx</strong></td>
		<td>&nbsp;</td>
</tr>
										
			</tbody>
		</table>
		<div align="right" class="BvTableHeaderHelp">	
		<a href="#1"><img src="/img/ret/ico2or_excel.gif" alt=""/></a><a class="hlp" href="#1">Esporta in Excel</a>
		<a href="#1"><img src="/img/ret/ico2or_stampa.gif" alt=""/></a><a class="hlp" href="#1">Stampa</a>
		<br class="clear" />
		</div>
		

</div>

<div class="divtabellacont" style="display:none">

<table class="form01">
		<tr> 
			<td>Segmento del mercato MTA-TAH per la valorizzazione dei prezzi <select  name="Mercato" size="1">
				<option>diurno</option>
				<option>lorem ipsum</option>
			</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1b');" onmouseover="nascondi('lampa1b');" href="#1"><img class="lampa" id="lampa1b" src="/img/ret/lampa_off.gif"><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span></td>
		</tr>		
	</table>
	
<table cellspacing="0" cellpadding="0" class="condiz2 large">
			<tbody>
				<tr class="color">
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_giu.gif"></a><br/>Titolo2</td> 
					<td>Mercati.<br><form><select class="portaf"><option>tutti</option><option>euronext-liffe</option></select></form></td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Q.tà in<br/>portaf.</td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Q.tà dispon.</td>
					<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_su.gif"></a><br/>Prezzo<br/>medio*</td>
					<td>Ult.<br/>Pz./Ora</td>
					<td>Controval.<br/>EUR</td>
					<td>Utili/Perdite<br/>EUR<br/>Var %</td>
					<td>Vai</td>
				</tr>
				
				<tr class="dispari"> 
					<td class="left"><a href="#1">LOREM IPSUM</a></td>
					<td class="left">MTA</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">x,xxx</td>
					<td class="right">x,xxx<br/>hh:mm</td>
					<td class="right">xxx.xxx.xxx,xx</td>
					<td class="nega right">-xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<div class="linkTooltip">
							<a title="azioni" id="link10" class="linkVai" onmouseover="multiLinks(1, 'on');" href="javascript:;"><img alt="azioni" title="azioni" src="/img/ret/ico1gr_azioni.gif"></a>						

	<div id="links10" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">Oggetto in sviluppo</div>
					
							
						</div>
					</td>
				</tr>
					
				<tr class="pari"> 
					<td class="left"><a href="#1">WWWWWWWWWWWWWW</a></td>
					<td class="left">EURONEXT - <br/>LIFFE</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">x,xxx</td>
					<td class="right">x,xxx<br/>hh:mm</td>
					<td class="right">xxx.xxx.xxx,xx</td>
					<td class="posi right">xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<div class="linkTooltip">
							<a title="azioni" id="link10" class="linkVai" onmouseover="multiLinks(1, 'on');" href="javascript:;"><img alt="azioni" title="azioni" src="/img/ret/ico1gr_azioni.gif"></a>						

	<div id="links10" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">Oggetto in sviluppo</div>
					
							
						</div>
					</td>
				</tr>
					
				<tr class="dispari"> 
					<td class="left"><a href="#1">LOREM IPSUM</a></td>
					<td class="left">MTA</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">x,xxx</td>
					<td class="right">x,xxx<br/>hh:mm</td>
					<td class="right">xxx.xxx.xxx,xx</td>
					<td class="nega right">-xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<div class="linkTooltip">
							<a title="azioni" id="link10" class="linkVai" onmouseover="multiLinks(1, 'on');" href="javascript:;"><img alt="azioni" title="azioni" src="/img/ret/ico1gr_azioni.gif"></a>						

	<div id="links10" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">Oggetto in sviluppo</div>
					
							
						</div>
					</td>
				</tr>
					
				<tr class="pari"> 
					<td class="left"><a href="#1">WWWWWWWWWWWWWW</a></td>
					<td class="left">EURONEXT - <br/>LIFFE</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">xxx.xxx.xxx</td>
					<td class="right">x,xxx</td>
					<td class="right">x,xxx<br/>hh:mm</td>
					<td class="right">xxx.xxx.xxx,xx</td>
					<td class="posi right">xxx.xxx.xxx,xx<br/>xx,xx</td>
					<td class="center">
						<div class="linkTooltip">
							<a title="azioni" id="link10" class="linkVai" onmouseover="multiLinks(1, 'on');" href="javascript:;"><img alt="azioni" title="azioni" src="/img/ret/ico1gr_azioni.gif"></a>						

	<div id="links10" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">Oggetto in sviluppo</div>
					
							
						</div>
					</td>
				</tr>
				
				<tr class="color2">
		<td class="tot" colspan="6">TOTALE</td>
		<td class="right"><strong>xxx.xxx.xxx,xx</strong></td>
		<td class="posi right"><strong>xxx.xxx.xxx,xx<br/>xx,xx</strong></td>
		<td>&nbsp;</td>
</tr>
										
			</tbody>
		</table>
		<p class="note">*: Espresso in USD o EUR in base alla divisa e comprensivo delle commissioni di negoziazione.</p>
		<div align="right" class="BvTableHeaderHelp">	
		<a href="#1"><img src="/img/ret/ico2or_excel.gif" alt=""/></a><a class="hlp" href="#1">Esporta in Excel</a>
		<a href="#1"><img src="/img/ret/ico2or_stampa.gif" alt=""/></a><a class="hlp" href="#1">Stampa</a>
		<br class="clear" />
		</div>
		

</div>
<img src="/wscmn/img/str_tab_chiusura.gif" alt="" class="chiusura">
</div>
	
