<style>
  .htag-module {
    padding: 1rem;
  }
  .htag-wall {
    padding: .5rem;
    border: 1px solid red;
    min-height: 60px;
  }
  .htag-added-wall {
    padding: .5rem;
    /* $gray4 */
    border: 1px solid #DDDDDD;
    min-height: 60px;
    /* $grayBG */
    background-color: #F5F5F5;
  }
  .htag-tag {
    margin: 4px 2px 4px 2px;
    padding: 3px 10px 3px 10px;
    width: fit-content;
    display: inline-block;
    /* $greenLink */
    border: solid 1px #2f9988;
    color: #2f9988;
    border-radius: 30px;
    cursor: pointer;

    /* SG verificare */
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .htag-tag .icon {
    display:none;
  }
  .htag-tag.selected, .htag-tag.solid {
    background-color: #2f9988;
    color: #fff;
  }
  .htag-tag.selected {
    padding: 3px 30px 3px 10px;
    position: relative;
  }
  .htag-tag.selected .icon {
    display: block;
    position:absolute;
    right: 4px;
    top: 5px;
    font-size: 20px;
  }
  .htag-tag.selected .icon.icon-ico_close {
    position:absolute;
    right: 4px;
    top: 7px;
    font-size: 16px;
    cursor: pointer
  }
  a.text-with-icon.right-icon .icon{
    left: auto;
    margin: 0px;
  }
  a.text-with-icon.left-icon .icon{
    right: auto;
    margin: 0px;
  }
  .input-all-border.ui-autocomplete-input{
    border:solid 1px #DDDDDD;
  }

</style>

<section>
  <div class="bordered htag-module">
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
            <i class="icon icon-ico_round_check"></i>
            <span class="htag-text">#progetto1</span>
          </div>
          <div id="tg-2" class="htag-tag selected">
            <i class="icon icon-ico_round_check"></i>
            <span class="htag-text">#progetto2</span>
          </div>
          <div id="tg-3" class="htag-tag">
            <i class="icon icon-ico_round_check"></i>
            <span class="htag-text">#progetto_molto_molto_molto_molto_lungo3</span>
          </div>
          <div id="tg-4" class="htag-tag">
            <i class="icon icon-ico_round_check"></i>
            <span class="htag-text">#progetto4</span>
          </div> 
          <div id="tg-5" class="htag-tag selected">
            <i class="icon icon-ico_round_check"></i>
            <span class="htag-text">#progetto_molto_molto_molto_molto_lungo5</span>
          </div>        
        </div>
        <a class="text-with-icon right-icon float-right">
          <span class="icon icon-ico_circle_plus"></span>
          Vedi tutti
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
                <input type="text" class="form-control input-all-border" name="htag-input" placeholder="Inserisci hashtag" id="htag-input" value="">
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
          <div id="tg-2-add" class="htag-tag selected">
            <i class="icon icon-ico_close"></i>
            <span class="htag-text">#progetto2</span>
          </div>
          <div id="tg-5-add" class="htag-tag selected">
            <i class="icon icon-ico_close"></i>
            <span class="htag-text">#progetto_molto_molto_molto_molto_lungo5</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function(){
    // Funzione per gestire l'Append
    function htagAppendOn() {
      if($(this).attr('id').slice(0,-4)=="-add") {
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
        $(this).toggleClass("selected");
        let $newtag = '<div id="'+ $(this).attr('id') + '-add" class="htag-tag selected"><i class="icon icon-ico_close"></i><span class="htag-text">' + $(this).find(".htag-text").text() + '</span></div>';
        $(".htag-added-wall").append($newtag);      
      }        
    });

    $(".htag-added-wall .htag-tag").click(function () {
      $(".htag-wall").find('#' + $(this).attr('id').slice(0,-4)).toggleClass("selected");
      $(this).remove();    
    });

    // Gestione inserimento htag
    var availableTags = [];
    var newTagsCount = 0;

    $( "input[name=htag-input]" ).autocomplete({
      source: availableTags,
      select: function() {
        newTagsCount++;
        let $newtag = '<div id="tag-'+ newTagsCount + '-add-new" class="htag-tag selected"><i class="icon icon-ico_close"></i><span class="htag-text">#' + $('input[name=htag-input]').val() + '</span></div>';
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
      availableTags[0]=('#' + $(this).val());        
    });
  });
</script>

