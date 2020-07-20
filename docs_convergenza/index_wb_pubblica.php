<!DOCTYPE html>
<?php
    $forecolor="#6f8f0a";
    $backcolor="#dce7b5";
?>
<html class="librerie">
<head>
    <?php
    $pag = $_GET["pag"];
    $responsive = (empty($_GET["responsive"])) ? "y" : $_GET["responsive"];
    $resp = ($responsive == "n") ? false : true;
    ?>
    <title>Librerie <?php print $fullname ?> <?php print $customer ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,height=device-height">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Team Cup"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Team Cup"/>
    <!-- / MOBILE -->
    <meta http-equiv="Content-Language" content="it">

    <!-- JS -->
    <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
    <!-- / JS -->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/librerie_pubblica.css"/>
    <link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
    <script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="/wbresp/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
        <!--NUOVI CSS -->
    <link rel="stylesheet" href="/wbresp/css/contenuti_pubblica.css"/>

    <!-- DECLINAZIONI SPECIALI PER LIBRERIE -->
    <style>

        /* a {color:
        <?php print $forecolor ?> } */
        .color {
            color: <?php print $forecolor ?> !important;
        }

        .bordercolor {
            border-color: <?php print $forecolor ?> !important;
        }

        .bgcolor {
            background-color: <?php print $forecolor ?> !important;
        }

        .bglightcolor {
            background-color: <?php print $backcolor ?> !important;
        }

        .borderlightcolor {
            border-color: <?php print $backcolor ?> !important;
        }

        .singleborderlightcolor {
            border-bottom: 1px solid <?php print $backcolor ?> !important;
        }
    </style>
    <!-- / CSS -->

    
</head>

<body class="bglightcolor">
<div id="heading">
    <div class="wrapper bgcolor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Librerie Webank Pubblica</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
virtual("librerie_indice_pubblica.php");
?>
</body>
</html>
