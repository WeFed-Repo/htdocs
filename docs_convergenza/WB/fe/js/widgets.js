/*global setErrors, resetErrors, mailAddressValidator, openPopOverLayer */
var progressbar, result, paginator, autoCompleteRubrica,
	slideConfirm, slideError, doSlide, undoSlide;

// ***** Widget *****
var progressBar = (function() {
	
	showbar = function (pbWrap)
	{
		var pbProgress = parseFloat(pbWrap.attr("data-progress"));
		var pbIndex = $("<span>").addClass("pbIndex").html(pbProgress+"%");
		var pbBar = $("<div>").addClass("pbBar").css("width",((pbProgress>100) ? 100 : pbProgress) +"%");
		pbWrap.empty().append(pbBar,pbIndex).addClass("inited");
		
		// Se la percentuale e' maggiore di 100 appende un oggetto
		if (parseFloat(pbWrap.attr("data-progress"))>100)
		{
			// Crea il nodo col data-tooltip informativo
			// Testo del tooltip informativo (generalizzato per "ben fatto")
			var overMessage = "Il tuo obiettivo e' stato superato";
			var barAlert = $("<span>").attr("data-tooltip",overMessage).addClass("alert");
			pbIndex.append(barAlert);
			ttSet(barAlert);
		}
	};
	
	init = function ()
	{
		$.each($(".progressBar").not(".inited"),function(i,v){progressBar.showbar($(v));});
	};
	
	update = function (params)
	{
		var pbWrap = params.wrapper;
		pbWrap.attr("data-progress",params.value);
		showbar(pbWrap);
	};
	
	// Azioni onload
	$(init);
	
	return {
		init:init,
		showbar: showbar,
		update:update
	};
}());

var contestMenu = (function(){
	// Inizializzazione
	$(function(){
		$(".contestMenu .opener").click(function(){
			var icon = $(this);
			icon.next().toggle();
			icon.toggleClass("active");
		});
		
		$(".contestMenu>ul a:not('.disabled')").click(function(){
			$(".contestMenu .opener").trigger("click");
		});
	});
}());

var vTabs = (function(){
	$(function(){
		$(".vtTabs .vtMenu a").click(function(){
			var vtCont = $(".vtTabs .vtContainer");
			var vtLink = $(".vtTabs .vtMenu a");
			var vtInd = $(".vtTabs .vtMenu a").index($(this));
			vtLink.removeClass("active").eq(vtInd).addClass("active");
			vtCont.hide().eq(vtInd).show();
		});
	});
}());


result = function (params) {
	"use strict";
	var options,
		defaults = {
			container: null,
			duration: 1000,
			direction: 'top'
		},
		isSliding = false,
		// Metodi
		slideIn, slideOut, getIsSliding,
		// Oggetti del DOM
		$container, $content, $slideArr;
	// Return if is sliding
	getIsSliding = function () {
		return isSliding;
	};
	// Esegue lo slideIn
	slideIn = function ($slide, direction, duration) {
		var startStyle, endStyle;
		if (!isSliding) {
			isSliding = true;
			if (typeof direction === 'undefined') {
				direction = options.direction;
			}
			if (typeof duration === 'undefined') {
				duration = options.duration;
			}
			startStyle = {
				'width': $container.innerWidth() - 1 + 'px',
				'height': $container.innerHeight() + 'px',
				'left': '0',
				'top': '0',
				'display': 'block',
				'zIndex': 20
			};
			switch (direction) {
				case 'top':
					startStyle.top = -$container.innerHeight() + 'px';
					endStyle = { top: 0 };
					break;
				case 'bottom':
					startStyle.top = $container.innerHeight() + 'px';
					endStyle = { top: 0 };
					break;
				case 'left':
					startStyle.left = -$container.innerWidth() + 'px';
					endStyle = { left: 0 };
					break;
				case 'right':
					startStyle.left = $container.innerWidth() + 'px';
					endStyle = { left: 0 };
					break;
			}
			$slideArr.css('zIndex', 10);
			$slide.css(startStyle);
			// Lancia un evento custom per segnalare l'inizio dello slideIn
			$container.trigger(jQuery.Event('slideinstart', { slide: $slide }));
			$slide.animate(endStyle, duration);
			$content.animate({ opacity: 0 }, duration, function () {
				// Lancia un evento custom per segnalare la fine dello slideIn
				$container.trigger(jQuery.Event('slideinstop', { slide: $slide }));
				isSliding = false;
			});
		}
	};
	// Esegue lo slideOut
	slideOut = function ($slide, direction, duration) {
		var endStyle;
		if (!isSliding) {
			isSliding = true;
			if (typeof direction === 'undefined') {
				direction = options.direction;
			}
			if (typeof duration === 'undefined') {
				duration = options.duration;
			}
			switch (direction) {
				case 'top':
					endStyle = { top: -$container.innerHeight() + 'px' };
					break;
				case 'bottom':
					endStyle = { top: $container.innerHeight() + 'px' };
					break;
				case 'left':
					endStyle = { left: -$container.innerWidth() + 'px' };
					break;
				case 'right':
					endStyle = { left: $container.innerWidth() + 'px' };
					break;
			}
			// Lancia un evento custom per segnalare l'inizio dello slideOut
			$container.trigger(jQuery.Event('slideoutstart', { slide: $slide }));
			$slide.animate(endStyle, duration, function () {
				$(this).hide();
			});
			$content.animate({
				opacity: 1
			}, duration, function () {
				// Lancia un evento custom per segnalare la fine dello slideOut
				$container.trigger(jQuery.Event('slideoutstop', { slide: $slide }));
				isSliding = false;
			});
		}
	};
	// Costruttore
	options = $.extend(defaults, params);
	$container = $(options.container);
	$content = options.container.find('.res-content:first');
	$slideArr = options.container.find('.res-slide');
	// Espongo i metodi pubblici
	return {
		slideIn: slideIn,
		slideOut: slideOut,
		isSliding: getIsSliding
	};
};
paginator = function (params) {
	"use strict";
	var options,
		defaults = {
			container: null,
			items: null,
			pagerClass: 'bottom',
			page: 1,
			pageCount: 10,				// Number of items by table
			pageSizes: [10, 30, 60],	// Array of page sizes
			beforeChangePage: null
		},
		// Metodi
		getPageCount, setPageCount,
		createPager, updatePager, updatePageBtns, updatePages,
		addPagerObserver, preventClick, pageSizeClick, pageClick,
		// Oggetti del DOM
		$container, $pager, $resPagLeft, $resPagRight, $items;
	
	/***** MANAGE OPTIONS *****/
	// Get|Set number of items per page
	getPageCount = function () {
		return options.pageCount;
	};
	setPageCount = function (size) {
		try {
			size = parseInt(size, 10);
			if (isNaN(size) || $.inArray(size, [-1].concat(options.pageSizes)) === -1) {
				return;
			}
		} catch (ex) {
			return;
		}
		options.pageCount = size;
		updatePager();
		updatePages();
	};
	
	/***** MANAGE DOM *****/
	// createPager -- creates the HTML elements for the pagination tool
	createPager = function () {
		var pagSizeInd;
		$pager = $('<div>').attr({ 'class': 'resPag ' + options.pagerClass });
		$container.append($pager);
		if (options.pageSizes && options.pageSizes.length) {
			$resPagLeft = $('<div>').attr({ 'class': 'resPagLeft' }).append('<span>Vedi</span>');
			pagSizeInd = $.inArray(options.pageCount, options.pageSizes);
			if (pagSizeInd === -1) {
				pagSizeInd = 0;
			}
			$.each(options.pageSizes, function (index, item) {
				var pageSize = $('<a>', { href: '#' }).html(item);
				if (index === pagSizeInd) {
					pageSize.addClass('active');
				}
				$resPagLeft.append(pageSize);
			});
			$resPagLeft.append($('<a>', { href: '#' }).attr({ 'class': 'all' }).html('tutti'));
			$pager.append($resPagLeft);
		}
		$resPagRight = $('<div>').attr({ 'class': 'resPagRight' })
			.append('<span><strong class="numResults"></strong>&nbsp;risultati</span>')
			.append($('<div>').attr({ 'class': 'pulsantiera' })
				.append($('<a>', { href: '#' }).attr({ 'class': 'nobutt' }).html('&lt;&lt;'))
				.append($('<a>', { href: '#' }).attr({ 'class': 'nobutt' }).html('&lt;'))
				.append($('<a>', { href: '#' }).attr({ 'class': 'active' }).html('1'))
				.append($('<a>', { href: '#' }).html('2'))
				.append($('<a>', { href: '#' }).html('3'))
				.append($('<a>').attr({ href: '#', 'class': 'nobutt' }).html('&gt;'))
				.append($('<a>').attr({ href: '#', 'class': 'nobutt' }).html('&gt;&gt;'))
			);
		$pager.append($resPagRight);
		updatePager();
	};
	updatePager = function () {
		var pulsantiere = $resPagRight.find('.pulsantiera');
		$pager.find('.resPagRight span strong').html($items.length);
		if ($items.length > options.pageSizes[0]) {
			$resPagLeft.show();
		} else {
			$resPagLeft.hide();
		}
		if (options.pageCount === -1) {
			pulsantiere.hide();
			options.pages = 1;
			options.page = 1;
		} else {
			options.pages = Math.ceil($items.length / options.pageCount);
			if (options.pages === 0) {
				options.page = 0;
			} else {
				options.page = 1;
			}
			// If there are two or more pages, shows pagination
			if (options.pages > 1) {
				$resPagRight.each(function (index, item) {
					item = $(item);
					var pageBtn4Vis = (options.pages > 2) ? 'visible' : 'hidden';
					// If there are only two pages, hides the right button
					item.find('.pulsantiera').show().find('a').eq(4).css({ visibility: pageBtn4Vis });
					// updates the label with the number of records
					item.find('span strong').eq(0).html($items.length);
				});
				updatePageBtns();
			} else {
				pulsantiere.hide();
			}
		}
	};
	// updatePageBtns -- updates numbers in page button and highlights the selected button.
	updatePageBtns = function () {
		$resPagRight.each(function (index, item) {
			item = $(item);
			var pageBtns = item.find('.pulsantiera a');
			pageBtns.removeClass('active');
			// Shows arrows
			$.each([0, 1, 5, 6], function (index, item) { pageBtns.eq(item).removeClass('off'); });
			// Case when is selected the first page
			if (options.page === 1) {
				pageBtns.eq(0).addClass('off');
				pageBtns.eq(1).addClass('off');
				pageBtns.eq(2).html(1).addClass('active');
				pageBtns.eq(3).html(2);
				// Case when there are more than 2 pages
				if (options.pages > 2) { pageBtns.eq(4).html(3); }
			}
			// Case when is selected the last page
			else if (options.page === options.pages) {
				// Case when there are only 2 pages
				if (options.pages === 2) {
					pageBtns.eq(2).html(options.pages - 1);
					pageBtns.eq(3).html(options.pages).addClass('active');
				}
				else {
					pageBtns.eq(2).html(options.pages - 2);
					pageBtns.eq(3).html(options.pages - 1);
					pageBtns.eq(4).html(options.pages).addClass('active');
				}
				pageBtns.eq(5).addClass('off');
				pageBtns.eq(6).addClass('off');
			}
			// Case when is selected a page in the middle
			else {
				pageBtns.eq(2).html(options.page - 1);
				pageBtns.eq(3).html(options.page).addClass('active');
				pageBtns.eq(4).html(options.page + 1);
			}
		});
	};
	updatePages = function () {
		var filter;
		if (typeof options.beforeChangePage === "function") {
			options.beforeChangePage();
		}
		if (options.pageCount === -1) {
			$items.show();
		} else {
			filter = ':lt(' + (options.page * options.pageCount) + ')';
			if (options.page > 1) {
				filter += ':gt(' + (((options.page - 1) * options.pageCount) - 1) + ')';
			}
			$items.hide().filter(filter).show();
		}
	};
	
	/***** MANAGE HANDLERS *****/
	// Prevent default click behaviour
	preventClick = function (e) {
		e.preventDefault();
		e.stopPropagation();
	};
	// addPagerObserver -- binds the event handlers to the events associated with pager only
	addPagerObserver = function () {
		$pager.each(function (index, item) {
			item = $(item);
			var pageSizeBtns = item.find('.resPagLeft a'),
				pageBtns = item.find('.resPagRight .pulsantiera a');
			pageSizeBtns.eq(0).click(function (e) { preventClick(e); pageSizeClick(e, options.pageSizes[0]); });
			pageSizeBtns.eq(1).click(function (e) { preventClick(e); pageSizeClick(e, options.pageSizes[1]); });
			pageSizeBtns.eq(2).click(function (e) { preventClick(e); pageSizeClick(e, options.pageSizes[2]); });
			pageSizeBtns.eq(3).click(function (e) { preventClick(e); pageSizeClick(e, -1); });
			// left arrows
			pageBtns.eq(0).click(function (e) { preventClick(e); pageClick(e, -3); });
			pageBtns.eq(1).click(function (e) { preventClick(e); pageClick(e, -2); });
			// page buttons
			pageBtns.eq(2).click(function (e) { preventClick(e); pageClick(e, -1); });
			pageBtns.eq(3).click(function (e) { preventClick(e); pageClick(e, 0); });
			pageBtns.eq(4).click(function (e) { preventClick(e); pageClick(e, 1); });
			// right arrows
			pageBtns.eq(5).click(function (e) { preventClick(e); pageClick(e, 2); });
			pageBtns.eq(6).click(function (e) { preventClick(e); pageClick(e, 3); });
		});
	};
	// pageSizeClick -- event handler for when the user clicks on a page size button.
	// param e: event that triggered handler
	pageSizeClick = function (e, size) {
		if (size === options.pageCount) {
			return;
		}
		var btnInd = $.inArray(e.target, $(e.target).closest('div').find('a'));
		$resPagLeft.each(function (index, item) {
			item = $(item);
			var pageSizeBtns = item.find('a');
			pageSizeBtns.removeClass('active');
			pageSizeBtns.eq(btnInd).addClass('active');
		});
		setPageCount(size);
	};
	// pageClick -- handler for pagination.
	// It supports first, last, next and previous operations on the pages.
	// param e: the event that triggered the handler
	pageClick = function (e, diff) {
		// Prevents clicking on turned off buttons
		if ($(e.target).hasClass('off')) {
			return;
		}
		switch (diff) {
			case -3:
				options.page = 1;
				break;
			case -2:
				options.page -= 1;
				break;
			case -1:
				// click on the left page button
				// If the previous page selected is the first one, remains in the same page
				if (options.page === 1) {
					return;
				}
				// If the previous page selected is the last one, decrements by 2
				if (options.page === options.pages) {
					options.page -= 2;
				} else {
					options.page -= 1;
				}
				if (options.page < 1) {
					options.page = 1;
				}
				break;
			case 0:
				// click on the middle page button
				// If the previous page selected is the first one, increments the page index
				if (options.page === 1) {
					options.page += 1;
				}
				// If there are more than two pages and the previous page selected is the last one, decrements the page index
				else if (options.pages > 2 && options.page === options.pages) {
					options.page -= 1;
				}
				// Otherwise, remains in the same page
				else {
					return;
				}
				break;
			case 1:
				// click on the right page button
				// If the previous page selected is the last one, remains in the same page
				if (options.page === options.pages) {
					return;
				}
				// If the previous page selected is the first one, increments by 2
				if (options.page === 1) {
					options.page += 2;
				} else {
					options.page += 1;
				}
				if (options.page > options.pages) {
					options.page = options.pages;
				}
				break;
			case 2:
				options.page += 1;
				break;
			case 3:
				options.page = options.pages;
				break;
		}
		updatePageBtns();
		updatePages();
	};
	
	/***** CONSTRUCTOR *****/
	options = $.extend(defaults, params);
	$container = $(options.container);
	$items = $(options.items);
	options.pages = Math.ceil($items.length / options.pageCount);
	createPager();
	addPagerObserver();
	updatePages();
	
	/***** PUBLIC METHODS *****/
	return {
		getPageCount: getPageCount,
		setPageCount: setPageCount,
		updatePager: updatePager
	};
};
autoCompleteRubrica = function (params) {
	"use strict";
	var // Proprietà
		defaults = {
			data: null,
			container: null,
			overlay: null
		},
		options,
		expandedWrap = false,
		enteredEmail = [],
		placeholderMsg = 'Inserisci gli indirizzi email separati da una virgola',
		// Oggetti del DOM
		$overlay, $container, $hiddenInput,
		$addressWrap, $addressBox, $addressInput, $autocompleteInput,
		$addressBookBtn, $addressBookBox, $addressBookInput, $addressBookSubmit,
		// Metodi
		filterResults, filterResultsRubrica, filterResultsAutoComplete,
		stylingResults, stylingResultsAutoComplete,
		getVal, setVal, enable, disable,
		addEmail, removeEmail, checkBoxSize, checkErrors;
	
	/***** METODI *****/
	// Gestione blocchi email
	addEmail = function (label, value) {
		if ($.inArray(value, enteredEmail) === -1) {
			enteredEmail.push(value);
			$hiddenInput.val(enteredEmail.join(','));
			$addressInput.width(3).val('');
			$addressInput.before('<span class="addressItem" data-value="' + value + '">' + label + '&nbsp;<i class="icon-minus-sign"></i></span>');
			checkBoxSize();
		}
		if (enteredEmail.length) {
			$addressInput.attr('placeholder', '');
		}
		$addressInput.trigger('focus');
	};
	removeEmail = function (value) {
		var addressItem, index, press;
		if (!$addressInput.prop('disabled')) {
			index = $.inArray(value, enteredEmail);
			if (index > -1) {
				addressItem = $addressBox.find('.addressItem[data-value="' + $.trim(value) + '"]');
				enteredEmail.splice(index, 1);
				$hiddenInput.val(enteredEmail.join(','));
				addressItem.remove();
				checkBoxSize();
				if (!enteredEmail.length) {
					$addressInput.attr('placeholder', placeholderMsg);
				}
				press = jQuery.Event("keyup");
				press.ctrlKey = false;
				press.which = 40;
				$addressInput.trigger('focus').trigger(press);
			}
		}
	};
	// Gestione scrollbar verticale
	checkBoxSize = function () {
		if ($addressBox.height() > 95) {
			expandedWrap = true;
		} else {
			expandedWrap = false;
		}
		if (expandedWrap) {
			$addressWrap.scrollTop(9999);
		}
	};
	// Stilizzazione risultati
	stylingResultsAutoComplete = function (ul, item) {
		var resArr, resLabel, resValue;
		resArr = stylingResults(item.label, item.value, $addressInput.val());
		resLabel = resArr[0];
		resValue = resArr[1];
		return $("<li></li>")
			.data("item.autocomplete", item)
			.append("<a class='autocomplete_link'><span class=\"autocomplete_label\">" + resLabel + "<br>" + resValue + "</span>" +
					"<span class=\"autocomplete_icon\"><i class=\"icon-plus-sign\"></i></span></a>")
			.appendTo(ul);
	};
	// Evidenziazione stringa ricercata
	stylingResults = function (label, value, term) {
		var resArr = [],
			x = new RegExp($.ui.autocomplete.escapeRegex(term), 'i');
		resArr[0] = label.replace(x, function (Match) {
			return '<strong>' + Match + '</strong>';
		});
		// Se non ho matchato con il nome, provo a matchare con l'email
		if (resArr[0] === label) {
			resArr[1] = value.replace(x, function (Match) {
				return '<strong>' + Match + '</strong>';
			});
		} else {
			resArr[1] = value;
		}
		return resArr;
	};
	// Filtro risultati in base alla ricerca
	filterResultsAutoComplete = function (req, responseFn) {
		responseFn(filterResults(options.data, req.term, true));
	};
	// Filtro rubrica
	filterResultsRubrica = function () {
		var term = $addressBookInput.val(),
			data = filterResults(options.data, term, false),
			$tbody = $addressBookBox.find('tbody').empty(),
			oldFirstChar = '';
		$.each(data, function (index, item) {
			var $addressBookRow,
				firstChar = item.value[0].toUpperCase(),
				checked = ($.inArray(item.value, enteredEmail) !== -1),
				resArr;
			resArr = stylingResults(item.label, item.value, term);
			if (oldFirstChar !== firstChar) {
				$tbody.append(
					'<tr class="addressBookCharRow">' +
						'<td colspan="2">' + firstChar + '</td>' +
					'</tr>'
				);
				oldFirstChar = firstChar;
			}
			$addressBookRow = $(
				'<tr class="addressBookRow">' +
					'<td><input type="checkbox" class="addressBookCbx" value="' + item.label + '###' + item.value + '###' + checked + '"></td>' +
					'<td>' + resArr[0] + '<br>' + resArr[1] + '</td>' +
				'</tr>'
			);
			$tbody.append($addressBookRow);
			$addressBookRow.find('input[type=checkbox]').prop('checked', checked);
		});
	};
	// Filtro risultati
	filterResults = function(data, term, skipEntered) {
		var re = $.ui.autocomplete.escapeRegex(term), matcherIn, a = [];
		if (re !== '@') {
			matcherIn = new RegExp(re, 'ig');
			a = $.grep(data, function (item) {
				return ((!skipEntered || $.inArray(item.value, enteredEmail) === -1)) &&
						((matcherIn.test(item.label)) || (matcherIn.test(item.value)));
			});
		} else {
			a = data;
		}
		return a;
	};
	// Controllo errori
	checkErrors = function (errors) {
		var val = $addressInput.val();
		if (val !== '' && !mailAddressValidator(val)) {
			errors.push({ field: $addressInput, text: "Email non valida" });
		} else if ($hiddenInput.val() === '') {
			errors.push({ field: $addressInput, text: "Per proseguire inserisci un indirizzo email valido." });
		}
		return errors;
	};
	getVal = function () {
		return $hiddenInput.val();
	};
	// emails = lista email separate da virgola
	setVal = function (emails) {
		if (typeof emails === 'string') {
			$.each(emails.split(','), function () {
				var email = $.trim(this);
				addEmail(email, email);
			});
		}
	};
	enable = function () {
		$addressInput.prop('disabled', false);
	};
	disable = function () {
		$addressInput.prop('disabled', true);
	};
	
	/***** INIZIALIZZAZIONE *****/
	options = $.extend(defaults, params);
	$hiddenInput = $(options.input);
	$container = $(options.container);
	$addressWrap = $container.find(".addressWrap");
	$addressBox = $container.find(".addressBox");
	$addressInput = $container.find(".addressInput").attr('placeholder', placeholderMsg);
	$autocompleteInput = $container.find(".autocompleteInput");
	$addressBookBtn = $container.find(".addressBookBtn");
	$overlay = $(options.overlay);
	$addressBookBox = $overlay.find(".addressBookBox");
	$addressBookInput = $overlay.find(".addressBookInput");
	$addressBookSubmit = $overlay.find(".addressBookSubmit");
	// Inizializzazione autocomplete
	$autocompleteInput.autoComplete(options.data, {
		selectable: false,
		clearable: false,
		numResults: 5,
		filter: filterResultsAutoComplete,
		renderItem: stylingResultsAutoComplete
	}).autocomplete().on('autocompleteselect', function (event, ui) {
		event.stopImmediatePropagation();
		addEmail(ui.item.label, ui.item.value);
		return false;
	});
	
	/***** GESTORI EVENTI *****/
	// Bottone rubrica
	$addressBookBtn.attr("title","Rubrica");
	$addressBookBtn.click(function () {
		if (!$addressInput.prop('disabled')) {
			$addressBookInput.val('');
			filterResultsRubrica();
			openPopOverLayer($overlay.attr('id'), 'fixed');
		}
	});
	// Tabella rubrica 'input[type=checkbox]'
	$addressBookBox.on('click', 'input[type=checkbox]', function (event) {
		event.stopPropagation();
	}).on('click', '.addressBookRow', function () {
		var cbx = $(this).find('input[type=checkbox]');
		cbx.prop('checked', !cbx.prop('checked'));
	}).on('mouseover', '.addressBookRow', function () {
		$(this).addClass('over');
	}).on('mouseout', '.addressBookRow', function () {
		$(this).removeClass('over');
	});
	// Submit rubrica
	$addressBookSubmit.click(function () {
		$addressBookBox.find('input[type=checkbox]').each(function () {
			var cbx = $(this),
				valueArr = cbx.val().split('###'),
				oldChecked = (valueArr[2] === 'true'),
				checked = cbx.prop('checked');
			if (checked && !oldChecked) {
				addEmail(valueArr[0], valueArr[1]);
			} else if (!checked && oldChecked) {
				removeEmail(valueArr[1]);
			}
		});
		$overlay.find(".handle img").trigger('click');
	});
	// Input di ricerca
	$addressBookInput.keyup(function () {
		filterResultsRubrica();
	});
	// Input di ricerca
	$addressInput.blur(function () {
		var val = $(this).val();
		if (val !== '') {
			if (mailAddressValidator(val)) {
				addEmail(val, val);
			}
		}
	}).keydown(function (event) {
		var val = $(this).val(), code = event.which, menu;
		if ($.inArray(code, [13, 32, 188]) !== -1) { // invio, spazio o virgola
			event.preventDefault();
			event.stopImmediatePropagation();
			menu = $('.ui-autocomplete');
			if (menu.is(':visible')) {
				menu.find('.ui-state-focus').trigger('click');
			} else {
				if (mailAddressValidator(val)) {
					addEmail(val, val);
				}
			}
		} else if (code === 8 && !val) { // Backspace
			removeEmail($addressBox.find('.addressItem').last().attr('data-value'));
		} else if (code === 38 || code === 40) { // freccia su e giù
			$autocompleteInput.trigger(event);
		}
	}).keyup(function (event) {
		var el = $(this), val = el.val(), code = event.which;
		if ($.inArray(code, [13, 32, 38, 40]) === -1) {
			if (val) {
				checkBoxSize();
				$autocompleteInput.autocomplete("search", val);
			} else {
				$autocompleteInput.autocomplete("close");
			}
		}
	}).focus(function () {
		var el = $(this), val = el.val(), len;
		if (val) {
			if (this.setSelectionRange) {
				// ... then use it (Doesn't work in IE)
				// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
				len = val.length * 2;
				this.setSelectionRange(len, len);
			} else {
				// ... otherwise replace the contents with itself
				// (Doesn't work in Google Chrome)
				el.val(val);
			}
			$autocompleteInput.autocomplete("search", val);
		}
	}).blur(function () {
		$autocompleteInput.trigger('blur');
	});
	// Cancellazione indirizzi aggiunti
	$addressBox.click(function (event) {
		var el = $(event.target);
		if (el.hasClass('icon-minus-sign')) {
			removeEmail(el.closest('.addressItem').attr('data-value'));
			event.stopImmediatePropagation();
		} else {
			$addressInput.trigger('focus');
		}
	});

	/***** METODI PUBBLICI *****/
	return {
		checkErrors: checkErrors,
		getVal: getVal,
		setVal: setVal,
		enable: enable,
		disable: disable
	};
};

// ***** Metodi animazioni dispositive *****
// Slide conferma
slideConfirm = function (wrapper, slide) {
	"use strict";
	doSlide(wrapper, slide);
};

// Slide errore
slideError = function (wrapper, slide, errMsg) {
	"use strict";
	slide.find('.boxesito .text .msg').html(errMsg);
	doSlide(wrapper, slide);
};

// Esegue lo slide
doSlide = function (wrapper, slide, duration) {
	"use strict";
	var overflow = wrapper.closest('.contOverflow, .contOverflow2');
	if (typeof duration === 'undefined') {
		duration = 300;
	}
	overflow.css({
		'overflow': 'hidden'
	});
	slide.find('.boxesito').css({
		'height': wrapper.height() + 'px'
	});
	slide.css({
		'width': wrapper.width() - 1 + 'px',
		'top': wrapper.height() + 'px',
		'left': '0',
		'display': 'block'
	}).animate({
		top: '0'
	}, duration);
	wrapper.find('.BoxTrasferisci').animate({
		opacity: 0
	}, duration);
};

// Esegue lo slide
undoSlide = function (wrapper, slide, duration) {
	"use strict";
	if (typeof duration === 'undefined') {
		duration = 300;
	}
	slide.animate({
		top: wrapper.height() + 'px'
	}, duration, function () {
		$(this).hide();
		wrapper.closest('.contOverflow, .contOverflow2').css({
			'overflow': 'visible'
		});
	});
	wrapper.find('.BoxTrasferisci').animate({
		opacity: 1
	}, duration);
};
