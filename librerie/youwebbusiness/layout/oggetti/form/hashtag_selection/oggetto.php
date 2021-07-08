<section>
  <!--
      - Ricordarsi di caricare un solo HTAG come attivo nel caso ci si trovi in modalità monotag!!!
  -->
  <div class="bordered htag-module mono-htag" id="myhtagcomponent">
    <div class="row">
      <div class="col-12">
        <h2>Crea qui il tuo hashtag</h4>
        <p>Per creare il tuo hashtag digita e clicca invio</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="htag-subtitle">
          <p>Selezionalo tra gli hashtag già creati</p>
        </div>      
        <div class="htag-wall">
          <!-- Area Caricamento Htag -->
        </div>
        <a id="more-htag" class="more-minus-htag text-with-icon right-icon float-right">
          <span class="icon icon-circle_plus"></span>
          Vedi tutti
        </a>
        <a id="minus-htag" class="more-minus-htag text-with-icon right-icon float-right d-none">
          <span class="icon icon-circle_minus"></span>
          Vedi meno
        </a>
      </div>
      <div class="col-12 col-md-6">
        <div class="htag-subtitle">
          <p>oppure creane uno nuovo</p>
        </div>
        <form class="form-grid">
          <div class="form-row">
            <div class="form-group col-12">
                <label class="control-label"><strong>Scrivi qui l’hashtag</strong></label>
                <div class="form-row">
                  <div class="col-12 col-sm-8 col-md-9 col-lg-10">
                    <input type="text" class="form-control input-all-border" name="htag-input" placeholder="Inserisci hashtag" id="htag-input" value="" maxlength="128">
                  </div>
                  <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <a class="btn btn-white brd-green fl-right btn-xs-full w-100" id="btnCreaTag">Crea</a>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <div class="htag-subtitle">
          <p><strong>L’hashtag che hai scelto:</strong></p>
        </div> 
        <div class="htag-added-wall">
          <!-- Area Caricamento Htag -->
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  // Esempio Configurazione Oggetto Htag
  // Type accettati: monotag | multitag
  var defHtag = <?php print(file_get_contents("./layout/oggetti/form/hashtag_selection/objConf.json")); ?>
</script>

<script type="text/javascript" src="./fe/js/htag_component.js"></script>
<script>
  /* Chiamata del componente Htag */
  startHtag({
    id: "#myhtagcomponent",
    objConf: defHtag,    
    // Handler Htag attivi
    //handlerModal: ,
    //handlerGetHtag:
  })
</script>