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


<table class="form01 nopadd ">
<tr>
	<td class="depwt uno" id="lblDeposito">Deposito titoli</td>
	<td class="rappWt">			
		<span id="000000000000000000000" style="display:none;">1</span>	
		<div class="selectRappOut">
			<strong>0000/0000000/0</strong>
			<span class="uniqTooltipIco" onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this)" onmouseout="removeUniqTooltip(event, this);">&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="uniqTooltipInnerHTML"> COGNOME NOME</span>
			</span>
		</div>
		<div class="depRightBlock">
			<div class="importoDeposito" id="importoDeposito">
				<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this)" onmouseout="removeUniqTooltip(event, this);" class="uniqTooltipText" id="liquiditaDep"><span class="uniqTooltipPos"><strong><span id="tot_investibile_0">409,94</span>&nbsp;&euro;</strong> al 07/07/2017</span><span class="uniqTooltipInnerHTML">04/07/2017: <strong><span id="tot_investibile_1">409,94</span>&nbsp;&euro;</strong>
				<br>05/07/2017: <strong><span id="tot_investibile_1a">409,94</span>&nbsp;&euro;</strong>
				<br>06/07/2017: <strong><span id="tot_investibile_2">409,94</span>&nbsp;&euro;</strong>
				<br>07/07/2017: <strong><span id="tot_investibile_3">409,94</span>&nbsp;&euro;</strong>
				<br>10/07/2017: <strong><span id="tot_investibile_4">409,94</span>&nbsp;&euro;</strong>
				<br>
				</span></span>
			</div>
			<a href="javascript:;" class="iconaDettaglio" onclick="javascript:biggerPopup('/do/banking/WsAvailableBalanceMultiAction.do', '&amp;CUST='+ $('selectPortafoglio').value +'&amp;val', 'DETTAGLIO DEL SALDO');"><img src="/img/ret/ico1gr_dettaglio.gif"></a>
		</div>
		<div class="totLiquidita">Totale liquidit&agrave;</div>
	</td>
</tr>
</table>



<!--
<table class="form01 nopadd">
<tr>
	<td class="depwt">Deposito titoli</td>
	<td class="rappWt">
		<div id="sceltaRapporto" class="selectRapp">
			<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
			<a href="javascript:;" class="inputOption inputSx">
				<span class="inputDx">
					<span class="input">
						xxx/aaaaaa
					</span>
				</span>
			</a>
			<div class="selectorSpacer" style="display: none;"></div>
			<div class="selector" style="display: none;">
				<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
					<strong>xxx/aaaaaa</strong><br/>
					Nome Nome Cognome Cognome1</a>
				<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
					<strong>xxx/bbbbbb</strong><br/>
					Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
				<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
					<strong>xxx/cccccc</strong><br/>
					Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
					Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
					Nome Nome Cognome Cognome5</a>
			</div>
		</div>
		<div class="totLiquidita">Totale liquidit&agrave;</div>
		<div class="depRightBlock">
			<div class="importoDeposito">
				<span id="liquiditaDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
					<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
					<span class="uniqTooltipInnerHTML">
						31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
						01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
						02/01/2010: <strong>x,xx &euro;</strong>
					</span>
				</span>
			</div>
			<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
		</div>
	</td>
</tr>
</table>
-->