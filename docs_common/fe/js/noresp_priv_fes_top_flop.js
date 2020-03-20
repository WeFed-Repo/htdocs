/* globals $:false, cgi_script:false, cgi_script4s:false, isLib:false, setLoadingOnObject:false, ttHide:false,
	alert:false, setLoadingOnObject:false, unsetLoadingOnObject:false, fesGetData:false, fesAutocompleteUrl:true,
	fesResetFilters:false, fesResetConfCheckbox:false */
/* exported fondiTopFlop  */
"use strict";
var bpmDispatcher = (is4s && location.href.indexOf("bpmbanking.it")) ? cgi_script4s + "&codiceinterno=00010510800" : "",
    is4s = (typeof is4s == "undefined") ? false : is4s;
var fondiTopFlop = (function() {
    /*** Variabili private ***/
    var fesDataUrl = "",
        // Colonne della tabella (nome, variabile, classe) - escluse le "appese"
        fesTableCols = {
            "categoriabrating": { "nome": "Migliori categorie<br>BRating", "classe": "" },
            "numfondi": { "nome": "N. Fondi", "classe": "" },
            "rendimento": { "nome": "Rendimento<br>a 1 mese*", "classe": "" }
        },
        fesTop = {
            table: null,
            data: null
        },
        fesBottom = {
            table: null,
            data: null
        };
    /*** Metodi privati ***/
    var getData = function() {
            setLoadingOnObject("#fesRicWrap");
            ttHide();
            $.ajax({
                url: fesDataUrl,
                dataType: "json",
                method: "POST",
                data: "fesCollocato=S&orderby=&orderdir=&firstpage=true&fromPage=&descrizione=&codSocieta=&fondoSicav=&macroCat=&codRating=&fesCategoria=&valutaRif=&codArea=&codSettore=&fesRendimento=&fesVolatilita=&invMinimo=&commissione=&dividendi=&bpmpage=fesTabella4s",
                success: function(data) {
                    fesTop.data = data.data.top;
                    fesBottom.data = data.data.flop;
                    // Resetta l'ordinamento sul rendimento
                    fesTop.orderBy = "rendimento";
                    fesTop.orderDir = "desc";
                    fesBottom.orderBy = "rendimento";
                    fesBottom.orderDir = "desc";
                    updateTable(fesTop);
                    updateTable(fesBottom);
                    unsetLoadingOnObject("#fesRicWrap");
                    $("#fesTopFlopCont").show();
                },
                error: function() {
                    alert("Errore nel ricevimento dei dati - Tabella");
                }
            });
        },
        updateTable = function(fesObj) {
            var fesTbody = fesObj.table.find('tbody');
            // Svuoto la tabella dai dati precedenti
            fesTbody.find('tr').remove();
            // Inserisco i nuovi dati
            if (fesObj.data.length) {
                // Costruisco le righe della tabella
                $.each(fesObj.data, function(k, v) {
                    var fesTr = $("<tr>"),
                        rendimento = (parseFloat(v.rendimento)).toFixed(3).replace('.', ','),
                        fondiLink = $('<a href="#!">').click(function() {
                            fondiClick(v);
                        });
                    // Sintesi
                    fesTr.append($('<td style="display: table-cell">').html(v.nome));
                    fesTr.append($('<td style="display: table-cell">').append(v.numfondi + ' ').append(fondiLink.text('Vedi fondi')).addClass("right"));
                    fesTr.append($('<td style="display: table-cell">').html(rendimento).addClass("right"));
                    // Icona operativa
                    fesTbody.append(fesTr);
                });
            } else {
                fesTbody.append("<tr><td colspan='30' class='permanent center'><i>La ricerca non ha prodotto risultati</i></td></tr>");
            }
        },
        fondiClick = function(v) {
        	fesResetFilters();
        	fesResetConfCheckbox();
            $('.catFondo').text(v.nome);
            $('.numFondi').text(v.numfondi + ' fondi presenti');
            $('#fesCategoria').val(v.categoriabrating);
            $('#fesTopFlopCont').hide();
            $('#fesRicercaCont, #fesDisclaimer').show();
            fesGetData(true);
        },
        initTable = function(fesObj, fesResults) {
            // prepara l'header
            $.each(fesTableCols, function(k, col) {
                var fesTh = fesResults.find('th[fieldname="' + k + '"]');
                fesTh.addClass(col.classe);
                if (k === "numfondi") fesTh.css("width", "90");
                if (k === "rendimento") fesTh.css("width", "85");
            });
        },
        start = function() {
            // Crea le tabelle con i risultati
            fesTop.table = $("#fesTopTable");
            fesBottom.table = $("#fesBottomTable");
            initTable(fesTop, $("#fesTopResults"));
            fesTableCols.categoriabrating.nome = "Peggiori categorie<br>BRating";
            initTable(fesBottom, $("#fesBottomResults"));
            getData();
        };
    if (!is4s) {
        fesDataUrl = (!isLib) ? cgi_script + "/investimenti/FlopAndTopJSON.action?tipoRichiesta=topflop" : "/wscmn/xml/fes_top_flop.php";
    } else {
        fesDataUrl = (!isLib) ? bpmDispatcher : "/wscmn/xml/fes_top_flop.php";
    }
    if (!is4s) {
        fesAutocompleteUrl = (!isLib) ? cgi_script + "/investimenti/FdaAutoCom.action" : "/wscmn/xml/fes_autocomplete.json";
    } else {
        fesAutocompleteUrl = (!isLib) ? cgi_script + "/FMP/fida/fidaAutoComplete4s.jsp" : "/wscmn/xml/fes_autocomplete.json";
    }
    $("#fesSearchResults").on("click", ".fesSearchBack", function() {
        $('#fesTopFlopCont').show();
        $('#fesRicercaCont, #fesDisclaimer').hide();
    });
    /*** Variabili e metodi pubblici ***/
    return {
        start: start
    };
})();
