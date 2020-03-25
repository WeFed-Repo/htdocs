
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>ENI - Book Webank</title>
		<link href="/wscmn/css/priv_generic.css?a=456" rel="stylesheet" type="text/css" media="all">
		<link href="/wscmn/css/ret/priv_special.css?a=456" rel="stylesheet" type="text/css" media="all">
		<link href="/css/ret/priv_color.css?a=456" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" media="print" href="/wscmn/css/priv_print.css?a=456">
		<link href="/wscmn/css/ret/priv_special_wt.css?a=456" rel="stylesheet" type="text/css" media="all">
		<link href="/wscmn/css/popup_gen.css?a=456" rel="stylesheet" type="text/css" media="screen">
		<script src="/wscmn/js/jquery.js?a=456" type="text/javascript"></script>
		<script src="/wscmn/js/ret/priv_utilities.js?a=456" type="text/javascript"></script>
		<script src="/wscmn/js/ret/priv_book.js?a=456" type="text/javascript"></script>
<!-- Push -->
		<script type="text/javascript" src="/wscmn/js/privata/ls44/lsutil_bookTest.js?a=456"></script>
		
		<script type="text/javascript" src="/wscmn/js/privata/ls44/formatnumber.js?a=456"></script>
		
		<script type="text/javascript" src="/wscmn/js/privata/ls44/lightstreamer_globals.js?a=456"></script>
		
		<script>
			function handleVisualUpdate(grid, key, visualUpdateInfo, position) {
				var fields = grid.extractFieldList();
				var updateLastPrice = false;
				
				for(var i=0; i<fields.length; i++) {
					var currentField = fields[i];
					var newValue = visualUpdateInfo.getChangedFieldValue(currentField);
					if (newValue == null) continue; 
					
					var oldValue = grid.getValue(key, currentField), 
					formattedValue = newValue;
					
					if(currentField === 'percentage_change'){
					
						updateLastPrice = true;
						formattedValue = newValue.replace(/\./g, ',') + ' %';
						var num = parseFloat(newValue);
						if (num > 0 ){
							visualUpdateInfo.setCellStyle(currentField, 'posi', 'posi');
						}else if (num < 0){
							visualUpdateInfo.setCellStyle(currentField, 'nega', 'nega');
						}
					} else if(currentField !== 'trade_time'){
						formattedValue = formatNumber( newValue, '#.##0,####');
					}
					
					visualUpdateInfo.setCellAttribute(currentField, '#dce7b5', null, "backgroundColor");
					visualUpdateInfo.setCellValue(currentField, formattedValue);
				}
				
				if (updateLastPrice && $('#plPortafoglio').length) {
					
					var tipoOrdinaria = $('#tipoOrdinaria').is(':checked');
					var tipoShort = $('#tipoShort').is(':checked');
					var tipoMarginato = $('#tipoMarginato').is(':checked');
					var lastPrice = Number(visualUpdateInfo.getCellValue('last_price').replace(/\./g, '').replace(/\,/g, '.'));
					if (tipoOrdinaria) {
						var pl = calcolaPL(storedPortfolioData['LONG'], lastPrice);
						$('#plPortafoglio').html((pl+"").replace(/\./g, ','));
					} else if (tipoShort) {
						var pl = calcolaPL(storedPortfolioData['SHORT'], lastPrice);
						$('#plPortafoglioShort').html((pl+"").replace(/\./g, ','));
					} else if (tipoMarginato) {
						var pl = calcolaPL(storedPortfolioData['MARG'], lastPrice);
						$('#plPortafoglioMarg').html((pl+"").replace(/\./g, ','));
					}
				}
			};
			
			var storedPortfolioData = {
				'MARG': [],
				'SHORT': [],
				'LONG': []
			};
			
			function handleVisualUpdatePortfolio(updateInfo, options) {
				
				var oper = updateInfo.getValue('tipo');
				if (oper === 'INTRADAY') { oper = 'MARG'; }
				else if (oper === 'OVERNIGHT' || oper === 'MARG_OVERNIGHT') { oper = 'SHORT'; }
				else { oper = 'LONG'; }
				
				LS_UTIL.setDatiPortafoglio('push', oper, updateInfo);
					      
				var storedData = storedPortfolioData[oper];
				
				if(!(storedData[2] === options.staticData.conto && storedData[3] == options.staticData.borsa && storedData[4] == options.staticData.mercato && storedData[5] == options.staticData.stockcode)) { return; }
				
				var command = storedData[0];

				var qta = 0,
				pl = 0,
				pmc = 0;
				
		        if(command === 'ADD' || command === 'UPDATE') {
				    qta = storedData[13];
		            pl = calcolaPL(storedData);
		            if (oper == 'LONG') {
			            pmc = storedData[11];
		            } else {
			            pmc = storedData[12];
					    qta = storedData[14];
			        }  
		        } else if (command !== 'DELETE') {
		            return;
		        }
				
		        if (oper === 'LONG') { oper = ''; } 
		        else if (oper == 'SHORT') { oper = 'Short'; } 
		        else if (oper == 'MARG') {
		            oper = 'Marg';
		            var $elemQtaMarg = $('#qtaPortafoglioMarg');
		            if(qta > 0){
		            	$elemQtaMarg.removeClass('down').addClass('up');
		      		} else if (qta<0){
		      		    $elemQtaMarg.addClass('down').removeClass('up');
		      		} else {
		      		    $elemQtaMarg.removeClass('down').removeClass('up');
		      		}
		        }
		        
		        pmc = '' + pmc;
		        var indexOfDecimalSeparator = pmc.indexOf('.');
		        if(indexOfDecimalSeparator >= 0){
		        	var decimalPart = pmc.substr(indexOfDecimalSeparator);
		        	if(decimalPart.length > 5 && decimalPart.charAt(decimalPart.length - 1) === '5'){
		        		pmc = pmc.substr(0, indexOfDecimalSeparator) + decimalPart.substr(0, decimalPart.length - 1) + '0';
		        	}
		        }
		        
		        pmc = formatNumber( pmc, '#.##0,####' );
		        
		        $('#qtaPortafoglio' + oper).html(qta);
		        $('#pmcPortafoglio' + oper).html(pmc);
		        $('#plPortafoglio' + oper).html((pl + "").replace(/\./g, ','));
			};
			
			function calcolaPL(datiPush, ultimoPrezzo) {
		        
		        var tempCambio = $('#cambio_ask');
		        var lastPrice = 0;
		        if (ultimoPrezzo){
		        	lastPrice = ultimoPrezzo;
		        } else{
		        	lastPrice = $('#book_ultimo');
					lastPrice = parseFloat(lastPrice.html().replace('.', '').replace(',', '.'));
		        }
		        var pl = 0;
			    var leva = null;
			    if (LS_UTIL.leva && !isNaN(LS_UTIL.leva)){
		            leva = LS_UTIL.leva;
			    }
		        var ctvc = datiPush[7];
		        var cmbc = datiPush[9];
		        var oper = datiPush[16];
		        var qta = datiPush[14];
			    if (cmbc && qta != 0){
		            var divisore = 1;
		            if('O'==LS_UTIL.tipoMercato || 'OB' == LS_UTIL.tipoStrumento || 'TS' == LS_UTIL.tipoStrumento) {
		  		        divisore = 100;
		  	  	    }
		  	  
		            var cambio = 1;
		            var pmc = 1;
		            if (oper == 'LONG') {
		                pmc = datiPush[11];
		            } else {
		                pmc = datiPush[12];
		            }
		        
		            if (tempCambio != null) {
		                cambio = tempCambio.val();
				        if ('LON'==datiPush[3]){
					        cambio =cambio*100;
				        }
		            }

		            if (!leva){
		                pl = (( (lastPrice/cambio) - (pmc/cmbc) ) * qta) / divisore;
			        } else {
			            pl = (((lastPrice - pmc) * qta)*leva) / cambio/ divisore;
			        }
		        }
		        return roundTo(pl, 2);
		    };
			
		    LS_UTIL.setDatiPortafoglio = function(source, tipOpe, values) {
		    	var storedData = storedPortfolioData[tipOpe];
		    	
		    	if(source === 'push'){
					if(storedData[2] == values.getValue('conto') && storedData[3] == values.getValue('borsa') && storedData[4] == values.getValue('mercato') && storedData[5] == values.getValue('idTitolo')) { 
				        for(var i=0; i < 17; i++) {
						    if (i == 2 || i == 3 || i == 4 || i == 5 || i == 16) {  continue; }
						    var value = values.getValue(portfolioSchema[i]);
						    if(value != '') {
						    	storedData[i] = value;
						    }
				        }
				    }
		    	} else {            
		    		storedData[0] = 'ADD';
		    		storedData[1] = '';
		    		storedData[2] = $('#rubrica').val().substr(16);
		    		storedData[3] = values.borsa;
		    		storedData[4] = values.mercato;
		    		storedData[5] = values.stockCode;
		    		storedData[6] = values.simbolo;
		    		storedData[7] = values.controvalore_investito;
		    		storedData[8] = 'EUR'; //divisa
		    		storedData[9] = values.cmbc;
		    		storedData[10] = 1; //'lotto'
		    		storedData[11] = values.prezzo_medio;
		    		storedData[12] = values.prezzo_medio;
		    		storedData[13] = values.quantita;
		    		storedData[14] = values.quantita_p;
		    		storedData[15] = ''; //ticker
		    		storedData[16] = tipOpe;
		    		storedData[17] = values.ultimo_prezzo;
		    		storedData[18] = values.utile_realizzabile;
		    		storedData[19] = values.perc_utile_realizzabile;
		    		storedData[20] = values.var_perc;
		    		storedData[21] = values.controvalore;
		        }
		    };
		    
		    LS_UTIL.resetDatiPortafoglio = function(source, tipOpe, borsa, mercato, stockCode) {
		    	var storedData = storedPortfolioData[tipOpe];
		    	storedData[3] = borsa;
		    	storedData[4] = mercato;
		    	storedData[5] = stockCode;
		    	storedData[2] = $('#rubrica').val().substr(16);
	        };
		    
		</script>
		
		<!-- Fine Push -->
		
		<script type="text/javascript" src="/wscmn/js/RicercaNewBook.js?a=456"></script>	
		<script type="text/javascript" src="/wscmn/js/UtilitiesTradingWT.js?a=456"></script>
		<script type="text/javascript" src="/wscmn/js/RicercaTrading.js?a=456"></script>
		<script src="/wscmn/js/RicercaNewTradingSemplice.js" type="text/javascript"></script>
		<script src="/js/ret/checkOrdine.js?a=456" type="text/javascript"></script>
		<script type="text/javascript">
		
		
			var cgi_script = '/webankpri';
			$(popBookAutosize);
			$(onLoadPageSearchBookData);
			$(onLoadActivatePush);
			
			
		
			function onLoadPageSearchBookData() {
				var jsonBookValue = '{"codEsito":"100","varPerc":"-0.14","ultimo":"15.266","isDelaytime":"false","maxPrice":"15.398","prc_ql2":"   ","prc_ql_cd":"","sospeso":false,"msgEsito":" ","varPercClass":"right nega","prOff":"n.d.","isEsito":"true","minMax":"15.194 - 15.398","prDom":"n.d.","faseMerc":"","ora":"15:15:12","vita_residua":"n.d.","volDom":"n.d.","vetBook":[{"numOff":"n.d.","prDom":"15.26","volDom":"9.135","volOff":"2.565","numDom":"n.d.","prOff":"15.266"},{"numOff":"10","prDom":"15.258","volDom":"4.360","volOff":"11.951","numDom":"6","prOff":"15.268"},{"numOff":"7","prDom":"15.256","volDom":"8.668","volOff":"5.533","numDom":"10","prOff":"15.27"},{"numOff":"6","prDom":"15.254","volDom":"4.918","volOff":"4.287","numDom":"7","prOff":"15.272"},{"numOff":"7","prDom":"15.252","volDom":"4.803","volOff":"6.558","numDom":"6","prOff":"15.274"}],"volume":"4.178.721","esito":"ok","volOff":"n.d.","lotto_minimo":"1","minPrice":"15.194"}';
				var borsa='MI';
				var mercato='EQCON';
				var stock_code='32108';
				var tipo_mercato='B';
				var extcall =null;
				if (tipo_mercato == 'XXX') {
						extcall='extcall';
				}
				fillBookPageFields(jsonBookValue);
				
				//ricercaBookByStockcode();
				//Ho aggiunto un booleano per identificare book
				RicercaTradingSemplice.ricercaSempliceByStockcodeCall(borsa,mercato,tipo_mercato,stock_code,extcall,'true') ;
				setTimeout(function() {setBookStato();}, 900);
					
				$('#ordineForm').attr('target', 'bookFather');		
				RicercaTradingSemplice.updateMercatoSelezionato('select_mercato');
			}
			
			function setSegnoOperazione(s) {
				document.forms.saveForm.segnoOperazione.value=s;
			}
			
			function onLoadActivatePush() {
			
				setTimeout(function() {automaticPush();},  1500);
			}

		</script>
		
		
		
		
		
				
	</head>
	<body class="book" style="">
	
		








	



	<div class="header_popup">
		<img alt="Webank.it" src="/img/ret/str_pp_book_logo.gif" class="header_pop_left">
		<div id="popBookConsole">
			<fieldset>
				<input type="text" name="titolo" id="titolo" value="" onkeyup="eseguiFuncOnEnter(event, searchTitle)" onblur="if (this.value == '') {this.value='Ricerca il titolo...'; this.style.color='#aaa';};" onfocus="if (this.value == 'Ricerca il titolo...') {this.value=''; this.style.color='#515151';};">
			</fieldset>
			<fieldset>
				<select name="select_mercato" size="1" id="select_mercato" onchange="RicercaTradingSemplice.updateMercatoSelezionato('select_mercato');">
					<optgroup label="Azioni"> 
<option value="MI|EQCON|B" selected="selected">MTA</option><option value="MI|EQCON|BI">BIT GEM</option><option value="TLX|ELX|B">EuroTLX</option><option value="MI|HIMTF|B">Hi-MTF</option><option value="FR|EQXET|B">XETRA</option><option value="EUR|EQPA|B">SBF</option><option value="LON|EQLSE|B">FTSE100</option><option value="MA|EQIBE|B">IBEX35</option><option value="EUR|EQAMS|B">AEX25</option><option value="EUR|EQBRU|B">BEL20</option><option value="EUR|EQPSI|B">PSI20</option><option value="NY|EQNY|B">NYSE</option><option value="NQ|EQNQ|B">NASDAQ</option>
					</optgroup>	
					<optgroup label="ETF-ETC">
<option value="MI|EQCON|E">ETFplus</option>
					</optgroup>	
					<optgroup label="CW E CERTIFICATES"> 
<option value="MI|CW|C">SEDEX</option><option value="TLX|ELX|C">EuroTLX</option>
					</optgroup>	
					<optgroup label="DERIVATI">
<option value="MI|DER|D">IDEM</option><option value="FR|EUREX|D">EUREX</option><option value="EUR|LIF|D">EURONEXT - LIFFE</option><option value="CME|CEQFU|D">CME</option><option value="CME|CBOFU|D">eCBOT</option><option value="CME|COMEX|D">COMEX</option><option value="CME|NYMEX|D">NYMEX</option>
					</optgroup>	
					<optgroup label="OBBLIGAZIONI" class="optiongroup">
<option value="MI|MRT|O">MOT - EuroMOT</option><option value="TLX|ELX|O">EuroTLX</option><option value="MI|HIMTF|O">Hi-MTF</option><option value="AK|AKIS|O">Akros IS</option><option class="optionbest" value="OTC|OBOTC|O">Best execution</option>
					</optgroup>														
				</select> 
			</fieldset>
			<a href="javascript:;" class="find" onclick="searchTitle();" title="Cerca">
				<img src="/img/ret/bt_book_details.gif">
			</a>
			<a href="javascript:;" id="bookLinkNewPush" title="Apri un nuovo book" onclick="javascript:RicercaTrading.getBookLink('', 'bookLinkNewPush', 'Webank - Nuovo book', false);">
				<img src="/img/ret/bt_book_opennew.gif">
			</a>
			<a onclick="javascript:updateBookFields();" href="javascript:;" title="Aggiorna book">
				<img src="/img/ret/bt_book_reload.gif">
			</a>
		</div>
	
		<br class="clear">
	</div>
<div id="book_temp1" style="display: none"></div>
<div id="book_temp2" style="display: none"></div>
<div id="book_temp3" style="display: none"></div>
<div id="book_temp4" style="display: none"></div>
		<div id="book_borsa" style="display: none">MI</div>
		<div id="book_mercato" style="display: none">EQCON</div>
		<div id="book_stockcode" style="display: none">32108</div>
		<div id="book_tipo_mercato" style="display: none">B</div>
		<div id="book_simbolo" style="display: none">ENI</div>
		<div id="flagTipoMercatoSelezionato" style="display: none;">B</div>
		<div id="flagMercatoSelezionato" style="display: none;">MTA</div>
		<div id="flagindexricercatitoli" style="display: none;"></div>
		<div id="flagpagericercatitoli" style="display: none;">1</div>
		<div id="flagPrc_ql_cd" style="display: none;"></div>
		<div id="flagPrc_ql2" style="display: none;">   </div>
		<div id="flag_id_divisa" style="display: none;">13</div>
<div id="portfolio_deposito" style="display: none;">0109900000535379</div>
<div id="pushkey_java" style="display: none;"></div>

		<div id="contenuti">
<div id="erroriLuca" style="display:none">
</div>
			

							
		
				
			<div id="intestatari" style="display:none;">$sbIntestatari</div><div id="riepLiquidita" style="display:none;"></div><table class="upperCont" cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
				
					
									
				
					<td class="titlename" rowspan="2">
						<span id="book_desc_titolo">ENI</span>
						<img id="book_desc_img" src="/img/ret/img_or_book_giu.gif">
					</td>
					<td class="minitit" id="lblDeposito">Deposito titoli</td>

					<td class="sceltaR" colspan="2">				
						<div class="selectRapp" id="sceltaRapporto">
							<input id="sceltaRapportoValFP" type="hidden" class="value" name="rapporto" value="xxxaaaaaa">
							<a class="inputOption inputSx" href="javascript:;">
								<span class="inputDx"><span class="input">1099/535379/1</span></span>
							</a>
							<div style="display: none;" class="selectorSpacer"></div>
							<div style="display: none;" class="selector">
																																																																																																																																																																													<a class="selectorOptions first between" href="javascript:;" value="010990000053537900000">
											<strong>1099/535379/0</strong><br>
											<span class="intestatari"> CASTELLINI ATTILIO MARIO MAINARDI MANUELA</span><span id="010990000053537900000" style="display:none;">2</span>
										</a>
																																																																																																																	<a class="selectorOptions  selected" href="javascript:;" value="010990000053537900001">
											<strong>1099/535379/1</strong><br>
											<span class="intestatari"> CASTELLINI ATTILIO MARIO</span><span id="010990000053537900001" style="display:none;">1</span>
										</a>
																																																																																																																	<a class="selectorOptions " href="javascript:;" value="010990000053537900002">
											<strong>1099/535379/2</strong><br>
											<span class="intestatari"> MAINARDI MANUELA</span><span id="010990000053537900002" style="display:none;">1</span>
										</a>
																																																																																																																																																<a class="selectorOptions " href="javascript:;" value="010990000057064100000">
											<strong>1099/570641/0</strong><br>
											<span class="intestatari"> CASTELLINI ATTILIO MARIO MORASSI GIANLUCA</span><span id="010990000057064100000" style="display:none;">2</span>
										</a>
																																																																																																																	<a class="selectorOptions " href="javascript:;" value="010990000057064100001">
											<strong>1099/570641/1</strong><br>
											<span class="intestatari"> CASTELLINI ATTILIO MARIO</span><span id="010990000057064100001" style="display:none;">1</span>
										</a>
																																																																																																																	<a class="selectorOptions " href="javascript:;" value="010990000057064100002">
											<strong>1099/570641/2</strong><br>
											<span class="intestatari"> MORASSI GIANLUCA</span><span id="010990000057064100002" style="display:none;">1</span>
										</a>
																								</div>
							<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this)" onmouseout="removeUniqTooltip(event, this);" class="uniqTooltipIco" id="">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="uniqTooltipInnerHTML"> CASTELLINI ATTILIO MARIO</span>
							</span>
						</div>
						
					</td>
				</tr>
		
									<tr class="under">
						<td class="minitit">Liquidità</td>
						<td colspan="2">
							<div class="importoDeposito" id="importoDeposito">










<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this)" onmouseout="removeUniqTooltip(event, this);" class="uniqTooltipText" id="liquiditaDep"><span class="uniqTooltipPos"><strong><span id="tot_investibile_0">14.137,97</span>&nbsp;€</strong> al 28/02/2019</span><span class="uniqTooltipInnerHTML">25/02/2019: <strong><span id="tot_investibile_1">14.137,97</span>&nbsp;€</strong>
<br>26/02/2019: <strong><span id="tot_investibile_1a">14.137,97</span>&nbsp;€</strong>
<br>27/02/2019: <strong><span id="tot_investibile_2">14.137,97</span>&nbsp;€</strong>
<br>28/02/2019: <strong><span id="tot_investibile_3">14.137,97</span>&nbsp;€</strong>
<br>01/03/2019: <strong><span id="tot_investibile_4">14.137,97</span>&nbsp;€</strong>
<br>
</span></span>


</div>
						</td>
				</tr>
								<tr id="valPortafoglioJson">
		<td align="center" class="lowerCont" colspan="4">
<input id="refreshPosPortafoglioN" type="hidden" class="value" name="refreshPosPortafoglioN" value="1">
			<table cellspacing="0" cellpadding="0" class="subUpperCont" id="valPortafoglio">
				<tbody><tr>
<td class="first" style="display:none;"><span id="ctvcPortafoglio"></span><span id="cmbcPortafoglio"></span></td>
<td class="first">PMC <span id="pmcPortafoglio">0</span></td>
<td class="second">Quantità <span id="qtaPortafoglio">0</span></td>
				<td class="last">Profit &amp; Loss <span id="plPortafoglio">0</span></td>
			</tr></tbody></table>
<table cellspacing="0" cellpadding="0" class="subUpperCont" id="valPortafoglioShort" style="display:none;">
				<tbody><tr>
<td class="first" style="display:none;"><span id="ctvcPortafoglioShort"></span><span id="cmbcPortafoglioShort"></span></td>
<td class="first">PMC <span id="pmcPortafoglioShort">0</span></td>
<td class="second">Quantità <span id="qtaPortafoglioShort">0</span></td>
				<td class="last">Profit &amp; Loss <span id="plPortafoglioShort">0</span></td>
			</tr></tbody></table>
<table cellspacing="0" cellpadding="0" class="subUpperCont" id="valPortafoglioMarg" style="display:none;">
				<tbody><tr>
<td class="first" style="display:none;"><span id="ctvcPortafoglioMarg"></span><span id="cmbcPortafoglioMarg"></span></td>
<td class="first">PMC <span id="pmcPortafoglioMarg">0</span></td>
<td class="second">Quantità <span id="qtaPortafoglioMarg">0</span></td>
				<td class="last">Profit &amp; Loss <span id="plPortafoglioMarg">0</span></td>
			</tr></tbody></table>
		</td>
	</tr>
			</tbody>
		</table>
	
	
<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
$(function() {
  createSelectRapp('sceltaRapporto', 'rubrica', chgSelDeposito);
});
function chgSelDeposito() {
	ricercaPosizioniPortafoglio();
	loadMarginazione(getSelectedOption('#sceltaRapporto'));
}
function updateMarginazione(option) {	
}
function updateMarginazione(transport, id){
	$('#' + id).html(transport);
}
function failedMarginazione(transport, id){
	$('#' + id).html('<span>Errore generico</span>');
}
function loadMarginazione(options) {
	var urlString = cgi_script + "/pktrading/common/totInvestibile.jsp";
	parameters = {rubrica: options.value};	
	jqAJAXCall('post', 'html', urlString, function (e) { updateMarginazione(e, 'importoDeposito' )}, 
			function (e) { failedMarginazione(e, 'importoDeposito')}, parameters);
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>	


			<div id="pushPortafoglio" style="display:none">
Command <span id="command_titolo">&nbsp;</span>
Node <span id="node_titolo">&nbsp;</span>
Conto <span id="conto_titolo">&nbsp;</span>
borsa <span id="borsa_titolo">&nbsp;</span>
mercato <span id="mercato_titolo">&nbsp;</span>
Id <span id="id_titolo">&nbsp;</span>
nome <span id="nome_titolo">&nbsp;</span>
CTV <span id="ctvc_titolo">&nbsp;</span>
divisa <span id="divisa_titolo">&nbsp;</span>
cambioc <span id="cambioc_titolo">&nbsp;</span>
lotto <span id="lotto_sottostante_titolo">&nbsp;</span>
leva<span id="leva_titolo">&nbsp;</span>
tick<span id="tick_titolo">&nbsp;</span>
ticker<span id="ticker_titolo">&nbsp;</span>
pmc <span id="pmc_titolo">&nbsp;</span>
pmc <span id="pmcs_titolo">&nbsp;</span>
QD <span id="qd_titolo">&nbsp;</span>
QP <span id="qp_titolo">&nbsp;</span>
Ticker <span id="ticker_titolo">&nbsp;</span>
Tipo <span id="qp_titolo">&nbsp;</span>
			</div>
			














	


	<div id="book_empty_value" style="display: none">&nbsp;</div>
	<div id="mktpushpopup">
		<div class="spaceleft">
			<table class="datacont" id="bookTableLow">
				<tbody><tr> 
					<td class="heading">N.</td>
					<td class="heading">Vol. Denaro</td>
					<td class="heading">Denaro</td>
					<td class="heading">Lettera</td>
					<td class="heading">Vol. Lettera</td>
					<td class="heading">N.</td>
				</tr>
			
					<tr class="dispari"> 
						<td id="td_numDom_0"><span id="numDom_0" data-field="no_bidmmkr" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">n.d.</span></td>
						<td id="td_volDom_0"><span id="volDom_0" data-field="best_bsiz1" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">9.135</span></td>
						<td id="td_prDom_0"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prDom_0');"><span id="prDom_0" data-field="best_bid1" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,26</span></a></td>
						<td id="td_prOff_0"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prOff_0');"><span id="prOff_0" data-field="best_ask1" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,266</span></a></td>
						<td id="td_volOff_0"><span id="volOff_0" data-field="best_asiz1" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">2.565</span></td>
						<td id="td_numOff_0"><span id="numOff_0" data-field="no_askmmkr" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">n.d.</span></td>
					</tr>
			
					<tr class="pari"> 
						<td id="td_numDom_1"><span id="numDom_1" data-field="no_bidmkr2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">6</span></td>
						<td id="td_volDom_1"><span id="volDom_1" data-field="best_bsiz2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">4.360</span></td>
						<td id="td_prDom_1"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prDom_1');"><span id="prDom_1" data-field="best_bid2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,258</span></a></td>
						<td id="td_prOff_1"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prOff_1');"><span id="prOff_1" data-field="best_ask2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,268</span></a></td>
						<td id="td_volOff_1"><span id="volOff_1" data-field="best_asiz2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">11.951</span></td>
						<td id="td_numOff_1"><span id="numOff_1" data-field="no_askmkr2" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">10</span></td>
					</tr>
			
					<tr class="dispari"> 
						<td id="td_numDom_2"><span id="numDom_2" data-field="no_bidmkr3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">10</span></td>
						<td id="td_volDom_2"><span id="volDom_2" data-field="best_bsiz3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">8.668</span></td>
						<td id="td_prDom_2"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prDom_2');"><span id="prDom_2" data-field="best_bid3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,256</span></a></td>
						<td id="td_prOff_2"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prOff_2');"><span id="prOff_2" data-field="best_ask3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,27</span></a></td>
						<td id="td_volOff_2"><span id="volOff_2" data-field="best_asiz3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">5.533</span></td>
						<td id="td_numOff_2"><span id="numOff_2" data-field="no_askmkr3" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">7</span></td>
					</tr>
			
					<tr class="pari"> 
						<td id="td_numDom_3"><span id="numDom_3" data-field="no_bidmkr4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">7</span></td>
						<td id="td_volDom_3"><span id="volDom_3" data-field="best_bsiz4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">4.918</span></td>
						<td id="td_prDom_3"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prDom_3');"><span id="prDom_3" data-field="best_bid4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,254</span></a></td>
						<td id="td_prOff_3"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prOff_3');"><span id="prOff_3" data-field="best_ask4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,272</span></a></td>
						<td id="td_volOff_3"><span id="volOff_3" data-field="best_asiz4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">4.287</span></td>
						<td id="td_numOff_3"><span id="numOff_3" data-field="no_askmkr4" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">6</span></td>
					</tr>
			
					<tr class="dispari"> 
						<td id="td_numDom_4"><span id="numDom_4" data-field="no_bidmkr5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">6</span></td>
						<td id="td_volDom_4"><span id="volDom_4" data-field="best_bsiz5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">4.803</span></td>
						<td id="td_prDom_4"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prDom_4');"><span id="prDom_4" data-field="best_bid5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,252</span></a></td>
						<td id="td_prOff_4"><a href="javascript:;" onclick="javascript:updatePrezzoField('#prOff_4');"><span id="prOff_4" data-field="best_ask5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,274</span></a></td>
						<td id="td_volOff_4"><span id="volOff_4" data-field="best_asiz5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">6.558</span></td>
						<td id="td_numOff_4"><span id="numOff_4" data-field="no_askmkr5" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">7</span></td>
					</tr>

			</tbody></table>
		</div>
		
		<div class="spaceright">
			<table class="datacont" id="bookTableHigh">
				<tbody><tr> 
					<td class="heading">Ult. prz.</td>
					<td id="td_book_ultimo">
						<strong>
							<span id="book_ultimo" data-field="last_price" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,266</span>
						</strong>
					</td>
				</tr>
				<tr>
					<td class="heading">Ora</td>
					<td id="td_book_date">
						<span id="book_date" data-field="trade_time" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15:15:12</span>
					</td>
				</tr>
				<tr>
					<td class="heading">Var.</td>
					<td id="td_book_var_perc">
						<span id="book_var_perc" class="right nega" data-field="percentage_change" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">-0,14%</span>
					</td>
				</tr>	
				<tr>
					<td class="heading">Min</td>
					<td id="td_book_min">
						<span id="book_min" data-field="day_low" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,194</span>
					</td>
				</tr>
				<tr>
					<td class="heading">Max</td>
					<td id="td_book_max">
						<span id="book_max" data-field="day_high" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">15,398</span>
					</td>
				</tr>
				<tr>
					<td class="heading">V. tot</td>
					<td id="td_book_volume">
						<span id="book_volume" data-field="trade_volume_bi" data-item="RTS.REALTIME.MI.EQCOT.QUOTE,32108" data-source="lightstreamer" data-grid="book_32108">4.178.721</span>
					</td>
				</tr>				
			</tbody></table>		
		</div>
	</div>
	
	<br class="clear">
	
	<!-- utilizzare classe " unactive" su accordiontitle per disabilitarlo -->
	<a id="accordionOpener" href="javascript:;" class="accordiontitle opened" onclick="popBookSwitch(this,'accordionSample')" title="Chiudi la sezione Ordini">
		<span>Ordine</span>
	</a>
	<br class="clear">
	
			











	<!-- INIZIO OVERLAYER NESSUN TITOLO TROVATO-->
	<div class="layeralert" id="layerAlert1" style="display: none; margin-left: 454px; margin-top: 193px; z-index: 6;">
		<div class="head">
			<img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layerAlert1')" title="Chiudi">
		</div>
		<div class="body"> 
			<p class="simpleMessage">Nessun risultato trovato</p>
		</div> 
		<div class="foot"></div>

	</div>	
	<!-- FINE OVERLAYER NESSUN TITOLO TROVATO-->

	<!-- INIZIO OVERLAYER PIU' RISULTATI -->
	<div class="layeralert" id="layerAlert" style="display: none;">
		<div class="head">
			<img src="/img/ret/layeralert_x.gif" alt="chiudi" title="Chiudi" onclick="closePopOverLayer('layerAlert');resetPageTitle();cleanBookTitle();">
		</div>
		<div class="body">
			<p id="fieldricercatitolirisultati">
				Trovati <strong>00</strong> su <strong>00000</strong> risultati
			</p>
			<br class="clear">
			<table cellpadding="0" cellspacing="0" class="condiz2" id="tableRicercaTitoli">
				<tbody><tr class="color" id="rowHeader"> 
				  <td>Descrizione</td>
				  <td>Codice Isin</td>
				  <td style="display:none;">Borsa</td>
				  <td style="display:none;">Stockcode</td>
				  <td style="display:none;">Mercato</td>
				</tr>					  
			</tbody></table>
			<!-- FINE TABELLA -->
		
			<!-- PAGINAZIONE -->
			<div id="paginazione2">
				<ul class="menu_o" id="menupagericercatitoli">
					<li><a class="nosel" href="#1">&lt;&lt;</a></li>
					<li><a class="nosel" href="#1">&lt;</a></li>
					<li><a href="#1">1</a></li>
					<li><a href="#1">2</a></li>
					<li><a href="#1">3</a></li>
					<li class="on"><a href="#1">4</a></li>
					<li><a href="#1">5</a></li>
					<li><a href="#1">6</a></li>
					<li><a class="nosel" href="#1">&gt;</a></li>
					<li><a class="nosel" href="#1">&gt;&gt;</a></li>							
			   </ul>
			</div>
			<!-- FINE PAGINAZIONE -->
		
		</div>
		<div class="foot"></div>

	</div>
	<!-- FINE OVERLAYER PIU' RISULTATI -->
	
			
























<script type="text/javascript">
	var useNewTickManager = true;
	var matriceTickJson = new Array();
	function setSegnoOperazione(s) {
		$('#segnoOperazione').val(s);
	}
	
	function setMarginato(s) {
		$('#marginato').val(s);
	}
	
	
 	function pressBuySell(segno) {
 		setMarginato('');
 		if ($('#tipoShort') && $('tipoShort').checked){
 			if ('C'==segno){
				setSegnoOperazione('C');
				setMarginato('BTC');				
	 	 	}else{
 	 	 		setSegnoOperazione('S');			
	 	 	}
 		}else {
 			setSegnoOperazione(segno);
			if ($('#tipoMarginato') && $('tipoMarginato').checked) {
				setMarginato('Y');
			}			
 		}
		if ( doValidations(rx_validate, document.saveForm ) ) { 		
			document.saveForm.submit();
		}
		if (popBookAutosize){
		popBookAutosize();
		}
	}
	
	function ifValiditaChange() {
		var newTempovalIndex = ('' + $('#selectTempoval').prop('selectedIndex'));
		$('#tempovalIndex').val(newTempovalIndex)
		if (gs_saveForm_tempoval()=='VSC') {
			sh_saveForm_ModalitaTempo('VSC');
		} 
		else {
			sh_saveForm_ModalitaTempo('VSD');
		}
	}
	
	function ifValiditaChangeHiMTF() {
		var newTempovalIndex = ('' + $('#selectTempoval').prop('selectedIndex'));
		$('#tempovalIndex').val(newTempovalIndex)
		if (gs_saveForm_tempovalHiMTF()=='VSC') {
			sh_saveForm_ModalitaTempo('VSC');
		} 
		else {
			sh_saveForm_ModalitaTempo('VSD');
		}
	}

	function ifTipoPrezzoChange() {
		var newTipoPrezzoIndex = ('' + $('#prezzo2').prop('selectedIndex'));
		var lblprezzo = $('#lblPrezzo');
		$('#tipoPrezzoIndex').val(newTipoPrezzoIndex)
		if (gs_saveForm_TipoPrezzo()!='L') {
			st_saveForm_PrezzoLimite('');
			lblprezzo.innerHTML = 'Prezzo';
		} 
		else {
			ft_saveForm_PrezzoLimite();
			lblprezzo.innerHTML = 'Prezzo*';
		};
		switchQuantita();
		ifParQtaChange();
	}

	function OnPrezzoFocus(){
		var lblprezzo = $('#lblPrezzo');
		lblprezzo.innerHTML = 'Prezzo*';
		ss_saveForm_TipoPrezzo('L');
		switchQuantita();
	}

	function ifParQtaChange() {
		var newParQtaIndex = ('' + $('#quantita2').prop('selectedIndex'));
		$('#parQtaIndex').val(newParQtaIndex)
		rule_EocTon();
	}	

	function ifRadioChange() {
		changeTipoOperazione($('#saveForm'));
		var newOperativita = 'O';
		if ( $('tipoMarginato').checked ) {
			newOperativita = 'M';
		}
		else if ( $('tipoShort').checked ) {
			newOperativita = 'S';
		}
		$('#operativitaValue').val(newOperativita)
		var field = $('#notifyOrd')
		field.hide();
		if ((newOperativita=='O' || newOperativita=='S' ) && "S" == $('#tipoQuotazione').val() ){
			field.show();
		}
		ifValiditaChange();
	}

	function ifScadCondChange() {
		var newScadCondIndex = ('' + $('#ScadenzaCondizione').prop('selectedIndex'));
		$('#scadCondIndex').val(newScadCondIndex);
	}	
	
	
</script>
<form name="saveForm" id="ordineForm" method="POST" action="/webankpri/wbOnetoone/2l/jsp/pktrading/resp/compravendita/confermaOrdineDer.action" target="bookFather">
	<input type="hidden" name="errDeposito" id="errDeposito" value="">
	<input type="hidden" name="refreshPosPortafoglio" id="refreshPosPortafoglio" value="">
	<!-- 1 per ordine manuale -->
	<input type="hidden" name="tabId" value="nav_priv_wbx_trading_wt">
	<input type="hidden" name="OBSKEY" value="nav_priv_wbx_inseri_ordini_wt">
	<input type="hidden" name="OBSCNT" value="FNZ_NAV">
	<input type="hidden" name="sottodepositi" id="rubrica" value="010990000053537900001">
	<input type="hidden" name="fromPtf" id="fromPtf" value="null">
	<input type="hidden" name="OrdineManuale" value="1">    
	<input type="hidden" name="Condizione" id="condizione" value="NONE">
	<input type="hidden" name="segnoOperazione" id="segnoOperazione"> 
	<input type="hidden" name="marginato" id="marginato" value="">
	<input type="hidden" name="ModalitaTempo" id="validita" value="VSC">
	<input type="hidden" value="AC" name="ModalitaEsecuzione" id="fasemercato">
	<input type="hidden" name="cambio_bid" id="cambio_bid" value="1">
	<input type="hidden" name="cambio_ask" id="cambio_ask" value="1">
	<input type="hidden" name="schedaTitoloAction" id="schedaTitoloAction" value="/webankpri/wbOnetoone/2l/do/FMP/loadNewSchedaTitoloWT.do?">
	<input type="hidden" name="tipoQuotazione" id="tipoQuotazione" value="null">
	<input type="hidden" name="piazza" id="piazza" value="">
	<!-- da ajax -->
	<input type="hidden" name="nominativo" id="nominativo" value="Y">
	<input type="hidden" name="tipoMercato" id="tipoMercato" value="B">
	<input type="hidden" name="tipoStrumento" id="tipoStrumento" value="AZ">
	<input type="hidden" name="sottoTipoStrumento" id="sottoTipoStrumento" value="ORD">
    <input type="hidden" name="borsa" id="borsa" value="MI">
    <input type="hidden" name="codice_bo_strumento" id="codice_bo_strumento" value="00003132471">
	<input type="hidden" name="drg_mercato" id="drg_mercato" value="">

    <input type="hidden" name="mercato" id="mercato" value="EQCON"> 
    <input type="hidden" name="descMercato" id="descMercato" value="">
    <input type="hidden" name="descEstesaMercato" id="descEstesaMercato" value="MTA">
    <input type="hidden" name="stock_code" id="stock_code" value="32108">     
    <input type="hidden" name="UltimaQuotazione" id="UltimaQuotazione" value="15.266">
    <input type="hidden" name="lottoMinimo" id="lottoMinimo" value="1.0">
    <input type="hidden" name="CodiceBOMercato" id="CodiceBOMercato" value="011">

	<input type="hidden" name="maxQta" id="maxQta" value="0.0">
    <input type="hidden" name="minimoOv" id="minimoOv" value="">
	<input type="hidden" name="prezzoMinimo" id="prezzoMinimo" value="15.194">
	<input type="hidden" name="prezzoMassimo" id="prezzoMassimo" value="15.398">
	<input type="hidden" name="prezzoLimite" id="prezzoLimite" value="">
	<input type="hidden" name="so_price" id="so_price" value="">
	<input type="hidden" name="percScostamento" id="percScostamento" value="-0.14">
	<input type="hidden" name="divisa" id="divisa" value="EUR">
	<input type="hidden" name="form_tick" id="form_tick" value="">	
	<input type="hidden" name="tempovalIndex" id="tempovalIndex" value="0">
	<input type="hidden" name="parQtaIndex" id="parQtaIndex" value="1">
	<input type="hidden" name="tipoPrezzoIndex" id="tipoPrezzoIndex" value="L">
	<input type="hidden" name="operativitaValue" id="operativitaValue" value="O">
	<input type="hidden" name="scadCondIndex" id="scadCondIndex" value="0">
	<input type="hidden" name="backFlag" id="backFlag" value="false">
	<input type="hidden" name="IBM" id="IBM" value="N">
	<input type="hidden" name="vitaResidua" id="vitaResidua" value="N">
	
		
	<!-- fine da ajax -->
	
	<div id="accordionSample" style="display: block;">

	
	
			






	<div id="errorsSection" class="ErroriValidazione" style="display: none;">
		<div class="boxtop">
			<img src="/img/ret/box_msgtop_book.gif" border="0" alt="">
		</div>
		<br class="clear">
		<div class="boxtxt">
			<p class="box_mess">
				<img border="0" alt="" src="/img/ret/box_attenzione.jpg">

	
	
	
				<strong id="error_box"><font color="white"> </font></strong>				
	
				<br>

				
				<br>
				Si sono verificati i seguenti errori:
			</p> 
			<ul id="errorMessages" class="alert">
			</ul>
	
		</div>
		<br class="clear">
		<div class="boxbottom"><img src="/img/ret/box_msgbottom_book.gif" border="0" alt=""></div>
	</div>
	<script type="text/javascript">
		var subtitle = 'Errata compilazione form';
	</script>
<!-- } === org.apache.jsp.FMP.tradingWT.jsp.book.bookErrors_jsp === -->
	
		<div class="inputFormCont" id="tabordini2">
		
			<table class="form01" cellpadding="0" cellspacing="0">
				<tbody><tr> 
					<td class="uno label" id="lblQuantita">Quantità*</td>
					<td class="quant">
						<input type="text" name="Quantita" id="quantita1" value="">
						
						<img src="/img/ret/frecce.gif" usemap="#map5" class="frecce">
						<map id="map5" name="map5">
							<area shape="rect" coords="0,0,9,5" href="javascript:upQta($('#quantita1'), 9999999 ,$('#lottoMinimo').val());" alt="Aumenta di..." title="Aumenta di...">
							<area shape="rect" coords="0,9,9,14" href="javascript:downQta($('#quantita1'), 1,$('#lottoMinimo').val());" alt="Diminuisci di..." title="Diminuisci di...">
						</map>
					</td>
					<td class="quantfield">
						<select name="Parametro_Quantita" id="quantita2" onchange="ifParQtaChange();" style="display: inline;">
							
			       			
			      			
						<option value="EOC">Esegui e cancella</option><option value="" selected="selected">Senza condizione</option><option value="TON">Tutto o niente</option></select>
						<span id="outputParQuantita" style="display: none;"></span>
					</td>
					<td class="label">Fase</td>
					<td><select style="width:89px;" id="desFaseMercato" name="desFaseMercato"><option value="ape/cont/chiu" selected="selected">ape/cont/chiu</option></select></td>
				</tr>
				<tr> 
					<td class="label" id="lblPrezzo">Prezzo*</td>
					<td>
						<input type="text" name="PrezzoLimite" id="prezzo" maxlength="11" onfocus=" OnPrezzoFocus();" value="">  
						<img src="/img/ret/frecce.gif" usemap="#map1" class="frecce">
						<map id="map1" name="map1">
							<area shape="rect" coords="0,0,9,5" href="javascript:up($('#prezzo'), 9999999.0, 4);OnPrezzoFocus();" alt="Aumenta di..." title="Aumenta di...">
							<area shape="rect" coords="0,9,9,14" href="javascript:down($('#prezzo'), 0, 4);OnPrezzoFocus();" alt="Diminuisci di..." title="Diminuisci di...">
						</map>
					</td>
					<td>
						<select name="TipoPrezzo" id="prezzo2" onchange="ifTipoPrezzoChange();">
											 	  
							
	      					
						<option value="L" selected="selected">Al limite</option><option value="E">Eco</option><option value="MTL">Al meglio/asta</option></select> 
						<span id="outputParTipoPrezzo" style="display: none;"></span>
					</td>
					<td class="label slvalid" width="51" id="lblValidita">Validità</td>
					<td>
						<div id="selectModalita" style="display:block;">
							<select name="tempoval" id="selectTempoval" style="width:89px;" onchange="ifValiditaChange();">
								<option value="VSC">a chiusura</option>

					<option value="26/02/2019"> 26/02/2019 </option>

					<option value="27/02/2019"> 27/02/2019 </option>

					<option value="28/02/2019"> 28/02/2019 </option>

					<option value="01/03/2019"> 01/03/2019 </option>

					<option value="04/03/2019"> 04/03/2019 </option>

					<option value="05/03/2019"> 05/03/2019 </option>

					<option value="06/03/2019"> 06/03/2019 </option>

					<option value="07/03/2019"> 07/03/2019 </option>

					<option value="08/03/2019"> 08/03/2019 </option>

					<option value="11/03/2019"> 11/03/2019 </option>

					<option value="12/03/2019"> 12/03/2019 </option>

					<option value="13/03/2019"> 13/03/2019 </option>

					<option value="14/03/2019"> 14/03/2019 </option>

					<option value="15/03/2019"> 15/03/2019 </option>

					<option value="18/03/2019"> 18/03/2019 </option>

					<option value="19/03/2019"> 19/03/2019 </option>

					<option value="20/03/2019"> 20/03/2019 </option>

					<option value="21/03/2019"> 21/03/2019 </option>

					<option value="22/03/2019"> 22/03/2019 </option>

					<option value="25/03/2019"> 25/03/2019 </option>

					<option value="26/03/2019"> 26/03/2019 </option>

							</select>
						</div>
						<div id="selectModalitaHIMTF" style="display: none">
							<select name="tempovalHiMTF" id="selectTempovalHiMTF" style="width:89px;" onchange="ifValiditaChangeHiMTF();">

					<option value="01/03/2019"> 01/03/2019 </option>

					<option value="08/03/2019"> 08/03/2019 </option>

					<option value="15/03/2019"> 15/03/2019 </option>

					<option value="22/03/2019"> 22/03/2019 </option>

							</select>
						</div>
						<select id="soloChiusura" style="width:89px;display:none;">
						 <option value="a chiusura">a chiusura</option></select>
					</td>
				</tr>


					</tbody></table>
				</div>
				
				<br class="clear">
				<!-- FINE DATI -->

				<a id="linkStopOrder" title="Chiudi la sezione Ordini" onclick="popBookSwitch(this,'stopOrder')" class="accordiontitle opened" href="javascript:;"><span>Stop order</span></a>
					<div style="display: block;" id="stopOrder">
					  <div class="inputFormCont">
						  <table cellspacing="0" cellpadding="0" class="form01">
						  <tbody><tr>
							  <td style="padding-right: 1px" class="uno label" id="lblSoCond">Condizione</td>
							  <td>
								  <select name="so_cond" id="so_cond">
									  <option value="" selected=""></option>
									  <option value="L+">Ultimo prezzo &gt;=</option>
									  <option value="L-">Ultimo prezzo &lt;=</option>
								  </select>
							  </td>
							  <td class="label" id="lblSoPrice">Prezzo soglia</td>
							  <td>	
								  <input type="text" style="width: 55px" value="" name="stoporder_price" id="stoporder_price">
								  <img class="frecce" src="/img/ret/frecce.gif" usemap="#mapso">
								  <map id="mapso" name="mapso">
									  <area shape="rect" coords="0,0,9,5" href="javascript:up($('#stoporder_price'), '9999999.0', 4);" alt="Aumenta di..." title="Aumenta di...">
									  <area shape="rect" coords="0,9,9,14" href="javascript:down($('#stoporder_price'), '0', 4);" alt="Diminuisci di..." title="Diminuisci di...">
								  </map>
							  </td>
						  </tr>
						  </tbody>
						  </table>
					</div>
					</div>
				<br class="clear">
				
				<a href="javascript:;" class="accordiontitle opened" onclick="popBookSwitch(this,'stopLoss')" id="accordionOpener2" title="Chiudi la sezione Ordini">
					<span>Stop loss / take profit</span>
				</a>
				<br class="clear">
          
				<!-- STOP LOSS -->
				<div id="stopLoss" style="display: block;">
					<div class="inputFormCont">
						<table class="form01" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td class="uno label" id="lblstop_loss">Stop loss</td>
								<td class="slArrowBlock">
									<input type="text" value="" style="width: 48px;" id="stop_loss" name="stop_loss">
									<img usemap="#map2" src="/img/ret/frecce.gif" class="frecce">
									<map name="map2" id="map2">
										<area title="Aumenta di..." alt="Aumenta di..." href="javascript:up($('#stop_loss'), '9999999.0', 4);" coords="0,0,9,5" shape="rect">
										<area title="Diminuisci di..." alt="Diminuisci di..." href="javascript:down($('#stop_loss'), '0', 4);" coords="0,9,9,14" shape="rect">
									</map>
								</td>
								<td class="label slvalid">Scadenza</td>
								<td class="slvalidfield">	
									<select name="ScadenzaSLTP" id="ScadenzaSLTP" style="width:89px;">

									<option value="25/02/2019" selected="selected"> 25/02/2019 </option>

									<option value="26/02/2019"> 26/02/2019 </option>

									<option value="27/02/2019"> 27/02/2019 </option>

									<option value="28/02/2019"> 28/02/2019 </option>

									<option value="01/03/2019"> 01/03/2019 </option>

									<option value="02/03/2019"> 02/03/2019 </option>

									<option value="03/03/2019"> 03/03/2019 </option>

									<option value="04/03/2019"> 04/03/2019 </option>

									<option value="05/03/2019"> 05/03/2019 </option>

									<option value="06/03/2019"> 06/03/2019 </option>

									<option value="07/03/2019"> 07/03/2019 </option>

									<option value="08/03/2019"> 08/03/2019 </option>

									<option value="09/03/2019"> 09/03/2019 </option>

									<option value="10/03/2019"> 10/03/2019 </option>

									<option value="11/03/2019"> 11/03/2019 </option>

									<option value="12/03/2019"> 12/03/2019 </option>

									<option value="13/03/2019"> 13/03/2019 </option>

									<option value="14/03/2019"> 14/03/2019 </option>

									<option value="15/03/2019"> 15/03/2019 </option>

									<option value="16/03/2019"> 16/03/2019 </option>

									<option value="17/03/2019"> 17/03/2019 </option>

									<option value="18/03/2019"> 18/03/2019 </option>

									<option value="19/03/2019"> 19/03/2019 </option>

									<option value="20/03/2019"> 20/03/2019 </option>

									<option value="21/03/2019"> 21/03/2019 </option>

									<option value="22/03/2019"> 22/03/2019 </option>

									<option value="23/03/2019"> 23/03/2019 </option>

									<option value="24/03/2019"> 24/03/2019 </option>

									<option value="25/03/2019"> 25/03/2019 </option>

									<option value="26/03/2019"> 26/03/2019 </option>

									<option value="27/03/2019"> 27/03/2019 </option>
									
									</select>
			
								</td>
							</tr>
							<tr>
								<td class="label" id="lbltake_profit">Take profit</td>
								<td>
									<input type="text" value="" style="width: 48px;" id="take_profit" name="take_profit">
									<img usemap="#map3" src="/img/ret/frecce.gif" class="frecce">
									<map name="map3" id="map3">
										<area title="Aumenta di..." alt="Aumenta di..." href="javascript:up($('#take_profit'), '9999999.0', 4);" coords="0,0,9,5" shape="rect">
										<area title="Diminuisci di..." alt="Diminuisci di..." href="javascript:down($('#take_profit'), '0', 4);" coords="0,9,9,14" shape="rect">
									</map>
								</td>
								<td class="label">Fase</td>
								<td>	
									<select style="width:89px;" id="faseSLTP" name="faseSLTP">
										
										
									<option value="N" selected="selected">Solo continua</option><option value="Y">Continua/tah</option></select>
								</td>
							</tr>
							</tbody></table>
						</div>
					</div>
					<!-- FINE STOP LOSS -->

					<div class="inputFormCont topped" id="rowTipoOrdine">
						
						
						<table class="form01" cellpadding="0" cellspacing="0">						
							<tbody><tr> 
								<td class="uno label" id="lblOperativita">Operatività</td>
								<td class="radio" id="idDivOpOrd">
									<label>
										<input type="radio" value="o" name="tipoOrdine" id="tipoOrdinaria" checked="checked" onclick="ifRadioChange();">
										<span>Ordinaria</span>
										<span id="outputOperazione" style="display: none;">Ordinaria</span>
									</label>
								</td>
								
								<td class="radio" id="idDivOpMarg">
									<label>
										<input type="radio" value="m" name="tipoOrdine" id="tipoMarginato" onclick="ifRadioChange();">
										<span>Marginata intraday</span>
									</label>
								</td>
								
								<td class="radio" id="idDivOpShort">
									<label>
										<input type="radio" value="s" name="tipoOrdine" id="tipoShort" onclick="ifRadioChange();">
										<span>Marginata overnight</span>
									</label>
								</td>
							</tr>
						</tbody></table>
					</div>
					<div id="notifyOrd" style="display:none;"><p>Per questa operazione sarà prenotata in aggiunta al controvalore dell'operazione anche la componente stimata cedolare</p></div>
					<!-- FINE STOP LOSS -->

		<div class="bottomConsole">
			<div class="btnConsole">

				<div id="buttonCompra">
					<a href="javascript:pressBuySell('C');" class="btnformright" title="compra">
						<img src="/img/ret/btn_left_ar.gif" alt="">
						<span>compra</span>
						<img src="/img/ret/btn_right_ar.gif" alt="">
					</a>
				</div>


<!-- Conflitto di interesse -->

	
	<div class="tolltipclick conflint" id="causali_conflitto" style="">
		<span class="closed">
				<span id="documenti3" class="uniqTooltipText over fixed nodotted" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
			<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/img_or_alertfp.gif"></a></span>
				<span class="uniqTooltipInnerHTML">
						<span id="idMessageConflitto"><p>Il Gruppo Banco Bpm, pur in presenza di presidi organizzativi e amministrativi adottati per prevenire o gestire i conflitti di interesse, ritiene di esplicitare a maggior tutela del cliente che in relazione alla presente operazione: </p><br><ul class="lista"><li>La Banca o un altro intermediario del Gruppo Banco BPM finanzia in misura rilevante \n l'Emittente o il suo Gruppo e pertanto la Banca potrebbe avere un interesse nell'esecuzione di tale operazione. \n Si evidenzia che la Banca ha comunque adottato specifici processi e procedure \n di prevenzione o gestione dei conflitti di interessi a tutela dei propri clienti. (199)</li></ul></span><br>
						<a class="sottolineato" href="/webankpri/wbOnetoone/2l/do/pktrading/searchConflitto.do?&amp;tabId=nav_priv_wbx_trading_wt&amp;OBSKEY=nav_priv_wbx_conflitto_interessi_wt">Vedi i titoli in conflitto di interesse</a><br>
						<a class="sottolineato" href="/webankpri/wbOnetoone/2l/action/pktrading/searchBailin.action?&amp;tabId=nav_priv_wbx_trading_wt&amp;OBSKEY=nav_priv_wbx_bail_in">Vedi i titoli oggetto di Bail-In</a>
				</span>
			</span>
			<span>Avvertenze sull'operazione</span>
		</span>
	</div>



<!-- Fine icona Conflitto di interesse -->




				<div class="onRight" id="buttonVendi">
					<a href="javascript:pressBuySell('V');" class="btnformright" title="vendi">
						<img src="/img/ret/btn_left_ar.gif" alt="">
						<span>vendi</span>
						<img src="/img/ret/btn_right_ar.gif" alt="">
					</a>
				</div>

			</div>
			<a href="javascript:;" class="lampadina" onclick="openPopGuida('/webankpri/FMP/tradingWT/jsp/book/bookGuida.jsp');" title="Guida alla compilazione" style="display:block;">
				<strong>Guida</strong>
			</a>
		</div>
	</div>
</form>
			
		</div>
		



<script>
/*
 * LIGHTSTREAMER - www.lightstreamer.com
 * Web Client - lsccb.js template - Version 3 $Revision: 48 $
 * Copyright (c) 2010 Weswit Srl. All Rights Reserved.
 */

/**
 * Return: the value to be set for the property document.domain of the web site.
 * If the library pages come from Lightstreamer Server internal Web Server,
 * the function can return null.
 * The implementation of this callback is REQUIRED.
 */
function LS_getDomain() {
		
		return 'webank.local';
	
}

/**
 * Return: the address of Lightstreamer Server.
 * If the library pages come from Lightstreamer Server internal Web Server,
 * the function can return null.
 * The implementation of this callback is REQUIRED.
 */
function LS_getLSHost() {
		
   		return "pushw3.webank.local";
   		
}

/**
 * Return: the name of the Lightstreamer Adapters that should be used for this application.
 * If this callback implementation is missing, the default Adapters are used.
 */
function LS_getAdapterName() {
    return "DEFAULT";
}

/**
 * Return: the protocol to be used for the stream connection.
 * Possible values: "HTTP", "HTTPS"
 * If this callback implementation is missing, the protocol
 * used for page library loading is used.
 */
function LS_getStreamProtocol() {
	 return "HTTP";
}

/**
 * Return: the TCP port to be used for the stream connection.
 * If this callback implementation is missing, the port
 * used for page library loading is used.
 */
function LS_getStreamPort() {
    return "443";
 }
 
 /**
 * Return: the TCP port to be used for the stream connection.
 * If this callback implementation is missing, the port
 * used for page library loading is used.
 */
function LS_getEngineUrl() {
	
   		return "https://webanksvi8tweb.webank.local/wscmn/js/privata/ls44/";

}

/**
 * Return: the protocol to be used for the control connections.
 * Possible values: "HTTP", "HTTPS"
 * If this callback implementation is missing, the protocol
 * used for page library loading is used.
 */
function LS_getControlProtocol() {
	 return "HTTPS";
}

/**
 * Return: the TCP port to be used for the control connections.
 * If this callback implementation is missing, the port
 * used for page library loading is used.
 */
function LS_getControlPort() {
	 return 80;
}

/**
 * Return: the username to be used for the authentication on Lightstreamer Server.
 * If this callback implementation is missing, no username will be sent to the Server.
 */
 function LS_getUsername() {
	return "yiCIF03368WaEWuYmI6qX3pG.937458905"; 
 }

/**
 * This function is called when the Server notifies an error on the Client attempt to
 * open the stream connection.
 * - flag==8: maximum number of concurrent connections reached
 * - flag==9: maximum server load reached
 * - flag==12: connection slowing is not available for the current Server edition
 * - flag==13: top frequency control is not available for the current Server edition
 * - flag<=0: the Metadata Adapter has refused the user connection; the flag value is
 *          dependent on the Metadata Adapter
 * - message: the error message sent by the Server.
 * If this callback implementation is missing, no error notification is performed.
 */
 function LS_onServerError(flag, message) {
    alert("The stream channel is unavailable. " + message + " (code " + flag + ").");
 }
</script>		
		<script type="text/javascript">
		var domain = LS_getDomain();
		document.domain = domain;
		
		//OLD var lsPage = new PushPage();
		function wbInitPush() {}
		
		function pushPortfolio() {}
			
		//OLD var lsDomain = LS_getDomain();//'webank.local';
		var lsHost = LS_getLSHost();//'pushw3.webank.local';
		//var lsControlPort = 443;
		var lsStreamPort = LS_getStreamPort();//443;
		var lsAdapterName = LS_getAdapterName();//'DEFAULT';
		var lsUserName = LS_getUsername();//'yiCIF03368WaEWuYmI6qX3pG.937458905';
		//OLD var lsengineURL = LS_getEngineUrl();//'https://webanksvi7bweb.webank.local/wscmn/js/privata/ls44/';
		var lse;
		
		var lsClient = new LightstreamerClient();
		
		var lsConnectionDetails = lsClient.connectionDetails;
		lsConnectionDetails.setAdapterSet(lsAdapterName);
		lsConnectionDetails.setServerAddress('https://' + lsHost + ':' + lsStreamPort);
		lsConnectionDetails.setUser(lsUserName);
		
		var lsConnectionSharing = lsClient.connectionSharing;
		lsConnectionSharing.enableSharing('LSEngine', 'ATTACH', 'CREATE');
		
		lsClient.connectionOptions.setForcedTransport('HTTP');
		
		lsClient.connect();
		
		lse = lsClient;
		
		
		//OLD lsPage.context.setDebugAlertsOnClientError(false);
		//OLD lsPage.context.setRemoteAlertsOnClientError(false, 10,10);
		//OLD lsPage.context.setDomain(lsDomain);
		
		//OLD lsPage.onEngineCreation = function(createdEngine) {
		//OLD     createdEngine.connection.setLSHost(lsHost);
		//OLD     createdEngine.connection.setAdapterName(lsAdapterName);
		//OLD     createdEngine.connection.setUserName(lsUserName);
		//OLD     createdEngine.connection.setLSPort(lsStreamPort);
		   
		//OLD     lse = createdEngine;
		//OLD }
		
		//OLD lsPage.onEngineReady = function(createdEngine) {
		//OLD     lse = createdEngine;
		//OLD   pushPortfolio();
			// per andare in streaming:
			// lse.changeStatus("STREAMING");
		
		  //OLD }
		
		//OLD lsPage.onEngineLost = function(){
		//OLD     lse = null;
		//OLD }
		
		//OLD try{
		//OLD   lsPage.bind();
		//OLD }catch(e){
		//OLD   alert(e);
		//OLD }
		//OLD lsPage.createEngine('LSEngine', lsengineURL, 'SHARE_SESSION');
			
			 
		
		//elenco degli strumenti:

		/**
		*	metodo di utilita' per rimuovere una sottostrizione da Lightstreamer
		*	@param ls 
		*       istanza di LightstreamerClient
		*   @param subscription
		*       istanza di Subscription da rimuovere
		*/
		function nlsUnsubscribe(ls, subscription){
			if(!ls || !ls.unsubscribe || !subscription || !subscription.isActive || !subscription.isActive()) return;
			ls.unsubscribe(subscription);
		}
		

	    /**
		 *	metodo di utilita' per aggiungere una sottostrizione a Lightstreamer
		 *	@param ls 
		 *      istanza di LightstreamerClient
		 *  @param subscription
		 *      istanza di Subscription da aggiungere
		 */
		function nlsSubscribe(ls, subscription){
			if(!ls || !ls.subscribe || !subscription || !subscription.isActive || subscription.isActive()) return;
			ls.subscribe(subscription);
		}
		
		var portfolioSchema = ['command', 'nodeType', 'conto', 'borsa', 'mercato', 'idTitolo', 'nome', 'ctvc', 'divisa', 'cambioc', 'lotto_sottostante', 'pmc','pmcs', 'qd', 'qp', 'ticker', 'tipo'];
	    
		var subscription = null,
		tableName = null,
		portfolioSubscription = null,
		isPortfolioTableDeconstructed = false;
		
		function togglePush(activate) {
			
			if(!lse) return;
			
			if (!activate){
				nlsUnsubscribe(lse, portfolioSubscription);
				nlsUnsubscribe(lse, subscription);
				return;
			} 
			
			var tempRealtime = false;
			if(	RicercaTradingSemplice.delaytimeP!="true"){
		     	tempRealtime = true;
		    }
		   
			var key = getPushKey(tempRealtime);
			if(tableName == null){
				tableName = 'book_32108';
				
				var groupString = [key];
				
				var defFilter = function(value){ return value; };
			    var groupFilter = function(value){ return groupString[Number(value) - 1]; };
			    
			    var translations = [
	                {o: 'field', n: 'data-field', f: defFilter},
	                {o: 'item', n: 'data-item', f: groupFilter},
	                {o: 'source', n: 'data-source', f: defFilter},
	                {o: 'table', n: 'data-grid', f: defFilter}
				];
				
				$('[table='+ tableName + ']').each(function(){
					var $this = $(this);
					
					for(var i=0, len=translations.length; i<len; i++){
						var translation = translations[i], value = $this.attr(translation.o);
						value && $this.attr(translation.n, translation.f(value));
						$this.removeAttr(translation.o);
					}
				});
			} else {
				$('[data-grid='+ tableName + ']').each(function(){
					var $this = $(this);
					
					$this.attr('data-item', key);
				});
			}
			
			if(isPortfolioTableDeconstructed == false){
				$('#pushPortafoglio [source=lightstreamer]').each(function(){
					var $this = $(this);
					$this.removeAttr('source');
					$this.removeAttr('item');
					$this.removeAttr('field');
					$this.removeAttr('table');
				});
				isPortfolioTableDeconstructed = true;
			}
			
			if(subscription != null){
				nlsUnsubscribe(lse, subscription);
			}
			
			var newTable = new StaticGrid(tableName, true);
			newTable.setAutoCleanBehavior(true, false);
			newTable.addListener({
			    onVisualUpdate: function(key, visualUpdateInfo, position) {
					if(visualUpdateInfo == null) { return; }
					visualUpdateInfo.setHotTime(600);
					handleVisualUpdate(newTable, key, visualUpdateInfo, position);
			    }
			});
			
			var items = newTable.extractItemList();
			var fields = newTable.extractFieldList();
			
			subscription = new Subscription("MERGE");
			subscription.setItems(items);
			subscription.setFields(fields);
			subscription.addListener(newTable);
			subscription.setRequestedSnapshot('no');
			subscription.setRequestedMaxFrequency(0.5);
			
			if(portfolioSubscription != null) {
				nlsUnsubscribe(lse, portfolioSubscription);
			}
				
			var rubrica = $('#rubrica').val();
			var pushDeposito = $('#portfolio_deposito').html();
			
			var stockcode = $('#book_stockcode').html();
	        var borsa = $('#book_borsa').html();
	        var mercato = $('#book_mercato').html();
		    if('EQTAH' === mercato){ mercato = 'EQCON'; }
			
			var depSelezionato = rubrica.substring(0, 16);
			if (depSelezionato != '' && pushDeposito != depSelezionato){					    
				
				var groupString = ['IT.PORTFOLIO.SECURITIES,' + depSelezionato];
				
				portfolioSubscription = new Subscription("DISTINCT");
				portfolioSubscription.setItems(groupString);
				portfolioSubscription.setFields(portfolioSchema);
				portfolioSubscription.addListener({
				    onItemUpdate: function(updateInfo) {
				    	if(updateInfo == null) { return; }
				    	handleVisualUpdatePortfolio(updateInfo, {
				    		staticData: {
				    			conto: rubrica.substr(16),
				    			stockcode: stockcode,
				    			borsa: borsa,
				    			mercato: mercato
				    		}
				    	});
				    }
				});
				portfolioSubscription.setRequestedSnapshot('no');
				portfolioSubscription.setRequestedMaxFrequency(0.5);
				
				pushDeposito = depSelezionato;
				$('#portfolio_deposito').html(pushDeposito);
			}
			
			nlsSubscribe(lse, subscription);
			nlsSubscribe(lse, portfolioSubscription);
		}
			
		</script><iframe name="LSF__webank_local_405_LSEngine" id="LSF__webank_local_405_LSEngine" src="about:blank" style="visibility: hidden; height: 0px; width: 0px; display: none;"></iframe>
	
		<br class="clear">
	
<iframe name="LS_AJAXFRAME_10" id="LS_AJAXFRAME_10" style="visibility: hidden; height: 0px; width: 0px; display: none;" src="about:blank"></iframe></body></html>





