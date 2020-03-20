/* globals $:false, cgi_script:false, cgi_script4s:false, isLib:false, setLoadingOnObject:false, ttHide:false,
	fesFondoShow:false, fesIcoOpe:false, alert:false,
	setLoadingOnObject:false, unsetLoadingOnObject:false */
/* exported fondiTop10, fondiTopBottom, fondiUtils  */
"use strict";
var bpmDispatcher = (is4s && location.href.indexOf("bpmbanking.it"))? cgi_script4s + "&codiceinterno=00010510800" : "",
	is4s = (typeof is4s == "undefined") ? false : is4s;

var fondiTop10 = (function() {
    /*** Variabili private ***/
    var fesDataUrl = "",
    	// Colonne della tabella (nome, variabile, classe) - escluse le "appese"
    	fesTableCols = {
	        "nome": { "nome": "Nome", "classe": "permanent" },
	        "nomecategoriabrating": { "nome": "Categoria<br>BRating", "classe": "" },
	        "rating": { "nome": "Rating", "classe": "" },
	        "rendimento": { "nome": "Rendimento<br>a 1 anno*", "classe": "" }
	    },
	    fesCatArr = ["all", "azionari", "obbligazionari", "flessibili", "corone5"],
		fesCatIntroArr = ["in assoluto", "azionari", "obbligazionari", "flessibili", "5 corone FIDA"],
		fesCatTitleArr = ["", "AZIONARI ", "OBBLIGAZIONARI ", "FLESSIBILI ", "CON 5 CORONE FIDA "],
    	fesTable, fesData, fesCatData,
    	btnArr = $('#fesTop10Btns .aButton');

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
	            	var cat = 'all',
	            		hash = window.location.hash.replace('#!', '');
	            	fesData = data.data;
	                catBtnEvents();
	            	if (hash !== '' && $.inArray(hash, fesCatArr) !== -1) {
	            		cat = hash;
	            	}
	            	selectCat(cat);
	                unsetLoadingOnObject("#fesRicWrap");
	                $("#fesTop10Cont").show();
	            },
	            error: function() {
	                alert("Errore nel ricevimento dei dati - Tabella");
	            }
	        });
	    },
	    updateTable = function() {
	    	var fesTbody = fesTable.find('tbody');
	    	// Svuoto la tabella dai dati precedenti
	    	fesTbody.find('tr').remove();
	    	// Inserisco i nuovi dati
	        if (fesCatData.length) {
	        	// Costruisco le righe della tabella
	            $.each(fesCatData, function(k, v) {
	                var fesTr = $("<tr>");
	                var fesFondoNome = $("<a>").html(v.nome).attr({ "href": "#!" });
	                fesFondoNome.click(function() {
	                    fesFondoShow({ "codicesocieta": v.codicesocieta, "codicecomparto": v.codicecomparto, "fondosicav": v.fondosicav, "codicefida": v.codicefida });
	                });
	                fesTr.append($("<td>").addClass("permanent").append(fesFondoNome));
	                // Sintesi
	                // Rating Fida (formulato in corone)
	                var corone = "",
	                    x;
	                for (x = 0; x < v.rating; x++) {
	                    corone = corone + "<img src='/wscmn/img/ret/fes_corona_fida_small.gif'>";
	                }
	                if (!corone.length) corone = "-";
	                var rendimento = (parseFloat(v.rendimento)).toFixed(3).replace('.', ',');
	                fesTr.append($('<td style="display: table-cell">').html(v.nomecategoriabrating));
	                fesTr.append($('<td style="display: table-cell">').addClass("center").append(corone));
	                fesTr.append($('<td style="display: table-cell">').html(rendimento).addClass("right"));
	                // Icona operativa
	                // Icona + parametri da passare a be come attributi
	                if (!is4s) {
	                    var fesTrOpeIcoA = $("<a>").addClass("linkVai").attr({
	                        "title": "scegli l'operazione da effettuare",
	                        "href": "#!",
	                        "codicesocieta": v.codicesocieta,
	                        "codicecomparto": v.codicecomparto,
	                        "fondosicav": v.fondosicav
	                    });
	                    fesTrOpeIcoA.click(fesIcoOpe);
	                    var fesTrOpeMenu = $("<div>").addClass("sezioneLinks2").css({ "margin-left": "-113px", "margin-top": "-21px" }).hide();
	                    var fesTrOpeIco = $("<div>").addClass("linkTooltip").append(fesTrOpeIcoA, fesTrOpeMenu);
	                    fesTr.append($("<td>").addClass("center icopad permanent").append(fesTrOpeIco));
	                }
	                fesTbody.append(fesTr);
	            });
	        } else {
	            fesTbody.append("<tr><td colspan='30' class='permanent center'><i>La ricerca non ha prodotto risultati</i></td></tr>");
	        }
	    },
	    catBtnEvents = function() {
	    	btnArr.each(function () {
	    		var btnEl = $(this);
	    		btnEl.click(function () {
	    			// Controlla che non sia gia' selezionato
	    			if (btnEl.hasClass('buttSelect')) {
	    				window.location.hash = btnEl.attr('href');
		    			selectCat(btnEl.attr('href').replace('#!', ''));
	    			}
	    		});
	    	});
	    },
	    selectCat = function (cat) {
	    	var top10Title = $('#fesTop10Cont h1:first'),
	            btnEl = $('#fesTop10Btns .aButton[href="#!' + cat + '"]'),
	            i = btnArr.index(btnEl);
			$('#introCat').text(fesCatIntroArr[i]);
			btnArr.addClass('buttSelect');
			btnEl.removeClass('buttSelect');
			top10Title.html('TOP 10 FONDI ' + fesCatTitleArr[i] + 'A 1 ANNO');
			// Seleziona i dati della categoria scelta
			fesCatData = fesData[cat];
			updateTable();
	    },
	    start = function() {
	        // Prepara la tabella
	        // Crea la tabella con i risultati
	        fesTable = $("#fesTop10Table");
	        var fesTheadRow1 = $("tr.festTableHead");
	        // prepara l'header
	        $.each(fesTableCols, function(k, col) {
	            var fesTh = $('th[fieldname="' + k + '"]');
	            fesTh.addClass(col.classe);
	            if (k === "nome") fesTh.css("width", "230");
	            else if (k === "rating") fesTh.css("width", "90");
	            else if (k === "rendimento") fesTh.css("width", "100");
	        });
	        // Aggiunge la colonna vuota per l'icona operativa
	        if (!is4s) {
	            fesTheadRow1.append($('<th style="display: table-cell">').html("&nbsp;").addClass("permanent").css("width", "35"));
	        }
	        getData();
	    };
    
    if (!is4s) {
        fesDataUrl = (!isLib) ? cgi_script + "/investimenti/FlopAndTopJSON.action" : "/wscmn/xml/fes_top_10.php";
    } else {
        fesDataUrl = (!isLib) ? bpmDispatcher : "/wscmn/xml/fes_top_10.php";
    }

    /*** Variabili e metodi pubblici ***/
    return {
    	start: start
    };
})();
