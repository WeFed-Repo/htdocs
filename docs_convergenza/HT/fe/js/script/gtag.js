// Funzioni per il wrapping della taggatura google (sviluppate da WEFED)

// Inizializzazione della funzione wrapper
var gtag = function(){
    return void(0);
}

$(function(){

    // Codice per taggatura
    window._adftrack = Array.isArray(window._adftrack) ?
    window._adftrack : (window._adftrack ? [window._adftrack] : []);
    window._adftrack.push({
    HttpHost: 'track.adform.net',
    pm: 1687685,
    divider: encodeURIComponent('|'),
    pagename: encodeURIComponent('BancoBPM_Area Privata_Tracking_Website'),
    order : {
    sv9: '<insert WS_User ID value here>',
    sv14: '<insert WS_Full URL value here>'
    }
    });
    (function () { var s = document.createElement('script'); s.type =
    'text/javascript'; s.async = true; s.src =
    'https://s2.adform.net/banners/scripts/st/trackpoint-async.js'; var x =
    document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x); })();

    // Tag analytics ed inizializzazione per tracking (generico)
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '$UACode', {
        'dimension6': '$variabileX',
        'user_id': '$variabileX',
        'linker': {
            'domains': ['bancobpm.it', 'webank.it']
        }
    })
});