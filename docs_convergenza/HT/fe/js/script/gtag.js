// Parametri generici
let dmp_pm = 1687685,
    dmp_pagename = encodeURIComponent('BancoBPM_Area Privata_Tracking_Website');


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
        // console.log("GTAG - Tracciatura in corso");    
        // Appende ai params anche la callback
        params["event_callback"] = function(){
                cbdone = true; 
                gtagcb();
                // console.log("Tracciatura eseguita")
            };
        // TRACCIA CON DMP
        var dmpImg = $("<img>").attr("src", "https://track.adform.net/Serving/TrackPoint/?pm=1687685&ADFPageName=BancoBPM_Area%20Privata_Tracking_Website&ADFdivider=|").css({"width":"1px","height":"1px", "visibility":"hidden","position":"absolute","bottom":"0","left":"0"});
        dmpImg.on("load",function(){
            // TRACCIA CON GTAG    
            gtag("event", action, params);
        });
        $("body").append(dmpImg);
        
       
    
    }
    else {
        // gtag non ancora inizializzato
        // console.log("GTAG - Tracciatura non eseguita");
        gtagcb();
    }
}

$(function () {

    /* DMP (versione "indipendente" - codice da fornitore) */
    // Prepara i parametri
    window._adftrack = Array.isArray(window._adftrack) ?
    window._adftrack : (window._adftrack ? [window._adftrack] : []);
    window._adftrack.push({
        HttpHost: 'track.adform.net',
        pm: dmp_pm,
        divider: encodeURIComponent('|'),
        pagename: dmp_pagename,
        order: {
            sv9: (typeof X !== "undefined") ? X : "",
            sv14: window.location.href
        }
    });
    var dmpImg = $("<img>").attr("src", "https://track.adform.net/Serving/TrackPoint/?pm="+ dmp_pm +"&ADFPageName="+ dmp_pagename +"&ADFdivider=|").css({"width":"1px","height":"1px", "visibility":"hidden","position":"absolute","bottom":"0","left":"0"});
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
        if (typeof X !== "undefined") {
            // Configurazione
            gtag('config', UACode, {
                'dimension6': X,
                'user_id': X,
                'linker': {
                    'domains': ['bancobpm.it', 'webank.it']
                }
            });
            // console.log("GTAG - Pagina tracciata")
        }
    }
    
});