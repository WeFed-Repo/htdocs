<div class="form-field-input col-sm-7 col-xs-12 pull-right">
	<h3 class="titleSection">
		Lorem ipsum dolor sit amet
	</h3>
	<table class="table table-striped">
	<colgroup>
		<col width="7%">
		<col width="40%">
		<col width="23%">
		<col width="30%">
	</colgroup>
	<thead>
		<tr>
			<th class="hidden-xs">&nbsp;</th>
			<th colspan="2">Titolo01</th>
			<th>Titolo02</th>
		</tr>
	</thead>
	<tbody>                                                          
		<tr>
			<td class="hidden-xs">&nbsp;</td>
			<td class="oLeft">Lorem ipsum dolor sit amet</td>                     
			<td class="oLeft"></td>
			<td class="oRight">consectetuer adipiscing elit</td>                                   
		</tr>                                                            

		<tr>                                                    
			<td class="hidden-xs">&nbsp;</td>
			<td class="oLeft">Lorem ipsum dolor sit amet</td>
			<td class="oLeft"></td>                                     
			<td class="oRight">consectetuer adipiscing elit</td>                                 
		</tr>
		<tr class="tfoot">
			<td class="hidden-xs">&nbsp;</td>                                                     
			<td colspan="2" class="oLeft">Lorem ipsum dolor sit amet</td>                                     
			<td class="oRight bold">consectetuer adipiscing elit</td>                                 
		</tr>                                                            

		<tr>                                                    
			<td class="hidden-xs">&nbsp;</td>
			<td class="oLeft">Lorem ipsum dolor sit amet</td>                                     
			<td class="oLeft"></td>
			<td class="oRight">consectetuer adipiscing elit</td>
		</tr>                                                            
	</tbody>                                                         
	<tfoot>                                                          
	<tr>
		<th class="hidden-xs">&nbsp;</th>                                                         
		<th colspan="2" class="oLeft">Lorem ipsum dolor</th>
		<th class="importo positivo oRight">consectetuer adipiscing elit</th>	
	</tr>                                                            
	</tfoot>                                                         
	</table>
</div>

<div class="form-field-input col-sm-5 col-xs-12 pull-left">
	<h3 class="titleSection">
		Lorem ipsum dolor sit amet
	</h3>
	<div class="form-group">
		<div class="graphHT">
<script type="text/javascript">

function addCommas(nStr) {
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

var sbilancio = 0.00;
var color = "#b40101";
var interessi_spese = [

['Interessi a credito', 0.00, '38B9EE' ],

['Altre spese', 0.00, '22B117' ],

['Interessi a debito', 0.00, '2727A8' ],
];
var spese = interessi_spese[1][1];
var descrizione_spese = interessi_spese[1][0];

if(interessi_spese.length != 'undefined'){
function drawChart() {
var data = google.visualization.arrayToDataTable([
["Descrizione", "Euro", { role: "style" } ],
[interessi_spese[0][0], interessi_spese[0][1], '#013b7a' ],
[descrizione_spese, spese, '#78afe8' ],
['Sbilancio', sbilancio, color ],
]);
var view = new google.visualization.DataView(data);
view.setColumns([0, 1,
{	calc: "stringify",
sourceColumn: 1,
type: "string",
role: "annotation"},
2]);

var options = {
width: 300,
height: 160,
chartArea:{left:10,top:10,width:'95%',height:'70%'},
bar: {groupWidth: "95%"},
legend: { position: "none" },
isStacked:true,
};
var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
chart.draw(view, options);
}

if(  interessi_spese.length > 2){
spese = interessi_spese[1][1] + interessi_spese[2][1];
descrizione_spese = interessi_spese[1][0] +" + " + interessi_spese[2][0]; 
}
if(sbilancio >= 0){
color = "#289730";
}

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
}
</script><script src="https://www.google.com/uds/?file=visualization&amp;v=1&amp;packages=corechart" type="text/javascript"></script><link href="https://www.google.com/uds/api/visualization/1.0/84dc8f392c72d48b78b72f8a2e79c1a1/ui+en.css" type="text/css" rel="stylesheet"><script src="https://www.google.com/uds/api/visualization/1.0/84dc8f392c72d48b78b72f8a2e79c1a1/format+en,default+en,ui+en,corechart+en.I.js" type="text/javascript"></script>
			<div id="container">
				<div id="columnchart_values"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 300px; height: 160px;"><div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="300" height="160" aria-label="A chart." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_0"><rect x="10" y="10" width="285" height="112"></rect></clipPath></defs><rect x="0" y="0" width="300" height="160" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="10" y="10" width="285" height="112" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(http://youweb.webank.local/strutt_priv.php?pag=interessi_e_spese&amp;lev1=conti&amp;wdg=01|02#_ABSTRACT_RENDERER_ID_0)"><g><rect x="10" y="121" width="285" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="10" y="93" width="285" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="10" y="66" width="285" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="10" y="38" width="285" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="10" y="10" width="285" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect></g><g><rect x="13" y="66" width="90" height="0.5" stroke="#013b7a" stroke-width="1" fill="#013b7a"></rect><rect x="108" y="66" width="89" height="0.5" stroke="#78afe8" stroke-width="1" fill="#78afe8"></rect><rect x="202" y="66" width="90" height="0.5" stroke="#289730" stroke-width="1" fill="#289730"></rect></g><g><rect x="10" y="66" width="285" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g><g><rect x="58" y="54" width="1" height="12" stroke="none" stroke-width="0" fill="#999999"></rect><rect x="152" y="54" width="1" height="12" stroke="none" stroke-width="0" fill="#999999"></rect><rect x="247" y="54" width="1" height="12" stroke="none" stroke-width="0" fill="#999999"></rect></g></g><g></g><g><g><text text-anchor="middle" x="57.833333333333336" y="136.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#222222">Interessi a credito</text></g><g><text text-anchor="middle" x="152.5" y="136.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#222222">Altre spese +</text><text text-anchor="middle" x="152.5" y="149.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#222222">Interessi a debito</text></g><g><text text-anchor="middle" x="247.16666666666669" y="136.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#222222">Sbilancio</text></g></g><g><g><g><rect x="52.5" y="43.5" width="12" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="middle" x="58" y="52.5" font-family="Arial" font-size="10" stroke="#ffffff" stroke-width="3" fill="#012955" aria-hidden="true">0</text><text text-anchor="middle" x="58" y="52.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#012955">0</text></g><rect x="55" y="44" width="6" height="10" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g></g><g><g><rect x="146.5" y="43.5" width="12" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="middle" x="152" y="52.5" font-family="Arial" font-size="10" stroke="#ffffff" stroke-width="3" fill="#547aa2" aria-hidden="true">0</text><text text-anchor="middle" x="152" y="52.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#547aa2">0</text></g><rect x="149" y="44" width="6" height="10" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g></g><g><g><rect x="241.5" y="43.5" width="12" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g><text text-anchor="middle" x="247" y="52.5" font-family="Arial" font-size="10" stroke="#ffffff" stroke-width="3" fill="#1c6a22" aria-hidden="true">0</text><text text-anchor="middle" x="247" y="52.5" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#1c6a22">0</text></g><rect x="244" y="44" width="6" height="10" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g></g></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Descrizione</th><th>Euro</th></tr></thead><tbody><tr><td>Interessi a credito</td><td>0</td></tr><tr><td>Altre spese + Interessi a debito</td><td>0</td></tr><tr><td>Sbilancio</td><td>0</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 170px; left: 310px; white-space: nowrap; font-family: Arial; font-size: 10px;">0</div><div></div></div></div>
				</div>
<!--[if IE 8]>

<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
['Descrizione', 'Interessi']








]);

var options = {
pieHole: 0.4,
legend: 'none'
};

var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
chart.draw(data, options);
}
</script>
<div id="donutchart" style="width:100%;"></div>
<![endif]-->
		</div>
	</div>
</div>