<div class="d-flex flex-column align-items-start flex-sm-row align-items-sm-center w-100">
  <h1 class="flex-grow-1 mr-3 nowrap">
    Richiedi finanziamento
  </h1>
  <div class="align-item-end d-flex flex-row align-items-center mb-3">
    <span class="float-left mr-3 text-right">Alcuni rapporti potrebbero essere non disponibili</span>
    <button type="button" class="btn-icon-help float-right" data-modal-help></button>
  </div>
</div>

<!-- SELETTORE DOSSIER DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
<!-- END SELETTORE DOSSIER DI ESEMPIO -->

  <!-- Configuratore prestito -->
  <!-- /// SEPARARE -->
  <style>
    /* Oggetti generici */
    .loading {background-image: url("./fe/img/loading.gif");
    background-repeat:no-repeat;
    background-position:center center}
    
    .loading>* {visibility:hidden}
    .sml.loading {min-height:200px}

    /* Countdown */
     

    /* Oggetti dedicati */
    .configuratore .top-evidente {text-align:center}
    .slider-input {display:block;font-size:20px;font-weight:bold; width:100px;padding: 5px 10px; border:solid 1px #ccc;border-radius:5px; position:relative;
    margin:0 auto;float:none;clear:both;}
    .slider-input::after {position:absolute;content: "&euro"}
    .slider-output {font-size:20px;font-weight:bold; width:100px;padding: 6px 10px; position:relative; display:block;
    margin:0 auto;float:none;clear:both;}

    /* Offerta */
    .cd-block {width:auto; margin:0 auto; display:inline-block; vertical-align:top;}
    .cd-block span {    font-weight: bold;
    text-transform: uppercase;
    width: 110px;
    padding: 18px 20px 0 0;
    text-align: right;
    float: left;}
    .cd-block .countdown {font-weight:bold; text-transform:uppercase; text-align:right;display:inline-block; background-color:blue; padding:0 0 0 70px;
      background: transparent url(./fe/img/scadenza_countdown.png) no-repeat 0 0; background-size: 53px 68px;
      text-align:left;
      }
    .cd-block .countdown div.cdblock {width:70px; display:inline-block; text-align:center;}
    .cd-block .countdown div.cdblock span {text-align:center;width:100%;padding:0;font-weight:normal;font-size:12px}
    .cd-block .countdown div.cdblock span.time-countdown {font-weight:bold; font-size:50px;line-height:50px;letter-spacing:-3px;}
    .cd-block .countdown div.cdblock.giorni {color: #2F9988}
    
    /* Risultati */
    .results {width:100%;display:flex;min-height:30px;justify-content:space-between}
    .results.disabled {opacity:0.6}
    .results .result-box {flex-grow:1;padding:15px;border: solid 1px #ccc;flex-basis:20%;margin:0 0 15px 15px;text-align:center;}
    .results .result-box:first-child {margin-left:0;}
    .results .result-box span.result-label {clear:both;display:inline-block;width:100%;text-transform:uppercase; font-size:14px;font-weight:bold;}
    .results .result-box span.result {clear:both;display:inline-block;width:100%;font-size:21px;}

  </style>
  <!-- /// FINE SEPARARE -->
  
  <script type="text/javascript">

      var esempioHandlerCalcola = function(dataToSend,callback) {
        var dataObject = {
          "spese": Math.round(Math.random()*3000*100)/100,
          "taeg": Math.round(Math.random()*10*100)/100,
          "tan": Math.round(Math.random()*10*100)/100,
          "rate":parseInt( Math.random()*11)+1,
          "rata":Math.round(Math.random()*1000*100)/100
        }
        // Esempio tracciatura dei dati ricevuti
        console.log(dataToSend);
        setTimeout(function(){callback(dataObject)},1000);

      }
  </script>

  <script type="text/javascript" src="./fe/js/configuratore_lending.js"></script>
  <script type="text/javascript" >
    confLending({
      id: "#configuraPrestito",
      scadenza: 1617141600000,
      handlerCalcola: esempioHandlerCalcola
    })
  </script>
  <!-- Blocco contentente il configuratore -->
  <section id="configuraPrestito" class="bordered sml loading"></section>
  <!-- Fine blocco contentente il configuratore -->
  
  <!-- Fine configuratore prestito -->

  <!-- INFORMATIVE -->
  <section class="no-margin-section bordered mt-3 mb-3 p-3">
  <div class="row">
    <div class="col-12">
      <h2>Leggi i documenti informativi per proseguire</h2>
      <div class="d-flex align-items-center ">
        <button class="btn btn-link mb-0 mr-4 pl-0" id="doc1-button" data-modal-open="doc1">
          <img src="./fe/img/icon/pdf.svg">
          Foglio informativo
        </button>
        <button class="btn btn-link mb-0 mr-4 pl-0" id="doc2-button" data-modal-open="doc2">
          <img src="./fe/img/icon/pdf.svg">
          Minuta di contratto
        </button>
      </div>
    </div>
  </div>  
  </section>
  <!-- END INFORMATIVE -->


<!-- FORM DI RICHIESTA FINANZIAMENTO (campi hidden) -->
<!-- 
  NOTE IMPORTANTI: 
  NELLA POST, RECUPERARE SOLO IL VALORE DEI CAMPI IN QUESTA FORM. 
  Il range NON serve. 
-->

<!-- Pulsantiera -->
<div class="w-100">
  <form id="prestitoForm" action="" method="POST">
    <input type="hidden" id='prestitoValue'>
    <input type="hidden" id='foglio_informativo' data-control="doc1" value="0">
    <input type="hidden" id='minuta_di_contratto' data-control="doc2" value="0">
    <button class="btn btn-primary float-right" id="prestitoSubmit" disabled>
      RICHIEDI FINANZIAMENTO
    </button>
  </form>
</div>
<!-- Fine pulsantiera -->

<!-- END FORM DI RICHIESTA FINANZIAMENTO -->
