/* globals bpmDispatcher:true, $:false, cgi_script:false, cgi_script4s:false, isLib:false,
    ttHide:false, alert:false, setLoadingOnObject:false, unsetLoadingOnObject:false,
    ttShow:false, fesFondoShow:false, formatNumber:false, fesIcoOpe:true,
    fesConf:true, openPopOverLayer:false, alertresize:false, closePopOverLayer:false,
    ttSet:false, setIcopad:false, fesPlotGraph:false, dati_confronta:true,
    nomeValore1:false, nomeValore2:false, data_asset1:false, data_asset2:false, fesAutocompleteUrl:false */
/*exported fesConfStart, fesNewConf, fesRicStart */
"use strict";
var is4s = (typeof is4s == "undefined") ? false : is4s,
    fesSearchDataUrl = "",
    fesConfUrl = "";
if (is4s && location.href.indexOf("bpmbanking.it")) {
    bpmDispatcher = cgi_script4s + "&codiceinterno=00010510800";
    /*  cgi_script = "https://wetoolscoll.bpmgrp.global:6032/wetools"; */
}
// Variabili di configurazione globali
if (!is4s) {
    fesSearchDataUrl = (!isLib) ? cgi_script + "/investimenti/FesTabella.action" : "/wscmn/xml/fes_tabella.php";
    fesConfUrl = (!isLib) ? cgi_script + "/FMP/compareFunds.do" : "/wscmn/html/fes_confronta.html";
} else {
    fesSearchDataUrl = (!isLib) ? bpmDispatcher : "/wscmn/xml/fes_tabella.php";
    fesConfUrl = (!isLib) ? bpmDispatcher + "compareFunds4s" : "/wscmn/html/fes_confronta.html";
}
// Oggetto contenente i dati per il confronto
var fesConfSelected = [];
// Massimo numero di fondi confrontabili
var fesConfMax = 2;
// Numero di record mostrati dalla chiamata per l'integrazione della tabella di ricerca
var fesTableAmount = 20;
// Colonne della tabella (nome, variabile, classe) - escluse le "appese"
var fesTableCols = {
    "fesNome": { "nome": "Nome", "classe": "permanent" },
    // Sintesi
    "fesRating": { "nome": "Rating", "classe": "sintesi" },
    "fesCategoria": { "nome": "Categoria<br>assogestioni", "classe": "sintesi" },
    "fesRendimento": { "nome": "Rendimento 1a%", "classe": "sintesi" },
    "fesNav": { "nome": "NAV", "classe": "sintesi" },
    "fesVal": { "nome": "VAL", "classe": "sintesi" },
    // Rendimenti
    "fesRatingRend": { "nome": "Rating", "classe": "rendimenti" },
    "fesPercYtd": { "nome": "%YTD", "classe": "rendimenti", "gruppo": "Rendimento" },
    "fesPerc6m": { "nome": "%6M", "classe": "rendimenti", "gruppo": "Rendimento" },
    "fesPerc1a": { "nome": "%1A", "classe": "rendimenti", "gruppo": "Rendimento" },
    "fesPerc3a": { "nome": "%3A", "classe": "rendimenti", "gruppo": "Rendimento" },
    "fesPerc5a": { "nome": "%5A", "classe": "rendimenti", "gruppo": "Rendimento" },
    // Rischio
    "fesRatingRischio": { "nome": "Rating", "classe": "rischio" },
    "fesVol1a": { "nome": "%1A", "classe": "rischio", "gruppo": "Volatilit&agrave;" },
    "fesVol3a": { "nome": "%3A", "classe": "rischio", "gruppo": "Volatilit&agrave;" },
    "fesVol5a": { "nome": "%5A", "classe": "rischio", "gruppo": "Volatilit&agrave;" },
    "fesSharpe": { "nome": "Indice di Sharpe", "classe": "rischio" },
    "fesBeta": { "nome": "Beta", "classe": "rischio" },
    // Composizione
    "fesCompoCat": { "nome": "Cat. Assogestioni", "classe": "composizione" },
    "fesPercAx": { "nome": "%AZ", "classe": "composizione" },
    "fesPercObb": { "nome": "%OBB", "classe": "composizione" },
    "fesPercLiquidita": { "nome": "%LIQUIDIT&Agrave;", "classe": "composizione" },
    "fesPercAltro": { "nome": "%ALTRO", "classe": "composizione" },
    // Costi
    "fesCostiInvIniz": { "nome": "Iniziale", "classe": "costi", "gruppo": "Investimento minimo" },
    "fesCostiInvSucc": { "nome": "Successivo", "classe": "costi", "gruppo": "Investimento minimo" },
    "fesCommissione": { "nome": "% ingresso", "classe": "costi", "gruppo": "Commissioni" },
    "fesGestione": { "nome": "% gestione ann.", "classe": "costi", "gruppo": "Commissioni" }
};
var fesTablePersCols = {
    "fesRating": { "nome": "Rating", datacol: "rating" },
    "fesCategoria": { "nome": "Categoria assogestioni", datacol: "assogestioni" },
    "fesRendimento": { "nome": "Rendimento 1a%", datacol: "rendimento1a" },
    "fesNav": { "nome": "NAV", datacol: "nav" },
    "fesVal": { "nome": "VAL", datacol: "val" },
    "fesPercYtd": { "nome": "Rendimento %YTD", datacol: "percytd" },
    "fesPerc6m": { "nome": "Rendimento %6M", datacol: "perc6m" },
    "fesPerc1a": { "nome": "Rendimento %1A", datacol: "perc1a" },
    "fesPerc3a": { "nome": "Rendimento %3A", datacol: "perc3a" },
    "fesPerc5a": { "nome": "Rendimento %5A", datacol: "perc5a" },
    "fesVol1a": { "nome": "Volatilit&agrave; %1A", datacol: "volat1" },
    "fesVol3a": { "nome": "Volatilit&agrave; %3A", datacol: "volat3" },
    "fesVol5a": { "nome": "Volatilit&agrave; %5A", datacol: "volat5" },
    "fesSharpe": { "nome": "Indice di Sharpe", datacol: "indicesharpe" },
    "fesBeta": { "nome": "Beta", datacol: "beta" },
    "fesPercAx": { "nome": "Composizione %AZ", datacol: "percaz" },
    "fesPercObb": { "nome": "Composizione %OBB", datacol: "percobb" },
    "fesPercLiquidita": { "nome": "Composizione %LIQUIDIT&Agrave;", datacol: "percliq" },
    "fesPercAltro": { "nome": "Composizione %ALTRO", datacol: "percaltro" },
    "fesCostiInvIniz": { "nome": "Investimento minimo iniziale", datacol: "invminimoiniz" },
    "fesCostiInvSucc": { "nome": "Investimento minimo successivo", datacol: "invminimosucc" },
    "fesCommissione": { "nome": "Commissione % ingresso", datacol: "commwb" },
    "fesGestione": { "nome": "Commissione % gestione ann.", datacol: "commgest" }
};
var tablePersCols, fesConfButton, setConfButtonText, fesSelConfirm, fesSelTitle, fesSelCont, fesTotFilt, fesTotale,
    fesTable, fesTheadRow1, fesTheadRow2, fesTableHeaderRefresh, fesSmoreWrap, fesSmore, fesManc, fesSearchData,
    fesCurrentButton, fesCurrentSelection, fesCurrentField, fesSelContForm, fesSelElTotal, fesSelElInput,
    fesSliderSelect, fesSliderDal, fesSliderAl;
// Vista personalizzata (precarica eventuali variabili)
if (typeof localStorage.fesPC !== "undefined") { tablePersCols = localStorage.fesPC.split("|"); } else { tablePersCols = []; }

function fesGetData(firstpage) {
    // Campo da passare con controllo di paginaizione 
    $("#firstpage").val(firstpage);
    setLoadingOnObject("#fesRicWrap");
    if (firstpage) {
        // Refresh dell'intestazione
        fesTableHeaderRefresh();
        $("#fesSearchResults").hide();
    }
    ttHide();
    $.ajax({
        url: fesSearchDataUrl,
        dataType: "json",
        method: "POST",
        data: $("#fesSearchForm").serialize() + "&" + $("#fesSearchLeftForm").serialize() + "&bpmpage=fesTabella4s",
        success: function(data) {
            // Se la pagina non e' specificata...
            if (firstpage) {
                // Aggiorna le statistiche quantitative
                fesSearchData = data.statistiche;
                // Svuota la tabella elimina tutti i tr dell'elemento al di fuori dell'intestazione
                fesTable.find("tr:not(.festTableHead)").remove();
            }
            // Aggiorna le intestazioni
            fesTotFilt.html(data.filtered);
            fesTotale.html(data.total);
            if (data.data.length > 0) {
                // Carica i nuovi elementi, riga per riga
                $.each(data.data, function(k, v) {
                    var fesTr = $("<tr>");
                    // Generali
                    if (v.selected) fesTr.addClass("selezionato");
                    // CheckBox confronto
                    var fesCb = $("<input>").attr({ "type": "checkbox", "name": "fesCheckConfronta", "value": v.codicefida, "data-tooltip": "" });
                    if (fesConfSelected.length >= fesConfMax) fesCb.attr({ "disabled": true });
                    if ($.inArray(v.codicefida.toString(), fesConfSelected) >= 0) fesCb.attr({ "checked": true, "disabled": false });
                    fesCb.click(function(e) {
                        // Rileva tutti i campi checked nella tabella (max 2) ed aggiorna il "confronta"
                        fesConfButton.hide();
                        var fesCbSelected = fesTable.find("input[name=fesCheckConfronta]:checked");
                        if ($(this).is(":checked")) {
                            $.each(fesCbSelected, function(i, v) {
                                if ($.inArray(v.value, fesConfSelected) < 0) {
                                    fesConfSelected.push(v.value);
                                }
                            });
                        } else {
                            fesConfSelected.splice($.inArray(this.value, fesConfSelected), 1);
                        }
                        // Se i fondi hanno raggiunto il massimo, disabilita tutti i campi non checkati
                        if (fesConfSelected.length >= fesConfMax) {
                            fesTable.find("input[name=fesCheckConfronta]").attr("disabled", true);
                            fesTable.find("input[name=fesCheckConfronta]:checked").attr("disabled", false);
                        } else {
                            fesTable.find("input[name=fesCheckConfronta]").attr("disabled", false);
                        }
                        setConfButtonText();
                        if (fesConfSelected.length > 0) fesConfButton.show();
                        // Determina il testo del tooltip da inserire
                        if ($(this).is(":checked")) {
                            if (fesConfSelected.length >= fesConfMax) {
                                $(this).attr("data-tooltip", "<strong>Fondo aggiunto al confronto.</strong><br>&Egrave; possibile confrontare al massimo 2 fondi alla volta.<br><br><a href=\"#!\" onclick=\"ttHide(); fesConfShow();\">Vai alla pagina \"confronta\"</a>");
                            } else {
                                $(this).attr("data-tooltip", "<strong>Fondo aggiunto al confronto.</strong><br>Lo trovi alla pagina \"confronta\".");
                            }
                        } else {
                            $(this).attr("data-tooltip", "Hai rimosso un elemento dal confronto");
                        }
                        ttShow(e, $(this));
                    });
                    // Checkbox "confronta"
                    fesTr.append($("<td>").append(fesCb).addClass("permanent"));
                    var fesFondoNome = $("<a>").html(v.nome).attr({ "href": "#!" });
                    fesFondoNome.click(function() {
                        fesFondoShow({ "codicesocieta": v.codicesocieta, "codicecomparto": v.codicecomparto, "divisa": v.divisa, "fondosicav": v.fondosicav, "codicefida": v.codicefida });
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
                    fesTr.append($("<td>").addClass("sintesi center").append(corone));
                    fesTr.append($("<td>").html(v.assogestioni).addClass("sintesi"));
                    fesTr.append($("<td>").html(formatNumber(v.rendimento1a)).addClass("sintesi right"));
                    fesTr.append($("<td>").html(formatNumber(v.nav)).addClass("sintesi right"));
                    fesTr.append($("<td>").html(formatNumber(v.val)).addClass("sintesi right"));
                    // Rendimenti
                    fesTr.append($("<td>").addClass("rendimenti center").append(corone));
                    fesTr.append($("<td>").html(formatNumber(v.percytd)).addClass("rendimenti right"));
                    fesTr.append($("<td>").html(formatNumber(v.perc6m)).addClass("rendimenti right"));
                    fesTr.append($("<td>").html(formatNumber(v.perc1a)).addClass("rendimenti right"));
                    fesTr.append($("<td>").html(formatNumber(v.perc3a)).addClass("rendimenti right"));
                    fesTr.append($("<td>").html(formatNumber(v.perc5a)).addClass("rendimenti right"));
                    // Rischio
                    fesTr.append($("<td>").addClass("rischio center").append(corone));
                    fesTr.append($("<td>").html(formatNumber(v.volat1)).addClass("rischio right"));
                    fesTr.append($("<td>").html(formatNumber(v.volat3)).addClass("rischio right"));
                    fesTr.append($("<td>").html(formatNumber(v.volat5)).addClass("rischio right"));
                    fesTr.append($("<td>").html(formatNumber(v.indicesharpe)).addClass("rischio right"));
                    fesTr.append($("<td>").html(formatNumber(v.beta)).addClass("rischio right"));
                    // Composizione
                    fesTr.append($("<td>").html(v.assogestioni).addClass("composizione"));
                    fesTr.append($("<td>").html(formatNumber(v.percaz)).addClass("composizione right"));
                    fesTr.append($("<td>").html(formatNumber(v.percobb)).addClass("composizione right"));
                    fesTr.append($("<td>").html(formatNumber(v.percliq)).addClass("composizione right"));
                    fesTr.append($("<td>").html(formatNumber(v.percaltro)).addClass("composizione right"));
                    // Costi
                    fesTr.append($("<td>").html(formatNumber(v.invminimoiniz)).addClass("costi right"));
                    fesTr.append($("<td>").html(formatNumber(v.invminimosucc)).addClass("costi right"));
                    fesTr.append($("<td>").html(v.commwb).addClass("costi right"));
                    fesTr.append($("<td>").html(formatNumber(v.commgest)).addClass("costi right"));
                    // Vista personalizzata
                    if (tablePersCols.length > 0) {
                        // Colonne personalizzate
                        $.each(tablePersCols, function(i, val) {
                            fesTr.append($("<td>").html(formatNumber(v[fesTablePersCols[val].datacol])).addClass("perso"));
                        });
                    } else {
                        // Vista non ancora personalizzata
                        fesTr.append($("<td>").html("&nbsp;").addClass("perso"));
                    }
                    // Icona operativa
                    // Icona + parametri da passare a be come attributi
                    if (!is4s) {
                        var fesTrOpeIcoA = $("<a>").addClass("linkVai").attr({
                            "title": "scegli l'operazione da effettuare",
                            "href": "#!",
                            "codicesocieta": v.codicesocieta,
                            "codicecomparto": v.codicecomparto,
                            "divisa": v.divisa,
                            "fondosicav": v.fondosicav
                        });
                        fesTrOpeIcoA.click(fesIcoOpe);
                        var fesTrOpeMenu = $("<div>").addClass("sezioneLinks2").css({ "margin-left": "-113px", "margin-top": "-21px" }).hide();
                        var fesTrOpeIco = $("<div>").addClass("linkTooltip").append(fesTrOpeIcoA, fesTrOpeMenu);
                        fesTr.append($("<td>").addClass("center icopad permanent").append(fesTrOpeIco));
                    }
                    fesTable.append(fesTr);
                });
            } else {
                fesTable.append("<tr><td colspan='30' class='permanent center'><i>La ricerca non ha prodotto risultati</i></td></tr>");
            }
            // Mostra o nasconde il pulsante per scaricare altri dati dalla tabella
            var fesFindRest = (data.filtered - (fesTable.find("tr").length - 2));
            if (fesFindRest > 0) {
                fesSmoreWrap.show();
                fesSmore.find("span").html((fesFindRest > fesTableAmount) ? fesTableAmount : fesFindRest);
                fesManc.find("span").html(fesFindRest);
            } else {
                fesSmoreWrap.hide();
            }
            // Mostra solo i dati selezionati nella select
            $("#fesSearchTable tr>:not(.permanent)").hide();
            $("#fesSearchTable ." + $("#fesSearchTableSelect").val()).show();
            unsetLoadingOnObject("#fesRicWrap");
            $("#fesSearchResults").show();
        },
        error: function() {
            alert("Errore nel ricevimento dei dati - Tabella");
        }
    });
}
// Attiva e popola il pannello di selezione, ritornando i risultati
function fesSelect(btnSel) {
    // Individua l'elemento che determina la revisione
    fesCurrentButton = btnSel;
    fesCurrentSelection = fesCurrentButton.find("input[type=hidden]").val().split(",");
    fesCurrentField = fesCurrentButton.find("input[type=hidden]").attr("name");
    // apre l'overlayer coi dati ricevuti via ajax
    fesSelTitle.html(btnSel.parent(".span4, .fesAdvFiltro").find("label.nomefield").html());
    // Popola il contenitore coi dati aggiornati
    fesSelContForm = $("<form>").attr("autocomplete", "off");
    fesSelCont.empty();
    fesSelCont.attr("id", "selCont" + fesCurrentField.charAt(0).toUpperCase() + fesCurrentField.slice(1));
    fesSelCont.append(fesSelContForm);
    // Determina come popolare il contenitore declinandolo a seconda del campo, a partire dallo standard
    // Se si tratta di campi "standard"...
    if (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento")) {
        $.each(fesConf[fesCurrentField], function(key, v) {
            // Determina il totale
            fesSelElTotal = (fesSearchData[fesCurrentField][key]) ? fesSearchData[fesCurrentField][key] : 0;
            // Costruisce i campetti con le opzioni
            var InpType = "checkbox";
            if (fesCurrentField == "invMinimo" || fesCurrentField == "commissione") InpType = "radio";
            var disabled = (fesSelElTotal === 0) ? true : false;
            fesSelElInput = $("<input>").attr({ "type": InpType, "name": "fesSelected", "value": key, "disabled": disabled });
            fesSelElInput.on("change", function() {
                if ($(this).is(":checked")) {
                    $(this).parents(".selEl").addClass("selected");
                } else {
                    $(this).parents(".selEl").removeClass("selected");
                }
            });
            var fesSelElQta = $("<span>").html(" (" + fesSelElTotal + ")").addClass("selElTotal");
            var fesSelElName = $("<span>").html(v.nome).addClass("selElName");
            var fesSelElLabel = $("<span>").addClass("selElLabel").append(fesSelElName, fesSelElQta);
            var fesSelEl = $("<label>").addClass("selEl").attr("id", "id" + key.toString()).append(fesSelElInput, fesSelElLabel);
            // Declinazioni "speciali"
            if (fesCurrentField == "codSocieta") { fesSelEl.css({ "background-image": "url(" + v.img + ")" }); }
            if (fesCurrentField == "codRating" || fesCurrentField == "codSettore") { fesSelEl.prepend($("<span>").addClass("imgDetail")); }
            if (fesCurrentField == "fesCategoria") fesSelEl.attr({ "codcategoria": fesConf[fesCurrentField][key].codCategoria, "tipoCategoria": key.toString().split("|")[0] });
            if (disabled) fesSelElLabel.addClass("disabled");
            $("<div>").addClass("selElWrapper").append(fesSelEl);
            fesSelContForm.append(fesSelEl);
            if ($.inArray(key, fesCurrentSelection) >= 0) {
                fesSelElInput.attr("checked", "checked");
                fesSelElInput.trigger("change");
            }
        });
    } else {
        // Se si tratta di volatilita o rendimento per l'inizializzazione del campo
        // Allestisce gli oggetti
        var fesSliderConsole = $("<div>").addClass("sliderConsole");
        var sliderOpt;
        fesSliderSelect = $("<select>");
        // Popola la select
        fesSliderSelect.append($("<option>").attr({ "value": "" }).html("-- seleziona l'arco temporale --"));
        $.each(fesConf[fesCurrentField], function(key, v) {
            fesSliderSelect.append($("<option>").attr({ "value": key.toString() }).html(v.periodo));
        });
        fesSliderSelect.on("change", function() {
            sliderOpt = fesConf[fesCurrentField][$(this).find("option:selected").val()];
            if (sliderOpt) {
                // Inizializza i campetti con i valori per lo slider
                var valMin = (Number(sliderOpt.defaultmin) < Number(sliderOpt.min)) ? sliderOpt.defaultmin : sliderOpt.min;
                var valMax = (Number(sliderOpt.defaultmax) > Number(sliderOpt.max)) ? sliderOpt.defaultmax : sliderOpt.max;
                fesSliderDal.val(Number(sliderOpt.defaultmin));
                fesSliderAl.val(Number(sliderOpt.defaultmax));
                // Inizializza/ricrea lo slider 
                fesSlider.slider("option", {
                    range: true,
                    min: Number(valMin),
                    max: Number(valMax),
                    step: 0.01,
                    values: [sliderOpt.defaultmin, sliderOpt.defaultmax]
                });
                // Aggiorna tutte le milestones 
                var mileStep = (Number(valMax) - Number(valMin)) / 6;
                $.each($(".fesSliderMilestones .number"), function(i, v) {
                    $(v).html(Math.round((Number(valMin) + (i * mileStep)) * 100) / 100 + "%");
                });
                fesSliderCont.show();
                fesSliderForm.show();
            } else {
                fesSliderForm.hide();
                fesSliderCont.hide();
            }
        });
        var fesInputFixnum = function() {
            var fieldVal = $(this).val().split("");
            var cleanedVal = $.grep(fieldVal, function(n) {
                var testText = "0123456789.-";
                return (testText.indexOf(n) >= 0);
            });
            $(this).val(cleanedVal.join("").split(".", 2).join("."));
        };
        fesSliderDal = $("<input>").attr({ "type": "text", "maxlength": 6 }).on("keyup", fesInputFixnum);
        fesSliderAl = $("<input>").attr({ "type": "text", "maxlength": 6 }).on("keyup", fesInputFixnum);
        var fesSliderRefresh = $("<a>").addClass("refresh");
        fesSliderRefresh.click(function() {
            // Controlli incrociati
            if (Number(fesSliderDal.val()) > Number(sliderOpt.max)) fesSliderDal.val(sliderOpt.max);
            if (Number(fesSliderDal.val()) < Number(sliderOpt.min)) fesSliderDal.val(sliderOpt.min);
            if (Number(fesSliderAl.val()) > Number(sliderOpt.max)) fesSliderAl.val(sliderOpt.max);
            if (Number(fesSliderAl.val()) < Number(sliderOpt.min)) fesSliderAl.val(sliderOpt.min);
            if (Number(fesSliderDal.val()) > Number(fesSliderAl.val())) fesSliderDal.val(fesSliderAl.val());
            if (Number(fesSliderAl.val()) < Number(fesSliderDal.val())) fesSliderAl.val(fesSliderDal.val());
            fesSliderDal.val(Math.round(Number(fesSliderDal.val()) * 100) / 100);
            fesSliderAl.val(Math.round(Number(fesSliderAl.val()) * 100) / 100);
            // Refresh dei dati sullo slider
            fesSlider.slider("option", {
                values: [Number(fesSliderDal.val()), Number(fesSliderAl.val())]
            });
        });
        var fesSliderForm = $("<div>").addClass("sliderForm").hide().append("dal ", fesSliderDal, " % al ", fesSliderAl, " % ", fesSliderRefresh);
        fesSliderConsole.append(fesSliderSelect, fesSliderForm);
        var fesSlider = $("<div>").addClass("fesSlider");
        var fesSliderMilestones = $("<div>").addClass("fesSliderMilestones");
        var x;
        for (x = 0; x < 7; x++) {
            fesSliderMilestones.append($("<span>").addClass("mile").append($("<span>").addClass("number"), $("<span>").addClass("stone")));
        }
        var fesSliderCont = $("<div>").addClass("fesSliderCont").hide().append(fesSliderMilestones, fesSlider);
        fesSelContForm.append(fesSliderConsole, fesSliderCont);
        fesSlider.slider({
            slide: function(event, ui) {
                fesSliderDal.val(ui.values[0]);
                fesSliderAl.val(ui.values[1]);
            }
        });
        // Eventualmente precarica i dati se il campo &egrave; inizializzato
        var fesFieldVal = $("#" + fesCurrentField).val();
        if (fesFieldVal.length) {
            // Inizializza la select
            fesSliderSelect.find("option[value=" + fesFieldVal.split("|")[0] + "]").attr("selected", true);
            fesSliderSelect.trigger("change");
            fesSliderDal.val(fesFieldVal.split("|")[1]);
            fesSliderAl.val(fesFieldVal.split("|")[2]);
            fesSliderRefresh.trigger("click");
        }
    }
    // Costruisce i vari selettori per le categorie, sempre mettendoli nel contenitore
    if (fesCurrentField == "fesCategoria") {
        // Nasconde i dati del form, che ci interessano
        fesSelContForm.find("label").hide();
        // Select con codici categoria
        var fesCatSelect = $("<div>").addClass("fesSelect").hide();
        // Select
        var fesCatSelectInput = $("<select>");
        var fesCatRadioVal;
        fesCatSelect.on("change", function() {
            fesSelContForm.find("label").removeClass("white").hide();
            var fesCatSelected = $(this).find("option:selected").val();
            // Attribuisce il colore alle "righette" e, contemporaneamente, le mostra
            $.each(fesSelContForm.find("label[codcategoria='" + fesCatSelected + "'][tipoCategoria='" + fesCatRadioVal + "']"), function(i, v) {
                v = $(v);
                // Se si ha un numero pari di "riga"
                if (Math.round((i - 1) / 2) % 2 == 1) {
                    v.addClass("white");
                }
                v.show();
                alertresize();
            });
        });
        // Console di selezione/deselezione
        var fesCatSelectConsole = $("<div>").addClass("btnConsole");
        var fesCatSelectBtnSel = $("<a>").addClass("btn").attr("id", "btnSeleziona").html("seleziona tutti");
        var fesCatSelectBtnDes = $("<a>").addClass("btn").attr("id", "btnDeseleziona").html("annulla selezione");
        var fesCatSelectBtnFunction = function() {
            // Tutti i checkbox visibili
            var allSelect = fesSelContForm.find("input[type=checkbox]:visible");
            if ($(this).attr("id") == "btnSeleziona") {
                allSelect.attr("checked", true);
            } else {
                allSelect.attr("checked", false);
            }
        };
        fesCatSelectBtnSel.click(fesCatSelectBtnFunction);
        fesCatSelectBtnDes.click(fesCatSelectBtnFunction);
        fesCatSelectConsole.append(fesCatSelectBtnSel, fesCatSelectBtnDes);
        fesCatSelect.append(fesCatSelectInput, fesCatSelectConsole);
        fesSelCont.prepend(fesCatSelect);
        // Radio button tipo categoria
        var fesCategoriaRadio = $("<div>").addClass("fesRadio");
        $.each(fesConf.tipoCategoria, function(k, v) {
            var fesCatRadioEl = $("<label>");
            fesCatRadioEl.append($("<input>").attr({ "type": "radio", "name": "fesCatRadio", "value": k.toString() }));
            fesCatRadioEl.append(v.nome);
            fesCategoriaRadio.append(fesCatRadioEl);
            fesCatRadioEl.find("input").on("change", function() {
                fesSelContForm.find("label").hide();
                fesCatRadioVal = $(this).val();
                fesCatSelectInput.empty();
                fesCatSelectInput.append($("<option>").attr("value", "  ").html("--- seleziona una categoria ---"));
                // Crea un'array con le categorie filtrate in base al "radio"
                $.each(fesConf.fesCategoria, function(k, v) {
                    if (k.toString().split("|")[0] == fesCatRadioVal) {
                        if (!fesCatSelectInput.find("option[value='" + v.codCategoria + "']").length) fesCatSelectInput.append($("<option>").html(v.codCategoria).attr("value", v.codCategoria));
                    }
                });
                fesCatSelect.show();
            });
        });
        fesSelCont.prepend(fesCategoriaRadio);
    }
    // Pulsante di conferma 
    fesSelConfirm[0].innerHTML = (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento")) ? "Filtra per gli elementi selezionati" : "Filtra";
    openPopOverLayer("#fesSelector");
}
var fesTabInited = false;
// Inizializza i Tab di ricerca 
function fesTabInit() {
    if (!fesTabInited) {
        var fesTabRic = $("#tabRicerca");
        fesTabRic.click(function() {
            $("#fesRicWrap ul.tabGeneric li").removeClass("active");
            // Se esiste il contenitore del confronto lo nasconde
            if ($("#fesConfrontaCont").length) $("#fesConfrontaCont").hide();
            $(this).addClass("active");
            $("#fesRicercaCont").show();
            fesRicShow();
            if (fesTable.length) {
                if (fesConfSelected.length >= fesConfMax) {
                    fesTable.find("input[name=fesCheckConfronta]").attr("disabled", true);
                    fesTable.find("input[name=fesCheckConfronta]:checked").attr("disabled", false);
                }
            }
        });
        //Pulsanti per confronto
        fesConfButton = $("#fesConfButt");
        var fesConfButtonText = fesConfButton.find("span");
        var fesConfButtonClose = fesConfButton.find(".smallClose");
        fesConfButtonClose.click(function() {
            // Riabilita tutti i campi e li dechecka
            fesConfSelected = [];
            wBest = false;
            fesConfButton.hide();
            if (typeof fesTable != "undefined") {
                fesTable.find("input[name=fesCheckConfronta]").attr({ "disabled": false, "checked": false });
            }
            setConfButtonText();
        });
        setConfButtonText = function() {
            var confText = (fesConfSelected.length > 1) ? fesConfSelected.length + " fondi" : "1 fondo";
            fesConfButtonText.html(confText);
            if (pageType !== '') {
                if (fesConfSelected.length !== 1) {
                    $('#fesConfLink').html('<span id="fesConfNum">' + fesConfSelected.length + '</span> fondi selezionati per confronto');
                } else {
                    $('#fesConfLink').html('<span id="fesConfNum">1</span> fondo selezionato per confronto');
                }
            } else {
                if (!fesConfSelected.length) {
                    fesConfButton.hide();
                } else {
                    fesConfButton.show();
                }
            }
        };
        setConfButtonText();
        fesTabInited = true;
    }
}
// Inizializza gli oggetti per la ricerca
function fesRicShow() {
    /* Nasconde il carrellino */
    $("#faseStart").hide();
    // Resetta la pagina di provenienza
    $("#fromPage").val("");
    // Mostra il contenitore della pagina di ricerca
    $("#fesRicWrap").show();
    // Se esiste, nasconde l'eventuale contenitore del confronta
    if ($("#fesConfrontaCont").length) $("#fesConfrontaCont").hide();
    // Se l'oggetto non &egrave; ancora inizializzato...
    if (!fesRicStarted) {
        fesTabInit();
        // Appende i filtri avanzati (creato come HTML nel contenitore) nella spalla sinistra, subito sotto il menu', modificandone il margine superiore
        // Crea l'overlay per il selettore
        var fesSelOl = $("<div>").attr("id", "fesSelector").addClass("selOverlay");
        fesSelConfirm = $("<a>").addClass("aButton").attr("href", "#!");
        fesSelConfirm.click(function() {
            if (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento")) {
                // Aggiorna lo stato del campo coi dati selezionati
                var fValueArr = [];
                $.each(fesSelContForm.find("input[name=fesSelected]:checked"), function(i, v) {
                    fValueArr.push($(v).val());
                });
                fesCurrentButton.find("input[type=hidden]").val(fValueArr.join(","));
                var fesSpanText = (fValueArr.length > 1) ? fValueArr.length + " elementi selezionati" : fesConf[fesCurrentButton.find("input[type=hidden]").attr("name")][fValueArr[0]].nome;
                fesCurrentButton.find(".reset").show();
                fesCurrentButton.find("span").html(fesSpanText);
                // Mostra l'etichetta top se in spalla sinistra
                if (fesCurrentButton.parent(".fesAdvFiltro").length) fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
            } else {
                if (fesSliderSelect.find("option:selected").val() !== "") {
                    // Aggiorna lo stato del campo coi dati selezionati
                    fesCurrentButton.find("input[type=hidden]").val(fesSliderSelect.find("option:selected").val() + "|" + fesSliderDal.val() + "|" + fesSliderAl.val());
                    fesCurrentButton.find("span").html(fesConf[fesCurrentField][fesSliderSelect.find("option:selected").val()].periodo + "<br><span>(" + fesSliderDal.val() + "% - " + fesSliderAl.val() + "%)</span>");
                    fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
                    fesCurrentButton.find(".reset").show();
                }
            }
            closePopOverLayer("#fesSelector");
            fesGetData(true);
        });
        fesSelTitle = $("<h2>");
        var fesSelClose = $("<a>").addClass("close");
        fesSelClose.click(function() { closePopOverLayer("#fesSelector"); });
        fesSelCont = $("<div>").addClass("fesSelCont");
        fesSelOl.append(fesSelTitle, fesSelClose, fesSelCont, fesSelConfirm);
        fesSelConfirm.wrap($("<div>").addClass("aButtoncons"));
        $("body").prepend(fesSelOl.hide());
        fesTotFilt = $("#fesTotFiltered");
        fesTotale = $("#fesTot");
        // Inizializza gli oggetti nei filtri avanzati
        $("#fesSearchLeftSwitch").toggle(function() {
            $(this).addClass("opened");
            $(".fesSearchLeftMenu").show();
        }, function() {
            $(this).removeClass("opened");
            $(".fesSearchLeftMenu").hide();
        });
        $("#descrizione").magicSearch(fesAutocompleteUrl, function() { fesGetData(true); });
        // Bottoni 
        $.each($(".btnMultiSel"), function(i, v) {
            var fDiv = $(v);
            var fesInitStatusText = (fDiv.parents("#fesSearchLeftForm")[0]) ? fDiv.parent().find("label.nomefield").html() : "Seleziona...";
            fDiv.append($("<span>").html(fesInitStatusText));
            var fDivReset = $("<a>").addClass("reset").html("&nbsp;").attr({ "href": "#!", "title": "Resetta criterio di ricerca" }).hide();
            fDivReset.click(function() {
                fesResetFilters();
                // Ripete la ricerca
                fesGetData(true);
            });
            if (fDiv.parents("#fesSearchLeftForm")[0]) {
                fDiv.prepend(fDivReset);
            } else {
                fDiv.append(fDivReset);
            }
            fDiv.find("span").click(function() {
                // Apre il pannello di selezione, raccogliendo i dati
                fesSelect($(this).parent(".btnMultiSel"));
            });
            // Se il bottone ha un valore nel "value", lo precompila ed inizializza
            if (fDiv.find("input").val() !== "") {
                var vArr = fDiv.find("input").val().split(",");
                var vtw = (vArr.length > 1) ? vArr.length + " elementi selezionati" : fesConf[fDiv.find("input").attr("name")][fDiv.find("input").val()].nome;
                fDiv.find("span").html(vtw);
                // Mostra il reset
                fDivReset.show();
            }
        });
        // Prepara la tabella
        // Crea la tabella con i risultati
        fesTable = $("<table>").attr({ "id": "fesSearchTable" }).addClass("dettTable sortable");
        fesTheadRow1 = $("<tr>").addClass("festTableHead");
        fesTheadRow2 = $("<tr>").addClass("festTableHead");
        // Refresh degli heading
        fesTableHeaderRefresh = function() {
            var fesThOrd;
            // Svuota gli header
            fesTheadRow1.empty();
            fesTheadRow2.empty();
            // prepara l'header
            // Controllo dell'ordinamento
            var fesThClick = function() {
                // Classe dell'elemento cliccato
                fesThOrd = $(this).parent();
                // Cambia il campo di ordinamento
                $("#orderby").val($(this).attr("fieldname"));
                // Rileva l'ordinamento se vuoto o nullo diviene ascendente, altrimenti discendente
                if (!fesThOrd.hasClass("asc")) {
                    $("#orderdir").val("asc");
                } else {
                    $("#orderdir").val("desc");
                }
                // Refresh della tabella con i dati ed il nuovo ordinamento
                fesGetData(true);
            };
            $.each(fesTableCols, function(k, col) {
                var fesThLink = $("<a>").addClass("sortDir").attr({ "href": "#!", "fieldname": k.toString() }).html(col.nome);
                // Controllo dell'ordinamento
                fesThClick = function() {
                    // Classe dell'elemento cliccato
                    fesThOrd = $(this).parent();
                    // Cambia il campo di ordinamento
                    $("#orderby").val($(this).attr("fieldname"));
                    // Rileva l'ordinamento se vuoto o nullo diviene ascendente, altrimenti discendente
                    if (!fesThOrd.hasClass("asc")) {
                        $("#orderdir").val("asc");
                    } else {
                        $("#orderdir").val("desc");
                    }
                    // Refresh della tabella con i dati ed il nuovo ordinamento
                    fesGetData(true);
                };
                fesThLink.click(fesThClick);
                var fesThToAppend = $("<th>").addClass("sort " + col.classe).append(fesThLink);
                if (k.toString() == "fesNome") fesThToAppend.css("width", "160");
                if (k.toString() == "fesRating" || k.toString() == "fesRatingRend" || k.toString() == "fesRatingRischio") fesThToAppend.css("width", "90");
                // Se la colonna ha il gruppo...
                if (col.gruppo) {
                    // Controlla se il gruppo esiste ed eventualmente lo appende
                    var curGroup = fesTheadRow1.find("th[groupname='" + col.gruppo + "']");
                    if (curGroup.length) {
                        curGroup.attr("colspan", Number(curGroup[0].getAttribute("colspan")) + 1);
                    } else {
                        fesTheadRow1.append($("<th>").attr({ "groupname": col.gruppo, colspan: "1" }).addClass(col.classe).html(col.gruppo));
                    }
                    fesTheadRow2.append(fesThToAppend);
                } else {
                    fesTheadRow1.append(fesThToAppend.attr("rowspan", 2));
                }
            });
            // Aggiunge la colonna vuota per il checkbox
            fesTheadRow1.prepend($("<th>").html("&nbsp;").addClass("permanent").attr("rowspan", 2));
            // Aggiunge le colonne della vista personalizzata
            // Vista non ancora personalizzata
            if (tablePersCols.length > 0) {
                $.each(tablePersCols, function(i, v) {
                    var persoLink = $("<a>").addClass("sortDir").attr({ "href": "#!", "fieldname": v }).html(fesTablePersCols[v].nome);
                    persoLink.click(fesThClick);
                    fesTheadRow1.append($("<th>").addClass("sort perso").attr("rowspan", 2).append(persoLink));
                });
            } else {
                fesTheadRow1.append($("<th>").html("&nbsp;").addClass("sort perso").css("width", "62%").attr("rowspan", 2));
            }
            // Aggiunge la colonna vuota per l'icona operativa
            if (!is4s) {
                fesTheadRow1.append($("<th>").html("&nbsp;").addClass("permanent").attr("rowspan", 2));
            }
            //Setta l'ordinamento 
            var orderby = $("#orderby").val();
            if (orderby !== "") {
                $("a[fieldname='" + orderby + "']").parent().addClass($("#orderdir").val());
            }
        };
        $("#fesSearchResults").append(fesTable.append(fesTheadRow1, fesTheadRow2));
        // Tuning dell'altezza di riposizionamento dei filtri sulla sinistra
        // Assegna i vari componenti che controllano direttamente la tabella
        $("#fesSearchTableSelect").on("change", function() {
            $("#fesSearchTable tr>:not(.permanent)").hide();
            $("#fesSearchTable ." + $(this).val()).show();
            if ($(this).val() == "perso") {
                // Inizializzazione dell'overlay (se non ancora fatta)
                var tPo = $("#tablePersOverlay");
                var tPoCount = $("#tablePersCont b").eq(0);
                tPo.find("a.close").click(function() { closePopOverLayer("#tablePersOverlay"); });
                var tPoF = tPo.find("form");
                tPoF.empty();

                var updateColCount = function(e) {
                    // Cambia il valore del conteggio ed eventualmente "limita" il tutto con un messaggio di errore
                    var valCount = tPoF.find("input:checked").length;
                    if (valCount > 5) {
                        var check = $(this);
                        check.attr({ "checked": false, "data-tooltip": "Hai gi&agrave; inserito un numero massimo di parametri (5)." });
                        ttShow(e, check);
                        valCount = 5;
                    }
                    tPoCount.html(valCount);
                };
                // Popola la lista delle colonne disponibili
                $.each(fesTablePersCols, function(k, v) {
                    //<label class="selEl"><input type="checkbox" name="fesSelected" value="Altro"><span class="selElLabel">Altro</span></label>
                    var tPcol = $("<label>").addClass("selEl");
                    var tPcolInput = $("<input>").attr({ "type": "checkbox", "name": "persCol", "value": k });
                    tPcolInput.on("change", updateColCount);
                    if ($.inArray(k, tablePersCols) >= 0) tPcolInput.attr("checked", "checked");
                    tPcol.append(tPcolInput, $("<span>").addClass("selElLabel").html(v.nome));
                    tPoF.append(tPcol);
                });
                // Click sul bottone "Salva"
                tPo.find("a.aButton").click(function() {
                    // Assegna i flaggati ad una variabile che raccoglie le colonne personalizzate
                    tablePersCols = [];
                    $.each(tPo.find("input[name=persCol]:checked"), function(i, v) {
                        tablePersCols.push($(v).val());
                    });
                    localStorage.fesPC = tablePersCols.join("|");
                    closePopOverLayer("#tablePersOverlay");
                    fesGetData(true);
                });
                updateColCount();
                openPopOverLayer("tablePersOverlay");
            }
        });
        // Pulsante che mostra altri risultati
        fesSmoreWrap = $("<div>").attr("id", "fesSearchMoreWrap").hide();
        fesSmore = $("<div>").addClass("fesSearchMore").html("Mostra i prossimi <span></span>&nbsp;risultati");
        fesManc = $("<span>").attr("id", "fesMancanti").html("<span></span>&nbsp;risultati rimanenti");
        fesSmoreWrap.append(fesManc, fesSmore);
        var fesBottomBtns = $("<div>").addClass("fesSearchBottomBtns");
        var fesBack = $("<div>").addClass("fesSearchBack fesSearchMore").html("Indietro");
        fesBottomBtns.append(fesBack, fesSmoreWrap);
        $("#fesSearchResults").append(fesBottomBtns, $('<br class="clear">'));
        fesSmore.click(function() { fesGetData(false); });
        // Riceve i primi dati globali
        //fesGetData(true);
        fesRicStarted = true;
    }
}
var fesConfCont;
/* CARICAMENTO DATI DEL CONFRONTA */
function fesConfShow() {
    fesConfCont = $("#fesConfrontaCont");
    // Resetta la pagina di provenienza
    $("#fromPage").val("");
    fesTabInit();
    $("#fesRicWrap").show();
    // Nasconde la ricerca
    $("#fesRicercaCont").hide();
    // Prepara il contenitore del tab,se necessario
    if (!fesConfCont.length) {
        fesConfCont = $("<div>").attr({ "id": "fesConfrontaCont" });
        fesConfCont.append($("<img>").attr({ "src": "/wscmn/img/ico2inf_loadingbig.gif" }).css({ "padding-left": "315px", "padding-top": "60px" })).show();
        if (pageType !== "") {
            $("#fesDisclaimer").before(fesConfCont);
        } else {
            $("#fesRicWrap").append(fesConfCont);
        }
    } else {
        fesConfCont.empty();
    }
    fesConfCont.show();
    // Imposta i contenuti tramite chiamata o altro
    // Se i fondi da selezionare sono presenti fa la chiamata per avere i dati, altrimenti mostra un messaggio standard
    if (fesConfSelected.length) {
        // Carica la pagina di confronto via AJAX (qualora vi fossero dati i dati)
        $.ajax({
            url: fesConfUrl,
            dataType: "html",
            data: { "codFida": fesConfSelected.join("|"), withBest: wBest },
            success: function(data) {
                fesConfCont.empty();
                fesConfCont.html(data);
                ttSet("#fesConfrontaCont");
                setIcopad();
                // Inizializza i grafici, se esistono i dati
                if (typeof dati_confronta !== "undefined") {
                    // Grafico confronto 
                    var gCont = $("#grafico_confronta");
                    gCont.empty();
                    // Crea gli elementi del grafico e li popola
                    var gSpace = $("<div>").attr({ "id": "grafico_confronta_space" });
                    // Select
                    var gSelect = $("<select>");
                    $.each(dati_confronta, function(k) {
                        var opt = $("<option>").attr({ "value": k.toString() }).html(k.toString());
                        if (k.toString() == "1 anno") opt.attr({ "selected": true });
                        gSelect.append(opt);
                    });
                    gSelect.on("change", function() {
                        gSpacePlot(dati_confronta[$(this).val()]);
                    });
                    var gSelectBlock = $("<div>").addClass("fesGraphSelector");
                    gSelectBlock.append($("<label>").html("Seleziona un periodo:"), gSelect);
                    gCont.append(gSpace, gSelectBlock);
                    // Funzione che riempie il grafico
                    var gSpacePlot = function(dataToPlot) {
                        gSpace.empty();
                        fesPlotGraph({
                            gType: "serial",
                            gData: dataToPlot,
                            gCategory: "chiave",
                            gIdDest: "grafico_confronta_space",
                            dataFormat: "",
                            gLines: [{
                                title: nomeValore1,
                                lineColor: "#548d4b",
                                valueField: "valore1"
                            }, {
                                title: nomeValore2,
                                lineColor: "#86b572",
                                valueField: "valore2"
                            }]
                        });
                    };
                    gSelect.trigger("change");
                    // Asset allocation
                    fesPlotGraph({
                        gType: "bar",
                        gData: data_asset1,
                        gCategory: "chiave",
                        gIdDest: "grafico_asset1",
                        colorfield: "color",
                        dataFormat: "%",
                        title: "Percentuale composizione",
                        valueField: "valore"
                    });
                    fesPlotGraph({
                        gType: "bar",
                        gData: data_asset2,
                        gCategory: "chiave",
                        gIdDest: "grafico_asset2",
                        colorfield: "color",
                        dataFormat: "%",
                        title: "Percentuale composizione",
                        valueField: "valore"
                    });
                }
                if (pageType !== "") {
                    fesConfCont.prepend('<div class="tithelp paddBottomSmall"><div class="flLeft"><a href="#!" class="fesBackRicerca" onclick="fesConfBack()">Torna a elenco</a></div><br class="clear"></div>');
                    fesConfCont.prepend($('<h2 class="titConf">').html($('.titRic').html().replace('Categoria BRating', 'Confronta categoria BRating')));
                    fesConfCont.append('<div class="fesSearchBottomBtns"><div class="fesConfBack fesSearchMore">Torna a elenco</div></div>');
                    $('.fesConfBack').click(fesConfBack);
                    $('.fes_cfr_socgeshelp, .fes_cfr_socgeshelp + span').hide();
                }
            },
            error: function() {
                alert("Errore caricamento dati confronta");
            }
        });
    } else {
        fesConfCont.empty();
        //Messaggio standard
        fesConfCont.append("<div class=\"filettoGenericoVerticale\"><div class=\"filettoGenericCorner\"><div class=\"paddMedium\"><div class=\"row-fluid msgSearch\"><div class=\"span6\"><p><strong>Non hai selezionato alcun fondo o sicav per il confronto!</strong></p><p>In questa pagina puoi <strong>confrontare due fondi</strong> o <strong>sicav</strong> tra loro. Seleziona i fondi che vuoi confrontare dalla pagina di &quot;<a href=\"#!\" id=\"switchFondo\">ricerca</a>&quot; </strong></p><p>Puoi anche selezionare un singolo fondo e confrontarlo con il <strong>migliore</strong> della sua <strong>categoria</strong>.</p></div><div class=\"span6\"><img src=\"/wscmn/img/ret/fes_screen_search.jpg \" /></div></div></div></div></div>");
        $('#switchFondo').click(function() {
            $('#tabRicerca').addClass('active');
            $("#fesRicercaCont").show();
            $('#fesConfrontaCont').hide();
        });
    }
}
// Inizializzazione con tab confronta
function fesConfStart(getData) {
    // Se arrivano dei dati dall'esterno, riutilizza quelli
    if (getData) fesConfSelected = getData.split("|");
    $(window).on("load", function() {
        $("#fesRicWrap ul.tabGeneric li").removeClass("active");
        fesConfShow();
        setConfButtonText();
    });
}
var wBest = false;
/* Avvia nuovo confronta */
function fesNewConf(getData, withBest) {
    wBest = withBest;
    fesConfSelected = getData.split("|");
    $("#fesRicWrap ul.tabGeneric li").removeClass("active");
    fesConfShow(getData);
    setConfButtonText();
}
var fesRicStarted = false;
/* INIZIALIZZAZIONE OGGETTI RICERCA */
function fesRicStart() {
    $(window).on("load", fesRicShow);
}

function fesConfBack() {
    if (pageType !== '') {
        fesResetConfCheckbox();
        $('#fesConfrontaCont').hide();
        $('#fesRicercaCont').show();
    }
}

function fesResetFilters() {
    $('.reset').each(function() {
        var fDiv = $(this).parent(".btnMultiSel"),
            fesInitStatusText = (fDiv.parents("#fesSearchLeftForm")[0]) ? fDiv.parent().find("label.nomefield").html() : "Seleziona...";
        fDiv.find("input").val("");
        fDiv.find("span").html(fesInitStatusText);
        fDiv.find("a").hide();
        // Resetta il filtro se in spalla sinistra
        if (fDiv.parent(".fesAdvFiltro").length) fDiv.parent(".fesAdvFiltro").removeClass("active");
    });
    $('#fesSearchTableSelect').val('sintesi');
}

function fesResetConfCheckbox() {
    fesTable.find("input[name=fesCheckConfronta]").attr("disabled", false).filter(":checked").attr("checked", false);
    fesConfSelected = [];
    $('#fesConfLink').html('<span id="fesConfNum">0</span> fondi selezionati per confronto');
}
var pageType;
// Appende le note legali
$(window).on("load", function() {
    var pageTypeEl = $("#pageType"), filters;
    pageType = pageTypeEl.length ? pageTypeEl.val() : "";
//    if (!is4s) {
//        if ($("#fesDisclaimer").length) {
//            $.ajax({
//                url: "/wscmn/html/fes_disclaimer.html?rand=" + Math.random(),
//                dataType: "html",
//                success: function(data) {
//                    var divNote = $("<div>");
//                    divNote.append($("<div>").addClass("filettoGenericoOrizzontale02"));
//                    divNote.append("<br>" + data);
//                    $("#fesDisclaimer").append(divNote);
//                }
//            });
//        }
//    }
    if (pageType !== '') {
        filters = $('.searchFilter').hide();
        $('.toggleFilter').click(function() {
            var toggleFilter = $(this);
            if (filters.is(':visible')) {
                filters.hide();
                toggleFilter.text('Mostra filtri avanzati').closest('p').css('padding-bottom', 0);
            } else {
                filters.show();
                toggleFilter.text('Nascondi filtri avanzati').closest('p').css('padding-bottom', 10);
            }
        });
        $('#fesConfLink').click(function() {
            if (fesConfSelected.length) {
                ttHide();
                fesConfShow();
            }
        });
    }
});
