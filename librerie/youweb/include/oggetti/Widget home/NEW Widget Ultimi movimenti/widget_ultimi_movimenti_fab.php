<div id="pulsanti" style="display: none">
	<div id="puls_gr_table_chart" class="context-buttons margin-right10">
		<!--[if gt IE 8]><!-->
			<a href="#Table" title="Tabella" onclick="showTable(); return false;" id="btnTable" class="btnTable disabled"> </a>
			<a href="#Chart" title="Grafico" onclick="loadDataGrafico(); return false;" id="btnChart" class="btnChart"> </a>
		<!--<![endif]-->
	</div>
</div>






<div class="clearfix" id="saldoMov">
	<div class="bs-example form-horizontal">
		<div class="form-group">
			<div class="col-xs-12 clear-padding">
			
				<div id="intestatario" style="display: none">
					<h3 class="titleSectionDouble">
						<strong>Conto corrente - 00001788
 - MONZA - 2070 - </strong><span class="intestatario">Domanin Fabrizio</span>
					</h3>
				</div>
			
				<div id="loadingChart" class="caricamentoAjax">
					<img src="/HT/IMAGES/caricamento.gif" />
				</div>
				
					
						<div id="container">
							<div id="movimentiTable" class="margin-top10">
								<div class="table-responsive tabSelezioneCarte" style="display: block;">
									<div class="dataTables_wrapper no-footer">
										<table class="table table-striped dataTable no-footer home">
											<thead>
												<tr class="hover">
													<th>
														Data Contabile
													</th>
													<th>
														Causale 
													</th>
													<th>
														Importo
													</th>
												</tr>
											</thead>
											<tbody>
											
												
													
														<tr class="odd">
															<td>
																09/05/2017
															</td>
															<td>
																scarico
															</td>
															<td class="oRight">
																
																	
																		<strong class="positivo">
																			1,00</strong>&nbsp;
																	
																	
																
															</td>
														</tr>	
														
												
													
														<tr class="even">
															<td>
																09/05/2017
															</td>
															<td>
																add. pagam. diversi
															</td>
															<td class="oRight">
																
																	
																	
																		<strong class="negativo">
																			-1,00</strong>&nbsp;
																	
																
															</td>
														</tr>	
														
												
													
														<tr class="odd">
															<td>
																08/05/2017
															</td>
															<td>
																add. pagam. diversi
															</td>
															<td class="oRight">
																
																	
																	
																		<strong class="negativo">
																			-60,00</strong>&nbsp;
																	
																
															</td>
														</tr>	
														
												
											</tbody>
										</table>
									</div>
								</div>
								<div style="position:absolute;bottom:-15px;left:0px;width:100%;">
									<div class="homePageHelp floatl">
										Ultimi 8 movimenti dell'ultimo trimestre
									</div>
								</div>
							</div>
							<!-- div contenitore per il grafico -->
							<div id="movimentiGrafico">
							</div>
						</div>
					
				
				
				
				
				</div>
				
			</div>
		</div>
	</div>
	
	
		<div class="col-xs-12 margin-top10" >
			<div>
			</div>
			<div >
				
				
					
						
						
						
					
				
				<form id="saldoMovimentiDettaglio" method="post" action="/WEBHT/cc/movimentiConto.do" class="floatr margin-right10">
					<input type="hidden" name="ultimiMovimenti" value="90" />
					<input type="hidden" name="compilazione" value="S" />
					<input type="hidden" name="tipoIntervallo" value="ultimiGiorni" />
					<input type="hidden" name="codContoCorrente" value="001|2070|207000001788" id="codContoCorrente" />
					<input type="submit" value="Saldo e movimenti" class="margin-bottom20Important btn 1" />
				</form>
			</div>
		</div>
<script type="text/javascript">
	var i=0;
	var dati = [];
	var giorni = [];
	var importi = [];
	var causali = [];
	var fido;
	var saldiTotali = [];
	var map = {};
	var startDate;
	var endDate
	
	
	
	
		fido = 0
	
		
	//creo l'array per disegnare il grafico dei saldi
		
		
	//creo un array con tutti gli importi dei movimenti
	
		importi.push("1,00");
	
		importi.push("-1,00");
	
		importi.push("-60,00");
	
	importi.reverse();
	
	//creo un array con tutte le causali
	
		causali.push("349");
	
		causali.push("500");
	
		causali.push("500");
	
	causali.reverse();
	
	
	//creo un array con tutte le date in cui è presente un movimento
	
		giorni.push("Mon May 08 00:00:00 CEST 2017");
	
		giorni.push("Tue May 09 00:00:00 CEST 2017");
	
		giorni.push("Tue May 09 00:00:00 CEST 2017");
	
		giorni.push("Fri May 26 09:55:12 CEST 2017");
	
	
  	//salvo i saldi del conto dopo ogni movimento
	
  
  	//visualizza tabella movimenti
  	function showTable(){
  		
  		if(!getNodeMovimentiHomepage('#btnTable').hasClass('disabled')){
			getNodeMovimentiHomepage('#movimentiGrafico').hide();
			getNodeMovimentiHomepage('#movimentiTable').show();
			
			getNodeMovimentiHomepage('#schermata').val('tabella');
			getNodeMovimentiHomepage('#btnTable').addClass('disabled');
			if(getNodeMovimentiHomepage('#btnChart').hasClass('disabled'))
				getNodeMovimentiHomepage('#btnChart').removeClass('disabled');
		} else {
			getNodeMovimentiHomepage('#movimentiGrafico').hide();	
		}
  	}
  
  	//disegno grafico
  	function loadGrafico() {
  		if (saldiTotali.length > 0){
			getNodeMovimentiHomepage('#wMessageTable').hide();
			var options = {packages: ['corechart'], callback : drawChart};
		    google.load('visualization', '1.0', options);
		} else{
		    getNodeMovimentiHomepage("#loadingChart").hide();
		    if(!$('#wMessageTable'))
		    	getNodeMovimentiHomepage('#wMessage').css('display', 'block');
		}
  	}
  	
	function loadDataGrafico() {
		$('#schermata').val('chart');
		callSaldoMovimenti();
	}
	
	function caricaGrafico(){
		if(!getNodeMovimentiHomepage('#btnChart').hasClass('disabled')){
			getNodeMovimentiHomepage("#loadingChart").show();
			getNodeMovimentiHomepage('#movimentiTable').hide();
			getNodeMovimentiHomepage('#movimentiGrafico').show();
		
 			if (saldiTotali.length > 0){
				getNodeMovimentiHomepage('#wMessageTable').hide();
				var options = {packages: ['corechart'], callback : drawChart};
		    	google.load('visualization', '1.0', options);
		    } else {
		    	getNodeMovimentiHomepage("#loadingChart").hide();
		    	if(!$('#wMessageTable'))
		    		getNodeMovimentiHomepage('#wMessage').css('display', 'block');
		    }
	    	getNodeMovimentiHomepage('#schermata').val('chart');
	    	getNodeMovimentiHomepage('#btnChart').addClass('disabled');
			if (getNodeMovimentiHomepage('#btnTable').hasClass('disabled')) {
				getNodeMovimentiHomepage('#btnTable').removeClass('disabled');
			}
	    }
	}
	
    function drawChart() {
    	var saldiTotaliArray = [];
    	for(i=0;i<saldiTotali.length;i++){
    		saldiTotaliArray.push(saldiTotali[i].saldo);
    	}
    	var min = Math.min.apply(Math, saldiTotaliArray);
    	var max = Math.max.apply(Math, saldiTotaliArray);
    	
   		var rows = [];
	    var data = new google.visualization.DataTable();
	    data.addColumn('date', 'Day');
	    data.addColumn('number', 'Saldo');
	    //data.addColumn({id:'i0', type:'number', role:'interval'});
        //data.addColumn({id:'i1', type:'number', role:'interval'});
	    //data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
	    if(fido > 0){
		    data.addColumn('number', 'Affidamento');
			data.addColumn({id:'i0', type:'number', role:'interval'});
	        data.addColumn({id:'i1', type:'number', role:'interval'});
		   	data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': false}});
		}
		if(min<0){
			data.addColumn('number', 'Negativo');
			data.addColumn({id:'i0', type:'number', role:'interval'});
	        data.addColumn({id:'i1', type:'number', role:'interval'});
	        data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': false}});
		}
		
		var maxvert = max;
		var minvert = min;
		if(min>fido && fido > 0)
			minvert = fido;
		if(max<fido)
			maxvert = fido;
	
		//creo l array delle righe per disegnare il grafico
		for(i=0;i<saldiTotali.length;i++){
			var temp = [];
			temp.push(new Date(saldiTotali[i].data));
			temp.push(saldiTotali[i].saldo);
			//temp.push(saldiTotali[i].saldo);
			//temp.push(Math.min.apply(Math, saldiTotaliArray));
			//temp.push('<span>' + saldiTotali[i].data + '<br /> Saldo: ' + saldiTotali[i].saldo + '<span>');
			if(fido > 0){
				temp.push(fido);
				temp.push(fido);
				temp.push(0);
				temp.push('Affidamento: ' + fido);
			}
			if(min<0){
				temp.push(0);
				temp.push(0);
				temp.push(minvert-((maxvert-minvert)*0.1));
				if(saldiTotali[i].saldo<0)
					temp.push('Attenzione in data ' + saldiTotali[i].data + ' saldo negativo: ' + saldiTotali[i].saldo);
				else
					temp.push('Saldo in data ' + saldiTotali[i].data + ' uguale a: ' + saldiTotali[i].saldo);
			}
			rows.push(temp);
		}
		
		
	   	data.addRows(rows);
   		
   		var serie = {};
   		serie[0] = {color: '#003b79', visibleInLegend: true, pointSize: 4};
   		if(fido>0){
   			serie[1] = {color: '#ffe538', visibleInLegend: true, pointSize: 0};
   			if(min<0)
      			serie[2] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false, visibleInLegend: false};
   		}else if(min<0){
   			serie[1] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false, visibleInLegend: false};
   		}
   		var options = {
            curveType: 'function',
            lineWidth: 2,
            intervals: { 'style':'area' },
            series: serie,
            legend: 'right',
            tooltip: {isHtml: true},
            animation:{
		        duration: 1000,
		        startup: true,
		        easing: 'out',
		    },
            vAxis: {
            	viewWindow: {
		          max: maxvert+((maxvert-minvert)*0.1),
		          min: minvert-((maxvert-minvert)*0.1),
		        },
		        format: '##,##0.00'
		      },
		     hAxis: {
		     	viewWindow: {
		          max: new Date(saldiTotali[saldiTotali.length-1].data),
		          min: new Date(saldiTotali[0].data),
		        },
		        format:'dd/MM'}
        };
        
        
    	var formatter = new google.visualization.NumberFormat(
         {negativeColor: 'red', negativeParens: true, pattern: '##,##0.00'});
        formatter.format(data, 1);     
        
   		var chart = new google.visualization.LineChart(document.getElementById('movimentiGrafico'));
   		google.visualization.events.addListener(chart, 'ready', function(){
   			
   			getNodeMovimentiHomepage("#loadingChart").hide();
   		});
   		chart.draw(data, options);
    }
    //fine disegno grafico
    
	function hideInfoPanel(toHide) {
		toHide.slideUp(200);
		toHide.removeClass('visible');
	}
	
    $(document).ready(function(){
    	getNodeMovimentiHomepage("#loadingChart").hide();
   		//getNodeMovimentiHomepage('#container').height(250);
		CCNumber = '2';
		if(!firstMov)
			prepareSliderMov();

   		

   		var schermata = 'tabella';
   		getNodeMovimentiHomepage('#schermata').val(schermata);
    	if (schermata == 'chart') {
   			caricaGrafico();
   		} else {
			showTable();			   		
   		}
   	});
</script>