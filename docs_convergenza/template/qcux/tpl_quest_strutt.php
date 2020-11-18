<?php
$tpl = $_GET["tpl"];
$bank = $_GET["bank"];
if ( empty($tpl) ) {
    $tpl="tpl_quest_radio.php";
}
if ( empty($bank) || $bank !=="bbpm") {
    $bank="wb";
}
?><!doctype html>
<html lang="en">
    <head>
    <title>Webank - Questionario Customer Satisfaction</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Questionario Customer Satisfaction">
        
        <!-- CSS -->
        <link rel="stylesheet" href="/wbresp/qcux/css/bootstrap.css" />
        <link rel="stylesheet" href="/wbresp/qcux/css/common_qcux.css" />
        
        <!-- Css diverso per banca -->
        <?php if ($bank==="bbpm"){ ?>
        <link rel="stylesheet" href="/HT/fe/css/qcux.css" />
        <?php } ?>
        <link rel="stylesheet" href="/wbresp/qcux/css/<?php print($bank);?>_qcux.css" />
        <!-- Css diverso per banca -->
        
        <!-- / CSS -->
        
        <!-- JS -->
        <script type="text/javascript" src="/wbresp/qcux/js/jquery.js"></script>
        <!-- / JS -->

        <script type="text/javascript">
        // Esempio di automazione per la gestione degli errori
        var setError = function() {
            var errorBlock = $('#esempioerrore');
            errorBlock.show();
            $([document.documentElement, document.body]).animate({
                scrollTop: errorBlock.offset().top - 15 
            }, 500);
        }
        </script>

    </head>

    <body>
        <div id="main">
            <!-- HEADER -->
            <header>
                <div class="wrapper">
                    <div class="logo"></div>
                    <div clasS="title">
                        <h1>
                            <div class="logocs"></div>
                            <span class="main-title">Servizio Clienti: </span>
                            <span class="payoff">Raccontaci la tua esperienza!</span></h1>
                    </div>
                </div>
            </header>
            <!-- / HEADER -->

            <!-- CONTENUTI -->
            <div id="contenuti">
                <div class="wrapper">
                    <?php if($tpl !=="tpl_quest_feedback.php") { ?>
                        <!-- BLOCCO STEPPER -->
                        <div class="stepper-wrapper">
                            <!-- per cambiare il livello di completamento e' sufficiente cambiare la class status-X (dove X è il numero di step) -->
                            <div class="stepper status-3">
                                <span class="step step-1"></span>
                                <span class="step step-2"></span>
                                <span class="step step-3"></span>
                                <span class="step step-4"></span>
                            </div>
                        </div>
                    <!-- /BLOCCO STEPPER -->
                    <?php } ?>
                   
                    <?php include("./".$tpl); ?>
                    
                    <div class="btn-wrapper">
                        <?php if($tpl !=="tpl_quest_feedback.php" && $tpl !=="tpl_quest_dissuasione.php") { ?>
                        <div class="btn-align-left">
                            <button type="button" class="btn btn-default" href="#">Indietro</button>
                        </div>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" href="#" onclick="setError()">Continua</button>
                        </div>
                        <?php }
                        else
                        { ?>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" href="#" onclick="setError()">Torna al sito</button>
                        </div>
                        <?php } ?>   
                    </div>
                </div>
                
            </div>
            <!-- / CONTENUTI -->
            <footer>
                <div class="wrapper">
                    <span class="info">
                        Banco BPM S.p.A. - Piazza F. Meda, 4 20121 Milano - tel. 0277001 - Rappresentante del Gruppo IVA Banco BPM Partita IVA 10537050964
                        <BR>Iscrizione al Registro IVASS (01 gennaio 2017 n° D000563706) - Gruppo Bancario Banco BPM. Tutti i diritti riservati.
                    </span>    
                </div>
            </footer>
        </div>
    </body>
</html>