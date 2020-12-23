var ckdomain = "webank.it";
var ckfun = {

    read (label) {
        var cs = {};
        $.each(decodeURIComponent(document.cookie).split("; "),function(i,v){
            var det = v.split("=");
            cs[det[0]] = det[1];
        });
        return (label)? cs[label]: cs;
    },

    write (cname,cvalue) {
        document.cookie = cname + "=" + cvalue + ";path=/;domain=" + ckdomain;
    },

    delete (cname) {
        document.cookie = cname + "=;domain=" + ckdomain +";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }

}

var ckaccept = function(){

    ckfun.write("consent_mktg",true);

    // Chiude il fascione
    var cookiebanner = $("#cookie_banner");
    if (cookiebanner.length>0){
        cookiebanner.hide();
    }

}

/* Funzioni cookiebar */
$(function(){
    // Testa se e' possibile erogare il fascione
    if(typeof ckfun.read("consent_mktg") === "undefined") {
        var cookiebanner = $("<div>").attr("id","cookie_banner").addClass("cookie-banner");
        var cookiebtnpersonalizza = $("<button>").html("Personalizza");
        var cookiebtnaccetta = $("<button>").click(ckaccept).html("Accetta").addClass("evidente");
        var cookiebtconsole = $("<div>").addClass("cookie-console").append(cookiebtnpersonalizza,cookiebtnaccetta)
        var cookieText = $("<p>").html("Questo sito utilizza i cookie (tecnici e di profilazione, propri e di terze parti) per garantirti una migliore esperienza di navigazione e inviare materiale informativo in linea con le tue preferenze.<br>L’uso dei cookie ha la durata di&nbsp;1 anno.<br>E’ possibile consultare l’informativa estesa e modificare il consenso ai cookie di profilazione, propri e di terze parti, nella sezione dedicata.");
        // Assembla il fascione
        cookiebanner.append($("<div>").addClass("wrapper").append(cookieText,cookiebtconsole));
        
        $("body").append(cookiebanner);
    }
    
})