// JavaScript Document
var columnDate = null;
$(document).ready(function(e) {
	
	$("body").click(function(event) {
		if (event.target.id == "tooltipHelp")  return;
		if($(event.target).closest('#tooltipHelp').length) return;
		
		removeAllHelp();
	});
	
	$(window).resize(function() {
		  removeAllHelp();
	});
	
	// setto la stessa altezza dei riquadri per ogni riga nelle pagine riepilogo
	// ed esito
	$(".section  > .row").each(function() {

		if ($(this).find(".col-xs-6").length == 2) {
			var altezza = 0;
			$(this).find(".boxDefault").each(function() {

				if ($(this).height() > altezza) {
					altezza = $(this).height();

				}
			});
			$(this).closest('.row').find('.boxDefault').height(altezza);
		}
	})

	defaultTextInit();
	initExpandableTables();
	removeSorting();
	cartaSelectionInit();

	$('.popup').dialog({
		resizable : true,
		width : 600,
		maxHeight : 600,
		modal : true,
		autoOpen : false
	});

	// ANIMAZIONE MENU
	$('li.mega-menu.dropdown').mouseenter(function() {
		$(this).addClass('hover');
	});
	$('li.mega-menu.dropdown').mouseleave(function() {
		$(this).removeClass('hover');
	});

	$('li.mega-menu.dropdown').click(function(e) {
		var that = $(this);

		if (!$('.dropdown-menu', that).hasClass('open')) {

			if ($('.dropdown-menu.open').length > 0) {
				closeSubmenu($('.dropdown-menu.open').parent());
				openSubmenu(that, 50);
			} else {
				openSubmenu(that);
			}
		} else {
			closeSubmenu(that);
		}
	});

	$('li.mega-menu.dropdown > a').click(function(e) {
		e.preventDefault();
	});

	$('ul.dropdown-menu').hover(function(e) {
	}, function(e) {
		$(this).parent().removeClass('hover');
	});

	// alert(screen.width + " X " + screen.height);
});

function removeSorting() {
	$('.del').each(function() {
		if (($(this).attr('class').indexOf('sorting_asc') > -1)) {
			$(this).removeClass('sorting_asc');
		}
		if (($(this).attr('class').indexOf('sorting') > -1)) {
			$(this).removeClass('sorting');
		}

		if (($(this).attr('class').indexOf('sorting_desc') > -1)) {
			$(this).removeClass('sorting_desc');
		}
	});
}

function openSubmenu(context, timeout) {
	if (timeout == null)
		timeout = 0;

	$('.dropdown-menu', context).delay(timeout).show().animate({
		top : [ "78px", "easeInQuad" ],
		opacity : 1
	}, 200, function() {
		$(this).addClass('open');
		context.addClass('sub-open');
	});
}

function closeSubmenu(context, callback) {
	context.removeClass('sub-open');
	$('.dropdown-menu', context).animate({
		top : [ "50px", "easeInQuad" ],
		opacity : 0
	}, 100, function() {
		$(this).removeClass('open');
		$(this).hide();
		context.removeClass('sub-open'); // action duplicated to avoid
											// persistence of menu arrow when
											// user quickly opens ad hovers a
											// submenu triggering "close" action
											// before "open" is complete
		if (callback) {
			callback;
		}
	});
}

// SELEZIONE RAPPORTO

function findTdValue(header, tr) {

	if ($("td[headers=" + header + "]", tr).length > 0) {
		var td = $("td[headers=" + header + "]", tr)[0];
		// textContent non supportato da ie8
		return td.textContent || td.innerText;
	}
}

function initContoSelezionato(selectedRow) {
	var contoSelezionato;
	var tipoRapporto = findTdValue("tipoRapporto", selectedRow);
	var numeroConto = findTdValue("ccRapporto", selectedRow);
	var filiale = findTdValue("filialeRapporto", selectedRow);
	var intestazione = findTdValue("intestazioneRapporto", selectedRow);
	var saldoDisponibile = findTdValue("saldoDisponibile", selectedRow);
	var affidamento = findTdValue("affidamento", selectedRow);
	var saldoContabile = findTdValue("saldoIstantaneo", selectedRow);
	var liquidita = findTdValue("liquiditaRapporto", selectedRow);
	var divisaDisponibile = findTdValue("divisaSaldoDisponibile", selectedRow);
	var divisaContabile = findTdValue("divisaSaldoContabile", selectedRow);
	var divisaAffidamento = findTdValue("divisaSaldoAffidamento", selectedRow);

	contoSelezionato = {
		"tipoRapporto" : tipoRapporto,
		"numeroConto" : numeroConto,
		"filiale" : filiale,
		"intestazione" : intestazione,
		"affidamento" : affidamento,
		"saldoContabile" : saldoContabile,
		"saldoDisponibile" : saldoDisponibile,
		"liquidita" : liquidita,
		"divisaDisponibile" : divisaDisponibile,
		"divisaContabile" : divisaContabile,
		"divisaAffidamento" : divisaAffidamento,
	};

	return contoSelezionato;

}

function popolaSelezioneCC(contoSelezionato, ctx) {
	var ccSel = $('.CCselezionato', ctx);
	if (typeof contoSelezionato.intestazione != 'undefined')
		$('#intestazione', ccSel).text(contoSelezionato.intestazione);

	if (typeof contoSelezionato.tipoRapporto != 'undefined')
		$('#conto', ccSel).text(contoSelezionato.tipoRapporto);

	if (typeof contoSelezionato.numeroConto != 'undefined')
		$('#numero', ccSel).text(contoSelezionato.numeroConto);

	if (typeof contoSelezionato.filiale != 'undefined')
		$('#agenzia', ccSel).text(contoSelezionato.filiale);

	if (typeof contoSelezionato.liquidita != 'undefined')
		$('#liquiditaRapporto', ccSel).text(contoSelezionato.liquidita);

	if (typeof contoSelezionato.saldoDisponibile != 'undefined')
		$('#disponibile strong', ccSel).text(contoSelezionato.saldoDisponibile);
	else
		$('#disponibile strong', ccSel).text('Non disponibile');

	if (typeof contoSelezionato.saldoContabile != 'undefined')
		$('#contabile strong', ccSel).text(contoSelezionato.saldoContabile);
	else
		$('#contabile strong', ccSel).text('Non disponibile');

	if (typeof contoSelezionato.affidamento != 'undefined')
		$('#affidamento strong', ccSel).text(contoSelezionato.affidamento);
	else
		$('#affidamento strong', ccSel).text('Non disponibile');

	var str = contoSelezionato.intestazione;

	if ($.trim(str).length > 26) {
		$('#labelIntestatario').addClass('hide');
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
	} else {
		if ($('#labelIntestatario').hasClass('hide')) {
			$('#labelIntestatario').removeClass('hide');
			$('#intestazione').removeClass('col-xs-10');
			$('#intestazione').addClass('col-xs-6');
		}
	}

	if ($('#disponibile strong').hasClass('negativo')) {
		if (parseInt(contoSelezionato.saldoDisponibile) >= 0)
			$('#disponibile strong').removeClass('negativo');
	} else if (parseInt(contoSelezionato.saldoDisponibile) < 0)
		$('#disponibile strong').addClass('negativo');

	if ($('#contabile strong').hasClass('negativo')) {
		if (parseInt(contoSelezionato.saldoContabile) >= 0)
			$('#contabile strong').removeClass('negativo');
	} else if (parseInt(contoSelezionato.saldoContabile) < 0)
		$('#contabile strong').addClass('negativo');

	if ($('#affidamento strong').hasClass('negativo')) {
		if (parseInt(contoSelezionato.affidamento) >= 0)
			$('#affidamento strong').removeClass('negativo');
	} else if (parseInt(contoSelezionato.affidamento) < 0)
		$('#affidamento strong').addClass('negativo');
	
	$('#intestazione').trigger("change");
}

function initTables() {

	// script inserito pervisualizzazione vincolo
	if ($('.tabSelezioneVincolo table').length > 0) {
		$('.tabSelezioneVincolo table').dataTable({
			"paging" : false,
			"ordering" : true,
			"info" : false,
			"pagingType" : "simple_numbers",
			"lengthMenu" : [ [ 8, 24, 32, -1 ], [ 8, 24, 32, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});
	}
}




function selezionaPaginaCorretta(table)
{
	/*PRENDO L'ELEMENTO SELEZIONATO*/
	var indiceSelezionato = -1;
	table.column( 0 ).data().each( function ( value, index ) 
	{
	    if (value.indexOf('checked="checked"')!=-1){
	        indiceSelezionato = index;
	    }      
	});
	if (indiceSelezionato!=-1)
	{
		/*CALCOLO LA PAGINA DA VISUALIZZARE*/
		var elementiPerPagina = table.page.info().length;
		var pagina = Math.floor(indiceSelezionato/elementiPerPagina);
		/*SELEZIONO LA PAGINA CORRETTA*/
		table.page(pagina).draw(false);
	}
}

function CCselectionInit(submitOnClick, search, pagination) {

	var contoSelezionato;
	if ($('.tabSelezioneCC table').length > 0) {

		$('.tabSelezioneCC').hide();

		$('.tabSelezioneCC table').dataTable({
			"paging" : pagination,
			"ordering" : true,
			"info" : false,
			"searching" : false,
			"pagingType" : "simple_numbers",
			"lengthMenu" : [ [ 8, 24, 32, -1 ], [ 8, 24, 32, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}

			}
		});

		/*PRESELEZIONO L'ELEMENTO GIA' SELEZIONATO (SE PRESENTE), SPOSTANDO LA VISUALIZZAZIONE ALLA PAGINA CORRETTA*/
		if (pagination)
		{
			selezionaPaginaCorretta($('.tabSelezioneCC table').DataTable());
		}
		
		$('.btnSelezioneCC').click(function() {
			var that = $(this);
			if (!that.hasClass('open')) {
				$('.tabSelezioneCC').slideDown(200);
				$(this).attr('aria-pressed', 'true');
			} else {
				$('.tabSelezioneCC').slideUp(300);
				$(this).attr('aria-pressed', 'false');
			}

			that.toggleClass('open');
		});

		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() {
			$(this).addClass('hover');
		});
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() {
			$(this).removeClass('hover');
		});

		// se non presente la selezione con submit al click
		if (!submitOnClick) {
			$('.tabSelezioneCC table tbody').on('click', 'tr', function() {
				var ctx = $(this).parentsUntil('.selezioneCC').parent();
				$('input[type="radio"]', $(this).parent()).removeAttr('checked');
				$('input[type="radio"]', this).attr("checked", "checked");
				contoSelezionato = initContoSelezionato(this);
				popolaSelezioneCC(contoSelezionato, ctx);
				$('.btnSelezioneCC', ctx).removeClass('open');
				$('.tabSelezioneCC', ctx).slideUp(300);
			});
		} else {
			// riga selezionata
			var tr = $("input[name='codContoCorrente']:checked").closest('tr');
			if ($('.tabSelezioneCC table tbody').children().size() == 1) {
				tr = $("input[name='codContoCorrente']").closest('tr');
			}
			// popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			popolaSelezioneCC(contoSelezionato);

			$('.tabSelezioneCC table tbody').on('click', 'tr', function() {
				$('input[type="radio"]', $(this).parent()).removeAttr('checked');
				$('input[type="radio"]', this).attr("checked", "checked");
				$('input[type="radio"]', this).closest("form").submit();
			});
		}
	}
}

function movimentiSelectionInit(jsOrder) {
	// cerco le colonne che hano date
	var columnOrdered = 0;
	var columnDefs = [];
	$('.tabSelezioneMovimenti table thead tr th').each(function(index, element) {
		if($(this).hasClass('date')) {
			columnDefs.push({type : 'date-it',  targets : index});
		} else if($(this).hasClass('image')) {
			columnDefs.push({type : 'alt-string',  targets : index});
		} else if($(this).hasClass('number')) {
			columnDefs.push({type: 'formatted-num', targets: index});
		} else if ($(element).html()=='&nbsp;' || $(element).html()=='') {
			if (columnOrdered==index) columnOrdered++;
			columnDefs.push({orderable : false,  targets : index});
		}
	});

	// script inserito per movimenti
	if ($('.tabSelezioneMovimenti table').length > 0) {
		$('.tabSelezioneMovimenti table').dataTable({
			"paging" : false,
			"ordering" : jsOrder,
			"info" : false,
			"order": [columnOrdered,"desc"],
			"searching" : false,
			"columnDefs" : columnDefs,
			"pagingType" : "simple_numbers",
			"pageLength" : 8,
			"lengthMenu" : [ [ 8, 16, 24, -1 ], [ 8, 16, 24, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});
	}
}

function cartaSelectionInit(paging) {

	var order = false;
	if ($('.selezioneCarte div').hasClass('order'))
		order = true;

	// script inserito per selezione carte
	if ($('.tabSelezioneCarte table').length > 0) {
		var pagination = false;
		if (typeof paging == 'boolean')
			pagination = paging;
		$('.tabSelezioneCarte table').dataTable({
			"paging" : pagination,
			"ordering" : order,
			"info" : false,
			"searching" : false,
			"pagingType" : "simple_numbers",
			"pageLength" : 8,
			"lengthMenu" : [ [ 8, 16, 24, -1 ], [ 8, 16, 24, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});

		/*PRESELEZIONO L'ELEMENTO GIA' SELEZIONATO (SE PRESENTE), SPOSTANDO LA VISUALIZZAZIONE ALLA PAGINA CORRETTA*/
		if (pagination)
		{
			selezionaPaginaCorretta($('.tabSelezioneCarte table').DataTable());
		}
		/*
		 * if($('.tabSelezioneCarte table thead th').hasClass('del')){
		 * if($('.tabSelezioneCarte table thead th.del').hasClass('sorting')){
		 * $('.tabSelezioneCarte table thead th.del').removeClass('sorting'); }
		 * if($('.tabSelezioneCarte table thead
		 * th.del').hasClass('sorting_asc')){ $('.tabSelezioneCarte table thead
		 * th.del').removeClass('sorting_asc'); } if($('.tabSelezioneCarte table
		 * thead th.del').hasClass('sorting_desc')){ $('.tabSelezioneCarte table
		 * thead th.del').removeClass('sorting_desc'); } }
		 */
	}
}

function rapportoSelectionInit(search, pagination) {

	var contoSelezionato;

	if ($('.tabSelezioneCC table').length > 0) {
		$('.tabSelezioneCC').hide();
		$('.tabSelezioneCC table').dataTable({
			"paging" : pagination,
			"ordering" : true,
			"info" : false,
			"searching" : search,
			"pagingType" : "simple_numbers",
			"lengthMenu" : [ [ 8, 24, 32, -1 ], [ 8, 24, 32, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});

		/*PRESELEZIONO L'ELEMENTO GIA' SELEZIONATO (SE PRESENTE), SPOSTANDO LA VISUALIZZAZIONE ALLA PAGINA CORRETTA*/
		if (pagination)
		{
			selezionaPaginaCorretta($('.tabSelezioneCC table').DataTable());
		}

		$('.btnSelezioneCC').click(function() {
			var that = $(this);
			if (!that.hasClass('open'))
				$('.tabSelezioneCC').slideDown(200);
			else
				$('.tabSelezioneCC').slideUp(300);

			that.toggleClass('open');
		});

		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() {
			$(this).addClass('hover');
		});
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() {
			$(this).removeClass('hover');
		});

		$('.tabSelezioneCC table tbody').on('click', 'tr', function() {

			$('#divAll').hide();
			$('#divDati').show();

			var ctx = $(this).parentsUntil('.selezioneCC').parent();
			$('input[type="radio"]', $(this).parent()).removeAttr('checked');
			$('input[type="radio"]', this).attr("checked", "checked");
			contoSelezionato = initContoSelezionato(this);
			popolaSelezioneCC(contoSelezionato, ctx);

			if ($('input[type="radio"]', this).val() == "all") {
				$('#divAll').show();
				$('#divDati').hide();
			}

			$('.btnSelezioneCC', ctx).removeClass('open');
			$('.tabSelezioneCC', ctx).slideUp(300);

		});
	}
	
}

// TABELLE ESPANDIBILI

function initExpandableTables() {

	// $('table.expandable').on('mouseenter', 'tr', function() { if
	// ($(this).parent().parent().hasClass('expandable')) {
	// $(this).addClass('hover'); } });
	// $('table.expandable').on('mouseleave', 'tr', function() { if
	// ($(this).parent().parent().hasClass('expandable')) {
	// $(this).removeClass('hover'); } });

	$('table.expandable tr').on(
			'click',
			'a.table-expand-collapse',
			function(e) {
				var action = $(this);

				var that = $(this).parentsUntil('tr').parent().next();

				if (!that.hasClass('expanded')) {
					that.fadeIn(200).addClass('expanded');
				} else {
					that.fadeOut(200).removeClass('expanded');
				}

				action.fadeOut(100, function() {
					$(this).toggleClass('expand').toggleClass('collapse')
							.fadeIn(100);
				});
				e.stopPropagation();
			});

}

// INIT VISUALIZZAZIONE E ALLINEAMENTI CAMPI IMPORTI

function initLabelImporti() {
	var ctx = $('.bs-example');

	var maxWidth = 0;

	ctx.each(function(index, element) {
		$('.importo', this).each(function(index, element) {
			var w = $(this).width()
			if (w > maxWidth)
				maxWidth = w;
		});

		$('.importo', this).width(maxWidth);
	});

}

function defaultTextInit() {
	// Default textbox init
	$('input[data-default-text]').each(function(index, element) {
		var that = $(this);
		var defaultText = that.data('default-text');
		if (that.val() == '') {
			that.val(defaultText);
			$(this).addClass('default-text');
		}

		that.focusin(function(e) {
			if ($(this).val().toLowerCase() == $(this).data('default-text')) {
				$(this).val('');
				$(this).removeClass('default-text');
			}
		});

		that.focusout(function(e) {
			if ($(this).val() == '') {
				$(this).val($(this).data('default-text'));
				$(this).addClass('default-text');
			}
		});

	});

	$('textarea[data-default-text]').each(function(index, element) {
		var that = $(this);
		var defaultText = that.data('default-text');
		if (that.val() == '') {
			that.val(defaultText);
			$(this).addClass('default-text');
		}

		that.focusin(function(e) {
			if ($(this).val().toLowerCase() == $(this).data('default-text')) {
				$(this).val('');
				$(this).removeClass('default-text');
			}
		});

		that.focusout(function(e) {
			if ($(this).val() == '') {
				$(this).val($(this).data('default-text'));
				$(this).addClass('default-text');
			}
		});

	});

}
window.showTooltip=false;
function ajaxHomepageComplete() {
	if(showTooltip != undefined && showTooltip) {
		showAllHelp();
	} 
}

function showAllHelp(){
	if($("#tooltipHelp").hasClass('popover_active')){
//	 	$("div[id^='popover']").each(function(){
//			$(this).prev().popover('destroy');
//		}); 
//		$('#tooltipHelp').removeClass("popover_active");
//		
		removeAllHelp();
		return false;
	}
	$('#tooltipHelp').addClass("popover_active");
	$("#tooltip_popover > div").each(function(){
		parsePopover($(this).attr('id'));
	})
	
}

function removeAllHelp() {
	if($("#tooltipHelp").hasClass('popover_active')){
		$("a[data-tag-title]").each(function(){
			$(this).attr('title', $(this).attr('data-tag-title'));
		});
		$("div[id^='popover']").each(function(){
			$(this).prev().popover('destroy');
		}); 
		$('#tooltipHelp').removeClass("popover_active");
	}
}

function parsePopover(help_id){
	if('undefined' != help_id){
		var id = help_id.substr(5);
		var selidArray = $("[id='"+id+"']:visible");
		if($(selidArray).length === 0){
			return false;
		}
		
		var help_id = "#"+help_id;
		var title = $(help_id).find('.popover-title').text();
		var content = $(help_id).find('.popover-content').html();
		var placement = $(help_id).attr('class');
		var selid = selidArray[0];
		
		var original_title = "";
		if ($(selid).is('a')) {
			original_title = $(selid).attr("title");
		}
		
		$(selid).attr("data-toggle", "popover")
				.attr("title", title)
				.attr("data-html", "true")
				.attr("data-content", content)
				.attr("data-placement", placement)
				.attr("container", "body")
				.attr("data-animation", "fade")
				.attr("data-tag-title", original_title);
		
		$(".popover-content" ).addClass("clearfix");
		$(selid).popover("show");
	}
}
