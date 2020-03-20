/**
 * @author Andrea Colanicchia - Thera
 * 
 * Based on work by Gregory SCHURGAST (http://www.negko.com, http://prototools.negko.com)
 */
/*global $, jqAJAXCall, excludeSymbol, profiloConsultare */
function TableOrderer (suffixPar, optionsPar) {
	"use strict";
	/*#REGION# CREATE/UPDATE TABLE ***/
	var suffix, options, tools, msgs, table, thead, tbody, tableFieldsToShow, thSortable, sortTypes, formatTypes, groupingRows, orderLevel, orderGrouped,
		data, cache, isCached, container, orderField, orderDir, thClickbfx, isOutputData, isUpdating, pagingBoxArr, headerObserverArr = [], rowObserverArr = [],
		// Methods
		initialize, perform, createTable, updateTable, createRows, createRow, addPagerObserver, addHeaderObservers, addHeaderObserver, addRowsObservers, addRowsObserver,
		createPager, updatePager, updatePageBtns, changePageSize, getData, setData, updateData, updateDataFromURL, clearCache, thClick, trClick, trOver, trOut,
		pageSizeClick, pageClick, orderTable, doOrder, defineOrderCol, defineOrderField, defineOrderDir, orderData, orderOutput, previousOrderField,
		getValueToOrder, getDataToOrder, getOutputToOrder, sorter, formatter, filterData, testFilter, addFilter, delFilter, resetFilters,
		getCachedData, getColField, getField, getPageCount, capitalizeFL, decapitalizeFL, extractPercent, extractSubPercent, addSignColor, orderNaN, pad, preventClick,
		getCustomValueToOrder, getCustomDataToOrder, setPageCount, setSelected;
	initialize = function (suffixPar, optionsPar) {
		suffix = suffixPar;
		// Gets options settings
		options = $.extend({
			data: null,// array of data
			url: null,					// url to a JSON application containing the data
			pageCount: 0,				// Number of items by table
			pageSizes: [15, 30, 60],	// Array of page sizes
			paginate: false,			// show Paginate Option. Default false
			cellsClasses: [],
			classTrOver: '',
			pagerShow: 'both'			// Di default mostra entrambi i paginatori (e' possibile selezionare top, bottom, o entrambi (both))
		}, optionsPar || {});
		if (options.paginate && !options.pageCount) {
			options.pageCount = options.pageSizes[0];
		}
		// Saves tool state data for pagination, filtering and searching.
		tools = {
			page: 1,					// for pagination
			pages: 1,					// for pagination
			filterObj: {},				// for filtering
			filterNum: 0
		};
		// Separates text messages out
		msgs = $.extend({
			loading: 'Caricamento...',
			emptyResults: 'Nessun risultato trovato',
			errorURL: 'Dati non validi',
			errorData: 'Nessun dato',
			paginationFirst: '<<',
			paginationPrev: '<',
			paginationNext: '>',
			paginationLast: '>>'
		}, options.msgs || {});
		// Initializes global object variables
		table = $('#tb-' + suffix);
		thead = table.find('thead:first');
		tbody = table.find('tbody:first');
		tableFieldsToShow = [];
		thSortable = [];
		sortTypes = [];
		formatTypes = [];
		orderGrouped = false;
		cache = [];				// for caching capabilities
		isCached = false;			// for caching capabilities
		container = $(suffix);
		orderField = -1;
		orderDir = 'asc';
		thClickbfx = thClick;
		isOutputData = (!options.data && !options.url);
		isUpdating = false;
		if (thead.length) {
			thead.find('th').each(function (index, th) {
				var thField, thContent, thSort;
				th = $(th);
				thField = getField(th);
				if (thField) {
					thContent = th.html();
					thSort = th.attr('sort');
					tableFieldsToShow.push(thField);
					formatTypes.push(th.attr('format'));
					if (thSort !== 'none') {
						thSortable.push(th[0]);
						sortTypes.push(thSort);
						if (thSort) {
							th.addClass('sort');
							if (!th.find('span:first').length) {
								th.html($('<a>').attr({ 'class': 'sortDir', 'href': '#' }).html(thContent));
							}
						}
					} else {
						thSortable.push(null);
						sortTypes.push('none');
						th.addClass('unsort');
					}
				} else {
					th.addClass('unsort');
				}
			});
		}
		setData(true);
	};
	// perform -- performs any inital operations needed to create the table after the data has been loaded.
	perform = function () {
		if (!isOutputData) {
			tools.pages = (options.pageCount === -1)? 1 : Math.ceil(data.length / options.pageCount);
			clearCache(false);
		}
		createTable();				
		
	};
	// createTable -- creates the inital table being ran just once. It writes out the HTML elements for the table and tools interface (i.e. pagination).
	createTable = function () {
		if (!isOutputData) {
			tbody.html('');
			if (options.paginate) {
				createPager(options.pagerShow);
				addPagerObserver();
			}
			createRows();
		}
		addHeaderObservers();
		addRowsObservers();
	};
	// updateTable -- updates just the table data, writting out the updated rows to the user and recreating the th cells in the process.
	updateTable = function () {
		tbody.html('');
		createRows();
		addRowsObservers();
		
		
	};
	// createRows -- this is really the heart of the script. createRows takes the data  in cache passes it through the filter tool, then passes it through the search tool and
	// finally paginates the results displaying (creating rows) only the current page. if no records result then a message is displayed to the user. this always uses the cache
	// and never data directly
	createRows = function () {
		var line = 1, display, enddisplay, startdisplay, dataView, row, s;
		// data -> { filter } -> dataView -> { paginate } -> display
		dataView = $.extend(true, [], cache);
		// if filtering is turned off or not currently being used then skip
		if (tools.filterNum && !isCached && tools.filterData !== '') {
			dataView = [];
			$.each(cache, function (index, rec) {
				if (!testFilter(tools.filterObj, rec)) {
					dataView.push(rec);
				}
			});
		}
		display = $.extend(true, [], dataView);
		if (options.paginate) {
			updatePager(dataView);
			if (tools.pages > 1) {
				// Instead of displaying all, just display a "paginate window" to the user.
				startdisplay = options.pageCount * (tools.page - 1);
				enddisplay = options.pageCount * tools.page;
				display = dataView.slice(startdisplay, enddisplay);
			}
		} else if (options.pageCount > 0) {
			display = dataView.slice(0, options.pageCount);
		}
		// if there are no results
		if (display.length === 0) {
			s = tableFieldsToShow.length;
			row = '<tr class="data line0" id="tr-' + suffix + '-0">\n';
			row += '\t<td class="col-' + suffix + '" colspan="' + s + '">' + msgs.emptyResults + '</td>\n';
			row += '\n</tr>';
			tbody.append(row);
		} else {
			$.each(display, function (index, i) {
				tbody.append(createRow(i, index));
				line = (line === 1) ?  2 : 1;
			});
		}
		if (orderField >= 0) {
			$.each(thSortable, function (index, item) {
				if (item) {
					item = $(item);
					item.removeClass('asc').removeClass('desc');
					if (orderField === index) { item.addClass(orderDir); }
				}
			});
		}
		// the new dataView is set as the cache
		if (!isCached) {
			isCached = true;
			cache = $.extend(true, [], dataView);
		}
	};
	// createRow -- writes out the HTML for a row using the data in @obj and applies the correct class styles associated with its @index
	// param obj: holdes the data of the row
	// param index: which index row this obj is in context to the table
	createRow = function (obj, index) {
		var line = index % 2,
			classPari = index % 2? ' pari' : ' dispari',
			row = '<tr class="data line' + line + classPari + '" id="tr-' + suffix + '-' + index + '">\n';
		$.each(tableFieldsToShow, function (n, s) {
			var cellClasses = (options.cellsClasses.length === 0) ? '' : ' ' + options.cellsClasses[n],
				formatType = (formatTypes.length === 0) ? null : formatTypes[n],
				formatFunc = $.isFunction(window['format_' + formatType])? window['format_' + formatType] : formatter[formatType],
				objVal = (obj[s] !== null)? obj[s] : '',
				value = (formatType)? formatFunc(objVal, obj, cache) : objVal;
			row += '\t<td class="col-' + s + cellClasses + '">' + value + '</td>\n';
		});
		row += '\n</tr>';
		return row;
	};
	// addPagerObserver -- binds the event handlers to the events associated with pager only
	addPagerObserver = function () {
		pagingBoxArr.each(function (index, item) {
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
	// addHeaderObservers -- binds event handlers to the events associated with the columns headers.
	addHeaderObservers = function () {
		if (thead) {
			thead.find('th').each(function (index, th) {
				th = $(th);
				var ind = $.inArray(th[0], thSortable);
				if (ind > -1 && sortTypes[ind] !== null) { th.click(thClickbfx); }
				else { th.addClass('unsort'); }
			});
		}
	};
	addHeaderObserver = function (func) {
		if ($.isFunction(func)) {
			headerObserverArr.push(func);
		}
	};
	// addRowsObservers -- binds event handlers to the events associated with the rows generated.
	addRowsObservers = function () {
		table.find('tr.data')
			.mouseover(trOver)
			.mouseout(trOut)
			.click(trClick);
	};
	addRowsObserver = function (func) {
		if ($.isFunction(func)) {
			rowObserverArr.push(func);
		}
	};
	/*#ENDREGION# CREATE/UPDATE TABLE ***/
	/*#REGION# CREATE/UPDATE PAGER ***/
	// createPager -- creates the HTML elements for the pagination tool
	createPager = function (pagerShow) {
		table.before($('<div>').attr({ 'class': 'resPag top' }));
		table.after($('<div>').attr({ 'class': 'resPag bottom' }));
		
		pagingBoxArr = table.prev().add(table.next());
		var resPagTop = table.prev(), resPagLeft, pagSizeInd;
		if (options.pageSizes && options.pageSizes.length) {
			resPagLeft = $('<div>').attr({ 'class': 'resPagLeft' }).append('<span>Vedi</span>');
			pagSizeInd = $.inArray(options.pageCount, options.pageSizes);
			if (pagSizeInd === -1) {
				pagSizeInd = 0;
			}
			$.each(options.pageSizes, function (index, item) {
				var pageSize = $('<a>', { href: '#' }).html(item);
				if (index === pagSizeInd) {
					pageSize.addClass('active');
				}
				resPagLeft.append(pageSize);
			});
			resPagLeft.append($('<a>', { href: '#' }).attr({ 'class': 'all' }).html('tutti'));
			resPagTop.append(resPagLeft);
		}
		resPagTop.append($('<div>').attr({ 'class': 'resPagRight' })
			.append('<span><strong class="numResults">320</strong> risultati</span>')
			.append($('<div>').attr({ 'class': 'pulsantiera' })
				.append($('<a>', { href: '#' }).attr({ 'class': 'nobutt' }).html('&lt;&lt;'))
				.append($('<a>', { href: '#' }).attr({ 'class': 'nobutt' }).html('&lt;'))
				.append($('<a>', { href: '#' }).attr({ 'class': 'active' }).html('1'))
				.append($('<a>', { href: '#' }).html('2'))
				.append($('<a>', { href: '#' }).html('3'))
				.append($('<a>').attr({ href: '#', 'class': 'nobutt' }).html('&gt;'))
				.append($('<a>').attr({ href: '#', 'class': 'nobutt' }).html('&gt;&gt;'))
			)
		);
		table.next().html(resPagTop.html());
		
		// Mostra o nasconde i paginatori a seconda della selezione
		if (pagerShow === "top") { $(".resPag.bottom").hide(); }
		if (pagerShow === "bottom") { $(".resPag.top").hide(); }
	};
	updatePager = function (data) {
		var resPagLeft = pagingBoxArr.find('.resPagLeft'), resPagRight = pagingBoxArr.find('.resPagRight'), pulsantiere = resPagRight.find('.pulsantiera');
		pagingBoxArr.find('.resPagRight span strong').html(data.length);
		if (data.length > 10) {
			resPagLeft.show();
		} else {
			resPagLeft.hide();
		}
		if (options.pageCount === -1) {
			pulsantiere.hide();
			tools.pages = 1;
			tools.page = 1;
		} else if (!isCached) {
			tools.pages = Math.ceil(data.length / options.pageCount);
			if (tools.pages === 0) {
				tools.page = 0;
			} else {
				tools.page = 1;
			}
			// If there are two or more pages, shows pagination
			if (tools.pages > 1) {
				resPagRight.each(function (index, item) {
					item = $(item);
					var pageBtn4Vis = (tools.pages > 2) ? 'visible' : 'hidden';
					// If there are only two pages, hides the right button
					item.find('.pulsantiera').show().find('a').eq(4).css({ visibility: pageBtn4Vis });
					// updates the label with the number of records
					item.find('span strong').eq(0).html(data.length);
				});
				updatePageBtns();
			} else {
				pulsantiere.hide();
			}
		}
	};
	// updatePageBtns -- updates numbers in page button and highlights the selected button.
	// param pageBtns: array of page button elements
	updatePageBtns = function () {
		pagingBoxArr.find('.resPagRight').each(function (index, item) {
			item = $(item);
			var pageBtns = item.find('.pulsantiera a');
			pageBtns.removeClass('active');
			// Shows arrows
			$.each([0, 1, 5, 6], function (index, item) { pageBtns.eq(item).removeClass('off'); });
			// Case when is selected the first page
			if (tools.page === 1) {
				pageBtns.eq(0).addClass('off');
				pageBtns.eq(1).addClass('off');
				pageBtns.eq(2).html(1).addClass('active');
				pageBtns.eq(3).html(2);
				// Case when there are more than 2 pages
				if (tools.pages > 2) { pageBtns.eq(4).html(3); }
			}
			// Case when is selected the last page
			else if (tools.page === tools.pages) {
				// Case when there are only 2 pages
				if (tools.pages === 2) {
					pageBtns.eq(2).html(tools.pages - 1);
					pageBtns.eq(3).html(tools.pages).addClass('active');
				}
				else {
					pageBtns.eq(2).html(tools.pages - 2);
					pageBtns.eq(3).html(tools.pages - 1);
					pageBtns.eq(4).html(tools.pages).addClass('active');
				}
				pageBtns.eq(5).addClass('off');
				pageBtns.eq(6).addClass('off');
			}
			// Case when is selected a page in the middle
			else {
				pageBtns.eq(2).html(tools.page - 1);
				pageBtns.eq(3).html(tools.page).addClass('active');
				pageBtns.eq(4).html(tools.page + 1);
			}
		});
	};
	// changePageSize -- change the number of record per page and update the table
	// param size: number of records per page
	changePageSize = function (size) {
		try {
			size = parseInt(size, 10);
			if ((size !== -1) && $.inArray(size, options.pageSizes) === -1) {
				return;
			} else {
				options.pageCount = size;
			}
		} catch (ex) {
			return;
		}
		clearCache(true);
	};
	/*#ENDREGION# CREATE/UPDATE PAGER ***/
	/*#REGION# INITIALIZE/UPDATE DATA ***/
	// getData -- gets table data from a @url. The header response from the URL must be application/json
	// param url: URL from where the total table data resides.
	getData = function (url, firstTime) {
		jqAJAXCall('POST', 'json', url,
			function (json) {
				data = json.data;
				if (firstTime) {
					perform();
				} else {
					clearCache(true);
				}
			},
			function () { $(suffix).html(msgs.loading); },
			null
		);
	};
	// setData -- determines if the data is coming from a URL or from a json string on the page.
	setData = function (firstTime) {
		if (!isOutputData) {
			if (options.data) {
				if (!options.paginate && options.pageCount > 0) {
					data = options.data.slice(0, options.pageCount);
				} else {
					data = options.data;
				}
				if (firstTime) {
					perform();
				}
			} else {
				getData(options.url, firstTime);
			}
		} else if (firstTime) {
			perform();
		}
	};
	updateData = function (json) {
		if (json) {
			options.data = json;
			setData(false);
			clearCache(true);
		}
	};
	updateDataFromURL = function (url) {
		if (url) {
			getData(url, false);
		}
	};
	// clearCache -- Replaces cache with orginal data loaded into the table.
	clearCache = function (order) {
		isCached = false;
		cache = $.extend(true, [], data);
		// Clearing the cache does not clear any ordering done on the data,
		// just operations that remove records from the user's view (i.e. filtering)
		if (order) {
			doOrder();
		}
	};
	/*#ENDREGION# INITIALIZE/UPDATE DATA ***/
	/*#REGION# EVENT HANDLERS ***/
	// thClick -- event handler for when the user clicks on the th cell of the table. It orders the table data by that column's field.
	// param e: event that triggered handler.
	thClick = function (e) {
		preventClick(e);
		var th = $(e.target).closest('th'), level = th.attr('data-level');
		orderGrouped = (typeof th.attr('data-grouped') !== 'undefined');
		orderLevel = (typeof level === 'undefined')? -1 : level;
		orderTable(getColField($(e.target).closest('th')), null);
		if (headerObserverArr.length) {
			$.each(headerObserverArr, function () {
				this(th);
			});
		}
	};
	// trClick -- event handler for when user clicks on a table row, highlighting the row
	// param e: event that triggered handler
	trClick = function (e) {
		var tr = $(e.target).closest('tr'), index = tbody.find('tr.data').index(tr);
		//setSelected($(e.target).closest('tr'));
		if (rowObserverArr.length) {
			$.each(rowObserverArr, function () {
				this(tr, cache[index]);
			});
		}
	};
	// trOver -- event handler for when the user's mouse moves into a table row.
	// param e: event that triggered handler
	trOver = function (e) {//
		var tr = $(e.target).closest('tr');
		tr.addClass('on');
		if (options.classTrOver !== '' && tr.find('.desc').length) {
			tr.addClass(options.classTrOver);
		}
	};
	// trOut -- event handler for when the user's mouse moves out of a table row.
	// param e: event that triggered handler
	trOut = function (e) {
		var tr = $(e.target).closest('tr');
		tr.removeClass('on');
		if (options.classTrOver !== '' && tr.hasClass(options.classTrOver)) {
			tr.removeClass(options.classTrOver);
		}
	};
	// pageSizeClick -- event handler for when the user clicks on a page size button.
	// param e: event that triggered handler
	pageSizeClick = function (e, size) {
		if (size === options.pageCount) {
			return;
		}
		var btnInd = $.inArray(e.target, $(e.target).closest('div').find('a'));
		pagingBoxArr.find('.resPagLeft').each(function (index, item) {
			item = $(item);
			var pageSizeBtns = item.find('a');
			pageSizeBtns.removeClass('active');
			pageSizeBtns.eq(btnInd).addClass('active');
		});
		changePageSize(size);
		e.stopPropagation();
	};
	// pageClick -- handler for pagination. This is modifies the internal state of tools for pagination and then updates the table.
	// It supports first, last, next and previous operations on the pages.
	// param e: the event that triggered the handler
	pageClick = function (e, diff) {
		var button = $(e.target), pageBtnsTop, pageBtnsBottom;
		// Prevents clicking on turned off buttons
		if (button.hasClass('off')) { return; }
		pageBtnsTop = table.prev().find('.pulsantiera a');
		pageBtnsBottom = table.next().find('.pulsantiera a');
		switch (diff) {
		case -3:
			tools.page = 1;
			break;
		case -2:
			tools.page -= 1;
			break;
		case -1:
			// click on the left page button
			// If the previous page selected is the first one, remains in the same page
			if (tools.page === 1) {
				return;
			}
			// If the previous page selected is the last one, decrements by 2
			if (tools.page === tools.pages) {
				tools.page -= 2;
			} else {
				tools.page -= 1;
			}
			if (tools.page < 1) {
				tools.page = 1;
			}
			break;
		case 0:
			// click on the middle page button
			// If the previous page selected is the first one, increments the page index
			if (tools.page === 1) {
				tools.page += 1;
			}
			// If there are more than two pages and the previous page selected is the last one, decrements the page index
			else if (tools.pages > 2 && tools.page === tools.pages) {
				tools.page -= 1;
			}
			// Otherwise, remains in the same page
			else {
				return;
			}
			break;
		case 1:
			// click on the right page button
			// If the previous page selected is the last one, remains in the same page
			if (tools.page === tools.pages) {
				return;
			}
			// If the previous page selected is the first one, increments by 2
			if (tools.page === 1) {
				tools.page += 2;
			} else {
				tools.page += 1;
			}
			if (tools.page > tools.pages) {
				tools.page = tools.pages;
			}
			break;
		case 2:
			tools.page += 1;
			break;
		case 3:
			tools.page = tools.pages;
			break;
		}
		updatePageBtns();
		updateTable();
		e.stopPropagation();
	};
	/*#ENDREGION# EVENT HANDLERS ***/
	/*#REGION# SORTING ***/
	// defineOrderField -- order table rows.
	// param field: field to be ordered
	// param dir: direction ('asc' or 'desc')
	orderTable = function (field, dir) {
		if (isUpdating) { return; }
		isUpdating = true;
		defineOrderField(field);
		defineOrderDir(dir);
		defineOrderCol(field, dir);
		doOrder();
		isUpdating = false;
	};
	doOrder = function () {
		if (orderField > -1) {
			if (isOutputData) {
				orderOutput(orderField);
			} else {
				orderData(orderField);
				if (orderDir === 'desc') { cache = cache.reverse(); }
				updateTable();
			}
		} else if (!isOutputData) {
			updateTable();
		}
	};
	// defineOrderCol -- set right style on ordered column.
	// param field: field to be ordered
	// param dir: direction ('asc' or 'desc')
	defineOrderCol = function (field, dir) {
		$.each(thSortable, function (index, item) {
			if (item) {
				item = $(item);
				var currField = getColField(item);
				item.removeClass('asc').removeClass('desc').removeClass('on');
				if (currField === field) {
					item.addClass(orderDir);
					if (dir === null) { item.addClass('on'); }
				}
			}
		});
	};
	// defineOrderField -- keeps track of previous orderField columns and sets the current orderField through the triggering element's id.
	// param e: the event object created that triggered this method
	defineOrderField = function (field) {
		previousOrderField = orderField;
		orderField = $.inArray(field, tableFieldsToShow);
	};
	/*  if you click on a header for the first time order is ascending
		else it switches between ascending and descending
	*/
	// defineOrderDir -- determines what the order of the data should be
	defineOrderDir = function (dir) {
		if ($.type(dir) === 'string' && (dir === 'asc' || dir === 'desc')) {
			orderDir = dir;
		} else {
			if (previousOrderField === orderField) {
				orderDir = (orderDir === 'desc') ? 'asc': 'desc';
			} else {
				orderDir = 'asc';
			}
		}
	};
	/* Sort data in table */
	// orderData -- sorts the table's cache by the @order given it.
	// param order: defines the order that the data should be as ascending (asc) or descending (desc)
	orderData = function (order) {
		var sortFunc, sortType = (sortTypes.length === 0) ? 'default' : sortTypes[order];
		if (sortType === 'none') {
			return;
		} else if (sortType === 'default') {
			cache.sort(function (objA, objB) {
				var vA = getValueToOrder(objA),
					vB = getValueToOrder(objB);
				vA = (!vA)? '' : vA.toString().toLowerCase();
				vB = (!vB)? '' : vB.toString().toLowerCase();
				return (vA === vB)? 0 : (vB === '' || (vA !== '' && (vA > vB)))? 1 : -1;
			});
		} else {
			sortFunc = $.isFunction(window['sort_' + sortType])? window['sort_' + sortType] : sorter[sortType];
			cache.sort(sortFunc);
		}
	};
	// orderOutput -- sorts the table's output rows.
	// param order: defines the order that the data should be as ascending (asc) or descending (desc)
	orderOutput = function (order) {
		var tmpTrArr = [], tmpDetailArr = {}, sortType, trInd = 0, trId, sortFunc, groupFunc, groupLastLevel;
		groupingRows = [];
		tbody.children('tr').each(function (index, tr) {
			var dataGroup, groupArr, groupLevel;
			tr = $(tr);
			if (orderGrouped) {
				dataGroup = tr.attr('data-group');
				groupArr = dataGroup.split('-');
				groupLevel = groupArr.length - 1;
				if (typeof groupingRows[groupLevel] === 'undefined') {
					groupingRows[groupLevel] = [];
				}
				groupingRows[groupLevel].push(tr.detach());
			} else {
				if (tr.hasClass('dettaglioespandibile')) {
					tmpDetailArr[trId].push(tr.detach());
				} else {
					tmpTrArr.push(tr.detach());
					if (tr.hasClass('espandibile') || tr.find('td.colonnaespansione').length) {
						if (typeof tr.attr('id') !== 'undefined') {
							trId = tr.attr('id');
						} else {
							trId = 'tr-' + suffix + '-' + trInd.toString();
							tr.attr('id', trId);
							trInd += 1;
						}
						tmpDetailArr[trId] = [];
					}
				}
			}
		});
		if (orderGrouped) {
			groupLastLevel = groupingRows.length - 1;
			tmpTrArr = (orderLevel !== -1)? groupingRows[orderLevel] : tmpTrArr = groupingRows[groupLastLevel];
		}
		sortType = (sortTypes.length === 0) ? 'default' : sortTypes[order];
		if (sortType === null) {
			return;
		} else if (sortType === 'default') {
			tmpTrArr.sort(function (trA, trB) {
				var vA = getOutputToOrder(trA).toLowerCase(),
					vB = getOutputToOrder(trB).toLowerCase();
				return (vA === vB)? 0 : (vA > vB)? 1 : -1;
			});
		} else {
			sortFunc = $.isFunction(window['sort_' + sortType])? window['sort_' + sortType] : sorter[sortType];
			tmpTrArr.sort(sortFunc);
		}
		if (orderDir === 'desc') {
			tmpTrArr.reverse();
		}
		if (orderGrouped) {
			if (orderLevel !== -1) {
				groupingRows[orderLevel] = tmpTrArr;
			} else {
				groupingRows[groupLastLevel] = tmpTrArr;
			}
			groupFunc = function (level, prefix) {
				var groupRest = [], newGroupLevel = level + 1;
				$.each(groupingRows[level], function (index, tr) {
					var newPrefix = $(tr).attr('data-group');
					if (prefix === '' || newPrefix.substr(0, prefix.length) === prefix) {
						tbody.append(tr);
						if (groupLastLevel >= newGroupLevel) {
							groupFunc(newGroupLevel, newPrefix);
						}
					} else {
						groupRest.push(tr);
					}
					groupingRows[level] = groupRest;
				});
			};
			groupFunc(0, '');
		} else {
			$.each(tmpTrArr, function (index, item) {
				item = $(item);
				if ((index % 2 ) === 0) {
					item.removeClass('pari').addClass('dispari');
				} else {
					item.removeClass('dispari').addClass('pari');
				}
				trId = item.attr('id');
				tbody.append(item);
				if (typeof tmpDetailArr[trId] !== 'undefined') {
					$.each(tmpDetailArr[trId], function (index, itemDetail) { tbody.append($(itemDetail)); });
				}
			});
		}
	};
	// getValueToOrder -- return the value of the cell to be ordered.
	getValueToOrder = function (obj) {
		return (isOutputData)? getOutputToOrder(obj) : getDataToOrder(obj);
	};
	// getDataToOrder -- return the JSON value of the cell to be ordered.
	getDataToOrder = function (obj) {
		return obj[tableFieldsToShow[orderField]];
	};
	// getOutputToOrder -- return the output value of the cell to be ordered.
	getOutputToOrder = function (obj) {
		var td = obj.find('.col-' + tableFieldsToShow[orderField]).first(),
			value = (typeof td.attr('sort-value') !== 'undefined') ? td.attr('sort-value') : td.text();
		return $.trim(value);
	};
	getCustomValueToOrder = function (obj) {
		return (isOutputData)? getOutputToOrder(obj) : getCustomDataToOrder(obj);
	};
	getCustomDataToOrder = function (obj) {
		return obj[tableFieldsToShow[orderField]+'-key'];
	};
	/*#ENDREGION# SORTING ***/
	/*#REGION# SORTING FUNCTIONS ***/
	sorter = {
		"percent": function (objA, objB) {
			var vA = orderNaN(extractPercent(getValueToOrder(objA))),
				vB = orderNaN(extractPercent(getValueToOrder(objB)));
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"operativita": function (objA, objB) {
			var isAll = $('#loOpeSL').hasClass('selected'), vA, vB;
			switch (getValueToOrder(objA)) {
				case "Short & Long": vA = isAll? 0 : 3; break;
				case "Short": vA = 1; break;
				case "Long": vA = 2; break;
				default: vA = (orderDir === 'desc')? -Infinity : Infinity;
			}
			switch (getValueToOrder(objB)) {
				case "Short & Long": vB = isAll? 0 : 3; break;
				case "Short": vB = 1; break;
				case "Long": vB = 2; break;
				default: vB = (orderDir === 'desc')? -Infinity : Infinity;
			}
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"number": function (objA, objB) {
			var vA = parseFloat(getValueToOrder(objA).toString().replace(/\./g, '').replace(',', '.')),
				vB = parseFloat(getValueToOrder(objB).toString().replace(/\./g, '').replace(',', '.'));
			vA = orderNaN(vA);
			vB = orderNaN(vB);
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"data": function (objA, objB) {
			var arrDataA = getValueToOrder(objA).split('/'),
				arrDataB = getValueToOrder(objB).split('/'),
				vA = new Date(arrDataA[2], arrDataA[1]-1, arrDataA[0]).getTime(),
				vB = new Date(arrDataB[2], arrDataB[1]-1, arrDataB[0]).getTime();
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"dataEstesa": function (objA, objB) { // 20-dic-2014 15.54
			var indMese = { 'gen': 0, 'feb': 1, 'mar': 2, 'apr': 3, 'mag': 4, 'giu': 5,
					'lug': 6, 'ago': 7, 'set': 8, 'ott': 9, 'nov': 10, 'dic': 11 },
				arrDataTimeA = getValueToOrder(objA).split(' '),
				arrDataA = arrDataTimeA[0].split('-'),
				arrTimeA = arrDataTimeA[1].split('.'),
				arrDataTimeB = getValueToOrder(objB).split(' '),
				arrDataB = arrDataTimeB[0].split('-'),
				arrTimeB = arrDataTimeB[1].split('.'),
				vA = new Date(arrDataA[2], indMese[arrDataA[1]], arrDataA[0], arrTimeA[0], arrTimeA[1], 0).getTime(),
				vB = new Date(arrDataB[2], indMese[arrDataB[1]], arrDataB[0], arrTimeB[0], arrTimeB[1], 0).getTime();
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"dataEstesa2": function (objA, objB) { // 20/12/2014 15:54
			var arrDataTimeA = getValueToOrder(objA).split(' '),
				arrDataA = arrDataTimeA[0].split('/'),
				arrTimeA = arrDataTimeA[1].split(':'),
				arrDataTimeB = getValueToOrder(objB).split(' '),
				arrDataB = arrDataTimeB[0].split('/'),
				arrTimeB = arrDataTimeB[1].split(':'),
				vA = new Date(arrDataA[2], arrDataA[1] - 1, arrDataA[0], arrTimeA[0], arrTimeA[1], 0).getTime(),
				vB = new Date(arrDataB[2], arrDataB[1] - 1, arrDataB[0], arrTimeB[0], arrTimeB[1], 0).getTime();
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"time": function (objA, objB) {
			var vA = parseFloat(getValueToOrder(objA).toString().replace(/:/g, '')),
				vB = parseFloat(getValueToOrder(objB).toString().replace(/:/g, ''));
			vA = orderNaN(vA);
			vB = orderNaN(vB);
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		"conto": function (objA, objB) {
			var arrDataA = getValueToOrder(objA).split('/'),
				arrDataB = getValueToOrder(objB).split('/'),
				vA = pad(parseInt(arrDataA[0], 10), 0, 5) + pad(parseInt(arrDataA[1], 10), 0, 10),
				vB = pad(parseInt(arrDataB[0], 10), 0, 5) + pad(parseInt(arrDataB[1], 10), 0, 10);
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		},
		/* L'ordinamento custom permette di usare una chiave di ordinamento indipendente dal dato presentato in tabella,
		 * individuata dal suffisso -key, es:
		 * "numero" : "Infinito",
		 * "numero-key" : "999999999" 
		 * */
		"custom": function (objA, objB) {
			var vA = getCustomValueToOrder(objA),
				vB = getCustomValueToOrder(objB);
			return (vA === vB)? 0 : (vA > vB)? 1 : -1;
		}
	};
	/*#ENDREGION# SORTING FUNCTIONS ***/
	/*#REGION# FORMATTING FUNCTIONS ***/
	formatter = {
		"disponibilita": function (v) {
			return (!v)? '' : '<img src="/img/ret/img_avail' + v.toString() + '.gif" title="Lorem ipsum dolor" alt="Lorem ipsum dolor"/>';
		},
		"operativita": function (v) {
			return (!v)? '' : v.toString();
		},
		"percent": function (v) {
			var percent = extractPercent(v);
			return (!v)? '' : isNaN(percent)? v : ((typeof(excludeSymbol) === 'undefined') || !excludeSymbol) ? (percent.toString().replace('.', ', ') + '%') : percent.toString().replace('.', ', ');
		},
		"signedPercent": function (v) {
			var percent = extractPercent(v);
			return (!v)? '' : isNaN(percent)? v : ((typeof(excludeSymbol) === 'undefined') || !excludeSymbol) ? addSignColor(percent, percent.toString().replace('.', ',') + '%') : addSignColor(percent, percent.toString().replace('.', ','));
		},
		"subPercent": function (v) {
			var percent = extractSubPercent(v);
			return (!v)? '' : isNaN(percent)? v : ((typeof(excludeSymbol) === 'undefined') || !excludeSymbol) ? (percent.toString().replace('.', ',') + '%') : percent.toString().replace('.', ',');
		},
		"signedSubPercent": function (v) {
			var percent = extractSubPercent(v);
			return (!v)? '' : isNaN(percent)? v : ((typeof(excludeSymbol) === 'undefined') || !excludeSymbol) ? addSignColor(percent, percent.toString().replace('.', ',') + '%') : addSignColor(percent, percent.toString().replace('.', ','));
		},
		"URL": function (v) {
			return (!v)? '' : v.toString();
		},
		"linkTitolo" : function (v, obj) {
			var isPCD = ( (typeof(profiloConsultare) === 'undefined') || (profiloConsultare === 'N') );
			var linkTitolo = '<span class="textopz">';
			if (isPCD) {
				linkTitolo += ('<a style="float:left;position: relative;" href="' + $('#linkSchedaTitolo').val() + obj.terna.replace(/\./g, '|') + '">' + v.toString() + '</a></span>');
			}
			else {
				linkTitolo += (v.toString() + '</a></span>');
			}
			
			if (obj.opzioniAssociate === 'true') {
				var imgHtml = '<img alt="opzioni" title="opzioni" src="/img/ret/ico1gr_opt.gif">';
				linkTitolo += '<a class="imgopz" href="#" onclick="MercatiQuotazioni.searchOptions(\'' + obj.codiceSottostante + '\');return false;">' + imgHtml + '</a>';
			}
			return linkTitolo;
		}
	};
	/*#ENDREGION# FORMATTING FUNCTIONS ***/
	/*#REGION# FILTERING ***/
	// Two approaches to filtering:
	// 1. If pagination is turned ON then we just recreate the rows using updateTable. Somewhat costly due to creating new elements but hopefully offset by a smaller amount of rows being shown.
	// 2. If pagination is turned OFF then go the slick way of just hiding the rows, which is much faster.
	//
	// filterData -- handler for filtering data. Updates tools internal state information for the filter tool and updates the table. Tried optimizing it as much as possible.
	// param e: the event triggering handler
	filterData = function () {
		// Anytime we filter there is a good chance our data view will change.
		clearCache(true);
	};
	// testFilter -- test each record against filters in order to choose whether or not display it.
	testFilter = function (filters, obj) {
		var toHide = false;
		$.each(filters, function (key, value) {
			if ($.isFunction(value.func)) {
				if (!value.func(obj, obj[key], value.data)) {
					toHide = true;
					return;
				}
			}
			else {
				var valueToFilter = obj[key];
				if (typeof value.data === 'number') {
					try {
						valueToFilter = parseFloat(valueToFilter);
					}
					catch (ex) {
						valueToFilter = '';
					}
					if (value.data !== valueToFilter) {
						toHide = true;
						return;
					}
				}
				else {
					if (valueToFilter.toUpperCase().search(value.data.toUpperCase()) < 0) {
						toHide = true;
						return;
					}
				}
			}
		});
		return toHide;
	};
	// addFilter -- Add a filter to the visualized data.
	// param field: field to filter
	// param value: value to filter
	// param formatted: whether or not filter on the formatted value
	// param func: custom filter function
	addFilter = function (field, value, formatted, func) {
		var fieldIndex = -1;
		// Parameters check
		if ($.type(field) !== "string" || ($.type(value) !== "string" && !$.isNumeric(value)) || value.toString === '') { return; }
		if ($.isFunction(func)) { fieldIndex = $.inArray(field.toString(), tableFieldsToShow); }
		tools.filterObj[field] = {
			data: value,
			index: fieldIndex,
			formatted: formatted,
			func: func
		};
		tools.filterNum += 1;
		filterData();
	};
	// delFilter -- eliminate a filter to the visualized data.
	// param field: field to not filter any more
	delFilter = function (field) {
		delete tools.filterObj[field];
		tools.filterNum -= 1;
		filterData();
	};
	// resetFilters -- eliminate all filters and visualize all data
	resetFilters = function () {
		tools.filterObj = {};
		tools.filterNum = 0;
		filterData();
	};
	/*#ENDREGION# FILTERING ***/
	/*#REGION# GETTER/SETTER FUNCTIONS ***/
	getCachedData = function () {
		return $.extend(true, [], cache);
	};
	getColField = function (th) {
		return decapitalizeFL(getField(th));
	};
	getField = function (th) {
		var retVal = null, thId = ($.type(th.attr('id')) !== 'undefined')? th.attr('id') : '';
		if (thId.substr(0, 3) === 'th-') { retVal = thId.replace('th-', ''); }
		else {
			$.each(th.prop('className').split(' '), function (index, cl) {
				if (cl.substr(0, 5) === 'sort-') { retVal = cl.replace('sort-', ''); }
			});
		}
		return retVal;
	};
	getPageCount = function () {
		return options.pageCount;
	};
	setPageCount = function (num) {
		num = parseFloat(num);
		if (!isNaN(num) && num > 0) {
			options.pageCount = parseInt(num, 10);
			setData(false);
			clearCache(true);
		}
	};
	setSelected = function (tr) {
		if (options.allowMultiselect) {
			if (tr.hasClass('selected')) {
				tr.removeClass('selected');
			} else {
				tr.addClass('selected');
			}
		}
	};
	/*#ENDREGION# GETTER/SETTER FUNCTIONS ***/
	/*#REGION# UTILITY FUNCTIONS ***/
	capitalizeFL = function (s) {
		return s.charAt(0).toUpperCase() + s.slice(1);
	};
	decapitalizeFL =  function (s) {
		return s.charAt(0).toLowerCase() + s.slice(1);
	};
	extractPercent = function (perc) {
		return parseFloat(perc.toString().replace(/[%\.]/g, '').replace(',', '.'));
	};
	extractSubPercent = function (perc) {
		return parseFloat(perc.toString().replace(/%/g, ''));
	};
	addSignColor = function (val, formattedVal) {
		return (val < 0)? '<span class="nega">' + formattedVal + '</span>' : '<span class="posi">' + formattedVal + '</span>';
	};
	orderNaN = function (num) {
		return (isNaN(num))? ((orderDir === 'desc')? -Infinity : Infinity) : num;
	};
	pad = function (toPad, padChar, length) {
		return (String(toPad).length < length)? new Array(length - String(toPad).length + 1).join(padChar) + String(toPad) : toPad;
	};
	preventClick = function (e) {
		e.preventDefault();
		e.stopPropagation();
	};
	/*#ENDREGION# UTILITY FUNCTIONS ***/

	initialize(suffixPar, optionsPar);
	return {
		"orderTable": orderTable,
		"addFilter": addFilter,
		"delFilter": delFilter,
		"resetFilters": resetFilters,
		"updateData": updateData,
		"updateDataFromURL": updateDataFromURL,
		"getCachedData": getCachedData,
		"getPageCount": getPageCount,
		"setPageCount": setPageCount,
		"table": table,
		"thead": thead,
		"tbody": tbody,
		"suffix": suffix,
		"thClick": addHeaderObserver,
		"trClick": addRowsObserver
	};
}
