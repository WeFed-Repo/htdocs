<script type="text/javascript">

// CONFIGURAZIONE OGGETTO
// Config bar dei widget
// La chiave (es: 'sintesi') e' completamente personalizzabile ed e' l'argomento che verra' passato per il salvataggio
// Non vanno invece toccati desc e icon, necessari a visualizzare i vari elementi come da indicazioni ID
var wdgElenco = {
  "banner": {desc: "Banner",icon:"widget1.svg",isdouble:true},
  "calendario": {desc: "Calendario",icon:"widget2.svg"},
  "sintesi": {desc:"Sintesi patrimoniale",icon:"widget1.svg"},
  "movimenti": {desc:"Ultimi movimenti",icon:"widget2.svg"},
  "conto": {desc:"Riepilogo conto",icon:"widget1.svg"},
  "posta": {desc:"Posta personale",icon:"widget2.svg"},
  "titoli": {desc:"Titoli preferiti",icon:"widget1.svg"},
  "indici": {desc:"Indici",icon:"widget2.svg"},
  "portafoglio": {desc:"Portafoglio",icon:"widget1.svg"},
  "carta": {desc:"Riepilogo carta",icon:"widget2.svg"},
}

// Elenco ID dei widget configurati dall'utente (oppure di quelli di "default")
//var wdgConf = ["calendario"];
var wdgConf = ["indici","portafoglio","carta"];

// Inizializzazione del componente "salva"
$(function(){
  // Funzione per salvataggio (includere qui l'eventuale post del dato wdgConf)
  $("#phSalva").click(function(){
    if (!$(this).hasClass("disable")) {
        // La variabile da "salvare" e' wdgConf: si tratta dell'array con gli id dei widget scelti dall'utente
        alert(wdgConf);
    }
  });
});

// Inizializzazione dell'interattività dell'elemento
 $(function(){
  // Inizializzazioni
  phWidgetBoxesContainer = $("#pershome");
  phWidgetBoxes = $(".dhb-configuratore__boxes");
  phListaMobile = $(".dhb-configuratore__list");
  phListaDesktop = $(".dhb-configuratore__list-desktop");
  carousel = $("#carouselBar");
  carouselInner = carousel.find(".carousel-inner")
  phAlert = $("#phAlert");
  phPlaceholders = $(".placeholder, .ui-sortable-placeholder");

  // Precarica i widget salvati e gli altri nella spalla
  $.each(wdgElenco,function(k,v){
    var addedClasses = (v.isdouble) ? 'is-double' : ''
    var wdgLi = $("<li>").addClass("wdg "+addedClasses).attr({"data-id":k});
    var wdgLiRimuovi = $("<a>").addClass("btn rimuovi").html("Rimuovi ").append("<span class='icon icon-close iconRemove'></span>").click(function(){
        phRemoveWidget($(this).parents("li"))
    });
    var wdgIcona = $("<span>").addClass("icon-box icon-" + v.icon).append('<img class="icon" src="./fe/img/icon/' + v.icon + '" />');
    var wdgPlus = $("<span>").addClass("icon-piu iconAdd").click(function(){
       phAddWidget($(this).parents("li"))
    });
    wdgLi.append(
      $("<div>").addClass("wdg-wrapper").append(
        wdgIcona,
        $("<span>").addClass("wdg-nome").html(v.desc),
        wdgLiRimuovi,
        wdgPlus)
      );
    // Push nella lista dei configurati o nella colonna laterale
    if($.inArray( k, wdgConf)>=0) {
      phWidgetBoxes.append(wdgLi)
    } else {
      phListaMobile.append(wdgLi)
    }
    // Trasformazione immagini appena create in svg
     imgToSvg();
  });

  // FUNZIONI GENERALI

  // Rimozione elemento dalla lista
  phRemoveWidget = function(item) {
    var elClone = item.clone().attr("style","").removeClass("ui-sortable-helper");
    elClone.find(".rimuovi").click(function(){ phRemoveWidget($(this).parents("li")) });
    elClone.find(".icon-piu").click(function(){ phAddWidget($(this).parents("li")) });
    phListaMobile.prepend(elClone);
    item.remove();
    // Aggiorna l'elenco dei widget
    phWidgetUpdate();
  }

  phAddWidget = function(item) {
    var elClone = item.clone().attr("style","").removeClass("ui-sortable-helper");
    elClone.find(".rimuovi").click(function(){ phRemoveWidget($(this).parents("li")) });
    elClone.find(".icon-piu").click(function(){ phAddWidget($(this).parents("li")) });
    phWidgetBoxes.prepend(elClone);
    item.remove();
    phWidgetUpdate(); // Aggiorna l'elenco dei widget
  }

  phWidgetUpdate = function() {
    // Aggiorna l'elenco dei widget
    wdgConf = phWidgetBoxes.sortable("toArray",{attribute:"data-id"});
    // Conteggio degli elementi ed eventuali "blocchi"
    if (wdgConf.length<2) {
      phAlert.show();
    }
    else {
      phAlert.hide();
    }
    console.log( 'ACTION SAVE: ', wdgConf );
  }

  // Inizializza le due liste draggabili con le varie interazioni associate

  phListaMobile.sortable({
    items: "li",
    connectWith: '.dhb-configuratore__boxes',
    containment : ".dhb-configuratore"
  });

  phWidgetBoxes.sortable({
    items: "li",
    appendTo: document.body,
    containment : ".dhb-configuratore",
    connectWith: ".dhb-configuratore__list",
    update: function(event, ui){
      phWidgetUpdate();
    },
    start: function (e, ui) {
      if (wdgConf.length>0) ui.placeholder.html("<div>");
    },
    over: function (e, ui) {
      if (wdgConf.length>0) ui.placeholder.html("<div>");
      // Rimuove il placeholder esistente
      if(phPlaceholders.length>0) phPlaceholders.remove();
      // abbina la classe al placeholder
      var plus;
      if(ui.item.hasClass('is-double')) {
        ui.placeholder.addClass(plus);
        phPlaceholders.addClass(plus);
      }
    },
  });
  $("phWidgetBoxesContainer").removeClass("loading dark")
});

</script>
