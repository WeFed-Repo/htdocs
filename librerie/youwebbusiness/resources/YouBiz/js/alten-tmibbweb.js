// JavaScript Document

var imagePath = '/resources/YouBiz/';


$(document).ready(function(e) {
	
	rebuildPageContainer();
    	
	rebuildPageTitle();
	
	rebuildSectionTitles();
	
	formatFormFields();
	
	placePageButtons();
	
	formatTables();
	
	formatTabsControl();
    
});
function rebuildPageContainer() {
    var that = $('.old-pageContent');

    that.addClass('new-riquadro').removeAttr('style').removeAttr('width');
    $('.panel-group').removeAttr('style');

    if (that.hasClass('old-wide'))
        that.wrap($('<div class="container-wide"></div>'));
    else
        that.wrap($('<div class="container"></div>'));

    $('.sfondoTabelle').removeAttr('width');

}
/*
function rebuildPageContainer() {
	var that = $('.old-pageContent');
	
	that.addClass('new-riquadro').removeAttr('style').removeAttr('width');
	$('.panel-group').removeAttr('style');
	
	that.wrap($('<div class="container"></div>'));
	
	$('.sfondoTabelle').removeAttr('width');
	
}
*/
function rebuildPageTitle() {
	// Wraps h1 around titoloTabella text
	$('.old-pageTitle').each(function(index, element) {
		var that = $(this);
		var txt = that.text();
		
		that.addClass('page-title').removeClass('vnt-filter-title');
		//var cssClass = txt.trim().replace(' ', '-').toLowerCase();
		
		$('.titoloFiltri img').remove();
		
		that.html('<div class="new-flag"></div><h1>' + txt + '</h1>'); 
	});
	
	// Move page-help link after the page title
	var helpLink = null;
	if ($('.old-pageHelp').length > 0) {
		helpLink = $('.old-pageHelp').clone().removeClass('testoRedSmallBold');
		
		// remove old link
		$('.old-pageHelp').parent().parent().remove();
		
		helpLink.text('');
		helpLink.html('<img src="' + imagePath + 'images/i_help.png" class="imgSrv" alt="Help On Line">');
		
		var title = $('.titoloTabella')[0];
		$('h1', title).append(helpLink);
	}
}

function rebuildSectionTitles() {
	
	// rebuilds section container
	$('.old-section').each(function(index, element) {
		var that = $(this);
		
		that.addClass('section').addClass('clearfix');
	});
	
	$('.old-sectionTitle').each(function(index, element) {
		var that = $(this);
		//if ($('.old-sectionTitle', that).length == 0) {
			var txt = that.text();
			
			that.html('<h3 class="new-titleSection">' + txt + '</h3>').css('padding-left', 0);
		//}
		
		that.parentsUntil('table').parent().attr('cellpadding', 0).attr('cellspacing', 0);
	});
	
	$('.old-listHeading').each(function(index, element) {
		var that = $(this);
		
		that.removeAttr('style');
		that.addClass('section');
	});
	
	// replace open/close icons
	$('img[src$="desc.gif"]').attr('src', imagePath + 'images/ico-expand.png');
	//Alfa 2015-05-12 - Non e' sempre in div
	//$('div[style*="riga-filtro.gif"]').each(function(index, element)
	$('[style*="riga-filtro.gif"]').each(function (index, element) {
	    var that = $(this);
	    if (that.next().is('br'))
	        that.next().css("visibility", "hidden").css("display", "none");

	    if (that.prev().is('br'))
	        that.prev().css("visibility", "hidden").css("display", "none");

	    that.css("visibility", "hidden").css("display", "none");
	});
}

function formatFormFields() {
    
    $('td[height="1"]').height(5);
    
	$('td[align="right"]').removeAttr('align').addClass('right');
	
	$('td[align="left"]').removeAttr('align').addClass('left');
	
	
	$('td[align="center"]').each(function(index, element) {
		if ((!$(this).hasClass('page-title')) && (!$(this).hasClass('old-sectionTitle'))) {
				$(this).removeAttr('align').addClass('txt_center');
			}
	});
	
	$('img[src$="dummy.gif"]').remove();
	
	$('img[src$="fincatura-viola.gif"]').remove();
	
	$('input[type="text"]').addClass('new-form-control');
	$('input[type="password"]').addClass('new-form-control');
	$('textarea').addClass('new-form-control');
	$('select').addClass('new-form-control');
	
	$('select', $('.old-tabContent')).css('height', 'auto');
	$('select[size]').css('height', 'auto');
	
	$('input[type="text"]').addClass('new-form-control');
	
	$('.old-fieldSearch').each(function(index, element) {
		replaceIcon($(this), 'ico-filter');
	});
	
	$('.old-fieldHelp').each(function(index, element) {
		replaceIcon($(this), 'i_help');
	});
	
	$('.old-fieldCalendar').each(function(index, element) {
		replaceIcon($(this), 'calendar');
	});
	
	$('.old-fieldQuickFilter').each(function(index, element) {
		var that = $(this);
		var pic = 'i_quick-filter';
		
		if (that.hasClass('disabled'))
			pic += '-disabled';
			
		replaceIcon(that, pic);
	});
	
	$('.old-fieldFilter').each(function(index, element) {
		replaceIcon($(this), 'i_filter');
	});
	
	$('.old-fieldRemoveFilter').each(function(index, element) {
		replaceIcon($(this), 'i_remove-filter');
	});
	
	$('.old-fieldPdf').each(function(index, element) {
		replaceIcon($(this), 'i_pdf');
	});
	
	$('.old-fieldMessageUnread').each(function(index, element) {
		replaceIcon($(this), 'i_message-unread');
	});
	
	$('.old-fieldMessageRead').each(function(index, element) {
		replaceIcon($(this), 'i_message-read');
	});
	
	$('.old-fieldPrint').each(function(index, element) {
	    //replaceIcon($(this), 'i_print');
	    replaceIcon($(this), 'i_pdf');
	});

    //Sonia 13/06/2016: inserita nuova funzione per mantenere icona della stampante in DettaglioConto.aspx, DettaglioDisposizioni.aspx e DettaglioEsito.aspx
	$('.old-fieldPrintHtml').each(function (index, element) {
	    replaceIcon($(this), 'i_print');
	});
	
	$('.old-fieldCheck').each(function(index, element) {
		replaceIcon($(this), 'i_check');
	});
	
	$('input.bottom').removeClass('bottom').addClass('btn1');
    $('.new-riquadro .btn1').addClass('small');
}

function replaceIcon(element, filename) {
	if (element.is('a')) {
		if ($('img', element).length > 0)
			$('img', element).attr('src', imagePath + 'images/' + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);
		else
			element.html('<img src="' + imagePath + 'images/' + filename + '.png' + '" border="0" width="20" height="20" />');
	}
	else
		element.attr('src', imagePath + 'images/' + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);
}



function placePageButtons() {
	
	//var buttons = $('.old-buttons input').addClass('btn').removeClass('small');
	//var btnContainer = $('<div />').addClass('new-buttons');
    //btnContainer.append(buttons).insertAfter($('.new-riquadro'));


    /*--- Laura 01/06/2015: dovrei considerare anche i bottoni che sono contenuti nelle form per coronarli della relativa form e campi hidden */
    var buttons;
    var buttonsForm;
    var btnform = $('.old-buttons-form form');
    var btnformie8 = $('.old-buttons-form-ie8 form');
    var btnContainer = $('<div />').addClass('new-buttons');

    buttons = $('.old-buttons input').addClass('btn1').removeClass('small');
    btnContainer.append(buttons).insertAfter($('.new-riquadro'));

    if (btnform.length > 0) {
        $.each(btnform, function (i, val) {
            buttonsForm = $('.old-buttons-form form input').addClass('btn1').removeClass('small');
            btnform.append(buttonsForm);
        });
        btnContainer.append(btnform);
    }
    
    /*Laura e Sonia 10/07/2015: aggiunto questo caso per Anticipo Fatture infoEsiti/dettDistintaEsito.aspx dove in ie8 applicando lo script sopra (if (btnform.length > 0)) 
    risultava form dentro form e non faceva il submit corretto perche' perdeva i campi hidden della form relativa 
    Nella pagina form e campi hidden sono stati spostati al livello del bottone in modo da evitare le form nidificate */
    if (btnformie8.length > 0) {
        $.each(btnformie8, function (i, val) {
            var buttonsFormie8 = $('.old-buttons-form-ie8 form input').addClass('btn1').removeClass('small');
            btnformie8.append(buttonsFormie8);
        });
        btnContainer.append(btnformie8);
    }

    /*---Laura 01/06/2015*/
}

function formatTables() {
	$('.old-table').each(function(index, element) {
		var that = $(this);
		that.addClass('table');
		that.attr('cellpadding', '0').attr('cellspacing', '0');
		
		$('.sottoTitoloTabella', that).removeClass('sottoTitoloTabella');
		$('.fincaturaTabella', that).removeClass('fincaturaTabella');
		$('.tabellaLeftBorder', that).removeClass('tabellaLeftBorder');
		$('.tabellaRightBorder', that).removeClass('tabellaRightBorder');
		
		$('td.rigaChiara', that).removeClass('rigaChiara').parent().addClass('odd');
		$('td.rigaScura', that).removeClass('rigaScura').parent().addClass('even');
		
		$('.rigaChiara', that).removeClass('rigaChiara').addClass('odd');
		$('.rigaScura', that).removeClass('rigaScura').addClass('even');
		
		$('.old-tableHeader td').replaceWith(function() {
			var that = this;
			var th = $('<th />');
			
			$.each(that.attributes, function(index) {
				th.attr(that.attributes[index].name, that.attributes[index].value);
			});
			
			return th.append($(that).contents());
		});
	});
	
	$('.old-tableHeader').removeClass('titoloTabella');
	
	$('table.pl_header_table').attr('cellpadding', '0').attr('cellspacing', '0');
	
	// rplace table header td with th
	var tabHead = $('td.pl_header').parent();
	$('td', tabHead).each(function(index, element) {
	    var that = $(this);
		var colspan = that.attr('colspan') != null ? that.attr('colspan') : '1';
		var content = that.html();
		
		that.replaceWith('<th colspan="' + colspan + '">' + content + '</th>');
		
	});
    // Alfa modificati 19/5 - Parte era non commentata
	/*
	$('td', $('table.pl_header')).each(function(index, element) {
		var that = $(this);
		var content = that.html();
		
		var colspan = that.attr('colspan');
		var content = that.html();
		
		that.replaceWith('<th colspan="' + colspan + '">' + content + '</th>');
		
	});
	*/
	$('img[src*="dxarrow"]').attr('src', imagePath + 'images/next-page.png').attr('width', '20');
	$('img[src*="sxarrow"]').attr('src', imagePath + 'images/prev-page.png').attr('width', '20');
	$('img[src*="icona_avanti"]').attr('src', imagePath + 'images/last-page.png').attr('width', '20');
	$('img[src*="icona_indietro"]').attr('src', imagePath + 'images/first-page.png').attr('width', '20');

	$('img[src*="sort_up_disabled"]').attr('src', imagePath + 'images/i_sort_asc-disabled.png').attr('width', '20').addClass('right');
	$('img[src*="sort_up_enabled"]').attr('src', imagePath + 'images/i_sort_asc-enabled.png').attr('width', '20').addClass('right');
	$('img[src*="sort_down_disabled"]').attr('src', imagePath + 'images/i_sort_desc-disabled.png').attr('width', '20').addClass('left');
	$('img[src*="sort_down_enabled"]').attr('src', imagePath + 'images/i_sort_desc-enabled.png').attr('width', '20').addClass('left');

	$('td[background]').removeAttr('background');
	$('.old-pager').removeAttr('style');
}

function formatTabsControl() {
	
	$('.link_tabAttivaPF').addClass('link_tabAttiva').removeClass('link_tabAttivaPF');
	
	var that = $('.old-tabs');
	
	var tabPanel = $('.old-tabPanel', that);
	
	$('.sfondoTab', that).removeClass('sfondoTab');
	//$('img[src*="angolo_tab_attiva.gif"]').remove();
	$('img[src*="angolo_tab_"]').remove();
	$('.old-tabContent .btn1').addClass('small').addClass('center');
	$('.tabSpacer').html("&nbsp;&nbsp;&nbsp;");
}



