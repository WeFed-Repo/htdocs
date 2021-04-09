// Parametri generici
let dmp_pm = 1687685,
    dmp_pagename = encodeURIComponent('BancoBPM_Area Privata_Tracking_Website'),
    dmp_baseurl = "https://track.adform.net/Serving/TrackPoint/?pm="+ dmp_pm +"&ADFPageName="+ dmp_pagename +"&ADFdivider=|";


// Filtraggio oggetto parametri
var filterParams = function(obj){
    var gt = {}, dmp = [];
    // Smista gtag (oggetto) e dmp (stringa di testo da appendere all'url pretrattata come array) in base alla key dell'oggetto ricevuto
    $.each(Object.keys(obj),function(i,v){
        if (v.match(/sv\d/) || v.match(/svn\d/)) {
            // Se e' di tipo "sv.." finisce nell'array dmp che verra' reso come testo
            dmp.push("'"+ encodeURIComponent(v) +"':'"+ encodeURIComponent(obj[v]) +"'");
        }
        else
        {
            // Altrimenti finisce in gtag come oggetto
            gt[v]= obj[v];
        }
    });
    return {gtag:gt, dmp: "&itm={"+ dmp.join(",") + "}"};
}

// Re-inizializzazione per la funzione wrapper
gotoTrack = function (action,params,cb) {

    var e = this.event,
        cbdone = false;

    if (e) { 
        e.preventDefault() 
        if (e.target && $(e.target).attr("href")) {
            cb = $(e.target).attr("href");
        }
    }

    // Prepara la callback
    var gtagcb = function () {return void(0)};
    if (typeof cb !== "undefined") {
        // Se è una funzione la callback e' quella, altrimenti e' un href
        if (typeof cb === "string") {
            gtagcb = function() {document.location.href = cb};
        }
        else 
        {
            gtagcb = cb;
        }
    }

    if (typeof gtag !== "undefined") {
        setTimeout(function(){if (!cbdone) gtagcb()},5000); // Dopo 5 secondi esegue comunque la callback
        // Smista i parametri tra gtag e dmp
        var pars = filterParams(params);
        pars["gtag"]["event_callback"] = function(){
                cbdone = true; 
                gtagcb();
                // console.log("Tracciatura eseguita")
            };
        // TRACCIA CON DMP
        var dmpImg = $("<img>").attr("src", dmp_baseurl+pars["dmp"]).css({"width":"1px","height":"1px", "visibility":"hidden","position":"absolute","bottom":"0","left":"0"});
        dmpImg.on("load",function(){
            // TRACCIA CON GTAG    
            gtag("event", action, pars["gtag"]);
        });
        $("body").append(dmpImg);
    }
    else {
        // gtag non ancora inizializzato
        // console.log("GTAG - Tracciatura non eseguita");
        cbdone = true;
        gtagcb();
    }
}

$(function () {

    /* DMP (versione "indipendente" - codice da fornitore) */
    var params = filterParams({
        sv9: (typeof X !== "undefined") ? X : "",
        sv25: (typeof X2 !== "undefined") ? X2 : "",
        sv14: window.location.href
    });
    var dmpImg = $("<img>").attr("src", dmp_baseurl + params["dmp"]).css({"width":"1px","height":"1px", "visibility":"hidden","position":"absolute","bottom":"0","left":"0"});
    $("body").append(dmpImg);

    /* GTAG */
    if ( typeof UACode !=="undefined") {
        var s = document.createElement('script'); s.type =
            'text/javascript'; s.async= true; s.src =
                'https://www.googletagmanager.com/gtag/js?id='+ UACode; var x =
                    document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);

        // Tag analytics ed inizializzazione per tracking (generico)
        window.dataLayer = window.dataLayer || [];
        gtag = function() { dataLayer.push(arguments); }
        gtag('js', new Date());
        if ((typeof X !== "undefined") && (typeof X2 !== "undefined")) {
            // Configurazione
            gtag('config', UACode, {
                'dimension6': X,
                'dimension7': X2,
                'user_id': X2,
                'linker': {
                    'domains': ['bancobpm.it', 'webank.it','ibbweb.tecmarket.it']
                }
            });
            // console.log("GTAG - Pagina tracciata")
        }
    }
    
});