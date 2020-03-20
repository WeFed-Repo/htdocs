<?php

$promo = false;

/* Colore */
$color = $_GET["color"];
if (empty($color)) {
    $color="yellow";
}
else
{
    if(!in_array($color,array("yellow","blue","green"))) {
          $color="yellow";
    }
}

/* Prodotto <-- Valorizzare con i codici corretti */
$prodotto = $_GET["prodotto"];
if (empty($prodotto)) {
    $prodotto = "fisso";
}
else
{
    if($prodotto !="fisso" && $prodotto!="fissofinito" && $prodotto != "variabile") {
        $prodotto = "fisso";
    }
}

/* Finalita */
$finalita = $_GET["finalita"];
if (empty($finalita)) {
     $promo=true;
     $finalita = "Acquisto";
}
else
{
    if(!in_array($finalita,array("Acquisto","Surroga"))) {
          $finalita = "Acquisto";
    }

    if ($prodotto == "fissofinito ") { $finalita = "Acquisto";}
}



/* CASISTICHE DELLA PROVENIENZA COLORE */
if ($promo == true ){

        /* CASO GIALLO */
        $mp_herotitle = "";
        $mp_herotext = "";
        $mp_prodname="Mutuo promo tasso fisso";
        $mp_prodpayoff="Il mutuo senza sorprese, sempre con la medesima rata.";

        // Randomizza i parametri 
        switch (rand(0,2)) {

            case 0:
                $mp_heroimg = "./fe/img/mutuo_promo_armadio.jpg";
                $mp_heroimg_mobile = "./fe/img/mutuo_promo_armadio_mobile.jpg";
                $mp_logo = "./fe/img/logo_00.png";
                

            break;
                
            case 1:
                $mp_heroimg = "./fe/img/mutuo_promo_coccole.jpg";
                $mp_heroimg_mobile = "./fe/img/mutuo_promo_coccole_mobile.jpg";
                $mp_logo = "./fe/img/logo_01.png";
                $mp_herotitle = "";
                $mp_herotext = "";

            break;

            case 2:
                $mp_heroimg = "./fe/img/mutuo_promo_tifosi.jpg";
                $mp_heroimg_mobile = "./fe/img/mutuo_promo_tifosi_mobile.jpg";
                $mp_logo = "./fe/img/logo_02.png";
                $mp_herotitle = "";
                $mp_herotext = "";
            break;
        }
}
else
{
    // Casi blu e verde (discriminazione per prodotto)
    $mp_logo = "./fe/img/logo.png";
    $mp_heroimg = "./fe/img/mutuo_".strtolower($finalita)."_".strtolower($prodotto).".jpg";
    
    if ($prodotto == "fisso") {
        
        if ($finalita=="Acquisto") {

            $mp_herotitle = "Al nostro mutuo piacciono le coccole";
            $mp_herotext = "Scegli Mutuo Promo Tasso Fisso.<br>Il mutuo che ti assomiglia.";
            $mp_prodname="Mutuo Promo Tasso Fisso";
            $mp_prodpayoff="Il mutuo senza sorprese, sempre con la medesima rata.";
        }
        else
        {
            $mp_herotitle = "Insoddisfatto del tuo mutuo?<br>Ecco la soluzione";
            $mp_herotext = "Porta il tuo mutuo da noi, a condizioni vantaggiose";
            $mp_prodname="Mutuo Surroga Promo Tasso Fisso";
            $mp_prodpayoff="Il mutuo a tasso fisso per trasferire il mutuo da noi";
        }
    }
    else if ($prodotto == "fissofinito")
    {

        $mp_herotitle = "Il mio mutuo ha l'armadio pieno e niente da mettere.";
        $mp_herotext = "Cerchi un mutuo fino a 15 anni? Per avere le migliori condizioni scegli il tasso \"finito\".";
        $mp_prodname="Mutuo Promo Tasso Fisso Finito";
        $mp_prodpayoff="Il mutuo con la rata certa gi&agrave; al momento della richiesta.";
    }
    else
    {
        if ($finalita == "Acquisto") {
            $mp_herotitle = "Casa da comprare?";
            $mp_herotext = "Scegli Mutuo You Premium Tasso Variabile,<br> il mutuo che sfrutta le opportunit&agrave; dei tassi di mercato.";
            $mp_prodname="Mutuo You Premium Tasso Variabile";
            $mp_prodpayoff="Il mutuo che ti permette di sfruttare l'andamento del mercato dei tassi";
        }
        else
        {
            $mp_herotitle = "Trasferisci il tuo mutuo a condizioni speciali!";
            $mp_herotext = "Mutuo You Premium Surroga Tasso Variabile:<br>condizioni uniche e nessuna spesa di trasferimento.";
            $mp_prodname="Mutuo You Premium Surroga Tasso Variabile";
            $mp_prodpayoff="Il mutuo a tasso variabile per trasferire il mutuo da noi";
        }
        
    }


}
  
?><!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- CSS -->
    <link rel="stylesheet" href="./fe/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fe/css/font-awesome.min.css?a=435" />
    <link rel="stylesheet" href="./fe/css/awesome-bootstrap-checkbox.min.css?a=435" />
    <link rel="stylesheet" href="./fe/css/awesome-bootstrap-checkbox-styles.min.css?a=435" />

    <link rel="stylesheet" href="./fe/css/style.css">
    <link rel="stylesheet" href="./fe/css/skin_<?php print $color; ?>.css">
    <!-- JS -->
    <script type="text/javascript" src="./fe/js/jquery.min.js"></script>
    <script type="text/javascript" src="./fe/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./fe/js/bootstrap-slider.min.js"></script>
    <script type="text/javascript" src="./fe/js/script.js"></script>

    <!-- Automazioni della pagina -->
    <script type="text/javascript" src="./fe/js/calcolatore_mutui.js"></script>
    <script>
        // Inizializzazioni o raccolta dati da form in post/get
        // I valori sono gli stessi che vengono gestiti attualmente:
        // qualora non venissero indicati le inizializzazioni sarebbero quelle "generiche" salvo mURL che e' necessaria
       
        var mCodice = "<?php print $prodotto ?>",
            mValoreimmobile = "",
            mImportomutuo = "",
            mDurata = "",
            mAssicurazioni = "",
            mFinalita  = "<?php print $finalita ?>",
            mColor = "<?php print $color; ?>",
            mPrimacasa = "SI",
            mBanca = "valorebanca",
            mPagetopost  = "/webankpub/wb/simulazioneMutui.do?tabId=nav_pub_wb_finanziamenti_nw&richiedi=&OBS_KEY=pro_wbn_mutui_nw1&KEY4=pro4_calcola_rata",
            mUrl = "./fe/ajax/calcolatore_mutui.php";
         

    </script>
    <!-- Fine delle automazioni -->
    <title>Mutuo PROMO - BancoBpm Gruppo</title>
  </head>
  <body class="loading<?php if($promo==true) print (" promo"); ?>" >
  </body>
</html>​