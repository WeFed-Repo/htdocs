<!DOCTYPE html>
<?php
    $forecolor="#6f8f0a";
    $backcolor="#dce7b5";
?>
<html>
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
         <link rel="stylesheet" href="/common/fe/assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- / CSS -->
 
        <!-- JS -->
        <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
        <!-- / JS -->

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

<body class="webank wb-pubblica">
    <header class="librerie"> 
        <div class="wrapper">
            <h1>Librerie Webank Pubblica <div class="switch-pp"><a href="index.php" >Privata</a><a href="index_wb_pubblica.php" class="on">Pubblica</a></div></h1>
        </div>
    </header>

<?php
virtual("librerie_indice_pubblica.php");
?>
</body>
</html>
