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
    },5000);

    return cdown;
}


/* Avvio del configuratore con parametri */
var startLending = function(params) {

    // Inizializzazione dei parametri e dei vari oggetti del configuratore
    sml = new Object({
            wrap: $(params.id).addClass("loading"),
            scadenza: $("<div>").addClass("top-evidente").append(
                    ((typeof params.scadenza != "undefined") ? getCountdown(params.scadenza) : ""),
                    $("<p>").html("Calcola il preventivo del tuo finanziamento selezionando l'importo richiesto, la durata, la periodicit&agrave; ed il preammortamento: <strong class='green'>la tua rata</strong> premendo su \"Calcola\" la tua rata si aggiorner&agrave;.")
                )
            ,
            importo: $("<div>").addClass("slider").slider({range:"min",min:1000,max:50000,value:20000,step:5000}),
            durata: $("<div>").addClass("slider").slider({range:"min",min:1,max:30,value:20,step:1})
        }
    );
    
    // Costruzione degli oggetti 
    sml.wrap.empty().append($("<div>").append(
            sml.scadenza,
            // Range importo
            $("<div>").addClass("form-row").append(
                $("<div>").addClass("form-group col-md-6").append( 
                    $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire l'importo"),
                    sml.importo
                ),
                $("<div>").addClass("form-group col-md-6").append(
                    $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire la durata"),
                    sml.durata
                )
            )
            
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