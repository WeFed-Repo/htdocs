<!-- LA FUNZIONE INCLUSA NELLA SEGUENTE RIGA E' IMPLEMENTATA ESCLUSIVAMENTE A 
		 FINI DI PREVIEW E NON DEVE ESSERE CONSIDERATA PER LO SVILUPPO -->
	<script type="text/javascript">
		
		function samplestartloading(oggettopulsante)
		{
			detailp = document.createElement('p');
			detailp.id = "sampledatadetail";
			detailp.style.display = "none";
			oggettopulsante.parentNode.parentNode.appendChild(detailp);
			//fa partire il caricamento
			oggettopulsante.parentNode.innerHTML = "<img src=\'/img/ret/ico2inf_loading.gif\' style=\'vertical-align: text-bottom\'>&nbsp;<a href=\'javascript:;\' onclick=\'javascript: samplerollback(this);\'>Annulla<\/a>"
			
			sampleajaxrequest = setTimeout (function () {document.getElementById("sampledatadetail").innerHTML='Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. ';document.getElementById("sampledatadetail").style.display="";document.getElementById("sampledatadetail").parentNode.getElementsByTagName('span')[1].innerHTML = '<a href="javascript:;" onclick="javascript: samplerollback(this);">Chiudi</a>';},2000);
			
		}
		
		function samplerollback (oggettopulsante)
		{
			clearInterval (sampleajaxrequest);
			oggettopulsante.parentNode.parentNode.removeChild(oggettopulsante.parentNode.parentNode.getElementsByTagName('p')[0]);
			oggettopulsante.parentNode.innerHTML = "<a href=\"javascript:;\" onclick=\"javascript:samplestartloading(this);\">Vedi dettagli</a>";
		}
				
	</script>
	<!-- FINE FUNZIONI PER EMULAZIONE -->
<h1>Operazioni non contabilizzate be 1 card</h1>
<p>Puoi ricercare le operazioni <strong>non ancora contabilizzate</strong> effettuate con la <strong>Be 1 Card</strong></p>
<div class="tithelp"><div class="helpleft">Parametri di ricerca</div><br class="clear"></div>
<table class="form01">
	<tr>
		<td class="uno">Tipo operazione</td>
		<td colspan="3">
			<select class="mediumlength">
				<option>Tutte le operazioni</option>
				<option>Pagamenti</option>
				<option>Prelievi</option>
			</select>
		</td>
		
	</tr>
	<tr>
		<td class="uno">Importo</td>
		<td colspan="3">
				<div class="nobor3">da
				<input type="text" name="text" class="importo"> , <input type="text" name="text" class="importo2" maxlength="2"> &euro;</div>
				<div class="nobor3">a
				<input type="text" name="text" class="importo"> , <input type="text" name="text" class="importo2" maxlength="2"> &euro;</div>
			</td>
		
	</tr>
</table>

<div class="fooform fooform_tit">
	<div class="fooformright">
		<div><a onclick="setLoadingOnObject('faseStart','varEnd'); setTimeout(function() {unsetLoadingOnObject('faseStart')}, 3500);" href="javascript:;" class="btnformright" title="aggiorna"><img src="/img/ret/btn_left_ar.gif" alt=""><span>aggiorna</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
		
		<br class="clear">
	</div>	
<br class="clear">
</div>

<div class="tithelp">
	<div class="helpleft">Esito ricerca</div>
	<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
<br class="clear"></div>
<table cellspacing="0" cellpadding="0" class="condiz2">
	<tr class="color"> 
		<td><a href="#" title="#"><img src="/img/ret/ico_giu.gif" alt="" title=""></a><br>Data</td>
		<td  width="350"><a href="#" title="#"><img src="/img/ret/ico_giu.gif" alt="" title=""></a><br>Tipo</td>
		<td width="85" class="expandAll"><span><a href=""><span>Vedi tutti</span></a></span></td>
		<td><a href="#" title="#"><img src="/img/ret/ico_giu.gif" alt="" title=""></a><br>Importo</td>
	</tr>
	<tr class="dispari" id="faseStart"> 
		<td class="center">gg/mm/aaaa</td>
		<td colspan="2" class="left detailcell">
			<span class="dettleft">ACQUISTO</span>
			<span class="dettright"><a onclick="javascript:samplestartloading(this);" href="javascript:;">Vedi dettagli</a></span>
		</td>
		<td class="right">xx.xxx,xx</td>
	</tr>
	<tr class="pari"> 
		<td class="center">gg/mm/aaaa</td>
		<td colspan="2" class="left detailcell">
			<span class="dettleft">ACQUISTO</span>
			<span class="dettright"><a onclick="javascript:samplestartloading(this);" href="javascript:;">Vedi dettagli</a></span>
		</td>
		<td class="right">xx.xxx,xx</td>
	</tr>
		<tr class="dispari"> 
		<td class="center">gg/mm/aaaa</td>
		<td colspan="2" class="left detailcell">
			<span class="dettleft">ACQUISTO</span>
			<span class="dettright"><a onclick="javascript:samplestartloading(this);" href="javascript:;">Vedi dettagli</a></span>
		</td>
		<td class="right">xx.xxx,xx</td>
	</tr>
	<tr class="pari" id="varEnd"> 
		<td class="center">gg/mm/aaaa</td>
		<td colspan="2" class="left detailcell">
			<span class="dettleft">PRELIEVO</span>
			<span class="dettright"><a onclick="javascript:samplestartloading(this);" href="javascript:;">Vedi dettagli</a></span>
		</td>
		<td class="right">xx.xxx,xx</td>
	</tr>
</table>
<div align="right" class="BvTableHeaderHelp">
	
	<a href="#1"><img alt="" src="/img/ret/ico_stampa3.gif"></a><a href="#1" class="hlp">Stampa</a><br class="clear">

</div>
<br /><br />
<img alt="" src="/img/ret/str_imm_ingombro.gif">