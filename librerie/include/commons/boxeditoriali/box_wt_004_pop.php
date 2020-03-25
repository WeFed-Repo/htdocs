<?php
	if(!isset($ico)) $ico = true;
?>
<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, 'load', function() {
	createSelectRapp('sceltaRapportoPopup', 'sceltaRapportoValPopup', sceltaRapportoFuncPopup);
	createSelectRapp('sceltaSottoRapportoPopup', 'sceltaSottoRapportoValPopup', sceltaSottoRapportoFuncPopup);
});

function sceltaRapportoFuncPopup (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}

function sceltaSottoRapportoFuncPopup (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
<div id="content">
	<!--<h1>Seleziona il deposito titoli</h1>-->
	<table class="form01 nopadd popup">
		<tbody>
			<tr>
				<td class="depwt">Deposito titoli</td>
				<td class="rappWt">
					<div id="sceltaRapportoPopup" class="selectRapp">
						<input id="sceltaRapportoValPopup" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
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
				</td>
			<tr>
				<td class="depwt">Totale liquidit&agrave;</td>
				<td class="rappWt">
					<div class="importoDeposito">
						<span id="liquiditaDepPopup" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
							<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
							<span class="uniqTooltipInnerHTML">
								31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
								01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
								02/01/2010: <strong>x,xx &euro;</strong>
							</span>
						</span>
					</div>
<?php
	if($ico && substr($tpl,0,26)!="/php/wetrade/tpl_priv_book") {
?>
				<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
<?php
	}
?>
				</td>
			</tr>
			<tr>
				<td class="depwt">Deposito titoli</td>
				<td class="rappWt">
					<div id="sceltaSottoRapportoPopup" class="selectRapp">
						<input id="sceltaSottoRapportoValPopup" type="hidden" class="value" name="sottorapporto" value="xxx/aaaaaa"/>
						<a href="javascript:;" class="inputOption inputSx">
							<span class="inputDx">
								<span class="input">
									xxx/aaaaaa
								</span>
							</span>
						</a>
						<div class="selectorSpacer" style="display: none;"></div>
						<div class="selector" style="display: none;">
							<a value="xxx/aaaaaa" href="javascript:;" class="selectorOptions between first selected">
								<strong>xxx/aaaaaa</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxx/bbbbbb - tutti i sottodepositi" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxx/bbbbbb/0" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxx/bbbbbb/1" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxx/bbbbbb/2" href="javascript:;" class="selectorOptions between">
								<strong>xxx/bbbbbb/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxx/cccccc - tutti i sottodepositi" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxx/cccccc/0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxx/cccccc/1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxx/cccccc/2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxx/cccccc/3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxx/cccccc/4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxx/cccccc/5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="depwt">
				Totale liquidit&agrave;
				</td>
				<td class="rappWt">
					<div class="importoDeposito">
						<span id="liquiditaSottoDepPopup" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
							<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
							<span class="uniqTooltipInnerHTML">
								31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
								01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
								02/01/2010: <strong>x,xx &euro;</strong>
							</span>
						</span>
					</div>
<?php
	if($ico && substr($tpl,0,26)!="/php/wetrade/tpl_priv_book") {
?>
					<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
<?php
	}
?>
				</td>
			</tr>
		</tbody>
	</table>
</div>