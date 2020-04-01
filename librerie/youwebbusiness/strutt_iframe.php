<?php
    $iframe = $_GET["iframe"];
    $cantiere = (isset($_GET["cantiere"])) ?$_GET["cantiere"] : "a2";
    $asis = ( isset($_GET['asis']) ) ? $_GET['asis'] : 'false';

    // Identifica la cartella di provenienza
    $iframecont = file_get_contents("./layout/template_old/".$iframe);

    //$resid = explode("/",$iframe)[0];
    //$headingres = file_get_contents("./layout/template_old/".$resid."/_risorse_statiche.php");
    $headingres = file_get_contents("./layout/struttura/cantieri/".$cantiere.".php");

    // Aggiunge i css esterni
    if ($asis != "true") $headingres = $headingres."<link media=\"screen,print\" rel=\"stylesheet\" type=\"text/css\" href=\"./fe/css/youbusinessweb_restyling.css\">";

    $iframecont = str_replace ( "<head>" , "<head>".$headingres , $iframecont ); 

    // Modifica la classe del body
    // Estrae il tag <body> iniziale
    $bodytagstart = stripos($iframecont  , "<body");
    $bodytagend =  stripos($iframecont  , ">", $bodytagstart);
    $bodytag = substr ( $iframecont , $bodytagstart,  $bodytagend-$bodytagstart+1 );
    $bodytagreplace = "";

    // Se bodyTag ha una classe
    if ( stripos($bodytag,"class")>0) {
        $bodytagreplace = str_replace("class=\"", "class=\"cant-".$cantiere." ",$bodytag);
    }
    else
    {
        $bodytagreplace = str_replace("<body","<body class=\"cant-".$cantiere."\"",$bodytag);
    }
    $iframecont = str_replace ( $bodytag , $bodytagreplace , $iframecont ); 

    // print $iframecont;
    print $iframecont;

?>