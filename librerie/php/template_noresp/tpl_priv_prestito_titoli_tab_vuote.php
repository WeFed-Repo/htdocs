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
	<div class="boxalert">
	<div class="boxalertimage">
		<img src="/wscmn/img/ret/img_or_ricerca_ko.gif">
	</div>
	<div class="boxalertdescription">
		<p>
			Lorem ipsum dolor sit amet, CONSECTETUR ADIPISCING ELIT, lorem dolor amet consectetur elit. Lorem ipsum dolor sit amet, lorem dolor et Pai, lorem dolor amet consectetur elit. Dolor amet lorem ipsum.
		</p>
	</div>
</div>
	<br class="clear" />	
	<img src="/img/ret/img_table_bottom_prestito.gif" class="imgtab"/>
</div>

<table cellspacing="0" cellpadding="0" border="0" class="dettTable dettTableb">
	<tr>
		<th width="67">Oggi in prestito</th>
		<th width="290">Titolo</th>
		<th width="96">ISIN</th>
		<th width="55">Mercato</th>
		<th class="nobor" width="157">% proventi sul totale</th>
		<th class="noborlf" width="30">&nbsp;</th>
	</tr>	
	<tr>
		<td colspan="6" class="vuota">Non sono presenti ordini</span></td>
	</tr>
	<tr>
		<td class="vertot" colspan="6">Guadagno totale <span>0</span></td>
	</tr>
</table>
