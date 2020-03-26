<script>
	/* Centro div messaggi */
	centerSPhomepage = function() {
		$('#boxSintesiPatrimoniale .homeMsg').css({
					position:'absolute',
				left: ($('#boxSintesiPatrimoniale').width() - $('#boxSintesiPatrimoniale .homeMsg').outerWidth())/2,
					top: ($('#boxSintesiPatrimoniale').height() - $('#boxSintesiPatrimoniale .homeMsg').outerHeight())/2
				});
	};
	/* ready event */
	showMsgSP = function() {
		$('#SintesiPatrimonialeHP').hide();
		$('#SintesiPatrimonialeHelp').hide();
		$('#boxSintesiPatrimoniale').css("min-height", "200px");
		$('#boxSintesiPatrimoniale .homeMsg').show();
	
		centerSPhomepage();
			$(window).resize(function() {
			 centerSPhomepage();
			});
	}
	
	google.load("visualization", "1", {packages:["corechart"]});
	$(document).ready(function(){
		if($.browser.msie && parseFloat($.browser.version)<=8) {
			$('#boxSintesiPatrimoniale .homeMsg .ie8Msg').show();
			showMsgSP();
		} else {
			callSintesiPatrimoniale();
		}
	});
	/* google chart */
	function callSintesiPatrimoniale(){
		$.ajax({
			async: true,
			dataType: 'html',
			url: getPathContext() + '/common/homePageSintesiPatrimoniale.do',
			success: function(response) {
	
			
				//$('#SintesiPatrimonialeHP').html(response);
				
				// CHARTJS
				/* $('#intesSintesiPatrimoniale').html(response);*/
				// END CHARTJS
		
				var isError=false;
				
				if ($(response).find('.error').size()>0) {
					isError = true;
				}
				
				if (!isError) {
					$('#SintesiPatrimonialeHP').html(response);
					$('#SintesiPatrimonialeHP').show();
					$('#SintesiPatrimonialeHP').css('height', '250px');
					
					// GOOGLE CHART
					var view = new google.visualization.DataView(sintesiPatrimonialeData);
					var optionsSP = {
						width: "50%",
						height: "100%",
						legend: 'none',
						bar: { groupWidth: '50%' },
						chartArea: {left: 70, width:'75%', height:'90%'},
						isStacked: true,
						vAxis: {
							viewWindow: {
								max: Math.max.apply(Math, axes)*1.2,
								min: Math.min.apply(Math, axes)*1.2
							}
						}
					};
					var chartSPChart = new google.visualization.ColumnChart(document.getElementById("containerSP"));
					chartSPChart.draw(view, optionsSP);
					$(window).resize(function() {
						chartSPChart.draw(view, optionsSP);
						});
					// END GOOGLE CHART
				}
				else {
					$('#intesSintesiPatrimoniale').html("");
					$('#SintesiPatrimonialeHP').html("");
					
					$('#boxSintesiPatrimoniale .homeMsg .errorMsg').show();
					showMsgSP();
				}
			}
		});
	}
 </script><script src="https://www.google.com/uds/?file=visualization&amp;v=1&amp;packages=corechart" type="text/javascript"></script>
 <link href="https://www.google.com/uds/api/visualization/1.0/84dc8f392c72d48b78b72f8a2e79c1a1/ui+en.css" type="text/css" rel="stylesheet">
 <script src="https://www.google.com/uds/api/visualization/1.0/84dc8f392c72d48b78b72f8a2e79c1a1/format+en,default+en,ui+en,corechart+en.I.js" type="text/javascript"></script>
 <div class="riquadro clearfix" id="boxSintesiPatrimoniale">
	<h1>
	   <div class="flag hidden-xxs riepilogo">&nbsp;</div>
	   Sintesi Patrimoniale
	</h1>
	<div class="col-xs-12 clear-padding">
	   <div class="intes" id="intesSintesiPatrimoniale"></div>
	</div>
	<div class="col-xs-12 clear-padding" id="SintesiPatrimonialeHP" style="height: 250px;">
	   <script type="text/javascript">
		  function drawChart() {
			// GOOGLE CHART STACKED
			window.sintesiPatrimonialeData = new google.visualization.DataTable();
			sintesiPatrimonialeData.addColumn('string', '');
			
			sintesiPatrimonialeData.addColumn('number', 'value');
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'tooltip'});
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'style'});
			
			sintesiPatrimonialeData.addColumn('number', 'value');
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'tooltip'});
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'style'});
			
			sintesiPatrimonialeData.addColumn('number', 'value');
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'tooltip'});
			sintesiPatrimonialeData.addColumn({type: 'string', role: 'style'});
			
			sintesiPatrimonialeData.addRows([
			  ['',
			  0, 'Investimenti:'+ $('<span></span>').html(' 0,00 &euro;').text(), 'color: #2E5AD2', 
			  100.000, $('<span></span>').html('Liquidit&agrave;: 100,00 &euro;').text(), 'color: #2E91D2',
			  null, '', 'color: #F6DF13'],
			  ['', 
			   null, '', 'color: #2E5AD2',
			   null, '', 'color: #2E91D2', 
			   0, $('<span></span>').html('Finanziamenti: 0,00 &euro;').text(), 'color: #F6DF13']
			]);
			
			window.axes = [0+100.000
				,0 ];
			// end GOOGLE CHART STACKED
		  }
		  $(function(){
			drawChart();
		  });
	   </script> 
	   <div class="col-xs-8" style="height: 100%;" id="containerSP">
		  <div style="position: relative;">
			 <div dir="ltr" style="position: relative; width: 294px; height: 250px;">
				<div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
				   <svg width="294" height="250" aria-label="A chart." style="overflow: hidden;">
					  <defs id="defs">
						 <clipPath id="_ABSTRACT_RENDERER_ID_0">
							<rect x="70" y="13" width="221" height="225"></rect>
						 </clipPath>
					  </defs>
					  <rect x="0" y="0" width="294" height="250" stroke="none" stroke-width="0" fill="#ffffff"></rect>
					  <g>
						 <rect x="70" y="13" width="221" height="225" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect>
						 <g clip-path="url(https://youwebcard.bancopopolare.it/WEBHT/homepage.do#_ABSTRACT_RENDERER_ID_0)">
							<g>
							   <rect x="70" y="237" width="221" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
							   <rect x="70" y="162" width="221" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
							   <rect x="70" y="88" width="221" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
							   <rect x="70" y="13" width="221" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect>
							</g>
							<g>
							   <rect x="98" y="237" width="55" height="0.5" stroke="#2e5ad2" stroke-width="1" fill="#2e5ad2"></rect>
							   <rect x="98" y="51" width="55" height="186" stroke="#2e91d2" stroke-width="1" fill="#2e91d2"></rect>
							   <rect x="208" y="237" width="55" height="0.5" stroke="#f6df13" stroke-width="1" fill="#f6df13"></rect>
							</g>
							<g>
							   <rect x="70" y="237" width="221" height="1" stroke="none" stroke-width="0" fill="#333333"></rect>
							</g>
						 </g>
						 <g></g>
						 <g>
							<g>
							   <text text-anchor="end" x="60" y="241" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#444444">0</text>
							</g>
							<g>
							   <text text-anchor="end" x="60" y="166.33333333333331" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#444444">40</text>
							</g>
							<g>
							   <text text-anchor="end" x="60" y="91.66666666666666" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#444444">80</text>
							</g>
							<g>
							   <text text-anchor="end" x="60" y="17" font-family="Arial" font-size="10" stroke="none" stroke-width="0" fill="#444444">120</text>
							</g>
						 </g>
					  </g>
					  <g></g>
				   </svg>
				   <div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
					  <table>
						 <thead>
							<tr>
							   <th></th>
							   <th>value</th>
							   <th>value</th>
							   <th>value</th>
							</tr>
						 </thead>
						 <tbody>
							<tr>
							   <td></td>
							   <td>0</td>
							   <td>100</td>
							   <td></td>
							</tr>
							<tr>
							   <td></td>
							   <td></td>
							   <td></td>
							   <td>0</td>
							</tr>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
			 <div aria-hidden="true" style="display: none; position: absolute; top: 260px; left: 304px; white-space: nowrap; font-family: Arial; font-size: 10px;">Liquidit&agrave;: 100,00 &euro;</div>
			 <div></div>
		  </div>
	   </div>
	   <div id="sintesiPatrimonialeLegend" class="legend col-xs-4" style="z-index:10;">
		  <ul class="chart-legend">
			 <li><span class="color noshadow" style="background-color: #2E5AD2"></span><span class="label" style="text-align: left; font-size: 0.9em">Investimenti: <br>0,00 &euro;</span></li>
			 <li><span class="color noshadow" style="background-color: #2E91D2"></span><span class="label" style="text-align: left; font-size: 0.9em">Liquidit&agrave;: <br>100,00 &euro;</span></li>
			 <li><span class="color noshadow" style="background-color: #F6DF13"></span><span class="label" style="text-align: left; font-size: 0.9em">Finanziamenti: <br>0,00 &euro;</span></li>
		  </ul>
	   </div>
	</div>
	<div class="col-xs-12 text-right">
	   <a href="/WEBHT/cc/posizionePatrimoniale.do" class="btn button thin" style="margin-left:0;">
	   Posizione patrimoniale
	   </a>
	</div>
	<div class="col-xs-12 clear-padding" id="SintesiPatrimonialeHelp">
	   <div class="homePageHelp floatl">
		  Valori riferiti all'ultima giornata lavorativa
	   </div>
	</div>
	<div class="ui-state-highlight ui-corner-all homeMsg" style="display:none;">
	   <span class="ui-icon ui-icon-info"></span>
	   <span class="msg ie8Msg" style="display:none">
	   <strong> Attenzione </strong>
	   Questo widget non e' disponibile sulla versione di Explorer in uso.
	   </span>
	   <span class="msg errorMsg" style="display:none">
	   <strong> Attenzione </strong>
	   Servizio momentaneamente non disponibile
	   </span>
	</div>
 </div>