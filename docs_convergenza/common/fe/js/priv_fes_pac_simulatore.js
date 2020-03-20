/* globals $, AmCharts, renderPickDateMobile, appendDatePickerIcon, highlightDays, isConsultare,
    pacConf, isSmallDevice, setSpinner, setHasErrors, cgi_script, isLibrerie, cleanImportInt */
/* exported is4s, pacSimulatore, chart */
"use strict";
var is4s = false;
var pacSimulatore = (function() {
    var isLibrerieOK = (typeof isLibrerie !== "undefined") && isLibrerie,
        libreriePath = "/include/ajax",
        isConsultareOK = (typeof isConsultare !== "undefined") && isConsultare;

    /****** PUBLIC METHODS ******/
    function thDeleteFormatter(value, row) {
        return "<i class=\"icon icon-2x icon-chiudi_table\" data-isin=\"" + row.isin + "\"></i>";
    }

    function thSpinnerFormatter(value, row) {
        return "<input type=\"text\" class=\"form-control spinner\" maxlength=\"7\" value=\"" + value + "\" " + "\" data-min=\"" + row.importomin + "\">";
    }

    function thPercFormatter(value) {
        return formatNumber(value) + '%';
    }

    function thNumericFormatter(value) {
        return formatNumber(value);
    }
    /****** PRIVATE METHODS ******/
    /* UTILITIES */
    function cloneDate(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate(), 0, 0, 0);
    }

    function parseDate(value) {
        var date = null,
            dateArr,
            dd, mm, yyyy;
        if (value !== "") {
            try {
                dateArr = value.split("/");
                yyyy = dateArr[2] * 1;
                mm = dateArr[1] - 1;
                dd = dateArr[0] * 1;
                date = new Date(yyyy, mm, dd, 0, 0, 0);
                // Evita date errate tipo 00/00/2015
                if (date.getDate() !== dd || date.getMonth() !== mm || date.getFullYear() !== yyyy) {
                    date = null;
                }
            } catch (error) {
                date = null;
            }
        }
        return date;
    }

    function writeDate(value) {
        var dateArr = value.split("-"),
            mese = mesiObj[1 * (dateArr[1] - 1)] + " ",
            giorno = 1 * dateArr[2];
        giorno = (giorno > 1 ? giorno : giorno + "&deg;") + " ";
        return giorno + mese + dateArr[0];
    }

    function writeIsoDate(date) {
        var anno = date.getFullYear(),
            mese = date.getMonth() + 1,
            giorno = date.getDate();
        mese = mese > 9 ? mese : "0" + mese;
        giorno = giorno > 9 ? giorno : "0" + giorno;
        return anno + "-" + mese + "-" + giorno;
    }

    function getMontsDiff(dateFromDate, dateToDate) {
        var monthsDiff = 0,
            yearsDiff;
        if (dateFromDate && dateToDate && (dateFromDate < dateToDate)) {
            if (dateToDate.getFullYear() === dateFromDate.getFullYear()) {
                monthsDiff = dateToDate.getMonth() - dateFromDate.getMonth();
            } else {
                yearsDiff = dateToDate.getFullYear() - dateFromDate.getFullYear();
                monthsDiff = (dateToDate.getMonth()) + (12 - dateFromDate.getMonth());
                if (yearsDiff > 1) {
                    monthsDiff += (yearsDiff - 1) * 12;
                }
            }
            if (monthsDiff && dateToDate.getDate() < dateFromDate.getDate()) {
                --monthsDiff;
            }
        }
        return monthsDiff;
    }

    function showError(msg) {
        msg = msg ? msg : "Si &egrave; verificato un errore tecnico";
        $("#errorText").html(msg);
        $("#layerError").modal();
    }

    function formatNumber(value) {
        var formattedVal = "",
            stringArr = value.toString().split("."),
            stringVal = stringArr[0],
            i,
            len = stringVal.length;
        for (i = 1; i <= len; ++i) {
            formattedVal = stringVal[len - i] + formattedVal;
            if (i !== len && (i % 3) === 0) {
                formattedVal = '.' + formattedVal;
            }
        }
        if (stringArr[1]) {
            formattedVal += ',' + stringArr[1];
        }
        return formattedVal;
    }
    /* TABLE */
    var resizedTables = {},
        tableDataSimPac = [],
        totDataSimPac = [],
        tableConfig = {
            "tableSimPac": {
                sortable: false,
                pagination: false,
                rowStyle: rowStyleFunc
            },
            "tableSelPac": {
                sortable: false,
                pagination: false,
                rowStyle: rowStyleFunc,
                onCheck: checkFunc,
                onUncheck: checkFunc
            }
        },
        rowToDeleteSimPac,
        isinToDeleteSimPac,
        onlyNumbers = /^\d+$/;

    function handleSpinnerChange(e, input) {
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

    function getSelectionsInfo(rowsArr) {
        var selectionsInfo = {
            codicifida: [],
            isin: [],
            iir: []
        };
        $.each(rowsArr, function(inddex, row) {
            if (!row.selected) {
                selectionsInfo.codicifida.push(this.codicefida);
                selectionsInfo.isin.push(this.isin);
            } else {
                selectionsInfo.iir.push(this.isin + '%3B' + this.importorata.toString());
            }
        });
        return selectionsInfo;
    }

    function checkFunc() {
        var selections = $("#tableSelPac").bootstrapTable('getSelections'),
            btnNext = $("#nextSimPac");
        if (selections.length) {
            btnNext.removeClass("btn-disabled").removeAttr("disabled");
        } else {
            btnNext.addClass("btn-disabled").attr("disabled", "disabled");
        }
    }

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

    function filterPacConf(skipReset) {
        var periodo = $("#selPeriodo").val(),
            selectInd = 0,
            dateRangeMax = cloneDate(new Date()),
            selChartPac = $("#selChartPac").empty(),
            numRateIniziali = 0,
            mesiPeriodo = periodicitaValObj[periodo];
        periodo = periodo ? periodo : "M";
        if (!skipReset) {
            tableDataSimPac.length = 0;
        }
        if (pacConf.data.length > 1) {
            selChartPac.prepend($("<option selected>").val(selectInd++).text("Tutti"));
        }
        dateFromMinSimPac = null;
        $.each(pacConf.data, function(index, item) {
            var importoiniziale, dataLancioArr, dataLancio,
                periodicita = item.periodicita[periodo],
                importorata = 1 * periodicita.importoratasuccessiva;
            importoiniziale = periodicita.numerorateiniziali > 0 ?(periodicita.numerorateiniziali * importorata) : periodicita.importoinizialepac;
            dataLancioArr = item.datalancio.split("-");
            dataLancio = new Date(dataLancioArr[0] * 1, dataLancioArr[1] - 1, dataLancioArr[2] * 1, 0, 0, 0);
            if (!dateFromMinSimPac || dateFromMinSimPac < dataLancio) {
                dateFromMinSimPac = dataLancio;
                dateFromMinTextSimPac = item.datalancio;
            }
            if (item.anticiporate.toLowerCase() === "s") {
                numRateIniziali = Math.max(numRateIniziali, (periodicita.numerorateiniziali > 0 ? periodicita.numerorateiniziali * mesiPeriodo : periodicita.importoinizialepac)  );
            }
            if (!skipReset) {
                tableDataSimPac.push({
                    nomefondo: item.nomefondo,
                    codicefida: item.codicefida,
                    isin: item.isin,
                    numerorateiniziali: periodicita.numerorateiniziali,
                    importoiniziale: importoiniziale,
                    importorata: importorata,
                    importomin: 1 * periodicita.importoratasuccessiva,
                    datalancio: item.datalancio,
                    anticiporate: item.anticiporate.toLowerCase()
                });
            }
            selChartPac.append($("<option>").val(selectInd++).text(item.nomefondo));
        });
        periodoMin = mesiPeriodo;
        dateRangeMax.setDate(dateRangeMax.getDate() - 1);
        $("#dateTo")
            .datepicker("option", "yearRange", dateFromMinSimPac.getFullYear() + ':' + dateRangeMax.getFullYear());
        appendDatePickerIcon('dateTo');
        dateRangeMax.setMonth(dateRangeMax.getMonth() - 1);
        $("#dateFrom")
            .datepicker("option", "minDate", dateFromMinSimPac)
            .datepicker("option", "yearRange", dateFromMinSimPac.getFullYear() + ':' + dateRangeMax.getFullYear());
        appendDatePickerIcon('dateFrom');
    }

    function updateDataSimPac() {
        var totals = [0, 0, 0];
        $.each(tableDataSimPac, function(index, item) {
            item.importoiniziale = item.numerorateiniziali > 0 ? item.importorata * item.numerorateiniziali: item.importoiniziale;
            totals[0] += item.importoiniziale;
            totals[1] += item.importorata;
            if (numRate) {
                item.importototale = item.importorata * numRate + item.importoiniziale;
                /*
                if (item.anticiporate === "s") {
                    item.importototale = item.importorata * numRate;
                } else {
                    item.importototale = item.importorata * numRate + item.importoiniziale;
                }
                */
                totals[2] += item.importototale;
            } else {
                item.importototale = "- - -";
                totals[2] = "- - -";
            }
        });
        $.each(tableDataSimPac, function(index, item) {
            if (numRate) {
                item.percentuale = formatNumber((item.importototale * 100 / totals[2]).toFixed(2)) + "%";
            } else {
                item.percentuale = "- - -";
            }
        });
        totDataSimPac = totals;
        tableConfig.tableSimPac.data = tableDataSimPac;
    }

    function writeTotSimPac() {
        $("#tableSimPac tbody tr").each(function(index) {
            var tdArr = $(this).find("td");
            tdArr.eq(1).text(thNumericFormatter(tableDataSimPac[index].importoiniziale));
            tdArr.eq(3).text(thNumericFormatter(tableDataSimPac[index].importototale));
            tdArr.eq(4).text(tableDataSimPac[index].percentuale);
        });
        $("#tableSimPac .total").each(function(index, td) {
            $(td).text(thNumericFormatter(totDataSimPac[index]));
        });
        $("#tableSimPac .totalPerc").text(numRate ? "100%" : "- - -");
    }

    function updateTotSimPac() {
        closeChartSimPac();
        updateDataSimPac();
        writeTotSimPac();
    }

    function updateTableSimPac(destroy, resize) {
        var tableId = "tableSimPac",
            table = $("#" + tableId);
        updateDataSimPac();
        if (destroy === true) {
            table.bootstrapTable('destroy');
        }
        table.bootstrapTable(tableConfig[tableId]);
        table.find(".spinner").each(function(index) {
            var spinnerId = "spinnerSimPac" + index,
                el = $(this),
                min = 1 * el.attr("data-min");
            el.attr("id", spinnerId);
            setSpinner({
                idInput: '#' + spinnerId,
                min: min,
                max: maxRata,
                step: min
            });
        });
        writeTotSimPac();
        if (!resize) {
            closeChartSimPac();
        }
    }

    function updateTableSelPac(destroy) {
        var tableId = "tableSelPac",
            table = $("#" + tableId);
        if (destroy === true) {
            table.bootstrapTable('destroy');
        }
        tableConfig[tableId].data = tableDataSimPac;
        table.bootstrapTable(tableConfig[tableId]);
        $('#sectionAcquistoPAC').show();
    }

    function resizeTablesPac() {
        var tableId = "tableSimPac";
        if (!resizedTables[tableId] || resizedTables[tableId] !== isSmallDevice) {
            resizedTables[tableId] = isSmallDevice;
            if (typeof resizedTables[tableId] !== "undefined") {
                updateTableSimPac(true, true);
            } else {
                updateTableSimPac();
            }
        }
        /*
        tableId = "tableSelPac";
        if (!resizedTables[tableId] || resizedTables[tableId] !== isSmallDevice) {
            resizedTables[tableId] = isSmallDevice;
            if (typeof resizedTables[tableId] !== "undefined") {
                updateTableSelPac(true);
            } else {
                updateTableSelPac();
            }
        }
        */
    }
    /* RESIZE */
    $(window).resize(function() {
        resizeTablesPac();
    });
    /* FORM */
    var dateFromMinSimPac = null,
        dateFromMinTextSimPac = null,
        dateToMinSimPac = null,
        maxRata = 1000000,
        durataPiano = 0,
        durataPeriodo = 1,
        numRate = 0,
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
        },
        periodoMin = 0,
        mesiObj = ["gen", "feb", "mar", "apr", "mag", "giu", "lug", "ago", "set", "ott", "nov", "dic"];

    function setPeriodi(skipReset) {
        var periodicitaSelect = $.extend({}, periodicitaValObj),
            selPeriodo = $("#selPeriodo"),
            prevVal = selPeriodo.val();
        selPeriodo.empty();
        $.each(pacConf.data, function(index, item) {
            var periodicitaTmp = $.extend({}, periodicitaSelect);
            $.each(periodicitaTmp, function(key) {
                if (!(key in item.periodicita)) {
                    delete periodicitaSelect[key];
                }
            });
        });
        $.each(periodicitaSelect, function(key) {
            selPeriodo.append($("<option>").val(key).text(periodicitaTxtObj[key]));
        });
        if (!skipReset || !(prevVal in periodicitaSelect)) {
            selPeriodo.val("M");
            durataPeriodo = 1;
        } else {
            selPeriodo.val(prevVal);
            durataPeriodo = periodicitaValObj[prevVal];
        }
        numRate = durataPiano ? durataPiano : 0;
        setDateToMinSimPac();
        resetFormSimPac();
    }

    function setDurata() {
        var dateFrom = $("#dateFrom"),
            dateTo = $("#dateTo"),
            periodTxt = '- - -',
            monthsDiff = 0;
        monthsDiff = getMontsDiff(parseDate(dateFrom.val()), parseDate(dateTo.val()));
        durataPiano = (monthsDiff && monthsDiff > 0) ? monthsDiff : 0;
        numRate = durataPiano ? Math.floor(durataPiano / durataPeriodo) : 0;
        if (monthsDiff > 0 && durataPeriodo) {
            monthsDiff = Math.floor(monthsDiff / durataPeriodo);
            if (durataPeriodo === 1) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " mesi" : monthsDiff + " mese");
            } else if (durataPeriodo === 2) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " bimestri" : monthsDiff + " bimestre");
            } else if (durataPeriodo === 3) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " trimestri" : monthsDiff + " trimestre");
            } else if (durataPeriodo === 4) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " quadrimestri" : monthsDiff + " quadrimestre");
            } else if (durataPeriodo === 6) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " semestri" : monthsDiff + " semestre");
            } else if (durataPeriodo === 12) {
                periodTxt = !monthsDiff ? '- - -' : (monthsDiff > 1 ? monthsDiff + " anni" : monthsDiff + " anno");
            }
        }
        $("#durataPiano").text(periodTxt);
        updateTotSimPac();
    }

    function setDateToMinSimPac() {
        if (dateFromMinSimPac) {
            dateToMinSimPac = cloneDate(dateFromMinSimPac);
            dateToMinSimPac.setMonth(dateToMinSimPac.getMonth() + durataPeriodo);
        }
    }

    function resetFormSimPac() {
        setHasErrors([], "#formSimPac");
    }

    function checkFormSimPac() {
        var errors = [],
            dateFrom = $("#dateFrom"),
            dateFromDate = parseDate(dateFrom.val()),
            dateFromErr = null,
            dateTo = $("#dateTo"),
            dateToDate = parseDate(dateTo.val()),
            dateToErr = null,
            today = cloneDate(new Date()),
            minDateToString, errMesi;
        minDateToString = writeDate(dateToMinSimPac.getFullYear() + "-" + (dateToMinSimPac.getMonth() + 1) + "-" + dateToMinSimPac.getDate());
        if (!dateFromDate) {
            dateFromErr = "Impostare la data inizio PAC";
        } else if (dateFromDate >= today) {
            dateFromErr = "La data inizio PAC deve essere precedente alla data odierna";
        } else if (dateFromDate >= dateToDate) {
            dateFromErr = "La data inizio PAC deve essere precedente alla data fine PAC";
        } else if (dateFromDate < dateFromMinSimPac) {
            dateFromErr = "La data inizio PAC deve essere successiva o uguale al " + writeDate(dateFromMinTextSimPac);
        } else if (!durataPiano || !periodoMin || durataPiano < periodoMin) {
            errMesi = periodoMin > 1 ? periodoMin + " mesi" : "1 mese";
            dateFromErr = "La durata del piano deve essere di almeno " + errMesi;
        }
        if (dateFromErr) {
            errors.push({ field: dateFrom, text: dateFromErr });
        }
        if (!dateToDate) {
            dateToErr = "Impostare la data fine PAC";
        } else if (dateToDate >= today) {
            dateToErr = "La data fine PAC deve essere precedente alla data odierna";
        } else if (dateToDate < dateToMinSimPac) {
            dateToErr = "La data fine PAC deve essere successiva o uguale al " + minDateToString;
        }
        if (dateToErr) {
            errors.push({ field: dateTo, text: dateToErr });
        }
        setHasErrors(errors, "#formSimPac");
        if (errors.length) {
            $(errors[0].field).focus();
        }
        return (!errors.length);
    }
    /* CHART */
    var chartSimPac = null,
        chartDataArrSimPac = [];

    function openChartSimPac() {
        $("#containerSimPac").show();
        $("#simPacSubmit").addClass("btn-disabled").prop("disabled", true);
    }

    function closeChartSimPac() {
        $("#containerSimPac").hide();
        $("#simPacSubmit").removeClass("btn-disabled").prop("disabled", false);
    }

    function showErrorChartSimPac() {
        closeChartSimPac();
        showError("Si &egrave; verificato un errore durante il caricamento dei dati del grafico.");
    }

    function loadChartDataSimPac() {
        var chartDataUrl = isLibrerieOK ? libreriePath + "/fdaSimPac.php" : wrp_script_direct + "/investimenti/GraficoSimPac.action",
            codicifida = [],
            importiiniziali = [],
            importi = [],
            paramsBase = {
                startdate: writeIsoDate(parseDate($("#dateFrom").val())),
                enddate: writeIsoDate(parseDate($("#dateTo").val())),
                periodicita: durataPeriodo.toString()
            },
            ajaxCallsArr = [],
            generalCall,
            whenFunc;
        $("#containerSimPac").addClass("loading");
        if (tableDataSimPac.length > 1) {
            $.each(tableDataSimPac, function(index, item) {
                var params = $.extend({}, paramsBase);
                params.codicifida = item.codicefida;
                params.importiiniziali = item.importoiniziale;
                params.importi = item.importorata ;
                ajaxCallsArr.push($.ajax(chartDataUrl, {
                    data: params,
                    dataType: "json",
                    method: "POST"
                }));
                codicifida.push(item.codicefida);
                importiiniziali.push(item.importoiniziale);
                importi.push(item.importorata );
            });
            paramsBase.codicifida = codicifida.join("|");
            paramsBase.importiiniziali = importiiniziali.join("|");
            paramsBase.importi = importi.join("|");
        } else {
            paramsBase.codicifida = tableDataSimPac[0].codicefida;
            paramsBase.importiiniziali = tableDataSimPac[0].importoiniziale;
            paramsBase.importi = tableDataSimPac[0].importorata ;
        }
        generalCall = $.ajax(chartDataUrl, {
            data: paramsBase,
            dataType: "json",
            method: "POST"
        });
        if (tableDataSimPac.length > 1) {
            ajaxCallsArr.unshift(generalCall);
            whenFunc = $.when.apply($, ajaxCallsArr);
        } else {
            whenFunc = $.when(generalCall);
        }
        return whenFunc;
    }

    function setChartDataSimPac() {
        var data,
            loadError = false;
        chartDataArrSimPac = [];
        try {
            if (tableDataSimPac.length > 1) {
                $.each(arguments, function(index, item) {
                    var itemData = $.isArray(item) ? item[0].data : item.data,
                        tableDataRecord;
                    chartDataArrSimPac.push(filterChartDataSimPac(itemData));
                    if (index) {
                        tableDataRecord = tableDataSimPac[index - 1];
                        tableDataRecord.totVersato = itemData.CashLast.toFixed(0);
                        tableDataRecord.totFondo = itemData.NavLast.toFixed(0);
                        tableDataRecord.rendimento = itemData.AnnualizedReturn.toFixed(2);
                    } else {
                        data = itemData;
                    }
                });
            } else {
                data = arguments[0].data;
                chartDataArrSimPac.push(filterChartDataSimPac(data));
                tableDataSimPac[0].totVersato = data.CashLast.toFixed(0);
                tableDataSimPac[0].totFondo = data.NavLast.toFixed(0);
                tableDataSimPac[0].rendimento = data.AnnualizedReturn.toFixed(2);
            }
        } catch (e) {
            loadError = true;
        }
        if (!loadError) {
            writeChartInfoSimPac(chartDataArrSimPac[0]);
            if (!chartSimPac) {
                createChartSimPac(chartDataArrSimPac[0]);
            } else {
                updateChartSimPac(chartDataArrSimPac[0]);
            }
            $("#graficoPeriodo").html(writeDate(data.StartDate) + " - " + writeDate(data.EndDate));
            $("#containerSimPac").removeClass("loading");
            updateTableSelPac(true);
        } else {
            showErrorChartSimPac();
        }
    }

    function filterChartDataSimPac(data) {
        var pacArr = data.SeriesPac,
            cashArr = data.SeriesCash,
            colTot = pacArr.length,
            currColTot,
            currInd = 0,
            currColNum = 0,
            currCol, currPac, currCash,
            periodCols = 1,
            restCols = 0,
            filteredData = {
                data: [],
                variazione: ((data.NavLast / data.CashLast) * 100 - 100)
            };
        if (colTot > 36) {
            if (colTot % 36) {
                periodCols = colTot / 36;
                restCols = colTot - (periodCols * 35);
            } else {
                periodCols = colTot / 36;
            }
            currColTot = 36;
        } else {
            currColTot = colTot;
        }
        while (currColNum < currColTot) {
            currPac = pacArr[currInd];
            currCash = cashArr[currInd];
            currCol = {
                pac: currPac.Nav,
                cash: currCash.Nav,
                pacFormatted: formatNumber(currPac.Nav.toFixed(0)),
                cashFormatted: formatNumber(currCash.Nav.toFixed(0))
            };
            currCol.date = currPac.Date;
            currCol.dateString = writeDate(currPac.Date);
            filteredData.data.push(currCol);
            if (++currColNum < (currColTot - 1)) {
                currInd = Math.round(currColNum * periodCols);
            } else {
                currInd = colTot - 1;
            }
        }
        return filteredData;
    }

    function createChartSimPac(chartData) {
        var balloonText = '<div style="border: 2px solid #888; padding: 10px; text-align: left;"><span style="font-size:12px;">' +
                        'Al [[dateString]]<br>' +
                        'Fondi Versati: ' +
                        '<strong>[[cashFormatted]] &euro;</strong><br>' +
                        'Capitale finale: '  +
                        '<strong>[[pacFormatted]] &euro;</strong></span></div>';
        chartSimPac = AmCharts.makeChart("chartSimPacDiv", {
            "type": "serial",
            "addClassNames": true,
            "theme": "light",
            "autoMargins": false,
            "marginLeft": 105,
            "marginRight": 8,
            "marginTop": 10,
            "marginBottom": 40,
            "thousandsSeparator": ".",
            "decimalSeparator": ",",
            "percentPrecision": 0,
            "precision": 0,
            "balloon": {
                "adjustBorderColor": true,
                "horizontalPadding": 0,
                "verticalPadding": 0,
                "color": "#000000",
                "borderAlpha": 0,
                "fillColor": "#FFFFFF",
                "fillAlpha": 0.9,
                "shadowAlpha": 0
            },
            "colors": ["#a7c44a", "#444444"],
            "dataProvider": chartData.data,
            "categoryField": "date",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0,
                "parseDates": false,
                "categoryFunction": function(category) {
                    var dateArr = category.split("-"),
                        mese = mesiObj[1 * (dateArr[1] - 1)] + "\n",
                        giorno = 1 * dateArr[2];
                    return giorno + mese + dateArr[0];
                },
                "equalSpacing": true
            },
            "valueAxes": [{
                "axisAlpha": 0,
                "position": "left",
                "unit": " EUR",
            }],
            "startDuration": 0,
            "graphs": [{
                "balloonText": balloonText,
                "fillAlphas": 0.8,
                "fillColors": "#A7C44A",
                "lineAlpha": 0.8,
                "lineColor": "#A8C630",
                "lineThickness": 2,
                "columnWidth": 0.8,
                "type": "column",
                "title": "Fondi versati",
                "valueField": "cash"
            }, {
                "balloonText": balloonText,
                "bullet": "round",
                "bulletSize": 8,
                "fillAlphas": 0,
                "id": "graph2",
                "lineThickness": 3,
                "lineAlpha": 1,
                "title": "Capitale finale",
                "valueField": "pac"
            }]
        });
    }

    function writeChartInfoSimPac(data) {
        var percSign = data.variazione > 0 ? "+" : "";
        $("#graficoVariazione").text(percSign + data.variazione.toFixed(2) + "%");
    }

    function updateChartSimPac(chartData) {
        chartSimPac.dataProvider = chartData.data;
        chartSimPac.validateData();
    }
    /* INIT */
    function initHandlers() {
        $("#nextSimPac").click(function() {
            if (!$(this).hasClass("btn-disabled")) {
                // Disclaimer acquisto
                $("#layerAcquisto").modal({
                    backdrop: "static",
                    show: true
                });
            }
        });
        $("#simPacOK").click(function() {
            var rowsArr = $("#tableSelPac").bootstrapTable('getData'),
                selectionsInfo = getSelectionsInfo(rowsArr);
            if (selectionsInfo.codicifida.length < rowsArr.length) {
                $("#codicifida").val(selectionsInfo.codicifida.join("|"));
                $("#isin").val(selectionsInfo.isin.join("|"));
                $("#iir").val(selectionsInfo.iir.join("|"));
                $("#showBuyPac").submit();
            }
        });
        var backToRicUrl = isLibrerieOK ? "/template/strutt_"+ libSite + ".php?tpl=tpl_priv_fes_pac_ricerca.php&html=mi&liv1=investimenti&liv2=fondi_e_sicav&liv3=piani_di_accumulo_(pac)&liv4=simulatore_pac" : wrp_script + "/wbOnetoone/2l/action/investimenti/PianiAccumuloPAC.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
        $(".backToRic").attr("href", backToRicUrl);
    }

    function initForms() {
        var showBuyPacUrl = isLibrerieOK ? "/template/strutt_"+ libSite + ".php?tpl=tpl_priv_fes_pac_acquisto.php&html=mi&liv1=investimenti&liv2=fondi_e_sicav&liv3=piani_di_accumulo_(pac)&liv4=simulatore_pac" : "SimCartPAC.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore",
            dateFrom = $("#dateFrom"),
            dateTo = $("#dateTo");
        $("#showBuyPac").attr("action", showBuyPacUrl);
        dateFrom.mask("99/99/9999");
        dateFrom.datepicker({
            maxDate: "-1m -1d",
            changeYear: true,
            showOtherMonths: true,
            showOn: "button",
            prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
            buttonImage: "/common/fe/img/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShowDay: highlightDays,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        }).on("change", function() {
            setDurata();
            checkFormSimPac();
        });
        appendDatePickerIcon('dateFrom');
        dateTo.mask("99/99/9999");
        dateTo.datepicker({
            defaultDate: "-1d",
            maxDate: "-1d",
            showOtherMonths: true,
            changeYear: true,
            showOn: "button",
            prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
            buttonImage: "/common/fe/img/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShowDay: highlightDays,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper2').modal('hide');
            }
        }).datepicker("setDate", "-1d").on("change", function() {
            setDurata();
            checkFormSimPac();
        });
        appendDatePickerIcon('dateTo');
        $("#selPeriodo").change(function() {
            var key = $(this).val();
            durataPeriodo = periodicitaValObj[key];
            numRate = durataPiano ? Math.floor(durataPiano / durataPeriodo) : 0;
            filterPacConf();
            setDurata();
            checkFormSimPac();
            updateTableSimPac(true);
            updateTotSimPac();
        });
        $("#simPacSubmit").click(function() {
            if (!$(this).hasClass("btn-disabled") && checkFormSimPac()) {
                openChartSimPac();
                $('html, body').animate({
                    scrollTop: $("#containerSimPac").offset().top
                }, 200);
                loadChartDataSimPac().done(setChartDataSimPac).fail(function() {
                    $("#containerSimPac").removeClass("loading");
                    showErrorChartSimPac();
                });
            }
        });
        setPeriodi();
    }

    function initTables() {
        /* Tabella simulatore PAC */
        if (isConsultareOK) {
            delete tableConfig.tableSelPac.onCheck;
            delete tableConfig.tableSelPac.onUncheck;
        }

        $("#tableSimPac").on("click", ".ui-spinner-button", function() {
            var input = $(this).closest(".ui-spinner").find(".ui-spinner-input"),
                tr = $(this).closest("tr"),
                val = 1 * input.val(),
                index = 1 * tr.attr("data-index");
            tableConfig.tableSimPac.data[index].importorata = val;
            updateTotSimPac();
        })
        .on("keyup", ".ui-spinner-input", function(e) {
            handleSpinnerChange(e, $(this));
        })
        .on("blur change", ".ui-spinner-input", function() {
            var input = $(this),
                tr = $(this).closest("tr"),
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
            tableConfig.tableSimPac.data[index].importorata = val;
            updateTotSimPac();
        }).on("click", ".icon-chiudi_table", function() {
            var index = 1 * $(this).closest('tr').attr("data-index"),
                isin = $(this).attr("data-isin");
            if (tableConfig.tableSimPac.data.length > 1) {
                rowToDeleteSimPac = index;
                isinToDeleteSimPac = isin;
                $("#layerDelete").modal({
                    "show": true,
                    "backdrop": false
                });
            } else {
                $("#layerNoDelete").modal();
            }
        });
        $("#deleteOK").click(function() {
            var modalContent = $(this).closest(".modal-content"),
                deleteUrl = isLibrerieOK ? libreriePath + "/fdaDelFondo.php" : wrp_script_direct + "/investimenti/SimPacDelIsin.action";

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
                    "isin": isinToDeleteSimPac
                }
            }).done(function(data) {
                var isOK = false;
                try {
                    if (data.data.esito.toLowerCase() === "ok") {
                        pacConf.data.splice(rowToDeleteSimPac, 1);
                        tableConfig.tableSimPac.data.splice(rowToDeleteSimPac, 1);
                        setPeriodi(true);
                        filterPacConf(true);
                        updateTableSimPac(true);
                        setDurata();
                        modalContent.removeClass('loading');
                        $("#layerDelete").modal('hide');
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
        filterPacConf();
        setDateToMinSimPac();
        setDurata();
        resizeTablesPac();
    }

    function initCharts() {
        $("#selChartPac").change(function() {
            var val = 1 * $(this).val();
            writeChartInfoSimPac(chartDataArrSimPac[val]);
            updateChartSimPac(chartDataArrSimPac[val]);
        });
    }

    $(function() {
        initHandlers();
        initForms();
        initTables();
        initCharts();
    });

    /* EXPORT */
    return {
        thDeleteFormatter: thDeleteFormatter,
        thSpinnerFormatter: thSpinnerFormatter,
        thNumericFormatter: thNumericFormatter,
        thPercFormatter: thPercFormatter
    };
})();
