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
				<li class="off"><a href="#" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)" onclick="tabTitoliSelected(this)">Raccomandazioni</a></li>
				<li class="off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_indicatori_finanziari.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Indicatori finanziari</a></li>
				<li class="active"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_dati_previsionali.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Dati previsionali</a></li>
				<li class="off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_corporate_governance.php" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Corporate governance</a></li>
				<li class="off"><a href="#" class="scHelp" title=""  onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)"></a></li>
			</ul>
		</div>
		
		<!-- contenuto tab-->
		<div>
			<div class="titTableCont">
			<div class="titTable">Utile per azione (Euro)</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo1_pop_up.php&amp;flg=WT&amp;sid=priv');" class="hlp" href="javascript:;">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo2_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			</div>
			<br class="clear" />
			<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
				<tr class="heading">
					<td width="200"><span class="padd"><strong></strong></span></td>	
					<td width="50"><strong>Ipsum</strong></td>
					<td width="50"><strong>dolor</strong></td>
					<td width="50"><strong>sit</strong></td>
					<td width="50"><strong>lorem</strong></td>
					<td width="174" rowspan="4"><img src="/img/ret/grafico_placeholder3.gif" alt="" /></td>
				</tr>
				<tr class="heading light det">
					<td><strong>Utili per azione corrente</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
				<tr class="heading light det">
					<td><strong>Utili per azione (stima anno corrente)</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
					<tr class="heading light det last">
					<td><strong>Utili per azione (stima anno prossimo)</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
				
            </table>
			<br />
			<div class="titTableCont">
			<div class="titTable">Fatturato (milioni di Euro)</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo4_pop_up.php&amp;flg=WT&amp;sid=priv');" class="hlp" href="javascript:;">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo2_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			</div>
			<br class="clear" />
			<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
				<tr class="heading">
					<td width="200"><span class="padd"><strong></strong></span></td>	
					<td width="50"><strong>Ipsum</strong></td>
					<td width="50"><strong>dolor</strong></td>
					<td width="50"><strong>sit</strong></td>
					<td width="50"><strong>lorem</strong></td>
					<td width="174" rowspan="4"><img src="/img/ret/grafico_placeholder3.gif" alt="" /></td>
				</tr>
				<tr class="heading light det">
					<td><strong>Fatturato corrente</strong></td>
					<td></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
				<tr class="heading light det">
					<td><strong>Fatturato (stima anno corrente)</strong></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
					<tr class="heading light det last">
					<td><strong>Fatturato (stima anno prossimo)</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
				
            </table>
			<br />
			<div class="titTableCont">
			<div class="titTable">Profitti (milioni di Euro)</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo4_pop_up.php&amp;flg=WT&amp;sid=priv');" class="hlp" href="javascript:;">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo2_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			</div>
			<br class="clear" />
			<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
				<tr class="heading">
					<td width="200"><span class="padd"><strong></strong></span></td>	
					<td width="50"><strong>Ipsum</strong></td>
					<td width="50"><strong>dolor</strong></td>
					<td width="50"><strong>sit</strong></td>
					<td width="50"><strong>lorem</strong></td>
					<td width="174" rowspan="4"><img src="/img/ret/grafico_placeholder3.gif" alt="" /></td>
				</tr>
				<tr class="heading light det">
					<td><strong>Profitto corrente</strong></td>
					<td></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
				<tr class="heading light det">
					<td><strong>Profitto (stima anno corrente)</strong></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
					<tr class="heading light det last">
					<td><strong>Profitto (stima anno prossimo)</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
				
            </table><br />
			<div class="titTableCont">
			<div class="titTable">Divendi per azione</div>
			<div align="right" class="BvTableHeaderHelp"><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo6_pop_up.php&amp;flg=WT&amp;sid=priv');" class="hlp" href="javascript:;">help</a><a onclick="openPopUp('medium', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_scheda_titolo2_pop_up.php&amp;flg=WT&amp;sid=priv');" href="javascript:;"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
			</div>
			<br class="clear" />
			<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
				<tr class="heading">
					<td width="200"><span class="padd"><strong></strong></span></td>	
					<td width="50"><strong>Ipsum</strong></td>
					<td width="50"><strong>dolor</strong></td>
					<td width="50"><strong>sit</strong></td>
					<td width="50"><strong>lorem</strong></td>
					<td width="174" rowspan="4"><img src="/img/ret/grafico_placeholder3.gif" alt="" /></td>
				</tr>
				<tr class="heading light det">
					<td><strong>Dividendo corrente</strong></td>
					<td></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
				<tr class="heading light det">
					<td><strong>Dividendo (stima anno corrente)</strong></td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td>X.XXX.XXX</td>
					<td class="grey">3,33</td>
				</tr>
					<tr class="heading light det last">
					<td><strong>Dividendo (stima anno prossimo)</strong></td>
					<td>3,33</td>
					<td>3,33</td>
					<td>3,33</td>
					<td class="grey">3,33</td>
				</tr>
				
            </table>
			<br />
		<div class="boxInfo">
				<img alt="" src="/img/ret/str_bg_infoTitoli_Top.gif">
				<div class="boxInfoCont">
					<ul>
						<li>LOREM: <span>Lorem ipsum dolor</span></li>
						<li>LOREM: <span>Lorem ipsum </span></li>
						<li>LOREM: <span>Lorem ipsum dolor</span></li>
						<li>LOREM: <span>Lorem ipsum </span></li>
						
					</ul>
				</div>
				<img alt="" src="/img/ret/str_bg_infoTitoli_Bot.gif">
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