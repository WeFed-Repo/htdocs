<!doctype html>
<html lang="en">
    <head>
    
    <title>Webank - Questionario Customer Satisfaction</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Questionario Customer Satisfaction">
        
        <!-- CSS -->
        <link rel="stylesheet" href="/common/fe/assets/bootstrap/bootstrap.css" />
        <link rel="stylesheet" href="/common/fe/css/quest_cs.css" />
        <link rel="stylesheet" href="/WB/fe/css/quest_cs_skin.css" />
        <!-- / CSS -->
        
        <!-- JS -->
        <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
        <script type="text/javascript" src="/common/fe/js/quest_cs.js"></script>
        <!-- / JS -->

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
                    <!-- BLOCCO STEPPER -->
                    <div class="stepper-wrapper">
                        <!-- per cambiare il livello di completamento e' sufficiente cambiare la class status-X (dove X è il numero di step) -->
                        <div class="stepper status-3">
                            <span class="step step-1"></span>
                            <span class="step step-2"></span>
                            <span class="step step-3"></span>
                            <span class="step step-4"></span>
                            <span class="step step-5"></span>
                            <span class="step step-6"></span>
                        </div>
                    </div>
                    <!-- /BLOCCO STEPPER -->
                    <!-- DIV QUESTIONARIO -->
                    <div class="quest">
                        <form action="#">
                                <!-- DOMANDA -->
                                <p>Benvenuto nel questionario.<br>
                                Ti chiediamo di rispondere a queste poche domande per aiutarci a migliorare il nostro servizio. Potremmo collegare le risposte al tuo nominativo e, eventualmente, contattarti nel caso sia necessario un approfondimento.
                                <br>Grazie per il tempo che ci dedicherai!</p>
                                <p class="question">Quale delle seguenti affermazioni  descrive meglio il tuo percorso per arrivare a questo form di richiesta?</p>
                                <div class="cbr-wrapper">
                                    <label class="cbr"><input type="radio" name="ans-1" value="1"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                                    <label class="cbr"><input type="radio" name="ans-1" value="2"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                                    <label class="cbr"><input type="radio" name="ans-1" value="3"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                                    <label class="cbr"><input type="radio" name="ans-1" value="4"><span class="text">Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit Lorem ispsum dolor sit</span></label>
                                </div>
                                <!-- / DOMANDA -->
                        </form>
                    </div>
                    <div class="btn-wrapper">
                        <div class="btn-align-left">
                            <button type="button" class="btn btn-default">Indietro</button>
                        </div>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary">Continua</button>
                        </div>   
                    </div>
                    <!-- FINE DIV QUESTIONARIO -->
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