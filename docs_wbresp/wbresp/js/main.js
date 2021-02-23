/* globals $:false, escape:false, unescape:false, loadWidgets:false, imgttpreload:true, getVideo */
/* exported wStore, moveToElement, myTimer, loadWidget, loadModal, overPlayVideo */
"use strict";
var altezzaMenu = $('.sectionTitle').css('height');
var lastScrollTop = $(window).scrollTop();
var menuPos = 'down';
var videolayer;
// Scrittura/lettura dati su localStorage o cookie statico
var checkStorage = function () {
    try {
        localStorage.setItem("testStorage", "true");
        localStorage.removeItem("testStorage");
        return true;
    } catch (e) {
        return false;
    }
}();
var wStore = (function () {
    // true se il browser non utilizza localHost (lo inizializza una volta sola)
    var checkLocalStorage = (("localStorage" in window) && window.localStorage !== null && checkStorage),
        checkSessionStorage = (("sessionStorage" in window) && window.sessionStorage !== null),
        write = function (key, value, expdays) {
            if (checkLocalStorage) {
                // utilizza localStorage
                localStorage.setItem(key, value);
            } else {
                // Scrive nel cookie
                var expdate = new Date();
                if (typeof expdays == "undefined") {
                    expdays = 365;
                }
                expdate.setDate(expdate.getDate() + expdays);
                document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
            }
        },
        read = function (key) {
            if (checkLocalStorage) {
                // legge da localStorage
                return localStorage.getItem(key);
            } else {
                // Legge dal cookie
                var valToReturn = null;
                $.each(document.cookie.split(";"), function (i, v) {
                    if (v.split("=")[0] == key) {
                        valToReturn = unescape(v.split("=")[1]);
                    }
                });
                return valToReturn;
            }
        },
        session = function (key, value) {
            if (checkSessionStorage) {
                if (typeof value != "undefined") {
                    // Scrive
                    sessionStorage[key] = value;
                }
                return sessionStorage[key];
            } else {
                // Scrive un cookie
                var valToReturn = null;
                if (typeof value != "undefined") {
                    var expdate = new Date();
                    expdate.setDate(expdate.getDate() + 1);
                    document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
                }
                $.each(document.cookie.split(";"), function (i, v) {
                    if (v.split("=")[0] == key) {
                        valToReturn = unescape(v.split("=")[1]);
                    }
                });
                return valToReturn;
            }
        };
    return {write: write, read: read, session: session};
}());
/* Raccolta di un parametro dall'url */
var qsGet = function (varname) {
    var varval = null;
    var qs = location.href.split("?")[1];
    if (qs) {
        $.each(qs.split("&"), function (i, v) {
            var vars;
            if (v.length > 0) {
                vars = v.split("=");
                if (vars[1].length) {
                    if (vars[0].toLowerCase() == varname.toLowerCase()) varval = vars[1];
                }
            }
        });
    }
    return varval;
};

function closeMenu() {
    $('.btn-c-chat').bind('click', function () {
        if (viewport().width < 1024) {
            $('.navbar-toggle').trigger('click');
        }
    });
}

function resizeMenu() {
    var menuInt = $('#navbar .nav.navbar-nav'),
        menuIntDesk = $('.dropdown-menu-large'),
        limiteScreen = viewport().height - $('.navbar-header').height();
    if (viewport().width < 1024) {
        menuInt.css('height', limiteScreen + 'px');
    } else {
        menuInt.css('height', 'auto');
        menuIntDesk.css({'max-height': limiteScreen + 'px', 'overflow': 'auto'});
        $('html,body').css({'overflow': 'visible', 'position': 'static', 'height': 'auto', 'background-color': '#fff'});
    }
}

function isAnchor(href) {
    return (typeof href === "string" && href !== '' && (/#(OOO)?([a-z][a-z0-9\-\_\.\:]*)?$/i).test(href));
}

function moveToAnchor(href) {
    var targetEl, target = getAnchorTarget(href);
    if (target !== '') {
        targetEl = $('#' + target);
        if (targetEl.length) {
            $('html, body').stop().animate({
                'scrollTop': targetEl.offset().top - 220 // - 200px (nav-height)
            }, 400, 'swing', function () {
                window.location.hash = '#OOO' + target;
            });
        }
    }
}

function moveToElement(element) {
    element = $(element);
    if (element.length) {
        $('html, body').stop().animate({
            'scrollTop': element.offset().top - 220 // - 200px (nav-height)
        }, 400, 'swing');
    }
}

function getAnchorTarget(href) {
    var res = href.match(/#(OOO)?([a-z][a-z0-9\-\_\.\:]*)?$/i);
    return res ? res[2] : '';
}

function fixAnchor(href) {
    var res = href.match(/(.*)#(OOO)?([a-z][a-z0-9\-\_\.\:]*)?$/i);
    return res[1] + '#OOO' + res[3];
}

function myTimer() {
    var scrollTop;
    if ($(window).width() < 768) {
        scrollTop = $(window).scrollTop();
        if (scrollTop < 20) {
            menuDown();
        } else if (scrollTop < lastScrollTop) {
            menuDown();
        } else if (scrollTop > lastScrollTop) {
            menuUp();
        }
        lastScrollTop = scrollTop;
    } else {
        menuDown();
    }
}

function menuUp() {
    if (menuPos == 'down') {
        menuPos = 'up';
        $('.sectionTitle').fadeOut("fast", "linear");
    }
}

function menuDown() {
    if (menuPos == 'up') {
        menuPos = 'down';
        $('.sectionTitle').fadeIn("slow", "linear");
    }
}

function moveMenu() {
    $("ul.submenu li a.selected").parent().addClass("current");
    $("ul.submenu li a.selected").attr("href", "#");
    $("ul.submenu li a.selected").click(function () {
        if ($(this).parent().hasClass("compress")) {
            $(this).parent().removeClass("compress");
            $("ul.submenu li").hide();
            $(this).parent().show();
        } else {
            $(this).parent().addClass("compress");
            $("ul.submenu li").show();
        }
    });
    return;
}

function setModalMobile() {
    $('.modal').on('shown.bs.modal', function () {
        $(this).appendTo('body');
        //$('.modal-backdrop').insertAfter('.modal')
        if (/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent)) {
            $('html,body').css({'overflow': 'hidden', 'position': 'relative', 'height': '100%'});
            $(this).find('.modal-backdrop').insertAfter($(this));
        }
    });
    $('.modal').on('hidden.bs.modal', function () {
        if (/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent)) {
            $('html,body').css({'overflow': 'auto', 'position': 'static', 'height': 'auto'});
        }
    });
}

function scrollLogin() {
    $('.accessoClientiMobLink').bind('click', function () {
        $('html,body').css({'overflow': 'hidden', 'position': 'fixed', 'height': '100%', 'width': '100%'});
    });
    $('#accessoClientiMob').bind('click', function () {
        $('html,body').css({'overflow': 'visible', 'position': 'static', 'height': 'auto', 'width': 'auto'});
    });
    if ($('#modalBlockLogin').outerHeight() > $(window).height()) {
        $('#modalBlockLogin').css({
            'height': ($(window).height() - 50) + 'px',
            'overflow-y': 'auto',
            'overflow-x': 'hidden'
        });
    } else {
        $('#modalBlockLogin').css({
            'height': '100%',
            'overflow-y': 'auto',
            'overflow-x': 'hidden'
        });
    }
}

var lmModal;
var loadModal = function (modalBody, heading) {
    var lmModalHeader, lmModalBody;
    if ($("#modalLoaded").length) $("#modalLoaded").remove();
    // Prepara la finestra
    lmModal = $("<div>").addClass("modal fade").attr({"id": "modalLoaded", "role": "dialog"});
    // Header
    lmModalHeader = $("<div>").addClass("modal-header").append($("<button>").addClass("close").attr({
        "type": "button",
        "data-dismiss": "modal"
    }).html("&times;"));
    if (heading) {
        lmModalHeader.append($("<h4>").html(heading));
    }
    // Body
    lmModalBody = $("<div>").addClass("modal-body");
    if (typeof modalBody == "string") {
        lmModalBody.html(modalBody);
    } else {
        lmModalBody.empty().append(modalBody);
    }
    lmModal.append($("<div>").addClass("modal-dialog").append($("<div>").addClass("modal-content").append(lmModalHeader, lmModalBody)));
    // Appende tutto al body ed apre la modale
    $("body").append(lmModal);
    // Attiva la modale
    lmModal.modal("show");
    return lmModal;
};
var viewport = function () {
    var e = window,
        a = 'inner';
    if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return {width: e[a + 'Width'], height: e[a + 'Height']};
};
var loadWidget = function () {
    var widCont;
    /* Caricamento dei Widget onload, solo se necessario */
    widCont = $("#widgetContainer");
    if (widCont.length && typeof loadWidgets != "undefined") {
        widCont.empty();
        $.each(loadWidgets, function (i, v) {
           
                // Prepara lo spazio per il widget da riempire
                var widgetCont = $("<div>").addClass("widgetCont loading");
                widCont.append(widgetCont);
                $.ajax({
                    url: "/wbresp/html/" + v,
                    dataType: "html",
                    success: function (data) {
                        widgetCont.html(data);
                        var widget = widgetCont.find(".widget").hide();
                        widgetCont.removeClass("loading");
                        widget.fadeIn(300);
                    },
                    error: function () {
                        widgetCont.html("<!-- WIDGET MANCANTE: '" + v + "' -->");
                        widgetCont.hide();
                    }
                
                });
           
        });
        widCont.removeClass("loading");
    }
    /* Fine caricamento widget */
};

/* Gestione ed inizializzazione selector box */
var selectorBoxInit = function () {

    /* Inizializza tutto partendo dal valore del campo */
    $.each($(".selector-wrap"), function (k, v) {
        var sw = $(v);
        var impVal = sw.find("input[name=" + sw.attr("data-input-name") + "]").val();
        if (impVal.length > 0) {
            $.each(impVal.split(","), function (ind, val) {
                sw.find(".selector-box[data-value=" + val + "]").addClass("selected");
            });
        }
    });

    /* Comportamenti con emulazione sul click */
    $(".selector-wrap .selector-box").click(function () {
        var el = $(this);
        if (!el.hasClass("disabled")) {

            var elPar = el.parents(".selector-wrap");

            if (elPar.attr("data-input-type") == "radio") {
                // Replica il comportamento esclusivo dei radio button
                elPar.find(".selector-box").not(".disabled").removeClass("selected");
                el.addClass("selected");
            }
            else {
                // Replica il comportamento di un checkbox (attiva o disattiva )
                el.toggleClass("selected");
            }
            var impField = elPar.find("input[name=" + elPar.attr("data-input-name") + "]");
            var impVal = [];
            $.each(elPar.find(".selector-box.selected"), function () {
                impVal.push($(this).attr("data-value"));
            });
            impField.val(impVal);
        }
    });
};
$(selectorBoxInit);

/*** IE6-8 - Browser detection ***/
var lteIE7 = !!(document.all && !document.querySelector);
/*** |FINE| IE6-8 - Browser detection ***/
/* Browser detection */
var nAgt = navigator.userAgent,
    browserName = navigator.appName,
    verOffset,
    fullVersion = 0;

// In Opera 15+, the true version is after "OPR/" 
if ((verOffset = nAgt.indexOf("OPR/")) != -1) {
    browserName = "";
}
// In older Opera, the true version is after "Opera" or after "Version"
else if ((verOffset = nAgt.indexOf("Opera")) != -1) {
    browserName = "";
}
// In Chrome, the true version is after "Chrome" 
else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
    browserName = "Chrome";
    fullVersion = nAgt.substr(verOffset + 7, 3);
    fullVersion = 1 * fullVersion.split('.')[0];
    if (fullVersion < 40) {
        browserName = "";
    }
}
// In MSIE, the true version is after "MSIE" in userAgent
else if ((verOffset = nAgt.indexOf("MSIE")) != -1 || (verOffset = nAgt.indexOf("Trident")) != -1) {
    browserName = "IE";
}
// In Safari, the true version is after "Safari" or after "Version" 
else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
    browserName = "Safari";
    if (nAgt.indexOf("Mobile") !== -1) {
        verOffset = nAgt.indexOf("OS ");
        fullVersion = nAgt.substr(verOffset + 3, 6);
        fullVersion = 1 * fullVersion.split('_')[0];
        if (fullVersion < 8) {
            browserName = "";
        }
    } else {
        if ((verOffset = nAgt.indexOf("Version")) != -1) {
            fullVersion = nAgt.substr(verOffset + 8, 3);
            fullVersion = 1 * fullVersion.split('.')[0];
            if (fullVersion < 8) {
                browserName = "";
            }
        } else {
            browserName = "";
        }
    }
}
// In Firefox, the true version is after "Firefox" 
else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
    browserName = "Firefox";
    fullVersion = 1 * nAgt.substring(verOffset + 8);
    if (fullVersion < 38) {
        browserName = '';
    }
}
// Bing bot
else if ((verOffset = nAgt.indexOf("bingbot")) != -1) {
    browserName = "Bing bot";
    fullVersion = 1 * nAgt.substring(verOffset + 8, 3);
}
// Google+
else if ((verOffset = nAgt.indexOf("developers.google.com/+/web/snippet")) != -1) {
    browserName = "Google+ snippet";
    fullVersion = 1;
}
// Google bot mobile
else if ((verOffset = nAgt.indexOf("Googlebot-Mobile")) != -1) {
    browserName = "Google bot Mobile";
    fullVersion = 1 * nAgt.substring(verOffset + 17, 3);
}
// Google bot
else if ((verOffset = nAgt.indexOf("Googlebot")) != -1) {
    browserName = "Google bot";
    fullVersion = 1 * nAgt.substring(verOffset + 10, 3);
} else {
    browserName = "";
}
// console.log('browserName: ' + browserName);
// console.log('fullVersion: ' + fullVersion);
/* |FINE| Browser detection */

//controlla se supporta le transizioni
$.support.transition = (function () {
    var thisBody = document.body || document.documentElement,
        thisStyle = thisBody.style,
        support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined || thisStyle.MozTransition !== undefined || thisStyle.MsTransition !== undefined || thisStyle.OTransition !== undefined;
    return support;
})();

//chiusura menu su tablet landscape tappando fuori dall'area menu:
function ttCloseMenuOuterTap() {
    $(document).on('click touchstart', function (e) {
        var MenuOpened = $(e.target).closest(".dropdown-menu-large");
        var LinkOpened = $(e.target).closest(".dropdown-large.open");
        var LinkClosed = $(e.target).closest(".dropdown-large");
        if (MenuOpened.length === 0 && LinkOpened.length === 0 && $('.dropdown-menu-large').is(':visible') && viewport().width >= 1024) {
            $('.dropdown-large.open').find('a').trigger('click').blur();
        } else if (LinkClosed.length !== 0 && viewport().width >= 1024) {
            $(e.target).toggleClass('colorFocus');
        }
    });
}

/* Attiva i tooltip */
var initTooltip = function () {
    var $wrapper = $('body');
    var ttel = $("*[data-toggle=tooltip]").not(".ttInited");
    // html complesso per i tooltip con ID indicato
    $.each($wrapper.find("[data-htmlid]"), function (i, v) {
       var ttHtml = $($(v).attr("data-htmlid")).addClass("inited");
        $(v).attr("title", ttHtml.html());
    });
    $("*[data-toggle=tooltip]").tooltip(
        {
            trigger: "click",
            html: true,
            template: '<div class="tooltip" role="tooltip"><span class="tooltip-close">&nbsp;</span><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
        });

    ttel.click(function (event) {
        // Chiusura di tutti i tooltip aperti
        if (!$(this).is(".radio-inline")) event.preventDefault();
        //Chiusura del tooltip
        $("#" + $(this).attr("aria-describedby") + " .tooltip-close").click(function (event) {
            event.preventDefault();
            $(this).parents(".tooltip").tooltip('hide');
        });
       
    }).addClass("ttInited");
    // Avvia il precaricamento di tutte le immagini eventualmente presenti nei vari tooltip
    $.each(ttel, function (i, v) {
        var ttCode = $(v).attr("data-original-title");
        
        
        if (ttCode.indexOf("<img") >= 0) {
            if (typeof imgttpreload == "undefined") {
                imgttpreload = $("<div>").css("display", "none").attr("id", "imgttpreloader");
                $("body").prepend(imgttpreload);
            }
            $.each($.parseHTML(ttCode), function (i, v) {
                var ele = $(v);
                if (ele.is("img")) imgttpreload.append(ele);
            });
        }
        
    });
    $("[data-toggle='tooltip']").on('show.bs.tooltip', function () {
        $('.tooltip,in.fade').tooltip('hide');
        if(!ttel.hasClass("closeable")) {
            ttClosTooltipOuterTap();
        }
       
    });
};

function ttClosTooltipOuterTap() {
    $(document).on('click touchstart', function (e) {
        var tooltipOpened = $(e.target).closest(".tooltip.in");
        if (!tooltipOpened.length && !$(e.target).attr('data-toggle')) {
            $('.tooltip').tooltip('hide');
        }
    });
}

$(function () {
    initTooltip();
    //$("*[data-toggle=tooltip]").tooltip();
    /*var ttel = $("*[data-toggle=tooltip]").not(".ttInited");
    $("*[data-toggle=tooltip]").tooltip(
    {
        trigger: "click",
        html: true
    });
    ttClosTooltipOuterTap();
    $("[data-toggle='tooltip']").bind('focusout', function() {
        $(this).tooltip('hide');
    });*/
});

/* SVUOTARE QUESTE FUNZIONI IN CASO DI MALFUNZIONAMENTI */
/* Redirect in HTTPS login */
var getLoginHttpsVersion = function () {
    /*
    // Ricava l'url chiamato
    var loc = parent.location.href;
    if ((loc.lastIndexOf("http:", 0) === 0) && !(loc.indexOf("http://libreriewebank.") === 0)) {

        // Se il pannello di login e' chiuso
        if(!$("#formLoginNav").is(":visible")) {
            // Effettua il replacement
            loc = loc.replace("http:","https:");
            // Set del wStore di apertura della login
            wStore.write("loginOpened","true");
            // Redirect alla login corretta
            parent.location.href = loc;
        }
    }
    */
};
/* Fine redirect in HTTPS login */

/* SVUOTA LA ACTION SE L'URL E' IN HTTP E NON HTTPS */
/* Rimuovere questo blocco in caso di malfunzionamenti */
var noLoginHttp = function () {
    var loc = parent.location.href;
    if ((loc.lastIndexOf("http:", 0) === 0) && (loc.indexOf("http://libreriewebank.") !== 0)) {
        $("#toplogin").attr("action", "#");
    }
};
$(noLoginHttp);
/* Fine blocco da rimuovere in caso di malfunzionamenti */

var setCookieLogin = function() {
    $('#accessoClienti').bind('click', function() {
        if($('#formLoginNav').is(':visible'))
        {	
            wStore.write("loginOpened","true");
        }
        else {
            wStore.write("loginOpened","false");
        }
    })
    
    if (wStore.read("loginOpened")=='true') {
        $('#accessoClienti').trigger('click');
    }
}

/* isMobile */
$(function () {
    var isMobile = (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Windows Phone/i.test(navigator.userAgent)) ? true : false;
    if (isMobile) {
        ttCloseMenuOuterTap();
    }
    if (!isMobile) {
        $('.dropdown-large').on('mouseover', function () {
            $(this).addClass('hover');
        });
        $('.dropdown-large').on('mouseout', function () {
            $(this).removeClass('hover');
        });
        $('#panelMenuButton').on('mouseenter', function () {
            if ($('#panelMenu2').is(':visible') && viewport().width >= 1024) {
                $('#panelMenu2Button').closest('.dropdown-large').removeClass('open');
            }
        });
        $('#panelMenu2Button').on('mouseenter', function () {
            if ($('#panelMenu').is(':visible') && viewport().width >= 1024) {
                $('#panelMenuButton').closest('.dropdown-large').removeClass('open');
            }
        });
    }
    $('.navbar-toggle').on('click', function () {
        if ($.support.transition) {
            $(this).toggleClass('opened');
        } else {
            $(this).toggleClass('openedFix');
        }
        if ($(this).hasClass('opened') || $(this).hasClass('openedFix')) {
            $('html,body').css({
                'overflow': 'hidden',
                'position': 'relative',
                'height': '1px',
                'background-color': '#000'
            });
        } else {
            $('html,body').css({
                'overflow': 'visible',
                'position': 'static',
                'height': 'auto',
                'background-color': '#fff'
            });
        }
    });
    $('.dropdown-menu-large').on('click', function (event) {
        event.stopPropagation();
    });
    resizeMenu();
    scrollLogin();
    if (viewport().width < 1023) {
        $('#accessoClientiMobForm').append($('#toplogin').detach());
    }
    altezzaMenu = $('.sectionTitle').css('height');
    $('.tableContainerInt').viewportChecker({
        callbackFunction: function () {
            if ($(window).width() < 768) {
                $('.tableContainerInt').animate({
                    'margin-left': '-100px'
                }, 1500).animate({
                    'margin-left': '0px'
                }, 1500);
            }
        }
    });
    // modifica i link alle ancore da "#id" a "#OOOid"
    // per prevenire il comportamento predefinito del browser
    var linkArr = $('a');
    linkArr.each(function () {
        var el = $(this),
            href = el.attr('href'),
            target = '';
        if (isAnchor(href)) {
            target = getAnchorTarget(href);
            // Controlla che sia un'ancora e non un link
            if (target !== '' && $('#' + target).length) {
                el.attr('href', fixAnchor(href));
                el.click(function (e) {
                    e.preventDefault();
                    moveToAnchor(href);
                    return false;
                });
            }
        } else if (href === '#!') {
            el.attr('href', '#OOO');
        }
    });
    // gestisce l'ancora nelle pagine con il navigator che scrolla
    var locationAnchor = window.location.hash,
        locationTarget;
    if (isAnchor(window.location.hash)) {
        locationTarget = getAnchorTarget(locationAnchor);
        if (locationTarget !== '' && $('#' + locationTarget).length) {
            window.location.hash = fixAnchor(locationAnchor);
            moveToAnchor(locationAnchor);
            $('.submenu a').each(function () {
                var el = $(this),
                    href = el.attr("href");
                if (isAnchor(href) && getAnchorTarget(href) === locationTarget) {
                    el.focus();
                    return false;
                }
            });
        }
    }
    moveMenu();
    window.onresize = function () {
        altezzaMenu = $('.sectionTitle').css('height');
        if (viewport().width > 1023) {
            if (!$('#formLoginNav').find("#toplogin").length) {
                $('#formLoginNav').append($('#toplogin').detach());
                if ($('#modalBlockLogin').is(':visible')) {
                    $('#modalBlockLogin').toggle();
                }
                if ($('#formLoginNav').is(':visible')) {
                    $('#formLoginNav').toggle();
                }
            }
        } else {
            if (!$('#accessoClientiMobForm').find("#toplogin").length) {
                $('#accessoClientiMobForm').append($('#toplogin').detach());
                /*if ($('#panelMenu2').is(':visible')) {
                    $('#panelMenu2Button').click();
                }*/
                if ($('#formLoginNav').is(':visible')) {
                    $('#formLoginNav').toggle();
                }
            }
        }
        scrollLogin();
        resizeMenu();
        ttCloseMenuOuterTap();
    };


    $('#accessoClienti').on('click', function (event) {
        event.stopPropagation();
        getLoginHttpsVersion();
        $('#formLoginNav').toggle();
    });
    $('#accessoClientiMob').on('click', function (event) {
        event.stopPropagation();
        $('#modalBlockLogin').toggle();
    });
    $('.accessoClientiMobLink').on('click', function (event) {
        event.stopPropagation();
        if ($('#navbar').is(':visible')) $('.navbar-toggle').click();
        $('#modalBlockLogin').toggle();
    });
    $('#modalBlockLoginContent').on('click', function (event) {
        event.stopPropagation();
    });
    $('.anmn').on('click', function (event) {
        event.stopPropagation();
        var thisID = $(this).attr('id');
        $('.anmn').removeClass('active');
        $(this).addClass('active');
        $('.anmnv').hide();
        $('#' + thisID + 'v').show();
        if ($(window).width() > 1023) {
            event.preventDefault();
        }
    });
    $('.pnmn').on('click', function (event) {
        event.stopPropagation();
        var thisID = $(this).attr('id');
        $('.pnmn').removeClass('active');
        $(this).addClass('active');
        $('.pnmnv').hide();
        $('#' + thisID + 'v').show();
        if ($(window).width() > 1023) {
            event.preventDefault();
        }
    });
    $(".carousel-inner").swipe({
        threshold: 25,
        allowPageScroll: "auto",
        preventDefaultEvents: false,
        tap: false,
        swipeLeft: function () {
            $(this).parent().carousel('next');
        },
        swipeRight: function () {
            $(this).parent().carousel('prev');
        }
    });
    /*carousel in cui si deve muovere un elemento per volta */
    $('.carousel-moveone').each(function () {
        if ($(this).find('.item').length > 3) {
            $(this).find('.item').wrapAll('<div class="carousel-inner" role="listbox">');
            $(this).addClass('carousel');
        }
    });
    $('.carousel-moveplus').each(function () {
        if ($(this).find('.item').length > 1) {
            $(this).find('.item').wrapAll('<div class="carousel-inner" role="listbox">');
            $(this).addClass('carousel');
        }
    });
    $('.carousel-moveone .item').each(function () {
        var itemToClone = $(this);
        for (var i = 1; i < 3; i++) {
            itemToClone = itemToClone.next();
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            var clonedItem = itemToClone.children(':first-child').clone();
            clonedItem.addClass("cloneditem-" + (i)).appendTo($(this));
        }
    });
    /*
    $('.carousel-showmanymoveone .item').each(function () {
        var itemToClone = $(this);
        for (var i = 1; i < 4; i++) {
            itemToClone = itemToClone.next();
            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
    */
    if ($(window).width() > 1199 && $("ul.submenu").offset()) {
        var topPadding = 220,
            animationSpeed = 200,
            $sidebar = $("ul.submenu"),
            $window = $(window),
            offset = $sidebar.offset(),
            diffOffset = offset.top - topPadding;
        $window.scroll(function () {
            var winScrollTop = $window.scrollTop(),
                docHeight = $(document).height();
            if ($(window).width() < 1199) {
                if ((winScrollTop + 1100) < docHeight) {
                    $sidebar.stop().animate({
                        marginTop: 0
                    }, animationSpeed);
                }
                return;
            }
            if (winScrollTop > diffOffset && (winScrollTop + 1100) < docHeight) {
                $sidebar.stop().animate({
                    marginTop: winScrollTop - diffOffset
                }, animationSpeed);
            } else if ((winScrollTop + 1100) < docHeight) {
                $sidebar.stop().animate({
                    marginTop: 0
                }, animationSpeed);
            }
        });
    }
    $("form").keypress(function (e) {
        if (e.which == 13) {
            var tagName = e.target.tagName.toLowerCase();
            if (tagName !== "textarea") {
                return false;
            }
        }
    });
    //funzione per accordion in form
    $(".espandi").click(function () {
        $(this).hide();
        $(this).next().show();
        $(this).parent().next().show();
    });
    $(".comprimi").click(function () {
        $(this).hide();
        $(this).prev().show();
        $(this).parent().next().hide();
    });
    /* Carica widgets*/
    loadWidget();

    /* Check cokies */
    setCookieLogin();
    
    //modal apertura su mobile
    setModalMobile();
    // Apertura login su variabile in GET
    if (qsGet("login") == "open") {
        if (viewport().width > 1023) {
            $('#accessoClienti').trigger("click");
        } else {
            $('#accessoClientiMob').trigger("click");
        }
    }

    // Apertura login per localStorage
    


    // ALERT PER IE 7
    /*
    if (document.all && !document.querySelector) {
        var htmlAlert = $("<div>").addClass("alertIe7").append(
            $("<p>").html("Il tuo browser e' obsoleto e non supportato da questa versione del sito.<br> Non siamo pertanto in grado di garantirti un'esperienza di navigazione ottimale.<br>")
        );
        loadModal(htmlAlert,"Browser non supportato")
    }
    */
    var browserTested = (typeof wStore.read("browserTested") === "undefined") ? false : (wStore.read("browserTested") === "true");
    if (!browserTested && (lteIE7 || browserName === '')) {
        // Caricare l'html e mostrare la popup
        $.get("/html/scelta_browser_wb.html", '', function (html) {
            loadModal(html, "Browser non supportato");
            $('#browserTestLnk').click(function () {
                lmModal.modal("hide");
                wStore.write("browserTested", "true");
            });
            wStore.write("browserTested", "false");
        }, 'html');
    }
    closeMenu();
});

/* Campi con label all'interno */
$(function () {

    $.each($(".labelinside input"), function (i, v) {
        var field = $(v);
        if (field.val() !== "") field.parents(".labelinside").addClass("compiled");
    });

    $(".labelinside input").on("focus active", function () {
        var field = $(this);
        field.parents(".labelinside").addClass("compiled");
    });

    $(".labelinside input").on("blur", function () {
        var field = $(this);
        if (field.val() === "") field.parents(".labelinside").removeClass("compiled");
    });
});

/* Apre un video in una modale (video embedded con player nativo)*/
var overPlayVideo = function (url) {

    if (typeof videolayer == "undefined") {
        videolayer = loadModal($("<div>").attr("id", "videowrapper"));
        videolayer.attr("id", "layerVideo");
        $(function () {
            $("#layerVideo .closeLayer").click(function () {
                $("#videowrapper").empty();
            });
        });
    }
    videolayer.modal("show");
    getVideo({
        wrapper: "#videowrapper",
        videopath: url,
        autoplay: false,
        initialVolume: 0.8
    });
};

// Nuova funzione di embedding video nelle modali
var showVideo = function(vimeoid) {
    $.getScript("https://player.vimeo.com/api/player.js",function(){
        var vimeoIframe = $("<iframe>").attr({
            src: "https://player.vimeo.com/video/"+ vimeoid,
            frameborder:"0", 
            allow:'autoplay; fullscreen; picture-in-picture', 
            allowfullscreen: true,
            display:"inline-block",
            height:"100%"
        }).css({background: "transparent url(/wbresp/img/loading.gif) no-repeat center center",position:"absolute",top:"0",left:"0",width:"100%",height:"100%",minHeight:"auto"})
        var mdVimeo = loadModal($("<div>").css({padding:"56.25% 0 0 0",position:"relative",marginTop:"20px"}).append(vimeoIframe));
        mdVimeo.on("hide.bs.modal",function(e){
            $(e.target).remove();
        });
    })
}

/* TOOL TRACCIATURA GOOGLE */
$(function () {
    var gEl = "<!-- Google Tag Manager --> " + "<noscript><iframe src='//www.googletagmanager.com/ns.html?id=GTM-THNL48'" + "height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>" + "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':" + "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0]," + "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= " + "'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); " + "})(window,document,'script','dataLayer','GTM-THNL48');</script> " + "<!-- End Google Tag Manager -->";
    $("body").prepend(gEl);
});
/* FINE TRACCIATURA GOOGLE*/
