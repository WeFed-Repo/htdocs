// Inizializzazioni per la funzione wrapper
var gtmTrack = function (href,action,params) {

    var gtaglocfunction = function() { document.location.href = href;};
    if (typeof gtag !== "undefined") {
        
        // Tagged
        //setTimeout(gtaglocfunction,5000); // Dopo 5 secondi passa comunque alla pagina
        // Appende ai params anche la callback
        params["event-callback"] = function() {console.log("callback eseguita")};
        // gtag("event", action, params);
        gtag("event", action, params);
    }
    else {
        // gtag non ancora inizializzato
        gtaglocfunction();
    }
}

$(function () {

    // Codice per taggatura
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
    /* ANALYTICS - DA FORNITORE
    (function () {
        var s = document.createElement('script'); s.type =
            'text/javascript'; s.async = true; s.src =
                'https://s2.adform.net/banners/scripts/st/trackpoint-async.js'; var x =
                    document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
    */
    /* GTAG RIELABORATO
    (function () {
        var s = document.createElement('script'); s.type =
            'text/javascript'; s.async = true; s.src =
                'https://www.googletagmanager.com/gtag/js?id='+ UACode; var x =
                    document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
    */
    /* VIA JQUERY CON CALLBACK */
    $.getScript("https://www.googletagmanager.com/gtag/js?id="+ UACode).done(
        function(){
            // Tag analytics ed inizializzazione per tracking (generico)
        window.dataLayer = window.dataLayer || [];
        gtag = function() { dataLayer.push(arguments); }
        gtag('js', new Date());
        if (typeof X !== "undefined" && typeof UACode !=="undefined") {
            gtag('config', UACode, {
                'dimension6': X,
                'user_id': X,
                'linker': {
                    'domains': ['bancobpm.it', 'webank.it']
                }
            });
        }
    })

    
});