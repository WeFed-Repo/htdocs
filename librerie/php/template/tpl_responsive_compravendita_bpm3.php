<h2>Trading base</h2>
<p>Per inserire un ordine di compravendita su un titolo clicca sull'apposita icona. <br>
Clicca sulla descrizione del titolo per visualizzare la scheda informativa.</p>
<section>
	<div class="tithelp">
		<h4>Mercato: lorem ipsum</h4>
		<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#esitoRicercaTitoli"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
	</div>
	<table>
		<thead>
			<tr>
				<th>Descrizione</th>
				<th>Cod. ISIN</th>
				<th>Cod. Banca</th>
				<th>Prezzo rif.<br>Data</th>
				<th>C/V</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="#">Fiat</a></td>
				<td>IT0001976403</td>
				<td>1976400</td>
				<td>0,00 &euro;</td>
				<td class="center" style=""><a class="no-underline btn-icon" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_compravendita_bpm4.php&responsive=y&liv0=3&liv1=1&liv2=0"><i class="icon icon-small-compra_vendi"></i><i class="icon icon-big-compra_vendi"></i></a></td>
			</tr>
			<tr>
				<td><a href="#">Lore mipsum</a></td>
				<td>IT0001976403</td>
				<td>1976400</td>
				<td>0,00 &euro;</td>
				<td class="center" style=""><a class="no-underline btn-icon"><i class="icon icon-small-compra_vendi"></i><i class="icon icon-big-compra_vendi"></i></a></td>
			</tr>
		</tbody>
	</table>
	<div class="form-group">
	    <div class="row">
	      <div class="col-xs-12">
	        <div class="btn-align-right">
	          <a type="button" class="btn btn-primary">nuova ricerca</a>
	         </div>
	      </div>
	    </div>
	</div>
</section>
<div class="modal fade" id="esitoRicercaTitoli" tabindex="-1" role="dialog" aria-labelledby="esitoRicerca">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				<h2 class="modal-title" id="esitoRicerca">Esito ricerca</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>In questa pagina sono mostrati i titoli risultanti dalla tua ricerca.</p>
							<p>Per ogni titolo vengono mostrati i seguenti dati:</p>
							<ul>
								<li>
									<strong>Descrizione</strong> del titolo. Cliccando
									sul nome del titolo, sono visualizzate le informazioni finanziarie del
									titolo stesso;
								</li>
								<li><strong>Codice ISIN: </strong>&egrave; un codice identificativo
									del titolo a livello internazionale. &Egrave; reperibile (per Obbligazioni e
									Titoli di Stato) sulla stampa specializzata. Tale codice &egrave; riportato anche
									su tutte le &quot;note informative&quot; - &quot;fissati bollati&quot;
									che vengono prodotte a seguito di una compravendita titoli.<br>
									<strong>N.B: </strong>Per il Nasdaq e per il
									Nyse trovi il <strong>codice USA </strong>che &egrave; un codice identificativo con cui
									vengono riconosciuti i titoli nei mercati americani.
								</li>
								<li><strong>Codice Banca</strong>: &egrave; il codice interno della
								Banca. Ti potr&agrave; essere utile in caso di richiesta di informazioni al <strong>Numero
								Verde &nbsp;<a href="tel:800.33.00.33">800.33.00.33</a></strong> o alla tua agenzia;</li>
								<li><strong>Il prezzo di riferimento</strong>: &egrave; pari alla
								media ponderata dell'ultimo 10% delle quantità negoziate, al netto delle
								quantit&agrave; scambiate mediante la funzione cross order. Il prezzo di riferimento
								di una seduta di Borsa &egrave; utilizzato come parametro di inizio delle negoziazioni
								della giornata successiva.</li>
								<li><strong>Data</strong>: &egrave; la data relativa al prezzo di riferimento del titolo. </li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>