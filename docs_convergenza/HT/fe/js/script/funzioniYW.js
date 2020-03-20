/**
 * fix per risolvere bug android 4 sulla visualizzazione delle select. Presa da bootstrap.
 * http://getbootstrap.com/getting-started/#support-android-stock-browser
 * On <select> elements, the Android stock browser will not display the side controls if there is a border-radius and/or border applied. 
 */
$(function () {
	  var nua = navigator.userAgent;
	  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
	  if (isAndroid) {
	    $('select.form-control').removeClass('form-control').css('width', '100%');
	  }
	})

/*
 * JS:funzioni.js
 */
// JavaScript Document
var columnDate = null;
$(document).ready(function(e) {
	
	var altezza_sidebar = $('#sidebar .list-group').height();
	$("#sidebar").css('min-height', altezza_sidebar);
	
	fixScroll();
	//prtVal();
	
	$("body").click(function(event) {
		if (event.target.id == "tooltipHelp")  return;
		if($(event.target).closest('#tooltipHelp').length) return;
		
		removeAllHelp();
	});
	
	$(window).resize(function () {
		removeAllHelp(); // rimuovi tutti gli help
	});
	
	/* menu off-canvas */
	$('[data-toggle="offcanvas"]').click(function () {
		$('.row-offcanvas').toggleClass('active')
	});

	/* inizializzazione calendario javascript */
	$.datepicker.regional['it'] = {
	          closeText: 'Chiudi',
	          prevText: '&#x3c;Prec',
	          nextText: 'Succ&#x3e;',
	          currentText: 'Oggi',
	          monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
	          monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'],
	          dayNames: ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
	          dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
	          dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
	          dateFormat: 'dd/mm/yy',
	          firstDay: 1,
	          isRTL: false};
	$.datepicker.setDefaults($.datepicker.regional['it']); 
	$.datepicker.setDefaults({ 
		showOn: 'both', 
		buttonImage: '/HT/fe/img/calendar.png', 
		buttonText: 'Calendario',
		buttonImageOnly: true,
		changeMonth: true,
		changeYear: true,
		duration: 0,
		onChangeMonthYear: function(year, month, inst) {
//			$(this).val('');
		},
	    beforeShow: function(input, inst) {
	        if (isMobile()) { /* input read only per non aprire tastierta mobile */
	        	$(input).prop('readonly', 'readonly');
		        setTimeout(function () {
	    	        inst.dpDiv.css({
	        	        left: 10
	            	});
	        	}, 0);
        	}
    	},
    	onClose: function() { /* input read only riportato */
    		if (isMobile()) $(this).prop('readonly', false);
    	}
   
	});
	
	/* inizializzazione link da codificare */
	$('a.encodeUrl').click(function() {
		return encodeUrl(this);
	});
	
	/* inizializzazione ordinamento tabelle */
	loadTableOrd();
	
	/* setto la stessa altezza dei riquadri per ogni riga nelle pagine riepilogo ed esito */
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

	/* animazione menu */
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

	$('ul.dropdown-menu').hover(function(e) { }, function(e) {
		$(this).parent().removeClass('hover');
	});

	
	/* tastiera mobile */
	if (isMobile()) {
		$(":input[id='importo']").not(':hidden').prop('type', 'tel');
		$(":input[id='importoInt']").prop('type', 'tel');
		$(":input[id='decimali']").prop('type', 'tel');
		$(":input[id='importoIntero']").prop('type', 'tel');
		$(":input[id='importoDec']").prop('type', 'tel');
		$(":input[id='importoDecimale']").prop('type', 'tel');
		
		$(":input[id='prefTelefono']").prop('type', 'tel');
		$(":input[id='numTelefono']").prop('type', 'tel');
		
		$(":input[id='codiceOTP']").prop('type', 'tel');
		$(":input[id='codiceOTPConSMS']").prop('type', 'tel');
		$(":input[id='OTP']").prop('type', 'tel');
	}

	if (isMobile()) {
		$(document).on('click focus', 'input[readonly]', function () { // Safari
			this.blur();
		});
	}
});


function fixScroll() {
	/* enable-momentum per safari ios */
	var iOS = /(iPad|iPhone|iPod)/g.test( navigator.userAgent );
	if (iOS) {
		$("html").addClass('enable-momentum');
		$("body").addClass('enable-momentum');
	}
}

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

intestazioneRapporto = function(str) {
	if ($.trim(str).length > 26) {
		$('#labelIntestatario').addClass('hide');
		$('#intestazione').removeClass('col-xs-6').addClass('col-xs-12 alignLeft');
	} else {
		if ($('#labelIntestatario').hasClass('hide')) {
			$('#labelIntestatario').removeClass('hide');
			$('#intestazione').removeClass('col-xs-12 alignLeft').addClass('col-xs-6');
		}
	}	
}

function popolaSelezioneCC(contoSelezionato, ctx, carte) {
	var tipologiaRapportoSelezionato = contoSelezionato.tipoRapporto;
	if (tipologiaRapportoSelezionato === 'Tutti')
	{
		$('#tuttiContiSelezionati').show();
		$('#singoloContoSelezionato').hide();
	}
	else
	{
		$('#tuttiContiSelezionati').hide();
		$('#singoloContoSelezionato').show();
	}
	
	var ccSel = $('.CCselezionato', ctx);
	if (typeof contoSelezionato.intestazione != 'undefined')
		$('#intestazione', ccSel).text(contoSelezionato.intestazione);

	if (typeof contoSelezionato.tipoRapporto != 'undefined'){
		if(typeof contoSelezionato.numeroConto != 'undefined' && carte){
			$('#conto', ccSel).text(contoSelezionato.tipoRapporto+" "+contoSelezionato.numeroConto);
		}else{
			$('#conto', ccSel).text(contoSelezionato.tipoRapporto);	
		}
	}
	if (typeof contoSelezionato.numeroConto != 'undefined'){
		if(carte){
			$('#numero', ccSel).text(contoSelezionato.tipoRapporto+" "+contoSelezionato.numeroConto);
		}else{
			$('#numero', ccSel).text(contoSelezionato.numeroConto);	
		}
	}
	if (typeof contoSelezionato.filiale != 'undefined')
		$('#agenzia', ccSel).text(contoSelezionato.filiale);

	if (typeof contoSelezionato.liquidita != 'undefined')
		$('#liquiditaRapporto', ccSel).text(contoSelezionato.liquidita);

	if (typeof contoSelezionato.saldoDisponibile != 'undefined')
	{
		var value = contoSelezionato.saldoDisponibile;
		//Se il valore termina per un numero (non c'� gi� la divisa agganciata) allora aggiungo la divisa
		if (/.*\d$/.test(value.trim()))
			value = value + ' ' + contoSelezionato.divisaDisponibile;
		$('#disponibile strong', ccSel).text(value);
	}
	else
		$('#disponibile strong', ccSel).text('Non disponibile');

	if (typeof contoSelezionato.saldoContabile != 'undefined')
	{
		var value = contoSelezionato.saldoContabile;
		if (/.*\d$/.test(value.trim()))
			value = value + ' ' + contoSelezionato.divisaContabile;
		$('#contabile strong', ccSel).text(value);
	}
	else
		$('#contabile strong', ccSel).text('Non disponibile');

	if (typeof contoSelezionato.affidamento != 'undefined')
	{
		var value = contoSelezionato.affidamento;
		if (/.*\d$/.test(value.trim()))
			value = value + ' ' + contoSelezionato.divisaAffidamento;
		$('#affidamento strong', ccSel).text(value);
	}
	else
		$('#affidamento strong', ccSel).text('Non disponibile');

	var str = contoSelezionato.intestazione;
	intestazioneRapporto(str);

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

function selezionaPaginaCorretta(table) {
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

function CCselectionInit(submitOnClick, search, pagination, selettoreCarte) {

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
				popolaSelezioneCC(contoSelezionato, ctx, selettoreCarte);
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
			popolaSelezioneCC(contoSelezionato, '', selettoreCarte);

			$('.tabSelezioneCC table tbody').on('click', 'tr', function() {
				$('input[type="radio"]', $(this).parent()).removeAttr('checked');
				$('input[type="radio"]', this).attr("checked", "checked");
				$('input[type="radio"]', this).closest("form").submit();
			});
		}
	}
}

function movimentiSelectionInit(jsOrder) {
	var specOptions = {
		"autoWidth": true,
		"ordering" : jsOrder,
	};
	
	movimentiSelectionInitWithOptions(specOptions);
}

function movimentiSelectionInitWithOptions(specOptions) {
	var selTable = ".tabSelezioneMovimenti table";
	var orderBy = "desc";
	
	if (specOptions.idTable) {
		selTable = "#" + specOptions.idTable;
	}
	if (specOptions.orderBy) {
		orderBy = specOptions.orderBy;
	}
	
	if ($(selTable).length > 0) {
		$.extend( $.fn.dataTable.defaults, {
		 "paging" : false,
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
		} );
	
		// cerco le colonne che hano date
		var columnOrdered = 0;
		var columnDefs = [];
	
		$(selTable + ' thead tr th').each(function(index, element) {
			if($(this).hasClass('date')) {
				columnDefs.push({type : 'date-it',  targets : index});
			} else if($(this).hasClass('image')) {
				columnDefs.push({type : 'alt-string',  targets : index});
			} else if($(this).hasClass('number')) {
				columnDefs.push({type: 'formatted-num', targets: index});
			} else if($(this).hasClass('checkbox') || $(element).html()=='&nbsp;' || $(element).html()=='') {
				if (columnOrdered==index) columnOrdered++;
				columnDefs.push({orderable : false, targets : index});
			}
		});
		console.log(specOptions.orderBy);
		console.log(orderBy);
		$(selTable).dataTable({
			"order": [columnOrdered,orderBy],
			"autoWidth": specOptions.autoWidth,
			"ordering" : specOptions.ordering,
			"columnDefs" : columnDefs,
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
window.showTooltip=true;
function ajaxHomepageComplete() {
	if(showTooltip != undefined && showTooltip) {
		showAllHelp();
	} 
}

$(function() {
	// mouseover help
	$("#tooltip_popover > div").each(function(){
		if ($(this).attr("data-auto")=="false") {
			var id = $(this).attr("id").substr(5);
			var element = $("#"+id);
			if (element!=undefined) {
				parsePopover($(this).attr('id'));

			}
		}
	})
});

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
		if ($(this).attr("data-auto")=="false") {
			// nothing to do
		}
		else {
			parsePopover($(this).attr('id'));
		}
	})
}

function removeAllHelp() {
	if($("#tooltipHelp").hasClass('popover_active')){
		$("a[data-tag-title]").each(function(){
			$(this).attr('title', $(this).attr('data-tag-title'));
		});
		$("[data-toggle='popover']").each(function(){
			$(this).popover('destroy');
		}); 
//		$("div[id^='popover']").each(function(){
//			$(this).prev().popover('destroy');
//		}); 
		$('#tooltipHelp').removeClass("popover_active");
	}
}

function parsePopover(help_id){
	if('undefined' != help_id){
		var id = help_id.substr(5);
		var selidArray = $("[id='"+id+"']");
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
		
		selidArray.each(function (i, e) {
			var contentEl = $(e).html();
			var a = $('<a tabindex="0" role="button" class="activeTooltip"></a>');
			$(e).html(a);
			a.attr("data-toggle", "popover")
			.attr("data-trigger", "focus")
			.attr("title", "")
			.attr("data-html", "true")
			.attr("data-content", content)
			.attr("data-placement", placement)
			.attr("container", "body")
			.attr("data-animation", "fade")
			.attr("data-tag-title", original_title);
			a.html(contentEl);
			
			$(a).popover({container: 'body', html: true});
			$(a).popover();
		});
		
/*		selidArray.each(function (i, e) {
			$(e).attr("data-toggle", "popover")
			.attr("data-trigger", "focus")
			.attr("title", "")
			.attr("data-html", "true")
			.attr("data-content", content)
			.attr("data-placement", placement)
			.attr("container", "body")
			.attr("data-animation", "fade")
			.attr("data-tag-title", original_title);
			
			$(e).popover({container: 'body', html: true});
			$(e).popover();
		});*/
		
		$(".popover-content" ).addClass("clearfix");
	}
}




/*
 * JS:funzioniHT.js
 */
//$(document).ready(function() {
//	/** inizializzazione calendario javascript */
//	$.datepicker.setDefaults({ 
//		showOn: 'both', 
//		buttonImage: getPathImages()+'calendar.jpg', 
//		buttonText: 'Calendario',
//		buttonImageOnly: true,
//		changeMonth: true,
//		changeYear: true,
//		duration: 0,
//		onChangeMonthYear: function(year, month, inst) {
//			var data = $(this).datepicker("getDate");
//			if(data) {
//				data.setFullYear(year);
//				data.setMonth(month - 1);
//				$(this).datepicker("setDate", data);
//			}
//		},
//	    beforeShow: function(input, inst) {
//	        if (isMobile()) {
//	        	$(input).prop('readonly', 'readonly');
//		        setTimeout(function () {
//	    	        inst.dpDiv.css({
//	        	        left: 10
//	            	});
//	        	}, 0);
//        	}
//    	},
//    	onClose: function() {
//    		if (isMobile()) $(this).prop('readonly', false);
//    	}
//	});
//	
//	/** inizializzazione link da codificare */
//	$('a.encodeUrl').click(function() {
//		return encodeUrl(this);
//	});
//	
//	/** inizializzazione ordinamento tabelle */
//	loadTableOrd();
//
//	if (isMobile()) {
//		$(document).on('click focus', 'input[readonly]', function () {
//			this.blur();
//		});
//		
//
//
//	}
//});


/**
 * Fa il post di un link (al posto di un get) o di un url 
 * @param a: oggetto link (a href) o string url
 */
function encodeUrl(a) {
	var url = '';
	if(a.nodeType){
	if($(a).is('a')) {
		url = $(a).attr('href');
		
		/* ie fix */
		var host = a.host;
		if(host != '' && url.indexOf(host) >= 0) {
			url = url.substr(url.indexOf(host) + host.length);
		}
	} else {
		url = a;
	}
	} else {
		url = a;
	}
	
	if(url.indexOf(getPathContext()) == -1 && url.indexOf('/') == 0) {
		url = getPathContext() + url;
	}
	
	var urlWithoutParams = url;
	if (url.indexOf('?')!=-1) {
		var urlWithoutParams = url.substring(0, url.indexOf('?'));
	}
	var frmSubmit = $('<form></form>').attr('action', urlWithoutParams).attr('method', 'post').appendTo('body').hide();
	
	if(url.indexOf('?') != -1) {
		url = url.replace(/&amp;/g, '&');
		var params = url.substring(url.indexOf('?')+1).split('&');
		for(par in params){
			var value = params[par].split('=');
			
			$('<input />').attr('type', 'hidden')
				.attr('name', value[0])
				.attr('value', value[1])
				.appendTo(frmSubmit);
		}
	}
	frmSubmit.submit();
	return false;
}

/** Funzione per implementare l'ordinamento lato client */
function loadTableOrd() {
  
	$(".OUTLetFac table").each(function(i){
		loadOrd(this);
	});
}

function loadOrd(i) {
	if($(i).parents('.OUT2ColDiff').size() > 0) {
  		//no ordinamento su tabelle riepilogo
		return;
	}
	
  	var th = $(i).find("th:first");
  	if (th.length == 0) {
  		return;
  	}
  		
  	//una tabella non pu� essere ordinabile se contenuta in un div con classe nosort
  	var nosort = $(i).parents("div").hasClass("nosort");
  	if(nosort){
  	  return;
  	}
  	
  	//Cerco le tabelle con header con colspan 2 e tabelle con classe server
  	if($(i).find("th[rowspan = 2]").length > 0 || $(i).hasClass("server")){
  	   return;
  	}
  	
  	$.tablesorter.addWidget({ 
  	    // give the widget a id 
  	    id: "sortIcons", 
  	    // format is called when the on init and when a sorting has finished 
  	    format: function(table) {
            $("thead th",table).each(function() {
            	$(this).children('span.s-ico').remove();
                if($(this).hasClass('headerSortUp')) {
                	$(this).append('<span class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span>');
                } else if($(this).hasClass('headerSortDown')) {
                	$(this).append('<span class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr ui-state-disabled"></span><span class="ui-grid-ico-sort ui-icon-desc ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span>');
                } else {
                	$(this).append('<span class="s-ico"></span>');
                }
            });
  	    } 
  	}); 
  	
   	if(jQuery.trim($(th).html()) == '&nbsp;' || jQuery.trim($(th).html())==''){
   	    $(i).tablesorter({widgets: ['zebra', 'sortIcons'],widgetZebra: {css: ["pari",""]},decimal:',',dateFormat:'dd/mm/yyyy',headers: { 0: { sorter: false}},debug:false});
   	}else{
   	   $(i).tablesorter({widgets: ['zebra', 'sortIcons'],widgetZebra: {css: ["pari",""]},decimal:',',dateFormat:'dd/mm/yyyy',debug:false});
   	}
}

function setCookie(risoluzione) {
	var expiredDate = new Date();
	expiredDate.setFullYear(expiredDate.getFullYear()+5);
	var cookie = "RisoluzioneSchermo="+risoluzione+"; expires="+expiredDate.toGMTString()+"; path="+escape('/')+";";
	document.cookie=cookie;
	window.location.reload();
    return false;
}

function exportExcel(strForm) {
	var url=document.location.pathname.replace('.do','.xls')+document.location.search;
	var params = 'scrollbars=1,menubar=1,resizable=1,width=400,height=200';
	var parameters=readForm(strForm);
	window.open(url+((url.indexOf("?")>0)? "&" : "?")+$.param(parameters),'exportXls',params);
}

function exportPdf(strForm) {
	var url=document.location.pathname.replace('.do','.pdf')+document.location.search;
	var parameters=readForm(strForm);
	window.open(url+((url.indexOf("?")>0)? "&" : "?")+$.param(parameters));
}

//Funzione per leggere i campi di una form
function readForm(element){
	var parameters = [];
	var inputs = $('#'+element).find('input');
	var selects = $('#'+element).find('select');
	var text = $('#'+element).find('textarea');

	for(i=0;i<inputs.size();i++){
		var input = inputs[i];
		if(($(input).attr("type") == "radio" || $(input).attr("type") == "checkbox") && input.checked){
			var name = input.name;
			var value = input.value;
			parameters.push({name:name,value:value});					
		}
		if($(input).attr("type") == "text" || $(input).attr("type") == "hidden"){
		  	var name = input.name;
			var value = input.value;
			parameters.push({name:name,value:value});	
		}
	}
	
	for(i=0;i<text.size();i++){
		var txt = text[i];
		var name = txt.name;
		var value = txt.value;
		parameters.push({name:name,value:value});		
	}
	
	for(i=0;i<selects.size();i++){
		var select = selects[i];
		var name = select.name;
		var value = select.options[select.selectedIndex].value;
		parameters.push({name:name,value:value});
	}
	return parameters;
}

//  *********************************  DATEPICKER  **************************************
function noWeekendsOrHolidays(date) {
	var noWeekend = $.datepicker.noWeekends(date);
	if (noWeekend[0]) {
		var natDays = [
		               [1, 1], [6, 1],[25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]
		                                                                                                       ];
			                                                                                                       
		var today = new Date();
		var year = today.getFullYear();
		var easter = new Date(calcoloPasqua(year));
		if(today > easter){
			easter = new Date(calcoloPasqua(year + 1));
			natDays.push([easter.getDate(), easter.getMonth()+ 1]);
		}else{
			natDays.push([easter.getDate(), easter.getMonth()+ 1]);
		}
		
		for (i = 0; i < natDays.length; i++) {
			if (date.getMonth() == natDays[i][1] - 1 
					&& date.getDate() == natDays[i][0]) {
				return [false, ''];
			}
		}
		return [true, ''];
	} else {
			return noWeekend;
	}
	
	
}

function calcoloPasqua(year){
	var a = year % 19;
	var b = Math.floor(year/100);
	var c = year % 100;
	var d = Math.floor(b/4);
	var e = b % 4;
	var f = Math.floor((b+8) / 25);
	var g = Math.floor((b-f+1) / 3);
	var h = (19*a + b - d - g + 15) % 30;
	var i = Math.floor(c/4);
	var j = c % 4;
	var k = (32 + 2*e + 2*i - h - j) % 7;
	var m = Math.floor((a + 11*h + 22*k) / 451);
	var month = Math.floor((h + k - 7*m + 114) / 31)-1;
	var day = ((h + k - 7*m +114) % 31) + 1;
	var easter = new Date(year,month,day);
	var dayOffset = 1; // 
	var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
	easter.setTime(easter.getTime() + millisecondOffset); 

	return easter.getTime();
}

//  *********************************  POPUP DIALOG AJAX  *******************************
$.fn.ajaxDialog = function (idDivDialog, url, customDialogOptions, autoOpen) {

	var divDialog = $('<div />').attr('id', idDivDialog).appendTo('body');			
	var	defaultDialogOptions = {
			autoOpen: false,
			width: 630,
			minHeight: 150,
			bgiframe: true,
			modal: true,
			title: 'Popup',
			position: { my: "center", at: "center", of: window},
			resizeStop: function(event, ui) {
				divDialog.css('max-height', ($(window).height() - 80) + 'px');
			}
		};
	var options = $.extend({},defaultDialogOptions,customDialogOptions);

	if(autoOpen === true) {
		options.close = function(event,ui){
			divDialog.remove();
		}
	}
	
	divDialog.css('max-height', ($(window).height() - 80) + 'px');
	divDialog.dialog(options);
	
	var openDialog = function() {
		var loadingImg = $('<img />').attr('src', getPathImages() + 'loading.gif');
		var divImg = $('<div />');
		divImg.css('height', options.minHeight + 'px');
		loadingImg.css('position', 'absolute');
		loadingImg.css('margin-left', '-16px'); //half img
		loadingImg.css('top', '50%');
		loadingImg.css('left', '50%');
		divImg.html(loadingImg);
		divDialog.html(divImg);
		divDialog.dialog('open');
		divDialog.load(url, {}, postLoadCallback);
		
	}
	if(autoOpen === true) {
		openDialog();
	} else if($(this).is(':button') || $(this).is('a')) {
		$(this).click(openDialog);
	} else {
		return;
	}
	
	function postLoadCallback() {
		$(':input', divDialog).css('cursor', '');
		divDialog.dialog('open');
		divDialog.dialog('enable');
		divDialog.dialog('option', 'position', options.position);
		
		loadTableOrd();
					
		var clicked, forms = $('form', divDialog);
		
		submitFun = function() {
			$(':input', divDialog).css('cursor', 'wait');
			divDialog.dialog('disable');
			var params = $(this).serializeArray();
			if(clicked != null) {
				params.push({name: clicked.name, value: clicked.value});
			}
			divDialog.load(this.action, params, postLoadCallback);
			return false;
		}
		
		//submit by JS, es:   this.form.submit()
		forms.each(function() {			
			this.submit = submitFun;
		});
		
		//submit by <input type="submit"
		$(':submit', forms).click(function(e) {
			clicked = e.target;
		});
		forms.submit(submitFun);
		$(divDialog).trigger( "openDialog" );
	}	
}

jQuery.fn.extend({
    valTrigger: function (value) {
        $(this).val(value).trigger("change");
        return $(this).val();
    }
});


/*
 * JS:funzioniHB.js
 */
//jQuery(function($){
//    $.datepicker.regional['it'] = {
//            closeText: 'Chiudi',
//            prevText: '&#x3c;Prec',
//            nextText: 'Succ&#x3e;',
//            currentText: 'Oggi',
//            monthNames: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
//            monthNamesShort: ['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic'],
//            dayNames: ['Domenica','Luned&#236','Marted&#236','Mercoled&#236','Gioved&#236','Venerd&#236','Sabato'],
//            dayNamesShort: ['Dom','Lun','Mar','Mer','Gio','Ven','Sab'],
//            dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
//            dateFormat: 'dd/mm/yy',
//            firstDay: 1,
//            isRTL: false};
//    $.datepicker.setDefaults($.datepicker.regional['it']); 
//});




//Pulisco gli spazi
function trim(s){
	return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
}

//funzione generica che permette di eseguire il submit di una specifica form
//idForm nome dell'id della form di cui si vuole eseguire il submit
//i nomi dei campi hidden da utilizzare vanno passati come nome valore
//Es. se si vuole fare un submit di una form formEseguiPagina ed assegnare i seguenti valri codiceChiave=123 e codiceChiave2=456
//    si dovr� chiamare la funzione nel seguente modo:
// submitForm('formEseguiPagina','codiceChiave','123','codiceChiave2','456') 
// N.B. si possono passare quanti parametri si vuole sempre la coppia nome valore
function submitForm(idForm) {
	var objForm=document.getElementById(idForm);
	if (objForm!=null) {
		for(var i=1;i<arguments.length;i+=2){
			var obj=objForm[arguments[i]];
			if (obj!=null)
				
				obj.value=arguments[i+1];
		}		
		objForm.submit();
	}
}

function ApriPopup(FileToOpen, W, H, rif, Full) {
	var stFull=(Full=='S'?'1':'0');
	var W=(W==''?'800':W);
	var H=(H==''?'550':H);
	var rif=(rif==''?'POPUP':rif);
	try {
		winpopup=window.open(FileToOpen, rif,"width=" + W + ",height=" + H + ",toolbar="+stFull+",location="+stFull+",status="+stFull+",menubar="+stFull+",resizable=yes,scrollbars=yes");}
	catch (err) {}
	if (winpopup==null) {
		var strMsg="";
		strMsg=strMsg+"ATTENZIONE.\n";
		strMsg=strMsg+"L'apertura di un popup informativo � stata bloccata dal sistema.\n";
		strMsg=strMsg+"Per una completa e corretta navigazione, si consiglia di aggiungere\n";
		strMsg=strMsg+"questo indirizzo ai siti abilitati all'apertura di finestre popup.\n";
		alert(strMsg);}
  else {
		try {		
			winpopup.window.focus();}
		catch (err) {}
		}
	return;
}
            
function validateDate(form, fieldName, descError) {
	try{
		var field = $('input[name='+fieldName+']', form);
		$.datepicker.parseDate('dd/mm/yy', field.val());
	} catch(err) {
		alert(descError);
		return false;
	}
	return true;
}

function checkNum(num) {
	var len = num.length;
		
	var checkOK="0123456789";
	var allValid=true;
	
	for (var i = 0; i < len; i++) {
		ch=num.charAt(i);

		if(checkOK.indexOf(ch)<0)
			return false;
	}
		
	return true;
}
function trimSpaziECaratteri(parola) {	
	var a = 0;
 	var lung = parola.length;

 	while (a < lung) {
 		nChar = parola.charCodeAt(a);
  
		if ((nChar>=48 && nChar<=57) || (nChar>=97 && nChar<=122) || (nChar>=65 && nChar<=90) || nChar==32) { 
		}
		else {
			parola = parola.substring(0,a)+' '+parola.substring(a+1);
			lung = parola.length;
			a--;
			
		}
		a++;
 	}	
 	a = 0;
 	while (a < lung) {
		if (a == 0 && parola.charAt(0) == ' ') {
	 		parola = parola.substring(1);
			lung = parola.length;
			a--;
	 	}
	 	else if (a == lung-1 && parola.charAt(lung-1) == ' ') {
			parola = parola.substring(0,lung-1);
			lung = parola.length;
			a--;
	 	}
	 	else if (parola.charAt(a) == ' ')
	  		if (parola.charAt(a+1) == ' ') {
				parola = parola.substring(0,a) + parola.substring(a+1);
				lung = parola.length;
				a--;
			}
	 	a++;
 	}
 	return parola;
}

function isNum(nn) {
	var len = nn.length;

	for (var i = 0; i < len; i++) {
		if (nn.charAt(i) < '0' || nn.charAt(i) > '9') {
				return false;
		}
	}
	return true;
}

function fillZero(input, lunghezza) {
	var valore = input.value.toUpperCase();	
	var alfabetoCC = "ABCDEFGHIJKLMNOPQRSTUWYXZ0123456789";
	var ccTmp ="";
	for(var i = 0; i < valore.length; i++){
		
		if(alfabetoCC.indexOf(valore.charAt(i))>= 0){
			ccTmp = ccTmp + valore.charAt(i);
		}
	}
	valore = ccTmp;
	if (valore.length <= lunghezza && valore.length > 0 ) {
		for(var i = 1 + valore.length; i<=lunghezza; i++) {
			valore = '0' + valore;
		}
	} else if (valore.length > lunghezza) {
		valore = valore.slice(0,lunghezza);
	}
	input.value = valore;
}

/*
 * JS:offcanvas.js
 */
//$(document).ready(function () {
//  $('[data-toggle="offcanvas"]').click(function () {
//    $('.row-offcanvas').toggleClass('active')
//  });
//});

/*
 * JS:funzioniUtil.js
 */
function isMobile() {
	var breakpoint = getBreakpoint();
	if (breakpoint == 'mobile') {
		return true;
	}
	return false;
}

function getBreakpoint() {
	var value = window.getComputedStyle(document.querySelector('body'), ':after').getPropertyValue('content');
	value = value.replace(/\"/g, '');
	value = value.replace(/\'/g, '');
	
	return value;
};

function openNews(id) {
	document.location.href=getPathContext() + "/news/dettaglio.do?id=" + id;
}

function OpenWindow(page, target, extraParams) {
	window.open(page, target, extraParams);
}

function OpenHelp(page) {
	$('#helpDialog .modal-body').html("");
	$.ajax({
  		url: page,
 		success:function(data){
    		$('#helpDialog .modal-body').html(data);
    		
  		}
	});
	$('#helpDialog').modal('show');
}

function CloseHelp() {
	$('#helpDialog').modal('hide');
}

function goToPage(page) {
	var url = page;
	if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1) {
		url = getPathContext() + url;
	}
	if(arguments.length > 2) {
		url = url + '?';	
		for(var i = 1; i < arguments.length; i+=2){
			if(i > 1) {
				url += '&';
			}
			url += arguments[i] + '=';
			url += escape(arguments[i+1]);
		}
	}
	document.location.href=url;
}

function MoveToPage(page,el){
	var idDiv = getIdContentInterno(el);
	var src=getSrcContentInterno(idDiv);
	var urlQuery=src.split('&PAGENUMBER=');
	var nuovoUrl=urlQuery[0]+'&PAGENUMBER='+page;
	$('#'+idDiv).attr('src',nuovoUrl);
	loadDiv(idDiv);
	return false;
}

function getIdContentInterno(el) {
	return $(el).parents('.contentInterno').attr('id');
}

function responsiveTable(idTable) {
	var headertext = [],
	headers = document.querySelectorAll(idTable + " th"),
	tablerows = document.querySelectorAll(idTable + " th"),
	tablebody = document.querySelector(idTable + " tbody");
	if (headers == null || tablerows == null || tablebody == null) {
		return;
	}
	
	for(var i = 0; i < headers.length; i++) {
	  var current = headers[i];
	  headertext.push(current.textContent.replace(/\r?\n|\r/,""));
	} 
	for (var i = 0, row; row = tablebody.rows[i]; i++) {
	  for (var j = 0, col; col = row.cells[j]; j++) {
	    col.setAttribute("data-th", headertext[j]);
	  } 
	}
	
}

function prtVal() {
	var prt = param('prt');
	var nua = navigator.userAgent;
	var iOS = /(iPad|iPhone|iPod)/g.test(nua);
	var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
	if (prt) {$('#divFooter').find('.footer').append('<div class="col-xs-12 text-center">iOS=' + iOS + '; isAndroid=' + isAndroid + '; isMobile=' + isMobile() + '</div>'); }
}

function param(name) {
    return (location.search.split(name + '=')[1] || '').split('&')[0];
}

/*
 * Plugin jquery per trasformare tabella <table> in card box layout
 */
(function ($) {
	
	$.fn.cardBoxTable = function(options) {
		
		// css class: #cardbox_wrapper, cardbox-border , carbox-margin, descrizione
		//var t0 = performance.now();
		
		var pluginName = "cardBoxTable";
		if (this.data('plugin_' + pluginName)) {
			return;
		}
        this.data('plugin_' + pluginName, options);

        // options
        var settings = $.extend({
        	colTitleIdx: 1, 			// indice colonna  
        	titleConcat: false,			// true concatena label della colonna titolo con il valore corrispondente
        	colActionIdx: -1, 			// indice action (pulsante)
        	colsAction: [],				// colonne pulsanti default vengono spostate nell'ultima riga
        	colActionPos: "last-row",	// "last-row": ultima riga, 
        								// 	"top-left" alto a sx nella colonna titolo, 
        								// "top-right" alto a dx nella colonna titolo
        	hideColIdx: -1, 			// lista delle colonne da nascondere (indice parte da zero)
        	hideCols: [], 				// lista delle colonne da nascondere (indice parte da zero)
        	defaultLabel: [],			// lista delle label di default, sovrasscrive i valori dei th 
        	defaultValue: [], 			// lista dei valori di default se il valore della colonna � vuoto
        	show: function() {},		// callback che viene fatta la call dopo che cardbox � stato creato
        								// $(this) � il nuovo div creato per il cardbox layout
        	debugShowTable: false,		// show della tabella origine
        }, options);
        
		var idDivCardBox = "cardbox-wrapper",
			idTable = this.attr('id'), $thisNew,
			tableHeaders = document.querySelectorAll("#" + idTable + " thead"),
			tableBody = document.querySelectorAll("#" + idTable + " tbody");
			
		if (tableHeaders == null || tableHeaders.length == 0  || 
				tableBody == null || tableBody.lenght == 0) {
			return;
		}
		
		var hideCols = [], defValue = [], labelDefValue = [];
		colTitleIdx = settings.colTitleIdx;
		titleConcat = settings.titleConcat;
		colActionIdx = settings.colActionIdx;
		colsAction = settings.colsAction;
		colActionPos = settings.colActionPos;
		hideColIdx = settings.hideColIdx;
		hideCols = settings.hideCols;
		labelDefValue = settings.defaultLabel;
		defValue =  settings.defaultValue;
		showFunction = settings.show;
		dbgShowTbl =  settings.debugShowTable;

		if (!dbgShowTbl) this.hide(); // hide current table // //document.getElementById(idTable).style.display = 'block';
		
		var headerText = []; // retrieve valori dei intestazione tabella
		for (var i = 0, headRow; headRow = tableHeaders[0].rows[0].cells[i]; i++) {
			if (labelDefValue.length == 0 || labelDefValue[i] == "") { // usare il metodo push()
				headerText.push(headRow.innerHTML.trim());
			} else {
				headerText.push((typeof(labelDefValue[i]) == "undefined") ? "": labelDefValue[i]);
			}
		}
	
		var divCardBox = [], idx = 0;
		divCardBox[idx++]  = "<div id='" + idDivCardBox+ "'>";
		for (var i = 0, row; row = tableBody[0].rows[i]; i++) {
			if (row.className.indexOf("hidden-xs") >= 0) {
				continue;
			} 

			var boxTitle = "...", elmAction = "", 
				idxBoxTitle = 0, flgColsAction = false,	flgNoRec = false;
			
			divCardBox[idx++]  = "<div class='col-xs-12 cardbox-border'>";
			for (var j = 0, col; col = row.cells[j]; j++) {
				if (idxBoxTitle == 0 && colTitleIdx != -1) { // title
					idxBoxTitle = idx;
					divCardBox[idx++] = "";
				}

				if (hideColIdx == j) {continue; }
				if (hideCols[j] == true) { continue; }
				
				var colValue = col.innerHTML.trim();
				if (colValue == "" || colValue == "undefined") {
					colValue = (typeof(defValue[j]) == "undefined") ? "": defValue[j]; 
				}

				var norec = col.getAttribute("data-no-record");
				if (norec) {
					flgNoRec = true;
					divCardBox[idx++] = "<div class='row'>" +
										"<span class='col-xs-12 cardbox-margin'>";
					divCardBox[idx++] = colValue;
					divCardBox[idx++] = "</span>" +
										"</div>";
					break;
				}
				
				if (colTitleIdx == j) {
					boxTitle = colValue;
					continue;
				}
				
				if (colsAction[j] == true) {
					if (colValue != "" || colValue != "undefined") {
						flgColsAction = true;
						elmAction += "<span class='col-xs-3 cardbox-sep-button '>" + colValue + "</span>";	
					}
					continue;
				}
				
				if (colActionIdx == j) {
					if (colValue != "" || colValue != "undefined") {
						flgColsAction = true;
						elmAction = colValue;
					}
					continue;
				}
				
				divCardBox[idx++] = "<div class='row'><label class='col-xs-5'><strong>";
				divCardBox[idx++] = headerText[j];
				divCardBox[idx++] = "</strong></label>" +
									"<span class='col-xs-7 cardbox-margin'><span class='pull-left'>";
				divCardBox[idx++] = colValue;
				divCardBox[idx++] = "</span></span>" +
									"</div>";
			}
			
			if (flgColsAction && colActionPos == "last-row") {
				divCardBox[idx++] = "<div class='row'>" +
									"<span class='col-xs-12 cardbox-margin'><span class='pull-right'>";
				divCardBox[idx++] = elmAction;
				divCardBox[idx++] = "</span></span>" +
									"</div>";
			}
			 
			if (colTitleIdx != -1 && !flgNoRec) {
				if (titleConcat) {
					boxTitle = "<strong>" + headerText[colTitleIdx] + "</strong> " + boxTitle;
					 
				} 
				if (flgColsAction && colActionPos != "last-row") {
					boxTitle = "<span class='col-xs-9'><span class='text-center'>" + boxTitle + "</span></span>";
				} else {
					boxTitle = "<span class='col-xs-12'>" + boxTitle + "</span>";
				}
				
				var actionLeft = ""; actionRight = "";
				if (colActionPos == "top-right") {
					actionRight = "<span class='col-xs-3 pull-right cardbox-top-btn-margin'>" + elmAction + "</span>";
				} else if (colActionPos == "top-left") {
					actionLeft = "<span class='col-xs-3 pull-left cardbox-top-btn-margin'>" + elmAction + "</span>";
				}
				
				divCardBox[idxBoxTitle] = "<h3 class='descrizione'><div class='col-xs-12'>" + actionLeft + boxTitle +  actionRight + "</div></h3>";
			} 
			divCardBox[idx++] = "</div>";	
		}
		divCardBox[idx++] = "</div>";

		var tempDiv = document.createElement('div'); //		this.after(divCardBox.join(''));
		tempDiv.innerHTML = divCardBox.join('');
		var table = document.getElementById(idTable);
		table.parentNode.insertBefore(tempDiv, table.previousSibling);
		
		$thisNew = $('#' + idDivCardBox);
		if($.isFunction(showFunction)) { 
			showFunction.call($thisNew);
		}
		
		//console.log("Call to cardBoxTable took " + (performance.now() - t0) + " milliseconds.")
	};

	/*
	 * Change id con uno nuovo, per evitare problemi con i plugin jquery 
	 * ad esempio selectToUISlider
	 */
	$.fn.changeAttrId = function(newPostId) {
		if (newPostId == "undefined") return this;
		
		return this.each(function(){
			$(this).attr('id', this.id + '_' + newPostId);
	    });
	  };

}( jQuery ));


$(function(){

	
	$("body").on("click",".selector .selector-els .selector-el",function(){
		// Assegna il "selezionato"
		var srel = $(this).addClass("selected");
		var srwrap = srel.parents(".selector");
		srwrap.find(".selector-el").not(srel).removeClass("selected");

		// Attribuzione del valore all'input 
		srwrap.find("input").val(srel.attr("data-idel"));
		// Html del bottone
		var srbtn = srwrap.find(".selector-btn").html(srel.html());
		
		var id = $(this).closest("[class*='widget']").attr('id');
		$("#"+id).change();
		
	});

});

function changeSubmitUrl(button, url){
	const modulePath = getPathContext();
	$(button).closest("form").attr("action", modulePath + url + ".do");
}

function modificaContattoEmailDefault(){
	arguments[0].stopImmediatePropagation();
	$('<form method="post" action="' + getPathContext() + '/serviziPerTe/contattiERecapiti/EMail/modificaPredefinita.do"</form>')
	.appendTo('body').submit();
}

function setAndSubmit(value){
	$("input[name='azione']").val(value);
	document.formCampagna.submit();
}
 
function sendFeedback(esito, campagna, codiceazione, canale) {
	$.ajax({
		url: getPathContext() + "/feedbackCampAsVir.do",
		method: "POST",
		data: { campagna: campagna, esito : esito, canale: canale, codiceazione : codiceazione}, 
		success: function(result){
			return result;
		}
	});
}

selectTab = function(element) {
	var selectedId = $(element).attr("id");
	
	$(element).closest("ul").find("li").each(function(i, e) {
		if ($(e).hasClass("on")) {
			$(e).removeClass("on");
			var id = $(e).find("a").attr("id");
			$("."+ id + "_inside").hide();
		}
	});
	$(element).closest("li").addClass("on");
	// mostro tab corrente
	$("." + selectedId + "_inside").show();
}

function movimentoPrenotato(rowData) {
	console.log(rowData);
}

addImg = function(imgSource) {
	
	var img = $("<img>", {
		src: imgSource,
		class: "img-resp"
	});
	// inserisce l'immagine nel body del modal #helpDialog
	$("#helpDialog .modal-body").html(img);
}

function formattaStr(campo, maxElem) {
	stringa = campo.value;
	if (!(maxElem === undefined)) {
		var lung = stringa.length; // lunghezza stringa
		if (lung > maxElem)
			stringa = stringa.substring(0, maxElem);
	}
	stringa = $.trim(stringa);
	stringa = stringa.toUpperCase();
	campo.value = stringa;
}



/*
function InvioEmail() {
	
	var params = [];
	for ( var i = 0; i < arguments.length; i++) {
		params.push(arguments[i]);
	}
	params.push('title');
	params.push('Invio Coordinate IBAN');
	params.push('width');
	params.push(600);

	openAjaxDialog.apply(this, params);

}*/

function openAjaxDialog(page) {

var dialogArgs = {  position: { at: "center top"}};
var dialogName = "";
var url = getPathContext() + page + '?';
for ( var i = 1; i < arguments.length; i += 2) {
	if (arguments[i] === 'width') {
		dialogArgs.width = arguments[i + 1];
	} else if (arguments[i] === 'altezza') {
		dialogArgs.height = arguments[i + 1];
	} else if (arguments[i] === 'title') {
		dialogArgs.title = arguments[i + 1];
	} else if (arguments[i] === 'dialogName') {
		dialogName = arguments[i + 1];
		
	} else {
		url += '&'
		url += arguments[i] + '='
		url += escape(unescape(arguments[i + 1]));
	}
}

$().ajaxDialog(dialogName, url, dialogArgs, true);
return false;
}

function closeAjaxDialog(buttonOrDialogId, reload) {
if ($(buttonOrDialogId).is(':button')) {
	$(buttonOrDialogId).parents('.ui-dialog-content').dialog('close');
} else {
	$('#' + buttonOrDialogId).dialog('close');
}
if (reload === undefined || reload === true) {
	window.location.reload();
}
}
function gestionePaginaPubblica() {
	var url="/HT/fe/";
	$.get(url+"video.html", function(data) {$("#video").replaceWith(data);});
	$.get(url+"header.html", function(data) {
		$("#header").replaceWith(data);
		$.getScript(url+"js/script/struttura.js" );
		$("#menuMainMobileWrapper ul li").each(function() {
			$(this).removeClass("active");
			if ($(this).attr("data-id") == 'ass') {
				$(this).addClass("active");
			}
		});
		
	});
	$.get(url+"footer.html", function(data) {$("#footer").replaceWith(data);});

}