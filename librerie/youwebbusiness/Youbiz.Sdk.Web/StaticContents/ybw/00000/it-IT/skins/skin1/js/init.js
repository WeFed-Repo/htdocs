/* Dichiarazioni  globali */
var bd, scrollpx;

/* Inizializzazioni */
$(function(){
	/* inizializzazione oggetti "generici" */
	bd = $("body"),
	scrollpx = bd.scrollTop();

// HEADER

	/* Scrolling header su desktop */
	$(window).on("ready load scroll resize",function(){
		var st = $(window).scrollTop();
		if (st>70) {
			if(scrollpx<st) {
				if (!bd.hasClass("scroll-down")) bd.removeClass("scroll-up").addClass("scroll-down");
			}
			else{
				if (!bd.hasClass("scroll-up")) bd.removeClass("scroll-down").addClass("scroll-up");
			}
		}
		else {
			bd.removeClass("scroll-up scroll-down");
		}
		scrollpx = st;
	});

// MENU

	/* Toggling del menu */
	//$("#menutoggle").click(function(){
	//	bd.toggleClass("menu-opened");
	//});
	//$("body").click(function(e){
	//	if($(e.target).is("#menu")) bd.toggleClass("menu-opened");
	//});

	/* Emulazione toggling voci menu */
	//$("#menu nav .toggle").click(function(){
	//	/* chiude eventuali ul aperti */
	//	$("#menu nav li.opened").not($(this).parents("li")).removeClass("opened").find("ul").slideUp();
	//	var li = $(this).parents("li").toggleClass("opened");
	//	li.find("ul").slideToggle();
	//});

// TABELLE

	// Inizializzazione bootstrap tables
	// !!! Controllare sempre che in pagina sia incluso il plugin bootstrap-table.js
	/*table = $('[data-bootstrap-table]');
	table.bootstrapTable({
		sortable: true,
		sortOrder: "desc",
		onAll: function(e,t) {
			$('.bootstrap-table').each(function(){
				$(this).tableScrollStyle();
				$(this).tableCreateMobileVr();
			});
		},
	});

	$(window).on("load resize",function(){
		$('.bootstrap-table').each(function(){
			$(this).tableScrollStyle();
		});
	});*/

// MODALI

	// Modale a due slide (toggle tra le slides)
	$('[data-toggle-modal-slider]').on('click',function() {
		$(this).closest('.modal-slider').toggleClass('is-second-slide-active');
	});
	$('.modal').on('hidden.bs.modal', function (e) {
		$(this).find('.modal-slider').removeClass('is-second-slide-active');
	});
	$('.modal').on('shown.bs.modal', function () {
		/*$('.bootstrap-table').each(function(){
			$(this).tableScrollStyle();
			$(this).tableCreateMobileVr();
		});*/
	});

	// Inizializzazione modali
	$('[data-modal-default]').on('click',function(){
		var index = $(this).data('modal-default');
		if( !index || index!='' ){
			$('[data-modal="default"]').modal('show');
		}
	});
	$('[data-modal-help]').on('click',function(){
		var index = $(this).data('modal-help');
		if( !index || index!='' ){
			$('[data-modal="help"]').modal('show');
		}
	});
	$('[data-modal-detail]').on('click',function(){
		var index = $(this).data('modal-detail');
		if( !index || index!='' ){
			$('[data-modal="detail"]').modal('show');
		}
	});

// ACCORDION

  $('.collapser').each(function(){
		var header = $(this).find('[data-toggle="collapse"]');
		var body = header.next();
		var sense = ( header.hasClass('collapsed') ) ? 'hide' : 'show';
		header.toggleClass(sense);
		body.collapse(sense);
  });

  $('.collapser [data-toggle="collapse"]').on('click', function () {
		var header = $(this);
		var body = header.next();
		header.toggleClass('collapsed');
		body.collapse('toggle');
  });

// DATEPICKER

  $("[data-datepicker]").datepicker({ showOn: "both" });

  // CAROUSEL

  $('.carousel').carousel({ rise: false, interval: false })

// FILTRI

	// Inizializzazione dell'accordion dei filtri
    $('[data-filter-button]').on('click', function () {
		var value = $(this).data('filter-button');
		$(this).find('.icon').toggleClass('icon-arrow_down').toggleClass('icon-arrow_up');
		$('[data-filter-form="'+value+'"]').slideToggle();
	});

	// Toggle filtro semplice/avanzato
	$('[data-toggle-filter-btn]').on('click',function() {
		var parent = $(this).closest('[data-toggle-filter-parent]');
		var key = $(this).data('toggle-filter-btn');
		parent.find('[data-toggle-filter-elem]:not([data-toggle-filter-elem="'+key+'"])').slideUp(400);
		parent.find('[data-toggle-filter-elem="'+key+'"]').delay(200).slideDown(400);
	});

// TOOLTIPS

	$("[data-toggle=tooltip]").tooltip({
		trigger: 'click',
		container: $('#main')
	}).on('show.bs.tooltip', function (e) {
		$(".tooltip").tooltip('hide');
        });

    // SVG - Inizializzazione
    imgToSvg($(this));

});

// SVG - Conversione delle immagini in SVG in pagina
function imgToSvg(img = 'img[src$=".svg"]') {
    $(img).each(function () {
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
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
                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');
                // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }
                // Replace image with new SVG
                $img.replaceWith($svg);
            }, 'xml');
        }
    });
}

(function($) {
	// Controlla se la scrollbar è attiva o no su un elemento
	/*$.fn.hasScrollBar = function() {
		return ( this.get(0).scrollWidth > this.width() || this.get(0).scrollHeight > this.height() );
	}
	// Crea la classe sfumata per la scroll della tabella
	$.fn.tableCreateMobileVr = function() {
		var table = this.find('[data-bootstrap-table]');
		tableAttr = table.data('table-mobilized-desktop');
		mobileWrapper = $('[data-table-mobilized-mobile="'+tableAttr+'"]');
		if( mobileWrapper.length > 0 && ! this.hasClass('table-mobilized') ) {
			// impedisce di rientrare nel ciclo di questa tabella
			this.addClass('table-mobilized');
			// salva le colonne in header in un array
			var cols = [];
			table.find('thead tr').each(function(){
				var row = '<div class="mobile-data-block">';
				$(this).find('th .th-inner').each(function(){
					// distingue, secondo la classe impostata nella head della colonna, che "tipo" dare all'elemento
					if( $(this).parents('th').hasClass('data-mobilized-hide') ) {
						cols.push( false );
					} else if( $(this).parents('th').hasClass('data-mobilized-title') ) {
						cols.push( [ $(this).html(), 'title' ] );
					} else if( $(this).parents('th').hasClass('data-mobilized-fullwidth') ) {
						cols.push( [ $(this).html(), 'fullwidth' ] );
					} else {
						cols.push( [ $(this).html(), '' ] );
					}
				});
			});
			// cicla sulle rows
			table.find('tbody tr').each(function(){
				var obj = $('<div class="mobile-data-block"></div>');
				var i = 0; // indice per incremento in array colonne
				$(this).find('td').each(function(){
					var key = cols[i][0];
					var type = cols[i][1];
					if(key) {
						var val = $(this).wrapInner('<span class="output"></span>').find('.output').clone(true,true);
						var row = $('<div class="row"></div>');
						// a seconda del "tipo" dell'elemento, imposto un template di output differente
						if(type=='title') {
							var value = $('<h3></h3>');
							var contain = $('<div class="col"></div>');
							var valTitle = val.addClass('output-title');
							value.append(valTitle);
							contain.append( value );
							row.append( contain );
						} else if(type=='fullwidth') {
							var key = $('<div class="col-12 output-inline"><label class="control-label">'+key+'</label></div>');
							var value = $('<div class="col-12 output-inline left"></div>');
							value.append(val);
							row.append( key ).append( value );
						} else {
							var key = $('<div class="col-4 output-inline"><label class="control-label">'+key+'</label></div>');
							var value = $('<div class="col-8 text-right"></div>');
							value.append(val);
							row.append( key ).append( value );
						}
						obj.append( row );
					}
					i++;
				});
				mobileWrapper.append( obj );
			});
		}
	}
	// Aggiunge alle tabelle lo scroll
	$.fn.tableScrollStyle = function() {
		if( this.hasScrollBar() ) {
			if( ! this.parent().hasClass('table-hasScrollbar-wrapper')) {
				this.wrap('<div class="table-hasScrollbar-wrapper"></div>');
			}
		} else {
			this.removeClass('hasScrollbar');
			if( this.parent().hasClass('table-hasScrollbar-wrapper')) {
				this.unwrap('.table-hasScrollbar-wrapper');
			}
		}
	}*/
})(jQuery);

// forza trasformazione immagini
window.onload = setTimeout(function () { imgToSvg() }, 100);
window.onload = setTimeout(function () { imgToSvg() }, 1000);