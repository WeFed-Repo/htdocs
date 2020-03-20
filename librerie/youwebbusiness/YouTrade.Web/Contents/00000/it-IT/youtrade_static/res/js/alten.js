// JavaScript Document

Bridge.instance.ready(function(e) {
	
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
	
	landingPagesBoxEqualizer();

    // ANIMAZIONE MENU
    //ma. ???
	//if (document.forms['formInserimento']) {
	//    if (document.forms['formInserimento'].elements["CMENAR"].value != "") {
	//        $('#' + document.forms['formInserimento'].elements["CMENAR"].value).addClass('hover');
	//    }
	//}


    //ma. now in html.tag.activator.js----------------------

	//$('.mega-menu.dropdown').mouseenter(function () {
	//    $(this).addClass('hover');
    //});

    //$('.mega-menu.dropdown').mouseleave(function () {

	//    if (document.forms['formInserimento']) {
	//        if ($(this).attr("id") != document.forms['formInserimento'].elements["CMENAR"].value) {
	//            $(this).removeClass('hover');
	//        } else {
	//            $(this).addClass('hover');
	//        }
	//    } else {
	//        $(this).removeClass('hover');
	//    }
	//});

    //$('.mega-menu.dropdown').click(

    //    function (e) {

    //        var that = $(this);

    //        if (!$('.dropdown-menu', that).hasClass('open')) {

    //            if ($('.dropdown-menu.open').length > 0) {
    //                closeSubmenu($('.dropdown-menu.open').parent());
    //                openSubmenu(that, 200);
    //            }
    //            else { openSubmenu(that); }
    //        }
    //        else { closeSubmenu(that); }

    //        $('.mega-menu.dropdown').each(function (index, element) { $(this).removeClass('hover'); });
    //        that.addClass('hover');
    //        if (document.forms['formInserimento']) document.forms['formInserimento'].elements["CMENAR"].value = $(this).attr("id");//id area selezionata
    //    }
    //);


    //$('.mega-menu.dropdown > a').click(function (e) { e.preventDefault(); });
    //--------------------ma.
	
	 
});


function landingPagesBoxEqualizer() {
	var maxHeight = 0;

	$('.mainContent .riquadro .riquadro').each(function(){
		var that = $(this);
	   if (that.height() > maxHeight) { maxHeight = that.height(); }
	});
	
	$('.mainContent .riquadro .riquadro').height(maxHeight);

}

//ma. now in html.tag.activator.js----------------------

//function openSubmenu(context, timeout) {
//	if (timeout == null)
//		timeout = 0;
		
//	$('.dropdown-menu', context).delay(timeout).show().animate({
//			top: ["78px", "easeInQuad"],
//			opacity: 1
//		},
//		200,
//		function(){
//			$(this).addClass('open');
//			context.addClass('sub-open');
//	});
//}

//function closeSubmenu(context, callback) {
//	context.removeClass('sub-open');
//	$('.dropdown-menu', context).animate({
//			top: ["50px", "easeInQuad"],
//			opacity: 0
//		},
//		200,
//		function(){
//			$(this).removeClass('open');
//			$(this).hide();
//			context.removeClass('sub-open'); // action duplicated to avoid persistence of menu arrow when user quickly opens ad hovers a submenu triggering "close" action before "open" is complete
//			if (callback) {
//					callback;
//			}
//	});
//}
//--------------ma.



// SELEZIONE RAPPORTO 

function CCselectionInit() {
	
	if ($('.tabSelezioneCC table').length > 0) {
		$('.tabSelezioneCC').hide();
		
		
		$('.tabSelezioneCC table').dataTable( {
			"paging":   ($('.tabSelezioneCC').data('paging') != null) ? $('.tabSelezioneCC').data('paging') : "true",
			"ordering": true,
			"info":     false,
			"pagingType": ($('.tabSelezioneCC').data('paging-type') != null) ? $('.tabSelezioneCC').data('paging-type') : "simple_numbers",
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
			
			var contoSelezionato = {
				"tipoRapporto": dati[1].innerText,
				"numeroConto": dati[2].innerText,
				"ABI": dati[3].innerText,
				"CAB": dati[4].innerText,
				"intestazione": dati[5].innerText,
				"saldoContabile": dati[6].innerText,
				"saldoDisponibile": dati[7].innerText,
				"Banca": dati[8].innerText,
				"IBAN": dati[9].innerText
			};
				
			var ccSel = $('.CCselezionato', ctx);
			if (contoSelezionato.intestazione.length > 20) {
				$('.intestazione', ccSel).text(contoSelezionato.intestazione);
				$('.intestazione', ccSel).removeClass('col-md-8').addClass('col-md-10');
				$('.label-intestazione', ccSel).hide();
			}
			else {
				$('.intestazione', ccSel).text(contoSelezionato.intestazione);
				$('.intestazione', ccSel).removeClass('col-md-10').addClass('col-md-8');
				$('.label-intestazione', ccSel).show();
			}
			
			$('.conto', ccSel).text(contoSelezionato.tipoRapporto);
			$('.numero', ccSel).text(contoSelezionato.numeroConto);
			$('.ABI', ccSel).text(contoSelezionato.ABI + ' - ' + contoSelezionato.Banca);
			$('.CAB', ccSel).text(contoSelezionato.CAB + ' - ' + contoSelezionato.IBAN);
			$('.disponibile', ccSel).html(contoSelezionato.saldoDisponibile.replace('EUR', '&euro;'));
			$('.contabile', ccSel).html(contoSelezionato.saldoContabile.replace('EUR', '&euro;'));
			
			$('.btnSelezioneCC', ctx).removeClass('open');
			$('.tabSelezioneCC', ctx).slideUp(300);
		});
	}
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