// Inizializzazione dell'interattività dell'elemento
 $(function(){
  // Inizializzazioni 
  phWidgets = $("#phWidgets");
  phLista = $("#phLista");
  phTrash = $("#phTrash");
  phSalva = $("#phSalva");
  phAlert = $("#phAlert");
  phPlaceholder = $("<div>").addClass("placeholder").append($("<div>").html("Trascina in pagina<br> i box che vuoi vedere<br> in homepage."))

  phPlacePlaceholder = function(){
    $("#phWidgets .placeholder").remove();
     if (wdgConf.length!=9) {
        phWidgets.append(phPlaceholder.clone());
     }
     if(wdgConf.length==0) {
       phWidgets.append(phPlaceholder.clone());
     }
    }

  // Precarica i widget salvati e gli altri nella spalla
  $.each(wdgElenco,function(k,v){
      var wdgLi = $("<li>").addClass("wdg").attr({"data-id":k});
      var wdgLiRimuovi = $("<a>").addClass("btn rimuovi").html("Rimuovi").click(function(){
          phRemoveWidget($(this).parents("li"))
      });
      var wdgIcona = $("<span>").addClass("icon icon-" + v.icon);
      var wdgPlus = $("<span>").addClass("icon icon-piu").click(function(){
         phAddWidget($(this).parents("li"))
      });
      wdgLi.append(
          $("<div>").addClass("wdg-wrapper").append(
            wdgIcona,
            $("<span>").addClass("wdg-nome").html(v.desc),
            wdgLiRimuovi,
            wdgPlus)
        );
      if ($.inArray( k, wdgConf)>=0) {
          // Push nella lista dei configurati
          phWidgets.append(wdgLi);
      }
      else
      {
          // Push nella colonna laterale
          phLista.append(wdgLi);
      }
  });
  phPlacePlaceholder();

  // Funzioni generali
  // Rimozione elemento dalla lista
  phRemoveWidget = function(item) {
    var elClone = item.clone().attr("style","").removeClass("ui-sortable-helper");
    elClone.find(".rimuovi").click(function(){
          phRemoveWidget($(this).parents("li"))
      });
     elClone.find(".icon-piu").click(function(){
          phAddWidget($(this).parents("li"))
      });
    phLista.prepend(elClone);
    item.remove();
    // Aggiorna l'elenco dei widget
    phWidgetUpdate();
  }

  phAddWidget = function(item) {
    var elClone = item.clone().attr("style","").removeClass("ui-sortable-helper");
    elClone.find(".rimuovi").click(function(){
          phRemoveWidget($(this).parents("li"))
      });
    elClone.find(".icon-piu").click(function(){
          phAddWidget($(this).parents("li"))
      });
    phWidgets.prepend(elClone);
    item.remove();
    // Aggiorna l'elenco dei widget
    phWidgetUpdate();
  }

  phWidgetUpdate = function() {
    // Aggiorna l'elenco dei widget
      wdgConf = $("#phWidgets").sortable("toArray",{attribute:"data-id"});
      // Conteggio degli elementi ed eventuali "blocchi"
      if (wdgConf.length<2) {

        if (wdgConf.length==0) {
          phTrash.hide();
        }
        else
        {
          phTrash.show();
        }
        phSalva.addClass("disable");
        phAlert.show();

      }
      else
      {
        phTrash.show(); 
        phSalva.removeClass("disable");
        phAlert.hide();
      }

      phPlacePlaceholder();
  }

  // Inizializza le due liste draggabili con le varie interazioni associate (es: eliminazione elementi)
  // Lista laterale spalla

  $("#phLista").sortable({
        items: "li",
        connectWith: "#phWidgets",
        containment : "#outerwrapper"
  });

  $("#phWidgets").sortable({
        items: "li",
        appendTo: document.body,
        containment : "#outerwrapper",
        connectWith: "#phLista",
        update: function(event, ui){
            phWidgetUpdate();
          },
        start: function (e, ui) { 
          if (wdgConf.length>0) {
              ui.placeholder.html("<div>");
            }
          },
        over: function (e, ui) { 
            if (wdgConf.length>0) {
              ui.placeholder.html("<div>");
            }
            // Rimuove il placeholder esistente
            $("#phWidgets .placeholder").remove();
          },
        out: function (e, ui) { 
            phPlacePlaceholder();
          }
        });

  $(".widget, #pershome").removeClass("loading dark")

  // Cestino
  phTrash.droppable({
      over: function(event,ui) {
        $(this).addClass("activate");

      },
      deactivate: function(event,ui) {
        $(this).removeClass("activate");

      },
      drop: function( event, ui ) {
        phRemoveWidget(ui.draggable);
      }
    });

});