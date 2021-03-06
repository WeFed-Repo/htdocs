var ckdomain = "bancobpm.it";
var ckfun = {

    read: function(label) {
        var cs = {};
        $.each(decodeURIComponent(document.cookie).split("; "),function(i,v){
            var det = v.split("=");
            cs[det[0]] = det[1];
        });
        return (label)? cs[label]: cs;
    },

    write: function(cname,cvalue) {
        document.cookie = cname + "=" + cvalue + ";path=/;domain=" + ckdomain +";expires=" + (new Date(new Date().setFullYear(new Date().getFullYear() + 1)));
    },

    delete: function(cname) {
        document.cookie = cname + "=;domain=" + ckdomain +";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }

}

var ckaccept = function(){

    ckfun.write("consent_mktg","true");
    ckfun.write("consent_glassbox","true");
    ckfun.write("BPM_TRACK","S");

    // Scatena, se possibile, gli eventi GTM
    if (typeof dataLayer !== "undefined") {
        dataLayer.push({'event': 'consent_mktg'});
        dataLayer.push({'event': 'consent_glassbox'});
    }

    // Chiude il fascione
    var cookiebanner = $("#cookie_banner");
    if (cookiebanner.length>0){
        cookiebanner.hide();
    }

}

/* Funzioni cookiebar */
$(function(){
    // Testa se e' possibile erogare il fascione
    if((typeof ckfun.read("consent_mktg") === "undefined") || (typeof ckfun.read("consent_glassbox")==="undefined") || (typeof ckfun.read("BPM_TRACK")  === "undefined")) {
        
        // Link della pagina di configurazione
        var ckconfigurl = "https://www.bancobpm.it/cookie-policy";       
        
        var cookiebanner = $("<div>").attr("id","cookie_banner").addClass("cookie-banner");
        var cookiebtnpersonalizza = $("<button>").html("Personalizza").on("click",function(){location.href=ckconfigurl});
        var cookiebtnaccetta = $("<button>").on("click",ckaccept).html("Accetta").addClass("evidente");
        var cookiebtconsole = $("<div>").addClass("cookie-console").append(cookiebtnpersonalizza,cookiebtnaccetta)
        var cookieText = $("<div>").addClass("cookie-text").html("<p>Questo sito utilizza i cookie (tecnici e di profilazione, propri e di terze parti) per garantirti una migliore esperienza di navigazione e proporti materiale informativo in linea con le tue preferenze. L'uso dei cookie ha la durata di&nbsp;1 anno.<br>E' possibile consultare l'informativa estesa e modificare il consenso ai cookie di profilazione, propri e di terze parti, nella sezione dedicata.</p>");
        // Assembla il fascione
        cookiebanner.append($("<div>").addClass("wrapper").append(cookieText,cookiebtconsole));
        $("body").append(cookiebanner);
    }
    
});