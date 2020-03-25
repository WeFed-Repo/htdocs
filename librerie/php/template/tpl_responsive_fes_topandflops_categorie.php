<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<h2>Migliori e peggiori</h2>

<!-- Navigazione in pagina -->
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_topandflops.php&responsive=y&liv0=4&liv1=2&liv2=3&liv3=1">Top 10 fondi</a></li>
			<li class="on"><a>Categorie migliori e peggiori</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<!-- Fine navigazione in pagina -->


<!-- Contenuti della pagina -->
<section id="tfCatWrap" class="loading">

	<p>
                Nella tabella sotto sono classificate le <strong>10 Categorie BRating migliori e peggiori per rendimento a 1 mese<sup>*</sup>. La
                classifica viene aggiornata su base mensile.</strong><br>
                La classifica considera e seleziona solo gli indici BRating in cui sono presenti i Fondi e Comparti di Sicav dell'offerta Webank.<br>
                La performance degli indici BRating è&nbsp;calcolata in Euro con il metodo della capitalizzazione composta giornaliera dei rendimenti&nbsp;a 1 mese<sup>*</sup> di tutti&nbsp;i&nbsp;Fondi e/o Comparti di Sicav &nbsp;collocati in Italia che&nbsp;rientrano nelle
				<span data-toggle="tooltip" title="I prodotti di risparmio gestito vengono 
									classificati da BRating in categorie omogenee. Il 
									processo di classificazione prende in considerazione, 
									tra gli altri elementi, <strong>l'asset class</strong> di riferimento, 
									<strong>l'area geografica</strong>, il <strong>settore merceologico</strong>, 
									la <strong>tipologia di strumenti</strong> in portafoglio e <strong>
									l'esposizione valutaria</strong>. Gli elementi su cui si basa l'
									analisi sono prevalentemente: la politica di gestione dichiarata nella 
									documentazione d'offerta, l'evoluzione storica del NAV rispetto 
									a benchmark di mercato e la composizione effettiva di portafoglio." class="txthelp">
					Categorie BRating.
				</span>.<br>
				<br>Clicca sul numero di fondi per vederli in dettaglio.
	</p>

	<!-- Selettore per visualizzazione -->
	<script type="text/javascript">
		// Inizializzazione variabili
		var tfTCategorieUrl = "/librerie/include/commons/ajax/fes/fesFlopAndTop.php";

		// Variabili locali della pagina
		var tfData = [];
	
		// Simulazione chiamate e automazioni
		
		// Inizializzazione

		$(function(){

			
			// Raccolta dei dati dall'esterno
			$.ajax({

				url: tfTCategorieUrl,
				dataType: "json",
				// Completare con i parametri corretti
				data: {
					tiporichiesta:"topflop" 	// nella pagina TopFlop e' topflop				
				},
				success: function(data) {
					$("#tfCatWrap").removeClass("loading");
					tfData["migliori"] = data.data.top;
					tfData["peggiori"] = data.data.flop;

					// Elaborazione dei dati delle 2 tabelle


					// TABELLA TOP

					$.each(["migliori","peggiori"],function(index,tabletype){

						// Modifica i dati per la visualizzazione
						$.each(tfData[tabletype],function(i,v){

							// parametri necessari e l'url corretto qui)
							tfData[tabletype][i].totfondilink = "<a href=\"/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_ricerca.php&liv0=4&liv1=2&liv2=6&liv3=0&responsive=y\" title=\"Vedi i fondi "+v.nomecategoriabrating+"\">" + v.numfondi + "</a>";
							tfData[tabletype][i].rendimentoformattato = formatNumber(v.rendimento);

						});
						

						// Popola la tabella bs
						 $("#table" + tabletype).bootstrapTable({
							data: tfData[tabletype],
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
							}
						});

					});

					$("#tfCatWrap").removeClass("loading");

				},
				error: function(e) {
					alert("Si sono verificati problemi durante il recupero dei dati. Riprovare piu' tardi.");
					$("#tfCatWrap").removeClass("loading");
				}

			});

		});

	</script>

	
	<!-- Modale informativa per tabelle -->
	<div class="modal fade" id="layerInfoTabella" tabindex="-1" role="dialog" aria-labelledby="layerInfoTabellaLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="layerInfoTabellaLabel">Legenda</h2>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, optio!</p>
								<p>lorem dolor <strong>legenda tabella</strong> dolor amet Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, facere?</p>
								<ul>
									<li><strong>Nome </strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsa eum quis vitae aliquid, non sapiente ea sunt, recusandae modi doloremque. Molestias delectus totam, maxime perspiciatis voluptas, nesciunt et aliquam.</li>
									<li><strong>Categoria BRating </strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsa eum quis vitae aliquid, non sapiente ea sunt, recusandae modi doloremque. Molestias delectus totam, maxime perspiciatis voluptas, nesciunt et aliquam.</li>
									<li><strong>Rating </strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsa eum quis vitae aliquid, non sapiente ea sunt, recusandae modi doloremque. Molestias delectus totam, maxime perspiciatis voluptas, nesciunt et aliquam.</li>
									<li><strong>Rend. % a 1 anno </strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ipsa eum quis vitae aliquid, non sapiente ea sunt, recusandae modi doloremque. Molestias delectus totam, maxime perspiciatis voluptas, nesciunt et aliquam.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Fine modale informativa per tabelle -->


	<!-- Tabelle BS-->
	<div class="row">
		
		<div class="col-sm-6 col-xs-12">
			<div class="tithelp">
				<h4>10 migliori categorie Fondi a 1 mese</h4>
				<div class="flRight"><a href="javascript:;" class="no-underline btn-icon" data-toggle="modal" data-target="#layerInfoTabella"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
					<br class="clear">
				</div>
				<br class="clear">
			</div>

			<table id="tablemigliori" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
				<thead>
					<tr>
						<th data-field="nomecategoriabrating">Migliori categorieBRating</th>
						<th data-field="totfondilink" class="center">N.Fondi</th>
						<th data-field="rendimentoformattato" class="right"><nobr>Rendimento %</nobr><br>a 1 mese</th>
					</tr>
				</thead>
			</table>
		</div>


		<div class="col-sm-6 col-xs-12">
			<div class="tithelp">
				<h4>10 peggiori categorie Fondi a 1 mese</h4>
				<div class="flRight"><a href="javascript:;" class="no-underline btn-icon" data-toggle="modal" data-target="#layerInfoTabella"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
					<br class="clear">
				</div>
				<br class="clear">
			</div>

			<table id="tablepeggiori" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
				<thead>
					<tr>
						<th data-field="nomecategoriabrating">Peggiori categorieBRating</th>
						<th data-field="totfondilink" class="center">N.Fondi</th>
						<th data-field="rendimentoformattato" class="right"><nobr>Rendimento %</nobr><br>a 1 mese</th>
					</tr>
				</thead>
			</table>
		</div>


	</div>

	<!-- Fine tabella BS-->

	
	<hr>
		
	<!-- Disclaimer -->
	<p class="note"><sup>*</sup>per rendimento a 1 anno si intende la performance in Euro <strong>a 1 anno all'ultimo NAV (prezzo) disponibile del mese solare precedente.</strong></p><p class="note">Il servizio «Migliori e Peggiori»
	classifica e aggiorna periodicamente i rendimenti conseguiti dai
	Fondi e comparti di SICAV e dalle Categorie BRating FIDA nella
	"Top 10 Fondi" e "Categorie Migliori e Peggiori".<br>
	I rendimenti passati dei singoli Fondi e/o Comparti di SICAV e delle
	Categorie BRating FIDA non sono indicativi di quelli futuri e non
	hanno, pertanto, alcun scopo previsionale per il futuro.<br>
	Le informazioni riportate non costituiscono una raccomandazione o un
	consiglio personalizzato di investimento trattandosi di indicazioni
	basate su criteri di carattere oggettivo e, per tale ragione,
	generiche e non riconducibili alle specifiche caratteristiche del
	singolo investitore. I singoli Fondi Comuni d'Investimento e/o
	comparti di SICAV indicati volta per volta nel servizio
	"Migliori e Peggiori" possono avere
	caratteristiche e profili di rischio diversi, facilmente valutabili
	dalla lettura del KIID (Key Investor Information Document)
	disponibile sul sito prima della sottoscrizione. I dati inerenti ai
	rendimenti dei Fondi o Comparti di SICAV, e del relativo benchmark o
	di categoria ove presente, sono al lordo degli oneri fiscali.<br>
	Tutti i	dati e le informazioni presenti su questa pagina sono di titolarità
	di FIDA S.r.l., che pertanto è responsabile dell'esattezza e
	veridicità dei dati forniti e/o elaborati. L'utilizzo a qualsiasi
	titolo dei dati, delle informazioni e delle notizie ricevute dal
	Cliente è pertanto a completo rischio del Cliente. Qualsiasi
	riproduzione, diffusione, comunicazione o utilizzo dei medesimi è
	vietata al di fuori delle finalità previste.
</p>

	<!-- Fine disclaimer -->

</section>
<!-- Fine contenuti della pagina -->

