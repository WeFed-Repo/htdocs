<script>
document.observe('dom:loaded', function() {
	openPopOverLayer('layeralert2', 'fixed');
	
	initInputX('inputX1');
});


</script>
<!-- /ESEMPIO -->

<!-- ESEMPIO PER L'OVERLAYER -->
<div class="layeralert2" id="layeralert2" style="display: none; top: 125px">
	<div class="head" ></div>
	<div id="bodyPopUp" class="body">
			<div class="important">
				<h3 id="setDescVincoloTitolo" class="verde">MODIFICA IL NOME DELLA LINEA VINCOLATA</h3>
				<p><strong id="setDescVincoloPar">Puoi modificare il nome usato per identificare questa linea vincolata</strong><br>
				<br class="clear">
				</p><p id="msgErrorVincoli3" class="nega"></p>
				
				<table class="form01 formpop">
					<tbody>	
						<tr> 
							<td width="75" class="uno">Linea n° </td>
							<td width="148" id="idV" class="uno" style="font-weight: bold;">248</td>
							<td width="75" class="uno">Data scadenza</td>
							<td width="148" id="dataScadenzaV" class="uno" style="font-weight: bold;">16/02/2013</td>
						</tr>
						<tr> 
							<td class="uno">Tasso</td>
							<td id="tassoL" class="uno" style="font-weight: bold;">4,00%</td>
							<td class="uno">Durata</td>
							<td id="durataV" class="uno" style="font-weight: bold;">12 mesi</td>
						</tr>	
						<tr> 
							<td class="uno">Importo</td>
							<td id="importoV" class="uno" style="font-weight: bold;">4.500,00 EUR</td>
							<td class="uno">Importo finale</td>
							<td id="importoS" class="uno" style="font-weight: bold;">4.644,00 EUR</td>
						</tr>
						<tr> 
							<td valign="top" class="uno">Nome linea<p>(opzionale)</p></td>
							<td width="200" class="last nameform" colspan="3">
								<!--div id="confermaContent13" class="inputcont Inactive">
									<input class="nomeL" id="nomeL" maxlength="20">
									<a class="hrefL" id="hrefL" href="javascript:;" title=""></a> 								
								</div-->
								<div>
									<div id="inputX1" class="descLVinput">
										<div class="inputcont Inactive" id="">
											<input type="text" value="- nessuna descrizione -" maxlength="20" class="MB_focusable">
											<a title="" href="javascript:;" class="MB_focusable"></a><br>
										</div>
									</div><br class="clear" />
									<p class="note">Massimo 20 caratteri</p>
								</div>
									
							</td>		
						</tr>
					</tbody>
				</table>
				
			</div>
			<br class="clear">
			<a onclick="loadSetDescrVincolo()" href="#1" class="btnformright" title="Salva"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Salva</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
			<a onclick="closeAlert('layerSetDescrizioneVincolo')" href="#1" class="btnformright" title="Annulla"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Annulla</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
			<br class="clear">
		</div>
	<div class="foot"></div>
</div>
<!-- /ESEMPIO PER L'OVERLAYER -->

<?php virtual ("/librerie/include/commons/titoli/tit_black_priv_004.html"); ?>
<!-- INIZIO CODICE--> 
<table class="text01">
<tr><td>Suspendisse sem mi, sodales in, <strong>porta et</strong>, consequat a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
<span class="tooltip"><a href="#1">Vestibulum aliquam dui vitae risus.<span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
<br /><br />
</td>
<td><img src="/img/ret/spazio2.gif" alt="" /></td></tr>
</table>
<!-- FINE CODICE-->

<!-- INIZIO CODICE--> 
<div class="divisorio"></div>
<table class="text01">
<tr><td><img src="/img/ret/spazio2.gif" alt="" /></td>
<td><strong class="verde">Titolo paragrafo</strong><br />Suspendisse sem mi, sodales in, porta et, <b>consequat</b> a, nisl. Morbi et nulla. Nulla urna. In a justo vitae eros tempor <a href="#1">placerat</a>. Phasellus semper faucibus velit. Proin elit. In hac habitasse platea dictumst. Donec purus. Donec varius egestas orci.
<span class="tooltip"><a href="#1">Vestibulum aliquam dui vitae risus.<span><span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vestibulum placerat. Nullam nec justo eget turpis pharetra rhoncus.</span></span></span></a></span>
<br /><br />
<ul>
	<li>Lorem ipsum dolor</li>
	<li>Lorem ipsum dolor</li>
</ul>
<ul class="listafrec">
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
</ul>
</td>
</tr>
</table>
<div class="fooform">
	<div class="fooformtop2"></div>	
	<div class="fooformright">
		<div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/segnaposto_lev.gif" alt="" /><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div>
	<br class="clear"/>
	</div>	
<br class="clear"/>
</div>
<div class="divisorio"></div>
<!-- FINE CODICE-->
<?php virtual ("/librerie/include/commons/navigazione/nav_black_priv_015.html"); ?>
<?php virtual ("/librerie/include/commons/testi/txt_black_priv_011.html"); ?>
<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	

