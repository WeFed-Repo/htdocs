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
		 function hidePopUpFunction(){
		 	return false;
		 }
		</script>
	<style>
	@page {size: landscape;	}
	</style>

	<div class= "section clearfix">

<div id="I_NEWS" class="jqGridTOLDiv nosort ">
	<!--table id="I_NEWSTable" class="jqGridTOLTable"></table-->
		
	
	
	<div id="I_NEWSPager"></div>
	<form id="formHeadlines" method="post" action="/WEBHT/investimenti/newsHeadlinesJson.do" class="form-horizontal divForm formHeaderGrid" onsubmit="ricarica(this); return false">

		<div class="bs-example clearfix">
			<div class="form-group">
				<div class="form-field-input">
					
						
							<div class="col-xs-4">
								<label class="control-label" for="periodo_sel">Periodo </label>
								<div class="">
									<select name="range" onchange="ricarica(this)" id="range" class="form-control"><option value="O">oggi</option>
<option value="I">ieri</option>
<option value="S">ultima settimana</option></select>
								</div>
							</div>
						
						
					
					<div class="col-xs-4">
						
							<label class="control-label" for="parolaChiave">Cerca nel titolo</label>
						
						<div class="">
							<input type="text" name="wordInTitle" maxlength="200" size="30" value="" id="wordInTitle" class="form-control" />
						</div>
					</div>
					<div class="col-xs-4">
						
							
								<div class="actions" style="margin-top: 28px;">
									<input class="button btn" type="button" value="Ricerca" title="Ricerca" onclick="ricarica(this);" />
								</div>
							
						
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_I_NEWSTable" dir="ltr" style="width: 100%;">
	<div class="ui-widget-overlay jqgrid-overlay" id="lui_I_NEWSTable"></div>
	<div class="loading ui-state-default ui-state-active" id="load_I_NEWSTable" style="display: none;">Caricamento...</div>
	<div class="ui-jqgrid-view" id="gview_I_NEWSTable" style="width: 100%;">
		<div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix" style="display: none;">
			<span class="ui-jqgrid-title">false</span>
		</div>
		<div class="ui-state-default ui-jqgrid-hdiv" style="width: 100%;">
			<div class="ui-jqgrid-hbox">
				<table class="ui-jqgrid-htable" style="width: 100%;" role="grid" aria-labelledby="gbox_I_NEWSTable" cellspacing="0" cellpadding="0" border="0">
				<thead>
					<tr class="ui-jqgrid-labels" role="rowheader"><th id="I_NEWSTable_datiJqGrid.id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.id" style="width: 150px; display: none;"><div id="jqgh_I_NEWSTable_datiJqGrid.id" class="ui-jqgrid-sortable">datiJqGrid.id<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_datiJqGrid.titoloTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloTot" style="width: 150px; display: none;"><div id="jqgh_I_NEWSTable_datiJqGrid.titoloTot" class="ui-jqgrid-sortable">datiJqGrid.titoloTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_datiJqGrid.titoloGTot" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="datiJqGrid.titoloGTot" style="width: 150px; display: none;"><div id="jqgh_I_NEWSTable_datiJqGrid.titoloGTot" class="ui-jqgrid-sortable">datiJqGrid.titoloGTot<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_data" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="Ora aggiornamento" style="width: 70px;"><div id="jqgh_I_NEWSTable_data" class="ui-jqgrid-sortable">Data<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_data" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr" title="Ora" style="width: 95px;"><div id="jqgh_I_NEWSTable_data" class="ui-jqgrid-sortable">Ora<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_testata" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft last" title="Titolo News" style="width: 740px;"><div id="jqgh_I_NEWSTable_testata" class="ui-jqgrid-sortable">Notizia<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th><th id="I_NEWSTable_id" role="columnheader" class="ui-state-default ui-th-column ui-th-ltr oLeft" title="idNews" style="width: 50px; display: none;"><div id="jqgh_I_NEWSTable_id" class="ui-jqgrid-sortable">idNews<span class="s-ico" style="display:none"><span sort="asc" class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span sort="desc" class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr>
				</thead>
				</table>
			</div>
		</div>
		<div class="ui-jqgrid-bdiv" style="height: auto; width: 100%;">
			<div style="position:relative;"><div>
		</div>
		<table id="I_NEWSTable" class="jqGridTOLTable ui-jqgrid-btable" tabindex="1" cellspacing="0" cellpadding="0" border="0" role="grid" aria-multiselectable="false" aria-labelledby="gbox_I_NEWSTable" style="width: 100%;">
		<tbody>
			<tr class="jqgfirstrow" role="row" style="height:auto">
				<td role="gridcell" style="height:0px;width:150px;display:none;"></td>
				<td role="gridcell" style="height:0px;width:150px;display:none;"></td>
				<td role="gridcell" style="height:0px;width:150px;display:none;"></td>
				<td role="gridcell" style="height: 0px; width: 70px;"></td>
				<td role="gridcell" style="height:0px;width:95px;"></td>
				<td role="gridcell" style="height: 0px; width: 740px;"></td>
				<td role="gridcell" style="height:0px;width:50px;display:none;"></td>
			</tr>
			<tr id="I_NEWS_1" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr">
				<td role="gridcell" style="display:none;" title="I_NEWS_1" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_1</td>
				<td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td>
				<td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td>
				<td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td>
				<td role="gridcell" style="text-align:Center;" title="10:57" aria-describedby="I_NEWSTable_data">10:57</td>
				<td role="gridcell" style="text-align:Left;" title="Borse Asia: chiusure in lieve calo per Hong Kong (-0,17%) e Shanghai (-0,27%)" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/WEBHT/newsDettaglio.php', 'idNews', '1495011625988100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.57.00', 'testata', 'Borse%20Asia%3A%20chiusure%20in%20lieve%20calo%20per%20Hong%20Kong%20%28-0%2C17%25%29%20e%20Shanghai%20%28-0%2C27%25%29')">Borse Asia: chiusure in lieve calo per Hong Kong (-0,17%) e Shanghai (-0,27%)</a></td>
				<td role="gridcell" style="text-align:Left;display:none;" title="1495011625988100" aria-describedby="I_NEWSTable_id">1495011625988100</td>
			</tr>
			<tr id="I_NEWS_2" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_2" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_2</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:57" aria-describedby="I_NEWSTable_data">10:57</td><td role="gridcell" style="text-align:Left;" title="Pil: Boccia, se guardiamo indietro fatto molto, resta da fare ma direzione giusta" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495011624770100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.57.00', 'testata', 'Pil%3A%20Boccia%2C%20se%20guardiamo%20indietro%20fatto%20molto%2C%20resta%20da%20fare%20ma%20direzione%20giusta')">Pil: Boccia, se guardiamo indietro fatto molto, resta da fare ma direzione giusta</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495011624770100" aria-describedby="I_NEWSTable_id">1495011624770100</td></tr><tr id="I_NEWS_3" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_3" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_3</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:54" aria-describedby="I_NEWSTable_data">10:54</td><td role="gridcell" style="text-align:Left;" title="Metalli: gruppo platino - mattino" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495011444707100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.54.00', 'testata', 'Metalli%3A%20gruppo%20platino%20-%20mattino')">Metalli: gruppo platino - mattino</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495011444707100" aria-describedby="I_NEWSTable_id">1495011444707100</td></tr><tr id="I_NEWS_4" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_4" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_4</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:54" aria-describedby="I_NEWSTable_data">10:54</td><td role="gridcell" style="text-align:Left;" title="Fisco: Casero, tema digitale va affrontato in modo concreto, senza fretta" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495011444395100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.54.00', 'testata', 'Fisco%3A%20Casero%2C%20tema%20digitale%20va%20affrontato%20in%20modo%20concreto%2C%20senza%20fretta')">Fisco: Casero, tema digitale va affrontato in modo concreto, senza fretta</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495011444395100" aria-describedby="I_NEWSTable_id">1495011444395100</td></tr><tr id="I_NEWS_5" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_5" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_5</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:52" aria-describedby="I_NEWSTable_data">10:52</td><td role="gridcell" style="text-align:Left;" title="Hedge Invest: 10 motivi per cui i mercati azionari africani faranno meglio- PAROLA AL MERCATO" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495011264020100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.52.00', 'testata', 'Hedge%20Invest%3A%2010%20motivi%20per%20cui%20i%20mercati%20azionari%20africani%20faranno%20meglio-%20PAROLA%20AL%20MERCATO')">Hedge Invest: 10 motivi per cui i mercati azionari africani faranno meglio- PAROLA AL MERCATO</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495011264020100" aria-describedby="I_NEWSTable_id">1495011264020100</td></tr><tr id="I_NEWS_6" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_6" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_6</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:48" aria-describedby="I_NEWSTable_data">10:48</td><td role="gridcell" style="text-align:Left;" title="Eurizon Capital: utile I trim sale a 118 mln (+28%), flussi netti oltre 5 mld" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495011082207100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.48.00', 'testata', 'Eurizon%20Capital%3A%20utile%20I%20trim%20sale%20a%20118%20mln%20%28+28%25%29%2C%20flussi%20netti%20oltre%205%20mld')">Eurizon Capital: utile I trim sale a 118 mln (+28%), flussi netti oltre 5 mld</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495011082207100" aria-describedby="I_NEWSTable_id">1495011082207100</td></tr><tr id="I_NEWS_7" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr ui-state-hover"><td role="gridcell" style="display:none;" title="I_NEWS_7" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_7</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:45" aria-describedby="I_NEWSTable_data">10:45</td><td role="gridcell" style="text-align:Left;" title="Gb: disoccupazione a fine marzo scende al 4,6%, record da 1975 (RCOP)" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495010903520100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.45.00', 'testata', 'Gb%3A%20disoccupazione%20a%20fine%20marzo%20scende%20al%204%2C6%25%2C%20record%20da%201975%20%28RCOP%29')">Gb: disoccupazione a fine marzo scende al 4,6%, record da 1975 (RCOP)</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495010903520100" aria-describedby="I_NEWSTable_id">1495010903520100</td></tr><tr id="I_NEWS_8" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_8" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_8</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:41" aria-describedby="I_NEWSTable_data">10:41</td><td role="gridcell" style="text-align:Left;" title="Cme: Futures su Indici" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495010543707100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.41.00', 'testata', 'Cme%3A%20Futures%20su%20Indici')">Cme: Futures su Indici</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495010543707100" aria-describedby="I_NEWSTable_id">1495010543707100</td></tr><tr id="I_NEWS_9" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_9" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_9</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:41" aria-describedby="I_NEWSTable_data">10:41</td><td role="gridcell" style="text-align:Left;" title="Iccrea: Magagni, adesione Chianti Banca? Tutto da vedere" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495010543379100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.41.00', 'testata', 'Iccrea%3A%20Magagni%2C%20adesione%20Chianti%20Banca%3F%20Tutto%20da%20vedere')">Iccrea: Magagni, adesione Chianti Banca? Tutto da vedere</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495010543379100" aria-describedby="I_NEWSTable_id">1495010543379100</td></tr><tr id="I_NEWS_10" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_10" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_10</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:32" aria-describedby="I_NEWSTable_data">10:32</td><td role="gridcell" style="text-align:Left;" title="*** Gb: disoccupazione a fine marzo scende al 4,6%  (RCOP)" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495010004348100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.32.00', 'testata', '***%20Gb%3A%20disoccupazione%20a%20fine%20marzo%20scende%20al%204%2C6%25%20%20%28RCOP%29')">*** Gb: disoccupazione a fine marzo scende al 4,6%  (RCOP)</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495010004348100" aria-describedby="I_NEWSTable_id">1495010004348100</td></tr><tr id="I_NEWS_11" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_11" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_11</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:32" aria-describedby="I_NEWSTable_data">10:32</td><td role="gridcell" style="text-align:Left;" title="Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese -3-" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495010004457100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.32.00', 'testata', 'Bilancia%20commerciale%3A%20Istat%2C%20a%20marzo%20surplus%20di%205%2C4%20mld%2C%20export%20+4%25%20su%20mese%20-3-')">Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese -3-</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495010004457100" aria-describedby="I_NEWSTable_id">1495010004457100</td></tr><tr id="I_NEWS_12" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_12" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_12</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:23" aria-describedby="I_NEWSTable_data">10:23</td><td role="gridcell" style="text-align:Left;" title="Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese -2-" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495009462113100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.23.00', 'testata', 'Bilancia%20commerciale%3A%20Istat%2C%20a%20marzo%20surplus%20di%205%2C4%20mld%2C%20export%20+4%25%20su%20mese%20-2-')">Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese -2-</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495009462113100" aria-describedby="I_NEWSTable_id">1495009462113100</td></tr><tr id="I_NEWS_13" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_13" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_13</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:16" aria-describedby="I_NEWSTable_data">10:16</td><td role="gridcell" style="text-align:Left;" title="### Morning note: economia e finanza dai giornali esteri" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495009102973100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.16.00', 'testata', '%23%23%23%20Morning%20note%3A%20economia%20e%20finanza%20dai%20giornali%20esteri')">### Morning note: economia e finanza dai giornali esteri</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495009102973100" aria-describedby="I_NEWSTable_id">1495009102973100</td></tr><tr id="I_NEWS_14" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_14" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_14</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:15" aria-describedby="I_NEWSTable_data">10:15</td><td role="gridcell" style="text-align:Left;" title="LME: Stocks a magazzino - Riepilogo" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495009102598100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.15.00', 'testata', 'LME%3A%20Stocks%20a%20magazzino%20-%20Riepilogo')">LME: Stocks a magazzino - Riepilogo</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495009102598100" aria-describedby="I_NEWSTable_id">1495009102598100</td></tr><tr id="I_NEWS_15" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_15" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_15</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:09" aria-describedby="I_NEWSTable_data">10:09</td><td role="gridcell" style="text-align:Left;" title="*** Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495008756176100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.09.00', 'testata', '***%20Bilancia%20commerciale%3A%20Istat%2C%20a%20marzo%20surplus%20di%205%2C4%20mld%2C%20export%20+4%25%20su%20mese')">*** Bilancia commerciale: Istat, a marzo surplus di 5,4 mld, export +4% su mese</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495008756176100" aria-describedby="I_NEWSTable_id">1495008756176100</td></tr><tr id="I_NEWS_16" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_16" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_16</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="10:01" aria-describedby="I_NEWSTable_data">10:01</td><td role="gridcell" style="text-align:Left;" title="Tassi: Interest Rates Swaps ore 10,00" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495008208488100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2010.01.00', 'testata', 'Tassi%3A%20Interest%20Rates%20Swaps%20ore%2010%2C00')">Tassi: Interest Rates Swaps ore 10,00</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495008208488100" aria-describedby="I_NEWSTable_id">1495008208488100</td></tr><tr id="I_NEWS_17" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_17" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_17</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="09:58" aria-describedby="I_NEWSTable_data">09:58</td><td role="gridcell" style="text-align:Left;" title="Borsa: Fca (-2,4%) sotto pressione in attesa delle mosse Ue" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495008022863100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2009.58.00', 'testata', 'Borsa%3A%20Fca%20%28-2%2C4%25%29%20sotto%20pressione%20in%20attesa%20delle%20mosse%20Ue')">Borsa: Fca (-2,4%) sotto pressione in attesa delle mosse Ue</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495008022863100" aria-describedby="I_NEWSTable_id">1495008022863100</td></tr><tr id="I_NEWS_18" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr"><td role="gridcell" style="display:none;" title="I_NEWS_18" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_18</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="09:56" aria-describedby="I_NEWSTable_data">09:56</td><td role="gridcell" style="text-align:Left;" title="Carburanti: ancora tutto fermo, quotazioni oil Mediterraneo in altalena -2-" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495007844457100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2009.56.00', 'testata', 'Carburanti%3A%20ancora%20tutto%20fermo%2C%20quotazioni%20oil%20Mediterraneo%20in%20altalena%20-2-')">Carburanti: ancora tutto fermo, quotazioni oil Mediterraneo in altalena -2-</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495007844457100" aria-describedby="I_NEWSTable_id">1495007844457100</td></tr><tr id="I_NEWS_19" tabindex="-1" role="row" class="ui-widget-content jqgrow ui-row-ltr noBorderBottom"><td role="gridcell" style="display:none;" title="I_NEWS_19" aria-describedby="I_NEWSTable_datiJqGrid.id">I_NEWS_19</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloTot">&nbsp;</td><td role="gridcell" style="display:none;" title="" aria-describedby="I_NEWSTable_datiJqGrid.titoloGTot">&nbsp;</td><td role="gridcell" style="text-align:Left;" title="17/05/2017" aria-describedby="I_NEWSTable_data">17/05/2017</td><td role="gridcell" style="text-align:Center;" title="09:56" aria-describedby="I_NEWSTable_data">09:56</td><td role="gridcell" style="text-align:Left;" title="Carburanti: ancora tutto fermo, quotazioni oil Mediterraneo in altalena" aria-describedby="I_NEWSTable_testata"><a href="#" onclick="openAjaxDialog('/investimenti/newsDettaglio.do', 'idNews', '1495007843863100', 'title', 'News', 'altezza', '500', 'width', '500', 'data', '17/05/2017%2009.56.00', 'testata', 'Carburanti%3A%20ancora%20tutto%20fermo%2C%20quotazioni%20oil%20Mediterraneo%20in%20altalena')">Carburanti: ancora tutto fermo, quotazioni oil Mediterraneo in altalena</a></td><td role="gridcell" style="text-align:Left;display:none;" title="1495007843863100" aria-describedby="I_NEWSTable_id">1495007843863100</td></tr></tbody></table></div></div></div><div class="ui-jqgrid-resize-mark" id="rs_mI_NEWSTable">&nbsp;</div><div id="I_NEWSPager" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 100%;"><div id="pg_I_NEWSPager" class="ui-pager-control" role="group"><table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;" role="row"><tbody><tr><td id="I_NEWSPager_left" align="left"></td><td id="I_NEWSPager_center" align="center" style="white-space: pre; width: 215px;"><table cellspacing="0" cellpadding="0" border="0" style="table-layout:auto;" class="ui-pg-table"><tbody><tr><td id="first_I_NEWSPager" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-first"></span></td><td id="prev_I_NEWSPager" class="ui-pg-button ui-corner-all ui-state-disabled"><span class="ui-icon ui-icon-seek-prev"></span></td><td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td><td dir="ltr">Pagina <input class="ui-pg-input" type="text" size="2" maxlength="7" value="0" role="textbox"> di <span id="sp_1_I_NEWSPager">28</span></td><td class="ui-pg-button ui-state-disabled" style="width:4px;"><span class="ui-separator"></span></td><td id="next_I_NEWSPager" class="ui-pg-button ui-corner-all"><span class="ui-icon ui-icon-seek-next"></span></td><td id="last_I_NEWSPager" class="ui-pg-button ui-corner-all"><span class="ui-icon ui-icon-seek-end"></span></td></tr></tbody></table></td><td id="I_NEWSPager_right" align="right"><div dir="ltr" style="text-align:right" class="ui-paging-info">1 - 19 di 555</div></td></tr></tbody></table></div></div></div>
<script>
	$(document)
			.ready(
					function() {
					    var label='Cerca nel titolo';
						
						startGrid('#I_NEWS', { 
caption:"News",
height:'auto',
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

						
						$('#formHeadlines').show();
						$('#I_NEWS .bottoneFiltro').hide();
						var popUpNews = 'S';
						if (popUpNews === 'S') {
							$('#I_NEWS .bottoneStrumenti').hide();
							$('#I_NEWS').addClass('section clearfix');		
						    $('#I_NEWS').parent().removeClass('riquadro');
						}else{
						
						 //non sono nel popup
							  $('#wordInTitle').val(label);
							  
					    	$('#wordInTitle').focus(
  						 			 function(){
     								   $(this).val('');
   						 });
   						 
   						 	$('#wordInTitle').blur(
  						 			 function(){
     								 if (this.value.length == 0) {
         							 this.value = label;
       									 }
   						 });
						}
						$('#I_NEWS .jqGridTOLTable')
								.setGridParam({
									height : 'auto'
								});
						$('#I_NEWS .jqGridTOLTable')
								.setGridParam({
									recordtext : '{0} - {1} di {2}'
								});
					});

	function hidePopUpFunction() {
		var popUpNews = 'S';
		if (popUpNews === 'S') {
			return false;
		} else {
			return true;
		}
	}
	

</script>


</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>
</body>
</html>

