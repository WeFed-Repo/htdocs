<?php
	if (!isset($ico)) $ico = true;
?>
<div id="content">
	<table class="form01 nopadd popup">
		<tbody>
			<tr>
				<td class="depwt">Deposito titoli</td>
				<td class="rappWt">
					<div class="selectRappOut"><strong>xxx/cccccc</strong>
						<span class="uniqTooltipIco" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="uniqTooltipInnerHTML">
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 -
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 -
								Nome Nome Cognome Cognome5
							</span>
						</span>
					</div>
				</td>
			</tr>
			<tr>
				<td class="depwt">Totale liquidit&agrave;</td>
				<td class="rappWt">
					<div class="importoDeposito">
						<span class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
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