<h2>Profit & loss</h2>


<!--script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
	});

	function sceltaRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}

	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script-->


<!-- TEST -->
<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
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
<script>
	//inizializzazione dei tab-accordion
	//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
	//possono coesistere più gruppo di tab/accordion in pagina
	//parametri: id contenitore e incice tab che deve essere aperto al load

	$(function(){
		resizeTab('secondTab',0);
	});
</script>


<script>
//esempio di loading su oggetto -- è sufficiente applicare la classe loading all'oggetto per poi toglierla quando arrivano i dati
$(function(){
	$('#testLoading').click(function() {
		$('#tablePortafoglioWT').addClass('loading');
		setTimeout(function() {$('#tablePortafoglioWT').removeClass('loading')},1000)
	});
	
	$('#main').addClass('wrapper-large');
})
</script>
<!-- END TEST -->



<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaRapporto" class="selectRapp">
				<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al 09/01/2017</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
				<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi">
				<i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>
	</form>
</section>


<section>
	<h4>Ricerca ordini</h4>
	<form class="formGenerico borderFormRounded" role="form" id="form02">
		
		<script type="text/javascript">
			/* Esempio di inizializzazione dei datepicker */
			$(function(){

				/* datepicker 1 */
				$("#dp1").mask("99/99/9999");
				$("#dp1").datepicker({
				minDate: 1,
				showOtherMonths: true,
				showOn: "button",
				prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
				nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
				buttonImage: "/img/ret/pixel_trasp.gif",
				buttonImageOnly:true,
				beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			    onClose: function(){
			    	$('#datePickerWrapper').modal('hide');
			    }
			    })
			   appendDatePickerIcon('dp1');


			    /* datepicker 2 */
				$("#dp2").mask("99/99/9999");
				$("#dp2").datepicker({
				minDate: 1,
				showOtherMonths: true,
				showOn: "button",
				prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
				nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
				buttonImage: "/img/ret/pixel_trasp.gif",
				buttonImageOnly:true,
				beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
			    onClose: function(){
			    	$('#datePickerWrapper').modal('hide');
			    }
			    })
			   appendDatePickerIcon('dp2');

			});
		</script>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label" for="#dp1">Periodo: da</label>
					<div class="input-group">
					    <input type="text" id="dp1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
					    <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
	     		    </div>
				</div>
				<div class="col-sm-6">
					<label class="control-label" for="#dp2">Periodo: a</label>
					<div class="input-group">
					    <input type="text" id="dp2" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
					    <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
	     		    </div>	
				</div>
			</div>
		</div>
	
	

		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
					<label class="control-label">Visualizza</label>
					<div class="row">
						<div class="col-sm-6">
							<div class="radio inline">
								<label class="textWrapper">
 					  				<input type="radio" name="visualizza" value="tuttiMovimenti">
  					  				<span class="text">Tutti i movimenti</span>
								</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="radio inline">
								<label class="textWrapper">
 					  				<input type="radio" name="visualizza" value="titoliMovimenti" checked>
  					  				<span class="text">Solo i movimenti sul titolo:  </span>
								</label>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<input id="testo2" type="text" class="form-control clear-x">
								</div>
								<div class="col-sm-3">
									<div class="radio inline">
										<label class="textWrapper">
 					  						<input type="radio" name="b" id="nomeTitolo">
  					  						<span class="text">Nome</span>
										</label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="radio inline">
										<label class="textWrapper">
 					  						<input type="radio" name="b" id="simboloTitolo">
  					  						<span class="text">Simbolo</span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

	</form>
	
	<div class="form-group btnWrapper">
	  	<div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="" href="#">
	            Cerca
	        </a>	
	    </div>
	        <div class="clear"></div>
	</div>
</section>


<!-- Tabella -->
<section>
	<h4>Profitti/perdite realizzate</h4>
	<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="simbolo" data-sortable="true" class="left">
            	Simbolo
            </th>
            <th data-field="titolo"  data-sortable="true" class="left">
            	Titolo
            </th>
            <th data-field="quantita" data-sortable="true" class="right">
            	Quantit&agrave;
            </th>
            <th data-field="prezzoRealizzo" data-sortable="true" class="right">
            	Prezzo di realizzo
            </th>
            <th data-field="dataRealizzo" data-sortable="true" data-sorter="fixDate"  class="center">
            	Data di realizzo
            </th>
            <th data-field="profittiPerditeEur" data-sortable="true" class="right">
            	Profitti/perdite (EUR)
            </th>
            <th data-field="profittiPerditePercent" data-sortable="true" class="right">
            	Profitti/perdite (%)
            </th>
        </tr>
    </thead>
</table>
</section>

<!-- END TABELLA  -->



<!-- OVERLAYER -->


<div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Saldo</h2>
			</div>
			<div class="modal-body">
			<section>
				<p>
					In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.
				</p>

				<p>
					Rispetto al saldo contabile, il saldo disponibile tiene conto dell’eventuale <strong>fido</strong> e di <strong>operazioni</strong> di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong>
				</p>
			</section>

<section>
<h4>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h4>

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
				<ul>
					<li>
						operazioni presso agenzie territoriali
					</li>
					<li>
						operazioni tramite lo &quot;Sportello telefonico&quot;
					</li>
					<li>
						operazioni tramite sportelli Self Service BPM
					</li>
				</ul>" data-toggle="tooltip">altre operazioni</span>
			</td>
	       	<td class="bgkWhite center posi">&euro; 0,00</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr class="total merged">
	       	<td class="right">
	       		<span class="txthelp closeable" data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in <strong>impegni</strong> e <strong>preavvisi</strong>.<br>
	       		<ul>
					<li>
						Gli <strong>impegni</strong> sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.
					</li>
					<li>
						I <strong>preavvisi</strong> sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.
					</li>
				</ul>" data-toggle="tooltip"><strong>Totale impegni trading</strong></span>
			</td>
	       	<td class="bgkWhite center posi">&euro; 0,00</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       <td class="right text-small">
	       		liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti
	       	</td>
	       	<td class="bgkWhite center nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       	<td class="right text-small">
	       		liquidit&agrave; impegnata per margine di garanzia overnight
	       	</td>
	       	<td class="bgkWhite center nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       	<td class="right text-small">
	       		P&L potenziale impegnato per margine di garanzia overnight
	       	</td>
	       	<td class="bgkWhite center nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr class="merged">
	       	<td class="right text-small"><span class="txthelp closeable" data-title="Le operazioni &quot;marginate&quot; o in leva impegnano una disponibilit&agrave; inferiore rispetto a quanto occorrerebbe per impostare un’operazione marginata. Il controvalore degli impegni per operazioni marginate costituisce la liquidità bloccata per operazioni intraday." data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span>
	       	</td>
	       	<td class="bgkWhite center nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	       	<td class="bgkWhite"></td>
	    </tr>
	    <tr>
	       	<td class="right text-small">
	       		Compravendita/acquisto
	       	</td>
	       	<td class="bgkWhite right nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite right nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite right nega">
	       		&euro; 0,00
	       	</td>
	       	<td class="bgkWhite right nega">
	       		&euro; 0,00
	       	</td>
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
			<td class="left"><strong>Saldo disponibile</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
			<td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
		</tr>		
	</tbody>
</table>


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


<h4>
	Conto Derivati <strong>01068 - 0000006984 - EUR</strong><br/>
	Intestato a <strong>MARIANNA RANDOLFI</strong><br/>
	Profit & loss potenziale: <strong>0,00 €</strong><br/>

</h4>


<table cellspacing="0" cellpadding="0" border="0" id="">
	<tbody>
		<tr class="total">
			<td class="left fix3Col"><strong>Saldo contabile</strong></td>
			<td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
		</tr>
		<tr class="total">
			<td class="left fix3Col">
				<span class="txthelp closeable" data-toggle="tooltip" data-title="Per 'movimenti non contabilizzati' si intendono le operazioni in accredito (<strong>preavvisi</strong>) o in addebito (<strong>impegni</strong>) già effettuate sul conto, ma non ancora registrate.">
				<strong>Movimenti non contabilizzati</strong></span></td>
			<td class="center bgkWhite"><strong>&euro; 1.213,46</strong></td>
		</tr>
		<tr>
			<td>
				<strong>Margini iniziali</strong>
			</td>
			<td class="center">€ 2.987</td>
		</tr>
		<tr>	
			<td>Margine IDEM</td>
			<td></td>
		</tr>
		<tr>	
			<td>Margine EUREX</td>
			<td class="center">€ 2.100</td>
		</tr>
		<tr>	
			<td>Margine CME</td>
			<td class="center">€ 2000</td>
		</tr>
		<tr>	
			<td>Margine LIFFE</td>
			<td></td>
		</tr>
		<tr class="total">	
			<td><strong>Margini per operatività intradey</strong></td>
			<td class="center">€ 1000</td>
		</tr>
		<tr>	
			<td>Margine IDEM</td>
			<td></td>
		</tr>
		<tr>	
			<td>Margine EUREX</td>
			<td class="center">€ 765</td>
		</tr>
		<tr>	
			<td>Margine CME</td>
			<td></td>
		</tr>
		<tr>	
			<td>Margine LIFFE</td>
			<td></td>
		</tr>
		<tr class="total">	
			<td><strong>Saldo disponibile</strong></td>
			<td class="center"><strong>€ 901.253,66</strong></td>
		</tr>
		</tbody>
</table>


</section>
			</div>
		</div>
	</div>
</div>
<!-- END OVERLAYER-->







<!-- JS PER GESTIONE TABELLA -->

<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {

var valori = {  

   "dati":[  
      {  
         "simbolo":"OJM",
         "titolo":"OPENJOBMETIS AGENZIA PER IL LAVORO SPA",
         "quantita":"40",
         "prezzoRealizzo":"2,8",
         "dataRealizzo":"19\/01\/2016",
         "profittiPerditeEur":"-6",
         "profittiPerditePercent":"-21,01%",
      },
      {  
		 "simbolo":"TXT",
         "titolo":"TXT E-SOLUTIONS",
         "quantita":"400",
         "prezzoRealizzo":"2,00",
         "dataRealizzo":"29\/09\/2016",
         "profittiPerditeEur":"10",
         "profittiPerditePercent":"10,00%",
      },
      {  
         "simbolo":"BP",
         "titolo":"BANCO POPOLARE",
         "quantita":"9",
         "prezzoRealizzo":"2,29",
         "dataRealizzo":"29\/09\/2016",
         "profittiPerditeEur":"5",
         "profittiPerditePercent":"0,80%",
      }
   ]
}


 


    

    $tableOrdered.bootstrapTable({
    	data: valori.dati,
        sortable: true,
        sortName: "simbolo",
        sortOrder: "desc",



		rowStyle: function(row, index) {
			if(index % 2 == 0)
			{
				return {
							classes: 'dispari'
						}
			}
			else {
					return {
							classes: 'pari'
					}
				}
			},

	
	});
});

</script>


<!--END  JS GESTIONE TABELLA-->






<!-- JS PER GESTIONE RADIO -->

<script type="text/javascript">

$('input[name="visualizza"]').on('click' , function(){

    if( $(this).val() === "tuttiMovimenti"){
       $("#nomeTitolo").attr('disabled', 'disabled');
       $("#simboloTitolo").attr('disabled', 'disabled');
    }else{
    	$("#nomeTitolo").removeAttr("disabled");
       	$("#simboloTitolo").removeAttr("disabled");
    }

 
    });

</script>


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

