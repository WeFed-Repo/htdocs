<script type="text/javascript">
	$(function(){
		// Esempio controlli inserimento in Watchlist
		// si tratta di mere emulazioni da riadattare in fase di sviluppo

		$("*[data-modal-action='addToWatchlist']").click(function(){
			// "Resetta" la modale
			$("#addToWlSelectForm").removeClass("loading").show();
			$("#addToWlSelectConfirm").hide();

			// Apre la modale
			$("#addToWl").modal("show");
		});

	

		// aggiunge a Watchlist - EMULAZIONE
		$("#addToWlBtn").click(function(){
			// Inserire in questa funzione l'eventuale chiamata AJAX
			$("#addToWlSelectForm").addClass("loading");
			setTimeout(function(){
				$("#addToWlSelectForm").hide();
				$("#addToWlSelectConfirm").show();
			},500);
		
		});
});
</script>


<!-- Overlay Watchlist -->
<div class="modal fade in" id="addToWl" tabindex="-1" role="dialog" aria-labelledby="addToWlLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" >
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
				<h2 class="modal-title" id="addToWlLabel">Aggiungi a Watchlist</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
 
					<!-- Crea nuova Watchlist -->
					<div id="addToWlSelectForm" style="display: block;">
						<div class="row">
							<div class="col-xs-12">
								<p>Seleziona la Watchlist nella quale vuoi aggiungere il fondo</p>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label">Seleziona watchlist</label>
											<select name="" class="form-control">
							                    <option selected="" value="standard">Watchlist standard</option>
							                    <option value="Mia watchlist">Mia watchlist</option>
							                </select>
										</div>
									</div>
								</div>
								<div class="form-group btnWrapper">
					                <div class="btn-align-left">
					                    <a type="button" class="btn btn-default btn-annulla" data-dismiss="modal">Annulla</a>
					                </div>
					                <div class="btn-align-right">
					                    <a type="button" class="btn btn-primary" id="addToWlBtn">Aggiungi</a>
					                </div>
					                <br class="clear">
					            </div>
							</div>
						</div>
					</div>

					<div id="addToWlSelectConfirm" style="display: none;">
						<!-- Esempio di esito (qui e' cablato: andrebbe gestito con una chiamata in AJAX) -->
						<section class="boxesitoWrap">
							<div class="boxesito positivo">
								<div class="text">
									<div class="row">
										<div class="col-xs-12">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
											et quas molestias excepturi <strong>sint occaecati cupiditate non provident</strong>, similiq</p>
										</div>
									</div>
								</div>
							</div>
						</section>

					</div>

					<!-- Fine crea nuova Watchlist -->

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Fine overlay Watchlist -->


<!-- SCHEDA FONDO -->
<div class="row">
	<div class="col-sm-6 col-xs-12">
		<p class="note flLeft noFloatMobile">
			<a href="javascript:history.back(1);">Torna indietro</a>
		</p>
	</div>
	<div class="col-sm-6 col-xs-12">
		<p class="note flRight noFloatMobile">
			<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
		</p>
	</div>
</div>

<!-- Pannello gestione fondo -->
<div class="formGenerico borderFormRounded fundPanel fundPanelImg">
	<!-- Blocco descrittivo -->
	<img src="/fe/img/lgsoc_allianz.png" class="imgSoc" />
	<div class="row">
		<div clas="col-xs-12">
			<div class="row">
				<div class="col-sm-8">
					<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit EUR</h4>
				</div>
				<div class="col-sm-4">
					<div class="icon-console">
						<a class="no-underline btn-icon"><i class="icon icon-campana_fill icon-2x"></i></a>
						<a class="no-underline btn-icon"><i class="icon icon-stella_fill icon-2x" data-modal-action="addToWatchlist"></i></a>
					</div>
				</div>
			</div>	
			<!-- Rating -->
			
			<div class="row">
				<div class="col-xs-12">
					<div class="control-label  txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem voluptatibus atque nihil omnis deserunt molestiae cupiditate aperiam ipsum iste ea numquam fuga impedit itaque, adipisci iusto, optio rerum facere voluptas.">Rating FIDA</div>
					<div class="rating large"><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i></div><div class="rating small rate5"><div class="bg"></div><span>5</span></div>
				</div>
			</div>
			
			<!-- Blocco operativo -->
			<div class="row">
				<!-- Operativita' -->
				<div class="col-xs-12">
					<div class="btn-console">
		                <a type="button" class="btn btn-primary" href="#">compra</a>
		                <a type="button" class="btn btn-primary" href="#">vendi</a>
		                <a type="button" class="btn btn-primary" ref="#">switch</a>
		            </div>
				</div>
			</div>
			<!-- Fine blocco operativo -->

		</div>
	</div>
</div>
	<!-- Fine blocco descrittivo -->
<!-- Fine pannello gestione fondo -->
<!-- TABS -->
<script type="text/javascript">
$(function(){
	resizeTab('sfTab',0);
});
</script>



<div class="navContSecondLev" id="sfTab">
	
	<div class=" outerTab">
		<ul class="tabWrapper tabsmall hidden-xs">
			<li class="on"><a href="#accSintesi" data-int-id="sintesi">Sintesi</a></li>
			<li class=""><a href="#accGrafico" data-int-id="grafico">Grafico e rendimenti</a></li>
			<li class=""><a href="#accRating" data-int-id="rating">Rating e rischio</a></li>
			<li class=""><a href="#accComposizione" data-int-id="composizione">Composizione</a></li>
			<li class=""><a href="#accGestione" data-int-id="societa">Societ&agrave; di gestione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	
	<form class="formGenerico">
	
	<div class="panel-group panel-fill" id="accFondo" role="tablist" aria-multiselectable="true">
		<!-- Tab sintesi -->
		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="accSintesi">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-int-id="sintesi" data-parent="#accFondo" href="#collapseSintesi" aria-expanded="false" aria-controls="collapseSintesi" class="collapsed">Sintesi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>

			
			<div id="collapseSintesi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1b">
				<div class="panel-body">
					<div class="tab-wrap">
						<section>
						<!-- SINTESI -->
						<div class="row">
							<div class="col-sm-6">
								<!-- ESEMPIO DI UN GRAFICO -->
									
									<div id="grafico_sintesi" class="grafico"></div>
									<script type="text/javascript">

									   	function formatDateAsyyyyMM(inputDate) {
											var sepPos = inputDate.indexOf(' ');
											if (sepPos > -1) {
												inputDate = inputDate.substring(0, sepPos);
											}
											var dateValues = inputDate.split('-');
											var year = parseFloat(dateValues[0]);
											var month = parseFloat(dateValues[1]) - 1;
											var day = parseFloat(dateValues[2]);
											return new Date(year, month, day);		
										}
										
										var nome_indice = 'Ben.Az. Europa (Mercati Svil.) Large & Mid Cap';
										dati_sintesi = [];
										var index = 0;
										var valuesAreValid = false;
										var indexesAreValid = false;
										
										
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-08-11 00:00:00.0');
											sintesi.valore = '18.14';
											sintesi.indice = '18.1400';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.14';
											//sintesi.indicedollari = '18.1400';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-08-21 00:00:00.0');
											sintesi.valore = '18.42';
											sintesi.indice = '18.1659';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.42';
											//sintesi.indicedollari = '18.1659';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-08-29 00:00:00.0');
											sintesi.valore = '18.11';
											sintesi.indice = '17.9712';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.11';
											//sintesi.indicedollari = '17.9712';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-09-06 00:00:00.0');
											sintesi.valore = '18.36';
											sintesi.indice = '18.2351';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.36';
											//sintesi.indicedollari = '18.2351';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-09-13 00:00:00.0');
											sintesi.valore = '18.64';
											sintesi.indice = '18.6004';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.64';
											//sintesi.indicedollari = '18.6004';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-09-19 00:00:00.0');
											sintesi.valore = '18.69';
											sintesi.indice = '18.6327';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.69';
											//sintesi.indicedollari = '18.6327';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-09-26 00:00:00.0');
											sintesi.valore = '18.83';
											sintesi.indice = '18.7493';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '18.83';
											//sintesi.indicedollari = '18.7493';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-10-04 00:00:00.0');
											sintesi.valore = '19.14';
											sintesi.indice = '19.0523';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.14';
											//sintesi.indicedollari = '19.0523';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-10-12 00:00:00.0');
											sintesi.valore = '19.2';
											sintesi.indice = '19.0597';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.2';
											//sintesi.indicedollari = '19.0597';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-10-18 00:00:00.0');
											sintesi.valore = '19.34';
											sintesi.indice = '19.1269';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.34';
											//sintesi.indicedollari = '19.1269';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-10-24 00:00:00.0');
											sintesi.valore = '19.23';
											sintesi.indice = '19.0321';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.23';
											//sintesi.indicedollari = '19.0321';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-10-31 00:00:00.0');
											sintesi.valore = '19.54';
											sintesi.indice = '19.3157';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.54';
											//sintesi.indicedollari = '19.3157';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-11-06 00:00:00.0');
											sintesi.valore = '19.73';
											sintesi.indice = '19.3888';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.73';
											//sintesi.indicedollari = '19.3888';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-11-14 00:00:00.0');
											sintesi.valore = '19.16';
											sintesi.indice = '18.7835';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.16';
											//sintesi.indicedollari = '18.7835';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-11-21 00:00:00.0');
											sintesi.valore = '19.28';
											sintesi.indice = '18.9859';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.28';
											//sintesi.indicedollari = '18.9859';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-11-28 00:00:00.0');
											sintesi.valore = '19.13';
											sintesi.indice = '18.9414';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.13';
											//sintesi.indicedollari = '18.9414';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-12-04 00:00:00.0');
											sintesi.valore = '19.15';
											sintesi.indice = '18.9565';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.15';
											//sintesi.indicedollari = '18.9565';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-12-08 00:00:00.0');
											sintesi.valore = '19.18';
											sintesi.indice = '19.0628';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.18';
											//sintesi.indicedollari = '19.0628';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-12-15 00:00:00.0');
											sintesi.valore = '19.11';
											sintesi.indice = '19.0226';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.11';
											//sintesi.indicedollari = '19.0226';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
												var sintesi = {};
											sintesi.chiave = formatDateAsyyyyMM('2017-12-27 00:00:00.0');
											sintesi.valore = '19.29';
											sintesi.indice = '19.1316';
											sintesi.valuta = 'EUR';
											if(false){
											sintesi.valoredollari = '19.29';
											//sintesi.indicedollari = '19.1316';
											}
											
											if (sintesi.valore != 0.0) {
												valuesAreValid = true;
											}
											if (sintesi.indice != 0.0) {
												indexesAreValid = true;
											}
											dati_sintesi.push(sintesi);																
										
										if (!valuesAreValid || !indexesAreValid) {
											dati_sintesi = [];
										}

									</script>
									<!-- FINE ESEMPIO DI UN GRAFICO -->
							</div>
							<div class="col-sm-6">
								
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label">Tipologia strumento </label>
											<span class="output">Loremipsum</span>
										</div>
										<div class="col-sm-6">
											<label class="control-label">ISIN</label>
											<span class="output">123456789012</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-12">
											<label class="control-label">Categoria Assogestioni </label>
											<span class="output">Lorem ipsum dolor</span>
										</div>
									</div>
								</div>
									<div class="form-group">
									<div class="row">
										<div class="col-xs-12">
											<label class="control-label">Categoria Brating </label>
											<span class="output">Ritorno Assoluto (Media Volatilita')</span>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-xs-12">
								<hr>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label">Benchmark ufficiale </label>
									<span class="output">40% MSCI AC World 30% The BofA ML EURO HIGH YIELD 30% The BofA ML Sterling Corporate </span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Data di lancio	</label>
									<span class="output">12/11/2014</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Patrimonio del fondo (mln)</label>
									<span class="output">48,589</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, doloremque.">Valuta di riferimento</label>
									<span class="output">EUR</span>
								</div>
								
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, doloremque.">Valuta base</label>
									<span class="output">EUR</span>
								</div>

								<div class="col-sm-4">
									<label class="control-label txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, doloremque.">Valuta coperta</label>
									<span class="output">si	</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Distribuzione dei proventi</label>
									<span class="output">si</span>
								</div>

							</div>
						</div>

						<div class="form-group">
							<div class="row">		
								<div class="col-sm-4">
									<label class="control-label">Periodicita dividendo</label>
									<span class="output">Trimestrale</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label">Fiscalita (% white list)</label>
									<span class="output">10,024</span>
								</div>
							</div>
						</div>
					</section>
						
					<!-- FINE BLOCCO DI TESTA (SINTESI) -->

					<!-- Separatore -->
					<div class="row">
						<div class="col-xs-12">
							<hr>
						</div>
					</div>
					<!-- Fine separatore -->
					
					<section>
					<!-- Valori e asset allocation -->
					<div class="row">
						<div class="col-sm-6">
							<h4>Valore quota/NAV e rendimento</h4>
								<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label class="control-label">Val quota/NAV al 18/12/2017</label>
										<span class="output big-output">10,41 EUR</span>
									</div>
								</div>	
								</div>
							<H4>Rendimenti</H4>


							 <div class="headerContainerNoBootS">
							    <div class="tableContainerNoBootS">
									<table cellspacing="0" cellpadding="0" border="0"  data-toggle="table">
										<thead>
											<tr>
												<th></th>
												<th>YTD</th>
												<th>1A</th>
												<th>3A</th>
												<th>5A</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Fondo</td>
												<td>7,397</td>
												<td>7,332</td>
												<td>18,872</td>
												<td>-</td>
											</tr>
											<tr>
												<td>Categoria</td>
												<td>7,397</td>
												<td>7,332</td>
												<td>18,872</td>
												<td>-</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>

						<div class="col-sm-6">
							<h4 class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae blanditiis laborum esse aspernatur, vel incidunt! Quam perspiciatis, ea veniam eveniet, quasi nobis minus quidem voluptatem nam facere error ipsum, est?">Asset allocation %</h4>
							<div id="grafico_assetallocation" class="grafico"></div>
							<script type="text/javascript">
							// Esempio dati
							
							var data_assetallocation = [
							{
							    chiave: "Azioni",
							    valore: 95.71,
							    color: '#8E0C0C'
							},
							{
							   chiave: "Obbligazioni",
							   valore: 0,
							   color: '#003262'
							},
							{
							    chiave: "Liquidita'",
							    valore: 4.29,
							    color: '#ABB9BF'
							},
							{
							    chiave: "Altro",
							    valore: 0,
							    color: '#333333'
							}
							];
							

							</script>
							
							
						</div>
					</div>
					<!-- Fine valori e asset allocation -->
					</section>

					<!-- Separatore -->
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					<!-- Fine separatore -->
					<section>
					<div class="row">
						<div class="col-xs-12">
							<h4>Politica di gestione</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo distinctio eos cupiditate, similique qui provident magnam dolor vero accusamus error temporibus quaerat aut ut deleniti nostrum voluptatem sint rem, ipsam soluta est accusantium, quo itaque sequi. Deleniti consequatur eos, non molestiae sit distinctio, perferendis magni, inventore ab deserunt aperiam nesciunt.</p>
						</div>
					</div>
					</section>
					<!-- Separatore -->
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					<!-- Fine separatore -->
					
					<section>
					<div class="row">
						<div class="col-xs-12">
							<h3 >Minimi di investimento</h3>
							<div class="row">	
								<div class="col-xs-12">	

									<div class="headerContainerNoBootS">
									    <div class="tableContainerNoBootS">
											<table data-toggle="table">
												<tr>
													<th colspan="2" class="left">Investimento in unica soluzione (PIC)</th>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td ><strong>Lorem ipsum lorem</strong></td>
													<td class="right">9.999,99</td>
												</tr>
											</table>
										</div>
									</div>	

									<div class="headerContainerNoBootS">
									    <div class="tableContainerNoBootS">
											<table data-toggle="table">
												<tr>
													<th colspan="2" class="left">Piano di accumulo (PAC)</th>
												</tr>
												<tr>
													<td><strong><span class="txthelp" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-toggle="tooltip">Versamento minimo iniziale</span></strong></td>
													<td class="right">9.999,99</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>		
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>		
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">Dolor sit amet</td>
												</tr>

											</table>
										</div>
									</div>		
								</div>

							</div>
							</section>

							<!-- Costi e commissioni -->
							<section>
							<h3>Costi  e commissioni</h3>

							<div class="row">


								<div class="col-sm-6 col-xs-12">
									<div class="headerContainerNoBootS">
									    <div class="tableContainerNoBootS">
											<table data-toggle="table">
												<tr>
													<th colspan="2">Commissioni</th>
												</tr>
												<tr>
													<td><strong><span class="txthelp" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-toggle="tooltip">Commissione di gestione annuale</span></strong></td>
													<td class="right">9.999,99</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>		
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>
											</table>
										</div>
									</div>		
								</div>


								<div class="col-sm-6 col-xs-12">
									<div class="headerContainerNoBootS">
									    <div class="tableContainerNoBootS">
											<table data-toggle="table">
												<tr>
													<th colspan="2">Commissioni</th>
												</tr>
												<tr>
													<td><strong><span class="txthelp" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-toggle="tooltip">Commissione di gestione annuale</span></strong></td>
													<td class="right">9.999,99</td>
												</tr>
												<tr>
													<td><strong>Commissione di ingresso max da prospetto</strong></td>
													<td>XX,X%</td>
												</tr>
												<tr>
													<td>Commissione di ingresso WeBank</td>
													<td><strong>0,00%</strong></td>
												</tr>	
												<tr>
													<td class="">Commissione di performance</td>
													<td class=""><strong>0,00%</strong></td>
												</tr>
												<tr>
													<td><strong>Lorem ipsum lorem</strong></td>
													<td class="right">XX,X%</td>
												</tr>	
												<tr>
													<td class="">Commissione di uscita</td>
													<td class=""><strong>0,00%</strong></td>
												</tr>
												<tr>
													<td colspan="2"><strong><span class="txthelp" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-toggle="tooltip">Leggi l'informativa sul calcolo Commissioni PAC</span></strong></td>
												</tr>
											</table>
										</div>
									</div>		
							

								</div>
							</div>

								<div class="row">
									<div class="col-xs-12">
										<div class="headerContainerNoBootS">
										    <div class="tableContainerNoBootS">
												<table data-toggle="table">
													<tr>
														<th colspan="2">Diritti fissi</th>
													</tr>
													<tr>
														<td><strong><span class="txthelp" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit" data-toggle="tooltip">Lorem ipsum dolor sit amet, consectetur adipisicing</span></strong></td>
														<td class="right">9.999,99</td>
													</tr>
													<tr>
														<td><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit</strong></td>
														<td>XX,X%</td>
													</tr>
													<tr>
														<td><strong>Lorem dolor sit amet<strong></td>
														<td>0,00%</strong></td>
													</tr>	
														<tr>
														<td><strong>Lorem dolor sit amet<strong></td>
														<td>0,00%</strong></td>
													</tr>	
													<tr>
														<td><strong>Lorem dolor sit amet<strong></td>
														<td>0,00%</strong></td>
													</tr>	
														<tr>
														<td><strong>Lorem dolor sit amet<strong></td>
														<td>0,00%</strong></td>
													</tr>	
														<tr>
														<td><strong>Lorem dolor sit amet<strong></td>
														<td>0,00%</strong></td>
													</tr>	
												</table>
											</div>
										</div>		
								

									</div>
								</div>

								</section>

					
					<!-- Tempistiche con accordion -->
					<section>
					<h3>Tempistiche</h3>



					<div class="panel-group" id="accordionTempistiche" role="tablist" aria-multiselectable="true" >
					  
					  <!-- Tempistiche acquisto -->
					  <div class="panel panel-default panel-accordion">
					    <div class="panel-heading" role="tab" id="headingTempi1">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapseTempi1" aria-expanded="false" aria-controls="collapseTempi1" class="collapsed">
					         Acquisto<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTempi1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTempi1">
					      <div class="panel-body panel-body-accordion">
					      	<div class="row">
					      		<div class="col-xs-12">
					      			<br class="clear">
					      			<div class="tempi orizzontale tempi6">
								<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>Oggi</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>data valuta</li>
											<li>calcolo valore quota/NAV</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+2 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+3 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+4 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+5 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+6 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
							</div>
					      		</div>
					      	</div>
					      	
					      </div>
					    </div>
					  </div>
					  <!-- Fine tempistiche acquisto -->


					   <!-- Tempistiche vendita -->
					  <div class="panel panel-default panel-accordion">
					    <div class="panel-heading" role="tab" id="headingTempi2">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapseTempi2" aria-expanded="false" aria-controls="collapseTempi2" class="collapsed">
					         Vendita<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTempi2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTempi2">
					      <div class="panel-body  panel-body-accordion">
					      		<div class="row">
					      		<div class="col-xs-12">
					      			<br class="clear">
					      	<div class="tempi orizzontale tempi6">
								<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>Oggi</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>data valuta</li>
											<li>calcolo valore quota/NAV</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+2 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+3 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+4 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+5 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
											<div class="tempo">
									<div class="milestone"><span class="dot"></span><span>+6 GG</span></div>
									<div class="contenuto">
										<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
										<ul>
											<li>Lorem ipsum</li>
											<li>Dolor sit amet consectetur</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					      </div>
					    </div>
					  </div>
					  <!-- Fine tempistiche vendita -->

					    <!-- Tempistiche switch -->
					  <div class="panel panel-default panel-accordion">
					    <div class="panel-heading" role="tab" id="headingTempi3">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#collapseTempi3" aria-expanded="false" aria-controls="collapseTempi3" class="collapsed">
					         Switch (cambio comparto)<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTempi3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTempi3">
					      <div class="panel-body panel-body-accordion">
					      		<div class="row">
					      			<div class="col-xs-12">
					      				<br class="clear">
							      	<div class="tempi orizzontale tempi6">
										<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>Oggi</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>data valuta</li>
													<li>calcolo valore quota/NAV</li>
												</ul>
											</div>
										</div>
													<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>+2 GG</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>Lorem ipsum</li>
													<li>Dolor sit amet consectetur</li>
												</ul>
											</div>
										</div>
													<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>+3 GG</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>Lorem ipsum</li>
													<li>Dolor sit amet consectetur</li>
												</ul>
											</div>
										</div>
													<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>+4 GG</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>Lorem ipsum</li>
													<li>Dolor sit amet consectetur</li>
												</ul>
											</div>
										</div>
													<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>+5 GG</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>Lorem ipsum</li>
													<li>Dolor sit amet consectetur</li>
												</ul>
											</div>
										</div>
													<div class="tempo">
											<div class="milestone"><span class="dot"></span><span>+6 GG</span></div>
											<div class="contenuto">
												<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
												<ul>
													<li>Lorem ipsum</li>
													<li>Dolor sit amet consectetur</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
					      </div>
					    </div>
					  </div>
					  <!-- Fine tempistiche switch -->

					</div>

					</section>
					



					<!-- Testo e note generiche -->

					<section>
					<ul>
						<li>Pellentesque felis mauris, laoreet sed ornare sed, posuere ut dui. Sed vitae risus posuere neque porttitor blandit. Mauris auctor, velit in vestibulum laoreet, nunc tellus bibendum felis, a porta mauris ipsum at mauris. Duis congue velit tortor. Aenean gravida dui eu mauris volutpat laoreet. Sed malesuada dapibus felis, quis vulputa</li>
						<li>Pellentesque felis mauris, laoreet sed ornare sed, posuere ut dui. Sed vitae risus posuere neque porttitor blandit. Mauris auctor, velit in vestibulum laoreet, nunc tellus bibendum felis, a porta mauris ipsum at mauris. Duis congue velit tortor. Aenean gravida dui eu mauris volutpat laoreet. Sed malesuada dapibus felis, quis vulputa</li>
					</ul>
					<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores laboriosam amet ipsum magnam, cum sunt veniam fugit aliquam quis, possimus excepturi nemo in error. Quaerat quisquam distinctio, numquam corporis porro, consectetur quasi laudantium ipsa explicabo nostrum mollitia modi delectus dolore autem deleniti ratione possimus ipsum. Dolor, harum obcaecati explicabo enim?</p>
					</section>

					<!-- Separatore -->
					<div class="row">
						<div class="col-xs-12"><hr></div>
					</div>
					<!-- Fine separatore -->

					<section>
					<h4>Note operative</h4>
					<p>	Carmignac Gestion: lo switch tra i Fondi di diritto francese (codice Isin che inizia con FR) non &egrave; consentito in quanto ogni Fondo &egrave; regolato da un prospetto informativo individuale.
						Sicav Carmignac Portfolio: lo switch tra i comparti della Sicav di dirittto lussemburghese (codice Isin che inizia con LU) &egrave; consentito.
					</p>
					</section>
					<!-- Fine testo e note generiche -->
					
				
					</div>
				</div>
			</div>
		</div>


		<!-- Fine tab sintesi -->

		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="accGrafico">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accFondo" href="#collapseGrafico" data-int-id="grafico"  aria-expanded="false" aria-controls="collapseGrafico" class="collapsed">Grafico e rendimenti<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapseGrafico" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
				<div class="panel-body">
					<div class="tab-wrap">
						
						<!-- GRAFICO E RENDIMENTI -->
						<section>
							<div class="row">
								<div class="col-xs-12">
									<!-- ESEMPIO DI UN GRAFICO -->
									<div id="grafico_fondo" class="grafico"></div>

									<script type="text/javascript">

										var serieYTD = {"serieYTD":[]};
										var serieFiveYear = {"serieFiveYear":[{"chiave":"2013-08-23 00:00:00","indice":120.0200,"valuta":"EUR","valore":120.02},{"chiave":"2013-09-18 00:00:00","indice":121.0745,"valuta":"EUR","valore":120.92},{"chiave":"2013-10-11 00:00:00","indice":121.5928,"valuta":"EUR","valore":121.7},{"chiave":"2013-11-05 00:00:00","indice":121.9920,"valuta":"EUR","valore":122.21},{"chiave":"2013-11-29 00:00:00","indice":122.0396,"valuta":"EUR","valore":122.22},{"chiave":"2013-12-24 00:00:00","indice":121.3247,"valuta":"EUR","valore":122.28},{"chiave":"2014-01-21 00:00:00","indice":122.4686,"valuta":"EUR","valore":123.18},{"chiave":"2014-02-13 00:00:00","indice":123.1954,"valuta":"EUR","valore":123.15},{"chiave":"2014-03-11 00:00:00","indice":123.2014,"valuta":"EUR","valore":123.88},{"chiave":"2014-04-03 00:00:00","indice":123.3085,"valuta":"EUR","valore":124.11},{"chiave":"2014-04-29 00:00:00","indice":124.2320,"valuta":"EUR","valore":124.78},{"chiave":"2014-05-22 00:00:00","indice":125.3758,"valuta":"EUR","valore":125.77},{"chiave":"2014-06-17 00:00:00","indice":125.1017,"valuta":"EUR","valore":126.02},{"chiave":"2014-07-11 00:00:00","indice":125.9656,"valuta":"EUR","valore":126.31},{"chiave":"2014-08-05 00:00:00","indice":126.0491,"valuta":"EUR","valore":125.9},{"chiave":"2014-08-28 00:00:00","indice":127.0559,"valuta":"EUR","valore":127.33},{"chiave":"2014-09-23 00:00:00","indice":126.1741,"valuta":"EUR","valore":126.84},{"chiave":"2014-10-16 00:00:00","indice":128.0328,"valuta":"EUR","valore":126.37},{"chiave":"2014-11-10 00:00:00","indice":127.2167,"valuta":"EUR","valore":127.05},{"chiave":"2014-12-04 00:00:00","indice":127.8840,"valuta":"EUR","valore":126.81},{"chiave":"2015-01-02 00:00:00","indice":128.5392,"valuta":"EUR","valore":126.73},{"chiave":"2015-01-28 00:00:00","indice":130.7019,"valuta":"EUR","valore":128.57},{"chiave":"2015-02-24 00:00:00","indice":129.7248,"valuta":"EUR","valore":129.09},{"chiave":"2015-03-20 00:00:00","indice":130.1955,"valuta":"EUR","valore":129.42},{"chiave":"2015-04-15 00:00:00","indice":130.8449,"valuta":"EUR","valore":130.59},{"chiave":"2015-05-11 00:00:00","indice":128.8491,"valuta":"EUR","valore":129.99},{"chiave":"2015-06-08 00:00:00","indice":128.1521,"valuta":"EUR","valore":129.24},{"chiave":"2015-07-01 00:00:00","indice":127.8660,"valuta":"EUR","valore":128.75},{"chiave":"2015-07-29 00:00:00","indice":128.6525,"valuta":"EUR","valore":127.21},{"chiave":"2015-08-24 00:00:00","indice":129.7427,"valuta":"EUR","valore":123.55},{"chiave":"2015-09-17 00:00:00","indice":129.0278,"valuta":"EUR","valore":124.83},{"chiave":"2015-10-14 00:00:00","indice":130.3325,"valuta":"EUR","valore":123.06},{"chiave":"2015-11-27 00:00:00","indice":129.1410,"valuta":"EUR","valore":121.9},{"chiave":"2015-12-28 00:00:00","indice":128.8967,"valuta":"EUR","valore":117.75},{"chiave":"2016-01-25 00:00:00","indice":129.7427,"valuta":"EUR","valore":113.92},{"chiave":"2016-02-18 00:00:00","indice":130.8926,"valuta":"EUR","valore":111.95},{"chiave":"2016-03-16 00:00:00","indice":131.0474,"valuta":"EUR","valore":116.86},{"chiave":"2016-04-12 00:00:00","indice":132.4118,"valuta":"EUR","valore":119.24},{"chiave":"2016-05-09 00:00:00","indice":132.9361,"valuta":"EUR","valore":121.88},{"chiave":"2016-06-06 00:00:00","indice":133.0850,"valuta":"EUR","valore":124.12},{"chiave":"2016-06-29 00:00:00","indice":134.6161,"valuta":"EUR","valore":124.1},{"chiave":"2016-07-25 00:00:00","indice":134.6817,"valuta":"EUR","valore":126.68},{"chiave":"2016-08-19 00:00:00","indice":134.8604,"valuta":"EUR","valore":127.81},{"chiave":"2016-09-16 00:00:00","indice":134.1156,"valuta":"EUR","valore":127.8},{"chiave":"2016-10-12 00:00:00","indice":133.8238,"valuta":"EUR","valore":129.45},{"chiave":"2016-11-10 00:00:00","indice":131.7505,"valuta":"EUR","valore":128.89},{"chiave":"2016-12-14 00:00:00","indice":129.2841,"valuta":"EUR","valore":130.75},{"chiave":"2017-01-24 00:00:00","indice":129.8858,"valuta":"EUR","valore":131.69},{"chiave":"2017-02-28 00:00:00","indice":130.7556,"valuta":"EUR","valore":133.06},{"chiave":"2017-04-03 00:00:00","indice":130.8460,"valuta":"EUR","valore":132.48},{"chiave":"2017-05-04 00:00:00","indice":130.9923,"valuta":"EUR","valore":133.12},{"chiave":"2017-06-07 00:00:00","indice":132.2804,"valuta":"EUR","valore":134.26},{"chiave":"2017-07-14 00:00:00","indice":131.7979,"valuta":"EUR","valore":134.23},{"chiave":"2017-08-16 00:00:00","indice":132.4733,"valuta":"EUR","valore":134.05},{"chiave":"2017-09-20 00:00:00","indice":132.2819,"valuta":"EUR","valore":135.25},{"chiave":"2017-10-24 00:00:00","indice":131.7869,"valuta":"EUR","valore":135.9},{"chiave":"2017-11-27 00:00:00","indice":132.1008,"valuta":"EUR","valore":135.18},{"chiave":"2017-12-28 00:00:00","indice":131.7570,"valuta":"EUR","valore":135.1}]};
										var serieThreeYear = {"serieThreeYear":[{"chiave":"2015-08-18 00:00:00","indice":125.9200,"valuta":"EUR","valore":125.92},{"chiave":"2015-09-09 00:00:00","indice":126.1004,"valuta":"EUR","valore":125.32},{"chiave":"2015-10-01 00:00:00","indice":126.6590,"valuta":"EUR","valore":121.38},{"chiave":"2015-11-09 00:00:00","indice":125.5302,"valuta":"EUR","valore":123.76},{"chiave":"2015-12-07 00:00:00","indice":126.2284,"valuta":"EUR","valore":120.93},{"chiave":"2015-12-31 00:00:00","indice":125.6814,"valuta":"EUR","valore":118.13},{"chiave":"2016-01-26 00:00:00","indice":126.8743,"valuta":"EUR","valore":113.95},{"chiave":"2016-02-17 00:00:00","indice":127.4911,"valuta":"EUR","valore":111.74},{"chiave":"2016-03-10 00:00:00","indice":127.7180,"valuta":"EUR","valore":116.3},{"chiave":"2016-04-04 00:00:00","indice":129.1960,"valuta":"EUR","valore":118.11},{"chiave":"2016-04-28 00:00:00","indice":129.3299,"valuta":"EUR","valore":122.78},{"chiave":"2016-05-19 00:00:00","indice":129.1553,"valuta":"EUR","valore":122.35},{"chiave":"2016-06-14 00:00:00","indice":130.5401,"valuta":"EUR","valore":123.99},{"chiave":"2016-07-06 00:00:00","indice":132.2508,"valuta":"EUR","valore":124.63},{"chiave":"2016-07-27 00:00:00","indice":131.8086,"valuta":"EUR","valore":126.46},{"chiave":"2016-08-19 00:00:00","indice":131.7155,"valuta":"EUR","valore":127.81},{"chiave":"2016-09-13 00:00:00","indice":130.9242,"valuta":"EUR","valore":127.87},{"chiave":"2016-10-06 00:00:00","indice":130.9300,"valuta":"EUR","valore":129.37},{"chiave":"2016-11-01 00:00:00","indice":130.4761,"valuta":"EUR","valore":129.29},{"chiave":"2016-11-29 00:00:00","indice":127.3748,"valuta":"EUR","valore":129.01},{"chiave":"2016-12-28 00:00:00","indice":126.4322,"valuta":"EUR","valore":130.87},{"chiave":"2017-02-02 00:00:00","indice":126.8976,"valuta":"EUR","valore":132.1},{"chiave":"2017-03-09 00:00:00","indice":126.0307,"valuta":"EUR","valore":131.92},{"chiave":"2017-04-04 00:00:00","indice":127.7662,"valuta":"EUR","valore":132.48},{"chiave":"2017-05-03 00:00:00","indice":128.2100,"valuta":"EUR","valore":133.32},{"chiave":"2017-05-30 00:00:00","indice":128.9273,"valuta":"EUR","valore":134.04},{"chiave":"2017-07-07 00:00:00","indice":128.2227,"valuta":"EUR","valore":133.62},{"chiave":"2017-08-01 00:00:00","indice":129.3263,"valuta":"EUR","valore":134.95},{"chiave":"2017-09-01 00:00:00","indice":129.6789,"valuta":"EUR","valore":134.51},{"chiave":"2017-10-03 00:00:00","indice":129.1384,"valuta":"EUR","valore":135.51},{"chiave":"2017-11-01 00:00:00","indice":128.8915,"valuta":"EUR","valore":135.75},{"chiave":"2017-11-29 00:00:00","indice":128.7444,"valuta":"EUR","valore":135.32},{"chiave":"2017-12-28 00:00:00","indice":128.6845,"valuta":"EUR","valore":135.1}]};
										var serieOneYear = {"serieOneYear":[{"chiave":"2017-08-07 00:00:00","indice":134.8000,"valuta":"EUR","valore":134.8},{"chiave":"2017-08-16 00:00:00","indice":134.8981,"valuta":"EUR","valore":134.05},{"chiave":"2017-08-25 00:00:00","indice":135.1675,"valuta":"EUR","valore":134.21},{"chiave":"2017-09-01 00:00:00","indice":135.2054,"valuta":"EUR","valore":134.51},{"chiave":"2017-09-12 00:00:00","indice":135.1464,"valuta":"EUR","valore":134.91},{"chiave":"2017-09-19 00:00:00","indice":134.8947,"valuta":"EUR","valore":135.17},{"chiave":"2017-09-26 00:00:00","indice":135.0193,"valuta":"EUR","valore":135.41},{"chiave":"2017-10-04 00:00:00","indice":134.6239,"valuta":"EUR","valore":135.53},{"chiave":"2017-10-13 00:00:00","indice":134.9168,"valuta":"EUR","valore":135.56},{"chiave":"2017-10-20 00:00:00","indice":134.2644,"valuta":"EUR","valore":135.78},{"chiave":"2017-10-27 00:00:00","indice":134.0503,"valuta":"EUR","valore":135.64},{"chiave":"2017-11-06 00:00:00","indice":134.7123,"valuta":"EUR","valore":135.67},{"chiave":"2017-11-14 00:00:00","indice":134.1422,"valuta":"EUR","valore":134.66},{"chiave":"2017-11-21 00:00:00","indice":134.3082,"valuta":"EUR","valore":134.98},{"chiave":"2017-11-28 00:00:00","indice":134.4717,"valuta":"EUR","valore":135.14},{"chiave":"2017-12-05 00:00:00","indice":134.4348,"valuta":"EUR","valore":135.42},{"chiave":"2017-12-12 00:00:00","indice":134.1888,"valuta":"EUR","valore":135.39},{"chiave":"2017-12-20 00:00:00","indice":133.6556,"valuta":"EUR","valore":135.13},{"chiave":"2017-12-28 00:00:00","indice":134.1686,"valuta":"EUR","valore":135.1}]};
										var serieSixMonths = {"serieSixMonths":[]};
										var serieThreeMonths = {"serieThreeMonths":[]};

										function loadSeries(serieArray, key, dati_graficofondo) {
											if ( (serieArray != null) && (serieArray.length > 0) ) {
												
												for (var i=0;i<serieArray.length;i++) { 
													serieArray[i].chiave = formatDateAsyyyyMM(serieArray[i].chiave);
												}
											    
												dati_graficofondo[key] = serieArray;
											}
										}

										dati_graficofondo = {};
										
										loadSeries(serieYTD.serieYTD, 'YTD', dati_graficofondo);
										loadSeries(serieThreeMonths.serieThreeMonths, '3 mesi', dati_graficofondo);
										loadSeries(serieSixMonths.serieSixMonths, '6 mesi', dati_graficofondo);
										loadSeries(serieOneYear.serieOneYear, '1 anno', dati_graficofondo);
										loadSeries(serieThreeYear.serieThreeYear, '3 anni', dati_graficofondo);
										loadSeries(serieFiveYear.serieFiveYear, '5 anni', dati_graficofondo);
										
									</script>
									<!-- FINE ESEMPIO DI UN GRAFICO -->
								</div>
							</div>
						</section>
						<hr>
						
						<h3 class="titFondi">Rendimenti</h3>
						<section>
					    	<div class="row">
								<div class="col-xs-12">
									<h4 class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, eos.">Rendimenti cumulati %</h4>
									<div class="headerContainerNoBootS">
								    	<div class="tableContainerNoBootS">
											<table class="riepilogo" cellspacing="0" cellpadding="0" border="0"  data-toggle="table">
												<thead>
													<tr>
														<th></th>
														<th class="center">YTD</th>
														<th class="center">1S</th>
														<th class="center">1M</th>
														<th class="center">3M</th>
														<th class="center">6M</th>
														<th class="center">1A</th>
														<th class="center">3A</th>
														<th class="center">5A</th>
														<th class="center">3A ann.</th>
														<th class="center">5A ann.</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><strong>Fondo</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
													</tr>
													<tr class="pari">
														<td>Categoria</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
													</tr>
												</tbody>
												<tfoot>
													<tr class="totali">
														<td>Differenza</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
													</tr>

												</tfoot>						
											</table>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section>
					    	<div class="row">
								<div class="col-xs-12">
									<h4 class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, eos.">Rendimenti per anno solare</h4>
									<div class="headerContainerNoBootS">
								    	<div class="tableContainerNoBootS">
											<table class="riepilogo" cellspacing="0" cellpadding="0" border="0"  data-toggle="table">
												<thead>
													<tr>
														<th></th>
														<th class="center">2010</th>
														<th class="center">2011</th>
														<th class="center">2012</th>
														<th class="center">2013</th>
														<th class="center">2014</th>
														<th class="center">2015</th>
														<th class="center">2016</th>
														<th class="center">2017</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><strong>Fondo</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
													</tr>
													<tr class="pari">
														<td>Categoria</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
														<td>XX,XX</td>
													</tr>
												</tbody>
												<tfoot>
													<tr class="totali">
														<td>Differenza</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
														<td class="center">XX,XX</td>
													</tr>

												</tfoot>						
											</table>
										</div>
									</div>
								</div>
							</div>
						</section>
						

						<section>
					    	<div class="row">
								<div class="col-xs-12">
									<h4 class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, eos.">Dividendi distribuiti (YEN)</h4>
									<div class="headerContainerNoBootS">
								    	<div class="tableContainerNoBootS">
											<table cellspacing="0" cellpadding="0" border="0"  data-toggle="table">
												
													<tr>
														<th></th>
														<th class="center">2013</th>
														<th class="center">2012</th>
														<th class="center">2011</th>
														<th class="center">2010</th>
														<th class="center">2009</th>
													</tr>
													<tr>
														<td><strong>Fondo</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
													</tr>
													<tr>
														<th></th>
														<th class="center">2013</th>
														<th class="center">2012</th>
														<th class="center">2011</th>
														<th class="center">2010</th>
														<th class="center">2009</th>
													</tr>
													<tr>
														<td><strong>Fondo</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
														<td class="center"><strong>XX,XX</strong></td>
													</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</section>

						
						<section>
					    	<div class="row">
								<div class="col-xs-12">
									<h4 class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, eos.">Rendimenti per quartili</h4>
									<div class="headerContainerNoBootS">
								    	<div class="tableContainerNoBootS">
											<table cellspacing="0" cellpadding="0" border="0"  data-toggle="table">
												
													<tr>
														<th></th>
														<th class="center">5A</th>
														<th class="center">4A</th>
														<th class="center">3A</th>
														<th class="center">2A</th>
														<th class="center">1A</th>
													</tr>
											
													<tr>
														<td>1&deg; quartile</td>
														<td class="center">-</td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center">-</td>
													</tr>
													<tr class="pari">
														<td>2&deg; quartile</td>
														<td class="center">-</td>
														<td class="center">-</td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
													</tr>
													<tr>
														<td>3&deg; quartile</td>
														<td class="center">-</td>
														<td class="center">-</td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center">-</td>
													</tr>
													<tr class="pari">
														<td>4&deg; quartile</td>
														<td class="center">-</td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center"><i class="icon icon-check-ok_table"></i></td>
														<td class="center">-</td>
														<td class="center">-</td>
													</tr>
												
											</table>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- FINE GRAFICO E RENDIMENTI -->
					</div>
				</div>
			</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="accRating">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-int-id="rating" data-parent="#accFondo" href="#collapseRating" aria-expanded="false" aria-controls="collapseRating" class="collapsed">Rating e rischio<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapseRating" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3b">
				<div class="panel-body">
					<div class="tab-wrap">
						<!-- RATING -->
						 
						<!-- Rating -->
						<section>
							<div class="row">
								<div class="col-sm-3 col-xs-12">
									<h4>Profilo di <span class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae blanditiis laborum esse aspernatur, vel incidunt! Quam perspiciatis, ea veniam eveniet, quasi nobis minus quidem voluptatem nam facere error ipsum, est?">rischio/rendimento</span></h4>
									<span class="big-rating">5</span>	
								</div>
								<div class="col-sm-9 col-xs-12">
									<h4>Rating e score</h4>
									<div class="headerContainerNoBootS">
										<div class="tableContainerNoBootS">
											<table>
												<tbody>
												<tr>
													<th></td>
													<th class="center">2013</td>
													<th class="center">2012</td>
													<th class="center">2011</td>
													<th class="center">2010</td>
													<th class="center">2009</td>
												</tr>
												<tr>
													<td><strong><span class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, commodi.">Rating del fondo</span></strong></td>
													<td class="center"><strong><span>5</span>/5</strong></td>
													<td class="center"><strong><span >5</span>/5</strong></td>
													<td class="center"><strong><span>3</span>/5</strong></td>
													<td class="center"><strong><span>5</span>/5</strong></td>
													<td class="center"><strong><span>5</span>/5</strong></td>
												</tr>
												<tr>
													<td>Scoring vs/categoria</td>
													<td class="center">x,xx%</td>
													<td class="center">x,xx%</td>
													<td class="center">x,xx%</td>
													<td class="center">x,xx%</td>
													<td class="center">x,xx%</td>
												</tr>
											</tbody>
											</table>

										</div>
									</div>
									

									<div class="form-group">
										
										 <div class="row">
										 	<div class="col-sm-12">
												<label class="control-label-output txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod rem temporibus aperiam, est dicta laudantium officia. Natus tenetur laboriosam placeat quis beatae id dolor labore expedita unde. Saepe, aspernatur, dicta!">Categoria BRating</label>
												<span class="output">Obbligazionari Globali - Corporate e Governativi Investment Grade</span>
											</div>
										</div>
									</div>


									
								</div>
							</div>
						</section>
						<!-- Fine rating -->


						<!-- Analisi -->
						<section>
						<h4>Analisi</h4>
						<div class="headerContainerNoBootS">
										<div class="tableContainerNoBootS">
								<table>
									<tbody>
									<tr>
										<th></th>
										<th class="center">1A</th>
										<th class="center">3A</th>
										<th class="center">5A</th>
									</tr>
									<tr>
										<td><strong>
											<span class="txthelp" data-toggle="tooltip" title="<b>RENDIMENTO</b>: è il rendimento a 1, 3, 5 anni conseguito dal fondo.">
												Rendimento (EUR)
											</span>	</strong>
										</td>
										<td class="center">
											<strong>
																					-6,62%
																			</strong>
										</td>
										<td class="center">
											<strong>
																					6,46%
																			</strong>
										</td>
										<td class="center">
											<strong>
																					6,28%
																			</strong>
										</td>
									</tr>
									<tr>
										<td>
											<span class="txthelp" data-toggle="tooltip" title="<b>VOLATILITÀ</b>: indica la <b>variabilità</b> 
																				del <b>rendimento</b> del fondo nel 
																				tempo e rappresenta quindi la tendenza del valore quota/NAV a 
																				discostarsi dal valore 
																				medio nel periodo considerato (1, 3, 5, 10 anni). Quanto più 
																				alta è la volatilità, tanto maggiore è stata 
																				l'oscillazione del valore quota/NAV nel periodo di riferimento. 
																				Maggiore è la volatilità 
																				di un fondo, più il fondo è rischioso.">
												Volatilità
											</span>	
										</td>
										<td class="center">
																			4,51%
																	</td>
										<td class="center">
																			8,02%
																	</td>
										<td class="center">
																			7,09%
																	</td>
									</tr>					
									<tr>
										<td>
											<span class="txthelp" data-toggle="tooltip" title="<b>INDICE DI SHARPE</b>: è un indice usato per valutare 
																				l'<b>efficienza</b> 
																				della <b>gestione</b> calcolato come rapporto tra il differenziale di 
																				rendimento di un fondo rispetto ad un'attività 
																				priva di rischio (in genere il tasso d'interesse sui titoli di Stato) e il rischio 
																				corso (deviazione standard). <b>Maggiore</b> è l'<b>indice di Sharpe</b>, 
																				<b>migliore</b> è la <b>performance</b> storica del fondo corretta 
																				per il rischio e quindi l'efficienza della gestione.">						
												Indice di Sharpe
											</span>
										</td>
										<td class="center">
																			-
																	</td>
										<td class="center">
																			0,334
																	</td>
										<td class="center">
																			0,223
																	</td>
									</tr>
									<tr>
										<td>
											<span class="txthelp" data-toggle="tooltip" title="<b>INDICE DI SORTINO</b>: è un indice usato per valutare l'efficienza 
																				della gestione calcolato come rapporto tra il differenziale di rendimento 
																				di un fondo rispetto ad un'attività priva di rischio (in genere il 
																				tasso d'interesse sui titoli di Stato) 
																				e il rischio corso (misurato con il downside risk). Maggiore è 
																				l'indice di Sortino, migliore è la performance storica del fondo 
																				corretta per il rischio e quindi l'efficienza della gestione.">
												Indice di Sortino
											</span>	
										</td>
										<td class="center">
																			-
																	</td>
										<td class="center">
																			0,779
																	</td>
										<td class="center">
																			0,48
																	</td>
									</tr>					
								</tbody></table>
							</div>
						</div>
						</section>
						<!-- Fine analisi -->
						
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<section>
								<h4>Analisi di rischio</h4>
								<table>
														<tbody>
														<tr>
															<th></th>
															<th class="center">3A</th>
														</tr>
														<tr>
															<td>
																<span class="txthelp" data-toggle="tooltip" title="<b>BETA</b>: è un <b>indicatore</b> che esprime l'<b>elasticità 
																									dei movimenti</b> del fondo 
																									rispetto a quelli dell'<b>indice</b> di <b>riferimento</b> (benchmark).  
																									L'indice di riferimento ha un valore di Beta pari a 1. Un fondo con Beta 
																									maggiore di 1 tende ad amplificare i movimenti del mercato, mentre con un 
																									Beta inferiore a 1 tende a smorzarli. L'amplificazione sarà tanto 
																									maggiore quanto più elevato sarà il Beta.
																									Ad esempio: a fronte di un incremento del 10% dell'indice di riferimento, 
																									un fondo con Beta pari a 1,1 salirebbe tendenzialmente dell'11%, mentre 
																									in caso di flessione dell'indice del 10%, tendenzialmente perderebbe l'11%.">
																	Beta
																</span>	
															</td>
															
															<td class="center">
																									1,173
																							</td>
													
														</tr>
														<tr>
															<td>
																<span class="txthelp"data-toggle="tooltip" title="<b>R-QUADRO</b>: è un indicatore di quanto il <b>comportamento</b> 
																									di un fondo sia riconducibile 
																									all'<b>andamento</b> dell'indice di riferimento (benchmark). È 
																									utile per valutare se la 
																									gestione del fondo è passiva (ovvero replica il benchmark) 
																									o attiva. Il valore dell'indicatore 
																									varia da 0 a 1 dove 1 indica che il fondo ha perfettamente replicato 
																									il parametro di riferimento. 
																									Più il valore è elevato, maggiore è l'adattamento 
																									del fondo al parametro di riferimento.">
																	R-Quadro
																</span>	
															</td>
															
															<td class="center">
																									0,977
																							</td>
															
														</tr>
														<tr>
															<td class="ultimo">
																<span class="txthelp" data-toggle="tooltip" title="<b>TRACKING ERROR VOLATILY (TEV)</b>: esprime la <b>volatilità</b> 
																									dei rendimenti differenziali di un 
																									fondo rispetto all'indice di riferimento (benchmark). Quanto più 
																									il valore della TEV si 
																									avvicina a zero tanto più vi sarà correlazione tra 
																									l'andamento del fondo e il suo benchmark. 
																									In tal caso si può dire che il prodotto è a gestione passiva, 
																									cioè	che replica l'indice 
																									di riferimento. Quanto più la TEV è elevata, tanto più 
																									la gestione del	fondo è stata attiva.">
																	Tracking Error Volatility
																</span>	
															</td>
															
															<td class="center">
																									1,687
																							</td>
	
														</tr>
													</tbody></table>
													</section>

							</div>
							<div class="col-sm-6 col-xs-12">
								<section>
								<h4>Analisi di efficienza</h4>
								<table>
														<tbody>
														<tr>
															<th></th>
															<th class="center">3A</th>
														</tr>
														<tr>
															<td>
																<span class="txthelp" data-toggle="tooltip" title="<b>BETA</b>: è un <b>indicatore</b> che esprime l'<b>elasticità 
																									dei movimenti</b> del fondo 
																									rispetto a quelli dell'<b>indice</b> di <b>riferimento</b> (benchmark).  
																									L'indice di riferimento ha un valore di Beta pari a 1. Un fondo con Beta 
																									maggiore di 1 tende ad amplificare i movimenti del mercato, mentre con un 
																									Beta inferiore a 1 tende a smorzarli. L'amplificazione sarà tanto 
																									maggiore quanto più elevato sarà il Beta.
																									Ad esempio: a fronte di un incremento del 10% dell'indice di riferimento, 
																									un fondo con Beta pari a 1,1 salirebbe tendenzialmente dell'11%, mentre 
																									in caso di flessione dell'indice del 10%, tendenzialmente perderebbe l'11%.">
																	Beta
																</span>	
															</td>
															
															<td class="center">
																									1,173
																							</td>
													
														</tr>
														<tr>
															<td>
																<span class="txthelp"data-toggle="tooltip" title="<b>R-QUADRO</b>: è un indicatore di quanto il <b>comportamento</b> 
																									di un fondo sia riconducibile 
																									all'<b>andamento</b> dell'indice di riferimento (benchmark). È 
																									utile per valutare se la 
																									gestione del fondo è passiva (ovvero replica il benchmark) 
																									o attiva. Il valore dell'indicatore 
																									varia da 0 a 1 dove 1 indica che il fondo ha perfettamente replicato 
																									il parametro di riferimento. 
																									Più il valore è elevato, maggiore è l'adattamento 
																									del fondo al parametro di riferimento.">
																	R-Quadro
																</span>	
															</td>
															
															<td class="center">
																									0,977
																							</td>
															
														</tr>
														<tr>
															<td class="ultimo">
																<span class="txthelp" data-toggle="tooltip" title="<b>TRACKING ERROR VOLATILY (TEV)</b>: esprime la <b>volatilità</b> 
																									dei rendimenti differenziali di un 
																									fondo rispetto all'indice di riferimento (benchmark). Quanto più 
																									il valore della TEV si 
																									avvicina a zero tanto più vi sarà correlazione tra 
																									l'andamento del fondo e il suo benchmark. 
																									In tal caso si può dire che il prodotto è a gestione passiva, 
																									cioè	che replica l'indice 
																									di riferimento. Quanto più la TEV è elevata, tanto più 
																									la gestione del	fondo è stata attiva.">
																	Tracking Error Volatility
																</span>	
															</td>
															
															<td class="center">
																									1,687
																							</td>
	
														</tr>
													</tbody></table>
													
												</section>

							</div>
							

						</div>
				
					

						<!-- FINE RATING -->
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="accComposizione">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-int-id="composizione"  data-parent="#accFondo" href="#collapseComposizione" aria-expanded="false" aria-controls="collapseComposizione" class="collapsed">Composizione<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapseComposizione" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4b">
				<div class="panel-body">
					<div class="tab-wrap">
						
						<div class="form-group">
							<!-- COMPOSIZIONE -->
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<h4 data-toggle="tooltip" class="txthelp" title="Indica la ripartizione in percentuale degli <b>strumenti finanziari</b> presenti nel portafoglio del fondo tra le principali asset class: azioni, obbligazioni, liquidit&agrave;.">Asset Allocation %</h4>
									<div id="grafico_asset_composizione" class="grafico"></div>		
									<hr class="visible-xs">				
								</div>	
								<div class="col-xs-12 col-sm-6">
									<h4>Distribuzione geografica</h4>
									<script type="text/javascript">						
									dati_distribuzione = [];
																var distrib = {};
									distrib.chiave = 'Canada';
									distrib.valore = '2.3';
									distrib.color = '#CD1111';
									dati_distribuzione.push(distrib);
																var distrib = {};
									distrib.chiave = 'Giappone';
									distrib.valore = '18.1';
									distrib.color = '#005DB7';
									dati_distribuzione.push(distrib);
																var distrib = {};
									distrib.chiave = 'Usa';
									distrib.valore = '39.9';
									distrib.color = '#8E0C0C';
									dati_distribuzione.push(distrib);
																var distrib = {};
									distrib.chiave = 'Europa Area Euro';
									distrib.valore = '17.1';
									distrib.color = '#00622D';
									dati_distribuzione.push(distrib);
																var distrib = {};
									distrib.chiave = 'Europa Occidentale - non EURO';
									distrib.valore = '20.3';
									distrib.color = '#00A64C';
									dati_distribuzione.push(distrib);
																var distrib = {};
									distrib.chiave = 'Altri paesi';
									distrib.valore = '2.3';
									distrib.color = '#333333';
									dati_distribuzione.push(distrib);
														
									</script>		
									<div id="grafico_distribuzione" class="grafico"></div>	
											
								</div>	
							</div>
						</div>
						
						<div class="form-group">	
							<hr>
							<div class="row">
							<div class="col-xs-12">
								<h4>Distribuzione settoriale</h4>
								<div id="grafico_settori" class="grafico"></div>														
								<script type="text/javascript">						
								dati_settori = [];
																	var distrib = {};
									distrib.chiave = 'Energia';
									distrib.valore = '8.6';
									distrib.color = '#00A8D5';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Finanza';
									distrib.valore = '17.4';
									distrib.color = '#00622D';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Tecnologia';
									distrib.valore = '14.8';
									distrib.color = '#8E0C0C';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Industria';
									distrib.valore = '13';
									distrib.color = '#0DCC5E';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Sanita\'';
									distrib.valore = '15.9';
									distrib.color = '#E04848';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Servizi per la telecomunicazione';
									distrib.valore = '3.7';
									distrib.color = '#ABB9BF';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Beni di prima necessita\'';
									distrib.valore = '7.3';
									distrib.color = '#F78334';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Materiali e Materie Prime';
									distrib.valore = '3.1';
									distrib.color = '#003262';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Consumi discrezionali';
									distrib.valore = '11.7';
									distrib.color = '#FFE09B';
									dati_settori.push(distrib);																
																	var distrib = {};
									distrib.chiave = 'Altro';
									distrib.valore = '4.5';
									distrib.color = '#333333';
									dati_settori.push(distrib);																
															</script>
									
							</div>

						</div>
					</div>
					<hr>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12">
								<h4 >Top ten titoli in portafoglio</h4>
								<div id="grafico_topten" class="grafico"></div>
										<script type="text/javascript">						
								dati_topten = [];
								var index = 0;
								var size = graphColors.length;							
																	var distrib = {};
									distrib.chiave = 'CREDIT SUISSE GROUP AG';
									distrib.valore = '2';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'INTL BUSINESS MACHINES CORP';
									distrib.valore = '1.9';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'TESCO PLC';
									distrib.valore = '1.8';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'NOVARTIS AG';
									distrib.valore = '1.7';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'PFIZER INC';
									distrib.valore = '1.7';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'BP PLC';
									distrib.valore = '1.5';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'ROCHE HOLDING AG-GENUSSCHEIN';
									distrib.valore = '1.5';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'VODAFONE GROUP PLC';
									distrib.valore = '1.5';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'SHIRE PLC';
									distrib.valore = '1.4';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
																	var distrib = {};
									distrib.chiave = 'CISCO SYSTEMS INC';
									distrib.valore = '1.4';
									if (index == size) {
										index = 0;
									}
									distrib.color = graphColors[index];
									dati_topten.push(distrib);
									index++;								
									</script>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<hr>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<h4>Esposizione valutaria</h4>
								<div id="grafico_esposizione"  class="grafico"></div>							
										<script type="text/javascript">						
								dati_esposizione = [];
																	var distrib = {};
									distrib.chiave = 'EUR';
									distrib.valore = '17.2';
									distrib.color = '#003262';
									dati_esposizione.push(distrib);																	
																	var distrib = {};
									distrib.chiave = 'USD';
									distrib.valore = '54.1';
									distrib.color = '#00622D';
									dati_esposizione.push(distrib);																	
																	var distrib = {};
									distrib.chiave = 'JPY';
									distrib.valore = '8.4';
									distrib.color = '#ABB9BF';
									dati_esposizione.push(distrib);																	
																	var distrib = {};
									distrib.chiave = 'Altro';
									distrib.valore = '20.3';
									distrib.color = '#333333';
									dati_esposizione.push(distrib);																	
															</script><hr class="visible-xs">
							</div>
							
						</div>		
					</div>

					<h4>Qualit&agrave; del credito</h3>
					<div class="row">
						<div class="col-xs-12">
			
							<div class="headerContainerNoBootS">
								<div class="tableContainerNoBootS">
									<table>
										<thead>
											<tr>
												<th class="center">AAA</td>
												<th class="center">AA</td>
												<th class="center">A</td>
												<th class="center">BBB</td>
												<th class="center">BB</td>
												<th class="center">B</td>
												<th class="center">&lt; B</td>
												<th class="center">Altro</td>
												<th class="center">No rating/Liquidit&agrave;</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
												<td class="center">-</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
						<!-- FINE COMPOSIZIONE -->
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading visible-xs" role=" tab"="" id="accSocieta">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-int-id="societa"  data-parent="#accFondo" href="#collapseSocieta" aria-expanded="false" aria-controls="collapseSocieta" class="collapsed">Societ&agrave; di gestione<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapseSocieta" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5b">
				<div class="panel-body">
					<div class="tab-wrap">
						<!-- SOCIETA' DI GESTIONE -->
						<h3>Anima lorem ipsum dolor</h3>
						<section>
						<h4>Informazioni</h4>
						<h5>Lorem ipsum doloripsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam facere reiciendis vero maiores, a perspiciatis ad deleniti! Molestiae saepe mollitia in possimus necessitatibus tempore repellendus tenetur aliquid accusamus, a, ipsam.</p>
						<h5>Lorem ipsum doloripsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam facere reiciendis vero maiores, a perspiciatis ad deleniti! Molestiae saepe mollitia in possimus necessitatibus, a, ipsam.</p>
						<h5>Lorem ipsum dolor ipsum doloripsum doloripsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Molestiae saepe mollitia in possimus necessitatibus tempore repellendus tenetur aliquid accusamus, a, ipsam.</p>
						</section>
						<hr>
						<section>
						<h4>Documentazione legale</h4>
						<br class="clear">
						<ul class="documenti">
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></a></li>
							<li><a href="#" class="btn-icon"><i class="icon icon-file_pdf"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit odit, perferendis praesentium, nihil veritatis nisi quos</span></a></li>
						</ul>
						</section>
				
						<!-- FINE SOCIETA' DI GESTIONE -->
					</div>
				</div>
			</div>
		</div>
		
	</div>
</form>
</div>






<!-- primo tab-->

	
	<!-- terzo tab-->
	<div class="divtabellacont" id="tabAlert3" style="display:none">
			 <!--RATING -->
		<div class="row-fluid">
			<div class="span3">
				<h3 class="titFondi">Grado di rischio<span class="icoTit" data-tooltip="Lorem ipsum dolor sit lore ipsum"><img class="help" src="/img/ret/ico2or_help2.gif"></span></h3>
				<div class="borderRoundedNopadd">
					<span class="riskValue"><span class="riskPart">3</span>/<span class="riskTotal">7</span></span>
				</div>
			</div>
			<div class="span9">
				<h3 class="titFondi">Rating e scoring<span class="icoTit" data-tooltip="Lorem ipsum dolor sit lore ipsum"><img class="help" src="/img/ret/ico2or_help2.gif"></span></h3>
				<div class="borderRoundedNopadd">
					
					<table class="bggrigioFondi">
						<tr>
							<td class="fondoTransp" colspan="6"><div></div></td>
						</tr>
						<tr>
							<td class="fondo2"></td>
							<td class="fondo2">2013</td>
							<td class="fondo2">2012</td>
							<td class="fondo2">2011</td>
							<td class="fondo2">2010</td>
							<td class="fondo2">2009</td>
						</tr>
						<tr>
							<td><strong>Rating del fondo</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">3</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
						</tr>
						<tr>
							<td class="ultimo">Scoring vs/categoria</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
						</tr>
					</table>
				</div>
				<span class="tabellaNote"><strong>Categoria rating</strong> lorem ipsum dolor</span>
			</div>
		</div>
	<!-- -->
	<!--RATING GRIGIO -->
		<div class="row-fluid">
			<div class="span3">
				<h3 class="titFondi">Grado di rischio<span class="icoTit" data-tooltip="Lorem ipsum dolor sit lore ipsum"><img class="help" src="/img/ret/ico2or_help2.gif"></span></h3>
				<div class="borderRoundedNopadd">
					<span class="riskValue grey"><span class="riskPart">3</span>/<span class="riskTotal">7</span></span>
				</div>
			</div>
			<div class="span9">
				<h3 class="titFondi">Rating e scoring<span class="icoTit" data-tooltip="Lorem ipsum dolor sit lore ipsum"><img class="help" src="/img/ret/ico2or_help2.gif"></span></h3>
				<div class="borderRoundedNopadd">
					
					<table class="bggrigioFondi">
						<tr>
							<td class="fondoTransp" colspan="6"><div></div></td>
						</tr>
						<tr>
							<td class="fondo2"></td>
							<td class="fondo2">2013</td>
							<td class="fondo2">2012</td>
							<td class="fondo2">2011</td>
							<td class="fondo2">2010</td>
							<td class="fondo2">2009</td>
						</tr>
						<tr>
							<td><strong>Rating del fondo</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">3</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
							<td><strong><span class="fontLarger">5</span>/5</strong></td>
						</tr>
						<tr>
							<td class="ultimo">Scoring vs/categoria</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
							<td class="ultimo">x,xx%</td>
						</tr>
					</table>
				</div>
				<span class="tabellaNote"><strong>Categoria rating</strong> lorem ipsum dolor</span>
			</div>
		</div>
		<br/>
		<div class="filettoGenericoOrizzontale02"></div><br/>
		<div class="row-fluid">
			<h3 class="titFondi">Analisi<span data-tooltip="Lorem ipsum dolor sit lore ipsum" class="icoTit"><img src="/img/ret/ico2or_help2.gif" class="help"></span></h3>
			<div class="borderRoundedNopadd">
				<table class="bggrigioFondi">
					<tr>
						<td class="fondoTransp" colspan="4"><div></div></td>
					</tr>
					<tr>
						<td class="fondo2"></td>
						<td class="fondo2">1A</td>
						<td class="fondo2">3A</td>
						<td class="fondo2">5A</td>
					</tr>
					<tr>
						<td><strong>Rendimento</strong></td>
						<td><strong>XX,X%</strong></td>
						<td><strong>XX,X%</strong></td>
						<td><strong>XX,X%</strong></td>
					</tr>
					<tr>
						<td>Volatilit&agrave;</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
					</tr>
					<tr>
						<td>Draw down massimo</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
					</tr>
					<tr>
						<td>Indice di Sharpe</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
						<td>XX,X%</td>
					</tr>
					<tr>
						<td class="ultimo">Indice di Sortino</td>
						<td class="ultimo">XX,X%</td>
						<td class="ultimo">XX,X%</td>
						<td class="ultimo">XX,X%</td>
					</tr>					
				</table>
			</div>		
		</div>
		<br/>
		<div class="filettoGenericoOrizzontale02"></div><br/>
		<div class="row-fluid">
			<div class="span6">
				<h3 class="titFondi">Analisi di rischio<span data-tooltip="Lorem ipsum dolor sit lore ipsum" class="icoTit"><img src="/img/ret/ico2or_help2.gif" class="help"></span></h3>
				<div class="borderRoundedNopadd">
					<table class="bggrigioFondi">
						<tr>
							<td class="fondoTransp" colspan="4"><div></div></td>
						</tr>
						<tr>
							<td class="fondo2"></td>
							<td class="fondo2"></td>
							<td class="fondo2">3A</td>
							<td class="fondo2"></td>
						</tr>
						<tr>
							<td>Beta</td>
							<td></td>
							<td>XX,X%</td>
							<td></td>
						</tr>
						<tr>
							<td>R Quadro</td>
							<td></td>
							<td>XX,X%</td>
							<td></td>
						</tr>
						<tr>
							<td class="ultimo">Tracking Error Volatility</td>
							<td class="ultimo"></td>
							<td class="ultimo">XX,X%</td>
							<td class="ultimo"></td>
						</tr>
					</table>
				</div>				
			</div>
			<div class="span6">
				<h3 class="titFondi">Analisi di efficienza<span data-tooltip="Lorem ipsum dolor sit lore ipsum" class="icoTit"><img src="/img/ret/ico2or_help2.gif" class="help"></span></h3>
				<div class="borderRoundedNopadd">
					<table class="bggrigioFondi">
						<tr>
							<td class="fondoTransp" colspan="4"><div></div></td>
						</tr>
						<tr>
							<td class="fondo2"></td>
							<td class="fondo2">1A</td>
							<td class="fondo2">3A</td>
							<td class="fondo2">5A</td>
						</tr>
						<tr>
							<td>Alfa</td>
							<td>XX,X%</td>
							<td>XX,X%</td>
							<td>XX,X%</td>
						</tr>
						<tr>
							<td>Information Ratio</td>
							<td>XX,X%</td>
							<td>XX,X%</td>
							<td>XX,X%</td>
						</tr>
						<tr>
							<td class="ultimo">Indice di Treynor</td>
							<td class="ultimo">XX,X%</td>
							<td class="ultimo">XX,X%</td>
							<td class="ultimo">XX,X%</td>
						</tr>
					</table>
				</div>				
			</div>		
		</div>
	</div>
	<!-- fine terzo tab-->
	
	<!--quarto tab -->
	<div class="divtabellacont" id="tabAlert4" style="display:none">
		<h3>Asset Allocation % <img class="help" src="/img/ret/ico2or_help2.gif"></span></h3>
		<!-- ESEMPIO PER GRAFICO A TORTA -->
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<div id="graficoAssetAlocation" style="width:668px;height:250px; float:right;"></div>
							<script type="text/javascript">
							// Esempio dati torta
							var chart;
							var chartData = [{
								country: "Czech Republic",
								litres: 301.90},
							{
								country: "Ireland",
								litres: 201.10},
							{
								country: "Germany",
								litres: 165.80},
							{
								country: "Australia",
								litres: 139.90},
							{
								country: "Austria",
								litres: 128.30},
							{
								country: "UK",
								litres: 99.00},
							{
								country: "Belgium",
								litres: 60.00}];

							// PIE CHART
							chart = new AmCharts.AmPieChart();
							chart.dataProvider = chartData;
							chart.titleField = "country";
							chart.valueField = "litres";
							chart.outlineColor = "#FFFFFF";
							chart.outlineAlpha = 0.8;
							chart.outlineThickness = 2;

							// WRITE
							chart.write("graficoAssetAlocation");
							</script>
							<!-- FINE ESEMPIO GRAFICO A TORTA -->
					</div>
				</div>
			</div>
			
			<br/><br/>
			<div class="filettoGenericoOrizzontale02"></div><br/>
			<h3 class="titFondi">Distribuzione geografica</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<div id="graficoDistribuzioneGeo" style="width:668px;height:250px; float:right;"></div>
							<script type="text/javascript">
							// Esempio dati torta
							var chart;
							var chartData = [{
								country: "Czech Republic",
								litres: 301.90},
							{
								country: "Ireland",
								litres: 201.10},
							{
								country: "Germany",
								litres: 165.80},
							{
								country: "Australia",
								litres: 139.90},
							{
								country: "Austria",
								litres: 128.30},
							{
								country: "UK",
								litres: 99.00},
							{
								country: "Belgium",
								litres: 60.00}];

							// PIE CHART
							chart = new AmCharts.AmPieChart();
							chart.dataProvider = chartData;
							chart.titleField = "country";
							chart.valueField = "litres";
							chart.outlineColor = "#FFFFFF";
							chart.outlineAlpha = 0.8;
							chart.outlineThickness = 2;

							// WRITE
							chart.write("graficoDistribuzioneGeo");
							</script>
							<!-- FINE ESEMPIO GRAFICO A TORTA -->
					</div>
				</div>
			</div>
			<br/><br/>
			<div class="filettoGenericoOrizzontale02"></div><br/>
			<h3 class="titFondi">Distribuzione settoriale</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<div id="graficoDistribuzioneSett" style="width:668px;height:250px; float:right;"></div>
							<script type="text/javascript">
							// Esempio dati torta
							var chart;
							var chartData = [{
								country: "Czech Republic",
								litres: 301.90},
							{
								country: "Ireland",
								litres: 201.10},
							{
								country: "Germany",
								litres: 165.80},
							{
								country: "Australia",
								litres: 139.90},
							{
								country: "Austria",
								litres: 128.30},
							{
								country: "UK",
								litres: 99.00},
							{
								country: "Belgium",
								litres: 60.00}];

							// PIE CHART
							chart = new AmCharts.AmPieChart();
							chart.dataProvider = chartData;
							chart.titleField = "country";
							chart.valueField = "litres";
							chart.outlineColor = "#FFFFFF";
							chart.outlineAlpha = 0.8;
							chart.outlineThickness = 2;

							// WRITE
							chart.write("graficoDistribuzioneSett");
							</script>
							<!-- FINE ESEMPIO GRAFICO A TORTA -->
					</div>
				</div>
			</div>
			
			<br/><br/>
			<div class="filettoGenericoOrizzontale02"></div><br/>
			<h3 class="titFondi">Top ten titoli in portafoglio</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<div id="graficoTopTen" style="width:668px;height:250px; float:right;"></div>
							<script type="text/javascript">
							// Esempio dati torta
							var chart;
							var chartData = [{
								country: "Czech Republic",
								litres: 301.90},
							{
								country: "Ireland",
								litres: 201.10},
							{
								country: "Germany",
								litres: 165.80},
							{
								country: "Australia",
								litres: 139.90},
							{
								country: "Austria",
								litres: 128.30},
							{
								country: "UK",
								litres: 99.00},
							{
								country: "Belgium",
								litres: 60.00}];

							// PIE CHART
							chart = new AmCharts.AmPieChart();
							chart.dataProvider = chartData;
							chart.titleField = "country";
							chart.valueField = "litres";
							chart.outlineColor = "#FFFFFF";
							chart.outlineAlpha = 0.8;
							chart.outlineThickness = 2;

							// WRITE
							chart.write("graficoTopTen");
							</script>
							<!-- FINE ESEMPIO GRAFICO A TORTA -->
					</div>
				</div>
			</div>
			<br/><br/>
			<div class="filettoGenericoOrizzontale02"></div><br/>
			<h3 class="titFondi">Esposizione valutaria</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<div id="graficoEsposizione" style="width:668px;height:250px; float:right;"></div>
							<script type="text/javascript">
							// Esempio dati torta
							var chart;
							var chartData = [{
								country: "Czech Republic",
								litres: 301.90},
							{
								country: "Ireland",
								litres: 201.10},
							{
								country: "Germany",
								litres: 165.80},
							{
								country: "Australia",
								litres: 139.90},
							{
								country: "Austria",
								litres: 128.30},
							{
								country: "UK",
								litres: 99.00},
							{
								country: "Belgium",
								litres: 60.00}];

							// PIE CHART
							chart = new AmCharts.AmPieChart();
							chart.dataProvider = chartData;
							chart.titleField = "country";
							chart.valueField = "litres";
							chart.outlineColor = "#FFFFFF";
							chart.outlineAlpha = 0.8;
							chart.outlineThickness = 2;

							// WRITE
							chart.write("graficoEsposizione");
							</script>
							<!-- FINE ESEMPIO GRAFICO A TORTA -->
					</div>
				</div>
			</div>
			<br/><br/>
			<div class="filettoGenericoOrizzontale02"></div><br/>
			<h3 class="titFondi">Quantit&agrave; di credito</h3>
			<div class="row-fluid">
				<div class="span12">
					<div class="borderRoundedNopadd">
						<table class="bggrigioFondi">
							<tr>
								<td class="fondoTransp" colspan="9"><div></div></td>
							</tr>
							<tr>
								<td class="fondo2">AAA</td>
								<td class="fondo2">AA</td>
								<td class="fondo2">A</td>
								<td class="fondo2">BBB</td>
								<td class="fondo2">BB</td>
								<td class="fondo2">B</td>
								<td class="fondo2">&lt;B</td>
								<td class="fondo2">no rating</td>
								<td class="fondo2">liquidit&agrave; %</td>
							</tr>
							<tr>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
								<td class="ultimo">x,xx%</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	</div>
	<!--fine quarto tab -->
	<!--quarto tab -->
	<div class="divtabellacont" id="tabAlert5" style="display:none">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="titFondi">Lorem ipsum dolor</h3>
				<div class="borderFormRounded noPaddtop">
				<h3>Informazioni</h3>
				<div class="filettoGenericoOrizzontale02"></div><br/>
					<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
					<p>
						<span>
							<span><strong>Lorem ipsum dolor sit amet</strong>descrizione compagnia numero 3.</span>
							<span class="CDtrepunti" style="display: inline;">..</span>
							<a class="toggleProfileA" href="javascript:;" style="display: inline;">leggi di pi&ugrave;</a>
							<a class="toggleProfileA" href="javascript:;" style="display: inline;"><img src="/img/ret/str_piu.gif"></a>
						</span>
					</p>
					<div style="display: none;" id="companyProfile1" class="companyProfile">
						<div class="CPcontent">
							<p>dettaglio descrizione societ&agrave; numero 3</p>
							<p><a style="display: none;" class="toggleProfileB" href="javascript:;">riduci</a>
							<a style="display: none;" class="toggleProfileB" href="javascript:;"><img src="/img/ret/str_meno.gif"></a></p>
							<p>Fonte: <a href="#" target="_blank">lorem ipsum</a></p>
							<div class="filettoGenericoOrizzontale02"></div><br/>
							<div class="row-fluid">
								<div class="span4"><strong>Indirizzo</strong><br/>Via Garibaldi 12<br/>20122 Milano (Italia)</div>
								<div class="span4"><strong>Telefono</strong><br/>+39 02 123 456</div>
								<div class="span4"><strong>Fax</strong><br/>+39 02 123 456</div>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					var toggleProfileA = $('.toggleProfileA');
					var toggleProfileB = $('.toggleProfileB');
					toggleProfileA.click(openProfile);
					toggleProfileB.click(closeProfile); 
					toggleProfileA.show();
					toggleProfileB.hide(); 
				</script>
			</div>
		</div>
		<br/><br/>
		<div class="row-fluid">
			<div class="span12">
				<div class="borderFormRounded noPaddtop">
					<h3>Documentazione legale</h3>
					<div class="filettoGenericoOrizzontale02"></div><br/>
					<div class="mutuitrasp">
						<ul>
							<li><a class="colorBank" href="#">Allianz Global Investors Fund: Informazione chiave per l'investitore (KIID), Modulo di sottoscrizione e Allegato</a></li>
							<li><a class="colorBank" href="#">Prospetto semplificato Traguardo 2017 Cedola 4 (Informazioni generali, Informazioni specifiche fondo, Modulo di sottoscrizione)</a></li>
							<li><a class="colorBank" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
							<li><a class="colorBank" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
							<li><a class="colorBank" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec..</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--fine quarto tab -->
	
	<br class="clear"/>
	
	<!-- Ultimi fondi visualizzati -->

	<section>
		<h3>Ultimi fondi visualizzati</h3>
		<div class="formGenerico output hidden-xs" id="ultimiFondiDesk">
			<div class="row">
				
				<div class="col-sm-4 col-xs-12">
					<div class="fundBox">
						<h4>Fondo lorem ipsum dolor sit amet.</h4>
						<div class="control-label  txthelp inited" data-toggle="tooltip" title="" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem voluptatibus atque nihil omnis deserunt molestiae cupiditate aperiam ipsum iste ea numquam fuga impedit itaque, adipisci iusto, optio rerum facere voluptas.">Rating FIDA</div>
						<div class="rating large"><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i></div>
						<div class="form-group btnWrapper">
							<div class="btn-align-right">
				                <a type="button" class="btn btn-primary" href="#">confronta</a>
				           	</div>
						</div>
						<br class="clear">
					</div>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="fundBox">
						<h4>JPM Income Opportunity A Acc EUR Hdg</h4>
						<div class="control-label  txthelp inited" data-toggle="tooltip" title="" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem voluptatibus atque nihil omnis deserunt molestiae cupiditate aperiam ipsum iste ea numquam fuga impedit itaque, adipisci iusto, optio rerum facere voluptas.">Rating FIDA</div>
						<div class="rating large"><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona"></i></div>
						<div class="form-group btnWrapper">
							<div class="btn-align-right">
				                <a type="button" class="btn btn-primary" href="#">confronta</a>
				           	</div>
						</div>
						<br class="clear">
					</div>
				</div>

				<div class="col-sm-4 col-xs-12">
					<div class="fundBox">
						<h4>Allianz Opportunity A Acc EUR Hdg</h4>
						<div class="control-label  txthelp inited" data-toggle="tooltip" title="" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem voluptatibus atque nihil omnis deserunt molestiae cupiditate aperiam ipsum iste ea numquam fuga impedit itaque, adipisci iusto, optio rerum facere voluptas.">Rating FIDA</div>
						<div class="rating large"><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i></div>
						<div class="form-group btnWrapper">
							<div class="btn-align-right">
				                <a type="button" class="btn btn-primary" href="#">confronta</a>
				           	</div>
						</div>
						<br class="clear">
					</div>
				</div>
			
			</div>

		</div>
	</section>
	<!-- Fine ultimi fondi visualizzati -->	





	<!-- PANNELLO CHIUSURA -->
	<!--
	<div class="row">
		<div class="col-sm-6">
			<a href="">Torna a ricerca</a>	
		</div>
	</div>
	<br class="clear"/>-->
	<div class="formGenerico borderFormRounded fundPanel">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit EUR</h4>
			</div>
				<div class="col-sm-2 col-xs-12">
					<div class="icon-console">
						<a class="no-underline btn-icon"><i class="icon icon-campana_fill icon-2x"></i></a>
						<a class="no-underline btn-icon"><i class="icon icon-stella_fill icon-2x" data-modal-action="addToWatchlist"></i></a>
					</div>
				</div>
			<!-- Operativita' -->
			<div class="col-sm-5 col-xs-12">
				<div class="btn-console">
	                <a type="button" class="btn btn-primary" href="#">compra</a>
	                <a type="button" class="btn btn-primary" href="#">vendi</a>
	                <a type="button" class="btn btn-primary" ref="#">switch</a>
	            </div>
			</div>
		</div>
	</div>

	<!-- FINE PANNELLO CHIUSURA -->


</div>

