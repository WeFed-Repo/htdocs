<?php

/* Colore */
$color = $_GET["color"];
if (empty($color)) {
    $color="yellow";
}
else
{
    if(!in_array($color,array("yellow","blue","green","bpm4u"))) {
          $color="yellow";
    }
} 

/* Prodotto <-- Valorizzare con i codici corretti */
$prodotto = $_GET["prodotto"];


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

    <?php
    if ($color == "green") { ?>
    <link rel="shortcut icon" type="image/x-icon" href="/wbresp/mutuo/fe/img/favicon_bpm.png?r=<?php print rand(0,9999); ?>">
    <?php
    }
    if ($color == "blue") { ?>
    <link rel="shortcut icon" type="image/x-icon" href="/wbresp/mutuo/fe/img/favicon_banco.png?r=<?php print rand(0,9999); ?>">
    <?php
    }
     if ($color == "bpm4u") { ?>
    <link rel="shortcut icon" type="image/x-icon" href="/wbresp/mutuo/fe/img/favicon_4u.png?r=<?php print rand(0,9999); ?>">
    <?php
    }
    ?>

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
        // qualora non venissero indicati le inizializzazioni sarebbero quelle "generiche"
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
            mUrl = "./fe/ajax/calcolatore_mutui_json.php";

    </script>
    <!-- Fine delle automazioni -->
    <title>Mutuo PROMO - BancoBpm Gruppo</title>
  </head>
  <body<?php if($promo==true) print (" class=\"promo\""); ?>>
    

    <!-- BLOCCO HEADER -->
    <header>
      <div class="container">
            <a href="http://www.bancobpm.it/index.php" title="<?php print($color=="bpm4u")? "BancoBpm 4U" : "BancoBpm" ?>" target="_blank"><img src="./fe/img/<?php print($color=="bpm4u")? "bpm4U_logo.jpg" : "logo.png" ?>"></a>
      </div>
    </header>
    <!-- FINE BLOCCO HEADER -->

    <!-- CONTENITORE PRINCIPALE -->
    <div id="main" class="loading">
      <div class="container">
        
        <!-- MAIN VISUAL -->
        <div class="main-visual">
          <div class="visual-promo" id="visual_images">
              <div class="promo-box" id="visual_desc">
                   <h3>Lorem ipsum dolor</h3>
                  	<p>Sit amet consectetur adipiscing elit</p>
              </div>
          </div>
          
          <hr>
          <div class="fascione">
            <div class="row">
                <div class="col-xs-12">
                    <h2 id="visual_title"></h2>
                    <p id="visual_payoff"></p>
                </div>
            </div>
          </div>
        </div>
        <!-- FINE MAIN VISUAL -->

        <div class="row">
          <!-- BLOCCO PREVENTIVATORE -->
          <div class="col-sm-8 col-xs-12">
            <p id="introText"></p>
            <!-- TITOLATURA ACQUISTO O SURROGA -->
            <h2 class="titFinalita"><span id="titFinalita"></span></h2>
            <div id="mutuiWrap"></div>
          </div>
          <!-- FINE BLOCCO PREVENTIVATORE -->

          <!-- SPALLA -->
          <div class="col-sm-4 col-xs-12">
            <div class="bordato">
                 <p class="intro"><strong>Vuoi saperne di pi&ugrave;?</strong><br>Inserisci i tuoi dati, ti ricontatteremo a breve.</p>
                     <hr>
                     <form method="POST" name="contactform" action="#" id="formContatto" novalidate="novalidate">
                        <input type="hidden" name="mutuo_nomeProdotto" />
                        <input type="hidden" name="mutuo_importoRata" />
                        <input type="hidden" name="mutuo_indice" />
                        <input type="hidden" name="mutuo_spread" />
                        <input type="hidden" name="mutuo_tasso" />
                        <input type="hidden" name="mutuo_taeg" />
                        <input type="hidden" name="mutuo_istruttoria" />
                        <input type="hidden" name="mutuo_perizia" />
                        <input type="hidden" name="mutuo_incassoRata" />
                        <input type="hidden" name="mutuo_polizza" />
                        <input type="hidden" name="mutuo_imposta" />
                        <input type="hidden" name="mutuo_costoTotaleCredito" />
                        <input type="hidden" name="mutuo_importoTotaleConsumatore" />
                        <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control no-margin" id="nome" placeholder="Inserisci il nome*" name="nome" required="required" aria-required="true">
                                    <label class="error" for="nome">Inserire nome</label>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group">
                                    <input type="text" class="form-control error" id="cognome" placeholder="Inserisci il cognome*" name="cognome" required="required" aria-required="true">
                                    <label class="error" for="cognome">Inserire cognome</label>
                                 </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group">
                                       <input type="text" class="form-control" id="telefono" placeholder="Inserisci il telefono*" name="telefono" required="required" aria-required="true">
                                       <label class="error" for="telefono">Inserire telefono</label>
                                 </div>
                            </div>
                        </div>
                        <hr>                    
                        <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group no-margin-bottom">
                                     <div class="checkbox control-group  no-margin-bottom">
                                        <input type="checkbox" required="required" id="privacy" value="yes" name="privacy" aria-required="true">
                                        <label class="control control-checkbox" for="privacy">Ho preso visione dell'<a href="#">informativa sul trattamento dei dati personali</a>*</label>
                                        <label class="error" for="privacy">Compila questo campo</label>
                                     </div>
                                </div>
                                <p class="informativa">I dati inseriti saranno utilizzati da Banco BPM Spa e dalle società del Gruppo Banco BPM per inviare le informazioni richieste. <br>
                                Per visionare l'informativa completa vai sul sito <a href="http://www.bancobpm.it/generale/privacy/" target="_blank" title="Banco BPM">www.bancobpm.it</a></p>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group">
                                    <p>Con riferimento ad eventuali successivi contatti per finalit&agrave; di informazione commerciale:*</p>
                                    <div class="radio">
                                        <input type="radio" required="" class="commerciali-input" name="commerciali" value="si" id="consensoSi" aria-required="true">
                                        <label class="control control-radio" for="consensoSi">Presto il consenso</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" required="" class="commerciali-input" name="commerciali" value="no" aria-required="true"  id="consensoNo">
                                        <label class="control control-radio" for="consensoNo">Nego il consenso</label>
                                    </div>
                                  <label class="error" for="privacy">Compila questo campo</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <div class="box-captcha">
                                        <div class="box-captcha-left">
                                            <img src="./fe/img/captcha.png">
                                        </div>
                                        <div class="box-captcha-right">
                                            <input type="text" name="captcha" required="required" id="captcha" class="altroinput form-control" placeholder="Codice *" aria-required="true">    
                                        </div>
                                    </div>
                                    <a class="privacy_text" id="refresh_captcha"><i class="fa fa-refresh"></i>&nbsp;Genera nuovo codice</a>
                                    <label class="error" for="privacy">Compila questo campo</label>       
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">

                                <!-- FEEDBACK RISULTATO INSERIMENTO RICHIESTA -->
                                 <script type="text/javascript">
  
                                 var showInviaResult = function (titolo,testo) {

                                     // Inserisce il messaggio nella modale e poi la mostra
                                     $("#resultHtml").empty().append(
                                        $("<h3>").html(titolo),
                                        $("<p>").html(testo)
                                     );
                                     $("#feedbackResult").modal("show");

                                     // Timeout per chiusura automatica della modale
                                     setTimeout(function(){$("#feedbackResult").modal("hide")},5000);

                                  }

                                  /* Blocco inizializzazioni modale */

                                  $(function(){

                                  // Esempio funzioni invia richiesta con chiamata in AJAX
                                  $("#invia_richiesta").click(function(e){
                                      
                                      // Se l'evento del JS e' il submit questa istruzione va rimossa
                                      e.preventDefault();

                                      // blocca il form
                                      $("#formContatto").addClass("loading");

                                      // Esegue la chiamata in AJAX
                                      $.ajax({
                                        url: "./fe/ajax/feedback_invio_richiesta.php",
                                        dataType: "json",
                                        success: function(data) {


                                          if (data.ESITO=="OK") {
                                            showInviaResult("Grazie mille.","Grazie per averci scritto, verrai contattato al pi&ugrave; presto.")
                                          }
                                          else
                                          {
                                            showInviaResult("Attenzione!","Si sono verificati errori in fase di richiesta. Ti invitiamo a riprovare pi&ugrave; tardi.")

                                          }


                                          // Rimozione del loading sul form
                                          $("#formContatto").removeClass("loading");

                                        }
                                      });

                                  });
                                });
                                </script>
                                <div id="feedbackResult" class="modal fade in" role="dialog" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          <div class="modal-body" id="resultHtml"></div>
                                        </div>
                                    </div>
                                 </div>
                                <!-- FINE FEEDBACK RISULTATO INSERIMENTO RICHIESTA -->

                                <div class="input_form submit-button" style="margin-bottom:0">
                                 <input type="hidden" name="risposta" value="">
                                 <input id="invia_richiesta" type="submit" class="btn btn-primary"  value="Invia" name="invia">
                                </div>
                             

                            </div>
                            <div class="col-md-12">
                                 <p class="informativa pull-right"> * I campi contrassegnati con l'asterisco sono obbligatori</p>
                            </div>
                        </div>

                     </form>  
                </div>

          </div>
          <!-- FINE SPALLA -->
        </div>
      </div>
    </div>
    <!-- FINE CONTENITORE PRINCIPALE -->

    <!-- FOOTER -->
    <footer>
      <div class="container">
          <hr>
          <a href="http://www.bancobpm.it/index.php" target="_blank" title="BancoBpm"><img src="./fe/img/<?php print($color=="bpm4u")? "bpm4U_footer_logo.png" : "footer_logo.gif" ?>" title="BancoBpm"></a> 
          <p>
           <span>BANCO BPM</span> GRUPPO BANCARIO - Piazza F. Meda, 4 - 20121 Milano - tel. 02 77001<br>Rappresentante del Gruppo IVA Banco BPM Partita IVA 10537050964 - Tutti i diritti riservati
          </p>  
      </div>
    </footer>
    <!-- FINE FOOTER -->  

    <script type="text/javascript" src="./fe/js/cookiebar.js"></script>

 </body>
</html>