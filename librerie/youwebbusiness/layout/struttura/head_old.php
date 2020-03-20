    <title>Banco BPM Business</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
    // Carica le risorse a seconda del cantiere
    include ("layout/struttura/cantieri/".$cantiere.".php");

// Identifica le risorse da invocare a seconda del template 
   // $resid = explode("/",$tpl)[0];

?>
    <!-- Risorse statiche old -->
    <?php 
        // if(sizeof(explode("/",$tpl))>1) include ("layout/template_old/".$resid."/_risorse_statiche.php"); 
    ?>
    <link rel="stylesheet" type="text/css" href="./fe/css/priv_struttura_old.css">
    <!-- Fine risorse statiche old -->

    <!-- Risorse statiche new -->
    <?php if($asis!="true") {
        ?>
        <link media="screen,print" rel="stylesheet" type="text/css" href="./fe/css/youbusinessweb_restyling.css">
        <?php
    }
    ?>
    <script src="./fe/js/struttura.js" type="text/javascript"></script>
    <!-- Fine risorse statiche new -->
