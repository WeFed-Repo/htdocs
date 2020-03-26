<script type="text/javascript" src="/HT/fe/js/script/dashboard_config.js"></script>
<script type="text/javascript"> 

// Configuratore dei widget
// La chiave (es: 'sintesi') e' completamente personalizzabile ed e' l'argomento che verra' passato per il salvataggio
// Non vanno invece toccati desc e icon, necessari a visualizzare i vari elementi come da indicazioni ID
var wdgElenco = {
  "calendario": {desc: "Calendario",icon:"ico_calendario"},
  "sintesi": {desc:"Sintesi patrimoniale",icon:"ico_gestione_patrimoniale"},
  "movimenti": {desc:"Ultimi movimenti",icon:"movimenti_42"},
  "conto": {desc:"Riepilogo conto",icon:"ico_conto"},
  "posta": {desc:"Posta personale",icon:"ico_posta_arrivo"},
  "titoli": {desc:"Titoli preferiti",icon:"ico_titoli"},
  "indici": {desc:"Indici",icon:"ico_indici_mercati"},
  "portafoglio": {desc:"Portafoglio",icon:"ico_titoli_dossier"},
  "carta": {desc:"Riepilogo carta",icon:"ico_carte_pannello_controllo"}
}

// Elenco ID dei widget configurati dall'utente (oppure di quelli di "default")
var wdgConf = ["calendario","sintesi","movimenti"];

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
</script>
<div class="clearfix">
  <h1>
     <span>Personalizza</span>
  </h1>
  <a href="#" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	<div class="col-xs-12 hidden-xs hidden-print">
     <div class="contentPagina">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda tenetur nisi soluta totam pariatur quaerat.
     </div>
  </div>
</div>
<div id="pershome" class="loading">
	<ul id="phWidgets" class="lista-widget"></ul>
</div>