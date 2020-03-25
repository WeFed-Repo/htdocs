<?php if ($bank == "webank") { ?>
<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	$(function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
		createSelectRapp('sceltaRapporto2', 'sceltaRapportoVal2', sceltaRapportoFunc2);
	});

	function sceltaRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}

	function sceltaRapportoFunc2 (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}
	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>

<h2>Stato ordini</h2>
<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		 <!--caso con selettore rapporto -->

		<!-- Deposito "base" -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaRapporto" class="selectRapp">
					<input id="sceltaRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
							<strong>1099/485043 - tutti i sottodepositi - AG: MONTEFORTE D'ALPONE - BROGNOLIGO COSTALUNGA</strong><br/>
							ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</a>
							<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1 - AG: MONTEFORTE D'ALPONE - BROGNOLIGO COSTALUNGA</strong><br/>
							ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</a>
							<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/2 - AG: MONTEFORTE D'ALPONE - BROGNOLIGO COSTALUNGA</strong><br/>
							ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-4">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">9.999.999,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">9.999.999,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
		
		<!-- output -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Deposito titoli</label>
					<span class="output">1099/485043 - tutti i sottodepositi - AG: MONTEFORTE D'ALPONE - BROGNOLIGO COSTALUNGA<br/>
							ROSSI MARIO PAOLO – ROSSI CARLA – ROSSI BIANCA MARIA</span>
				</div>
			
				<div class="col-xs-8 col-sm-4">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">9.999.999,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">9.999.999,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
		<!-- fine output -->

		<!--  / Deposito "base" -->

		


		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Filtra per stato</label>
					<select class="form-control">
						<option>Tutti</option>
						<option>Inserito</option>
						<option>Lorem ipsum</option>
					</select>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label-output">Filtra per tiplogia</label>
					<select class="form-control">
						<option>Tutti</option>
						<option>Inserito</option>
						<option>Lorem ipsum</option>
					</select>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
<div class="row">
	<div class="col-xs-12">
		<p class="note flRight noFloatMobile">
			<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
			<!--esempio di loading -->
			<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
		</p>
	</div>
</div>
<h4>Elenco ordini</h4>
<table cellspacing="0" cellpadding="0" border="0" class="sortableTable fixed fix-OuterTable" id="statoOrdini" data-sortable="true" data-sort-order="desc" data-sort-name="nOrdine">
	<thead>
		<tr>
			<th data-field="iconaOper" class="center" data-sortable="false"></th>
			<th data-field="nOrdine" class="left" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>N.ordine sintetico</th>
			<th data-field="titolo" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Titolo</th>
			<th data-field="mercato" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Mercato</th>
			<th data-field="tipo" data-sortable="true" class="labelSmall" data-sorter="fixDescrizioni"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Tipo</th>
			<th data-field="qImmEse"  data-sortable="true" data-sorter="fixQuant">Q.t&agrave; Immessa/<br>eseguita</th>
			<th data-field="pImmEse" data-sortable="false">Prezzo Immesso/<br>eseguito</th>
			<th data-field="dataOra" class="center" data-sortable="true" data-sorter="fixDate"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Data/<br>Ora</th>
			<th data-field="validita" data-sortable="true" data-sorter="fixDate"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Validit&agrave;</th>
			<th data-field="stato" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Stato</th>
			<th data-field="iconaannulla" class="center" data-sortable="false"></th>
			<th data-field="iconadett" class="center" data-sortable="false"></th>
		</tr>
	</thead>
	<tbody>
	</tbody>
	<script>
   	 	
   	 	var $tableOrdini = $('#statoOrdini');
    		$(function () {
    			$.ajax({
		       		url: '/librerie/include/commons/ajax/situazioneOrdini.php',
		       		dataType: 'html',
					success: function(data) {
			       			$tableOrdini.find('tbody').html(data);
			       			$tableOrdini.bootstrapTable({
			       				onPostBody: function() {
			       					initTooltip(); //inizializzo tooltip
			       				}
			       			})
			       		}
		       		})
    		})
    		
    </script>
</table>
<div class="form-group">
    <div class="row">
      <div class="col-xs-12">
        <div class="btn-align-right">
          <a type="button" class="btn btn-primary">esporta in excel</a>
          <a type="button" class="btn btn-primary">stampa</a>
        </div>
      </div>
    </div>
</div>
</section>
<!--overlayer tabella saldi -->
<div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Saldo</h2>
			</div>
			<div class="modal-body">
				<section>

<p>In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.</p>

<p>Rispetto al saldo contabile, il saldo disponibile tiene conto dell’eventuale <strong>fido</strong> e di <strong>operazioni</strong> di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong></p>
</section>

<section>
	<h3>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h3>
	<table cellspacing="0" cellpadding="0" border="0" id="saldoContTable">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Saldo Contabile</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
	</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table1" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>
	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<span class="txthelp"><strong class="closeable" data-title="Per &quot;movimenti non contabilizzati &quot; si intendono le operazioni in accredito (<strong>preavvisi</strong>) o in addebito (<strong>impegni</strong>) già effettuate sul conto, ma non ancora registrate." data-toggle="tooltip">Movimenti non contabilizzati</strong></span>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>
		<tr class="total merged">
	       <td class="right"><strong>Totale impegni banking</strong></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">operazioni sul sito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">operazioni con la carta di debito</td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Nelle &quot;altre operazioni&quot; sono comprese, in particolare:
<ul><li>operazioni presso agenzie territoriali</li><li>operazioni tramite lo &quot;Sportello telefonico&quot;</li><li>operazioni tramite sportelli Self Service BPM</li></ul>" data-toggle="tooltip">altre operazioni</span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br><ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>" data-toggle="tooltip"><strong>Totale impegni trading</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small">liquidit&agrave; impegnata per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">P&L potenziale impegnato per margine di garanzia overnight</td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	     <tr class="merged">
	       <td class="right text-small"><span class="txthelp closeable" data-title="Le operazioni &quot;marginate&quot; o in leva impegnano una disponibilit&agrave; inferiore rispetto a quanto occorrerebbe per impostare un’operazione marginata. Il controvalore degli impegni per operazioni marginate costituisce la liquidità bloccata per operazioni intraday." data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span></td>
	       <td class="bgkWhite center nega">&euro; 0,00</td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	       <td class="bgkWhite"></td>
	    </tr>
	    <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	       <td class="bgkWhite right nega">&euro; 0,00</td>
	    </tr>
	     <tr class="total" >
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"><strong>Totale preavvisi trading</strong></span></td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	        <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr>
	       <td class="right text-small">Compravendita/acquisto</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi">&euro; 0,00</td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale impegni fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	     <tr class="total merged">
	       <td class="right"><span class="txthelp closeable" data-toggle="tooltip" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
<ul>
<li>Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.</li>
<li>I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.</li>
</ul>"<strong>Totale preavvisi fondi</strong></span></td>
	       <td class="bgkWhite center posi">&euro; 0,00</td>
	       <td class="bgkWhite right posi"></td>
	       <td class="bgkWhite right posi"></td>
	        <td class="bgkWhite right posi"></td>
	    </tr>
	</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0"  id="table2" class="fixed">
	<thead>
		<tr>
			<th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
			<th class="center" data-field="secondo">al 01/07/2016</th>
			<th class="center" data-field="terzo">al 01/07/2016</th>
			<th class="center" data-field="quarto">al 01/07/2016</th>
			<th class="right" data-field="quinto">al 01/07/2016</th>	
		</tr>

	</thead>
	<tbody>	
		<tr class="total">
			<td class="left">
				<strong>Saldo disponibile</strong>
			</td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>		
	</tbody>
</table>
<h4>Operativit&agrave; overnight</h4>
<table cellspacing="0" cellpadding="0" border="0" id="">
		<tbody>
			<tr class="total">
				<td class="left fix3Col"><strong>Liquidit&agrave; impegnata per vendita short</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
			<tr class="total">
				<td class="left fix3Col"><strong>Importo accreditato per operativit&agrave; long overnight</strong></td>
				<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
			</tr>
		</tbody>
</table>

</section>
			</div>
		</div>
	</div>
</div>

<!--FINE overlayer tabella saldi -->
<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="iconaOperativa">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="iconaOperativa">BTP 01.02.06/01.08.2021 3,75%</h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
							<li class="linkOff"><span title="C/V">C/V</span></li>
							
							<li class="linkOn"><a title="Book" href="javascript:openPopUp('medium', '')"><span>Book</span></a></li>
							<li class="linkOff"><span title="Book">Book</span></li>
							
							<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
							<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
							
							<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
							<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
							
							<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
							<li class="linkOff"><span title="Alert">Alert</span></li>
							
							
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>


<!--overlayer cancella ordine -->
<div class="modal fade" id="annullaOrdine" tabindex="-1" role="dialog" aria-labelledby="cancellaOrdine">
	<div class="modal-dialog" role="document">
		<div class="modal-content printOrdini">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="cancellaOrdine">Cancella ordine N. 000042</h2>
				</div>
				
				<div class="modal-body">
					<table cellspacing="0" cellpaddin="0">
						<tr class="dispari">
							<td>Titolo</td>
							<td>Fiat Privilegiate</td>
						</tr>
						<tr class="pari">
							<td>Tipo operazione</td>
							<td>Acquisto</td>
						</tr>
						<tr class="dispari">
							<td>Quantit&agrave; residua</td>
							<td>1</td>
						</tr>
						<tr class="pari">
							<td>Prezzo immesso</td>
							<td>100</td>
						</tr>
						<tr class="dispari">
							<td>Validit&agrave;</td>
							<td>19/08/2016</td>
						</tr>
					</table>
					
					<div class="form-group">
					    <div class="row">
					      <div class="col-xs-12">
					        <div class="btn-align-right">
					          <a type="button" class="btn btn-primary" data-dismiss="modal" data-target="#modalConfermaCanc" data-toggle="modal">cancella</a>
					        </div>
					      </div>
					    </div>
					</div>
				</div>
		</div>
	</div>
</div>
<!--layer di conferma cancellazione -->
<div class="modal fade" id="modalConfermaCanc" tabindex="-1" role="dialog" aria-labelledby="confermaCancellaOrdine">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="confermaCancellaOrdine">Revoca ordine N. 000042</h2>
				</div>
				
				<div class="modal-body">
					<p>L'ordine &egrave; stato cancellato</p>
				</div>
		</div>
	</div>



</div>




<!--layer di dettaglio ordine-->
<div class="modal fade" id="dettagliOrdine" tabindex="-1" role="dialog" aria-labelledby="dettaglioOrdine">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="dettaglioOrdine">Dettagli test</h2>
				</div>
				
				<div class="modal-body">
					<section>
						<h4>Ordine N. 000042</h4>
						<form class="formGenerico borderFormRounded output" role="form" id="form02">
							<div class="form-group">
								<!-- UNICA RIGA CON CAMPO-->
								 <div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Titolo</label>
										<span class="output">Daimler</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Tipo operazione</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>	
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>
							<div class="form-group">	
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lorem ispum</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Lorem ispum</label>
										<span class="output">Lore ipsum</span>
									</div>
								</div>
							</div>
						</form>
					</section>
					<section>
						<h4>Ineseguiti</h4>
						<table cellspacing="0" cellpadding="0" border="0" data-sort-name="dataEseguito" class="sortableTable" data-sortable="true"  data-toggle="table" data-sort-order="asc" >
							<thead>
								<tr>
									<th data-sortable="true" data-field="dataEseguito" data-sorter="fixDate"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Data e ora esecuzione</th>
									<th data-sorter="fixQuant" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Q.t&agrave; eseguita</th>
									<th data-field="prezzoEseguito" data-sortable="true" data-sorter="fixQuant"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Prezzo eseguito</th>
									<th data-field="cambioApplicato" data-sortable="false">Cambio applicato</th>
									<th data-field="controval" data-sortable="true"  data-sorter="fixQuant"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Controval. Euro</th>
									<th data-field="commissioni" data-sortable="false">Commissioni Eur</th>
									<th data-field="spese" data-sortable="false" >Spese</th>
									<th data-field="controVal" data-sortable="false" >Controvalore su c/c<br>e data contabile</th>
								</tr>
							</thead>
							<tbody>
								<tr class="dispari">
									<td class="center">07/09/2016<br>12:48:53</td>
									<td class="right">4</td>
									<td class="right">10.560</td>
									<td class="right">1</td>
									<td class="right">30.679</td>
									<td class="right">20</td>
									<td class="right">0</td>
									<td class="right">10.600,7<br>07/09/2016</td>
								</tr>
								<tr class="pari">
									<td class="center">07/08/2016<br>12:48:52</td>
									<td class="right">5</td>
									<td class="right">10.600,7</td>
									<td class="right">1</td>
									<td class="right">30.779</td>
									<td class="right">32</td>
									<td class="right">0</td>
									<td class="right">10.600,7<br>07/09/2016</td>
								</tr>
							</tbody>
						</table>
						<div class="form-group">
						    <div class="row">
						      <div class="col-xs-12">
						        <div class="btn-align-right">
						         	<a type="button" class="btn btn-primary" onclick="focusPrint('dettagliOrdine');window.print();">stampa</a>
						        </div>
						      </div>
						    </div>
						</div>
					</section>
				</div>
		</div>
	</div>
</div>

<script>
	$(function(){
       var $table1 = $('#table1');
	   var $table2 = $('#table2');
       $table1.bootstrapTable();
       $table2.bootstrapTable();
                  $('.merged').each(function()
                  {          
                      for(i=1; i<=$('.merged').length; i++)
                      {
                          if(i==$(this).attr('data-index'))
                            {
                                  $table1.bootstrapTable('mergeCells', {
                                      index: i,
                                      field: 'secondo',
                                      colspan: 4
                            }).bootstrapTable(
                                {
                                    onPostBody : initTooltip()

                         });
                     }
                  }
			})
        })
 
</script>

<?php }
if ($bank == "bpm") {?>

<script type="text/javascript">
//inizializzazione datepicker

$(function () {
	
	$("#datepickerTool1").mask("99/99/9999");
	$("#datepickerTool1").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper1').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerTool1');
    
	});

$(function () {
	
	$("#datepickerTool3").mask("99/99/9999");
	$("#datepickerTool3").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper3').modal('hide');
    }
    });
   appendDatePickerIcon('datepickerTool3');
    
	});
</script>

<h2>Situazione ordini</h2>

<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">ricerca per deposito titoli</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_stato_ordini_numero.php&liv0=3&liv1=1&liv2=0&liv3=0&responsive=y">ricerca per numero d'ordine</a></li>
												
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<div id="cercaSel">
		<section>
			<div class="row">
				<div class="col-xs-12"><p>Puoi <strong>verificare</strong> gli <strong>ordini inseriti</strong>, visualizzarne i <strong>dettagli</strong>, conoscerne lo stato e, ove possibile, <strong>revocarli</strong> se non ancora eseguiti.</p>
				</div>
			</div>	
			<div class="tithelp">
			<h4>Ricerca ordini</h4>
			<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#helpRicercaOrdine"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
			<br class="clear">
			</div>
			

			<form class="formGenerico borderFormRounded output" role="form" id="form02">
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Deposito*</label>
							<select class="form-control">
								<option>129/32423434 Rossi Mario</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">							
							<div class="radio inline">
		       					<label class="control-label textWrapperIn">
		         					<input type="radio" name="a" id="">
		         					<span></span>
		          				</label>	
		          				<span class="text txthelp"><strong><span data-toggle="tooltip" data-title="Indicare l'intervallo temporale all'interno del quale effettuare la ricerca: &egrave; possibile visualizzare solo gli ordini a scadenza, quindi validi pi&ugrave; giorni.
Per visualizzare gli ordini inseriti nella giornata &egrave; sufficiente la sola selezione del deposito.">Periodo dal al</span></strong></span>
		        			</div>	
							<div class="row">
								
								<div class="col-sm-6">
									<div class="form-inline">
									  <div class="form-group marginBottomNone">
										  <div class="input-group">
										     <div class="input-group-addon first">Dal</div>
										     <input type="text" id="datepickerTool1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
										  </div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-inline">
									 <div class="form-group marginBottomNone">
										  <div class="input-group">
										     <div class="input-group-addon first">Al</div>
										     <input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
										  </div>
										</div>
									</div> 
								</div>  
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="radio inline">
		       					 <label class="control-label textWrapper">
		         					 <input type="radio" name="a" id="">
		          					  <span class="text">Periodo ultimi 30 giorni</span>
		        				</label>
     						</div>
							<select class="form-control">
								<option>1 giorni</option>
								<option>2 giorni</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Mercato*</label>
							<select class="form-control">
								<option>Tutti</option>
								<option>Inserito</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Tipo operazione*</label>
							<select class="form-control">
								<option>Tutti</option>
								<option>Inserito</option>
								<option>Lorem ipsum</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label">Titolo</label>
							<div class="editable-input">
								<input type="text" name="titolo" value="" class="form-control clear-x" autocomplete="off" placeholder="(Desc, codice ISIN, codice Banca, codice RADIOCOR)"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label txthelp" data-toggle="tooltip" data-title="ORDINI A SCADENZA E REVOCABILI<br>Ordini a scadenza: questo filtro premette di visualizzare solamente gli ordini a scadenza (validi pi&ugrave; giorni).<br><br>
							Ordini revocabili: questo filtro premette di visualizzare solamente gli ordini revocabili, il cui stato permette le operazioni di 'revoca ordine'.">Tipo ordini</label>					
							<div class="row">
								<div class="col-sm-6">
									<div class="checkbox inline">
										<label class="textWrapper">
						 					  <input type="checkbox" name="" id="check1">
						  					  <span class="text">a scadenza</span>
										</label>
									</div>
								</div>	
								<div class="col-sm-6">
									<div class="checkbox inline">
										<label class="textWrapper">
						 					  <input type="checkbox" name="" id="check1">
						  					  <span class="text">revoca</span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
				      <div class="col-xs-6">
				        <div class="btn-align-left">
				         <p class="note">* i campi contrassegnati da un asterisco sono obbligatori.</p>
				        </div>
				      </div>
				      <div class="col-xs-6">
				        <div class="btn-align-right">
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaSel').hide();$('#cercaRisp').show();">cerca</a>
				        </div>
				      </div>
				    </div>
				</div>
			</form>
		</section>
		</div>

		<div id="cercaRisp" style="display:none">
		<section>
			<div class="row">
				<div class="col-xs-12"><p>Per gli ordini in cui compare l'icona revoca ordine &egrave; possibile effettuare la revoca mediante l'icona stessa: l'ordine non sar&agrave; annullato effettivamente finch&eacute; il mercato non comunicher&agrave; l'avvenuta revoca</p>
				</div>
			</div>	

			<form class="formGenerico borderFormRounded output" role="form" id="form02">
				 <!--caso con selettore rapporto -->
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Deposito</label>			
							<span class="output">129/131713/0</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Intestatario</label>			
							<span class="output">Lorem ipsum</span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label-output">Periodo dal / al</label>			
							<span class="output">01/01/2016 al 06/09/2016</span>	
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Periodo ultimi 30 giorni</label>			
							<span class="output">1 giorni</span>							
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Mercato</label>
							<span class="output">Tutti</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Tipo operazione</label>
							<span class="output">Tutti</span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Titolo</label>
							<span class="output">Tutti</span>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label class="control-label-output">Tipo ordini</label>
							<span class="output">revoca</span>
						</div>
					</div>
				</div>				
			</form>
			
			<div class="row">
				<div class="col-xs-12">
					<p class="note flRight noFloatMobile">
						<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
						<!--esempio di loading -->
						<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
					</p>
				</div>
			</div>
			<h4>Risultati della ricerca</h4>
			<table cellspacing="0" cellpadding="0" border="0" data-sortable="true" data-sort-order="desc" data-sort-name="Data" data-toggle="table" class="sortableTable" data-pagination="true" data-page-size="10">
		    <thead>
		        <tr>
		            <th class="left" data-field="Data" data-sortable="true" data-sorter="fixDate"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Data<br>N. ordine</th>
		            <th data-field="Titolo" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Titolo</th>
		            <th data-field="Operazione" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Oper.</th>
		            <th data-field="Stato" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Stato</th>
		            <th data-field="Prezzo_ins" data-sortable="false">Prezzo ins.</th>
		            <th data-field="Q.ta_inserita" data-sortable="false">Q.t&agrave; inserita<br>Q.t&agrave; eseguita</th>
		            <th data-field="Funzioni1" data-sortable="false"></th>
					<th data-field="Funzioni2" data-sortable="false"></th>
					 <th data-field="Funzioni3" data-sortable="false"></th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr class="dispari">
		            <td class="left">15/01/2016<br>&WEB 16 21440 0</td>
		            <td class="left">Btp 11/16 15/9 4,75%</td>
		            <td class="left">Vendita</td>
		            <td class="left">ET</td>
		            <td class="right">0,00</td>
		            <td class="right">4.000,00<br>4.000,00</td>
		            <td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-2x icon-zoom_piu_filled"></i></a></td>
					<td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-compra_vendi"></i></a></td>
		            <td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-chiudi_table"></i></a></td>
		        </tr>
		        <tr class="pari">
		            <td class="left">15/01/2016<br>&WEB 16 21440 0</td>
		            <td class="left">Btp 11/16 15/9 4,75%</td>
		            <td class="left">Vendita</td>
		            <td class="left">ET</td>
		            <td class="right">0,00</td>
		            <td class="right">4.000,00<br>4.000,00</td>
		            <td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-2x icon-zoom_piu_filled"></i></a></td>
					<td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-compra_vendi"></i></a></td>
		            <td><a href="#1" class="no-underline btn-icon" title=""><i class="icon icon-chiudi_table"></i></a></td>
		        </tr>
		    </tbody>  
		    </table>  
			<p class="note">* Per visualizzare la descrizione dello stato passa con il mouse sulla relativa sigla o leggi la <span class="txthelp" data-toggle="modal" data-target="#legenda">legenda</span></p>
			



			<div class="form-group">
					<div class="row">				      
				      <div class="col-xs-12">
				        <div class="btn-align-right">
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaSel').show();$('#cercaRisp').hide();">nuova ricerca</a> 
				          <a type="button" class="btn btn-primary" href="javascript:;" onclick="$('#cercaSel').show();$('#cercaRisp').hide();">modifica ricerca</a>
				        </div>
				      </div>
				    </div>
				</div>
		</section>
		</div>
	</div>
</div>
<!--HELP ricerca ordini -->
<div class="modal fade" id="helpRicercaOrdine" tabindex="-1" role="dialog" aria-labelledby="helpRicercaOrdine">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="helpRicercaOrdine">Esito ricerca</h2> 
            </div>
        	<div class="modal-body">
        		<p>Di seguito i possibili stati di un ordine:</p>
        		<ul>
					<li><strong>inserito</strong>: l'ordine &egrave; stato inserito correttamente e raccolto dalla Banca per il successivo invio al mercato dove cercare una controparte per essere eseguito;</li>
        			<li><strong>revocato</strong>: l'ordine &egrave; stato revocato dall'utente prima che potesse trovare una controparte sul mercato;</li>
        			<li><strong>eseguito</strong>: l'ordine ha trovato una controparte e il mercato ha comunicato l'avvenuta esecuzione;</li>
        			<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in</li>
        		</ul>
        		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
        	</div>
        </div>
    </div>
 </div>
 <!--OVERLAYER SEPA -->
<div class="modal fade" id="legenda" tabindex="-1" role="dialog" aria-labelledby="legenda">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="legenda">Legenda</h2> </div>
            	<div class="modal-body">
            		<ul>
            			<li><strong>ANN:</strong> Annullato</li>
						<li><strong>ODA:</strong> Ordine da autorizzare</li>
						<li><strong>ODC:</strong> Ordine da confermare</li>
						<li><strong>EP:</strong> Eseguito parziale</li>
						<li><strong>ET:</strong> Eseguito totale</li>
						<li><strong>IT:</strong> Ineseguito totale</li>
						<li><strong>IP:</strong> Ineseguito parziale</li>
						<li><strong>INS:</strong> Inserito</li>
						<li><strong>INV:</strong> Inviato</li>
						<li><strong>OC:</strong> Ordini di operazioni chiuse</li>
						<li><strong>RAC:</strong> Raccolto</li>
						<li><strong>REVI:</strong> Revoca inserita</li>
						<li><strong>REVR:</strong> Revoca raccolta</li>
						<li><strong>REVP:</strong> Revoca parziale</li>
						<li><strong>REV:</strong> Revocato</li>
						<li><strong>RI:</strong> Rifiutato</li>
						<li><strong>STO:</strong> Stornato</li>
            		</ul>
            	</div>
        </div>
    </div>
</duv>


<?php }?>


