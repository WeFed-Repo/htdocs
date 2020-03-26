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
	
	
	






 <div class="section clearfix">

<div id="newsHeadLines" class="jqGridTOLDiv">
<h3 class="titleSection"></h3>
<div class="context-buttons pull-right clearfix "><span class="bottoni_intestazione_tabella"></span>
<span class="rounded_corner">&nbsp;</span>
<span class="bottoni"><button class="btnTools button bottoneStrumenti ui-widget-header" style="display: none;"></button></span></div><div class="tappo"></div><form id="formNews" method="post" action="/WEBHT/investimenti/newsHeadlinesJson.do" class="divForm formHeaderGrid">
		<input name="range" value="O" id="range" type="hidden">
		<input name="wordInTitle" value="" id="wordInTitle" type="hidden">
		<input name="simbol" value="IT0005239360" id="simbol" type="hidden">
		<input name="isin" value="IT0005239360" id="isin" type="hidden">
	</form>
	<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_newsHeadLinesTable" dir="ltr" style="width: 100%;"><div class="ui-widget-overlay jqgrid-overlay" id="lui_newsHeadLinesTable"></div><div class="loading ui-state-default ui-state-active" id="load_newsHeadLinesTable" style="display: none;">Caricamento...</div><div class="ui-jqgrid-view" id="gview_newsHeadLinesTable" style="width: 100%;"><div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;"><span class="ui-jqgrid-title">false</span></div><div style="width: 100%;" class="ui-state-default ui-jqgrid-hdiv"><div class="ui-jqgrid-hbox"><table class="ui-jqgrid-htable" style="width: 100%;" role="grid" aria-labelledby="gbox_newsHeadLinesTable" cellspacing="0" cellpadding="0" border="0"><thead><tr class="ui-jqgrid-labels" role="rowheader"><th id="newsHeadLinesTable_datiJqGrid.id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.id" style="width: 150px; display: none;"><div id="jqgh_newsHeadLinesTable_datiJqGrid.id" class="ui-jqgrid-sortable">datiJqGrid.id<span class="s-ico" style=""><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_datiJqGrid.titoloTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloTot" style="width: 150px; display: none;"><div id="jqgh_newsHeadLinesTable_datiJqGrid.titoloTot" class="ui-jqgrid-sortable">datiJqGrid.titoloTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_datiJqGrid.titoloGTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloGTot" style="width: 150px; display: none;"><div id="jqgh_newsHeadLinesTable_datiJqGrid.titoloGTot" class="ui-jqgrid-sortable">datiJqGrid.titoloGTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_data" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Ora aggiornamento" style="width: 70px;"><div id="jqgh_newsHeadLinesTable_data" class="ui-jqgrid-sortable">Data<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_data" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Ora" style="width: 67px;"><div id="jqgh_newsHeadLinesTable_data" class="ui-jqgrid-sortable">Ora<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_testata" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft last" title="Titolo News" style="width: 522px;"><div id="jqgh_newsHeadLinesTable_testata" class="ui-jqgrid-sortable">Notizia<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="newsHeadLinesTable_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="idNews" style="width: 50px; display: none;"><div id="jqgh_newsHeadLinesTable_id" class="ui-jqgrid-sortable">idNews<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr></thead></table></div></div><div class="ui-jqgrid-bdiv" style="height: 187px; width: 100%;"><div style="position:relative;"><div></div><table id="newsHeadLinesTable" class="jqGridTOLTable ui-jqgrid-btable" tabindex="1" role="grid" aria-multiselectable="false" aria-labelledby="gbox_newsHeadLinesTable" style="width: 100%;" cellspacing="0" cellpadding="0" border="0"><tbody><tr class="jqgfirstrow" role="row" style="height:auto"><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height:0px;width:150px;display:none;"></td><td role="gridcell" style="height: 0px; width: 70px;"></td><td role="gridcell" style="height: 0px; width: 67px;"></td><td role="gridcell" style="height: 0px; width: 522px;"></td><td role="gridcell" style="height:0px;width:50px;display:none;"></td></tr><tr id="I_NEWS_1" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_1" aria-describedby="newsHeadLinesTable_datiJqGrid.id">I_NEWS_1</td><td role="gridcell" style="display:none;" title="" aria-describedby="newsHeadLinesTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="newsHeadLinesTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="22/05/2017" aria-describedby="newsHeadLinesTable_data">22/05/2017</td><td role="gridcell" style="text-align:Center;" title="12:39" aria-describedby="newsHeadLinesTable_data">12:39</td><td role="gridcell" style="text-align:Left;" title="UniCredit: controllata croata vende portafoglio Npl da 450 milioni" aria-describedby="newsHeadLinesTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495449750629101', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '22/05/2017%2012.39.00', 'testata', 'UniCredit%3A%20controllata%20croata%20vende%20portafoglio%20Npl%20da%20450%20milioni')">UniCredit: controllata croata vende portafoglio Npl da 450 milioni</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495449750629101" aria-describedby="newsHeadLinesTable_id">1495449750629101</td></tr><tr id="I_NEWS_2" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_2" aria-describedby="newsHeadLinesTable_datiJqGrid.id">I_NEWS_2</td><td role="gridcell" style="display:none;" title="" aria-describedby="newsHeadLinesTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="newsHeadLinesTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="22/05/2017" aria-describedby="newsHeadLinesTable_data">22/05/2017</td><td role="gridcell" style="text-align:Center;" title="08:21" aria-describedby="newsHeadLinesTable_data">08:21</td><td role="gridcell" style="text-align:Left;" title="### Morning Note: economia e finanza dai giornali" aria-describedby="newsHeadLinesTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495434260504100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '22/05/2017%2008.21.00', 'testata', '%23%23%23%20Morning%20Note%3A%20economia%20e%20finanza%20dai%20giornali')">### Morning Note: economia e finanza dai giornali</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495434260504100" aria-describedby="newsHeadLinesTable_id">1495434260504100</td></tr></tbody></table></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mnewsHeadLinesTable">&nbsp;</div></div>
	
<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li></ul></div>
</div>
<script>	
$(document).ready(function() {
	startGrid('#newsHeadLines', { 
url: '../investimenti/newsHeadlinesJson.do',
caption:"News",
height:'187',
rowNum:20,
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'data',jsonmap:'data',label:"Data",title:"DataAggiornamento",width:150,align:'Left',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'data',jsonmap:'data',label:"Ora",title:"Ora aggiornamento",width:90,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'testata',jsonmap:'testata',label:"Notizia",title:"Titolo News",width:700,align:'Left',formatter:linkFmt,formatoptions:{funzioneJS:'openAjaxDialog',urlLink:'/investimenti/newsDettaglio.do',idNews:'id',title:'News',altezza:'500',width:'500',data:'data',testata:'testata'},unformat:linkUnFmt},
{name:'id',jsonmap:'id',label:"idNews",title:"idNews",width:50,align:'Left',hidden:true,hidedlg:true}
],
opzioniTabella:[
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}}
],
opzioniRiga:[
]
});

	$('#newsHeadLines .bottoneFiltro').hide();
	$('#newsHeadLines .bottoneStrumenti').hide();
});
</script>

</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>


</body></html>