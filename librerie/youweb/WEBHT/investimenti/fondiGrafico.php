<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Chart Widget</title>
		
		<!-- Cache Control -->
		<meta http-equiv="cache-control" content="max-age=0">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
		<meta http-equiv="pragma" content="no-cache">
		
		<!-- Css -->
		<link rel="stylesheet" href="/HT/DEUS/css/bootstrap.min.css">
        <link rel="stylesheet" href="/HT/DEUS/css/pba-style.css">
	    
	    <!-- Scripts -->
	    <script src="/HT/DEUS/js/libs/require.js"></script>
		
		<style>
			.error { padding: 10px; margin: 10px; border: 1px solid black; }
		</style>
	<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="/HT/DEUS/js/init.js" src="/HT/DEUS/js/init.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="WidgetChartViewController" src="/HT/DEUS/js/controllers/WidgetChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="LoadingManager" src="/HT/DEUS/js/tt/core/controllers/LoadingManager.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="TTObject" src="/HT/DEUS/js/tt/core/TTObject.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ViewController" src="/HT/DEUS/js/tt/core/controllers/ViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaPriceSerieChartViewController" src="/HT/DEUS/js/controllers/PbaPriceSerieChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PriceSerieChartConfiguration" src="/HT/DEUS/js/tplatform/core/controllers/charts/PriceSerieChartConfiguration.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaColumnChartViewController" src="/HT/DEUS/js/controllers/PbaColumnChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaScatterChartViewController" src="/HT/DEUS/js/controllers/PbaScatterChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryplugins" src="/HT/DEUS/js/libs/jquery/jqueryplugins.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ColumnChartViewController" src="/HT/DEUS/js/tplatform/core/controllers/charts/ColumnChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaLegend_ColumnChartViewController" src="/HT/DEUS/js/controllers/PbaLegend_ColumnChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PriceSerieChartViewController" src="/HT/DEUS/js/tplatform/core/controllers/charts/PriceSerieChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaToolbar_PriceSerieChartViewController" src="/HT/DEUS/js/controllers/PbaToolbar_PriceSerieChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaLegend_PriceSerieChartViewController" src="/HT/DEUS/js/controllers/PbaLegend_PriceSerieChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="moment" src="/HT/DEUS/js/libs/momentit.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="HTMLObject" src="/HT/DEUS/js/tt/core/HTMLObject.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="text" src="/HT/DEUS/js/libs/require-text.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="numeral" src="/HT/DEUS/js/libs/numeral/numeral.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ScatterChartViewController" src="/HT/DEUS/js/tplatform/core/controllers/charts/ScatterChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="PbaLegend_ScatterChartViewController" src="/HT/DEUS/js/controllers/PbaLegend_ScatterChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ChartViewController" src="/HT/DEUS/js/tt/core/controllers/charts/ChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="HighchartsComponent" src="/HT/DEUS/js/tt/core/components/charts/HighchartsComponent.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ChartLegendViewController" src="/HT/DEUS/js/tt/core/controllers/charts/ChartLegendViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="SerieInfo" src="/HT/DEUS/js/tplatform/core/controllers/charts/SerieInfo.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="SeriesAPI" src="/HT/DEUS/js/tplatform/core/ajax/SeriesAPI.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="RelatedIndexAPI" src="/HT/DEUS/js/tplatform/core/ajax/RelatedIndexAPI.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="async" src="/HT/DEUS/js/libs/async.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="momentDefault" src="/HT/DEUS/js/libs/moment.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="/HT/DEUS/js/libs/jquery/jquery-1.11.1.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="numeralit" src="/HT/DEUS/js/libs/numeral/it.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="handlebars" src="/HT/DEUS/js/libs/handlebars.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="TTComponent" src="/HT/DEUS/js/tt/core/components/TTComponent.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highchartsplugins" src="/HT/DEUS/js/libs/charts/highstock/highchartsplugins.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="TPlatformAPI" src="/HT/DEUS/js/ajax/TPlatformAPI.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="TTAjaxAPI" src="/HT/DEUS/js/tt/core/ajax/TTAjaxAPI.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryMigrate" src="/HT/DEUS/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap" src="/HT/DEUS/js/libs/bootstrap/bootstrap.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highcharts" src="/HT/DEUS/js/libs/charts/highstock/highstock.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="Toolbar_PriceSerieChartViewController" src="/HT/DEUS/js/tplatform/core/controllers/charts/toolbars/Toolbar_PriceSerieChartViewController.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highcharts3d" src="/HT/DEUS/js/libs/charts/highstock/highcharts-3d.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highchartsExporting" src="/HT/DEUS/js/libs/charts/highstock/exporting.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="highchartsMore" src="/HT/DEUS/js/libs/charts/highstock/highcharts-more.js"></script></head>
	<body>
		<!-- Widget placeholder -->
		<div id="widget-container" class="full-size">
			<div id="widget"><div class="view-controller">
    <div class="vc-header  full-size" style="bottom: auto; height: 0px;"></div>
    <div class="vc-content  full-size" style="top: 0px; bottom: 0px;"><div id="widget_chartVc"><div class="view-controller">
    <div class="vc-header  full-size" style="bottom: auto; height: 32px;"><div class="chart-toolbar">
    <div class="toolbar-title">
        Performance annua in euro dei fondi selezionati
    </div>
</div>
</div>
    <div class="vc-content  full-size" style="top: 32px; bottom: 0px;"><div id="widget_chartVc_toolbar" class="" style="height: 0px; padding: 0px; margin: 0px;"></div>
<div id="widget_chartVc_chartLegend" class="legend_container" style="position: relative; height: 48px;"><div class="view-controller">
    <div class="vc-header "></div>
    <div class="vc-content "><div deusid="deusId0" class="serie-legend-entry" style="width: 100%; float: none;">
	<div class="serie-name-container" style="right: 0px;">
		<span class="serie-icon square" style="background-color: rgb(46, 145, 210);"></span>
		<span class="serie-name">GESTIELLE ABSOLUTE RETURN -PT</span>
	</div>
</div><div deusid="deusId1" class="serie-legend-entry" style="width: 100%; float: none;">
	<div class="serie-name-container" style="right: 0px;">
		<span class="serie-icon triangle" style="border-bottom-color: rgb(32, 102, 147);"></span>
		<span class="serie-name">(Ind. Categoria) Fideuram Flessibili EUR</span>
	</div>
</div></div>
    <div class="vc-footer "></div>
</div></div>
<div id="widget_chartVc_chart" class="" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 877px; height: 203px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="877" height="203"><desc>Created with Highstock 2.0.1</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="796" height="153"></rect></clipPath></defs><rect x="0" y="0" width="877" height="203" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 71 9.5 L 867 9.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 71 87.5 L 867 87.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 71 163.5 L 867 163.5" stroke="#C0C0C0" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 388.5 163 L 388.5 173" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 548.5 163 L 548.5 173" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 707.5 163 L 707.5 173" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 867.5 163 L 867.5 173" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 229.5 163 L 229.5 173" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 70.5 163 L 70.5 173" stroke="#C0D0E0" stroke-width="1" opacity="undefined"></path><path fill="none" d="M 71 163.5 L 867 163.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(71,10) scale(1 1)" style="cursor:pointer;" clip-path="url(#highcharts-1)"><rect x="36.5" y="11.5" width="39" height="142" stroke="#FFFFFF" fill="#2e91d2" rx="0" ry="0" stroke-width="1"></rect><rect x="195.5" y="114.5" width="39" height="39" stroke="#FFFFFF" fill="#2e91d2" rx="0" ry="0" stroke-width="1"></rect><rect x="354.5" y="131.5" width="39" height="22" stroke="#FFFFFF" fill="#2e91d2" rx="0" ry="0" stroke-width="1"></rect><rect x="513.5" y="81.5" width="39" height="72" stroke="#FFFFFF" fill="#2e91d2" rx="0" ry="0" stroke-width="1"></rect><rect x="672.5" y="111.5" width="39" height="42" stroke="#FFFFFF" fill="#2e91d2" rx="0" ry="0" stroke-width="1"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(71,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(71,10) scale(1 1)" style="cursor:pointer;" clip-path="url(#highcharts-1)"><rect x="83.5" y="60.5" width="39" height="93" stroke="#FFFFFF" fill="#206693" rx="0" ry="0" stroke-width="1"></rect><rect x="243.5" y="100.5" width="39" height="53" stroke="#FFFFFF" fill="#206693" rx="0" ry="0" stroke-width="1"></rect><rect x="402.5" y="128.5" width="39" height="25" stroke="#FFFFFF" fill="#206693" rx="0" ry="0" stroke-width="1"></rect><rect x="561.5" y="139.5" width="39" height="14" stroke="#FFFFFF" fill="#206693" rx="0" ry="0" stroke-width="1"></rect><rect x="720.5" y="119.5" width="39" height="34" stroke="#FFFFFF" fill="#206693" rx="0" ry="0" stroke-width="1"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(71,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="150.6" text-anchor="middle" style="width:139px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="183" opacity="1">2013</text><text x="309.79999999999995" text-anchor="middle" style="width:139px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="183" opacity="1">2014</text><text x="469" text-anchor="middle" style="width:139px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="183" opacity="1">2015</text><text x="628.1999999999999" text-anchor="middle" style="width:139px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="183" opacity="1">2016</text><text x="787.4" text-anchor="middle" style="width:139px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="183" opacity="1">2017</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="56" text-anchor="end" style="width:269px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="166.5" opacity="1">0,000%</text><text x="56" text-anchor="end" style="width:269px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="90" opacity="1">5,000%</text><text x="56" text-anchor="end" style="width:269px;color:#606060;cursor:default;font-size:11px;fill:#606060;" y="13.5" opacity="1">10,000%</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(191,54)" opacity="0"><path fill="none" d="M 3.5 0.5 L 284.5 0.5 C 287.5 0.5 287.5 0.5 287.5 3.5 L 287.5 47.5 C 287.5 50.5 287.5 50.5 284.5 50.5 L 149.5 50.5 143.5 56.5 137.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke-width="5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)" width="287" height="50"></path><path fill="none" d="M 3.5 0.5 L 284.5 0.5 C 287.5 0.5 287.5 0.5 287.5 3.5 L 287.5 47.5 C 287.5 50.5 287.5 50.5 284.5 50.5 L 149.5 50.5 143.5 56.5 137.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke-width="3" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)" width="287" height="50"></path><path fill="none" d="M 3.5 0.5 L 284.5 0.5 C 287.5 0.5 287.5 0.5 287.5 3.5 L 287.5 47.5 C 287.5 50.5 287.5 50.5 284.5 50.5 L 149.5 50.5 143.5 56.5 137.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke-width="1" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)" width="287" height="50"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 284.5 0.5 C 287.5 0.5 287.5 0.5 287.5 3.5 L 287.5 47.5 C 287.5 50.5 287.5 50.5 284.5 50.5 L 149.5 50.5 143.5 56.5 137.5 50.5 3.5 50.5 C 0.5 50.5 0.5 50.5 0.5 47.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke-width="1" stroke="#206693"></path></g></svg><div class="highcharts-tooltip" style="position: absolute; left: 191px; top: 54px; visibility: hidden;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"><b>2014</b><br><div style="position: relative;display: block; height: 100%; width: 100%; "><span class="tooltip-icon triangle" style="border-bottom-color: #206693;"></span><span class="tooltip-name">(Ind. Categoria) Fideuram Flessibili EUR: <b>3,477%</b></span></div></span></div></div></div>
<div id="widget_chartVc_chartFooter" class="chart-footer ui-widget-header" style="height: 0px; padding: 0px; margin: 0px;"></div></div>
    <div class="vc-footer  full-size" style="top: auto; height: 0px;"></div>
</div></div>
</div>
    <div class="vc-footer  full-size" style="top: auto; height: 0px;"></div>
</div></div>
		</div>
	    
	    <!-- Scripts -->
		<script>
			var isLocal = true;
			var appVersion = 1.0;
			
			// JSP page variables to JS variables
			var chartData = {};
			
				chartData = JSON.parse('{"categories":["2013","2014","2015","2016","2017"],"series":[{"data":[9.2833,2.5644,1.4325,4.7374,2.7213],"deusId":"AC1B005346625E71EFC0","marker":{"symbol":"square"},"index":0,"name":"GESTIELLE ABSOLUTE RETURN -PT"},{"data":[6.0767,3.4771,1.6406,0.9409,2.2063],"deusId":"ACD4004E23D65E8C74C0","marker":{"symbol":"triangle"},"index":0,"name":"(Ind. Categoria) Fideuram Flessibili EUR"}]}');
			
			
			var chartType;
			
				chartType = 'PERF_BAR'; 
			
			
			var srcDir;
			
				srcDir = '/HT/DEUS/'; 
			
			
			var seriesProxy;
			
				seriesProxy = '/WEBHT/investimenti/fondiGraficoUpdate.do'; 
			
			
			// Creation of the chart
			require([ srcDir + 'js/init.js'], function() {
				
				// Sources baseUrl config
				requirejs.config({ baseUrl: srcDir + 'js' });
                
				// Build of the chart				
                require([
                    "WidgetChartViewController",
                    "LoadingManager"
                ], function(WidgetChartViewController, LoadingManager) {
                    
                    // Loading manager
                    var lm = new LoadingManager({containerId: "widget-container"});
                    
                    // Height and width calculation
		    	   	var height = $("#widget-container").height();
		    	   	var width = $("#widget-container").width();

                    var chartVc = new WidgetChartViewController({
                        id: "widget",
                        chartType: chartType,
                        chartData: chartData,
                        chartOptions: {
                        	options: {
    							uichartOpt: {
    								chart: {
    									width: width,
    									height: height
    								}
    							}
    						},
                        	seriesApiOptions: {
                    			getURL: function() {
                    				return seriesProxy;
                    			}
                    		}
                        },
                        __lm__: lm
                    });
                    chartVc.build();
                    
                    // Window event
                    $(window).resize(function() {
                        chartVc.updateSize();
                    });
                });
				
			});
			
		</script>
	

</body></html>