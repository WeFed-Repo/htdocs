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

<div class="section clearfix" style="background: rgb(255, 255, 255);">

 	








<div id="I_TITDOS" class="jqGridTOLDiv nosort">
	<table id="I_TITDOS_Table" class="jqGridTOLTable"></table>
</div>
 <div id="titoliPrefRest" class="visible-xs" style="margin:5px"><div class="col-xs-12" style="display: block;">
	<h3 id="denominazione">BANCO BPM DIP14 var % n.d.</h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label class="col-xs-4">Quantit&agrave;:</label>
				<span class="col-xs-8">7,00</span>
			</div>
			<div id="last" class="clearfix">
				<label class="col-xs-4">Mercato:</label>
				<span class="col-xs-8">2,0000</span>
			</div>
			<div id="controvaloreMercatoEuro" class="clearfix">
				<label class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8">14,00</span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc" class="clearfix">
				<label class="col-xs-4">Upl % :</label>
				<span class="col-xs-8 negativo">-85,57</span>
			</div>
			<div id="prezzoMedioSecco" class="clearfix">
				<label class="col-xs-4">P. carico:</label>
				<span class="col-xs-8">13,86</span>
			</div>
			<div id="uplEuro" class="clearfix">
				<label class="col-xs-4">Upl &euro;:</label>
				<span class="col-xs-8 negativo">-83,050</span>
			</div>
	
		</div>
	</div>
</div><div class="col-xs-12" style="display: block;">
	<h3 id="denominazione">BANCO BPM DIP15 var % n.d.</h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label class="col-xs-4">Quantit&agrave;:</label>
				<span class="col-xs-8">6,00</span>
			</div>
			<div id="last" class="clearfix">
				<label class="col-xs-4">Mercato:</label>
				<span class="col-xs-8">2,0000</span>
			</div>
			<div id="controvaloreMercatoEuro" class="clearfix">
				<label class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8">12,00</span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc" class="clearfix">
				<label class="col-xs-4">Upl %:</label>
				<span class="col-xs-8 negativo">-86,79</span>
			</div>
			<div id="prezzoMedioSecco" class="clearfix">
				<label class="col-xs-4">P. carico:</label>
				<span class="col-xs-8">15,14</span>
			</div>
			<div id="uplEuro" class="clearfix">
				<label class="col-xs-4">Upl &euro;:</label>
				<span class="col-xs-8 negativo">-78,840</span>
			</div>
	
		</div>
	</div>
</div><div class="col-xs-12" style="display: block;">
	<h3 id="denominazione">BANCO POPOLARE DIP13 var % n.d.</h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label class="col-xs-4">Quantit&agrave;:</label>
				<span class="col-xs-8">9,00</span>
			</div>
			<div id="last" class="clearfix">
				<label class="col-xs-4">Mercato:</label>
				<span class="col-xs-8">2,0000</span>
			</div>
			<div id="controvaloreMercatoEuro" class="clearfix">
				<label class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8">18,00</span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc" class="clearfix">
				<label class="col-xs-4">Upl %:</label>
				<span class="col-xs-8 negativo">-75,31</span>
			</div>
			<div id="prezzoMedioSecco" class="clearfix">
				<label class="col-xs-4">P. carico:</label>
				<span class="col-xs-8">8,10</span>
			</div>
			<div id="uplEuro" class="clearfix">
				<label class="col-xs-4">Upl &euro;:</label>
				<span class="col-xs-8 negativo">-54,910</span>
			</div>
	
		</div>
	</div>
</div><div class="col-xs-12" style="display: block;">
	<h3 id="denominazione">BANCO POPOLARE S.C. var % n.d.</h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label class="col-xs-4">Quantit&agrave;:</label>
				<span class="col-xs-8">1,00</span>
			</div>
			<div id="last" class="clearfix">
				<label class="col-xs-4">Mercato:</label>
				<span class="col-xs-8">8,4874</span>
			</div>
			<div id="controvaloreMercatoEuro" class="clearfix">
				<label class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8">8,49</span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc" class="clearfix">
				<label class="col-xs-4">Upl %:</label>
				<span class="col-xs-8">0,00</span>
			</div>
			<div id="prezzoMedioSecco" class="clearfix">
				<label class="col-xs-4">P. carico:</label>
				<span class="col-xs-8">8,49</span>
			</div>
			<div id="uplEuro" class="clearfix">
				<label class="col-xs-4">Upl &euro;:</label>
				<span class="col-xs-8">0,00</span>
			</div>
	
		</div>
	</div>
</div></div>
<div id="orig" class="col-xs-12" style="display:none">
	<h3 id="denominazione"></h3>
	<div class="listaTitoli">
		<div class="col-xs-6">
			<div id="quantita" class="clearfix">
				<label class="col-xs-4">Quantità:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="last" class="clearfix">
				<label class="col-xs-4">Mercato:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="controvaloreMercatoEuro" class="clearfix">
				<label class="col-xs-4">Controvalore:</label>
				<span class="col-xs-8"></span>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="uplPerc" class="clearfix">
				<label class="col-xs-4">Upl %:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="prezzoMedioSecco" class="clearfix">
				<label class="col-xs-4">P. carico:</label>
				<span class="col-xs-8"></span>
			</div>
			<div id="uplEuro" class="clearfix">
				<label class="col-xs-4">Upl €:</label>
				<span class="col-xs-8"></span>
			</div>
	
		</div>
	</div>
</div> 	
<script>
$(document).ready(function() {

	var NumberFormatter  =function(number){
		this.value = number;
		this.maximumFractionDigits = 2;
		this.minimumFractionDigits = 2;
		this.digitsNumber = 2;
		this.currency = false;
		
	};
	
	NumberFormatter.prototype.isNegativo = function(){
		if(this.value < 0){
			return true;
		}else{
			return false;
		}
	}
	
	NumberFormatter.prototype.setDigitsNumber = function(digitsNumber){
		this.digitsNumber = digitsNumber;
	}
		
	NumberFormatter.prototype.format = function(){
		if(this.value === 0){
			return "0,00";
		}
		if(this.value != null && this.value != ''){
			return	this.value.toFixed(this.digitsNumber).replace('.', ',');
		}
	}


	if(isMobile()){
		function titoliResponsive(){
			$.ajax({
				method: "POST",
		   		url: getPathContext()+"/investimenti/titoliDossierJson.do",
		   		dataType: "json",
				complete: function(response) {
						var result = response.responseJSON.rows;
						$("#titoliPrefRest").empty();
						for(i=0; i < result.length; i++){
						
							var denominazione = result[i].denominazione;
							if("undefined".indexOf(denominazione) > -1){
								continue;
							}
							var elmnt = document.getElementById("orig");
							var cln = elmnt.cloneNode(true);
							var variazionePercentuale = result[i].quotazione.variazionePercentuale;
							if("undefined".indexOf(variazionePercentuale) > -1){
								variazionePercentuale = "n.d.";
							}
							$(cln).removeAttr('id').show();
							$(cln).find('#denominazione').text(denominazione + " var % " + variazionePercentuale);
		
							var quantita = new NumberFormatter(result[i].quantita);
							if(quantita.isNegativo()){
								$(cln).find('#quantita > span').addClass('negativo');					
							}
							$(cln).find('#quantita > span').text(quantita.format());
		
							var last = new NumberFormatter(result[i].quotazione.last);
							last.setDigitsNumber(4);
					
							if(last.isNegativo()){
								$(cln).find('#last > span').addClass('negativo');
							}
							$(cln).find('#last > span').text(last.format());
		
							var controvaloreMercatoEuro = new NumberFormatter(result[i].controvaloreMercatoEuro);
							if(controvaloreMercatoEuro.isNegativo()){
								$(cln).find('#controvaloreMercatoEuro > span').addClass('negativo');
							}
							$(cln).find('#controvaloreMercatoEuro > span').text( controvaloreMercatoEuro.format());
		
							var uplPerc = new NumberFormatter(result[i].uplPerc);
							if(uplPerc.isNegativo()){
								$(cln).find('#uplPerc > span').addClass('negativo');
							}
							$(cln).find('#uplPerc > span').text(uplPerc.format());
							
							var prezzoMedioSecco = new NumberFormatter(result[i].prezzoMedioSecco);
							prezzoMedioSecco.setDigitsNumber(2);
							$(cln).find('#prezzoMedioSecco > span').text(prezzoMedioSecco.format());
							
							var uplEuro = new NumberFormatter(result[i].uplEuro);
							uplEuro.setDigitsNumber(3);
							if(uplEuro.isNegativo()){
								$(cln).find('#uplEuro > span').addClass('negativo');
							}
							$(cln).find('#uplEuro > span').text(uplEuro.format());
				
							
							$("#titoliPrefRest").append(cln);
							$("#titoliPrefRest").closest('.section').css('background', '#fff');
			
						
							
						}
		   		}
		  	});
	  		setTimeout(function(){
	  			titoliResponsive()
	  		}, 60000);
	  	}
	  	titoliResponsive();
  	}else{  	
  	
startGrid('#I_TITDOS', { 
url: '/template/investimenti/titoliDossier.php',
caption:"Portafoglio titoli e fondi",
height:'auto',
colModel:[
{name:'datiJqGrid.id',jsonmap:'datiJqGrid.id',key:true, hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloTot',jsonmap:'datiJqGrid.titoloTot', hidden:true, hidedlg:true},
{name:'datiJqGrid.titoloGTot',jsonmap:'datiJqGrid.titoloGTot', hidden:true, hidedlg:true},
{name:'act',jsonmap:'act',label:' ', width:50, align:'center',sortable:false,hidedlg:true},
{name:'denominazione',jsonmap:'denominazione',label:"Titolo",title:"Titolo",width:170,align:'Left',classes:'uppercase',formatter:linkFmt,formatoptions:{funzioneJS:'openDettaglioTitolo',urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',symbol:'simbolo',tipoConvertito:'tipoConvertito'},unformat:linkUnFmt},
{name:'sottodeposito',jsonmap:'sottodeposito',label:"Rub",title:"Rubrica",width:42,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'anagrafica.divisaTrattazione',jsonmap:'anagrafica.divisaTrattazione',label:"Div.",title:"Divisa",width:40,align:'Left'},
{name:'quantita',jsonmap:'quantita',label:"Q.tà",title:"Quantità",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'DX'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'prezzoMedioSecco',jsonmap:'prezzoMedioSecco',label:"P.Medio carico",title:"Prezzo medio carico",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'cambioMedio',jsonmap:'cambioMedio',label:"Cambio Medio",title:"Cambio Medio",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'descMercato',jsonmap:'descMercato',label:"Mercato",title:"Mercato",width:70,align:'Center'},
{name:'quotazione.last',jsonmap:'quotazione.last',label:"P. di Mercato",title:"Ultimo prezzo disponibile, espresso nella divisa di negoziazione. ",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'nav',jsonmap:'nav',push:'N',label:"NAV",title:"NAV",width:50,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercentuale',jsonmap:'quotazione.variazionePercentuale',label:"Var.%",title:"Variazione percentuale sull'ultimo prezzo del giorno precedente",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.trend',jsonmap:'quotazione.trend',label:"Tr.",title:"Trend",width:40,align:'Center',formatter:trendFmt,sortable:false},
{name:'controvaloreCaricoEuro',jsonmap:'controvaloreCaricoEuro',label:"Valore di carico",title:"Controvalore di carico",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'controvaloreMercatoEuro',jsonmap:'controvaloreMercatoEuro',label:"Valore di mercato",title:"Controvalore di mercato",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'uplEuro',jsonmap:'uplEuro',push:'N',label:"Var. Euro",title:"Guadagno o perdita potenziale (Unrealized Profit and ",width:70,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codAreaFinanza',jsonmap:'codAreaFinanza',label:"Cod. Area Finanza",title:"Cod. Area Finanza",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'isin',jsonmap:'isin',label:"ISIN",title:"isin",width:120,align:'Left'},
{name:'uplPerc',jsonmap:'uplPerc',label:"Var% Utile/Perdita",title:"Guadagno o perdita potenziale in % sul valore di carico (Unrealized Profit and Loss)",width:100,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},classes:'importo',unformat:decimalUnFmt,sorttype:'currency'},
{name:'codMercatoInfo',jsonmap:'codMercatoInfo',label:"Piazza",title:"Mercato sul quale si è operato",width:40,align:'Left',hidden:true,hidedlg:true},
{name:'dataPrezzoMercato',jsonmap:'dataPrezzoMercato',label:"Data Pr. Uff.",title:"Data Prezzo Ufficiale",width:65,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'d/m/Y'},sorttype:'date'},
{name:'tipoConvertito',jsonmap:'tipoConvertito',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'simbolo',jsonmap:'simbolo',label:"Cod.",title:"Codice del titolo",width:70,align:'Left'},
{name:'quotazione.ritardata',jsonmap:'quotazione.ritardata',label:"Rit.",title:"Ritardata",width:40,align:'Center'},
{name:'quotazione.descrizioneFase',jsonmap:'quotazione.descrizioneFase',label:"Fase",title:"Fase",width:70,align:'Left'},
{name:'quotazione.ora',jsonmap:'quotazione.ora',label:"Ora",title:"Ora",width:60,align:'Center',formatter:'date',formatoptions:{srcformat:'d/m/Y H:i',newformat:'H:i'},sorttype:'date'},
{name:'quotazione.quantitaTotale',jsonmap:'quotazione.quantitaTotale',label:"Volumi",title:"Volumi trattati",width:65,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.apertura',jsonmap:'quotazione.apertura',label:"Apert.",title:"Prezzo di apertura",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.variazionePercApertura',jsonmap:'quotazione.variazionePercApertura',label:"Var. Perc. Ape.",title:"Variazione percentuale apertura",width:60,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoChiusuraPrecedente',jsonmap:'quotazione.prezzoChiusuraPrecedente',label:"Ult. Chius.",title:"Ultima Chiusura",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.massimoGiorno',jsonmap:'quotazione.massimoGiorno',label:"Max ",title:"Massimo del giorno",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.minimoGiorno',jsonmap:'quotazione.minimoGiorno',label:"Min",title:"Minimo del giorno",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.bid',jsonmap:'quotazione.bid',label:"P. di Acquisto",title:"Prezzo di Acquisto",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaBid',jsonmap:'quotazione.quantitaBid',label:"Q.tà Miglior Acquisto",title:"Quantità miglior offerta in acquisto",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.ask',jsonmap:'quotazione.ask',label:"P. di Vendita",title:"Prezzo di Vendita",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.quantitaAsk',jsonmap:'quotazione.quantitaAsk',label:"Q.tà Miglior Vendita",title:"Quantità miglior offerta in vendita",width:90,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'anagrafica.lottoMinimo',jsonmap:'anagrafica.lottoMinimo',label:"Lotto min",title:"Lotto minimo",width:55,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoUfficiale',jsonmap:'quotazione.prezzoUfficiale',label:"Ult. Pr. Uff.",title:"Chiusura",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimento',jsonmap:'quotazione.prezzoRiferimento',label:"Pr. Rif. Prec.",title:"Prezzo di riferimento",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'quotazione.prezzoRiferimentoOdierno',jsonmap:'quotazione.prezzoRiferimentoOdierno',label:"Pr. Rif. Odier.",title:"Prezzo Riferimento Odierno",width:80,align:'Right',formatter:decimalFmt,formatoptions:{cellFormat:'D4'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'collocabile',jsonmap:'collocabile',push:'N',label:"collocabile",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'switchable',jsonmap:'switchable',push:'N',label:"null",title:"null",width:50,align:'Left',hidden:true,hidedlg:true},
{name:'proventiYTD',jsonmap:'proventiYTD',push:'N',label:"Rendimento YTD %",title:"Rendimento YTD %",width:100,align:'Left',formatter:decimalFmt,formatoptions:{cellFormat:'D2'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'rating',jsonmap:'rating',push:'N',label:"Rating Deus",title:"Rating Deus",width:60,align:'Center',formatter:decimalFmt,formatoptions:{cellFormat:'D0'},unformat:decimalUnFmt,sorttype:'currency'},
{name:'categoria',jsonmap:'categoria',push:'N',label:"Categoria",title:"Categoria",width:60,align:'Left'}
],
opzioniTabella:[
{label:'Personalizza',funcOptions:{funzioneJS:opzioni}},
{label:'Esporta in Excel',funcOptions:{funzioneJS:esportaGrigliaExcel}},
{testDisplay:hidePopUpFunction,label:'Pop-up',funcOptions:{funzioneJS:apriPopupGriglia}},
{label:'Stampa',funcOptions:{funzioneJS:Stampa_tuoProtafoglio}},
{testDisplay:hidePopUpFunction,label:'Help',funcOptions:{funzioneJS:helpTabella}}
],
opzioniRiga:[
{testDisplay:isAutorizzatoTol,label:"Compra Vendi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/compraVendiTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Book 5 livelli",funcOptions:{funzioneJS:openTitoloPopupDaTabellatore,isin:'isin',codMercatoInfo:'codMercatoInfo'}},
{testDisplay:isFondoSO,label:"Sottoscrivi",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSottoscrizioneFondo.do',codAreaFinanza:'codAreaFinanza'}},
{testDisplay:isAutorizzatoTol,label:"Dettaglio titolo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/dettaglioTitolo.do',isin:'isin',codMercatoInfo:'codMercatoInfo',simbolo:'simbolo',tipoConvertito:'tipoConvertito'}},
{testDisplay:isAutorizzatoTol,label:"Aggiungi a Preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliElencoPreferitiAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',height:'200',width:'400',title:'Aggiungi a preferiti'}},
{testDisplay:isAutorizzatoTol,label:"Agg.a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/titoliPortafoglioSimulatoAggiungi.do',isin:'isin',codMercatoInfo:'codMercatoInfo',denominazione:'denominazione',prezzoCarico:'quotazione.last',title:'Aggiungi a Portafoglio Simulato'}},
{testDisplay:isFondo,label:"Rimborso",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiRimborsoFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondoSW,label:"Switch",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiSwitchFondo.do',codAreaFinanza:'codAreaFinanza',sottodeposito:'sottodeposito'}},
{testDisplay:isFondo,label:"Dettaglio fondo",funcOptions:{funzioneJS:goToPage,urlLink:'/investimenti/fondiDettaglioFondo.do',codAreaFinanza:'codAreaFinanza',buttonIndietro:'buttonIndietro'}},
{testDisplay:isFondo,label:"Aggiungi a preferiti",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPreferitiAggiungiForm.do',codAreaFinanza:'codAreaFinanza',width:'350',height:'150',title:'Aggiungi a preferiti'}},
{testDisplay:disableButton,label:"Agg. a Portafoglio Simulato",funcOptions:{funzioneJS:openAjaxDialog,urlLink:'/investimenti/fondiPortafoglioSimulatoAggiungiForm.do',codiceIsin:'codiceIsin',width:'400',height:'400',title:'Aggiungi a portafoglio simulato'}}
]
});


		setInterval(titoliDossierPush, '60000');
  	
	}  	
});

	
	function titoliDossierPush(){
		ricaricaGriglia('I_TITDOS_Table');
	}
	
	
</script>

<script>
function helpTabellaI_TITDOS() {

}
</script>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
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


</body></html>