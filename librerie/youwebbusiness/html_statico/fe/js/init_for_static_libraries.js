// FILE DA NON IMPORTARE. UTILE SOLO NELLE LIBRERIE

/* Dichiarazioni  globali */
var bd, scrollpx;

/* Inizializzazioni */
$(function(){
	bd = $("body"),
	scrollpx = bd.scrollTop();
	initMenu_static();
	initTabelle_static();
	initModali_static();
});

// FUNZIONI DI INIZIALIZZAZIONE ONREADY
function initMenu_static() {
    /* Toggling del menu */
    $("#menutoggle").click(function(){
        bd.toggleClass("menu-opened");
    });
    bd.click(function(e){
        if($(e.target).is("#menu")) {
            bd.toggleClass("menu-opened");
        }
    });
    /* Emulazione toggling voci menu */
    $("#menu nav .toggle").click(function(){
        /* chiude eventuali ul aperti */
		$("#menu nav li.opened").not($(this).parents("li")).removeClass("opened").find("ul").slideUp();
		/* apre ul corretto */
        $(this).parents("li").toggleClass("opened").find("ul").slideToggle();
	});
}

function initTabelle_static() {
	// Inizializzazione bootstrap tables -> ( dipende dal plugin bootstrap-table.js )
	$('[data-bootstrap-table]').bootstrapTableDefault();

	$(window).on("load resize",function(){
		$('.bootstrap-table').each(function(){
			$(this).tableStyle();
		});
	});
}

function initModali_static(){
	$('.modal').on('shown.bs.modal', function () {
		$('.bootstrap-table').each(function(){
			$(this).tableStyle();
			$(this).tableCreateMobileVr();
		});
	});
}

// PLUGINS

(function($) {
	// Controlla se la scrollbar è attiva o no su un elemento
	$.fn.hasScrollBarVert = function() {
		return this.get(0).scrollHeight > this.height();
	}

	$.fn.hasScrollBarHoriz = function() {
		return this.get(0).scrollWidth > this.width();
	}

	$.fn.hasScrollBar = function() {
		return (   this.hasScrollBarHoriz()
				|| this.hasScrollBarVert() );
	}

	$.fn.bootstrapTableDefault = function(tbdata) {
		// inizializzatore di default delle TABELLE
		$table = this; // popolo la variabile globale.
		tableData = tbdata; // popolo la variabile globale.
		if( typeof $table.bootstrapTable === 'function') {
			$table.bootstrapTable('destroy').bootstrapTable({
				data : tbdata,
				sortable: true,
				sortOrder: "desc",
				onPostBody: function(e,t) {
					$('.bootstrap-table').each(function(){
						defaultonPostBodyTB( $(this) )
					});
				},
			});
		}
	}

	$.fn.tableCreateMobileVr = function() {
		// Crea la classe sfumata per la scroll della tabella
		var table = this.find('[data-bootstrap-table]');
		tableAttr = table.data('table-mobilized-desktop');
		$mobileWrapper = $('[data-table-mobilized-mobile="'+tableAttr+'"]');
		if( $mobileWrapper.length > 0 ) {
			// salva le colonne in header in un array
			var cols = [];
			table.find('thead tr').each(function(){
				var row = '<div class="mobile-data-block">';
				$(this).find('th .th-inner').each(function(){
					let thValue
					// distingue, secondo la classe impostata nella head della colonna, che "tipo" dare all'elemento
					if( $(this).parents('th').hasClass('data-mobilized-hide') ) {
						thValue = false
					} else if( $(this).parents('th').hasClass('data-mobilized-title') ) {
						thValue = [ $(this).html(), 'title' ]
					} else if( $(this).parents('th').hasClass('data-mobilized-fullwidth') ) {
						thValue = [ $(this).html(), 'fullwidth' ]
					} else {
						thValue = [ $(this).html(), '' ]
					}
					cols.push( thValue );
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
				$mobileWrapper.append( obj );
			});
		}
	}

	$.fn.tableStyle = function() {
		// Aggiunge alle tabelle lo scroll
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
		// Unwrappa i contenuti delle celle
		this.find('span.output').each(function(){
			$(this).replaceWith($(this).html());
		});
	}

})(jQuery);


// forza trasformazione immagini
window.onload = setTimeout(function(){ imgToSvg() }, 100);
window.onload = setTimeout(function(){ imgToSvg() }, 1000);
window.onload = setTimeout(function(){ imgToSvg() }, 2000);
