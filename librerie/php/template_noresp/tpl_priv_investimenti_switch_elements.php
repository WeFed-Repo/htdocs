
<h1>Switch</h1>

<br class="clear">

<script>

function apriSchedaFondoFida(isin){
	
	 
	var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
	var params = "&codiceIsin="+isin +"&fondo=true";
	var hrefValue = cgi_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.do?" + obs + params;
	top.document.location.href = hrefValue;
	}
	
	function requestTmp(){
	$('tempi').innerHTML = "";
	var societa = document.switchFundForm.codiceSocietaDiGestione.value;
	var numero_casuale=Math.random();
		
	$('switchFundForm').action = cgi_script+"/FMP/tempistiche.jsp?cf="+numero_casuale+"&idSicav="+societa+"&tipoOp=Switch";
	$('switchFundForm').request({			
			onFailure: function() { errorPage();},
			onSuccess: function(t) {$('tempi').innerHTML = t.responseText;obscurateAll(1);openAlert('layeralert3');}
			});
	}

	function errorPage(){
	$( "layeralert3").innerHTML = "Dato non disponibile";
	}
	

	var xmlHttpNew;
	
	function loadFondi(){
			$('dettaglioPac1').style.display = 'none';
			$('dettaglioPac2').style.display = 'none';
 			$('dettaglioPac3').style.display = 'none';
 			$('dettaglioPac4').style.display = 'none';
 			$('dettaglioPac5').style.display = 'none';
 			$('dettaglioPac6').style.display = 'none';
 			$('dettaglioPac7').style.display = 'none';
 			$('dettaglioSicav').style.display = 'none';
 			$('dettaglioSicavSch').style.display = 'none';
 			$('elencoFondi').style.display = 'none';
 			$('avanti').style.display = 'none';
		formInsOrd = this.document.switchFundForm;
		
			
		if(3>1){
				$('deposito').disabled=false;
				var index = formInsOrd.deposito.selectedIndex;
		   		var value = formInsOrd.deposito[index].value;
		}else{
			var value = formInsOrd.deposito.value;
		}
		if('switch' == "MS_Portafoglio" || 'switch' == "FIDA"){

		   		requestFondiMS(value);
		   		
		}
		
		else
				requestFondi(value);
	}

	function requestFondiMS(dep){
		var codiceIsin = '$codiceIsin';
		var codiceFondo = '$codFund';
		var fondoSicav ='$fundSicav';
		var codSocieta ='$codSocieta';
		var numero_casuale=Math.random();
		createXMLHttpRequestNew();		
		xmlHttpNew.onreadystatechange = function() {handleStateChange();};
		xmlHttpNew.open( 'GET', cgi_script + "/FMP/isalFundMS.do?cf="+numero_casuale+"&deposito=" + dep +"&codiceIsin="+codiceIsin +"&fondoSicav="+fondoSicav +"&codiceFondo="+codiceFondo+"&codSocieta="+codSocieta+"&type=SWITCH", true );
		xmlHttpNew.send(null);
	}
		
	function requestFondi(dep){
		var numero_casuale=Math.random();
		createXMLHttpRequestNew();		
		xmlHttpNew.onreadystatechange = function() {handleStateChange();};
		xmlHttpNew.open( 'GET', cgi_script + "/FMP/isalFund.do?cf="+numero_casuale+"&deposito=" + dep +"&type=SWITCH", true );
		xmlHttpNew.send(null);
	}

	function handleStateChange() {
		$('fondi').style.display ='';
		$('fondi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
		if(xmlHttpNew!=null){	
			if (xmlHttpNew.readyState == 4) {							
				if (xmlHttpNew.status == 200) {
					parseXMLNew( xmlHttpNew.responseXML );
				} else {			
					$( "fondi").innerHTML = "Dato non disponibile";
				}
			}else{
				$('fondi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
			}
		}else{
			$('fondi').innerHTML = "Funzione non disponibile";
			
		}			
	}

	
	
		
	function parseXMLNew( xml ) {			
	$('fondi').innerHTML = xmlHttpNew.responseText;
		if( document.switchFundForm.numeroFondi.value == 0 && document.switchFundForm.messaggioErrore.value != "Errore")	{
			$( 'cercaFondoSwitch').style.display = 'none';			
			$( 'nessunFondo' ).style.display = '';
			$('fondi').innerHTML = '&nbsp;';
			$( 'labelFondo' ).innerHTML = '';
		} else if(document.switchFundForm.numeroFondi.value ==0 && document.switchFundForm.messaggioErrore.value == "Errore"){			
			$( 'nessunFondo' ).style.display = 'none';
			$( 'cercaFondoSwitch').style.display = 'none';			
			$( 'erroreForm' ).style.display = '';
			$( 'messaggio' ).innerHTML = 'Errore nel recupero dei Fondi & Sicav';
			$('fondi').innerHTML = '&nbsp;';
			$( 'labelFondo' ).innerHTML = '';
		} else {
			$('fondi').innerHTML = xmlHttpNew.responseText;
			$( 'nessunFondo' ).style.display = 'none';
			$( 'labelFondo' ).innerHTML = 'Fondo/Sicav';
			caricaFondi();
		}
	}
	
	function createXMLHttpRequestNew() {	   
		if (window.XMLHttpRequest) { 
			xmlHttpNew = new XMLHttpRequest();
				if (xmlHttpNew.overrideMimeType) {
					xmlHttpNew.overrideMimeType('text/xml');						
				}
		}
		else if (window.ActiveXObject) {
			try {
				xmlHttpNew = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttpNew = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert( e );
				}
			}
		}
		if (!xmlHttpNew) {
				return false;
		}
		return true;
	}
	
	var rigaSelezionataInput="";
	var rigaSelezionataOutput=""
	
	function confermaFatca(){
		prosegui();
	}
	
	function prosegui(){
		var deposito = document.switchFundForm.deposito.value;
		var decimaleQuoteSicav=0;
		
		var proseguiFatca="KO";
		var datiFatcaRic ="";
		var controlloFatca = document.switchFundForm.controlloFatca.value;
		if(controlloFatca=="true"){
			if(controlloFacta()){
				document.getElementById('erroreFormAnteprima').style.display = 'none';
				datiFatcaRic = getDatiFacta();
				//alert(getDatiFacta());
				proseguiFatca="OK";
				}else{
					document.getElementById('erroreFormAnteprima').style.display = '';
					proseguiFatca="KO";
				}
			}else{
			document.getElementById('erroreFormAnteprima').style.display = 'none';
			proseguiFatca="OK";
		}
		
		var datiFatca =  datiFatcaRic;
						
		if(document.switchFundForm.numeroFondi.value>1){
			var index = document.switchFundForm.SelectFundNew.selectedIndex;
			document.switchFundForm.descrizioneFondo.value = document.switchFundForm.SelectFundNew[index].text;   
			var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			
			if(indice > -1){
				var valoriFondo = valoriOption.substring(0,indice);			
				indice = valoriFondo.indexOf("|");
				var numFund = valoriFondo.substring(0,indice);
			}else{
				indice = valoriOption.indexOf("|");
				var numFund = valoriOption.substring(0,indice);
			}
			
			var procedi = "KO";
			
			if(numFund>1){
				var prosegui = false;
					for(var a=0;a<numFund;a++){
						var sel = "selectImporto" + a;
						var selOut = "selectImportoOut" + a;
						var textImpOut = "textImportoOut" + a;
						var textImp = "textImporto" + a;
						var rigaSelect = "rigaSelect" +a;
						var rigaSelectOut = "rigaSelectOut" +a;
						var textOut ="testoOut"+a;
						var rad = "radioFondo" + a;
						var imp = "importo"+a;
						var quo = "quote"+a;
						var decImp = "decImporto"+a;
						var decQuo = "decQuote"+a;
						var qtot ="quoteTotali"+a;
						var numContr = "numeroContratto"+a;
						var chiudiPacSi = "chiusuraPianoSi"+a;
						var chiudiPacNo = "chiusuraPianoNo"+a;
						var rateRes = "rateResidue"+a;
						var impRat = "importoRata"+a;
						var impPerQuote = document.switchFundForm.valoreImportoPerQuote.value;
						var quoPerImporto = document.switchFundForm.valoreQuotePerImporto.value;
						var ind;
						var valur;
						if($(rad).checked){
							rigaSelezionataOutput = rigaSelectOut;
							rigaSelezionataInput = rigaSelect;
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							document.switchFundForm.tipoInvestimento.value = $(rad).value;
							var tipoInvestimento= $(rad).value;
							document.switchFundForm.numeroQuote.value = $(qtot).value;
							var numeroContratto = document.switchFundForm.numeroContratto.value;
							var numeroQuote = $(qtot).value;
							var codiceFondoSwitch = document.switchFundForm.codiceFondoSwitch.value;
							var quote = document.switchFundForm.quote.value;
							var decQuote = document.switchFundForm.decQuote.value;
							var importo = document.switchFundForm.importo.value;
							var decImporto = document.switchFundForm.decImporto.value;
							var valutaFondo = document.switchFundForm.valutaFondo.value;
							var valutaFondoSwitch = document.switchFundForm.valutaFondoSwitch.value;
							var valoreQuotePerImporto = document.switchFundForm.valoreQuotePerImporto.value;
							var nav=document.switchFundForm.NAV.value;
							document.switchFundForm.controvalore.value = calcolaControvalore(nav,numeroQuote).toFixed(2);
							var cValore = document.switchFundForm.controvalore.value;
							
							if(document.switchFundForm.tipoInvestimento.value=="PAC"){
								document.switchFundForm.rateResidue.value = $(rateRes).value;
								document.switchFundForm.importoRata.value = $(impRat).value;
								document.switchFundForm.numeroContratto.value = $(numContr).value;
								numeroContratto = $(numContr).value; 							
							}
							
							prosegui = true;
							ind = $(sel).selectedIndex;;
							valur =	$(sel)[ind].value;
							descModRimb = $(sel)[ind].text;
							var chiusuraPiano = document.switchFundForm.chiusuraPiano.value;
							$(selOut).innerHTML = "<strong>"+descModRimb+"</strong>";
								
							if(valur==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(valur==1){								
								//document.switchFundForm.quoteTotali.value = $(qtot).value;
								var quoteTotali = $(qtot).value; 								
								//document.switchFundForm.tipoVendita.value = valur;
								//document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotaliMix(cValore);									
							}else if(valur==2){									 
								//document.switchFundForm.importo.value = $(imp).value;
								importo = $(imp).value;
								decImporto = $(decImp).value;
								//document.switchFundForm.decImporto.value = $(decImp).value;
								//document.switchFundForm.tipoVendita.value = valur;
								//document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImporto(importo,decImporto);
								//$(imp).disabled=true;
								//$(decImp).disabled=true;
								//$(textOut).innerHTML = "";
								//$(textImpOut).innerHTML = "<strong>"+impPerQuote.replace('.',',') + "&nbsp;EUR</strong> corrispondenti a <strong>"+quoPerImporto.replace('.',',')+"</strong>&nbsp;quote";
							}else if(valur==3){
								//document.switchFundForm.quote.value = $(quo).value;
								quote = $(quo).value;
								//document.switchFundForm.decQuote.value = $(decQuo).value;
								decQuote = $(decQuo).value;
								//document.switchFundForm.tipoVendita.value = valur;
								//document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteAnte(quote,decQuote);
								//$(quo).disabled=true;
								//$(decQuo).disabled=true;
								//$(textOut).innerHTML = "";
								//$(textImpOut).innerHTML = "<strong>"+quoPerImporto.replace('.',',') + "&nbsp;</strong> corrispondenti a <strong>"+impPerQuote.replace('.',',')+"&nbsp;EUR</strong>";
							}
									
							document.switchFundForm.codiceFondo.value = document.switchFundForm.CodiceFondoVet.value;
							var codiceFondo = document.switchFundForm.codiceFondo.value;
							var Fondosicav = document.switchFundForm.Fondosicav.value;
							var cfam = document.switchFundForm.cfam.value;
							var percScontoCom = document.switchFundForm.percScontoCom.value;
							var reinvestimento = document.switchFundForm.reinvestimento.value;
							var obbligoCedola= document.switchFundForm.obbligoCedola.value;
							
							
					//alert(proseguiFatca + "2");
							
							if(valur!=0 && procedi=="OK" && proseguiFatca=="OK"){								
								//$(sel).disabled=true;									
								$('erroreForm').style.display = 'none';
								$('avanti').style.display = 'none';
								$('modificaAnteprima').style.display = '';
								$('cambiaFondoSwitch').innerHTML ='';
								//$(rigaSelectOut).style.display = '';
								//$(rigaSelect).style.display = 'none';
								//$(selOut).style.display = '';
								var numero_casuale=Math.random();
								createXMLHttpRequest();		
								xmlHttp.onreadystatechange = function() {handleStateChangeNew();};		
								xmlHttp.open( 'GET', cgi_script + "/FMP/switchFundPreview.do?cf="+numero_casuale + "&deposito=" +deposito + "&codiceFondo="+codiceFondo+"&quoteTotali=" + quoteTotali + "&tipoVendita="+valur+ "&importo=" +importo+"&decImporto="+decImporto+ "&quote=" +quote+ "&decQuote="+decQuote+"&codiceSocietaDiGestione="+codSocGest+"&numeroQuote="+numeroQuote+"&numeroContratto="+numeroContratto+"&codiceFondoSwitch="+codiceFondoSwitch +"&fondoSicav="+Fondosicav+"&valutaFondo="+valutaFondo+"&valutaFondoSwitch="+valutaFondoSwitch+"&valoreQuotePerImporto="+valoreQuotePerImporto +"&chiusuraPiano="+chiusuraPiano +"&percScontoCom="+percScontoCom +"&cfam="+cfam +"&reinvestimento="+reinvestimento + "&obbligoCedola=" + obbligoCedola +"&datiFatca="+datiFatca+"&controlloFatca="+controlloFatca, true );
								xmlHttp.send(null);
							}								
						}						
					}
					
					if(prosegui==false){							
						$('erroreForm').style.display = '';
						$('messaggio').innerHTML = "Per proseguire bisogna selezionare un fondo";
					}					
				
				}else{
					var descModRimb;
					var numeroContratto = document.switchFundForm.numeroContratto.value;
					var numeroQuote = document.switchFundForm.numeroQuote.value;
					var codiceFondoSwitch = document.switchFundForm.codiceFondoSwitch.value;
					var quote = document.switchFundForm.quote.value;
					var decQuote = document.switchFundForm.decQuote.value;
					var importo = document.switchFundForm.importo.value;
					var decImporto = document.switchFundForm.decImporto.value;
					var quoteTotali = document.switchFundForm.numeroQuote.value;
					var valutaFondo = document.switchFundForm.valutaFondo.value;
					var valutaFondoSwitch = document.switchFundForm.valutaFondoSwitch.value;
					var valoreQuotePerImporto = document.switchFundForm.valoreQuotePerImporto.value;
					var valoreImportoPerQuote = document.switchFundForm.valoreImportoPerQuote.value
					
					document.switchFundForm.quoteTotali.value = quoteTotali;
					document.switchFundForm.quoteTotali.value = document.switchFundForm.numeroQuote.value;
					
					if(document.switchFundForm.codiceSocietaDiGestione.value==101)
				  		decimaleQuoteSicav=2;
					else if(document.switchFundForm.codiceSocietaDiGestione.value==110)
						decimaleQuoteSicav=2;
					else
						decimaleQuoteSicav=3;
					if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="F"){
						var ind = document.switchFundForm.selectImportoPic.selectedIndex;
						var value = document.switchFundForm.selectImportoPic[ind].value;
						descModRimb = document.switchFundForm.selectImportoPic[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoPic.value;
							importo = document.switchFundForm.importoPic.value
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoPic.value;;
							decImporto = document.switchFundForm.decImportoPic.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quotePic.value;
							quote = document.switchFundForm.quotePic.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePic.value;
							decQuote = document.switchFundForm.decQuotePic.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==2){
						var ind = document.switchFundForm.selectImportoSicavSch.selectedIndex;
						var value = document.switchFundForm.selectImportoSicavSch[ind].value;
						descModRimb = document.switchFundForm.selectImportoSicavSch[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoSicavSch.value;
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicavSch.value;
							importo = document.switchFundForm.importoSicavSch.value;
							decImporto = document.switchFundForm.decImportoSicavSch.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quoteSicavSch.value;
							quote = document.switchFundForm.quoteSicavSch.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicavSch.value;
							decQuote = document.switchFundForm.decQuoteSicavSch.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==3){
						var ind = document.switchFundForm.selectImportoSicav.selectedIndex;
						var value = document.switchFundForm.selectImportoSicav[ind].value;
						descModRimb = document.switchFundForm.selectImportoSicav[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoSicav.value;
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicav.value;
							importo = document.switchFundForm.importoSicav.value;
							decImporto = document.switchFundForm.decImportoSicav.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quoteSicav.value;
							quote = document.switchFundForm.quoteSicav.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicav.value;
							decQuote = document.switchFundForm.decQuoteSicav.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PAC"){
						var ind = document.switchFundForm.selectImportoPac.selectedIndex;
						var value = document.switchFundForm.selectImportoPac[ind].value;
						descModRimb = document.switchFundForm.selectImportoPac[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoPac.value;
							importo = document.switchFundForm.importoPac.value
							document.switchFundForm.decImporto.value=  document.switchFundForm.decImportoPac.value;
							decImporto = document.switchFundForm.decImportoPac.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quotePac.value;
							quote = document.switchFundForm.quotePac.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePac.value;
							decQuote = document.switchFundForm.decQuotePac.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}
					tipoVendita = document.switchFundForm.tipoVendita.value;						
					codiceFondo = document.switchFundForm.codiceFondo.value;
					var Fondosicav = document.switchFundForm.Fondosicav.value;
					var cfam = document.switchFundForm.cfam.value;
					var chiusuraPiano = document.switchFundForm.chiusuraPiano.value;
					var percScontoCom = document.switchFundForm.percScontoCom.value;
					var reinvestimento = document.switchFundForm.reinvestimento.value;
					var obbligoCedola= document.switchFundForm.obbligoCedola.value;
					//alert(proseguiFatca + "3");
					if(valur!=0 && procedi=="OK" && proseguiFatca=="OK"){					
					$('erroreForm').style.display = 'none';
					$('avanti').style.display = 'none';
					$('modificaAnteprima').style.display = '';
					$('cambiaFondoSwitch').innerHTML ='';
					var numero_casuale=Math.random();
					createXMLHttpRequest();		
					xmlHttp.onreadystatechange = function() {handleStateChangeNew();};		
					xmlHttp.open( 'GET', cgi_script + "/FMP/switchFundPreview.do?cf="+numero_casuale + "&deposito=" +deposito + "&codiceFondo="+codiceFondo+"&quoteTotali=" + quoteTotali + "&tipoVendita="+tipoVendita+ "&importo=" +importo+"&decImporto="+decImporto+ "&quote=" +quote+ "&decQuote="+decQuote+"&codiceSocietaDiGestione="+codSocGest+"&numeroQuote="+numeroQuote+"&numeroContratto="+numeroContratto+"&codiceFondoSwitch="+codiceFondoSwitch +"&fondoSicav="+Fondosicav+"&valutaFondo="+valutaFondo+"&valutaFondoSwitch="+valutaFondoSwitch+"&valoreQuotePerImporto="+valoreQuotePerImporto +"&chiusuraPiano="+chiusuraPiano +"&percScontoCom="+percScontoCom+"&cfam="+cfam+"&reinvestimento=" +reinvestimento + "&obbligoCedola=" + obbligoCedola +"&datiFatca="+ datiFatca +"&controlloFatca="+controlloFatca, true );
					xmlHttp.send(null);
					}
						
				}
		}
		else{
			var numeroContratto = document.switchFundForm.numeroContratto.value;
			var numeroQuote = document.switchFundForm.numeroQuote.value;
			var codiceFondoSwitch = document.switchFundForm.codiceFondoSwitch.value;
			var quote = document.switchFundForm.quote.value;
			var decQuote = document.switchFundForm.decQuote.value;
			var importo = document.switchFundForm.importo.value;
			var decImporto = document.switchFundForm.decImporto.value;
			var ind = document.switchFundForm.selectImporto.selectedIndex;
			var value = document.switchFundForm.selectImporto[ind].value;
			var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
			var valutaFondo = document.switchFundForm.valutaFondo.value;
			var valutaFondoSwitch = document.switchFundForm.valutaFondoSwitch.value;
			var valoreQuotePerImporto = document.switchFundForm.valoreQuotePerImporto.value;
			var valoreImportoPerQuote = document.switchFundForm.valoreImportoPerQuote.value
			
			document.switchFundForm.quoteTotali.value = quoteTotali;
			document.switchFundForm.quoteTotali.value = document.switchFundForm.numeroQuote.value;
				
				if(document.switchFundForm.codiceSocietaDiGestione.value==101)
				  	decimaleQuoteSicav=2;
				else if(document.switchFundForm.codiceSocietaDiGestione.value==110)
					decimaleQuoteSicav=2;
				else
					decimaleQuoteSicav=3;
					
					if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="F"){
						var ind = document.switchFundForm.selectImportoPic.selectedIndex;
						var value = document.switchFundForm.selectImportoPic[ind].value;
						descModRimb = document.switchFundForm.selectImportoPic[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoPic.value;
							importo = document.switchFundForm.importoPic.value
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoPic.value;;
							decImporto = document.switchFundForm.decImportoPic.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quotePic.value;
							quote = document.switchFundForm.quotePic.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePic.value;
							decQuote = document.switchFundForm.decQuotePic.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==2){
						var ind = document.switchFundForm.selectImportoSicavSch.selectedIndex;
						var value = document.switchFundForm.selectImportoSicavSch[ind].value;
						descModRimb = document.switchFundForm.selectImportoSicavSch[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoSicavSch.value;
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicavSch.value;
							importo = document.switchFundForm.importoSicavSch.value;
							decImporto = document.switchFundForm.decImportoSicavSch.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quoteSicavSch.value;
							quote = document.switchFundForm.quoteSicavSch.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicavSch.value;
							decQuote = document.switchFundForm.decQuoteSicavSch.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioSicavSch').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==3){
						var ind = document.switchFundForm.selectImportoSicav.selectedIndex;
						var value = document.switchFundForm.selectImportoSicav[ind].value;
						descModRimb = document.switchFundForm.selectImportoSicav[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoSicav.value;
							document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicav.value;
							importo = document.switchFundForm.importoSicav.value;
							decImporto = document.switchFundForm.decImportoSicav.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quoteSicav.value;
							quote = document.switchFundForm.quoteSicav.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicav.value;
							decQuote = document.switchFundForm.decQuoteSicav.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioSicav').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}else if(document.switchFundForm.tipoInvestimento.value=="PAC"){
						var ind = document.switchFundForm.selectImportoPac.selectedIndex;
						var value = document.switchFundForm.selectImportoPac[ind].value;
						descModRimb = document.switchFundForm.selectImportoPac[ind].text;
						
						var tipovendita = "";
						var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
						if(value==0){
							$('erroreForm').style.display = '';
							$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						}else if(value==1){							
							quoteTotali = document.switchFundForm.quoteTotali.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
							}
						}else if(value==2){
							document.switchFundForm.importo.value = document.switchFundForm.importoPac.value;
							importo = document.switchFundForm.importoPac.value
							document.switchFundForm.decImporto.value=  document.switchFundForm.decImportoPac.value;
							decImporto = document.switchFundForm.decImportoPac.value;
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloImporto(importo,decImporto);
							var i = importo +"."+decImporto+"0";
							var im = ""+new Number(i);
							if(procedi=="OK"){					
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioImporto').style.display = '';
							$('detImp').innerHTML =im.replace('.',',');
							$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
						}else if(value==3){
							document.switchFundForm.tipoVendita.value = value;
							document.switchFundForm.quote.value = document.switchFundForm.quotePac.value;
							quote = document.switchFundForm.quotePac.value
							document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePac.value;
							decQuote = document.switchFundForm.decQuotePac.value;
							document.switchFundForm.descrModRimborso.value = descModRimb;
							procedi = controlloQuoteAnte(quote,decQuote);
							var q = quote +"."+decQuote+"0";
							var qu = ""+new Number(q);
							if(procedi=="OK"){
							$('dettaglioPac6').style.display = 'none';
							$('dettaglioQuote').style.display = '';
							$('detQuote').innerHTML =qu.replace('.',',');
							$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}
					//alert(proseguiFatca + "4");
					tipoVendita = document.switchFundForm.tipoVendita.value;						
					codiceFondo = document.switchFundForm.codiceFondo.value;
					var Fondosicav = document.switchFundForm.Fondosicav.value;
					var cfam = document.switchFundForm.cfam.value;
					var chiusuraPiano = document.switchFundForm.chiusuraPiano.value;
					var percScontoCom = document.switchFundForm.percScontoCom.value;
					var reinvestimento = document.switchFundForm.reinvestimento.value;
					var obbligoCedola= document.switchFundForm.obbligoCedola.value;
					if(valur!=0 && procedi=="OK" && proseguiFatca=="OK"){					
						$('erroreForm').style.display = 'none';
						$('avanti').style.display = 'none';
						$('modificaAnteprima').style.display = '';
						$('cambiaFondoSwitch').innerHTML ='';
						var numero_casuale=Math.random();
						createXMLHttpRequest();		
						xmlHttp.onreadystatechange = function() {handleStateChangeNew();};		
						xmlHttp.open( 'GET', cgi_script + "/FMP/switchFundPreview.do?cf="+numero_casuale + "&deposito=" +deposito + "&codiceFondo="+codiceFondo+"&quoteTotali=" + quoteTotali + "&tipoVendita="+tipoVendita+ "&importo=" +importo+"&decImporto="+decImporto+ "&quote=" +quote+ "&decQuote="+decQuote+"&codiceSocietaDiGestione="+codSocGest+"&numeroQuote="+numeroQuote+"&numeroContratto="+numeroContratto+"&codiceFondoSwitch="+codiceFondoSwitch +"&fondoSicav="+Fondosicav+"&valutaFondo="+valutaFondo+"&valutaFondoSwitch="+valutaFondoSwitch+"&valoreQuotePerImporto="+valoreQuotePerImporto +"&chiusuraPiano="+chiusuraPiano +"&percScontoCom="+percScontoCom +"&cfam="+cfam+"&reinvestimento=" +reinvestimento + "&obbligoCedola=" + obbligoCedola+"&datiFatca="+datiFatca+"&controlloFatca="+controlloFatca, true );
						xmlHttp.send(null);
					}
		}
		
	}
	
	function handleStateChangeNew() {
		$('formMessaggi').style.display ='';
		$('formMessaggi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
		
		if(xmlHttp!=null){
			if (xmlHttp.readyState == 4) {							
				if (xmlHttp.status == 200) {
					parseXML( xmlHttp.responseXML );
				} else {
					$('formMessaggi').innerHTML = "Funzione disponibile";					
				}
			}else{
				$('formMessaggi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
				
			}
		}else{
			$('formMessaggi').innerHTML = "Funzione non disponibile";
			
		}
	}

	function parseXML( xml ) {	
			$('formMessaggi').innerHTML = xmlHttp.responseText;
			$('avanti').style.display = 'none';
			$('modifica').style.display = 'none';
			//alert(document.switchFundForm.fatca.value);
			document.switchFundForm.controlloFatca.value = document.switchFundForm.fatca.value;
			if(document.switchFundForm.reinvestimento.value=="S")
				document.getElementById('reinvestimentoOut').style.display ='';
			
	}
	
	function createXMLHttpRequest() {	   
		if (window.XMLHttpRequest) { 
			xmlHttp = new XMLHttpRequest();
				if (xmlHttp.overrideMimeType) {
					xmlHttp.overrideMimeType('text/xml');						
				}
		}
		else if (window.ActiveXObject) {
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert( e );
				}
			}
		}
		if (!xmlHttp) {
			alert('Giving up :( Cannot create an XMLHTTP instance');
				return false;
		}
		return true;
	}
	function caricaFondi(){
		if(document.switchFundForm.numeroFondi.value>1){
			var numFund = $("SelectFundNew");
			var descrizione ="";
			var descriOld="";
			var valOld ="";
			var val ="";
  				for(var a=0, b=document.switchFundForm.numeroFondi.value; a<b; a++ ){	
					descrizione = document.switchFundForm.SelectFund[a].text;
					val = document.switchFundForm.SelectFund[a].value;
					if(descrizione!=descriOld){
						descriOld = descrizione;			
						option = document.createElement("option");
						option.value = val;
						option.appendChild(document.createTextNode(descrizione));
						numFund.appendChild(option);
					}else{
						option.value =  option.value + "*" + val;
					}
				}
			$("SelectFund").style.display = 'none';
			$("SelectFundNew").style.display = '';
			loadDettaglio();
		}else if(document.switchFundForm.numeroFondi.value==1){
			loadDettaglioUnico();
		}else{
			$('dettaglioPac1').style.display = 'none';
			$('dettaglioPac2').style.display = 'none';
 			$('dettaglioPac3').style.display = 'none';
 			$('dettaglioPac4').style.display = 'none';
 			$('dettaglioPac5').style.display = 'none';
 			$('dettaglioPac6').style.display = 'none';
 			$('dettaglioPac7').style.display = 'none';
 			$('dettaglioSicav').style.display = 'none';
 			$('dettaglioSicavSch').style.display = 'none';
 			$('elencoFondi').style.display = 'none';
 			$('avanti').style.display = 'none';
		}
	}
	function calcolaControvalore(val,num){	
	
	var c = Math.round(val*Math.pow(10,3))/Math.pow(10,3);
	var d = Math.round(num*Math.pow(10,3))/Math.pow(10,3);
	
	var t = c*d;
	var tot = new Number(t);
	return tot;
	}
	
	function loadDettaglio(){	 				
 			
			var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			if(indice > -1){
			var valoriFondo = valoriOption.substring(0,indice);			
			indice = valoriFondo.indexOf("|");
			var numeroFondi = valoriFondo.substring(0,indice);
			}else{
			indice = valoriOption.indexOf("|");
			var numeroFondi = valoriOption.substring(0,indice);
			}
			$('closePac').style.display = 'none';	
			if(numeroFondi>1){
				var vet = new Array();
				vet.splice(numeroFondi);
				vet.length = numeroFondi;			
			
			
				for (var i=0; i<numeroFondi;i++){
					var ind = valoriOption.lastIndexOf("*");
					var valoriInd = valoriOption.substring(ind+1,valoriOption.length);
					vet[i]=valoriInd;
					valoriOption = valoriOption.substring(0,ind);
				}
			}
			$('avanti').style.display = 'none';
			if(numeroFondi>1){
				$('dettaglioPac1').style.display = '';
 				$('dettaglioPac2').style.display = 'none';
 				$('dettaglioPac3').style.display = 'none';
 				$('dettaglioPac4').style.display = 'none';
 				$('dettaglioPac5').style.display = 'none';
 				$('dettaglioPac6').style.display = 'none';
 				$('dettaglioPac7').style.display = 'none';
 				$('dettaglioSicav').style.display = 'none';
 				$('dettaglioSicavSch').style.display = 'none';
				$('elencoFondi').style.display = '';
				$('cercaFondoSwitch').style.display = '';	
					var elencoFondiPac ="";						
					var titleFondiPac ="";
					var textFondiPicPac ="";
					var titleFondiPic ="";
					var elencoFondiPic ="";
					var totaleFondiPac ="";
					var totaleFondiPic ="";
					var elencoRatePac ="";
					var controvalore =0;
				for(var c=0; c<numeroFondi;c++){
					var indVet = vet[c].lastIndexOf("|");
					var valoriVet = vet[c];
					var ParametroModuloVet = valoriVet.substring(indVet+1,valoriVet.length);
					valoriVet = valoriVet.substring(0,indVet);
					indVet = valoriVet.lastIndexOf("|");
					var RateResidueVet = valoriVet.substring(indVet+1,valoriVet.length);
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var ImportoRataVet = valoriVet.substring(indVet+1,valoriVet.length);
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var NumeroQuoteVet = valoriVet.substring(indVet+1,valoriVet.length);
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var CodiceFondoVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.codiceFondo.value=CodiceFondoVet;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var tipoInvestVet = valoriVet.substring(indVet+1,valoriVet.length);
										
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codiceSocietaGestioneVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.codiceSocietaDiGestione.value=codiceSocietaGestioneVet;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var valoreQuotaVet = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var tipoDivisaVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.valutaFondo.value=tipoDivisaVet;
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var dataPrezzoQuotaVet = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codAzioneFondoVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.codiceAzione.value = codAzioneFondoVet;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codFamFondoVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.cfam.value = codFamFondoVet;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var fondoSicav = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.Fondosicav.value = fondoSicav;
					
					if(fondoSicav=='S'){
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
						document.getElementById('tipoStrumento2').innerHTML = 'Sicav';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Sicav';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Sicav di destinazione';
					}else if(fondoSicav=='F'){
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
						document.getElementById('tipoStrumento2').innerHTML = 'Fondo';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Fondo';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Fondo di destinazione';
					}
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var cambio = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.cambio.value = cambio;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var datacambio = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.dataCambioValuta.value = datacambio;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var isin = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.isin.value = isin;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var descFondo = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.descrizioneFondo.value = descFondo;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var descSocietaGestione = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var speseRimborso = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var speseSwitch = valoriVet.substring(indVet+1,valoriVet.length);
					document.switchFundForm.speseFisse.value = speseSwitch;
								
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					$('apriScheda').innerHTML ="<div><a title='apri la scheda fondo/sicav' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
							
					$('valoreQuota').innerHTML = valoreQuotaVet.replace('.',',') + " " + tipoDivisaVet;
					$('dataValoreQuota').innerHTML = dataPrezzoQuotaVet;
					document.switchFundForm.NAV.value = valoreQuotaVet;
					document.switchFundForm.dataNAV.value = dataPrezzoQuotaVet;
					controvalore = calcolaControvalore(valoreQuotaVet,NumeroQuoteVet).toFixed(2).replace('.',',');
					var rigaTitle = "id=titleFund"+c;
					var rigaAzioni = "id=azioniFund"+c;
					var rigaRate = "id=rateFund"+c;
					var rigaSelect = "id=rigaSelect" +c;
					var rigaSelectOut = "id=rigaSelectOut" +c;
					var rigaContratto = "id=rigaContratto"+c;
					var radio = "id=radioFondo" + c;
					var nameSelect = "id=selectImporto" + c;
					var nameSelectOut = "<span id=selectImportoOut" + c +"></span>";
					var nameFunction =  "onchange=javascript:cambiaImportoFundPac("+c+","+numeroFondi+",'"+tipoDivisaVet+"');";
					var nameFunctionPic =  "onchange=javascript:cambiaImportoFundPic("+c+","+numeroFondi+",'"+tipoDivisaVet+"');";
					var texImp = "<span id=textImporto"+c+"></span>";
					var texImpOut = "<span id=textImportoOut"+c+"></span>";
					var test = "<span id=testo"+c+"></span>";
					var testOut = "<span id=testoOut"+c+"></span>";
					var contVal = "<span id=controvalore"+c+"></span>";
					var disabilita = "onclick=javascript:disabilitaFondi("+c+","+numeroFondi+");";
					var numContratto = "<input type=hidden id=numeroContratto" + c+" value="+ParametroModuloVet +" />";
					var quoteTot = "<input type=hidden id=quoteTotali" + c+" value="+NumeroQuoteVet +" />";
					var codFund = "<input type=hidden name=CodiceFondoVet value="+CodiceFondoVet+" />";
					var rateRes = "<input type=hidden id=rateResidue" + c+" value="+RateResidueVet +" />";
					var impRata = "<input type=hidden id=importoRata" + c+" value="+ImportoRataVet +" />";
						if(tipoInvestVet=="PAC"){
							titleFondiPac = "<tr " + rigaTitle + " ><td class='grscuro' colspan='4'><input type='radio' value='PAC' " +radio+ " " + disabilita + " " +" class='nobor3' />quote provenienti da PAC n. <strong>" + ParametroModuloVet +"</strong>"+ numContratto+"</td></tr>";
							elencoFondiPac = "<tr " +rigaAzioni +" ><td class='uno' width='105'>N. quote/azioni nel portafoglio selezionato</td><td><strong>"+NumeroQuoteVet.replace('.',',')+"</strong></td>" + quoteTot +"<td class='uno' width='105'>Controvalore</td><td width='225'><strong>"+ controvalore.replace('.',',') + " " + tipoDivisaVet +"</strong></td></tr>";
							elencoRatePac = "<tr " +rigaRate + " ><td class='uno'>Importo rata</td><td><strong>" +ImportoRataVet+"</strong></td>"+impRata+"<td class='uno'>Rate residue</td><td><strong>" +RateResidueVet+"</strong></td>"+rateRes+"</tr>";				
							elencoContrattoPac = "<tr " +rigaContratto + " style='display: none;'><td class='uno'>N. contratto PAC</td><td colspan='3'><strong>" +ParametroModuloVet+"</strong></td></tr>";
							textFondiPicPac = "<tr " +rigaSelect +" ><td class='uno'>Quante quote vuoi vendere?</td><td><select disabled='disabled' class='lungmax' "+nameSelect+" " + nameFunction +"><option value='0'>--seleziona--</option><option value='1'>Tutte le quote nel deposito selezionato</option><option value='2'>Importo</option><option value='3'>Numero di quote</option></select></td><td>"+test+"</td><td>"+texImp+"</td></tr>";
							textFondiPicPacOut = "<tr " +rigaSelectOut +" style='display: none;'><td class='uno'>Quante quote vuoi vendere?</td><td>"+nameSelectOut+"</td><td>"+testOut+"</td><td>"+texImpOut+"</td></tr>";
							totaleFondiPac = totaleFondiPac + titleFondiPac +elencoFondiPac+ elencoRatePac  + elencoContrattoPac +textFondiPicPac +textFondiPicPacOut;
						}else{
							titleFondiPic = "<tr "+rigaTitle+" ><td class='grscuro' colspan='4'><input type='radio' value='PIC' " +radio+ " " + disabilita + " " +" class='nobor3' />quote provenienti da acquisto unico</td></tr>";
							textFondiPicPac ="<tr "+rigaSelect+" ><td class='uno'>Quante quote vuoi vendere?</td><td><select disabled='disabled' class='lungmax' "+nameSelect+" " + nameFunctionPic +"><option value='0'>--seleziona--</option><option value='1'>Tutte le quote nel deposito selezionato</option><option value='2'>Importo</option><option value='3'>Numero di quote</option></select></td><td>"+test+"</td><td>"+texImp+"</td></tr>";
							elencoFondiPic = "<tr "+rigaAzioni+" ><td class='uno' width='105'>N. quote/azioni nel portafoglio selezionato</td><td><strong>"+NumeroQuoteVet.replace('.',',')+"</strong></td>" + quoteTot +"<td class='uno' width='105'>Controvalore</td><td width='225'><strong>"+controvalore.replace('.',',')+ " " + tipoDivisaVet +"</strong></td></tr>";
							textFondiPicPacOut = "<tr " +rigaSelectOut +" style='display: none;'><td class='uno'>Quante quote vuoi vendere?</td><td>"+nameSelectOut+"</td><td>"+testOut+"</td><td>"+texImpOut+"</td></tr>";
							totaleFondiPic = totaleFondiPic + titleFondiPic + elencoFondiPic + textFondiPicPac +textFondiPicPacOut;
						}						
				}
				var titTable ="<div class='tithelp'><div class='helpleft'>Scegli quali quote vuoi vendere</div><br class='clear'></div>";	
				var inizioTableElenco = "<table class='form01 out'><tbody>";
				var fineTableElenco = "</tbody></table>";
				var totaleTableElenco = titTable +inizioTableElenco + totaleFondiPic + totaleFondiPac + codFund + fineTableElenco;
				$("elencoFondi").innerHTML = totaleTableElenco;

				//disabilitaFondi('x',numeroFondi);
			}else{
				$('elencoFondi').style.display = 'none';
				$('cercaFondoSwitch').style.display = '';
				var ind = valoriOption.lastIndexOf("|");
				
				var ParametroModulo = valoriOption.substring(ind+1,valoriOption.length);
				$('ParametroModulo').innerHTML = ParametroModulo;
				$('ParametroModulo').value = ParametroModulo;
				document.switchFundForm.numeroContratto.value = ParametroModulo;
				valoriOption = valoriOption.substring(0,ind);
				ind = valoriOption.lastIndexOf("|");
				var RateResidue = valoriOption.substring(ind+1,valoriOption.length);
				$('RateRes').innerHTML = RateResidue;
				valoriOption = valoriOption.substring(0,ind);    
				ind = valoriOption.lastIndexOf("|");
				var ImportoRata = valoriOption.substring(ind+1,valoriOption.length);
				$('ImportRata').innerHTML = ImportoRata;
				valoriOption = valoriOption.substring(0,ind);    
				ind = valoriOption.lastIndexOf("|");
				var NumeroQuote = valoriOption.substring(ind+1,valoriOption.length);
				$('NumerQuote').innerHTML = NumeroQuote.replace('.',',');
				document.switchFundForm.numeroQuote.value = NumeroQuote;
				document.switchFundForm.quoteTotali.value = NumeroQuote;
				valoriOption = valoriOption.substring(0,ind);    
				ind = valoriOption.lastIndexOf("|");
				var CodiceFondo = valoriOption.substring(ind+1,valoriOption.length);
				document.switchFundForm.codiceFondo.value = CodiceFondo;
				valoriOption = valoriOption.substring(0,ind);    
				ind = valoriOption.lastIndexOf("|");
				var tipoInvestimento = valoriOption.substring(ind+1,valoriOption.length);
				document.switchFundForm.tipoInvestimento.value= tipoInvestimento;
				
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codiceSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.codiceSocietaDiGestione.value = codiceSocietaGestione;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var valoreQuota = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoDivisa = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.valutaFondo.value=tipoDivisa
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var dataPrezzoQuota = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codAzioneFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.codiceAzione.value = codAzioneFondo;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codFamFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.cfam.value = codFamFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var fondoSicav = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.Fondosicav.value = fondoSicav;
					
					if(fondoSicav=='S'){
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
						document.getElementById('tipoStrumento2').innerHTML = 'Sicav';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Sicav';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Sicav di destinazione';
					}else if(fondoSicav=='F'){
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
						document.getElementById('tipoStrumento2').innerHTML = 'Fondo';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Fondo';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Fondo di destinazione';
					}
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var cambio = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.cambio.value = cambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var datacambio = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.dataCambioValuta.value = datacambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var isin = valoriOption.substring(ind+1,valoriOption.length);
					
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.descrizioneFondo.value = descFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseFisse = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseRimborso = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseSwitch = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.speseFisse.value = speseSwitch;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codicefida = valoriOption.substring(ind+1,valoriOption.length);
				
					//LINK_SCHEDAFONDO
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					$('apriScheda').innerHTML ="<div><a title='apri la scheda fondo/sicav' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
					$('valoreQuota').innerHTML = valoreQuota.replace('.',',') + " " + tipoDivisa;
					$('dataValoreQuota').innerHTML = dataPrezzoQuota;
					
					
					document.switchFundForm.NAV.value = valoreQuota;
					document.switchFundForm.dataNAV.value = dataPrezzoQuota;
					
					var controValue = calcolaControvalore(valoreQuota,NumeroQuote);
					var valoreTotale = controValue.toFixed(2);
					var valCambio = ""+(controValue/cambio).toFixed(2);
					if(tipoDivisa=="EUR"){
					$('controValue').innerHTML = "<strong>" + valoreTotale.replace('.',',') + " " + tipoDivisa+ "</strong>";
					var valCambio = ""+(controValue/cambio).toFixed(2);
					}else{
					$('controValue').innerHTML = "<strong>" +valoreTotale.replace('.',',') + " " + tipoDivisa + "</strong><br/><strong>" +valCambio.replace('.',',')  + " EUR</strong><span class='note'> al cambio del " +datacambio+"</span>";
					var valCambio = ""+(controValue/cambio).toFixed(2);
					}
					document.switchFundForm.controvalore.value = valoreTotale.replace('.',',');
					document.switchFundForm.controvaloreValuta.value = valCambio.replace('.',',');
					document.switchFundForm.dataCambioValuta.value = datacambio;
					var decimaleQuoteSicav=0;
					if(document.switchFundForm.codiceSocietaDiGestione.value==101)
					  	decimaleQuoteSicav=2;
					else if(document.switchFundForm.codiceSocietaDiGestione.value==110)
						decimaleQuoteSicav=2;
					else
						decimaleQuoteSicav=3;
				if(tipoInvestimento=="PAC"){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = '';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = '';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = '';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicav').style.display = 'none';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPacUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="F"){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = '';
 					$('dettaglioSicav').style.display = 'none';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPicUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==2){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicavSch').style.display = '';
 					$('dettaglioSicav').style.display = 'none';
 					cambiaImportoSicavSch("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==3){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicav').style.display = '';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoSicav("zero");
				}
			}
			$('tipologiaStrumento').style.display = '';
		
	}
	function controlloImporto(val,num){
			
		var impRicevuto = val +"."+num +"0";
		var impCompleto = new Number(impRicevuto);
		var impMinimo = new Number(document.switchFundForm.isotsucFondoSwitch.value);
		var conValue = new Number(document.switchFundForm.controvalore.value.replace(',','.'));
		
		if(impCompleto < impMinimo){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "L&#39;importo deve essere pari o maggiore dell'mporto minimo successivo";
			return "KO";
		}
			return "OK";
	}
	function controlloImportoAnte(val,num){
		if (val.indexOf('.') >= 0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";
		}		
		if (isNaN(val) || val <= 0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";				
		}
		if (isNaN(num)){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";				
		}
			var impRicevuto = val +"."+num +"0";
			var impCompleto = new Number(impRicevuto);
		var conValue = new Number(document.switchFundForm.controvalore.value.replace(',','.'));
		if((impCompleto - conValue)>0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "L&#39;importo deve essere pari o minore del controvalor";
			return "KO";
		}	
		
			return "OK";
	}
	
	function controlloImportoAntePlus(val,num,conValue){
		if (val.indexOf('.') >= 0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";
		}		
		if (isNaN(val) || val <= 0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";				
		}
		if (isNaN(num)){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire l&#39;importo";
			return "KO";				
		}
			var impRicevuto = val +"."+num +"0";
			var impCompleto = new Number(impRicevuto);
		if((impCompleto - conValue)>0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "L&#39;importo deve essere pari o minore del controvalor";
			return "KO";
		}	
		
			return "OK";
	}
	
	function controlloQuote(val,num,numQuoTot){
		if (isNaN(val) || val <= 0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire le quote";
			return "KO";				
		}
		if (isNaN(num)){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Inserire le quote";
			return "KO";				
		}
			var qRicevuto = val +"."+num+"0";
			var qCompleto = new Number(qRicevuto);
		if((qCompleto - numQuoTot)>0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Le quote devono essere pari o minore a quelle possedute";
			return "KO";
		}	
			
			
			return "OK";
	}
	
	function controlloQuoteAnte(val,num){		
		
		var qRicevuto = val +"."+num+"0";
		var qCompleto = new Number(qRicevuto);		
		var valoreQ = document.switchFundForm.NAV.value;
		var calContrQ = calcolaControvalore(valoreQ,qCompleto);
		var impMinimo = new Number(document.switchFundForm.isotsucFondoSwitch.value);
		
		if(calContrQ<impMinimo){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "Il controvalore delle quote inserite deve essere pari o maggiore dell&#39;importo minimo successivo";
			return "KO";
		}
			return "OK";
	}
	
	function controlloQuoteTotali(){			
			var impMinimo = new Number(document.switchFundForm.isotsucFondoSwitch.value);
			var conValue = new Number(document.switchFundForm.controvalore.value.replace(',','.'));
		if((impMinimo - conValue)>0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "il controvalore deve essere pari o maggiore dell'importo minimo successivo";
			return "KO";
		}
			return "OK";
	
	}
	function controlloQuoteTotaliMix(conValue){			
			var impMinimo = new Number(document.switchFundForm.isotsucFondoSwitch.value);
			var val = new Number(conValue.replace(',','.'));
		if((impMinimo - val)>0){
			$('erroreForm').style.display = '';
			$('messaggio').innerHTML = "il controvalore deve essere pari o maggiore dell'importo minimo successivo";
			return "KO";
		}
			return "OK";
	
	}
	function loadDettaglioUnico(){
		$( 'nessunFondo' ).style.display = 'none';
		$('avanti').style.display = 'none';
		$('elencoFondi').style.display = 'none';
 		$('dettaglioPac1').style.display = '';
 		$('dettaglioPac2').style.display = '';
 		$('dettaglioPac3').style.display = '';
 		$('dettaglioPac4').style.display = '';
 		$('dettaglioPac5').style.display = '';
 		$('cercaFondoSwitch').style.display = '';
 		$('closePac').style.display = 'none';
 			var valoriOption = document.switchFundForm.fondo.value;	
			var ind = valoriOption.lastIndexOf("|");
			var ParametroModulo = valoriOption.substring(ind+1,valoriOption.length);
			$('ParametroModulo').innerHTML = ParametroModulo;
			$('ParametroModulo').value = ParametroModulo;
			document.switchFundForm.numeroContratto.value = ParametroModulo;
			
			valoriOption = valoriOption.substring(0,ind);
			ind = valoriOption.lastIndexOf("|");
			RateResidue = valoriOption.substring(ind+1,valoriOption.length);
			$('RateRes').innerHTML = RateResidue;
			document.switchFundForm.rateResidue.value = RateResidue;
			
			valoriOption = valoriOption.substring(0,ind);    
			ind = valoriOption.lastIndexOf("|");
			ImportoRata = valoriOption.substring(ind+1,valoriOption.length);
			$('ImportRata').innerHTML = ImportoRata;
			document.switchFundForm.importoRata.value = ImportoRata;
			
			valoriOption = valoriOption.substring(0,ind);    
			ind = valoriOption.lastIndexOf("|");
			NumeroQuote = valoriOption.substring(ind+1,valoriOption.length);
			$('NumerQuote').innerHTML = NumeroQuote.replace('.',',');
			$('NumerQuote').value = NumeroQuote.replace('.',',');
			document.switchFundForm.numeroQuote.value = NumeroQuote;
			document.switchFundForm.quoteTotali.value = NumeroQuote;
			valoriOption = valoriOption.substring(0,ind);    
			ind = valoriOption.lastIndexOf("|");
			CodiceFondo = valoriOption.substring(ind+1,valoriOption.length);
			document.switchFundForm.codiceFondo.value = CodiceFondo;
			
			valoriOption = valoriOption.substring(0,ind);    
			ind = valoriOption.lastIndexOf("|");
			var tipoInvestimento = valoriOption.substring(ind+1,valoriOption.length);
			document.switchFundForm.tipoInvestimento.value= tipoInvestimento;
			
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codiceSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.codiceSocietaDiGestione.value = codiceSocietaGestione;
					valoriOption = valoriOption.substring(0,ind);    
					
					ind = valoriOption.lastIndexOf("|");
					var valoreQuota = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.NAV.value = valoreQuota;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoDivisa = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.valutaFondo.value=tipoDivisa;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var dataPrezzoQuota = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codAzioneFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.codiceAzione.value = codAzioneFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codFamFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.cfam.value = codFamFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var fondoSicav = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.Fondosicav.value = fondoSicav;
					
					if(fondoSicav=='S'){
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
						document.getElementById('tipoStrumento2').innerHTML = 'Sicav';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Sicav';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Sicav di destinazione';
					}else if(fondoSicav=='F'){
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
						document.getElementById('tipoStrumento2').innerHTML = 'Fondo';
						document.getElementById('tipoStrumentoOut').innerHTML = 'Fondo';
						document.getElementById('tipologiaStrumentoOut').innerHTML = 'Fondo di destinazione';
					}
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var cambio = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.cambio.value = cambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var datacambio = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.dataCambioValuta.value = datacambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var isin = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.isin.value = isin;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.descrizioneFondo.value = descFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseFisse = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseRimborso = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseSwitch = valoriOption.substring(ind+1,valoriOption.length);
					document.switchFundForm.speseFisse.value = speseSwitch;					

					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codicefida = valoriOption.substring(ind+1,valoriOption.length);
					
//LINK_SCHEDAFONDO
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					$('apriScheda').innerHTML ="<div><a title='apri la scheda fondo' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
					
					$('valoreQuota').innerHTML = valoreQuota.replace('.',',') + " " + tipoDivisa;
					$('dataValoreQuota').innerHTML = dataPrezzoQuota;
					document.switchFundForm.dataNAV.value = dataPrezzoQuota;
					
					var controValue = calcolaControvalore(valoreQuota,NumeroQuote);
					var valoreTotale =  controValue.toFixed(2);
					var valCambio = ""+(controValue/cambio).toFixed(2);
					if(tipoDivisa=="EUR"){
					$('controValue').innerHTML = "<strong>" + valoreTotale.replace('.',',') + " " + tipoDivisa+ "</strong>";
					var valCambio = ""+(controValue/cambio).toFixed(2);
					}else{
					$('controValue').innerHTML = "<strong>" +valoreTotale.replace('.',',') + " " + tipoDivisa + "</strong><br/><strong>" +valCambio.replace('.',',')  + " EUR</strong> al cambio del " +datacambio;
					var valCambio = ""+(controValue/cambio).toFixed(2);
					}
					
					document.switchFundForm.controvalore.value = valoreTotale.replace('.',',');
					document.switchFundForm.controvaloreValuta.value = valCambio.replace('.',',');
					
					if(document.switchFundForm.codiceSocietaDiGestione.value==101)
					  	decimaleQuoteSicav=2;
					else if(document.switchFundForm.codiceSocietaDiGestione.value==110)
						decimaleQuoteSicav=2;
					else
						decimaleQuoteSicav=3;
				
				if(tipoInvestimento=="PAC"){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = '';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = '';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = '';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicav').style.display = 'none';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPacUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="F"){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = '';
 					$('dettaglioSicav').style.display = 'none';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPicUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" &&decimaleQuoteSicav==2){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicav').style.display = 'none';
 					$('dettaglioSicavSch').style.display = '';
 					cambiaImportoSicavSch("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" &&decimaleQuoteSicav==3){
					$('dettaglioPac1').style.display = '';
					$('dettaglioPac2').style.display = 'none';
 					$('dettaglioPac3').style.display = '';
 					$('dettaglioPac4').style.display = 'none';
 					$('dettaglioPac5').style.display = 'none';
 					$('dettaglioPac6').style.display = 'none';
 					$('dettaglioPac7').style.display = 'none';
 					$('dettaglioSicav').style.display = '';
 					$('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoSicav("zero");
				}
		$('tipologiaStrumento').style.display = '';
	}
	function disabilitaFondi(a,num){
		$('erroreForm').style.display = 'none';
		for(var c=0;c<num;c++){
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var rad = "radioFondo" + c;
			var t = "testo" + c;
			var chiduiSi = "chiusuraPianoSi"+c;
			var chiduiNo = "chiusuraPianoNi"+c;
			
				if(c==a){
					$(sel).disabled=false;
					$(textImp).style.display = 'none';
					$(rad).checked = true;
				}else{
							
					$(sel).disabled=true;
					$(sel)[0].selected=true;
					$(textImp).style.display = 'none';
					$(t).style.display = 'none';
					$(rad).checked = false;
				}
	
		}				
	}
	function selPianoSi(){
						document.switchFundForm.chiusuraPianoSi.checked = true;
						document.switchFundForm.chiusuraPianoNo.checked = false;
						document.switchFundForm.chiusuraPiano.value = document.switchFundForm.chiusuraPianoSi.value;
	}
	
	function selPianoNo(){
					
						document.switchFundForm.chiusuraPianoNo.checked = true;
						document.switchFundForm.chiusuraPianoSi.checked = false;
						document.switchFundForm.chiusuraPiano.value = document.switchFundForm.chiusuraPianoNo.value;
					
			
	}
	
	function selPianoFundSi(a){	
		document.switchFundForm.chiusuraPiano.value = a.value;
	}
	
	function selPianoFundNo(a){
		document.switchFundForm.chiusuraPiano.value = a.value;			
	}
	
	function cambiaImportoFundPac(c,num,div){
	
			disabilitaFondi(c,num);
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var testo = "testo"+c;
				
			var index = $(sel).selectedIndex;
			var valore = $(sel)[index].value;
			
			var idImporto = "id=importo"+c;			
			var idQuote = "id=quote"+c;
			var nameImporto = "name=importo"+c;
			var nameQuote = "name=quote"+c;
			var idDecImporto= "id=decImporto"+c;
			var idDecQuote= "id=decQuote"+c;
			var nameDecImporto= "name=decImporto"+c;
			var nameDecQuote= "name=decQuote"+c;
			var closePac= "name=closePlanePac"+c;
			var quoteCorrisp = "<span id=resultImp"+c +" ></span>";
			var impCorrisp = "<span id=resultQuot"+c +" ></span>";
			
			var Fondosicav = document.switchFundForm.Fondosicav.value;
				if(valore==0){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = '&nbsp;';
					$(textImp).style.display = '';
				}else if(valore==1){
					if(Fondosicav=='F'){
						$(testo).innerHTML = 'Vuoi anche estinguere il PAC?';
						$(textImp).innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' onclick='javascript:selPianoFundNo(this)'; "+closePac+" />NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' onclick='javascript:selPianoFundSi(this)'; "+closePac+" />SI</div>";
						$(textImp).style.display = '';
						$(testo).style.display = '';
					}else{
						$(testo).innerHTML = '&nbsp;';
						$(textImp).innerHTML = '&nbsp;';
						$(textImp).style.display = '';
					}
				}else if(valore==2){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = "<input maxlength='9' autocomplete='off' "+ idImporto +" " + nameImporto + " type='text' class='importo' value='' onKeyUp='return EditImpFund(this,0);' onChange='return EditImpFund(this,0);'/> , <input autocomplete='off' "+ idDecImporto + " " +nameDecImporto +" type='text' class='importo2' maxlength='2' value='' onKeyUp='return EditImpDecFund(this,0);' onChange='return EditImpDecFund(this,0);'/>  " +quoteCorrisp +"";
					$(textImp).style.display = '';
				}else if(valore==3){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = "<input maxlength='9' autocomplete='off' " + idQuote +" " +nameQuote + " type='text' class='importo' value='' onKeyUp='return EditQuoteFund(this,0);' onChange='return EditQuoteFund(this,0);'/> , <input autocomplete='off' "+ idDecQuote + " " +nameDecQuote +" type='text' class='importo3' maxlength='3' value='' onKeyUp='return EditQuoteDecFund(this,0);' onChange='return EditQuoteDecFund(this,0);'/> " +impCorrisp+"";
					$(textImp).style.display = '';
			    }      
	}
	
	function EditImpFund(val){	
		var v = val.value;
		var nam = val.name;
		var imp=0;
		var dec=0;
		var ind = "";
		var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameImporto = "importo"+c;
					var nameDecImporto= "decImporto"+c;
					var resultImp ="resultImp"+c;
						if(nam==nameImporto){
				 			dec = $(nameDecImporto).value;
				 			ind = resultImp;
						}
				}
				var valQuot = new Number(document.switchFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res/valQuot).toFixed(3);
				if(!isNaN(resTot))
					$(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
				else
					$(ind).innerHTML ='';
	
				
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	
	
	function EditImpDecFund(val){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			indice = valoriOption.indexOf("|");
			var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameImporto = "importo"+c;
					var nameDecImporto= "decImporto"+c;
					var resultImp ="resultImp"+c;
						if(nam==nameDecImporto){
				 			imp = $(nameImporto).value;
				 			ind = resultImp;
						}
				}
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res/valQuot).toFixed(3);
				if(!isNaN(resTot))
					$(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
				else
					$(ind).innerHTML ='';
	
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuoteFund(val){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			indice = valoriOption.indexOf("|");
			var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameQuote = "quote"+c;
					var nameDecQuote= "decQuote"+c;
					var resultQuot ="resultQuot"+c;
						if(nam==nameQuote){
				 			dec = $(nameDecQuote).value;
				 			ind = resultQuot;
						}
			}
				var valQuot = new Number(document.switchFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res*valQuot).toFixed(2);
					if(!isNaN(resTot))
						$(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
					else
						$(ind).innerHTML ='';
	
					document.switchFundForm.valoreImportoPerQuote.value =resTot;
					document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDecFund(val){
		var v = val.value;
		var nam = val.name;
		var imp=0;
		var dec=0;
		var ind = "";
		var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
					var nameQuote = "quote"+c;
					var nameDecQuote= "decQuote"+c;
					var resultQuot ="resultQuot"+c;
						if(nam==nameDecQuote){
							imp = $(nameQuote).value;
						 	ind = resultQuot;
						}
			}
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				$(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				$(ind).innerHTML ='';
		
		document.switchFundForm.valoreImportoPerQuote.value =resTot;
		document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
		
	
	function cambiaImportoFundPic(c,num,div){
				
			disabilitaFondi(c,num);
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var testo = "testo"+c;
			
			var index = $(sel).selectedIndex;
			var valore = $(sel)[index].value;

			var divisa = document.switchFundForm.valutaFondo.value;
			var dataCambio = document.switchFundForm.dataCambioValuta.value;
			var idImporto = "id=importo"+c;
			var idQuote = "id=quote"+c;
			var nameImporto = "name=importo"+c;
			var nameQuote = "name=quote"+c;
			var idDecImporto= "id=decImporto"+c;
			var idDecQuote= "id=decQuote"+c;
			var nameDecImporto= "name=decImporto"+c;
			var nameDecQuote= "name=decQuote"+c;
			var cambioCorrisp = "<span id=valoreCambio"+c +" ></span>";
			var quoteCorrisp = "<span id=resultImp"+c +" ></span>";
			var impCorrisp = "<span id=resultQuot"+c +" ></span>";
				if(valore==0){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = '&nbsp;';
					$(textImp).style.display = '';
				}else if(valore==1){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = '&nbsp;';
					$(textImp).style.display = '';
				}else if(valore==2){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = "<input maxlength='9' autocomplete='off' "+ idImporto + " " +nameImporto + " type='text' class='importo' value='' onKeyUp='return EditImpPic(this,0);' onChange='return EditImpPic(this,0);'/> , <input autocomplete='off' "+ idDecImporto + " " + nameDecImporto+" type='text' class='importo2' maxlength='2' value='' onKeyUp='return EditImpDecPic(this,0);' onChange='return EditImpDecPic(this,0);'/> "+quoteCorrisp+"";
					$(textImp).style.display = '';
				}else if(valore==3){
					$(testo).innerHTML = '&nbsp;';
					$(textImp).innerHTML = "<input maxlength='9' autocomplete='off' " + idQuote + " " + nameQuote + " type='text' class='importo' value='' onKeyUp='return EditQuotePic(this,0);' onChange='return EditQuotePic(this,0);'/> , <input autocomplete='off' "+ idDecQuote + " " + nameDecQuote +" type='text' class='importo3' maxlength='3' value='' onKeyUp='return EditQuoteDecPic(this,0);' onChange='return EditQuoteDecPic(this,0);'/> " + impCorrisp + "";
					$(textImp).style.display = '';
			    }      
	}
	
		function EditImpPic(val,div){
				var v = val.value;
				var nam = val.name;
				var imp=0;
				var dec=0;
				var ind = "";
				var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
				var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
				var indice = valoriOption.indexOf("*");
				indice = valoriOption.indexOf("|");
				var numeroFondi = valoriOption.substring(0,indice);
						for(var c=0; c<numeroFondi;c++){
							var nameImporto = "importo"+c;
							var nameDecImporto= "decImporto"+c;
							var resultImp ="resultImp"+c;
							var valoreCambio = "valoreCambio"+c;
									if(nam==nameImporto){
				 					dec = $(nameDecImporto).value;
				 					ind = resultImp;
								}
						}
				var valQuot = new Number(document.switchFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res/valQuot).toFixed(3);
					if(!isNaN(resTot))
						$(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
					else
						$(ind).innerHTML ='';
	
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				document.switchFundForm.valoreImportoPerQuote.value =res;
		}
	
	function EditImpDecPic(val,div){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
				var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
				var indice = valoriOption.indexOf("*");
				indice = valoriOption.indexOf("|");
				var numeroFondi = valoriOption.substring(0,indice);
					for(var c=0; c<numeroFondi;c++){
						var nameImporto = "importo"+c;
						var nameDecImporto= "decImporto"+c;
						var resultImp ="resultImp"+c;
						if(nam==nameDecImporto){
						 imp = $(nameImporto).value;
						 ind = resultImp;
						}
					}
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
			$(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
			$(ind).innerHTML ='';
			
			document.switchFundForm.valoreQuotePerImporto.value =resTot;
			document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuotePic(val,div){
	var v = val.value;
	var nam = val.name;
	var imp=0;
	var dec=0;
	var ind = "";
	var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
				var nameQuote = "quote"+c;
				var nameDecQuote= "decQuote"+c;
				var resultQuot ="resultQuot"+c;
				if(nam==nameQuote){
				 dec = $(nameDecQuote).value;
				 ind = resultQuot;
				}
			}
	var valQuot = new Number(document.switchFundForm.NAV.value);
	var res = new Number(v +"."+dec);
	var resTot = (res*valQuot).toFixed(2);
	if(!isNaN(resTot))
	$(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
	else
	$(ind).innerHTML ='';
	
	document.switchFundForm.valoreImportoPerQuote.value =resTot;
	document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	
	
	
	function EditQuoteDecPic(val,div){
	var v = val.value;
	var nam = val.name;
	var imp=0;
	var dec=0;
	var ind = "";
	var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
				var nameQuote = "quote"+c;
				var nameDecQuote= "decQuote"+c;
				var resultQuot ="resultQuot"+c;
				if(nam==nameDecQuote){
				 imp = $(nameQuote).value;
				 ind = resultQuot;
				}
			}
	var valQuot = new Number(document.switchFundForm.NAV.value);
	var res = new Number(imp +"."+v);
	var resTot = (res*valQuot).toFixed(2);
	if(!isNaN(resTot))
		$(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
	else
		$(ind).innerHTML ='';
	
		document.switchFundForm.valoreImportoPerQuote.value =resTot;
		document.switchFundForm.valoreQuotePerImporto.value =res;
	}

	function cambiaImportoFundPacUnico(c){
			var Fondosicav = document.switchFundForm.Fondosicav.value;
			var div = document.switchFundForm.valutaFondo.value;
			$('erroreForm').style.display = 'none';
			var index = document.switchFundForm.selectImportoPac.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.switchFundForm.selectImportoPac[0].selected=true;
				}
			else
				var valore = document.switchFundForm.selectImportoPac[index].value;
			if(valore==0){
				$('textImportoPac').innerHTML = '&nbsp;';
				$('testoPac').innerHTML = '&nbsp;';
			}else if(valore==1){
				if(Fondosicav=='F'){
					$('textImportoPac').innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' name='chiusuraPianoPac' onclick='javascript:selPianoFundNo(this)';/>NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' name='chiusuraPianoPac' onclick='javascript:selPianoFundSi(this)';/>SI</div>";
					$('testoPac').innerHTML = 'Vuoi anche estinguere il PAC?';
				}else{
					$('textImportoPac').innerHTML = '&nbsp;';
					$('testoPac').innerHTML = '&nbsp;';
				}
			}else if(valore==2){
				$('testoPac').innerHTML = '&nbsp;';
				$('textImportoPac').innerHTML = '<input maxlength="9" autocomplete="off" name="importoPac" type="text" class="importo" value="" onKeyUp="return EditImpUnico(this,0);" onChange="return EditImpUnico(this,0);"/> , <input autocomplete="off" name="decImportoPac" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecUnico(this,0);" onChange="return EditImpDecUnico(this,0);"/> <span id="resultImpUnico"></span>';
			}else if(valore==3){
				$('testoPac').innerHTML = '&nbsp;';
				$('textImportoPac').innerHTML = '<input maxlength="9" autocomplete="off" name="quotePac" type="text" class="importo" value="" onKeyUp="return EditQuoteUnico(this,0);" onChange="return EditQuoteUnico(this,0);"/> , <input autocomplete="off" name="decQuotePac" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecUnico(this,0);" onChange="return EditQuoteDecUnico(this,0);"/> <span id="resultQuotUnico">';
			}       
	}
	
	function EditImpUnico(val){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decImportoPac.value);
		var valQuot = new Number(document.switchFundForm.NAV.value);
		
		//document.switchFundForm.importo.value = $('controValue').innerHTML.replace(' EUR','');
		var res = new Number(v +"."+dec);
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				$('resultImpUnico').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpUnico').innerHTML ='';
				
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				document.switchFundForm.valoreImportoPerQuote.value =res;
	}
		
	
	function EditImpDecUnico(val){
	var v = val.value;
		var imp= new Number(document.switchFundForm.importoPac.value);
				
			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		//document.switchFundForm.importo.value = $('controValue').innerHTML.replace(' EUR','');
		
		var res = new Number(imp +"."+v);
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				$('resultImpUnico').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpUnico').innerHTML ='';
				
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuoteUnico(val){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decQuotePac.value);
				
			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var res = new Number(v +"."+dec);
		//document.switchFundForm.numeroQuote.value = $("NumerQuote").value;
		
		var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				$('resultQuotUnico').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</span>&nbsp;EUR</strong>";
			else
				$('resultQuotUnico').innerHTML ='';
				
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDecUnico(val){
	var v = val.value;
		var imp= new Number(document.switchFundForm.quotePac.value);
				
			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var res = new Number(imp +"."+v);
		//document.switchFundForm.numeroQuote.value = $("NumerQuote").value;
		
		var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				$('resultQuotUnico').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</span>&nbsp;EUR</strong>";
			else
				$('resultQuotUnico').innerHTML ='';
				
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	
	
	function cambiaImportoFundPicUnico(c){
			var div = document.switchFundForm.valutaFondo.value;
			$('erroreForm').style.display = 'none';
			var index = document.switchFundForm.selectImportoPic.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.switchFundForm.selectImportoPic[0].selected=true;
				}
			else
				var valore = document.switchFundForm.selectImportoPic[index].value;

			if(valore==0){
				$('textImportoPic').innerHTML = '&nbsp;';
				$('testoPic').innerHTML = '&nbsp;';
			}else if(valore==1){
				$('textImportoPic').innerHTML = '&nbsp;';
				$('testoPic').innerHTML = '&nbsp;';
				
			}else if(valore==2){
				$('testoPic').innerHTML = '&nbsp;';
				$('textImportoPic').innerHTML = '<input maxlength="9" autocomplete="off" name="importoPic" type="text" class="importo" value="" onKeyUp="return EditImpPicUnico(this,0);" onChange="return EditImpPicUnico(this,0);"/> , <input autocomplete="off" name="decImportoPic" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecPicUnico(this,0);" onChange="return EditImpDecPicUnico(this,0);"/> <span id="resultImpUnicoPic"></span>';
			}else if(valore==3){
				$('testoPic').innerHTML = '&nbsp;';
				$('textImportoPic').innerHTML = '<input maxlength="9" autocomplete="off" name="quotePic" type="text" class="importo" value="" onKeyUp="return EditQuotePicUnico(this,0);" onChange="return EditQuotePicUnico(this,0);"/> , <input autocomplete="off" name="decQuotePic" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecPicUnico(this,0);" onChange="return EditQuoteDecPicUnico(this,0);"/> <span id="resultQuotUnicoPic"></span>';
			}      
	}
	
	function EditImpPicUnico(val,div){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decImportoPic.value);		
		var valQuot = new Number(document.switchFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = (res/valQuot).toFixed(3);
		if(!isNaN(resTot))
			$('resultImpUnicoPic').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
		else
			$('resultImpUnicoPic').innerHTML ='';
			
		document.switchFundForm.valoreQuotePerImporto.value = resTot;
		document.switchFundForm.valoreImportoPerQuote.value = res;
				
	}
	
	function EditImpDecPicUnico(val,div){
		var v = val.value;
		var imp= new Number(document.switchFundForm.importoPic.value);			
		var valQuot = new Number(document.switchFundForm.NAV.value);						
		var res = new Number(imp +"."+v);		
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				$('resultImpUnicoPic').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpUnicoPic').innerHTML ='';
				
		document.switchFundForm.valoreQuotePerImporto.value = resTot;
		document.switchFundForm.valoreImportoPerQuote.value = res;
				
	}
	
	
	
	function EditQuotePicUnico(val,div){
		var v = val.value;
		var imp= new Number(document.switchFundForm.decQuotePic.value);			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var res = new Number(v +"."+imp);
		var resTot = (res*valQuot).toFixed(2);			
			if(!isNaN(resTot))
				$('resultQuotUnicoPic').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				$('resultQuotUnicoPic').innerHTML ='';
				
			document.switchFundForm.valoreImportoPerQuote.value =resTot;
			document.switchFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	function EditQuoteDecPicUnico(val,div){
			var v = val.value;
			var imp= new Number(document.switchFundForm.quotePic.value);
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
							
			if(!isNaN(resTot))
				$('resultQuotUnicoPic').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				$('resultQuotUnicoPic').innerHTML ='';
				
			document.switchFundForm.valoreImportoPerQuote.value =resTot;
			document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	function calcolaControvaloreCambio(val,num){	
	
	var c = Math.round(val*Math.pow(10,3))/Math.pow(10,3);
	var d = Math.round(num*Math.pow(10,3))/Math.pow(10,3);
	
	var t = c*d;
	var tot = new Number(t);
	return tot;
	}
	
	function cambiaImportoSicav(c){
			var div = document.switchFundForm.valutaFondo.value;
			$('erroreForm').style.display = 'none';
			var index = document.switchFundForm.selectImportoSicav.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.switchFundForm.selectImportoSicav[0].selected=true;
				}
			else
				var valore = document.switchFundForm.selectImportoSicav[index].value;

			if(valore==0){
				$('textImportoSicav').innerHTML = '&nbsp;';
				$('testoSicav').innerHTML = '&nbsp;';
				$('closePac').style.display = 'none';
			}else if(valore==1){
				$('textImportoSicav').innerHTML = '&nbsp;';
				$('testoSicav').innerHTML = '&nbsp;';
				$('closePac').style.display = '';
			}else if(valore==2){
				$('closePac').style.display = 'none';
				$('testoSicav').innerHTML = '&nbsp;';
				if(div=="EUR"){
				$('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicav" type="text" class="importo" value="" onKeyUp="return EditImpSicav(this,0);" onChange="return EditImpSicav(this,0);"/> , <input autocomplete="off" name="decImportoSicav" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicav(this,0);" onChange="return EditImpDecSicav(this,0);"/> <span id="resultImpSicav"></span>';
				}else{
				$('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicav" type="text" class="importo" value="" onKeyUp="return EditImpSicav(this,1);" onChange="return EditImpSicav(this,1);"/> , <input autocomplete="off" name="decImportoSicav" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicav(this,1);" onChange="return EditImpDecSicav(this,1);"/> <span id="resultImpSicav"></span>';
				}
			}else if(valore==3){
				$('closePac').style.display = 'none';
				$('testoSicav').innerHTML = '&nbsp;';
				if(div=="EUR"){
				$('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicav" type="text" class="importo" value="" onKeyUp="return EditQuoteSicav(this,0);" onChange="return EditQuoteSicav(this,0);"/> , <input autocomplete="off" name="decQuoteSicav" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecSicav(this,0);" onChange="return EditQuoteDecSicav(this,0);"/> <span id="resultQuotSicav"></span>';
				}else{
				$('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicav" type="text" class="importo" value="" onKeyUp="return EditQuoteSicav(this,1);" onChange="return EditQuoteSicav(this,1);"/> , <input autocomplete="off" name="decQuoteSicav" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecSicav(this,1);" onChange="return EditQuoteDecSicav(this,1);"/> <span id="resultQuotSicav"></span>';
				}
			}      
	}
	
	
	function EditImpSicav(val,div){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decImportoSicav.value);		
		var valQuot = new Number(document.switchFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = 0;
		var divisa = document.switchFundForm.valutaFondo.value;
		
		if(div==1){
			var data = document.switchFundForm.dataCambioValuta.value;
			var cambio = new Number(document.switchFundForm.cambio.value);
			var cam = (res*cambio).toFixed(3);
			resTot = (res/valQuot*cambio).toFixed(3);
			if(!isNaN(cam))
				$('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpSicav').innerHTML ='';
		}else if(div==0){
			var data = document.switchFundForm.dataCambioValuta.value;
			var cambio = 1;
			var cam = (res*cambio).toFixed(3);
			resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				$('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpSicav').innerHTML ='';
		}		
				document.switchFundForm.valoreQuotePerImporto.value = resTot;
				document.switchFundForm.valoreImportoPerQuote.value = res;
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				
	}
	
	function EditImpDecSicav(val,div){
				var v = val.value;
				var imp= new Number(document.switchFundForm.importoSicav.value);			
				var valQuot = new Number(document.switchFundForm.NAV.value);						
				var res = new Number(imp +"."+v);		
				var resTot = 0;
				var divisa = document.switchFundForm.valutaFondo.value;
		
				if(div==1){
					var data = document.switchFundForm.dataCambioValuta.value;
					var cambio = new Number(document.switchFundForm.cambio.value);
					var cam = (res*cambio).toFixed(3);
					resTot = (res/valQuot*cambio).toFixed(3);
						if(!isNaN(resTot))
							$('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							$('resultImpSicav').innerHTML ='';
				}else if(div==0){
					var cambio = 1;
					var cam = (res*cambio).toFixed(3);
					resTot = (res/valQuot).toFixed(3);
						if(!isNaN(resTot))
							$('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							$('resultImpSicav').innerHTML ='';
				}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =res;
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				
	}
	
	
	
	function EditQuoteSicav(val,div){
	
		var v = val.value;
		var imp= new Number(document.switchFundForm.decQuoteSicav.value);			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var cambio = new Number(document.switchFundForm.cambio.value);
		var res = new Number(v +"."+imp);
		var resTot = 0;
		var divisa = document.switchFundForm.valutaFondo.value;
		var dataCambio = document.switchFundForm.dataCambioValuta.value;
		if(div==1){
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					$('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					$('resultQuotSicav').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					$('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					$('resultQuotSicav').innerHTML ='';
		}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	
	function EditQuoteDecSicav(val,div){
			var v = val.value;
			var imp= new Number(document.switchFundForm.quoteSicav.value);
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var cambio = document.switchFundForm.cambio.value;
			var res = new Number(imp +"."+v);
			var resTot = 0;
			var divisa = document.switchFundForm.valutaFondo.value;
			var dataCambio = document.switchFundForm.dataCambioValuta.value;
		if(div==1){				
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					$('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					$('resultQuotSicav').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					$('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					$('resultQuotSicav').innerHTML ='';
		}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	function cambiaImportoSicavSch(c){
			var div = document.switchFundForm.valutaFondo.value;
			$('erroreForm').style.display = 'none';
			var index = document.switchFundForm.selectImportoSicavSch.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.switchFundForm.selectImportoSicavSch[0].selected=true;
				}
			else
				var valore = document.switchFundForm.selectImportoSicavSch[index].value;

			if(valore==0){
				$('textImportoSicavSch').innerHTML = '&nbsp;';
				$('testoSicavSch').innerHTML = '&nbsp;';
				$('closePac').style.display = 'none';
			}else if(valore==1){
				$('textImportoSicavSch').innerHTML = '&nbsp;';
				$('testoSicavSch').innerHTML = '&nbsp;';
				$('closePac').style.display = '';
			}else if(valore==2){
				$('closePac').style.display = 'none';
				$('testoSicavSch').innerHTML = '&nbsp;';
				if(div=="EUR"){
				$('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicavSch" type="text" class="importo" value="" onKeyUp="return EditImpSicavSch(this,0);" onChange="return EditImpSicavSch(this,0);"/> , <input autocomplete="off" name="decImportoSicavSch" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicavSch(this,0);" onChange="return EditImpDecSicavSch(this,0);"/> <span id="resultImpSicavSch"></span>';
				}else{
				$('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicavSch" type="text" class="importo" value="" onKeyUp="return EditImpSicavSch(this,1);" onChange="return EditImpSicavSch(this,1);"/> , <input autocomplete="off" name="decImportoSicavSch" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicavSch(this,1);" onChange="return EditImpDecSicavSch(this,1);"/> <span id="resultImpSicavSch"></span>';
				}
			}else if(valore==3){
				$('closePac').style.display = 'none';
				$('testoSicavSch').innerHTML = '&nbsp;';
				if(div=="EUR"){
				$('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicavSch" type="text" class="importo" value="" onKeyUp="return EditQuoteSicavSch(this,0);" onChange="return EditQuoteSicavSch(this,0);"/> , <input autocomplete="off" name="decQuoteSicavSch" type="text" class="importo3" maxlength="2" value="" onKeyUp="return EditQuoteDecSicavSch(this,0);" onChange="return EditQuoteDecSicavSch(this,0);"/> <span id="resultQuotSicavSch"></span>';
				}else{
				$('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicavSch" type="text" class="importo" value="" onKeyUp="return EditQuoteSicavSch(this,1);" onChange="return EditQuoteSicavSch(this,1);"/> , <input autocomplete="off" name="decQuoteSicavSch" type="text" class="importo3" maxlength="2" value="" onKeyUp="return EditQuoteDecSicavSch(this,1);" onChange="return EditQuoteDecSicavSch(this,1);"/> <span id="resultQuotSicavSch"></span>';
				}
			}      
	}
	
	
	function EditImpSicavSch(val,div){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decImportoSicavSch.value);		
		var valQuot = new Number(document.switchFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = 0;
		var divisa = document.switchFundForm.valutaFondo.value;
		
		if(div==1){
			var data = document.switchFundForm.dataCambioValuta.value;
			var cambio = new Number(document.switchFundForm.cambio.value);
			var cam = (res*cambio).toFixed(2);
			resTot = (res/valQuot*cambio).toFixed(2);
			if(!isNaN(cam))
				$('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpSicavSch').innerHTML ='';
		}else if(div==0){
			var data = document.switchFundForm.dataCambioValuta.value;
			var cambio = 1;
			var cam = (res*cambio).toFixed(2);
			resTot = (res/valQuot).toFixed(2);
			if(!isNaN(resTot))
				$('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				$('resultImpSicavSch').innerHTML ='';
		}		
				document.switchFundForm.valoreQuotePerImporto.value = resTot;
				document.switchFundForm.valoreImportoPerQuote.value = res;
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				
	}
	
	function EditImpDecSicavSch(val,div){
				var v = val.value;
				var imp= new Number(document.switchFundForm.importoSicavSch.value);			
				var valQuot = new Number(document.switchFundForm.NAV.value);						
				var res = new Number(imp +"."+v);		
				var resTot = 0;
				var divisa = document.switchFundForm.valutaFondo.value;
		
				if(div==1){
					var data = document.switchFundForm.dataCambioValuta.value;
					var cambio = new Number(document.switchFundForm.cambio.value);
					var cam = (res*cambio).toFixed(2);
					resTot = (res/valQuot*cambio).toFixed(2);
						if(!isNaN(resTot))
							$('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							$('resultImpSicavSch').innerHTML ='';
				}else if(div==0){
					var cambio = 1;
					var cam = (res*cambio).toFixed(2);
					resTot = (res/valQuot).toFixed(2);
						if(!isNaN(resTot))
							$('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							$('resultImpSicavSch').innerHTML ='';
				}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =res;
				document.switchFundForm.valoreQuotePerImporto.value =resTot;
				
	}
	
	
	
	function EditQuoteSicavSch(val,div){
	
		var v = val.value;
		var imp= new Number(document.switchFundForm.decQuoteSicavSch.value);			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var cambio = new Number(document.switchFundForm.cambio.value);
		var res = new Number(v +"."+imp);
		var resTot = 0;
		var divisa = document.switchFundForm.valutaFondo.value;
		var dataCambio = document.switchFundForm.dataCambioValuta.value;
		if(div==1){
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					$('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					$('resultQuotSicavSch').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					$('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					$('resultQuotSicavSch').innerHTML ='';
		}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	
	function EditQuoteDecSicavSch(val,div){
			var v = val.value;
			var imp= new Number(document.switchFundForm.quoteSicavSch.value);
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var cambio = document.switchFundForm.cambio.value;
			var res = new Number(imp +"."+v);
			var resTot = 0;
			var divisa = document.switchFundForm.valutaFondo.value;
			var dataCambio = document.switchFundForm.dataCambioValuta.value;
		if(div==1){				
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					$('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					$('resultQuotSicavSch').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					$('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					$('resultQuotSicavSch').innerHTML ='';
		}		
				document.switchFundForm.valoreImportoAlCambio.value = cam;
				document.switchFundForm.valoreImportoPerQuote.value =resTot;
				document.switchFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	function cambiaImporto(){
			$('erroreForm').style.display = 'none';
			var index = document.switchFundForm.selectImporto.selectedIndex;	   
			var valore = document.switchFundForm.selectImporto[index].value;
			var div = document.switchFundForm.valutaFondo.value;
			var fund = document.switchFundForm.fondo.value;			
			var indice = fund.indexOf("|");
			var tipo = fund.substring(0,indice);
			var Fondosicav = document.switchFundForm.Fondosicav.value;
			if(valore==0){
				$('textImporto').innerHTML = '&nbsp;';
				$('testo').innerHTML = '&nbsp;';
			}else if(valore==1){
				if(tipo=="PAC"){
					if(Fondosicav=='F'){
						$('testo').innerHTML = 'Vuoi anche estinguere il PAC?';
						$('textImporto').innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' name='chiusuraPianoNo' onclick='javascript:selPianoFundNo(this)';/>NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' name='chiusuraPianoSi' onclick='javascript:selPianoFundSi(this)';/>SI</div>";
					}else{
						$('textImporto').innerHTML = '&nbsp;';
						$('testo').innerHTML = '&nbsp;';
					}
				}else if(tipo=="PIC"){
					$('textImporto').innerHTML = '&nbsp;';
					$('testo').innerHTML = '&nbsp;';
				}
			}else if(valore==2){
				$('testo').innerHTML = '&nbsp;';
				$('textImporto').innerHTML = '<input maxlength="9" autocomplete="off" name="importoUnico" type="text" class="importo" value="" onKeyUp="return EditImp(this,0);" onChange="return EditImp(this,0);"/> , <input autocomplete="off" name="decImportoUnico" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDec(this,0);" onChange="return EditImpDec(this,0);"/> EUR corrispondenti a <strong><span id="resultImp"></span></strong>&nbsp;quote';
				
			}else if(valore==3){
				$('testo').innerHTML = '&nbsp;';
				$('textImporto').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteUnico" type="text" class="importo" value="" onKeyUp="return EditQuote(this,0);" onChange="return EditQuote(this,0);"/> , <input autocomplete="off" name="decQuoteUnico" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDec(this,0);" onChange="return EditQuoteDec(this,0);"/> corrispondenti a <strong><span id="resultQuot"></span>&nbsp;EUR</strong>';
			}
	}
	
	function EditImp(val,div){
			var v = val.value;
			var dec= new Number(document.switchFundForm.decImportoUnico.value);			
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(v +"."+dec);
			var resTot = (res/valQuot).toFixed(3);
			
			if(!isNaN(resTot))
				$('resultImp').innerHTML = resTot.replace('.',',');
			else
				$('resultImp').innerHTML ='';				
				
			document.switchFundForm.valoreQuotePerImporto.value =resTot;
			document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditImpDec(val,div){
		var v = val.value;
		var imp= new Number(document.switchFundForm.importoUnico.value);			
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var res = new Number(imp +"."+v);
		var resTot = (res/valQuot).toFixed(3);
		
		if(!isNaN(resTot))
			$('resultImp').innerHTML = resTot.replace('.',',');
		else
			$('resultImp').innerHTML ='';
		
		document.switchFundForm.valoreQuotePerImporto.value =resTot;
		document.switchFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuote(val,div){
		var v = val.value;
		var dec= new Number(document.switchFundForm.decQuoteUnico.value);
		var valQuot = new Number(document.switchFundForm.NAV.value);
		var res = new Number(v +"."+dec);
		var resTot = (res*valQuot).toFixed(2);
			
		if(!isNaN(resTot))
			$('resultQuot').innerHTML = resTot.replace('.',',');
		else
			$('resultQuot').innerHTML ='';
		
		document.switchFundForm.valoreImportoPerQuote.value =resTot;
		document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDec(val,div){
			var v = val.value;
			var imp= new Number(document.switchFundForm.quoteUnico.value);
			var valQuot = new Number(document.switchFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
						
			if(!isNaN(resTot))
				$('resultQuot').innerHTML = resTot.replace('.',',');
			else
				$('resultQuot').innerHTML ='';
			
			document.switchFundForm.valoreImportoPerQuote.value =resTot;
			document.switchFundForm.valoreQuotePerImporto.value =res;
	}
	
	
	function conferma(){
		var prosegui = "OK";
		var messAnteprima = $('messaggioAnteprima');
		var errorForm = $('erroreFormAnteprima');
		
		
		if(document.switchFundForm.messaggiAvvertenze.value=="OK" ){
			if(document.switchFundForm.checkAvvertenze.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione delle avvertenze";
				errorForm.scrollTo();
				return;
			}
		}
		if(document.switchFundForm.messaggiInducement.value=="OK" ){			
		
		if( document.switchFundForm.checkIncentivi.checked==false){
			prosegui="KO";
			errorForm.style.display = '';
			messAnteprima.style.display = '';
			messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative agli incentivi";
			errorForm.scrollTo();
			return;
		}
		}
		if(document.switchFundForm.reinvestimento.value!="S"){
			prosegui="OK";
		}else if (document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="S"){
			if(document.switchFundForm.flagReinvestimento.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare la destinazione dei proventi";
				errorForm.scrollTo();
				return;
			}		
		}else if (document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="N"){ 
			if(document.switchFundForm.flagReinvestimento[0].checked==false && document.switchFundForm.flagReinvestimento[1].checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare la destinazione dei proventi";
				errorForm.scrollTo();
				return;
			}
		}
		
		if(document.switchFundForm.primaSottoscrizione.value=="S"){
		
		if(document.switchFundForm.checkProspetto.disabled){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo";
				errorForm.scrollTo();
				return;
			}else if(document.switchFundForm.checkProspetto.checked==false){
				prosegui="KO";
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa";
				errorForm.scrollTo();
				return;
			}
			if(document.switchFundForm.Fondosicav.value=="F"){
				if(document.switchFundForm.flagPrivacy[0].checked==false && document.switchFundForm.flagPrivacy[1].checked==false){
					prosegui="KO";
					errorForm.style.display = '';
					messAnteprima.style.display = '';
					messAnteprima.innerHTML = "Per proseguire occorre dichiarare di dare o meno il consenso al trattamento dei dati personali";
					errorForm.scrollTo();
					return;
				}
			}
			if (document.switchFundForm.dichiarazioni.checked==false){		
				prosegui="KO";	
				errorForm.style.display = '';
				messAnteprima.style.display = '';
				messAnteprima.innerHTML = "Per proseguire occorre dichiarare di avere preso visione delle dichiarazioni di conferme";
				errorForm.scrollTo();
				return;
			}
		

		
		}else if(document.switchFundForm.primaSottoscrizione.value=="N"){
			prosegui="OK";
		}
		
		if( prosegui == "OK"){
			var deposito = document.switchFundForm.deposito.value;
			var Fondosicav = document.switchFundForm.Fondosicav.value;
			var flagReinvestimento ="";
			
			if(document.switchFundForm.reinvestimento.value=="S"){
			  	if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="N"){
					if(document.switchFundForm.flagReinvestimento[0].checked)
						flagReinvestimento = document.switchFundForm.flagReinvestimento[0].value;
					else if(document.switchFundForm.flagReinvestimento[1].checked)
						flagReinvestimento = document.switchFundForm.flagReinvestimento[1].value;
				}else if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="S"){
					if(document.switchFundForm.flagReinvestimento.checked)
						flagReinvestimento = document.switchFundForm.flagReinvestimento.value;
				}else
					flagReinvestimento = document.switchFundForm.flagReinv.value;
			}
			
			
			
			document.switchFundForm.action="switchFundConfirm.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&deposito=" +deposito +"&Fondosicav="+Fondosicav+"&flagReinvestimento="+flagReinvestimento;
			document.switchFundForm.submit();
		}
	}
	
	function getDatiFacta(){
		var numInt  = document.switchFundForm.numIntestatari.value;
		var datiFatca ="";
		
		if(numInt>1){
			for(var i=0; i<numInt; i++){
			
				var ndg = $('NDG' + i).value;
				var tin =	$('maskedField' + i).value;				
				var codNaz = $('#selectResidenzaFiscale' + i).find('option:selected').val();
				
				if(datiFatca.length>0){
					datiFatca = datiFatca + "|" + ndg + "/" + codNaz + "/noValue";
				}else{
					datiFatca = ndg + "/" + codNaz + "/noValue";
				}
			}
		}else{
			var ndg = $('NDG1').value;
				var tin =	$('maskedField1').value;
				var codNaz = $('#selectResidenzaFiscale1').find('option:selected').val();
				datiFatca = ndg + "/" + codNaz + "/noValue";		
		}
		return datiFatca;
	}
	function docFatca(banca){
	
	var id = document.switchFundForm.idDocFacta.value;
	var prodotto = document.switchFundForm.idTypeFacta.value;
			if(banca==1){
			open("/wscmn/doc/InformativaFatcaBPM.pdf");
			document.switchFundForm.checkDocFatca.disabled=false;
			}else if(banca==19){
			var link = cgi_script+ "/common/apriDocumento.do?id=" + id + "&prodotto=" + prodotto; 
			open(link);
			document.switchFundForm.checkDocFatca.disabled=false;
			}
	}
	
	
	
	function controlloFacta(){
	
		
	
		var mesCheckDocFatca = $('messaggioCheckDocFatca');
		var mesResidenzaFatca = $('messaggioResidenzaFatca');
		var mesTinFatca = $('messaggioTinFatca');
		var mesCheckDatiFatca = $('messaggioCheckDatiFatca');
		
		mesCheckDocFatca.style.display = 'none';
		mesResidenzaFatca.style.display = 'none';
		mesTinFatca.style.display = 'none';
		mesCheckDatiFatca.style.display = 'none';
		
		var errorForm = $('erroreFormAnteprima');
		
		var numInt  = document.switchFundForm.numIntestatari.value;
		if(!document.switchFundForm.checkDocFatca.checked){
			errorForm.style.display = '';
			mesCheckDocFatca.style.display = '';
			mesCheckDocFatca.innerHTML = "Prendi visione dell'informativa FATCA aprendo il relativo pdf.";
			return false;
			}
		
		if(numInt>1){
				

				for(var i=0; i<numInt; i++){
					if($('#selectResidenzaFiscale' + i).find('option:selected').text() == '-- seleziona --'){
						errorForm.style.display = '';
						mesResidenzaFatca.style.display = '';
						mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
						//errorForm.scrollTo();
						return false;
					}
				}
				
				for(var i=0; i<numInt; i++){
					var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
					if($('#selectResidenzaFiscale' + i).find('option:selected').text().indexOf('STATI UNITI') >= 0){
						if($('maskedField' + i).value==''){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Inserisci il Tax Identification Number (TIN).";
							//errorForm.scrollTo();
							return false;
						}else if(!$('maskedField' + i).value.match(regexTin)){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Il Tax Identification Number (TIN) inserito non &egrave; corretto. Verifica e riprova.";
							//errorForm.scrollTo();
							return false;
						}
					}
				}
		}else{
			
			if($('#selectResidenzaFiscale1').find('option:selected').text() == '-- seleziona --'){
						
						errorForm.style.display = '';
						mesResidenzaFatca.style.display = '';
						mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
						//errorForm.scrollTo();
						return false;
					}
			
			var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
					if($('#selectResidenzaFiscale1').find('option:selected').text().indexOf('STATI UNITI') >= 0){
						if($('maskedField1').value==''){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Inserisci il Tax Identification Number (TIN).";
							//errorForm.scrollTo();
							return false;
						}else if(!$('maskedField1').value.match(regexTin)){
							errorForm.style.display = '';
							mesTinFatca.style.display = '';
							mesTinFatca.innerHTML = "Il Tax Identification Number (TIN) inserito non &egrave; corretto. Verifica e riprova.";
							//errorForm.scrollTo();
							return false;
						}
					}
		}
		if(!document.switchFundForm.checkDatiFatca.checked){
					errorForm.style.display = '';
					mesCheckDatiFatca.style.display = '';
					mesCheckDatiFatca.innerHTML = "Conferma le dichiarazioni rilasciate.";
					
					return false;
		}	
		return true;
	
	}
	
	function loadMaskField(val){
	if($('#selectResidenzaFiscale' + val).find('option:selected').text().indexOf('STATI UNITI') >= 0) {
		$('#maskedFieldId' + val).show();
		$.mask.definitions['_'] ='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
		$('#maskedField'+val).mask("__-_______", {completed: function(){$('#maskedField'+val).val($('#maskedField'+val).val().toUpperCase())} })
		
		$('#maskedField' + val).focus();
	}
	else {
		$('#maskedFieldId' + val).hide();
	}

	}
	function prospetto(id,prodotto){
			var link = cgi_script+ "/common/apriDocumento.do?id=" + id + "&prodotto=" + prodotto; 
			open(link);
			document.switchFundForm.checkProspetto.disabled=false;
	}
	 function openIncentivo(incentivo){		
			open("/doc/"+incentivo);		
		document.switchFundForm.checkIncentivi.disabled=false;	
	}
	
	function modifica(){
	$('erroreForm').style.display = 'none';
	$('erroreFormAnteprima').style.display = 'none';
	$('modifica').style.display = 'none';
	$('fondoSwitch').style.display = 'none';
	$('avanti').style.display = 'none';
	$('formMessaggi').style.display = 'none';
	//$("SelectFundNew").disabled=false;
	$('dettaglioQuote').style.display = 'none';
	$('dettaglioQuoteTotali').style.display = 'none';
	$('dettaglioImporto').style.display = 'none';
	$('labelDepInput').style.display = '';
	$('closePac').style.display = 'none';
	$('labelDepOutput').style.display = 'none';
		if(document.switchFundForm.numeroFondi.value>1){
			loadDettaglio();	
		}else if(document.switchFundForm.numeroFondi.value==1){
			loadDettaglioUnico();
		}
	}
	
	function modificaAnteprima(){
	$('closePac').style.display = 'none';
	$('erroreForm').style.display = 'none';
	$('erroreFormAnteprima').style.display = 'none';
	$('avanti').style.display = '';
	$('formMessaggi').style.display = 'none';
	$('modificaAnteprima').style.display = 'none';
	$('modifica').style.display = '';	
	$('cambiaFondoSwitch').innerHTML ='<div id="btn01"><a href="#1" class="btnevid1" title="scegli un altro fondo" onclick="insertDiv();"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>scegli un altro fondo/sicav</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div>';
	}
	window.onload = loadFondi;
</script>

<form action="" name="switchFundForm" id="switchFundForm" method="POST">
<input type="hidden" name="codiceFondo" value="F0080">
<input type="hidden" name="codiceSocietaDiGestione" value="110">
<input type="hidden" name="importo" value="0">
<input type="hidden" name="numeroQuote" value="1557.33">
<input type="hidden" name="decImporto" value="0">
<input type="hidden" name="quote" value="0">
<input type="hidden" name="decQuote" value="0">
<input type="hidden" name="quoteTotali" value="1557.33">
<input type="hidden" name="tipoVendita" value="">
<input type="hidden" name="Fondosicav" value="S">
<input type="hidden" name="numeroContratto" value="$fondo.getParametroModulo()">
<input type="hidden" name="importoRata" value="0">
<input type="hidden" name="rateResidue" value="0">
<input type="hidden" name="controvalore" value="18672,39">
<input type="hidden" name="controvaloreValuta" value="16665,82">
<input type="hidden" name="NAV" value="11.99">
<input type="hidden" name="dataNAV" value="22/06/2015">
<input type="hidden" name="isin" value="">
<input type="hidden" name="cambio" value="1.1204">
<input type="hidden" name="dataCambioValuta" value="23/06/2015">
<input type="hidden" name="tipoInvestimento" value="PIC">
<input type="hidden" name="descrModRimborso" value="">
<input type="hidden" name="chiusuraPiano" value="">
<input type="hidden" name="descrizioneFondo" value="BGF US Dollar Short Duration Bond E2 $">
<input type="hidden" name="codiceFondoSwitch" value="">
<input type="hidden" name="valoreQuotePerImporto" value="0">
<input type="hidden" name="valoreImportoPerQuote" value="0"> 
<input type="hidden" name="valoreQuotePerImportoVAL" value="0">
<input type="hidden" name="valoreImportoPerQuoteVAL" value="0">
<input type="hidden" name="codiceAzione" value="E">
<input name="valoreImportoAlCambio" value="0" type="hidden">
<input name="valutaFondo" value="USD" type="hidden">
<input name="valutaFondoSwitch" value="" type="hidden">
<input type="hidden" name="descrSocietaGestione" value="BlackRock (Luxembourg) S.A.">
<input type="hidden" name="speseFisse" value="Zero">
<input type="hidden" name="reinvestimento" value="">
<input type="hidden" name="cfam" value="-">
<input type="hidden" name="percScontoCom" value="">
<input type="hidden" name="obbligoCedola" value="">
<input type="hidden" name="controlloFatca" value="false">

	<div class="layeralert3" id="listaSwitch" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('listaSwitch').dragHandle = new Draggable('listaSwitch',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: chiudiListaSwitch();"></div>
	<div class="body">
		<div class="important">
			<h3 class="verde">Scegli il fondo/sicav di destinazione</h3>
			<p id="erroreLayer" style="display: none;" class="nega"><strong class="nega">ATTENZIONE!</strong> Per proseguire devi sceliere il fondo/sicav di destinazione</p>
				<div id="contcont">
					<table id="tb-fondi" cellspacing="0" cellpadding="0" border="0" style="width: 580px;" class="dettTable sortable">
						<tbody>
							</tbody><thead>
								<tr>
									<th class="sort" id="th-radio" sort="none" format="radioButton">&nbsp;</th>
									<th class="sort" id="th-descrizione" sort="default" width="45%">Descrizione</th>
									<th class="sort" id="th-category" sort="default" width="40%">Categoria</th>
									<th class="sort" id="th-isin" sort="none" width="15%">isin</th>
								</tr>
								
							
							</thead>
						
					</table>
					<br class="clear"><a href="javascript:visualizzaFondoSwitch();" class="btnformright" title="conferma"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
				</div>
 			</div><br class="clear">
	</div>
		<div class="foot"></div>
</div>
	
	<div class="layeralert3" id="layeralert4" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert4').dragHandle = new Draggable('layeralert4',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: chiudiLayeralert4();"></div>
		<div class="body">
 			<div class="important">
				<h3 class="verde"><span id="messaggioNoSwitch"></span></h3>
					<div id="contcont">
						<br>		
						<br class="clear"><a href="javascript: chiudiLayeralert4();" class="btnformright" title="conferma"><img src="/img/ret/btn_left_ar.gif" alt=""><span>chiudi</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
					</div>
 			</div><br class="clear">
		</div>
		<div class="foot"></div>
	</div>
	
	
	
	
	<div id="erroreForm" style="display: none;">
		<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"></div>
		<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0"><img alt="" src="/img/ret/box_attenzione.jpg" border="0">
			<br>
				</p><ul class="alert">				
					<li id="messaggio"></li>				
				</ul>
			<br class="clear">
	</div>
	<br class="clear">
	<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"></div>
	</div>
	<p>Lo switch ti consente di passare da un fondo comune/sicav a altro, gestito dalla stessa societï¿œ di gestione.</p>
	<div class="tithelp">

	
	<div class="helpleft">Seleziona il fondo o sicav da vendere</div>	
	<br class="clear"></div>

	
	<table class="form01 out">
	<tbody>
	<tr id="tipologiaStrumento"> 
		<td class="uno" width="105">Tipologia strumento</td>
		<td colspan="3"><strong><span id="tipoStrumento">Sicav</span></strong></td>
	</tr>
		<tr id="labelDepInput"> 
							<td class="uno" width="105"> Deposito </td>					
				<td width="220">				
					<select name="deposito" id="deposito" class="lungmax" onchange="javascript:loadFondi();">		
													<option value="1099/1000633/0">1099/1000633/0 C/C 01099 - 0000011764 - EUR</option>
													<option value="1099/1000633/1">1099/1000633/1 C/C 01099 - 0000011764 - EUR</option>
													<option value="1099/1000633/2">1099/1000633/2 C/C 01099 - 0000011764 - EUR</option>
											</select>
				</td>
							<td class="uno" width="105" id="labelFondo">Fondo/Sicav</td>
				<td width="225">
					<span id="fondi">		<input type="hidden" name="messaggioErrore" value="OK">			
								<select name="SelectFund" id="SelectFund" onchange="javascript:loadDettaglio();" style="display: none;">		
													<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|BlackRock (Luxembourg) S.A.|BGF US Dollar Short Duration Bond E2 $|LU0154237738|23/06/2015|1.1204|S|-|E|22/06/2015|USD|11.99|110|PIC|F0080|1557.33|0|0|$fondo.getParametroModulo()">BGF US Dollar Short Duration Bond E2 $</option>
													<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|M&amp;G Optimal Income Fund|M&amp;G Optimal Income AH EUR|GB00B1VMCY93|01/01/2000|0.0|S|-|A|23/06/2015|EUR|18.4085|137|PIC|MC002|326.789|0|0|$fondo.getParametroModulo()">M&amp;G Optimal Income AH EUR</option>
													<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Franklin Templeton Inv. Sicav|Templeton Global Bond A Cap. EUR H1|LU0294219869|01/01/2000|0.0|S|-|A|23/06/2015|EUR|21.24|109|PIC|T0058|487.909|0|0|$fondo.getParametroModulo()">Templeton Global Bond A Cap. EUR H1</option>
													<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Franklin Templeton Inv. Sicav|Templeton Asian Bond A Cap. EUR H1|LU0316493740|01/01/2000|0.0|S|-|A|23/06/2015|EUR|12.96|109|PIC|T0127|761.242|0|0|$fondo.getParametroModulo()">Templeton Asian Bond A Cap. EUR H1</option>
													<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Deutsche AWM Investment|Deutsche I.I China Bonds LCH Cap EUR|LU0632805262|01/01/2000|0.0|S|-|L|22/06/2015|EUR|117.05|127|PIC|N0111|53.184|0|0|$fondo.getParametroModulo()">Deutsche I.I China Bonds LCH Cap EUR</option>
											</select>
					<select id="SelectFundNew" onchange="javascript:loadDettaglio();">		
							
					<option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|BlackRock (Luxembourg) S.A.|BGF US Dollar Short Duration Bond E2 $|LU0154237738|23/06/2015|1.1204|S|-|E|22/06/2015|USD|11.99|110|PIC|F0080|1557.33|0|0|$fondo.getParametroModulo()">BGF US Dollar Short Duration Bond E2 $</option><option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|M&amp;G Optimal Income Fund|M&amp;G Optimal Income AH EUR|GB00B1VMCY93|01/01/2000|0.0|S|-|A|23/06/2015|EUR|18.4085|137|PIC|MC002|326.789|0|0|$fondo.getParametroModulo()">M&amp;G Optimal Income AH EUR</option><option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Franklin Templeton Inv. Sicav|Templeton Global Bond A Cap. EUR H1|LU0294219869|01/01/2000|0.0|S|-|A|23/06/2015|EUR|21.24|109|PIC|T0058|487.909|0|0|$fondo.getParametroModulo()">Templeton Global Bond A Cap. EUR H1</option><option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Franklin Templeton Inv. Sicav|Templeton Asian Bond A Cap. EUR H1|LU0316493740|01/01/2000|0.0|S|-|A|23/06/2015|EUR|12.96|109|PIC|T0127|761.242|0|0|$fondo.getParametroModulo()">Templeton Asian Bond A Cap. EUR H1</option><option value="1|$fondo.getCodiceFida()|Zero|12,50 EUR|12,50 EUR|Deutsche AWM Investment|Deutsche I.I China Bonds LCH Cap EUR|LU0632805262|01/01/2000|0.0|S|-|L|22/06/2015|EUR|117.05|127|PIC|N0111|53.184|0|0|$fondo.getParametroModulo()">Deutsche I.I China Bonds LCH Cap EUR</option></select>
					<input type="hidden" value="5" name="numeroFondi">
							
	</span>
				</td>
		</tr>
		<tr id="labelDepOutput" style="display: none;">
			<td class="uno" width="105"> Deposito </td>
			<td width="220"><strong><span id="depositoOut"><span></span></span></strong></td>
			<td class="uno" width="105"><span id="tipoStrumento2">Sicav</span></td>
			<td width="225"><strong><span id="fondoOut"><span></span></span></strong></td>
		</tr>
		<tr id="dettaglioPac1">
			<td class="uno" width="105">Valore quota/N.A.V. al <span id="dataValoreQuota">22/06/2015</span></td>					
			<td><strong><span id="valoreQuota">11,99 USD</span></strong> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"><span><span><span>Il valore quota/N.A.V. riportato non corrisponde a quello effettivo al quale sarà eseguito l'ordine.</span></span></span></a></span></td>
			<td class="uno">&nbsp;</td>
			<td><div id="apriScheda"><div><a title="apri la scheda fondo/sicav" class="btnevid1" href="javascript:apriSchedaFondoFida('LU0154237738');"><img alt="" src="/img/ret/btn_left_sm1.gif"><span>apri la scheda fondo/sicav</span><img alt="" src="/img/ret/btn_right_sm1.gif"></a></div></div></td>
		</tr>
		
		<tr id="dettaglioPac2" style="display: none;">
			<td class="uno" width="105">Importo rata</td>					
			<td width="220"><strong><span id="ImportRata">0</span>&nbsp;EUR</strong></td>
			<td class="uno" width="105">Rate residue</td>
			<td width="225"><strong><span id="RateRes">0</span></strong></td>
		</tr>
		
		<tr id="dettaglioPac3">
			<td class="uno" width="105">N. Quote/Azioni nel deposito selezionato</td>					
			<td width="220"><strong><span id="NumerQuote">1557,33</span></strong></td>
			<td class="uno" width="105">Controvalore</td>
			<td width="225"><span id="controValue"><strong>18672,39 USD</strong><br><strong>16665,82 EUR</strong><span class="note"> al cambio del 23/06/2015</span></span></td>
		</tr>
		
		<tr id="dettaglioPac4" style="display: none;">
			<td class="uno" width="105">N. contratto PAC</td>					
			<td width="220"><strong><span id="ParametroModulo">$fondo.getParametroModulo()</span></strong></td>
			<td class="uno" width="105">&nbsp;</td>
			<td width="225">&nbsp;</td>
		</tr>
		
		<tr id="dettaglioPac5" style="display: none;"> 
			<td class="uno" width="105">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImporto" class="lungmax" onchange="javascript:cambiaImporto();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				</td><td><span id="testo"></span></td>
				<td><span id="textImporto"></span></td>
				
		</tr>
		<tr id="dettaglioPac6" width="105" style="display: none;"> 
			<td class="uno">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoPac" class="lungmax" onchange="javascript:cambiaImportoFundPacUnico();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				</td><td><span id="testoPac"></span></td>
				<td><span id="textImportoPac"></span></td>
				
		</tr>
		<tr id="dettaglioPac7" style="display: none;"> 
			<td class="uno" width="105">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoPic" class="lungmax" onchange="javascript:cambiaImportoFundPicUnico();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				</td><td><span id="testoPic"></span></td>
				<td><span id="textImportoPic"></span></td>
				
		</tr>
		<tr id="dettaglioSicav" style="display: none;"> 
			<td class="uno" width="105">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoSicav" class="lungmax" onchange="javascript:cambiaImportoSicav();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				</td><td><span id="testoSicav"></span></td>
				<td><span id="textImportoSicav"></span></td>
				
		</tr>

		<tr id="dettaglioSicavSch"> 
			<td class="uno" width="105">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoSicavSch" class="lungmax" onchange="javascript:cambiaImportoSicavSch();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				</td><td><span id="testoSicavSch">&nbsp;</span></td>
				<td><span id="textImportoSicavSch">&nbsp;</span></td>
				
		</tr>
		<tr id="dettaglioQuoteTotali" style="display: none;">
							<td class="uno" width="105">Quante quote vuoi vendere?</td>
							<td width="220"><strong>Tutte le quote nel deposito selezionato</strong></td>
							<td class="uno" width="105" id="estinzionePacA"></td>
							<td id="estinzionePacB"></td>
							</tr>
		<tr id="dettaglioImporto" style="display: none;">
							<td class="uno" width="105">Quante quote vuoi vendere?</td>
							<td width="220"><strong>Importo</strong></td>
							<td class="uno" width="105"></td>
							<td><strong><span id="detImp"></span> &nbsp;EUR</strong> corrispondenti a quote&nbsp;<strong><span id="valQuoImp"></span></strong></td>
							</tr>
		<tr id="dettaglioQuote" style="display: none;">
							<td class="uno" width="105">Quante quote vuoi vendere?</td>
							<td width="220"><strong>Numero di quote</strong></td>
							<td class="uno" width="105"></td>
							<td><strong><span id="detQuote"></span></strong>&nbsp;corrispondenti a&nbsp;<strong><span id="valImpQuo"></span></strong>&nbsp;EUR</td>
							</tr>
				<tr id="closePac">
			<td colspan="4">L'ordine impartito per il rimborso totale delle quote non estingue o sospende contestualmente il tuo Piano di Accumulo inizialmente programmato né blocca automaticamente l'addebito di ulteriori rate del tuo PAC. Per estinguere o sospendere il tuo PAC, è necessario inviare una richiesta via fax al numero <strong>02/43450602</strong>.</td>
		</tr>
	</tbody></table>
	<div id="nessunFondo" style="display: none;">
			<table cellpadding="0" cellspacing="0" border="0" class="TableF24">
			<tbody><tr>
				<td class="TopF24"><img src="/img/ret/f24_top.gif" border="0" hspace="0" alt=""></td>
				</tr>
				<tr>
				<td class="BoxF24"><img src="/img/ret/ricerca_vuota.gif" class="icoF24" alt="" align="left" border="0" width="39" height="38">
				Nel deposito titoli selezionato non sono presenti fondi o sicav</td>
				</tr>
			<tr>
				<td class="BottomF24"><img src="/img/ret/f24_bottom.gif" border="0" alt=""></td>
		</tr>
		</tbody></table>
	</div>
	<div id="elencoFondi" style="display: none;"></div>
	
	


<div class="fooform" id="cercaFondoSwitch" style="">	
	<div class="fooformright">
		<div><a title="cerca il fondo" class="btnformright" href="#1" onclick="javascript:insertDiv();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>cerca il fondo/sicav di destinazione</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>

<div class="fooform" id="modifica" style="display: none;">	
	<div class="fooformright">
		<div><a title="modifica" class="btnformright" href="#1" onclick="javascript:modifica();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>modifica</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div> 

	
<div id="fondoSwitch" style="display: none;">
<div class="tithelp">
	<div class="helpleft"><span id="tipologiaStrumentoOut">Sicav di destinazione</span></div>	
	<br class="clear"></div>
		<table class="form01 out">
	<tbody>
		<tr>
			<td class="uno" width="105"><span id="tipoStrumentoOut">Sicav</span> </td>					
			<td width="220"><strong><span id="dFund"></span></strong></td>
			<input type="hidden" name="descrizioneFondoSwitch" value="">
			<td class="uno" width="105"></td>
			<td><span id="cambiaFondoSwitch"></span></td>				
		</tr>
		<tr>
			<td class="uno" width="105">Società di gestione</td>					
			<td width="220"><strong><span id="descrizioneSocieta"></span></strong></td>
			<td class="uno" width="105">Categoria Assogestioni</td>
			<td width="225"><strong><span id="categoria"></span></strong></td>
			<input type="hidden" name="categoriaFondoSwitch" value="">
		</tr>
		<tr>
			<td class="uno" width="105">Modalità di investimento</td>					
			<td width="220"><strong>Unico acquisto (PIC)</strong></td>
			<td class="uno" width="105">Valore quota/N.A.V al <span id="dataValoreQuotaSw"></span></td>
			<input type="hidden" name="dataValoreQuotaFondoSwitch" value="">
			<td width="225"><strong><span id="valoreQuotaSw"></span>&nbsp;<span id="valutaFondoSw"></span> </strong></td>
			<input type="hidden" name="valoreQuotaFondoSwitch" value="">
		</tr>
		<tr>
			<td class="uno" width="105">Aquisto minimo prima sottoscrizione</td>					
			<td width="220"><strong><span id="isotmin"></span>&nbsp;EUR</strong></td>
			<input type="hidden" name="isotminFondoSwitch" value="">
			<td class="uno" width="105">Acquisto minimo sottoscr. successive</td>
			<td width="225"><strong><span id="isotsuc"></span>&nbsp;EUR</strong></td>
			<input type="hidden" name="isotsucFondoSwitch" value="">
		</tr>
		<tr>
			<td class="uno" width="105">Spese d'ingresso</td>					
			<td width="220"><strong><span id="ingresso"></span></strong><span id="lampIngresso"></span></td>
			<input type="hidden" name="ingressoFondoSwitch" value="">
			<td class="uno" width="105">Spese di gestione</td>
			<td width="225"><strong><span id="gestione"></span></strong></td>
			<input type="hidden" name="gestioneFondoSwitch" value="">
		</tr>
		<tr>
			<td class="uno" width="105">Spese di uscita</td>					
			<td width="220"><strong><span id="uscita"></span></strong><span id="tooltipdirinisw" class="uniqTooltipText nodotted" onmouseout="removeUniqTooltip(event,this); vedi('lampa1');" onmouseover="createUniqTooltip(event, this); nascondi('lampa1');" onmousemove="createUniqTooltip(event, this)"><span class="uniqTooltipPos"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"></span><span class="uniqTooltipInnerHTML">In caso di rimborso di azioni di classe A verranno applicate, direttamente dalla Sicav, delle commissioni di uscita pari allo 0,5%, solo ai nuovi clienti (s'intende coloro che alla data del 15/02/2014 non possedevano nè azioni di classe A nè azioni di classe D).</span></span></td>
			<input type="hidden" name="uscitaFondoSwitch" value="">
			<td class="uno" width="105">Spese diritti fissi</td>
			<td width="225"><strong><span id="diritti"></span></strong></td>
			<input type="hidden" name="dirittiFondoSwitch" value="">
		</tr>
</tbody></table>
</div>
<div class="fooform" id="modificaAnteprima" style="display: none;">	
	<div class="fooformright">
		<div><a title="modifica" class="btnformright" href="javascript:modificaAnteprima();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>modifica</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div> 	
<div class="fooform" id="avanti" style="display: none;">	
	<div class="fooformright">
		<div><a title="prosegui" class="btnformright" href="javascript:prosegui();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		</div>
	<br class="clear">
	</div>	
<br class="clear">
</div> 

<div id="erroreFormAnteprima" style="display: none;">
		<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"></div>
		<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0"><img alt="" src="/img/ret/box_attenzione.jpg" border="0">
			<br>
				</p><ul class="alert">				
					<li id="messaggioAnteprima" style="display: none;"></li>
					<li id="messaggioCheckDocFatca" style="display: none;"></li>
					<li id="messaggioResidenzaFatca" style="display: none;"></li>
					<li id="messaggioTinFatca" style="display: none;"></li>
					<li id="messaggioCheckDatiFatca" style="display: none;"></li>			
			</ul>
			<br class="clear">
		</div>
		<br class="clear">
		<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"></div>
	</div>
	
<div style="display: none;" id="layeralert3" class="layeralert3">
<div onmouseover="this.style.cursor='move'; $('layeralert3').dragHandle = new Draggable('layeralert3',{handle: 'handle'}, { scroll: window });" class="head handle" style="cursor: move;"><img onclick="this.parentNode.parentNode.style.display='none';unobscurateAll();closeAlert('layeralert3');" alt="chiudi" src="/img/ret/layeralert_x.gif"></div>
<div class="body">
<div id="tempi"></div>
</div>
<div class="foot"></div>
</div>

<div id="formMessaggi"></div>


</form>
<script src="/wscmn/js/table_orderer.js" type="text/javascript"></script>
<script>
	
	function chiudiListaSwitch(){
		closeAlert('listaSwitch');
		modifica();
	}
	
	function chiudiLayeralert4(){
		closeAlert('layeralert4');
		modifica();
	}
	fondiTB = null;
	
	function compartiSwitch(json) {
		
		
		if(json.esito=="ok"){
			if(!fondiTB){
			fondiTB = new TableOrderer('fondi', {
				data: json.compartiSwitch,
				paginate: true,
				pageCount: 20,
				pageSizes: []
			});
		// Ordinamento iniziale
			fondiTB.orderTable('desc', 'asc');
			$('listaSwitch').style.display='';
			}else{
				fondiTB.updateData(json.compartiSwitch);
				fondiTB.orderTable('desc', 'asc');
				$('listaSwitch').style.display='';
			}
		}else{
			$('messaggioNoSwitch').innerHTML = json.messaggio;
			$('layeralert4').style.display='';
		}
	}
	
	var compart = null;
	function format_radioButton (objVal, obj, cachedData) {
		var index = -1;
		compart =cachedData;
		$.each(cachedData, function (ind, item) {
			if (item.isin === obj.isin) {
			index = ind;
			return false;
			}
		});
	return '<input type="radio" name="fondoButton" value="' + index + '"/>';
	}
	// Crea la tabella ordinabile e paginabile
	
	
	function recuperaCompartiSwitch(){
		var divisa = document.switchFundForm.valutaFondo.value;
		var codice = document.switchFundForm.codiceFondo.value;
		var codAzione = document.switchFundForm.codiceAzione.value;
		var codSocieta = document.switchFundForm.codiceSocietaDiGestione.value;
		var parameter = "codice=" + codice + "&divisa=" + divisa +"&codAzione=" + codAzione +"&codSocieta=" + codSocieta;
		url= cgi_script + '/FMP/listaFundSicavSwitch.jsp?' + parameter;
		$.getJSON(url,function(result){compartiSwitch(result)});
	}
	
	function visualizzaFondoSwitch(){
		var codSocGest = ""+document.switchFundForm.codiceSocietaDiGestione.value;
		var x = compart.length;
		//var x = 1;
		for(var i=0; i<x;i++){
			if(x==1)
			var but = document.switchFundForm.fondoButton;
			else
			var but = document.switchFundForm.fondoButton[i];
			
			if(but.checked) {
				var y = but.value;
                $('fondoSwitch').style.display = '';
				$('cercaFondoSwitch').style.display = 'none';
				$('modifica').style.display = '';
				//LINK_SCHEDAFONDO
				//var apri = "";
				$('dFund').innerHTML = "<a href=javascript:apriSchedaFondoFida('" + compart[y].isin + "');><strong>"+compart[y].descrizione+"</strong></a>";			
				$('categoria').innerHTML =compart[y].category;		
				if(codSocGest=='4'){
					$('isotmin').innerHTML =compart[y].irimmin;
					$('isotsuc').innerHTML =compart[y].irimmin;
				}else{
					$('isotmin').innerHTML =compart[y].isotmin;
					$('isotsuc').innerHTML =compart[y].isotsuc;
				}
				if(codSocGest=='1'){
					$('ingresso').innerHTML ='Vedi Prospetto';
					$('lampIngresso').innerHTML="<span class='tooltip'><a class='nounderline' onmouseout='vedi('lampa2');' onmouseover='nascondi('lampa2');' href='#1'><img class='lampa' id='lampa2' src='/img/ret/lampa_off.gif'><span><span><span><strong>GRATIS</strong><br><ul><li>da fondo senza commissioni a fondo senza commissioni</li><li>da fondo con commissioni a fondo con commissioni</li></ul><br><strong>da fondo senza commissioni a fondo con commissioni</strong> si applicano le commissioni previste dal fondo entrante</span></span></span></a></span>";
				}else{
					$('ingresso').innerHTML ='Gratis';
					$('lampIngresso').innerHTML='&nbsp;';
				}
				$('gestione').innerHTML =compart[y].gestione;
				$('uscita').innerHTML =compart[y].uscita;
				if(codSocGest=='117')
					$('tooltipdirinisw').style.display = '';
				else
					$('tooltipdirinisw').style.display = 'none';
				$('diritti').innerHTML =compart[y].swicth;
				$('descrizioneSocieta').innerHTML = compart[y].descSocieta;
				var prezzoQuota = "" + compart[y].prezzoQuota;
				$('valoreQuotaSw').innerHTML = prezzoQuota.replace('.',',');
				$('dataValoreQuotaSw').innerHTML =compart[y].dataPrezzoQuota;
				$('valutaFondoSw').innerHTML = compart[y].divisa;
				document.switchFundForm.codiceFondoSwitch.value = compart[y].codice;
			
				$('cambiaFondoSwitch').innerHTML ='<div id="btn01"><a href="#1" class="btnevid1" title="scegli un altro fondo" onclick="insertDiv();"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>scegli un altro fondo/sicav</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div>';
				document.switchFundForm.descrizioneFondoSwitch.value =compart[y].descrizione;
				document.switchFundForm.percScontoCom.value =compart[y].scontopercom;
				document.switchFundForm.categoriaFondoSwitch.value =compart[y].category;
				if(codSocGest=='1')
					document.switchFundForm.ingressoFondoSwitch.value ='Vedi Prospetto';
				else
					document.switchFundForm.ingressoFondoSwitch.value ='Gratis';
			
				document.switchFundForm.gestioneFondoSwitch.value =compart[y].gestione;
				document.switchFundForm.uscitaFondoSwitch.value =compart[y].uscita;
				document.switchFundForm.dirittiFondoSwitch.value =compart[y].swicth;
				if(codSocGest=='4'){
					document.switchFundForm.isotminFondoSwitch.value =compart[y].irimmin;
					document.switchFundForm.isotsucFondoSwitch.value =compart[y].irimmin;
				}else{
					document.switchFundForm.isotminFondoSwitch.value =compart[y].isotmin;
					document.switchFundForm.isotsucFondoSwitch.value =compart[y].isotsuc;
				}
				document.switchFundForm.valutaFondoSwitch.value =compart[y].divisa;
				
				document.switchFundForm.valoreQuotaFondoSwitch.value = compart[y].prezzoQuota;
				document.switchFundForm.dataValoreQuotaFondoSwitch.value =compart[y].dataPrezzoQuota;
				document.switchFundForm.reinvestimento.value =compart[y].reinvestimento;
				document.switchFundForm.obbligoCedola.value =compart[y].obbligoCedola;
				$('erroreLayer').style.display = 'none';
				$('avanti').style.display = '';
				closeAlert('listaSwitch');
            }else{
            	$('erroreLayer').style.display = '';
            }
		}
	}
	
	function nascondiFondi(a,num){
		$('erroreForm').style.display = 'none';
		
		for(var c=0;c<num;c++){
			var rigaTitle = "titleFund"+c;
			var rigaAzioni = "azioniFund"+c;
			var rigaRate = "rateFund"+c;
			var rigaSelect = "rigaSelect" +c;
			var rigaContratto = "rigaContratto"+c;
			var rad = "radioFondo" + c;
			var sel = "selectImporto" + c;
			
				if(c==a){					
							
							$(rad).disabled=true;
							$(rigaTitle).style.display = 'none';
							$(rigaAzioni).style.display = '';
							if($(rad).value=="PAC"){
								$(rigaRate).style.display = '';
								$(rigaContratto).style.display = '';
							}
							$(rigaSelect).style.display = '';
						
					}else{							
						$(rigaTitle).style.display = 'none';
							if($(rad).value=="PAC"){
							$(rigaRate).style.display = 'none';
							$(rigaContratto).style.display = 'none';	
							}
						$(rigaAzioni).style.display = 'none';
						$(rigaSelect).style.display = 'none';
					}
				
	
		}
		return true;				
	}
	function insertDiv(){	
		$('erroreLayer').style.display = 'none';
		var prosegui=false;
		var num = document.switchFundForm.numeroFondi.value;
		var decimaleQuoteSicav=2;
			if(document.switchFundForm.codiceSocietaDiGestione.value==101)
				 decimaleQuoteSicav=2;
			else if(document.switchFundForm.codiceSocietaDiGestione.value==110)
				 decimaleQuoteSicav=2;
			else
				decimaleQuoteSicav=3;
		var valPac = "OK";
			if(num>1){
				var index = document.switchFundForm.SelectFundNew.selectedIndex;	   
				var valoriOption = document.switchFundForm.SelectFundNew[index].value;					
				var indice = valoriOption.indexOf("*");
					if(indice > -1){
						var valoriFondo = valoriOption.substring(0,indice);			
						indice = valoriFondo.indexOf("|");
						var numeroFondi = valoriFondo.substring(0,indice);
					}else{
						indice = valoriOption.indexOf("|");
						var numeroFondi = valoriOption.substring(0,indice);
					}				
					if(numeroFondi>1){					
						for(var c=0;c<numeroFondi;c++){
							var rad = "radioFondo" + c;
								if($(rad).checked){
									prosegui=true;
									$(rad).checked="true";
									var sel = "selectImporto" + c;
									var ind = $(sel).selectedIndex;;
									var valur =	$(sel)[ind].value;
									var selOut = "selectImportoOut" + c;
									var textImpOut = "textImportoOut" + c;
									var textImp = "textImporto" + c;
									var rigaSelect = "rigaSelect" +c;
									var rigaSelectOut = "rigaSelectOut" +c;
									var textOut ="testoOut"+c;
									var qtot ="quoteTotali"+c;
									var imp = "importo"+c;
									var quo = "quote"+c;
									var decImp = "decImporto"+c;
									var decQuo = "decQuote"+c;
									var qtot ="quoteTotali"+c;
									var numContr = "numeroContratto"+c;
									var tipoInvestimento= $(rad).value;
									var chiudiPac = "closePlanePac"+c;
									var rateRes = "rateResidue"+c;
									var impRat = "importoRata"+c;
									var impPerQuote = document.switchFundForm.valoreImportoPerQuote.value;
									var quoPerImporto = document.switchFundForm.valoreQuotePerImporto.value;
									var descModRimb = $(sel)[ind].text;
									var nav=document.switchFundForm.NAV.value;
									document.switchFundForm.quoteTotali.value = $(qtot).value;
									var quoteTotal=$(qtot).value;
									var cValore = calcolaControvalore(nav,quoteTotal).toFixed(2);
									
									var procedi ="";
									if(tipoInvestimento=="PAC"){
									document.switchFundForm.numeroContratto.value =$(numContr).value;
									}else {
									document.switchFundForm.numeroContratto.value =0;
									}
									$(selOut).innerHTML = "<strong>"+descModRimb+"</strong>";
	//controllo dell'importo
										if(valur==0){
											$('erroreForm').style.display = '';
											$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
										}else if(valur==1){
											document.switchFundForm.tipoVendita.value = valur;
											document.switchFundForm.descrModRimborso.value = descModRimb;
											procedi="OK";
											if(tipoInvestimento=="PIC"){
												$(textOut).innerHTML = "";
												$(textImpOut).innerHTML = "";
											}else if(tipoInvestimento=="PAC"){
												if(document.getElementsByName(chiudiPac)[1].checked){	
												document.switchFundForm.chiusuraPiano.value="S";													
												$(textOut).innerHTML = "Vuoi anche estinguere il PAC?";
												$(textImpOut).innerHTML= "<strong>SI</strong>" ;
												}else if(document.getElementsByName(chiudiPac)[0].checked){
												document.switchFundForm.chiusuraPiano.value="N";
												$(textOut).innerHTML = "Vuoi anche estinguere il PAC?";
												$(textImpOut).innerHTML = "<strong>NO</strong>" ;
												}else {
												valPac = "KO";
												$('erroreForm').style.display = '';
												$('messaggio').innerHTML = "Per proseguire bisogna selezionare se si vuole anche estinguere il PAC";
												}
											}
										}else if(valur==2){									 
											document.switchFundForm.importo.value = $(imp).value;
											importo = $(imp).value;
											decImporto = $(decImp).value;
											document.switchFundForm.decImporto.value = $(decImp).value;
											document.switchFundForm.tipoVendita.value = valur;
											document.switchFundForm.descrModRimborso.value = descModRimb;
											procedi = controlloImportoAntePlus(importo,decImporto,cValore);
											$(textOut).innerHTML = "";
											$(textImpOut).innerHTML = "<strong>"+impPerQuote.replace('.',',') + "&nbsp;EUR</strong> corrispondenti a <strong>"+quoPerImporto.replace('.',',')+"</strong>&nbsp;quote";
										}else if(valur==3){
											document.switchFundForm.quote.value = $(quo).value;
											document.switchFundForm.decQuote.value = $(decQuo).value;
											document.switchFundForm.tipoVendita.value = valur;
											document.switchFundForm.descrModRimborso.value = descModRimb;
											quote = $(quo).value;
											decQuote = $(decQuo).value;
											numQuote = $(qtot).value;
											procedi = controlloQuote(quote,decQuote,numQuote);
											$(textOut).innerHTML = "";
											$(textImpOut).innerHTML = "<strong>"+quoPerImporto.replace('.',',') + "&nbsp;</strong> corrispondenti a <strong>"+impPerQuote.replace('.',',')+"&nbsp;EUR</strong>";
										}
										if(valur!=0 && valPac=="OK" && procedi=="OK"){
											if(3>1 && document.switchFundForm.numeroFondi.value>1 ){
												//$('deposito').disabled=true;
												$('labelDepInput').style.display = 'none';				
												var index = document.switchFundForm.deposito.selectedIndex;
										   		var value = document.switchFundForm.deposito[index].value;
										   		$('depositoOut').innerHTML = value;
										   		var ind = document.switchFundForm.SelectFundNew.selectedIndex;
												$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
										   		$('labelDepOutput').style.display = '';
											}else if(3==1 && document.switchFundForm.numeroFondi.value>1 ){
												$('labelDepInput').style.display = 'none';	
												$('depositoOut').innerHTML = document.switchFundForm.deposito.value;
												var ind = document.switchFundForm.SelectFundNew.selectedIndex;
												$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
										   		$('labelDepOutput').style.display = '';
											}else if(3>1 && document.switchFundForm.numeroFondi.value==1 ){
												$('labelDepInput').style.display = 'none';				
												var index = document.switchFundForm.deposito.selectedIndex;
										   		var value = document.switchFundForm.deposito[index].value;
										   		$('depositoOut').innerHTML = value;
										   		$('fondoOut').innerHTML = document.switchFundForm.descrizioneFondo.value;
										   		$('labelDepOutput').style.display = '';
											}
											nascondiFondi(c,numeroFondi);
											$(rigaSelectOut).style.display = '';
											$(rigaSelect).style.display = 'none';
											recuperaCompartiSwitch();
											
										}								
								}
						}
					}else{
						var valoreQuotePerImporto = document.switchFundForm.valoreQuotePerImporto.value;
						var valoreImportoPerQuote = document.switchFundForm.valoreImportoPerQuote.value
						prosegui=true;
						if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="F"){
							var ind = document.switchFundForm.selectImportoPic.selectedIndex;
							var value = document.switchFundForm.selectImportoPic[ind].value;
							descModRimb = document.switchFundForm.selectImportoPic[ind].text;
							
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){
								$('dettaglioPac7').style.display = 'none';
								$('dettaglioQuoteTotali').style.display = '';
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoPic.value;
								importo = document.switchFundForm.importoPic.value
								document.switchFundForm.decImporto.value = document.switchFundForm.decImportoPic.value;;
								decImporto = document.switchFundForm.decImportoPic.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioPac7').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quotePic.value;
								quote = document.switchFundForm.quotePic.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePic.value;
								decQuote = document.switchFundForm.decQuotePic.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
									if(procedi=="OK"){
										$('dettaglioPac7').style.display = 'none';
										$('dettaglioQuote').style.display = '';
										$('detQuote').innerHTML =qu.replace('.',',');
										$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
									}
							}
						}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==3){
							var ind = document.switchFundForm.selectImportoSicav.selectedIndex;
							var value = document.switchFundForm.selectImportoSicav[ind].value;
							descModRimb = document.switchFundForm.selectImportoSicav[ind].text;
						
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioQuoteTotali').style.display = '';
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoSicav.value;
								document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicav.value;
								importo = document.switchFundForm.importoSicav.value;
								decImporto = document.switchFundForm.decImportoSicav.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quoteSicav.value;
								quote = document.switchFundForm.quoteSicav.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicav.value;
								decQuote = document.switchFundForm.decQuoteSicav.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
								if(procedi=="OK"){
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
								}
							}
						}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==2){
							var ind = document.switchFundForm.selectImportoSicavSch.selectedIndex;
							var value = document.switchFundForm.selectImportoSicavSch[ind].value;
							descModRimb = document.switchFundForm.selectImportoSicavSch[ind].text;
						
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioQuoteTotali').style.display = '';
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoSicavSch.value;
								document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicavSch.value;
								importo = document.switchFundForm.importoSicavSch.value;
								decImporto = document.switchFundForm.decImportoSicavSch.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quoteSicavSch.value;
								quote = document.switchFundForm.quoteSicavSch.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicavSch.value;
								decQuote = document.switchFundForm.decQuoteSicavSch.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
								if(procedi=="OK"){
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
								}
							}
						}else if(document.switchFundForm.tipoInvestimento.value=="PAC"){
							var ind = document.switchFundForm.selectImportoPac.selectedIndex;
							var value = document.switchFundForm.selectImportoPac[ind].value;
							descModRimb = document.switchFundForm.selectImportoPac[ind].text;
							
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){								
									if(document.switchFundForm.chiusuraPianoPac[1].checked){
										document.switchFundForm.chiusuraPiano.value=="S";
										$('dettaglioPac6').style.display = 'none';
										$('dettaglioQuoteTotali').style.display = '';
										$('estinzionePacA').innerHTML = "Estinzione PAC";
										$('estinzionePacB').innerHTML = "<strong>SI</strong>";
									}else if(document.switchFundForm.chiusuraPianoPac[0].checked){
										document.switchFundForm.chiusuraPiano.value=="N";
										$('dettaglioPac6').style.display = 'none';
										$('dettaglioQuoteTotali').style.display = '';
										$('estinzionePacA').innerHTML = "Estinzione PAC";
										$('estinzionePacB').innerHTML = "<strong>NO</strong>";
									}else {
										valPac = "KO";
										$('erroreForm').style.display = '';
										$('messaggio').innerHTML = "Per proseguire bisogna selezionare se si vuole anche estinguere il PAC";
									}
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoPac.value;
								importo = document.switchFundForm.importoPac.value
								document.switchFundForm.decImporto.value=  document.switchFundForm.decImportoPac.value;
								decImporto = document.switchFundForm.decImportoPac.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioPac6').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quotePac.value;
								quote = document.switchFundForm.quotePac.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePac.value;
								decQuote = document.switchFundForm.decQuotePac.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
								if(procedi=="OK"){
								$('dettaglioPac6').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
								}
							}
						}
					if(valur!=0 && valPac=="OK" && procedi=="OK"){
					if(3>1 && document.switchFundForm.numeroFondi.value>1 ){
						//$('deposito').disabled=true;
						$('labelDepInput').style.display = 'none';				
						var index = document.switchFundForm.deposito.selectedIndex;
				   		var value = document.switchFundForm.deposito[index].value;
				   		$('depositoOut').innerHTML = value;
				   		var ind = document.switchFundForm.SelectFundNew.selectedIndex;
						$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
				   		$('labelDepOutput').style.display = '';
					}else if(3==1 && document.switchFundForm.numeroFondi.value>1 ){
						$('labelDepInput').style.display = 'none';	
						$('depositoOut').innerHTML = document.switchFundForm.deposito.value;
						var ind = document.switchFundForm.SelectFundNew.selectedIndex;
						$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
				   		$('labelDepOutput').style.display = '';
					}else if(3>1 && document.switchFundForm.numeroFondi.value==1 ){
						$('labelDepInput').style.display = 'none';				
						var index = document.switchFundForm.deposito.selectedIndex;
				   		var value = document.switchFundForm.deposito[index].value;
				   		$('depositoOut').innerHTML = value;
				   		$('fondoOut').innerHTML = document.switchFundForm.descrizioneFondo.value;
				   		$('labelDepOutput').style.display = '';
					}
						$('erroreForm').style.display = 'none';		
						recuperaCompartiSwitch();		
						
						}
					}
				if(prosegui==false){							
					$('erroreForm').style.display = '';
					$('messaggio').innerHTML = "Prima di scegliere un fondo/sicav di destinazione selezionare un fondo/sicav di partenza";
				}
		}else{		
			var valoreQuotePerImporto = document.switchFundForm.valoreQuotePerImporto.value;
			var valoreImportoPerQuote = document.switchFundForm.valoreImportoPerQuote.value
			prosegui=true;
			if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="F"){
				var ind = document.switchFundForm.selectImportoPic.selectedIndex;
				var value = document.switchFundForm.selectImportoPic[ind].value;
				descModRimb = document.switchFundForm.selectImportoPic[ind].text;
				var tipovendita = "";
				var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
					if(value==0){
						$('erroreForm').style.display = '';
						$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
					}else if(value==1){							
						quoteTotali = document.switchFundForm.quoteTotali.value;
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						procedi = controlloQuoteTotali(quoteTotali);
						if(procedi=="OK"){
							$('dettaglioPac7').style.display = 'none';
							$('dettaglioQuoteTotali').style.display = '';
						}
					}else if(value==2){
						document.switchFundForm.importo.value = document.switchFundForm.importoPic.value;
						importo = document.switchFundForm.importoPic.value
						document.switchFundForm.decImporto.value = document.switchFundForm.decImportoPic.value;;
						decImporto = document.switchFundForm.decImportoPic.value;
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						procedi = controlloImportoAnte(importo,decImporto);
						var i = importo +"."+decImporto+"0";
						var im = ""+new Number(i);
							if(procedi=="OK"){					
								$('dettaglioPac7').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
					}else if(value==3){
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.quote.value = document.switchFundForm.quotePic.value;
						quote = document.switchFundForm.quotePic.value
						document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePic.value;
						decQuote = document.switchFundForm.decQuotePic.value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						quoteTotali = document.switchFundForm.quoteTotali.value;
						procedi = controlloQuote(quote,decQuote,quoteTotali);
						var q = quote +"."+decQuote+"0";
						var qu = ""+new Number(q);
							if(procedi=="OK"){
								$('dettaglioPac7').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
					}
			}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==3){
							var ind = document.switchFundForm.selectImportoSicav.selectedIndex;
							var value = document.switchFundForm.selectImportoSicav[ind].value;
							descModRimb = document.switchFundForm.selectImportoSicav[ind].text;
						
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioQuoteTotali').style.display = '';
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoSicav.value;
								document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicav.value;
								importo = document.switchFundForm.importoSicav.value;
								decImporto = document.switchFundForm.decImportoSicav.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quoteSicav.value;
								quote = document.switchFundForm.quoteSicav.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicav.value;
								decQuote = document.switchFundForm.decQuoteSicav.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
								if(procedi=="OK"){
								$('dettaglioSicav').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
								}
							}
						}else if(document.switchFundForm.tipoInvestimento.value=="PIC" && document.switchFundForm.Fondosicav.value =="S" && decimaleQuoteSicav==2){
							var ind = document.switchFundForm.selectImportoSicavSch.selectedIndex;
							var value = document.switchFundForm.selectImportoSicavSch[ind].value;
							descModRimb = document.switchFundForm.selectImportoSicavSch[ind].text;
						
							var tipovendita = "";
							var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
							if(value==0){
								$('erroreForm').style.display = '';
								$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
							}else if(value==1){							
								quoteTotali = document.switchFundForm.quoteTotali.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloQuoteTotali(quoteTotali);
								if(procedi=="OK"){
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioQuoteTotali').style.display = '';
								}
							}else if(value==2){
								document.switchFundForm.importo.value = document.switchFundForm.importoSicavSch.value;
								document.switchFundForm.decImporto.value = document.switchFundForm.decImportoSicavSch.value;
								importo = document.switchFundForm.importoSicavSch.value;
								decImporto = document.switchFundForm.decImportoSicavSch.value;
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								procedi = controlloImportoAnte(importo,decImporto);
								var i = importo +"."+decImporto+"0";
								var im = ""+new Number(i);
								if(procedi=="OK"){					
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
								}
							}else if(value==3){
								document.switchFundForm.tipoVendita.value = value;
								document.switchFundForm.quote.value = document.switchFundForm.quoteSicavSch.value;
								quote = document.switchFundForm.quoteSicavSch.value
								document.switchFundForm.decQuote.value =document.switchFundForm.decQuoteSicavSch.value;
								decQuote = document.switchFundForm.decQuoteSicavSch.value;
								document.switchFundForm.descrModRimborso.value = descModRimb;
								quoteTotali = document.switchFundForm.quoteTotali.value;
								procedi = controlloQuote(quote,decQuote,quoteTotali);
								var q = quote +"."+decQuote+"0";
								var qu = ""+new Number(q);
								if(procedi=="OK"){
								$('dettaglioSicavSch').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
								}
							}
						}else if(document.switchFundForm.tipoInvestimento.value=="PAC"){
				var ind = document.switchFundForm.selectImportoPac.selectedIndex;
				var value = document.switchFundForm.selectImportoPac[ind].value;
				descModRimb = document.switchFundForm.selectImportoPac[ind].text;							
				var tipovendita = "";
				var codSocGest = document.switchFundForm.codiceSocietaDiGestione.value;
					if(value==0){
						$('erroreForm').style.display = '';
						$('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
					}else if(value==1){							
						quoteTotali = document.switchFundForm.quoteTotali.value;
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						procedi = controlloQuoteTotali(quoteTotali);
							if(procedi=="OK"){								
								if(document.switchFundForm.chiusuraPianoPac[1].checked){
									document.switchFundForm.chiusuraPiano.value=="S";
									$('dettaglioPac6').style.display = 'none';
									$('dettaglioQuoteTotali').style.display = '';
									$('estinzionePacA').innerHTML = "Estinzione PAC";
									$('estinzionePacB').innerHTML = "<strong>SI</strong>";
								}else if(document.switchFundForm.chiusuraPianoPac[0].checked){
									$('dettaglioPac6').style.display = 'none';
									$('dettaglioQuoteTotali').style.display = '';
									document.switchFundForm.chiusuraPiano.value=="N";
									$('estinzionePacA').innerHTML = "Estinzione PAC";
									$('estinzionePacB').innerHTML = "<strong>NO</strong>";
								}else {
									valPac = "KO";
									$('erroreForm').style.display = '';
									$('messaggio').innerHTML = "Per proseguire bisogna selezionare se si vuole anche estinguere il PAC";
								}
							}
					}else if(value==2){
						document.switchFundForm.importo.value = document.switchFundForm.importoPac.value;
						importo = document.switchFundForm.importoPac.value
						document.switchFundForm.decImporto.value=  document.switchFundForm.decImportoPac.value;
						decImporto = document.switchFundForm.decImportoPac.value;
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						procedi = controlloImportoAnte(importo,decImporto);
						var i = importo +"."+decImporto+"0";
						var im = ""+new Number(i);
							if(procedi=="OK"){					
								$('dettaglioPac6').style.display = 'none';
								$('dettaglioImporto').style.display = '';
								$('detImp').innerHTML =im.replace('.',',');
								$('valQuoImp').innerHTML =valoreQuotePerImporto.replace('.',',');
							}
					}else if(value==3){
						document.switchFundForm.tipoVendita.value = value;
						document.switchFundForm.quote.value = document.switchFundForm.quotePac.value;
						quote = document.switchFundForm.quotePac.value
						document.switchFundForm.decQuote.value =document.switchFundForm.decQuotePac.value;
						decQuote = document.switchFundForm.decQuotePac.value;
						document.switchFundForm.descrModRimborso.value = descModRimb;
						quoteTotali = document.switchFundForm.quoteTotali.value;
						procedi = controlloQuote(quote,decQuote,quoteTotali);
						var q = quote +"."+decQuote+"0";
						var qu = ""+new Number(q);
							if(procedi=="OK"){
								$('dettaglioPac6').style.display = 'none';
								$('dettaglioQuote').style.display = '';
								$('detQuote').innerHTML =qu.replace('.',',');
								$('valImpQuo').innerHTML =valoreImportoPerQuote.replace('.',',');
							}
						}
					}
				if(valur!=0 && valPac=="OK" && procedi=="OK"){
					if(3>1 && document.switchFundForm.numeroFondi.value>1 ){
							//$('deposito').disabled=true;
						$('labelDepInput').style.display = 'none';				
						var index = document.switchFundForm.deposito.selectedIndex;
				   		var value = document.switchFundForm.deposito[index].value;
				   		$('depositoOut').innerHTML = value;
				   		var ind = document.switchFundForm.SelectFundNew.selectedIndex;
						$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
				   		$('labelDepOutput').style.display = '';
					}else if(3==1 && document.switchFundForm.numeroFondi.value>1 ){
						$('labelDepInput').style.display = 'none';	
						$('depositoOut').innerHTML = document.switchFundForm.deposito.value;
						var ind = document.switchFundForm.SelectFundNew.selectedIndex;
						$('fondoOut').innerHTML = document.switchFundForm.SelectFundNew[ind].text;
				   		$('labelDepOutput').style.display = '';
					}else if(3>1 && document.switchFundForm.numeroFondi.value==1 ){
						$('labelDepInput').style.display = 'none';				
						var index = document.switchFundForm.deposito.selectedIndex;
				   		var value = document.switchFundForm.deposito[index].value;
				   		$('depositoOut').innerHTML = value;
				   		$('fondoOut').innerHTML = document.switchFundForm.descrizioneFondo.value;
				   		$('labelDepOutput').style.display = '';
					}
				$('erroreForm').style.display = 'none';
				recuperaCompartiSwitch();
				
				}
				if(prosegui==false){							
					$('erroreForm').style.display = '';
					$('messaggio').innerHTML = "Prima di scegliere un fondo/sicav di destinazione selezionare un fondo/sicav di partenza";
				}
		}
	}
</script>


<!-- TABELLA RISULTATI -->
<div class="important">
			<h3 class="verde">Scegli il fondo/sicav di destinazione</h3>
			<p id="erroreLayer" style="display: none;" class="nega"><strong class="nega">ATTENZIONE!</strong> Per proseguire devi sceliere il fondo/sicav di destinazione</p>
				<div id="contcont">
					<div class="resPag top"><div class="resPagRight"><span><strong class="numResults">139</strong> risultati</span><div class="pulsantiera"><a href="#" class="nobutt off">&lt;&lt;</a><a href="#" class="nobutt off">&lt;</a><a href="#" class="active">1</a><a href="#">2</a><a href="#" style="visibility: visible;">3</a><a href="#" class="nobutt">&gt;</a><a href="#" class="nobutt">&gt;&gt;</a></div></div></div><table id="tb-fondi" cellspacing="0" cellpadding="0" border="0" style="width: 580px;" class="dettTable sortable">
						<tbody><tr class="data line0 dispari" id="tr-fondi-0">
	<td class="col-radio"><input type="radio" name="fondoButton" value="0"></td>
	<td class="col-descrizione">BGF Euro Markets E2 $</td>
	<td class="col-category">Azionari Area Euro</td>
	<td class="col-isin">LU0171278376</td>

</tr><tr class="data line1 pari" id="tr-fondi-1">
	<td class="col-radio"><input type="radio" name="fondoButton" value="1"></td>
	<td class="col-descrizione">BGF Japan Small &amp; MidCap Opportunities E2 EUR</td>
	<td class="col-category">Azionari Paese</td>
	<td class="col-isin">LU0171289225</td>

</tr><tr class="data line0 dispari" id="tr-fondi-2">
	<td class="col-radio"><input type="radio" name="fondoButton" value="2"></td>
	<td class="col-descrizione">BGF Global Smallcap E2 $</td>
	<td class="col-category">Azionari Internazionali</td>
	<td class="col-isin">LU0147403843</td>

</tr><tr class="data line1 pari" id="tr-fondi-3">
	<td class="col-radio"><input type="radio" name="fondoButton" value="3"></td>
	<td class="col-descrizione">BGF Emerging Mkts Equity Income E2 Cap EUR Hdg</td>
	<td class="col-category">Azionari Paesi Emergenti</td>
	<td class="col-isin">LU0653880657</td>

</tr><tr class="data line0 dispari" id="tr-fondi-4">
	<td class="col-radio"><input type="radio" name="fondoButton" value="4"></td>
	<td class="col-descrizione">BGF Japan Flexible Equity E2 JPY</td>
	<td class="col-category">Azionari Paese</td>
	<td class="col-isin">LU0249411165</td>

</tr><tr class="data line1 pari" id="tr-fondi-5">
	<td class="col-radio"><input type="radio" name="fondoButton" value="5"></td>
	<td class="col-descrizione">BGF New Energy E2 $</td>
	<td class="col-category">Azionari Energia e Materie Prime</td>
	<td class="col-isin">LU0124386052</td>

</tr><tr class="data line0 dispari" id="tr-fondi-6">
	<td class="col-radio"><input type="radio" name="fondoButton" value="6"></td>
	<td class="col-descrizione">BGF Emerging Markets Bond E2 Cap EUR H</td>
	<td class="col-category">Obb. Paesi Emergenti</td>
	<td class="col-isin">LU1062842882</td>

</tr><tr class="data line1 pari" id="tr-fondi-7">
	<td class="col-radio"><input type="radio" name="fondoButton" value="7"></td>
	<td class="col-descrizione">BGF Japan Flexible Equity E2 $</td>
	<td class="col-category">Azionari Paese</td>
	<td class="col-isin">LU0212924947</td>

</tr><tr class="data line0 dispari" id="tr-fondi-8">
	<td class="col-radio"><input type="radio" name="fondoButton" value="8"></td>
	<td class="col-descrizione">BGF European Special Situations E2 $</td>
	<td class="col-category">Azionari Europa</td>
	<td class="col-isin">LU0171277139</td>

</tr><tr class="data line1 pari" id="tr-fondi-9">
	<td class="col-radio"><input type="radio" name="fondoButton" value="9"></td>
	<td class="col-descrizione">BGF Renminbi Bond E2 Cap EUR Hdg</td>
	<td class="col-category">Altri</td>
	<td class="col-isin">LU0803752129</td>

</tr><tr class="data line0 dispari" id="tr-fondi-10">
	<td class="col-radio"><input type="radio" name="fondoButton" value="10"></td>
	<td class="col-descrizione">BGF Emerging Mkts Corporate Bond E2 Cap EUR</td>
	<td class="col-category">Obb. Paesi Emergenti</td>
	<td class="col-isin">LU0843232173</td>

</tr><tr class="data line1 pari" id="tr-fondi-11">
	<td class="col-radio"><input type="radio" name="fondoButton" value="11"></td>
	<td class="col-descrizione">BGF Asian Tiger Bond E2 EUR</td>
	<td class="col-category">Obb. Paesi Emergenti</td>
	<td class="col-isin">LU0277197249</td>

</tr><tr class="data line0 dispari" id="tr-fondi-12">
	<td class="col-radio"><input type="radio" name="fondoButton" value="12"></td>
	<td class="col-descrizione">BGF US Basic Value Hedged E2 EUR</td>
	<td class="col-category">Azionari America</td>
	<td class="col-isin">LU0200685666</td>

</tr><tr class="data line1 pari" id="tr-fondi-13">
	<td class="col-radio"><input type="radio" name="fondoButton" value="13"></td>
	<td class="col-descrizione">BGF Emerging Europe E2 EUR</td>
	<td class="col-category">Azionari Paesi Emergenti</td>
	<td class="col-isin">LU0090830497</td>

</tr><tr class="data line0 dispari" id="tr-fondi-14">
	<td class="col-radio"><input type="radio" name="fondoButton" value="14"></td>
	<td class="col-descrizione">BGF Asian Dragon E2 EUR</td>
	<td class="col-category">Azionari Pacifico</td>
	<td class="col-isin">LU0171270985</td>

</tr><tr class="data line1 pari" id="tr-fondi-15">
	<td class="col-radio"><input type="radio" name="fondoButton" value="15"></td>
	<td class="col-descrizione">BGF Emg Mkts Local Ccy Bond E2 $</td>
	<td class="col-category">Obb. Paesi Emergenti</td>
	<td class="col-isin">LU0374975414</td>

</tr><tr class="data line0 dispari" id="tr-fondi-16">
	<td class="col-radio"><input type="radio" name="fondoButton" value="16"></td>
	<td class="col-descrizione">BGF Latin American E2 GBP</td>
	<td class="col-category">Azionari Paesi Emergenti</td>
	<td class="col-isin">LU0171289811</td>

</tr><tr class="data line1 pari" id="tr-fondi-17">
	<td class="col-radio"><input type="radio" name="fondoButton" value="17"></td>
	<td class="col-descrizione">BGF Euro Markets E2 EUR</td>
	<td class="col-category">Azionari Area Euro</td>
	<td class="col-isin">LU0093503141</td>

</tr><tr class="data line0 dispari" id="tr-fondi-18">
	<td class="col-radio"><input type="radio" name="fondoButton" value="18"></td>
	<td class="col-descrizione">BGF Global Corporate Bond Hedged E2 EUR</td>
	<td class="col-category">Obb. Intern. Corporate Investment Grade</td>
	<td class="col-isin">LU0307653898</td>

</tr><tr class="data line1 pari" id="tr-fondi-19">
	<td class="col-radio"><input type="radio" name="fondoButton" value="19"></td>
	<td class="col-descrizione">BGF European Equity Income E2 Cap EUR</td>
	<td class="col-category">Azionari Europa</td>
	<td class="col-isin">LU0628612748</td>

</tr></tbody><thead>
								<tr>
									<th class="sort unsort" id="th-radio" sort="none" format="radioButton">&nbsp;</th>
									<th class="sort" id="th-descrizione" sort="default" width="45%"><a class="sortDir" href="#">Descrizione</a></th>
									<th class="sort" id="th-category" sort="default" width="40%"><a class="sortDir" href="#">Categoria</a></th>
									<th class="sort unsort" id="th-isin" sort="none" width="15%">isin</th>
								</tr>
								
							
							</thead>
						
					</table><div class="resPag bottom"><div class="resPagRight"><span><strong class="numResults">139</strong> risultati</span><div class="pulsantiera"><a href="#" class="nobutt off">&lt;&lt;</a><a href="#" class="nobutt off">&lt;</a><a href="#" class="active">1</a><a href="#">2</a><a href="#" style="visibility: visible;">3</a><a href="#" class="nobutt">&gt;</a><a href="#" class="nobutt">&gt;&gt;</a></div></div></div>
					<br class="clear"><a href="javascript:visualizzaFondoSwitch();" class="btnformright" title="conferma"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
				</div>
 			</div>


 <!-- PROSEGUI -->

 <div id="fondoSwitch">
<div class="tithelp">
	<div class="helpleft"><span id="tipologiaStrumentoOut">Sicav di destinazione</span></div>	
	<br class="clear"></div>
		<table class="form01 out">
	<tbody>
		<tr>
			<td class="uno" width="105"><span id="tipoStrumentoOut">Sicav</span> </td>					
			<td width="220"><strong><span id="dFund"><a href="javascript:apriSchedaFondoFida('LU0147403843');"><strong>BGF Global Smallcap E2 $</strong></a></span></strong></td>
			<input type="hidden" name="descrizioneFondoSwitch" value="BGF Global Smallcap E2 $">
			<td class="uno" width="105"></td>
			<td><span id="cambiaFondoSwitch"><div id="btn01"><a href="#1" class="btnevid1" title="scegli un altro fondo" onclick="insertDiv();"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>scegli un altro fondo/sicav</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div></span></td>				
		</tr>
		<tr>
			<td class="uno" width="105">Società di gestione</td>					
			<td width="220"><strong><span id="descrizioneSocieta">BlackRock (Luxembourg) S.A.</span></strong></td>
			<td class="uno" width="105">Categoria Assogestioni</td>
			<td width="225"><strong><span id="categoria">Azionari Internazionali</span></strong></td>
			<input type="hidden" name="categoriaFondoSwitch" value="Azionari Internazionali">
		</tr>
		<tr>
			<td class="uno" width="105">Modalità di investimento</td>					
			<td width="220"><strong>Unico acquisto (PIC)</strong></td>
			<td class="uno" width="105">Valore quota/N.A.V al <span id="dataValoreQuotaSw">22/06/2015</span></td>
			<input type="hidden" name="dataValoreQuotaFondoSwitch" value="22/06/2015">
			<td width="225"><strong><span id="valoreQuotaSw">88,16</span>&nbsp;<span id="valutaFondoSw">USD</span> </strong></td>
			<input type="hidden" name="valoreQuotaFondoSwitch" value="88.16">
		</tr>
		<tr>
			<td class="uno" width="105">Aquisto minimo prima sottoscrizione</td>					
			<td width="220"><strong><span id="isotmin">2000</span>&nbsp;EUR</strong></td>
			<input type="hidden" name="isotminFondoSwitch" value="2000">
			<td class="uno" width="105">Acquisto minimo sottoscr. successive</td>
			<td width="225"><strong><span id="isotsuc">1000</span>&nbsp;EUR</strong></td>
			<input type="hidden" name="isotsucFondoSwitch" value="1000">
		</tr>
		<tr>
			<td class="uno" width="105">Spese d'ingresso</td>					
			<td width="220"><strong><span id="ingresso">Gratis</span></strong><span id="lampIngresso">&nbsp;</span></td>
			<input type="hidden" name="ingressoFondoSwitch" value="Gratis">
			<td class="uno" width="105">Spese di gestione</td>
			<td width="225"><strong><span id="gestione">2,00%</span></strong></td>
			<input type="hidden" name="gestioneFondoSwitch" value="2,00%">
		</tr>
		<tr>
			<td class="uno" width="105">Spese di uscita</td>					
			<td width="220"><strong><span id="uscita">Zero</span></strong><span id="tooltipdirinisw" class="uniqTooltipText nodotted" onmouseout="removeUniqTooltip(event,this); vedi('lampa1');" onmouseover="createUniqTooltip(event, this); nascondi('lampa1');" onmousemove="createUniqTooltip(event, this)" style="display: none;"><span class="uniqTooltipPos"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"></span><span class="uniqTooltipInnerHTML">In caso di rimborso di azioni di classe A verranno applicate, direttamente dalla Sicav, delle commissioni di uscita pari allo 0,5%, solo ai nuovi clienti (s'intende coloro che alla data del 15/02/2014 non possedevano nè azioni di classe A nè azioni di classe D).</span></span></td>
			<input type="hidden" name="uscitaFondoSwitch" value="Zero">
			<td class="uno" width="105">Spese diritti fissi</td>
			<td width="225"><strong><span id="diritti">Zero</span></strong></td>
			<input type="hidden" name="dirittiFondoSwitch" value="Zero">
		</tr>
</tbody></table>
</div>

<!-- FINALE -->
<div class="fooform" id="avanti">	
	<div class="fooformright">
		<div><a title="prosegui" class="btnformright" href="javascript:prosegui();"><img alt="" src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		</div>
	<br class="clear">
	</div>	
<br class="clear">
</div>