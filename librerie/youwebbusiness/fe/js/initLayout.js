/* Dichiarazioni  globali */
var bd, scrollpx, positionStep = 50;


/* Inizializzazioni */
$(function () {
    /* inizializzazione oggetti "generici" */
    bd = $("body"),
    scrollpx = bd.scrollTop();
    initHeader();
    initTabs();
    initTabsFilters();
    initScroll();
});

$(window).resize(function () {
    initScroll();
});

// INIT ELEMENTI
function initHeader() {

    /* Scrolling header su desktop */
    if(!$("header").hasClass("librerie")) {

        $(window).on("ready load scroll resize", function () {
            var st = $(window).scrollTop();
            if (st > 70) {
                if (scrollpx < st) {
                    if (!bd.hasClass("scroll-down")) {
                        bd.removeClass("scroll-up").addClass("scroll-down");
                    }
                }
                else {
                    if (!bd.hasClass("scroll-up")) {
                        bd.removeClass("scroll-down").addClass("scroll-up");
                    }
                }
            } else {
                bd.removeClass("scroll-up scroll-down");
            }
            scrollpx = st;
        });
    }
}

function initTabs() {
    if ($('.nav-tabs').length > 0) {
        $('.nav-link.active').activeTab();
        $('.nav-link').on('click', function () {
            $(this).activeTab();
        });
    }
}

function initTabsFilters() {
    $(".nav-tabs.nav-tabs--filters label").click(function (e) {
        var $input = $(this).find("input");
        var $label = $(this);
        var $parent = $label.closest('.nav-tabs');
        if ($parent.hasClass("radio-button")) {
            //lcolautti (2020/02/27) modifica per selezione singola
            if ($input.prop("checked")) {
                //$label.addClass("active");
                $label.parents('.nav-item').siblings().each(function (index, item) {
                    item = $(item);

                    item.removeAttr("checked").prop('checked', false);
                    //$('label', item).removeClass('active');
                });
            } else {
                //non fare nulla perché già selezionato
            }
        } else {
            //lcolautti (2020/02/27) logica precedente (selezione multipla):
            if ($label.hasClass("all")) {
                if ($input.prop("checked")) {
                    $label.addClass("active");
                    $parent.find('label:not(.all)')
                        .removeClass("active")
                        .find('input');
                } else {
                    $label.removeClass("active");
                    $parent.find('label:not(.all) input')
                        .removeAttr("checked") // fallback per ie 
                        .prop('checked', false);
                }
            } else {
                if ($input.prop("checked")) {
                    $label.addClass("active");
                    $parent.find('label.all')
                        .removeClass("active")
                        .find('input')
                        .removeAttr("checked") // fallback per ie 
                        .prop('checked', false);
                } else {
                    $label.removeClass("active");
                }
            }
        }
    });
}

function initScroll() {
    // inizializza le freccine di scroll laterale
    var elem = '.clickScroll';
    var container = elem + '-container';
    var overflow = elem + '-overflow';
    if ($(elem).length > 0) {
        $(elem).each(function () {
          var e = $(this);
          var c = e.closest(container);
          var ew = e.width();
          var cw = c.width();
          if( window.document.documentMode ) { // IE
            if( ! c.parent().hasClass('clickScroll-IE') ) {
              c.wrap('<div class="clickScroll-IE"></div>');
            }
          }
          if (ew <= cw) {
            c.removeClass('scroll-active');
          } else {
            c.addClass('scroll-active');
          }
        });
    }
    // Click sulle freccine
    if ($(elem).length > 0) {
        $(container).on('click', '.clickScroll-arrow', function () {
            var p = $(this).closest(container).find(overflow);
            if ($(this).hasClass('left')) {
                p.scrollLeft(p.scrollLeft() - positionStep);
            } else {
                p.scrollLeft(p.scrollLeft() + positionStep);
            }
        });
    }
}

(function ($) {
    // centra la tab attiva
    $.fn.activeTab = function () {
        var elem = '.nav-tabs';
        var p = this.closest(elem)
        if ( this.length > 0 && !this.attr('disabled') && !p.hasClass('nav-tabs--filters') ) {
            var a = p.find('.nav-link.active').length == 1 ? p.find('.nav-link.active') : p.find('.nav-link:first-child') // fallback se ci sono active != 1
            if (a.length > 0 && p.length > 0) {
                //p.scrollLeft(this.position().left + p.scrollLeft()) // positione scroll
                a.removeClass('active'); // resetta active
                this.addClass('active'); // setta nuovo active
            }
        }
    }
})(jQuery);
