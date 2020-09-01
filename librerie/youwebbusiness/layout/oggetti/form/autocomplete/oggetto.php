

<div class="bordered mb-4">
  <form class="form-grid needs-validation" novalidate>
    <div class="form-group col-sm-6 col-md-3">
        <label class="control-label">Autocomplete a caricamenti successivi</label>
        <div class="input-group autocomplete">
          <input id="autocompleteCs" type="text" class="form-control ui-autocomplete-input" role="menu" autocomplete="off">
          <button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title="">
              <div class="input-group-append">
              </div>
          </button>
        </div>
    </div>
  </form>
</div>

<div class="modal fade" data-modal="default">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <?php /* <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="./fe/img/icon/close.svg">
        </button> */ ?>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
//RISULTATI DELL'EVENUTALE CHIAMATA
var srcResults = [
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "20 ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "40 ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "60 ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "80 ENERGIA LOREM IPSUM "
    
];
//numero massimo di risultati per volta
var inputAutocomplete = $("#autocompleteCs"),
    btnAutocomplete = inputAutocomplete.next('button'),
    isOpenMenu = false;

//EMULAZIONE BOTTONE FINTA SELECT
  btnAutocomplete.on('click',function(event){
      if(!isOpenMenu) {
        inputAutocomplete.val('').trigger('keydown').focus();
        isOpenMenu = true;
      }
      else {
        inputAutocomplete.autocomplete("close");
        isOpenMenu = false;
    }
});
//GESTIONE CLASSI  PER DARE IL FOCUS/BLUR ANCHE AL BOTTONE
$("#autocompleteCs").on("focus", function(){
    $(this).closest(".input-group").addClass("focus");
    btnAutocomplete.addClass("btn-focus");
})

$("#autocompleteCs").on("blur", function(){
  $(this).closest(".input-group").removeClass("focus");
  btnAutocomplete.removeClass("btn-focus");

})

//AUTOCOMPLETE
$("#autocompleteCs").autocomplete({
    minLength: 0, // numero di lettere dopo il quale si apre la tendina adeguare a valore opportuno
    source: function(request, response) {
        var results = $.ui.autocomplete.filter(srcResults, request.term);
        //numero di risultati da caricare
        NmaxRis = typeof(NmaxRis)!== "undefined" ? NmaxRis : 20;
        
        textNmaxRis = NmaxRis.toString();
        textIn = "Primi";
        actionLink ="<a href=\"javascript:;\" id=\"actionMostra\" >Mostra di più</a>";
        if(results.length < NmaxRis || NmaxRis>40) {
            textIn= "Tutti i";
            textNmaxRis = "",
            actionLink= "<a data-modal-default id=\"actionModale\" href=\"javascript:;\">Non trovi quello che cerchi?</a>";

        }
        if(NmaxRis<40)
        {
          response(results.slice(0, NmaxRis));
        }
        else {
          response(results);
        }
       
    },
   
    create: function(event, ui) {
      
      $(this).data('ui-autocomplete')._renderItem  = function( ul, item ) {
      
        return $( "<li>")
		        .append( "<div>" + item.label.replace($("#autocompleteCs").val().toUpperCase(), "<strong>" + $("#autocompleteCs").val().toUpperCase() + "</strong>"))
		        .addClass('ui-menu-item')
		        .appendTo(ul);
	    }
      var menuUl = $.ui.autocomplete.prototype._renderMenu;
      $(this).data('ui-autocomplete')._renderMenu = function( ul, items ) {
      menuUl.apply( this, [ul, items] );
      var htmlToAppend = "<div class=\"menu-bottom\">" + "<span class=\"text-search\"></span>"  + " " + "<span class=\"input-value\"></span>" + "</span>" + "<span class=\"action-link\"></span></div>";
      if($("#wrapper-ul").length===0) {
             ul.wrap("<div id=\"wrapper-ul\">");
             $("#wrapper-ul").append(htmlToAppend);
             //$(htmlToAppend).insertAfter($(".input-group.autocomplete"));
      }
      $(".input-value").html("<strong>\"" + $("#autocompleteCs").val() + "\"</strong>");
      $(".text-search").text( textIn + " " + textNmaxRis + " risultati contenenti");
      $(".action-link").html(actionLink);
      /*$(".menu-bottom").css ({
            //top: $("#wrapper-ul ul").height() +  $(".menu-bottom").height() + "px",
            top: $("#wrapper-ul ul").position().top,
            position: "absolute",
      })*/
      
      }
    },
    open: function(event,ui) {
      initModali();
      readyToClose = false;
      $(".menu-bottom").css ({
           top: $("#wrapper-ul ul").position().top,
           left: $("#wrapper-ul ul").position().left,
           position: "relative"
           
      })
      $(document).on("click", function(event) {
         if(event.target.id!=="actionMostra" && event.target.id!=="actionModale") {
           readyToClose = true;
           inputAutocomplete.autocomplete("close");
           
         }
      }) 
      $(".menu-bottom").show();
      $("#actionMostra").on("click", function() {
           NmaxRis += 20;
           readyToClose = true;
           inputAutocomplete.autocomplete("close");
           inputAutocomplete.trigger('keydown').focus();
         
      }) 
       
      },
      close: function(event,ui) {
         $(".menu-bottom").hide();
         isOpenMenu = false;
      }
}).data("uiAutocomplete").close = function(e){
    if(readyToClose)
       {
        this.menu.element.is(":visible") && (this.menu.element.hide(), this._trigger("close", e));
        
       }
        
    else
        return false;    
};;




</script>