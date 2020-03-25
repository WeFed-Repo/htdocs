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
<h1>F24</h1>
<div class="divtabellalist">
<table class="tabellalist">
	<tr>
		<td class="on first"><a title="Lorem ipsum" href="#1">F24</a></td>
		<td class="off"><a title="Lorem ipsum lorem" href="#1">F23</a></td>											
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
			<img src="/wscmn/img/immagineTitolo_semplificato.jpg" alt="" align="middle">
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
		<th class="imu">MOTIVO DEL PAGAMENTO</th>
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
		<td class="">Sezione</td>
		<td class="">codice<br>Tributo</td>
		<td class="">cod.ente</td>
		<td class=""><span style="font: 8px Arial,sans-serif;">Ravv.</span></td>
		<td class=""><span style="font: 8px Arial,sans-serif;">immob.<br>variati</span></td>
		<td class=""><span style="font: 8px Arial,sans-serif;">Acc.</span></td>
		<td class=""><span style="font: 8px Arial,sans-serif;">Saldo</span></td>
		<td class="">num.<br>immob.</td>		
		<td class="">rateaz.</td>
		<td class="">anno<br>(aaaa)</td>
		<td class="">detrazione</td>
		<td class="">importi a debito<br>versati</td>
		<td class="">importi a credito<br>compensati</td>
	</tr>
	
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim0" id="" name="" tabindex="" value="1" type="checkbox"></td>
		<td><input class="dim26rg" id="" tabindex="" maxlength="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);" type="text"></td>		
		<td><input class="dim30" id="" tabindex="" maxlength="4" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim30" id="" tabindex="" maxlength="4" size="3" name="" onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);" type="text"></td>
		<td><input class="dim54rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
		<td><input class="dim80rg" style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="11" size="6" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"><div class="virgola" style="display: inline;">,</div><input style="background-color: rgb(255, 255, 255);" id="" tabindex="" maxlength="2" name="" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" onchange="blockOther(this);" type="text"></td>
	</tr>
	<tr>
		<td class="alleft" colspan="2">codice ufficio<br><input name="" class="dim34" tabindex="61" maxlength="3" onfocus="normalizeColor(this);" type="text"></td>
		<td class="alleft" colspan="11">codice atto<br><input name="" class="dim86" onchange="isReale(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" tabindex="62" maxlength="11" type="text"></td>	
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