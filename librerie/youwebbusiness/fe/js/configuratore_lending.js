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

var smlCleanNumber = function(field){
    var val = $(field).val();
    // Rimuove caratteri estranei
    $(field).val(val.split("").filter(function(v){return("0123456789").indexOf(v)>=0}).join(""));
}

var smlCheckImporto = function(){
    var field = $(this),
        val = parseFloat(field.val().split(".").join(""));
    if (val <= sml.importomin) {val = sml.importomin}
    if (val>= sml.importomax) {val = sml.importomax}
    field.val(val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
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

    // Crea l'oggetto con i valori di default ricalcolati dai parametri
    sml = new Object({
        importomin: 1000,
        importomax: 50000, 
        importo: 20000,

        duratamin: 10,
        duratamax:72,
        durata: 60
    });
    
    
    // Inizializzazione dei parametri e dei vari oggetti del configuratore in base ai dati provenienti dall'esterno
    sml["wrap"]=  $(params.id).addClass("loading"),
    sml["scadenza"]= $("<div>").addClass("top-evidente").append(
                    ((typeof params.scadenza != "undefined") ? getCountdown(params.scadenza) : ""),
                    $("<p>").html("Calcola il preventivo del tuo finanziamento selezionando l'importo richiesto, la durata, la periodicit&agrave; ed il preammortamento: <strong class='green'>la tua rata</strong> premendo su \"Calcola\" la tua rata si aggiorner&agrave;.")
                );
    sml["importoinput"]= $("<input>").addClass("slider-input").attr({maxLength:"8"}).val(sml.importo).on("keyup click focus",function() {smlCleanNumber(this)}).on("blur change",smlCheckImporto);
    
    sml["sliderimporto"]= $("<div>").addClass("slider").slider({range:"min", min:sml.importomin, max: sml.importomax, value:sml.importo,step:1000, slide: function(e,ui){
        var imp = ui.value;
        sml.importo = imp;
        sml.importoinput.val(imp).trigger("blur");
    }});
    sml["sliderdurata"]= $("<div>").addClass("slider").slider({range:"min",min:1,max:30,value:sml.durata,step:1});
   

    // Inizializzazioni
    sml.importoinput.trigger("blur");
    
    // Costruzione degli oggetti 
    sml.wrap.empty().append($("<div>").append(
            sml.scadenza,
            // Range importo
            $("<div>").addClass("form-row").append(
                $("<div>").addClass("form-group col-md-6").append( 
                    $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire l'importo"),
                    sml.importoinput,
                    sml.sliderimporto
                ),
                $("<div>").addClass("form-group col-md-6").append(
                    $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire la durata"),
                    sml.sliderdurata
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