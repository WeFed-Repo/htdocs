/* Variabile banca ad uso front-end */
var feBank = "youweb";

var menuPushMobile = (function () {
    /* variabili generiche*/

    var viewdim = function () {
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        return { width: e[a + 'Width'], height: e[a + 'Height'] };
    };

    /*FUNZIONE GENERICA DI ANIMAZIONE */
    var animateLevels = function (element, amountLeft, postAnimationFunction) {
        element.animate({
            left: amountLeft
        }, 300, postAnimationFunction)
    }
    var initCloseMenu = function (deltaSlideMenu, offCanvasWrapper, menuWrapper, offsetTopMain) {
        $('#menuUserMobile,#menuMainMobile').css('top', offsetTopMain + 'px');
        $('body').removeClass('fixed').addClass('headerfixed');
        $('html').removeClass('fixed');
        $('#headerMobile').css({
            top: offsetTopMain + 'px'
        })
        menuWrapper.removeClass('animation-end');
        offCanvasWrapper.unwrap('<div class="no-scroll"></div>');
        $(window).scrollTop(offsetTopMain);
        $('#main').css('margin-top', 0);
        $('#overlayMenu,#clonedBack').hide();
        $('.mm-list.opened').css('left', this.deltaSlideMenu);
        if (navigator.userAgent.match(/Windows Phone/i)) {
            animateLevels($('#headerMobile'), 0);
        }

        animateLevels(offCanvasWrapper, '0', function () {
            $('#headerMobile').css({
                top: 0
            })
            $('body').removeClass('headerfixed');
            $('#menuUserMobile,#menuMainMobile').css('top', 0);
            offCanvasWrapper.unwrap('<div class="no-scroll"></div>');
            $('#overlayMenu,#clonedBack').remove();
            $(this).removeClass('pusher left right');
            menuWrapper.css('left', '0');
            $('.mm-list').removeClass('opened').removeClass('over-visible').removeClass('activeUl');
            $('.accordionMenu .ui-state-active').trigger('click');
        });

    }
    var closeSubMenu = function (el, subMenu, menuWrapper, menuFirst) {
        menuWrapper.removeClass('animation-end');
        el = $(el);
        animateLevels(menuWrapper, '0', function () {
            menuFirst.removeClass('over-visible').scrollTop(0, 0);
            subMenu.removeClass('activeUl');
            $('.second-levelMenu .ui-state-active').trigger('click')
        });
        el.remove();
    }

    //previene le interazioni tra menu mobile e desktop, da richiamare al resize
    var resetMenu = function () {
        var id;
        clearTimeout(id);
        id = setTimeout(doneResizing, 100);

        function doneResizing() {
            $('.first-levelMenu').css('height', viewdim().height + 'px');

        }

        if (viewdim().width > 1023) {
            $('#overlayMenu').trigger('click');
        }
    }

    //oggetto costruttore Menu
    function Menumobile(btn, elementToMove, deltaSlideWrapper, deltaSlideMenu, side) {
        this.btn = btn;
        this.elementToMove = elementToMove;
        this.deltaSlideWrapper = deltaSlideWrapper;
        this.deltaSlideMenu = deltaSlideMenu;
        this.side = side;
    }

    Menumobile.prototype.openMenu = function () {
        //definizione variabili iniziali
        var deltaSlideWrapper = this.deltaSlideWrapper,
            deltaSlideMenu = this.deltaSlideMenu,
            menuFirst = $(this.elementToMove).find('.first-levelMenu'),
            overlayMenu = '<div id="overlayMenu"></div>',
            offCanvasWrapper = $('#outerwrapper'),
            menuWrapper = $('#menuMainMobileWrapper'),
            voicesSubMenu = menuFirst.find('li span.openSubMenu'),
            side = this.side;

        //event click su bottone che apre primo livello
        $(this.btn).on('click', function (event) {
            var offsetTopMain = $(window).scrollTop();
            $('#main').css('margin-top', -offsetTopMain + 'px');
            offCanvasWrapper.wrap('<div class="no-scroll"></div>');
            offCanvasWrapper.addClass('pusher' + ' ' + side);
            //if (/iPad|iPhone|iPod|Android/i.test(navigator.userAgent)) {

            $('body').addClass('fixed');
            $('html').addClass('fixed');
            //	}
            if (navigator.userAgent.match(/Windows Phone/i)) {
                $('body').removeClass('fixed');
                $('html').removeClass('fixed');
                animateLevels($('#headerMobile'), deltaSlideWrapper);
            }

            animateLevels(offCanvasWrapper, deltaSlideWrapper);

            animateLevels(menuFirst, '0', function () {

                menuFirst.addClass('opened');
                menuFirst.css('height', viewdim().height + 'px');
                offCanvasWrapper.append(overlayMenu);
                $('#overlayMenu').fadeIn(200);
                $('#overlayMenu').click(function () {
                    initCloseMenu(deltaSlideMenu, offCanvasWrapper, menuWrapper, offsetTopMain)
                });
            });

        })
        //event click su eventuali voci di sottomenu
        voicesSubMenu.on('click', function (event) {
            var subMenu = $(this).next('.mm-list').eq(0);
            $('.first-levelMenu.mm-list.opened li').removeClass('active');
            $(this).closest('li').addClass('active');
            if (subMenu.length > 0) {
                subMenu.addClass('activeUl').scrollTop(0, 0);
                ;
                menuFirst.addClass('over-visible');
                animateLevels(menuWrapper, '-100%', function () {

                    subMenu.addClass('opened');
                    subMenu.find('.back').clone().attr('id', 'clonedBack').click(function () {
                        closeSubMenu(this, subMenu, menuWrapper, menuFirst)
                    }).insertBefore(subMenu);
                    /* vecchi android*/
                    menuWrapper.addClass('animation-end');

                });

            }
        })
    }
    //fine oggetto costruttore Menu

    //inizializzo i due tipi di menu
    var menuMain = new Menumobile('#buttonMenuMobile', '#menuMainMobile', '260px', '-100%', 'right');
    var menuUser = new Menumobile('#buttonUserMobile', '#menuUserMobile', '-260px', '100%', 'left');

    function initMenuMain() {
        menuMain.openMenu();
    }

    function initMenuUser() {
        menuUser.openMenu();
    }

    return {
        'initMenuMain': initMenuMain,
        'initMenuUser': initMenuUser,
        'resetMenuResize': resetMenu
    }

})();

$(function () {

    menuPushMobile.initMenuMain();
    menuPushMobile.initMenuUser();
    document.addEventListener("touchstart", function () {
    }, false);
});

$(window).resize(function () {
    if ($('#overlayMenu').length === 1) {
        menuPushMobile.resetMenuResize()
    }
});

// Header  scroll down up
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.nav-down').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {

    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('.nav-down').removeClass('nav-down').addClass('nav-up');
        $("li.open").removeClass("open");
        $(".dropdown.open").removeClass("open");
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('.nav-up').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

/* FUNZIONI PER LA GESTIONE DEL LOCALSTORAGE */
/* Lettura e scrittura localstorage o cookies */
// Scrittura/lettura dati su localStorage o cookie statico
var wStore = (function () {
    // true se il browser non utilizza localHost (lo inizializza una volta sola)
    var checkStorage = (("localStorage" in window) && window["localStorage"] !== null),

        write = function (key, value, expdays) {
            if (checkStorage) {
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
            if (checkStorage) {
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
        }

    session = function (key, value) {
        var hasSS = (("localStorage" in window) && window["localStorage"] !== null);
        if (hasSS) {
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
    }

    return { write: write, read: read, session: session }
}());

// Rende gli overlay sensibili al click
function makeFocusable(overlay) {
    overlay = $(overlay);
    // Prototipizza l'oggetto in modo che si possa passare anche solo l'ID
    var overlay = $(overlay);
    // L'evento viene istanziato come propriet� dell'oggetto, solo se necessario
    if (!overlay.mF) {
        overlay.mF = overlay.on("click", function () {
            nzi = getNextHighestZindex();
            if (this.style.zIndex < (nzi - 1))
                this.style.zIndex = nzi;
        });
    }
}

// Intercetta il pie' alto z-index
function getNextHighestZindex() {
    var highestIndex = 0;
    $("div").each(function () {
        zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
        if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) {
            highestIndex = zInd;
        }
    });
    return (highestIndex + 1);
}

function OpenWindow(page, target, extraParams) {
    window.open(page, target, extraParams);
}

/* Riproduzione video in modale, dato url */
playVideo = function (videourl) {

    // Se la modale e' assente la predispone
    if (!$("#videoLayer").length) {
        videoLayer = $("<div>").addClass("modal fade bs-example-modal-lg helpDialog").attr({ "id": "videoLayer" }).hide();
        videoLayerBody = $("<div>").addClass("modal-body");
        videoLayerClose = $("<button>").addClass("close").attr("data-dismiss", "modal").append("<span aria-hidden='true'><span class='sm'>×</span><span class='xs'>chiudi</span></span>").click(function () {
            videoLayerBody.empty();
        });
        videoLayer.append($("<div>").addClass("modal-dialog modal-lg").append($("<div>").addClass("modal-content").append(
            $("<div>").addClass("modal-header clearfix").append(videoLayerClose),
            videoLayerBody
        )))
        $("body").prepend(videoLayer);
    }
    // Inserisce il video
    videoLayerBody.empty().append($("<div>").attr("id", "videowrapper").addClass("video-wrapper"));
    getVideo({
        wrapper: "#videowrapper",
        videopath: videourl,
        autoplay: false,
        initialVolume: 0.8
    });

    videoLayer.modal("show");
}
setMaxHeightMenuDx = function () {
    var menuDxUl = $('.contImpDxDesk .dropdown .dropdown-menu .wrapperOverFlow');
    menuDxUl.each(function () {
        $(this).css({
            maxHeight: $(window).height() + 'px',
            overflow: 'auto'
        })
    })
}
//pulsante di spalla
var mainCont, spallaSwitch, footerel, spallaSwitchDefTop = 378;
$(function () {

    mainCont = $("#main");
    colSpalla = $("#spalla");
    spallaSwitch = $("#spallaswitch");
    footerel = $("#footer");
    setMaxHeightMenuDx();

    $("#spallaswitch").click(function () {
        // Inserisce lo switch

        var dimensione = $("#mainContent").width();
        var expanded = false;
        if ($(mainCont).hasClass("expanded")) {
            if ($('.divSinistra')[0]) {
                dimensione = (dimensione / 2) - 150;
            } else {
                dimensione = dimensione - 300;
            }

            if ($('.jqGridTOLTable').length > 0) {
                $('.jqGridTOLTable').jqGrid('setGridWidth', dimensione);
            }
        } else {
            if ($('.divSinistra')[0]) {

                dimensione = (dimensione / 2) + 150;
            } else {
                dimensione = dimensione + 300;
            }
            if ($('.jqGridTOLTable').length > 0) {
                $('.jqGridTOLTable').jqGrid('setGridWidth', dimensione);
            }
            expanded = true;
        }
        mainCont.toggleClass("expanded");

        $.ajax({
            type: "POST",
            url: getPathContext() + "/spallaExpanded.do",
            data: "spallaExpanded=" + expanded,
        });
        // Forza l'evento resize per le trasformazioni di JQGRID nelle tabelle
        //setTimeout(function(){$(window).trigger("resize");},300)
    });

    // Blocco scrolling dello switch (se esiste il footer)
    if (footerel.length > 0) {

        $(window).on("load scroll resize", function () {

            setMaxHeightMenuDx();
            var scrollLock = (footerel.offset().top - $(window).scrollTop()) - (spallaSwitchDefTop + 80);

            if (scrollLock < 0) {
                spallaSwitch.css("margin-top", scrollLock + "px");
            } else {
                spallaSwitch.css("margin-top", 0);
            }

        });
    }

    colSpalla.hover(
        // Hover
        function () {
            if (mainCont.hasClass("expanded")) {
                mainCont.addClass("spallahover");
            }
        }
        ,
        function () {
            mainCont.removeClass("spallahover");
        }
    );

});
