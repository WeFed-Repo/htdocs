<style>
/* slider FP investimenti nuova versione */
h1.investmentb {background: url(/img/ret/tt_investmenti_fondi.gif) no-repeat 0 0; width:660px; height:45px; text-indent:-9999px}
.tablistinv {background: url(/img/ret/bg_tablistinv.gif) no-repeat 0 0; width:606px; height:25px; margin-left:22px}
.tablistinv2 {background: url(/img/ret/bg_tablistinv2.gif) no-repeat 0 0; width:606px; height:25px; margin-left:22px}
.tablistinv3 {background: url(/img/ret/bg_tablistinv3.gif) no-repeat 0 0; width:606px; height:25px; margin-left:22px}
.tablistinv a, .tablistinv2 a, .tablistinv3 a {display:block; float:left; text-indent:-9999px; width:198px; height:25px}
/*.tablistinv a.costruisci {margin-left:198px;}*/
.boxcontainerinv {background: url(/img/ret/bg_tab_inv01.jpg) no-repeat 0 0; width:645px; height:172px;}
.boxcontainerinv2 {background: url(/img/ret/bg_tab_inv02.jpg) no-repeat 0 0; width:645px; height:172px;}
.boxcontainerinv3 {background: url(/img/ret/bg_tab_inv03.jpg) no-repeat 0 0; width:645px; height:172px;}
.boxcontainerinv div{margin-left:288px; padding-top:27px; width:274px}
.boxcontainerinv div span{font-size:12px; font-weight:bold; display:block; padding:0 0 11px 5px}
.boxcontainerinv div p{font-size:11px; padding-left:5px; line-height:16px}
.boxcontainerinv div a.btnselection{background: url(/img/ret/btn_vai_top_selection.jpg) no-repeat 0 0; width:164px; height:39px; text-indent:-9999px; display:block; margin-top:22px}
.boxcontainerinv div a.btnselection:hover{background: url(/img/ret/btn_vai_top_selection.jpg) no-repeat 0 -39px;}
.boxcontainerinv div a.btnmodello{background: url(/img/ret/btn_vai_port_modello.jpg) no-repeat 0 0; width:180px; height:39px; text-indent:-9999px; display:block; margin-top:22px}
.boxcontainerinv div a.btnmodello:hover{background: url(/img/ret/btn_vai_port_modello.jpg) no-repeat 0 -39px;}
.boxcontainerinv div a.btncercafondi{background: url(/img/ret/btn_cerca_fondi.jpg) no-repeat 0 0; width:106px; height:39px; text-indent:-9999px; display:block; margin-top:22px; float:left;}
.boxcontainerinv div a.btncercafondi:hover{background: url(/img/ret/btn_cerca_fondi.jpg) no-repeat 0 -39px;}
.boxcontainerinv div a.btnclassifiche{background: url(/img/ret/btn_classifiche.jpg) no-repeat 0 0; width:106px; height:39px; text-indent:-9999px; display:block; margin-top:22px; float:left;}
.boxcontainerinv div a.btnclassifiche:hover{background: url(/img/ret/btn_classifiche.jpg) no-repeat 0 -39px;}

.boxcontainerinvfoot {background: url(/img/ret/bg_tab_inv_foot.jpg) no-repeat 0 0; width:645px; height:79px;}
.boxcontainerinvfoot a{float:left; margin:35px 0 0 19px; color:#6F8F0A}
.boxcontainerinvfoot a:hover{color:#666 !important}
.boxcontainerinvfoot a.frec_vid {background: url(/img/ret/btn_frec_vid_ov.jpg) no-repeat 0 0; float:left; margin:12px 12px 0 6px; width:55px; height:55px}
.boxcontainerinvfoot a.frec_vid:hover {background: url(/img/ret/btn_frec_vid_ov.jpg) no-repeat 0 -55px;}
.boxcontainerinvfoot div {float:left; /*margin:25px 0 0 14px*/}
.boxcontainerinvfoot a.offerta{margin-right:14px} 

/* scroller*/
.boxcontainerinvfoot .slider{overflow:hidden;width:353px;left:0; top:0;float:left;height:30px; margin:25px 0 0 0; position:relative}
.boxcontainerinvfoot div.scroller {margin:0;padding:0;position:absolute;top:0;float:left;overflow:hidden}
 #contentSlider{position:relative;top:0;}
.boxcontainerinvfoot div.scroller span {width:72px;float:left;display:block}
.boxcontainerinvfoot div.scroller span.last {width:65px}

</style>




<h1 class="investmentb">Fondi &amp; Sicav: le modalit&agrave; d'investimento pi&ugrave; adatte alle tue esigenze.</h1>

<div class="tabber">
	<div id="inv1">
		<div class="tablistinv">
			<a class="investi" onclick="showBox3TabInv(1);" href="javascript:;" title="Investi in un singolo fondo">Investi in un singolo fondo</a>
			<a class="costruisci" onclick="showBox3TabInv(2);" href="javascript:;" title="Costruisci il tuo portafoglio">Costruisci il tuo portafoglio</a>
			<a class="ricerca" onclick="showBox3TabInv(3);" href="javascript:;" title="Ricerca e investi in autonomia">Ricerca e investi in autonomia</a>
			<br class="clear" />
		</div>
		<div class="boxcontainerinv">
			<div><span>Vuoi investire in un solo fondo?</span><p>Hai a disposizione una <strong>selezione</strong> dei migliori fondi ordinati per <strong>rischio/rendimento</strong>. <strong>Scegli</strong> un fondo e lo <strong>sottoscrivi</strong> con pochi clic.</p>
			<a class="btnselection" href="#" title="vai alla Top Selection">vai alla Top Selection</a>
			</div>
		</div>
	</div>
	<div id="inv2" style="display:none">
		<div class="tablistinv2">
			<a class="investi" onclick="showBox3TabInv(1);" href="javascript:;" title="Investi in un singolo fondo">Investi in un singolo fondo</a>
			<a class="costruisci" onclick="showBox3TabInv(2);" href="javascript:;" title="Costruisci il tuo portafoglio">Costruisci il tuo portafoglio2222222</a>
			<a class="ricerca" onclick="showBox3TabInv(3);" href="javascript:;" title="Ricerca e investi in autonomia">Ricerca e investi in autonomia</a>
			<br class="clear" />
		</div>
		<div class="boxcontainerinv boxcontainerinv2">
			<div><span>Vuoi investire in più fondi?</span><p>Puoi creare il tuo portafoglio utilizzando cinque profili d'investimento: <strong>selezioni</strong> il portafoglio e <strong>scegli i fondi</strong> da sottoscrivere.</p>
			<a class="btnmodello" href="#" title="vai ai Portafogli Modello">vai ai Portafogli Modello</a>
			</div>
		</div>
	</div>
	<div id="inv3" style="display:none">
		<div class="tablistinv3">
			<a class="investi" onclick="showBox3TabInv(1);" href="javascript:;" title="Investi in un singolo fondo">Investi in un singolo fondo</a>
			<a class="costruisci" onclick="showBox3TabInv(2);" href="javascript:;" title="Costruisci il tuo portafoglio">Costruisci il tuo portafoglio33333333</a>
			<a class="ricerca" onclick="showBox3TabInv(3);" href="javascript:;" title="Ricerca e investi in autonomia">Ricerca e investi in autonomia</a>
			<br class="clear" />
		</div>
		<div class="boxcontainerinv boxcontainerinv3">
			<div><span>Tutti gli strumenti per investire</span><p>Con gli strumenti Morningstar puoi cercare, analizzare, confrontare e selezionare i fondi in completa <strong>autonomia</strong>.</p>
			<a class="btncercafondi" href="#" title="cerca fondi">cerca fondi</a>
			<a class="btnclassifiche" href="#" title="classifiche">classifiche</a>
			</div>
		</div>
	</div>
	<div class="boxcontainerinvfoot"><a href="#" title="Investire in fondi">Investire in fondi</a><a href="#" title="" class="frec_vid"></a><a href="#" class="offerta" title="Tutta l'offerta">Tutta l'offerta</a> 
		
		<!-- slider-->
		<div class="slider" id="slider">
		<!--<img src="/img/ret/loghi_sli.gif" />-->
			<div class="scroller" id="contentscroller">		
				<div id="contentSlider">	
					<script type="text/javascript">window.onload =initSliderfp();</script>
				</div>
				
			</div>
		</div>
		<!-- fine slider-->
	</div>
</div>


<?php 
	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
?>
<div id="selezb">
	<table cellspacing="0" cellpadding="0" border="0">
		<tbody>
			<tr>
				<td>Lorem ipsum dolor sit amet</td>
				<td><select name="select"><option>12345-1234567890123 - EUR - C/D 00596 - 0000000014 - EUR - MMMMMMMMMMMM</option><option>12345-1234567890123 - EUR</option></select>
					<a href="#" class="preferito"><img src="img/ico1gr_preferito.gif" alt ="Conto Preferito"/></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<table cellspacing="0" cellpadding="0" class="tab17 tab17nob tab17bottomspaced">
	<tbody>
	  <tr> 
		<th width="160">Lorem ipsum lorem ipsum</th>
		<th width="143">Lorem ipsum lorem ipsum</th>
		<th width="143">Lorem ipsum lorem ipsum</th>
		<th width="144" class="ultimo">Lorem ipsum</th>
	  </tr>
	  <tr class="b bb"> 
		<td class="sx">Lorem ipsum</td>
		<td class="dx">10.000,00</td> 
		<td class="dx">10.000,00</td> 
		<td class="dx ultimo v">+5,00</td>
	  </tr>
	  <tr class="c bb"> 
		<td class="sx">Dolor sit</td>
		<td class="dx">10.000,00</td> 
		<td class="dx">10.000,00</td> 
		<td class="dx ultimo r">-1,00</td>
	  </tr>
		<tr class="b"> 
		<td class="sx lastrow"><b>Lorem</b></td>
		<td class="dx lastrow"><b>10.000,00</b></td> 
		<td class="dx lastrow"><b>10.000,00</b></td> 
		<td class="dx ultimo vb lastrow">+4,00</td>
	  </tr>         
	</tbody>
</table>
<br class="clear">
<?php 
	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
?>
<div id="selezb">
<table cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td>Lorem ipsum dolor sit amet</td>
		<td><select name="select"><option>12345-1234567890123 - EUR</option><option/></select></td>
	</tr>
</tbody></table>
</div>
<table cellspacing="0" cellpadding="0" class="tab17 tab17nob">
	<tbody>
		   <tr> 
			<th width="160" class="uno"></th>
			<th width="110">Lorem ipsum lorem ipsum</th>
			<th width="110">Lorem ipsum lorem ipsum</th>
			<th width="110">Lorem ipsum lorem ipsum</th>
			<th width="99" class="ultimo">Lore.</th>
		  </tr>
		  <tr class="b"> 
			<td class="sx lastrow"><a href="#">Lorem ipsum dolor sit ame</a></td>
			<td class="sx lastrow">Lorem ipsum</td>
			<td class="dx lastrow">10.000,00</td> 
			<td class="dx lastrow">10.000,00</td> 
			<td class="dx ultimo vb lastrow">+4,00</td>
		  </tr>         
	</tbody>
</table>
<div class="fooform">
	<div class="fooformright">
		<div><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a></div>
	<br class="clear"/>
	</div><br class="clear"/>
</div>
<br class="clear">

<!-- INIZIO CODICE-->
<?php
	//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_080.html");
?>


<!--<script type="text/javascript">
var hzAccordion = null;

document.observe('dom:loaded', function () {
	hzAccordion = new HzAccordion('accordionInv');
	
	$$('#tbSceltaInv .boxScelta').each(function (item, index) {
		item.observe('mouseover', function (event) {
			if (!this.hasClassName('disattivo1') && !this.hasClassName('disattivo2')) {
				if (!this.hasClassName('over')) this.addClassName('over');
			}
			else this.removeClassName('over');
		});
		item.observe('mouseout', function (event) {
			this.removeClassName('over');
		});
	});
});
</script>-->