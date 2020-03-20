<?php
$codSoc = $_GET['codSoc'];
$selTab = $_GET['selTab'];
if (empty($codSoc)) {
	$codSoc = "10";
}
if (empty($selTab )) {
	$selTab = "tempi";
}

?>
<script type="text/javascript">

	/* VARIABILI SVILUPPO */
	/* Inserire qui il codice per recuperare la societa' di gestione di default oppure quello tratto da eventuali dati in post */
	var codSoc = "<?php print ($codSoc) ; ?>";

	/* Url per le varie chiamate in AJAX*/
	var urlDett = {
		"tempi":  "/include/ajax/fes_tempi_costi_tempi.php",
		"costi":  "/include/ajax/fes_tempi_costi_costi.php",
		"invmin": "/include/ajax/fes_tempi_costi_invmin.php",
	}


	/* Funzione di caricamento di una scheda dati */
	var sodDataGet = function(tab) {

		var tCont =  $("#tab_dett_" + tab);

		$("#dettSoc").addClass("loading");
		$.ajax({
			url: urlDett[tab],
			dataType: "html",
			success: function(data) {
				tCont.html(data).addClass("inited");
				textAccordionInit();
				$("#dettSoc").removeClass("loading");
			}
		})


	};


	/* Interazioni della pagina */
	$(function(){

		$("#selectSocietaGestione").val("<?php print $codSoc; ?>").change(function(){
				// Effettuare qui il redirect con il nuovo dato oppure passarlo in POST tramite il campo #selectSoc
				location.href= "/template/strutt_<?= $site ?>.php?tpl=tpl_responsive_fes_tempi_costi.php&codSoc=" + $(this).val() + "&selTab=" + $("#dettSoc .tabWrapper .on a").attr("data-tab");

		});

		/* Caricamento dati alla pressione dei tab */
		$("*[data-tab]").click(function(){
			var tab = $(this);
			var dtype = tab.attr("data-tab");
			if(dtype != "tassazione") {
				var dCont = $("#tab_dett_" + dtype);
				if (!dCont.hasClass("inited")) sodDataGet(dtype);
			}
			else {
				$("#dettSoc").removeClass("loading");
			}
		});

		/* Caricamento dei dati di default all'atterraggio in pagina*/
		var selectedTab = $("*[data-tab='<?php print($selTab);?>']");
		selectedTab.trigger("click");
		resizeTab('dettSoc',$("*[data-tab]").index(selectedTab));

	});

</script>


<h2>Tempi e costi</h2>
<!-- Testo introduttivo -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero culpa corporis consequuntur aspernatur doloribus adipisci rem accusantium vero fuga aliquid, provident nam modi, ex dolorem.</p>
<!-- Fine testo introduttivo -->
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius <strong>mollitia</strong> quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
	<li>Amet, consectetur adipisicing elit. Eius mollitia quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
</ul>
<p>Seleziona la società di gestione per visualizzarne le tempistiche operative.</p>
<form class="formGenerico borderFormRounded" role="form">
	<div class="form-group">
        <div class="row">
        	<div class="col-xs-12">
        		<label class="control-label">Societ&agrave; di gestione</label>
        		<div class="row">
					<div class="col-md-9 col-xs-12 requiredField">
		                <select name="" class="form-control" id="selectSocietaGestione">
		                	<option value="190" <?php if($codSoc=="190") print("selected"); ?>>Algebris Ucits Funds plc</option>
							<option value="10" <?php if($codSoc=="10") print("selected"); ?>>Allianz Global Investors Lux.</option>
							<option value="7017" <?php if($codSoc=="7017") print("selected"); ?>>Amundi Funds</option>
							<option value="144" <?php if($codSoc=="144") print("selected"); ?>>Anima Asset Management ltd</option>
							<option value="888"  <?php if($codSoc=="888") print("selected"); ?>>Anima Sgr Spa</option>
							<option value="900" <?php if($codSoc=="900") print("selected"); ?>>BlackRock (Luxembourg) S.A.</option>
							<option value="125" <?php if($codSoc=="125") print("selected"); ?>>Carmignac Gestion</option>
							<option value="126" <?php if($codSoc=="126") print("selected"); ?>>Carmignac Portfolio Sicav</option>
							<option value="380" <?php if($codSoc=="380") print("selected"); ?>>Morgan Stanley Investment Fund</option>
							<option value="180" <?php if($codSoc=="180") print("selected"); ?>>NN(L) Investment Funds</option>
							<option value="901" <?php if($codSoc=="901") print("selected"); ?>>Pictet Funds (Europe) S.A.</option>
							<option value="7014" <?php if($codSoc=="7014") print("selected"); ?>>Pimco Funds Gl.Inv. Series Plc</option>
							<option value="195" <?php if($codSoc=="195") print("selected"); ?>>Raiffeisen Capital Management</option>
							<option value="902" <?php if($codSoc=="902") print("selected"); ?>>Schroder Int. Selection Fund</option>
		                </select>
		            </div>
		            <div class="col-md-3 col-xs-12">
		              	<a type="button" class="btn btn-primary" href="#">vedi tutti i fondi</a>
		            </div>
        		</div>
        	</div>
        </div>
    </div>
</form>


<?php /*

MODO GRAFICO

<p>Seleziona la società di gestione per visualizzarne le tempistiche operative.</p>

<!-- Modale selettore societa' di gestione -->
<div class="modal fade" id="selectSoc" tabindex="-1" role="dialog" aria-labelledby="selectSocLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="selectSocLabel">Societ&agrave; di gestione</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">

							<div class="formGenerico borderFormRounded pad_bottom_0" role="form">
		                        <div class="caseGest form-group last">
		                            <div class="caseGestWrap selector-wrap selector-mini selector-casegestione" data-input-type="radio" data-input-name="selectSocField">
		                                <input id="selectSocField" name="selectSocField" type="hidden" value="10">
			                            <div class="selector-box " data-value="5"><img src="/fe/img/lgsoc_algebris.png" class="img100"></div>
			                            <div class="selector-box" data-value="10"><img src="/fe/img/lgsoc_allianz.png" class="img100"></div>
			                            <div class="selector-box" data-value="15"><img src="/fe/img/lgsoc_amundi.png" class="img100"></div>
			                            <div class="selector-box" data-value="20"><img src="/fe/img/lgsoc_prima_new.png" class="img100"></div>
			                            <div class="selector-box " data-value="30"><img src="/fe/img/lgsoc_anima_new.png" class="img100"></div>
			                            <div class="selector-box " data-value="40"><img src="/fe/img/lgsoc_blackrock.png" class="img100"></div>
			                            <div class="selector-box " data-value="50"><img src="/fe/img/lgsoc_carmignac_fondi.png" class="img100"></div>
			                            <div class="selector-box " data-value="60"><img src="/fe/img/lgsoc_carmignac_port.png" class="img100"></div>
			                            <div class="selector-box " data-value="65"><img src="/fe/img/lgsoc_threadneedle.png" class="img100"></div>
			                            <div class="selector-box " data-value="70"><img src="/fe/img/lgsoc_dws.png" class="img100"></div>
			                            <div class="selector-box " data-value="80"><img src="/fe/img/lgsoc_epsilon.png" class="img100"></div>
			                            <div class="selector-box " data-value="90"><img src="/fe/img/lgsoc_etica.png" class="img100"></div>
			                            <div class="selector-box " data-value="100"><img src="/fe/img/lgsoc_eurizon.png" class="img100"></div>
			                            <div class="selector-box " data-value="110"><img src="/fe/img/lgsoc_fidelity.png" class="img100"></div>
			                            <div class="selector-box " data-value="120"><img src="/fe/img/lgsoc_franklin.png" class="img100"></div>
			                            <div class="selector-box " data-value="125"><img src="/fe/img/lgsoc_jb.png" class="img100"></div>
			                            <div class="selector-box " data-value="130"><img src="/fe/img/lgsoc_hsbc.png" class="img100"></div>
			                            <div class="selector-box " data-value="140"><img src="/fe/img/lgsoc_invesco.png" class="img100"></div>
			                            <div class="selector-box " data-value="150"><img src="/fe/img/lgsoc_janus.png" class="img100"></div>
			                            <div class="selector-box " data-value="160"><img src="/fe/img/lgsoc_jpmorganam.png" class="img100"></div>
			                            <div class="selector-box " data-value="170"><img src="/fe/img/lgsoc_jpminv.png" class="img100"></div>
			                            <div class="selector-box " data-value="180"><img src="/fe/img/lgsoc_legg_mason.png" class="img100"></div>
			                            <div class="selector-box " data-value="190"><img src="/fe/img/lgsoc_lombard_odier.png" class="img100"></div>
			                            <div class="selector-box " data-value="200"><img src="/fe/img/lgsoc_mg.png" class="img100"></div>
			                            <div class="selector-box " data-value="210"><img src="/fe/img/lgsoc_morganstanley.png" class="img100"></div>
			                            <div class="selector-box " data-value="215"><img src="/fe/img/lgsoc_nn.png" class="img100"></div>
			                            <div class="selector-box " data-value="220"><img src="/fe/img/lgsoc_pictet.png" class="img100"></div>
			                            <div class="selector-box " data-value="230"><img src="/fe/img/lgsoc_pimco.png" class="img100"></div>
			                            <div class="selector-box " data-value="235"><img src="/fe/img/lgsoc_raffeisen.png" class="img100"></div>
			                            <div class="selector-box " data-value="240"><img src="/fe/img/lgsoc_schroders.png" class="img100"></div>
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

<!-- Finde della modale selettore societa' di gestione -->

<!-- Blocco dettaglio societa' di gestione -->
<div class="formGenerico borderFormRounded fundPanel fundPanelImg">
	<!-- Blocco descrittivo -->
	<img src="/fe/img/lgsoc_allianz.png" class="imgSoc">
	<div class="row">
		<div clas="col-sm-10">

			<div class="row">
				<div class="col-xs-12">
					<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit EUR</h4>
				</div>
			</div>

			<!-- Blocco operativo -->
			<div class="row btconsole">
				<div class="col-xs-12">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" data-toggle="modal">vedi i fondi</a>
		                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectSoc">cambia societ&agrave;</a>
		            </div>
				</div>
			</div>
			<!-- Fine blocco operativo -->

		</div>
	</div>
</div>
<!-- Fine blocco selettore -->

*/ ?>

<div class="navContSecondLev loading" id="dettSoc">
	<div class=" outerTab">
		<ul class="tabWrapper tabsmall hidden-xs">
			<li class="<?php if($selTab=="tempi") print ("on"); ?>"><a href="#heading_tempi" data-tab="tempi">Tempi</a></li>
			<li class="<?php if($selTab=="costi") print ("on"); ?>"><a href="#heading_costi" data-tab="costi">Costi e commissioni</a></li>
			<li class="<?php if($selTab=="invmin") print ("on"); ?>"><a href="#heading_invmin" data-tab="invmin">Investimenti minimi</a></li>
			<li class="<?php if($selTab=="tassazione") print ("on"); ?>"><a href="#heading_tassazione" data-tab="tassazione">Tassazione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-group panel-fill" id="accordion_tempi" role="tablist" aria-multiselectable="true">
		<div class="panel">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading_tempi">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion_tempi"  data-tab="tempi" href="#collapse_tempi" aria-expanded="false" aria-controls="collapse_tempi" class="collapsed">Tempi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse_tempi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tempi">
				<div class="panel-body">
					<div class="tab-wrap" id="tab_dett_tempi"></div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading_costi">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion_costi"  data-tab="costi" href="#collapse_costi" aria-expanded="false" aria-controls="collapse_costi" class="collapsed">Costi e commissioni<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse_costi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_costi">
				<div class="panel-body">
					<div class="tab-wrap" id="tab_dett_costi"></div>
				</div>
			</div>
		</div>

		<div class="panel ">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading_invmin">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion_invmin" data-tab="invmin" href="#collapse_invmin" aria-expanded="false" aria-controls="collapse_invmin" class="collapsed">Investimenti minimi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse_invmin" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_invmin">
				<div class="panel-body">
					<div class="tab-wrap" id="tab_dett_invmin"></div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="panel-heading visible-xs" role=" tab"="" id="heading_tassazione">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion_tassazione" href="#collapse_tassazione" aria-expanded="false" aria-controls="collapse_tassazione" class="collapsed">Tassazione<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
				</h4>
			</div>
			<div id="collapse_tassazione" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tassazione">
				<div class="panel-body">
					<div class="tab-wrap inited" id="tab_dett_tassazione">
						<!-- Tassazione -->
						<h3>Regime fiscale</h3>
							<p>Con riferimento agli artt.  3 e 4 del DL n.66/2014  convertito nella Legge n. 89/2014, <b>a decorrere dal 1° luglio 2014,</b> i proventi realizzati in fondi comuni d'investimento e Sicav, saranno  tassati <b>al 20% per la parte maturata fino al 30 giugno 2014  e al 26% per la parte maturata dopo tale data.</b> Se nei Fondi e Sicav sono presenti  "<b>titoli privilegiati</b>" soggetti all'aliquota del 12,50% ovvero Titoli di Stato italiani e con regime equiparato, Obbligazioni emesse da stati esteri se compresi nella c.d. "White List", Obbligazioni emesse da enti sovranazionali,  viene mantenuta  la riduzione della base imponibile per tenere conto della minore tassazione applicata a questi strumenti.<br><br>Con la nuova tassazione, il criterio di maturazione si applica  solo se al momento del rimborso delle quote di Fondi e  Sicav  avvenuto dopo il 30 giugno 2014, si realizza un provento positivo (reddito di capitale),  mentre in caso di minusvalenza (redditi diversi)  si applica per intero  al 26%.<br><br>
							Per i Fondi e Sicav è prevista una procedura di <b>affrancamento "automatico"</b> che consente in sede di rimborso, cessione o liquidazione delle quote, l'applicazione dell'aliquota del 26% sui proventi realizzati dopo il 1 luglio 2014 e del 20% sui proventi realizzati dopo il 1 luglio 2014 che sono riferiti a valori maturati fino al 30 giugno 2014.
							</p>
							<h4>Come si applica la tassazione dal 1° luglio 2014</h4>
							<p>Alla data del <b>30 giugno 2014</b> viene calcolato e costituito il c.d. "<b>zainetto fiscale</b>" come reddito di capitale da tassare al 20%  pari, al massimo,  alla moltiplicazione delle quote possedute al 30 giugno 2014 per il provento unitario alla medesima data (differenza tra il prezzo al 30 giugno 2014 e il prezzo medio di carico). Ad esempio:<br><br>Rilevamento situazione fiscale delle quote di fondi o azioni di comparti di Sicav <b>al 30 giugno 2014.</b></p>

							<table>
							    <tr>
							       <th colspan="2" class="left">Esempio di lorem ipsum</td>
							   </tr>
							    <tr class="dispari">
							      <td width="75%"><strong>N. quote vendute  dopo 30 giugno 2014</strong></td>
							      <td width="25%" class="right">80</td>
							   </tr>
							   <tr class="pari">
							      <td width="75%"><strong>Prezzo di vendita unitario</strong></td>
							      <td width="25%" class="right"> €  25 </td>
							    </tr>
							    <tr class="dispari">
							      <td width="75%"><strong>Ricavo</strong></td>
							      <td width="25%" class="right"> €  2.000</td>
							    </tr>
							    <tr class="pari">
							      <td width="75%"><strong>Costo d'acquisto</strong> <i>(80 quote x 15 euro Prezzo acquisto)</i></td>
							      <td width="25%" class="right"> €  1.200</td>
							    </tr>
							    <tr class="dispari">
							      <td width="75%"><strong>Reddito di capitale realizzato</strong></td>
							      <td width="25%" class="right"> €  800</td>
							    </tr>
							</table>

							<p>
								<i>La ritenuta applicata ai  primi €500 (da zainetto) sarà al 20% mentre ai € 631 verrà applicata l'aliquota del 26%. Residuo zainetto  azzerato.</i>
							</p>
							<p>
								<b>Switch:</b> in base alla direttiva 2009/65/CE (UCITS IV), dal 1 luglio 2011 le operazioni di conversione (switch) sono considerate fiscalmente rilevanti al <b>pari delle operazioni di rimborso.</b> Tutte le operazioni di switch vengono convertite  prima in un'operazione di <b>rimborso (switch out)</b> e successivamente in un'operazione di <b>sottoscrizione (switch in)</b> per l'importo, in caso di plusvalenza, al netto della ritenuta del 26% dal 1 luglio 2014 (come sopra riportato). L'importo della ritenuta viene calcolato, trattenuto e pagato dalla Banca Corrispondente in qualità di sostituto d'imposta.
							</p>


							<!-- PPRINT BOX 4 -->



							<h4>Compensazione minusvalenze con plusvalenze</h4>
							<p>
								In caso di minusvalenze realizzate fino al 30 giugno 2014 queste potranno essere utilizzate per compensare le plusvalenze realizzate dal 1° luglio 2014 limitatamente al 76,92% (rapporto tra aliquote del 20% e 26%) del loro valore, mentre in caso di minusvalenze realizzate prima del 1° gennaio 2012 su "<b>titoli privilegiati</b>" potranno essere utilizzate per la compensazione per il 48,08% (rapporto tra aliquote del 12,50% e 26%). Questa diminuzione della percentuale è stata prevista dalla legge per rendere omogeneo il valore delle minusvalenze realizzate in periodi in cui erano applicate aliquote diverse (<b>12,5%</b> fino al 31/12/2011,<b> 20%</b> dal 01/01/2012 fino al 30/06/2014) con il valore delle minusvalenze che si genereranno dal 1° luglio 2014.
								<br>
								<b>Nel risparmio gestito</b> (Fondi e Sicav) le plusvalenze costituiscono "<b>redditi di capitale</b>"  e  le minusvalenze "<b>redditi diversi</b>". <b>Nell'amministrato</b> (titoli azionari, obbligazioni) le plusvalenze e le minusvalenze costituiscono <b> entrambi "redditi diversi"</b>. <br>La normativa fiscale consente di compensare le  minusvalenze esclusivamente con plusvalenze<b> aventi stessa natura</b>. Le plusvalenze conseguite in titoli (ad es. azioni/obbligazioni) sono compensabili nell'arco di un periodo di 4 anni con minusvalenze realizzate in Fondi e Sicav in quanto di medesima natura (entrambi considerati redditi diversi).
								Non è  consentita l'operazione inversa ovvero la compensazione di  minusvalenze (redditi diversi) realizzate in titoli (azioni/obbligazioni) con plusvalenze (reddito di capitale) realizzate in Fondi e Sicav in quanto di regime differente.  Tale compensazione è possibile i clienti che hanno optato per il regime fiscale  "amministrato".
							</p>

							<h4>Tassazione e vantaggi fiscali per chi investe in fondi PIR-Compliant</h4>
							<p>
								<b>I Piani Individuali di Risparmio</b>, detti anche <b>PIR</b>, sono una nuova forma di investimento, introdotta dalla Legge 11 dicembre 2016, n. 232  (Legge di Bilancio 2017), che permette di ottenere <b>incentivi fiscali sulla tassazione delle rendite finanziarie (plusvalenza) e di successione</b>. I PIR sono <b>riservati alle singole persone fisiche</b>, residenti fiscalmente in Italia, e sono a tutti gli effetti dei "contenitori" nei quali possono essere inseriti diversi tipi di strumenti finanziari, quali: <b>fondi comuni d'investimento</b>, contratti assicurativi, gestioni patrimoniali o dossier titoli. <b>I Fondi PIR, detti anche Fondi PIR-compliant, sono "investimenti qualificati" e conformi alla disciplina PIR, come definita dalla "Legge di Bilancio 2017"</b>.
							<br>
								Investire in un Fondo PIR consente di ottenere due vantaggi fondamentali:
							</p>
							<ul>
								<li><b>100% di esenzione dalla tassazione</b> su utili, interessi, cedole e dividendi generati dall'investimento ( plusvalenze  tassate tra  il 26% e il 12,50%,);</li>
								<li><b>100% di esenzione</b> delle <b>imposte di successione</b>.</li>
							</ul>

							<h4>Quali condizioni da rispettare per ottenere le agevolazioni del PIR?</h4>
							<ul>
								<li><b>orizzonte temporale dell'investimento</b>: un PIR deve essere mantenuto in portafoglio per almeno 5 anni;</li>
								<li><b>ammontare investito</b>:  l'investimento massimo annuale è di 30.000 € , per un totale complessivo di 150.000 €.</li>
							</ul>


						<!-- Fine tassazione -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="btn-align-right">
    <a type="button" class="btn btn-primary" href="#">vedi tutti i fondi</a>
    <br class="clear">
</div>
