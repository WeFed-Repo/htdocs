
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							08/03/2017	
						</div>
					</div>
					
					
					




<div class="riquadro clearfix">
	
	 
	



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag interessiSpese">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Interessi e spese</span>
 					
				
			
			
		
	</h1>
	
	


	
	
	
	

	








	


	<form id="formDettaglioInteressiConto" method="post" action="/WEBHT/cc/dettaglioInteressiConto.do">
	
	
	<div class="section clearfix">
		<h3 class="titleSection">Rapporto selezionato</h3>
			




  






	
	
		
	








<div class="selezioneCC tabellaSelezioneCC">

	
		<div class="CCselezionato clearfix">
			<!-- C'è anche la sezione saldo -->
			
			
			<!-- C'è solo la sezione intestatario -->
			
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4" id="labelIntestatario">
						Intestato a:
					</span>
					<span class="col-xs-6" id="intestazione">
						COGNOME NOME 
					</span>
					<span class="col-xs-4" id="conto">
						Conto corrente:
					</span>
				    <span class="col-xs-6" id="numero">
				    	00000000	
				    </span>
					
				</div>
				<div class="col-sm-6 col-xs-12">
					<span class="col-xs-4 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-6 hidden-xs" id="conto">
						&nbsp;
					</span>
					<span class="col-xs-4">
				    	Filiale:
				    </span>
				    <span class="col-xs-6" id="agenzia">
				    	MILANO&nbsp;-&nbsp;
							
								
								
									0000
								
							
					</span>
				</div>
			
			
			
				<a id="selezionaCC" class="btnSelezioneCC" href="javascript:void(0);" title="seleziona rapporto" role="button" aria-pressed="false">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto">
				</a>
			
		</div>
	
	<div class="tabSelezioneCC" style="display: block;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<table class="table table-responsive table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
				<tbody>
					
						<tr>
						
							
							
								
									
									
										
											
												<td class="hidden" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2070|207000001788" checked="checked">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000001788" checked="checked" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto corrente 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00000000</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										0000
									
								</td>
							<td headers="intestazioneRapporto">
 								COGNOME NOME 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr>
					
						<tr>
						
							
							
								
									
									
										
											
												<td class="hidden" style="text-align: center">
													<input type="radio" name="codContoCorrente" value="001|2070|207000001794">
												</td>
												<td class="hidden" style="text-align: center"><input type="radio" name="codContoCorrente" value="001|2070|207000001794" onclick="submit();">
												</td>
											
											
										
									
								
							
						

						

							<td headers="tipoRapporto">Conto deposito 
									
										
											
											
												

											
										
									
									
								</td>
							<td headers="ccRapporto">00001794</td>
							<td headers="filialeRapporto" class="hidden-xs">MILANO&nbsp;-&nbsp; 
									
									
										0000
									
								</td>
							<td headers="intestazioneRapporto">
 								Cognome Nome 		
							
							</td>
							<td headers="divisaSaldoDisponibile" class="hidden">
								
							</td>
							<td headers="divisaSaldoContabile" class="hidden">
								
							</td>
							
							
							
							<td class="hidden">&nbsp;</td>
						</tr>
					
				</tbody>
					<thead>
						<tr class="hover">
							
								
								
									
										
											<th class="hidden" style="width: 0px;">&nbsp;</th>
											<th class="hidden" style="width: 0px;">&nbsp;</th>
										
										
									
								
							
							<th headers="tipoRapporto" class="sorting_asc" style="width: 0px;">Tipo rapporto</th>
							<th headers="ccRapporto" class="sorting" style="width: 0px;">Numero</th>
							<th headers="filialeRapporto" class="sorting hidden-xs" style="width: 0px;">Filiale</th>
							<th headers="intestazioneRapporto" class="sorting" style="width: 0px;">Intestazione</th>
							
							<th headers="divisaSaldoDisponibile" class="hidden" style="width: 0px;"> </th>
							<th headers="divisaSaldoContabile" class="hidden" style="width: 0px;"> </th>
							
							
							
							
							
							<th class="hidden" style="width: 0px;">&nbsp;</th>
							
						</tr>
					</thead>
			</table>
		</div>
	</div>
</div>
<!-- .selezioneCC.tabellaSelezioneCC -->
<script type="text/javascript">

$(document).ready(function(){

    //se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
    
	var tr = $("input[name='codContoCorrente']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			
			popolaSelezioneCC(contoSelezionato);
     
     
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
		
			
					<p>
						I dati di seguito riportati sono quelli in essere alla data del <b>8		
								marzo
								2017</b>
					</p>
				
			
		<div class="form-field-input col-sm-7 col-xs-12 pull-right">
					<h3 class="titleSection">
						
						








		
			Situazione Interessi
		
		
		
		


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
								<th colspan="2">Descrizione</th>
								<th class="oRight">Importo</th>
							</tr>
						</thead>
						<tbody>                                                          
							<tr>
								<td class="hidden-xs">&nbsp;</td>
								<td class="oLeft">Interessi maturati (a credito)</td>                     
								<td class="oLeft"></td>
								<td class="oRight">0,00</td>                                   
							</tr>                                                            
							
								<tr>                                                    
									<td class="hidden-xs">&nbsp;</td>
									<td class="oLeft">Interessi dovuti (a debito)</td>
									<td class="oLeft"></td>                                     
									<td class="oRight">0,00</td>                                 
								</tr>
								<tr class="tfoot">
									<td class="hidden-xs">&nbsp;</td>                                                     
									<td colspan="2" class="oLeft">TOTALE NETTO (a credito - a debito)</td>                                     
									<td class="oRight bold">0,00</td>                                 
								</tr>                                                            
														
							<tr>                                                    
								<td class="hidden-xs">&nbsp;</td>
								<td class="oLeft">Altre spese</td>                                     
								<td class="oLeft"></td>
								<td class="oRight">0,00</td>                                 
							</tr>                                                            
						</tbody>                                                         
						<tfoot>                                                          
							<tr>
								<th class="hidden-xs">&nbsp;</th>                                                         
								<th colspan="2" class="oLeft">Sbilancio</th>
								
									
										<th class="importo positivo oRight">0,00</th>	
									
									
								
							</tr>                                                            
						</tfoot>                                                         
					</table>
			
	</div>
	<div class="form-field-input col-sm-5 col-xs-12 pull-left">
			<h3 class="titleSection">
				Ripartizione interessi e spese
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
</script>
<div id="container">
	<div id="columnchart_values"></div>
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
	<div class="form-field-input col-xs-12"></div>
</div>
<div class="padding-left-xs-10 padding-bottom-xs-10">
	I dati sopra riportati sono riferiti al corrente periodo di liquidazione e verranno ufficializzati dalla Banca con l'invio dell'Estratto Conto periodico.
</div>