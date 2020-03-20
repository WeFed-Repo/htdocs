<h2>Inserimento ordine</h2>
<section>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<span class="output txthelp closeable" data-toggle="tooltip" data-original-title="" title="" data-title="
						MARIO ROSSI
					">1099/1032180/0</span>
					<div class="htmlTooltip inited">
						MARIO ROSSI
					</div>
				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp closeable" data-toggle="tooltip" data-original-title="" title="" data-title="
						08/07/2016: <strong><span id=&quot;tot_investibile_1&quot;>4.213,46</span>&amp;nbsp;€</strong>
						<br>11/07/2016: <strong><span id=&quot;tot_investibile_1a&quot;>4.213,46</span>&amp;nbsp;€</strong>
						<br>12/07/2016: <strong><span id=&quot;tot_investibile_2&quot;>4.213,46</span>&amp;nbsp;€</strong>
						<br>13/07/2016: <strong><span id=&quot;tot_investibile_3&quot;>4.213,46</span>&amp;nbsp;€</strong>
						<br>14/07/2016: <strong><span id=&quot;tot_investibile_4&quot;>4.213,46</span>&amp;nbsp;€</strong>
					">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip inited">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-1 no-label">
					<a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi" role="button" title="visualizza dettaglio saldo"><i class="icon icon-2x icon-zoom_piu_filled"></i></a>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label txthelp" data-toggle="tooltip" data-title="Puoi effettuare la ricerca inserendo alternativamente la descrizione, il simbolo o il 
					codice ISIN del titolo.<br><br>
					<strong>Codice Isin</strong>: &egrave; il codice alfanumerico internazionale identificativo del titolo. 
					&Egrave; formato da 12 caratteri, i primi due richiamano il Paese di emissione del titolo.<br><br>
					<strong>Descrizione</strong>: riporta per intero il nome dello strumento finanziario (es. BPM).<br><br>
					<strong>Simbolo</strong>: codice di identificazione di un titolo, il pi&ugrave; delle volte composto 
					dall'abbreviazione del nome della societ&agrave;. Per esempio, &quot;AMZN&quot; &egrave; il simbolo di AMAZON.">Titolo</label>
					<input type="text" name="titolo" class="form-control clear-x" placeholder=" ISIN, simbolo o descrizione" id="titolo">
				</div>
				<div class="col-xs-12 col-sm-3">
					<label class="control-label">Mercato</label>
					<select class="form-control">
						<optgroup label="Azioni"> 
<option value="MI|EQCON|B">MTA</option><option value="MI|EQCON|BI">BIT GEM</option><option value="TLX|ELX|B">EuroTLX</option><option value="FR|EQXET|B">XETRA</option><option value="EUR|EQPA|B">SBF</option><option value="LON|EQLSE|B">FTSE100</option><option value="MA|EQIBE|B">IBEX35</option><option value="EUR|EQAMS|B">AEX25</option><option value="EUR|EQBRU|B">BEL20</option><option value="EUR|EQPSI|B">PSI20</option><option value="NY|EQNY|B">NYSE</option><option value="NQ|EQNQ|B">NASDAQ</option>
					</optgroup>	
					<optgroup label="ETF-ETC">
<option value="MI|EQCON|E">ETFplus</option>
					</optgroup>	
					<optgroup label="CW E CERTIFICATES"> 
<option value="MI|CW|C">SEDEX</option><option value="TLX|ELX|C">EuroTLX</option>
					</optgroup>	
					<optgroup label="DERIVATI">
<option value="MI|DER|D">IDEM</option><option value="FR|EUREX|D">EUREX</option><option value="EUR|LIF|D">EURONEXT - LIFFE</option><option value="CME|CEQFU|D">CME</option><option value="CME|CBOFU|D">eCBOT</option><option value="CME|COMEX|D">COMEX</option><option value="CME|NYMEX|D">NYMEX</option>
					</optgroup>	
					<optgroup label="OBBLIGAZIONI" class="optiongroup">
<option value="MI|MRT|O">MOT - EuroMOT</option><option value="TLX|ELX|O">EuroTLX</option><option value="MI|HIMTF|O">Hi-MTF</option><option value="AK|AKIS|O">Akros IS</option><option class="optionbest" value="OTC|OBOTC|O">Best execution</option>
					</optgroup>	
					</select>
				</div>
				<div class="col-sm-1 col-xs-12 no-label">
					<div class="btn-align-left">
						<a  type="button" class="btn btn-primary" id="btnCerca">Cerca</a>
					</div>
				</div>
				<div class="col-sm-2 col-xs-12 no-label">
					<div class="btn-align-left">
						<a  href="#" id="">Ricerca evoluta</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div id="fieldsInsOrd">
		<div class="row">
			<div class="col-sm-8">
				<span class="flLeft note lineHeightNote" id="ultimoPrezzoInfo" style="display:none">Ora ultimo prezzo: 13:56:05</span>
				<div class="flRight">
					<a href="#" class="no-underline btn-icon" title="aggiorna"><i class="icon icon-2x icon-update"></i></a>
					<a href="#1" data-toggle="modal" data-target="#layerGuida" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
				</div>
			</div>
	
				<div class="col-xs-12 col-sm-4">
					<div class="flRight">
						<a href="#" class="no-underline btn-icon hidden-lg" onclick="showModalTitolo()"><i class="icon icon-zoom_piu_filled"></i></a>
						<a href="#" class="no-underline btn-icon" title="Book"><i class="icon icon-2x icon-book"></i></a>
						<a href="#" class="no-underline btn-icon" title="Scheda titolo"><i class="icon icon-2x icon-scheda_titolo"></i></a>
						<a href="#" class="no-underline btn-icon" title="Guida ai mercati"><i class="icon icon-2x icon-guida_mercati"></i></a>
					</div>
				</div>
		</div>
	<div class="row">
		<div class="col-sm-8">
			<table id="tableTit" style="display:none" data-toggle="table">
				<thead>
					<tr>
						<th>Ultimo prezzo</th>
						<th>Variazione %</th>
						<th>Volume denaro</th>
						<th>Denaro</th>
						<th>Lettera</th>
						<th>Volume lettera</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center"><a href="#" id="ultimoPrezzo">5,333</a></td>
						<td class="nega center">-4,44</td>
						<td class="center">36.070</td>
						<td class="center"><a href="#">5,333</a></td>
						<td class="center"><a href="#">5,333</a></td>
						<td class="center">100</td>
					</tr>
				</tbody>
			</table>
			<form class="formGenerico borderFormRounded" role="form">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label class="control-label">Quantit&agrave;</label>
							<input id="quantita1"  type="text" name="quantita1" class="form-control spinner">
			       	 		
						</div>
						<div class="col-sm-4 no-label">
							<select class="form-control"><option>Senza condizione</option></select>
						</div>
						<div class="col-sm-4">
							<label class="control-label">Fase</label>
							<select class="form-control"><option>Ape</option></select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							<label class="control-label">Prezzo</label>
							<div class="form-inline spinner">
			       	 			<div class="input-group">
									<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_less"></i ></a></div>
									<input maxlength="" id="prezzo1" value="" type="text" name="prezzo1" class="form-control">
			       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_more"></i ></a></div>
								</div>
	       	 				</div>

			       	 		
						</div>
						<div class="col-sm-4 no-label">
							<select class="form-control"><option>Eco/continua</option></select>
						</div>
						<div class="col-sm-4">
							<label class="control-label">Validit&agrave;</label>
							<select class="form-control"><option>a chiusura</option></select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12"><label class="control-label">Condizione: ultimo prezzo</label></div>
						<div class="row">
							<div class="col-xs-6 col-sm-4">
								<div class="form-inline spinner">
									<span class="condizione"><</span>
				       	 			<div class="input-group condizionato">
										<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_less"></i ></a></div>
										<input maxlength="" id="prezzo1" value="" type="text" name="prezzo1" class="form-control">
				       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_more"></i ></a></div>
									</div>
		       	 				</div>
							</div>
							<div class="col-xs-5 col-sm-4 label-condizionato">
								soglia inferiore
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-4">
								<div class="form-inline spinner">
									<span class="condizione">></span>
				       	 			<div class="input-group condizionato">
										<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_less"></i ></a></div>
										<input maxlength="" id="prezzo1" value="" type="text" name="prezzo1" class="form-control">
				       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_more"></i ></a></div>
									</div>
		       	 				</div>
							</div>
							<div class="col-xs-5 col-sm-4 label-condizionato">
								soglia superiore
							</div>
						</div>
					</div>
				</div>


				<div class="panel-group" id="accordionInsOrdini" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="stopOrder">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" href="#collapseIns1" aria-expanded="false" aria-controls="collapseIns1">
				          Stop order<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
				        </a>
				      </h4>
				    </div>
			        <div id="collapseIns1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stopOrder">
  						<div class="panel-body">
  						 	<div class="form-group">
								<div class="row">
									<div class="col-sm-8">
										<label class="control-label">Condizione</label>
										<select class="form-control"><option>lorem ipsum</option></select>
									</div>
									<div class="col-sm-4">
										<label class="control-label">Prezzo a soglia</label>
										<input id="prezzo2"  type="text" name="prezzo2" class="form-control spinner">
									</div>
								</div>
							</div>
  						</div>
  					</div>
				   </div>
				    <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="stopOrder2">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" href="#collapseIns2" aria-expanded="false" aria-controls="collapseIns1">
					          Stop order/Take profit<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
				        <div id="collapseIns2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stopOrder2">
	  						<div class="panel-body">
	  						 	<div class="form-group">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label">Stop loss</label>
											<input id="prezzo3"  type="text" name="prezzo3" class="form-control spinner">
											
										</div>
										<div class="col-sm-8">
											<label class="control-label">Scadenza</label>
											<select class="form-control"><option>lorem ipsum</option></select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-4">
											<label class="control-label">Take profit</label>
											<input id="prezzo4"  type="text" name="prezzo4" class="form-control spinner">
										</div>
										<div class="col-sm-8">
											<label class="control-label">Fase</label>
											<select class="form-control"><option>lorem ipsum</option></select>
										</div>
									</div>
								</div>
	  						</div>
	  					</div>
				   </div>
				</div>
				<div class="form-group">
					<h4>Operativit&agrave;</h4>
					<div class="row">
						<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="operativita" id="">
				          			<span class="text">Ordinaria</span>
				        		</label>
		     				</div>
		     			</div>
		     			<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="operativita" id="">
				          			<span class="text">Marginata intraday</span>
				        		</label>
		     				</div>
		     			</div>
		     			<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" name="operativita" id="">
				          			<span class="text">MArginata overnight</span>
				        		</label>
		     				</div>
		     			</div>
					</div>
				</div>
				<div class="form-group btnWrapper">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary">compra</a>
						<a type="button" class="btn btn-primary" id="">vendi</a>
					</div>
					<br class="clear">
				</div>
			</form>
		</div>
		<div class="col-sm-4">
			<div id="tableTitWrapper" class="hidden-xs">
				<table cellspacing="0" cellpadding="0" id="tableSchedaModal">
					<tr>
						<td width="50%">Descrizione</td>
						<td width="50%">-</td>
					</tr>
					<tr>
						<td>Descrizione</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Mercato</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Fase</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Prezzo di riferimento</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Quantit&agrave; acquistabile</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Max giornata</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Min giornata</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Volume scambiato</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>lotto minimo</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Divisa</td>
						<td><span>-</span></td>
					</tr>
					<tr>
						<td>Regolamento</td>
						<td><span>-</span></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	</div>
	<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
</section>
<section>
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p><strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Desideri le quotazioni in tempo reale sui mercati di tuo interesse? <a href="#">Vai alla relativa pagina di attivazione</a></p>		
		</div>	
	</div>
	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p><strong>NYSE Disclaimer:</strong> As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control.</p>		
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
<!--overlayer risultati -->
<div class="modal fade slide-right" id="risulatiTitoli" tabindex="-1" role="dialog" aria-labelledby="risulatiTitoli">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="risulatiTitoli">Risultati della ricerca</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<section>
								<table cellpadding="0" cellspacing="0" id="tableRicercaTitoli" class="formGenerico" >
									<thead>
										<tr>
											<th class="center" data-field="radio" data-formatter="setRadioRicerca"></th>
											<th data-field="descrizione" class="left">Descrizione</th>
											<th data-field="isin">Codice ISIN</th>
										</tr>
									</thead>
								</table>


								<div class="form-group btnWrapper">
								    <div class="btn-align-right">
								        <a type="button" class="btn btn-primary" id="" href="javascript:;"  onclick="unObscurateElement('#fieldsInsOrd');$('#ultimoPrezzoInfo,#tableTit').show()" data-dismiss="modal" role="button" title="Conferma ricerca">conferma</a>
								    </div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!--overlayer fiscalit&agrave; -->
<!--OVERLAYER GUIDA -->
<div class="modal fade" id="layerGuida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Guida</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <!-- accordion guida -->
                    	<div class="panel-group" id="accordionGuida" role="tablist" aria-multiselectable="true">
	  						<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="Introduzione">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordionGuida" href="#collapseIntroduzione" aria-expanded="true" aria-controls="collapseIntroduzione">
							         Introduzione<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseIntroduzione" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="Introduzione">
      								<div class="panel-body">
      									<p>La nostra guida ti aiuta a comprendere meglio i termini che vengono utilizzati durante l'inserimento degli ordini.<br>
										Scorri il menu a sinistra e scegli l'argomento che ti interessa approfondire.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="Quantita">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapseQuantita" aria-expanded="false" aria-controls="collapseQuantita">
							          Quantit&agrave;<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseQuantita" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Quantita">
      								<div class="panel-body">
      									<p> Quando inserisci un ordine, puoi digitare la quantit&agrave; di titoli o il controvalore nel caso di obbligazioni.</p>		
										
										<p><strong>Parametri di quantit&agrave;</strong></p>
										<p><strong>Tutto o Niente (TON):</strong> consente l'esecuzione dell'ordine solo per l'intero quantitativo e alle condizioni di prezzo indicate al momento dell'inserimento. Se la condizione non &egrave; accettata dal mercato, la proposta si cancella automaticamente.</p>
      									<p><strong>Esegui e Cancella (EEC):</strong> &egrave; un parametro che consente l'esecuzione dell'ordine, anche parziale, per le quantit&agrave; disponibili, e fa in modo che l'eventuale quantit&agrave; residua sia cancellata automaticamente.</p>
      									<p><strong>Senza condizioni:</strong> l'ordine viene inserito senza condizioni.</p>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="Prezzo">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapsePrezzo" aria-expanded="false" aria-controls="collapsePrezzo">
							          Prezzo<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapsePrezzo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Prezzo">
      								<div class="panel-body">
      									<p>Quando inserisci l'ordine, puoi digitare il prezzo al quale desideri che la tua proposta sia immessa sul mercato e scegliere tra i seguenti parametri.</p>		
										<p><strong>Al limite:</strong> per inserire un limite di prezzo al quale immettere l'ordine a mercato. L'ordine verr&agrave; eseguito soltanto al prezzo indicato e a un prezzo migliore.</p>
										<p><strong>Eco:</strong> la proposta viene inserita senza alcuna indicazione di prezzo. Il prezzo di esecuzione del contratto &egrave; il miglior prezzo di segno opposto e l'eventuale quantit&agrave; residua (non soddisfatta a tale prezzo) verrà scambiata ai successivi livelli del book fino a esaurimento delle quantit&agrave;. L'eventuale quantità residua sar&agrave; cancellata automaticamente dal mercato.</p>
      									<p><strong>Al meglio/Asta</strong> la proposta pu&ograve; essere inserita senza alcuna indicazione di prezzo, esclusivamente in fase d'asta. Il prezzo di esecuzione del contratto &egrave; il prezzo battuto (prezzo teorico d'asta). L'eventuale quantit&agrave; residua (non soddisfatta a tale prezzo) sarà trasformata in un ordine, valido per la negoziazione continua, con prezzo limite pari al prezzo teorico d'asta</p>
      								
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="validita">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapsevalidita" aria-expanded="false" aria-controls="validita">
							         Validit&agrave; dell'ordine<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapsevalidita" class="panel-collapse collapse" role="tabpanel" aria-labelledby="validita">
      								<div class="panel-body">
      									<p>Puoi inserire ordini con validit&agrave; per la giornata borsistica corrente (a chiusura) o validi fino a un massimo di 30 giorni (solari, sabati e domeniche inclusi).</p>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="Operativita">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapseOperativita" aria-expanded="false" aria-controls="collapseOperativita">
							         Operativit&agrave;<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseOperativita" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Operativita">
      								<div class="panel-body">
      									<p><strong>Operativit&agrave;</strong> ordinaria: consente di effettuare operazioni di acquisto e di vendita aventi ad oggetto i diversi strumenti finanziari. La differenza tra il prezzo di vendita e il prezzo di acquisto determina l'utile (profit) o perdita (loss).</p>
      									<p><strong>Operativit&agrave; marginata intraday:</strong> per sfruttare anche le minime oscillazioni di mercato grazie all'effetto leva. Il cliente può operare impegnando solo una parte del controvalore che sarebbe richiesto per effettuare l'operazione.</p>
      									<p><strong>Operatività marginata overnight:</strong>per effettuare operazioni sia di acquisto (long overnight) che di vendita (short overnight), sfruttando un effetto leva variabile per titolo e mantenendo la posizione aperta per più giorni.</p>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="lossProfit">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapselossProfit" aria-expanded="false" aria-controls="collapselossProfit">
							        Stop loss - Take profit<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapselossProfit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lossProfit">
      								<div class="panel-body">
      									<p>
      										Gli Stop loss/Take profit sono un particolare <strong>sottoinsieme degli ordini condizionati</strong>.
											Nel caso in cui tu intenda limitare le perdite su un titolo (<strong>Stop loss</strong>) o monetizzare un guadagno (<strong>Take profit</strong>) o entrambe le cose, potrai impostare due soglie di prezzo, una inferiore al prezzo di mercato e l'altra superiore. Una volta raggiunta la soglia, il sistema mander&agrave; al mercato un ordine di chiusura al meglio o con il parametro di prezzo &quot;esegui comunque&quot;.

      									</p>
      									
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="stopOrder">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapsestopOrder" aria-expanded="false" aria-controls="stopOrder">
							        Stop order<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapsestopOrder" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stopOrder">
      								<div class="panel-body">
      									<p>
      										Gli Stop order sono ordini legati a una <strong>condizione di prezzo</strong> e sono gestiti direttamente da Borsa Italiana. Una volta inseriti sono inviati <strong>immediatamente</strong> al mercato. Solo al verificarsi della condizione impostata sono visualizzati nel book di negoziazione. L'ordine immesso al verificarsi della condizione può essere impostato con un limite di prezzo (<strong>Stop Limit Order</strong>) o con il parametro Eco. La condizione dello Stop order è monitorata solamente durante la <strong>fase di negoziazione continua</strong>. Puoi inserire gli Stop order solo sui mercati MTA, MTA International e MTA-THA.
										</p>
      									
      								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- INIZIALIZZAZIONI DEGLI SPINNER-->
<script type="text/javascript">
	//questo è solo un esempio, usare algoritmo as is in produzione
	$(function () {
		setSpinner(
			{
			  idInput :'#quantita1',
			  min: 0
			}
		);		
		/*setSpinner(
			{
			    idInput :'#prezzo1,#prezzo2,#prezzo3,#prezzo4',
			    step: 0.005, 
			    min: 0,
			    culture:'it',
			    numberFormat: "n4" 
			}
		);*/
		
		//funzione di settaggio elementi disabilitato
		obscurateElement('#fieldsInsOrd');
})

//definisco la scheda titolo come overlayer su mobile 
		function  showModalTitolo() {
			var overlayerSchedaTit = getOverlay({
                id: "layerTitolo",
                body: $('#tableTitWrapper').html()
         	});
         	overlayerSchedaTit.css("z-index", getNextHighestZindex());
        	overlayerSchedaTit.modal('show');
        	resizeModalDevice(overlayerSchedaTit);
        	
		
		$(window).resize(function() {
            if(!isSmallDevice) {
            	overlayerSchedaTit.modal('hide');
            }
        })
}
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
<!--EMULAZIONE ERRORE RICERCA E SUCCESSIVA ABILITAZIONE CAMPI -->
<script>
$('#btnCerca').click(function(index){
	$(function () {
			var errors = [],
				titolo = $("#titolo");
			if (titolo.val() === '') {
				errors.push({ field: titolo, text: "Inserisci almeno un carattere nel campo titolo" });
			}
			setHasErrors(errors, "#form01");
			if (errors.length) {
				$(errors[0].field).trigger('focus');
			}
			else{
				$('#risulatiTitoli').modal('show');
				$('#tableRicercaTitoli').bootstrapTable({data: dataRicerca.vetTitoli});
			}
			return (!errors.length);
		})
				
})

function setRadioRicerca(value, row, index, options){
	return '<div class="radio"><label><input id="radioRicercaTitolo' + index + '"' +'type="radio" name="radioRicercaTitolo" value="' + index +'"><span></span></label></div>'
}

//emulazione json ricerca titoli
//var dataRicerca = {"isEsito":"true","codEsito":"100","vetTitoli":[{"descrizione":"BANCA CARIGE ORD","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"CRG","borsa":"MI","stock_code":"961543","isin":"IT0005108763","mercato":"EQCON"},{"descrizione":"BANCA CARIGE RSP","desc_mercato":"MTA INSTR. NO MO","codice_mnemonico":"CRGR","borsa":"MI","stock_code":"961544","isin":"IT0005108771","mercato":"EQCON"},{"descrizione":"BANCA FINNAT","desc_mercato":"STAR","codice_mnemonico":"BFE","borsa":"MI","stock_code":"127","isin":"IT0000088853","mercato":"EQCON"},{"descrizione":"BANCA GENERALI","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BGN","borsa":"MI","stock_code":"122721","isin":"IT0001031084","mercato":"EQCON"},{"descrizione":"BANCA IFIS","desc_mercato":"STAR","codice_mnemonico":"IF","borsa":"MI","stock_code":"38796","isin":"IT0003188064","mercato":"EQCON"},{"descrizione":"BANCA INTERMOBILIARE","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BIM","borsa":"MI","stock_code":"199","isin":"IT0000074077","mercato":"EQCON"},{"descrizione":"BANCA MPS","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BMPS","borsa":"MI","stock_code":"961858","isin":"IT0005092165","mercato":"EQCON"},{"descrizione":"BANCA POP EMILIA ROMAGNA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BPE","borsa":"MI","stock_code":"132","isin":"IT0000066123","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE DI MILANO","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"PMI","borsa":"MI","stock_code":"20","isin":"IT0000064482","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE SONDRIO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BPSO","borsa":"MI","stock_code":"30","isin":"IT0000784196","mercato":"EQCON"},{"descrizione":"BANCA PROFILO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"PRO","borsa":"MI","stock_code":"2138","isin":"IT0001073045","mercato":"EQCON"},{"descrizione":"BANCA SISTEMA SPA","desc_mercato":"STAR","codice_mnemonico":"BST","borsa":"MI","stock_code":"973658","isin":"IT0003173629","mercato":"EQCON"},{"descrizione":"MEDIOBANCA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"MB","borsa":"MI","stock_code":"131","isin":"IT0000062957","mercato":"EQCON"},{"descrizione":"UBI BANCA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"UBI","borsa":"MI","stock_code":"66834","isin":"IT0003487029","mercato":"EQCON"}],"numValues":"14","msgEsito":" "}
var dataRicerca = {"isEsito":"true","codEsito":"100","vetTitoli":[{"descrizione":"BANCA POP EMILIA ROMAGNA","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BPE","borsa":"MI","stock_code":"132","isin":"IT0000066123","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE DI MILANO","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"PMI","borsa":"MI","stock_code":"20","isin":"IT0000064482","mercato":"EQCON"},{"descrizione":"BANCA POPOLARE SONDRIO","desc_mercato":"NO FTMIB SHARES","codice_mnemonico":"BPSO","borsa":"MI","stock_code":"30","isin":"IT0000784196","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"853192","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086795","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2015 NO TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086801","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2015 SI TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086800","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2016 NO TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086794","isin":"IT0005002883","mercato":"EQCON"},{"descrizione":"BANCO POPOLARE BPM 2016 SI TAX","desc_mercato":"AZIONI FTMIB","codice_mnemonico":"BP","borsa":"MI","stock_code":"1086798","isin":"IT0005002883","mercato":"EQCON"}],"numValues":"9","msgEsito":" "}
</script>

