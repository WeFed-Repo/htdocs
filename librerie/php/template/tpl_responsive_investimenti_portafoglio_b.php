<?php if ($bank == "bpm") { ?>
<section>
	<h2>Situazione in portafoglio</h2>
</section>
<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label-output">Deposito titoli</label>
					<select class="form-control">
						<option>37/123213213 Rossi Paola</option>
					</select>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_investimenti_portafoglio.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#">titoli</a></li>
			<li class="on"><a href="#">fondi e sicav</a></li>
			<li><a href="#">totale portafoglio</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<div class="tithelp">
			<h4>Dettaglio portafoglio titoli</h4>
			<div class="flRight"><a href="#1" class="no-underline btn-icon" data-target="#helpPortafoglio" data-toggle="modal"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		</div>
		<table cellspacing="0" cellpadding="0" border="0" id="tb-portafoglio-bpm2" data-sortable="true" data-sort-order="desc" data-sort-name="fondoSic" data-toggle="table" class="sortableTable">
			<thead>
				 <tr>
		            <th class="center" data-field="icocv" data-sortable="false"></th>
		            <th class="left" data-field="fondoSic" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Fondi Sicav</th>
		            <th class="left" data-field="divisa" data-sortable="true"><span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>Divisa</th>
		            <th class="right" data-field="nQuot" data-sortable="false">Numero quot</th>
		    		<th class="right" data-field="prezzoCarico" data-sortable="false">Prezzo di carico</th>
		    		<th class="right" data-field="ctvCarico" data-sortable="false">Ctv di carico</th>
		    		<th class="right" data-field="prezzoUltimo" data-sortable="false">Prezzo ultimo</th>
		    		<th class="right" data-field="ctvAttuale" data-sortable="false">Ctv attuale</th>
		    		<th class="right" data-field="plusMin" data-sortable="false">Plus/Minus Assol. %</th>
		    		<th class="center" data-field="icodett" data-sortable="false"></th>
		    		<th class="center" data-field="icona"></th>
		    </thead>
		    <tbody>
		     	<tr class="dispari">
		     		<td><a class="no-underline btn-icon"><i class="icon icon-small-compra_vendi"></i><i class="icon icon-big-compra_vendi"></i></a></td>
		     		<td><a href="#">Anima Emergenti A EUR</a></td>
		     		<td>OBBL</td>
		     		<td>25.000,00</td>
		     		<td>99,4577</td>
		     		<td>24.864,43</td>
		     		<td>96,276<br>12/08/2016</td>
		     		<td>7.214,34</td>
		     		<td class="nega right">-1.064,02<br>-13,49%</td>
		     		<td><a class="no-underline btn-icon" href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_dettaglio_portafoglio.php&liv0=4&liv1=0&liv2=0&liv3=0&responsive=y#"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a></td>
		     		<td>	
		     			<div class="linkTooltip" data-toggle="modal"><a title="scegli l'operazione da effettuare" id="link1" class="linkVai no-underline btn-icon" onclick="multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\'test link\')', '']);"><i class="icon icon-2x icon-ico_azioni02A"></i></a></div>
					</td>
		     	</tr>
		      </tbody>
		     <tfoot class="totali">
		     		<td colspan="5"><strong>Totale</strong></td>
		     		<td class="right">83.445,48</td>
		     		<td class="right"></td>
		     		<td>44.153,86</td>
		     		<td class="right nega">-3.029,52<br>-3,63%	</td>
		     		<td class="bgWhite brdWhite" colspan="2"></td>
		     </tfoot>
		</table>
		<div class="form-group">
		    <div class="row">
		      <div class="col-xs-12">
		        <div class="btn-align-right">
		          <a type="button" class="btn btn-primary">situazione PAC</a>
		          <a type="button" class="btn btn-primary">esporta in excel</a>
		          <a type="button" class="btn btn-primary">stampa</a>
		        </div>
		      </div>
		    </div>
		</div>
		<ul>
			<li>Per i titoli in una divisa diversa dall'Euro, il <strong>prezzo di carico</strong> e il <strong>prezzo di chiusura</strong> sono espressi nella <strong>rispettiva valuta</strong>, mentre il <strong>controvalore di carico</strong> e quello <strong>attuale</strong> sono espressi in <strong>Euro.</strong></li>
			<li><strong>Il prezzo medio di carico</strong> e la <strong>plus minus</strong> sono dati finanziari non validi ai fini fiscali per il calcolo del <strong>capital gain</strong>, perch&egrave; contengono per esempio i dividendi per le azioni e il rateo mantello per i titoli obbligazionari.</li>
			<li>Per c<strong>onoscere la posizione fiscale</strong> aggiornata e il dettaglio delle singole operazioni <strong>rivolgiti</strong> alla tua <strong>agenzia.</strong></li>
			<li>Il prezzo fiscale, utilizzato per calcolare plus e minus, &grave; riportato nel dettaglio del titolo presente in portafoglio. Per accedere al dettaglio, clicca sull'icona <a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled "></i></a>  presente nella tabella.</li>
			<li>(#) Attenzione: per questo titolo non sono disponibili tutte le informazioni.</li>
		</ul>
	</div>
</div>
</section>

<!-- modal help portafoglio BPM-->
<div class="modal fade" id="helpPortafoglio" tabindex="-1" role="dialog" aria-labelledby="helpPortafoglio">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="helpPortafoglio">Dettaglio portafoglio titoli</h2>
			</div>
			<div class="modal-body">
				<p>
					A questo punto &egrave; riportato l'elenco dei titoli, di cui di seguito ti indichiamo il dettaglio dei contenuti. Ricorda che hai a disposizione tre tipi di visualizzazione di mappa di dettaglio deposito: la prima mostra i dati dei titoli; la seconda mostra i dati dei fondi/sicav e la terza mostra il totale del portafoglio.
				</p>
				<ul>
				 	<li><strong>Deposito:</strong> &egrave; il numero di deposito nel quale sono depositati i titoli posseduti.</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				 	<li><strong>Lorem ipsum:</strong> &egrave; lorem ipsum dolor sit</li>
				</ul>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti consente di visualizzare una mappa analitica contenente informazioni dettagliate sul titolo cliccando sulla relativa lente di ingrandimento.</p>		
					<hr>
					</div>
				</div>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-test flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti segnala le posizioni aperte, quelle per cui hai delle movimentazioni in corso (eseguiti odierni).</p>		
					<hr>
					</div>
				</div>
				<div class="testoIcona">
					<a class="no-underline btn-icon"><i class="icon icon-2x icon-test flLeft"></i></a>
					<div class="leftTesto">
						<p>Questo simbolo ti consente di accedere direttamente alla mappa di inserimento dell'ordine C/V e di effettuare operazioni compravendita. </p>		
					<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel">Anima Emergenti A EUR</h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="compra" href="link1.htm"><span>Compra</span></a></li>
							<li class="linkOff"><span title="compra">Compra</span></li>
							<hr>
							<li class="linkOn"><a title="vendi" href="link1.htm"><span>Vendi</span></a></li>
							<li class="linkOff"><span title="vendi">Vendi</span></li>
							<hr>
							<li class="linkOn"><a title="Switch" href="link1.htm"><span>Switch</span></a></li>
							<li class="linkOff"><span title="Switch">Switch</span></li>
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>

<?php }