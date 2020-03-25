<h1>DERIVATI</h1>
<!-- AREA DI AGGIORNAMENTO PAGINA -->     
<div class="box3cLeft">
<form NAME="formlinkgrafici" METHOD="post" action="/wt/strategie/grafici">
	<input type="hidden" name="borsa1">
	<input type="hidden" name="mercato1">
	<input type="hidden" name="stockcode1">
</form>

<form NAME="popupgraficigrandi" METHOD="post" action="/wt/grafici/visualizzagraficogrande">
	<input type="hidden" name="borsa" value="MI">
	<input type="hidden" name="mercato" value="-1"> 
	<input type="hidden" name="idStrumento" value="SPMIB">
	<input type="hidden" name="descrizione" value="FTSE MIB">
</form>

<form name="formgrafici" method="post" action="">
	<input type="hidden" name="scelta">
	<h2 class="titTable">Grafico Intraday</h2>
	<div class="box_grafico">
		<a href="#1" onclick="visualizzaGraficoGrande();"><img src="http://www.wetrade.svil:80/graf/cgi-bin/chart?cfg=itradepnov&grf_0_0=MI.-1.SPMIB&n_giorni=1&type_0_0=65&cprs_0_0=300&grf_1_0=volumi&cprs_1_0=300&cprs_0_1=300&prd_0_1=20&ticker_type=I" border="0" alt="Clicca qui per il grafico multiday" name="Grafici" /></a>
		<table cellpadding="0" cellspacing="0" class="form05">
		<tr>
			<td>Mercato</td>
			<td><select name="mercatoDerivati" onChange="document.forms.formgrafici.submit();">
					<option value="IDEM" selected="selected" >IDEM</option>
					<option value="EUREX" >EUREX</option>
					<option value="EURONEXT-LIFFE" >EURONEXT - LIFFE</option>
					<option value="CME" >CME</option>
					<option value="ECBOT" >eCBOT</option>
			</select></td>
		</tr>
		<tr>
			<td>Stato</td>
			<td><strong>APERTO</strong></td>
		</tr>
		<tr>
			<td>Indice</td>
			<td><select name="graficoscelto" onChange="javascript:VerificaIndiceSel();">
				<option value="MI.-1.SPMIB">FTSE MIB&nbsp;</option>
				<option value="MI.-1.MINISPMIB">Mini FTSE MIB&nbsp;</option>
			</select></td>
		</tr>
		</table>
	</div>
	
	<div class="tithelp">
		<div class="helpleft"><h2 class="titTable">Scegli il mercato</h2></div>
		<br class="clear"/>
	</div>
	<table class="form01">
	<tr> 
		<td width="95" id="campo01" class="uno">Mercato</td>
		<td><select name="select">
			<option>-- seleziona --</option>
			<option>-----------------------</option>
		</select></td>
	</tr>
	</table>

	<div class="fooform">
	 	<div class="fooformleftb">
		<div class="text">Trova gli strumenti di tuo interesse, selezionando il mercato di appartenenza</div>	
		</div>
		<div class="fooformright">
   	 		<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Vai</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		</div>
	</div>
	<br class="clear">
	
	
</div> 


<div class="box3cCenter">
	<table class="tit_select" width="100%">
	<tr>
	<td><h2 class="titTable">Principali Indici Futures</h2></td>
	<td class="right"><select name="select">
			<option>Principali</option>
			<option>Idem</option>
			<option>Eurex</option>
			<option>Cme</option>
			<option>eCBOT</option>
			<option>Euronext-Liffe</option>
			<option>Tutti</option>
		</select></td>
	</tr>
	</table>
	
	
	<table cellspacing="0" cellpadding="0" class="condiz2">
	<!--<tr class="color"> 
		<td style="width:150px;">Numero conto</td>
		<td colspan="2" style="width:130px;"></td>
	</tr>	-->				  
	<tr class="dispari"> 
		<td class="left">FTSE MIB</td>
		<td class="right">19.340</td>
		<td class="equal">&nbsp;</td>
		<td class="last right posi">0,01%</td>
	</tr>
	<tr class="pari"> 
		<td class="left">Dax</td>
		<td class="right">5.789</td>
		<td class="pos">&nbsp;</td>
		<td class="last right nega">-0,13%</td>
	</tr>
	<tr class="dispari"> 
		<td class="left">Mini NY Gold</td>
		<td class="right">929,6</td>
		<td class="equal">&nbsp;</td>
		<td class="last right nega">-0,16%</td>
	</tr>
	<tr class="pari"> 
		<td class="left">Euro/Usd FX</td>
		<td class="right">1,51</td>
		<td class="pos">&nbsp;</td>
		<td class="last right posi">0,41%</td>
	</tr>
	<tr class="dispari"> 
		<td class="left">E-mini S&P500</td>
		<td class="right">1.100</td>
		<td class="equal">&nbsp;</td>
		<td class="last right posi">0,48%</td>
	</tr>
	<tr class="pari"> 
		<td class="left">30 Year Treasury Notes</td>
		<td class="right">n.d</td>
		<td class="equal">&nbsp;</td>
		<td class="last right posi">-0,13%</td>
	</tr>
	<tr class="dispari"> 
		<td class="left">E-miNY Crude Oil</td>
		<td class="right">66,02</td>
		<td class="pos">&nbsp;</td>
		<td class="last right nega">-1,05%</td>
	</tr>
	<tr class="dispari"> 
		<td class="left legenda" colspan="4"><strong>Tendenza dell'indice (trend): </strong><br/>
			<div>
			<span><img src ="/img/ret/indice_close.gif" alt="Chiuso"/>Chiuso</span>
			<span><img src ="/img/ret/indice_equal.gif" alt="Invariato"/>Invariato</span>
			<span><img src ="/img/ret/indice_pos.gif" alt="Rialzo"/>Rialzo</span>
			<span><img src ="/img/ret/indice_neg.gif" alt="Ribasso"/>Ribasso</span>
			</div>
		</td>
	</tr>
	
	</table>
</div>


<div class="box3cRight">
<div class="tabordininew">
	<h2 class="titTable">Notizie di oggi</h2>
	<table class="box01 info" cellpadding="0" cellspacing="0" width="145">
	<tr> 
		<td width="10"></td>
		<td class="border">
		<span class="date">12/07/2010</span><br/>
		<a href="#">Lorem ipsum lorem ipsum</a>
		</td>
		<td width="10"></td>
	</tr>
	<tr> 
		<td width="3"></td>
		<td class="border">
		<span class="date">15/07/2010</span><br/>
		<a href="#">Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</a>
		</td>
		<td width="10"></td>
	</tr>
	<tr> 
		<td width="10"></td>
		<td class="border">
		<span class="date">23/07/2010</span><br/>
		<a href="#">Lorem ipsum lorem ipsum</a>
		</td>
		<td width="10"></td>
	</tr>
	<tr>
		<td class="last" colspan="3"><a class="goto" href="">Vedi tutte</a></td>
	</tr>
	
	</table>
	
	
	
	<ul class="listafrec">
		<li><a title="#" href="#1">Guida ai derivati Idem su sito</a></li>
		<li><a title="#" href="#1">Guida ai derivati Esteri su sito</a></li>
		<li><a title="#" href="#1">Schede Prodotti Derivati Esteri</a></li>
	</ul>

	
</div>
</div>

<br class="clear" /><br />
	
<div id="footerwt">
	<!-- BOX INFORMATIVI -->
	<div class="box">
    	<strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Se non ti sei ancora registrato il ritardo &egrave; di 20 minuti anche sui mercati italiani.
		Desideri le quotazioni in tempo reale sui mercati di tuo interesse? Aderisci all'opzione <b>Su Misura</b>. 
	</div>

	<div class="box">
    	<strong>NYSE Disclaimer:</strong> As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control. 
	</div>

	<div class="box">
		<b>In questa pagina puoi:<br/></b>
		<ul>
			<li>selezionare il mercato derivati che ti interessa;</li>
			<li>consultare il valore degli indici futures dei mercati di tuo interesse;</li>
			<li>consultare in sintesi le ultime notizie dei principali mercati finanziari e accedere alla sezione dove puoi trovarne il dettaglio;</li>
			<li>consultare il grafico intraday dei principali indici futures e lo stato del mercato (Aperto o Chiuso).</li>
		</ul>
	</div>

	<div class="box">  
		Per ulteriori informazioni clicca su <a onclick="javascript:window.open('connect.php?page=tpl_priv_popup_wt.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"/></a></a>
	</div>
      <!-- AREA INFORMAZIONI E FEEDBACK -->
</div>