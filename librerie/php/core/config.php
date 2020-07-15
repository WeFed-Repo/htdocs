<?php
	//array di configurazione degli oggetti
	$types = array("navigazione","bottoni","titoli","testi","form","tabelle","footer","boxeditoriali","tool","areepromoz","link","divisori");
	$typeRs = array("navigazione","bottoni","titoli","testi","form","boxedit","filetti","animazioni","table");
	$typeBpmNL = array("titoli","testi","bottoni","tabelle","box","accordion","divisori");
	$customer = isset($_GET["customer"])? $_GET["customer"] : '';
	$hostArr = explode('.', $_SERVER['HTTP_HOST']);
	$hostsuffix = (strpos(strtoupper($hostArr[0]), 'FIX'))? 'fix' : '';

	switch ($customer) {
		case "bus": $customername = "Business";
			break; 
			
		default: $customername = "Retail";
			break; 
	}

	// Variabili comuni per librerie NUOVE
	$tipoOggetti = Array(
			"accordion" => "Accordion",
			"bottoni" => "Bottoni",
			"box" => "Box",
			"navigazione" => "Navigazione",
			"card" => "Card (box + img)",
			"form" => "Form input e output",
			"overlay" => "Overlay",
			"stepper" => "Stepper",
			"tabelle" => "Tabelle",
			"testi" => "Titoli e testi",
			"widget" => "Widget"
		);

		$tipoOggettiPub = Array(
			
			"bottoni" => "Bottoni",
			"box" => "Box",
			"form" => "Form input e output",
			"navigazione" => "Navigazione",
			"overlay" => "Overlay",
			"promo" => "Promo",
			"tabelle" => "Tabelle",
			"testi" => "Titoli e testi",
			"widget" => "Widget"
		);
?>