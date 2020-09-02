
 <p> digitare ad esempio la parola energia</p>
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

<div class="modal fade" data-modal="default" id="modalAutoComplete">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pagamento a favore di</h5>
        <?php /* <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="./fe/img/icon/close.svg">
        </button> */ ?>
        <a href="#" data-dismiss="modal" aria-label="Close" >
          <img src="./fe/img/icon/close.svg">
        </a>
      </div>
      <div class="modal-body">
         <p>testo ancora da verificare</p>
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
    "20 ENERGIA LOREM IPSUM",
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
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "40 ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "60 ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM ",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "ENERGIA LOREM IPSUM",
    "ENERGIA SPA",
    "ENERGIA SPA BENEDETTI",
    "ENERGIA LUCE GAS",
    "80 ENERGIA LOREM IPSUM "
];
//numero massimo di risultati per volta
var inputAutocomplete = $("#autocompleteCs"),
    btnAutocomplete = inputAutocomplete.next('button'),
    isOpenMenu = false,
    readyToClose = false;

//EMULAZIONE BOTTONE FINTA SELECT
  btnAutocomplete.on('click',function(event){
      if(!isOpenMenu) {
        
        inputAutocomplete.trigger('keydown').focus();
        isOpenMenu = true;
      }
      else {
        inputAutocomplete.autocomplete("close");
        NmaxRis = 20;
        isOpenMenu = false;
    }
});
//GESTIONE CLASSI  PER DARE IL FOCUS/BLUR ANCHE AL BOTTONE
inputAutocomplete.on("focus", function(){
    $(this).closest(".input-group").addClass("focus");
    btnAutocomplete.addClass("btn-focus");
})

inputAutocomplete.on("blur", function(){
  $(this).closest(".input-group").removeClass("focus");
  btnAutocomplete.removeClass("btn-focus");

})


//alla chiusura del modal resetto l'autocomplete

$("#modalAutoComplete").on('hidden.bs.modal', function (e) {
  inputAutocomplete.val('');
});
//AUTOCOMPLETE
inputAutocomplete.autocomplete({
    minLength: 0, // numero di lettere dopo il quale si apre la tendina adeguare a valore opportuno
    source: function(request, response) {
        var results = $.ui.autocomplete.filter(srcResults, request.term);
        //numero di risultati da caricare
        NmaxRis = typeof(NmaxRis)!== "undefined" ? NmaxRis : 20;
        //corrispondente testo da mostrare con il numero dei risultati
        textNmaxRis = NmaxRis.toString();
        //corrispondente testo iniziale, variabile in base al numero dei risultati
        textIn = "Primi";
        //azione sul link nell'elenco
        actionLink ="<a href=\"javascript:;\" id=\"actionMostra\" >Mostra di più</a>";
        //se il numero dei risultati totali è inferiore al numero massimo da visualizzare o se si è già superata la soglia dei 40...carico tutti i risultati
        
        if(results.length <= NmaxRis || NmaxRis>40) {
           
            textIn= "Tutti i";
            textNmaxRis = "",
            actionLink= "<a data-modal-default id=\"actionModale\" href=\"javascript:;\">Non trovi quello che cerchi?</a>";

        }
        //altrimenti ne carico solo il mnumero massimo consentito
        if(NmaxRis<=40)
        {
          response(
            
             results.slice(0, NmaxRis)
            
            );
        }
        else {
          response(results);
        }
      
       
    },
   create: function(event, ui) {
      $(this).data('ui-autocomplete')._renderItem  = function( ul, item ) {
        //nel creare gli <li> stilizzo in grassetto le lettere ricercate
        return $( "<li>")
		        .append( item.label.replace($("#autocompleteCs").val().toUpperCase(), "<strong>" + $("#autocompleteCs").val().toUpperCase() + "</strong>"))
		        .attr("role","option")
            .addClass('ui-menu-item')
            .appendTo(ul);
	    }
      var menuUl = $.ui.autocomplete.prototype._renderMenu;
     
      $(this).data('ui-autocomplete')._renderMenu = function( ul, items ) {
      menuUl.apply( this, [ul, items] );
      //html bottom contentente il testo dinamico e il link (mostra o overlayer)
      var htmlToAppend = "<div class=\"menu-bottom\">" + "<span class=\"text-search\"></span>"  + " " + "<span class=\"input-value\"></span>" + "</span>" + "<span class=\"action-link\"></span></div>";
      //per poter posizionare l'html bottom wrappo l'ul con un contenitore
      if($("#wrapper-ul-autocomplete").length===0) {
             ul.attr("role","listbox").wrap("<div id=\"wrapper-ul-autocomplete\">");
             $("#wrapper-ul-autocomplete").append(htmlToAppend);
      }
      //costruisco l'html dinamico
      $("#wrapper-ul-autocomplete .input-value").html("contenenti <strong>\"" + $("#autocompleteCs").val() + "\"</strong>");
      $("#wrapper-ul-autocomplete .text-search").html( textIn + " " + "<strong>" + textNmaxRis + "</strong>" + " risultati");
      $("#wrapper-ul-autocomplete .action-link").html(actionLink);
      }
    },
    open: function(event,ui) {
      //inizializzo la modale che eventualmente dovrà aprirsi
      initModali();
      //variabile che gestisce il semaforo per la chiusura del menu
      readyToClose = false;
      isOpenMenu = true;
      //posiziono il testo bottom rispetto alla tendina aperta
      $(".menu-bottom").css ({
           top: $("#wrapper-ul-autocomplete ul").position().top,
           left: $("#wrapper-ul-autocomplete ul").position().left,
           position: "relative"
      })

      //se ho aperto la tendina senza digitare alcun carattere non compare la parte di testo "contenenti..."
      $("#autocompleteCs").val() === "" ?  $("#wrapper-ul-autocomplete .input-value").hide() :  $("#wrapper-ul-autocomplete .input-value").show()

      //condiziono la chiusura automatica del menu al fatto di non cliccare sul link posizionato in bottom. Se clicco altrove si chiude come di default
      $(document).on("click", function(event) {
      if(!readyToClose && event.target.id!=="actionMostra" && event.target.id!=="actionModale") {
           //se, a menu aperto, clicco altrove che non siano i link in bottom il comportamento è usuale, il menu si chiude e ripristino il numero di risultati da mostrare a 20
           readyToClose = true;
           inputAutocomplete.autocomplete("close"); //chiudo come da comportamento normale
           NmaxRis = 20;
           }
      }) 
      //mostro il testo bottom solo dopo l'apertura del menu
      $(".menu-bottom").show();

      //azioni al click sul link "mostra"
      $("#actionMostra").on("click", function() {
           //incremento il numero di risultati da mostrare di venti unità
           NmaxRis += 20;
           readyToClose = true;
           inputAutocomplete.autocomplete("close"); //forzo la chiusura per  permettere di ricostruire l'elenco dei risultati
           inputAutocomplete.trigger('keydown').focus(); // rinizializza l'autocomplete
           isOpenMenu = true;
         
      }) 
       
      }
}).data("uiAutocomplete").close = function(e){
    //chiusura del menu condizonata al fatto che sia acceso il semaforo verde (no click su link bottom)
    if(readyToClose)
       {
        this.menu.element.is(":visible") && (this.menu.element.hide(), this._trigger("close", e), $(".menu-bottom").hide(), isOpenMenu = false);
        }
        
    else
        return false;    
};




</script>