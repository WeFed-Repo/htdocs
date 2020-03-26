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
	
	
	<!-- bookOrdina.jsp -->





<script type="text/javascript">	
function pageScroll() {
    	window.scrollBy(0,700); 
    	//scrolldelay = setTimeout('pageScroll()',100); //eventuale scroll ogni N millisec
}
</script>
<body onLoad="pageScroll()">

<div class="contentInterno">	
	




<script type="text/javascript">
	function listenerTIT(combo){
		var url = '/' + 'WEBHT' + '/investimenti/ricercaTitoliPopolaCombo.do' ;
		loadComboRicercaAvanzata(url,combo);
	}
</script>
<style>
select.dimensioneFissa {width: 70px;}
select.dimensioneFissaL {width: 90px;}
select.dimensioneFissaXL {width: 110px;}
.divForm td {padding:3px 0px;}
</style>


<form id="formRicercaTitoli" method="post" action="/template/popup_investimenti_bookOrdina_cerca.php">
	<div id="divFormInvestimentiRicerca" class="divForm section clearfix">
	
 	<h3 class="titleSection">








		
			Ricerca Titoli
		
		
		
		

</h3>
 	 <span class="bottoni_intestazione_tabella" style="margin-top:-22px;">
		<span class="rounded_corner">&nbsp;</span>
		<span class="bottoni input">
			<input  class="button btn" type="button" value="Duplica Pop-up" onclick="openTitoloPopupDaCompravendi('US0231351067','NASDAQ')"/>
		</span>
	</span>
	<div class="boxContent form-horizontal">
	<div class="bs-example">
		<div class="form-group">
		<div class="form-field-input padding10">
			<div>
				<div class="col-xs-6">
				<input type="text" name="isinDescrizione" size="30" value="Descrizione/Isin" onclick="fullSelect('isinDescrizioneTit')" id="isinDescrizioneTit" class="form-control" />
			</div>
			<div class="col-xs-6">
				<select name="borsa" onchange="listenerTIT(this)" id="borsaTit" class="form-control"><option value="MTA">BorsaItaliana MTA</option>
					
						<option value="ETF">BorsaItaliana ETFPLUS</option>
					
						<option value="MOT|TLX|HMF">Mercati Obbligazionari</option>
					
						<option value="SEDEX">BorsaItaliana Sedex</option>
					
						<option value="IDEM">BorsaItaliana Idem</option>
					
						<option value="PAR">Paris Bourse</option>
					
						<option value="XET">Deutsche Borse Group</option>
					
						<option value="AMS">Amsterdam</option>
					
						<option value="NASDAQ">Nasdaq</option>
					
						<option value="NYSE">NYSE</option>
					
						<option value="AMEX">Amex</option></select>
			</div>
		
			</div>
		</div>
		</div>
	</div>
	</div>
	</div>
	<div class="pull-right margin-top10" >
		<input class="button thin btn" type="button" value="Cerca" title="Cerca" onclick="risultatoRicercaPopUP();"/>
	</div><div class="tappo"></div>
	<input type="hidden" name="popUpRicerca" value="S" />
</form>

</div>

	
	
		<div class="contentInterno" style="margin-bottom: 10px;">
				<!--datiQuotazione.jsp-->






	<h1>	<div class="flag hidden-xxs ricerca">&nbsp;</div>
		Amazon.com, Inc.
	</h1>

<form id="formDatiQuotazione" method="post" action="/WEBHT/investimenti/datiQuotazioniJson.do">
	<input type="hidden" name="isin" value="US0231351067" />
	<input type="hidden" name="codMercatoInfo" value="NASDAQ" />
	<input type="hidden" name="symbol" value="AMZN" />
</form>

<script type="text/javascript">
	$(document).ready(function(){
	    	
	    var strMercati="";
	   
		$('.contentInterno h1').append('<span class="titoloMercatiTrattazione">'+strMercati+'</span>');
			
		invocaJson();
		$('#datiQuot_isin').text($('input[name="isin"]').val());
		var spanBottoni = $('#bottoniDatiQuotazione');
		var opzioni = [
			
			{label:'Help',funcOptions:{funzioneJS: helpTabellaDatiQuotazione}}
			
		];
		
	});
	
	function invocaJson(){
		var url = $('#formDatiQuotazione').attr('action');
		var isin = $('input[name="isin"]').val();
		var codMercatoInfo = $('input[name="codMercatoInfo"]').val();
		var symbol = $('input[name="symbol"]').val();
		//invocazione json
		$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol: symbol}, 
			function(json) {
					//popolo tabella sfogliando i dati json
					for(quota in json) {
						var elem = $('#datiQuot_' + quota);
						var value = json[quota];
						elem.removeClass('highlight');
						//formattazione ore
						if(quota === 'ora'){
							value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
						}
						if(quota === 'oraMinimo' || quota === 'oraMassimo'){
							value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
						}
						//formattazione quantit&agrave;
						if(quota === 'quantitaAsk' || quota === 'quantitaBid' ||  quota === 'volume'){
							value = numberFormat(value,0);
						}
						//formattazione prezzi
						if(quota === 'ask' || quota === 'bid' || quota === 'last' ||
						   quota === 'minimoGiorno' || quota === 'massimoGiorno' || quota === 'apertura'){
							value = numberFormat(value,4);
						}
						if(quota === 'controvalore'  || quota === 'quantitaTotale'){
							value = numberFormat(value,0);
						}
						if(quota === 'variazionePercApertura'  || quota === 'variazionePercentuale'){
							value = numberFormat(value,2);
						}
						
						//maping codice fase con descrizione fase
						/*if(quota === 'fase'){
							value = formatFase(value);	
						}*/
						if(quota=='note' && value==''){
						  value='n.d.'
						}
						//setto il text della cella se è diverso da old
						if(elem.data('oldval') != value) {
							elem.text(value);
							elem.data('oldval',value);
							elem.addClass('highlight');
							//gestione immagine per trend variazione percentuale
							if(quota === 'variazionePercentuale'){
								var trend = json['trend'];
								imgTrend = trendFmt(trend);//funzione di funzioniJQGrid.js
								elem.append('&nbsp;');
								elem.append(imgTrend);
							}

						}

					}
					setTimeout(invocaJson, 15000 -500 + Math.round(Math.random() * 1000));	
			}
		);
	  
	}
	function apriPopupDatiQuotazione() {
		//alert('/investimenti/dettaglioTitoloPopup.do?isin=US0231351067&codMercatoInfo=NASDAQ')
		//openPopUp('/investimenti/dettaglioTitoloPopup.do?isin=US0231351067&codMercatoInfo=NASDAQ','Dettaglio Titolo US0231351067','400','800','0','yes')
		openPopupDaTabellatore('/investimenti/dettaglioTitoloPopup.do','isin','US0231351067','codMercatoInfo','NASDAQ');
	}
	
</script>



	


<script>
function helpTabellaDatiQuotazione() {

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

<div class="contentInterno" id="datiQuotazione">
<div class="section clearfix">
	
	<h3 class="titleSection">








		
			Dati quotazione
		
		
		
		

</h3>
	
	<div class="tappo"></div>
	<!--
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
			<td class="bkSottotitolo">Q.tà</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">&nbsp;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">Q.tà</td>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">&nbsp;</td>
		</tr>
		
		<tr class="odd">
			<td style="background-color: white"></td>
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">470</div></td>
			
				
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('BID_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4800")'>24,4800</a></div>
						</a>
					</td>
					<td class="bkBestOffer"></td>
					<td class="bkBestOffer">
						<a href="javascript:doSettaLimitePush('ASK_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5000")'>24,5000</a></div>
						</a>
					</td>
				
				
			
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">402</div></td>
			<td style="background-color: white"></td>
			<td style="background-color: white">&nbsp;</td>
		</tr>
		
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_1_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ1_CAH" frmtype="D0" class="bkChanged">3.418</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4800")'>24,4800</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK1_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK1_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5000")'>24,5000</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ1_CAH" frmtype="D0" class="bkChanged">2.258</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_1_CAH" frmtype="T" class="bkChanged">5</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_2_CAH" frmtype="T" class="bkChanged">13</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ2_CAH" frmtype="D0" class="bkChanged">3.440</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4700")'>24,4700</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK2_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK2_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5100")'>24,5100</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ2_CAH" frmtype="D0" class="bkChanged">4.226</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_2_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_3_CAH" frmtype="T" class="bkChanged">14</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ3_CAH" frmtype="D0" class="bkChanged">4.242</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4600")'>24,4600</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK3_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK3_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5200")'>24,5200</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ3_CAH" frmtype="D0" class="bkChanged">3.410</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_3_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_4_CAH" frmtype="T" class="bkChanged">13</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ4_CAH" frmtype="D0" class="bkChanged">3.709</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4500")'>24,4500</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK4_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK4_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5300")'>24,5300</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ4_CAH" frmtype="D0" class="bkChanged">3.101</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_4_CAH" frmtype="T" class="bkChanged">11</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_5_CAH" frmtype="T" class="bkChanged">12</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ5_CAH" frmtype="D0" class="bkChanged">7.713</div></td>
			
				
					<td>
						<a href="javascript:doSettaLimitePush('BEST_BID5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,4400")'>24,4400</a></div>
						</a>
					</td>
					<td></td>
					<td>
						<a href="javascript:doSettaLimitePush('BEST_ASK5_CAH')">
							<div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK5_CAH" frmtype="D4" class="bkChanged"><a href='javascript:doSettaLimitePush("24,5400")'>24,5400</a></div>
						</a>
					</td>
				
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ5_CAH" frmtype="D0" class="bkChanged">7.534</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_5_CAH" frmtype="T" class="bkChanged">13</div></td>
		</tr>
		
		</tbody>
	</table>
	</div>-->





	<table id="datiQuot">
		<colgroup>
			<col width="22%"></col>
			<col width="28%"></col>
			<col width="25%"></col>
			<col width="25%"></col>
		</colgroup>
		<tbody>
			<tr>
				<td colspan="4" style="text-align: center; font-size: large;">Titolo: Amazon.com, Inc.</td>
			</tr>
			<tr class="alter">
				<td><b>Q.t&agrave; Miglior Acquisto
				</b></td>
				<td><b>P. di Acquisto
				</b></td>
				<td><b>P. di Vendita
				</b></td>
				<td><b>Q.t&agrave; Miglior Vendita
				</b></td>
			</tr>
			<tr class="alter">
				<td id="datiQuot_quantitaBid">0</td>
				<td id="datiQuot_bid">0</td>
				<td id="datiQuot_ask">0</td>
				<td id="datiQuot_quantitaAsk">0</td>
			</tr>
			
			<tr>
				<td><b><b>P. di Mercato
					</b>
				</b></td>
				<td><b><b>Var %
					</b>
				</b></td>
				<td><b><b>Ora
					</b>
				</b></td>
				<td><b><b>ISIN
					</b>
				</b></td>
			</tr>
			<tr>
				<td id="datiQuot_last">0</td>
				<td id="datiQuot_variazionePercentuale">0</td>
				<td id="datiQuot_ora">0</td>
				<td id="datiQuot_isin">n.d.</td>
			</tr>
			<tr>
				<td colspan="2"><b><b>Fase:
					</b>
				</b></td>
				<td id="datiQuot_descrizioneFase" colspan="2"></td>
			</tr>
		</tbody>
	</table>
	
</div></div>

<!-- FINE datiQuotazione.jsp-->


		</div>
	

<div class="contentInterno ">
<div class="section clearfix">
	
	<h3 class="titleSection">








		
			Ordine
		
		
		
		

</h3>
	<!-- FormAcquistoVendita.jsp -->








<script type="text/javascript">
	aModBorsa = [
	
		['NASDAQ','US NA','Corrente','','Limitato','LIM','Val. per la seduta','VSC','Esegui e mantieni sul book','','flagPrezzoStop',''],
	
		['NASDAQ','US NA','Corrente','','Al Meglio','MER','Val. per la seduta','VSC','Esegui e mantieni sul book','','flagPrezzoStop','']
	
	];		
	function popolaPrezzo(oldVal) {
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var values = new HashMap();
		selPrezzo.children().remove();
		for(i = 0; i<aModBorsa.length; i++){
			if(aModBorsa[i][1] === selMercato.val() && !values.containsKey(aModBorsa[i][5])){
				values.put(aModBorsa[i][5],aModBorsa[i][4]);
				$('<option>'+values.get(aModBorsa[i][5])+'</option>').attr('value', aModBorsa[i][5]).appendTo(selPrezzo);
			}
		}
		var abilitaPrezzoStop = false;
		for(i = 0; i<aModBorsa.length; i++){
			//mercato fa da chiave  
			if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][11] === 'M'){
				abilitaPrezzoStop = true;
				break;
			}
		}
		if (abilitaPrezzoStop) {
			$('<option>Condizionato al meglio</option>').attr('value', 'MERCOND').appendTo(selPrezzo);
			$('<option>Condizionato limitato</option>').attr('value', 'LIMCOND').appendTo(selPrezzo);
		}
		if(oldVal != null && oldVal !=""){
			selPrezzo.val(oldVal);
		}
	}

	function popolaFase(){
		
				$('#colFase').children().remove();
				$('#colFase').html('<label class="control-label bold">Corrente</label>');
				$('#colFase').append('<input type="hidden" name="parFase" value="" />');
		
	}

	function popolaQtaVendibile(){
		var selIntestatario = $('#formCompraVendi').find('select[name="selSottRubrica"]');
		var quantita = selIntestatario.val().split(',')[1];
		$('#qtaRubrica').text(quantita);
		
		//se la quantit&agrave; vendibile è 0 nascondo il pulsante vendi
		if($('#qtaRubrica').text() == 0)
			$('#vendiButton').hide();
		else
			$('#vendiButton').show();
	}

	function popolaValidita(oldVal){
		var values = new HashMap();
		var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		var selTipoOrdine = $('#formCompraVendi').find('select[name="parPrezzo"]');
		var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		selValidita.children().remove();
		
		for(i = 0; i<aModBorsa.length; i++){
			var insertOption=false;
			if (selTipoOrdine.val().indexOf('COND')>=0 && aModBorsa[i][11] == 'M' && selTipoOrdine.val().substr(0,selTipoOrdine.val().indexOf('COND')) == aModBorsa[i][5] ) {
				insertOption=true;
			}  
			//mercato e prezzo fanno da chiave e se non è gi&agrave; presente 
			if(aModBorsa[i][1] === selMercato.val() && (aModBorsa[i][5] === selTipoOrdine.val() || insertOption)  && !values.containsKey(aModBorsa[i][7])) {
				values.put(aModBorsa[i][7],aModBorsa[i][6]);
				$('<option>'+values.get(aModBorsa[i][7])+'</option>').attr('value', aModBorsa[i][7]).appendTo(selValidita);
			}
		}
//		conservo valore precedente in caso di reload form su segnalazione errori
		if(oldVal != null && oldVal !="") {
			if ($(selValidita).find("option[value='"+oldVal+"']").length!=0) {
				selValidita.val(oldVal);
			}
		}
	}
	function compraVendi(azione){
			$('#formCompraVendi').find('input[name="ckConf"]').attr('value','N');
			$('#formCompraVendi').find('input[name="parAcq"]').attr('value',azione);
	}
	
	function onOffSpezzature(){
		 var spez = $('#spezzature');
		 var values = new HashMap();
		 var selMercato = $('#formCompraVendi').find('select[name="parMercatoOper"]');
		 var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var selQuantita = $('#formCompraVendi').find('select[name="parMod"]');
		 
		 selQuantita.children().remove();//pulisco la combo parametro quantit&agrave;
		 //popolo combo parametro quantit&agrave; in funzione di mercato,prezzo,validit&agrave;
		 for(i = 0; i<aModBorsa.length; i++){
			 if(aModBorsa[i][1] === selMercato.val() && aModBorsa[i][5] === selPrezzo.val() 
			 	&& aModBorsa[i][7] === selValidita.val() && !values.containsKey(aModBorsa[i][9])){
			 	values.put(aModBorsa[i][9],aModBorsa[i][8]);
				$('<option>'+values.get(aModBorsa[i][9])+'</option>').attr('value', aModBorsa[i][9]).appendTo(selQuantita);
			 }
		 }
		 //se nella combo ho almeno un elemento oltre al primo valore vuoto
     	 if (selQuantita.children().length > 1){
     	 	spez.show();
	     }else{
	     	spez.hide();
	     }
	}
	function onOffPrezzoStop(){
		var selPrezzo = $('#formCompraVendi').find('select[name="parPrezzo"]');
		$('#prezzoLimite').attr('readonly',true);
		$('#trPrezzoStop').hide();
		if (selPrezzo.val()=='MER' || selPrezzo.val()=='MTL') {
			$('#prezzoLimite').val("");
			$('#prezzoStop').val("");
		} else {
			if (selPrezzo.val().indexOf('LIM')>=0) {
				$('#prezzoLimite').attr('readonly',false);
			}
			if (selPrezzo.val().indexOf('COND')>=0) {
				$('#trPrezzoStop').show();
				//$('#prezzoStop').attr('readonly',false);
			}
		}
	}
	function onOffData(){
		 var selData = $('#data');
		 var today = '17/05/2017'; 
		 var selValidita = $('#formCompraVendi').find('select[name="parTempo"]');
		 var divAvviso = $('#notaCPX');
		 if (selValidita.val() === 'CPX'){
	     	
	     	divAvviso.show();
	     } else {
	     	
	     	divAvviso.hide();
	     }
     	 if (selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD' || selValidita.val() === 'OCD'){
     	 	selData.show();
     	 	$('#parData').prop("disabled",false);
     	 	if (today !='') {
	     	 	if(selValidita.val() === 'GTT' || selValidita.val() === 'GTD' || selValidita.val() === 'VSD'){
	     	 		$('#parData option[value="'+today+'"]').remove();
	     	 	}else{
		     	 	if(($('#parData option[value="'+today+'"]').val()) == undefined ){
		     	 	   var opt = $('<option>'+today+'</option>').attr('value', today, 'checked','true');
		     	 	   $('#parData').prepend(opt);
		     	 	}
	     	 	}
     	 	}
	     }else{
	     	$('#parData').prop("disabled",true);	
	     	selData.hide();
	     }
	    
	}
	//se cambio dossier devo reinvocare la action per ripopolare il form
	function reloadFormMercato(codMercatoInfo){
		$('#formCompraVendi').find('input[name="codMercatoInfo"]').val(codMercatoInfo);
		reloadForm();
	}
	function reloadForm(){
		var url = getPathContext()+'/investimenti/compraVendiTitoloForm.do' ;
		var isin = $('#formCompraVendi').find('input[name="isin"]').val();
		var codMercatoInfo = $('#formCompraVendi').find('input[name="codMercatoInfo"]').val();
		var key = $('#formCompraVendi').find('select[name="chiaveDossier"]').val();
		var codAreaFinanza = $('#formCompraVendi').find('input[name="codAreaFinanza"]').val();
		var urlTotale = getPathContext()+'/investimenti/compraVendiTitolo.do';
		goToPage('/investimenti/compraVendiTitolo.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza,'chiaveDossier',key);
	}
	
	function popolaDossier(){
		
		
	}

	function switchRadio(radio){
		$('#'+radio).prop('checked', true);
	}
	
	//METODO ASCOLTATORE PER PILOTARE LE INTERAZIONI TRA WIDGETS
	function listener(widget){
		if(widget === 'chiaveDossier'){
			reloadForm();
		} else if(widget === 'selSottRubrica'){//intestatario
			popolaQtaVendibile();
		}  else if(widget === 'parMercatoOper'){ //mercato
			popolaPrezzo();
			onOffPrezzoStop();			
			popolaValidita();
			onOffData();
			onOffSpezzature(); 
		} else if(widget === 'parPrezzo') {//Tipo ordine
			onOffPrezzoStop();
			popolaValidita();
			onOffData();
		}  else if(widget === 'parTempo'){//validit&agrave;
			onOffData();
			//onOffOrdiniCondizionati();
		} 
	}
	function titoloMercatiTrattazione() {
		//Gestione mercati Trattazione
		var strMercati="";
		
		$('<div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione">'+strMercati+'</span>').insertAfter('.pager');	
	}

	$(document).ready(function(){
			popolaDossier();
			titoloMercatiTrattazione();
			popolaQtaVendibile();
			popolaPrezzo('LIM');
			popolaValidita('VSC');
			onOffPrezzoStop();
			onOffSpezzature();
			popolaFase();
			onOffData();
			//onOffOrdiniCondizionati();		
	});
	
</script>


<form id="formCompraVendi" method="post" action="/template/popup_investimenti_bookOrdina_compra.php" class="form-horizontal">

<div class="divForm bs-example">
<div class="boxContent form-group">

	<input type="hidden" name="parAcq" value="" id="parAcq" />
	<input type="hidden" name="ckConf" value="" />
	<input type="hidden" name="isin" value="US0231351067" />
	<input type="hidden" name="codMercatoInfo" value="NASDAQ" />
	<input type="hidden" name="codAreaFinanza" value="00003101950" />
	<input type="hidden" name="orderFrom" value="popup" />
	

	<!-- 			TITOLO -->	
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Titolo</label></div>
				<div class="col-xs-6"><label class="control-label bold">Amazon.com, Inc.</label> </div>
			</div>
			<!-- 			DOSSIER -->
		<div class="row">
				<div class="col-xs-4"><label class="control-label" for="chiaveDossier">Dossier</label></div>
				<div  class="col-xs-6" id="colChiaveDossier" >
				<select name="chiaveDossier" onchange="listener('chiaveDossier')" id="chiaveDossier" class="form-control"><option value="007|2001|000000106440" selected="selected">2001 - 000000106440</option>
<option value="007|2001|000008318876">2001 - 000008318876</option></select>
				</div>
			</div>
			<!-- 			SALDO AL -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="saldo">Saldo Al</label></div>
				<div class="col-xs-6"><select name="saldo" onchange="listener('saldo')" id="saldo" class="form-control"><option value="17/05/2017">17/05/2017   999.999.863.297,11</option>
<option value="18/05/2017">18/05/2017   999.999.863.297,11</option>
<option value="19/05/2017">19/05/2017   999.999.863.297,11</option>
<option value="22/05/2017">22/05/2017   999.999.863.297,11</option>
<option value="23/05/2017">23/05/2017   999.999.863.297,11</option></select>
				</div>
			</div>
			<!-- 			INTESTATARIO-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label"for="selSottRubrica">Intestatario</label></div>
				<div class="col-xs-6"><select name="selSottRubrica" onchange="listener('selSottRubrica')" id="selSottRubrica" class="bigcombo form-control"><option value="0,0">0 -  ARLOTU OCMAALUL</option></select>
				</div>
			</div>	
			<!-- 			Q.t&agrave; max indicative -->
			<div class="row">
				<div class="col-xs-4" ><label class="control-label">Q.t&agrave; max indicative</label>&nbsp;</div>
				<div class="col-xs-8">
				<label class="control-label">Acquistabile</label>&nbsp;&nbsp;
				<label class="bold">1167560330</label>&nbsp;|&nbsp;
				<label>Vendibile</label>&nbsp;&nbsp;
				<label class="bold"><span id="qtaRubrica"></span></label></div>
			</div>	
			<!-- 			QUANTITA-->
			<div class="row">
				<div class="col-xs-4"><label class="control-label">Quantit&agrave;</label></div>
				<div class="col-xs-4"><input type="text" name="quantita" size="10" value="" id="quantita" class="form-control" />
				
				</div>
					<div class="col-xs-4"><label>
					(Min. tratt.) 1 
			
					</label></div>
			</div>
			<!-- 			MERCATO -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parMercatoOper">Mercato</label></div> 
				<div class="col-xs-6">
				<select name="parMercatoOper" onchange="listener('parMercatoOper')" id="parMercatoOper" style="text-transform:capitalize;" class="form-control"><option value="US NA">NASDAQ</option></select>
				</div>
			</div>
			<!-- 			TIPO ORDINE -->
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTipoOrdine">Tipo ordine</label></div> 
			<div class="col-xs-6">
			<select name="parPrezzo" onchange="listener('parPrezzo')" id="parPrezzo" class="form-control"><option value="LIM" selected="selected">Limitato</option>
<option value="MER">Al Meglio</option></select> 
			</div>
			</div>
			<!-- PREZZO LIMITE -->
			<div class="row" id="trPrezzo">
				<div class="col-xs-4"><label class="control-label" for="parPrezzo">Prezzo limite</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoLimite" size="10" value="" id="prezzoLimite" class="form-control" /> 
			
				</div>
				<div class="col-xs-4">
					<label>USD</label></div>
			</div>
			<!-- VALIDITA -->
			<div class="row" id="trPrezzoStop">
				<div class="col-xs-4"><label class="control-label" for="parStop">Condizione</label></div>
				<div class="col-xs-4"><input type="text" name="prezzoStop" size="10" value="" id="prezzoStop" class="form-control" title="Esponi al raggiungimento" />
				</div>
				 <div class="col-xs-4">
				  USD
				 </div>
			</div>
		
			<div class="row">
				<div class="col-xs-4"><label class="control-label" for="parTempo">Validit&agrave;</label></div>
				<div class="col-xs-6"><select name="parTempo" onchange="listener('parTempo')" id="parTempo" class="form-control"><option value="VSC" selected="selected">Val. per la seduta</option></select> 
				</div>
			</div>
			<div id="data" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parData">Data</label></div>
				<div class="col-xs-6">
				<select name="parData" id="parData" class="form-control"><option value="17/05/2017">17/05/2017</option>
<option value="18/05/2017">18/05/2017</option>
<option value="19/05/2017">19/05/2017</option>
<option value="22/05/2017">22/05/2017</option>
<option value="23/05/2017">23/05/2017</option>
<option value="24/05/2017">24/05/2017</option>
<option value="25/05/2017">25/05/2017</option>
<option value="26/05/2017">26/05/2017</option>
<option value="29/05/2017">29/05/2017</option>
<option value="30/05/2017">30/05/2017</option>
<option value="31/05/2017">31/05/2017</option>
<option value="01/06/2017">01/06/2017</option>
<option value="02/06/2017">02/06/2017</option>
<option value="05/06/2017">05/06/2017</option>
<option value="06/06/2017">06/06/2017</option>
<option value="07/06/2017">07/06/2017</option>
<option value="08/06/2017">08/06/2017</option>
<option value="09/06/2017">09/06/2017</option>
<option value="12/06/2017">12/06/2017</option>
<option value="13/06/2017">13/06/2017</option>
<option value="14/06/2017">14/06/2017</option></select> 
				</div>
			</div>
			<div id="spezzature" class="row" style="display:none">
				<div class="col-xs-4"><label class="control-label" for="parMod">Parametro Quantit&agrave;</label></div>
				<div class="col-xs-6"><select name="parMod" id="parMod" class="form-control"><option value=""></option></select>
				</div>
			</div>
				<!-- FASE -->
			<div class="row">	
				<div class="col-xs-4"><label class="control-label" for="parFase">Fase</label></div>
				<div class="col-xs-6" id="colFase">
				<select name="parFase" id="parFase" class="form-control"></select>
				</div>
			</div>
		
	
			<!-- Notifica eseguito/ineseguito -->

			<div class="row">
				<div   class="col-xs-7"><label>Notifica eseguito/ineseguito</label>								
				</div>
					<div class="col-xs-5" >
						<input class="btn button" type="button" value='Imposta Alert' title='Imposta Alert' 
							onclick="openAjaxDialog('/template/investimenti/allarmiInvestimenti.php', 'chiaveDossier', '007|2001|000000106440', 'title', 'Allarmi Dossier Eseguiti/Ineseguiti', 'width' , 475, 'height', 200)" style="width: 120px"/>
					</div>
			</div> 
			
				
				
				<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaSMS">Via SMS</label>
					</div>	
					<div class="col-xs-9">	
						<label class="control-label bold">******1800</label>
					</div >
					<div class="col-xs-1">
						
					</div>
				</div>
				
			<div class="row">
					<div class="col-xs-2">
						<label accesskey="notificaMail">Via email</label>
					</div>	
					<div class="col-xs-9" style="overflow:hidden;">
						<label class="bold" title='colmle@tpocrripol.aabuot.oanaula
'>	
						colmle@tpocrripol.aabuot.oanaula

						</label>	
						
					</div>
					<div class="col-xs-1">
						<label><img src="/HT/fe/img/NNFFSpunta.png" class="icon15" title="Spunta" alt="Spunta" /></label>
					</div>
				</div>
				
				
					
						<div class="row">
							<div class="col-xs-2">
								<label accesskey="notificaApp">Via App</label>
							</div>	
							<div class="col-xs-9">
								
									
									<label class="bold">Aifonseis</label>
								
									-
									
									<label class="bold">iPad di Stefano</label>
								
									-
									
									<label class="bold">Team?s Mac mini</label>
								
									-
									
									<label class="bold">iPhone di Stefano</label>
								
									-
									
									<label class="bold">Smartphone di </label>
								
									-
									
									<label class="bold">SiPhone</label>
								
									-
									
									<label class="bold">Lynx?s Mac mini</label>
									
							</div>
							<div class="col-xs-1">
								
							</div>
						</div>
					
				
			
	
	</div>
	






	
	<div id="notaCPX" style="display: none">
		
		<p style="color:red;font-weight:bold;">Attenzione</p>
		
		<ul><li>La fase "Negoziazione asta di chiusura" sar&agrave; attivata<br/>solo in presenza di un prezzo di asta di chiusura.</li></ul>
    </div>
	<div id="pulsantiCompraVendi"  class="oRight row" style="padding: 4px 5px">
			<input id="compraButton" class="btn button" type="submit" value="Compra" title="Compra" onclick="compraVendi('ACQ')"/>
			<input id="vendiButton" class="btn button" type="submit" value="Vendi" title="Vendi"  onclick="compraVendi('VEN')"/>
	</div>
</div>	
  		
  
</form>
<!-- /FormAcquistoVendita.jsp -->
</div></div>
</body>
<!-- bookOrdina.jsp END -->
</div>
<div class="toldisclaimer pull-right">
	<span>Fonte dati: Borsa Italiana</span>
	 
</div>
</div>
</body>
</html>
