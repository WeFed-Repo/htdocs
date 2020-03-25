				<h1>Vendita</h1>
				<div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
					<br class="clear">
<SCRIPT>
	var xmlHttpNew;
	
	
	function apriSchedaFondoFida(isin){
	
	 
	var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
	var params = "&codiceIsin="+isin +"&fondo=true";
	var hrefValue = cgi_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.do?" + obs + params;
	top.document.location.href = hrefValue;
	}
	function loadFondi(){
			document.getElementById('dettaglioPac1').style.display = 'none';
			document.getElementById('dettaglioPac2').style.display = 'none';
 			document.getElementById('dettaglioPac3').style.display = 'none';
 			document.getElementById('dettaglioPac4').style.display = 'none';
 			document.getElementById('dettaglioPac5').style.display = 'none';
 			/* document.getElementById('dettaglioPac6').style.display = 'none';
 			document.getElementById('dettaglioPac7').style.display = 'none';
 			document.getElementById('dettaglioSicav').style.display = 'none';
 			document.getElementById('dettaglioSicavSch').style.display = 'none';*/
 			document.getElementById('elencoFondi').style.display = 'none';
 			document.getElementById('avanti').style.display = 'none';
		formInsOrd = this.document.sellFundForm;
		if(6>1){
				var index = formInsOrd.deposito.selectedIndex;
		   		var value = formInsOrd.deposito[index].value;
		}else{
			var value = formInsOrd.deposito.value;
		}
		
		
		if('sell' == "MS_Portafoglio" || 'sell' == "FIDA"){
			
		   		requestFondiMS(value);
		   		
		}
		else
				requestFondi(value);
				
		
	}

	function banner(){
	new Ajax.Updater('boxRetention', cgi_script + "/wbOnetoone/wbblack/ajax/json/getBannerRetention.jsp", {
			parameters: {path: "VENDITA_FONDI" },
			evalScripts: true,		 
			onComplete: function () {
				$("boxRetention").style.display="block"; 
			}
		  });
	}
		
	function requestFondiMS(dep){
		var codiceIsin = '$codiceIsin';
		var codiceFondo = '$codFund';
		var fondoSicav ='$fundSicav';
		var codSocieta ='$codSocieta';
		var numero_casuale=Math.random();
		createXMLHttpRequestNew();		
		xmlHttpNew.onreadystatechange = function() {handleStateChange();};
		xmlHttpNew.open( 'GET', cgi_script + "/FMP/isalFundMS.do?cf="+numero_casuale+"&deposito=" + dep +"&codiceIsin="+codiceIsin +"&fondoSicav="+fondoSicav +"&codiceFondo="+codiceFondo +"&codSocieta="+codSocieta+"&type=SELL", true );
		xmlHttpNew.send(null);
	}
	
	function requestFondi(dep){
		var numero_casuale=Math.random();
		createXMLHttpRequestNew();		
		xmlHttpNew.onreadystatechange = function() {handleStateChange();};
		xmlHttpNew.open( 'GET', cgi_script + "/FMP/isalFund.do?cf="+numero_casuale+"&deposito=" + dep +"&type=SELL", true );
		xmlHttpNew.send(null);
	}

	function handleStateChange() {
		document.getElementById('fondi').style.display ='';
		document.getElementById('fondi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
		if(xmlHttpNew!=null){	
			if (xmlHttpNew.readyState == 4) {							
				if (xmlHttpNew.status == 200) {
					parseXMLNew( xmlHttpNew.responseXML );
				} else {			
					document.getElementById( "fondi").innerHTML = "Dato non disponibile";
				}
			}else{
				document.getElementById('fondi').innerHTML = "<div style=\" text-align:center\"> <img src=\"/wbx-pri/img/ico_loading.gif\"></div>";
			}
		}else{
			document.getElementById('fondi').innerHTML = "Funzione non disponibile";
			
		}			
	}

	
	
	function parseXMLNew( xml ) {
	
			
			document.getElementById('fondi').innerHTML = xmlHttpNew.responseText;
			
			if(document.sellFundForm.numeroFondi.value==0 && document.sellFundForm.messaggioErrore.value != "Errore"){
				$( 'erroreForm' ).style.display = 'none';
				document.getElementById( 'nessunFondo' ).style.display = '';
				document.getElementById( 'labelFondo' ).innerHTML = '';
				$('fondi').innerHTML = '&nbsp;';
			}else if(document.sellFundForm.numeroFondi.value==0 && document.sellFundForm.messaggioErrore.value == "Errore"){
				document.getElementById( 'nessunFondo' ).style.display = 'none';
				document.getElementById( 'labelFondo' ).innerHTML = '';
				$('fondi').innerHTML = '&nbsp;';
				$( 'erroreForm' ).style.display = '';
				$( 'messaggio' ).innerHTML = 'Errore nel recupero dei Fondi & Sicav';			
			}else if(document.sellFundForm.numeroFondi.value>0){
				$( 'erroreForm' ).style.display = 'none';
				document.getElementById( 'nessunFondo' ).style.display = 'none';
				document.getElementById( 'labelFondo' ).innerHTML = 'Fondo/Sicav';
				caricaFondi();
				banner();
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
			alert('Giving up :( Cannot create an XMLHTTP instance');
				return false;
		}
		return true;
	}
	
	function controlloImporto(){
	 val = document.sellFundForm.importo;
	 dec = document.sellFundForm.decImporto;
		if(val.value ==''){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire l'importo";
			return "KO";
		}else if (isNaN(val.value) || val.value <= 0 ){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire l'importo";
			return "KO";				
		}else if (isNaN(dec.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire l'importo";
			return "KO";				
		}
			
			return "OK";
	}
	
	function controlloQuote(val,num){
	 val = document.sellFundForm.quote;
	 dec = document.sellFundForm.decQuote;
	 fondoSicav = document.sellFundForm.fondosicav.value;
		if(val.value ==''){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire le quote";
			return "KO";
		}else if (isNaN(val.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire le quote";
			return "KO";				
		}else if (fondoSicav=="F" && val.value <= 0){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire le quote";
			return "KO";				
		}else if (isNaN(dec.value)){
			document.getElementById('erroreForm').style.display = '';
			document.getElementById('messaggio').innerHTML = "Inserire le quote";
			return "KO";				
		}
			
			return "OK";
	}
	
	
	function prosegui(){
		var deposito = document.sellFundForm.deposito.value;
		var decimaleQuoteSicav=0;
		if(document.sellFundForm.numeroFondi.value>1){
			var index = document.sellFundForm.SelectFundNew.selectedIndex;	
			document.sellFundForm.descrizioneFondo.value = document.sellFundForm.SelectFundNew[index].text;   
			var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
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
						var textImp = "textImporto" + a;
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
						var ind;
						var valur;
						if(document.getElementById(rad).checked){
							document.sellFundForm.tipoInvestimento.value = document.getElementById(rad).value;
							document.sellFundForm.numeroQuote.value = document.getElementById(qtot).value;
							if(document.sellFundForm.tipoInvestimento.value=="PAC"){
							document.sellFundForm.rateResidue.value = document.getElementById(rateRes).value;
							document.sellFundForm.importoRata.value = document.getElementById(impRat).value;
							document.sellFundForm.numeroContratto.value = document.getElementById(numContr).value;
							}
							prosegui = true;
							ind = document.getElementById(sel).selectedIndex;;
							valur =	document.getElementById(sel)[ind].value;
							descModRimb = document.getElementById(sel)[ind].text;
							
							var v = document.sellFundForm.NAV.value;
							var n = document.sellFundForm.numeroQuote.value;
							controvalore = calcolaControvalore(v,n);
							document.sellFundForm.controvalore.value = ""+controvalore.toFixed(2);
								if(valur==0){
									document.getElementById('erroreForm').style.display = '';
									document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo da vendere";
								}else if(valur==1){
									document.sellFundForm.quoteTotali.value = document.getElementById(qtot).value;
									document.sellFundForm.tipoVendita.value = valur;
									document.sellFundForm.descrModRimborso.value = descModRimb;
									procedi="OK";									
								}else if(valur==2){									 
									document.sellFundForm.importo.value = document.getElementById(imp).value;
									document.sellFundForm.decImporto.value = document.getElementById(decImp).value;
									document.sellFundForm.tipoVendita.value = valur;
									document.sellFundForm.descrModRimborso.value = descModRimb;
									procedi = controlloImporto();
								}else if(valur==3){
									document.sellFundForm.quote.value = document.getElementById(quo).value;
									document.sellFundForm.decQuote.value = document.getElementById(decQuo).value;
									document.sellFundForm.tipoVendita.value = valur;
									document.sellFundForm.descrModRimborso.value = descModRimb;
									procedi = controlloQuote();
								}
									var Fondosicav = document.sellFundForm.fondosicav.value;
									document.sellFundForm.codiceFondo.value = document.sellFundForm.CodiceFondoVet.value;
									var deposito = document.sellFundForm.deposito.value;
									if(valur!=0 && procedi=="OK"){
									var Fondosicav = document.sellFundForm.fondosicav.value;
									document.sellFundForm.action="sellFundPreview.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita&deposito=" +deposito +"&fondoSicav="+Fondosicav;
									document.sellFundForm.submit();
								}
						}						
					}
					
						if(prosegui==false){							
							document.getElementById('erroreForm').style.display = '';
							document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare un fondo";
						}					
				
				}else{
					document.sellFundForm.numeroQuote.value = document.getElementById("NumerQuote").value;
					var fun = document.sellFundForm.fondosicav.value;
							decimaleQuoteSicav=3;
							if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="F"){
									var ind = document.sellFundForm.selectImportoPic.selectedIndex;
									var value = document.sellFundForm.selectImportoPic[ind].value;
									var descModRim = document.sellFundForm.selectImportoPic[ind].text;
									document.sellFundForm.descrModRimborso.value = descModRim;
									var v = document.sellFundForm.NAV.value;
									var n = document.sellFundForm.numeroQuote.value.replace(',','.');
									controvalore = calcolaControvalore(v,n);					
									if(value==0){
										document.getElementById('erroreForm').style.display = '';
										document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo da vendere";
						
									}else if(value==1){
										document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
										document.sellFundForm.tipoVendita.value = value;
										procedi="OK";
									}else if(value==2){
										document.sellFundForm.importo.value = document.sellFundForm.importoPic.value;
										document.sellFundForm.decImporto.value = document.sellFundForm.decImportoPic.value;
										document.sellFundForm.tipoVendita.value = value;
										var invDecImp=document.sellFundForm.decImporto.value;
										var invImp=document.sellFundForm.importo.value;
										procedi = controlloImporto();
									}else if(value==3){
										document.sellFundForm.tipoVendita.value = value;
										document.sellFundForm.quote.value = document.sellFundForm.quotePic.value;
										document.sellFundForm.decQuote.value = document.sellFundForm.decQuotePic.value;
										quote = document.sellFundForm.quote.value;
										decQuote = document.sellFundForm.decQuote.value;
										procedi = controlloQuote();
									}
										document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
										document.sellFundForm.codiceFondo.value;
							}else if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="S" && decimaleQuoteSicav==3){
									var ind = document.sellFundForm.selectImportoSicav.selectedIndex;
									var value = document.sellFundForm.selectImportoSicav[ind].value;
									var descModRim = document.sellFundForm.selectImportoSicav[ind].text;
									document.sellFundForm.descrModRimborso.value = descModRim;
									var v = document.sellFundForm.NAV.value;
									var n = document.sellFundForm.numeroQuote.value.replace(',','.');
									controvalore = calcolaControvalore(v,n);					
									if(value==0){
										document.getElementById('erroreForm').style.display = '';
										document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						
									}else if(value==1){
										document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
										document.sellFundForm.tipoVendita.value = value;
										procedi="OK";
									}else if(value==2){
										document.sellFundForm.importo.value = document.sellFundForm.importoSicav.value;
										document.sellFundForm.decImporto.value = document.sellFundForm.decImportoSicav.value;
										document.sellFundForm.tipoVendita.value = value;
										var invDecImp=document.sellFundForm.decImporto.value;
										var invImp=document.sellFundForm.importo.value;
										procedi = controlloImporto(invImp,invDecImp);
									}else if(value==3){
										document.sellFundForm.tipoVendita.value = value;
										document.sellFundForm.quote.value = document.sellFundForm.quoteSicav.value;
										document.sellFundForm.decQuote.value = document.sellFundForm.decQuoteSicav.value;
										quote = document.sellFundForm.quote.value;
										decQuote = document.sellFundForm.decQuote.value;
										procedi = controlloQuote(quote,decQuote);
									}
										document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
										document.sellFundForm.codiceFondo.value;
							}else if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="S" && decimaleQuoteSicav==2){
									var ind = document.sellFundForm.selectImportoSicavSch.selectedIndex;
									var value = document.sellFundForm.selectImportoSicavSch[ind].value;
									var descModRim = document.sellFundForm.selectImportoSicavSch[ind].text;
									document.sellFundForm.descrModRimborso.value = descModRim;
									var v = document.sellFundForm.NAV.value;
									var n = document.sellFundForm.numeroQuote.value.replace(',','.');
									controvalore = calcolaControvalore(v,n);					
									if(value==0){
										document.getElementById('erroreForm').style.display = '';
										document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
						
									}else if(value==1){
										document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
										document.sellFundForm.tipoVendita.value = value;
										procedi="OK";
									}else if(value==2){
										document.sellFundForm.importo.value = document.sellFundForm.importoSicavSch.value;
										document.sellFundForm.decImporto.value = document.sellFundForm.decImportoSicavSch.value;
										document.sellFundForm.tipoVendita.value = value;
										var invDecImp=document.sellFundForm.decImporto.value;
										var invImp=document.sellFundForm.importo.value;
										procedi = controlloImporto(invImp,invDecImp);
									}else if(value==3){
										document.sellFundForm.tipoVendita.value = value;
										document.sellFundForm.quote.value = document.sellFundForm.quoteSicavSch.value;
										document.sellFundForm.decQuote.value = document.sellFundForm.decQuoteSicavSch.value;
										quote = document.sellFundForm.quote.value;
										decQuote = document.sellFundForm.decQuote.value;
										procedi = controlloQuote(quote,decQuote);
									}
										document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
										document.sellFundForm.codiceFondo.value;
							}else if(document.sellFundForm.tipoInvestimento.value=="PAC"){
									var ind = document.sellFundForm.selectImportoPac.selectedIndex;
									var value = document.sellFundForm.selectImportoPac[ind].value;
									var descModRim = document.sellFundForm.selectImportoPac[ind].text;
									document.sellFundForm.descrModRimborso.value = descModRim;
									if(value==0){
										document.getElementById('erroreForm').style.display = '';
										document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo da vendere";
						
									}else if(value==1){
										document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
										document.sellFundForm.tipoVendita.value = value;
										procedi="OK";
									}else if(value==2){
										document.sellFundForm.importo.value = document.sellFundForm.importoPac.value;
										document.sellFundForm.decImporto.value = document.sellFundForm.decImportoPac.value;
										document.sellFundForm.tipoVendita.value = value;
										var invDecImp=document.sellFundForm.decImporto.value;
										var invImp=document.sellFundForm.importo.value;
										procedi = controlloImporto(invImp,invDecImp);
									}else if(value==3){
										document.sellFundForm.tipoVendita.value = value;
										document.sellFundForm.quote.value = document.sellFundForm.quotePac.value;
										document.sellFundForm.decQuote.value = document.sellFundForm.decQuotePac.value;
										var invQuot = document.sellFundForm.quote.value;
										var invDecQuot = document.sellFundForm.decQuote.value;
										procedi = controlloQuote(invQuot,invDecQuot);
									}
										document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
										document.sellFundForm.codiceFondo.value;
							}	
								var deposito = document.sellFundForm.deposito.value;
								var Fondosicav = document.sellFundForm.fondosicav.value;
								if(valur!=0 && procedi=="OK"){
								document.sellFundForm.action="sellFundPreview.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita&deposito=" +deposito +"&fondoSicav="+Fondosicav;
								document.sellFundForm.submit();
					}	
				}
		}
		else{
				document.sellFundForm.numeroQuote.value = document.getElementById("NumerQuote").value;
				var fun = document.sellFundForm.fondosicav.value;
				
						decimaleQuoteSicav=3;
				if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="F"){
					var ind = document.sellFundForm.selectImportoPic.selectedIndex;
					var value = document.sellFundForm.selectImportoPic[ind].value;
					var descModRim = document.sellFundForm.selectImportoPic[ind].text;
					document.sellFundForm.descrModRimborso.value = descModRim;
					var v = document.sellFundForm.NAV.value;
					var n = document.sellFundForm.numeroQuote.value.replace(',','.');
					controvalore = calcolaControvalore(v,n);					
					if(value==0){
						document.getElementById('erroreForm').style.display = '';
						document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
		
					}else if(value==1){
						document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
						document.sellFundForm.tipoVendita.value = value;
						procedi="OK";
					}else if(value==2){
						document.sellFundForm.importo.value = document.sellFundForm.importoPic.value;
						document.sellFundForm.decImporto.value = document.sellFundForm.decImportoPic.value;
						document.sellFundForm.tipoVendita.value = value;
						var invDecImp=document.sellFundForm.decImporto.value;
						var invImp=document.sellFundForm.importo.value;
						procedi = controlloImporto(invImp,invDecImp);
					}else if(value==3){
						document.sellFundForm.tipoVendita.value = value;
						document.sellFundForm.quote.value = document.sellFundForm.quotePic.value;
						document.sellFundForm.decQuote.value = document.sellFundForm.decQuotePic.value;
						quote = document.sellFundForm.quote.value;
						decQuote = document.sellFundForm.decQuote.value;
						procedi = controlloQuote(quote,decQuote);
					}
						document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
						document.sellFundForm.codiceFondo.value;
				}else if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="S" && decimaleQuoteSicav==3){
					var ind = document.sellFundForm.selectImportoSicav.selectedIndex;
					var value = document.sellFundForm.selectImportoSicav[ind].value;
					var descModRim = document.sellFundForm.selectImportoSicav[ind].text;
					document.sellFundForm.descrModRimborso.value = descModRim;
					var v = document.sellFundForm.NAV.value;
					var n = document.sellFundForm.numeroQuote.value.replace(',','.');
					controvalore = calcolaControvalore(v,n);					
					if(value==0){
						document.getElementById('erroreForm').style.display = '';
						document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
		
					}else if(value==1){
						document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
						document.sellFundForm.tipoVendita.value = value;
						procedi="OK";
					}else if(value==2){
						document.sellFundForm.importo.value = document.sellFundForm.importoSicav.value;
						document.sellFundForm.decImporto.value = document.sellFundForm.decImportoSicav.value;
						document.sellFundForm.tipoVendita.value = value;
						var invDecImp=document.sellFundForm.decImporto.value;
						var invImp=document.sellFundForm.importo.value;
						procedi = controlloImporto(invImp,invDecImp);
					}else if(value==3){
						document.sellFundForm.tipoVendita.value = value;
						document.sellFundForm.quote.value = document.sellFundForm.quoteSicav.value;
						document.sellFundForm.decQuote.value = document.sellFundForm.decQuoteSicav.value;
						quote = document.sellFundForm.quote.value;
						decQuote = document.sellFundForm.decQuote.value;
						procedi = controlloQuote(quote,decQuote);
					}
						document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
						document.sellFundForm.codiceFondo.value;
				}else if(document.sellFundForm.tipoInvestimento.value=="PIC" && fun=="S" && decimaleQuoteSicav==2){
					var ind = document.sellFundForm.selectImportoSicavSch.selectedIndex;
					var value = document.sellFundForm.selectImportoSicavSch[ind].value;
					var descModRim = document.sellFundForm.selectImportoSicavSch[ind].text;
					document.sellFundForm.descrModRimborso.value = descModRim;
					var v = document.sellFundForm.NAV.value;
					var n = document.sellFundForm.numeroQuote.value.replace(',','.');
					controvalore = calcolaControvalore(v,n);					
					if(value==0){
						document.getElementById('erroreForm').style.display = '';
						document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo";
		
					}else if(value==1){
						document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
						document.sellFundForm.tipoVendita.value = value;
						procedi="OK";
					}else if(value==2){
						document.sellFundForm.importo.value = document.sellFundForm.importoSicavSch.value;
						document.sellFundForm.decImporto.value = document.sellFundForm.decImportoSicavSch.value;
						document.sellFundForm.tipoVendita.value = value;
						var invDecImp=document.sellFundForm.decImporto.value;
						var invImp=document.sellFundForm.importo.value;
						procedi = controlloImporto(invImp,invDecImp);
					}else if(value==3){
						document.sellFundForm.tipoVendita.value = value;
						document.sellFundForm.quote.value = document.sellFundForm.quoteSicavSch.value;
						document.sellFundForm.decQuote.value = document.sellFundForm.decQuoteSicavSch.value;
						quote = document.sellFundForm.quote.value;
						decQuote = document.sellFundForm.decQuote.value;
						procedi = controlloQuote(quote,decQuote);
					}
						document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
						document.sellFundForm.codiceFondo.value;
				}else if(document.sellFundForm.tipoInvestimento.value=="PAC"){
					var ind = document.sellFundForm.selectImportoPac.selectedIndex;
					var value = document.sellFundForm.selectImportoPac[ind].value;
					var descModRim = document.sellFundForm.selectImportoPac[ind].text;
					document.sellFundForm.descrModRimborso.value = descModRim;
					if(value==0){
						document.getElementById('erroreForm').style.display = '';
						document.getElementById('messaggio').innerHTML = "Per proseguire bisogna selezionare la quantit&agrave; di quote o importo da vendere";
		
					}else if(value==1){
						document.sellFundForm.quoteTotali.value = document.sellFundForm.numeroQuote.value.replace(',','.');
						document.sellFundForm.tipoVendita.value = value;
						procedi="OK";
					}else if(value==2){
						document.sellFundForm.importo.value = document.sellFundForm.importoPac.value;
						document.sellFundForm.decImporto.value = document.sellFundForm.decImportoPac.value;
						document.sellFundForm.tipoVendita.value = value;
						var invDecImp=document.sellFundForm.decImporto.value;
						var invImp=document.sellFundForm.importo.value;
						procedi = controlloImporto(invImp,invDecImp);
					}else if(value==3){
						document.sellFundForm.tipoVendita.value = value;
						document.sellFundForm.quote.value = document.sellFundForm.quotePac.value;
						document.sellFundForm.decQuote.value = document.sellFundForm.decQuotePac.value;
						var invQuot = document.sellFundForm.quote.value;
						var invDecQuot = document.sellFundForm.decQuote.value;
						procedi = controlloQuote(invQuot,invDecQuot);
					}
						document.sellFundForm.numeroContratto.value = document.getElementById("ParametroModulo").value;
						document.sellFundForm.codiceFondo.value;
				}	
					var deposito = document.sellFundForm.deposito.value;
					var Fondosicav = document.sellFundForm.fondosicav.value;
					if(valur!=0 && procedi=="OK"){
					document.sellFundForm.action="sellFundPreview.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita&deposito=" +deposito +"&fondoSicav="+Fondosicav;
					document.sellFundForm.submit();
					}	
		}
		
	}
	
	
	function caricaFondi(){
		if(document.sellFundForm.numeroFondi.value>1){
			var numFund = document.getElementById("SelectFundNew");
			var descrizione ="";
			var descriOld="";
			var valOld ="";
			var val ="";
  				for(var a=0, b=document.sellFundForm.numeroFondi.value; a<b; a++ ){	
					descrizione = document.sellFundForm.SelectFund[a].text;
					val = document.sellFundForm.SelectFund[a].value;
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
			document.getElementById("SelectFund").style.display = 'none';
			document.getElementById("SelectFundNew").style.display = '';
			loadDettaglio();
		}else if(document.sellFundForm.numeroFondi.value==1){
			loadDettaglioUnico();
		}else{
			document.getElementById('dettaglioPac1').style.display = 'none';
			document.getElementById('dettaglioPac2').style.display = 'none';
 			document.getElementById('dettaglioPac3').style.display = 'none';
 			document.getElementById('dettaglioPac4').style.display = 'none';
 			document.getElementById('dettaglioPac5').style.display = 'none';
 			/* document.getElementById('dettaglioPac6').style.display = 'none'; */
 			document.getElementById('dettaglioPac7').style.display = 'none';
 			document.getElementById('dettaglioSicav').style.display = 'none';
 			document.getElementById('dettaglioSicavSch').style.display = 'none';
 			document.getElementById('elencoFondi').style.display = 'none';
 			document.getElementById('avanti').style.display = 'none';
		}
	}
	
	function loadDettaglio(){
			$('closePac').style.display = 'none';
 		 	document.getElementById( 'nessunFondo' ).style.display = 'none';
 			document.getElementById('avanti').style.display = '';
			var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.sellFundForm.SelectFundNew[index].value;
			document.sellFundForm.descrizioneFondo.value = document.sellFundForm.SelectFundNew[index].text;	
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
			document.getElementById('tipologiaStrumento').style.display = '';
			if(numeroFondi>1){
				
				document.getElementById('dettaglioPac1').style.display = '';
 				document.getElementById('dettaglioPac2').style.display = 'none';
 				document.getElementById('dettaglioPac3').style.display = 'none';
 				document.getElementById('dettaglioPac4').style.display = 'none';
 				document.getElementById('dettaglioPac5').style.display = 'none';
 				/* document.getElementById('dettaglioPac6').style.display = 'none';*/
 				document.getElementById('dettaglioPac7').style.display = 'none';
 				document.getElementById('dettaglioSicav').style.display = 'none';
 				document.getElementById('dettaglioSicavSch').style.display = 'none';
				document.getElementById('elencoFondi').style.display = '';
					
					var elencoFondiPac ="";						
					var titleFondiPac ="";
					var textFondiPicPac ="";
					var titleFondiPic ="";
					var elencoFondiPic ="";
					var totaleFondiPac ="";
					var totaleFondiPic ="";
					
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
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					
					var tipoInvestVet = valoriVet.substring(indVet+1,valoriVet.length);						
					document.sellFundForm.codiceFondo.value = CodiceFondoVet;
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					
					var codiceSocietaGestioneVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.codiceSocietaDiGestione.value = codiceSocietaGestioneVet;
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					
					var valoreQuotaVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.NAV.value = valoreQuotaVet;
					valoriVet = valoriVet.substring(0,indVet); 
					  
					indVet = valoriVet.lastIndexOf("|");
					var tipoDivisaVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.divisa.value = tipoDivisaVet;
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					
					var dataPrezzoQuotaVet = valoriVet.substring(indVet+1,valoriVet.length);					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codAzioneFondoVet = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codFamFondoVet = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.codiceFamiglia.value = codFamFondoVet;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var fondoSicav = valoriVet.substring(indVet+1,valoriVet.length);
					
					if(fondoSicav=='S')
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
					else if(fondoSicav=='F')
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
						
					document.sellFundForm.fondosicav.value = fondoSicav;
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var cambio = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.dataCambioValuta.value = cambio;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var datacambio = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.dataCambioValuta.value = datacambio;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var isin = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.codiceIsin.value = isin;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var descrizioneFondo = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.descrizioneFondo.value = descrizioneFondo;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var descSocietaGestione = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var speseFisse = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var speseRimborso = valoriVet.substring(indVet+1,valoriVet.length);
					document.sellFundForm.speseFisse.value = speseRimborso;					
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var speseSwitch = valoriVet.substring(indVet+1,valoriVet.length);
					
					valoriVet = valoriVet.substring(0,indVet);    
					indVet = valoriVet.lastIndexOf("|");
					var codicefida = valoriVet.substring(indVet+1,valoriVet.length);
					
					//LINK_SCHEDAFONDO
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					document.getElementById('apriScheda').innerHTML ="<div><a title='apri la scheda fondo' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
					document.getElementById('valoreQuota').innerHTML = valoreQuotaVet.replace('.',',') + " " +tipoDivisaVet
					document.getElementById('dataValoreQuota').innerHTML = dataPrezzoQuotaVet;
					document.sellFundForm.dataNAV.value = dataPrezzoQuotaVet;
					controvalore = calcolaControvalore(valoreQuotaVet,NumeroQuoteVet).toFixed(2).replace('.',',');	
					document.sellFundForm.valoreQuotaFondo.value = valoreQuotaVet;
					var radio = "id=radioFondo" + c;
					var nameSelect = "id=selectImporto" + c;
					var nameFunctionPac =  "onchange=javascript:cambiaImportoFundPac("+c+","+numeroFondi+",'"+tipoDivisaVet+"');";
					var nameFunctionPic =  "onchange=javascript:cambiaImportoFundPic("+c+","+numeroFondi+",'"+tipoDivisaVet+"');";
					var texImp = "<span id=textImporto"+c+"></span>";
					var test = "<span id=testo"+c+"></span>";
					var contVal = "<span id=controvalore"+c+"></span>";
					var disabilita = "onclick=javascript:disabilitaFondi("+c+","+numeroFondi+");";
					var numContratto = "<input type=hidden id=numeroContratto" + c+" value="+ParametroModuloVet +" />";
					var quoteTot = "<input type=hidden id=quoteTotali" + c+" value="+NumeroQuoteVet +" />";
					var codFund = "<input type=hidden name=CodiceFondoVet value="+CodiceFondoVet+" />";
					var rateRes = "<input type=hidden id=rateResidue" + c+" value="+RateResidueVet +" />";
					var impRata = "<input type=hidden id=importoRata" + c+" value="+ImportoRataVet +" />";
						if(tipoInvestVet=="PAC"){
							titleFondiPac = "<tr><td class='grscuro' colspan='4'><input type='radio' value='PAC' " +radio+ " " + disabilita + " " +" class='nobor3' />quote provenienti da PAC n. <strong>" + ParametroModuloVet + numContratto+"</strong></td></tr>";
							elencoFondiPac = "<tr><td class='uno' width='105'>N. quote/azioni nel portafoglio selezionato</td><td><strong>"+NumeroQuoteVet.replace('.',',')+"</strong></td>" + quoteTot +"<td class='uno' width='105'>Controvalore</td><td width='225'><strong>"+ controvalore + " " + tipoDivisaVet +"</strong></td></tr>";
							elencoRatePac = "<tr><td class='uno'>Importo rata</td><td><strong>" +ImportoRataVet+"</strong></td>"+impRata+"<td class='uno'>Rate residue</td><td><strong>" +RateResidueVet+"</strong></td>"+rateRes+"</tr>";				
							textFondiPicPac = "<tr><td class='uno'>Quante quote vuoi vendere?</td><td><select disabled='disabled' class='lungmax' "+nameSelect+" " + nameFunctionPac +"><option value='0'>--seleziona--</option><option value='1'>Tutte le quote nel deposito selezionato</option><option value='2'>Importo</option><option value='3'>Numero di quote</option></select></td><td>"+test+"</td><td>"+texImp+"</td></tr>";
							totaleFondiPac = totaleFondiPac + titleFondiPac + elencoFondiPac + elencoRatePac+textFondiPicPac;
						}else{
							titleFondiPic = "<tr><td class='grscuro' colspan='4'><input type='radio' value='PIC' " +radio+ " " + disabilita + " " +" class='nobor3' />quote provenienti da acquisto unico</td></tr>";
							textFondiPicPac ="<tr><td class='uno'>Quante quote vuoi vendere?</td><td><select disabled='disabled' class='lungmax' "+nameSelect+" " + nameFunctionPic +"><option value='0'>--seleziona--</option><option value='1'>Tutte le quote nel deposito selezionato</option><option value='2'>Importo</option><option value='3'>Numero di quote</option></select></td><td>"+test+"</td><td>"+texImp+"</td></tr>";
							elencoFondiPic = "<tr><td class='uno' width='105'>N. quote/azioni nel portafoglio selezionato</td><td><strong>"+NumeroQuoteVet.replace('.',',')+"</strong></td>" + quoteTot +"<td class='uno' width='105'>Controvalore</td><td width='225'><strong>"+ controvalore + " " + tipoDivisaVet +"</strong></td></tr>";
							totaleFondiPic = totaleFondiPic + titleFondiPic + elencoFondiPic + textFondiPicPac;
						}						
				}
				var titTable ="<div class='tithelp'><div class='helpleft'>Scegli quali quote vuoi vendere</div><br class='clear'></div>";
			
				var inizioTableElenco = "<table class='form01 out'><tbody>";
				var fineTableElenco = "</tbody></table>";
				var totaleTableElenco = titTable+inizioTableElenco + totaleFondiPic + totaleFondiPac + codFund + fineTableElenco;
				document.getElementById("elencoFondi").innerHTML = totaleTableElenco;
			}else{
					document.getElementById('elencoFondi').style.display = 'none';
					 		
					var ind = valoriOption.lastIndexOf("|");
					var ParametroModulo = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('ParametroModulo').innerHTML = ParametroModulo;
					document.getElementById('ParametroModulo').value = ParametroModulo;
					valoriOption = valoriOption.substring(0,ind);
					ind = valoriOption.lastIndexOf("|");
					
					RateResidue = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('RateRes').innerHTML = RateResidue;
					document.sellFundForm.rateResidue.value = RateResidue;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					
					ImportoRata = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('ImportRata').innerHTML = ImportoRata;
					document.sellFundForm.importoRata.value = ImportoRata;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					NumeroQuote = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('NumerQuote').innerHTML = NumeroQuote.replace('.',',');
					document.getElementById('NumerQuote').value = NumeroQuote.replace('.',',');
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					CodiceFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceFondo.value = CodiceFondo;
					//document.getElementById('CodiceFondo').value = CodiceFondo;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoInvestimento = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.tipoInvestimento.value= tipoInvestimento;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codiceSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceSocietaDiGestione.value = codiceSocietaGestione;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var valoreQuota = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.NAV.value = valoreQuota;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoDivisa = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.divisa.value = tipoDivisa;
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var dataPrezzoQuota = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codAzioneFondo = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codFamFondo = valoriOption.substring(ind+1,valoriOption.length);					
					document.sellFundForm.codiceFamiglia.value = codFamFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var fondoSicav = valoriOption.substring(ind+1,valoriOption.length);
					
					document.sellFundForm.fondosicav.value = fondoSicav;
					if(fondoSicav=='S')
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
					else if(fondoSicav=='F')
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var cambio = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.cambio.value = cambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var datacambio = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.dataCambioValuta.value = datacambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var isin = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceIsin.value = isin;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descrizioneFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.descrizioneFondo.value = descrizioneFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseFisse = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseRimborso = valoriOption.substring(ind+1,valoriOption.length);					
					document.sellFundForm.speseFisse.value = speseRimborso;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseSwitch = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codicefida = valoriOption.substring(ind+1,valoriOption.length);
					
					//LINK_SCHEDAFONDO
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					document.getElementById('apriScheda').innerHTML ="<div><a title='apri la scheda fondo' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
					document.sellFundForm.divisa.value = tipoDivisa;
					document.getElementById('valoreQuota').innerHTML = valoreQuota.replace('.',',') + " " + tipoDivisa;
					document.getElementById('dataValoreQuota').innerHTML = dataPrezzoQuota;
					document.sellFundForm.dataNAV.value = dataPrezzoQuota;
					var controValue = calcolaControvalore(valoreQuota,NumeroQuote);
					var valoreTotale = controValue.toFixed(2);
					var valCambio = ""+(controValue/cambio).toFixed(2);
					if(tipoDivisa=="EUR")
					document.getElementById('controValue').innerHTML = "<strong>" + valoreTotale.replace('.',',') + " " + tipoDivisa+ "</strong>";
					else
					document.getElementById('controValue').innerHTML = "<strong>" +valoreTotale.replace('.',',') + " " + tipoDivisa + "</strong><br/><strong>" +valCambio.replace('.',',')  + " EUR</strong><span class='note'> al cambio del " +datacambio+"</span>";
					document.sellFundForm.controvalore.value = valoreTotale.replace('.',',');
					document.sellFundForm.controvaloreValuta.value = valCambio.replace('.',',');
					document.sellFundForm.dataCambioValuta.value = datacambio;

					var	decimaleQuoteSicav=3;
					/*
				if(tipoInvestimento=="PAC"){
					*/
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = '';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = '';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					/* document.getElementById('dettaglioPac6').style.display = ''; */
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					document.getElementById('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPacUnico("zero");
 					/*
				}else if (tipoInvestimento=="PIC" && fondoSicav=="F"){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = '';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					document.getElementById('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoFundPicUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==3){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = '';
 					document.getElementById('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoSicav("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==2){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					document.getElementById('dettaglioSicavSch').style.display = '';
 					cambiaImportoSicavSch("zero");
 					
				}*/
			}
		
	}
	function calcolaControvalore(val,num){	
	
	var c = Math.round(val*Math.pow(10,3))/Math.pow(10,3);
	var d = Math.round(num*Math.pow(10,3))/Math.pow(10,3);
	
	var t = c*d;
	var tot = new Number(t);
	return tot;
	}
	function loadDettaglioUnico(){
		document.getElementById('tipologiaStrumento').style.display = '';
		document.getElementById( 'nessunFondo' ).style.display = 'none';
		document.getElementById('avanti').style.display = '';
		document.getElementById('elencoFondi').style.display = 'none'; 		
 		$('closePac').style.display = 'none';
 		var decimaleQuoteSicav=0;
						
		 			var valoriOption = document.sellFundForm.fondo.value;	
					var ind = valoriOption.lastIndexOf("|");
					var ParametroModulo = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('ParametroModulo').innerHTML = ParametroModulo;
					document.getElementById('ParametroModulo').value = ParametroModulo;
					document.sellFundForm.numeroContratto.value = ParametroModulo;
					
					valoriOption = valoriOption.substring(0,ind);
					ind = valoriOption.lastIndexOf("|");
					RateResidue = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('RateRes').innerHTML = RateResidue;
					document.sellFundForm.rateResidue.value = RateResidue;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					ImportoRata = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('ImportRata').innerHTML = ImportoRata;
					document.sellFundForm.importoRata.value = ImportoRata;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					NumeroQuote = valoriOption.substring(ind+1,valoriOption.length);
					document.getElementById('NumerQuote').innerHTML = NumeroQuote.replace('.',',');
					document.getElementById('NumerQuote').value = NumeroQuote.replace('.',',');
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					CodiceFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceFondo.value = CodiceFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoInvestimento = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.tipoInvestimento.value= tipoInvestimento;
			
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codiceSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceSocietaDiGestione.value = codiceSocietaGestione;
					valoriOption = valoriOption.substring(0,ind);    
					
					ind = valoriOption.lastIndexOf("|");
					var valoreQuota = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.NAV.value = valoreQuota;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var tipoDivisa = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.divisa.value=tipoDivisa;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var dataPrezzoQuota = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codAzioneFondo = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codFamFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceFamiglia.value = codFamFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var fondoSicav = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.fondosicav.value = fondoSicav;
					if(fondoSicav=='S')
						document.getElementById('tipoStrumento').innerHTML = 'Sicav';
					else if(fondoSicav=='F')
						document.getElementById('tipoStrumento').innerHTML = 'Fondo';
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var cambio = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.cambio.value = cambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var datacambio = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.dataCambioValuta.value = datacambio;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var isin = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.codiceIsin.value = isin;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descFondo = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.descrizioneFondo.value = descFondo;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var descSocietaGestione = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.descrSocietaGestione.value = descSocietaGestione;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseFisse = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseRimborso = valoriOption.substring(ind+1,valoriOption.length);
					document.sellFundForm.speseFisse.value = speseRimborso;
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var speseSwitch = valoriOption.substring(ind+1,valoriOption.length);
					
					valoriOption = valoriOption.substring(0,ind);    
					ind = valoriOption.lastIndexOf("|");
					var codicefida = valoriOption.substring(ind+1,valoriOption.length);
					
					//LINK_SCHEDAFONDO
					var apri = "href=javascript:apriSchedaFondoFida('" + isin + "');";
					document.getElementById('apriScheda').innerHTML ="<div><a title='apri la scheda fondo' class='btnevid1' " + apri + "><img alt='' src='/img/ret/btn_left_sm1.gif'><span>apri la scheda fondo/sicav</span><img alt='' src='/img/ret/btn_right_sm1.gif'></a></div>";
					document.sellFundForm.divisa.value = tipoDivisa;
					
					document.getElementById('valoreQuota').innerHTML = valoreQuota.replace('.',',') + " " + tipoDivisa;
					document.getElementById('dataValoreQuota').innerHTML = dataPrezzoQuota;
					document.sellFundForm.dataNAV.value = dataPrezzoQuota;
					
					var controValue = calcolaControvalore(valoreQuota,NumeroQuote);
					var valoreTotale = controValue.toFixed(2);
					var valCambio = ""+(controValue/cambio).toFixed(2);
					if(tipoDivisa=="EUR")
					document.getElementById('controValue').innerHTML = "<strong>" + valoreTotale.replace('.',',') + " " + tipoDivisa+ "</strong>";
					else
					document.getElementById('controValue').innerHTML = "<strong>" +valoreTotale.replace('.',',') + " " + tipoDivisa + "</strong><br/><strong>" +valCambio.replace('.',',')  + " EUR</strong><span class='note'> al cambio del " +datacambio+"</span>";
					document.sellFundForm.controvalore.value = valoreTotale.replace('.',',');
					document.sellFundForm.controvaloreValuta.value = valCambio.replace('.',',');
					document.sellFundForm.dataCambioValuta.value = datacambio;
					
					decimaleQuoteSicav=3;
				/*		
				if(tipoInvestimento=="PAC"){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = '';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = '';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = '';
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					cambiaImportoFundPacUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="F"){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = '';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					cambiaImportoFundPicUnico("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==3){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = '';
 					document.getElementById('dettaglioSicavSch').style.display = 'none';
 					cambiaImportoSicav("zero");
				}else if (tipoInvestimento=="PIC" && fondoSicav=="S" && decimaleQuoteSicav==2){
					document.getElementById('dettaglioPac1').style.display = '';
					document.getElementById('dettaglioPac2').style.display = 'none';
 					document.getElementById('dettaglioPac3').style.display = '';
 					document.getElementById('dettaglioPac4').style.display = 'none';
 					document.getElementById('dettaglioPac5').style.display = 'none';
 					document.getElementById('dettaglioPac6').style.display = 'none';
 					document.getElementById('dettaglioPac7').style.display = 'none';
 					document.getElementById('dettaglioSicav').style.display = 'none';
 					document.getElementById('dettaglioSicavSch').style.display = '';
 					cambiaImportoSicavSch("zero");
				}
				*/
	}
	
	
	
	
	
	
	function disabilitaFondi(a,num){
		document.getElementById('erroreForm').style.display = 'none';
		for(var c=0;c<num;c++){
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var rad = "radioFondo" + c;
			var t = "testo" + c;
			var chiduiSi = "chiusuraPianoSi"+c;
			var chiduiNo = "chiusuraPianoNi"+c;
			
				if(c==a){
					document.getElementById(sel).disabled=false;
					document.getElementById(textImp).style.display = 'none';
					document.getElementById(rad).checked = true;
				}else{
							
					document.getElementById(sel).disabled=true;
					document.getElementById(sel)[0].selected=true;
					document.getElementById(textImp).style.display = 'none';
					document.getElementById(t).style.display = 'none';
					document.getElementById(rad).checked = false;
				}
	
		}				
	}
	
	
	function selPianoFundSi(a){	
		document.sellFundForm.chiusuraPiano.value = a.value;
	}
	
	function selPianoFundNo(a){
		document.sellFundForm.chiusuraPiano.value = a.value;			
	}
	
	function cambiaImportoFundPac(c,num,div){
			//disabilitaFondi(c,num);
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var testo = "testo"+c;
			var rad = "radioFondo" + c;
			if(!document.getElementById(rad).checked){
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').innerHTML = "Per proseguire devi selezionare la tipologia di contratto";
				document.getElementById(sel)[0].selected=true;
			}else{
			var index = document.getElementById(sel).selectedIndex;
			var valore = document.getElementById(sel)[index].value;
			var fondoSicav = document.sellFundForm.fondosicav.value;
			var idImporto = "id=importo"+c;			
			var idQuote = "id=quote"+c;
			var nameImporto = "name=importo"+c;
			var nameQuote = "name=quote"+c;
			var idDecImporto= "id=decImporto"+c;
			var idDecQuote= "id=decQuote"+c;
			var nameDecImporto= "name=decImporto"+c;
			var nameDecQuote= "name=decQuote"+c;
			var closePacYes= "name=chiusuraPianoSi"+c;
			var quoteCorrisp = "<span id=resultImp"+c +" ></span>";
			var impCorrisp = "<span id=resultQuot"+c +" ></span>";
				if(valore==0){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = '&nbsp;';
					document.getElementById(textImp).style.display = '';
				}else if(valore==1){
					if(fondoSicav=='F'){
					document.getElementById(testo).innerHTML = 'Vuoi anche estinguere il PAC?';
					document.getElementById(textImp).innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' onclick='javascript:selPianoFundNo(this)'; "+closePacYes+" />NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' onclick='javascript:selPianoFundSi(this)'; "+closePacYes+" />SI</div>";
					document.getElementById(textImp).style.display = '';
					document.getElementById(testo).style.display = '';
					}else{
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = '&nbsp;';
					document.getElementById(textImp).style.display = '';
					document.getElementById(testo).style.display = '';
					}
				}else if(valore==2){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = "<input maxlength='9' autocomplete='off' "+ idImporto +" " + nameImporto + " type='text' class='importo' value='' onKeyUp='return EditImpFund(this,0);' onChange='return EditImpFund(this,0);'/> , <input autocomplete='off' "+ idDecImporto + " " +nameDecImporto +" type='text' class='importo2' maxlength='2' value='' onKeyUp='return EditImpDecFund(this,0);' onChange='return EditImpDecFund(this,0);'/>  " +quoteCorrisp +"";
					document.getElementById(textImp).style.display = '';
				}else if(valore==3){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = "<input maxlength='9' autocomplete='off' " + idQuote +" " +nameQuote + " type='text' class='importo' value='' onKeyUp='return EditQuoteFund(this,0);' onChange='return EditQuoteFund(this,0);'/> , <input autocomplete='off' "+ idDecQuote + " " +nameDecQuote +" type='text' class='importo3' maxlength='3' value='' onKeyUp='return EditQuoteDecFund(this,0);' onChange='return EditQuoteDecFund(this,0);'/> " +impCorrisp+"";
					document.getElementById(textImp).style.display = '';
			    }
			}
	}
	
	function EditImpFund(val){	
		var v = val.value;
		var nam = val.name;
		var imp=0;
		var dec=0;
		var ind = "";
		var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameImporto = "importo"+c;
					var nameDecImporto= "decImporto"+c;
					var resultImp ="resultImp"+c;
						if(nam==nameImporto){
				 			dec = document.getElementById(nameDecImporto).value;
				 			ind = resultImp;
						}
				}
				var valQuot = new Number(document.sellFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res/valQuot).toFixed(3);
				if(!isNaN(resTot))
					document.getElementById(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
				else
					document.getElementById(ind).innerHTML ='';
	
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	
	
	function EditImpDecFund(val){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			indice = valoriOption.indexOf("|");
			var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameImporto = "importo"+c;
					var nameDecImporto= "decImporto"+c;
					var resultImp ="resultImp"+c;
						if(nam==nameDecImporto){
				 			imp = document.getElementById(nameImporto).value;
				 			ind = resultImp;
						}
				}
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res/valQuot).toFixed(3);
				if(!isNaN(resTot))
					document.getElementById(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
				else
					document.getElementById(ind).innerHTML ='';
	
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuoteFund(val){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
			var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
			var indice = valoriOption.indexOf("*");
			indice = valoriOption.indexOf("|");
			var numeroFondi = valoriOption.substring(0,indice);
				for(var c=0; c<numeroFondi;c++){
					var nameQuote = "quote"+c;
					var nameDecQuote= "decQuote"+c;
					var resultQuot ="resultQuot"+c;
						if(nam==nameQuote){
				 			dec = document.getElementById(nameDecQuote).value;
				 			ind = resultQuot;
						}
			}
				var valQuot = new Number(document.sellFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res*valQuot).toFixed(2);
					if(!isNaN(resTot))
						document.getElementById(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
					else
						document.getElementById(ind).innerHTML ='';
	
					document.sellFundForm.valoreImportoPerQuote.value =resTot;
					document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDecFund(val){
		var v = val.value;
		var nam = val.name;
		var imp=0;
		var dec=0;
		var ind = "";
		var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
					var nameQuote = "quote"+c;
					var nameDecQuote= "decQuote"+c;
					var resultQuot ="resultQuot"+c;
						if(nam==nameDecQuote){
							imp = document.getElementById(nameQuote).value;
						 	ind = resultQuot;
						}
			}
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				document.getElementById(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				document.getElementById(ind).innerHTML ='';
		
		document.sellFundForm.valoreImportoPerQuote.value =resTot;
		document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
		
	
	function cambiaImportoFundPic(c,num,div){
				
			//disabilitaFondi(c,num);
			var sel = "selectImporto" + c;
			var textImp = "textImporto" + c;
			var testo = "testo"+c;
			var rad = "radioFondo" + c;
			if(!document.getElementById(rad).checked){
				document.getElementById('erroreForm').style.display = '';
				document.getElementById('messaggio').innerHTML = "Per proseguire devi selezionare la tipologia di contratto";
				document.getElementById(sel)[0].selected=true;
			}else{
			var index = document.getElementById(sel).selectedIndex;
			var valore = document.getElementById(sel)[index].value;

			var divisa = document.sellFundForm.divisa.value;
			var dataCambio = document.sellFundForm.dataCambioValuta.value;
			var idImporto = "id=importo"+c;
			var idQuote = "id=quote"+c;
			var nameImporto = "name=importo"+c;
			var nameQuote = "name=quote"+c;
			var idDecImporto= "id=decImporto"+c;
			var idDecQuote= "id=decQuote"+c;
			var nameDecImporto= "name=decImporto"+c;
			var nameDecQuote= "name=decQuote"+c;
			var closePacYes= "id=chiusuraPianoSi"+c;
			var closePacNo= "id=chiusuraPianoNo"+c;
			var cambioCorrisp = "<span id=valoreCambio"+c +" ></span>";
			var quoteCorrisp = "<span id=resultImp"+c +" ></span>";
			var impCorrisp = "<span id=resultQuot"+c +" ></span>";
				if(valore==0){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = '&nbsp;';
					document.getElementById(textImp).style.display = '';
				}else if(valore==1){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = '&nbsp;';
					document.getElementById(textImp).style.display = '';
				}else if(valore==2){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = "<input maxlength='9' autocomplete='off' "+ idImporto + " " +nameImporto + " type='text' class='importo' value='' onKeyUp='return EditImpPic(this,0);' onChange='return EditImpPic(this,0);'/> , <input autocomplete='off' "+ idDecImporto + " " + nameDecImporto+" type='text' class='importo2' maxlength='2' value='' onKeyUp='return EditImpDecPic(this,0);' onChange='return EditImpDecPic(this,0);'/> "+quoteCorrisp+"";
					document.getElementById(textImp).style.display = '';
				}else if(valore==3){
					document.getElementById(testo).innerHTML = '&nbsp;';
					document.getElementById(textImp).innerHTML = "<input maxlength='9' autocomplete='off' " + idQuote + " " + nameQuote + " type='text' class='importo' value='' onKeyUp='return EditQuotePic(this,0);' onChange='return EditQuotePic(this,0);'/> , <input autocomplete='off' "+ idDecQuote + " " + nameDecQuote +" type='text' class='importo3' maxlength='3' value='' onKeyUp='return EditQuoteDecPic(this,0);' onChange='return EditQuoteDecPic(this,0);'/> " + impCorrisp + "";
					document.getElementById(textImp).style.display = '';
			    }
			 }      
		}
	
		function EditImpPic(val,div){
				var v = val.value;
				var nam = val.name;
				var imp=0;
				var dec=0;
				var ind = "";
				var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
				var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
				var indice = valoriOption.indexOf("*");
				indice = valoriOption.indexOf("|");
				var numeroFondi = valoriOption.substring(0,indice);
						for(var c=0; c<numeroFondi;c++){
							var nameImporto = "importo"+c;
							var nameDecImporto= "decImporto"+c;
							var resultImp ="resultImp"+c;
							var valoreCambio = "valoreCambio"+c;
									if(nam==nameImporto){
				 					dec = document.getElementById(nameDecImporto).value;
				 					ind = resultImp;
								}
						}
				var valQuot = new Number(document.sellFundForm.NAV.value);
				var res = new Number(v +"."+dec);
				var resTot = (res/valQuot).toFixed(3);
					if(!isNaN(resTot))
						document.getElementById(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
					else
						document.getElementById(ind).innerHTML ='';
	
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				document.sellFundForm.valoreImportoPerQuote.value =res;
		}
	
	function EditImpDecPic(val,div){
			var v = val.value;
			var nam = val.name;
			var imp=0;
			var dec=0;
			var ind = "";
			var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
				var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
				var indice = valoriOption.indexOf("*");
				indice = valoriOption.indexOf("|");
				var numeroFondi = valoriOption.substring(0,indice);
					for(var c=0; c<numeroFondi;c++){
						var nameImporto = "importo"+c;
						var nameDecImporto= "decImporto"+c;
						var resultImp ="resultImp"+c;
						if(nam==nameDecImporto){
						 imp = document.getElementById(nameImporto).value;
						 ind = resultImp;
						}
					}
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
			document.getElementById(ind).innerHTML = "<strong>EUR</strong><br><span class='note'> corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
			document.getElementById(ind).innerHTML ='';
			
			document.sellFundForm.valoreQuotePerImporto.value =resTot;
			document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuotePic(val,div){
	var v = val.value;
	var nam = val.name;
	var imp=0;
	var dec=0;
	var ind = "";
	var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
				var nameQuote = "quote"+c;
				var nameDecQuote= "decQuote"+c;
				var resultQuot ="resultQuot"+c;
				if(nam==nameQuote){
				 dec = document.getElementById(nameDecQuote).value;
				 ind = resultQuot;
				}
			}
	var valQuot = new Number(document.sellFundForm.NAV.value);
	var res = new Number(v +"."+dec);
	var resTot = (res*valQuot).toFixed(2);
	if(!isNaN(resTot))
	document.getElementById(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
	else
	document.getElementById(ind).innerHTML ='';
	
	document.sellFundForm.valoreImportoPerQuote.value =resTot;
	document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	
	
	
	function EditQuoteDecPic(val,div){
	var v = val.value;
	var nam = val.name;
	var imp=0;
	var dec=0;
	var ind = "";
	var index = document.sellFundForm.SelectFundNew.selectedIndex;	   
		var valoriOption = document.sellFundForm.SelectFundNew[index].value;					
		var indice = valoriOption.indexOf("*");
		indice = valoriOption.indexOf("|");
		var numeroFondi = valoriOption.substring(0,indice);
			for(var c=0; c<numeroFondi;c++){
				var nameQuote = "quote"+c;
				var nameDecQuote= "decQuote"+c;
				var resultQuot ="resultQuot"+c;
				if(nam==nameDecQuote){
				 imp = document.getElementById(nameQuote).value;
				 ind = resultQuot;
				}
			}
	var valQuot = new Number(document.sellFundForm.NAV.value);
	var res = new Number(imp +"."+v);
	var resTot = (res*valQuot).toFixed(2);
	if(!isNaN(resTot))
		document.getElementById(ind).innerHTML = "<br><span class='note'>corrispondenti a <strong>"+ resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
	else
		document.getElementById(ind).innerHTML ='';
	
		document.sellFundForm.valoreImportoPerQuote.value =resTot;
		document.sellFundForm.valoreQuotePerImporto.value =res;
	}

	function cambiaImportoFundPacUnico(c){
			var fondoSicav = document.sellFundForm.fondosicav.value;
			var div = document.sellFundForm.divisa.value;
			document.getElementById('erroreForm').style.display = 'none';
			var index = document.sellFundForm.selectImportoPac.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.sellFundForm.selectImportoPac[0].selected=true;
				}
			else
				var valore = document.sellFundForm.selectImportoPac[index].value;
			if(valore==0){
				document.getElementById('textImportoPac').innerHTML = '&nbsp;';
				document.getElementById('testoPac').innerHTML = '&nbsp;';
			}else if(valore==1){
				if(fondoSicav=='F'){
					document.getElementById('textImportoPac').innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' name='chiusuraPianoPac' onclick='javascript:selPianoFundNo(this)'/>NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' name='chiusuraPianoPac' onclick='javascript:selPianoFundSi(this)'/>SI</div>";
					document.getElementById('testoPac').innerHTML = 'Vuoi anche estinguere il PAC?';
				}else{
					document.getElementById('textImportoPac').innerHTML = '&nbsp;';
					document.getElementById('testoPac').innerHTML = '&nbsp;';
				}
			}else if(valore==2){
				document.getElementById('testoPac').innerHTML = '&nbsp;';
				document.getElementById('textImportoPac').innerHTML = '<input maxlength="9" autocomplete="off" name="importoPac" type="text" class="importo" value="" onKeyUp="return EditImpUnico(this,0);" onChange="return EditImpUnico(this,0);"/> , <input autocomplete="off" name="decImportoPac" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecUnico(this,0);" onChange="return EditImpDecUnico(this,0);"/> <span id="resultImpUnico"></span>';
			}else if(valore==3){
				document.getElementById('testoPac').innerHTML = '&nbsp;';
				document.getElementById('textImportoPac').innerHTML = '<input maxlength="9" autocomplete="off" name="quotePac" type="text" class="importo" value="" onKeyUp="return EditQuoteUnico(this,0);" onChange="return EditQuoteUnico(this,0);"/> , <input autocomplete="off" name="decQuotePac" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecUnico(this,0);" onChange="return EditQuoteDecUnico(this,0);"/> <span id="resultQuotUnico">';
			}        
	}
	
	function EditImpUnico(val){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decImportoPac.value);
		var valQuot = new Number(document.sellFundForm.NAV.value);
		
		document.sellFundForm.importo.value = document.getElementById('controValue').innerHTML.replace(' EUR','');
		var res = new Number(v +"."+dec);
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				document.getElementById('resultImpUnico').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpUnico').innerHTML ='';
				
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				document.sellFundForm.valoreImportoPerQuote.value =res;
	}
		
	
	function EditImpDecUnico(val){
	var v = val.value;
		var imp= new Number(document.sellFundForm.importoPac.value);
				
			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		document.sellFundForm.importo.value = document.getElementById('controValue').innerHTML.replace(' EUR','');
		
		var res = new Number(imp +"."+v);
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				document.getElementById('resultImpUnico').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpUnico').innerHTML ='';
				
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuoteUnico(val){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decQuotePac.value);
				
			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var res = new Number(v +"."+dec);
		document.sellFundForm.numeroQuote.value = document.getElementById("NumerQuote").value;
		
		var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				document.getElementById('resultQuotUnico').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</span>&nbsp;EUR</strong>";
			else
				document.getElementById('resultQuotUnico').innerHTML ='';
				
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDecUnico(val){
	var v = val.value;
		var imp= new Number(document.sellFundForm.quotePac.value);
				
			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var res = new Number(imp +"."+v);
		document.sellFundForm.numeroQuote.value = document.getElementById("NumerQuote").value;
		
		var resTot = (res*valQuot).toFixed(2);
			if(!isNaN(resTot))
				document.getElementById('resultQuotUnico').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</span>&nbsp;EUR</strong>";
			else
				document.getElementById('resultQuotUnico').innerHTML ='';
				
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	
	function cambiaImportoFundPicUnico(c){
			var div = document.sellFundForm.divisa.value;
			document.getElementById('erroreForm').style.display = 'none';
			var index = document.sellFundForm.selectImportoPic.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.sellFundForm.selectImportoPic[0].selected=true;
				}
			else
				var valore = document.sellFundForm.selectImportoPic[index].value;

			if(valore==0){
				document.getElementById('textImportoPic').innerHTML = '&nbsp;';
				document.getElementById('testoPic').innerHTML = '&nbsp;';
			}else if(valore==1){
				document.getElementById('textImportoPic').innerHTML = '&nbsp;';
				document.getElementById('testoPic').innerHTML = '&nbsp;';
				
			}else if(valore==2){
				document.getElementById('testoPic').innerHTML = '&nbsp;';
				document.getElementById('textImportoPic').innerHTML = '<input maxlength="9" autocomplete="off" name="importoPic" type="text" class="importo" value="" onKeyUp="return EditImpPicUnico(this,0);" onChange="return EditImpPicUnico(this,0);"/> , <input autocomplete="off" name="decImportoPic" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecPicUnico(this,0);" onChange="return EditImpDecPicUnico(this,0);"/> <span id="resultImpUnicoPic"></span>';
			}else if(valore==3){
				document.getElementById('testoPic').innerHTML = '&nbsp;';
				document.getElementById('textImportoPic').innerHTML = '<input maxlength="9" autocomplete="off" name="quotePic" type="text" class="importo" value="" onKeyUp="return EditQuotePicUnico(this,0);" onChange="return EditQuotePicUnico(this,0);"/> , <input autocomplete="off" name="decQuotePic" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecPicUnico(this,0);" onChange="return EditQuoteDecPicUnico(this,0);"/> <span id="resultQuotUnicoPic"></span>';
			}      
	}
	
	function EditImpPicUnico(val,div){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decImportoPic.value);		
		var valQuot = new Number(document.sellFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = (res/valQuot).toFixed(3);
		if(!isNaN(resTot))
			document.getElementById('resultImpUnicoPic').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
		else
			document.getElementById('resultImpUnicoPic').innerHTML ='';
			
		document.sellFundForm.valoreQuotePerImporto.value = resTot;
		document.sellFundForm.valoreImportoPerQuote.value = res;
				
	}
	
	function EditImpDecPicUnico(val,div){
		var v = val.value;
		var imp= new Number(document.sellFundForm.importoPic.value);			
		var valQuot = new Number(document.sellFundForm.NAV.value);						
		var res = new Number(imp +"."+v);		
		var resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				document.getElementById('resultImpUnicoPic').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpUnicoPic').innerHTML ='';
				
		document.sellFundForm.valoreQuotePerImporto.value = resTot;
		document.sellFundForm.valoreImportoPerQuote.value = res;
				
	}
	
	
	
	function EditQuotePicUnico(val,div){
		var v = val.value;
		var imp= new Number(document.sellFundForm.decQuotePic.value);			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var res = new Number(v +"."+imp);
		var resTot = (res*valQuot).toFixed(2);			
			if(!isNaN(resTot))
				document.getElementById('resultQuotUnicoPic').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				document.getElementById('resultQuotUnicoPic').innerHTML ='';
				
			document.sellFundForm.valoreImportoPerQuote.value =resTot;
			document.sellFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	function EditQuoteDecPicUnico(val,div){
			var v = val.value;
			var imp= new Number(document.sellFundForm.quotePic.value);
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
							
			if(!isNaN(resTot))
				document.getElementById('resultQuotUnicoPic').innerHTML = "<br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
			else
				document.getElementById('resultQuotUnicoPic').innerHTML ='';
				
			document.sellFundForm.valoreImportoPerQuote.value =resTot;
			document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	function selPianoSi(){
		document.sellFundForm.chiusuraPianoSi.checked = true;
		document.sellFundForm.chiusuraPianoNo.checked = false;
		document.sellFundForm.chiusuraPiano.value = document.sellFundForm.chiusuraPianoSi.value;
	}
	
	function selPianoNo(){
		document.sellFundForm.chiusuraPianoNo.checked = true;
		document.sellFundForm.chiusuraPianoSi.checked = false;
		document.sellFundForm.chiusuraPiano.value = document.sellFundForm.chiusuraPianoNo.value;
	}
	
	function cambiaImporto(){
			document.getElementById('erroreForm').style.display = 'none';
			var index = document.sellFundForm.selectImporto.selectedIndex;	   
			var valore = document.sellFundForm.selectImporto[index].value;
			var div = document.sellFundForm.divisa.value;
			var fund = document.sellFundForm.fondo.value;			
			var indice = fund.indexOf("|");
			var tipo = fund.substring(0,indice);
			var fondoSicav = document.sellFundForm.fondosicav.value;
			if(valore==0){
				document.getElementById('textImporto').innerHTML = '&nbsp;';
				document.getElementById('testo').innerHTML = '&nbsp;';
			}else if(valore==1){
				if(tipo=="PAC"){
					if(fondoSicav=="F"){
						document.getElementById('testo').innerHTML = 'Vuoi anche estinguere il PAC?';
						document.getElementById('textImporto').innerHTML = "<div class='nobor3'><input type='radio' class='nobor3' value='N' name='chiusuraPianoNo' onclick='javascript:selPianoFundNo(this)'/>NO</div><div class='nobor3'><input type='radio' class='nobor3' value='S' name='chiusuraPianoSi' onclick='javascript:selPianoFundSi(this)'/>SI</div>";
					}else{
						document.getElementById('textImporto').innerHTML = '&nbsp;';
						document.getElementById('testo').innerHTML = '&nbsp;';
					}
				}else if(tipo=="PIC"){
				document.getElementById('textImporto').innerHTML = '&nbsp;';
				document.getElementById('testo').innerHTML = '&nbsp;';
				}
			}else if(valore==2){
				document.getElementById('testo').innerHTML = '&nbsp;';
				document.getElementById('textImporto').innerHTML = '<input maxlength="9" autocomplete="off" name="importoUnico" type="text" class="importo" value="" onKeyUp="return EditImp(this,0);" onChange="return EditImp(this,0);"/> , <input autocomplete="off" name="decImportoUnico" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDec(this,0);" onChange="return EditImpDec(this,0);"/> EUR corrispondenti a <strong><span id="resultImp"></span></strong>&nbsp;quote';
				
			}else if(valore==3){
				document.getElementById('testo').innerHTML = '&nbsp;';
				document.getElementById('textImporto').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteUnico" type="text" class="importo" value="" onKeyUp="return EditQuote(this,0);" onChange="return EditQuote(this,0);"/> , <input autocomplete="off" name="decQuoteUnico" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDec(this,0);" onChange="return EditQuoteDec(this,0);"/> corrispondenti a <strong><span id="resultQuot"></span>&nbsp;EUR</strong>';
			}
	}
	
	function EditImp(val,div){
			var v = val.value;
			var dec= new Number(document.sellFundForm.decImportoUnico.value);			
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(v +"."+dec);
			var resTot = (res/valQuot).toFixed(3);
			
			if(!isNaN(resTot))
				document.getElementById('resultImp').innerHTML = resTot.replace('.',',');
			else
				document.getElementById('resultImp').innerHTML ='';				
				
			document.sellFundForm.valoreQuotePerImporto.value =resTot;
			document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditImpDec(val,div){
		var v = val.value;
		var imp= new Number(document.sellFundForm.importoUnico.value);			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var res = new Number(imp +"."+v);
		var resTot = (res/valQuot).toFixed(3);
		
		if(!isNaN(resTot))
			document.getElementById('resultImp').innerHTML = resTot.replace('.',',');
		else
			document.getElementById('resultImp').innerHTML ='';
		
		document.sellFundForm.valoreQuotePerImporto.value =resTot;
		document.sellFundForm.valoreImportoPerQuote.value =res;
	}
	
	function EditQuote(val,div){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decQuoteUnico.value);
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var res = new Number(v +"."+dec);
		var resTot = (res*valQuot).toFixed(2);
			
		if(!isNaN(resTot))
			document.getElementById('resultQuot').innerHTML = resTot.replace('.',',');
		else
			document.getElementById('resultQuot').innerHTML ='';
		
		document.sellFundForm.valoreImportoPerQuote.value =resTot;
		document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	function EditQuoteDec(val,div){
			var v = val.value;
			var imp= new Number(document.sellFundForm.quoteUnico.value);
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var res = new Number(imp +"."+v);
			var resTot = (res*valQuot).toFixed(2);
						
			if(!isNaN(resTot))
				document.getElementById('resultQuot').innerHTML = resTot.replace('.',',');
			else
				document.getElementById('resultQuot').innerHTML ='';
			
			document.sellFundForm.valoreImportoPerQuote.value =resTot;
			document.sellFundForm.valoreQuotePerImporto.value =res;
	}
	
	function calcolaControvaloreCambio(val,num){	
	
	var c = Math.round(val*Math.pow(10,3))/Math.pow(10,3);
	var d = Math.round(num*Math.pow(10,3))/Math.pow(10,3);
	
	var t = c*d;
	var tot = new Number(t);
	return tot;
	}
	function cambiaImportoSicav(c){
			var div = document.sellFundForm.divisa.value;
			document.getElementById('erroreForm').style.display = 'none';
			var index = document.sellFundForm.selectImportoSicav.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.sellFundForm.selectImportoSicav[0].selected=true;
				}
			else
				var valore = document.sellFundForm.selectImportoSicav[index].value;

			if(valore==0){
				document.getElementById('textImportoSicav').innerHTML = '&nbsp;';
				document.getElementById('testoSicav').innerHTML = '&nbsp;';
			}else if(valore==1){
				document.getElementById('textImportoSicav').innerHTML = '&nbsp;';
				document.getElementById('testoSicav').innerHTML = '&nbsp;';
				$('closePac').style.display = '';
			}else if(valore==2){
				document.getElementById('testoSicav').innerHTML = '&nbsp;';
				if(div=="EUR"){
				document.getElementById('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicav" type="text" class="importo" value="" onKeyUp="return EditImpSicav(this,0);" onChange="return EditImpSicav(this,0);"/> , <input autocomplete="off" name="decImportoSicav" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicav(this,0);" onChange="return EditImpDecSicav(this,0);"/> <span id="resultImpSicav"></span>';
				}else{
				document.getElementById('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicav" type="text" class="importo" value="" onKeyUp="return EditImpSicav(this,1);" onChange="return EditImpSicav(this,1);"/> , <input autocomplete="off" name="decImportoSicav" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicav(this,1);" onChange="return EditImpDecSicav(this,1);"/> <span id="resultImpSicav"></span>';
				}
				$('closePac').style.display = 'none';
			}else if(valore==3){
				document.getElementById('testoSicav').innerHTML = '&nbsp;';
				if(div=="EUR"){
				document.getElementById('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicav" type="text" class="importo" value="" onKeyUp="return EditQuoteSicav(this,0);" onChange="return EditQuoteSicav(this,0);"/> , <input autocomplete="off" name="decQuoteSicav" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecSicav(this,0);" onChange="return EditQuoteDecSicav(this,0);"/> <span id="resultQuotSicav"></span>';
				}else{
				document.getElementById('textImportoSicav').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicav" type="text" class="importo" value="" onKeyUp="return EditQuoteSicav(this,1);" onChange="return EditQuoteSicav(this,1);"/> , <input autocomplete="off" name="decQuoteSicav" type="text" class="importo3" maxlength="3" value="" onKeyUp="return EditQuoteDecSicav(this,1);" onChange="return EditQuoteDecSicav(this,1);"/> <span id="resultQuotSicav"></span>';
				}
				$('closePac').style.display = 'none';
			}      
	}
	
	function EditImpSicav(val,div){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decImportoSicav.value);		
		var valQuot = new Number(document.sellFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = 0;
		var divisa = document.sellFundForm.divisa.value;
		
		if(div==1){
			var data = document.sellFundForm.dataCambioValuta.value;
			var cambio = new Number(document.sellFundForm.cambio.value);
			var cam = (res*cambio).toFixed(3);
			resTot = (res/valQuot*cambio).toFixed(3);
			if(!isNaN(cam))
				document.getElementById('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpSicav').innerHTML ='';
		}else if(div==0){
			var data = document.sellFundForm.dataCambioValuta.value;
			var cambio = 1;
			var cam = (res*cambio).toFixed(3);
			resTot = (res/valQuot).toFixed(3);
			if(!isNaN(resTot))
				document.getElementById('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpSicav').innerHTML ='';
		}		
				document.sellFundForm.valoreQuotePerImporto.value = resTot;
				document.sellFundForm.valoreImportoPerQuote.value = res;
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				
	}
	
	function EditImpDecSicav(val,div){
				var v = val.value;
				var imp= new Number(document.sellFundForm.importoSicav.value);			
				var valQuot = new Number(document.sellFundForm.NAV.value);						
				var res = new Number(imp +"."+v);		
				var resTot = 0;
				var divisa = document.sellFundForm.divisa.value;
		
				if(div==1){
					var data = document.sellFundForm.dataCambioValuta.value.replace('.','/');
					var cambio = new Number(document.sellFundForm.cambio.value);
					var cam = (res*cambio).toFixed(3);
					resTot = (res/valQuot*cambio).toFixed(3);
						if(!isNaN(resTot))
							document.getElementById('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							document.getElementById('resultImpSicav').innerHTML ='';
				}else if(div==0){
					var cambio = 1;
					var cam = (res*cambio).toFixed(3);
					resTot = (res/valQuot).toFixed(3);
						if(!isNaN(resTot))
							document.getElementById('resultImpSicav').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							document.getElementById('resultImpSicav').innerHTML ='';
				}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =res;
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				
	}
	
	function EditQuoteSicav(val,div){
	
		var v = val.value;
		var imp= new Number(document.sellFundForm.decQuoteSicav.value);			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var cambio = new Number(document.sellFundForm.cambio.value);
		var res = new Number(v +"."+imp);
		var resTot = 0;
		var divisa = document.sellFundForm.divisa.value;
		var dataCambio = document.sellFundForm.dataCambioValuta.value
		if(div==1){
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					document.getElementById('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					document.getElementById('resultQuotSicav').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					document.getElementById('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					document.getElementById('resultQuotSicav').innerHTML ='';
		}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	
	function EditQuoteDecSicav(val,div){
			var v = val.value;
			var imp= new Number(document.sellFundForm.quoteSicav.value);
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var cambio = document.sellFundForm.cambio.value;
			var res = new Number(imp +"."+v);
			var resTot = 0;
			var divisa = document.sellFundForm.divisa.value;
			var dataCambio = document.sellFundForm.dataCambioValuta.value
		if(div==1){				
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					document.getElementById('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					document.getElementById('resultQuotSicav').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					document.getElementById('resultQuotSicav').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					document.getElementById('resultQuotSicav').innerHTML ='';
		}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	function cambiaImportoSicavSch(c){
			var div = document.sellFundForm.divisa.value;
			document.getElementById('erroreForm').style.display = 'none';
			var index = document.sellFundForm.selectImportoSicavSch.selectedIndex;
			if(c=="zero"){
				var valore =0;
				document.sellFundForm.selectImportoSicavSch[0].selected=true;
				}
			else
				var valore = document.sellFundForm.selectImportoSicavSch[index].value;

			if(valore==0){
				document.getElementById('textImportoSicavSch').innerHTML = '&nbsp;';
				document.getElementById('testoSicavSch').innerHTML = '&nbsp;';
			}else if(valore==1){
				document.getElementById('textImportoSicavSch').innerHTML = '&nbsp;';
				document.getElementById('testoSicavSch').innerHTML = '&nbsp;';
				$('closePac').style.display = '';
			}else if(valore==2){
				document.getElementById('testoSicavSch').innerHTML = '&nbsp;';
				if(div=="EUR"){
				document.getElementById('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicavSch" type="text" class="importo" value="" onKeyUp="return EditImpSicavSch(this,0);" onChange="return EditImpSicavSch(this,0);"/> , <input autocomplete="off" name="decImportoSicavSch" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicavSch(this,0);" onChange="return EditImpDecSicavSch(this,0);"/> <span id="resultImpSicavSch"></span>';
				}else{
				document.getElementById('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="importoSicavSch" type="text" class="importo" value="" onKeyUp="return EditImpSicavSch(this,1);" onChange="return EditImpSicavSch(this,1);"/> , <input autocomplete="off" name="decImportoSicavSch" type="text" class="importo2" maxlength="2" value="" onKeyUp="return EditImpDecSicavSch(this,1);" onChange="return EditImpDecSicavSch(this,1);"/> <span id="resultImpSicavSch"></span>';
				}
				$('closePac').style.display = 'none';
			}else if(valore==3){
				document.getElementById('testoSicavSch').innerHTML = '&nbsp;';
				if(div=="EUR"){
				document.getElementById('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicavSch" type="text" class="importo" value="" onKeyUp="return EditQuoteSicavSch(this,0);" onChange="return EditQuoteSicavSch(this,0);"/> , <input autocomplete="off" name="decQuoteSicavSch" type="text" class="importo3" maxlength="2" value="" onKeyUp="return EditQuoteDecSicavSch(this,0);" onChange="return EditQuoteDecSicavSch(this,0);"/> <span id="resultQuotSicavSch"></span>';
				}else{
				document.getElementById('textImportoSicavSch').innerHTML = '<input maxlength="9" autocomplete="off" name="quoteSicavSch" type="text" class="importo" value="" onKeyUp="return EditQuoteSicavSch(this,1);" onChange="return EditQuoteSicavSch(this,1);"/> , <input autocomplete="off" name="decQuoteSicavSch" type="text" class="importo3" maxlength="2" value="" onKeyUp="return EditQuoteDecSicavSch(this,1);" onChange="return EditQuoteDecSicavSch(this,1);"/> <span id="resultQuotSicavSch"></span>';
				}
				$('closePac').style.display = 'none';
			}      
	}
	
	function EditImpSicavSch(val,div){
		var v = val.value;
		var dec= new Number(document.sellFundForm.decImportoSicavSch.value);		
		var valQuot = new Number(document.sellFundForm.NAV.value);		
		var res = new Number(v +"."+dec);		
		var resTot = 0;
		var divisa = document.sellFundForm.divisa.value;
		
		if(div==1){
			var data = document.sellFundForm.dataCambioValuta.value;
			var cambio = new Number(document.sellFundForm.cambio.value);
			var cam = (res*cambio).toFixed(2);
			resTot = (res/valQuot*cambio).toFixed(2);
			if(!isNaN(cam))
				document.getElementById('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpSicavSch').innerHTML ='';
		}else if(div==0){
			var data = document.sellFundForm.dataCambioValuta.value;
			var cambio = 1;
			var cam = (res*cambio).toFixed(2);
			resTot = (res/valQuot).toFixed(2);
			if(!isNaN(resTot))
				document.getElementById('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
			else
				document.getElementById('resultImpSicavSch').innerHTML ='';
		}		
				document.sellFundForm.valoreQuotePerImporto.value = resTot;
				document.sellFundForm.valoreImportoPerQuote.value = res;
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				
	}
	
	function EditImpDecSicavSch(val,div){
				var v = val.value;
				var imp= new Number(document.sellFundForm.importoSicavSch.value);			
				var valQuot = new Number(document.sellFundForm.NAV.value);						
				var res = new Number(imp +"."+v);		
				var resTot = 0;
				var divisa = document.sellFundForm.divisa.value;
		
				if(div==1){
					var data = document.sellFundForm.dataCambioValuta.value.replace('.','/');
					var cambio = new Number(document.sellFundForm.cambio.value);
					var cam = (res*cambio).toFixed(2);
					resTot = (res/valQuot*cambio).toFixed(2);
						if(!isNaN(resTot))
							document.getElementById('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>&nbsp;corrispondenti a&nbsp;<strong>"+cam.replace('.',',') +"&nbsp;"+ divisa + "</strong>&nbsp;al cambio del&nbsp;" +data +"&nbsp;e a <strong>" +resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							document.getElementById('resultImpSicavSch').innerHTML ='';
				}else if(div==0){
					var cambio = 1;
					var cam = (res*cambio).toFixed(2);
					resTot = (res/valQuot).toFixed(2);
						if(!isNaN(resTot))
							document.getElementById('resultImpSicavSch').innerHTML = "<strong>EUR</strong><br><span class='note'>corrispondenti a <strong>"+resTot.replace('.',',')+"</strong>&nbsp;quote</span>";
						else
							document.getElementById('resultImpSicavSch').innerHTML ='';
				}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =res;
				document.sellFundForm.valoreQuotePerImporto.value =resTot;
				
	}
	
	function EditQuoteSicavSch(val,div){
	
		var v = val.value;
		var imp= new Number(document.sellFundForm.decQuoteSicavSch.value);			
		var valQuot = new Number(document.sellFundForm.NAV.value);
		var cambio = new Number(document.sellFundForm.cambio.value);
		var res = new Number(v +"."+imp);
		var resTot = 0;
		var divisa = document.sellFundForm.divisa.value;
		var dataCambio = document.sellFundForm.dataCambioValuta.value
		if(div==1){
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					document.getElementById('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					document.getElementById('resultQuotSicavSch').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					document.getElementById('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					document.getElementById('resultQuotSicavSch').innerHTML ='';
		}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
				
	}
	
	
	
	function EditQuoteDecSicavSch(val,div){
			var v = val.value;
			var imp= new Number(document.sellFundForm.quoteSicavSch.value);
			var valQuot = new Number(document.sellFundForm.NAV.value);
			var cambio = document.sellFundForm.cambio.value;
			var res = new Number(imp +"."+v);
			var resTot = 0;
			var divisa = document.sellFundForm.divisa.value;
			var dataCambio = document.sellFundForm.dataCambioValuta.value
		if(div==1){				
				var cam = calcolaControvaloreCambio(res,valQuot).toFixed(2);
				var result = calcolaControvaloreCambio(res,valQuot);
				resTot = (result/cambio).toFixed(2);
				if(!isNaN(cam))
					document.getElementById('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong> e&nbsp;<strong>"+cam.replace('.',',')+"&nbsp;"+divisa+"</strong>&nbsp;al cambio del&nbsp;"+dataCambio+"</span>";
				else
					document.getElementById('resultQuotSicavSch').innerHTML ='';
		}else if(div==0){
				var cambio = 1;
				var cam = (resTot*cambio).toFixed(2);
				resTot = (res*valQuot*cambio).toFixed(2);		
				if(!isNaN(resTot))
					document.getElementById('resultQuotSicavSch').innerHTML = "<br><span class='note'>corrispondenti a&nbsp;<strong>"+resTot.replace('.',',')+"&nbsp;EUR</strong></span>";
				else
					document.getElementById('resultQuotSicavSch').innerHTML ='';
		}		
				document.sellFundForm.valoreImportoAlCambio.value = cam;
				document.sellFundForm.valoreImportoPerQuote.value =resTot;
				document.sellFundForm.valoreQuotePerImporto.value =res;
				
	}
	window.onload = loadFondi;
	
	
</SCRIPT>

<FORM action="" name="sellFundForm" method="POST">
<input type="hidden" name="codiceFondo" value=""/>
<input type="hidden" name="codiceSocietaDiGestione" value=""/>
<input type="hidden" name="importo" value="0"/>
<input type="hidden" name="numeroQuote" value="0"/>
<input type="hidden" name="decImporto" value="0"/>
<input type="hidden" name="quote" value="0"/>
<input type="hidden" name="decQuote" value="0"/>
<input type="hidden" name="quoteTotali" value="0"/>
<input type="hidden" name="tipoVendita" value=""/>
<input type="hidden" name="fondosicav" value=""/>
<input type="hidden" name="numeroContratto" value="0"/>
<input type="hidden" name="importoRata" value="0"/>
<input type="hidden" name="rateResidue" value="0"/>
<input type="hidden" name="controvalore" value="0"/>
<input type="hidden" name="controvaloreValuta" value="0"/>
<input type="hidden" name="NAV" value="0"/>
<input type="hidden" name="dataNAV" value="0"/>
<input type="hidden" name="tipoInvestimento" value=""/>
<input type="hidden" name="descrModRimborso" value=""/>
<input type="hidden" name="chiusuraPiano" value=""/>
<input type="hidden" name="descrizioneFondo" value=""/>
<input type="hidden" name="divisa" value=""/>
<input type="hidden" name="codiceIsin" value=""/>
<input type="hidden" name="cambio" value=""/>
<input type="hidden" name="dataCambioValuta" value=""/>
<input type="hidden" name="valoreQuotePerImporto" value="0"/>
<input type="hidden" name="valoreImportoPerQuote" value="0"/> 
<input type="hidden" name="valoreQuotePerImportoVAL" value="0"/>
<input type="hidden" name="valoreImportoPerQuoteVAL" value="0"/> 
<input type="hidden" name="valoreQuotaFondo" value="0"/>
<input type="hidden" name="valoreImportoAlCambio" value=""/>
<input type="hidden" name="descrSocietaGestione" value=""/>
<input type="hidden" name="speseFisse" value=""/>
<input type="hidden" name="durata" value=""/>
<input type="hidden" name="codiceFamiglia" value=""/>
	
	<div id="erroreForm" style="">
		<div class="boxtop"><img alt="" src="/img/ret/box_msgtop.jpg" border="0"   /></div>
		<div class="boxtxt"><p class="box_mess"><img class="dx" alt="" src="/img/ret/img_or_adeguatezza.gif" border="0"   /><img alt="" src="/img/ret/box_attenzione.jpg" border="0"   />
		<br />
				<ul class="alert">				
					<li id="messaggio"></li>				
				</ul>
			<br class="clear">
	</div>
	<br class="clear">
	<div class="boxbottom"><img alt="" src="/img/ret/box_msgbottom.jpg" border="0"   /></div>
	</div>
	
	<div id="boxRetention" style=""></div>
	<div class="tithelp">

	<div class="helpleft">Seleziona il fondo o sicav da vendere</div>
		<div class="BvTableHeaderHelp" align="right">
			<!-- fine funzione ex-popup (ora modale) -->
			<a href="javascript:;" data-tooltip="Se le quote che intendi vendere provengono da differenti posizioni (acquistate in modalit&agrave; Pic o Pac), la vendita va effettuata selezionando una posizione per volta." class="btnico ico-info"></a>
			<!--
			<a href="javascript:pop_up_int(cgi_script + '/common/ExternalHelp.jsp?key=vend');" class="hlp">help</a>	
			<a href="javascript:pop_up_int(cgi_script + '/common/ExternalHelp.jsp?key=vend');"><img alt="" title="help" src="/img/ret/ico2or_help2.gif"></a>
			-->

		</div>
	<br class="clear"></div>

	
	<table class="form01 out">
	<tbody>
	<tr id="tipologiaStrumento" style=""> 
		<td class="uno" width="105">Tipologia strumento</td>
		<td colspan="3"><strong><span id="tipoStrumento"></span></strong></td>
	</tr>
	<tr> 
							<td class="uno" width="105"> Deposito </td>					
				<td width="220">				
					<select name="deposito" id="deposito" class="lungmax" onchange="javascript:loadFondi();">		
													<option value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR</option>
													<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR</option>
													<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR</option>
													<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR</option>
													<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR</option>
													<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR</option>
											</select>
				</td>
							<td class="uno" width="105" id="labelFondo">Fondo/Sicav</td>
				<td width="225">
					<span id="fondi"></span>
				</td>
		</tr>
		
		<tr id="dettaglioPac1" style="">
			<td class="uno" width="105">Valore quota/N.A.V. al <span id='dataValoreQuota'>18/11/2013</span></td>					
			<td><strong><span id='valoreQuota'>999,99</span></strong> 
				<a class="btnico ico-info" data-tooltip="Il valore quota/N.A.V. riportato non corrisponde a quello effettivo al quale sar&agrave; eseguito l'ordine."></a>
				<!--
				<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');" href="#1"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"><span><span><span>Il valore quota/N.A.V. riportato non corrisponde a quello effettivo al quale sar&agrave; eseguito l'ordine.</span></span></span></a></span>
				-->
			</td>
			<td class="uno">&nbsp;</td>
			<td><div id="apriScheda"></div></td>
		</tr>
		
		<tr id="dettaglioPac2" style="">
			<td class="uno" width="105">Importo rata</td>					
			<td width="220"><strong><span id="ImportRata"></span>&nbsp;EUR</strong></td>
			<td class="uno" width="105">Rate residue</td>
			<td width="225"><strong><span id="RateRes"></span></strong></td>
		</tr>
		
		<tr id="dettaglioPac3" style="">
			<td class="uno" width="105">N. Quote/Azioni nel deposito selezionato</td>					
			<td width="220"><strong><span id="NumerQuote"></span></strong></td>
			<td class="uno" width="105">Controvalore</td>
			<td width="225"><span id="controValue"></span></td>
		</tr>
		
		<tr id="dettaglioPac4" style="">
			<td class="uno" width="105">N. contratto PAC</td>					
			<td width="220"><strong><span id="ParametroModulo"></span></strong></td>
			<td class="uno" width="105">&nbsp;</td>
			<td width="225">&nbsp;</td>
		</tr>
		
		<tr id="dettaglioPac5" style=""> 
			<td class="uno" class="lungmax">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImporto"  class="lungmax" onchange="javascript:cambiaImporto();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				<td class="uno" width="105"><span id="testo">Lorem ipsum</td>
				<td width="225"><span id="textImporto"><strong>9.999.999,00</strong></span></td>
			</td>	
		</tr>
		<!--
		<tr id="dettaglioPac6" style=""> 
			<td class="uno" class="lungmax">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoPac"  class="lungmax" onchange="javascript:cambiaImportoFundPacUnico();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				<td class="uno" width="105"><span id="testoPac"></td>
				<td width="225"><span id="textImportoPac"></span></td>
			</td>	
		</tr>
		<tr id="dettaglioPac7" style=""> 
			<td class="uno" class="lungmax">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoPic"  class="lungmax" onchange="javascript:cambiaImportoFundPicUnico();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				<td class="uno" width="105"><span id="testoPic"></td>
				<td width="225"><span id="textImportoPic"></span></td>
			</td>	
		</tr>
		<tr id="dettaglioSicav" style=""> 
			<td class="uno" width="105" class="lungmax">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoSicav"  class="lungmax" onchange="javascript:cambiaImportoSicav();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				<td class="uno" width="105"><span id="testoSicav"></td>
				<td width="225"><span id="textImportoSicav"></span></td>
			</td>	
		</tr>
		<tr id="dettaglioSicavSch" style=""> 
			<td class="uno" width="105" class="lungmax">Quante quote vuoi vendere?</td>
			<td width="220"> 
				<select name="selectImportoSicavSch"  class="lungmax" onchange="javascript:cambiaImportoSicavSch();">											
					<option value="0">--seleziona--</option>
					<option value="1">Tutte le quote nel deposito selezionato</option>
					<option value="2">Importo</option>
					<option value="3">Numero di quote</option>
				</select>
				<td class="uno" width="105"><span id="testoSicavSch"></td>
				<td width="225"><span id="textImportoSicavSch"></span></td>
			</td>	
		</tr>
	-->
		<tr id='closePac' style="">
					</tr>
		</tbody></table>
		<div id="nessunFondo" style="">
					<table cellpadding='0' cellspacing='0' border='0' class='TableF24'>
					<tr>
						<td class='TopF24'><img src='/img/ret/f24_top.gif' border='0' hspace='0' alt='' /></td>
						</tr>
						<tr>
						<td class='BoxF24'><img src="/img/ret/ricerca_vuota.gif" class="icoF24" alt="" align="left" border="0" width="39" height="38">
						Nel deposito titoli selezionato non sono presenti fondi o sicav</td>
						</tr>
					<tr>
						<td class='BottomF24'><img src='/img/ret/f24_bottom.gif' border='0' alt='' /></td>
				</tr>
				</table>
			</div>
			<div id="elencoFondi" style="">
			</div>
			
			<br />
			<div id="avanti" style="" class="fooform">
				
				<div class="fooformright">
					<div><a href="javascript:prosegui()" class="btnformright" title="Prosegui"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div><br class="clear" />
				</div>	
				<br class="clear" />
			</div>
		</FORM>
	</div>
					
			</div>
			<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
		</div>
	</div>
