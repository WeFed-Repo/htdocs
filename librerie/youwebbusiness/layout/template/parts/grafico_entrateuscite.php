<!-- Importazione assets per grafici -->
<!-- Script per gestione grafici -->
<script type="text/javascript" src="./fe/js/grafici.js"></script>
<link rel="stylesheet" href="./fe/css/grafici.css" />
<!-- Fine importazione assets per grafici -->
<script type="text/javascript">
    // Esempio di variabili in pagina
    var graficoEUwrapper,
    datasetGrafico,
    actfilter = "tutti";

    // Esempio di funzione per formattazione dei numeri
    var formatValue =  function (value, ndecimali) {
            var fvalue = "";
            if (!isNaN(value)) {
                var ndec = (ndecimali) ? ndecimali : 2;
                var decmulti = Math.pow(10, ndec);
                var value = Math.round(value * decmulti) / decmulti;
                var fvalueArr = value.toString().split(".");

                // Formatta l'intero
                fvalue = fvalueArr[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                // Aggiunge, se presenti, i decimali
                if (fvalueArr[1]) {
                    fvalue += ("," + fvalueArr[1]);
                }
            }

            return fvalue;
    }

    // Esempio di funzione che genera/rigenera il grafico in relazione agli elementi caricati da chiamata esterna
    var disegnaGrafico = function() {
        graficoEUwrapper.addClass("loading");
        $.ajax({
            url: "layout/template/ajax/grafico_entrateuscite.json",
            dataType: "json",
            success: function(data) {
                datasetGrafico = data.dati;

                // Modifica la view per il rendering;

                // Parametrizzazione e rendering grafico
                Graph.plot({
                    graphtype: "histogram",
                    idcontainer: "graficoeu",
                    dataProvider: datasetGrafico,
                    addClassNames : true,
                    categoryField: "giorno",
                    categoryAxis: {
                        classNameField: "classi"
                    },
                    valueAxis: {
                            labelFunction: function(val) {
                                return ( formatValue(val,2) + " \u20AC")
                            }
                        },
                    graphs: [ {
                            id: "entrate", // Serve per mettere la classe amcharts-graph-entrate
                            valueField: "entrate",
                            type: "column",
                            fillAlphas:1,
                            lineColor: "#2f9988",
                            balloonText: "[[value]] &euro;",
                            classNameField: "classi"
                        },
                        {
                            id: "uscite",
                            valueField: "uscite", // Serve per mettere la classe amcharts-graph-uscite
                            type: "column",
                            fillAlphas:1,
                            lineColor: "#c84757",
                            balloonText:  "-[[value]] &euro;",
                            classNameField: "classi"
                        } ],

                    // Navigatore con freccette (opzionale - inserire solo se necessario)
                    categoryNavigator : {
                        prev: {
                            disabled: true, // Esempio freccetta disabilitata
                            handler: function(){
                                var bt = $(this);
                                // Replot del grafico con dati differenti (l'alterazione dei dati per il cambio del periodo visibile va messa in questa funzione)
                                if (!bt.hasClass("disabled")) disegnaGrafico();
                            } 
                        },
                        next: {
                            handler: function(){
                                // Replot del grafico con dati differenti (l'alterazione dei dati per il cambio del periodo visibile va messa in questa funzione)
                                var bt = $(this);
                                if (!bt.hasClass("disabled")) disegnaGrafico();
                            }
                        }
                    }
                });

                graficoEUwrapper.removeClass("loading");
            }
        })
        
    }
    
    
    // Esempio di interattivita' del grafico e degli elementi correlati
    $(function(){   

        // Inizializzazione degli oggetti
        graficoEUwrapper = $("#graficoEUwrapper");

        $("#bloccoFiltri button").click(function(){
            // Reset dei pulsanti ed "evidenza" di quello "corrente"
            $("#bloccoFiltri button").removeClass("is-selected");

            // Aggiorna dataset esistente coi filtri (esempio)
            var btn = $(this).addClass("is-selected");
            actfilter = btn.attr("data-type");
            graficoEUwrapper.removeClass("entrate uscite tutti").addClass(actfilter);
            
            // Replot del grafico filtrato
            disegnaGrafico();
        });

        //Disegna il grafico (se necessario)
        disegnaGrafico();

    });
</script>

<div id="graficoEUwrapper" class="tutti loading">
    <div class="row">
        <div class="col-sm-6 col-xs-12 graph-filter-wrapper" id="bloccoFiltri">
            <button class="btn btn-filter fl-left is-selected" data-type="tutti">Tutti</button>
            <button class="btn btn-filter fl-left" data-type="entrate">Entrate</button>
            <button class="btn btn-filter fl-left" data-type="uscite">Uscite</button>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-sm-6">
                    <div id="legEntrate">
                        <div class="legenda-voice big">
                            <div class="legenda-dot bgcolor-entrate"></div>
                            <div class="legenda-label">Entrate</div>
                        </div>
                        <span class="graph-total">
                            <span class="total">+203.321,33 &euro;</span>
                            <span class="sub">su un totale previsto di <br>+273.321,33 &euro;</span>
                        </span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="legUscite">
                        <div class="legenda-voice big">
                            <div class="legenda-dot bgcolor-uscite"></div>
                            <div class="legenda-label">Uscite</div>
                        </div>
                        <span class="graph-total">
                            <span class="total">-203.321,33 &euro;</span>
                            <span class="sub">su un totale previsto di <br>-273.321,33 &euro;</span>
                        </span>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- Componente opzionale switch vista integrale -->
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="form-check checkbox switch graph-view-switch fl-right">
                <input class="form-check-input" type="checkbox" id="checkSwitch" name="checkSwitch" onchange="disegnaGrafico();">
                <label class="form-check-label" for="checkSwitch">Vista integrale</label>
            </div>
        </div>
    </div>
     <!-- Fine componente opzionale switch vista integrale -->
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <!-- Wrapper del grafico -->
            <div id="graficoeu" class="graph-space"></div>
            <!-- Fie wrapper del grafico -->
        </div>
    </div>
</div>