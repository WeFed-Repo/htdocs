					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					
					



<!--[if lte IE 8]>
<script type="text/javascript" language="javascript" src="/HT/JS/script/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" language="javascript" src="/HT/JS/script/Chart.min.js"></script>
<script type="text/javascript">
function shadeColor(color, percent) {   
    var f=parseInt(color.slice(1),16),t=percent<0?0:255,p=percent<0?percent*-1:percent,R=f>>16,G=f>>8&0x00FF,B=f&0x0000FF;
    return "#"+(0x1000000+(Math.round((t-R)*p)+R)*0x10000+(Math.round((t-G)*p)+G)*0x100+(Math.round((t-B)*p)+B)).toString(16).slice(1);
}
window.options = {
	segmentShowStroke : true,
	segmentStrokeColor : "#fff",
	tooltipTemplate: "<%=label%>",
	segmentStrokeWidth : 2,
	animationEasing : "linear",
	animationSteps : 50,
	responsive: false,
   	maintainAspectRatio: false,
   	tooltipTitleFontSize: 11
};
</script>


<div class="riquadro clearfix padding-bottom10" id="posizionePatrimoniale">


	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag posizionePatrimoniale">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Posizione patrimoniale</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=107')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	


	<div class="section clearfix">
		<div class="col-xs-12 text-right">
			Valori riferiti all'ultima giornata lavorativa 
		</div>
		<div class="row">
		

			
			
			




<script type="text/javascript">
window.btnTableliquidita = function(btn, onload) {
	if (onload==undefined && $(btn).hasClass("disabled")) { return; } // se gia' attivo mi fermo
	$(btn).addClass("disabled");
	$(btn).parent().find(".btnChart").removeClass("disabled");
	
	var boxDefault = $(btn).parents(".boxDefault");
	$(boxDefault).find(".tableView").show();
	$(boxDefault).find(".chartView").hide();
}
window.btnChartliquidita = function(btn, onload) {
	if (onload==undefined && $(btn).hasClass("disabled")) { return; } // se gia' attivo mi fermo
	$(btn).addClass("disabled");
	$(btn).parent().find(".btnTable").removeClass("disabled");

var data = new Array();
var element = null;


	
	
	
	
	
var color = "#40bd40";




	



element = new Object();
element.value = 100.0;
element.color = color;
element.highlight = shadeColor(color, -0.3);
element.label = $('<span/>').html("Liquidità disponibile: 100,00 &euro;").text();
color = shadeColor(color, 0.2);
data.push(element);


	
	


	var boxDefault = $(btn).parents(".boxDefault");
	$(boxDefault).find(".tableView").hide();
	$(boxDefault).find(".chartView").show();
	
	if (data.length==1
		&& data[0].value==0) {
		$(boxDefault).find(".chartView").children().hide();
		$(boxDefault).find(".chartView .homeMsg").show();
	}
	else {
		var canvas = $(boxDefault).find("canvas");
		var ctx = $(canvas).get(0).getContext("2d");
		
		if (window.pieChartliquidita != undefined) {
			window.pieChartliquidita.removeData();
		}
		
		window.pieChartliquidita = new Chart(ctx).Doughnut(data,options);
		// genero la legenda
		var legend = $(boxDefault).find(".legend");
		if ($(legend).length){
			$(legend).html(""); // svuoto la legenda se gia' presente
			var ul = $('<ul class="chart-legend" />');
			$(data).each(function(i, element) {
				var li = $("<li />")
					.append('<span class="color noshadow" style="background-color: '+element.color +'" />')
					.append($('<span class="label" style="text-align: left; font-size: 0.9em" />').append(element.label.replace(":", ": <br/>")));
				ul.append(li);
			});	
			legend.append(ul);
		}
	}
}
$(function(){
	if($.browser.msie && parseFloat($.browser.version)<=8) {
		btnTableliquidita($("#btnTableliquidita"), true);
	}
	else {
		btnChartliquidita($("#btnChartliquidita"), true);
	}
});
</script>
			<div class="col-sm-6 col-xs-12 margin-top-xs-10">
				<div class="boxDefault" style="min-height:300px;">
					<h3 class="uppercase">
						Liquidità
					</h3>
					<div id="puls" class="floatr padding-top5">
						<div id="puls_gr_table_chart" class="context-buttons margin-right10">
							<a href="#tablePortafoglio" title="Tabella" onclick="btnTableliquidita(this);return false;" id="btnTableliquidita" class="btnTable"> </a>
						<!--[if gt IE 8]><!-->
							<a href="#portafoglioPie" title="Grafico" onclick="btnChartliquidita(this);return false;" id="btnChartliquidita" class="btnChart disabled"> </a>
						<!--<![endif]-->
						</div>
					</div>
					<div class="col-xs-12 tableView" id="liquiditaTable" style="display:none;">
						<table class="table table-striped no-footer">
							
								
							
							<thead>
								<tr class="hover">
								
									
									
									<th>Tipo</th>
									<th>Valore</th>
									
								
								</tr>
							</thead>
							<tbody>
							
							
							
							
								
								
									
									
										
										
											
											
										
										<tr class="even">
											<td>Liquidità disponibile:</td>
											<td class="oRight">100,00&nbsp; €</td>
										</tr>
									
									
									<tr style="background-color:#d6e8f5;font-style: italic;">
										<td><strong>Totale</strong></td>
										<td class="oRight"><strong>100,00&nbsp; €</strong></td>
									</tr>
								
							
							</tbody>
						</table>
					</div>
					<div class="col-xs-12 chartView" id="liquiditaChart">
						<div class="col-xs-8" style="text-align:center;height:200px">
							<canvas id="liquiditaCanvas" class="chart-canvas" style="z-index: 10; width: 268px; height: 200px;" width="268" height="200"></canvas>
						</div>
						<div class="legend col-xs-4 scrollable" style="top:0px;"><ul class="chart-legend"><li><span class="color noshadow" style="background-color: #40bd40"></span><span class="label" style="text-align: left; font-size: 0.9em">Liquidità disponibile: <br> 100,00 €</span></li></ul></div>
						<div class="ui-state-highlight ui-corner-all homeMsg" style="display:none;">
							<span class="ui-icon ui-icon-info"></span>
							<span class="msg noDataMsg">
								<strong> Attenzione </strong>
								Non sono presenti dati per il grafico
							</span>
						</div>
					</div>
				</div>
			</div>







	

		<div class="col-sm-6 col-xs-12  margin-top-xs-10" style="padding-left:10px">
			<div class="boxDefault" style="min-height:300px;">
				<h3 class="uppercase">
					Documento di riepilogo
				</h3>
				<div class="col-xs-12 vertical-align" style="height: 270px;">
					
					<div class="col-xs-8">
						<div class="col-xs-12 clearfix">
							<div class="col-xs-12">
								Scarica il documento completo con tutti i dati dettagliati della tua situazione patrimoniale.
							</div>
							<div class="col-xs-12 padding-top10 text-center">
								<a href="/WEBHT/PosizionePatrimoniale.pdf?1489158946915" target="_blank" class="btn btn-primary" style="margin-left:0;">
									Scarica il PDF
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>