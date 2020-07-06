/* Dichiarazioni  globali */
var bd, scrollpx, positionStep = 50;


/* Inizializzazioni */
$(function () {
    /* inizializzazione oggetti "generici" */
    bd = $("body"),
    scrollpx = bd.scrollTop();
    initModali();
    initCarousel();
    initDropdown();
    initAccordion();
    initDatepicker();
    initTimepicker();
    initDataFilters();
    initTooltips();
    initTreeview();
    imgToSvg();
});

// INIT ELEMENTI

function initDropdown() {
  $('[data-toggle="dropdown"]').parent().on('click', function() {
    $(this).on('shown.bs.dropdown	', function() {
      var elem = $(this);
      var drop = elem.find('.dropdown-menu');
      setTimeout(function(){
        var posTop =  elem.offset().top;
        var posLeft =  ( (elem.offset().left - drop.width()) < drop.width() )
                          ? elem.offset().left + drop.width() + elem.width()
                          : elem.offset().left;
        $('body').append(drop.css({
          position: 'absolute',
          top: posTop,
          left: posLeft,
          transform: 'translate(-100%,0%)',
        })
        .addClass('shown')
        .detach());
      }, 100);

    }).on('hidden.bs.dropdown', function() {
      $(this).append($('body > .dropdown-menu').css({
        position: false,
        top: false,
        left: false,
      })
      .removeClass('shown')
      .detach());
    });
  });
}

function initAccordion() {
    // init opened
    $('.collapser [data-toggle="collapse"]').each(function () {
        var header = $(this);
        var body = header.next();
        var sense = (header.hasClass('collapsed')) ? 'hide' : 'show';
        header.toggleClass(sense);
        body.collapse(sense);
    });
    // onclick
    $('.collapser [data-toggle="collapse"]').on('click', function () {
        $(this).accordionCollapse();
    });
    // multi-toggle accordion (expand-all/collapse-all)
    $('[data-collapser]').on('click', function () {
        /*
        var header = $(this);
        var body = header.next();
        header.toggleClass('collapsed');
        body.collapse('toggle');
        */
        id = $(this).data('collapser');
        dir = $(this).data('collapser-dir');
        $accordion = $('#'+id);
        if( $accordion.length > 0 ) {
            $accordion.find('[data-toggle="collapse"]').each(function(){
                $(this).accordionCollapse({ direction: dir });
            });
        } else {
            console.error( 'Accordion con id #'+id+' non esiste' );
        }
    });
}

function initModali() {
    // Modale a due slide (toggle tra le slides)
    $('[data-toggle-modal-slider]').on('click', function () {
        $(this).closest('.modal-slider').toggleClass('is-second-slide-active');
    });
    $('.modal').on('hidden.bs.modal', function (e) {
        $(this).find('.modal-slider').removeClass('is-second-slide-active');
    });

    // Inizializzazione modali
    $('[data-modal-default]').on('click', function () {
        var index = $(this).data('modal-default');
        if (!index || index != '') {
            $('[data-modal="default"]').modal('show');
        }
    });
    $('[data-modal-help]').on('click', function () {
        var index = $(this).data('modal-help');
        if (!index || index != '') {
            $('[data-modal="help"]').modal('show');
        }
    });
    $('[data-modal-detail]').on('click', function () {
        var index = $(this).data('modal-detail');
        if (!index || index != '') {
            $('[data-modal="detail"]').modal('show');
        }
    });

    $('[data-modal-open]').on('click', function () {
        var index = $(this).data('modal-open');
        if (!index || index != '') {
            $('[data-modal="' + index + '"]').modal('show');
        }
    });
}

function initCarousel() {
    $('.carousel:not(.lazy)').carouselInit();
    $('.carousel.autopaging:not(.lazy)').carouselAutoPaging({ max: 5 });
}

function initCarouselLazy(owner, count) {
	if (!count)
		count = 5;
    $('.carousel.lazy', owner).carouselInit();
    $('.carousel.autopaging.lazy', owner).carouselAutoPaging({ max: count });
}

function initDatepicker() {
    $("[data-datepicker]").datepicker({
      showOn: "both"
    });
}

function initTimepicker() {
    $("[data-timepicker]").timepicker({
      defaultTime: false,
      showMeridian: false,
    });
}

function initDataFilters() {
    // FILTRI SELETTORI
    // Inizializzazione dell'accordion dei filtri
    $('[data-filter-button]').on('click', function () {
        var value = $(this).data('filter-button');
        $(this).find('.icon').toggleClass('icon-arrow_down').toggleClass('icon-arrow_up');
        $('[data-filter-form="' + value + '"]').slideToggle();
    });

    // Toggle filtro semplice/avanzato
    $('[data-toggle-filter-btn]').on('click', function () {
        var parent = $(this).closest('[data-toggle-filter-parent]');
        var key = $(this).data('toggle-filter-btn');
        parent.find('[data-toggle-filter-elem]:not([data-toggle-filter-elem="' + key + '"])').slideUp(400);
        parent.find('[data-toggle-filter-elem="' + key + '"]').delay(200).slideDown(400);
    });
}

function initTooltips() {
    $("[data-toggle=tooltip]").tooltip({
        trigger: 'click',
        container: $('#main'),
        html:true
    }).on('show.bs.tooltip', function (e) {
        $(".tooltip").tooltip('hide');
    });
}

function initTreeview() {
    $lis = $(".c-treeview li");
    $chs = $lis.find("> .checkbox [type='checkbox']");
    $(".c-treeview li .checkbox input").on('click',function(){
        $(this).treeviewChildren();
        $(this).treeviewPartial();
        $(this).treeviewCountTotal();
    });
}

function imgToSvg(img) {
    // SVG - Conversione delle immagini in SVG in pagina
    /*if (img == undefined) img = '[src$=".svg"]:not(.not-redraw)';
    $(img).each(function () {
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        // prende il suo title o quello del padre
        var imgTitle = $img.attr('title') ? $img.attr('title') : $img.parent().attr('title') ? $img.parent().attr('title') : false;
        var imgURL = $img.attr('src');
        if (imgURL !== undefined) {
            $.get(imgURL, function (data) {
                // Get the SVG tag, ignore the rest
                var $svg = $(data).find('svg');
                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' icon-svg');
                }
                // Add replaced image's title to the new SVG
                if (typeof imgTitle !== 'undefined') {
                    $svg = $svg.attr('title', imgTitle);
                    $svg.find('title').html(imgTitle);
                } else {
                    $svg.find('title').remove();
                }
                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');
                // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }
                // Replace image with new SVG
                $img.replaceWith($svg);
                $svg.addClass('is--redrawed');
            }, 'xml');
        }
    });
    */
}

(function ($) {

    $.fn.carouselInit = function () {
        // controlla se fare o no l'autoplay prima di fare l'init del carosello
        var opt;
        this.each(function () {
            // appende i bullets di default
            $(this).carouselBulletsPaging();
            if ($(this).hasClass('autoplay')) {
                opt = { rise: true, interval: 6000 };
            } else {
                opt = { rise: false, interval: false };
            }
            // se non è impostato un elemento con classe active, lo imposta al primo
            if ($(this).find('.carousel-item.active').length < 1) {
                $(this).find('.carousel-item:first-child').addClass('active');
            }
            if ($(this).find('.carousel-indicators li.active').length < 1) {
                $(this).find('.carousel-indicators li:first-child').addClass('active');
            }
            // distrugge il carosello se preesistente, poi reinizializza con le opzioni date.
            $(this).carousel('dispose').carousel(opt)
        })
    }
    $.fn.carouselAutoPaging = function (max) {
        // NOTE: per cambiare il numero massimo degli item visualizzati
        // come bullet usare: ELEMENTO.carouselAutoPaging( {max: NUMERO} )
        // di default è impostato a 5.
        var settings = $.extend({}, max);
        var max = (settings.max == undefined) ? 5 : parseInt(settings.max);
        // ciclo sui caroselli per i quali ho inizializzato il plugin.
        this.each(function () {
            // salvo il carosello corrente in nua variabile
            var carousel = $(this);
            // Massimo di elementi perchè il carosello passi dai bullet alle arrow (default 5)
            // Se il carosello corrente non possiede un ID univoco, ne assenga uno a tavolino.
            var rootName = 'carouselAutoPaging_';
            var assegnaId = carousel.attr('id') != undefined;
            for (var i = 0; i < 1000; i++) {
                if (assegnaId == true) { break; }
                if ($('#' + rootName + i).length <= 0) {
                    carousel.attr('id', rootName + i)
                    assegnaId = carousel.attr('id') != undefined;
                }
            }
            var elemId = carousel.attr('id');
            // conta gli item del carosello
            var num = carousel.find('.carousel-item').length;
            // ridisegna i paginatori a seconda del numero totale degli item
            carousel.carouselBulletsPaging();
            carousel.carouselArrowsPaging();
            if (num <= max) {
                carousel.find('.carousel-indicators').show();
                carousel.find('.carousel-control-prev, .carousel-control-next').hide();
            } else {
                carousel.find('.carousel-indicators').hide();
                carousel.find('.carousel-control-prev, .carousel-control-next').show();
            }
        })
        // reinizializza i caroselli per far partire i setting correttamente.
        this.carouselInit();
    }

    $.fn.carouselBulletsPaging = function () {
        // BULLET
        if (!$(this).hasClass('carousel--bullet')) {
            var elemId = $(this).attr('id');
            var num = $(this).find('.carousel-item').length;
            // elimina paginatori preesistenti per ridisegnarli
            $(this).find('.carousel-indicators').remove();
            // ridisegna gli elementi
            $(this).prepend("<ol class='carousel-indicators'></ol>");
            var bullets = $(this).find('.carousel-indicators')
            for (var i = 0; i < num; i++) {
                bullets.append("<li data-target='#" + elemId + "' data-slide-to='" + i + "'></li>")
            }
            // aggiunge classe din controllo
            $(this).addClass('carousel--bullet');
        }
    }

    $.fn.carouselArrowsPaging = function () {
        // ARROWS (prev e next)
        if (!$(this).hasClass('carousel--arrows')) {
            var elemId = $(this).attr('id');
            // elimina paginatori preesistenti per ridisegnarli
            $(this).find('.carousel-control-prev, carousel-control-next').remove();
            // ridisegna gli elementi
            $(this).prepend("<a class='carousel-control-prev' href='#" + elemId + "' role='button' data-slide='prev'>\
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>\
                <span class='sr-only'>Previous</span>\
            </a>");
            $(this).prepend("<a class='carousel-control-next' href='#" + elemId + "' role='button' data-slide='next'>\
                <span class='carousel-control-next-icon' aria-hidden='true'></span>\
                <span class='sr-only'>Next</span>\
            </a> ");
            // aggiunge classe din controllo
            $(this).addClass('carousel--arrows');
        }
    }

    $.fn.treeviewPartial = function () {
        $ul = this.closest('ul');
        if( $ul.length > 0 ) {
            $lis = $ul.find('li');
            $parentLi = $ul.closest('li');
            $parentCh = $parentLi.find('>.checkbox input');
            $syblingChecked = $lis.find('>.checkbox input:checked');
            if( $syblingChecked.length == $lis.length ) {
                $parentCh.removeClass('partial').prop("checked",true);
            } else if( $syblingChecked.length > 0 ) {
                $parentCh.addClass('partial').prop("checked",false);
            } else {
                $parentCh.removeClass('partial').prop("checked",false);
            }
            // propaga al padre lo stesso controllo
            $parentCh.treeviewPartial();
        }
    }

    $.fn.treeviewChildren = function () {
        $isChecked = this.prop("checked");
        $children = this.closest('li').find('ul input');
        if( $children.length > 0 ) {
            this.removeClass('partial');
            $children.removeClass('partial');
            $children.prop("checked",$isChecked);
        }
    }

    $.fn.treeviewCountTotal = function () {
        $parents = this.parents('ul');
        $anchestor = $( $parents[$parents.length-1] );
        $total = $anchestor.find('input:not(.node)').length;
        $actives = $anchestor.find('input:not(.node):checked').length;
        $wrapElem = this.closest('.treeview--wrapper');
        $wrapper = $wrapElem.length>0 ? $wrapElem : $('body');
        $countLabel = $wrapper.find('.count');
        if( $countLabel.length > 0 ) {
            $countLabel.find('.actives').text( $actives );
            $countLabel.find('.total').text( $total );
            // applica la classe di colore al container a seconda del numero
            this.closest('.treeview--item')
                .removeClass('is--full')
                .removeClass('is--partial')
                .addClass( $actives==0 ? 'is--empty' : ($actives===$total ? 'is--full' : 'is--partial') );
        }
    }

    $.fn.accordionCollapse = function( options ) {
        var header = this;
        var body = header.next();
        var opts = $.extend( {}, {direction: "toggle"} , options );
        var dir = opts.direction =='show'||opts.direction=='hide'?opts.direction:'toggle';
        if( ! header.hasClass('collapse-move') ) {
            switch (dir) {
                case "show": header.removeClass('collapsed');    break;
                case "hide": header.addClass('collapsed'); break;
                default:     header.toggleClass('collapsed');
            }
            body.collapse(dir);
            header.addClass('collapse-move');
            setTimeout(function(){
                header.removeClass('collapse-move');
            }, 500);
        }
    };


    // TOOLTIP CUSTOM CLASS
    var Tooltip = $.fn.tooltip.Constructor;
    //$.extend( Tooltip.Default, { customClass: '' });
    var _show = Tooltip.prototype.show;
    Tooltip.prototype.show = function () {
      _show.apply(this,Array.prototype.slice.apply(arguments));
      //var customClass = this.config.customClass
      var customClass = $(this.element).data('toggle-dimension');
      if ( customClass ) { $(this.getTipElement()).addClass('tooltip-'+customClass); }
    };

})(window.jQuery);
