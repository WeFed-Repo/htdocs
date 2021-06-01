<!-- Importazione assets per grafici -->
<script type="text/javascript" src="./fe/assets/amcharts/amcharts.js"></script>
<script type="text/javascript" src="./fe/assets/amcharts/serial.js"></script>
<script type="text/javascript" src="./fe/assets/amcharts/pie.js"></script>

<!-- Fine importazione assets per grafici -->
<style>
/* Css dei grafici */
.graph-space {height:250px; width:100%;display:block;}
.graph-donut-space {height:250px; width:250px;max-width:100%; margin:0 auto 13px;position:relative}
.graph-donut-space .donut-title {display: flex;
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
    .graph-donut-space .donut-title .value {
        font-size:22px;
        color:#333;
    }
</style>

<section>
    <h2>Movimenti</h2>
    <div class="bordered">
        <!-- Istogramma lineare con 2 colonne -->
        <div id="istogrammaEntrateUscite" class="graph-space"></div>
        <script type="text/javascript">
        // Dataset del grafico
        var iodata = [
            <?php for ($x=1;$x<=31;$x++){ 
            if ($x>1) print ",";    
                ?>
                {
                    "giorno":<?php print $x; ?>,
                    "entrate": <?php print rand(0,250000)/100; ?>,
                    "uscite":<?php print rand(0,250000)/100; ?>

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
            axisColor: "#eee"
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
            lineColor: "#2f9988"
        },
        {
            valueField: "uscite",
            type: "column",
            fillAlphas:1,
            lineColor: "#c84757"
        } ]
        } );

        </script>
        
        <!-- Fine istogramma lineare con 2 colonne -->
    </div>
</section>

<section>
    <h2>Pile</h2>
    <div class="bordered">
        <div id="istrogrammaPile" class="graph-space"></div>
    </div>
</section>

<section>
    <h2>Donut</h2>
    <div class="bordered">
        <div id="donut" class="graph-donut-space"></div>
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
            dataProvider : donutData           
            });
            donutChart.addListener("rendered",function(){
                $("#donut").append($("<div>").addClass("donut-title").append(
                    $("<span>").addClass("label").html("Totale uscite"),
                    $("<span>").addClass("value").html("25.000,36 &euro;")
                ))
            });
        </script>
    </div>
</section>
