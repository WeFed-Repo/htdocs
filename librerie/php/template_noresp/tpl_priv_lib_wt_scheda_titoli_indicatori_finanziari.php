<h1 class="floatsx">azioni</h1>
<div class="fooform fooform_tit">
		<div class="fooformright">
		
		<div><a title="aggiorna" class="btnformright" href=""><img alt="" src="/img/ret/btn_left_ar.gif"><span>aggiorna</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		<div class="lastupdate">Ultimo aggiornamento DD/MM/YYYY ore MM/HH</div>
		</div>
	   </div>
	<br class="clear" />
<div class="schedaTitoliCont">
	
	
	<div class="schedaTitoliContTop">
		<div class="titolo">ENEL -Mercato</div>
		
		<div class="andamento">FTSE MIB Val: 123456 - Var. <span class="down">- 3,34%</span></div>
	</div>
	<div class="schedaTitoliContMdl">
		<div class="variazioni">
			<div class="variazioniLeft">
				<span class="label">variazioni</span>
				<br class="clear" />
				<img src="/img/ret/indicatore_trend_neg1.gif" alt="" />
				<br class="clear" />
				<span class="down">+2,13<span class="small">%</span></span>
			</div>
			<div class="variazioniRight">
				<ul>
					<li><span class="label">ultimo prezzo<br /><span class="date">gg/mm/aa - hh/mm:ss</span></span><span class="up">5,13</span></li>
					<li><span class="label">vol. domanda</span><span class="num">0,9998</span></li>
					<li><span class="label">pr. domanda</span><span class="num">0,9998</span></li>
					<li><span class="label">pr. offerta</span><span class="num">0,9998</span></li>
					<li><span class="label">vol. offerta</span><span class="num">0,9998</span></li>
					
				</ul>
				<?php include("../librerie/include/commons/boxeditoriali/box_black_priv_240.php"); ?>
			</div>
		</div>
		<div class="dettagli">

		<div class="dettagliTabFirst" id="TabFirst">
			<div class="dettagliTabFirstleft off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli.php" onclick="firstMenuSelected(this)">Quick overview</a></div>
			<div class="dettagliTabFirstright">
			    <div class="primo on"><a onclick="firstMenuSelected(this)" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_analisi_fondamentale.php" class="first">Analisi fondamentale</a></div>
				<div class="secondo off"><a onclick="firstMenuSelected(this)" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_analisi_tecnica.php">Analisi tecnica</a></div>
			</div>
		</div>
		<div class="dettagliTabSecond">
			<ul>
				<li class="off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_analisi_fondamentale.php" onmouseover="tabTitoli(this)" onmouseout="tabTitoliOff(this)">Raccomandazioni</a></li>
				<li class="active"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_indicatori_finanziari.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Indicatori finanziari</a></li>
				<li class="off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_dati_previsionali.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Dati previsionali</a></li>
				<li class="off"  title="Corporate governance"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_corporate_governance.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Corporate governance</a></li>
				<li class="off"><a href="#" title="" class="scHelp" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)"></a></li>
			</ul>
		</div>
		
		<!-- contenuto tab-->
		<div>
			<div class="titTable">Performance del prezzo dal 2006</div>
			<div class="graficoSpace"><img alt="" src="/img/ret/grafico_placeholder.gif"></div>
			<div class="schedadati">
			<div class="schedaldatileft">
				
			<div class="titTable">Solidit&agrave; finanziaria</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo13_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo13_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			
			<table cellspacing="0" cellpadding="0" class="pop">
				<tr class="dispari"> 
						<td>Indici di liquidit&agrave; immediata (Quick ratio)</td>
						<td class="posdx">3,23</td>
					</tr>
					<tr class="pari"> 
						<td>Indice di liquidit&agrave; corrente (Current ratio) </td>
						<td class="posdx">1,9 </td>
					</tr>
					<tr class="dispari"> 
						<td>Indebitamento a lungo termine/mezzi propri (LT Debt Equit)</td>
						<td class="posdx">3,23</td>
					</tr>
						<tr class="pari"> 
						<td>Indebitamento totale/mezzi propri (Total Debt to Equity) </td>
						<td class="posdx">1,9 </td>
					</tr>
			</table>
			<br />
			<div class="titTable">Dati per azioni</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo12_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo12_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			
			<table cellspacing="0" cellpadding="0" class="pop">
			<tr class="dispari"> 
						<td>Utili </td>
						<td class="posdx">3,23</td>
					</tr>
					<tr class="pari"> 
						<td>Vendite per azione</td>
						<td class="posdx">1,9 </td>
					</tr>
					<tr class="dispari"> 
						<td>Patrimonio netto per azione</td>
						<td class="posdx">73,52</td>
					</tr>
					
			</table>
				<br />
			<div class="titTable">Dati di bilancio</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo15_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo15_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			<table cellspacing="0" cellpadding="0" class="pop">
					<tbody><tr class="dispari"> 
						<td>Fatturato (milioni di dolalri/euro)</td>
						<td class="posdx">12,89</td>
					</tr>
					<tr class="pari"> 
						<td>EBITDA</td>
						<td class="posdx">1,86</td>
					</tr>
					<tr class="dispari"> 
						<td>UTILE NETTO</td>
						<td class="posdx">1,86</td>
					</tr>
					
				</tbody></table>
			
			</div>
			<div class="schedaldatiright">
			
			<div class="titTable">Multipli di valutazione</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo10_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo10_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			
			<table cellspacing="0" cellpadding="0" class="pop">
				<tr class="dispari"> 
						<td>Indici di liquidit&agrave; immediata (Quick ratio)</td>
						<td class="posdx">3,23</td>
					</tr>
					<tr class="pari"> 
						<td>Indice di liquidit&agrave; corrente (Current ratio) </td>
						<td class="posdx">1,9 </td>
					</tr>
					<tr class="dispari"> 
						<td>Indebitamento a lungo termine/mezzi propri (LT Debt Equit)</td>
						<td class="posdx">3,23</td>
					</tr>
						<tr class="pari"> 
						<td>Indebitamento totale/mezzi propri (Total Debt to Equity) </td>
						<td class="posdx">1,9 </td>
					</tr>
			</table>
			<br />
			<div class="titTable">Indici di redditivit&agrave;</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo16_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo16_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			<table cellspacing="0" cellpadding="0" class="pop">
					<tbody><tr class="dispari"> 
						<td>ROE = (Rendimento del capitale proprio)</td>
						<td class="posdx">3,23</td>
					</tr>
					<tr class="pari"> 
						<td>ROA = (Rendimento delle attivit&agrave;)</td>
						<td class="posdx">1,9 </td>
					</tr>
					<tr class="dispari"> 
						<td>ROI = (Rendimento del capitale investito)</td>
						<td class="posdx">1,9 </td>
					</tr>
			</tbody></table>
				<br />
			<div class="titTable">Indici di profittabilit&agrave;</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo14_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;" class="hlp">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo14_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			<br class="clear">
			<table cellspacing="0" cellpadding="0" class="pop">
				<tr class="dispari"> 
						<td>Margine lordo</td>
						<td class="posdx">12,89</td>
					</tr>
					<tr class="pari"> 
						<td>Margine operativo</td>
						<td class="posdx">1,86</td>
					</tr>
					
				</table>
		
			
			
			</div>
				<br  class="clear" />
			<!-- box di errore-->
			<div class="boxalert">
				<div class="boxalertimage">
					<img src="/wscmn/img/ret/img_or_warning.gif">
				</div>
				<div class="boxalertdescription">
					<span class="boxalerttitle">Attenzione si è verificato un errore nel caricamento della tabella</span>
					<p>
						Lorem ipsum dolor sit amet, CONSECTETUR ADIPISCING ELIT, lorem dolor amet consectetur elit. Lorem ipsum dolor sit amet, lorem dolor et Pai, lorem dolor amet consectetur elit. Dolor amet lorem ipsum.
					</p>
					<a href="#1" class="btnboxgray" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt=""><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt=""></a>
				</div>
			</div>
			</div>
		
		</div>
	</div>
	</div>
	<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, 'load', function() {
	createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
	createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
});

function sceltaRapportoFunc (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}

function sceltaSottoRapportoFunc (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
	<?php include("../librerie/include/commons/navigazione/nav_black_priv_065.php"); ?>
	<p class="note">I dati di analisi sono forniti da Thomson Reuters, in base a ricerche fornite da terze parti. Webank non ha modificato e non certifica la validit&agrave; di questi dati. Webank e Thomson Reuters non sono e non saranno responsabili per quanto riguarda le modalit&agrave; di utilizzo del servizio.
		<br /><br />
		<strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? Vai alla relativa <a href="https://www.webank.it/webankpri/wbOnetoone/3l/do/pktrading/attivazioneInformativeMercati.do?OBSCNT=TAB&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_costi_inform_ser_anali_et_attiv_wt&OBSKEY3=nav_wbx_priv_gestione_servizi_pro_wt&cf=0.4305772647833285">pagina di attivazione</a>.
		<br /><br />
		<strong>NYSE Disclaimer:</strong> As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control.
		
		</p>
		<div class="fooform">
		<div class="fooformtop"></div>
		<div class="fooformleft">
		<div><a title="lorem ipsum" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"><span>indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
	</div>
		</div>

</div>