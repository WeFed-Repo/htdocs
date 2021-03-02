/* Oggetti relativi alla smart lending */
var sml,
    smcdrefresh;

/* Countdown autoconsistente */
var refreshContdowns = function() {
    // Attiva il refresh rapido di tutti i cd dinamici in pagina
    $.each($(".countdown[data-scadenza]"),function(i,cdw){
        // differenza tra data e scadenza
        cdw  = $(cdw);
        var scadenza = cdw.attr("data-scadenza");
        cdw.html(getCountdownHtml(scadenza));
    });
}

var getCountdownHtml = function(scadenza){
    scad =  parseFloat(scadenza);
        
    var ddiff = scad - new Date().valueOf(),
        cdcomp = $("<div>").addClass("scaduto").html("L'offerta &egrave; scaduta.")


    if (ddiff>=0) {
        var emudate = new Date (ddiff);
        var cdo = {
            giorni: Math.floor(emudate.valueOf()/(1000*60*60*24)),
            ore: emudate.getHours(),
            minuti: emudate.getMinutes(),
            secondi: emudate.getSeconds()
        } 
        cdcomp = $("<div>").html(cdo.giorni + "-"+ cdo.ore + ":" + cdo.minuti + ":" + cdo.secondi);
    }

    return cdcomp;
}

var getCountdown = function (scadenza) {

    var cdown = $("<div>").addClass("countdown").attr("data-scadenza", scadenza).html(getCountdownHtml(scadenza));
   
    // Refresh del countdown (previa distruzione dell'evento as-is se esistente)  
    clearInterval(smcdrefresh);  
    smcdrefresh = setInterval(function(){
        refreshContdowns()
    },1000);

    return cdown;
}


/* Avvio del configuratore con parametri */
var startLending = function(params) {

    // Inizializzazione dei parametri e dei vari oggetti del configuratore
    sml = new Object({
            wrap: $(params.id).addClass("loading"),
            importo: $("<div>").addClass("slider").slider({min:1,max:100,value:20}),
            rate: $("<div>").addClass("slider").slider({min:1,max:100,value:20})
        }
    );
    
    // Costruzione degli oggetti 
    sml.wrap.empty().append($("<div>").append(
        ((typeof params.scadenza != "undefined") ? getCountdown(params.scadenza) :""),
            // Range importo
            sml.importo,
            sml.rate
    ));

    setTimeout(function(){
        
        // Fine caricamento oggetto
        sml.wrap.removeClass("loading");
        
    },
    1000);

}
   
    
/* inserisce onload il configuratore */
var confLending = function(params){

    $(function(){startLending(params)});

} 