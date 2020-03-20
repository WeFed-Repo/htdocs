// JavaScript Document

var imagePath = '/ibbweb2/newstyle/static/';


$(document).ready(function(e) {
	
	initMegaMenu()
	
	rebuildPageContainer();
	
	rebuildPageTitle();
	
	rebuildSectionTitles();
	
	rebuildTable();
	
	formatFormFields();
	
	placePageButtons();
	
	replaceFooter();
	
	formatTables();
	
	formatTabsControl();
	
	formatCol(); /* allineamento automatico degli input 20/07/2015 */
	hideOldMenu(); /* funzione aggiunta per Chrome*/
});

/*
function countTableColumns(table) {
	var colCount = 0;
    var thSelector = 'tr:nth-child(1) th';
    var tdSelector = 'tr:nth-child(1) td';
    
    var currentSelector = '';
    
    if ($('tr:nth-child(1)', table).children().first().is('th'))
        currentSelector = thSelector;
    else
        currentSelector = tdSelector;
    
    $(this).find(currentSelector, table).each(function() {
        if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
        } else {
            colCount++;
        }
    });
	
	return colCount;
}
*/


function rebuildPageContainer() {
	var that = $('.old-pageContent');
	
	that.addClass('new-riquadro').removeClass('sfondoTabelle').removeAttr('width');
	
	that.removeClass('larghezzaInternaGrande').removeClass('larghezzaInternaPiccola');
	
	//that.wrap($('<div class="container"></div>'));
	
	// Fix problem on FireFox, where table is not 100% of the page if the data are too short
	/*
	if (that.is('table')) {
		var colSpan = countTableColumns(that);
		
		if (colSpan > 0)
			that.prepend($('<tr><td colspan="' + colSpan + '" style=" width: ' + that.width() + 'px;">&nbsp;</td></tr>'));
	}
	*/
	
	// Removes all empty rows
	$('table tr').each(function(){
		if(!$('td:not(:empty)',this).length)
			$(this).hide();
		if($('th:not(:empty)',this).length)   /* per mostrare table header dei popUp ibbweb2 */
			$(this).show();
	});
}

function rebuildPageTitle() {
	// Wraps h1 around titoloTabella text
	$('.old-pageTitle').each(function(index, element) {
		var that = $(this);
		var txt = that.text();
		
		that.addClass('titoloTabella').removeClass('titoloFiltri');
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
	$('.old-sectionTitle').each(function(index, element) {
		var that = $(this);
		//if ($('.old-sectionTitle', that).length == 0) {
			var txt = that.text();
			
			that.html('<h3 class="new-titleSection">' + txt + '</h3>');
		//}
	});
	

}

function rebuildTable(){
$('.img-asc').removeClass('img-asc').removeAttr('style').attr('src', imagePath + 'images/asc.gif');
$('.img-desc').removeClass('img-desc').removeAttr('style').attr('src', imagePath + 'images/desc.gif');
$('.img-desc-selected').removeClass('img-desc-selected').removeAttr('style').attr('src', imagePath + 'images/frecciadown-bluc.gif');	
$('.img-asc-selected').removeClass('img-asc-selected').removeAttr('style').attr('src', imagePath + 'images/frecciaup-blu.gif');
$('.oldPdfIcon').removeAttr('src').attr('src', imagePath + 'images/i_pdf.png');
$('#lastTd').removeAttr('width');
$('#toCenter').attr('style', 'text-align:center;');

}
function formatFormFields() {
	//$('td[height="1"]').height(5);
	$('td[align="right"]').removeAttr('align').addClass('oRight');
	
	$('img[src$="dummy.gif"]').remove();
	
	$('img[src$="fincatura-viola.gif"]').remove();
	
	$('input[type="text"]').addClass('new-form-control');
	$('input[type="password"]').addClass('new-form-control');
	$('textarea').addClass('new-form-control');
	$('select').addClass('new-form-control');
	
	$('select', $('.old-tabContent')).css('height', 'auto');
	
	$('input[type="text"]').addClass('new-form-control');
	
	$('.old-fieldSearch').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/ico-filter.png" class="new-search" alt="Cerca" border="0" height="20" width="20">');
	});
	
	$('.old-fieldHelp').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/i_help.png" alt="Aiuto" border="0" height="20" width="20" class="questionmark-i">');
	});
	
	$('.old-fieldCalendar').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/calendar.png" alt="Apri calendario" border="0" height="20" width="20">');
	});
	
	$('.old-fieldQuickFilter').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/i_quick-filter.png" alt="Applica filtro rapido" border="0" >');//height="20" width="20"
	});
	
	$('.old-fieldFilter').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/i_filter.png" alt="Filtri" border="0" >');//height="20" width="20"
	});
	
	$('.old-fieldRemoveFilter').each(function(index, element) {
		$(this).html('<img src="' + imagePath + 'images/i_remove-filter.png" alt="Azzera filtri" border="0" >');//height="20" width="20"
	});
	
	$('input.bottom').removeClass('bottom').addClass('btn');
	$('.sfondofiltri .btn').addClass('small');
	
	$('.new-verifica').each(function(index, element) {
		$(this).attr('src', imagePath + 'images/verifica.gif');
		$(this).attr('style','margin-left:10px');
	});
}

/*function placePageButtons() {
	
	var buttons = $('.old-buttons input').addClass('btn').removeClass('small');
	
	var btnContainer = $('<div />').addClass('new-buttons');
	//var btnContainer = $('.new-buttons');
	//$("form").insertAfter(".old-pageContent");
	$(".new-riquadro").append(btnContainer.append(buttons));
	//$("new-buttons").insertAfter(".old-pageContent");
}*/
function placePageButtons() {
	
	var buttons = $('.old-buttons input').addClass('btn').removeClass('small');
	
	var btnContainer = $('<div />').addClass('new-buttons');
	btnContainer.append(buttons).insertAfter($('.new-riquadro'));
}
function replaceFooter() {
	
	$('.old-footer').remove();
	
}


function formatTables() {
	$('.old-table').each(function(index, element) {
		var that = $(this);
		that.addClass('table');
		that.attr('cellpadding', '0').attr('cellspacing', '0');
		
		$('.sottoTitoloTabella', that).removeClass('sottoTitoloTabella').removeAttr('width');
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
	
	// replace next/prev and first/last page icons
	$('[name="paginaSuccessiva"]').attr('src', imagePath + 'images/next-page.png').attr('width', '20');
	$('[name="paginaPrecedente"]').attr('src', imagePath + 'images/prev-page.png').attr('width', '20');
	$('[name="ultimaPaginaAttiva"]').attr('src', imagePath + 'images/last-page.png').attr('width', '20');
	$('[name="primaPaginaAttiva"]').attr('src', imagePath + 'images/first-page.png').attr('width', '20');
	
	$('img[src*="frecciaup-gialla"]').attr('src', imagePath + 'images/i_sort_asc-disabled.png').attr('width', '20').addClass('right');
	$('img[src*="frecciaup-blu"]').attr('src', imagePath + 'images/i_sort_asc-enabled.png').attr('width', '20').addClass('right');
	$('img[src*="frecciadown-gialla"]').attr('src', imagePath + 'images/i_sort_desc-disabled.png').attr('width', '20').addClass('left');
	$('img[src*="frecciadown-blu"]').attr('src', imagePath + 'images/i_sort_desc-enabled.png').attr('width', '20').addClass('left');
	
	
	$('td[background]').removeAttr('background');
}


function formatTabsControl() {
	var that = $('.old-tabs');
	
	var tabPanel = $('.old-tabPanel', that);
	
	$('.sfondoTab', that).removeClass('sfondoTab');
	
	$('.old-tabContent .btn').addClass('small').addClass('center');
	
}


function initMegaMenu() {
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
}


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

function hideOldMenu(){
	$("#menu1").parent().parent().attr("height","0");
}

function formatCol(){
	$(".col-1").css("width","15%");
	$(".col-2").css("width","50%");
	$(".col-3").css("width","12%");
	$(".col-3").css("text-align","left");
	$(".col-4").css("width","33%");
	$(".col-4-but-right").css("width","33%");
	$(".col-4-but-right").css("text-align","right");
	$(".col-4-pe").css("width","33%");
	$(".col-4-pe").css("text-align","left");
	
	$(".new-search").parent().parent().css("min-width", "110px");
	/*$(".col-1").each(function(){
		$(this).html("<div style='width: 100%'>"+$(this).html()+"</div>");
	});
	$(".col-2").each(function(){
		$(this).html("<div style='width: 100%'>"+$(this).html()+"</div>");
	});
	$(".col-3").each(function(){
		$(this).html("<div style='width: 100%; text-align: right;'>"+$(this).html()+"</div>");
	});
	$(".col-4").each(function(){
		$(this).html("<div style='width: 100%'>"+$(this).html()+"</div>");
	});*/
}