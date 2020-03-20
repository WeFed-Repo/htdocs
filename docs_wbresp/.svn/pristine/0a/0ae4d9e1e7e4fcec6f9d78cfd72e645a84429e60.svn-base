/* globals $:false, cgi_script:false */
/* exported setLoadingOnObject, unsetLoadingOnObject, AJAXGenericCall, AJAXGenericCallASync,
	impostaValoreSelect, noBack */
"use strict";

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
var AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCallSync('POST', null, cgi_script + url, successFunc, failureFunc, parameters);
};

var AJAXGenericCallASync = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCall('POST', null, cgi_script + url, successFunc, failureFunc, parameters);
};

function jqAJAXCallSync(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = {
	    type : method,
	    url : url
	};
	// 'json', 'xml', 'html'
	if (type) {
		ajaxOptions.dataType = type;
	}
	if (successFunc) {
		ajaxOptions.success = successFunc;
	}
	if (failureFunc) {
		ajaxOptions.failure = failureFunc;
	}
	if (parameters) {
		ajaxOptions.data = parameters;
	}

	ajaxOptions.async = false;

	$.ajax(ajaxOptions);
}

function jqAJAXCall(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = {
	    type : method,
	    url : url
	};
	// 'json', 'xml', 'html'
	if (type) {
		ajaxOptions.dataType = type;
	}
	if (successFunc) {
		ajaxOptions.success = successFunc;
	}
	if (failureFunc) {
		ajaxOptions.error = failureFunc;
	}
	if (parameters) {
		ajaxOptions.data = parameters;
	}
	return $.ajax(ajaxOptions);
}

// Imposta una select al valore passato come parametro
function impostaValoreSelect(idSelect, valore) {
	var el = $('#' + idSelect);
	if (el.length) {
		el.val(valore).change();
	}
}

/* jshint ignore:start */
//funzione per disabilitare tasto back
function noBack(){
	if (history.forward() != null) { 
		self.location.reload(); 
	}
}
/* jshint ignore:end */

// --------- Framework per overlayer e alert ------------//
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex() {
    var highestIndex = 0;
    $("div").each(function() {
        var zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
        if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) {
            highestIndex = zInd;
        }
    });
    return (highestIndex + 1);
}

/* LOADING OVERLAY */
/*
 * Setta il loading overlay - L'oggetto overlay ha sempre l'id uguale a quello dell'oggetto origine con append di "_loadingoverlay". - obj e'
 * l'oggetto da ricoprire - Il parametro opzionale objlowerlimit contiene un eventuale altro id oggetto al quale far "arrivare" l'overlay - Il
 * parametro opzionale coloroverlay contiene un eventuale altro colore di sfondo da attribuire all'overlay - Il parametro opzionale imgBck contiene un
 * eventuale immagine di sfondo da attribuire all'overlay
 */
function setLoadingOnObject(idobj, idobjlowerlimit, coloroverlay, imgBck) {
    var obj = $(idobj),
        objlowerlimit = ($.trim(idobjlowerlimit)) ? $(idobjlowerlimit) : $(),
        lowerobject;

    // assegna l'oggetto ad una variabile
    // crea un nuovo div necessario a nascondere tutto con l'id ricavato
    var overlay = $("<div>", {
        'id': obj.attr('id') + "_loadingoverlay",
        'class': "loadingOverlay"
    });
    if (coloroverlay) {
        overlay.css('background-color', coloroverlay);

    }
    if (imgBck) {
        overlay.css('backgroundImage', 'imgBck').addClass('img');
    }
    $('body').append(overlay);

    // Proprieta' overlay impostate via JS
    overlay.css({
        height: obj.outerHeight() + 'px',
        zIndex: getNextHighestZindex(),
        top: obj.offset().top + 'px',
        width: obj.outerWidth() + 'px',
        left: obj.offset().left + 'px'
    });

    // Riassegna le proprieta' in caso di TR
    if (obj.is("tr")) {
        overlay.css({ width: obj.width() - 2 + 'px', left: obj.offset().left + 1 + 'px' });
    }
    // Reimposta altezza e larghezza se esiste objlowerlimit
    if (idobjlowerlimit) {
        lowerobject = $(objlowerlimit);
        overlay.height(lowerobject.offset().top - obj.offset().top + lowerobject.outerHeight() + 'px');
        overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.outerWidth() + 'px');
        if (lowerobject[0].tagName.toLowerCase() === 'tr') {
            overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.outerWidth() - 2 + 'px');
        }
    }

    // inserisce la chiocciola di caricamento
    var loadingimage = $("<img>");

    // seleziona il da farsi in base alla grandezza dell' overlay
    // determina il padding-top dell'immagine all'interno dell'oggetto loader
    if (overlay.height() < 37) {
        // chiocciola piccola
        loadingimage.attr('src', '/wscmn/img/ico2inf_loading.gif');
        if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); } else { loadingimage.height(loadingimage.width(overlay.height() - 2 + 'px')); }
    } else {
        // chiocciola grande
        loadingimage.attr('src', '/wscmn/img/ico2inf_loadingbig.gif');
        if (overlay.height() / 2 > 16) {
            loadingimage.css('paddingTop', (overlay.height() / 2) - 16 + 'px');
        }
    }

    if (overlay.attr('class') === 'loadingOverlay' + ' ' + 'img') {
        // chiocciola piccola
        loadingimage.attr('src', '/img/ret/ico2inf_loading_green.gif');
        if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); } else {
            loadingimage.height((overlay.height() - 2) + 'px');
            loadingimage.width((overlay.height() - 2) + 'px');
        }
    }
    overlay.append(loadingimage);

    // Controlla la grandezza dell'overlayer e, qualora superasse lo schermo, mette la chiocciola nella prima posizione verticale in alto visibile
    // L'oggetto esce dallo schermo nella parte superiore
    if ((obj.offset().top - $(window).scrollTop()) < 0) {
        // Se l'oggetto sta nello schermo...
        if ((obj.offset().top + overlay.height() - $(window).scrollTop()) > 0) {
            loadingimage.css('paddingTop', ($(window).scrollTop() - obj.offset().top + 1 + 'px'));
        }
    }
    
    // L'oggetto esce dallo schermo nella parte inferiore
    else if ((obj.offset().top + overlay.height()) - ($(window).scrollTop() + $(window).height()) > 0) {
        // Se l'oggetto sta nello schermo...
        if ((obj.offset().top) - ($(window).scrollTop() + $(window).height()) < 0) {
            loadingimage.css('paddingTop', '1px');
        }
    }
    // Addiziona l'evento onresize per tutti gli elementi loading in overlay se la funzione non e' definita
    $(window).on("resize", loadinglayersResize);
}

/*
 * Rileva il loading overlay dall'id di obj e lo distrugge
 */
function unsetLoadingOnObject(idobj) {
    var overlay = $(idobj + '_loadingoverlay');
    if (overlay.length) {
        overlay.remove();
    }

    // Se non sono piu' visibili loading overlay rimuove la funzione onresize
    if (!$('div.loadingOverlay').length) {
        $(window).off("resize", loadinglayersResize);
    }
}

/*
 * Se si ridimensiona lo schermo...
 */
function loadinglayersResize() {
    var loadinglayers = $('div.loadingOverlay'),
        i;
    for (i = 0; i < loadinglayers.length; i++) {
        var obj = $('#' + loadinglayers[i].id.replace('_loadingoverlay', '')).eq(0);
        loadinglayers[i].style.left = obj.offset().left + 'px';
        if (obj.prop('tagName').toLowerCase() === 'tr') {
            loadinglayers[i].style.left = obj.offset().left + 1 + 'px';
        }
    }
}
/* FINE LOADING OVERLAY */
