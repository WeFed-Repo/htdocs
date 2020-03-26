<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
		
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161229"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161229" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161229" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161229" />






	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css" />


<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
<![endif]-->



	

<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.jqgrid_ng.css" />
<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui.multiselect.css" />


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-migrate-1.0.0.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.ui.touch-punch.min.js"></script>

	<script type="text/javascript" language="javascript" src="/HT/JS/script/ie10-viewport.js"></script> 

<script type="text/javascript" language="javascript" src="/HT/JS/script/jsapi.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.dateIT.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.altImg.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.formattedNum.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.natural.js"></script>


<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.form.js"></script>





<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
 
 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/html5.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/respond.min.js"></script>
<![endif]-->


<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js?v=161229"></script>






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
<script type="text/javascript" src="/HT/JS/script/funzioniInvestimenti.js?v=161229"></script>

<script type="text/javascript" src="/HT/JS/HashMap.js"></script>
<script type="text/javascript" src="/HT/JS/script/funzioniJQGrid.js?v=161229"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/cs/chartserverHS.min.js"></script>
<script type="text/javascript" src="/HT/JS/Highcharts/js/highstock.js"></script>
<script type="text/javascript" src="/HT/JS/lightstreamer.js"></script>
<script type="text/javascript" src="/HT/JS/funzioniPush.js"></script>
		
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161229"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161229" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161229" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161229" />






	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css" />


<!--[if IE 8]>
<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
<![endif]-->


	
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

 	









<form id="simuFormSub" method="post" action="/WEBHT/investimenti/titoliPreferiti.do">
	<input type="hidden" name="codLista" id="codListSub"/>
</form>

<div id="I_TITPREF" class="jqGridTOLDiv nosort" >
<!-- 	FORM GESTIONE LISTE -->
	<form id="simuForm" method="post" action="/WEBHT/investimenti/titoliSimulatiJson.do" class="form-horizontal divForm formHeaderGrid">
		<div class="bs-example">
			<div class="form-group">
				<div class="form-field-input col-xs-12">
					<input type="hidden" name="tipoRapportoSimulato" value="PREF" />
					<label class="control-label" for="PTF_SEL">Lista</label>
					<div class="form-field">
						<div class="col-xs-4">
						<select name="codLista" onchange="ricaricaSimulati(this)" id="codLista" class="form-control"><option value="240638:1" selected="selected">That</option>
							
								<option value="240838:1">Undock</option></select></div>
						<div class="col-xs-6">	
						<input class="btn button" type="button" value="Nuova" title="Crea una lista" onclick="creaSelezione(1);" /> 
						<input class="btn button" type="button" value="Rinomina" title="Rinomina una lista" onclick="rinominaSelezione();" /> 
						<input class="btn button" type="button" value="Elimina" title="Elimina lista" onclick="eliminaSelezione();" />
					</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<table id="I_TITPREF_Table" class="jqGridTOLTable"></table>
</div>
<script>
	$(document).ready(function() {
		startGrid('#I_TITPREF', { 
caption:"Titoli Preferiti",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'simbolo',jsonmap:'titolo.simbolo',push:'N',label:"Cod.",title:"Codice del titolo",width:50,align:'Left',classes:'uppercase'},
{name:'titolo.denominazione',jsonmap:'titolo.denominazione',label:"Titolo",title:"Descrizione titolo",width:130,align:'Left',classes:'uppercase'},
{name:'codMercatoInfo',jsonmap:'titolo.codMercatoInfo',push:'N',label:"Piazza",title:"Piazza",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'titolo.descMercato',jsonmap:'titolo.descMercato',push:'N',label:"Mercato",title:"Mercato",width:50,align:'Center'},
{name:'LAST',jsonmap:'titolo.quotazione.last',push:'S',label:"P. di Mercato",title:"Ultimo prezzo disponibile, espresso nella divisa di negoziazione. ",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'VAR_PERC',jsonmap:'titolo.quotazione.variazionePercentuale',push:'S',label:"Var%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:40,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'TRDDIR_CAH',jsonmap:'titolo.quotazione.trend',push:'S',label:"Tr.",title:"Trend",width:20,align:'Center',formatter:trendFmt,sortable:false},
{name:'TIMELAST_STR',jsonmap:'titolo.quotazione.ora',push:'S',label:"Ora",title:"Ora",width:35,align:'Right',formatter:dateFmt,formatoptions:{ltformat:'d/m/Y H:i',srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'titolo.anagrafica.divisaTrattazione',jsonmap:'titolo.anagrafica.divisaTrattazione',label:"Div.",title:"Divisa Trattazione",width:30,align:'Center'},
{name:'isin',jsonmap:'titolo.isin',push:'N',label:"ISIN",title:"ISIN",width:80,align:'Left'},
{name:'DESC_FASE',jsonmap:'titolo.quotazione.descrizioneFase',push:'S',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'ritardo',jsonmap:'titolo.quotazione.ritardata',push:'N',label:"Rit.",title:"Ritardata",width:28,align:'Center'},
{name:'QTOT',jsonmap:'titolo.quotazione.quantitaTotale',push:'S',label:"Volumi",title:"Volumi trattati",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'titolo.quotazione.apertura',jsonmap:'titolo.quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'HIGH_1_CAH',jsonmap:'titolo.quotazione.massimoGiorno',push:'S',label:"Max",title:"Massimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'LOW_1_CAH',jsonmap:'titolo.quotazione.minimoGiorno',push:'S',label:"Min",title:"Minimo del giorno",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'idMovimento',jsonmap:'idMovimento',label:"Id Movimento",title:"Id Movimento",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'idPortafoglio',jsonmap:'idPortafoglio',label:"id Portafoglio",title:"id Portafoglio",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'BID_CAH',jsonmap:'titolo.quotazione.bid',push:'S',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'BIDSIZE_CAH',jsonmap:'titolo.quotazione.quantitaBid',push:'S',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'ASK_CAH',jsonmap:'titolo.quotazione.ask',push:'S',label:"P. di Vendita",title:"Prezzo di Vendita",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'ASKSIZE_CAH',jsonmap:'titolo.quotazione.quantitaAsk',push:'S',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency',hidden:true},
{name:'titolo.quotazione.prezzoRiferimento',jsonmap:'titolo.quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency',hidden:true}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
]
});

		
		
			setTimeout('startStreamGrid("https://collpush.intranet.servizi:443","I_TITPREF_Table","KlXybFb8KRO5LDjzLRp5LzczMA%3D%3D")', 2000);
		
		
		
	});
	
	function ricaricaSimulati(x){
		
		
			$("#codListSub").val($('#codLista').val());
			$("#simuFormSub").submit();
		
		
		
	}
	function titoliSimulatiPush(){
		ricaricaGriglia('I_TITPREF_Table');
	}
	
	function creaSelezione(tipoRapporto){
		openAjaxDialog('/investimenti/creaSelezione.do', 'tipoRapportoSimulato', tipoRapporto, 'dialogName', 'dialogSelezione', 'title', 'Crea nuova lista', 'width' ,600);
	}
	
	function rinominaSelezione(){
		openAjaxDialog('/investimenti/rinominaSelezione.do', 'codLista', $('#codLista').val(), 'dialogName', 'dialogSelezione', 'title', 'Rinomina una lista', 'width' ,600);
	}
	
	function eliminaSelezione(){
		if(confirm('Sicuro di voler eliminare la lista '+ $('#codLista option:selected').text() + '?')) {
			openAjaxDialog('/investimenti/eliminaSelezione.do', 'codLista', $('#codLista').val(), 'dialogName', 'dialogSelezione', 'title', 'Elimina lista', 'width' ,600);
		}
	}
</script>

<script>
function helpTabellaI_TITPREF() {

}
</script>






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


</div>


</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>
</body>
</html>
