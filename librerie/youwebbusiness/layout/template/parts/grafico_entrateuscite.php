<!-- Importazione assets per grafici -->
<!-- Script per gestione grafici -->
<script type="text/javascript" src="./fe/js/grafici.js"></script>
<link rel="stylesheet" href="./fe/css/grafici.css" />
<!-- Fine importazione assets per grafici -->
<script type="text/javascript">
    // Esempio di variabili in pagina
    var graficoEUwrapper,
    datasetGrafico;


    // Esempio di funzione che genera/rigenera il grafico in relazione agli elementi caricati da chiamata esterna
    var disegnaGrafico = function() {
        graficoEUwrapper.addClass("loading");
        $.ajax({
            url: "layout/template/ajax/grafico_entrateuscite.json",
            dataType: "json",
            success: function(data) {
                datasetGrafico = data.dati;
                // Parametrizzazione e rendering grafico
                Graph.plot({
                    graphtype: "histogram",
                    idcontainer: "graficoeu",
                    dataProvider: datasetGrafico,
                    categoryField: "giorno",
                    categoryAxis: {
                        classNameField: "classi"
                    },
                    valueAxis: {
                            labelFunction: function(val) {
                                return val + " \u20AC"
                            }
                        },
                    graphs: [ {
                            valueField: "entrate",
                            type: "column",
                            fillAlphas:1,
                            lineColor: "#2f9988",
                            balloonText: "[[value]] &euro;",
                            classNameField: "classi"
                        },
                        {
                            valueField: "uscite",
                            type: "column",
                            fillAlphas:1,
                            lineColor: "#c84757",
                            balloonText: "-[[value]] &euro;",
                            classNameField: "classi"
                        } ]
                });

                graficoEUwrapper.removeClass("loading");
            }
        })
        
    }
    
    
    // Esempio di interattivita' del grafico e degli elementi correlati
    $(function(){   

        // Inizializzazione degli oggetti
        graficoEUwrapper = $("#graficoEUwrapper")


        $("#bloccoFiltri button").click(function(){
            // Aggiorna dataset esistente coi filtri

            // Ridisegna il grafico
            disegnaGrafico();
        });

        //Disegna il grafico (se necessario)
        disegnaGrafico();

    });


</script>
<style>
    /* Colori */
    .bgcolor-entrate {background-color:#2f9988}
    .bgcolor-uscite {background-color:#c84757}

    /* Legenda */
    .legenda-voice {position:relative;width:auto; max-width:100%;padding-left:28px;}
    .legenda-voice .legenda-dot {width:18px;height:18px;border-radius:4px;position:absolute;left:0;top:2px;}
    .legenda-voice.big .legenda-dot {top:4px}
    .legenda-voice.big .legenda-label {font-size:18px;}

    /* Grandezze "dedicate" */
    .graph-total span.total {font-weight:bold;font-size:18px;display:block;}
    .graph-total span.sub {font-size:12px;clear:both; line-height:16px;display:block;color:#737373}

</style>
<div id="graficoEUwrapper" class="loading">
    <div class="row">
        <div class="col-sm-6 col-xs-12" id="bloccoFiltri">
            <button class="btn btn-filter fl-left is-selected" data-type="tutti">Tutti</button>
            <button class="btn btn-filter fl-left" data-type="uscite">Uscite</button>
            <button class="btn btn-filter fl-left" data-type="entrate">Entrate</button>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="legenda-voice big">
                        <div class="legenda-dot bgcolor-entrate"></div>
                        <div class="legenda-label">Entrate</div>
                    </div>
                    <span class="graph-total">
                        <span class="total">+203.321,33 &euro;</span>
                        <span class="sub">su un totale previsto di <br>+273.321,33 &euro;</span>
                    </span>
                </div>
                <div class="col-sm-6">
                    <div class="legenda-voice big">
                        <div class="legenda-dot bgcolor-uscite"></div>
                        <div class="legenda-label">Uscite</div>
                    </div>
                    <span class="graph-total">
                        <span class="total">+203.321,33 &euro;</span>
                        <span class="sub">su un totale previsto di <br>+273.321,33 &euro;</span>
                    </span>
                </div>
            </div>
        
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div id="graficoeu" class="graph-space"></div>
        </div>
    </div>
</div>