					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					
					




<div class="riquadro clearfix">

	<script type="text/javascript">
		function drawChart(){}
		function dettaglioRapporto(tipoRap, codRapporto) {
			switch (tipoRap) {
			case 1:
			case 2:
				var form = $('#formMovimentiConto');
				form.find('input[name="codContoCorrente"]').val(codRapporto);
				form.submit();
				break;
			case 7:
				var form = $('#formDossier');
				form.find('input[name="chiaveDossier"]').val(codRapporto);
				form.submit();
				break;
			case 45:
				var form = $('#situazionePrestitiMutuiForm');
				form.find('input[name="codRapporto"]').val(codRapporto);
				form.submit();
				break;
			}
		}
	</script>

	
	
	
	
	
	




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag vincola">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Vincola</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	



	<form id="formMovimentiConto" method="post" action="/WEBHT/cc/movimentiConto.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d1c2f33f9bef53cd16eaba15073c75b3"></div>
		<input type="hidden" name="compilazione" value="S">
		<input type="hidden" name="codContoCorrente" value="">
	</form>

	<!-- 	SELEZIONA RAPPORTO -->
	<div class="section clearfix">
		<h3 class="titleSection">
			Rapporto selezionato
		</h3>
		<form id="formContoDepositoVincola" method="post" action="/WEBHT/cd/contoDepositoVincolaRiepilogo.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d1c2f33f9bef53cd16eaba15073c75b3"></div>
			
			
			
			
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
				<div class="col-sm-6 col-xs-12">
				
					<span class="col-xs-4 col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
 								Cognome Nome 		
							
							</span>
					<span class="col-xs-4" id="conto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</span>
				    <span class="col-xs-6" id="numero">00000000</span>
				    <span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
								</span>
				</div>
				<div class="col-xs-12 col-sm-6" id="numeri">
					<span id="disponibile"> 
						
						Saldo disponibile:
						
						
						
							
								<strong>
														5,00
														EUR
													</strong>
							
							
						
						<!-- Multivaluta Visualizza -->
						
						<!-- Multivaluta Visualizza fine -->
					</span>
					<span id="contabile"> 
						Saldo contabile: 
						
							
								<strong>
														5,00
														EUR
													</strong>
							
							
						
					</span>
					
					
					
				 		<span id="liqu">
							Liquidità:
							<strong id="liquiditaRapporto">
									5,00
									EUR
								</strong>
						</span>
					
				</div>
			
			
			<!-- C'è solo la sezione intestatario -->
			
			
			
		</div>
	
	<div class="tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						
					
				<tr role="row" class="odd">
						
							
							
								
									
										<td class="hidden sorting_1">&nbsp;<input type="hidden" name="codContoCorrente" value="001|2070|207000000000">
										</td>
									
									
								
							
						

						

							<td headers="tipoRapporto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										2070
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								EUR
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								EUR
							</td>
							
								<td class="oRight" headers="liquiditaRapporto" nowrap="nowrap">
									5,00
									EUR
								</td>
							
							
							
								
									
									
										
										
											
												
													
												
											
											
												
													<td headers="saldoIstantaneo" class="hidden oRight">
														5,00
														<span>EUR</span>
													</td>
												
												
											
											
												
													<td headers="saldoDisponibile" class="oRight  hidden-xxs">
														5,00
														<span class="hidden-xs">EUR</span>
													</td>
												
												
											
										
									
								
								
								<!-- Multivaluta -->
								
								<!-- Multivaluta fine -->
							
							<td class="hidden">&nbsp;</td>
						</tr></tbody>
					<thead>
						<tr class="hover" role="row"><th class="hidden sorting_asc" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente">&nbsp;</th><th headers="tipoRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo rapporto: ordinamento crescente">Tipo rapporto</th><th headers="ccRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero: ordinamento crescente">Numero</th><th headers="filialeRapporto" class="hidden-xs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente">Filiale</th><th headers="intestazioneRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente">Intestazione</th><th headers="divisaSaldoDisponibile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="divisaSaldoContabile" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label=" : ordinamento crescente"> </th><th headers="liquiditaRapporto" class="sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Liquidità: ordinamento crescente">Liquidità</th><th headers="saldoIstantaneo" class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Saldo Contabile: ordinamento crescente">Saldo Contabile</th><th headers="saldoDisponibile" class="hidden-xxs sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="
									
										Saldo Disponibile
									
									
								: ordinamento crescente">
									
										Saldo Disponibile
									
									
								</th><th class="hidden sorting" style="width: 0px;" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="&amp;nbsp;: ordinamento crescente">&nbsp;</th></tr>
					</thead>
			</table></div>
		</div>
	</div>
</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
     
	 var submitOnClick = false;
	 var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	    submitOnClick = true;
	
	
	//se i rapporti sono maggiori di 8 deve essere fatta la paginazione	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
})

</script>
		</form>
	</div>




	<form id="contoDepositoFrom" method="post" action="/WEBHT/cd/contoDepositoVincolaConferma.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d1c2f33f9bef53cd16eaba15073c75b3"></div>
		<input type="hidden" name="codContoCorrente" value="001|2070|207000000000">

		<div class="graphHT col-xs-12 col-sm-5 margin-top10 hidden-xs">
			<div class="innerBoxSkyBlue clear-padding-leftImportant clear-padding-topImportant col-xs-12" style="height: 321px;">
				<!--[if !IE]-->
					





<script type="text/javascript" language="javascript" src="/HT/JS/script/Chart.min.js"></script>


				<h3 class="titleSection">
			Liquidità
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
	
	function addCommas(nStr)
	{
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
				label: "Liquidità"
			},
			{
				value: importoDaVincolare,
				color: "#78afe8",
				highlight: "#8cbef1",
				label: "Da vincolare"
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
			
		<canvas id="piechart" class="chart-canvas" width="248" height="143" style="width: 248px; height: 143px;"></canvas></div>
		<div class="col-xs-4 clear-padding-right">
			<div id="legenda" class="legendPie"><ul class="chart-legend doughnut-legend"><li><span class="color" style="background-color:#013b7a"></span><span class="label">Liquidità</span></li><li><span class="color" style="background-color:#78afe8"></span><span class="label">Da vincolare</span></li></ul></div>
		</div>
	</div>

				<!--[endif]-->
				<!--[if lt IE 9]>
							







<div class="section clearfix">
				<h3 class="titleSection">
			Liquidità
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
					
					








		
			Imposta importo
		
		
		
		


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
									<th>Durata</th>
									<th>Scadenza</th>
									<th>Tasso lordo</th>
								</tr>
							</thead>
							<tbody>
								
									
									
									
	
									
									<input type="hidden" name="scadenzaVincolo" value="10/12/2017">
									<tr onclick="selRiga(this)">
										<td class="oCenter">
											 <input type="radio" name="durata" value="9" onclick="calcolaInteressi()" id="durata">
										</td>
										<td class="oCenter">9 mesi 
										</td>
										<td class="oCenter">10/12/2017
										</td>
										<td class="oCenter">0,35 %</td>
										
									</tr>
								
									
									
									
	
									
									<input type="hidden" name="scadenzaVincolo" value="10/03/2018">
									<tr onclick="selRiga(this)">
										<td class="oCenter">
											 <input type="radio" name="durata" value="12" onclick="calcolaInteressi()" id="durata">
										</td>
										<td class="oCenter">12 mesi 
										</td>
										<td class="oCenter">10/03/2018
										</td>
										<td class="oCenter">0,50 %</td>
										
									</tr>
								
									
									
									
	
									
									<input type="hidden" name="scadenzaVincolo" value="10/09/2018">
									<tr onclick="selRiga(this)">
										<td class="oCenter">
											 <input type="radio" name="durata" value="18" checked="checked" onclick="calcolaInteressi()" id="durata">
										</td>
										<td class="oCenter">18 mesi 
										</td>
										<td class="oCenter">10/09/2018
										</td>
										<td class="oCenter">0,65 %</td>
										
									</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
						<div class="col-xs-6 form-group">
							<b> Liquidità </b>
						</div>
	
						<div class="col-xs-6 form-group">
							<span id="liquidita">0</span>
							
							EUR
						</div>
					
	
							
							<!-- 							<span style="text-align: center; font-size: 12px;"> -->
							
							<!-- 							  <span id="interessiNetti" style="text-align: center; font-size: 16px; width: auto;"></span> &euro;<br /> -->
							
							<!-- 							</span> -->
	
	
							<!-- 						</div> -->
	
	


			<div class="col-xs-12 col-sm-9 floatl">
				<div class="margin-left10 floatl margin-bottom10 clearFloat">
					Inserisci l'importo che vuoi vincolare
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

					<b>L'importo minimo è di  5.000,00  EUR </b>

				</div>
			</div>


					
					<div class="col-xs-12 col-sm-3 floatr margin-bottom10 margin-right10 margin-top-xs-10">
						<div class="interessi-box">
							<div>Interessi netti <br class="hidden-xs"> anticipati</div>	
							<span style="text-align:center; font-size:16px; width:auto; font-weight: bold;" id="interessiNetti">0,03</span>€
							<input type="hidden" name="interessiNetti" value="" id="interessiNetti">
						</div>
					</div>
				</div>
			</div></div>
	</form>
</div>
<div class="pull-right margin-top20">
	<div class="actions">
		<button id="buttonAvanti" onclick="$('#contoDepositoFrom').submit()" class="btn btn-primary" disabled="disabled">
			Avanti
		</button>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		calcolaInteressi();
	});

	var check = $('input:radio[name=durata]:checked').val();

	var disabledButton = false;

	if (check !== undefined) {
		//Leggo il campo hidden e lo setto sui campi editabili
		var importo = $('#importo').attr('value');
		importo = importo.replace(/\./gi, '');
		importo = importo.replace(',', '.');
		setImporto(importo);

		calcolaInteressi();
		//aggiorno la liguidita
		var importoMinimo = '5.000,00';

		importoMinimo = importoMinimo.replace(/\./gi, '');
		importoMinimo = importoMinimo.replace(',', '.');

		var liquidita = 5.00;

		importoMinimo = importoMinimo * 1;
		liquidita = liquidita * 1;

		if (liquidita < importoMinimo) {
			$('#importoInt').attr('disabled', 'disabled');
			$('#decimali').attr('disabled', 'disabled');
			$('#buttonAvanti').attr('disabled', 'disabled');
			disabledButton = true;
		}

	}

	function calcolaInteressi() {
		//if (disabledButton)
		//	return;
		var check = $('input:radio[name=durata]:checked').val();

		if (check !== undefined) {
			var importo = getImporto();
			setImporto(importo);
			aggiornaLiquidita();
			//creaGraficoVincolaRiepilogo(getImporto());
			drawChart();

			var strParam = $("#contoDepositoFrom").serialize();

			var form_url = getPathContext()
					+ "/cd/contoDepositoCalcoloInteressi.do?" + strParam;

			$.post(form_url, function(result) {
				if (result.success) {
					$('#interessiNetti').html(result.message);
				} else {
					$('#interessiNetti').html(0);
				}
			}, "json");

			//aggiorno il grafico 
			//$('#importo').attr('value', number_format(importo,0, ',', '.'));
		} else {
			alert("Selezionare la durata del vincolo.");
		}
	}

	function getImporto() {
		var importo = '' + $('#importoInt').attr('value') + ',' + $('#decimali').attr('value');
		importo = importo.replace(/\./gi, '');
		importo = importo.replace(',', '.');
		return importo;
	}
	function setImporto(importo) {
		var strImporto = '' + importo;
		var decimali = strImporto.split('.');
		$('#importoInt').attr('value', number_format(decimali[0], 0, ',', '.'));
		$('#decimali').attr('value', (decimali[1] == null) ? '00' : decimali[1]);
		$('#importo').attr('value', number_format(importo, 2, ',', ''));
	}

	function importoDaVincolareSomma(value) {
		if (disabledButton)
			return;

		var check = $('input:radio[name=durata]:checked').val();

		if (check !== undefined) {
			var importo = getImporto();
			if (value == 'x') { //reimposto il valore minino di vincolo
				var importoMinimo = '5.000,00';

				//tolgo la formattazione per chiamare la generazione del grafico
				importoMinimo = importoMinimo.replace(/\./gi, '');
				importoMinimo = importoMinimo.replace(',', '.');

				//creaGraficoVincolaRiepilogo(importoMinimo);

				//aggiorno la liguidita
				var liquidita = 5.00;
				liquidita = liquidita - importoMinimo;
				$('#liquidita').html(liquidita);
				setImporto(importoMinimo);

			} else {
				var liquidita = 5.00;
				importo = importo * 1 + value * 1;
				liquidita = liquidita * 1 - importo * 1;

				if (liquidita > 0) {
					//creaGraficoVincolaRiepilogo(importo);
					setImporto(importo);
					//$('#importo').attr('value', (importo+"").replace(/\./gi, ','));
				} else {
					//vado in negativo con la liquidità, allora imposto come importo vincolabile tutta la liquidità.
					liquidita = 5.00;
					setImporto(liquidita);
					//$('#importo').attr('value', (liquidita+"").replace(/\./gi, ','));
					//creaGraficoVincolaRiepilogo(0);
				}

				//aggiorno la liguidita
				//aggiornaLiquidita();
			}
			calcolaInteressi();
		} else {
			alert("Selezionare la durata del vincolo.");
		}
	}

	function dateDiff(dataStr) {
		var dataArr = dataStr.split("/");
		//Set the two dates
		today = new Date()
		var scadenza = new Date(dataArr[2], dataArr[1] - 1, dataArr[0]);//Month is 0-11 in JavaScript
		var one_day = 1000 * 60 * 60 * 24;

		return Math.ceil((scadenza.getTime() - today.getTime()) / (one_day));

	}

	function aggiornaLiquidita() {
		if (disabledButton)
			return;

		//aggiorno la liguidita
		var liquidita = 5.00;
		//liquidita = liquidita.replace(/\./gi, '');
		//liquidita = liquidita.replace(',', '.');

		var importo = getImporto();

		liquidita = liquidita * 1 - importo * 1;
		if (liquidita > 0) {
			$('#liquidita').html(number_format(liquidita, 2, ',', '.'));
		} else {
			var liquiditaIniziale = 5.00;
			//$('#importo').attr('value',liquiditaIniziale);
			setImporto(liquiditaIniziale);
			$('#liquidita').html(0);
		}
	}

	function number_format(number, decimals, dec_point, thousands_sep) {
		var n = !isFinite(+number) ? 0 : +number, prec = !isFinite(+decimals) ? 0
				: Math.abs(decimals), sep = (typeof thousands_sep === 'undefined') ? ','
				: thousands_sep, dec = (typeof dec_point === 'undefined') ? '.'
				: dec_point, s = '', toFixedFix = function(n, prec) {
			var k = Math.pow(10, prec);
			return '' + Math.round(n * k) / k;
		};
		s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		return s.join(dec);
	}
	
	function selRiga(item) {
		$(':input').prop('checked', false);
		$(item).find('input:radio[name=durata]').prop('checked',true);
	}
	
</script>

