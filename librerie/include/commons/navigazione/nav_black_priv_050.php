<?php
	if (!isset($linkNum)) $linkNum = 1;
?>
<!-- Parte che va messa in ogni riga della tabella -->
<div class="linkTooltip">
	<!--
		I parametri da passare alla funziona multiLinks() sono:
			- id del LAYER MENU, vedi sotto
			- 'left', per il momento lasciare così
			- this, lasciare così
			- array delle querystring da passare ai link:
				* se si passa null, il link sarà disattivo
				* se si passa una querystring, sarà accodata all'URL del link
				* se si passa 'javascript:...', verrà eseguita la funzione javascript al click
	-->
	<a title="scegli l'operazione da effettuare" id="link<?php echo $linkNum ?>" class="linkVai" onclick="multiLinks('iconaOperativaMenu<?php echo $linkNum ?>.html', 'left', this, ['javascript:obscurateAll(1);openAlert(\'layeralert1\');', '', 'par1=eee&amp;par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&amp;par2=333', 'javascript:alert(\'test link\')', 'javascript:openPopUp(\'medium\', \'connect.php?page=str_popup_wb.php&tpl=/wetrade/tpl_priv_lib_wt_dettaglio_fiscale_pop_up.php&flg=WT&sid=priv\')']);" href="javascript:;"></a>						
</div>
	<!--
<div class="linkTooltip">

		I parametri da passare alla funziona multiLinks() sono:
			- id del LAYER MENU, vedi sotto
			- 'left', per il momento lasciare così
			- this, lasciare così
			- array delle querystring da passare ai link:
				* se si passa null, il link sarà disattivo
				* se si passa una querystring, sarà accodata all'URL del link
				* se si passa 'javascript:...', verrà eseguita la funzione javascript al click

	<a title="scegli l'operazione da effettuare" id="link--><!--?php echo $linkNum ?--><!--a" class="linkVai" onclick="multiLinks('iconaOperativaMenu--><!--?php echo $linkNum ?--><!--.html', 'left', this, ['javascript:obscurateAll(1);openAlert(\'layeralert1\');', '', 'par1=eee&amp;par2=333', 'javascript:alert(\'test link\')', null, '', '*#*ND', 'javascript:alert(\'test link\')', 'javascript:openPopUp(\'medium\', \'connect.php?page=str_popup_wb.php&tpl=/wetrade/tpl_priv_lib_wt_dettaglio_fiscale_pop_up.php&flg=WT&sid=priv\')']);" href="javascript:;"></a>						
</div>
	-->

<!-- LAYER MENU -->
<!--
	NON COPIARE IN SVILUPPO!!!
	PARTE DA LASCIARE SOLO PER LE LIBRERIE.
	Le diverse icone operative mostrano lo stesso layer per visualizzare il menu. 
	Se bisogna fare due menu diversi si metteranno due div. 
	Quindi, un div per ogni tipo di menu e NON per ogni icona operativa.
-->
<div id="iconaOperativaMenu<?php echo $linkNum ?>_html" class="sezioneLinks2" style="display: none;">
	<div class="topSx"><div class="topDx"><div class="topCenter">scegli...</div></div></div>
	<div class="bodySx">
		<div class="bodyDx">
			<div class="bodyCenter">
				<ul class="azioni">
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="C/V">C/V</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Book" href="link2.htm"><span>Book</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Book">Book</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Alert">Alert</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Carry-on" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_carry.php&liv1=TR&tr2=0&tr3=0"><span>Carry-on</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Carry-on">Carry-on</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Vendi">Vendi</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Vendi" href="/connect.php?page=str_interna_priv.php&tpl=/wetrade/tpl_priv_lib_wt_titoli_in_portafoglio.php&liv1=TR&tr2=0&tr3=0"><span>Visualizza/Vendi</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
					
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOn"><a title="Dettaglio fiscale" href="link7.htm"><span>Fiscalit&agrave;</span></a></li>
					<li onmouseover="azioneOver(this);" onmouseout="azioneOut(this)" class="linkOff"><span title="Dettaglio fiscale">Fiscalit&agrave;</span></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="bottomSx borderBottom"><div class="bottomDx borderBottom"><div class="bottomCenter borderBottom"></div></div></div>
</div>
<!-- |FINE| LAYER MENU -->


<!-- OVERLAYER C/V -->
<!--<div class="layeralert2" id="layeralert1" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closeAlert('layeralert1');  unobscurateAll();"/></div>
	<div class="body">
		<h3 class="verde">SCELTA MERCATO</h3>
		<p>Il titolo che hai scelto &egrave; disponibile su più mercati. Scegli il mercato prima di procedere con la compravendita.<br/>N.B.:La modalit&agrave; Best Execution &egrave; attivata solamente dalle ore 09.10 alle ore 17.30 tutti i giorni di apertura dei mercati italiani.*</p><br/>
							
			<table class="form01 singlerow">
				<tr> 
					<td class="uno">Nome</td>
					<td><strong>Testo di output</strong></td>
					<td>Nome</td>
					<td><strong>Testo di output</strong></td>
				</tr>				
			</table>			
			
			<table cellspacing="0" cellpadding="0" class="condiz2 fondi">
				<tr class="color">
					<td>Prezzo domanda</td>
					<td>Prezzo offerta</td>
					<td>Prezzo di riferimento</td>
					<td>C/V</td>
				</tr>
				<tr class="dispari">
					<td class="left">Best execution</td>
					<td class="right">x.xxx</td>
					<td class="right">x.xxx</td>
					<td class="center"><a title="lorem ipsum" href="#1"><img title="cv" alt="cv" src="/img/ret/ico1gr_compravendi.gif"></a></td>		
				</tr>
				<tr class="pari">
					<td class="left">Euro TLX</td>
					<td class="right">x.xxx</td>
					<td class="right">x.xxx</td>
					<td class="center"><a title="lorem ipsum" href="#1"><img title="cv" alt="cv" src="/img/ret/ico1gr_compravendi.gif"></a></td>		
				</tr>
				<tr class="dispari">
					<td class="left">OTC</td>
					<td class="right">x.xxx</td>
					<td class="right">x.xxx</td>
					<td class="center"><a title="lorem ipsum" href="#1"><img title="cv" alt="cv" src="/img/ret/ico1gr_compravendi.gif"></a></td>		
				</tr>
				<tr class="pari">
					<td class="left">Extra MOT</td>
					<td class="right">x.xxx</td>
					<td class="right">x.xxx</td>
					<td class="center"><a title="lorem ipsum" href="#1"><img title="cv" alt="cv" src="/img/ret/ico1gr_compravendi.gif"></a></td>		
				</tr>
			</table>
		<p class="note">*la modalit&agrave; best execution potrebbe prevedere prezzo della domanda e prezzo dell'offerta su due mercati differenti</p>	
	
	<br class="clear"/>
	</div>
	<div class="foot"></div>
</div>-->
<!-- |FINE| OVERLAYER C/V -->