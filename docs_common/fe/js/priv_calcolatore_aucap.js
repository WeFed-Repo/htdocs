/* jshint strict:false */
/* globals $, isLib, cgi_script, ttHide, ttShow, IEfixPh, openPopOverLayer, isAgenzie:true,
    unsetLoadingOnObject, setLoadingOnObject */

var calcolatoriAucap, createCalcolatoreAucap, aucapJsonUrl, aucapJsonUrlAgenzie;

/* URL */
if (typeof cgi_script != "undefined") {
    aucapJsonUrl = (!isLib) ? cgi_script + "/FMP/aucap/recuperoDirittiAucap.jsp" : "/wscmn/xml/spnjsonresp.php";
}
aucapJsonUrlAgenzie = (!isLib) ? "/pub/xbank/common/getCalcolatoreAucap.jsp" : "/wscmn/xml/spnjsonresp.php";

/* CALCOLATORE AUCAP */
calcolatoriAucap = {};
createCalcolatoreAucap = function (numUnivoco) {

    return (function (numUnivoco) {
        var auc_title, auc_overlay_title, auc_deposito, auc_prezzodiritto, auc_tipDir,
            auc_rappSott, auc_minDir, auc_dirPoss, auc_prezzoSott, auc_prezzoDirAgenzie,
            auc_dirAgenzie, auc_dirEserc, auc_titRive, auc_dirAcq, auc_dirVend, auc_controDir,
            auc_controConsu, auc_controAucap, auc_timeAggiornamento, auc_lastFieldCalcola,
            auc2_lastFieldCalcola, auc2_controInve, auc2_titRive, auc2_dirAcq, auc2_controDir,
            auc2_controAucap, aucap_dirittiPosseduti, aucap_qDiritti, aucap_qAzioni, aucap_prezzoDiritto,
            aucap_prezzoSottoscrizione, aucap2_controInve, aucap2_titrive, aucap_minimoDiritti,
            aucap_jsonvars, aucapButtonShow;

        /* Formattazione migliaia */
        function formattaMigliaia(valore) {
            var x;
            if (valore) {
                valore = parseInt(valore).toString();
                var valoreArr = valore.split("");
                valore = "";
                for (x = 0; x < valoreArr.length; x++) {
                    if (((x) % 3) === 0 && x !== 0) {
                        valore = "." + valore;
                    }
                    valore = valoreArr[valoreArr.length - x - 1] + valore;
                }
                if (valore.length === 0) valore = "0";
            } else {
                valore = "0";
            }
            return valore;
        }
        /* Formattazione Euro */
        function formattaEuro(valuta) {
            var formattaValuta = "", x;
            if (valuta > 0) {
                formattaValuta = Math.round(((valuta) * 100)).toString();
                for (x = 0; x < 3 - formattaValuta.length; x++) formattaValuta = "0" + formattaValuta;
                var formattaValDec = formattaValuta.substring(formattaValuta.length - 2, formattaValuta.length);
                var formattaValInt = formattaMigliaia(formattaValuta.substring(0, formattaValuta.length - 2));
                formattaValuta = formattaValInt + "," + formattaValDec;
            } else {
                formattaValuta = "0";
            }
            return formattaValuta + " &euro;";
        }

        function formattaPrezzoAg(valuta) {
            var formattaValuta = "", x;
            if (valuta > 0) {
                formattaValuta = Math.round((valuta * 10000)).toString();
                var quantiZeri = 4 - formattaValuta.length;
                for (x = 0; x < quantiZeri; x++) {
                    //Mette gli zeri necessari ad arrivare a 4 cifre
                    formattaValuta = "0" + formattaValuta;
                }
                var formattaValDec = formattaValuta.substring(formattaValuta.length - 4, formattaValuta.length);
                var formattaValInt = formattaValuta.substring(0, formattaValuta.length - 4);
                var formattaValIntArr = formattaValInt.split("");
                formattaValInt = "";
                for (x = 0; x < formattaValIntArr.length; x++) {
                    if (((x) % 3) === 0 && x !== 0) {
                        formattaValInt = "." + formattaValInt;
                    }
                    formattaValInt = formattaValIntArr[formattaValIntArr.length - x - 1] + formattaValInt;
                }
                if (formattaValInt.length === 0) formattaValInt = "0";
                formattaValuta = formattaValInt + "," + formattaValDec;
            } else {
                formattaValuta = "0";
            }
            return formattaValuta + " &euro;";
        }
        /* Filtraggio in input numeri interi */
        function checkIntero(campo) {
            campo = $(campo);
            var stringaPassa = "01234567789";
            var valoreSplit = parseInt(campo.val()).toString().split("");
            var valoreFiltrato = "";
            var x;
            for (x = 0; x < valoreSplit.length; x++) {
                if (stringaPassa.indexOf(valoreSplit[x]) >= 0) {
                    valoreFiltrato = valoreFiltrato + valoreSplit[x];
                }
            }
            campo.val(valoreFiltrato);
        }

        function checkMultiplo(campo, multiplo) {
            ttHide();
            campo = $(campo);
            //campo.removeAttr("data-tooltip");
            campo.removeAttr("data-toggle");
            var ttToShow = "";
            var valore = parseInt(campo.val());
            if ((valore % multiplo) !== 0) {
                //raddrizza il valore "per difetto"
                while (valore % multiplo !== 0) {
                    valore = valore - 1;
                }
                ttToShow = "Quantit&agrave; arrotondata per difetto al multiplo dei " + ((campo.attr("id") == "aucap_dirEserc") ? "diritti" : "titoli") + " minimi";
            }
            if (valore === 0) {
                valore = multiplo;
                ttToShow = "Quantit&agrave; arrotondata per eccesso al minimo dei " + ((campo.attr("id") == "aucap_dirEserc") ? "diritti" : "titoli");
            }
            campo.val(valore);
            if (ttToShow !== "") {
                //campo.attr("data-tooltip", ttToShow);
                //ttShow(null, campo);
                campo.attr("data-toggle", 'tooltip').attr('data-title',ttToShow);
                initTooltip();
                setTimeout(function(){campo.focusin();},10)

            }
        }

        function checkCampoPlusMin(campo) {
            checkIntero($(campo));
        }
        /* Aggiorna dai diritti */
        function aucapAggiornaDiritti() {
            if (auc_dirAgenzie.val() === "") {
                aucap_dirittiPosseduti = 0;
                auc_dirEserc.val("");
            } else {
                auc_dirEserc.val(parseInt(auc_dirAgenzie.val()));
                aucap_dirittiPosseduti = parseInt(auc_dirAgenzie.val());
            }
            aucapResetFields(auc_dirEserc);
        }

        function aucapResetFields(campo) {
            campo = $(campo);
            auc_lastFieldCalcola = campo.attr("id");
            auc2_lastFieldCalcola = campo.attr("id");
        }
        /* Funzioni del + e del -*/
        function plusMin(tipo, dir) {
            var campo, amount;
            if (tipo === 'diritti') {
                campo = auc_dirEserc;
                amount = aucap_qDiritti;
            } else { /* 'titoli' */
                campo = auc_titRive;
                amount = aucap_qAzioni;
            }

            ttHide();
            //campo.removeAttr("data-tooltip");
            campo.removeAttr("data-toggle");
            campo.attr("style", "");
            auc_lastFieldCalcola = campo.attr("id");
            if (campo.val() === "" || campo.val() === campo.attr("placeholder")) {
                campo.val(0);
            }
            aucapResetFields(campo);
            var valore = parseInt(campo.val());
            if (dir == "plus") {
                valore = valore + amount;
            } else {
                valore = valore - amount;
                if (valore < 0) {
                    valore = 0;
                }
            }
            campo.val(valore);
            if (campo == auc_dirEserc) {
                checkMultiplo(campo, aucap_qDiritti, true);
            } else if (campo == auc_titRive || campo == auc2_titRive) {
                checkMultiplo(campo, aucap_qAzioni, true);
            }
        }
        /* Esegue i calcoli leggendo i dati utente ed aggiornando i dati di conseguenza */
        function aucapCalcola() {
            /* Controlla eventuali anomalie */
            if (auc_lastFieldCalcola == "aucap_dirEserc_" + numUnivoco) {
                // Aggiorna i titoli rivenienti
                if (auc_dirEserc.val() === "" || auc_dirEserc.val() == "inserisci un valore") auc_dirEserc.val(0);
                checkMultiplo(auc_dirEserc, aucap_qDiritti);
                aucapAggiornaRiv();
            } else {
                if (auc_titRive.val() === "" || auc_titRive.val() == "inserisci un valore") auc_titRive.val(0);
                checkMultiplo(auc_titRive, aucap_qAzioni);
                // Aggiorna i diritti da esercitare
                aucapAggiornaEse();
            }
            auc_titRive.attr("style", "");
            auc_dirEserc.attr("style", "");
            if (auc_dirAgenzie.length) {
                if (auc_dirAgenzie.val() === "") auc_dirAgenzie.val(0);
            }
            if (auc_dirEserc.val() === "") auc_dirEserc.val(0);
            if (auc_titRive.val() === "") auc_titRive.val(0);
            //  Aggiorna i valori tramite l'immissione dell'utente
            var aucap_dirittiEsercitati = parseInt(auc_dirEserc.val());
            var aucap_titoliRivenienti = parseInt(auc_titRive.val());
            var auc_dirittiAcquistare = ((aucap_dirittiEsercitati - aucap_dirittiPosseduti) > 0) ? (aucap_dirittiEsercitati - aucap_dirittiPosseduti) : 0;
            auc_dirAcq.html(formattaMigliaia(auc_dirittiAcquistare));
            var auc_dirVendHtml = ((aucap_dirittiEsercitati - aucap_dirittiPosseduti) < 0) ? formattaMigliaia((aucap_dirittiEsercitati - aucap_dirittiPosseduti) * (-1)) : 0;
            auc_dirVend.html(auc_dirVendHtml);
            auc_controDir.html(formattaEuro(auc_dirittiAcquistare * aucap_prezzoDiritto));
            auc_controAucap.html(formattaEuro(aucap_titoliRivenienti * aucap_prezzoSottoscrizione));
            if (auc_controConsu.length) {
                if (auc_dirittiAcquistare < aucap_qDiritti) {
                    auc_controConsu.html(formattaEuro(auc_dirittiAcquistare * aucap_prezzoDiritto));
                } else {
                    auc_controConsu.html(formattaEuro((auc_dirittiAcquistare * aucap_prezzoDiritto) + ((aucap_qAzioni * (aucap_qDiritti * arrotondaDifetto(auc_dirittiAcquistare / aucap_qDiritti))) / aucap_qDiritti) * aucap_prezzoSottoscrizione));
                }
            }
        }

        function aucapCalcola2() {
            /* Controlla eventuali anomalie */
            if (auc2_lastFieldCalcola == "aucap2_controInve_" + numUnivoco) {
                // Aggiorna i titoli rivenienti
                if (auc2_controInve.val() === "" || auc2_controInve.val() == "inserisci un valore") auc2_controInve.val(0);
                //checkMultiplo(auc2_controInve, 100);
                aucapAggiornaRiv2();
                aucapAggiornaControInve();
            } else {
                if (auc2_titRive.val() === "" || auc2_titRive.val() == "inserisci un valore") auc2_titRive.val(0);
                checkMultiplo(auc2_titRive, aucap_qAzioni);
                // Aggiorna i diritti da esercitare
                aucapAggiornaControInve();
            }
            auc2_controInve.attr("style", "");
            auc2_titRive.attr("style", "");
            aucap2_controInve = parseInt(auc2_controInve.val());
            aucap2_titrive = parseInt(auc2_titRive.val());
            var aucap2_dirAcqu = parseInt(aucap2_titrive / (aucap_qAzioni / aucap_qDiritti));
            auc2_dirAcq.html(formattaMigliaia(aucap2_dirAcqu));
            auc2_controDir.html(formattaEuro(aucap2_dirAcqu * aucap_prezzoDiritto));
            auc2_controAucap.html(formattaEuro(aucap2_titrive * aucap_prezzoSottoscrizione));
        }
        // Aggiornamento reciproco campi
        function aucapAggiornaRiv() {
            var aucap_titRive = Math.round((aucap_qAzioni * auc_dirEserc.val()) / aucap_minimoDiritti);
            auc_titRive.val(aucap_titRive);
        }

        function aucapAggiornaEse() {
            var aucap_dirEserc = Math.round((aucap_qDiritti * auc_titRive.val()) / aucap_qAzioni);
            auc_dirEserc.val(aucap_dirEserc);
        }

        function aucapAggiornaRiv2() {
            aucap2_titrive = Math.round(parseInt(auc2_controInve.val()) / (aucap_prezzoSottoscrizione + (aucap_prezzoDiritto / (aucap_qAzioni / aucap_qDiritti))));
            auc2_titRive.val(aucap2_titrive);
            checkMultiplo(auc2_titRive, aucap_qAzioni);
        }

        function aucapAggiornaControInve() {
            aucap2_controInve = Math.round(parseInt(auc2_titRive.val()) * (aucap_prezzoSottoscrizione + (aucap_prezzoDiritto / (aucap_qAzioni / aucap_qDiritti))));
            auc2_controInve.val(aucap2_controInve);
        }
        /* Arrotonda per difetto */
        function arrotondaDifetto(valore) {
            var valoreTesto = Math.round(valore * 100) + "";
            if (valoreTesto === 0) {
                return 0;
            } else {
                return parseInt(valoreTesto.substring(0, valoreTesto.length - 2));
            }
        }
        /* Aggiorna solo il prezzo e i campi da esso derivati */
        function aucapRefreshPrice() {
            aucap_jsonvars = "?aucap_tipoDiritto=" + auc_tipDir.val();
            // Chiocciola per bloccare l'interfaccia
            unsetLoadingOnObject("aucap_aggiornabile");
            setLoadingOnObject("aucap_aggiornabile");
            $.ajax({
                url: aucapJsonUrlAgenzie + aucap_jsonvars,
                dataType: "json",
                success: function(data) {
                    /* Dati ricevuti dal backend via Json*/
                    aucap_prezzoDiritto = data.aucap_prezzoDiritto;
                    auc_timeAggiornamento.html(data.aucap_aggiornamentoPrezzoDiritto);
                    auc_prezzoDirAgenzie.html(formattaPrezzoAg(aucap_prezzoDiritto));
                    aucapResetFields();
                    unsetLoadingOnObject("aucap_aggiornabile_" + numUnivoco);
                }
            });
        }

        function getCalcolatoreAgenzieValues() {
            //Assembla la stringa da inviare, eventualmente considerando quanto necessario
            aucap_jsonvars = "?aucap_tipoDiritto=" + auc_tipDir.val();
            //Se esiste, invia il deposito (es: non funziona in caso di agenzie
            //Variabile random per garantire aggiornamento
            aucap_jsonvars = aucap_jsonvars + "&aucap_rand=" + Math.random();
            //Interrogazione del backend
            $.ajax({
                url: aucapJsonUrlAgenzie + aucap_jsonvars,
                dataType: "json",
                success: function(data) {
                    /* Dati ricevuti dal backend via Json*/
                    aucap_qAzioni = data.aucap_qAzioni;
                    aucap_qDiritti = data.aucap_qDiritti;
                    aucap_minimoDiritti = data.aucap_qDiritti;
                    aucap_prezzoDiritto = data.aucap_prezzoDiritto;
                    aucap_prezzoSottoscrizione = data.aucap_prezzoSottoscrizione;
                    /* Resetta l'interfaccia */
                    aucap_dirittiPosseduti = 0;
                    auc_dirAgenzie.val("");
                    auc_dirEserc.val("");
                    auc_titRive.val("");
                    auc_dirAcq.html("");
                    auc_controDir.html("");
                    if (auc_controConsu) auc_controConsu.html("");
                    auc_controAucap.html("");
                    /* aggiorna il front-end in base ai dati ricevuti*/
                    auc_rappSott.html(aucap_qAzioni + " azioni / " + aucap_qDiritti + " diritti");
                    auc_minDir.html(aucap_minimoDiritti + " diritti");
                    auc_prezzoSott.html(formattaEuro(aucap_prezzoSottoscrizione));
                    if (auc_timeAggiornamento) {
                        auc_timeAggiornamento.html(data.aucap_aggiornamentoPrezzoDiritto);
                    }
                    if (auc_prezzoDirAgenzie.length) {
                        auc_prezzoDirAgenzie.html(formattaPrezzoAg(aucap_prezzoDiritto));
                    }
                    auc2_controInve.val("");
                    auc2_titRive.val("");
                    auc2_dirAcq.html("");
                    auc2_controDir.html("");
                    auc2_controAucap.html("");
                    //unsetLoadingOnObject ("aucap_aggiornabile");
                }
            });
        }
        /* Aggiorna i valori del calcolatore da backend*/
        function getCalcolatoreValues() {
            var auc_cgi = "";
            auc_cgi = $("#aucap_cgi_" + numUnivoco).val();
            var auc_codDirittoAz = $("#aucap_codDirittoAz_" + numUnivoco);
            var auc_codOperazioneAz = $("#aucap_codOperazioneAz_" + numUnivoco);
            var auc_codDirittoOb = $("#aucap_codDirittoOb_" + numUnivoco);
            var auc_codOperazioneOb = $("#aucap_codOperazioneOb_" + numUnivoco);
            // Mostra o nascondi bottoni
            if (aucapButtonShow) {
                $("#aucapAcquista_" + numUnivoco).show();
                $("#aucapAcquistaDis_" + numUnivoco).hide();
            } else {
                $("#aucapAcquista_" + numUnivoco).hide();
                $("#aucapAcquistaDis_" + numUnivoco).show();
            }
            //Assembla la stringa da inviare, eventualmente considerando quanto necessario
            aucap_jsonvars = "?aucap_tipoDiritto=" + auc_tipDir.val();
            //Se esiste, invia il deposito (es: non funziona in caso di agenzie
            if (auc_deposito) {
                aucap_jsonvars = aucap_jsonvars + "&aucap_deposito=" + auc_deposito.val();
            } else {
                aucap_jsonvars = aucap_jsonvars + "&aucap_deposito=noDeposit";
            }
            aucap_jsonvars = aucap_jsonvars + "&aucap_codDirittoAz=" + auc_codDirittoAz.val();
            aucap_jsonvars = aucap_jsonvars + "&aucap_codOperazioneAz=" + auc_codOperazioneAz.val();
            aucap_jsonvars = aucap_jsonvars + "&aucap_codDirittoOb=" + auc_codDirittoOb.val();
            aucap_jsonvars = aucap_jsonvars + "&aucap_codOperazioneOb=" + auc_codOperazioneOb.val();
            aucap_jsonvars = aucap_jsonvars + "&codiceaucap=" + numUnivoco;
            //Variabile random per garantire aggiornamento
            aucap_jsonvars = aucap_jsonvars + "&aucap_rand=" + Math.random();
            //Chiocciola per bloccare l'interfaccia
            unsetLoadingOnObject("aucap_aggiornabile_" + numUnivoco);
            setLoadingOnObject("aucap_aggiornabile_" + numUnivoco);
            //Interrogazione del backend
            $.ajax({
                url: aucapJsonUrl + aucap_jsonvars,
                dataType: "json",
                success: function(data) {
                    /* Dati ricevuti dal backend via Json*/
                    aucap_qAzioni = data.aucap_qAzioni;
                    aucap_qDiritti = data.aucap_qDiritti;
                    aucap_minimoDiritti = data.aucap_qDiritti;
                    aucap_prezzoDiritto = data.aucap_prezzoDiritto;
                    aucap_prezzoSottoscrizione = data.aucap_prezzoSottoscrizione;
                    aucap_dirittiPosseduti = data.aucap_dirittiPosseduti;
                    auc_title.html(data.aucap_title);
                    auc_overlay_title.html(data.aucap_title_scheda);
                    $("#aucap_codiceDiritto_" + numUnivoco).val(data.aucap_codiceDiritto);
                    $("#aucap_paese_" + numUnivoco).val(data.aucap_paese);
                    $("#aucap_piazza_" + numUnivoco).val(data.aucap_piazza);
                    $("#aucap_isin_" + numUnivoco).val(data.aucap_isin);
                    $("#aucap_stock_code_" + numUnivoco).val(data.aucap_stock_code);
                    $("#aucap_simbolo_" + numUnivoco).val(data.aucap_simbolo);
                    $("#aucap_borsa_" + numUnivoco).val(data.aucap_borsa);
                    $("#aucap_mercato_" + numUnivoco).val(data.aucap_mercato);
                    // Resetta i dati per il passaggio tra i tab
                    auc_titRive.val("");
                    auc_dirAcq.html("");
                    auc_controDir.html("");
                    auc_controAucap.html("");
                    /* aggiorna il front-end in base ai dati ricevuti*/
                    auc_rappSott.html(aucap_qAzioni + " azioni / " + aucap_qDiritti + " diritti");
                    auc_minDir.html(aucap_minimoDiritti + " diritti");
                    auc_prezzoSott.html(formattaEuro(aucap_prezzoSottoscrizione));
                    if (auc_timeAggiornamento) {
                        auc_timeAggiornamento.html(data.aucap_aggiornamentoPrezzoDiritto);
                    }
                    if (auc_prezzoDirAgenzie.length) {
                        auc_prezzoDirAgenzie.html(aucap_prezzoDiritto);
                    }
                    // Valori da inizializzare solo per la parte privata
                    auc_dirPoss.html(aucap_dirittiPosseduti);
                    // Setta il valore al campo diritti da esercitare e parte con i calcoli
                    auc_dirEserc.val(Math.floor(aucap_dirittiPosseduti / aucap_minimoDiritti) * aucap_minimoDiritti);
                    if (auc_dirEserc.val() == "0") auc_dirEserc.val(aucap_minimoDiritti);
                    aucapCalcola();
                    unsetLoadingOnObject("aucap_aggiornabile_" + numUnivoco);
                    IEfixPh();
                }
            });
        }
        /* Funzione che switcha i tab */
        /*
        function aucapTabSwitch(tab,tabvalore)
        {
            newTabSelected(tab);
            auc_tipDir.val(tabvalore);
            getCalcolatoreValues();
        }
        */
        /* Inizializzazione calcolatore */
        function initCalcolatoreAucap() {
            // Assegnazione campi
            auc_title = $("#aucap_title_" + numUnivoco);
            auc_overlay_title = $("#overlay_title_" + numUnivoco);
            auc_deposito = $("#aucap_deposito_" + numUnivoco);
            auc_prezzodiritto = $("#aucap_prezzodir_" + numUnivoco);
            auc_tipDir = $("#aucap_tipDir_" + numUnivoco);
            auc_rappSott = $("#aucap_rappSott_" + numUnivoco);
            auc_minDir = $("#aucap_minDir_" + numUnivoco);
            auc_dirPoss = $("#aucap_dirPoss_" + numUnivoco);
            auc_prezzoSott = $("#aucap_prezzoSott_" + numUnivoco);
            auc_prezzoDirAgenzie = $("#aucap_prezzoDirAgenzie_" + numUnivoco);
            auc_dirAgenzie = $("#dirittiPosseduti_" + numUnivoco);
            auc_dirEserc = $("#aucap_dirEserc_" + numUnivoco);
            auc_titRive = $("#aucap_titRive_" + numUnivoco);
            auc_dirAcq = $("#aucap_dirAcq_" + numUnivoco);
            auc_dirVend = $("#aucap_dirVend_" + numUnivoco);
            auc_controDir = $("#aucap_controDir_" + numUnivoco);
            auc_controConsu = $("#aucap_controConsu_" + numUnivoco);
            auc_controAucap = $("#aucap_controAucap_" + numUnivoco);
            auc_timeAggiornamento = $("#timeAggiornamento_" + numUnivoco);
            // Creazione oggetti generici
            auc_lastFieldCalcola = "aucap_dirEserc_" + numUnivoco;
            auc2_lastFieldCalcola = "aucap2_controInve_" + numUnivoco;
            // Campi per calcolatore agenzie
            auc2_controInve = $("#aucap2_controInve_" + numUnivoco);
            auc2_titRive = $("#aucap2_titRive_" + numUnivoco);
            auc2_dirAcq = $("#aucap2_dirAcq_" + numUnivoco);
            auc2_controDir = $("#aucap2_controDir_" + numUnivoco);
            auc2_controAucap = $("#aucap2_controAucap_" + numUnivoco);
        }

        /* Funzione che apre il calcolatore */
        function openAucap(aucapTrattabili) {
            aucapButtonShow = aucapTrattabili;
            //openPopOverLayer("layeralertAucap_" + numUnivoco);
            $('#layeralertAucap_00005284030').modal('show');
            
            if (auc2_controInve.length) {
                getCalcolatoreAgenzieValues();
            } else {
                getCalcolatoreValues();
            }
        }

        initCalcolatoreAucap();

        if (isAgenzie) {
            // Pulsante di aggiornamento 
            $("#aucap_aggiornaDatiAgenzie_" + numUnivoco).click(getCalcolatoreAgenzieValues);
            getCalcolatoreAgenzieValues();
        }

        return {
            // Properties
            auc_deposito: auc_deposito,

            // Methods
            checkCampoPlusMin: checkCampoPlusMin,
            aucapAggiornaDiritti: aucapAggiornaDiritti,
            plusMin: plusMin,
            aucapCalcola: aucapCalcola,
            aucapCalcola2: aucapCalcola2,
            aucapRefreshPrice: aucapRefreshPrice,
            openAucap: openAucap,
            getCalcolatoreValues: getCalcolatoreValues,
            aucapResetFields: aucapResetFields
        };
    }(numUnivoco));
};

/* Inizializzazione calcolatore */
$(function() {
    if (typeof isAgenzie === "undefined") {
        isAgenzie = false;
    }
    $('.aucap_wrap').each(function () {
        var calcolatoreAucap = $(this),
            numUnivoco = calcolatoreAucap.attr('id').replace('aucap_', '');
        calcolatoriAucap[numUnivoco] = createCalcolatoreAucap(numUnivoco);
    });
});