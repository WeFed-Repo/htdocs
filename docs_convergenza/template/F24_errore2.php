<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <title>Modello F24 On Line</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">













<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-1.9.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/scroll.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-migrate-1.0.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="/sapef24/f24/javascript/ie10-viewport-bug-workaround.js"></script>


<!--<script type="text/javascript" src='/sapef24/f24/javascript/jquery.tablesorter.js'></script>-->
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-ui.min.js"></script>

<!--nostro-->
	<script type="text/javascript" src="/sapef24/f24/javascript/jquery.ui.touch-punch.min.js"></script>
<!-- * -->
<script type="text/javascript" src="/sapef24/f24/javascript/swfobject.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHT.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHB.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery.blockUI.js"></script>

<script type="text/javascript" src="/sapef24/f24/javascript/jquery.dataTables.min.js"></script>


<!--nostro-->

	<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/blue.css">
	<script type="text/javascript" src="/sapef24/f24/javascript/icheck.min.js?t=1583315348896"></script>
	<script type="text/javascript" src="/sapef24/f24/javascript/helpModal.js"></script>






<script type="text/javascript">

		function getPathImages() { return '/sapef24/f24/images/';}

</script>
<script type="text/javascript" src="/sapef24/f24/javascript/controlli.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/doubleClickPrevention.js"></script>

<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/jquery-ui.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/bootstrap.min.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/essentials.css">

		<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/header-default.css">
		<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/styleNew.css">

		<!--NUOVA GRAFICA-->

	<link media="print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePrint.css">

		<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePhone.css">
    <?php if($_REQUEST['bank'] == 'HT') { $stileSito = 'styleYouweb'; }
					else if($_REQUEST['bank'] == 'WB') { $stileSito = 'styleWebank'; }
					else if($_REQUEST['bank'] == 'AL') { $stileSito = 'styleAletti'; }
					if( $stileSito ) { ?>
						<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/phone/<?php echo $stileSito ?>.css">
		<?php } ?>

		<script src="/sapef24/f24/javascript/jquery.jspanel.min.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/mobile.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/mobile-detect.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/jquery.tablesorter.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/jquery.tablesorter.pager.js?t=1583315348896"></script>

		<link type="text/css" href="/sapef24/f24/styles/jquery.tablesorter.pager.css?t=1583315348896" rel="stylesheet">

		<script type="text/javascript">
		(function(){
		  if (window.addEventListener)
		  {
			window.addEventListener("load", nascondi_loading_mobile, false);
		  }else{
			window.attachEvent("onload", nascondi_loading_mobile);
		  }
		})();
		function mostra_loading_mobile()
		{
		  document.getElementById("loading_mobile").style.display = 'block';
		}
		function nascondi_loading_mobile()
		{
		  document.getElementById("loading_mobile").style.display = 'none';
		}
		</script>




















	<script type="text/javascript">

		function noBack(){
			window.history.forward();
		}

		noBack();

		window.onload = noBack;
		window.onpageshow = function(evt) {
			if (evt.persisted) {
				noBack();
			}
		}

		window.onunload = function() {
			void(0);
		}

	</script>



<script type="text/javascript">

	if (window.opera) {
		window.opera.setOverrideHistoryNavigationMode('compatible');

		if (history.navigationMode) {
			history.navigationMode = 'compatible';
		}
	}

</script>



  <!--[if lt IE 9]>
  	<script type="text/javascript" src='/sapef24/f24/javascript/respond.min.js'></script>
  	<script type="text/javascript" src='/sapef24/f24/javascript/html5.js'></script>
  <![endif]-->
  <script type="text/javascript" src="/sapef24/f24/javascript/alten.js"></script>

  <style id="style-1-cropbar-clipper">
	/* Copyright 2014 Evernote Corporation. All rights reserved. */

	.en-markup-crop-options {
		top: 18px !important;
		left: 50% !important;
		margin-left: -100px !important;
		width: 200px !important;
		border: 2px rgba(255,255,255,.38) solid !important;
		border-radius: 4px !important;
	}
	.en-markup-crop-options div div:first-of-type {
		margin-left: 0px !important;
	}
</style>


<style type="text/css">
	#loading_mobile, #loading_screen{
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: #fff url(/sapef24/f24/images/phone/loading.gif) 50% no-repeat;
		opacity: 0.5;
		filter: alpha(opacity=50);
	}

		#loading_screen{
			background: url(/sapef24/f24/images/loading.gif) 50% no-repeat;
		}

</style>






</head>

<body marginwidth="0" marginheight="0" style="zoom: 1;">
	<div class="wrapper">
		<div class="main row">
			<div class="container">
				<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="riquadro clearfix">
						<div class="messagePanel error" style="display: block;">
							<h3 class="titleSection">Attenzione: si sono verificati degli errori</h3>
							<p>
								<b><br>È stata rilevata una pressione dei tasti <i>BACK</i> o <i>RELOAD</i> del browser.</b><br>
		        		<b><br>L'uso di questi tasti durante la navigazione è fortemente sconsigliato<br>e può portare ad anomalie nell'elaborazione delle deleghe.<br></b><br>
		        		<b><br>L'operazione non può essere processata.</b><br>
		       			<b><br>Ènecessario tornare alla home page ed effettuare una nuova richiesta.<br></b><br>
							</p>
						</div>

					</div>
					<form target="frCenter" action="/sapef24/f24/home.do">
						<div class="pull-right margin-bottom20">
							<button class="btn btn-primary" type="submit">home page</button>
						</div>
					</form>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>





</body></html>
