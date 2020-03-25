<script type="text/javascript">
function showTooltipDisp (e, el) {
	createUniqTooltip(e, el,
		'Suspendisse sem mi, sodales in, <strong>porta et</strong>, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor placerat.<br /><br />' +
		'<strong>Mese = 2000 &euro; --> Prelievo = 1.500 &euro; e Acquisto = 500 &euro;</strong><br />'
	);
}
</script>
<?php virtual ("/librerie/include/commons/titoli/tit_black_priv_004.html") ?>
<?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_005.html") ?>
<br />
<!--  TESTO  -->
<h3 class="verde">Sottotitolo pagina</h3>
<table class="text01">
<tr>
	<td>Suspendisse sem mi, sodales in, <strong>porta et</strong>, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
	<a href="#1">Vestibulum aliquam dui vitae risus</a>.
	<br /><br />
	<ul>
		<li>Lorem ipsum dolor</li>
		<li>Lorem ipsum dolor</li>
	</ul></td>
</tr>
</table>
<!--  FINE TESTO  -->
<!--  SELEZIONE CONTO/CARTA  -->
<div class="tithelp">
	<div class="helpleft">Lorem ipsum</div>
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img src="/img/ret/ico2or_help2.gif" alt="help" /></a><br class="clear" /></div>
<br class="clear" /></div>



<table class="form01">
<tr> 
		<td width="105" class="uno">05 Select conto_SX</td>
		<td width="550" colspan="3"> <select class="extra" name="select" onchange="setLoadingOnEl($$('table.activetable')[0], 'pippo'); setTimeout(function () { unsetLoadingOnEl('pippo') }, 1000);">
		<option>carta ***1797 --- 0000099999 - EUR - MMMMMMMMMMMM</option>
		<option>carta ***1797 --- 0000099999 - EUR - MMMMMMMMMMMM</option>
		</select></td>
		
	</tr>

</table>

<!--  FINE SELEZIONE CONTO/CARTA  -->

<div class="bollfrecsx2">
		<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_on.gif" /></p><br class="clear" /><div class="esteso" style="display:block"><p>Lorem ipsum dolor sit amet, <b>consectetuer adipiscing elit.</b> Curabitur erat eros, porta id, <a href="#">nonummy sed</a>, porttitor sed, libero.</p> 
		<table class="form01 out">
			<tr>
				<td>Lorem ipsum lorem ipsum lorem ipsum</td>
				<td><strong>Lorem ipsum</strong></td>
			</tr>
		</table>
		<div class="fooform">			
			<div class="fooformright">
				<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
			<br class="clear" />
			</div>	
		<br class="clear" />
		</div>	
		</div></div><br /><br class="clear"/></div>
		
		<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/ret/1px.gif"/><div class="cartcont"><p  onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit"><span><strong class="titolo">LOREM IPSUM</strong></span><img alt="" class="bot" src="/img/ret/cartimpr_off.gif" /></p><br class="clear" /><div class="esteso"><h3 class="verde">Sottotitolo pagina</h3>
<!-- tabella costi e attivazioni-->
<?php virtual ("/librerie/include/commons/tabelle/tab_priv_150.php") ?>

<table class="text01">
<tr>
	<td>Suspendisse sem mi, sodales in, <strong>porta et</strong>,
<!--NUOVO TOOLTIP-->
		<span id="tooltip3" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this);" onmousemove="createUniqTooltip(event, this)">
				<span class="uniqTooltipPos">Vestibulum aliquam dui vitae risus.</span>
				<span class="uniqTooltipInnerHTML">
							100 Testo_semplice - Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad 
				</span>
		</span>
<!--fine NUOVO TOOLTIP-->

	</td>
</tr>
</table>

<!--  TESTO  -->
<h3 class="verde">Sottotitolo pagina</h3>
<table class="text01">
<tr>
	<td>Suspendisse sem mi, sodales in, <strong>porta et</strong>, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
	<a href="#1">Vestibulum aliquam dui vitae risus</a>.
	</td>
</tr>
</table>
<!--  FINE TESTO  -->
<!--  FORM CON CHECK  -->
<div class="tithelp">
	<div class="helpleft">Lorem ipsum</div>
<br class="clear" /></div>
<table class="form01 out">
	<tr>
		<td class="uno"></td>
		<td><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"/>Lorem ipsum dolor<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"/><span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span></td>
	</tr>
</table>
<!-- FINE  FORM CON CHECK  -->
<!--  BOTTONIERA  -->
<div class="fooform">
	<div class="fooformtop"></div>
	
	<div class="fooformright">
		<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>
<!--  FINE BOTTONIERA  -->
				
				
				
				</div></div><br /><br class="clear"/></div>
		
	</div>

