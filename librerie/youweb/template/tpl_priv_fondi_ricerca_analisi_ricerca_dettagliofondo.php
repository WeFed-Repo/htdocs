<div class="breadcrumb">
	<span>Investimenti</span>
</div>
<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo_youweb.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		21/06/2017	
	</div>
</div>
<script type="text/javascript">
window.apriDialogOpera = function(element) {
	$("#dialogFondo").dialog({
		title:'Opera',
		minHeight: 100,
		position: {
		my: "left top",
        at: "left bottom",
        of: element,
		offset: "12 0"}
	});
 	$("#dialogFondo").dialog('open');
}

showSection = function(element, section) {
	$(".context-buttons a").each(function(i, el){
		$(el).removeClass("disabled");
	});
	$(element).addClass("disabled");
	
	$(".activeSection").each(function(i, el){
		$(el).addClass("hidden");
	});
	$("#"+section).removeClass("hidden");
	if (section=="indicatori") {
		$("#graficoAnalisiVolatRendim").find("iframe").each(function(){ $(this).attr('src', $(this).attr('src'));});
	}
}

var codAreaFinanza = '00380760';
$(function() {
	var h = 0;
	$(".row-height .boxDefault").each(function(id, el){
		if ($(el).outerHeight()>h) h=$(el).outerHeight(); 
	});
	$(".row-height .boxDefault").each(function(id, el){
		$(el).height(h); 
	});
	
	// graficoPerformanceAnnua
	/*window.setTimeout(function() {
		$('<iframe>', {
			id: 'PERF_BAR',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico.php" + "?chartType=PERF_BAR&codeType=BO&instrumentList="+codAreaFinanza
		}).appendTo("#graficoPerformanceAnnua");
	}, 100);
	
	// graficoAndamentoNav
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'NAV',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico2.php" + "?chartType=NAV&codeType=BO&instrumentList="+codAreaFinanza
		}).appendTo("#graficoAndamentoNav");
	}, 200);
	
	// graficoPerformance
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'PERF_LINE',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico.php" + "?chartType=PERF_LINE&codeType=BO&instrumentList="+codAreaFinanza
		}).appendTo("#graficoPerformance");
	}, 300);
	
	// graficoAndamentoVolatilita
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'VOLAT',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico.do" + "?chartType=VOLAT&codeType=BO&instrumentList="+codAreaFinanza
		}).appendTo("#graficoAndamentoVolatilita");
	}, 400);
	
	// graficoAnalisiVolatRendim
	window.setTimeout(function() {
		$('<iframe>', {
			id: 'SCAT_PERF_VOLAT',
			style: "width:100%;height:300px;",
			frameborder: 0,
			src: "/WEBHT/investimenti/fondiGrafico.do" + "?chartType=SCAT_PERF_VOLAT&codeType=BO&instrumentList="+codAreaFinanza
		}).appendTo("#graficoAnalisiVolatRendim");
	}, 500);*/
});
</script>
<div id="dialogFondo" style="display:none;" class="dialogOpera">
	<div class="ui-dialog-content bs-example form-horizontal">
		<ul>
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiSottoscrizioneFondo.do', 'codAreaFinanza', '00380760');$('#dialogFondo').dialog('close');">Sottoscrivi</a></li>
			<li class="ui-menu-item"><a href="javascript: void(0);" onclick="goToPage('/investimenti/fondiConfrontoFondiInit.do', 'fondoInput', '00380760');$('#dialogFondo').dialog('close');">Confronto</a></li>
			<li class="ui-menu-item"><a href="javascript: void(0);" onclick="openAjaxDialog('/investimenti/fondiPreferitiAggiungiForm.do', 'codAreaFinanza', '00380760');$('#dialogFondo').dialog('close');">Aggiungi ai preferiti</a></li>
			<li class="ui-menu-item"><a href="javascript:void(0);" onclick="goToPage('/investimenti/fondiReportPdfServlet', 'codAreaFinanza', '00380760');$('#dialogFondo').dialog('close');">Report PDF</a></li>
		</ul>
	</div>
</div>

<div class="riquadro clearfix">
	<div class="clearfix">
		<style>
		.imgSrv{
			float: none;
		}
		</style>
		<h1><div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div><span>Dettaglio Fondo</span></h1>
		<span class="hidden-sm hidden-md hidden-lg">
			<img src="/HT/IMAGES/nGrafica/mobile-menu-pdf.png" id="ico-documenti" style="display:none">
			<span id="documenti"><h3 class="descrizione" style="color:#666">Documenti</h3></span>
		</span>
		<div class="col-xs-12 hidden-xs hidden-print">
		</div>
	</div>
	<div class="section clearfix">
		
		<div class="row" style="margin-bottom:20px; margin-top:20px;">
			<div class="col-xs-12 col-sm-6">
				<button title="Opera" class="btn-opera button" onclick="apriDialogOpera(this)" style="vertical-align: middle"></button>
				<strong>GESTIELLE ABSOLUTE RETURN -PT</strong>
			</div>
			<div class="col-xs-12 col-sm-6" style="padding-right: 0px;">
					<form name="fondiSottoscrizioneForm" method="post" action="/WEBHT/investimenti/fondiSottoscrizioneFondo.do">
						<input type="hidden" name="codAreaFinanza" value="00380760">
						<div class="pull-right">
						<input type="submit" value="Sottoscrivi" class="button btn btn-primary">
						</div>
					</form>
			</div>
		</div>
		<div class="pulsanti">
			<div class="context-buttons pull-right">
				<a href="javascript: void(0);" onclick="showSection(this, 'datiGenerici')" title="Tabella" id="btnTable" class="btnTable disabled" role="button"> </a>
				
				<a href="javascript: void(0);" onclick="showSection(this, 'rendimento')" title="Rendimento" id="btnRendimento" class="btnRendimento" role="button"> </a>
				<a href="javascript: void(0);" onclick="showSection(this, 'indicatori')" title="Indicatori" id="btnIndicatori" class="btnIndicatori" role="button"> </a>
			</div>
		</div>
		<h3 class="titleSection">Dati Fondo:</h3>
	</div>
	<div class="section clearfix activeSection" id="datiGenerici">
		<h3 class="titleSection">Dettagli</h3>
		<div class="row-height margin-bottom20 margin-top20">
			<div class="col-sm-6 col-xs-12 col-height">
				<div class="inside inside-full-height">
					<div class="boxDefault clearfix content col-xs-12" style="margin-bottom: 0px; height: 272px;">
						<h1 class="centered-title" style="width: 90%">Dati Generali</h1>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Tipologia strumento:</div>
							<div class="col-xs-6 col-sm-6"><strong>FONDI PIR <a href="javascript:OpenHelp('/template/modale_pir.html')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a></strong></div>
						</div>
						<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header clearfix">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Societ&agrave;:</div>
							<div class="col-xs-6 col-sm-6"><strong>Aletti Gestielle Sgr</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Categoria:</div>
							<div class="col-xs-6 col-sm-6">
								<strong>Flessibili</strong>
							</div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">ISIN:</div>
							<div class="col-xs-6 col-sm-6"><strong>IT0000380763</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6" id="benchmark">Benchmark:</div>
							<div class="col-xs-6 col-sm-6"><strong>
							--
							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Proventi:</div>
							<div class="col-xs-6 col-sm-6"><strong>Cumulative</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Data avvio fondo</div>
							<div class="col-xs-6 col-sm-6"><strong>03/01/2000</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Classe</div>
							<div class="col-xs-6 col-sm-6"><strong>--</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Investimento min. iniziale:</div>
							<div class="col-xs-6 col-sm-4 oRight"><strong>
								
								
								
								




	
	
	
		500,00 EUR
	
 
							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom20">
							<div class="col-xs-6 col-sm-6">Investimento min. successivo:</div>
							<div class="col-xs-6 col-sm-4 oRight"><strong>
								
								
								
								




	
	
	
		50,00 EUR
	

							</strong></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-height">
				<div class="inside inside-full-height">
					<div class="boxDefault clearfix content col-xs-12" style="margin-bottom: 0px; height: 272px;">
						<h1 class="centered-title" style="width: 90%">Valore e commissioni</h1>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">NAV</div>
							<div class="col-xs-6 col-sm-4 oRight"><strong>
								
								
								
								




	
	
	
		16,760 EUR
	

							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Data NAV:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								
								




	
	16/06/2017
	

							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Ultima performance:</div>
							<div class="col-xs-6 col-sm-6">
								
								
								
								<strong class="positivo">
								0,02% 
							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Commissioni d'ingresso:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								<span class="resume negativo">
								3% per ordini Online</span>
								
							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6" id="commissioniGestione">Comm. di gestione annuale:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								
								




	
	
	
		1,50%
	

							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Comm. di uscita:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								
								




	
	
	
		0,00%
	

							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Comm. di switch:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								
								




	
	
	
		0,00%
	

							</strong></div>
						</div>
						<div class="col-xs-12 margin-bottom5">
							<div class="col-xs-6 col-sm-6">Spese correnti:</div>
							<div class="col-xs-6 col-sm-6"><strong>
								
								
								
								




	--
	
	

							</strong></div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		<h3 class="titleSection">
			 
			








		
			Particolarit&agrave; PAC
		
		
		
		


		</h3>
		<!-- Dettaglio PAC -->
			<div class="row margin-top20" style="margin-bottom: 20px;">
				<div class="col-sm-6 col-xs-12 col-height">
					<div class="inside inside-full-height">
						<div class="boxDefault clearfix content col-xs-12" style="margin-bottom:15px;">
							<h1 class="centered-title" style="width: 90%">Piano di accumulo di capitale</h1>
							<div class="col-xs-12 margin-bottom5">
								<div class="col-xs-6 col-sm-6">Importo minimo rata:</div>
								<div class="col-xs-6 col-sm-4 oRight"><strong>
									
									
									
									




	
	
	
		50,00 EUR
	

								</strong></div>
							</div>
							<div class="col-xs-12 margin-bottom5">
								<div class="col-xs-6 col-sm-6">Versamento minimo iniziale:</div>
								<div class="col-xs-6 col-sm-6"><strong>1
									
										
											 rata	
										
										
									
								</strong></div>
							</div>
							<div class="col-xs-12 margin-bottom5">
								<div class="col-xs-6 col-sm-6">Versamento rata:</div>
								<div class="col-xs-6 col-sm-6" style="text-transform: capitalize;">
									
										<input type="hidden" name="periodicita1" value="bimestrale" id="periodicita1">
										
										<p id="period" style="font-weight: bold;">bimestrale, mensile, quadrimestrale, semestrale, trimestrale</p>
									
										<input type="hidden" name="periodicita2" value="mensile" id="periodicita2">
										
										<p id="period"></p>
									
										<input type="hidden" name="periodicita3" value="quadrimestrale" id="periodicita3">
										
										<p id="period"></p>
									
										<input type="hidden" name="periodicita4" value="semestrale" id="periodicita4">
										
										<p id="period"></p>
									
										<input type="hidden" name="periodicita5" value="trimestrale" id="periodicita5">
										<input type="hidden" name="kLast" value="5" id="kLast">
										<p id="period"></p>
									
								</div>
							</div>
							<div class="col-xs-12 margin-bottom5">
								<div class="col-xs-6 col-sm-6">Durata piano:</div>
								<div class="col-xs-6 col-sm-6">
 									
 										<input type="hidden" name="durata1" value="5" id="durata1">
 										
									
 										<input type="hidden" name="durata2" value="10" id="durata2">
 										
									
 										<input type="hidden" name="durata3" value="15" id="durata3">
 										<input type="hidden" name="iLast" value="3" id="iLast">
									
									<p id="dur" style="font-weight: bold;">5-10-15 Anni</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12 col-height">
				</div>
				
			</div>
		
		
		<div id="graficoPerformanceAnnua" class="margin-bottom20 hidden-xs"><iframe id="PERF_BAR" style="width:100%;height:300px;" frameborder="0" src="/WEBHT/investimenti/fondiGrafico.php?chartType=PERF_BAR&amp;codeType=BO&amp;instrumentList=00380760"></iframe></div>
		<div id="graficoAndamentoNav" class="margin-bottom20 hidden-xs"><iframe id="NAV" style="width:100%;height:300px;" frameborder="0" src="/WEBHT/investimenti/fondiGrafico2.php?chartType=NAV&amp;codeType=BO&amp;instrumentList=00380760"></iframe></div>
	</div>
	
	<div class="section clearfix activeSection hidden" id="rendimento">
		<h3 class="titleSection">
			 
			








		
			Rendimento
		
		
		
		


		</h3>
		
		<div class="col-sm-12 col-xs-12">
		<div class="margin-top10">
			<div class="table-responsive tabSelezioneCarte" style="display: block;">
				<div class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer home" id="DataTables_Table_0" role="grid">
						<thead>
							<tr class="hover" role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Performance</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">3 mesi</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">6 mesi</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">1 anno</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">3 anni</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">YTD</th></tr>
						</thead>
						<tbody>
							
							
							
							
						<tr role="row" class="odd">
								<td class="oCenter">
									Fondo
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											1,02%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											2,83%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											10,58%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											9,24%
										
										
																		
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											2,72%
										
										
									
									</strong>
								</td>
							</tr><tr role="row" class="even"> <!-- odd, even -->
								<td class="oCenter">
									Indice di categoria
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											1,45%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											2,27%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											6,21%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											5,22%
										
										
																		
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											2,21%
										
										
									
									</strong>
								</td>
							</tr><tr role="row" class="odd"> <!-- odd, even -->
								<td class="oCenter">
									Performance relativa
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											-0,26%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											0,54%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											4,10%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											3,88%
										
										
																		
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											0,52%
										
										
									
									</strong>
								</td>
							</tr><tr class="even" role="row"> <!-- odd, even -->
								<td class="oCenter">
									Media categoria
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											0,14%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											0,65%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											4,06%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											6,37%
										
										
																		
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											1,05%
										
										
									
									</strong>
								</td>
							</tr></tbody>
					</table></div>
				</div>
			</div>
			
			<div id="graficoPerformance" class="margin-bottom20 hidden-xs"><iframe id="PERF_LINE" style="width:100%;height:300px;" frameborder="0" src="/WEBHT/investimenti/fondiGrafico.php?chartType=PERF_LINE&amp;codeType=BO&amp;instrumentList=00380760"></iframe></div>
		</div>
		</div>
	</div>
	
	<div class="section clearfix activeSection hidden" id="indicatori">
		<h3 class="titleSection">
			 
			








		
			Indicatori
		
		
		
		


		</h3>
		
		<div class="col-sm-12 col-xs-12">
		<div class="margin-top10">
			<div class="table-responsive tabSelezioneCarte" style="display: block;">
				<div class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer home" id="DataTables_Table_1" role="grid">
						<thead>
							<tr class="hover" role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Rischio / Rendimento</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Fondo</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Benchmark di categoria</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Media di categoria</th></tr>
						</thead>
						<tbody>
							
							
							
						<tr role="row" class="odd"> <!-- odd, even -->
								<td class="oCenter" id="volatilita">
									Volatilit&agrave; annua
								</td>
								<td class="oCenter">
									<strong>
									
										
										--
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
										--
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
										--
									
									</strong>
								</td>
							</tr><tr class="even" role="row"> <!-- odd, even -->
								<td class="oCenter">
									Volatilit&agrave; settimanale
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											7,59%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											6,61%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											6,47%
										
										
									
									</strong>
								</td>
							</tr><tr class="odd" role="row"> <!-- odd, even -->
								<td class="oCenter" id="sharpe">
									Sharpe ratio
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											-0,26%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											-0,25%
										
										
									
									</strong>
								</td>
								<td class="oCenter">
									<strong>
									
										
											
											2,44%
										
										
									
									</strong>
								</td>
							</tr></tbody>
					</table></div>
				</div>
			</div>
		</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer home" id="DataTables_Table_2" role="grid">
							<thead>
								<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Fondo</th></tr>
							</thead>
							<tbody>
								
								
								
								
							<tr role="row" class="odd"> <!-- odd, even -->
									<td class="oCenter" id="trackingError">
										Tracking error volatility
									</td>
									<td class="oCenter">
										<strong>
										
											
												
												2,03%
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="even"> <!-- odd, even -->
									<td class="oCenter" id="informationRatio">
										Information ratio
									</td>
									<td class="oCenter">
										<strong>
										
											
												
												0,25%
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="odd"> <!-- odd, even -->
									<td class="oCenter" id="rquadro">
										R-Quadro
									</td>
									<td class="oCenter">
										<strong>
										
											
												
												0,88%
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="even"> <!-- odd, even -->
									<td class="oCenter" id="rating">
										Rating Deus
									</td>
									<td class="oCenter">
										<strong>
										
											
												3
											
											
										
										</strong>
									</td>
								</tr></tbody>
						</table></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<div class="margin-top10">
				<div class="table-responsive tabSelezioneCarte" style="display: block;">
					<div class="dataTables_wrapper no-footer">
						<div id="DataTables_Table_3_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer home" id="DataTables_Table_3" role="grid">
							<thead>
								<tr class="hover" role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;"></th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;">Fondo</th></tr>
							</thead>
							<tbody>
								
								
								
								
							<tr role="row" class="odd"> <!-- odd, even -->
									<td class="oCenter" id="alpha">
										Alpha di Jensen
									</td>
									<td class="oCenter">
										<strong>
										
											
												
												-0,29%
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="even"> <!-- odd, even -->
									<td class="oCenter" id="beta">
										Beta
									</td>
									<td class="oCenter">
										<strong>
										
											
												1,32
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="odd"> <!-- odd, even -->
									<td class="oCenter" id="rischio">
										Rischio
									</td>
									<td class="oCenter">
										<strong>
										
											
												3
											
											
										
										</strong>
									</td>
								</tr><tr role="row" class="even"> <!-- odd, even -->
									<td class="oCenter">
										Indice di Sortino
									</td>
									<td class="oCenter">
										<strong>
										
											
												-0,05
											
											
										
										</strong>
									</td>
								</tr></tbody>
						</table></div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="graficoAndamentoVolatilita" class="margin-bottom20 hidden-xs"><iframe id="VOLAT" style="width:100%;height:300px;" frameborder="0" src="/WEBHT/investimenti/fondiGrafico.php?chartType=VOLAT&amp;codeType=BO&amp;instrumentList=00380760"></iframe></div>
		<div id="graficoAnalisiVolatRendim" class="margin-bottom20 hidden-xs"><iframe id="SCAT_PERF_VOLAT" style="width:100%;height:300px;" frameborder="0" src="/WEBHT/investimenti/fondiGrafico2.php?chartType=SCAT_PERF_VOLAT&amp;codeType=BO&amp;instrumentList=00380760"></iframe></div>
	</div>
</div>






<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, n&eacute; attivit&agrave; di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br> Gli indicatori di volatilit&agrave; / rendimento sono calcolati da Deus Technology.<br> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonch&eacute; sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br></p>
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

<script>
$(document).ready(function() {
	var stringDurata = $('#durata'+1).val();
	for(i = 2; i <= parseInt($('#iLast').val()); i++)	{
		stringDurata = stringDurata + "-" + $('#durata'+i).val();
	}
	$('#dur').text(stringDurata + " Anni").css("font-weight","Bold");
	
	var stringPeriod = $('#periodicita'+1).val();
	for(i = 2; i <= parseInt($('#kLast').val()); i++)	{
		stringPeriod = stringPeriod + ", " + $('#periodicita'+i).val();
	}
	$('#period').text(stringPeriod).css("font-weight","Bold");
});
</script>
