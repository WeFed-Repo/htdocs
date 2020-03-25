<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>

<h2>Migliori e peggiori</h2>

<!-- Navigazione in pagina -->
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class="on"><a>Top 10 fondi</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_topandflops_categorie.php&responsive=y&liv0=4&liv1=2&liv2=3&liv3=1">Categorie migliori e peggiori</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<!-- Fine navigazione in pagina -->


<!-- Contenuti della pagina -->
<section id="tfTop10Wrap" class="loading">

	<p>Nella tabella sotto sono classificati i <strong>primi 10 Fondi e comparti di Sicav per miglior rendimento a 1 anno.<sup>*</sup></strong><br>
	La classifica è aggiornata <strong>su base mensile</strong> e seleziona solo i migliori Fondi e Comparti di Sicav disponibili nell'offerta Webank.<br><br>
	Cliccando sul singolo fondo visualizzerai la scheda di dettaglio del fondo prescelto.
	</p>

	<!-- Selettore per visualizzazione -->
	<script type="text/javascript">
		// Inizializzazione variabili
		var tfT10Url = "/librerie/include/commons/ajax/fes/fesFlopAndTop.php";

		// Variabili locali della pagina
		var tfData,
		tfTitleTypes = {
			"all":"",
			"azionari":"azionari",
			"obbligazionari":"obbligazionari",
			"flessibili":"flessibili",
			"corone5": "con 5 corone FIDA"
		}



		// Simulazione chiamate e automazioni
		// Caricamento dei valori della top10
		var tfTop10Load = function() {
			$("#tfTop10Wrap").addClass("loading");
			
			
			$.ajax({

				url: tfT10Url,
				dataType: "json",
				// Completare con i parametri corretti
				data: {
					tiporichiesta:"top10" 	// nella pagina TopFlop e' topflop				
				},
				success: function(data) {
					$("#tfTop10Wrap").removeClass("loading");
					tfData = data.data;
					$("#tfSelect").trigger("change");
				},
				error: function(e) {
					alert("Si sono verificati problemi durante il recupero dei dati. Riprovare piu' tardi.");
					$("#tfTop10Wrap").removeClass("loading");
				}

			});

		}

		// Consultazione dei valori della top10
		var tfTop10 = function() {
			$("#tfTop10Wrap").addClass("loading");
			var tData = tfData[$(this).val()];
			$("#titTipoFondo").html(tfTitleTypes[$(this).val()])

			// Modifica i dati per la visualizzazione (appende icona operativa)
			$.each(tData,function(i,v){


				// Link a scheda fondo (accordare i parametri necessari e l'url corretto qui)
				tData[i].linkfondo = "<a href=\"/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_scheda_fondo.php&responsive=y&liv0=4&liv1=2&liv2=6&liv3=1\" title=\"Vedi fondo " + v.nome + "\">" + v.nome + "</a>"

				// Rating visuale
				var rcor = "<div class='rating large'>";
				for (x=1;x<=5;x++) {
					rcor += "<i class='icon icon-corona " + ((v.rating>=x)? "icon-corona-on":"") + "'></i>";
				} 
				rcor += "</div><div class='rating small rate"+ v.rating +"'><div class='bg'></div><span>"+ v.rating +"</span></div>";
				
				tData[i].ratingcorone = rcor;

				tData[i].rendimentoformattato = formatNumber(v.rendimento);

				// Icona operativa
				tData[i].ico = "<a class=\"linkVai\" title=\"scegli l'operazione da effettuare\" href=\"javascript:;\" codicesocieta=\""+ v.codicesocieta + "\" codicecomparto=\""+v.codicecomparto+"\" fondosicav=\""+v.fondosicav+"\" data-fundname=\""+ v.nome +"\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a>"

			});

			// Popola la tabella bs
			$tableTop10.bootstrapTable("load",tData);


			$("#tfTop10Wrap").removeClass("loading");
		}

		// Inizializzazione

		$(function(){

			tfTop10Load();

			$("#tfSelect").change(tfTop10);

			// Inizializzazione generica tabella di Bootstrap
			$tableTop10 = $("#tableTop10").bootstrapTable({

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
			// Automazione icona operativa
			$tableTop10.on("post-body.bs.table", function(){ $(".linkVai").click(fesIcoOpeOverlay);});

		});

	</script>

	<form class="formGenerico borderFormRounded" role="form">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label-output">Visualizza</label>
					<select name="" class="form-control" id="tfSelect">
						<option selected value="all">Tutti</option>
						<option value="azionari">Azionari</option>
						<option value="obbligazionari">Obbligazionari</option>
						<option value="flessibili">Flessibili</option>
						<option value="corone5">5 corone</option>
					</select>
				</div>
			</div>
		</div>
	</form>

	<!-- Fine selettore per visualizzazione -->

	<!-- Modale informativa per tabelle -->
	<div class="modal fade" id="layerInfoTabella" tabindex="-1" role="dialog" aria-labelledby="layerInfoTabellaLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="layerInfoTabellaLabel">Top 10 fondi</h2>
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

	<!-- Fine modale informativa per tabella -->




	<!-- Tabella BS-->

	<div class="tithelp">
		<h4>Top 10 fondi <span id="titTipoFondo"></span> a 1 anno</h4>
		<div class="flRight"><a href="javascript:;" class="no-underline btn-icon" data-toggle="modal" data-target="#layerInfoTabella"><i class="icon icon-info_fill icon-2x inited" data-toggle="tooltip" data-title="lorem ipsum dolor sit" data-original-title="" title=""></i></a>
			<br class="clear">
		</div>
		<br class="clear">
	</div>

	<table id="tableTop10" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
	     <thead>
	        <tr>
	        	<th data-field="ico" class="center icopad"></th>
	            <th data-field="linkfondo">Nome</th>
	            <th data-field="nomecategoriabrating">Categoria BRating</th>
	            <th data-field="ratingcorone">Rating</th>
	            <th data-field="rendimentoformattato" class="right">Rend. %<br><nobr>a 1 anno</nobr></th>
	        </tr>
	     </thead>
	</table>

	<!-- Fine tabella BS-->

	<!-- Pulsantiera -->

	<div class="form-group">
	    <div class="row">
	      <div class="col-xs-12">
	        <div class="btn-align-right">
	        	<a type="button" class="btn btn-primary">formato Excel</a>
	          <a type="button" class="btn btn-primary">stampa</a>
	        </div>
	      </div>
	    </div>
	</div>

	<!-- Fine pulsantiera -->
	

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

