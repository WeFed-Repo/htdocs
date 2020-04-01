<?php
	$tpl = ( isset($_GET['tpl']) ) ? $_GET['tpl'] : 'tpl_placeholder.php';
	$asis = ( isset($_GET['asis']) ) ? $_GET['asis'] : 'false';
	$cantiere = ( isset($_GET['cantiere']) ) ? $_GET['cantiere'] : 'a2';
	$strtype = "old";

	$popupcont =  file_get_contents("./layout/template_old/".$tpl);

	// Estrae il tag <body> iniziale
    $bodytagstart = stripos($popupcont  , "<body");
    $bodytagend =  stripos($popupcont  , ">", $bodytagstart);
    $bodytag = substr ( $popupcont , $bodytagstart,  $bodytagend-$bodytagstart+1 );
    $bodytagreplace = "";

    // Se bodyTag ha una classe
    if ( stripos($bodytag,"class")>0) {
        $bodytagreplace = str_replace("class=\"", "class=\"cant-".$cantiere." ",$bodytag);
    }
    else
    {
        $bodytagreplace = str_replace("<body","<body class=\"cant-".$cantiere."\"",$bodytag);
    }
    $popupcont = str_replace ( $bodytag , $bodytagreplace , $popupcont );

?><!doctype html>
<html lang="it">
	<head>
		<?php include 'layout/struttura/head_old.php'; ?>
	</head>
	<?php
		print $popupcont;
	?>
</html>
