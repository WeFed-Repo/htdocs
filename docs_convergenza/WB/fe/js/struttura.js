/* Variabile banca ad uso front-end */
var feBank = "webank";

var isMobile = function () {
    return ($(window).width() < 768);
};

/* Inizializzazione menu statici */
var initNav = function () {

    if (!$("body").hasClass("wbMi")) {

        /* Menu desktop dropdown secondi livelli */
        $(".level2>li").on("mouseenter focusin click", function () {
            //aggiunta per non mostrare menu quando è vuoto
            var isActivable = $(this).find('.tlWrap ul li').length > 0;
            if (isActivable) {
                $(this).addClass("active");
                var nZindex = getNextHighestZindex();
                $(this).find('ul').css('z-index', nZindex).attr({ "aria-expanded": "true" });
                $(this).find('a:first-child').css('z-index', nZindex + 1).attr({ "aria-expanded": "true" });
            }
            if (isTouch) {
                if (typeof menuTouch != "undefined") {
                    clearTimeout(menuTouch);
                }
                // noinspection JSUndeclaredVariable
                menuTouch = setTimeout(function () {
                    $(".level2>li.active").delay(5000).removeClass("active");
                }, 5000);
            }
        }).on("mouseleave", function () {
            $(this).removeClass("active");
            $(this).find('ul').css('z-index', 9).attr("aria-expanded", "false");
            $(this).find('a:first-child').css('z-index', 10).attr("aria-expanded", "false");
        });

        /* Main menu mobile */
        $(".headbtn.menuopen").click(function () {
            // Chiude l'eventuale "concorrente aperto"
            $("header .headbtn.usermenuopen.opened").trigger("click");
            $(this).toggleClass("opened");
            $("#mobileMenu").toggleClass("opened", 200);
        });

        /* Menu terzi livelli mobile */
        $("#liv2mobile li a").click(function () {
            // Clona il sottomenu' associato
            var liv3mobile = $(this).parents("li").find(".liv3mobile").clone().removeClass("liv3mobile");

            // Apre il menu
            // Inizializza l'oggetto "back"
            $("#mobileDetailTree").empty().append(liv3mobile).toggleClass("opened", 200)
                .find(".back").click(function () {
                $("#mobileDetailTree").toggleClass("opened", 200)
            });

        });
        $("#liv2mobile li.selected>a").eq(0).trigger("click");

        /* Menu quarti livelli x mobile */
        /* Workaround menu Verona */
        var menuSpalla = $("#menuSpalla");
        if (menuSpalla.length > 0) {
            $("#leftmenu").empty().append(menuSpalla.html());
        }
        /* Fine workaround menu Verona */
        $("#leftmenu .selected").click(function () {
            $(this).toggleClass("opened")
        });

        /* Menu utente mobile */
        $("a.headbtn.usermenuopen").click(function () {
            // Assembla il mobilemenu se non esiste
            if (typeof mobileUserMenu == "undefined") {
                // noinspection JSUndeclaredVariable
                mobileUserMenu = $("<div>").attr({ "id": "userMenu" });
                mobileUserMenu.append($("#userMenuMobile"));
                $("body").prepend(mobileUserMenu);
            }
            // Chiude l'eventuale "concorrente aperto"
            $("header .headbtn.menuopen.opened").trigger("click");

            $(this).toggleClass("opened", 200);
            mobileUserMenu.toggleClass("opened", 200);
        });
    }
};

/* Controllo chiusura menu mobile */
var closeMobileMenu = function() {
    $("#mobileMenu, .headbtn.menuopen").removeClass("opened");
}

$(initNav);

/*** CHAT EGAIN **/
/* callback token */
var eGainGetToken = function (callback) {
    $.ajax({
        url: "/WEBWB/chat.do",
        cache: false,
        dataType: "json",
        success: callback,
        error: function () {
        }
    });
};

/* INIZIALIZZA LA CHAT */
var eGainStartChat = function () {
    // Inizializza la variabile necessaria ad identificare il nuovo layout delle parti private (per i bottoni)
    // Detect del wrapper
    vivChatWr = $("#vvcButton");
    if (vivChatWr.length) {
        var toolChatUrl = "";
        /* Determina l'url dello script da invocare*/
        toolChatUrl = "/WB/fe/js/tool_chat_155.js";

        eGainGetToken(function (data) {
            /* Parametri comuni */
            eGain = data;
            eGain.serviceId = "WB_PRIV";
            eGain.template = "WebankPriv";
            eGain.availPath = "/WEBWB/";

            // controllo per debug
            $.getScript(toolChatUrl, function () {
                // noinspection JSUndeclaredVariable
                chatBtnEnabled = "<li class=\"toolbtn\"><a class=\"icon icon-chat\" href=\"javascript:;\" onclick=\"egain_openDiv();\" id=\"toggledBtn\" title=\"Chat\"></a></li>";

                // noinspection JSUndeclaredVariable
                chatBtnDisabled = "<li class=\"toolbtn disabled\"><span class=\"icon icon-chat \" href=\"javascript:;\" id=\"toggledBtn\" title=\"Chat\"></span></li>";
                egain_setTimerCheckVisibility('vvcButton', 1, 10000, eGain);
            });
        });
    }
};

$(eGainStartChat);

$(document).ajaxComplete(function (event, jqXHR) {
    var contentType = jqXHR.getResponseHeader('content-type') || '',
        content;

    if (jqXHR.status === 200 && ~contentType.indexOf('html') && jqXHR.responseText) {
        content = $(jqXHR.responseText);

        if (content.find('input[name="j_username"]').length) {
            window.location.assign('/webankpub/wbresp/home.do');
        }
    }
});

// Credit David Walsh (https://davidwalsh.name/javascript-debounce-function)
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
var debounce = function (func, wait, immediate) {
    var timeout;

    return function executedFunction() {
        var context = this;
        var args = arguments;

        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };

        var callNow = immediate && !timeout;

        clearTimeout(timeout);

        timeout = setTimeout(later, wait);

        if (callNow) func.apply(context, args);
    };
};

// Ricalcola le dimensioni della modale
// ogni volta che si ridimensiona la finestra del browser
var resizeModals = debounce(function () {
    $('.modal.fade.in').modal('show');
}, 250);

$(window).resize(resizeModals);

// Appende le modali al body per fare in modo che siano stampate correttamente
var appendModalToBody = function ($modal) {
    if (!$modal.parent('body').length) {
        $modal.appendTo('body');
    }
    $modal.addClass('bodyChild').removeClass('appendToBody');
};

/* GTM */
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T8CFR27');


$(function () {
    var $body = $('body');

    // Lancia appendModalToBody per tutte le modali in pagina
    $('.modal.appendToBody:not(.bodyChild)').each(function () {
        appendModalToBody($(this));
    });

    // Lancia appendModalToBody per le modali caricate successivamente tramite AJAX,
    // individuandole all'apertura
    $body.on('show.bs.modal', '.modal', function () {
        var $modal = $(this);

        if ($modal.hasClass('appendToBody')) {
            setTimeout(function () {
                appendModalToBody($modal);
                $body.addClass('hasModalChild');
                $modal.modal('show');
            });

            return false;
        } else if ($modal.hasClass('bodyChild')) {
            $body.addClass('hasModalChild');
        }
    }).on('hidden.bs.modal', '.modal.bodyChild', function () {
        if ($body.hasClass('hasModalChild')) {
            $body.removeClass('hasModalChild');
        }
    });
});


/*** STAMPA MODALI ESTINZIONE CARTE ***/
// noinspection JSUnusedGlobalSymbols
function printModal ($modal) {
    var $modalContent;
    var $body;

    if ($modal.parent()[0].tagName !== 'BODY') {
        $body = $('body');
        $body.find('.modal-print-content').remove();
        $modalContent = $modal.find('.modal-body').clone();
        $modalContent.removeClass('modal-body').addClass('modal-print-content');
        $modalContent.find('.btnWrapper').remove();
        $body.addClass('modal-print').prepend($modalContent);
        $modal.modal('hide');
        setTimeout(function () { window.print(); }, 250);
    }
}

$(function () {
    $('#layerEstinzioneCarta, #layerEstinzioneBancomat').find('.btn-primary').click(function () {
        printModal($(this).closest('.modal '));
    }).attr('href', 'javascript:');
});

$(window).on('afterprint', function () {
    $('body').removeClass('modal-print').find('.modal-print-content').remove();
});
/*** FINE - STAMPA MODALI ESTINZIONE CARTE ***/

/* Replacement 14/02/2020 Bottone Cerca i fondi PIR: Workaround per impossibilita' rilascio ref. VGir-SCab */
$(function(){
    $("a[data-target=#mesaggioPir][type=button][data-toggle=modal]").replaceWith(
        $("<a>").attr(
            {"type":"button",
            "href":"/WEBEXT/wrapped/goToInvest/wbOnetoone/2l/action/investywb/RicercaFondi.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new&fondosicav=P",
            "title":"Cerca i Fondi PIR"}
            ).addClass("btn btn-primary btn-align-left").html("Cerca i Fondi PIR")
    );
});
/* Fine Replacement */


