/* Countdown autoconsistente */
var countdown = {

    // Variabili "locali"
    refreshfunc: function(){},

    // Refresh totale
    refreshAll: function() {
        // Attiva il refresh rapido di tutti i cd dinamici in pagina
        $.each($(".countdown[data-scadenza]"),function(i,cdw){
            // differenza tra data e scadenza
            var cdw  = $(cdw);
            var scadenza = cdw.attr("data-scadenza");
            
            if(new Date().valueOf()> scadenza){
                cdw.html(countdown.getHtml(scadenza));

                // Se la scadenza e' stata raggiunta o superata attiva l'handler di callback
                if (cdw.attr("data-timeout-handler") && cdw.attr("data-timeout-handler").length>0) {
                    countdown["toutfunction_" + cdw.attr("data-timeout-handler")]();
                } 
            }
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
                ore: emudate.getUTCHours(),
                minuti: emudate.getUTCMinutes(),
                secondi: emudate.getUTCSeconds()
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
    
    get: function (scadenza, cb) {
    
        var cdown = $("<div>").addClass("countdown").attr("data-scadenza", scadenza).html(countdown.getHtml(scadenza));
        if (typeof cb === "function") {
            // Istanzia un handler per la scadenza
            var cbhandler = Math.round(Math.random()*99999999);
            cdown.attr({"data-timeout-handler" : cbhandler});
            countdown["toutfunction_" + cbhandler] = cb;
        }

        // Refresh del countdown (previa distruzione dell'evento as-is se esistente)  
        clearInterval(countdown.refreshfunc);  
        countdown.refreshfunc = setInterval(function(){
            countdown.refreshAll()
        },5000);
        return cdown;
    }
}

/* OGGETTI FORM PARAMETRICI */
var FormObj = {

    // RADIO BUTTONS 
    radio: function(params){

        var radiocode;
        
        if (params.options.length>1) {
            
            radiocode = $("<div>").addClass("row").append( 
                
                
                    $.map(params.options,function(radio){
                        return ($("<div>").addClass(radio.class? radio.class : "col-xs-12").append(
                                $("<div>").addClass("form-check radio").append(
                                    $("<input>").attr({"type":"radio", name: params.name, value:radio.Value, checked: (params.value==radio.Value),id: params.name+"_"+radio.Value}).addClass("form-check-input").on("change",params.change),
                                    $("<label>").attr({for: params.name+"_"+radio.Value}).addClass("form-check-label").html(radio.Lbl)
                            )
                        ))

                    })
                )

            }
                else
                {
                    radiocode = $("<span>").addClass("output").html(params.options[0].Lbl);
                }
        
        return (radiocode);
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
    field.val(sml.formatNumber(val));
    sml.importo = val;
    sml.sliderimporto.slider("value",val);
    sml.resetResults();
}

var getMilestones = function(obj) {
    var mso = $("<div>").addClass("slider-milestones"),
        multiplier = obj.multiplier? obj.multiplier : 1;

    // Se non ci sono unit mette solo la prima e l'ultima milestone
    if (obj.unit){
        var msref = obj.max-obj.min;
        for(var ind=obj.min;ind<=obj.max;ind+=multiplier) {
            if(ind % obj.unit === 0 ) {
                mso.append($("<div>").addClass("milestone").css({"left": ((ind-obj.min)/msref*100) + "%"}).append($("<span>").html(ind/multiplier)));
            }
        }
    }
    else
    {
        mso.append(
            $("<div>").addClass("milestone").css({"left":"0%"}).append($("<span>").html(obj.min/multiplier)),
            $("<div>").addClass("milestone").css({"left":"100%"}).append($("<span>").html(obj.max/multiplier))
        )   
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

        periodicita: "01",

        prodotto: "",

        datascadenza: undefined,

        modaldata: {}

    })
    
    
    // Assegna i valori di default leggendo l'oggetto di configurazione in ingresso (se ricevuto)
    if (params.objConf) {

        sml["products"] = params.objConf.Simulatore.ProdottiElise;
        sml.prodotto = params.objConf.CodiceProdotto;
        sml.datascadenza = new Date(params.objConf.DataScadenza).valueOf()


        $.each(sml.products,function(i,prod){

            // Default
            if(prod.Default){
                sml.durata = prod.DurataFinanziamento.Default;
                sml.duratastep = prod.DurataFinanziamento.Step;
                sml.importo = prod.Importo.Default;
                sml.importostep = prod.Importo.Step;
                sml.periodicita =prod.Periodicita.Default;
                sml.durpreamm =  prod.DurataPreammortamento.Default;

                sml.currentprod = prod;
            }

            if (i===0) {
                sml.duratamin = prod.DurataFinanziamento.Min;
                sml.duratamax = prod.DurataFinanziamento.Max;
                sml.importomin = prod.Importo.Min;
                sml.importomax = prod.Importo.Max;
            }
            else
            {
                if(prod.DurataFinanziamento.Min<sml.duratamin) sml.duratamin = prod.DurataFinanziamento.Min;
                if(prod.DurataFinanziamento.Min>sml.duratamax) sml.duratamax = prod.DurataFinanziamento.Max;
                if(prod.Importo.min<sml.importomin) sml.importomin = prod.Importo.Min;
                if(prod.Importo.min>sml.importomax) sml.importomax = prod.Importo.Max;
            }

        })

    }
    

    smlOffertaScaduta =  function() {
        params.handlerBloccoInterfaccia();
        sml.wrap.empty().removeClass("loading").append($("<div>").addClass("offerta-scaduta").append("Offerta scaduta"));
    };
    
    


    // Estensione dell'oggetto base
    $.extend(sml, {

        // ############################## OGGETTI #############################
        isWaiting: false,

        wrap: $(params.id).addClass("loading configuratore"),

        scadenza:  ((typeof sml.datascadenza == "undefined") ? "" :
        $("<div>").addClass("top-evidente").append(
            $("<div>").addClass("cd-wrapper").append(
                $("<span>").addClass("cd-label").html("L'offerta scade tra:"),
                countdown.get(sml.datascadenza, smlOffertaScaduta))
            )
            
        ),

        importoinput: $("<input>").addClass("slider-input importo").attr({maxLength:"8"}).val(sml.importo).on("keyup click focus",function() {smlCleanNumber(this)}).on("blur change",smlCheckImporto),

        sliderimporto: $("<div>").addClass("slider").slider({range:"min", min:sml.importomin, max: sml.importomax, value:sml.importo,step:sml.importostep, slide: function(e,ui){
            var imp = ui.value;
            sml.importo = imp;
            sml.importoinput.val(imp).trigger("blur");
            sml.resetResults();
        }}),

        importomilestones: getMilestones({min:sml.importomin,max:sml.importomax,unit: 5000, multiplier:1000}),

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
                        "prodotto": sml.prodotto,
                        "classeProdottoElise": sml.currentprod.Classe,
                        "codiceProdottoElise": sml.currentprod.Codice,
                        "importo": sml.importo,
                        "periodicitaRata": sml.periodicita,
                        "durataFinanziamento": sml.durata,
                        "durataPreAmmortamento": sml.durpreamm
                    }
                    params.handlerCalcola(data,sml.getLendingData);
                }
            }),

        
        periodicitaradio:  $("<div>").append(FormObj.radio({
            name: "periodicita",
            change: function(){
                sml.periodicita = $(this).val();
                sml.resetResults();
            },
            value: sml.periodicita,
            options: sml.currentprod.Periodicita.Options
        })),
     
    
        results: $("<div>").addClass("results disabled").append(
            $.map([
                {"id": "spese","label":"Spese", "field": "speseTotali","modal": true},
                {"id": "taeg","label":"Taeg",  "field": "ISC", "modal": false},
                {"id": "tan", "label":"Tan",  "field": "tassoAmm","modal": false},
                {"id": "rate","label":"Rate mensili",  "field": "numeroRate", "modal": false},
                {"id": "rata","label":"La tua rata",  "field": "importoPrimaRataAmm", "modal": true}
            ],function(div){
                return $("<div>").addClass("result-box " + div.id).append(
                    ((div.modal)? $("<a>").addClass("btn-icon-help").click(function(){
                        sml.showModal(div.id);
                    }) : ""),
                    $("<span>").addClass("result-label").html(div.label),
                    $("<span>").addClass("result").attr({id: div.id,"data-field":div.field}).html(" - ")
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
            // Eventuali rielaborazioni dei dati ricevuti
            if (data && !isNaN(data["speseIstruttoria"])) {
                data["speseTotali"] = 0;
                data["speseTotali"] += (!isNaN(data["speseIstruttoria"])) ?  data["speseIstruttoria"] : 0;
                data["speseTotali"] += (!isNaN(data["speseErogazione"])) ?  data["speseErogazione"] : 0;
                data["speseTotali"] += (!isNaN(data["speseInvio"])) ?  data["speseInvio"] : 0;
                data["speseTotali"] += (!isNaN(data["speseRata"])) ?  data["speseRata"] : 0;
            }

            sml.setResults(data);
            sml.isWaiting = false;
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
                var block = $(v);
                var dataField = block.attr("data-field"),
                    id = block.attr("id");
                if (data && data[dataField]) sml.results.removeClass("disabled");
                $(v).html((data && !isNaN(data[dataField]))? sml.formatNumber(data[dataField]) + units[id] : " - ");
            });

            // Dettagli dei risultati (modali)
            // Istanzia l'oggetto spese totali
            if (data && !isNaN(data["speseTotali"])) {
                sml.modaldata["spese"] = {
                    speseIstruttoria: sml.formatNumber(data["speseIstruttoria"]),
                    speseErogazione: sml.formatNumber(data["speseErogazione"]),
                    speseInvio: sml.formatNumber(data["speseInvio"]),
                    speseRata: sml.formatNumber(data["speseRata"])
                }
            };

            // Istanzia l'oggetto con i dati della modale per il piano di ammortamento
            if (data && data["rate"]) {
                sml.modaldata["rata"] = data.rate;              
            };
            
        },

        resetResults: function(){
            if (!sml.isWaiting) {
                sml.calcola.removeClass("disabled");
                sml.setResults({});
                params.handlerBloccoInterfaccia();
                sml.isWaiting = true;
                sml.modaldata = {};
            }
        },

        // Formattazione
        formatNumber: function(value,ndecimali) {
            var fvalue = "";
            if (!isNaN(value)) {
                var ndec = (ndecimali)? ndecimali : 2;
                var decmulti = Math.pow(10,ndec);
                var value = Math.round(value*decmulti)/decmulti;
                var fvalueArr = value.toString().split(".");

                // Formatta l'intero
                fvalue = fvalueArr[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                
                // Aggiunge, se presenti, i decimali
                if (fvalueArr[1]) {
                    fvalue += (","+ fvalueArr[1]);
                }

            }

            return (fvalue);
        },


        // modali
        showModal: function(modaltype){
           
            // Prepara il contenuto della modale
            var modalTitle, modalBody, mdata = sml.modaldata[modaltype];
            switch(modaltype) {

                case "spese":

                    modalTitle= "Spese";
                    modalBody = $("<div>").append(
                        $("<p>").html("Spese Istruttoria: "+ mdata.speseIstruttoria +" &euro;<br>" +
                        "Commissione Erogazione: "+ mdata.speseErogazione +" &euro;<br>"+
                        "Spese Incasso Rata: "+ mdata.speseRata +" &euro;<br>"+
                        "Spese Avvisatura: "+mdata.speseInvio +" &euro;*<br>"),
                        $("<p>").addClass("note").html("*applicate solo nel caso in cui la rata non venga pagata mediante addebito su un conto corrente accesso presso l’istituto erogato.")
                    )
                break;

                case "rata":

                    modalTitle= "La tua rata";
                    modalBody = $("<div>").append($("<p>").html("La durata complessiva del finanziamento a " + sml.durata + " mesi di cui " + sml.durpreamm + " di preammortamento."));
                    
                    var tableammortamento = $("<table>").addClass("table table-striped");
                        modalBody.append($("<div>").addClass("bootstrap-table").append(tableammortamento)
                    )
                    var tbformatter = function(val){return sml.formatNumber(val)};
                    tableammortamento.bootstrapTable({
                        data: mdata,
                        /*
                        pagination: true,
                        pageList: [10,20,50,100],
                        paginationVAlign: "top",
                        */
                        columns: [
                            {
                                field: 'numero',
                                title: 'Numero'
                            },
                            {
                                field: 'quotaInteressi',
                                title: 'Quota interessi',
                                formatter: tbformatter
                            },
                            {
                                field: 'quotaCapitale',
                                title: 'Quota capitale',
                                formatter: tbformatter
                            },
                            {
                                field: 'debitoResiduo',
                                title: 'Debito residuo',
                                formatter: tbformatter
                            }
                    
                        ]
                    });

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


            // Refresh in base alla durata
            if(sml.durata > sml.currentprod.DurataFinanziamento.Max || sml.durata<sml.currentprod.DurataFinanziamento.Min) {
                // Cambio prodotto e interfaccia (periodicita e preammortamento)
                sml["currentprod"] = sml.products.filter(function(prod){
                    return (sml.durata >= prod.DurataFinanziamento.Min && sml.durata<=prod.DurataFinanziamento.Max)
                })[0];
                // Attiva il refresh dei campi correlati al cambio di durata (rimodulati sul default)
                // Periodicita
                sml.periodicita = sml["currentprod"].Periodicita.Default;
                sml.periodicitaradio.empty().append(FormObj.radio({
                    name: "periodicita",
                    change: function(){
                        sml.periodicita = $(this).val();
                        sml.resetResults();
                    },
                    value: sml.periodicita,
                    options: sml.currentprod.Periodicita.Options
                }));

                // Preammortamento
                sml.durpreamm = sml.currentprod.DurataPreammortamento.Default;
                sml.preammortamento.html(sml.currentprod.DurataPreammortamento.Default + " mesi")

            }
            
        }
    });

    // Costruzione degli oggetti (se l'offerta non è specificata e non è scaduta)
    if (typeof params.scadenza=== "undefined" || params.scadenza > new Date().valueOf()) {
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
                        )
                    
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
                    )

                    
                ),

                // Disclaimer
                sml.disclaimer
            )    
        );
        // Inizializzazioni
        sml.importoinput.trigger("blur");
        sml.calcola.trigger("click");
    }
    else
    {
        // OFFERTA SCADUTA !
        smlOffertaScaduta();
    }
    

}
   
    
/* inserisce onload il configuratore */
var confLending = function(params){
    $(function(){startLending(params)});
} 