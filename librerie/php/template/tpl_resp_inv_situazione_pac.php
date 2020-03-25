<h2>Situazione PAC</h2>
<!--

	TESTO OVERLAYER 

	SITUAZIONE PAC
	STATO 
	Attivo (rata automatica): il Pac è automatico e alla scadenza mensile il sistema in automatico effettua il versamento addebitando contemporaneamente il conto corrente. 
	Attivo (rata manuale): il Pac è attivo ma è sospeso l'automatismo della rata. Quindi, alla scadenza mensile il sistema non effettua in automatico il versamento. Se si vuole effettuare il versamento di rate aggiuntive occorre operare tramite la funzione "Versamenti aggiuntivi Pac". 
	Estinto: il Pac è estinto quando tutte le rate previste sono state versate o il piano è stato chiuso anticipatamente. 

	RATA 
	L'importo del singolo versamento. 

	N. RATE TOT/DURATA 
	E' il numero di rate totali previste dal piano. Il numero di rate determina anche la durata che è espressa in anni. Es: 60 rate mensili determinano una durata di 5 anni. 

	VERSAMENTI EFFETTUATI 
	Sono i versamenti del piano d'accumulo che sono già stati effettuati. 

	RATE RESIDUE 
	E' la differenza tra il numero di rate totali previste dal piano e il numero di rate versate. 

	PROSSIMO VERSAMENTO 
	E' la data in cui è previsto il successivo versamento. 

	N. QUOTE/CONTROV. EUR 
	E' il numero di quote (nel caso di un fondo) o azioni (nel caso di una sicav) possedute. 
	Il controvalore del fondo o sicav in portafoglio è calcolato moltiplicando il numero di quote/azioni per il Valore Quota/NAV di ognuna di esse. Il controvalore è espresso nella valuta di denominazione del fondo. 
	Per esempio, se il valore della singola quota o azione è di 100 € e il numero di quote o azioni è di 250, il controvalore corrispondente sarà di 25.000 €. 

	CONTRATTO N. 
	E' il numero identificativo del Pac. 

-->


<form action="" name="situazionePacForm" method="POST">
<div class="tithelp">
<div class="helpleft">Dati ordine</div>
<div class="BvTableHeaderHelp" align="right">
	<a href="javascript:pop_up_int(cgi_script + '/common/ExternalHelp.jsp?key=situaz_pac');" class="hlp">help</a>	
	<a href="javascript:pop_up_int(cgi_script + '/common/ExternalHelp.jsp?key=situaz_pac');"><img alt="" title="help" src="/img/ret/ico2or_help2.gif"></a>
</div>
<br class="clear"></div>
	<table class="form01">
	<tbody><tr> 
				<td class="uno" width="125"> Deposito </td>					
				<td colspan="3" width="245">				
				<select name="deposito" id="deposito" onchange="javascript:loadFondi();">		
									<option value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR </option>
									<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR </option>
									<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR </option>
									<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR </option>
									<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR </option>
									<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR </option>
								</select>
			</td>
				
		</tr>	
</tbody></table>
<div id="erroreForm" style="display: none;">
		<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"></div>
		<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0"><img alt="" src="/img/ret/box_attenzione.jpg" border="0">
		<br>
				</p><ul class="alert">				
					<li id="messaggio"></li>				
				</ul>
			<br class="clear">
	</div>
	<br class="clear">
	<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"></div>
</div>
<div id="nessunFondo" style="display: none;">
			<table cellpadding="0" cellspacing="0" border="0" class="TableF24">
			<tbody><tr>
				<td class="TopF24"><img src="/img/ret/f24_top.gif" border="0" hspace="0" alt=""></td>
				</tr>
				<tr>
				<td class="BoxF24"><img src="/img/ret/ricerca_vuota.gif" class="icoF24" alt="" align="left" border="0" width="39" height="38">
				Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi</td>
				</tr>
			<tr>
				<td class="BottomF24"><img src="/img/ret/f24_bottom.gif" border="0" alt=""></td>
		</tr>
		</tbody></table>
	</div>
<div id="fondi"><input type="hidden" name="messaggioErrore" value="OK">
<input type="hidden" value="13" name="numeroFondi">
			
<div class="tithelp">	
	<div class="helpleft">Elenco situazione Pac</div><br class="clear">
</div>


<table class="condiz2" cellpadding="0" cellspacing="0">

	<tbody><tr class="color"> 
		<td>Nome</td>
		<td>Stato</td>
		<td>Rata</td>
		<td>N.rate tot<br>Durata</td>
		<td>Versamenti<br>effettuati</td>
		<td>Rate residue</td>
		<td>Prox versam.</td>
		<td>N. quote<br>Controv. EUR</td>

		<td>Contratto n.</td>
		<td>Versa</td>
	
	</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Templeton Global Income A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=7001&amp;codiceInterno=42982560&amp;fondosicav=S&amp;divisa=EUR&amp;fondo=true'">Templeton Global Income A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">60</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">349.215<br></td>
			<td class="right">0000000000000001</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">JPM Global Income A Dis EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=222&amp;codiceInterno=42891350&amp;fondosicav=S&amp;divisa=EUR&amp;fondo=true'">JPM Global Income A Dis EUR </a>
			</td>
			<td class="center">ATTIVO (RATA AUTOMATICA)</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">31</td>
			<td class="right">29</td>
			<td class="center">25/09/2017</td>
			<td class="right">25.159<br></td>
			<td class="right">0000000000000001</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">BGF World Healthscience E2 EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=900&amp;codiceInterno=4111081&amp;fondosicav=S&amp;divisa=EUR&amp;fondo=true'">BGF World Healthscience E2 EUR </a>
			</td>
			<td class="center">ATTIVO (RATA AUTOMATICA)</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">31</td>
			<td class="right">29</td>
			<td class="center">25/09/2017</td>
			<td class="right">146.21<br></td>
			<td class="right">0000000000000001</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Valore Globale A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=386020&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Valore Globale A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">51</td>
			<td class="right">180<br>15 anni</td>
			<td class="right">180</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">162.084<br></td>
			<td class="right">0000000010028646</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Valore Globale A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=386020&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Valore Globale A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">50</td>
			<td class="right">180<br>15 anni</td>
			<td class="right">180</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">162.084<br></td>
			<td class="right">0000000010028645</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Emergenti A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=1415871&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Emergenti A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">60</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">600.247<br></td>
			<td class="right">0000000010007102</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Pianeta A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=1015921&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Pianeta A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">60</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">532.931<br></td>
			<td class="right">0000000010008026</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Templeton Global Total Return A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=7001&amp;codiceInterno=42992940&amp;fondosicav=S&amp;divisa=EUR&amp;fondo=true'">Templeton Global Total Return A EUR </a>
			</td>
			<td class="center">ATTIVO (RATA AUTOMATICA)</td>
			<td class="center">200</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">7</td>
			<td class="right">53</td>
			<td class="center">26/11/2015</td>
			<td class="right">151.111<br></td>
			<td class="right">0000000000000003</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Emergenti A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=1415871&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Emergenti A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">100</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">60</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">600.247<br></td>
			<td class="right">0000000010007103</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Templeton Africa A Dis EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=7001&amp;codiceInterno=43010170&amp;fondosicav=S&amp;divisa=EUR&amp;fondo=true'">Templeton Africa A Dis EUR </a>
			</td>
			<td class="center">ATTIVO (RATA AUTOMATICA)</td>
			<td class="center">300</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">29</td>
			<td class="right">31</td>
			<td class="center">10/11/2015</td>
			<td class="right">885.017<br></td>
			<td class="right">0000000000000002</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Obbligazionario Emergente A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=3825510&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Obbligazionario Emergente A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">50</td>
			<td class="right">60<br>5 anni</td>
			<td class="right">60</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">409.555<br></td>
			<td class="right">0000000010004923</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="pari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Visconteo A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=380700&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Visconteo A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">51</td>
			<td class="right">180<br>15 anni</td>
			<td class="right">180</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">100.296<br></td>
			<td class="right">0000000010081597</td>
			<td class="center">&nbsp;</td>
			</tr>
							<tr class="dispari"> 
									<td class="left"> 
				<!-- <a href="javascript:;">Anima Visconteo A EUR</a>	 -->
				<a href="javascript:document.location.href=cgi_script+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_investimenti&amp;OBSKEY=nav_priv_wbx_ricerca_confronta&amp;codicesocieta=888&amp;codiceInterno=380700&amp;fondosicav=F&amp;divisa=EUR&amp;fondo=true'">Anima Visconteo A EUR </a>
			</td>
			<td class="center">ESTINTO</td>
			<td class="center">50</td>
			<td class="right">180<br>15 anni</td>
			<td class="right">180</td>
			<td class="right">0</td>
			<td class="center">-</td>
			<td class="right">100.296<br></td>
			<td class="right">0000000010081596</td>
			<td class="center">&nbsp;</td>
			</tr>
	
</tbody></table>
<div class="fooform">
		<div class="fooformleft">
			<div>
				<a title="indietro" class="btnformleft" href="javascript:history.back();">
					<img alt="" src="/img/ret/btn_left_bi.gif">
					<span>indietro</span>
					<img alt="" src="/img/ret/btn_right_bi.gif">
				</a>
			</div>	
		</div>	
		<br clear="all">
	</div>
	<br clear="all">
<script>

</script></div>
</form>