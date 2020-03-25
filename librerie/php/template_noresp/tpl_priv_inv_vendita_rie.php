<h1>VENDITA</h1>

<div class="tithelp">
	<div class="helpleft">Riepilogo dati ordine</div>	
<br class="clear" /></div>
<table class="form01 out">
	<tr>
		<td width="105" class="uno">Deposito titoli</td>
		<td><strong>xxxxxxxxxxxxxxxxxxxxxxxxxxxxx</strong></td>
		<td width="105" class="uno">Fondo</td>
		<td><a href=""><strong>Fondo 1</strong></a></td>
	</tr>
	<tr>
		<td width="105" class="uno">Valore/quota NAV al gg/mm/aaaa</td>
		<td><strong>xxx,xxxx VAL</strong><span class="tooltip"><a href="#1" onmouseover="nascondi('lampa1');" onmouseout="vedi('lampa1');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"/><span><span><span>Lorem ipsum</span></span></span></a></span></td>
		<td width="105" class="uno"></td>
		<td><div><a title="apri la scheda fondo" class="btnevid1" href="#1" onclick="javascript:obscurateAll(1); openAlert('layeralert2'); "><img alt="" src="/img/ret/btn_left_sm1.gif"/><span>Tempistiche dell'ordine</span><img alt="" src="/img/ret/btn_right_sm1.gif"/></a></div></td>
	</tr>
	<tr>
		<td width="105" class="uno">Numero quote/azioni nel deposito selezionato</td>
		<td><strong>xxxxx</strong></td>
		<td width="105" class="uno">Controvalore</td>
		<td><strong>x.xxx,xx VAL <br/>x.xxx,xx EUR</strong><span class="note">al cambio del giorno gg/mm/aaaa</span></td>
	</tr>
	<tr>
		<td width="105" class="uno">Quote da vendere</td>
		<td colspan="3"><strong>Tutte le quote nel deposito selezionato</strong></td>
		
	</tr>

</table>

<div class="fooform">
	
	<div class="fooformleft">
		<div><a title="Indietro" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"/><span>Indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"/></a></div>	
	</div>
	<div class="fooformright">
		<div><a title="conferma e invia ordine" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_inv_vendita_rie_conf.php&liv1=RI&ri2=2&ri3=2&ri4=1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>conferma e invia ordine</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>

<div style="display: none;" id="layeralert2" class="layeralert3">
	<div onmouseover="this.style.cursor='move'; $('layeralert2').dragHandle = new Draggable('layeralert2',{handle: 'handle'}, { scroll: window });" class="head handle" style="cursor: move;"><img onclick="this.parentNode.parentNode.style.display='none';unobscurateAll();" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
	<div class="body">
	
		<div class="tithelp">
			<div class="helpleft">Tempistiche dell'ordine</div>
			<br class="clear"/>
		</div>
		<table class="form01 out">
			<tr>
			<td><table cellspacing="0" cellpadding="0" class="timetable">
				
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
		
		</table>
	<br class="clear"/>
	</div>
	<div class="foot"/>
</div>

