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
		<td class="co02"><input id="f1-0-7" tabindex="1" maxlength="16" onblur="javascript:setFormOnChange_CF_PIVA(false);" onfocus="normalizeColor(this);" value="SRNTZN52A23I625L" name="contribuente.codFis" type="text"></td>
		<td class="co03">Barrare in caso di anno d'imposta non coincidente con anno solare</td>	
		<td class="co04" align="center"><input class="ckb" name="flagAnnoSolare" tabindex="2" onfocus="this.style.backgroundColor=0xFFFFFF;" value="1" type="checkbox"></td>
	</tr>
	<tr>
		<td><span>DATI ANAGRAFICI</span></td>
		<td id="labelC_R">cognome, denominazione o ragione sociale</td>
		<td colspan="2" valign="bottom">nome</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td id="contribuente.cognomeTD" style=""><input id="cognome" onfocus="normalizeColor(this);" tabindex="3" maxlength="24" value="SIRONI" name="contribuente.cognome" onkeypress="javascript:return noNumbers(event);" type="text"></td>
		<td style="display: none;" id="contribuente.ragSocTD"><input id="ragSoc" onfocus="normalizeColor(this);" tabindex="3" maxlength="55" name="contribuente.ragSoc" type="text"></td>
		<td colspan="2"><input style="background-color: rgb(255, 255, 255);" id="nome" onfocus="normalizeColor(this);" tabindex="4" maxlength="20" value="TIZIANO" name="contribuente.nome" onkeypress="javascript: return noNumbers(event);" type="text"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<table class="datses"> <tbody><tr>					
				<td>data di nascita (ggmmaaaa)<br><input style="background-color: rgb(255, 255, 255);" id="dataNasc" tabindex="5" onfocus="javascript: normalizeColor(this);" maxlength="8" value="23011952" name="contribuente.dataNascitaHtml" onkeypress="javascript: return onlyNumbers(event);" type="text"></td>
				
				<td>sesso<br><select style="background-color: rgb(255, 255, 255);" class="selectcls" id="sesso" onclick="normalizeColor(this);" tabindex="6" name="contribuente.sesso">
						<option value=""></option>
					  	<option value="F"> F</option>

					  	<option value="M" selected="selected"> M</option>

				  </select></td>
		 </tr></tbody></table>
		 </td> 
		<td>comune (o Stato estero) di nascita<br><input style="background-color: rgb(255, 255, 255);" id="comNasc" onfocus="normalizeColor(this);" tabindex="7" maxlength="25" name="contribuente.comuneNascita" onkeypress="javascript: return noNumbers(event);" type="text"></td>
		<td>
		<!--NUOVO TOOLTIP-->
				<div class="tolltipclick"><span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;"><strong class="colorBank">provincia</strong></a></span>
				<span class="uniqTooltipInnerHTML">
				<p>Per i nati all'estero dal campo provincia va selezionato il valore EE</p>
				</span></span></span></div>			
				<!--fine NUOVO TOOLTIP-->		
			<select style="background-color: rgb(255, 255, 255);margin-top:2px" class="selectcls" id="prov" onclick="normalizeColor(this);" tabindex="8" name="contribuente.provinciaNascita">
						<option selected="selected" value=""></option>						
						<option value="AG">AG</option>
						<option value="VA">VA</option>
						<option value="VV">VV</option>				
		  	</select></td>
	</tr>				
	<tr>
		<td><span>DOMICILIO FISCALE</span></td>
		<td>Comune*<br><input id="comDomic" onfocus="normalizeColor(this);" value="SEREGNO" tabindex="9" maxlength="25" name="contribuente.comuneDomicilio" onkeypress="javascript: return noNumbers(event);" type="text"></td>
		<td colspan="2">
		<table class="provia">
			<tbody><tr>					
				<td>prov*<br><select class="selectcls" id="provDomic" onclick="normalizeColor(this);" tabindex="10" name="contribuente.provinciaDomicilio">
						<option selected="selected" value=""></option>							
						<option value="AG">AG</option>							
						<option value="VA">VA</option>
						<option value="VV">VV</option>										
		  	</select></td>
		<td>via e numero civico*<br><input id="indirizzo" onfocus="normalizeColor(this);" tabindex="11" maxlength="25" value="LARGO G.F.PIERMARINI 17" name="contribuente.indirizzo" type="text"></td>
		</tr></tbody></table>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<table class="codfisc">					
				<tr>
					<td><span>CODICE FISCALE del coobbligato, erede, genitore, tutore o curatore fallimentare</span></td>
					<td><input id="f1-0-14" onfocus="normalizeColorCF_ID(this);" onblur="checkCF(this, true); /*checkIsSameCF();*/" tabindex="12" maxlength="16" name="contribuente.codiceFiscale2" type="text"></td>
					<td>codice identificativo</td>
					<td><input id="f1-0-15" onfocus="normalizeColorCF_ID(this);" tabindex="13" maxlength="2" name="contribuente.codiceIdentif" type="text"></td>
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
		<td colspan="4">codice fiscale*<br><input id="Text10" readonly="readonly" maxlength="16" value="SRNTZN52A23I625L" name="contoCorrente.codiceFiscale" type="text"></td>
	</tr>
	<tr>
		<td>comune*<br><input readonly="readonly" id="Text11" value="SEREGNO" maxlength="25" name="mittente.comune" type="text"></td>
		<td>prov<br><input readonly="readonly" id="Text12" value="MB" maxlength="2" name="mittente.provincia" type="text"></td>
		<td>via e numero civico*<br><input readonly="readonly" id="Text13" value="LARGO G.F.PIERMARINI 17" maxlength="34" name="mittente.indirizzo" type="text"></td>
		<td>cap*<br><input readonly="readonly" id="Text14" value="20038" maxlength="5" name="mittente.cap" type="text"></td>
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
		<td class="er04" rowspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-1-1" tabindex="19" size="20" maxlength="4" name="sezione(erario).riga[0].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-1-2" tabindex="20" maxlength="4" name="sezione(erario).riga[0].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-1-3" tabindex="21" maxlength="4" name="sezione(erario).riga[0].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>	
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-1-4" tabindex="22" maxlength="11" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].interiImportoDebito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-1-4-bis" tabindex="23" maxlength="2" size="2" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].centImportoDebito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text">
		</td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-1-5" tabindex="24" maxlength="11" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].interiImportoCredito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-1-5-bis" tabindex="25" maxlength="2" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].centImportoCredito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-2-1" tabindex="26" maxlength="4" name="sezione(erario).riga[1].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-2-2" tabindex="27" maxlength="4" name="sezione(erario).riga[1].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-2-3" tabindex="28" maxlength="4" name="sezione(erario).riga[1].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-2-4" tabindex="29" maxlength="11" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].interiImportoDebito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-2-4.bis" tabindex="30" maxlength="2" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].centImportoDebito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-2-5" tabindex="31" maxlength="11" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].interiImportoCredito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-2-5-bis" tabindex="32" maxlength="2" onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].centImportoCredito" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-3-1" tabindex="33" maxlength="4" name="sezione(erario).riga[2].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-3-2" tabindex="34" maxlength="4" name="sezione(erario).riga[2].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-3-3" tabindex="35" maxlength="4" name="sezione(erario).riga[2].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-3-4" tabindex="36" maxlength="11" name="sezione(erario).riga[2].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-3-4-bis" tabindex="37" maxlength="2" name="sezione(erario).riga[2].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-3-5" tabindex="38" maxlength="8" name="sezione(erario).riga[2].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-3-5-bis" tabindex="39" maxlength="2" name="sezione(erario).riga[2].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-4-1" tabindex="40" maxlength="4" name="sezione(erario).riga[3].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-4-2" tabindex="41" maxlength="4" name="sezione(erario).riga[3].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-4-3" tabindex="42" maxlength="4" name="sezione(erario).riga[3].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-4-4" tabindex="43" maxlength="11" name="sezione(erario).riga[3].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-4-4-bis" tabindex="44" maxlength="2" size="2" name="sezione(erario).riga[3].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-4-5" tabindex="45" maxlength="11" name="sezione(erario).riga[3].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-4-5-bis" tabindex="46" maxlength="2" name="sezione(erario).riga[3].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-5-1" tabindex="47" maxlength="4" name="sezione(erario).riga[4].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-5-2" tabindex="48" maxlength="4" name="sezione(erario).riga[4].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-5-3" tabindex="49" maxlength="4" name="sezione(erario).riga[4].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-5-4" tabindex="50" maxlength="11" name="sezione(erario).riga[4].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-5-4-bis" tabindex="51" maxlength="2" name="sezione(erario).riga[4].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-5-5" tabindex="52" maxlength="11" name="sezione(erario).riga[4].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-5-5-bis" tabindex="53" maxlength="2" name="sezione(erario).riga[4].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f2-6-1" tabindex="54" maxlength="4" name="sezione(erario).riga[5].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-6-2" tabindex="55" maxlength="4" name="sezione(erario).riga[5].rateazione" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f2-6-3" tabindex="56" maxlength="4" name="sezione(erario).riga[5].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-6-4" tabindex="57" maxlength="11" name="sezione(erario).riga[5].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-6-4-bis" tabindex="58" maxlength="2" size="2" name="sezione(erario).riga[5].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f2-6-5" tabindex="59" maxlength="11" name="sezione(erario).riga[5].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f2-6-5.bis" tabindex="60" maxlength="2" name="sezione(erario).riga[5].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td class="alright" colspan="3"><br>Totale</td>
		<td><div class="lettera">A</div><input class="dim80rg" id="f2-0-1" readonly="readonly" onfocus="this.blur();" name="sezione(erario).interiTotaleDebito" maxlength="13" size="7" type="text"><div class="virgola" style="display: inline;">,</div><input id="f2.0.1.bis" name="sezione(erario).centTotaleDebito" maxlength="2" size="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
		<td><div class="lettera">B</div><input class="dim80rg" id="f2-0-2" name="sezione(erario).interiTotaleCredito" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f2-0-2-bis" name="sezione(erario).centTotaleCredito" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
		
		<td><div class="lettera">Saldo A-B</div><input class="dim80rg" id="f2-0-99" name="sezione(erario).interiSaldo" value="0" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f2-0-99-bis" maxlength="2" size="2" name="sezione(erario).centSaldo" value="00" readonly="readonly" onfocus="this.blur();" type="text"></td>				
		
	</tr>				
	<tr>
		<td class="alleft">codice ufficio<br><input name="sezione(erario).codiceUfficio" id="f2-0-3" tabindex="61" maxlength="3" onfocus="normalizeColor(this);" type="text"></td>
		<td class="alleft" colspan="5">codice atto<br><input name="sezione(erario).codiceAtto" onchange="isReale(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" id="f2-0-4" tabindex="62" maxlength="11" type="text"></td>
	
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
		<td><input class="dim33" id="f3-1-1" name="sezione(inps).riga[0].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" tabindex="63" maxlength="4" type="text"></td>
		<td><input class="dim38" id="f3-1-2" name="sezione(inps).riga[0].causaleContributo" onfocus="normalizeColor(this);" tabindex="64" maxlength="5" type="text"></td>
		<td><input class="dim64" id="f3-1-3" name="sezione(inps).riga[0].codiceInps" tabindex="65" maxlength="17" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-1-4" name="sezione(inps).riga[0].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" tabindex="66" maxlength="6" type="text"></td>
		<td><input class="dim44" id="f3-1-5" name="sezione(inps).riga[0].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" tabindex="67" maxlength="6" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-1-6" tabindex="68" maxlength="11" name="sezione(inps).riga[0].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-1-6-bis" tabindex="69" maxlength="2" name="sezione(inps).riga[0].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-1-7" tabindex="70" maxlength="11" name="sezione(inps).riga[0].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-1-7-bis" tabindex="71" maxlength="2" name="sezione(inps).riga[0].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f3-2-1" name="sezione(inps).riga[1].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" tabindex="72" maxlength="4" type="text"></td>
		<td><input class="dim38" id="f3-2-2" tabindex="73" maxlength="5" name="sezione(inps).riga[1].causaleContributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim64" id="f3-2-3" tabindex="74" maxlength="17" name="sezione(inps).riga[1].codiceInps" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-2-4" tabindex="75" maxlength="6" name="sezione(inps).riga[1].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-2-5" tabindex="76" maxlength="6" name="sezione(inps).riga[1].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-2-6" tabindex="77" maxlength="11" size="7" name="sezione(inps).riga[1].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-2-6-bis" tabindex="78" maxlength="2" size="2" name="sezione(inps).riga[1].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-2-7" tabindex="79" maxlength="11" name="sezione(inps).riga[1].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-2-7-bis" tabindex="80" maxlength="2" name="sezione(inps).riga[1].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f3-3-1" tabindex="81" maxlength="4" name="sezione(inps).riga[2].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim38" id="f3-3-2" tabindex="82" maxlength="5" name="sezione(inps).riga[2].causaleContributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim64" id="f3-3-3" tabindex="83" maxlength="17" name="sezione(inps).riga[2].codiceInps" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-3-4" tabindex="84" maxlength="6" name="sezione(inps).riga[2].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-3-5" tabindex="85" maxlength="6" size="5" name="sezione(inps).riga[2].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-3-6" tabindex="86" maxlength="11" name="sezione(inps).riga[2].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-3-6-bis" tabindex="87" maxlength="2" name="sezione(inps).riga[2].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-3-7" tabindex="88" maxlength="11" name="sezione(inps).riga[2].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-3-7-bis" tabindex="89" maxlength="2" name="sezione(inps).riga[2].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f3-4-1" tabindex="90" maxlength="4" name="sezione(inps).riga[3].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim38" id="f3-4-2" tabindex="91" maxlength="5" name="sezione(inps).riga[3].causaleContributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim64" id="f3-4-3" tabindex="92" maxlength="17" name="sezione(inps).riga[3].codiceInps" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-4-4" tabindex="93" maxlength="6" name="sezione(inps).riga[3].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim44" id="f3-4-5" tabindex="94" maxlength="6" name="sezione(inps).riga[3].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-4-6" tabindex="95" maxlength="11" name="sezione(inps).riga[3].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-4-6-bis" tabindex="96" maxlength="2" size="2" name="sezione(inps).riga[3].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f3-4-7" tabindex="97" maxlength="11" name="sezione(inps).riga[3].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f3-4-7-bis" tabindex="98" maxlength="2" name="sezione(inps).riga[3].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td class="alright" colspan="5"><br>Totale</td>
		<td><div class="lettera">C</div><input class="dim80rg" id="f3-0-1" name="sezione(inps).interiTotaleDebito" maxlength="13" size="7" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f3-0-1-bis" name="sezione(inps).centTotaleDebito" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
		<td><div class="lettera">D</div><input class="dim80rg" id="f3-0-2" name="sezione(inps).interiTotaleCredito" maxlength="13" size="7" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f3-0-2-bis" name="sezione(inps).centTotaleCredito" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text">
		</td>
		<td><div class="lettera">Saldo C-D</div><input class="dim80rg" id="f3-0-99" name="sezione(inps).interiSaldo" value="0" maxlength="13" size="6" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f2-0-99-bis" name="sezione(inps).centSaldo" value="00" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text">
		</td>
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
		<td><input class="dim33" id="f4-1-1" tabindex="99" maxlength="2" name="sezione(regioni).riga[0].codiceRegione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f4-1-2" tabindex="100" maxlength="4" name="sezione(regioni).riga[0].codiceTributo" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-1-3" tabindex="101" maxlength="4" name="sezione(regioni).riga[0].rateazione" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-1-4" tabindex="102" maxlength="4" name="sezione(regioni).riga[0].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-1-5" tabindex="103" maxlength="11" name="sezione(regioni).riga[0].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-1-5-bis" tabindex="104" maxlength="2" name="sezione(regioni).riga[0].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-1-6" tabindex="105" maxlength="11" name="sezione(regioni).riga[0].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-1-6-bis" tabindex="106" maxlength="2" size="2" name="sezione(regioni).riga[0].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f4-2-1" tabindex="107" maxlength="2" name="sezione(regioni).riga[1].codiceRegione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f4-2-2" tabindex="108" maxlength="4" name="sezione(regioni).riga[1].codiceTributo" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-2-3" tabindex="109" maxlength="4" name="sezione(regioni).riga[1].rateazione" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-2-4" tabindex="110" maxlength="4" name="sezione(regioni).riga[1].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-2-5" tabindex="111" maxlength="11" name="sezione(regioni).riga[1].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-2-5-bis" tabindex="112" maxlength="2" name="sezione(regioni).riga[1].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-2-6" tabindex="113" maxlength="11" name="sezione(regioni).riga[1].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-2-6-bis" tabindex="114" maxlength="2" name="sezione(regioni).riga[1].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f4-3-1" tabindex="115" maxlength="2" name="sezione(regioni).riga[2].codiceRegione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f4-3-2" tabindex="116" maxlength="4" name="sezione(regioni).riga[2].codiceTributo" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-3-3" tabindex="117" maxlength="4" name="sezione(regioni).riga[2].rateazione" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-3-4" tabindex="118" maxlength="4" name="sezione(regioni).riga[2].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-3-5" tabindex="119" maxlength="11" name="sezione(regioni).riga[2].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-3-5-bis" tabindex="120" maxlength="2" name="sezione(regioni).riga[2].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-3-6" tabindex="121" maxlength="11" name="sezione(regioni).riga[2].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-3-6-bis" tabindex="122" maxlength="2" name="sezione(regioni).riga[2].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim33" id="f4-4-1" tabindex="123" maxlength="2" name="sezione(regioni).riga[3].codiceRegione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim33" id="f4-4-2" tabindex="124" maxlength="4" name="sezione(regioni).riga[3].codiceTributo" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-4-3" tabindex="125" maxlength="4" name="sezione(regioni).riga[3].rateazione" onfocus="normalizeColor(this);" onblur="" type="text"></td>
		<td><input class="dim33" id="f4-4-4" tabindex="126" maxlength="4" name="sezione(regioni).riga[3].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-4-5" tabindex="127" maxlength="11" name="sezione(regioni).riga[3].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-4-5-bis" tabindex="128" maxlength="2" name="sezione(regioni).riga[3].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-4-6" tabindex="129" maxlength="11" name="sezione(regioni).riga[3].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-4-6-bis" tabindex="130" maxlength="2" name="sezione(regioni).riga[3].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td class="alright" colspan="4"><br>Totale</td>
		<td><div class="lettera">E</div><input class="dim80rg" id="f4-0-1" name="sezione(regioni).interiTotaleDebito" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-1-bis" name="sezione(regioni).centTotaleDebito" maxlength="2" size="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
		<td><div class="lettera">F</div><input class="dim80rg" id="f4-0-2" name="sezione(regioni).interiTotaleCredito" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-2-bis" name="sezione(regioni).centTotaleCredito" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
		<td><div class="lettera">Saldo E-F</div><input class="dim80rg" id="f4-0-98" name="sezione(regioni).interiSaldo" value="0" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-98-bis" name="sezione(regioni).centSaldo" value="00" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
	</tr>
</table>



<table>	
	<tr>
		<th class="imu">SEZIONE IMU ED ALTRI TRIBUTI LOCALI</th>
		<th class="alright"><span>IDENTIFICATIVO OPERAZIONE</span> <input type="text" class="dim150"></th>
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
		<td><input class="dim30" id="f4-1-11" tabindex="131" maxlength="4" name="sezione(entiLocali).riga[0].codiceEnte" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="f4-1-17" name="sezione(entiLocali).riga[0].ravvedimento" tabindex="132" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-1-18" name="sezione(entiLocali).riga[0].immobiliVariati" tabindex="133" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-1-19" name="sezione(entiLocali).riga[0].acconto" tabindex="137" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-1-20" name="sezione(entiLocali).riga[0].flagSaldo" tabindex="139" value="1" type="checkbox"></td>		 <td><input class="dim26" id="f4-1-21" tabindex="140" maxlength="3" name="sezione(entiLocali).riga[0].numeroImmobili" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-1-12" tabindex="141" maxlength="4" name="sezione(entiLocali).riga[0].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-1-13" tabindex="142" maxlength="4" name="sezione(entiLocali).riga[0].rateazione" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-1-14" tabindex="143" maxlength="4" size="3" name="sezione(entiLocali).riga[0].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-1-15" tabindex="144" maxlength="11" size="6" name="sezione(entiLocali).riga[0].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-1-15.bis" tabindex="145" maxlength="2" name="sezione(entiLocali).riga[0].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-1-16" tabindex="146" maxlength="11" size="6" name="sezione(entiLocali).riga[0].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-1-16-bis" tabindex="147" maxlength="2" name="sezione(entiLocali).riga[0].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="f4-2-11" tabindex="148" maxlength="4" name="sezione(entiLocali).riga[1].codiceEnte" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="f4-2-17" name="sezione(entiLocali).riga[1].ravvedimento" tabindex="150" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-2-18" name="sezione(entiLocali).riga[1].immobiliVariati" tabindex="152" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-2-19" name="sezione(entiLocali).riga[1].acconto" tabindex="154" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-2-20" name="sezione(entiLocali).riga[1].flagSaldo" tabindex="156" value="1" type="checkbox"></td>		
		<td><input class="dim26" id="f4-2-21" tabindex="157" maxlength="3" name="sezione(entiLocali).riga[1].numeroImmobili" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-2-12" tabindex="158" maxlength="4" name="sezione(entiLocali).riga[1].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-2-13" tabindex="159" maxlength="4" name="sezione(entiLocali).riga[1].rateazione" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-2-14" tabindex="160" maxlength="4" name="sezione(entiLocali).riga[1].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-2-15" tabindex="161" maxlength="11" name="sezione(entiLocali).riga[1].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="Text158" tabindex="162" maxlength="2" size="2" name="sezione(entiLocali).riga[1].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-2-16" tabindex="163" maxlength="11" name="sezione(entiLocali).riga[1].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="Text160" tabindex="164" maxlength="2" name="sezione(entiLocali).riga[1].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="f4-3-11" tabindex="165" maxlength="4" size="3" name="sezione(entiLocali).riga[2].codiceEnte" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="f4-3-17" name="sezione(entiLocali).riga[2].ravvedimento" tabindex="167" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-3-18" name="sezione(entiLocali).riga[2].immobiliVariati" tabindex="169" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-3-19" name="sezione(entiLocali).riga[2].acconto" tabindex="171" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-3-20" name="sezione(entiLocali).riga[2].flagSaldo" tabindex="173" value="1" type="checkbox"></td>		
		<td><input class="dim26" id="f4-3-21" tabindex="174" maxlength="3" name="sezione(entiLocali).riga[2].numeroImmobili" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-3-12" tabindex="175" maxlength="4" name="sezione(entiLocali).riga[2].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-3-13" tabindex="176" maxlength="4" name="sezione(entiLocali).riga[2].rateazione" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-3-14" tabindex="177" maxlength="4" name="sezione(entiLocali).riga[2].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-3-15" tabindex="178" maxlength="11" name="sezione(entiLocali).riga[2].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-3-15-bis" tabindex="179" maxlength="2" name="sezione(entiLocali).riga[2].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-3-16" tabindex="180" maxlength="11" name="sezione(entiLocali).riga[2].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-3-16-bis" tabindex="181" maxlength="2" name="sezione(entiLocali).riga[2].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="f4-4-11" tabindex="182" maxlength="4" name="sezione(entiLocali).riga[3].codiceEnte" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="f4-4-17" name="sezione(entiLocali).riga[3].ravvedimento" tabindex="184" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-4-18" name="sezione(entiLocali).riga[3].immobiliVariati" tabindex="186" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-4-19" name="sezione(entiLocali).riga[3].acconto" tabindex="188" value="1" type="checkbox"></td>
		<td><input class="dim0" id="f4-4-20" name="sezione(entiLocali).riga[3].flagSaldo" tabindex="190" value="1" type="checkbox"></td>		
		<td><input class="dim26" id="f4-4-21" tabindex="191" maxlength="3" name="sezione(entiLocali).riga[3].numeroImmobili" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-4-12" tabindex="192" maxlength="4" name="sezione(entiLocali).riga[3].codiceTributo" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-4-13" tabindex="193" maxlength="4" name="sezione(entiLocali).riga[3].rateazione" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="f4-4-14" tabindex="194" maxlength="4" name="sezione(entiLocali).riga[3].anno" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-4-15" tabindex="195" maxlength="11" name="sezione(entiLocali).riga[3].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-4-15-bis" tabindex="196" maxlength="2" name="sezione(entiLocali).riga[3].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f4-4-16" tabindex="197" maxlength="11" name="sezione(entiLocali).riga[3].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f4-4-16-bis" tabindex="198" maxlength="2" name="sezione(entiLocali).riga[3].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td class="alright" colspan="9"><br>Totale</td>
		<td><div class="lettera">G</div><input class="dim80rg" id="f4-0-3" name="sezione(entiLocali).interiTotaleDebito" readonly="readonly" onfocus="this.blur();" maxlength="13" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-3-bis" name="sezione(entiLocali).centTotaleDebito" readonly="readonly" onfocus="this.blur();" maxlength="2" type="text"></td>
		<td><div class="lettera">H</div><input class="dim80rg" id="f4-0-4" name="sezione(entiLocali).interiTotaleCredito" readonly="readonly" onfocus="this.blur();" maxlength="13" size="5" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-4-bis" name="sezione(entiLocali).centTotaleCredito" readonly="readonly" onfocus="this.blur();" maxlength="2" size="2" type="text"></td>
		<td><div class="lettera">Saldo G-H</div><input class="dim80rg" id="f4-0-99" name="sezione(entiLocali).interiSaldo" value="0" readonly="readonly" onfocus="this.blur();" maxlength="13" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-99-bis" name="sezione(entiLocali).centSaldo" value="00" readonly="readonly" onfocus="this.blur();" maxlength="2" type="text"></td>
	</tr>
	<tr>
		<td class="alleft" colspan="12">Detrazione ICI abitazione principale<br><input id="f4-0-5" name="sezione(entiLocali).interiDetrazioneIci" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" onblur="makeDetrazioneIci();" value="0" tabindex="199" maxlength="13" type="text"><div class="virgola" style="display: inline;">,</div><input id="f4-0-5-bis" name="sezione(entiLocali).centDetrazioneIci" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" onblur="makeDetrazioneIci();" value="00" tabindex="200" maxlength="2" type="text"></td>
	</tr>
</table>



<table>	
	<tr>
		<th>SEZIONE ALTRI ENTI PREVIDENZIALI ED ASSICURATIVI</th>
	</tr>
</table>

<table id="altriEnti_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="enti" id="TableINAIL">
<tr>
	<td class="en01" rowspan="4">INAIL</td>
	<td class="en02">codice<br>sede</td>
	<td class="en03">posizione assicurativa<br>numero c.c.</td>
	<td class="en04">numero di<br>riferimento</td>
	<td class="en05">causale</td>
	<td class="er02">importi a debito<br>versati</td>
	<td class="er03">importi a credito<br>compensati</td>
	<td class="er04" rowspan="4">&nbsp;</td>
</tr>
<tr>
	<td><input class="dim38" id="f5-1-1" tabindex="201" maxlength="5" name="sezione(inail).riga[0].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-1-2" tabindex="202" maxlength="8" name="sezione(inail).riga[0].posAssNumero" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text">&nbsp;<input id="f5-1-2-bis" tabindex="203" maxlength="2" size="2" name="sezione(inail).riga[0].posAssCodCtl" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-1-3" tabindex="207" maxlength="6" name="sezione(inail).riga[0].numRifer" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input id="f5-1-4" tabindex="208" maxlength="1" size="2" name="sezione(inail).riga[0].causale" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-1-5" tabindex="209" maxlength="11" name="sezione(inail).riga[0].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-1-5-bis" tabindex="210" maxlength="2" size="2" name="sezione(inail).riga[0].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-1-6" tabindex="211" maxlength="11" name="sezione(inail).riga[0].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-1-6-bis" tabindex="212" maxlength="2" size="2" name="sezione(inail).riga[0].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
</tr>
<tr>
	<td><input class="dim38" id="f5-2-1" tabindex="213" maxlength="5" size="3" name="sezione(inail).riga[1].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-2-2" tabindex="214" maxlength="8" size="6" name="sezione(inail).riga[1].posAssNumero" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text">&nbsp;<input id="Text198" tabindex="215" maxlength="2" name="sezione(inail).riga[1].posAssCodCtl" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-2-3" tabindex="216" maxlength="6" name="sezione(inail).riga[1].numRifer" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input id="f5-2-4" tabindex="217" maxlength="1" size="2" name="sezione(inail).riga[1].causale" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-2-5" tabindex="218" maxlength="11" name="sezione(inail).riga[1].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-2-5-bis" tabindex="219" maxlength="2" name="sezione(inail).riga[1].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-2-6" tabindex="220" maxlength="11" name="sezione(inail).riga[1].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-2-6-bis" tabindex="221" maxlength="2" name="sezione(inail).riga[1].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
</tr>
<tr>
	<td><input class="dim38" id="f5-3-1" tabindex="222" maxlength="5" name="sezione(inail).riga[2].codiceSede" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-3-2" tabindex="223" maxlength="8" name="sezione(inail).riga[2].posAssNumero" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text">&nbsp;<input id="Text207" tabindex="224" maxlength="2" name="sezione(inail).riga[2].posAssCodCtl" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-3-3" tabindex="225" maxlength="6" name="sezione(inail).riga[2].numRifer" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input id="f5-3-4" tabindex="226" maxlength="1" name="sezione(inail).riga[2].causale" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-3-5" tabindex="227" maxlength="11" name="sezione(inail).riga[2].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-3-5-bis" tabindex="228" maxlength="2" name="sezione(inail).riga[2].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-3-6" tabindex="229" maxlength="11" name="sezione(inail).riga[2].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="f5-3-6.bis" tabindex="230" maxlength="2" size="2" name="sezione(inail).riga[2].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onchange="updateTotali('inail'); blockOther(this);" onfocus="normalizeColor(this);" type="text"></td>
</tr>
<tr>
	<td class="alright" colspan="5"><br><b>Totale</b></td>
	<td><div class="lettera">I</div><input class="dim80rg" id="f5-0-1" name="sezione(inail).interiTotaleDebito" maxlength="13" readonly="readonly" onfocus="this.blur();" type="text"><div class="virgola" style="display: inline;">,</div><input id="f5.0.1.bis" name="sezione(inail).centTotaleDebito" maxlength="2" size="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
	<td><div class="lettera">L</div><input class="dim80rg" name="sezione(inail).interiTotaleCredito" readonly="readonly" onfocus="this.blur();" id="f5-0-2" maxlength="13" type="text"><div class="virgola" style="display: inline;">,</div><input name="sezione(inail).centTotaleCredito" readonly="readonly" onfocus="this.blur();" id="f5-0-2-bis" maxlength="2" type="text"></td>
	<td><div class="lettera">Saldo I-L</div><input class="dim80rg" name="sezione(inail).interiSaldo" value="0" readonly="readonly" onfocus="this.blur();" id="f5-0-98" maxlength="13" type="text"><div class="virgola" style="display: inline;">,</div><input name="sezione(inail).centSaldo" value="00" readonly="readonly" onfocus="this.blur();" id="f5-0-98-bis" maxlength="2" type="text"></td>
</tr>		
</table>
<table class="enti2" id="TableAltriEnti">
<tr>
	<td class="en201" rowspan="2">codice<br>ente</td>
	<td class="en202" rowspan="2">codice<br>codice<br>sede</td>
	<td class="en203" rowspan="2">causale<br>contributo</td>
	<td class="en204" rowspan="2">codice<br>posizione</td>
	<td colspan="2">da<br>(mmaaaa)</td>			
	<td class="er02" rowspan="2">importi a debito<br>versati</td>
	<td class="er03" rowspan="2">importi a credito<br>compensati</td>
	<td class="er04" rowspan="4">&nbsp;</td>
</tr>
<tr>
	<td>da<br>(mmaaaa)</td>
	<td>a<br>(mmaaaa)</td>
</tr>		
<tr>
	<td><input class="dim33" id="f5-0-5" name="sezione(altriEnti).codiceEnte" onfocus="normalizeColor(this);" tabindex="236" maxlength="4" type="text"></td>
	<td><input class="dim38" id="f5-1-10" name="sezione(altriEnti).riga[0].codiceSede" tabindex="237" maxlength="5" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim33" id="f5-1-11" tabindex="238" maxlength="4" name="sezione(altriEnti).riga[0].causaleContributo" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-1-12" tabindex="239" maxlength="9" name="sezione(altriEnti).riga[0].codicePosizione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim44" id="f5-1-13" tabindex="240" maxlength="6" name="sezione(altriEnti).riga[0].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim44" id="f5-1-14" tabindex="241" maxlength="6" size="5" name="sezione(altriEnti).riga[0].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>				
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-1-15" tabindex="242" maxlength="11" name="sezione(altriEnti).riga[0].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input style="background-color: rgb(255, 255, 255);" id="f5-1-15-bis" tabindex="243" maxlength="2" name="sezione(altriEnti).riga[0].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-1-16" tabindex="244" maxlength="11" name="sezione(altriEnti).riga[0].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input style="background-color: rgb(255, 255, 255);" id="f5-1-16-bis" tabindex="245" maxlength="2" size="2" name="sezione(altriEnti).riga[0].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input class="dim38" id="f5-2-10" tabindex="246" maxlength="5" name="sezione(altriEnti).riga[1].codiceSede" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim33" id="f5-2-11" tabindex="247" maxlength="4" name="sezione(altriEnti).riga[1].causaleContributo" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim49" id="f5-2-12" tabindex="248" maxlength="9" size="6" name="sezione(altriEnti).riga[1].codicePosizione" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim44" id="f5-2-13" tabindex="249" maxlength="6" name="sezione(altriEnti).riga[1].inizioRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>
	<td><input class="dim44" id="f5-2-14" tabindex="250" maxlength="6" name="sezione(altriEnti).riga[1].fineRiferimento" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);" type="text"></td>			
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-2-15" tabindex="251" maxlength="11" name="sezione(altriEnti).riga[1].interiImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input style="background-color: rgb(255, 255, 255);" id="f5-2-15-bis" tabindex="252" maxlength="2" name="sezione(altriEnti).riga[1].centImportoDebito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="f5-2-16" tabindex="253" maxlength="11" name="sezione(altriEnti).riga[1].interiImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input style="background-color: rgb(255, 255, 255);" id="f5-2-16-bis" tabindex="254" maxlength="2" name="sezione(altriEnti).riga[1].centImportoCredito" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
</tr>
<tr>
	<td class="alright" colspan="6"><br>Totale</td>
	<td><div class="lettera">M</div><input class="dim80rg" name="sezione(altriEnti).interiTotaleDebito" readonly="readonly" onfocus="this.blur();" id="f5-0-3" maxlength="13" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input name="sezione(altriEnti).centTotaleDebito" readonly="readonly" onfocus="this.blur();" id="f5-0-3-bis" maxlength="2" type="text"></td>
	<td><div class="lettera">N</div><input class="dim80rg" name="sezione(altriEnti).interiTotaleCredito" readonly="readonly" onfocus="this.blur();" id="f5-0-4" maxlength="13" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input name="sezione(altriEnti).centTotaleCredito" id="f5-0-4-bis" maxlength="2" readonly="readonly" onfocus="this.blur();" type="text"></td>
	<td><div class="lettera">Saldo M-N</div><input class="dim80rg" name="sezione(altriEnti).interiSaldo" value="0" readonly="readonly" onfocus="this.blur();" id="f5-0-99" maxlength="13" type="text"><div class="virgola" style="display: inline;"><div class="virgola" style="display: inline;">,</div></div><input name="sezione(altriEnti).centSaldo" value="00" readonly="readonly" onfocus="this.blur();" id="f5-0-99-bis" maxlength="2" type="text"></td>
</tr>		
</table>


<table>	
	<tr>
		<th>SEZIONE ACCISE/MONOPOLI ED ALTRI VERSAMENTI NON AMMESSI IN COMPENSAZIONE</th>
	</tr>
</table>
<table id="accise_hidden" style="display: none;">		
	<tr>
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="accise" id="TableAccise">
	<tr>
		<td class="ac01">ente</td>
		<td class="ac02">prov.</td>
		<td class="ac03">codice<br />tributo</td>
		<td class="ac04">codice<br />identificativo</td>
		<td class="ac05">accise</td>
		<td class="ac05">periodo<br />di riferimento<br />(mmaaaa)</td>
		<td class="er02">importi a debito<br />versati</td>
		<td class="er03" rowspan="8">&nbsp;</td>
		<td class="er04" rowspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-1-1" tabindex="255" type="text" maxlength="2" name="sezione(accise).riga[0].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-1-2" tabindex="256" type="text" maxlength="2" name="sezione(accise).riga[0].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-1-3" tabindex="257" type="text" maxlength="4" name="sezione(accise).riga[0].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-1-4" tabindex="258" type="text" maxlength="14" name="sezione(accise).riga[0].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-1-5" tabindex="259" type="text" maxlength="6"  name="sezione(accise).riga[0].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-1-5" tabindex="259" type="text" maxlength="6"  name="sezione(accise).riga[0].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-1-7" tabindex="260" type="text" maxlength="11" name="sezione(accise).riga[0].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-1-7-bis" tabindex="261" type="text" maxlength="2" name="sezione(accise).riga[0].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-2-1" tabindex="262" type="text" maxlength="2" size="3" name="sezione(accise).riga[1].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-2-2" tabindex="263" type="text" maxlength="2" name="sezione(accise).riga[1].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-2-3" tabindex="264" type="text" maxlength="4" name="sezione(accise).riga[1].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-2-4" tabindex="265" type="text" maxlength="14" name="sezione(accise).riga[1].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-2-5" tabindex="266" type="text" maxlength="6" name="sezione(accise).riga[1].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-2-5" tabindex="266" type="text" maxlength="6" name="sezione(accise).riga[1].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-2-7" tabindex="267" type="text" maxlength="11" name="sezione(accise).riga[1].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-2-7-bis" tabindex="268" type="text" maxlength="2" name="sezione(accise).riga[1].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-3-1" tabindex="268" type="text" maxlength="2" name="sezione(accise).riga[2].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-3-2" tabindex="269" type="text" maxlength="2" name="sezione(accise).riga[2].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-3-3" tabindex="270" type="text" maxlength="4" name="sezione(accise).riga[2].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-3-4" tabindex="271" type="text" maxlength="14" name="sezione(accise).riga[2].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-3-5" tabindex="272" type="text" maxlength="6" name="sezione(accise).riga[2].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-3-5" tabindex="272" type="text" maxlength="6" name="sezione(accise).riga[2].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-3-7" tabindex="273" type="text" maxlength="11" name="sezione(accise).riga[2].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-3-7-bis" tabindex="274" type="text" maxlength="2" size="2" name="sezione(accise).riga[2].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-4-1" tabindex="275" type="text" maxlength="2" name="sezione(accise).riga[3].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-4-2" tabindex="276" type="text" maxlength="2" name="sezione(accise).riga[3].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-4-3" tabindex="277" type="text" maxlength="4" name="sezione(accise).riga[3].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-4-4" tabindex="278" type="text" maxlength="14" name="sezione(accise).riga[3].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-4-5" tabindex="279" type="text" maxlength="6" name="sezione(accise).riga[3].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-4-5" tabindex="279" type="text" maxlength="6" name="sezione(accise).riga[3].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-4-7" tabindex="280" type="text" maxlength="11" name="sezione(accise).riga[3].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-4-7-bis" tabindex="281" type="text" maxlength="2" name="sezione(accise).riga[3].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-5-1" tabindex="282" type="text" maxlength="2" name="sezione(accise).riga[4].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-5-2" tabindex="283" type="text" maxlength="2" name="sezione(accise).riga[4].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-5-3" tabindex="284" type="text" maxlength="4" name="sezione(accise).riga[4].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-5-4" tabindex="285" type="text" maxlength="14" name="sezione(accise).riga[4].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-5-5" tabindex="286" type="text" maxlength="6" name="sezione(accise).riga[4].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-5-5" tabindex="286" type="text" maxlength="6" name="sezione(accise).riga[4].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-5-7" tabindex="287" type="text" maxlength="11" name="sezione(accise).riga[4].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-5-7-bis" tabindex="288" type="text" maxlength="2" size="2" name="sezione(accise).riga[4].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-6-1" tabindex="289" type="text" maxlength="2" name="sezione(accise).riga[5].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-6-2" tabindex="290" type="text" maxlength="2" name="sezione(accise).riga[5].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-6-3" tabindex="291" type="text" maxlength="4" name="sezione(accise).riga[5].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-6-4" tabindex="292" type="text" maxlength="14" name="sezione(accise).riga[5].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-6-5" tabindex="293" type="text" maxlength="6" name="sezione(accise).riga[5].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-6-5" tabindex="293" type="text" maxlength="6" name="sezione(accise).riga[5].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-6-7" tabindex="294" type="text" maxlength="11" name="sezione(accise).riga[5].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-6-7-bis" tabindex="295" type="text" maxlength="2" name="sezione(accise).riga[5].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-7-1" tabindex="296" type="text" maxlength="2" name="sezione(accise).riga[6].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-7-2" tabindex="297" type="text" maxlength="2" name="sezione(accise).riga[6].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-7-3" tabindex="298" type="text" maxlength="4" name="sezione(accise).riga[6].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-7-4" tabindex="299" type="text" maxlength="14" name="sezione(accise).riga[6].codiceIdentificativo" value=""   onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-7-5" tabindex="300" type="text" maxlength="6" name="sezione(accise).riga[6].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input id="f6-7-5" tabindex="300" type="text" maxlength="6" name="sezione(accise).riga[6].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-7-7" tabindex="301" type="text" maxlength="11" name="sezione(accise).riga[6].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-7-7-bis" tabindex="302" type="text" maxlength="2" name="sezione(accise).riga[6].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td class="alright" colspan="6"><br />Totale</td>
		<td><div class="lettera">O</div><input  class="dim80rg" name="sezione(accise).interiTotaleDebito" value="0" readonly="readonly" onFocus="this.blur();" id="f6-0-1" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(accise).centTotaleDebito" value="00" readonly="readonly" onFocus="this.blur();" id="f6-0-1-bis"  type="text" maxlength="2" /></td>
		<td>&nbsp;</td>
		<td><div class="lettera">Saldo O</div><input  class="dim80rg" name="sezione(accise).interiSaldo" value="0" readonly="readonly" onFocus="this.blur();" id="f6-0-99" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(accise).centSaldo" value="00" readonly="readonly" onFocus="this.blur();" id="f6-0-99-bis" type="text" maxlength="2" /></td>
	</tr>
	<tr>
		<td class="alleft" colspan="2">codice ufficio<br><input name="sezione(erario).codiceUfficio" id="f2-0-3" tabindex="61" maxlength="3" onfocus="normalizeColor(this);" type="text"></td>
		<td class="alleft" colspan="7">codice atto<br><input name="sezione(erario).codiceAtto" onchange="isReale(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" id="f2-0-4" tabindex="62" maxlength="11" type="text"></td>	
	</tr>
</table>


<table>	
	<tr>
		<th>SEZIONE ERARIO ED ALTRO</th>
	</tr>
</table>
<table class="erimm" id="TableErarioMotori">
	<tr>
		<td class="alleft">codice ufficio<br><input type="text" onfocus="normalizeColor(this);" maxlength="3" tabindex="61" id="f2-0-3" value="" name="sezione(erario).codiceUfficio"></td>
		<td colspan="5" class="alleft">codice atto<br><input type="text" maxlength="11" tabindex="62" id="f2-0-4" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="isReale(this);" value="" name="sezione(erario).codiceAtto"></td>
	</tr>
	<tr>
		<td class="erimm01">tipo</td>
		<td class="erimm02">elementi identificativi</td>
		<td class="erimm03">codice tributo</td>
		<td class="erimm04">anno di riferimento</td>
		<td class="erimm05">importi a debito<br>versati</td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[0].tipoVeicolo" maxlength="1" tabindex="63" id="f2-1-1-m"></td>
		<td><input class="dim150" type="text" onkeypress="javascript: return noSpecialKeys(event);" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[0].telaio" maxlength="17" tabindex="64" id="f2-1-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[0].codiceTributo" maxlength="4" tabindex="65" id="f2-1-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[0].annoRiferimento" maxlength="4" tabindex="66" id="f2-1-4-m"></td>
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[0].interiImportoDebito" maxlength="11" tabindex="67" id="f2-1-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[0].centImportoDebito" maxlength="2" tabindex="68" id="f2-1-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[1].tipoVeicolo" maxlength="1" tabindex="69" id="f2-2-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[1].telaio" maxlength="17" tabindex="70" id="f2-2-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[1].codiceTributo" maxlength="4" tabindex="71" id="f2-2-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[1].annoRiferimento" maxlength="4" tabindex="72" id="f2-2-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[1].interiImportoDebito" maxlength="11" tabindex="73" id="f2-2-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[1].centImportoDebito" maxlength="2" tabindex="74" id="f2-2-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[2].tipoVeicolo" maxlength="1" tabindex="75" id="f2-3-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[2].telaio" maxlength="17" tabindex="76" id="f2-3-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[2].codiceTributo" maxlength="4" tabindex="77" id="f2-3-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[2].annoRiferimento" maxlength="4" tabindex="78" id="f2-3-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[2].interiImportoDebito" maxlength="11" tabindex="79" id="f2-3-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[2].centImportoDebito" maxlength="2" tabindex="80" id="f2-3-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[3].tipoVeicolo" maxlength="1" tabindex="81" id="f2-4-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[3].telaio" maxlength="17" tabindex="82" id="f2-4-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[3].codiceTributo" maxlength="4" tabindex="83" id="f2-4-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[3].annoRiferimento" maxlength="4" tabindex="84" id="f2-4-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[3].interiImportoDebito" maxlength="11" tabindex="85" id="f2-4-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[3].centImportoDebito" maxlength="2" tabindex="86" id="f2-4-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[4].tipoVeicolo" maxlength="1" tabindex="87" id="f2-5-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[4].telaio" maxlength="17" tabindex="88" id="f2-5-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[4].codiceTributo" maxlength="4" tabindex="89" id="f2-5-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[4].annoRiferimento" maxlength="4" tabindex="90" id="f2-5-4-m">
		</td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[4].interiImportoDebito" maxlength="11" tabindex="91" id="f2-5-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[4].centImportoDebito" maxlength="2" tabindex="92" id="f2-5-5-m-bis" class="CBXnuovo"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[5].tipoVeicolo" maxlength="1" tabindex="93" id="f2-6-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[5].telaio" maxlength="17" tabindex="94" id="f2-6-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[5].codiceTributo" maxlength="4" tabindex="95" id="f2-6-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[5].annoRiferimento" maxlength="4" tabindex="96" id="f2-6-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[5].interiImportoDebito" maxlength="11" tabindex="97" id="f2-6-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[5].centImportoDebito" maxlength="2" tabindex="98" id="f2-6-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[6].tipoVeicolo" maxlength="1" tabindex="99" id="f2-7-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[6].telaio" maxlength="17" tabindex="100" id="f2-7-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[6].codiceTributo" maxlength="4" tabindex="101" id="f2-7-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[6].annoRiferimento" maxlength="4" tabindex="102" id="f2-7-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[6].interiImportoDebito" maxlength="11" tabindex="103" id="f2-7-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[6].centImportoDebito" maxlength="2" tabindex="104" id="f2-7-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[7].tipoVeicolo" maxlength="1" tabindex="105" id="f2-8-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[7].telaio" maxlength="17" tabindex="106" id="f2-8-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[7].codiceTributo" maxlength="4" tabindex="107" id="f2-8-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[7].annoRiferimento" maxlength="4" tabindex="108" id="f2-8-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[7].interiImportoDebito" maxlength="11" tabindex="109" id="f2-8-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[7].centImportoDebito" maxlength="2" tabindex="109" id="f2-8-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[8].tipoVeicolo" maxlength="1" tabindex="110" id="f2-9-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[8].telaio" maxlength="17" tabindex="111" id="f2-9-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[8].codiceTributo" maxlength="4" tabindex="112" id="f2-9-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[8].annoRiferimento" maxlength="4" tabindex="113" id="f2-9-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[8].interiImportoDebito" maxlength="11" tabindex="114" id="f2-9-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[8].centImportoDebito" maxlength="2" tabindex="114" id="f2-9-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[9].tipoVeicolo" maxlength="1" tabindex="115" id="f2-10-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[9].telaio" maxlength="17" tabindex="116" id="f2-10-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[9].codiceTributo" maxlength="4" tabindex="117" id="f2-10-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[9].annoRiferimento" maxlength="4" tabindex="118" id="f2-10-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[9].interiImportoDebito" maxlength="11" tabindex="119" id="f2-10-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[9].centImportoDebito" maxlength="2" tabindex="120" id="f2-10-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[10].tipoVeicolo" maxlength="1" tabindex="121" id="f2-11-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[10].telaio" maxlength="17" tabindex="122" id="f2-11-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[10].codiceTributo" maxlength="4" tabindex="123" id="f2-11-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[10].annoRiferimento" maxlength="4" tabindex="124" id="f2-11-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[10].interiImportoDebito" maxlength="11" tabindex="125" id="f2-11-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[10].centImportoDebito" maxlength="2" tabindex="126" id="f2-11-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[11].tipoVeicolo" maxlength="1" tabindex="127" id="f2-12-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[11].telaio" maxlength="17" tabindex="128" id="f2-12-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[11].codiceTributo" maxlength="4" tabindex="129" id="f2-12-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[11].annoRiferimento" maxlength="4" tabindex="130" id="f2-12-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[11].interiImportoDebito" maxlength="11" tabindex="131" id="f2-12-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[11].centImportoDebito" maxlength="2" tabindex="132" id="f2-12-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[12].tipoVeicolo" maxlength="1" tabindex="133" id="f2-13-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[12].telaio" maxlength="17" tabindex="134" id="f2-13-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[12].codiceTributo" maxlength="4" tabindex="135" id="f2-13-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[12].annoRiferimento" maxlength="4" tabindex="136" id="f2-13-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[12].interiImportoDebito" maxlength="11" tabindex="137" id="f2-13-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[12].centImportoDebito" maxlength="2" tabindex="138" id="f2-13-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[13].tipoVeicolo" maxlength="1" tabindex="139" id="f2-14-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[13].telaio" maxlength="17" tabindex="140" id="f2-14-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[13].codiceTributo" maxlength="4" tabindex="141" id="f2-14-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[13].annoRiferimento" maxlength="4" tabindex="142" id="f2-14-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[13].interiImportoDebito" maxlength="11" tabindex="143" id="f2-14-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[13].centImportoDebito" maxlength="2" tabindex="143" id="f2-14-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[14].tipoVeicolo" maxlength="1" tabindex="144" id="f2-15-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[14].telaio" maxlength="17" tabindex="145" id="f2-15-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[14].codiceTributo" maxlength="4" tabindex="146" id="f2-15-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[14].annoRiferimento" maxlength="4" tabindex="147" id="f2-15-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[14].interiImportoDebito" maxlength="11" tabindex="148" id="f2-15-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[14].centImportoDebito" maxlength="2" tabindex="149" id="f2-15-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[15].tipoVeicolo" maxlength="1" tabindex="150" id="f2-16-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[15].telaio" maxlength="17" tabindex="151" id="f2-16-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[15].codiceTributo" maxlength="4" tabindex="152" id="f2-16-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[15].annoRiferimento" maxlength="4" tabindex="153" id="f2-16-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[15].interiImportoDebito" maxlength="11" tabindex="154" id="f2-16-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[15].centImportoDebito" maxlength="2" tabindex="155" id="f2-16-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[16].tipoVeicolo" maxlength="1" tabindex="156" id="f2-17-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[16].telaio" maxlength="17" tabindex="157" id="f2-17-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[16].codiceTributo" maxlength="4" tabindex="158" id="f2-17-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[16].annoRiferimento" maxlength="4" tabindex="159" id="f2-17-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[16].interiImportoDebito" maxlength="11" tabindex="160" id="f2-17-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[16].centImportoDebito" maxlength="2" tabindex="161" id="f2-17-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[17].tipoVeicolo" maxlength="1" tabindex="162" id="f2-18-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[17].telaio" maxlength="17" tabindex="163" id="f2-18-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[17].codiceTributo" maxlength="4" tabindex="164" id="f2-18-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[17].annoRiferimento" maxlength="4" tabindex="165" id="f2-18-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[17].interiImportoDebito" maxlength="11" tabindex="166" id="f2-18-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[17].centImportoDebito" maxlength="2" tabindex="167" id="f2-18-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[18].tipoVeicolo" maxlength="1" tabindex="168" id="f2-19-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[18].telaio" maxlength="17" tabindex="169" id="f2-19-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[18].codiceTributo" maxlength="4" tabindex="170" id="f2-19-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[18].annoRiferimento" maxlength="4" tabindex="171" id="f2-19-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[18].interiImportoDebito" maxlength="11" tabindex="172" id="f2-19-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[18].centImportoDebito" maxlength="2" tabindex="173" id="f2-19-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[19].tipoVeicolo" maxlength="1" tabindex="174" id="f2-20-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[19].telaio" maxlength="17" tabindex="175" id="f2-20-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[19].codiceTributo" maxlength="4" tabindex="176" id="f2-20-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[19].annoRiferimento" maxlength="4" tabindex="177" id="f2-20-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[19].interiImportoDebito" maxlength="11" tabindex="178" id="f2-20-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[19].centImportoDebito" maxlength="2" tabindex="179" id="f2-20-5-m-bis"></td>
	</tr>
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[20].tipoVeicolo" maxlength="1" tabindex="180" id="f2-21-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[20].telaio" maxlength="17" tabindex="181" id="f2-21-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[20].codiceTributo" maxlength="4" tabindex="182" id="f2-21-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[20].annoRiferimento" maxlength="4" tabindex="183" id="f2-21-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[20].interiImportoDebito" maxlength="11" tabindex="184" id="f2-21-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[20].centImportoDebito" maxlength="2" tabindex="185" id="f2-21-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[21].tipoVeicolo" maxlength="1" tabindex="186" id="f2-22-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[21].telaio" maxlength="17" tabindex="187" id="f2-22-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[21].codiceTributo" maxlength="4" tabindex="188" id="f2-22-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[21].annoRiferimento" maxlength="4" tabindex="189" id="f2-22-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[21].interiImportoDebito" maxlength="11" tabindex="190" id="f2-22-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[21].centImportoDebito" maxlength="2" tabindex="191" id="f2-22-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[22].tipoVeicolo" maxlength="1" tabindex="192" id="f2-23-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[22].telaio" maxlength="17" tabindex="193" id="f2-23-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[22].codiceTributo" maxlength="4" tabindex="194" id="f2-23-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[22].annoRiferimento" maxlength="4" tabindex="195" id="f2-23-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[22].interiImportoDebito" maxlength="11" tabindex="196" id="f2-23-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[22].centImportoDebito" maxlength="2" tabindex="197" id="f2-23-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[23].tipoVeicolo" maxlength="1" tabindex="198" id="f2-24-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[23].telaio" maxlength="17" tabindex="199" id="f2-24-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[23].codiceTributo" maxlength="4" tabindex="200" id="f2-24-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[23].annoRiferimento" maxlength="4" tabindex="201" id="f2-24-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[23].interiImportoDebito" maxlength="11" tabindex="202" id="f2-24-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[23].centImportoDebito" maxlength="2" tabindex="203" id="f2-24-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[24].tipoVeicolo" maxlength="1" tabindex="204" id="f2-25-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[24].telaio" maxlength="17" tabindex="205" id="f2-25-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[24].codiceTributo" maxlength="4" tabindex="206" id="f2-25-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[24].annoRiferimento" maxlength="4" tabindex="207" id="f2-25-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[24].interiImportoDebito" maxlength="11" tabindex="208" id="f2-25-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[24].centImportoDebito" maxlength="2" tabindex="208" id="f2-25-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[25].tipoVeicolo" maxlength="1" tabindex="209" id="f2-26-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[25].telaio" maxlength="17" tabindex="210" id="f2-26-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[25].codiceTributo" maxlength="4" tabindex="211" id="f2-26-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[25].annoRiferimento" maxlength="4" tabindex="212" id="f2-26-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[25].interiImportoDebito" maxlength="11" tabindex="213" id="f2-26-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[25].centImportoDebito" maxlength="2" tabindex="214" id="f2-26-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[26].tipoVeicolo" maxlength="1" tabindex="215" id="f2-27-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[26].telaio" maxlength="17" tabindex="216" id="f2-27-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[26].codiceTributo" maxlength="4" tabindex="217" id="f2-27-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[26].annoRiferimento" maxlength="4" tabindex="218" id="f2-27-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[26].interiImportoDebito" maxlength="11" tabindex="219" id="f2-27-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[26].centImportoDebito" maxlength="2" tabindex="220" id="f2-27-5-m-bis"></td>
	</tr>			
	<tr>
		<td><input type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[27].tipoVeicolo" maxlength="1" tabindex="221" id="f2-28-1-m"></td>
		<td><input class="dim150" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" value="" name="sezione(immatricolazioni).riga[27].telaio" maxlength="17" tabindex="222" id="f2-28-2-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" value="" name="sezione(immatricolazioni).riga[27].codiceTributo" maxlength="4" tabindex="223" id="f2-28-3-m"></td>
		<td><input class="dim24" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[27].annoRiferimento" maxlength="4" tabindex="224" id="f2-28-4-m"></td>				
		<td><input class="dim80rg" type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="0" name="sezione(immatricolazioni).riga[27].interiImportoDebito" maxlength="11" tabindex="225" id="f2-28-5-m"><div style="display: inline" class="virgola">,</div><input type="text" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" value="" name="sezione(immatricolazioni).riga[27].centImportoDebito" maxlength="2" tabindex="226" id="f2-28.-5-m-bis"></td>
	</tr>			
	<tr>	
		<td colspan="5">	
			<input type="hidden" name="sezione(immatricolazioni).interiTotaleDebito">
			<input type="hidden" name="sezione(immatricolazioni).centTotaleDebito">			
			<input type="hidden" name="sezione(immatricolazioni).interiSaldo">
			<input type="hidden" name="sezione(immatricolazioni).centSaldo">			
		</td>
	</tr>
	<tr>
	<!-- 	<td colspan="5" class="erileft">&nbsp;(*) tipo veicolo: A autoveicolo, M motoveicolo, R rimorchio</td> -->
	</tr>			
</table>



<table>	
	<tr>
		<th>ESTREMI DEL VERSAMENTO</th>
	</tr>
</table>
<table class="f23 f24">
	<tr>
		<td colspan="5">
			<table class="f23sub f24sub">
			<tr>
				<td class="alright">Saldo parziale<br>
					<input type="text" value="" name="saldoParzialeInteri" maxlength="13" id="Text297" readonly="readonly">
					<div style="display: inline" class="virgola">,</div>
					<input type="text" value="" name="saldoParzialeCent" size="2" maxlength="2" id="Text298" readonly="readonly">
				</td>
				<td class="alright">Saldo finale*<br>
					<input type="text" onkeypress="javascript: return onlyNumbers(event);" value="" name="interiSaldo" onblur="makeCorrectSaldoByInt();" onfocus=" normalizeColor(this); select();" maxlength="13" tabindex="304" id="f1-0-8">
					<div style="display: inline" class="virgola">,</div>
					<input type="text" onkeypress="javascript: return onlyNumbers(event);" onblur="makeCorrectSaldoByCent();" onfocus=" normalizeColor(this); select();" value="" name="centSaldo" size="2" maxlength="2" tabindex="305" id="f1-0-8-bis">
				</td>
			</tr>	
			</table>
		</td>	
	</tr>
	
	<tr>
		<td>Numero conto<br><input class="f_medium" readonly="readonly"  maxlength="16"  type="text"></td>
		<td>Abi<br><input class="f_5num" maxlength="5" type="text"></td>
		<td>Cab<br><input class="f_5num" maxlength="5" type="text"></td>
		<td>Cin<br><input readonly="readonly" maxlength="1" name="contoCorrente.cin" value="V" type="text"></td>
		<td>Data pagamento (ggmmaaaa)<br><input id="datepicker" size="15" maxlength="8" class="f_8num flLeftf23" type="text"></td>
	</tr>
	<tr>
		<td colspan="5">Autorizzo addebito su conto corrente codice IBAN IT52O0340201749000000083891</td>
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