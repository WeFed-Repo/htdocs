					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					
					






<div class="riquadro clearfix">
<script type="text/javascript">
	$(document).ready(function(e) {
	  	if (isMobile()) 
			$("#DataTables_Table_1").cardBoxTable({
				colTitleIdx: 0,
				colsAction: [false,false,false,false,false,true],
				titleConcat: true,
				colActionPos: "top-right",
				show: function() {
					$('.table-responsive').addClass('cardbox-background');
					$(this).find('.cardbox-top-btn-margin').css('padding-left', '1.5em');
					$(this).find('.text-center').css('padding-left', '1.5em');
				},
			});
	});
	
	function dettaglioRapporto(tipoRap,codRapporto) {
		switch (tipoRap) { 
		case 1:
		case 2:
			var form=$('#formMovimentiConto');
			form.find('input[name="codContoCorrente"]').val(codRapporto);
			form.submit();
			break;
		case 7:
			var form=$('#formDossier');
			form.find('input[name="chiaveDossier"]').val(codRapporto);
			form.submit();
			break;
		case 45:
			var form=$('#situazionePrestitiMutuiForm');
			form.find('input[name="codRapporto"]').val(codRapporto);
			form.submit();
			break;
		}
	}
	
</script>



	










<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag iTuoiVincoli">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>I tuoi vincoli</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>









	



<form id="formMovimentiConto" method="post" action="/WEBHT/cc/movimentiConto.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
  <input type="hidden" name="compilazione" value="S">
  <input type="hidden" name="codContoCorrente" value="">
</form>
<form id="formContoDepositoVincola" method="post" action="/WEBHT/cd/contoDepositoITuoiVincoli.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
	
	
	
	
	<!-- 	SELEZIONA RAPPORTO -->
	<div class="section clearfix">
		<h3 class="titleSection">
			Rapporto selezionato
		</h3>	
		




  






	
	
		
	








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
	</div>	
	
		
		
			
		
	
</form>
<div class="clearfix">
	
		<div class="row margin-top10">
		  <div class="row-height">
		    <div class="col-xs-12 col-sm-5 col-prt-4 margin-bottom10 hidden-xs">
		      <div class="inside inside-full-height" style="background: rgb(245, 249, 252); height: 193px;">
		        <div class="content col-xs-12 clear-padding-left">
					<!--[if !IE]-->
						




<script type="text/javascript" language="javascript" src="/HT/JS/script/Chart.min.js"></script>


	<h3 class="titleSection">
		Importi vincolati
	</h3>

	
		        
		
		
		
		
		
		
		
		
	
	
		        
		
		
		
		
		
		
		
		
	
	


	<script type="text/javascript">
		
		$(document).ready(function(){
			
				drawChart();
			
			
			setHeight();
		});
		
		$( window ).resize(function() {
			drawChart();
			setHeight();
		});
		
window.setHeight = function() {
    var heights = $(".content").map(function() {
        return $(this).height();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".inside").height(maxHeight);
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
		        animateRotate : true,
		        animateScale : false,
		        onAnimationComplete : null,
		        labelFontFamily : "Arial",
		        labelFontStyle : "normal",
		        labelFontSize : 24,
		        labelFontColor : "#666",
			    onAnimationProgress: function(){},
			    onAnimationComplete: function(){}
			}
			
			var colors = ['#013b7a','#007ACC','#2E2EE6','#D6EBFF','#4747FF','#66C2FF','#418ad7','#6789AF','#3366FF','#809DBC','#78afe8','#0099FF'];
			var lenColor = colors.length;
			
			var data_pie = [
				
		          
		          
		         	
		          	{
		          		value: 5000.00,
						highlight: "#2765a9",
						color: colors[0%lenColor],
						label: '10/12/2017',
						interessi: 55.49
					},
		        
		          
		          
		         	
		          	{
		          		value: 5000.00,
						highlight: "#2765a9",
						color: colors[1%lenColor],
						label: '14/12/2017',
						interessi: 55.49
					},
		        
			];
			
			var options_pie = {
				segmentShowStroke : true,
				segmentStrokeColor : "#fff",
				segmentStrokeWidth : 2,
				percentageInnerCutout : 0,
				legendTemplate : "<ul class=\"chart-legend <%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span class=\"color\" style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><span class=\"label\"><%=segments[i].label%></span><%}%></li><%}%></ul>",		
				animationEasing : "linear",
				animationSteps : 50
			}
	
			
			var piechart = new Chart(pie).Doughnut(data_pie, options_pie);
			
			helpers = Chart.helpers;
			
			var legendHolder = document.createElement('div');
			legendHolder.innerHTML = piechart.generateLegend();
			
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
		<div class="col-xs-8 col-prt-4" id="canvasContainer">
			
		<canvas id="piechart" class="chart-canvas" width="235" height="135" style="width: 235px; height: 135px;"></canvas></div>
		<div class="col-xs-4 clear-padding-right">
			<div id="legenda" class="legendPie"><ul class="chart-legend doughnut-legend"><li><span class="color" style="background-color:#013b7a"></span><span class="label">10/12/2017</span></li><li><span class="color" style="background-color:#007ACC"></span><span class="label">14/12/2017</span></li></ul></div>
		</div>
	</div>

					<!--[endif]-->
					<!--[if lt IE 9]>
								





<div class="section clearfix">
	<h3 class="titleSection">
		Importi vincolati
	</h3>
	<div class="margin-left20">



	        
	
	
	
	
	
	
	
	


	        
	
	
	
	
	
	
	
	




	
	
		
	



 <div id="chart_div"></div>
 


<script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
      	
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
	          
	          
	          	
	          	['Disponibili al 10/12/2017',5000.00]
          
	          
	          
	          	,
	          	['Disponibili al 14/12/2017',5000.00]
          
          
        ]);
		
		  var formatter = new google.visualization.NumberFormat({negativeColor: 'red', negativeParens: true, pattern: '###,##0.00'});
  			formatter.format(data, 1);    

        // Set chart options
        var options = {width:'150%',
                       height: '150%',
                       legend: 'none',
                       'pieHole': 0.3,
                       colors : ['#013b7a','#007ACC','#2E2EE6','#D6EBFF','#4747FF','#66C2FF','#418ad7','#6789AF','#3366FF','#809DBC','#78afe8','#0099FF'],
                       backgroundColor:'#f5f9fc'
                       };

		var formatter = new google.visualization.NumberFormat(
	      {negativeColor: 'red', negativeParens: true, pattern: '#,##0.00'});
	   formatter.format(data, 1); 
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</div>
	</div>
					<![endif]-->
				</div>
		      </div>
		    </div>
		    <div class="col-xs-12 col-sm-7 margin-bottom10 col-top clear-padding-xs">
		      <div class="inside inside-full-height" style="background: rgb(245, 249, 252); height: 193px;">
				<div class="content col-xs-12" style="background-color: #f5f9fc; padding: 0;">
					<h3 class="titleSection">
						
						








		
			Importi vincolati
		
		
		
		


					</h3>
					<div class="table-responsive" style="display: block;">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
							<table class="table table-striped dataTable no-footer" id="DataTables_Table_1" role="grid">
								<thead>
									<tr>
										<th width="10%" class="oCenter">Svincola </th>
										<th width="15%" class="oCenter">Disponibili al</th>
										<th width="10%" class="oCenter">Durata</th>
										<th width="24%" class="oRight">Importo vincolato </th>
										<th width="17%" class="oCenter">Tasso lordo</th>
										<th width="24%" class="oRight">Interessi netti anticipati</th>
										
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th colspan="2" class="oCenter bold">
											Totali
										</th>
										<th colspan="2" class="oRight">
											10.000,00
											
												
											
										</th>
										<th colspan="2" class="oRight">
											110,98
											
												
											
										</th>
										
									</tr>
								</tfoot>				
								<tbody>       
								  	                                                   
										<tr>
											<td class="oCenter">
												
												<a onclick="impostaIndiceMovimento(0);" href="#">
													<img border="0" src="/HT/fe/img/ico-svincola.png" alt="Svincola" title="Svincola">
												</a>
											</td>
											<td class="oCenter">
												10/12/2017
											</td>
											<td class="oCenter">
												18
											</td>
											<td class="oRight">
												5.000,00
												
											</td>
											<td class="oCenter">
												1,00 %
											</td>
											<td class="oRight">
												55,49
												
											</td>
											
										</tr>
									                                                   
										<tr>
											<td class="oCenter">
												
												<a onclick="impostaIndiceMovimento(1);" href="#">
													<img border="0" src="/HT/fe/img/ico-svincola.png" alt="Svincola" title="Svincola">
												</a>
											</td>
											<td class="oCenter">
												14/12/2017
											</td>
											<td class="oCenter">
												18
											</td>
											<td class="oRight">
												5.000,00
												
											</td>
											<td class="oCenter">
												1,00 %
											</td>
											<td class="oRight">
												55,49
												
											</td>
											
										</tr>
														
								</tbody>
							</table>
						</div>
					</div>
				</div>
		      </div>
		    </div>
		   </div>
		</div>


	</div>
	<form id="contoDepositoFrom" method="post" action="/WEBHT/cd/contoDepositoSvincolaConferma.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="32d4a420453aeaebe366e301792684da"></div>
		<input type="hidden" name="codContoCorrente" value="001|2070|207000000000">	
		<input type="hidden" name="indiceMovimento" value="" id="indiceMovimento">
	</form>
</div>

<input type="button" class="btn btn-primary pull-right" value="Vincola" onclick="javascript:goToPage('/cd/contoDepositoVincolaRiepilogo.do')">

<script>
	

	function impostaIndiceMovimento(indice){
		$('#indiceMovimento').val(indice);
		$('#contoDepositoFrom').submit();
	}
</script>