<h2>Attivazione altri servizi</h2>

<script type="text/javascript">
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
</script>







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
<h3>Portafoglio Extra</h3>
<p>
	Su Webank puoi attivare online "Portafoglio Extra", il servizio di prestito titoli di Webank. Si tratta di un'operazione finanziaria con la quale presti i tuoi titoli azionari e obbligazionari italiani a Webank, ricevendone in cambio una remunerazione.
</p>
</section>


<!-- PDF  -->
<section>
	<h4>Per approfondire</h4>
	<div class="box-generico-border">
		<div class="box-generico-text">
			<ul class="documenti">
				<li>
					<a href="#" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>Guida ai derivati IDEM</span></a>
				</li>
				<li>
					<a href="#" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>Guida ai derivati esteri</span>
					</a>
				</li>
				<li>
					<a href="#" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>Guida alla marginazione sui derivati</span>
					</a>
				</li>
				<li>
					<a href="#" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>Guida alla marginazione overnight</span>
					</a>
				</li>
				<li>
					<a href="#" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>Guida alle opzioni su azioni</span>
					</a>
				</li>	
			</ul>
		</div>
	</div>
</section>
<!-- END PDF -->

<!-- Azioni/ETF/ETC -->
<section>
<h4>Azioni/ETF/ETC</h4>
<form class="formGenerico borderFormRounded output" role="form" id="form02">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
 				<label for="" class="control-label-output">Stato</label>
                <span class="output">Attivo dal 19/12/2010</span>
			</div>
			<div class="col-sm-6 no-label">
				<div class="btn-align-right">
					<a type="button" class="btn btn-default" data-toggle="modal" data-target="#ETF">Disattiva</a>
				</div>
			</div>
		</div>
	</div>
</form>
</section>
<!-- END Azioni/ETF/ETC -->

<!-- Obbligazioni -->
<section>
<h4>Obbligazioni</h4>
<form class="formGenerico borderFormRounded output" role="form" id="form02">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
 				<label for="" class="control-label-output">Stato</label>
                <span class="output">Disattivo</span>
			</div>
			<div class="col-sm-6 no-label">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="#!">
						Attiva
					</a>
				</div>
			</div>
		</div>
	</div>
</form>
</section>
<!-- END  Obbligazioni -->

<!-- Operatività in derivati -->
<section>
	<h3>Operativit&agrave; in derivati</h3>
<ul>
	<li>Ampia copertura sui mercati italiani ed esteri</li>
	<li>Futures e opzioni</li>
	<li>Operatività ordinaria e marginata</li>
</ul>	
<p>
 	Attivando anche una sola delle operatività sotto elencate, darai vita a un sottoconto tecnico 
 	("liquidit&agrave; derivati") che puoi alimentare dal tuo conto corrente.
</p>
<h4>Derivati Idem</h4>
<form class="formGenerico borderFormRounded output" role="form" id="form02">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
 				<label for="" class="control-label-output">Stato</label>
                <span class="output">Disattivo</span>
			</div>
			<div class="col-sm-6 no-label">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="#!">
						Attiva
					</a>
				</div>
			</div>
		</div>
	</div>
</form>
</section>
<!-- END Operatività in derivati -->


<!-- Short overnight -->
<section>
<h3>Short overnight</h3>
<p>
	Lo Short Selling è una strategia d'investimento ribassista: il tuo guadagno aumenta se il prezzo del titolo scende. Con lo Short Selling puoi vendere un titolo che non hai in portafoglio per acquistarlo in un secondo momento. Gli utili o le perdite dell'operazione sono date dalla differenza tra valore di vendita e valore di acquisto.
</p>
<form class="formGenerico borderFormRounded output" role="form" id="form02">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
 				<label for="" class="control-label-output">Stato</label>
                <span class="output">Disattivo</span>
			</div>
			<div class="col-sm-6 no-label">
				<div class="btn-align-right">
					<a type="button" class="btn btn-disabled" id="btnDisabled" disabled="disabled" href="#!">
						Attiva
					</a>
				</div>
			</div>
		</div>
	</div>
</form>	

<form class="formGenerico" role="form" id="form01">
    <div class="form-group">
		<div class="row">
        	<div class="col-sm-12 requiredField">
				<p>
					<a href="#!" target="_blank" onclick="enableInput('#richiesta1');" class="btn-icon">
						<i class="icon icon icon-file_pdf"></i>
						<span>
							Per attivare il servizio leggi l'informativa in PDF e prendi visione con il checkbox sottostante
						</span>
					</a> 
				</p>			
				<div class="checkbox">
					<label id="richiesta1" class="textWrapper disabledField richiesta-1">            
						<span class="hovfin" data-toggle="tooltip" data-title="Prima di procedere, occorre prendere visione dell'informativa aprendo il relativo pdf">
						</span>                              
						<input type="checkbox" name="subscribe" id="contratto2" disabled>    
						<span class="text">Ho letto il disclaimer e certifico la presa visione</span>
					</label> 
				</div>
            </div>
        </div>
    </div>
</form>

</section>
<!-- END Short overnight -->


<!-- LONG OVERNIGHT -->
<section>
	<h3>Long overnight</h3>
	<p>
		La negoziazione in modalità Long Overnight &egrave; un tipo di operativit&agrave; marginata, tramite la quale il cliente pu&ograve; acquistare titoli utilizzando soltanto una parte della liquidit&agrave; necessaria. <br/>
		Per <strong>richiedere</strong> l'abilitazione al servizio:
	</p>
	<ul>
		<li>
			scarica il modulo che trovi di seguito
		</li>
		<li>	
			stampalo e firmalo
		</li>
		<li>	
			invialo a: Webank c/o Banca Popolare di Milano, via Massaua 4, 20146 Milano
		</li>	
	</ul>
	<p>	
		Una email ti informer&agrave; quando potrai tornare su questa pagina per attivare il servizio.<br/>
		Ti ricordiamo che per poter operare in Long Overnight &egrave; necessario avere un <strong>alto grado di conoscenza</strong> dei mercati e degli strumenti finanziari.
	</p>	
	<ul class="documenti">
		<li>
			<a href="#" class="btn-icon">
				<i class="icon icon icon-file_pdf"></i>
				<span>Modulo di richiesta adesione Long Overnight</span>
			</a>
		</li>
	</ul>
</section>
<!-- END LONG OVERNIGHT -->











<!-- Gestione checkbox "Short overnight" -->
<script type="text/javascript">
$(document).ready(function () {


    $("input[name='subscribe']").on('click',function () {
        if ($("#contratto2").is(':checked')) {
  				$("#btnDisabled").removeAttr("disabled");
  				$("#btnDisabled").removeClass("btn-disabled");
            	$("#btnDisabled").addClass("btn-primary");
        } else {
        		$("#btnDisabled").addClass("btn-disabled");
            	$("#btnDisabled").removeClass("btn-primary");
            console.log("li");
        }
    });
});
</script>
<!-- END Gestione checkbox "Short overnight" -->









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







<!-- OVERLAYER ETF -->

<div class="modal fade" id="ETF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Servizi</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							
							<p>
								Sei sicuro di volere modificare le impostazioni inerenti i servizi attivi?
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END OVERLAYER ETF-->


<!-- Gestione overlayer bootstrap table-->
<script>
	$(function(){
       var $table1 = $('#table1');

       $table1.bootstrapTable();

            
        })
 
</script>