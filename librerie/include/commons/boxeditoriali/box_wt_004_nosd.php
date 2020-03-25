<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, 'load', function() {
	createSelectRapp('sceltaRapporto_nosd', 'sceltaRapportoVal_nosd', sceltaRapportoFunc);
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

<table class="form01 nopadd">
<tr>
	<td class="depwt">Deposito titoli</td>
	<td class="rappWt">
		<div id="sceltaRapporto_nosd" class="selectRapp">
			<input id="sceltaRapportoVal_nosd" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
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
		<div class="totLiquidita">Totale liquidit&agrave;</div>
	</td>
</tr>
</table>