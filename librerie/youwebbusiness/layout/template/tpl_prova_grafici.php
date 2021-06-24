<!-- Importazione assets per grafici -->
<!-- Script per gestione grafici -->
<script type="text/javascript" src="./fe/js/grafici.js"></script>


<!-- Fine importazione assets per grafici -->
<link rel="stylesheet" href="./fe/css/grafici.css" />

<section>
    <h2>Movimenti</h2>
    <div class="bordered">
        <!-- Istogramma lineare con 2 colonne -->
        <div id="istogrammaEntrateUscite" class="graph-space"></div>
        <script type="text/javascript">
        // Dataset del grafico
        var iodata = [
            <?php 
            $today = rand(12,18);
            
            for ($x=1;$x<=31;$x++){ 
                if ($x>1) print ",";  
                ?>
                {
                    "giorno":<?php print $x; ?>,
                    "entrate": <?php print rand(0,250000)/100; ?>,
                    "uscite":<?php print rand(0,250000)/100; ?>,
                    "classi": "<?php print($x== $today? "selected": "")." ".($x > $today ? "previsione": ""); ?>"
                }
            <?php 
            }
            ?>
        ];

        // Rendering del dataset
        
        Graph.plot({
            graphtype: "histogram",
            idcontainer: "istogrammaEntrateUscite",
            dataProvider: iodata,
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
        </script>
        <!-- Fine istogramma lineare con 2 colonne -->
    </div>
</section>

<section>
    <h2>Pile</h2>
    <div class="bordered">
        <div id="istogrammaPile" class="graph-space"></div>
        <script type="text/javascript">
        // Esempio variabile complementare (mesi dell'anno in lingua)
        var mesi = ["Gen", "Feb", "Mar", "Apr","Mag","Giu","Lug","Ago","Set","Ott","Nov","Dic"]
        
        // Dataset del grafico
        var piledata = [
            <?php for ($x=1;$x<=12;$x++){ 
            if ($x>1) print ",";    
                ?>
                {
                    "mese": new Date(2020, <?php print $x-1 ?>, 1),
                    "incassate":<?php print rand(0,250000)/100;; ?>,
                    "inscadenza": <?php print rand(0,250000)/100; ?>,
                    "scadute":<?php print rand(0,250000)/100; ?>
                }
            <?php 
            }
            ?>
        ];

        // Rendering del grafico a "pile"
        Graph.plot({
            graphtype: "piles",
            idcontainer: "istogrammaPile",
            dataProvider: piledata,
            categoryField: "mese",
            categoryAxis: {
                labelFunction: function(category){
                var mesedata = new Date(category);
                return mesi[mesedata.getMonth()] + " " + mesedata.getFullYear();
                }
            },
            valueAxis: {
                labelFunction: function(val) {
                    return val + " \u20AC"
                }
            },
            graphs: [ {
            valueField: "incassate",
            type: "column",
            fillAlphas:1,
            lineColor: "#2f9988",
            balloonText: "[[value]] &euro;"
        },
        {
            valueField: "inscadenza",
            type: "column",
            fillAlphas:1,
            lineColor: "#f6cf49",
            balloonText: "[[value]] &euro;"
        },
        {
            valueField: "scadute",
            type: "column",
            fillAlphas:1,
            lineColor: "#7d48aa",
            balloonText: "[[value]] &euro;"
        }
        ]
        });

        </script>
    </div>
</section>

<section>
    <h2>Donut</h2>
    <div class="bordered">
        <div id="donut" class="graph-space graph-space-donut"></div>
        <script type="text/javascript">
            var donutData = [
                {
                    "label": "Fornitori",
                    "value": 1233.51,
                    "color": "#8fc7ff"
                },
                {
                    "label": "Operazioni finanziarie",
                    "value": 533.51,
                    "color": "#5094ff"
                },
                
                {
                    "label": "Risorse umane",
                    "value": 238,
                    "color": "#186bee"
                },
                
                {
                    "label": "Ricavi",
                    "value": 40,
                    "color": "#003cac"
                },
                
                {
                    "label": "Servizi",
                    "value": 91.17,
                    "color": "#45d9c4"
                }
            ]
        </script>
        <script type="text/javascript">

        Graph.plot({
            idcontainer: "donut",
            graphtype: "donut",
            dataProvider: donutData,
            titleField  : "label",
            valueField  : "value",
            colorField: "color",
            donutLabel: {
                title: "Totale uscite",
                value: "25.003,36 &euro;"
            }
        });

        </script>
    </div>
</section>
