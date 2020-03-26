					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							26/05/2017	
						</div>
					</div>
					
					
					
					





<script type="text/javascript">
var codAreaFinanza = ["42898810","44225100"];
var instrumentList = "";
$(codAreaFinanza).each(function (i, e){
	if (instrumentList!="") instrumentList+="&";
		instrumentList += "instrumentList"+"=" + e;
});
$(function() {
	// graficoPerformanceAnnua
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'PERF_BAR',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/template/investimenti/fondiGrafico.php" + "?chartType=PERF_BAR&codeType=BO&"+instrumentList
		}).appendTo("#graficoPerformanceAnnua");
	}, 100);
	// graficoPerformance
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'PERF_LINE',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/template/investimenti/fondiGrafico.php" + "?chartType=PERF_LINE&codeType=BO&"+instrumentList
		}).appendTo("#graficoPerformance");
	}, 200);
});
</script>


<div class="riquadro clearfix">
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Confronto</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	








	


	
	
	
	
	




<script type="text/javascript">
window.apriDialogOperaCustom = function(element, codAreaFinanza) {
	$("#dialogFondo"+codAreaFinanza).dialog({
		title:'Opera',
		minHeight: 100,
		position: {
		my: "left top",
        at: "left bottom",
        of: element,
		offset: "12 0"}
	});
	$("#dialogFondo"+codAreaFinanza).closest('.ui-dialog').addClass('operaModale');
}

var fondiWidget = new Array();
fondiWidget.push('/investimenti/fondiReportPdfServlet');
fondiWidget.push('codAreaFinanza');fondiWidget.push('42898810');fondiWidget.push('codAreaFinanza');fondiWidget.push('44225100');
window.getReport = function() {
	goToPage.apply(this, fondiWidget); //('/investimenti/fondiReportPdfServlet', 'codAreaFinanza', '${codAreaFinanza}');
}
</script>


<div id="dialogFondo42898810" style="display:none;" class="dialogOpera">
	<div class="ui-dialog-content bs-example form-horizontal">
		<ul>
			
				
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiSottoscrizioneFondo.do', 'codAreaFinanza', '42898810');$('#dialogFondo42898810').dialog('close');">Sottoscrivi</a></li>
				
				
			
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiDettaglioFondo.do', 'codAreaFinanza', '42898810');$('#dialogFondo42898810').dialog('close');">Dettaglio fondo</a></li>
			
				
				
					<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiConfrontoFondiCancella.do', 'fondoInput', '42898810');$('#dialogFondo42898810').dialog('close');">Cancella</a></li>
				
			
			<li class="ui-menu-item"><a href="javascript: void(0);" onclick="openAjaxDialog('/investimenti/fondiPreferitiAggiungiForm.do', 'codAreaFinanza', '42898810');$('#dialogFondo42898810').dialog('close');">Aggiungi ai preferiti</a></li>
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="getReport();$('#dialogFondo42898810').dialog('close');">Report PDF</a></li>
		</ul>
	</div>
</div>


<div id="dialogFondo44225100" style="display:none;" class="dialogOpera">
	<div class="ui-dialog-content bs-example form-horizontal">
		<ul>
			
				
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiSottoscrizioneFondo.do', 'codAreaFinanza', '44225100');$('#dialogFondo44225100').dialog('close');">Sottoscrivi</a></li>
				
				
			
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiDettaglioFondo.do', 'codAreaFinanza', '44225100');$('#dialogFondo44225100').dialog('close');">Dettaglio fondo</a></li>
			
				
				
					<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiConfrontoFondiCancella.do', 'fondoInput', '44225100');$('#dialogFondo44225100').dialog('close');">Cancella</a></li>
				
			
			<li class="ui-menu-item"><a href="javascript: void(0);" onclick="openAjaxDialog('/investimenti/fondiPreferitiAggiungiForm.do', 'codAreaFinanza', '44225100');$('#dialogFondo44225100').dialog('close');">Aggiungi ai preferiti</a></li>
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="getReport();$('#dialogFondo44225100').dialog('close');">Report PDF</a></li>
		</ul>
	</div>
</div>


<div class="section clearfix">
	<h3 class="titleSection">
		 
		








		
			Confronto
		
		
		
		


	</h3>
	<div class="row" style="margin-bottom:20px; margin-top:20px;">
	
		<div class="col-xs-12 col-sm-8 margin-bottom20">
			<button title="Opera" class="btn-opera button" onclick="apriDialogOperaCustom(this, '42898810')" style="vertical-align: middle"></button>
			<strong>BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC</strong>
		</div>
	
		<div class="col-xs-12 col-sm-8">
			<button title="Opera" class="btn-opera button" onclick="apriDialogOperaCustom(this, '44225100')" style="vertical-align: middle"></button>
			<strong>PICTET-SECUR-HR EUR SHS -HR EUR- CAPITALISATION</strong>
		</div>
	
	</div>
</div>
	
<!-- DETTAGLI -->
	<div class="section clearfix">
		<h3 class="titleSection">
			 
			








		
			Dettagli
		
		
		
		


		</h3>
		<div class="col-sm-12 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<table class="table table-striped dataTable no-footer home">
							<thead>
								<tr class="hover">
									<th width="20%"></th>
									
										
									<th width="40%"><strong>BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC</strong></th>
									
										
									<th width="40%"><strong>PICTET-SECUR-HR EUR SHS -HR EUR- CAPITALISATION</strong></th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Societ&agrave;:</td>
									
										
									<td class="oCenter"><strong>BlackRock Global Funds SICAV</strong></td>
									
										
									<td class="oCenter"><strong>Pictet SICAV</strong></td>
									
								</tr>
								<tr>
									<td>Categoria:</td>
									
										
									<td class="oCenter"><strong>Azionari paesi emergenti</strong></td>
									
										
									<td class="oCenter"><strong>Azionari altri settori</strong></td>
									
								</tr>
								<tr>
									<td>Proventi:</td>
									
										
									<td class="oCenter"><strong>Cumulative</strong></td>
									
										
									<td class="oCenter"><strong>Cumulative</strong></td>
									
								</tr>
								<tr>
									<td>Investimento min. iniziale:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		2.000,00 EUR
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		1.000,00 EUR
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Investimento min. successivo:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		1.000,00 EUR
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		1.000,00 EUR
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="benchmark">Benchmark:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	100% MSCI AC Asia Pacific ex Japan Net TR EUR
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	100% MSCI World
	

										</strong></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<!-- VALORE E COMMISSIONI -->
	<div class="section clearfix">
		<h3 class="titleSection">
			 
			








		
			Valore e commissioni
		
		
		
		


		</h3>
		<div class="col-sm-12 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<table class="table table-striped dataTable no-footer home">
							<thead>
								<tr class="hover">
									<th width="20%"></th>
									
										
									<th width="40%"><strong>BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC</strong></th>
									
										
									<th width="40%"><strong>PICTET-SECUR-HR EUR SHS -HR EUR- CAPITALISATION</strong></th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NAV</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		14,99 EUR
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		170,76 EUR
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Commissioni d'ingresso:</td>
									
										
									<td class="oCenter"><strong>
										<span class="resume" style="color:red;">
											
											
											
											




	
	
	
		3,00% per ordini Online
	

										</span> 
										</strong></td>
									
										
									<td class="oCenter"><strong>
										<span class="resume" style="color:red;">
											
											
											
											




	
	
	
		3,00% per ordini Online
	

										</span> 
										</strong></td>
									
								</tr>
								<tr>
									<td id="commissioniGestione">Comm. di gestione annuale:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		2,00%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		2,30%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Comm. di uscita:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Comm. di switch:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Spese correnti:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,00%
	

										</strong></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
<!-- RENDIMENTO -->
	<div class="section clearfix">
		<h3 class="titleSection">
			 
			








		
			Rendimento
		
		
		
		


		</h3>
		<div class="col-sm-12 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<table class="table table-striped dataTable no-footer home">
							<thead>
								<tr class="hover">
									<th width="20%"></th>
									
										
									<th width="40%"><strong>BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC</strong></th>
									
										
									<th width="40%"><strong>PICTET-SECUR-HR EUR SHS -HR EUR- CAPITALISATION</strong></th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Da inizio anno (YTD):</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		5,79%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		12,76%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>3 mesi</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		-2,35%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		5,77%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>6 mesi</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		6,09%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		10,77%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>1 anno</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		25,54%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		7,61%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>3 anni</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		31,49%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	--
	
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Media della categoria YTD:</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		7.389,81%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		4,52%
	

										</strong></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
<!-- UNDICATORI -->
	<div class="section clearfix">
		<h3 class="titleSection">
			 
			








		
			Indicatori
		
		
		
		


		</h3>
		<div class="col-sm-12 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<table class="table table-striped dataTable no-footer home">
							<thead>
								<tr class="hover">
									<th width="20%"></th>
									
										
									<th width="40%"><strong>BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC</strong></th>
									
										
									<th width="40%"><strong>PICTET-SECUR-HR EUR SHS -HR EUR- CAPITALISATION</strong></th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="volatilita">Volatilit&agrave; annua</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		12,86%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		10,64%
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Volatilit&agrave; settimanale</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		18,34%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		11,81%
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="sharpe">Sharpe ratio</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,47%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		1,04%
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="trackingError">Tracking error volatility</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		5,09%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		8,53%
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="rquadro">R-Quadro</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,85%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,54%
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="rating">Rating Deus</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	4
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	--
	
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="alpha">Alpha di Jensen</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		0,07%
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	
	
		-1,38%
	

										</strong></td>
									
								</tr>
								<tr>
									<td id="beta">Beta</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	0,93
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	2,38
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Indice di Sortino</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	0,20
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	0,32
	

										</strong></td>
									
								</tr>
								<tr>
									<td>Rischio</td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	5
	

										</strong></td>
									
										
									<td class="oCenter"><strong>
										
										
										
										




	
	4
	

										</strong></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="graficoPerformance" class="margin-bottom20"></div>
	<div id="graficoPerformanceAnnua" class="margin-bottom20"></div>
</div>





<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, n&egrave; attivit&agrave; di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br/> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br/> Gli indicatori di volatilit&agrave; / rendimento sono calcolati da Deus Technology.<br/> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br/> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonch&egrave; sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br/></p>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<span><strong>Dati forniti da:</strong></span>
			<img src="/HT/IMAGES/FONDICOMUNI/telekurs.png" width="160px">
		</div>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<div class="col-xs-12 col-sm-12" style="text-align: right;">
				<span><strong>Dati elaborati da:</strong></span>
				<img src="/HT/IMAGES/FONDICOMUNI/deus.png" width="160px">
			</div>
		</div>
	</div>
</div>