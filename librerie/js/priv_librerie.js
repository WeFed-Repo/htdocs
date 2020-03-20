/* jshint strict:false */
/* globals $, menuData, navIndex */
/* exported menuLev3, librerie, ajaxBaseUrl */

// Link statici forniti dal backend
var librerie = true;
var ajaxBaseUrl = '/librerie/include/commons/ajax';

// Variabili globali librerie
var libBasepath = "/connect.php?page=strutt_priv.php&tpl=";

// Capisce se la voce da navigatore e' responsive e modifica il link, sistemando la voce
var menuVoiceCorrect = function(voice, linkarray) {
    // Interpreta la voce dal flag
    var flagresp = "n";
    if (voice.responsive && voice.responsive === true) flagresp = "y";
    var navLink = "";
    // Corregge l'id (ultima voce di linkarray)
    voice.id = linkarray[linkarray.length - 1];
    $.each(linkarray, function(i, v) {
        navLink += "&liv" + i + "=" + v;
    });
    // Controllo per simulazione navigazione quarti livelli e generazione del menu (sostituzione del link, se necessario)
    if (linkarray.length >= 3 && voice.voices) {
        navLink += "&liv3=0";
        voice.navigation = linkarray;
        voice.responsive = voice.voices[0].responsive;
        voice.link = libBasepath + voice.voices[0].link + navLink + "&responsive=" + flagresp;
    } else {
        voice.navigation = linkarray;
        if (voice.link && voice.link.length > 0) voice.link = libBasepath + voice.link + "&responsive=" + flagresp + navLink;
    }
    if (voice.voices) {
        $.each(voice.voices, function(ind, val) {
            voice.voices[ind] = menuVoiceCorrect(val, linkarray.concat([ind]));
        });
    }
    return voice;
};
/* Rielabora i link del menu in json per fornire i dati di navigazione nelle librerie */
if (typeof menuData != "undefined") {
    $.each(menuData, function(i, v) {
       menuData[i] = menuVoiceCorrect(v, [i]);
    });
}
// Recupera e costruisce il menu di terzo livello in pagina, se possibile 
var menuLev3 = function() {
    var m3 = "";
    if (navIndex && navIndex.length >= 3) {
        var selLev3 = menuData[navIndex[0]].voices[navIndex[1]].voices[navIndex[2]];
        var fDeb = (location.href.indexOf("fdeb=true")>0) ? "&fdeb=true" : "";
        m3 += "<h2>" + selLev3.title + "</h2>";
        m3 += "<ul>";
        if (selLev3.voices) {
            $.each(selLev3.voices, function(i, v) {
                m3 += "<li class=\"" + ((navIndex[3] == i) ? "selected" : "") + "\"><a href=\"" + ((v.link.length>0)? v.link + fDeb : "#") + "\">" + v.title + "</a></li>";
            });
        } else {
            m3 += "<li class=\"selected\"><a href=\"" + ((selLev3.link.length>0)? selLev3.link  + fDeb : "#") + "\">" + selLev3.title + "</a></li>";
        }
        m3 += "</ul>";
    }
    return m3;
}();
