<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui_ng.min.css" />
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.min.css"  />
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css"  />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-main.css?v=161220"  />
	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xxs-mobile.css?v=161220" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xs-mobile.css?v=161220" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-sm-desktop.css?v=161220" />
	<link media="print" rel="stylesheet" type="text/css" href="/HT/fe/css/print.css" />
	<!--[if IE 8]>
	<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/fe/css/ie8.css" />
	<![endif]-->
	<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui.jqgrid_ng.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui.multiselect.css" />
	<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.jqgrid_ng.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.multiselect.css" />
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-migrate-1.0.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/ie10-viewport.js"></script> 
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/jsapi.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.dateIT.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.altImg.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.formattedNum.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.natural.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.form.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.blockUI.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.selectToUISlider.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/html5.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161220"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe//js/script/struttura.js"></script>

	<script>


	$(document).ready(function(e) {
		var resizeTimer;
		var servVal = false;
		$(window).resize(function () {
			if ( servVal != isMobile() && location.href.search('login') ==-1) {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(function() {
					
					$.post(getPathContext()+'/common/refreshBreakpoint.do', { device: getBreakpoint()}, function(response, status) { 
						servVal = isMobile();
					});
				}, 500);
			}
		});
	});
	</script>

	<script type="text/javascript">
	function getPathImages() { return "/HT/IMAGES/";}
	function getPathContext() {	return "/WEBHT";}
	function getKBanca() {	return "1";}
	function getLineaTol() {	return "IDT";}
	</script>

	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.locale-it.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.jqGrid.js"></script>
	<script type="text/javascript" src="/HT/JS/script/funzioniInvestimenti.js?v=161220"></script>
	<script type="text/javascript" src="/HT/JS/HashMap.js"></script>
	<script type="text/javascript" src="/HT/JS/script/funzioniJQGrid.js?v=161220"></script>
	<script type="text/javascript" src="/HT/JS/Highcharts/cs/chartserverHS.min.js"></script>
	<script type="text/javascript" src="/HT/JS/Highcharts/js/highstock.js"></script>
	<script type="text/javascript" src="/HT/JS/lightstreamer.js"></script>
	<script type="text/javascript" src="/HT/JS/funzioniPush.js"></script>
	



	
	<title>YouWeb</title>
	<style>
		html {
    		background: none repeat scroll 0 0 transparent;
    	}
	</style>
	</head>
<body style="width: auto;">
<div><a id="top"></a></div>
<div id="gridBody">
<div class="contentFull riquadro clearfix " style="margin:10px">
	
	
	



<script type="text/javascript">
		//prima invocazione di default intraday
		paramPerGraficoDefault();
		
		function paramPerGraficoDefault(){
		    var params = new Array();
		   // params.redir_host = CHART_SERVER_URL;
		    params.out = 'js';
		    params.s = 'MTA.A2A';
		    params.d = '1M';//da modificare in intraday
		    params.tf = '1D';
		    params.st = 'line';
		    params.l='top';
		    params.pc = '258025';
		    params.c = '258025';
		
			aggiornaGrafici(params,'iChartA');
			
			//grafico volumi
			params.l='bottom';
			params.ni='1';
			params.i1='volume';
			params.stjs = 'bar';
			$('#iChartA').show();
			aggiornaGrafici(params,'iChartA');
		}
						
		////// gestire le opzioni del grafico/////////
		function paramPerGraficoStorico(){
		    var params = new Array();
		   	//tipo di grafico interattivo
		    params.out = 'js';
		    //symbol del titolo da visulalizzare 
		    params.s = 'MTA.A2A';
		    //colori grafico principale
		     params.pc = '258025';
		    params.c = '258025';
		    
		    //intervallo temporale e campionamento
		    var periodo = $('#periodo').val();
		    params.d = periodo
		    //ritardo
			params.dl = 0;
		    //campionamento intraday
		    var campionamento = $('#campionamento').val();
		    if(campionamento != '-1') {
		    	params.tf = campionamento;
		    }
		    else{
		    	if(periodo === '1D'){
		    		//intraday default 1 minuto
			    	params.tf = '1m';
		    	}else{
		    		//storico default 1 giorno
			    	params.tf = '1D';
		    	}
		    }
		    
		    //tipo di grafico
		    var stile = $('#formato').val();
	    	params.stjs = stile;
		    if(stile === 'candlestick'){
		     	params.st = 'candlestick';
		    }else{
		     	params.st = 'line';
		    }
		    
		    var media = $('#medieMobili').val()
   		    var indici = $('#indici').val()
		    var confronto = $('#confronto').val()
		    
 			var nIndex = 0;
		    if(media != '')
		    	nIndex++;
		    if(indici != '')
		    	nIndex++;
		    if(confronto != '')
		    	nIndex++;
			
			if(nIndex > 0){
				params.ni= nIndex;		    	
			    if(nIndex == 1){
				    if(media != ''){
	    		    	//gestione codice+giorni media
				    	parMedia = media.split("_");
				    	params.i1 = parMedia[0];
				    	params.i1p1 = parMedia[1];  
				    	params.i1c = 'ff9900';
				    }
				    if(indici != ''){
				    	params.c1= indici;
				    	params.c1c = '680000';
				    }
				    if(confronto != ''){
				    	params.c1= confronto;
				    	params.c1c = '500f72';
				    }
			    }else if(nIndex == 2){
			    	if(confronto != ''){
			    		if( media != ''){
			    			//confronto + media
					    	parMedia = media.split("_");
					    	params.i1 = parMedia[0];
					    	params.i1p1 = parMedia[1];  
					    	params.i1c = 'ff9900';
					    	params.c1= confronto;
				    		params.c1c = '500f72';
			    		}else{
			    			//confronto + indice
			    			params.c1= indici;
				    		params.c1c = '680000';
				    		params.c2= confronto;
				    		params.c2c = '500f72';
			    		}
			    	}else{
			    		//indice + media
			    		parMedia = media.split("_");
				    	params.i1 = parMedia[0];
				    	params.i1p1 = parMedia[1];  
				    	params.i1c = 'ff9900';
				    	params.c1= indici;
			    		params.c1c = '680000';
			    	}
			    }else if(nIndex == 3){
	   		    		//gestione codice+giorni media
				    	parMedia = media.split("_");
				    	params.i1 = parMedia[0];
				    	params.i1p1 = parMedia[1];  
				    	params.i1c = 'ff9900';
				    	//indice
				    	params.c1= indici;
				    	params.c1c = '680000';
				    	//confronto
				    	params.c2= confronto;
				    	params.c2c = '500f72';
			    }
			}
		    
			//DISEGNO IL GRAFICO prima di modificare i params per i successivi grafici	
			aggiornaGrafici(params,'iChartA');
							
		    //grafico oscillatori
		    var osc = $('#tipoOscillatori').val();
		    if(osc != ''){
		    	params.l='bottom';
				params.ni='1';
		    	//gestione codice+giorni
		    	parOsc = osc.split("_");
		    	params.i1 = parOsc[0];
		    	params.i1p1 = parOsc[1];  
				params.stjs = 'line';
		    	params.i1c = '003d6e';
				aggiornaGrafici(params,'iChartA');
		    }else{
   			    //grafico volumi in alternativa agli oscillatori
				params.l='bottom';
				params.ni='1';
				params.i1='volume';
				params.i1c='003d6e';
				params.stjs = 'bar';
				$('#iChartB').show();
				aggiornaGrafici(params,'iChartA');
		    }
			
		} 
		/////////////////////////////////////////////
		
		///////////CHIAMATA AL SERVIZIO CREA GRAFICI/////////////////////
		function aggiornaGrafici(params, charDiv){
			var CHART_SERVER_URL =  '/WEBHT/investimenti/graficoJson.do';		   
			
			var graphicParam = new Array();
			graphicParam.navigator = 'true';
			graphicParam.line = '1';
			graphicParam.highlight = '2'			
			graphicParam.gridLine = 'true';
			graphicParam.border = 'true';
			graphicParam.borderColor ='#c8c8c8';
			graphicParam.yAx = 'true';
			graphicParam.xAx = 'true';
			graphicParam.gridXLine = 'true';
			graphicParam.yNoDataMsg = '-150';
			graphicParam.pointSize = 4; 
			graphicParam.bottomTop = 305; 
		   
		   CHART_SERVER.chartRequest(CHART_SERVER_URL, params, graphicParam, charDiv, {
		        onAfterChartRendered: function(chart){
		        
			        if(chart != null){
			            chart.yAxis[0].addPlotLine({
							            color: "red",
							            width: 1,
							            dashStyle:'dash',
							            value: '1.4310'
	     								});
	     				
			        }
      			 
					
		        }
		    });
		}
	
		function propagaZoom(grfDaZummare, grfZummato){
			if(grfDaZummare != null)
					grfDaZummare.axis_bottom.setZoom(grfZummato.axis_bottom.getZoom().min, grfZummato.axis_bottom.getZoom().max);
		}
	
	function loadCampionamento(){
		var periodo = $('#periodo').val();
		var $selFreq = $('#campionamento');
		$selFreq.children().remove();
		for(i = 0; i<vetFrequenze.length; i++){
			if(periodo.indexOf(vetFrequenze[i][0])> -1){
				var opt = $('<option></option>').attr('value', vetFrequenze[i][1]);
				opt.text(vetFrequenze[i][2]);
				$selFreq.append(opt); 
			}
		}
	}
	
	//ascoltatore dei widget per rendere il form dinamico
	function listener_grafici(widget){
		if(widget === 'periodo'){
			loadCampionamento();
		}
	}
	
	vetFrequenze = [ ['D','1m','1 minuto'],
					 ['D','5m','5 minuti'],
					 ['D','15m','15 minuti'],
					 ['D','60m','1 ora'],
					 ['M','1D','1 giorno'],
					 ['M','1W','1 settimana'],
					 ['Y','1D','1 giorno'],
					 ['Y','1W','1 settimana'],
					 ['Y','1M','1 mese']
	];

	</script>

<script>
$(document).ready(function() {
		
});
</script>




	<h1>
		A2A
	</h1>


<div class="divForm">
	<div class="boxContent">
		<form name="formGrafico" method="post" action="/WEBHT/investimenti/graficoJson.do" class="form-horizontal">
			<div class="section clearfix">
				<input type="hidden" name="popUp" value="true">
				<div class="bs-example">
			<div class="form-group">

						<div class="form-field-input col-xs-4">
							<label class="control-label" for="periodo">Durata</label>
								<div class="form-field">
								<select name="periodo" onchange="listener_grafici('periodo')" id="periodo" style="width: 100%;" class="form-control"><option value="1D">Intraday</option>
									
									<option value="1M" selected="selected">1 Mese</option>
									<option value="3M">3 Mesi</option>
									<option value="6M">6 Mesi</option>
									<option value="1Y">1 Anno</option>
									<option value="3Y">3 Anni</option>
									<option value="5Y">5 Anni</option></select>
							</div>
						</div>

						<div class="form-field-input col-xs-4">
							<label class="control-label" for="campionamento">Frequenza</label>

								<div class="form-field">
								<select name="campionamento" id="campionamento" style="width: 100%;" class="form-control"><option value="1D">1 giorno</option>
									<option value="1W">1 settimana</option></select>
							</div>
						</div>


							<div class="form-field-input col-xs-4">
							<label class="control-label" for="formato">Stile</label>
								<div class="form-field">
								<select name="formato" id="formato" style="width: 100%;" class="form-control"><option value="line" selected="">Lineare</option>
									<option value="area">Area</option>
									<option value="bar">Barre</option>
									<option value="scatter">Punti</option>
									<option value="candlestick">Candela</option></select>
							</div>
						</div>
					</div>


					<div class="form-group">
							<div class="form-field-input col-xs-6">
						<label class="control-label">	<img alt="" src="/HT/IMAGES/TOL/i_medieArancio.png"></label>

								<div class="form-field">
								<select name="medieMobili" id="medieMobili" style="width: 100%;" class="form-control"><option value="" selected="selected">Nessuna Media</option>
									<option value="ma_14">Media mob.semp.(14)</option>
									<option value="maw_5">Media mob.pond.(5)</option>
									<option value="maw_25">Media mob.pond.(25)</option>
									<option value="maw_50">Media mob.pond.(50)</option>
									<option value="maw_100">Media mob.pond.(100)</option>
									<option value="mae_14">Media mob.esp.(14)</option></select>
							</div>
						</div>


						<div class="form-field-input col-xs-6">
							<label class="control-label"><img alt="" src="/HT/IMAGES/TOL/i_medieBlu.png"></label>

								<div class="form-field">
								<select name="tipoOscillatori" id="tipoOscillatori" style="width: 100%;" class="form-control"><option value="" selected="selected">Nessun Oscillatore (Volumi)</option>
									<option value="stochasticsslow_1">Stocastico</option>
									<option value="momentum_14">Momentum</option>
									<option value="rsi_14">RSI</option>
									<option value="roc_1">ROC</option></select>
							</div>
						</div>


						<div class="form-field-input col-xs-6">
						<label class="control-label">	<img alt="" src="/HT/IMAGES/TOL/i_medieMattone.png"></label>

							<div class="form-field">
								<select name="indici" id="indici" style="width: 100%;" class="form-control"><option selected="selected" value="">Nessun indice</option>
									<option value="MTA.FTSEMIB">FTSE MIB</option>
									<option value="MTA.FTSEITALLSHARE">FTSE Italia All Share</option>
									<option value="MTA.FTSEITMIDCAP">FTSE Italia Mid Cap</option>
									<option value="MTA.FTSEITSTAR">FTSE Italia Stars</option></select>
							</div>
						</div>

						<div class="form-field-input col-xs-6">
						<label class="control-label">	<img alt="" src="/HT/IMAGES/TOL/i_medieViola.png"></label>

								<div class="form-field">
								<select name="confronto" id="confronto" style="width: 100%;" class="form-control"><option value="">Nessun confronto</option>
									
										<option value="MTA.A2A">A2A</option>
									
										<option value="MTA.ATL">ATLANTIA</option>
									
										<option value="MTA.AZM">AZIMUT</option>
									
										<option value="MTA.BGN">BANCA GENERALI</option>
									
										<option value="MTA.BMED">BANCA MEDIOLANUM</option>
									
										<option value="MTA.BAMI">BANCO BPM</option>
									
										<option value="MTA.BPE">BPER BANCA</option>
									
										<option value="MTA.BRE">BREMBO</option>
									
										<option value="MTA.BZU">BUZZI UNICEM</option>
									
										<option value="MTA.CPR">CAMPARI</option>
									
										<option value="MTA.CNHI">CNH INDUSTRIAL</option>
									
										<option value="MTA.ENEL">ENEL</option>
									
										<option value="MTA.ENI">ENI</option>
									
										<option value="MTA.EXO">EXOR</option>
									
										<option value="MTA.RACE">FERRARI</option>
									
										<option value="MTA.FCA">FIAT CHRYSLER AUTOMOBILES</option>
									
										<option value="MTA.FBK">FINECOBANK</option>
									
										<option value="MTA.G">GENERALI ASS</option>
									
										<option value="MTA.ISP">INTESA SANPAOLO</option>
									
										<option value="MTA.IG">ITALGAS</option>
									
										<option value="MTA.LDO">LEONARDO</option>
									
										<option value="MTA.LUX">LUXOTTICA GROUP</option>
									
										<option value="MTA.MS">MEDIASET S.P.A</option>
									
										<option value="MTA.MB">MEDIOBANCA</option>
									
										<option value="MTA.MONC">MONCLER</option>
									
										<option value="MTA.PST">POSTE ITALIANE</option>
									
										<option value="MTA.PRY">PRYSMIAN</option>
									
										<option value="MTA.REC">RECORDATI ORD</option>
									
										<option value="MTA.SPM">SAIPEM</option>
									
										<option value="MTA.SFER">SALVATORE FERRAGAMO</option>
									
										<option value="MTA.SRG">SNAM</option>
									
										<option value="MTA.STM">STMICROELECTRONICS</option>
									
										<option value="MTA.TIT">TELECOM ITALIA</option>
									
										<option value="MTA.TEN">TENARIS</option>
									
										<option value="MTA.TRN">TERNA</option>
									
										<option value="MTA.UBI">UBI BANCA</option>
									
										<option value="MTA.UCG">UNICREDIT</option>
									
										<option value="MTA.UNI">UNIPOL</option>
									
										<option value="MTA.US">UNIPOLSAI</option>
									
										<option value="MTA.YNAP">YOOX NET-A-PORTER GROUP</option></select>
							</div>
						</div>
					</div>

				</div>

			</div>
		</form>
	</div>
</div>
<br>
<br>
<div class="actions pull-right">
	<input id="disegnaStorico" class="btn button thin" type="button" value="Disegna" title="Disegna" onclick="paramPerGraficoStorico()">
</div>

<div id="iChartA" style="overflow: hidden; width: 750px; height: 523px; padding: 0px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 750px; height: 523px; text-align: left; line-height: normal; z-index: 0; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="750" height="523"><defs><clipPath id="highcharts-1"><rect fill="none" x="0.5" y="0.5" width="689" height="438"></rect></clipPath><linearGradient x1="0" y1="1" x2="0" y2="0" id="highcharts-2"><stop offset="0" stop-color="rgb(180,198,220)" stop-opacity="0.75"></stop><stop offset="1" stop-color="rgb(0,0,0)" stop-opacity="0"></stop></linearGradient></defs><rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="750" height="523" stroke-width="0.000001"></rect><rect rx="0" ry="0" fill="#FFFFFF" x="50" y="10" width="690" height="439" stroke-width="0.000001"></rect><path fill="none" d="M 50 129.5 L 740 129.5" stroke="red" stroke-width="1" stroke-dasharray="4,3"></path><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 209.5 10 L 209.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 332.5 10 L 332.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 431.5 10 L 431.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 579.5 10 L 579.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 727.5 10 L 727.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 98.5 10 L 98.5 449" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 50 210.5 L 740 210.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 160.5 L 740 160.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 110.5 L 740 110.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 60.5 L 740 60.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 10.5 L 740 10.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 260.5 L 740 260.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 50 380.5 L 740 380.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 305.5 L 740 305.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 455.5 L 740 455.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 356.5 468 L 356.5 508" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 547.5 468 L 547.5 508" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 739.5 468 L 739.5 508" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 193.5 468 L 193.5 508" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"></g><rect rx="0" ry="0" fill="none" x="50.5" y="10.5" width="689" height="438" stroke-width="1" stroke="#c8c8c8" zIndex="1"></rect><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 209.5 449 L 209.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 332.5 449 L 332.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 431.5 449 L 431.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 579.5 449 L 579.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 727.5 449 L 727.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 98.5 449 L 98.5 454" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 50 449.5 L 740 449.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 49.5 10 L 49.5 260" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 49.5 305 L 49.5 455" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><path fill="none" d="M 431.5 10 L 431.5 449" stroke-width="1" stroke="#C0C0C0" zIndex="2" visibility="hidden"></path><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(50,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 12.321428571428571 173 L 49.285714285714285 185 L 86.25 173 L 123.21428571428571 185 L 160.17857142857144 162 L 197.14285714285717 175 L 234.10714285714286 119 L 271.07142857142856 130 L 308.0357142857143 137 L 345 134 L 381.9642857142857 58 L 418.92857142857144 71 L 455.8928571428571 60 L 492.85714285714283 66 L 529.8214285714286 63 L 566.7857142857143 96 L 603.75 97 L 640.7142857142857 70 L 677.6785714285714 95" stroke="#258025" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,10)" clip-path="none"><path fill="#258025" d="M 381.9642857142857 53 C 388.62428571428575 53 388.62428571428575 63 381.9642857142857 63 C 375.3042857142857 63 375.3042857142857 53 381.9642857142857 53 Z" stroke="#FFFFFF" stroke-width="1" visibility="hidden"></path></g><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(50,305)" clip-path="url(#highcharts-1)"><rect fill="#315294" x="3" y="126" width="18" height="24" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="40" y="121" width="18" height="29" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="77" y="111" width="18" height="39" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="114" y="128" width="18" height="22" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="151" y="119" width="18" height="31" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="188" y="129" width="18" height="21" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="225" y="93" width="18" height="57" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="262" y="101" width="18" height="49" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="299" y="122" width="18" height="28" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="336" y="116" width="18" height="34" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="373" y="25" width="18" height="125" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="410" y="76" width="18" height="74" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="447" y="64" width="18" height="86" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="483" y="88" width="18" height="62" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="520" y="96" width="18" height="54" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="557" y="107" width="18" height="43" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="594" y="116" width="18" height="34" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="631" y="99" width="18" height="51" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect><rect fill="#315294" x="668" y="123" width="18" height="27" stroke-width="0.000001" stroke="#FFFFFF" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,305)" clip-path="none"></g><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(50,468)"><path fill="url(#highcharts-2)" d="M 0 33.5 C 0 33.5 22.999999999999996 36.7 38.33333333333333 36.7 C 53.666666666666664 36.7 61.33333333333333 33.5 76.66666666666666 33.5 C 91.99999999999999 33.5 99.66666666666666 36.7 114.99999999999999 36.7 C 130.33333333333331 36.7 137.99999999999997 30.6 153.33333333333331 30.6 C 168.66666666666666 30.6 176.33333333333331 34 191.66666666666666 34 C 207 34 214.66666666666666 19.3 229.99999999999997 19.3 C 245.33333333333331 19.3 253 21.24 268.3333333333333 22.2 C 283.66666666666663 23.16 291.3333333333333 24.1 306.66666666666663 24.1 C 322 24.1 329.66666666666663 24.1 345 23.3 C 360.3333333333333 22.5 368 3.3 383.3333333333333 3.3 C 398.66666666666663 3.3 406.3333333333333 6.7 421.66666666666663 6.7 C 437 6.7 444.66666666666663 3.9 459.99999999999994 3.9 C 475.3333333333333 3.9 483 5.4 498.3333333333333 5.4 C 513.6666666666666 5.4 521.3333333333333 4.6 536.6666666666666 4.6 C 552 4.6 559.6666666666666 13.000000000000002 575 13.3 C 590.3333333333333 13.6 598 13.6 613.3333333333333 13.6 C 628.6666666666666 13.6 636.3333333333333 6.5 651.6666666666666 6.5 C 667 6.5 690 13 690 13 L 690 40 L 0 40" zIndex="0"></path><path fill="none" d="M 0 33.5 C 0 33.5 22.999999999999996 36.7 38.33333333333333 36.7 C 53.666666666666664 36.7 61.33333333333333 33.5 76.66666666666666 33.5 C 91.99999999999999 33.5 99.66666666666666 36.7 114.99999999999999 36.7 C 130.33333333333331 36.7 137.99999999999997 30.6 153.33333333333331 30.6 C 168.66666666666666 30.6 176.33333333333331 34 191.66666666666666 34 C 207 34 214.66666666666666 19.3 229.99999999999997 19.3 C 245.33333333333331 19.3 253 21.24 268.3333333333333 22.2 C 283.66666666666663 23.16 291.3333333333333 24.1 306.66666666666663 24.1 C 322 24.1 329.66666666666663 24.1 345 23.3 C 360.3333333333333 22.5 368 3.3 383.3333333333333 3.3 C 398.66666666666663 3.3 406.3333333333333 6.7 421.66666666666663 6.7 C 437 6.7 444.66666666666663 3.9 459.99999999999994 3.9 C 475.3333333333333 3.9 483 5.4 498.3333333333333 5.4 C 513.6666666666666 5.4 521.3333333333333 4.6 536.6666666666666 4.6 C 552 4.6 559.6666666666666 13.000000000000002 575 13.3 C 590.3333333333333 13.6 598 13.6 613.3333333333333 13.6 C 628.6666666666666 13.6 636.3333333333333 6.5 651.6666666666666 6.5 C 667 6.5 690 13 690 13" stroke="#4572A7" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,468)"></g></g><rect fill="rgb(255,255,255)" x="50" y="468" width="0" height="40" stroke-width="0.000001" fill-opacity="0.75" zIndex="3"></rect><rect fill="rgb(255,255,255)" x="740" y="468" width="0" height="40" stroke-width="0.000001" fill-opacity="0.75" zIndex="3"></rect><path fill="none" stroke-width="1" stroke="black" zIndex="3" d="M 50 468.5 L 50.5 468.5 50.5 508.5 M 739.5 508.5 L 739.5 468.5 740 468.5"></path><g style="cursor:e-resize;" zIndex="3" transform="translate(740,480)"><rect rx="3" ry="3" fill="#FFF" x="-4.5" y="0.5" width="8" height="15" stroke-width="1" stroke="#666"></rect><path fill="#FFF" d="M -1.5 4 L -1.5 12 M 0.5 4 L 0.5 12" stroke="#666" stroke-width="1"></path></g><g style="cursor:e-resize;" zIndex="4" transform="translate(50,480)"><rect rx="3" ry="3" fill="#FFF" x="-4.5" y="0.5" width="8" height="15" stroke-width="1" stroke="#666"></rect><path fill="#FFF" d="M -1.5 4 L -1.5 12 M 0.5 4 L 0.5 12" stroke="#666" stroke-width="1"></path></g><g class="highcharts-axis-labels" zIndex="7"><text x="99.28571428571428" y="463" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="99.28571428571428">26. Apr</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">2. Mag</tspan></text><text x="333.3928571428571" y="463" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="333.3928571428571">6. Mag</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">10. Mag</tspan></text><text x="579.8214285714286" y="463" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="579.8214285714286">16. Mag</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">22. Mag</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="48" y="258" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,300</tspan></text><text x="48" y="207.99999999999994" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,350</tspan></text><text x="48" y="158.0000000000001" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,400</tspan></text><text x="48" y="108.00000000000011" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,450</tspan></text><text x="48" y="58.00000000000006" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,500</tspan></text><text x="48" y="8" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">1,550</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="48" y="453" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">0</tspan></text><text x="48" y="378" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">20.000</tspan></text><text x="48" y="303" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:325px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">40.000</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="196.75" y="504" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;line-height:14px;fill:#666;" text-anchor="start"><tspan x="196.75">1. Mag</tspan></text><text x="359.66666666666663" y="504" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;line-height:14px;fill:#666;" text-anchor="start"><tspan x="359.66666666666663">8. Mag</tspan></text><text x="551.3333333333333" y="504" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;line-height:14px;fill:#666;" text-anchor="start"><tspan x="551.3333333333333">15. Mag</tspan></text><text x="743" y="504" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11px;color:#666;line-height:14px;fill:#666;" text-anchor="start"><tspan x="743">22. Mag</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"></g><g class="highcharts-tooltip" zIndex="8" style="padding:0;white-space:nowrap;" visibility="hidden" transform="translate(213,83)"><rect rx="5" ry="5" fill="none" x="0" y="0" width="206" height="57" stroke-width="5" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="206" height="57" stroke-width="3" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="206" height="57" stroke-width="1" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="rgb(255,255,255)" x="0" y="0" width="206" height="57" stroke-width="2" fill-opacity="0.85" stroke="#258025" anchorX="219" anchorY="42"></rect><text x="5" y="18" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"><tspan style="font-size: 10px" x="5">Mercoledi', 10 Mag, 2017</tspan><tspan style="fill:#258025" dy="15" x="5">MTA.A2A</tspan><tspan dx="3">: </tspan><tspan style="font-weight:bold" dx="3">1,492</tspan><tspan style="fill:#315294" dy="16" x="5">MTA.A2A - volume</tspan><tspan dx="3">: </tspan><tspan style="font-weight:bold" dx="3">33.365,538</tspan></text></g><g class="highcharts-tracker" zIndex="9"><g visibility="visible" zIndex="1" transform="translate(50,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 2.321428571428571 173 L 12.321428571428571 173 L 49.285714285714285 185 L 86.25 173 L 123.21428571428571 185 L 160.17857142857144 162 L 197.14285714285717 175 L 234.10714285714286 119 L 271.07142857142856 130 L 308.0357142857143 137 L 345 134 L 381.9642857142857 58 L 418.92857142857144 71 L 455.8928571428571 60 L 492.85714285714283 66 L 529.8214285714286 63 L 566.7857142857143 96 L 603.75 97 L 640.7142857142857 70 L 677.6785714285714 95 L 687.6785714285714 95" isTracker="true" stroke-linejoin="round" visibility="visible" stroke-opacity="0.0001" stroke="rgb(192,192,192)" stroke-width="21" style=""></path></g><g visibility="visible" zIndex="1" transform="translate(50,305)" clip-path="url(#highcharts-1)"><rect fill="rgb(192,192,192)" x="668" y="123" width="18" height="27" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="631" y="99" width="18" height="51" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="594" y="116" width="18" height="34" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="557" y="107" width="18" height="43" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="520" y="96" width="18" height="54" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="483" y="88" width="18" height="62" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="447" y="64" width="18" height="86" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="410" y="76" width="18" height="74" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="373" y="25" width="18" height="125" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="336" y="116" width="18" height="34" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="299" y="122" width="18" height="28" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="262" y="101" width="18" height="49" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="225" y="93" width="18" height="57" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="188" y="129" width="18" height="21" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="151" y="119" width="18" height="31" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="114" y="128" width="18" height="22" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="77" y="111" width="18" height="39" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="40" y="121" width="18" height="29" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect><rect fill="rgb(192,192,192)" x="3" y="126" width="18" height="24" isTracker="1495455852445" fill-opacity="0.0001" visibility="visible" style=""></rect></g></g></svg></div></div>




</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>


</body></html>