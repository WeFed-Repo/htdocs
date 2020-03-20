<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="it-IT" xml:lang="it-IT">
<head>
	<title>Webank - Pagamento F24</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />





<meta charset="utf-8">
<meta name="description" content=""/>
<meta http-equiv="x-ua-compatible" content="IE=edge" >

<!-- MOBILE -->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!-- Allows fullscreen mode from the Homescreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Sets the color of the text/battery, wireless icons etc -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- / MOBILE -->

<!-- FAVICON -->
<link rel="icon" href="/WB/fe/img/favicon.ico">
<link rel="manifest" href="/manifest.json">
<meta name="apple-mobile-web-app-title" content="Webank Resp">
<meta name="application-name" content="Webank Resp">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- / FAVICON -->


<!-- CSS -->
<link rel="stylesheet" media="all" href="/common/fe/assets/bootstrap/bootstrap.css">
<link rel="stylesheet" media="all" href="/common/fe/assets/jquery/jquery-ui_ng.min.css">
<link rel="stylesheet" media="all" href="/common/fe/css/main.css?v=161220">

<!-- Css strutturale -->
<link href="/WB/fe/css/webank_struttura.css?v=161220" rel="stylesheet" type="text/css" media="all">
<link href="/WB/fe/css/webank_base.css?v=161220" rel="stylesheet" type="text/css" media="all">
<link href="/WB/fe/css/webank_generic.css?v=161220" rel="stylesheet" type="text/css" media="all">

<link href="/WB/fe/css/webank_skin.css?v=161220" rel="stylesheet" type="text/css" media="screen" />
<link href="/common/fe/css/print.css?v=161220" rel="stylesheet" type="text/css" media="print" />
<!-- / CSS -->





<script type="text/javascript">
	// Variabili per ambiente, riporta le chiavi del navigatore selezionate
	var navIndex = ['0'];

	var sectionTitle = "Webank";

	// Variabili per emulazione
	var cgi_script = "/webankpri";
	var imgPath = '/img/ret/';
	var pDis = true;
	var pCP = false;
	var abilOroCap = true;
	var isWebank = true;
	var hasCarte = false;
	var isComunita200Mov = true;
	var rbfLinkObj = {
		'bonifico': 'BON',
		'giroconto': 'GIR',
		'carta': 'PRJ'
	};
</script>

<!-- JS -->
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.dateIT.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.altImg.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.formattedNum.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.selectToUISlider.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap-table.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/ie10-viewport.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jsapi.js "></script>
<script type="text/javascript" language="javascript" src="/common/fe/js/funzioni_convergenza.js?v=161220"></script>
<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161220"></script>

<script type="text/javascript" language="javascript" src="/WB/fe/js/funzioniWB.js?v=161220"></script>

<!-- JS LIBRERIE (non includere in sviluppo) -->
<!-- <script type="text/javascript" src="/WB/fe/js/priv_librerie.js"></script>  -->
<!-- FINE JS LIBRERIE -->




<!-- <script type="text/javascript">
	if (navIndex.length>2)
		{ sectionTitle = menuData[navIndex[0]].voices[navIndex[1]].title;}
	else if (navIndex.length==1)
		{ sectionTitle = menuData[navIndex[0]].title;}
</script>
 -->
<!-- /JS -->

<script type="text/javascript">
function getPathImages() { return "/WB/IMAGES/";}
function getPathImagesFe() { return "/WB/fe/img/";}
function getPathContext() {	return "/WEBWB";}
function getKBanca() {	return "1";}
function getLineaTol() {	return "";}


</script>


	<style type="text/css">
			div#headerF24 {
				position: fixed;
				top: 0px;
				width: 100%;
				height: 113px;
			}

			/* iframe itself */
			div#headerF24 > iframe {
				display: block;
				width: 100%;
				/*height: 100%;*/
				border: none;
			}

			/* iframe's parent node */
			div#contentF24 {
 				position: absolute;
 				top: 113px; /* Change with Height of #header */
     			bottom: 0px;
				width: 100%;
			}
	</style>
</head>
<body>
 	<div id="headerF24">
		<iframe src="/template/f24/header_f24.php?m=f24root_wb::wb_f24f23pag::wb_f24f23intro::wb_f24f23_intro_modelli"></iframe>
	</div>

	<div id="contentF24" class="scrollable"  style="-webkit-overflow-scrolling: touch;">
		<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
		<div id="main">
			<div class="wrapper">
				<div class="container-fluid">
					<!-- WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
					<div class="row">
						<!--- ############################ CONTENUTI ################################## -->
						<div id="contenuti" class="contenuti col-sm-12 col-md-12 noresp">









<section>














<div class="titolo">
	<h1>
		<div class="row">
			<div class="col-sm-8">
				<!-- TITOLO -->




							<span>Guida</span>










				<!-- /TITOLO -->

				<!-- HELP -->

				<!-- /HELP -->

				<!-- DOCUMENTI OBBLIGATORI MOBILE -->
				<i class="icon icon-documento hidden-sm hidden-md hidden-lg" title="Documenti" id="ico-documenti" style="display:none"></i>
				<!-- /DOCUMENTI OBBLIGATORI MOBILE -->
			</div>


		</div>
	</h1>
</div>




</section>













<script>
	function submitUrl(id, url){

		var idform = "";
		var array = id.split('=');
		if (array.length > 1) {
			idform = array[1];
		} else {
			idform = id;
		}
		$('#'+ idform).attr("action", url);
		$('#'+ idform).submit();

	}
</script>
<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>








							<li class="on">



										<a href="/WEBWB/pagamenti/f24/introduzione.do?tab=modelli"  title="Modelli" role="button">
											Modelli
										</a>


							</li>






							<li class="">



										<a href="/WEBWB/pagamenti/f24/introduzione.do?tab=inserimento"  title="Inserimento" role="button">
											Inserimento
										</a>


							</li>






							<li class="">



										<a href="/WEBWB/pagamenti/f24/introduzione.do?tab=tempistiche"  title="Tempistiche" role="button">
											Tempistiche
										</a>


							</li>






							<li class="">



										<a href="/WEBWB/pagamenti/f24/introduzione.do?tab=note"  title="Note per la compilazione" role="button">
											Note per la compilazione
										</a>


							</li>






							<li class="">



										<a href="/WEBWB/pagamenti/f24/introduzione.do?tab=stati"  title="Possibili stati" role="button">
											Possibili stati
										</a>


							</li>



				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>















<section class="hidden-xs hidden-print">

	<p>&nbsp;</p>
<h4>F24 ordinario</h4>
<p><strong>Il modello F24 ordinario</strong> &egrave; utilizzato da tutti i contribuenti, titolari e non titolari di partita Iva, per il versamento di <strong>tributi, contributi e premi</strong> come:</p>
<ul>
<li>imposte sui redditi e ritenute alla fonte</li>
<li>IMU, IVA, IRAP</li>
<li>addizionale regionale o comunale all'IRPEF</li>
<li>contributi e premi INPS, INAIL, INPGI</li>
<li>interessi in caso di pagamento rateale.</li>
</ul>
<p>Viene inoltre utilizzato per pagare tutte le somme dovute (compresi interessi e sanzioni) in caso di:</p>
<ul>
<li>liquidazione e controllo formale della dichiarazione</li>
<li>avviso di accertamento, di irrogazione sanzioni, di accertamento con adesione (concordato)</li>
<li>conciliazione giudiziale</li>
<li>ravvedimento.</li>
</ul>
<h4>F24 semplificato</h4>
<p>&Egrave; un nuovo <strong>modello di pagamento unificato</strong>, pensato per agevolare i contribuenti che devono effettuare versamenti a favore dell'Erario, delle Regioni e degli Enti locali (come ad esempio l'IMU).</p>
<h4>F24 accise</h4>
<p>Contiene una sezione da utilizzare per il <strong>versamento delle accise</strong>, dei tributi dei Monopoli e di altre somme non ammesse a compensazione. L'accisa &egrave; un'imposta sulla fabbricazione e vendita di prodotti di consumo (es: benzina).</p>
<h4>F24 elementi identificativi</h4>
<p>Noto anche come <strong>F24 IVA immatricolazione auto UE</strong>, &egrave; usato dai rivenditori di autoveicoli di provenienza comunitaria. Viene utilizzato per versamenti per i quali sono necessarie informazioni non riportabili nel modello F24 ordinario.</p>
<h4>F23</h4>
<p>Il <strong>modello F23</strong> &egrave; usato per il versamento di <strong>imposte, tasse e sanzioni</strong>. In particolare per:</p>
<ul>
<li> imposte di registro, ipotecarie e catastali (per esempio, compravendita d'immobili); </li>
<li> imposte sulle successioni e donazioni; </li>
<li> sanzioni inflitte da autorit&agrave; giudiziarie e amministrative (per esempio, diritti di cancelleria e segreteria giudiziaria, multe e contravvenzioni, ecc.); </li>
<li> tasse erariali e demaniali (per esempio, concessioni dei beni del demanio marittimo, militare, ecc.). </li>
</ul>
<p>&nbsp;</p>
<div id="accordion" class="nosort ui-accordion ui-widget ui-helper-reset" role="tablist">
<h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-2" aria-controls="ui-id-3" aria-selected="true" aria-expanded="true" tabindex="0"><i class="icon icon-3x icon-accordion_down"></i> <i class="icon icon-3x icon-accordion_up"></i> <a href="#">Cosa trovo nel Riepilogo F24/F23?</a></h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-id-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: block;">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et <strong>accumsan eros pharetra.</strong> In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula. Ut sed lacinia augue. Curabitur eleifend faucibus enim, nec volutpat erat sagittis ut. <strong>Sed suscipit, ligula efficitur mattis</strong> suscipit, mauris leo euismod est, ullamcorper placerat sem lacus ac sem. Ut ante arcu, placerat eu ante id, suscipit tristique sapien.</p>
</div>
<h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <i class="icon icon-3x icon-accordion_down"></i> <i class="icon icon-3x icon-accordion_up"></i> <a href="#">Come avviene la contabilizzazione?</a></h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et <strong>accumsan eros pharetra.</strong> In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula. Ut sed lacinia augue. Curabitur eleifend faucibus enim, nec volutpat erat sagittis ut. <strong>Sed suscipit, ligula efficitur mattis</strong> suscipit, mauris leo euismod est, ullamcorper placerat sem lacus ac sem. Ut ante arcu, placerat eu ante id, suscipit tristique sapien.</p>
</div>
<h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <i class="icon icon-3x icon-accordion_down"></i> <i class="icon icon-3x icon-accordion_up"></i> <a href="#">Come posso revocare una delega?</a></h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et <strong>accumsan eros pharetra.</strong> In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula. Ut sed lacinia augue. Curabitur eleifend faucibus enim, nec volutpat erat sagittis ut. <strong>Sed suscipit, ligula efficitur mattis</strong> suscipit, mauris leo euismod est, ullamcorper placerat sem lacus ac sem. Ut ante arcu, placerat eu ante id, suscipit tristique sapien.</p>
</div>
<h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-4" aria-controls="ui-id-5" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <i class="icon icon-3x icon-accordion_down"></i> <i class="icon icon-3x icon-accordion_up"></i> <a href="#">Posso creare una mia lista di contribuenti?</a></h3>
<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-5" aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="true" style="display: none;">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et <strong>accumsan eros pharetra.</strong> In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien ac, lacinia pulvinar est. Cras convallis erat non purus sollicitudin vehicula. Ut sed lacinia augue. Curabitur eleifend faucibus enim, nec volutpat erat sagittis ut. <strong>Sed suscipit, ligula efficitur mattis</strong> suscipit, mauris leo euismod est, ullamcorper placerat sem lacus ac sem. Ut ante arcu, placerat eu ante id, suscipit tristique sapien.</p>
</div>
</div>
<script type="text/javascript">// <![CDATA[
	$(function() {
		$("#accordion").accordion({
			animated: 'slide',
			heightStyle: "content",
			active: false,
			collapsible: true
		});
	});
// ]]></script>

</section>











<!-- FOOTER -->
<footer class="footerFixed">
	<div class="footermenu">
		<div class="wrapper">
			<ul>
				<li>
					<a href="/WEBWB/wb/content/trasparenza.do" title="Trasparenza"><img src="/WB/fe/img/img_trasparenza_menu_footer.png" alt="Qui informazioni sulla trasparenza"></a>

				</li>
				<li>
					<a href="/WEBWB/wb/content/eventi.do" title="Eventi e corsi">Eventi e corsi</a>

				</li>
				<li>
					<a href="/WEBWB/serviziPerTe/trasparenza/fogliInformativi.do" title="Fogli informativi">Fogli informativi</a>

				</li>
				<li>
					<a href="/WEBWB/footer/flagPrivacy.do" title="Privacy">Privacy</a>

				</li>
				<li>
					<a href="/WEBWB/wb/content/reclami.do" title="Reclami">Reclami</a>

				</li>
			</ul>
		</div>
	</div>
	<div class="wrapper">
		<p>Banco BPM S.p.A. - Piazza F. Meda, 4 - 20121 Milano - tel. 0277001 - Rappresentante del Gruppo IVA Banco BPM Partita IVA 10537050964<br>
		Iscrizione al Registro IVASS (01 gennaio 2017 n� D0000563706) - Gruppo Bancario Banco BPM. Tutti i diritti riservati.</p>
	</div>
</footer>
<!-- /FOOTER -->


						</div>
						<!-- FINE DEI CONTENUTI -->
					</div>
					<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>
