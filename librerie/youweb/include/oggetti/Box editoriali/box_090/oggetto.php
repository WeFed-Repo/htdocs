<div class="graphHT col-xs-12 col-sm-5 margin-top10 hidden-xs">
	<div class="innerBoxSkyBlue clear-padding-leftImportant clear-padding-topImportant col-xs-12" style="height: 321px;">
<!--[if !IE]-->
<script type="text/javascript" language="javascript" src="/HT/JS/script/Chart.min.js"></script>
		<h3 class="titleSection">
			Lorem ipsum dolor sit amet
		</h3>
		<span id="amcharts" class="margin-left20 margin-bottom10"></span>
		<script type="text/javascript">
		$(document).ready(function(){
			drawChart();
			var height = 0;
			if (!isMobile()) {
				heightFix();
			}
		});

		$( window ).resize(function() {
			drawChart();
			if (!isMobile()) {
				heightFix();
			}
		});

		function heightFix(){
			var height = 0;
			$('.innerBoxSkyBlue').each(function(index){
				if($(this).height()>height){
					height = $(this).height();
				}
			});
			$('.innerBoxSkyBlue').each(function(){
				$(this).height(height);
			});
		}

		function addCommas(nStr){
			nStr += '';
			x = nStr.split('.');
			x1 = x[0];
			x2 = x.length > 1 ? ',' + x[1] : ',00';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + '.' + '$2');
			}
			return x1 + x2;
		}

function drawChart() {
$('#piechart').remove();
$('#legenda').empty();
$('#canvasContainer').append('<canvas id="piechart" class="chart-canvas"></canvas>');

var importoDaVincolare = $('#importoInt').attr('value') + ',' +  $('#decimali').attr('value');

importoDaVincolare = importoDaVincolare.replace(/\./gi, '');
importoDaVincolare = importoDaVincolare.replace(',', '.');
importoDaVincolare=parseFloat(importoDaVincolare).toFixed(2);

var liquiditaRimanente = parseFloat(5.00 - importoDaVincolare).toFixed(2);
var liquidita = 5.00;

var pie = $("#piechart").get(0).getContext("2d");

Chart.defaults.global = {
animation: true,
scaleLineColor: "rgba(0,0,0,.1)",
scaleShowLabels: true,
scaleLabel: "<%=addCommas(value)%>",
scaleIntegersOnly: true,
scaleBeginAtZero: false,
scaleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
scaleFontSize: 12,
scaleFontStyle: "normal",
scaleFontColor: "#666",
responsive: true,
maintainAspectRatio: false,
showTooltips: true,
customTooltips: false,
tooltipEvents: ["mousemove", "touchstart", "touchmove"],
tooltipFillColor: "rgba(0,0,0,0.8)",
tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
tooltipFontSize: 14,
tooltipFontStyle: "normal",
tooltipFontColor: "#fff",
tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
tooltipTitleFontSize: 14,
tooltipTitleFontStyle: "bold",
tooltipTitleFontColor: "#fff",
tooltipYPadding: 6,
tooltipXPadding: 6,
tooltipCaretSize: 8,
tooltipCornerRadius: 6,
tooltipXOffset: 10,
tooltipTemplate: "<%=addCommas(value)%> euro",
multiTooltipTemplate: "<%addCommas(value)%> euro",
segmentShowStroke : true,
segmentStrokeColor : "#fff",
segmentStrokeWidth : 2,
percentageInnerCutout : 50,
animationSteps : 100,
animationEasing : "linear",
onAnimationComplete : null,
labelFontFamily : "Arial",
labelFontStyle : "normal",
labelFontSize : 24,
labelFontColor : "#666",
onAnimationProgress: function(){},
onAnimationComplete: function(){}
}

var data_pie = [
{
value: liquiditaRimanente,
color:"#013b7a",
highlight: "#2765a9",
label: "Lorem ipsum dolor sit amet"
},
{
value: importoDaVincolare,
color: "#78afe8",
highlight: "#8cbef1",
label: "Consectetuer adipiscing elit"
}
];

var options_pie = {
segmentShowStroke : true,
segmentStrokeColor : "#fff",
segmentStrokeWidth : 2,
percentageInnerCutout : 50,
legendTemplate : "<ul class=\"chart-legend <%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span class=\"color\" style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><span class=\"label\"><%=segments[i].label%></span><%}%></li><%}%></ul>",	
animationEasing : "linear",
animationSteps : 50
}


var piechart = new Chart(pie).Doughnut(data_pie, options_pie);

//var pielegend = piechart.generateLegend();
helpers = Chart.helpers;

var legendHolder = document.createElement('div');
legendHolder.innerHTML = piechart.generateLegend();

// Include a html legend template after the module doughnut itself
helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
helpers.addEvent(legendNode.firstChild, 'mouseover', function(){
var activeSegment = piechart.segments[index];
activeSegment.save();
activeSegment.fillColor = activeSegment.highlightColor;
piechart.showTooltip([activeSegment]);
activeSegment.restore();
});
});
helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
piechart.draw();
});
$('#legenda').get(0).appendChild(legendHolder.firstChild);

}



</script>
		<div id="container">
			<div class="col-xs-8" id="canvasContainer">
				<canvas id="piechart" class="chart-canvas" width="248" height="143" style="width: 248px; height: 143px;"></canvas>
			</div>
			<div class="col-xs-4 clear-padding-right">
				<div id="legenda" class="legendPie">
					<ul class="chart-legend doughnut-legend">
						<li><span class="color" style="background-color:#013b7a"></span><span class="label">Lorem ipsum dolor sit amet</span></li>
						<li><span class="color" style="background-color:#78afe8"></span><span class="label">consectetuer adipiscing elit</span></li>
					</ul>
				</div>
			</div>
		</div>

<!--[endif]-->
<!--[if lt IE 9]>
<div class="section clearfix">
	<h3 class="titleSection">
		Lorem ipsum dolor sit amet
	</h3>

<span id="amcharts" class="margin-left20 margin-bottom10"></span></div>

<script type="text/javascript">

// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(loadGoogleChart);
var chart = null;
function loadGoogleChart(){
chart = new google.visualization.PieChart(document.getElementById('chart_div'));
drawChart();
}

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {
if(chart!=null){
chart.clearChart();

var importoDaVincolare = $('#importoInt').attr('value') + ',' +  $('#decimali').attr('value');

importoDaVincolare = importoDaVincolare.replace(/\./gi, '');
importoDaVincolare = importoDaVincolare.replace(',', '.');
importoDaVincolare=parseFloat(importoDaVincolare);

var liquiditaRimanente = 5.00 - importoDaVincolare;
var liquidita = 5.00;
// Create the data table.
var data = new google.visualization.DataTable();
data.addColumn('string', 'Topping');
data.addColumn('number', 'Slices');
data.addRows([
['Importo da vincolare', importoDaVincolare],
['Liquidità', liquiditaRimanente]
]);

// Set chart options
var options = {width:'100%',

'pieHole': 0.5,
colors:['#013b7a','#155293','#2068b4','#418ad7','#64a3e6','#78afe8'],
legend:{position:'bottom'},
backgroundColor:'#f5f9fc'
};

var formatter = new google.visualization.NumberFormat(
{negativeColor: 'red', negativeParens: true, pattern: '#,##0.00'});
formatter.format(data, 1);    
// Instantiate and draw our chart, passing in some options.
chart.draw(data, options);
}
}
</script>





		<div id="chart_div"></div>
<![endif]-->
	</div>
</div>



<div class="datiHT col-xs-12 col-sm-7 margin-top10">
	<div class="innerBoxSkyBlue clear-padding-leftImportant clear-padding-topImportant col-xs-12" style="height: 321px;">
		<h3 class="titleSection">
			Lorem ipsum dolor sit amet
		</h3>
<!-- TABELLA -->
		<div class="tablePanel clearfix">
			<div class="table-responsive">
				<table class="table table-striped" style="margin-bottom: 0">
				<colgroup>
					<col width="5%">
					<col width="30%">
					<col width="35%">
					<col width="30%">
				</colgroup>
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Titolo01</th>
						<th>Titolo02</th>
						<th>Titolo03</th>
					</tr>
				</thead>
				<tbody>
				<input type="hidden" name="scadenzaVincolo" value="10/12/2017">
				<tr onclick="selRiga(this)">
					<td class="oCenter"><input type="radio" name="durata" value="9" onclick="calcolaInteressi()" id="durata"></td>
					<td class="oCenter">Lorem ipsum dolor sit amet</td>
					<td class="oCenter">00/00/0000</td>
					<td class="oCenter">99,99 %</td>
				</tr>

				<input type="hidden" name="scadenzaVincolo" value="10/03/2018">
				<tr onclick="selRiga(this)">
					<td class="oCenter"><input type="radio" name="durata" value="12" onclick="calcolaInteressi()" id="durata"></td>
					<td class="oCenter">Lorem ipsum dolor sit amet</td>
					<td class="oCenter">00/00/0000</td>
					<td class="oCenter">99,99 %</td>
				</tr>


				<input type="hidden" name="scadenzaVincolo" value="10/09/2018">
				<tr onclick="selRiga(this)">
					<td class="oCenter"><input type="radio" name="durata" value="18" checked="checked" onclick="calcolaInteressi()" id="durata"></td>
					<td class="oCenter">Lorem ipsum dolor sit amet</td>
					<td class="oCenter">00/00/0000</td>
					<td class="oCenter">99,99 %</td>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 form-group">
				<b>Lorem ipsum dolor</b>
			</div>
			<div class="col-xs-6 form-group">
				<span id="liquidita">0</span>EUR
			</div>



<!-- 							<span style="text-align: center; font-size: 12px;"> -->

<!-- 							  <span id="interessiNetti" style="text-align: center; font-size: 16px; width: auto;"></span> &euro;<br /> -->

<!-- 							</span> -->


<!-- 						</div> -->


			<div class="col-xs-12 col-sm-9 floatl">
				<div class="margin-left10 floatl margin-bottom10 clearFloat">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit
				</div>
				<div class="margin-left10 floatl clearFloat margin-bottom10">
					<span class="vincola_box" onclick="importoDaVincolareSomma('x');">- -</span>
					<input type="hidden" name="importo" value="5,00" id="importo">
					<input type="text" id="importoInt" name="importoInt" size="10" maxlength="20" onkeyup="calcolaInteressi();" class="floatl form-control wauto vincola" value="5" disabled="disabled"><span class="floatl padding-top10">,</span><input type="text" id="decimali" name="decimali" size="2" maxlength="2" onkeyup="calcolaInteressi();" class="floatl form-control wauto vincola" value="00" disabled="disabled">
					<span class="vincola_box hidden-xxs" onclick="importoDaVincolareSomma('1');">1</span>
					<span class="vincola_box" onclick="importoDaVincolareSomma('10');">10</span>
					<span class="vincola_box" onclick="importoDaVincolareSomma('100');">100</span>
					<span class="vincola_box" onclick="importoDaVincolareSomma('1000');">1000</span>
				</div>
				<div class="clearFloat floatl margin-left10">
					<b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</b>
				</div>
			</div>

			<div class="col-xs-12 col-sm-3 floatr margin-bottom10 margin-right10 margin-top-xs-10">
				<div class="interessi-box">
					<div>Lorem ipsum dolor sit amet, <br class="hidden-xs"> consectetuer adipiscing elit</div>	
					<span style="text-align:center; font-size:16px; width:auto; font-weight: bold;" id="interessiNetti">0,03</span>&euro;
					<input type="hidden" name="interessiNetti" value="" id="interessiNetti">
				</div>
			</div>
		</div>
	</div>
</div>