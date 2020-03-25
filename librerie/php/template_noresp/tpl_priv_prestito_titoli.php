<h1>PRESTITO TITOLI</h1>

<div class="divtabellalist">
	<table class="tabellalist" border="0">
		<tr>
			<td class="on first"><a title="Lorem ipsum" href="#1">stato</a></td>
			<td class="off"><a title="Lorem ipsum lorem" href="#1">storico</a></td>												
			<td class="end"> </td>						
		</tr>
	</table>
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

<table class="form01 nopadd" cellspacing="0" cellpadding="0">
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
		<div class="depRightBlock">			
			<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&flg=WT&sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
		</div>		
	</td>
</tr>
</table>



<h3>Situazione odierna - gg/mm/aaaa</h3>
<div class="prestito_tit">
	<img src="/img/ret/img_table_top_prestito.gif" class="imgtab"/>
	<div class="totale">Totale controvalore portafoglio bolli <span>1.000.000,00 &euro;</span></div><div class="situazione">Situazione odierna - gg/mm/aaaa <span>250.000,00 &euro;</span></div>
	<br class="clear" />
	<div class="tab">
		<table>
			<tr>
				<th class="bgangtop" colspan="5">TOP 5 in prestito</th>
			</tr>
			<tr>
				<th width="151">Titolo</th>
				<th width="60">Mercato</th>
				<th width="105">Ctv. in prestito</th>
				<th width="94">% in prestito</th>
				<th width="93" class="bgright">Tasso annuo</th>
			</tr>	
			<tr>
				<td class="left">Lorem ipsum dolor sit amer</td>
				<td class="left">WWW</td>
				<td class="right">356.487.158,66</td>
				<td class="right">123,664</td>
				<td class="bgright right">20,59 %</td>
			</tr>
			<tr>
				<td class="left">Adispici consecteur</td>
				<td class="left">WWWW</td>
				<td class="right">487.158,66</td>
				<td class="right">548,125</td>
				<td class="bgright right">9,27 %</td>
			</tr>
			<tr>
				<td class="left">Aliqua est ipusm ullam</td>
				<td class="left">WW</td>
				<td class="right">158,68</td>
				<td class="right">123,664</td>
				<td class="bgright right">1,02 %</td>
			</tr>
			<tr>
				<td class="left">Laborarum ullam</td>
				<td class="left">WWWW</td>
				<td class="right">7.158,66</td>
				<td class="right">548,125</td>
				<td class="bgright right">5,18 %</td>
			</tr>
			<tr>
				<td class="bgnobor left">Ist Esp</td>
				<td class="bgnobor left">WWWW</td>
				<td class="bgnobor right">154.259.974,05</td>
				<td class="bgnobor right">123,664</td>
				<td class="bgright bgnobor right">18,49 %</td>
			</tr>
			<tr>
				<td colspan="5" class="bgang"></td>
			</tr>
			
		</table>
	</div>
	<div class="grafprest"><img src="/img/ret/tmp_chart_tort.png"/></div>
	<br class="clear" />	
	<img src="/img/ret/img_table_bottom_prestito.gif" class="imgtab"/>
</div>

<?php include("../librerie/include/commons/tabelle/tab_priv_180.php"); ?>
