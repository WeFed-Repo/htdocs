<!-- INIZIALIZZAZIONI DEGLI SPINNER-->
<script type="text/javascript">
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


<h2>Trading base</h2>
<section>
	<div class="tithelp">
		<h4>Seleziona il rapporto</h4>
		<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#inserimentoOrdine"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		<br class="clear">
	</div>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
		<div class="form-group">
			<div class="row">
				<div class="col-xs-6 requiredField">
					<label class="control-label">Rapporto</label>
					<select class="form-control">
						<option>141/139925/0 C/C 00141 - 0000020730 - EUR </option>
					</select>
				</div>
				<div class="col-sm-6">
					<label class="control-label-output">Disponibilit&agrave; attuale: </label>
					<span class="output">1.989,85</span>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div class="row">
			<div class="col-sm-8">
				<div class="tithelp">
					<h4 class="lineHeightBig">Dati ordine</h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
					<div class="flRight">
						<a href="#" class="no-underline btn-icon" title="Book"><i class="icon icon-2x icon-book"></i></a>
						<a href="#" class="no-underline btn-icon" title="Monitor"><i class="icon icon-2x icon-test"></i></a>
						<a href="#" class="no-underline btn-icon hidden-lg" onclick="showModalTitolo()" title="dettagli titolo"><i class="icon icon-zoom_piu_filled"></i></a>
						
					</div>
			</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
				
				<form class="formGenerico" role="form" id="form01">
					<div class="borderFormRounded">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="radio inline">
										 <label class="textWrapper">
											 <input type="radio" name="" id="">
											  <span class="text">Acquisto</span>
										</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="radio inline">
										  <label class="textWrapper">
											 <input type="radio" name="" id="">
											  <span class="text">Vendita</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label">Quantit&agrave;/Valore nominale</label>
									<div class="row">
										<div class="col-sm-6">
											<input id="" value="" type="text" name="" class="form-control clear-x">
										</div>
										<div class="col-sm-6">
											<select class="form-control">
												<option value="noValue">nessuna condizione</option><option value="TON">tutto o niente (TON)</option><option value="EOC">esegui e cancella (EOC)</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label">Prezzo</label>
									<div class="row">
										<div class="col-sm-7">
											<select class="form-control">
												<option>limite</option>
												<option>Al meglio</option>
												<option>Al meglio/Asta</option>
											</select>
										</div>
										<div class="col-sm-5">
											<div class="form-inline spinner">
												<div class="input-group">
													<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_less"></i></a></div>
													<input maxlength="" id="prezzo1" value="" type="text" name="prezzo1" class="form-control">
													<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_more"></i></a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-7">
									<label class="control-label">Momento di esecuzione</label>
									<select class="form-control">
										<option>-Attribuito in automatico-</option>
										<option>Apertura - Continua - Asta di Chiusura</option>
										<option>lorem ipsum dolor</option>
									</select>
								</div>
								<div class="col-sm-5">
									<label class="control-label">Validit&agrave; fino a</label>
									<select class="form-control">
										<option>odierna</option>
										<option>12/11/2016</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<h4>Stop Order</h4>
					<div class="borderFormRounded">
						<label class="control-label">Condizione ultimo prezzo - Prezzo soglia</label>
						<div class="row">
						<div class="col-sm-5">
								<div class="form-inline spinner">
									<div class="input-group">
										<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_less"></i></a></div>
										<input maxlength="" id="prezzo1" value="" type="text" name="prezzo1" class="form-control">
										<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-spinner_more"></i></a></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</form>
		</div>
		<div class="col-xs-12 col-sm-4">
			
			<div id="tableTitWrapper" class="hidden-xs">
				<table cellspacing="0" cellpadding="0" id="tableSchedaModal">
					<tbody><tr>
						<td width="50%">Titolo</td>
						<td width="50%"><a href="">Fiat</a></td>
					</tr>
					<tr>
						<td>Mercato</td>
						<td><span>Azionario Telematico</span></td>
					</tr>
					<tr>
						<td>Prezzo riferimento</td>
						<td><span>0,00   EUR  del 01.01.1901</span></td>
					</tr>
					<tr>
						<td>Lotto minimo</td>
						<td><span>-</span></td>
					</tr>
					
				</tbody></table>
			</div>
		</div>
	</div>

<div class="form-group btnWrapper">
    <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
    <div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_bonifico_step2.php&amp;liv0=1&amp;liv1=1&amp;liv2=0&amp;liv3=0&amp;responsive=y">prosegui</a>
    </div>
    <div class="clear"></div>
 </div>
 <p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
 </section>
 <section>
 	<div class="testoIcona emphasis">
		<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
		<div class="leftTesto">
			<p><strong>Avvertenze:</strong> Gli ordini inseriti nell'ultimo minuto di ogni fase di negoziazione (&quot;preasta&quot; o &quot;continua&quot;) sono raccolti e trasmessi al mercato nella prima fase utile compatibile con le caratteristiche dell'ordine.
			Verificare pertanto il momento di esecuzione indicato nel riepilogo ordine.</p>		
		</div>	
	</div>
 </section>
<!-- OVERLAYER inserimento ordini -->
<div class="modal fade" id="inserimentoOrdine" tabindex="-1" role="dialog" aria-labelledby="inserimentoOrdiniModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="inserimentoOrdiniModal">Inserimento ordini</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
								<p>Nella voce <strong>&quot;rapporto&quot; </strong> &egrave; indicato l'elenco dei depositi e i conti correnti collegati.<br>
									&Egrave; necessario selezionare il deposito sul quale effettuare l'operazione, tenendo presente che in caso di compravendita di titoli azionari nominativi e di deposito intestato a pi&ugrave; persone, &egrave; necessario selezionare il sottodeposito relativo al soggetto al quale si intende intestare i titoli azionari. 
								<p>
								<h4>Tempistiche di regolamento</h4>
								<table cellpadding="0" cellspacing="0" border="0" data-toggle="table">
									<thead>
										<tr>
											<th>Mercato/Strumento</th>
											<th>Data operazione</th>
											<th>Data valuta (regolamento)</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Italia</td>
											<td>T</td>
											<td>T+3</td>
										</tr>
										<tr>
											<td>Italia MTA International</td>
											<td>T</td>
											<td>T+3 (T+2 per i titoli tedeschi)</td>
										</tr>
										<tr>
											<td>Italia (MOT, Euromot, TLX)</td>
											<td>T</td>
											<td>T+3 (T+2 per i BOT)</td>
										</tr>
										<tr>
											<td>Euronext(Francia, Olanda)</td>
											<td>T</td>
											<td>T+3</td>
										</tr>
										<tr>
											<td>Germania</td>
											<td>T</td>
											<td>T+2</td>
										</tr>
										<tr>
											<td>Nasdaq</td>
											<td>T</td>
											<td>T+3</td>
										</tr>
										<tr>
											<td>Nyse</td>
											<td>T</td>
											<td>T+3</td>
										</tr>
										<tr>
											<td>Obbligazioni OTC</td>
											<td>T</td>
											<td>T+3</td>
										</tr>
									</tbody>
								</table>
								<p>Per le operazioni in valuta diversa da Euro il cambio applicato verr&agrave; negoziato due giorni prima della data valuta.<br>
								Per esempio per un ordine eseguito sul mercato Nasdaq il cambio applicato sar&agrave; quello del giorno successivo data operazione. </p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>