// JavaScript Document

$(document).ready(function(e) {
	
	defaultTextInit();
	CCselectionInit();
	//initLabelImporti();
	initExpandableTables();
	
	$('.popup').dialog({
		resizable: true,
		width: 600,
		maxHeight: 600,
		modal: true,
		autoOpen: false
	});
	
	
	// ANIMAZIONE MENU
	$('li.mega-menu.dropdown').mouseenter(function(){ $(this).addClass('hover'); });
	$('li.mega-menu.dropdown').mouseleave(function(){ $(this).removeClass('hover'); });
	
	$('li.mega-menu.dropdown').click(
		function(e){
			var that = $(this);
			
			if (!$('.dropdown-menu', that).hasClass('open')) {
			
				if ($('.dropdown-menu.open').length > 0) {
					closeSubmenu($('.dropdown-menu.open').parent());
					openSubmenu(that, 200);
				}
				else { openSubmenu(that); }
			}
			else { closeSubmenu(that); }
	});
	
	$('li.mega-menu.dropdown > a').click(function(e){ e.preventDefault(); });
	
	/*
	$('ul.dropdown-menu').mouseleave(
		function(e) {
			var that = $(this).parent();
			closeSubmenu(that);
	});
	*/
});


function openSubmenu(context, timeout) {
	if (timeout == null)
		timeout = 0;
		
	$('.dropdown-menu', context).delay(timeout).show().animate({
			top: ["78px", "easeInQuad"],
			opacity: 1
		},
		200,
		function(){
			$(this).addClass('open');
			context.addClass('sub-open');
	});
}

function closeSubmenu(context, callback) {
	context.removeClass('sub-open');
	$('.dropdown-menu', context).animate({
			top: ["50px", "easeInQuad"],
			opacity: 0
		},
		200,
		function(){
			$(this).removeClass('open');
			$(this).hide();
			context.removeClass('sub-open'); // action duplicated to avoid persistence of menu arrow when user quickly opens ad hovers a submenu triggering "close" action before "open" is complete
			if (callback) {
					callback;
			}
	});
}



// SELEZIONE RAPPORTO 

function CCselectionInit() {
	
	if ($('.tabSelezioneCC table').length > 0) {
		$('.tabSelezioneCC').hide();
		
		
		
		$('.tabSelezioneCC table').dataTable( {
			"paging":   ($('body').data('paging') != null) ? $('body').data('paging') : true,
			"ordering": true,
			"info":     false,
			"searching" : false,
			"pagingType": ($('.tabSelezioneCC').data('paging-type')) ? $('.tabSelezioneCC').data('paging-type') : "simple_numbers",
			"lengthMenu": [[8, 24, 32, -1], [8, 24, 32, "Tutti"]],
			"language": {
				"lengthMenu": "Mostra _MENU_ risultati per pagina",
				"zeroRecords": "Nessun risultato trovato",
				"info": "Pagina _PAGE_ di _PAGES_",
				"infoEmpty": "Nessun record trovato",
				"infoFiltered": "(filtered from _MAX_ total records)",
				"search": "Cerca",
				"paginate": {
					"first":      "Prima",
					"last":       "Ultima",
					"next":       "Succ.",
					"previous":   "Prec."
				},
				"aria": {
					"sortAscending":  ": ordinamento crescente",
					"sortDescending": ": ordinamento decrescente"
				}
			}
		});
		
		
		$('.btnSelezioneCC').click(function(){
			var that = $(this);
			if (!that.hasClass('open'))
				$('.tabSelezioneCC').slideDown(200);
			else
				$('.tabSelezioneCC').slideUp(300);
				
			that.toggleClass('open');
		});
	
		
		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() { $(this).addClass('hover'); });
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() { $(this).removeClass('hover'); });
		
		$('.tabSelezioneCC table tbody').on('click', 'tr', function(){
			var ctx = $(this).parentsUntil('.selezioneCC').parent();
			
			$('input[type="radio"]', $(this).parent()).removeAttr('checked');
			$('input[type="radio"]', this).attr("checked", "checked");
			
			var dati = $('td', this);
			
			setContoCorrente(dati);
			
			var contoSelezionato = {
				"tipoRapporto": getText(dati[1]),
				"numeroConto": getText(dati[2]),
				"filiale": getText(dati[3]),
				"intestazione": getText(dati[4]),
				"affidamento": getText(dati[5]),
				"saldoContabile": getText(dati[6]),
				"saldoDisponibile": getText(dati[7])
			};
				
			var ccSel = $('.CCselezionato', ctx);
			if (contoSelezionato.intestazione.length > 26) {
				$('#intestazione', ccSel).text(contoSelezionato.intestazione);
				$('#intestazione', ccSel).attr('class', 'col-xs-10');
				$('#label-intestazione', ccSel).hide();
				//$('#label-intestazione', ccSel)[0].style = "display:none";
			}
			else {
				$('#intestazione', ccSel).text(contoSelezionato.intestazione);
				$('#intestazione', ccSel).attr('class', 'col-xs-7');
				$('#label-intestazione', ccSel).show();
				//$('#label-intestazione', ccSel)[0].style = "display:block";
			}
			
			$('#conto', ccSel).text(contoSelezionato.tipoRapporto);
			$('#numero', ccSel).text(contoSelezionato.numeroConto);
			$('#agenzia', ccSel).text(contoSelezionato.filiale);
			$('#disponibile strong', ccSel).text(contoSelezionato.saldoDisponibile);
			$('#contabile strong', ccSel).text(contoSelezionato.saldoContabile);
			$('#affidamento strong', ccSel).text(contoSelezionato.affidamento);
			
			if (parseFloat($('#disponibile strong', ccSel).text().replace(',','.')) < 0) {
				$('#disponibile strong', ccSel).removeClass('positivo');
				$('#disponibile strong', ccSel).addClass('negativo');
			} else {
				$('#disponibile strong', ccSel).removeClass('negativo');
				$('#disponibile strong', ccSel).addClass('positivo');
			}
			if (parseFloat($('#contabile strong', ccSel).text().replace(',','.')) < 0) {
				$('#contabile strong', ccSel).removeClass('positivo');
				$('#contabile strong', ccSel).addClass('negativo');
			} else {
				$('#contabile strong', ccSel).removeClass('negativo');
				$('#contabile strong', ccSel).addClass('positivo');
			}
			if (parseFloat($('#affidamento strong', ccSel).text().replace(',','.')) < 0) {
				$('#affidamento strong', ccSel).removeClass('positivo');
				$('#affidamento strong', ccSel).addClass('negativo');
			} else {
				$('#affidamento strong', ccSel).removeClass('negativo');
				$('#affidamento strong', ccSel).addClass('positivo');
			}
			
			$('.btnSelezioneCC', ctx).removeClass('open');
			$('.tabSelezioneCC', ctx).slideUp(300);
		});
	}
}


function getText(el)
{
if (el.textContent) return myTrim(el.textContent);
if (el.innerText) return myTrim(el.innerText);
return myTrim(el.innerHTML.replace(/<[^>]*>/g,''));
}

function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
}

function showHide(control, toCheck, showValue, selector) {
	if ($(control).attr(toCheck) == showValue) {
		$(selector).fadeIn();
	} else {
		$(selector).fadeOut();
	}
}



// TABELLE ESPANDIBILI

function initExpandableTables() {
	
	//$('table.expandable').on('mouseenter', 'tr', function() { if ($(this).parent().parent().hasClass('expandable')) { $(this).addClass('hover'); } });
	//$('table.expandable').on('mouseleave', 'tr', function() { if ($(this).parent().parent().hasClass('expandable')) { $(this).removeClass('hover'); } });
	
	$('table.expandable tr').on('click', 'a.table-expand-collapse', function(e) {
		var action = $(this);
		
		var that = $(this).parentsUntil('tr').parent().next();
		
		if (!that.hasClass('expanded')) {
			that.fadeIn(200).addClass('expanded');
		}
		else {
			that.fadeOut(200).removeClass('expanded');
		}
		
		action.fadeOut(100, function(){ $(this).toggleClass('expand').toggleClass('collapse').fadeIn(100); });
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








// IMPOSTAZIONE DEFAULT VALUE SU CAMPI DI TESTO 

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

//Codice modifica $3401$