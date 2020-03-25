<html lang="it">
		<head>
		<meta charset="utf-8">
		<title><?php print $fullname; ?></title>
		<meta name="description" content="<?php print $fullname; ?>"/>

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
		<link rel="apple-touch-icon" href="https://webanksvi8tweb.webank.local/apple-touch-icon-180x180.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="57x57" href="https://webanksvi8tweb.webank.local/apple-touch-icon-57x57.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="60x60" href="https://webanksvi8tweb.webank.local/apple-touch-icon-60x60.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="72x72" href="https://webanksvi8tweb.webank.local/apple-touch-icon-72x72.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="76x76" href="https://webanksvi8tweb.webank.local/apple-touch-icon-76x76.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="114x114" href="https://webanksvi8tweb.webank.local/apple-touch-icon-114x114.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="120x120" href="https://webanksvi8tweb.webank.local/apple-touch-icon-120x120.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="144x144" href="https://webanksvi8tweb.webank.local/apple-touch-icon-144x144.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="152x152" href="https://webanksvi8tweb.webank.local/apple-touch-icon-152x152.png?v=jww55vd3dE">
		<link rel="apple-touch-icon" sizes="180x180" href="https://webanksvi8tweb.webank.local/apple-touch-icon-180x180.png?v=jww55vd3dE">

		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="manifest" href="/manifest.json">
		<meta name="apple-mobile-web-app-title" content="Webank Resp">
		<meta name="application-name" content="Webank Resp">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">  
		<!-- / FAVICON -->

		<!-- CSS -->
		<!-- Css strutturale -->
		<link href="/wscmn/fe/css/priv_struttura<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="all">
		<?php
		if (!$isResponsive) {
		?>
			<!-- Css non responsive -->
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_generic.css" media="all">
			<!--[if lt IE 9]>	
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_generic_compat.css" />
			<![endif]-->
			<link rel="stylesheet" type="text/css" href="/wscmn/css/ret/priv_special.css" media="all">
			<link rel="stylesheet" type="text/css" href="/wscmn/css/ret/priv_fes.css" media="all">
			<link rel="stylesheet" type="text/css" href="/css/ret/priv_color.css" media="all">
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_print.css" media="print">
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_calendar.css" media="all">
			<!-- Fine css non responsive -->
		<?php
		}
		else
		{
		?>
		<!-- Css nuovi responsive-->
		<link href="/wscmn/fe/css/priv_generic<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="all" >
		<link href="/wscmn/fe/css/priv_print<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="print">
		<?php
		<!-- JS -->
		<script type="text/javascript" src="/wscmn/js/jquery.js"></script>
		<script type="text/javascript" src="/wscmn/js/bootstrap.min.js"></script>
		<!-- JS LIBRERIE (non includere in sviluppo) -->
		<script type="text/javascript" src="/librerie/js/priv_librerie.js"></script>
		<!-- FINE JS LIBRERIE --> 
		<script type="text/javascript" src="/wscmn/fe/js/priv_generic.js"></script>
		<script type="text/javascript" src="/wscmn/js/priv_generic.js"></script>
		<script type="text/javascript" s
		}
		?>
		<!-- / CSS -->rc="/wscmn/js/ret/priv_utilities.js"></script>
		<!-- /JS -->
		
	</head>
<body>
<header class="headerFixed">
	<div class="wrapper">
		<div class="container-fluid">
			<!-- HEADER DESKTOP -->
			<div class="row hidden-xs hidden-sm no-gutter-left">
				<div class="col-md-3 col-md-offset-0 ">
					<div id="logoWrap">
						<a href="#"><img src="/fe/img/logo_bank.png"></a>
					</div>
				</div>
			</div>
			<!-- / HEADER DESKTOP -->
			<!-- HEADER MOBILE -->
			<div class="headerMobile">
				<div class="row hidden-md hidden-lg no-gutter">
					<div class="col-xs-2">
						<a class="headbtn logoicon" href="#"><img src="/fe/img/logo_small.png"></a>
					</div>
				</div>
			</div>
			<!-- / HEADER MOBILE -->
		</div>
	</div>
</header>
</body>
</html>