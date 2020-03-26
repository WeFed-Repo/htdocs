					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
					</div>
	 				<div class="riquadro clearfix"> 				  
						



	













<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag ricerca">&nbsp;</div>
			
			
		
		
			
		
		
			
				
 					<span>Dettaglio titolo</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1><div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione"></span></div>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>

<!--[if gte IE 8]>
<style>
.jqGridTOLDiv {
	display: block;
}
.jqGridTOLDiv .ui-jqgrid-bdiv {
	margin-top: auto;
}
</style>
<![endif]-->
						
						
						<!-- DettaglioTitoloBody -->





<style>
.pulsantiDettaglio {
	margin: 0 20px 10px 0!important;
	width: 100%
}
</style>
<div class="divSinistra col-xs-6">
	<!--datiQuotazione.jsp-->






<form id="formDatiQuotazione" method="post" action="/WEBHT/investimenti/datiQuotazioniJson.do">
	<input type="hidden" name="isin" value="US0231351067">
	<input type="hidden" name="codMercatoInfo" value="NASDAQ">
	<input type="hidden" name="symbol" value="AMZN">
</form>

<script type="text/javascript">
	$(document).ready(function(){
	   	
		invocaJson();
		$('#datiQuot_isin').text($('input[name="isin"]').val());
		var spanBottoni = $('#bottoniDatiQuotazione');
		var opzioni = [
				
				{label:'Pop-up',funcOptions:{funzioneJS: apriPopupDatiQuotazione}},
			
			{label:'Help',funcOptions:{funzioneJS: helpTabellaDatiQuotazione}}
			
		];
		
			creaMenuStrumenti('#datiQuotazione', opzioni, spanBottoni, 'Strumenti');
		
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
						//formattazione quantità
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
					setTimeout(invocaJson, 2000 -500 + Math.round(Math.random() * 1000));	
			}
		);
	  
	}
	function apriPopupDatiQuotazione() {
		//alert('/investimenti/dettaglioTitoloPopup.do?isin=US0231351067&codMercatoInfo=NASDAQ')
		//openPopUp('/investimenti/dettaglioTitoloPopup.do?isin=US0231351067&codMercatoInfo=NASDAQ','Dettaglio Titolo US0231351067','400','800','0','yes')
		//openPopupDaTabellatore('/investimenti/dettaglioTitoloPopup.do','isin','US0231351067','codMercatoInfo','NASDAQ');
		openPopupDaTabellatore('/dettaglioTitoloPopup.php');
	}
	
</script>




<script>
function helpTabellaDatiQuotazione() {

	
	var idHelp = 0;
	 	
		idHelp = 424;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

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

<div class="contentInterno" id="datiQuotazione">
<div class="section clearfix">
	
	<h3 class="titleSection">








		
			Dati quotazione
		
		
		

</h3>
	
	<span class="context-buttons pull-right clearfix">
		<span class="bottoni_intestazione_tabella" style="margin-top: -22px;"> <span class="rounded_corner">&nbsp;</span> <span class="bottoni" id="bottoniDatiQuotazione"></span>
		</span></span>
	
	<div class="tappo"></div>
	<table id="datiQuot">
		<colgroup>
			<col width="22%">
			<col width="28%">
			<col width="25%">
			<col width="25%">
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
				<td id="datiQuot_quantitaBid" class="">1</td>
				<td id="datiQuot_bid" class="">961,1000</td>
				<td id="datiQuot_ask" class="">961,8000</td>
				<td id="datiQuot_quantitaAsk" class="">4</td>
			</tr>
			
				<tr>
					<td><b><b>Ora Minimo
						</b>
					</b></td>
					<td><b><b>Minimo
						</b>
					</b></td>
					<td><b><b>Massimo
						</b>
					</b></td>
					<td><b><b>Ora Massimo
						</b>
					</b></td>
				</tr>
				<tr>
					<td id="datiQuot_oraMinimo">0</td>
					<td id="datiQuot_minimoGiorno" class="">0,0000</td>
					<td id="datiQuot_massimoGiorno" class="">0,0000</td>
					<td id="datiQuot_oraMassimo">0</td>
				</tr>
				<tr class="alter">
					<td><b><b>Apertura
						</b>
					</b></td>
					<td><b><b>Var.% Apertura
						</b>
					</b></td>
					<td><b><b>Q.t&agrave; Totale
						</b>
					</b></td>
					<td><b><b>Controvalore
						</b>
					</b></td>
				</tr>
				<tr class="alter">
					<td id="datiQuot_apertura" class="">0,0000</td>
					<td id="datiQuot_variazionePercApertura" class="">0,00</td>
					<td id="datiQuot_quantitaTotale" class="">671</td>
					<td id="datiQuot_controvalore" class="">3.019.736.248</td>
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
				<td id="datiQuot_last" class="">966,0700</td>
				<td id="datiQuot_variazionePercentuale" class="">0,85&nbsp;&nbsp;</td>
				<td id="datiQuot_ora" class="">22:00</td>
				<td id="datiQuot_isin">US0231351067</td>
			</tr>
			<tr>
				<td colspan="2"><b><b>Fase:
					</b>
				</b></td>
				<td id="datiQuot_descrizioneFase" colspan="2" class="">Normal / trade resume</td>
			</tr>
		</tbody>
	</table>
	
		<div class="actions  pull-right">
			
			
				
				
					<input type="button" class="btn XL" value="Compra &amp; Vendi" title="Compra &amp; Vendi" onclick="javascript:goToPage('/investimenti/compraVendiTitolo.do','isin','US0231351067', 'codMercatoInfo','NASDAQ','ridotta','true')">
				
			
		</div>
	
</div><ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>

<!-- FINE datiQuotazione.jsp-->


	<div class="section clearfix">
		
		<h3 class="titleSection">








		
			Informazioni
		
		
		

</h3>
		<div class="contentInterno padding-top20">
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="News Odierne" onclick="javascript:openPopUp('/template/investimenti/newsHeadlinesForm.php','NewsOdierne',740,300)">
			</div>
			
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="CW Call" onclick="javascript:goToPage('/investimenti/ricercaCWTitolo.do','isinDescrizione','US0231351067','codMercatoInfo','NASDAQ','tipo','1')">
			</div>

			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Analisi" onclick="javascript:openPopUp('/template/investimenti/attesa.php')">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="CW Put" onclick="javascript:goToPage('/investimenti/ricercaCWTitolo.do','isinDescrizione','US0231351067','codMercatoInfo','NASDAQ','tipo','2')">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Time&amp;Sales" onclick="javascript:openPopUp('/template/investimenti/TimeAndSalesForm.php?isin=US0231351067&amp;codMercatoInfo=NASDAQ','TimeAndSales',740,550)">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Aggiungi a preferiti" onclick="javascript:openAjaxDialog('/template/investimenti/titoliElencoPreferitiAggiungi.php','isin','US0231351067','codMercatoInfo','NASDAQ', 'title', 'Aggiungi a preferiti')">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Agg. portaf. simulato" onclick="javascript:openAjaxDialog('/template/investimenti/titoliPortafoglioSimulatoAggiungi.php','isin','US0231351067','codMercatoInfo','NASDAQ', 'title', 'Aggiungi a portafoglio simulato')">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Performance" onclick="javascript:goToPage('/investimenti/performanceTitolo.do','isin','US0231351067','codMercatoInfo','NASDAQ')">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Dati storici" onclick="javascript:openPopUp('/template/investimenti/quotazioniStoricheForm.php?isin=US0231351067&amp;codMercatoInfo=NASDAQ','QuotazioniStoriche',740,550)">
			</div>
			<div class="col-xs-6">
				<input type="button" class="btn button thin XL pulsantiDettaglio" value="Grafici" onclick="javascript:openPopUp('/investimenti/graficoForm.do?isin=US0231351067&amp;codMercatoInfo=NASDAQ&amp;contesto=popUpPage&amp;tipoGrafico=title','GraficiPopup',800,650)">
			</div>
		
		</div>
	</div>
</div>

<div class="divDestra col-xs-6">
	<div class="contentInterno section clearfix" id="divGrafico">
		
		<h3 class="titleSection">








		
			Grafico
		
		
		

</h3>
		<span class="context-buttons pull-right clearfix">
			<span class="bottoni_intestazione_tabella" style="margin-top: -22px;"> <span class="rounded_corner">&nbsp;</span> <span class="bottoni" id="bottoniGrafico"></span>
			</span>
		</span>
		<br>
		





  
  
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
		    params.dl = 15;
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
            		
			   			precedente = 966.0700;	
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

	
		
		
			aggiornaGrafici('NASDAQ.AMZN','1D','1m','S');
		
	
</script><div style="margin-left:10px">
	 
		<a class="linkGrafico" id="1D" href="javascript:aggiornaGrafici('NASDAQ.AMZN','1D','1m','S')" style="font-weight: bold;">Intraday</a>&nbsp;
	
	
	<a class="linkGrafico" id="1M" href="javascript:aggiornaGrafici('NASDAQ.AMZN','1M','1D','S')" style="font-weight: normal;">Storico 1m</a>&nbsp;
	<a class="linkGrafico" id="3M" href="javascript:aggiornaGrafici('NASDAQ.AMZN','3M','1D','S')" style="font-weight: normal;">Storico 3m</a>&nbsp;
	<a class="linkGrafico" id="1Y" href="javascript:aggiornaGrafici('NASDAQ.AMZN','1Y','1D','S')" style="font-weight: normal;">Storico 1anno</a>&nbsp;
	<a class="linkGrafico" id="5Y" href="javascript:aggiornaGrafici('NASDAQ.AMZN','5Y','1D','S')" style="font-weight: normal;">Storico 5anni</a>&nbsp;
	</div>
<div id="iChartA" style="overflow:hidden;width:100%;height:220px;margin-top:8px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 461px; height: 220px; text-align: left; line-height: normal; z-index: 0; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif; font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="461" height="220"><defs><clipPath id="highcharts-1"><rect fill="none" x="0" y="0" width="401" height="178"></rect></clipPath></defs><rect rx="5" ry="5" fill="#FFFFFF" x="0" y="0" width="461" height="220" stroke-width="0.000001"></rect><rect rx="0" ry="0" fill="#FFFFFF" x="50" y="10" width="401" height="178" stroke-width="0.000001"></rect><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 202.5 10 L 202.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 326.5 10 L 326.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 450.5 10 L 450.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 78.5 10 L 78.5 188" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 50 130.5 L 451 130.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 70.5 L 451 70.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 10.5 L 451 10.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path><path fill="none" d="M 50 190.5 L 451 190.5" stroke="#C0C0C0" stroke-width="1" zIndex="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 202.5 188 L 202.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 326.5 188 L 326.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 450.5 188 L 450.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 78.5 188 L 78.5 193" stroke="#C0D0E0" stroke-width="1"></path><path fill="none" d="M 50 188.5 L 451 188.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 49.5 10 L 49.5 190" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(50,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M 0 159.5 L 1.0335051546391754 154.7 L 2.0670103092783507 156 L 3.100515463917526 144 L 4.134020618556701 139.2 L 5.167525773195877 140.6 L 6.201030927835052 146.9 L 7.234536082474228 162.3 L 8.268041237113403 158.5 L 9.301546391752577 152.4 L 10.335051546391753 144.1 L 11.36855670103093 156.8 L 12.402061855670103 154.2 L 13.43556701030928 152.1 L 14.469072164948455 152.5 L 15.50257731958763 156.8 L 16.536082474226806 151.9 L 17.569587628865982 147 L 18.603092783505154 141.6 L 19.63659793814433 146.4 L 20.670103092783506 139.4 L 21.703608247422682 137 L 22.73711340206186 125 L 23.77061855670103 131.6 L 24.804123711340207 123.7 L 25.837628865979383 125.3 L 26.87113402061856 120.6 L 27.904639175257735 121.8 L 28.93814432989691 124 L 29.971649484536083 120.4 L 31.00515463917526 115.7 L 32.03865979381443 108 L 33.07216494845361 107.6 L 34.105670103092784 102.9 L 35.139175257731964 87.1 L 36.172680412371136 102.1 L 37.20618556701031 91.3 L 38.23969072164949 90.8 L 39.27319587628866 95.9 L 40.30670103092784 95.6 L 41.34020618556701 89.8 L 42.373711340206185 90.8 L 43.407216494845365 86.5 L 44.44072164948454 87 L 45.47422680412372 84.1 L 46.50773195876289 84.8 L 47.54123711340206 85.8 L 48.57474226804124 89.2 L 49.608247422680414 88.6 L 50.64175257731959 94.9 L 51.675257731958766 105.2 L 52.708762886597945 110 L 53.74226804123712 115.1 L 54.77577319587629 115.3 L 55.80927835051547 127.1 L 56.84278350515464 122.3 L 57.87628865979382 131 L 58.909793814432994 137.9 L 59.94329896907217 131.2 L 60.97680412371135 121.6 L 62.01030927835052 128.9 L 63.0438144329897 123.1 L 64.07731958762886 120.5 L 65.11082474226805 113.3 L 66.14432989690722 109.6 L 67.1778350515464 108.5 L 68.21134020618557 103.7 L 69.24484536082474 109.7 L 70.27835051546393 114 L 71.3118556701031 108.7 L 72.34536082474227 117.7 L 73.37886597938144 118.7 L 74.41237113402062 119.8 L 75.4458762886598 117.5 L 76.47938144329898 111.5 L 77.51288659793815 113.4 L 78.54639175257732 106.6 L 79.5798969072165 102.6 L 80.61340206185568 102 L 81.64690721649485 103.8 L 82.68041237113403 103.1 L 83.7139175257732 102.2 L 84.74742268041237 101.3 L 85.78092783505156 102 L 86.81443298969073 100 L 87.8479381443299 102.8 L 88.88144329896907 104.9 L 89.91494845360825 103.7 L 90.94845360824743 100.3 L 91.9819587628866 103.4 L 93.01546391752578 99 L 94.04896907216495 104.4 L 95.08247422680412 102.3 L 96.11597938144331 100.2 L 97.14948453608248 97 L 98.18298969072166 100.8 L 99.21649484536083 99.6 L 100.25000000000001 103 L 101.28350515463919 104.3 L 102.31701030927836 102.6 L 103.35051546391753 102.6 L 104.3840206185567 106.2 L 105.41752577319589 105.6 L 106.45103092783506 100.8 L 107.48453608247424 104.2 L 108.51804123711341 105.5 L 109.55154639175258 106.8 L 110.58505154639177 107.8 L 111.61855670103094 110.4 L 112.65206185567011 107.2 L 113.68556701030928 103.9 L 114.71907216494846 109.9 L 115.75257731958764 113.4 L 116.78608247422682 118.1 L 117.81958762886599 116.5 L 118.85309278350516 110.3 L 119.88659793814433 109.3 L 120.92010309278352 109 L 121.9536082474227 108.8 L 122.98711340206187 109.2 L 124.02061855670104 113.6 L 125.05412371134021 114.4 L 126.0876288659794 108.7 L 127.12113402061857 108.8 L 128.15463917525773 109 L 129.18814432989691 111.1 L 130.2216494845361 106.2 L 131.25515463917526 104.3 L 132.28865979381445 98.5 L 133.3221649484536 97.9 L 134.3556701030928 99.5 L 135.38917525773198 98.6 L 136.42268041237114 101.9 L 137.45618556701032 104 L 138.48969072164948 104.8 L 139.52319587628867 105.8 L 140.55670103092785 107.2 L 141.590206185567 103.7 L 142.6237113402062 99.5 L 143.65721649484536 96.2 L 144.69072164948454 94.8 L 145.72422680412373 88 L 146.7577319587629 90.1 L 147.79123711340208 88.9 L 148.82474226804123 89.2 L 149.85824742268042 89.8 L 150.8917525773196 89.2 L 151.92525773195877 91.2 L 152.95876288659795 92.6 L 153.9922680412371 93.5 L 155.0257731958763 97.6 L 156.05927835051548 96.6 L 157.09278350515464 95.8 L 158.12628865979383 92.3 L 159.159793814433 92.2 L 160.19329896907217 91.2 L 161.22680412371136 97 L 162.26030927835052 93.6 L 163.2938144329897 92.2 L 164.32731958762886 94 L 165.36082474226805 103.9 L 166.39432989690724 97.1 L 167.4278350515464 95.2 L 168.46134020618558 93.1 L 169.49484536082474 90.7 L 170.52835051546393 94.4 L 171.5618556701031 95.5 L 172.59536082474227 94.8 L 173.62886597938146 91.6 L 174.66237113402062 87 L 175.6958762886598 84 L 176.729381443299 87.8 L 177.76288659793815 89.3 L 178.79639175257734 82 L 179.8298969072165 80.3 L 180.86340206185568 79.9 L 181.89690721649487 76.2 L 182.93041237113403 74.8 L 183.9639175257732 71.8 L 184.99742268041237 70.7 L 186.03092783505156 78.4 L 187.06443298969074 80.4 L 188.0979381443299 79.4 L 189.1314432989691 75 L 190.16494845360825 73.3 L 191.19845360824743 72.6 L 192.23195876288662 69.8 L 193.26546391752578 63.4 L 194.29896907216497 63.9 L 195.33247422680412 61.1 L 196.3659793814433 65.9 L 197.3994845360825 72.1 L 198.43298969072166 74.1 L 199.46649484536084 76.1 L 200.50000000000003 74.6 L 201.5335051546392 74.1 L 202.56701030927837 72 L 203.60051546391753 74 L 204.63402061855672 75.8 L 205.6675257731959 71.9 L 206.70103092783506 73.6 L 207.73453608247425 73.9 L 208.7680412371134 73.3 L 209.8015463917526 75.8 L 210.83505154639178 76.4 L 211.86855670103094 75.7 L 212.90206185567013 80.5 L 213.93556701030928 83 L 214.96907216494847 84.2 L 216.00257731958766 88.6 L 217.03608247422682 91.6 L 218.069587628866 90.2 L 219.10309278350516 88.3 L 220.13659793814435 87.1 L 221.17010309278353 85.1 L 222.2036082474227 85.1 L 223.23711340206188 83.9 L 224.27061855670104 82.2 L 225.30412371134022 82.4 L 226.3376288659794 81.8 L 227.37113402061857 77.2 L 228.40463917525776 77 L 229.43814432989691 77.8 L 230.4716494845361 76.7 L 231.5051546391753 77.6 L 232.53865979381445 78.5 L 233.57216494845363 79 L 234.6056701030928 79.5 L 235.63917525773198 79.8 L 236.67268041237116 76.9 L 237.70618556701032 78.4 L 238.7396907216495 78.6 L 239.77319587628867 79.3 L 240.80670103092785 80.8 L 241.84020618556704 78.6 L 242.8737113402062 80.3 L 243.9072164948454 83 L 244.94072164948454 82 L 245.97422680412373 85.2 L 247.00773195876292 86.2 L 248.04123711340208 88.7 L 249.07474226804126 89.5 L 250.10824742268042 88.2 L 251.1417525773196 88.6 L 252.1752577319588 85.2 L 253.20876288659795 86 L 254.24226804123714 85.1 L 255.2757731958763 83.8 L 256.30927835051546 80.5 L 257.34278350515467 79.8 L 258.37628865979383 82.7 L 259.409793814433 83.9 L 260.4432989690722 79.6 L 261.47680412371136 82 L 262.5103092783505 82.7 L 263.54381443298973 88.9 L 264.5773195876289 94.3 L 265.61082474226805 93 L 266.6443298969072 93.1 L 267.6778350515464 92.5 L 268.7113402061856 90.6 L 269.74484536082474 89 L 270.77835051546396 92.2 L 271.8118556701031 90.6 L 272.8453608247423 98.2 L 273.8788659793815 100.8 L 274.91237113402065 102.3 L 275.9458762886598 108.5 L 276.97938144329896 110.6 L 278.0128865979382 110 L 279.04639175257734 104.2 L 280.0798969072165 104.8 L 281.1134020618557 102 L 282.14690721649487 102.2 L 283.180412371134 99.4 L 284.21391752577324 99.8 L 285.2474226804124 98.8 L 286.28092783505156 99.2 L 287.3144329896907 98 L 288.34793814432993 100 L 289.3814432989691 96.8 L 290.41494845360825 96.1 L 291.44845360824746 94.7 L 292.4819587628866 94 L 293.5154639175258 98.6 L 294.548969072165 97.4 L 295.58247422680415 97.5 L 296.6159793814433 95.7 L 297.64948453608247 97 L 298.6829896907217 98.3 L 299.71649484536084 97.6 L 300.75 97 L 301.7835051546392 97.6 L 302.8170103092784 99.5 L 303.85051546391753 103.2 L 304.88402061855675 103.9 L 305.9175257731959 104.3 L 306.95103092783506 104.6 L 307.9845360824742 102.6 L 309.01804123711344 102.4 L 310.0515463917526 97.2 L 311.08505154639175 96.4 L 312.11855670103097 97.2 L 313.1520618556701 94.3 L 314.1855670103093 95.4 L 315.2190721649485 94.8 L 316.25257731958766 92.5 L 317.2860824742268 88.8 L 318.319587628866 87.5 L 319.3530927835052 88.1 L 320.38659793814435 88.1 L 321.4201030927835 89.3 L 322.4536082474227 90.7 L 323.4871134020619 95.3 L 324.52061855670104 98.6 L 325.55412371134025 98.5 L 326.5876288659794 92.7 L 327.62113402061857 93.7 L 328.6546391752577 93.2 L 329.68814432989694 91 L 330.7216494845361 94.9 L 331.75515463917526 95.6 L 332.7886597938145 93.5 L 333.82216494845363 93.1 L 334.8556701030928 93.1 L 335.889175257732 96.1 L 336.92268041237116 99.7 L 337.9561855670103 98.3 L 338.9896907216495 96.7 L 340.0231958762887 94.8 L 341.05670103092785 96 L 342.090206185567 97.7 L 343.1237113402062 98.4 L 344.1572164948454 96.2 L 345.19072164948454 93.5 L 346.22422680412376 94.7 L 347.2577319587629 96.9 L 348.2912371134021 94.9 L 349.32474226804123 96.5 L 350.35824742268045 94.3 L 351.3917525773196 96.5 L 352.42525773195877 94.7 L 353.458762886598 97.7 L 354.49226804123714 97.2 L 355.5257731958763 95.4 L 356.5592783505155 95.9 L 357.59278350515467 97.9 L 358.62628865979383 97 L 359.659793814433 97.8 L 360.6932989690722 96.9 L 361.72680412371136 96.6 L 362.7603092783505 100.3 L 363.79381443298973 100.1 L 364.8273195876289 101.2 L 365.86082474226805 102.8 L 366.89432989690727 103.5 L 367.9278350515464 103.6 L 368.9613402061856 100.3 L 369.99484536082474 100.1 L 371.02835051546396 100.6 L 372.0618556701031 102.1 L 373.0953608247423 105.5 L 374.1288659793815 108.1 L 375.16237113402065 111.1 L 376.1958762886598 106.4 L 377.229381443299 105.7 L 378.2628865979382 109.2 L 379.29639175257734 103.6 L 380.3298969072165 103.3 L 381.3634020618557 102.4 L 382.39690721649487 97.3 L 383.430412371134 98.7 L 384.46391752577324 96 L 385.4974226804124 98.6 L 386.53092783505156 103.7 L 387.5644329896908 107.9 L 388.59793814432993 111.5 L 389.6314432989691 108.6 L 390.66494845360825 108.2 L 391.69845360824746 106.6 L 392.7319587628866 105.2 L 393.7654639175258 105.5 L 394.798969072165 105.1 L 395.83247422680415 107 L 396.8659793814433 105.8 L 397.8994845360825 108.4 L 398.9329896907217 109.3 L 399.96649484536084 111.7 L 401.00000000000006 107" stroke="#003d6e" stroke-width="1" zIndex="1"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(50,10)" clip-path="none"></g></g><g class="highcharts-axis-labels" zIndex="7"><text x="78.93814432989691" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="78.93814432989691">16:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">18:00</tspan></text><text x="326.97938144329896" y="202" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="326.97938144329896">20:00</tspan></text><text x="0" y="-9999" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="middle"><tspan x="0">22:00</tspan></text></g><g class="highcharts-axis-labels" zIndex="7"><text x="48" y="188" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:181px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">960,00</tspan></text><text x="48" y="128" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:181px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">965,00</tspan></text><text x="48" y="68" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:181px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">970,00</tspan></text><text x="48" y="8" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:11;width:181px;color:#3E576F;line-height:14px;font-weight:;fill:#3E576F;" text-anchor="end"><tspan x="48">975,00</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="padding:0;white-space:nowrap;" visibility="hidden"><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="5" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="3" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="none" x="0" y="0" width="10" height="10" stroke-width="1" fill-opacity="0.85" isShadow="true" stroke="black" stroke-opacity="0.15" transform="translate(1, 1)"></rect><rect rx="5" ry="5" fill="rgb(255,255,255)" x="0" y="0" width="10" height="10" stroke-width="2" fill-opacity="0.85"></rect><text x="5" y="18" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#333333;fill:#333333;" zIndex="1"></text></g><g class="highcharts-tracker" zIndex="9"><g visibility="visible" zIndex="1" transform="translate(50,10)" clip-path="url(#highcharts-1)"><path fill="none" d="M -10 159.5 L 0 159.5 L 1.0335051546391754 154.7 L 2.0670103092783507 156 L 3.100515463917526 144 L 4.134020618556701 139.2 L 5.167525773195877 140.6 L 6.201030927835052 146.9 L 7.234536082474228 162.3 L 8.268041237113403 158.5 L 9.301546391752577 152.4 L 10.335051546391753 144.1 L 11.36855670103093 156.8 L 12.402061855670103 154.2 L 13.43556701030928 152.1 L 14.469072164948455 152.5 L 15.50257731958763 156.8 L 16.536082474226806 151.9 L 17.569587628865982 147 L 18.603092783505154 141.6 L 19.63659793814433 146.4 L 20.670103092783506 139.4 L 21.703608247422682 137 L 22.73711340206186 125 L 23.77061855670103 131.6 L 24.804123711340207 123.7 L 25.837628865979383 125.3 L 26.87113402061856 120.6 L 27.904639175257735 121.8 L 28.93814432989691 124 L 29.971649484536083 120.4 L 31.00515463917526 115.7 L 32.03865979381443 108 L 33.07216494845361 107.6 L 34.105670103092784 102.9 L 35.139175257731964 87.1 L 36.172680412371136 102.1 L 37.20618556701031 91.3 L 38.23969072164949 90.8 L 39.27319587628866 95.9 L 40.30670103092784 95.6 L 41.34020618556701 89.8 L 42.373711340206185 90.8 L 43.407216494845365 86.5 L 44.44072164948454 87 L 45.47422680412372 84.1 L 46.50773195876289 84.8 L 47.54123711340206 85.8 L 48.57474226804124 89.2 L 49.608247422680414 88.6 L 50.64175257731959 94.9 L 51.675257731958766 105.2 L 52.708762886597945 110 L 53.74226804123712 115.1 L 54.77577319587629 115.3 L 55.80927835051547 127.1 L 56.84278350515464 122.3 L 57.87628865979382 131 L 58.909793814432994 137.9 L 59.94329896907217 131.2 L 60.97680412371135 121.6 L 62.01030927835052 128.9 L 63.0438144329897 123.1 L 64.07731958762886 120.5 L 65.11082474226805 113.3 L 66.14432989690722 109.6 L 67.1778350515464 108.5 L 68.21134020618557 103.7 L 69.24484536082474 109.7 L 70.27835051546393 114 L 71.3118556701031 108.7 L 72.34536082474227 117.7 L 73.37886597938144 118.7 L 74.41237113402062 119.8 L 75.4458762886598 117.5 L 76.47938144329898 111.5 L 77.51288659793815 113.4 L 78.54639175257732 106.6 L 79.5798969072165 102.6 L 80.61340206185568 102 L 81.64690721649485 103.8 L 82.68041237113403 103.1 L 83.7139175257732 102.2 L 84.74742268041237 101.3 L 85.78092783505156 102 L 86.81443298969073 100 L 87.8479381443299 102.8 L 88.88144329896907 104.9 L 89.91494845360825 103.7 L 90.94845360824743 100.3 L 91.9819587628866 103.4 L 93.01546391752578 99 L 94.04896907216495 104.4 L 95.08247422680412 102.3 L 96.11597938144331 100.2 L 97.14948453608248 97 L 98.18298969072166 100.8 L 99.21649484536083 99.6 L 100.25000000000001 103 L 101.28350515463919 104.3 L 102.31701030927836 102.6 L 103.35051546391753 102.6 L 104.3840206185567 106.2 L 105.41752577319589 105.6 L 106.45103092783506 100.8 L 107.48453608247424 104.2 L 108.51804123711341 105.5 L 109.55154639175258 106.8 L 110.58505154639177 107.8 L 111.61855670103094 110.4 L 112.65206185567011 107.2 L 113.68556701030928 103.9 L 114.71907216494846 109.9 L 115.75257731958764 113.4 L 116.78608247422682 118.1 L 117.81958762886599 116.5 L 118.85309278350516 110.3 L 119.88659793814433 109.3 L 120.92010309278352 109 L 121.9536082474227 108.8 L 122.98711340206187 109.2 L 124.02061855670104 113.6 L 125.05412371134021 114.4 L 126.0876288659794 108.7 L 127.12113402061857 108.8 L 128.15463917525773 109 L 129.18814432989691 111.1 L 130.2216494845361 106.2 L 131.25515463917526 104.3 L 132.28865979381445 98.5 L 133.3221649484536 97.9 L 134.3556701030928 99.5 L 135.38917525773198 98.6 L 136.42268041237114 101.9 L 137.45618556701032 104 L 138.48969072164948 104.8 L 139.52319587628867 105.8 L 140.55670103092785 107.2 L 141.590206185567 103.7 L 142.6237113402062 99.5 L 143.65721649484536 96.2 L 144.69072164948454 94.8 L 145.72422680412373 88 L 146.7577319587629 90.1 L 147.79123711340208 88.9 L 148.82474226804123 89.2 L 149.85824742268042 89.8 L 150.8917525773196 89.2 L 151.92525773195877 91.2 L 152.95876288659795 92.6 L 153.9922680412371 93.5 L 155.0257731958763 97.6 L 156.05927835051548 96.6 L 157.09278350515464 95.8 L 158.12628865979383 92.3 L 159.159793814433 92.2 L 160.19329896907217 91.2 L 161.22680412371136 97 L 162.26030927835052 93.6 L 163.2938144329897 92.2 L 164.32731958762886 94 L 165.36082474226805 103.9 L 166.39432989690724 97.1 L 167.4278350515464 95.2 L 168.46134020618558 93.1 L 169.49484536082474 90.7 L 170.52835051546393 94.4 L 171.5618556701031 95.5 L 172.59536082474227 94.8 L 173.62886597938146 91.6 L 174.66237113402062 87 L 175.6958762886598 84 L 176.729381443299 87.8 L 177.76288659793815 89.3 L 178.79639175257734 82 L 179.8298969072165 80.3 L 180.86340206185568 79.9 L 181.89690721649487 76.2 L 182.93041237113403 74.8 L 183.9639175257732 71.8 L 184.99742268041237 70.7 L 186.03092783505156 78.4 L 187.06443298969074 80.4 L 188.0979381443299 79.4 L 189.1314432989691 75 L 190.16494845360825 73.3 L 191.19845360824743 72.6 L 192.23195876288662 69.8 L 193.26546391752578 63.4 L 194.29896907216497 63.9 L 195.33247422680412 61.1 L 196.3659793814433 65.9 L 197.3994845360825 72.1 L 198.43298969072166 74.1 L 199.46649484536084 76.1 L 200.50000000000003 74.6 L 201.5335051546392 74.1 L 202.56701030927837 72 L 203.60051546391753 74 L 204.63402061855672 75.8 L 205.6675257731959 71.9 L 206.70103092783506 73.6 L 207.73453608247425 73.9 L 208.7680412371134 73.3 L 209.8015463917526 75.8 L 210.83505154639178 76.4 L 211.86855670103094 75.7 L 212.90206185567013 80.5 L 213.93556701030928 83 L 214.96907216494847 84.2 L 216.00257731958766 88.6 L 217.03608247422682 91.6 L 218.069587628866 90.2 L 219.10309278350516 88.3 L 220.13659793814435 87.1 L 221.17010309278353 85.1 L 222.2036082474227 85.1 L 223.23711340206188 83.9 L 224.27061855670104 82.2 L 225.30412371134022 82.4 L 226.3376288659794 81.8 L 227.37113402061857 77.2 L 228.40463917525776 77 L 229.43814432989691 77.8 L 230.4716494845361 76.7 L 231.5051546391753 77.6 L 232.53865979381445 78.5 L 233.57216494845363 79 L 234.6056701030928 79.5 L 235.63917525773198 79.8 L 236.67268041237116 76.9 L 237.70618556701032 78.4 L 238.7396907216495 78.6 L 239.77319587628867 79.3 L 240.80670103092785 80.8 L 241.84020618556704 78.6 L 242.8737113402062 80.3 L 243.9072164948454 83 L 244.94072164948454 82 L 245.97422680412373 85.2 L 247.00773195876292 86.2 L 248.04123711340208 88.7 L 249.07474226804126 89.5 L 250.10824742268042 88.2 L 251.1417525773196 88.6 L 252.1752577319588 85.2 L 253.20876288659795 86 L 254.24226804123714 85.1 L 255.2757731958763 83.8 L 256.30927835051546 80.5 L 257.34278350515467 79.8 L 258.37628865979383 82.7 L 259.409793814433 83.9 L 260.4432989690722 79.6 L 261.47680412371136 82 L 262.5103092783505 82.7 L 263.54381443298973 88.9 L 264.5773195876289 94.3 L 265.61082474226805 93 L 266.6443298969072 93.1 L 267.6778350515464 92.5 L 268.7113402061856 90.6 L 269.74484536082474 89 L 270.77835051546396 92.2 L 271.8118556701031 90.6 L 272.8453608247423 98.2 L 273.8788659793815 100.8 L 274.91237113402065 102.3 L 275.9458762886598 108.5 L 276.97938144329896 110.6 L 278.0128865979382 110 L 279.04639175257734 104.2 L 280.0798969072165 104.8 L 281.1134020618557 102 L 282.14690721649487 102.2 L 283.180412371134 99.4 L 284.21391752577324 99.8 L 285.2474226804124 98.8 L 286.28092783505156 99.2 L 287.3144329896907 98 L 288.34793814432993 100 L 289.3814432989691 96.8 L 290.41494845360825 96.1 L 291.44845360824746 94.7 L 292.4819587628866 94 L 293.5154639175258 98.6 L 294.548969072165 97.4 L 295.58247422680415 97.5 L 296.6159793814433 95.7 L 297.64948453608247 97 L 298.6829896907217 98.3 L 299.71649484536084 97.6 L 300.75 97 L 301.7835051546392 97.6 L 302.8170103092784 99.5 L 303.85051546391753 103.2 L 304.88402061855675 103.9 L 305.9175257731959 104.3 L 306.95103092783506 104.6 L 307.9845360824742 102.6 L 309.01804123711344 102.4 L 310.0515463917526 97.2 L 311.08505154639175 96.4 L 312.11855670103097 97.2 L 313.1520618556701 94.3 L 314.1855670103093 95.4 L 315.2190721649485 94.8 L 316.25257731958766 92.5 L 317.2860824742268 88.8 L 318.319587628866 87.5 L 319.3530927835052 88.1 L 320.38659793814435 88.1 L 321.4201030927835 89.3 L 322.4536082474227 90.7 L 323.4871134020619 95.3 L 324.52061855670104 98.6 L 325.55412371134025 98.5 L 326.5876288659794 92.7 L 327.62113402061857 93.7 L 328.6546391752577 93.2 L 329.68814432989694 91 L 330.7216494845361 94.9 L 331.75515463917526 95.6 L 332.7886597938145 93.5 L 333.82216494845363 93.1 L 334.8556701030928 93.1 L 335.889175257732 96.1 L 336.92268041237116 99.7 L 337.9561855670103 98.3 L 338.9896907216495 96.7 L 340.0231958762887 94.8 L 341.05670103092785 96 L 342.090206185567 97.7 L 343.1237113402062 98.4 L 344.1572164948454 96.2 L 345.19072164948454 93.5 L 346.22422680412376 94.7 L 347.2577319587629 96.9 L 348.2912371134021 94.9 L 349.32474226804123 96.5 L 350.35824742268045 94.3 L 351.3917525773196 96.5 L 352.42525773195877 94.7 L 353.458762886598 97.7 L 354.49226804123714 97.2 L 355.5257731958763 95.4 L 356.5592783505155 95.9 L 357.59278350515467 97.9 L 358.62628865979383 97 L 359.659793814433 97.8 L 360.6932989690722 96.9 L 361.72680412371136 96.6 L 362.7603092783505 100.3 L 363.79381443298973 100.1 L 364.8273195876289 101.2 L 365.86082474226805 102.8 L 366.89432989690727 103.5 L 367.9278350515464 103.6 L 368.9613402061856 100.3 L 369.99484536082474 100.1 L 371.02835051546396 100.6 L 372.0618556701031 102.1 L 373.0953608247423 105.5 L 374.1288659793815 108.1 L 375.16237113402065 111.1 L 376.1958762886598 106.4 L 377.229381443299 105.7 L 378.2628865979382 109.2 L 379.29639175257734 103.6 L 380.3298969072165 103.3 L 381.3634020618557 102.4 L 382.39690721649487 97.3 L 383.430412371134 98.7 L 384.46391752577324 96 L 385.4974226804124 98.6 L 386.53092783505156 103.7 L 387.5644329896908 107.9 L 388.59793814432993 111.5 L 389.6314432989691 108.6 L 390.66494845360825 108.2 L 391.69845360824746 106.6 L 392.7319587628866 105.2 L 393.7654639175258 105.5 L 394.798969072165 105.1 L 395.83247422680415 107 L 396.8659793814433 105.8 L 397.8994845360825 108.4 L 398.9329896907217 109.3 L 399.96649484536084 111.7 L 401.00000000000006 107 L 411.00000000000006 107" isTracker="true" stroke-linejoin="round" visibility="visible" stroke-opacity="0.0001" stroke="rgb(192,192,192)" stroke-width="21" style=""></path></g></g><path fill="none" d="M 50 117.5 L 451 117.5" stroke="red" stroke-width="1" stroke-dasharray="4,3" zIndex="1000"></path></svg></div></div>





	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li></ul></div>
	<br>
	<div class="contentInterno section clearfix" id="book">
		
		<h3 class="titleSection">








		
			Book
		
		
		

</h3>
		<span class="context-buttons pull-right clearfix">
			<span class="bottoni_intestazione_tabella" style="margin-top: -22px;"> <span class="rounded_corner">&nbsp;</span> <span class="bottoni" id="bottoniBook"></span> </span>
		</span>
		<!--NonAutorizzato-->



<div>

<div id="divNonAutorizzato">
		<p class="oCenter">Funzione disponibile per le linee <b>YouBanking, Universal e Day Trader</b> esclusivamente per i Titoli Italia<br></p>
</div>
</div>
<!--/NonAutorizzato-->
	<ul class="ulGridOptions ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all"><li class="ui-menu-item"><a href="#" class="ui-corner-all">Pop-up</a></li><li class="ui-menu-item"><a href="#" class="ui-corner-all">Help</a></li></ul></div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
	
		//Gestione mercati Trattazione
		var strMercati="";
		
		$('<div id="tbs" class="pull-right padding10"><span class="titoloMercatiTrattazione">'+strMercati+'</span>').insertAfter('#mainContent .riquadro h1');	
	
		
		//tendina opzioni grafico
		var spanBottoni = $('#bottoniGrafico');
		var opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupGrafico}}
		];
		creaMenuStrumenti('#divGrafico', opzioni, spanBottoni, 'Strumenti');
		
		//tendina opzioni book
		spanBottoni = $('#bottoniBook');
		opzioni = [
			{label:'Pop-up',funcOptions:{funzioneJS: apriPopupBook}},
			//{label:'Stampa',funcOptions:{funzioneJS: Stampa}},
			{label:'Help',funcOptions:{funzioneJS: helpTabellaBook}}
		];
		creaMenuStrumenti('#book', opzioni, spanBottoni, 'Strumenti');
	});
		
	function apriPopupGrafico() {
		openPopUp('/WEBHT/graficoForm.php?isin=US0231351067&codMercatoInfo=NASDAQ&contesto=popUpPage&tipoGrafico=title','GraficiPopup',800,650)
	}
	
	function apriPopupBook() {
		var url = '/WEBHT/mostraMercatiTrattazione.php';
		window.open(url, 'US0231351067', 'width=700,height=300,toolbar=0,status=0,menubar=0,scrollbars=0');
	}
</script>



<script>
function helpTabellaBook() {

	
	var idHelp = 0;
	 	
		idHelp = 414;
	
	OpenHelp(getPathContext() + '/help/page.do?id=' + idHelp);

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
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>