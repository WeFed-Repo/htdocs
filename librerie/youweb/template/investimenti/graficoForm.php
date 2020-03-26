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
		
	    var mapIndici = new HashMap();
       	
			mapIndici.put('FTSEMIB',21291.7200);
		
			mapIndici.put('FTSEITSTAR',35508.0600);
		
			mapIndici.put('FTSEITMIDCAP',40728.0700);
		
			mapIndici.put('FTSEITSMACAP',23808.1600);
		
			mapIndici.put('FTSEITALLSHARE',23559.8800);
		
		
		function paramPerGraficoDefault(){
		    var params = new Array();
		   // params.redir_host = CHART_SERVER_URL;
		    params.out = 'js';
		    params.s = 'MTA.FTSEMIB';
		    params.d = '1M';//da modificare in intraday
		    params.tf = '1D';
		    params.st = 'line';
		    params.pc = '258025';
		    params.l='top';
		    params.ng=1;
		    params.c = '258025';
		
			aggiornaGrafici(params,'iChartA');
			
		}
						
		function paramPerGraficoStorico(){
		    var params = new Array();
		   	//tipo di grafico interattivo
		    params.out = 'js';
		    //symbol del titolo da visulalizzare 
		    params.s = 'MTA.FTSEMIB';
		    //colori grafico principale
		    params.pc = '258025';
		    params.c = '258025';
		    params.l='top';
		    params.ng=1;
		    
		    //intervallo temporale e campionamento
		    var periodo = $('#periodo').val();
		    params.d = periodo
			//ritardo 
			params.dl = 0;
		    //campionamento intraday
		    var campionamento = $('#campionamento').val();
		    if(campionamento != '-1')
		    	params.tf = campionamento;
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
		    
   		    //var indici = $('#indici').val()
		    var media = $('#medieMobili').val()
		    if(media != ''){
		    	params.ni= 1;
		    	//gestione codice+giorni
		    	parMedia = media.split("_");
		    	params.i1 = parMedia[0];
		    	params.i1p1 = parMedia[1];  
		    	params.i1c = 'ff9900';
		    }
		    
	    
			//DISEGNO IL GRAFICO prima di modificare i params per i successivi grafici	
			aggiornaGrafici(params,'iChartA');
							
		}
		
		///////////CHIAMATA AL SERVIZIO CREA GRAFICI/////////////////////
		function aggiornaGrafici(params, charDiv){
			var CHART_SERVER_URL =  '/WEBHT/investimenti/graficoJson.do';		   
		    
		    var graphicParam = new Array();
			graphicParam.navigator = 'true';
			graphicParam.line = '1';
			graphicParam.highlight = '1'			
			graphicParam.gridLine = 'true';
			graphicParam.border = 'true';
			graphicParam.borderColor ='#c8c8c8';
			graphicParam.yAx = 'true';
			graphicParam.xAx = 'true';
			graphicParam.decimalLabelY = '0';
			graphicParam.gridXLine = 'true';
			graphicParam.yNoDataMsg = '-150';
			graphicParam.pointSize = 4; 
			
		   CHART_SERVER.chartRequest(CHART_SERVER_URL, params, graphicParam, charDiv, {
		        onAfterChartRendered: function(chart){
   		   			if(mapIndici.containsKey('FTSEMIB')){
		   				precedente = mapIndici.get('FTSEMIB');
		   				if((precedente != null) && (precedente!=0.0)){
							chart.yAxis[0].addPlotLine({
										            color: "red",
										            width: 1,
										            dashStyle:'dash',
										            value: precedente
			          								});
		        		}		        	
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
					 ['D','30m','30 minuti'],
					 ['D','60m','1 ora'],
					 ['M','1D','1 giorno'],
					 ['M','1W','1 settimana'],
					 ['Y','1D','1 giorno'],
					 ['Y','1W','1 settimana'],
					 ['Y','1M','1 mese']
	];

	</script>
<form name="formGrafico" method="post" action="/WEBHT/investimenti/graficoJson.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="105229f55c33470afc072042100c63d8"></div>
	<div class="section clearfix">
		
		<h3 class="titleSection">








		
			FTSE MIB
		
		
		
		

</h3>
		<div class="bs-example">
			<div class="form-group">

				<input type="hidden" name="popUp" value="true">

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
						<select name="formato" id="formato" style="width: 100%;" class="form-control"><option value="line" selected>Lineare</option>
							<option value="area">Area</option>
							<option value="bar">Barre</option>
							<option value="scatter">Punti</option>
							<option value="candlestick">Candela</option></select>
					</div>
				</div>
			</div>

			<div class="form-field-input col-xs-4">
				<div>
					<label><img alt="" src="/HT/IMAGES/TOL/i_medieArancio.png">
					</label>
				</div>
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
		</div>
	</div>
</form>
<br />
<br />
<div class="actions pull-right">
	<input id="disegnaStorico" class="btn button thin" type="button" value="Disegna" title="Disegna" onclick="paramPerGraficoStorico()" />
</div>

<div id="iChartA" style="overflow: hidden; width: 750px; height: 300px; padding: 0px;"></div>



</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>
</body>
</html>