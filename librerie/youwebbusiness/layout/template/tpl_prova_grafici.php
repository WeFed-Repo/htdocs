<!-- Importazione assets per grafici -->
<script type="text/javascript" src="./fe/assets/amcharts/amcharts.js"></script>
<script type="text/javascript" src="./fe/assets/amcharts/serial.js"></script>
<script type="text/javascript" src="./fe/assets/amcharts/pie.js"></script>

<!-- Fine importazione assets per grafici -->
<style>
/* Css dei grafici */
.graph-space {height:250px; width:100%;display:block;}
.graph-space-donut {height:250px; width:250px;max-width:100%; margin:0 auto 13px;position:relative}
.graph-space-donut .donut-title {display: flex;
    line-height: 22px;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    text-align: center;
    left: 0;
    align-content: center;
    flex-direction: column;
    justify-content: center;
    font-size:18px;
    font-weight:bold;
    color:#999}
    .graph-space-donut .donut-title .value {
        font-size:22px;
        color:#333;
    }
/* Classi per trasformare i dati visualizzati  */
.graph-space .amcharts-axis-label.selected {font-weight:bold;fill:#097562;}
.graph-space .amcharts-graph-column.previsione {opacity:0.2}
</style>

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
        AmCharts.makeChart( "istogrammaEntrateUscite", {
        type: "serial",
        dataProvider: iodata,
        categoryField: "giorno",
        decimalSeparator:",",
        thousandsSeparator: "",
        fontFamily: "roboto, sans-serif",
        columnSpacing:0,
        fontSize: 12,
        color: "#737373",
        addClassNames:true,
        balloon: {
            adjustBorderColor: true,
            borderThickness:0,
            color: "#fff",
            borderColor: "#000",
            fillColor: "#000",
            pointerWidth: 5,
            verticalPadding:10,
            horizontalPadding:15,
            offsetY:5
        },
        categoryAxis: {
            gridAlpha: 0,
            minHorizontalGap:1,
            tickLength:0,
            labelOffset:10,
            axisColor: "#eee",
            classNameField: "classi"
        },
        valueAxes: [{
            dashLength:0,
            axisAlpha:0,
            labelFunction: function(val) {
                return val + " \u20AC"
            },
            labelOffset:10
        }],
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
        } );

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
        AmCharts.makeChart( "istogrammaPile", {
        type: "serial",
        dataProvider: piledata,
        categoryField: "mese",
        decimalSeparator:",",
        thousandsSeparator: "",
        fontFamily: "roboto, sans-serif",
        columnSpacing:0,
        fontSize: 12,
        color: "#737373",
        addClassNames:true,
        balloon: {
            adjustBorderColor: true,
            borderThickness:0,
            color: "#fff",
            borderColor: "#000",
            fillColor: "#000",
            pointerWidth: 5,
            verticalPadding:10,
            horizontalPadding:15,
            offsetY:5
        },
        categoryAxis: {
            gridAlpha: 0,
            minHorizontalGap:1,
            tickLength:0,
            labelOffset:10,
            axisColor: "#eee",
            labelFunction: function(category){
                var mesedata = new Date(category);
                return mesi[mesedata.getMonth()] + " " + mesedata.getFullYear();
            }
        },
        valueAxes: [{
            dashLength:0,
            axisAlpha:0,
            labelFunction: function(val) {
                return val + " \u20AC"
            },
            labelOffset:10,
            stackType: "regular"
        }],
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
        } );
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
            var donutChart = AmCharts.makeChart("donut",{
            type    : "pie",
            titleField  : "label",
            valueField  : "value",
            labelsEnabled: false,
            showBalloon: false,
            colorField: "color",
            radius:"49%",
            startDuration: 0,
            innerRadius: "75%",
            dataProvider : donutData,
            listeners: [
                {
                    "event": "rendered",
                    "method": function(){
                        $("#donut").append($("<div>").addClass("donut-title").append(
                            $("<span>").addClass("label").html("Totale uscite"),
                            $("<span>").addClass("value").html("25.000,36 &euro;")
                        ))
                    }
                }
            ]           
            });

        </script>
    </div>
</section>
