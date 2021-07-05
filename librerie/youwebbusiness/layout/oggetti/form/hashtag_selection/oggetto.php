<section>
  <!-- Utilizzare la classe "mono-htag" se si vuole limitare l'inserimento a un SINGOLO-HTAG 
      - Ricordarsi di caricare un solo HTAG come attivo nel caso ci si trovi in questa modalità!!!
  -->
  <div class="bordered htag-module mono-htag">
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
          <div id="tg-1" class="htag-tag">
            <i class="icon icon-round_check"></i>
            <span class="htag-text">#progetto1</span>
          </div>
          <div id="tg-2" class="htag-tag selected">
            <i class="icon icon-round_check"></i>
            <span class="htag-text">#progetto2</span>
          </div>
          <div id="tg-3" class="htag-tag">
            <i class="icon icon-round_check"></i>
            <span class="htag-text">#progetto_molto_molto_molto_molto_lungo3</span>
          </div>
          <div id="tg-4" class="htag-tag htag-hide">
            <i class="icon icon-round_check"></i>
            <span class="htag-text">#progetto4</span>
          </div> 
          <div id="tg-5" class="htag-tag htag-hide">
            <i class="icon icon-round_check"></i>
            <span class="htag-text">#progetto_molto_molto_molto_molto_lungo5</span>
          </div>        
        </div>
        <a id="more-htag" class="text-with-icon right-icon float-right">
          <span class="icon icon-circle_plus"></span>
          Vedi tutti
        </a>
        <a id="minus-htag" class="text-with-icon right-icon float-right d-none">
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
                    <input type="text" class="form-control input-all-border" name="htag-input" placeholder="Inserisci hashtag" id="htag-input" value="">
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
        <!-- Nel caso la modalità sia "mono-htag" ricordarsi di caricare un solo HTAG come attivo!!!
        -->
        <div class="htag-added-wall">
          <div id="tg-2-add" class="htag-tag selected">
            <i class="icon icon-close"></i>
            <span class="htag-text">#progetto2</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function(){

    // Verifica della modalità di inserimento e avvio della funzione di pulizia
    function htagaddedwallclear() {
      if($(".htag-module").is('.mono-htag')) {
        // Pulizia dell'elenco degli Htag selezionati
        $('.htag-added-wall .htag-tag').each(function () {
          $(".htag-wall").find('#' + $(this).attr('id').slice(0,-4)).toggleClass("selected");
          $(this).remove();
        });
      }
    }   

    // Funzione per gestire l'Append
    function htagAppendOn() { 
      if($(this).attr('id').slice(-4)=="-add") {
        $(".htag-wall").find('#' + $(this).attr('id').slice(0,-4)).toggleClass("selected");
      }      
      $(this).remove();
    }
    
    $(document).on('click', ('.htag-added-wall .htag-tag'), htagAppendOn);

    $(".htag-wall .htag-tag").click(function () {
      if($(this).hasClass("selected")) {
        $(this).toggleClass("selected");
        $(".htag-added-wall").find('#' + $(this).attr('id') + '-add').remove();        
      } else {
        htagaddedwallclear();
        $(this).toggleClass("selected");
        let $newtag = '<div id="'+ $(this).attr('id') + '-add" class="htag-tag selected"><i class="icon icon-close"></i><span class="htag-text">' + $(this).find(".htag-text").text() + '</span></div>';
        $(".htag-added-wall").append($newtag);      
      }        
    });

    $(".htag-added-wall .htag-tag").click(function () {
      $(".htag-wall").find('#' + $(this).attr('id').slice(0,-4)).toggleClass("selected");
      $(this).remove(); 
    });

    // Gestione inserimento htag con Autocomplete
    /* var availableTags = [];
    var newTagsCount = 0;

    $( "input[name=htag-input]" ).autocomplete({
      source: availableTags,
      select: function() {
        newTagsCount++;
        let newtagtext = "" ;
        if($('input[name=htag-input]').val().trim().charAt(0)=="#") {
          newtagtext = $('input[name=htag-input]').val().trim();
        }else{
          newtagtext = '#' + $('input[name=htag-input]').val().trim();
        }
        let newtag = '<div id="tag-'+ newTagsCount + '-add-new" class="htag-tag selected"><i class="icon icon-close"></i><span class="htag-text">' + newtagtext + '</span></div>';
        $(".htag-added-wall").append($newtag);
        availableTags[0]= "";
        $(this).val(''); 
        return false;
      },
      open: function(event, ui) {
        let widthctl = ($(this).width() + 18);
        $(this).autocomplete("widget").attr('style', function(i,s) { return (s || '') + 'width: '+ widthctl + 'px !important;' });
      }
    });  

    $('input[name=htag-input]').keyup(function() {
      let newautocompletetag = "";
      if($(this).val().trim().charAt(0)=="#"){
        newautocompletetag = $(this).val().trim();
      }else{
        newautocompletetag = '#' + $(this).val().trim();
      }
      availableTags[0]=(newautocompletetag);        
    }); */

    // Gestione inserimento htag con Bottone CREA
    var newTagsCount = 0;
    $("#btnCreaTag").click(function () {
      htagaddedwallclear();
      newTagsCount++;
      let newtagtext = "" ;
      if($('input[name=htag-input]').val().trim().charAt(0)=="#") {
        newtagtext = $('input[name=htag-input]').val().trim();
      }else{
        newtagtext = '#' + $('input[name=htag-input]').val().trim();
      }
      let newtag = '<div id="tag-'+ newTagsCount + '-add-new" class="htag-tag selected"><i class="icon icon-close"></i><span class="htag-text">' + newtagtext + '</span></div>';
      $(".htag-added-wall").append(newtag);
      $('input[name=htag-input]').val('');
    });

    // Show-Hide Default Tags
    $("#more-htag").click(function () {
      $("#more-htag").toggleClass("d-none");
      $("#minus-htag").toggleClass("d-none");
      $(".htag-wall .htag-tag.htag-hide").addClass("htag-show");
      $(".htag-wall .htag-tag.htag-hide").removeClass("htag-hide");      
    });
    $("#minus-htag").click(function () {
      $("#more-htag").toggleClass("d-none");
      $("#minus-htag").toggleClass("d-none");
      $(".htag-wall .htag-tag.htag-show").addClass("htag-hide");
      $(".htag-wall .htag-tag.htag-show").removeClass("htag-show");      
    });
  });
</script>

