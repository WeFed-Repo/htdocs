/* Countdown autoconsistente */
var countdown = {

    // Variabili "locali"
    refreshfunc: function(){},

    // Refresh totale
    refreshAll: function() {
        // Attiva il refresh rapido di tutti i cd dinamici in pagina
        $.each($(".countdown[data-scadenza]"),function(i,cdw){
            // differenza tra data e scadenza
            cdw  = $(cdw);
            var scadenza = cdw.attr("data-scadenza");
            cdw.html(countdown.getHtml(scadenza));
        })
    },


    getHtml : function(scadenza){
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
            cdcomp = $("<div>").addClass("countdown-inline").append(
    
                // Giorni
                $("<div>").addClass("cdblock giorni").append(
                    $("<span>").addClass("time-countdown").html(cdo.giorni),
                    $("<span>").addClass("time-label").html("giorn" + ((cdo.giorni===1) ? "o" : "i"))
                ),
    
                // Ore
                $("<div>").addClass("cdblock ore").append(
                    $("<span>").addClass("time-countdown").html(cdo.ore),
                    $("<span>").addClass("time-label").html("or" + ((cdo.ore===1) ? "a" : "e"))
                ),
    
                // Minuti
                $("<div>").addClass("cdblock minuti").append(
                    $("<span>").addClass("time-countdown").html(cdo.minuti),
                    $("<span>").addClass("time-label").html("minut" + ((cdo.minuti===1) ? "o" : "i"))
                )
            )
        }
    
        return cdcomp;
    },
    
    get: function (scadenza) {
    
        var cdown = $("<div>").addClass("countdown").attr("data-scadenza", scadenza).html(countdown.getHtml(scadenza));
       
        // Refresh del countdown (previa distruzione dell'evento as-is se esistente)  
        clearInterval(countdown.refreshfunc);  
        countdown.refreshfunc = setInterval(function(){
            countdown.refreshAll()
        },5000);
        return cdown;
    }
}


var smlCleanNumber = function(field){
    var val = $(field).val();
    // Rimuove caratteri estranei
    $(field).val(val.split("").filter(function(v){return("0123456789").indexOf(v)>=0}).join(""));
}

var smlCheckImporto = function(){
    var field = $(this),
        val = parseFloat(field.val().split(".").join(""));
    if (val <= sml.importomin || isNaN(val)) {val = sml.importomin}
    if (val>= sml.importomax) {val = sml.importomax}
    field.val(val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
    sml.importo = val;
    sml.sliderimporto.slider("value",val);
    sml.resetResults();
}

var getMilestones = function(obj) {
    var mso = $("<div>").addClass("slider-milestones");
    // Calcolo degli incrementi
    var msoinc = (obj.max-obj.min)/(obj.steps-1);
    for(i=0;i<obj.steps; i++) {
        var unit = (obj.unit)? obj.unit : 1;
        var mstxt = Math.round((obj.min + (i*msoinc))/unit*100)/100;
        
        mso.append($("<span>").addClass("milestone").html(mstxt));
    
    }
    return (mso);
}


/* Oggetti relativi alla smart lending */
var sml;


/* Avvio del configuratore con parametri */
var startLending = function(params) {

    
    // Crea l'oggetto con i valori di default
    sml = new Object({

        importomin: 5000,
        importomax: 30000, 
        importo: 20000,
        importostep: 1,

        duratamin: 6,
        duratamax:72,
        durata: 60,
        duratastep: 1,

        durpreamm: 24,

        periodicita: 1

    })
    
    
    // Assegna i valori di default leggendo l'oggetto di configurazione in ingresso (se ricevuto)
    if (params.objConf) {
        sml["products"] = params.objConf.simulatore.prodottiElise;

        $.each(sml.products,function(i,prod){

            // Default
            if(prod.default){
                sml.durata = prod.durataFinanziamento.default;
                sml.duratastep = prod.durataFinanziamento.step;
                sml.importo = prod.importo.default;
                sml.importostep = prod.importo.step;
                sml.periodicita =prod.periodicita.default;
                sml.durpreamm =  prod.durataPreammortamento.default;

                sml.classe = prod.classe;
                sml.codice = prod.codice;
                sml.valuta = prod.valuta;
            }

            if (i===0) {
                sml.duratamin = prod.durataFinanziamento.min;
                sml.duratamax = prod.durataFinanziamento.max;
                sml.importomin = prod.importo.min;
                sml.importomax = prod.importo.max;
            }
            else
            {
                if(prod.durataFinanziamento.min<sml.duratamin) sml.duratamin = prod.durataFinanziamento.min;
                if(prod.durataFinanziamento.min>sml.duratamax) sml.duratamax = prod.durataFinanziamento.max;
                if(prod.importo.min<sml.importomin) sml.importomin = prod.importo.min;
                if(prod.importo.min>sml.importomax) sml.importomax = prod.importo.max;
            }
            
            // Forzature per prove layout
            // sml.importomin =5000;

            console.log(prod);
        })

    }
    

    
    
    


    // Estensione dell'oggetto base
    $.extend(sml, {

        // ############################## OGGETTI #############################

        wrap: $(params.id).addClass("loading configuratore"),

        scadenza:  ((typeof params.scadenza == "undefined") ? "" :
        $("<div>").addClass("top-evidente").append(
            $("<div>").addClass("cd-wrapper").append(
                $("<span>").addClass("cd-label").html("L'offerta scade tra:"),
                countdown.get(params.scadenza))
            )
            
        ),

        importoinput: $("<input>").addClass("slider-input importo").attr({maxLength:"8"}).val(sml.importo).on("keyup click focus",function() {smlCleanNumber(this)}).on("blur change",smlCheckImporto),

        sliderimporto: $("<div>").addClass("slider").slider({range:"min", min:sml.importomin, max: sml.importomax, value:sml.importo,step:sml.importostep, slide: function(e,ui){
            var imp = ui.value;
            sml.importo = imp;
            sml.importoinput.val(imp).trigger("blur");
            sml.resetResults();
        }}),

        importomilestones: getMilestones({min:sml.importomin,max:sml.importomax,steps: 6,unit:1000}),

        durataoutput:  $("<span>").addClass("slider-output durata").html(sml.durata + " mesi"),

        sliderdurata: $("<div>").addClass("slider").slider({range:"min",min:sml.duratamin,max:sml.duratamax,value:sml.durata,step: sml.duratastep,slide: function(e,ui){
            var dur = ui.value;
            sml.durata = dur;
            sml.durataoutput.html(dur + " mesi");
            sml.resetResults();
            sml.refreshInterface();
        }}),

        duratamilestones:  getMilestones({min:sml.duratamin,max:sml.duratamax,steps: 2}),
    
        preammortamento: $("<span>").addClass("output").html(sml.durpreamm + " mesi"),
        
        calcola: $("<button>").addClass("btn btn-primary disabled w-100").html("calcola").click(function(){
                var btn = $(this);
                if(!btn.hasClass("disabled")) {
                    btn.addClass("disabled");
                    // Blocco dell'interfaccia
                    sml.wrap.addClass("loading");
                    // Dati da inviare all'handler esterno
                    var data = {
                        durata: sml.durata,
                        importo: sml.importo
                    }
                    params.handlerCalcola(data,sml.getLendingData);
                }
            }),

        
        periodicitaradio:  $("<div>").addClass("row").append( $("<div>").addClass("col-xs-4").append(
                $("<div>").addClass("form-check radio").append(
                    $("<input>").attr({"type":"radio", name: "periodicita", value:1, checked: true,id: "periodicita1"}).addClass("form-check-input"),
                    $("<label>").attr({for: "periodicita1"}).addClass("form-check-label").html("Mensile")
                )
            ),
            $("<div>").addClass("col-xs-8").append(
                $("<div>").addClass("form-check radio").append(
                    $("<input>").attr({"type":"radio", name: "periodicita", "value":2,id: "periodicita2"}).addClass("form-check-input"),
                    $("<label>").attr({for: "periodicita2"}).addClass("form-check-label").html("Trimestrale")
                )
            )
        ),
     
    
        results: $("<div>").addClass("results disabled").append(
            $.map([
                {"id": "spese","label":"Spese", "modal": true},
                {"id": "taeg","label":"Taeg", "modal": false},
                {"id": "tan","label":"Tan", "modal": false},
                {"id": "rate","label":"Rate mensili", "modal": false},
                {"id": "rata","label":"La tua rata", "modal": true}
            ],function(div){
                return $("<div>").addClass("result-box " + div.id).append(
                    ((div.modal)? $("<a>").addClass("btn-icon-help").click(function(){
                        sml.showModal(div.id);
                    }) : ""),
                    $("<span>").addClass("result-label").html(div.label),
                    $("<span>").addClass("result").attr({id: "result_"+div.id}).html(" - ")
                )
            })
            ),
        
        // Modali
        modal: {},    

        // Disclaimer
        disclaimer:  $("<div>").addClass("disclaimer").html("<h4>Disclaimer</h4><p>L'erogazione del finanziamento è subordinata alla valutazione di merito creditizio effettuata dalla Banca.</p>"),
    


        // ################## FUNZIONI ########################
        // Acquisizione dei dati dall'handler esterno
        getLendingData : function(data) {
            sml.setResults(data);
            sml.wrap.removeClass("loading");
        },

        setResults : function (data) {
            sml.results.addClass("disabled");
            var units = {
                "spese": "&euro;",
                "taeg":  "%",
                "tan": "%",
                "rate": "",
                "rata": "&euro;"
            }
            $.each(sml.results.find(".result"),function(i,v){
                    var id = $(v).attr("id").replace("result_","");
                    if (data && data[id]) sml.results.removeClass("disabled");
                    $(v).html((data && data[id])? data[id] + units[id] : " - ");
                })
            
        },

        resetResults: function(){
            sml.calcola.removeClass("disabled");
            sml.setResults({});
            params.handlerBloccoInterfaccia();
        },

        offertaScaduta: function() {
            alert("Offerta scaduta!");
            sml.wrap.empty().html("<h3>Offerta scaduta!</h3>")
            params.handlerBloccoInterfaccia();
        },

        // modali
        showModal: function(modaltype){
           
            // Prepara il contenuto della modale
            var modalTitle, modalBody;
            switch(modaltype) {

                case "spese":

                    modalTitle= "Spese"; 
                    modalBody = $("<div>").append(
                        $("<p>").html("Spese Istruttoria: 200,00 &euro;<br>" +
                        "Commissione Erogazione: 0,00 &euro;<br>"+
                        "Spese Incasso Rata: 2,75 &euro;<br>"+
                        "Spese Avvisatura: 1,25 &euro;*<br>"),
                        $("<p>").addClass("note").html("*applicate solo nel caso in cui la rata non venga pagata mediante addebito su un conto corrente accesso presso l’istituto erogato.")
                    )
                break;

                case "rata":

                    modalTitle= "La tua rata";
                    modalBody = $("<div>").append($("<p>").html("La durata complessiva del finanziamento a " + sml.durata + " mesi di cui " + sml.durpreamm + " di preammortamento."));
                    
                    var tableammortamento = $("<table>").addClass("table").append(

                        $("<thead>").append(
                            $("<tr>").append(
                                $("<th>").html("Numero"),
                                $("<th>").html("Quota interessi"),
                                $("<th>").html("Quota capitale"),
                                $("<th>").html("Debito residuo"),
                            )
                        )
                    )

                    modalBody.append(tableammortamento)

                break;

            }

            // Se la modale non esiste, la costruisce
            if (!sml.modal[modaltype]) {
                sml.modal[modaltype] = getModal({title: modalTitle})
            }
            sml.modal[modaltype].find(".modal-body").empty().append(modalBody);
            sml.modal[modaltype].modal()
            
        },


        //######################### CONTROLLO DELL'INTERFACCIA ###################################
        // Controllo dell'interfaccia con i vari cambiamenti
        refreshInterface: function() {
            // Modifica l'interfaccia a seconda della selezione
           
            
            // Determina il prodotto dai dati raccolti (durata finanziamento) ed, eventualmente, ricostruisce l'interfaccia
            $.each(sml.products, function(prod){

            });

        }
    });

    // Costruzione degli oggetti 
    sml.wrap.empty().append($("<div>").append(
            sml.scadenza,
            $("<div>").addClass("flex-bordered").append(

                // RIGA 1
                $("<div>").addClass("bordered-between").append(

                    // Range importo
                    $("<div>").addClass("form-group flex-element").append( 
                        $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire l'importo"),
                        $("<div>").addClass("editable-field-wrapper importo").append(sml.importoinput),
                        sml.sliderimporto,
                        sml.importomilestones
                    ),

                    // Range slider
                    $("<div>").addClass("form-group flex-element").append(
                        
                        $("<label>").addClass("control-label").html("Trascina per aumentare/diminuire la durata"),
                        sml.durataoutput,
                        sml.sliderdurata,
                        sml.duratamilestones
                    ),
                
                ),
            
                // RIGA 2
                
                $("<div>").addClass("form-row bordered-top").append(
                    $("<div>").addClass("form-group col-md-6").append(
                        // Radio button selezione
                        $("<label>").addClass("control-label").html("Periodicit&agrave; rata"),
                          sml.periodicitaradio,
                        $("<hr>").addClass("d-block d-md-none")
                    )
                    ,
                   

                    $("<div>").addClass("form-group col-md-4").append(
                        // Preammortamento
                        $("<label>").addClass("control-label").html("Preammortamento"),
                        sml.preammortamento
                    ),

                    // Bottone di calcolo
                    $("<div>").addClass("form-group no-label col-md-2").append(
                        // Bottone di calcolo
                        sml.calcola
                    )
                ),

                $("<hr>"),

                // Riga 3 (risultati)
                $("<div>").addClass("form-row").append(
                    $("<div>").addClass("col-sm-12").append(
                        sml.results
                    )
                ),

                
            ),

            // Disclaimer
            sml.disclaimer
        )    
    );


    // Inizializzazioni
    sml.importoinput.trigger("blur");
    sml.calcola.trigger("click");

}
   
    
/* inserisce onload il configuratore */
var confLending = function(params){
    $(function(){startLending(params)});
} 