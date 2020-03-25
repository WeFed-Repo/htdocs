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

	
		<div class="dettagliTabFirst">
			<div class="dettagliTabFirstleft off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli.php" onclick="firstMenuSelected(this)">Quick overview</a></div>
			<div class="dettagliTabFirstright on">
			    <div class="primo off"><a onclick="firstMenuSelected(this)" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_analisi_fondamentale.php" class="first">Analisi fondamentale</a></div>
				<div class="secondo on"><a href="#" onclick="firstMenuSelected(this)">Analisi tecnica</a></div>
				
		</div>
		</div>
		<div class="dettagliTabSecond small">
			<ul>
				<li class="off"><a href="#" class="doubleRow" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)" onmouseout="tabTitoliOff(this)">Lungo termine investitore</a></li>
				<li class="off"><a href="#"  class="doubleRow" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Medio termine investitore</a></li>
				<li class="off"><a href="#"  class="doubleRow" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Lungo termine trader</a></li>
				<li class="off"><a href="#"  class="doubleRow" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Breve termine trader </a></li>
				<li class="off"><a href="#" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Intraday trader </a></li>
				<li class="active"><a href="#"  onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)">Trader Made</a></li>
				<li class="off"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_lib_wt_scheda_titoli_at_help.php" title=""  class="scHelp" onclick="tabTitoliSelected(this)" onmouseover="tabTitoli(this)"  onmouseout="tabTitoliOff(this)"></a></li>
			</ul>
		</div>
		
		<!-- contenuto tab-->
		<div>
			<!--<div class="toolbarSpace"></div>-->
			<br class="clear" />
			<a href="javascript:;" class="switch" onclick="this.innerHTML = 'Visualizzazione a breve termine';">Visualizzazione a lungo termine</a>
			<div class="graficoSpace"><img alt="" src="/img/ret/grafico_placeholder.gif"></div>
			<div class="col">
				<div class="titTable">Ma</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="33%"><span class="padd"><strong>5 giorni</strong></span></td>	
						<td width="33%"><strong>1 mese</strong></td>
						<td width="33%"><strong>6 mesi</strong></td>
						
					</tr>
					<tr class="heading light det last">
						<td><span class="up">0,00</span></td>
						<td><span class="up">-10,00</span></td>
						<td><span class="down">-30,00</span></td>
					</tr>
				
			  </table>
			  
			</div>
			<div class="col">
				<div class="titTable">Volume</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="33%"><span class="padd"><strong>5 giorni</strong></span></td>	
						<td width="33%"><strong>1 mese</strong></td>
						<td width="33%"><strong>6 mesi</strong></td>
						
					</tr>
					<tr class="heading light det last">
						<td><span class="up">0,00</span></td>
						<td><span class="up">-10,00</span></td>
						<td><span class="down">-30,00</span></td>
					</tr>
				
			  </table>
			  
			</div>
			<div class="col">
				<div class="titTable">Volume</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="33%"><span class="padd"><strong>5 giorni</strong></span></td>	
						<td width="33%"><strong>1 mese</strong></td>
						<td width="33%"><strong>6 mesi</strong></td>
						
					</tr>
					<tr class="heading light det last">
						<td><span class="up">0,00</span></td>
						<td><span class="up">-10,00</span></td>
						<td><span class="down">-30,00</span></td>
					</tr>
				
			  </table>
			  
			</div>
			<div class="col">
				<div class="titTable">Resistenze</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="25%"><span class="padd"><strong>I</strong></span></td>	
						<td width="25%"><strong>II</strong></td>
						<td width="25%"><strong>III</strong></td>
						<td width="25%"><strong>IV</strong></td>
					</tr>
					<tr class="heading light det last">
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
					</tr>
				
			  </table>
			  
			</div>
			<div class="col">
				<div class="titTable">Supporti</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="25%"><span class="padd"><strong>I</strong></span></td>	
						<td width="25%"><strong>II</strong></td>
						<td width="25%"><strong>III</strong></td>
						<td width="25%"><strong>IV</strong></td>
					</tr>
					<tr class="heading light det last">
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
					</tr>
				
			  </table>
			  
			</div>
			<div class="col">
				<div class="titTable">Volume</div>
				<table cellspacing="0" cellpadding="0" border="0" class="dettLiqTable">
					<tr class="heading">
						<td width="25%"><span class="padd"><strong>I</strong></span></td>	
						<td width="25%"><strong>II</strong></td>
						<td width="25%"><strong>III</strong></td>
						<td width="25%"><strong>IV</strong></td>
					</tr>
					<tr class="heading light det last">
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
						<td>0000,00</td>
					</tr>
				
			  </table>
			  
			</div>
			<br class="clear" />
		<!--<div class="expandable">
			<h4><a onclick="javascript: expandArgument (this,'/wscmn/img/ico1gr_toolchiuso.gif','/wscmn/img/ico1gr_toolaperto.gif');" href="javascript:;"><img src="/wscmn/img/ico1gr_toolchiuso.gif">GUIDA ALL'ANALISI TECNICA</a></h4>
			<div style="display: none;">
			<br class="clear" />
			<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur. Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur. Lorem ipsum dolor sit amet consectetur adipiscing elit. Adipiscing amet consectetur.</p>
			</div>
		</div>-->
			<div>
				<ul class="listAprichiudi">

					<li class="open">
						<a href="#1" onclick="openClose(this);">abitasse</a>
						<div style="display: block;">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</li>							

					<li class="close">
						<a href="#1" onclick="openClose(this);">acinia</a>
						<div style="display: none;">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</div>
					</li>							

					<li class="close">
						<a href="#1" onclick="openClose(this);">asdsfd</a>
						<div style="display: none;">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</div>
					</li>							

					<li>
						<a href="#1" onclick="openClose(this);">asdsfd</a>
						<div>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.</div>
					</li>	
				</ul>
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