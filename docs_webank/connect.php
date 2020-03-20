<?php

	$porta = ($_SERVER["SERVER_PORT"] == '80')? '' : ':' . $_SERVER["SERVER_PORT"];
	$page = $_GET['page'];
	
	/* CONFIG */
	$bank = "webank";
	$fullname = "Webank";
	$forecolor = "#6f8e0a";
	$backcolor = "#dce7b5";
	$path = "/docs_webank";
	$launchpath = "http://libreriewebank";
	$mail ="webank@webank.it";
	$mailbus ="webank@webank.it";
	$indirizzo ="www.bpm.it";
	/* FINE - CONFIG */
	
	virtual ("/librerie/php/core/engine.php");
	virtual ("/librerie/php/".$page);
?>