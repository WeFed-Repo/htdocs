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
	
	
	<!-- dettaglioTitoloPopup.jsp -->





<div class="contentInterno" style="margin-bottom: 10px;">
	<!--datiQuotazioneLighStream.jsp-->






	<h1>
	<div class="flag hidden-xxs ricerca">&nbsp;</div>
	A2A
	</h1><div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione"></span></div>

<form id="formDatiQuotazione" method="post" action="/WEBHT/investimenti/datiQuotazioniJson.do">
	<input type="hidden" name="isin" value="IT0001233417" id="quoteIsin">
	<input type="hidden" name="codMercatoInfo" value="MTA" id="quoteCodMercatoInfo">
	<input type="hidden" name="symbol" value="A2A" id="quoteSymbol">
</form>




	

<script>
function helpTabellaDatiQuotazione() {

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

<div class="contentInterno section clearfix" id="datiQuotazione">
	
	<h3 class="titleSection">








		
			Dati quotazione
		
		
		

</h3>
	
	<div class="tappo"></div>
		<table id="datiQuot" style="width:100%">
		    <colgroup> 
		      <col width="22%">
		      <col width="28%">		      
		      <col width="25%">  
		      <col width="25%">
		    </colgroup> 
				<tbody>
				<tr>
					<td colspan="4" style="text-align: center; font-size: large;">
						Titolo: A2A
					</td>
				</tr>
				<tr class="alter">
					<td>
						Q.t&agrave; Miglior Acquisto
					</td> 
					<td>
						P. di Acquisto
					</td>
					<td>
						P. di Vendita
					</td>
					<td>
						Q.tà Miglior Vendita
					</td>
				</tr>
				<tr class="alter">
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">689</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged">1,4510</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged">1,4520</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">3.377</div></td> 
				</tr>
			
				<tr>
					<td>
						Ora Minimo
					</td> 
					<td>
						Minimo
					</td>
					<td>
						Massimo
					</td>
					<td>
						Ora Massimo
					</td>
				</tr>
				<tr>
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TRDTIM_MIN_CAH" frmtype="H1">09:15</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="LOW_1_CAH" frmtype="D4">1,4370</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="HIGH_1_CAH" frmtype="D4">1,4620</div></td> 
					<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TRDTIM_MAX_CAH" frmtype="H1">13:05</div></td>
				</tr>
					<tr class="alter">
						<td>
							Apertura
						</td> 
						<td>
							Var.% Apertura
						</td>
						<td>
							Q.t&agrave; Totale
						</td>
						<td>
							Controvalore
						</td>
					</tr>
					<tr class="alter">
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="OPEN_PRC" frmtype="D4">1,4470</div></td> 
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="VAR_PERC_APERTURA" frmtype="D2">0,28</div></td> 
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="QTOT" frmtype="D0">7.142.027</div></td> 
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="CONTROVALORE" frmtype="D0">10.371.012</div></td>
					</tr>
				
					<tr>
						<td>
							P. di Mercato
						</td> 
						<td>
							Var %
						</td>
						<td>
							Ora
						</td>
						<td>
							ISIN
						</td>
					</tr>
					<tr>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="LAST" frmtype="D4">1,4510</div></td> 
						<td>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="VAR_PERC" frmtype="D2" style="width: 50%; float: left; text-align: right">1,40</div>
							<div style="width: 50%; float:left;">							
								<img src="/HT/IMAGES/TOL/b_stabile.gif" id="quoteTabfreccia" style="float: left; padding-left: 6px; padding-top: 2px;">
							</div>
							<div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TRDDIR_CAH" frmtype="TREND" style="display:none"></div>
						</td>
						<td><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="TIMELAST" frmtype="H2">14:14</div></td> 
						<td><div id="ISIN">IT0001233417</div> </td>
					</tr>
					<tr>
						<td colspan="2">
							Fase:
						</td>
						<td colspan="2"><div data-source="lightstreamer" data-grid="quoteTab" data-item="1" data-field="DESC_FASE_CAH" frmtype="T">Continuous Trading</div></td>
					</tr>
				</tbody>
		</table>
		
			<div class="actions pull-right margin-top20 margin-bottom5">
			
			
				
					<input type="button" class="btn XL" value="Compra &amp; Vendi" onclick="openTitoloPopupDaCompravendi('IT0001233417','MTA')">
				
				
			
			</div>
		
	</div>
<script type="text/javascript"><!--
	//start push
	var codMercatoInfo = $('#quoteCodMercatoInfo').val();
	var symbol = $('#quoteSymbol').val();
	//richiedo le quotazioni senza Lightstreamer come primo step
	invocaQuotazioneJson();
	//connessione Lightstreamer
	startStream("https://collpush.intranet.servizi", codMercatoInfo,symbol,"quoteTab",true, "bFTzbDT8KRO5LRO1KRAzMDAzKf%3D%3D");
	
	$(document).ready(function(){
		 	
			var strMercati="";
			
// 			$('.contentInterno h1').append('<span class="titoloMercatiTrattazione">'+strMercati+'</span>');
			$('<div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione">'+strMercati+'</span>').insertAfter('.contentFull h1');
	
			
		$('#datiQuot_isin').text($('input[name="isin"]').val());
		var spanBottoni = $('#bottoniDatiQuotazione');
		var opzioni = [
			
			{label:'Help',funcOptions:{funzioneJS: helpTabellaDatiQuotazione}}
			
		];
		

	});

	function apriPopupDatiQuotazione() {
		//alert('/investimenti/dettaglioTitoloPopup.do?isin=IT0001233417&codMercatoInfo=MTA')
		//openPopUp('/investimenti/dettaglioTitoloPopup.do?isin=IT0001233417&codMercatoInfo=MTA','Dettaglio Titolo IT0001233417','400','800','0','yes')
		openPopupDaTabellatore('/investimenti/dettaglioTitoloPopup.do','isin','IT0001233417','codMercatoInfo','MTA');
	}
	
	//richiedo le quotazioni senza Lightstreamer come primo step
	function invocaQuotazioneJson(){
		var url = $('#formDatiQuotazione').attr('action');
		var isin = $('input[name="isin"]').val();
		var codMercatoInfo = $('input[name="codMercatoInfo"]').val();
		var symbol = $('input[name="symbol"]').val();
		//invocazione json
		$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol: symbol}, 
			function(json) {
				settaQuote($('div [data-field="BIDSIZE_CAH"]'),json,'quantitaBid');
				settaQuote($('div [data-field="BID_CAH"]'),json,'bid');
				settaQuote($('div [data-field="ASK_CAH"]'),json,'ask');
				settaQuote($('div [data-field="ASKSIZE_CAH"]'),json,'quantitaAsk');
				settaQuote($('div [data-field="TRDTIM_MIN_CAH"]'),json,'oraMinimo');
				settaQuote($('div [data-field="LOW_1_CAH"]'),json,'minimoGiorno');
				settaQuote($('div [data-field="HIGH_1_CAH"]'),json,'massimoGiorno');
				settaQuote($('div [data-field="TRDTIM_MAX_CAH"]'),json,'oraMassimo');
				settaQuote($('div [data-field="OPEN_PRC"]'),json,'apertura');
				settaQuote($('div [data-field="VAR_PERC_APERTURA"]'),json,'variazionePercApertura');
				settaQuote($('div [data-field="QTOT"]'),json,'quantitaTotale');
				settaQuote($('div [data-field="CONTROVALORE"]'),json,'controvalore');
				settaQuote($('div [data-field="LAST"]'),json,'last');
				settaQuote($('div [data-field="VAR_PERC"]'),json,'variazionePercentuale');
				settaQuote($('div [data-field="TIMELAST"]'),json,'ora');
				$('#ISIN').text(isin);
				settaQuote($('div [data-field="DESC_FASE_CAH"]'),json,'descrizioneFase');
				trendFmtPush(json['trend']);
			});
	}
	
	function settaQuote(elem, json, quotaName){
		var value = json[quotaName]; 
		if(value != null){
			//formattazione ore
			if(quotaName === 'ora'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			if(quotaName === 'oraMinimo' || quotaName === 'oraMassimo'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			//formattazione quantità
			if(quotaName === 'quantitaAsk' || quotaName === 'quantitaBid' ||  quotaName === 'volume'){
				value = numberFormat(value,0);
			}
			//formattazione prezzi
			if(quotaName === 'ask' || quotaName === 'bid' || quotaName === 'last' || quotaName === 'minimoGiorno' || quotaName === 'massimoGiorno' || quotaName === 'apertura'){
				value = numberFormat(value,4);
			}
			if(quotaName === 'controvalore'  || quotaName === 'quantitaTotale'){
				value = numberFormat(value,0);
			}
			if(quotaName === 'variazionePercApertura'  || quotaName === 'variazionePercentuale'){
				value = numberFormat(value,2);
			}
			if(quotaName=='note' && value==''){
			  value='n.d.'
			}
			elem.text(value);		
		}else{
			elem.text('n.d');
		}
	}

--></script>	
<!-- FINE datiQuotazione.jsp-->


	
	
		<div class="section clearfix">
		
			<h3 class="titleSection">








		
			Book
		
		
		

</h3>
		<!-- BookLightStream.jsp -->




<form id="formBook" method="post" action="/WEBHT/investimenti/bookJson.do">
	<input type="hidden" name="isin" value="IT0001233417">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="symbol" value="A2A">
</form>
<div class="contentInterno">



<div class="tappo"></div>
	<div id="divBook">
	<table cellspacing="0" cellpadding="0">
	<colgroup>
		<col width="9%">
		<col width="20%">
		<col width="19%">
		<col width="2%">
		<col width="19%">
		<col width="20%">
		<col width="9%">
		<col width="2%">
	</colgroup>
	<thead>
		<tr>
			<th colspan="3">Proposte in acquisto</th>
			<th></th>
			<th colspan="3">Proposte in vendita</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">&nbsp;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">Q.tagrave;</td>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">&nbsp;</td>
		</tr>
		
		<tr class="odd">
			<td style="background-color: white"></td>
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">689</div></td>
			
				
				
					<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged">1,4510</div></td>
					<td class="bkBestOffer"></td>
					<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged">1,4520</div></td>
				
			
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">3.377</div></td>
			<td style="background-color: white"></td>
			<td style="background-color: white">&nbsp;</td>
		</tr>
		
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_1_CAH" frmtype="T" class="bkChanged">1</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ1_CAH" frmtype="D0" class="bkChanged">689</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID1_CAH" frmtype="D4" class="bkChanged">1,4510</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK1_CAH" frmtype="D4" class="bkChanged">1,4520</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ1_CAH" frmtype="D0" class="bkChanged">9.918</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_1_CAH" frmtype="T" class="bkChanged">3</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_2_CAH" frmtype="T" class="bkChanged">11</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ2_CAH" frmtype="D0" class="bkChanged">87.412</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID2_CAH" frmtype="D4" class="bkChanged">1,4500</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK2_CAH" frmtype="D4" class="bkChanged">1,4530</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ2_CAH" frmtype="D0" class="bkChanged">75.784</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_2_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_3_CAH" frmtype="T" class="bkChanged">18</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ3_CAH" frmtype="D0" class="bkChanged">89.105</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID3_CAH" frmtype="D4" class="bkChanged">1,4490</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK3_CAH" frmtype="D4" class="bkChanged">1,4540</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ3_CAH" frmtype="D0" class="bkChanged">66.011</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_3_CAH" frmtype="T" class="bkChanged">14</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_4_CAH" frmtype="T" class="bkChanged">18</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ4_CAH" frmtype="D0" class="bkChanged">74.966</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID4_CAH" frmtype="D4" class="bkChanged">1,4480</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK4_CAH" frmtype="D4" class="bkChanged">1,4550</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ4_CAH" frmtype="D0" class="bkChanged">85.472</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_4_CAH" frmtype="T" class="bkChanged">14</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_5_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ5_CAH" frmtype="D0" class="bkChanged">46.335</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID5_CAH" frmtype="D4" class="bkChanged">1,4470</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK5_CAH" frmtype="D4" class="bkChanged">1,4560</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ5_CAH" frmtype="D0" class="bkChanged">61.271</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_5_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		
		</tbody>
	</table>
	</div></div>
<script type="text/javascript"><!--
	var url = $('#formBook').attr('action');
	var isin = $('#formBook').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formBook').find('input[name="codMercatoInfo"]').val();
	var symbol = $('#formBook').find('input[name="symbol"]').val();
	
	
	
	//chiamata LibInvestimenti per recuperare dati iniziali
	$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol:symbol}, 
			function(json) {
			if(json['error'] != 'true' && json['warning'] != 'true'){
					var righe = json['righe'];
					var den;
					var let;
					for(i = 0; i<righe.length; i++){
						den = righe[i]['denaro'];
						let = righe[i]['lettera'];
						setAndChange($('div [data-field="NPROACQ_'+(i+1)+'_CAH"]'),den.ordini);
						setAndChange($('div [data-field="BEST_BSIZ'+(i+1)+'_CAH"]'),den.quantita);
						setAndChange($('div [data-field="BEST_BID'+(i+1)+'_CAH"]'),den.prezzo,true);
						setAndChange($('div [data-field="BEST_ASK'+(i+1)+'_CAH"]'),let.prezzo,true);
						setAndChange($('div [data-field="BEST_ASIZ'+(i+1)+'_CAH"]'),let.quantita);
						setAndChange($('div [data-field="NPROVEN_'+(i+1)+'_CAH"]'),let.ordini);
					}
					var best = json['miglioreOfferta'];
					if(best != null ){
						setAndChange($('div [data-field="BIDSIZE_CAH"]'),best['denaro'].quantita);
						setAndChange($('div [data-field="BID_CAH"]'),best['denaro'].prezzo,true);
						setAndChange($('div [data-field="ASK_CAH"]'),best['lettera'].prezzo,true);
						setAndChange($('div [data-field="ASKSIZE_CAH"]'),best['lettera'].quantita);
					}
				}
			});
			
	function setAndChange(elem, val, prz){
		val = formatCell(elem.attr('frmType'),val);
 		if(elem.data('oldval') != val) {
			elem.addClass('bkChanged');
		}
		if(prz != null && prz == true){
			
				
				
					elem.text(val);
				
			
		}else
			elem.text(val);
			
		elem.data('oldval',val);
	}

	//connessione Lightstreamer			
	startStream("https://collpush.intranet.servizi", codMercatoInfo,symbol,"bookTab",true, "bFTzbDT8KRO5LRO1KRAzMDAzKf%3D%3D");


--></script>

	</div>
</div>

<div class="contentInterno" id="divGrafico"><div class="section clearfix">
	
	<h3 class="titleSection">








		
			Grafico
		
		
		

</h3>
	
	





  
  
<script type="text/javascript">
		
		function aggiornaGrafici(symbol, duration, timeFrame, cache){
			var CHART_SERVER_URL =  '/WEBHT/investimenti/graficoJson.do';		   
		    var params = new Array();
		   // params.redir_host = CHART_SERVER_URL;
		    params.out = 'js';
		    params.s = symbol;
		    params.d = duration;
		    params.tf = timeFrame;
		    params.st = 'line';
		    params.stjs ='line';
		    //params.pc = '258025';//verde
		    params.pc = '003d6e';
		    params.l ='top';
		    params.ng = 1;
		    params.dl = 0;
		    params.cache = cache;
		    /* params - FINE*/
		    
			var graphicParam = new Array();
			graphicParam.navigator = 'false';
			graphicParam.line = '1';
			graphicParam.highlight = '1'			
			graphicParam.gridLine = 'true';
			graphicParam.border = 'false';
			graphicParam.yAx = 'true';
			graphicParam.xAx = 'true';
			graphicParam.decimalLabelY = '2';
			graphicParam.singleHeight='180';
			graphicParam.gridXLine = 'true';
			graphicParam.yNoDataMsg = '-100';
					   
		   CHART_SERVER.chartRequest(CHART_SERVER_URL, params, graphicParam, 'iChartA', { 
			  	 onAfterChartRendered: function(chart){
            		
			   			precedente = 1.4310;	
						try{
				   			range = chart.yAxis[0].getExtremes();
				   			//include la linea orizzontale del prz.precedente nel grafico
							if(precedente > range.max){		
								delta = ((precedente-range.min)/100)*5;					
								chart.yAxis[0].setExtremes(range.min,precedente+delta); //più 5% del range 
							} else if(precedente < range.min){
								delta = ((range.max-precedente)/100)*5;
								chart.yAxis[0].setExtremes(precedente-delta,range.max);//meno 5% del range
							}
							//disegna la linea del prz. precedente
				            chart.yAxis[0].addPlotLine({
											            color: "red",
											            width: 1,
											            dashStyle:'dash',
											            value: precedente,
											            zIndex: 1000
				          								});
						}catch(err){
							//console.log(err.message);
						}  

			          
			          $('.linkGrafico').each(function(x){
		        		if ($(this).attr('id')==duration)
		        			$(this).css('font-weight','bold');
		        		else
		        			$(this).css('font-weight','normal');	
		        		});

           		}
		   });
		}

	
		
		
			aggiornaGrafici('MTA.A2A','1D','1m','S');
		
	
</script><div style="margin-left:10px">
	 
		<a class="linkGrafico" id="1D" href="javascript:aggiornaGrafici('MTA.A2A','1D','1m','S')" style="font-weight: bold;">Intraday</a>&nbsp;
	
	
	<a class="linkGrafico" id="1M" href="javascript:aggiornaGrafici('MTA.A2A','1M','1D','S')" style="font-weight: normal;">Storico 1m</a>&nbsp;
	<a class="linkGrafico" id="3M" href="javascript:aggiornaGrafici('MTA.A2A','3M','1D','S')" style="font-weight: normal;">Storico 3m</a>&nbsp;
	<a class="linkGrafico" id="1Y" href="javascript:aggiornaGrafici('MTA.A2A','1Y','1D','S')" style="font-weight: normal;">Storico 1anno</a>&nbsp;
	<a class="linkGrafico" id="5Y" href="javascript:aggiornaGrafici('MTA.A2A','5Y','1D','S')" style="font-weight: normal;">Storico 5anni</a>&nbsp;
	</div>
<div id="iChartA" style="overflow:hidden;width:100%;height:220px;margin-top:8px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 362px; height: 220px; text-align: left; line-height: normal; z-index: 0; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="362" height="220"><defs><clipPath id="highcharts-1"><rect fill="none" x="0" y="0" width="316" height="178"></rect></clipPath></defs><rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="362" height="220" stroke-width="0.000001"></rect><rect rx="0" ry="0" fill="#FFFFFF" x="36" y="10" width="316" height="178" stroke-width="0.000001"></rect><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 215.5 10 L 215.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 336.5 10 L 336.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 94.5 10 L 94.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 36 130.5 L 352 130.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 70.5 L 352 70.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 10.5 L 352 10.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 36 190.5 L 352 190.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 215.5 188 L 215.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 336.5 188 L 336.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 94.5 188 L 94.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 36 188.5 L 352 188.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 35.5 10 L 35.5 190" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 0 117 L 1.0095846633780716 117 L 2.0191693308773204 102 L 3.0287539942553923 111 L 4.038338657633464 117 L 5.0479233210115355 117 L 6.0575079885107845 111 L 7.067092651888856 117 L 8.076677315266927 111 L 9.086261982766176 111 L 10.095846646144247 114 L 11.10543130952232 117 L 12.115015972900391 126 L 13.12460064039964 126 L 14.134185303777713 129 L 15.143769967155784 129 L 16.153354630533855 129 L 17.162939298033105 126 L 18.172523961411176 123 L 19.182108624789247 123 L 20.191693292288495 120 L 21.20127795566657 120 L 22.21086261904464 126 L 23.22044728242271 126 L 24.23003194992196 123 L 25.239616613300033 123 L 26.249201276678104 126 L 27.25878594417735 126 L 28.268370607555426 126 L 29.277955270933496 120 L 30.287539934311567 120 L 31.297124601810815 120 L 32.306709265188886 120 L 33.31629392856696 120 L 34.32587859606621 111 L 35.33546325944428 114 L 36.34504792282235 114 L 37.354632586200424 114 L 38.36421725369967 120 L 39.37380191707774 120 L 40.38338658045581 120 L 41.39297124795507 120 L 42.40255591133314 120 L 43.41214057471121 120 L 44.42172523808928 117 L 45.43130990558853 114 L 46.4408945689666 111 L 47.45047923234467 111 L 48.46006389572274 111 L 49.469648563221995 111 L 50.479233226600066 111 L 51.48881788997814 108 L 52.498402557477384 108 L 53.507987220855455 111 L 54.517571884233526 111 L 55.5271565476116 108 L 56.53674121511085 111 L 57.54632587848892 114 L 58.55591054186699 114 L 59.56549520936624 114 L 60.57507987274431 114 L 61.58466453612238 114 L 62.59424919950045 114 L 63.6038338669997 114 L 64.61341853037777 114 L 65.62300319375585 117 L 66.63258786125509 117 L 67.64217252463317 114 L 68.65175718801125 117 L 69.66134185138931 117 L 70.67092651888856 117 L 71.68051118226663 114 L 72.6900958456447 108 L 73.69968051314395 108 L 74.70926517652202 111 L 75.7188498399001 108 L 76.72843450327817 108 L 77.73801917077742 111 L 78.74760383415548 105 L 79.75718849753356 99 L 80.76677316091163 105 L 81.77635782841088 105 L 82.78594249178894 102 L 83.79552715516702 102 L 84.80511182266628 102 L 85.81469648604434 105 L 86.82428114942242 105 L 87.83386581280048 105 L 88.84345048029974 102 L 89.8530351436778 93 L 90.86261980705588 93 L 91.87220447455513 90 L 92.8817891379332 87 L 93.89137380131127 87 L 94.90095846468934 93 L 95.9105431321886 102 L 96.92012779556666 102 L 97.92971245894473 102 L 98.93929712644399 93 L 99.94888178982205 93 L 100.95846645320013 96 L 101.9680511165782 96 L 102.97763578407745 96 L 103.98722044745551 93 L 104.99680511083359 93 L 106.00638977833285 93 L 107.01597444171091 93 L 108.02555910508899 93 L 109.03514376846705 93 L 110.0447284359663 87 L 111.05431309934437 84 L 112.06389776272245 84 L 113.07348242610051 84 L 114.08306709359977 84 L 115.09265175697784 81 L 116.10223642035591 81 L 117.11182108785516 81 L 118.12140575123323 84 L 119.1309904146113 81 L 120.14057507798937 84 L 121.15015974548862 84 L 122.1597444088667 81 L 123.16932907224476 81 L 124.17891373974402 84 L 125.18849840312208 81 L 126.19808306650016 72 L 127.20766772987822 72 L 128.21725239737748 69 L 129.22683706075554 81 L 130.23642172413363 81 L 131.24600639163287 81 L 132.25559105501094 84 L 133.265175718389 84 L 134.2747603817671 87 L 135.28434504926634 87 L 136.2939297126444 87 L 137.3035143760225 87 L 138.31309904352173 87 L 139.3226837068998 87 L 140.33226837027786 87 L 141.34185303365595 87 L 142.3514377011552 84 L 143.36102236453326 87 L 144.37060702791135 87 L 145.3801916912894 84 L 146.38977635878865 84 L 147.39936102216672 78 L 148.4089456855448 78 L 149.41853035304405 78 L 150.4281150164221 78 L 151.4376996798002 78 L 152.44728434317827 78 L 153.4568690106775 78 L 154.46645367405557 78 L 155.47603833743366 78 L 156.4856230049329 75 L 157.49520766831097 81 L 158.50479233168903 81 L 159.51437699506712 81 L 160.52396166256636 87 L 161.53354632594443 90 L 162.54313098932252 84 L 163.55271565682176 84 L 164.56230032019982 84 L 165.5718849835779 90 L 166.58146964695598 90 L 167.59105431445522 87 L 168.60063897783328 84 L 169.61022364121138 90 L 170.61980830871062 87 L 171.62939297208868 87 L 172.63897763546674 87 L 173.64856229884484 87 L 174.65814696634408 90 L 175.66773162972214 87 L 176.67731629310023 87 L 177.6869009564783 87 L 178.69648562397754 87 L 179.7060702873556 87 L 180.7156549507337 81 L 181.72523961823293 81 L 182.734824281611 78 L 183.7444089449891 75 L 184.75399360836715 78 L 185.7635782758664 75 L 186.77316293924446 75 L 187.78274760262255 78 L 188.7923322701218 75 L 189.80191693349985 75 L 190.81150159687795 84 L 191.821086260256 84 L 192.83067092775525 84 L 193.8402555911333 78 L 194.8498402545114 75 L 195.85942492201065 75 L 196.8690095853887 78 L 197.8785942487668 78 L 198.88817891214487 78 L 199.8977635796441 81 L 200.90734824302217 81 L 201.91693290640026 78 L 202.9265175738995 72 L 203.93610223727757 72 L 204.94568690065566 72 L 205.95527156403372 81 L 206.96485623153296 75 L 207.97444089491103 75 L 208.98402555828912 78 L 209.99361022166718 78 L 211.00319488916642 78 L 212.01277955254452 78 L 213.02236421592258 78 L 214.03194888342182 78 L 215.04153354679988 78 L 216.05111821017798 78 L 217.06070287355604 81 L 218.07028754105528 81 L 219.07987220443334 81 L 220.08945686781144 84 L 221.09904153531068 84 L 222.10862619868874 78 L 223.11821086206683 78 L 224.1277955254449 81 L 225.13738019294414 81 L 226.1469648563222 81 L 227.1565495197003 81 L 228.16613418719953 78 L 229.1757188505776 78 L 230.1853035139557 69 L 231.19488817733375 69 L 232.204472844833 69 L 233.21405750821106 72 L 234.22364217158915 69 L 235.2332268390884 69 L 236.24281150246645 69 L 237.25239616584454 69 L 238.2619808292226 69 L 239.27156549672185 66 L 240.2811501600999 63 L 241.290734823478 66 L 242.30031948685607 60 L 243.3099041543553 60 L 244.3194888177334 57 L 245.32907348111146 57 L 246.3386581486107 54 L 247.34824281198877 57 L 248.35782747536686 57 L 249.36741213874492 60 L 250.37699680624416 57 L 251.38658146962226 60 L 252.39616613300032 60 L 253.40575080049956 60 L 254.41533546387762 60 L 255.42492012725572 63 L 256.43450479063375 63 L 257.444089458133 66 L 258.4536741215111 66 L 259.46325878488915 66 L 260.4728434523884 60 L 261.4824281157665 60 L 262.49201277914455 63 L 263.5015974425226 63 L 264.5111821100219 66 L 265.52076677339994 66 L 266.530351436778 63 L 267.5399361042773 63 L 268.54952076765534 63 L 269.5591054310334 63 L 270.56869009441147 66 L 271.57827476191073 63 L 272.5878594252888 63 L 273.59744408866686 60 L 274.607028752045 60 L 275.6166134195442 63 L 276.62619808292226 60 L 277.6357827463003 60 L 278.6453674137996 57 L 279.65495207717765 54 L 280.6645367405557 57 L 281.67412140393384 57 L 282.68370607143305 63 L 283.6932907348111 63 L 284.7028753981892 63 L 285.71246006568845 66 L 286.7220447290665 69 L 287.7316293924446 69 L 288.7412140558227 66 L 289.7507987233219 66 L 290.76038338669997 66 L 291.76996805007803 66 L 292.7795527175773 66 L 293.78913738095537 63 L 294.79872204433343 63 L 295.80830670771155 63 L 296.81789137521076 72 L 297.8274760385888 63 L 298.8370607019669 66 L 299.84664536946616 72 L 300.8562300328442 78 L 301.8658146962223 75 L 302.8753993596004 78 L 303.8849840270996 78 L 304.8945686904777 84 L 305.90415335385575 87 L 306.91373801723387 87 L 307.9233226847331 87 L 308.93290734811114 87 L 309.9424920114892 87 L 310.9520766789885 87 L 311.96166134236654 87 L 312.9712460057446 87 L 313.9808306691227 87 L 313.9808306691227 87 L 316 87" stroke="#003d6e" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(36,10)" clip-path="none"></g></g><g class="highcharts-axis-labels" zIndex="7"><text x="94.555910541867" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="94.555910541867">10:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">12:00</tspan></text><text x="336.328125" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="336.328125">14:00</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="34" y="188" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:138px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,42</tspan></text><text x="34" y="128" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:138px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,44</tspan></text><text x="34" y="68" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:138px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,46</tspan></text><text x="34" y="8" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:138px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="34">1,48</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="padding:0;white-space:nowrap;" visibility="hidden"><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="5" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="3" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="1" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="rgb(255,255,255)" x="0" y="0" width="10" height="10" stroke-width="2" fill-opacity="0.85"></rect><text x="5" y="18" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text></g><g class="highcharts-tracker" zIndex="9"><g visibility="visible" zIndex="1" transform="translate(36,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M -10 117 L 0 117 L 1.0095846633780716 117 L 2.0191693308773204 102 L 3.0287539942553923 111 L 4.038338657633464 117 L 5.0479233210115355 117 L 6.0575079885107845 111 L 7.067092651888856 117 L 8.076677315266927 111 L 9.086261982766176 111 L 10.095846646144247 114 L 11.10543130952232 117 L 12.115015972900391 126 L 13.12460064039964 126 L 14.134185303777713 129 L 15.143769967155784 129 L 16.153354630533855 129 L 17.162939298033105 126 L 18.172523961411176 123 L 19.182108624789247 123 L 20.191693292288495 120 L 21.20127795566657 120 L 22.21086261904464 126 L 23.22044728242271 126 L 24.23003194992196 123 L 25.239616613300033 123 L 26.249201276678104 126 L 27.25878594417735 126 L 28.268370607555426 126 L 29.277955270933496 120 L 30.287539934311567 120 L 31.297124601810815 120 L 32.306709265188886 120 L 33.31629392856696 120 L 34.32587859606621 111 L 35.33546325944428 114 L 36.34504792282235 114 L 37.354632586200424 114 L 38.36421725369967 120 L 39.37380191707774 120 L 40.38338658045581 120 L 41.39297124795507 120 L 42.40255591133314 120 L 43.41214057471121 120 L 44.42172523808928 117 L 45.43130990558853 114 L 46.4408945689666 111 L 47.45047923234467 111 L 48.46006389572274 111 L 49.469648563221995 111 L 50.479233226600066 111 L 51.48881788997814 108 L 52.498402557477384 108 L 53.507987220855455 111 L 54.517571884233526 111 L 55.5271565476116 108 L 56.53674121511085 111 L 57.54632587848892 114 L 58.55591054186699 114 L 59.56549520936624 114 L 60.57507987274431 114 L 61.58466453612238 114 L 62.59424919950045 114 L 63.6038338669997 114 L 64.61341853037777 114 L 65.62300319375585 117 L 66.63258786125509 117 L 67.64217252463317 114 L 68.65175718801125 117 L 69.66134185138931 117 L 70.67092651888856 117 L 71.68051118226663 114 L 72.6900958456447 108 L 73.69968051314395 108 L 74.70926517652202 111 L 75.7188498399001 108 L 76.72843450327817 108 L 77.73801917077742 111 L 78.74760383415548 105 L 79.75718849753356 99 L 80.76677316091163 105 L 81.77635782841088 105 L 82.78594249178894 102 L 83.79552715516702 102 L 84.80511182266628 102 L 85.81469648604434 105 L 86.82428114942242 105 L 87.83386581280048 105 L 88.84345048029974 102 L 89.8530351436778 93 L 90.86261980705588 93 L 91.87220447455513 90 L 92.8817891379332 87 L 93.89137380131127 87 L 94.90095846468934 93 L 95.9105431321886 102 L 96.92012779556666 102 L 97.92971245894473 102 L 98.93929712644399 93 L 99.94888178982205 93 L 100.95846645320013 96 L 101.9680511165782 96 L 102.97763578407745 96 L 103.98722044745551 93 L 104.99680511083359 93 L 106.00638977833285 93 L 107.01597444171091 93 L 108.02555910508899 93 L 109.03514376846705 93 L 110.0447284359663 87 L 111.05431309934437 84 L 112.06389776272245 84 L 113.07348242610051 84 L 114.08306709359977 84 L 115.09265175697784 81 L 116.10223642035591 81 L 117.11182108785516 81 L 118.12140575123323 84 L 119.1309904146113 81 L 120.14057507798937 84 L 121.15015974548862 84 L 122.1597444088667 81 L 123.16932907224476 81 L 124.17891373974402 84 L 125.18849840312208 81 L 126.19808306650016 72 L 127.20766772987822 72 L 128.21725239737748 69 L 129.22683706075554 81 L 130.23642172413363 81 L 131.24600639163287 81 L 132.25559105501094 84 L 133.265175718389 84 L 134.2747603817671 87 L 135.28434504926634 87 L 136.2939297126444 87 L 137.3035143760225 87 L 138.31309904352173 87 L 139.3226837068998 87 L 140.33226837027786 87 L 141.34185303365595 87 L 142.3514377011552 84 L 143.36102236453326 87 L 144.37060702791135 87 L 145.3801916912894 84 L 146.38977635878865 84 L 147.39936102216672 78 L 148.4089456855448 78 L 149.41853035304405 78 L 150.4281150164221 78 L 151.4376996798002 78 L 152.44728434317827 78 L 153.4568690106775 78 L 154.46645367405557 78 L 155.47603833743366 78 L 156.4856230049329 75 L 157.49520766831097 81 L 158.50479233168903 81 L 159.51437699506712 81 L 160.52396166256636 87 L 161.53354632594443 90 L 162.54313098932252 84 L 163.55271565682176 84 L 164.56230032019982 84 L 165.5718849835779 90 L 166.58146964695598 90 L 167.59105431445522 87 L 168.60063897783328 84 L 169.61022364121138 90 L 170.61980830871062 87 L 171.62939297208868 87 L 172.63897763546674 87 L 173.64856229884484 87 L 174.65814696634408 90 L 175.66773162972214 87 L 176.67731629310023 87 L 177.6869009564783 87 L 178.69648562397754 87 L 179.7060702873556 87 L 180.7156549507337 81 L 181.72523961823293 81 L 182.734824281611 78 L 183.7444089449891 75 L 184.75399360836715 78 L 185.7635782758664 75 L 186.77316293924446 75 L 187.78274760262255 78 L 188.7923322701218 75 L 189.80191693349985 75 L 190.81150159687795 84 L 191.821086260256 84 L 192.83067092775525 84 L 193.8402555911333 78 L 194.8498402545114 75 L 195.85942492201065 75 L 196.8690095853887 78 L 197.8785942487668 78 L 198.88817891214487 78 L 199.8977635796441 81 L 200.90734824302217 81 L 201.91693290640026 78 L 202.9265175738995 72 L 203.93610223727757 72 L 204.94568690065566 72 L 205.95527156403372 81 L 206.96485623153296 75 L 207.97444089491103 75 L 208.98402555828912 78 L 209.99361022166718 78 L 211.00319488916642 78 L 212.01277955254452 78 L 213.02236421592258 78 L 214.03194888342182 78 L 215.04153354679988 78 L 216.05111821017798 78 L 217.06070287355604 81 L 218.07028754105528 81 L 219.07987220443334 81 L 220.08945686781144 84 L 221.09904153531068 84 L 222.10862619868874 78 L 223.11821086206683 78 L 224.1277955254449 81 L 225.13738019294414 81 L 226.1469648563222 81 L 227.1565495197003 81 L 228.16613418719953 78 L 229.1757188505776 78 L 230.1853035139557 69 L 231.19488817733375 69 L 232.204472844833 69 L 233.21405750821106 72 L 234.22364217158915 69 L 235.2332268390884 69 L 236.24281150246645 69 L 237.25239616584454 69 L 238.2619808292226 69 L 239.27156549672185 66 L 240.2811501600999 63 L 241.290734823478 66 L 242.30031948685607 60 L 243.3099041543553 60 L 244.3194888177334 57 L 245.32907348111146 57 L 246.3386581486107 54 L 247.34824281198877 57 L 248.35782747536686 57 L 249.36741213874492 60 L 250.37699680624416 57 L 251.38658146962226 60 L 252.39616613300032 60 L 253.40575080049956 60 L 254.41533546387762 60 L 255.42492012725572 63 L 256.43450479063375 63 L 257.444089458133 66 L 258.4536741215111 66 L 259.46325878488915 66 L 260.4728434523884 60 L 261.4824281157665 60 L 262.49201277914455 63 L 263.5015974425226 63 L 264.5111821100219 66 L 265.52076677339994 66 L 266.530351436778 63 L 267.5399361042773 63 L 268.54952076765534 63 L 269.5591054310334 63 L 270.56869009441147 66 L 271.57827476191073 63 L 272.5878594252888 63 L 273.59744408866686 60 L 274.607028752045 60 L 275.6166134195442 63 L 276.62619808292226 60 L 277.6357827463003 60 L 278.6453674137996 57 L 279.65495207717765 54 L 280.6645367405557 57 L 281.67412140393384 57 L 282.68370607143305 63 L 283.6932907348111 63 L 284.7028753981892 63 L 285.71246006568845 66 L 286.7220447290665 69 L 287.7316293924446 69 L 288.7412140558227 66 L 289.7507987233219 66 L 290.76038338669997 66 L 291.76996805007803 66 L 292.7795527175773 66 L 293.78913738095537 63 L 294.79872204433343 63 L 295.80830670771155 63 L 296.81789137521076 72 L 297.8274760385888 63 L 298.8370607019669 66 L 299.84664536946616 72 L 300.8562300328442 78 L 301.8658146962223 75 L 302.8753993596004 78 L 303.8849840270996 78 L 304.8945686904777 84 L 305.90415335385575 87 L 306.91373801723387 87 L 307.9233226847331 87 L 308.93290734811114 87 L 309.9424920114892 87 L 310.9520766789885 87 L 311.96166134236654 87 L 312.9712460057446 87 L 313.9808306691227 87 L 313.9808306691227 87 L 316 87 L 326 87" isTracker="true" stroke-linejoin="round" visibility="visible" stroke-opacity="0.0001" stroke="rgb(192,192,192)" stroke-width="21" style=""></path></g></g><path fill="none" d="M 36 157.5 L 352 157.5" stroke="red" stroke-width="1" stroke-dasharray="4,3" zIndex="1000"></path></svg></div></div>





 </div></div>


<!-- dettaglioTitoloPopup.jsp END -->
</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>


</body></html>