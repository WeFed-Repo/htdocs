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

    /* Oggetti dedicati */
    .slider-input {display:block;font-size:20px;font-weight:bold; width:100px;padding: 5px 10px; border:solid 1px #ccc;border-radius:5px; position:relative;
    margin:0 auto;float:none;clear:both;}
    .slider-input::after {position:absolute;content: "&euro"}
    .slider-output {font-size:20px;font-weight:bold; width:100px;padding: 6px 10px; position:relative; display:block;
    margin:0 auto;float:none;clear:both;}

  </style>
  <!-- /// FINE SEPARARE -->
  
  <script type="text/javascript">

      var esempioHandlerCalcola = function(dataToSend,callback) {
        var dataObject = {
          "taeg": 123.321,
          "tan": 21.3123
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
      scadenza: 1614556800000,
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

<!-- MODALE HELP -->
  <?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- END MODALE HELP -->


<!-- MODALE di info TAN -->
<div class="modal fade" data-modal="tan">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">TAN</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
          penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
          Nulla consequat massa quis enim. Donec pede justo, fringilla vel, 
          aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
          Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras 
          dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
          Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
          Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper 
          ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
          condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
          sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. 
          Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero 
          venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
          tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
          sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
          cursus nunc,</p>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE di info TAN -->

<!-- MODALE di info TAEG -->
<div class="modal fade" data-modal="taeg">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">TAEG</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
          Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
          penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
          Nulla consequat massa quis enim. Donec pede justo, fringilla vel, 
          aliquet nec, vulputate eget, arcu.</p>
        <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
          Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras 
          dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. 
          Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
          Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
          Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper 
          ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
          condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
          sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. 
          Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero 
          venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus 
          tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales 
          sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit 
          cursus nunc,</p>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE di info TAEG -->

<!-- MODALE DOCUMENTO 1 -->
<div class="modal fade" data-modal="doc1">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">Foglio informativo</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body"> 
        <div id="doc1" class="c-scrolled-doc">
          <div class="c-scrolled-doc__innerWrap">
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
          </div>
        </div>
        <div class="alert-to-scroll">Visualizza il documento sino alla fine per procedere.</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary c-scrolled-doc__confirm" data-confirm="doc1" disabled data-dismiss="modal" aria-label="Close">
          Ho letto la documentazione
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE DOCUMENTO 1 -->

<!-- MODALE DOCUMENTO 2 -->
<div class="modal fade" data-modal="doc2">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <div>
          <h5 class="modal-title">Minuta di contratto</h5>
        </div>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        <div id="doc2" class="c-scrolled-doc">
          <div class="c-scrolled-doc__innerWrap">
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
            Lorem ipsum dolor sit amet <br>
            Consectetuer augue nibh lacus at <br>
            Pretium Donec felis dolor penatibus <br>
            Phasellus consequat Vivamus dui lacinia <br>
            Ornare nonummy laoreet lacus Donec <br>
            Ut ut libero Curabitur id <br>
            Dui pretium hendrerit sapien Pellentesque <br>
          </div>
        </div>
        <div class="alert-to-scroll">Visualizza il documento sino alla fine per procedere.</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary c-scrolled-doc__confirm" data-confirm="doc2" disabled data-dismiss="modal" aria-label="Close">
          Ho letto la documentazione
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END MODALE DOCUMENTO 2 -->
