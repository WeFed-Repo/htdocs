<?php

	$tpl = $_GET["tpl"];

?><!DOCTYPE html>

<html lang="it">
	<head>
		<meta charset="utf-8">
		<title>Webank</title>
		<meta name="description" content=""/>
		<!-- MOBILE -->
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Allows fullscreen mode from the Homescreen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Sets the color of the text/battery, wireless icons etc -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true"/>
		<meta name="MobileOptimized" content="320"/>
		<meta name="format-detection" content="telephone=no">
		<!-- / MOBILE -->

		<!-- FAVICON -->
		<link rel="icon" href="/favicon.ico">
		<link rel="manifest" href="/manifest.json">
		<meta name="apple-mobile-web-app-title" content="Webank Resp">
		<meta name="application-name" content="Webank Resp">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- / FAVICON -->

		<!-- CSS -->

		<!-- Css strutturale -->
		<link href="/WB/fe/css/priv_struttura_webank_full_responsive.css?r=" rel="stylesheet" type="text/css" media="all">
		<link href="/WB/fe/css/priv_base_webank.css?r=" rel="stylesheet" type="text/css" media="all">
		<link href="/WB/fe/css/priv_generic_webank.css?r=" rel="stylesheet" type="text/css" media="all" >
		<link media="print" rel="stylesheet" type="text/css" href="/WB/fe/css/priv_print.css?a=452"  />

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
		<script type="text/javascript" src="/include/ajax/priv_menu.php?bank=webank&"></script>
		<script type="text/javascript" src="/common/fe/js/jquery.js?r="></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.min.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/ie10-viewport.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jsapi.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.dateIT.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.altImg.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.formattedNum.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.form.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery.blockUI.js"></script>
		<script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.selectToUISlider.js"></script>
		<script type="text/javascript" src="/common/fe/js/bootstrap.min.js?r="></script>
				<!-- JS LIBRERIE (non includere in sviluppo) -->
		<script type="text/javascript" src="/js/priv_librerie.js?r="></script>
		<!-- FINE JS LIBRERIE -->
		<script type="text/javascript" src="/common/fe/js/priv_generic.js?r="></script>
		<script type="text/javascript" src="/common/fe/js/noresp_priv_generic.js?r="></script>
		<script type="text/javascript" src="/common/fe/js/noresp_priv_utilities.js?r="></script>
		<script type="text/javascript" src="/common/fe/js/bootstrap-table.js?r="></script>
		<script type="text/javascript">
			function getPathImages() { return "/HT/fe/css/";}
			function getPathContext() { return "/WEBHT";}
		function getKBanca() { return "1";}
		function getLineaTol() { return "";}
		</script>



		<script type="text/javascript">

			if (navIndex.length>2)
				{ sectionTitle = menuData[navIndex[0]].voices[navIndex[1]].title;}
			else if (navIndex.length==1)
				{ sectionTitle = menuData[navIndex[0]].title;}
		</script>
		<!-- /JS -->
	</head>

	<body class="webview<?php if ($navIndex[0] == "0" && sizeof($navIndex)==1) print " myhome" ;?> loading" style="display:none">
		<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
		<div id="main">
			<div class="wrapper">
				<div class="container-fluid">
					<?php

						if ($tpl != "")
						{ 
						$structure = "full";
						virtual("/librerie/php/strutt_priv_navigazione.php");
						}
					?>
				</div>
			</div>
		</div>
		<!-- /CONTENT -->
	</body>	
</html>
