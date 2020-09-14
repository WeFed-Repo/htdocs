<script type="text/javascript" src="/HT/fe/asset/amcharts/amcharts.js" ></script>
<script type="text/javascript" src="/HT/fe/asset/amcharts/serial.js"></script>
<script type="text/javascript" src="/HT/fe/asset/amcharts/lang/it.js"></script>
<script type="text/javascript" src="/HT/fe/asset/amcharts/plugins/responsive/responsive.min.js"></script>
<script type="text/javascript" src="/HT/fe/js/script/dashboard_graph.js"></script>
<!-- LOADER SCRIPT PAR-TEC -->
<script type="text/javascript" src="/common/fe/js/trading_loader.js"></script>
<script type="text/javascript">
	$(document).on("isTolLoaded",function(){alert("tol loaded")})
</script>
<div id="dbgraphwrapper">
	<!-- CONSOLE DEL GRAFICO -->
	<div id="dbgraphconsole">
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<!-- ES RAPPORTO SINGOLO -->
				<!--
					<div class="selector">
					<input type="hidden" id="rappid" value="1156456456566555" />	
					<div class="selector-btn selector-el">
						<span class="nome">Giovanni Spadolini</span>
						<span><span class="conto">Conto </span><span class="selrappconto">56566555</span>
					</div>
				</div>
				-->
				<!-- FINE ESEMPIO RAPPORTO SINGOLO -->
				
				<div class="dropdown selector" id="selrapp">
					<input type="hidden" id="rappid" value="1156456456566555" />	
					<div class="selector-btn selector-el" data-toggle="dropdown">
						<span class="nome">Giovanni Spadolini</span>
						<span><span class="conto">Conto </span><span class="selrappconto" title="seleziona il conto">56566555</span>
					</div>
					<div class="dropdown-menu selector-els">
						<a 	class="selector-el selected" data-idel="1156456456566555">
							<span class="nome">Giovanni Spadolini</span>
							<span><span class="conto">Conto </span><span class="selrappconto selected">56566555</span></span>
						</a>
						<a class="selector-el" data-idel="1156456456566579">
							<span class="nome">Nadia Bianchi</span>
							<span><span class="conto">Conto </span><span class="selrappconto">56566579</span></span>
						</a>
						<a class="selector-el" data-idel="1156456456566779">
							<span class="nome">Mario Verdi</span>
							<span><span class="conto">Conto </span><span class="selrappconto">56566779</span></span>
						</a>
						<a class="selector-el" data-idel="1156456456566871">
							<span class="nome">Mario Verdi</span>
							<span><span class="conto">Conto </span><span class="selrappconto">56566871</span></span>
						</a>
						<a class="selector-el" data-idel="1156456456566872">
							<span class="nome">Mario Verdi</span>
							<span><span class="conto">Conto </span><span class="selrappconto">56566872</span></span>
						</a>

						<a class="selector-el" data-idel="12345678">
							<span class="nome">Alessandro Ambrosi</span>
							<span><span class="conto">Conto </span><span class="selrappconto">56566871</span></span>
						</a>


					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-6">

				<!-- BOTTONE GRANDE -->
				<div id="dayselector" class="btn-group-wrap hidden-sm  hidden-xs">
					 <input type="hidden" value="30" id="numerogiorni">
					<div class="btn-group" role="group" aria-label="giorni" >
						<button type="button" class="btn btn-secondary selected" data-numerogiorni="30">30 giorni</button>
						<button type="button" class="btn btn-secondary" data-numerogiorni="90">90 giorni</button>
						<button type="button" class="btn btn-secondary" data-numerogiorni="180">180 giorni</button>
					</div>
				</div>
				<!-- BOTTONE MULTISELETTORE -->

				<!-- SELECT ALTERNATIVA -->
				<select id="numerogiorniselect" class="form-control hidden-md hidden-lg hidden-xl">
					<option selected value="30">30 GIORNI</option>
					<option value="90">90 GIORNI</option>
					<option value="180">180 GIORNI</option>
				</select>

				<!-- FINE SELECT ALTERNATIVA -->
			</div>
		</div>
		<div class="row riepilogo">
			<div id="saldo">
				<span class="saldoal"></span>
				<span class="cifra"></span>
			</div>
			<div id="saldomovimenti">
				<div class="movimenti">
					<div class="blocco entrate">
						<span class="label">Entrate</span><span class="cifra"></span>
					</div>
					<div class="blocco uscite">
						<span class="label">Uscite</span><span class="cifra"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FINE CONSOLE DEL GRAFICO -->
	<!-- SPAZIO PER IL PLOT DEL GRAFICO -->
	<div id="dbgraphcontainer">
		<div id="dbgraph"></div>
	</div>
	<!-- FINE SPAZIO PLOT DEL GRAFICO -->
</div>
	
		<script type="text/javascript" src="/HT/fe/js/script/dashboard_widgets.js"></script>
		<div class="dashboard-widgets">

			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Sintesi patrimoniale/oggetto.php"); ?>
				</div>
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Ultimi movimenti/oggetto.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Titoli preferiti/oggetto.php"); ?>
				</div>
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Sintesi portafoglio/oggetto.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Conto/oggetto.php"); ?>
				</div>
					<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Carte/oggetto.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Posta/oggetto.php"); ?>
				</div>
					<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Calendario/oggetto.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Indici/oggetto.php"); ?>
				</div>
				<div class="col-sm-6 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Promo/oggetto.php"); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<?php virtual ("/include/oggetti/Widget home/NEW Widget Promo/oggetto.php"); ?>
				</div>
			</div>
		</div>

		<!-- Pulsante cta personalizzazione -->
		<div class="row">
			<div class="col-xs-12">
				<a class="cta personalizza" href="#"><span class="icon icon-piu"></span>Clicca qui per aggiungere widget e personalizzare la tua dashboard</a>
			</div>
		</div>
		<!-- Fine pulsante cta personalizzazione -->
		
