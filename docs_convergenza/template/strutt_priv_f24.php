<?php
$site = $_GET["site"];
?><!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	
	<title>headerF24</title>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<?php 
	
	/* HEADER WEBANK */

	if ($site==="webank") { ?>
	<!-- MOBILE -->
	<meta name="viewport"
			content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Allows fullscreen mode from the Homescreen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Sets the color of the text/battery, wireless icons etc -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true" />
		<meta name="MobileOptimized" content="320" />
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- / MOBILE -->

		<!-- FAVICON -->
		<link rel="icon" href="/WB/fe/img/favicon.ico">
		<link rel="manifest" href="/WB/manifest.json">
		<meta name="apple-mobile-web-app-title" content="Webank Resp">
		<meta name="application-name" content="Webank Resp">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- / FAVICON -->

		<link media="all" rel="stylesheet" type="text/css" href="/common/fe/css/all.css" />
		<link media="all" rel="stylesheet" type="text/css" href="/WB/fe/css/default.css" />
		<link media="all" rel="stylesheet" type="text/css" href="/WB/fe/css/webank_skin.css" />
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
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.js?v=160419"></script>
		<script type="text/javascript" language="javascript"
			src="/common/fe/assets/jquery/jquery-ui.min.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.ui.touch-punch.min.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.min.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.dateIT.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.altImg.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.formattedNum.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.form.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.blockUI.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.selectToUISlider.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap.min.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap-table.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/ie10-viewport.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/assets/jsapi.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/funzioni_convergenza.js?v=160419"></script>
		<script type="text/javascript" language="javascript" src="/WB/fe/js/struttura.js?v=160419"></script>
		<!-- END JS PER TUTTE LE PAGINE WEBANK -->

		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=160419"></script>
		<script type="text/javascript">
			function getPathImages() { return "/WB/IMAGES/"; }
			function getPathImagesFe() { return "/WB/fe/img/"; }
			function getPathContext() { return "/WEBWB"; }
			function getPathExtContext() { return "/WEBEXT"; }
			function getKBanca() { return "1"; }
			function getLineaTol() { return ""; }
		</script>
		<script type="text/javascript">
			var X = 'en5ZVENVAwZn';
		</script>

	<?php
	}
	else
	{ ?>
<link media="screen, print" rel="stylesheet" type="text/css" href="/common/fe/css/all.css" />
	<link media="print" rel="stylesheet" type="text/css" href="/HT/fe/css/print.css" />




	<link media="screen, print" rel="stylesheet" type="text/css" href="/common/fe/assets/jquery/jquery-ui_ng.min.css" />

	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-main.css?v=070619" />

	<!-- NUOVO CSS STRUTTURA-->
	<link rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-struttura.css?v=070619" />
	<!-- FINE NUOVO CSS STRUTTURA-->



	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css"
		href="/HT/fe/css/youWeb-xxs-mobile.css?v=070619" />
	<link media="screen and (max-width: 991px)" rel="stylesheet" type="text/css"
		href="/HT/fe/css/youWeb-xs-mobile.css?v=070619" />
	<link media="screen and (min-width: 992px)" rel="stylesheet" type="text/css"
		href="/HT/fe/css/youWeb-sm-desktop.css?v=070619" />
	<!--CSS AGGIUNTO PER STILIZZARE SITO COME INDICAZIONI UI -->
	<link media="print" rel="stylesheet" type="text/css" href="/HT/fe/css/print.css" />
	<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/fe/css/ie8.css" />
<![endif]-->
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-migrate-1.4.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/ie10-viewport.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/jsapi.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.dateIT.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.altImg.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.formattedNum.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.natural.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.form.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.blockUI.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/html5.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" language="javascript" src="/HT/JS/js.cookie.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=070619"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/struttura.js"></script>
	<script type="text/javascript" src="/common/fe/js/funzioni_convergenza.js?r=070619"></script>
	<script>
		$(document).ready(function (e) {
			var resizeTimer;
			var servVal = false;
			$(window).resize(function () {
				if (servVal != isMobile() && location.href.search('login') == -1) {
					clearTimeout(resizeTimer);
					resizeTimer = setTimeout(function () {

						$.post(getPathContext() + '/common/refreshBreakpoint.do', { device: getBreakpoint() }, function (response, status) {
							servVal = isMobile();
						});
					}, 500);
				}
			});
		});
	</script>
	<script type="text/javascript">
		function getPathImages() { return "/HT/IMAGES/"; }
		function getPathImagesFe() { return "/HT/fe/img/"; }
		function getPathContext() { return "/WEBHT"; }
		function getPathExtContext() { return "/WEBHTEXT"; }
		function getKBanca() { return "1"; }
		function getLineaTol() { return ""; }
	</script>
	<script type="text/javascript">
		function printContent() {
			var fr1 = parent['frF24Center'];
			var fr2 = fr1.frames[0];
			var fr3 = fr2.frames[0];
			if (fr3.name != "footerFrame") {
				fr3.focus();
				fr3.print();
			} else {
				fr2.focus();
				fr2.print();
			}
		}
	</script>
	<?php
		}
	?>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function () {
			var menu = document.getElementById('menuToggled');
			var btn = document.getElementById('menuToggler');
			btn.addEventListener('click', function () {
				if (this.classList.contains('opened')) {
					btn.classList.remove('opened');
					menu.classList.remove('opened');
				} else {
					btn.classList.add('opened');
					menu.classList.add('opened');
				}
			});
		});
	</script>

</head>


<body class="f24">
	<header class="<?php print(($site==="webank")? "headerFixed" : "menuF24");?>" >
		<div class="wrapperDesk">
			<div id="headerDesktop" class="headerDesktopX">
				<?php if ($bank==="webank") { ?>
					<a id="menuToggler" class="menuopen btn-icon">
					<i class="icon icon-menu"></i>
					</a>
				<?php }?>
				
				<div class="contLogoDesk">
					<?php 
						if ($site ==="webank"){ ?>
							<a href="#"><img src="/WB/fe/img/logo_bank.png" /></a>
						<?php }
						else
						{ ?>
							<a class="logoYouWeb" title="Torna all'homepage"></a>	
						<?php }
					?>
					
				</div>
				<div class="contMenuDesk" id="menuToggled">
					<ul id="firstMenu" class="firstMenuDesk">
						<li class=" ">
							<a href="#" title="Introduzione" target="_parent"
								class="text-decoration: none!important;">
								<span>Introduzione</span>
							</a>
						</li>
						<li class=" ">
							<a href="#" title="Modulo F24" target="_parent"
								class="text-decoration: none!important;">
								<span>Modulo F24</span>
							</a>
						</li>
						<li class=" ">
							<a href="#" title="Modulo F24 Semplificato"
								target="_parent" class="text-decoration: none!important;">
								<span>Modulo F24 Semplificato</span>
							</a>
						</li>
						<li class="last ">
							<a href="/WEBWB/pagamenti/f24/moduloAuto.do" title="Modulo F24 elem. ident."
								target="_parent" class="text-decoration: none!important;">
								<span>Modulo F24 elem. ident.</span>
							</a>
						</li>
					</ul>
					<br style="clear:both" />
					<ul id="firstMenu" class="firstMenuDesk">





						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/moduloAccise.do" title="Modulo F24 accise" target="_parent"
								class="text-decoration: none!important;">
								<span>Modulo F24 accise</span>
							</a>
						</li>



						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/riepilogo.do" title="Riepilogo F24" target="_parent"
								class="text-decoration: none!important;">
								<span>Riepilogo F24</span>
							</a>
						</li>



						<li class=" ">
							<a href="/WEBWB/pagamenti/f23/modulo.do" title="Modulo F23" target="_parent"
								class="text-decoration: none!important;">
								<span>Modulo F23</span>
							</a>
						</li>



						<li class=" ">
							<a href="/WEBWB/pagamenti/f23/riepilogo.do" title="Riepilogo F23" target="_parent"
								class="text-decoration: none!important;">
								<span>Riepilogo F23</span>
							</a>
						</li>
						<li class="last ">
							<a href="/WEBWB/pagamenti/f24/contribuenti.do" title="Lista contribuenti" target="_parent"
								class="text-decoration: none!important;">
								<span>Lista contribuenti</span>
							</a>
						</li>
						<li class="last ">
							<a href="/WEBWB/pagamenti/f24/contribuenti.do" title="Lista contribuenti" target="_parent"
								class="text-decoration: none!important;">
								<span>Acquisizione pdf</span>
							</a>
						</li>
						



					</ul>

				</div>

				<div class="contImpDxDesk contImpDxDeskX">
					<a href="#!" class="iconExit" title="Esci" onclick="javascript:top.window.close(); return false;">
						<div class="containerIconHeadDX">
							<?php if($site==="youweb") {?>
								<span><img src="/HT/fe/img/btn_x_uscita.png"></span>
							<?php } ?>
						</div>
					</a>
				</div>

			</div>
		</div>
	</header>
</body>

</html>