/* globals $, isSmallDevice, stylingResults, isLibrerie:true, cgi_script, fesConfig, topSelConfig,
    selectorBoxInit, ricJson:true */
/* exported is4s, pacRicerca, showFondo */
"use strict";
var is4s = false;
var pacRicerca = (function() {
    var isLibrerieOK = (typeof isLibrerie !== "undefined");

    /****** PUBLIC METHODS ******/
    function getSelections () {
        var selections = [];
        $.each(visibleTable.bootstrapTable('getSelections'), function() {
            selections.push(this.codicefida);
        });
        return selections;
    }

    function showSimPac () {
        var selections = getSelections();
        if (selections.length) {
            $("#codicifida").val(selections.join("|"));
            $("#showSimPac").submit();
        }
    } 

    function showFondo(row) {
        var json = {
                "btnCat": $("#btnRicGroup .btn-primary:first").attr("id"),
                "ricParams": {}
            };
        if (json.btnCat && json.btnCat !== "btnTopSel") {
            if (json.btnCat === "btnRicLib") {
                json.ricParams.isin = $("#ricLiberaAutocomplete").val();
            } else if (json.btnCat === "btnRicAss") {
                json.ricParams.codSocieta = $("#selectCat").val();
                json.ricParams.macroCat = $("#btnCatGroup .btn-primary").attr("data-value");
                json.ricParams.dividendi = $("#btnProvGroup input:checked").map(function() {
                    return $(this).val();
                }).get().join();
            }
        }
        json.selectedVals = getSelections();
        $("#JSON").val(JSON.stringify(json));
        $("#rand").val(Math.random());
        $("#divisa").val(row.divisa);
        $("#fondosicav").val(row.fondosicav);
        $("#codicesocieta").val(row.codicesocieta);
        $("#codicecomparto").val(row.codicecomparto);
        $("#codicefida").val(row.codicefida);
        $("#showFondo").submit();
    }

    function thNomeFormatter(value, row) {
        var funcParams = JSON.stringify({
            "divisa": row.divisa,
            "fondosicav": row.fondosicav,
            "codicesocieta": row.codicesocieta,
            "codicecomparto": row.codicecomparto,
            "codicefida": row.codicefida
        }).replace(/"/g, '&quot;');
        return '<a href="#!" onclick="pacRicerca.showFondo(' + funcParams + ');">' + value + '</a>';
    }

    function thNumericFormatter (value) {
        var formattedVal = "",
            stringVal = value.toString().split(".")[0],
            i,
            len = stringVal.length;
        for (i = 1; i <= len; ++i) {
          formattedVal = stringVal[len - i] + formattedVal;
          if (i !== len && (i % 3) === 0) {
              formattedVal = '.' + formattedVal;
          }
        }
        return formattedVal;
    }

    function thPercFormatter (value) {
        return value ? thNumericFormatter(value) + "%" : "- - -";
    }

    // Formatta cella profilo di rischio
    function thProfRisFormatter(value) {
        var html = $('<div>'),
            i, profRisBar, opacity;
        html.append($('<div>').addClass("profRisNum").text(value));
        for (i = 0; i < 7; ++i) {
            profRisBar = $('<div>').addClass("profRisBar").html("&nbsp;");
            if (i < value) {
                opacity = 0.28 + (0.12 * i);
                profRisBar.addClass("profRisBarOn").css("opacity", opacity);
            }
            html.append(profRisBar);
        }
        return html.html();
    }

    // Formatta cella profilo di rischio
    function thRatingFormatter(value) {
        var i, ratingCrown,
            html = $('<div>'),
            rating = $('<div class="rating">');
        value = 1 * value;
        for (i = 0; i < 5; ++i) {
            ratingCrown = $("<i class=\"icon icon-corona\"></i >");
            if (i < value) {
                ratingCrown.addClass("icon-corona-on");
            }
            rating.append(ratingCrown);
        }
        html.append(rating);
        return html.html();
    }

    // Formatta cella societa' di gestione
    function thSocGestFormatter(value) {
        var socNome;
        value = value || "";
        socNome = value !== "" ? fesConfig.codSocieta[value.toString()] : null;
        return socNome ? socNome.nome : "";
    }

    /****** PRIVATE METHODS ******/
    /*** IMPOSTAZIONI TAB E OVERLAY ***/
    // Tab scelta tipo di ricerca
    var btnRicArr, ricContArr, cacheAC = {}, topSelInfoRead = false;
    function initTabAndOverlay () {
        btnRicArr = $('#btnRicGroup .btn');
        ricContArr = $('.ricCont');
        btnRicArr.click(function() {
            var btnEl = $(this);
            if (!btnEl.hasClass('btn-primary')) {
                btnRicArr.filter('.btn-primary').removeClass('btn-primary').addClass('btn-default');
                btnEl.removeClass('btn-default').addClass('btn-primary');
                resetRicTables();
                ricContArr.hide().eq(btnRicArr.index(btnEl)).show();
                if (btnEl.attr('id') === "btnTopSel") {
                    if (!ricJson && !topSelInfoRead) {
                        $('#layerTopSel1').modal("show");
                    } else {
                        $(".btnTopSelOK").click();
                    }
                }
            }
        });
        // Overlay Top Selection
        $("#layerTopSel1, #layerTopSel2").modal({
            backdrop: "static",
            show: false
        });
    }

    /*** IMPOSTAZIONI FILTRI ***/
    var autoCompUrl, caseGestWrap, btnCatGroup, btnCatArr, btnProvGroup;

    function initFilters() {
        // Completamento automatico ricerca libera
        autoCompUrl = isLibrerieOK ? "/librerie/include/commons/ajax/fes/fdaAutoCom.php" : cgi_script + "/investimenti/SimPacAutoCom.action";
        $("#ricLiberaAutocomplete").keydown(function (event) {
            if (event.which === 13) {
                event.preventDefault();
                $("#submitRicLib").click();
            }
        }).autoComplete([], {
            minLength: 0,
            filter: function(request, response) {
                var term = $.trim(request.term),
                    chars = request.term.replace(/\s+/g, "");
                if (chars.length < 3) {
                    $("#submitRicLib").addClass("btn-disabled").attr("disabled", "disabled");
                    $("#ricLiberaAutocomplete").autocomplete("close");
                } else {
                    $("#submitRicLib").removeClass("btn-disabled").removeAttr("disabled");
                    if (term in cacheAC) {
                        response(cacheAC[term]);
                        return;
                    }
                    $.getJSON(autoCompUrl, { "isin": request.term }, function(res) {
                        var data = res.data;
                        if (data.length) {
                            data = $.map(data, function(item) {
                                return { "label": item.nome, "value": item.isin };
                            });
                        }
                        cacheAC[term] = data;
                        response(data);
                    });
                }
            },
            selectable: false,
            clearable: true,
            renderItem: stylingResults
        }).data("ui-autocomplete")._renderItem = stylingResults;

        // Selezione casa di gestione ricerca guidata
        caseGestWrap = $(".caseGestWrap");
        $.each(fesConfig.codSocieta, function(key, val) {
            caseGestWrap.append(
                '<div class="selector-box " data-value="' + key + '">' +
                '<img src="' + val.img + '" class="img100"></a>' +
                // '<span class="definition">' + val.nome + '</span>' +
                '</div>'
            );
        });
        selectorBoxInit();
        btnCatGroup = $('#btnCatGroup');
        btnCatGroup.append(
            '<div class="btn-align-left">' +
            '<a type="button" class="btn btn-primary" data-value="0">Tutti</a>' +
            '</div>'
        );
        $.each(fesConfig.macroCat, function(key, val) {
            btnCatGroup.append(
                '<div class="btn-align-left">' +
                '<a type="button" class="btn btn-default" data-value="' + key + '">' + val.nome + '</a>' +
                '</div>'
            );
        });
        btnCatGroup.append('<br class="clear">');
        btnCatArr = btnCatGroup.find('.btn');
        btnCatArr.click(function() {
            var btnEl = $(this);
            if (!btnEl.hasClass('btn-primary')) {
                btnCatArr.filter('.btn-primary').removeClass('btn-primary').addClass('btn-default');
                btnEl.removeClass('btn-default').addClass('btn-primary');
            }
        });
        btnProvGroup = $('#btnProvGroup');
        $.each(fesConfig.dividendi, function(key, val) {
            btnProvGroup.append(
                '<div class="col-xs-12 col-sm-6">' +
                '<div class="checkbox inline">' +
                '<label class="textWrapper">' +
                '<input type="checkbox" value="' + key + '">' +
                '<span class="text">' + val.nome + '</span>' +
                '</label>' +
                '</div>' +
                '</div>'
            );
        });
    }

    /*** IMPOSTAZIONI TABELLE ***/
    var rowStyleFunc = function(row, index) {
            if (index % 2 === 0) {
                return {
                    classes: 'dispari'
                };
            } else {
                return {
                    classes: 'pari'
                };
            }
        },
        checkFunc = function(row, $element) {
            var selections = visibleTable.bootstrapTable('getSelections'),
                btnNext = $("#" + visibleTable.attr("id").replace("table", "next")),
                tableOpt;

            if (selections.length) {
                btnNext.removeClass("btn-disabled").removeAttr("disabled");
            } else {
                btnNext.addClass("btn-disabled").attr("disabled", "disabled");
            }
            if (selections.length > 5) {
                tableOpt = tableConfig["#" + visibleTable.attr("id")];
                $.each(tableOpt.data, function (index, item) {
                    if (item.codicefida === row.codicefida) {
                        visibleTable.bootstrapTable('uncheck', index);
                        return false;
                    }
                });
                $element.prop('checked', false);
                showError("Attenzione", "Puoi selezionare al massimo 5 fondi.");
            }
        },
        tableBaseConfig = {
            sortable: true,
            sortName: "nome",
            sortOrder: "asc",
            pagination: true,
            pageSize: 15,
            pageList: [15, 30, 60, 'tutti'],
            rowStyle: rowStyleFunc,
            onCheck: checkFunc,
            onUncheck: checkFunc
        },
        tableConfig = {
            "#tableRicLib": tableBaseConfig,
            "#tableRicGui": tableBaseConfig,
            "#tableTopSel": {
                sortable: true,
                pagination: false,
                rowStyle: rowStyleFunc,
                onCheck: checkFunc,
                onUncheck: checkFunc
            }
        };
    var fixColsPrev = {},
        visibleTable = null;

    function resetRicBtn() {
        btnRicArr.removeClass('btn-primary');
        ricContArr.hide();
    }

    function resetRicTables() {
        fixColsPrev = {};
        visibleTable = null;
        $("#ricLibRes, #ricGuiRes, #topSelRes").hide();
    }
    // Definisco le colonne da nascondere su mobile
    // per ciascuna colonna appendo la classe che la nasconde su mobile
    function fixCols(tableId) {
        var tableOpt,
            table = $(tableId);
        if (!fixColsPrev[tableId] || fixColsPrev[tableId] !== isSmallDevice) {
            fixColsPrev[tableId] = isSmallDevice;
            tableOpt = tableConfig[tableId];
            if (typeof fixColsPrev[tableId] !== "undefined") {
                table.bootstrapTable('destroy');
            }
            visibleTable = $(tableId);
            visibleTable.bootstrapTable(tableOpt);
            visibleTable.bootstrapTable("selectPage", 0);
            if (ricJson) {
                setVals();
            }
        }
    }
    function setVals () {
        if (ricJson.selectedVals && ricJson.selectedVals.length) {
            visibleTable.bootstrapTable("checkBy", {
                field: "codicefida",
                values: ricJson.selectedVals
            });
        }
        ricJson = null;
    }
    $(window).resize(function() {
        if (visibleTable) {
            fixCols("#" + visibleTable.attr('id'));
        }
    });

    /*** TABELLE ***/
    var showError = function(title, msg) {
            title = title || "Errore caricamento dati";
            msg = msg || "Si &egrave; verificato un errore nel caricamento dei dati";
            $("#labelError").html(title);
            $("#errorMsg").html(msg);
            $('#layerError').modal("show");
        },
        tableRicLibId, ricLibUrl, tableRicGuiId, tableTopSelId, tableTopSelOK;
    
    function parseNumericString (value) {
        var parsedNumber;
        if (value[0] === ",") {
            value = "0" + value;
        }
        parsedNumber = 1 * value.replace(",", ".");
        return parsedNumber;
    }
    function filterTableData (data) {
        var filteredData = data.slice(0);
        $.each(filteredData, function (index, item) {
            filteredData[index].perc1a = item.perc1a ? parseNumericString(item.perc1a) : null;
            filteredData[index].perc5a = item.perc5a ? parseNumericString(item.perc5a) : null;
            
            if(filteredData[index].pir != undefined && filteredData[index].pir == "S") {
            	filteredData[index].nome = "<span class=\"labelpir\">PIR</span>" + filteredData[index].nome;
            }
        });
        return filteredData;
    }
    function initTables() {
        /* Tabella ricerca libera */
        tableRicLibId = '#tableRicLib';
        ricLibUrl = isLibrerieOK ? "/librerie/include/commons/ajax/fes/fdaRicPac.php" : cgi_script + "/investimenti/FesTabellaSimPac.action";
        $("#submitRicLib").click(function() {
            var isin;
            if (!$(this).hasClass("btn-disabled")) {
                isin = $("#ricLiberaAutocomplete").val();
                if (isin.length > 2) {
                    $("#ricLibRes").hide();
                    $.getJSON(ricLibUrl, {
                        "isin": isin
                    }).done(function(res) {
                        var tableOpt = tableConfig[tableRicLibId],
                            selFondi = res.data.length < 15 ? res.data.length : 15;
                        $("#ricLibTitle").text(selFondi + " fondi selezionati su " + res.data.length);
                        tableOpt.data = filterTableData(res.data);
                        $("#ricLibRes").show();
                        fixCols(tableRicLibId);
                    }).fail(showError);
                }
            }
        });
        /* Tabella ricerca guidata */
        tableRicGuiId = '#tableRicGui';
        $("#submitRicGui").click(function() {
            var param = {
                "codSocieta": $("#selectCat").val(),
                "macroCat": $("#btnCatGroup .btn-primary").attr("data-value"),
                "dividendi": $("#btnProvGroup input:checked").map(function() {
                    return $(this).val();
                }).get().join()
            };
            $("#ricGuiRes").hide();
            $.getJSON(ricLibUrl, param).done(function(res) {
                var tableOpt = tableConfig[tableRicGuiId],
                    selFondi = res.data.length < 15 ? res.data.length : 15;
                tableOpt.data = filterTableData(res.data);
                $("#ricGuiTitle").text(selFondi + " fondi selezionati su " + res.data.length);
                $("#ricGuiRes").show();
                fixCols(tableRicGuiId);
            }).fail(showError);
        });
        /* Tabella ricerca guidata */
        tableTopSelId = '#tableTopSel';
        tableTopSelOK = false;
        $(".btnTopSelOK").click(function() {
            var tableOpt;
            $('#layerTopSel1, #layerTopSel2').modal("hide");
            if (!tableTopSelOK) {
                tableOpt = tableConfig[tableTopSelId];
                tableOpt.data = filterTableData(topSelConfig.data);
                tableTopSelOK = true;
                topSelInfoRead = true;
            }
            $("#topSelRes").show();
            fixCols(tableTopSelId);
        });
        $(".btnTopSelKO").click(function() {
            resetRicBtn();
        });
    }

    /*** VISUALIZZAZIONE FONDI ***/
    function initForm() {
        var showFondoUrl = isLibrerieOK ? "" : cgi_script + "/wbOnetoone/2l/action/investimenti/SimPacSchedaFondo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore",
            showSimPacUrl = isLibrerieOK ? "/connect.php?page=strutt_priv.php&tpl=tpl_priv_fes_pac_simulatore.php&responsive=y&liv0=4&liv1=2&liv2=4&liv3=1" : "SimulatorePAC.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
        $("#showFondo").attr("action", showFondoUrl);
        $("#showSimPac").attr("action", showSimPacUrl);
        $("#nextRicLib, #nextRicGui, #nextTopSel").click(showSimPac);
    }

    function initRic () {
        if (ricJson) {
            $(ricJson.btnCat).click();
            if (ricJson && ricJson.btnCat !== "btnTopSel") {
                if (ricJson.btnCat === "btnRicLib") {
                    $("#ricLiberaAutocomplete").val(ricJson.ricParams.isin);
                    $("#submitRicLib").removeClass("btn-disabled").removeAttr("disabled").click();
                } else if (ricJson.btnCat === "btnRicAss") {
                    $("#btnCatGroup .btn[data-value=" + ricJson.ricParams.macroCat + "]").click();
                    $("#btnProvGroup input[value=" + ricJson.ricParams.dividendi + "]").click();
                    $.each(ricJson.ricParams.codSocieta.split(","), function () {
                        $(".selector-box[data-value=" + this + "]").click();
                    });
                    $("#submitRicGui").click();
                }
            }
        }
    }

    /*** INIT ***/
    $(function() {
        initTabAndOverlay();
        initFilters();
        initTables();
        initForm();
        initRic();
    });

    return {
        showFondo: showFondo,
        thNomeFormatter: thNomeFormatter,
        thProfRisFormatter: thProfRisFormatter,
        thRatingFormatter: thRatingFormatter,
        thPercFormatter: thPercFormatter,
        thSocGestFormatter: thSocGestFormatter
    };
})();
