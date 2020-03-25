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
	<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
	<div class="txtAlCenter">
		<a href="javascript:;" class="aButton"><span>lorem</span></a>
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


<table>				
	<tr>
		<td><span class="tipoo"><b>DELEGHE F24</b></span><br></td>
	</tr>
</table>

<table class="bgbianco">
	<tr>		
		<td class="contornoTabellaCompleta">
			<img src="/wscmn/img/immagineTitolo.jpg" alt="" align="middle">
		</td>				
	</tr>
</table>

<table class="contornoInfoInizioPagina" id="tbInfo">
	<tr>
		<td class="nota">I campi marcati con '*' sono obbligatori&nbsp;-&nbsp;<img src="/wscmn/img/campovis.gif"> &nbsp;Campi di sola visualizzazione - <img src="/wscmn/img/campoerr.gif" alt="">&nbsp;Campi in errore</td>
	</tr>
</table>

<form method="post" name="f24MainForm" action="/ModF24/F24WEB/salvaComeBozza.do">

<!-- Sezione dati di personalizzazione -->
  <input value="ins" id="hdModPag" name="hdModPag" type="hidden"> 
  <input value="WBK" id="hdBanca" name="hdBanca" type="hidden"> 
  <input value="ute" id="hdProf" name="hdProf" type="hidden"> 
  <input value="no" id="hdAccise" name="hdAccise" type="hidden"> 
  <input value="ultimi10" id="hdUltimaPagDiRiepilogo" name="hdUltimaPagDiRiepilogo" type="hidden">
  
  
<!-- Sezione dati delega --> 
  <input id="hdChiave" name="hdChiave" value="" type="hidden">
  <input id="hdStato" name="hdStato" value="" type="hidden">

  <input id="toDetails" name="toDetails" value="" type="hidden">
  <input id="whatBack" name="whatBack" value="" type="hidden">

  <!-- Sezione paginazione ricerca --> 
  <input name="paginaDestinazione" id="paginaDestinazione" value="" type="hidden">
  <input name="hdOrder" id="hdOrder" value="" type="hidden">
  <input id="from" name="from" value="" type="hidden">
  <input name="id_transazione" id="id_transazione" value="1" type="hidden">

<table>
	<tbody><tr>
		<th>CONTRIBUENTE</th>
	</tr>
</tbody></table>

<table class="contribuente">
	<tbody><tr>
		<td class="co01"><span>CODICE FISCALE</span></td>
		<td class="co02"><strong>MMMNNN73A19A205U</strong></td>
		<td class="co03">Barrare in caso di anno d'imposta non coincidente con anno solare</td>	
		<td class="co04" align="center"></td>
	</tr>
	<tr>
		<td><span>DATI ANAGRAFICI</span></td>
		<td id="labelC_R">cognome, denominazione o ragione sociale</td>
		<td colspan="2" valign="bottom">nome</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td id="contribuente.cognomeTD" style=""><strong>Lorem ipsum</strong></td>
		<td style="display: none;" id="contribuente.ragSocTD"><strong>Lorem ipsum</strong></td>
		<td colspan="2"><strong>Lorem ipsum</strong></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<table class="datses"> <tbody><tr>					
				<td>data di nascita (ggmmaaaa)<br><strong>00/00/0000</strong></td>
				
				<td>sesso<br><strong>M</strong></td>
		 </tr></tbody></table>
		 </td> 
		<td>comune (o Stato estero) di nascita<br><strong>Lorem ipsum</strong></td>
		<td>
		<!--NUOVO TOOLTIP-->
				<div class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"><strong class="colorBank">provincia</strong></a></span>
				<span class="uniqTooltipInnerHTML">
				<p>Per i nati all'estero dal campo provincia va selezionato il valore EE</p>
				</span></span></span></div>		
				<strong>MI</strong></td>
	</tr>				
	<tr>
		<td><span>DOMICILIO FISCALE</span></td>
		<td>Comune*<br><strong>Lorem ipsum</strong></td>
		<td colspan="2">
		<table class="provia">
			<tbody><tr>					
				<td>prov*<br><strong>MI</strong></td>
		<td>via e numero civico*<br><strong>Lorem ipsum</strong></td>
		</tr></tbody></table>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<table class="codfisc">					
				<tr>
					<td><span>CODICE FISCALE del coobbligato, erede, genitore, tutore o curatore fallimentare</span></td>
					<td><strong>MMMNNN73A19A205U</strong></td>
					<td>codice identificativo</td>
					<td><strong>01</strong></td>
				</tr>				
			</table>
		</td>
	</tr>							
</table>

<table>		
	<tr>
		<th>DATI TITOLARE CONTO</th>
	</tr>
</table>
<table>
	<tr>
		<td colspan="4">codice fiscale*<br><strong>MMMNNN73A19A205U</strong></td>
	</tr>
	<tr>
		<td>comune*<br><strong>Lorem ipsum</strong></td>
		<td>prov<br><strong>MI</strong></td>
		<td>via e numero civico*<br><strong>Lorem ipsum</strong></td>
		<td>cap*<br><strong>00000</strong></td>
	</tr>
</table>


<table>		
	<tr>
		<th>SEZIONE ERARIO:<span> Imposte Dirette - IVA  - Ritenute alla Fonte -  Altri Tributi ed Interessi</span></th>
	</tr>
</table>
<table id="erario_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table id="TableErario" class="erario">
	<tr>
		<td class="er01">codice tributo</td>
		<td class="er01b">rateazione<br>regione/prov.</td>
		<td class="er01">anno<br>(aaaa)</td>
		<td class="er02">importi a debito<br>versati</td>
		<td class="er03">importi a credito<br>compensati</td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>	
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>	
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>	
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>	
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>	
	<tr>
		<td class="alright" colspan="3"><br>Totale</td>
		<td><div class="lettera">A</div><strong>00,00</strong></td>
		<td><div class="lettera">B</div><strong>00,00</strong></td>		
		<td><div class="lettera">Saldo A-B</div><strong>00,00</strong></td>		
	</tr>				
	<tr>
		<td class="alleft">codice ufficio<br><strong>0000</strong></td>
		<td class="alleft" colspan="5">codice atto<br><strong>0000</strong></td>	
	</tr>
</table>



<table>		
	<tr>
		<th>SEZIONE INPS</th>
	</tr>
</table>
<table id="inps_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="inps" id="TableInps">
	<tr>
		<td class="in01" rowspan="2">codice sede</td>
		<td class="in02" rowspan="2">causale contributo</td>
		<td class="in03" rowspan="2">matricola INPS/ codice INPS/ filiale azienda</td>
		<td colspan="2">periodo di riferim.:</td>
		<td class="er02" rowspan="2">importi a debito<br>versati</td>
		<td class="er03" rowspan="2">importi a credito<br>compensati</td>
		<td class="er04" rowspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td>da<br>(mmaaaa)</td>
		<td>a<br>(mmaaaa)</td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td class="alright" colspan="5"><br>Totale</td>
		<td><div class="lettera">C</div><strong>00,00</strong></td>
		<td><div class="lettera">D</div><strong>00,00</strong></td>
		<td><div class="lettera">Saldo C-D</div><strong>00,00</strong></td>
	</tr>
</table>



<table>		
	<tr>
		<th>SEZIONE REGIONI</th>
	</tr>
</table>
<table id="regioni_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="regioni" id="TableRegioni">
	<tr>
		<td class="re01">codice<br>regione</td>
		<td class="re02">codice tributo</td>
		<td class="re01">rateazione</td>
		<td class="re03">anno<br>(aaaa)</td>
		<td class="er02">importi a debito<br>versati</td>
		<td class="er03">importi a credito<br>compensati</td>
		<td class="er04" rowspan="5">&nbsp;</td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td class="alright" colspan="4"><br>Totale</td>
		<td><div class="lettera">E</div><strong>00,00</strong></td>
		<td><div class="lettera">F</div><strong>00,00</strong></td>
		<td><div class="lettera">Saldo E-F</div><strong>00,00</strong></td>
	</tr>
</table>



<table>	
	<tr>
		<th class="imu">SEZIONE IMU ED ALTRI TRIBUTI LOCALI</th>
		<th class="alright"><span>IDENTIFICATIVO OPERAZIONE</span> <strong>123456789012345678</strong></th>
	</tr>
</table>
<table id="ici_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="ici" id="TableICI">
	<tr>
		<td class="ic01">cod.ente/<br>comune</td>
		<td class="ic02"><span style="font: 8px Arial,sans-serif;">Ravv.</span></td>
		<td class="ic03"><span style="font: 8px Arial,sans-serif;">immob.<br>variati</span></td>
		<td class="ic04"><span style="font: 8px Arial,sans-serif;">Acc.</span></td>
		<td class="ic05"><span style="font: 8px Arial,sans-serif;">Saldo</span></td>
		<td class="ic06">num.<br>immob.</td>
		<td class="ic07">codice<br>Tributo</td>
		<td class="ic08">rateaz.</td>
		<td class="ic09">anno<br>(aaaa)</td>
		<td class="er02">importi a debito<br>versati</td>
		<td class="er03">importi a credito<br>compensati</td>
		<td class="er04" rowspan="5">&nbsp;</td>
	</tr>
	
	<tr>
		<td><strong>0000</strong></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00,00</strong></td>
		<td><strong>00,00</strong></td>
	</tr>
	<tr>
		<td class="alright" colspan="9"><br>Totale</td>
		<td><div class="lettera">G</div><strong>00,00</strong></td>
		<td><div class="lettera">H</div><strong>00,00</strong></td>
		<td><div class="lettera">Saldo G-H</div><strong>00,00</strong></td>
	</tr>
	<tr>
		<td class="alleft" colspan="12">Detrazione ICI abitazione principale<br><strong>00,00</strong></td>
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