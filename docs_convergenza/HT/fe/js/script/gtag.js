// Inizializzazioni per la funzione wrapper
var gotoTrack = function (action,params,link) {
    var e = this.event;
    e.preventDefault();

    var href = (link) ? link : $(e.target).attr("href"),
    params = params? params : {};

    var gtaglocfunction = function() { document.location.href = href;};
    setTimeout(gtaglocfunction,5000); // Dopo 5 secondi passa comunque alla pagina
    if (typeof gtag !== "undefined") {
        //console.log("GTAG - Tracciatura in corso");    
        // Appende ai params anche la callback
        if ( href!== null ) params["event_callback"] = gtaglocfunction;
        // gtag("event", action, params);
        gtag("event", action, params);
    
    }
    else {
        // gtag non ancora inizializzato
        // console.log("GTAG - Tracciatura non eseguita");
        gtaglocfunction();
    }
}

$(function () {

    // Codice per taggatura (se X non e' presente viene inviato un vuoto)
    window._adftrack = Array.isArray(window._adftrack) ?
        window._adftrack : (window._adftrack ? [window._adftrack] : []);
    window._adftrack.push({
        HttpHost: 'track.adform.net',
        pm: 1687685,
        divider: encodeURIComponent('|'),
        pagename: encodeURIComponent('BancoBPM_Area Privata_Tracking_Website'),
        order: {
            sv9: (typeof X !== "undefined") ? X : "",
            sv14: window.location.href
        }
    });
    /* ANALYTICS - CODICE DA FORNITORE */
    (function () {
        var s = document.createElement('script'); s.type =
            'text/javascript'; s.async = true; s.src =
                'https://s2.adform.net/banners/scripts/st/trackpoint-async.js'; var x =
                    document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
    

    /* GTAG */
    (function () {
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

    })();
    
});