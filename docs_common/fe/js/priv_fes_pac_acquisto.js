/* globals $, isSmallDevice, compraConf, contiConf, setSpinner, isLibrerie, cgi_script, cleanImportInt */
/* exported is4s, pacAcquisto */
"use strict";
var is4s = false;
var isMultiplo = true;

var pacAcquisto = (function() {
    var isLibrerieOK = (typeof isLibrerie !== "undefined") && isLibrerie,
        libreriePath = "/librerie/include/commons/ajax/fes";
    /****** PUBLIC METHODS ******/
    
    function getDatiByIndice(indice) {
    	var periodicita = $("#tableBuyPac tbody tr[data-index='" +  indice + "'] select.periodicita").val();
    	return compraConf.data[indice].periodicita[periodicita?periodicita:"M"];
    }
    
    function getNumeroVersIniziali(indice) {
    	var periodicita = $("#tableBuyPac tbody tr[data-index='" +  indice + "'] select.periodicita").val();
    	return compraConf.data[indice].periodicita[periodicita?periodicita:'M'].numerorateiniziali;
    }
    
    function thStringFormatter(value, row) {
        return row.cancellato ? wrapDeletedText(value) : (row.acquistato ? wrapPurchasedText(value) : value);
    }

    function thDeleteFormatter(value, row) {
        var retVal = "";
        if (!row.cancellato && !row.acquistato) {
            retVal = "<i class=\"icon icon-2x icon-chiudi_table\" data-isin=\"" + row.isin + "\"></i>";
        }
        return retVal;
    }

    function thNumericFormatter(value, row) {
        var retVal = formatNumber(value);
        return row.cancellato ? wrapDeletedText(retVal) : (row.acquistato ? wrapPurchasedText(retVal) : retVal);
    }

    function thSpinnerRataFormatter(value, row) {
        var retVal;
        if (!row.cancellato && !row.acquistato) {
            retVal = "<input type=\"text\" class=\"form-control spinner impRata\" maxlength=\"7\" value=\"" + value + "\" data-min=\"" + row.importomin + "\">";
        } else if (row.cancellato) {
            retVal = wrapDeletedText(formatNumber(value));
        } else {
            retVal = wrapPurchasedText(formatNumber(value));
        }
        return retVal;
    }

    function thSpinnerVersInizFormatter(value, row) {
        var retVal;
        var dataMax = row.numerorateiniziali==row.investimentoiniziale? (row.versamentiTotali *  row.importorata) : row.versamentiTotali;
        
        if (!row.cancellato && !row.acquistato) {
            retVal = "<input type=\"text\" class=\"form-control spinner versIniz\" maxlength=\"3\" value=\"" + value + "\" data-min=\"" + row.numeroratemin + "\" data-max=\"" + dataMax + "\">";
        } else if (row.cancellato) {
            retVal = wrapDeletedText(formatNumber(value));
        } else {
            retVal = wrapPurchasedText(formatNumber(value));
        }
        return retVal;
    }

    function thSelectVersTotFormatter(value, row) {
        var retVal;
        if (!row.cancellato && !row.acquistato) {
            retVal = '<select class="form-control versTot">';
            $.each(value, function(index, item) {
                var selected = item === row.versamentiTotali.toString() ? " selected" : "";
                retVal += '<option ' + selected + ' value="' + item + '">' + item + '</option>';
            });
            retVal += '</select>';
        } else if (row.cancellato) {
            retVal = wrapDeletedText(formatNumber(row.versamentiTotali));
        } else {
            retVal = wrapPurchasedText(formatNumber(row.versamentiTotali));
        }
        return retVal;
    }

    function thSelectPeriodicitaFormatter(value, row) {
        var retVal;
        if (!row.cancellato && !row.acquistato) {
            retVal = '<select class="form-control periodicita">';
            $.each(value, function(index, item) {
                var selected = item === row.periodicita ? " selected" : "";
                retVal += '<option ' + selected + ' value="' + item + '">' + periodicitaTxtObj[item] + '</option>';
            });
            retVal += '</select>';
        } else if (row.cancellato) {
            retVal = wrapDeletedText(periodicitaTxtObj[row.periodicita]);
        } else {
            retVal = wrapPurchasedText(periodicitaTxtObj[row.periodicita]);
        }
        return retVal;
    }
    /****** PRIVATE METHODS ******/
    /* UTILITIES */
    function setDispo(conto) {
        conto = conto.replace(/\s+/g, '');
//        $('#disponibilita').html(formatNumber(contiConf[conto]) + ' EUR');
        $('#disponibilita').html(contiConf[conto] + ' EUR');
    }

    function formatNumber(value) {
        var formattedVal = "",
            isNegative = (value < 0),
            stringArr = value.toString().replace('-', '').split("."),
            intVal = stringArr[0],
            i,
            len = intVal.length;
        for (i = 1; i <= len; ++i) {
            formattedVal = intVal[len - i] + formattedVal;
            if (i !== len && (i % 3) === 0) {
                formattedVal = '.' + formattedVal;
            }
        }
        formattedVal += stringArr[1] ? ',' + stringArr[1] : '';
        return isNegative ? '-' + formattedVal : formattedVal;
    }

    function wrapDeletedText(text) {
        return '<span class="cancellato">' + text + '</span>';
    }

    function wrapPurchasedText(text) {
        return '<span class="acquistato">' + text + '</span>';
    }

    function showError(msg) {
        msg = msg ? msg : "Si &egrave; verificato un errore tecnico";
        $("#errorText").html(msg);
        $("#layerError").modal();
    }
    /* TABLE */
    var resizedTables = {},
        tableDataBuyPac = [],
        totDataBuyPac = [],
        maxRata = 1000000,
        tableConfig = {
            "tableBuyPac": {
                sortable: false,
                pagination: false,
                rowStyle: rowStyleFunc
            }
        },
        rowToDeleteBuyPac,
        isinToDeleteBuyPac,
        periodicitaValObj = {
            M: 1,
            B: 2,
            T: 3,
            Q: 4,
            S: 6,
            A: 12
        },
        periodicitaTxtObj = {
            A: "Annuale",
            S: "Semestrale",
            Q: "Quadrimestrale",
            T: "Trimestrale",
            B: "Bimestrale",
            M: "Mensile"
        };

    function rowStyleFunc(row, index) {
        if (index % 2 === 0) {
            return {
                classes: 'dispari'
            };
        } else {
            return {
                classes: 'pari'
            };
        }
    }

    function filterCompraConf() {
        tableDataBuyPac.length = 0;
        compraConf.data.sort(function(a, b) {
            var valA = a.cancellato ? 0 : (a.acquistato ? 1 : 2),
                valB = b.cancellato ? 0 : (b.acquistato ? 1 : 2);
            return valA - valB;
        });
        $.each(compraConf.data, function(index, item) {
            var datiPeriodicita,
                importorata,
                listaPeriodicita = [],
                listaVersTot,
                dataRow;
            dataRow = {
                index: index,
                cancellato: item.cancellato,
                acquistato: item.acquistato,
                nomefondo: item.nomefondo,
                codicefida: item.codicefida,
                isin: item.isin
            };
            if (item.acquistato) {
                $.extend(dataRow, item.acquisto);
            } else if (item.cancellato) {
                datiPeriodicita = item.periodicita.M;
                dataRow.importorata = 1 * datiPeriodicita.importoratasuccessiva;
                dataRow.numerorateiniziali =  datiPeriodicita.numerorateiniziali > 0 ? 1 * datiPeriodicita.numerorateiniziali : datiPeriodicita.importoinizialepac;
                dataRow.versamentiTotali = 1 * datiPeriodicita.numeroratepiano.split(',')[0];
                dataRow.periodicita = 'M';
                dataRow.investimentoiniziale = datiPeriodicita.numerorateiniziali > 0 ? (dataRow.numerorateiniziali * importorata) : datiPeriodicita.importoinizialepac;
                dataRow.investimentotale = datiPeriodicita.numerorateiniziali > 0 ? (dataRow.numerorateiniziali * importorata) : datiPeriodicita.importoinizialepac;
            } else {
                $.each(item.periodicita, function(key) {
                    listaPeriodicita.push(key);
                });
                listaPeriodicita.sort(function(a, b) {
                    return periodicitaValObj[a] - periodicitaValObj[b];
                });
                if (item.acquisto.periodicita) {
                    datiPeriodicita = item.periodicita[item.acquisto.periodicita];
                } else {
                    datiPeriodicita = item.periodicita.M;
                }
                listaVersTot = datiPeriodicita.numeroratepiano.split(',');
                listaVersTot.sort(function(a, b) {
                    return a - b;
                });
                if (item.acquisto.numerorateiniziali) {
                    $.extend(dataRow, item.acquisto);
                } else {
                    if (item.acquisto.importorata) {
                        dataRow.importorata = 1 * item.acquisto.importorata;
                    } else {
                        dataRow.importorata = 1 * datiPeriodicita.importoratasuccessiva;
                    }
                    
                    if(datiPeriodicita.numerorateiniziali > 0) {
                    	
                    	dataRow.numerorateiniziali =  datiPeriodicita.numerorateiniziali;
                    	dataRow.numerorateiniziali =  datiPeriodicita.numerorateiniziali;
                        dataRow.investimentotale = dataRow.numerorateiniziali * importorata;
                        dataRow.investimentoiniziale = dataRow.numerorateiniziali * importorata;
                        
                    } else {
                    	
                    	if (isMultiplo) {
                    		dataRow.numerorateiniziali = calcolaMultiplo(datiPeriodicita.importoratainiziale,datiPeriodicita.importoinizialepac,index);
                    	} else {
                    		dataRow.numerorateiniziali =  datiPeriodicita.importoinizialepac;
                    	}
                        dataRow.investimentotale = datiPeriodicita.numerorateiniziali > 0 ? (dataRow.numerorateiniziali * importorata) : datiPeriodicita.importoinizialepac;
                        dataRow.investimentoiniziale = datiPeriodicita.numerorateiniziali > 0 ? (dataRow.numerorateiniziali * importorata) : datiPeriodicita.importoinizialepac;
                    	
                    }
                    
                    dataRow.versamentiTotali = 1 * listaVersTot[0];
                    dataRow.periodicita = listaPeriodicita[0];
                }
                
                dataRow.numeroratemin =  1 > datiPeriodicita.numerorateiniziali && dataRow.numerorateiniziali ? dataRow.numerorateiniziali : datiPeriodicita.numerorateiniziali;
                dataRow.importomin = 1 * datiPeriodicita.importoratasuccessiva;
                dataRow.anticiporate = item.anticiporate.toLowerCase();
                dataRow.listaPeriodicita = listaPeriodicita;
                dataRow.listaVersTot = listaVersTot;
            }
            tableDataBuyPac.push(dataRow);
        });
    }

    function updateDataBuyPac() {
        var totals = [0, 0, 0];
        $.each(tableDataBuyPac, function(index, item) {
        	
        	var numRateIni = getNumeroVersIniziali(index);
        	
            if (!item.acquistato) {
                item.investimentoiniziale = numRateIni > 0 ? item.importorata * item.numerorateiniziali : item.numerorateiniziali;
                if (item.anticiporate === "s") {
                    item.investimentotale = item.importorata * item.versamentiTotali;
                } else {
                    item.investimentotale = item.importorata * item.versamentiTotali + item.investimentoiniziale;
                }
                if (!item.cancellato) {
                    totals[0] += item.importorata;
                    totals[1] += item.investimentotale;
                    totals[2] += item.investimentoiniziale;
                }
            }
        });
        totDataBuyPac = totals;
        tableConfig.tableBuyPac.data = tableDataBuyPac;
    }

    function updateTableBuyPac(destroy) {
        var tableId = "tableBuyPac",
            table = $("#" + tableId),
            scrollTop = $('html').scrollTop() || $('body').scrollTop(),
            minImpRata
            ;
        updateDataBuyPac();
        if (destroy === true) {
            table.bootstrapTable('destroy');
        }
        table.bootstrapTable(tableConfig[tableId]);
        table.find(".spinner.impRata").each(function(index) {
            var spinnerId = "spinnerImpRata" + index,
                el = $(this);
            minImpRata = 1 * el.attr("data-min");
            el.attr("id", spinnerId);
            setSpinner({
                idInput: '#' + spinnerId,
                min: minImpRata,
                max: maxRata,
                step: minImpRata
            });
        });
        table.find(".spinner.versIniz").each(function(index) {
            var spinnerId = "spinnerVersTot" + index,
                el = $(this),
                max = 1 * el.attr("data-max"),
               min = 1 * ( 1 > getNumeroVersIniziali(1 * index)  ? el.attr("data-min") : 1),
               step = 1 * ( 1 > getNumeroVersIniziali(1 * index)  ? minImpRata : 1);
            el.attr("id", spinnerId);
            setSpinner({
                idInput: '#' + spinnerId,
                min: min,
                max: max,
                step: step
            });
        });
        writeTotBuyPac();
        $('html, body').animate({ scrollTop: scrollTop }, 0);
    }

    function updateTotBuyPac() {
        updateDataBuyPac();
        writeTotBuyPac();
    }

    function updateImpRataSpinner(index, min, input) {
        if ((input.val() * 1) > maxRata) {
            input.val(maxRata);
        }
        setSpinner({
            idInput: '#' + input.attr('id'),
            min: min,
            max: maxRata,
            step: min
        });
        tableConfig.tableBuyPac.data[index].importorata = 1 * input.val();
    }
    
	function updateVersInizSpinnerFromImpRata(index, step) {
	    	
			var numRateInit;
		
	    	var spinnerId = "spinnerVersTot" + index,
	        	el = $("#" + spinnerId),
	        	min = 1 * el.attr("data-min"),
	        	max = 1 * el.attr("data-max");
	    		el.attr("id", spinnerId);
	    		numRateInit = 1 * el.val();
	    		
		    setSpinner({
		        idInput: '#' + spinnerId,
		        min: min,
		        max: max,
		        step: 1 * step
		    });
		    
		    if(isMultiplo) {
		    	numRateInit=calcolaMultiplo(step, numRateInit, index);
		    }

		    tableConfig.tableBuyPac.data[index].numerorateiniziali = 1 * numRateInit;
	    }

    function updateVersInizSpinner(index, min, max, input,step) {
    	
        input.attr('data-min', min);
        input.attr('data-max', max);
        if ((input.val() * 1) > max) {
            input.val(max);
        }
        setSpinner({
            idInput: '#' + input.attr('id'),
            min: min,
            max: max,
            step: step ? step : 1
        });
        
        tableConfig.tableBuyPac.data[index].numerorateiniziali = 1 * input.val();
    }

    function updateVerTotSelect(index, listaVersTot, select) {
        select.empty();
        $.each(listaVersTot, function(index, item) {
            select.append($('<option>').val(item).text(item));
        });
        tableConfig.tableBuyPac.data[index].listaVersTot = listaVersTot;
        tableConfig.tableBuyPac.data[index].versamentiTotali = listaVersTot[0];
    }

    function writeTotBuyPac() {
        $("#tableBuyPac tbody tr").each(function(index) {
            var tdArr;
            if (!tableDataBuyPac[index].cancellato && !tableDataBuyPac[index].acquistato) {
                tdArr = $(this).find("td");
                tdArr.eq(5).text(formatNumber(tableDataBuyPac[index].investimentotale));
                tdArr.eq(6).text(formatNumber(tableDataBuyPac[index].investimentoiniziale));
            }
        });
        $("#tableBuyPac .total").each(function(index, td) {
            $(td).text(formatNumber(totDataBuyPac[index]));
        });
    }

    function setFondiToBuy() {
        $.each(tableDataBuyPac, function(index, row) {
            $.each(compraConf.data, function(indexConf, rowConf) {
                if (row.codicefida === rowConf.codicefida) {
                    if (row.cancellato) {
                        rowConf.cancellato = row.cancellato;
                    } else if (!row.acquistato) {
                        rowConf.acquisto = {
                            "importorata": row.importorata,
                            "numerorateiniziali": row.numerorateiniziali,
                            "versamentiTotali": row.versamentiTotali,
                            "periodicita": row.periodicita,
                            "investimentotale": row.investimentotale,
                            "investimentoiniziale": row.investimentoiniziale
                        };
                    }
                    return false;
                }
            });
        });
    }

    function resizeTablePac() {
        var tableId = "tableBuyPac";
        if (!resizedTables[tableId] || resizedTables[tableId] !== isSmallDevice) {
            resizedTables[tableId] = isSmallDevice;
            if (typeof resizedTables[tableId] !== "undefined") {
                updateTableBuyPac(true);
            } else {
                updateTableBuyPac();
            }
        }
    }
    /* TABLE EVENT HANDLERS */
    var onlyNumbers = /^\d+$/;

    function handleSpinnerKeyup(e, input) {
        var val = input.val(),
            min = 1 * input.attr("data-min"),
            res = cleanImportInt(e);
        if (!res) {
            if (!onlyNumbers.test(val)) {
                val = val.substring(0, val.length - 1);
                if (!onlyNumbers.test(val)) {
                    input.val(min);
                } else {
                    input.val(val);
                }
            } else {
                input.val(val);
            }
        }
    }

    function handleImpRataChange(e) {
        var input = $(e.target).closest('.ui-spinner').find('input'),
            tr = input.closest("tr"),
            val = 1 * input.val(),
            min = 1 * input.attr("data-min"),
            index = 1 * tr.attr("data-index");
        
        if (val < min) {
            val = min;
            input.val(min);
        } else if (val > maxRata) {
            val = maxRata;
            input.val(maxRata);
        } else if (val % min) {
            val = Math.floor(val / min) * min;
            input.val(val);
        }
        
        if(1>getDatiByIndice(index).numerorateiniziali) {
        	updateVersInizSpinnerFromImpRata(index,val);
            
        	input = $("#spinnerVersTot" + index);
        	
        	min = 1 * tableConfig.tableBuyPac.data[index].numerorateiniziali;
        	
        	input.val(min);

        	var max = 1 * input.attr("data-max");//(input.closest('tr').find('.versTot').val()),
        	updateVersInizSpinner(index, min, max, input, val);
        	
        }
        
        tableConfig.tableBuyPac.data[index].importorata = val;
        updateTotBuyPac();
    }

    function handleVersInizChange(e) {
        var input = $(e.target).closest('.ui-spinner').find('input'),
            tr = input.closest("tr"),
            val = 1 * input.val(),
            min = 1 * input.attr("data-min"),
            max = 1 * input.attr("data-max"),//(input.closest('tr').find('.versTot').val()),
            index = 1 * tr.attr("data-index");
        if (val < min) {
            val = min;
            input.val(min);
        } else if (val > max) {
            val = max;
            input.val(max);
        }
        tableConfig.tableBuyPac.data[index].numerorateiniziali = val;
        updateTotBuyPac();
    }

    function handleVersTotChange(e) {
        var el = $(e.target),
            input = el.closest('tr').find('.versIniz'),
            tr = el.closest("tr"),
            index = 1 * tr.attr("data-index"),
            inputImpRata = tr.find('.impRata'),
          //index, min, max, input,step
            min = 1 * input.attr("data-min"),
            max = 1 * el.val();
        if(getNumeroVersIniziali(index) > 0) {
        	updateVersInizSpinner(index, min, max, input,  1  );
        } else {
        	
        	updateVersInizSpinnerFromImpRata(index,inputImpRata.val());
            
        	input = $("#spinnerVersTot" + index);
        	
        	min = 1 * tableConfig.tableBuyPac.data[index].numerorateiniziali;
        	
        	input.val(min);

        	updateVersInizSpinner(index, min, (inputImpRata.val() * max), input, inputImpRata.val() );
        }
        tableConfig.tableBuyPac.data[index].versamentiTotali = max;
        
        updateTotBuyPac();
    }

    function handlePeriodicitaChange(e) {
        var el = $(e.target),
            val = el.val(),
            tr = el.closest('tr'),
            index = 1 * tr.attr("data-index"),
            inputImpRata = tr.find('.impRata'),
            inputVersIniz = tr.find('.versIniz'),
            selectVersTot = tr.find('.versTot'),
            datiPeriodicita,
            listaVersTot;
        datiPeriodicita = compraConf.data[index].periodicita[val];
        listaVersTot = datiPeriodicita.numeroratepiano.split(',');
        listaVersTot.sort(function(a, b) {
            return a - b;
        });
        tableConfig.tableBuyPac.data[index].periodicita = val;
        tableConfig.tableBuyPac.data[index].numeroratemin = datiPeriodicita.numerorateiniziali > 0 ? datiPeriodicita.numerorateiniziali : datiPeriodicita.importoinizialepac;
        inputImpRata.val(datiPeriodicita.importoratasuccessiva);
        inputVersIniz.val(datiPeriodicita.numerorateiniziali > 0 ? datiPeriodicita.numerorateiniziali : datiPeriodicita.importoinizialepac);
        updateImpRataSpinner(index, datiPeriodicita.importoratasuccessiva, inputImpRata);
        
        if( datiPeriodicita.numerorateiniziali > 0 ) {
        	updateVersInizSpinner(index, datiPeriodicita.numerorateiniziali, listaVersTot[0] , inputVersIniz,	 1 );
        } else {
        	
            	updateVersInizSpinnerFromImpRata(index,inputImpRata.val());
                
            	var input = $("#spinnerVersTot" + index);
            	
            	var min = 1 * tableConfig.tableBuyPac.data[index].numerorateiniziali;
            	
            	input.val(min);

            	updateVersInizSpinner(index, min, (inputImpRata.val() * listaVersTot[0] ), input, inputImpRata.val());
        	
        }
        
        updateVerTotSelect(index, listaVersTot, selectVersTot);
        updateTotBuyPac();
    }

    function handleDeleteClick(e) {
        var el = $(e.target),
            tr,
            toDelete = 0;
        $.each(tableConfig.tableBuyPac.data, function(index, row) {
            if (!row.cancellato && !row.acquistato) {
                ++toDelete;
            }
        });
        if (toDelete > 1) {
            tr = el.closest('tr');
            rowToDeleteBuyPac = 1 * tr.attr("data-index");
            isinToDeleteBuyPac = el.attr("data-isin");
            $("#layerDelete").modal({
                "show": true,
                "backdrop": false
            });
        } else {
            $("#layerNoDelete").modal();
        }
    }
    /* RESIZE */
    $(window).resize(function() {
        resizeTablePac();
    });
    /* INIT */
    function initHandlers() {
        $('#conti').change(function() {
            setDispo($(this).val());
        });
        setDispo($('#conti').val());
        $("#deleteOK").click(function() {
            var modalContent = $(this).closest(".modal-content"),
                deleteUrl = isLibrerieOK ? libreriePath + "/fdaDelFondo.php" : cgi_script + "/investimenti/SimPacDelIsin.action";

            function showDeleteError() {
                modalContent.removeClass('loading');
                $("#layerDelete").modal('hide');
                showError("Si &egrave; verificato un errore durante la cancellazione del fondo.");
            }
            modalContent.addClass('loading');
            $.ajax(deleteUrl, {
                method: 'POST',
                dataType: 'json',
                data: {
                    "isin": isinToDeleteBuyPac,
                    "cancellato": true
                }
            }).done(function(data) {
                var isOK = false;
                try {
                    if (data.data.esito && data.data.esito.toLowerCase() === "ok") {
                        tableConfig.tableBuyPac.data[rowToDeleteBuyPac].cancellato = true;
                        tableConfig.tableBuyPac.data.sort(function(a, b) {
                            var valA = a.cancellato ? 0 : (a.acquistato ? 1 : 2),
                                valB = b.cancellato ? 0 : (b.acquistato ? 1 : 2);
                            return valA - valB;
                        });
                        modalContent.removeClass('loading');
                        $("#layerDelete").on('hidden.bs.modal', function() {
                            updateTableBuyPac(true);
                        }).modal('hide');
                        isOK = true;
                    }
                } finally {
                    if (!isOK) {
                        modalContent.removeClass('loading');
                        showDeleteError();
                    }
                }
            }).fail(function() {
                modalContent.removeClass('loading');
                showDeleteError();
            });
        });
        var backToRicUrl = isLibrerieOK ? "/connect.php?page=strutt_priv.php&tpl=tpl_priv_fes_pac_ricerca.php&responsive=y&liv0=4&liv1=2&liv2=4&liv3=1" : cgi_script + "/wbOnetoone/2l/action/investimenti/PianiAccumuloPAC.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
        $(".backToRic").attr("href", backToRicUrl);
    }

    function initTable() {
        /* Tabella simulatore PAC */
        $("#tableBuyPac").on("click", ".impRata ~ .ui-spinner-button", handleImpRataChange).on("keyup", ".ui-spinner-input.impRata", function(e) {
            handleSpinnerKeyup(e, $(this));
        }).on("blur change", ".ui-spinner-input.impRata", handleImpRataChange).on("click", ".versIniz ~ .ui-spinner-button", handleVersInizChange).on("keyup", ".ui-spinner-input.versIniz", function(e) {
            handleSpinnerKeyup(e, $(this));
        }).on("blur change", ".ui-spinner-input.versIniz", handleVersInizChange).on("change", ".versTot", handleVersTotChange).on("change", ".periodicita", handlePeriodicitaChange).on("click", ".icon-chiudi_table", handleDeleteClick);
        filterCompraConf();
        resizeTablePac();
    }

    function initForm() {
        // var buyPacUrl = isLibrerieOK ? "#!" : cgi_script + "/wbOnetoone/2l/do/FMP/buyPacFromCartSelect.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_carrello"; OBSKEY=nav_priv_wbx_acquisto
//        var buyPacUrl = isLibrerieOK ? "#!" : cgi_script + "/wbOnetoone/2l/do/FMP/buyPacFromCartSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
        var buyPacUrl = isLibrerieOK ? "#!" : cgi_script + "/wbOnetoone/2l/action/investimenti/BuyPacFromCartSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
        $("#buyPac").attr("action", buyPacUrl);
        $("#nextBuyPac").click(function() {
            setFondiToBuy();
            $("#cart").val(JSON.stringify(compraConf));
            $("#conto").val($("#conti").val());
            $("#depSimPac").val("true");
            $("#buyPac").submit();
        });
    }
    
    
    function pacImpMinInvInit(indice) {
    	
    	var periodicita = getDatiByIndice(indice);
    	var buy = compraConf.data[indice].acquisto;
    	
    	return buy.investimentoiniziale > periodicita.importoinizialepac ? buy.investimentoiniziale : periodicita.importoinizialepac;
    }
    
    
//    function spinnerMinVal(currMin, rata) {
//    	var newMin = currMin;
//    	var mod = currMin % rata;
//    	
//    	if(mod>0) {
//    		mod = (currMin + rata) % rata;
//    		newMin = (currMin + rata) - mod;
//    	}
//    	
//    	return newMin;
//    }
    
    
    function calcolaMultiplo( rcurr ,val,indice) {
    	var investinitcurr = parseFloat(val);
    	var ratacurr = 1 * rcurr;
    	var mod = investinitcurr %  ratacurr;
    	var totale=investinitcurr-mod;
    	var invMinInvest = pacImpMinInvInit(indice) ;
    	
    	if(totale < invMinInvest ) {
    			 
    		investinitcurr = invMinInvest + ratacurr;
    		mod = investinitcurr %  ratacurr;
    		totale = investinitcurr - mod;
    			 
    	 }
    	
    	return totale;
    }
    
    
    $(function() {
        initHandlers();
        initTable();
        initForm();
    });
    return {
        thDeleteFormatter: thDeleteFormatter,
        thStringFormatter: thStringFormatter,
        thNumericFormatter: thNumericFormatter,
        thSpinnerRataFormatter: thSpinnerRataFormatter,
        thSpinnerVersInizFormatter: thSpinnerVersInizFormatter,
        thSelectVersTotFormatter: thSelectVersTotFormatter,
        thSelectPeriodicitaFormatter: thSelectPeriodicitaFormatter
    };
}());
