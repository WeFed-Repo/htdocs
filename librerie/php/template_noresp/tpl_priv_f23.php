<link rel="stylesheet" href="/wscmn/css/delega.css" type="text/css">
<link rel="stylesheet" href="/wscmn/css/priv_calendar.css" type="text/css">
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 0,
					//MxDate fissata solo come esempio
					maxDate: "+3M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "ddmmyy",
					showOtherMonths: true
					
				});
			});
</script>
<h1>F23</h1>
<div class="divtabellalist">
<table class="tabellalist">
	<tr>
		<td class="off first"><a title="Lorem ipsum" href="#1">F24</a></td>
		<td class="on"><a title="Lorem ipsum lorem" href="#1">F23</a></td>											
		<td class="end"> </td>
		
	</tr>
</table>
</div>



<div class="boxesito positivo">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span10">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
					<ul class="listafrec">
						<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
					</ul>
					<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus.</p>
				</div>
				<div class="span2">
					<div class="aButtoncons formCenteredBtn txtAlRight">
						<a href="javascript:;" class="aButton"><span>lorem ipsum</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="ErroriValidazione">
	<div class="boxtop"><img  border="0" alt="" src="/img/ret/box_msgtop.jpg"/></div>
	<br class="clear" />
	<div class="boxtxt"><p class="box_mess"><img border="0" class="dx" alt="" src="/wscmn/img/ico2inf_errorform.gif"/><img border="0" alt="" src="/img/ret/box_attenzione.jpg"/><br/>
	<br/><br/>
	Consectetuer adipiscing elit, sed diam nonummy nibh euismod (tincidunt), ut laoreet dolore magna aliquam erat volutpat.	Ut wisi enim ad minim veniam, <strong>QUIS NOSTRUD EXERCI TATION ULLACORPER</strong>. Lorem ipsum dolor sit amet,
	consectetuer adipiscing elit, sed diam nonummy nibh euismod (tincidunt).</p> 
	<br/>	
	<ul class="alert">
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet</li>
		<li>Lorem ipsum dolor sit amet</li>
	</ul>
	</div>
	<br class="clear" />
<div class="boxbottom"><img  border="0" alt="" src="/img/ret/box_msgbottom.jpg"/></div>
</div>
<br class="clear" />


<table class="f23">
	<tr>		
		<td rowspan="2" class="nopad"><img src="/wscmn/img/immagineTitolof23.jpg" alt="" align="middle"></td>
		<td class="nopad"><img src="/wscmn/img/immagineTitolof23b.jpg" alt="" align="middle"></td>		
	</tr>
	<tr>		
		<td class="numrif">NUMERO DI RIFERIMENTO<br><input class="f_big" value="" type="text"></td>			
	</tr>
</table>

<table class="f23">
	<tr>
		<td class="nota">I campi marcati con '*' sono obbligatori - <img src="/wscmn/img/campovis.gif"> Campi di sola visualizzazione - <img src="/wscmn/img/campoerr.gif" alt=""> Campi in errore</td>
	</tr>
</table>

<table  class="f23">	
	<tr>
		<th colspan="2">DATI ANAGRAFICI</th>
	</tr>
	<tr>
		<td>cognome, denominazione o ragione sociale<br><input class="f_bigx" value="" type="text"></td>
		<td>
		<table class="f23sub">	
			<tr>
				<td>nome<br><input class="f_big" value="" type="text"></td>
				<td>sesso<br><select>
							<option value=""></option>
							<option value="F"> F</option>
							<option value="M" selected="selected"> M</option>
							</select>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<table class="f23sub">	
			<tr>
				<td>data di nascita (ggmmaaaa)<br><input class="f_normal" maxlength="8" value="" type="text"></td>
				<td>comune (o Stato estero) di nascita<br><input class="f_medium" value="" type="text"></td>
			</tr>
		</table></td>
		<td>
		<table class="f23sub">	
			<tr>
				<td>
				<!--NUOVO TOOLTIP-->
				<div class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"><strong class="colorBank">provincia</strong></a></span>
				<span class="uniqTooltipInnerHTML">
				<p>100 Testo_semplice - Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
				</span></span></span></div>			
				<!--fine NUOVO TOOLTIP-->				
				<select>
			<option value=""></option>
			<option value="AL"> AL</option>
			<option value="AL" selected="selected"> AL</option>
			</select></td>
				<td>codice fiscale<br><input class="f_big" maxlength="16" value="" type="text"></td>				
			</tr>
		</table>
		</td>
	</tr>	
</table>
<table  class="f23">	
	<tr>
		<td>cognome, denominazione o ragione sociale<br><input class="f_bigx" value="" type="text"></td>
		<td>
		<table class="f23sub">	
			<tr>
				<td>nome<br><input class="f_big" value="" type="text"></td>
				<td>sesso<br><select>
							<option value=""></option>
							<option value="F"> F</option>
							<option value="M" selected="selected"> M</option>
							</select>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>
		<table class="f23sub">	
			<tr>
				<td>data di nascita (ggmmaaaa)<br><input class="f_normal" maxlength="8" value="" type="text"></td>
				<td>comune (o Stato estero) di nascita<br><input class="f_medium" value="" type="text"></td>
			</tr>
		</table></td>
		<td>
		<table class="f23sub">	
			<tr>
				<td>
				<!--NUOVO TOOLTIP-->
				<div class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"><strong class="colorBank">provincia</strong></a></span>
				<span class="uniqTooltipInnerHTML">
				<p>100 Testo_semplice - Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
				</span></span></span></div>			
				<!--fine NUOVO TOOLTIP-->
				<select>
			<option value=""></option>
			<option value="AL"> AL</option>
			<option value="AL" selected="selected"> AL</option>
			</select></td>
				<td>codice fiscale<br><input class="f_big" maxlength="16" value="" type="text"></td>				
			</tr>
		</table>
		</td>
	</tr>	
</table>

<table class="f23">	
	<tr>
		<th>DATI DEL VERSAMENTO</th>
	</tr>
</table>

<table class="f23">
	<tr>
		<th colspan="2" class="nobg">UFFICIO O ENTE</th>
		<th class="nobg">COD. TERRITORIALE</th>
		<th class="nobg">CONTENZIOSO</th>
		<th class="nobg">CAUSALE</th>
		<th colspan="2" class="nobg">ESTREMI DELL'ATTO DEL DOCUMENTO</th>
	</tr>
	</tr>
		<td width="40">codice<br/><input class="f_4num" id="" type="text" maxlength="3"></td>
		<td>sub codice<br/><input class="f_3num" id="" type="text" maxlength="2"></td>
		<td>&nbsp;<br/><input class="f_small" id="" type="text" maxlength="4"></td>
		<td>&nbsp;<br/><input id="" type="text" maxlength="1"></td>
		<td>&nbsp;<br/><input class="f_3num" id="" type="text" maxlength="2"></td>
		<td width="50">anno<br/><input class="f_small" id="" type="text" maxlength="4"></td>
		<td>numero<br/><input class="f_15num" id="" type="text"></td>
	</tr></tr>
</table>


<table class="f23 f23h">
	<tr>
		<th class="nobg" style="width:90px">CODICE<br/>TRIBUTO</th>
		<th class="nobg" style="width:260px">
		<!--NUOVO TOOLTIP-->
				<div class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"><strong class="colorBank">DESCRIZIONE</strong></a></span>
				<span class="uniqTooltipInnerHTML">
				<p>100 Testo_semplice - Lorem ipsum sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad </p>
				</span></span></span></div>			
				<!--fine NUOVO TOOLTIP-->
		
		</th>
		<th class="nobg">IMPORTO</th>
		<th class="nobg" style="width:90px">CODICE<br/>DESTINATARIO</th>		
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>	
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
	</tr>
	<tr>
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
		<td><input class="f_big" id="" type="text" disabled="disabled"></td>		
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text" maxlength="2"></td>	
		<td><input class="f_4num" id="" type="text" maxlength="4"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td class="rg">PER UN IMPORTO COMPLESSIVO DI EURO</td>
		<td><input class="f_medium rg" id="" type="text">,<input id="" type="text"></td>	
		<td>&nbsp;</td>		
	</tr>
</table>



<table class="f23">	
	<tr>
		<th>ESTREMI DEL VERSAMENTO</th>
	</tr>
</table>
<table class="f23">
	<tr>
		<td>Numero conto<br><input class="f_medium" readonly="readonly"  maxlength="16"  type="text"></td>
		<td>Abi<br><input class="f_5num" maxlength="5" type="text"></td>
		<td>Cab<br><input class="f_5num" maxlength="5" type="text"></td>
		<td>Data pagamento (ggmmaaaa)<br><input id="datepicker" size="15" maxlength="8" class="f_8num flLeftf23" type="text"></td>
	</tr>
	<tr>
		<td colspan="4">Autorizzo addebito su conto corrente codice IBAN IT52O0340201749000000083891</td>
	</tr>
</table>
<br /><br />
<div class="fooform">
	<div class="fooformtop">Step <strong>1</strong> di 2</div>
	<div class="fooformleft">
		<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>
	<div class="fooformright">
		<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>