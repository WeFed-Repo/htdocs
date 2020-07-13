

<script type="text/javascript" language="javascript" src="/HT/JS/script/Chart.min.js"></script>
<script>
	var init = true;
	//indice del dossier da selezionare nell'array
	var numDossier = 0;
	//indice corrente
	var indiceDossier = 0;
	//altezza fissa
	
	var slider;
	var step;
	var height = 340;
	
	//aggiorna la label numerica posta sullo slider
	function updateSliderText(id, text) {
		$('#slider_' + id).children('span').text(formatter(text));
	}
	

	function updateSliderPortafoglio(event, ui, id, funCallBack) {
		
		var currentFormVal = $('#'+ id ).val();
		var sliderValue= ui.value;
		//#fix aggiorno solo se il valore è cambiato
		if( currentFormVal != sliderValue-1){
		
		updateSliderText(id, ui.value);
		$('#'+ id ).val((parseInt(ui.value) - 1).toString());
		
		if ($.isFunction(funCallBack)) {
			funCallBack(event, ui, id);
		}
		}
	}

	function sliderInitRiepilogoPortafoglio(id, valMin, valMax, valStep,funCallBack) {
		$('#slider_' + id).slider({
			value : $("#" + id).val(),
			min : valMin,
			max : valMax,
			range : "min",
			step : valStep,
			change : function(event, ui) {
				updateSliderPortafoglio(event, ui, id, funCallBack);
			}
		});	
	}

function callRiepilogoPortafoglio() {
	data = '';
 	$('#portafoglio').fadeTo( 0, 0.33 );
	$('#loadingPortafoglio').height(height);
	$('#loadingPortafoglio').show();
	$('#portafoglio').hide();	
	$("#portafoglioPie").hide();
		$.ajax({
			async : true,
			dataType : 'html',
			data : $('#formHPRiepilogoPortafoglio').serialize(),
			url : getPathContext() + '/common/homePageRiepilogoPortafoglio.do',
			success : function(response) {
					$('#portafoglioPie').empty();
					var htmlInt = jQuery('<div>').html(response).find(
							'#intestPort').html();
					$('#intesPortCall').html(htmlInt);	
				    			
				    $('#portafoglio').html(response);				
 					$('#portafoglio').fadeTo( 0, 1 );				
 					$("#tablePortafoglio tr:odd").addClass('odd');
			        $("#tablePortafoglio tr:even").addClass('even');		
					$('#loadingPortafoglio').hide();

					if($('#boxPortafoglio #btnTable').hasClass('disabled') || data==''){
						$('#portafoglioPie').hide();
						$("#portafoglio").show();
						$("#boxPortafoglio").find('#btnChart').removeClass('disabled');
					}else{
						$("#portafoglio").hide();
						$('#boxPortafoglio #btnChart').click();
						$("#boxPortafoglio").find('#btnTable').removeClass('disabled');
					}
	
					if (data == '') {
						$("#boxPortafoglio").find('#btnChart').addClass('disabled');
					}
			
				//inizializzo solo dopo la prima chiamata
				if (init){
					 initSliderPortafoglio();
					 if (numDossier > 1) {
					 slider = $('#slider_riepilogo_portafoglio');
					 step = slider.slider('option', 'step');
					 }
				}
				
				 $('#boxPortafoglio .homeMsg').css({
      				  position:'absolute',
     				   left: ($('#boxPortafoglio').width() - $('#boxPortafoglio .homeMsg').outerWidth())/2,
       				   top: ($('#boxPortafoglio').height() - $('#boxPortafoglio .homeMsg').outerHeight())/3
   				 });
					
				var isError = false;

				if ($('#portafoglio .boxMsg').size() > 0) {
					isError = true;
				}

				if (!isError) {

					$('#portafoglioContent').height(height);

				} else {

					$('#formHPRiepilogoPortafoglio .sliderContainerSpalla').hide();
				}
			}
		});
	}

	function callBackSlideRiepilogoPortafoglio(event, ui, id) {
		indiceDossier = parseInt($('#riepilogo_portafoglio').val());
		callRiepilogoPortafoglio();
	}

	function initSliderPortafoglio() {
		if (numDossier > 1) {
		$('#formHPRiepilogoPortafoglio').show();
			sliderInitRiepilogoPortafoglio('riepilogo_portafoglio', 1,numDossier, 1, callBackSlideRiepilogoPortafoglio);	
			$('#slider_riepilogo_portafoglio span').text(indiceDossier + 1);
			init = false;
		} 
	}
	
	function toggleTableGrafico(tipo){
		if("grafico" === tipo){
			if (data=='') {
				return;
			}
		
			if($("#portafoglioPie").is(":visible")){
				return;
			}
			$("#boxPortafoglio").find("#btnChart").addClass('disabled');
			$("#boxPortafoglio").find("#btnTable").removeClass('disabled');
			$("#boxPortafoglio").addClass('disabled');
			$("#portafoglio").hide();
			$("#portafoglioPie").show();
			$("#portafoglioPie").append("<div class=\"col-xs-8\" style=\"text-align:center; height:70%;\"><canvas id=\"myPieChart\" class=\"chart-canvas \"></canvas></div></div><div id=\"chartLegend\" class=\"legend col-xs-4\" ></div>");
			var ctx = document.getElementById("myPieChart").getContext("2d");
			var myPieChart = new Chart(ctx).Pie(data,options);
			var legend = myPieChart.generateLegend();
			$('#chartLegend').append(legend);
		}else if("table" === tipo){
			/*if ($("#boxPortafoglio").find('#btnTable').hasClass('disabled')) {
				return;
			}*/
		
			$("#boxPortafoglio").find("#btnChart").removeClass('disabled');
			$("#boxPortafoglio").find("#btnTable").addClass('disabled');
			$("#portafoglio").show();
			$("#portafoglioPie").hide();
			$("#portafoglioPie").empty();
		}
	}
	
	$(document).ready(function() {
		$(window ).resize(function() {
				 $('#boxPortafoglio .homeMsg').css({
      				  position:'absolute',
     				   left: ($('#boxPortafoglio').width() - $('#boxPortafoglio .homeMsg').outerWidth())/2,
       				   top: ($('#boxPortafoglio').height() - $('#boxPortafoglio .homeMsg').outerHeight())/3
   				 });
   		  });
	
	   
		$('#portafoglioContent').height(height);	
			  //TASTO PREV
				$("#formHPRiepilogoPortafoglio a[href='#Prev']").click(
				function() {								
							if (indiceDossier > 0) {																							
								var val = parseInt($('#riepilogo_portafoglio').val());	
								slider.slider("value", val)
							}else{		
							    //riparto dall'ultimo elemento																								
								slider.slider("value", numDossier)							
							}
							$("#portafoglioPie").empty();
						//	$("#boxPortafoglio #btnChart").removeClass('disabled');
						//	$("#boxPortafoglio #btnTable").addClass('disabled');
						});

                //TASTO NEXT
				$("#formHPRiepilogoPortafoglio a[href='#Next']").click(
						function() {
				
							if (indiceDossier+1 < numDossier) {
								indiceDossier += step;							
								slider.slider("value", indiceDossier + step)
							}else{
							    //riparto dal primo elemento																		
								slider.slider("value", step)
							}
							$("#portafoglioPie").empty();
						//	$("#boxPortafoglio #btnChart").removeClass('disabled');
						//	$("#boxPortafoglio #btnTable").addClass('disabled');
						});
				callRiepilogoPortafoglio();
			});
</script>

<div id="boxPortafoglio" class="riquadro clearfix">
	
	
	


<h1>
	
		<div class="flag hidden-xxs portafoglio">&nbsp;</div>
	
	
		Sintesi portafoglio 
	
</h1>

		<span id="refreshPortafoglio" class="context-buttons">
			
			<a title="Aggiorna" onclick="javascript:callRiepilogoPortafoglio();" id="refresh" class="refreshButton pull-right" style="right:90px"> </a>
		</span>

	<div id="puls" class="floatr padding-top5">
	<div id="puls_gr_table_chart" class="context-buttons margin-right10">
			<a href="#tablePortafoglio" title="Tabella" onclick="toggleTableGrafico('table');return false;" id="btnTable" class="btnTable disabled"> </a>
		<!--[if gt IE 8]><!-->
			<a href="#portafoglioPie" title="Grafico" onclick="toggleTableGrafico('grafico');return false;" id="btnChart" class="btnChart"> </a>
		<!--<![endif]-->
	</div>
</div>
	<div id="portafoglioContent" style="height: 340px;">
		<!--div id="loadingPortafoglio" class="caricamentoAjax" style="height: 340px; display: none;">
				<img src="/HT/IMAGES/caricamento.gif">
		</div-->
		<div class="col-xs-12 clear-padding">
			<div id="intesPortCall">
				<h3 class="titleSectionDouble">
					<strong>Dossier titoli&nbsp; - &nbsp; 000000583508
 - VERONA AG. 3 -
						0004 </strong>&nbsp;-&nbsp;<span class="intestatario">Asgcgdons Uteioeaacarlgn I
					</span>
				</h3>
			</div>
		</div>
		<div class="col-xs-12">
			<form id="formHPRiepilogoPortafoglio" style="display:block">
				<div class="sliderContainerSpalla margin-bottom10">
					<a href="#Prev" class="meno"> <img src="/HT/IMAGES/ico-slide-left.png" height="14" width="14" title="Precedente" alt="Precedente"> </a>
					<div id="slider_riepilogo_portafoglio" class="slider"></div>
					<a href="#Next" class="piu"> <img src="/HT/IMAGES/ico-slide-right.png" width="14" title="Successivo" alt="Successivo"> </a>
					<input type="hidden" name="indiceDossier" value="0" id="riepilogo_portafoglio">
				
				</div>
			</form>
		</div>
		<div class="col-xs-12 clear-padding" id="portafoglio" style="opacity: 1; display: block;">








<script>
	numDossier = '1';
</script>








<div class="bs-example form-horizontal">
	<div class="form-group textBoxHome">
		<div id="intestatarioRiepilogoPortafoglio" class="margin-bottom10">
			<div id="intestPort" style="display:none">
				<h3 class="titleSectionDouble">
					<strong>Dossier titoli&nbsp; - &nbsp; 000000583508
 - VERONA AG. 3 -
						0004 </strong>&nbsp;-&nbsp;<span class="intestatario">Asgcgdons Uteioeaacarlgn I
					</span>
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 ">
				Conto Corrente
			</div>
			<div class="col-xs-6 bold clear-padding">
				00585163

			</div>
			
			<div class="col-sm-6 col-xs-4 ">
				Saldo al
			</div>
			<div class="col-sm-6 col-xs-8 clear-padding">
				<select class="form-control  wauto">
					
						<option value="${saldo.value}">
							10/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.979.066,70&nbsp;€ 
						</option>
					
						<option value="${saldo.value}">
							11/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.979.066,70&nbsp;€ 
						</option>
					
						<option value="${saldo.value}">
							12/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.979.066,70&nbsp;€ 
						</option>
					
						<option value="${saldo.value}">
							15/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.979.066,70&nbsp;€ 
						</option>
					
						<option value="${saldo.value}">
							16/05/2017&nbsp;&nbsp;&nbsp;&nbsp;999.999.979.066,70&nbsp;€ 
						</option>
					
				</select>
			</div>
		</div>
	</div>
</div>
<div id="containerTitoli">
	
	
	
		<table id="tablePortafoglio" class="table tablePortafoglio">
				<thead>
					<tr class="even">
						<th></th>
						<th>Mercato</th>
						<th>Utile/Perdita</th>
					</tr>
				</thead>
				<tbody>
					
						<tr class="odd">
							<td>
								Azioni Italia
							</td>
							<td class="oRight">23.957,73</td>
 							<td class="oRight">
									
									
										<span class="positivo">23.957,73 </span>
									
									
								
							</td>
						</tr>
					
						<tr class="even">
							<td>
								Azioni Estero
							</td>
							<td class="oRight">6.930,00</td>
 							<td class="oRight">
									
									
										<span class="positivo">6.930,00 </span>
									
									
								
							</td>
						</tr>
					
						<tr class="odd">
							<td>
								Obbligazioni Italia
							</td>
							<td class="oRight">10.460,00</td>
 							<td class="oRight">
									
									
										<span class="positivo">10.460,00 </span>
									
									
								
							</td>
						</tr>
					
						<tr class="even">
							<td>
								Fondi Italia
							</td>
							<td class="oRight">10.433,87</td>
 							<td class="oRight">
									
									
										<span class="positivo">10.433,87 </span>
									
									
								
							</td>
						</tr>
					
						<tr class="odd">
							<td>
								Etf
							</td>
							<td class="oRight">5.861,06</td>
 							<td class="oRight">
									
									
										<span class="positivo">5.861,06 </span>
									
									
								
							</td>
						</tr>
					
						<tr class="even">
							<td>
								TOTALE PORTAFOGLIO
							</td>
							<td class="oRight">57.642,66</td>
 							<td class="oRight">
									
									
										<span class="positivo">57.642,66 </span>
									
									
								
							</td>
						</tr>
					
				</tbody>

			</table>
		
		
	
</div>



<script>

	var lenColor = 8;
	var colors = ['#013b7a','#007ACC','#2E2EE6','#D6EBFF','#4747FF','#66C2FF','#418ad7','#6789AF','#3366FF','#809DBC','#78afe8','#0099FF'];

var data = [
	
	{
		value: 23957.728999999999,
	    highlight:"#2765a9",
		color: colors[0%lenColor],
        label: 'Azioni Italia: ' + '23.957,73' + ' euro',
	},
	

	{
		value: 6930.0,
	    highlight:"#2765a9",
		color: colors[1%lenColor],
        label: 'Azioni Estero: ' + '6.930,00' + ' euro',
	},
	

	{
		value: 10460.0,
	    highlight:"#2765a9",
		color: colors[2%lenColor],
        label: 'Obbligazioni Italia: ' + '10.460,00' + ' euro',
	},
	

	{
		value: 10433.871385999999,
	    highlight:"#2765a9",
		color: colors[3%lenColor],
        label: 'Fondi Italia: ' + '10.433,87' + ' euro',
	},
	

	{
		value: 5861.06,
	    highlight:"#2765a9",
		color: colors[4%lenColor],
        label: 'Etf: ' + '5.861,06' + ' euro',
	},
	

];
	
function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		
		if(x.length > 1){
			x[1] = x[1].substr(0,2);
			x2 = ',' + x[1];	
		}else{
			x2 = ',00';
		}
				
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + '.' + '$2');
		}
		return x1 + x2;
	}

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
		   	tooltipTemplate: "<%=label%>",
			multiTooltipTemplate: "<%addCommas(value)%> euro",
			segmentShowStroke : true,
	        segmentStrokeColor : "#fff",
	        segmentStrokeWidth : 2,
	        percentageInnerCutout : 50,
	        animationSteps : 100,
	        animationEasing : "easeOutBounce",
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

var options = {
			segmentShowStroke : true,
			segmentStrokeColor : "#fff",
			segmentStrokeWidth : 2,
			percentageInnerCutout : 50,
			legendTemplate : "<ul class=\"chart-legend <%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span class=\"color\" style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><span class=\"label\" style=\"text-align: left;\"><%=segments[i].label.replace(': ', ': <br/>')%>:<%=segments[i].importo%></span><%}%></li><%}%></ul>",	
			animationEasing : "linear",
			animationSteps : 50,
 			responsive: false,
    		maintainAspectRatio: false
	}

</script>
</div>
		<div id="portafoglioPie" style="height: 100%; display: none;"></div>
</div>

<div id="actions" class="actions pull-right margin-bottom5">
	<div class="actions pull-right">
		<input class="btn button thin XL" value="Il tuo portafoglio" onclick="javascript:goToPage('/investimenti/titoliDossier.do')" type="button">
	</div>
</div>

</div>