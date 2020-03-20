<?php

// Lista degli ip WEFED (possono vedere gli strumenti di editing)
$ipgood = array("10.8.102.17");

$iswefed = (in_array($_SERVER['REMOTE_ADDR'], $ipgood));


?>
<!DOCTYPE html>
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

    <!-- CSS -->
    <link rel="stylesheet" href="/librerie/css/librerie.css"/>

    <!-- DETERMINA QUALI CSS CARICARE (SE RESPONSIVE OPPURE NO -->
    <!-- COMUNI -->
    <link href="/wscmn/fe/css/priv_base<?php print ("_" . $bank) ?>.css" rel="stylesheet" type="text/css" media="all">
    <?php
    if ($pag == "catalogo" || $pag == "indice" || $pag == "catalog_responsive" || $pag == "catalog_old") {
        if ($resp == "Y") {
        ?>
    <link href="/wscmn/fe/css/priv_generic<?php print ("_" . $bank) ?>.css" rel="stylesheet" type="text/css"
          media="all">
    <link href="/wscmn/fe/css/priv_print<?php print ("_" . $bank) ?>.css" rel="stylesheet" type="text/css"
          media="print">
        <?php
        } else {
        // CSS RESPONSIVE "OLD SCHOOL"
        ?>
    <!-- CARICAMENTO DEI CSS CORRETTI -->
    <link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_generic.css" media="all">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/wscmn/css/priv_generic_compat.css"/>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_special.css" media="all">
    <link rel="stylesheet" type="text/css" href="/wscmn/css/ret/priv_fes.css" media="all">
    <link rel="stylesheet" type="text/css" href="/fe/css/noresp_priv_color.css" media="all">
    <link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_print.css" media="print">
    <link rel="stylesheet" type="text/css" href="/wscmn/css/priv_calendar.css" media="all">
        <!-- Fine css non responsive -->

    <?php
        }
    } else {
    ?>
    <link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
        <script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="/wbresp/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
        <!--NUOVI CSS -->
    <link rel="stylesheet" href="/wbresp/css/contenuti_pubblica.css"/>

    <?php
    }
    ?>
    <!-- DECLINAZIONI SPECIALI PER LIBRERIE -->
    <style>
        <?php
        if ($hostsuffix == "fix")  {
        ?>
        body {
            background: transparent url(/librerie/img/bgfix.png) repeat 0 0
        }
        <?php
        }
        ?>

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

    <!-- JS -->
    <script type="text/javascript">
        navIndex = [];
        cgi_script = "";
    </script>

    <script type="text/javascript"
            src="/librerie/include/commons/ajax/priv_menu.php?bank=<?php print $bank ?>"></script>
    <script type="text/javascript" src="/wscmn/fe/js/jquery.js"></script>
    <script type="text/javascript" src="/wscmn/fe/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js"></script>
    <!-- JS LIBRERIE (non includere in sviluppo) -->
    <script type="text/javascript" src="/librerie/js/priv_librerie.js"></script>
    <!-- FINE JS LIBRERIE -->
    <script type="text/javascript" src="/wscmn/fe/js/priv_generic.js"></script>
    <script type="text/javascript" src="/wscmn/js/priv_generic.js"></script>
    <script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js"></script>
    <script type="text/javascript" src="/librerie/js/librerie.js"></script>
    <script type="text/javascript" src="/librerie/php/plugins/tinymce/tinymce.min.js"></script>
    <!-- /JS -->
</head>

<body class="bglightcolor">
<div id="heading">

    <div class="wrapper bgcolor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1><?php if ($pag != "indice" && $pag != "indice_pubblica") { ?><a
                            href="/connect.php?page=librerie.php&amp;pag=indice<?php if ($pag == "catalogo_pubblica") print ("_pubblica"); ?>&amp;customer=<?php print $type; ?>"
                            class="btmenu"><i class="icon icon-arrow_left icon-1x"></i></a><?php } ?>
                        Librerie <?php print strtoupper($fullname);
                        if ($pag == "indice_pubblica" || $pag == "catalogo_pubblica") print(" pubblica"); ?></h1>
                </div>
                <div class="col-xs-12 col-md-6">
                    <?php
                    if ($pag != "indice_pubblica" && $pag != "catalogo_pubblica") {
                        /* virtual ("librerie_navconsole.php"); */
                        ?>
                        <a class="goto goto-specifiche" href="/librerie/specifiche/pagine/generali/index.html"
                           target="_blank" title="Specifiche generali"></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
virtual("/librerie/php/librerie_" . $pag . ".php");
?>
</body>
</html>
