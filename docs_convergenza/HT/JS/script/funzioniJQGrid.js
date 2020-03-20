var schermoFluido = false;
var elencoTabelle = {}; //array: gridId->shrink
var ieVersion = (function(){	 
    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i'); 
    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    ); 
    return v > 4 ? v : undef; 
}());

function goToPage(page) {
	var url=page;
	if (page.indexOf(getPathContext())==-1 && page.indexOf("http")==-1)
		url=url;
	
	if(arguments.length > 2) {
	url=url+'?';	
	for(var i=1;i<arguments.length;i+=2){
		url+='&'
		url+=arguments[i]+'='
		url+=escape(unescape(arguments[i+1]));
	}}
	               
	document.location.href=url;
}

$(document).ready(function () {
	schermoFluido = $('body').css('width') !== "1003px";
	if(schermoFluido && $('.jqGridTOLTable').size() > 0) {
		var oldWidth;
		$(window).resize(function() {
			var newWidth = document.documentElement.clientWidth;
			if(oldWidth != newWidth) {
				
				$.each(elencoTabelle, function(gridId, shrink) {
					var grid = $('#' + gridId);
					var newShrink=getShrinkValuePersonalizza(grid.jqGrid('getGridParam' , 'colModel'));
					adattaDimensioniGriglia(grid, newShrink);
				});
			}
			oldWidth = newWidth;
		});
	}	
});

function adattaDimensioniGriglie() {
	// ricalcolo le dimensioni di TUTTE le griglie in quanto 
	// l'ultima caricata potrebbe avermi aggiunto la scrollbar alla pagina 
	$.each(elencoTabelle, function(gridId, shrink) {
		var grid = $('#' + gridId);
		adattaDimensioniGriglia(grid, shrink);
	});
}
function adattaDimensioniGriglia(grid, shrink) {
	var half = grid.parents('.divSinistra').is('div') || grid.parents('.divDestra').is('div');

	grid.jqGrid('setGridWidth', getGridWidth(half),shrink );

	if(ieVersion === 7 && !shrink) {
		//fix scrollbar ie7
		var bdiv = grid.parents(".ui-jqgrid-bdiv");
		bdiv.css("padding", "0 0 15px 0");
		bdiv.css('overflow-y', 'hidden');
	} else if(ieVersion === 7 && shrink) {
		//reset impostazioni in caso di personalizzazione colonne
		var bdiv = grid.parents(".ui-jqgrid-bdiv");
		bdiv.css("padding", "0");
		bdiv.css('overflow-y', 'auto');
	}
}

function getGridWidth(half) {
	if(schermoFluido && $('#content2Col').is('div')) {
		var documentWidth = document.documentElement.clientWidth;
		if(half) {
			return (Math.round(documentWidth - 205 - 10) * 0.5) - 7;		
		} else {
			return Math.round(documentWidth - 205 - 10) - 2;
		}
	} else {
		return $('.jqGridTOLDiv').width()-2;
	}
}

function getShrinkValue(gridOptions) {
	var personalizza = false;
	$.each(gridOptions.opzioniTabella, function(i, opt) {
	    if(opt.label === 'Personalizza') {
	    	personalizza = true;
	    	return false;//break
	    }
	});
	if(personalizza) {
		return getShrinkValuePersonalizza(gridOptions.colModel);
	} else {
		return true;
	}
}
function getShrinkValuePersonalizza(colModel) {
	var vilibleColsWidth = 0;
	$.each(colModel, function(i, col) { 
		if(col.hidden === undefined || !col.hidden) {
			vilibleColsWidth += col.width + 5;//2 padding TD + 3 aggiunti da jqGrid al TD
		}
	});
	if(vilibleColsWidth >= getGridWidth(false)) {
		return false;
	} else {
		return true;
	}
}

function startGrid(idDivContainer, customGridOptions) {
	//jqGrid init
	var grid = $(idDivContainer + ' > .jqGridTOLTable');
	var formRicerca = $(idDivContainer + ' form.formHeaderGrid');
	var formPresente = formRicerca.is('form');
	
	var defaultGridOptions = {
		datatype: 'json',			
		hidegrid:false,
		prmNames:{rows:'numRighe',page:'numPagina'},
		headertitles:true,
		sortable:false,
		width: $(idDivContainer).width()-2,
		height: 'auto',
		scroll: false,		
		sortname: '',
		loadonce: true,
		viewrecords: true,
		rowNum: 500,
		jsonReader: {
			repeatitems: false,
			id: 'datiJqGrid.id'
		},
		loadComplete : loadComplete,
		loadError : function(xhr,st,err) {
			if( $('input[name=j_username]', xhr.responseText).size() === 1) {
				window.location.href = getPathContext() + '/';
			} else {
				showError(this, err)
			}
		},
		onPaging: function() {
			var divContainer = $(this).parents('.jqGridTOLDiv');
			var idDivDialog = '#' + divContainer.attr('id') + 'Dialog';
			if($(idDivDialog).is(':visible')) {
				$(idDivDialog).dialog('close');
			}			
		},
		bottoneStrumenti: 'Strumenti',
		bottoneFiltro: 'Filtro',
		bottoneAggiorna: 'Aggiorna',
		bottoneOpera: 'Opera',
		opzioniRiga: [],
		opzioniTabella: [],
		beforeSelectRow: function(rowid, e){
			return customBeforeSelectRow(rowid, e, $(this));
	    },
		onSelectRow: function(rowid, status, e){
			if ($(this).jqGrid('getGridParam', 'multiselect')) {
				if (status==true) {
					$("#"+rowid).addClass("ui-state-select");
				}
				else {
					$("#"+rowid).removeClass("ui-state-select");
				}
			}
			return customSelectRow(rowid, status, e, $(this));
		}
	};
	
	if ("multiselect" in customGridOptions) {
		customGridOptions = $.extend({}, customGridOptions, {gridComplete: function() {grid.jqGrid('hideCol', 'cb');}});
	}
	
	var o = $.extend({}, defaultGridOptions, customGridOptions);
	
	if( !$(idDivContainer).hasClass('nosort') 
			&& o.datatype=='json') {
		o = $.extend({}, o, {onPaging : function () {$(this).setGridParam({datatype:'json'}).triggerHandler('reloadGrid');}});
	}
	
	var clear = $('<div class="tappo"></div>').prependTo(idDivContainer);
	var spanOpzioniTabella = $('<div class="context-buttons pull-right clearfix "><span class="bottoni_intestazione_tabella"></span></div>')
		.append('<span class="rounded_corner">&nbsp;</span>')
		.prependTo(idDivContainer);

	var spanTitolo = 
	$('<h3 class="titleSection">' + o.caption + '</h3>')
	.append('<span class="rounded_corner">&nbsp;</span>')
	.prependTo(idDivContainer);

	
	
	var spanBottoniTabella = $('<span class="bottoni"></span>')
		.appendTo(spanOpzioniTabella);
	
	o.shrinkToFit = getShrinkValue(o);
	elencoTabelle[grid.attr('id')] = o.shrinkToFit;
	o.caption = false;
	o.oldHeight = o.height; //height backup
	$.each(o.colModel, function(i, val) { 
		this.resizable = false;
		if( $(idDivContainer).hasClass('nosort') ) {
			this.sortable = false;
		}
	});
	if(formPresente) {
		if(o.url === undefined) {
			o.url = formRicerca.attr('action');
		}
		o.url = o.url + '?' + formRicerca.serialize();
	}
	if(o.rowNum !== 500) {
		//paginazione
		o.pager = '#' + $(idDivContainer).attr('id') + 'Pager';
		o.loadonce = false;
	}
	grid.jqGrid(o);
	
	//tooltip th griglia e allineamento th
	$.each(o.colModel, function(i, col) {
		
		var styleClass = '';
		if(col.align === 'Right') {
			styleClass = 'oRight';
		} else if(col.align === 'Left') {
			styleClass = 'oLeft';
		}
		
		if(col.title !== undefined && typeof(col.title) === "string") {
			grid.setLabel(col.name, '', styleClass, {title: col.title});
		} else {
			grid.setLabel(col.name, '', styleClass);
		}
	});
	
	//opzioni
	if( o.opzioniTabella.length > 0 ) {
		creaMenuStrumenti(idDivContainer, o.opzioniTabella, spanBottoniTabella, o.bottoneStrumenti);
	}

	//ricerca e ricarica
	var aRicerca = false;
	if(formPresente) {
		formRicerca.insertAfter(clear);
//		aRicerca = $('<input/>', {value: o.bottoneFiltro, type: 'button', 'class': 'btn button bottoneFiltro'})
//			.appendTo(spanBottoniTabella)
//			.click(function() {return apriFormRicerca(this);});
		$('span.labelIntestazioneSelezioneCC', spanTitolo)
			.click(function() {return apriFormRicerca(this);})
			.hover(function() { $(this).css('cursor', 'pointer');});
	}
	var aRicarica = false;
	if(o.datatype !== 'local') {
		aRicarica = $('<button/>', {value: '', 'class': 'btnRefresh button'})
			.appendTo(spanBottoniTabella)
			.click(function() {return ricarica(this);});
	}
	
    //dialog opera
    if( o.opzioniRiga.length > 0 ) {
    	var idDialogOpera = $(idDivContainer).attr('id') + 'Dialog';
		var divDialogOpera = $('<div></div>', {id: idDialogOpera, title: o.bottoneOpera, 'class':'dialogOpera'})
			.appendTo(idDivContainer);
		var ulDialogOpera = $('<ul></ul>').appendTo(divDialogOpera);
		$.each(o.opzioniRiga, function( i, opt ) {
			if(opt.funcOptions === undefined) {
				alert('Funzione non definita opzioniRiga ' + idDivContainer);
				return $;
			}
			var liOpt = $('<li class="ui-menu-item"></li>')
				.appendTo(ulDialogOpera);
			$('<a href="#"></a>')
				.text(opt.label)
				.appendTo(liOpt)
				.data('testDisplay', opt.testDisplay === undefined ? null : opt.testDisplay)
				.click(function(){
				    var rowData = grid.jqGrid('getRowData', grid.data('idRowGlobal'));				    
				    var opts = opt.funcOptions;
				    var func = opts.funzioneJS;
				    if($.isFunction(func)) {
					    var args = [];
					    if(opts.urlLink !== undefined) {
							args.push(opts.urlLink);
					    }
						$.each(opts, function(attrName, attrValue) {
							//non setto piu l'altezza del popup
							if(attrName !== 'funzioneJS' && attrName !== 'urlLink' && attrName !== 'height') {
								args.push(attrName);
								if(rowData[attrValue] === undefined) {
									args.push(attrValue);									
								} else {
									args.push(rowData[attrValue]);
								}							
							}
						});
						func.apply(this, args);
				    } else {
				    	eval(func);
				    }
					
					$('tr', grid).removeClass('ui-state-highlight');
					divDialogOpera.dialog('close');
					return false;
				});
		});
		grid.data('idDialogOpera', '#' + idDialogOpera);
		divDialogOpera
    		.data('idDivContainer', idDivContainer)
    		.dialog({ autoOpen: false, resizable: false, width:190, minHeight:40,
    			close: function () {
    				var trs = $(idDivContainer).find('.jqGridTOLTable').find('tr');
    				trs.removeClass('ui-state-highlight');
    				trs.find('td :button').removeClass('ui-state-focus');
    			}, 
    			open: function(event, ui) {
    				$('.dialogOpera').not(this).dialog('close'); //chiudo gli altri dialog eventualmente aperti
    			} });
	}
	
	//rimuovo la riga se non ci sono bottoni
	if(spanBottoniTabella.children().size() === 0) {
		spanOpzioniTabella.remove();
	}
}

window.customBeforeSelectRow = function(arraySelected) {
	return true;
}
window.customSelectRow = function(arraySelected) {
	return true;
}

function loadComplete(data){
	var grid = $(this);
	var oldHeight = grid.jqGrid('getGridParam' , 'oldHeight');

	if(data === undefined && grid.jqGrid('getGridParam' , 'datatype') === 'local') {
		data = grid.jqGrid('getGridParam' , 'data');
	}
	
	if(data.warning) {
		if(oldHeight === 'auto') grid.jqGrid('setGridHeight', 100);
		showWarning(grid, data.message);
		return;
	} else if(data.error) {
		if(oldHeight === 'auto') grid.jqGrid('setGridHeight', 100);
		showError(grid, data.message);
		return;
	} else {
	    grid.jqGrid('setGridHeight', oldHeight); //reset Height

	    // VENTURELLI ORDINAMENTO LOCAL, PAGING REMOTO
        var $this = $(this);
        var divJQGrid = $this.parents('div.jqGridTOLDiv');
		if (divJQGrid!=undefined && !divJQGrid.hasClass("nosort")) {
			if ($this.jqGrid('getGridParam', 'datatype')==='json') {
				// because one use repeatitems: false option and uses no
				// jsonmap in the colModel the setting of data parameter
				// is very easy. We can set data parameter to data.rows:
				$this.jqGrid('setGridParam', {
					datatype: 'local',
					data: data.rows,
					pageServer: data.page,
					recordsServer: data.records,
					lastpageServer: data.total
				});

				// because we changed the value of the data parameter
				// we need update internal _index parameter:
				this.refreshIndex();

				if ($this.jqGrid('getGridParam', 'sortname') !== '') {
					// we need reload grid only if we use sortname parameter,
					// but the server return unsorted data
					$this.triggerHandler('reloadGrid');
				}
			}
			else {
				$this.jqGrid('setGridParam', {
					page: $this.jqGrid('getGridParam', 'pageServer'),
					records: $this.jqGrid('getGridParam', 'recordsServer'),
					lastpage: $this.jqGrid('getGridParam', 'lastpageServer')
				});
				this.updatepager(false, true);
			}
		}
	    // END VENTURELLI ORDINAMENTO LOCAL, PAGING REMOTO

		if (data.total === 1){
			//ordinamento in locale se c'è una sola pagina
			grid.setGridParam({ datatype: 'local' });
			
			var rowNum = grid.jqGrid('getGridParam' , 'rowNum');
			if (data.records > rowNum) {
				var msg = 'alcuni elementi non sono visualizzati, records:' + data.records + ', mostrati:' + rowNum;
				showWarning(grid, msg, 5000);
			}
		}
	}

	var gridHeight = $(grid).jqGrid('getGridParam' , 'height');
    var divContainer = $(grid).parents('.jqGridTOLDiv');
	if(oldHeight === 'auto' || $(grid).height() >= gridHeight) {
		//fix border-bottom ultimo tr
		$('tr:last', grid).addClass('noBorderBottom');
	}
	
	//$("#I_TITDOS_Table_act").addClass("hidden-print");
	
    //fix border-right ultimo th
	$('.ui-jqgrid-htable th', divContainer).removeClass('last');
	$('.ui-jqgrid-htable th:visible:last', divContainer).addClass('last');

	var colModel = grid.jqGrid('getGridParam' , 'colModel');
	var actProp = grid.jqGrid('getColProp', 'act');
    $.each(grid.jqGrid('getDataIDs'), function(i, rowId) {
        var rowData = grid.jqGrid('getRowData', rowId);
        var tot = rowData['datiJqGrid.titoloTot'];
        var gtot = rowData['datiJqGrid.titoloGTot'];
            
        //colori importi
		$.each(colModel, function(j, col) {

			
			var colName = col.name;
			// aggiunto classe per eliminare la colonna dalla stampa -> tuo portafoglio
/*			if('act' === colName ){
				grid.jqGrid('setCell', rowId, colName, '', 'hidden-print');
			}
*/			if(col.classes === 'importo') {
				if(rowData[colName] >= 0) {
	        		grid.jqGrid('setCell', rowId, colName, '', 'importo positivo');
	        	} else if (rowData[colName] < 0) {
	        		grid.jqGrid('setCell', rowId, colName, '', 'importo negativo');
	        	}				
			}
		});
        
        if(tot !== '' || gtot !== '') { //riga totale
        	var counter = 0;
        	var lastTd;
        	var done = false;
    		var titolo = '';
        	var tr = grid.jqGrid('getInd', rowId, true);
        	if(tot !== '') {
        		$(tr).addClass('tot');
        		titolo = tot;
        	} else {
        		$(tr).addClass('gtot');
        		titolo = gtot;
        	}
        	$(tr).children(':visible').each(function(j, td){
        		var text = $(td).text();
        		if( escape(text) === '%20' || escape(text) === '%A0' || text.indexOf('n.d.') != -1 ) {
        			counter++;
        			if(!done) $(td).hide();
        			else $(td).html('&nbsp;');	        		
        		} else if(!done) {
        			$('<td>', {colspan: counter, text:titolo})
        				.addClass('tot')
        				.prependTo(tr);
        			counter = 0;
        			done = true;
        		}
        	});
        } else if(actProp) { //azioni	grid.data('idRowGlobal', idRow);
        	var idDialogOpera = grid.data('idDialogOpera');

        	$(tr).siblings().removeClass('ui-state-highlight');
        	$(tr).addClass('ui-state-highlight');
        
        	
        	var bottoneOpera = grid.jqGrid('getGridParam' , 'bottoneOpera');
        	var button = '<button title="Opera" class="btn-opera  button " onclick="apriDialogOpera(this, \'' + rowId +'\')">';
        	grid.jqGrid('setCell', rowId, 'act', button);

	    	
        }
    });
    
	adattaDimensioniGriglie();
	$.each(grid.jqGrid('getDataIDs'), function(i, rowId) {
		$("#"+rowId).find('button').each(function(){
	
     	if(disabilitaBottoneOpera(this, rowId)){
     		$(this).removeClass("btn-opera").addClass("btn-opera-disabled").prop("disabled", true);
     	}

		
		})
	})
}

function creaMenuStrumenti(idDivContainer, opzioniTabella, spanBottoniTabella, bottoneStrumenti) {
	
	
	if(opzioniTabella.length>1){
	
	var ulGridOptions = $('<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all">')
		.appendTo(idDivContainer);
	$.each(opzioniTabella, function(i, opt) {
		if(opt.funcOptions === undefined) {
			alert('Funzione non definita opzioniTabella ' + idDivContainer);
			return $;
		}
		var testDisplay = opt.testDisplay;
		if(testDisplay !== undefined && $.isFunction(testDisplay)) {
			if(testDisplay.apply(this) === false) {
				return true; //continue
			}
		}
		var liOpt = $('<li class="ui-menu-item"></li>')
			.appendTo(ulGridOptions);
		$('<a href="#" class="ui-corner-all"></a>')
			.text(opt.label)
			.appendTo(liOpt)
			.mouseleave(function() {
				$(this).removeClass('ui-state-hover');
			})
			.mouseenter(function() {
				$(this).addClass('ui-state-hover');
			})
			.click(function(){	    
				closeGridOptions();
			    var opts = opt.funcOptions;
			    var func = opts.funzioneJS;
			    if($.isFunction(func)) {
				    var args = [];
				    if(opts.urlLink !== undefined) {
						args.push(opts.urlLink);
				    }
					$.each(opts, function(attrName, attrValue) {
						if(attrName !== 'funzioneJS' && attrName !== 'urlLink' ) {
							args.push(attrName);
							args.push(attrValue);
						}
					});
					func.apply(this, args);
			    } else {
					eval(func);
			    }
			    return false;
			});
	});	
	
	var closeGridOptions = function () {
		ulGridOptions.fadeOut();
		$(ulGridOptions).data('isOpen', false)
	}
	var timer = setTimeout(closeGridOptions, 10);
	var openGridOptions = function() {
		ulGridOptions
			.show()
			.position({
				of: this,
				my: 'right top',
				at: 'right bottom',
				using: function(p) { //ff fix
					$(this).css({
						left: Math.ceil(p.left + 20),
						top: Math.ceil(p.top+20)//10 px per il triangolo del popup
					});
				}
			})
		clearTimeout(timer);
		$(ulGridOptions).data('isOpen', true);
	}
	
	$('<button class="btnTools button bottoneStrumenti ui-widget-header"></button>')
		.appendTo(spanBottoniTabella)
		.click(function() {
			var isOpen = $(ulGridOptions).data('isOpen');
			if(isOpen) {
				closeGridOptions();
			} else {
				openGridOptions.apply(this);
			}
		})
		.mouseenter(openGridOptions)
		.mouseleave(function() {
			timer = setTimeout(closeGridOptions, 500);
		});
	
	ulGridOptions
		.mouseleave(function() {
			timer = setTimeout(closeGridOptions, 500);
		})
		.mouseenter(function() {
			clearTimeout(timer);
		});
	}
	else {
		$.each(opzioniTabella, function(i, opt) {
		
		$('<a href="#" class="single-action"></a>')
			.text(opt.label)
			.appendTo(spanBottoniTabella)
			.mouseleave(function() {
				$(this).removeClass('ui-state-hover');
			})
			.mouseenter(function() {
				$(this).addClass('ui-state-hover');
			})
			.click(function(){	    
				
			    var opts = opt.funcOptions;
			    var func = opts.funzioneJS;
			    if($.isFunction(func)) {
				    var args = [];
				    if(opts.urlLink !== undefined) {
						args.push(opts.urlLink);
				    }
					$.each(opts, function(attrName, attrValue) {
						if(attrName !== 'funzioneJS' && attrName !== 'urlLink' ) {
							args.push(attrName);
							args.push(attrValue);
						}
					});
					func.apply(this, args);
			    } else {
					eval(func);
			    }
			    return false;
			});
		})
	}
}

/* formattatori jqGrid */
var fmts = {
	D0:{thousandsSeparator:".",defaultValue:"0"},
	D2:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:2,defaultValue:"0,00"},
	D3:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:3,defaultValue:"0,000"},
	D4:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:4,defaultValue:"0,0000"},
	P:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:2,defaultValue:"0,00"}
}
function linkFmt(cellvalue, options, rowObject) {
	var opts = options.colModel.formatoptions;
	var onclick = opts.funzioneJS + "(";
    if(opts.urlLink !== undefined && opts.urlLink !== '') {
    	onclick += "'" + opts.urlLink + "'";
    }
	$.each(opts, function(attrName, attrValue) {
		if(attrName !== 'funzioneJS' && attrName !== 'urlLink' && attrName !== 'height') {
			onclick += ", '" + attrName + "'";
			
			var x = undefined;
			try {
				x = eval("rowObject."+attrValue);
			} catch(err) {}
			
			if(x === undefined) {
				onclick += ", '" + attrValue + "'";					
			} else {
				onclick += ", '" + escape(x) + "'";
			}							
		}
	});
	onclick += ')';

	var tot = rowObject.datiJqGrid !== undefined && rowObject.datiJqGrid.titoloTot !== undefined;
	var gtot = rowObject.datiJqGrid !== undefined && rowObject.datiJqGrid.titoloGTot !== undefined;
	if(tot || gtot){
		return 'n.d.';//per unire celle nella riga totale
	}
		
	else{
		//fix non creo link sul titolo quando non ha tol o non è operabile
		if(options.gid=="I_TITDOS_Table" && !isAutorizzatoTol(rowObject)){
			
			return  cellvalue ;
		}
		if (    ((options.gid=="I_MOVDOS_Table") && ( (rowObject.metodoDettaglio != 4) && (rowObject.metodoDettaglio != 1) ))   ||  
				((options.gid=="I_ORD_Table") && (rowObject.metodoDettaglio != 7))     ){
			return  cellvalue ;
		} 
		return '<a href="#" onclick="' + onclick + '">' + cellvalue + '</a>';
	}
		
}
function linkUnFmt(cellval, opts, rowObject) {
	return cellval;
}
function trendFmt(cellval, options, rowObject) {
	if(cellval == '3') {
		return '<img alt="" src="/HT/IMAGES/TOL/b_stabile.gif">';
	} else if(cellval == '2') {
		return '<img alt="" src="/HT/IMAGES/TOL/b_scende_rossa.gif">';
	} else if(cellval == '1') {
		return '<img alt="" src="/HT/IMAGES/TOL/b_cresce_verde.gif">';
	} else {
		return '&nbsp;';
	}
}
function thousandFmt(cellvalue, options, rowObject) {
	var cellval = (cellvalue - (cellvalue%1000)) / 1000;
	return $.fmatter.util.NumberFormat(cellval, fmts['D0']);
}
function imageFmt(cellvalue, options, rowObject) {
	return '<img src="' + getPathImages() + cellvalue + '.gif" alt=""/>';
}
function decimalFmt(cellval, opts, rowObject) {
	if(cellval === '') 
		return '';
	if(cellval === undefined ) 
		return 'n.d.'
	if(cellval === null) 
		return 'n.d.';
	var formatoptions = opts.colModel.formatoptions;
	var cellFormat = formatoptions['cellFormat'];
	if (cellFormat === 'DX') {
		if (cellval % 1 === 0) {
			cellFormat = 'D0';
		} else {
			cellFormat = 'D2';
		} 
	}
	return $.fmatter.util.NumberFormat(cellval, fmts[cellFormat]);		
}
function decimalUnFmt(cellval, opts, rowObject) {
	if(cellval === 'n.d.')
		return 'NaN';
	var formatoptions = opts.colModel.formatoptions;
	var re = /([\.\*\_\'\(\)\{\}\+\?\\])/g,
	op = fmts[formatoptions['cellFormat']];
	sep = op.thousandsSeparator.replace(re,"\\$1");
	stripTag = new RegExp(sep, "g");
	ret = cellval.replace(stripTag,'').replace(op.decimalSeparator,'.');
	return ret;
}


function dateFmt(cellval, opts) {
	if(cellval === '') 
		return '';
	if(cellval === undefined ) 
		return 'n.d.'
	if(cellval === null) 
		return 'n.d.';
	var formatoptions = opts.colModel.formatoptions;
	if(formatoptions['isLightFormat'])
			return $.fmatter.util.DateFormat(formatoptions['ltformat'], cellval, formatoptions['newformat'], $.jgrid.formatter.date);
		else
			return $.fmatter.util.DateFormat(formatoptions['srcformat'], cellval, formatoptions['newformat'], $.jgrid.formatter.date);	

}

/* personalizza griglia */
function opzioni() {
	var grid = $(this).parents('.jqGridTOLDiv').find('.jqGridTOLTable');	
	var sortable = grid.jqGrid('getGridParam', 'sortable');
	var gridName = grid.attr('id');
	gridName = gridName.substr(0,gridName.length-6);
	grid.jqGrid('columnChooser', {
		msel:'multiselect2Checklist',
		//msel_opts:{sortable: sortable},//Nel caso si volesse lasciare impostare l'ordinamento dal cliente
		msel_opts:{sortable: false},//per ora non viene permesso spostare le colonne
		
		done: function (permutation){
			if (permutation) {
				var colModel = grid.jqGrid('getGridParam' , 'colModel');
				
				var nomi = [];
				var flags = [];
				var noColumns = true;
			    //NON MANTIENE L'ORDINE!!!!!!!!
				$.each(colModel, function(j, col) {
					nomi[j] = col.name;
					if(col.hidedlg) {
						flags[j] = 'H';
					} else if(col.hidden) {
						flags[j] = 'N';
					} else {
						flags[j] = 'S';	
						noColumns=false;
					}
				});
		    
				//ordinamento colonne
				//$(this).jqGrid('remapColumns', permutation, false, false);	
				
				var shrink = getShrinkValuePersonalizza(colModel);
				elencoTabelle[grid.attr('id')] = shrink;
				adattaDimensioniGriglia($(this), shrink);
				
				$(this).setGridParam({ datatype: 'json' });
				$(this).trigger('reloadGrid');
				
				if(noColumns){
					alert('Attenzione: Nessuna colonna da visualizzare');
				} else {
					$.post(getPathContext() + '/investimenti/personalizza.do', 
							{ct: gridName, nc: nomi, pc: permutation, fc: flags} //riduzione nomi parametri per avere queryString più corte possibile
					);
				}
			}
		}
	});
	return false;
}
function esportaGrigliaExcel(a) {
	var gridDiv = $(this).parents('.jqGridTOLDiv');
	var grid = gridDiv.find('.jqGridTOLTable');
	var url = grid.jqGrid('getGridParam', 'url').replace('.do','.xls');
	var form = gridDiv.find('.formHeaderGrid');
	if(form.is('form')) {
		if(url.indexOf('?') > 0) {
			url = url.substr(0, url.indexOf('?'));
		}
		url = url + '?' + form.serialize();
	}
	window.open(url);
}
function ricarica(a) {
	var gridId = $(a).parents('.jqGridTOLDiv').find('.jqGridTOLTable').attr('id');
	var grid = $('#' + gridId);
	var divContainer = $(grid).parents('.jqGridTOLDiv');
	var idDivDialog = '#' + divContainer.attr('id') + 'Dialog';
	if($(idDivDialog).is(':visible')) {
		$(idDivDialog).dialog('close');
	}
	ricaricaGriglia(gridId);
}
function ricaricaGriglia(gridId) {
	
	var oldText = '';
	var grid = $('#' + gridId);
	var divContainer = $(grid).parents('.jqGridTOLDiv');
	var idDivDialog = '#' + divContainer.attr('id') + 'Dialog';
	if(!$(idDivDialog).is(':visible')) {
		var form = divContainer.find('.formHeaderGrid');
		if(form.is('form')) {
			var url = grid.jqGrid('getGridParam', 'url');
			if(url.indexOf('?') > 0) {
				url = url.substr(0, url.indexOf('?'));
			}
			if(form.find('#wordInTitle').val()=='Cerca nel titolo'){
				oldText = form.find('#wordInTitle').val();
				form.find('#wordInTitle').val('');
			}
			grid.setGridParam({ url: url = url + '?' + form.serialize() });
		}
		grid.setGridParam({ datatype: 'json' });
		hideError(grid);
		hideWarning(grid);
		grid.trigger('reloadGrid');
		form.find('#wordInTitle').val(oldText)
	}
	return false;
}
function apriFormRicerca(a) {
	var gridDiv = $(a).parents('.jqGridTOLDiv');
	var grid = gridDiv.find('.jqGridTOLTable');
	var form = gridDiv.find('.formHeaderGrid');
	form.slideToggle(150, function() {
		adattaDimensioniGriglie();
	});
	return false;
}
function apriPopupGriglia() {
	var codTabella = $(this).parents('.jqGridTOLDiv').attr('id');
	/*codice originale --> url = getPathContext() + '/investimenti/popupTabella.do?codTabella=' + codTabella; */
	/*codice nuovo*/ url = '/template/investimenti_situaz_popup_news.php';/*fine*/
	if(location.href.indexOf('il_tuo_portafoglio')>0)
	{
		 url = '/template/pop_up_portafoglio.php';
	}

	window.open(url, codTabella, 'location=0,menubar=0,status=0,titlebar=0,toolbar=0,width=800,scrollbars=yes');
}

//Help
function helpTabella() {
	var codTabella = $(this).parents('.jqGridTOLDiv').attr('id');
	var nomeFunzione = 'helpTabella' + codTabella + '()';
	eval(nomeFunzione);
}

/* dialog pulsante opera */
function apriDialogOpera(a, idRow) {
	var tr = $(a).parents('tr');
	var grid = $(a).parents('.jqGridTOLTable');	
	grid.data('idRowGlobal', idRow);
	var idDialogOpera = grid.data('idDialogOpera');
    $(idDialogOpera).closest('.ui-dialog').addClass('operaModale');
	$(tr).siblings().removeClass('ui-state-highlight');
	$(tr).addClass('ui-state-highlight');
	var liVisibili = $(idDialogOpera).find('li').size();
	
	$(idDialogOpera).find('span').remove();
	
	$(idDialogOpera).find('a').each(function(){
		var testDisplay = $(this).data('testDisplay');
		var li = $(this).parent().show();
		
		if(testDisplay === null) {
			//continue
		} else if($.isFunction(testDisplay)) {
			var args = [];
			args.push(grid.jqGrid('getRowData', idRow));
			
			if(testDisplay.apply(this, args) === false) {
				li.hide();
				liVisibili--;
			}
		} else {
		    var rowData = grid.jqGrid('getRowData', idRow);
		   
		    if(rowData[testDisplay] === 'false') {
		    	li.hide();
				liVisibili--;
		    }
		}
	});
	
	if(liVisibili === 0) {
		
		$('<span></span>')
			.text('Nessuna funzione disponibile')
			.css({padding:'20px 3px', position:'relative', display: 'block'})
			.appendTo(idDialogOpera);
			
	}
	
	$(idDialogOpera).dialog('option', 'position', {
        my: "left top",
        at: "left bottom",
        of: $(a).closest('td'),
        offset: "12 0"
     });
	
	$(idDialogOpera).dialog('open');
}

function disabilitaBottoneOpera(a, idRow){

	var tr = $(a).parents('tr');
	var grid = $(a).parents('.jqGridTOLTable');
	
	grid.data('idRowGlobal', idRow);
	var idDialogOpera = grid.data('idDialogOpera');

	$(tr).siblings().removeClass('ui-state-highlight');
	$(tr).addClass('ui-state-highlight');
	var liVisibili = $(idDialogOpera).find('li').size();
	
	$(idDialogOpera).find('span').remove();
	
	$(idDialogOpera).find('a').each(function(){
		var testDisplay = $(this).data('testDisplay');
		var li = $(this).parent().show();
		
		if(testDisplay === null) {
			//continue
		} else if($.isFunction(testDisplay)) {
			var args = [];
			args.push(grid.jqGrid('getRowData', idRow));
			
			if(testDisplay.apply(this, args) === false) {
				li.hide();
				liVisibili--;
			}
		} else {
		    var rowData = grid.jqGrid('getRowData', idRow);
		   
		    if(rowData[testDisplay] === 'false') {
		    	li.hide();
				liVisibili--;
		    }
		}
	});
	
	if(liVisibili === 0) {
		
		//disabilita il bottone
		return true;
			
	}
	
	return false;
}

/* messaggi di errore e warning */
function showWarning(grid, msg, fadeOutMs) {
	var divContainer = $(grid).parents('.jqGridTOLDiv');
	var uiGrid = divContainer.find('.ui-jqgrid-bdiv');
	var idDivMsg = divContainer.attr('id') + 'DivWarning';
	var divMsg = $('#' + idDivMsg);
	
	hideError(grid);
	
	if( divMsg.is('div') ) { //c'è già
		$('span.msg', divMsg).html(msg);
		divMsg.stop(false, true).fadeIn('fast');
	} else {
		divMsg = $('<div></div>', {'class': 'ui-state-highlight ui-corner-all gridMsg', id: idDivMsg})
			.append('<span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">' + msg + '</span>')
			.appendTo(uiGrid)
			.position({
				of: uiGrid,
				my: 'center center',
				at: 'center center'
			})
	}
	if(typeof fadeOutMs === 'number') {
		divMsg.fadeOut(fadeOutMs);
	}
}
function showError(grid, msg) {
	var divContainer = $(grid).parents('.jqGridTOLDiv');
	var uiGrid = divContainer.find('.ui-jqgrid-bdiv');
	var idDivMsg = divContainer.attr('id') + 'DivError';
	var divMsg = $('#' + idDivMsg)
	
	hideWarning(grid);
	
	if( divMsg.is('div') ) { //c'è già
		$('span.msg', divMsg).text(msg);
		divMsg.show();
	} else {
		$('<div></div>', {'class': 'ui-state-error ui-corner-all gridMsg', id: idDivMsg})
			.append('<span class="ui-icon ui-icon-alert"></span><strong>Errore:</strong> <span class="msg">' + msg + '</span>')
			.appendTo(uiGrid)
			.position({
				of: uiGrid,
				my: 'center center',
				at: 'center center',
				using: function(p) {
					$(this).css({
						left: p.left,
						bottom: p.top //bottom per formRicerca
					});
				}
			})
	}
}
function hideWarning(grid) {
	var divContainer = $(grid).parents('.jqGridTOLDiv');
	$('#' + divContainer.attr('id') + 'DivWarning').hide();
}
function hideError(grid) {
	var divContainer = $(grid).parents('.jqGridTOLDiv');	
	$('#' + divContainer.attr('id') + 'DivError').hide();	
}

jQuery.fn.multiselect2Checklist = function(options) {

	// default settings
	var o = jQuery.extend({
		"sortable" : true,
		"scrollBar" : true,
		"cssHover": "ui-state-hover",
		"cssChecked": "ui-state-highlight",
		"cssDisabled": "ui-state-disabled"
	}, options);

	this.each(function() {

		if (this.type == 'select-one') {
			return $;
		} else if (this.type != 'select-multiple') {
			alert("Not a select");
			return $;
		}
		
		var select = $(this);	
		var w = select.outerWidth() - 4;	
		select.hide();		

		var container = $('<div></div>', {'class': 'checklist ui-widget ui-widget-content ui-corner-all'})
			.height(o.scrollBar ? select.outerHeight() : '100%')
			.width(w)
			.insertAfter(select);
		var ul = $('<ul></ul>')
			.appendTo(container); 
		
		$('option',select).each(function(i) {
			var option = $(this);

			var li = $('<li></li>', {tabindex: 0})
				.addClass('ui-corner-all')
				.data('enableClick', true)
				.data('option', option)
				.mouseenter(function() {
					if ( !option.prop('disabled') ) {
						$(this).addClass(o.cssHover);
					}
				})
				.mouseleave(function() {
					$(this).removeClass(o.cssHover);
				})
				.click(function() {
					if ( $(this).data('enableClick') && !option.prop('disabled') ) {
						if ( option.prop('selected') ) {
							option.prop('selected', false);
							input.prop('checked', false);
							$(this).removeClass(o.cssChecked);
						} else {
							option.prop('selected', true);
							input.prop('checked', true);
							$(this).addClass(o.cssChecked);
						}
					}
				})
				.appendTo(ul);
			var input = $('<input/>', {type: 'checkbox'})
				.appendTo(li);
			var label = $('<label></label>')
				.text( option.text() )
				.appendTo(li);
			
			if ( option.prop('disabled') ) {
				input.prop('disabled', true);
				li.addClass(o.cssDisabled);
			} else if ( option.prop('selected') ) {
				input.prop('checked', true);
				li.addClass(o.cssChecked);
			}
		});
		
		if(o.sortable) {
			ul.sortable({
				//placeholder: "ui-state-active",
				delay: 50,
				start: function(event, ui) {
					ui.item.data('enableClick', false);
					ui.item.css('cursor', 'move');
				},
				stop: function(event, ui) {
					var li = ui.item;
					// call this async to let the item be placed correctly
					setTimeout(function(){
						li.data('enableClick', true);
						li.css('cursor', '');

						//sposto anche nella select
						var option = li.data('option');
						if (option) {
							var prevLi = li.prev('li:not(.ui-helper-hidden-accessible,.ui-sortable-placeholder):visible');
							var prevOption = prevLi.size() ? prevLi.data('option') : null;					
							if (prevOption) {
								option.insertAfter(prevOption);
							} else {
								option.prependTo(option.parent());
							}
						}						
					}, 10);
				}
			});
		}
	});

};

